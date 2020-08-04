

require('./bootstrap');

window.Vue = require('vue');
import router from './router';
import store from './store';
import ViewUI from 'view-design';

import 'view-design/dist/styles/iview.css'
Vue.use(ViewUI)

import common from './common'
import jsonToHtml from './jsonToHtml'
Vue.mixin(common)
Vue.mixin(jsonToHtml)

import Editor from 'vue-editor-js'
Vue.use(Editor)


window.translate=require('./VueTranslation/Translation').default.translate;
Vue.prototype.translate=require('./VueTranslation/Translation').default.translate;






/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('mainapp', require('./components/mainapp.vue').default);
Vue.component('contact-form', require('./components/ContactForm.vue').default);


const app = new Vue({
    el: '#app',
    router,
    store

});


