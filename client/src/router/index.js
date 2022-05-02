import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/home'
import Login from '@/components/Login'
import Register from '@/components/Register'
import Profile from '@/components/Profile'
import NewArticle from '@/components/NewArticle'
import EditArticle from '@/components/EditArticle'
import ShowArticle from '@/components/ShowArticle'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/login',
      name: 'Login',
      component: Login
    },
    {
      path: '/register',
      name: 'Register',
      component: Register
    },
    {
      path: '/profile',
      name: 'Profile',
      component: Profile
    },
    {
      path: '/article/new',
      name: 'NewArticle',
      component: NewArticle
    },
    {
      path: '/article/edit/:id',
      name: 'EditArticle',
      component: EditArticle
    },
    {
      path: '/article/:id',
      name: 'ShowArticle',
      component: ShowArticle
    }
  ]
})
