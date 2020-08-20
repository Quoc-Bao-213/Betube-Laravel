<template>
<div class="row">
    <!-- left sidebar -->
    <div v-if="thumbnailPlaylist" class="large-4 columns" style="margin-top: 30px">
        <aside class="secBg sidebar">
            <div class="row">
                <!-- profile overview -->
                <div class="large-12 columns">
                    <div class="widgetBox">
                        <div class="playlist-thumb">
                            <a :href="linkPlaylist">
                                <img :src="newThumbnailPlaylist" width="320" height="230" alt="thumbnail">
                                <div class="text-center playlist-thumb-text"><i style="margin-right: 10px" class="fa fa-play"></i>Play all</div>
                            </a>
                        </div>
                        <div v-if="!isEditTitle" style="display:flex; justify-content: space-between; margin-top: 10px; margin-bottom: 10px">
                            <span>{{ playlist.name }}</span> 
                            <i style="cursor: pointer; padding-top: 4px;"  @click="isEditTitle = !isEditTitle" class="fa fa-pencil"></i>
                        </div>
                        <div v-if="isEditTitle">
                            <input style="margin-top: 20px" type="text" v-model="inputTitle" placeholder="Title">
                            <div style="float:right; font-size: 15px">
                                <span @click="isEditTitle = false" style="cursor: pointer">CANCEL</span>
                                <span @click="saveTitle" style="margin-left: 20px; cursor: pointer">SAVE</span>
                            </div> <br>
                        </div>
                        <p class="playlist-thumb count-video-playlist">
                            <span>{{ playlistDetails.length }} videos •</span>
                            <span>Updated Today</span> 
                        </p>
                        <p class="playlist-thumb icon-video-playlist">
                            <i style="cursor: pointer; margin-right: 10px;" class="fa fa-share"></i>
                            <i style="cursor: pointer;" data-open="exampleModal2" class="fa fa-trash-o"></i>
                        </p>  
                        
                        <div class="reveal" id="exampleModal2" data-reveal style="border-radius: 5px">
                            <p class="text-center"><i class="fa fa-exclamation-triangle" style="font-size: 84px; color:#e96969"></i></p>
                            <h3 class="text-center">Deleted Playlist</h3>
                            <p style="font-size:16px; margin-bottom: 5px;" class="text-center">Are you sure you want to delete {{ playlist.name }}?</p>
                            <p style="font-size:14px" class="text-center">Note: Deleting playlists is a permanent action and cannot be undone.</p>
                            <a href="/" @click="deletePlaylist" class="button" style="margin-left: 10rem; padding: 15px 10px; text-transform: none">Yes, deleted it!</a>
                            <button class="button" data-close style=" padding: 15px 18px; text-transform: none">No, cancel!</button>
                            <button class="close-button" data-close aria-label="Close reveal" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <div v-if="!isEditDescription" style="display:flex; justify-content: space-between; margin-top: 10px; margin-bottom: 10px">
                            <span v-if="defaultPlaylist.description">{{ playlist.description }}</span>
                            <span v-else>No Description</span>
                            <i style="cursor: pointer; padding-top: 4px;"  @click="isEditDescription = !isEditDescription" class="fa fa-pencil"></i>
                        </div>
                        <div v-if="isEditDescription">
                            <input style="margin-top: 20px" v-model="inputDescription" type="text"  placeholder="Description">
                            <div style="float:right; font-size: 15px">
                                <span @click="isEditDescription = false" style="cursor: pointer">CANCEL</span>
                                <span @click="saveDescription" style="margin-left: 20px; cursor: pointer">SAVE</span>
                            </div> <br>
                        </div> <hr>
                        <div style="margin-top:15px;">
                            <div class="thumbnail author-single-post">
                                <a :href="'/about-me/' + user.id">
                                    <img :src="userAvatar" width="50" height="50" alt="post">
                                </a>
                            </div>
                            <a :href="'/about-me/' + user.id" style="margin-left: 10px;">{{ user.channel_name }}</a>
                        </div>
                    </div>
                </div><!-- End profile overview -->
            </div>
        </aside>
    </div>

    <div v-else class="large-4 columns" style="margin-top: 30px">
        <aside class="secBg sidebar">
            <div class="row">
                <!-- profile overview -->
                <div class="large-12 columns">
                    <div class="widgetBox">
                        <div class="playlist-thumb">
                            <a href="javascript:void(0)">
                                <img src="http://localhost:8000/../images/playlist.jpg" width="320" height="230" alt="thumbnail">
                                <div class="text-center playlist-thumb-text"><i style="margin-right: 10px" class="fa fa-play"></i>Play all</div>
                            </a>
                        </div>
                        <div v-if="!isEditTitle" style="display:flex; justify-content: space-between; margin-top: 10px; margin-bottom: 10px">
                            <span>{{ playlist.name }}</span> 
                            <i style="cursor: pointer; padding-top: 4px;"  @click="isEditTitle = !isEditTitle" class="fa fa-pencil"></i>
                        </div>
                        <div v-if="isEditTitle">
                            <input style="margin-top: 20px" type="text" v-model="inputTitle" placeholder="Title">
                            <div style="float:right; font-size: 15px">
                                <span @click="isEditTitle = false" style="cursor: pointer">CANCEL</span>
                                <span @click="saveTitle" style="margin-left: 20px; cursor: pointer">SAVE</span>
                            </div> <br>
                        </div>
                        <p class="playlist-thumb count-video-playlist">
                            <span>{{ playlistDetails.length }} videos •</span>
                            <span>Updated Today</span> 
                        </p>
                        <p class="playlist-thumb icon-video-playlist">
                            <i style="cursor: pointer; margin-right: 10px;" class="fa fa-share"></i>
                            <i style="cursor: pointer;" data-open="exampleModal2" class="fa fa-trash-o"></i>
                        </p>  
                        
                        <div class="reveal" id="exampleModal2" data-reveal style="border-radius: 5px">
                            <p class="text-center"><i class="fa fa-exclamation-triangle" style="font-size: 84px; color:#e96969"></i></p>
                            <h3 class="text-center">Deleted Playlist</h3>
                            <p style="font-size:16px; margin-bottom: 5px;" class="text-center">Are you sure you want to delete {{ playlist.name }}?</p>
                            <p style="font-size:14px" class="text-center">Note: Deleting playlists is a permanent action and cannot be undone.</p>
                            <a href="/" @click="deletePlaylist" class="button" style="margin-left: 10rem; padding: 15px 10px; text-transform: none">Yes, deleted it!</a>
                            <button class="button" data-close style=" padding: 15px 18px; text-transform: none">No, cancel!</button>
                            <button class="close-button" data-close aria-label="Close reveal" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <div v-if="!isEditDescription" style="display:flex; justify-content: space-between; margin-top: 10px; margin-bottom: 10px">
                            <span v-if="defaultPlaylist.description">{{ playlist.description }}</span>
                            <span v-else>No Description</span>
                            <i style="cursor: pointer; padding-top: 4px;"  @click="isEditDescription = !isEditDescription" class="fa fa-pencil"></i>
                        </div>
                        <div v-if="isEditDescription">
                            <input style="margin-top: 20px" v-model="inputDescription" type="text"  placeholder="Description">
                            <div style="float:right; font-size: 15px">
                                <span @click="isEditDescription = false" style="cursor: pointer">CANCEL</span>
                                <span @click="saveDescription" style="margin-left: 20px; cursor: pointer">SAVE</span>
                            </div> <br>
                        </div> <hr>
                        <div style="margin-top:15px;">
                            <div class="thumbnail author-single-post">
                                <a :href="'/about-me/' + user.id">
                                    <img :src="userAvatar" width="50" height="50" alt="post">
                                </a>
                            </div>
                            <a :href="'/about-me/' + user.id" style="margin-left: 10px;">{{ user.channel_name }}</a>
                        </div>
                    </div>
                </div><!-- End profile overview -->
            </div>
        </aside>
    </div>

     <!-- right side content area -->
    <div class="large-8 columns profile-inner" style="margin-top: 30px">
        <!-- single post description -->
        <section class="profile-videos">
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="heading">
                        <i class="fa fa-list-ul"></i>
                        <h4>Edit Playlist</h4>
                    </div>

                    <draggable :list="playlistDetails" :options="{animation:200, handle:'.move-video'}" :element="'div'" @change="update">
                        <div v-for="(item, index) in playlistDetails" style="height: 102px;" :key="item.id" class="profile-video">
                                <div class="media-object stack-for-small">
                                    <div class="media-object-section media-img-content move-video">
                                        <div style="border-right: 1px solid #ececec; height: 100px; width: 35px" class="abc">
                                            <i style="display: block; font-size: 17px; padding-top: 41px; padding-left: 10px; color: #8e8e8e" class="fa fa-bars"></i>
                                        </div>
                                    </div>
                                    <div class="media-object-section media-img-content">
                                        <div class="video-img" style="height: 100px;">
                                            <img :src="item.videos.thumbnail" alt="video thumbnail">
                                        </div>
                                    </div>
                                    <div class="media-object-section media-video-content" style="width: 100%;">
                                        <div style="border-bottom: none; display:flex; justify-content: space-between;" class="video-content">
                                            <div>
                                                <h5><a :href="'/videos/' + item.videos.id + '/list/' + item.playlist_id">{{ item.videos.title }}</a></h5>
                                                <p>{{ item.videos.user.channel_name }}</p>
                                            </div>
                                            <div class="trash" @click="deleteItemVideo(item.id)" ><i class="fa fa-trash-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </draggable>

                 </div>
            </div>
        </section><!-- End single post description -->
    </div><!-- end left side content area -->
