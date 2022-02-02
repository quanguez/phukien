@extends('layouts.base')
@section('title')
    {{ __('home') }}
@endsection
@section('content')

    <!-- Begin Slider Area -->
    <div class="slider-area">

        <!-- Main Slider -->
        <div class="swiper-container main-slider swiper-arrow with-bg_white">
            <div class="swiper-wrapper">
                <div class="swiper-slide animation-style-01">
                    <div class="slide-inner bg-height" data-bg-image="{{ asset('assets/images/slider/bg/1-1.jpg') }}">
                        <div class="container">
                            <div class="slide-content text-white">
                                <h3 class="sub-title">Big Sale Offer</h3>
                                <h2 class="title mb-3">Parts & repair</h2>
                                <p class="short-desc different-width mb-10">Exclusive Exchange Offer & 30% Off In
                                    This Week</p>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size lg-size btn-primary" href="shop.html">Shop
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide animation-style-01">
                    <div class="slide-inner bg-height" data-bg-image="{{ asset('assets/images/slider/bg/1-2.jpg') }}">
                        <div class="container">
                            <div class="slide-content text-white">
                                <h3 class="sub-title">Big Sale Offer</h3>
                                <h2 class="title mb-3">Parts & repair</h2>
                                <p class="short-desc different-width mb-10">Exclusive Exchange Offer & 30% Off In
                                    This Week</p>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size lg-size btn-primary" href="shop.html">Shop
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination with-bg d-md-none"></div>

            <!-- Custom Arrows -->
            <div class="custom-arrow-wrap d-none d-md-block">
                <div class="custom-button-prev"></div>
                <div class="custom-button-next"></div>
            </div>
        </div>

    </div>
    <!-- Slider Area End Here -->

    <div class="background-img">
        <div class="inner-bg">
            <img src="{{ asset('assets/images/background-img/inner-bg/1-1-496x566.png') }}" alt="Inner Background">
        </div>
        <div class="banner-area section-space-top-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-item img-hover-effect">
                            <div class="banner-img img-zoom-effect">
                                <img class="img-full" src="{{ asset('assets/images/banner/1-1-400x250.jpg') }}"
                                    alt="Banner Image">
                                <div class="inner-content text-white">
                                    <h3 class="offer">From $96</h3>
                                    <h2 class="title mb-5">Latest <br> Car Wheel</h2>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size btn-primary" href="shop.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pt-6 pt-md-0">
                        <div class="banner-item img-hover-effect">
                            <div class="banner-img img-zoom-effect">
                                <img class="img-full" src="{{ asset('assets/images/banner/1-2-400x250.jpg') }}"
                                    alt="Banner Image">
                                <div class="inner-content text-white">
                                    <h3 class="offer">From $96</h3>
                                    <h2 class="title mb-5">Latest <br> Car Wheel</h2>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size btn-primary" href="shop.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pt-6 pt-lg-0">
                        <div class="banner-item img-hover-effect">
                            <div class="banner-img img-zoom-effect">
                                <img class="img-full" src="{{ asset('assets/images/banner/1-3-400x250.jpg') }}"
                                    alt="Banner Image">
                                <div class="inner-content text-white">
                                    <h3 class="offer">From $96</h3>
                                    <h2 class="title mb-5">Latest <br> Car Wheel</h2>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size btn-primary" href="shop.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin Shipping Area -->
        <div class="shipping-area section-space-y-axis-100">
            <div class="container">
                <div class="shipping-bg" data-bg-image="{{ asset('assets/images/shipping/bg/1-1-1280x202.jpg') }}">
                    <div class="row shipping-wrap py-5 py-xl-0">
                        <div class="col-lg-4">
                            <div class="shipping-item">
                                <div class="shipping-img">
                                    <img src="{{ asset('assets/images/shipping/icon/plane.png') }}" alt="Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h2 class="title">Free Shipping</h2>
                                    <p class="short-desc mb-0">Provide free home delivery for all product over $100
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-4 pt-lg-0">
                            <div class="shipping-item">
                                <div class="shipping-img">
                                    <img src="{{ asset('assets/images/shipping/icon/earphones.png') }}"
                                        alt="Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h2 class="title">Online Support</h2>
                                    <p class="short-desc mb-0">To satisfy our customer we try to give support
                                        online</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-4 pt-lg-0">
                            <div class="shipping-item">
                                <div class="shipping-img">
                                    <img src="{{ asset('assets/images/shipping/icon/shield.png') }}" alt="Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h2 class="title">Secure Payment</h2>
                                    <p class="short-desc mb-0">We ensure our product Good quality all times</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shipping Area End Here -->

    </div>

    <!-- Begin Product Area -->
    <div class="background-img" data-bg-image="{{ asset('assets/images/background-img/1-1-1920x1107.jpg') }}">
        <div class="product-area section-space-y-axis-100">
            <div class="container">
                <div class="section-title pb-55">
                    <h2 class="title mb-0">SPECIAL DEALS</h2>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-item-wrap row">
                            <div class="col-lg-8 col-md-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="shop.html">
                                            <img class="img-full"
                                                src="{{ asset('assets/images/product/medium-size/special-deals/1-1-620x350.jpg') }}"
                                                alt="Product Images">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name pb-1" href="shop.html">Auto Clutch & Brake</a>
                                        <div class="price-box">
                                            <div class="price-box-holder">
                                                <span>Price:</span>
                                                <span class="new-price text-primary">$120.00</span>
                                            </div>
                                        </div>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal"
                                                    data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist"
                                                        data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                        data-tippy-delay="50" data-tippy-arrow="true"
                                                        data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html" data-tippy="Add to compare"
                                                        data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                        data-tippy-delay="50" data-tippy-arrow="true"
                                                        data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 pt-7 pt-md-0">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="shop.html">
                                            <img class="img-full"
                                                src="{{ asset('assets/images/product/medium-size/special-deals/1-2-290x350.jpg') }}"
                                                alt="Product Images">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name pb-1" href="shop.html">Fuel Injector</a>
                                        <div class="price-box">
                                            <div class="price-box-holder">
                                                <span>Price:</span>
                                                <span class="new-price text-primary">$130.00</span>
                                            </div>
                                        </div>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal"
                                                    data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist"
                                                        data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                        data-tippy-delay="50" data-tippy-arrow="true"
                                                        data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html" data-tippy="Add to compare"
                                                        data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                        data-tippy-delay="50" data-tippy-arrow="true"
                                                        data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 pt-7">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="shop.html">
                                            <img class="img-full"
                                                src="{{ asset('assets/images/product/medium-size/special-deals/1-3-290x350.jpg') }}"
                                                alt="Product Images">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name pb-1" href="shop.html">A/C Compressor</a>
                                        <div class="price-box">
                                            <div class="price-box-holder">
                                                <span>Price:</span>
                                                <span class="new-price text-primary">$150.00</span>
                                            </div>
                                        </div>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal"
                                                    data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist"
                                                        data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                        data-tippy-delay="50" data-tippy-arrow="true"
                                                        data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html" data-tippy="Add to compare"
                                                        data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                        data-tippy-delay="50" data-tippy-arrow="true"
                                                        data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 pt-7">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="shop.html">
                                            <img class="img-full"
                                                src="{{ asset('assets/images/product/medium-size/special-deals/1-4-290x350.jpg') }}"
                                                alt="Product Images">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name pb-1" href="shop.html">Shock Absorbers</a>
                                        <div class="price-box">
                                            <div class="price-box-holder">
                                                <span>Price:</span>
                                                <span class="new-price text-primary">$180.00</span>
                                            </div>
                                        </div>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal"
                                                    data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist"
                                                        data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                        data-tippy-delay="50" data-tippy-arrow="true"
                                                        data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html" data-tippy="Add to compare"
                                                        data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                        data-tippy-delay="50" data-tippy-arrow="true"
                                                        data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 pt-7">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="shop.html">
                                            <img class="img-full"
                                                src="{{ asset('assets/images/product/medium-size/special-deals/1-5-290x350.jpg') }}"
                                                alt="Product Images">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name pb-1" href="shop.html">Catalytic Converter</a>
                                        <div class="price-box">
                                            <div class="price-box-holder">
                                                <span>Price:</span>
                                                <span class="new-price text-primary">$200.00</span>
                                            </div>
                                        </div>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal"
                                                    data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist"
                                                        data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                        data-tippy-delay="50" data-tippy-arrow="true"
                                                        data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html" data-tippy="Add to compare"
                                                        data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                        data-tippy-delay="50" data-tippy-arrow="true"
                                                        data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pt-7 pt-lg-0">
                        <div class="product-banner img-hover-effect">
                            <div class="product-banner-img fixed-height img-zoom-effect">
                                <a href="shop.html">
                                    <img class="img-full"
                                        src="{{ asset('assets/images/product/medium-size/special-deals/banner/1-1-290x748.jpg') }}"
                                        alt="Product Banner">
                                </a>
                                <div class="product-banner-content text-white">
                                    <h3 class="category">Mage Sale</h3>
                                    <h2 class="offer">30% Off</h2>
                                    <p class="short-desc mb-7">To satisfy our customer we try to give support
                                        online</p>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size btn-primary" href="shop.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pt-55">
                        <div class="button-wrap">
                            <a class="btn btn-link text-danger with-underline p-0" href="shop.html">See More
                                Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End Here -->

    <!-- Begin Newsletter Area -->
    <div class="newsletter-area section-border-y-axis">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="newsletter-img">
                        <img src="{{ asset('assets/images/newsletter/1-1-491x529.png') }}" alt="Newsletter Image">
                    </div>
                </div>
                <div class="col-md-6 align-self-md-center pb-10 pb-md-0">
                    <div class="newsletter-content">
                        <h2 class="newsletter-title mb-4">Have a Special Discount</h2>
                        <h3 class="newsletter-sub-title text-primary mb-8">All New Car Parts</h3>
                        <form class="newsletter-form" id="mc-form" action="#">
                            <input class="input-field" id="mc-email" type="email" autocomplete="off"
                                name="Your Email Address" value="Your Email Address"
                                onblur="if(this.value==''){this.value='Your Email Address'}"
                                onfocus="if(this.value=='Your Email Address'){this.value=''}">
                            <div class="button-wrap">
                                <button class="btn btn-custom-size btn-primary" id="mc-submit">Subscribe</button>
                            </div>
                        </form>
                        <!-- Mailchimp Alerts -->
                        <div class="mailchimp-alerts text-centre pt-5">
                            <div class="mailchimp-submitting"></div>
                            <div class="mailchimp-success"></div>
                            <div class="mailchimp-error"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Area End Here -->

    <!-- Begin Product Area -->
    <div class="background-img" data-bg-image="{{ asset('assets/images/background-img/1-2-1920x716.jpg') }}">
        <div class="product-area section-space-y-axis-100 product-arrow">
            <div class="container">
                <div class="section-title pb-55">
                    <h2 class="title mb-0">Popular Item</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container product-slider">
                            <div class="swiper-wrapper text-heading">
                                <div class="swiper-slide">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="shop.html">
                                                <img class="img-full"
                                                    src="{{ asset('assets/images/product/medium-size/product-slider/1-1-290x350.jpg') }}"
                                                    alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1" href="shop.html">Auto Clutch & Brake</a>
                                            <div class="price-box">
                                                <div class="price-box-holder">
                                                    <span>Price:</span>
                                                    <span class="new-price text-primary">$120.00</span>
                                                </div>
                                            </div>
                                            <div class="product-add-action">
                                                <ul>
                                                    <li>
                                                        <a href="cart.html" data-tippy="Add to cart"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="quuickview-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickModal">
                                                        <a href="#" data-tippy="Quickview" data-tippy-inertia="true"
                                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                                            data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-look"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html" data-tippy="Add to wishlist"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html" data-tippy="Add to compare"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-shuffle"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="shop.html">
                                                <img class="img-full"
                                                    src="{{ asset('assets/images/product/medium-size/product-slider/1-2-290x350.jpg') }}"
                                                    alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1" href="shop.html">Fuel Injector</a>
                                            <div class="price-box">
                                                <div class="price-box-holder">
                                                    <span>Price:</span>
                                                    <span class="new-price text-primary">$130.00</span>
                                                </div>
                                            </div>
                                            <div class="product-add-action">
                                                <ul>
                                                    <li>
                                                        <a href="cart.html" data-tippy="Add to cart"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="quuickview-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickModal">
                                                        <a href="#" data-tippy="Quickview" data-tippy-inertia="true"
                                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                                            data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-look"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html" data-tippy="Add to wishlist"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html" data-tippy="Add to compare"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-shuffle"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="shop.html">
                                                <img class="img-full"
                                                    src="{{ asset('assets/images/product/medium-size/product-slider/1-3-290x350.jpg') }}"
                                                    alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1" href="shop.html">A/C Compressor</a>
                                            <div class="price-box">
                                                <div class="price-box-holder">
                                                    <span>Price:</span>
                                                    <span class="new-price text-primary">$150.00</span>
                                                </div>
                                            </div>
                                            <div class="product-add-action">
                                                <ul>
                                                    <li>
                                                        <a href="cart.html" data-tippy="Add to cart"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="quuickview-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickModal">
                                                        <a href="#" data-tippy="Quickview" data-tippy-inertia="true"
                                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                                            data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-look"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html" data-tippy="Add to wishlist"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html" data-tippy="Add to compare"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-shuffle"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="shop.html">
                                                <img class="img-full"
                                                    src="{{ asset('assets/images/product/medium-size/product-slider/1-4-290x350.jpg') }}"
                                                    alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1" href="shop.html">Shock Absorbers</a>
                                            <div class="price-box">
                                                <div class="price-box-holder">
                                                    <span>Price:</span>
                                                    <span class="new-price text-primary">$180.00</span>
                                                </div>
                                            </div>
                                            <div class="product-add-action">
                                                <ul>
                                                    <li>
                                                        <a href="cart.html" data-tippy="Add to cart"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="quuickview-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickModal">
                                                        <a href="#" data-tippy="Quickview" data-tippy-inertia="true"
                                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                                            data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-look"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html" data-tippy="Add to wishlist"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html" data-tippy="Add to compare"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-shuffle"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="product-button-wrap pt-10">
                            <div class="product-button-prev">
                                <i class="pe-7s-angle-left"></i>
                            </div>
                            <div class="product-button-next">
                                <i class="pe-7s-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End Here -->

    <!-- Begin Banner Area -->
    <div class="banner-area section-border-y-axis ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-md-center order-2 order-md-1 pt-5 pt-md-0">
                    <div class="banner-content text-center">
                        <div class="inner-img mb-2">
                            <img src="{{ asset('assets/images/banner/inner-img/1-1-201x57.png') }}" alt="Banner Image">
                        </div>
                        <h3 class="title text-charcoal">Deal of the day</h3>
                        <h4 class="sub-title text-primary mb-6">Hot Deal ! Sale Up To 30% Off </h4>
                        <div class="countdown-wrap pb-8">
                            <div class="countdown item-4" data-countdown="2022/03/04" data-format="short">
                                <div class="countdown__item me-3">
                                    <span class="countdown__time daysLeft"></span>
                                    <span class="countdown__text daysText"></span>
                                </div>
                                <div class="countdown__item me-3">
                                    <span class="countdown__time hoursLeft"></span>
                                    <span class="countdown__text hoursText"></span>
                                </div>
                                <div class="countdown__item me-3">
                                    <span class="countdown__time minsLeft"></span>
                                    <span class="countdown__text minsText"></span>
                                </div>
                                <div class="countdown__item">
                                    <span class="countdown__time secsLeft"></span>
                                    <span class="countdown__text secsText"></span>
                                </div>
                            </div>
                        </div>
                        <div class="button-wrap pb-8 pb-md-0">
                            <a class="btn btn-custom-size lg-size btn-primary" href="shop.html">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="banner-img">
                        <img src="{{ asset('assets/images/banner/2-1-407x529.png') }}" alt="Banner Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End Here -->

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
                                <p class="user-comment mb-6">Lorem ipsum dolor sit amet, consectetur adipisic elit,
                                    sed do eiusmod tempor incid ut labore et dolore magna aliqua. Utenim ad minim
                                    veniam,</p>
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
                                <p class="user-comment mb-6">Lorem ipsum dolor sit amet, consectetur adipisic elit,
                                    sed do eiusmod tempor incid ut labore et dolore magna aliqua. Utenim ad minim
                                    veniam,</p>
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
                                <p class="user-comment mb-6">Lorem ipsum dolor sit amet, consectetur adipisic elit,
                                    sed do eiusmod tempor incid ut labore et dolore magna aliqua. Utenim ad minim
                                    veniam,</p>
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

@endsection
