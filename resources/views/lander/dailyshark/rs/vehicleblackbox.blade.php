<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/kamera1/settings.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/kamera3/main.css" type="text/css">
    <style>
        .block-1 {
            height: 490px;
            background: rgba(0, 0, 0, 0) url("{{ asset('/') }}dailysharkFiles/vehicleblackbox/bg-top.png") no-repeat scroll center 0px;
        }
        .block-1 .sale {
            top: 20px;
            left: -5px;
            font-size: 20px;
        }
        @media screen and (max-width: 639px) {
            .block-1 {
                height: auto;
                background: rgba(0, 0, 0, 0) url("{{ asset('/') }}dailysharkFiles/vehicleblackbox/bg-top-320.png") no-repeat scroll left 43% top 0px;
            }
            .block-1 .sale {
                top: 0px;
                left: 20px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<section class="top-nav">
    <div class="wrap clearfix">
        <ul class="left">
            <li><a href="#blk2"> Prednosti</a></li>
            <li><a href="#blk3"> Karakteristike</a></li>
        </ul>
        <ul class="right">
            <li><a href="#blk6"> Utisci</a></li>
            <li><a href="#blk7"> Dostava i plaćanje</a></li>
        </ul>
    </div>
</section>
<section class="block-1">
    <div class="wrap clearfix">
        <h1 class="title"><span> DVR</span>  VEHICLE BLACKBOX</h1>
        <div class="cont-left">
            <div class="sale"><strong>Popust 40%</strong></div>
            <div class="cost clearfix">
                  <span class="old-cost">
                  {{ $prices[1]['originalPrice'] }} RSD
                  </span>
                <span class="new-cost">
                  {{ $prices[1]['amount'] }} RSD
                  </span>
            </div>
        </div>
        <div class="cont-right">
            <div class="list">
                <ul>
                    <li>BEZ NEPOTREBNIH KABLOVA</li>
                    <li>VAKUMSKI SE LEPI NA VETROBRANSKO STAKLO</li>
                    <li>OBEZBEĐUJE AUTOMOBIL OD PROVALNIKA</li>
                </ul>
            </div>
            <a href="#order-form" class="button-m">PORUČITE SADA</a>
        </div>
    </div>
</section>
<section class="block-2" id="blk2">
    <div class="wrap">
        <h2 class="title"> PREDNOSTI<span> VEHICLE BLACKBOX </span></h2>
        <ul class="adv clearfix">
            <li>
                <h3> DVR</h3>
                <p>Video visokog kvaliteta, full HD snimanje</p>
            </li>
            <li>
                <h3> SENZOR POKRETA</h3>
                <p>Snima se čak i kada je automobil parkiran. Kamera se aktivira kada se detektuje pokret u vidnom polju
                    kamere
                </p>
            </li>
            <li>
                <h3> G SENZOR</h3>
                <p>Jasan i čist snimak pri naglom kočenju ili sudaru</p>
            </li>
        </ul>
    </div>
</section>
<section class="block-3" id="blk3">
    <div class="wrap clearfix">
        <h2 class="title"> Karakteristike<span>VEHICLE BLACKBOX</span></h2>
        <img class="pic-1" src="{{ asset('/') }}dailysharkFiles/vehicleblackbox/b3-1.png" alt="HD Cam Mirror">
        <ul class="list spec-1">
            <li>Senzor pokreta i udara</li>
            <li>Ugao snimanja 170°</li>
            <li>Noćni režim</li>
            <li>Veličina ekrana 2.7 inča</li>
            <li>Full HD 1080p snimanje</li>
            <li>Digitalni zum</li>
            <li>Slot za memorijsku karticu do 32 GB</li>
        </ul>
        <h3 class="title"><span> U PAKETU SE DOBIJA</span></h3>
        <img class="pic-2" src="{{ asset('/') }}dailysharkFiles/vehicleblackbox/b3-2.png" alt="HD Cam Mirror"
             style="margin-top: -30px;">
        <ul class="list spec-2">
            <li>DVR  VEHICLE BLACKBOX</li>
            <li>Postolje</li>
            <li>Kablovi za punjenje</li>
            <li>Uputstvo za upotrebu</li>
        </ul>
    </div>
</section>
<section class="block-5">
    <div class="wrap">
        <div class="center"><img src="{{ asset('/') }}dailysharkFiles/vehicleblackbox/b5-0.png" alt="HD Cam Mirror">
        </div>
        <div class="img-cont clearfix">
            <img src="{{ asset('/') }}dailysharkFiles/vehicleblackbox/b5-1.png" alt="HD Cam Mirror">
            <img src="{{ asset('/') }}dailysharkFiles/vehicleblackbox/b5-2.png" alt="HD Cam Mirror">
        </div>
        <a href="#order-form" class="button-m">PORUČITE SADA</a>
    </div>
</section>
<section class="block-6" id="blk6">
    <div class="wrap">
        <h2 class="title"> UTISCI<span> NAŠIH KUPACA</span></h2>
        <div class="clearfix">
            <div>
                <div>
                    <div class="rev-item" style="width: 291.2px;">
                        <div><img src="{{ asset('/') }}dailysharkFiles/vehicleblackbox/rev-1.png" alt="HD Cam Mirror">
                        </div>
                        <h3>IVAN AVRAMOVIĆ</h3>
                        <p>Kamera je odlična, super snima, a kvalitet mi se jako dopada.
                            Imao sam problem sa komšijom koji mi je grebao automobil, ali sam ga nakon 7 dana snimio i
                            prijavio.
                            Preporučujem svima!
                        </p>
                    </div>
                    <div class="rev-item" style="width: 291.2px;">
                        <div><img src="{{ asset('/') }}dailysharkFiles/vehicleblackbox/rev-2.png" alt="HD Cam Mirror">
                        </div>
                        <h3>MARKO SIMANIĆ</h3>
                        <p>Kompaktna kamera, lepo izgleda u automobilu. Kvalitet snimka je ok, sasvim dovoljan da se sve
                            jasno vidi.
                            Video zapisi ne zauzimaju mnogo memorije. Za malo novca kupio sam vrhunski proizvod.
                        </p>
                    </div>
                    <div class="rev-item" style="width: 291.2px;">
                        <div><img src="{{ asset('/') }}dailysharkFiles/vehicleblackbox/rev-3.png" alt="HD Cam Mirror">
                        </div>
                        <h3>DOBRIVOJE PETROVIĆ</h3>
                        <p>Sve je odlično, i cena i kvalitet. Snimam sve u toku vožnje, a i ostavljam je uključenu kada
                            parkiram automobil.
                            Ima i noćni režim, tako da sam snimio ko mi noću skida brisače.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block-7" id="blk7">
    <div class="wrap">
        <h2 class="title"> DOSTAVA I <span> PLAĆANJE</span></h2>
        <ul class="deliv clearfix">
            <li>
                <p><b> Dostava kurirskom službom </b>u roku od 1-2 radna dana.</p>
            </li>
            <li>
                <p><b> Bez plaćanja unapred!</b> Platite kuriru po preuzimanju paketa.</p>
            </li>
        </ul>
    </div>
</section>
<section class="block-1" id="zakaz">
    <div class="wrap clearfix">
        <h1 class="title"><span> DVR </span>  VEHICLE BLACKBOX</h1>
        <div class="cont-left">
            <div class="sale"><strong> Popust 40%</strong></div>
            <div class="cost clearfix">
                  <span class="old-cost">
                  {{ $prices[1]['originalPrice'] }} RSD
                  </span>
                <span class="new-cost">
                  {{ $prices[1]['amount'] }} RSD
                  </span>
            </div>
        </div>
        <div class="cont-right" id="order-form">
            <form class="m1-form" action="{{$orderRoute}}" method="post">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div class="list">
                    <div class="form">
                        <div class="input-b">
                            <input name="name" id="name1" placeholder="Ime i prezime" required type="text">
                        </div>
                        <div class="input-b">
                            <input name="phone" id="phone1" placeholder="Broj telefona" required type="tel">
                        </div>
                        <div class="input-b">
                            <input name="shipping_address" id="address" placeholder="Adresa" required type="text">
                        </div>
                        <div class="input-b">
                            <input name="shipping_city" id="city" placeholder="Grad" required type="text">
                        </div>
                    </div>
                </div>
                <button class="button-m" type="submit">PORUČI ODMAH</button>
            </form>
        </div>
    </div>
</section>
@include('components.pixel_footer')
</body>
</html>
