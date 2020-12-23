import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import router from './router';


require('./bootstrap');

window.Vue = require('vue');

// Vue.Component is used to define a new component 
Vue.component(
    'list_buildings_elevators',
    require('./components/list_buildings_elevators.vue').default
);

Vue.component(
    'App',
    require('./components/App.vue').default
);

Vue.component(
    'addbuildingform',
    require('./components/addbuildingform.vue').default
);



var app = new Vue({
    el: '#app',
    router, //importing the routes from ./router.js
   
 });

