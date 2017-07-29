<template>
  <div>
    
    <div class="col-md-2">
        <section class="content-header"><h1>Filter</h1></section>
        <breadcrumbs></breadcrumbs>
        <div class="form-group">
            <label for="filter-year">Year</label>
            <input id="filter-year" type="text" v-model="filter.year" data-provide="slider" 
                data-slider-min="2012"
                data-slider-max="2027"
                data-slider-step="1"
                data-slider-value="2017"
                data-slider-tooltip="show"
            />
        </div>
        <div class="form-group">
            <label for="filter-agegroup">Age</label>
            <input id="filter-agegroup" type="text" v-model="filter.agegroup" data-provide="slider" 
                data-slider-min="0"
                data-slider-max="86"
                data-slider-step="1" 
                data-slider-value="[50,86]"
                data-slider-tooltip="show"
            />
        </div>
        <div class="form-group">
            <label for="filter-agegroup">Gender</label>
            <div class="checkbox">
                <label>
                    <input type="checkbox" v-model="filter.male" v-on:change="regenerateHeatMap" /> Male
                </label>
                <label>
                    <input type="checkbox" v-model="filter.female" v-on:change="regenerateHeatMap" /> Female
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="filter-agegroup">language Spoken</label>
            <input type="text" />
        </div>
        <div class="form-group">
            <label for="filter-agegroup">Dataset</label>
            <div class="checkbox">
                <label>
                    <input type="checkbox" /> Total Operational Aged Care Places and Ratios 2016
                </label>
            </div>
        </div>
        
    </div>
    <div class="col-md-10"><div id="map"></div></div>
    
    
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
                breadcrumbs: ['home'],
                filter: {
                  year: 2016,
                  agegroup: [],
                  male: true,
                  female: true,
                },
                map: null,
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
            regenerateHeatMap(){
                window.generateHeatMap();
              
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
                    axios.get('/ajax/population/'+this.filter.year, { params: this.filter }).then(response => {

                        var heatmapData = [];
                        
                        /*
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
                        */

                        for(var index in response.data){
                            var result = new google.maps.Marker({
                                position: new google.maps.LatLng(
                                    response.data[index].location.lat, 
                                    response.data[index].location.lng
                                ),
                                label: ""+parseInt(response.data[index].weight/1000),
                                title: response.data[index].area + " : " +response.data[index].weight,
                            });
                            heatmapData.push(result);

                        }
                        if(typeof window.markerCluster == 'object'){
                            window.markerCluster.setMap(null);
                        }
                        // Add a marker clusterer to manage the markers.
                        window.markerCluster = new MarkerClusterer(window.map, heatmapData, { 
                            imagePath: Config.baseurl+'img/vendor/js-marker-clusterer/m'
                        });
                        window.markerCluster.calculator_ = function(markers, numStyles) {
                            var index = 0;
                            var count = 0;
                            for(var x in markers){
                              count += (markers[x].label*1);
                            }
                            var dv = count;
                            while (dv !== 0) {
                              dv = parseInt(dv / 10, 10);
                              index++;
                            }

                            index = Math.min(index, numStyles);
                            return {
                              text: count,
                              index: index
                            };
                        };



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
                this.filter.year = slideEvt.value;
                generateHeatMap();
            }.bind(this));

            $("#filter-agegroup").slider({
                tooltip: 'always',
                formatter: function(value) {
                    if (value == 86){
                        value = '85+';
                    }
                    return value;
                }
            }).on("slideStop", function(slideEvt) { 
                this.filter.agegroup = slideEvt.value;
                generateHeatMap();
            }.bind(this));

            $("#filter-agegroup").slider({
                tooltip: 'always',
                formatter: function(value) {
                    if (value == 86){
                        value = '85+';
                    }
                    return value;
                }
            }).on("slideStop", function(slideEvt) { 
                this.filter.agegroup = slideEvt.value;
                generateHeatMap();
            }.bind(this));

            this.initMap();
            this.getGPSLocation();
        }
    }
</script>