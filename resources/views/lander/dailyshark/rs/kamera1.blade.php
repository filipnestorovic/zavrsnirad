<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/kamera1/settings.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/kamera1/main.css" type="text/css">
</head>
<body>
@include('components.display_errors')
<section class="top-nav">
    <div class="wrap clearfix">
        <ul class="left">
            <li><a href="#blk2"> Funkciók</a></li>
            <li><a href="#blk3"> Jellemzők</a></li>
        </ul>
        <ul class="right">
            <li><a href="#blk6"> Beszámolók</a></li>
            <li><a href="#blk7"> Szállítás és fizetés</a></li>
        </ul>
    </div>
</section>
<section class="block-1">
    <div class="wrap clearfix">
        <h1 class="title"><span> DVR</span> Car Cam Recorder</h1>
        <div class="cont-left">
            <div class="sale"><b> Popust</b><strong> -40%</strong></div>
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
                    <li> Felejtsd el a szükségtelen</li>
                    <li> Csatlakoztatva a szélvédőhöz</li>
                    <li> Elriasztja a tolvajokat</li>
                </ul>
            </div>
            <a href="#zakaz" class="button-m"> Megrendelés kedvezménnyel</a>
        </div>
    </div>
</section>
<section class="block-2" id="blk2">
    <div class="wrap">
        <h2 class="title"> dvr ELŐNYEI<span> Car Cam Recorder</span></h2>
        <ul class="adv clearfix">
            <li>
                <h3> DVR</h3>
                <p> Kiváló minőségű videó, Full HD felvétel</p>
            </li>
            <li>
                <h3> mozgásérzékelő</h3>
                <p> A felvétel akkor is megtörténik, ha az autó parkolt. Látni fogja, hogy minden megy körül, még
                    akkor is, ha nem a kocsi közelében </p>
            </li>
            <li>
                <h3> G érzékelő</h3>
                <p> Felvétel vészfékezés vagy ütközés során</p>
            </li>
        </ul>
    </div>
</section>
<section class="block-3" id="blk3">
    <div class="wrap clearfix">
        <h2 class="title"> A DVR jellemzői<span> Car Cam Recorder</span></h2>
        <img class="pic-1" src="{{ asset('/') }}dailysharkFiles/kamera1/b3-1.jpg" alt="HD Cam Mirror">
        <ul class="list spec-1">
            <li> Mozgás- és ütésérzékelő</li>
            <li> Betekintési szög 170°</li>
            <li> Éjszakai látás</li>
            <li> Képernyőméret 2,7 hüvelyk</li>
            <li> Full HD 1080p felvétel</li>
            <li> Digitális zoom </li>
            <li> Memóriakártya-foglalat 32 GB-ig</li>
        </ul>
        <h3 class="title"><span> Mellékelve</span></h3>
        <img class="pic-2" src="{{ asset('/') }}dailysharkFiles/kamera1/b3-2.jpg" alt="HD Cam Mirror">
        <ul class="list spec-2">
            <li> Autó DVR Car Cam Recorder</li>
            <li> Szerelés</li>
            <li> Vezetékek</li>
            <li> Utasítások</li>
        </ul>
    </div>
</section>
<section class="block-5">
    <div class="wrap">
        <h2 class="title"> Visszajelzés<span> Car Cam Recorder</span></h2>
        <div class="center"><img src="{{ asset('/') }}dailysharkFiles/kamera1/b5-0.jpg" alt="HD Cam Mirror"></div>
        <div class="img-cont clearfix">
            <img src="{{ asset('/') }}dailysharkFiles/kamera1/b5-1.jpg" alt="HD Cam Mirror">
            <img src="{{ asset('/') }}dailysharkFiles/kamera1/b5-2.jpg" alt="HD Cam Mirror">
        </div>
        <a href="#zakaz" class="button-m"> Megrendelés kedvezménnyel</a>
    </div>
</section>
<section class="block-6" id="blk6">
    <div class="wrap">
        <h2 class="title"> Beszámolók<span> elégedett vásárlók</span></h2>
        <div class="clearfix">
            <div>
                <div>
                    <div class="rev-item" style="width: 291.2px;">
                        <div><img src="{{ asset('/') }}dailysharkFiles/kamera1/rev-1.jpg" alt="HD Cam Mirror"></div>
                        <h3> Ádok Zoltán</h3>
                        <p> A kamera nagyszerű, szuper lő, a minősége a rekord tetszik. Gyorsan eltűnt, egy héttel a
                            megrendelés után. A vásárlás elégedett, mindenkinek ajánlom!</p>
                    </div>
                    <div class="rev-item" style="width: 291.2px;">
                        <div><img src="{{ asset('/') }}dailysharkFiles/kamera1/rev-2.jpg" alt="HD Cam Mirror"></div>
                        <h3> Ács János</h3>
                        <p> Nagyon szeretem, hogy kompakt, sok helyet takarít meg. A fényképezőgép minősége
                            nagyszerű, a videók nem sok memóriát foglalnak el A rekord minősége is nagyon jó</p>
                    </div>
                    <div class="rev-item" style="width: 291.2px;">
                        <div><img src="{{ asset('/') }}dailysharkFiles/kamera1/rev-3.jpg" alt="HD Cam Mirror"></div>
                        <h3> Auksz Éva</h3>
                        <p> Ez mind jó. Mind az ár, mind a minőség. Nagyszerű vele parkolni. Szeretem magát a
                            kamerát, és a felvétel minőségét, ajánlom!</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<section class="block-7" id="blk7">
    <div class="wrap">
        <h2 class="title"> kézbesítés<span> és fizetési</span></h2>
        <ul class="deliv clearfix">
            <li>
                <p><b> Kézbesítés futárral</b> 1-3 napon belül</p>
            </li>
            <li>
                <p><b> Nincs előleg!</b> Csak akkor fizet, ha megkapja az árut</p>
            </li>
        </ul>
    </div>
</section>
<section class="block-1" id="zakaz">
    <div class="wrap clearfix">
        <h1 class="title"><span> DVR </span> Car Cam Recorder</h1>
        <div class="cont-left">
            <div class="sale"><b> Popust</b><strong> -40%</strong></div>
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
{{--<footer class="footer">--}}

{{--</footer>--}}
</body>
</html>