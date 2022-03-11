<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="IN REGALO UN SET JAR ZIPPER BAGS">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/trakazakupatilo/favicon.png" type="image/x-icon">
    <style>
        @font-face {
            font-family: 'Gotham Pro';
            src: url('{{ asset('/') }}fonts/GothamPro-Light.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/GothamPro-Light.woff') format('woff'),
            url('{{ asset('/') }}fonts/GothamPro-Light.ttf') format('truetype');
            font-weight: 300;
            font-style: normal;
        }
        @font-face {
            font-family: 'Gotham Pro';
            src: url('{{ asset('/') }}fonts/GothamPro.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/GothamPro.woff') format('woff'),
            url('{{ asset('/') }}fonts/GothamPro.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Gotham Pro';
            src: url('{{ asset('/') }}fonts/GothamProMedium.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/GothamProMedium.woff') format('woff'),
            url('{{ asset('/') }}fonts/GothamProMedium.ttf') format('truetype');
            font-weight: 500;
            font-style: normal;
        }
        @font-face {
            font-family: 'Gotham Pro';
            src: url('{{ asset('/') }}fonts/GothamPro-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/GothamPro-Bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/GothamPro-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/trakazakupatilo/lightbox.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/trakazakupatilo/style.css">
</head>
<body>
<div class="wrap">
    <div class="header">
        <h1 class="uppercase center white b green_bg"> NASTRO ISOLANTE</h1>
        <h2 class="uppercase center white"> IN REGALO UN SET JAR ZIPPER BAGS </h2>
        <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/header_img.jpg">
        <div class="reyt">
            <div class="stars"><b> 4.9</b> (voti: 673)</div>
            ordini: 21058
        </div>
        <div class="timer_price">
            {{--<div class="timer_block clearfix">--}}
                {{--<p> Fine promozione in:</p>--}}
                {{--<div class="timer b clearfix">--}}
                    {{--<div class="timer_item hours"> 00</div>--}}
                    {{--<div class="timer_item minutes"> 00</div>--}}
                    {{--<div class="timer_item seconds"> 00</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="price">
                <div class="old">
                    {{ $prices[1]['originalPrice'] }} RSD
                </div>
                <div class="sale"> -50%</div>
                <div class="new b">
                    {{ $prices[1]['amount'] }} RSD
                </div>
            </div>
        </div>
        <a href="#order_form" class="button-m"> Ordina </a>
        <div class="guard_all">
            <div class="guard"> Tutela dell'acquirente</div>
            <div class="products_count prod1"><b> 13 pz.</b> in promozione</div>
        </div>
    </div>
    {{--<div class="video-container">--}}
        {{--<div class="youtube" id="SdoVnrTg-Ug"></div>--}}
    {{--</div>--}}
    <section class="opisanie">
        <h2 class="venzel">
            <b> Nastro adesivo idrorepellente</b>
        </h2>
        <img alt="" class="center" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/2.jpg">
        <p class="justify"> Il nastro isolante è un nastro autoadesivo destinato a sigillare, isolare dall'umidità e mascherare esteticamente i giunti. </p>
        <p class="justify"> Tale novità è ampiamente utilizzata per gli impianti sanitari. La protezione dei giunti è resistente ai detergenti e alle soluzioni disinfettanti. Il nastro si attacca istantaneamente alla superficie, e la forza di adesione si mantiene per tutto il periodo di utilizzo. Il bordo protegge in modo affidabile da sporco, acqua e muffa, ed elimina la formazione di placca. </p>
    </section>
    <section>
        <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/6.gif">
        <ul class="spisok ul_black black_ul">
            <li> Adesione istantanea </li>
            <li> Semplicità d'uso</li>
            <li> Impermeabilità</li>
            <li> Protezione contro la muffa</li>
            <li> Capacità decorativa</li>
            <li> Igiene costante</li>
            <li> Resistente ai detersivi</li>
        </ul>
        <p><a href="#order_form" class="button-m"> Ordina </a></p>
    </section>
    <section>
        <h2 class="venzel"> Caratteristiche:</h2>
        <ul class="ul_str">
            <li><span> Materiale: </span> PVC </li>
            <li><span> Colore: </span> Bianco</li>
            <li><span> Larghezza: </span> 3,8 cm</li>
            <li><span> Spessore: </span> 2mm</li>
            <li><span> Lunghezza: </span> 3 м</li>
            <li><span> Idoneo per le seguenti superfici: </span> Legno, carta da parati, vetro, metallo e molti altri </li>
        </ul>
    </section>
    <img alt="" class="center" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/tov-2.jpg">
    <p><a href="#order_form" class="button-m"> Ordina ora</a></p>
    <!-- i7s -->
    <section class="opisanie">
        <h2 class="venzel"> Regalo <br> Set Jar zipper bags </h2>
        <p class="justify"> Original Jar Zipper Bags a forma di barattoli vintage Mason Ball non sono solo indispensabili in cucina ma anche il compagno perfetto per i viaggi e le escursioni, sono ideali per proteggere la freschezza di vari snack, frutta, verdura, cracker, biscotti e panini, ecc.</p>
        <img src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/prod-1.jpg" alt>
    </section>
    <section class="opisanie">
        <ul class="ul_item ">
            <li> Per conservare il cibo secco</li>
            <li> Per conservare gli alimenti in frigorifero</li>
            <li> Per conservare biscotti e dolci</li>
            <li> Per portare all'aperto</li>
            <li> Per colazione e pranzo</li>
            <li> Per conservare i cosmetici</li>
        </ul>
    </section>
    <section class="opisanie" style="background-color: #000; background-image: url({{ asset('/') }}dailysharkFiles/trakazakupatilo/prod.jpg); height: 700px;background-size: contain;background-position: center; background-repeat: no-repeat;">
        <h2 class="venzel" style="color: #fff;"> Il set Jar zipper bags comprende 10 barattoli</h2>
        <div style="margin-top:460px;">
            <ul class="ul_item-2">
                <li><b>3</b> 3 barattoli da 1000 ml</li>
                <li><b>4</b> 4 barattoli da 500 ml</li>
                <li><b>3</b> 3 barattoli da 150 ml</li>
            </ul>
        </div>
    </section>
    <!-- i7s ends -->
    <section class="b10 b10-avas">
        <h2 class="venzel"> Recensioni </h2>
        <div class="hit clearfix">
            <div class="hit-left">
                <p> Top Sale</p>
            </div>
            <div class="hit-right">
                <p> Voto medio:<span> 4.9/5</span></p>
            </div>
        </div>
        <div class="reviews">
            <div class="rev">
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/ava-1.png">
                <p> Ottimo nastro! Si installa rapidamente, non perde acqua e non si scurisce. Quando si applica, bisogna lasciarlo asciugare e tenere l'acqua lontana dal nastro per un'ora o due. Nei barattoli mia moglie mette il pranzo a me e mio figlio. </p>
                <p class="name"><b> Salvatore Messina</b> 42 anni.</p>
            </div>
            <div class="rev">
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/ava-2.png">
                <p> Ho usato del nastro adesivo per coprire il giunto tra la vasca e il muro. Il nastro è flessibile e aderisce bene. Mi è piaciuto molto, ne ordinerò altri e li installerò nella doccia e nella cucina dei miei genitori. Mi è stato molto utile. Grazie, lo raccomanderò a tutti i miei amici. </p>
                <p class="name"><b> Salvatore Pedone</b> 34 anni</p>
            </div>
            <div class="rev">
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/ava-3.png">
                <p> È fantastico!!! Sistemazione facile e veloce, anche io sono riuscita a farlo! Veloce e pulito! Un ringraziamento speciale per i barattoli, sono super! Finalmente ho messo in ordine la mia cucina! Tutti molto felici! </p>
                <p class="name"><b> Giovanna Buccheri</b> 29 anni.</p>
            </div>
        </div>
    </section>
    <section>
        <ul class="deliv deliv1">
            <li>
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/deliv1-1.png">
                <h3> Consegna</h3>
                <p> Da 1 a 3 giorni lavorativi. </p>
            </li>
            <li>
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/deliv1-2.png">
                <h3> Pagamento</h3>
                <p> Il pagamento viene effettuato al ricevimento della merce</p>
            </li>
            <li>
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/deliv1-3.png">
                <h3> Garanzia</h3>
                <p> Controlliamo sempre la merce prima della spedizione e garantiamo il 100% di qualità</p>
            </li>
        </ul>
    </section>
    <section>
        <ul class="deliv_v2 deliv_v2_1 border_bottom">
            <li>
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/deliv_v2-1.png">
                <h3> Richiesta</h3>
                <p> Lasciate una richiesta sul sito web</p>
            </li>
            <li>
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/deliv_v2-2.png">
                <h3> Telefonata </h3>
                <p> Il nostro operatore chiamera per i dettagli dell'ordine</p>
            </li>
            <li>
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/deliv_v2-3.png">
                <h3> Consegna</h3>
                <p> Consegniamo la merce entro 1-3 giorni</p>
            </li>
            <li>
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/deliv_v2-4.png">
                <h3> Pagamento</h3>
                <p> Il pagamento viene effettuato al ricevimento della merce</p>
            </li>
        </ul>
    </section>
    <div class="header footer">
        <h1 class="uppercase center white b green_bg"> NASTRO ISOLANTE</h1>
        <h2 class="uppercase center white"> IN REGALO UN SET JAR ZIPPER BAGS </h2>
        <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/header_img.jpg">
        <div class="reyt">
            <div class="stars"><b> 4.9</b> (voti: 673)</div>
            ordini: 21058
        </div>
        <h3> Lasciate <b> una richiesta</b></h3>
        <div class="posttile"> I nostri operatori vi contatteranno per consigliarvi e aiutarvi a piazzare il ordine</div>
        <div class="timer_price">
            {{--<div class="timer_block clearfix">--}}
                {{--<p> Fine promozione in:</p>--}}
                {{--<div class="timer b clearfix">--}}
                    {{--<div class="timer_item hours"> 00</div>--}}
                    {{--<div class="timer_item minutes"> 00</div>--}}
                    {{--<div class="timer_item seconds"> 00</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="price">
                <div class="old">
                    {{ $prices[1]['originalPrice'] }} RSD
                </div>
                <div class="sale"> -50%</div>
                <div class="new b">
                    {{ $prices[1]['amount'] }} RSD
                </div>
            </div>
        </div>
        <form id="order_form" method="POST" action="#" class="main-order-form m1-form lv2-form lv2-form1">
            <div class="input-wrap">
                <input type="text" class="field" name="name" required placeholder="Nome">
            </div>
            <div class="input-wrap">
                <input type="tel" class="field" name="phone" required placeholder="Telefono">
            </div>
            <button class="button-m"> Ordina</button>
        </form>
        <div class="guard_all">
            <div class="guard"> Tutela dell'acquirente</div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script>
    $(function(){
        $('a[href^="#"]').click(function (){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        });
        $('.gallery').slick({
            dots: false,
            infinite: true,
            speed: 200,
            fade: false,
            cssEase: 'linear'
        });
        $('.reviews').slick({
            dots: false,
            infinite: false,
            speed: 200,
            fade: false,
            cssEase: 'linear'
        });
    });
</script>
</body>
</html>