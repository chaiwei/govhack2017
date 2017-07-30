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
    </div>
  </div>
</template>
<script>
    import { Config } from '../../config.js';

    export default {
        data() {
            return {
                
            }
        }
    }
</script>