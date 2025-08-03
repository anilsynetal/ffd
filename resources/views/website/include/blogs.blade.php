  <section class="blogs-sb pt-130 pb-50" id="blogs-section">
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
              @foreach ($blogs as $blog)
                  <div class="col-xl-4 col-md-6">
                      <!--=== Blog Post Item ===-->
                      <div class="blog-post-item style-one mb-80" data-aos="fade-up" data-aos-duration="1200">
                          <div class="post-thumbnail">
                              <img src="{{ asset($blog->image) }}" alt="Blog Thumbnail">
                          </div>
                          <div class="post-content">
                              <div class="post-meta style-one">
                                  <span class="category"><a
                                          href="javascript:void(0);">{{ $blog->blog_category->name }}</a></span>
                                  <span class="date"><a
                                          href="javascript:void(0);">{{ date('l d,Y', strtotime($blog->created_at)) }}</a></span>
                              </div>
                              <h4 class="title"><a href="javascript:void(0);" class="loadRecordModal"
                                      data-url="{{ route('blog-details', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a>
                              </h4>
                              <p>{{ $blog->description }}</p>
                              <a href="javascript:void(0);" class="read-more style-one loadRecordModal"
                                  data-url="{{ route('blog-details', ['slug' => $blog->slug]) }}"><i
                                      class="far fa-plus"></i>Read
                                  More</a>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </section>

  <div class="modal fade" id="commonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">

          </div>
      </div>
  </div>
