@extends('en.layouts.master')
@section('meta')
    <meta name="description"
        content="Check out Ecwat's privacy policy to understand how we collect, use, and protect your personal data. We are committed to respecting your privacy and safeguarding your information in accordance with applicable laws. Our privacy policy outlines our practices regarding data collection, use, and protection, as well as your privacy rights.">
@endsection
@section('title')
    Privacy Policy | Ecwat
@endsection
@section('content')
    <!-- Main Promo Start -->
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
                            <h1 class="title">Privacy Policy</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Promo End -->
    <section class="breadcrumb-section">
        <div class="container p-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb--with-dot">
                    <li class="breadcrumb-item"><a href="{{ route('en.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                </ol>
            </nav>
        </div>
    </section>
    {{-- Start Content --}}
    <section class="privacy-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title">Privacy Policy</h1>
                    <div class="privacy-content">
                        <p>
                            Our privacy policy aims to inform you about how we collect, use, and protect your personal
                            information when you use our services. We are committed to safeguarding the privacy of your data
                            and using it only for the intended purposes and with your consent.
                        </p>
                        <p>
                            <strong>Information Collection:</strong> We collect personal information such as your name,
                            email address, and contact details only when you voluntarily provide them, for example when you
                            sign up for our newsletter or use our services.
                        </p>
                        <p>
                            <strong>Use of Information:</strong> The information we collect is used to provide you with our
                            services, respond to your inquiries, improve our website, and send you marketing communications
                            if
                            you have consented to it.
                        </p>
                        <p>
                            <strong>Data Protection:</strong> We implement security measures to protect your information
                            against unauthorized access, use, or disclosure.
                        </p>
                        <p>
                            <strong>Information Sharing:</strong> We do not share your personal information with third
                            parties without your consent, unless it is necessary to provide our services or if we are
                            legally
                            obligated to do so.
                        </p>
                        <p>
                            <strong>Your Rights:</strong> You have the right to access, modify, or delete your personal
                            information. To exercise these rights or for any questions regarding our privacy policy, please
                            contact us.
                        </p>
                        <p>
                            By using our services, you agree to our privacy policy and consent to the collection and use of
                            your personal information as described herein.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Content --}}
@endsection
