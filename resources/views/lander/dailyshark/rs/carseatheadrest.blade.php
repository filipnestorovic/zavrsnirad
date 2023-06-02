<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/carstoragebox/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/carstoragebox/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/carstoragebox/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/carstoragebox/style.css">
</head>
<body>
@include('.components.display_errors')
<section class="block1">
    <div class="wrap">
        <div class="magnitola">
            <img src="{{ asset('/') }}dailysharkFiles/carseatheadrest/1foto.png" alt="">
        </div>
        <h1><span>CAR SEAT HEADREST</span>
        </h1>
        <h2>UŽIVAJTE VOZEĆI SE U AUTOMOBILU</h2>
        <div class="sale">
            Akcija!
            <p>-40%</p>
            popust
        </div>
        <div class="auto-small"></div>
        <ul class="recom" style="box-shadow: 0 0 50px rgb(255 255 255 / 80%);">
            <li>
                <p>Udobno spavajte dok putujete</p>
            </li>
            <li>
                <p>Eliminišite napetost u vratu</p>
            </li>
            <li>
                <p>Oslonac za glavu u krivinama</p>
            </li>
            <li>
                <p>Lako se postavlja i univerzalan za sve automobile</p>
            </li>
        </ul>
        <div class="clear"></div>
        <div class="price clearfix">
            <span class="old-cost">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</span>
            <span class="new-cost">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</span>
        </div>
        <div class="clear"></div>
        <a href="#buy" class="button-m">Poručite sa popustom</a>
    </div>
</section>
<section class="block2">
    <div class="wrap">
        <h2 class="title">
            CAR SEAT HEADREST<br> <span>ZA UDOBNA DUGA PUTOVANJA</span>
        </h2>
        <div class="row">
            <div class="col-md-8 mt-2 mb-2">
                <div class="prtext">
                    Da li se ikada desi da odspavate odlično u automobilu, ali kada stignete na odredište, <b>probudite se sa bolovima ili ukočenim vratom?</b>
                    <br><br>
                    Naš jastuk za naslon za glavu u automobilu pruža potrebnu podršku kako bi vaša <b>glava i vrat bili pravilno podržani</b> -
                    istovremeno sprečavajući vas da udarite glavom o vrata automobila pri okretima i zakrivljenjima na putu.
                    <br><br>
                    Omogućuje potpunu prilagodljivost za zadovoljenje potreba visine i udobnosti korisnika svih veličina, kako dece tako i odraslih!
                    <br><br>
                    * Ovaj proizvod je testiran i preporučen za upotrebu od strane automobilske industrije.
                </div>
            </div>
            <div class="col-md-4 mt-2 mb-2">
                <img src="{{ asset('/') }}dailysharkFiles/carseatheadrest/product.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- bizlife_inc -->
<section class="block3">
    <div class="wrap">
        <h2 class="title"><span>CAR SEAT HEADREST</span> Ključne karakteristike</h2>
        <div class="row mt-3">
            <div class="col-md-3 col-sm-6 mb-3 mt-3">
                <div class="row">
                    <div class="col-12 text-center"><img src="{{ asset('/') }}dailysharkFiles/carseatheadrest/foto7.png" alt=""
                                                         class="img-fluid"></div>
                    <div class="col-12 text-center mt-4">
                        <p class="font-weight-bold">Uklapa se u svaki enterijer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3 mt-3">
                <div class="row">
                    <div class="col-12 text-center"><img src="{{ asset('/') }}dailysharkFiles/carseatheadrest/foto8.png" alt=""
                                                         class="img-fluid"></div>
                    <div class="col-12 text-center mt-4">
                        <p class="font-weight-bold">Čvrst i pouzdan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3 mt-3">
                <div class="row">
                    <div class="col-12 text-center"><img src="{{ asset('/') }}dailysharkFiles/carseatheadrest/foto9.png" alt=""
                                                         class="img-fluid"></div>
                    <div class="col-12 text-center mt-4">
                        <p class="font-weight-bold">Univerzalan za sva sedišta i sve uzraste</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3 mt-3">
                <div class="row">
                    <div class="col-12 text-center"><img src="{{ asset('/') }}dailysharkFiles/carseatheadrest/foto10.png" alt=""
                                                         class="img-fluid"></div>
                    <div class="col-12 text-center mt-4">
                        <p class="font-weight-bold">Ima držač za telefon sa zadnje strane</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- michael-k90 -->
