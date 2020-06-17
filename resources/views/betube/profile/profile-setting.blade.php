@extends('betube.layout.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/jquery.kyco.easyshare.css') }}">
@endsection

@section('content')
<!--breadcrumbs-->
<section id="breadcrumb">
    <div class="row">
        <div class="large-12 columns">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home"></i><a href="home-v1.html">Home</a></li>
                    <li><a href="profile-page-v2.html">profile</a></li>
                    <li>
                        <span class="show-for-sr">Current: </span> profile setting
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section><!--end breadcrumbs-->

<!-- profile top section -->
<section class="topProfile topProfile-inner" style="background: url('images/profile-bg1.png') no-repeat;">
    <div class="row">
        <div class="large-12 columns">
            <div class="upload-bg">
                <form method="post">
                    <label for="topfileupload" class="btn-upload"><i class="fa fa-camera"></i><span>update cover image</span></label>
                    <input type="file" id="topfileupload" class="show-for-sr">
                </form>
            </div>
        </div>
    </div>
    <div class="main-text">
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
                    <form method="post">
                        <label for="imgfileupload" class="btn-upload"><i class="fa fa-camera"></i><span>update Avatar</span></label>
                        <input type="file" id="imgfileupload" class="show-for-sr">
                    </form>
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
                            <li>
                                <div class="icon float-left">
                                    <i class="fa fa-comments-o"></i>
                                </div>
                                <div class="li-text float-left">
                                    <p class="number-text">26</p>
                                    <span>comments</span>
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
        <!-- profile settings -->
        <section class="profile-settings">
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="heading">
                        <i class="fa fa-gears"></i>
                        <h4>profile Settings</h4>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <div class="setting-form">
                                <form method="post">
                                    <div class="setting-form-inner">
                                        <div class="row">
                                            <div class="large-12 columns">
                                                <h6 class="borderBottom">Username Setting:</h6>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>First Name:
                                                    <input type="text" placeholder="enter your first name..">
                                                </label>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>Last Name:
                                                    <input type="text" placeholder="enter your last name..">
                                                </label>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>Nick Name:
                                                    <input type="text" placeholder="enter your nick name..">
                                                </label>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>Display Name:
                                                    <input type="text" placeholder="select your display name">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-form-inner">
                                        <div class="row">
                                            <div class="large-12 columns">
                                                <h6 class="borderBottom">Update Password:</h6>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>New Password:
                                                    <input type="password" placeholder="enter your new password..">
                                                </label>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>Retype Password:
                                                    <input type="password" placeholder="enter your new password..">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-form-inner">
                                        <div class="row">
                                            <div class="large-12 columns">
                                                <h6 class="borderBottom">About Me:</h6>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>Email ID:
                                                    <input type="email" placeholder="enter your email address..">
                                                </label>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>Website URL:
                                                    <input type="url" placeholder="enter your website url..">
                                                </label>
                                            </div>
                                            <div class="medium-6 columns end">
                                                <label>Phone No:
                                                    <input type="tel" placeholder="enter your website url..">
                                                </label>
                                            </div>
                                            <div class="medium-12 columns">
                                                <label>Bio Description:
                                                    <textarea></textarea>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-form-inner">
                                        <div class="row">
                                            <div class="large-12 columns">
                                                <h6 class="borderBottom">Social Profile links:</h6>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>facebook:
                                                    <input type="url" placeholder="enter your profile link..">
                                                </label>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>twitter:
                                                    <input type="url" placeholder="enter your profile link..">
                                                </label>
                                            </div>
                                            <div class="medium-6 columns end">
                                                <label>Google Plus:
                                                    <input type="url" placeholder="enter your profile link..">
                                                </label>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>Youtube:
                                                    <input type="url" placeholder="enter your profile link..">
                                                </label>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>vimeo:
                                                    <input type="url" placeholder="enter your profile link..">
                                                </label>
                                            </div>
                                            <div class="medium-6 columns end">
                                                <label>Pinterest:
                                                    <input type="url" placeholder="enter your profile link..">
                                                </label>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>Instagram:
                                                    <input type="url" placeholder="enter your profile link..">
                                                </label>
                                            </div>
                                            <div class="medium-6 columns end">
                                                <label>Linkedin:
                                                    <input type="url" placeholder="enter your profile link..">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-form-inner">
                                        <button class="button expanded" type="submit" name="setting">update now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End profile settings -->
    </div><!-- end left side content area -->
</div>
@endsection
