<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=480">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/opinion__guarantee_icon.jpg" type="image/x-icon">
    <link rel="icon" href="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/opinion__guarantee_icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/settings.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/slick.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/main.css" type="text/css" />
    <style>
        @font-face {
            font-family: 'Proxima Nova';
            src: url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Proxima Nova';
            src: url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
<div class="main-wrap">
@include('components.display_errors')
    <section class="title-block">
        <div class="sub-main-title">EFIKASNO UKLANJANJE DLAČICA</div>
        <h1 class="main-title">FINISHING TOUCH</h1>
    </section>
    <section class="top-block-v1">
        <div class="sale-cont">
            Akcija!
            <strong>40%</strong>
            Popust
        </div>
        <div class="cost-cont clearfix">
            <div class="cost old-cost">
                Stara cena:
                <strong>
                    {{ $prices[1]['originalPrice'] }}
                    RSD
                </strong>
            </div>
            <div class="cost new-cost">
                Nova cena:
                <strong>
                    {{ $prices[1]['amount'] }}
                    RSD
                </strong>
            </div>
        </div>
        <div class="describe-cont">
            <ul class="list-1">
                <li>Pogodno za bikini zonu, pazuhe, noge, ruke i druga područja</li>
                <li>Efikasno smanjuje brzinu rasta dlačica</li>
                <li>Deluje na dlačicama bilo koje tvrdoće i strukture</li>
            </ul>
            <a class="button-m" href="#zakaz">Poručite sada</a>
        </div>
    </section>
    <section class="detail-block">
        <h2 class="lvl-title">Finishing Touch uklanja dlačice gde god poželite!</h2>
        <div class="slider-block">
            <div class="slider-cont clearfix">
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/about__image1.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                </div>
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/about__image2.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                </div>
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/about__image3.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                </div>
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/about__image4.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                </div>
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/about__image5.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                </div>
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/about__image6.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                </div>
            </div>
        </div>
        <div class="text-cont">
            <p>Finishing Touch uklanja dlake 82% efikasnije od ostalih proizvoda. Redovna upotreba depilatora pomaže da
                dlačice budu tanke i slabe, a njihov broj se postepeno smanjuje.</p>
            <p>Specijalne oštrice ne oštećuju kožu, tako
                da je proizvod pogodan za sve tipove kože i može se koristiti na bilo kom delu tela.</p>
            <p>Može se nositi najotkrivenija odeća bez straha od brzo rastućih dlačica, neprijatnih crvenih tačaka nakon brijanja ili iritirane kože od vrućeg voska.</p>
        </div>
        <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/result1_image.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
        <div class="list">
            <div class="list_item">
                <div class="icon_block">
                    <div class="icon"></div>
                </div>
                <p>Struktura dlačica postaje tanja</p>
            </div>
            <div class="list_item">
                <div class="icon_block">
                    <div class="icon"></div>
                </div>
                <p>Dužina dlačica se smanjuje</p>
            </div>
            <div class="list_item">
                <div class="icon_block">
                    <div class="icon"></div>
                </div>
                <p>Rast dlačica se usporava</p>
            </div>
            <div class="list_item">
                <div class="icon_block">
                    <div class="icon"></div>
                </div>
                <p>Vidljiv rezultat nakon jedne depilacije</p>
            </div>
        </div>
    </section>
    <section class="compound-block-v2">
        <h2 class="lvl-title">POGODNO ZA BILO KOJI DEO TELA</h2>
        <ul class="compound-cont clearfix">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/benefits__benefit1_image.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                <strong>ZA LICE</strong>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/benefits__benefit2_image.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                <strong>ZA RUKE</strong>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/benefits__benefit3_image.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                <strong>ZA BIKINI ZONU</strong>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/benefits__benefit4_image.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                <strong>ZA NOGE</strong>
            </li>
        </ul>
    </section>
    {{--<section class="expert-block-v2">--}}
        {{--<h2 class="lvl-title">Мнение специалиста</h2>--}}
        {{--<div class="expert-cont">--}}
            {{--<div class="expert-title clearfix">--}}
                {{--<img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/opinion__photo.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">--}}
                {{--<h3>Ефремова Диана Степановна</h3>--}}
                {{--<span>мастер депиляции, стаж работы 17 лет</span>--}}
            {{--</div>--}}
            {{--<p>Клиническим исследованием, проведённым европейскими учеными установлено:</p>--}}
            {{--<ul>--}}
                {{--<li>- Снижение частоты депиляции в области подмышек на 50%, в области бикини на 70%, области ног на 82%</li>--}}
                {{--<li>- Структура волос становится тоньше</li>--}}
                {{--<li>- Длина волос уменьшается</li>--}}
                {{--<li>- Рост волос замедляется</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</section>--}}
    <section class="rev-block-v4 color_bg">
        <h2 class="lvl-title">Utisci kupaca</h2>
        <div class="rev-cont clearfix">
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/reviews__review1_photo.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                <h4>Svetlana, Beograd</h4>
                <p>Nikada ne bih verovala da mi Finishing Touch može pomoći. Moja prijateljica koja je bila oduševljena njime ubedila me je da ga poručim.
                    Kada je kurir doneo porudžbinu, platio sam, raspakovala pošiljku i odmah sam se izdepilirala.
                    Nakon prve primene koža mi je bila mekana i razlika je bila vidljiva. Posle mesec dana moje lice se potpuno promenilo.</p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/reviews__review2_photo.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                <h4>Marina, Valjevo</h4>
                <p>Kupila sam prijateljici za poklon jer ona ima veoma osetljivu kožu, ali nisam mogla da odolimo da isprobam na sebi.
                    Bila sam oduševljena i morala sam da poručim i sebi. Dopada mi se činjenica da za njega nema nepristupačnih delova tela.
                    Takođe sam primetila da mi dlačice sporije rastu i da su manje guste.</p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/reviews__review3_photo.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                <h4>Julija, Smederevo</h4>
                <p>Koristim ga već drugi mesec i prilično sam zadovoljna. Koža je glatka, nema iritacija i dlaka vremenom postaje mekša.
                    Pre toga sam probala mnoga sredstva, ali ovo je najefikasnije i najnežnije. Preporučujem svima! Što se tiče odnosa kvaliteta i cene,
                    ovo je nešto najbolje što može biti!</p>
            </div>
        </div>
    </section>
    <section class="delivery-block-v3">
        <h2 class="lvl-title">DOSTAVA I PLAĆANJE</h2>
        <ul class="delivery-cont">
            <li>
                <h3>ISPORUKA</h3>
                <p>Dostava brzom poštom u roku od 1-2 radna dana.</p>
            </li>
            <li>
                <h3>NEMA PLAĆANJA UNAPRED</h3>
                <p>Plaćate kuriru po prijemu pošiljke.</p>
            </li>
            <li>
                <h3>GARANCIJA KVALITETA</h3>
                <p>Ukoliko vam se proizvod ne dopadne vratićemo vam novac.</p>
            </li>
        </ul>
    </section>
    <section class="title-block">
        <div class="sub-main-title">EFIKASNO UKLANJANJE DLAČICA</div>
        <h1 class="main-title">FINISHING TOUCH</h1>
    </section>
    <section class="top-block-v1 offer_bottom">
        <div class="sale-cont">
            Akcija!
            <strong>40%</strong>
            Popust
        </div>
        <div class="cost-cont clearfix" id="zakaz">
            <div class="cost old-cost">
                Stara cena:
                <strong>
                    {{ $prices[1]['originalPrice'] }}
                    RSD
                </strong>
            </div>
            <div class="cost new-cost">
                Nova cena:
                <strong>
                    {{ $prices[1]['amount'] }}
                    RSD
                </strong>
            </div>
        </div>
        <div class="describe-cont">
            <form class="m1-form" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div><input type="text" name="name" placeholder="Ime i prezime" ></div>
                <div><input type="tel" name="phone" placeholder="Telefon" ></div>
                <div><input type="text" name="shipping_address" placeholder="Adresa" ></div>
                <div><input type="text" name="shipping_city" placeholder="Grad" ></div>
                <div><button class="button-m">Završi porudžbinu</button></div>
            </form>
        </div>
    </section>
</div>
<script type="text/javascript" src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/init.js"></script>
@include('components.pixel_footer')
</body>
</html>