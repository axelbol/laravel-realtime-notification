require('./bootstrap');

window.Vue = require('vue');

// Components
Vue.component('order-progress', require('./components/OrderProgress.vue').default);
Vue.component('order-alert', require('./components/OrderAlert.vue').default);

const app = new Vue({
  el: '#app',
  mounted(){
    window.Echo.channel('pizza-tracker')
    .listen('OrderStatusChangedEvent', (e) =>
    {
      console.log('OMG realtime')
    });
  }
});