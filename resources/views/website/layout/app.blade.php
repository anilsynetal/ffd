<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('website/assets/images/logo/favicon.png') }}" />
    <!-- inject css start -->

    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="{{ asset('website/common/fonts/flaticon/flaticon_sasly.css') }}">
    <!--====== FontAwesome css ======-->
    <link rel="stylesheet" href="{{ asset('website/common/fonts/fontawesome/css/all.min.css') }}">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('website/common/css/plugins/bootstrap.min.css') }}">
    <!--====== Slick-popup css ======-->
    <link rel="stylesheet" href="{{ asset('website/common/css/plugins/slick.css') }}">
    <!--====== Magnific-popup css ======-->
    <link rel="stylesheet" href="{{ asset('website/common/css/plugins/magnific-popup.css') }}">
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('website/common/css/plugins/aos.css') }}">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('website/common/css/default.css') }}">
    <!--====== Common Style css ======-->
    <link rel="stylesheet" href="{{ asset('website/common/css/common_style.css') }}">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('website/assets/css/style.css') }}">

</head>

<body class="business-website">
    <!--====== Start Preloader ======-->
    <div id="overlay" class="overlay">
        <div id="loader" class="loader"></div>
    </div>
    <div class="preloader">
        <div class="loader">
            <img src="{{ asset('website/assets/images/loader.png') }}" alt="loader" width="100">
        </div>
    </div><!--====== End Preloader ======-->
    <!--====== Start Overlay ======-->
    <div class="offcanvas__overlay"></div>
    <!-- preloader start -->
    @include('website.layout.header')
    <!-- preloader end -->
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <!--======  line Wrap  ======-->
            <div class="line_wrap">
                <div class="line_item_one"></div>
                <div class="line_item"></div>
                <div class="line_item"></div>
                <div class="line_item"></div>
                <div class="line_item"></div>
            </div>
            @yield('content')
            @include('website.layout.footer')
            <a href="#" class="back-to-top"><i class="fas fa-angle-up"></i></a>
        </div>
    </div>
    <!--====== Jquery js ======-->
    <script src="{{ asset('website/common/js/plugins/jquery-3.7.1.min.js') }}"></script>
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('website/common/js/plugins/popper.min.js') }}"></script>
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('website/common/js/plugins/bootstrap.min.js') }}"></script>
    <!--====== Gsap Js ======-->
    <script src="{{ asset('website/common/js/plugins/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('website/common/js/plugins/gsap/SplitText.min.js') }}"></script>
    <script src="{{ asset('website/common/js/plugins/gsap/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('website/common/js/plugins/gsap/ScrollTrigger.min.js') }}"></script>
    <!--====== Slick js ======-->
    <script src="{{ asset('website/common/js/plugins/slick.min.js') }}"></script>
    <!--====== Magnific js ======-->
    <script src="{{ asset('website/common/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <!--====== Aos js ======-->
    <script src="{{ asset('website/common/js/plugins/aos.js') }}"></script>
    <!--====== Common js ======-->
    <script src="{{ asset('website/common/js/common_script.js') }}"></script>
    <!--====== Main js ======-->
    {{-- <script src="{{ asset('website/assets/js/theme.js') }}"></script> --}}
    <script src="{{ asset('website/assets/js/custom.js') }}"></script>
    <script>
        $(document).ready(function() {
            //onclick get-consultation button, slowly scroll down upto the contact-section div id
            $(document).on("click", ".get-consultation", function(e) {
                e.preventDefault();
                const section = $('#contact-section');
                if (section.length) {
                    $('html, body').animate({
                        scrollTop: section.offset().top
                    }, 1200); // 1200ms = 1.2 seconds, increase for slower scroll
                }
            });

            // Smooth scroll for menu items
            const menuMap = {
                'about': 'about-section',
                'services': 'services-section',
                'case-studies': 'case-studies-section',
                'blogs': 'blogs-section',
                'core-features': 'core-features-section'
            };

            $.each(menuMap, function(menuId, sectionId) {
                $(document).on("click", "#" + menuId, function(e) {
                    e.preventDefault();
                    const section = $('#' + sectionId);
                    if (section.length) {
                        $('html, body').animate({
                            scrollTop: section.offset().top
                        }, 1800); // Slower scroll
                    }
                });
            });
        });
    </script>
</body>

</html>
