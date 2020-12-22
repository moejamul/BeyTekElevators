import Vue from 'vue';
import VueRouter from 'vue-router';
import test from './components/test';
import elevators_list from './components/elevators_list';
import ExampleComponent from './components/ExampleComponent';
import list_managers from './components/list_managers';
import addbuildingform from './components/addbuildingform';
import addmanagerform from './components/addmanagerform';
import addelevatorform from './components/addelevatorform';
import ExampleRoute from '../views/ExampleRoute';

export default new VueRouter({

    routes:[
        {path:'/', name:'listbuildings', component: test},
        {path:'/bruh', name:'bruh', component: ExampleComponent},
        {path:'/test', name:'test', component: ExampleRoute},
        {path:'/elevators', name:'elevators', component: elevators_list},
        {path:'/managers', name:'managers', component: list_managers},
        {path:'/addbuilding', name:'addbuilding', component: addbuildingform},
        {path:'/addmanager', name:'addmanager', component: addmanagerform},
        {path:'/addelevator', name:'addelevator', component: addelevatorform}
    ],
    mode: 'history'

});


