import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    linkActiveClass: 'active',
    routes: [
        {
            path: '/dashboard',
            name: 'dashboard',
            component: require('./components/dashboard/Dashboard.vue')
        },
        {
            path: '/form',
            name: 'form',
            component: require('./components/templates/Form.vue')
        },
        {
            path: '/user',
            name: 'user',
            component: require('./components/templates/User.vue')
        }
    ]
})

export default router
