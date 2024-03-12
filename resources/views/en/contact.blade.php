@extends('en.layouts.master')
@section('meta')
    <meta name="description"
        content="Contact Ecwat for all your inquiries about our eco-energy solutions. Our dedicated team is here to assist you with high-quality products and exceptional customer service. Contact us today!">
@endsection

@section('title')
    Contact Us | Ecwat
@endsection
@section('content')
    <!-- Start of the primary promotion section -->
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
                            <h1 class="title">Our Contact Information</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of the primary promotion section -->

    <!-- Breadcrumb section -->
    <section class="breadcrumb-section">
        <div class="container p-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb--with-dot">
                    <li class="breadcrumb-item"><a href="{{ route('en.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End of the breadcrumb section -->

    <!-- Start of the get in touch section -->
    <section class="section get-in-touch">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form-wrapper" style="background-image: url({{ asset('assets/img/bg/world-map.webp') }});">
                        <!-- Start of the contact form -->
                        <form class="form contact--form contacts-page-form" action="{{ route('en.contact.send') }}"
                            method="POST" id="get-in-touch" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="title-block">
                                        <h3 class="title">Get in Touch</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="input-label">
                                        <input class="form-field input input-name" id="input-name" type="text"
                                            name="name" required="required" /><span>Name</span>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label class="input-label">
                                        <input class="form-field input input-text" id="input-text" type="text"
                                            name="subject" required="required" /><span>Subject</span>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label class="input-label">
                                        <input class="form-field input input-tel" id="input-tel" type="tel"
                                            name="phone" required="required" /><span>Phone</span>
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
                                        <textarea class="form-field textarea" id="textarea" name="message"></textarea><span>Message</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="button-holder">
                                        <button class="button button--transparent" type="submit"
                                            data-hover="Send"><span>Send</span></button>
                                        <div class="form__note"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- End of the contact form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of the get in touch section -->

    <!-- Start of the map section -->
    <section class="section map-section no-padding-top no-padding-bottom">
        <!-- Start of the contacts banner -->
        <div class="contacts-banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-block">
                            <h2 class="title">. <span>Our</span> Contact Information</h2>
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
            </div>
        </div>
        <!-- End of the contacts banner -->

        <!-- Embedded Google Map -->
        <div class="box-map-frame">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d52770087.369597726!2d-9.2243531!3d36.1706784!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1708512403682!5m2!1sfr!2sma"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- End of the embedded Google Map -->
    </section>
    <!-- End of the map section -->
@endsection
