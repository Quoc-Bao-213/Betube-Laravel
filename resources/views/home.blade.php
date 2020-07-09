@extends('betube.layout.app')

@section('content')
<!-- layerslider -->
<section id="slider">
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

            {{-- ÍT NHẤT 7 CATEGORIES ĐỂ CHẠY SLIDE --}}
            <!-- category carousel -->
            <div id="owl-demo-cat" class="owl-carousel carousel" data-car-length="6" data-items="6" data-loop="true" data-nav="false" data-autoplay="true" data-autoplay-timeout="4000" data-auto-width="true" data-margin="10" data-dots="false">
                <div class="item-cat item thumb-border">
                    <figure class="premium-img">
                        <img src="images/category/category1.png" alt="carousel">
                        <a href="#" class="hover-posts">
                            <span><i class="fa fa-search"></i></span>
                        </a>
                    </figure>
                    <h6><a href="#">Entertainment</a></h6>
                </div>
                <div class="item-cat item thumb-border">
                    <figure class="premium-img">
                        <img src="images/category/category2.png" alt="carousel">
                        <a href="#" class="hover-posts">
                            <span><i class="fa fa-search"></i></span>
                        </a>
                    </figure>
                    <h6><a href="#">Technology</a></h6>
                </div>
                <div class="item-cat item thumb-border">
                    <figure class="premium-img">
                        <img src="images/category/category3.png" alt="carousel">
                        <a href="#" class="hover-posts">
                            <span><i class="fa fa-search"></i></span>
                        </a>
                    </figure>
                    <h6><a href="#">Fashion &amp; Beauty</a></h6>
                </div>
                <div class="item-cat item thumb-border">
                    <figure class="premium-img">
                        <img src="images/category/category4.png" alt="carousel">
                        <a href="#" class="hover-posts">
                            <span><i class="fa fa-search"></i></span>
                        </a>
                    </figure>
                    <h6><a href="#">Sports</a></h6>
                </div>
                <div class="item-cat item thumb-border">
                    <figure class="premium-img">
                        <img src="images/category/category5.png" alt="carousel">
                        <a href="#" class="hover-posts">
                            <span><i class="fa fa-search"></i></span>
                        </a>
                    </figure>
                    <h6><a href="#">Foods &amp; Drinks</a></h6>
                </div>
                <div class="item-cat item thumb-border">
                    <figure class="premium-img">
                        <img src="images/category/category6.png" alt="carousel">
                        <a href="#" class="hover-posts">
                            <span><i class="fa fa-search"></i></span>
                        </a>
                    </figure>
                    <h6><a href="#">Automotive</a></h6>
                </div>
                <div class="item-cat item thumb-border">
                    <figure class="premium-img">
                        <img src="images/category/category4.png" alt="carousel">
                        <a href="#" class="hover-posts">
                            <span><i class="fa fa-search"></i></span>
                        </a>
                    </figure>
                    <h6><a href="#">Sports</a></h6>
                </div>
                <div class="item-cat item thumb-border">
                    <figure class="premium-img">
                        <img src="images/category/category5.png" alt="carousel">
                        <a href="#" class="hover-posts">
                            <span><i class="fa fa-search"></i></span>
                        </a>
                    </figure>
                    <h6><a href="#">Foods &amp; Drinks</a></h6>
                </div>
            </div><!-- end carousel -->
        </div>
    </div>
</section><!-- End Category -->

<!-- main content -->
<section class="content" style="margin-bottom: 30px;">
    {{-- SHOW ALL VIDEO THEO TRUONG CREATED_AT --}}
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
                {{-- COUNT VIDEO (NẾU CÓ THỂ HOẶC XÓA) --}}
                <p class="pull-left">All Videos : <span>1,862 Videos posted</span></p> 
                <div class="grid-system pull-right show-for-large">
                    <a class="secondary-button current grid-default" href="#"><i class="fa fa-th"></i></a>
                    <a class="secondary-button grid-medium" href="#"><i class="fa fa-th-large"></i></a>
                    <a class="secondary-button list" href="#"><i class="fa fa-th-list"></i></a>
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
                                            <span>506</span>
                                        </div>
                                        <div class="thumb-stats pull-right">
                                            <span>05:56</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-des">
                                <h6><a class="text_overflow" href="{{ route('video', $newVideo->id ) }}">{{ $newVideo->title }}</a></h6>
                                    <div class="post-stats clearfix">
                                        <p class="pull-left">
                                            <i class="fa fa-user"></i>
                                            <span><a href="#">{{ $newVideo->user->channel_name }}</a></span>
                                        </p>
                                        <p class="pull-left">
                                            <i class="fa fa-clock-o"></i>
                                            <span> {{ $newVideo->created_at->toFormattedDateString() }} </span>
                                        </p>
                                        <p class="pull-left">
                                            <i class="fa fa-eye"></i>
                                            <span>{{ $newVideo->total_views }}</span>
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
                <p class="pull-left">All Videos : <span>1,862 Videos posted</span></p>
                <div class="grid-system pull-right show-for-large">
                    <a class="secondary-button current grid-default" href="#"><i class="fa fa-th"></i></a>
                    <a class="secondary-button grid-medium" href="#"><i class="fa fa-th-large"></i></a>
                    <a class="secondary-button list" href="#"><i class="fa fa-th-list"></i></a>
                </div>
            </div>
            <div class="tabs-content" data-tabs-content="popularVideos">
                <div class="tabs-panel is-active" id="popular-all">
                    <div class="row list-group">
                        @foreach($videos as $video) 
                        <div class="item large-3 medium-6 columns group-item-grid-default">
                            <div class="post thumb-border">
                                <div class="post-thumb">
                                    <img src="{{ asset( $video->thumbnail ) }}" alt="new video">
                                    <a href="{{ route('video', $video->id ) }}" class="hover-posts">
                                        <span><i class="fa fa-play"></i>Watch Video</span>
                                    </a>
                                    <div class="video-stats clearfix">
                                        <div class="thumb-stats pull-left">
                                            <h6>HD</h6>
                                        </div>
                                        <div class="thumb-stats pull-left">
                                            <i class="fa fa-heart"></i>
                                            <span>506</span>
                                        </div>
                                        <div class="thumb-stats pull-right">
                                            <span>05:56</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-des">
                                    <h6><a class="text_overflow" href="{{ route('video', $video->id ) }}">{{ $video->title }}</a></h6>
                                    <div class="post-stats clearfix">
                                        <p class="pull-left">
                                            <i class="fa fa-user"></i>
                                            <span><a href="#">{{ $video->user->channel_name }}</a></span>
                                        </p>
                                        <p class="pull-left">
                                            <i class="fa fa-clock-o"></i>
                                            <span>{{ $video->created_at->toFormattedDateString() }}</span>
                                        </p>
                                        <p class="pull-left">
                                            <i class="fa fa-eye"></i>
                                            <span>{{ $video->total_views }}</span>   
                                        </p>
                                    </div>
                                    <div class="post-summary">
                                        <p>{{ $video->description }}</p>
                                    </div>
                                    <div class="post-button">
                                        <a href="{{ route('video', $video->id ) }}" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
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