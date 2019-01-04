@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div id="content" class="site-content">
        <!-- particles.js container -->
        <div id='particles-js'></div>
        <div id="primary" class="content-area home-page">
            <div class="container">
                <main id="main" class="site-main">
                    <article id="post-418" class="post-418 page type-page status-publish hentry">
                        <div class="entry-content">

                            <section data-vc-full-width="true" data-vc-full-width-init="false" class="vc_section home-particle-bg vc_custom_1525105880420 vc_section-has-fill vc_row-o-full-height vc_section-o-content-middle vc_section-flex">
                                <div id="fittext-home" class="vc_row wpb_row vc_row-fluid home-glow-text vc_row-o-content-middle vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <h2 style="text-align: center" class="vc_custom_heading vc_custom_1524124825438">RE:iMAGINE CREATIVITY</h2></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <h2 style="text-align: center" class="vc_custom_heading">CAPTURE MEMORIES</h2></div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <section data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="" class="vc_section home-about vc_custom_1525106105730 vc_section-has-fill vc_section-o-content-middle vc_section-flex vc_general vc_parallax vc_parallax-content-moving">
                                <div class="vc_row wpb_row vc_row-fluid home-head-subtag vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                    <div class="home-about wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <h2 style="color: #ffffff;text-align: left" class="vc_custom_heading">BEING UNPEEP</h2></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1523637628494 vc_row-has-fill vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                    <div class="home-about wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1523638960396">
                                            <div class="wpb_wrapper">
                                                <h2 style="text-align: center" class="vc_custom_heading music-glow-text vc_custom_1524027223690">LIVE LIFE AND CAPTURE MOMENTS</h2>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p style="border-bottom: 1px solid #cb3742; padding-bottom: 15px; letter-spacing: 1px;">Unpeep is a startup geared towards equipping
                                                            event organizers/brands on a tight schedule with professional readily available
                                                            photographers within less than a mile radius.
                                                            Unpeep is startup that facilitates an easy process of booking professional Photographers from anywhere with just a few clicks. Ensuring exclusive access to high-end quality services in any location and time from our experience Unpeeper.
                                                        </p>

                                                    </div>
                                                </div>

                                                <div class="wpb_single_image wpb_content_element vc_align_right">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="100" height="41" src="{{ URL::asset('assets/wp-content/uploads/2018/04/Signature-size-low-white.png') }}" class="vc_single_image-img attachment-thumbnail" alt="" /></div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="vc_row-full-width vc_clearfix"></div>

                            <h2 style="text-align: center" class="vc_custom_heading single-page-header music-glow-text vc_custom_1524027206762">MADE FOR ALL</h2>

                            <section data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" class="vc_section ask-us-info vc_custom_1524621695069 vc_section-has-fill vc_general vc_parallax vc_parallax-content-moving">
                                <div class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc_row-o-equal-height vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                                        <div class="vc_column-inner vc_custom_1524621452525">
                                            <div class="wpb_wrapper">
                                                <h2 style="color: #e02444;text-align: center" class="vc_custom_heading">I AM A CREATOR</h2>
                                                <div class="wpb_text_column wpb_content_element  vc_custom_1524660155646">
                                                    <div class="wpb_wrapper">
                                                        <ul>
                                                            <li>Photographer</li>
                                                            <li>Videographer</li>
                                                            <li>Model</li>
                                                            <li>Stylist</li>
                                                            
                                                        </ul>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                                        <div class="vc_column-inner vc_custom_1524621480522">
                                            <div class="wpb_wrapper">
                                                <h2 style="color: #cb2342;text-align: center" class="vc_custom_heading vc_custom_1521133261358">I AM A COMPANY</br>Brand</h2>
                                                <div class="wpb_text_column wpb_content_element  vc_custom_1524660164310">
                                                    <div class="wpb_wrapper">
                                                        <ul>
                                                            <li>Brand</li>
                                                            <li>Agency</li>
                                                            <li>Event-Planner</li>
                                                            <li>Individual</li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>


                            <div class="vc_row-full-width vc_clearfix"></div>
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1524027927567">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <h2 style="text-align: center" class="vc_custom_heading single-page-header music-glow-text">THE BLOG</h2></div>
                                    </div>
                                </div>
                            </div>
                            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" class="vc_row wpb_row vc_row-fluid faq-title-content wpb_animate_when_almost_visible wpb_top-to-bottom top-to-bottom vc_custom_1524027908988 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving">
                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner vc_custom_1522940717735">
                                        <div class="wpb_wrapper">
                                            <h2 style="color: #ffffff;text-align: center" class="vc_custom_heading faq-title-contact">INSPIRATIONS</h2></div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner vc_custom_1522940713357">
                                        <div class="wpb_wrapper">
                                            <h2 style="color: #ffffff;text-align: center" class="vc_custom_heading faq-title-contact">INTERVIEWS</h2></div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner vc_custom_1522940708787">
                                        <div class="wpb_wrapper">
                                            <h2 style="color: #ffffff;text-align: center" class="vc_custom_heading faq-title-contact">GET EDUCATEDv>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <section data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" class="vc_section fs-ask-us vc_section-has-fill vc_general vc_parallax vc_parallax-content-moving">
                                <div class="vc_row wpb_row vc_row-fluid ask-us-content wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc_row-o-equal-height vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                                        <div class="vc_column-inner vc_custom_1520835672519">
                                            <div class="wpb_wrapper">
                                                <h2 style="color: #e02444;text-align: center" class="vc_custom_heading">10 RESOLUTIONS FOR PHOTOGRAPHERS IN 2019</h2>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p> I truly can’t believe that the New Year is already upon us. Each year I am shocked by how fast time has flown. I’ve never actually been a huge fan of New Year’s resolutions because I always have a hard time following through with them.</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                                        <div class="vc_column-inner vc_custom_1520835709287">
                                            <div class="wpb_wrapper">
                                                <h2 style="color: #e02444;text-align: center" class="vc_custom_heading">HOW TO CAPTURE LIFESTYLE NEW BORN PHOTOGRAPHY</h2>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p>A brand new bundle of joy has made his or her way into your life…and in a big way! You’ve had a baby, and you’re looking to capture on camera their cute baby cheeks and sleeping, smiling faces. </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                                        <div class="vc_column-inner vc_custom_1520835718559">
                                            <div class="wpb_wrapper">
                                                <h2 style="color: #e02444;text-align: center" class="vc_custom_heading">WHY YOU NEED A PROFESSIONAL PHOTOGRAPHER FOR YOUR EVENT.</h2>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p>Truth be told the planning an event is enough stress on its own than having a random unprofessional, unvetted and amateur photographer ruin the day for you, can give you a heart attack.<b style="color: #e02444;text-align: center">CONTINUE</b></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </section>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <section data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" class="vc_section vc_custom_1517126846120 vc_section-has-fill vc_section-o-content-middle vc_section-flex vc_general vc_parallax vc_parallax-content-moving">
                                <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-bottom vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_fadeIn fadeIn">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="150" height="150" src="wp-content/uploads/2018/01/sponsors-11-150x150.png" class="vc_single_image-img attachment-thumbnail" alt="" srcset="https://app.ergo7.net/surge/wp-content/uploads/2018/01/sponsors-11-150x150.png 150w, https://app.ergo7.net/surge/wp-content/uploads/2018/01/sponsors-11-300x300.png 300w, https://app.ergo7.net/surge/wp-content/uploads/2018/01/sponsors-11-100x100.png 100w, https://app.ergo7.net/surge/wp-content/uploads/2018/01/sponsors-11.png 350w"
                                                                                                                       sizes="(max-width: 150px) 100vw, 150px" /></div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_fadeIn fadeIn">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="150" height="150" src="wp-content/uploads/2018/01/sponsors-10-150x150.png" class="vc_single_image-img attachment-thumbnail" alt="" srcset="https://app.ergo7.net/surge/wp-content/uploads/2018/01/sponsors-10-150x150.png 150w, https://app.ergo7.net/surge/wp-content/uploads/2018/01/sponsors-10-300x300.png 300w, https://app.ergo7.net/surge/wp-content/uploads/2018/01/sponsors-10-100x100.png 100w, https://app.ergo7.net/surge/wp-content/uploads/2018/01/sponsors-10.png 350w"
                                                                                                                       sizes="(max-width: 150px) 100vw, 150px" /></div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_fadeIn fadeIn">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="150" height="150" src="wp-content/uploads/2018/01/sponsors-5-150x150.png" class="vc_single_image-img attachment-thumbnail" alt="" srcset="https://app.ergo7.net/surge/wp-content/uploads/2018/01/sponsors-5-150x150.png 150w, https://app.ergo7.net/surge/wp-content/uploads/2018/01/sponsors-5-300x300.png 300w, https://app.ergo7.net/surge/wp-content/uploads/2018/01/sponsors-5-100x100.png 100w, https://app.ergo7.net/surge/wp-content/uploads/2018/01/sponsors-5.png 350w"
                                                                                                                       sizes="(max-width: 150px) 100vw, 150px" /></div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_fadeIn fadeIn">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="150" height="150" src="wp-content/uploads/2018/01/sponsors-2-150x150.png" class="vc_single_image-img attachment-thumbnail" alt="" srcset="https://app.ergo7.net/surge/wp-content/uploads/2018/01/sponsors-2-150x150.png 150w, https://app.ergo7.net/surge/wp-content/uploads/2018/01/sponsors-2-300x300.png 300w, https://app.ergo7.net/surge/wp-content/uploads/2018/01/sponsors-2-100x100.png 100w, https://app.ergo7.net/surge/wp-content/uploads/2018/01/sponsors-2.png 350w"
                                                                                                                       sizes="(max-width: 150px) 100vw, 150px" /></div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1518599519832 vc_row-o-content-middle vc_row-flex">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <h2 style="text-align: center" class="vc_custom_heading wpb_animate_when_almost_visible wpb_top-to-bottom top-to-bottom vc_custom_1524659124496"> OUR HASHTAGES</h2>
                                            <div class="wpb_text_column wpb_content_element  vc_custom_1524659135204">
                                                <div class="wpb_wrapper">
                                                    <p style="text-align: center;">#UNPEEPCREATIVES #THEUNPEEP #REIMAGINECREATIVITY #UNPEEPWEEKLY</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>

                        </div>
                        <!-- .entry-content -->
                    </article>
                    <!-- #post-418 -->
                </main>
                <!-- #main -->
            </div>
        </div>
        <!-- #primary -->
    </div>

@endsection
