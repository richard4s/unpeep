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

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="{{ URL::asset('assets/fonts/material-design-iconic-font/css/material-design-iconic-font.css') }}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/photo/style.css') }}">
</head>
<body>
<div class="wrapper">
    <div class="image-holder">
        <a href="{{ __('/') }}"><img style="padding-right: 100px" src="{{ URL::asset('assets/images/unpeep-white.png') }}" alt="Unpeep"></a>
    </div>
    <form id="actualWizard" action="/photographer" method="post" enctype="multipart/form-data">
        @csrf
        <div id="wizard">
            <!-- SECTION 1 -->
            <h4></h4>
            <section>
                <div class="form-row form-group">
                    <div class="form-holder">
                        <label for="">
                            First Name *
                        </label>
                        <input required name="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" value="{{ old('first_name') }}">
                        @if ($errors->has('first_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-holder">
                        <label for="">
                            Last Name *
                        </label>
                        <input required name="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" value="{{ old('last_name') }}">
                        @if ($errors->has('last_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-row form-group">
                    <div class="form-holder">
                        <label for="">
                            Phone *
                        </label>
                        <input required name="number" type="number" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" value="{{ old('number') }}">
                        @if ($errors->has('number'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('number') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-holder">
                        <label for="">
                            Email Address *
                        </label>
                        <input required name="email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <label for="">
                        Skill Set *
                    </label>
                    <div class="form-holder">
                        <select required name="skillset" class="form-control">
                            <option value="photographer" class="option">Photographer</option>
                            <option value="videographer" class="option">Videographer</option>
                            <option value="brand" class="option">Brand/Agency</option>
                        </select>
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                </div>
                <div class="form-row">
                    <label for="">
                        Instagram Username or Website *
                    </label>
                    <input type="text" required name="instagram_username" class="form-control" placeholder="e.g @unpeepcreative">
                </div>
                <div class="form-row">
                    <label for="">
                        City / Street *
                    </label>
                    <input type="text" required name="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" value="{{ old('city') }}" placeholder="San Francisco" style="margin-bottom: 10px">
                    @if ($errors->has('city'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('city') }}</strong>
                            </span>
                    @endif
                    <input type="text" required name="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" value="{{ old('address') }}" placeholder="Street e.g No. 12, Ogunleye Street">
                    @if ($errors->has('address'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                    @endif
                </div>
            </section>

            <!-- SECTION 2 -->
            <h4></h4>
            <section>
                <div class="form-row">
                    <label for="">
                        Gender *
                    </label>
                    <div class="form-holder">
                        <select required name="gender" class="form-control">
                            <option value="male" class="option">Male</option>
                            <option value="female" class="option">Female</option>
                            <option value="none" class="option">Rather not say</option>
                        </select>
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                </div>
                <div class="form-row form-group">
                    <div class="form-holder">
                        <label for="">
                            Password *
                        </label>
                        <input name="password" type="password" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-holder">
                        <label for="">
                            Confirm Password *
                        </label>
                        <input name="password_confirmation" id="password_confirmation" required type="password" class="form-control">
                        <input type="hidden" value="2" name="category">
                    </div>
                </div>

                <div class="checkbox">
                    <label>
                        <input required type="checkbox"> Agree to terms and conditions?
                        <span class="checkmark"></span>
                    </label>
                </div>
            </section>

        </div>
    </form>
</div>

<script src="{{ URL::asset('assets/js/photo/jquery-3.3.1.min.js') }}"></script>

<!-- JQUERY STEP -->
<script src="{{ URL::asset('assets/js/photo/jquery.steps.js') }}"></script>

<script src="{{ URL::asset('assets/js/photo/main.js') }}"></script>
</body>
</html>