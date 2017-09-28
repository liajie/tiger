// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
//import Router from 'vue-router'
//Vue.use(Router)
import router from './router'
//import Arshow from './components/Show'


Vue.config.productionTip = true
/*
var router = new Router({
	routes: [
		{
			path:'/',
			components: Arshow,
		}
	]
})*/

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})