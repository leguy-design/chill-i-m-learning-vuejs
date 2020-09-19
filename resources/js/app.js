/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';


Vue.component('products-component', require('./components/ProductsComponent.vue').default);
Vue.component('jokes-component', require('./components/JokesComponent.vue').default);
Vue.component('wish-list-component', require('./components/WishListComponent').default);
Vue.component('panier-component', require('./components/PanierComponent').default);

const app = new Vue({
    el: '#app',
});
