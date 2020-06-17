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
                    <li><i class="fa fa-home"></i><a href="home-v1.html">Home</a></li>
                    <li>
                        <span class="show-for-sr">Current: </span> categories
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section><!--end breadcrumbs-->
<!-- Premium Videos -->
<section id="premium">
    <div class="row">
        <div class="heading clearfix">
            <div class="large-11 columns">
                <h4><i class="fa fa-play-circle-o"></i>Premium Videos</h4>
            </div>
            <div class="large-1 columns">
                <div class="navText show-for-large">
                    <a class="prev secondary-button"><i class="fa fa-angle-left"></i></a>
                    <a class="next secondary-button"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div id="owl-demo" class="owl-carousel carousel" data-car-length="4" data-items="4" data-loop="true" data-nav="false" data-autoplay="true" data-autoplay-timeout="3000" data-dots="false" data-auto-width="false" data-responsive-small="1" data-responsive-medium="2" data-responsive-xlarge="5">
        <div class="item">
            <figure class="premium-img">
                <img src="images/premium1.png" alt="carousel">
                <figcaption>
                    <h5>ICE Age 5 upcoming Movie</h5>
                    <p>Movies Trailer</p>
                </figcaption>
            </figure>
            <a href="single-video-v1.html" class="hover-posts">
               <span><i class="fa fa-play"></i>Watch Video</span>
            </a>
        </div>
        <div class="item">
            <figure class="premium-img">
                <img src="images/premium2.png" alt="carousel">
                <figcaption>
                    <h5>ICE Age 5 upcoming Movie</h5>
                    <p>Movies Trailer</p>
                </figcaption>
            </figure>
            <a href="single-video-v1.html" class="hover-posts">
                <span><i class="fa fa-play"></i>Watch Video</span>
            </a>
        </div>
        <div class="item">
            <figure class="premium-img">
                <img src="images/premium3.png" alt="carousel">
                <figcaption>
                    <h5>ICE Age 5 upcoming Movie</h5>
                    <p>Movies Trailer</p>
                </figcaption>
            </figure>
            <a href="single-video-v1.html" class="hover-posts">
                <span><i class="fa fa-play"></i>Watch Video</span>
            </a>
        </div>
        <div class="item">
            <figure class="premium-img">
                <img src="images/premium4.png" alt="carousel">
                <figcaption>
                    <h5>ICE Age 5 upcoming Movie</h5>
                    <p>Movies Trailer</p>
                </figcaption>
            </figure>
            <a href="single-video-v1.html" class="hover-posts">
                <span><i class="fa fa-play"></i>Watch Video</span>
            </a>
        </div>
        <div class="item">
            <figure class="premium-img">
                <img src="images/premium1.png" alt="carousel">
                <figcaption>
                    <h5>ICE Age 5 upcoming Movie</h5>
                    <p>Movies Trailer</p>
                </figcaption>
            </figure>
            <a href="single-video-v1.html" class="hover-posts">
                <span><i class="fa fa-play"></i>Watch Video</span>
            </a>
        </div>
        <div class="item">
            <figure class="premium-img">
                <img src="images/premium2.png" alt="carousel">
                <figcaption>
                    <h5>ICE Age 5 upcoming Movie</h5>
                    <p>Movies Trailer</p>
                </figcaption>
            </figure>
            <a href="single-video-v1.html" class="hover-posts">
                <span><i class="fa fa-play"></i>Watch Video</span>
            </a>
        </div>
    </div>
