@extends('layouts.base')
@section('title')
    {{ __('compare') }}
@endsection
@section('content')
    <!-- Begin Main Content Area -->
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1920x400.jpg">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item text-night-rider">
                            <h2 class="breadcrumb-heading">Compare Page</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home/</a>
                                </li>
                                <li>Compare</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="compare-area section-space-y-axis-100">
            <div class="container">
                <div class="compare-table table-responsive">
                    <table class="table table-bordered table-hover mb-0">
                        <tbody>
                            <tr>
                                <th class="compare-column-titles">Image</th>
                                <td class="compare-column-productinfo">
                                    <div class="compare-pdoduct-image">
                                        <a href="single-product.html">
                                            <img src="assets/images/product/small-size/2-1-112x112.png"
                                                alt="Wishlist Thumbnail">
                                        </a>
                                        <a href="cart.html" class="btn btn-custom-size lg-size btn-primary">
                                            <span>ADD TO CART</span>
                                        </a>
                                    </div>
                                </td>
                                <td class="compare-column-productinfo">
                                    <div class="compare-pdoduct-image">
                                        <a href="single-product.html">
                                            <img src="assets/images/product/small-size/2-2-112x112.png"
                                                alt="Wishlist Thumbnail">
                                        </a>
                                        <a href="cart.html" class="btn btn-custom-size lg-size btn-primary">
                                            <span>ADD TO CART</span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <td>
                                    <h5 class="compare-product-name"><a href="single-product.html">Tail Light</a>
                                    </h5>
                                </td>
                                <td>
                                    <h5 class="compare-product-name"><a href="single-product.html">Wiper Blades</a></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por
                                    scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe
                                    solmen in li grammatica, li pronunciation e li plu commun vocabules.</td>
                                <td>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por
                                    scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe
                                    solmen in li grammatica, li pronunciation e li plu commun vocabules.</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>$80</td>
                                <td>$70</td>
                            </tr>
                            <tr>
                                <th>Color</th>
                                <td>Black</td>
                                <td>Red</td>
                            </tr>
                            <tr>
                                <th>Size</th>
                                <td>Medium</td>
                                <td>Large</td>
                            </tr>
                            <tr>
                                <th>Stock</th>
                                <td>In Stock</td>
                                <td>Stock Out</td>
                            </tr>
                            <tr>
                                <th>Rating</th>
                                <td>
                                    <div class="rating-box justify-content-center">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <div class="rating-box justify-content-center">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!-- Main Content Area End Here -->
@endsection
