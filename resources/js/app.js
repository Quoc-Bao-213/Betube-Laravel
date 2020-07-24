require('./bootstrap');

window.Vue = require('vue');

Vue.config.ignoredElements = ['video-js']
Vue.component('votes', require('./components/votes.vue').default);
Vue.component('comments', require('./components/comments.vue').default);
Vue.component('playlist', require('./components/playlist.vue').default);
require('./components/subscribe-button.js')
require('./components/channel-uploads.js')

const app = new Vue({
    el: '#app',
});
