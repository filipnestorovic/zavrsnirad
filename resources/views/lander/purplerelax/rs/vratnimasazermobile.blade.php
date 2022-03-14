<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=480">
    <meta name="description" content="">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/favicon.png" type="icon/png">
    <style>@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Medium.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Medium.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Medium.ttf') format('truetype');font-weight:500;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Bold.ttf') format('truetype');font-weight:700;font-style:normal}</style>
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/style.css">
</head>
<body>
<div class="wrap">
    <section class="b1">
        <h1> Neck <span> Ring</span> Plus</h1>
        <h2 class="gradient"> Massaggiatore a impulsi multifunzionale per collo e tutto il corpo</h2>
        <div class="sale"> solo oggi! <span> -53%</span> <b> Risparmio di 66 &euro;</b></div>
        <div class="effect"> Effetto di massaggio professionale</div>
        <div class="pulse">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <ul class="checklist">
            <li>
                <p> Allevia la fatica e il dolore all'istante</p>
            </li>
            <li>
                <p> Ha un effetto di rilassamento</p>
            </li>
            <li>
                <p> Migliora la qualità e la profondità del sonno</p>
            </li>
        </ul>
        <div class="formbox">
            <h3> Sbrigati a ordinare con uno sconto!</h3>
            <ul class="price">
                <li>
                    {{ $prices[1]['originalPrice'] }} <small>RSD</small>
                </li>
                <li>
                    {{ $prices[1]['amount'] }} <small>RSD</small>
                </li>
            </ul>
            <a href="#order_form" class="btn"> Ordina ora</a>
        </div>
    </section>
    <section class="b2">
        <h2 class="title"><span> Allevia il dolore di tutto<br> in pochi minuti e</span> massaggia professionalmente</h2>
        <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/b2.jpg" alt>
        <p><b> Neck Ring Plus è un massaggiatore vibrante intelligente che agisce da impulsi elettrici</b> migliorando la microcircolazione del sangue. I campi magnetici aumentano le difese del corpo, normalizzano la circolazione sanguigna, saturano cellule e tessuti con ossigeno, influenzano positivamente il sistema nervoso.</p>
        <p> Il massaggiatore Neck Ring Plus <b> rapidamente allevia la tensione, il dolore e la fatica a casa, in ufficio o durante il viaggio.</b> Allo stesso tempo, riceverai un piacevole massaggio profondo e rilassante, paragonabile al lavoro di un massaggiatore professionista.</p>
        <span> Dispositivo pratico copre<br> direzioni multiple:</span>
        <ul class="checklist">
            <li>
                <p> Rilassa i muscoli del collo</p>
            </li>
            <li>
                <p> Allevia il mal di testa</p>
            </li>
            <li>
                <p> Migliora l'apporto di sangue ai tessuti e al cervello</p>
            </li>
            <li>
                <p> Aiuta a superare l'insonnia e dormire abbastanza</p>
            </li>
            <li>
                <p> Consigliato per osteocondrosi, artrite</p>
            </li>
            <li>
                <p> Dà una carica di allegria e buon umore</p>
            </li>
        </ul>
        <a href="#order_form" class="btn"> Ordina il massaggiatore</a>
    </section>
    <section class="b3 gradient">
        <h2 class="title"> Uno dei migliori e più efficaci nella sua classe di massaggiatori</h2>
        <div class="best__item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/best1.jpg" alt>
            <p><b> 6 modalità di massaggio di diversa intensità</b> Consentono di personalizzare la modalità di massaggio confortevole, adatta ad ogni occasione</p>
        </div>
        <div class="best__item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/best2.jpg" alt>
            <p><b> Alta precisione di impatto</b> Gli elettrodi pulsati coincidono con i muscoli longitudinali posteriori del collo, quindi l'impatto è più efficace</p>
        </div>
        <div class="best__item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/best3.jpg" alt>
            <p><b> Elettrodi aggiuntivi</b> Per massaggiare qualsiasi parte del corpo: spalle, schiena, sura, gambe, braccia. Si collega al massaggiatore principale</p>
        </div>
        <div class="best__item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/best4.jpg" alt>
            <p><b> Comodo e compatto </b> Non occupa molto spazio ed è alimentato da 2 batterie AAA, quindi può essere portato con te ovunque tu vada</p>
        </div>
        <a href="#order_form" class="btn"> Ordina il massaggiatore</a>
    </section>
    <section class="b4">
        <h2 class="title"><span> Chi ha bisogno</span><br> del massaggiatore?</h2>
        <p> Grazie alla sua versatilità, il massaggiatore Neck Ring Plus è consigliato a tutti, ma sarà particolarmente utile per le seguenti categorie di persone:</p>
        <div class="body">
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body1.jpg" alt>
                <p> Impiegati</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body2.jpg" alt>
                <p> Studenti e scolari</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body3.jpg" alt>
                <p> Atleti</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body4.jpg" alt>
                <p> Chi soffre di dolore al collo ed emicrania</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body5.jpg" alt>
                <p> Chi ha problemi di sonno</p>
            </div>
            <div class="body__item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body6.jpg" alt>
                <p> Chi condusce uno stile di vita sedentario</p>
            </div>
        </div>
        <a href="#order_form" class="btn"> Ordinare con lo sconto</a>
    </section>
    <section class="b5 gradient">
        <h2 class="title"> Goditi il massaggio di qualsiasi parte del corpo semplicemente collegando gli elettrodi</h2>
        <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/body_grad.jpg" alt>
        <p><b> Gli elettrodi di massaggio alleviano efficacemente il dolore nei muscoli: con lividi, spasmi, distorsioni.</b> E contribuiscono anche al loro rafforzamento grazie agli effetti diretti degli impulsi che fanno contrarre i muscoli, così come nell'allenamento. <b> Gli elettrodi sono due piastre ipoallergeniche morbide</b> con adesivo, conduttivo strato di gel, che rende facile da fissare sul corpo.</p>
    </section>
    <section class="b6">
        <h2 class="title"><span> Massaggiatore</span><br> professionale a casa tua!</h2>
        <ul class="use">
            <li><span>1</span> Accendere il massaggiatore<br> premendo il pulsante ON</li>
            <li><span>2</span> Selezionare<br> modalità richiesta<br> massaggio</li>
            <li><span>3</span> Mettere il massaggiatore sul<br> collo e godere<br> del massaggio</li>
            <li><span>4</span> Collegare<br> aggiuntivi<br> elettrodi se<br> c'è bisogno</li>
        </ul>
        <a href="#order_form" class="btn"> Ordina il massaggiatore </a>
    </section>
    <section class="b7">
        <h2 class="title"><span> Accessori</span> del massaggiatore Neck Ring Plus</h2>
        <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/char.jpg" alt>
        <ul class="char">
            <li><b> Massaggiatore cervicale </b> <span> 1 unità</span></li>
            <li><b> Elettrodi aggiuntivi </b> <span> 2 unità</span></li>
            <li><b> Istruzione </b> <span> 1 unità</span></li>
            <li><b> Batterie AAA </b> <span> 2 unità</span></li>
            <li><b> Modalità di massaggio </b> <span> 6 modalità</span></li>
            <li><b> Spegnimento automatico </b> <span> ogni 10 minuti</span></li>
        </ul>
        <a href="#order_form" class="btn"> Ordina ora</a>
    </section>
    <section class="b8 gradient">
        <h2 class="title"> Recensioni<br> del acquirenti di Neck Ring Plus</h2>
        <div class="reviews__item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/rev1.jpg" alt>
            <p><b> "Il massaggiatore per il collo è una cosa molto necessaria in casa,</b> perché passo molto tempo al computer e, naturalmente, ho un difetto professionale: il collo del computer. Spesso la zona del collo si irrigidisce e fa male. Ogni giorno uso questo dispositivo miracoloso. Mi piacciono molto i metodi di impatto (sensazioni piacevoli) e i benefici.»</p>
            <div class="person">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/ava1.jpg" alt>
                <p> Elena<br> Bologna</p>
            </div>
        </div>
        <div class="reviews__item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/rev2.jpg" alt>
            <p><b> Il massaggiatore a impulsi è economico, ma porta un sacco di piacere e benefici!</b> Spesso ho sofferto da dolori alla schiena, quindi ora accendo il massaggiatore, collego gli elettrodi e mi eccito dalle piacevoli vibrazioni. Prima di acquistare, dubitavo se sarebbe doloroso. In realtà, si rilassa piacevolmente senza disagio. Bisogna solo impostare la modalità appropriata. Insomma, ragazzi, è una cosa mozzafiato! Consiglio.»</p>
            <div class="person">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/ava2.jpg" alt>
                <p> Sergio<br> Palermo</p>
            </div>
        </div>
        <div class="reviews__item">
            <p><b> «E' una cosa molto utile in macchina, soprattutto quando si guida su lunghe distanze.</b> Lo porto sempre con me. Non c'è bisogno di preoccuparsi con i fili, basta mettere sul collo e si apre un secondo respiro, non pensavo che per quei soldi si possa ottenere un effetto così rilassante.»</p>
            <div class="person">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/ava3.jpg" alt>
                <p> Arturo<br> Torino</p>
            </div>
        </div>
        <a href="#order_form" class="btn"> Ordinare con lo sconto</a>
    </section>
    <section class="b9">
        <h2 class="title"> Consegna e pagamento</h2>
        <ul class="delivery">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/del1.png" alt>
                <p><b> Consegna veloce</b> Tramite corriere entro 1-3 giorni</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/del2.png" alt>
                <p><b> Pagamento alla consegna</b> Senza pagamento anticipato! Il pagamento viene effettuato solo alla consegna</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazermobile/del3.png" alt>
                <p><b> 100% garanzia di qualità</b> Controlliamo i prodotti prima della spedizione e garantiamo la qualità al 100% </p>
            </li>
        </ul>
    </section>
    <section class="b1 end">
        <h1> Neck <span> Ring</span> Plus</h1>
        <h2 class="gradient"> Massaggiatore a impulsi multifunzionale per collo e tutto il corpo</h2>
        <div class="sale"> solo oggi! <span> -53%</span> <b> Risparmio di 66 &euro;</b></div>
        <div class="effect"> Effetto di massaggio professionale</div>
        <div class="pulse">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="formbox">
            <h3> Ordina ora!</h3>
            <p> e ti richiameremo. <br> per chiarire i dettagli dell'ordine</p>
            <ul class="price">
                <li>
                    {{ $prices[1]['originalPrice'] }} <small>RSD</small>
                </li>
                <li>
                    {{ $prices[1]['amount'] }} <small>RSD</small>
                </li>
            </ul>
            <form id="order_form" class="main-order-form main-form" method="post" action="{{$orderRoute}}">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <label>Ime i prezime</label>
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required>
                <label>Telefon</label>
                <input class="field" name="phone" type="tel" placeholder="Telefon" required>
                <label>Adresa</label>
                <input class="field" name="shipping_address" type="text" placeholder="Ulica i broj" required>
                <label>Grad</label>
                <input class="field" name="shipping_city" type="text" placeholder="Grad" required>
                <button class="btn" type="submit">Završi porudžbinu</button>
            </form>
        </div>
    </section>
</div>
<script>
    $(document).ready(function(){
        $('a[href^="#"]').click(function (){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        });
    });
</script>
</body>
</html>