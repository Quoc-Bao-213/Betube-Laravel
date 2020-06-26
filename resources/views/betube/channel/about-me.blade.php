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
                        <span class="show-for-sr">Current: </span> about me
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
        <section class="singlePostDescription">
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="heading">
                        <i class="fa fa-user"></i>
                        <h4>Description</h4>
                    </div>
                    <div class="description">
                    <p> {{ $user->description }}</p>
                        <div class="site profile-margin">
                            <button><i class="fa fa-globe"></i>Site</button>
                            <a href="#" class="inner-btn">www.betube.com</a>
                        </div>
                        <div class="email profile-margin">
                            <button><i class="fa fa-envelope"></i>Email</button>
                        <span class="inner-btn">{{ $user->email }}</span>
                        </div>
                        <div class="phone profile-margin">
                            <button><i class="fa fa-phone"></i>Phone</button>
                        <span class="inner-btn">{{ $user->phone }}</span>
                        </div>
                        <div class="socialLinks profile-margin">
                            <button><i class="fa fa-share-alt"></i>get socialize</button>
                            <a href="#" class="inner-btn"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="inner-btn"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="inner-btn"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="inner-btn"><i class="fa fa-flickr"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End single post description -->
    </div><!-- end left side content area -->
</div>
@endsection