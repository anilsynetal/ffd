@extends('website.layout.app')
@section('title', config('app.name') . ' – Start Your Journey to Wellness')
@section('content')
    <main>
        <!--====== Start Hero Section =======-->

        <section class="hero-seo pt-100 mt-100  mb-50 home-banner-section">
            <!--=== Hero Wrapper ===-->
            <div class="hero-wrapper">
                <div class="shape blur-shape-one"><span></span></div>
                <div class="shape blur-shape-two"><span></span></div>
                <div class="shape circle-shape-one"><span></span></div>
                <div class="shape circle-shape-two"><span></span></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <!--=== Hero Content ===-->
                            <div class="hero-content">
                                {{-- <div class="element"><span><img src="{{ asset('website/assets/images/hero/shape1.png') }}"
                                            alt=""></span>
                                </div> --}}
                                <h1 class="text-anm">{{ $slider?->title }} </h1>
                                <p data-aos="fade-up" data-aos-duration="1200">{{ $slider?->description }}</p>

                            </div>
                        </div>
                        <div class="col-xl-6">
                            <!-- Hero Image Box ===-->
                            <div class="hero-image-box">
                                <div class="hero-image">
                                    <img src="{{ asset($slider?->image) }}" alt="hero image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Hero Section =======-->
        <!--====== Start Features Section =======-->
        @if ($services->count())
            @include('website.include.services')
            <!--====== End Features Section =======-->
        @endif
        <!--====== Start About Section =======-->
        <section class="about-sb pt-30 pb-35" id="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!--=== Section Title  ===-->
                        <div class="section-title style-one mb-60">
                            {{-- <span class="sub-heading"><i class="far fa-arrow-right"></i>About Company</span> --}}
                            <h2 class="text-anm"><span class="font-200">Expert Consultations Tailored</span> Strategies for
                                Business Success</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-5">
                        <!--=== Section Content Box ===-->
                        <div class="section-content-box style-one mb-15 about-content-top">
                            <p class="mb-15" data-aos="fade-up">{{ $about?->description }}</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="experience-box aos-init aos-animate" data-aos="fade-up">
                                    <div class="duration">
                                        {{ $about?->diabetes_medications }}+ Free From <br> Diabetes Medications
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="experience-box aos-init aos-animate" data-aos="fade-up">
                                    <div class="duration">
                                        {{ $about?->weight_loss }}+ Free From <br> Kgs Of Weight Loss
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="experience-box aos-init aos-animate" data-aos="fade-up">
                                    <div class="duration">
                                        {{ $about?->cholesterol_medications }}+ Free From <br> Cholesterol Medications
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="experience-box aos-init aos-animate" data-aos="fade-up">
                                    <div class="duration">
                                        {{ $about?->hypertension_medications }}+ Free From <br> Hypertension Medications
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <!--=== Iconic Box ===-->
                        <div class="section-image-box mb-55">
                            <img src="{{ asset($about?->image) }}" class="rounded-3 translate-img" alt="About Image">
                        </div>
                    </div>
                </div>
            </div>
            <!--=== Animated Big Text ===-->
        </section><!--====== End About Section =======-->
        <!--====== Start Features Section =======-->
        @if ($core_features->count())
            @include('website.include.core-features')
            <!--====== End Features Section =======-->
        @endif
        <!--====== Start Case Study Section =======-->
        @if ($case_studies->count())
            @include('website.include.case-studies')
        @endif
        <!--====== End Case Study Section =======-->
        <!--====== Start Features Section =======-->
        @if ($key_features->count())
            @include('website.include.key-features')
            <!--====== End Features Section ======-->
        @endif
        <!--====== Start Testimonial Section ======-->
        @if ($testimonials->count())
            @include('website.include.testimonials')
        @endif
        <!--====== End Testimonial Section ======-->
        <!--====== Start Company Section ======-->
        @if ($clients->count())
            @include('website.include.clients')
        @endif
        <!--====== End Company Section ======-->
        <!--====== Start Blogs Section ======-->
        @if ($blogs->count())
            @include('website.include.blogs')
        @endif
        <!--====== End Blogs Section ======-->
        <!--====== Start CTA Section ======-->
        @include('website.include.contact')
        <!--====== End CTA Section ======-->
    </main>
@endsection

<div class="modal fade" id="commonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

        </div>
    </div>
</div>
