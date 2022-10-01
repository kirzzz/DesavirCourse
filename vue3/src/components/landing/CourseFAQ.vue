<template>
  <div class="structure-section">
    <div class="row">
      <div class="col-md-6 col-12 q-px-md-md">
        <q-list>
          <q-expansion-item
              group="faq"
              header-class="text-h4 text-dark border-b"
              switch-toggle-side
              v-for="(question, key) in faq"
              :icon="'none'"
              :key="key"
              :label="question.title"
              :default-opened="key === 0"
              @before-show="changeImg(question.img)"
          >
            <q-card>
              <q-card-section class="text-body1">
                {{question.text}}
              </q-card-section>
            </q-card>
            <q-separator />
          </q-expansion-item>
        </q-list>
      </div>
      <div class="col-md-6 col-12">
        <q-img
            v-model="visibleImg"
            :src="visibleImg"
        />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'CourseFAQ',
  data () {
    return {
      faq: [
        {
          img: 'https://i.some-random-api.ml/fot5nGRJYd.jpg',
          title: 'Lorem ipsum dolor sit amet, consectetur.',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cumque dolore fuga natus optio quis quisquam. Aliquid consequuntur, delectus deleniti dolorem expedita ipsam nesciunt quibusdam saepe! Accusantium ea eius impedit laboriosam minima officia veniam.'
        }, {
          img: 'https://i.some-random-api.ml/fot5nGRJYd.jpg',
          title: 'Lorem ipsum dolor sit amet, consectetur.',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cumque dolore fuga natus optio quis quisquam. Aliquid consequuntur, delectus deleniti dolorem expedita ipsam nesciunt quibusdam saepe! Accusantium ea eius impedit laboriosam minima officia veniam.'
        }, {
          img: 'https://i.some-random-api.ml/88uIgNHVeU.jpg',
          title: 'Lorem ipsum dolor sit amet, consectetur.',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cumque dolore fuga natus optio quis quisquam. Aliquid consequuntur, delectus deleniti dolorem expedita ipsam nesciunt quibusdam saepe! Accusantium ea eius impedit laboriosam minima officia veniam.'
        }, {
          img: 'https://i.some-random-api.ml/fot5nGRJYd.jpg',
          title: 'Lorem ipsum dolor sit amet, consectetur.',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cumque dolore fuga natus optio quis quisquam. Aliquid consequuntur, delectus deleniti dolorem expedita ipsam nesciunt quibusdam saepe! Accusantium ea eius impedit laboriosam minima officia veniam.'
        }, {
          img: 'https://i.some-random-api.ml/fot5nGRJYd.jpg',
          title: 'Lorem ipsum dolor sit amet, consectetur.',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cumque dolore fuga natus optio quis quisquam. Aliquid consequuntur, delectus deleniti dolorem expedita ipsam nesciunt quibusdam saepe! Accusantium ea eius impedit laboriosam minima officia veniam.'
        }, {
          img: 'https://i.some-random-api.ml/fot5nGRJYd.jpg',
          title: 'Lorem ipsum dolor sit amet, consectetur.',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cumque dolore fuga natus optio quis quisquam. Aliquid consequuntur, delectus deleniti dolorem expedita ipsam nesciunt quibusdam saepe! Accusantium ea eius impedit laboriosam minima officia veniam.'
        }
      ],
      visibleImg: 'https://i.some-random-api.ml/fot5nGRJYd.jpg'
    }
  },
  methods: {
    changeImg (link) {
      console.log('this.visibleImg')
      console.log(this.visibleImg)
      this.visibleImg = link
    }
  }
}
</script>

<style scoped>

</style>
