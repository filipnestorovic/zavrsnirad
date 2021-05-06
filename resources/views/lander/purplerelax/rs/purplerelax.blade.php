@include('lander.purplerelax.components.head')
<style>
    @media (min-width:768px) {
        .section-1 {
            background: url({{ asset('/') }}purplerelaxFiles/pulsirajucimasazer/pulsirajucimasazer_banner_dt.jpg) bottom right 47%/cover no-repeat
        }
    }
    @media (max-width:767px) {
        .common-block .item-1 {
            margin: 0 -15px 20px;
            padding: 30px 15px 80%;
            text-align: center;
            background: url({{ asset('/') }}purplerelaxFiles/pulsirajucimasazer/pulsirajucimasazer_foot_mb.jpg) bottom center/cover no-repeat
        }
        .block-1 .item-1 {
            margin: 0 -15px 20px;
            padding: 30px 15px 80%;
            text-align: center;
            background: url({{ asset('/') }}purplerelaxFiles/pulsirajucimasazer/pulsirajucimasazer_banner_mb.jpg) bottom center/100% no-repeat
        }
    }
    @media (min-width:768px) {
        .section-9 {
            background: url({{ asset('/') }}purplerelaxFiles/pulsirajucimasazer/pulsirajucimasazer_foot_dt.jpg) center right 47%/cover no-repeat
        }
    }
    @media (max-width:767px) {
        .foot-block .item-1 {
            background: url({{ asset('/') }}purplerelaxFiles/pulsirajucimasazer/pulsirajucimasazer_foot_mb.jpg) bottom center/cover no-repeat
        }
    }
