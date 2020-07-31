<template>
    <span>
        <span @click="vote('up')" class="secondary-button" :class="{ 'thumb-up-active': upvoted }"><i class="fa fa-thumbs-o-up"></i></span>
        <span style="margin-right: 10px;">{{ upvotes_count }}</span>
        <span @click="vote('down')" class="secondary-button" :class="{ 'thumb-down-active': downvoted }"><i class="fa fa-thumbs-o-down"></i></span>
        <span>{{ downvotes_count }}</span>
    </span>
</template>

<script>
import numeral from 'numeral'

export default {
    props: {
        default_votes: {
            required: true,
            default: () => []
        },
        entity: {
            required: true,
            default: () => ({})
        }
    },

    data() {
        return {
            votes: this.default_votes
        }
    },

    computed: {
        upvotes() {
            return this.votes.filter(v => v.type === 'up')
        },
        downvotes() {
            return this.votes.filter(v => v.type === 'down')
        },
        upvotes_count() {
            return numeral(this.upvotes.length).format('0a')
        },
        downvotes_count() {
            return numeral(this.downvotes.length).format('0a')
        },
        upvoted() {
            if (!__auth()) 
                return false
            return !!this.upvotes.find(v => v.user_id === __auth().id)
        },
        downvoted() {
            if (!__auth()) 
                return false
            return !!this.downvotes.find(v => v.user_id === __auth().id)
        },
    },

    methods: {
        vote(type) {
            if (!__auth())
                return alert('Please login to vote!')

            // Delete Like
            if (type === 'up' && this.upvoted) {
                var isDelele = '';
                for (var i = 0; i < this.votes.length; i++) {
                    if (this.votes[i].user_id === __auth().id) {
                        isDelele = this.votes[i].id
                        break
                    }
                }
                
                axios.delete(`/votes/${isDelele}/delete`)
                    .then(() => {
                        var findUser = this.upvotes.find(v => v.user_id === __auth().id)
                        this.votes = this.votes.filter(v => v.user_id !== findUser.user_id)
                        console.log('Delete')
                    })
                return
            }

            // Delete dislike
            if (type === 'down' && this.downvoted) {
                var isDelele = '';
                for (var i = 0; i < this.votes.length; i++) {
                    if (this.votes[i].user_id === __auth().id) {
                        isDelele = this.votes[i].id
                        break
                    }
                }

                axios.delete(`/votes/${isDelele}/delete`)
                    .then(() => {
                        var findUser = this.downvotes.find(v => v.user_id === __auth().id)
                        this.votes = this.votes.filter(v => v.user_id !== findUser.user_id)
                        console.log('Delete')
                    })
                return
            }

            // Votes
            axios.post(`/votes/${this.entity.id}/${type}`)
                .then(({ data }) => {
                    // console.log(this.votes)
                    console.log('Votes')
                    if (this.upvoted || this.downvoted) {
                        this.votes = this.votes.map(v => {
                            if(v.user_id === __auth().id) {
                                return data
                            }
                            return v
                        })  
                    } else {
                        this.votes = [
                            ...this.votes,
                            data
                        ]
                    }
                })
        }
    }
}
</script>