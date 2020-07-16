<template>
     <div class="media-object stack-for-small">
        <div class="media-object-section comment-img text-center">
            <div class="comment-box-img">
                <img :src="comment.user.avatar" alt="comment">
                <!-- <avatar :username="comment.user.name"></avatar> -->
            </div>
        </div>
        <div class="media-object-section comment-desc">
            <div class="comment-title">
                <span class="name"><a :href="`/about-me/${comment.user.id}`">{{ comment.user.channel_name }}</a> Said:</span>
                <span class="time float-right"><i class="fa fa-clock-o"></i><time-ago class="time_ago" :datetime="comment.created_at" :long="true"></time-ago></span>
            </div>
            <div class="comment-text">
                <p>{{ comment.content }}</p>
            </div>
            <div class="comment-btns">
                <!-- <span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#"><i class="fa fa-thumbs-o-down"></i></a></span> -->
                <votes :default_votes="comment.votes" :entity="comment"></votes>
                <span style="margin-left: 10px;"><button v-if="auth" @click="addingReply = !addingReply"><i class="fa fa-share"></i>{{ addingReply ? 'Cancel' : 'Add Reply' }}</button></span>
                <!-- <span class='reply float-right hide-reply'></span> -->
            </div>

            <div v-if="addingReply" class="comment-box thumb-border">
                <div class="media-object stack-for-small">
                    <div class="media-object-section comment-img text-center">
                        <div class="comment-box-img">
                            <img :src="users.avatar" alt="comment">
                        </div>
                    </div>
                    <div class="media-object-section comment-textarea">
                        <div method="post" style="width: 33.6rem;">
                            <input v-model="content" type="text" style="font-size: 0.9em" placeholder="Add a replies here...">
                            <button @click="addReply" style="float: right;">
                                <small>Add Reply</small>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!--sub comment-->
            <replies ref="replies" :comment="comment"></replies>
            <!-- end sub comment -->

        </div>
    </div>
</template>

<script>
import Replies from './replies.vue'
import TimeAgo from 'vue2-timeago'

export default {
    props: {
        comment: {
            required: true,
            default: () => ({})
        },
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
        Replies,
        TimeAgo,
    },

    data() {
        return {
            content: '',
            addingReply: false,
            users: this.user
        }
    },

    computed: {
        auth() {
            return __auth()
        }
    },

    methods: {
        addReply() {
            // console.log(this.video.user_id)
            // return 
            if (!this.content) return

            axios.post(`/comments/${this.video.id}`, {
                comment_id: this.comment.id,
                content: this.content
            }).then(({ data }) => {
                // console.log(data)
                this.content = ''
                this.addingReply = false
                this.$refs.replies.addReply(data)
            })
        }
    }
}
</script>

<style>
.time_ago span {
    font-size: 12px; 
    cursor: default;
    color: #aaaaaa;
    font-family: "Open Sans", Helvetica, Roboto, Arial, sans-serif;
}

.main-comment .media-object .comment-desc .comment-btns .secondary-button {
    margin-right: 5px !important;
}

.main-comment .media-object .comment-desc .comment-btns span {
    margin-right: 0;
    color: #303030 !important;
}
</style>