<!-- owmen17 -->
<section class="block5">
    <div class="wrap">
        <h2 class="title">UTISCI KUPACA</h2>
        <div class="reviews1" role="toolbar">
            <div class="rewiews slick-slider">
                <div class="revcont">
                    <div class="rev clearfix">
                        <span><b>Aleksandar Jović</b></span>
                        <p>Odlična stvar, konačno uživam kao suvozač u automobilu. Nije mi žao ni jednog dinara koji sam dao. Konačno mogu da putujem na more a da me posle toga 2 dana vrat ne boli.</p>
                    </div>
                </div>
                <div class="revcont">
                    <div class="rev clearfix r2">
                        <span><b>Vladimir Mičić</b></span>
                        <p>Super proizvod zbog kog su moja deca zavolela putovanja. Supruga ga koristi na prednjem sedištu, pa deca mogu da okače telefon na njega.</p>
                    </div>
                </div>
                <div class="revcont">
                    <div class="rev clearfix r3">
                        <span><b>Marko Savić</b></span>
                        <p>Top stvar! Preporučujem svima koji imaju velike porodice i idu na duga putovanja! TOP !</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- bizlife_inc -->
<section class="block7">
    <div class="wrap">
        <div class="prim slick-slider">
            <img src="{{ asset('/') }}dailysharkFiles/carseatheadrest/3foto.png" alt="" class="slick-slide">
            <img src="{{ asset('/') }}dailysharkFiles/carseatheadrest/4foto.jpg" alt="" class="slick-slide">
            <img src="{{ asset('/') }}dailysharkFiles/carseatheadrest/5foto.jpg" alt="" class="slick-slide">
            <img src="{{ asset('/') }}dailysharkFiles/carseatheadrest/6foto.jpg" alt="" class="slick-slide">
            <img src="{{ asset('/') }}dailysharkFiles/carseatheadrest/7foto.jpg" alt="" class="slick-slide">
        </div>
        <a href="#buy" class="button-m">Poručite sa popustom</a>
    </div>
</section>
<!-- owmen17 -->
<section class="block8">
    <div class="wrap">
        <h2 class="title">KAKO PORUČITI?</h2>
        <ul class="ship">
            <li>
                <p>Popunite formular za porudžbinu <br> na našem sajtu</p>
            </li>
            <li>
                <p>Kontaktiraćemo vas da <br> potvrdimo porudžbinu</p>
            </li>
            <li>
                <p>Pošiljku plaćate kuriru brze pošte <br> po pouzeću</p>
            </li>
        </ul>
    </div>
</section>
<section class="block9">
    <div class="wrap">
        <h1><span>CAR SEAT HEADREST</span></h1>
        <h2>PORUČITE ODMAH SA 40% POPUSTA</h2>
        <h3>UŽIVAJTE VOZEĆI SE U AUTOMOBILU</h3>
        <div class="auto-small"></div>
        <div class="sale">
            Akcija!
            <p>-40%</p>
            popust
        </div>
        <div class="row recom">
            <div class="col-md-6">Oslobađa bola u vratu</div>
            <div class="col-md-6">Povećava sigurnost u vožnji</div>
            <div class="col-md-6">Omogućuje ugodno spavanje suvozača</div>
            <div class="col-md-6">Ima držač za telefon sa zadnje strane</div>
            <div class="magnitola-block9">
                <img src="{{ asset('/') }}dailysharkFiles/carseatheadrest/1foto.png" alt="">
            </div>
        </div>
        <div class="magnitola-block9-mobile">
            <img src="{{ asset('/') }}dailysharkFiles/carseatheadrest/1foto.png" alt="">
        </div>
        <div class="formbox">
            <div class="price clearfix">
                <span class="old-cost">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</span>
                <span class="new-cost">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</span>
            </div>
            <form id="buy" class="m1-form" action="{{$orderRoute}}" method="post">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required="">
                <input class="field" name="phone" type="tel" placeholder="Telefon" required="">
                <input class="field" name="shipping_address" type="text" placeholder="Adresa" required="">
                <input class="field" name="shipping_city" type="text" placeholder="Grad" required="">
                <button class="button-m" type="submit">Poručite sa popustom</button>
            </form>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}dailysharkFiles/carstoragebox/slick.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/carstoragebox/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
