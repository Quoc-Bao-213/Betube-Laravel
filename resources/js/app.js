require('./bootstrap');

window.Vue = require('vue');

Vue.config.ignoredElements = ['video-js']
Vue.component('votes', require('./components/votes.vue').default);
require('./components/subscribe-button.js')
require('./components/channel-uploads.js')

const app = new Vue({
    el: '#app',
});
