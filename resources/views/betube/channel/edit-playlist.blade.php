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

@php
    $thumbnailPlaylist = '';
    foreach($playlistDetails->sortBy('created_at')->take(1) as $getThumbnail)
        $thumbnailPlaylist = $getThumbnail->videos->thumbnail;
@endphp

<edit-playlist thumbnail-playlist="{{ $thumbnailPlaylist }}" :default-playlist="{{ $playlist }}" :playlist-detail="{{ $playlistDetails->sortBy('created_at') }}" user-avatar="{{ $user->avatar() }}" :user="{{ $user }}"></edit-playlist>

@endsection