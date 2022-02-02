@extends('layouts.base')
@section('title')
    {{ __('blog') }}
@endsection
@section('content')
    <!-- Begin Main Content Area -->
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{asset('assets/images/breadcrumb/bg/1-1-1920x400.jpg')}}">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item text-night-rider">
                            <h2 class="breadcrumb-heading">Blog</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home/</a>
                                </li>
                                <li>Blog Grid View</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-area section-space-y-axis-100">
            <div class="container">
                <div class="row g-8">
                    <div class="col-lg-4 order-lg-1 order-2 pt-10 pt-lg-0">
                        <div class="sidebar-area">
                            <div class="widgets-searchbox widgets-area py-6 mb-9">
                                <form id="widgets-searchbox" action="#">
                                    <input class="input-field" type="text" placeholder="Search">
                                    <button class="widgets-searchbox-btn" type="submit">
                                        <i class="pe-7s-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="widgets-area mb-9">
                                <h2 class="widgets-title mb-5">Recent Post</h2>
                                <div class="widgets-item">
                                    <div class="swiper-container widgets-list-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="blog-list-item">
                                                    <div class="blog-list-img">
                                                        <a class="img-zoom-effect" href="blog-detail.html">
                                                            <img class="img-full"
                                                                src="{{asset('assets/images/blog/small-size/1-1-98x75.jpg')}}"
                                                                alt="Blog Images">
                                                        </a>
                                                    </div>
                                                    <div class="blog-list-content">
                                                        <div class="blog-meta text-paynes-grey pb-1">
                                                            <ul>
                                                                <li class="author">
                                                                    <a href="#">
                                                                        <i class="pe-7s-user"></i>
                                                                        BY: ADMIN
                                                                    </a>
                                                                </li>
                                                                <li class="date">
                                                                    <i class="pe-7s-date"></i>
                                                                    27 FEB 2021
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h2 class="title mb-0">
                                                            <a href="blog-detail.html">Lorem ipsum dolor sit amet
                                                                consecte</a>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="blog-list-item">
                                                    <div class="blog-list-img">
                                                        <a class="img-zoom-effect" href="blog-detail.html">
                                                            <img class="img-full"
                                                                src="{{asset('assets/images/blog/small-size/1-3-98x75.jpg')}}"
                                                                alt="Blog Images">
                                                        </a>
                                                    </div>
                                                    <div class="blog-list-content">
                                                        <div class="blog-meta text-paynes-grey pb-1">
                                                            <ul>
                                                                <li class="author">
                                                                    <a href="#">
                                                                        <i class="pe-7s-user"></i>
                                                                        BY: ADMIN
                                                                    </a>
                                                                </li>
                                                                <li class="date">
                                                                    <i class="pe-7s-date"></i>
                                                                    27 FEB 2021
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h2 class="title mb-0">
                                                            <a href="blog-detail.html">Lorem ipsum dolor sit amet
                                                                consecte</a>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="blog-list-item">
                                                    <div class="blog-list-img">
                                                        <a class="img-zoom-effect" href="blog-detail.html">
                                                            <img class="img-full"
                                                                src="{{asset('assets/images/blog/small-size/1-2-98x75.jpg')}}"
                                                                alt="Blog Images">
                                                        </a>
                                                    </div>
                                                    <div class="blog-list-content">
                                                        <div class="blog-meta text-paynes-grey pb-1">
                                                            <ul>
                                                                <li class="author">
                                                                    <a href="#">
                                                                        <i class="pe-7s-user"></i>
                                                                        BY: ADMIN
                                                                    </a>
                                                                </li>
                                                                <li class="date">
                                                                    <i class="pe-7s-date"></i>
                                                                    27 FEB 2021
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h2 class="title mb-0">
                                                            <a href="blog-detail.html">Lorem ipsum dolor sit amet
                                                                consecte</a>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="blog-list-item">
                                                    <div class="blog-list-img">
                                                        <a class="img-zoom-effect" href="blog-detail.html">
                                                            <img class="img-full"
                                                                src="{{asset('assets/images/blog/small-size/1-4-98x75.jpg')}}"
                                                                alt="Blog Images">
                                                        </a>
                                                    </div>
                                                    <div class="blog-list-content">
                                                        <div class="blog-meta text-paynes-grey pb-1">
                                                            <ul>
                                                                <li class="author">
                                                                    <a href="#">
                                                                        <i class="pe-7s-user"></i>
                                                                        BY: ADMIN
                                                                    </a>
                                                                </li>
                                                                <li class="date">
                                                                    <i class="pe-7s-date"></i>
                                                                    27 FEB 2021
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h2 class="title mb-0">
                                                            <a href="blog-detail.html">Lorem ipsum dolor sit amet
                                                                consecte</a>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widgets-area mb-9">
                                <h2 class="widgets-title mb-5">Archives</h2>
                                <div class="widgets-item">
                                    <ul class="widgets-category widgets-archives with-border">
                                        <li>
                                            <a href="blog-detail.html">
                                                January 2018
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-detail.html">
                                                February 2019
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-detail.html">
                                                March 2020
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-detail.html">
                                                April 2021
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widgets-area mb-9">
                                <h2 class="widgets-title mb-5">Subscribe</h2>
                                <div class="widgets-item">
                                    <form class="newsletter-form widgets-newsletter wide" action="#">
                                        <input class="input-field" type="email" autocomplete="off"
                                            placeholder="Enter Your Email">
                                        <div class="button-wrap pt-4">
                                            <button class="btn btn-custom-size btn-primary">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widgets-area mb-9">
                                <h2 class="widgets-title mb-5">Category</h2>
                                <div class="widgets-item">
                                    <ul class="widgets-category with-border">
                                        <li>
                                            <a href="blog-detail.html">
                                                Auto Parts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-detail.html">
                                                Engine Auto
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-detail.html">
                                                Automobile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-detail.html">
                                                Parts Shop
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widgets-area">
                                <h2 class="widgets-title mb-5">Tag</h2>
                                <div class="widgets-item">
                                    <ul class="widgets-tags">
                                        <li>
                                            <a href="#">Fuel Injector</a>
                                        </li>
                                        <li>
                                            <a href="#">Shock Absorbers</a>
                                        </li>
                                        <li>
                                            <a href="#">Automobil Parts</a>
                                        </li>
                                        <li>
                                            <a href="#">Car Parts</a>
                                        </li>
                                        <li>
                                            <a href="#">Transmission</a>
                                        </li>
                                        <li>
                                            <a href="#">Spark Plug</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 order-lg-2 order-1">
                        <div class="blog-item-wrap row">
                            <div class="col-md-6">
                                <div class="blog-item">
                                    <div class="blog-img img-hover-effect">
                                        <a class="img-zoom-effect" href="blog-detail.html">
                                            <img class="img-full" src="{{asset('assets/images/blog/medium-size/1-1-400x250.jpg')}}"
                                                alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-content pt-6">
                                        <div class="blog-meta text-paynes-grey pb-1">
                                            <ul>
                                                <li class="author">
                                                    <a href="#">
                                                        <i class="pe-7s-user"></i>
                                                        BY: ADMIN
                                                    </a>
                                                </li>
                                                <li class="date">
                                                    <i class="pe-7s-date"></i>
                                                    27 FEB 2021
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="mb-3">
                                            <a class="title" href="blog-detail.html">Blog Image Post</a>
                                        </h2>
                                        <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elitsed do eiusmod tempor incididunt ut labore et dolore magna ali Ut enim ad
                                            minim veniam quis nostrud</p>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size btn-matterhorn" href="blog-detail.html">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pt-6 pt-md-0">
                                <div class="swiper-container single-blog-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="blog-item">
                                                <div class="blog-img img-hover-effect">
                                                    <a class="img-zoom-effect" href="blog-detail.html">
                                                        <img class="img-full"
                                                            src="{{asset('assets/images/blog/medium-size/1-3-400x250.jpg')}}"
                                                            alt="Blog Image">
                                                    </a>
                                                </div>
                                                <div class="blog-content pt-6">
                                                    <div class="blog-meta text-paynes-grey pb-1">
                                                        <ul>
                                                            <li class="author">
                                                                <a href="#">
                                                                    <i class="pe-7s-user"></i>
                                                                    BY: ADMIN
                                                                </a>
                                                            </li>
                                                            <li class="date">
                                                                <i class="pe-7s-date"></i>
                                                                27 FEB 2021
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="mb-3">
                                                        <a class="title" href="blog-detail.html">Blog Gallery
                                                            Post</a>
                                                    </h2>
                                                    <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elitsed do eiusmod tempor incididunt ut labore et dolore
                                                        magna ali Ut enim ad minim veniam quis nostrud</p>
                                                    <div class="button-wrap">
                                                        <a class="btn btn-custom-size btn-matterhorn"
                                                            href="blog-detail.html">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="blog-item">
                                                <div class="blog-img img-hover-effect">
                                                    <a class="img-zoom-effect" href="blog-detail.html">
                                                        <img class="img-full"
                                                            src="{{asset('assets/images/blog/medium-size/1-2-400x250.jpg')}}"
                                                            alt="Blog Image">
                                                    </a>
                                                </div>
                                                <div class="blog-content pt-6">
                                                    <div class="blog-meta text-paynes-grey pb-1">
                                                        <ul>
                                                            <li class="author">
                                                                <a href="#">
                                                                    <i class="pe-7s-user"></i>
                                                                    BY: ADMIN
                                                                </a>
                                                            </li>
                                                            <li class="date">
                                                                <i class="pe-7s-date"></i>
                                                                27 FEB 2021
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="mb-3">
                                                        <a class="title" href="blog-detail.html">Blog Second
                                                            Gallery Post</a>
                                                    </h2>
                                                    <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elitsed do eiusmod tempor incididunt ut labore et dolore
                                                        magna ali Ut enim ad minim veniam quis nostrud</p>
                                                    <div class="button-wrap">
                                                        <a class="btn btn-custom-size btn-matterhorn"
                                                            href="blog-detail.html">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="blog-item">
                                                <div class="blog-img img-hover-effect">
                                                    <a class="img-zoom-effect" href="blog-detail.html">
                                                        <img class="img-full"
                                                            src="{{asset('assets/images/blog/medium-size/1-1-400x250.jpg')}}"
                                                            alt="Blog Image">
                                                    </a>
                                                </div>
                                                <div class="blog-content pt-6">
                                                    <div class="blog-meta text-paynes-grey pb-1">
                                                        <ul>
                                                            <li class="author">
                                                                <a href="#">
                                                                    <i class="pe-7s-user"></i>
                                                                    BY: ADMIN
                                                                </a>
                                                            </li>
                                                            <li class="date">
                                                                <i class="pe-7s-date"></i>
                                                                27 FEB 2021
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="mb-3">
                                                        <a class="title" href="blog-detail.html">Blog Third
                                                            Gallery Post</a>
                                                    </h2>
                                                    <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elitsed do eiusmod tempor incididunt ut labore et dolore
                                                        magna ali Ut enim ad minim veniam quis nostrud</p>
                                                    <div class="button-wrap">
                                                        <a class="btn btn-custom-size btn-matterhorn"
                                                            href="blog-detail.html">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pt-6">
                                <div class="blog-item">
                                    <div class="ratio ratio-16x9">
                                        <iframe allow="autoplay"
                                            src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/182537870&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                    </div>
                                    <div class="blog-content pt-6">
                                        <div class="blog-meta text-paynes-grey pb-1">
                                            <ul>
                                                <li class="author">
                                                    <a href="#">
                                                        <i class="pe-7s-user"></i>
                                                        BY: ADMIN
                                                    </a>
                                                </li>
                                                <li class="date">
                                                    <i class="pe-7s-date"></i>
                                                    27 FEB 2021
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="mb-3">
                                            <a class="title" href="blog-detail.html">Blog Audio Post</a>
                                        </h2>
                                        <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elitsed do eiusmod tempor incididunt ut labore et dolore magna ali Ut enim ad
                                            minim veniam quis nostrud</p>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size btn-matterhorn" href="blog-detail.html">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pt-6">
                                <div class="blog-item">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/fkoEj95puX0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                    <div class="blog-content pt-6">
                                        <div class="blog-meta text-paynes-grey pb-1">
                                            <ul>
                                                <li class="author">
                                                    <a href="#">
                                                        <i class="pe-7s-user"></i>
                                                        BY: ADMIN
                                                    </a>
                                                </li>
                                                <li class="date">
                                                    <i class="pe-7s-date"></i>
                                                    27 FEB 2021
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="mb-3">
                                            <a class="title" href="blog-detail.html">Blog Video Post</a>
                                        </h2>
                                        <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elitsed do eiusmod tempor incididunt ut labore et dolore magna ali Ut enim ad
                                            minim veniam quis nostrud</p>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size btn-matterhorn" href="blog-detail.html">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pt-6">
                                <div class="blog-item">
                                    <div class="blog-img img-hover-effect">
                                        <a class="img-zoom-effect" href="blog-detail.html">
                                            <img class="img-full"
                                                src="{{asset('assets/images/blog/medium-size/1-2-400x250.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-content pt-6">
                                        <div class="blog-meta text-paynes-grey pb-1">
                                            <ul>
                                                <li class="author">
                                                    <a href="#">
                                                        <i class="pe-7s-user"></i>
                                                        BY: ADMIN
                                                    </a>
                                                </li>
                                                <li class="date">
                                                    <i class="pe-7s-date"></i>
                                                    27 FEB 2021
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="mb-3">
                                            <a class="title" href="blog.html">Lorem ipsum dolor sit ametco</a>
                                        </h2>
                                        <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elitsed do eiusmod tempor incididunt ut labore et dolore magna ali Ut enim ad
                                            minim veniam quis nostrud</p>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size btn-matterhorn" href="blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pt-6">
                                <div class="blog-item">
                                    <div class="blog-img img-hover-effect">
                                        <a class="img-zoom-effect" href="blog-detail.html">
                                            <img class="img-full"
                                                src="{{asset('assets/images/blog/medium-size/1-3-400x250.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-content pt-6">
                                        <div class="blog-meta text-paynes-grey pb-1">
                                            <ul>
                                                <li class="author">
                                                    <a href="#">
                                                        <i class="pe-7s-user"></i>
                                                        BY: ADMIN
                                                    </a>
                                                </li>
                                                <li class="date">
                                                    <i class="pe-7s-date"></i>
                                                    27 FEB 2021
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="mb-3">
                                            <a class="title" href="blog.html">Lorem ipsum dolor sit ametco</a>
                                        </h2>
                                        <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elitsed do eiusmod tempor incididunt ut labore et dolore magna ali Ut enim ad
                                            minim veniam quis nostrud</p>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size btn-matterhorn" href="blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pt-6">
                                <div class="blog-item">
                                    <div class="blog-img img-hover-effect">
                                        <a class="img-zoom-effect" href="blog-detail.html">
                                            <img class="img-full"
                                                src="{{asset('assets/images/blog/medium-size/1-4-400x250.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-content pt-6">
                                        <div class="blog-meta text-paynes-grey pb-1">
                                            <ul>
                                                <li class="author">
                                                    <a href="#">
                                                        <i class="pe-7s-user"></i>
                                                        BY: ADMIN
                                                    </a>
                                                </li>
                                                <li class="date">
                                                    <i class="pe-7s-date"></i>
                                                    27 FEB 2021
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="mb-3">
                                            <a class="title" href="blog.html">Lorem ipsum dolor sit ametco</a>
                                        </h2>
                                        <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elitsed do eiusmod tempor incididunt ut labore et dolore magna ali Ut enim ad
                                            minim veniam quis nostrud</p>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size btn-matterhorn" href="blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pt-6">
                                <div class="blog-item">
                                    <div class="blog-img img-hover-effect">
                                        <a class="img-zoom-effect" href="blog-detail.html">
                                            <img class="img-full"
                                                src="{{asset('assets/images/blog/medium-size/1-5-400x250.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-content pt-6">
                                        <div class="blog-meta text-paynes-grey pb-1">
                                            <ul>
                                                <li class="author">
                                                    <a href="#">
                                                        <i class="pe-7s-user"></i>
                                                        BY: ADMIN
                                                    </a>
                                                </li>
                                                <li class="date">
                                                    <i class="pe-7s-date"></i>
                                                    27 FEB 2021
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="mb-3">
                                            <a class="title" href="blog.html">Lorem ipsum dolor sit ametco</a>
                                        </h2>
                                        <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elitsed do eiusmod tempor incididunt ut labore et dolore magna ali Ut enim ad
                                            minim veniam quis nostrud</p>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size btn-matterhorn" href="blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="pagination-area pt-10">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">&laquo;</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">&raquo;</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Main Content Area End Here -->
@endsection