</div>
</template>

<script>
import draggable from "vuedraggable"

export default {
    components: {
        draggable
    },

    props: {
        thumbnailPlaylist: {
            required: true,
            default: '',
        },
        defaultPlaylist: {
            required: true,
            default: () => {}
        },
        playlistDetail: {
            required: true,
            default: () => []
        },
        user: {
            required: true,
            default: () => {}
        },
        userAvatar: {
            required: true,
            default: ''
        }
    },

    data() {
        return {
            isEditTitle: false,
            isEditDescription: false,
            inputDescription: this.defaultPlaylist.description,
            inputTitle: this.defaultPlaylist.name,
            playlist: this.defaultPlaylist,
            playlistDetails: this.playlistDetail,
            newThumbnailPlaylist: this.thumbnailPlaylist,
            linkPlaylist: ''
        }
    },

    mounted() {
        if (this.playlistDetails[0])
            this.linkPlaylist = '/videos/' + this.playlistDetails[0].video_id + '/list/' + this.defaultPlaylist.id
    },

    methods: {
        saveTitle() {
            if (!this.inputTitle) return

            axios.post(`/edit-playlist/${this.playlist.id}`, {
                name: this.inputTitle
            }).then(() => {
                    this.isEditTitle = false
                    this.playlist.name = this.inputTitle
                })
        },
        saveDescription() {
            if (!this.inputDescription) return

            axios.post(`/edit-playlist/${this.playlist.id}`, {
                description: this.inputDescription
            }).then(() => {
                    this.isEditDescription = false
                    this.playlist.description = this.inputDescription
                })
        },
        deletePlaylist() {
            axios.post(`/playlist/${this.defaultPlaylist.id}/delete`)
                .then(() => {
                    console.log('Delete Ok')
                })
        },
        update() {
            axios.put('/playlist-detail/update', {
                playlistDetails: this.playlistDetails
            }).then((response) => {
                this.newThumbnailPlaylist = this.playlistDetails[0].videos.thumbnail
                console.log('Update Success')
            })
        },
        deleteItemVideo(id){
            axios.post(`/playlist-detail/${id}`)
            .then(() => {
                this.playlistDetails = this.playlistDetails.filter(item => item.id !== id)
                if (this.playlistDetails[0])
                    this.newThumbnailPlaylist = this.playlistDetails[0].videos.thumbnail
                else
                    this.newThumbnailPlaylist = 'http://localhost:8000/../images/playlist.jpg'
                console.log('Delete Ok')
            })
        }
    }
}
</script>

<style scoped>
    .move-video {
        cursor: grab; 
    }
    .trash{
        display:none;
        cursor:pointer;
    }
    .trash i{
        padding-top: 41px;
        padding-right: 20px;
        font-size: 18px;
        color: rgb(142, 142, 142);
    }
    .profile-video:hover {
        background: rgb(240, 240, 240);  
    }

    .profile-video:hover .trash {
        display:block;
    }

    .move-video:hover .abc {
        box-shadow: 0px 0px 5px rgb(150, 150, 150);;
    }
</style>