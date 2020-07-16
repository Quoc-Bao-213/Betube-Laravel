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
            // console.log(this.$refs)
            this.isSelected = true
            this.videos = Array.from(this.$refs.videos.files)
            
            // console.log(this.videos)
            // return 
            const uploaders = this.videos.map(video => {
                const form = new FormData()
                
                this.progress[video.name] = 0
  
                form.append('video', video)
                form.append('title', video.name)
                form.append('video_type_id', this.videoType)
              
                return axios.post(`/upload-video/${this.channel.id}/videos`, form, {
                    onUploadProgress: (event) => { 
                        // console.log(event)
                        this.progress[video.name] = Math.ceil((event.loaded / event.total) * 100) 
                        this.$forceUpdate()
                    } 
                }).then(({ data }) => {

                    this.uploads = [
                        ...this.uploads,
                        data
                    ]
                    // console.log(this.uploads)
                })
            })

            axios.all(uploaders).then(() => {
                this.videos = this.uploads

                this.videos.forEach(video => {
                    this.intervals[video.id] = setInterval(() => {
                        axios.get(`/videos/${video.id}`).then(({ data }) => {
                            
                            if(data.percentage === 100) {
                                clearInterval(this.intervals[video.id])
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