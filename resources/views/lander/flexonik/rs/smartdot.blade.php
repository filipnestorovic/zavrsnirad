<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/x-icon" href="{{ asset('/') }}flexovalFiles/agatus/aculief-favicon-01-1.png"/>
    <link rel='stylesheet' id='wp-block-library-css' href='{{ asset('/') }}flexovalFiles/agatus/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='main-css' href='{{ asset('/') }}flexovalFiles/agatus/main.css' type='text/css' media='all' />
    <link rel='stylesheet' id='offers-css' href='{{ asset('/') }}flexovalFiles/agatus/offer.css' type='text/css' media='all' />
    <link rel='stylesheet' id='noto-serif-css' href='https://fonts.googleapis.com/css2?family=Noto+Serif%3Awght%40300%3B400%3B600%3B700%3B800&amp;ver=5.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='google-open-sans-css' href='https://fonts.googleapis.com/css2?family=Open+Sans%3Aital%2Cwght%400%2C300%3B0%2C400%3B0%2C600%3B0%2C700%3B0%2C800%3B1%2C400&amp;display=swap&amp;ver=5.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='rubik-css' href='https://fonts.googleapis.com/css2?family=Rubik%3Awght%40300%3B400%3B600%3B700%3B800&amp;ver=5.8.2' type='text/css' media='all' />

    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
    {{--<link rel="stylesheet" media="screen" href="{{ asset('/') }}flexovalFiles/shared_files/lander.css">--}}
    <link rel="stylesheet" href="{{ asset('/') }}checkoutFiles/shared_files/order-cvr.min.css">
