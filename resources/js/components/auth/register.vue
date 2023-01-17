<template>
<div class="container">
  <div class="row align-items-center mt-4 pt-4">
    <div class="col-md-7">
      <form @submit.prevent="handleRegister">
        <div class="row">
          <div class="col-6">
            <div class="mb-3">
              <label for="user-name" class="form-label">Name</label>
              <input type="text" class="form-control" id="user-name" name="name" v-model="form.name">
              <span v-if="error['name']" class="text-danger">{{ error['name'][0] }}</span>
            </div>
            <div class="mb-3">
              <label for="user-email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="user-email" name="email" v-model="form.email">
              <span v-if="error['email']" class="text-danger">{{ error['email'][0] }}</span>
            </div>
            <div class="mb-3">
              <label for="user-password" class="form-label">Password</label>
              <input type="password" class="form-control" id="user-password" name="password" v-model="form.password">
              <span v-if="error['password']" class="text-danger">{{ error['password'][0] }}</span>
            </div>
            <div class="mb-3">
              <label for="user-password-confirmation" class="form-label">Confirm password</label>
              <input type="password" class="form-control" id="user-password-confirmation" name="password-confirmation" v-model="form.password_confirmation">
              <span v-if="error['password_confirmation']" class="text-danger">{{ error['password_confirmation'][0] }}</span>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="agreement" name="privacy-policy">
              <label class="form-check-label" for="agreement">
                By signing up, you agree to the Terms of Service and Privacy Policy, including Cookie Use.
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Sign up</button>
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
  import { reactive } from "vue";
  import useAuth from '../../services/auth/index.js'
  import emitter from 'tiny-emitter/instance';
  
  const connected = true
  const { error, register } = useAuth()
  const form = reactive({
    name: '',
    email: '',
    password: '',
    password_confirmation: ''
  })

  const handleRegister = async () => {
    await register({...form});
    if (localStorage.getItem('token')) {
      emitter.emit('isLoggedIn', connected)
    }
  }
 
</script>