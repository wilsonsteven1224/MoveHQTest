<template>
  <div class="container pt-5">
    <h3 class="text-center">Edit Article</h3>
    <div class="row">
      <div class="col-sm-8 mx-auto">
        <form @submit.prevent="updateArticle">
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" v-model="article.title">
          </div>
          <div class="form-group">
            <label>Content</label>
            <textarea class="form-control" v-model="article.content" rows="10"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
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
  created () {
    axios.get(`api/articles/${this.$route.params.id}`)
      .then((res) => {
        this.article = res.data
      })
  },
  methods: {
    updateArticle () {
      axios.patch(`api/articles/${this.$route.params.id}`, this.article)
        .then((res) => {
          this.$router.push({name: 'Home'})
        })
    }
  }
}
</script>
