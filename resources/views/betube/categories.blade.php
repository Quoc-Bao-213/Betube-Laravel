@extends('betube.layout.app')

@section('style')
<link rel="stylesheet" href="{{ asset('css/jquery.kyco.easyshare.css') }}">
<style>
    .pagination li {
        display: inline-block;
        margin-left: 3px;
        margin-right: 3px;
    }
</style>
@endsection

@section('content')
<section id="breadcrumb" class="breadMargin">
    <div class="row">
        <div class="large-12 columns">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home"></i><a href="{{ route('home') }}">Home</a></li>
                    <li>
                        <span class="show-for-sr">Current: </span> categories
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section><!--end breadcrumbs-->

<section class="category-content">
    <div class="row">
        <!-- left side content area -->
        <div class="large-8 columns">
            <section class="content content-with-sidebar">
                <!-- newest video -->
                <div class="main-heading removeMargin">
                    <div class="row secBg padding-14 removeBorderBottom">
                        <div class="medium-8 small-8 columns">
                            <div class="head-title">
                                <i class="fa fa-film"></i>
                                <h4>{{ $categories->name }}</h4>
                            </div>
                        </div>
                        <div class="medium-4 small-4 columns">
                            <ul class="tabs text-right pull-right" data-tabs id="newVideos">
                                <li class="tabs-title is-active"><a href="#new-all">all</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row secBg">
                    <div class="large-12 columns">
                        <div class="row column head-text clearfix">
                            <p class="pull-left">All Videos: {{ count($videos) == 0 ? "No video" : count($videos)." Videos posted" }}<p>
                            <div class="grid-system pull-right show-for-large">
                                <a class="secondary-button current grid-medium" href="#"><i
                                        class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                        <div class="tabs-content" data-tabs-content="newVideos">
                            <div class="tabs-panel is-active" id="new-all">
                                <div class="row list-group">
                                    @foreach($videos as $video)
                                    <div class="item large-4 medium-6 columns grid-medium">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="{{ $video->thumbnail }}" alt="new video">
                                                <a href="{{ route('video', $video->id) }}" class="hover-posts">
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
                                                            echo App\Http\Controllers\CaregoriesContronller::getTotalLike($video->id);
                                                        @endphp
                                                        </span>
                                                    </div>
                                                    <div class="thumb-stats pull-right">
                                                        <span>{{ $video->duration }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-des">
                                                <h6><a class="text_overflow" href="{{ route('video', $video->id) }}">{{ $video->title }}</a></h6>
                                                <div class="post-stats clearfix">
                                                    <p class="pull-left">
                                                        <i class="fa fa-user"></i>
                                                        <span><a href="{{ route('about-me', $video->user->id) }}">{{ $video->user->channel_name }}</a></span>
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
                                                {{-- <div class="post-button">
                                                    <a href="{{ route('video', $video->id) }}" class="secondary-button"><i
                                                            class="fa fa-play-circle"></i>watch video</a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            {{-- <div class="tabs-panel" id="new-hd">
                                <div class="row list-group">
                                    <div class="item large-4 medium-6 columns grid-medium">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="images/video-thumbnail/1.jpg" alt="new video">
                                                <a href="single-video-v2.html" class="hover-posts">
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
                                                <h6><a href="single-video-v2.html">There are many variations of
                                                        passage.</a></h6>
                                                <div class="post-stats clearfix">
                                                    <p class="pull-left">
                                                        <i class="fa fa-user"></i>
                                                        <span><a href="#">admin</a></span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>5 January 16</span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-eye"></i>
                                                        <span>1,862K</span>
                                                    </p>
                                                </div>
                                                <div class="post-summary">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto sequi
                                                        nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i
                                                            class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item large-4 medium-6 columns grid-medium">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="images/video-thumbnail/7.jpg" alt="new video">
                                                <a href="single-video-v2.html" class="hover-posts">
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
                                                <h6><a href="single-video-v2.html">There are many variations of
                                                        passage.</a></h6>
                                                <div class="post-stats clearfix">
                                                    <p class="pull-left">
                                                        <i class="fa fa-user"></i>
                                                        <span><a href="#">admin</a></span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>5 January 16</span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-eye"></i>
                                                        <span>1,862K</span>
                                                    </p>
                                                </div>
                                                <div class="post-summary">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto sequi
                                                        nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i
                                                            class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item large-4 medium-6 columns grid-medium">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="images/video-thumbnail/14.jpg" alt="new video">
                                                <a href="single-video-v2.html" class="hover-posts">
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
                                                <h6><a href="single-video-v2.html">There are many variations of
                                                        passage.</a></h6>
                                                <div class="post-stats clearfix">
                                                    <p class="pull-left">
                                                        <i class="fa fa-user"></i>
                                                        <span><a href="#">admin</a></span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>5 January 16</span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-eye"></i>
                                                        <span>1,862K</span>
                                                    </p>
                                                </div>
                                                <div class="post-summary">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto sequi
                                                        nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i
                                                            class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item large-4 medium-6 columns grid-medium">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="images/video-thumbnail/5.jpg" alt="new video">
                                                <a href="single-video-v2.html" class="hover-posts">
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
                                                <h6><a href="single-video-v2.html">There are many variations of
                                                        passage.</a></h6>
                                                <div class="post-stats clearfix">
                                                    <p class="pull-left">
                                                        <i class="fa fa-user"></i>
                                                        <span><a href="#">admin</a></span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>5 January 16</span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-eye"></i>
                                                        <span>1,862K</span>
                                                    </p>
                                                </div>
                                                <div class="post-summary">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto sequi
                                                        nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i
                                                            class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item large-4 medium-6 columns grid-medium end">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="images/video-thumbnail/9.jpg" alt="new video">
                                                <a href="single-video-v2.html" class="hover-posts">
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
                                                <h6><a href="single-video-v2.html">There are many variations of
                                                        passage.</a></h6>
                                                <div class="post-stats clearfix">
                                                    <p class="pull-left">
                                                        <i class="fa fa-user"></i>
                                                        <span><a href="#">admin</a></span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>5 January 16</span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-eye"></i>
                                                        <span>1,862K</span>
                                                    </p>
                                                </div>
                                                <div class="post-summary">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto sequi
                                                        nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i
                                                            class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item large-4 medium-6 columns grid-medium end">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="images/video-thumbnail/11.jpg" alt="new video">
                                                <a href="single-video-v2.html" class="hover-posts">
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
                                                <h6><a href="single-video-v2.html">There are many variations of
                                                        passage.</a></h6>
                                                <div class="post-stats clearfix">
                                                    <p class="pull-left">
                                                        <i class="fa fa-user"></i>
                                                        <span><a href="#">admin</a></span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>5 January 16</span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-eye"></i>
                                                        <span>1,862K</span>
                                                    </p>
                                                </div>
                                                <div class="post-summary">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto sequi
                                                        nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i
                                                            class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        {{-- <div class="pagination">
                            <a href="#" class="prev page-numbers">« Previous</a>
                            <a href="#" class="page-numbers">1</a>
                            <span class="page-numbers current">2</span>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="next page-numbers">Next »</a>
                        </div> --}}
                        {{ $videos->links() }}
                    </div>
                </div>
            </section>
            <!-- ad Section -->
            <div class="googleAdv">
                <a href="#"><img src="{{ asset('images/goodleadv.png') }}" alt="googel ads"></a>
            </div><!-- End ad Section -->
        </div><!-- end left side content area -->
        <!-- sidebar -->
        <div class="large-4 columns">
            <aside class="secBg sidebar">
                <div class="row">
                    <!-- categories -->
                    <div class="large-12 medium-7 medium-centered columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>categories</h5>
                            </div>
                            <div class="widgetContent">
                                <ul class="accordion" data-accordion>
                                    @foreach($allCategories as $index => $category)
                                    <li @if($index == 0) class="accordion-item is-active" @else class="accordion-item" @endif data-accordion-item>
                                        <a href="#" class="accordion-title">{{ $category->name }}</a>
                                        <div class="accordion-content" data-tab-content>
                                            <ul>
                                                <li class="clearfix">
                                                    <i class="fa fa-play-circle-o"></i>
                                                    <a href="#">Movies <span>(10)</span></a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-play-circle-o"></i>
                                                    <a href="#">Trailers <span>(3)</span></a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-play-circle-o"></i>
                                                    <a href="#">Comedy <span>(6)</span></a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-play-circle-o"></i>
                                                    <a href="#">Musics <span>(8)</span></a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-play-circle-o"></i>
                                                    <a href="#">Animations <span>(10)</span></a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-play-circle-o"></i>
                                                    <a href="#">Dramas <span>(5)</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>



                    <!-- social Fans Widget -->
                    <div class="large-12 medium-7 medium-centered columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>social fans</h5>
                            </div>
                            <div class="widgetContent">
                                <div class="social-links">
                                    <a class="socialButton" href="#">
                                        <i class="fa fa-facebook"></i>
                                        <span>698K</span>
                                        <span>fans</span>
                                    </a>
                                    <a class="socialButton" href="#">
                                        <i class="fa fa-twitter"></i>
                                        <span>598</span>
                                        <span>followers</span>
                                    </a>
                                    <a class="socialButton" href="#">
                                        <i class="fa fa-google-plus"></i>
                                        <span>98k</span>
                                        <span>followers</span>
                                    </a>
                                    <a class="socialButton" href="#">
                                        <i class="fa fa-youtube"></i>
                                        <span>168k</span>
                                        <span>followers</span>
                                    </a>
                                    <a class="socialButton" href="#">
                                        <i class="fa fa-vimeo"></i>
                                        <span>498</span>
                                        <span>followers</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End social Fans Widget -->

                    <!-- slide video -->
                    <div class="large-12 medium-7 medium-centered columns">
                        <section class="widgetBox">
                            <div class="row">
                                <div class="large-12 columns">
                                    <div class="column row">
                                        <div class="heading category-heading clearfix">
                                            <div class="cat-head pull-left">
                                                <h4>slide videos</h4>
                                            </div>
                                            <div class="sidebar-video-nav">
                                                <div class="navText pull-right">
                                                    <a class="prev secondary-button"><i
                                                            class="fa fa-angle-left"></i></a>
                                                    <a class="next secondary-button"><i
                                                            class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide Videos-->
                                    <div id="owl-demo-video" class="owl-carousel carousel" data-car-length="1"
                                        data-items="1" data-loop="true" data-nav="false" data-autoplay="true"
                                        data-autoplay-timeout="3000" data-dots="false">
                                        @foreach($sildeVideo->take(3) as $slide) 
                                        <div class="item item-video thumb-border">
                                            <figure class="premium-img">
                                                <img src="{{ $slide->thumbnail }}" alt="carousel">
                                                <a href="{{ route('video', $slide->id) }}" class="hover-posts">
                                                    <span><i class="fa fa-play"></i></span>
                                                </a>
                                            </figure>
                                            <div class="video-des">
                                                <h6><a href="{{ route('video', $slide->id) }}">{{ $slide->title }}</a></h6>
                                                <div class="post-stats clearfix">
                                                    <p class="pull-left">
                                                        <i class="fa fa-user"></i>
                                                        <span><a href="{{ route('about-me', $slide->user->id) }}">{{ $slide->user->channel_name }}</a></span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>{{ $slide->created_at->toFormattedDateString() }}</span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-eye"></i>
                                                        <span>{{ $slide->total_views }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div><!-- end carousel -->
                                </div>
                            </div>
                        </section><!-- End Category -->
                    </div><!-- End slide video -->

                    <!-- ad banner widget -->
                    <div class="large-12 medium-7 medium-centered columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>Recent post videos</h5>
                            </div>
                            <div class="widgetContent">
                                <div class="advBanner text-center">
                                    <a href="#"><img src="{{ asset('images/sideradv.png') }}" alt="sidebar adv"></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end ad banner widget -->

                    <!-- Recent post videos -->
                    <div class="large-12 medium-7 medium-centered columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>Recent post videos</h5>
                            </div>
                            <div class="widgetContent">
                                @foreach($sildeVideo->sortByDESC('created_at')->take(4) as $videos)
                                <div class="media-object stack-for-small">
                                    <div class="media-object-section">
                                        <div class="recent-img">
                                            <img src= "{{ $videos->thumbnail }}" alt="recent">
                                            <a href="{{ route('video', $videos->id) }}" class="hover-posts">
                                                <span><i class="fa fa-play"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-object-section">
                                        <div class="media-content">
                                            <h6><a href="{{ route('video', $videos->id) }}">{{ $videos->title }}</a></h6>
                                            <p><i class="fa fa-user"></i><span>{{ $videos->user->channel_name }}</span><i class="fa fa-clock-o"></i><span>{{ $videos->created_at->toFormattedDateString() }}</span></p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div><!-- End Recent post videos -->

                    <!--news letter-->
                    <div class="large-12 medium-7 medium-centered columns">
                        <div class="widgetBox">
                            <div class="newsLetter">
                                <h3>Newsletter Singup</h3>
                                <p>Subscribe to get exclusive videos</p>
                                <form method="post">
                                    <div class="input-group">
                                        <input class="input-group-field" type="email"
                                            placeholder="Enter your email addres">
                                        <div class="input-group-button">
                                            <input type="submit" class="button" value="Signup">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End news letter-->
                </div>
            </aside>
        </div><!-- end sidebar -->
    </div>
</section><!-- End Category Content-->
@endsection