</section><!-- End Premium Videos -->
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
                                <h4>Entertainment</h4>
                            </div>
                        </div>
                        <div class="medium-4 small-4 columns">
                            <ul class="tabs text-right pull-right" data-tabs id="newVideos">
                                <li class="tabs-title is-active"><a href="#new-all">all</a></li>
                                <li class="tabs-title"><a href="#new-hd">HD</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row secBg">
                    <div class="large-12 columns">
                        <div class="row column head-text clearfix">
                            <p class="pull-left">All Videos : <span>1,862 Videos posted</span></p>
                            <div class="grid-system pull-right show-for-large">
                                <a class="secondary-button grid-default" href="#"><i class="fa fa-th"></i></a>
                                <a class="secondary-button current grid-medium" href="#"><i class="fa fa-th-large"></i></a>
                                <a class="secondary-button list" href="#"><i class="fa fa-th-list"></i></a>
                            </div>
                        </div>
                        <div class="tabs-content" data-tabs-content="newVideos">
                            <div class="tabs-panel is-active" id="new-all">
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
                                                <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
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
                                                <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item large-4 medium-6 columns grid-medium">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="images/video-thumbnail/13.jpg" alt="new video">
                                                <a href="single-video-v2.html" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                                <div class="video-stats clearfix">
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
                                                <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
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
                                                <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item large-4 medium-6 columns grid-medium">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="images/video-thumbnail/6.jpg" alt="new video">
                                                <a href="single-video-v2.html" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                                <div class="video-stats clearfix">
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
                                                <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
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
                                                <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item large-4 medium-6 columns grid-medium">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="images/video-thumbnail/4.jpg" alt="new video">
                                                <a href="single-video-v2.html" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                                <div class="video-stats clearfix">
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
                                                <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item large-4 medium-6 columns grid-medium end">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="images/video-thumbnail/3.jpg" alt="new video">
                                                <a href="single-video-v2.html" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                                <div class="video-stats clearfix">
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
                                                <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item large-4 medium-6 columns grid-medium end">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="images/video-thumbnail/10.jpg" alt="new video">
                                                <a href="single-video-v2.html" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                                <div class="video-stats clearfix">
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
                                                <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
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
                                                <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
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
                                                <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item large-4 medium-6 columns grid-medium end">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="images/video-thumbnail/12.jpg" alt="new video">
                                                <a href="single-video-v2.html" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                                <div class="video-stats clearfix">
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
                                                <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-panel" id="new-hd">
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
                                                <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
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
                                                <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
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
                                                <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
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
                                                <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
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
                                                <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
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
                                                <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination">
                            <a href="#" class="prev page-numbers">« Previous</a>
                            <a href="#" class="page-numbers">1</a>
                            <span class="page-numbers current">2</span>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="next page-numbers">Next »</a></div>
                        </div>
                </div>
            </section>
            <!-- ad Section -->
            <div class="googleAdv">
                <a href="#"><img src="images/goodleadv.png" alt="googel ads"></a>
            </div><!-- End ad Section -->
        </div><!-- end left side content area -->
        <!-- sidebar -->
        <div class="large-4 columns">
            <aside class="secBg sidebar">
                <div class="row">
                    <!-- search Widget -->
                    <div class="large-12 medium-7 medium-centered columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>Search Videos</h5>
                            </div>
                            <form id="searchform" method="get" role="search">
                                <div class="input-group">
                                    <input class="input-group-field" type="text" placeholder="Enter your keyword">
                                    <div class="input-group-button">
                                        <input type="submit" class="button" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- End search Widget -->

                    <!-- categories -->
                    <div class="large-12 medium-7 medium-centered columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>categories</h5>
                            </div>
                            <div class="widgetContent">
                                <ul class="accordion" data-accordion>
                                    <li class="accordion-item is-active" data-accordion-item>
                                        <a href="#" class="accordion-title">Entertainment</a>
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
                                    <li class="accordion-item" data-accordion-item>
                                        <a href="#" class="accordion-title">Technology</a>
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
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="accordion-item" data-accordion-item>
                                        <a href="#" class="accordion-title">Fashion &amp; Beauty</a>
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
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="accordion-item" data-accordion-item>
                                        <a href="#" class="accordion-title">sports &amp; recreation</a>
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
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="accordion-item" data-accordion-item>
                                        <a href="#" class="accordion-title">Automotive</a>
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
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="accordion-item" data-accordion-item>
                                        <a href="#" class="accordion-title">foods &amp; drinks</a>
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
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="accordion-item" data-accordion-item>
                                        <a href="#" class="accordion-title">Peopls</a>
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
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="accordion-item" data-accordion-item>
                                        <a href="#" class="accordion-title">Nature</a>
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
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="accordion-item" data-accordion-item>
                                        <a href="#" class="accordion-title">Transportationy</a>
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
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="accordion-item" data-accordion-item>
                                        <a href="#" class="accordion-title">places &amp; landmarks</a>
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
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="accordion-item" data-accordion-item>
                                        <a href="#" class="accordion-title">Travel</a>
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
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="accordion-item" data-accordion-item>
                                        <a href="#" class="accordion-title">Animals</a>
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
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="accordion-item" data-accordion-item>
                                        <a href="#" class="accordion-title">Historicals &amp; Architectural</a>
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
                                            </ul>
                                        </div>
                                    </li>
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
                                                    <a class="prev secondary-button"><i class="fa fa-angle-left"></i></a>
                                                    <a class="next secondary-button"><i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide Videos-->
                                    <div id="owl-demo-video" class="owl-carousel carousel" data-car-length="1" data-items="1" data-loop="true" data-nav="false" data-autoplay="true" data-autoplay-timeout="3000" data-dots="false">
                                        <div class="item item-video thumb-border">
                                            <figure class="premium-img">
                                                <img src="images/widget-most2.png" alt="carousel">
                                                <a href="#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i></span>
                                                </a>
                                            </figure>
                                            <div class="video-des">
                                                <h6><a href="#">There are many variations of passage.</a></h6>
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
                                            </div>
                                        </div>

                                        <div class="item item-video thumb-border">
                                            <figure class="premium-img">
                                                <img src="images/widget-most1.png" alt="carousel">
                                                <a href="#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i></span>
                                                </a>
                                            </figure>
                                            <div class="video-des">
                                                <h6><a href="#">There are many variations of passage.</a></h6>
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
                                            </div>
                                        </div>

                                        <div class="item item-video thumb-border">
                                            <figure class="premium-img">
                                                <img src="images/widget-most3.png" alt="carousel">
                                                <a href="#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i></span>
                                                </a>
                                            </figure>
                                            <div class="video-des">
                                                <h6><a href="#">There are many variations of passage.</a></h6>
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
                                            </div>
                                        </div>

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
                                    <a href="#"><img src="images/sideradv.png" alt="sidebar adv"></a>
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
                                <div class="media-object stack-for-small">
                                    <div class="media-object-section">
                                        <div class="recent-img">
                                            <img src= "images/category/category4.png" alt="recent">
                                            <a href="#" class="hover-posts">
                                                <span><i class="fa fa-play"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-object-section">
                                        <div class="media-content">
                                            <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                            <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-object stack-for-small">
                                    <div class="media-object-section">
                                        <div class="recent-img">
                                            <img src= "images/category/category2.png" alt="recent">
                                            <a href="#" class="hover-posts">
                                                <span><i class="fa fa-play"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-object-section">
                                        <div class="media-content">
                                            <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                            <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-object stack-for-small">
                                    <div class="media-object-section">
                                        <div class="recent-img">
                                            <img src= "images/sidebar-recent1.png" alt="recent">
                                            <a href="#" class="hover-posts">
                                                <span><i class="fa fa-play"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-object-section">
                                        <div class="media-content">
                                            <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                            <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-object stack-for-small">
                                    <div class="media-object-section">
                                        <div class="recent-img">
                                            <img src= "images/sidebar-recent2.png" alt="recent">
                                            <a href="#" class="hover-posts">
                                                <span><i class="fa fa-play"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-object-section">
                                        <div class="media-content">
                                            <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                            <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Recent post videos -->

                    <!-- tags -->
                    <div class="large-12 medium-7 medium-centered columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>Tags</h5>
                            </div>
                            <div class="tagcloud">
                                <a href="#">3D Videos</a>
                                <a href="#">Videos</a>
                                <a href="#">HD</a>
                                <a href="#">Movies</a>
                                <a href="#">Sports</a>
                                <a href="#">3D</a>
                                <a href="#">Movies</a>
                                <a href="#">Animation</a>
                                <a href="#">HD</a>
                                <a href="#">Music</a>
                                <a href="#">Recreation</a>
                            </div>
                        </div>
                    </div><!-- End tags -->

                    <!--news letter-->
                    <div class="large-12 medium-7 medium-centered columns">
                        <div class="widgetBox">
                            <div class="newsLetter">
                                <h3>Newsletter Singup</h3>
                                <p>Subscribe to get exclusive videos</p>
                                <form method="post">
                                    <div class="input-group">
                                        <input class="input-group-field" type="email" placeholder="Enter your email addres">
                                        <div class="input-group-button">
                                            <input type="submit" class="button" value="Signup">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!--End news letter-->

                    <!-- twitter -->
                    <div class="large-12 medium-7 medium-centered columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>Recent Tweets</h5>
                            </div>
                            <div class="widgetContent">
                                <div class="owl-carousel carousel twitter-carousel" data-car-length="1" data-items="1" data-loop="true" data-nav="false" data-autoplay="true" data-autoplay-timeout="4000" data-dots="true">
                                    <div class="item twitter-item">
                                        <i class="fa fa-twitter-square"></i>
                                        <span>
                                            <a target="_blank" title="Follow envato_help" href="http://twitter.com/envato_help">@envato_help</a> Ok Just One question is that Your account? <a target="_blank" title="https://t.co/jtUNeYAFSV
If" href="https://t.co/jtUNeYAFSVIf">https://t.co/jtUNeYAFSV If</a> not then please bloc this ASAP.</span>
                                    </div>
                                    <div class="item twitter-item">
                                        <i class="fa fa-twitter-square"></i>
                                        <span>
                                            <a target="_blank" title="Follow envato_help" href="http://twitter.com/envato_help">@envato_help</a> Ok Just One question is that Your account? <a target="_blank" title="https://t.co/jtUNeYAFSV
If" href="https://t.co/jtUNeYAFSVIf">https://t.co/jtUNeYAFSV If</a> not then please bloc this ASAP.</span>
                                    </div>
                                    <div class="item twitter-item">
                                        <i class="fa fa-twitter-square"></i>
                                        <span>
                                            <a target="_blank" title="Follow envato_help" href="http://twitter.com/envato_help">@envato_help</a> Ok Just One question is that Your account? <a target="_blank" title="https://t.co/jtUNeYAFSV
If" href="https://t.co/jtUNeYAFSVIf">https://t.co/jtUNeYAFSV If</a> not then please bloc this ASAP.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Twitter -->

                </div>
            </aside>
        </div><!-- end sidebar -->
    </div>
</section><!-- End Category Content-->
@endsection
