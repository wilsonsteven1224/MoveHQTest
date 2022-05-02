<template>
  <div class="container pt-5">
    <h3 class="text-center">New Article</h3>
    <div class="row">
      <div class="col-sm-8 mx-auto">
        <form @submit.prevent="addArticle">
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" v-model="article.title" required>
          </div>
          <div class="form-group">
            <label>Content</label>
            <textarea class="form-control" v-model="article.content" rows="10" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
          <router-link class="btn btn-outline-primary" to="/">Cancel</router-link>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default{
  data () {
    return {
      article: {}
    }
  },
  methods: {
    addArticle () {
      axios.post('api/articles', this.article)
        .then(response => {
          this.$router.push({ name: 'Home' })
        })
        .catch(err => console.log(err))
    }
  }
}
</script>
