@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif


    <!-- #masthead -->
    <div class="container-fluid">
        <div class="page-title-full-wrapper">
            <header class="entry-header single-page-title top-bar">
                <div class="container">
                    <h1 class="page-headline">ABOUT UNPEEP</h1> </div>
                <hr class="page-hr">
            </header>
        </div>
    </div>
    </div>

    <div id="content" class="site-content">
        <!-- particles.js container -->

        <div id="primary" class="content-area">
            <div class="container">
                <div class="site-main" id="main">
                    <article id="post-12" class="post-12 page type-page status-publish hentry">
                        <div class="entry-content">

                            <section data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" class="vc_section vc_custom_1518802848617 vc_section-has-fill vc_general vc_parallax vc_parallax-content-moving">
                                <div class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <section class="vc_section vc_custom_1524455400509">
                                <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex">
                                    <div class="schedule-image-box wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_left">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1500" height="1000" src="{{ URL::asset('assets/wp-content/uploads/2018/04/BACKGROUND2.jpg') }}" class="vc_single_image-img attachment-full" alt="" srcset="{{ URL::asset('assets/wp-content/uploads/2018/04/BACKGROUND2.jpg') }}   sizes="(max-width: 1500px) 100vw, 1500px" /></div>
                                                    </figure>
                                                </div>
                                                <h3 style="text-align: left" class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeIn fadeIn">BUILT FOR CREATORS</h3></div>
                                        </div>
                                    </div>
                                    <div class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <h2 style="text-align: center" class="vc_custom_heading">THE SPIRIT OF CREATIVITY</h2>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p style="text-align: center;">Unpeep enables photographers, videographers, and models to learn, connect and grow.	We are a blockchain-powered startup
        geared towards equipping event organizers on a tight schedule with professional readily available photographers within less than a mile radius.</p>
														
                                                    </div>
                                                </div>

                                                <div class="wpb_single_image wpb_content_element vc_align_center">

                                                    <figure class="wpb_wrapper vc_figure">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="vc_section vc_custom_1524455400509">
                                <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex">
                                    <div class="schedule-image-box wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_left">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                            <img width="1500" height="1000" src="{{ URL::asset('assets/wp-content/uploads/2018/04/wedding.png') }}" class="vc_single_image-img attachment-full" alt="" srcset="{{ URL::asset('assets/wp-content/uploads/2018/04/wedding.png') }}   sizes="(max-width: 1500px) 100vw, 1500px" /></div>
                                                    </figure>
                                                </div>
                                                <h3 style="text-align: left" class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeIn fadeIn">THERE'S POWER IN CREATIVITY</h3></div>
                                        </div>
                                    </div>
                                    <div class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <h2 style="text-align: center" class="vc_custom_heading">THE OUT-OF-THE-BOX CREATORS </h2>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p style="text-align: center;">THERE'S A LOT OF CONTENT OUT THERE, AND PRETTY MUCH ALL OF IT ARE UNSATISFYING. SO WE ARE CREATING A COMMUNITY WITH ONLY THE MOST TALENTED, ACTIVE AND ENGAGING CREATORS. 
        IN THE LAST YEAR, THE AMOUNT OF BRANDED CONTENT HAS TRIPLED WHILE AMOUNT OF ENGAGEMENT WITH THAT BRANDED HAS STAYED THE SAME. OUR SOLUTION IS UNPEEP.</p>

                                                    </div>
                                                </div>

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            
                         

                        </div>
                        <!-- .entry-content -->
                    </article>
                    <!-- #post-12 -->
                </div>
                <!-- #main -->
            </div>
        </div>
        <!-- #primary -->
    </div>
    <!-- #content -->

@endsection