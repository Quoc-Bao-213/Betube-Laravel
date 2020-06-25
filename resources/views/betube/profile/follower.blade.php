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
                        <span class="show-for-sr">Current: </span> followers
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
        <!-- followers -->
        <section class="content content-with-sidebar followers margin-bottom-10">
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="row column head-text clearfix">
                        <h4 class="pull-left"><i class="fa fa-users"></i>Followers</h4>
                    </div>
                    <div class="row collapse">
                        <div class="large-2 small-6 medium-3 columns">
                            <div class="follower">
                                <div class="follower-img">
                                    <img src="images/follower-img.png" alt="followers">
                                </div>
                                <span>Frank Wright</span>
                                <button type="submit" name="follow">Subscribe</button>
                            </div>
                        </div>
                        <div class="large-2 small-6 medium-3 columns">
                            <div class="follower">
                                <div class="follower-img">
                                    <img src="images/follower2.png" alt="followers">
                                </div>
                                <span>Frank Wright</span>
                                <button type="submit" name="follow">Subscribe</button>
                            </div>
                        </div>
                        <div class="large-2 small-6 medium-3 columns">
                            <div class="follower">
                                <div class="follower-img">
                                    <img src="images/follower3.png" alt="followers">
                                </div>
                                <span>Frank Wright</span>
                                <button type="submit" name="follow">Subscribe</button>
                            </div>
                        </div>
                        <div class="large-2 small-6 medium-3 columns">
                            <div class="follower">
                                <div class="follower-img">
                                    <img src="images/follower4.png" alt="followers">
                                </div>
                                <span>Frank Wright</span>
                                <button type="submit" name="follow">Subscribe</button>
                            </div>
                        </div>
                        <div class="large-2 small-6 medium-3 columns">
                            <div class="follower">
                                <div class="follower-img">
                                    <img src="images/follower5.png" alt="followers">
                                </div>
                                <span>Frank Wright</span>
                                <button type="submit" name="follow">Subscribe</button>
                            </div>
                        </div>
                        <div class="large-2 small-6 medium-3 columns">
                            <div class="follower">
                                <div class="follower-img">
                                    <img src="images/follower66.png" alt="followers">
                                </div>
                                <span>Frank Wright</span>
                                <button type="submit" name="follow">Subscribe</button>
                            </div>
                        </div>
                        <div class="large-2 small-6 medium-3 columns">
                            <div class="follower">
                                <div class="follower-img">
                                    <img src="images/follower-img.png" alt="followers">
                                </div>
                                <span>Frank Wright</span>
                                <button type="submit" name="follow">Subscribe</button>
                            </div>
                        </div>
                        <div class="large-2 small-6 medium-3 columns">
                            <div class="follower">
                                <div class="follower-img">
                                    <img src="images/follower2.png" alt="followers">
                                </div>
                                <span>Frank Wright</span>
                                <button type="submit" name="follow">Subscribe</button>
                            </div>
                        </div>
                        <div class="large-2 small-6 medium-3 columns">
                            <div class="follower">
                                <div class="follower-img">
                                    <img src="images/follower3.png" alt="followers">
                                </div>
                                <span>Frank Wright</span>
                                <button type="submit" name="follow">Subscribe</button>
                            </div>
                        </div>
                        <div class="large-2 small-6 medium-3 columns">
                            <div class="follower">
                                <div class="follower-img">
                                    <img src="images/follower4.png" alt="followers">
                                </div>
                                <span>Frank Wright</span>
                                <button type="submit" name="follow">Subscribe</button>
                            </div>
                        </div>
                        <div class="large-2 small-6 medium-3 columns">
                            <div class="follower">
                                <div class="follower-img">
                                    <img src="images/follower5.png" alt="followers">
                                </div>
                                <span>Frank Wright</span>
                                <button type="submit" name="follow">Subscribe</button>
                            </div>
                        </div>
                        <div class="large-2 small-6 medium-3 columns">
                            <div class="follower">
                                <div class="follower-img">
                                    <img src="images/follower66.png" alt="followers">
                                </div>
                                <span>Frank Wright</span>
                                <button type="submit" name="follow">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="show-more-inner text-center">
                    <a href="#" class="show-more-btn">show more</a>
                </div>
            </div>
        </section>
    </div><!-- end left side content area -->
</div>
@endsection
