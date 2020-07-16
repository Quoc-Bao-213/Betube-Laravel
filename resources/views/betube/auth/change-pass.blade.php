@extends('betube.layout.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/jquery.kyco.easyshare.css') }}">
@endsection

@section('content')

<!--breadcrumbs-->
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
                            <h3>Change Password</h3>
                        </div>
                    </div>
                </div>
                <div class="row" data-equalizer data-equalize-on="medium" id="test-eq">
                    <div class="large-4 medium-6 large-centered medium-centered columns">
                        <div class="register-form">
                            @if(session('success'))
                            <p style="color: #28a745 !important; text-align: center; margin-bottom: 0.5rem">
                                {{ session('success') }}
                            </p>
                            @elseif(session('error'))
                            <p style="color: #e96969 !important; text-align: center; margin-bottom: 0.5rem">
                                {{ session('error') }}
                            </p>
                            {{-- @elseif(session('notify'))
                            <p style="color: #28a745 !important; text-align: center; margin-bottom: 0.5rem">
                                {{ session('notify') }}
                            </p> --}}
                            @endif
                            @if(isset(Auth::user()->id))
                            <form method="POST" action="{{ route('action-change-password', Auth::user()->id ) }}" data-abide novalidate>
                                @csrf
                                <div class="input-group">
                                    <span class="input-group-label"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="old_password" placeholder="Enter your old password" >
                                    <span style="color: #e96969; font-size: 0.9em">{{ $errors->first('old_password') }}</span>
                                    {{-- <span class="form-error">email is required</span> --}}
                                </div>
                                <div class="input-group">
                                    <span class="input-group-label"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="new_password" placeholder="Enter your new password" >
                                    <span style="color: #e96969; font-size: 0.9em">{{ $errors->first('new_password') }}</span>
                                    {{-- <span class="form-error">email is required</span> --}}
                                </div>
                                <div class="input-group">
                                    <span class="input-group-label"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="retype_password" placeholder="Enter your retype new password" >
                                    <span style="color: #e96969; font-size: 0.9em">{{ $errors->first('retype_password') }}</span>
                                    {{-- <span class="form-error">email is required</span> --}}
                                </div>
                                <button class="button expanded" type="submit" name="submit">Change Password</button>
                            </form>
                            @else
                            <form method="POST" action="#" data-abide novalidate>
                                @csrf
                                <div class="input-group">
                                    <span class="input-group-label"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="new_password" placeholder="Enter your new password" >
                                    <span style="color: #e96969; font-size: 0.9em">{{ $errors->first('new_password') }}</span>
                                    {{-- <span class="form-error">email is required</span> --}}
                                </div>
                                <div class="input-group">
                                    <span class="input-group-label"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="retype_password" placeholder="Enter your retype new password" >
                                    <span style="color: #e96969; font-size: 0.9em">{{ $errors->first('retype_password') }}</span>
                                    {{-- <span class="form-error">email is required</span> --}}
                                </div>
                                <button class="button expanded" type="submit" name="submit">Change Password</button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
