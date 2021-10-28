<template>
    <div v-if="getIdVideo[2] && getIdVideo[3]" style="padding-bottom: 10px;">
        <video id="my-video" class="video-js vjs-fluid vjs-default-skin vjs-big-play-centered" :poster="poster" autoplay controls preload="auto" style="width: 100%; height: 100%" data-setup='{ "playbackRates": [0.25, 0.5, 1, 1.5, 2] }'>
        </video>
    </div>
    <div v-else style="padding-bottom: 10px;">
        <video id="my-video" class="video-js vjs-fluid vjs-default-skin vjs-big-play-centered" :poster="poster" autoplay controls preload="auto" style="width: 100%; height: 100%" data-setup='{ "playbackRates": [0.25, 0.5, 1, 1.5, 2] }'>
            <source :src='link' type="application/x-mpegURL">
        </video>
    </div>
</template>

<script>
import videojs from "video.js"
import videojsplaylist from "videojs-playlist"
import videojsQuality from "videojs-hls-quality-selector"
import videojsContribQuality from "videojs-contrib-quality-levels"
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
        videojsplaylist,
        videojsQuality,
        videojsContribQuality
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
        this.playPlaylist
    },

    beforeDestroy() {
        if (this.player) {
            this.player.dispose()
        }
    },

    computed: {
        playPlaylist() {
            this.player = videojs('my-video')

            let qualityLevels = this.player.qualityLevels()

            qualityLevels.on('addqualitylevel', function(event) {
                let qualityLevel = event.qualityLevel
                
                if (qualityLevel.height > 720) {
                    qualityLevel.enabled = true
                } else {
                    qualityLevel.enabled = false
                }
            }) 

            this.player = videojs('my-video', this.options, function onPlayerReady() {
                this.hlsQualitySelector()
            });
            
            qualityLevels.on('change', function() {
                // console.log('Quality Level changed!')
                // console.log('New level:', qualityLevels[qualityLevels.selectedIndex])
            })

            if (this.getIdVideo[2] && this.getIdVideo[3]) {
                
                // Previous button
                var button = this.player.addChild('button')
                this.player.controlBar.el().insertBefore(button.el(), this.player.controlBar.el().firstChild)
                this.player.controlBar.el().childNodes[0].innerHTML = '<i class="fa fa-step-backward" style="font-size: 13px;"></i>'
                this.player.controlBar.el().childNodes[0].onclick = () => {
                    this.player.playlist.previous(this.playlist)
                }

                // Next button
                var button2 = this.player.addChild('button')
                this.player.controlBar.el().insertBefore(button2.el(), this.player.controlBar.el().childNodes[2])
                this.player.controlBar.el().childNodes[2].innerHTML = '<i class="fa fa-step-forward" style="font-size: 13px;"></i>'
                this.player.controlBar.el().childNodes[2].onclick = () => {
                    this.player.playlist.next(this.playlist)
                }

                var index = 0
                for (var i = 0; i < this.playlist.length; i++) {
                    var arrayPath = this.playlist[i].sources[0].src.split("/")

                    if (this.getIdVideo[1] === arrayPath[5]) {
                        index = i
                    }
                }

                this.player.playlist(this.playlist, index)
                this.player.playlist.autoadvance(0)
            }

            var viewLogged = false

            // Math.floor lam` tron xuong ex: 5.4 -> 5
            // Math.ceil lam` tron` len ex: 5.4 -> 6

            this.player.on('timeupdate', function() {
                var percentagePlayed = Math.ceil(this.currentTime() / this.duration() * 100)

                if (percentagePlayed == 95 && !viewLogged) {
                    axios.post('/videos/' + window.CURRENT_VIDEO)
                    viewLogged = true
                }
            })
        },
        getIdVideo() {
            var path = this.requestPath.split("/")
            return path
        },
    }
}
</script>