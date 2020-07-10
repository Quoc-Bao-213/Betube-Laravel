<template>
     <div class="media-object stack-for-small">
        <div class="media-object-section comment-img text-center">
            <div class="comment-box-img">
                <img src="images/post-author-post.png" alt="comment">
                <!-- <avatar :username="comment.user.name"></avatar> -->
            </div>
        </div>
        <div class="media-object-section comment-desc">
            <div class="comment-title">
                <span class="name"><a href="#">{{ comment.user.name }}</a> Said:</span>
                <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
            </div>
            <div class="comment-text">
                <p>{{ comment.content }}</p>
            </div>
            <div class="comment-btns">
                <!-- <span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#"><i class="fa fa-thumbs-o-down"></i></a></span> -->
                <votes :default_votes="comment.votes" :entity="comment"></votes>
                <span><button @click="addingReply = !addingReply"><i class="fa fa-share"></i>{{ addingReply ? 'Cancel' : 'Add Reply' }}</button></span>
                <span class='reply float-right hide-reply'></span>
            </div>

            <div v-if="addingReply" class="comment-box thumb-border">
                <div class="media-object stack-for-small">
                    <div class="media-object-section comment-img text-center">
                        <div class="comment-box-img">
                            <img src="images/post-author-post.png" alt="comment">
                        </div>
                    </div>
                    <div class="media-object-section comment-textarea">
                        <div method="post" style="width: 33.6rem;">
                            <input type="text" style="font-size: 0.9em" placeholder="Add a replies here...">
                            <button>
                                <small>Add Reply</small>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!--sub comment-->
            <replies :comment="comment"></replies>
            <!-- end sub comment -->

        </div>
    </div>
</template>

<script>
import Replies from './replies.vue'

export default {
    props: {
        comment: {
            required: true,
            default: () => ({})
        }
    },

    data() {
        return {
            addingReply: false
        }
    },

    components: {
        Replies
    }
}
</script>