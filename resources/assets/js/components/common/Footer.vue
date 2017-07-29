<template>
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs"  v-html="appVersion"></div>

        <!-- Default to the left -->
        <div v-html="copyright"></div> 
    </footer>
</template>

<script>
    import { Config } from '../../config.js';
    export default {
       data() {
          return {
            appVersion: Config.appVersion,
            copyright: Config.copyright 
          }
        }, 
        mounted() {
            console.log('Footer mounted.')
        }
    }
</script>
