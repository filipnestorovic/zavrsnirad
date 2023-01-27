<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="icon" href="{{ asset('/') }}dailysharkFiles/spinduster/use2.png" type="image/png">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/spinduster/use2.png" type="image/png">
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
            background: url("{{ asset('/') }}dailysharkFiles/spinduster/b1.jpg") no-repeat center top;
            height: 514px;
            padding: 32px 0 0;
        }
        .sale {
            color: #fff;
            font-size: 16px;
            text-transform: uppercase;
            margin: 20px 0 0 190px;
        }
        @media screen and (max-width:659px) {
            .block1 {
                background: #e0dfe4 url("{{ asset('/') }}dailysharkFiles/spinduster/b1s.jpg") no-repeat center top;
                height: auto;
                padding: 20px 0 10px;
            }
        }
        .block4 {
            background: url("{{ asset('/') }}dailysharkFiles/spinduster/b2.jpg") no-repeat center top;
            padding: 20px 0;
        }
        .use li {
            background: url("{{ asset('/') }}dailysharkFiles/spinduster/use1.png") no-repeat 0 0;
            height: 122px;
            display: block;
            margin-bottom: 10px;
        }

        .use li:nth-child(2) {
            background-image: url("{{ asset('/') }}dailysharkFiles/spinduster/use2.png");
            margin-left: 20px;
        }

        .use li:nth-child(3) {
            background-image: url("{{ asset('/') }}dailysharkFiles/spinduster/use3.png");
            height: 127px;
            margin-bottom: 0;
            margin-left: 40px;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<section class="block1">
    <div class="wrap">
        <h1>SPIN DUSTER</h1>
        <h2>UREĐAJ ZA EFIKASNO ČIŠĆENJE PRAŠINE</h2>
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
                <img title="Spin Broom" src="{{ asset('/') }}dailysharkFiles/spinbroom/att.png" alt="">
                Na popustu preostalo još <span>18 komada</span>
            </div>
        </div>
    </div>
</section>
<!-- michael-k90 -->
<section class="block2">
    <div class="wrap">
        <h2 class="title">ELIMINIŠITE SVU PRAŠINU <span>ZA TREN OKA</span></h2>
        <div class="container">
            <img title="Spin Broom"
                 src="{{ asset('/') }}dailysharkFiles/spinduster/photo.jpg"
                 alt="Spin Broom">
            <p>
                Spin Duster je inovativni uređaj za lako i efikasno čišćenje svih delova kuće na koje dopire prašina. Zgodan je i praktičan, i skida svu prašinu jednim pokretom ruke.
                Nema potrebe da prelazite površinu više puta, dovoljno je proći jednom i sva prašina se temeljno uklapa. Radi na baterije, rotira se i stvara elektricitet koji privlači sve čestice prašine.
            </p>
        </div>
    </div>
</section>
<section class="block3">
    <div class="wrap">
        <ul class="before-after clearfix">
            <li>
                <img title="Spin Broom"
                     src="{{ asset('/') }}dailysharkFiles/spinduster/ba1.jpg"
                     alt="Spin Broom">
                <div class="ba-text">
                    <p>Aktivno privlači sve čestice prašine</p>
                </div>
            </li>
            <li>
                <img title="Spin Broom"
                     src="{{ asset('/') }}dailysharkFiles/spinduster/ba2.jpg"
                     alt="Spin Broom">
                <div class="ba-text">
                    <p>Možete pristupiti svim uglovima i delovima prostorije</p>
                </div>
            </li>
            <li>
                <img title="Spin Broom"
                     src="{{ asset('/') }}dailysharkFiles/spinduster/ba3.jpg"
                     alt="Spin Broom">
                <div class="ba-text">
                    <p>Odličnih je dimenzija i može se lako skladištiti na bilo kom mestu</p>
                </div>
            </li>
            <li>
                <img title="Spin Broom"
                     src="{{ asset('/') }}dailysharkFiles/spinduster/ba4.jpg"
                     alt="Spin Broom">
                <div class="ba-text">
                    <p>Inovativni sistem rotacije učiniće da na vašim policama i površinama ne ostane ni najmanje prašine</p>
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
                    <p>Izvadite proizvod i sastavite ručku</p>
                </div>
            </li>
            <li>
                <div>
                    <p>Pređite sve površine koje je potrebno očistiti</p>
                </div>
            </li>
            <li>
                <div>
                    <p>Nežno istresite prašinu iz rotacionog dela u đubre</p>
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
                    <div class="rev-img"><img title="Spin Broom" src="{{ asset('/') }}dailysharkFiles/spinbroom/rev1.jpg" alt="Spin Broom"></div>
                    <div class="rev-cont">
                        <h3>Marina Bošković, <span>28 godina</span></h3>
                        <p>Imam problem sa leđima i čišćenje prašine mi nikada nije bila omiljena aktivnost. Moj muž mi je doneo Spin Duster i to me je obradovalo.
                            Savršeno čisti prašinu u celom stanu. Sve preporuke za ovaj proizvod!</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="rev clearfix">
                    <div class="rev-img"><img title="Spin Broom" src="{{ asset('/') }}dailysharkFiles/spinbroom/rev2.jpg" alt="Spin Broom"></div>
                    <div class="rev-cont">
                        <h3>Jovana Joksimović, <span>30 godina</span></h3>
                        <p>Koristim ovo čudo veoma dugo, a pre toga sam probala mnogo različitih stvari i sve su bile nepraktične.
                            Uh kada se samo setim šta sve nisam probala. Spin Duster je veoma kvalitetan, a pošto se lako rasklapa ne zauzima mnogo prostora. Mogu da ga držim u hodniku
                            u ormariću za cipele.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="rev clearfix">
                    <div class="rev-img"><img title="Spin Broom" src="{{ asset('/') }}dailysharkFiles/spinbroom/rev3.jpg" alt="Spin Broom"></div>
                    <div class="rev-cont">
                        <h3>Zorana Palić, <span>39 godina</span></h3>
                        <p>Kupili smo ga na vašem sajtu, i do dan danas smo prezadovoljni kupovinom. Moja kćerka je dobila bebu i bitno joj je da nema prašine u stanu. Ovo je rešilo
                            problem, na dnevnom nivou očisti sve površine. Praktično je, nema kablova, a čišćenje traje skoro duplo brže nego ranije. Ocena čista desetka!!!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- owmen17 -->
<section class="block6">
    <div class="wrap">
        <h2 class="title">KAKO DO SPIN DUSTERA u <span>3 laka koraka?</span></h2>
        <ul class="ship">
            <li>
                <div><img title="Spin Broom" src="{{ asset('/') }}dailysharkFiles/spinbroom/ship1.jpg" alt="Spin Broom"></div>
                <p>Ostavite podatke za dostavu na našem sajtu</p>
            </li>
            <li>
                <div><img title="Spin Broom" src="{{ asset('/') }}dailysharkFiles/spinbroom/ship2.jpg" alt="Spin Broom"></div>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </li>
            <li>
                <div><img title="Spin Broom" src="{{ asset('/') }}dailysharkFiles/spinbroom/ship3.jpg" alt="Spin Broom"></div>
                <p>Očekujte kurira brze pošte u najskorijem periodu. Plaćate po pouzeću.</p>
            </li>
        </ul>
    </div>
</section>
<section class="block1 end">
    <div class="wrap">
        <h1>SPIN DUSTER</h1>
        <h2>UREĐAJ ZA EFIKASNO ČIŠĆENJE PRAŠINE</h2>
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
                <img title="Spin Broom" src="{{ asset('/') }}dailysharkFiles/spinbroom/att.png" alt="">
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
