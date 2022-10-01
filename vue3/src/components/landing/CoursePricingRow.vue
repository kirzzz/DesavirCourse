<template>
  <div class="row-lg reverse-lg">
    <div class="col-lg-5 offset-lg-1 col-xl-4 offset-xl-2 column items-center justify-center text-left-lg text-center q-mb-5 q-mb-lg-0">
      <p class="q-mb-md text-uppercase text-weight-bold text-h5 relative-position full-width">
        <span class="text-underline-accent text-accent">our pricing</span>
      </p>
      <h3 class="q-my-md full-width">
        Not any hidden charge.
      </h3>
      <q-tabs
        v-model="pricingTabs"
        class="text-accent full-width items-lg-start "
      >
        <q-tab
          v-for="(tab,key) in priceSection"
          :name="tab.name"
          :label="tab.name"
          :key="key"
        />
      </q-tabs>
    </div>
    <div class="col-md-6 items-center">
      <q-tab-panels v-model="pricingTabs" animated>
        <q-tab-panel
          v-for="(tab, it) in priceSection"
          :name="tab.name"
          :key="it"
        >
          <div class="row">
            <div class="col-sm-auto text-center column">
              <div class="text-center col-6 bg-primary text-white column items-center justify-center q-px-lg">
                <div class="text-h4 text-bold">{{tab.price}}</div>
                <div class="text-h6 text-light">{{tab.label}}</div>
              </div>
              <div class="col-6">
                <q-btn
                  color="accent"
                  style="border-radius: 0"
                  class="full-width full-height text-weight-light text-h6 shadow-2"
                  label="Записаться"
                />
              </div>
            </div>
            <div class="col-sm items-center
            q-py-lg q-py-sm-md q-px-xl q-px-sm-lg
            text-left text-sm-left bg-grey-2">
              <p class="q-mb-md text-bold text-h6">
                Saving $4
              </p>
              <h4 class="q-mb-lg text-h4">
                {{tab.label}}
              </h4>
              <p
                v-for="(field, key) in tab.fields"
                :class="{'q-mb-md': key !== tab.fields.length}"
                :key="key"
                class="text-h6 text-weight-light text-underline-primary"
              >
                {{field.name}}
              </p>
            </div>
          </div>
        </q-tab-panel>
      </q-tab-panels>
    </div>
  </div>
</template>

<script>
import { defineComponent, ref } from 'vue'

export default defineComponent({
  name: 'CoursePricingRow',
  data () {
    return {
      pricing: [],
      priceSection: [
        {
          name: 'base',
          label: 'Базовый',
          price: '3999',
          fields: [
            { id: 1, name: 'Научу какать', isNew: true },
            { id: 2, name: 'Маникюру не научу', isNew: true },
            { id: 3, name: 'Наращиванию не научу', isNew: true },
            { id: 4, name: 'Формам не научу', isNew: true },
            { id: 5, name: 'Пилке не научу', isNew: true },
            { id: 6, name: 'Научу Писять', isNew: true }
          ]
        }, {
          name: 'middle',
          label: 'Среднячок',
          price: '4999',
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
          name: 'pro',
          label: 'PRO BUDDY',
          price: '5999',
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
      ],
      pricingTabs: ref('middle')
    }
  }
})
</script>

<style scoped>

</style>
