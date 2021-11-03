<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <style>@font-face{font-family:'Product Sans';src:url('{{ asset('/') }}fonts/ProductSans-LightItalic.woff2') format('woff2');font-weight:300;font-style:italic;font-display:swap}@font-face{font-family:'Product Sans';src:url('{{ asset('/') }}fonts/ProductSans-Italic.woff2') format('woff2');font-weight:400;font-style:italic;font-display:swap}@font-face{font-family:'Product Sans';src:url('{{ asset('/') }}fonts/ProductSans-Black.woff2') format('woff2');font-weight:900;font-style:normal;font-display:swap}@font-face{font-family:'Product Sans';src:url('{{ asset('/') }}fonts/ProductSans-Medium.woff2') format('woff2');font-weight:500;font-style:normal;font-display:swap}@font-face{font-family:'Product Sans';src:url('{{ asset('/') }}fonts/ProductSans-Bold.woff2') format('woff2');font-weight:700;font-style:normal;font-display:swap}@font-face{font-family:'Product Sans';src:url('{{ asset('/') }}fonts/ProductSans-BoldItalic.woff2') format('woff2');font-weight:700;font-style:italic;font-display:swap}@font-face{font-family:'Product Sans';src:url('{{ asset('/') }}fonts/ProductSans-Regular.woff2') format('woff2');font-weight:400;font-style:normal;font-display:swap}@font-face{font-family:'Product Sans';src:url('{{ asset('/') }}fonts/ProductSans-MediumItalic.woff2') format('woff2');font-weight:500;font-style:italic;font-display:swap}@font-face{font-family:'Product Sans';src:url('{{ asset('/') }}fonts/ProductSans-Light.woff2') format('woff2');font-weight:300;font-style:normal;font-display:swap}@font-face{font-family:slick;font-weight:400;font-style:normal;src:url('{{ asset('/') }}fonts/slick.eot');src:url('{{ asset('/') }}fonts/slick.eot@#iefix') format('embedded-opentype'),url('{{ asset('/') }}fonts/slick.woff') format('woff'),url('{{ asset('/') }}fonts/slick.ttf') format('truetype'),url('{{ asset('/') }}fonts/slick.svg#slick') format('svg')}@font-face{font-family:'fontello';src:url('{{ asset('/') }}fonts/fontello.woff2') format('woff2');font-weight:400;font-style:normal}</style>
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/powertrimmer/normalize.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/powertrimmer/flexboxgrid.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/powertrimmer/skeleton.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/powertrimmer/hamburgers.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/powertrimmer/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/powertrimmer/responsive.css" type="text/css" media="all">
    <link rel="icon" href="{{ asset('/') }}purplerelaxFiles/powertrimmer/1.png" type="image/x-icon">
