@extends('fr.layouts.master')
@section('meta')
    <meta name="description"
        content="Consultez la politique de confidentialité d'Ecwat pour comprendre comment nous collectons, utilisons et protégeons vos données personnelles. Nous nous engageons à respecter votre vie privée et à protéger vos informations conformément aux lois en vigueur. Notre politique de confidentialité détaille nos pratiques en matière de collecte, d'utilisation et de protection des données, ainsi que vos droits en matière de confidentialité.">
@endsection
@section('title')
    Politique de Confidentialité | Ecwat
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
                            <h1 class="title">Politique de Confidentialité </h1>
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
                    <li class="breadcrumb-item active" aria-current="page">Politique de Confidentialité </li>
                </ol>
            </nav>
        </div>
    </section>
    {{-- Start Content --}}
    <section class="privacy-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title">Politique de Confidentialité</h1>
                    <div class="privacy-content">
                        <p>
                            Notre politique de confidentialité vise à vous informer sur la manière dont nous recueillons,
                            utilisons et protégeons vos informations personnelles lorsque vous utilisez nos services. Nous
                            nous engageons à protéger la confidentialité de vos données et à les utiliser uniquement dans le
                            cadre prévu et avec votre consentement.
                        </p>
                        <p>
                            <strong>Collecte d'informations :</strong> Nous collectons des informations personnelles telles
                            que votre nom, votre adresse e-mail et vos coordonnées uniquement lorsque vous nous les
                            fournissez volontairement, par exemple lorsque vous vous inscrivez à notre newsletter ou
                            utilisez nos services.
                        </p>
                        <p>
                            <strong>Utilisation des informations :</strong> Les informations que nous recueillons sont
                            utilisées pour vous fournir nos services, répondre à vos demandes, améliorer notre site Web et
                            vous envoyer des communications marketing si vous y avez consenti.
                        </p>
                        <p>
                            <strong>Protection des données :</strong> Nous mettons en œuvre des mesures de sécurité pour
                            protéger vos informations contre tout accès, utilisation ou divulgation non autorisés.
                        </p>
                        <p>
                            <strong>Partage d'informations :</strong> Nous ne partageons pas vos informations personnelles
                            avec des tiers sans votre consentement, sauf si cela est nécessaire pour fournir nos services ou
                            si nous y sommes légalement tenus.
                        </p>
                        <p>
                            <strong>Vos droits :</strong> Vous avez le droit d'accéder, de modifier ou de supprimer vos
                            informations personnelles. Pour exercer ces droits ou pour toute question concernant notre
                            politique de confidentialité, veuillez nous contacter.
                        </p>
                        <p>
                            En utilisant nos services, vous acceptez notre politique de confidentialité et consentez à la
                            collecte et à l'utilisation de vos informations personnelles telles que décrites ici.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Content --}}
@endsection
