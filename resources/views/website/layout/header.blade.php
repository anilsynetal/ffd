<header class="header-area header-one">
    <!--===  Header Top  ===-->
    <div class="header-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <!--===  Top Left  ===-->
                    <div class="top-left">
                        <span>Welcome to {{ $contact->app_name }}</span>
                        <span><i class="fas fa-envelope"></i><a
                                href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></span>
                        <span><i class="fas fa-phone"></i>Call : <a href="tel:+91{{ $contact->phone }}">+91
                                {{ $contact->phone }}</a></span>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!--===  Top Right  ===-->
                    <div class="top-right">
                        <ul class="social-link">
                            <li><a target="_blank" href="{{ $contact->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a target="_blank" href="{{ $contact->twitter }}"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a target="_blank" href="{{ $contact->linkedin }}"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a target="_blank" href="{{ $contact->instagram }}"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====  Header Navigation  ===-->
    <div class="header-navigation">
        <!--====  Header Nav Inner  ===-->
        <div class="nav-inner-menu">
            <!--====  Primary Menu  ===-->
            <div class="primary-menu">
                <!--====  Site Branding  ===-->
                <div class="site-branding">
                    <a href="{{ url('/') }}" class="brand-logo">
                        <img src="{{ asset('website/assets/images/logo/logo-white.png') }}" alt="Brand Logo"
                            width="200px">
                    </a>
                </div>
                <!--=== Sasly Main Menu===-->
                <div class="sasly-nav-menu">
                    <!-- Sasly Menu Top -->
                    <div class="sasly-menu-top d-flex justify-content-between d-block d-lg-none">
                        <div class="site-branding">
                            <a href="{{ url('/') }}" class="brand-logo">
                                <img src="{{ asset('website/assets/images/logo/logo-white.png') }}" alt="Brand Logo"
                                    width="200px">
                            </a>
                        </div>
                        <div class="navbar-close">
                            <i class="far fa-times"></i>
                        </div>
                    </div>
                    <!--=== Main Menu ===-->
                    <nav class="main-menu">
                        <ul>
                            <li class="menu-item"><a href="{{ url('/') }}">Home</a></li>
                        </ul>
                    </nav>
                    <!--=== Sasly Nav Button ===-->
                    <div class="sasly-nav-button mt-20 d-block d-md-none">
                        <a href="#contact-section" class="theme-btn style-one">Get a Consultation<i
                                class="far fa-angle-double-right"></i></a>
                    </div>
                </div>
                <!--=== Header Nav Right ===-->
                <div class="nav-right-item">
                    <div class="nav-button d-none d-md-block">
                        <a href="#contact-section" class="theme-btn style-one">Get a Consultation<i
                                class="far fa-angle-double-right"></i></a>
                    </div>
                    <div class="navbar-toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
