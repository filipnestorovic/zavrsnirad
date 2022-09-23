<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=480">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/bratape/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{ asset('/') }}purplerelaxFiles/bratape/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/bratape/main.css" type="text/css"/>
    <style>
        @font-face {
            font-family: 'Proxima';
            src: url('{{ asset('/') }}fonts/ProximaBold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/ProximaBold.woff') format('woff'),
            url('{{ asset('/') }}fonts/ProximaBold.otf') format('opentype');
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0491;
        }

        @font-face {
            font-family: 'Proxima';
            src: url('{{ asset('/') }}fonts/ProximaLight.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/ProximaLight.woff') format('woff'),
            url('{{ asset('/') }}fonts/ProximaLight.otf') format('opentype');
            font-weight: 300;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0491;
        }

        @font-face {
            font-family: 'Proxima';
            src: url('{{ asset('/') }}fonts/ProximaRegular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/ProximaRegular.woff') format('woff'),
            url('{{ asset('/') }}fonts/ProximaRegular.otf') format('opentype');
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0491;
        }
    </style>
</head>
<body>
<div class="main-wrap">
    @include('components.display_errors')
    <section class="block-1">
        <h1>BRA TAPE <br> ZA SAVRŠEN I PRIVLAČAN DEKOLTE</h1>
        <div class="container-1">
            <div class="sale">POPUST <br/><strong>-40%</strong></div>
        </div>
        <div class="container-2">
            <div class="cost clearfix">
                        <span class="old-cost">
                            Redovna cena:<br/>
                            <span class="price_land_s4">{{ $prices[2]['originalPrice'] }}</span>
                            <span class="price_land_curr">{{ $prices[2]['currency'] }}</span>
                        </span>
                <span class="new-cost">
                            Cena sada:<br/>
                             <span class="price_land_s1">{{ $prices[2]['amount'] }}</span><span
                        class="price_land_curr">{{ $prices[2]['currency'] }}</span>
                        </span>
            </div>
            <a class="button-m" href="#zakaz">Poručite sada</a>
        </div>
    </section>
    <section class="block-2">
        <p class="about">Bra Tape sa ulošcima za bradavice su pouzdano i udobno rešenje za haljine bez leđa i naramenica.
            Funkcionalna traka koja podiže vaše grudi kako bi se poboljšao opušteni izgled kako biste se osjećali lako kada nosite bilo koju vrstu haljine,
            a istovremeno vam pomaže da postignete oblik koji želite.</p>
    </section>
    <section class="block-3">
        <h2 class="title">
            NEVIDLJIVI GRUDNJAK JE IDEALAN JE ZA:
        </h2>
        <ul class="clothes clearfix">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/bratape/adv-1.jpg" alt="freebra">
                <p>Venčanicu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/bratape/adv-2.jpg" alt="freebra">
                <p>Odeću bez bretela</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/bratape/adv-3.jpg" alt="freebra">
                <p>Dubok dekolte</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/bratape/adv-4.jpg" alt="freebra">
                <p>Široke tunike</p>
            </li>
        </ul>
        <div class="text">KAO I ZA BILO KOJI DRUGI KOMAD ODEĆE</div>
    </section>
    <section class="block-4">
        <h2 class="title">PREDNOSTI BRA TAPE-A</h2>
        <ul class="advant clearfix">
            <li>Zaboravite na masivne i teške grudnjake</li>
            <li>Nosite svoje omiljene haljine i majice bez bretela</li>
            <li>Oslobodite se vidljivih bretela i grudnjaka</li>
            <li>Ne brinite o izboru prave veličine</li>
        </ul>
        <a class="button-m" href="#zakaz">Poručite sada</a>
    </section>
    <section class="block-9">
        <h2 class="title">KAKO SE KORISTI</h2>
        <ul class="use">
            <li><b>1 -</b> Odlepite dovoljnu dužinu trake</li>
            <li><b>2 -</b> Stavite uložak u obliku cvetića na bradavicu</li>
            <li><b>3 -</b> Zalepite traku tako da napravite željeni oblik grudi</li>
        </ul>
    </section>
    <section class="block-10">
        <h2 class="title">DA LI JE BRA TAPE UDOBAN?</h2>
        <div class="safe">Bra Tape je savršeno udoban, čvrsto podupire grudi a opet ćete se osećate slobodno i relaksirano.
            Grudi će biti podignute onoliko koliko vi želite. Vaš dekolte će biti predobar i savršen!</div>
        <a class="button-m" href="#zakaz">Poručite sada</a>
    </section>
    <section class="block-6">
        <h2 class="title">UTISCI ZADOVOLJNIH KUPACA</h2>
        <div class="rev-slider clearfix">
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/bratape/rev-1.jpg" alt="отзывы fly bra">
                <h4>Gabriela Jovanov, 28 godina</h4>
                <p>Volim da izgledam impresivno u svakoj prilici, zato imam puno haljina bez bretela. Sviđaju mi se ove trake jer prave savršen dekolte i čine grudi bujnijim. Sve kolege na poslu me gledaju, svakoj ženi imponuje tako nešto :)</p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/bratape/rev-2.jpg" alt="отзывы fly bra">
                <h4>Pavelina Mirković, 20 godina</h4>
                <p>Skoro sam bila deveruša na svadbi i nosila sam haljinu sa otvorenim leđima. Nisam želela da nosim grudnjak koji se vidi, pa sam pronašla ove trake kao idealno rešenje. Nosila sam ih celog dana i jako sam zadovoljna. Nastaviću da ih koristim kada god nosim otvorenu odeću i javljam rezultate. </p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/bratape/rev-3.jpg" alt="отзывы fly bra">
                <h4>Marija Mikuljević, 36 godina</h4>
                <p>Tražila sam dugo ovakav proizvod i konačno sam ga pronašla. Wow - moje grudi stoje čvrste kao stena. Počela sam da mamim poglede muškaraca iz okruženja koji me ranije nisu primećivali.
                    Sve preporuke za ovaj proizvod, vrh je!</p>
            </div>
        </div>
    </section>
    <section class="block-5">
        <h2 class="title">ISPORUKA I PLAĆANJE</h2>
        <ul class="deliv">
            <li>
                <h4>PORUČITE PROIZVOD</h4>
                <p>Ostavite podatke za dostavu na našem sajtu</p>
            </li>
            <li>
                <h4>POTVRDA PORUDŽBINE</h4>
                <p>Kontaktiraćemo vas u najkraćem mogućem roku da potvrdimo porudžbinu</p>
            </li>
            <li>
                <h4>DOSTAVA PROIZVODA</h4>
                <p>Dostavljemo brzom poštom na vašu adresu <br> Plaćate direktno kuriru prilikom dostave</p>
            </li>
        </ul>
    </section>
    <section class="block-8">
        <div class="title">NARUČITE BRA TAPE DANAS SA 40% POPUSTA</div>
        <div class="container-1"></div>
        <div class="container-2">
            <div class="cost clearfix">
                        <span class="old-cost">
                            Redovna cena:<br/>
                            <span class="price_land_s4">{{ $prices[2]['originalPrice'] }}</span>
                            <span class="price_land_curr">{{ $prices[2]['currency'] }}</span>
                        </span>
                <span class="new-cost">
                            Cena sa popustom:<br/>
                             <span class="price_land_s1">{{ $prices[2]['amount'] }}</span><span
                        class="price_land_curr">{{ $prices[2]['currency'] }}</span>
                        </span>
            </div>
            <div class="order" id="zakaz">
                <form class="m1-form" action="{{$orderRoute}}" method="post">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input type="hidden" name="quantity" value="2"/>
                    <div><input type="text" name="name" placeholder="Ime i prezime" required=""></div>
                    <div><input type="text" name="phone" id="phones" required="" placeholder="Telefon"></div>
                    <div>
                        <button class="button-m">Poručite sada</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}purplerelaxFiles/bratape/init.js"></script>
@include('components.pixel_footer')
</body>
</html>
