<template>
<header class="main-header">

    <!-- Branding Image -->
    <a class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini" v-html="logoMini"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg" v-html="logoLg"></span>
    </a>

    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <!--<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>-->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            </ul>
        </div>
    </nav>	
</header>
</template>

<script>
    import { Config } from '../../config.js';
    /*
    import Notification from './Notification.vue';
    import Annoucement from './Announcement.vue';
    */

    export default {
        data() {
          return {
            logoLg: Config.logoLg,
            logoMini: Config.logoMini 
          }
        }, 
        mounted() {
            console.log('Header mounted.')
        },
        /*
        components: {
            'notification': Notification,
            'announcement' : Annoucement
        }*/
    }
</script>
