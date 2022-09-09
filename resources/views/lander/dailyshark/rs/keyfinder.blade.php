<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="{{ asset('/') }}dailysharkFiles/keyfinder/tovar2.png" type="image/png">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/keyfinder/tovar2.png" type="image/png">
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/keyfinder/style.css"/>
    <style>@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Light.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Light.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Light.ttf') format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Italic.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Italic.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Italic.ttf') format('truetype');font-weight:400;font-style:italic}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.ttf') format('truetype');font-weight:600;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-SemiboldItalic.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-SemiboldItalic.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-SemiboldItalic.ttf') format('truetype');font-weight:600;font-style:italic}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Bold.ttf') format('truetype');font-weight:700;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.ttf') format('truetype');font-weight:800;font-style:normal}</style>
</head>
<body>
@include('components.display_errors')
<section class="block1">
    <div class="wrap">
        <div class="title-box">
            <h1>KEY FINDER</h1>
            <h2>PRONAĐITE ZAGUBLJENE STVARI JEDNIM ZVIŽDUKOM</h2>
        </div>
        <div class="tovar"></div>
        <div class="sale">
            POPUST
            <p class="discount">40%</p>
        </div>
        <div class="hit">
            NAJPRODAVANIJE U
            <p>2022. GODINI</p>
        </div>
        <ul class="topul">
            <li>
                <p>Pouzdano čuva vaše stvari</p>
            </li>
            <li>
                <p>Veoma lagan i neprimetan</p>
            </li>
            <li>
                <p>Aktivira se na zvižduk</p>
            </li>
        </ul>
        <div class="formbox">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>REGULARNA CENA:</span>
                    <p><span class="price_land_s2">{{ $prices[1]['originalPrice'] }}</span><small
                            class="price_land_curr">{{ $prices[1]['currency'] }}</small></p>
                </div>
                <div class="new-cost">
                    <span>CENA NA AKCIJI:</span>
                    <p><span class="price_land_s1">{{ $prices[1]['amount'] }}</span><small
                            class="price_land_curr">{{ $prices[1]['currency'] }}</small></p>
                </div>
            </div>
            <form action="{{$orderRoute}}" method="post" class="orderformcdn m1-form">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required>
                <input class="field" name="phone" type="tel" placeholder="Telefon" required>
                <button class="button-m">PORUČITE SADA</button>
            </form>
            <div class="stock">
                <p>Na stanju ostalo još: </p>
                <div><span></span><b>13 komada</b></div>
            </div>
        </div>
    </div>
</section>
<!-- michael-k90 -->

<section class="block3">
    <div class="wrap">
        <h2 class="title">ČEMU SLUŽI <span class="col">KEY FINDER?</span></h2>
        <img src="{{ asset('/') }}dailysharkFiles/keyfinder/photo.jpg" alt="">
        <div class="job">
            <p>Da li Vam se nekada desilo da izgubite ključeve ili druge važne stvari? Ukoliko je odgovor potvrdan, ovaj proizvod je sigurno za vas!
                <b>Privezak koji se oglašava kada se začuje zvižduk.</b> Predstavlja jako praktičan način da sačuvate stvari koje se mogu lako zagubiti - pre svega ključeve, torbe, novčanik ili čak kućne ljubimce. </p>
            <ul>
                <li><b>Dimenzije: </b> 5.7 x 3 x 1.5 cm</li>
                <li><b>Boje: </b> bela, crna, crvena i plava</li>
                <li><b>Svetlo: </b> LED crvene boje</li>
                <li><b>Baterija: </b> 1 x LR44 (dolaze u proizvodu)</li>
            </ul>
        </div>
    </div>
</section>
<!-- bizlife_inc -->
<section class="block4">
    <div class="wrap">
        <h2 class="title">NAJNOVIJA TEHNOLOGIJA 2022 <span class="col2">PREDNOSTI KEY FINDERA</span></h2>
        <ul class="preim">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/keyfinder/p1.jpg" alt="">
                <p>Pogodan kao privezak za ključeve</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/keyfinder/p2.jpg" alt="">
                <p>Ima lampu kojom možete osvetliti ključaonicu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/keyfinder/p3.jpg" alt="">
                <p>Oglašava se i zvučno i svetlosno</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/keyfinder/p4.jpg" alt="">
                <p>Jednostavno zviznete i on će se oglasiti</p>
            </li>
        </ul>
        <a href="#order_form" class="button-m">PORUČITE SADA</a>
    </div>
