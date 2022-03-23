<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}flexonikFiles/emsfoot/favicon.png" type="image/x-icon" />
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
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/emsfoot/styles.css" />
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <!-- offer -->
    <header class="offer_section offer_top">
        <div class="title_block">
            <p class="subtitle lt0">UGODNA MASAŽA STOPALA</p>
            <h1 class="main_title lt1">FOOT MASSAGER</h1>
            <p class="description lt2">
                ZA 23 MINUTA DNEVNO OPUSTITE SVOJE TELO
            </p>
        </div>
        <ul>
            <li class="lt3">TERAPIJA MAGNETOM</li>
            <li class="lt4">VIBRACIONA MASAŽA</li>
            <li class="lt5">INFRACRVENA TERAPIJA</li>
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
        <h2 class="lt18">ŠTA JE FOOT MASSAGER?</h2>
        <div class="text_block">
            <p class="lt19">
                Masažer Za Noge Za Stopala EMS , radi pomoću <b>EMS tehnologije (električna stimulacija mišića).</b>
            </p>
            <p class="lt20">
                Masažni mehanizam za noge opremljen je sa podlogom koja ima ugrađene <b>elektrode za stimulaciju stopala, zglobova, ahilovih tetiva,
                    kao i mišića tela.</b> Pravi kontrakciju mišića, opušta telo, a prvenstveno pojačava cirkulaciju krvi.
            </p>
        </div>
        <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/emsfoot/about__image_new.jpg" title="XPOWER2.0"/>
    </section>
    <!-- /about -->
    <section class="benefits_section">
        <h2 class="lt21">ŠTA DOBIJATE OD FOOT MASSAGERA?</h2>
        <div class="benefits_list">
            <div class="benefit_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/emsfoot/benefits__benefit1_image.jpg" title="XPOWER2.0"/>
                <p class="lt22">Relaksacija stopala</p>
            </div>
            <div class="benefit_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/emsfoot/benefits__benefit2_image.jpg" title="XPOWER2.0"/>
                <p class="lt23">Oslobađa umorne mišiće stopala i tela, te poboljšava cirkulaciju krvi</p>
            </div>
            <div class="benefit_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/emsfoot/benefits__benefit3_image.jpg" title="XPOWER2.0"/>
                <p class="lt24">Poboljšava opšte stanje organizma</p>
            </div>
            <div class="benefit_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/emsfoot/benefits__benefit4_image.jpg" title="XPOWER2.0"/>
                <p class="lt25">Oslobađa glavobolje i poboljšava san</p>
            </div>
        </div>
        <div class="text_block lt26">
            I SVE TO BEZ NAPORNOG TRENINGA I IZLASKA IZ KUĆE
            <b>ZA SAMO 23 MINUTA DNEVNO</b>
        </div>
    </section>
    <!-- /benefits -->
    <!-- info -->
    <section class="info_section">
        <h2 class="lt27">
            DEJSTVA FOOT MASSAGERA:
        </h2>
        <ul>
            <li class="lt28">
                <b>Terapija magnetom.</b> Koristi veštačko magnetno polje da biste ispraznili svoje meridianske stavove i regenerisali umorne ćelije.
            </li>
            <li class="lt29">
                Vibraciona masaža stimuliše i <b>pospešuje cirkulaciju krvi</b> i na taj način smanjuje umor.
            </li>
            <li class="lt30">
                Terapija infracrvenim dejstvom <b>aktivira bio-molekule u vašem telu</b> koji pospešuju fiziološku cirkulaciju i pomažu u apsorpciji magneta.
            </li>
            <li class="lt31">
                Otisnuti krugovi sa <b>jonskim prijatnim dejstvom</b> pružaju ugodno iskustvo na zdrav način.
            </li>
            <li class="lt32">
                Foot Massager za noge pogodnan je za <b>putnike, sredovečne i starije ljude.</b>
            </li>
        </ul>
    </section>
    <!-- /info -->
    <!-- slider -->
    <div class="slider owl-carousel">
        <img src="{{ asset('/') }}flexonikFiles/emsfoot/slider__image1.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
        <img src="{{ asset('/') }}flexonikFiles/emsfoot/slider__image2.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
        <img src="{{ asset('/') }}flexonikFiles/emsfoot/slider__image3.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
        <img src="{{ asset('/') }}flexonikFiles/emsfoot/slider__image4.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
    </div>
    <!-- /slider -->
    <!-- order steps -->
    <section class="order_steps_section">
        <h2 class="lt33">KAKO PORUČITI FOOT MASSAGER?</h2>
        <div class="steps_list">
            <div class="step_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/emsfoot/order_steps__step1_image.jpg" title="XPOWER2.0"/>
                <div class="number">1</div>
                <p class="lt34">Popunite formular na našem sajtu</p>
            </div>
            <div class="step_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/emsfoot/order_steps__step2_image.jpg" title="XPOWER2.0"/>
                <div class="number">2</div>
                <p class="lt35">Kontaktiraće vas naša korisnička podrška</p>
            </div>
            <div class="step_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/emsfoot/order_steps__step3_image.jpg" title="XPOWER2.0"/>
                <div class="number">3</div>
                <p class="lt36">Robu šaljemo brzom poštom u roku od 1-2 radna dana</p>
            </div>
            <div class="step_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/emsfoot/order_steps__step4_image.jpg" title="XPOWER2.0"/>
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
                <img src="{{ asset('/') }}flexonikFiles/emsfoot/reviews__review1_photo.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
                <div class="author_info">Verica Amidžić, Beograd</div>
                <p>Mnogo vremena dnevno provedem stojeći, kada dođem uveče kući noge mi trne i budem jako umorna.
                    Poručila sam Foot Massager, i mogu da vam kažem da se odlično osećam. Izmasira mi stopala i opusti celo telo.
                    Osećam momentalno opuštanje, osećaj je jako prijatan. Sve preporuke za ovaj proizvod.</p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}flexonikFiles/emsfoot/reviews__review2_photo.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
                <div class="author_info">Oliver Petrović, Kragujevac</div>
                <p>Imao sam problem sa bolnom petom, nema šta nisam pokušao, koristio sam razne meleme i kreme ali bezuspešno.
                    Sestra mi je poručila ovaj proizvod preko interneta, i već posle nekoliko dana sam osetio olakšanje.
                    Koristim ga nešto duže od mesec dana, i bol je potpuno nestao, kao rukom odnešen.</p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}flexonikFiles/emsfoot/reviews__review3_photo.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
                <div class="author_info">Jelena Trninić, Kikinda</div>
                <p>Obožavam masažere i kupila sam za sve delove tela. Kada sam videla da ima i za stopala potpuno sam se oduševila.
                    I prije nego mi je stigao, znala sam da će biti odličan. Uživanje kakvo ne možete da zamislite. Preporučila bih ga svakome.</p>
            </div>
        </div>
    </section>
    <!-- /reviews -->
    <!-- offer -->
    <section class="offer_section offer_bottom">
        <div class="title_block">
            <p class="subtitle lt54">
                UGODNA MASAŽA STOPALA
            </p>
            <h4 class="main_title lt55">FOOT MASSAGER</h4>
            <p class="description lt56">
                ZA 23 MINUTA DNEVNO OPUSTITE SVOJE TELO
            </p>
        </div>
        <ul>
            <li class="lt57">TERAPIJA MAGNETOM</li>
            <li class="lt58">VIBRACIONA MASAŽA</li>
            <li class="lt59">INFRACRVENA TERAPIJA</li>
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
                <div class="form-group">
                    <div class="col-xs-12">
                        <label><b>Adresa</b></label>
                        <input class="form-control input-lg other-simple-data" type="text" placeholder="Ulica i broj" name="shipping_address"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label><b>Grad</b></label>
                        <input class="form-control input-lg other-simple-data" type="text" placeholder="Grad" name="shipping_city"/>
                    </div>
                </div>
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