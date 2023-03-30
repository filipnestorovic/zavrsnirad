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
            background: url("{{ asset('/') }}dailysharkFiles/sweepanddrag/b1.jpg") no-repeat center top;
            height: 514px;
            padding: 32px 0 0;
        }
        .block4 {
            background: url("{{ asset('/') }}dailysharkFiles/sweepanddrag/b2.jpg") no-repeat center top;
            padding: 20px 0;
        }
        .use li {
            background: url("{{ asset('/') }}dailysharkFiles/sweepanddrag/use1.png") no-repeat 0 0;
            height: 122px;
            display: block;
            margin-bottom: 10px;
        }

        .use li:nth-child(2) {
            background-image: url("{{ asset('/') }}dailysharkFiles/sweepanddrag/use2.png");
            margin-left: 20px;
        }

        .use li:nth-child(3) {
            background-image: url("{{ asset('/') }}dailysharkFiles/sweepanddrag/use3.png");
            height: 127px;
            margin-bottom: 0;
            margin-left: 40px;
        }
        @media screen and (max-width:659px) {
            .block1 {
                background: #e0dfe4 url("{{ asset('/') }}dailysharkFiles/sweepanddrag/b1s.jpg") no-repeat center top;
                height: auto;
                padding: 20px 0 10px;
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<section class="block1">
    <div class="wrap">
        <h1>SWEEP & DRAG</h1>
        <h2>Četka za brzo čišćenje poda</h2>
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
        <h2 class="title">Usisajte i obrišite pod <span>za tren oka</span></h2>
        <div class="container">
            <img title="Sweep&Drag"
                 src="{{ asset('/') }}dailysharkFiles/sweepanddrag/photo.jpg"
                 alt="Sweep&Drag">
            <p>
                Sweep & Drag je praktičan uređaj za lako i efikasno čišćenje kuće. Zgodan je i praktičan, te se može usisavati i čistiti jednim pokretom ruke.
                Nema potrebe da prelazite površinu više puta, dovoljno je proći jednom,a sve mrvice i nečistoće će Sweep & Drag uvući u sebe.
                Nakon nekoliko čišćenja, kada se spremnik napuni, veoma ga je lako isprazniti.
            </p>
        </div>
    </div>
</section>
<section class="block3">
    <div class="wrap">
        <ul class="before-after clearfix">
            <li>
                <img title="Sweep&Drag"
                     src="{{ asset('/') }}dailysharkFiles/sweepanddrag/ba1.jpg"
                     alt="Sweep&Drag">
                <div class="ba-text">
                    <p>Aktivno uvlači sve nečistoće, mrve i prašinu</p>
                </div>
            </li>
            <li>
                <img title="Sweep&Drag"
                     src="{{ asset('/') }}dailysharkFiles/sweepanddrag/ba2.jpg"
                     alt="Sweep&Drag">
                <div class="ba-text">
                    <p>Možete pristupiti svim uglovima i delovima prostorije bez savijanja</p>
                </div>
            </li>
            <li>
                <img title="Sweep&Drag"
                     src="{{ asset('/') }}dailysharkFiles/sweepanddrag/ba3.jpg"
                     alt="Sweep&Drag">
                <div class="ba-text">
                    <p>Odličnih je dimenzija, te se lako može skladištiti u bilo kojoj prostoriji</p>
                </div>
            </li>
            <li>
                <img title="Sweep&Drag"
                     src="{{ asset('/') }}dailysharkFiles/sweepanddrag/ba4.jpg"
                     alt="Sweep&Drag">
                <div class="ba-text">
                    <p>Inovativni sistem usisavanja učiniće da uštedite struju i usisavate lako kao nikada do sada</p>
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
                    <p>Pređite sve površine koje je potrebno usisati</p>
                </div>
            </li>
            <li>
                <div>
                    <p>Istresite u kantu sve što ste usisali pritiskom na jedno dugme</p>
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
                    <div class="rev-img"><img title="Sweep&Drag" src="{{ asset('/') }}dailysharkFiles/spinbroom/rev1.jpg" alt="Sweep&Drag"></div>
                    <div class="rev-cont">
                        <h3>Marina Bošković, <span>28 godina</span></h3>
                        <p>Imam problem sa leđima i usisavanje podova mi nikada nije bila omiljena aktivnost. Moj muž mi je doneo Sweep & Drag i to me je veoma obradovalo.
                            Savršeno usisava parket, pločice, tepihe. Sve preporuke za ovaj proizvod!</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="rev clearfix">
                    <div class="rev-img"><img title="Sweep&Drag" src="{{ asset('/') }}dailysharkFiles/spinbroom/rev2.jpg" alt="Sweep&Drag"></div>
                    <div class="rev-cont">
                        <h3>Jovana Joksimović, <span>30 godina</span></h3>
                        <p>Koristim ovo čudo veoma dugo, a pre toga sam probala mnogo različitih stvari i sve su bile nepraktične i kabaste. Uh kada se setim razvlačena kabla od
                            usisivača po celom stanu. Sweep & Drag je veoma kvalitetan, a pošto se lako rasklapa ne zauzima mi mnogo prostora. Mogu da ga držim u hodniku u ormariću za cipele.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="rev clearfix">
                    <div class="rev-img"><img title="Sweep&Drag" src="{{ asset('/') }}dailysharkFiles/spinbroom/rev3.jpg" alt="Sweep&Drag"></div>
                    <div class="rev-cont">
                        <h3>Zorana Palić, <span>39 godina</span></h3>
                        <p>Kupili smo ga na vašem sajtu, i do dan danas smo prezadovoljni kupovinom. Moja kćerka je dobila bebu koja se plaši usisivača, i kada treba stan da se usisa
                            bilo je veoma stresno. Ovo nam je rešilo probleme, beba spava a mi usisamo skoro pa nečujno. Praktično je i dobro što nema kablova, tako da usisavanje
                            traje skoro duplo brže nego ranije. Ocena čista desetka!!!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- owmen17 -->
<section class="block6">
    <div class="wrap">
        <h2 class="title">KAKO DO SWEEP & DRAG proizvoda u <span>3 laka koraka?</span></h2>
        <ul class="ship">
            <li>
                <div><img title="Sweep&Drag" src="{{ asset('/') }}dailysharkFiles/spinbroom/ship1.jpg" alt="Sweep&Drag"></div>
                <p>Ostavite svoje podatke na našem sajtu</p>
            </li>
            <li>
                <div><img title="Sweep&Drag" src="{{ asset('/') }}dailysharkFiles/spinbroom/ship2.jpg" alt="Sweep&Drag"></div>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </li>
            <li>
                <div><img title="Sweep&Drag" src="{{ asset('/') }}dailysharkFiles/spinbroom/ship3.jpg" alt="Sweep&Drag"></div>
                <p>Očekujte kurira brze pošte u najskorijem periodu. Plaćate po pouzeću.</p>
            </li>
        </ul>
    </div>
</section>
<section class="block1 end">
    <div class="wrap">
        <h1>SWEEP & DRAG</h1>
        <h2>Četka za brzo čišćenje poda</h2>
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
