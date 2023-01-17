import { createRouter, createWebHistory } from "vue-router";
import Home from '../components/layout/home.vue'
import Login from '../components/auth/login.vue'
import Register from '../components/auth/register.vue'

const routes = [
  {
    path: '/',
    component: Home,
    name: 'home',
    meta: {
      requiresAuth: true
    }
  },
  {
    path: '/login',
    component: Login,
    name: 'login',
    meta: {
      requiresAuth: false
    }
  },
  {
    path: '/register',
    component: Register,
    name: 'register',
    meta: {
      requiresAuth: false
    }
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

router.beforeEach((to, from) => {
  if (to.meta.requiresAuth && !localStorage.getItem('token')) {
    return { name: 'login'}
  }
  if (!to.meta.requiresAuth && localStorage.getItem('token')) {
    return { name: 'home'}
  }
})

export default router