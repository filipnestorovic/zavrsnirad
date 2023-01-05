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
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/3u1ledlight/favicon.png" type="image/x-icon">
    <link href="{{ asset('/') }}dailysharkFiles/3u1ledlight/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('/') }}dailysharkFiles/3u1ledlight/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('/') }}dailysharkFiles/3u1ledlight/style.css" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Glyphicons Halflings';
            src: url({{ asset('/') }}fonts/glyphicons-halflings-regular.html);
            src: url({{ asset('/') }}fonts/glyphicons-halflings-regulard41d.html?#iefix) format('embedded-opentype'), url({{ asset('/') }}fonts/glyphicons-halflings-regular-2.html) format('woff'), url({{ asset('/') }}fonts/glyphicons-halflings-regular-3.html) format('truetype'), url({{ asset('/') }}fonts/glyphicons-halflings-regular-4.html#glyphicons_halflingsregular) format('svg')
        }
        @font-face {
            font-family: 'FontAwesome';
            src: url('{{ asset('/') }}fonts/fontawesome-webfont.eot');
            src: url('{{ asset('/') }}fonts/fontawesome-webfont.eot') format('embedded-opentype'),
            url("{{ asset('/') }}fonts/fontawesome-webfont.woff") format('woff'),
            url('{{ asset('/') }}fonts/fontawesome-webfont.ttf') format('truetype'),
            url('{{ asset('/') }}fonts/fontawesome-webfont.svg') format('svg');
            font-weight: normal;
            font-style: normal
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
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQ9BCN8"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="wrapper">
    @include('components.display_errors')
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container navigation">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#conocenos3" id="logo2">
                    <img src="{{ asset('/') }}dailysharkFiles/3u1ledlight/logo.png" alt="" width="200" height="50">
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#intro" id="inicio2">O PROIZVODU</a></li>
                    <li><a href="#service" id="promociones2">PREDNOSTI</a></li>
                    <li><a href="#forms" id="obtener2">PORUČITE ODMAH</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="intro" class="intro">
        <div class="intro-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p style="font-size:75px;font-weight:600;font-family:Roboto;color:#fff;text-align:initial;line-height:80px;margin-top:-15%"
                           class="refleja">3 IN 1 Wireless Led Lights</p>
                        <p style="font-size:24px;font-family:Roboto;color:#fff;text-align:left;font-weight:600;line-height:29px"
                           class="crea full ayuda">Predstavljamo Vam smart led sijalice - idealno osvetljenje u zatvorenim prostorijama koje se montira bez kablova i bušenja</p>
                        <form action="{{$orderRoute}}" method="POST" style="text-align:center;border:1px solid;padding:10px;box-shadow:0 2px 5px 2px;background-color:#fff;border-radius:.8em;width:80%;margin-bottom:3%;padding:19px;margin-top:4%" class="formwhite form1 first_form al-form">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input type="hidden" name="utm_medium" value="google">
                            <div class="price">
                                Poručite odmah i iskoristite specijalni popust
                            </div>
                            <div class="form-group" style="padding-left:2%;margin-bottom:1rem;color:#000">
                                <input class="w3-input w3-border phone" name="name" type="text"
                                       placeholder="Ime i prezime" required=""
                                       style="font-family:Roboto;font-size:14px;color:#000!important;width:96%;border-radius:.6em;height:45px;text-align:center"><br>
                            </div>
                            <div class="form-group" style="padding-left:2%;margin-bottom:1rem;color:#000">
                                <input class="w3-input w3-border phone" name="phone" type="tel"
                                       placeholder="Telefon" required=""
                                       style="font-family:Roboto;font-size:14px;color:#000!important;width:96%;border-radius:.6em;height:45px;text-align:center"><br>
                            </div>
                            <div class="term" style="text-align:center;color:#000;font-size:12px;font-family:Roboto">
                                <input type="submit" value="Poručite sada &nbsp; ➝"
                                       class="btn btn-warning sigue btnsol"
                                       style="background-image:linear-gradient(to bottom,#fab51b 0,#fab51b 100%);background-color:#fab51b!important;color:#000;border-color:#fab51b;padding:3px 7px;width:94%;font-size:17px;font-family:Roboto;border-radius:.8em;padding:5px;font-weight:500;white-space: pre-wrap;"><br>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6" style="text-align:center">
                        <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <img src="{{ asset('/') }}dailysharkFiles/3u1ledlight/solar.png" alt="" style="width:70%;margin-top:5%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="service" class="home-section nopadding paddingtop-60 automatizar">
        <div class="container">
            <p style="font-size:42px;line-height: normal;font-family:Roboto;color:#000;text-align:center;margin-top:2%;font-weight:600"
               class="cont abs0 automatiza">Potpuno univerzalne lampe</p>
            <br>
            <div class="row">
                <div class="col-sm-6 col-md-6" style="text-align:center">
                    <p style="padding-top:35px;font-size:22px;font-family:Roboto;color:#000;text-align:justify;margin-top:2%;font-weight:400;line-height:30px"
                       class="estreno2 uso">
                        3 IN 1 Wireless Led Lights je idealno rešenje za mračna mesta koja su teže
                        dostupna, a pritom zahtevaju jako osvetljavanje u nekoliko minuta - poput ostava, ormara,
                        stepenica, polica, garaža, podruma.
                        <br><br>
                        Opcija automatskog isključivanja čini ih idealnim za dečiju sobu. Odlične su i ispod kuhinjskih elemenata, pored kreveta ili u autu.
                    </p>
                    <br>
                    <a type="submit" class="btn btn-warning btn1"
                       style="background-image:linear-gradient(to bottom,#fab51b 0,#fab51b 100%);background-color:#fab51b!important;color:#000;border-color:#fab51b;padding:6px 5px;width:50%;font-size:17px;font-family:Roboto;border-radius:.8em;text-align: center;white-space: pre-wrap;"
                       id="inicia" href="#conocenos3">Poručite sada</a>
                </div>
                <div class="col-sm-6 col-md-6" style="padding-right:0!important;padding-left:0!important">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ asset('/') }}dailysharkFiles/3u1ledlight/solarl.png" style="width:100%" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="boxes" class="paddingtop-40 r" style="background-color:#fab51b;padding-bottom:1%">
        <div class="container">
            <div class="row" style="text-align:center">
                <div class="col-sm-6 col-md-6">
                    <img src="{{ asset('/') }}dailysharkFiles/3u1ledlight/r1.png" style="width:85%" alt="">
                </div>
                <div class="col-sm-6 col-md-6">
                    <img src="{{ asset('/') }}dailysharkFiles/3u1ledlight/r2.png" style="width:85%" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="boxes" class="paddingtop-40 r" style="padding-bottom:1%;background-color:#fff">
        <div class="container">
            <div class="row" style="text-align:center">
                <div class="col-sm-12 col-md-12">
                    <img src="{{ asset('/') }}dailysharkFiles/3u1ledlight/piezas.png" style="width:85%" class="piezas" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="callaction" class="paddingtop-20 r" style="background-color:#fab51b">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="wow fadeInUp" data-wow-delay="0.1s">
                                    <p style="margin-top:9%;font-size:27px;font-family:Roboto;color:#000;text-align:center;font-weight:700;line-height:29px"
                                       class="crea full ayuda ilu">
                                        "Daljinsko paljenje, gašenje, pojačavanje i smanjivanje. Nema kablova i bušenja zidova i nameštaja! Wow - ovo je potrebno u svakoj kući"
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-4" style="text-align:center">
                                <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                    <img src="{{ asset('/') }}dailysharkFiles/3u1ledlight/solarl.png" style="width:90%" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space espacio cj" id="conocenos3"
             style="background-image: url({{ asset('/') }}dailysharkFiles/3u1ledlight/fondo.png); background-repeat: no-repeat;background-size: cover; text-align:center;background-position-x: 57%;background-repeat: repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 space__text" style="margin-top:2.5%;">
                    <p>Poruči 3 IN 1 Wireless Led Lights odmah</p>
                    <p><b>i ostvari 40% popusta!</b></p>
                    <p>Akcija je samo danas: </p>
                    <p>
                        <b>
                           <span class="al-cost">
                              {{ $prices[1]['amount'] }}
                               {{ $prices[1]['currency'] }}
                           </span>
                            <span class="price__old al-cost-promo">
                              {{ $prices[1]['originalPrice'] }}
                                {{ $prices[1]['currency'] }}
                           </span>
                        </b>
                    </p>
                </div>
                <div class="col-md-6" style="padding:12px;margin-top:2.5%">
                    <form action="{{$orderRoute}}" method="POST" style="text-align:center;border:1px solid;padding:10px;box-shadow:0 2px 5px 2px;background-color:#ffffff85;border-radius:.8em;width:80%;margin-bottom:3%;padding:19px;margin-top:4%" class="formwhite form1 first_form al-form" id="forms">
                        {{ csrf_field() }}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <input type="hidden" name="utm_medium" value="google">
                        <div class="price">
                            Unesite podatke za dostavu
                        </div>
                        <div class="form-group" style="padding-left:2%;margin-bottom:1rem;color:#000">
                            <input class="w3-input w3-border phone" name="name" type="text"
                                   placeholder="Ime i prezime" required="true"
                                   style="font-family:Roboto;font-size:14px;color:#000!important;width:96%;border-radius:.6em;height:45px;text-align:center"><br>
                        </div>
                        <div class="form-group" style="padding-left:2%;margin-bottom:1rem;color:#000">
                            <input class="w3-input w3-border phone" name="phone" type="tel"
                                   placeholder="Telefon" required="true"
                                   style="font-family:Roboto;font-size:14px;color:#000!important;width:96%;border-radius:.6em;height:45px;text-align:center"><br>
                        </div>
                        <div class="term" style="text-align:center;color:#000;font-size:12px;font-family:Roboto">
                            <input type="submit" value="Poručite sada &nbsp; ➝"
                                   class="btn btn-warning sigue btnsol"
                                   style="background-image:linear-gradient(to bottom,#fab51b 0,#fab51b 100%);background-color:#fab51b!important;color:#000;border-color:#fab51b;padding:3px 7px;width:94%;font-size:17px;font-family:Roboto;border-radius:.8em;padding:5px;font-weight:500;white-space: pre-wrap;"><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/bootstrap.js"></script>
<script>
    $(document).ready(function() {
        $("a").on("click", function(event) {
            event.preventDefault();
            var id = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({
                scrollTop: top
            }, 800);
        });
        $(".nav>li").on("click", function(e) {
            $(".navbar-collapse").removeClass("in");
        })
    });
</script>

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
