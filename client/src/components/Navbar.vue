<template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <router-link class="nav-link" to="/">Home</router-link>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li v-if="!isLoggedIn" class="nav-item">
          <router-link class="nav-link" to="/login">Login</router-link>
        </li>
        <!-- <li v-if="!auth" class="nav-item">
          <router-link class="nav-link" to="/register">Register</router-link>
        </li>
        <li v-if="auth" class="nav-item">
          <router-link class="nav-link" to="/profile">Profile</router-link>
        </li> -->
        <li v-if="isLoggedIn" class="nav-item">
          <a class="nav-link" href="" @click="logout()">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
  data () {
    return {
      auth: false,
      user: ''
    }
  },

  computed: {
    isLoggedIn () {
      return this.$store ? this.$store.getters.isAuthenticated : false
    }
  },

  methods: {
    async logout () {
      await this.$store.dispatch('Logout')
    }
  }
}
</script>
