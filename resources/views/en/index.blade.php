@extends('en.layouts.master')
@section('meta')
    <meta name="description"
        content="At Ecwat, we are passionately committed to shaping a cleaner and sustainable energy future. As a global leader in eco-energy solutions, we offer a comprehensive range of innovative products and services in the fields of solar energy and water technologies.">
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
                                        <h2 class="title">Ecwat Solar <span>Harness Solar Energy with Confidence</span>
                                        </h2>
                                    </div>
                                    <div class="promo-slider__wrapper-2">
                                        <p class="subtitle">Explore our advanced solar solutions for clean, renewable
                                            energy. At Ecwat Solar, we offer innovative solar panels and solar energy
                                            systems tailored to your specific needs.</p>
                                    </div>
                                    <div class="promo-slider__wrapper-3">
                                        <a class="button button--filled"
                                            href="{{ route('en.products.show', 'solar-panels') }}"
                                            data-hover="Discover"><span>Discover</span></a>
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
                                        <h2 class="title">Ecwat Pumps <span>Advanced Technology for Water Treatment</span>
                                        </h2>
                                    </div>
                                    <div class="promo-slider__wrapper-2">
                                        <p class="subtitle">Discover our quality water treatment pumps, compliant with
                                            Ecwat's accreditation standards. We are committed to proactive scientific
                                            research to ensure innovative solutions in water treatment.</p>
                                    </div>
                                    <div class="promo-slider__wrapper-3">
                                        <a class="button button--filled" href="{{ route('en.products.show', 'pumps') }}"
                                            data-hover="Discover"><span>Discover</span></a>
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
                                        <h2 class="title">Ecwat Inverters <span>Innovation for Energy</span></h2>
                                    </div>
                                    <div class="promo-slider__wrapper-2">
                                        <p class="subtitle">Explore our range of Ecwat inverters, meeting quality
                                            accreditation standards. We are at the forefront of technological innovation to
                                            provide you with reliable and efficient energy solutions.</p>
                                    </div>
                                    <div class="promo-slider__wrapper-3">
                                        <a class="button button--filled"
                                            href="{{ route('en.products.show', 'solar-inverters') }}"
                                            data-hover="Discover"><span>Discover</span></a>
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
            <!-- Section Header -->
            <div class="row margin-bottom">
                <div class="col-xl-7 col-lg-6">
                    <div class="heading primary-heading inner-heading">
                        <div class="title-holder">
                            <div class="title-block">
                                <h3 class="title">Our Services</h3>
                                <p class="subtitle">Welcome to Ecwat,<br />Your partner in solar energy and water treatment.
                                </p>
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
                        <p>Our commitment is to provide sustainable global solutions. Explore our innovative and
                            environmentally friendly services.</p>
                        <a class="button button--transparent button--common" href="{{ route('en.services') }}"
                            data-hover="All services">
                            <span>All services</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Grid -->
        <div class="container">
            <div class="row offset-margin">
                <div class="col-md-3 col-6">
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('en.products.show', 'solar-panels') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/solar-power.webp') }}"
                                    alt="Ecwat Solar Panels" /></div>
                            <figcaption>
                                <h4 class="title">Solar Panels</h4>
                            </figcaption>
                        </a>
                    </figure>
                </div>
                <div class="col-md-3 col-6">
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('en.products.show', 'solar-inverters') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/variateur.webp') }}"
                                    alt="Ecwat Solar Inverters" /></div>
                            <figcaption>
                                <h4 class="title">Solar Inverters</h4>
                            </figcaption>
                        </a>
                    </figure>
                </div>
                <div class="col-md-3 col-6">
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('en.products.show', 'pumps') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/pompe-a-eau.webp') }}"
                                    alt="Ecwat Pumps" /></div>
                            <figcaption>
                                <h4 class="title">Pumps</h4>
                            </figcaption>
                        </a>
                    </figure>
                </div>
                <div class="col-md-3 col-6">
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('en.products.show', 'dosage') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/dosage.webp') }}"
                                    alt="Ecwat Dosage" /></div>
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
                    <div class="title-block"><span class="title">About</span>
                        <h2 class="subtitle">Ecwat</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-holder">
            <div class="text-holder"><span>About</span></div>
            <div class="img-holder jarallax">
                <div class="overlay"></div>
                <picture>
                    <source srcset="{{ asset('assets/img/bg/grille-1.webp') }}" media="(min-width: 992px)" />
                    <img class="img-bg jarallax-img" src="{{ asset('assets/img/bg/grille-1.webp') }}"
                        alt="About Ecwat" />
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
                        <h2 class="title">We Offer the Future of Energy</h2>
                        <p class="description">Ecwat is committed to providing <strong>sustainable energy
                                solutions</strong> for a cleaner future. Discover our expertise in managing
                            <strong>renewable energy</strong>, <strong>from solar panels to water treatment
                                systems</strong>. At Ecwat, we shape the future of energy in harmony with the environment.
                        </p>
                        <a class="button button--transparent" href="{{ route('en.about') }}"
                            data-hover="View more"><span>View more</span></a>
                    </div>
                    <!-- Fin de l'Élément À Propos -->
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la Section À Propos -->
    {{-- Start our quality --}}
    @include('en.components.our_quality')
    {{-- End our quality --}}
    <!-- products-style-3 start-->
    <section class="section products--style-3">
        <div class="container">
            <div class="row align-items-center margin-bottom">
                <div class="col-xl-6 col-lg-7">
                    <div class="heading primary-heading heading-with-button">
                        <div class="text-block">
                            <h3 class="title">Our Products</h3>
                            <h5 class="subtitle">A product you can rely on</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <div class="button-block">
                        <div class="products-slider-dots"></div>
                        <a class="button button--transparent d-none d-lg-inline-block" href="{{ route('en.products') }}"
                            data-hover="Discover"><span>Discover</span></a>
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
                            {{-- @include('en.components.product', ['product' => $product, 'badge' => 'new']) --}}
                            @include('en.components.product', ['product' => $product])
                        </div>
                        <!-- item end-->
                    @endforeach
                </div>
                <!-- products slider end-->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center d-block d-lg-none margin-top"><a class="button button--transparent"
                            href="#" data-hover="Discover"><span>Discover</span></a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- products-style-3 end-->
    {{-- Start multi location --}}
    @include('en.components.multi_location')
    {{-- End multi location --}}
    <!-- relevant start-->
    @include('en.components.relevent')
    <!-- relevant end-->
    <!-- Section Statistiques -->
    @include('en.components.our_statistiques')
    <!-- Fin de la Section Statistiques -->
    <!-- brands start-->
    @include('en.components.brands', ['with_heading' => false])
    <!-- brands end-->
    {{-- End Content --}}
@endsection
