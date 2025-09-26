@extends('frontend/layout.app')

@section('title', 'Home')

@section('content')

<main>
    <!-- Section Banner -->
    <div class="section-404">
        <div class="banner-layout-404">
            <div class="layout-404">
                <span class="text-404 title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">404</span>
                <h3>Oops! Page Not Found</h3>
                <p>We couldn't find the page you're looking for. It might have been removed, renamed, or never existed.</p>
                <div>
                    <a href="./index.html" class="btn btn-accent">
                        <div class="btn-title">
                            <span>Back to Home</span>
                        </div>
                        <div class="icon-circle">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection