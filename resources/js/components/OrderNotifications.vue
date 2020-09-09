<template>
<li class="nav-item dropdown">
  <a class="nav-link" data-toggle="dropdown" href="#">
    <i class="fas fa-bell"></i>
    <span class="badge badge-danger" v-if="notifications.length > 0">{{notifications.length}}</span>
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
    <li v-for="notification in notifications">
      <a :href="notification.url" class="dropdown-item">
        <i class="fas fa-envelope mr-2"></i> {{ notification.description }}
        <span class="ml-3 pull-right text-muted text-sm">
          <timeago :datetime="notification.time" :auto-update="60"></timeago>
        </span>
      </a>
    </li>

    <div class="dropdown-divider"></div>

    <li>
      <div class="text-center">
        <a href="#" class="dropdown-item dropdown-footer" v-if="notifications.length > 0">
          <strong>See all notifications</strong>
          <i class="fa fa-angle-right"></i>
        </a>
        <div v-else>No notifications</div>
      </div>
    </li>
  </ul>
</li>
</template>

<script>
import VueTimeago from 'vue-timeago'

Vue.use(VueTimeago, {
  name: 'Timeago', // Component name, `Timeago` by default
  locale: 'en', // Default locale
  // We use `date-fns` under the hood
  // So you can use all locales from it
  locales: {
    'zh-CN': require('date-fns/locale/zh_cn'),
    ja: require('date-fns/locale/ja')
  }
})
export default {
  

  props: ['user_id'],

  data(){
    return{
      notifications: []
    }
  },

  mounted() {
    // window.Echo.channel('pizza-tracker.' + this.order_id)
    window.Echo.channel('pizza-tracker')
    .listen('OrderStatusChangedEvent', (order) =>
    {
      if (this.user_id == order.user_id) {
        this.notifications.unshift({
          description: 'Order ID: ' + order.id + ' updated',
          url: '/order/' + order.id,
          time: new Date()
        })
      }
    });
  },
};
</script>