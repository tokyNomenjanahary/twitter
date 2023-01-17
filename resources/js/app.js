import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler';
import router from './router';
import AuthButton from './components/layout/authButton.vue';

const app = createApp({
  components : {
    AuthButton
  }
})
app.use(router)
app.mount("#app")