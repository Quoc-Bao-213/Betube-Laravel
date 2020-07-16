@extends('betube.layout.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/jquery.kyco.easyshare.css') }}">
@endsection

@section('content')
<section id="breadcrumb">
    <div class="row">
        <div class="large-12 columns">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home"></i><a href="{{ route('home') }}">Home</a></li>
                    <li>
                        <span class="show-for-sr">Current: </span> submit post
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section><!--end breadcrumbs-->

<!-- profile top section -->
@include('betube.partials.top-profile')
<!-- End profile top section -->

<div class="row">
    
    @include('betube.partials.sidebar')

    <!-- right side content area -->
    <div class="large-8 columns profile-inner">
        <!-- profile settings -->
        <section class="submit-post">
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="heading">
                        <i class="fa fa-pencil-square-o"></i>
                        <h4>Add new video Post</h4>
                    </div>
                    <div class="row">
                        <channel-uploads :channel="{{ $user }}" inline-template>
                            <div class="large-12 columns" v-if="!isSelected">
                                <div class="post-category">
                                    <label>Choose Video Type:
                                        <select v-model="videoType">
                                            <option value="" disabled selected>--- Choose Video Type ---</option>
                                            @foreach($videoType as $videotype)
                                            <option value="{{ $videotype->id }}">
                                                {{ $videotype->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                                <h6 class="borderBottom">Choose Video:</h6>
                                <div class="upload-video">
                                    <label for="videoUpload" class="button">Upload File</label>
                                    <input @change="upload" multiple type="file" id="videoUpload" ref="videos" class="show-for-sr">             
                                    <span>No file chosen</span>
                                </div>
                                <p class="extraMargin" style="margin-bottom: 1rem">Supported Video Formats: mp4.</p>
                            </div>
                            
                            <div v-else class="large-12 columns">
                                <h6 class="borderBottom">Video Processing</h6>

                                <div v-for="video in videos">
                                    <div class="progress" style="margin-bottom: 15px">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" :style="{ width: `${video.percentage || progress[video.name]}%` }" aria-valuerow="50" aria-valuemin="0" aria-valuemax="100">
                                            @{{ video.percentage ? video.percentage === 100 ? 'Video Processing Completed.' : 'Processing' : 'Uploading' }}
                                        </div>
                                    </div>
                                    <div class="" style="display:flex; justify-content:space-between; margin-bottom: 25px">
                                        <div v-if="!video.thumbnail" class="" style="display: flex; justify-content: center; align-items: center; height: 180px; width: 300px; color: white; font-size: 18px;background: lightgray">
                                            Loading Thumbnail...
                                        </div>
                                        <img v-else :src="video.thumbnail" style="height: 135px; width: 290px" alt="">
                                        <div class="" style="text-align:left; width:60%;">                                    
                                            <h4 style="width:100%; margin-bottom:0">@{{ video.title || video.name }}</h4>
                                            <p style="font-size: 0.9em; margin-top: 10px; width:100%;" v-if="video.percentage && video.percentage === 100">
                                                <a :href="`/update-video/${video.id}/videos`" target="_blank" style="font-size: 2.3em; color: #6c6c6c; margin-right: 30px;"><i class="fa fa-pencil"></i></a>
                                                <a :href="`/videos/${video.id}`" target="_blank" style="font-size: 2.5em; color: #6c6c6c"><i class="fa fa-youtube-play"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </channel-uploads>
                    </div>
                </div>
            </div>
        </section><!-- End profile settings -->
    </div><!-- end left side content area -->
</div>
@endsection