</section>
<section class="block5">
    <div class="wrap">
        <h2 class="title">ZAŠTO KUPITI <span class="col">KEY FINDER?</span></h2>
        <div class="select clearfix">
            <div class="select-left">
                <ul class="poch">
                    <li>
                        <p>Ne dozvolite više sebi da ikada gubite vreme na traženje zagubljenih ključeva</p>
                    </li>
                    <li>
                        <p>Zbog svojih mogućnosti možete ga pronaći kako u velikoj torbi, tako i u mraku</p>
                    </li>
                    <li>
                        <p>Budite originalni u svom društvu i okruženju</p>
                    </li>
                    <li>
                        <p>Proizvod je vrhunskog kvaliteta i elegantnog dizajna</p>
                    </li>
                </ul>
            </div>
            <div class="select-right">
                <div class="gallery">
                    <div><img src="{{ asset('/') }}dailysharkFiles/keyfinder/g1.jpg" alt=""></div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- owmen17 -->

<section class="block7">
    <div class="wrap">
        <h2 class="title"><span>CONSEGNA E PAGAMENTO</span></h2>
        <ul class="ship">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/keyfinder/s1.png" alt="">
                <h3>KAKO PORUČITI</h3>
                <p>Ostavite svoje podatke na našem sajtu. Kontaktiraćemo vas da potvrdimo porudžbinu i proizvod šaljemo brzom poštom u roku od 1-2 radna dana.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/keyfinder/s2.png" alt="">
                <h3>BEZ PLAĆANJA UNAPRED</h3>
                <p>Nema potrebe da plaćate unapred. Paket plaćate kuriru po preuzimanju.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/keyfinder/s3.png" alt="">
                <h3>GARANCIJA KVALITETA</h3>
                <p>Ukoliko ne budete zadovoljni proizvodom, pošaljite nam ga nazad a mi ćemo vam vratiti novac.</p>
            </li>
        </ul>
    </div>
</section>
<!-- after_qbici -->
<section class="block1 end">
    <div class="wrap">
        <div class="title-box">
            <h1>KEY FINDER</h1>
            <h2>PRONAĐITE ZAGUBLJENE STVARI JEDNIM ZVIŽDUKOM</h2>
        </div>
        <div class="tovar"></div>
        <div class="sale">
            POPUST
            <p class="discount">40%</p>
        </div>
        <div class="hit">
            NAJPRODAVANIJE U
            <p>2022. GODINI</p>
        </div>
        <ul class="topul">
            <li>
                <p>Pouzdano "čuva" vaše stvari</p>
            </li>
            <li>
                <p>Veoma lagan i neprimetan</p>
            </li>
            <li>
                <p>Aktivira se na zvižduk</p>
            </li>
        </ul>
        <div class="formbox">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>REGULARNA CENA:</span>
                    <p><span class="price_land_s2">{{ $prices[1]['originalPrice'] }}</span><small
                            class="price_land_curr">{{ $prices[1]['currency'] }}</small></p>
                </div>
                <div class="new-cost">
                    <span>CENA NA AKCIJI:</span>
                    <p><span class="price_land_s1">{{ $prices[1]['amount'] }}</span><small
                            class="price_land_curr">{{ $prices[1]['currency'] }}</small></p>
                </div>
            </div>
            <form action="{{$orderRoute}}" method="post" class="orderformcdn m1-form" id="order_form">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required>
                <input class="field" name="phone" type="tel" placeholder="Telefon" required>
                <button class="button-m">PORUČITE SADA</button>
            </form>
            <div class="stock">
                <p>Na stanju ostalo još: </p>
                <div><span></span><b>13 komada</b></div>
            </div>
        </div>

    </div>
</section>
<script type="text/javascript" src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}dailysharkFiles/keyfinder/script.js"></script>
@include('components.pixel_footer')
</body>
</html>
