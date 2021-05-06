@include('lander.purplerelax.components.head')
<style>
    @media (min-width:768px) {
        .section-1 {
            background: url({{ asset('/') }}purplerelaxFiles/prostirka/prostirkaBaner_dt.png) bottom right 47%/cover no-repeat
        }
    }
    @media (max-width:767px) {
        #mobileRelax {
            visibility: hidden;
        }
        .common-block .item-1 {
            margin: 0 -15px 20px;
            padding: 30px 15px 80%;
            text-align: center;
            background: url({{ asset('/') }}purplerelaxFiles/prostirka/prostirka4_mb.png) bottom center/cover no-repeat
        }
        .block-1 .item-1 {
            margin: 0 -15px 20px;
            padding: 30px 15px 80%;
            text-align: center;
            background: url({{ asset('/') }}purplerelaxFiles/prostirka/prostirkaBaner_mb.png) bottom center/100% no-repeat
        }
    }
    @media (min-width:768px) {
        .section-9 {
            background: url({{ asset('/') }}purplerelaxFiles/prostirka/prostirka4_dt.png) center right 47%/cover no-repeat
        }
    }
    @media (max-width:767px) {
        .foot-block .item-1 {
            background: url({{ asset('/') }}purplerelaxFiles/prostirka/prostirka4_mb.png) bottom center/cover no-repeat
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
                                    <h1>Najbolji i najbrži način da se relaksirate i povratite energiju!</h1>
                                    <h3 id="mobileRelax">Totalno opuštanje u samo <strong>10 minuta</strong></h3>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <ul>
                                        <li>Akupresurna prostirka je slična sundjerastoj prostirci za jogu, sa 6210 šiljaka u obliku lotosovih cvetova ugrađenih na svojoj površini.</li>
                                        <li>Na principu akupresure, šiljci preko kože stimulišu akupunkturne tačke na vašem telu i dovode do fizičkog i mentalnog opuštanja.</li>
                                        <li>Budićete se odmorni, imaćete više elana i pokretačke energije.</li>
                                        <li>Stimulišući sve tačke na vašem telu, u jako kratkom vremenskom roku oslobadja vas glavobolje.</li>
                                    </ul>
                                    <h5>Iskoristi popust od <span style="color: #0093ea;"><strong>40%</strong></span> još danas!</h5>
                                    <p><a class="btn" href="{{$checkoutView}}">PORUČI SVOJU PROSTIRKU</a></p>
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
                                <img src="{{ asset('/') }}purplerelaxFiles/prostirka/prostirka1.png" alt="product1" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h2>OSETITE SVA POZITIVNA DEJSTVA AKUPUNKTURE U SVOM DOMU</h2>
                                    <p>Benefiti akupunkture su naširoko poznati već vekovima unazad.
                                        Inače su ti tretmani skupi, ali sada uz ovu prostirku možete osetiti na svojoj koži zašto je akupunktura toliko hvaljena.</p>
                                    <ul>
                                        <li>
                                            <strong>
                                                <img style="display: block;" src="{{ asset('/') }}purplerelaxFiles/shared_files/icon19.png" alt="icon1">
                                                POBOLJŠAVA CIRKULACIJU
                                            </strong>
                                            Deluje na mišiće celog tela, pospešuje cirkulaciju i utiče na sniženje krvnog pritiska.
                                        </li>
                                        <li>
                                            <strong>
                                                <img style="display: block;" src="{{ asset('/') }}purplerelaxFiles/shared_files/icon20.png" alt="icon2">
                                                OPUŠTA MIŠIĆE
                                            </strong>
                                            Smanjuje mišićnu napetost i bolove u leđima, vratu i ramenima.
                                        </li>
                                        <li>
                                            <strong>
                                                <img style="display: block;" src="{{ asset('/') }}purplerelaxFiles/shared_files/icon21.png" alt="icon4">
                                                POBOLJŠAVA KVALITET SNA
                                            </strong>
                                            Nakon korišćenja vaše telo i duh će biti relaksirani, a san lep i kvalitetan.
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
                    <source media="(max-width: 767px)" srcset="{{ asset('/') }}purplerelaxFiles/prostirka/prostirka2_mb.png" class="no-lazy">
                    <img src="{{ asset('/') }}purplerelaxFiles/prostirka/prostirka2_dt.png" alt="product2" class="no-lazy">
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
                                <img src="{{ asset('/') }}purplerelaxFiles/prostirka/prostirka3.png" alt="product3" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h2 style="text-transform: uppercase;">PRAKTIČNA I LAKO PRENOSIVA</h2>
                                    <p>Savitljiva je, lagana i lako se transportuje. Kada osetite njena pozivivna dejstva nosićete je svuda sa sobom sobom.
                                        Ne izaziva nikakva neželjena dejstva.</p>
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
                <p style="text-align: center;">"Od kada sam kupila akupresurnu prostirku, više ne plaćam skupe masaže i konačno nemam bolove u glavi.
                    Svaki dan je koristim barem 15 minuta i osećam se kao da ću da poletim."</p>
                <p style="text-align: center;">Nada Milić - Beograd</p>
                <p style="text-align: center;"><a class="btn" href="{{$checkoutView}}">PORUČI SVOJU PROSTIRKU</a></p>
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
                                <h4 class="w_title">Milena Marković / Instagram</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                    <p>"Ova prostirka je unela miran san u moj dom. Pred spavanje se lepo opustim i slatko zaspim. Kupila sam još jednu za svaki slučaj."</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <h4 class="w_title">Bojana Gavrić / Facebook</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                    <p>"Vrlo često sam imala glavobolju nakon napornog radnog dana. Sada čim dođem sa posla, uzmem svoju prostirku i nakon pola sata glavobolje nema.
                                        Neverovatno je dobra i jako sam zadovolja. Hvala vam."</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <h4 class="w_title">Darko Stevanović / Facebook</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                    <p>"U početku sam bio skeptičan, ali sam ipak odlučio da kupim akupresurnu prostirku. Sada je ne bih menjao ni za šta. Mnogo prija i opusti me do te mere da odmah zaspim."</p>
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
                                    <h1>Najbolji i najbrži način da se relaksirate i povratite energiju!</h1>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <ul>
                                        <li>Akupresurna prostirka je slična sundjerastoj prostirci za jogu, sa 6210 šiljaka u obliku lotosovih cvetova ugrađenih na svojoj površini.</li>
                                        <li>Na principu akupresure, šiljci preko kože stimulišu akupunkturne tačke na vašem telu i dovode do fizičkog i mentalnog opuštanja.</li>
                                        <li>Budićete se odmorni, imaćete više elana i pokretačke energije.</li>
                                        <li>Stimulišući sve tačke na vašem telu, u jako kratkom vremenskom roku oslobadja vas glavobolje.</li>
                                    </ul>
                                    <h5>Iskoristi popust od <span style="color: #0093ea;"><strong>40%</strong></span> još danas!</h5>
                                    <p><a class="btn" href="{{$checkoutView}}">PORUČI SVOJU PROSTIRKU</a></p>
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