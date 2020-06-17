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
                    <li><a href="profile-page-v2.html">profile</a></li>
                    <li>
                        <span class="show-for-sr">Current: </span> my videos
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section><!--end breadcrumbs-->

<!-- profile top section -->
<section class="topProfile">
    <div class="main-text text-center">
        <div class="row">
            <div class="large-12 columns">
                <h3>World’s Biggest</h3>
                <h1>Powerfull Video Theme</h1>
            </div>
        </div>
    </div>
    <div class="profile-stats">
        <div class="row secBg">
            <div class="large-12 columns">
                <div class="profile-author-img">
                    <img src="images/profile-auth-img.png" alt="profile author img">
                </div>
                <div class="profile-subscribe">
                    <span><i class="fa fa-users"></i>6</span>
                    <button type="submit" name="subscribe">subscribe</button>
                </div>
                <div class="profile-share">
                    <div class="easy-share" data-easyshare data-easyshare-http data-easyshare-url="http://joinwebs.com/">
                        <!-- Facebook -->
                        <button data-easyshare-button="facebook">
                            <span class="fa fa-facebook"></span>
                            <span>Share</span>
                        </button>
                        <span data-easyshare-button-count="facebook">0</span>

                        <!-- Twitter -->
                        <button data-easyshare-button="twitter" data-easyshare-tweet-text="">
                            <span class="fa fa-twitter"></span>
                            <span>Tweet</span>
                        </button>
                        <span data-easyshare-button-count="twitter">0</span>

                        <!-- Google+ -->
                        <button data-easyshare-button="google">
                            <span class="fa fa-google-plus"></span>
                            <span>+1</span>
                        </button>
                        <span data-easyshare-button-count="google">0</span>

                        <div data-easyshare-loader>Loading...</div>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="profile-author-name float-left">
                        <h4>Joseph John</h4>
                        <p>Join Date : <span>5 January 16</span></p>
                    </div>
                    <div class="profile-author-stats float-right">
                        <ul class="menu">
                            <li>
                                <div class="icon float-left">
                                    <i class="fa fa-video-camera"></i>
                                </div>
                                <div class="li-text float-left">
                                    <p class="number-text">36</p>
                                    <span>Videos</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon float-left">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="li-text float-left">
                                    <p class="number-text">50</p>
                                    <span>favorites</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon float-left">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="li-text float-left">
                                    <p class="number-text">6</p>
                                    <span>followers</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End profile top section -->
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
                                        <a class="video-btn" href="#"><i class="fa fa-pencil-square-o"></i>edit</a>
                                        <a class="video-btn" href="#"><i class="fa fa-trash"></i>delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-video">
                        <div class="media-object stack-for-small">
                            <div class="media-object-section media-img-content">
                                <div class="video-img">
                                    <img src="images/slider-carousel1.png" alt="video thumbnail">
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
                                        <a class="video-btn" href="#"><i class="fa fa-pencil-square-o"></i>edit</a>
                                        <a class="video-btn" href="#"><i class="fa fa-trash"></i>delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-video">
                        <div class="media-object stack-for-small">
                            <div class="media-object-section media-img-content">
                                <div class="video-img">
                                    <img src="images/video-foo.png" alt="video thumbnail">
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
                                        <a class="video-btn" href="#"><i class="fa fa-pencil-square-o"></i>edit</a>
                                        <a class="video-btn" href="#"><i class="fa fa-trash"></i>delete</a>
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
                                        <a class="video-btn" href="#"><i class="fa fa-pencil-square-o"></i>edit</a>
                                        <a class="video-btn" href="#"><i class="fa fa-trash"></i>delete</a>
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
                                        <a class="video-btn" href="#"><i class="fa fa-pencil-square-o"></i>edit</a>
                                        <a class="video-btn" href="#"><i class="fa fa-trash"></i>delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-video">
                        <div class="media-object stack-for-small">
                            <div class="media-object-section media-img-content">
                                <div class="video-img">
                                    <img src="images/video-thumbnail/6.jpg" alt="video thumbnail">
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
                                        <a class="video-btn" href="#"><i class="fa fa-pencil-square-o"></i>edit</a>
                                        <a class="video-btn" href="#"><i class="fa fa-trash"></i>delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <a class="video-btn" href="#"><i class="fa fa-pencil-square-o"></i>edit</a>
                                        <a class="video-btn" href="#"><i class="fa fa-trash"></i>delete</a>
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