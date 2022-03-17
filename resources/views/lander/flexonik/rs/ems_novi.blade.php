<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}flexonikFiles/ems_novi/favicon.png" type="image/x-icon" />
    <style>
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: local('Roboto'), local('Roboto-Regular'), url({{ asset('/') }}fonts/roboto.ttf) format('truetype');
        }
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: local('Roboto Bold'), local('Roboto-Bold'), url({{ asset('/') }}fonts/robotobold.ttf) format('truetype');
        }
        label {
            margin-bottom: 5px !important;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}shared_files/owl.carousel.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/ems_novi/styles.css" />
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <!-- offer -->
    <header class="offer_section offer_top">
        <div class="title_block">
            <p class="subtitle lt0">Allenamento efficace dei muscoli</p>
            <h1 class="main_title lt1">XPOWER2.0</h1>
            <p class="description lt2">
                Bastano 23 minuti al giorno per un corpo ideale!
            </p>
        </div>
        <ul>
            <li class="lt3">Brucia il grasso</li>
            <li class="lt4">Allena i muscoli</li>
            <li class="lt5">Mantiene il tono</li>
        </ul>
        <div class="discount">
            <b class="lt6">Sconto</b>
            <span class="lt7">-50%</span>
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text lt8">
                    Prezzo standard:
                </div>
                <div class="value lt9">
                    {{ $prices[1]['originalPrice'] }} RSD
                </div>
            </div>
            <div class="price_item new">
                <div class="text lt10">
                    Prezzo in offerta:
                </div>
                <div class="value lt11">
                    {{ $prices[1]['amount'] }} RSD
                </div>
            </div>
        </div>
        <br>
        <a class="button lt16" href="#order-form">Poručite sada</a>
    </header>
    <!-- /offer -->
    <!-- about -->
    <section class="about_section">
        <h2 class="lt18">Ma che cos’è XPOWER2.0?</h2>
        <div class="text_block">
            <p class="lt19">
                XPOWER2.0 è stato ideato per dimagrire, sviluppare la
                massa muscolare e rilassare i muscoli.
            </p>
            <p class="lt20">
                L’elettorstimolatore per dimagrire
                <b>XPOWER2.0 garantisce un risultato veloce senza
                    sforzi particolari,</b>
                grazie alla potente azione del massaggiatore. Risultato
                con l’utilizzo dello stimolatore: «bruciano» gli ammassi
                grassi, i muscoli e la pelle diventano più tonici ed
                elastici
                <b>,sintomi di salute e giovinezza</b>
            </p>
        </div>
        <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/ems_novi/about__image_new.jpg" title="XPOWER2.0"/>
    </section>
    <!-- /about -->
    <section class="benefits_section">
        <h2 class="lt21">Cosa ricevete da XPOWER2.0?</h2>
        <div class="benefits_list">
            <div class="benefit_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/ems_novi/benefits__benefit1_image.jpg" title="XPOWER2.0"/>
                <p class="lt22">Correzione delle zone problematiche</p>
            </div>
            <div class="benefit_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/ems_novi/benefits__benefit2_image.jpg" title="XPOWER2.0"/>
                <p class="lt23">Allenamento mirato dei muscoli</p>
            </div>
            <div class="benefit_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/ems_novi/benefits__benefit3_image.jpg" title="XPOWER2.0"/>
                <p class="lt24">Si rinforza il corpo</p>
            </div>
            <div class="benefit_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/ems_novi/benefits__benefit4_image.jpg" title="XPOWER2.0"/>
                <p class="lt25">Calo di peso</p>
            </div>
        </div>
        <div class="text_block lt26">
            E tutto questo senza uscire di casa e senza sforzi
            <b>in 23 minuti al giorno!</b>
        </div>
    </section>
    <!-- /benefits -->
    <!-- info -->
    <section class="info_section">
        <h2 class="lt27">
            XPOWER2.0 L’ALLENATORE IDEALE PER TUTTI QUELLI CHE:
        </h2>
        <ul>
            <li class="lt28">
                Non hanno tempo o forze per andare in palestra ma
                vogliono bei muscoli
            </li>
            <li class="lt29">
                Hanno uno stile di vita sedentario ma capiscono che i
                muscoli vanno allenati
            </li>
            <li class="lt30">
                Vogliono perdere peso senza sforzarsi troppo
            </li>
            <li class="lt31">
                Si allenano già ma vogliono scolpire perfettamente i
                muscoli
            </li>
            <li class="lt32">
                Vogliono mantenere sempre il corpo in tono senza
                sprecare forze e tempo
            </li>
        </ul>
    </section>
    <!-- /info -->
    <!-- slider -->
    <div class="slider owl-carousel">
        <img src="{{ asset('/') }}flexonikFiles/ems_novi/slider__image1.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
        <img src="{{ asset('/') }}flexonikFiles/ems_novi/slider__image2.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
        <img src="{{ asset('/') }}flexonikFiles/ems_novi/slider__image3.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
        <img src="{{ asset('/') }}flexonikFiles/ems_novi/slider__image4.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
    </div>
    <!-- /slider -->
    <!-- order steps -->
    <section class="order_steps_section">
        <h2 class="lt33">Come ordinare XPOWER2.0?</h2>
        <div class="steps_list">
            <div class="step_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/ems_novi/order_steps__step1_image.jpg" title="XPOWER2.0"/>
                <div class="number">1</div>
                <p class="lt34">Compilate il modulo sul nostro sito</p>
            </div>
            <div class="step_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/ems_novi/order_steps__step2_image.jpg" title="XPOWER2.0"/>
                <div class="number">2</div>
                <p class="lt35">
                    un nostro manager vi contatterà per definire i
                    dettagli dell’ordine
                </p>
            </div>
            <div class="step_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/ems_novi/order_steps__step3_image.jpg" title="XPOWER2.0"/>
                <div class="number">3</div>
                <p class="lt36">
                    Vi consegniamo la merce entro 1-3 giorni
                </p>
            </div>
            <div class="step_item">
                <img alt="EMS Trainer" src="{{ asset('/') }}flexonikFiles/ems_novi/order_steps__step4_image.jpg" title="XPOWER2.0"/>
                <div class="number">4</div>
                <p class="lt37">Pagate al momento della consegna</p>
            </div>
        </div>
        <a class="button lt38" href="#order-form">Ordinare ora</a>
    </section>
    <!-- /order steps -->
    <!-- reviews -->
    <section class="reviews_section">
        <h2 class="lt39">Recensioni degli acquirenti</h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img src="{{ asset('/') }}flexonikFiles/ems_novi/reviews__review1_photo.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
                <div class="author_info">Valerio Masiello, 30 anni</div>
                <p>
                    Mi sono sempre preso cura della silhouette, ma non
                    sono mai riuscito a liberarmi della pancia, gli
                    addominali non si vedevano. Poi su un forum
                    specifico ho letto della cinta XPOWER2.0. Chiunque
                    l’abbia provata afferma che ci si può allenare
                    stando comodamente seduti sul divano. Io ovviamente
                    all’inizio ridevo, poi mi sono studiato come
                    funziona quest’aggeggio e ho deciso di provare. E
                    non me ne lamento! E’ semplicemente un miracolo: In
                    due settimane meno 4кg. Ed è proprio tutto quel
                    grasso della pancia che non mi dava pace. Ora mi
                    godo i miei bei addominali scolpiti.
                </p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}flexonikFiles/ems_novi/reviews__review2_photo.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
                <div class="author_info">Salvatore Agosti, 25 anni</div>
                <p>
                    Che dire, l’effetto ha superato le aspettative. Ad
                    essere sinceri non mi sarei mai aspettato che
                    sarebbe stato così forte. Non so come spiegarlo a
                    parole, i muscoli semplicemente iniziano a muoversi
                    da soli. Questo apparecchio funziona. Se passate
                    molto tempo in poltrona i vostri muscoli non fanno
                    alcuno sforzo. In questo modo invece i muscoli si
                    sforzano e come, se ci si aggiunge anche un po’ di
                    attività fisica andando a lavoro, il gioco è fatto.
                </p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}flexonikFiles/ems_novi/reviews__review3_photo.jpg" alt="EMS Trainer" title="XPOWER2.0"/>
                <div class="author_info">Valentina Pietrangeli, 25 anni</div>
                <p>
                    XPOWER2.0 mi ha interessato a lungo ma non potevo
                    credere funzionasse. Non ho neanche un minuto per
                    andare in palestra ma volevo un corpo in forma lo
                    stesso. Come ho attaccato l’apparecchio al corpo e
                    l’ho acceso sono rimasta senza parole. I muscoli
                    hanno iniziato a contrarsi da soli. Io non facevo
                    niente e loro si muovevano. Che bello! In 4
                    settimane sono dimagrita 6 kg e ho steso tutto il
                    corpo! E non ho dovuto fare nulla, mi è bastato
                    accenderlo ogni giorno. Sono veramente felice!
                </p>
            </div>
        </div>
    </section>
    <!-- /reviews -->
    <!-- offer -->
    <section class="offer_section offer_bottom">
        <div class="title_block">
            <p class="subtitle lt54">
                Allenamento efficace dei muscoli
            </p>
            <h4 class="main_title lt55">XPOWER2.0</h4>
            <p class="description lt56">
                Bastano 23 minuti al giorno per un corpo ideale!
            </p>
        </div>
        <ul>
            <li class="lt57">Brucia i grassi</li>
            <li class="lt58">Allena i muscoli</li>
            <li class="lt59">Mantiene il tono</li>
        </ul>
        <div class="discount">
            <b class="lt60">Sconto</b>
            <span class="lt61">-50%</span>
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text lt62">
                    Prezzo standard:
                </div>
                <div class="value lt63">
                    {{ $prices[1]['originalPrice'] }} RSD
                </div>
            </div>
            <div class="price_item new">
                <div class="text lt64">
                    Prezzo in offerta:
                </div>
                <div class="value lt65">
                    {{ $prices[1]['amount'] }} RSD
                </div>
            </div>
        </div>
        <div class="lt70" style="margin: 30px 40px 30px; color: #fff; text-align: center;">
            Garantiamo una consegna completamente anonima. Il prodotto
            viene tenuto nascosto agli occhi indiscreti grazie ad un
            imballaggio ad hoc, e durante la spedizione avviene tutto in
            maniera anonima.
        </div>
        <form action="{{$orderRoute}}" class="lead_form" id="order-form" method="post">
            {{csrf_field()}}
            @include('lander.naturapharm.components.form_hidden_fields')
            <div class="row">
                <center>
                    <h3 class="title" style="font-size: 22px;">PODACI ZA DOSTAVU</h3>
                </center>
                <br>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label><b>Ime i prezime</b></label>
                        <input class="form-control input-lg name" type="text" placeholder="Ime i prezime" name="name" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label><b>Telefon</b></label>
                        <input class="form-control input-lg phone" type="tel" id="phone" placeholder="Telefon" name="phone" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label><b>Adresa</b></label>
                        <input class="form-control input-lg other-simple-data" type="text" placeholder="Ulica i broj" name="shipping_address"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label><b>Grad</b></label>
                        <input class="form-control input-lg other-simple-data" type="text" placeholder="Grad" name="shipping_city"/>
                    </div>
                </div>
                <center>
                    <button id="submit-button" class="btn btn-lg btn-success" style="margin-top: 20px;font-size: 22px;" type="submit">
                        ZAVRŠITE PORUDŽBINU
                    </button>
                </center>
            </div>
        </form>
    </section>
    <!-- /offer -->
</div>
<!-- scripts -->
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $("a[href^='#']").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
            return false;
        });
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            smartSpeed: 300,
            mouseDrag: false,
            pullDrag: false,
            dots: false,
            nav: true,
            navText: ""
        });
    });
</script>
<!-- /scripts -->
@include('components.pixel_footer')
</body>
</html>