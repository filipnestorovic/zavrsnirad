<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}purplerelaxFiles/3Dmasazer/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/3Dmasazer/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}purplerelaxFiles/3Dmasazer/owl.carousel.min.css">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ot3.jpg">
    <script type="text/javascript" src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/bootstrap.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/owl.carousel.min.js"></script>
    <style>
        .block-1 {
            background: url({{ asset('/') }}purplerelaxFiles/microtouch/bg1.png) #FBEFEF no-repeat center bottom;
            height: 790px;
        }

        @media screen and (max-width: 639px) {
            .block-1 {
                background: url({{ asset('/') }}purplerelaxFiles/microtouch/mob_bg.png) #FBEFEF center top no-repeat;
                height: 1140px;
            }
        }
        @media screen and (max-width: 767px) {
            .block-1 .discont {
                margin-left: 140px;
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<div class="section block-1">
    <div class="wrap">
        <h1 class="upp">SREDSTVO ZA ČIŠĆENJE UŠIJU<br>
            <span style="color: #592d21; font-weight: 400; font-size: 56px;">MICRO TOUCH</span><br>
            <span class="spanspan2" style="color: #592d21; font-weight: normal;"></span>
        </h1>
        <div class="col-xs-12 col-sm-4">
            <div class="discont white">popust<br><span>40%</span></div>
            <div class="priceblock">
                <div class="col-xs-6">
                    <span class="oldprice"> Regularna cena:</span>
                    <span class="oldprice1"> {{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</span>
                </div>
                <div class="col-xs-6">
                    <span class="newprice"> Cena sada:</span>
                    <span class="newprice1"> {{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</span>
                </div>
            </div>
            <form action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" class="block1inputname" placeholder="Ime i prezime" required>
                <input type="text" name="phone" class="block1inputphone input-phone" placeholder="Broj telefona"
                       required>
                <input type="text" name="shipping_address" class="block1inputname" placeholder="Adresa" required>
                <input type="text" name="shipping_city" class="block1inputname" placeholder="Grad" required>
                <p style="color: #FB1B14;font-size: 14px;line-height: 16px;padding: 10px;"></p>
                <button class="knopka1" type="submit">PORUČITE ODMAH</button>
            </form>
        </div>
    </div>
</div>
<div class="block2">
    <div class="wrap">
        <div class="col-xs-12 block2text1">
            MICRO TOUCH EARWAX REMOVAL
        </div>
        <div class="line">
            <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ff.png">
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="block2img">
                <img src="{{ asset('/') }}purplerelaxFiles/microtouch/tovar1.jpg">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="block2text1">
                Zahvaljujući ovom proizvodu, uklanjanje smole iz ušiju nikada nije bilo jednostavnije.
                Koristeći obične štapiće za uši čisti se samo prividno jer veći deo smole ide direktno na bubnu opnu što
                u perspektivi dovodi do začepljenja, svraba i lošijeg sluha.
                Micro Touch je dizajniran tako da na vrlo nežan i jednostavan način uklanja sve nečistoće iz ušne školjke za par trenutaka.
                Odličan je za decu jer nema straha od povrede bubne opne zahvaljujući graničniku koji poseduje Micro Touch.
                Neka čišćenje ušiju bude zadovoljstvo!
            </div>
        </div>
    </div>
</div>
<div class="block3" style="text-align: center;">
    <div class="wrap">
        <div class="col-xs-12 block2text1" style="line-height: 53px;">
            PREDNOSTI MICRO TOUCH ČISTAČA ZA UČI
        </div>
        <div class="line col-xs-12">
            <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ff.png">
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="block3img col-xs-12">
                <img src="{{ asset('/') }}purplerelaxFiles/microtouch/ot2.jpg">
            </div>
            <div class="block3text1 col-xs-12">
                Silikonski nastavci spiralnog oblika omogućavaju masažu ušne školjke i izazivaju vrlo prijatan osećaj.
                Laganim kružnim pokretima odstranjuje se višak skole. Bićete zaprepašteni kada vidite koliko toga ima u ušima.
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="block3img col-xs-12">
                <img src="{{ asset('/') }}purplerelaxFiles/microtouch/ot1.jpg">
            </div>
            <div class="block3text1 col-xs-12">
                Proizvod dolazi sa 16 silikonskih nastavaka. Nastavci mogu da se peru i čiste, tako da dugo vremena vi i vaša porodica nećete morati da kupujete
                nastavke ili novi proizvod. Finansijski je isplativije od štapića za uši koji pritom zagađuju i životnu okolinu.
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="block3img col-xs-12">
                <img src="{{ asset('/') }}purplerelaxFiles/microtouch/ot3.jpg">
            </div>
            <div class="block3text1 col-xs-12">
                Proizvod je testiran i odobren od strane stručnjaka. Dolazi u praktičnoj kutiji koju možete da nosite na putovanja ili bilo gde drugo.
            </div>
        </div>
    </div>
</div>
<div class="block-4 section">
    <div class="wrap">
        <div class="col-xs-12 block2text1" style="color: white;">
            UTISCI ZADOVOLJNIH KUPACA
        </div>
        <div class="line22 col-sm-12">
            <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ff3.png">
        </div>
        <div class="tovars center hidden-xs">
            <div class="tovar">
                <div class="col-xs-12 block4img">
                    <img alt="Ice Roller"
                         title="Ice Roller"
                         src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/rev1.jpg">
                </div>
                <div class="col-xs-12 block4text">
                    <div class="block4text1">
                        <span style="font-weight: 600; font-size: 20px; display: block; margin-bottom: 10px;">Nataša Perendija</span>
                        Odličan je i veoma praktičan proizvod. Veoma je prijatan za korišćenje.
                        U prošlosti sam mnogo problema imala sa nabijanjem smole u dno ušne školjke i na bubnu opnu, zbog čega sam često morala na ispiranje ušiju.
                        Sada to nije problem, sa Micro Touch proizvodom sva smola ide napolje.
                    </div>
                </div>
            </div>
            <div class="tovar tovar_2">
                <div class="col-xs-12 block4img">
                    <img alt="Ice Roller"
                         title="Ice Roller"
                         src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/rev2.jpg">
                </div>
                <div class="col-xs-12 block4text">
                    <div class="block4text1">
                        <span style="font-weight: 600; font-size: 20px; display: block; margin-bottom: 10px;">Kristina Rakočević</span>
                        Super! Prava stvar koju savetujem svima! Imam malu decu i sa njima je bila večita borba oko čišćenja ušiju jer su se jako plašili.
                        Ovaj proizvod im je ulio poverenje, sada uživaju dok im čistim uši. Stariji sin to već radi sam. Sve preporuke, poručila sam još dva komada za sestru i majku.
                    </div>
                </div>
            </div>
            <div class="tovar">
                <div class="col-xs-12 block4img">
                    <img alt="Ice Roller"
                         title="Ice Roller"
                         src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/rev3.jpg">
                </div>
                <div class="col-xs-12 block4text">
                    <div class="block4text1">
                        <span style="font-weight: 600; font-size: 20px; display: block; margin-bottom: 10px;">Jelisaveta Tamburić</span>
                        Često sam imala problem sa začepljenim ušima, i nisam više nalazila način kako da to rešim. Doktori su mi rekli da često ispiranje ušiju nije poželjno.
                        Kopajući po internetu naišla sam na ovaj proizvod i rekoh hajde da probam, zašto da ne. Ljudi, vi ne možete da verujete koje olakšanje. Sada čujem sve, i što treba i što ne treba. :)
                    </div>
                </div>
            </div>
        </div>
        <div id="carousel2" class="carousel slide visible-xs">
            <ol class="carousel-indicators">
                <li class="active" data-target="#carousel" data-slide-to="0"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <div class="tovar">
                        <div class="col-xs-12 block4img">
                            <img alt="Ice Roller"
                                 title="Ice Roller"
                                 src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/rev1.jpg">
                        </div>
                        <div class="col-xs-12 block4text">
                            <div class="block4text1">
                                <span style="font-weight: 600; font-size: 16px;">Nataša Perendija</span><br>
                                Odličan je i veoma praktičan proizvod. Veoma je prijatan za korišćenje.
                                U prošlosti sam mnogo problema imala sa nabijanjem smole u dno ušne školjke i na bubnu opnu, zbog čega sam često morala na ispiranje ušiju.
                                Sada to nije problem, sa Micro Touch proizvodom sva smola ide napolje.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item" data-item-id="2">
                    <div class="tovar tovar_2">
                        <div class="col-xs-12 block4img">
                            <img alt="Ice Roller"
                                 title="Ice Roller"
                                 src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/rev2.jpg">
                        </div>
                        <div class="col-xs-12 block4text">
                            <div class="block4text1">
                                <span style="font-weight: 600; font-size: 16px;">Kristina Rakočević</span><br>
                                Super! Prava stvar koju savetujem svima! Imam malu decu i sa njima je bila večita borba oko čišćenja ušiju jer su se jako plašili.
                                Ovaj proizvod im je ulio poverenje, sada uživaju dok im čistim uši. Stariji sin to već radi sam. Sve preporuke, poručila sam još dva komada za sestru i majku.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item" data-item-id="3">
                    <div class="tovar">
                        <div class="col-xs-12 block4img">
                            <img alt="" title="" src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/rev3.jpg">
                        </div>
                        <div class="col-xs-12 block4text">
                            <div class="block4text1">
                                <span style="font-weight: 600; font-size: 16px;">Jelisaveta Tamburić</span><br>
                                Često sam imala problem sa začepljenim ušima, i nisam više nalazila način kako da to rešim. Doktori su mi rekli da često ispiranje ušiju nije poželjno.
                                Kopajući po internetu naišla sam na ovaj proizvod i rekoh hajde da probam, zašto da ne. Ljudi, vi ne možete da verujete koje olakšanje. Sada čujem sve, i što treba i što ne treba. :)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#carousel2" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a href="#carousel2" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
</div>
<div class="block-5">
    <div class="wrap">
        <div class="col-xs-12 block2text1">
            MIŠLJENJE STRUČNJAKA
        </div>
        <div class="line123 col-xs-12">
            <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ff.png">
        </div>
        <div class="specialist">
            <div class="left">
                <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/spec.jpg"
                     alt="Ice Roller">
            </div>
            <div class="right">
                <p>
                    <b>Micro Touch</b> je veoma dobro sredstvo za čišćenje ušiju, posebno za decu. Obični štapići za uši uopšte nisu preporučljivi jer veći deo smole spuštaju u donji deo ušne školjke i na taj
                    način prave cerumenske čepove koji mogu da dovedu do raznih simptoma poput lošijeg sluha, zujanja u ušima, pritiska u glavi.
                    <br><br>
                    Micro Touch izvlači apsolutno svu smolu iz ušiju bez ostavljanja ostataka, te na taj način garantuje odličnu higijenu ušne školjke. <b>Pouzdan je za upotrebu i ne može da izazove
                        nikakve štetne efekte.</b>
                </p>
                <p class="name">Marija Jovanović, Pedijatar, 15 godina iskustva</p>
            </div>
        </div>
    </div>
</div>
<div class="block-6 section">
    <div class="wrap center">
        <div class="col-xs-12 block2text1">
            KAKO NARUČITI MICRO TOUCH
        </div>
        <div class="line123 col-xs-12" id="line123">
            <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ff.png">
        </div>
        <div class="tovars center">
            <div class="tovar">
                <img alt="Ice Roller"
                     title="Ice Roller"
                     src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ot.png">
                <h3 class="upp">PORUDŽBINA</h3>
                <p>Poručite proizvod unošenjem podataka za dostavu u formi ispod. Potvrdićemo Vašu porudžbinu u
                    najkraćem roku. </p>
            </div>
            <div class="tovar">
                <img alt="Ice Roller"
                     title="Ice Roller"
                     src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ot.png">
                <h3 class="upp">DOSTAVA I PLAĆANJE</h3>
                <p>Paket isporučujemo u roku od 1-2 radna dana putem kurirske službe na Vašu adresu. Plaćate po
                    preuzimanju pošiljke.</p>
            </div>
            <div class="tovar">
                <img alt="Ice Roller"
                     title="Ice Roller"
                     src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ot.png">
                <h3 class="upp">GARANCIJA KVALITETA</h3>
                <p>Pre predaje porudžbine proveravamo kvalitet proizvoda. Ukoliko ne budete zadovoljni proizvodom,
                    vratićemo Vam novac.</p>
            </div>
        </div>
    </div>
</div>
<div class="section block-1">
    <div class="wrap">
        <h1 class="upp">SREDSTVO ZA ČIŠĆENJE UŠIJU <br><span style="color: #592d21; font-weight: 400; font-size: 56px;">MICRO TOUCH</span>
            <br><span class="spanspan2" style="color: #592d21; font-weight: normal;"></span></h1>
        <div class="col-xs-12 col-sm-4">
            <div class="discont white">popust<br><span>40%</span></div>
            <div class="priceblock">
                <div class="col-xs-6">
                    <span class="oldprice"> Regularna cena:</span>
                    <span class="oldprice1"> {{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</span>
                </div>
                <div class="col-xs-6">
                    <span class="newprice"> Cena sada:</span>
                    <span class="newprice1"> {{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</span>
                </div>
            </div>
            <form action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" class="block1inputname" placeholder="Ime i prezime" required>
                <input type="text" name="phone" class="block1inputphone input-phone" placeholder="Broj telefona"
                       required>
                <input type="text" name="shipping_address" class="block1inputname" placeholder="Adresa" required>
                <input type="text" name="shipping_city" class="block1inputname" placeholder="Grad" required>
                <p style="color: #FB1B14;font-size: 14px;line-height: 16px;padding: 10px;"></p>
                <button class="knopka1" type="submit">PORUČITE ODMAH</button>
            </form>
        </div>
    </div>
</div>
@include('components.pixel_footer')
</body>
</html>
