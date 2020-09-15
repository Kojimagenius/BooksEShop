<template>
  <div >
    <h2> Todo app</h2>
    <AddTodoComponent
        v-on:add-todo="addTodo"
    />
    <select v-model="filter">
      <option value="All">All todos</option>
      <option value="Completed">Completed todos</option>
      <option value="Not completed">Not completed todos</option>
    </select>
    <hr>
    <TodoList
        v-bind:todos = "todos"
        v-if="filteredTodos.length"
        @remove-item="RemoveItem"
    />
    <p v-else>No Todos!</p>
    <router-link to="/">Home</router-link>
  </div>
</template>

<script>
import TodoList from "../components/TodoList";
import AddTodoComponent from "../components/AddTodoComponent";

//ETOT COMPONENT NE NUZHEN!
export default {
  name: 'App',
  computed: {
    filteredTodos(){
      if (this.filter === 'All'){
        return this.todos
      }
      if(this.filter === 'Completed'){
        return this.todos.filter(t => t.completed)
      }
      if(this.filter === 'Not completed'){
        return this.todos.filter(t=> !t.completed)
      }
    }
  },
  // watch:{
  //   filter(value){
  //     if(value === 'All') {
  //
  //     } else
  //
  //   }
  // }
  data(){
    return{

      todos: [
        {id: 1, title: "hleb", completed: false},
        {id: 2, title: "salo", completed:false},
        {id: 3, title: "maslo", completed: false}
      ],
      filter: 'All'
    }
  },
  components: {
    TodoList,
    AddTodoComponent
  },
  methods:{
    RemoveItem(id){
      this.todos = this.todos.filter(t => t.id !== id)
    },
    addTodo(todo){
      this.todos.push(todo)
    }
  }
}
</script>
<style scoped>

</style>