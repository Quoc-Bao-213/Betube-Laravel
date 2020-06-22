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
                    <li><i class="fa fa-home"></i><a href="#">Home</a></li>
                    <li><a href="#">profile</a></li>
                    <li>
                        <span class="show-for-sr">Current: </span> submit post
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section><!--end breadcrumbs-->

<!-- profile top section -->
<section class="topProfile topProfile-inner" style="background: url('images/profile-bg1.png') no-repeat;">
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
        <section class="submit-post">
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="heading">
                        <i class="fa fa-pencil-square-o"></i>
                        <h4>Add new video Post</h4>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">

                            <form data-abide novalidate>
                                <div data-abide-error class="alert callout" style="display: none;">
                                    <p><i class="fa fa-exclamation-triangle"></i>
                                        There are some errors in your form.</p>
                                </div>
                                <div class="row">
                                    <div class="large-12 columns">
                                        <label>Title
                                            <input type="text" placeholder="enter you video title..." required>
                                            <span class="form-error">
                                                Yo, you had better fill this out, it's required.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="large-12 columns">
                                        <label>Description
                                            <textarea></textarea>
                                        </label>
                                    </div>
                                    <div class="large-12 columns">
                                        <h6 class="borderBottom">Choose Video Method:</h6>
                                        <p><strong>Note:</strong> Please choose one of the following ways to embed the video into your post, the video is determined in the order: Video Code > Video URL > Video File.</p>
                                    </div>
                                    <div class="large-12 columns">
                                        <div class="radio">
                                           <input type="radio" value="check" name="videolink" id="videolink1" checked>
                                           <label class="customLabel" for="videolink1">Video Link From Youtube/Vimeo etc..</label>
                                           <input type="radio" value="check" name="videolink" id="videolink2">
                                           <label class="customLabel" for="videolink2">Custom Video Upload / Put custom Video URL </label>
                                           <input type="radio" value="check" name="videolink" id="videolink3">
                                           <label class="customLabel" for="videolink3">Embed/Object Code</label>
                                        </div>
                                    </div>
                                    <div class="large-12 columns">
                                        <label>Put here your video url with proper extension:
                                            <input type="url" placeholder="for example:http://yoursite.com/sample-video.mp4">
                                        </label>
                                        <h6>OR</h6>
                                        <div class="upload-video">
                                            <label for="videoUpload" class="button">Upload File</label>
                                            <input type="file" id="videoUpload" class="show-for-sr">
                                            <span>No file chosen</span>
                                        </div>
                                        <p class="extraMargin">Paste your video file url to here. Supported Video Formats: mp4, m4v, webmv, webm, ogv and flv. About Cross-platform and Cross-browser Support. If you want your video works in all platforms and browsers(HTML5 and Flash), you should provide various video formats for same video, if the video files are ready, enter one url per line. For Example: http://yousite.com/sample-video.m4v http://yousite.com/sample-video.ogv Recommended Format Solution: webmv + m4v + ogv.</p>
                                    </div>
                                    <div class="large-12 columns">
                                        <div class="post-meta">
                                            <label>Meta Title:
                                                <textarea placeholder="enter meta title"></textarea>
                                            </label>
                                            <p>IF you want to put your custom meta Title then put here otherwise your post title will be the default meta Title</p>
                                        </div>
                                        <div class="post-meta">
                                            <label>Meta Description:
                                                <textarea placeholder="enter meta Description"></textarea>
                                            </label>
                                            <p>IF you want to put your custom meta description then put here otherwise your post description will be the default meta description</p>
                                        </div>
                                        <div class="post-meta">
                                            <label>Meta keywords:
                                                <textarea placeholder="enter meta keywords"></textarea>
                                            </label>
                                            <p>IF you want to put your custom meta Keywords then put here otherwise your post Keywords will be the default meta Keywords</p>
                                        </div>
                                        <div class="post-category">
                                            <label>Choose Video Category:
                                                <select>
                                                    <option value="">one</option>
                                                    <option value="">two</option>
                                                    <option value="">three</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="upload-video">
                                            <label for="imgUpload" class="button">Upload Image</label>
                                            <input type="file" id="imgUpload" class="show-for-sr">
                                            <span>No file chosen</span>
                                        </div>
                                    </div>
                                    {{-- <div class="large-12 columns">
                                        <div class="video-sprite clearfix">
                                            <div class="video-layout">
                                                <input type="radio" id="radio-img-1" name="radio-btns-sprite">
                                                <label for="radio-img-1" class="fullwidth">fullwidth</label>
                                                <span>Full-width</span>
                                            </div>
                                            <div class="video-layout">
                                                <input type="radio" id="radio-img-2" name="radio-btns-sprite" checked>
                                                <label for="radio-img-2" class="standard">standard</label>
                                                <span>Standarad</span>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="large-12 columns">
                                        <label>Tags:
                                            <input type="text" placeholder="enter video tags.." required>
                                        </label>
                                    </div>
                                    <div class="large-12 columns">
                                        <button class="button expanded" type="submit" name="submit">publish now</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End profile settings -->
    </div><!-- end left side content area -->
</div>
@endsection