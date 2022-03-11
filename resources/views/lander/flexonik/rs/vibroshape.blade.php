<!DOCTYPE html>
<html class="no-js">
<head>
    @include('components.pixel_init')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Linearicons-Free';
            src:url('{{ asset('/') }}fonts/Linearicons-Free.eot@w118d');
            src:url('{{ asset('/') }}fonts/Linearicons-Free.eot@') format('embedded-opentype'),
            url('{{ asset('/') }}fonts/Linearicons-Free.woff@w118d') format('woff'),
            url('{{ asset('/') }}fonts/Linearicons-Free.ttf@w118d') format('truetype'),
            url('{{ asset('/') }}fonts/Linearicons-Free.svg@w118d') format('svg');
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: "FontAwesome";
            src: url("{{ asset('/') }}fonts/fontawesome-webfont.eot");
            src: url("{{ asset('/') }}fonts/fontawesome-webfont.eot") format("embedded-opentype"),
            url("{{ asset('/') }}fonts/fontawesome-webfont.woff2") format("woff2"),
            url("{{ asset('/') }}fonts/fontawesome-webfont.woff") format("woff"),
            url("{{ asset('/') }}fonts/fontawesome-webfont.ttf") format("truetype"),
            url("{{ asset('/') }}fonts/fontawesome-webfont.svg") format("svg");
            font-weight: normal;
            font-style: normal;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/vibroshape/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/vibroshape/main.css">
