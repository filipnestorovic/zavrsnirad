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
            <img src="{{ asset('/') }}dailysharkFiles/rearviewmirrorholder/1foto.png" alt="">
        </div>
        <h1><span>Rearview Mirror Holder</span>
        </h1>
        <h2>SAVRŠEN DRŽAČ ZA TELEFON I GPS UREĐAJE</h2>
        <div class="sale">
            Akcija!
            <p>-40%</p>
            popust
        </div>
        <div class="auto-small"></div>
        <ul class="recom" style="box-shadow: 0 0 50px rgb(255 255 255 / 80%);">
            <li>
                <p>Bezbednost na prvom mestu</p>
            </li>
            <li>
                <p>Lako postavljanje</p>
            </li>
            <li>
                <p>Univerzalna kompatibilnost</p>
            </li>
            <li>
                <p>Čvrsta konstrukcija uređaja</p>
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
            REARVIEW MIRROR HOLDER<br> <span>TELEFON I GPS U VIDNOM POLJU VOŽNJE, BEZ SAGINJANJA GLAVE</span>
        </h2>
        <div class="row">
            <div class="col-md-8 mt-2 mb-2">
                <div class="prtext">
                    <b>Otkrijte savršenog partnera za vašu vožnju</b> - ovaj elegantni držač će držati vaš pametni telefon ili GPS uređaj na dohvat ruke,
                    omogućavajući vam da ostanete fokusirani na put dok koristite navigaciju ili obavljate pozive.
                    <br><br>
                    Rearview Mirror Holder <b>nudi jednostavno podešavanje širine kako bi odgovarao različitim veličinama pametnih telefona i GPS uređaja</b>, što olakšava postavljanje i uklanjanje vašeg uređaja.
                    <br><br>
                    Zahvaljujući kvalitetnim materijalima i mehanizmu za stezanje, <b>ovaj proizvod osigurava čvrsto držanje vašeg uređaja čak i tokom vožnje po neravnim terenima ili pri većim brzinama.</b>
                </div>
            </div>
            <div class="col-md-4 mt-2 mb-2">
                <img src="{{ asset('/') }}dailysharkFiles/rearviewmirrorholder/product.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- bizlife_inc -->
<section class="block3">
    <div class="wrap">
        <h2 class="title"><span>REARVIEW MIRROR HOLDER</span> Ključne karakteristike</h2>
        <div class="row mt-3">
            <div class="col-md-3 col-sm-6 mb-3 mt-3">
                <div class="row">
                    <div class="col-12 text-center"><img src="{{ asset('/') }}dailysharkFiles/rearviewmirrorholder/foto7.png" alt=""
                                                         class="img-fluid"></div>
                    <div class="col-12 text-center mt-4">
                        <p class="font-weight-bold">Uklapa se u svaki enterijer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3 mt-3">
                <div class="row">
                    <div class="col-12 text-center"><img src="{{ asset('/') }}dailysharkFiles/rearviewmirrorholder/foto8.png" alt=""
                                                         class="img-fluid"></div>
                    <div class="col-12 text-center mt-4">
                        <p class="font-weight-bold">Čvrst i pouzdan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3 mt-3">
                <div class="row">
                    <div class="col-12 text-center"><img src="{{ asset('/') }}dailysharkFiles/rearviewmirrorholder/foto9.png" alt=""
                                                         class="img-fluid"></div>
                    <div class="col-12 text-center mt-4">
                        <p class="font-weight-bold">Elegantan i inovativan dizajn</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3 mt-3">
                <div class="row">
                    <div class="col-12 text-center"><img src="{{ asset('/') }}dailysharkFiles/rearviewmirrorholder/foto10.png" alt=""
                                                         class="img-fluid"></div>
                    <div class="col-12 text-center mt-4">
                        <p class="font-weight-bold">Univerzalan za sve tipove mobilnih telefona</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- michael-k90 -->
<section class="block4">
    <div class="wrap">
        <h2 class="title"><span>REARVIEW MIRROR HOLDER</span> Specifikacije</h2>
        <table class="table table-striped">
            <tbody>
            <tr>
                <th scope="row">Materijal izrade:</th>
                <td>ABS plastika</td>
            </tr>
            <tr>
                <th scope="row">Kačenje:</th>
                <td>retrovizor na vetrobranskom staklu</td>
            </tr>
            <tr>
                <th scope="row">Rotacija:</th>
                <td>360 stepeni</td>
            </tr>
            <tr>
                <th scope="row">Boja:</th>
                <td>Crna</td>
            </tr>
            <tr>
                <th scope="row">Garancija:</th>
                <td>2 godine</td>
            </tr>
            </tbody>
        </table>
        <a href="#buy" class="button-m">Poručite sa popustom</a>
    </div>
</section>
<!-- owmen17 -->
<section class="block5">
    <div class="wrap">
        <h2 class="title">UTISCI KUPACA</h2>
        <div class="reviews1" role="toolbar">
            <div class="rewiews slick-slider">
                <div class="revcont">
                    <div class="rev clearfix">
                        <span><b>Aleksandar Jović</b></span>
                        <p>Odlična stvar, konačno imam navigaciju na pravom mestu u automobilu. Takođe, vrlo lako mogu da obavljam video poziv u automobilu.</p>
                    </div>
                </div>
                <div class="revcont">
                    <div class="rev clearfix r2">
                        <span><b>Vladimir Mičić</b></span>
                        <p>Super proizvod zahvaljujući kome mogu da snimam VLOG dok vozim. Nema potrebe da držim telefon u ruci ili da skrećem pogled sa puta. Sve preporuke!</p>
                    </div>
                </div>
                <div class="revcont">
                    <div class="rev clearfix r3">
                        <span><b>Marko Savić</b></span>
                        <p>Top stvar! Preporučujem svima koji nemaju fabričku navigaciju! </p>
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
            <img src="{{ asset('/') }}dailysharkFiles/rearviewmirrorholder/3foto.png" alt="" class="slick-slide">
            <img src="{{ asset('/') }}dailysharkFiles/rearviewmirrorholder/4foto.jpg" alt="" class="slick-slide">
            <img src="{{ asset('/') }}dailysharkFiles/rearviewmirrorholder/5foto.jpg" alt="" class="slick-slide">
            <img src="{{ asset('/') }}dailysharkFiles/rearviewmirrorholder/6foto.jpg" alt="" class="slick-slide">
            <img src="{{ asset('/') }}dailysharkFiles/rearviewmirrorholder/7foto.jpg" alt="" class="slick-slide">
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
        <h1><span>Rearview Mirror Holder</span></h1>
        <h2>PORUČITE ODMAH SA 40% POPUSTA</h2>
        <h3>SAVRŠEN DRŽAČ ZA TELEFON I GPS UREĐAJE</h3>
        <div class="auto-small"></div>
        <div class="sale">
            Akcija!
            <p>-40%</p>
            popust
        </div>
        <div class="row recom">
            <div class="col-md-6">Uklapa se u svaki enterijer</div>
            <div class="col-md-6">Čvrst i pouzdan</div>
            <div class="col-md-6">Rotacija 360 stepeni</div>
            <div class="col-md-6">Univerzalan za sve tipove mobilnih telefona</div>
            <div class="magnitola-block9">
                <img src="{{ asset('/') }}dailysharkFiles/rearviewmirrorholder/1foto.png" alt="">
            </div>
        </div>
        <div class="magnitola-block9-mobile">
            <img src="{{ asset('/') }}dailysharkFiles/rearviewmirrorholder/1foto.png" alt="">
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
