<template>
  <q-page>
    <landing-section class="bg-image-custom">
      <course-greeting ref="greeting"></course-greeting>
    </landing-section>
    <landing-section class="bg-white">
      <course-photo-collage></course-photo-collage>
    </landing-section>
    <landing-section class="bg-white">
      <course-about ref="course-about"></course-about>
    </landing-section>
    <landing-section class="bg-grey-2">
      <course-structure ref="course-structure"></course-structure>
    </landing-section>
    <landing-section class="bg-white">
      <course-f-a-q></course-f-a-q>
    </landing-section>
    <course-examples ref="course-examples"></course-examples>
    <landing-section class="bg-white">
      <course-pricing-row ref="course-pricing"></course-pricing-row>
    </landing-section>
    <course-feedbacks ref="course-feedbacks"></course-feedbacks>
  </q-page>
</template>

<script>
import CourseGreeting from '../components/landing/CourseGreeting'
import CourseAbout from '../components/landing/CourseAbout'
import CourseExamples from '../components/landing/CourseExamples'
import CourseStructure from '../components/landing/CourseStructure'
import CourseFAQ from '../components/landing/CourseFAQ'
import CoursePricingRow from '../components/landing/CoursePricingRow'
import CourseFeedbacks from '../components/landing/CourseFeedbacks'
import CoursePhotoCollage from '../components/landing/CoursePhotoCollage'
import LandingSection from '../components/base/LandingSection'

export default {
  name: 'LandingPage',
  components: {
    CourseGreeting,
    CourseAbout,
    CourseExamples,
    CourseStructure,
    CourseFAQ,
    CoursePricingRow,
    CourseFeedbacks,
    CoursePhotoCollage,
    LandingSection
  },
  methods: {
    showError () {
      // $q.notify('Top action triggered. Resetting in 1 second.')
    }
  }
}
</script>
<style lang="sass">
@import "~quasar/src/css/variables.sass"

.border-b
  border-bottom: 1px solid $dark
.border-t
  border-top: 1px solid #efefef
.border-r
  border-right: 1px solid #efefef
.border-l
  border-left: 1px solid #efefef

</style>
