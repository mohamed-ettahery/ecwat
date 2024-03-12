<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    @yield('meta')
    <meta name="keywords" content="Ecwat, solar energy, eco-energy solutions, solar panels, water treatment, sustainability, innovation">
    <meta name="author" content="Ecwat">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title', 'Ecwat - Global Leader in Eco-Energy Solutions')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    {{-- *********** --}}
    <link rel="stylesheet" href="{{ asset('assets/lib/fontawesome/css/all.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/lib/fontawesome/css/sharp-light.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/lib/fontawesome/css/sharp-solid.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/lib/fontawesome/css/sharp-regular.css') }}" />
    {{-- *********** --}}
    {{-- SweetAlert --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>
    <!-- styles-->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/unicons.css">
    @yield('css')
    <!-- web-font loader-->
    <script>
        WebFontConfig = {

            google: {

                families: ['Heebo:100,400,500,700,900'],

            }

        }

        function font() {

            var wf = document.createElement('script')

            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
            wf.type = 'text/javascript'
            wf.async = 'true'

            var s = document.getElementsByTagName('script')[0]

            s.parentNode.insertBefore(wf, s)

        }

        font()
    </script>
</head>

<body>
    <div class="page-wrapper">
        <!-- mobile-menu start-->
        <div class="mobile-nav">
            <div class="nav-inner">
                <div class="nav-item">
                    <!-- main menu start-->
                    <nav class="menu-holder">
                        <ul class="mobile-menu">
                            <li class="menu-item {{ Request::is('en') ? 'active' : '' }}"><a
                                    href="{{ route('en.home') }}"><span>Home</span></a></li>
                            <li class="menu-item {{ Request::is('en/products') ? 'active' : '' }}"><a
                                    href="{{ route('en.products') }}"><span>Products</span></a></li>
                            <li class="menu-item {{ Request::is('en/about') ? 'active' : '' }}"><a
                                    href="{{ route('en.about') }}"><span>About Us</span></a></li>
                            <li class="menu-item {{ Request::is('en/services') ? 'active' : '' }}"><a
                                    href="{{ route('en.services') }}"><span>Services</span></a></li>
                            <li class="menu-item {{ Request::is('en/contact') ? 'active' : '' }}"><a
                                    href="{{ route('en.contact') }}"><span>Contact</span></a></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
        <!-- mobile-menu end-->
        <!-- header-style-3 start-->
        <header class="header--style-3" id="header">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-12">
                        <!-- lower line start-->
                        <div class="lower-line">
                            <div class="contacts-block">
                                {{-- <div class="address-block">
                                    <p>{{ $site_address[0] }}</p>
                                </div> --}}
                                <div class="phones-block">
                                    @foreach ($site_phone as $phone)
                                        <a href="tel:{{ $phone }}">{{ $phone }}</a>
                                    @endforeach
                                </div>
                                <div class="mail-block">
                                    @foreach ($site_mail as $mail)
                                        <a href="mailto:{{ $mail }}" class="mr-3">{{ $mail }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="socials-block">
                                <!-- socials start-->
                                <nav class="socials-holder">
                                    <ul class="socials-primary">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- socials end -->
                            </div>
                        </div>
                        <!-- lower line end -->
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="top">
                            <!-- logo block start-->
                            <div class="logo-block">
                                <a class="logo" href="{{ route('en.home') }}">
                                    <img src="{{ asset('assets/img/general/logo.webp') }}" width="200"
                                        alt="LOGO ECWAT">
                                </a>
                            </div>
                            <!-- logo block end-->
                            <!-- menu block start-->
                            <div class="menu-block">
                                <!-- main menu start-->
                                <nav class="menu-holder">
                                    <ul class="main-menu">
                                        <li class="menu-item {{ Request::is('en') ? 'active' : '' }}"><a
                                                href="{{ route('en.home') }}"><span>Home</span></a></li>
                                        <li class="menu-item {{ Request::is('en/products') ? 'active' : '' }}">
                                            <a href="{{ route('en.products') }}"
                                                class="mega-toggler"><span>Products</span></a>
                                            <div class="mega-menu">
                                                <div class="container py-3">
                                                    <div class="row">
                                                        @foreach (App\Http\Controllers\admin\CategoryController::getMainCategories() as $category)
                                                            <div class="col-md-3">
                                                                <div class="category-item">
                                                                    <a
                                                                        href="{{ route('en.products.show', implode('/', (array) \App\Http\Controllers\ProductController::CategoryImbrication($category, [strtolower($category->en_name)], 'fr', true))) }}">
                                                                        <div class="box-img">
                                                                            <img style="width: 100%"
                                                                                src="{{ asset('uploads/categories/' . $category->image) }}"
                                                                                alt="{{ $category->en_name }}">
                                                                        </div>
                                                                        <div class="box-title">
                                                                            <h5 class="category-title">
                                                                                {{ $category->en_name }}</h5>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="menu-item {{ Request::is('en/about') ? 'active' : '' }}"><a
                                                href="{{ route('en.about') }}"><span>About Us</span></a></li>
                                        <li class="menu-item {{ Request::is('en/services') ? 'active' : '' }}"><a
                                                href="{{ route('en.services') }}"><span>Services</span></a></li>
                                        <li class="menu-item {{ Request::is('en/contact') ? 'active' : '' }}"><a
                                                href="{{ route('en.contact') }}"><span>Contact</span></a></li>
                                    </ul>
                                </nav>
                                <!-- main menu end-->
                            </div>
                            <!-- menu block end-->
                            <!-- lang block start-->
                            <div class="lang-block">
                                <ul class="lang-select align-items-center">
                                    <li class="search-item">
                                        <span><i class="fa-light fa-magnifying-glass fa-lg"></i></span>
                                    </li>
                                    <li class="lang-item active"><span>En</span>
                                        <ul class="sub-list">
                                            <li class="lang-item" data-lang="fr"><a
                                                    href="javascript:void(0)">Francais</a></li>
                                            <li class="lang-item" data-lang="en"><a
                                                    href="javascript:void(0)">English</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <a class="button button--transparent" href="{{ route('en.contact') }}"
                                    data-hover="Contact us"><span>Contact us</span></a>
                                <!-- menu-trigger start-->
                                <div class="hamburger">
                                    <div class="hamburger-box">
                                        <div class="hamburger-inner"></div>
                                    </div>
                                </div>
                                <!-- menu-trigger end-->
                            </div>
                            <!-- lang block end-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-style-3 end-->
        <main class="main">
            @yield('content')
        </main>
        <div class="search-modal">
            <div class="container position-relative w-100 h-100">
                <span class="close-btn">
                    <i class="fa-light fa-xmark"></i>
                </span>
                <div class="form-box">
                    <form class="search-form" action="{{ route('en.search') }}">
                        <div class="input-group">
                            <input type="search" placeholder="qu'est-ce que tu cherches ?" aria-label="Search"
                                name="term" value="{{ old('search', $term ?? '') }}" required>
                            <div class="input-group-append">
                                <button type="submit" class="submit-search-btn">
                                    <i class="fa-brands fa-searchengin"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- footer start-->
        <footer class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- logo start-->
                            <div class="footer-logo">
                                <a class="logo" href="{{ route('en.home') }}">
                                    <img src="{{ asset('assets/img/general/logo-white.webp') }}" width="200"
                                        alt="WHITE LOGO ECWAT">
                                </a>
                            </div>
                            <!-- logo end-->
                            <div class="footer-about">
                                <p>
                                    Ecwat offers sustainable energy solutions, from solar energy to water technologies,
                                    for a cleaner future. We are your trusted partner in renewable energy management...
                                </p>
                                <a href="{{ route('en.about') }}"><i class="fa-light fa-angles-right"></i> Read
                                    more</a>
                            </div>
                            <!-- footer contacts start-->
                            {{-- <div class="footer-contacts">
                                <p class="address">St 33, Parkville VIC 3052, <br /> Casablanca , Maroc</p>
                                <p class="phone-number">Phone: <a href="tel:{{ $site_phone }}">{{ $site_phone }}</a></p>
                                <p class="e-main">Email: <a href="mailto:{{ $site_mail }}">{{ $site_mail }}</a></p>
                            </div> --}}
                            <!-- footer contacts end-->
                        </div>
                        <div class="col-lg-4 offset-lg-0 col-md-7 offset-md-1">
                            <h4 class="title">Company and Links</h4>
                            <!-- Footer Navigation Start -->
                            <nav class="footer-nav">
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="footer-menu">
                                            @foreach (App\Http\Controllers\admin\CategoryController::getMainCategories() as $category)
                                                <li><a
                                                        href="{{ route('en.products.show', implode('/', (array) \App\Http\Controllers\ProductController::CategoryImbrication($category, [strtolower($category->en_name)], 'fr', true))) }}">{{ $category->en_name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="footer-menu">
                                            <li><a href="{{ route('en.home') }}">Home</a></li>
                                            <li><a href="{{ route('en.products') }}">Products</a></li>
                                            <li><a href="{{ route('en.about') }}">About Us</a></li>
                                            <li><a href="{{ route('en.services') }}">Services</a></li>
                                            <li><a href="{{ route('en.contact') }}">Contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- Footer Navigation End -->
                        </div>
                        <div class="col-md-4 d-lg-none">
                            <!-- socials start-->
                            <nav class="socials-holder socials-tablet">
                                <ul class="socials-primary">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </nav>
                            <!-- socials end -->
                        </div>
                        <div class="col-lg-4 offset-lg-0 col-md-7 offset-md-1">
                            <!-- footer subscribe start-->
                            <div class="footer-subscribe">
                                <h4 class="title">Subscribe</h4>
                                <form class="subscribe-form" action="{{ route('newsletter.store') }}"
                                    method="POST">
                                    @csrf
                                    <input class="input-mail" type="email" name="email"
                                        placeholder="Email address" required />
                                    <button class="button button--filled" type="submit"
                                        data-hover="Subscribe"><span>Subscribe</span></button>
                                </form>
                                <!-- socials start-->
                                <nav class="socials-holder socials-mobile d-md-none">
                                    <ul class="socials-primary">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-youtube-play"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- socials end -->
                            </div>
                            <!-- footer subscribe end-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-lower">
                            <div class="row align-items-baseline">
                                <div class="col-lg-4 col-md-6">
                                    <p class="copyright">© {{ date('Y') }} ECWAT</p>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <!-- privacy start-->
                                    <div class="privacy-block">
                                        <a href="{{ route('en.privacy') }}">Privacy Policy <span
                                                class="separator">|</span> </a>
                                        <a href="{{ route('en.terms_conditions') }}">Terms and Conditions</a>
                                    </div>
                                    <!-- privacy end-->
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <!-- socials start-->
                                    <nav class="socials-holder socials-desktop">
                                        <ul class="socials-primary">
                                            <li><a href="#"><i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube-play"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </nav>
                                    <!-- socials end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end-->
    </div>
    <!-- libs-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs.min.js') }}"></script>
    @yield('libs')
    <!-- scripts-->
    <script src="{{ asset('assets/js/common.min.js') }}"></script>
    @if (session()->has('success'))
        <script>
            Swal.fire({
                title: 'Succés',
                text: "{{ session()->get('success') }}",
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Ok'
            })
        </script>
    @endif
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- sprite-->
    @include('en.components.sprite')
</body>

</html>
