const app = new Vue({

  el:'#app',
  data:{
    albums:[],
  },

  mounted(){
    axios.get('http://localhost:8888/php-booelan/08-06_php-ajax-dischi/php-ajax-dischi/api.php')
    .then(res => {
      console.log(res);
      this.albums=res.data;
      console.log(this.albums);
    })
    .catch(err => {
      console.error(err); 
    })
  },
  



})