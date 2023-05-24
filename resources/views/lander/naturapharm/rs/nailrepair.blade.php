<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/fungalnail/style.css" />
    <link rel="shortcut icon" href="{{ asset('/') }}naturapharmFiles/fungalnail/favicon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet" />
    <style>
        .header__logo {
            float: left;
            background: url("{{ asset('/') }}naturapharmFiles/nailrepair/logo.png") no-repeat 0 0;
            width: 150px;
            height: 20px;
            margin-top: 6px;
            margin-left: 2px;
        }

        .sale-product-img:before {
            content: " ";
            position: absolute;
            top: 68px;
            left: -10px;
            z-index: 2;
            background: url("{{ asset('/') }}naturapharmFiles/nailrepair/product.png") no-repeat 0 0;
            width: 229px;
            height: 469px;
        }

        .form-center:before {
            content: " ";
            position: absolute;
            top: 1px;
            left: -4px;
            z-index: 2;
            background: url("{{ asset('/') }}naturapharmFiles/nailrepair/product.png") no-repeat 0 0;
            width: 229px;
            height: 469px;
        }

        @media screen and (max-width: 991px) {
            .sale-wrap--mob:before {
                content: " ";
                background: url("{{ asset('/') }}naturapharmFiles/nailrepair/product.png") no-repeat 0 0;
                background-size: 170px;
                width: 170px;
                height: 312px;
                position: absolute;
                top: 0;
                right: 0;
                z-index: 30;
            }

            .mod .sale-wrap--mob:before {
                background: url("{{ asset('/') }}naturapharmFiles/nailrepair/product.png") no-repeat 0 0;
                background-size: 156px;
                width: 156px;
                height: 313px;
                top: 20px;
                right: 38px;
            }
        }
    </style>
