 <section class="company-sb pt-70 pb-70">
     <!--=== Company Wrapper ===-->
     <div class="container-fluid">
         <!--=== Company Slider ===-->
         <div class="company-slider slick-initialized slick-slider">
             <!--=== Company Item ===-->
             <div class="slick-list draggable">
                 <div class="slick-track"
                     style="opacity: 1; width: 4914px; transform: translate3d(-2079px, 0px, 0px); transition: transform 6000ms linear;">
                     @foreach ($clients as $key => $client)
                         <div class="company-item slick-slide slick-cloned" data-slick-index="-{{ ++$key }}"
                             id="" aria-hidden="true" tabindex="-1" style="width: 189px;">
                             <a target="_blank" href="{{ $client->link }}">
                                 <div class="company-img">
                                     <img src="{{ asset($client->logo) }}" alt="Company Thumbnail">
                                 </div>
                             </a>
                         </div>
                     @endforeach
                 </div>
             </div>
         </div>
     </div>
 </section>
