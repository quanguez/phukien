@extends('layouts.base')
@section('title')
    404 {{ __('not found!') }}
@endsection
@section('content')
    <!-- Begin Main Content Area -->
    <div class="breadcrumb-area breadcrumb-height"
        data-bg-image="{{ asset('assets/images/breadcrumb/bg/1-1-1920x400.jpg') }}">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item text-night-rider">
                        <h2 class="breadcrumb-heading">{{ __('error') }} 404</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">{{ __('home') }} /</a>
                            </li>
                            <li>404</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="error-404-area section-space-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="error-404-content">
                        <h1 class="title mb-5">404</h1>
                        <h2 class="sub-title mb-4"><span>{{ __('Sorry') }},</span> {{ __('this page not found!') }}</h2>
                        <p class="short-desc mb-7">Seems like nothing was found at this location. Try something else or you
                            can go back to the homepage following the button below!</p>
                        <div class="button-wrap">
                            <a class="btn btn-custom-size lg-size btn-primary btn-secondary-hover rounded-0"
                                href="{{ route('home') }}">{{ __('back to home') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="error-404-img">
                        <div class="scene fill">
                            <div class="layer expand-width" data-depth="0.2">
                            </div>
                        </div>
                        <div class="scene fill">
                            <div class="single-img expand-width" data-depth="0.2">
                                <img src="{{ asset('assets/images/error-404/1.png') }}" alt="Error Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Area End Here -->
@endsection
