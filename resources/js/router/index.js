import { createRouter, createWebHistory } from 'vue-router'
import Home from './../views/Home.vue'
import Test from './../views/Test.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'Home', 
      component: Home,
    },
    {
      path: '/test',
      name: 'Test', 
      component: Test,
    }
  ]
})

export default router
