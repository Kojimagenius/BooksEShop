<template>
  <nav>

    <ul>
      <li v-for="navElement in navigations">
        <router-link v-bind:to="navElement.url">{{navElement.title}}</router-link>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
name: "Navigator",
  data() {
    return {
      navigations: [
        {title: 'home', url: '/'},
        {title: 'books', url: '/books'},
        {title: 'credentials', url: '/dummy'}
      ]
    }
  }
}
</script>

<style scoped>

</style>