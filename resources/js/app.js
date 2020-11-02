require('./bootstrap');

import { App, plugin } from '@inertiajs/inertia-vue'
import Vue from 'vue'





Vue.mixin({ methods: { route: window.route } })
Vue.prototype.$route = (...args) => route(...args).url()

Vue.use(plugin)
Vue.component('pagination', require('laravel-vue-pagination'));

const el = document.getElementById('app')

if (app) {

    new Vue({
        render: h => h(App, {
          props: {
            initialPage: JSON.parse(el.dataset.page),
            resolveComponent: name => require(`./Pages/${name}`).default,
          },
        }),
      }).$mount(el)
}


