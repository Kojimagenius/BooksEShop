<template>
  <li>
    <span v-bind:class="{done:todo.completed}">
      <input type="checkbox" v-bind:checked="todo.completed" v-on:change="todo.completed=!todo.completed">
      <strong>{{index+1}}</strong>
      {{todo.title | toUpperCase}}
    </span>
    <button class = "rm" v-on:click="$emit('remove-item', todo.id)">&times;</button>
  </li>
</template>

<script>
export default {
name: "TodoItem",
  props: {
    todo: {
      type: Object,
      required: true
    },
    index: Number
  },
  filters:{
  toUpperCase(value){
    return value.toUpperCase()
  }
  }
}
</script>

<style scoped>
li {
  border: 1px solid #783434;
  display: flex;
  justify-content: space-between;
  padding: .5rem 2rem;
  margin-bottom: 1rem;
}

.rm{
  background-color: red;
  color: blue;
  border-radius: 50%;
  font-weight: bold;
}
.done{
  text-decoration: line-through;
}
</style>