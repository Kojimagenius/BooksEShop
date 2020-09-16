<template>
<li>
  <b>{{index + 1}}.</b>
  <span>{{book.title}}</span>
  <img v-bind:src="book.imgsrc">
</li>
</template>

<script>
export default {
name: "Book",
  props: {
    book: {type:Object,
    required: true},
    index: Number
  }
}
</script>

<style scoped>
img{
  width: 150px;
  height: 200px;
}
li{
  padding: 20px;
}
</style>