<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}purplerelaxFiles/3Dmasazer/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/3Dmasazer/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}purplerelaxFiles/3Dmasazer/owl.carousel.min.css">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ot3.jpg">
    <script type="text/javascript" src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/bootstrap.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/owl.carousel.min.js"></script>
    <style>
        .block-1 {
            background: url({{ asset('/') }}purplerelaxFiles/vfaceshaper/bg1.png) #FBEFEF no-repeat center bottom;
            height: 790px;
        }
        @media screen and (max-width: 639px){
            .block-1 {
                background: url({{ asset('/') }}purplerelaxFiles/vfaceshaper/mob_bg.png) #FBEFEF center top no-repeat;
                height: 1100px;
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<div class="section block-1">
    <div class="wrap">
        <h1 class="upp">UREĐAJ ZA ZATEZANJE LICA<br>
            <span style="color: #592d21; font-weight: 400; font-size: 56px;">V FACE SHAPER</span><br>
            <span class="spanspan2" style="color: #592d21; font-weight: normal;"></span>
        </h1>
        <div class="col-xs-12 col-sm-4">
            <div class="discont white">popust<br><span>40%</span></div>
            <div class="priceblock">
                <div class="col-xs-6">
                    <span class="oldprice"> Redovna cena:</span>
                    <span class="oldprice1"> {{ $prices[1]['originalPrice'] }} RSD</span>
                </div>
                <div class="col-xs-6">
                    <span class="newprice"> Cena sada:</span>
                    <span class="newprice1"> {{ $prices[1]['amount'] }} RSD</span>
                </div>
            </div>
            <form action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" class="block1inputname" placeholder="Ime i prezime" required>
                <input type="text" name="phone" class="block1inputphone input-phone" placeholder="Broj telefona" required>
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
            V FACE SHAPER ZA ZATEZANJE LICA I MLADOLIKI IZGLED
        </div>
        <div class="line">
            <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ff.png">
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="block2img">
                <img src="{{ asset('/') }}purplerelaxFiles/vfaceshaper/tovar1.jpg">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="block2text1">Zahvaljujući V Face Shaper-u, ne samo da se mogu zategnuti konture lica, smanjiti podbradak, nego se može i pružiti elastičnost koži i rešiti sitnih bora.
                V Face je dizajniran tako da šalje elektro talase u kombinaciji sa svetlosnom terapijom, te na taj način stimuliše stvaranje kolagena koji je odgovoran za regeneraciji i zatezanje kože lica.
                Efekat je mnogo jači od efekta sesije masažnog terapeuta. Ovakvi tretmani u kozmetičkim salonima koštaju i na stotine eura, a sada je moguće imati kućni uređaj po veoma pristupačnoj ceni.
                Korišćenje V Face Shaper-a je vrlo jednostavno, program i intenzitet rada se podešavaju putem daljinskog upravljača. Samo 15 minuta dnevno korišćenja ovog uređaja čini da tonus lica vrlo brzo postane lep i izjednačen,
                a da koža dobije volumen i bude zategnuta.</div>
        </div>
    </div>
</div>
<div class="block3" style="text-align: center;">
    <div class="wrap">
        <div class="col-xs-12 block2text1" style="line-height: 53px;">
            PREDNOSTI V FACE SHAPERA
        </div>
        <div class="line col-xs-12">
            <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ff.png">
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="block3img col-xs-12">
                <img src="{{ asset('/') }}purplerelaxFiles/vfaceshaper/ot2.jpg">
            </div>
            <div class="block3text1 col-xs-12">
                V - oblik omogućava masažu i tretman najvišeg kvaliteta uz vrhunsko uživanje. Dve sfere za prenos elektro talasa pozicionirane su na takav način da savršeno hvataju problematična područja i rade preciznu i ozbiljnu masažu.
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="block3img col-xs-12">
                <img src="{{ asset('/') }}purplerelaxFiles/vfaceshaper/ot1.jpg">
            </div>
            <div class="block3text1 col-xs-12">
                Svetlosna terapija ima vrlo važnu ulogu u visokokvalitetnom tretmanu. Ostavlja pozitivan efekat na kožu i pospešuje aktivnu regeneraciju u cilju uklanjanja bora.
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="block3img col-xs-12">
                <img src="{{ asset('/') }}purplerelaxFiles/vfaceshaper/ot3.jpg">
            </div>
            <div class="block3text1 col-xs-12">
                Pored estetskog efekta, daje i veoma opuštajući efekat gde ćete se nakon napornog radnog dana opustiti u toplini vašeg doma, bez plaćanja skupih tretmana u kozmetičkim salonima.
            </div>
        </div>
    </div>
</div>
<div class="block-4 section">
    <div class="wrap">
        <div class="col-xs-12 block2text1" style="color: white;">
            RECENZIJE ZADOVOLJNIH KUPACA
        </div>
        <div class="line22 col-sm-12">
            <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ff3.png">
        </div>
        <div class="tovars center hidden-xs">
            <div class="tovar">
                <div class="col-xs-12 block4img">
                    <img alt="V Face Shaper" title="V Face Shaper" src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/rev1.jpg">
                </div>
                <div class="col-xs-12 block4text">
                    <div class="block4text1">
                        <span style="font-weight: 600; font-size: 20px; display: block; margin-bottom: 10px;">Nataša Petrović</span>
                        Odličan i veoma kvalitetan masažer. Veoma je prijatan za vreme korišćenja. U prošlosti sam mnogo novca trošila na masažu u masažnim salonima. Od kada sam kupila ovo čudo, više ne idem nigde i uštedim dosta novca.
                        Savetujem vam da ga kupite i rešite se nepotrebnih troškova masaža.
                    </div>
                </div>
            </div>
            <div class="tovar tovar_2">
                <div class="col-xs-12 block4img">
                    <img alt="V Face Shaper" title="V Face Shaper" src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/rev2.jpg">
                </div>
                <div class="col-xs-12 block4text">
                    <div class="block4text1">
                        <span style="font-weight: 600; font-size: 20px; display: block; margin-bottom: 10px;">Kristina Jovičić</span>
                        Super! Prava stvar koju savetujem svima! Posle napornog dana, mnogo pomaže opuštanju mišića lica. Koža mi je postala živahnija i prijatnija na dodir.
                    </div>
                </div>
            </div>
            <div class="tovar">
                <div class="col-xs-12 block4img">
                    <img alt="V Face Shaper" title="V Face Shaper" src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/rev3.jpg">
                </div>
                <div class="col-xs-12 block4text">
                    <div class="block4text1">
                        <span style="font-weight: 600; font-size: 20px; display: block; margin-bottom: 10px;">Jelica Maksimović</span>
                        Poslednjih godina su počele da mi se pojavljuju bore i opušta koža lica oko brade. Shvatila sam da sam počela da starim i raspitala se šta je najbolje da koristim. Dobila sam preporuku za V Face.
                        Koristim ga 6 meseci i mogu da vam kažem da su rezulteti fenomenalni i da sam prezadovoljna. Sve preporuke za ovaj proizvod!
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
                            <img alt="V Face Shaper" title="V Face Shaper" src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/rev1.jpg">
                        </div>
                        <div class="col-xs-12 block4text">
                            <div class="block4text1">
                                <span style="font-weight: 600; font-size: 16px;">Nataša Petrović</span><br>
                                Odličan i veoma kvalitetan masažer. Veoma je prijatan za korišćenje. Ranije sam mnogo novca trošila na masažu u masažnim salonima. Od kada sam kupila ovo čudo, više ne idem nigde i uštedim dosta novca.
                                Savetujem vam da ga kupite i rešite se nepotrebnih troškova masaža.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item" data-item-id="2">
                    <div class="tovar tovar_2">
                        <div class="col-xs-12 block4img">
                            <img alt="V Face Shaper" title="V Face Shaper" src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/rev2.jpg">
                        </div>
                        <div class="col-xs-12 block4text">
                            <div class="block4text1">
                                <span style="font-weight: 600; font-size: 16px;">Kristina Jovičić</span><br>
                                Super! Prava stvar koju savetujem svima! Posle napornog dana, mnogo pomaže opuštanju mišića lica. Koža mi je postala živahnija i prijatnija na dodir.
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
                                <span style="font-weight: 600; font-size: 16px;">Jelica Maksimović</span><br>
                                Poslednjih godina su počele da mi se pojavljuju bore i opušta koža lica oko brade. Shvatila sam da sam počela da starim i raspitala se šta je najbolje da koristim. Dobila sam preporuku za V Face.
                                Koristim ga 6 meseci i mogu da vam kažem da su rezulteti fenomenalni i da sam prezadovoljna. Sve preporuke za ovaj proizvod!
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
            MIŠLJENJE MASERA
        </div>
        <div class="line123 col-xs-12">
            <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ff.png">
        </div>
        <div class="specialist">
            <div class="left">
                <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/spec.jpg" alt="V Face Shaper">
            </div>
            <div class="right">
                <p>V Face uređaj za lice i telo je dobar način za borbu protiv podbratka i drugih nedostataka na koži. Svaka žena želi da ima i lepo zategnuto lice, ali s godinama to postaje teško održivo.
                    Potrebno je mnogo novca za medicinske i ostale skupe tretmane. Sa ovim masažerom se mogu postići skoro isti rezultati, a cena je neverovatno niska. Rešava probleme opuštene kože lica.</p>
                <p class="name">Marina Milić, Masažni terapeut, 21 godina iskustva</p>
            </div>
        </div>
    </div>
</div>
<div class="block-6 section">
    <div class="wrap center">
        <div class="col-xs-12 block2text1">
            KAKO NARUČITI V FACE SHAPER
        </div>
        <div class="line123 col-xs-12" id="line123">
            <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ff.png">
        </div>
        <div class="tovars center">
            <div class="tovar">
                <img alt="V Face Shaper" title="V Face Shaper" src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ot.png">
                <h3 class="upp">PORUDŽBINA</h3>
                <p>Poručite proizvod unošenjem podataka za dostavu u formi ispod. Potvrdićemo Vašu porudžbinu u najkraćem roku. </p>
            </div>
            <div class="tovar">
                <img alt="V Face Shaper" title="V Face Shaper" src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ot.png">
                <h3 class="upp">DOSTAVA I PLAĆANJE</h3>
                <p>Paket isporučujemo u roku od 1-2 radna dana putem kurirske službe na vašu adresu. Plaćate po preuzimanju pošiljke.</p>
            </div>
            <div class="tovar">
                <img alt="V Face Shaper" title="V Face Shaper" src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ot.png">
                <h3 class="upp">GARANCIJA KVALITETA</h3>
                <p>Pre predaje porudžbine proveravamo kvalitet proizvoda. Ukoliko ne budete zadovoljni proizvodom, vratićemo vam novac.</p>
            </div>
        </div>
    </div>
</div>
<div class="section block-1">
    <div class="wrap">
        <h1 class="upp">UREĐAJ ZA ZATEZANJE LICA <br><span style="color: #592d21; font-weight: 400; font-size: 56px;">V FACE SHAPER</span> <br><span class="spanspan2" style="color: #592d21; font-weight: normal;"></span></h1>
        <div class="col-xs-12 col-sm-4">
            <div class="discont white">popust<br><span>40%</span></div>
            <div class="priceblock">
                <div class="col-xs-6">
                    <span class="oldprice"> Redovna cena:</span>
                    <span class="oldprice1"> {{ $prices[1]['originalPrice'] }} RSD</span>
                </div>
                <div class="col-xs-6">
                    <span class="newprice"> Cena sada:</span>
                    <span class="newprice1"> {{ $prices[1]['amount'] }} RSD</span>
                </div>
            </div>
            <form action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" class="block1inputname" placeholder="Ime i prezime" required>
                <input type="text" name="phone" class="block1inputphone input-phone" placeholder="Broj telefona" required>
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
