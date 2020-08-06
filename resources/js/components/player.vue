<template>
    <div v-if="getIdVideo[2] && getIdVideo[3]" style="height: 370px; padding-bottom: 10px;">
        <video id="my-video" class="video-js vjs-fluid vjs-default-skin vjs-big-play-centered" controls :poster="poster" autoplay controls preload="auto" style="width: 100%; height: 100%" data-setup='{ "aspectRatio":"640:267", "playbackRates": [0.25, 0.5, 1, 1.5, 2] }'>
        </video>
    </div>
    <div v-else style="height: 370px; padding-bottom: 10px;">
        <video id="my-video" class="video-js vjs-fluid vjs-default-skin vjs-big-play-centered" controls :poster="poster" autoplay controls preload="auto" style="width: 100%; height: 100%" data-setup='{ "aspectRatio":"640:267", "playbackRates": [0.25, 0.5, 1, 1.5, 2] }'>
            <source :src='link' type="application/x-mpegURL">
        </video>
    </div>
</template>

<script>
import videojs from "video.js"
import videojsplaylist from "videojs-playlist"
import EventBus from './event-bus'

export default {
    props: {
        link: {
            required: true,
            default: ''
        },
        poster: {
            required: true,
            default: ''
        },
        requestPath: {
            required: true,
            default: ''
        },
    },

    components: {
        videojs,
        videojsplaylist
    },
    
    data() {
        return {
            playlist: [{}],
            player: null,
            IdCurrentVideo: '',
        }
    },

    created() {
        EventBus.$on('inputData', payLoad => {
            this.playlist = payLoad
        })
    },

    mounted() {
        this.test
    },

    beforeDestroy() {
        if (this.player) {
            this.player.dispose()
        }
    },

    computed: {
        test() {
            if (this.getIdVideo[2] && this.getIdVideo[3]) {
                this.player = videojs('my-video')

                // next and previous button
                // var button = this.player.addChild('button')
                // this.player.controlBar.el().insertBefore(button.el(), this.player.controlBar.el().firstChild.nextSibling)
                // console.log(button)
                
                var index = 0
                for (var i = 0; i < this.playlist.length; i++) {
                    var arrayPath = this.playlist[i].sources[0].src.split("/")

                    if (this.getIdVideo[1] === arrayPath[5]) {
                        index = i
                    }
                }

                this.player.playlist(this.playlist, index)
                this.player.playlist.autoadvance(0)
                console.log(this.player)
            }
        },
        getIdVideo() {
            var path = this.requestPath.split("/")
            return path
        },
    }
}
</script>