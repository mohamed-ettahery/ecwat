@extends('fr.layouts.master')
@section('meta')
    <meta name="description"
        content="Chez Ecwat, nous nous engageons passionnément à façonner un avenir énergétique plus propre et durable. En tant que leader mondial dans le domaine des solutions éco-énergétiques, nous offrons une gamme complète de produits et services innovants dans les domaines de l'énergie solaire et des technologies de l'eau.">
@endsection
@section('title')
    À propos d'Ecwat | Ecwat
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
                        <div class="align-item"><span>Ecwat</span>
                            <h1 class="title">À Propos d'Ecwat</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la Section Promo Primaire -->
    <section class="breadcrumb-section">
        <div class="container p-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb--with-dot">
                    <li class="breadcrumb-item"><a href="{{ route('fr.home') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">À propos de nous</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Section Bienvenue à Propos -->
    <section class="section about-welcome no-padding-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-5">
                    <div class="title-block"><span>À Propos</span>
                        <h2 class="title">Bienvenue chez Ecwat</h2>
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
                        <h3 class="title">Nous offrons le futur de l'énergie</h3>
                        <p>
                            Chez <strong>Ecwat</strong>, nous nous engageons passionnément à façonner un avenir énergétique
                            plus propre et
                            durable. En tant que leader mondial dans le domaine des solutions éco-énergétiques, nous offrons
                            une gamme complète de produits et services innovants dans les domaines de l'énergie solaire et
                            des technologies de l'eau. De la conception et la distribution de <strong>panneaux
                                solaires</strong> à la
                            fourniture de <strong>systèmes de traitement de l'eau</strong> de pointe, nous sommes votre
                            partenaire de
                            confiance pour des <strong>solutions énergétiques</strong> efficaces et respectueuses de
                            l'environnement. Notre
                            équipe dévouée travaille sans relâche pour répondre aux besoins de nos clients à travers le
                            monde, en fournissant des produits de haute qualité et un service client exceptionnel. Avec des
                            marques renommées telles que <strong>Ecwat Solar, Ecwat Inverter, Ecwat Pump , Ecwat
                                Valve</strong> et bien d'autres, nous
                            sommes fiers de notre engagement envers l'innovation, la durabilité et l'excellence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la Section Bienvenue à Propos -->
    {{-- Start Our story --}}
    @include('fr.components.our_story')
    {{-- End Our story --}}
    <!-- Section Texte -->
    <section class="section text-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="title">. Tout comme nous</h3>
                    <p class="subtitle">La création technologique est toujours basée sur des relations parfaites</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la Section Texte -->
    {{-- Start gallery section --}}
    <div class="d-none d-md-block">
        @include('fr.components.categories_gallery')
    </div>
    {{-- End gallery section --}}
    {{-- Start our quality --}}
    @include('fr.components.our_quality')
    {{-- End our quality --}}
    <!-- Section Statistiques -->
    @include('fr.components.our_statistiques')
    <!-- Fin de la Section Statistiques -->
    {{-- Start multi location --}}
    @include('fr.components.multi_location')
    {{-- End multi location --}}
    <!-- brands start-->
    @include('fr.components.brands', ['with_heading' => false])
    <!-- brands end-->
@endsection
