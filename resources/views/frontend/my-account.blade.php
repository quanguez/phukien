@extends('layouts.base')
@section('title')
    {{ __('my acount') }}
@endsection
@section('content')
    <!-- Begin Main Content Area -->
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1920x400.jpg">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item text-night-rider">
                            <h2 class="breadcrumb-heading">My Account Page</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home/</a>
                                </li>
                                <li>My Account</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="account-page-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="account-dashboard-tab" data-bs-toggle="tab"
                                    href="#account-dashboard" role="tab" aria-controls="account-dashboard"
                                    aria-selected="true">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-orders-tab" data-bs-toggle="tab"
                                    href="#account-orders" role="tab" aria-controls="account-orders"
                                    aria-selected="false">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-address-tab" data-bs-toggle="tab"
                                    href="#account-address" role="tab" aria-controls="account-address"
                                    aria-selected="false">Addresses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-details-tab" data-bs-toggle="tab"
                                    href="#account-details" role="tab" aria-controls="account-details"
                                    aria-selected="false">Account Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-logout-tab" href="login-register.html" role="tab"
                                    aria-selected="false">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                            <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel"
                                aria-labelledby="account-dashboard-tab">
                                <div class="myaccount-dashboard">
                                    <p>Hello <b>Tromic</b> (not Tromic? <a href="login-register.html">Sign
                                            out</a>)</p>
                                    <p>From your account dashboard you can view your recent orders, manage your shipping and
                                        billing addresses and <a href="#">edit your password and account details</a>.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-orders" role="tabpanel"
                                aria-labelledby="account-orders-tab">
                                <div class="myaccount-orders">
                                    <h4 class="small-title">MY ORDERS</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <tbody>
                                                <tr>
                                                    <th>ORDER</th>
                                                    <th>DATE</th>
                                                    <th>STATUS</th>
                                                    <th>TOTAL</th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td><a class="account-order-id" href="#">#5364</a></td>
                                                    <td>Mar 27, 2019</td>
                                                    <td>On Hold</td>
                                                    <td>$162.00 for 2 items</td>
                                                    <td><a href="#"
                                                            class="btn btn-dark btn-primary-hover"><span>View</span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a class="account-order-id" href="#">#5356</a></td>
                                                    <td>Mar 27, 2019</td>
                                                    <td>On Hold</td>
                                                    <td>$162.00 for 2 items</td>
                                                    <td><a href="#"
                                                            class="btn btn-dark btn-primary-hover"><span>View</span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-address" role="tabpanel"
                                aria-labelledby="account-address-tab">
                                <div class="myaccount-address">
                                    <p>The following addresses will be used on the checkout page by default.</p>
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="small-title">BILLING ADDRESS</h4>
                                            <address>
                                                1234 Heaven Stress, Beverly Hill OldYork UnitedState of Lorem
                                            </address>
                                        </div>
                                        <div class="col">
                                            <h4 class="small-title">SHIPPING ADDRESS</h4>
                                            <address>
                                                1234 Heaven Stress, Beverly Hill OldYork UnitedState of Lorem
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-details" role="tabpanel"
                                aria-labelledby="account-details-tab">
                                <div class="myaccount-details">
                                    <form action="#" class="myaccount-form">
                                        <div class="myaccount-form-inner">
                                            <div class="single-input single-input-half">
                                                <label>First Name*</label>
                                                <input type="text">
                                            </div>
                                            <div class="single-input single-input-half">
                                                <label>Last Name*</label>
                                                <input type="text">
                                            </div>
                                            <div class="single-input">
                                                <label>Email*</label>
                                                <input type="email">
                                            </div>
                                            <div class="single-input">
                                                <label>Current Password(leave blank to leave
                                                    unchanged)</label>
                                                <input type="password">
                                            </div>
                                            <div class="single-input">
                                                <label>New Password (leave blank to leave
                                                    unchanged)</label>
                                                <input type="password">
                                            </div>
                                            <div class="single-input">
                                                <label>Confirm New Password</label>
                                                <input type="password">
                                            </div>
                                            <div class="single-input">
                                                <button class="btn btn-custom-size lg-size btn-primary" type="submit">
                                                    <span>SAVE CHANGES</span>
                                                </button>
                                            </div>
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
