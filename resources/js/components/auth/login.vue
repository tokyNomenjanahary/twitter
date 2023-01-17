<template>
<div class="container">
  <div class="row align-items-center mt-4 pt-4">
    <div class="col-md-7">
      <form @submit.prevent="handleLogin">
        <div class="row">
          <div class="col-6">
            <div class="mb-3">
              <label for="user-email" class="form-label">Email address</label>
              <input class="form-control" id="user-email" name="email" v-model="form.email">
              <span class="text-danger" v-if="error['email']">{{ error['email'][0] }}</span>
            </div>
            <div class="mb-3">
              <label for="user-password" class="form-label">Password</label>
              <input type="password" class="form-control" id="user-password" name="password" v-model="form.password">
              <span class="text-danger" v-if="error['password']">{{ error['password'][0] }}</span>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="remember-user" name="remember-user">
              <label class="form-check-label" for="remember-user">Remember me?</label>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-5">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur omnis porro nesciunt
        neque, ipsa voluptatibus quia accusantium
        inventore laudantium veniam repellat accusamus nemo illo ea, expedita ipsum vero enim id.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur omnis porro nesciunt
        neque, ipsa voluptatibus quia accusantium
        inventore laudantium veniam repellat accusamus nemo illo ea, expedita ipsum vero enim id.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur omnis porro nesciunt
        neque, ipsa voluptatibus quia accusantium
        inventore laudantium veniam repellat accusamus nemo illo ea, expedita ipsum vero enim id.
      </p>
    </div>
  </div>
</div>

</template>

<script setup>
import { reactive, ref } from "vue";
import useAuth from "../../services/auth";
import emitter from 'tiny-emitter/instance';


const { error, login } = useAuth()
const connected = true
const form = reactive({
  email: '',
  password: '',
})


const handleLogin = async () => {
  await login({...form})
  if (localStorage.getItem('token')) {
    emitter.emit('isLoggedIn', connected)
  }
};


</script>