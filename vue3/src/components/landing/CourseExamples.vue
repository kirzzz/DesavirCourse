<template>
  <div class="examples-section bg-white q-pa-3xl">
    <q-carousel
        transition-prev="slide-right"
        transition-next="slide-left"
        swipeable
        animated
        control-color="primary"
        control-type="outline"
        navigation-icon="fas fa-circle"
        navigation
        padding
        height="600px"
        class="q-pa-xl"
    >
      <q-carousel-slide
          class="column no-wrap"
          v-for="(slider, key) in sliders"
          :name="1"
          :key="key"
      >
        <div class="row fit justify-start items-center q-gutter-md q-col-gutter no-wrap">
          <q-img class="rounded-borders full-height" :src="slider.img" />
        </div>
      </q-carousel-slide>
    </q-carousel>
  </div>
</template>

<script>
// import { ref } from 'vue'

export default {
  name: 'CourseExamples',
  data () {
    return {
      sliders: [
        {
          img: '',
          title: 'Lorem ipsum dolor sit amet.',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut beatae consequatur debitis eaque est eveniet harum in, itaque iusto maxime, nam provident quia quod, ratione rem repudiandae sapiente sed tenetur ullam velit vero voluptatibus.'
        }, {
          img: '',
          title: 'Lorem ipsum dolor sit amet.',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut beatae consequatur debitis eaque est eveniet harum in, itaque iusto maxime, nam provident quia quod, ratione rem repudiandae sapiente sed tenetur ullam velit vero voluptatibus.'
        }, {
          img: '',
          title: 'Lorem ipsum dolor sit amet.',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut beatae consequatur debitis eaque est eveniet harum in, itaque iusto maxime, nam provident quia quod, ratione rem repudiandae sapiente sed tenetur ullam velit vero voluptatibus.'
        }, {
          img: '',
          title: 'Lorem ipsum dolor sit amet.',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut beatae consequatur debitis eaque est eveniet harum in, itaque iusto maxime, nam provident quia quod, ratione rem repudiandae sapiente sed tenetur ullam velit vero voluptatibus.'
        }, {
          img: '',
          title: 'Lorem ipsum dolor sit amet.',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut beatae consequatur debitis eaque est eveniet harum in, itaque iusto maxime, nam provident quia quod, ratione rem repudiandae sapiente sed tenetur ullam velit vero voluptatibus.'
        }
      ]
    }
  }
}
</script>

<style scoped>
.examples-section {

}
</style>
