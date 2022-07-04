@include('lander.purplerelax.components.head')
<style>
    @media (min-width: 768px) {
        .section-1 {
            background: url({{ asset('/') }}purplerelaxFiles/necklineslimmer/jaderollerbanner_dt.png) bottom right 47%/cover no-repeat
        }
    }

    @media (max-width: 767px) {
        .common-block .item-1 {
            margin: 0 -15px 20px;
            padding: 30px 15px 80%;
            text-align: center;
            background: url({{ asset('/') }}purplerelaxFiles/necklineslimmer/jaderoller4_mb.png) bottom center/cover no-repeat
        }

        .block-1 .item-1 {
            margin: 0 -15px 20px;
            padding: 30px 15px 80%;
            text-align: center;
            background: url({{ asset('/') }}purplerelaxFiles/necklineslimmer/jaderollerbanner_mb.png) bottom center/100% no-repeat
        }
    }

    @media (min-width: 768px) {
        .section-9 {
            background: url({{ asset('/') }}purplerelaxFiles/necklineslimmer/jaderoller4_dt.png) center right 47%/cover no-repeat
        }
    }

    @media (max-width: 767px) {
        .foot-block .item-1 {
            background: url({{ asset('/') }}purplerelaxFiles/necklineslimmer/jaderoller4_mb.png) bottom center/cover no-repeat
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
                                    <h1>Savršeno zategnut podbradak uz samo 5 minuta vežbe dnevno</h1>
                                    <h3>Na potpuno jednostavan i prirodan način</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <ul>
                                        <li>Izbegnite posledice starenja bez estetskih zahvata</li>
                                        <li>Čvršći i zategnutiji predeo vrata i podbratka</li>
                                        <li>Brzo i efikasno dejstvo - dovoljno je samo 5 minuta dnevno</li>
                                        <li>Prvi rezultati vidljivi za oko 2-3 nedelje</li>
                                    </ul>
                                    <h5>Iskoristi popust od <span style="color: #0093ea;"><strong>40%</strong></span>
                                        još danas!</h5>
                                    <p><a class="btn" href="{{$checkoutView}}">PORUČI SVOJ NECKLINE SLIMMER</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item satisfaction ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/satisfaction.png"
                                     alt="satisfaction" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <p><img src="{{ asset('/') }}purplerelaxFiles/shared_files/star5.png" alt="star5">
                                    </p>
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
                                <img src="{{ asset('/') }}purplerelaxFiles/necklineslimmer/jaderoller1.png"
                                     alt="product1" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h2>HIT NA SVETSKOM TRŽIŠTU</h2>
                                    <p>Namenjen je svima koji drže do svog izgleda i žele da imaju <strong>zategnut vrat i lice.</strong>
                                        Proizvod koji je do sada u Srbiji kupilo preko 6000 ljudi i koji je ocenjen najvišim ocenama.</p>
                                    <ul>
                                        <li>
                                            <strong>
                                                <img style="display: block;"
                                                     src="{{ asset('/') }}purplerelaxFiles/necklineslimmer/icon.png"
                                                     alt="icon1">
                                                KAKO RADI
                                            </strong>
                                            Neckline Slimmer cilja i oblikuje potkožne mišiće vrata, brade i lica vršeći blagi pritisak na te površine.
                                            Kao i svaki drugi mišić - trbušnjak ili biceps – i mišićima vrata i lica je potrebna vežba.
                                        </li>
                                        <li>
                                            <strong>
                                                <img style="display: block;"
                                                     src="{{ asset('/') }}purplerelaxFiles/necklineslimmer/icon.png"
                                                     alt="icon2">
                                                RAZLIČITI NIVOI OPTEREĆENJA
                                            </strong>
                                            Ovaj aparat radi po principu opruge. 3 različite opruge snage - Nežno učvršćuju osnovne mišiće vrata i zatežu kožu. Tri nivoa otpora: nizak, srednji i visok.
                                            Od početnika do naprednog toniranja, brzo i efikasno.
                                        </li>
                                        <li>
                                            <strong>
                                                <img style="display: block;"
                                                     src="{{ asset('/') }}purplerelaxFiles/necklineslimmer/icon.png"
                                                     alt="icon4">
                                                NAUČNO DOKAZANO
                                            </strong>
                                            Dokazano je da ljudi koji su koristili ovaj proizvod u prethodnih meseci imaju dosta manje problema sa podbratkom i opuštenom kožom donjeg dela lica.
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
                    <source media="(max-width: 767px)"
                            srcset="{{ asset('/') }}purplerelaxFiles/necklineslimmer/jaderoller2_mb.png"
                            class="no-lazy">
                    <img src="{{ asset('/') }}purplerelaxFiles/necklineslimmer/jaderoller2_dt.png" alt="product2"
                         class="no-lazy">
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
                                <img src="{{ asset('/') }}purplerelaxFiles/necklineslimmer/jaderoller3.png"
                                     alt="product3" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h2 style="text-transform: uppercase;">DO ZATEGNUTOG PODBRATKA NA BRZ I EFIKASAN NAČIN</h2>
                                    <p>Svi znamo prednosti vežbi uz otpor, poput sklekova ili dizanja tegova. Neckline Slimmer radi sličnu stvar, ali uz manje napora i na manjoj grupi mišića.</p>
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
                <p style="text-align: center;">""Koristim ga svakodnevno već mesec dana i podbradak mi je zategnutiji. Konačno sam našla proizvod koji deluje. Sve preporuke!"</p>
                <p style="text-align: center;">Gorana J. - Beograd</p>
                <p style="text-align: center;"><a class="btn" href="{{$checkoutView}}">PORUČI SVOJ NECKLINE SLIMMER</a></p>
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
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i
                                        class="icon-star"></i><i class="icon-star-half-empty"></i></p>
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
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i
                                        class="icon-star"></i><i class="icon-star"></i><strong>89%</strong></p>
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i
                                        class="icon-star"></i><i class="icon-star-o"></i>0</p>
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i
                                        class="icon-star-o"></i><i class="icon-star-o"></i><strong>11%</strong></p>
                                <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i
                                        class="icon-star-o"></i><i class="icon-star-o"></i>0%</p>
                                <p><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i
                                        class="icon-star-o"></i><i class="icon-star-o"></i>0%</p>
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
                                <h4 class="w_title">Sanja Blažić / Facebook</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i
                                            class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i
                                            class="icon-star"></i></p>
                                    <p>Odličan je za zazezanje vrata i podbratka.  Radi kao što je opisano, a ukoliko ga koristite svakodnevno daje odlične rezultate.</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <h4 class="w_title">Milica Pavlović / Instagram</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i
                                            class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i
                                            class="icon-star"></i></p>
                                    <p>Kupila sam jedan sebi i jedan majci, a efekat je odličan. Obe smo zadovoljne, nismo očekivale da će ovaj proizvod biti ovako dobar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <h4 class="w_title">Marija Krsmanović / Instagram</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i
                                            class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i
                                            class="icon-star"></i></p>
                                    <p>Dala sam celo bogatstvo na različite kreme i losione i ništa mi nije pomoglo. Koža na bradi je i dalje bila opuštena. Videla sam reklamu za ovaj proizvod
                                        i rekoh zašto da ne probam. Efekat je WOW... svaka čast izumitelju ovoga. Pozdrav!</p>
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
                                    <h1>Savršeno zategnut podbradak uz samo 5 minuta vežbe dnevno</h1>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <ul>
                                        <li>Izbegnite posledice starenja bez estetskih zahvata</li>
                                        <li>Čvršći i zategnutiji predeo vrata i podbratka</li>
                                        <li>Brzo i efikasno dejstvo - dovoljno je samo 5 minuta dnevno</li>
                                        <li>Prvi rezultati vidljivi za oko 2-3 nedelje</li>
                                    </ul>
                                    <h5>Iskoristi popust od <span style="color: #0093ea;"><strong>40%</strong></span>
                                        još danas!</h5>
                                    <p><a class="btn" href="{{$checkoutView}}">PORUČI SVOJ NECKLINE SLIMMER</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item satisfaction ">
                            <div class="w_thumb">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/satisfaction.png"
                                     alt="satisfaction" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <p><img src="{{ asset('/') }}purplerelaxFiles/shared_files/star5.png" alt="star5">
                                    </p>
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
