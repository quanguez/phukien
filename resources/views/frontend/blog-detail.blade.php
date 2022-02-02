@extends('layouts.base')
@section('title')
    {{ __('blog detail') }}
@endsection
@section('content')
        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1920x400.jpg">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item text-night-rider">
                                <h2 class="breadcrumb-heading">Blog</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home/</a>
                                    </li>
                                    <li>Blog Detail</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
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
                                    <div class="widgets-item">
                                        <ul class="widgets-author">
                                            <li>
                                                <div class="widgets-img img-hover-effect">
                                                    <img class="img-full" src="assets/images/blog/avatar/1-1-320x280.png" alt="Author Image">
                                                </div>
                                                <div class="widgets-content pt-5">
                                                    <span class="author-name">Ramon Bateman</span>
                                                    <span class="author-occupation mb-4">Main Admin</span>
                                                    <div class="author-signature">
                                                        <img src="assets/images/blog/avatar/signature/bateman.png" alt="Author Signature">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
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
                                                                <img class="img-full" src="assets/images/blog/small-size/1-1-98x75.jpg" alt="Blog Images">
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
                                                                <a href="blog-detail.html">Lorem ipsum dolor sit amet consecte</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="blog-list-item">
                                                        <div class="blog-list-img">
                                                            <a class="img-zoom-effect" href="blog-detail.html">
                                                                <img class="img-full" src="assets/images/blog/small-size/1-3-98x75.jpg" alt="Blog Images">
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
                                                                <a href="blog-detail.html">Lorem ipsum dolor sit amet consecte</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="blog-list-item">
                                                        <div class="blog-list-img">
                                                            <a class="img-zoom-effect" href="blog-detail.html">
                                                                <img class="img-full" src="assets/images/blog/small-size/1-2-98x75.jpg" alt="Blog Images">
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
                                                                <a href="blog-detail.html">Lorem ipsum dolor sit amet consecte</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="blog-list-item">
                                                        <div class="blog-list-img">
                                                            <a class="img-zoom-effect" href="blog-detail.html">
                                                                <img class="img-full" src="assets/images/blog/small-size/1-4-98x75.jpg" alt="Blog Images">
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
                                                                <a href="blog-detail.html">Lorem ipsum dolor sit amet consecte</a>
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
                                            <input class="input-field" type="email" autocomplete="off" placeholder="Enter Your Email">
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
                                <div class="product-banner img-hover-effect">
                                    <div class="product-banner-img">
                                        <a href="shop.html">
                                            <img class="img-full" src="assets/images/blog/banner/1-1-400x489.jpg" alt="Blog Banner">
                                        </a>
                                        <div class="product-banner-content text-white">
                                            <h3 class="category">Mage Sale</h3>
                                            <h2 class="offer">30% Off</h2>
                                            <p class="short-desc mb-7">To satisfy our customer we try <br> to give support online</p>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-primary" href="shop.html">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 order-lg-2 order-1">
                            <div class="blog-detail-item">
                                <div class="blog-img img-hover-effect">
                                    <img class="img-full" src="assets/images/blog/large-size/1-1-840x526.jpg" alt="Blog Image">
                                </div>
                                <div class="blog-content pt-5 pt-lg-0">
                                    <div class="meta-with-title mb-8">
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
                                        <h2 class="title mb-0">Sorem ipsum dolor sit amet consectetur adipisicing.</h2>
                                    </div>
                                    <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
                                    <blockquote class="mb-5">
                                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                                        <h4 class="user-name mb-0">Elmer Schmidt</h4>
                                    </blockquote>
                                    <p class="short-desc mb-9">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnl aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occa cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>
                                    <div class="blog-banner pb-10">
                                        <div class="single-content pt-4 pt-md-0">
                                            <p class="short-desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing col elit, sed do eiusmod tempor incididunt ut labore et man dolore magnl aliqua. Ut enim ad minim veniam, quisfhsl nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenl in voluptate velit esse cillum dolore eu fugiat nulla paria</p>
                                            <p class="short-desc mb-0">Excepteur sint occa cupidatat non proident, sunt in cull qui officia deserunt mollitLorem ipsum dolor sit amet,frt consectetur adipisicing elit, sed do eiusmod temporgtol incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labori nisi ut aliquip ex ea commodo consequat. Duis autecuk</p>
                                        </div>
                                        <div class="single-img img-hover-effect">
                                            <img class="img-full" src="assets/images/blog/banner/1-2-400x400.jpg" alt="Blog Banner">
                                        </div>
                                    </div>
                                    <div class="single-img img-hover-effect pb-8">
                                        <img class="img-full" src="assets/images/blog/banner/1-3-840x335.jpg" alt="Blog Banner">
                                    </div>
                                    <p class="short-desc mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnl aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occa cupidatat non proident, sunt in culpa qui officia deserunt mollit Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <div class="meta-wtih-social">
                                        <div class="meta-item">
                                            <div class="meta-img">
                                                <img src="assets/images/blog/avatar/2-1-36x36.png" alt="Admin Images">
                                            </div>
                                            <div class="meta-content">
                                                <span><strong>By :</strong> Admin</span>
                                            </div>
                                        </div>
                                        <div class="social-link">
                                            <ul>
                                                <li>
                                                    <a href="#" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" data-tippy="Dribbble" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="fa fa-dribbble"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" data-tippy="Pinterest" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="fa fa-pinterest-p"></i>
                                                    </a>
                                                </li>
                                                <li class="comment">
                                                    <a href="#">
                                                        <span>2</span>
                                                        <i class="fa fa-comments"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="page-navigation py-10">
                                        <ul class="prev-nav">
                                            <li>
                                                <div class="navigation-img">
                                                    <a href="#">
                                                        <img src="assets/images/blog/page-navigation/1-1-98x75.png" alt="Navigation Image">
                                                        <div class="arrow prev-arrow">
                                                            <i class="pe-7s-angle-left"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="navigation-content ps-xl-4 pt-4 pt-xl-0">
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
                                                    <span class="short-desc">Lorem ipsum dolor sit atro <br> conse tetur adipis.</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="next-nav text-end">
                                            <li>
                                                <div class="navigation-content text-end pe-xl-4 pb-4 pb-xl-0">
                                                    <div class="blog-meta text-paynes-grey pb-1">
                                                        <ul class="justify-content-end">
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
                                                    <span class="short-desc">Lorem ipsum dolor sit atro <br> conse tetur adipis.</span>
                                                </div>
                                                <div class="navigation-img justify-content-end">
                                                    <a href="#">
                                                        <img src="assets/images/blog/page-navigation/1-2-98x75.png" alt="Navigation Image">
                                                        <div class="arrow next-arrow">
                                                            <i class="pe-7s-angle-right"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="blog-comment with-bg">
                                        <h4 class="heading mb-7">3 Comments</h4>
                                        <div class="blog-comment-item mb-8">
                                            <div class="blog-comment-img">
                                                <img src="assets/images/blog/avatar/3-1-101x101.png" alt="User Image">
                                            </div>
                                            <div class="blog-comment-content pb-8">
                                                <div class="user-meta">
                                                    <span><strong>Aidyn Cody -</strong> Jul 21,2021 at 15 hours ago</span>
                                                </div>
                                                <p class="user-comment mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci labore et dol magna aliqua. Ut enim ad minim veniam quis nostrud</p>
                                                <a class="btn btn-custom-size comment-btn" href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="blog-comment-item relpy-item mb-8">
                                            <div class="blog-comment-img">
                                                <img src="assets/images/blog/avatar/3-2-101x101.png" alt="User Image">
                                            </div>
                                            <div class="blog-comment-content pb-8">
                                                <div class="user-meta">
                                                    <span><strong>Aidyn Cody -</strong> Jul 21,2021 at 15 hours ago</span>
                                                </div>
                                                <p class="user-comment mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci labore et dol magna aliqua. Ut enim ad minim veniam quis nostrud</p>
                                                <a class="btn btn-custom-size comment-btn" href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="blog-comment-item">
                                            <div class="blog-comment-img">
                                                <img src="assets/images/blog/avatar/3-3-101x101.png" alt="User Image">
                                            </div>
                                            <div class="blog-comment-content">
                                                <div class="user-meta">
                                                    <span><strong>Aidyn Cody -</strong> Jul 21,2021 at 15 hours ago</span>
                                                </div>
                                                <p class="user-comment mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci labore et dol magna aliqua. Ut enim ad minim veniam quis nostrud</p>
                                                <a class="btn btn-custom-size comment-btn" href="#">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feedback-area with-bg mt-75">
                                        <h4 class="heading mb-1">Leave a comment</h4>
                                        <form class="feedback-form pt-8" action="#">
                                            <div class="group-input">
                                                <div class="form-field me-md-6 mb-6 mb-md-0">
                                                    <input type="text" name="name" placeholder="Your Name*" class="input-field">
                                                </div>
                                                <div class="form-field">
                                                    <input type="text" name="email" placeholder="Your Email*" class="input-field">
                                                </div>
                                            </div>
                                            <div class="form-field mt-6">
                                                <input type="text" name="subject" placeholder="Subject (Optinal)" class="input-field">
                                            </div>
                                            <div class="form-field mt-6">
                                                <textarea name="message" placeholder="Message" class="textarea-field"></textarea>
                                            </div>
                                            <div class="button-wrap mt-8">
                                                <button type="submit" value="submit" class="btn btn-custom-size lg-size btn-primary" name="submit">Post Comment</button>
                                            </div>
                                        </form>
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
