<template>
  <div class="container-fluid">
    <div class="d-flex align-items-stretch">
      <nav class="tw-vertical-menu position-fixed h-100">
      </nav>
      <section class="tw-main border-end border-start">
          <!-- CENTER SEARCH -->
          <div class="bg-white fixed-top tw-search-nav">
            <div class="fixed-top tw-search-wrapper row align-items-center justify-content-between">
              <form class="tw-search">
                <div class="row align-items-center border rounded-pill p-1 bg-secondary-custom">
                  <div class="w-auto">
                    <i class="fa-solid fa-magnifying-glass fs-4 text-secondary-custom"></i>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control border-0 bg-transparent" id="tw-search-input" placeholder="Search Twitter">
                  </div>
                </div>
              </form>
              <div class="w-auto mt-1">
                <i class="fa-solid fa-gear fs-4 tw-icon-setting text-secondary-custom"></i>
              </div>
            </div>
          </div>
          <!-- FIN CENTER SEARCH -->

          <div class="tw-home-content px-0 text-justify">
            <!-- PUBLIEZ -->

            <div class="border-top border-bottom p-3 row g-0">
              <div class="w-auto">

              </div>
              <div class="col-12">
                <form>
                <div class="btn-group mb-2">
                  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    everyone
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
                <div class="mb-3">
                  <input type="text" placeholder="What's happenning?" class="form-control without-border">
                </div>
                <div class="border-bottom mb-3 pb-3">
                  <strong class="text-primary ms-3">everyone can reply</strong>
                </div>
                <div class="row align-items-center">
                  <div class="col-10 ps-3">
                    <i class="fa-solid fa-gear fs-4 tw-icon-setting text-secondary-custom text-primary mx-2"></i>
                    <i class="fa-solid fa-magnifying-glass fs-4 text-secondary-custom text-primary mx-2"></i>
                    <i class="fa-solid fa-gear fs-4 tw-icon-setting text-secondary-custom text-primary mx-2"></i>
                    <i class="fa-solid fa-magnifying-glass fs-4 text-secondary-custom text-primary mx-2"></i>
                    <i class="fa-solid fa-gear fs-4 tw-icon-setting text-secondary-custom text-primary mx-2"></i>
                    <i class="fa-solid fa-gear fs-4 tw-icon-setting text-secondary-custom text-primary mx-2"></i>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-primary rounded-pill">Tweet</button>
                  </div>
                </div>
                </form>
              </div>
            </div>

            <!-- FIN PUBLIEZ -->
            <div class="tw-home-container">
              <div class="p-3 border-bottom">
                <div class="row">
                  <div class="col-2">
                    <img src="" alt="">
                  </div>
                  <div class="col-10">
                    <p><strong>Manga Mania</strong> <span class="text-muted">@mangamania . 58 mn</span></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero</p>
                  </div>
                </div>
                <div class="border rounded p-4 mt-4">

                </div>
                <div class="row justify-content-center mt-3">
                  <div class="w-auto">
                    <i class="fa-solid fa-heart"></i>
                    <span class="text-muted"> 12,4</span>
                  </div>
                  <div class="w-auto">
                    <i class="fa-solid fa-comment"></i>
                    <span class="text-muted"> 12,4</span>
                  </div>
                  <div class="w-auto">
                    <i class="fa-solid fa-chart-simple"></i>
                    <span class="text-muted"> 12,4</span>
                  </div>
                  <div class="w-auto">
                    <i class="fa-solid fa-arrow-up-from-bracket"></i>
                    <span class="text-muted"> 12,4</span>
                  </div>
                </div>
              </div>

              <!-- AUTRES CARD -->
              <div class="p-3 border-bottom">
                <div class="row">
                  <div class="col-2">
                    <img src="" alt="">
                  </div>
                  <div class="col-10">
                    <p><strong>Manga Mania</strong> <span class="text-muted">@mangamania . 58 mn</span></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero</p>
                  </div>
                </div>
                <div class="border rounded p-4 mt-4">

                </div>
              </div>

            </div>
          </div>
      </section>
      <div class="tw-aside end-0 h-100 p-3">
        <div class="">
          <div class="card rounded-5 mt-4 bg-secondary-custom">
            <div class="">
              <div class="border-bottom">
                <a href="#" class="list-group-item list-group-item-action border-0 px-3 py-2" aria-current="true">
                  <p class="mb-1">in a paragraph.</p>
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                  </div>
                  <small>And some small print.</small>
                </a>
              </div>
              <div class="border-bottom">
                <a href="#" class="list-group-item list-group-item-action border-0 px-3 py-2" aria-current="true">
                  <p class="mb-1">in a paragraph.</p>
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                  </div>
                  <small>And some small print.</small>
                </a>
              </div>
              <div class="border-bottom">
                <a href="#" class="list-group-item list-group-item-action border-0 px-3 py-2" aria-current="true">
                  <p class="mb-1">in a paragraph.</p>
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                  </div>
                  <small>And some small print.</small>
                </a>
              </div>
              <div class="border-bottom">
                <a href="#" class="list-group-item list-group-item-action border-0 px-3 py-2" aria-current="true">
                  <p class="mb-1">in a paragraph.</p>
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                  </div>
                  <small>And some small print.</small>
                </a>
              </div>
              <div class="">
                <a href="#" class="list-group-item list-group-item-action px-3 py-2" aria-current="true">
                  <p class="mb-1">in a paragraph.</p>
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                  </div>
                  <small>And some small print.</small>
                </a>
              </div>
            </div>
          </div>
          <div class="card rounded-5 mt-4 bg-secondary-custom">
            <div class="">
              <div class="border-bottom">
                <a href="#" class="list-group-item list-group-item-action border-0 px-3 py-2" aria-current="true">
                  <p class="mb-1">in a paragraph.</p>
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                  </div>
                  <small>And some small print.</small>
                </a>
              </div>
              <div class="border-bottom">
                <a href="#" class="list-group-item list-group-item-action border-0 px-3 py-2" aria-current="true">
                  <p class="mb-1">in a paragraph.</p>
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                  </div>
                  <small>And some small print.</small>
                </a>
              </div>
              <div class="border-bottom">
                <a href="#" class="list-group-item list-group-item-action border-0 px-3 py-2" aria-current="true">
                  <p class="mb-1">in a paragraph.</p>
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                  </div>
                  <small>And some small print.</small>
                </a>
              </div>
              <div class="border-bottom">
                <a href="#" class="list-group-item list-group-item-action border-0 px-3 py-2" aria-current="true">
                  <p class="mb-1">in a paragraph.</p>
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                  </div>
                  <small>And some small print.</small>
                </a>
              </div>
              <div class="">
                <a href="#" class="list-group-item list-group-item-action px-3 py-2" aria-current="true">
                  <p class="mb-1">in a paragraph.</p>
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                  </div>
                  <small>And some small print.</small>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>






























    <!-- <button @click="getData">test</button>
    <div>
    </div> -->

      <!-- <nav class="navbar fixed-top bg-white">
        <div class="container-fluid">
          <div class="row w-100">
            <div class="col ms-4">
              <a class="navbar-brand">
                <i class="fa-brands fa-twitter fs-1"></i>
              </a>
            </div>

            <div class="col"></div>
          </div>
        </div>
      </nav>

      <div class="row pt-6">
        <div class="col">

        </div>
        <div class="col-6 border-end border-start">
          <div class="fixed-top tw-search-wrapper row align-items-center justify-content-between">
            <form class="tw-search">
              <div class="row align-items-center border rounded-pill p-1 bg-white">
                <div class="w-auto">
                  <i class="fa-solid fa-magnifying-glass fs-4"></i>
                </div>
                <div class="col">
                  <input type="text" class="form-control border-0 bg-white" id="tw-search-input" placeholder="Search Twitter">
                </div>
              </div>
            </form>
            <div class="w-auto mt-1">
              <i class="fa-solid fa-gear fs-4 tw-icon-setting"></i>
            </div>
          </div>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro reprehenderit,
        </div>
        <div class="col">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro reprehenderit,
        </div>
      </div> -->
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

<style>

  .tw-vertical-menu{
    width: 19%;
  }
  .tw-main{
    width: 50%;
    margin-left: 20%;
  }
  .tw-aside{
    width: 30%;
  }


  .tw-search{
    width: 87%;
  }
  .tw-search-nav{
    width: 48%;
    height: 60px;
    right: auto;
    left: auto;
  }
  .tw-search-wrapper{
    top: 1%;
    right: 32.5%;
    width: 46%;
    left: auto;
  }
  .tw-home-content{
    padding-top: 60px;
  }
</style>