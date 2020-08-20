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
                        <span class="show-for-sr">Current: </span> Register
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!--end breadcrumbs-->
<!-- registration -->
<section class="registration">
    <div class="row secBg">
        <div class="large-12 columns">
            <div class="login-register-content">
                <div class="row collapse borderBottom">
                    <div class="medium-6 large-centered medium-centered">
                        <div class="page-heading text-center">
                            <h3 style="margin-bottom: 0">User Registeration</h3>
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
                            <h5 class="text-center">Create your Account</h5>
                            @if(session('success'))
                            <p style="color: #28a745 !important; text-align: center; margin-bottom: 0.5rem">
                                {{ session('success') }}
                            </p>
                            @elseif(session('error'))
                            <p style="color: #e96969 !important; text-align: center; margin-bottom: 0.5rem">
                                {{ session('error') }}
                            </p>
                            @endif
                           
                            <form method="POST" data-abide novalidate>
                                @csrf
                                
                                @if ($errors->first('name'))
                                    <span style="color: #e96969; font-size: 0.9em">{{ $errors->first('name') }}</span>
                                @else
                                    <span style="color: #e96969; font-size: 0.9em">*The Name field is required.</span>
                                @endif
                                <div class="input-group">
                                    <span class="input-group-label"><i class="fa fa-user"></i></span>
                                    <input class="input-group-field" name="name" type="text"
                                        placeholder="Enter your name" >
                                </div>
                                
                                @if ($errors->first('email'))
                                    <span style="color: #e96969; font-size: 0.9em">{{ $errors->first('email') }}</span>
                                @else
                                    <span style="color: #e96969; font-size: 0.9em">*The Email field is required.</span>
                                @endif
                                <div class="input-group">
                                    <span class="input-group-label"><i class="fa fa-envelope"></i></span>
                                    <input class="input-group-field" name="email" type="email"
                                        placeholder="Enter your email" >
                                </div>
                               
                                @if ($errors->first('password'))
                                    <span style="color: #e96969; font-size: 0.9em">{{ $errors->first('password') }}</span>
                                @else
                                    <span style="color: #e96969; font-size: 0.9em">*The Password field is required.</span>
                                @endif
                                <div class="input-group">
                                    <span class="input-group-label"><i class="fa fa-lock"></i></span>
                                    <input type="password" id="password" name="password"
                                        placeholder="Enter your password" >
                                </div>
                                
                                @if ($errors->first('retype_password'))
                                    <span style="color: #e96969; font-size: 0.9em">{{ $errors->first('retype_password') }}</span>
                                @else
                                    <span style="color: #e96969; font-size: 0.9em">*The Retype Password field is required.</span>
                                @endif
                                <div class="input-group">
                                    <span class="input-group-label"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="retype_password" placeholder="Re-type your password">
                                </div>

                                {{-- <span class="form-error">your email is invalid</span> --}}
                                <button class="button expanded" type="submit" name="submit">register Now</button>
                                <p class="loginclick"> <a href="{{ route('login') }}">Login here</a><a href="{{ route('login') }}">Already
                                        have acoount?</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection