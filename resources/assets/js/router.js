import Vue from 'vue'
import VueRouter from 'vue-router'
import store from './store'

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
        },
        {
            path: '/profile',
            name: 'profile',
            component: require('./components/profile/Profile.vue'),
            children: [
                {
                    path: 'settings',
                    name: 'personal-settings',
                    component: require('./components/profile/Personal.vue')
                },
                {
                    path: 'security',
                    name: 'security-settings',
                    component: require('./components/profile/Security.vue')
                },
            ]
        }
    ]
})

router.beforeEach((to, from, next) => {
    if (store.user.name)
        console.log('User is known')
    else
        console.log('User not set')
    next();
})

export default router
