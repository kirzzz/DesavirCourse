<template>
  <div class="row">
    <div
        class="col-lg-4 col-12"
        v-for="(item, key) in priceSection"
        :key="key"
    >
      <div>
        <div>
          <h4 class="text-h4 q-my-md-lg q-my-md text-center text-bold">{{item.name}}</h4>
          <h6>Крутой курс</h6>
          <q-btn outline
                 class="q-mt-md-xl q-mt-lg full-width"
                 color="primary"
                 text-color="dark"
                 size="md"
                 label="Записаться"
          />
        </div>
        <div>
          <q-intersection
            v-for="(field, i) in item.fields"
            :key="i"
            transition="flip-right"
            class="q-pa-md"
          >
            <p>{{ field.name }}</p>
            <q-separator class="bg-grey"></q-separator>
          </q-intersection>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'CoursePricing',
  data () {
    return {
      priceSection: [
        {
          name: 'Базовый',
          fields: [
            { id: 1, name: 'Научу какать', isNew: true },
            { id: 2, name: 'Маникюру не научу', isNew: true },
            { id: 3, name: 'Наращиванию не научу', isNew: true },
            { id: 4, name: 'Формам не научу', isNew: true },
            { id: 5, name: 'Пилке не научу', isNew: true },
            { id: 6, name: 'Научу Писять', isNew: true }
          ]
        }, {
          name: 'Среднячок',
          fields: [
            { id: 1, name: 'Научу какать', isNew: false },
            { id: 2, name: 'Маникюру не научу', isNew: false },
            { id: 3, name: 'Наращиванию не научу', isNew: false },
            { id: 4, name: 'Формам не научу', isNew: false },
            { id: 5, name: 'Пилке не научу', isNew: false },
            { id: 6, name: 'Научу Писять', isNew: false },
            { id: 7, name: 'Научу делать один ноготь', isNew: true }
          ]
        }, {
          name: 'PRO BUDDY',
          fields: [
            { id: 1, name: 'Научу какать', isNew: false },
            { id: 2, name: 'Маникюру не научу', isNew: false },
            { id: 3, name: 'Наращиванию не научу', isNew: false },
            { id: 4, name: 'Формам не научу', isNew: false },
            { id: 5, name: 'Пилке не научу', isNew: false },
            { id: 6, name: 'Научу Писять', isNew: false },
            { id: 7, name: 'Научу делать один ноготь', isNew: false },
            { id: 7, name: 'Научу делать три ногтя', isNew: true }
          ]
        }
      ]
    }
  }
}
</script>

<style scoped>
  .pricing-section {

  }
</style>
