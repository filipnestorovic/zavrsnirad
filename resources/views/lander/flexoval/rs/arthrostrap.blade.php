<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" href=>
    <link href="{{ asset('/') }}flexovalFiles/arthrostrap/index.css" rel="stylesheet">
</head>
<body>
{{--
<div class="popup" id="popup">
   --}}
{{--
<div class="popup__content">
   --}}
{{--<span id="close">×</span>--}}
{{--
<div class="popup__text">
   --}}
{{--
<h2 class="popup__text-wait">ASPETTA!</h2>
--}}
{{--
<p class="popup__text-offer">Ottieni subito lo sconto unico!</p>
--}}
{{--
<p class="popup__text-discount"> L'offerta è indirizzata <span class="text--bold">SOLO a te </span> e scadrà--}}
{{--fra 15 minuti.
</p>
--}}
{{--
<p class="popup__text-collect"> Per ritirare la confezione promozionale, torna al sito web. </p>
--}}
{{--<a href="#anchor" class="popup__button-further close_btn">VOGLIO OTTENERE LO SCONTO</a> <span--}}
{{--class="popup__button-back" id="close-text">No, grazie</span>--}}
{{--
</div>
--}}
{{--
<div class="popup__img"><a href="#anchor"><img src="{{ asset('/') }}flexovalFiles/arthrostrap/product-image.png" alt="Product photo"--}}
{{--class="popup__img-product close_btn"/></a>
</div>
--}}
{{--
</div>
--}}
{{--
</div>
--}}
{{--
<div class="overlay"></div>
--}}
<section class="section-1">
    <div class="section-wrap">
        <div class="flex-wrap">
            <div class="flex-wrap__column">
                <div class="img-box--logo">
                    <img src="{{ asset('/') }}flexovalFiles/arthrostrap/main-arthrostrap-logo.svg" alt="Logo"/>
                </div>
                <div class="text-box">
                    <p>COMPILA IL MODULO</p>
                </div>
                <div class="discount__titile">
                    <p> Ottieni Athrostrap con lo <span class="text-yellow span-bold"> SCONTO del 50%</span></p>
                </div>
                <div class="discount-box">
                    <p class="discount-box__header"><span class="text-yellow">NON ESITARE!</span></p>
                    <div class="discount-box__price">
                        <div class="box__price box__price--old">
                            <p>Invece che</p>
                            <p class="price al-cost-promo">
                                {{ $prices[1]['originalPrice'] }}
                                RSD
                            </p>
                        </div>
                        <div class="box__price box__price--new">
                            <p>A soli</p>
                            <p class="price price--green al-cost">
                                {{ $prices[1]['amount'] }}
                                RSD
                            </p>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="form-container">
                        <form class="main-order-form al-form" method="POST" action="#">
                            <div class="first_form">
                                <div class="first_form--1">
                                    <div class="input_group">
                                        <div class="input_wrapper">
                                            <input type="text" name="name" class="input name_form-bottom" placeholder="Inserisci il tuo nome qui" required="">
                                        </div>
                                    </div>
                                    <div class="input_group">
                                        <div class="input_wrapper">
                                            <div class="hover">
                                                <input type="tel" name="phone" class="input phone_form-bottom" placeholder="Numero di telefono…" required="">
                                                <div class="hover_circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-wrapper form_button1">
                                        <button type="submit" class="form_btn">SI, VOGLIO ORDINARE<br/> ARTHROSTRAP CON LO SCONTO</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        {{--<div id="modal_wrapper">--}}
                            {{--<div class="modal_wrapper_close" id="modal_wrapper_close"><img src="{{ asset('/') }}flexovalFiles/arthrostrap/close.png" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="modal_content">--}}
                                {{--<div class="form_wrapper">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
                {{--<div class="promotion__time">--}}
                    {{--<p>La promozione scade tra:</p>--}}
                    {{--<div class="timer">--}}
                        {{--<script src="../../megatimer.ru/get/35e736f9ff912a4ec1eb95fdc3a669ee.js"></script>--}}
                    {{--</div>--}}
                    {{--<div class="img-box--clock"><img src="{{ asset('/') }}flexovalFiles/arthrostrap/clock-desctop.png" alt="Zegar"/></div>--}}
                {{--</div>--}}
            </div>
            <div class="flex-wrap__column">
                <div class="blue__border">
                    <p><span class="span-bold">Scoperta medica!</span> Con Arthrostrap, dimenticherai di aver mai
                        sofferto di dolori alle articolazioni e alla colonna vertebrale. Questa formula moderna
                        <span class="span-bold">elimina istantaneamente il dolore e rigenera le articolazioni danneggiate in soli 28 giorni!</span>
                    </p>
                </div>
                <h4 class="title__h4"> Dì STOP ai farmaci chimici invasivi, le iniezioni e gli unguenti
                    inefficaci!
                </h4>
                <div class="img-box--product"><img src="{{ asset('/') }}flexovalFiles/arthrostrap/product-image.png" alt="Produkt"/></div>
            </div>
        </div>
        <div class="benefits__wrap">
            <div class="img-box--arrow"><img src="{{ asset('/') }}flexovalFiles/arthrostrap/icon-arrow-down.svg" alt=""/></div>
            <h4 class="benefits__title"> GRAZIE AD ARTHROSTRAP<br/> IN MODO RAPIDO ED EFFICIENTE: </h4>
            <div class="benefits__items">
                <ul class="list__left">
                    <li class="item"><span class="span-bold">Eliminerai il dolore cronico alle ginocchia,</span> fianchi
                        e alla colonna vertebrale;
                    </li>
                    <li class="item"><span class="span-bold">Ricostruirai e rinforzerai le articolazioni,</span> i
                        tendini e i muscoli dell'87%;
                    </li>
                    <li class="item"><span class="span-bold">Riacquisterai il 100% della forma fisica</span> smetterai
                        di temere la disabilità;
                    </li>
                    <li class="item"> Una volta per tutte, <span class="span-bold">ti libererai della rigidità, dell'intorpidimento e del "crepitio" delle tue articolazioni;</span>
                    </li>
                </ul>
                <ul class="list__right">
                    <li class="item"> In 14 giorni, <span class="span-bold">eliminerai le degenerazioni</span>, le
                        infiammazioni ed il gonfiore;
                    </li>
                    <li class="item"><span class="span-bold">7 volte più velocemente rigenererai</span> le articolazioni
                        del ginocchio e dell'anca dopo lesioni e traumi;
                    </li>
                    <li class="item"><span class="span-bold">Rimarrai in perfetta forma</span> fisica per anni;</li>
                    <li class="item"><span class="span-bold">Guadagnerai 2 volte più energia</span> e ti godrai di nuovo
                        la vita!
                    </li>
                    <li class="item"><span class="span-bold">Proteggerai il sistema muscoloscheletrico</span> dalle
                        malattie e dall'invecchiamento;
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section-2">
    <div class="section-wrap">
        <h2><span class="span-bold text-red">OGNUNO DI NOI È ESPOSTO</span> <br/>ALLE MALATTIE ARTICOLARI! </h2>
        <div class="causes__wrap">
            <div class="causes__box causes__box--top">
                <p> Se uno di questi punti riguarda anche te, in futuro potresti avere delle lesioni alle
                    articolazioni:
                </p>
            </div>
            <div class="causes__box causes__box--item">
                <div class="img-box--item"><img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec2-1.jpg" alt="Nadwaga foto"/></div>
                <div class="red__content--item">
                    <p><span class="span-bold">Sovrappeso</span> e zero esercizio fisico</p>
                </div>
            </div>
            <div class="causes__box causes__box--item">
                <div class="img-box--item"><img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec2-2.jpg" alt="Nadmierna aktywnośc fizyczna foto"/></div>
                <div class="red__content--item">
                    <p>Attività fisica<span class="span-bold"> eccessiva</span></p>
                </div>
            </div>
            <div class="causes__box causes__box--item">
                <div class="img-box--item"><img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec2-3.jpg" alt="Wiek foto"/></div>
                <div class="red__content--item">
                    <p>Età<span class="span-bold"> superiore ai 35 anni</span></p>
                </div>
            </div>
            <div class="causes__box causes__box--item">
                <div class="img-box--item"><img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec2-4.jpg" alt="Stany zapane foto"/></div>
                <div class="red__content--item">
                    <p><span class="span-bold">Infiammazioni</span>, infezioni, malattie croniche </p>
                </div>
            </div>
            <div class="causes__box causes__box--item">
                <div class="img-box--item"><img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec2-5.jpg" alt="Nadwaga foto"/></div>
                <div class="red__content--item">
                    <p><span class="span-bold">Traumi frequenti</span>, gonfiori, lividi </p>
                </div>
            </div>
        </div>
        <div class="content__bottom">
            <p><span class="span-bold">Arthrostrap</span> combatte le malattie delle articolazioni e della colonna
                vertebrale e <span class="span-bold">ne previene la degenerazione</span>. Questo metodo rivoluzionario
                <span class="span-bold">arresta ed elimina</span> arresta ed elimina <span class="span-bold">nelle prime fasi del problema</span>,
                sia in quelle che <span class="span-bold">per molti anni</span> hanno sofferto di disturbi cronici alle
                articolazioni.
            </p>
        </div>
    </div>
</section>
<section class="section-3">
    <div class="section-wrap">
        <h2> ARTHROSTRAP –<br/> LA RIVOLUZIONE TANTO <span
                    class="span-bold">ATTESA NELLA LOTTA CONTRO LE ARTICOLAZIONI</span> E LA COLONNA VERTEBRALE
            DANNEGGIATA
        </h2>
        <div class="green__border">
            <p> „Questa formula biomedica, brevettata dal Dr. Cruise, <span class="span-bold">è il modo migliore per dare sollievo istantaneamente al ginocchio</span>,
                all'anca, alla colonna vertebrale e per rigenerare in modo non invasivo e permanente le articolazioni
                danneggiate!”
            </p>
        </div>
        <div class="advantages__wrap">
            <div class="advantages__item">
                <div class="img-box--item"><img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec3-natural.svg" alt="Ikona naturas"/></div>
                <p class="content__item"> È un metodo completamente sicuro, che si basa sugli ultimi sviluppi della
                    biomagnetoterapia. È al <span class="text-green">100% NATURALE</span> e non causa alcun effetto
                    collaterale.
                </p>
            </div>
            <div class="advantages__item">
                <div class="img-box--item"><img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec3-magnetic.svg" alt="Ikona pole magnetyczne"/></div>
                <p class="content__item"> Grazie ai magneti di ferrite incorporati nella fascia analgesico-rigenerativa,
                    il campo magnetico penetra direttamente alla fonte del dolore, <span class="text-green">FUNZIONANDO 7 VOLTE PIÙ EFFICACEMENTE</span>
                    di qualsiasi altro metodo conosciuto.
                </p>
            </div>
            <div class="advantages__item">
                <div class="img-box--item"><img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec3-bicycle.svg" alt="Ikona rower"/></div>
                <p class="content__item"> La <span class="text-green">fascia IN POCO MENO DI 28 GIORNI FA OTTENERE LA PIENA FORMA FISICA </span>
                    anche nelle persone con degenerazioni gravi e a lungo termine, infiammazioni o complicazioni dopo
                    lesioni e traumi al ginocchio, all'anca e alla colonna vertebrale.
                </p>
            </div>
            <div class="advantages__item">
                <div class="img-box--item"><img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec3-bones.svg" alt="Ikona stawów"/></div>
                <p class="content__item"> Inoltre, <span class="text-green">RIDUCE LA TENSIONE</span> ai muscoli
                    dell'anca, della tibia e dei glutei, il che allevia il dolore non solo quando si cammina, ma anche
                    quando si è a riposo.
                </p>
            </div>
        </div>
        <h4>È un metodo che ricostruirà le tue articolazioni dall'interno!</h4>
    </div>
</section>
<section class="section-4">
    <div class="section-wrap">
        <h4> Per confermare l'alta efficacia di Arthrostrap, <span class="span-bold">un gruppo di 1473 volontari</span>
            si è sottoposto ad alcuni test indipendenti in un rinomato istituto di ricerca di Ginevra in Svizzera
        </h4>
        <h3>In soli 28 giorni:</h3>
        <div class="progress__wrap">
            <div class="progress__item">
                <div class="img-box__item img-box__item--yellow">
                    <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec4-bar-yellow-mob.png" class="img__bar--mobile" alt="pasek postępu"/>
                    <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec4-bar-yellow.jpg" class="img__bar--desktop" alt="pasek postępu"/>
                </div>
                <p class="bar__yellow-p">
                    <span class="bar__yellow">Più del 98%</span>
                    <span class="span-bold">degli intervistati si è addirittura liberato dai dolori cronici alle ginocchia, ai fianchi, alla colonna vertebrale</span>
                    e dai gonfiori perenni che li accompagnano.
                </p>
            </div>
            <div class="progress__item">
                <div class="img-box__item img-box__item--orange">
                    <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec4-bar-orange-mob.png" class="img__bar--mobile" alt="pasek postępu"/>
                    <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec4-bar-orange.jpg" class="img__bar--desktop" alt="pasek postępu"/>
                </div>
                <p class="bar__orange-p">
                    <span class="bar__orange">Il 91%</span> ha ammesso che la formula
                    <span class="span-bold">ha eliminato irrevocabilmente tutte le infiammazioni</span> anche 7 volte
                    più velocemente di altri preparati disponibili sul mercato.
                </p>
            </div>
            <div class="progress__item">
                <div class="img-box__item img-box__item--green">
                    <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec4-bar-green-mob.png" class="img__bar--mobile" alt="pasek postępu"/>
                    <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec4-bar-green.jpg" class="img__bar--desktop" alt="pasek postępu"/>
                </div>
                <p class="bar__green-p">
                    <span class="bar__green">9 persone su 10</span> hanno dichiarato di aver
                    <span class="span-bold"> ritrovato la piena efficienza</span> e il 100% di fluidità dei movimenti.
                </p>
            </div>
            <div class="progress__item">
                <div class="img-box__item img-box__item--blue">
                    <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec4-bar-blue-mob.png" class="img__bar--mobile" alt="pasek postępu"/>
                    <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec4-bar-blue.jpg" class="img__bar--desktop" alt="pasek postępu"/>
                </div>
                <p class="bar__blue-p">
                    <span class="bar__blue">Il 99,7%</span> degli intervistati ha dichiarato
                    <span class="span-bold">che il dolore è scomparso </span>dopo soli 8 minuti dalla prima applicazione.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section-5">
    <div class="section-wrap">
        <h3> COSA RENDE ARTHROSTRAP UN'ARMA <span class="span-bold">COSÌ EFFICACE PER LA SALUTE DELLE ARTICOLAZIONI E DELLA COLONNA VERTEBRALE?</span>
        </h3>
        <div class="pros-wrap">
            <div class="img-box">
                <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec5-knee-pulse.jpg" alt="Przepływ krwi"/>
            </div>
            <p>
                <span class="span-bold">Gli impulsi magnetici</span> della giusta potenza
                <span class="span-bold">penetrano immediatamente nelle zone doloranti</span>
                ed estinguono immediatamente i segnali di dolore a livello cellulare.
            </p>
        </div>
        <div class="pros-wrap">
            <div class="img-box">
                <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec5-blood.jpg" alt="Przepływ krwi"/>
            </div>
            <p> Grazie alle loro proprietà termostatiche, stimolano la circolazione cellulare, che
                <span class="span-bold"> accelera i processi rigenerativi del 300%</span>. Allo stesso tempo, gli
                impulsi innescano naturalmente la ricostruzione della cartilagine e del liquido sinoviale.
            </p>
        </div>
        <div class="pros-wrap">
            <div class="img-box">
                <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec5-exercise.jpg" alt="Przepływ krwi"/>
            </div>
            <p><span class="span-bold">È sufficiente indossare regolarmente la fascia perché la rigenerazione proceda 24 ore su 24</span>.
                Si fa quello che si fa di solito e le articolazioni diventano più giovani e tornano a pieno regime in
                modo che le degenerazioni spariscano in 28 giorni.
            </p>
        </div>
        <div class="pros-wrap">
            <div class="img-box">
                <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec5-pills-vaccines.jpg" alt="Przepływ krwi"/>
            </div>
            <p><span class="span-bold">Senza prodotti chimici velenosi</span>, senza la riabilitazione inefficace,
                noiosa e senza i più piccoli effetti collaterali!
            </p>
        </div>
    </div>
</section>
<section class="section-6">
    <div class="section-wrap">
        <div class="flex-wrap flex-wrap--top">
            <h4> Niente più farmaci chimici invasivi, iniezioni e unguenti inefficaci! </h4>
            <a href="#order_form">
                <div class="order-btn"> SÌ, VOGLIO ORDINARE<br/> ARTHROSTRAP AD UN PREZZO PROMOZIONALE</div>
            </a>
        </div>
        <div class="flex-wrap flex-wrap--bottom">
            <div class="img-box">
                <img src="{{ asset('/') }}flexovalFiles/arthrostrap/product-image.png" alt="Produkt"/>
            </div>
        </div>
    </div>
</section>
<section class="section-7">
    <div class="section-wrap">
        <h2>SCOPRI LA <span class="span-bold">TECNOLOGIA DEL FUTURO!</span></h2>
        <div class="flex__wrap">
            <div class="flex__box">
                <div class="img-box">
                    <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec7-knee-step1.jpg" alt="Etap 1"/>
                </div>
                <p><span class="span-bold">La fascia stimola il processo di produzione del liquido sinoviale</span>,
                    accelera la produzione delle proteine del tessuto connettivo (collagene) fino a 4 volte, il che
                    aumenta la forza muscolare del 78%.
                </p>
            </div>
            <div class="flex__box">
                <div class="img-box">
                    <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec7-knee-step2.jpg" alt="Etap 2"/>
                </div>
                <p><span class="span-bold">Rafforza i muscoli e i tendini articolari 5 volte</span>, grazie alla
                    decompressione dell'89% elimina le microlesioni che si formano nella colonna vertebrale sulla
                    superficie ossea, riduce la pressione dolorosa su dischi e nervi.
                </p>
            </div>
            <div class="flex__box">
                <div class="img-box">
                    <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec7-knee-step3.jpg" alt="Etap 3"/>
                </div>
                <p> In un batter d'occhio <span class="span-bold">elimina i dolori articolari</span>, elimina le
                    infiammazioni e le degenerazioni e ricostruisce la cartilagine delle ginocchia, dei fianchi e della
                    colonna vertebrale.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section-8">
    <div class="section-wrap">
        <h2><span class="span-bold">GLI ORTOPEDICI</span> COMMENTATO ARTHROSTRAP</h2>
        <div class="doctor__wrap">
            <div class="img-box">
                <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec8-doctor-mobile.jpg" class="img__doctor--mobile" alt="Doktor"/>
            </div>
            <div class="doctor__text">
                <div class="doctor__text--content">
                    <p> Al giorno d'oggi, l'età media delle persone con disturbi ortopedici è sempre più bassa. Nella
                        mia clinica accolgo sempre più ventenni che soffrono di gravi malattie articolari, le quali
                        rendono difficili le loro attività quotidiane.
                    </p>
                    <p> Tuttavia, sono convinto che i farmaci, le iniezioni dolorose, gli unguenti unti o le operazioni
                        rischiose siano le peggiori soluzioni possibili. Portano a complicazioni e conseguenze fatali
                        per la salute e agiscono solo temporaneamente, senza affrontare le cause del problema. <span
                                class="span-bold">Il metodo biomedico sviluppato dal Dr. Cruise è il modo più efficace per trattare le malattie delle articolazioni e della colonna vertebrale che ho sperimentato durante i miei 32 anni di attività medica</span>.
                        Non provoca effetti collaterali o danni al corpo.
                    </p>
                    <p> Il trattamento è completamente indolore e ha effetti duraturi e immediati. 8 pazienti su 10
                        hanno ricostruito completamente il loro sistema scheletrico-articolare in 28 giorni e quelli con
                        i danni più avanzati hanno avuto bisogno di soli 45 giorni. <span class="span-bold">Inoltre, il 99,2% dei pazienti ha rimosso il dolore durante la prima ora di applicazione della fascia</span>.
                        Arthrostrap è il chiaro leader di mercato per tutti i disturbi articolari e spinali.
                    </p>
                </div>
                <div class="show-btn"></div>
                <div class="doctor__sign">
                    <div class="img-sign">
                        <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec8-doctor-signature.svg" alt="Podpis"/>
                    </div>
                    <p><span class="text-green span-bold">Arturo Paoletti</span><br/> chirurgo ortopedico </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-9">
    <div class="section-wrap">
        <h2>ARTHROSTRAP <span class="span-light">vs</span> ALTRI METODI</h2>
        <div class="img-box">
            <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec9-table-mobile.png" class="img__table--mobile" alt="Tabela"/>
            <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec9-table-desktop.png" class="img__table--desktop" alt="Tabela"/>
        </div>
        <p class="section-9__description"> Questa rivoluzionaria formula biomedica, brevettata da un eminente esperto di
            biofisica, è <span class="span-bold">il modo migliore per contrastare i disturbi articolari</span>. A
            differenza di iniezioni, compresse e unguenti, che spesso iniziano a funzionare in ritardo, <span
                    class="span-bold">la fascia allevia istantaneamente</span> il dolore alle ginocchia, alla colonna
            vertebrale o alle anche <span class="span-bold">rigenera e stabilizza completamente</span> le articolazioni.
            Elimina l'infiammazione, il dolore, la rigidità muscolare e <span
                    class="span-bold">tutte le degenerazioni</span> – raggiungendo la <span class="span-bold">causa del problema</span>,
            mentre altri metodi combattono solo i sintomi. Di conseguenza, ripristina <span class="span-bold">la piena forma fisica in meno di 4 settimane</span>.
            Inoltre, la fascia è <span class="span-bold">completamente sicura</span> per la tua salute. A differenza di
            iniezioni, compresse e unguenti, <span class="span-bold">non provoca effetti collaterali</span>, allergie,
            dipendenza o macchie sui vestiti.
        </p>
    </div>
</section>
<section class="section-10">
    <div class="section-wrap">
        <h2> PERCHÉ LA FASCIA DEL DOTTOR CRUISE<br/> <span class="text-green span-bold">FUNZIONA PIÙ EFFICACEMENTE DI ALTRI METODI?</span>
        </h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec10-testimonial-1-mobile.jpg" class="img__slide--mobile" alt="Slide 1"/>
                        <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec10-testimonial-1-desktop.jpg" class="img__slide--desktop" alt="Slide 1"/>
                        <div class="img__sign">
                            <p class="slide__name"><span class="span-bold">Martina</span> <br/> (28 anni) Pesaro </p>
                            <span class="slide__brakets"></span>
                        </div>
                    </div>
                    <div class="slide__text">
                        <p> I miei problemi articolari sono iniziati quando avevo 25 anni. Sono una persona molto attiva
                            fisicamente e lavoro quotidianamente come istruttrice fitness. Purtroppo, il mio stile di
                            vita ha contribuito ai miei problemi al ginocchio. Ho usato diversi unguenti e ho fatto
                            molti esercizi di riabilitazione, ma il dolore non è andato via. Ho anche preso in
                            considerazione la chirurgia. Eppure il mio nuovo ortopedico mi ha raccomandato Arthrostrap.
                            Già dal primo giorno di utilizzo della fascia, il dolore è scomparso e il secondo giorno
                            sono stata libera di tornare alle lezioni di fitness. Ora mi sento benissimo e posso
                            dedicarmi alle mie passioni senza problemi!
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec10-testimonial-2-mobile.jpg" class="img__slide--mobile" alt="Slide 2"/>
                        <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec10-testimonial-2-desktop.jpg" class="img__slide--desktop" alt="Slide 2"/>
                        <div class="img__sign">
                            <p class="slide__name"><span class="span-bold">Dario</span> <br/> (52 anni) Ostia </p>
                            <span class="slide__brakets"></span>
                        </div>
                    </div>
                    <div class="slide__text">
                        <p> Gli anni passati lavorando seduto hanno avuto un forte impatto sulla mia salute. A volte la
                            mia spina dorsale mi disubbidiva completamente e dovevo stare a letto per una settimana.
                            Andai dal medico che mi prescrisse questa fascia. All'inizio non credevo che potesse servire
                            a qualcosa, sospettavo che fosse un'altra cinesata. E invece no! Da quando ho iniziato a
                            indossare Arthrostrap, il dolore è completamente scomparso. Da allora, non ho più problemi
                            con la mia spina dorsale e mi sento come se avessi di nuovo 20 anni!
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec10-testimonial-3-mobile.jpg" class="img__slide--mobile" alt="Slide 3"/>
                        <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec10-testimonial-3-desktop.jpg" class="img__slide--desktop" alt="Slide 3"/>
                        <div class="img__sign">
                            <p class="slide__name"><span class="span-bold">Barbara</span> <br/> (69 anni) Genova </p>
                            <span class="slide__brakets"></span>
                        </div>
                    </div>
                    <div class="slide__text">
                        <p> Da quando ho scoperto di soffrire di artrite, ho pensato che tutto quello che potevo fare
                            era un intervento chirurgico. Avevo un osso gonfio sul piede che mi faceva terribilmente
                            male. Le scarpe non mi andavano bene e avevo un grosso problema di movimento. A causa di
                            tutto questo non potevo nemmeno andare a prendere i miei nipoti all'asilo. Poi però ho
                            scoperto questa fascia e ho deciso di provarla. A causa della mia condizione, l'ortopedico
                            mi ha raccomandato una versione di Arthrostrap più potente. All'inizio non credevo che
                            potesse funzionare, dopo tutto avevo preso tanti medicinali... Ma alla fine ho deciso di
                            provarla. Non potevo crederci, ma il dolore era passato in un batter d'occhio e dopo solo 2
                            settimane mi ero completamente liberato della malattia. Ora posso godermi la vita come una
                            volta!
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec10-testimonial-4-mobile.jpg" class="img__slide--mobile" alt="Slide 4"/>
                        <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec10-testimonial-4-desktop.jpg" class="img__slide--desktop" alt="Slide 4"/>
                        <div class="img__sign">
                            <p class="slide__name"><span class="span-bold">Alessandro</span> <br/> (31 anni) Milano </p>
                            <span class="slide__brakets"></span>
                        </div>
                    </div>
                    <div class="slide__text">
                        <p> Lavoro fisicamente, quindi la grave degenerazione della mia colonna vertebrale, della quale
                            ho iniziato a soffrire in cantiere, mi ha praticamente privato della possibilità di
                            lavorare. Prendevo delle pillole, ma non mi aiutavano affatto. Mi facevano male allo stomaco
                            e continuavo a correre di continuo al gabinetto. Alla fine ho iniziato a cercare
                            qualcos'altro e ho scoperto questa fascia. Ho provato e sono rimasto sorpreso che questa
                            piccola cosa potesse essere così efficace. Dopo pochi minuti il dolore era sparito e dopo 2
                            giorni potevo tornare al lavoro. Raccomanderei questa fascia a chiunque abbia un problema
                            simile.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec10-testimonial-5-mobile.jpg" class="img__slide--mobile" alt="Slide 5"/>
                        <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec10-testimonial-5-desktop.jpg" class="img__slide--desktop" alt="Slide 5"/>
                        <div class="img__sign">
                            <p class="slide__name"><span class="span-bold">Giovanni</span> <br/> (73 anni) Trento </p>
                            <span class="slide__brakets"></span>
                        </div>
                    </div>
                    <div class="slide__text">
                        <p> Invecchiando mi sentivo sempre peggio a causa dei problemi all'anca, il dolore era
                            insopportabile. Poiché soffrivo di osteoporosi e di AR, avevo paura di finire su una sedia a
                            rotelle. Pensavo che non ci fosse più alcun soccorso, ma per fortuna ho trovato un ottimo
                            specialista che mi ha raccomandato di indossare questa fascia. Dopo un mese, quando sono
                            andato a fare delle analisi, il dottore è rimasto scioccato dai miei risultati e ora passo
                            anche le nottate intere a ballare nel nostro locale Senior Club. Mi sento di nuovo un
                            giovanotto.
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
<section class="section-11">
    <div class="section-wrap">
        <h2> ARTHROSTRAP È UN PRODOTTO CHE <span class="span-bold">PUÒ VANTARE DI UN'OTTIMA REPUTAZIONE!</span></h2>
        <div class="flex-wrap">
            <div class="img-box img-box--conference"><img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec11-conference.jpg" alt="Konferencja"/>
                <img src="{{ asset('/') }}flexovalFiles/arthrostrap/certificate-badge-1.svg" class="img__badge img__badge--1" alt="Znak jakości"/>
                <img src="{{ asset('/') }}flexovalFiles/arthrostrap/certificate-badge-2.svg" class="img__badge img__badge--2" alt="Znak jakości"/>
            </div>
            <div class="img-box img-box--certyfikat">
                <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec11-certificate-720.png" alt="Certyfikat"/>
            </div>
        </div>
    </div>
</section>
<section class="section-12">
    <div class="section-wrap">
        <h2>COME ORDINARE <span class="span-light">ARTHROSTRAP?</span></h2>
        <div class="flex-wrap">
            <div class="flex__item">
                <div class="img-box">
                    <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec12-order-step1.png" alt="Krok 1"/>
                </div>
                <h4>PASSO <span class="span-bold">1</span></h4>
                <p><span class="span-bold">Effettua il tuo ordine online sul sito web</span>, compilando il modulo
                    sottostante
                </p>
            </div>
            <div class="flex__item">
                <div class="img-box">
                    <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec12-order-step2.png" alt="Krok 2"/>
                </div>
                <h4>PASSO <span class="span-bold">2</span></h4>
                <p> Uno dei nostri rappresentanti <span class="span-bold">ti contatterà entro 60 minuti</span></p>
            </div>
            <div class="flex__item">
                <div class="img-box">
                    <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec12-order-step3.png" alt="Krok 3"/>
                </div>
                <h4>PASSO <span class="span-bold">3</span></h4>
                <p> Imballeremo il tuo ordine con cura <span class="span-bold">e lo spediremo il giorno stesso</span></p>
            </div>
            <div class="flex__item">
                <div class="img-box">
                    <img src="{{ asset('/') }}flexovalFiles/arthrostrap/sec12-order-step4.png" alt="Krok 4"/>
                </div>
                <h4>PASSO <span class="span-bold">4</span></h4>
                <p> Il corriere ritirerà<span class="span-bold"> il pagamento del tuo ordine alla consegna</span></p>
            </div>
        </div>
        <p class="section-12__subtitle"> ORDINA E OTTIENI LE TUE ARTICOLAZIONI COMPLETAMENTE SANE IN SOLI 28 GIORNI!</p>
    </div>
</section>
<section class="section-1 section-13" id="order_form">
    <div class="section-wrap">
        <div class="flex-wrap">
            <div class="flex-wrap__column">
                <div class="text-box">
                    <p>COMPILA IL MODULO</p>
                </div>
                <div class="discount__titile">
                    <p> Ottieni Athrostrap con lo <span class="text-yellow span-bold">SCONTO del 50%</span></p>
                </div>
                <div class="discount-box">
                    <p class="discount-box__header"><span class="text-yellow">NON ESITARE!</span></p>
                    <div class="discount-box__price">
                        <div class="box__price box__price--old">
                            <p>Invece che</p>
                            <p class="price l-cost-promo">
                                {{ $prices[1]['originalPrice'] }}
                                RSD
                            </p>
                        </div>
                        <div class="box__price box__price--new">
                            <p>A soli </p>
                            <p class="price price--green al-cost">
                                {{ $prices[1]['amount'] }}
                                RSD
                            </p>
                        </div>
                    </div>
                </div>
                <div class="form-section">
                    <div class="form-container">
                        <form class="main-order-form al-form" method="POST" action="#">
                            <div id="anchor" class="first_form">
                                <div class="input_group">
                                    <div class="input_wrapper">
                                        <input type="text" name="name" class="input name_form-bottom" placeholder="Inserisci il tuo nome qui" required="">
                                    </div>
                                </div>
                                <div class="input_group">
                                    <div class="input_wrapper">
                                        <div class="hover">
                                            <input type="tel" name="phone" class="input phone_form-bottom" placeholder="Numero di telefono…" required="">
                                            <div class="hover_circle"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-wrapper form_button1">
                                    <div class="alertbox-bottom alertbox--3">Compila correttamente il modulo!</div>
                                    <button type="submit" class="form_btn-bottom">SI, VOGLIO ORDINARE<br/> ARTHROSTRAP
                                        CON LO SCONTO
                                    </button>
                                </div>
                            </div>
                        </form>
                        {{--<div id="footer_modal_wrapper">--}}
                            {{--<div class="modal_wrapper_close" id="modal_wrapper_close-footer">--}}
                                {{--<img src="{{ asset('/') }}flexovalFiles/arthrostrap/close.png" alt="">--}}
                            {{--</div>--}}
                            {{--<span class="hours"></span>--}}
                            {{--<span>:</span>--}}
                            {{--<span class="minutes"></span>--}}
                            {{--<span>:</span>--}}
                            {{--<span class="seconds"></span>--}}
                            {{--<div class="modal_content">--}}
                                {{--<div class="form_wrapper">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
                {{--<div class="promotion__time">--}}
                    {{--<p>La promozione scade tra:</p>--}}
                    {{--<div class="timer timer2">--}}
                        {{--<script src="../../megatimer.ru/get/35e736f9ff912a4ec1eb95fdc3a669ee.js"></script>--}}
                    {{--</div>--}}
                    {{--<div class="img-box--clock"><img src="{{ asset('/') }}flexovalFiles/arthrostrap/clock-desctop.png" alt="Zegar"/></div>--}}
                {{--</div>--}}
            </div>
            <div class="flex-wrap__column">
                <div class="benefits__wrap">
                    <ul class="benefits__items">
                        <li class="item"><span class="span-bold">Elimina il dolore cronico</span> alle ginocchia, ai fianchi e alla colonna vertebrale</li>
                        <li class="item"><span class="span-bold">Ripristina e rafforza</span> le articolazioni, i tendini e i muscoli</li>
                        <li class="item"><span class="span-bold">Elimina</span> le degenerazioni, le infiammazioni e il gonfiore</li>
                        <li class="item"><span class="span-bold">Recupera il 100% dell` efficienza</span> e mantienila stabile per molti anni</li>
                    </ul>
                </div>
                <div class="img-box--product img-box--product13"><img src="{{ asset('/') }}flexovalFiles/arthrostrap/product-image.png" alt="Produkt"/></div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}flexovalFiles/arthrostrap/swiper-bundle.min.js"></script>
<script>
    new Swiper(".swiper-container",{
        slidesPerView: 1,
        spaceBetween: 80,
        loop: !0,
        pagination: {
            el: ".swiper-pagination",
            clickable: !0
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        keyboard: {
            enabled: !0,
            onlyInViewport: !1
        }
    });

    /*scroll*/
    $(function(){
        $("a[href^='#']").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
            return false;
        });
    });
</script>
</body>
</html>