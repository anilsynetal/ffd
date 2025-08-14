<section class="core-features-sb mb-10" id="core-features-section">
    <div class="features-wrapper main-gray-bg pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=== Section Title  ===-->
                    <div class="section-title style-one text-center mb-60">
                        {{-- <span class="sub-heading"><i class="far fa-arrow-right"></i>Program Benefits</span> --}}
                        <h2 class="text-anm"><span class="font-200">Leading with Innovation Shaping</span> the
                            Future of Business</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($core_features as $core_feature)
                    <div class="col-xl-3 col-sm-6">
                        <!--=== Iconic Box ===-->
                        <div class="sasly-card-item style-one mb-30" data-aos="fade-up" data-aos-duration="1000">
                            <div class="content-box core-feature">
                                @if ($core_feature->icon)
                                    <div class="icon">
                                        <i class="{{ $core_feature->icon }}"></i>
                                    </div>
                                @endif
                                <div class="content">
                                    <h5 class="text-center">{{ $core_feature->feature_name }}</h5>
                                    <p class="text-center">{{ $core_feature->description }} </p>
                                </div>
                            </div>
                            <div class="thumbnail">
                                <img src="{{ asset($core_feature->image ? $core_feature->image : 'website/assets/images/features/feature1.jpg') }}"
                                    alt="{{ $core_feature->feature_name }}">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
