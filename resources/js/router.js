import Vue from 'vue';
import VueRouter from 'vue-router';
import list_buildings_elevators from './components/list_buildings_elevators';
import elevators_buildingnames_list from './components/elevators_buildingnames_list';
import list_managers from './components/list_managers';
import addbuildingform from './components/addbuildingform';
import addmanagerform from './components/addmanagerform';
import addelevatorform from './components/addelevatorform';
import login from './components/login';
import dashboard from './components/dashboard';
import register from './components/register';


export default new VueRouter({

    //setting up the paths for the components
    //the names of the components will come into use in App.vue

    routes: [
        { path: '/', name: 'listbuildings', component: list_buildings_elevators },
        { path: '/elevators', name: 'elevators', component: elevators_buildingnames_list },
        { path: '/managers', name: 'managers', component: list_managers },
        { path: '/addbuilding', name: 'addbuilding', component: addbuildingform },
        { path: '/addmanager', name: 'addmanager', component: addmanagerform },
        { path: '/addelevator', name: 'addelevator', component: addelevatorform },
        { path: '/login', name: 'login', component: login },
        { path: '/register', name: 'register', component: register },
        { path: '/dashboard', name: 'dashboard', component: dashboard }
    ],
    mode: 'history'

});


