@extends('betube.layout.app')

@section('content')
<!-- layerslider -->
<section id="slider" style="margin-bottom:30px;">
    <div id="full-slider-wrapper">
        <div id="layerslider" style="width:100%;height:500px;">
            <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                <img src="images/sliderimages/bg.png" class="ls-bg" alt="Slide background"/>
                <h3 class="ls-l" style="left:50px; top:135px; padding: 15px; color: #444444;font-size: 24px;font-family: 'Open Sans'; font-weight: bold; text-transform: uppercase;" data-ls="offsetxin:0;durationin:2500;delayin:500;durationout:750;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotateout:-90;transformoriginout:left bottom 0;">World’s Biggest</h3>
                <h1 class="ls-l" style="left: 63px; top:185px;background: #e96969;padding:0 10px; opacity: 1; color: #ffffff; font-size: 36px; font-family: 'Open Sans'; text-transform: uppercase; font-weight: bold;" data-ls="offsetxin:left;durationin:3000; delayin:800;durationout:850;rotatexin:90;rotatexout:-90;">Powerfull Video Theme</h1>
                <p class="ls-l" style="font-weight:600;left:62px; top:250px; opacity: 1;width: 450px; color: #444; font-size: 14px; font-family: 'Open Sans';" data-ls="offsetyin:top;durationin:4000;rotateyin:90;rotateyout:-90;durationout:1050;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been .</p>
                <img class="ls-l" src="images/sliderimages/layer1.png" alt="layer 1" style="top:55px; left:700px;" data-ls="offsetxin:right;durationin:3000; delayin:600;durationout:850;rotatexin:-90;rotatexout:90;">
                <img class="ls-l ls-linkto-2" style="top:400px;left:50%;white-space: nowrap;" data-ls="offsetxin:-50;delayin:1000;rotatein:-40;offsetxout:-50;rotateout:-40;" src="images/sliderimages/left.png" alt="">
                <img class="ls-l ls-linkto-2" style="top:400px;left:52%;white-space: nowrap;" data-ls="offsetxin:50;delayin:1000;offsetxout:50;" src="images/sliderimages/right.png" alt="">
            </div>
            <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                <img src="images/sliderimages/bg2.png" class="ls-bg" alt="Slide background"/>
                <h3 class="ls-l" style="left:50%; top:150px; padding: 15px; color: #444444;font-size: 24px;font-family: 'Open Sans'; font-weight: bold; text-transform: uppercase;" data-ls="offsetxin:0;durationin:2500;delayin:500;durationout:750;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotateout:-90;transformoriginout:left bottom 0;">Betube is a World’s Biggest</h3>
                <h1 class="ls-l" style="left: 50%; top:200px;background: #e96969;padding:0 10px; opacity: 1; color: #ffffff; font-size: 36px; font-family: 'Open Sans'; text-transform: uppercase; font-weight: bold;" data-ls="offsetxin:left;durationin:3000; delayin:800;durationout:850;rotatexin:90;rotatexout:-90;">Boost your video Website</h1>
                <p class="ls-l" style="text-align:center; font-weight:600;left:50%; top:265px; opacity: 1;width: 450px; color: #444; font-size: 14px; font-family: 'Open Sans';" data-ls="offsetyin:top;durationin:4000;rotateyin:90;rotateyout:-90;durationout:1050;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been .</p>
                <img class="ls-l ls-linkto-1" style="top:400px;left:50%;white-space: nowrap;" data-ls="offsetxin:-50;delayin:1000;rotatein:-40;offsetxout:-50;rotateout:-40;" src="images/sliderimages/left.png" alt="">
                <img class="ls-l ls-linkto-1" style="top:400px;left:52%;white-space: nowrap;" data-ls="offsetxin:50;delayin:1000;offsetxout:50;" src="images/sliderimages/right.png" alt="">
            </div>
        </div>
    </div>
</section><!--end slider-->


<!-- Category -->

