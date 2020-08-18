@extends('betube.layout.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/jquery.kyco.easyshare.css') }}">
    <style>
        .page-item{
            display:inline-block;
            
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
                        <span class="show-for-sr">Current: </span> subscribers
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
                        <h4 class="pull-left"><i class="fa fa-users"></i>Subscriptions</h4>
                    </div>
                    <div class="row collapse">
                        @foreach($user->subscriptions as $subscriber)
                        <div class="small-3 large-3 columns">
                            <div class="follower">
                                <div class="follower-img">
                                    <a href="{{ route('channel-videos', $subscriber->user_subscribe ) }}"><img src="{{ App\Http\Controllers\ProfileController::getAvatarSubscribers($subscriber->user_subscribe) }}" alt="post"></a>
                                </div>
                            <span style="height:auto">
                                <a href="{{ route('channel-videos', $subscriber->user_subscribe ) }}">
                                    @php
                                        echo App\Http\Controllers\ProfileController::getNameSubscribers($subscriber->user_subscribe);
                                    @endphp
                                </a>
                            </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div><!-- end left side content area -->
</div>
@endsection
