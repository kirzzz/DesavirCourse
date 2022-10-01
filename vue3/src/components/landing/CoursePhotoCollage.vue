<template>
  <div class="row">
    <div
      class="col-md-3 col-sm-6 col-xs-12"
      v-for="(column, keyCol) in collage"
      :key="keyCol"
    >
      <div class="column">
        <div
          class="q-pa-md-sm q-pa-md full-width"
          v-for="(block,keyBlock) in column"
          :key="keyBlock"
          :class="{ 'col-8': block.big, 'col col-4': !block.big }"
        >
          <q-img
            v-if="block.img"
            :src="block.img"
            :ratio="block.big?2/3:1"
          />
          <div
            class="full-height full-width bg-primary flex justify-center items-center"
            v-else-if="block.text"
          >
            <h3 class="text-h3 text-white text-center q-px-lg">{{block.text}}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: 'CoursePhotoCollage',
  data () {
    return {
      collage: [
        [
          { img: require('../../assets/IMG_7332.jpg'), big: true },
          { img: require('../../assets/IMG_7333.jpg') }
        ],
        [
          { text: 'Что-то на баварском' },
          { img: require('../../assets/IMG_7334.jpg'), big: true }
        ],
        [
          { img: require('../../assets/IMG_7336.jpg'), big: true },
          { img: require('../../assets/IMG_7337.jpg') }
        ],
        [
          { img: require('../../assets/IMG_7338.jpg') },
          { img: require('../../assets/IMG_7339.jpg'), big: true }
        ]
      ]
    }
  }
}
</script>

<style scoped>

</style>
