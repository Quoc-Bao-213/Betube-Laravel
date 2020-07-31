var player = videojs('my-video')

// require('videojs-hls-quality-selector');

// player.hlsQualitySelector({
//     displayCurrentQuality: true
// });

var viewLogged = false

player.on('timeupdate', function() {
    var percentagePlayed = Math.ceil(player.currentTime() / player.duration() * 100)

    var curmins = Math.floor(player.currentTime() / 60);
    var cursecs = Math.floor(player.currentTime() - curmins * 60);
    var durmins = Math.floor(player.duration() / 60);
    var dursecs = Math.floor(player.duration() - durmins * 60);
    
    if(cursecs < 10){ cursecs = "0" + cursecs; }
 	if(dursecs < 10){ dursecs = "0" + dursecs; }
 	if(curmins < 10){ curmins = "0" + curmins; }
    if(durmins < 10){ durmins = "0" + durmins; }
    // console.log(curmins + ":" + cursecs)
    // console.log(durmins + ":" + dursecs)
    var durationVideo = durmins + ":" + dursecs

    if (percentagePlayed > 5 && !viewLogged) {
        axios.post('/videos/' + window.CURRENT_VIDEO, {
            duration: durationVideo
        })
        viewLogged = true
    }
})