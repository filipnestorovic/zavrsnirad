<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="{{ asset('/') }}dailysharkFiles/keyfinder/tovar2.png" type="image/png">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/keyfinder/tovar2.png" type="image/png">
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/keyfinder/style.css"/>
    <style>@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Light.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Light.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Light.ttf') format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Italic.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Italic.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Italic.ttf') format('truetype');font-weight:400;font-style:italic}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.ttf') format('truetype');font-weight:600;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-SemiboldItalic.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-SemiboldItalic.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-SemiboldItalic.ttf') format('truetype');font-weight:600;font-style:italic}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Bold.ttf') format('truetype');font-weight:700;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.ttf') format('truetype');font-weight:800;font-style:normal}</style>
</head>
<body>
@include('components.display_errors')
<section class="block1">
    <div class="wrap">
        <div class="title-box">
            <h1>NANO ADESIVO FLOURISH LAMA</h1>
            <h2>FISSAGGIO AFFIDABILE PER IL TUO SMARTPHONE E ALTRI GADGET </h2>
        </div>
        <div class="tovar"></div>
        <div class="sale">
            SCONTO
            <p class="discount">50%</p>
        </div>
        <div class="hit">
            VENDITE DI SUCCESSO
            <p>DELL'ANNO 2019</p>
        </div>
        <ul class="topul">
            <li>
                <p>Molti modi d'uso</p>
            </li>
            <li>
                <p>Mantiene carico fino a 2 kg</p>
            </li>
            <li>
                <p>SSi monta su diversi materiali</p>
            </li>
        </ul>
        <div class="formbox">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>PREZZO NORMALE:</span>
                    <p><span class="price_land_s2">{{ $prices[1]['originalPrice'] }}</span><small
                            class="price_land_curr">{{ $prices[1]['currency'] }}</small></p>
                </div>
                <div class="new-cost">
                    <span>PREZZO DI PROMOZIONE:</span>
                    <p><span class="price_land_s1">{{ $prices[1]['amount'] }}</span><small
                            class="price_land_curr">{{ $prices[1]['currency'] }}</small></p>
                </div>
            </div>
            <form action="#" method="post" class="orderformcdn m1-form">

                <input class="field" name="name" type="text" placeholder="Inserire il nome completo" required>
                <input class="field" name="phone" type="tel" placeholder="Inserisci il telefono" required>

                <button class="button-m">PORUČITE SADA</button>

            </form>
            <div class="stock">
                <p>Quantità di merce in magazzino:</p>
                <div><span></span><b>13 pz.</b></div>
            </div>
        </div>
    </div>
</section>
<!-- michael-k90 -->

<section class="block3">
    <div class="wrap">
        <h2 class="title">COME FUNZIONA <span class="col">NANO ADESIVO?</span></h2>
        <img src="{{ asset('/') }}dailysharkFiles/keyfinder/photo.jpg" alt="">
        <div class="job">
            <p>L'adesivo è realizzato in materiale speciale con migliaia di sacche d'aria microscopiche che agiscono
                come piccoli polloni. Fissandolo ad una parete, ad esempio, l'aria viene estratta dalle tasche
                microscopiche dell'adesivo, creando un vuoto. Il vuoto fornisce l'aspirazione e l'aspirazione è la
                presa!</p>
            <ul>
                <li><b>Materiale: </b>nano gomma, silicone</li>
                <li><b>Kit: </b>flessibile, l'adesivo di telaio</li>
                <li><b>Carico massimo: </b> 2 kg</li>
                <li><b>Colori: </b>nero</li>
            </ul>
        </div>
    </div>
</section>
<!-- bizlife_inc -->
<section class="block4">
    <div class="wrap">
        <h2 class="title">TECNOLOGIE PIÙ NUOVE 2019 <span class="col2">VANTAGGI DELLE DEL NANO ADESIVO</span></h2>
        <ul class="preim">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/keyfinder/p1.jpg" alt="">
                <p>Associato a materiali diversi</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/keyfinder/p2.jpg" alt="">
                <p>Sopporta il carico<br>
                    fino a 2 kg</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/keyfinder/p3.jpg" alt="">
                <p>Facile<br> da pulire</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/keyfinder/p4.jpg" alt="">
                <p>Comodo<br> in uso</p>
            </li>
        </ul>
        <a href="#order_form" class="button-m">ORDINA ORA</a>
    </div>
