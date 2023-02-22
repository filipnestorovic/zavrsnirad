<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/plasticrestore/4xoaun8c.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/plasticrestore/form.min.css"/>
    <style>
        html {
            scroll-behavior: smooth;
        }
        @font-face {
            font-family: 'Exo 2.0';
            src: url('{{ asset('/') }}fonts/r25zlrun.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/0tyd151-.woff') format('woff'),
            url('{{ asset('/') }}fonts/fz-q__jh.html') format('truetype');
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: 'Exo 2.0';
            src: url('{{ asset('/') }}fonts/_gm9lq0q.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/d1r807rn.woff') format('woff'),
            url('{{ asset('/') }}fonts/yzg8vwzz.html') format('truetype');
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Exo 2.0';
            src: url('{{ asset('/') }}fonts/268vszdz.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/xf2675nx.woff') format('woff'),
            url('{{ asset('/') }}fonts/5s241h1r.html') format('truetype');
            font-weight: 400;
            font-style: italic;
        }

        @font-face {
            font-family: 'Exo 2.0';
            src: url('{{ asset('/') }}fonts/q1hymba1.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/tltt3d7p.woff') format('woff'),
            url('{{ asset('/') }}fonts/6v8u42b7.html') format('truetype');
            font-weight: 700;
            font-style: normal;
        }

        @font-face {
            font-family: 'Exo 2.0';
            src: url('{{ asset('/') }}fonts/78u_ktu8.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/inhzs-y7.woff') format('woff'),
            url('{{ asset('/') }}fonts/czxu8pzw.html') format('truetype');
            font-weight: 900;
            font-style: normal;
        }
    </style>
