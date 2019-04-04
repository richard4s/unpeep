@extends('layouts.admin_app')

@section('title', 'Blog Posts')

@section('content')

    <div class="wrapper">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6"><h4 class="page-title">Posts</h4></div>
                    <div class="col-sm-6">
                        <div class="float-right d-none d-md-block">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light"
                                        type="button" data-toggle="dropdown" onclick="return window.location='new-post';" id="create-post" aria-haspopup="true" aria-expanded="false"><i
                                            class="mdi mdi-plus-box-outline mr-2"></i> Create Post </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body"><h4 class="mt-0 header-title">Blog Posts</h4>
                            <p class="text-muted m-b-30">Shows all our blog posts.
                            </p>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Post Title</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allPosts as $key => $posts)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $posts->title }}</td>
                                        <td>

                                            <a href="{{ route('edit-posts') }}/{{ $posts->id }}">
                                                <button type="button" class="btn btn-warning waves-effect waves-light m-r-5">
                                                    <i class="fa fa-pen"></i>
                                                </button>
                                            </a>
                                            <button type="button" onclick="deletePosts({{ $posts->id }})" class="btn btn-danger waves-effect waves-light m-r-5">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- end col --></div><!-- end row -->
        </div>
    </div>

@endsection