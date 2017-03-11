// Required dependencies
require('./bootstrap');

// Import Plugins
import VueStash from 'vue-stash'
import VueSweetAlert  from 'vue-sweetalert'
import VueEvents from 'vue-events'

// Use Plugins
Vue.use(VueStash)
Vue.use(VueSweetAlert)
Vue.use(VueEvents)

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
