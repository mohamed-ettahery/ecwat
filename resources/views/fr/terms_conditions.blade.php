@extends('fr.layouts.master')
@section('meta')
    <meta name="description"
        content="Consultez les termes et conditions d'utilisation d'Ecwat pour comprendre les règles et les obligations qui régissent votre utilisation de notre site Web et de nos services. Nos termes et conditions détaillent les droits et responsabilités des utilisateurs, les limitations de responsabilité, la propriété intellectuelle, les liens vers des tiers et les modifications éventuelles des termes. En utilisant notre site Web et nos services, vous acceptez ces termes et conditions.">
@endsection
@section('title')
    Termes et Conditions | Ecwat
@endsection
@section('content')
    <!-- Début de la promotion principale -->
    <section class="promo-primary">
        <div class="overlay"></div>
        <picture>
            <source srcset="{{ asset('assets/img/bg/contacts.webp') }}" media="(min-width: 992px)" /><img
                class="jarallax-img img-bg" src="{{ asset('assets/img/bg/contacts.webp') }}" alt="img" />
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="align-container">
                        <div class="align-item"><span>Ecwat</span>
                            <h1 class="title">Termes et conditions</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la promotion principale -->
    <section class="breadcrumb-section">
        <div class="container p-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb--with-dot">
                    <li class="breadcrumb-item"><a href="{{ route('fr.home') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Termes et conditions</li>
                </ol>
            </nav>
        </div>
    </section>
    {{-- Start Content --}}
    <section class="terms-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title">Termes et conditions</h1>
                    <div class="terms-content">
                        <p>
                            En utilisant notre site Web et nos services, vous acceptez les termes et conditions suivants :
                        </p>
                        <ul class="terms-list">
                            <li>
                                <strong>Utilisation du site :</strong> Vous acceptez d'utiliser notre site Web uniquement à
                                des fins légales et conformément à ces termes et conditions.
                            </li>
                            <li>
                                <strong>Propriété intellectuelle :</strong> Tout le contenu présent sur notre site, y
                                compris mais sans s'y limiter, le texte, les images, les logos et les vidéos, est protégé
                                par des droits d'auteur et d'autres lois sur la propriété intellectuelle.
                            </li>
                            <li>
                                <strong>Responsabilité :</strong> Nous nous efforçons de fournir des informations précises
                                et à jour, mais nous ne pouvons garantir l'exactitude, l'exhaustivité ou la fiabilité de
                                tout contenu sur notre site.
                            </li>
                            <li>
                                <strong>Liens vers des tiers :</strong> Notre site peut contenir des liens vers des sites
                                Web de tiers. Nous ne sommes pas responsables du contenu ou de la politique de
                                confidentialité de ces sites.
                            </li>
                            <li>
                                <strong>Modification des termes :</strong> Nous nous réservons le droit de modifier ces
                                termes et conditions à tout moment. Les modifications seront effectives dès leur publication
                                sur le site.
                            </li>
                        </ul>
                        <p>
                            En continuant à utiliser notre site Web, vous acceptez ces termes et conditions. Si vous
                            n'acceptez pas ces termes, veuillez ne pas utiliser notre site.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- End Content --}}
@endsection
