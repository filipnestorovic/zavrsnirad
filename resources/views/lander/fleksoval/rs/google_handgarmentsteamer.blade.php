<!DOCTYPE html>
<html>
<head>
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
    <meta property="og:title" content="{{ $product->product_name }} | {{ $product->brand_name }}">
    <meta property="og:description" content="{{ $product->product_name }}">
    <meta property="og:image" content="{{ asset('/').$product->product_image }}">
    <meta property="og:url" content="{{ $product->domain_url }}/{{ $product->slug }}">
    <title>{{ $product->product_name }} | {{ $product->brand_name }}</title>

    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link href="{{ asset('/') }}shared_files/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/bundle.css">
    <style>
        @font-face {
            font-family: OpenSans;
            src: url({{ asset('/') }}fonts/OpenSans.eot);
            src: url({{ asset('/') }}fonts/OpenSans.eot#iefix) format("embedded-opentype"), url({{ asset('/') }}fonts/OpenSans.woff) format("woff"), url({{ asset('/') }}fonts/OpenSans.ttf) format("truetype");
            font-style: normal;
            font-weight: 400
        }

        @font-face {
            font-family: OpenSans;
            src: url({{ asset('/') }}fonts/OpenSans-Bold.eot);
            src: url({{ asset('/') }}fonts/OpenSans-Bold.eot#iefix) format("embedded-opentype"), url({{ asset('/') }}fonts/OpenSans-Bold.woff) format("woff"), url({{ asset('/') }}fonts/OpenSans-Bold.ttf) format("truetype");
            font-style: normal;
            font-weight: 700
        }

        @font-face {
            font-family: BebasNeueRegular;
            src: url({{ asset('/') }}fonts/BebasNeueRegular.eot);
            src: url({{ asset('/') }}fonts/BebasNeueRegular-.eot#iefix) format("embedded-opentype"), url({{ asset('/') }}fonts/BebasNeueRegular.woff) format("woff"), url({{ asset('/') }}fonts/BebasNeueRegular.ttf) format("truetype");
            font-style: normal;
            font-weight: 400
        }

        @font-face {
            font-family: BebasNeueBold;
            src: url({{ asset('/') }}fonts/BebasNeueBold.eot);
            src: url({{ asset('/') }}fonts/BebasNeueBold-.eot#iefix) format("embedded-opentype"), url({{ asset('/') }}fonts/BebasNeueBold.woff) format("woff"), url({{ asset('/') }}fonts/BebasNeueBold.ttf) format("truetype");
            font-style: normal;
            font-weight: 400
        }
    </style>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NQ9BCN8');</script>
    <!-- End Google Tag Manager -->
</head>
<body class="lang-ro">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQ9BCN8"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Modal -->
@include('components.display_errors')
<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-8">
                <div class="top-logo">Garment Steamer</div>
            </div>
            <div class="col-md-3 col-md-push-7 col-sm-6 mobile-section">
                <div class="top-button"><a href="#order">Poručite odmah</a></div>
            </div>
            <div class="col-md-7 col-md-pull-3 col-sm-9 col-xs-4">
                <ul class="top-menu">
                    <li><a href="#ex1"> 8 razloga da kupite</a></li>
                    <li><a href="#ex2"> ZAŠTO <span>GARMENT STEAMER</span></a></li>
                    <li><a href="#ex4"> Preporuke</a></li>
                    <li><a href="#ex5"> Kako poručiti</a></li>
                </ul>
                <a href="#" class="menu-icon" id="menu-icon">
                    <div class="icon-list icon2x"></div>
                </a>
                <ul id="menu-mobile-menu" class="menu">
                    <li><a href="#ex1"> 8 razloga da kupite</a></li>
                    <li><a href="#ex2"> ZAŠTO <span>GARMENT STEAMER</span></a></li>
                    <li><a href="#ex4"> Preporuke</a></li>
                    <li><a href="#ex5"> Kako poručiti</a></li>
                    <li class="call-modal"><a href="#order">Poručite odmah</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="main">
    <div class="container">
        <div class="main-top">
            PEGLANJE STVARI NA OFINGERU ZA POLA MINUTA?<br>
            <p>DA MOGUĆE JE SA OVOM MOĆNOM PEGLOM</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 main-form">
                <div class="main-act"> POŽURITE DA PORUČITE <br><span> POPUST -40%</span></div>
                <form class="form" method="POST" action="{{$orderRoute}}">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input type="hidden" name="utm_medium" value="google">
                    <input name="name" class="main-name" placeholder="Ime i prezime" type="text" data-ordername
                           required>
                    <input name="phone" class="main-tell" placeholder="Telefon" type="tel" data-orderphone required>
                    <button type="submit" class="main-button" data-ordersubmit>PORUČITE SA 40% POPUSTA</button>
                </form>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="main-price">
                    <div class="main-price-text"> AKCIJA</div>
                    <div class="main-price-old">
                        <span class="price_land_s4">
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <span class="price_land_curr">
                           {{ $prices[1]['currency'] }}
                        </span>
                    </div>
                    <div class="main-price-new">
                        <span class="price_land_s1">
                           {{ $prices[1]['amount'] }}
                        </span>
                        <span class="price_land_curr">
                           {{ $prices[1]['currency'] }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <img class="main-img" src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/body-brush.png">
            </div>
        </div>
    </div>
</div>
<div class="reason" id="#ex1">
    <div class="container">
        <div id="ex1" class="reason-top">8 RAZLOGA DA KUPITE HAND GARMENT STEAMER</div>
        <div class="row">
            <div class="col-md-4">
                <img class="reason-img" src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/reason-img.png">
            </div>
            <div class="col-md-8">
                <div class="reason-list">
                    <p><span> 1.</span> MOŽETE DA PEGLATE KOŠULJE, HALJINE I DRUGU ODEĆU DOK SU JOŠ NA OFINGERU. VRLO
                        LAKO I JEDNOSTAVNO PEGLANJE</p>
                    <p><span> 2.</span> NE OŠTEĆUJE TKANINU, NE RASTEŽE JE I NE UNIŠTAVA VLAKNA. DAJE VOLUMEN,
                        ELASTIČNOST I SJAJ ODEĆI</p>
                    <p><span> 3.</span> PARNA PEGLA ZA VERTIKALNO PEGLANJE IDEALNA JE ZA PEGLANJE KOŽNE ODEĆE, KRZNA
                        (DOBIJA SE POSEBAN ZAŠTITNI NASTAVAK)</p>
                    <p><span> 4.</span> DAJE NOVI IZGLED OSETLJIVIM TKANINAMA: PAMUK, LAN, TRIKOTAŽA, SVILA, ČIPKA. LAKO
                        SE PEGLA ODEĆA KOJA NE SEBI IMA NAKIT, METALNE DELOVE, ŠLJOKICE I DRUGO.</p>
                    <p><span> 5.</span> DEZINFEKCIJA DONJEG VEŠA BEZ KORIŠĆENJA DEZINFEKCIONIH SREDSTAVA. OVO JE IDEALNO
                        UKOLIKO IMATE MALU DECU</p>
                    <p><span> 6.</span> ZAHVALJUJUĆI JAKOJ PARI, OVA PEGLA POMAŽE U EFIKASNOM UKLANJANJU KRPELJA, UBIJA
                        KLICE I BAKTERIJE</p>
                    <p><span> 7.</span> PARA PRODIRE KROZ TKANINU BEZ KONTAKTA PLOČE ZA PEGLANJE, TE NA TAJ NAČIN
                        IZBEGAVATE DA PROGORITE OSETLJIVE MATERIJALE</p>
                    <p><span> 8.</span> KORISTEĆI OVU PEGLU, MOŽETE LAKO ISPEGLATI ZAVESE, TAKO ŠTO ĆETE IH ODMAH POSLE
                        PRANJA OKAČITI NA GARNIŠNU
                    </p>
                </div>
            </div>
        </div>
    </div>
    <img class="bord1" src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/bord1.png">
</div>
<div class="why" id="ex2">
    <div class="container">
        <div class="why-top">ZAŠTO HAND GARMENT STEAMER?</div>
        <div class="row">
            <div class="col-sm-6">
                <div class="why-name">OBIČNE PEGLE</div>
                <img class="why-img" src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/why1.jpg">
                <div class="why-list">
                    <p>OSTAVLJAJU VLAŽNE MRLJE NA ODEĆI</p>
                    <p>TEŠKO PEGLAJU DUBOKE NABORE NA TKANINI</p>
                    <p>PREVELIKE SU I NEPRAKTIČNE</p>
                    <p>NISU DOVOLJNO JAKE DA PEGLAJU TEBELE TKANINE</p>
                    <p>UNIŠTAVAJU STRUKTURU VLAKNA</p>
                    <p>MOŽE LAKO DA SE PROGORI TKANINA</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="why-name">HAND GARMENT STEAMER</div>
                <img class="why-img" src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/why2.jpg">
                <div class="why-list2">
                    <p>NE OSTAVLJA TRAG NA TKANINI</p>
                    <p>SNAŽAN MLAZ PARE ISPRAVLJA ČAK I TEŠKO DOSTUPNA MESTA NA ODEĆI</p>
                    <p>KOMPAKTNA I JEDNOSTAVNA ZA UPOTREBU</p>
                    <p>PEGLA I NAJDEBLJU I NAJTVRĐU TKANINU</p>
                    <p>NE OŠTEĆUJE OSETLJIVE TKANINE</p>
                    <p>UZ SIGURNOSNI NASTAVAK NEMA ŠANSE DA SE PROGORI TKANINA</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="order">
    <div class="container">
        <div class="order-top"> POŽURITE DA PORUČITE PEGLU SA 40% POPUSTA</div>
        <div class="row">
            <form class="form mid-form" method="POST" action="{{$orderRoute}}">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="hidden" name="utm_medium" value="google">
                <div class="col-sm-4">
                    <input name="name" class="order-name" placeholder="Ime i prezime" type="text" data-ordername
                           required>
                </div>
                <div class="col-sm-4">
                    <input name="phone" class="order-tell" placeholder="Telefon" type="tel" data-orderphone required>
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="order-button" data-ordersubmit>PORUČITE SA 40% POPUSTA</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="expert">
    <div class="container">
        <div class="expert-top">MIŠLJENJE NAŠIH KUPACA</div>
        <div class="row">
            <div class="col-md-5">
                <img class="expert-img" src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/expert.jpg">
            </div>
            <div class="col-md-7">
                <div class="expert-text">
                    <span>"</span>Da li protraćite dosta vremena na peglanje?<br><br>
                    Ukoliko vodite računa o domaćinstvu, onda sigurno da da.<br><br>
                    Sa ovom peglom nije potrebno mnogo vremena i novca.
                    Hand Garment Steamer radi na principu jake pare. Voda se sipa u rezervoar i zagreva do tačke
                    ključanja.
                    Kao rezultat se formira para koja izlazi pod jakim pritskom.<br><br>
                    Hand Garment Steamer ne ostavlja tragove na tretiranim površinama, efikasno pegla stvari dok su
                    još na ofingeru. Nikada lakše nisam peglala haljinu.<br><br>
                    Ova pegla mi je od pomoći pri peglanju zavesa, a i pri dezinfekciji nameštaja, jastuka i dečijih
                    igračaka. Savršen proizvod.<span>"</span>
                </div>
                <div class="expert-name"> Marija Gvozdić<br><span>Obrenovac</span></div>
            </div>
        </div>
    </div>
</div>
<section class="reviews" id="ex4">
    <h2 class="h2"> PREPORUKE</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-slider owl-carousel">
                    <div class="item">
                        <div class="item-head">
                            <img src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/ava1.png" alt="ava"
                                 class="item-img">
                            <div class="item-head-text-wrap">
                                <div class="item-head-text">
                                    <h4 class="h4"> Veljko</h4>
                                    <p class="p"> 45 godina</p>
                                </div>
                            </div>
                        </div>
                        <div class="item-body match_height">
                            <div class="thumb-wrap">
                                <span class="span"> 2 slike</span>
                                <a href="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/1a.jpg"
                                   data-lightbox="first"><img
                                        src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/1a_thumb.jpg" alt="thumb"
                                        class="thumb"></a>
                                <a href="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/1b.jpg"
                                   data-lightbox="first"><img
                                        src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/1b_thumb.jpg" alt="thumb"
                                        class="thumb"></a>
                            </div>
                            <div class="item-body-text">Često idem na poslovna putovanja. Nemam vremena da se peglam
                                pred sastanak, a košulje mi se uvek izgužbaju u koferu. Ova pegla je spas za mene. Nosim
                                je sa sobom na putovanja, ne zauzima mnogo prostora, a da ispeglam košulju treba mi
                                svega 2 minuta.
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-head">
                            <img src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/ava2.png" alt="ava"
                                 class="item-img">
                            <div class="item-head-text-wrap">
                                <div class="item-head-text">
                                    <h4 class="h4"> Tatjana</h4>
                                    <p class="p"> 38 godina</p>
                                </div>
                            </div>
                        </div>
                        <div class="item-body match_height">
                            <div class="thumb-wrap">
                                <span class="span"> 3 slike</span>
                                <a href="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/2a.jpg"
                                   data-lightbox="second"><img
                                        src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/2a_thumb.jpg" alt="thumb"
                                        class="thumb"></a>
                                <a href="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/2b.jpg"
                                   data-lightbox="second"><img
                                        src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/2b_thumb.jpg" alt="thumb"
                                        class="thumb"></a>
                                <a href="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/2c.jpg"
                                   data-lightbox="second"><img
                                        src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/2c_thumb.jpg" alt="thumb"
                                        class="thumb"></a>
                            </div>
                            <div class="item-body-text">Nedavno sam kupila ovu peglu i mogu vam reći da sam prilično
                                zadovoljna. Obožavam da nosim svilene stvari, i često mi se dešavalo da ih
                                zapalim dok peglam. Sada to peglam vrlo lako bez ikakvog straha da ću napraviti štetu.
                                Svila, pamuk, farmerice, vuna, majica tanka ili debela, zavese, donji veš, sintetika -
                                sve peglam vrlo lako, brzo i bezbedno! TOP PROIZVOD!
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-head">
                            <img src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/ava3.png" alt="ava"
                                 class="item-img">
                            <div class="item-head-text-wrap">
                                <div class="item-head-text">
                                    <h4 class="h4"> Emilija</h4>
                                    <p class="p"> 32 godine</p>
                                </div>
                            </div>
                        </div>
                        <div class="item-body match_height">
                            <div class="thumb-wrap">
                                <span class="span"> 2 slike</span>
                                <a href="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/3a.jpg"
                                   data-lightbox="third"><img
                                        src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/3a_thumb.jpg" alt="thumb"
                                        class="thumb"></a>
                                <a href="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/3b.jpg"
                                   data-lightbox="third"><img
                                        src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/3b_thumb.jpg" alt="thumb"
                                        class="thumb"></a>
                            </div>
                            <div class="item-body-text">
                                Veoma sam zadovoljna rezultatom. Haljinu ispeglam bez napora dok mi je ranije trebalo
                                dosta vremena za to. Divan prozivod, hvala dečku što mi je kupio.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="how" id="ex5">
    <div class="container">
        <div class="how-top"> KAKO RADIMO?</div>
        <div class="row">
            <div class="col-sm-3 col-xs-6">
                <div class="how1"></div>
                <div class="how-text">BRZA OBRADA PORUDŽBINE</div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="how2"></div>
                <div class="how-text">SVI PROIZVODI SU SERTIFIKOVANI</div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="how3"></div>
                <div class="how-text">ŠALJEMO BRZOM POŠTOM U ROKU OD 1-2 RADNA DANA</div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="how4"></div>
                <div class="how-text">PLAĆANJE POUZEĆEM</div>
            </div>
        </div>
    </div>
</div>
<div class="main2" id="order">
    <div class="container">
        <div class="main-top">
            PEGLANJE STVARI NA OFINGERU ZA POLA MINUTA?<br>
            <p>DA MOGUĆE JE SA OVOM MOĆNOM PEGL</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 main-form">
                <div class="main-act"> POŽURITE DA PORUČITE PEGLU SA <br><span> 40% POPUSTA</span></div>
                <form class="form" action="{{$orderRoute}}" method="POST">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input type="hidden" name="utm_medium" value="google">
                    <input name="name" class="main-name" placeholder="Ime i prezime" type="text" data-ordername
                           required>
                    <input name="phone" class="main-tell" placeholder="Telefon" type="tel" data-orderphone required>
                    <button type="submit" class="main-button" data-ordersubmit>PORUČITE SA 40% POPUSTA</button>
                </form>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="main-price">
                    <div class="main-price-text"> AKCIJA</div>
                    <div class="main-price-old">
                        <span class="price_land_s4">
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <span class="price_land_curr">
                           {{ $prices[1]['currency'] }}
                        </span>
                    </div>
                    <div class="main-price-new">
                        <span class="price_land_s1">
                           {{ $prices[1]['amount'] }}
                        </span>
                        <span class="price_land_curr">
                           {{ $prices[1]['currency'] }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <img class="main-img" src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/body2-brush.png">
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('/') }}shared_files/bootstrap.js"></script>
<script type="text/javascript" src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/jquery-match-height.js"></script>
<script type="text/javascript" src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/lightbox2.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/handgarmentsteamer/main.js"></script>

@if(isset($product->country_code) && $product->country_code === "rs")
    @include('components.company_footer')
@endif
<input type="hidden" id="currencyHidden" value="{{ $prices[1]['currency']}}"/>
<style>
    .phoneErrorInput {
        border: 2px solid #FF0000;
        background-color: #FF7F7F !important;
    }
    .phoneErrorText {
        color: #FF0000;
        text-align: center;
        margin: 10px 0;
    }
</style>
<script>
    $(document).ready(function () {

        const baseURL = "{{ asset('/') }}";
        const csrf_token = "{{ csrf_token() }}";

        $('form').submit(function(e){
            if($(this).attr('action')==='/order'){
                $phone_input = $(this).closest('form').find('input[name=phone]');
                let phone = $phone_input.val();
                let country = '{{strtoupper($product->country_code)}}';
                let validationResult = validatePhoneNumber(phone, country);
                let errorText = "";
                switch (country) {
                    case 'RS':
                        errorText = 'Pogrešan format telefona';
                        break;
                    case 'BG':
                        errorText = 'Грешен формат на телефона';
                        break;
                    case 'RO':
                        errorText = 'Format de telefon greșit';
                        break;
                    case 'GR':
                        errorText = 'Λάθος μορφή τηλεφώνου';
                        break;
                    case 'PL':
                        errorText = 'Nieprawidłowy format telefonu';
                        break;
                    case 'SK':
                        errorText = 'Nesprávny formát telefónu';
                        break;
                    case 'CZ':
                        errorText = 'Špatný formát telefonu';
                        break;
                    case 'SI':
                        errorText = 'Napačen format telefonske številke';
                        break;
                    case 'HU':
                        errorText = 'Hibás telefonszám-formátum';
                        break;
                    default:
                        errorText = "Wrong phone number format";
                }

                if(validationResult === "1") {
                    $phone_input.removeClass('phoneErrorInput');
                    $('.phoneErrorText').hide();
                    $(this).closest('form').find(':submit').attr('disabled','disabled');
                } else {
                    e.preventDefault();
                    $phone_input.addClass('phoneErrorInput');
                    $phone_input.after("<div class='phoneErrorText'>" + errorText + "</div>");
                }
            } else {
                $(this).find(':submit').attr('disabled','disabled');
            }
        });


        function validatePhoneNumber(phone, country) {
            let returnResponse = 0;
            let name = $('input[name=name]').val();
            let email = $('input[name=email]').val();
            let address = $('input[name=shipping_address]').val();
            let city = $('input[name=shipping_city]').val();
            let zip = $('input[name=shipping_zip]').val();
            let quantity = $('input[name=quantity]').val();
            let variation_id = $('input[name=variation_id]').val();
            $.ajax({
                url: baseURL + "validatePhoneNumber",
                type:"POST",
                async: false,
                data:{
                    phone:phone,
                    country:country,
                    name:name,
                    email:email,
                    address:address,
                    city:city,
                    zip:zip,
                    quantity:quantity,
                    variation_id:variation_id,
                    _token: csrf_token
                },
                success:function(response){
                    returnResponse = response;
                },
                error: function (req, err) {
                    console.log(req);
                }
            });
            return returnResponse;
        }

        $("#shipping_zip").keyup(function() {
            $("#shipping_zip").val(this.value.match(/[0-9]*/));
        });

    });
</script>
</body>
</html>
