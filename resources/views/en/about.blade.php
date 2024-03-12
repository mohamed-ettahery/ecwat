@extends('en.layouts.master')
@section('meta')
    <meta name="description"
        content="At Ecwat, we are passionately committed to shaping a cleaner and more sustainable energy future. As a global leader in eco-energy solutions, we offer a comprehensive range of innovative products and services in the fields of solar energy and water technologies.">
@endsection
@section('title')
    About Ecwat | Ecwat
@endsection

@section('content')
    <!-- Section Promo Primaire -->
    <section class="promo-primary">
        <div class="overlay"></div>
        <picture>
            <source srcset="{{ asset('assets/img/bg/growth-bg.webp') }}" media="(min-width: 992px)" />
            <img class="img-bg" src="{{ asset('assets/img/bg/growth-bg.webp') }}" alt="img" />
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="align-container">
                        <div class="align-item">
                            <span>Ecwat</span>
                            <h1 class="title">About Ecwat</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Primary Promo Section -->
    <section class="breadcrumb-section">
        <div class="container p-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb--with-dot">
                    <li class="breadcrumb-item"><a href="{{ route('en.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Welcome Section About -->
    <section class="section about-welcome no-padding-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-5">
                    <div class="title-block">
                        <span>About</span>
                        <h2 class="title">Welcome to Ecwat</h2>
                        <div class="icon-holder">
                            <div class="img-block">
                                <img src="{{ asset('assets/img/general/logo-white.webp') }}" width="80"
                                    alt="Ecwat Logo" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 offset-xl-1 col-lg-6 offset-lg-1">
                    <div class="description">
                        <h3 class="title">We Offer the Future of Energy</h3>
                        <p>
                            At <strong>Ecwat</strong>, we are passionately committed to shaping a cleaner and more
                            sustainable energy future. As a global leader in eco-energy solutions, we offer a comprehensive
                            range of innovative products and services in the fields of solar energy and water technologies.
                            From designing and distributing <strong>solar panels</strong> to supplying advanced
                            <strong>water treatment systems</strong>, we are your trusted partner for efficient and
                            environmentally friendly <strong>energy solutions</strong>. Our dedicated team works tirelessly
                            to meet the needs of our clients worldwide, delivering high-quality products and exceptional
                            customer service. With renowned brands such as <strong>Ecwat Solar, Ecwat Inverter, Ecwat Pump,
                                Ecwat Valve,</strong> and many others, we take pride in our commitment to innovation,
                            sustainability, and excellence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la Section Bienvenue à Propos -->
    {{-- Start Our story --}}
    @include('en.components.our_story')
    {{-- End Our story --}}
    <!-- Section Texte -->
    <section class="section text-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="title">Just Like Us</h3>
                    <p class="subtitle">Technological creation is always based on perfect relationships</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la Section Texte -->
    {{-- Start gallery section --}}
    <div class="d-none d-md-block">
        @include('en.components.categories_gallery')
    </div>
    {{-- End gallery section --}}
    {{-- Start our quality --}}
    @include('en.components.our_quality')
    {{-- End our quality --}}
    <!-- Section Statistiques -->
    @include('en.components.our_statistiques')
    <!-- Fin de la Section Statistiques -->
    {{-- Start multi location --}}
    @include('en.components.multi_location')
    {{-- End multi location --}}
    <!-- brands start-->
    @include('en.components.brands', ['with_heading' => false])
    <!-- brands end-->
@endsection
