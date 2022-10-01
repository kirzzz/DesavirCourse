<template>
  <div class="structure-section">
    <div class="row text-dark">
      <div class="col-12 text-center">
        <h3 class="text-h3 text-bold q-mb-none">Lorem ipsum dolor sit amet.</h3>
        <p class="text-body1 q-mt-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor ex, facilis in laudantium odio perspiciatis quo sit vel voluptatem!</p>
      </div>
    </div>
    <div
        v-for="(item, key) in content"
        :key="key"
        class="row text-dark q-mt-md-3xl q-mt-xl"
        :class="{ 'reverse': (key % 2 !== 0) }"
    >
      <div class="col-md-6 col-12 text-center q-px-md">
        <Suspense>
          <!-- component with nested async dependencies -->
          <template #default>
            <q-intersection
                transition="scale"
                once
            >
              <random-img
                  class="structure-img"
                  height='300px'
              />
            </q-intersection>
          </template>
          <!-- loading state via #fallback slot -->
          <template #fallback>
            <q-skeleton type="rect" class="structure-img"/>
          </template>
        </Suspense>
      </div>
      <div
          class="col-md-6 col-12 column q-px-md justify-center text-left"
          :class="{
              'q-pl-3xl-md': (key % 2 === 0),
              'q-pr-3xl-md': (key % 2 !== 0),
            }"
      >
        <h3 class="text-h3 q-mt-lg q-mb-none" style="width: 100%">{{ item.title }}</h3>
        <p class="text-body1 q-mt-lg">{{ item.text }}</p>
      </div>
    </div>
  </div>
</template>

<script>
import RandomImg from '../RandomImg'

export default {
  name: 'CourseStructure',
  components: {
    RandomImg
  },
  data () {
    return {
      content: [
        {
          img: '',
          title: 'Lorem ipsum dolor sit.',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cum dolores fuga optio. Accusamus delectus doloribus impedit incidunt quo ut?'
        },
        {
          img: '',
          title: 'Lorem ipsum dolor sit.',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cum dolores fuga optio. Accusamus delectus doloribus impedit incidunt quo ut?'
        },
        {
          img: '',
          title: 'Lorem ipsum dolor sit.',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cum dolores fuga optio. Accusamus delectus doloribus impedit incidunt quo ut?'
        },
        {
          img: '',
          title: 'Lorem ipsum dolor sit.',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cum dolores fuga optio. Accusamus delectus doloribus impedit incidunt quo ut?'
        }
      ]
    }
  }
}
</script>

<style scoped>
.structure-section{

}

.structure-img {

}
</style>
