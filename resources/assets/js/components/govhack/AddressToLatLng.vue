<template>
    <div class="row">
        <div class="col-md-7">
            <section class="content-header">
                <h1>Address to Lat Lng Convertion </h1>
            </section>

            <section class="content">
                <div class="row">
                    <div class="col-md-5"> 
                        <textarea class="form-control" v-model="addresses"></textarea> 
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="form-group text-left">
                            <label>Surburb</label>
                            <input class="form-control" v-model="surburb" />
                        </div>
                        <div class="form-group text-left">
                            <label>Country</label>
                            <select class="form-control" v-model="country">
                                <option value="Australia">Australia</option>
                                <option value="Malaysia">Malaysia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="button" class="btn btn-success" @click="setupConvertion" value="Convert" />
                        </div>
                        <div>Process : {{ current_progress_index }}/{{ split_addresses.length }}</div>
                    </div>
                    <div class="col-md-4"> 
                        <textarea class="form-control" v-model="converted_addresses"></textarea> 
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-5">
            <div id="map"></div>
        </div>
    </div>
</template>
<style scoped>
    textarea {
        min-height: 400px;
    }
    #map { height: 550px; width:100%; }
</style>



<script>
    import { Config } from '../../config.js';

    export default {
        data() {
            return {
                addresses: '',
                split_addresses: [],
                converted_addresses: "",
                current_progress_index: 0,
                country: "Australia",
                surburb: "Western Australia",
                inprogress: null,
                map: null
            }
        },
        methods : {
            initMap () {
                if(typeof google != 'object'){
                    var script = document.createElement('script');
                    script.src = '//maps.googleapis.com/maps/api/js?key='+Config.GMAP_API_KEY+'&libraries=visualization&callback=initMap';
                    document.getElementsByTagName('head')[0].appendChild(script);
                }else{
                    initMap();
                }
                window['initMap'] = function(){
                    this.map = new google.maps.Map(document.getElementById('map'), {
                      zoom: 4,
                      mapTypeId: 'terrain'
                    });

                    $.ajax({
                        type: "GET",
                        url: "https://maps.googleapis.com/maps/api/geocode/json?address=" + this.country + "&sensor=false&key=" + Config.GMAP_API_KEY,
                        dataType: "json"
                    }).done(function(data){
                        if(typeof data.results[0] == 'object'){
                            this.map.setCenter(data.results[0].geometry.location);
                        } else {
                            alert(this.country + " can't be found!");
                        }
                    }.bind(this));

                }.bind(this);
                
            },

            setupConvertion () {
                this.split_addresses = this.addresses.split("\n");
                this.current_progress_index = 0;

                this.inprogress = setInterval(function() {
                    if (this.current_progress_index > this.split_addresses.length) {
                        this.current_progress_index = 0;
                        clearInterval(this.inprogress);
                    }else{
                        var address = this.split_addresses[this.current_progress_index];
                        // address = address.split('-').pop();
                        if(address != ''){
                            $.ajax({
                              type: "GET",
                              url: "https://maps.googleapis.com/maps/api/geocode/json?address=" + address + ","+this.surburb+ ","+this.country+"&sensor=false&key=" + Config.GMAP_API_KEY,
                              dataType: "json"
                            }).done(function(data){
                                if(typeof data.results[0] == 'object'){
                                    this.converted_addresses += data.results[0].geometry.location.lat+','+data.results[0].geometry.location.lng+"\n";

                                    var marker = new google.maps.Marker({
                                      position: data.results[0].geometry.location,
                                      map: this.map,
                                      label: ""+this.current_progress_index,
                                      title: address
                                    });
                                    marker.setMap(this.map);

                                }else{
                                    this.converted_addresses += "\n";
                                }
                            }.bind(this));
                        }else{
                            this.converted_addresses += "\n";
                        }
                          
                        this.current_progress_index++;
                    }
                }.bind(this), 2000);
            }
        },
        mounted () {
            this.initMap();
        }
    }
</script>