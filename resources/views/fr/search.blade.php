@extends('fr.layouts.master')
@section('title')
    Recherche pour : {{ $term }}
@endsection
@section('content')
    <!-- Début de la promotion principale -->
    <section class="promo-primary">
        <div class="overlay"></div>
        <picture>
            <source srcset="{{ asset('assets/img/bg/search-page-bg.webp') }}" media="(min-width: 992px)" /><img
                class="jarallax-img img-bg" src="{{ asset('assets/img/bg/search-page-bg.webp') }}" alt="img" />
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="align-container">
                        <div class="align-item"><span>Ecwat</span>
                            <h1 class="title">Recherche pour : {{ $term }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la promotion principale -->
    <section class="section project-cases">
        <div class="container">
            <div class="row">
                @forelse ($products as $product)
                    <div class="col-lg-4 col-md-6">
                        <!-- item start-->
                        <div class="cases-item"><a class="img-holder"
                                href="{{ route('fr.products.details', [$product->category->slug, $product->slug]) }}">
                                <div class="overlay"></div><img class="img-bg"
                                    src="{{ asset('uploads/products/' . explode(',', $product->image)[0]) }}"
                                    alt="img" />
                            </a>
                            <div class="description">
                                <h5 class="title">{{ $product->name }}</h5><a class="with--line"
                                    href="{{ route('fr.products.details', [$product->category->slug, $product->slug]) }}">explore
                                    plus</a>
                            </div>
                        </div>
                        <!-- item start-->
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <img src="{{ asset('assets/img/svg/undraw_searching_re_3ra9.svg') }}" width="300" alt="">
                        <p class="mt-3">Désolé, produit non disponible.</p>
                    </div>
                @endforelse
            </div>
            <div class="container">
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
        </div>
    </section>
@endsection
