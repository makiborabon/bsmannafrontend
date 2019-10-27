/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import BootstrapVue from 'bootstrap-vue'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faFacebook } from '@fortawesome/free-brands-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

Vue.use(BootstrapVue)
Vue.use(ElementUI);
library.add(faFacebook)

Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.config.productionTip = false

Vue.component('carousel', require('./components/carousel.vue').default);
Vue.component('navigation', require('./components/navigation.vue').default);
Vue.component('services', require('./components/services.vue').default);
Vue.component('cta', require('./components/cta.vue').default);
Vue.component('b-footer', require('./components/footer.vue').default);


const app = new Vue({
    el: '#app',
    // render: h => h(App)
});