<section id="category">
    <div class="row secBg">
        <div class="large-12 columns">
            <div class="column row">
                <div class="heading category-heading clearfix">
                    <div class="cat-head pull-left">
                        <i class="fa fa-folder-open"></i>
                        <h4>Browse Videos By Category</h4>
                    </div>
                <div>
                    <div class="navText pull-right show-for-large">
                        <a class="prev secondary-button"><i class="fa fa-angle-left"></i></a>
                        <a class="next secondary-button"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                </div>
            </div>
            <!-- category carousel -->
            <div id="owl-demo-cat" class="owl-carousel carousel" data-car-length="5" data-items="5" data-loop="true" data-nav="false" data-autoplay="true" data-autoplay-timeout="4000" data-auto-width="true" data-margin="10" data-dots="false">
                @foreach($videoTypes as $index => $videoType)
                <div class="item-cat item thumb-border">
                    <figure class="premium-img">
                        <img src="{{ asset('images/category/category'.($index + 1).'.png') }}" alt="carousel">
                        <a href="{{ route('categories', $videoType->id) }}" class="hover-posts">
                            <span><i class="fa fa-search"></i></span>
                        </a>
                    </figure>
                <h6><a href="#">{{ $videoType->name }}</a></h6>
                </div>
                @endforeach
            </div><!-- end carousel -->
        </div>
    </div>
</section><!-- End Category --> 
    

