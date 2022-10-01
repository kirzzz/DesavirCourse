import axios from 'axios'

export const randomImgMix = {
  async getLinkRand () {
    const URL_RAND_IMG = 'https://some-random-api.ml/img/'
    const RAND_IMG_TYPES = [
      { name: 'koala', path: 'koala' },
      { name: 'raccoon', path: 'raccoon' },
      { name: 'red_panda', path: 'red_panda' },
      { name: 'kangaroo', path: 'kangaroo' },
      { name: 'pikachu', path: 'pikachu' }
    ]
    const path = URL_RAND_IMG + RAND_IMG_TYPES[Math.floor(Math.random() * RAND_IMG_TYPES.length)].path

    return await axios.get(path)
      .then(res => res.data)
      .catch(function (response) {
        console.log('mixins/RandomImg.js:' + response.error)
      })
  }
}
