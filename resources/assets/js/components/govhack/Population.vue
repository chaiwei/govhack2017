<template>
  <div>
    <div class="col-md-2">
        <section class="content-header"><h1>Filter</h1></section>
        <breadcrumbs></breadcrumbs>
        <div class="form-group">
            <label for="exampleInputEmail1">Year</label>
            <input id="filter-year" type="text" v-model="year" data-provide="slider" 
                data-slider-min="2012"
                data-slider-max="2027"
                data-slider-step="1"
                data-slider-value="2017"
                data-slider-tooltip="show"
            />
        </div>
        <div class="form-group">
            <input type="checkbox" /> Population
        </div>
        <div class="form-group">
            <input type="checkbox" /> Age
        </div>
        <div class="form-group">
            <input type="checkbox" /> Sex
        </div>
        <div class="form-group">
            <input type="checkbox" /> Total Operational Aged Care Places and Ratios 2016
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Language Spoken</label>
            <select></select>
        </div>
    </div>
    <div class="col-md-10"><div id="map"></div></div>
    
    
  </div>
</template>
<style>
  .slider.slider-horizontal { width: 100%; }
  #map { height: 550px; width:100%; }
</style>

<script>
    import { Config } from '../../config.js';

    export default {
        data() {
            return {
                breadcrumbs: ['home'],
                map: null,
                year: 2012
            }
        },
        methods : {
            getGPSLocation (){
                var $vm = this;
                navigator.geolocation.getCurrentPosition(function(location) {
                  window.gps.lat = location.coords.latitude;
                  window.gps.lng = location.coords.longitude;
                });
            },
            initMap () {

                // Create a <script> tag and set the USGS URL as the source.
                var script; 
                var $vm = this;
                window.gps = { lat:-26.504146, lng:122.155059 };
                
                if(typeof google != 'object'){
                    script = document.createElement('script');
                    script.src = '//maps.googleapis.com/maps/api/js?key='+Config.GMAP_API_KEY+'&libraries=visualization&callback=initMap';
                    document.getElementsByTagName('head')[0].appendChild(script);
                }else{
                    window.initMap();
                }
                window.map = null;
                window['initMap'] = function(){
                    window.map = new google.maps.Map(document.getElementById('map'), {
                      zoom: 5,
                      center: window.gps,
                      mapTypeId: 'terrain'
                    });
                    generateHeatMap();
                }.bind(this);
                
                window.heatmapLayer = null;
                window['generateHeatMap'] = function(){
                    axios.get('/ajax/population/'+this.year).then(response => {
                         
                        var heatmapData = [];
                        var result;
                        for(var index in response.data){
                            
                            result = {
                              'location': new google.maps.LatLng(
                                 response.data[index].location.lat, 
                                 response.data[index].location.lng
                              ),
                              'weight': response.data[index].weight
                            };
                            heatmapData.push(result);
                        }
                        if(window.heatmapLayer){
                            window.heatmapLayer.setMap(null);
                        }
                        window.heatmapLayer = new google.maps.visualization.HeatmapLayer({
                          data: heatmapData,
                          dissipating: false,
                          map: window.map,
                          radius: 1
                        }); 
                    });
                }.bind(this);

            } 
            
        },
        created() {
            console.log("test created");
        },
        mounted() {
            window['vm'] = this;
            console.log("test mounted");
            $("#filter-year").slider({
                tooltip: 'always'
            }).on("slideStop", function(slideEvt) {
                this.year = slideEvt.value;
                generateHeatMap();
            }.bind(this));
            this.initMap();
            this.getGPSLocation();
        }
    }
</script>