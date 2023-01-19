<template>
  <div class="container-fluid">
    <div class="d-flex align-items-stretch">
      <nav class="tw-vertical-menu position-fixed h-100 mt-4 p-3">
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
                <ul class="dropdown-menu w-100">
                  <li><a class="dropdown-item fw-bolder" href="#">Log out @CalvinHarris</a></li>
                </ul>
            </div>
            <!-- ITEMS -->
          </div>
        </div>
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
          <div class="tw-home-content px-0 text-justify" id="tw-tweet">
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
            <!-- FIN PUBLIEZ -->

            <!-- ACTUALITÉ -->
            <div class="tw-home-container">
              <!-- ACTUALITÉ CART -->
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
              <!-- FIN ACTUALITÉ CART -->

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
            <!-- FIN ACTUALITÉ -->
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
    width: 23%;
  }
  .tw-main{
    width: 50%;
    margin-left: 24%;
  }
  .tw-aside{
    width: 30%;
  }


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
  .tw-home-content{
    padding-top: 60px;
  }
</style>