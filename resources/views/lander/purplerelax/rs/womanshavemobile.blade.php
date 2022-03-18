<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=480">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/womanshave/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{ asset('/') }}purplerelaxFiles/womanshave/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/womanshavemobile/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/womanshavemobile/fontawesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/womanshavemobile/main.css" type="text/css">
    <style>@font-face{font-family:"Glyphicons Halflings";src:url({{asset('/')}}fonts/glyphicons-halflings-regular.eot);src:url({{asset('/')}}fonts/glyphicons-halflings-regular.eot#iefix) format("embedded-opentype"),url({{asset('/')}}fonts/glyphicons-halflings-regular.woff2) format("woff2"),url({{asset('/')}}fonts/glyphicons-halflings-regular.woff) format("woff"),url({{asset('/')}}fonts/glyphicons-halflings-regular.ttf) format("truetype"),url({{asset('/')}}fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format("svg")}@font-face{font-family:'Proxima Nova';src:url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.woff') format('woff'),url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Proxima Nova';src:url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.ttf') format('truetype');font-weight:700;font-style:normal}</style>
</head>
<body>
<div class="main-wrap">
    @include('components.display_errors')
    <!-- Шапка-v1 -->
    <section class="title-block">
        <div class="sub-main-title lt0">
            GLATKA KOŽA BEZ IRITACIJA
        </div>
        <h1 class="main-title lt1">Women Shave</h1>
    </section>
    <section class="top-block-v1">
        <div class="top-image">
            <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/star.png" alt="star">
            <p>NEŽAN PREMA KOŽI, <br> NEMILOSRDAN PREMA DLAČICAMA</p>
        </div>
        <div class="sale-cont lt2">
            <strong>40% POPUSTA</strong>
        </div>
        <div class="cost-cont clearfix">
            <div class="cost old-cost lt3">
                Stara cena:
                <strong>
                    {{ $prices[1]['originalPrice'] }} RSD
                </strong>
            </div>
            <div class="cost new-cost lt4">
                Nova cena:
                <strong>
                    {{ $prices[1]['amount'] }} RSD
                </strong>
            </div>
        </div>
        <div class="describe-cont">
            <a class="button-m lt12 btn2" href="#form-wrapper1" style="text-decoration: none;">Poručite sa popustom</a>
        </div>
    </section>
    <section class="detail-block">
        <h3 class="lvl-title lt14 oco">WOMAN SHAVE JE SVESTRANI BRIJAČ ZA UKLANJANJE NEŽELJENIH DLAČICA SA SVIH PODRUČJA, PA ČAK I SA NAJDELIKANTIJIH MESTA.</h3>
        <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/1.png" alt="">
        <div class="text-cont">
            <p class="lt15">Potpuno se razlikuje od klasičnih brijača. Inovativna sečiva pod uglom efikasno uklanjaju čak i
                najmanje dlačice bez oštećenja kože i omogućava vam
                da učinite svoj pazuh i bikini zonu <b>savršeno glatkim bez neugodnosti.</b></p>
            <p class="lt16">Brijač je opremljen <b>led svetlom</b>, tako da nijedna dlaka neće ostati neprimećena.
                Elegantan i ergonomski dizajn, poseban dizajn oštrica i integrisano osvetljene - za savršeno glatku kožu!</p>
        </div>
        <h3 class="lvl-title lt14 oco">DELIKATNO UKLANJANJE DLAKA BEZ NEUGODNOSTI</h3>
        <p class="flex-discription">

        </p>
        <img alt="Women Shaver" src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/result1_image_new.png" title="Women Shaver">
        <p class="flex-discription">

        </p>
    </section>
    <!-- Состав-v2 -->
    <section class="compound-block-v2">
        <h2 class="lvl-title lt22 oco" style="font-size: 28px;">SAVRŠEN JE ZA BILO KOJI DEO TELA:</h2>
        <ul class="compound-cont clearfix">
            <li>
                <img alt="Women Shaver" src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/benefits__benefit3_image.png" title="Women Shaver">
                <strong class="lt23">LICE</strong>
            </li>
            <li>
                <img alt="Women Shaver" src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/benefits__benefit2_image.png" title="Women Shaver">
                <strong class="lt24">NOGE</strong>
            </li>
            <li>
                <img alt="Women Shaver" src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/benefits__benefit1_image.png" title="Women Shaver">
                <strong class="lt25">BIKINI ZONA</strong>
            </li>
            <li>
                <img alt="Women Shaver" src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/benefits__benefit4_image.png" title="Women Shaver">
                <strong class="lt26">RUKE</strong>
            </li>
        </ul>
    </section>
    <br>
    <a class="button-m lt12 btn2" href="#form-wrapper1" style="text-decoration: none;margin-bottom: 1em;">Poručite sa popustom</a>
    <section class="rev-block-v4 color_bg">
        <h2 class="lvl-title lt35">Utisci kupaca</h2>
        <div class="rev-cont clearfix">
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/reviews__review1_photo.png" alt="Women Shaver" title="Women Shaver">
                <h4>Mirjana Ristić, 25 godina</h4>
                <p>Ovaj brijač je odličan, koristim ga već 3 meseca i oštrice u i dalje izuzetno oštre. Ima snažnu bateriju koja dugo traje!</p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/reviews__review2_photo.png" alt="Women Shaver" title="Women Shaver">
                <h4>Lara Mišić, 27 godina</h4>
                <p>Super je ovaj brijač. Ja sam fotograf i često idem na putovanja. Toliko je praktičan i mali da stane u neseser i ne zauzima mi prostor.
                    Ranije sam koristila neke brijače koji su me dosta čupali i izazivali neprijatan osećaj. Woman Shave je odličan! </p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/reviews__review3_photo.png" alt="Women Shaver" title="Women Shaver">
                <h4>Daliborka Simenunović, 20 godina</h4>
                <p>Woman Shave je čudo! Uvek ga nosim sa sobom, na odmoru i na poslu. Nema iritacija nakon brijanja, koža ostane glatka.</p>
            </div>
        </div>
    </section>
    <br>
    <h2 class="lvl-title lt14">NEŽAN PREMA KOŽI, NEMILOSRDAN PREMA DLAČICAMA</h2>
    <div class="slider-block">
        <div class="slider-cont clearfix">
            <div>
                <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/about__image1.png" alt="Women Shaver" title="Women Shaver">
            </div>
            <div>
                <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/about__image2.png" alt="Women Shaver" title="Women Shaver">
            </div>
            <div>
                <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/about__image3.png" alt="Women Shaver" title="Women Shaver">
            </div>
            <div>
                <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/about__image4.png" alt="Women Shaver" title="Women Shaver">
            </div>
            <div>
                <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/about__image5.png" alt="Women Shaver" title="Women Shaver">
            </div>
        </div>
    </div>
    <!-- Доставка/оплата-v3 -->
    <section class="delivery-block-v3">
        <h2 class="lvl-title lt46">Dostava i plaćanje</h2>
        <ul class="delivery-cont">
            <li>
                <h3 class="lt47">ISPORUKA</h3>
                <p class="lt48">Dostava brzom poštom u roku od 1-2 radna dana</p>
            </li>
            <li>
                <h3 class="lt49">BEZ PLAĆANJA UNAPRED</h3>
                <p class="lt50">Plaćanje po prijemu pošiljke</p>
            </li>
            <li>
                <h3 class="lt51">GARANCIJA KVALITETA</h3>
                <p class="lt52">Svi proizvodi su prošli kontrolu kvaliteta i u potpunosti su sertifikovani!</p>
            </li>
            <li>
                <h3 class="lt53">ANONIMNA ISPORUKA</h3>
                <p class="lt54">Proizvod je upakovan na takav način da niko neće znati sadržaj pakovanja.</p>
            </li>
        </ul>
    </section>
    <!-- Заказ-v1 -->
    <section class="title-block">
        <div class="sub-main-title lt55">
            GLATKA KOŽA BEZ IRITACIJA
        </div>
        <h1 class="main-title lt56">Women Shave</h1>
    </section>
    <section class="top-block-v1 offer_bottom">
        <div class="top-image">
            <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/star.png" alt="star">
            <p>NEŽAN PREMA KOŽI, <br> NEMILOSRDAN PREMA DLAČICAMA</p>
        </div>
        <div class="sale-cont lt57">
            Offerta:
            <strong>50%</strong> Sconto
        </div>
        <div class="cost-cont clearfix" id="zakaz">
            <div class="cost old-cost lt58">
                Stara cena:
                <strong>
                    {{ $prices[1]['originalPrice'] }} RSD
                </strong>
            </div>
            <div class="cost new-cost lt59">
                Nova cena:
                <strong>
                    {{ $prices[1]['amount'] }} RSD
                </strong>
            </div>
        </div>
        <div class="describe-cont">
            <div id="form-wrapper1" class="form form-wrapper">
                <div class="form_block">
                    <div id="form-wrapper1" class="form form-wrapper">
                        <form class="lead_form" method="post" action="{{$orderRoute}}">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <center>
                                <h3 class="title">PODACI ZA DOSTAVU</h3>
                            </center>
                            <br>
                            <div class="form-group col-md-12">
                                <label>Ime i prezime</label>
                                <input type="text" name="name" class="form-control name" placeholder="Ime i prezime" required="required">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Telefon</label>
                                <input type="tel" name="phone" class="form-control phone" placeholder="Telefon" required="required">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Adresa</label>
                                <input type="text" name="shipping_address" class="form-control other-simple-data" placeholder="Ulica i broj" required="required">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Grad</label>
                                <input type="text" name="shipping_city" class="form-control other-simple-data" placeholder="Grad" required="required">
                            </div>
                            <center>
                                <button id="submit-button" class="btn btn-lg btn-success" style="margin-top: 20px;" type="submit">ZAVRŠI PORUDŽBINU</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/slick.min.js" type="text/javascript"></script>
<script src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/init.js" type="text/javascript"></script>
@include('components.pixel_footer')
</body>
</html>