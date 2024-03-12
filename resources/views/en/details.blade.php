@extends('en.layouts.master')
@section('meta')
    <meta name="description" content="{{ $product->en_description }}">
@endsection
@section('title')
    {{ $product->en_name }}
@endsection
@section('css')
    <!-- Magnify CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnify/2.3.3/css/magnify.min.css"
        integrity="sha512-wzhF4/lKJ2Nc8mKHNzoFP4JZsnTcBOUUBT+lWPcs07mz6lK3NpMH1NKCKDMarjaw8gcYnSBNjjllN4kVbKedbw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <section class="promo-primary promo-primary--shop">
        <div class="overlay"></div>
        <picture>
            <source srcset="{{ asset('assets/img/bg/our-products-bg.webp') }}" media="(min-width: 992px)" /><img class="img-bg"
                src="{{ asset('assets/img/bg/our-products-bg.webp') }}" alt="img" />
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="align-container">
                        <div class="align-item">
                            <h1 class="title">{{ $product->en_name }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="breadcrumb-section">
        <div class="container p-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb--with-dot">
                    <li class="breadcrumb-item"><a href="{{ route('en.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('en.products') }}">Products</a>
                        @foreach ($imbrications as $imbrication)
                    <li class="breadcrumb-item"><a
                            href="{{ route('en.products.show', implode('-', explode(' ', $imbrication))) }}">{{ $imbrication }}</a>
                    </li>
                    @endforeach
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->en_name }}</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- shop product start-->
    <section class="section shop-product no-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8 offset-md-2 offset-lg-0">
                    <div class="sliders-holder">
                        <!-- product slider start-->
                        <div class="product-slider">
                            @foreach (explode(',', $product->image) as $image)
                                <div class="slider-item">
                                    {{-- <span class="product-slider__badge badge badge--sale">Sale</span> --}}
                                    <img src="{{ asset('uploads/products/' . $image) }}"
                                        alt="{{ $product->en_name . '|' . $product->image }}" />
                                    <span class="icon" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa-solid fa-arrows-maximize product-zoom-icon"></i>
                                    </span>
                                </div>
                            @endforeach
                        </div>
                        <!-- product slider end-->
                        <!-- nav slider start-->
                        @if (count(explode(',', $product->image)) > 1)
                            <div class="nav-slider">
                                @foreach (explode(',', $product->image) as $image)
                                    <div class="slider-item">
                                        <img src="{{ asset('uploads/products/' . $image) }}"
                                            alt="{{ $product->en_name . '|' . $product->image }}" />
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <!-- nav slider end-->
                    </div>
                </div>
                <div class="col-lg-5 col-md-10 offset-md-1 offset-lg-0">
                    <!-- product about start-->
                    <div class="product-about">
                        <!-- details start-->
                        <div class="details">
                            <h4 class="name">{{ $product->en_name }}</h4>
                            <span class="category_name">{{ $product->category->en_name }}</span>
                            @if ($product->mark)
                                <figure>
                                    <img src="{{ asset('uploads/marks/' . $product->mark->image) }}"
                                        alt="{{ $product->mark->en_name }}" width="90">
                                </figure>
                            @endif
                            <div class="description-content">
                                {!! $product->en_description !!}
                            </div>
                            @if (!$product->en_details)
                                <!-- downloads block start-->
                                <div class="downloads-block">
                                    @foreach (explode(',', $product->document) as $document)
                                        <a href="{{ asset('uploads/documents/' . $document) }}"
                                            download="{{ $product->en_name . '-MANUAL-' . $document }}">
                                            <span class="icon-holder">
                                                <svg class="icon">
                                                    <use xlink:href="#cloud"></use>
                                                </svg>
                                            </span>
                                            <span>{{ $product->en_name . '-MANUAL-' . $document }}</span>
                                        </a>
                                    @endforeach
                                </div>
                                <!-- downloads block end-->
                            @endif
                        </div>
                        <!-- details end-->
                    </div>
                    <!-- product about end-->
                </div>
            </div>
        </div>
        @if ($product->en_details)
            <div class="more-information-details container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 offset-md-1 offset-lg-0">
                        <!-- product info tabs start-->
                        <div class="product-info-tabs">
                            <div class="tabs-holder">
                                <!-- tabs header start-->
                                <div class="tabs-header">
                                    <span class="tabs-header__title">Descriptions</span>
                                    @if ($product->en_additional_information)
                                        <span class="tabs-header__title">Specifications</span>
                                    @endif
                                </div>
                                <!-- tabs header end-->
                                <!-- tabs content start-->
                                <div class="tabs-content">
                                    <!-- tabs content item start-->
                                    <div class="tabs-content__item">
                                        {!! $product->en_details !!}
                                    </div>
                                    <!-- tabs content item end-->
                                    <!-- tabs content item start-->
                                    <div class="tabs-content__item">
                                        {!! $product->en_additional_information !!}
                                    </div>
                                    <!-- tabs content item end-->
                                </div>
                                <!-- tabs content end-->
                            </div>
                        </div>
                        <!-- product info tabs end-->
                    </div>
                    <div class="col-lg-4 col-md-10 offset-md-1 offset-lg-0">
                        <!-- downloads block start-->
                        <div class="downloads-block">
                            @foreach (explode(',', $product->document) as $document)
                                <a href="{{ asset('uploads/documents/' . $document) }}"
                                    download="{{ $product->en_name . '-MANUAL-' . $document }}">
                                    <span class="icon-holder">
                                        <svg class="icon">
                                            <use xlink:href="#cloud"></use>
                                        </svg>
                                    </span>
                                    <span>{{ $product->en_name . '-MANUAL-' . $document }}</span>
                                </a>
                            @endforeach
                        </div>
                        <!-- downloads block end-->
                    </div>
                </div>
            </div>
        @endif
    </section>
    <!-- shop product end-->
    <!-- Similar products start-->
    @if (count($similars) > 1)
        <section class="section products--style-3">
            <div class="container">
                <div class="row align-items-center margin-bottom">
                    <div class="col-xl-6 col-lg-7">
                        <div class="heading primary-heading heading-with-button">
                            <div class="text-block">
                                <h3 class="title">Our Products</h3>
                                <h5 class="subtitle"><span>Similar Products</span></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="button-block">
                            <div class="products-slider-dots"></div>
                            <a class="button button--transparent d-none d-lg-inline-block"
                                href="{{ route('en.products.show', $product->category->en_slug) }}"
                                data-hover="Discover"><span>Discover</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-holder offset-top-10">
                <div class="slider-wrapper">
                    <!-- products slider start-->
                    <div class="products-slider">
                        @foreach ($similars as $similar)
                            <!-- item start-->
                            <div class="slider-item">
                                @include('en.components.product', ['product' => $similar])
                            </div>
                            <!-- item end-->
                        @endforeach
                    </div>
                    <!-- products slider end-->
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center d-block d-lg-none margin-top"><a class="button button--transparent"
                                href="{{ route('en.products.show', $similar->category->en_slug) }}"
                                data-hover="Discover"><span>Discover</span></a></div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- Similar products end-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="p-4">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- <div class="popup-product-slider"> --}}
                    <div class="popup-product-box product-image">
                        {{-- <div class="zoom-circle"></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('libs')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnify/2.3.3/js/jquery.magnify.min.js"
        integrity="sha512-YKxHqn7D0M5knQJO2xKHZpCfZ+/Ta7qpEHgADN+AkY2U2Y4JJtlCEHzKWV5ZE87vZR3ipdzNJ4U/sfjIaoHMfw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
