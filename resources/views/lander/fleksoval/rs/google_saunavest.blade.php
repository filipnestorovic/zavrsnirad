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
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="" type="image/png">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}naturapharmFiles/saunavest/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}naturapharmFiles/saunavest/styles.css">
    <link href="{{ asset('/') }}naturapharmFiles/saunavest/custom-styless.min.css" type="text/css" rel="stylesheet">
    <style>
        @media screen and (min-width: 640px) {
            .button {
                margin: 210px 0px 0px 20px;
            }
            .order_section .form_block {
                margin: -55px 2px 0;
            }
            .order_section .wrapper {
                width: 1220px;
            }
            .header_section .discount {
                left: 310px;
            }
            .benefits_section {
                background-position-x: 50px;
                background-color: #011173;
            }
        }
        @media screen and (max-width: 639px){
            .header_section {
                background-position-y: 50px;
                padding-top: 0;
                height: 920px;
            }
            .header_section .discount {
                top: 200px;
                left: 180px;
            }
            .header_section .title_block .subtitle {
                font-size: 16px;
                line-height: 20px;
                letter-spacing: 0;
            }
            .header_section .title_block {
                margin-bottom: 570px;
            }
            .header_section .button {
                margin: 20px 0px 0px 0px;
            }
            .order_section .subtitle {
                display: none;
            }
            .order_section .info ul {
                visibility: hidden;
            }
            .order_section .form_block {
                padding-top: 120px;
            }
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
@include('components.display_errors')
<header class="header_section">
    <div class="content_block wrapper">
        <div class="info">
            <div class="title_block">
                <p class="subtitle">MAJICA ZA SAGOREVANJE MASTI I SAVRŠEN STRUK I TORZO</p>
                <h1 class="main_title">2u1 SAUNA VEST</h1>
            </div>
            <ul>
                <li>Visokokvalitetni materijali</li>
                <li>Ne izaziva nelagodnost</li>
                <li>Nevidljiv ispod odeće</li>
            </ul>
            <a href="#order_form" class="button">Poručite</a>
        </div>
        <div class="discount"><span>-40%</span>popusta</div>
    </div>
</header>
<div class="info_section">
    <div class="wrapper">
        <div class="info_item">
            <img src="{{ asset('/') }}naturapharmFiles/saunavest/b2-3.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Ova neverovatna majica bez rukava za sagorevanje masnoće je napravljena je od polimera nove generacije.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}naturapharmFiles/saunavest/b2-1.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Pospešuje proces mršavljenja sagorevajući masti i kalorije velikom brzinom.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}naturapharmFiles/saunavest/b2-4.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Za kratak period i kvalitetan trening, trbušnjaci će postati vidljivi.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}naturapharmFiles/saunavest/b2-2.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Zahvaljhujući inovativnom dizajnu, preko ovoga se mogu nositi majice i trenerke.</p>
        </div>
    </div>
</div>
<section class="about_section">
    <div class="wrapper clearfix">
        <h2>O 2u1 SAUNA VEST</h2>
        <div class="video_block">
        </div>
        <div class="text_block">
            <p>2u1 SAUNA VEST pomaže da se ima muževna i atraktivna figura. Telo brzo postaje zategnutije i privlačnije - bez dijeta i izgladnjivanja.
                Zahvaljujući jedinstvenom i inovativnom dizajnu, 2u1 SAUNA VEST ravnomerno i brzo topi masne naslage.
                Specijalni materijali dubinski zagrevaju tkivo i tako dolazi do topljenja viška kilograma.
                Pivski" stomak i masne naslage - nestaju za kratak period.
                Takođe, 2u1 SAUNA VEST pomaže u sagorevanju masti na drugim delovima tela, jer pospešuje cirkulaciju i pojačava metabolizam.
                Više samopouzdanja, više uspeha u poslu, u komunikaciji i zavođenju.</p>
        </div>
    </div>
</section>
<section id="catalog" class="catalog_section">
    <div class="wrapper">
        <div class="product_item male clearfix">
            <div class="gallery_block">
                <img class="image one" src="{{ asset('/') }}naturapharmFiles/saunavest/b4-1.jpg" alt="Slim'N Lift" title="Slim'N Lift">
            </div>
            <div class="info">
                <h3>KARAKTERISTIKE 2u1 SAUNA VEST</h3>
                <ul>
                    <li><b>Sastav:</b> Polimer nove generacije i elastična likra</li>
                    <li><b>Temperaturni uslovi:</b> u bilo koje doba godine</li>
                    <li><b>Fizička aktivnost:</b> bilo koja</li>
                    <li><b>Opis:</b>Napravljena je od veoma udobne tkanine, najefikasnije je rešenje za savršen struk i torzo.</li>
                </ul>
                <div class="price_block">
                    <div class="price_item old">
                        <div class="text">Stara cena:</div>
                        <div class="value"><span class="price_old15447">{{ $prices[1]['originalPrice'] }}</span>
                            <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
                    </div>
                    <div class="discount">-40%</div>
                    <div class="price_item new">
                        <span class="price_only15447">{{ $prices[1]['amount'] }}</span>
                        <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
                </div>
                <a href="#order_form" class="button" data-comment="Для мальчиков">Poručite sada</a>
            </div>
        </div>

    </div>
</section>
<section class="benefits_section">
    <div class="wrapper">
        <h2>PREDNOSTI 2u1 SAUNA VEST</h2>
        <div class="benefits_list">
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>SNAGA I IZDRŽLJIVOST</h4>
                    <p>Izrađena je od visokokvalitetnih sigurnih materijala, stoga ne izaziva iritaciju i osip.</p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>ELASTIČNOST</h4>
                    <p>Elastično, glatko i postepeno zateže kožu i neosetna je pri nošenju.</p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>EFIKASNOST</h4>
                    <p>Savršeno topi masne naslage na stomaku i leđima, čineći figuru vitkom i atraktivnom.</p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>LAKO ODRŽAVANJE</h4>
                    <p>Ne zahteva posebnu negu. Može se prati ručno i u mašini za veš na režimu za lagano pranje.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_steps_section">
    <div class="wrapper">
        <h2>KAKO PORUČITI <span>2u1 SAUNA VEST</span></h2>
        <div class="steps_list">
            <div class="step_item">
                <img src="{{ asset('/') }}naturapharmFiles/saunavest/order_steps__step1_image.png" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Ostavite podatke za dostavu na sajtu</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}naturapharmFiles/saunavest/order_steps__step2_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Kontaktiraćemo Vas da potvrdimo porudžbinu</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}naturapharmFiles/saunavest/order_steps__step3_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Poslaćemo pošiljku brzom poštom</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}naturapharmFiles/saunavest/order_steps__step4_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Plaćanje se vrši po pouzeću</p>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section">
    <div class="wrapper">
        <h2>UTISCI ZADOVOLJNIH <span>KUPACA</span></h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item clearfix">
                <img src="{{ asset('/') }}naturapharmFiles/saunavest/rew-1.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <div class="text_block">
                    <div class="author_info">Bojan, 42 godine</div>
                    <p>Da budem iskren, nisam mogao da verujem da je moguće nositi odeću 2-3 veličine manju za kratak period.
                        Kada sam ga isprobao i video koliko se znojim, shvatio sam da je to to. Lakše prolazim kod žena,
                        a moje kolege s posla traže da im otrkijem recept za dijetu. :)</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img src="{{ asset('/') }}naturapharmFiles/saunavest/rew-2.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <div class="text_block">
                    <div class="author_info">Oliver, 49 godina</div>
                    <p>Imam višak kilograma. Slim And Lift zaista skida stomak, masne naslage sa leđa i
                        ističe ramena koja deluju šire. Dobijam komplimente za izgled, a i lepše mi je
                        gledati sebe u ogledalu.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order_section">
    <div class="wrapper clearfix">
        <div class="info">
            <div class="title_block">
                <p class="subtitle">MAJICA ZA SAGOREVANJE MASTI I SAVRŠEN STRUK I TORZO</p>
                <h1 class="main_title">2u1 SAUNA VEST</h1>
            </div>
            <ul>
                <li>Visokokvalitetni materijali</li>
                <li>Ne izaziva nelagodnost</li>
                <li>Nevidljiv ispod odeće</li>
            </ul>
        </div>
        <div class="form_block">
            <p>ISKORISTITE SPECIJALNI POPUST OD 40%</p>
            <div class="price_block">
                <div class="price_item old">
                    <div class="text">Stara cena:</div>
                    <div class="value"><span class="price_old15447">{{ $prices[1]['originalPrice'] }}</span>
                        <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
                </div>
                <div class="price_item new"><span class="price_only15447">{{ $prices[1]['amount'] }}</span>
                    <span class="price_currency">{{ $prices[1]['currency'] }}</span></div>
            </div>
            <form action="{{$orderRoute}}" method="post" id="order_form" class="order_form">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="hidden" name="utm_medium" value="google">
                <input class="input" type="text" name="name" placeholder="Ime i prezime" required="">
                <input class="input-phone input" type="tel" name="phone" placeholder="Telefon" required="" id="phone">
                <input class="input" type="text" name="shipping_address" placeholder="Adresa" required="">
                <input class="input" type="text" name="shipping_city" placeholder="Grad" required="">
                <button type="submit" class="button">Poručite sada</button>
            </form>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}naturapharmFiles/saunavest/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}naturapharmFiles/saunavest/scripts.js"></script>

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
