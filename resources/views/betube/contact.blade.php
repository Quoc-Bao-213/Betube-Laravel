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
                        <span class="show-for-sr">Current: </span> contact us
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
                            <h3>Contact Us</h3>
                            <p>We are always glad to hear your comments regarding our services. Whether you have any questions, or require further information about what we can offer you, please do not hesitate to contact us.</p>
                        </div>
                    </div>
                </div>
                <div class="row" data-equalizer data-equalize-on="medium" id="test-eq">
                    <div class="large-6 columns">
                        <h4>Contact Details:</h4>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.16143076401!2d106.66685831511774!3d10.7989452617298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175292edfbdae8d%3A0xdb6dea6404139151!2zMzA3LzEyIE5ndXnhu4VuIFbEg24gVHLhu5dpLCBQaMaw4budbmcgMSwgVMOibiBCw6xuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1597312432490!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="user-contacts">
                            <div class="row">
                                <div class="large-6 medium-6 columns">
                                    <div class="contact-stats">
                                        <i class="fa fa-map-marker"></i>
                                        <h6>Office Adrress</h6>
                                        <p>307/12 Nguyen Van Troi, Ward 1, Tan Binh District, HCMC, Viet Nam</p>
                                    </div>
                                </div>
                                <div class="large-6 medium-6 columns">
                                    <div class="contact-stats">
                                        <i class="fa fa-envelope"></i>
                                        <h6>Email Adrress</h6>
                                        <p>taquocbao.it.99@gmail.com <br/> latuan2703@gmail.com</p>
                                    </div>
                                </div>
                                <div class="large-6 medium-6 columns">
                                    <div class="contact-stats">
                                        <i class="fa fa-phone"></i>
                                        <h6>Phone Numers</h6>
                                        <p><strong>Office No:</strong> 0973 705 715 <br/> <strong>Or: </strong>0902 823 794</p>
                                    </div>
                                </div>
                                <div class="large-6 medium-6 columns">
                                    <div class="contact-stats">
                                        <i class="fa fa-phone"></i>
                                        <h6>Social Media</h6>
                                        <p>
                                            <a href="#" class="secondary-button"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="secondary-button"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="secondary-button"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" class="secondary-button"><i class="fa fa-instagram"></i></a>
                                            <a href="#" class="secondary-button"><i class="fa fa-vimeo"></i></a>
                                            <a href="#" class="secondary-button"><i class="fa fa-youtube"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 columns">
                        <h4>We'd Love to hear from you!</h4>
                        <div class="register-form">
                        <form action="#" method="GET" data-abide novalidate>
                            <div data-abide-error class="alert callout" style="display: none;">
                                <p><i class="fa fa-exclamation-triangle"></i> There are some errors in your form.</p>
                            </div>
                            <div class="input-group">
                                <span class="input-group-label"><i class="fa fa-user"></i></span>
                                <input class="input-group-field" type="text" placeholder="Enter your name" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-label"><i class="fa fa-envelope"></i></span>
                                <input class="input-group-field" type="email" placeholder="Enter your email" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-label"><i class="fa fa-book"></i></span>
                                <input class="input-group-field" type="text" placeholder="Enter your subject" required>
                            </div>
                            <textarea required placeholder="Your message"></textarea>
                            <button class="button expanded" name="submit">register Now</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer -->
@endsection
