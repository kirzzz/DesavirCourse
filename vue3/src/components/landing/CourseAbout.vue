<template>
  <div class="row text-dark">
    <div class="col-12 text-center">
      <h3 class="text-h3 text-bold q-mb-none">Lorem ipsum dolor sit.</h3>
      <p class="text-body1 q-mt-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor ex, facilis in laudantium odio perspiciatis quo sit vel voluptatem!</p>
    </div>
  </div>
  <div class="row text-dark q-mt-xl">
    <div
        class="col-sm-4 col-12 column
        text-center
        q-px-md q-mt-md-none q-mt-xl"
        v-for="(item, key) in content"
        :key="key"
    >
      <q-intersection
          transition="scale"
          once
          class="intersection col col-7"
      >
        <q-img
            :src="item.img"
            :ratio="9/16"
            style="display: contents"
            fit="cover"
        >
          <template v-slot:loading>
            <div class="text-primary">
              <q-spinner-ios />
              <div class="q-mt-md">Загрузка...</div>
            </div>
          </template>
        </q-img>
      </q-intersection>
      <h5 class="text-h4 q-my-lg">{{item.title}}</h5>
      <p class="text-body1">{{item.text}}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'CourseAbout',
  data () {
    return {
      content: [
        {
          img: 'https://cdn.quasar.dev/img/parallax2.jpg',
          title: 'Lorem ipsum dolor sit.',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cum dolores fuga optio. Accusamus delectus doloribus impedit incidunt quo ut?'
        },
        {
          img: 'https://cdn.quasar.dev/img/parallax2.jpg',
          title: 'Lorem ipsum dolor sit.',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cum dolores fuga optio. Accusamus delectus doloribus impedit incidunt quo ut?'
        },
        {
          img: 'https://cdn.quasar.dev/img/parallax2.jpg',
          title: 'Lorem ipsum dolor sit.',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cum dolores fuga optio. Accusamus delectus doloribus impedit incidunt quo ut?'
        }
      ]
    }
  }
}
</script>

<style scoped>
.intersection {
  height: 38vh;
}
</style>
