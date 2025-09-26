<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function caseStudies()
    {
        return view('frontend.pages.case-studies');
    }

    public function team()
    {
        return view('frontend.pages.team');
    }

    public function partnership()
    {
        return view('frontend.pages.partnership');
    }

    public function pricing()
    {
        return view('frontend.pages.pricing');
    }

    public function testimonial()
    {
        return view('frontend.pages.testimonial');
    }

    public function faq()
    {
        return view('frontend.pages.faq');
    }

    public function error()
    {
        return view('frontend.pages.404');
    }
}
