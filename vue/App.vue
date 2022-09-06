<template>
  <q-layout view="hHh LpR fFf">
    <landing-header></landing-header>
    <q-scroll-observer @scroll="scrollHandler" />
    <q-page-container>
      <router-view />
    </q-page-container>
    <landing-footer></landing-footer>
  </q-layout>
</template>

<script>
import LandingHeader from './components/landing/LandingHeader';
import LandingFooter from './components/landing/LandingFooter';

export default {
  components: {
    LandingHeader,
    LandingFooter,
  },
  methods: {
    scrollHandler(e) {
      console.log(e)
    }
  }
}
</script>

<style scoped>

</style>