</style>
<main>
    <section class="section-1">
        <div class="container">
            <div class="block-1 common-block ">
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item item-1">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h1>Najbolji i najbrži način da eliminišete bol u vratu!</h1>
                                    <h3>Totalno opuštanje u samo <strong>10 minuta</strong></h3>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <ul>
                                        <li>Kombinacijom modernih tehnologija ovaj masažer simulira ljudsku masažu!</li>
                                        <li>Nakon samo nekoliko minuta korišćenja bol, ukočenost i pritisak u vratu počeće da nestaju.</li>
                                        <li>Akupunktura, opuštajuća masaža, tapkanje, kuckanje, dubinska masaža – izbor je na Vama!</li>
                                        <li>Možete ga koristiti u kolima, u kancelariji ili na bilo kom drugom mestu!</li>
                                    </ul>
                                    <h5>Iskoristi popust od <span style="color: #0093ea;"><strong>40%</strong></span> još danas!</h5>
                                    <p><a class="btn" href="{{$checkoutView}}">PORUČI SVOJ MASAŽER</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item satisfaction ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/satisfaction.png" alt="satisfaction" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <p><img src="{{ asset('/') }}purplerelaxFiles/shared_files/star5.png" alt="star5"></p>
                                    <p>100% garantovano zadovoljstvo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->

    <section class="section-2">
        <div class="container">
            <div class="wysiwyg-content pro-txt ">
                <p style="text-align: center;">Količine su ograničene <br>40% popusta može trajati još samo malo</p>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-3">
        <div class="container">
            <div class="block-2 ">
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/pulsirajucimasazer/pulsirajucimasazer1.png" alt="product1" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h2>NAJNAPREDNIJI MASAŽER IKADA NAPRAVLJEN</h2>
                                    <p>Masažer koristi kombinaciju vrhunskih masažnih tehnologija za dubinsko stimulisanje mišića i
                                        na taj način ih opušta, a Vas oslobađa bola i napetosti za samo <strong>10 minuta</strong>.
                                    </p>
                                    <ul>
                                        <li>
                                            <strong>
                                                <img style="display: block;" src="{{ asset('/') }}purplerelaxFiles/shared_files/icon1.png" alt="icon1">
                                                MODERAN DIZAJN
                                            </strong>
                                            Zahvaljujući dizajnu u obliku slova “U” ovaj masažer će savršeno prionuti uz vaš vrat.
                                        </li>
                                        <li>
                                            <strong>
                                                <img style="display: block;" src="{{ asset('/') }}purplerelaxFiles/shared_files/icon2.png" alt="icon2">
                                                ZA SVE DELOVE TELA
                                            </strong>
                                            Zahvaljujući specijalnim dodacima možete da tretirate bilo koju mišićnu regiju na telu.
                                        </li>
                                        <li>
                                            <strong>
                                                <img style="display: block;" src="{{ asset('/') }}purplerelaxFiles/shared_files/icon4.png" alt="icon4">
                                                LAK ZA KORIŠĆENJE
                                            </strong>
                                            Bez komplikovanih tehnologija i kablova, jednostavno ga postavite, pritisnite dugme i uživanje počinje.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-4">
        <div class="container">
            <div class="ct_image_wrap ">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{ asset('/') }}purplerelaxFiles/pulsirajucimasazer/pulsirajucimasaze2_mb.jpg" class="no-lazy">
                    <img src="{{ asset('/') }}purplerelaxFiles/pulsirajucimasazer/pulsirajucimasazer2_dk.jpg" alt="product2" class="no-lazy">
                </picture>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-5">
        <div class="container">
            <div class="block-3 ">
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/pulsirajucimasazer/pulsirajucimasazer3.jpg" alt="product3" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h2 style="text-transform: uppercase;">Ne dozvolite da vas bol u vratu ometa!</h2>
                                    <p>Zahvaljujući tehnologiji pulsnih vibracija on
                                        istovremeno deluje na više područja oko vrata što dovodi do ubrzane cirkulacije i veoma brzog oporavka,
                                        posebno nakon napornog dana. Za ovaj masažer ne postoje starosne granice, svi uzrasti ga mogu bezbedno koristiti.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-6">
        <div class="container">
            <div class="wysiwyg-content block-4 ">
                <h2 style="text-align: center;">NAŠI KUPCI</h2>
                <p style="text-align: center;">“Od kada sam kupio vratni masazer, više ne plaćam skupe masaže, a nemam ni problema sa bolovima u vratu”</p>
                <p style="text-align: center;">Jovan P. – Subotica</p>
                <p style="text-align: center;"><a class="btn" href="{{$checkoutView}}">PORUČI SVOJ MASAŽER</a></p>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-7">
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
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><strong>89%</strong></p>
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i>0</p>
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><strong>11%</strong></p>
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
                            <div class="w_content_wrap">
                                <h4 class="w_title">Tijana Stanimirov / Instagram
                                </h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                    <p>"Dobila sam od muža na poklon ovaj masažer. Za nedelju dana korišćenja mogu reći da sam prezadovoljna i preporodjena."</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <h4 class="w_title">Dejan Priboj / Facebook</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                    <p>"Kupio sam ga pre 2 dana i veoma sam zadovoljan. Radim kao kamiondžija i dosta mi pomaže pogotovo u dugim vožnjama na kojima se često ukočim."</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <h4 class="w_title">Marica G. / Instagram</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                    <p>"Kao što je i opisano - Lagan za korišćenje i koristimo ga svi u kući. Sve pohvale!"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-8">
        <div class="container">
            <div class="wysiwyg-content pro-txt ">
                <p style="text-align: center;">
                    Količine su ograničene
                    <br>40% popusta može trajati još samo malo!
                </p>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->
    <section class="section-9">
        <div class="container">
            <div class="foot-block common-block ">
                <div class="w_outer">
                    <div class="w_inner">
                        <div class="w_item item-1">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h1>Najbolji i najbrži način da eliminišete bol u vratu!</h1>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <ul>
                                        <li>Kombinacijom modernih tehnologija ovaj masažer simulira ljudsku masažu!</li>
                                        <li>Nakon samo nekoliko minuta korišćenja bol, ukočenost i pritisak u vratu počeće da nestaju.</li>
                                        <li>Akupunktura, opuštajuća masaža, tapkanje, kuckanje, dubinska masaža – izbor je na Vama!</li>
                                        <li>Možete ga koristiti u kolima, u kancelariji ili na bilo kom drugom mestu!</li>
                                    </ul>
                                    <h5>Iskoristi popust od <span style="color: #0093ea;"><strong>40%</strong></span> još danas!</h5>
                                    <p><a class="btn" href="{{$checkoutView}}">PORUČI SVOJ MASAŽER</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item satisfaction ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/satisfaction.png" alt="satisfaction" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <p><img src="{{ asset('/') }}purplerelaxFiles/shared_files/star5.png" alt="star5"></p>
                                    <p>100% garantovano zadovoljstvo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/container-->
    </section> <!-- /row-wrapper-->

@include('lander.purplerelax.components.footer')