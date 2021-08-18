@include('lander.purplerelax.components.head1')
<style>
    .section-2 {
        background: url({{ asset('/') }}purplerelaxFiles/ortopedskijastuk/jastukBaner_mb.png) top center/cover no-repeat;
        padding: 90% 0 100%
    }
    @media (min-width:768px) {
        .section-2 {
            padding: 30px 0;
            background: url({{ asset('/') }}purplerelaxFiles/ortopedskijastuk/jastukBaner_dt.png) top center/cover no-repeat
        }
    }
    .section-8 {
        padding: 15px 0;
        background: url({{ asset('/') }}purplerelaxFiles/ortopedskijastuk/jastuk3_mb.png) center center/cover no-repeat
    }
    @media (min-width:768px) {
        .section-8 {
            padding: 50px 0;
            background-image: url({{ asset('/') }}purplerelaxFiles/ortopedskijastuk/jastuk3_dt.png);
            background-position-x: 35%
        }
    }
    .section-10 {
        padding: 30px 0;
        background: url({{ asset('/') }}purplerelaxFiles/ortopedskijastuk/jastuk4_mb.png) center center/cover no-repeat
    }
    @media (min-width:768px) {
        .section-10 {
            padding: 50px 0;
            background-image: url({{ asset('/') }}purplerelaxFiles/ortopedskijastuk/jastuk4_dt.png);
            background-position-x: 35%
        }
    }
    .section-12 {
        background: url({{ asset('/') }}purplerelaxFiles/ortopedskijastuk/jastuk5_mb.png) center bottom/cover no-repeat;
        padding: 35px 0 170vw
    }
    @media (min-width:768px) {
        .section-12 {
            padding: 40px 0;
            background: url({{ asset('/') }}purplerelaxFiles/ortopedskijastuk/jastuk5_dt.png) right center/cover no-repeat;
            background-position-x: 47%
        }
    }
