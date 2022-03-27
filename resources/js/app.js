require('./bootstrap');

import Vue from 'vue';
import App from './App.vue';
import Alpine from 'alpinejs';
import { BootstrapVue } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue);

window.Alpine = Alpine;

Alpine.start();

const app = new Vue({
    el: '#app',
    render: function (createElement) {
        return createElement(App)
    }
});
