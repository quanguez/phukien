@extends('layouts.base')
@section('title')
    {{ __('shop') }}
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
                            <h2 class="breadcrumb-heading">Shop Layout</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home /</a>
                                </li>
                                <li>Shop Default</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 order-lg-1 order-2 pt-10 pt-lg-0">
                        <div class="sidebar-area style-2">
                            <div class="widgets-searchbox widgets-area py-6 mb-9">
                                <form id="widgets-searchbox" action="#">
                                    <input class="input-field" type="text" placeholder="Search">
                                    <button class="widgets-searchbox-btn" type="submit">
                                        <i class="pe-7s-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="widgets-area mb-9">
                                <h2 class="widgets-title mb-5">Product Categories</h2>
                                <div class="widgets-item">
                                    <ul class="widgets-category">
                                        <li>
                                            <a href="#">Accesasories
                                                <span>(6)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Computer
                                                <span>(4)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Covid-19
                                                <span>(2)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Electronics
                                                <span>(6)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Frame Sunglasses
                                                <span>(12)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Furniture
                                                <span>(7)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Genuine Leather
                                                <span>(9)</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widgets-area widgets-filter mb-9">
                                <h2 class="widgets-title mb-5">Price Filter</h2>
                                <div class="price-filter">
                                    <input type="text" class="tromic-range-slider" name="tromic-range-slider" value=""
                                        data-type="double" data-min="16" data-from="16" data-to="300" data-max="350"
                                        data-grid="false" />
                                </div>
                            </div>
                            <div class="widgets-area mb-9">
                                <h2 class="widgets-title mb-5">Color</h2>
                                <div class="widgets-item">
                                    <ul class="widgets-checkbox">
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="color-selection-1">
                                            <label class="label-checkbox mb-0" for="color-selection-1">Red
                                                <span>(12)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="color-selection-2" checked>
                                            <label class="label-checkbox mb-0" for="color-selection-2">Light Black
                                                <span>(09)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="color-selection-3">
                                            <label class="label-checkbox mb-0" for="color-selection-3">Dark Blue
                                                <span>(7)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="color-selection-4">
                                            <label class="label-checkbox mb-0" for="color-selection-4">Gray
                                                <span>(11)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widgets-area mb-9">
                                <h2 class="widgets-title mb-5">Size</h2>
                                <div class="widgets-item">
                                    <ul class="widgets-checkbox">
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="size-selection-1">
                                            <label class="label-checkbox mb-0"
                                                for="size-selection-1">M<span>(12)</span></label>
                                        </li>
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="size-selection-2" checked>
                                            <label class="label-checkbox mb-0"
                                                for="size-selection-2">L<span>(09)</span></label>
                                        </li>
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="size-selection-3">
                                            <label class="label-checkbox mb-0"
                                                for="size-selection-3">XL<span>(07)</span></label>
                                        </li>
                                        <li>
                                            <input class="input-checkbox" type="checkbox" id="size-selection-4">
                                            <label class="label-checkbox mb-0"
                                                for="size-selection-4">XXL<span>(11)</span></label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widgets-area">
                                <h2 class="widgets-title mb-5">Tag</h2>
                                <div class="widgets-item">
                                    <ul class="widgets-tags">
                                        <li>
                                            <a href="#">Auto Parts</a>
                                        </li>
                                        <li>
                                            <a href="#">Car Parts</a>
                                        </li>
                                        <li>
                                            <a href="#">Automobil Parts</a>
                                        </li>
                                        <li>
                                            <a href="#">Car</a>
                                        </li>
                                        <li>
                                            <a href="#">Auto Parts</a>
                                        </li>
                                        <li>
                                            <a href="#">Cat Parts</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 order-lg-2 order-1">
                        <div class="product-topbar">
                            <ul>
                                <li class="page-count">
                                    <span>23</span> Product Found of <span>50</span>
                                </li>
                                <li class="product-view-wrap">
                                    <ul class="nav" role="tablist">
                                        <li class="grid-view" role="presentation">
                                            <a class="active" id="grid-view-tab" data-bs-toggle="tab"
                                                href="#grid-view" role="tab" aria-selected="true">
                                                <i class="fa fa-th"></i>
                                            </a>
                                        </li>
                                        <li class="list-view" role="presentation">
                                            <a id="list-view-tab" data-bs-toggle="tab" href="#list-view" role="tab"
                                                aria-selected="true">
                                                <i class="fa fa-th-list"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="short">
                                    <select class="nice-select rounded-0">
                                        <option value="1">Sort by Default</option>
                                        <option value="2">Sort by Popularity</option>
                                        <option value="3">Sort by Rated</option>
                                        <option value="4">Sort by Latest</option>
                                        <option value="5">Sort by High Price</option>
                                        <option value="6">Sort by Low Price</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content text-charcoal pt-8">
                            <div class="tab-pane fade show active" id="grid-view" role="tabpanel"
                                aria-labelledby="grid-view-tab">
                                <div class="product-grid-view row">
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-1-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name pb-1" href="single-product-variable.html">Auto Clutch
                                                    & Brake</a>
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
                                    <div class="col-xl-4 col-sm-6 pt-6 pt-md-0">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-2-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name pb-1" href="single-product-variable.html">Fuel
                                                    Injector</a>
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
                                    <div class="col-xl-4 col-sm-6 pt-6 pt-xl-0">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-3-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name pb-1" href="single-product-variable.html">A/C
                                                    Compressor</a>
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
                                    <div class="col-xl-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-4-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name pb-1" href="single-product-variable.html">Shock
                                                    Absorbers</a>
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
                                    <div class="col-xl-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-5-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name pb-1" href="single-product-variable.html">Catalytic
                                                    Converter</a>
                                                <div class="price-box">
                                                    <div class="price-box-holder">
                                                        <span>Price:</span>
                                                        <span class="new-price text-primary">$200.00</span>
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
                                    <div class="col-xl-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-6-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name pb-1" href="single-product-variable.html">Tire
                                                    Pressure Gauge</a>
                                                <div class="price-box">
                                                    <div class="price-box-holder">
                                                        <span>Price:</span>
                                                        <span class="new-price text-primary">$220.00</span>
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
                                    <div class="col-xl-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-7-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name pb-1" href="single-product-variable.html">Power
                                                    Steering Fluid</a>
                                                <div class="price-box">
                                                    <div class="price-box-holder">
                                                        <span>Price:</span>
                                                        <span class="new-price text-primary">$240.00</span>
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
                                    <div class="col-xl-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-8-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name pb-1"
                                                    href="single-product-variable.html">Transmission</a>
                                                <div class="price-box">
                                                    <div class="price-box-holder">
                                                        <span>Price:</span>
                                                        <span class="new-price text-primary">$250.00</span>
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
                                    <div class="col-xl-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-9-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name pb-1" href="single-product-variable.html">Spark
                                                    Plug</a>
                                                <div class="price-box">
                                                    <div class="price-box-holder">
                                                        <span>Price:</span>
                                                        <span class="new-price text-primary">$215.00</span>
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
                                    <div class="col-xl-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-10-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name pb-1" href="single-product-variable.html">Spare
                                                    Tire</a>
                                                <div class="price-box">
                                                    <div class="price-box-holder">
                                                        <span>Price:</span>
                                                        <span class="new-price text-primary">$190.00</span>
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
                                    <div class="col-xl-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-11-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name pb-1" href="single-product-variable.html">Engine
                                                    Fan</a>
                                                <div class="price-box">
                                                    <div class="price-box-holder">
                                                        <span>Price:</span>
                                                        <span class="new-price text-primary">$145.00</span>
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
                                    <div class="col-xl-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-12-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name pb-1" href="single-product-variable.html">Car
                                                    Jack</a>
                                                <div class="price-box">
                                                    <div class="price-box-holder">
                                                        <span>Price:</span>
                                                        <span class="new-price text-primary">$125.00</span>
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
                            <div class="tab-pane fade" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
                                <div class="product-list-view row">
                                    <div class="col-12">
                                        <div class="product-list-item">
                                            <div class="product-list-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-1-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-list-content">
                                                <a class="product-name pb-2" href="single-product-variable.html">Auto
                                                    Clutch & Brake</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$120.00</span>
                                                </div>
                                                <div class="rating-box pb-2">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="short-desc mb-0">Integer commodo ligula in lectus porttitor
                                                    tempus. Integer euismod, enim ut molestie dictum, nibh lectus
                                                    scelerisque tellus, a dictum sem urna vel odio. Morbi sed quam vitae leo
                                                    euismod sodales ac vel lacus. Sed fermentum erat sit amet faucibus
                                                    egestas. Nunc rhoncus sem in orci blandit scelerisque. Suspendisse magna
                                                    tortor, aliquet non eleifend.</p>
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
                                    <div class="col-12 pt-8">
                                        <div class="product-list-item">
                                            <div class="product-list-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-2-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-list-content">
                                                <a class="product-name pb-2" href="single-product-variable.html">Fuel
                                                    Injector</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$130.00</span>
                                                </div>
                                                <div class="rating-box pb-2">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="short-desc mb-0">Integer commodo ligula in lectus porttitor
                                                    tempus. Integer euismod, enim ut molestie dictum, nibh lectus
                                                    scelerisque tellus, a dictum sem urna vel odio. Morbi sed quam vitae leo
                                                    euismod sodales ac vel lacus. Sed fermentum erat sit amet faucibus
                                                    egestas. Nunc rhoncus sem in orci blandit scelerisque. Suspendisse magna
                                                    tortor, aliquet non eleifend.</p>
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
                                    <div class="col-12 pt-8">
                                        <div class="product-list-item">
                                            <div class="product-list-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-3-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-list-content">
                                                <a class="product-name pb-2" href="single-product-variable.html">A/C
                                                    Compressor</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$150.00</span>
                                                </div>
                                                <div class="rating-box pb-2">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="short-desc mb-0">Integer commodo ligula in lectus porttitor
                                                    tempus. Integer euismod, enim ut molestie dictum, nibh lectus
                                                    scelerisque tellus, a dictum sem urna vel odio. Morbi sed quam vitae leo
                                                    euismod sodales ac vel lacus. Sed fermentum erat sit amet faucibus
                                                    egestas. Nunc rhoncus sem in orci blandit scelerisque. Suspendisse magna
                                                    tortor, aliquet non eleifend.</p>
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
                                    <div class="col-12 pt-8">
                                        <div class="product-list-item">
                                            <div class="product-list-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-4-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-list-content">
                                                <a class="product-name pb-2" href="single-product-variable.html">Shock
                                                    Absorbers</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$180.00</span>
                                                </div>
                                                <div class="rating-box pb-2">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="short-desc mb-0">Integer commodo ligula in lectus porttitor
                                                    tempus. Integer euismod, enim ut molestie dictum, nibh lectus
                                                    scelerisque tellus, a dictum sem urna vel odio. Morbi sed quam vitae leo
                                                    euismod sodales ac vel lacus. Sed fermentum erat sit amet faucibus
                                                    egestas. Nunc rhoncus sem in orci blandit scelerisque. Suspendisse magna
                                                    tortor, aliquet non eleifend.</p>
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
                                    <div class="col-12 pt-8">
                                        <div class="product-list-item">
                                            <div class="product-list-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-5-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-list-content">
                                                <a class="product-name pb-2" href="single-product-variable.html">Catalytic
                                                    Converte</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$200.00</span>
                                                </div>
                                                <div class="rating-box pb-2">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="short-desc mb-0">Integer commodo ligula in lectus porttitor
                                                    tempus. Integer euismod, enim ut molestie dictum, nibh lectus
                                                    scelerisque tellus, a dictum sem urna vel odio. Morbi sed quam vitae leo
                                                    euismod sodales ac vel lacus. Sed fermentum erat sit amet faucibus
                                                    egestas. Nunc rhoncus sem in orci blandit scelerisque. Suspendisse magna
                                                    tortor, aliquet non eleifend.</p>
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
                                    <div class="col-12 pt-8">
                                        <div class="product-list-item">
                                            <div class="product-list-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-6-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-list-content">
                                                <a class="product-name pb-2" href="single-product-variable.html">Tire
                                                    Pressure Gauge</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$220.00</span>
                                                </div>
                                                <div class="rating-box pb-2">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="short-desc mb-0">Integer commodo ligula in lectus porttitor
                                                    tempus. Integer euismod, enim ut molestie dictum, nibh lectus
                                                    scelerisque tellus, a dictum sem urna vel odio. Morbi sed quam vitae leo
                                                    euismod sodales ac vel lacus. Sed fermentum erat sit amet faucibus
                                                    egestas. Nunc rhoncus sem in orci blandit scelerisque. Suspendisse magna
                                                    tortor, aliquet non eleifend.</p>
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
                                    <div class="col-12 pt-8">
                                        <div class="product-list-item">
                                            <div class="product-list-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-7-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-list-content">
                                                <a class="product-name pb-2" href="single-product-variable.html">Power
                                                    Steering Fluid</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$240.00</span>
                                                </div>
                                                <div class="rating-box pb-2">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="short-desc mb-0">Integer commodo ligula in lectus porttitor
                                                    tempus. Integer euismod, enim ut molestie dictum, nibh lectus
                                                    scelerisque tellus, a dictum sem urna vel odio. Morbi sed quam vitae leo
                                                    euismod sodales ac vel lacus. Sed fermentum erat sit amet faucibus
                                                    egestas. Nunc rhoncus sem in orci blandit scelerisque. Suspendisse magna
                                                    tortor, aliquet non eleifend.</p>
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
                                    <div class="col-12 pt-8">
                                        <div class="product-list-item">
                                            <div class="product-list-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-1-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-list-content">
                                                <a class="product-name pb-2"
                                                    href="single-product-variable.html">Transmission</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$250.00</span>
                                                </div>
                                                <div class="rating-box pb-2">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="short-desc mb-0">Integer commodo ligula in lectus porttitor
                                                    tempus. Integer euismod, enim ut molestie dictum, nibh lectus
                                                    scelerisque tellus, a dictum sem urna vel odio. Morbi sed quam vitae leo
                                                    euismod sodales ac vel lacus. Sed fermentum erat sit amet faucibus
                                                    egestas. Nunc rhoncus sem in orci blandit scelerisque. Suspendisse magna
                                                    tortor, aliquet non eleifend.</p>
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
                                    <div class="col-12 pt-8">
                                        <div class="product-list-item">
                                            <div class="product-list-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-1-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-list-content">
                                                <a class="product-name pb-2" href="single-product-variable.html">Spark
                                                    Plug</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$215.00</span>
                                                </div>
                                                <div class="rating-box pb-2">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="short-desc mb-0">Integer commodo ligula in lectus porttitor
                                                    tempus. Integer euismod, enim ut molestie dictum, nibh lectus
                                                    scelerisque tellus, a dictum sem urna vel odio. Morbi sed quam vitae leo
                                                    euismod sodales ac vel lacus. Sed fermentum erat sit amet faucibus
                                                    egestas. Nunc rhoncus sem in orci blandit scelerisque. Suspendisse magna
                                                    tortor, aliquet non eleifend.</p>
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
                                    <div class="col-12 pt-8">
                                        <div class="product-list-item">
                                            <div class="product-list-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-1-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-list-content">
                                                <a class="product-name pb-2" href="single-product-variable.html">Spare
                                                    Tire</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$190.00</span>
                                                </div>
                                                <div class="rating-box pb-2">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="short-desc mb-0">Integer commodo ligula in lectus porttitor
                                                    tempus. Integer euismod, enim ut molestie dictum, nibh lectus
                                                    scelerisque tellus, a dictum sem urna vel odio. Morbi sed quam vitae leo
                                                    euismod sodales ac vel lacus. Sed fermentum erat sit amet faucibus
                                                    egestas. Nunc rhoncus sem in orci blandit scelerisque. Suspendisse magna
                                                    tortor, aliquet non eleifend.</p>
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
                                    <div class="col-12 pt-8">
                                        <div class="product-list-item">
                                            <div class="product-list-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-1-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-list-content">
                                                <a class="product-name pb-2" href="single-product-variable.html">Engine
                                                    Fan</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$145.00</span>
                                                </div>
                                                <div class="rating-box pb-2">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="short-desc mb-0">Integer commodo ligula in lectus porttitor
                                                    tempus. Integer euismod, enim ut molestie dictum, nibh lectus
                                                    scelerisque tellus, a dictum sem urna vel odio. Morbi sed quam vitae leo
                                                    euismod sodales ac vel lacus. Sed fermentum erat sit amet faucibus
                                                    egestas. Nunc rhoncus sem in orci blandit scelerisque. Suspendisse magna
                                                    tortor, aliquet non eleifend.</p>
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
                                    <div class="col-12 pt-8">
                                        <div class="product-list-item">
                                            <div class="product-list-img img-zoom-effect">
                                                <a href="single-product-variable.html">
                                                    <img class="img-full"
                                                        src="{{ asset('assets/images/product/medium-size/shop/1-1-290x350.jpg') }}"
                                                        alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-list-content">
                                                <a class="product-name pb-2" href="single-product-variable.html">Car
                                                    Jack</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$125.00</span>
                                                </div>
                                                <div class="rating-box pb-2">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="short-desc mb-0">Integer commodo ligula in lectus porttitor
                                                    tempus. Integer euismod, enim ut molestie dictum, nibh lectus
                                                    scelerisque tellus, a dictum sem urna vel odio. Morbi sed quam vitae leo
                                                    euismod sodales ac vel lacus. Sed fermentum erat sit amet faucibus
                                                    egestas. Nunc rhoncus sem in orci blandit scelerisque. Suspendisse magna
                                                    tortor, aliquet non eleifend.</p>
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
                        </div>
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
    </main>
    <!-- Main Content Area End Here -->
@endsection
