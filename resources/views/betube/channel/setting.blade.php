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
                    <li><i class="fa fa-home"></i><a href="{{ route('home') }}">Home</a></li>
                    <li>
                        <span class="show-for-sr">Current: </span> profile setting
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section><!--end breadcrumbs-->

<!-- profile top section -->
<section class="topProfile topProfile-inner" style="background: url('{{ $user->cover() }}') no-repeat;background-size: cover;">
    <div class="row">
        <div class="large-12 columns">
            <div class="upload-bg">
                <form id="update-channel-forms" action="{{ route('action-upload-cover', Auth::user()->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="topfileupload" class="btn-upload"><i class="fa fa-camera"></i><span>update cover image</span></label>
                    <input onchange="document.getElementById('update-channel-forms').submit()" type="file" name="image_cover" id="topfileupload" class="show-for-sr">
                </form>
            </div>
        </div>
    </div>
    {{-- <div class="main-text">
        <div class="row">
            <div class="large-12 columns">
                <h3>World’s Biggest</h3>
                <h1>Powerfull Video Theme</h1>
            </div>
        </div>
    </div> --}}
    <div class="profile-stats">
        <div class="row secBg">
            <div class="large-12 columns">
                <div class="profile-author-img">
                    <img src="{{ $user->avatar() }}" alt="profile author img">
                    <form id="update-channel-form" action="{{ route('action-upload-avatar', Auth::user()->id ) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="imgfileupload" class="btn-upload"><i class="fa fa-camera"></i><span>update Avatar</span></label>
                        <input onchange="document.getElementById('update-channel-form').submit()" type="file" name="image_avatar" id="imgfileupload" class="show-for-sr">
                    </form>
                </div>

                <subscribe-button :channel="{{ $user }}" :initial-subscriptions="{{ $user->subscriptions }}" inline-template>
                    <div class="profile-subscribe" style="margin-left: 30px">
                        <span><i class="fa fa-users"></i>@{{ count }}</span>                   
                        <button @click="toggleSubscription" v-if="owner === false && subscribed === false" name="subscribe">
                            @{{ owner ? '' : subscribed ? 'Unsubscribe' : 'Subscribe' }}
                        </button>
                        <button @click="toggleSubscription" style="background: #e96969" v-else-if="owner === false && subscribed === true" name="subscribe">
                            @{{ owner ? '' : subscribed ? 'Unsubscribe' : 'Subscribe' }}
                        </button>
                        <span v-else class="button-subscriber">Subscriber</span>                   
                    </div>
                </subscribe-button>
                
                {{-- <div class="profile-share">
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
                </div> --}}

                <div class="clearfix">
                    <div class="profile-author-name float-left">
                        <h4>
                            @if($user->channel_name)
                                {{ $user->channel_name }}
                            @else
                            {{  $user->name }}
                            @endif
                        </h4>
                        <p>Join Date : <span>{{ $user->created_at->toFormattedDateString() }}</span></p>
                    </div>
                    <div class="profile-author-stats float-right">
                        <ul class="menu">
                            <li>
                                <div class="icon float-left">
                                    <i class="fa fa-video-camera"></i>
                                </div>
                                <div class="li-text float-left">
                                    <p class="number-text">{{ count($user->videos) }}</p>
                                    <span>Videos</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon float-left">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="li-text float-left">
                                    <p class="number-text">{{ count($user->playlists) }}</p>
                                    <span>playlist</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon float-left">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="li-text float-left">
                                    <p class="number-text">{{ count($user->subscriptions) }}</p>
                                    <span>subscribers</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon float-left">
                                    <i class="fa fa-comments-o"></i>
                                </div>
                                <div class="li-text float-left">
                                    <p class="number-text">{{ count($user->comments) }}</p>
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
                        <h4>Profile Settings</h4>
                        @if(session('success'))
                        <h5 style="color: #28a745 !important; text-align: center; margin-bottom: 0.5rem">
                            {{ session('success') }}
                        </h5>
                        @endif
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <div class="setting-form">
                                <form method="POST" action="{{ route('action-upload-profile', Auth::user()->id ) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="setting-form-inner">
                                        <div class="row">
                                            <div class="large-12 columns">
                                                <h6 class="borderBottom">Username Setting:</h6>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label> Name:
                                                <input type="text" name="name" value="{{ $user->name }}" placeholder="Enter your name.." style="margin-bottom: 5px;">
                                                </label>
                                                @if ($errors->first('name'))
                                                    <span style="color: #e96969; font-size: 0.9em">{{ $errors->first('name') }}</span>
                                                @else
                                                    <span style="color: #e96969; font-size: 0.9em">*The Name field is required.</span>
                                                @endif
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>Channel Name:
                                                    <input type="text" name="channel_name" value="{{ $user->channel_name }}"  placeholder="Enter your channel name.." style="margin-bottom: 5px;">
                                                </label>
                                                @if ($errors->first('channel_name'))
                                                    <span style="color: #e96969; font-size: 0.9em">{{ $errors->first('channel_name') }}</span>
                                                @else
                                                    <span style="color: #e96969; font-size: 0.9em">*The Channel Name field is required.</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-form-inner">
                                        <div class="row">
                                            <div class="large-12 columns">
                                                <h6 class="borderBottom">About Me:</h6>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>Email:
                                                    <input type="email" name="email" value="{{ $user->email }}" disabled placeholder="Enter your email address..">
                                                </label>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>Website URL:
                                                    <input type="url" placeholder="Enter your website url.." disabled>
                                                </label>
                                            </div>
                                            <div class="medium-6 columns end">
                                                <label>Phone:
                                                <input type="tel" name="phone" value="{{ $user->phone }}" placeholder="Enter your phone.." style="margin-bottom: 5px;">
                                                </label>
                                                <span style="color: #e96969; font-size: 0.9em">{{ $errors->first('phone') }}</span>
                                            </div>
                                            <div class="medium-12 columns">
                                                <label>Description:
                                                    <textarea name="description">{{ $user->description }}</textarea>
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
                                                    <input type="url" placeholder="Enter your profile link.." disabled>
                                                </label>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>twitter:
                                                    <input type="url" placeholder="Enter your profile link.." disabled>
                                                </label>
                                            </div>
                                            <div class="medium-6 columns end">
                                                <label>Google Plus:
                                                    <input type="url" placeholder="Enter your profile link.." disabled>
                                                </label>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>Youtube:
                                                    <input type="url" placeholder="Enter your profile link.." disabled>
                                                </label>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>vimeo:
                                                    <input type="url" placeholder="Enter your profile link.." disabled>
                                                </label>
                                            </div>
                                            <div class="medium-6 columns end">
                                                <label>Pinterest:
                                                    <input type="url" placeholder="Enter your profile link.." disabled>
                                                </label>
                                            </div>
                                            <div class="medium-6 columns">
                                                <label>Instagram:
                                                    <input type="url" placeholder="Enter your profile link.." disabled>
                                                </label>
                                            </div>
                                            <div class="medium-6 columns end">
                                                <label>Linkedin:
                                                    <input type="url" placeholder="Enter your profile link.." disabled>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-form-inner">
                                        <button class="button expanded" type="submit">update now</button>
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