</style>
<main>
    <section class="section-1">
        <div class="container">
            <div class="editor top-header">
                <div class="grid-layout ">
                    <div class="wrap-inner layt-50-50">
                        <div class="columns col-left">
                            <div class="wrap-col">
                                <p><img src="{{ asset('/') }}purplerelaxFiles/shared_files/logo.png" alt="logo"></p>
                                <p>Jastuk koji će Vam pomoći da oblikujete željenu figuru!</p>
                            </div>
                        </div>
                        <div class="columns col-right">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->

    <section class="section-2">
        <div class="container">
            <div class="wysiwyg-content product-banner top-banner ">
                <h2><span style="color: #015bd3;">ODMORNO TIJELO I SAN KAKAV STE ODUVEK ŽELJELI</span></h2>
                <p><span style="color: #4ba7ff;"><strong>Uživajte u komforu i budite se odmorni <br>– Kupite odmah i znatno uštedite!</strong></span></p>
                <ul>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon.png" alt="tick-icon-01">Oslobađa bola</li>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon.png" alt="tick-icon-01">Ispravlja kičmu</li>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon.png" alt="tick-icon-01">Unikatan dizajn</li>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon.png" alt="tick-icon-01">Nježna memorijska pena</li>
                </ul>
                <p><span style="color: #4ba7ff;"><strong>Ostvarićete specijalni popust od <span style="color: #e02020;">40%</span> <br>ukoliko poručite odmah!</strong></span></p>
                <p class="btn-order"><a class="btn-primary shop-link" href="{{$checkoutView}}"><span>PORUČITE SVOJ JASTUK</span></a></p>
                <ol>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/guarantee.png" alt="guarantee"></li>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/5-stars.png" alt="stars">100% garancija zadovoljstva</li>
                </ol>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-3">
        <div class="container">
            <div class="wysiwyg-content line-divider ">
                <p><strong>Trajanje specijalnog popusta od <span style="color: #feee00;">40% </span> je ograničeno. Uskoro vraćamo regularnu cijenu!</strong></p>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-4">
        <div class="container">
            <div class="guaranteed ">
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon5.png" alt="icon1" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h4>GARANTOVANO <br>VISOK KVALITET</h4>
                                    <p>Napravljen od najboljih materijala za maksimalnu izdržjivost i dugovječnost</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon6.png" alt="icon2" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h4>JEDNOSTAVAN POVRAT</h4>
                                    <p>Ukoliko niste zadovoljni našim ortopedskim jastukom, vratićemo vam novac bez suvišnih pitanja</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon7.png" alt="icon3" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h4>LAGAN I PRAKTIČAN</h4>
                                    <p>Možete ga nositi sa sobom, prozračan je i jednostavan za održavanje</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-5">
        <div class="container">
            <div class="wysiwyg-content middle-banner ">
                <p>
                    <img src="{{ asset('/') }}purplerelaxFiles/ortopedskijastuk/jastuk1_dt.png" alt="thumb1">
                    <img src="{{ asset('/') }}purplerelaxFiles/ortopedskijastuk/jastuk1_mb.png" alt="thumb1">
                </p>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-6">
        <div class="container">
            <div class="editor functional">
                <div class="grid-layout has-width reverse">
                    <div class="wrap-inner layt-50-50">
                        <div class="columns col-left">
                            <div class="wrap-col">
                                <h2>ZAPOČNITE SVAKI DAN PUNI ENERGIJE I SA ELANOM</h2>
                                <p>Ortopedski jastuk za noge je savšen u otklanjanju bolova u leđima i vratu koji se javljaju usljed dugog sjedenja i fizičke neaktivnosti.
                                    Anatomski dizajn se prilagođava svakom tijelu, garantuje visok nivo komfora, i rješava vas bolova već posle par korišćenja.</p>
                                <p>Poboljšava kvalitet sna, držanje, kao i sveukupno stanje organizma. Jastuk pomaže u otklanjanju bola, popravlja san,
                                    ispravlja držanje i sve to na lak i prirodan način.</p>
                               </div>
                        </div>
                        <div class="columns col-right">
                            <div class="wrap-col">
                                <p><img src="{{ asset('/') }}purplerelaxFiles/ortopedskijastuk/jastuk_gif1.gif" alt="img-1"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-layout has-width">
                    <div class="wrap-inner layt-50-50">
                        <div class="columns col-left">
                            <div class="wrap-col">
                                <h2>ERGONOSMKI DIZAJN ZA PRAVILAN POLOŽAJ TIJELA</h2>
                                <p>Kada spavate bočno, ne spavate savršeno ravno. Gornja noga vam se spušta i vrši pritisak na leđa, zglobovi koljena se dodiruju,
                                    uzrokujući bol. Ortopedski jastuk najbolji je jastuk za noge za one koji traže olakšanje, jer udobno podupire noge i koljena kako bi
                                    se osiguralo pravilno držanje, položaj spavanja i kako bi se uklonile bolne tačke pritiska.</p>
                            </div>
                        </div>
                        <div class="columns col-right">
                            <div class="wrap-col">
                                <p><img src="{{ asset('/') }}purplerelaxFiles/ortopedskijastuk/jastuk_gif2.gif" alt="img-2"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-7">
        <div class="container">
            <div class="guides ">
                <h2 class="w_main_title"><span class="text">Kako doći do ortopedskog jastuka?</span></h2>
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item ">
                            <h3 class="w_toptext">01</h3>
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/step-1.jpg" alt="step1" class="img-view">
                            </div>
                            <div class="w_desc">
                                <p>Poručite sa našeg zvaničnog sajta jer samo tu možete pronaći originalni jastuk.
                                    Sve ostalo su jeftine kopije koje ne želite u svom domu.</p>
                            </div>
                        </div>
                        <div class="w_item ">
                            <h3 class="w_toptext">02</h3>
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/step-2.jpg" alt="step2" class="img-view">
                            </div>
                            <div class="w_desc">
                                <p>Kada poručite obavijestićemo vas da smo poslali na vašu adresu. Za 1 do 2 radna dana jastuk će biti u vašem domu.</p>
                            </div>
                        </div>
                        <div class="w_item ">
                            <h3 class="w_toptext">03</h3>
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/ortopedskijastuk/jastuk2_dt.png" alt="step3" class="img-view">
                            </div>
                            <div class="w_desc">
                                <p>Uživajte u udobnosti i lijepom snu, sigurni da spavate u pravilnom i zdravom položaju. Sigurni smo da ćete biti oduševljeni svojim jastukom!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-8">
        <div class="container">
            <div class="wysiwyg-content best-reviews shop-link ">
                <h2><span style="color: #005bd4;">ŠTA NAŠI KUPCI KAŽU O</span><br><span style="color: #005bd4;">ORTOPEDSKOM JASTUKU</span></h2>
                <h3>Kupite ovaj jastuk ukoliko želite lijepo da spavate</h3>
                <p>Spavam kao beba, svaka čast izumitelju. Kupila sam 2 komada i za sestru koja je takođe prezadovoljna.
                    Takođe sve pohvale za djevojke iz korisničke podrške.</p>
                <p><strong><span>Indira T. - Tuzla</span></strong></p>
                <p class="btn-order"><a class="shop-link" href="{{$checkoutView}}"><span>PORUČITE SVOJ JASTUK</span></a></p>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-9">
        <div class="container">
            <div class="rating-block ">
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item item-1">
                            <h4 class="w_title">4.6</h4>
                            <div class="w_desc">
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-half-empty"></i></p>
                                <p>Prosečna ocena</p>
                            </div>
                        </div>
                        <div class="w_item item-2">
                            <div class="w_desc">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 89%;"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 0%;"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 11%;"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 0%;"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 0%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="w_item item-3">
                            <div class="w_desc">
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i>89%</p>
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i>0%</p>
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i>11%</p>
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i>0%</p>
                                <p><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i>0%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-block ">
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item ">
                            <h3 class="w_toptext"><strong>Goran T.</strong> - Teslić</h3>
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/5-stars.png" alt="5stars" class="img-view">
                            </div>
                            <div class="w_desc">
                                <p>Supruga i ja smo kupili ćerkama, mirno spavaju i pritom uživaju, sve pohvale!</p>
                            </div>
                        </div>
                        <div class="w_item ">
                            <h3 class="w_toptext"><strong>Tijana R.</strong> – Trebinje</h3>
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/5-stars.png" alt="5stars" class="img-view">
                            </div>
                            <div class="w_desc">
                                <p>Mirniji san nego ikada, obično sam imala problema da se namjestim a i kada zaspim često sam se budila.
                                    Sada nema tih problema uopste, preeezadovoljna.</p>
                            </div>
                        </div>
                        <div class="w_item ">
                            <h3 class="w_toptext"><strong>Jovana G.</strong> – Beograd</h3>
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/5-stars.png" alt="5stars" class="img-view">
                            </div>
                            <div class="w_desc">
                                <p>Još kao mala imala sam problem sa leđima i od tada povremeno imam bolove usljed nepravilnog držanja.
                                    Na nagovor majke kupila sam ortopedski jastuk i od kako ga koristim znatno manje problema imam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-10">
        <div class="container">
            <div class="wysiwyg-content special-offer ">
                <h2>SPECIJALNA PONUDA SAMO DANAS</h2>
                <h3><span style="color: #00aeef;">Poručite odmah i iskoristite 40% popusta</span></h3>
                <p class="offer_text">Ne dozvolite da neudobnost pokvari vaš san i vrijeme kada opuštate svoje tijelo.
                    Zdravlje je dragocjeno i morate misliti na sebe.
                    Količine su ograničene, zato poručite još danas!</p>
                <p class="btn-order"><a class="shop-link" href="{{$checkoutView}}"><span>PORUČITE SVOJ JASTUK</span></a></div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-11">
        <div class="container">
            <div class="wysiwyg-content line-divider ">
                <p><strong>Trajanje specijalnog popusta od <span style="color: #feee00;">40% </span> je ograničeno. Uskoro vraćamo regularnu cijenu!</strong></p>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-12">
        <div class="container">
            <div class="wysiwyg-content product-banner top-banner ">
                <h2><span style="color: #015bd3;">ODMORNO TIJELO I SAN KAKAV STE ODUVEK ŽELJELI</span></h2>
                <p><span style="color: #4ba7ff;"><strong>Uživajte u komforu i budite se odmorni <br>– Kupite odmah i znatno uštedite!</strong></span></p>
                <ul>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon.png" alt="tick-icon-01">Oslobađa bola</li>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon.png" alt="tick-icon-01">Ispravlja kičmu</li>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon.png" alt="tick-icon-01">Unikatan dizajn</li>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/icon.png" alt="tick-icon-01">Nježna memorijska pena</li>
                </ul>
                <p><span style="color: #4ba7ff;"><strong>Ostvarićete specijalni popust od <span style="color: #e02020;">40%</span> <br>ukoliko poručite odmah!</strong></span></p>
                <p class="btn-order"><a class="btn-primary shop-link" href="{{$checkoutView}}"><span>PORUČITE SVOJ JASTUK</span></a></p>
                <ol>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/guarantee.png" alt="guarantee"></li>
                    <li><img src="{{ asset('/') }}purplerelaxFiles/shared_files/5-stars.png" alt="stars">100% garancija zadovoljstva</li>
                </ol>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
@include('lander.purplerelax.components.footer1')