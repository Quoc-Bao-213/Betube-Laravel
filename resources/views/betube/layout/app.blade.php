<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeTube video</title>
    <link rel="stylesheet" href="{{ asset('css/appcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('layerslider/css/layerslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    @yield('style')
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    @yield('styles')
</head>
<body>
<div class="off-canvas-wrapper" id="app">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <!--header-->
        <div class="off-canvas position-left light-off-menu" id="offCanvas-responsive" data-off-canvas>
            <div class="off-menu-close">
                <h3>Menu</h3>
                <span data-toggle="offCanvas-responsive"><i class="fa fa-times"></i></span>
            </div>
            <ul class="vertical menu off-menu" data-responsive-menu="drilldown">
                <li class="has-submenu">
                    <a href="home-v1.html"><i class="fa fa-home"></i>Home</a>
                </li>
                <li class="has-submenu" data-dropdown-menu="example1">
                    <a href="#"><i class="fa fa-film"></i>Videos</a>        
                </li>
                <li><a href="categories.html"><i class="fa fa-th"></i>category</a></li>
                <li><a href="about-us.html"><i class="fa fa-user"></i>about</a></li>
                <li><a href="contact-us.html"><i class="fa fa-envelope"></i>contact</a></li>
            </ul>
            <div class="responsive-search">
                <form method="post">
                    <div class="input-group">
                        <input class="input-group-field" type="text" placeholder="search Here">
                        <div class="input-group-button">
                            <button type="submit" name="search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="off-social">
                <h6>Get Socialize</h6>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-vimeo"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
            <div class="top-button">
                <ul class="menu">
                    <li>
                        <a href="submit-post.html">upload Video</a>
                    </li>
                    <li class="dropdown-login">
                        <a href="login.html">login/Register</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="off-canvas-content" data-off-canvas-content>

            @include('betube.partials.header')

            <!-- End Header -->

            @yield('content')
          
            @include('betube.partials.footer')

        </div><!--end off canvas content-->
    </div><!--end off canvas wrapper inner-->    
</div><!--end off canvas wrapper-->
@php
    if (auth()->user() ) {
        $isLogined = auth()->user() ;
    }    else{
        $isLogined = null;
    }
@endphp

<script>
    window.AuthUser = {!! $isLogined !!}

    stringifyAuthUser = JSON.stringify(window.AuthUser);
    window.__auth = function() {
        try {
            return JSON.parse(stringifyAuthUser)
        } catch(error) {
            return null
        }
    }
</script>

<script src="{{ asset('js/app.js') }}"></script>
<!-- script files -->
<script src="{{ asset('bower_components/jquery/dist/jquery.js') }}"></script>
<script src="{{ asset('bower_components/what-input/what-input.js') }}"></script>
<script src="{{ asset('bower_components/foundation-sites/dist/foundation.js') }}"></script>
<script src="{{ asset('js/jquery.showmore.src.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/appjs.js') }}"></script>
<script src="{{ asset('layerslider/js/greensock.js') }}" type="text/javascript"></script>
<!-- LayerSlider script files -->
<script src="{{ asset('layerslider/js/layerslider.transitions.js') }}" type="text/javascript"></script>
<script src="{{ asset('layerslider/js/layerslider.kreaturamedia.jquery.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/inewsticker.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.kyco.easyshare.js') }}" type="text/javascript"></script>
{{-- custom script --}}
@yield('script')
</body>

</html>