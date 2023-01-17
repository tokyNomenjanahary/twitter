<template>
  <div class="container-fluid">
    <button @click="getData">test</button>
    <div>
      <i class="fa-brands fa-twitter"></i>
    </div>
  </div>
</template>

<script setup>
  import axiosClient from '../../axios/index'

  const getData = () => {
    axiosClient.post('/userData')
    .then(res => console.log(res))
    .catch(err => console.log(err))
  }
</script>
