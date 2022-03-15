<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=480">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/womanshave/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{ asset('/') }}purplerelaxFiles/womanshave/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/womanshavemobile/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/womanshavemobile/fontawesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/womanshavemobile/main.css" type="text/css">
    <style>
        @font-face {
            font-family: "Glyphicons Halflings";
            src: url({{ asset('/') }}fonts/glyphicons-halflings-regular.eot);
            src: url({{ asset('/') }}fonts/glyphicons-halflings-regular.eot#iefix) format("embedded-opentype"),
            url({{ asset('/') }}fonts/glyphicons-halflings-regular.woff2) format("woff2"),
            url({{ asset('/') }}fonts/glyphicons-halflings-regular.woff) format("woff"),
            url({{ asset('/') }}fonts/glyphicons-halflings-regular.ttf) format("truetype"),
            url({{ asset('/') }}fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format("svg");
        }
        @font-face {
            font-family: 'Proxima Nova';
            src: url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Proxima Nova';
            src: url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
<div class="main-wrap">
    <!-- Шапка-v1 -->
    <section class="title-block">
        <div class="sub-main-title lt0">
            Pelle liscia senza sensazioni sgradevoli!
        </div>
        <h1 class="main-title lt1">Women Shave</h1>
    </section>
    <section class="top-block-v1">
        <div class="top-image">
            <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/star.png" alt="star">
            <p>delicato con la pelle,<br>senza pieta con i peli</p>
        </div>
        <div class="sale-cont lt2">
            Offerta:
            <strong>sconto di</strong> 50%
        </div>
        <div class="cost-cont clearfix">
            <div class="cost old-cost lt3">
                Prezzo standard:
                <strong>
                    {{ $prices[1]['originalPrice'] }} RSD
                </strong>
            </div>
            <div class="cost new-cost lt4">
                Prezzo scontato:
                <strong>
                    {{ $prices[1]['amount'] }} RSD
                </strong>
            </div>
        </div>
        <div class="describe-cont">
            {{--<div class="timer-cont">--}}
                {{--<h3 class="lt8">--}}
                    {{--La promozione durerà fino al  <script> dtime_nums(+1)</script> in tutta Italia--}}
                {{--</h3>--}}
            {{--</div>--}}
            <a class="button-m lt12 btn2" href="#form-wrapper1" style="text-decoration: none;">Ordinare con lo sconto</a>
            <div class="ost-col lt13">
                Rimangono
                <span>27</span> confezioni dell'offerta
            </div>
        </div>
    </section>
    <section class="detail-block">
        <h3 class="lvl-title lt14 oco">Women Shave è un rasoio versatile per rimuovere i peli indesiderati da tutte le aree, anche le più delicate.</h3>
        <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/1.png" alt="">
        <div class="text-cont">
            <p class="lt15">E' <b>completamente diverso dai rasoi classici.</b> Le innovative lame angolate rimuovono efficacemente anche i peli più piccoli senza danneggiare la pelle. L'ugello speciale consente di rendere le ascelle e la zona bikini perfettamente lisce senza disagio.</p>
            <p class="lt16">Il rasoio è dotato di luce a LED, <b>quindi nessun pelo sarà inosservato!</b> Il design elegante ed ergonomico, il design speciale delle lame, l'illuminazione integrata: ora hai tutto per la tua pelle perfettamente liscia!!</p>
        </div>
        <h3 class="lvl-title lt14 oco">Depilazione delicata senza fastidio</h3>
        <p class="flex-discription">

        </p>
        <img alt="Women Shaver" src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/result1_image_new.png" title="Women Shaver">
        <p class="flex-discription">

        </p>
    </section>
    <!-- Состав-v2 -->
    <section class="compound-block-v2">
        <h2 class="lvl-title lt22 oco" style="font-size: 28px;">E' perfetto per qualsiasi parte del corpo:</h2>
        <ul class="compound-cont clearfix">
            <li>
                <img alt="Women Shaver" src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/benefits__benefit3_image.png" title="Women Shaver">
                <strong class="lt23">il viso</strong>
            </li>
            <li>
                <img alt="Women Shaver" src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/benefits__benefit2_image.png" title="Women Shaver">
                <strong class="lt24">le braccia</strong>
            </li>
            <li>
                <img alt="Women Shaver" src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/benefits__benefit1_image.png" title="Women Shaver">
                <strong class="lt25">la zona bikini</strong>
            </li>
            <li>
                <img alt="Women Shaver" src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/benefits__benefit4_image.png" title="Women Shaver">
                <strong class="lt26">le gambe</strong>
            </li>
        </ul>
    </section>
    <br>
    <a class="button-m lt12 btn2" href="#form-wrapper1" style="text-decoration: none;margin-bottom: 1em;">Ordinare con lo sconto</a>
    <section class="rev-block-v4 color_bg">
        <h2 class="lvl-title lt35">Commenti dei clienti</h2>
        <div class="rev-cont clearfix">
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/reviews__review1_photo.png" alt="Women Shaver" title="Women Shaver">
                <h4>Federica Crespi, 25 anni</h4>
                <p>L'ho regalato alla mia amica, lei ha la pelle molto sensibile, quindi prima ci ho provato su di me :) sono stata così sorpresa che ne ho ordinato subito un altro:)) Mi piace molto, può essere utilizzato ovunque, anche nelle aree più difficili da raggiungere! Funziona molto bene! Ho anche notato che i peli hanno iniziato a crescere più lentamente e meno densamente:)</p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/reviews__review2_photo.png" alt="Women Shaver" title="Women Shaver">
                <h4>Loredana, 27 anni</h4>
                <p>Uso Women Shave il secondo mese fa. Adoro questo rasoio, è così compatto che lo porto sempre nella mia borsa. Un paio di volte ho avuto un date non pianificato e questo rasoio mi ha salvata!</p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/reviews__review3_photo.png" alt="Women Shaver" title="Women Shaver">
                <h4>Nicoletta Caroli, 20 anni</h4>
                <p>Non avrei mai pensato che Women Shave potesse aiutarmi! Tutti i rasoi e depilatori causavano una terribile irritazione. Ma la mia amica, che era entusiasta di questa cosa, mi ha convinto a comprarla. Beh, me l'ha consegnata il corriere, l'ho pagata e ho iniziato a provarla. E' fantastica, davvero!</p>
            </div>
        </div>
    </section>
    <br>
    <h2 class="lvl-title lt14">Attento alla pelle, spietato ai peli</h2>
    <div class="slider-block">
        <div class="slider-cont clearfix">
            <div>
                <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/about__image1.png" alt="Women Shaver" title="Women Shaver">
            </div>
            <div>
                <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/about__image2.png" alt="Women Shaver" title="Women Shaver">
            </div>
            <div>
                <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/about__image3.png" alt="Women Shaver" title="Women Shaver">
            </div>
            <div>
                <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/about__image4.png" alt="Women Shaver" title="Women Shaver">
            </div>
            <div>
                <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/about__image5.png" alt="Women Shaver" title="Women Shaver">
            </div>
        </div>
    </div>
    <!-- Доставка/оплата-v3 -->
    <section class="delivery-block-v3">
        <h2 class="lvl-title lt46">Consegna e pagamento</h2>
        <ul class="delivery-cont">
            <li>
                <h3 class="lt47">Consegna</h3>
                <p class="lt48">Consegna a posta corrente entro 1-3 giorni lavorativi</p>
            </li>
            <li>
                <h3 class="lt49">Nessun pagamento anticipato</h3>
                <p class="lt50">Paga al ricevimento</p>
            </li>
            <li>
                <h3 class="lt51">Garanzia di qualità!</h3>
                <p class="lt52">Tutti i prodotti hanno superato il controllo di qualità e sono completamente certificati!</p>
            </li>
            <li>
                <h3 class="lt53">Consegna anonima</h3>
                <p class="lt54">Il prodotto è confezionato in modo che non è possibile comprendere il contenuto della confezione. Non ci sono iscrizioni sulla confezione stessa. </p>
            </li>
        </ul>
    </section>
    <!-- Заказ-v1 -->
    <section class="title-block">
        <div class="sub-main-title lt55">
            Depilazione efficace
        </div>
        <h1 class="main-title lt56">Women Shave</h1>
    </section>
    <section class="top-block-v1 offer_bottom">
        <div class="top-image">
            <img src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/star.png" alt="star">
            <p>delicato con la pelle,<br>senza pieta con i peli</p>
        </div>
        <div class="sale-cont lt57">
            Offerta:
            <strong>50%</strong> Sconto
        </div>
        <div class="cost-cont clearfix" id="zakaz">
            <div class="cost old-cost lt58">
                Prezzo standard:
                <strong>
                    {{ $prices[1]['originalPrice'] }} RSD
                </strong>
            </div>
            <div class="cost new-cost lt59">
                Prezzo scontato:
                <strong>
                    {{ $prices[1]['amount'] }} RSD
                </strong>
            </div>
        </div>
        <div class="describe-cont">
            <div id="form-wrapper1" class="form form-wrapper">
                <div class="form_block">
                    <div id="form-wrapper1" class="form form-wrapper">
                        <form class="lead_form" method="post" action="{{$orderRoute}}">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <center>
                                <h3 class="title">PODACI ZA DOSTAVU</h3>
                            </center>
                            <br>
                            <div class="form-group col-md-12">
                                <label>Ime i prezime</label>
                                <input type="text" name="name" class="form-control name" placeholder="Ime i prezime" required="required">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Telefon</label>
                                <input type="tel" name="phone" class="form-control phone" placeholder="Telefon" required="required">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Adresa</label>
                                <input type="text" name="shipping_address" class="form-control other-simple-data" placeholder="Ulica i broj" required="required">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Grad</label>
                                <input type="text" name="shipping_city" class="form-control other-simple-data" placeholder="Grad" required="required">
                            </div>
                            <center>
                                <button id="submit-button" class="btn btn-lg btn-success" style="margin-top: 20px;" type="submit">ZAVRŠI PORUDŽBINU</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/slick.min.js" type="text/javascript"></script>
<script src="{{ asset('/') }}purplerelaxFiles/womanshavemobile/init.js" type="text/javascript"></script>
</body>
</html>