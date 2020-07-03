require('./bootstrap');

window.Vue = require('vue');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.config.ignoredElements = ['video-js']
require('./components/subscribe-button.js')
require('./components/channel-uploads.js')

const app = new Vue({
    el: '#app',
});