</section>
<section class="block5">
    <div class="wrap">
        <h2 class="title">PERCHÉ SCEGLIERE <span class="col">NANO ADESIVO FLOURISH LAMA?</span></h2>
        <div class="select clearfix">
            <div class="select-left">
                <ul class="poch">
                    <li>
                        <p>L'adesivo flessibile e comodo che ti aiuterà in qualsiasi momento, e ovunque</p>
                    </li>
                    <li>
                        <p>Non lascia segni sulla superficie a cui è stato collegato, a differenza di tutti gli altri
                            analoghi</p>
                    </li>
                    <li>
                        <p>Tiene il tuo gadget molto saldamente e puoi non avere paura che nel momento più inopportuno
                            cadrà</p>
                    </li>
                    <li>
                        <p>Facile da pulire se si sporca, basta sciacquarlo con acqua</p>
                    </li>
                </ul>
            </div>
            <div class="select-right">
                <div class="gallery">
                    <div><img src="{{ asset('/') }}dailysharkFiles/keyfinder/g1.jpg" alt=""></div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- owmen17 -->

<section class="block7">
    <div class="wrap">
        <h2 class="title"><span>CONSEGNA E PAGAMENTO</span></h2>
        <ul class="ship">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/keyfinder/s1.png" alt="">
                <h3>CONSEGNA VELOCE</h3>
                <p>Posta o corriere entro 1-10 giorni. Spese di spedizione da 17$. Invia una richiesta e l'operatore ti
                    aiuterà a scegliere il metodo di consegna.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/keyfinder/s2.png" alt="">
                <h3>PAGAMENTO ALLA CONSEGNA</h3>
                <p>Non accettiamo i pagamenti anticipati. Il pagamento viene effettuato solo alla consegna
                    dell'ordine.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/keyfinder/s3.png" alt="">
                <h3>GARANZIE</h3>
                <p>Tutti i prodotti hanno superato il controllo di qualità. Linea di assistenza clienti 24 ore su 24
                    lavora per te.</p>
            </li>
        </ul>
    </div>
</section>
<!-- after_qbici -->
<section class="block1 end">
    <div class="wrap">
        <div class="title-box">
            <h1>NANO ADESIVO FLOURISH LAMA</h1>
            <h2>FISSAGGIO AFFIDABILE PER IL TUO SMARTPHONE E ALTRI GADGET</h2>
        </div>
        <div class="tovar"></div>
        <div class="sale">
            SCONTO
            <p class="discount">50%</p>
        </div>
        <div class="hit">
            VENDITE DI SUCCESSO
            <p>DELL'ANNO 2019</p>
        </div>
        <ul class="topul">
            <li>
                <p>Grande variazione di utilizzo</p>
            </li>
            <li>
                <p>Mantiene carico fino a 2 kg</p>
            </li>
            <li>
                <p>Si monta su diversi materiali</p>
            </li>
        </ul>
        <div class="formbox">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>PREZZO NORMALE:</span>
                    <p><span class="price_land_s2">{{ $prices[1]['originalPrice'] }}</span><small
                            class="price_land_curr">{{ $prices[1]['currency'] }}</small></p>
                </div>
                <div class="new-cost">
                    <span>PREZZO DI PROMOZIONE:</span>
                    <p><span class="price_land_s1">{{ $prices[1]['amount'] }}</span><small
                            class="price_land_curr">{{ $prices[1]['currency'] }}</small></p>
                </div>
            </div>
            <form action="{{$orderRoute}}" method="post" class="orderformcdn m1-form" id="order_form">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" name="name" type="text" placeholder="Ime i prezime" required>
                <input class="field" name="phone" type="tel" placeholder="Telefon" required>
                <button class="button-m">PORUČITE SADA</button>
            </form>
            <div class="stock">
                <p>Quantità di merce in magazzino: </p>
                <div><span></span><b>13 pz.</b></div>
            </div>
        </div>

    </div>
</section>
<script type="text/javascript" src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}dailysharkFiles/keyfinder/script.js"></script>
@include('components.pixel_footer')
</body>
</html>
