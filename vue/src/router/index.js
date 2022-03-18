import Vue from 'vue'
import VueRouter from 'vue-router'
import VisueelPage from '../views/VisueelPage.vue'
import NieuwWerkorder from '../components/Werkorders/NieuwWerkorder'
import WerkordersPage from '../views/WerkordersPage.vue'
import DashboardPage from '../views/DashboardPage.vue'
import AgendaPage from '../views/AgendaPage.vue'

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Visueel',
    component: VisueelPage
  },
  {
    path: '/werkorders',
    name: 'Werkorders',
    component: WerkordersPage,
  },
  {
    path: '/werkorders/nieuw',
    component: NieuwWerkorder,
  },
  {
    path: '/dashboard',
    name: 'Dashboard',
    component: DashboardPage
  },
  {
    path: '/agenda',
    name: 'Agenda',
    component: AgendaPage
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
