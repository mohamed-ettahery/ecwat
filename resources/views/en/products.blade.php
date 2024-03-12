@extends('en.layouts.master')
@section('meta')
    <meta name="description"
        content="Discover Ecwat's range of products, a global leader in eco-energy solutions. We offer a variety of innovative products, including high-quality solar panels, advanced pumping systems, water treatment solutions, and much more. Explore our product catalog to find sustainable energy solutions for your needs.">
@endsection
@section('title')
    Products | Ecwat
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}" />
@endsection
@section('content')
    <section class="promo-primary promo-primary--shop">
        <div class="overlay"></div>
        <picture>
            <source srcset="{{ asset('assets/img/bg/our-products-bg.webp') }}" media="(min-width: 992px)" /><img
                class="jarallax-img img-bg" src="{{ asset('assets/img/bg/our-products-bg.webp') }}" alt="img" />
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="align-container">
                        <div class="align-item">
                            <h1 class="title">Ecwat Products</h1>
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
                    @isset($selectedCategory->en_name)
                        <li class="breadcrumb-item"><a href="{{ route('en.products') }}">Products</a>
                        </li>
                        @foreach ($imbrications as $imbrication)
                            @if ($imbrication == $selectedCategory->en_name)
                                <li class="breadcrumb-item active" aria-current="page">{{ $selectedCategory->en_name }}</li>
                            @else
                                {{-- <li class="breadcrumb-item"><a
                                        href="{{ route('en.products.show', implode('-', explode(' ', $imbrication))) }}">{{ $imbrication }}</a>
                                </li> --}}
                                <li class="breadcrumb-item"><a
                                        href="{{ route('en.products.show', implode('/', (array) \App\Http\Controllers\ProductController::CategoryImbrication(implode('-', explode(' ', strtolower($imbrication))), [strtolower($imbrication)], 'en', true, false))) }}">{{ $imbrication }}</a>
                                </li>
                            @endif
                        @endforeach
                    @else
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                    @endisset
                </ol>
            </nav>
        </div>
    </section>
    <!-- catalog start-->
    <section class="catalog no-padding-bottom">
        <div class="tabs-holder catalog-tabs">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <!-- catalog aside start-->
                        <div class="aside-holder"><span class="close-aside d-lg-none">
                                <svg class="icon">
                                    <use xlink:href="#close"></use>
                                </svg></span>
                            <aside class="catalog-aside">
                                <div class="catalog-aside__inner">
                                    <h4 class="title toggler">Catégories</h4>
                                    <!-- tabs header start-->
                                    <div class="toggle-item">
                                        <ul class="categories-list clearfix">
                                            @foreach ($categories as $category)
                                                @include('en.components.category_partial', [
                                                    'category' => $category,
                                                ])
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- tabs header end-->
                                </div>
                                <div class="d-none d-md-block">
                                    @include('en.components.new_product_aside')
                                </div>
                            </aside>
                        </div>

                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="row d-lg-none">
                            <div class="col-12">
                                <div class="filter-trigger">
                                    <svg class="icon">
                                        <use xlink:href="#controls"></use>
                                    </svg><span class="title">Filters</span>
                                </div>
                            </div>
                        </div>
                        <!-- tabs content start-->
                        <div class="products-content">
                            <!-- tabs content item start-->
                            {{-- <div class="tabs-content__item">
                                <div class="row offset-margin">
                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- item start-->
                                        <figure class="product-item product-item--primary"><a class="img-holder"
                                                href="shop-product.html"><img src="{{ asset('assets/img/product-1.webp') }}"
                                                    alt="product" /></a>
                                            <figcaption><span class="description category_name">$ 1250.00</span>
                                                <h4 class="title"><a href="#">DUOMAX twin-DEG5C.07(II)</a></h4><a
                                                    class="with--line" href="#"><span>Add to cart</span></a>
                                            </figcaption>
                                        </figure>
                                        <!-- item end-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="pagination-holder">
                                            <!-- pagination start-->
                                            <ul class="pagination pagination--primary">
                                                <li class="back"><a href="#">Back</a></li>
                                                <li class="number current"><a href="#">1</a></li>
                                                <li class="number"><a href="#">2</a></li>
                                                <li class="number"><a href="#">3</a></li>
                                                <li class="number"><a href="#">4</a></li>
                                                <li class="number"><a href="#">5</a></li>
                                                <li class="next"><a href="#">Next</a></li>
                                            </ul>
                                            <!-- pagination end-->
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- tabs content item end-->
                            <!-- tabs content item start-->
                            <div>
                                <div class="row offset-margin">
                                    @foreach ($products as $product)
                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                            <!-- item start-->
                                            @include('en.components.product', ['product' => $product])
                                            <!-- item end-->
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="pagination-holder">
                                            <!-- pagination start-->
                                            {{ $products->links('vendor.pagination.default') }}
                                            <!-- pagination end-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tabs content item end-->
                            <!-- tabs content end-->
                        </div>
                    </div>
                    <!-- catalog aside end-->
                </div>
            </div>
        </div>
    </section>
    <!-- catalog end-->
    <!-- relevant start-->
    @include('en.components.relevent')
    <!-- relevant end-->
    <div class="filter-backdrop"></div>
@endsection
