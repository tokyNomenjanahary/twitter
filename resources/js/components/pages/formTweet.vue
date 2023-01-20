<template>
  <div class="border-top border-bottom p-3 row g-0">
    <div class="w-auto">

    </div>
    <div class="col-12">
      <form @submit.prevent="submitMyTweet">
      <div class="mb-2">
        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Everyone
        </button>
        <ul class="dropdown-menu w-fit">
          <li><h5 class="px-3">choose audience</h5></li>
          <li><a class="dropdown-item">Everyone</a></li>
          <li><a class="dropdown-item">Tweet circle</a></li>
        </ul>
      </div>
      <div class="mb-3">
        <textarea class="form-control without-border" placeholder="What's happenning?"></textarea>
      </div>
      <div class="border-bottom mb-3 pb-3">
        <strong class="text-primary ms-3">everyone can reply</strong>
      </div>
      <div class="row align-items-center">
        <div class="col-10 ps-3">
          <i class="fa-regular fa-image fs-4 text-secondary-custom text-primary mx-2"></i>
          <i class="fa-regular fa-face-smile fs-4 text-secondary-custom text-primary mx-2"></i>
          <i class="fa-regular fa-calendar-days fs-4 text-secondary-custom text-primary mx-2"></i>
          <i class="fa-solid fa-location-dot fs-4 text-secondary-custom text-primary mx-2"></i>
        </div>
        <div class="col-2">
          <button class="btn btn-primary rounded-pill fw-bolder">Tweet</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</template>

<script>
</script>

<style>

</style>