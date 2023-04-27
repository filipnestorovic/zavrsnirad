<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="icon" href="{{ asset('/') }}dailysharkFiles/spinbroom/use2.png" type="image/png">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/spinbroom/use2.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/spinbroom/style.css"/>
    <style>
        @font-face {
            font-family: 'Gotham Pro';
            src: url('{{ asset('/') }}fonts/GothamPro-Light.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/GothamPro-Light.woff') format('woff'),
            url('{{ asset('/') }}fonts/GothamPro-Light.ttf') format('truetype');
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: 'Gotham Pro';
            src: url('{{ asset('/') }}fonts/GothamPro.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/GothamPro.woff') format('woff'),
            url('{{ asset('/') }}fonts/GothamPro.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Gotham Pro';
            src: url('{{ asset('/') }}fonts/GothamPro-Medium.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/GothamPro-Medium.woff') format('woff'),
            url('{{ asset('/') }}fonts/GothamPro-Medium.ttf') format('truetype');
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: 'Gotham Pro';
            src: url('{{ asset('/') }}fonts/GothamPro-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/GothamPro-Bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/GothamPro-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }

        .formbox {
            height: auto;
            padding-top: 25px;
        }

        .block1 {
            background: url("{{ asset('/') }}dailysharkFiles/faucetsplashhead/b1.jpg") no-repeat center top;
            height: 514px;
            padding: 32px 0 0;
        }

        .block4 {
            background: url("{{ asset('/') }}dailysharkFiles/faucetsplashhead/b2.jpg") no-repeat center top;
            padding: 20px 0;
        }

        .use li {
            background: url("{{ asset('/') }}dailysharkFiles/faucetsplashhead/use1.png") no-repeat 0 0;
            height: 122px;
            display: block;
            margin-bottom: 10px;
        }

        .use li:nth-child(2) {
            background-image: url("{{ asset('/') }}dailysharkFiles/faucetsplashhead/use2.png");
            margin-left: 20px;
        }

        .use li:nth-child(3) {
            background-image: url("{{ asset('/') }}dailysharkFiles/faucetsplashhead/use3.png");
            height: 127px;
            margin-bottom: 0;
            margin-left: 40px;
        }

        .sale {
            margin: 110px 0 0 460px;
        }

        @media screen and (max-width: 659px) {
            .block1 {
                background: #e0dfe4 url("{{ asset('/') }}dailysharkFiles/faucetsplashhead/b1s.jpg") no-repeat center top;
                height: auto;
                padding: 20px 0 10px;
            }
            .sale {
                margin: 70px 0 0 240px;
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<section class="block1">
    <div class="wrap">
        <h1>FAUCET SPLASH HEAD</h1>
        <h2>INOVATIVNI NASTAVAK ZA SLAVINU</h2>
        <div class="sale">
            popust
            <p class="discount">40%</p>
        </div>
        <div class="price clearfix">
            <div class="old-cost">
                <span>Redovna cena:</span>
                <p>
                     <span class="price_land_s2">
                     {{ $prices[1]['originalPrice'] }}
                     </span>
                    <small class="price_land_curr">
                        {{ $prices[1]['currency'] }}
                    </small>
                </p>
            </div>
            <div class="new-cost">
                <span>Cena sada:</span>
                <p>
                     <span class="price_land_s1">
                     {{ $prices[1]['amount'] }}
                     </span>
                    <small class="price_land_curr">
                        {{ $prices[1]['currency'] }}
                    </small>
                </p>
            </div>
        </div>
        <div class="formbox">
            <form action="{{$orderRoute}}" method="post" class="main-order-form orderformcdn m1-form">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required>
                <input class="field" name="phone" type="tel" placeholder="Telefon" required>
                <input class="field" name="shipping_address" type="text" placeholder="Adresa" required>
                <input class="field" name="shipping_city" type="text" placeholder="Grad" required>
                <button class="button-m">Završi porudžbinu</button>
            </form>
            <div class="stock">
                <img title="Sweep&Drag" src="{{ asset('/') }}dailysharkFiles/spinbroom/att.png" alt="">
                Na popustu preostalo još <span>18 komada</span>
            </div>
        </div>
    </div>
</section>
<!-- michael-k90 -->
<section class="block2">
    <div class="wrap">
        <h2 class="title">FLEKSIBILNA SLAVINA ZA <span>ŠTEDNJU VODE</span></h2>
        <div class="container">
            <img title="Sweep&Drag"
                 src="{{ asset('/') }}dailysharkFiles/faucetsplashhead/photo.jpg"
                 alt="Sweep&Drag">
            <p>
                Ova revolucionarna fleksibilna slavina za štednju vode dizajnirana je kako bi vam pomogla da uštedite
                vodu, smanjite prskanje i unapredite vaše iskustvo u kuhinji i kupatilu. Lako se montira na većinu
                standardnih slavina i pruža izuzetnu funkcionalnost.
            </p>
        </div>
    </div>
</section>
<section class="block3">
    <div class="wrap">
        <ul class="before-after clearfix">
            <li>
                <img title="Sweep&Drag"
                     src="{{ asset('/') }}dailysharkFiles/faucetsplashhead/ba1.jpg"
                     alt="Sweep&Drag">
                <div class="ba-text">
                    <p>Izrađena od kvalitetnih materijala</p>
                </div>
            </li>
            <li>
                <img title="Sweep&Drag"
                     src="{{ asset('/') }}dailysharkFiles/faucetsplashhead/ba2.jpg"
                     alt="Sweep&Drag">
                <div class="ba-text">
                    <p>Rotacija od 360 stepeni</p>
                </div>
            </li>
            <li>
                <img title="Sweep&Drag"
                     src="{{ asset('/') }}dailysharkFiles/faucetsplashhead/ba3.jpg"
                     alt="Sweep&Drag">
                <div class="ba-text">
                    <p>Jednostavno pranje sudova i umivanje i čišćenje u kupatilu</p>
                </div>
            </li>
            <li>
                <img title="Sweep&Drag"
                     src="{{ asset('/') }}dailysharkFiles/faucetsplashhead/ba4.jpg"
                     alt="Sweep&Drag">
                <div class="ba-text">
                    <p>Univerzalni priključak</p>
                </div>
            </li>
        </ul>
        <a href="#order_form" class="button-m">Poručite sada</a>
    </div>
</section>
<!-- bizlife_inc -->
<section class="block4">
    <div class="wrap">
        <div class="left-title">
        </div>
        <ul class="use">
            <li>
                <div>
                    <p>Jednostavna instalacija: samo zavrnite fleksibilni nastavak na slavinu, bez potrebe za
                        alatom.</p>
                </div>
            </li>
            <li>
                <div>
                    <p>Štedi vodu, povećava pritisak i smanjuje račune.</p>
                </div>
            </li>
            <li>
                <div>
                    <p>Najprodavaniji proizvod u Evropi.</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="block5">
    <div class="wrap">
        <h2 class="title">UTISCI <span>NAŠIH KUPACA</span></h2>
        <div class="reviews">
            <div>
                <div class="rev clearfix">
                    <div class="rev-img"><img title="Sweep&Drag"
                                              src="{{ asset('/') }}dailysharkFiles/spinbroom/rev1.jpg" alt="Sweep&Drag">
                    </div>
                    <div class="rev-cont">
                        <h3>Marina Bošković, <span>28 godina</span></h3>
                        <p>Otkako sam kupila ovu fleksibilnu slavinu za štednju vode, pranje sudova i čišćenje sudopere
                            postalo je mnogo jednostavnije. Rotacija od 360 stepeni omogućava da lako doprem do svih
                            delova sudopere, a dva režima rada su veoma korisna. Pored toga, značajno sam smanjila
                            potrošnju vode, što se odrazilo na računima. Toplo preporučujem ovaj proizvod svima koji
                            žele da unaprede svoju kuhinju i uštede vodu.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="rev clearfix">
                    <div class="rev-img"><img title="Sweep&Drag"
                                              src="{{ asset('/') }}dailysharkFiles/spinbroom/rev2.jpg" alt="Sweep&Drag">
                    </div>
                    <div class="rev-cont">
                        <h3>Jovana Joksimović, <span>30 godina</span></h3>
                        <p>Kupila sam ovu fleksibilnu slavinu pre nekoliko meseci i oduševljena sam. Jednostavna je za
                            montažu, bez potrebe za alatom ili pozivanjem majstora. Zahvaljujući njoj, prskanje vode po
                            sudoperi i radnoj površini je smanjeno, što mi štedi vreme potrebno za čišćenje. Takođe,
                            mekani mlaz je savršen za pranje osetljivih čaša i posuđa. Definitivno vredi uložiti u ovaj
                            proizvod.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="rev clearfix">
                    <div class="rev-img"><img title="Sweep&Drag"
                                              src="{{ asset('/') }}dailysharkFiles/spinbroom/rev3.jpg" alt="Sweep&Drag">
                    </div>
                    <div class="rev-cont">
                        <h3>Zorana Palić, <span>39 godina</span></h3>
                        <p>Ova fleksibilna slavina za štednju vode je ne samo funkcionalna već i estetski dopadljiva.
                            Lepo se uklapa u izgled moje kuhinje, a rotacija od 360 stepeni je izuzetno praktična.
                            Ugrađeni filter pomaže u očuvanju kvaliteta vode, što je odlično za piće i kuvanje. Sve u
                            svemu, veoma sam zadovoljna ovom kupovinom i preporučujem ovaj proizvod svima koji žele da
                            unaprede svoju kuhinju i uštede vodu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- owmen17 -->
<section class="block6">
    <div class="wrap">
        <h2 class="title">KAKO DO FAUCET SPLASH HEAD proizvoda u <span>3 laka koraka?</span></h2>
        <ul class="ship">
            <li>
                <div><img title="Sweep&Drag" src="{{ asset('/') }}dailysharkFiles/spinbroom/ship1.jpg" alt="Sweep&Drag">
                </div>
                <p>Ostavite svoje podatke na našem sajtu</p>
            </li>
            <li>
                <div><img title="Sweep&Drag" src="{{ asset('/') }}dailysharkFiles/spinbroom/ship2.jpg" alt="Sweep&Drag">
                </div>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </li>
            <li>
                <div><img title="Sweep&Drag" src="{{ asset('/') }}dailysharkFiles/spinbroom/ship3.jpg" alt="Sweep&Drag">
                </div>
                <p>Očekujte kurira brze pošte u najskorijem periodu. Plaćate po pouzeću.</p>
            </li>
        </ul>
    </div>
</section>
<section class="block1 end">
    <div class="wrap">
        <h1>FAUCET SPLASH HEAD</h1>
        <h2>INOVATIVNI NASTAVAK ZA SLAVINU</h2>
        <div class="sale">
            popust
            <p class="discount">40%</p>
        </div>
        <div class="price clearfix">
            <div class="old-cost">
                <span>Redovna cena:</span>
                <p>
                     <span class="price_land_s2">
                     {{ $prices[1]['originalPrice'] }}
                     </span>
                    <small class="price_land_curr">
                        {{ $prices[1]['currency'] }}
                    </small>
                </p>
            </div>
            <div class="new-cost">
                <span>Cena sada:</span>
                <p>
                     <span class="price_land_s1">
                     {{ $prices[1]['amount'] }}
                     </span>
                    <small class="price_land_curr">
                        {{ $prices[1]['currency'] }}
                    </small>
                </p>
            </div>
        </div>
        <div class="formbox">
            <form action="{{$orderRoute}}" method="post" class="main-order-form orderformcdn m1-form" id="order_form">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required>
                <input class="field" name="phone" type="tel" placeholder="Telefon" required>
                <input class="field" name="shipping_address" type="text" placeholder="Adresa" required>
                <input class="field" name="shipping_city" type="text" placeholder="Grad" required>
                <button class="button-m">Završi porudžbinu</button>
            </form>
            <div class="stock">
                <img title="Sweep&Drag" src="{{ asset('/') }}dailysharkFiles/spinbroom/att.png" alt="">
                Na popustu preostalo još <span>18 komada</span>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/spinbroom/script.js"></script>
@include('components.pixel_footer')
</body>
</html>
