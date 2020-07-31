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
                        <span class="show-for-sr">Current: </span> playlist
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
                        <h4>Playlist</h4>
                    </div>
                    @if (!empty($playlists))
                        @foreach($playlists as $playlist)
                            <div class="profile-video">
                                <div class="media-object stack-for-small">
                                    <div class="media-object-section media-img-content">
                                        <div class="video-img">
                                            @if (isset($playlist->videos[0]->thumbnail))
                                                <img src="{{ $playlist->videos[0]->thumbnail }}" alt="video thumbnail">
                                            @else
                                                <img src="{{ asset('../images/playlist.jpg') }}" alt="video thumbnail">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="media-object-section media-video-content" style="width: 100%;">
                                        <div style="border-bottom: none" class="video-content">
                                            <h5><a href="{{ route('edit-playlist', $playlist->id) }}">{{ $playlist->name }}</a></h5>
                                            <p>{{ $playlist->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-center">No Playlist Found :)</p>
                    @endif
                </div>
            </div>
        </section><!-- End single post description -->
    </div><!-- end left side content area -->
</div>
@endsection