<template>
    <div class="media-object stack-for-small reply-comment">

        <div v-for="reply in replies.data">
            <div class="media-object-section comment-img text-center">
                <div class="comment-box-img">
                    <img src= "images/post-author-post.png" alt="comment">
                </div>
            </div>
            <div class="media-object-section comment-desc" style="width: 42rem">
                <div class="comment-title">
                    <span class="name"><a href="#">{{ reply.user.name }}</a> Said:</span>
                    <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
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
export default {
    props: ['comment'],

    data() {
        return {
            replies: {
                data: [],
                next_page_url: `/comments/${this.comment.id}/replies`
            }
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
        }
    }
}
</script>