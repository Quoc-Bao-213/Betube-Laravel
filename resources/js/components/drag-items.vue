<template>
<div class="widgetContent">
    <div class="video-box thumb-border">
        <div class="header-playlist">
            <div class="header-content">
                <div class="header-top-playlist">
                    <div class="header-description">
                        <h3 class="header-title">
                            <a href="#">{{ playlist.name }}</a>
                        </h3>
                        <div class="publisher-container">
                            <span>{{ auth.channel_name }}</span>
                            <span> - {{ getIndexVideo }} / {{ playlistDetail.length }}</span>
                        </div>
                    </div>
                    <div @click="isActive = !isActive" v-if="!isActive" style="cursor: pointer"><i class="fa fa-chevron-up"></i></div>
                    <div @click="isActive = !isActive" v-else style="cursor: pointer"><i class="fa fa-chevron-down"></i></div>
                </div>
            </div>
        </div>
        <draggable :list="playlistDetail" :options="{animation:200}" @change="update" :element="'div'" class="item-container" :class="{ 'none-item': isActive }">
            <div v-for="(item, index) in playlistDetail" :key="item.id" class="items" :class="{ 'active-item': item.video_id === currentVideo }">
                <a :href="'/videos/' + item.videos.id + '/list/' + item.playlist_id">
                    <div v-if="item.video_id === currentVideo"><span style="padding-left: 5px; padding-right: 5px;">▶</span></div>
                    <div v-else><span style="padding-left: 5px; padding-right: 5px;">{{ index + 1 }}</span></div>
                    <img :src="item.videos.thumbnail" style="width: 100px; height: 56px" alt="thumbnail-video">
                    <div style="margin-left: 10px; height: 56px; width: 50%;">
                        <span class="title-video">{{ item.videos.title }}</span>
                        <span class="channel-name">{{ item.videos.user.channel_name }}</span>
                    </div>
                </a>
                <div @click="deleteItemVideo(item.id)" class="trash"><i class="fa fa-trash-o"></i></div>
            </div>
        </draggable>          
    </div>
</div>
</template>

<script>
import draggable from "vuedraggable"

export default {
    components: {
        draggable
    },

    props: {
        playlist: {
            required: true,
            default: () => ({})
        },
        defaultPlaylistDetail: {
            required: true,
            default: () => ([])
        },
        currentVideo: {
            required: true,
            default: ''
        }
    },

    data() {
        return {
            playlistDetail: this.defaultPlaylistDetail,
            isActive: false
        }
    },

    computed: {
        auth() {
            return __auth();
        },
        getIndexVideo() {
            var index = 1;
            for (var i = 0; i < this.playlistDetail.length; i++) {
                if (this.playlistDetail[i].video_id === this.currentVideo)
                    index = i
            }
            return index + 1;
        }
    },

    methods: {
        update() {
            axios.put('/playlist-detail/update', {
                playlistDetails: this.playlistDetail
            }).then((response) => {
                // notify success
            })
        },
        deleteItemVideo(id){
            axios.post(`/playlist-detail/${id}`)
            .then(() => {
                this.playlistDetail = this.playlistDetail.filter(item => item.id !== id)
                console.log('Delete Ok')
            })
        },
        expand() {

        }
    }
}
</script>