</head>
<body>
<div class="oz-body-wrap">
    <!-- Start Header Area -->
    <header class="default-header">
        <div class="container-fluid">
            <div class="header-wrap">
                <div class="header-top d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="#">X-Shaper®</a>
                    </div>
                    <div class="main-menubar d-flex align-items-center">
                        <nav class="hide">
                            <a href="#home">X-Shaper®</a>
                            <a href="#comefunziona">Come funziona</a>
                            <a href="#offerta">Offerta</a>
                            <a href="#ordina">Ordina</a>
                            <a href="#chisiamo">Chi Siamo</a>
                        </nav>
                        <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Banner Area -->
    <section class="banner-area relative" id="home">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-center">
                <div class="banner-left col-lg-6">
                    <img class="d-flex mx-auto img-fluid" src="{{ asset('/') }}flexonikFiles/vibroshape/cintura.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="story-content">
                        <h6 class="text-uppercase">X-Shaper® è la cintura dimagrante massaggiante.</h6>
                        <h1><span class="sp-1">Ottieni una <span class="sp-2">silhouette perfetta</span> senza sforzo!</span></h1>
                        <a href="#ordina" class="genric-btn primary circle arrow">Ordina ora <span class="lnr lnr-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <!-- Start Video Area -->
    <section class="video-area pt-40 pb-40">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="video-content">
                <div class="text-center">
                    <h3 class="h2 text-white text-uppercase">Elimina il grasso in pochi minuti al giorno</h3>
                    <h4 class="text-white">Basta posizionare la cintura X-Shaper® intorno alla zona interessata per 10 minuti al giorno. La tecnologia della vibrazione muscolare <b><u>brucia attivamente le cellule di grasso</u></b>.</h4>
                    <a href="#ordina" class="genric-btn primary circle arrow">Ordina ora <span class="lnr lnr-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Video Area -->
    <!-- Start about Area -->
    <section class="about-area pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="story-content">
                        <h2>Dimagrisci velocemente<br>
                            e <span>senza sforzo</span>
                        </h2>
                        <p class="mt-30">Grazie alla semplicità e praticità, X-Shaper® è ideale per chi ha poco tempo da dedicare alla propria forma fisica, e soprattutto per chi desidera <b><u>allenarsi in casa</u></b>, <b><u>senza spese</u></b> e facendo anche altre attività contemporaneamente.</p>
                        <a href="#ordina" class="genric-btn primary circle arrow">Ordina ora <span class="lnr lnr-arrow-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-flex mx-auto imgborder" src="{{ asset('/') }}flexonikFiles/vibroshape/cinturaindossata.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Force Area -->
    <!-- Start Feature Area -->
    <section class="feature-area pt-100 pb-100  relative" id="comefunziona">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
                    <div class="single-feature">
                        <div class="icon">
                            <span class="fa fa-check-circle"></span>
                        </div>
                        <div class="desc">
                            <h2 class="text-uppercase">Il modo più facile e veloce</h2>
                            <p>
                                Indossa la cintura regolabile X-Shaper®, accendi l’interruttore e abbandonati alle vibrazioni prodotte che diffondono un massaggio oscillante.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
                    <div class="single-feature">
                        <div class="icon">
                            <span class="fa fa-check-circle"></span>
                        </div>
                        <div class="desc">
                            <h2 class="text-uppercase">Perdi i centimetri in eccesso</h2>
                            <p>
                                Posiziona la cintura X-Shaper® sulla specifica area del corpo più problematica (addome, fianchi, cosce, glutei) per <b><u>migliorare tono ed elasticità</u></b>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
                    <div class="single-feature">
                        <div class="icon">
                            <span class="fa fa-check-circle"></span>
                        </div>
                        <div class="desc">
                            <h2 class="text-uppercase">Contrasta la cellulite</h2>
                            <p>
                                X-Shaper® è in grado di stimolare la circolazione, favorire l’ossigenazione dei tessuti e <b><u>tonificare il tuo corpo</u></b>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
                    <div class="single-feature">
                        <div class="icon">
                            <span class="fa fa-check-circle"></span>
                        </div>
                        <div class="desc">
                            <h2 class="text-uppercase">Cintura snellente e massaggiante</h2>
                            <p>
                                X-Shaper® favorisce <b><u>in pochi minuti</u></b> di uso quotidiano il rimodellamento di pancia, fianchi, cosce e glutei, tramite il suo efficace sistema di massaggi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
                    <div class="single-feature">
                        <div class="icon">
                            <span class="fa fa-check-circle"></span>
                        </div>
                        <div class="desc">
                            <h2 class="text-uppercase">Indossala quando vuoi</h2>
                            <p>
                                La cintura X-Shaper® ti aiuterà a <b><u>tonificare e modellare</u></b> le fasce muscolari di tutto il tuo corpo restando comodamente a casa.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
                    <div class="single-feature">
                        <div class="icon">
                            <span class="fa fa-check-circle"></span>
                        </div>
                        <div class="desc">
                            <h2 class="text-uppercase">
                                Favorisce il tuo benessere</h3>
                                <p>
                                    X-Shaper® promuove una buona digestione, aiuta la salute della pelle, <b><u>tonifica e migliora i muscoli</u></b> più importanti prevenendo gli infortuni.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start about Area -->
    <section class="about-area pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid d-flex mx-auto" src="{{ asset('/') }}flexonikFiles/vibroshape/scatola.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="story-content">
                        <h2>Svolgi <span>due esercizi</span> <br>
                            al  tempo stesso
                        </h2>
                        <p class="mt-30">Con X-Shaper® svolgi due esercizi in uno: <b><u>le contrazioni muscolari e le vibrazioni</u></b>. L’elettrostimolazione muscolare invia ai muscoli lo stesso segnale
                            che normalmente invierebbe al cervello per farli contrarre e rilassare come quando fai gli esercizi per gli addominali. Le vibrazioni invece ti aiutano ad <b><u>eliminare il grasso</u></b> esattamente come correndo su un tapis roulant.
                        </p>
                        <a href="#ordina" class="genric-btn primary circle arrow">Ordina ora <span class="lnr lnr-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Force Area -->
    <!-- Start Feature Area -->
    <section class="feature-area pt-100 pb-100  relative boxrisparmia1" id="offerta">
        <div class="overlay overlay-bg boxrisparmia2"></div>
        <div class="container">
            <div class="row">
                <div class="boxprice">
                    <h2 class="text-white">Risparmia <span>fino al 45%</span>!</h2>
                    <p class="text-white">
                        Ordina la cintura X-Shaper® insieme ad un amico e risparmia fino al 45%.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
                    <div class="single-feature">
                        <div class="desc text-center">
                            <h2 class="text-uppercase">1 Cintura <br /> X-Shaper®</h2>
                            <h3 class="text-center price">
                                {{ $prices[1]['amount'] }} RSD
                            </h3>
                            <p class="textpricedec">
                                Spedizione Gratuita<br />
                                Pagamento alla consegna<br />
                            </p>
                            <a href="#ordina" class="genric-btn primary circle arrow">Ordina ora</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
                    <div class="single-feature">
                        <div class="desc text-center">
                            <h2 class="text-uppercase">2 Cinture <br /> X-Shaper®</h2>
                            <h3 class="text-center price">€ 79,00</h3>
                            <p class="textpricedec">
                                Spedizione Gratuita<br />
                                Pagamento alla consegna<br />
                            </p>
                            <a href="#ordina" class="genric-btn primary circle arrow">Ordina ora</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
                    <div class="single-feature">
                        <div class="desc text-center">
                            <h2 class="text-uppercase">3 Cinture <br />  X-Shaper®</h2>
                            <h3 class="text-center price">€ 99,00</h3>
                            <p class="textpricedec">
                                Spedizione Gratuita<br />
                                Pagamento alla consegna<br />
                            </p>
                            <a href="#ordina" class="genric-btn primary circle arrow">Ordina ora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Banner Area -->
    <section class="generic-banner elements-banner relative pt-100 pb-100">
        <div class="container">
            <div class="row  align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="banner-content text-center">
                        <img class="d-flex mx-auto img-fluid widimg50" src="{{ asset('/') }}flexonikFiles/vibroshape/cintura.jpg" alt="">
                        <h2><b>Tonifica</b>, brucia e massaggia</h2>
                        <p>La cintura dimagrante X-Shaper® è stata studiata per <b><u>tonificare, bruciare i grassi e massaggiare</u></b> grazie alla combinazione dei suoi diversi programmi di doppia oscillazione e vibrazione e alle sue 5 velocità.</p>
                        <a href="#ordina" class="genric-btn primary circle arrow">Ordina ora</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <section class="contact-area pt-100 pb-100 relative" id="ordina">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="single-contact col-lg-12 col-md-12">
                    <h2 class="text-white">INCREBIDILE <span>FASCIA VIBRANTE MASSAGGIANTE</span> X-Shaper®</h2>
                    <p class="text-white">
                        Inserisci i tuoi dati qui sotto e clicca sul tasto "ordina ora" per riceverlo a casa tua
                        <b>
                            <u>
                                a soli
                                {{ $prices[1]['amount'] }} RSD
                            </u>
                        </b>
                        e pagarlo <b><u>direttamente alla consegna</u></b>!
                    </p>
                </div>
            </div>
            <form method="post" action="#" style="background: #fff; padding: 5%;color:#000">
                <center>
                    <h3 class="title">COMPILA IL MODULO</h3>
                </center>
                <div class="form-group">
                    <label>Nome e Cognome</label>
                    <input type="text" name="name" class="form-control" placeholder="Inserisci Nome e Cognome" required="required"/>
                </div>
                <div class="form-group">
                    <label>Indirizzo e n. civico</label>
                    <input type="text" name="other[address]" class="form-control" placeholder="ES. Via Aldo moro, 130" required="required"/>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label>Città</label>
                        <input type="text" name="other[city]" class="form-control" placeholder="ES. Milano" required="required"/>
                    </div>
                    <div class="form-group col-md-4">
                        <label>CAP</label>
                        <input type="text" name="other[zipcode]" class="form-control" placeholder="ES. 94112" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                    <label>Telefono (Meglio Cellulare)</label>
                    <input type="tel" name="phone" class="form-control" placeholder="Inserisci il tuo numero di telefono" required="required"/>
                </div>
                <div class="form-row">
                    <div class="col-md-1 d-none d-md-block text-center">
                        <img style="max-width:100%;max-height:80px" src="{{ asset('/') }}flexonikFiles/vibroshape/2891_7064f4ac2b547b3d5fe189c105bb46ba_1533196256.jpg">
                    </div>
                    <div class="form-group col-md-11">
                        <label>Scegli un'offerta</label>
                        <select name="other[quantity]" class="form-control" required="required">
                            <option value="1" selected="selected">
                                1 X-Shaper
                                {{ $prices[1]['amount'] }}
                                RSD
                            </option>
                            <option value="2">2 X-Shaper 79 €</option>
                            <option value="3">3 X-Shaper 99 €</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <span style="
                           color: black;
                           padding: 4px;
                           background: #ffc205;
                           font-weight: bold;
                           border-radius: 5px;
                           ">&nbsp;<i class="fa fa-truck"></i> La spedizione è gratuita!! </span>
                    </div>
                </div>
                <div class="form-group">
                    <label>Note per il corriere</label>
                    <textarea name="other[notes]" class="form-control" rows="2" placeholder="ES. Citofonare al Sig. Rossi"></textarea>
                </div>
                <div class="preloader loader-1"></div>
                <center>
                    <div id="info-privacy"><small>Cliccando "Completa l'acquisto" confermi di aver preso visionedell'informativa sulla privacy</a>.</small></div>
                    <button id="submit-button" class="btn btn-lg btn-warning new-sbm-btn" type="submit">Completa l'acquisto</button>
                </center>
            </form>
        </div>
    </section>
    <section class="faq-area pt-100 pb-100" id="chisiamo">
        <div class="container">
            <div class="row">
                <div class="story-content1">
                    <h2>Chi Siamo</h2>
                    <p class="mt-30">Il nostro è un negozio online che ogni settimana ricerca prodotti unici a prezzi eccezionali!
                    </p>
                </div>
                <div class="faq-content col-lg-12 col-md-12">
                    <div class="single-faq">
                        <h2 class="text-uppercase">
                            In quanto tempo spediamo?
                        </h2>
                        <p>
                            Dal momento in cui effettui il tuo ordine, riceverai il prodotto comodamente a casa tua in 2-3 giorni lavorativi tramite corriere espresso.
                        </p>
                    </div>
                    <div class="single-faq">
                        <h2 class="text-uppercase">
                            Posso pagare alla consegna?
                        </h2>
                        <p>
                            Si, e’ possibile pagare il prodotto direttamente alla consegna (contrassegno) o anticipatamente tramite carta di credito, Paypal o Postepay in maniera semplice e sicura.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}flexonikFiles/vibroshape/popper.min.js"></script>
<script src="{{ asset('/') }}shared_files/bootstrap.js"></script>
{{--<script src="https://belt2.xcartpro.com/r1/js/main.js"></script>--}}
<script>

    $(document).ready(function(){
        "use strict";

        var window_width 	 = $(window).width(),
            window_height 		 = window.innerHeight,
            header_height 		 = $(".default-header").height(),
            header_height_static = $(".site-header.static").outerHeight(),
            fitscreen 			 = window_height - header_height;


        $(".fullscreen").css("height", window_height)
        $(".fitscreen").css("height", fitscreen);


        // -------   Active Mobile Menu-----//

        $(".menu-bar").on('click', function(e){
            e.preventDefault();
            $("nav").toggleClass('hide');
            $("span", this).toggleClass("lnr-menu lnr-cross");
            $(".main-menu").addClass('mobile-menu');
        });
        $('a[href^="#"]').click(function (){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        })
    });
</script>
</body>
</html>