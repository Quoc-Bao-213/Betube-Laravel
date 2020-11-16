@extends('betube.layout.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/jquery.kyco.easyshare.css') }}">
    <style>
        .header-playlist {
            padding: 5px 16px 5px;
        }
        .header-top-playlist {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header-title {
            margin-bottom: 0;
            line-height: normal;
            font-size: inherit;
        }
        .header-title a{
            font-size: 14px;
            color: #444 !important; 
        }
        .publisher-container {
            align-items: center;
            font-size: 13px;
            margin-top: 2px;
        }
        .item-container {
            max-height: 255px;
            overflow-y: auto;
        }
        .widgetContent .items{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 4px 8px 4px 0;
            flex-direction: row;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        .widgetContent .items a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #444;
            width: 80%;
        }
        .items .title-video {
            display: block;
            font-weight: bold;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .items .channel-name {
            display: block;
            font-size: 10px;
        }
        .items .trash {
            width: 20%;
            padding-left: 30px;
            cursor: pointer;
            display: none;
        }
        .widgetContent .items:hover .trash {
            display: block;
        }
        .widgetContent .items:hover {
            box-shadow: 0px 0px 5px;
            background: rgb(240, 240, 240);
        }
        .active-item {
            background: rgb(245, 245, 245);
        }
        .none-item {
            display: none;
        }
    </style>
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
                    <player link="{{ asset(Storage::url("videos/{$video->id}/{$video->id}.m3u8")) }}" poster="{{ asset($video->thumbnail) }}" request-path={{ Request::path() }}></player>
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
                                    <a id="avatar_channel" href="{{ route('about-me', $video->user->id) }}"><img src="{{ $video->user->avatar() }}" alt="post"></a>
                                </div>
                                <p class="text-center"><a id="channel_name" href="{{ route('about-me', $video->user->id) }}">{{ $video->user->channel_name }}</a></p>
                            </div>
                        </div>
                        <div class="media-object-section object-second">
                            <div class="author-des clearfix">
                                <div class="post-title" style="width: 80%">

                                    <h4 id="current_video_title_h4">{{ $video->title }}</h4>
                                    <p>
                                        <span><i class="fa fa-clock-o"></i>{{ $video->created_at->toFormattedDateString() }}</span>
                                        <span id="total_views"><i class="fa fa-eye"></i>{{ $video->total_views }}</span>
                                        <span id="total_comments"><i class="fa fa-commenting"></i>{{ $video->comments->count() }}</span>
                                        @if ($video->hashtag)
                                        <span>
                                            <i class="fa fa-hashtag"></i>
                                            @php
                                                $arrayHashTags = explode(' ', $video->hashtag);
                                                $hashTag = "";
                                                
                                                foreach($arrayHashTags as $arrayHashTag){
                                                    $hashTag .= '<a target="_blank" href="'.route('action-search').'?search='.urlencode($arrayHashTag).'">'.$arrayHashTag.'</a> ';
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
                                    <playlist :video="{{ $video }}" :playlist-detail="{{ $playlistDetail }}"  @if(Auth::user()) :user="{{ $user }}" @endif></playlist>
                                    
                                    <votes :default_votes="{{ $video->votes }}" :entity="{{ $video }}"></votes>
                                    {{-- <votes :entity="{{ $video }}"></votes> --}}

                                    {{-- <div class="float-right easy-share" data-easyshare data-easyshare-http data-easyshare-url="{{ $url }}">
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
                                    </div> --}}

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
                    <div class="description showmore_one"> <!-- showmore_one -->
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

        <comments :video="{{ $video }}" @if(Auth::user()) :user="{{ $user }}" @endif></comments>
       
        <!-- End Comments -->

    </div><!-- end left side content area -->

    @php
        $arrayPath = explode('/', Request::path());
    @endphp

    @if(isset($arrayPath[2]) && isset($arrayPath[3]))
    <div class="large-4 columns">
        <aside class="secBg sidebar">
            <div class="row">

                <!-- most view Widget -->
                <div class="large-12 medium-7 medium-centered columns">
                    <div class="widgetBox">

                        <drag-items :playlist="{{ $playlist }}" :default-playlist-detail="{{ $findPlaylistDetail }}"></drag-items>

                        <div class="widgetTitle">
                            <h5>More Videos</h5>
                        </div>
                        <div class="widgetContent">
                            @foreach($videos as $videos)
                                @php
                                    $test = explode('/', Request::path());
                                @endphp
                                @if($test[1] === $videos->id)
                                    @continue
                                @else
                                    <div class="video-box thumb-border">
                                        <div class="video-img-thumb">
                                            <img src="{{ asset($videos->thumbnail) }}" alt="most viewed videos">
                                            <a href="{{ route('video', $videos->id) }}" class="hover-posts">
                                                <span><i class="fa fa-play"></i>Watch Video</span>
                                            </a>
                                        </div>
                                        <div class="video-box-content">
                                            <h6><a href="{{ route('video', $videos->id) }}">{{ $videos->title }}</a></h6>
                                            <p>
                                                <span><i class="fa fa-user"></i><a href="{{ route('about-me', $videos->user->id) }}">{{ $videos->user->channel_name }}</a></span>
                                                <span><i class="fa fa-clock-o"></i>{{ $videos->created_at->toFormattedDateString() }}</span>
                                                <span><i class="fa fa-eye"></i>{{ $videos->total_views }}</span>
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
    @else
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
                            @foreach($videos as $videos)
                                @if($arrayPath[1] === $videos->id)
                                    @continue
                                @else
                                    <div class="video-box thumb-border">
                                        <div class="video-img-thumb">
                                            <img src="{{ asset($videos->thumbnail) }}" alt="most viewed videos">
                                            <a href="{{ route('video', $videos->id) }}" class="hover-posts">
                                                <span><i class="fa fa-play"></i>Watch Video</span>
                                            </a>
                                        </div>
                                        <div class="video-box-content">
                                            <h6><a href="{{ route('video', $videos->id) }}">{{ $videos->title }}</a></h6>
                                            <p>
                                                <span><i class="fa fa-user"></i><a href="{{ route('about-me', $videos->user->id) }}">{{ $videos->user->channel_name }}</a></span>
                                                <span><i class="fa fa-clock-o"></i>{{ $videos->created_at->toFormattedDateString() }}</span>
                                                <span><i class="fa fa-eye"></i>{{ $videos->total_views }}</span>
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
    @endif
    
</div>
@endsection

@section('styles')
    <link href="https://vjs.zencdn.net/7.8.3/video-js.css" rel="stylesheet" />
@endsection

@section('script')
    <script>
        window.CURRENT_VIDEO = '{{ $video->id }}'
    </script>
@endsection