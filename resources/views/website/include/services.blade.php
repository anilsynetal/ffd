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
                 @foreach ($services as $k => $service)
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
 </section>
