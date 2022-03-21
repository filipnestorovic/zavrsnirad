<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}flexonikFiles/ems_novi/favicon.png" type="image/x-icon" />
    <style>
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: local('Roboto'), local('Roboto-Regular'), url({{ asset('/') }}fonts/roboto.ttf) format('truetype');
        }
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: local('Roboto Bold'), local('Roboto-Bold'), url({{ asset('/') }}fonts/robotobold.ttf) format('truetype');
        }
        label {
            margin-bottom: 5px !important;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}shared_files/owl.carousel.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/ems_novi/styles.css" />
</head>
<body>
<div class="main_wrapper">
@include('components.display_errors')
<!-- offer -->
    <header class="offer_section offer_top">
        <div class="title_block">
            <p class="subtitle lt0">EFIKASAN TRENING MIŠIĆA</p>
            <h1 class="main_title lt1">XPOWER2.0</h1>
            <p class="description lt2">
                23 MINUTA DNEVNO JE DOVOLJNO ZA IDEALNO TELO
            </p>
        </div>
        <ul>
            <li class="lt3">SAGOREVA MASNOĆE</li>
            <li class="lt4">DEFINIŠE MIŠIĆE</li>
            <li class="lt5">ČINI TELO PRIVLAČNIM</li>
        </ul>
        <div class="discount">
            <b class="lt6">Popust</b>
            <span class="lt7">-40%</span>
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text lt8">
                    Stara cena:
                </div>
                <div class="value lt9">
                    {{ $prices[1]['originalPrice'] }} RSD
                </div>
            </div>
            <div class="price_item new">
                <div class="text lt10">
                    Nova cena:
                </div>
                <div class="value lt11">
                    {{ $prices[1]['amount'] }} RSD
                </div>
            </div>
        </div>
        <br>
        <a class="button lt16" href="#order-form">Poručite sada</a>
    </header>
    <!-- /offer -->
    <!-- about -->
    <section class="about_section">
        <h2 class="lt18">ALI ŠTA JE XPOWER2.0?</h2>
        <div class="text_block">
            <p class="lt19">
                XPOWER2.0 JE dizajniran za skidanje telesne težine, izgradnju mišićne mase  i opuštanje mišića.
            </p>
            <p class="lt20">
                Elektrostimulator za mršavljenje <b>XPOWER2.0 garantuje brz rezultat bez posebnih napora,</b> zahvaljujući snažnom delovanju masažera.
                Upotrebom elektrostimulatora postiže se sagorevanje masti, mišići i koža postaju <b>zategnutiji i elastičniji,</b> a telo će biti kao izvajano.
            </p>
        </div>
        <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/ems_novi/about__image_new.jpg" title="XPOWER2.0"/>
    </section>
    <!-- /about -->
    <section class="benefits_section">
        <h2 class="lt21">ŠTA XPOWER2.0 PRUŽA?</h2>
        <div class="benefits_list">
            <div class="benefit_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/ems_novi/benefits__benefit1_image.jpg" title="XPOWER2.0"/>
                <p class="lt22">Korekcija problematičnih područja</p>
            </div>
            <div class="benefit_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/ems_novi/benefits__benefit2_image.jpg" title="XPOWER2.0"/>
                <p class="lt23">Ciljani trening mišića</p>
            </div>
            <div class="benefit_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/ems_novi/benefits__benefit3_image.jpg" title="XPOWER2.0"/>
                <p class="lt24">Jača telo</p>
            </div>
            <div class="benefit_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/ems_novi/benefits__benefit4_image.jpg" title="XPOWER2.0"/>
                <p class="lt25">Gubitak težine</p>
            </div>
        </div>
        <div class="text_block lt26">
            I SVE TO BEZ NAPUŠTANJA KUĆE I BEZ NAPORA
            <b>ZA 23 MINUTA DNEVNO!</b>
        </div>
    </section>
    <!-- /benefits -->
    <!-- info -->
    <section class="info_section">
        <h2 class="lt27">
            XPOWER2.0 IDEALAN JE TRENAŽER ZA SVE ONE KOJI:
        </h2>
        <ul>
            <li class="lt28">
                Nemaju vremena ni snage da idu u teretane, ali žele lepe mišiće
            </li>
            <li class="lt29">
                Imaju sedeći način života i žele da poprave stanje tela
            </li>
            <li class="lt30">
                Žele da izgube težinu bez previše truda
            </li>
            <li class="lt31">
                Već treniraju, ali žele savršeno da oblikuju mišiće
            </li>
            <li class="lt32">
                Uvek žele da im telo bude u formi, ali bez trošenja energije i vremena
            </li>
        </ul>
    </section>
    <!-- /info -->
    <!-- slider -->
    <div class="slider owl-carousel">
        <img src="{{ asset('/') }}flexonikFiles/ems_novi/slider__image1.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
        <img src="{{ asset('/') }}flexonikFiles/ems_novi/slider__image2.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
        <img src="{{ asset('/') }}flexonikFiles/ems_novi/slider__image3.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
        <img src="{{ asset('/') }}flexonikFiles/ems_novi/slider__image4.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
    </div>
    <!-- /slider -->
    <!-- order steps -->
    <section class="order_steps_section">
        <h2 class="lt33">KAKO PORUČITI XPOWER2.0?</h2>
        <div class="steps_list">
            <div class="step_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/ems_novi/order_steps__step1_image.jpg" title="XPOWER2.0"/>
                <div class="number">1</div>
                <p class="lt34">Popunite formular na našem sajtu</p>
            </div>
            <div class="step_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/ems_novi/order_steps__step2_image.jpg" title="XPOWER2.0"/>
                <div class="number">2</div>
                <p class="lt35">Kontaktiraće vas naša korisnička podrška</p>
            </div>
            <div class="step_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/ems_novi/order_steps__step3_image.jpg" title="XPOWER2.0"/>
                <div class="number">3</div>
                <p class="lt36">Robu šaljemo brzom poštom u roku od 1-2 radna dana</p>
            </div>
            <div class="step_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/ems_novi/order_steps__step4_image.jpg" title="XPOWER2.0"/>
                <div class="number">4</div>
                <p class="lt37">Plaćanje po pouzeću</p>
            </div>
        </div>
        <a class="button lt38" href="#order-form">Poručite sada</a>
    </section>
    <!-- /order steps -->
    <!-- reviews -->
    <section class="reviews_section">
        <h2 class="lt39">Utisci naših kupaca</h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img src="{{ asset('/') }}flexonikFiles/ems_novi/reviews__review1_photo.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
                <div class="author_info">Darko Tomić, 30 godina</div>
                <p>Testirao sam ga na bicepsu. Čim sam aktivirao trenažer, bio sam šokiran, samo što nisam vrisnuo.
                    Ruka se sama podigla, biceps se stegao i počeo se kretati u ritmu koji sam mu zadao na trenažeru.
                    Učinak je odmah nakon treninga bio vidljiv. Odličan rezultat za kratko vreme.</p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}flexonikFiles/ems_novi/reviews__review2_photo.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
                <div class="author_info">Dušan Pavićević, 35 godina</div>
                <p>Sveukupno, efekat trenažera je iznad mojih očekivanja. Nisam mogao ni da zamislim da je tako dobro.
                    Mišići se skupljaju i „rade“ bez vaše pomoći. Ovaj uređaj je odličan!
                    Ako vreme provodite sedeći i ležeći, vaši mišići neće biti aktivni i počeće da atrofiraju.
                    Evo sigurnog načina da ih pokrenete sa XPOWER2.0 trenažerom!</p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}flexonikFiles/ems_novi/reviews__review3_photo.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
                <div class="author_info">Radmila Krstić, 29 godina</div>
                <p>EMS trenažer privukao mi je pažnju od samog početka, ali nisam mogla da verujem da ovako dobro deluje.
                    Nemam vremena za teretanu, a htela sam svoje telo dovesti u savršenu formu.
                    Kad sam ga prvi put uključila, bila sam šokirana. Mišići su se sami stezali.
                    Nisam radila apsolutno ništa, a oni su nakon svakog treninga bili sve bolji i bolji.
                    U mesec dana sam izgubila 6 kg i postala sam vitkija!</p>
            </div>
        </div>
    </section>
    <!-- /reviews -->
    <!-- offer -->
    <section class="offer_section offer_bottom">
        <div class="title_block">
            <p class="subtitle lt54">
                EFIKASAN TRENING MIŠIĆA
            </p>
            <h4 class="main_title lt55">XPOWER2.0</h4>
            <p class="description lt56">
                23 MINUTA DNEVNO JE DOVOLJNO ZA IDEALNO TELO
            </p>
        </div>
        <ul>
            <li class="lt57">SAGOREVA MASNOĆE</li>
            <li class="lt58">DEFINIŠE MIŠIĆE</li>
            <li class="lt59">ČINI TELO PRIVLAČNIM</li>
        </ul>
        <div class="discount">
            <b class="lt60">Popust</b>
            <span class="lt61">-40%</span>
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text lt62">
                    Stara cena:
                </div>
                <div class="value lt63">
                    {{ $prices[1]['originalPrice'] }} RSD
                </div>
            </div>
            <div class="price_item new">
                <div class="text lt64">
                    Nova cena:
                </div>
                <div class="value lt65">
                    {{ $prices[1]['amount'] }} RSD
                </div>
            </div>
        </div>
        <div class="lt70" style="margin: 30px 40px 30px; color: #fff; text-align: center;">

        </div>
        <form action="{{$orderRoute}}" class="lead_form" id="order-form" method="post">
            {{csrf_field()}}
            @include('lander.naturapharm.components.form_hidden_fields')
            <div class="row">
                <center>
                    <h3 class="title" style="font-size: 22px;">PODACI ZA DOSTAVU</h3>
                </center>
                <br>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label><b>Ime i prezime</b></label>
                        <input class="form-control input-lg name" type="text" placeholder="Ime i prezime" name="name" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label><b>Telefon</b></label>
                        <input class="form-control input-lg phone" type="tel" id="phone" placeholder="Telefon" name="phone" required="required"/>
                    </div>
                </div>
                {{--<div class="form-group">--}}
                    {{--<div class="col-xs-12">--}}
                        {{--<label><b>Adresa</b></label>--}}
                        {{--<input class="form-control input-lg other-simple-data" type="text" placeholder="Ulica i broj" name="shipping_address"/>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<div class="col-xs-12">--}}
                        {{--<label><b>Grad</b></label>--}}
                        {{--<input class="form-control input-lg other-simple-data" type="text" placeholder="Grad" name="shipping_city"/>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <center>
                    <button id="submit-button" class="btn btn-lg btn-success" style="margin-top: 20px;font-size: 22px;" type="submit">
                        ZAVRŠITE PORUDŽBINU
                    </button>
                </center>
            </div>
        </form>
    </section>
    <!-- /offer -->
</div>
<!-- scripts -->
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $("a[href^='#']").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
            return false;
        });
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            smartSpeed: 300,
            mouseDrag: false,
            pullDrag: false,
            dots: false,
            nav: true,
            navText: ""
        });
    });
</script>
<!-- /scripts -->
@include('components.pixel_footer')
</body>
</html>