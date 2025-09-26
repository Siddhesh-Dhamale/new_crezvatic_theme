<div class="navbar-wrapper">
    <nav class="navbar navbar-expand-xl">
        <div class="navbar-container">
            <!-- Logo -->
            <div class="logo-container" style="width:200px">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/image/marko-logo.png') }}" class="site-logo img-fluid w-100" alt="Logo">
                </a>
            </div>

            <!-- Toggle Button -->
            <button class="navbar-toggler nav-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services <i class="fa-solid fa-angle-down accent-color"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/services') }}">Service</a></li>
                            <li><a class="dropdown-item" href="{{ url('/services/single') }}">Single Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pages <i class="fa-solid fa-angle-down accent-color"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/case-studies') }}">Case Studies</a></li>
                            <li><a class="dropdown-item" href="{{ url('/team') }}">Our Team</a></li>
                            <li><a class="dropdown-item" href="{{ url('/partnership') }}">Partnership</a></li>
                            <li><a class="dropdown-item" href="{{ url('/pricing') }}">Pricing Plan</a></li>
                            <li><a class="dropdown-item" href="{{ url('/testimonial') }}">Testimonial</a></li>
                            <li><a class="dropdown-item" href="{{ url('/faq') }}">FAQs</a></li>
                            <li><a class="dropdown-item" href="{{ url('/404') }}">Error 404</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Archive <i class="fa-solid fa-angle-down accent-color"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/blog') }}">Blog</a></li>
                            <li><a class="dropdown-item" href="{{ url('/blog/single') }}">Single Post</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>

            <!-- Right-side Actions -->
            <div class="navbar-action-container">
                <div class="navbar-action-button">
                    <button id="themeSwitch" class="themeswitch" aria-label="Toggle Theme">
                        <i id="themeIcon" class="fas fa-moon"></i>
                    </button>
                </div>
                <div class="navbar-icon-wrapper">
                    <div class="icon-circle">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <h6>+1 (62) 987 7543</h6>
                </div>
            </div>
        </div>
    </nav>
</div>
