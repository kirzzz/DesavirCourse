<script>
import { defineComponent } from 'vue'
import { randomImgMix } from '../mixins/RandomImgMix'
import { RandomShape } from '../mixins/RandomShape'

export default defineComponent({
  name: 'RandomImg',
  props: {
    link: {
      type: String,
      default: ''
    }
  },
  mixins: [randomImgMix, RandomShape],
  async setup (props) {
    const img = props.link === ''
      ? await randomImgMix.getLinkRand().catch(
        er => (console.log(er))
      )
      : props.link

    const shape = RandomShape.getRandomShape()

    return {
      img,
      shape
    }
  },
  template: `
    <q-img
      :src="img.link"
      :img-style="{ 'border-radius': shape }"
      :ratio="1"
      height="200px"
    />`
})
</script>
