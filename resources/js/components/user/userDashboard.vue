<template>
<h1>hello</h1>
</template>

<script>
// import Sidebar from './layout/sidebar.vue'
// import TopNavigation from './layout/topNavigation.vue'
// import BtmFooter from './layout/footer.vue'
export default {
//   components:{
//     'sidebar':Sidebar,
//     'top-navigation':TopNavigation,
//     'btm-footer':BtmFooter
//   },
  data(){
    return {
      message: 'Some Message'
    };
  },
  methods:{
    logout()
    {
      axios.post('logout').then(function()
      {
        document.location.href = "/login";
      })
    },
  },
}
</script>