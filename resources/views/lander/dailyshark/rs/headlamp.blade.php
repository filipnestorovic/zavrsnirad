<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=480"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/headlamp/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/headlamp/styles.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/headlamp/swiper-bundle.min.css"/>
    <style>
        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/OpenSans-Light.woff') format('woff');
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/OpenSans.woff') format('woff');
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/OpenSans-Italic.woff') format('woff');
            font-weight: 400;
            font-style: italic;
        }

        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/OpenSans-Semibold.woff') format('woff');
            font-weight: 600;
            font-style: normal;
        }

        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/OpenSans-SemiboldItalic.woff') format('woff');
            font-weight: 600;
            font-style: italic;
        }

        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/OpenSans-Bold.woff') format('woff');
            font-weight: 700;
            font-style: normal;
        }

        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/OpenSans-Extrabold.woff') format('woff');
            font-weight: 800;
            font-style: normal;
        }
    </style>
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section">
        <h1 class="main_title"></h1>
        <div class="offer_image">
            <img class="offer_product" src="{{ asset('/') }}dailysharkFiles/headlamp/header_product.jpg" alt=""/>
            <div class="desc">
                <p>
                    <span>NAJNOVIJE</span> U 2023.
                </p>
            </div>
        </div>
        <div class="price clearfix">
            <div class="sale">
                Akcija
                <span>-40%</span>
                popusta
            </div>
        </div>
        <br/>
        <div class="amount">
            <p>
                <span>{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</span><span>{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</span>
            </p>
        </div>
        <a href="#order_form" class="button-m">PORUČITE ODMAH</a>
        <div class="products_count">
            Ostalo još <span>18</span> proizvoda na akciji
        </div>
    </header>
    <section class="sect_3">
        <img src="{{ asset('/') }}dailysharkFiles/headlamp/111.png" alt=""
             style="padding: 0 80px; margin: -30px 0 0 0;"/>
        <ul class="list_4">
            <li>
                <p><b>Ima jako difuzno svetlo</b></p>
            </li>
            <li>
                <p><b>Senzor pokreta</b></p>
            </li>
            <li>
                <p><b>Dugotrajnost</b></p>
            </li>
            <li>
                <p><b>Čvrsto kućište</b></p>
            </li>
            <li>
                <p><b>Svestranost upotrebe</b></p>
            </li>
        </ul>
        <a href="#order_form" class="button-m">PORUČITE ODMAH</a>
        <div class="products_count">
            Ostalo još <span>18</span> proizvoda na akciji
        </div>
    </section>
    <section class="sect_2 gradient_theme">
        <br/>
        <h2 class="title separator">
            <span>HEAD LAMP</span> BATERIJSKA LAMPA
        </h2>
        <img src="{{ asset('/') }}dailysharkFiles/headlamp/555.png" alt=""/>
        <p>Far sa senzorom pokreta i dve odvojene led diode.</p>
        <p>Obe led diode su podesive i imaju dva načina rada.</p>
        <img src="{{ asset('/') }}dailysharkFiles/headlamp/444.jpg" alt=""/>
        <p>Telo lampe je gumeno. Na prednjoj strani se nalazi baterijska lampa sa 40 dioda, jarko difuzno svetlo i koristi se da osvetli prostor od 20-30 metara kvadratnih.</p>
        <p>Na desnoj strani nalazi se baterijska lampa koja ima fokusirani snop koji se koristi za osvetljenje velikog dometa, čak do 50 metara.</p>
        <img src="{{ asset('/') }}dailysharkFiles/headlamp/333.jpg" alt=""/>
        <p>Prednja lampa se napaja ugrađenom baterijom koja se puni preko USB-a.</p>
        <p>Može da radi do 8 sati. Lampa takođe ima ugrađen senzor pokreta.</p>
        <p>Rad na senzor režimu može da se uključi na dugme i baterijska lampa prelazi u režim rada sa senzorom pokreta.</p>
        <a href="#order_form" class="button-m">PORUČITE ODMAH</a>
        <div class="products_count">
            Ostalo još <span>18</span> proizvoda na akciji
        </div>
        <br/>
    </section>
    <section class="sect_4 gradient_theme">
        <img src="{{ asset('/') }}dailysharkFiles/headlamp/222.jpg" alt=""
             style="margin-bottom: 20px; border-radius: 10px; box-shadow: 0px 4px 4px rgb(0 0 0 / 35%); max-width: 440px;"/>
        <br/>
        <h2 class="title">
            <span>KARAKTERISTIKE</span>
        </h2>
        <ul class="char_list">
            <li>
                <span>Materijal kućišta:</span>
                guma
            </li>
            <li>
                <span>Led diode:</span>
                40
            </li>
            <li>
                <span>Osvetljenost u širinu:</span>
                30 kvadrata
            </li>
            <li>
                <span>Osvetljenost u daljinu:</span>
                50 metara
            </li>
            <li>
                <span>Trajanje baterije:</span>
                8 sati
            </li>
            <li>
                <span>Režimi rada:</span>
                maksimalno, ekonomično
            </li>
            <li>
                <span>Punjenje:</span>
                USB
            </li>
            <li>
                <span>Baterija:</span>
                ugrađena
            </li>
            <li>
                <span>Tip sijalice:</span>
                LED
            </li>
            <li>
                <span>Tip napajanja:</span>
                baterija
            </li>
        </ul>
    </section>
    <section class="sect_5">
        <h2 class="title">
            <span>PREKO 1439 KUPACA</span>
            SU NAS VEĆ OCENILI
        </h2>
        <br/>
        <div class="reviews">
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/headlamp/rev1.jpg" alt=""/>
            </div>
        </div>
    </section>
    <section class="sect_6">
        <h2 class="title">
            KAKO PORUČITI
            <span>DOSTAVA I PLAĆANJE</span>
        </h2>
        <ul class="order_list">
            <li class="clearfix">
                <div class="text">
                    <h4>Poručivanje</h4>
                    <p>
                        Ostavite svoje podatke na našem sajtu i kontaktiraćemo vas da potvrdimo porudžbinu.
                    </p>
                </div>
            </li>
            <li class="clearfix">
                <div class="text">
                    <h4>Isporuka</h4>
                    <p>
                        Šaljemo vašu porudžbinu kurirskom službom u roku od 1-2 radna dana.
                    </p>
                </div>
            </li>
        </ul>
        <div class="order_info">
            Vaš paket će bezbedno stići u najkraćem vremenskom roku
        </div>
    </section>
    <section class="offer_section offer_bot">
        <h1 class="main_title"></h1>
        <div class="offer_image">
            <img class="offer_product" src="{{ asset('/') }}dailysharkFiles/headlamp/header_product.jpg" alt=""/>
            <div class="desc">
                <p>
                    <span>NAJNOVIJE</span> U 2023.
                </p>
            </div>
        </div>
        <div class="price clearfix">
            <div class="sale">
                Akcija
                <span>-40%</span>
                popusta
            </div>
        </div>
        <div class="row" id="order_form">
            <form id="order_form" class="main-order-form m1-form" action="{{$orderRoute}}" method="POST" name="form-type1">
                <div class="amount-block">
                    <div class="amount">
                        <p>
                            <span>{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</span><span>{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</span>
                        </p>
                    </div>
                </div>
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" placeholder="Ime i prezime" required=""/>
                <input type="tel" name="phone" placeholder="Telefon" required=""/>
                <input type="text" name="shipping_address" placeholder="Adresa" required=""/>
                <input type="text" name="shipping_city" placeholder="Grad" required=""/>
                <button class="button-m" type="submit">Poručite</button>
            </form>
        </div>
        <p class="garant">Garantujemo privatnost Vaših ličnih podataka</p>
    </section>
</div>

<script defer src="{{ asset('/') }}dailysharkFiles/headlamp/swiper-bundle.min.js"></script>
<script defer src="{{ asset('/') }}dailysharkFiles/headlamp/main.js"></script>
@include('components.pixel_footer')
</body>
</html>
