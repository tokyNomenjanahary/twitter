import axios from "axios"
import { ref } from "vue"
import { useRouter } from "vue-router"
import store from "../../store/user"


export default function useAuth() {
  const router = useRouter()
  const error = ref([])

  const register = async (data) => {
    await axios.post('/api/register', data)
    .then(response => {
        if (response.data.data.status) {
          localStorage.setItem('token', response.data.data.token)
          store.state.user.token = response.data.data.token
          router.push({name: 'home'})
        } else {
          error.value = response.data.message
        }
    })
  }

  const logout = async () => {
    localStorage.removeItem('token')
    store.state.user.token = null
    router.push({name: 'login'})
  }

  const login = async (data) => {
    await axios.post('/api/login', data)
    .then(response => {
      if(response.data.data.status) {
        localStorage.setItem('token', response.data.data.token)
        store.state.user.token = response.data.data.token
        router.push({name: 'home'})
      } else {
        error.value = response.data.message
      }
    })
  }

  return {
    error,
    register,
    logout,
    login
  }
}