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
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ URL::asset('assets/images/logox.png') }}" />

    <meta name="author" content="The Unpeep Team" />
    <meta name="description" content="Job board platform for photographers, Share creative designs and Express yourself!" />
    <meta name="keywords" content="Photographer, photography, blockchain, photography startup, events, event organizers, lagos, nigeria, events organizers in lagos, photographers in lagos,
                                    stock, photos, gallery, studio, job platform, jobs, gigs, blockchain startup, ethereum blockchain" />
    <meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8" />

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ URL::asset('assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- DATE-PICKER -->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/date-picker/css/datepicker.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/book-style.css') }}">
</head>
<body>

<a href="{{ __('/') }}">
    <img width="200" src='{{ URL::asset('assets/images/unpeep-clear-logo.png') }}' alt='Unpeep'/>
</a>

<div class="wrapper">
    <form action="" method="post" id="wizard">
        <!-- SECTION 1 -->
        <h4></h4>
        <section>
            <div class="inner">
                <div class="image-holder">
                    <img src="{{ URL::asset('assets/images/form-wizard-1.jpg') }}" alt="">
                </div>
                <div class="form-content">
                    <div class="form-inner">
                        <div class="form-header">
                            <h3>Book a Photographer</h3>
                            <p>~ Just Re:imagine Creativity ~</p>
                        </div>
                        <div class="form-row" style="margin-bottom: 31px;">
                            <label for="">
                                <i class="zmdi zmdi-account-o"></i>
                                People
                            </label>
                            <div class="select">
                                <div class="form-holder">
                                    <div class="select-control"></div>
                                    <i class="zmdi zmdi-chevron-down"></i>
                                </div>
                                <ul class="dropdown">
                                    <li rel="1">1</li>
                                    <li rel="2">2</li>
                                    <li rel="3">3</li>
                                    <li rel="4">4</li>
                                    <li rel="5">5</li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 31px;">
                            <label for="">
                                <i class="zmdi zmdi-calendar-check"></i>
                                Date
                            </label>
                            <input type='text' class='datepicker-here form-control' data-language='en' id="dp" data-date-format="dd M yyyy"/>
                        </div>
                        <div class="form-row">
                            <label for="" style="margin-bottom: 9px;">
                                <i class="zmdi zmdi-alarm"></i>
                                Time
                            </label>
                            <div class="form-holder select-holder">
                                <select name="" id="" class="form-control">
                                    <option value="9am"><span>9</span> am</option>
                                    <option value="10am"><span>10</span> am</option>
                                    <option value="11am"><span>11</span>am</option>
                                    <option value="12am"><span>12</span>am</option>
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                            <div class="form-holder select-holder">
                                <select name="" id="" class="form-control">
                                    <option value="7pm"><span>7</span> pm</option>
                                    <option value="8pm"><span>8</span> pm</option>
                                    <option value="9pm"><span>9</span> pm</option>
                                    <option value="10pm"><span>10</span> pm</option>
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2 -->
        <h4></h4>
        <section>
            <div class="inner">
                <div class="image-holder">
                    <img src="{{ URL::asset('assets/images/form-wizard-2.jpg') }}" alt="">
                </div>
                <div class="form-content">
                    <div class="form-inner">
                        <div class="form-header">
                            <h3>Book a Photographer</h3>
                            <p>~ Just Re:imagine Creativity ~</p>
                        </div>
                        <div class="form-row">
                            <label for="">
                                <i class="zmdi zmdi-account-o"></i>
                                Name
                            </label>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-row">
                            <label for="">
                                <i class="zmdi zmdi-phone"></i>
                                Phone
                            </label>
                            <input type="text" class="form-control" placeholder="My phone">
                        </div>
                        <div class="form-row">
                            <label for="">
                                <i class="zmdi zmdi-email"></i>
                                Email
                            </label>
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3 -->
        <h4></h4>
        <section>
            <div class="inner">
                <div class="image-holder">
                    <img src="{{ URL::asset('assets/images/form-wizard-3.jpg') }}" alt="">
                </div>
                <div class="form-content">
                    <div class="form-inner form-inner-last">
                        <div class="ready">
									<span>
										<i class="zmdi zmdi-check"></i>
									</span>
                            <p class="text-1">Yipee! You booked a peeper</p>
                            <p class="text-2">~ We would send you a confirmation email ~</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</div>

<script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>

<!-- DATE-PICKER -->
<script src="{{ URL::asset('assets/vendor/date-picker/js/datepicker.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/date-picker/js/datepicker.en.js') }}"></script>

<!-- JQUERY STEP -->
<script src="{{ URL::asset('assets/js/jquery.steps.js') }}"></script>

<script src="{{ URL::asset('assets/js/book-main.js') }}"></script>
<!-- Hotjar Tracking Code for www.unpeep.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1143508,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

</body>
</html>