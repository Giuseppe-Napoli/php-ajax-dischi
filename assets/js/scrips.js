const app = new Vue({

  el:'#app',
  data:{
    albums:[],
    genres:[],
    searchGen:'all',
  },


  methods:{
    //4)quandp cambio genere devo modificare l' api per questo nel mio get dovrò passare dei parametri
    getApi(){

      axios.get('http://localhost:8888/php-booelan/08-06_php-ajax-dischi/php-ajax-dischi/api.php',{
        params:{
          genre: this.searchGen
        }
      })
      .then(res => {
        console.log(res);
        //2) a questo punto essendo il database dentro un ulteriore array dovremmo aggiungere un'altro livello  a res.data
        this.albums=res.data.albums;
        console.log(this.albums);
        this.genres=res.data.genres;
        console.log(this.genres);
      })
      .catch(err => {
        console.error(err); 
      })
    }

  },


  mounted(){
    this.getApi();



  },
})