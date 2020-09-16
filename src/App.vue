<template>
  <div id="app">
    <header>
      <h1>Books E-shop</h1>
    </header>
    <router-view/>
  </div>
</template>

<!--<script>-->
<!--import TodoList from "./components/TodoList";-->
<!--import AddTodoComponent from "@/components/AddTodoComponent";-->


<!--export default {-->
<!--  name: 'App',-->
<!--  data(){-->
<!--    return{-->

<!--      todos: [-->
<!--        {id: 1, title: "hleb", completed: false},-->
<!--        {id: 2, title: "salo", completed:false},-->
<!--        {id: 3, title: "maslo", completed: false}-->
<!--      ]-->
<!--    }-->
<!--  },-->
<!--  components: {-->
<!--    TodoList,-->
<!--    AddTodoComponent-->
<!--  },-->
<!--  methods:{-->
<!--    RemoveItem(id){-->
<!--      this.todos = this.todos.filter(t => t.id !== id)-->
<!--    },-->
<!--    addTodo(todo){-->
<!--      this.todos.push(todo)-->
<!--    }-->
<!--  }-->
<!--}-->
<!--</script>-->

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
