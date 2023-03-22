<template>
  <div class="container-fluid">
    <div class="d-flex align-items-stretch">
      <section class="tw-main border-end border-start">
          <!-- CENTER SEARCH -->
          <GlobalSearch />
          <!-- FIN CENTER SEARCH -->
          <div class="tw-home-content px-0 text-justify" id="tw-tweet">
            <!-- PUBLIEZ -->
            <FormTweet />
            <!-- FIN PUBLIEZ -->

            <!-- ACTUALITÉ -->
            <div class="tw-home-container">
              <!-- ACTUALITÉ CART -->
              <div class="p-3 border-bottom" v-for="tweet in tweets" :key="tweet.id">
                <div class="row">
                  <div class="col-2">
                    <img src="" alt="">
                  </div>
                  <div class="col-10">
                    <p><strong>{{ tweet.user.name }}</strong> <span class="text-muted">@{{ tweet.user.name }}</span></p>
                    <p>{{ tweet.description }}</p>
                  </div>
                </div>
                <div class="mt-2 w-fit mx-auto">
                  <img :src="tweet.image_url" class="tw-image rounded">
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
            </div>
            <!-- FIN ACTUALITÉ -->
          </div>
      </section>
      <div class="tw-aside end-0 h-100 p-3" id="tw-aside">
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
  </div>
</template>

<script setup>
  import { onMounted, ref } from '@vue/runtime-core';
  import axiosClient from '../../axios/index';
  import FormTweet from './formTweet.vue'
  import GlobalSearch from './globalSearch.vue'
  import useTweet from '../../services/tweet/index'
  import emitter from 'tiny-emitter/instance';

  const asideHeight = ref(0)
  emitter.on('created', async (success) => await getTweets() )
  const { getTweets, tweets } = useTweet()
  onMounted( async () => {
    await getTweets()
    asideHeight.value = document.getElementById('tw-aside').offsetHeight
  })
</script>

<style>
  .tw-main{
    width: 50%;
    margin-left: 24%;
  }

  .tw-aside{
    width: 30%;
  }
  
  .tw-home-content{
    padding-top: 60px;
  }

  .tw-image {
    max-height: 500px;
    object-fit: contain;
  }
</style>