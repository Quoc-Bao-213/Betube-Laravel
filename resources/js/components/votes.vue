<template>
    <span>
        <span @click="vote('up')" class="secondary-button" :class="{ 'thumb-up-active': upvoted }"><i class="fa fa-thumbs-o-up"></i></span>
        <span style="margin-right: 10px;">{{ upvotes_count }}</span>
        <span @click="vote('down')" class="secondary-button" :class="{ 'thumb-down-active': downvoted }"><i class="fa fa-thumbs-o-down"></i></span>
        <span>{{ downvotes_count }}</span>


        <!-- <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="width: 20px; height: 20px;">
            <g class="style-scope yt-icon">
                <path d="M1 21h4V9H1v12zm22-11c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-1.91l-.01-.01L23 10z" class="style-scope yt-icon"></path>
            </g>
        </svg>
        <span style="margin-right: 5px;">{{ upvotes_count }}</span>

        <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="width: 20px; height: 20px;">
            <g class="style-scope yt-icon">
                <path d="M15 3H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v1.91l.01.01L1 14c0 1.1.9 2 2 2h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 23l6.59-6.59c.36-.36.58-.86.58-1.41V5c0-1.1-.9-2-2-2zm4 0v12h4V3h-4z" class="style-scope yt-icon"></path>
            </g>
        </svg>
        <span>{{ downvotes_count }}</span> -->
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

                console.log(isDelele)
                
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