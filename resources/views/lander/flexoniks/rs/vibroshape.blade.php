<!DOCTYPE html>
<html class="no-js">
<head>
    @include('components.pixel_init')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Linearicons-Free';
            src:url('{{ asset('/') }}fonts/Linearicons-Free.eot@w118d');
            src:url('{{ asset('/') }}fonts/Linearicons-Free.eot@') format('embedded-opentype'),
            url('{{ asset('/') }}fonts/Linearicons-Free.woff@w118d') format('woff'),
            url('{{ asset('/') }}fonts/Linearicons-Free.ttf@w118d') format('truetype'),
            url('{{ asset('/') }}fonts/Linearicons-Free.svg@w118d') format('svg');
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: "FontAwesome";
            src: url("{{ asset('/') }}fonts/fontawesome-webfont.eot");
            src: url("{{ asset('/') }}fonts/fontawesome-webfont.eot") format("embedded-opentype"),
            url("{{ asset('/') }}fonts/fontawesome-webfont.woff2") format("woff2"),
            url("{{ asset('/') }}fonts/fontawesome-webfont.woff") format("woff"),
            url("{{ asset('/') }}fonts/fontawesome-webfont.ttf") format("truetype"),
            url("{{ asset('/') }}fonts/fontawesome-webfont.svg") format("svg");
            font-weight: normal;
            font-style: normal;
        }
        #submit-button {
            background-color: #5cb85c;
            color: #fff;
        }
        .form-control {
            line-height: 2 !important;
        }
        label {
            font-size: 16px !important;
        }
        .price {
            font-size: 34px;
            margin-bottom: 20px;
        }
        @media (max-width: 767px){
            .price {
                font-size: 30px !important;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/vibroshape/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/vibroshape/main.css">
</head>
<body>
<div class="oz-body-wrap">
    @include('components.display_errors')
    <!-- Start Header Area -->
    <header class="default-header">
        <div class="container-fluid">
            <div class="header-wrap">
                <div class="header-top d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="#">Vibro Shape®</a>
                    </div>
                    <div class="main-menubar d-flex align-items-center">
                        <nav class="hide">
                            <a href="#home">Vibro Shape®</a>
                            <a href="#comefunziona">Kako funkcioniše</a>
                            <a href="#ordina">Poručite sada</a>
                        </nav>
                        <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Banner Area -->
    <section class="banner-area relative" id="home">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-center">
                <div class="banner-left col-lg-6">
                    <img class="d-flex mx-auto img-fluid" src="{{ asset('/') }}flexonikFiles/vibroshape/cintura.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="story-content">
                        <h6 class="text-uppercase">VIBRO SHAPE® JE MASAŽNI POJAS ZA MRŠAVLJENJE</h6>
                        <h1><span class="sp-1">Dobijate <span class="sp-2">savršenu figuru</span> bez napora!</span></h1>
                        <h2 class="price">
                            <span class="sp-1" style="color: #222;"><del>{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</del></span>
                            <span class="sp-2" style="color: #f37a1d;">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</span>
                        </h2>
                        <a href="#ordina" class="genric-btn primary circle arrow">PORUČITE ODMAH <span class="lnr lnr-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <!-- Start Video Area -->
    <section class="video-area pt-40 pb-40">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="video-content">
                <div class="text-center">
                    <h3 class="h2 text-white text-uppercase">UKLONITE MASNOĆU SA NEKOLIKO MINUTA VEŽBE DNEVNO</h3>
                    <h4 class="text-white">Samo stavite Vibro Shape® pojas oko željenog područja 10 minuta dnevno.
                        Tehnologija mišićnih vibracija <b><u>aktivno sagoreva masne ćelije.</u></b>.</h4>
                    <a href="#ordina" class="genric-btn primary circle arrow">PORUČITE ODMAH <span class="lnr lnr-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Video Area -->
    <!-- Start about Area -->
    <section class="about-area pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="story-content">
                        <h2>Izgubite težinu <br>
                            <span>brzo i bez napora</span>
                        </h2>
                        <p class="mt-30">Zahvaljujući svojoj jednostavnosti i praktičnosti, Vibro Shape® je idealan za one koji imaju malo vremena da se posvete
                            svojoj fizičkoj formi, a posebno za one koji žele da <b><u>treniraju kod kuće, bez troškova</u></b> i da se istovremeno bave drugim aktivnostima.
                        </p>
                        <a href="#ordina" class="genric-btn primary circle arrow">PORUČITE ODMAH <span class="lnr lnr-arrow-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-flex mx-auto imgborder" src="{{ asset('/') }}flexonikFiles/vibroshape/cinturaindossata.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Force Area -->
    <!-- Start Feature Area -->
    <section class="feature-area pt-100 pb-100  relative" id="comefunziona">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
                    <div class="single-feature">
                        <div class="icon">
                            <span class="fa fa-check-circle"></span>
                        </div>
                        <div class="desc">
                            <h2 class="text-uppercase">NAJLAKŠI I NAJBRŽI NAČIN</h2>
                            <p>Stavite podesivi Vibro Shape® pojas, uključite prekidač i prepustite se <b><u>vibracijama koje prave oscilirajuću masažu.</u></b></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
                    <div class="single-feature">
                        <div class="icon">
                            <span class="fa fa-check-circle"></span>
                        </div>
                        <div class="desc">
                            <h2 class="text-uppercase">GUBITE DODATNE CENTIMETRE</h2>
                            <p>Postavite Vibro Shape® pojas na specifičan problematičniji deo tela (stomak, bokovi, butine, zadnjica) da biste poboljšali <b><u>tonus i elastičnost.</u></b></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
                    <div class="single-feature">
                        <div class="icon">
                            <span class="fa fa-check-circle"></span>
                        </div>
                        <div class="desc">
                            <h2 class="text-uppercase">BORI SE PROTIV CELULITA</h2>
                            <p>Vibro Shape® je u stanju da <b><u>stimuliše cirkulaciju, pospešuje oksigenizaciju tkiva</u></b> i tonizuje vaše telo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
                    <div class="single-feature">
                        <div class="icon">
                            <span class="fa fa-check-circle"></span>
                        </div>
                        <div class="desc">
                            <h2 class="text-uppercase">POJAS ZA MRŠAVLJENJE I MASAŽU</h2>
                            <p>Vibro Shape® pospešuje remodeliranje stomaka, kukova, butina i zadnjice u <b><u>samo nekoliko minuta svakodnevne upotrebe,</u></b> zahvaljujući svom
                                efikasnom sistemu masaže.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
                    <div class="single-feature">
                        <div class="icon">
                            <span class="fa fa-check-circle"></span>
                        </div>
                        <div class="desc">
                            <h2 class="text-uppercase">NOSITE GA KAD GOD ŽELITE</h2>
                            <p>Vibro Shape® pojas će pomoći da <b><u>tonirate i oblikujete mišićne grupe celog tela</u></b> iz udobnosti vašeg doma.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
                    <div class="single-feature">
                        <div class="icon">
                            <span class="fa fa-check-circle"></span>
                        </div>
                        <div class="desc">
                            <h2 class="text-uppercase">POVEĆAJTE SVOJE BLAGOSTANJE</h2>
                            <p>Vibro Shape® pospešuje <b><u>varenje, pomaže zdravlju kože, tonira i poboljšava mišićnu masu.</u></b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start about Area -->
    <section class="about-area pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid d-flex mx-auto" src="{{ asset('/') }}flexonikFiles/vibroshape/scatola.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="story-content">
                        <h2>Radite <span>dve vežbe</span><br> u isto vreme</h2>
                        <p class="mt-30">Sa Vibro Shape® pojasom radite dve vežđbe u jednoj: <b><u>mišićne kontrakcije i vibracije.</u></b><br>
                            Elektrostimulacija mišića šalje mišićima <b><u>isti signal koji bi inače poslala mozgu</u></b> da ih natera da se kontrakuju i opuste,
                            kao kada radite vežbe za stomak. Vibracije, s druge strane pomažu da izgubite masnoću.
                        </p>
                        <a href="#ordina" class="genric-btn primary circle arrow">PORUČITE ODMAH <span class="lnr lnr-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Force Area -->
    <!-- Start Banner Area -->
    <section class="generic-banner elements-banner relative pt-100 pb-100">
        <div class="container">
            <div class="row  align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="banner-content text-center">
                        <img class="d-flex mx-auto img-fluid widimg50" src="{{ asset('/') }}flexonikFiles/vibroshape/cintura.jpg" alt="">
                        <h2><b>Toniranje,</b> sagorevanje i masaža</h2>
                        <p>Vibro Shape® pojas za mršavljenje je dizajniran za sagorevanje masti, masažu i zatezanje mišića, zahvaljujući kombinaciji
                            različitih programa <b><u>dvostrukih oscilacija i vibracija i njegovih 5 brzina.</u></b></p>
                        <a href="#ordina" class="genric-btn primary circle arrow">PORUČITE ODMAH</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <section class="contact-area pt-100 pb-100 relative" id="ordina">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="single-contact col-lg-12 col-md-12">
                    <h2 class="text-white">NEVEROVATNI <span>VIBRACIONI POJAS ZA MASAŽU</span> Vibro Shape®</h2>
                    <p class="text-white">
                        Unesite podatke za dostavu u nastavku i kliknite na <b>"PORUČITE SADA".</b>
                        U najkraćem roku ćemo potvrditi vašu porudžbinu.
                        <b><u>Plaćate po prijemu pošiljke.</u></b>
                    </p>
                </div>
            </div>
            <form method="post" action="{{$orderRoute}}" style="background: #fff; padding: 5%;color:#000">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <h2 class="price text-center">
                    <span class="sp-1" style="color: #222;"><del>{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</del></span>
                    <span class="sp-2" style="color: #f37a1d;">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</span>
                </h2>
                <center>
                    <h3 class="title">PODACI ZA DOSTAVU</h3>
                </center>
                <br>
                <div class="form-group">
                    <label>Ime i prezime</label>
                    <input type="text" name="name" class="form-control" placeholder="Ime i prezime" required="required"/>
                </div>
                <div class="form-group">
                    <label>Telefon</label>
                    <input type="tel" name="phone" class="form-control" placeholder="Telefon" required="required"/>
                </div>
                <div class="form-group">
                    <label>Adresa</label>
                    <input type="text" name="shipping_address" class="form-control" placeholder="Ulica i broj" required="required"/>
                </div>
                <div class="form-group">
                    <label>Grad</label>
                    <input type="text" name="shipping_city" class="form-control" placeholder="Grad" required="required"/>
                </div>
                <center>
                    <button id="submit-button" class="btn btn-lg btn-warning new-sbm-btn" type="submit">PORUČITE SADA</button>
                </center>
            </form>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}flexonikFiles/vibroshape/popper.min.js"></script>
<script src="{{ asset('/') }}shared_files/bootstrap.js"></script>
<script>
    $(document).ready(function(){
        "use strict";
        var window_width 	 = $(window).width(),
            window_height 		 = window.innerHeight,
            header_height 		 = $(".default-header").height(),
            header_height_static = $(".site-header.static").outerHeight(),
            fitscreen 			 = window_height - header_height;
        $(".fullscreen").css("height", window_height);
        $(".fitscreen").css("height", fitscreen);
        $(".menu-bar").on('click', function(e){
            e.preventDefault();
            $("nav").toggleClass('hide');
            $("span", this).toggleClass("lnr-menu lnr-cross");
            $(".main-menu").addClass('mobile-menu');
        });
        $('a[href^="#"]').click(function (){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        })
    });
</script>
@include('components.pixel_footer')
</body>
</html>
