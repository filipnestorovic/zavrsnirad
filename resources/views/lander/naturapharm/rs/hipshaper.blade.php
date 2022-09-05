<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="description" content="">
    <link rel="shortcut icon" href="{{ asset('/') }}naturapharmFiles/korset/favicon.png" type="image/x-icon">
    <link rel="icon" href="{{ asset('/') }}naturapharmFiles/korset/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/korset/main.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}naturapharmFiles/korset/slick.css"/>
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
            background: url('{{ asset('/') }}naturapharmFiles/hipshaper/top-block-v2.png') 50% 0 no-repeat;
        }
    </style>
</head>
<body>
<div class="main-wrap">
    @include('components.display_errors')

    <!-- -v2 -->
    <section class="title-block">
        <div class="sub-main-title">NOSITE BODY SHAPING WRAP <br>I IZGLEDAJTE SAVRŠENO</div>
        <h1 class="main-title">BODY SHAPING WRAP</h1>
    </section>

    <section class="top-block-v2">
        <div class="cost-cont clearfix">
            <div class="cost old-cost">
                Stara cena:
                <strong>
                    {{ $prices[1]['originalPrice'] }} RSD
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
                    {{ $prices[1]['amount'] }} RSD
                </strong>
            </div>
        </div>
        <div class="describe-cont">
            <a class="button-m" href="#zakaz">PORUČITE SADA</a>
        </div>
    </section>

    <!-- -v3 -->
    <section class="sup-block-v3 benefits1_section">
        <h2 class="lvl-title">BODY SHAPING WRAP <br/>SE PREPORUČUJE <br/>UKOLIKO:</h2>
        <ul class="sup-cont clearfix">
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/korset/sup-block-v3_1.jpg" alt="Body Shaping Wrap">
                <p>Želite da imate lepu figuru u najkraćem roku. Pri treningu topi masne naslage</p>
            </li>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/korset/sup-block-v3_2.jpg" alt="Body Shaping Wrap">
                <p>Odlučili ste da vaše telo izgleda savršeno bez izgladnjivanja i dijeta</p>
            </li>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/korset/sup-block-v3_3.jpg" alt="Body Shaping Wrap">
                <p>Želite da vaše telo izgleda kao da imate idealnu kilažu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/korset/sup-block-v3_4.jpg" alt="Body Shaping Wrap">
                <p>Želite zavodljiv i tanak struk sa istaknutim grudima</p>
            </li>
        </ul>
    </section>

    <!--  -->
    <section class="detail-block about_section">
        <h2 class="lvl-title">BODY SHAPING WRAP ZA OBLIKOVANJE TELA</h2>
        <div class="text-cont">
            <p>Posebno je dizajniran za momentalni vizuelni <b>efekat savršenog tela.</b></p>
            <p>Body Shaping Wrap je napravljen da <b>savršeno prijanja uz vaše telo,</b> oblikujući ga i praveći idealnu figuru. Može da se nosi ispod odeće i <b>veoma je neosetan.</b></p>
            <p>Poznato je da je struk najteže oblikovati, zato se kod nas pojavilo idealno rešenje za to - <b>obučeš Body Shaping Wrap i gotovo</b> - svi će biti oduševljeni tvojim izgledom.</p>
            <img src="{{ asset('/') }}naturapharmFiles/hipshaper/pic-1.png" alt="Body Shaping Wrap">
        </div>
    </section>

    <!-- -v2 -->
    <section class="sup-block-v2">
        <h2 class="lvl-title">EFIKASNOT BODY SHAPING WRAP-A</h2>
        <ul class="sup-cont clearfix grig">
            <li>
                <h4>SMANJUJE EFEKAT NADUDOSTI</h4>
                <p>Kompresiona vlakna pozitivno utiču na mišićnu strukturu i na taj način smanjuju vizuelni efekat nadutosti i stvaraju ravan stomak.</p>
            </li>
            <li>
                <h4>DOPADLJIVA FIGURA</h4>
                <p>Obucite i imajte atraktivno telo bez muke i napora.</p>
            </li>
            <li>
                <h4>NEOTEX TEHNOLOGIJA</h4>
                <p>Napravljen je od Neotex tkanine koja savršeno diše i ne stvara neprijatno znojenje. Ukoliko želite da trenirate uz Body Shaping Wrap, onda će pospešiti zagrevanje i topljenje masti.</p>
            </li>
            <li>
                <h4>INSTANT EFEKAT</h4>
                <p>Nije potrebno vreme da bi proizvod dao rezultate. Obucite ga i gotovo.</p>
            </li>
        </ul>
        <a class="button-m" href="#zakaz">PORUČITE SADA</a>
        {{--<div class="ost-col"><span>12</span> PEÇAS RESTANTES NO STOCK</div>--}}
    </section>

    <!-- -v3 -->
    <section class="sup-block-v3 use_section">
        <h2 class="lvl-title">KADA I GDE MOŽE DA SE NOSI BODY SHAPING WRAP?</h2>
        <ul class="sup-cont clearfix">
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/korset/use1.jpg" alt="Body Shaping Wrap">
                <p>ODMOR</p>
            </li>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/korset/use2.jpg" alt="Body Shaping Wrap">
                <p>KUĆNI POSLOVI</p>
            </li>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/korset/use3.jpg" alt="Body Shaping Wrap">
                <p>ŠOPING</p>
            </li>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/korset/use4.jpg" alt="Body Shaping Wrap">
                <p>TRČANJE</p>
            </li>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/korset/use5.jpg" alt="Body Shaping Wrap">
                <p>FITNES</p>
            </li>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/korset/use6.jpg" alt="Body Shaping Wrap">
                <p>ČUVANJE DECE</p>
            </li>
        </ul>
        <p class="description">UPRAŽNJAVAJTE SVOJE SVAKODNEVNE AKTIVNOSTI <br> I IZGLEDAJTE SAVRŠENO</p>
    </section>

    <!-- -v1 -->
    <section class="delivery-block-v1">
        <h2 class="lvl-title">KAKO PORUČITI <br/> BODY SHAPING WRAP?</h2>
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
                <p>Pošiljku ćete platiti kuriru brze pošte po preuzimanju</p>
            </li>
        </ul>
    </section>

    <!-- -v3 -->
    <section class="rev-block-v3">
        <h2 class="lvl-title">UTISCI <br/> NAŠIH KUPACA</h2>
        <div class="rev-cont clearfix">
            <div class="rev-item">
                <img src="{{ asset('/') }}naturapharmFiles/hipshaper/rev-block-v3_1.jpg" alt="Body Shaping Wrap">
                <h4>Milica Mitrović, 33 godine</h4>
                <p>Videla sam oglas i odlučila sam da pokušam. Rezultat je neverovatan. Sviđa mi se što steže bočne strane i nije vidljiv ispod odeće. Ljudi iz moje okoline su mi počeli govoriti da sam smršala.
                    Ja sam čak i trenirala u njemu i dao je odlične efekte. Mnogo zagreva telo i pospešuje znojenje, ali najbolje od svega je što diše i što se ne osećam kao pod folijom.</p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}naturapharmFiles/hipshaper/rev-block-v3_2.png" alt="Body Shaping Wrap">
                <h4>Boriša Gavrić , 31 godina</h4>
                <p>Kupio sam Body Shaping Wrap za svoju suprugu jer je dugo i bezuspešno pokušavala da se oslobodi stomaka. Imao sam sreću da sam proizvod kupio sa popustom, a ona je izgledala kao gorska vila. Presrećni smo, hvala vam.</p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}naturapharmFiles/hipshaper/rev-block-v3_3.jpg" alt="Body Shaping Wrap">
                <h4>Dragana Marković, 29 godina</h4>
                <p>Body Shaping Wrap mi je stigao 2 dana nakon što sam ga poručila. Koristim ga već 9 nedelja. Nosim ga kad god je to moguće - u šetnji sa detetom, kod kuće pa i na trčanju. Primetila sam da kada trčim u njemu da
                    jako pospešuje znojenje i topljenje masnih naslaga. Struk mi je tanji za 14 centimetara. Ne želim da stanem na ovome, nastaviću da ga nosim.</p>
            </div>
        </div>
    </section>

    <!-- -v2 -->
    <section class="title-block">
        <div class="sub-main-title">NOSITE BODY SHAPING WRAP <br> I IZGLEDAJTE SAVRŠENO</div>
        <h1 class="main-title">BODY SHAPING WRAP</h1>
    </section>

    <section class="top-block-v2">
        <div class="cost-cont clearfix" id="zakaz">
            <div class="cost old-cost">
                Stara cena:
                <strong>
                    {{ $prices[1]['originalPrice'] }} RSD
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
                    {{ $prices[1]['amount'] }} RSD
                </strong>
            </div>
        </div>
        <div class="describe-cont">
            <form class="m1-form" method="post" action="{{$orderRoute}}">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div><input type="text" name="name" placeholder="Ime i prezime" required></div>
                <div><input type="tel" name="phone" placeholder="Telefon" required></div>
                <div>
                    <button class="button-m">PORUČITE SADA</button>
                </div>
            </form>
        </div>
    </section>
</div>
<script type="text/javascript" src="{{ asset('/') }}naturapharmFiles/korset/init.js"></script>
@include('components.pixel_footer')
</body>
</html>
