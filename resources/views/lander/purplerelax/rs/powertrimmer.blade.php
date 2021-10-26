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
                    <li><a href="#big-g" class="scroll_to">Panoramica</a></li>
                    <li><a href="#slider" class="scroll_to">Tecnologia</a></li>
                    <li><a href="#text-image-banner-3" class="scroll_to">Offerta</a></li>
                    <li><a href="#order_frame" class="hide button navMenu_button scroll_to">Acquista</a></li>
                </ul>
            </div>
            <div class="row col-md-4 col-sm-8 col-xs-12 end-xs middle-xs">
                <ul class="menu">
                    <li><a href="#order_frame" class="button navMenu_button scroll_to">Acquista</a></li>
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
                                <span>FACILE</span> E <span>VELOCE</span> DA USARE
                            </div>
                        </div>
                    </div>
                    <div class="spec row col-xs-12 start-xs middle-xs">
                        <div class="content row col-xs-12 start-xs middle-xs no-margin-padding">
                            <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/icon.png">
                            <div class="text">
                                RASATURA <span>VELOCE</span> ED <span>EFFICACE</span>
                            </div>
                        </div>
                    </div>
                    <div class="spec row col-xs-12 start-xs middle-xs">
                        <div class="content row col-xs-12 start-xs middle-xs no-margin-padding">
                            <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/icon.png">
                            <div class="text">
                                TAGLIO DI <span>PRECISIONE</span> CON LAMA <span>ANGOLATA</span>
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
                <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/logo_3.png" alt> &egrave; il nuovo rasoio professionale pi&ugrave; affilato,
                pi&ugrave; veloce, pi&ugrave; efficiente rispetto a tutte le generazioni precedenti
            </div>
            <div class="lower row col-xs-12 center-xs middle-xs">
                <div class="countdown_button row col-xs-12 center-xs middle-xs">
                    <div class="content row col-xs-12 center-xs middle-xs">
                        {{--<div class="countdown row col-sm-6 col-xs-12 center-xs middle-xs">--}}
                            {{--<div id="time" class="time">--}}
                                {{--<div class="timer__tx center">TEMPO RIMASTO PER ACQUISTARE:</div>--}}
                                {{--<ul>--}}
                                    {{--<li>--}}
                                        {{--00--}}
                                        {{--<div class="podp">ORE</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--37--}}
                                        {{--<div class="podp">MINUTI</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--11--}}
                                        {{--<div class="podp">SECONDI</div>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="btn row col-sm-6 col-xs-12 center-xs middle-xs">
                            <a href="#order_frame" class="scroll_to" title="ORDINA ORA">
                                <div class="mybutton_round">ORDINA ORA</div>
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
                <span class="surtitle">SOLUZIONE PROFESSIONALE A BASSO COSTO</span>
                <span class="title">xPower Trimmer &egrave; la soluzione perfetta per il viso e i capelli</span>
                <span class="subtitle">Lo shaver <span class="italic">xPower Trimmer</span> &egrave; dotato di una
                  tecnologia di rasatura innovativa che consente di iniziare ogni giornata con una rasatura
                  assolutamente pulita e delicata.</span>
                <div class="bottom row col-xs-12 center-xs middle-xs">
                    <div class="box row col-md-6 col-xs-12 center-xs middle-xs">
                        <span class="title"><i class="icon icon-ok-circled"></i>Rade</span>
                        <span class="description">Passalo contropelo, usa la lama di piatto sul viso e radi la barba
                        di qualsiasi lunghezza con disinvoltura.</span>
                    </div>
                    <div class="box row col-md-6 col-xs-12 center-xs middle-xs">
                        <span class="title"><i class="icon icon-ok-circled"></i>Regola</span>
                        <span class="description">Regola la tua barba esattamente alla lunghezza che vuoi tu con i 4
                        pettini regolabarba inclusi.</span>
                    </div>
                    <div class="box row col-md-6 col-xs-12 center-xs middle-xs">
                        <span class="title"><i class="icon icon-ok-circled"></i>Design</span>
                        <span class="description">Progettato per essere al contempo robusto e confortevole.
                        Impugnatura in solido metallo con trama anti-scivolo.</span>
                    </div>
                    <div class="box row col-md-6 col-xs-12 center-xs middle-xs">
                        <span class="title"><i class="icon icon-ok-circled"></i>Rifinisce</span>
                        <span class="description">Ottieni bordi perfetti grazie alla lama in acciaio. Puoi usarlo in
                        qualsiasi direzione per definire facilmente il tuo look in pochi secondi.</span>
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
                    <div class="innerTitle">
                        Un alleato del tuo stile
                    </div>
                    A volte vuoi semplicemente dare una rinfrescata al look regolando la barba di due o tre giorni,
                    altre invece hai voglia di sperimentare qualcosa di nuovo. Per ogni esigenza di regolazione
                    della barba esiste un prodotto in grado di soddisfarla al meglio: <span class="italic"><b>xPower
                     Trimmer</b></span>.
                    <br><br>
                    Il regolabarba e capelli &egrave; uno strumento indispensabile per lo styling dell'uomo moderno
                    che non vuole mai sembrare trascurato.
                    <br><br><b>Rifinisci barba, baffi, regola pizzetto e basette</b> in un solo colpo. Il nuovo
                    rasoio con sistema ad alta precisione <span class="italic">xPower Trimmer</span> &egrave; dotato
                    di un nuovo motore elettrico ad alte prestazioni, pi&ugrave; potente del 50%, capace di tagliare
                    efficamente i peli superflui e garantire una rifinitura pulita.
                    <br><br><span class="italic">xPower Trimmer</span> &egrave; progettato per aiutarti ad esprimere
                    il tuo stile al meglio, perch&eacute; la barba dice molto di un uomo ed &egrave; importante
                    sentirsi a proprio agio ogni giorno, in qualsiasi contesto!
                    <br><br>
                    <div class="cornerButton"><i class="icon icon-play"></i><a href="#order_frame"
                                                                               class="scroll_to">ACQUISTA ORA</a></div>
                </div>
            </div>
        </div>
    </section>
    <section id="box-banner" class>
        <div class="content ">
            <div class="innerTitle">
                PROGETTATO NEI MINIMI DETTAGLI
            </div>
            <div class="subtitle">
                Caratteristiche principali di <span class="italic">xPower Trimmer</span>
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
                                BATTERIA AL LITIO
                            </div>
                            <div class="text">
                                <span class="italic">Xpower Trimmer</span> &egrave; provvisto di batteria al litio
                                ad alta capacit&agrave; per permetterti di rasarti con tutta la calma che vuoi.
                            </div>
                            <div class="cornerButton"><i class="icon icon-play"></i><a href="#order_frame"
                                                                                       class="scroll_to">ACQUISTA ORA</a></div>
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
                                MOTORE TURBO
                            </div>
                            <div class="text">
                                Il motore professionale &egrave; potente e silezioso, fa vibrare la lama ad alta
                                frequenza per un taglio senza eguali.
                            </div>
                            <div class="cornerButton"><i class="icon icon-play"></i><a href="#order_frame"
                                                                                       class="scroll_to">ACQUISTA ORA</a></div>
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
                                LAMA
                            </div>
                            <div class="text">
                                La lama in acciaio ceramico di <span class="italic">xPower Trimmer</span> non si
                                arruginisce mai, offre prestazioni di taglio a lungo termine.
                            </div>
                            <div class="cornerButton"><i class="icon icon-play"></i><a href="#order_frame"
                                                                                       class="scroll_to">ACQUISTA ORA</a></div>
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
                                LAME IN ACCIAIO
                            </h2>
                            <p>Lama in acciaio ceramico professionale con profilo ergonomico.</p>
                        </div>
                        <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/1.png">
                    </div>
                    <div class="feature-item feature-item-a row col-xs-12 center-xs middle-xs">
                        <div class="text">
                            <h2 class="row end-md center-xs middle-xs">
                                PROFILO ONDULATO
                            </h2>
                            <p>La forma della lama &egrave; studiata per adattarsi a tutte le parti del corpo.</p>
                        </div>
                        <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/2.png">
                    </div>
                    <div class="feature-item feature-item-a row col-xs-12 center-xs middle-xs">
                        <div class="text">
                            <h2 class="row end-md center-xs middle-xs">
                                PULSANTE ON/OFF
                            </h2>
                            <p>Semplice da usare: un solo pulsante per controllare il dispositivo.</p>
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
                                ALTA POTENZA
                            </h2>
                            <p>Il motore integrato &egrave; ad alta potenza e pu&ograve; vibrare migliaia di volte
                                al minuto.
                            </p>
                        </div>
                    </div>
                    <div class="feature-item feature-item-g row col-xs-12 center-xs middle-xs">
                        <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/5.png">
                        <div class="text">
                            <h2 class="row start-md center-xs middle-xs">
                                REGOLABILE
                            </h2>
                            <p>Regola la tua barba esattamente alla lunghezza che vuoi tu con i 4 pettini
                                regolabarba inclusi.
                            </p>
                        </div>
                    </div>
                    <div class="feature-item feature-item-a row col-xs-12 center-xs middle-xs">
                        <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/6.png">
                        <div class="text">
                            <h2 class="row start-md center-xs middle-xs">
                                RICARICA USB
                            </h2>
                            <p>Si ricarica tramite un comune cavo USB, puoi collegarlo ovuque.</p>
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
            <div class="text">
                Le lame ultra-affilate tagliano facilmente anche i peli pi&ugrave; lunghi o spessi, senza tirare e
                in modo uniforme; affidati alla pluriennale esperienza e alla consapevolezza della qualit&agrave; di
                xPower.
            </div>
            <img class="trimmer" src="{{ asset('/') }}purplerelaxFiles/powertrimmer/icon_blade.png">
        </div>
    </section>
    <section id="text-image-banner-3" class>
        <div class="content container row col-xs-12 center-xs middle-xs">
            <div class="image">
                <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/packaging.jpg">
            </div>
            <div class="text">
                <div class="innerTitle"><i class="icon icon-ok-circled"></i>CONTENUTO DEL KIT</div>
                Un'offerta speciale, valida solo fino ad esaurimento scorte. Non lasciarti scappare lo sconto e
                ordina subito.
                <br><br>
                <b>
                    All'interno del kit a soli
                    {{ $prices[1]['amount'] }}
                    RSD
                    troverai:
                </b>
                <br><br>
                <ul>
                    <li>Rasoio elettrico <span class="italic">xPower Trimmer</span>.</li>
                    <li>4 pettini regolabarba.</li>
                    <li>Cavo USB di ricarica in <b>omaggio</b>.</li>
                    <li>Manuale.</li>
                </ul>
                <br>
            </div>
        </div>
    </section>
    <section id="opinions_secureShopping_wrapper" class="lateralImageGray">
        <div id="opinions" class>
            <div class="container">
                <h2 class="title row col-xs-12 center-xs">Opinioni dei nostri clienti da <i
                            class="icon icon-facebook-squared"></i></h2>
                <p class="subtitle row col-xs-12 center-xs">I risultati dei nostri clienti parlano da soli.</p>
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
                                            <h5><a>Maria Rovasi</a></h5>
                                            <span class="sub"><span class="date" data-days="-1">2 Settembre 2020</span> alle 17:18</span>
                                        </div>
                                    </div>
                                    <div class="row text">
                                        Comprato come tagliacapelli maschile durante il lockdown. L'ho regalato a
                                        mio marito, si trova molto bene. Funziona sempre, intuitivo e con molte
                                        regolazioni.
                                    </div>
                                    <hr>
                                    <div class="rating row col-xs-12">
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star"></i>
                                        <i class="icon icon-star-half-alt"></i>
                                        <i class="icon icon-star-empty"></i>
                                    </div>
                                </div>
                                <div class="footer">
                                    <a>A 11 persone</a> piace questo elemento.
                                </div>
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
                                            <h5><a>Enrico Pazzini</a></h5>
                                            <span class="sub"><span class="date" data-days="-1">28 Agosto 2020</span> alle 9:11</span>
                                        </div>
                                    </div>
                                    <div class="row text">
                                        Impugnatura comodissima. Leggero. Davvero ben fatto. Ho provato tantissime
                                        marche. Uso tagliacapelli da 30 anni ma xpower Trimmer per me &egrave; la
                                        migliore. Trovo che l'accessorio per radere i peli vada davvero bene. Anche
                                        questo dopo averne provati altri sia il migliore. Lo ricomprerei.
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
                                <div class="footer">
                                    <a>A 5 persone</a> piace questo elemento.
                                </div>
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
                                            <h5><a>Luca Tenerin</a></h5>
                                            <span class="sub"><span class="date" data-days="-1">1 Ottobre 2020</span> alle 8:01</span>
                                        </div>
                                    </div>
                                    <div class="row text">
                                        Fa benissimo il suo lavoro, ho notato un netto miglioramento nel taglio
                                        della barba rispetto al precedente regolabarba che avevo. La batteria dura
                                        veramente tanto, preciso, e completamente lavabile. La tecnologia che si
                                        adatta ad ogni tipo di barba funziona, personalmente ho notato che la regola
                                        molto meglio rispetto ad altri modelli. Ottimo rapporto qualit&agrave;
                                        prezzo!!
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
                                <div class="footer">
                                    <a>A 9 persone</a> piace questo elemento.
                                </div>
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
                        <form action="#" method="post">
                            <center>
                                <h3 class="title">COMPILA IL MODULO</h3>
                            </center>
                            <div class="form-group">
                                <label>Nome e Cognome</label>
                                <input type="text" name="name" class="form-control"
                                       placeholder="Inserisci Nome e Cognome" required="required">
                            </div>
                            <div class="form-group">
                                <label>Telefono (Meglio Cellulare)</label>
                                <input type="tel" name="phone" class="form-control"
                                       placeholder="Inserisci il tuo numero di telefono" required="required">
                            </div>
                            <div class="form-group">
                                <label>Indirizzo e n. civico</label>
                                <input type="text" name="other[address]" class="form-control"
                                       placeholder="ES. Via Aldo moro, 130" required="required">
                            </div>
                            <div class="form-group">
                                <label>Città</label>
                                <input type="text" name="other[city]" class="form-control" placeholder="ES. Milano"
                                       required="required">
                            </div>
                            <div class="form-group">
                                <label>CAP</label>
                                <input type="text" name="other[zipcode]" class="form-control" placeholder="ES. 94112"
                                       required="required">
                            </div>
                            <div class="form-row offer-selection">
                                <div class="col-auto text-center d-flex align-items-center" data-toggle="lightbox">
                                    <img data-jslghtbx style="max-width:100%;max-height:80px;"
                                         src="{{ asset('/') }}purplerelaxFiles/powertrimmer/2979_3bd031eabec8d4615039a5decb44ca9c_1601647648.jpg">
                                </div>
                                <div class="form-group col text-center">
                                    <label>Scegli un'offerta</label>
                                    <select name="other[quantity]" class="form-control" required="required">
                                        <option value="1" selected="selected">1 Xpower Trimmer </option>
                                        <option value="2">2 Xpower Trimmer </option>
                                        <option value="3">3 Xpower Trimmer </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group free-delivery">
                                <div class="text-center">
                                 <span style="
                                    color: black;
                                    padding: 4px;
                                    background: #ffc205;
                                    font-weight: bold;
                                    border-radius: 5px;
                                    ">
                                 &nbsp;<i class="fa fa-truck"></i> La spedizione è gratis!
                                 </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Note per il corriere</label>
                                <input type="text" name="other[notes]" class="form-control" rows="2" placeholder="ES. Citofonare al Sig. Rossi">
                            </div>
                            <center>
                                <button id="submit-button"
                                        class="btn btn-lg btn-warning new-sbm-btn" type="submit">Completa l'acquisto</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="secureShopping" class="grayMesh_light">
        <div class="content container row col-xs-12 center-xs">
            <h1 class="title">Acquisto 100% senza rischi</h1>
            <p class="subtitle">Compra il prodotto originale sul nostro sito per evitare contraffazioni.</p>
            <div class="list">
                <ul>
                    <li class="row col-xs-12 middle-xs start-md center-xs">
                        <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/lock.svg" alt>
                        <div class="opt-con">
                            <h4>100% acquisto sicuro</h4>
                        </div>
                    </li>
                    <li class="row col-xs-12 middle-xs start-md center-xs">
                        <img src="{{ asset('/') }}purplerelaxFiles/powertrimmer/delivery.svg" alt>
                        <div class="opt-con">
                            <h4>Consegna GRATUITA in 1 - 2 giorni lavorativi</h4>
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