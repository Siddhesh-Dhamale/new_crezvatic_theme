<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('frontend.pages.services');
    }

    public function singleService(){
        return view('frontend.pages.singleService');
    }                               
}
