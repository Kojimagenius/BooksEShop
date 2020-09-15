import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/views/Home'

Vue.use(Router)

export default new Router({
    mode: 'history',
    routes: [
        {
            path:'/',
            component: Home
        },
        {
            path:'/todos',
            component: () => import('./views/Todos.vue')
        },
        {
            path: '/books',
            component: () => import('./views/Books.vue')
        },
        {
            path: '/dummy',
            component: () => import('./views/dummy.vue')
        }
    ]
})