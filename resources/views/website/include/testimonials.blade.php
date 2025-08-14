<section class="testimonial-sb pt-55 pb-80">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-8">
                <!-- Section Title -->
                {{-- <div class="section-title mb-60">
                    <span class="sub-heading"><i class="far fa-arrow-right"></i> Our Testimonials</span>
                </div> --}}
            </div>
            <div class="col-md-4">
                <!-- Testimonial Arrows -->
                <div class="testimonial-arrows mb-50">
                    <div class="prev slick-arrow"><i class="far fa-angle-left"></i></div>
                    <div class="next slick-arrow"><i class="far fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 order-lg-1 order-2">
                <!-- Rating Box -->
                <div class="sasly-rating-box mb-50">
                    <div class="text-box">
                        <p><a href="javascript:void(0);">({{ $testimonials->count() }}+ Reviews)</a></p>
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
                            @foreach ($testimonials as $testimonial)
                                <li>
                                    <img src="{{ asset($testimonial->image ? $testimonial->image : 'website/assets/images/default-profile.png') }}"
                                        alt="{{ $testimonial->name }}">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-6 order-lg-2 order-1">
                <!-- Testimonial Slider -->
                <div class="testimonial-slider">
                    @foreach ($testimonials as $testimonial)
                        <div class="sasly-testimonial-item style-one">
                            <div class="dot-bg bg_cover"
                                style="background-image: url({{ asset('website/assets/images/testimonial/dot-bg.png') }});">
                            </div>
                            <div class="testimonial-content">
                                <div class="author-thumb-company d-flex mb-30">
                                    <div class="author-thumb">
                                        <img src="{{ asset($testimonial->image ? $testimonial->image : 'website/assets/images/default-profile.png') }}"
                                            alt="{{ $testimonial->name }}" width="100px">
                                    </div>
                                </div>
                                <p>"{{ $testimonial->description }}"</p>
                                <div class="author-info-box">
                                    <div class="author-info">
                                        <h4>{{ $testimonial->name }}</h4>
                                        <span class="position">{{ $testimonial->designation }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
