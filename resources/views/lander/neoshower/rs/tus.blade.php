<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="{{ asset('/') }}neoshowerFiles/shared_files/neoshower_favicon.png" rel="icon" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="{{ asset('/') }}neoshowerFiles/tus/site.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}neoshowerFiles/tus/pre-1-aov.min.css">
    <style>
        @media only screen and (max-width: 600px) {
            #sliderText {
                padding-top: 80px;
            }
        }
    </style>
</head>
<body class="pretemplate pre-1">
<div class="wrapper">
    <main>
        <section class="section-1">
            <div class="container">
                <div class="">
                    <div class="logo">
                        <a href=""><img src="{{ asset('/') }}neoshowerFiles/shared_files/neoshower-logo-white.png" alt="" class="b-loaded"></a>
                    </div>
                    <div class="w_button offer-text">
                        <a href="">
                            <span>NE PROPUSTITE <b>40%</b> POPUSTA</span>
                        </a>
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-2">
            <div class="container">
                <div class="">
                    <div id="sliderText" class="wysiwyg-content flex-column">
                        <h1><span>NEOSHOWER</span></h1>
                        <h4><span>Rešite se štetne tvrde vode i visokih računa za vodu</span></h4>
                        <div class="cta_order"><a class="tracking-link" href="{{$checkoutView}}">KUPI ODMAH</a></div>
                    </div>
                    <div class="justify-image" style="margin-top: 0px; padding:50px;">
                        <img src="{{ asset('/') }}neoshowerFiles/tus/header_tus.png" alt="tus" class="b-loaded">
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                    </div> <!--/span-->
                    <div class="col-md-4">
                    </div> <!--/span-->
                </div> <!--/row-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-4">
            <div class="container">
                <div class="">
                    <div class="one-column">
                        <div class="wysiwyg-content section-tagline ">
                            <h4 style="text-align: center;">Neoshower: Okrepite svoju kožu</h4>
                            <p style="text-align: center;">Kada se tuširate, tvrda voda isušuje vašu kožu i kosu. Voda za tuširanje često sadrži hlor i druge štetne hemikalije koje mogu izazvati ozbiljne medicinske posledice.</p>
                            <p style="text-align: center;">Problemi sa kožom poput akni, dermatitisa, ekcema i psorijaze povezani su sa tvrdom vodom. Jedna studija iz 2006. godine je čak pokazala da tuširanje tvrdom vodom može povećati rizik od raka, više nego kada tu istu vodu pijete!</p>
                            <p style="text-align: center;">To je razlog zašto smo kreirali ovaj tuš...</p>
                            <p style="text-align: center;">Neoshower je jednostavan i pristupačan način za vraćanje vode u čisto prirodno stanje. Prvo filtrira hlor i druge štetne minerale, zatim, vraća vodi zdravu pH vrednost. Vaša koža će vam biti zahvalna!</p>
                            <p style="text-align: center;">Sem toga, Neoshower smanjuje potrošnju vode bez smanjenja pritiska što donosi uštedu na računu za vodu. Odličan i za kožu i za novčanik!</p>
                        </div>
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-5">
            <div class="container">
                <div class="">
                    <div class="ct_jumbotron feature_item">
                        <picture class="ct_thumb_wrap ct_thumb">
                            <div class="ct_thumb">
                                <img src="{{ asset('/') }}neoshowerFiles/tus/icon-img1.jpg" alt="icon1" class="b-loaded">
                            </div>
                        </picture>
                        <div class="w_title">
                            <h3><img src="{{ asset('/') }}neoshowerFiles/tus/checkmark.jpg" width="25px">Alkalna filtracija</h3>
                        </div>
                        <div class="ct_content">
                            <div class="bodyContent">
                                <p>Neoshower uklanja hlor i ostavlja vodu na savršenom pH nivou koji čini vašu kožu i kosu sjajnom.</p>
                            </div>
                        </div>
                    </div>
                    <div class="ct_jumbotron feature_item">
                        <picture class="ct_thumb_wrap ct_thumb">
                            <div class="ct_thumb">
                                <img src="{{ asset('/') }}neoshowerFiles/tus/icon-img2.jpg" alt="icon2" class="b-loaded">
                            </div>
                        </picture>
                        <div class="w_title">
                            <h3><img src="{{ asset('/') }}neoshowerFiles/tus/checkmark.jpg" width="25px">SmartPressure<sup>™</sup> sistem</h3>
                        </div>
                        <div class="ct_content">
                            <div class="bodyContent">
                                <p><span>Čuva novac i planetu! Smanjenje potrošnje vode bez žrtvovanja vodenog pritiska.</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="ct_jumbotron feature_item">
                        <picture class="ct_thumb_wrap ct_thumb">
                            <div class="ct_thumb">
                                <img src="{{ asset('/') }}neoshowerFiles/tus/icon-img3.jpg" alt="icon3" class="b-loaded">
                            </div>
                        </picture>
                        <div class="w_title">
                            <h3><img src="{{ asset('/') }}neoshowerFiles/tus/checkmark.jpg" width="25px">Podešavanje mlaza vode</h3>
                        </div>
                        <div class="ct_content">
                            <div class="bodyContent">
                                <p><span>3 različita mlaza (kiša, masaža i kombinovani) pružaju ugodan osećaj, ali i snagu čišćenja!</span></p>
                            </div>
                        </div>
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-6">
            <div class="container">
                <div class="">
                    <div class="title_h2">
                        <h2 class="title">
                            - Šta kažu naši kupci - </h2>
                    </div>
                    <div class="ct_jumbotron testimonial_item">
                        <picture class="ct_thumb_wrap ct_thumb">
                            <div class="ct_thumb">
                                <img src="{{ asset('/') }}neoshowerFiles/tus/p1.jpg" alt="review1" class="b-loaded">
                            </div>
                        </picture>
                        <div class="ct_content">
                            <div class="bodyContent">
                                <p><em><strong>"Godinama imam dermatitis. Probala sam kreme za kožu, menjala način ishrane, pa čak i istočnu medicinu, ali pomogao mi je samo ovaj tuš. Sada moja koža nije toliko suva i ne svrbi me, sem kada je izuzetno vruće napolju. I konačno mogu ponovo da trčim!"</strong></em></p>
                                <p style="text-align: right;"><strong>Mirjana, Kragujevac</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="ct_jumbotron testimonial_item">
                        <picture class="ct_thumb_wrap ct_thumb">
                            <div class="ct_thumb">
                                <img src="{{ asset('/') }}neoshowerFiles/tus/p2.jpg" alt="review2" class="b-loaded">
                            </div>
                        </picture>
                        <div class="ct_content">
                            <div class="bodyContent">
                                <p><em><strong>"Kupio sam ovaj tuš jer mi je neko rekao da će mi dosta uštedeti na računu za vodu. Bio sam malo skeptičan na početku, ali od kada ga koristimo naš račun za vodu je manji za skoro 10%. Možda je to zbog toga što se dugo tuširam, ali tuš se svakako isplatio nakon nekoliko meseci, tako da je svakako vredelo."</strong></em></p>
                                <p style="text-align: right;"><strong>Marko, Vršac</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="ct_jumbotron testimonial_item">
                        <picture class="ct_thumb_wrap ct_thumb">
                            <div class="ct_thumb">
                                <img src="{{ asset('/') }}neoshowerFiles/tus/p3.jpg" alt="review3" class="b-loaded">
                            </div>
                        </picture>
                        <div class="ct_content">
                            <div class="bodyContent">
                                <p><em><strong>"Nikada nisam imala bolji tuš od ovog! Moje jedino pitanje, kako sam do sada živela bez njega?!"</strong></em></p>
                                <p style="text-align: right;"><strong>Sonja, Požarevac</strong></p>
                            </div>
                        </div>
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-7">
            <div class="container">
                <div class="">
                    <div class="wysiwyg-content box_content ">
                        <h3><span>Oživite svoju kožu sa Neoshower tušem, najboljim samofiltrirajućim ekološkim tušem na svetu!
                        </span></h3>
                        <p><span>Iskoristite naš popust čak i do 40%, zalihe su ograničene!</span></p>
                        <div class="cta_order"><a class="btn-order tracking-link" href="{{$checkoutView}}"><span>ŽELIM POPUST OD 40%!</span></a></div>
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-8">
            <div class="container">
                <div class="">
                    <div class="wysiwyg-content">
                        <div class="DMCA_Logo" style="text-align: center;">
                            <a class="no-tracking">
                                <img src="{{ asset('/') }}shared_files/dmca.png" alt="DMCA Protection" class="b-loaded">
                            </a>
                        </div>
                    </div>
                    <div class="wysiwyg-content link-ft">
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-9">
            <div class="container">
                <div class="">
                    <div class="wysiwyg-content floating_bar floating-ft">
                        <p><span>Negujte svoju kožu i čuvajte novac u isto vreme
                        </span></p>
                        <div class="cta_order"><a href="{{$checkoutView}}" class="tracking-link">ISKORISTI 40% POPUSTA!<span></span></a></div>
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-10">
            <div class="container">
                <div class="">
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-11">
            <div class="container">
                <div class="">
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
    </main>
</div>
<script src="{{ asset('/') }}neoshowerFiles/tus/pre-1-aov.min.js.download"></script>
@include('components.pixel_footer')
</body>
</html>