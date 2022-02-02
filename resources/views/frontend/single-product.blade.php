@extends('layouts.base')
@section('title')
    {{ __('single product') }}
@endsection
@section('content')
    <!-- Begin Main Content Area  -->
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1920x400.jpg">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item text-night-rider">
                            <h2 class="breadcrumb-heading">Product Style</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home /</a>
                                </li>
                                <li>Single Product</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-product-area section-space-top-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-product-img">
                            <div class="swiper-container single-product-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="assets/images/product/large-size/2-1-618x578.jpg"
                                            class="single-img gallery-popup">
                                            <img class="img-full"
                                                src="assets/images/product/large-size/2-1-618x578.jpg" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="assets/images/product/large-size/2-2-618x578.jpg"
                                            class="single-img gallery-popup">
                                            <img class="img-full"
                                                src="assets/images/product/large-size/2-2-618x578.jpg" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="assets/images/product/large-size/2-3-618x578.jpg"
                                            class="single-img gallery-popup">
                                            <img class="img-full"
                                                src="assets/images/product/large-size/2-3-618x578.jpg" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="assets/images/product/large-size/2-4-618x578.jpg"
                                            class="single-img gallery-popup">
                                            <img class="img-full"
                                                src="assets/images/product/large-size/2-4-618x578.jpg" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="assets/images/product/large-size/2-5-618x578.jpg"
                                            class="single-img gallery-popup">
                                            <img class="img-full"
                                                src="assets/images/product/large-size/2-5-618x578.jpg" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="assets/images/product/large-size/2-6-618x578.jpg"
                                            class="single-img gallery-popup">
                                            <img class="img-full"
                                                src="assets/images/product/large-size/2-6-618x578.jpg" alt="Product Image">
                                        </a>
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
                            <div class="rating-box-wrap pb-3">
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
                            <p class="short-desc mb-3">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea com consequat. Duis aute irure dolor in
                                reprehend in voluptate velit esse cillum dolore</p>
                            <ul class="quantity-with-btn pb-5">
                                <li class="quantity">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" value="1" type="text">
                                    </div>
                                </li>
                                <li class="add-to-cart">
                                    <a class="btn btn-custom-size lg-size btn-primary" href="cart.html">Add to cart</a>
                                </li>
                                <li class="wishlist-btn-wrap">
                                    <a class="custom-circle-btn" href="wishlist.html">
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
                            <div class="product-category social-link align-items-center pb-lg-3">
                                <span class="title pe-3">Share:</span>
                                <ul>
                                    <li>
                                        <a href="#" data-tippy="Pinterest" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-theme="sharpborder">
                                            <i class="fa fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Twitter" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-theme="sharpborder">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Tumblr" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-theme="sharpborder">
                                            <i class="fa fa-tumblr"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Dribbble" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-theme="sharpborder">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-thumb-wrap pt-5 pt-lg-0 row">
                            <div class="col-12">
                                <div class="thumbs-arrow-holder p-0">
                                    <div class="swiper-container single-product-thumbs">
                                        <div class="swiper-wrapper">
                                            <a href="#" class="swiper-slide">
                                                <img class="img-full"
                                                    src="assets/images/product/large-size/2-1-618x578.jpg"
                                                    alt="Product Thumnail">
                                            </a>
                                            <a href="#" class="swiper-slide">
                                                <img class="img-full"
                                                    src="assets/images/product/large-size/2-2-618x578.jpg"
                                                    alt="Product Thumnail">
                                            </a>
                                            <a href="#" class="swiper-slide">
                                                <img class="img-full"
                                                    src="assets/images/product/large-size/2-3-618x578.jpg"
                                                    alt="Product Thumnail">
                                            </a>
                                            <a href="#" class="swiper-slide">
                                                <img class="img-full"
                                                    src="assets/images/product/large-size/2-4-618x578.jpg"
                                                    alt="Product Thumnail">
                                            </a>
                                            <a href="#" class="swiper-slide">
                                                <img class="img-full"
                                                    src="assets/images/product/large-size/2-5-618x578.jpg"
                                                    alt="Product Thumnail">
                                            </a>
                                            <a href="#" class="swiper-slide">
                                                <img class="img-full"
                                                    src="assets/images/product/large-size/2-6-618x578.jpg"
                                                    alt="Product Thumnail">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-tab-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav product-tab-nav mb-10" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="tab-btn" id="information-tab" data-bs-toggle="tab" href="#information"
                                    role="tab" aria-controls="information" aria-selected="false">
                                    Information
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="active tab-btn" id="description-tab" data-bs-toggle="tab" href="#description"
                                    role="tab" aria-controls="description" aria-selected="true">
                                    Description
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="tab-btn" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab"
                                    aria-controls="reviews" aria-selected="false">
                                    Reviews(5)
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content product-tab-content">
                            <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                                <div class="product-information-body">
                                    <h4 class="title">Shipping</h4>
                                    <p class="short-desc mb-4">The item will be shipped from China. So it need 15-20 days
                                        to deliver. Our product is good with reasonable price and we believe you will worth
                                        it. So please wait for it patiently! Thanks.Any question please kindly to contact us
                                        and we promise to work hard to help you to solve the problem</p>
                                    <h4 class="title">About return request</h4>
                                    <p class="short-desc mb-4">If you don't need the item with worry, you can contact us
                                        then we will help you to solve the problem, so please close the return request!
                                        Thanks</p>
                                    <h4 class="title">Guarantee</h4>
                                    <p class="short-desc mb-0">If it is the quality question, we will resend or refund to
                                        you; If you receive damaged or wrong items, please contact us and attach some
                                        pictures about product, we will exchange a new correct item to you after the
                                        confirmation.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="product-description-body">
                                    <p class="short-desc mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur. Excepteur sintdjrufoksk occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut
                                        perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem
                                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                        architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                        voluptas sitdu aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
                                        eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                                        ipsum quia dolor sit ametg consectetur, adipisci velit, sed quia non numquam eius
                                        modi tempora incidun.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="product-review-body">
                                    <div class="blog-comment">
                                        <h4 class="heading mb-7">3 Comments</h4>
                                        <div class="blog-comment-item mb-8">
                                            <div class="blog-comment-img">
                                                <img src="assets/images/blog/avatar/3-1-101x101.png" alt="User Image">
                                            </div>
                                            <div class="blog-comment-content pb-8">
                                                <div class="user-meta">
                                                    <span><strong>Aidyn Cody -</strong> Jul 21,2021 at 15 hours ago</span>
                                                </div>
                                                <p class="user-comment mb-4">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit, sed do eiusmod tempor inci labore et dol magna aliqua.
                                                    Ut enim ad minim veniam quis nostrud</p>
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
                                                <p class="user-comment mb-4">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit, sed do eiusmod tempor inci labore et dol magna aliqua.
                                                    Ut enim ad minim veniam quis nostrud</p>
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
                                                <p class="user-comment mb-4">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit, sed do eiusmod tempor inci labore et dol magna aliqua.
                                                    Ut enim ad minim veniam quis nostrud</p>
                                                <a class="btn btn-custom-size comment-btn" href="#">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feedback-area pt-10">
                                        <h2 class="heading mb-3">Add a review</h2>
                                        <p class="short-desc mb-3">Your email address will not be published.</p>
                                        <div class="rating-box">
                                            <span>Your rating</span>
                                            <ul class="ps-4">
                                                <li><i class="fa fa-star" data-tippy="1 star" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></li>
                                                <li><i class="fa fa-star" data-tippy="2 star" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></li>
                                                <li><i class="fa fa-star" data-tippy="3 star" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></li>
                                                <li><i class="fa fa-star" data-tippy="4 star" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></li>
                                                <li><i class="fa fa-star" data-tippy="5 star" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></li>
                                            </ul>
                                        </div>
                                        <form class="feedback-form pt-8" action="#">
                                            <div class="group-input">
                                                <div class="form-field me-md-6 mb-6 mb-md-0">
                                                    <input type="text" name="name" placeholder="Your Name*"
                                                        class="input-field">
                                                </div>
                                                <div class="form-field me-md-6 mb-6 mb-md-0">
                                                    <input type="text" name="email" placeholder="Your Email*"
                                                        class="input-field">
                                                </div>
                                                <div class="form-field">
                                                    <input type="text" name="number" placeholder="Phone number"
                                                        class="input-field">
                                                </div>
                                            </div>
                                            <div class="form-field mt-6">
                                                <textarea name="message" placeholder="Message"
                                                    class="textarea-field"></textarea>
                                            </div>
                                            <div class="button-wrap mt-8">
                                                <button type="submit" value="submit"
                                                    class="btn btn-custom-size lg-size btn-primary"
                                                    name="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-img" data-bg-image="assets/images/background-img/1-2-1920x716.jpg">
            <div class="product-area product-arrow section-space-y-axis-100">
                <div class="container">
                    <div class="section-title pb-55">
                        <h2 class="title mb-0">Related Products</h2>
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
                                                        src="assets/images/product/medium-size/product-slider/1-1-290x350.jpg"
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
                                                        src="assets/images/product/medium-size/product-slider/1-2-290x350.jpg"
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
                                                        src="assets/images/product/medium-size/product-slider/1-3-290x350.jpg"
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
                                                        src="assets/images/product/medium-size/product-slider/1-4-290x350.jpg"
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
    </main>
    <!-- Main Content Area End Here  -->
@endsection
