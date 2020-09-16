<template>
  <div class="books">
    <navigator/>
    <hr>
    <BooksList
        v-bind:books = "books"
    />
  </div>
</template>

<script>
import BooksList from "../components/BooksList";
import Navigator from "../components/Navigator";

export default {
  name: "Books",
  data() {
    return {

      books: [
        {id: 0, title: "voina i mir", author: 'tolstobrov', imgsrc:'https://b1.culture.ru/c/365442.jpg',pages: 100},
        {id: 1, title: "geroy", author: 'Lermontov',imgsrc:'https://knigochei.net/uploads/posts/2016-03/medium/1459082715_geroy-nashego-vremeni.jpg', pages: 50}
      ]
    }

  },
  components: {
    Navigator,
    BooksList
  }
}
</script>

<style scoped>

</style>