</head>
<body>
<div class="body-wrap">
    @include('components.display_errors')
    <header>
        <div class="wrapper">
            <div class="header__logo"></div>
            <a href="#form-scroll">
                <div class="header__call headerCallJs ever-popup-btn">Naručite odmah!</div>
            </a>
            <div class="header__blocks">
                <a class="scrollTo" href="#action1">Kako sprej deluje?</a>
                <a class="scrollTo" href="#effect">Efekti</a>
                <a class="scrollTo" href="#reviews">Komentari</a>
            </div>
        </div>
    </header>
    <div class="section1">
        <div class="wrapper">
            <p class="main-title">JEDNOSTAVAN NAČIN DA SE POBEDE GLJIVICE I PUKOTINE NA NOKTIMA!</p>
            <div class="section-wrap">
                <div class="section1-left">
                    <div class="do-blocks">
                        <div class="do do--1">Leči gljivice na noktima</div>
                        <div class="do do--2">Ublažava ljuštenje</div>
                        <div class="do do--3">Eliminiše neprijatne mirise</div>
                        <div class="do do--4">Daje noktima lep sjaj</div>
                    </div>
                </div>
                <div class="section1-center">
                    <div class="sale-wrap">
                        <p class="sale-title">POPUST</p>
                        <p class="sale-text">-40%</p>
                    </div>
                    <div class="sale-product-img"></div>
                </div>
                <div class="section1-right">
                    <div class="sale-wrapper--mob">
                        <div class="sale-wrap--mob">
                            <p class="sale-title">POPUST</p>
                            <p class="sale-text">-40%</p>
                        </div>
                    </div>
                    <div class="product-sh">
                        Količine su ograničene!
                    </div>
                    <div class="form-bg_top">
                        <div class="wrap-price--top">
                            <div class="price-old-wrap--top">
                                <p class="price-old-text--top">Regularna cena:</p>
                                <p class="price-old-x--top">
                                            <span class="price-x--top x_price_previous">
                                                {{ $prices[1]['originalPrice'] }}
                                            </span>
                                    <span class="price-currency--top x_currency">
                                                {{ $prices[1]['currency'] }}
                                            </span>
                                </p>
                            </div>
                            <div class="price-new-wrap--top">
                                <p class="price-new-text--top">Akcijska cena</p>
                                <p class="price-new-x--top">
                                            <span class="price-x--top x_price_current">
                                                {{ $prices[1]['amount'] }}
                                            </span>
                                    <span class="price-currency--top x_currency">
                                                {{ $prices[1]['currency'] }}
                                            </span>
                                </p>
                            </div>
                        </div>
                        <div class="form-main">
                            <form method="post" action="{{$orderRoute}}" class="x_order_form">
                                {{csrf_field()}} @include('lander.naturapharm.components.form_hidden_fields')
                                <input class="input-form" type="text" name="name" placeholder="Ime i prezime" required />
                                <input class="input-form" type="text" name="phone" placeholder="Telefon" required />

                                <button class="submit-form" type="submit">Poruči</button>
                            </form>
                        </div>
                        {{--
                        <div class="protection--mob">Vaši podaci su zaštićeni</div>
                        --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--section2-->
    <div class="section2">
        <div class="wrapper">
            <p class="title">
                        <span class="title2-span1">
                            Ako prepoznajete barem jedan simptom od navedenih, onda treba da počnete da koristite ovaj proizvod!
                        </span>
            </p>
            <div class="symptoms">
                <div class="symptoms__block">
                    <p class="symptoms__text">Loš miris</p>
                    <p class="symptoms__text">Pukotine i ljuštenje</p>
                    <p class="symptoms__text">Nepravilan oblik noktiju</p>
                    <p class="symptoms__text">Nokat postaje braon ili žut</p>
                    <p class="symptoms__text">Žlebovi i bele tačke na noktu</p>
                </div>
                <div class="symptoms__block">
                    <p class="symptoms__text">Svrab i peckanje</p>
                    <p class="symptoms__text">Zadebljanje nokta</p>
                    <p class="symptoms__text">Stvaranje neravnina</p>
                    <p class="symptoms__text">Lako pucanje nokta</p>
                </div>
            </div>
        </div>
    </div>
    <!--section3-->
    <div class="section3">
        <div class="wrapper">
            <p class="title">Šta se dešava kada se gljivice na noktima ne leče</p>
            <p class="stage__main-text">
                Prema statistikama, svaki peti stanovnik ove zemlje pati od gljivica na noktima. <br />
                Uske zatvorene cipele, sintetičke čarape, saune i bazeni su česti uročnici gljivica i infekcija na noktima i nogama. <br />
                <span class="stage__span1">U letnjim mesecima ova pojava je učestala pa je potrebno lečiti je na vreme.</span>
                <br />
            </p>
            <div class="stage__main-block-bg">
                <span class="stage__main-block-span">Ako ne lečite nokte, vrlo brzo može doći do ozbiljnijih problema!</span> <br />
                Bolje je reagovati preventivno i sprečiti veće probleme koje je teško izlečiti!
            </div>
        </div>
    </div>
    <div class="section__wrap-bg">
        <a id="action1"></a>
        <div class="section4">
            <div class="wrapper">
                <p class="title">Kako deluje <span class="title4-span1">Nail Repair?</span></p>
                <p class="work__text-top">
                            <span class="work__span1">
                                Uz redovno korišćenje Nail Repair eliminiše se nekoliko problema odjednom. Aktivni sastojci koji efikasno deluju eliminišu:
                            </span>
                </p>
                <div class="work__wrap">
                    <div class="work__block work__block--1">Gljivice</div>
                    <div class="work__block work__block--2">Neprijatne mirise</div>
                    <div class="work__block work__block--3">Ispucale nokte</div>
                    <div class="work__block work__block--4">Žute i zadebljane nokte</div>
                </div>
                <div class="consist">
                    <p class="consist__text consist__text--1"><span class="consist__text--b">Matični mleč</span> — zaustavlja razvoj gljivica. Ublažava svrab i ima destruktivan efekat na gljivice.</p>
                    <p class="consist__text consist__text--2"><span class="consist__text--b">Ekstrakt gaveza</span> — Dezinfikuje, suši i daje prijatan miris dugo vremena.</p>
                    <p class="consist__text consist__text--2"><span class="consist__text--b">Ulje oraha</span> — Savršeno vlaži i neguje nokat, uklanja hrapavost i leči pukotine.</p>
                    <p class="consist__text consist__text--4">Za razliku od ostalih proizvoda, Nail Repair se ravnomerno raspoređuje po celoj površini nokta. Brzo upija i ne ostavlja tragove na posteljini i odeći.</p>
                </div>
            </div>
        </div>
        <div class="section5">
            <div class="sale-wrapper--mob sale-wrapper--mob-all">
                <div class="sale-wrap--mob">
                    <p class="sale-title">POPUST</p>
                    <p class="sale-text">-40%</p>
                </div>
                <div class="product-sh--mob">
                    Količine su ograničene!
                </div>
            </div>
            <div class="section-form">
                <div class="wrapper">
                    <div class="form-wrapper">
                        <div class="form-left">
                            <p class="form-left__title">Jednostavan način da pobedite gljivice, žute i ispucale nokte!</p>
                            <div class="wrap-sale-price">
                                <div class="form-left__sale-wrap">
                                    <p class="sale-title">POPUST</p>
                                    <p class="sale-text">-40%</p>
                                </div>
                                <div class="wrap-price--all">
                                    <div class="price-old-wrap--all">
                                        <p class="price-old-text--top">Regularna cena:</p>
                                        <p class="price-old-x--top">
                                                    <span class="price-x--top x_price_previous">
                                                        {{ $prices[1]['originalPrice'] }}
                                                    </span>
                                            <span class="price-currency--top x_currency">
                                                        {{ $prices[1]['currency'] }}
                                                    </span>
                                        </p>
                                    </div>
                                    <div class="price-new-wrap--all">
                                        <p class="price-new-text--top">Akcijska cena</p>
                                        <p class="price-new-x--top">
                                                    <span class="price-x--top x_price_current">
                                                        {{ $prices[1]['amount'] }}
                                                    </span>
                                            <span class="price-currency--top x_currency">
                                                        {{ $prices[1]['currency'] }}
                                                    </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-sh--all">
                                Količine su ograničene!
                            </div>
                        </div>
                        <div class="form-center"></div>
                        <div class="form-right">
                            <p id="form-scroll" class="form__title">Popunite formu za naručivanje</p>
                            <div class="form-bg--all">
                                <div class="wrap-price--top wrap-price--mob">
                                    <div class="price-old-wrap--top">
                                        <p class="price-old-text--top">Regularna cena:</p>
                                        <p class="price-old-x--top">
                                                    <span class="price-x--top x_price_previous">
                                                        {{ $prices[1]['originalPrice'] }}
                                                    </span>
                                            <span class="price-currency--top x_currency">
                                                        {{ $prices[1]['currency'] }}
                                                    </span>
                                        </p>
                                    </div>
                                    <div class="price-new-wrap--top">
                                        <p class="price-new-text--top">Akcijska cena</p>
                                        <p class="price-new-x--top">
                                                    <span class="price-x--top x_price_current">
                                                        {{ $prices[1]['amount'] }}
                                                    </span>
                                            <span class="price-currency--top x_currency">
                                                        {{ $prices[1]['currency'] }}
                                                    </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-main">
                                    <form method="post" action="{{$orderRoute}}" class="x_order_form">
                                        {{csrf_field()}} @include('lander.naturapharm.components.form_hidden_fields')
                                        <input class="input-form input-form--all" type="text" name="name" placeholder="Ime i prezime" required />
                                        <input class="input-form input-form--all" type="text" name="phone" placeholder="Telefon" required />
                                        <button class="submit-form submit-form--all" type="submit">Poruči</button>
                                    </form>
                                </div>
                                {{--
                                <p class="protection">Vaši podaci su zaštićeni</p>
                                --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a id="effect"></a>
    <div class="section6">
        <div class="wrapper">
            <p class="title">Efekat nakon 30 dana <span class="title6-span1">korišćenja </span> Nail Repair spreja</p>
            <div class="effect">
                <div class="effect__block effect__block--1">Uklanja gljivice na nogama i noktima</div>
                <div class="effect__block effect__block--2">Svrab i ljuštenje nestaju</div>
                <div class="effect__block effect__block--3">Nema neprijatnih mirisa</div>
                <div class="effect__block effect__block--4">Udoban osećaj u obući</div>
                <div class="effect__hr"></div>
                <div class="effect__block effect__block--5">Pukotine zarastaju</div>
                <div class="effect__block effect__block--6">Živahno i razdragano kretanje</div>
                <div class="effect__block effect__block--7">Lepa i negovana stopala</div>
            </div>
        </div>
    </div>
    <div class="section__wrap-bg-2">
        <div class="section7">
            <div class="wrapper">
                <p class="title">Kako primeniti <span class="title7-span1"> Nail Repair?</span></p>
                <p class="how-use">Očistite nokat detaljno, osušite ga i naprskajte Nail Repair sprej. Sačekajte dok se osuši, a nakon toga možete da nastavite sa svakodnevnim aktivnostima.</p>
            </div>
        </div>
        <div class="section8">
            <div class="sale-wrapper--mob sale-wrapper--mob-all">
                <div class="sale-wrap--mob">
                    <p class="sale-title">POPUST</p>
                    <p class="sale-text">-40%</p>
                </div>
                <div class="product-sh--mob">
                    Količine su ograničene
                </div>
            </div>
            <div class="section-form">
                <div class="wrapper">
                    <div class="form-wrapper">
                        <div class="form-left">
                            <p class="form-left__title">Jednostavan način da pobedite gljivice, žute i ispucale nokte!</p>
                            <div class="wrap-sale-price">
                                <div class="form-left__sale-wrap">
                                    <p class="sale-title">POPUST</p>
                                    <p class="sale-text">-40%</p>
                                </div>
                                <div class="wrap-price--all">
                                    <div class="price-old-wrap--all">
                                        <p class="price-old-text--top">Regularna cena:</p>
                                        <p class="price-old-x--top">
                                                    <span class="price-x--top x_price_previous">
                                                        {{ $prices[1]['originalPrice'] }}
                                                    </span>
                                            <span class="price-currency--top x_currency">
                                                        {{ $prices[1]['currency'] }}
                                                    </span>
                                        </p>
                                    </div>
                                    <div class="price-new-wrap--all">
                                        <p class="price-new-text--top">Akcijska cena</p>
                                        <p class="price-new-x--top">
                                                    <span class="price-x--top x_price_current">
                                                        {{ $prices[1]['amount'] }}
                                                    </span>
                                            <span class="price-currency--top x_currency">
                                                        {{ $prices[1]['currency'] }}
                                                    </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-sh--all">
                                Količine su ograničene!
                            </div>
                        </div>
                        <div class="form-center"></div>
                        <div class="form-right">
                            <p class="form__title">Unesite Vaše podatke u formu za naručivanje</p>
                            <div class="form-bg--all">
                                <div class="wrap-price--top wrap-price--mob">
                                    <div class="price-old-wrap--top">
                                        <p class="price-old-text--top">Regularna cena:</p>
                                        <p class="price-old-x--top">
                                                    <span class="price-x--top x_price_previous">
                                                        {{ $prices[1]['originalPrice'] }}
                                                    </span>
                                            <span class="price-currency--top x_currency">
                                                        {{ $prices[1]['currency'] }}
                                                    </span>
                                        </p>
                                    </div>
                                    <div class="price-new-wrap--top">
                                        <p class="price-new-text--top">Akcijska cena</p>
                                        <p class="price-new-x--top">
                                                    <span class="price-x--top x_price_current">
                                                        {{ $prices[1]['amount'] }}
                                                    </span>
                                            <span class="price-currency--top x_currency">
                                                        {{ $prices[1]['currency'] }}
                                                    </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-main">
                                    <form method="post" action="{{$orderRoute}}" class="x_order_form">
                                        {{csrf_field()}} @include('lander.naturapharm.components.form_hidden_fields')
                                        <input class="input-form input-form--all" type="text" name="name" placeholder="Ime i prezime" required />
                                        <input class="input-form input-form--all" type="text" name="phone" placeholder="Telefon" required />
                                        <button class="submit-form submit-form--all" type="submit">Poruči</button>
                                    </form>
                                </div>
                                {{--
                                <p class="protection">Vaši podaci su zaštićeni</p>
                                --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section9">
        <div class="wrapper">
            <div class="better__wrap">
                <p class="title">Zašto je Nail Repair bolji od drugih antifugalnih lekova?</p>
                <div class="better">
                    <p class="better__text better__text--1">Antifugalni agensi su podeljeni u dva tipa: prvi ne pomažu, drugi rade samo tokom primene. Ljudi koji pate od gljivica na noktima moraju stalno da ih koriste.</p>
                    <p class="better__text">
                        Nail Repair drastično menja situaciju. Masovne kliničke studije pokazale su da se proizvod efikasno bori protiv gljivica na noktima. Nakon 1 ciklusa tretmana, gljivice nestaju i ne vraćaju se. Ovako moćan
                        efekat postiže se zahvaljujući pažljivo biranim prirodnim sastojcima.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <a id="reviews"></a>
    <div class="section11">
        <div class="wrapper">
            <p class="title">Utisci naših kupaca</p>
            <div class="slider-wrapper" id="slider-wrap">
                <div id="slider">
                    <div class="slide">
                        <div class="text-wrap-slide text-wrap-slide--2">
                            <p class="text-slide">
                                Stalno idem na bazen. Kada sam otkrila da imam gljivice na noktu uopste se nisam iznenadila pošto koristimo zajedničku svlačionicu i tuševe. Jedna drugarica sa plivanja mi je preporučila Nail Repair i
                                rekoh zašto da ne probam. Mogu da vam kažem da sam potpuno oduševljena! Nakon mesec i po gljivica je nestala, a nokat je skroz normalan.
                            </p>
                            <p class="name-slide">Aleksandra, 47 godina</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="text-wrap-slide text-wrap-slide--1">
                            <p class="text-slide">
                                Pre ovog proizvoda sam mislila da gljivice na noktima nikada ne mogu nestati. Probala sam gomilu drugih lekova. Simptomi su povremeno nestajali ali su se brzo vraćali. Išla sam kod doktora, propisivao
                                mi je razne masti ali ništa nije pomagalo. Nakon korišćenja Nail Repair spreja već 6 meseci mi se gljivica na noktima ne vraća. Mislim da sam konačno izlečila.
                            </p>
                            <p class="name-slide">Marina, 45 godina</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="text-wrap-slide text-wrap-slide--3">
                            <p class="text-slide">
                                Gljivice su toliko uporne da ih moj suprug godinama nije uspeo da uništi. Videli smo reklamu za Nail Repair i poručili smo. Da ne poverujete, gljivice su potpuno nestale a nokat je normalan. Hvala
                                vam!
                            </p>
                            <p class="name-slide">Katarina, 31 godina</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section12">
        <div class="sale-wrapper--mob sale-wrapper--mob-all">
            <div class="sale-wrap--mob">
                <p class="sale-title">POPUST</p>
                <p class="sale-text">-40%</p>
            </div>
            <div class="product-sh--mob">
                Količine su ograničene!
            </div>
        </div>
        <div class="section-form">
            <div class="wrapper">
                <div class="form-wrapper">
                    <div class="form-left">
                        <p class="form-left__title">
                            Jednostavan način da pobedite gljivice, žute i ispucale nokte!
                        </p>
                        <div class="wrap-sale-price">
                            <div class="form-left__sale-wrap">
                                <p class="sale-title">POPUST</p>
                                <p class="sale-text">-40%</p>
                            </div>
                            <div class="wrap-price--all">
                                <div class="price-old-wrap--all">
                                    <p class="price-old-text--top">Regularna cena:</p>
                                    <p class="price-old-x--top">
                                                <span class="price-x--top x_price_previous">
                                                    {{ $prices[1]['originalPrice'] }}
                                                </span>
                                        <span class="price-currency--top x_currency">
                                                    {{ $prices[1]['currency'] }}
                                                </span>
                                    </p>
                                </div>
                                <div class="price-new-wrap--all">
                                    <p class="price-new-text--top">Akcijska cena</p>
                                    <p class="price-new-x--top">
                                                <span class="price-x--top x_price_current">
                                                    {{ $prices[1]['amount'] }}
                                                </span>
                                        <span class="price-currency--top x_currency">
                                                    {{ $prices[1]['currency'] }}
                                                </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="product-sh--all">
                            Količine su ograničene
                        </div>
                    </div>
                    <div class="form-center"></div>
                    <div class="form-right">
                        <p class="form__title">Popunite formu za naručivanje</p>
                        <div class="form-bg--all">
                            <div class="wrap-price--top wrap-price--mob">
                                <div class="price-old-wrap--top">
                                    <p class="price-old-text--top">Полная цена:</p>
                                    <p class="price-old-x--top">
                                                <span class="price-x--top x_price_previous">
                                                    {{ $prices[1]['originalPrice'] }}
                                                </span>
                                        <span class="price-currency--top x_currency">
                                                    {{ $prices[1]['currency'] }}
                                                </span>
                                    </p>
                                </div>
                                <div class="price-new-wrap--top">
                                    <p class="price-new-text--top">Цена со скидкой</p>
                                    <p class="price-new-x--top">
                                                <span class="price-x--top x_price_current">
                                                    {{ $prices[1]['amount'] }}
                                                </span>
                                        <span class="price-currency--top x_currency">
                                                    {{ $prices[1]['currency'] }}
                                                </span>
                                    </p>
                                </div>
                            </div>
                            <div class="form-main">
                                <form method="post" action="{{$orderRoute}}" class="x_order_form">
                                    {{csrf_field()}} @include('lander.naturapharm.components.form_hidden_fields')
                                    <input class="input-form input-form--all" type="text" name="name" placeholder="Ime i prezime" required />
                                    <input class="input-form input-form--all" type="text" name="phone" placeholder="Telefon" required />
                                    <button class="submit-form submit-form--all" type="submit">Poruči</button>
                                </form>
                            </div>
                            {{--
                            <p class="protection">Vaši podaci su zaštićeni</p>
                            --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/nailrepair/owl.carousel.min.css" />
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script>
    $(window).on("load", function () {
        $("#slider").owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoHeight: true,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>
