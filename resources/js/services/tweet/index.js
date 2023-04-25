import { ref } from "vue";
import axiosClient from "../../axios/index.js"

export default function useTweet() {
  const tweets = ref([])
  const confidents = ref([])
  const locations = ref([])
  const user = ref([])
  const tweet = ref([])
  const error = ref(null)
  const hasLiked = ref(false)

  const getTweets = async () => {
    await axiosClient.get('/tweets')
    .then((res) => {
      tweets.value = res.data.data
    })
    .catch(err => console.log(err))
  }

  const getUser = async () => {
    await axiosClient.get('/users/data')
    .then(res => user.value = res.data)
    .catch(err => console.log(err))
  }

  const getTweetConfidents = async () => {
    await axiosClient.get('/tweet_confidents')
    .then(res => confidents.value = res.data)
    .catch(err => console.log(err))
  }

  const getLocations = async () => {
     await axiosClient.get('/tweet_locations')
    .then(res => locations.value = res.data)
    .catch(err => console.log(err))
  }

  const createTweet = async (data) => {
    await axiosClient.post('/tweets', data)
    .then(res => console.log('done'))
    .catch(err => console.log(err))
  }

  const checkIfIsLikedByUserLoggedIn = async (user_id, tweet_id) => {
    await axiosClient.get('user/'+ user_id + '/tweet/' + tweet_id)
    .then(res => hasLiked.value = res.data.isLikedByUserLoggedIn)
    .catch(err => console.log(err))
  }

  return {
    getTweets,
    createTweet,
    getTweetConfidents,
    getLocations,
    getUser,
    checkIfIsLikedByUserLoggedIn,
    tweets,
    tweet,
    user,
    confidents,
    locations,
    hasLiked,
    error
  }
}