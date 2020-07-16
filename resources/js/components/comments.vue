<template>
    <section class="content comments">
        <div class="row secBg">
            <div class="large-12 columns">
                <div class="main-heading borderBottom">
                    <div class="row padding-14">
                        <div class="medium-12 small-12 columns">
                            <div class="head-title">
                                <i class="fa fa-comments"></i>
                                <h4>Comments <span>(4)</span></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="auth" class="comment-box thumb-border">
                    <div class="media-object stack-for-small">
                        <div class="media-object-section comment-img text-center">
                            <div class="comment-box-img">
                                <img :src="users.avatar" alt="comment">
                            </div>
                            <h6><a :href="`/about-me/${users.id}`">{{ users.channel_name }}</a></h6>
                        </div>
                        <div class="media-object-section comment-textarea">
                            <div>
                                <textarea v-model="newComment" name="content" placeholder="Add a comment here.."></textarea>
                                <button @click="addComment" style="float: right;">
                                    <small>Add Comment</small>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="comment-sort text-right">
                    <span>Sort By : <a href="javascript:void(0)">newest</a><!-- | <a href="#">oldest</a> --></span>
                </div>

                <!-- main comment -->
                <div class="main-comment"> <!-- showmore_one -->
                    <Comment v-for="comment in comments.data" :key="comment.id" :comment="comment" :video="video" :user="users"/>

                    <div v-if="comments.next_page_url" class="showmore_trigger" style="margin-top: 25px">
                        <span @click="fetchComments" class="more">Load Comments</span>
                        <!-- <span v-else class="less">Show Less</span> -->
                    </div>
                </div><!-- End main comment -->

            </div>
        </div>
    </section>
</template>

<script>
import Comment from './comment.vue'

export default {
    props: {
        video: {
            required: true,
            default: () => ({})
        },
        user: {
            required: true,
            default: () => ({})
        }
    },

    components: {
        Comment
    },

    data() {
        return {
            comments: {
                data: []
            },
            newComment: '',
            users: this.user
        }
    },

    mounted() {
        this.fetchComments()
    },

    computed: {
        auth() {
            // console.log(__auth())
            return __auth()
        }
    },

    methods: {
        fetchComments() {
            const url = this.comments.next_page_url ? this.comments.next_page_url : `/videos/${this.video.id}/comments`

            axios.get(url)
                .then(({ data }) => {
                    this.comments = {
                        ...data,
                        data: [
                            ...this.comments.data,
                            ...data.data
                        ]
                    }
                })
        },
        addComment() {
            if (!this.newComment) return

            axios.post(`/comments/${this.video.id}`, {
                content: this.newComment
            }).then(({ data }) => {
                this.newComment = ''
                this.comments = {
                    ...this.comments,
                    data: [
                        data,
                        ...this.comments.data
                    ]
                }
            })
        }
    }
}
</script>