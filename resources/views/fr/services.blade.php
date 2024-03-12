@extends('fr.layouts.master')
@section('meta')
    <meta name="description"
        content="Découvrez les services d'Ecwat, leader mondial dans le domaine des solutions éco-énergétiques. Nous offrons une gamme complète de produits et services innovants dans les domaines de l'énergie solaire et des technologies de l'eau. De la conception et la distribution de panneaux solaires à la fourniture de systèmes de traitement de l'eau de pointe, nous sommes votre partenaire de confiance pour des solutions énergétiques efficaces et respectueuses de l'environnement.">
@endsection
@section('title')
    Nos Services | Ecwat
@endsection
@section('content')
    <!-- promo primary start-->
    <section class="promo-primary">
        <div class="overlay"></div>
        <picture>
            <source srcset="{{ asset('assets/img/bg/our-services-header-bg.webp') }}" media="(min-width: 992px)" /><img
                class="jarallax-img img-bg" src="{{ asset('assets/img/bg/our-services-header-bg.webp') }}" alt="img" />
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="align-container">
                        <div class="align-item"><span>Ecwat</span>
                            <h1 class="title">Nos services</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- promo primary end-->
    <section class="breadcrumb-section">
        <div class="container p-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb--with-dot">
                    <li class="breadcrumb-item"><a href="{{ route('fr.home') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nos services</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- services inner start-->
    <section class="pt-5 services-inner">
        <div class="container">
            <div class="row margin-bottom">
                <div class="col-lx-7 col-lg-6">
                    <div class="heading primary-heading inner-heading">
                        <div class="title-holder">
                            <div class="title-block">
                                <h3 class="title">Nos Services</h3>
                                <p class="subtitle d-none d-md-block">Bienvenue chez Ecwat <br />Votre partenaire solaire et
                                    hydrique.</p>
                            </div>
                            <div class="img-block">
                                <img src="{{ asset('assets/img/general/logo-white.webp') }}" width="80"
                                    alt="Ecwat Logo" />
                            </div>
                            <figure class="box-svg d-none d-md-block">
                                <img src="{{ asset('assets/img/svg/undraw_agree_re_hor9.svg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-lx-5 col-lg-6">
                    <div class="heading-description">
                        <h3><strong>ECWAT est Votre partenaire en énergie solaire et traitement d'eau.</strong></h3>
                        <p>
                            Notre <strong>engagement</strong> est d'apporter des solutions énergétiques durables. Explorez
                            nos services
                            innovants et respectueux de l'environnement, conçus pour répondre aux défis énergétiques actuels
                            et façonner un avenir plus vert.
                        </p>
                        <p>
                            Chez Ecwat, nous nous spécialisons dans la gestion de l'énergie renouvelable, offrant une gamme
                            complète de solutions allant des panneaux solaires aux systèmes de traitement des eaux. Que ce
                            soit pour les <strong>pompes horizontales</strong>, <strong>verticales</strong> ou
                            <strong>immergées</strong>, les <strong>pompes à chaleur</strong>, les <strong>produits
                                de dosage</strong> ou la <strong>robinetterie</strong>, nous sommes votre partenaire de
                            confiance pour des solutions
                            énergétiques efficaces et respectueuses de l'environnement.
                        </p>
                        <p>
                            Que vous soyez un particulier, une entreprise ou une collectivité, nous sommes là pour vous
                            accompagner dans votre transition vers une énergie plus propre et plus durable. Avec notre
                            <strong>engagement envers l'innovation</strong> et la <strong>qualité</strong>, vous pouvez
                            compter sur Ecwat pour des services de
                            premier plan qui répondent à vos besoins énergétiques avec excellence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services inner end-->
    {{-- Start our quality --}}
    @include('fr.components.our_quality')
    {{-- End our quality --}}
    <!-- products-style-3 start-->
    <!-- we provide start-->
    <section class="section we-provide no-padding-top no-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading primary-heading">
                        <h3 class="title">Catégories</h3>
                        <h5 class="subtitle"><span>Nous proposons une gamme complète de technologies pour l'énergie et
                                l'eau</span></h5>
                        <p>Nos services ECWAT visent à fournir des solutions éco-énergétiques innovantes, notamment dans les
                            domaines de l'énergie solaire, hydraulique, éolienne, biomasse, et bien plus encore. Notre
                            équipe dévouée travaille sans relâche pour répondre à vos besoins en vous offrant des produits
                            et services de haute qualité pour un avenir durable.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row offset-margin">
                <div class="col-lg-3 col-sm-4 col-6">
                    <!-- item start-->
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('fr.products.show', 'panneux-solaires') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/solar-power.webp') }}"
                                    alt="Panneaux Solaires" /></div>
                            <figcaption>
                                <h4 class="title">Panneaux Solaires</h4>
                            </figcaption>
                        </a>
                    </figure>
                    <!-- item end-->
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <!-- item start-->
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('fr.products.show', 'variateurs-solaires') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/variateur.webp') }}"
                                    alt="Panneaux Solaires" /></div>
                            <figcaption>
                                <h4 class="title">Variateures Solaires</h4>
                            </figcaption>
                        </a>
                    </figure>
                    <!-- item end-->
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <!-- item start-->
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('fr.products.show', 'systeme-solaire') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/solar-power-system.webp') }}"
                                    alt="Panneaux Solaires" /></div>
                            <figcaption>
                                <h4 class="title">Systémes Solaires</h4>
                            </figcaption>
                        </a>
                    </figure>
                    <!-- item end-->
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <!-- item start-->
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('fr.products.show', 'pompes') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/pompe-a-eau.webp') }}"
                                    alt="Panneaux Solaires" /></div>
                            <figcaption>
                                <h4 class="title">Pompes</h4>
                            </figcaption>
                        </a>
                    </figure>
                    <!-- item end-->
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <!-- item start-->
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('fr.products.show', 'pompes-a-chaleur') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/pompe-a-chaleur.webp') }}"
                                    alt="Panneaux Solaires" /></div>
                            <figcaption>
                                <h4 class="title">Pompes à chaleur</h4>
                            </figcaption>
                        </a>
                    </figure>
                    <!-- item end-->
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <!-- item start-->
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('fr.products.show', 'dosage') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/dosage.webp') }}"
                                    alt="Panneaux Solaires" /></div>
                            <figcaption>
                                <h4 class="title">Dosage</h4>
                            </figcaption>
                        </a>
                    </figure>
                    <!-- item end-->
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <!-- item start-->
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('fr.products.show', 'panneux-solaires') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/solar-power.webp') }}"
                                    alt="Panneaux Solaires" /></div>
                            <figcaption>
                                <h4 class="title">Panneaux Solaires</h4>
                            </figcaption>
                        </a>
                    </figure>
                    <!-- item end-->
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <!-- item start-->
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('fr.products.show', 'robinetterie') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/tubes.webp') }}"
                                    alt="Panneaux Solaires" /></div>
                            <figcaption>
                                <h4 class="title">Robinetterie</h4>
                            </figcaption>
                        </a>
                    </figure>
                    <!-- item end-->
                </div>
            </div>
        </div>
    </section>
    {{-- Start gallery section --}}
    <div class="d-none d-md-block" style="margin-top:100px">
        @include('fr.components.categories_gallery')
    </div>
    {{-- End gallery section --}}
    <!-- we provide end-->
    <!-- brands-with-heading start-->
    @include('fr.components.brands', ['with_heading' => false])
    <!-- brands-with-heading end-->
@endsection
