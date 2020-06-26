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
                        <span class="show-for-sr">Current: </span> favorite videos
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
        <!-- single post description -->
        <section class="profile-videos">
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="heading">
                        <i class="fa fa-video-camera"></i>
                        <h4>My Videos</h4>
                    </div>
                    <div class="profile-video">
                        <div class="media-object stack-for-small">
                            <div class="media-object-section media-img-content">
                                <div class="video-img">
                                    <img src="images/video-thumbnail/4.jpg" alt="video thumbnail">
                                </div>
                            </div>
                            <div class="media-object-section media-video-content">
                                <div class="video-content">
                                    <h5><a href="#">There are many variations of passage.</a></h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore .</p>
                                </div>
                                <div class="video-detail clearfix">
                                    <div class="video-stats">
                                        <span><i class="fa fa-check-square-o"></i>published</span>
                                        <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                        <span><i class="fa fa-eye"></i>1,862K</span>
                                    </div>
                                    <div class="video-btns">
                                        <form method="post">
                                            <button type="submit" name="unfav"><i class="fa fa-heart-o"></i>Unfavorite</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-video">
                        <div class="media-object stack-for-small">
                            <div class="media-object-section media-img-content">
                                <div class="video-img">
                                    <img src="images/widget-most2.png" alt="video thumbnail">
                                </div>
                            </div>
                            <div class="media-object-section media-video-content">
                                <div class="video-content">
                                    <h5><a href="#">There are many variations of passage.</a></h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore .</p>
                                </div>
                                <div class="video-detail clearfix">
                                    <div class="video-stats">
                                        <span><i class="fa fa-check-square-o"></i>published</span>
                                        <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                        <span><i class="fa fa-eye"></i>1,862K</span>
                                    </div>
                                    <div class="video-btns">
                                        <form method="post">
                                            <button type="submit" name="unfav"><i class="fa fa-heart-o"></i>Unfavorite</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-video">
                        <div class="media-object stack-for-small">
                            <div class="media-object-section media-img-content">
                                <div class="video-img">
                                    <img src="images/fav-bike.png" alt="video thumbnail">
                                </div>
                            </div>
                            <div class="media-object-section media-video-content">
                                <div class="video-content">
                                    <h5><a href="#">There are many variations of passage.</a></h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore .</p>
                                </div>
                                <div class="video-detail clearfix">
                                    <div class="video-stats">
                                        <span><i class="fa fa-check-square-o"></i>published</span>
                                        <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                        <span><i class="fa fa-eye"></i>1,862K</span>
                                    </div>
                                    <div class="video-btns">
                                        <form method="post">
                                            <button type="submit" name="unfav"><i class="fa fa-heart-o"></i>Unfavorite</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-video">
                        <div class="media-object stack-for-small">
                            <div class="media-object-section media-img-content">
                                <div class="video-img">
                                    <img src="images/fav-guit.png" alt="video thumbnail">
                                </div>
                            </div>
                            <div class="media-object-section media-video-content">
                                <div class="video-content">
                                    <h5><a href="#">There are many variations of passage.</a></h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore .</p>
                                </div>
                                <div class="video-detail clearfix">
                                    <div class="video-stats">
                                        <span><i class="fa fa-check-square-o"></i>published</span>
                                        <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                        <span><i class="fa fa-eye"></i>1,862K</span>
                                    </div>
                                    <div class="video-btns">
                                        <form method="post">
                                            <button type="submit" name="unfav"><i class="fa fa-heart-o"></i>Unfavorite</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-video">
                        <div class="media-object stack-for-small">
                            <div class="media-object-section media-img-content">
                                <div class="video-img">
                                    <img src="images/slider-carousel5.png" alt="video thumbnail">
                                </div>
                            </div>
                            <div class="media-object-section media-video-content">
                                <div class="video-content">
                                    <h5><a href="#">There are many variations of passage.</a></h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore .</p>
                                </div>
                                <div class="video-detail clearfix">
                                    <div class="video-stats">
                                        <span><i class="fa fa-check-square-o"></i>published</span>
                                        <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                        <span><i class="fa fa-eye"></i>1,862K</span>
                                    </div>
                                    <div class="video-btns">
                                        <form method="post">
                                            <button type="submit" name="unfav"><i class="fa fa-heart-o"></i>Unfavorite</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-video">
                        <div class="media-object stack-for-small">
                            <div class="media-object-section media-img-content">
                                <div class="video-img">
                                    <img src="images/video-thumbnail/14.jpg" alt="video thumbnail">
                                </div>
                            </div>
                            <div class="media-object-section media-video-content">
                                <div class="video-content">
                                    <h5><a href="#">There are many variations of passage.</a></h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore .</p>
                                </div>
                                <div class="video-detail clearfix">
                                    <div class="video-stats">
                                        <span><i class="fa fa-check-square-o"></i>published</span>
                                        <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                        <span><i class="fa fa-eye"></i>1,862K</span>
                                    </div>
                                    <div class="video-btns">
                                        <form method="post">
                                            <button type="submit" name="unfav"><i class="fa fa-heart-o"></i>Unfavorite</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-video">
                        <div class="media-object stack-for-small">
                            <div class="media-object-section media-img-content">
                                <div class="video-img">
                                    <img src="images/slider-carousel3.png" alt="video thumbnail">
                                </div>
                            </div>
                            <div class="media-object-section media-video-content">
                                <div class="video-content">
                                    <h5><a href="#">There are many variations of passage.</a></h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore .</p>
                                </div>
                                <div class="video-detail clearfix">
                                    <div class="video-stats">
                                        <span><i class="fa fa-check-square-o"></i>published</span>
                                        <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                        <span><i class="fa fa-eye"></i>1,862K</span>
                                    </div>
                                    <div class="video-btns">
                                        <form method="post">
                                            <button type="submit" name="unfav"><i class="fa fa-heart-o"></i>Unfavorite</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="show-more-inner text-center">
                        <a href="#" class="show-more-btn">show more</a>
                    </div>
                </div>
            </div>
        </section><!-- End single post description -->
    </div><!-- end left side content area -->
</div>
@endsection
