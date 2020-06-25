@php
    $section = explode('/', Request::path());
    
    $aboutMe = "";
    $profileSetting = "";

    if ($section[0] === 'about-me'){
        $aboutMe = 'active';
    }else{
        $profileSetting = 'active';
    }
@endphp

{{-- {{ dd($section[1]) }} --}}

<!-- left sidebar -->
<div class="large-4 columns">
    <aside class="secBg sidebar">
        <div class="row">
            <!-- profile overview -->
            <div class="large-12 columns">
                <div class="widgetBox">
                    <div class="widgetTitle">
                        <h5>Profile Overview</h5>
                    </div>
                    <div class="widgetContent">
                        <ul class="profile-overview">
                            @if(isset(Auth::user()->id) && Auth::user()->id === $user->id)
                            <li class="clearfix"><a class="{{ $aboutMe }}" href="{{ route('about-me', Auth::user()->id) }}"><i class="fa fa-user"></i>about me</a></li>
                            <li class="clearfix"><a href="javascript:void(0)"><i class="fa fa-video-camera"></i>Videos <span class="float-right">36</span></a></li>
                            <li class="clearfix"><a href="javascript:void(0)"><i class="fa fa-heart"></i>Favorite Videos<span class="float-right">50</span></a></li>
                            <li class="clearfix"><a href="javascript:void(0)"><i class="fa fa-users"></i>Followers<span class="float-right">6</span></a></li>
                            <li class="clearfix"><a class="{{ $profileSetting }}" href="{{ route('upload-profile', Auth::user()->id) }}"><i class="fa fa-gears"></i>Profile Settings</a></li>
                            @else
                            <li class="clearfix"><a class="{{ $aboutMe }}" href="{{ route('about-me', $section[1]) }}"><i class="fa fa-user"></i>about me</a></li>
                            <li class="clearfix"><a href="javascript:void(0)"><i class="fa fa-video-camera"></i>Videos <span class="float-right">36</span></a></li>
                            <li class="clearfix"><a href="javascript:void(0)"><i class="fa fa-heart"></i>Favorite Videos<span class="float-right">50</span></a></li>
                            <li class="clearfix"><a href="javascript:void(0)"><i class="fa fa-users"></i>Followers<span class="float-right">6</span></a></li>
                            @endif
                        </ul>
                        @if(isset(Auth::user()->id) && Auth::user()->id === $user->id)
                        <a href="#" class="button"><i class="fa fa-plus-circle"></i>Post Video</a>
                        @endif
                    </div>
                </div>
            </div><!-- End profile overview -->
        </div>
    </aside>
</div><!-- end sidebar -->