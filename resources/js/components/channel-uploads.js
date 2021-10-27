const { split } = require("lodash")

Vue.component('channel-uploads', {
    props: {
        channel: {
            type: Object,
            required: true,
            default: () => ({})
        }
    },

    data: () => ({
        isSelected: false,
        videos: [],
        progress: {},
        uploads: [],
        intervals: {},
        videoType: ''
    }),

    methods: {
        upload() {
            this.isSelected = true
            this.videos = Array.from(this.$refs.videos.files)
            
            const uploaders = this.videos.map(video => {
                const form = new FormData()
                
                this.progress[video.name] = 0
                
                var nameVideo = split(video.name, '.mp4')

                form.append('video', video)
                form.append('title', nameVideo[0])
                form.append('video_type_id', this.videoType)
              
                return axios.post(`/upload-video/${this.channel.id}/videos`, form, {
                    onUploadProgress: (event) => {  
                        this.progress[video.name] = Math.ceil((event.loaded / event.total) * 100) 
                        this.$forceUpdate()
                    } 
                }).then(({ data }) => {
                    this.uploads = [
                        ...this.uploads,
                        data
                    ]
                })
            })

            axios.all(uploaders).then(() => {
                this.videos = this.uploads

                this.videos.forEach(video => {
                    this.intervals[video.id] = setInterval(() => {
                        axios.get(`/videos/${video.id}`).then(({ data }) => {
                            
                            if(data.percentage === 100) {
                                clearInterval(this.intervals[video.id])
                                // console.log('upload ok')
                            }

                            this.videos = this.videos.map(v => {
                                if (v.id === data.id)
                                    return data
                                return v
                            })
                        })
                    }, 3000)
                })
            })
        },
    }
})