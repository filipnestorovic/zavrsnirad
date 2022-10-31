<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler/styles.css">
    <style>
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
        .offer_section {
            height: 630px;
            background: #eee url({{ asset('/') }}purplerelaxFiles/multifunctionalcurler2/desctop__offer_bg.jpg) center top no-repeat;
        }
        .order_section .content_block {
            padding: 0 0;
            height: 630px;
            background: #eee url({{ asset('/') }}purplerelaxFiles/multifunctionalcurler2/desctop__order_bg.jpg) center top no-repeat;
        }
        @media screen and (max-width: 639px) {
            .offer_section {
                padding: 20px 0 25px;
                height: auto;
                background-image: url({{ asset('/') }}purplerelaxFiles/multifunctionalcurler/mobile__offer_bg.jpg);
            }
            .order_section .content_block {
                padding: 20px 0 25px;
                height: auto;
                background-image: url({{ asset('/') }}purplerelaxFiles/multifunctionalcurler/mobile__offer_bg.jpg);
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<div class="menu-hid">
    <div class="header-menu-wrp">
        <div class="wrp">
            <div class="header-menu">
                <ul>
                    <li><a href="#osob">O proizvodu</a></li>
                    <li><a href="#use_section">Zašto izabrati</a></li>
                    <li><a href="#about">Čemu služi</a></li>
                    <li><a href="#otzv">Utisci kupaca</a></li>
                    <li><a href="#order-form">Poručite odmah</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<header class="offer_section">
    <div class="content_block" id="content_block">
        <div class="wrapper">
            <div class="title_block">
                <h3 class="main_title">MULTIFUNCTIONAL <br> HAIR CURLER</h3>
                <p class="subtitle">SAVRŠENA KOSA ZA NEKOLIKO MINUTA</p>
            </div>
            <ul>
                <li>Lokne se dugo drže i ne ispravljaju se</li>
                <li>Brzo zagrevanje</li>
                <li>Negativna jonizacija pojačava sjaj kose</li>
                <li>Ne isušuje i ne šteti kosu</li>
            </ul>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">Redovna cena:</div>
                    <div class="value">
                        {{ $prices[1]['originalPrice'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
                <div class="price_item new">
                    <div class="text">Cena sada:</div>
                    <div class="value">
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
            </div>
            <a href="#order_form" class="button">Poručite sada</a>
            <div class="deadline_text">Količine su ograničene</div>
        </div>
    </div>
</header>
<section id="osob">
    <h2 class="b-video-title">ZAŠTO MULTIFUNCTIONAL HAIR CURLER?</h2>
    <div class="box-osob">
        <div class="img-toptop">
            <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler2/box-1-1.jpg" class="img-my-top">
        </div>
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title">Pogodno za sve tipove kose</h3>
                <div class="box__body-text">
                    <p class="osob-text">Pegla za kosu je funkcionalna i jednostavna za upotrebu. Zahvaljujući njoj se mogu dobiti savršene lokne za nekoliko minuta.</p>
                    <p class="osob-text">Koristeći specijalni sistem za uvijanje, možete napraviti čvrste lokne ili lagane talase. Poseban premaz površine štiti
                        kosu od štetnih efekatat i temperature.</p>
                    <p class="osob-text"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title">Širok spektar primena</h3>
                <div class="box__body-text">
                    <p class="osob-text">Pegla za uvijanje kose sa više traka za uvijanje vam omogućava da brzo i profesionalno pravite lokne.
                        Za samo nekoliko minuta dobijate savršenu frizuru, bilo da je svečana ili svakodnevna.
                        Ova pegla za uvijanje kose pravi lokne koje kod frizera plaćate jako skupo.</p>
                </div>
            </div>
        </div>
        <div class="img-toptop flex-left">
            <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler/box-1-2.jpg" class="img-my-top">
        </div>
    </div>
</section>
<section class="use_section" id="use_section">
    <div class="wrapper">
        <h2>  <span style="color: #d98945">9 RAZLOGA DA IZABERETE MULTIFUNCTIONAL HAIR CURLER</span></h2>
        <div class="use_list">
            <div class="use_item">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler/use__use1_image.jpg" alt="">
                <h4>Zauvek ćete zaboraviti na ispucale krajeve, slabu kosu i neatraktivnu frizuru</h4>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler2/use__use2_image.jpg" alt="">
                <h4>Postići ćete željeni rezultat za samo nekoliko minuta</h4>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler/use__use3_image.jpg" alt="">
                <h4>Zahvaljujući jedinstvenom turmalinskom premazu, kosa dobija zdrav sjaj</h4>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler2/use__use4_image.jpg" alt="">
                <h4>Eliminiše elektricitet sa kose</h4>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler2/use__use5_image.jpg" alt="">
                <h4>Turmalniski sloj grejnih elemenata štiti kosu od oštećenja</h4>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler2/use__use6_image.jpg" alt="">
                <h4>Trajaće mnogo godina jer ima kućište visokog kvaliteta i čvrstoće</h4>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler2/use__use7_image.jpg" alt="">
                <h4>Jednostavan za korišćenje</h4>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler2/use__use8_image.jpg" alt="">
                <h4>Možete sami kontrolisati zagrevanje</h4>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler2/use__use9_image.jpg" alt="">
                <h4>Jedinstveni oblik će vam omogućiti da vaše lokne krenu već od samog korena kose</h4>
            </div>
        </div>
        <a href="#order_form" class="button">Poručite sada</a>
    </div>
</section>
<!-- /use -->
<!-- video -->
{{--<section class="video_section" id="video_section">--}}
{{--    <div class="wrapper">--}}
{{--        <h2 style="text-shadow: #d98945 0 0 10px;">Посмотрите сами как легко пользоваться плойкой с мультистержнем</h2>--}}
{{--        <div class="video_wrapper">--}}
{{--            <div class="video_block">--}}
{{--                <video width="100%" height="100%" controls="controls" controls poster="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler/poster.jpg" >--}}
{{--                    <source src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler/1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>--}}
{{--                </video>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<section id="about">
    <div class="box-osob">
        <div class="img-toptop">
            <!--left-img-->
            <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler/box-31_ver1.jpg" class="img-my-top">
        </div>
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title">Za šta je dizajniran Multifunctional Hair Curler?</h3>
                <div class="box__body-text">
                    <p class="osob-text">Poseban oblik uvijača je dizajniran da kreira različite vrste frizura: dobro definisane talase, blage i prirodne, kao i da
                        doda volumen kosi.</p>
                    <p class="osob-text"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title">Multifunctional Hair Curler je pogodan i siguran</h3>
                <div class="box__body-text">
                    <p class="osob-text">Udoban rad je olakšan zahvaljujući tehnologiji slobodne rotacije kabla i toplotno izolovanog vrha.
                        Pegla za uvijanje će ispuniti sva vaša očekivanja i imaće dug radni vek zahvaljujući funkciji automatskog isključivanja radi
                        zaštite od pregrevanja.</p>
                </div>
            </div>
        </div>
        <div class="img-toptop flex-left">
            <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler2/box-32_ver1.jpg" class="img-my-top">
        </div>
    </div>
</section>
<section class="gallery_sect" style="padding-top: 5px;">
    <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler2/gallery.jpg" alt="" class="panorama" height="323" width="1968">
</section>
<section>
    <h2>KARAKTERISTIKE</h2>
    <div class="box-osob">
        <div class="img-toptop">
            <!--left-img-->
            <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler2/box-4_ver1.jpg" class="img-my-top">
        </div>
        <div class="img-toptop">
            <div class="main-text">
                <div class="box__body-text">
                    <p class="osob-text-list"><b>Materijal: </b>keramika</p>
                    <p class="osob-text-list"><b>Premaz grejnog elementa: </b>Turmalin</p>
                    <p class="osob-text-list"><b>Snaga: </b>50 W</p>
                    <p class="osob-text-list"><b>Kontrola temperature: </b>DA</p>
                    <p class="osob-text-list"><b>Vreme automatskog isključivanja: </b>60 min</p>
                    <p class="osob-text-list"><b>Dodatna fukncija: </b>jonizacija</p>
                    <p class="osob-text"></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section" id="otzv">
    <div class="wrapper">
        <h2 style="text-shadow: #d98945 0 0 10px;">UTISCI KUPACA</h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler/reviews__review1_photo.jpg" alt="">
                <div class="author_name">Marina, 29 godina, Beograd</div>
                <p>"Frizura je fenomenalna i traje dugo. Efekat je isti kao ko frizera, samo je jeftinije.
                    Moja talasasta kosa je stvarno prelepa. Pegla jako brzo odradi svoj posao i ne oduzima mi mnogo vremena".</p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler/reviews__review2_photo.jpg" alt="">
                <div class="author_name">Marija, 32 godine, Jagodina</div>
                <p>"Rezultat je fenomenalan. Za 10-15 minuta mogu sebi da napravim šik frizuru bez dodatnog odlaska kod frizera, a i sve to
                    potpuno besplatno. Talasi se dobro drže, a ako se dodatno ojačaju lakom mogu izdržati i 24h".</p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler/reviews__review3_photo.jpg" alt="">
                <div class="author_name">Svetlana, 23 godine, Novi Sad</div>
                <p>"Korišćenje ove pegle je apsolutno jednostavno. Moja duga kosa se za čas uvije i za 15 minuta spremna sam za izlazak sa svečanom frizurom.
                    Sestra mi je kupila ovaj proizvod i moram da kažem da je za svaku preporuku."</p>
            </div>
        </div>
    </div>
</section>
<!-- /reviews -->
<!-- order steps -->
<section class="order_steps_section">
    <div class="wrapper">
        <h2>KAKO PORUČITI?</h2>
        <div class="steps_list">
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler/order_steps__step1_image.jpg" alt="Гамак для отдыха">
                    <div class="number">1</div>
                </div>
                <p>Ostavite podatke za dostavu na našem sajtu</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler/order_steps__step2_image.jpg" alt="Гамак для отдыха">
                    <div class="number">2</div>
                </div>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler/order_steps__step3_image.jpg" alt="Гамак для отдыха">
                    <div class="number">3</div>
                </div>
                <p>Pošiljku šaljemo brzom poštom</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler/order_steps__step4_image.jpg" alt="Гамак для отдыха">
                    <div class="number">4</div>
                </div>
                <p>Plaćate kuriru brze pošte pri preuzimanju</p>
            </div>
        </div>
    </div>
</section>
<!-- /order steps -->
<!-- order -->
<section class="order_section" id="order-form">
    <div class="top_title_block">
        <div class="wrapper">
            <h3>PORUČITE ODMAH <span>SA 40% POPUSTA</span></h3>
        </div>
    </div>
    <div class="content_block">
        <div class="wrapper">
            <div class="title_block">
                <h3 class="main_title">MULTIFUNCTIONAL <br> HAIR CURLER</h3>
                <p class="subtitle">SAVRŠENA KOSA ZA NEKOLIKO MINUTA</p>
            </div>
            <div class="form_block">
                <div class="price_block clearfix">
                    <div class="price_item old">
                        <div class="text">Redovna cena:</div>
                        <div class="value">
                            {{ $prices[1]['originalPrice'] }}
                            {{ $prices[1]['currency'] }}
                        </div>
                    </div>
                    <div class="price_item new">
                        <div class="text">Cena sada:</div>
                        <div class="value">
                            {{ $prices[1]['amount'] }}
                            {{ $prices[1]['currency'] }}
                        </div>
                    </div>
                </div>
                <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input class="field" type="text" name="name" placeholder="Ime i prezime" required>
                    <input class="field" type="tel" name="phone" placeholder="Telefon" required>
{{--                    <input class="field" type="text" name="shipping_address" placeholder="Adresa" required>--}}
{{--                    <input class="field" type="text" name="shipping_city" placeholder="Grad" required>--}}
                    <button class="button" type="submit">Poručite sada</button>
                </form>
                <div class="deadline_text">Količine su ograničene</div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}shared_files/jquery.panorama.js"></script>
<script src="{{ asset('/') }}purplerelaxFiles/multifunctionalcurler/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
