<template>
  <div>
    <ul>
      <TodoItem
      v-for="(todo, i) of todos"
      v-bind:todo = "todo"
      v-bind:index="i"
      v-on:remove-item="RemoveItem"
      />
    </ul>
  </div>
</template>

<script>
//ETOT COMPONENT NE NUZHEN!
import TodoItem from "../components/TodoItem";

export default {
name: "TodoList",
  props: ['todos'],
  components: {
  TodoItem
  },
  methods:{
  RemoveItem(id){
    this.$emit('remove-item', id)
  }
  }
}
</script>

<style scoped>
ul{list-style: none;
  margin: 0;
  padding: 0;
}
</style>