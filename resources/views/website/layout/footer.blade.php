<footer class="business-footer pt-100 primary-black-bg">
    <!--=== Footer Widget Area ===-->
    <div class="footer-widget-area pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 order-lg-1">
                    <!--=== Footer Widget ===-->
                    <div class="footer-widget footer-about-widget mb-40" data-aos="fade-up" data-aos-duration="1200">
                        <div class="footer-content">
                            <div class="footer-logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('website/assets/images/logo/logo-white.png') }}" alt="Brand Logo"
                                        width="200px">
                                </a>
                            </div>
                            <p>We take the time to understand your unique needs a goals, offering tailored advice that
                                drives real results.</p>
                            <ul class="social-link">
                                <li><a href="{{ $contact->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ $contact->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ $contact->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="{{ $contact->instagram }}"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 order-lg-2 order-sm-3">
                    <!--=== Footer Widget ===-->
                    <div class="footer-widget footer-nav-widget mb-40" data-aos="fade-up" data-aos-duration="1500">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="footer-content mb-25">
                                    <h4 class="widget-title">Locations</h4>
                                    <p>{{ $contact->address }}</p>
                                </div>
                                <div class="footer-content">
                                    <h4 class="widget-title">Get In Touch</h4>
                                    <p><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
                                    <p><a href="tel:+91{{ $contact->phone }}">+91{{ $contact->phone }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-lg-3 order-sm-2">
                    <!--=== Footer Widget ===-->
                    <div class="footer-widget footer-newsletter-widget mb-40" data-aos="fade-up"
                        data-aos-duration="1800">
                        <div class="footer-content">
                            <h4 class="widget-title">Subscribe Newsletter</h4>
                            <p>Subscribe our newsletter to get more updates </p>
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form_control" placeholder="Email Address"
                                        name="email" required>
                                    <label><i class="far fa-envelope"></i></label>
                                    <button class="theme-btn style-one">Subscribe <i
                                            class="far fa-angle-double-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=== Footer Copyright ===-->
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="copyright-text">
                        <p>&copy; {{ date('Y') }} <span>{{ $contact->app_name }}</span> - All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="copyright-nav">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="#about-section">About</a></li>
                            <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                            <li><a href="#contact-section">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="copyright-text">
                        <p>&copy; Developed By </span> <a target="_blank" class="text-primary"
                                href="https://adsinfotech.biz/">Ads
                                Infotech</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
