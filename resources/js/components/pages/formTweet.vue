<template>
  <div class="border-top border-bottom p-3 row g-0">
    <div class="w-auto">
    </div>
    <div class="col-12">
      <form @submit.prevent="submitMyTweet">
      <div class="mb-2">
        <span class="badge text-bg-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" v-if="form.tweet_confident_id == 2">
          Tweeter Circle
        </span>
        <span class="badge text-bg-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" v-else>
          Everyone
        </span>
        <ul class="dropdown-menu w-fit">
          <li v-for="confident in confidents" :key="confident.id">
            <label class="w-100">
              <input type="radio" class="d-none" name="tag" :value="confident.id" v-model="form.tweet_confident_id">
              <a class="dropdown-item" v-text="confident.name"></a>
            </label>
          </li>
        </ul>
      </div>
      <div class="mb-3">
        <textarea class="form-control without-border" placeholder="What's happenning?" v-model="form.description"></textarea>
      </div>
      <div class="border-bottom mb-3 pb-3">
        <strong class="text-success ms-3" v-if="form.tweet_confident_id == 2">Only your tweeter circle can reply</strong>
        <strong class="text-primary ms-3" v-else>Everyone can reply</strong>
      </div>
      <div v-if="imageUrl">
          <img :src="imageUrl" class="w-25">
      </div>
      <div class="row align-items-center">
        <div class="col-10 ps-3">
          <label>
            <i class="fa-regular fa-image fs-4 text-secondary-custom text-primary mx-2"></i>
            <input type="file" class="d-none" accept="image/*" @change="uploadImage">
          </label>
          <i class="fa-regular fa-face-smile fs-4 text-secondary-custom text-primary mx-2"></i>
          <i class="fa-regular fa-calendar-days fs-4 text-secondary-custom text-primary mx-2"></i>
          <i class="fa-solid fa-location-dot fs-4 text-secondary-custom text-primary mx-2"></i>
        </div>
        <div class="col-2">
          <button class="btn btn-primary rounded-pill fw-bolder" v-if="imageUrl || form.description">Tweet</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</template>

<script setup>
  import { onMounted, reactive, ref, watch } from "vue";
  import useTweet from "../../services/tweet/index"
  import emitter from 'tiny-emitter/instance';
  const props = defineProps(['userId'])
  const { createTweet, getTweetConfidents, getTweets, getLocations, tweets, tweet, confidents, locations, error } = useTweet()
  const form = reactive({
    description: '',
    location_id: 1,
    tweet_confident_id: 1
  })
  const imageFile = ref(null)
  const imageUrl = ref(null)

  const uploadImage = async (e) => {
    if (e.target.files.length === 0) {
      imageFile.value = ""
      imageUrl.value = ""
      return;
    }
    imageFile.value = e.target.files[0]
  }

  watch(imageFile, (imageFile) => {
    if (imageFile instanceof File) {      
      let fileReader = new FileReader();
      fileReader.readAsDataURL(imageFile)
      fileReader.addEventListener('load', () => {
        imageUrl.value = fileReader.result
      })
    } else {
      return
    }
  })

  const submitMyTweet = async () => {
    let formData = new FormData()
    formData.append('image', imageFile.value)
    formData.append('description', form.description)
    formData.append('user_id', props.userId)
    formData.append('tweet_confident_id', form.tweet_confident_id)
    formData.append('location_id', form.location_id)
    console.log(...formData)
    await createTweet(formData)
    await resetForm()
    emitter.emit('created', true)
    
  }

  const resetForm = async () => {
    form.description = ""
    imageFile.value = ""
    imageUrl.value = ""
  }

  onMounted(async () => {
    await getTweetConfidents()
    await getLocations()
  })

  
</script>