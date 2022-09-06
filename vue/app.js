import {createApp} from 'vue';
import App from './App.vue';
import router from './router';
import { Quasar, LocalStorage, SessionStorage } from 'quasar';

import iconSet from 'quasar/icon-set/fontawesome-v6';

const app = createApp(App)
    .use(router)
    .use(Quasar, {
        plugins: {
            LocalStorage,
            SessionStorage
        },
        iconSet: iconSet,
        config: {
            brand: {
                primary: '#1f3247',
                secondary: '#5f78a6',
                accent: '#9680ab',

                dark: '#363534',
                'dark-page': '#121212',

                positive: '#234d42',
                negative: '#66362e',
                info: '#4f597f',
                warning: '#F2C037',
            }
        }
    })
    .mount('#app');