import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler';
import router from './router';
import AuthButton from './components/layout/authButton.vue';
import NavVertical from './components/layout/navVertical.vue'

const app = createApp({
  components : {
    AuthButton,
    NavVertical
  }
})
app.use(router)
app.mount("#app")