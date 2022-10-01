<template>
  <q-layout view="hHh LpR fFf" class="font-jost">
<!--    <landing-header></landing-header>-->
    <q-page-container>
      <router-view />
    </q-page-container>
<!--    <landing-footer></landing-footer>-->
  </q-layout>
</template>

<script>
/* eslint-disable */
import { defineComponent } from 'vue'
import LandingHeader from '../components/landing/LandingHeader'
import LandingFooter from '../components/landing/LandingFooter'

export default defineComponent({
  name: 'LandingLayout',
  components: {
    LandingHeader,
    LandingFooter
  }
})
</script>

<style scoped>

</style>
