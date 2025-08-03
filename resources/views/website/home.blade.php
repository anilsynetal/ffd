@extends('website.layout.app')
@section('content')
    <main>
        <!--====== Start Hero Section =======-->
        <section class="hero-sb mb-40">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <!--===  Hero Content  ===-->
                        <div class="hero-content">
                            <h1 class="split"><span class="">{{ $slider?->title }}</h1>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <!--===  Hero Content  ===-->
                        <div class="hero-content">
                            <div class="text-box" data-aos="fade-down" data-aos-duration="1800">
                                <p>{{ $slider?->description }} </p>

                            </div>
                            <div class="hero-image" data-aos="fade-up" data-aos-duration="2000">
                                <img src="{{ asset($slider?->image) }}" alt="Banner Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Hero Section =======-->
        <!--====== Start Features Section =======-->
        @if ($services->count())
            @include('website.include.services')
            <!--====== End Features Section =======-->
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
                            <p class="mb-35" data-aos="fade-up">{{ $about?->description }}</p>
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
