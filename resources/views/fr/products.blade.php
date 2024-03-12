@extends('fr.layouts.master')
@section('meta')
    <meta name="description"
        content="Découvrez la gamme de produits d'Ecwat, leader mondial dans le domaine des solutions éco-énergétiques. Nous proposons une variété de produits innovants, notamment des panneaux solaires de haute qualité, des systèmes de pompage avancés, des solutions de traitement de l'eau et bien plus encore. Explorez notre catalogue de produits pour trouver des solutions énergétiques durables pour vos besoins.">
@endsection
@section('title')
    Les Produits | Ecwat
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
                            <h1 class="title">Produits Ecwat</h1>
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
                    <li class="breadcrumb-item"><a href="{{ route('fr.home') }}">Accueil</a></li>
                    @isset($selectedCategory->name)
                        <li class="breadcrumb-item"><a href="{{ route('fr.products') }}">Produits</a>
                        </li>
                        @foreach ($imbrications as $imbrication)
                            @if ($imbrication == $selectedCategory->name)
                                <li class="breadcrumb-item active" aria-current="page">{{ $selectedCategory->name }}</li>
                            @else
                                {{-- <li class="breadcrumb-item"><a
                                        href="{{ route('fr.products.show', implode('-', explode(' ', $imbrication))) }}">{{ $imbrication }}</a>
                                </li> --}}
                                <li class="breadcrumb-item"><a
                                        href="{{ route('fr.products.show', implode('/', (array) \App\Http\Controllers\ProductController::CategoryImbrication(implode('-', explode(' ', strtolower($imbrication))), [strtolower($imbrication)], 'fr', true, false))) }}">{{ $imbrication }}</a>
                                </li>
                            @endif
                        @endforeach
                    @else
                        <li class="breadcrumb-item active" aria-current="page">Produits</li>
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
                                                @include('fr.components.category_partial', [
                                                    'category' => $category,
                                                ])
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- tabs header end-->
                                </div>
                                <div class="d-none d-md-block">
                                    @include('fr.components.new_product_aside')
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
                                            @include('fr.components.product', ['product' => $product])
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
    @include('fr.components.relevent')
    <!-- relevant end-->
    <div class="filter-backdrop"></div>
@endsection
