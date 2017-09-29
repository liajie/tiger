// 用于加载的Vue构建版本 `import` 命令
// (runtime-only or standalone) 已经设置在webpack.base中。配置有一个别名

//import Router from 'vue-router'
//Vue.use(Router)

//import Arshow from './components/Show'


import Vue from 'vue'

import App from './App'
import router from './router'

Vue.config.productionTip = true
//创建根实例
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})


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
