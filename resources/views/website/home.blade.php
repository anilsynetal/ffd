@extends('website.layout.app')
@section('content')
    <main>
        <!--====== Start Hero Section =======-->
        <section class="hero-sb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <!--===  Hero Content  ===-->
                        <div class="hero-content">
                            <h1 class="split"><span class="font-200">Modern</span><span>Business</span> Solutions</h1>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <!--===  Hero Content  ===-->
                        <div class="hero-content">
                            <div class="text-box" data-aos="fade-down" data-aos-duration="1800">
                                <p>Transforming <span>Team Health</span> for Sustainable Performance </p>
                                <a href="service-details.html" class="theme-btn style-two">Our Service<i
                                        class="far fa-angle-double-right"></i></a>
                            </div>
                            <div class="hero-image" data-aos="fade-up" data-aos-duration="2000">
                                <img src="{{ asset('website/assets/images/hero/hero-img1.jpg') }}" alt="hero img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Hero Section =======-->
        <!--====== Start Features Section =======-->
        @if ($services->count())
            <section class="what-we-sb" id="services-section">
                <div class="wrapper primary-bg pt-60 pb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--=== Section Title  ===-->
                                <div class="section-title style-one text-white text-center mb-60" data-aos="fade-up"
                                    data-aos-duration="1500">
                                    <span class="sub-heading"><i class="far fa-arrow-right"></i>What We Do</span>
                                    <h2 class="text-anm"><span class="font-200">Comprehensive Strategies for</span>
                                        Unmatched
                                        Business Growth Success</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            @foreach ($services as $key => $service)
                                <div class="col-xl-4 col-md-6 col-sm-12">
                                    <div class="sasly-info-box style-one mb-30" data-aos="fade-up">
                                        <div class="content">
                                            <div class="number">{{ ++$k }}</div>
                                            <h4 class="title">{{ $service->title }}</h4>
                                            <p>{{ $service->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section><!--====== End Features Section =======-->
        @endif
        <!--====== Start About Section =======-->
        <section class="about-sb pt-130 pb-75" id="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!--=== Section Title  ===-->
                        <div class="section-title style-one mb-60">
                            <span class="sub-heading"><i class="far fa-arrow-right"></i>About Company</span>
                            <h2 class="text-anm"><span class="font-200">Expert Consultations Tailored</span> Strategies for
                                Business Success</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-5">
                        <!--=== Section Content Box ===-->
                        <div class="section-content-box style-one mb-55">
                            <div class="experience-box mb-60" data-aos="fade-up">
                                <div class="number">
                                    28+
                                </div>
                                <div class="duration">
                                    Years of Experience <br> In Business
                                </div>
                            </div>
                            <p class="mb-35" data-aos="fade-up">Team of seasoned professionals works closely with you to
                                understand your goals and develop tailored strategies that drive growth and efficiency.
                                Whether you're looking to refine</p>
                            <div class="row">
                                <div class="col-sm-6" data-aos="fade-up">
                                    <ul class="check-list style-one">
                                        <li><i class="fas fa-badge-check"></i>Growth Method Analysis</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6" data-aos="fade-up">
                                    <ul class="check-list style-one">
                                        <li><i class="fas fa-badge-check"></i>Transforming Business</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="about-button" data-aos="fade-up">
                                <a href="about.html" class="theme-btn style-two">Learn More Us <i
                                        class="far fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <!--=== Iconic Box ===-->
                        <div class="section-image-box mb-55">
                            <img src="{{ asset('website/assets/images/about/about-1.jpg') }}"
                                class="rounded-3 translate-img" alt="About Image">
                        </div>
                    </div>
                </div>
            </div>
            <!--=== Animated Big Text ===-->
            <div class="animated-big-text">
                <div class="headline-wrap style-two">
                    <span class="marquee-wrap">
                        <span class="marquee-inner left">
                            <span class="marquee-item"><b>Innovative Business</b></span>
                            <span class="marquee-item"><b>Growth Method Analysis</b></span>
                        </span>
                        <span class="marquee-inner left">
                            <span class="marquee-item"><b>Growth Method Analysis</b></span>
                            <span class="marquee-item"><b>Innovative Business</b></span>
                        </span>
                        <span class="marquee-inner left">
                            <span class="marquee-item"><b>Innovative Business</b></span>
                            <span class="marquee-item"><b>Growth Method Analysis</b></span>
                        </span>
                    </span>
                </div>
            </div>
        </section><!--====== End About Section =======-->
        <!--====== Start Features Section =======-->
        @if ($core_features->count())
            <section class="core-features-sb">
                <div class="features-wrapper main-gray-bg pt-130 pb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--=== Section Title  ===-->
                                <div class="section-title style-one text-center mb-60">
                                    <span class="sub-heading"><i class="far fa-arrow-right"></i>Core Features</span>
                                    <h2 class="text-anm"><span class="font-200">Leading with Innovation Shaping</span> the
                                        Future of Business</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($core_features as $core_feature)
                                <div class="col-xl-3 col-sm-6">
                                    <!--=== Iconic Box ===-->
                                    <div class="sasly-card-item style-one mb-30" data-aos="fade-up"
                                        data-aos-duration="1000">
                                        <div class="content-box">
                                            <div class="icon">
                                                <i class="{{ $core_feature->icon }}"></i>
                                            </div>
                                            <div class="content">
                                                <h5>{{ $core_feature->feature_name }}</h5>
                                                <p>{{ $core_feature->description }} </p>
                                            </div>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="{{ asset('storage/' . $core_feature->image) }}"
                                                alt="Featured Image">
                                            {{-- <div class="hover-overlay">
                                                <div class="hover-content">
                                                    <a href="service-details.html" class="icon-btn"><i
                                                            class="far fa-arrow-right"></i></a>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-xl-3 col-sm-6">
                                <!--=== Iconic Box ===-->
                                <div class="sasly-card-item style-one mb-30" data-aos="fade-up" data-aos-duration="1300">
                                    <div class="content-box">
                                        <div class="icon">
                                            <i class="flaticon-iteration"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Solid planning</h5>
                                            <p>Emphasize how your services are customized meet specific needs and goals
                                                of
                                                each
                                            </p>
                                        </div>
                                    </div>
                                    <div class="thumbnail">
                                        <img src="{{ asset('website/assets/images/features/feature2.jpg') }}"
                                            alt="Featured Image">
                                        <div class="hover-overlay">
                                            <div class="hover-content">
                                                <a href="service-details.html" class="icon-btn"><i
                                                        class="far fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <!--=== Iconic Box ===-->
                                <div class="sasly-card-item style-one mb-30" data-aos="fade-up" data-aos-duration="1700">
                                    <div class="content-box">
                                        <div class="icon">
                                            <i class="flaticon-business-trip"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Business Intelligence</h5>
                                            <p>Emphasize how your services are customized meet specific needs and goals
                                                of
                                                each
                                            </p>
                                        </div>
                                    </div>
                                    <div class="thumbnail">
                                        <img src="{{ asset('website/assets/images/features/feature3.jpg') }}"
                                            alt="Featured Image">
                                        <div class="hover-overlay">
                                            <div class="hover-content">
                                                <a href="service-details.html" class="icon-btn"><i
                                                        class="far fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <!--=== Iconic Box ===-->
                                <div class="sasly-card-item style-one mb-30" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="content-box">
                                        <div class="icon">
                                            <i class="flaticon-product-development"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Multi Management</h5>
                                            <p>Emphasize how your services are customized meet specific needs and goals
                                                of
                                                each
                                            </p>
                                        </div>
                                    </div>
                                    <div class="thumbnail">
                                        <img src="{{ asset('website/assets/images/features/feature4.jpg') }}"
                                            alt="Featured Image">
                                        <div class="hover-overlay">
                                            <div class="hover-content">
                                                <a href="service-details.html" class="icon-btn"><i
                                                        class="far fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--====== End Features Section =======-->
        @endif
        <!--====== Start Case Study Section =======-->
        <section class="case-study-sb pt-130 pb-130 overflow-hidden">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-md-8">
                        <div class="section-title mb-60">
                            <span class="sub-heading"><i class="far fa-arrow-right"></i>Case Studies</span>
                            <h2 class="text-anm"><span class="font-200">
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            H</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            v</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            e</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            a</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            L</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            k</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            n</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            S</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            s</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            l</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            y</div>
                                    </div>
                                </span> <br>
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        a</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        m</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        a</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        z</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        i</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        n</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        g</div>
                                </div>
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        C</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        a</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        s</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        e</div>
                                </div>
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        E</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        x</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        p</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        e</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        r</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        i</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        e</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        n</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        c</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        e</div>
                                </div>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="case-button mb-60 float-lg-end aos-init aos-animate" data-aos="fade-left">
                            <a href="project-grid.html" class="theme-btn style-two">View All Cases <i
                                    class="far fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="case-slider slick-initialized slick-slider aos-init aos-animate" data-aos="fade-up">
                    <div class="slick-list draggable">
                        <div class="slick-track"
                            style="opacity: 1; width: 1935px; transform: translate3d(0px, 0px, 0px);">
                            <div class="sasly-project-item style-one slick-slide slick-current slick-active"
                                data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 615px;">
                                <div class="thumbnail">
                                    <img src="{{ asset('website/assets/images/project/project1.jpg') }}"
                                        alt="Project Image">
                                    <div class="hover-overlay"></div>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="project-details.html" tabindex="0">Transformative
                                            Outcomes How We
                                            Empowered
                                            Our Business Global Clients</a></h4>
                                    <a href="project-details.html" class="read-more style-one" tabindex="0"><i
                                            class="far fa-plus"></i>Project Details</a>
                                </div>
                            </div>
                            <div class="sasly-project-item style-one slick-slide slick-active" data-slick-index="1"
                                aria-hidden="false" tabindex="0" style="width: 615px;">
                                <div class="thumbnail">
                                    <img src="{{ asset('website/assets/images/project/project2.jpg') }}"
                                        alt="Project Image">
                                    <div class="hover-overlay"></div>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="project-details.html" tabindex="0">Global Impact
                                            Empowering Clients
                                            and Achieving Transformative Results</a></h4>
                                    <a href="project-details.html" class="read-more style-one" tabindex="0"><i
                                            class="far fa-plus"></i>Project Details</a>
                                </div>
                            </div>
                            <div class="sasly-project-item style-one slick-slide slick-active" data-slick-index="2"
                                aria-hidden="false" tabindex="0" style="width: 615px;">
                                <div class="thumbnail">
                                    <img src="{{ asset('website/assets/images/project/project3.jpg') }}"
                                        alt="Project Image">
                                    <div class="hover-overlay"></div>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="project-details.html" tabindex="0">Empowering Global
                                            Clients
                                            Transformative Outcomes and Success Stories</a></h4>
                                    <a href="project-details.html" class="read-more style-one" tabindex="0"><i
                                            class="far fa-plus"></i>Project Details</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section><!--====== End Case Study Section =======-->
        <!--====== Start Features Section =======-->
        @if ($key_features->count())
            <section class="key-features-sb">
                <!--=== Features Bg Wrapper ===-->
                <div class="features-bg-wrapper_two primary-black-bg pt-130 pb-105">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--=== Section Title ===-->
                                <div class="section-title text-white text-center mb-100" data-aos="fade-down">
                                    <span class="sub-heading"><i class="far fa-arrow-right"></i>Key Features</span>
                                    <h2 class="text-anm"><span class="font-200">Mastering Success Comprehensive</span><br>
                                        Business Success Guides</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <!--=== Section Content Box ===-->
                                <div class="section-content-box mb-50">
                                    <!--=== Iconic Box ===-->
                                    @foreach ($key_features as $key_feature)
                                        <div class="sasly-iconic-box style-one mb-20" data-aos="fade-up"
                                            data-aos-duration="1200">
                                            <div class="icon">
                                                <i class="far fa-check"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">{{ $key_feature->feature_name }}</h4>
                                                <p>{{ $key_feature->description }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!--=== Iconic Box ===-->
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!--=== Section Image Box ===-->
                                <div class="section-image-box mb-20">
                                    <div class="row">
                                        @foreach ($key_features as $k => $key_feature)
                                            @if ($k < 2)
                                                <div class="col-md-6">
                                                    <div class="sasly-img sasly-img_one mb-30" data-aos="fade-up">
                                                        <img src="{{ asset('storage/' . $key_feature->image) }}"
                                                            alt="{{ $key_feature->feature_name }}">
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div class="company-box style-one" data-aos="fade-up">
                                            <div class="content">
                                                <img src="{{ asset('storage/' . $contact->app_logo) }}" alt="Brand Logo">
                                                <h5>{{ $contact->app_name }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--====== End Features Section ======-->
        @endif
        <!--====== Start Testimonial Section ======-->
        <section class="testimonial-sb pt-55 pb-80">
            <!--=== Animated Big Text ===-->
            <div class="animated-big-text pb-75">
                <div class="headline-wrap style-two">
                    <span class="marquee-wrap">
                        <span class="marquee-inner left">
                            <span class="marquee-item"><b>Clients Testimonials</b></span>
                            <span class="marquee-item"><b>Clients Testimonials</b></span>
                        </span>
                        <span class="marquee-inner left">
                            <span class="marquee-item"><b>Clients Testimonials</b></span>
                            <span class="marquee-item"><b>Clients Testimonials</b></span>
                        </span>
                    </span>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-md-8">
                        <!--=== Section Title ===-->
                        <div class="section-title mb-60">
                            <span class="sub-heading"><i class="far fa-arrow-right"></i>Our Testimonials</span>
                            <h2 class="text-anm"><span class="font-200">
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            W</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            e</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            H</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            v</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            e</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            1</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            5</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            3</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            0</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            +</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            R</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            v</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            w</div>
                                        <div
                                            style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                            s</div>
                                    </div>
                                </span> <br>
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        L</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        e</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        t</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        ’</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        s</div>
                                </div>
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        E</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        x</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        p</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        l</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        o</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        r</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        e</div>
                                </div>
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        C</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        l</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        i</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        e</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        n</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        t</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        s</div>
                                </div>
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        F</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        e</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        e</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        d</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        b</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        a</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        c</div>
                                    <div
                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        k</div>
                                </div>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--=== Testimonial Arrows ===-->
                        <div class="testimonial-arrows mb-50">
                            <div class="prev slick-arrow" style=""><i class="far fa-angle-left"></i></div>
                            <div class="next slick-arrow" style=""><i class="far fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 order-lg-1 order-2">
                        <!--=== Sasly Rating Box ===-->
                        <div class="sasly-rating-box mb-50">
                            <div class="text-box">
                                <div class="rating-point">4.8</div>
                                <p><a href="#">(563k+ Reviews)</a></p>
                                <ul class="ratings">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="author-box">
                                <ul class="author-list">
                                    <li>
                                        <img src="{{ asset('website/assets/images/testimonial/author1.jpg') }}"
                                            alt="Author Image">
                                    </li>
                                    <li>
                                        <img src="{{ asset('website/assets/images/testimonial/author2.jpg') }}"
                                            alt="Author Image">
                                    </li>
                                    <li>
                                        <img src="{{ asset('website/assets/images/testimonial/author3.jpg') }}"
                                            alt="Author Image">
                                    </li>
                                    <li>
                                        <img src="{{ asset('website/assets/images/testimonial/author4.jpg') }}"
                                            alt="Author Image">
                                    </li>
                                    <li>
                                        <a href="#" class="add-author-btn">+</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-6 order-lg-2 order-1">
                        <!--=== Testimonial Slider ===-->
                        <div class="testimonial-slider mb-50 slick-initialized slick-slider">
                            <!--=== Testimonial Item ===-->
                            <div class="slick-list draggable">
                                <div class="slick-track"
                                    style="opacity: 1; width: 4260px; transform: translate3d(-1704px, 0px, 0px);">
                                    <div class="sasly-testimonial-item style-one slick-slide slick-cloned"
                                        data-slick-index="-1" id="" aria-hidden="true" tabindex="-1"
                                        style="width: 852px;">
                                        <div class="dot-bg bg_cover"
                                            style="background-image: url({{ asset('website/assets/images/testimonial/dot-bg.png') }});">
                                        </div>
                                        <div class="testimonial-content">
                                            <div class="author-thumb-company d-flex mb-30">
                                                <div class="author-thumb">
                                                    <img src="{{ asset('website/assets/images/testimonial/author5.png') }}"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-company">
                                                    <img src="{{ asset('website/assets/images/testimonial/client1.png') }}"
                                                        alt="Author Company">
                                                </div>
                                            </div>
                                            <p>"Working with Your Agency has beens game-changer for the
                                                our business. Their strategic insights innovative solutions way have
                                                propelled our growth beyond our satisfied."</p>
                                            <div class="author-info-box">
                                                <div class="author-info">
                                                    <h4>Ricardo F. Bowers</h4>
                                                    <span class="position">CEO &amp; Founder</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sasly-testimonial-item style-one slick-slide" data-slick-index="0"
                                        aria-hidden="true" tabindex="-1" style="width: 852px;">
                                        <div class="dot-bg bg_cover"
                                            style="background-image: url({{ asset('website/assets/images/testimonial/dot-bg.png') }});">
                                        </div>
                                        <div class="testimonial-content">
                                            <div class="author-thumb-company d-flex mb-30">
                                                <div class="author-thumb">
                                                    <img src="{{ asset('website/assets/images/testimonial/author5.png') }}"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-company">
                                                    <img src="{{ asset('website/assets/images/testimonial/client1.png') }}"
                                                        alt="Author Company">
                                                </div>
                                            </div>
                                            <p>"Working with Your Agency has beens game-changer for the
                                                our business. Their strategic insights innovative solutions way have
                                                propelled our growth beyond our satisfied."</p>
                                            <div class="author-info-box">
                                                <div class="author-info">
                                                    <h4>Ricardo F. Bowers</h4>
                                                    <span class="position">CEO &amp; Founder</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sasly-testimonial-item style-one slick-slide slick-current slick-active"
                                        data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 852px;">
                                        <div class="dot-bg bg_cover"
                                            style="background-image: url({{ asset('website/assets/images/testimonial/dot-bg.png') }});">
                                        </div>
                                        <div class="testimonial-content">
                                            <div class="author-thumb-company d-flex mb-30">
                                                <div class="author-thumb">
                                                    <img src="{{ asset('website/assets/images/testimonial/author5.png') }}"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-company">
                                                    <img src="{{ asset('website/assets/images/testimonial/client1.png') }}"
                                                        alt="Author Company">
                                                </div>
                                            </div>
                                            <p>"Working with Your Agency has beens game-changer for the
                                                our business. Their strategic insights innovative solutions way have
                                                propelled our growth beyond our satisfied."</p>
                                            <div class="author-info-box">
                                                <div class="author-info">
                                                    <h4>Ricardo F. Bowers</h4>
                                                    <span class="position">CEO &amp; Founder</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sasly-testimonial-item style-one slick-slide slick-cloned"
                                        data-slick-index="2" id="" aria-hidden="true" tabindex="-1"
                                        style="width: 852px;">
                                        <div class="dot-bg bg_cover"
                                            style="background-image: url({{ asset('website/assets/images/testimonial/dot-bg.png') }});">
                                        </div>
                                        <div class="testimonial-content">
                                            <div class="author-thumb-company d-flex mb-30">
                                                <div class="author-thumb">
                                                    <img src="{{ asset('website/assets/images/testimonial/author5.png') }}"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-company">
                                                    <img src="{{ asset('website/assets/images/testimonial/client1.png') }}"
                                                        alt="Author Company">
                                                </div>
                                            </div>
                                            <p>"Working with Your Agency has beens game-changer for the
                                                our business. Their strategic insights innovative solutions way have
                                                propelled our growth beyond our satisfied."</p>
                                            <div class="author-info-box">
                                                <div class="author-info">
                                                    <h4>Ricardo F. Bowers</h4>
                                                    <span class="position">CEO &amp; Founder</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sasly-testimonial-item style-one slick-slide slick-cloned"
                                        data-slick-index="3" id="" aria-hidden="true" tabindex="-1"
                                        style="width: 852px;">
                                        <div class="dot-bg bg_cover"
                                            style="background-image: url({{ asset('website/assets/images/testimonial/dot-bg.png') }});">
                                        </div>
                                        <div class="testimonial-content">
                                            <div class="author-thumb-company d-flex mb-30">
                                                <div class="author-thumb">
                                                    <img src="{{ asset('website/assets/images/testimonial/author5.png') }}"
                                                        alt="Author Image">
                                                </div>
                                                <div class="author-company">
                                                    <img src="{{ asset('website/assets/images/testimonial/client1.png') }}"
                                                        alt="Author Company">
                                                </div>
                                            </div>
                                            <p>"Working with Your Agency has beens game-changer for the
                                                our business. Their strategic insights innovative solutions way have
                                                propelled our growth beyond our satisfied."</p>
                                            <div class="author-info-box">
                                                <div class="author-info">
                                                    <h4>Ricardo F. Bowers</h4>
                                                    <span class="position">CEO &amp; Founder</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--=== Testimonial Item ===-->

                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Testimonial Section ======-->
        <!--====== Start Company Section ======-->
        <section class="company-sb pt-70 pb-70">
            <!--=== Company Wrapper ===-->
            <div class="container-fluid">
                <!--=== Company Slider ===-->
                <div class="company-slider slick-initialized slick-slider">
                    <!--=== Company Item ===-->
                    <div class="slick-list draggable">
                        <div class="slick-track"
                            style="opacity: 1; width: 4914px; transform: translate3d(-2079px, 0px, 0px); transition: transform 6000ms linear;">
                            <div class="company-item slick-slide slick-cloned" data-slick-index="-8" id=""
                                aria-hidden="true" tabindex="-1" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-2.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-cloned" data-slick-index="-7" id=""
                                aria-hidden="true" tabindex="-1" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-3.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-cloned" data-slick-index="-6" id=""
                                aria-hidden="true" tabindex="-1" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-4.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-cloned" data-slick-index="-5" id=""
                                aria-hidden="true" tabindex="-1" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-5.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-cloned" data-slick-index="-4" id=""
                                aria-hidden="true" tabindex="-1" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-6.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-cloned" data-slick-index="-3" id=""
                                aria-hidden="true" tabindex="-1" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-7.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-cloned" data-slick-index="-2" id=""
                                aria-hidden="true" tabindex="-1" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-8.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-cloned" data-slick-index="-1" id=""
                                aria-hidden="true" tabindex="-1" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-4.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1"
                                style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-1.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1"
                                style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-2.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide" data-slick-index="2" aria-hidden="true" tabindex="0"
                                style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-3.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-current slick-active" data-slick-index="3"
                                aria-hidden="false" tabindex="0" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-4.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-active" data-slick-index="4" aria-hidden="false"
                                tabindex="0" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-5.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-active" data-slick-index="5" aria-hidden="false"
                                tabindex="0" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-6.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-active" data-slick-index="6" aria-hidden="false"
                                tabindex="0" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-7.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-active" data-slick-index="7" aria-hidden="false"
                                tabindex="0" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-8.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-active" data-slick-index="8" aria-hidden="false"
                                tabindex="0" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-4.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-cloned slick-active" data-slick-index="9"
                                id="" aria-hidden="false" tabindex="-1" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-1.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-cloned slick-active" data-slick-index="10"
                                id="" aria-hidden="false" tabindex="-1" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-2.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-cloned" data-slick-index="11" id=""
                                aria-hidden="true" tabindex="-1" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-3.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-cloned" data-slick-index="12" id=""
                                aria-hidden="true" tabindex="-1" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-4.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-cloned" data-slick-index="13" id=""
                                aria-hidden="true" tabindex="-1" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-5.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-cloned" data-slick-index="14" id=""
                                aria-hidden="true" tabindex="-1" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-6.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-cloned" data-slick-index="15" id=""
                                aria-hidden="true" tabindex="-1" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-7.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-cloned" data-slick-index="16" id=""
                                aria-hidden="true" tabindex="-1" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-8.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                            <div class="company-item slick-slide slick-cloned" data-slick-index="17" id=""
                                aria-hidden="true" tabindex="-1" style="width: 189px;">
                                <div class="company-img">
                                    <img src="{{ asset('website/assets/images/comapny/client-4.png') }}"
                                        alt="Company Thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Company Section ======-->
        <!--====== Start Blogs Section ======-->
        <section class="blogs-sb pt-130 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--=== Section Title ===-->
                        <div class="section-title text-center mb-120">
                            <span class="sub-heading"><i class="far fa-arrow-right"></i>News & Blog</span>
                            <h2 class="text-anm"><span class="font-200">Read Our</span> Latest News & Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <!--=== Blog Post Item ===-->
                        <div class="blog-post-item style-one mb-80" data-aos="fade-up" data-aos-duration="1200">
                            <div class="post-thumbnail">
                                <img src="{{ asset('website/assets/images/blog/blog1.jpg') }}" alt="Blog Thumbnail">
                            </div>
                            <div class="post-content">
                                <div class="post-meta style-one">
                                    <span class="category"><a href="#">Business</a></span>
                                    <span class="date"><a href="#">September 20, 2024</a></span>
                                </div>
                                <h4 class="title"><a href="blog-details.html">Unlocking the Power of Digital
                                        Transform for Business</a></h4>
                                <p>The team at truly understands our industry. tailored approach helped streamline</p>
                                <a href="blog-details.html" class="read-more style-one"><i class="far fa-plus"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <!--=== Blog Post Item ===-->
                        <div class="blog-post-item style-one mb-80" data-aos="fade-up" data-aos-duration="1400">
                            <div class="post-thumbnail">
                                <img src="{{ asset('website/assets/images/blog/blog2.jpg') }}" alt="Blog Thumbnail">
                            </div>
                            <div class="post-content">
                                <div class="post-meta style-one">
                                    <span class="category"><a href="#">Consulting</a></span>
                                    <span class="date"><a href="#">September 20, 2024</a></span>
                                </div>
                                <h4 class="title"><a href="blog-details.html">How to Leverage Data-Driven Decisions for
                                        Business Growth</a></h4>
                                <p>The team at truly understands our industry. tailored approach helped streamline</p>
                                <a href="blog-details.html" class="read-more style-one"><i class="far fa-plus"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <!--=== Blog Post Item ===-->
                        <div class="blog-post-item style-one mb-80" data-aos="fade-up" data-aos-duration="1600">
                            <div class="post-thumbnail">
                                <img src="{{ asset('website/assets/images/blog/blog3.jpg') }}" alt="Blog Thumbnail">
                            </div>
                            <div class="post-content">
                                <div class="post-meta style-one">
                                    <span class="category"><a href="#">Business</a></span>
                                    <span class="date"><a href="#">September 20, 2024</a></span>
                                </div>
                                <h4 class="title"><a href="blog-details.html">Navigating Economic Tips for Resilient
                                        Business Planning</a></h4>
                                <p>The team at truly understands our industry. tailored approach helped streamline</p>
                                <a href="blog-details.html" class="read-more style-one"><i class="far fa-plus"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Blogs Section ======-->
        <!--====== Start CTA Section ======-->
        <section class="cta-sb bg_cover p-r z-1 pt-90 pb-40"
            style="background-image: url({{ asset('website/assets/images/bg/cta-bg1.jpg') }});">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8">
                        <!--=== Section Content Box ===-->
                        <div class="section-content-box">
                            <div class="section-title text-white">
                                <h2 class="text-anm"><span class="font-200">Need Consultations?</span> <br>
                                    We Are Ready to Providing<br>
                                    Amazing Business Idea</h2>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <!--=== Contact Form ===-->
                            <div class="contact-form mt-20">
                                <form action="{{ route('enquiry.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6 mb-20">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Your Name" required maxlength="100">
                                        </div>
                                        <div class="form-group col-md-6 mb-20">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Your Email" required maxlength="100">
                                        </div>
                                        <div class="form-group col-md-6 mb-20">
                                            <input type="text" name="mobile" class="form-control"
                                                placeholder="Mobile Number" required maxlength="20">
                                        </div>
                                        <div class="form-group col-md-6 mb-20">
                                            <input type="text" name="company_name" class="form-control"
                                                placeholder="Company Name (Optional)" maxlength="255">
                                        </div>
                                        <div class="form-group  col-md-12 mb-20">
                                            <textarea name="message" class="form-control" placeholder="Your Message (Optional)" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="section-content-box mb-40">
                            <div class="row">
                                <div class="col-xl-12 col-md-6">
                                    <!--=== Iconic Box ===-->
                                    <div class="sasly-iconic-box style-two mb-10" data-aos="fade-down"
                                        data-aos-duration="1000">
                                        <div class="content">
                                            <h4 class="title"><i class="flaticon-award-symbol"></i><span>We Are Award
                                                    Winning Company</span></h4>
                                            <p>Pinnacle <span>Business Solution</span> commitment
                                                excellence and innovation earned </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6 mt-5">
                                    <!--=== Iconic Box ===-->
                                    <div class="sasly-iconic-box style-two mb-10" data-aos="fade-up"
                                        data-aos-duration="1300">
                                        <div class="content">
                                            <h4 class="title"><i
                                                    class="flaticon-professional-development"></i><span>Professionals and
                                                    Expert Support</span></h4>
                                            <p>Pinnacle <span>Business Solution</span> commitment
                                                excellence and innovation earned </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End CTA Section ======-->
    </main>
@endsection
