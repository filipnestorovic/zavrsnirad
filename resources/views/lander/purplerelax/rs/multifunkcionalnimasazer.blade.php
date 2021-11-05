<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/settings.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/style.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>
@include('components.display_errors')
<section class="block2">
    <div class="wrap header__wrap">
        <div class="">
            <h1><span>MASAŽER</span> ZA LEĐA I VRAT </h1>
            <div class="sale">
                popust
                <p>-40%</p>
            </div>
            <ul class="plus">
                <li>
                    <p>Pomaže u oslobađanju od stresa</p>
                </li>
                <li>
                    <p>Ublažava bolove u mišićima</p>
                </li>
                <li>
                    <p>Pomaže da se potpuno opustite</p>
                </li>
            </ul>
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Stara cena:</span>
                    <p>
                        {{ $prices[1]['originalPrice'] }}
                        RSD
                    </p>
                </div>
                <div class="new-cost">
                    <span>Nova cena:</span>
                    <p>
                        {{ $prices[1]['amount'] }}
                        RSD
                    </p>
                </div>
            </div>
            <a href="#buy" class="button-m">Poručite sada</a>
        </div>
        <div class="video__wrap" style="width: 300px;">
            <video muted="muted" width="300px" height="auto" loop="loop" preload="auto" playsinline="" webkit-playsinline="" autoplay="autoplay" controls="">
                <source src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/1_1.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</section>
<section class="block4">
    <div class="wrap">
        <ul class="result">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/res1.png" alt="">
                <p><b>Masaža vrata</b></p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/res2.png" alt="">
                <p><b>Masaža leđa</b></p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/res3.png" alt="">
                <p><b>Masaža struka</b></p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/res4.png" alt="">
                <p><b>Masaža stopala</b></p>
            </li>
        </ul>
    </div>
</section>
<section class="block5">
    <div class="wrap">
        <h2 class="title t2">MASAŽER ZA LEĐA I VRAT</h2>
        <ul class="sostav">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/sos1.jpg" alt="">
                <h4>Masaža glave</h4>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/sos2.jpg" alt="">
                <h4>Prozračna mrežasta tkanina</h4>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/sos3.jpg" alt="">
                <h4>Visokokvalitetna koža</h4>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/sos4.jpg" alt="">
                <h4>3C sertifikovano napajanje</h4>
            </li>
        </ul>
    </div>
</section>
<section class="block7" style="background:white;">
    <div class="wrap">
        <h2>MASAŽER ZA LEĐA I VRAT</h2>
        <div class="goods">
            <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/sl1.jpg" alt="">
            <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/sl2.jpg" alt="">
            <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/sl3.jpg" alt="">
        </div>
    </div>
</section>
<section class="block9">
    <div class="wrap">
        <h2 class="title">UTISCI KUPACA</h2>
        <div class="reviews">
            <div>
                <div class="rev">
                    <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/rev1.jpg" alt="">
                    <h3>Aleksandra Škoro</h3>
                    <p class="center-justified">Masažer je veoma kul. Nedavno sam ga kupila preko vašeg sajta i sada ga koristim sa velikim zadovoljstvom.
                        Vrlo sam zadovoljna ovom kupovinom.</p>
                </div>
            </div>
            <div>
                <div class="rev">
                    <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/rev2.jpg" alt="">
                    <h3>Elena Maksimović</h3>
                    <p class="center-justified">Kupila sam ovaj masažer pre nedelju dana. Koristila sam ga svega nekoliko puta i efekat već primetim.
                        Bol u vratu je nestao! Veoma dobar i kvalitetan proizvod. Toplo preporučujem!</p>
                </div>
            </div>
            <div>
                <div class="rev">
                    <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/rev3.jpg" alt="">
                    <h3>Ana Kostović</h3>
                    <p class="center-justified">Imam masažer oko mesec dana. Nadala sam se da će me ovaj uređaj osloboditi bola u leđima i to se desilo.
                        Bolovi su nestali, kao da ih uopšte nije bilo. Savetujem svakome ko ima problema da ga kupi.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block10">
    <div class="wrap">
        <h2 class="title">DOSTAVA I PLAĆANJE</h2>
        <ul class="ship">
            <li>
                <div></div>
                <p>Unesite svoje podatke na našem sajtu kako biste poručili proizvod.</p>
            </li>
            <li>
                <div></div>
                <p>Kontaktiraćemo vas da potvrdimo vašu porudžbinu.</p>
            </li>
            <li>
                <div></div>
                <p>Pošiljku šaljemo u roku od 1-2 radna dana. Plaćate kuriru po preuzimanju paketa.</p>
            </li>
        </ul>
    </div>
</section>
<section class="block11">
    <div class="wrap header__wrap">
        <div class="">
            <h2><span>MASAŽER </span> <span>ZA LEĐA I VRAT</span></h2>
            <div class="sale">
                popust
                <p>-40%</p>
            </div>
            <div class="formbox">
                <div class="price clearfix">
                    <div class="old-cost">
                        <span>Stara cena:</span>
                        <p>
                            {{ $prices[1]['originalPrice'] }}
                            RSD
                        </p>
                    </div>
                    <div class="new-cost">
                        <span>Nova cena:</span>
                        <p>
                            {{ $prices[1]['amount'] }}
                            RSD
                        </p>
                    </div>
                </div>
                {{--<div class="countbox"></div>--}}
                <br>
                <form id="buy" class="forma" action="{{$orderRoute}}" method="post">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input class="field" name="name" type="text" placeholder="Ime i prezime" required>
                    <input class="input-phone" name="phone" type="tel" placeholder="Telefon" required>
                    <input class="field" name="shipping_address" type="text" placeholder="Adresa" required>
                    <input class="field" name="shipping_city" type="text" placeholder="Grad" required>
                    <button class="button-m" type="submit">Poručite sada</button>
                </form>
            </div>
        </div>
        <div class="footer__video" style="width: 300px;">
            <video muted="muted" width="300px" height="auto" loop="loop" preload="auto" playsinline="" webkit-playsinline="" autoplay="autoplay" controls="">
                <source src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/1_1.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/main.js"></script>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
@include('components.pixel_footer')
</body>
</html>