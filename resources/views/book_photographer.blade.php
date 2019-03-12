<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125032466-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-125032466-1');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Unpeep') }} &#8211; Just Re:imagine Creativity</title>
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/unpeep_logo.png') }}">
    <link rel="apple-touch-icon" href="{{ URL::asset('assets/images/unpeep_logo.png') }}" />

    <meta name="author" content="The Unpeep Team" />
    <meta name="description" content="Job board platform for photographers, Share creative designs and Express yourself!" />
    <meta name="keywords" content="Photographer, photography, blockchain, photography startup, events, event organizers, lagos, nigeria, events organizers in lagos, photographers in lagos,
                                    stock, photos, gallery, studio, job platform, jobs, gigs, blockchain startup, ethereum blockchain" />
    <meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8" />

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ URL::asset('assets/css/book/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/book/menu.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/book/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/book/vendors.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ URL::asset('assets/css/book/custom.css') }}" rel="stylesheet">

    <!-- MODERNIZR -->
    <script src="{{ URL::asset('assets/js/book/modernizr.js') }}"></script>

</head>

<body>

<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Preload -->

<div id="loader_form">
    <div data-loader="circle-side-2"></div>
</div><!-- /loader_form -->

<nav>
    <ul class="cd-primary-nav">
        <li><a href="{{ __('/') }}" class="animated_link">Home</a></li>
        <li><a href="{{ route('about') }}" class="animated_link">About</a></li>
        <li><a href="{{ route('photographer') }}" class="animated_link">Are you a photographer?</a></li>
        <li><a href="{{ route('planner') }}" class="animated_link">Planner?</a></li>
        <li><a href="{{ route('contact') }}" class="animated_link">Contact Us</a></li>
    </ul>
</nav>
<!-- /menu -->

<div class="container-fluid full-height">
    <div class="row row-height">
        <div class="col-lg-6 content-left">
            <div class="content-left-wrapper bg_restaurant">
                <div class="wrapper">
                    <a href="index-3.html" id="logo"><img src="{{ URL::asset('assets/images/unpeep-white.png') }}" alt="Unpeep" width="100" height="70"></a>
                    <div id="social">
                        <ul>
                            <li><a href="#0"><i class="social_twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/theunpeep/"><i class="social_instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- /social -->
                    <div class="left_title">
                        <h3>Book a photographer</h3>
                        <p>From our highly vetted picture ninjas</p>
                    </div>
                </div>
            </div>
            <!--/content-left-wrapper -->
        </div>
        <!-- /content-left -->

        <div class="col-lg-6 content-right">
            <div id="wizard_container">
                <div id="top-wizard">
                    <div id="progressbar"></div>
                </div>
                <!-- /top-wizard -->
                <form id="wrapped" method="POST" enctype="multipart/form-data">
                    <input id="website" name="website" type="text" value="">
                    <!-- Leave for security protection, read docs for details -->
                    <div id="middle-wizard">
                        <div class="step">
                            <h3 class="main_question"><strong>1/3</strong>Book Photographer</h3>
                            <div class="form-group">
                                <input type="text" name="dates" class="form-control required" placeholder="Preferred date">
                                <i class="icon-hotel-calendar_3"></i>
                            </div>
                            <div class="form-group">
                                <div class="styled-select clearfix">
                                    <select class="wide time required" name="time">
                                        <option value="">Preferred time</option>
                                        <option value="07.30 PM">07.30 PM</option>
                                        <option value="08.00 PM">08.00 PM</option>
                                        <option value="08.30 PM">08.30 PM</option>
                                        <option value="09.00 PM">09.00 PM</option>
                                        <option value="09.30 PM">09.30 PM</option>
                                        <option value="10.00 PM">10.00 PM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row no-gutters pb-1">
                                <div class="col-6 pr-2">
                                    <div class="form-group">
                                        <div class="qty-buttons">
                                            <input type="button" value="+" class="qtyplus" name="adults">
                                            <input type="text" name="adults" id="adults" value="" class="qty form-control required" placeholder="Adults">
                                            <input type="button" value="-" class="qtyminus" name="adults">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 pl-2">
                                    <div class="form-group">
                                        <div class="qty-buttons">
                                            <input type="button" value="+" class="qtyplus" name="child">
                                            <input type="text" name="child" id="child" value="" class="qty form-control required" placeholder="Child">
                                            <input type="button" value="-" class="qtyminus" name="child">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control notes" placeholder="Special notes or alergies"></textarea>
                            </div>
                        </div>
                        <!-- /step-->

                        <div class="step">
                            <h3 class="main_question"><strong>2/3</strong>Select Reserve Options</h3>
                            <div class="form-group options clearfix first">
                                <i class="icon-restaurant-nosmoking"></i><em>No smoking area</em>
                                <label class="switch-light switch-ios float-right">
                                    <input type="checkbox" value="No smoking area" name="options[]">
                                    <span><span>No</span><span>Yes</span></span>
                                    <a></a>
                                </label>
                            </div>
                            <div class="form-group options clearfix">
                                <i class="icon-restaurant-garden"></i><em>Garden table</em>
                                <label class="switch-light switch-ios float-right">
                                    <input type="checkbox" value="Garden table" name="options[]">
                                    <span><span>No</span><span>Yes</span></span>
                                    <a></a>
                                </label>
                            </div>
                            <div class="form-group options clearfix">
                                <i class="icon-restaurant-gluten_free"></i><em>Gluten free menu</em>
                                <label class="switch-light switch-ios float-right">
                                    <input type="checkbox" value="Gluten free" name="options[]">
                                    <span><span>No</span><span>Yes</span></span>
                                    <a></a>
                                </label>
                            </div>
                            <div class="form-group options clearfix">
                                <i class="icon-restaurant-parking"></i><em>Secure Parking</em>
                                <label class="switch-light switch-ios float-right">
                                    <input type="checkbox" value="Secure Parking" name="options[]">
                                    <span><span>No</span><span>Yes</span></span>
                                    <a></a>
                                </label>
                            </div>
                        </div>
                        <!-- /step-->

                        <div class="submit step">
                            <h3 class="main_question"><strong>3/3</strong>Please fill with your details</h3>
                            <div class="form-group">
                                <input type="text" name="first_name" class="form-control required" placeholder="First Name">
                                <i class="icon-user"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" name="last_name" class="form-control required" placeholder="Last Name">
                                <i class="icon-user"></i>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control required" placeholder="Email">
                                <i class="icon-envelope"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" name="telephone" class="form-control" placeholder="Telephone">
                                <i class="icon-phone"></i>
                            </div>
                            <div class="form-group terms">
                                <label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a>
                                    <input type="checkbox" name="terms" value="Yes" class="required">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <!-- /step-->

                    </div>
                    <!-- /middle-wizard -->
                    <div id="bottom-wizard">
                        <button type="button" name="backward" class="backward">Prev</button>
                        <button type="button" name="forward" class="forward">Next</button>
                        <button type="submit" name="process" class="submit">Submit</button>
                    </div>
                    <!-- /bottom-wizard -->
                </form>
            </div>
            <!-- /Wizard container -->
            <!-- Footer -->
        </div>
        <!-- /content-right-->
    </div>
    <!-- /row-->
</div>
<!-- /container-fluid -->

<div class="cd-overlay-nav">
    <span></span>
</div>
<!-- /cd-overlay-nav -->

<div class="cd-overlay-content">
    <span></span>
</div>
<!-- /cd-overlay-content -->

<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
<!-- /menu button -->

<!-- Modal terms -->


<!-- COMMON SCRIPTS -->
<script src="{{ URL::asset('assets/js/book/jquery-3.2.1.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/book/common_scripts.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/book/velocity.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/book/functions.js') }}"></script>

<!-- Wizard script -->
<script src="{{ URL::asset('assets/js/book/booking_restaurant_func.js') }}"></script>

</body>
</html>