const mix = require('laravel-mix');

mix.js('vue/app.js', 'web/app.js')
    .sass('node_modules/quasar/src/css/index.sass','css')
    .setPublicPath('web')
    .vue();