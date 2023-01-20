<template>
  <nav v-if="isLoggedIn" class="tw-vertical-menu position-fixed h-100 mt-4 p-3">
    <div class="ms-4">
      <div class="mb-4 p-3 rounded-circle vertical-menu-items w-fit">
        <a class="navbar-brand">
          <i class="fa-brands fa-twitter fs-2 text-primary"></i>
        </a>
      </div>
      <div>
        <!-- ITEMS -->
        <div class="w-fit px-3 py-2 rounded-pill vertical-menu-items">
          <a class="link-dark text-decoration-none" href="#">
            <div class="row align-items-center g-0">
              <div class="w-auto me-2">
                <i class="fa-solid fa-house fs-3"></i>
              </div>
              <div class="w-auto">
                <h5 class="vertical-menu-items-acive">Home</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="w-fit px-3 py-2 rounded-pill vertical-menu-items">
          <a class="link-dark text-decoration-none" href="#">
            <div class="row align-items-center g-0">
              <div class="w-auto me-2">
                <i class="fa-solid fa-hashtag fs-3"></i>
              </div>
              <div class="w-auto">
                <h5 class="">Explore</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="w-fit px-3 py-2 rounded-pill vertical-menu-items">
          <a class="link-dark text-decoration-none" href="#">
            <div class="row align-items-center g-0">
              <div class="w-auto me-2">
                <i class="fa-regular fa-bell fs-3"></i>
              </div>
              <div class="w-auto">
                <h5 class="">Notifications</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="w-fit px-3 py-2 rounded-pill vertical-menu-items">
          <a class="link-dark text-decoration-none" href="#">
            <div class="row align-items-center g-0">
              <div class="w-auto me-2">
                <i class="fa-regular fa-envelope fs-3"></i>
              </div>
              <div class="w-auto">
                <h5 class="">Messages</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="w-fit px-3 py-2 rounded-pill vertical-menu-items">
          <a class="link-dark text-decoration-none" href="#">
            <div class="row align-items-center g-0">
              <div class="w-auto me-2">
                <i class="fa-regular fa-bookmark fs-3"></i>
              </div>
              <div class="w-auto">
                <h5 class="">Bookmarks</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="w-fit px-3 py-2 rounded-pill vertical-menu-items">
          <a class="link-dark text-decoration-none" href="#">
            <div class="row align-items-center g-0">
              <div class="w-auto me-2">
                <i class="fa-solid fa-table-list fs-3"></i>
              </div>
              <div class="w-auto">
                <h5 class="">Lists</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="w-fit px-3 py-2 rounded-pill vertical-menu-items">
          <a class="link-dark text-decoration-none" href="#">
            <div class="row align-items-center g-0">
              <div class="w-auto me-2">
                <i class="fa-regular fa-user fs-3"></i>
              </div>
              <div class="w-auto">
                <h5 class="">Profile</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="mt-4">
          <a href="#tw-tweet" class="text-decoration-none">
            <div class="bg-primary rounded-pill fw-bold text-center text-white p-3 h5 cursor-pointer btn-primary">Tweet</div>
          </a>
        </div>
        <div class="dropup">
          <div class="row align-items-center g-0 px-3 py-2 rounded-pill bg-secondary-custom cursor-pointer" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="w-auto">
              sdsq
            </div>
            <div class="col">
              <p><strong>Calvin Harris</strong></p>
              <p class="text-muted"><span>@CalvinHarris</span></p>
            </div>
            <div class="col-2 mb-4">
              <strong class="fs-2">...</strong>
            </div>
          </div>
            <ul class="dropdown-menu w-100 cursor-pointer">
              <li @click.prevent="handleLogout"><span class="dropdown-item fw-bolder">Log out @CalvinHarris</span></li>
            </ul>
        </div>
        <!-- ITEMS -->
      </div>
    </div>
  </nav>
</template>

<script setup>
  import { onMounted, ref } from "vue";
  import useAuth from "../../services/auth/index.js";
  import emitter from 'tiny-emitter/instance';

  
  const { logout } = useAuth()
  const isLoggedIn = ref(false);

  emitter.on('isLoggedIn', (connected) => {
    isLoggedIn.value = connected
  } )

  const handleLogout = async () => {
    await logout()
    if (!localStorage.getItem('token')) {
      isLoggedIn.value = false;
    }
  }

  onMounted(() => {
    if (localStorage.getItem('token')) {
      isLoggedIn.value = true;
    }
  })
</script>

<style>
  .tw-vertical-menu{
    width: 23%;
  }
</style>