<template>
  <div class="dummy"><navigator/>
  <hr>
  <p> this dummy page is for parts that not ready yet</p>
  </div>
</template>

<script>
import Navigator from "../components/Navigator";

export default {
name: "dummy",
  components: {Navigator}
}
</script>

<style scoped>
  p{
    color: red;
    font-size: 20px;
  }
</style>