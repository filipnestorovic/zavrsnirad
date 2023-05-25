<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=480"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/24kgoldskin/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/24kgoldskin/styles.css"/>
    <style>
        .offer_section.bottom {
            background: url("{{ asset('/') }}naturapharmFiles/blackheadmaskserum/bottom_bg.jpg");
        }

        .offer_section .box {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            min-height: 515px;
            background: url({{ asset('/') }}naturapharmFiles/blackheadmaskserum/offer.jpg) 50% -20px no-repeat #ecd7a0;
        }

        .sect3 {
            background: url("{{ asset('/') }}naturapharmFiles/blackheadmaskserum/sec3_bg.jpg") center 50px no-repeat #d2a952;
            padding: 40px 30px 30px;
        }
    </style>
    <style>@font-face {
            font-family: 'Montserrat';
            src: url('{{ asset('/') }}fonts/Montserrat-Light.woff2') format('woff2'), url('{{ asset('/') }}fonts/Montserrat-Light.woff') format('woff'), url('{{ asset('/') }}fonts/Montserrat-Light.ttf') format('truetype');
            font-weight: 300;
            font-style: normal
        }

        @font-face {
            font-family: 'Montserrat';
            src: url('{{ asset('/') }}fonts/Montserrat-Regular.woff2') format('woff2'), url('{{ asset('/') }}fonts/Montserrat-Regular.woff') format('woff'), url('{{ asset('/') }}fonts/Montserrat-Regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: 'Montserrat';
            src: url('{{ asset('/') }}fonts/Montserrat-Italic.woff2') format('woff2'), url('{{ asset('/') }}fonts/Montserrat-Italic.woff') format('woff'), url('{{ asset('/') }}fonts/Montserrat-Italic.ttf') format('truetype');
            font-weight: 400;
            font-style: italic
        }

        @font-face {
            font-family: 'Montserrat';
            src: url('{{ asset('/') }}fonts/Montserrat-Medium.woff2') format('woff2'), url('{{ asset('/') }}fonts/Montserrat-Medium.woff') format('woff'), url('{{ asset('/') }}fonts/Montserrat-Medium.ttf') format('truetype');
            font-weight: 500;
            font-style: normal
        }

        @font-face {
            font-family: 'Montserrat';
            src: url('{{ asset('/') }}fonts/Montserrat-Bold.woff2') format('woff2'), url('{{ asset('/') }}fonts/Montserrat-Bold.woff') format('woff'), url('{{ asset('/') }}fonts/Montserrat-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal
        }

        @font-face {
            font-family: 'Montserrat';
            src: url('{{ asset('/') }}fonts/Montserrat-Black.woff2') format('woff2'), url('{{ asset('/') }}fonts/Montserrat-Black.woff') format('woff'), url('{{ asset('/') }}fonts/Montserrat-Black.ttf') format('truetype');
            font-weight: 900;
            font-style: normal
        }

        @font-face {
            font-family: 'Museo Sans';
            src: url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-300.woff2') format('woff2'), url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-300.woff') format('woff'), url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-300.ttf') format('truetype');
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: 'Museo Sans';
            src: url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-500.woff2') format('woff2'), url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-500.woff') format('woff'), url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-500.ttf') format('truetype');
            font-weight: 500;
            font-style: normal
        }

        @font-face {
            font-family: 'Museo Sans';
            src: url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-700.woff2') format('woff2'), url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-700.woff') format('woff'), url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-700.ttf') format('truetype');
            font-weight: 700;
            font-style: normal
        }

        @font-face {
            font-family: 'Museo Sans';
            src: url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-900.woff2') format('woff2'), url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-900.woff') format('woff'), url('{{ asset('/') }}fonts/subset-MuseoSansCyrl-900.ttf') format('truetype');
            font-weight: 900;
            font-style: normal
        }</style>
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <section class="offer_section">
        <div class="box">
            <h1 class="main_title">BLACK HEAD</h1>
            <h2 class="main_subtitle">MASK SERUM</h2>
            <div class="sale">popust <span>-40%</span></div>
            <div class="offer_content">
                <p class="desc">
                    DUBOKO PRODIRE I IZBACUJE SEBUM NA POVRŠINU
                </p>
                <ul class="list1">
                    <li>Eliminiše akne i crne mitisere</li>
                    <li>Detoksira i izacuje nečistoće i masnoću</li>
                    <li>Hrani kožu vitaminima</li>
                </ul>
                <div class="bef_aftr">
                    <img src="{{ asset('/') }}purplerelaxFiles/24kgoldskin/11.gif" alt=""/>
                </div>
                <div class="action_block">
                    <div class="price">
                        <div class="old">
                            Redovna cena:
                            <p>
                                {{ $prices[1]['originalPrice'] }}<small>
                                    {{ $prices[1]['currency'] }}
                                </small>
                            </p>
                        </div>
                        <div class="discont">popust <span>-40%</span></div>
                        <div class="new">
                            Cena sa popustom:
                            <p>
                                <span>{{ $prices[1]['amount'] }}</span><small>
                                    {{ $prices[1]['currency'] }}
                                </small>
                            </p>
                        </div>
                    </div>
                    <a href="#order_form" class="button-m">Poručite sa popustom</a>
                    <p>KOLIČINA ARTIKALA NA LAGERU JE OGRANIČENA!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sect2 dark_bg">
        <h2 class="title">BLACK HEAD MASK SERUM <span>će pomoći u čišćenju lica od crnih mitisera</span></h2>
        <ul class="benef1 check">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/24kgoldskin/s2_img1.jpg" alt=""/>
                <p>Hrani kožu vitaminima i mineralima</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/24kgoldskin/s2_img2.jpg" alt=""/>
                <p>Duboko vlaži i hidrira</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/24kgoldskin/s2_img3.jpg" alt=""/>
                <p>Pomaže u održavanju mladalačkog izgleda</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/24kgoldskin/s2_img4.jpg" alt=""/>
                <p>Čisti pore i izbacuje nečistoće</p>
            </li>
        </ul>
        <a href="#order_form" class="button-m">Poručite sada</a>
    </section>
    <section class="sect3">
        <h2 class="title"><span>Zašto hiljade ljudi bira BLACK HEAD MASK SERUM?</span></h2>
        <p><b>Da li imate crne mitisere po licu i nosu?</b></p>
        <p>Black Head Mask Serum koji je zasićen prirodnim sastojcima, mnogim esencijalnim vitaminima i korisnim
            elementima.</p>

        <img src="{{ asset('/') }}naturapharmFiles/blackheadmaskserum/3.gif" alt=""/>

        <p>Black Head ima kompleksan efekat na zrelu kožu. <b>U najkraćem roku je čisti, izbacuje sebum na površinu i
                čini kožu elastičnom i nežnom.</b></p>
        <a href="#order_form" class="button-m">PORUČITE ODMAH</a>
    </section>
    <section class="use">
        <h2 class="title">Otkrivamo vam čuvenu formulu</h2>
        <ul>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/24kgoldskin/use1.jpg" alt=""/>
                <p><span>Kolagen</span> - čini osnovu vezivnog tkiva</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/24kgoldskin/use2.jpg" alt=""/>
                <p><span>Ulje jojobe</span> - daje elastičnost i čvrstoću koži</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/24kgoldskin/use3.jpg" alt=""/>
                <p><span>Peptidi</span> - poboljšavaju tonus kože</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/24kgoldskin/use4.jpg" alt=""/>
                <p><span>24k zlatno karatno ulje</span> - ekspresno podmlađuje kožu i eliminiše bore</p>
            </li>
        </ul>
        <p style="text-transform: uppercase; text-align: center;">
            SAMO ZA SPOLJNU UPOTREBU<br/>
            IZBEGAVATI KONTAKT SA OČIMA<br/>
            DRŽATI VAN DOMAŠAJA DECE
        </p>
        <img src="{{ asset('/') }}purplerelaxFiles/24kgoldskin/4.gif" class="p_ignore" alt=""/>
    </section>
    <section class="price_block">
        <div class="action_block">
            <div class="price">
                <div class="old">
                    Redovna cena:
                    <p>
                        {{ $prices[1]['originalPrice'] }}<small>
                            {{ $prices[1]['currency'] }}
                        </small>
                    </p>
                </div>
                <div class="discont">popust <span>-40%</span></div>
                <div class="new">
                    Cena sa popustom:
                    <p>
                        <span>{{ $prices[1]['amount'] }}</span><small>
                            {{ $prices[1]['currency'] }}
                        </small>
                    </p>
                </div>
            </div>
            <a href="#order_form" class="button-m">Poručite sa popustom</a>
            <p>KOLIČINA ARTIKALA NA LAGERU JE OGRANIČENA!</p>
        </div>
    </section>
    <section class="sect5 rev_sect color_bg">
        <div class="rev_block">
            <h2 class="title">
                Utisci kupaca <span>koji su već koristili <br/> Black Head Mask Serum</span>
            </h2>
            <div class="reviews owl-carousel">
                <div class="rev_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/24kgoldskin/rev1.jpg" alt=""/>
                    <span>Zamenila sam sve proizvode za negu lica sa ovim proizvodom!</span>
                    <p>
                        Koristim ovaj serum više od mesec dana i mažem njime lice svako veče. Efekat je odličan. Nakon 10 dana upotrebe crni mitiseri su nestali i izašli na površinu pa mi je bilo lako da ih istisnem.
                        Brdo novca sam bacila na kojekakve proizvode, ali mi je jedino ovaj pomogao.
                    </p>
                    <div class="info">
                        <p><span>Aleksandra Jović</span> 53 godine</p>
                    </div>
                </div>
                <div class="rev_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/24kgoldskin/rev2.jpg" alt=""/>
                    <span>Nikada mi koža lica nije bila ovako blistava!</span>
                    <p>
                        Nekada sam mislila da ne postoje magični preparati za negu, ali me je kupovina ovog proizvoda razuverila. Bila sam sumnjičava prema svim proizvodima koji se prodaju preko interneta,
                        ali je rezultat korišćenja Black Head seruma nadmašio sva moja očekivanja. Posle 2 nedelje korišćenja, mogu samo da kažem - WOW!!!
                    </p>
                    <div class="info">
                        <p><span>Marija Marković</span> 41 godina</p>
                    </div>
                </div>
                <div class="rev_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/24kgoldskin/rev3.jpg" alt=""/>
                    <span>Definitivno vredi svakog dinara!</span>
                    <p>
                        Po savetu kozmetičarke kupila sam ovaj serum i moram da vam priznam da sam prezadovoljna. Suvu i mlohavu kožu zamenila je sveža i zategnuta bez flekica i mitisera. Čudo je napravio.
                        Definitivno ne žalim ni jedan dinar koji sam dala na ovo, a uopšte nije bilo skupo.
                    </p>
                    <div class="info">
                        <p><span>Emilića Božović</span> 55 godina</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sect6">
        <h2 class="title">
            <span>
                Kako poručiti <br/>
                Black Head Mask Serum?
            </span>
        </h2>
        <ul class="order_list">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/24kgoldskin/order1.png" alt=""/>
                <p>Ostavite svoje podatke na našem sajtu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/24kgoldskin/order2.png" alt=""/>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/24kgoldskin/order3.png" alt=""/>
                <p>Šaljemo porudžbinu u roku od 1-2 radna dana</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/24kgoldskin/order4.png" alt=""/>
                <p>Plaćate kuriru brze pošte po prijemu</p>
            </li>
        </ul>
    </section>
    <section class="offer_section bottom">
        <div class="box">
            <h1 class="main_title">BLACK HEAD</h1>
            <h2 class="main_subtitle">MASK SERUM</h2>
        </div>
        <div class="order_block">
            <div class="price">
                <div class="old">
                    Redovna cena:
                    <p>
                        {{ $prices[1]['originalPrice'] }}<small>
                            {{ $prices[1]['currency'] }}
                        </small>
                    </p>
                </div>
                <div class="discont">popust <span>-40%</span></div>
                <div class="new">
                    Cena sa popustom:
                    <p>
                        <span>{{ $prices[1]['amount'] }}</span><small>
                            {{ $prices[1]['currency'] }}
                        </small>
                    </p>
                </div>
            </div>
            <div class="action_text">
                <span>PORUČITE ODMAH</span>
                <p>i iskoristite popust od 40% koji je aktivan SAMO DANAS</p>
            </div>
            <form id="order_form" action="{{$orderRoute}}" class="main-order-form main_form" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" placeholder="Ime i prezime" required=""/>
                <input type="tel" name="phone" placeholder="Telefon" required=""/>
                <button class="button-m">Poručite sa popustom</button>
            </form>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}purplerelaxFiles/24kgoldskin/main.js"></script>
@include('components.pixel_footer')
</body>
</html>
