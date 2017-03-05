import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const router = new VueRouter({
    routes: [
        {
            path: '/test',
            name: 'test',
            component: require('./components/templates/Test.vue')
        },
        {
            path: '/example',
            name: 'example',
            component: require('./components/templates/Example.vue')
        }
    ]
})

export default router
