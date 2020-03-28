import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import VueCountdown from "@chenfengyuan/vue-countdown";

Vue.config.productionTip = false
Vue.use(VueCountdown);

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
