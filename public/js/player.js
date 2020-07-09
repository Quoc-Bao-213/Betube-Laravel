var player = videojs('my-video')

// require('videojs-hls-quality-selector');

// player.hlsQualitySelector({
//     displayCurrentQuality: true
// });

var viewLogged = false

player.on('timeupdate', function() {
    // console.log(player.currentTime())
    var percentagePlayed = Math.ceil(player.currentTime() / player.duration() * 100)

    if (percentagePlayed > 5 && !viewLogged) {
        // console.log(percentagePlayed)
        axios.put('/videos/' + window.CURRENT_VIDEO)
        viewLogged = true
    }
})