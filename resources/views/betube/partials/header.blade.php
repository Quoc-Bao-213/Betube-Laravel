@php
    $section = explode('/', Request::path());
    
    $homepage = "";
    $channel = "";
    $playlist = "";

    if ($section[0] === 'about-me'){
        $channel = 'active';
    }elseif($section[0] === 'playlist'){
        $playlist = 'active';
    }else{
        $homepage = 'active';
    }
@endphp

<header>
    <!-- Top -->
    <section id="top" class="topBar show-for-large">
        <div class="row">
            <div class="medium-6 columns">
                <div class="socialLinks">
                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-vimeo"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            <div class="medium-6 columns">
                <div class="top-button">
                    <ul class="menu float-right">
                        @if(Auth::user())
                        <li>
                            <a href="{{ route('upload-video', Auth::id()) }}">upload Video</a>
                        </li>
                        <li class="dropdown-login">
                            <a href="#" class="loginReg" style="text-transform: none" data-toggle="example-dropdown">Hi! {{ Auth::user()->name }}</a>
                            <div class="login-form">
                                <a href="{{ route('about-me', Auth::user()->id) }}" class="text-center hi-user">My Profile</a>
                                <form action="{{ route('actionLogout') }}" method="POST">
                                    @csrf
                                    <button type="submit" style="width: 97.8%; height: 2.3rem;" class="text-center hi-user">Logout</button>
                                </form>
                            </div>
                        </li>
                        @else
                        <li class="dropdown-login">
                            <a class="loginReg" data-toggle="example-dropdown" href="#">login/Register</a>
                            <div class="login-form">
                                <h6 class="text-center">Great to have you back!</h6>
                                <form method="post" action="{{ route('actionLogin') }}">
                                    @csrf
                                    <div class="input-group">
                                        <span class="input-group-label"><i class="fa fa-user"></i></span>
                                        <input class="input-group-field" name="email" type="email" placeholder="Enter email" required>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-label"><i class="fa fa-lock"></i></span>
                                        <input class="input-group-field" name="password" type="password" placeholder="Enter password" required>
                                    </div>
                                    <div class="checkbox">
                                        <input id="check1" type="checkbox" name="check" value="check">
                                        <label class="customLabel" for="check1">Remember me</label>
                                    </div>
                                    <input type="submit" name="submit" value="Login Now">
                                </form>
                                <p class="text-center">New here? <a class="newaccount" href="{{ route('register') }}">Create a new Account</a></p>
                                <p class="text-center">Forgot password? <a class="newaccount" href="{{ route('forgot-password') }}">Click here</a></p>
                            </div>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- End Top -->
    <!--Navber-->
    <section id="navBar">
        <nav class="sticky-container" data-sticky-container>
            <div class="sticky topnav" data-sticky data-top-anchor="navBar" data-btm-anchor="footer-bottom:bottom" data-margin-top="0" data-margin-bottom="0" style="width: 100%; background: #fff;" data-sticky-on="large">
                <div class="row">
                    <div class="large-12 columns">
                    <div class="title-bar" data-responsive-toggle="beNav" data-hide-for="large">
                        <button class="menu-icon" type="button" data-toggle="offCanvas-responsive"></button>
                        <div class="title-bar-title"><img src="{{ asset('images/logo-small.png') }}" alt="logo"></div>
                    </div>

                    <div class="top-bar show-for-large" id="beNav" style="width: 100%;">
                        <div class="top-bar-left">
                            <ul class="menu">
                                <li class="menu-text">
                                    <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="top-bar-right search-btn">
                            <ul class="menu">
                                <li class="search">
                                    <i class="fa fa-search"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="top-bar-right">
                            <ul class="menu vertical medium-horizontal" data-responsive-menu="drilldown medium-dropdown">
                                <li class="{{ $homepage }}">
                                    <a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa fa-film"></i>Videos</a>                                     
                                </li>
                                <li class="{{ $playlist }}">
                                    <a href="{{ route('playlist') }}"><i class="fa fa-th"></i>playlist</a>
                                </li>
                                @if(isset(Auth::user()->id))
                                <li class="{{ $channel }}">
                                    <a href="{{ route('about-me', auth()->user()->id ) }}"><i class="fa fa-user"></i>channel</a>
                                </li>
                                @else
                                <li>
                                    <a href="{{ route('login') }}"><i class="fa fa-user"></i>channel</a>
                                </li>
                                @endif
                                <li>
                                    <a href="{{ route('contact') }}"><i class="fa fa-envelope"></i>contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
                <div id="search-bar" class="clearfix search-bar-light">
                    <form action="{{ route('action-search') }}" method="GET">
                        <div class="search-input float-left">
                            <input type="search" name="search" placeholder="Seach Here your video">
                        </div>
                        <div class="search-btn float-right text-right">
                            <button class="button" type="submit">search now</button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </section>
</header>