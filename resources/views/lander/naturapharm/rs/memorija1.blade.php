@include('lander.purplerelax.components.head')
<style>
    @media (min-width:768px) {
        .section-1 {
            background: url({{ asset('/') }}naturapharmFiles/memorija/vitamixBaner_dt.png) bottom right 47%/cover no-repeat
        }
    }
    @media (max-width:767px) {
        .common-block .item-1 {
            margin: 0 -15px 20px;
            padding: 30px 15px 80%;
            text-align: center;
            background: url({{ asset('/') }}naturapharmFiles/memorija/vitamix2_mb.png) bottom center/cover no-repeat
        }
        .block-1 .item-1 {
            margin: 0 -15px 20px;
            padding: 30px 15px 80%;
            text-align: center;
            background: url({{ asset('/') }}naturapharmFiles/memorija/vitamixBaner_mb.png) bottom center/100% no-repeat
        }
    }
    @media (min-width:768px) {
        .section-9 {
            background: url({{ asset('/') }}naturapharmFiles/memorija/vitamix2_dt.png) center right 47%/cover no-repeat
        }
    }
    @media (max-width:767px) {
        .foot-block .item-1 {
            background: url({{ asset('/') }}naturapharmFiles/memorija/vitamix2_mb.png) bottom center/cover no-repeat
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
                                    <h1>Najbolji i najbrži način za poboljšanje memorije i koncentracije!</h1>
                                    <h3></h3>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <ul>
                                        <li>Poboljšava memoriju i koncentraciju</li>
                                        <li>Lakše polaganje ispita uz potpuno prirodan suplement</li>
                                        <li>Održavan normalnu funkcionisanje nervnog i kardiovaskularnog sistema</li>
                                        <li>Pospešuje cirkulaciju i deluje kao jak antioksidans</li>
                                    </ul>
                                    <h5>Iskoristi popust od <span style="color: #0093ea;"><strong>40%</strong></span> još danas!</h5>
                                    <p><a class="btn" href="{{$checkoutView}}">PORUČI SVOJ VITAMIX</a></p>
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
                                <img src="{{ asset('/') }}naturapharmFiles/memorija/vitamix_dt.png" alt="product1" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h2>PRIJATELJ SVAKOG STUDENTA</h2>
                                    <p><strong>VITAMIX ZA MEMORIJU I KONCENTRACIJU</strong> klinički je testiran i potpuno efikasan u poboljšanju memorije
                                        i koncentracije. Sadrži i dodatne sastojke koji pozitivno deluju na celokupno stanje organizma.
                                    </p>
                                    <ul>
                                        <li>
                                            <strong>
                                                <img style="display: block;" src="{{ asset('/') }}purplerelaxFiles/shared_files/icon18.png" alt="icon1">

                                            </strong>
                                            List ginka sadrži veliki broj polifenolnih jedinjenja koja deluju antioksidantno
                                        </li>
                                        <li>
                                            <strong>
                                                <img style="display: block;" src="{{ asset('/') }}purplerelaxFiles/shared_files/icon15.png" alt="icon2">

                                            </strong>
                                            Lecitin se nalazi u u biljnim i životinjskim lipidima i veoma je značajan za mnoge biološke procese u organizmu
                                        </li>
                                        <li>
                                            <strong>
                                                <img style="display: block;" src="{{ asset('/') }}purplerelaxFiles/shared_files/icon16.png" alt="icon4">

                                            </strong>
                                            Žen-šen se koristi kao sredstvo za podsticanje mentalnih i fizičkih sposobnosti
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
                    <source media="(max-width: 767px)" srcset="{{ asset('/') }}naturapharmFiles/memorija/kupci_mb.png" class="no-lazy">
                    <img src="{{ asset('/') }}naturapharmFiles/memorija/kupci_dt.png" alt="product2" class="no-lazy">
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
                                <img src="{{ asset('/') }}naturapharmFiles/memorija/creative_dt.png" alt="product3" class="img-view">
                            </div>
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <h2 style="text-transform: uppercase;">REZULTAT JE VIDLJIV NAKON SAMO NEKOLIKO DANA KORIŠĆENJA</h2>
                                    <p>Preporučena doza od jedne kapsule dnevno doprineće poboljšanju nervnog, vaskularnog i imunog sistema.
                                        Pakovanje sadrži 30 kapsula. Prve rezultate ćete uočiti nakon samo nekoliko dana korišćenja.</p>
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
                <p style="text-align: center;">“Iako sam odavno završio svoje studije, koristim ovaj preparat jer sam nemerljivo produktivniji na poslu.
                    Sviđa mi se što je zaista prirodan, a tako delotvoran. Puna preporuka!”</p>
                <p style="text-align: center;">Novica N. – Subotica</p>
                <p style="text-align: center;"><a class="btn" href="{{$checkoutView}}">PORUČI SVOJ VITAMIX</a></p>
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
                                <h4 class="w_title">Petar Gavric / Instagram</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                    <p>"Koristio sam ga za spremanje prijemnog ispita i sada ga opet naručujem, vrlo sam zadovoljan proizvodom.
                                        Šteta što nije više rasprostranjem po apotekama."</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <h4 class="w_title">Zoran Petrovic / Facebook</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                    <p>"Odlično izbalansiran proizvod koji daje rezultat već nakon nekoliko dana upotrebe.
                                        Može se koristiti i dva puta dnevno radi bržeg delovanja."</p>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <h4 class="w_title">Milijana Karadzic / Instagram</h4>
                                <div class="w_desc">
                                    <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                    <p>"Izuzetno sam zadovoljna ovim preparatom! Više ne zaboravljam stvari, potpuno sam pribrana i prisutna
                                        u društvu i razgovorima."</p>
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
                                    <h1>Najbolji i najbrži način za poboljšanje memorije i koncentracije!</h1>
                                </div>
                            </div>
                        </div>
                        <div class="w_item ">
                            <div class="w_content_wrap">
                                <div class="w_desc">
                                    <ul>
                                        <li>Poboljšava memoriju i koncentraciju</li>
                                        <li>Lakše polaganje ispita uz potpuno prirodan suplement</li>
                                        <li>Održavan normalnu funkcionisanje nervnog i kardiovaskularnog sistema</li>
                                        <li>Pospešuje cirkulaciju i deluje kao jak antioksidans</li>
                                    </ul>
                                    <h5>Iskoristi popust od <span style="color: #0093ea;"><strong>40%</strong></span> još danas!</h5>
                                    <p><a class="btn" href="{{$checkoutView}}">PORUČI SVOJ VITAMIX</a></p>
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