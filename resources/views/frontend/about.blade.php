@extends('layouts.base')
@section('title')
    {{ __('about') }}
@endsection
@section('content')
    <!-- Begin Main Content Area -->
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height"
            data-bg-image="{{ asset('assets/images/breadcrumb/bg/1-1-1920x400.jpg') }}">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item text-night-rider">
                            <h2 class="breadcrumb-heading">About Us</h2>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Home /</a>
                                </li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-banner different-bg-position section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-banner-content text-center section-space-bottom-95">
                            <div class="section-title">
                                <span class="about-sub-title text-primary">Our History</span>
                                <h2 class="about-title mb-5">Tromic Car Parts Shop</h2>
                                <p class="short-desc mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quisd nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor in reprehenderi in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum. Sed ut pers unde omnis iste natus error sit
                                    voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                    ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                                    dolorem ipsum quia dolor sit amet, consec adipisci velit, sed quia non numquam eius modi
                                    tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                            </div>
                        </div>
                        <div class="about-banner-img row">
                            <div class="col-lg-4">
                                <div class="single-img img-hover-effect">
                                    <img class="img-full"
                                        src="{{ asset('assets/images/about/banner/1-1-400x500.jpg') }}" alt="About Banner">
                                </div>
                            </div>
                            <div class="col-lg-4 section-space-top-100">
                                <div class="single-img img-hover-effect">
                                    <img class="img-full"
                                        src="{{ asset('assets/images/about/banner/1-2-400x500.jpg') }}" alt="About Banner">
                                </div>
                            </div>
                            <div class="col-lg-4 section-space-top-100 pt-lg-0">
                                <div class="single-img img-hover-effect">
                                    <img class="img-full"
                                        src="{{ asset('assets/images/about/banner/1-3-400x500.jpg') }}" alt="About Banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin Testimonial Area -->
        <div class="testimonial-area bg-white-smoke section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container testimonial-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide testimonial-item">
                                    <div class="user-info mb-3">
                                        <div class="user-shape-wrap">
                                            <div class="user-shape">
                                                <img src="{{ asset('assets/images/testimonial/user/shape/1.png') }}"
                                                    alt="User Image">
                                            </div>
                                            <div class="user-img">
                                                <img src="{{ asset('assets/images/testimonial/user/2.png') }}"
                                                    alt="User Image">
                                            </div>
                                        </div>
                                        <div class="user-content">
                                            <h4 class="user-name mb-1">Elmer Schmidt</h4>
                                            <span class="user-occupation">Chief Engineer</span>
                                        </div>
                                    </div>
                                    <p class="user-comment mb-6">Lorem ipsum dolor sit amet, consectetur adipisic elit, sed
                                        do eiusmod tempor incid ut labore et dolore magna aliqua. Utenim ad minim veniam,
                                    </p>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <span class="title">4.0</span>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-item">
                                    <div class="user-info mb-3">
                                        <div class="user-shape-wrap">
                                            <div class="user-shape">
                                                <img src="{{ asset('assets/images/testimonial/user/shape/1.png') }}"
                                                    alt="User Image">
                                            </div>
                                            <div class="user-img">
                                                <img src="{{ asset('assets/images/testimonial/user/3.png') }}"
                                                    alt="User Image">
                                            </div>
                                        </div>
                                        <div class="user-content">
                                            <h4 class="user-name mb-1">Azul Baldwin</h4>
                                            <span class="user-occupation">Chief Engineer</span>
                                        </div>
                                    </div>
                                    <p class="user-comment mb-6">Lorem ipsum dolor sit amet, consectetur adipisic elit, sed
                                        do eiusmod tempor incid ut labore et dolore magna aliqua. Utenim ad minim veniam,
                                    </p>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <span class="title">4.0</span>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-item">
                                    <div class="user-info mb-3">
                                        <div class="user-shape-wrap">
                                            <div class="user-shape">
                                                <img src="{{ asset('assets/images/testimonial/user/shape/1.png') }}"
                                                    alt="User Image">
                                            </div>
                                            <div class="user-img">
                                                <img src="{{ asset('assets/images/testimonial/user/1.png') }}"
                                                    alt="User Image">
                                            </div>
                                        </div>
                                        <div class="user-content">
                                            <h4 class="user-name mb-1">Dustin Mock</h4>
                                            <span class="user-occupation">Chief Engineer</span>
                                        </div>
                                    </div>
                                    <p class="user-comment mb-6">Lorem ipsum dolor sit amet, consectetur adipisic elit, sed
                                        do eiusmod tempor incid ut labore et dolore magna aliqua. Utenim ad minim veniam,
                                    </p>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <span class="title">4.0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="testimonial-pagination with-bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Area End Here -->

        <div class="team-member section-space-y-axis-100">
            <div class="container">
                <div class="section-title text-center pb-55">
                    <span class="about-sub-title text-primary">Our expert</span>
                    <h2 class="about-title mb-0">Team Member</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container team-member-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="team-member-item img-gradient-effect">
                                        <div class="team-member-img">
                                            <a href="#">
                                                <img class="img-full"
                                                    src="{{ asset('assets/images/about/team/1-1-400x442.jpg') }}"
                                                    alt="Team Member">
                                            </a>
                                        </div>
                                        <div class="team-member-content">
                                            <h2 class="title mb-0">Jaren Hammer</h2>
                                            <span class="occupation">Salesman & Engineer</span>
                                            <div class="social-link with-border pt-2">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-pinterest-p"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-tumblr"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-dribbble"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-member-item img-gradient-effect">
                                        <div class="team-member-img">
                                            <a href="#">
                                                <img class="img-full"
                                                    src="{{ asset('assets/images/about/team/1-2-400x442.jpg') }}"
                                                    alt="Team Member">
                                            </a>
                                        </div>
                                        <div class="team-member-content">
                                            <h2 class="title mb-0">Jaren Hammer</h2>
                                            <span class="occupation">Salesman & Engineer</span>
                                            <div class="social-link with-border pt-2">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-pinterest-p"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-tumblr"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-dribbble"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-member-item img-gradient-effect">
                                        <div class="team-member-img">
                                            <a href="#">
                                                <img class="img-full"
                                                    src="{{ asset('assets/images/about/team/1-3-400x442.jpg') }}"
                                                    alt="Team Member">
                                            </a>
                                        </div>
                                        <div class="team-member-content">
                                            <h2 class="title mb-0">Jaren Hammer</h2>
                                            <span class="occupation">Salesman & Engineer</span>
                                            <div class="social-link with-border pt-2">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-pinterest-p"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-tumblr"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-dribbble"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin Banner Area -->
        <div class="banner-area banner-style-2 section-border-y-axis section-space-y-axis-100"
            data-bg-image="{{ asset('assets/images/background-img/1-3-1920x208.png') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-content text-center">
                            <span class="sub-title mb-2">30% Limited Time Offer </span>
                            <h2 class="title mb-5">car Parts for short people</h2>
                            <div class="button-wrap">
                                <a class="btn btn-custom-size lg-size btn-primary" href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End Here -->

        <!-- Begin Brand Area -->
        <div class="brand-area section-space-y-axis-100 white-smoke-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container brand-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{ asset('assets/images/brand/1-1.png') }}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{ asset('assets/images/brand/1-2.png') }}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{ asset('assets/images/brand/1-3.png') }}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{ asset('assets/images/brand/1-4.png') }}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{ asset('assets/images/brand/1-5.png') }}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{ asset('assets/images/brand/1-6.png') }}" alt="Brand Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End Here -->

    </main>
    <!-- Main Content Area End Here -->

@endsection
