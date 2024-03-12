@extends('fr.layouts.master')
@section('meta')
    <meta name="description"
        content="Chez Ecwat, nous nous engageons passionnément à façonner un avenir énergétique plus propre et durable. En tant que leader mondial dans le domaine des solutions éco-énergétiques, nous offrons une gamme complète de produits et services innovants dans les domaines de l'énergie solaire et des technologies de l'eau.">
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}" />
@endsection
@section('content')
    {{-- Start Content --}}
    <!-- start slider-->
    <section class="promo--style-3">
        <div class="promo-slider promo--style-3-slider">
            <!-- item start-->
            <div class="slider-item item--style-1">
                <div class="overlay"></div>
                <div class="bg-holder jarallax">
                    <picture>
                        <source srcset="{{ asset('assets/img/slide/ecwat_solar.webp') }}" media="(min-width: 992px)" />
                        <img class="img-bg jarallax-img" src="{{ asset('assets/img/slide/ecwat_solar.webp') }}"
                            alt="ecwat solar" />
                    </picture>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-9">
                            <div class="align-container">
                                <div class="align-item">
                                    <div class="promo-slider__wrapper-1">
                                        <h2 class="title">Écwat Solaire <span>Exploitez l'Énergie Solaire avec
                                                Confiance</span></h2>
                                    </div>
                                    <div class="promo-slider__wrapper-2">
                                        <p class="subtitle">Découvrez nos solutions solaires avancées pour une énergie
                                            propre et renouvelable. Chez
                                            Écwat Solaire, nous proposons des panneaux solaires innovants et des systèmes
                                            énergétiques solaires
                                            adaptés à vos besoins spécifiques.</p>
                                    </div>
                                    <div class="promo-slider__wrapper-3">
                                        <a class="button button--filled"
                                            href="{{ route('fr.products.show', 'panneux-solaires') }}"
                                            data-hover="Découvrir"><span>Découvrir</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item end-->
            <!-- item start-->
            <div class="slider-item item--style-1">
                <div class="overlay"></div>
                <div class="bg-holder jarallax">
                    <picture>
                        <source srcset="{{ asset('assets/img/slide/ecwat_pump.webp') }}" media="(min-width: 992px)" /><img
                            class="img-bg jarallax-img" src="{{ asset('assets/img/slide/ecwat_pump.webp') }}"
                            alt="ecwat pump" />
                    </picture>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-9">
                            <div class="align-container">
                                <div class="align-item">
                                    <div class="promo-slider__wrapper-1">
                                        <h2 class="title">Écwat Pompes <span>Technologie Avancée au Service du Traitement
                                                des Eaux</span></h2>
                                    </div>
                                    <div class="promo-slider__wrapper-2">
                                        <p class="subtitle">Découvrez nos pompes de traitement des eaux de qualité,
                                            conformes aux normes d'accréditation
                                            d'Écwat. Nous sommes engagés dans la recherche scientifique proactive pour
                                            assurer des solutions
                                            innovantes dans le domaine du traitement des eaux.</p>
                                    </div>
                                    <div class="promo-slider__wrapper-3">
                                        <a class="button button--filled" href="{{ route('fr.products.show', 'pompes') }}"
                                            data-hover="Découvrir"><span>Découvrir</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item end-->
            <!-- item start-->
            <div class="slider-item item--style-1">
                <div class="overlay"></div>
                <div class="bg-holder jarallax">
                    <picture>
                        <source srcset="{{ asset('assets/img/slide/ecwat_inverter.webp') }}" media="(min-width: 992px)" />
                        <img class="img-bg jarallax-img" src="{{ asset('assets/img/slide/ecwat_inverter.webp') }}"
                            alt="ecwat inverter" />
                    </picture>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-9">
                            <div class="align-container">
                                <div class="align-item">
                                    <div class="promo-slider__wrapper-1">
                                        <h2 class="title">Onduleurs Écwat <span>L'Innovation au Service de l'Énergie</span>
                                        </h2>
                                    </div>
                                    <div class="promo-slider__wrapper-2">
                                        <p class="subtitle">Explorez notre gamme d'onduleurs Écwat, répondant aux normes
                                            d'accréditation de qualité.
                                            Nous sommes à la pointe de l'innovation technologique pour vous fournir des
                                            solutions énergétiques
                                            fiables et efficaces.</p>
                                    </div>
                                    <div class="promo-slider__wrapper-3">
                                        <a class="button button--filled"
                                            href="{{ route('fr.products.show', 'variateurs-solaires') }}"
                                            data-hover="Découvrir"><span>Découvrir</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item end-->
        </div>
        <!-- promo-slider end-->
        <!-- slider nav start-->
        <div class="slider-nav">
            <div class="inner-holder">
                <div class="promo-dots"></div><span class="paging-info"></span>
            </div>
        </div>
        <!-- slider nav end-->
    </section>
    <!-- end slider-->
    <!-- Section des Services -->
    <section class="section services-inner services-inner--style-3 no-padding-bottom">
        <div class="container">
            <!-- En-tête de la Section -->
            <div class="row margin-bottom">
                <div class="col-xl-7 col-lg-6">
                    <div class="heading primary-heading inner-heading">
                        <div class="title-holder">
                            <div class="title-block">
                                <h3 class="title">Nos Services</h3>
                                <p class="subtitle">Bienvenue chez Ecwat,<br />Votre partenaire en énergie solaire et
                                    traitement d'eau.</p>
                            </div>
                            <div class="img-block">
                                <img src="{{ asset('assets/img/general/logo-white.webp') }}" width="80"
                                    alt="Ecwat Logo" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="heading-description">
                        <p>Notre engagement est d'apporter des solutions globales durables. Explorez nos services innovants
                            et respectueux de l'environnement.</p>
                        <a class="button button--transparent button--common" href="{{ route('fr.services') }}"
                            data-hover="Tous les services">
                            <span>Tous les services</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Grille des Services -->
        <div class="container">
            <div class="row offset-margin">
                <div class="col-md-3 col-6">
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('fr.products.show', 'panneaux-solaires') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/solar-power.webp') }}"
                                    alt="Panneaux Solaires Ecwat" /></div>
                            <figcaption>
                                <h4 class="title">Panneaux Solaires</h4>
                            </figcaption>
                        </a>
                    </figure>
                </div>

                <div class="col-md-3 col-6">
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('fr.products.show', 'variateurs-solaires') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/variateur.webp') }}"
                                    alt="Variateures Solaires Ecwat" /></div>
                            <figcaption>
                                <h4 class="title">Variateures Solaires</h4>
                            </figcaption>
                        </a>
                    </figure>
                </div>

                <div class="col-md-3 col-6">
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('fr.products.show', 'pompes') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/pompe-a-eau.webp') }}"
                                    alt="Pompes ecwat" />
                            </div>
                            <figcaption>
                                <h4 class="title">Pompes</h4>
                            </figcaption>
                        </a>
                    </figure>
                </div>

                <div class="col-md-3 col-6">
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('fr.products.show', 'dosage') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/dosage.webp') }}"
                                    alt="Dosage ecwat" />
                            </div>
                            <figcaption>
                                <h4 class="title">Dosage</h4>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la Section des Services -->
    <!-- Section À Propos -->
    <section class="section about padding-top no-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-7">
                    <div class="title-block"><span class="title">À Propos</span>
                        <h2 class="subtitle">Ecwat</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-holder">
            <div class="text-holder"><span>À Propos</span></div>
            <div class="img-holder jarallax">
                <div class="overlay"></div>
                <picture>
                    <source srcset="{{ asset('assets/img/bg/grille-1.webp') }}" media="(min-width: 992px)" />
                    <img class="img-bg jarallax-img" src="{{ asset('assets/img/bg/grille-1.webp') }}"
                        alt="À Propos d'Ecwat" />
                </picture>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-3">
                    <!-- Élément À Propos -->
                    <div class="about-item">
                        {{-- <svg class="icon">
                            <use xlink:href="#logo"></use>
                        </svg> --}}
                        <img src="{{ asset('assets/img/general/logo.webp') }}" width="70" alt="Ecwat logo">
                        <h2 class="title">Nous offrons le futur de l'énergie</h2>
                        <p class="description">Ecwat s'engage à fournir des <strong>solutions énergétiques</strong>
                            durables pour un avenir
                            plus propre. Découvrez notre expertise dans la gestion de <strong>l'énergie
                                renouvelable</strong>, <strong>des panneaux
                                solaires aux systèmes de traitement des eaux</strong>. Chez Ecwat, nous façonnons le futur
                            de l'énergie
                            en
                            harmonie avec l'environnement.</p>
                        <a class="button button--transparent" href="{{ route('fr.about') }}"
                            data-hover="Voir plus"><span>Voir
                                plus</span></a>
                    </div>
                    <!-- Fin de l'Élément À Propos -->
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la Section À Propos -->
    {{-- Start our quality --}}
    @include('fr.components.our_quality')
    {{-- End our quality --}}
    <!-- products-style-3 start-->
    <section class="section products--style-3">
        <div class="container">
            <div class="row align-items-center margin-bottom">
                <div class="col-xl-6 col-lg-7">
                    <div class="heading primary-heading heading-with-button">
                        <div class="text-block">
                            <h3 class="title">Nos produits</h3>
                            <h5 class="subtitle">
                                Un produit sur lequel vous pouvez compter</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <div class="button-block">
                        <div class="products-slider-dots"></div><a
                            class="button button--transparent d-none d-lg-inline-block" href="{{ route('fr.products') }}"
                            data-hover="Découvrir"><span>Découvrir</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-holder offset-top-10">
            <div class="slider-wrapper">
                <!-- products slider start-->
                <div class="products-slider">
                    @foreach ($homeProducts as $product)
                        <!-- item start-->
                        <div class="slider-item">
                            {{-- @include('fr.components.product', ['product' => $product, 'badge' => 'new']) --}}
                            @include('fr.components.product', ['product' => $product])
                        </div>
                        <!-- item end-->
                    @endforeach
                </div>
                <!-- products slider end-->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center d-block d-lg-none margin-top"><a class="button button--transparent"
                            href="#" data-hover="Découvrir"><span>Découvrir</span></a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- products-style-3 end-->
    {{-- Start multi location --}}
    @include('fr.components.multi_location')
    {{-- End multi location --}}
    <!-- relevant start-->
    @include('fr.components.relevent')
    <!-- relevant end-->
    <!-- Section Statistiques -->
    @include('fr.components.our_statistiques')
    <!-- Fin de la Section Statistiques -->
    <!-- brands start-->
    @include('fr.components.brands', ['with_heading' => false])
    <!-- brands end-->
    {{-- End Content --}}
@endsection
