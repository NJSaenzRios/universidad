/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


import Vue from 'vue';
import { routes } from './routes.js';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import axios from 'axios';




window.Vue = require('vue').default;
const App = () =>import('./components/App.vue');
const ExampleComponent = () =>import('./components/ExampleComponent.vue');

Vue.component('app', require('./components/App.vue').default);

Vue.use(VueAxios, axios);
Vue.use(VueRouter);



const router = new VueRouter({
    mode: 'history',
    routes:routes
});


const app = new Vue({
    el: '#app',
    router:router,
    render(h) {
        return h(App)    
    },
});
