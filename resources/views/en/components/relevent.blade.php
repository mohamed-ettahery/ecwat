<section class="relevant my-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="relevant-holder">
                    <!-- relevant item start-->
                    <div class="relevant-item"
                        style="background-image: url('{{ asset('assets/img/banners/relevant-bg.webp') }}');">
                        <div class="text-holder"><span class="ribbon event">High-end</span>
                            <h2 class="title">Monocrystalline Panels</h2>
                            <div class="inner-text">
                                <p>Currently the most widespread technology</p>
                            </div><a class="button button--filled"
                                href="{{ route('en.products.show', 'solar-panels/monocrystalline') }}"
                                data-hover="Discover Now!"><span>Discover Now!</span></a>
                        </div>
                        <div class="img-holder"><img src="{{ asset('assets/img/banners/relevant-img-1.webp') }}"
                                alt="img" /></div>
                    </div>
                    <!-- relevant item end-->
                    <!-- relevant item start-->
                    <div class="relevant-item">
                        <div class="text-holder"><span class="ribbon custom-badge">550W Monocrystalline
                                Photovoltaics</span>
                            <h2 class="title">550W Solar Panels</h2>
                            <div class="inner-text">
                                <p>Buy your future now!</p>
                            </div>
                            <a class="button button--filled"
                                href="{{ route('en.products.details', ['monocrystalline', '550w-monocrystalline-photovoltaics']) }}"
                                data-hover="Detail"><span>Detail</span></a>
                        </div>
                        <img src="{{ asset('assets/img/banners/relevant-img-2.webp') }}" alt="img" />
                    </div>
                    <!-- relevant item end-->
                </div>
            </div>
        </div>
    </div>
</section>
