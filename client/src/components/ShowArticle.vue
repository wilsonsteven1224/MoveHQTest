<template>
  <div class="container pt-5">
    <div class="row">
      <div class="col-sm-8 mx-auto">
        <h3 class="text-center">{{article.title}}</h3>
        <hr />
        <nl2br tag="p" :text="article.content" />
        <router-link class="btn btn-outline-primary" to="/">Cancel</router-link>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default{
  data () {
    return {
      article: {
        content: ''
      }
    }
  },
  created () {
    axios.get(`api/articles/${this.$route.params.id}`)
      .then((res) => {
        this.article = res.data
      })
  }
}
</script>
