@extends('betube.layout.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/jquery.kyco.easyshare.css') }}">
@endsection

@section('content')
<section id="breadcrumb" class="breadcrumb-video-2">
    <div class="row">
        <div class="large-12 columns">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home"></i><a href="{{ route('home') }}">Home</a></li>
                    <li>
                        <span class="show-for-sr">Current: </span> video
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section><!--end breadcrumbs-->

<div class="row">
    <!-- left side content area -->
    <div class="large-8 columns">
        <!--single inner video-->
        <section class="inner-video">
            <div class="row secBg">
                <div class="large-12 columns inner-flex-video">
                    <div style="height: 370px; padding-bottom: 10px;">
                        <video id="my-video" class="video-js vjs-big-play-centered" controls poster="{{ asset($video->thumbnail) }}" controls preload="auto" style="width: 100%; height: 100%" data-setup='{ "aspectRatio":"640:267", "playbackRates": [0.25, 0.5, 1, 1.5, 2] }'>
                            <source src='{{ asset(Storage::url("videos/{$video->id}/{$video->id}.m3u8")) }}' type="application/x-mpegURL">
                        </video>
                    </div>
                </div>
            </div>
        </section>
        <!-- single post stats -->
        <section class="SinglePostStats">
            <!-- newest video -->
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="media-object stack-for-small">
                        <div class="media-object-section">
                            <div class="author-img-sec">
                                <div class="thumbnail author-single-post">
                                    <a href="{{ route('about-me', $video->user->id) }}"><img src="{{ $video->user->avatar() }}" alt="post"></a>
                                </div>
                                <p class="text-center"><a href="{{ route('about-me', $video->user->id) }}">{{ $video->user->channel_name }}</a></p>
                            </div>
                        </div>
                        <div class="media-object-section object-second">
                            <div class="author-des clearfix">
                                <div class="post-title">
                                    <h4>{{ $video->title }}</h4>
                                    <p>
                                        <span><i class="fa fa-clock-o"></i>{{ $video->created_at->toFormattedDateString() }}</span>
                                        <span><i class="fa fa-eye"></i>{{ $video->total_views }}</span>
                                        <span><i class="fa fa-commenting"></i>8</span>
                                        @if ($video->hashtag)
                                        <span>
                                            <i class="fa fa-hashtag"></i>
                                            @php
                                                $arrayHashTags = explode(' ', $video->hashtag);
                                                $hashTag = "";
                                                
                                                foreach($arrayHashTags as $arrayHashTag){
                                                    $hashTag .= '<a href="#">'.$arrayHashTag.'</a> ';
                                                }
                                            @endphp
                                            {!! $hashTag !!}
                                        </span>
                                        @endif
                                    </p>
                                </div>
                                
                                <subscribe-button :channel="{{ $video->user }}" :initial-subscriptions="{{ $video->user->subscriptions }}" inline-template>
                                    <div class="subscribe">
                                        <button @click="toggleSubscription" v-if="owner === false && subscribed === false" name="subscribe">
                                            @{{ owner ? '' : subscribed ? 'Unsubscribe' : 'Subscribe' }}
                                        </button>
                                        <button @click="toggleSubscription" style="background: #e96969; color: #fff;" v-else-if="owner === false && subscribed === true" name="subscribe">
                                            @{{ owner ? '' : subscribed ? 'Unsubscribe' : 'Subscribe' }}
                                        </button>
                                        <a v-else href="{{ route('update-video', $video->id) }}" class="edit-button">Edit Video</a>                   
                                    </div>
                                </subscribe-button>

                            </div>
                            <div class="social-share">
                                <div class="post-like-btn clearfix">
                                    <form method="post">
                                        <button type="submit" name="fav"><i class="fa fa-heart"></i>Add to</button>
                                    </form>
                                    
                                    <votes :default_votes="{{ $video->votes }}" :entity="{{ $video }}"></votes>

                                    <div class="float-right easy-share" data-easyshare data-easyshare-http data-easyshare-url="http://joinwebs.com/">
                                        <!-- Total -->
                                        <button data-easyshare-button="total">
                                            <span>Total</span>
                                        </button>
                                        <span data-easyshare-total-count>0</span>

                                        <!-- Facebook -->
                                        <button data-easyshare-button="facebook">
                                            <span class="fa fa-facebook"></span>
                                            <span>Share</span>
                                        </button>
                                        <span data-easyshare-button-count="facebook">0</span>

                                        <div data-easyshare-loader>Loading...</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End single post stats -->

        <!-- single post description -->
        <section class="singlePostDescription">
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="heading">
                        <h5>Description</h5>
                    </div>
                    <div class="description showmore_one">
                        <p>{{ $video->description }}</p>
                        <h6>Bullets List :</h6>
                        <ul>
                            <li>Sed ut perspiciatis unde omnis</li>
                            <li>But I must explain to you how</li>
                            <li>At vero eos et accusamus et iusto</li>
                            <li>On the other hand, we denounce</li>
                            <li>There are many variations of passages</li>
                        </ul>
                        <div class="categories">
                            <button><i class="fa fa-folder"></i>Categories</button>
                            <a href="#" class="inner-btn">entertainment</a>
                            <a href="#" class="inner-btn">comedy</a>
                        </div>
                        <div class="tags">
                            <button><i class="fa fa-tags"></i>Tags</button>
                            <a href="#" class="inner-btn">3D Videos</a>
                            <a href="#" class="inner-btn">Videos</a>
                            <a href="#" class="inner-btn">HD</a>
                            <a href="#" class="inner-btn">Movies</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End single post description -->

        <!-- Comments -->
        <comments :video="{{ $video }}"></comments>
        <!-- End Comments -->

    </div><!-- end left side content area -->
    <!-- sidebar -->
    <div class="large-4 columns">
        <aside class="secBg sidebar">
            <div class="row">

                <!-- most view Widget -->
                <div class="large-12 medium-7 medium-centered columns">
                    <div class="widgetBox">
                        <div class="widgetTitle">
                            <h5>More Videos</h5>
                        </div>
                        <div class="widgetContent">
                            @foreach($videos as $video)
                                @php
                                    $test = explode('/', Request::path());
                                @endphp
                                @if($test[1] === $video->id)
                                    @continue
                                @else
                                    <div class="video-box thumb-border">
                                        <div class="video-img-thumb">
                                            <img src="{{ asset($video->thumbnail) }}" alt="most viewed videos">
                                            <a href="{{ route('video', $video->id) }}" class="hover-posts">
                                                <span><i class="fa fa-play"></i>Watch Video</span>
                                            </a>
                                        </div>
                                        <div class="video-box-content">
                                            <h6><a href="{{ route('video', $video->id) }}">{{ $video->title }}</a></h6>
                                            <p>
                                                <span><i class="fa fa-user"></i><a href="#">{{ $video->user->channel_name }}</a></span>
                                                <span><i class="fa fa-clock-o"></i>{{ $video->created_at->toFormattedDateString() }}</span>
                                                <span><i class="fa fa-eye"></i>{{ $video->total_views }}</span>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div><!-- end most view Widget -->

            </div>
        </aside>
    </div><!-- end sidebar -->
</div>
@endsection

@section('styles')
    <link href="https://vjs.zencdn.net/7.8.3/video-js.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/videojs-hls-quality-selector@1.1.1/dist/videojs-hls-quality-selector.css" rel="stylesheet" />
@endsection

@section('script')
    <script src="https://vjs.zencdn.net/7.8.3/video.js"></script>
    {{-- <script src="https://vjs.zencdn.net/7.8.3/video.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-quality-levels/2.0.9/videojs-contrib-quality-levels.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/videojs-hls-quality-selector@1.1.1/dist/videojs-hls-quality-selector.cjs.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/videojs-hls-quality-selector@1.1.1/dist/videojs-hls-quality-selector.es.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/videojs-hls-quality-selector@1.1.1/dist/videojs-hls-quality-selector.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/videojs-hls-quality-selector@1.1.1/dist/videojs-hls-quality-selector.min.js"></script> --}}
    <script>
        window.CURRENT_VIDEO = '{{ $video->id }}'
    </script>
    <script src="{{ asset('js/player.js') }}" type="text/javascript"></script>
@endsection