<template>
  <div>

    <div class="progress">
      <progressbar :now="progress" type="primary" striped></progressbar>
    </div>
    <div class="order-status">
      <strong>Order Status:</strong> {{ statusNew }} <br>

      <img src="/img/pizzaGif.gif" alt="delivery" v-if="progress >= 100">
    </div>

  </div>
</template>

<script>
import { progressbar } from "vue-strap";

export default {
  components: {
    progressbar,
  },

  props: ['status', 'initial', 'order_id'],

  data(){
    return{
      statusNew: this.status,
      progress: this.initial
    }
  },

  mounted() {
    window.Echo.channel('pizza-tracker.' + this.order_id)
    .listen('OrderStatusChangedEvent', (order) =>
    {
      this.statusNew = order.status_name
      this.progress = order.status_percent
    });
  },
};
</script>