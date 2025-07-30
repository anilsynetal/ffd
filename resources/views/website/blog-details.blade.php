@extends('website.layout.app')
@section('content')
    <section class="page-title">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <h1>
                        {{ $blog->title }}
                    </h1>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">
                                    <i class="bi bi-house-door me-1"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Blog Details</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $blog->title }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </section>

    <!--page title end-->


    <!--body content start-->

    <div class="page-content">

        <!--blog single start-->

        <section class="post-single-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="post-card">
                            <div class="post-image">
                                <img class="img-fluid" src="{{ $blog->image }}" alt="">
                            </div>
                            <div class="post-desc">

                                <p>
                                    {{ $blog->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-7 mt-lg-0 ps-lg-10">
                        <div class="themeht-sidebar">
                            <div class="widget">
                                <h5 class="widget-title">Recent Post</h5>
                                <div class="recent-post">
                                    <ul class="list-unstyled">
                                        @foreach ($recent_blogs as $recent_blog)
                                            <li class="mb-3">
                                                <div class="recent-post-thumb">
                                                    <img class="img-fluid" src="{{ $recent_blog->image }}" alt="">
                                                </div>
                                                <div class="recent-post-desc">
                                                    <a href="{{ route('website.blog-details', $recent_blog->slug) }}">
                                                        {{ $recent_blog->title }}
                                                    </a>
                                                    <div class="post-date-small">
                                                        {{ \Carbon\Carbon::parse($recent_blog->created_at)->format('d F, Y') }}
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--blog single end-->

    </div>

    <!--body content end-->
@endsection
