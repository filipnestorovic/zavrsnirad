<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=480" />
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/drainhook/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/drainhook/styles.css" />
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section offer3">
        <h1 class="main_title">Drain Hook</h1>
        <div class="info_block">
            <p class="subtitle">ALAT ZA ČIŠĆENJE ZAČEPLJENJA</p>
            <div class="discount"><b>40% popusta</b></div>
            <img src="{{ asset('/') }}dailysharkFiles/drainhook/offer31__image.jpg" alt />
        </div>
        <div class="benefits_block clearfix">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/drainhook/p1.jpg" alt />
                <p>Prodire duboko u kanalizaciju</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/drainhook/p2.jpg" alt />
                <p>Ne oštećuje <br/> cevi</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/drainhook/p3.jpg" alt />
                <p>Ima jak <br/> stisak</p>
            </div>
        </div>

        <a href="#order_form" class="button">PORUČI ODMAH</a>
        <div class="products_count">Količina robe je ograničena</div>
    </header>

    <section class="description_section">
        <h2 class="title">
            <span>ZABORAVITE</span> <br/> NA ZAČEPLJENJA U ODVODIMA
        </h2>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/drainhook/cleaninghookgif.gif" alt />
        <p>
            Drain Hook je jednostavan način da očistite odvod u kupatilu. Nema ništa lakše i ne morate rastavljati sifone i odvode.
            Uređaj je savršen za sve vrste cevi, ekološki je prihvatljiv i bez hemikalija.
            Nema potrebe da zovete i plaćate vodoinstalatera, sada možete sami to da obavite.
            Drain Hook će savršeno očistiti odvod, eliminisati ostatke hrane, kosu, masnoću itd.
            Sa ovim uređajem ćete potpuno zaboraviti da se kanalizacioni odvodi mogu začepiti.
        </p>
        <p>
            Korišćenjem Drain Hook uređaja odvode u kupatilu i kuhinji ćete uvek držati pročepljenim i čistim i nećete imati komplikacije kakve imate sada.
            Ovo bi svako domaćinstvo trebalo da poseduje.
        </p>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/drainhook/photo3.jpg" alt />
    </section>

    <section class="benefits_section dark_theme">
        <h2 class="title"><span>PREDNOSTI</span> Drain Hook-a</h2>

        <div class="benefits_list2">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/drainhook/a1.jpg" alt />
                <p>Dug domet: Odstranjivač je dovoljno dugačak da dopire u svaki odvod.</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/drainhook/a2.jpg" alt />
                <p>Površina je glatka i polirana kako bi se sprečilo oštećenje cevi.</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/drainhook/a3.jpg" alt />
                <p>Ima čvrsto prijanjanje zahvaljujući fleksibilnom i savitljivom opružnom kablu.</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/drainhook/a4.jpg" alt />
                <p>Odvodna kuka napravljena je od nerđajućeg čelika i polipropilena za visoku čvrstoću.</p>
            </div>
        </div>
        <a href="#order_form" class="button">PORUČI ODMAH</a>
    </section>

    <section class="characteristics_section">
        <h2 class="title"><span>KARAKTERISTIKE</span></h2>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/drainhook/cleaninghook12.png" alt />
        <ul class="characteristics__list">
            <li><b>Materijal:</b> Nerđajući čelik</li>
            <li><b>Dužina:</b> 60 cm</li>
            <li><b>Prečnik:</b> 0.9 cm</li>
            <li><b>Težina:</b> 80 grama</li>
        </ul>
    </section>

    <section class="offer_section offer3 order">
        <h1 class="main_title">Drain Hook</h1>
        <div class="info_block">
            <p class="subtitle">ALAT ZA ČIŠĆENJE ZAČEPLJENJA</p>
            <div class="discount"><b>40% popusta</b></div>
            <img src="{{ asset('/') }}dailysharkFiles/drainhook/offer3__image.jpg" alt />
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">Redovna cena</div>
                <div class="value">{{ $prices[1]['originalPrice'] }}{{ $prices[1]['currency'] }}</div>
            </div>
            <div class="price_item new">
                <div class="text">Cena sada</div>
                <div class="value">{{ $prices[1]['amount'] }}{{ $prices[1]['currency'] }}</div>
            </div>
        </div>
        <div class="benefits_block clearfix">
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/drainhook/p1.jpg" alt />
                <p>Prodire duboko u kanalizaciju</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/drainhook/p2.jpg" alt />
                <p>Ne oštećuje <br/> cevi</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}dailysharkFiles/drainhook/p3.jpg" alt />
                <p>Ima jak <br/> stisak</p>
            </div>
        </div>
        <br />
        <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
            {{csrf_field()}}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input class="field" type="text" name="name" placeholder="Ime i prezime" required />
            <input class="field" type="tel" name="phone" placeholder="Telefon" required />
            <input class="field" type="text" name="shipping_address" placeholder="Adresa" required />
            <input class="field" type="text" name="shipping_city" placeholder="Grad" required />
            <button type="submit" class="button">PORUČI SADA</button>
        </form>
        <div class="products_count">Količina robe je ograničena</div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
@include('components.pixel_footer')
</body>
</html>
