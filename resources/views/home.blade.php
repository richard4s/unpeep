@extends('layouts.app')

@section('title', 'Blog')

    @section('content')



                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                        <main>
                            <div class="morph-wrap">
                                <svg class="morph" width="1400" height="770" viewBox="0 0 1400 770">
                                    <path d="M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z" />
                                </svg>
                            </div>

                            @foreach($posts as $key => $blogPosts)
                                <div class="content-wrap">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-12">
                                                <div class="img-border">
                                                    <img class="img-fluid" src="{{ URL::asset('assets') }}/images/scroll/09.gif" alt="#" />
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-12 align-self-center">
                                                <div class="text-box">
                                                    <h1 class="iq-font-white">{{ $blogPosts->title }}</h1>
                                                    <p class="iq-mt-10">{{ mb_substr(strip_tags($blogPosts->postContent), 0, 100) }}</p>
                                                    <a class="button white" href="/posts/{{ $blogPosts->id }}/{{ str_replace(' ', '-', strtolower($blogPosts->title))  }}"><i class="fa fa-angle-double-left iq-mr-10" aria-hidden="true"></i>Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-12">

                                        </div>
                                        <div class="col-lg-5 col-md-12 align-self-center">
                                            {{ $posts->links() }}
                                        </div>
                                    </div>
                                </div>

                            <!-- Related demos -->
                            <div class="content content--related">
                            </div>
                        </main>


@endsection
