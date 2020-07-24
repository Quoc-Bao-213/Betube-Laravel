@extends('betube.layout.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/jquery.kyco.easyshare.css') }}">
    <style>
        .widgetBox .playlist-thumb {
            position: relative;
        }
        .widgetBox .playlist-thumb .playlist-thumb-text {
            position: absolute;
            background: rgba(0, 0, 0, 0.5);
            bottom: 0;
            left: 0;
            width: 100%;
            color: white;
            font-size: 1em;
        }
        .count-video-playlist span{
            font-size: 15px;
        }
        .icon-video-playlist a i{
            color: #8E8E8E;
            margin-right: 1em;
        }
        .playlist-form-submit{
            background: #79D255; 
            width: 100%; 
            padding: 12px;
            transition: all ease 0.5s;
        }
        .playlist-form-submit:hover{
            background: white;
            color: #79D255;
            border: 1px solid #79D255;
        }
    </style>
@endsection

@section('content')
<section id="breadcrumb">
    <div class="row">
        <div class="large-12 columns">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home"></i><a href="{{ route('home') }}">Home</a></li>
                    <li>
                        <span class="show-for-sr">Current: </span> edit playlist
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section><!--end breadcrumbs-->

<div class="row">

    <!-- left sidebar -->
    <div class="large-4 columns" style="margin-top: 30px">
        <aside class="secBg sidebar">
            <div class="row">
                <!-- profile overview -->
                <div class="large-12 columns">
                    <div class="widgetBox">
                        <div class="playlist-thumb">
                            <a href="#">
                                @foreach($playlistDetails->take(1) as $getThumbnail)
                                <img src="{{ $getThumbnail->videos->thumbnail }}" width="320" height="230" alt="thumbnail">
                                @endforeach
                                <div class="text-center playlist-thumb-text"><i style="margin-right: 10px" class="fa fa-play"></i>Play all</div>
                            </a>
                        </div>
                        <form action="" method="POST">
                            <input style="margin-top: 20px;" type="text" value="{{ $playlist->name }}" placeholder="Name playlist">
                            <p class="playlist-thumb count-video-playlist">
                                <span>{{ count($playlistDetails) }} videos •</span>
                                {{-- Tam Thoi --}}
                                <span>Updated Today</span> 
                                {{-- Tam Thoi --}}
                            </p>
                            {{-- Tam Thoi --}}
                            <p class="playlist-thumb icon-video-playlist">
                                <a href="#"><i class="fa fa-share"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            </p>
                            {{-- Tam Thoi --}}
                            <p>
                                <input type="text" value="{{ $playlist->description }}" placeholder="No Description">
                            </p>
                            <a href="" class="button playlist-form-submit">Submit</a>
                        </form>
                        <div style="margin-top:15px;">
                            <div class="thumbnail author-single-post">
                                <a href="{{ route('about-me', $user->id) }}">
                                    <img src="{{ $user->avatar() }}" width="50" height="50" alt="post">
                                </a>
                            </div>
                            <a href="#" style="margin-left: 10px;">{{ $user->channel_name }}</a>
                        </div>
                    </div>
                </div><!-- End profile overview -->
            </div>
        </aside>
    </div><!-- end sidebar -->

    <!-- right side content area -->
    <div class="large-8 columns profile-inner" style="margin-top: 30px">
        <!-- single post description -->
        <section class="profile-videos">
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="heading">
                        <i class="fa fa-list-ul"></i>
                        <h4>Edit Playlist</h4>
                    </div>
                    @foreach($playlistDetails as $playlistDetail)
                    <div class="profile-video">
                        <div class="media-object stack-for-small">
                            <div class="media-object-section media-img-content">
                                <div class="video-img">
                                    <img src="{{ $playlistDetail->videos->thumbnail }}" alt="video thumbnail">
                                </div>
                            </div>
                            <div class="media-object-section media-video-content" style="width: 100%;">
                                <div style="border-bottom: none" class="video-content">
                                    <h5><a href="{{ route('video', $playlistDetail->videos->id) }}">{{ $playlistDetail->videos->title }}</a></h5>
                                    <p>{{ $playlistDetail->videos->user->channel_name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                 </div>
            </div>
        </section><!-- End single post description -->
    </div><!-- end left side content area -->
</div>
@endsection