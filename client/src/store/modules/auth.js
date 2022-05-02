import axios from 'axios'
const state = {
  token: null
}

const getters = {
  isAuthenticated: state => !!state.token
}

const actions = {
  async Login ({ commit }, user) {
    let res = await axios.post('/api/login', user)
    let token = res.data.token
    await commit('setToken', token)
  },
  async Logout ({ commit }) {
    commit('Logout', null)
    document.location.href = '/'
  }
}

const mutations = {
  setToken (state, token) {
    state.token = token
  },
  Logout (state) {
    state.token = null
  }
}

export default {
  state,
  getters,
  actions,
  mutations
}
