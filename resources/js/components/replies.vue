<template>
    <div class="media-object stack-for-small reply-comment">

        <div v-for="reply in replies.data" :key="reply.id">
            <div class="media-object-section comment-img text-center">
                <div class="comment-box-img">
                    <img :src="reply.user.avatar" alt="comment">
                </div>
            </div>
            <div class="media-object-section comment-desc" style="width: 42rem">
                <div class="comment-title">
                    <span class="name"><a :href="`/about-me/${reply.user.id}`">{{ reply.user.channel_name }}</a> Said:</span>
                    <span class="time float-right"><i class="fa fa-clock-o"></i><time-ago class="time_ago" :datetime="reply.created_at" :long="true"></time-ago></span>
                </div>
                <div class="comment-text">
                    <p>{{ reply.content }}</p>
                </div>
                <div class="comment-btns">
                    <!-- <span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#"><i class="fa fa-thumbs-o-down"></i></a></span> -->
                    <votes :default_votes="reply.votes" :entity="reply"></votes>
                </div>
            </div>
        </div>

        <div v-if="comment.repliesCount > 0 && replies.next_page_url" class="showmore_trigger" style="margin-top: 0;">
            <span @click="fetchReplies" class="more">Load Replies</span>
            <!-- <span class="less">Show Less</span> -->
        </div>

    </div>
</template>

<script>
import TimeAgo from 'vue2-timeago'

export default {
    props: {
        comment: {
            required: true,
            default: () => ({})
        },
    },

    components: {
        TimeAgo
    },

    data() {
        return {
            replies: {
                data: [],
                next_page_url: `/comments/${this.comment.id}/replies`,
            },
        }
    },

    methods: {
        fetchReplies() {
            axios.get(this.replies.next_page_url)
                .then(({ data }) => {
                    this.replies = {
                        ...data,
                        data: [
                            ...this.replies.data,
                            ...data.data
                        ]
                    }
                })
        },
        addReply(reply) {
            this.replies = {
                ...this.replies,
                data: [
                    reply,
                    ...this.replies.data
                ]
            }
        }
    }
}
</script>