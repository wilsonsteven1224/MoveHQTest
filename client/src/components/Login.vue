<template>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mt-5 mx-auto">
        <form v-on:submit.prevent="submit">
          <h1 class="h3 mb-3 font-weight-normal text-center">Login</h1>

          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" v-model="email" class="form-control" name="email" placeholder="Email Address" required>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" v-model="password" class="form-control" name="password" placeholder="Password" required>
          </div>

          <button class="btn btn-lg btn-primary btn-block">Sign in</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import router from '../router'
import { mapActions } from 'vuex'

export default{
  data () {
    return {
      email: '',
      password: ''
    }
  },

  methods: {
    ...mapActions(['Login']),
    async submit () {
      try {
        await this.Login({
          email: this.email,
          password: this.password
        })
        this.email = ''
        this.password = ''
        router.push({name: 'Home'})
      } catch (err) {
        console.log(err)
      }
    }
  }
}
</script>
