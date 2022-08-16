import Vue from 'vue'
import Router from 'vue-router'
import HomeIndex from '../components/HomeIndex'
import Top from "../components/Header/Top";

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'HomeIndex',
      component: HomeIndex
    },
    {
      path:'Top',
      name: 'Top',
      component:Top
    }
  ]
})
