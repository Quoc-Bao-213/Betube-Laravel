import numeral from 'numeral'

Vue.component('subscribe-button', {
    props: {
        channel: {
            type: Object,
            required: true,
            default: () => ({})
        },
        initialSubscriptions: {
            type: Array,
            required: true,
            default: () => []
        }
    },

    data: function() {
        return {
            subscriptions: this.initialSubscriptions
        }
    },

    computed: {
        subscribed() {
            if(!__auth() || this.channel.id === __auth().id)
                return false
            return !!this.subscription
        },
        owner() {
            if(__auth() && this.channel.id === __auth().id)
                return true
            return false
        },
        subscription() {
            if(!__auth())
                return null
            return this.subscriptions.find(subscription => subscription.user_subscribe === __auth().id)
        },
        count() {
            return numeral(this.subscriptions.length).format('0a')
        }
    }, 

    methods: {
        toggleSubscription() {
            if(!__auth()) {
                return alert('Login To Subscribe')
            }

            // if(this.owner) {
            //     return alert('You cannot subscribe to your channel')
            // }

            if(this.subscribed) {
                axios.delete(`/channels/${this.channel.id}/subscriptions/${this.subscription.id}`)
                    .then(() => {
                        // console.log(this.subscriptions)
                        this.subscriptions = this.subscriptions.filter(s => s.id !== this.subscription.id)
                        // console.log(this.subscriptions)
                    })
            } else {
                axios.post(`/channels/${this.channel.id}/subscriptions`)
                    .then(response => {
                        // console.log(response)
                        this.subscriptions = [
                            ...this.subscriptions,
                            response.data
                        ]
                        // console.log(...this.subscriptions)
                    })
            }
        }
    }
})