<!-- main content -->
<section class="content" style="margin-bottom: 30px;">
    <!-- newest video -->
    <div class="main-heading">
        <div class="row secBg padding-14">
            <div class="medium-12 small-12 columns">
                <div class="head-title">
                    <i class="fa fa-film"></i>
                    <h4>Newest Videos</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row secBg">
        <div class="large-12 columns">
            <div class="row column head-text clearfix">
                <p class="pull-left">All Videos: </p> 
                <div class="grid-system pull-right show-for-large">
                    <a class="secondary-button current grid-default" href="#"><i class="fa fa-th"></i></a>
                    {{-- <a class="secondary-button grid-medium" href="#"><i class="fa fa-th-large"></i></a>
                    <a class="secondary-button list" href="#"><i class="fa fa-th-list"></i></a> --}}
                </div>
            </div>
            <div class="tabs-content">
                <div class="tab-container tab-content active" data-content="1">
                    <div class="row list-group">
                        @foreach($videos->sortByDesc('created_at')->take(8) as $newVideo)
                        <div class="item large-3 medium-6 columns group-item-grid-default">
                            <div class="post thumb-border">
                                <div class="post-thumb">
                                    <img src="{{ asset( $newVideo->thumbnail ) }}" alt="new video">
                                    <a href="{{ route('video', $newVideo->id ) }}" class="hover-posts">
                                        <span><i class="fa fa-play"></i>Watch Video</span>
                                    </a>
                                    <div class="video-stats clearfix">
                                        <div class="thumb-stats pull-left">
                                            <h6>HD</h6>
                                        </div>
                                        <div class="thumb-stats pull-left">
                                            <i class="fa fa-heart"></i>
                                            <span>
                                            @php
                                                echo App\Http\Controllers\HomeController::getTotalLike($newVideo->id);
                                            @endphp
                                            </span>
                                        </div>
                                        <div class="thumb-stats pull-right">
                                            <span>{{ $newVideo->duration }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-des">
                                <h6><a class="text_overflow" href="{{ route('video', $newVideo->id ) }}">{{ $newVideo->title }}</a></h6>
                                    <div class="post-stats clearfix">
                                        <p class="pull-left">
                                            <i class="fa fa-user"></i>
                                            <span>
                                                <a href="{{ route('about-me', $newVideo->user->id ) }}">
                                                    @if($newVideo->user->channel_name)
                                                    {{ $newVideo->user->channel_name }}
                                                    @else
                                                    {{ $newVideo->user->name }}
                                                    @endif
                                                </a>
                                            </span>
                                        </p>
                                        <p class="pull-left">
                                            <i class="fa fa-clock-o"></i>
                                            <span> {{ $newVideo->created_at->toFormattedDateString() }} </span>
                                        </p>
                                        <p class="pull-left">
                                            <i class="fa fa-eye"></i>
                                            <span>
                                                {{ $newVideo->formatView($newVideo->total_views) }}
                                            </span>
                                        </p>
                                    </div>
                                    <div class="post-summary">
                                        <p>{{ $newVideo->description }}</p>
                                    </div>
                                    <div class="post-button">
                                        <a href="{{ route('video', $newVideo->id ) }}" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <!-- End newest video -->
    <!-- popular Videos -->
    <div class="main-heading">
        <div class="row secBg padding-14">
            <div class="medium-12 small-12 columns">
                <div class="head-title">
                    <i class="fa fa-star"></i>
                    <h4>Most Popular Videos</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row secBg">
        <div class="large-12 columns">
            <div class="row column head-text clearfix">
            <p class="pull-left">All Videos : <span>{{ count($videos) }} Videos posted</span></p>
                <div class="grid-system pull-right show-for-large">
                    <a class="secondary-button current grid-default" href="#"><i class="fa fa-th"></i></a>
                    {{-- <a class="secondary-button grid-medium" href="#"><i class="fa fa-th-large"></i></a>
                    <a class="secondary-button list" href="#"><i class="fa fa-th-list"></i></a> --}}
                </div>
            </div>
            <div class="tabs-content" data-tabs-content="popularVideos">
                <div class="tabs-panel is-active" id="popular-all">
                    <div class="row list-group">
                        @foreach($videos->sortByDesc('total_views') as $popularVideo) 
                        <div class="item large-3 medium-6 columns group-item-grid-default">
                            <div class="post thumb-border">
                                <div class="post-thumb">
                                    <img src="{{ asset( $popularVideo->thumbnail ) }}" alt="new video">
                                    <a href="{{ route('video', $popularVideo->id ) }}" class="hover-posts">
                                        <span><i class="fa fa-play"></i>Watch Video</span>
                                    </a>
                                    <div class="video-stats clearfix">
                                        <div class="thumb-stats pull-left">
                                            <h6>HD</h6>
                                        </div>
                                        <div class="thumb-stats pull-left">
                                            <i class="fa fa-heart"></i>
                                            <span>
                                            @php
                                                echo App\Http\Controllers\HomeController::getTotalLike($popularVideo->id);
                                            @endphp
                                            </span>
                                        </div>
                                        <div class="thumb-stats pull-right">
                                            <span>{{ $popularVideo->duration }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-des">
                                    <h6><a class="text_overflow" href="{{ route('video', $popularVideo->id ) }}">{{ $popularVideo->title }}</a></h6>
                                    <div class="post-stats clearfix">
                                        <p class="pull-left">
                                            <i class="fa fa-user"></i>
                                            <span>
                                                <a href="{{ route('about-me', $popularVideo->user->id ) }}">
                                                @if($popularVideo->user->channel_name)
                                                    {{ $popularVideo->user->channel_name }}
                                                @else
                                                    {{ $popularVideo->user->name }}
                                                @endif
                                                </a>
                                            </span>
                                        </p>
                                        <p class="pull-left">
                                            <i class="fa fa-clock-o"></i>
                                            <span>{{ $popularVideo->created_at->toFormattedDateString() }}</span>
                                        </p>
                                        <p class="pull-left">
                                            <i class="fa fa-eye"></i>
                                            <span>{{ $popularVideo->formatView($popularVideo->total_views) }}</span>   
                                        </p>
                                    </div>
                                    <div class="post-summary">
                                        <p>{{ $popularVideo->description }}</p>
                                    </div>
                                    <div class="post-button">
                                        <a href="{{ route('video', $popularVideo->id ) }}" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ad Section -->
  
</section><!-- End main content -->

@endsection