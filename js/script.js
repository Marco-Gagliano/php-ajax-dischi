
const app = new Vue({

  el: '#app' ,

  data: {
    apiUrl: 'http://localhost/php-ajax-dischi/api.php',
    dischi: [],
  },

  mounted() {
    this.getApi()
  },

  methods: {
    getApi() {
      axios.get(this.apiUrl)
      .then(res => {
        this.dischi = res.data;
        console.log(res.data);
      })
    }
  },
})