</head>
<body>
<div class="wrap">
    @include('components.display_errors')
    <header class="offer">
        <div class="main-title">PLASTIC RESTORE</div>
        <div class="sub-title">RESTAURACIJA PLASTIKA U AUTOMOBILU</div>
        <div class="box">
            <div class="sponsor"></div>
            <img src="{{ asset('/') }}dailysharkFiles/plasticrestore/0dwdemad.gif">
        </div>
        <div class="price">
            <div class="sale">Popust <b>-40%<i></i></b></div>
            <div class="old">
                <p>Redovna cena:</p>
                <div class="val">
                     <span>
                        {{ $prices[1]['originalPrice'] }}
                     </span>
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="new">
                <p>Cena sa popustom:</p>
                <div class="val">
                     <span>
                        {{ $prices[1]['amount'] }}
                     </span>
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <div class="gradient">
            <ul class="bullet">
                <li>Vraća fabričku boju</li>
                <li>Uklanja mirko ogrebotine sa plastike</li>
                <li>Pogodno za sve boje i nijanse</li>
            </ul>
            <a href="#order" class="button-m">PORUČITE SA 40% POPUSTA</a>
        </div>
    </header>
    <section class="s1">
        <h2 class="title">VAŠ AUTOMOBIL <span>SIJA KAO NOV</span></h2>
        <div class="sub-title">Efekti primene Plastic Restore proizvoda:</div>
        <ul class="list-v1">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/plasticrestore/x6yshuxn.gif">
                <h4>RESTAURACIJA SPOLJNIH PLASTIKA</h4>
                <p>
                    Vraća bogatu boju plastične površine ostavljajući glatki i satenski sjaj.
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/plasticrestore/ukyx2srm.gif" width="480">
                <h4>PLASTIČNI DELOVI ISPOD HAUBE <br>I PRAGOVI</h4>
                <p>
                    Čini delove automobila očuvanim i mlađim.
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/plasticrestore/gezgi851.gif" width="480">
                <h4>UNUTRAŠNJOST AUTOMOBILA I RETROVIZORI</h4>
                <p>
                    Sredstvo je dizajnirano za negu plastike sa dugotrajnim efektom zadržavanja na površini.
                </p>
            </li>
        </ul>
        <a href="#order" class="button-m">PORUČITE SA 40% POPUSTA</a>
    </section>
    <section class="s2 dark-bg">
        <h2 class="title"><span>GLAVNE PREDNOSTI</span> PLASTIC RESTORE PROIZVODA</h2>
        <ul class="list-v2">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/plasticrestore/d1r807rn.jpg">
                <p>Bočica tečnosti koja se lako raspršuje</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/plasticrestore/d1r807rn.jpg">
                <p>Može da se koristi za automobil, motocikl, bicikl, trotinet itd.</p>
            </li>
            <li>
                <p>Bez ulja, bezopasan, neće oštetiti vaš automobil ili druge proizvode od kože i plastike</p>
            </li>
            <li>
                <p>Veoma je jednostavan za upotrebu, naprskajte i protrljajte sunđerom željeno područje</p>
            </li>
        </ul>
    </section>
    <section class="reviews">
        <h2 class="title"><span>UTISCI </span> KUPACA</h2>
        <div class="rev-list">
            <div class="item">
                <img src="{{ asset('/') }}dailysharkFiles/plasticrestore/pack.png">
                <p>Dugo sam razmišljao da osvežim plastiku u automobilu, ali su cene u servisu za moj budžet bile previsoke.
                    Video sam reklamu za ovaj proizvod i odlučio sam da uradim sam. Paket mi je stigao za 2 dana,
                    i ceo proces sređivanja plastika je trajao oko pola sata. Drugari misle da sam vozio auto na farbanje plastika. :)</p>
                <div class="info">
                    <h4>Aleksandar, Niš</h4>
                </div>
            </div>
            <div class="item" style="padding-top: 20px;">
                <p>
                    Drug mi je preporučio da uzmem ovo čudo i rekoh hajde da probam, zašto da ne.
                    Za 20 minuta sredio sam sve unutrašnje i spoljašne plastike na mom automobilu.
                    Ovo je stvarno odlična stvar, ne znam kako da opišem ovaj cool efekat.
                    Automobil je star 15 godina a sija kao da je skoro nov.
                    Veoma sam zadovoljan i toplo preporučujem.
                </p>
                <div class="info">
                    <h4>Marko, Jagodina</h4>
                </div>
            </div>
        </div>
        <a href="#order" class="button-m">PORUČITE SA 40% POPUSTA</a>
    </section>
    <section class="order-info">
        <h2 class="title"><span>DOSTAVA</span> I PLAĆANJE</h2>
        <ul>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/plasticrestore/m8xy8qos.png">
                <p>Ostavite podatke za dostavu na našem sajtu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/plasticrestore/tltt3d7p.png">
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/plasticrestore/jazbzx02.png">
                <p>Šaljemo u roku od 1-2 radna dana</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/plasticrestore/93i41f7-.png">
                <p>Plaćate po prijemu pošiljke</p>
            </li>
        </ul>
    </section>
    <section class="s6 dark-bg">
        <h2 class="title">ZAŠTO JE <span>ISPLATIVO</span> PORUČITI OD NAS?</h2>
        <ul class="list-v4">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/plasticrestore/z0qzm20z.png">
                <p>Samo u našoj online prodavnici možete kupiti originalnu robu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/plasticrestore/hbv90jf5.png">
                <p>Radi efikasno i ne oštećuje <br>lak na automobilu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/plasticrestore/d5titbhg.png">
                <p>Efekat sjaja i zaštite traje <br>dugo vremena</p>
            </li>
        </ul>
    </section>
    <section class="offer">
        <div class="main-title">PLASTIC RESTORE</div>
        <div class="sub-title">RESTAURACIJA PLASTIKA U AUTOMOBILU</div>
        <div class="box">
            <div class="sponsor"></div>
            <img src="{{ asset('/') }}dailysharkFiles/plasticrestore/0dwdemad.gif">
        </div>
        <div class="price">
            <div class="sale">Popust <b>-40%<i></i></b></div>
            <div class="old">
                <p>Redovna cena:</p>
                <div class="val">
                     <span>
                        {{ $prices[1]['originalPrice'] }}
                     </span>
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="new">
                <p>Cena sa popustom:</p>
                <div class="val">
                     <span>
                        {{ $prices[1]['amount'] }}
                     </span>
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <div class="gradient">
            <form id="order" class="main-order-form m1-form lv2-form lv2-form1 lv2-form-validation-by-alert"
                  action="{{$orderRoute}}" method="post">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input placeholder="Ime i prezime" class="field" id="lv-formLanding1-fio" name="name" type="text"/>
                <input placeholder="Telefon" class="field" id="lv-formLanding1-phone" name="phone" type="tel"/>
                <button class="button-m">PORUČITE SA 40% POPUSTA</button>
            </form>
        </div>
    </section>
</div>
@include('components.pixel_footer')
</body>
</html>
