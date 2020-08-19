require('./bootstrap');

window.Vue = require('vue');

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