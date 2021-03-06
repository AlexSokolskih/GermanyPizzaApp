import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import MainComponent from "./components/front/MainComponent";
import Landing from "./components/front/Landing";
import Cart from "./components/front/Cart";
import Order from "./components/front/Order";
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
Vue.use(VueRouter);
Vue.use(Vuex)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('main-component', require('./components/front/MainComponent.vue').default);
Vue.component('landing-component', require('./components/front/Landing').default);
Vue.component('cart-component', require('./components/front/Cart').default);
Vue.component('order-component', require('./components/front/Order').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Landing',
            component: Landing
        },
        {
            path: '/cart',
            name: 'cart',
            component: Cart,
        },
        {
            path: '/order',
            name: 'order',
            component: Order,
        },
    ],
});


const store = new Vuex.Store({
    state: {
        cart: {
            pizzas:[],
            totalPrice:0,
            deliveryPrice: 120,
        },
        rates: {
            USD_RUB: 1,
            EUR_RUB: 1,
        },
    },
    mutations: {
        addPizza(state, pizza) {
            state.cart.pizzas.push(pizza);
            state.cart.totalPrice += pizza.price;
        },
        removePizza(state, pizzaRemove) {
            for (var i=0; i<state.cart.pizzas.length; i++){
                if (state.cart.pizzas[i].id == pizzaRemove.id){
                    state.cart.pizzas.splice(i, 1);
                    state.cart.totalPrice -= pizzaRemove.price;
                    break;
                }
            }
        },
    },
    getters: {
        countPizzasInCart: state => {
            return state.cart.pizzas.length;
        },
        priceEur: state => {
            return (store.getters.totalPriceWithDelivery / state.rates.EUR_RUB).toFixed(2);
        },
        priceUsd: state => {
            return (store.getters.totalPriceWithDelivery / state.rates.USD_RUB).toFixed(2);
        },
        totalPriceWithDelivery: state => {
            return (state.cart.totalPrice + state.cart.deliveryPrice);
        },

    }
})


const app = new Vue({
    el: '#app',
    router,
    store,
});