</head>
<body>
<div class="wrapper">
    @include('components.display_errors')
    <section id="navMenu" class="row col-xs-12 center-xs no-margin-padding">
        <div class="content row center-xs no-margin-padding">
            <div class="logo row col-md-8 col-sm-4 col-xs-12 start-xs middle-xs">
                <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/logo_2.png" alt>
                <div class="mobile-menu hamburger hamburger hamburger--3dx-r"
                     title="Mostra/Nascondi il men&ugrave;">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
                <ul class="menu">
                    <li><a href="#big-g" class="scroll_to">Detaljnije</a></li>
                    <li><a href="#slider" class="scroll_to">O proizvodu</a></li>
                    <li><a href="#text-image-banner-3" class="scroll_to">Sadržaj kompleta</a></li>
                    <li><a href="#order_frame" class="hide button navMenu_button scroll_to">Poručite sada</a></li>
                </ul>
            </div>
            <div class="row col-md-4 col-sm-8 col-xs-12 end-xs middle-xs">
                <ul class="menu">
                    <li><a href="#order_frame" class="button navMenu_button scroll_to">Poručite sada</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section id="header" class="row col-xs-12 center-xs pet-pattern-1">
        <div class="content row col-xs-12 center-xs no-margin-padding">
            <div class="logo-column row col-md-5 col-xs-12 center-xs middle-xs">
                <div class="logo row col-xs-12 center-xs top-xs">
                    <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/logo_1.png">
                </div>
                <div class="price row col-xs-12 center-xs middle-xs">
                     <span class="old">
                        {{ $prices[1]['originalPrice'] }}
                        RSD
                     </span>
                    <span class="new pulse">
                        {{ $prices[1]['amount'] }}
                        RSD
                     </span>
                    <span class="discount">
                     <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/discount.png"></span>
                </div>
                <div class="specs row col-xs-12 center-xs middle-xs">
                    <div class="spec row col-xs-12 start-xs middle-xs">
                        <div class="content row col-xs-12 start-xs middle-xs no-margin-padding">
                            <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/icon.png">
                            <div class="text">
                                <span>LAKO </span> I <span>BRZO </span> KORIŠĆENJE
                            </div>
                        </div>
                    </div>
                    <div class="spec row col-xs-12 start-xs middle-xs">
                        <div class="content row col-xs-12 start-xs middle-xs no-margin-padding">
                            <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/icon.png">
                            <div class="text">
                                <span>BRZO </span> I <span>EFIKASNO </span> BRIJANJE
                            </div>
                        </div>
                    </div>
                    <div class="spec row col-xs-12 start-xs middle-xs">
                        <div class="content row col-xs-12 start-xs middle-xs no-margin-padding">
                            <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/icon.png">
                            <div class="text">
                                MILIMETARSKA <span>PRECIZNOST </span> ZA <span>SAVRŠENU</span> BRADU
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="watch row col-md-7 col-xs-12 end-md center-xs bottom-xs no-margin-padding">
                <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/header_man.png" class>
            </div>
        </div>
    </section>
    <section id="only-text-banner" class="blackMesh">
        <div class="container row col-xs-12 center-xs middle-xs">
            <div class="row1">
                <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/logo_3.png" alt>
                je novi oštriji, brži, efikasniji profesionalni brijač od svih prethodnih generacija
            </div>
            <div class="lower row col-xs-12 center-xs middle-xs">
                <div class="countdown_button row col-xs-12 center-xs middle-xs">
                    <div class="content row col-xs-12 center-xs middle-xs">
                        <div class="btn row col-sm-6 col-xs-12 center-xs middle-xs">
                            <a href="#order_frame" class="scroll_to" title="PORUČITE SADA">
                                <div class="mybutton_round">PORUČITE SADA</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="advise-banner" class="row col-xs-12 start-xs no-margin-padding">
        <div class="maxColumn content row center-xs no-margin no-padding">
            <div class="sx row col-md-6 col-xs-12 start-xs middle-xs">
                <span class="surtitle">PROFESIONALNO REŠENJE - NISKA CENA</span>
                <span class="title">Savršeno rešenje za kosu i bradu</span>
                <span class="subtitle"><span class="italic">xPower Trimmer</span> je opremljen inovativnom tehnologijom koja omogućava
                    da započnete svaki dan potpuno jednostavnim i brzim brijanjem.</span>
                <div class="bottom row col-xs-12 center-xs middle-xs">
                    <div class="box row col-md-6 col-xs-12 center-xs middle-xs">
                        <span class="title"><i class="icon icon-ok-circled"></i>Lako</span>
                        <span class="description">Glatko pređite preko brade i obrijte bilo koju dužinu sa lakoćom.</span>
                    </div>
                    <div class="box row col-md-6 col-xs-12 center-xs middle-xs">
                        <span class="title"><i class="icon icon-ok-circled"></i>Podesivo</span>
                        <span class="description">Dobićete 4 nastavka uz pomoć kojih podešavate dužinu brade.</span>
                    </div>
                    <div class="box row col-md-6 col-xs-12 center-xs middle-xs">
                        <span class="title"><i class="icon icon-ok-circled"></i>Kvalitetno</span>
                        <span class="description">Dizajniran je da bude čvrst i udoban. Čvrsta metalna ručka sa teksturom protiv klizanja.</span>
                    </div>
                    <div class="box row col-md-6 col-xs-12 center-xs middle-xs">
                        <span class="title"><i class="icon icon-ok-circled"></i>Precizno</span>
                        <span class="description">Savršene ivice zahvaljujući čeličnom sečivu. Može se koristiti u bilo kom pravcu i lako se definiše izgled brade za nekoliko sekundi.</span>
                    </div>
                </div>
            </div>
            <div class="dx row col-md-6 col-xs-12 center-xs middle-xs">
                <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/advise.jpg">
            </div>
        </div>
    </section>
    <section id="slider" class="slider_1">
        <div class="content row col-xs-12 no-margin no-padding">
            <div class="images col-md-6 col-xs-12 center-xs">
                <div class="slider-carousel-1">
                    <div class="carousel-cell">
                        <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/slide.jpg" alt>
                    </div>
                </div>
            </div>
            <div class="text luxuryTexture row col-md-6 col-xs-12 center-xs middle-xs no-margin no-padding">
                <div class="title start-xs">
                    <div class="innerTitle">Saveznik tvog stila</div>
                    Ponekad samo želite da osvežite ssvoj izgled menjanjem izgleda brade na dva ili tri dana, drugi put želite da eksperimentišete sa nekim novim oblikom.
                    Za svaku potrebu stilizovanja brade postoji proizvod koji to najbolje može zadovoljiti: <span class="italic"><b>xPower
                     Trimmer</b></span>.
                    <br><br>
                    Trimer za bradu i kosu je nezaobilazan alat za stilizovanje savremenog muškarca koji nikada ne želi da izgleda zapušteno.
                    <br><br><b>Skratite bradu, brkove i zaliske</b> u jednom potezu.
                    Novi brijač sa visoko preciznim <span class="italic">xPower Trimmer</span> sistemom opremljen je novim električnim motorom visokih
                    performansi, 50% snažnijim i sposobnim da efikasno seče neželjene dlačice.
                    <br><br><span class="italic">xPower Trimmer</span> je dizajniran da vam pomogne da izrazite svoj stil u potpunosti, jer brada govori mnogo o muškarcu.
                    <br><br>
                    <div class="cornerButton">
                        <i class="icon icon-play"></i>
                        <a href="#order_frame" class="scroll_to">PORUČITE SADA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="box-banner" class>
        <div class="content ">
            <div class="innerTitle">
                PROFESIONALNO DIZAJNIRAN DO NAJSITNIJIH DETALJA
            </div>
            <div class="subtitle">
                Glavne karakteristike <span class="italic">xPower Trimmer</span>
            </div>
            <ul class="box-banner-carousel">
                <li class="carousel-cell">
                    <div class="content row col-xs-12 center-xs">
                        <div class="image">
                            <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/1.jpg">
                        </div>
                        <div class="description row center-xs">
                            <div class="title row col-xs-12 middle-xs center-xs">
                                <span>01</span>
                                LITIJUMSKA BATERIJA
                            </div>
                            <div class="text">
                                <span class="italic">Xpower Trimmer</span> poseduje litijumsku bateriju velikog kapaciteta koja vam omogućava da se brijete bilo kada i bilo gde.
                            </div>
                            <div class="cornerButton">
                                <i class="icon icon-play"></i>
                                <a href="#order_frame" class="scroll_to">PORUČITE SADA</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="carousel-cell is-selected">
                    <div class="content row col-xs-12 center-xs">
                        <div class="image">
                            <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/2.jpg">
                        </div>
                        <div class="description row center-xs">
                            <div class="title row col-xs-12 middle-xs center-xs">
                                <span>02</span>
                                TURBO MOTOR
                            </div>
                            <div class="text">
                                Profesionalni motor je moćan i tih, čini da sečivo vibrira visokom frekvencijom i savršeno seče.
                            </div>
                            <div class="cornerButton">
                                <i class="icon icon-play"></i>
                                <a href="#order_frame" class="scroll_to">PORUČITE SADA</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="carousel-cell">
                    <div class="content row col-xs-12 center-xs">
                        <div class="image">
                            <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/3.jpg">
                        </div>
                        <div class="description row center-xs   ">
                            <div class="title row col-xs-12 middle-xs center-xs">
                                <span>03</span>
                                SEČIVO
                            </div>
                            <div class="text">
                                Sečivo od keramičkog čelika <span class="italic">xPower Trimmer</span>
                                nikada ne rđa i pruža dugotrajno visoke performanse brijanja.
                            </div>
                            <div class="cornerButton">
                                <i class="icon icon-play"></i>
                                <a href="#order_frame" class="scroll_to">PORUČITE SADA</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section id="big-g" class>
        <div class="content row col-xs-12 center-xs">
            <div class="feature feature-s2 row col-xs-12 center-xs middle-xs">
                <div class="left-text col-md-4 col-sm-6 end-md center-xs">
                    <div class="feature-item feature-item-c row col-xs-12 center-xs middle-xs">
                        <div class="text">
                            <h2 class="row end-md center-xs middle-xs">
                                ČELIČNA SEČIVA
                            </h2>
                            <p>Profesionalno sečivo od keramičkog čelika sa ergonomskim profilom.</p>
                        </div>
                        <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/1.png">
                    </div>
                    <div class="feature-item feature-item-a row col-xs-12 center-xs middle-xs">
                        <div class="text">
                            <h2 class="row end-md center-xs middle-xs">
                                TALASASTI PROFIL
                            </h2>
                            <p>Oblik sečiva je dizajniran da se prilagodi svim delovima tela.</p>
                        </div>
                        <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/2.png">
                    </div>
                    <div class="feature-item feature-item-a row col-xs-12 center-xs middle-xs">
                        <div class="text">
                            <h2 class="row end-md center-xs middle-xs">
                                ON / OFF DUGME
                            </h2>
                            <p>Jednostavan za upotrebu: jedno dugme za paljenje i gašenje.</p>
                        </div>
                        <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/3.png">
                    </div>
                </div>
                <div class="center-text col-md-4 col-xs-12">
                    <div class="big-g-carousel feature-img">
                        <div class="carousel-cell">
                            <img class src="{{ asset('/') }}purplerelaxFiles/powertrimmer/hand.png">
                        </div>
                    </div>
                </div>
                <div class="right-text col-md-4 col-sm-6 start-md center-xs">
                    <div class="feature-item feature-item-e">
                        <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/4.png">
                        <div class="text">
                            <h2 class="row start-md center-xs middle-xs">
                                VELIKA SNAGA
                            </h2>
                            <p>Ugrađeni motor ima veliku snagu i može da postigne nekoliko hiljada obrtaja u minuti.</p>
                        </div>
                    </div>
                    <div class="feature-item feature-item-g row col-xs-12 center-xs middle-xs">
                        <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/5.png">
                        <div class="text">
                            <h2 class="row start-md center-xs middle-xs">
                                PODESIVO
                            </h2>
                            <p>Podesite svoju bradu tačno na željenu dužinu pomoću 4 priložena češlja za bradu.</p>
                        </div>
                    </div>
                    <div class="feature-item feature-item-a row col-xs-12 center-xs middle-xs">
                        <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/6.png">
                        <div class="text">
                            <h2 class="row start-md center-xs middle-xs">
                                USB PUNJENJE
                            </h2>
                            <p>Puni se uobičajenim USB kablom, možete je priključiti bilo gde.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="text-image-banner" class="redMeshAlpha">
        <div class="content row col-xs-12 center-xs middle-xs no-margin">
            <div class="image">
                <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/animation.gif">
            </div>
            <div class="text">Ultra-oštra sečiva lako i ravnomerno seku čak najduže i najdeblje dlačice. Oslonite se na dugogodišnje iskustvo i svest o kvalitetu xPower-a.</div>
            <img class="trimmer" src="{{ asset('/') }}purplerelaxFiles/powertrimmer/icon_blade.png">
        </div>
    </section>
    <section id="text-image-banner-3" class>
        <div class="content container row col-xs-12 center-xs middle-xs">
            <div class="image">
                <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/packaging.jpg">
            </div>
            <div class="text">
                <div class="innerTitle"><i class="icon icon-ok-circled"></i>SADRŽAJ KOMPLETA</div>
                Specijalna ponuda važi samo do isteka zaliha. Ne propustite ovaj popust i poručite odmah.
                <br><br>
                <b>
                    Unutar kompleta po ceni od
                    {{ $prices[1]['amount'] }}
                    RSD
                    naći ćete:
                </b>
                <br><br>
                <ul>
                    <li><span class="italic">xPower Trimmer</span> električni brijač</li>
                    <li>4 češlja za bradu</li>
                    <li>USB kabl za punjenje</li>
                    <li>Uputstvo</li>
                </ul>
                <br>
            </div>
        </div>
    </section>
    <section id="opinions_secureShopping_wrapper" class="lateralImageGray">
        <div id="opinions" class>
            <div class="container">
                <h2 class="title row col-xs-12 center-xs">MIŠLJENJA NAŠIH KUPACA</h2>
                <p class="subtitle row col-xs-12 center-xs"></p>
                <div class>
                    <div class="opinions-carousel feature-img">
                        <div class="carousel-cell">
                            <div class="facebook-box">
                                <div class="content">
                                    <div class="right-icon">
                                        <i class="icon icon-down-open"></i>
                                    </div>
                                    <div class="row header">
                                        <div class="avatar">
                                            <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/people_3.jpg" alt>
                                        </div>
                                        <div class="name">
                                            <h5><a>Marina Marki</a></h5>
                                            {{--<span class="sub"><span class="date" data-days="-1">2 Settembre 2020</span> alle 17:18</span>--}}
                                        </div>
                                    </div>
                                    <div class="row text">Poklonila sam mužu ovaj trimer i veoma je zadovoljan. Koristi ga već godinu dana bez ikakvih problema. Sve preporuke!</div>
                                    <hr>
                                    <div class="rating row col-xs-12">
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star-half-alt"></i>
                                        <i class="icon icon-star-empty"></i>
                                    </div>
                                </div>
                                {{--<div class="footer">--}}
                                    {{--<a>A 11 persone</a> piace questo elemento.--}}
                                {{--</div>--}}
                            </div>
                        </div>
                        <div class="carousel-cell">
                            <div class="facebook-box">
                                <div class="content">
                                    <div class="right-icon">
                                        <i class="icon icon-down-open"></i>
                                    </div>
                                    <div class="row header">
                                        <div class="avatar">
                                            <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/people_2.jpg" alt>
                                        </div>
                                        <div class="name">
                                            <h5><a>Edin Bešević</a></h5>
                                            {{--<span class="sub"><span class="date" data-days="-1">28 Agosto 2020</span> alle 9:11</span>--}}
                                        </div>
                                    </div>
                                    <div class="row text">
                                        Vrlo kvalitetan proizvod i zaista odlična izrada. Probao sam mnogo brendova, koristim mašine za brijanje već 30 godina,
                                        ali xPower trimer je najbolji do sada. Brije fenomenalno i sa lakoćom, precizan je u milimetar. Kupio sam i bratu jednu.</div>
                                    <hr>
                                    <div class="rating row col-xs-12">
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                    </div>
                                </div>
                                {{--<div class="footer">--}}
                                    {{--<a>A 5 persone</a> piace questo elemento.--}}
                                {{--</div>--}}
                            </div>
                        </div>
                        <div class="carousel-cell">
                            <div class="facebook-box">
                                <div class="content">
                                    <div class="right-icon">
                                        <i class="icon icon-down-open"></i>
                                    </div>
                                    <div class="row header">
                                        <div class="avatar">
                                            <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/people_5.jpg" alt>
                                        </div>
                                        <div class="name">
                                            <h5><a>Mišo Surla</a></h5>
                                            {{--<span class="sub"><span class="date" data-days="-1">1 Ottobre 2020</span> alle 8:01</span>--}}
                                        </div>
                                    </div>
                                    <div class="row text">
                                        Odlično radi svoj posao, jutarnje brijanje mi traje manje od minut. Ranije sam znao da se zadržim i već ujutru iznerviram.
                                        Baterija zaista dugo traje. Podjednako lako brije i dugu i kratku bradu. Za ovaj novac nikada nisam kupio bolji proizvod.
                                        Toplo preporučujem!
                                    </div>
                                    <hr>
                                    <div class="rating row col-xs-12">
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                    </div>
                                </div>
                                {{--<div class="footer">--}}
                                    {{--<a>A 9 persone</a> piace questo elemento.--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="order">
        <div class="content">
            <div class="container">
                <div id="order_frame" class="center">
                    <div class="form-wrapper" id="buy-frame">
                        <form action="{{$orderRoute}}" method="post">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <center>
                                <h3 class="title">Unesite podatke za dostavu</h3>
                            </center>
                            <div class="form-group">
                                <label>Ime i prezime</label>
                                <input type="text" name="name" class="form-control"
                                       placeholder="Ime i prezime" required="required">
                            </div>
                            <div class="form-group">
                                <label>Telefon</label>
                                <input type="tel" name="phone" class="form-control"
                                       placeholder="Telefon" required="required">
                            </div>
                            <div class="form-group">
                                <label>Adresa</label>
                                <input type="text" name="shipping_address" class="form-control"
                                       placeholder="Adresa" required="required">
                            </div>
                            <div class="form-group">
                                <label>Grad</label>
                                <input type="text" name="shipping_city" class="form-control"
                                       placeholder="Grad" required="required">
                            </div>
                            <div class="form-row offer-selection">
                                <div class="col-auto text-center d-flex align-items-center" data-toggle="lightbox">
                                    <img data-jslghtbx style="max-width:100%;max-height:80px;"
                                         src="{{ asset('/') }}purplerelaxFiles/powertrimmer/2979_3bd031eabec8d4615039a5decb44ca9c_1601647648.jpg">
                                </div>
                                <div class="form-group col text-center">
                                    <label>Izaberite količinu</label>
                                    <select name="quantity" class="form-control quantitySelect" required="required" style="cursor: pointer;">
                                        @foreach($prices as $singlePrice)
                                            <option value="{{ $singlePrice['quantity'] }}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                                    @if($singlePrice['is_default']) selected @endif
                                            >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} RSD)
                                                @if($singlePrice['is_free_shipping']) * @endif
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group free-delivery" id="freeShippingDiv" style="display: none;">
                                <div class="text-center">
                                 <span style="
                                    color: black;
                                    padding: 4px;
                                    background: #ffc205;
                                    font-weight: bold;
                                    border-radius: 5px;">
                                 &nbsp;<i class="fa fa-truck"></i> Besplatna dostava!
                                 </span>
                                </div>
                            </div>
                            <center>
                                <button id="submit-button" class="btn btn-lg btn-warning new-sbm-btn" type="submit">ZAVRŠI PORUDŽBINU</button>
                            </center>
                        </form>
                        <br><p>Specijalna ponuda važi samo do isteka zaliha. Ne propustite popust i poručite odmah. <br>Možete platiti direktno kuriru, bez obaveza da plaćate unapred.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="secureShopping" class="grayMesh_light">
        <div class="content container row col-xs-12 center-xs">
            <h1 class="title">Kupovina 100% bez rizika</h1>
            <p class="subtitle">Kupite originalni proizvod na našem sajtu da biste izbegli falsifikat.</p>
            <div class="list">
                <ul>
                    <li class="row col-xs-12 middle-xs start-md center-xs">
                        <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/lock.svg" alt>
                        <div class="opt-con">
                            <h4>100% sigurna kupovina</h4>
                        </div>
                    </li>
                    <li class="row col-xs-12 middle-xs start-md center-xs">
                        <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/delivery.png" alt>
                        <div class="opt-con">
                            <h4>Šaljemo brzom poštom u roku od jednog radnog dana.</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>
<link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/powertrimmer/animate.min.css" type="text/css" media="all">
<link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/powertrimmer/slick.css">
<link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/powertrimmer/slick-theme.css">
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}purplerelaxFiles/powertrimmer/main.js"></script>
@include('components.pixel_footer')
</body>
</html>