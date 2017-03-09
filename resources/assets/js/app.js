// Required dependencies
require('./bootstrap');

// Import Plugins
import VueStash from 'vue-stash'
import VueSweetAlert  from 'vue-sweetalert'
// Use Plugins
Vue.use(VueStash)
Vue.use(VueSweetAlert)

// Import Router
import router from './router'
// Import Store
import store from './store'

// Use App Layout
Vue.component('app', require('./components/layouts/App.vue'))

// Create App
const app = new Vue({
    el: '#app',
    data: { store },
    router
});
