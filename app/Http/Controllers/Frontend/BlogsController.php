<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index() {
        return view('frontend.pages.blogs');
    }
    public function singleBlog() {
        return view('frontend.pages.singleBlog');
    }
}