</head>
<body class="single-offer lang-en layout-default">
<div id="main-wrapper">
    @include('components.display_errors')
    <div class="brand-color-strip desktop-only" style="border-top:7px solid #007fc4"></div>
    <div id="logo">
        <div class="logo-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-logo">
                            <img src="{{ asset('/') }}flexovalFiles/shared_files/Flexoval_logo.png" alt="" style="height: 45px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div id="content-inner">
            <div class="headline-container">
                <h1 id="headline" class="body-headline" data-variation='[]'>Zaštitite sebe i svoje ukućane od štetnih uticaja modernog okruženja!</h1>
                <h2 id="subheadline" class="body-subheadline " data-variation='[]'>Preko 99% korisnika nam je dalo ocenu *****</h2>
            </div>
            <div class="product-info essential">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div id="guGallery-1" class="gallery-container">
                                <div class="gallery-video-container gu-hidden">
                                    <div id="guGallery-1-youtubeVideoWrapper" class="galleryVideoWrapper videoWrapper youtubeVideoWrapper"><iframe loading="lazy" width="545" height="301" src="#" frameborder="0" allowfullscreen></iframe></div>
                                    <div id="guGallery-1-wistiaVideoWrapper" class="galleryVideoWrapper videoWrapper wistiaVideoWrapper">
                                        <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                                            <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                                                <div id="guGallery-1-wistiaPlaceholder" class="" style="height:100%;position:relative;width:100%">
                                                    <div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img id="guGallery-1-wistiaThumbnail" src="#" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" onload="this.parentNode.style.opacity=1;" /></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="guGallery-1-sproutVideoWrapper" class="galleryVideoWrapper videoWrapper sproutVideoWrapper"></div>
                                </div>
                                <div class="gallery-image-container ">
                                    <img src="#" alt="">
                                </div>
                                <ul id="guGallery-1-thumbnails" class="gallery-thumbnails">
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexonikFiles/smartdot/smartdots-s1-02b-180x180.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-2"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexonikFiles/smartdot/smartdots-s1-04b-180x180.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-3"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexonikFiles/smartdot/smartdots-s1-05b-180x180.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-4"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexonikFiles/smartdot/smartdots-s1-06-180x180.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-6"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexonikFiles/smartdot/smartdots-s1-07-180x180.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-7"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexonikFiles/smartdot/smartdots-s1-08b-180x180.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-8"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexonikFiles/smartdot/smartdots-s1-09-180x180.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-8"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexonikFiles/smartdot/smartdots-s1-10-180x180.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-8"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 no-padding">
                            <div class="product-info-container">
                                <div class="d-md-none rtl-text-centered">
                                    <div class="button" style="background: #25ae4e">
                                        <a href="#orderForm">Poruči SMARTDOT sada!</a>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="info-padding">
                                        <p>Da li ste znali:  Zbog raznoraznih uređaja koje svakako koristimo, kao telefoni, laptopovi, wifi ruteri i slično danas smo izloženi <strong>100 miliona puta većoj elektromagnetnoj radijaciji nego pre 50 godina.</strong></p>
                                        <p>Zato je napravljen smartDOT, uređaj koji štiti od EMF zračenja. <strong>On menja postavku elektromagnetih frekvencija u njihovom izvoru, tako da su uređaji pogodniji za upotrebu.</strong></p>
                                        <p>Sve u svemu, zaključeno je da je smartdot jako efikasan u <strong>neutralisanju negativnih efekata radijacije</strong> mobilnih telefona na ljudsko telo - slažu se stručnjaci</p>
                                    </div>
                                </div>
                                <div class="info d-none d-lg-block">
                                </div>
                                <div class="product-description-list">
                                    <ul>
                                        <li><b>Testiran, istražen i dokazan</b> - Zaštitu vaše porodice ne treba poveriti baš bilo kome. smartDot je baziran na tehnologiji koja se već duži period testira i unapređuje u nezavisnim laboratorijama. Hiljade ljudi širom sveta uživa u benefitima ovog proizvoda, a sada za to imate priliku i vi.</li>
                                        <li><b>Štiti Vas od svih uređaja koji emituju EMF</b> - Najčešći su pametni telefoni, tableti, laptopovi, wifi ruteri, gaming konzole i slično. Preporučuje se da smartdot bude postavljen na svaki pojedinačan uređaj.</li>
                                        <li><b>Lako se lepi na bilo koji uređaj</b> - Ne treba da bude na nekoj posebnoj poziciji. Samo se nalepi i štiti od EMF zračenja od tog trenutka. U slučaju da želite da skinete sa uređaja, to se vrlo lako radi, a smartDot ne ošećuje uređaj i ne ostavlja tragove.</li>
                                        <li><b>Otklanja nuspojave zračenja</b> - Da li imate glavobolje kada koristite telefon ili računar duže vreme? Umor, anksioznost i slično? SmarDot eleminiše problem u korenu i donosi harmoniju vašem organizmu eleminišući neželjene efekte EMF-a.</li>
                                        <li><b>Nalepite jednom i to je to</b> - smartdot je toliko lagan i sitan da ćete zaboraviti da je tu. Takođe koristi najkvalitetnije lepivo koje može da se nađe na tržišzu tako da ne morate da brinete da će da spadne i da ćete ga izgubiti.</li>
                                        <li><b>Štiti Vas zauvek</b> - Svaki proizvod traje zauvek, tako da nema potrebe za zamenom ili kupovinom novog.</li>
                                    </ul>
                                </div>
                                <div class="product-description-list d-none d-md-block d-lg-block">
                                </div>
                                <div class="rtl-text-centered">
                                    <div class="button" style="background: #25ae4e;">
                                        <a href="#orderForm">Poruči SMARTDOT sada!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div id="featured-in">--}}
            {{--<div class="container-fluid">--}}
            {{--<div class="row">--}}
            {{--<div class="col-lg-12">--}}
            {{--<h4 class="featured-text"><span>As Featured In</span></h4>--}}
            {{--<div class="row">--}}
            {{--<div class="logo-strip" data-item-count="5">--}}
            {{--<div class="image" style="background-image: url('{{ asset('/') }}flexovalFiles/agatus/made-in-the-usa.png'); max-height: 75px;max-width: 140px;">--}}
            {{--</div>--}}
            {{--<div class="image" style="background-image: url('{{ asset('/') }}flexovalFiles/agatus/yahoo.png'); max-height: 75px;max-width: 194px;">--}}
            {{--<a target="_blank" href="">&nbsp;</a>--}}
            {{--</div>--}}
            {{--<div class="image" style="background-image: url('{{ asset('/') }}flexovalFiles/agatus/the-doctors.png'); max-height: 75px;max-width: 172px;">--}}
            {{--<a target="_blank" href="">&nbsp;</a>--}}
            {{--</div>--}}
            {{--<div class="image" style="background-image: url('{{ asset('/') }}flexovalFiles/agatus/hallmark-channel.png'); max-height: 75px;max-width: 194px;">--}}
            {{--<a target="_blank" href="">&nbsp;</a>--}}
            {{--</div>--}}
            {{--<div class="image" style="background-image: url('{{ asset('/') }}flexovalFiles/agatus/the-wall-street-journal.png'); max-height: 75px;max-width: 182px;">--}}
            {{--<a target="_blank" href="">&nbsp;</a>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            <section id="reviews" data-layout="1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 id="reviews_headline" class="" data-alts="[]">Zašto baš smartDOT - pročitajte izjave kupaca</h2>
                        </div>
                    </div>
                    <div class="testimonials">
                        <div id="testimonial-1" class="testimonial-block">
                            <div class="rating">
                                <div class="stars">
                                    <img src="{{ asset('/') }}flexovalFiles/agatus/five-stars.jpg">
                                    <div class="star-count">
                                        5.0 ocena
                                    </div>
                                </div>
                                <div class="user">
                                    <strong>Helena</strong>
                                    <div class="verified">
                                        Verified Buyer
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <h4>
                                    <a target="_blank" href="">
                                        “Sjajna stvar!” </a>
                                </h4>
                                <div class="copyblock">
                                    <p>Jednastano sjajna stvar! Imam ga na svim svojim uređajima i istog dana sam osetila promenu u smisu da imam više energije i koncentracije za svakodnevne aktivnosti. Takođe san mi se popravio, bolje spavam, ne budim se u toku noći, a svako jutro sam odmorna. Preporučujem svima!</p>
                                </div>
                            </div>
                        </div>
                        <div id="testimonial-2" class="testimonial-block">
                            <div class="rating">
                                <div class="stars">
                                    <img src="{{ asset('/') }}flexovalFiles/agatus/five-stars.jpg">
                                    <div class="star-count">
                                        5.0 ocena
                                    </div>
                                </div>
                                <div class="user">
                                    <strong>Dragica</strong>
                                    <div class="verified">
                                        Verified Buyer
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <h4>
                                    <a target="_blank" href="">
                                        “Svakom bih preporučila!” </a>
                                </h4>
                                <div class="copyblock">
                                    <p>Nije uvek lako da primetite da li ovakvi proizvodi rade ili ne, ali sam ja potpuno ubeđena da smartdot radi! Telefon mi se konstanto pregrevao, ali od kako sam nalepila smartdot na njega, to se više ne dešava. Takođe ne umaram se tako lako dok radim, kao pre. Svakako pomaže da imam više energije. Moja preporuka!</p>
                                </div>
                            </div>
                        </div>
                        <div id="testimonial-3" class="testimonial-block">
                            <div class="rating">
                                <div class="stars">
                                    <img src="{{ asset('/') }}flexovalFiles/agatus/five-stars.jpg">
                                    <div class="star-count">
                                        5.0 ocena
                                    </div>
                                </div>
                                <div class="user">
                                    <strong>Jana Matic</strong>
                                    <div class="verified">
                                        Verified Buyer
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <h4>
                                    <a target="_blank" href="">
                                        “Svako treba da ima ovo” </a>
                                </h4>
                                <div class="copyblock">
                                    <p>Koristim proizvod skoro tri godine i prvo što sam primetila je koliko mi je san kvalitetniji. Svi moji uređaji imaju smartdot na njima, i više ne osećam iznenadan umor na pola dana, već imam energije kao nikada pre. Hvala!</p>
                                </div>
                            </div>
                        </div>
                        <div id="testimonial-4" class="testimonial-block">
                            <div class="rating">
                                <div class="stars">
                                    <img src="{{ asset('/') }}flexovalFiles/agatus/five-stars.jpg">
                                    <div class="star-count">
                                        5.0 ocena
                                    </div>
                                </div>
                                <div class="user">
                                    <strong>Ivana Jovic</strong>
                                    <div class="verified">
                                        Verified Buyer
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <h4>
                                    <a target="_blank" href="">
                                        “Stavljam tačkice na sve!” </a>
                                </h4>
                                <div class="copyblock">
                                    <p>Hvala smartDot-u na tome što mi je glava bistra, što imam dosta energije čak i kad radim od kuće. Osećam se dosta bolje i počela sam da lepim SmartDot na sve zanimacije mog muža! Hvala i korisničkoj službi čija su uputstva i saveti dosta pomogli.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="clearfix"></div>
        <div id="orderForm">
            <form action="{{$orderRoute}}" method="POST">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div class="col-md-12 allProductsHolder" id="allProductsHolder">
                    <div class="step-title js-customer-title" style="padding-top: 10px;text-align: center">
                        <h2 class="title">
                            Korak 1: <strong>Izaberite količinu</strong>
                        </h2>
                        <p><b>Razbija EMF zračenje u samom izvoru</b><br>
                            Stavi SmartDot na tvoj telefon, računar, laptop...</p>
                    </div>
                    @php
                        $columns = number_format(12/count($prices), 0);
                    @endphp
                    <div class="row" style="padding: 20px;">
                        @foreach($prices as $singlePrice)
                            <div class="col-md-{{$columns}} productHolder text-center">
                                <input type="radio" id="product{{$singlePrice['quantity']}}" name="quantity" class="quantity" value="{{$singlePrice['quantity']}}" @if(old('quantity') == $singlePrice['quantity']) checked @elseif($singlePrice['is_default']) checked @endif>
                                <label class="productLabel" for="product{{$singlePrice['quantity']}}">
                                    @if($singlePrice['is_default'])
                                        <span class="best-option-badge"><img src="{{ asset('/')}}thankyouFiles/thankyouUpSell/best-offer-badge.png"/></span>
                                    @endif
                                    <div class="img-holder">
                                        {{--<img src="{{asset('/').$product->product_image}}">--}}
                                        <img src="{{ asset('/') }}flexonikFiles/smartdot/smartdotProduct.jpg">
                                        <span class="quantity-badge">{{ $singlePrice['quantity'] }}x</span>
                                    </div>
                                    <div class="productDetails">
                                        @if($singlePrice['is_free_shipping'])
                                            <span style="color: rgb(26, 184, 0);">* Besplatna dostava</span>
                                        @endif
                                    </div>
                                    <div class="productPrices">
                                        <span class="old-price">{{ $singlePrice['originalPrice'] }} RSD</span>
                                        <span class="new-price">{{ $singlePrice['amount'] }} RSD</span>
                                    </div>
                                    <br>
                                    <div class="productOrder">
                                        <div class="productOrderBtn">PORUČI</div>
                                    </div>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-12" id="scroll-form">
                    <div class="orderst-form">
                        <div class="step-title js-customer-title" style="text-align: center;">
                            <h2 class="title">
                                Korak 2: <strong>Podaci za dostavu</strong>
                            </h2>
                        </div>
                        <div class="widget-customer-form">
                            <div class="full-name">
                                <div class="form-group">
                                    <input id="customer_firstname" value="{{ old('name') }}" name="name" class="shipping-firstname" type="text" maxlength="30" placeholder="Ime i prezime" required="">
                                </div>
                            </div>
                            <div class="form-group form-group--email">
                                <input id="customer_email" value="{{ old('email') }}" name="email" class="customer-email" type="email" maxlength="200" placeholder="Email adresa" required="" type="email">
                            </div>
                            <div class="form-group form-group--phone">
                                <input id="customer_phone" value="{{ old('phone') }}" name="phone" class="customer-phone" type="tel" maxlength="20" placeholder="Broj telefona" required="">
                            </div>
                        </div>
                        <div class="widget-shipping-form ">
                            <div class="form-group">
                                <input id="shipping_address" value="{{ old('shipping_address') }}" name="shipping_address" class="shipping-address" type="text" maxlength="80" placeholder="Ulica i broj" required="">
                            </div>
                            <div class="form-group">
                                <input id="shipping_city" value="{{ old('shipping_city') }}" name="shipping_city" class="shipping-city" type="text" maxlength="30" placeholder="Grad" required="">
                            </div>
                            <div class="form-group">
                                <input id="shipping_zip" value="{{ old('shipping_zip') }}" name="shipping_zip" class="shipping-postal" type="text" placeholder="Postanski broj" required="" pattern="\d*" maxlength="5">
                            </div>
                        </div>
                        <div class="w_button btn-order-now">
                            <button type="submit">
                                <span>ZAVRŠI KUPOVINU</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <style>
        html {
            scroll-behavior: smooth;
        }
        .orderst-form {
            display: none;
        }
        .allProductsHolder {
            margin-bottom: 20px;
        }
        .quantity {
            display: none;
        }
        .productLabel {
            cursor: pointer;
        }
        .img-holder {
            max-width: 280px;
            padding: 10px 0px;
            position: relative;
        }
        .img-holder img {
            max-width: 150px;
        }
        .productHolder {
            border:2px solid rgb(255, 255, 255);
            display: inline-block;
        }
        input {
            width: 100%;
        }
        .btn-order-now button {
            border-radius: 3px;
            color: #fff;
            font-weight: 700;
            font-size: 16px;
            /*background-color: rgb(26, 184, 0);*/
            background-color: #25ae4e;
            padding: 18px 5px 17px;
            display: block;
            width: 100%;
            line-height: 1;
            text-transform: uppercase;
            box-shadow: none;
        }
        .btn-order-now button:hover {
            transform: scale(1)
        }
        .productOrderBtn {
            border-radius: 3px;
            color: #fff;
            font-weight: 700;
            font-size: 16px;
            /*background-color: rgb(26, 184, 0);*/
            background-color: #25ae4e;
            padding: 10px;
            display: block;
            margin-left: 10%;
            width: 80%;
            text-transform: uppercase;
            border: 1px solid rgb(26, 84, 0);
        }
        .productPrices {

        }
        .productPrices > span {
            display: block;
            font-size: 22px;
        }
        .productPrices > .old-price {
            color:red;
            text-decoration:line-through;
        }
        .productPrices > .new-price {

        }
        .productDetails {
            min-height: 20px;
        }
        .best-option-badge img {
            position:absolute;
            top:0px;
            left:0px;
            width:90px!important;
            height:90px!important;
            z-index: 2;
        }
        .quantity-badge {
            background-color: rgba(242, 242, 242, 1);
            text-align: center;
            border-radius: 50%;
            border: 1px solid grey;
            padding: 10px;
            font-size: 20px;
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: 50px !important;
            height: 50px !important;
        }

        @media (max-width:795px) {
            .quantity-badge {
                bottom: 10px;
                right: 10px;
            }
        }
    </style>
    <script>
        $(document).ready(function() {
            $('.productHolder').css('border','3px solid rgb(255, 255, 255)');
            $('input[name=quantity]:checked').parent().css('border','3px solid rgb(26, 184, 0)');
            $('.quantity').click(function () {
                $('.productHolder').css('border','3px solid rgb(255, 255, 255)');
                $(this).parent().css('border','3px solid rgb(26, 184, 0)');
                $('.orderst-form').show(); //slidedown ne skroluje lepo na prvi klik, posle hoce
                function scrollToForm(formHeight) {
                    $('html, body').animate({
                        scrollTop: $("#scroll-form").offset().top-formHeight
                    }, 1);
                }
                if(window.outerWidth < 425) {
                    scrollToForm(260);
                } else {
                    scrollToForm(780);
                }
            })
        })
    </script>
</div>
<script type="text/javascript">
    (function($){
        $(document).ready(function () {

            let curGallery = 'guGallery-1';
            let mainimagecontainer = $('#' + curGallery).find('.gallery-image-container');

            $("#" + curGallery).on('init', function () {
                let firstImg = $("#" + curGallery).find('li').first().find('img');
                if (firstImg.length) {
                    let firstAlt = firstImg.attr('alt');
                    let firstSrc = firstImg.attr('src');
                    let firstId = firstImg.attr('id');
                    LoadImage(firstSrc, firstId);
                }
            });

            function LoadImage(src, thumbID) {
                let cleanlink = src.replace(/-\d+[Xx]\d+\./g, '.');
                mainimagecontainer.find('img').attr('src', cleanlink);
            }

        });

    })(jQuery);
</script>
<script>
    function reviewSlideshow(slideIt, options){
        slideIt = typeof slideIt !== 'undefined' ? slideIt : null;
        options = typeof options !== 'undefined' ? options : null;

        if(slideIt == true){
            if(typeof reviewSlideshow.persistent == 'undefined') {
                reviewSlideshow.persistent = true;
            }
        }

        if(options == null){
            options = {
                arrows: true,
                dots: true,
                draggable: true,
                swipe: true,
                swipeToSlide: true,
                touchMove: true,
                draggable: true,
                accessibility: true,
                adaptiveHeight: true,
                prevArrow:'',
                nextArrow:'<button class="arrow" type="button" role="button" aria-label="Next"></button>',
                rtl: ($('html').attr('dir') === 'rtl' ? true : false)
            };
        }
        if(slideIt == false && reviewSlideshow.persistent != true){
            $('#reviews .testimonials').slick('unslick');
        }else{
            $('#reviews .testimonials').not('.slick-initialized').slick(options);
        }
    }
    jQuery(function(){
        $(document).ready(function(){

            if($('#reviews').data('layout') === 1){
                enquire.register("screen and (max-width: 767.980px)", { //small range
                    match: function(){
                        reviewSlideshow();
                    },
                    unmatch: function(){
                        reviewSlideshow(false);
                    }
                });
            }

            if($('#reviews').data('layout') === 2){
                reviewSlideshow(true, {
                    arrows: false,
                    dots: true,
                    draggable: true,
                    swipe: true,
                    swipeToSlide: true,
                    touchMove: true,
                    draggable: true,
                    accessibility: true,
                    adaptiveHeight: false,
                    prevArrow:'',
                    nextArrow:'',
                    infinite: true,
                    rtl: ($('html').attr('dir') === 'rtl' ? true : false),
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    responsive: [
                        {
                            breakpoint: 767,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            }
        });
    });
</script>
<script>
    $(function () {
        $(".gallery-container").trigger("init");
    });
</script>
<script>
    let curGallery = 'guGallery-1';
    let mainimagecontainer = $('#' + curGallery).find('.gallery-image-container');

    $("#" + curGallery + "-thumbnails li").on('click', function () {
        if (!$(this).hasClass('selectedThumb')) {
            $("#" + curGallery + "-thumbnails li.selectedThumb").removeClass('selectedThumb');
            $(this).addClass('selectedThumb');

            let thumbnail = $(this).find('img');
            let thumbID = $(this).attr('id');

            let thumbSrc = thumbnail.attr('src');
            LoadImage(thumbSrc, thumbID);

            function LoadImage(src, thumbID) {
                let cleanlink = src.replace(/-\d+[Xx]\d+\./g, '.');
                mainimagecontainer.find('img').attr('src', cleanlink);
            }
        }
    });
</script>
<script type='text/javascript' src='{{ asset('/') }}flexovalFiles/agatus/enquire.js' id='enquire-script-js'></script>
<script type='text/javascript' src='{{ asset('/') }}flexovalFiles/agatus/slick.min.js' id='slideshow-script-js'></script>
@include('components.pixel_footer')
</body>
</html>