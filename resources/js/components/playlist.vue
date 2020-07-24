<template>
    <form v-if="auth" action="javascript:void(0)">
        <button data-open="exampleModal2" name="fav"><i class="fa fa-heart"></i>Add to</button>
        
    <!-- This is the first modal -->
        <div class="reveal" id="exampleModal2" data-reveal style="border-radius: 5px; width: 20%">
            <h5 class="text-center">Add to...</h5> <hr>
            <div style="max-height: 250px; overflow: auto">
                <div v-for="playlist in playlists.data">
                    <input type="checkbox" 
                        style="display:inline-block" 
                        :id="playlist.name" 
                        :value="playlist.name" 
                        @change="addtoPlaylist(playlist.id)" 
                        v-model="checkedNames" />
                    <label :for="playlist.name" style="font-size:16px">{{ playlist.name }}</label>
                </div>
            </div> <hr>
            <button href="javascipt:void(0)" @click="addingPlaylist = !addingPlaylist" class="button" style="text-transform: inherit; margin-left: 1.2rem; padding: 10px;"><i class="fa fa-plus" style="margin-right: 5px;"></i>Create New Playlist</button>
            <div style="margin-top: 1rem;" v-if="addingPlaylist">
                <input style="display: inline-block; width: 70%; outline: none;" v-model="namePlaylist" type="input" name="name" placeholder="playlist name"/>
                <button style="padding: 5px 14px; text-transform: initial; margin-bottom: 1px;" class="button" @click="createPlaylist">Add</button>
            </div>
            <button class="close-button" data-close aria-label="Close reveal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </form>
</template>

<script>
export default {
    props: {
        user: {
            type: Object,
            default: () => ({})
        },
        video: {
            required: true,
            default: () => ({})
        },
        playlistDetail:{
            required: true,
            default: () => ([])
        }
    },

    data() {
        return {
            playlists: {
                data: []
            },
            addingPlaylist: false,
            namePlaylist: '',
            checkedNames: [],
            playlistDetails: this.playlistDetail
        }
    },

     mounted() {
        this.fetchPlaylists()
    },

    computed: {
        auth() {
            return __auth()
        }
    },

    methods: {
        fetchPlaylists() {  
            if (! this.auth) return  

            axios.get(`/user/${this.user.id}/playlist`)
                .then(({ data }) => {
                    this.playlists = {
                        ...data,
                        data: [
                            ...this.playlists.data,
                            ...data.data
                        ]
                    }

                    for (let i = 0; i < this.playlistDetail.length; i++) {
                        if (this.playlistDetail[i].video_id != this.video.id) {
                            continue
                        } else {
                            var findPlaylist = this.playlists.data.find(p => p.id === this.playlistDetail[i].playlist_id && p.user_id === this.auth.id)
                            if (findPlaylist === undefined) {
                                continue
                            } else {
                                this.checkedNames.push(findPlaylist.name)
                            }
                        }
                    }
                })
        },

        createPlaylist() {
            if (!this.namePlaylist) return
    
            axios.post(`/playlist/create`, {
                name: this.namePlaylist,
            }).then(({ data }) => {
                this.namePlaylist = ''
                this.playlists = {
                    ...this.playlists,
                    data: [
                        data,
                        ...this.playlists.data
                    ]
                }

                axios.post(`/playlist/${this.playlists.data[0].id}/video/${this.video.id}`)
                    .then(({ data }) => {
                        this.checkedNames.push(this.playlists.data[0].name)
                        this.playlistDetails = [
                            ...this.playlistDetails,
                            data
                        ]
                    })

                this.addingPlaylist = false
            })
        },

        async addtoPlaylist(id) { 
            var temp = ''
            for (var i = 0; i < this.playlistDetails.length; i++) {
                if (id === this.playlistDetails[i].playlist_id) {
                    temp = this.playlistDetails[i].id
                    break
                }
            }

            if (!event.target.checked) {
                await axios.post(`/playlist-detail/${temp}`)
                    .then(() => {
                        this.playlistDetails = this.playlistDetails.filter(p => p.id !== temp)
                        console.log('delete success')
                    })
            } else {
                await axios.post(`/playlist/${id}/video/${this.video.id}`)
                    .then(({ data }) => {
                        this.playlistDetails = [
                            ...this.playlistDetails,
                            data
                        ]
                        console.log("add to playlist")
                    })
            }
        }
    }
}
</script>