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
                            <h3>Forgot Password</h3>
                        </div>
                    </div>
                </div>
                <div class="row" data-equalizer data-equalize-on="medium" id="test-eq">
                    <div class="large-4 medium-6 large-centered medium-centered columns">
                        <div class="register-form">
                            <h5 class="text-center">Enter Email</h5>
                            <form method="POST" data-abide novalidate>
                                @if(session('error'))
                                <p style="color: #e96969 !important; text-align: center; margin-bottom: 0.5rem">
                                    {{ session('error') }}
                                </p>  
                                @elseif(session('success'))      
                                <p style="color: #28a745 !important; text-align: center; margin-bottom: 0.5rem">
                                    {{ session('success') }}
                                </p>                       
                                @endif
                                @csrf
                                <div class="input-group">
                                    <span class="input-group-label"><i class="fa fa-envelope"></i></span>
                                    <input type="email" placeholder="Enter your email" name="email">
                                    {{-- <span class="form-error">email is required</span> --}}
                                </div>
                                <button class="button expanded" type="submit" name="submit">send link</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
