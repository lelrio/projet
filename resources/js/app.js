import Vue from 'vue'
import VueRouter from 'vue-router'
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue)
Vue.use(VueRouter)

import App from './views/App'
import About from './views/About'
import Contact from './views/Contact'
import Store from './views/Store'
import Home from './views/Home'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About

        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact
        },
        {
            path: '/Store',
            name: 'store',
            component: Store

        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});