<template>
  <q-header
      reveal
      class="text-white q-px-4xl q-pt-2xl"
      :class="{ 'bg-dark': isTop, 'bg-primary': !isTop}"
  >
    <q-toolbar class="q-px-none">
      <q-toolbar-title class="text-h2 text-center">
        Desavir Course
      </q-toolbar-title>
    </q-toolbar>

<!--    <q-tabs align="left">
      <q-route-tab :to="{ name: 'Landing', hash: '#course-about'}" label="Page Three" />
      <q-btn flat color="secondary text-white" label="Flat" href="#course-about"/>
      <q-btn flat color="indigo-10" label="Flat" :to="{ hash: '#course-about'}"/>
    </q-tabs>-->
  </q-header>
</template>

<script>
import { ref } from 'vue'

export default {
  name: 'LandingHeader',
  setup () {
    // Only execute this code on the client side, server sticks to [0, 0]
    const isTop = ref(false)

    const updateLocation = () => {
      isTop.value = Math.round(window.pageYOffset) < 10
    }

    // Call listener once to detect initial position
    updateLocation()

    // When scrolling, update the position
    // window.addEventListener('scroll', updateLocation)

    return {
      isTop
    }
  }
}
</script>

<style scoped>

</style>
