<template>
  <div class="container pt-5">
    <div class="row">
      <div class="col-sm-8 mx-auto">
        <h1 class="text-center">Articles</h1>

        <div class="text-right mb-1" v-if="isLoggedIn">
          <router-link class="btn btn-primary" :to="{name: 'NewArticle'}">Create</router-link>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th width="50px">ID</th>
              <th>Title</th>
              <th width="50px" v-if="isLoggedIn">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="article in articles" :key="article.id">
              <td>{{article.id}}</td>
              <td>
                <router-link :to="{name: 'ShowArticle', params: {id: article.id}}">{{article.title}}</router-link>
              </td>
              <td v-if="isLoggedIn">
                <div class="btn-group" role="group">
                  <router-link :to="{name: 'EditArticle', params: {id: article.id}}" class="btn btn-success">Edit</router-link>
                  <button class="btn btn-danger" @click="deleteProduct(article.id)">Delete</button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
import axios from 'axios'

export default{
  data () {
    return {
      articles: []
    }
  },
  computed: {
    isLoggedIn () {
      return this.$store ? this.$store.getters.isAuthenticated : false
    }
  },
  created () {
    this.allArticles()
  },
  methods: {
    allArticles () {
      axios.get('api/articles/').then(response => {
        this.articles = response.data
      })
    },
    deleteProduct (id) {
      axios.delete(`api/articles/${id}`).then(response => {
        let i = this.articles.map(data => data.id).indexOf(id)
        this.articles.splice(i, 1)
      })
    }
  }
}
</script>
