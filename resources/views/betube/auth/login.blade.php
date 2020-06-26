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
                    <li><i class="fa fa-home"></i><a href="#">Home</a></li>
                    <li>
                        <span class="show-for-sr">Current: </span> Login
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section><!--end breadcrumbs-->

<!-- registration -->
<section class="registration">
    <div class="row secBg">
        <div class="large-12 columns">
            <div class="login-register-content">
                <div class="row collapse borderBottom">
                    <div class="medium-6 large-centered medium-centered">
                        <div class="page-heading text-center">
                            <h3 style="margin-bottom: 0">User login</h3>
                        </div>
                    </div>
                </div>
                <div class="row" data-equalizer data-equalize-on="medium" id="test-eq">
                    <div class="large-4 large-offset-1 medium-6 columns">
                        <div class="social-login" data-equalizer-watch>
                            <h5 class="text-center">Login via Social Profile</h5>
                            <div class="social-login-btn facebook">
                                <a href="#"><i class="fa fa-facebook"></i>login via facebook</a>
                            </div>
                            <div class="social-login-btn twitter">
                                <a href="#"><i class="fa fa-twitter"></i>login via twitter</a>
                            </div>
                            <div class="social-login-btn g-plus">
                                <a href="#"><i class="fa fa-google-plus"></i>login via google plus</a>
                            </div>
                            <div class="social-login-btn linkedin">
                                <a href="#"><i class="fa fa-linkedin"></i>login via linkedin</a>
                            </div>
                        </div>
                    </div>
                    <div class="large-2 medium-2 columns show-for-large">
                        <div class="middle-text text-center hide-for-small-only" data-equalizer-watch>
                            <p>
                                <i class="fa fa-arrow-left arrow-left"></i>
                                <span>OR</span>
                                <i class="fa fa-arrow-right arrow-right"></i>
                            </p>
                        </div>
                    </div>
                    <div class="large-4 medium-6 columns end">
                        <div class="register-form">
                            <h5 class="text-center">Login your Account</h5>
                            <form method="post" data-abide novalidate>
                                @csrf
                                {{-- <div data-abide-error class="alert callout" style="display: none;">
                                    <p><i class="fa fa-exclamation-triangle"></i> There are some errors in your form.</p>
                                </div> --}}
                                @if(session('error'))
                                <p style="color: #e96969 !important; text-align: center; margin-bottom: 0.5rem">
                                    {{ session('error') }}
                                </p>
                                @endif

                                <span style="color: #e96969; font-size: 0.9em">{{ $errors->first('email') }}</span>
                                <div class="input-group">
                                    <span class="input-group-label"><i class="fa fa-user"></i></span>
                                    <input class="input-group-field" name="email" type="text" placeholder="Enter your email" >
                                    {{-- <span class="form-error">username is required</span> --}}
                                </div>

                                <span style="color: #e96969; font-size: 0.9em">{{ $errors->first('password') }}</span>
                                <div class="input-group">
                                    <span class="input-group-label"><i class="fa fa-lock"></i></span>
                                    <input type="password" id="password" name="password" placeholder="Enter your password" >
                                    {{-- <span class="form-error">password is required</span> --}}
                                </div>

                                <div class="checkbox">
                                    <input id="remember" type="checkbox" name="check" value="remember">
                                    <label class="customLabel" for="remember">Remember me</label>
                                </div>
                                <button class="button expanded" type="submit" name="submit">login Now</button>
                                <p class="loginclick"><a href="{{ route('forgot-password') }}">Forgot Password</a> New Here? <a href="{{ route('register') }}">Create a new Account</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
