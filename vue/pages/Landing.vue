<template>
  <q-page>
    <greeting ref="greeting"></greeting>
    <course-about ref="course-about"></course-about>
    <course-examples ref="course-examples"></course-examples>
    <course-structure ref="course-structure"></course-structure>
    <course-pricing ref="course-pricing"></course-pricing>
    <course-feedbacks ref="course-feedbacks"></course-feedbacks>
  </q-page>
</template>

<script>
import Greeting from '../components/landing/Greeting';
import CourseAbout from '../components/landing/CourseAbout';
import CourseExamples from '../components/landing/CourseExamples';
import CourseStructure from '../components/landing/CourseStructure';
import CoursePricing from '../components/landing/CoursePricing';
import CourseFeedbacks from '../components/landing/CourseFeedbacks';
import {onMounted, ref} from "vue";

export default {
  name: "Landing",
  components: {
    Greeting,
    CourseAbout,
    CourseExamples,
    CourseStructure,
    CoursePricing,
    CourseFeedbacks,
  },
  methods: {
  },
  setup() {
    const vGreeting = ref({name:'Приветствие'});
    const vCourseAbout = ref({name:'О Курсе'});
    const vCourseExamples = ref({name:'Чему научитесь'});
    const vCourseStructure = ref(null);
    const vCoursePricing = ref(null);
    const vCourseFeedbacks = ref(null);

    onMounted(() => {
      console.log(vGreeting);
      console.log(vCourseAbout);
      console.log(vCourseExamples);
      console.log(vCourseStructure);
      console.log(vCoursePricing);
      console.log(vCourseFeedbacks);
    });
    return { vGreeting };
  }
}
</script>

<style scoped>

</style>