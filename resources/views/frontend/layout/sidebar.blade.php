<div>
    <div class="content-overlay">
        <div class="content-edit-sidebar">
            <div class="sidebar-header">
                <div></div>
                <div class="close-btn-second">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="content">
                <span>Click on the Edit Content button to edit/add the content.</span>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="sidebar-overlay"></div>
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <img src="{{ asset('assets/image/marko-logo.png') }}" class="site-logo img-fluid logo" alt="Logo">
            </div>
            <button class="close-btn"><span>X</span></button>
        </div>

        <ul class="menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About Us</a></li>

            <li class="sidebar-dropdown">
                <div class="dropdown-header">
                    <a href="#">Services</a>
                    <button class="sidebar-dropdown-btn"><i class="fa-solid fa-angle-down"></i></button>
                </div>
                <ul class="sidebar-dropdown-menu">
                    <li><a href="{{ url('/services') }}">Service</a></li>
                    <li><a href="{{ url('/services/single') }}">Service Details</a></li>
                </ul>
            </li>

            <li class="sidebar-dropdown">
                <div class="dropdown-header">
                    <a href="#">Pages</a>
                    <button class="sidebar-dropdown-btn"><i class="fa-solid fa-angle-down"></i></button>
                </div>
                <ul class="sidebar-dropdown-menu">
                    <li><a href="{{ url('/case-studies') }}">Case Studies</a></li>
                    <li><a href="{{ url('/team') }}">Our Team</a></li>
                    <li><a href="{{ url('/partnership') }}">Partnership</a></li>
                    <li><a href="{{ url('/pricing') }}">Pricing Plan</a></li>
                    <li><a href="{{ url('/testimonial') }}">Testimonial</a></li>
                    <li><a href="{{ url('/faq') }}">FAQs</a></li>
                    <li><a href="{{ url('/404') }}">Error 404</a></li>
                </ul>
            </li>

            <li class="sidebar-dropdown">
                <div class="dropdown-header">
                    <a href="#">Archive</a>
                    <button class="sidebar-dropdown-btn"><i class="fa-solid fa-angle-down"></i></button>
                </div>
                <ul class="sidebar-dropdown-menu">
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                    <li><a href="{{ url('/blog/single') }}">Single Post</a></li>
                </ul>
            </li>

            <li class="below-dropdown">
                <a href="{{ url('/contact') }}">Contact Us</a>
            </li>
        </ul>
    </div>
</div>