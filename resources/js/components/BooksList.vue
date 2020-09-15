<template>
<ul>
 <Book
 v-for="(book, i) in books"
 v-bind:book="book"
 v-bind:index="i"
 />
</ul>
</template>

<script>
import Book from '../components/Book'

export default {
name: "BooksList",
  props: ['books'],
  components: {
  Book
  },
  methods: {
    someMethod(id){ return 0}
  }

}
</script>

<style scoped>

</style>