@extends('website.layout.app')
@section('content')
    <div class="page-content">
        @if ($product->slider_status)
            <section class="banner banner-1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 order-lg-1">
                            <div class="banner-img position-relative animate__animated animate__fadeInRight animate__slow">
                                <img class="img-fluid img1"
                                    src="{{ asset('website/assets/images/banner/banner-img-bg.webp') }}" alt="">
                                <img class="img-fluid topBottom" src="{{ asset($slider->image) }}" alt="Slider Image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mt-10 mt-lg-0">
                            <div class="banner-text">
                                <h1 class="mb-4 animate__animated animate__shakeX animate__slow">
                                    {{ $slider->title }}
                                </h1>
                                <div class="mb-5 animate__animated animate__zoomIn animate__slow">
                                    <p>
                                        {{ $slider->description }}
                                    </p>
                                </div>
                                <div class="d-sm-flex align-items-center animate__animated animate__fadeInUp animate__slow">
                                    <a class="themeht-btn secondary-btn" href="{{ $slider->button_link }}">
                                        {{ $slider->button_text }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#0099ff" fill-opacity="1"
                            d="M0,160L60,176C120,192,240,224,360,240C480,256,600,256,720,234.7C840,213,960,171,1080,160C1200,149,1320,171,1380,181.3L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                        </path>
                    </svg>
                </div>
            </section>
        @endif
        <!-- About us start -->
        @if ($product->about_status)
            <section id="about-us">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <img class="img-fluid topBottom" src="{{ asset($about->image) }}" alt="">
                        </div>
                        <div class="col-lg-6 col-md-12 mt-6 mt-lg-0 ps-lg-10">
                            <div class="theme-title mb-4">
                                <h6>About us</h6>
                                <h2>
                                    {{ $about->title }}
                                </h2>
                                <p>
                                    {{ $about->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <!-- About us end -->

        <!--service start-->
        @if ($services->count() > 0 && $product->service_status)
            <section class="pt-0" id="services">
                <div class="container">
                    <div class="row align-items-end mb-8">
                        <div class="col-lg-6 col-md-12">
                            <div class="theme-title mb-0">
                                <h6>Our Services</h6>
                                <h2>Provide creative services for your <span>business strategy</span>
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-4 ms-auto col-md-12 mt-3 mt-lg-0">
                            <p class="mb-0">Our team is excited to share with you the latest Real-Time Engagement (RTE)
                                business and industry trends and development info.</p>
                        </div>
                    </div>
                    <div class="row gx-4">
                        @foreach ($services as $service)
                            <div class="col-lg-3 col-md-6">
                                <div class="service-item style-1">
                                    <div class="service-icon">
                                        <img class="img-fluid" src="{{ asset($service->image) }}" alt="">
                                    </div>
                                    <div class="service-desc">
                                        <div class="service-title">
                                            <h4>
                                                <a href="javascript:void(0);">
                                                    {{ $service->title }}
                                                </a>
                                            </h4>
                                            <p>
                                                {{ $service->description, 50 }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="animated-icon-shape">
                    <img class="img-fluid small-circle-animation"
                        src="{{ asset('website/assets/images/small-icon/01.png') }}" alt="">
                    <img class="img-fluid small-circle-animation"
                        src="{{ asset('website/assets/images/small-icon/02.png') }}" alt="">
                    <img class="img-fluid small-circle-animation"
                        src="{{ asset('website/assets/images/small-icon/03.png') }}" alt="">
                    <img class="img-fluid small-circle-animation"
                        src="{{ asset('website/assets/images/small-icon/04.png') }}" alt="">
                </div>
            </section>
        @endif

        @if ($features->count() > 0 && $product->feature_status)
            <section class="pt-0" id="features">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-6 col-lg-8 col-md-12">
                            <div class="theme-title">
                                <h6>Features</h6>
                                <h2>
                                    Explore our <span>latest features</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-lg-5">
                        @foreach ($features as $feature)
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item style-3">
                                    <div class="service-icon" data-bg-color="#eafaff">
                                        <img class="img-fluid" src="{{ asset($feature->image) }}"
                                            alt="{{ $feature->title }}">
                                    </div>
                                    <div class="service-desc">
                                        <div class="service-title">
                                            <h4>
                                                <a href="javascript:void(0);">{{ $feature->title }}</a>
                                            </h4>
                                            <p>{{ $feature->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!--feature end-->
        @endif


        <!--step start-->
        @if ($benefits->count() > 0 && $product->benefit_status)
            <section class="pt-0" id="benefits">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-6 col-lg-8 col-md-12">
                            <div class="theme-title">
                                <h6>Benefits</h6>
                                <h2>
                                    Explore our <span>latest benefits</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($benefits as $benefit)
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item style-3">
                                    <div class="service-icon" data-bg-color="#eafaff">
                                        <img class="img-fluid" src="{{ asset($benefit->image) }}"
                                            alt="{{ $benefit->title }}">
                                    </div>
                                    <div class="service-desc">
                                        <div class="service-title">
                                            <h4>
                                                <a href="javascript:void(0);">{{ $benefit->title }}</a>
                                            </h4>
                                            <p>{{ $benefit->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        <!--step end-->

        <!--testimonial start-->

        @if ($testimonials->count() > 0 && $product->testimonial_status)
            <section class="testimonial-sec-bg position-relative pb-10 pt-0" id="testimonials">
                <div class="container">
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-xl-7 col-lg-8 col-md-12">
                            <div class="theme-title">
                                <h6>Testimonial</h6>
                                <h2>
                                    What our <span>clients say</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper testimonial-swiper">
                        <div class="swiper-wrapper">
                            @foreach ($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="testimonial style-1">
                                                <div class="testimonial-img">
                                                    <img class="img-fluid" src="{{ asset($testimonial->image) }}"
                                                        alt="{{ $testimonial->name }}">
                                                </div>
                                                <div class="testimonial-content position-relative">
                                                    <div class="testimonial-quote">
                                                        <img class="img-fluid"
                                                            src="{{ asset('website/assets/images/quote1.svg') }}"
                                                            alt="">
                                                    </div>
                                                    <p>
                                                        {{ $testimonial->description }}
                                                    </p>
                                                    <div class="testimonial-caption">
                                                        <h5>
                                                            {{ $testimonial->name }}
                                                        </h5>
                                                    </div>
                                                    <div class="testimonial-rating">
                                                        @for ($i = 0; $i < 5; $i++)
                                                            @if ($i < $testimonial->rating)
                                                                <i class="bi bi-star-fill"></i>
                                                            @else
                                                                <i class="bi bi-star"></i>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                </div>
                                                <div class="testimonial-quote right">
                                                    <img class="img-fluid"
                                                        src="{{ asset('website/assets/images/quote2.svg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="testimonial-side-img d-flex justify-content-center ms-0 mb-0 list-unstyled">
                                @foreach ($testimonials as $testimonial)
                                    <li>
                                        <img class="img-fluid" src="{{ asset($testimonial->image) }}"
                                            alt="{{ $testimonial->name }}">
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <!--testimonial end-->


        <!--blog start-->
        @if ($blogs->count() > 0 && $product->blog_status)
            <section class="pt-0" id="blogs">
                <div class="container">
                    <div class="row align-items-end mb-8">
                        <div class="col-lg-6 col-md-12">
                            <div class="theme-title mb-0">
                                <h6>Recent Blogs</h6>
                                <h2>Read Articles <span>Written By Professionals</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($blogs as $blog)
                            <div class="col-lg-4 col-md-12">
                                <div class="post-card style-1">
                                    <div class="post-image">
                                        <img class="img-fluid w-100" src="{{ asset($blog->image) }}"
                                            alt="{{ $blog->title }}">
                                    </div>
                                    <div class="post-desc">
                                        <div class="post-bottom">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <i class="bi bi-calendar3"></i>
                                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('d F, Y') }}
                                                </li>
                                                {{-- <li class="list-inline-item">
                                            <i class="bi bi-tag"></i> Category
                                        </li> --}}
                                            </ul>
                                        </div>
                                        <div class="post-title">
                                            <h4>
                                                <a href="{{ route('website.blog-details', $blog->slug) }}">
                                                    {{ $blog->title }}
                                                </a>
                                            </h4>
                                        </div>
                                        <a class="ht-link-btn" href="{{ route('website.blog-details', $blog->slug) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="arr-2" viewBox="0 0 24 24">
                                                <path
                                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                                                </path>
                                            </svg>
                                            <span>Read More</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="arr-1" viewBox="0 0 24 24">
                                                <path
                                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
        <!--blog end-->
        @if ($product->contact_status)
            <section class="pt-0" id="contact-us">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 order-lg-1">
                            <img class="img-fluid topBottom"
                                src="https://zippy.radiantthemes.com/digital-marketing/wp-content/uploads/sites/12/2023/06/marketing-agency-img-team2.webp"
                                alt="">
                        </div>
                        <div class="col-lg-6 col-md-12 mt-10 mt-lg-0 pe-lg-10">
                            <div class="box-shadow rounded p-5">
                                <div class="theme-title">
                                    <h6>Get in Touch</h6>
                                    <h2>connect with us <span>For Any Query</span>
                                    </h2>
                                </div>
                                <form id="contact-form" method="post" action="php/contact.php">
                                    <div class="messages"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Your Name</label>
                                                <input id="form_name" type="text" name="name" class="form-control"
                                                    placeholder="Enter Your Name" required="required"
                                                    data-error="Name is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input id="form_email" type="email" name="email"
                                                    class="form-control" placeholder="Enter Email Address"
                                                    required="required" data-error="Valid email is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input id="form_phone" type="tel" name="phone"
                                                    class="form-control" placeholder="Enter Phone number"
                                                    required="required" data-error="Phone is required">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select Service</label>
                                                <select class="form-control form-select"
                                                    aria-label="Default select example">
                                                    <option selected>Select Service</option>
                                                    <option value="1">Business</option>
                                                    <option value="2">Software</option>
                                                    <option value="3">Sass</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea id="form_message" name="message" class="form-control" placeholder="Write Your Message Here..."
                                                    rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <button class="themeht-btn primary-btn">
                                                Send Message
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </section>
        @endif
        <!--faq start-->
        @if ($faqs->count() > 0 && $product->faq_status)
            <section class="pt-0" id="faq">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="theme-title p-5 mb-0">
                                <h6>F.A.Q.</h6>
                                <h2>Most Trending & Popular Question</h2>
                            </div>
                            <img class="img-fluid rounded" src="{{ asset('website/assets/images/about/04.png') }}"
                                alt="">
                        </div>
                        <div class="col-lg-6 col-md-12 mt-6 mt-lg-0 ps-lg-10">
                            <div class="accordion" id="accordion">
                                @foreach ($faqs as $faq)
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="heading{{ $loop->index }}">
                                            <button class="accordion-button shadow-none mb-0 bg-transparent"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $loop->index }}"
                                                aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                                aria-controls="collapse{{ $loop->index }}">{{ $faq->question }}</button>
                                        </h3>
                                        <div id="collapse{{ $loop->index }}"
                                            class="accordion-collapse border-0 collapse {{ $loop->first ? 'show' : '' }}"
                                            aria-labelledby="heading{{ $loop->index }}" data-bs-parent="#accordion">
                                            <div class="accordion-body">{{ $faq->answer }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <!--faq end-->
    </div>
@endsection
