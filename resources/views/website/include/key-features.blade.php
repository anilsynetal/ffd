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
                             <div class="sasly-iconic-box style-one mb-20" data-aos="fade-up" data-aos-duration="1200">
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
                                         <div class="sasly-img {{ $k == 0 ? 'sasly-img_one' : 'sasly-img_two' }} mb-30"
                                             data-aos="fade-up">
                                             <img src="{{ asset($key_feature->image ? $key_feature->image : 'website/assets/images/features/feature5.jpg') }}"
                                                 alt="{{ $key_feature->feature_name }}">
                                         </div>
                                     </div>
                                 @endif
                             @endforeach
                             <div class="company-box style-one" data-aos="fade-up">
                                 <div class="content">
                                     <img src="{{ asset('website/assets/images/logo/logo-white.png') }}"
                                         alt="Brand Logo">
                                     <h5>{{ $contact->app_name }}</h5>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
