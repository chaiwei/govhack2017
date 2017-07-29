
import { Config } from './config';
import { Routes } from './router';
import VueRouter from 'vue-router';

const router = new VueRouter({
    mode: 'history',
    base: Config.baseurl,
    routes: Routes
});

window.app = new Vue({
   router
}).$mount('#app');
