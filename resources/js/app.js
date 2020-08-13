require('./bootstrap');

window.Vue = require('vue');

Vue.config.ignoredElements = ['video-js']
Vue.component('votes', require('./components/votes.vue').default);
Vue.component('comments', require('./components/comments.vue').default);
Vue.component('playlist', require('./components/playlist.vue').default);
Vue.component('edit-playlist', require('./components/edit-playlist.vue').default);
Vue.component('drag-items', require('./components/drag-items.vue').default);
Vue.component('player', require('./components/player.vue').default);
Vue.component('event-bus', require('./components/event-bus.vue').default);
require('./components/subscribe-button.js')
require('./components/channel-uploads.js')

const app = new Vue({
    el: '#app',
});
