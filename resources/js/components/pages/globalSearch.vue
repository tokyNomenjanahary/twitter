<template>
  <div class="bg-white fixed-top tw-search-nav">
    <div class="fixed-top tw-search-wrapper row align-items-center justify-content-between">
      <form class="tw-search">
        <div class="row align-items-center border rounded-pill p-1 bg-secondary-custom">
          <div class="w-auto">
            <i class="fa-solid fa-magnifying-glass fs-4 text-secondary-custom"></i>
          </div>
          <div class="col">
            <input type="text" class="form-control border-0 bg-transparent"
              id="tw-search-input"
              placeholder="Search Twitter">
          </div>
        </div>
      </form>
      <div class="w-auto mt-1">
        <i class="fa-solid fa-gear fs-4 tw-icon-setting text-secondary-custom"></i>
      </div>
    </div>
  </div>
</template>

<script>

</script>

<style>
  .tw-search{
    width: 87%;
  }

  .tw-search-nav{
    width: 45.5%;
    height: 60px;
    right: auto;
    left: auto;
  }

  .tw-search-wrapper{
    top: 1%;
    right: 31.5%;
    width: 42%;
    left: auto;
  }
</style>