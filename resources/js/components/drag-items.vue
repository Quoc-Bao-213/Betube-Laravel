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
            <div v-for="(item, index) in playlistDetail" :key="item.id" class="items" :class="{ 'active-item': index === indexOf }">
                <a :href="'/videos/' + item.videos.id + '/list/' + item.playlist_id">
                    <div v-if="index === indexOf"><span style="padding-left: 5px; padding-right: 5px;">▶</span></div>
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
import videojs from "video.js"
import draggable from "vuedraggable"
import EventBus from './event-bus'

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
    },

    data() {
        return {
            playlistDetail: this.defaultPlaylistDetail,
            isActive: false,
            playlists: [],
            indexOf: 0,
            // proxyUrl: process.env.MIX_APP_URL,
        }
    },

    created() {
        this.getDataPlaylist
    },

    mounted() {
        var player = videojs('my-video')

        player.on('play', () => {
            this.indexOf = player.playlist.currentItem()
            document.getElementById("current_video_title_h4").textContent =  this.playlistDetail[this.indexOf].videos.title
            document.getElementById("total_views").innerHTML = '<i class="fa fa-eye"></i>' + this.playlistDetail[this.indexOf].videos.total_views
            document.getElementById("total_comments").innerHTML = '<i class="fa fa-commenting"></i>' + this.playlistDetail[this.indexOf].videos.comments.length
            document.getElementById("channel_name").textContent = this.playlistDetail[this.indexOf].videos.user.channel_name
            document.getElementById("channel_name").href = 'http://pc-baota.s3corp.com.vn/about-me/' + this.playlistDetail[this.indexOf].videos.user.id
            document.getElementById("avatar_channel").href = 'http://pc-baota.s3corp.com.vn/about-me/' + this.playlistDetail[this.indexOf].videos.user.id
            document.getElementById("avatar_channel").innerHTML = '<img src="' + this.playlistDetail[this.indexOf].videos.user.avatar + '" alt="post">'
        }); 
    },

    computed: {
        auth() {
            return __auth();
        },
        getIndexVideo() {
            var index = 0;
            for (var i = 0; i < this.playlistDetail.length; i++) {
                if (i === this.indexOf)
                    index = i
            }
            return index + 1;
        },
        getDataPlaylist() {
            for (var i = 0; i < this.playlistDetail.length; i++) {
                this.playlists.push({
                    sources: [{
                        src: 'http://pc-baota.s3corp.com.vn/storage/videos/' + this.playlistDetail[i].videos.id + '/' + this.playlistDetail[i].videos.id + '.m3u8',
                        type: 'application/x-mpegURL'
                    }],
                    poster: this.playlistDetail[i].videos.thumbnail,
                })
            }

            EventBus.$emit('inputData', this.playlists)
        },
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
    }
}
</script>