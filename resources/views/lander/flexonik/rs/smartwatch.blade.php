<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link type="text/css" href="{{ asset('/') }}flexonikFiles/smartwatch/style.css" rel="stylesheet">
    <link type="text/css" href="{{ asset('/') }}shared_files/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('/') }}flexonikFiles/smartwatch/big_watch.png" type="image/png">
    <link rel="preload" href="{{ asset('/') }}fonts/GothamPro.woff" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('/') }}fonts/GothamPro-Bold.woff" as="font" type="font/woff" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: 'FontAwesome';
            src:url('{{ asset('/') }}fonts/fontawesome-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: 'Gotham Pro';
            src: url("{{ asset('/') }}fonts/GothamPro.woff") format("woff");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Gotham Pro Bold';
            src: url("{{ asset('/') }}fonts/GothamPro-Bold.woff") format("woff");
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }
    </style>
</head>

<body>
<div class="wrapper">
    @include('components.display_errors')
    <section class="header">
        <div class="header__menu menu">
            <div class="container">
                <div class="menu__logo col-3">
                    <div class="logo__text">
                        <a href="#">
                            <img src="{{ asset('/') }}flexonikFiles/smartwatch/logo_new.png" class="logo">
                        </a>
                    </div>
                </div>
                <div class="menu__list-wrapper col-9">
                    <div class="menu__mobile hide-l"></div>
                    <ul id="menu" class="menu__list hide-m hide-s">
                        <li>
                            <a href="#scroll-descr" class="menu__item">Funkcije</a>
                        </li>
                        <li class="hide-s hide-m">
                            <div class="menu__item--dot"></div>
                        </li>
                        <li>
                            <a href="#scroll-specs" class="menu__item">Karakteristike</a>
                        </li>
                        <li class="hide-s hide-m">
                            <div class="menu__item--dot"></div>
                        </li>
                        <li>
                            <a href="#scroll-benefits" class="menu__item">Prednosti</a>
                        </li>
                        <li class="hide-s hide-m">
                            <div class="menu__item--dot"></div>
                        </li>
                        <li>
                            <a href="#scroll-reviews" class="menu__item">Utisci</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="header__preview preview container">
            <div class="preview__photo col-6">
                <img src="{{ asset('/') }}flexonikFiles/smartwatch/big_watch.png" alt="xPower Smart Watch" title="xPower Smart Watch">
            </div>
            <div class="preview__info info col-6">
                <!-- <div class="info__headline">xPower Smart Watch</div> -->
                <h1 class="info__title">SMART WATCH</h1>
                <div class="info__subline">Imajte svoj Smarth Phone na ruci!</div>
                <div class="info__watch__func">
                    <ul>
                        <li>Upućujte pozive i odgovarajte na njih</li>
                        <li>Internet</li>
                        <li>Praćenje sna</li>
                        <li>Brojanje koraka</li>
                        <li>Funkcija protiv gubljenja</li>
                    </ul>
                </div>
                {{--<div class="form__countdown countdown" style="margin-top: 30px;">--}}
                    {{--<div class="countdown-descr">Fino alla fine dell’offerta rimane:</div>--}}
                    {{--<div class="cd">--}}
                        {{--<div id="cd__tiles" class="cd__tiles"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="info__price price">
                    <div class="price__list">
                        <div class="price__wrong">
                            <span class="price_land_s2">{{ $prices[1]['originalPrice'] }}</span>
                            <span class="price_land_curr"> RSD</span>
                        </div>
                        <div class="price__new">
                            <span class="price_land_s1">{{ $prices[1]['amount'] }}</span>
                            <span class="price_land_curr"> RSD</span>
                        </div>
                    </div>
                    <div class="price__discount">-40%</div>
                </div>
                <a href="#scroll-buy" class="preview__button button">ISKORISTITE POPUST SADA</a>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <section id="scroll-descr" class="triggers-wrapper">
        <h1 class="heading heading--primary heading--white">GLAVNE FUNKCIJE SMART WATCH UREĐAJA</h1>
        <div class="triggers container">
            <div class="trigger">
                <div class="trigger__icon">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div class="trigger__title">Pozivi</div>
                <div class="trigger__descr">Pomoću sata možete obavljati razgovor.</div>
            </div>
            <div class="trigger">
                <div class="trigger__icon">
                    <i class="fa fa-commenting-o" aria-hidden="true"></i>
                </div>
                <div class="trigger__title">Poruke</div>
                <div class="trigger__descr">Možete da proverite sms i druge vrste poruke.</div>
            </div>
            <div class="trigger">
                <div class="trigger__icon">
                    <i class="fa fa-file-o" aria-hidden="true"></i>
                </div>
                <div class="trigger__title">Slot za sim karticu</div>
                <div class="trigger__descr">Ovaj sat ima poseban sim slot. Sat postaje pametni telefon.</div>
            </div>
            <div class="trigger">
                <div class="trigger__icon">
                    <i class="fa fa-bell-o" aria-hidden="true"></i>
                </div>
                <div class="trigger__title">Buđenje</div>
                <div class="trigger__descr">Budilnik radi melodično i sa vibracijama.</div>
            </div>
            <div class="trigger">
                <div class="trigger__icon">
                    <i class="fa fa-bluetooth-b" aria-hidden="true"></i>
                </div>
                <div class="trigger__title">Bluetooth</div>
                <div class="trigger__descr">Povezivanje sata sa telefonom putem Bluetooth veze.</div>
            </div>
            <div class="trigger">
                <div class="trigger__icon">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                </div>
                <div class="trigger__title">Nadgledanje sna</div>
                <div class="trigger__descr">Sat analizira koja je najbolja faza spavanja.</div>
            </div>
            <div class="trigger">
                <div class="trigger__icon">
                    <i class="fa fa-heartbeat" aria-hidden="true"></i>
                </div>
                <div class="trigger__title">Senzor kalorija</div>
                <div class="trigger__descr">Uvek ćete znati koliko kalorija sagorevate.</div>
            </div>
            <div class="trigger">
                <div class="trigger__icon">
                    <i class="fa fa-male" aria-hidden="true"></i>
                </div>
                <div class="trigger__title">Koraci</div>
                <div class="trigger__descr">Znaćete koliko koraka napravite.</div>
            </div>
            <div class="trigger">
                <div class="trigger__icon">
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                </div>
                <div class="trigger__title">Pretraživanje telefona</div>
                <div class="trigger__descr">Sat ima funkciju pretraživanja telefona</div>
            </div>
            <div class="trigger">
                <div class="trigger__icon">
                    <i class="fa fa-microphone" aria-hidden="true"></i>
                </div>
                <div class="trigger__title">Diktafon</div>
                <div class="trigger__descr">Moći ćete da snimate zvukove.</div>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <section id="scroll-specs" class="specs container">
        <h1 class="heading">Karakteristike</h1>
        <div class="specs__gallery col-6">
            <div class="product-gallery owl-carousel">
                <div data-hash="photo-one" class="product-gallery__item">
                    <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/big_watch.png">
                </div>
                <div data-hash="photo-two" class="product-gallery__item">
                    <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/GT08-03.png">
                </div>
                <div data-hash="photo-three" class="product-gallery__item">
                    <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/lateral_watch.png">
                </div>
            </div>
            <div class="product-gallery__image-nav">
                <div class="image-nav__item">
                    <a href="#photo-one" class="image-nav__link">
                        <img src="{{ asset('/') }}flexonikFiles/smartwatch/big_watch.png" alt="xPower Smart Watch" title="xPower Smart Watch"
                             class="image-nav__img">
                    </a>
                </div>
                <div class="image-nav__item">
                    <a href="#photo-two" class="image-nav__link">
                        <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/GT08-03.png"
                             class="image-nav__img">
                    </a>
                </div>
                <div class="image-nav__item">
                    <a href="#photo-three" class="image-nav__link">
                        <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/lateral_watch.png"
                             class="image-nav__img">
                    </a>
                </div>
            </div>
        </div>
        <div class="specs__param-list param-list col-6">
            <div class="container">
                <div class="param-list__row col-3">
                    <div class="param-list__item">
                        <div class="param-list__name">Kompatibilnost:</div>
                        <div class="param-list__value">IOS, Android</div>
                    </div>
                    <div class="param-list__item">
                        <div class="param-list__name">Mreža:</div>
                        <div class="param-list__value">GSM 850/900/ 1800/1900 MGhz</div>
                    </div>
                    <div class="param-list__item">
                        <div class="param-list__name">Broj sim slotova:</div>
                        <div class="param-list__value">1</div>
                    </div>
                    <div class="param-list__item">
                        <div class="param-list__name">Jezik:</div>
                        <div class="param-list__value">Engleski</div>
                    </div>
                    <div class="param-list__item">
                        <div class="param-list__name">Ekran:</div>
                        <div class="param-list__value">TFT-display sa senzorima 240х240</div>
                    </div>
                    <div class="param-list__item">
                        <div class="param-list__name">Memorija:</div>
                        <div class="param-list__value">128MB ROM + 64MB RAM</div>
                    </div>
                </div>
                <div class="param-list__row col-3">
                    <div class="param-list__item">
                        <div class="param-list__name">Slot za memorijsku karticu:</div>
                        <div class="param-list__value">microSD (do 32 GB)</div>
                    </div>
                    <div class="param-list__item">
                        <div class="param-list__name">Baterija:</div>
                        <div class="param-list__value">350 мАh (dovoljno za 2-3 dana korišćenja)</div>
                    </div>
                    <div class="param-list__item">
                        <div class="param-list__name">Bluetooth:</div>
                        <div class="param-list__value">Verzija 3.0</div>
                    </div>
                    <div class="param-list__item">
                        <div class="param-list__name">Materijal narukvice:</div>
                        <div class="param-list__value">Silikon</div>
                    </div>
                    <div class="param-list__item">
                        <div class="param-list__name">Kamera:</div>
                        <div class="param-list__value">foto 640х480, video 320х240</div>
                    </div>
                    <div class="param-list__item">
                        <div class="param-list__name">Težina (g):</div>
                        <div class="param-list__value">62</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <section id="scroll-benefits" class="benefits-wrapper">
        <div class="benefits container">
            <h1 class="heading heading--primary heading--white">PREDNOSTI</h1>
            <div class="benefits__item col-6">
                <div class="benefits__icon">
                    <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/icon-check.png">
                </div>
                <div class="benefits__title">Imaćete telefon na zglobu</div>
                <div class="benefits__descr">Smart Watch je kompatibilan sa bilo kojim poznatim pametnim telefonom i može se koristiti kao telefon</div>
            </div>
            <div class="benefits__item col-6">
                <div class="benefits__icon">
                    <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/icon-check.png">
                </div>
                <div class="benefits__title">Daljinski upravljač za vaš pametni telefon</div>
                <div class="benefits__descr">Upravljajte pozivima, kamerom i ostalim funkcijama pomoću ekrana na Smart Watch-u.</div>
            </div>
            <div class="benefits__item col-6">
                <div class="benefits__icon">
                    <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/icon-check.png">
                </div>
                <div class="benefits__title">Fitness - tracker</div>
                <div class="benefits__descr">Funkcija brojača koraka će vam reći koliko ste kalorija potrošili tokom trčanja, koju razdaljinu ste prešli i koliko koraka</div>
            </div>
            <div class="benefits__item col-6">
                <div class="benefits__icon">
                    <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/icon-check.png">
                </div>
                <div class="benefits__title">Podsetnik za fizičku aktivnost</div>
                <div class="benefits__descr">Podsetiće vas da se već dugo niste pomerali i da je vreme da se bavite gimnastikom.
                    <br>
                    <br>
                </div>
            </div>
            <div class="benefits__item col-6">
                <div class="benefits__icon">
                    <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/icon-check.png">
                </div>
                <div class="benefits__title">Kontrola spavanja</div>
                <div class="benefits__descr">Znate li koliko je dobar vaš san? Smart Watch pametni sat to zna.</div>
            </div>
            <div class="benefits__item col-6">
                <div class="benefits__icon">
                    <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/icon-check.png">
                </div>
                <div class="benefits__title">Zaštita od gubitka</div>
                <div class="benefits__descr">Zaštita od gubitka osiguraće da ne izgubite sat ili ga zaboravite kod kuće. Aktivirajte ovu funkciju i telefon će vas podsetiti da ste zaboravili ili izgubiti Smart Watch.</div>
            </div>
            <div class="benefits__button" style="padding-bottom: 30px;">
                <a href="#scroll-buy" class="button" style="margin-left: 0;">NARUČITE SADA</a>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    {{--<section class="steps warning container">--}}
        {{--<h1 class="heading heading--secondary">--}}
            {{--<span>Attenzione!</span> Truffe!</h1>--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-6">--}}
                    {{--<h3>Cari clienti. Fate attenzione!</h3>--}}
                    {{--<p>Su internet sono comparsi molti truffatori che creano dei siti falsi per vendere prodotti non--}}
                        {{--originali.--}}
                        {{--Solitamente su questi siti il PREZZO è molto basso.</p>--}}
                {{--</div>--}}
                {{--<div class="col-6">--}}
                    {{--<h2>METODI PER EVITARE I FALSI</h2>--}}
                    {{--<ul>--}}
                        {{--<li>--}}
                            {{--<i class="fa fa-times"></i>Assenza del TELEFONO sul sito--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<i class="fa fa-times"></i>Vogliono il pagamento anticipato--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="text-center text3">--}}
                    {{--<p>Noi invece inviamo gli orologi senza pagamento anticipato! All'inizio ricevere il pacco, e--}}
                        {{--solo--}}
                        {{--dopo pagate.</p>--}}
                    {{--<h3>VI AUGURIAMO ACQUISTI FORTUNATI!</h3>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="clear"></div>--}}
    {{--</section>--}}
    <section class="secret-prize">
        <p>Samo danas, ako poručite Smart Watch, dobićete tajni poklon iznenađenja </p>
        <div class="secret-prize__img">
            <div class="secret-prize__price">{{ $prices[1]['amount'] }}  RSD </div>
        </div>
        <div class="benefits__button" style="padding-bottom: 0px;">
            <a href="#scroll-buy" class="button" style="margin-left: 0;">ISKORISTITE PONUDU</a>
        </div>
    </section>
    <div class="clear"></div>
    <section id="scroll-reasons" class="reasons-wrapper">
        <div class="s-warranty container">
            <h1 class="heading heading--primary heading--white">GARANCIJE NAŠE PRODAVNICE</h1>
            <div class="warranty-item">
                <img src="{{ asset('/') }}flexonikFiles/smartwatch/warranty-1_new.png" alt="">
                <h3>KVALITETAN PROIZVOD</h3>
                <p id="warranty-text">Uvek proverimo proizvod pre nego što ga pošaljemo. Svaki sat ima nove baterije i originalne delove. </p>
            </div>
            <div class="warranty-item">
                <img src="{{ asset('/') }}flexonikFiles/smartwatch/warranty-3_new.png" alt="">
                <h3>PLAĆANJE POUZEĆEM</h3>
                <p id="warranty-text">U slučaju kupovine na našoj web stranici ne zahtevamo avansno plaćanje. Plaćanje se vrši po prijemu pošiljke.</p>
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <div class="clear"></div>
    {{--<section id="scroll-reasons" class="reasons-wrapper">--}}
        {{--<div class="6reasons container">--}}
            {{--<h1 class="heading heading--primary heading--white">6 motivi per ordinare da noi </h1>--}}
            {{--<div class="container clearfix rew-box" style="text-align: center;">--}}
                {{--<div class="rew-item">--}}
                    {{--<h3>OFFERTA UNICA</h3>--}}
                    {{--<p>--}}
                        {{--La quantità di prodotti in offerta sono limitati.--}}
                    {{--</p>--}}
                {{--</div>--}}
                {{--<!-- <div class="rew-item">--}}
                {{--<h3>POWER BANK in regalo</h3>--}}
                {{--<p>In caso di ordine del modello in offerta riceverete un Power Bank gratis.</p>--}}
            {{--</div> -->--}}
                {{--<div class="rew-item">--}}
                    {{--<h3>NESSUN RISCHIO</h3>--}}
                    {{--<p>Nessun pagamento anticipato. Pagate il prodotto solo al momento della ricezione.</p>--}}
                {{--</div>--}}
                {{--<div class="rew-item">--}}
                    {{--<h3>PACCCO SICURO</h3>--}}
                    {{--<p>Pacco di cartone con rivestimenti interni adatti all’elettronica.</p>--}}
                {{--</div>--}}
                {{--<div class="rew-item">--}}
                    {{--<h3>CONSEGNA RAPIDA</h3>--}}
                    {{--<p>Da 1 a 3 giorni (dipende dalle regioni).</p>--}}
                {{--</div>--}}
                {{--<!-- <div class="rew-item">--}}
                {{--<h3>OFFERTA</h3>--}}
                {{--<p>Garanzia 1 anno. Avete diritto di reso entro due settimane dal giorno dell’ordine.</p>--}}
            {{--</div> -->--}}
            {{--</div>--}}
            {{--<div class="benefits__button">--}}
                {{--<a href="#scroll-buy" class="button" style="margin-left: 0;">Ordinare con lo sconto</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <div class="clear"></div>
    <section class="steps container">
        <h1 class="heading heading--secondary">KAKO RADIMO</h1>
        <div class="steps-img__wrapper container hide-l">
            <div class="steps__item steps__item--one col-3">
                <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/icon-howto1.png">
                <br>Poručite proizvod popunjavanjem forme na dnu stranice
            </div>
            <div class="steps__item steps__item--two col-3">
                <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/icon-howto2.png">
                <br>Potvrdićemo Vašu porudžbinu u najkraćem roku
            </div>
            <div class="steps__item steps__item--three col-3">
                <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/icon-howto3.png">
                <br>Paket stiže brzom poštom u roku od 1-2 radna dana
            </div>
            <div class="steps__item steps__item--four col-3">
                <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/icon-howto4.png">
                <br>Platite kuriru po preuzimanju paketa
            </div>
        </div>
        <div class="steps-img__wrapper steps-img__wrapper--l hide-s hide-m">
            <div class="steps__item steps__item--r steps__item--one">Poručite proizvod popunjavanjem forme na dnu stranice</div>
            <div class="steps__item steps__item--r steps__item--two">Potvrdićemo Vašu porudžbinu u najkraćem roku</div>
            <div class="steps__item steps__item--r steps__item--three">Paket stiže brzom poštom u roku od 1-2 radna dana</div>
            <div class="steps__item steps__item--r steps__item--four">Platite kuriru po preuzimanju paketa</div>
        </div>
    </section>
    <div class="clear"></div>
    {{--<section id="scroll-delivery" class="delivery-wrapper">--}}
        {{--<div class="6reasons container">--}}
            {{--<h1 class="heading heading--primary">Consegna</h1>--}}
            {{--<div class="delivery-content">--}}
                {{--<ul>--}}
                    {{--<li>--}}
                        {{--<div class="col-1 icon">--}}
                            {{--<i class="fa fa-male" aria-hidden="true"></i>--}}
                        {{--</div>--}}
                        {{--<div class="col-9">--}}
                            {{--<h3>La consegna in Italia avviene via corriere</h3>--}}
                            {{--<p>--}}
                            {{--</p>--}}
                            {{--<p>Pagamento alla consegna del pacco.</p>--}}
                            {{--<p>Tempistica consegna: 1-3 giorni.</p>--}}
                            {{--<p></p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="col-9">--}}
                            {{--<p></p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <div class="clear"></div>
    <section id="scroll-reviews" class="reviews-wrapper">
        <div class="reviews container">
            <div class="reviews__slider col-6">
                <div class="heading__icon heading__icon--reviews"></div>
                <h1 class="heading heading--white heading--primary heading--sm">UTISCI KUPACA</h1>
                <div class="slider-reviews owl-carousel">
                    <div class="review">
                        <div class="review__photo">
                            <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/user.png">
                        </div>
                        <div class="review__name">Andrija Popović</div>
                        <div class="review__text">Želeo sam ovaj sat i kupio sam ga sebi. Nemam apsolutno na šta da se žalim.
                            Savršen je kao telefon, može se zvati i razgovarati koristeći Bluetooth i sim karticu.</div>
                    </div>
                    <div class="review">
                        <div class="review__photo">
                            <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/user1.png">
                        </div>
                        <div class="review__name">Vaso Ristić</div>
                        <div class="review__text">Evo mog mišljenja o Smart Watch satu. Veoma je lep i praktičan.
                            Ima odličan displej i veoma sam imresioniran dizajnom. Slaže se sa svim tipovima odeće.
                            Imam android telefon i za sada sve odlično funkcioniše.</div>
                    </div>
                    <div class="review">
                        <div class="review__photo">
                            <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/user2.png">
                        </div>
                        <div class="review__name">Lidija Jović</div>
                        <div class="review__text">Za ovu cenu, kupila sam savršen sat. Praktično ga ne skidam sa ruke. Ima mnogo dobrih opcija koje su vrlo funkcionalne.
                            Mogu da se ubace memorijska i sim kartica. Preporučujem kupovinu ovog sata, nećete se pokajati.</div>
                    </div>
                </div>
            </div>
            <div class="reviews__photo col-6 hide-s">
                <picture>
                    <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/mockup_1.png">
                </picture>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <section id="scroll-buy" class="buy container">
        <!-- <h2 class="heading__headline">xPower Smart Watch</h2> -->
        <h1 class="heading heading--secondary heading--has-headline heading--extra">Smart Watch</h1>
        <div class="buy__photo col-6">
            <img alt="xPower Smart Watch" title="xPower Smart Watch" src="{{ asset('/') }}flexonikFiles/smartwatch/big_watch.png">
        </div>
        <div class="buy__form form col-6">
            <div class="form__price price price--buynow">
                <div class="price__wrong">
                    <span class="price_land_s2">{{ $prices[1]['originalPrice'] }}</span>
                    <span class="price_land_curr"> RSD</span>
                </div>
                <div class="price__discount">-40%</div>
                <div class="price__new">
                    <span class="price_land_s1">{{ $prices[1]['amount'] }}</span>
                    <span class="price_land_curr"> RSD</span>
                </div>
            </div>
            {{--<div class="form__countdown countdown">--}}
                {{--<div class="countdown-descr" style="padding: 20px 0 10px;">Fino alla fine dell’offerta rimane:</div>--}}
                {{--<div class="cd">--}}
                    {{--<div id="cd__tiles1" class="cd__tiles"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <label for=""></label>
                <input class="input input_name" type="text" name="name" placeholder="Ime i prezime"
                       required="">
                <label for=""></label>
                <input class="input input_phone" type="tel" name="phone"
                       placeholder="Broj telefona" required="">
                <label for=""></label>
                <input class="input input_name" type="text" name="shipping_address" placeholder="Adresa"
                       required="">
                <label for=""></label>
                <input class="input input_name" type="text" name="shipping_city" placeholder="Grad"
                       required="">
                <button type="submit" class="button">PORUČITE ODMAH</button>
            </form>
        </div>
    </section>
    <div class="clear"></div>
    <section class="footer-wrapper">
        <div class="footer container">
            {{--<div class="col-4 pull-left" style="padding: 10px">--}}
                {{--<a href="#">--}}
                    {{--<img src="{{ asset('/') }}flexonikFiles/smartwatch/logo_new.png" class="logo">--}}
                {{--</a>--}}
                {{--<br>--}}
            {{--</div>--}}
            {{--<div class="col-8 pull-right">--}}
                {{--<div class="copyright">--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </section>
</div>
<script type="text/javascript" src="{{ asset('/') }}shared_files/bootstrap.min.js"></script>
<script src="{{ asset('/') }}flexonikFiles/smartwatch/slicknav.js"></script>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}flexonikFiles/smartwatch/script.js"></script>
@include('components.pixel_footer')
</body>
</html>