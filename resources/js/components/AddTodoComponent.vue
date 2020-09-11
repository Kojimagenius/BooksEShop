<template>
<form v-on:submit.prevent="onSubmit">
  <input type="text" v-model="title">
  <button type = submit>Create</button>
</form>
</template>

<script>
//ETOT COMPONENT NE NUZHEN
export default {
name: "AddTodoComponent",
  data(){
    return {
      title:'ргш'
    }

  },
  methods: {
  onSubmit(){
    if(this.title.trim()){
      const newTodo = {
        id: 4,
        title: this.title,
        completed: false
      }
      this.$emit('add-todo', newTodo)
      this.title = ''
    }
  }
  }
}
</script>

<style scoped>
form{
  display: flex;
}
input{
  width: 400px;
}
</style>