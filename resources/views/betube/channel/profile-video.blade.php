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
                        <span class="show-for-sr">Current: </span> my videos
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
                        <h4>My Videos</h4>
                        @if(session('success'))
                        <h5 style="color: #38c172; !important; text-align: center; margin-bottom: 0.5rem">
                            {{ session('success') }}
                        </h5>
                        @endif
                    </div>
                    @foreach($videos as $video)
                    <div class="profile-video">
                        <div class="media-object stack-for-small">
                            <div class="media-object-section media-img-content">
                                <div class="video-img">
                                    <img src="{{ $video->thumbnail }}" alt="video thumbnail">
                                </div>
                            </div>
                            <div class="media-object-section media-video-content" style="width: 100%;">
                                <div class="video-content">
                                    <h5><a href="{{ route('video', $video->id) }}">{{ $video->title }}</a></h5>
                                    <p>{{ $video->description }}</p>
                                </div>
                                <div class="video-detail clearfix">
                                    <div class="video-stats">
                                        <span><i class="fa fa-check-square-o"></i>published</span>
                                        <span><i class="fa fa-clock-o"></i>{{ $video->created_at->toFormattedDateString() }}</span>
                                        <span><i class="fa fa-eye"></i>{{ $video->total_views }}</span>
                                    </div>
                                    @if ($user->editable())
                                    <div class="video-btns">
                                        <a class="video-btn" href="{{ route('update-video', $video->id) }}"><i class="fa fa-pencil-square-o"></i>edit</a>
                                        <a class="video-btn" data-open="exampleModal2" href="javascipt:void(0)"><i class="fa fa-trash"></i>delete</a>
                                        
                                        <!-- This is the first modal -->
                                        <div class="reveal" id="exampleModal2" data-reveal>
                                            <h1 class="text-center">Are You Sure?</h1>
                                            <a href="{{ route('action-delete-video', $video->id) }}" class="button" style="margin-left: 11rem; padding: 17px 38px">OK</a>
                                            <button class="button" data-close>Cancel</button>
                                            <button class="close-button" data-close aria-label="Close reveal" type="button">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                    @endif
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