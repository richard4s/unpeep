@extends('layouts.blog_app')

@section('title', 'Posts')

@section('content')


<section class="iq-bg iq-bg-fixed iq-over-dark-80" style="background: url({{ URL::asset('assets') }}/images/bg/bg-7.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-breadcrumb">
                    <h2 class="text-uppercase iq-font-white">{{ $allPosts->title }}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->
<div class="main-content">
    <!--======= Blog =======-->
    <section id="blog" class="iq-page-blog overview-block-ptb">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-blog-box">
                        <div class="iq-blog-image clearfix">
                            {{--<img class="img-fluid" src="{{ URL::asset('assets') }}/images/blog/01.jpg" alt="#">--}}
                        </div>
                        <div class="iq-blog-detail">
                            <div class="blog-title"> <a href="/posts/{{ $allPosts->id }}"><h4 class="iq-mb-10">{{ $allPosts->title }}</h4> </a> </div>
                            <div class="blog-content" id="blogContent">
                               {!! $allPosts->postContent !!}
                            </div>
                            <div class="iq-blog-meta">
                                <ul>
                                    <?php
                                        $mycontent = $allPosts->postContent; // wordpress users only
                                        $word = str_word_count(strip_tags($mycontent));
                                        $m = floor($word / 200);
                                        $s = floor($word % 200 / (200 / 60));
                                        $est = $m . ' minute' . ($m == 1 ? '' : 's') . ', ' . $s . ' second' . ($s == 1 ? '' : 's');
                                    ?>
                                    <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> {{  $allPosts->created_at->diffForHumans() }}</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $est }}</a></li>
                                </ul>
                            </div>



                            <div id="disqus_thread"></div>
                            <script>

                                /**
                                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                                /*
                                var disqus_config = function () {
                                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                };
                                */
                                (function() { // DON'T EDIT BELOW THIS LINE
                                    var d = document, s = d.createElement('script');
                                    s.src = 'https://blog-unpeep-com.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======= End Blog =======-->
</div>




@endsection
