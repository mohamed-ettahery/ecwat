@extends('fr.layouts.master')
@section('meta')
    <meta name="description"
        content="Contactez Ecwat pour toutes vos questions sur nos solutions éco-énergétiques. Notre équipe dévouée est là pour vous aider avec des produits de haute qualité et un service client exceptionnel. Contactez-nous dès aujourd'hui !">
@endsection
@section('title')
    Contactéz-nous | Ecwat
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
                            <h1 class="title">Nos coordonnées</h1>
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
                    <li class="breadcrumb-item active" aria-current="page">Contactéz-nous</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Commencer à nous contacter -->
    <section class="section get-in-touch">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form-wrapper" style="background-image: url({{ asset('assets/img/bg/world-map.webp') }});">
                        <!-- Début du formulaire de contact -->
                        <form class="form contact--form contacts-page-form" action="{{ route('fr.contact.send') }}"
                            method="POST" id="get-in-touch" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="title-block">
                                        <h3 class="title">Contactez-nous</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="input-label">
                                        <input class="form-field input input-name" id="input-name" type="text"
                                            name="name" required="required" /><span>Nom</span>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label class="input-label">
                                        <input class="form-field input input-text" id="input-text" type="text"
                                            name="subject" required="required" /><span>Sujet</span>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label class="input-label">
                                        <input class="form-field input input-tel" id="input-tel" type="tel"
                                            name="phone" required="required" /><span>Téléphone</span>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label class="input-label">
                                        <input class="form-field input input-mail" id="input-mail" type="email"
                                            name="email" required="required" /><span>Email</span>
                                    </label>
                                </div>
                                <div class="col-12">
                                    <label class="textarea-label">
                                        <textarea class="form-field textarea" id="textarea" name="message"></textarea><span>Commentaire</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="button-holder">
                                        <button class="button button--transparent" type="submit"
                                            data-hover="Envoyer"><span>Envoyer</span></button>
                                        <div class="form__note"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Fin du formulaire de contact -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la section de contact -->
    <!-- Début de la section de la carte -->
    <section class="section map-section no-padding-top no-padding-bottom">
        <!-- Début de la bannière des contacts -->
        <div class="contacts-banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-block">
                            <h2 class="title">. <span>Nos</span> Coordonnées</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="address-block inner-block">
                            <ul>
                                @foreach ($site_address as $address)
                                    <li>
                                        <p class="address">{{ $address }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="phones-block inner-block">
                            <ul>
                                @foreach ($site_phone as $phone)
                                    <p><a href="tel:{{ $phone }}"><i
                                                class="fa-sharp fa-thin fa-phone-volume mr-2"></i> {{ $phone }}</a>
                                    </p>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mail-block inner-block">
                            <ul>
                                @foreach ($site_mail as $mail)
                                    <p><a href="mailto:{{ $mail }}">{{ $mail }}</a></p>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-12">
                        <div class="button-holder"><a class="button button--filled" href="#"
                                data-hover="Voir Google Map"><span>Voir Google Map</span></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- Fin de la bannière des contacts -->
        {{-- <div class="map" id="map" data-api-key="AIzaSyD5ES8GFHrarPhIVpDhFDea6fPtga0Wy4Y"
            data-longitude="-9.141827" data-latitude="38.737749"
            data-marker="{{ asset('assets/img/placeholder.webp') }}"></div> --}}
        <div class="box-map-frame">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d52770087.369597726!2d-9.2243531!3d36.1706784!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1708512403682!5m2!1sfr!2sma"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!-- Fin de la section de la carte -->
@endsection
