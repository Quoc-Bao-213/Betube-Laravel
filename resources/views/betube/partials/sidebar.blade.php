@php
    $section = explode('/', Request::path());
    
    $aboutMe = "";
    $profileSetting = "";
    $changePassword = "";
    $channel = "";

    switch ($section[0]) {
        case 'about-me':
            $aboutMe = "active";
            break;
        case 'upload-profile':
            $profileSetting = "active";
            break;
        case 'change-pass':
            $changePassword = "active";
            break;
        case 'channel':
            $channel = "active";
            break;
        
        default:
            break;
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
                            @if($user->editable())
                            <li class="clearfix"><a class="{{ $aboutMe }}" href="{{ route('about-me', Auth::id()) }}"><i class="fa fa-user"></i>about me</a></li>
                            <li class="clearfix"><a class="{{ $channel }}" href="{{ route('channel-videos', Auth::id()) }}"><i class="fa fa-video-camera"></i>Videos <span class="float-right">{{ count($user->videos) }}</span></a></li>
                            <li class="clearfix"><a href="javascript:void(0)"><i class="fa fa-heart"></i>Favorite Videos<span class="float-right">50</span></a></li>
                            <li class="clearfix"><a href="javascript:void(0)"><i class="fa fa-users"></i>Followers<span class="float-right">6</span></a></li>
                            <li class="clearfix"><a class="{{ $profileSetting }}" href="{{ route('upload-profile', Auth::user()->id) }}"><i class="fa fa-gears"></i>Profile Settings</a></li>
                            <li class="clearfix"><a href="{{ route('change-password') }}"><i class="fa fa-lock"></i>change password</a></li>
                            @else
                            <li class="clearfix"><a class="{{ $aboutMe }}" href="{{ route('about-me', $section[1]) }}"><i class="fa fa-user"></i>about me</a></li>
                            <li class="clearfix"><a class="{{ $channel }}" href="{{ route('channel-videos', $section[1]) }}"><i class="fa fa-video-camera"></i>Videos <span class="float-right">{{ count($user->videos) }}</span></a></li>
                            <li class="clearfix"><a href="javascript:void(0)"><i class="fa fa-heart"></i>Favorite Videos<span class="float-right">50</span></a></li>
                            <li class="clearfix"><a href="javascript:void(0)"><i class="fa fa-users"></i>Followers<span class="float-right">6</span></a></li>
                            @endif
                        </ul>
                        @if($user->editable())
                        <a href="{{ route('upload-video', Auth::user()->id) }}" class="button"><i class="fa fa-plus-circle"></i>Post Video</a>
                        @endif
                    </div>
                </div>
            </div><!-- End profile overview -->
        </div>
    </aside>
</div><!-- end sidebar -->