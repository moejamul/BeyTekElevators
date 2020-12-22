import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import router from './router';
import component from './components/App';

require('./bootstrap');

window.Vue = require('vue');




// import test from './components/test.vue';
// Vue.component('test', require('./components/test.vue'));
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
    router,
   
 });

