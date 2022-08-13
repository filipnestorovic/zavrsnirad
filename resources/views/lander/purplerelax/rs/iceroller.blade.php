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
            background: url({{ asset('/') }}purplerelaxFiles/iceroller/bg1.png) #FBEFEF no-repeat center bottom;
            height: 790px;
        }

        @media screen and (max-width: 639px) {
            .block-1 {
                background: url({{ asset('/') }}purplerelaxFiles/iceroller/mob_bg.png) #FBEFEF center top no-repeat;
                height: 1100px;
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<div class="section block-1">
    <div class="wrap">
        <h1 class="upp">MASAŽER ZA LICE I TELO<br>
            <span style="color: #592d21; font-weight: 400; font-size: 56px;">Ice Roller</span><br>
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
            ICE ROLLER ZA LICE I TELO
        </div>
        <div class="line">
            <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ff.png">
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="block2img">
                <img src="{{ asset('/') }}purplerelaxFiles/iceroller/tovar1.jpg">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="block2text1">Zahvaljujući Ice Roller masažeru, ne samo da se mogu zategnuti konture lica i koži pružiti elastičnost,
                već se može i rešiti sitnih bora oko usta i očiju.
                Ice Roller masažer je dizajniran na takav način da njegove sfere koje se u frižideru ili zamrzivaču rashlade,
                krećući se preko kože daju lekovit i vrlo učinkovit efekat. Efekat je bolji od efekta sesije masažnog terapeuta.
                Korišćenje masažera je prilično jednostavno, potrebno ga je samo lepo rashladiti ili zalediti.
                Samo 10 minuta dnevno korišćenja ovog uređaja čini da tonus lica vrlo brzo postane lep i izjednačen, a da koža dobije volumen i bude zategnuta.</div>
        </div>
    </div>
</div>
<div class="block3" style="text-align: center;">
    <div class="wrap">
        <div class="col-xs-12 block2text1" style="line-height: 53px;">
            PREDNOSTI ICE ROLLER MASAŽERA
        </div>
        <div class="line col-xs-12">
            <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ff.png">
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="block3img col-xs-12">
                <img src="{{ asset('/') }}purplerelaxFiles/iceroller/ot2.jpg">
            </div>
            <div class="block3text1 col-xs-12">
                Inovativni oblik i struktura omogućava masažu najvišeg kvaliteta uz vrhunsko uživanje.
                Zaleđene sfere za limfnu drenažu pozicionirane su na takav način da savršeno pokrivaju problematična područja i rade preciznu i ozbiljnu masažu.
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="block3img col-xs-12">
                <img src="{{ asset('/') }}purplerelaxFiles/iceroller/ot1.jpg">
            </div>
            <div class="block3text1 col-xs-12">
                Posebno patentiran proizvod igra važnu ulogu u osećaju visokokvalitetne masaže.
                Savršeno deluje na sva područja kože, ostavljajući efekat na celu tretiranu površinu.
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="block3img col-xs-12">
                <img src="{{ asset('/') }}purplerelaxFiles/iceroller/ot3.jpg">
            </div>
            <div class="block3text1 col-xs-12">
                Masažer se može primeniti ne samo na lice i vrat, već i na ostale delove tela. Ice Roller masažer vrlo je efikasan u eliminisanju otoka na svim delovima tela.
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
                    <img alt="Ice Roller"
                         title="Ice Roller"
                         src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/rev1.jpg">
                </div>
                <div class="col-xs-12 block4text">
                    <div class="block4text1">
                        <span style="font-weight: 600; font-size: 20px; display: block; margin-bottom: 10px;">Nataša Petrović</span>
                        Odličan i veoma kvalitetan masažer. Veoma je prijatan za vreme korišćenja. U prošlosti sam mnogo
                        novca trošila na masažu u masažnim salonima. Od kada sam kupila ovo čudo, više ne idem nigde i
                        uštedim dosta novca.
                        Savetujem vam da ga kupite i rešite se nepotrebnih troškova masaža.
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
                        <span style="font-weight: 600; font-size: 20px; display: block; margin-bottom: 10px;">Kristina Jovičić</span>
                        Super! Prava stvar koju savetujem svima! Posle napornog dana, mnogo pomaže opuštanju mišića
                        lica. Koža mi je postala živahnija i prijatnija na dodir. Još jedna dobra stvar je što je
                        masažer vodootporan, pa se mogu opustiti i pod tušem.
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
                        <span style="font-weight: 600; font-size: 20px; display: block; margin-bottom: 10px;">Jelica Maksimović</span>
                        Često me je uveče bolelo celo telo. Videla sam na internetu ovaj masažer i poručila sam ga.
                        Stigao je brzom poštom sutradan. Koristim ga neko vreme i osećam se veoma lepo. Hvala vam na
                        ovom proizvodu.
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
                                <span style="font-weight: 600; font-size: 16px;">Nataša Petrović</span><br>
                                Odličan i veoma kvalitetan masažer. Veoma je prijatan za korišćenje. Ranije sam mnogo
                                novca trošila na masažu u masažnim salonima. Od kada sam kupila ovo čudo, više ne idem
                                nigde i uštedim dosta novca.
                                Savetujem vam da ga kupite i rešite se nepotrebnih troškova masaža.
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
                                <span style="font-weight: 600; font-size: 16px;">Kristina Jovičić</span><br>
                                Super! Prava stvar koju savetujem svima! Posle napornog dana, mnogo pomaže opuštanju
                                mišića lica. Koža mi je postala živahnija i prijatnija na dodir. Još jedna dobra stvar
                                je što je masažer vodootporan, pa se mogu opustiti i pod tušem.
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
                                Često me je uveče bolelo celo telo. Videla sam na internetu ovaj masažer i poručila sam
                                ga. Stigao je brzom poštom sutradan. Koristim ga neko vreme i osećam se veoma lepo.
                                Hvala vam na ovom proizvodu.
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
                <img src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/spec.jpg"
                     alt="Ice Roller">
            </div>
            <div class="right">
                <p>Ice Roller za lice i telo je dobar način za borbu protiv bora i drugih nedostataka na koži. Svaka
                    žena želi da ima i lepo zategnuto lice, ali s godinama to postaje teško održivo.
                    Potrebno je mnogo novca za medicinske i ostale skupe tretmane. Sa ovim masažerom se mogu postići
                    skoro isti rezultati, a cena je neverovatno niska. Rešava sve probleme, poput bora oko očiju i usta
                    i opuštene kože.
                    Što se tiče masaža tela, efikasno opušta mišiće i odličan je za svakodnevno korišćenje.</p>
                <p class="name">Marina Milić, Masažni terapeut, 21 godina iskustva</p>
            </div>
        </div>
    </div>
</div>
<div class="block-6 section">
    <div class="wrap center">
        <div class="col-xs-12 block2text1">
            KAKO NARUČITI ICE ROLLER
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
                <p>Paket isporučujemo u roku od 1-2 radna dana putem kurirske službe na vašu adresu. Plaćate po
                    preuzimanju pošiljke.</p>
            </div>
            <div class="tovar">
                <img alt="Ice Roller"
                     title="Ice Roller"
                     src="{{ asset('/') }}purplerelaxFiles/3Dmasazer/ot.png">
                <h3 class="upp">GARANCIJA KVALITETA</h3>
                <p>Pre predaje porudžbine proveravamo kvalitet proizvoda. Ukoliko ne budete zadovoljni proizvodom,
                    vratićemo vam novac.</p>
            </div>
        </div>
    </div>
</div>
<div class="section block-1">
    <div class="wrap">
        <h1 class="upp">MASAŽER ZA LICE I TELO <br><span style="color: #592d21; font-weight: 400; font-size: 56px;">Ice Roller </span>
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
