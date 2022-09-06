<template>
  <q-header reveal class="bg-primary text-white q-px-3xl q-pt-2xl" >
    <q-toolbar class="q-px-none">
      <q-toolbar-title class="text-h2">
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
import {ref, defineComponent} from "vue";

export default {
  name: "LandingHeader",
  /*data() {
    return {
      menuItems: [
        {name: 'Default', href: '#'}
      ]
    }
  },
  methods: {
    goto(refName) {
      var element = this.$refs[refName];
      var top = element.offsetTop;
      vue.scrollTo();
      window.scrollTo(0, top);
    },
  },
  mounted() {
    this.$nextTick(function () {
      console.log(this.$refs)
      this.menuItems.push();
    })
  }*/
}
</script>

<style scoped>

</style>