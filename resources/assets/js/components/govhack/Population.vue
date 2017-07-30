<template>
  <div>
    
    <div class="col-md-3">
        <section class="content-header"><h1>Filter</h1></section>
        <breadcrumbs></breadcrumbs>
        <div class="form-group">
            <br>
            <br>
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
            <br>
            <br>
            <label for="filter-agegroup">Age</label>
            <input id="filter-agegroup" type="text" v-model="filter.agegroup" data-provide="slider" 
                data-slider-min="0"
                data-slider-max="85"
                data-slider-step="1" 
                data-slider-value="[50,85]"
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
            <label for="filter-agegroup">language spoken at home (2016)</label>
            <div class="checkbox clearfix"> 
                <label class="col-md-12">
                    <input type="checkbox" v-model="filter.language.chinese" v-on:change="regenerateHeatMap" /> Chinese
                </label>
                <label class="col-md-12">
                    <input type="checkbox" v-model="filter.language.cantonese" v-on:change="regenerateHeatMap" /> Cantonese
                </label>
                <label class="col-md-12">
                    <input type="checkbox" v-model="filter.language.hakka" v-on:change="regenerateHeatMap" /> Hakka
                </label>
                <label class="col-md-12">
                    <input type="checkbox" v-model="filter.language.mandarin" v-on:change="regenerateHeatMap" /> Mandarin
                </label>
                <label class="col-md-12">
                    <input type="checkbox" v-model="filter.language.minnan" v-on:change="regenerateHeatMap" /> Min Nan
                </label>
                <label class="col-md-12">
                    <input type="checkbox" v-model="filter.language.vietnamese" v-on:change="regenerateHeatMap" /> vietnamese
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="filter-agegroup">Dataset</label>
            <div class="checkbox">
                <label class="col-md-12">
                    <input type="checkbox" v-model="filter.dataset.population" v-on:change="datasetVisibility" /> Population
                </label>
                <label class="col-md-12">
                    <input type="checkbox" v-model="filter.dataset.language" v-on:change="datasetVisibility" /> Language
                </label>
                <label class="col-md-12">
                    <input type="checkbox" v-model="filter.dataset.agecareservice" v-on:change="datasetVisibility" /> Agecare Service
                </label>
            </div>
        </div>
        
    </div>
    <div class="col-md-9"><div id="map"></div></div>
    
    
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
                    year: 2017,
                    agegroup: [50,85],
                    male: true,
                    female: true,
                    language: {
                        chinese: true,
                        cantonese: true,
                        hakka: true,
                        mandarin: true,
                        minnan: true,
                        vietnamese: true,
                    },
                    dataset: {
                        population: true,
                        language: null,
                        agecareservice: true,
                    }
                },
                map: null,
            }
        },
        methods : {
            getGPSLocation () {
                var $vm = this;
                navigator.geolocation.getCurrentPosition(function(location) {
                  window.gps.lat = location.coords.latitude;
                  window.gps.lng = location.coords.longitude;
                });
            },
            datasetVisibility () {
                  
                if(!this.filter.dataset.population){
                    window.markerClusterPopulation.clearMarkers();
                }
                if(!this.filter.dataset.language){
                    //window.markerClusterLanguage.clearMarkers();
                }
                if(!this.filter.dataset.agecareservice){
                    window.markerClusterAgecare.clearMarkers();
                }
                window.generateHeatMap();
            },
            regenerateHeatMap () {
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
                    
                    // language
                    if(this.filter.dataset.language){

                        axios.get('/ajax/languagespoken/'+this.filter.year, { params: this.filter }).then(response => {

                            window.heatmapDataLanguage = [];
                             
                            if(typeof window.markerClusterLanguage == 'object'){
                                window.markerClusterLanguage.clearMarkers();
                            }
                            var image = Config.baseurl+'img/vendor/dmc-gmaps-marker-clusterer/language/m3.png';
                            for(var index in response.data){
                                var result = new google.maps.Marker({
                                    position: new google.maps.LatLng(
                                        response.data[index].location.lat, 
                                        response.data[index].location.lng
                                    ),
                                    animation: google.maps.Animation.DROP,
                                    label: ""+parseInt(response.data[index].weight).toLocaleString(),
                                    title: response.data[index].area + " : " +response.data[index].weight,
                                    icon: image
                                });
                                //window.heatmapDataLanguage.push(result);

                            }
                            // Add a marker clusterer to manage the markers.
                            window.markerClusterLanguage = new MarkerClusterer(window.map, window.heatmapDataLanguage, { 
                                imagePath: Config.baseurl+'img/vendor/dmc-gmaps-marker-clusterer/language/m'
                            });
                            window.markerClusterLanguage.calculator_ = function(markers, numStyles) {
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
                    }
                    
                    if(this.filter.dataset.population){
                        // population
                        axios.get('/ajax/population/'+this.filter.year, { params: this.filter }).then(response => {

                            window.heatmapPopulationData = [];
                             
                            if(typeof window.markerClusterPopulation == 'object'){
                                window.markerClusterPopulation.clearMarkers();
                            }
                            var image = Config.baseurl+'img/vendor/dmc-gmaps-marker-clusterer/population/m3.png';
                            for(var index in response.data){ 
                                var result = new google.maps.Marker({
                                    position: new google.maps.LatLng(
                                        response.data[index].location.lat, 
                                        response.data[index].location.lng
                                    ),
                                    animation: google.maps.Animation.DROP,
                                    label: ""+parseInt(response.data[index].weight),
                                    title: "Population "+response.data[index].area + " : " +response.data[index].weight,
                                    icon: image
                                });
                                window.heatmapPopulationData.push(result);

                            }
                            // Add a marker clusterer to manage the markers.
                            window.markerClusterPopulation = new MarkerClusterer(window.map, window.heatmapPopulationData, { 
                                imagePath: Config.baseurl+'img/vendor/dmc-gmaps-marker-clusterer/population/m'
                            });
                            window.markerClusterPopulation.calculator_ = function(markers, numStyles) {
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
                    }

                    if(this.filter.dataset.agecareservice){
                        // agecare service providers
                        axios.get('/ajax/agecare-service-providers', { params: this.filter }).then(response => {

                            window.heatmapAgecareData = [];
                             
                            if(typeof window.markerClusterAgecare == 'object'){
                                window.markerClusterAgecare.clearMarkers();
                            }
                            var image = Config.baseurl+'img/vendor/dmc-gmaps-marker-clusterer/agecare/m3.png';
                            for(var index in response.data){ 
                                var result = new google.maps.Marker({
                                    position: new google.maps.LatLng(
                                        response.data[index].location.lat, 
                                        response.data[index].location.lng
                                    ),
                                    animation: google.maps.Animation.DROP,
                                    label: ""+response.data[index].weight,
                                    title: "Agecare "+response.data[index].provider_name + " : " +response.data[index].weight,
                                    icon: image
                                });
                                window.heatmapAgecareData.push(result);

                            }
                            // Add a marker clusterer to manage the markers.
                            window.markerClusterAgecare = new MarkerClusterer(window.map, window.heatmapAgecareData, { 
                                imagePath: Config.baseurl+'img/vendor/dmc-gmaps-marker-clusterer/agecare/m'
                            });
                            window.markerClusterAgecare.calculator_ = function(markers, numStyles) {
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
                    }
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