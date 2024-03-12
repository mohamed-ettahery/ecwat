<section class="relevant my-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="relevant-holder">
                    <!-- relevant item start-->
                    <div class="relevant-item"
                        style="background-image: url('{{ asset('assets/img/banners/relevant-bg.webp') }}');">
                        <div class="text-holder"><span class="ribbon event">Haute de gamme</span>
                            <h2 class="title">Panneaux monocristallin</h2>
                            <div class="inner-text">
                                <p>Technologie la plus répandue actuellement</p>
                            </div><a class="button button--filled"
                                href="{{ route('fr.products.show', 'panneaux-solaires/monocristallin') }}"
                                data-hover="Découvrir maintenant!"><span>Découvrir maintenant!</span></a>
                        </div>
                        <div class="img-holder"><img src="{{ asset('assets/img/banners/relevant-img-1.webp') }}"
                                alt="img" /></div>
                    </div>
                    <!-- relevant item end-->
                    <!-- relevant item start-->
                    <div class="relevant-item">
                        <div class="text-holder"><span class="ribbon custom-badge">550W MONOCRISTALLIN
                                PHOTOVOLTAÏQUES</span>
                            <h2 class="title">Panneaux solaire 550W</h2>
                            <div class="inner-text">
                                <p>Achetez votre avenir maintenant !</p>
                            </div>
                            <a class="button button--filled"
                                href="{{ route('fr.products.details', ['monocristallin', '550w-monocristallin-photovoltaiques']) }}"
                                data-hover="Détail"><span>Détail</span></a>
                        </div>
                        <img src="{{ asset('assets/img/banners/relevant-img-2.webp') }}" alt="img" />
                    </div>
                    <!-- relevant item end-->
                </div>
            </div>
        </div>
    </div>
</section>
