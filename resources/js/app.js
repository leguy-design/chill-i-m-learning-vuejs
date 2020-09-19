/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);

Vue.component('products-component', require('./components/ProductsComponent.vue').default);
Vue.component('product-component', require('./components/ProductComponent.vue').default);
Vue.component('wish-list-component', require('./components/WishListComponent').default);
Vue.component('panier-component', require('./components/PanierComponent').default);

export default {
    state: {
        currentJoke: 'This is a joke !',
        allJokes: []
    },
    mutations: { //syncrous
        setCurrentJoke(state, payload) {
            state.currentJoke = payload;
            state.allJokes.push(payload)
        }
    },
    actions: {},
    module: {},
    getters: {
        //collecte les infos et les renvoie partout
        getcurrentJoke: state => state.currentJoke
    }
}

const app = new Vue({
    el: '#app',
});

