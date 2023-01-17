import { createStore } from "vuex"

const store = createStore({
  state: {
    user: {
      data: {},
      token: localStorage.getItem('token')
    }
  }
})

export default store;