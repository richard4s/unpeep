<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExploreController extends Controller
{
    //

    public function __construct() {

    }

    public function index() {
        return view('explore');
    }

    public function imageUploads() {
        return view('uploads');
    }
}
