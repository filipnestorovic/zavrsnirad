@include('lander.purplerelax.components.head')
<style>
    @media (min-width:768px) {
        .section-1 {
            background: url({{ asset('/') }}purplerelaxFiles/oralirrigator/jaderollerbanner_dt.png) bottom right 47%/cover no-repeat
        }
    }
    @media (max-width:767px) {
        .common-block .item-1 {
            margin: 0 -15px 20px;
            padding: 30px 15px 80%;
            text-align: center;
            background: url({{ asset('/') }}purplerelaxFiles/oralirrigator/jaderoller4_mb.png) bottom center/cover no-repeat
        }
        .block-1 .item-1 {
            margin: 0 -15px 20px;
            padding: 30px 15px 80%;
            text-align: center;
            background: url({{ asset('/') }}purplerelaxFiles/oralirrigator/jaderollerbanner_mb.png) bottom center/100% no-repeat
        }
    }
    @media (min-width:768px) {
        .section-9 {
            background: url({{ asset('/') }}purplerelaxFiles/oralirrigator/jaderoller4_dt.png) center right 47%/cover no-repeat
        }
    }
    @media (max-width:767px) {
        .foot-block .item-1 {
            background: url({{ asset('/') }}purplerelaxFiles/oralirrigator/jaderoller4_mb.png) bottom center/cover no-repeat;
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
                                    <h1>Savršeno beli i čisti zubi, bez naslaga i ostataka hrane</h1>
                                    <h3>Na potpuno jednostavan i prirodan način</h3>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <ul>
                                        <li>Skida sve naslage između zuba do kojih četkica ne može da dopre</li>
                                        <li>Jak i tanak mlaz precizno dopire do svih nedostupnih mesta na kojima se nakuplja hrana</li>
                                        <li>Bez hemije i štetnih efekata po zubnu gleđ</li>
                                        <li>Neprijatan zadah postaće prošlost</li>
                                    </ul>
                                    <h5>Iskoristi popust od <span style="color: #0093ea;"><strong>40%</strong></span> još danas!</h5>
                                    <p><a class="btn" href="{{$checkoutView}}">PORUČI SVOJ ORAL IRRIGATOR</a></p>
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
                                <img src="{{ asset('/') }}purplerelaxFiles/oralirrigator/jaderoller1.png" alt="product1" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h2>HIT NA SVETSKOM TRŽIŠTU</h2>
                                    <p>Namenjen je svima koji drže do oralne higijene, žele da imaju <strong>bele zube i svež dah.</strong> Proizvod
                                        koji je do sada u Srbiji kupilo preko 6000 ljudi i koji je ocenjen najvišim ocenama.</p>
                                    <ul>
                                        <li>
                                            <strong>
                                                <img style="display: block;" src="{{ asset('/') }}purplerelaxFiles/powerfloss/icon.png" alt="icon1">
                                                ZDRAVI ZUBI I DESNI
                                            </strong>
                                            Nijedno sredstvo do sada nije bilo toliko efikasno kao Oral Irrigator, zahvaljujući kome ćete održati
                                            oralnu higijenu na najvišem nivou.
                                        </li>
                                        <li>
                                            <strong>
                                                <img style="display: block;" src="{{ asset('/') }}purplerelaxFiles/powerfloss/icon.png" alt="icon2">
                                                ELIMINIŠE OSTATKE HRANE
                                            </strong>
                                            Ostaci hrane do kojih ni konac ne može da dopre konstantno stvaraju bakterije i pogodan teren za stvaranje raznih bolesti.
                                            Oral Irrigator će konačno rešiti taj problem.
                                        </li>
                                        <li>
                                            <strong>
                                                <img style="display: block;" src="{{ asset('/') }}purplerelaxFiles/powerfloss/icon.png" alt="icon4">
                                                NAUČNO DOKAZANO
                                            </strong>
                                            Dokazano je da ljudi koji su koristili ovaj proizvod u prethodnih 6 meseci nisu imali probleme sa upalom desnih koja se stvara
                                            zbog mirko ostataka hrane.
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
                    <source media="(max-width: 767px)" srcset="{{ asset('/') }}purplerelaxFiles/oralirrigator/jaderoller2_mb.png" class="no-lazy">
                    <img src="{{ asset('/') }}purplerelaxFiles/oralirrigator/jaderoller2_dt.png" alt="product2" class="no-lazy">
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
                                <img src="{{ asset('/') }}purplerelaxFiles/oralirrigator/jaderoller3.png" alt="product3" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h2 style="text-transform: uppercase;">DO BELIH I ČISTIH ZUBA I ZDRAVIH DESNI NA BRZ I EFIKASAN NAČIN</h2>
                                    <p>Za razliku od većine proizvoda koji se mogu nabaviti u apotekama, Oral Irrigator je do sada najbolji i efikasniji. Ne može se kupiti
                                        u radnjama, nego samo putem našeg zvaničnom sajta. Poručite odmah za blistav i svež osmeh!</p>
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
                <p style="text-align: center;">"Koristim ga svakodnevno već mesec dana i zubi su mi svetliji, a dah konačno svež. Sve preporuke!"</p>
                <p style="text-align: center;">Gorica P. - Beograd</p>
                <p style="text-align: center;"><a class="btn" href="{{$checkoutView}}">PORUČI SVOJ ORAL IRRIGATOR</a></p>
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
                                <h4 class="w_title">Smilja Blagojević / Facebook</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                    <p>Odličan je za uklanjanje ostataka hrane i naslaga. Radi kao što je opisano, a ukoliko ga koristite svakodnevno daje odlične rezultate.</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <h4 class="w_title">Milica Todorović / Facebook</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                    <p>Kupila sam jedan sebi i jedan majci, a efekat je odličan. Meni je dah svež, a majku više ne muče desni.</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <h4 class="w_title">Marija Gajić / Instagram</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                    <p>Nakon ručka nema potrebe više da koristim čačkalice i da se mučim sa koncem koji mi povređuje desni. Sa ovim čudom izbacim perfektno sve ostatke hrane! Toplo preporučujem ovaj proizvod.</p>
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
                                    <h1>Savršeno beli i čisti zubi, bez naslaga i ostataka hrane</h1>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <ul>
                                        <li>Skida sve naslage između zuba do kojih četkica ne može da dopre</li>
                                        <li>Jak i tanak mlaz precizno dopire do svih nedostupnih mesta na kojima se nakuplja hrana</li>
                                        <li>Bez hemije i štetnih efekata po zubnu gleđ</li>
                                        <li>Neprijatan zadah postaće prošlost</li>
                                    </ul>
                                    <h5>Iskoristi popust od <span style="color: #0093ea;"><strong>40%</strong></span> još danas!</h5>
                                    <p><a class="btn" href="{{$checkoutView}}">PORUČI SVOJ ORAL IRRIGATOR</a></p>
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
