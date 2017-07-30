<template>
  <div>
    <div class="col-md-6">
        <section class="content-header"><h1>Find my nearest AgeCare</h1></section>
        <div class="form-group">
            <br><br>
            <label for="filter-location">Location</label>
            <input id="filter-location" type="text" v-model="filter.location" />
            <a class v-on:click="getLocation">getLocation</a>
        </div>
        <div class="form-group">
            <br>
            <label for="filter-distance">Distance</label>
            <input id="filter-distance" type="text" v-model="filter.distance" data-provide="slider" 
                data-slider-min="0"
                data-slider-max="30"
                data-slider-step="1"
                data-slider-value="3"
                data-slider-tooltip="show"
            />
        </div>
        <div class="table-responsive" style="max-height: 300px;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Provider</th>
                        <th>Distance</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(result, index) in results">
                        <td>{{ (index+1) }}</td>
                        <td>{{ result.provider_name }}</td>
                        <td>{{ result.distance+' KM' }}</td>
                        <td>
                          <a class="btn btn-success" href="">Call</a>
                          <a class="btn  btn-warning" target="_blank" v-bind:href="'https://www.google.com.au/maps/dir/'+filter.location+'/'+result.latlng">Direction</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-6">
        <div id="map"></div>
    </div>
  </div>
</template>

<style scoped>
  .slider.slider-horizontal { width: 100%; }
  #map { height: 550px; width:100%; }
  .content-header { padding-left: 0; }
</style>

<script>
    import { Config } from '../../config.js';

    export default {
        data() {
            return {
                filter: {
                    location: '',
                    distance: '3'
                },
                results: []
                
            }
        },
        methods: {
            getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(this.showPosition);
                } else {
                    alert("Geolocation is not supported by this browser.");
                }
            },
            
            showPosition(position) {
                var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                this.filter.location = position.coords.latitude+','+position.coords.longitude;
                
                this.findResults();

                var mapOptions = {
                    scaleControl: true,
                    zoom: 12,
                    zoomControl: true,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    draggableCursor: 'crosshair'
                };

                window.map = new google.maps.Map(document.getElementById('map'), mapOptions);

                this.showMarker();
            },

            clearMarker () {
                 
                if(window.resultMarker != null){
                    // window.resultMarker.setMap(null); 
                }    
            },

            showMarker () {   
     
                window.currentPositionMarker = new google.maps.Marker({
                    position: window.map.getCenter(),
                    map: window.map,
                    title: 'My current location'
                });
                  
            },

            findResults(){
                var $vm = this;
                window.resultMarker = [];
                var image = Config.baseurl+'img/vendor/dmc-gmaps-marker-clusterer/agecare/m0.png';
                axios.get('/ajax/get-nearest-agecare-service-providers', { params: this.filter }).then(response => {
                    $vm.results = response.data;
                    for( var index in response.data) {
                        window.resultMarker.push(new google.maps.Marker({
                            position: new google.maps.LatLng(
                                response.data[index].location.lat, 
                                response.data[index].location.lng
                            ),
                            map: window.map,
                            label: ""+(index*1+1),
                            title: response.data[index].provider_name,
                            icon: image
                        }));
                    }
                });
                
            },

            initMap(){
                var script;
                if(typeof google != 'object'){
                    script = document.createElement('script');
                    script.src = '//maps.googleapis.com/maps/api/js?key='+Config.GMAP_API_KEY+'&libraries=visualization';
                    document.getElementsByTagName('head')[0].appendChild(script);
                }
            }
        },
        mounted() {
            this.initMap();
            $("#filter-distance").slider({
                tooltip: 'always'
            }).on("slideStop", function(slideEvt) {
                this.filter.distance = slideEvt.value;
            }.bind(this));
        } 
    }
</script>