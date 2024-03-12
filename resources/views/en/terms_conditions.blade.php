@extends('en.layouts.master')
@section('meta')
    <meta name="description"
        content="Check out Ecwat's terms and conditions to understand the rules and obligations governing your use of our website and services. Our terms and conditions detail user rights and responsibilities, limitations of liability, intellectual property, links to third parties, and potential changes to the terms. By using our website and services, you agree to these terms and conditions.">
@endsection
@section('title')
    Terms and Conditions | Ecwat
@endsection
@section('content')
    <!-- Start of main promotion -->
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
                            <h1 class="title">Terms and Conditions</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of main promotion -->
    <section class="breadcrumb-section">
        <div class="container p-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb--with-dot">
                    <li class="breadcrumb-item"><a href="{{ route('en.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Terms and Conditions</li>
                </ol>
            </nav>
        </div>
    </section>
    {{-- Start Content --}}
    <section class="terms-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title">Terms and Conditions</h1>
                    <div class="terms-content">
                        <p>
                            By using our website and services, you agree to the following terms and conditions:
                        </p>
                        <ul class="terms-list">
                            <li>
                                <strong>Website Use:</strong> You agree to use our website only for lawful purposes and
                                in accordance with these terms and conditions.
                            </li>
                            <li>
                                <strong>Intellectual Property:</strong> All content on our site, including but not
                                limited to text, images, logos, and videos, is protected by copyright and other
                                intellectual property laws.
                            </li>
                            <li>
                                <strong>Liability:</strong> We strive to provide accurate and up-to-date information,
                                but we cannot guarantee the accuracy, completeness, or reliability of any content on
                                our site.
                            </li>
                            <li>
                                <strong>Third-Party Links:</strong> Our site may contain links to third-party websites.
                                We are not responsible for the content or privacy policies of these sites.
                            </li>
                            <li>
                                <strong>Changes to Terms:</strong> We reserve the right to modify these terms and
                                conditions at any time. Changes will be effective upon posting on the site.
                            </li>
                        </ul>
                        <p>
                            By continuing to use our website, you agree to these terms and conditions. If you do not
                            agree to these terms, please do not use our site.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- End Content --}}
@endsection
