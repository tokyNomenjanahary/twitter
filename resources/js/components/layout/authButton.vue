<template>
  <nav class="py-4 bg-primary fixed-bottom">
    <div class="container-md">
      <div class="row">
        <div class="col-md-6"></div>
        <div v-if="!isLoggedIn" class="col-md-6">
          <router-link
            :to="{ name: 'login' }"
            class="btn btn-primary rounded-pill me-2"
          >
            Login
          </router-link>
          <router-link
            :to="{ name: 'register' }"
            class="btn btn-secondary rounded-pill me-2"
            >
            Register
          </router-link>
        </div>
        <div v-else class="col-md-6">
          <button class="btn btn-primary rounded-pill me-2" @click.prevent="handleLogout">
            Logout
          </button>
        </div>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { onMounted, onUnmounted, onUpdated, ref } from "vue";
import useAuth from "../../services/auth";
import emitter from 'tiny-emitter/instance';


  const isLoggedIn = ref(false);
  const { logout } = useAuth()

  emitter.on('isLoggedIn', (connected) => {
    isLoggedIn.value = connected
  } )

  const handleLogout = async () => {
    await logout()
    isLoggedIn.value = false;
  }

  onMounted(() => {
    if (localStorage.getItem('token')) {
      isLoggedIn.value = true;
    }
  })

</script>