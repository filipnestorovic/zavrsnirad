@include('lander.purplerelax.components.head')
<style>
    @media (min-width:768px) {
        .section-1 {
            background: url({{ asset('/') }}purplerelaxFiles/leptirmasazer/leptirBaner_dt.png) bottom right 47%/cover no-repeat
        }
    }
    @media (max-width:767px) {
        .common-block .item-1 {
            margin: 0 -15px 20px;
            padding: 30px 15px 80%;
            text-align: center;
            background: url({{ asset('/') }}purplerelaxFiles/leptirmasazer/leptir4_mb.png) bottom center/cover no-repeat
        }
        .block-1 .item-1 {
            margin: 0 -15px 20px;
            padding: 30px 15px 80%;
            text-align: center;
            background: url({{ asset('/') }}purplerelaxFiles/leptirmasazer/leptirBaner_mb.png) bottom center/100% no-repeat
        }
    }
    @media (min-width:768px) {
        .section-9 {
            background: url({{ asset('/') }}purplerelaxFiles/leptirmasazer/leptir4_dt.png) center right 47%/cover no-repeat
        }
    }
    @media (max-width:767px) {
        .foot-block .item-1 {
            background: url({{ asset('/') }}purplerelaxFiles/leptirmasazer/leptir4_mb.png) bottom center/cover no-repeat
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
                                    <h1>Pružite sebi vrhunsko opuštanje u bilo koje vreme i na bilo kom mestu!</h1>
                                    <h3>Totalno opuštanje u samo <strong>10 minuta</strong></h3>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <ul>
                                        <li>Kombinacijom modernih tehnologija ovaj masažer simulira ljudsku masažu.</li>
                                        <li>Dubinski pokreće mišiće, pospešuje cirkulaciju i čini celo telo opuštenijim i fleksibilnijim.</li>
                                        <li>Samo nekoliko minuta korišćenja dnevno pokrenuće vaše mišiće i razbiti naslage toksina
                                            koji uzrokuju bol u glavi, gubitak energije, pritisak u vratnom delu i potiljku.</li>
                                        <li>Podesiva jačina masaže, različite masažne tehnike i smerovi masiranja čine ovaj masažer preporučljivim svim uzrastima.</li>
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
                                <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer/leptir1.png" alt="product1" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h2>MASAŽA U BILO KOJE VREME NA BILO KOM MESTU</h2>
                                    <p>Veoma je praktičan i možete ga koristiti u kući, kancelariji ili u automobilu.
                                        Butterfly Massager je izrađen od najkvalitetnijih materijala što mu garantuje dug vek korišćenja.</p>
                                    <ul>
                                        <li>
                                            <strong>
                                                <img style="display: block;" src="{{ asset('/') }}purplerelaxFiles/shared_files/icon18.png" alt="icon1">
                                                PRIJATNO ZAGREVANJE MIŠIĆA
                                            </strong>
                                            Poseduje grejače koji prijatno zagrevaju regiju koja se masira, i na taj način dolazi do potpune relaksacije i opuštanja.
                                        </li>
                                        <li>
                                            <strong>
                                                <img style="display: block;" src="{{ asset('/') }}purplerelaxFiles/shared_files/icon15.png" alt="icon2">
                                                MODERAN DIZAJN
                                            </strong>
                                            Zahvaljujući ergonomskom dizajnu ovaj masažer će savršeno prionuti uz vaša leđa, vrat i ostale delove tela.
                                        </li>
                                        <li>
                                            <strong>
                                                <img style="display: block;" src="{{ asset('/') }}purplerelaxFiles/shared_files/icon16.png" alt="icon4">
                                                LAK ZA KORIŠĆENJE
                                            </strong>
                                            Bez komplikovanih tehnologija i kablova, jednostavno ga postavite, pritisnite dugme i uživanje počinje.
                                            Može da se fiksira na naslon stolice, fotelje i sedišta automobila.
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
                    <source media="(max-width: 767px)" srcset="{{ asset('/') }}purplerelaxFiles/leptirmasazer/leptir2_mb.png" class="no-lazy">
                    <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer/leptir2_dt.png" alt="product2" class="no-lazy">
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
                                <img src="{{ asset('/') }}purplerelaxFiles/leptirmasazer/leptir3.png" alt="product3" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h2 style="text-transform: uppercase;">NE DOZVOLITE DA VAS BOL U VRATU OMETA!</h2>
                                    <p>Zahvaljujući savremenoj tehnologiji masiranja deluje na mišiće vrata, gornjeg i donjeg dela leđa i dovodi do veoma brzog opuštanja i ubrzane cirkulacije.
                                        Može da se koristi i za ostale delove tela.
                                        Ne postoje starosne granice i ovaj masažer mogu koristiti i deca, kao i bake i deke.
                                    </p>
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
                <p style="text-align: center;">"Zaboravio sam na na osećaj ukočenosti u leđima i pritiska u vratu od kako koristim Butterfly masažer.
                    Sve preporuke!"</p>
                <p style="text-align: center;">Vladimir S. - Beograd</p>
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
                                <h4 class="w_title">Jovana Gavrić / Facebook</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                    <p>"Obožavam ovaj masažer i bukvalno se ne razdvajam od njega.
                                        Koristim ga i u automobilu. Odličan proizvod, sve preporuke!"</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <h4 class="w_title">Danko Mlađenović / Facebook</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                    <p>"Od kako sam kupio ovaj masažer, nemam više neprijatan bol u glavi koji mi je bio noćna mora.
                                        Nakon 5-6 dana korišćenja potpuno je iščezao. Neizmerno sam zahvalan prodavcima."</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <h4 class="w_title">Ivana Matić / Instagram</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                    <p>"Nakon napornog dana na poslu, sedenja i vožnje automobilom, Butterfly Massager mi dođe kao nešto najlepše pred spavanje.
                                        I moja deca ga obožavaju."</p>
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
                                    <h1>Pružite sebi vrhunsko opuštanje u bilo koje vreme i na bilo kom mestu!</h1>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <ul>
                                        <li>Kombinacijom modernih tehnologija ovaj masažer simulira ljudsku masažu.</li>
                                        <li>Dubinski pokreće mišiće, pospešuje cirkulaciju i čini celo telo opuštenijim i fleksibilnijim.</li>
                                        <li>Samo nekoliko minuta korišćenja dnevno pokrenuće vaše mišiće i razbiti naslage toksina
                                            koji uzrokuju bol u glavi, gubitak energije, pritisak u vratnom delu i potiljku.</li>
                                        <li>Podesiva jačina masaže, različite masažne tehnike i smerovi masiranja čine ovaj masažer preporučljivim svim uzrastima.</li>
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