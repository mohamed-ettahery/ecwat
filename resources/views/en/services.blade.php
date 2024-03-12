@extends('en.layouts.master')
@section('meta')
    <meta name="description"
        content="Discover Ecwat's services, a global leader in eco-energy solutions. We offer a comprehensive range of innovative products and services in the fields of solar energy and water technologies. From the design and distribution of solar panels to the provision of advanced water treatment systems, we are your trusted partner for efficient and environmentally-friendly energy solutions.">
@endsection
@section('title')
    Our Services | Ecwat
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
                            <h1 class="title">Our Services</h1>
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
                    <li class="breadcrumb-item"><a href="{{ route('en.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Services</li>
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
                                <h3 class="title">Our Services</h3>
                                <p class="subtitle d-none d-md-block">Welcome to Ecwat <br />Your solar and water partner.
                                </p>
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
                        <h3><strong>ECWAT is Your partner in solar energy and water treatment.</strong></h3>
                        <p>
                            Our <strong>commitment</strong> is to provide sustainable energy solutions. Explore our
                            innovative
                            and environmentally friendly services designed to address current energy challenges and shape a
                            greener
                            future.
                        </p>
                        <p>
                            At Ecwat, we specialize in renewable energy management, offering a complete range of solutions
                            from solar panels to water treatment systems. Whether it's for <strong>horizontal</strong>,
                            <strong>vertical</strong>, or <strong>submersible pumps</strong>, <strong>heat pumps</strong>,
                            <strong>dosage products</strong> or <strong>valves</strong>, we are your trusted partner for
                            efficient
                            and environmentally friendly energy solutions.
                        </p>
                        <p>
                            Whether you are an individual, a business, or a community, we are here to accompany you in your
                            transition to cleaner and more sustainable energy. With our <strong>commitment to
                                innovation</strong> and
                            <strong>quality</strong>, you can rely on Ecwat for top-notch services that meet your energy
                            needs with
                            excellence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services inner end-->
    {{-- Start our quality --}}
    @include('en.components.our_quality')
    {{-- End our quality --}}
    <!-- products-style-3 start-->
    <!-- we provide start-->
    <section class="section we-provide no-padding-top no-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading primary-heading">
                        <h3 class="title">Categories</h3>
                        <h5 class="subtitle"><span>We offer a comprehensive range of technologies for energy and
                                water</span></h5>
                        <p>Our ECWAT services aim to provide innovative eco-energy solutions, including in the fields of
                            solar,
                            hydraulic, wind, biomass, and much more. Our dedicated team works tirelessly to meet your needs
                            by
                            offering you high-quality products and services for a sustainable future.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row offset-margin">
                <div class="col-lg-3 col-sm-4 col-6">
                    <!-- item start-->
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('en.products.show', 'solar-panels') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/solar-power.webp') }}"
                                    alt="Solar Panels" /></div>
                            <figcaption>
                                <h4 class="title">Solar Panels</h4>
                            </figcaption>
                        </a>
                    </figure>
                    <!-- item end-->
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <!-- item start-->
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('en.products.show', 'solar-inverters') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/variateur.webp') }}"
                                    alt="Solar Inverters" /></div>
                            <figcaption>
                                <h4 class="title">Solar Inverters</h4>
                            </figcaption>
                        </a>
                    </figure>
                    <!-- item end-->
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <!-- item start-->
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('en.products.show', 'solar-systems') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/solar-power-system.webp') }}"
                                    alt="Solar Systems" /></div>
                            <figcaption>
                                <h4 class="title">Solar Systems</h4>
                            </figcaption>
                        </a>
                    </figure>
                    <!-- item end-->
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <!-- item start-->
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('en.products.show', 'pumps') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/pompe-a-eau.webp') }}"
                                    alt="Pumps" /></div>
                            <figcaption>
                                <h4 class="title">Pumps</h4>
                            </figcaption>
                        </a>
                    </figure>
                    <!-- item end-->
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <!-- item start-->
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('en.products.show', 'heat-pumps') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/pompe-a-chaleur.webp') }}"
                                    alt="Heat Pumps" /></div>
                            <figcaption>
                                <h4 class="title">Heat Pumps</h4>
                            </figcaption>
                        </a>
                    </figure>
                    <!-- item end-->
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <!-- item start-->
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('en.products.show', 'dosage') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/dosage.webp') }}"
                                    alt="Dosage" /></div>
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
                        <a href="{{ route('en.products.show', 'solar-panels') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/solar-power.webp') }}"
                                    alt="Solar Panels" /></div>
                            <figcaption>
                                <h4 class="title">Solar Panels</h4>
                            </figcaption>
                        </a>
                    </figure>
                    <!-- item end-->
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <!-- item start-->
                    <figure class="icon-item icon-item--primary">
                        <a href="{{ route('en.products.show', 'plumbing-fittings') }}" class="no_anchor_style">
                            <div class="img-holder"><img src="{{ asset('assets/img/icons/tubes.webp') }}"
                                    alt="Plumbing Fittings" /></div>
                            <figcaption>
                                <h4 class="title">Plumbing Fittings</h4>
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
        @include('en.components.categories_gallery')
    </div>
    {{-- End gallery section --}}
    <!-- we provide end-->
    <!-- brands-with-heading start-->
    @include('en.components.brands', ['with_heading' => false])
    <!-- brands-with-heading end-->
@endsection
