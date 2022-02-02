<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>phukien - @yield('title')</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="phukien - @yield('title')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Lucas Nguyen">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />

    <!-- CSS
    ============================================ -->

    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/Pe-icon-7-stroke.css') }}" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/ion.rangeSlider.min.css') }}" />

    <!-- Minify Version -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/vendor/vendor.min.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.min.css') }}"> -->

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}"> -->

</head>

<body>
    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <div class="main-wrapper">
        <!-- Begin Main Header Area -->
        <header class="main-header-area">
            <div class="header-top border-bottom d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="header-top-left">
                                <ul class="dropdown-wrap text-matterhorn">
                                    <li class="dropdown">
                                        <button class="btn btn-link dropdown-toggle ht-btn" type="button"
                                            id="languageButton" data-bs-toggle="dropdown" aria-label="language"
                                            aria-expanded="false">
                                            English
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="languageButton">
                                            <li><a class="dropdown-item" href="#">French</a></li>
                                            <li><a class="dropdown-item" href="#">Italian</a></li>
                                            <li><a class="dropdown-item" href="#">Spanish</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <button class="btn btn-link dropdown-toggle ht-btn" type="button"
                                            id="currencyButton" data-bs-toggle="dropdown" aria-label="currency"
                                            aria-expanded="false">
                                            USD
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="currencyButton">
                                            <li><a class="dropdown-item" href="#">GBP</a></li>
                                            <li><a class="dropdown-item" href="#">ISO</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        Call Us
                                        <a href="tel://3965410">3965410</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="header-top-right text-matterhorn">
                                <p class="shipping mb-0">Free delivery on order over <span>$200</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle header-sticky py-6 py-lg-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="header-middle-wrap position-relative">

                                <a href="{{ route('home') }}" class="header-logo">
                                    <img src="{{ asset('assets/images/logo/dark.png') }}" alt="Header Logo">
                                </a>

                                <div class="main-menu d-none d-lg-block">
                                    <nav class="main-nav">
                                        <ul>
                                            <li class="drop-holder">
                                                <a href="{{ route('home') }}">{{ __('home') }}
                                                </a>
                                            </li>
                                            <li class="megamenu-holder">
                                                <a href="{{ route('shop') }}">{{ __('shop') }}
                                                    <i class="pe-7s-angle-down"></i>
                                                </a>
                                                <ul class="drop-menu megamenu">
                                                    <li>
                                                        <span class="title">Shop Layout</span>
                                                        <ul>
                                                            <li>
                                                                <a href="{{route('shop')}}">Shop Default</a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-grid-fullwidth.html">Shop Grid
                                                                    Fullwidth</a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-list-fullwidth.html">Shop List
                                                                    Fullwidth</a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-list-left-sidebar.html">Shop List Left
                                                                    Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-list-right-sidebar.html">Shop List Right
                                                                    Sidebar</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <span class="title">Product Style</span>
                                                        <ul>
                                                            <li>
                                                                <a href="single-product-variable.html">Single Product
                                                                    Variable</a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-group.html">Single Product
                                                                    Group</a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product.html">Single Product Default</a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-affiliate.html">Single Product
                                                                    Affiliate</a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-sale.html">Single Product
                                                                    Sale</a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-sticky.html">Single Product
                                                                    Sticky</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <span class="title">Product Related</span>
                                                        <ul>
                                                            <li>
                                                                <a href="{{route('myAccount')}}">My Account</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('logReg')}}">Login | Register</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('cart')}}">Shopping Cart</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('wishlist')}}">Wishlist</a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html">Compare</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('checkout')}}">Checkout</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="banner">
                                                            <img src="{{ asset('assets/images/megamenu/banner/1.jpg') }}"
                                                                alt="Menu Banner">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="#">Pages
                                                    <i class="pe-7s-angle-down"></i>
                                                </a>
                                                <ul class="drop-menu">
                                                    <li>
                                                        <a href="{{route('about')}}">About</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('faq')}}">FAQ</a>
                                                    </li>
                                                    <li>
                                                        <a href="404">Error 404</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="{{route('blog')}}">Blog
                                                    <i class="pe-7s-angle-down"></i>
                                                </a>
                                                <ul class="drop-menu">
                                                    <li>
                                                        <a href="blog-listview.html">Blog List View</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('blogDetail')}}">Blog Detail</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{route('contact')}}">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right">
                                    <ul>
                                        <li class="dropdown d-none d-lg-block">
                                            <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button"
                                                id="settingButton" data-bs-toggle="dropdown" aria-label="setting"
                                                aria-expanded="false">
                                                <i class="pe-7s-user"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButton">
                                                <li><a class="dropdown-item" href="{{route('myAccount')}}">My account</a></li>
                                                <li><a class="dropdown-item" href="{{route('logReg')}}">Login |
                                                        Register</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#exampleModal" class="search-btn bt" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                        </li>
                                        <li class="d-none d-lg-block">
                                            <a href="{{route('wishlist')}}">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </li>
                                        <li class="minicart-wrap me-3 me-lg-0">
                                            <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                <i class="pe-7s-shopbag"></i>
                                                <span class="quantity">5</span>
                                            </a>
                                        </li>
                                        <li class="mobile-menu_wrap d-block d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                                <i class="pe-7s-menu"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-body">
                    <div class="inner-body">
                        <div class="offcanvas-top">
                            <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                        </div>
                        <div class="offcanvas-user-info text-center px-6 pb-5">
                            <div class=" text-silver">
                                <p class="shipping mb-0">Free delivery on order over <span
                                        class="text-primary">$200</span>
                                </p>
                            </div>
                            <ul class="dropdown-wrap justify-content-center text-silver">
                                <li class="dropdown dropup">
                                    <button class="btn btn-link dropdown-toggle ht-btn" type="button"
                                        id="languageButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                        English
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="languageButtonTwo">
                                        <li><a class="dropdown-item" href="#">French</a></li>
                                        <li><a class="dropdown-item" href="#">Italian</a></li>
                                        <li><a class="dropdown-item" href="#">Spanish</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropup">
                                    <button class="btn btn-link dropdown-toggle ht-btn usd-dropdown" type="button"
                                        id="currencyButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                        USD
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="currencyButtonTwo">
                                        <li><a class="dropdown-item" href="#">GBP</a></li>
                                        <li><a class="dropdown-item" href="#">ISO</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropup">
                                    <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button"
                                        id="settingButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="pe-7s-users"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButtonTwo">
                                        <li><a class="dropdown-item" href="{{route('myAccount')}}">My account</a></li>
                                        <li><a class="dropdown-item" href="{{route('logReg')}}">Login | Register</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('wishlist')}}">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas-menu_area">
                            <nav class="offcanvas-navigation">
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('home') }}">
                                            <span class="mm-text">Home
                                                <i class="pe-7s-angle-down"></i>
                                            </span>
                                        </a>

                                </ul>
                                </li>
                                <li>
                                    <a href="{{route('about')}}">
                                        <span class="mm-text">About Us</span>
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Shop
                                            <i class="pe-7s-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                <span class="mm-text">Shop Layout
                                                    <i class="pe-7s-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="{{route('shop')}}">
                                                        <span class="mm-text">Shop Default</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-grid-fullwidth.html">
                                                        <span class="mm-text">Shop Grid Fullwidth</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-right-sidebar.html">
                                                        <span class="mm-text">Shop Right Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-fullwidth.html">
                                                        <span class="mm-text">Shop List Fullwidth</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-left-sidebar.html">
                                                        <span class="mm-text">Shop List Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-right-sidebar.html">
                                                        <span class="mm-text">Shop List Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                <span class="mm-text">Product Style
                                                    <i class="pe-7s-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="single-product.html">
                                                        <span class="mm-text">Single Product Default</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-group.html">
                                                        <span class="mm-text">Single Product Group</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-variable.html">
                                                        <span class="mm-text">Single Product Variable</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sale.html">
                                                        <span class="mm-text">Single Product Sale</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sticky.html">
                                                        <span class="mm-text">Single Product Sticky</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-affiliate.html">
                                                        <span class="mm-text">Single Product
                                                            Affiliate</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                <span class="mm-text">Product Related
                                                    <i class="pe-7s-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="{{route('myAccount')}}">
                                                        <span class="mm-text">My Account</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('logReg')}}">
                                                        <span class="mm-text">Login | Register</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('cart')}}">
                                                        <span class="mm-text">Shopping Cart</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('wishlist')}}">
                                                        <span class="mm-text">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <span class="mm-text">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('checkout')}}">
                                                        <span class="mm-text">Checkout</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Pages
                                            <i class="pe-7s-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{route('faq')}}">
                                                <span class="mm-text">Frequently Questions</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="404.html">
                                                <span class="mm-text">Error 404</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Blog
                                            <i class="pe-7s-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">
                                                <span class="mm-text">Blog Holder
                                                    <i class="pe-7s-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="{{route('blog')}}">
                                                        <span class="mm-text">Blog Default</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-listview.html">Blog List View</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('blogDetail')}}">Blog Detail</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('contact')}}">
                                        <span class="mm-text">Contact</span>
                                    </a>
                                </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal"
                aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                data-tippy="Close" data-tippy-inertia="true" data-tippy-animation="shift-away"
                                data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-search">
                                <span class="searchbox-info">Start typing and press Enter to search or ESC to
                                    close</span>
                                <form action="#" class="hm-searchbox">
                                    <input type="text" name="Search entire store here..."
                                        value="Search entire store here..."
                                        onblur="if(this.value==''){this.value='Search entire store here...'}"
                                        onfocus="if(this.value=='Search entire store here...'){this.value=''}">
                                    <button class="search-btn" type="submit" aria-label="searchbtn"><i
                                            class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-minicart_wrapper" id="miniCart">
                <div class="offcanvas-body">
                    <div class="minicart-content">
                        <div class="minicart-heading">
                            <h4 class="mb-0">Shopping Cart</h4>
                            <a href="#" class="button-close"><i class="pe-7s-close" data-tippy="Close"
                                    data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50"
                                    data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></a>
                        </div>
                        <ul class="minicart-list">
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#"><i class="pe-7s-trash"
                                        data-tippy="Wanna Remove?" data-tippy-inertia="true"
                                        data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                        data-tippy-theme="sharpborder"></i></a>
                                <a href="{{route('shop')}}" class="product-item_img">
                                    <img class="img-full"
                                        src="{{ asset('assets/images/product/small-size/1-1-70x70.png') }}"
                                        alt="Product Image">
                                </a>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="{{route('shop')}}">Tail Light</a>
                                    <span class="product-item_quantity">1 x $80.00</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#"><i class="pe-7s-trash"
                                        data-tippy="Wanna Remove?" data-tippy-inertia="true"
                                        data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                        data-tippy-theme="sharpborder"></i></a>
                                <a href="{{route('shop')}}" class="product-item_img">
                                    <img class="img-full"
                                        src="{{ asset('assets/images/product/small-size/1-2-70x70.png') }}"
                                        alt="Product Image">
                                </a>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="{{route('shop')}}">Wiper Blades</a>
                                    <span class="product-item_quantity">1 x $80.00</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#">
                                    <i class="pe-7s-trash" data-tippy="Wanna Remove?" data-tippy-inertia="true"
                                        data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                        data-tippy-theme="sharpborder"></i>
                                </a>
                                <a href="{{route('shop')}}" class="product-item_img">
                                    <img class="img-full"
                                        src="{{ asset('assets/images/product/small-size/1-3-70x70.png') }}"
                                        alt="Product Image">
                                </a>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="{{route('shop')}}">Suspension</a>
                                    <span class="product-item_quantity">1 x $80.00</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#">
                                    <i class="pe-7s-trash" data-tippy="Wanna Remove?" data-tippy-inertia="true"
                                        data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                        data-tippy-theme="sharpborder"></i>
                                </a>
                                <a href="{{route('shop')}}" class="product-item_img">
                                    <img class="img-full"
                                        src="{{ asset('assets/images/product/small-size/1-4-70x70.png') }}"
                                        alt="Product Image">
                                </a>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="{{route('shop')}}">Air Filter</a>
                                    <span class="product-item_quantity">1 x $80.00</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#">
                                    <i class="pe-7s-trash" data-tippy="Wanna Remove?" data-tippy-inertia="true"
                                        data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                        data-tippy-theme="sharpborder"></i>
                                </a>
                                <a href="{{route('shop')}}" class="product-item_img">
                                    <img class="img-full"
                                        src="{{ asset('assets/images/product/small-size/1-5-70x70.png') }}"
                                        alt="Product Image">
                                </a>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="{{route('shop')}}">Car Brakes</a>
                                    <span class="product-item_quantity">1 x $80.00</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-item_total">
                        <span>Subtotal</span>
                        <span class="ammount">$240.00</span>
                    </div>
                    <div class="group-btn_wrap d-grid gap-2">
                        <a href="{{route('cart')}}" class="btn btn-dark btn-primary-hover">View Cart</a>
                        <a href="{{route('checkout')}}" class="btn btn-dark btn-primary-hover">Checkout</a>
                    </div>
                </div>
            </div>
            <div class="global-overlay"></div>
        </header>
        <!-- Main Header Area End Here -->

        @yield('content')

        <!-- Begin Footer Area -->
        <div class="footer-area">
            <div class="footer-top section-space-y-axis-100 text-lavender"
                data-bg-image="{{ asset('assets/images/background-img/1-4-1920x419.png') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget-item">
                                <div class="footer-logo pb-4">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('assets/images/logo/light.png') }}" alt="Logo">
                                    </a>
                                </div>
                                <p class="short-desc mb-2">Lorem ipsum dolor sit amet, consectet adipisicing elit, sed
                                    do eiusmod tempor incidi ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                </p>
                                <div class="social-link pt-2">
                                    <ul>
                                        <li>
                                            <a href="#" data-tippy="Twitter" data-tippy-inertia="true"
                                                data-tippy-animation="shift-away" data-tippy-delay="50"
                                                data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tippy="Tumblr" data-tippy-inertia="true"
                                                data-tippy-animation="shift-away" data-tippy-delay="50"
                                                data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-tumblr"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tippy="Facebook" data-tippy-inertia="true"
                                                data-tippy-animation="shift-away" data-tippy-delay="50"
                                                data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tippy="Instagram" data-tippy-inertia="true"
                                                data-tippy-animation="shift-away" data-tippy-delay="50"
                                                data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 pt-8 pt-lg-0">
                            <div class="widget-item">
                                <h3 class="widget-title mb-5">Quick Links</h3>
                                <ul class="widget-list-item">
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Support</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Helpline</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Courses</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Event</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Subject</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 pt-8 pt-lg-0">
                            <div class="widget-item">
                                <h3 class="widget-title mb-5">Company</h3>
                                <ul class="widget-list-item">
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Blog</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Speakers</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Contact</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Tricket</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Seminar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 pt-8 pt-lg-0">
                            <div class="widget-item">
                                <h3 class="widget-title mb-5">About Tromic</h3>
                                <ul class="widget-list-item">
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">How to Shop</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Contact us</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">My Wishlist</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Checkout</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Log in</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Help</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 pt-8 pt-lg-0">
                            <div class="widget-item">
                                <h3 class="widget-title mb-5">Store Information.</h3>
                            </div>
                            <div class="widget-contact-info pb-2">
                                <ul>
                                    <li>
                                        2005 Stokes Isle Apartment. 896, Washington 10010, USA,
                                    </li>
                                    <li>
                                        <a href="mailto://info@example.com">info@example.com</a>
                                    </li>
                                    <li>
                                        <a href="tel://+68-120034509">(+68) 120034509</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="payment-method">
                                <a href="#">
                                    <img src="{{ asset('assets/images/payment/1.png') }}" alt="Payment Method">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom bg-midnight-express py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright">
                                <span class="copyright-text">© 2021 Tromic Made with <i
                                        class="fa fa-heart text-danger"></i>
                                    by <a href="https://hasthemes.com/" rel="noopener" target="_blank">HasThemes</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End Here -->

        <!-- Begin Modal Area -->
        <div class="modal quick-view-modal fade" id="quickModal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="quickModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-wrap row">
                            <div class="col-lg-6">
                                <div class="modal-img">
                                    <div class="swiper-container modal-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a href="#" class="single-img">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/large-size/2-1-618x578.jpg') }}"
                                                        alt="Product Image">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="#" class="single-img">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/large-size/2-2-618x578.jpg') }}"
                                                        alt="Product Image">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="#" class="single-img">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/large-size/2-3-618x578.jpg') }}"
                                                        alt="Product Image">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="#" class="single-img">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/large-size/2-4-618x578.jpg') }}"
                                                        alt="Product Image">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="#" class="single-img">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/large-size/2-5-618x578.jpg') }}"
                                                        alt="Product Image">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="#" class="single-img">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/large-size/2-6-618x578.jpg') }}"
                                                        alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumbs-arrow-holder">
                                        <div class="swiper-container modal-thumbs">
                                            <div class="swiper-wrapper">
                                                <a href="#" class="swiper-slide">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/large-size/2-1-618x578.jpg') }}"
                                                        alt="Product Thumnail">
                                                </a>
                                                <a href="#" class="swiper-slide">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/large-size/2-2-618x578.jpg') }}"
                                                        alt="Product Thumnail">
                                                </a>
                                                <a href="#" class="swiper-slide">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/large-size/2-3-618x578.jpg') }}"
                                                        alt="Product Thumnail">
                                                </a>
                                                <a href="#" class="swiper-slide">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/large-size/2-4-618x578.jpg') }}"
                                                        alt="Product Thumnail">
                                                </a>
                                                <a href="#" class="swiper-slide">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/large-size/2-5-618x578.jpg') }}"
                                                        alt="Product Thumnail">
                                                </a>
                                                <a href="#" class="swiper-slide">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/large-size/2-6-618x578.jpg') }}"
                                                        alt="Product Thumnail">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class="thumbs-button-wrap d-none d-md-block">
                                            <div class="thumbs-button-prev">
                                                <i class="pe-7s-angle-left"></i>
                                            </div>
                                            <div class="thumbs-button-next">
                                                <i class="pe-7s-angle-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pt-9 pt-lg-0">
                                <div class="single-product-content">
                                    <h2 class="title mb-3">Auto Clutch & Brake</h2>
                                    <div class="price-box pb-3">
                                        <span class="new-price text-danger">$440.00</span>
                                    </div>
                                    <div class="rating-box-wrap pb-55">
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="review-status ps-4">
                                            <a href="#">( 5 Customer Review )</a>
                                        </div>
                                    </div>
                                    <div class="selector-wrap color-option">
                                        <span class="selector-title border-bottom-0">Color</span>
                                        <select class="nice-select wide border-bottom-0 rounded-0">
                                            <option value="default">Dark Black With Shadow</option>
                                            <option value="blue">Blue</option>
                                            <option value="green">Green</option>
                                            <option value="red">Red</option>
                                        </select>
                                    </div>
                                    <div class="selector-wrap pb-55">
                                        <span class="selector-title">Size</span>
                                        <select class="nice-select wide rounded-0">
                                            <option value="medium">Medium Size With Screw</option>
                                            <option value="large">Large Size With Screw</option>
                                            <option value="small">Small Size With Screw</option>
                                        </select>
                                    </div>
                                    <p class="short-desc mb-9">Lorem ipsum dolor sit amet, consec adipisicing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com
                                        consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum
                                        dolore</p>
                                    <ul class="quantity-with-btn pb-9">
                                        <li class="quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="1" type="text">
                                            </div>
                                        </li>
                                        <li class="add-to-cart">
                                            <a class="btn btn-custom-size lg-size btn-primary" href="{{route('cart')}}">Add to
                                                cart</a>
                                        </li>
                                        <li class="wishlist-btn-wrap">
                                            <a class="custom-circle-btn" href="{{route('wishlist')}}">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </li>
                                        <li class="compare-btn-wrap">
                                            <a class="custom-circle-btn" href="compare.html">
                                                <i class="pe-7s-refresh-2"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="product-category pb-3">
                                        <span class="title">SKU:</span>
                                        <ul>
                                            <li>
                                                <a href="#">Ch-256xl</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-category pb-3">
                                        <span class="title">Categories :</span>
                                        <ul>
                                            <li>
                                                <a href="#">Office,</a>
                                            </li>
                                            <li>
                                                <a href="#">Home</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-category product-tags pb-3">
                                        <span class="title">Tags :</span>
                                        <ul>
                                            <li>
                                                <a href="#">Furniture</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-category social-link align-items-center pb-lg-8">
                                        <span class="title pe-3">Share:</span>
                                        <ul>
                                            <li>
                                                <a href="#" data-tippy="Pinterest" data-tippy-inertia="true"
                                                    data-tippy-animation="shift-away" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-pinterest-p"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Twitter" data-tippy-inertia="true"
                                                    data-tippy-animation="shift-away" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Tumblr" data-tippy-inertia="true"
                                                    data-tippy-animation="shift-away" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-tumblr"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Dribbble" data-tippy-inertia="true"
                                                    data-tippy-animation="shift-away" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-theme="sharpborder">
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
        <!-- Modal Area End Here -->

        <!-- Begin Scroll To Top -->
        <a class="scroll-to-top" href="">
            <i class="fa fa-chevron-up"></i>
        </a>
        <!-- Scroll To Top End Here -->
    </div>

    <!-- Global Vendor, plugins JS -->

    <!-- JS Files
    ============================================ -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>

    <!--Plugins JS-->
    <script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/tippy.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/mailchimp-ajax.js') }}"></script>

    <!-- Minify Version -->
    <!-- <script src="{{ asset('assets/js/vendor.min.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/js/plugins.min.js') }}"></script> -->

    <!--Main JS (Common Activation Codes)-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/main.min.js') }}"></script> -->

</body>

</html>
