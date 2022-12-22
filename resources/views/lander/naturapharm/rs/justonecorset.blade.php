<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="description" content="">
    <link rel="shortcut icon" href="{{ asset('/') }}flexonikFiles/sweatshaper/favicon.png" type="image/x-icon">
    <link rel="icon" href="{{ asset('/') }}flexonikFiles/sweatshaper/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/sweatshaper/main.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/sweatshaper/slick.css"/>
    <script type="text/javascript" src="{{ asset('/') }}shared_files/slick.min.js"></script>
    <style>
        @font-face {
            font-family: 'Proxima Nova';
            src: url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.eot');
            src: url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.eot@#iefix') format('embedded-opentype'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.ttf') format('truetype'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.svg') format('svg');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Proxima Nova';
            src: url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.eot');
            src: url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.eot@#iefix') format('embedded-opentype'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.ttf') format('truetype'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.svg') format('svg');
            font-weight: 700;
            font-style: normal;
        }
        .top-block-v2{
            padding: 432px 0 0;
            background: url({{ asset('/') }}naturapharmFiles/justonecorset/top-block-v2.jpg) 50% 0 no-repeat;
        }
    </style>
</head>
<body>
<div class="main-wrap">
    @include('components.display_errors')

    <!-- -v2 -->
    <section class="title-block">
        <div class="sub-main-title">NOSITE I MRŠAVITE <br>KORSET ZA SAGOREVANJE MASTI</div>
        <h1 class="main-title">Just One Corset</h1>
    </section>

    <section class="top-block-v2">
        <div class="cost-cont clearfix">
            <div class="cost old-cost">
                Stara cena:
                <strong>
                    {{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}
                </strong>
            </div>
            <div class="sale-cont">
                POPUST
                <strong>-40
                    <small>%</small>
                </strong>
            </div>
            <div class="cost new-cost">
                Nova cena:
                <strong>
                    {{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}
                </strong>
            </div>
        </div>
        <div class="describe-cont">
            <a class="button-m" href="#zakaz">PORUČITE SADA</a>
        </div>
    </section>

    <!-- -v3 -->
    <section class="sup-block-v3 benefits1_section">
        <h2 class="lvl-title">Just One Corset <br/>SE PREPORUČUJE <br/>UKOLIKO:</h2>
        <ul class="sup-cont clearfix">
            <li>
                <img src="{{ asset('/') }}flexonikFiles/sweatshaper/sup-block-v3_1.jpg" alt="Just One Corset">
                <p>Želite lepu figuru u najkraćem mogućem roku</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/sweatshaper/sup-block-v3_2.jpg" alt="Just One Corset">
                <p>Odlučili ste da dovedete svoje telo do savršenstva bez izgladnjivanja i dijeta</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/sweatshaper/sup-block-v3_3.jpg" alt="Just One Corset">
                <p>Hoćete da imate idealnu kilažu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/sweatshaper/sup-block-v3_4.jpg" alt="Just One Corset">
                <p>Želite zavodljiv i tanak struk</p>
            </li>
        </ul>
    </section>

    <!--  -->
    <section class="detail-block about_section">
        <h2 class="lvl-title">Just One Corset ZA SAGOREVANJE MASTI</h2>
        <div class="text-cont">
            <p>Posebno je dizajniran za <b>siguran i brz</b> gubitak težine.</p>
            <p>Just One Corset za sagorevanje masti dobro pristaje vašem telu,
                dok jedinstvena <b>Neotex tehnologija</b> stimuliše povećanje unutrašnje temperature,
                utičući ne samo na površinske nego i na <b>duboke naslage masti.</b></p>
            <p>Ova akcija izaziva povećanje znojenja, i to <b>do 4 puta više</b> nego u
                normalnom stanju. Ovo omogućava telu da se oslobodi viška tečnosti
                i toksina.</p>
            <img src="{{ asset('/') }}naturapharmFiles/justonecorset/pic-1.jpg" alt="Just One Corset">
        </div>
    </section>

    <!-- -v2 -->
    <section class="sup-block-v2">
        <h2 class="lvl-title">EFIKASNOST <br/> Just One Corseta</h2>
        <ul class="sup-cont clearfix grig">
            <li>
                <h4>POVEĆAVA ZNOJENJE 4 PUTA</h4>
                <p>Smanjiće masne naslage na nepotrebnim mestima, a mišići će postati istaknutiji</p>
            </li>
            <li>
                <h4>UBRZAVA METABOLIZAM</h4>
                <p>Redovnom upotrebom daje 100% rezultat (i do minus 6 kilograma mesečno)</p>
            </li>
            <li>
                <h4>NEOTEX TEHNOLOGIJA</h4>
                <p>Napravljen je od Neotex tkanine čiji unutrašnji sloj pojačava rad znojnih žlezda, a spoljašnji sloj upija znoj sprečavajući vlaženje tkanine</p>
            </li>
            <li>
                <h4>PRIMETAN UČINAK</h4>
                <p>Sagoreva 72% više masti tokom treninga, a ima pozitivan efekat i pri mirovanju</p>
            </li>
        </ul>
        <a class="button-m" href="#zakaz">PORUČITE SADA</a>
    </section>

    <!-- -v3 -->
    <section class="sup-block-v3 use_section">
        <h2 class="lvl-title">KADA I GDE MOŽE DA SE KORISTI Just One Corset?</h2>
        <ul class="sup-cont clearfix">
            <li>
                <img src="{{ asset('/') }}flexonikFiles/sweatshaper/use1.jpg" alt="Just One Corset">
                <p>ODMOR</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/sweatshaper/use2.jpg" alt="Just One Corset">
                <p>KUĆNI POSLOVI</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/sweatshaper/use3.jpg" alt="Just One Corset">
                <p>ŠOPING</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/sweatshaper/use4.jpg" alt="Just One Corset">
                <p>TRČANJE</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/sweatshaper/use5.jpg" alt="Just One Corset">
                <p>FITNES</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/sweatshaper/use6.jpg" alt="Just One Corset">
                <p>ČUVANJE DECE</p>
            </li>
        </ul>
        <p class="description">UPRAŽNJAVAJ SVOJE SVAKODNEVNE AKTIVNOSTI I USPUT DOVEDI SVOJE TELO U <br/> SAVRŠENU LINIJU!</p>
    </section>

    <!-- -v1 -->
    <section class="delivery-block-v1">
        <h2 class="lvl-title">KAKO PORUČITI <br/> Just One Corset?</h2>
        <ul class="delivery-cont clearfix">
            <li>
                <p>Poručite popunjavanjem forme na našem sajtu</p>
            </li>
            <li>
                <p>Potvrdićemo porudžbinu u najkraćem roku</p>
            </li>
            <li>
                <p>Paket ćete dobiti brzom poštom u roku od 2 radna dana</p>
            </li>
            <li>
                <p>Pošiljku ćete platiti kuriru brze pošte po preuzimanju.</p>
            </li>
        </ul>
    </section>

    <!-- -v3 -->
    <section class="rev-block-v3">
        <h2 class="lvl-title">UTISCI <br/> NAŠIH KUPACA</h2>
        <div class="rev-cont clearfix">
            <div class="rev-item">
                <img src="{{ asset('/') }}flexonikFiles/sweatshaper/rev-block-v3_1.jpg" alt="Just One Corset">
                <h4>Milica Mitrović, 33 godine</h4>
                <p>Videla sam oglas i i odlučila sam da pokušam. Rezultati su neverovatni! Sviđa mi se što steže bočne strane i nije vidljiv ispod odeće.
                    Samo nedelju dana kasnije ljudi iz moje okoline su počeli da mi govore da sam smršala!
                    Moj rezultat za mesec dana je čak minus 8 kilograma! Preporučujem svakome ovaj proizvod!</p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}naturapharmFiles/justonecorset/rev-block-v3_2.jpg" alt="Just One Corset">
                <h4>Boriša Gavrić , 31 godina</h4>
                <p>Kupio sam korset za svoju suprugu, jer je dugo pokušavala da izgubi kilograme.
                    Imao sam sreću da sam proizvod kupio sa popustom, a ona je izgubila kilograme i srećna je kao nikada do sada, a i ja sa njom! Hvala Vam!</p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}flexonikFiles/sweatshaper/rev-block-v3_3.jpg" alt="Just One Corset">
                <h4>Dragana Marković, 29 godina</h4>
                <p>Korset je isporučen 2 dana nakon što sam ga poručila. Koristim ga već 9 nedelja. Nosim ga gde god je to moguće – u šetnji sa detetom, kod kuće, na trčanju.
                    Rezultat je kao što i sami vidite. Struk mi je tanji za 14 centimetara, a bokovi za 12. Ne želim da stanem na ovome, nastaviću da ga nosim.</p>
            </div>
        </div>
    </section>

    <!-- -v2 -->
    <section class="title-block">
        <div class="sub-main-title">NOSITE I MRŠAVITE <br>KORSET ZA SAGOREVANJE MASTI</div>
        <h1 class="main-title">Just One Corset</h1>
    </section>

    <section class="top-block-v2">
        <div class="cost-cont clearfix" id="zakaz">
            <div class="cost old-cost">
                Stara cena:
                <strong>
                    {{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}
                </strong>
            </div>
            <div class="sale-cont">
                POPUST
                <strong>-40
                    <small>%</small>
                </strong>
            </div>
            <div class="cost new-cost">
                Nova cena:
                <strong>
                    {{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}
                </strong>
            </div>
        </div>
        <div class="describe-cont">
            <form class="m1-form" method="post" action="{{$orderRoute}}">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div><input type="text" name="name" placeholder="Ime i prezime" required></div>
                <div><input type="tel" name="phone" placeholder="Telefon" required></div>
                <div><input type="text" name="shipping_address" placeholder="Adresa" required></div>
                <div><input type="text" name="shipping_city" placeholder="Grad" required></div>
                <div>
                    <button class="button-m">PORUČITE SADA</button>
                </div>
            </form>
        </div>
    </section>
</div>
<script type="text/javascript" src="{{ asset('/') }}flexonikFiles/sweatshaper/init.js"></script>
@include('components.pixel_footer')
</body>
</html>
