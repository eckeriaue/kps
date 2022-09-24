<?php
include_once './assets/include/head.php';
?>



<div id="app">


  <?php
  include_once './assets/include/header.php';
  ?>


  <button @click="inc"> {{counter}} </button>

</div>

<script>
  const pageConfig = {
    data() {
      return {
        counter: 0
      }
    },
    methods: {
      inc() {
        ++this.counter
      }
    }
  }

  Vue.createApp(pageConfig).mount('#app')
</script>


<?php include_once './assets/include/footer.php' ?>