@extends('layouts.admin_app')

@section('title', 'Edit Post')

@section('content')

    <div class="wrapper">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6"><h4 class="page-title">Edit posts</h4></div>
                    <div class="col-sm-6">
                        <div class="float-right d-none d-md-block">
                            <div class="dropdown">
                                <button type="submit" id="saveBtn" class="btn btn-success waves-effect waves-light m-r-5"><i
                                            class="far fa-save"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class=" mb-3">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="/edit-posts" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input name="title" type="text" class="form-control" value="{{ $editPosts->title }}">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control summernote" name="postContent">{{ $editPosts->postContent }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <div class="btn-toolbar form-group mb-0">
                                            <div class="">
                                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-5"><i
                                                            class="far fa-save"></i></button>
                                                <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i
                                                            class="far fa-trash-alt"></i></button>
                                                <button class="btn btn-primary waves-effect waves-light"><span>Send</span> <i
                                                            class="fab fa-telegram-plane m-l-10"></i></button>
                                            </div>
                                        </div>

                            </div>
                                </form>
                        </div>
                    </div><!-- end Col-9 -->
                </div>
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- page wrapper end --><!-- Footer -->

@endsection