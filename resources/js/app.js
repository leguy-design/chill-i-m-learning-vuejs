/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.component('products-component', require('./components/ProductsComponent.vue').default);
Vue.component('product-component', require('./components/ProductComponent.vue').default);
Vue.component('wish-list', require('./components/ProductComponent.vue').default);


const app = new Vue({
    el: '#app',
});

