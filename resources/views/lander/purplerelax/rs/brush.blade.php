<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="">
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/brush/style.css">
    {{--<style>--}}
        {{--/* open-sans-condensed-300 - latin */--}}
        {{--@font-face {--}}
            {{--font-family: 'Open Sans Condensed';--}}
            {{--font-display: swap;--}}
            {{--font-style: normal;--}}
            {{--font-weight: 300;--}}
            {{--src: local(''),--}}
            {{--url('../fonts/open-sans-condensed-v15-latin-300.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */--}}
            {{--url('../fonts/open-sans-condensed-v15-latin-300.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */--}}
        {{--}--}}
        {{--/* open-sans-condensed-700 - latin */--}}
        {{--@font-face {--}}
            {{--font-family: 'Open Sans Condensed';--}}
            {{--font-display: swap;--}}
            {{--font-style: normal;--}}
            {{--font-weight: 700;--}}
            {{--src: local(''),--}}
            {{--url('../fonts/open-sans-condensed-v15-latin-700.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */--}}
            {{--url('../fonts/open-sans-condensed-v15-latin-700.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */--}}
        {{--}--}}
        {{--/* roboto-condensed-300 - latin */--}}
        {{--@font-face {--}}
            {{--font-family: 'Roboto Condensed';--}}
            {{--font-display: swap;--}}
            {{--font-style: normal;--}}
            {{--font-weight: 300;--}}
            {{--src: local(''),--}}
            {{--url('../fonts/roboto-condensed-v19-latin-300.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */--}}
            {{--url('../fonts/roboto-condensed-v19-latin-300.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */--}}
        {{--}--}}
        {{--/* roboto-condensed-700 - latin */--}}
        {{--@font-face {--}}
            {{--font-family: 'Roboto Condensed';--}}
            {{--font-display: swap;--}}
            {{--font-style: normal;--}}
            {{--font-weight: 700;--}}
            {{--src: local(''),--}}
            {{--url('../fonts/roboto-condensed-v19-latin-700.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */--}}
            {{--url('../fonts/roboto-condensed-v19-latin-700.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */--}}
        {{--}--}}
    {{--</style>--}}
    <style>
        .quantity {
            display: none;
        }
    </style>
    <script data-polyfil="webp">!function(e,n,A){function o(e,n){return typeof e===n}function t(){var e,n,A,t,a,i,l;for(var f in r)if(r.hasOwnProperty(f)){if(e=[],n=r[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(A=0;A<n.options.aliases.length;A++)e.push(n.options.aliases[A].toLowerCase());for(t=o(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)i=e[a],l=i.split("."),1===l.length?Modernizr[l[0]]=t:(!Modernizr[l[0]]||Modernizr[l[0]]instanceof Boolean||(Modernizr[l[0]]=new Boolean(Modernizr[l[0]])),Modernizr[l[0]][l[1]]=t),s.push((t?"":"no-")+l.join("-"))}}function a(e){var n=u.className,A=Modernizr._config.classPrefix||"";if(c&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\s)"+A+"no-js(\s|$)");n=n.replace(o,"$1"+A+"js$2")}Modernizr._config.enableClasses&&(n+=" "+A+e.join(" "+A),c?u.className.baseVal=n:u.className=n)}function i(e,n){if("object"==typeof e)for(var A in e)f(e,A)&&i(A,e[A]);else{e=e.toLowerCase();var o=e.split("."),t=Modernizr[o[0]];if(2==o.length&&(t=t[o[1]]),"undefined"!=typeof t)return Modernizr;n="function"==typeof n?n():n,1==o.length?Modernizr[o[0]]=n:(!Modernizr[o[0]]||Modernizr[o[0]]instanceof Boolean||(Modernizr[o[0]]=new Boolean(Modernizr[o[0]])),Modernizr[o[0]][o[1]]=n),a([(n&&0!=n?"":"no-")+o.join("-")]),Modernizr._trigger(e,n)}return Modernizr}var s=[],r=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var A=this;setTimeout(function(){n(A[e])},0)},addTest:function(e,n,A){r.push({name:e,fn:n,options:A})},addAsyncTest:function(e){r.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr;var f,u=n.documentElement,c="svg"===u.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;f=o(e,"undefined")||o(e.call,"undefined")?function(e,n){return n in e&&o(e.constructor.prototype[n],"undefined")}:function(n,A){return e.call(n,A)}}(),l._l={},l.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},l._trigger=function(e,n){if(this._l[e]){var A=this._l[e];setTimeout(function(){var e,o;for(e=0;e<A.length;e++)(o=A[e])(n)},0),delete this._l[e]}},Modernizr._q.push(function(){l.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,n,A){function o(n){var o=n&&"load"===n.type?1==t.width:!1,a="webp"===e;i(e,a&&o?new Boolean(o):o),A&&A(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],A=n.shift();e(A.name,A.uri,function(A){if(A&&"load"===A.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)})}),t(),a(s),delete l.addTest,delete l.addAsyncTest;for(var p=0;p<Modernizr._q.length;p++)Modernizr._q[p]();e.Modernizr=Modernizr}(window,document)</script> </head>
</head>
<body class="ev-date">
<header class="header block first-header">
    <div class="wrapper">
        <h1 class="header-title">UNA SPAZZOLA RIVOLUZIONARIA PER LA PULIZIA E LE CURE ANTI-INVECCHIAMENTO DELLA
            PELLE
        </h1>
        <div class="row">
            <div class="left-text">
                <p class="left-text-title">UNA SPAZZOLA PER LA PULIZIA DEL VISO CREATA PER IL TUO TIPO DI PELLE</p>
                <ul class="left-text-list">
                    <li class="left-text-item">Viso pulito</li>
                    <li class="left-text-item">Pelle liscia</li>
                    <li class="left-text-item">Addio ai cosmetologi</li>
                    <li class="left-text-item">Vero trattamento SPA a casa tua</li>
                </ul>
            </div>
            <div class="header__luna">
                <span>LINA</span><sup>TM</sup> <span>2</span>
            </div>
            <div class="prod">
                <img src="{{ asset('/') }}purplerelaxFiles/brush/products-top.png" alt="img">
            </div>
            <!-- <div id="cloneThis"> -->
            <div class="sale-form" id="cloneThis">
                <div class="sale-position">
                    <span class="sale-descr">SPECIJALNA<br>PONUDA</span>
                    <span class="one-price">
                        <b class="x_price_current">
                           {{ $prices[1]['amount'] }}
                        </b>
                        <span class="x_currency">
                           RSD
                        </span>
                     </span>
                    <span>Stara cena:</span>
                    <div class="old-price">
                        <b class="x_price_previous">
                            {{ $prices[1]['originalPrice'] }}
                        </b>
                        <span class="x_currency">
                           RSD
                        </span>
                    </div>
                    <span>Cena za 2 komada:</span>
                    <span class="two-price">
                        <b class="">{{ $prices[2]['amount'] }}</b>
                        <span class="x_currency">
                           RSD
                        </span>
                     </span>
                    <span></span>
                </div>
                <div class="sale-timer">
                    <div class="ribbon">
                        <div class="old-priceR">
                            <b class="x_price_previous">
                                {{ $prices[1]['originalPrice'] }}
                            </b>
                            <i class="x_currency">
                                RSD
                            </i>
                        </div>
                        Popust<br><span>70%</span>
                    </div>
                    {{--<div class="main-timer">--}}
                        {{--<div class="left">L'offerta speciale scade tra:</div>--}}
                        {{--<div class="time">--}}
                            {{--<span class="days">00</span>--}}
                            {{--<span class="dots">:</span>--}}
                            {{--<span class="hours">00</span>--}}
                            {{--<span class="dots">:</span>--}}
                            {{--<span class="minutes">00</span>--}}
                            {{--<span class="dots">:</span>--}}
                            {{--<span class="seconds">00</span>--}}
                        {{--</div>--}}
                        {{--<div class="time-name">--}}
                            {{--<span>giorni</span>--}}
                            {{--<span>ore</span>--}}
                            {{--<span>minuti</span>--}}
                            {{--<span>secondi</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                <div class="sale-form-wrap">
                    <span class="qua-title">Izaberite količinu:</span>
                    <div class="qua">
                        <div class="one active" onclick="one();">1 komad</div>
                        <div class="two" onclick="two();">2 komada</div>
                    </div>
                    <div class="prices">
                        <span class="one-price">
                           <b class="x_price_current">
                              {{ $prices[1]['amount'] }}
                           </b>
                           <span class="x_currency">
                              RSD
                           </span>
                        </span>
                        <span class="two-price">
                           <b class="">{{ $prices[2]['amount'] }}</b>
                           <span class="x_currency">
                              RSD
                           </span>
                           <br><span></span>
                        </span>
                    </div>
                    <form class="x_order_form" action="{{$orderRoute}}" method="post">
                        {{ csrf_field() }}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        @foreach($prices as $singlePrice)
                        <input type="radio" name="quantity" class="quantity" value="{{ $singlePrice['quantity'] }}"
                               @if(old('quantity') == $singlePrice['quantity']) checked @endif>
                        @endforeach
                        <input class="name" name="name" placeholder="Ime i prezime" type="text" required>
                        <input class="phone" name="phone" placeholder="Telefon" type="tel" required>
                        <input class="name" name="shipping_address" placeholder="Adresa" type="text" required>
                        <input class="name" name="shipping_city" placeholder="Grad" type="text" required>
                        <br>
                        <button type="submit">Poručite sada</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="gif block">
    <div class="wrapper">
        <img src="{{ asset('/') }}purplerelaxFiles/brush/1.gif">
        <img src="{{ asset('/') }}purplerelaxFiles/brush/2.gif">
        <img src="{{ asset('/') }}purplerelaxFiles/brush/3.gif">
        {{--<video loop autoplay muted>--}}
            {{--<source src="{{ asset('/') }}purplerelaxFiles/brush/1.mp4" type="video/mp4">--}}
        {{--</video>--}}
        {{--<video loop autoplay muted>--}}
            {{--<source src="{{ asset('/') }}purplerelaxFiles/brush/2.mp4" type="video/mp4">--}}
        {{--</video>--}}
        {{--<video loop autoplay muted>--}}
            {{--<source src="{{ asset('/') }}purplerelaxFiles/brush/3.mp4" type="video/mp4">--}}
        {{--</video>--}}
    </div>
</section>
<section class="description block">
    <div class="wrapper">
        <h2>LASCIA CHE <span>LA TUA PELLE IRRADIA LA GIOVINEZZA E LA FRESCHEZZA</span></h2>
        <p class="descr-p center">LINA 2 — non è una semplice spazzola per la pulizia della pelle del viso, è
            qualcosa di più. Il risultato del suo uso potrà essere apprezzato non solo da te, ma anche da tutte le
            persone attorno. Viziati con un trattamento quotidiano di 2 minuti che renderà la tua pelle più pulita,
            fresca e setosa.
        </p>
        <div class="row">
            <div class="descr-left">
                <h3 class="descr-h3">LE DONNE<span> L'HANNO PROVATO</span></h3>
                <p>LINA 2 delicatamente esfolia le cellule morte, libera i pori ostruiti e rimuove fino a</p>
                <div class="percent">99.5%</div>
                <div class="descr-text">DI IMPURITÀ E SEBO</div>
            </div>
            <div class="descr-right">
                <img src="{{ asset('/') }}purplerelaxFiles/brush/descr.jpg" alt="img" loading="lazy">
            </div>
        </div>
    </div>
</section>
<section class="block4 block">
    <div class="wrapper">
        <ul class="block4-list">
            <li class="block4-item">
                <div class="block4-percent">100%</div>
                <div class="block4-content">PELLE PIÙ SANA</div>
            </li>
            <li class="block4-item">
                <div class="block4-percent">98%</div>
                <div class="block4-content">PELLE PIÙ LISCIA</div>
            </li>
            <li class="block4-item">
                <div class="block4-percent">90%</div>
                <div class="block4-content">PELLE PIÙ ELASTICA E TONICA</div>
            </li>
        </ul>
    </div>
</section>
<section class="block5 block">
    <div class="wrapper">
        <img src="{{ asset('/') }}purplerelaxFiles/brush/product.png" alt="img" class="block5__img" loading="lazy">
        <div class="block5-left">
            <h2>UN SISTEMA AVANZATO DELLA PULIZIA DELLA PELLE DEL VISO <span class="inL_18823">
                  <span class="ts">T-SONIC</span><sub>™</sub></span>
            </h2>
            <p>Grazie alla tecnologia intensiva T-Sonic™, le nuove spazzole per la pulizia della pelle LINA 2
                rimuovono le cellule morte e i residui del trucco in modo due volte più efficace e delicato, nonché
                eliminano il 99,5% delle impurità e del sebo, accelerando l'assorbimento dei prodotti per la cura
                della pelle.
            </p>
        </div>
        <div class="block5-right">
            <h2>TECNOLOGIA AVANZATA <span>CHE PREVIENE L'INVECCHIAMENTO</span> DELLA PELLE</h2>
            <p>L'uso degli impulsi a bassa frequenza per la prevenzione dell'invecchiamento consente di ridurre
                visivamente la quantità delle rughe di espressione e quelle di età. La pelle diventa più elastica e
                tonica.
            </p>
        </div>
    </div>
</section>
<section class="block6 block">
    <div class="wrapper center">
        <h2><span>APPROCCIO INDIVIDUALE</span> A SECONDA DEL <span>TUO TIPO DI PELLE</span></h2>
        <p class="descr-p center">Sono disponibili 4 modelli di LINA 2, le spazzole dei quali sono stati
            progettati tenendo condo delle caratteristiche individuali della tua pelle. Clicca qui sotto per
            scoprire quale è più adatto per te.
        </p>
        <p><span class="button ever-popup-btn">Fatti richiamare</span></p>
        <img src="{{ asset('/') }}purplerelaxFiles/brush/products.jpg" alt="img" loading="lazy">
    </div>
</section>
<section class="block7 block">
    <div class="block7__wrapper">
        <div class="row">
            <div class="col">
                <div class="v1 v11">
                    <div class="img">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/1.png" alt="img" loading="lazy">
                    </div>
                    <p class="block7-p">DOPPIA PULIZIA T-SONIC™</p>
                </div>
                <div class="v2 v21">
                    <h4>EFFICACIA INSUPERABILE</h4>
                    <p>Ci sono 2 azionamenti che garantiscono la potenza due volte più forte, ognuno di loro crea
                        8.000 impulsi T-Sonic™ (transdermico sonico) al minuto e assicura la pulizia della pelle più
                        potente e profondo, ma anche più delicato.
                    </p>
                </div>
            </div>
            <div class="col"></div>
            <div class="col">
                <div class="v1 v12">
                    <div class="img">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/6.png" alt="img" loading="lazy">
                    </div>
                    <p class="block7-p">SUPERFICIE DELLA SECONDA GENERAZIONE</p>
                </div>
                <div class="v2 v22">
                    <h4>DESIGN COMPLETAMENTE OTTIMIZZATO</h4>
                    <p>La superficie è 50% più grande, ciò garantisce la pulizia più efficace. Le setole in silicone
                        più lunghe offrono una pulizia migliore e più delicata. L'involucro in silicone vellutato
                        per un maggiore comfort e una migliore efficienza.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="v1 v13">
                    <div class="img">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/2.png" alt="img" loading="lazy">
                    </div>
                    <p class="block7-p">DESIGN UNICO CON PARTI IN SILICONE</p>
                </div>
                <div class="v2 v23">
                    <h4>CURA INCREDIBILMENTE DELICATA E IGIENICA</h4>
                    <p>Le setole morbide hanno un effetto delicato sulla pelle. La superficie igienica in silicone
                        non ha i pori che consente di prevenire la proliferazione dei batteri. L'igiene è 35 volte
                        superiore rispetto alle normali spazzole per la pulizia.
                    </p>
                </div>
            </div>
            <div class="col"></div>
            <div class="col">
                <div class="v1 v14">
                    <div class="img">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/5.png" alt="img" loading="lazy">
                    </div>
                    <p class="block7-p">MODALITÀ DI PREVENZIONE DELL'INVECCHIAMENTO</p>
                </div>
                <div class="v2 v24">
                    <h4>TORNA IL TEMPO ADDIETRO</h4>
                    <p>Indirizza gli impulsi a bassa frequenza sulle parti dove spesso compaiono le rughe. La pelle
                        diventerà più liscia ed elastica.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="v1 v15">
                    <div class="img">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/3.png" alt="img" loading="lazy">
                    </div>
                    <p class="block7-p">OTTIMO INVESTIMENTO</p>
                </div>
                <div class="v2 v25">
                    <h4>NELLA CURA DELLA PELLE</h4>
                    <p>Le testine sostituibili per la spazzola non sono necessarie. Garanzia limitata di 2 anni.
                        Garanzia di qualità per un periodo di 10 anni.
                    </p>
                </div>
            </div>
            <div class="col"></div>
            <div class="col">
                <div class="v1 v16">
                    <div class="img">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/4.png" alt="img" loading="lazy">
                    </div>
                    <p class="block7-p">DESIGN RAFFINATO PROGETTATO IN SVEZIA</p>
                </div>
                <div class="v2 v26">
                    <h4>CREATO CON CURA PER TE</h4>
                    <p>La spazzola è completamente impermeabile, quindi può essere utilizzata in bagno o in doccia.
                        Le 12 modalità di intensità configurabili per la cura delicata della pelle. Una batteria
                        completamente caricata è sufficiente per 450 usi.
                    </p>
                </div>
            </div>
        </div>
        <img class="img-bg" src="{{ asset('/') }}purplerelaxFiles/brush/bg-feature.png" alt="img" loading="lazy">
    </div>
</section>
<section class="block8 block">
    <div class="wrapper">
        <h3 class="descr-h3 center">SEMPLICE TRATTAMENTO QUOTIDIANO PER LA CURA DELLA PELLE</h3>
        <ul>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/brush/w1.jpg" alt="img" loading="lazy">
                <h4><span>01.</span> Applicazione di un prodotto per la pulizia della pelle</h4>
                <p>Applicare un prodotto per la pulizia della pelle che è adatta per te. Bagnare la spazzola LINA™ 2
                    e attivare la modalità di pulizia.
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/brush/w2.jpg" alt="img" loading="lazy">
                <h4><span>02.</span> Pulizia</h4>
                <p>Per un minuto muovere la spazzola LINA 2 sulla superficie della pelle in modo delicato e
                    circolare.
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/brush/w3.jpg" alt="img" loading="lazy">
                <h4><span>03.</span> Risciacquo</h4>
                <p>Risciacquare il viso con acqua e asciugarlo con un asciugamano. Se necessario, applicare i
                    prodotti per la cura della pelle.
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/brush/w4.jpg" alt="img" loading="lazy">
                <h4><span>04.</span> Prevenzione dell'invecchiamento</h4>
                <p>Attivare la modalità di prevenzione dell'invecchiamento LINA 2. Per un minuto mettere la spazzola
                    sulle parti in cui la pelle è soggetta alle rughe.
                </p>
            </li>
        </ul>
    </div>
</section>
<section class="block9 block">
    <div class="wrapper">
        <h3 class="descr-h3 center">BEAUTY BLOGGER CHE AMANO LINA 2?</h3>
        <div class="bloger">
            <div class="bloger-left">
                <img src="{{ asset('/') }}purplerelaxFiles/brush/bloger.jpg" alt="img" loading="lazy">
            </div>
            <div class="bloger-right">
                <div class="bloger-right-wrap">
                    <p>"Mi piace molto come si presenta la mia pelle dopo l'uso di spazzole da LINA 2, perché è
                        pulita, ma non secca!”
                    </p>
                    <div>Osia</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block10 block">
    <div class="wrapper">
        <h3 class="descr-h3 center">OSSESSIONE CON LINA 2</h3>
        <ul>
            <li><
                <img src="{{ asset('/') }}purplerelaxFiles/brush/r1.jpg" alt="img" loading="lazy">
            </li>
            <!--
               -->
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/brush/r2.jpg" alt="img" loading="lazy">
            </li>
            <!--
               -->
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/brush/r3.jpg" alt="img" loading="lazy">
            </li>
            <!--
               -->
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/brush/r4.jpg" alt="img" loading="lazy">
            </li>
        </ul>
    </div>
</section>
<section class="block11 block">
    <div class="wrapper">
        <h3 class="descr-h3 center"> LINA 2 VALUTAZIONI E RECENSIONI</h3>
        <p class="descr-p center">Tutte le recensioni sono compilate dai clienti senza alcun incentivo o
            incoraggiamento.
        </p>
        <div class="row">
            <div class="left">
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/brush/star.png" alt="img" loading="lazy">
                </div>
                <div>Laura</div>
                <p class="date-20 rew__date" data-format="monthMin dd, yyyy">feb 20, 2021</p>
            </div>
            <div class="right">
                <div>Finalmente mi sono liberata dei punti neri sul naso :)</div>
                <p>Finalmente mi sono liberata dei punti neri sul naso. Grazie a LINA 2. Sono così felice di
                    non aver risparmiato i soldi e di averla comprata. Tutti i miei amici hanno già notato i
                    miglioramenti e sono molto felice di ricevere i complimenti infiniti :)
                </p>
            </div>
        </div>
        <div class="row">
            <div class="left">
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/brush/star.png" alt="img" loading="lazy">
                </div>
                <div>Francesca</div>
                <p class="date-15 rew__date" data-format="monthMin dd, yyyy">feb 25, 2021</p>
            </div>
            <div class="right">
                <div>Tutti hanno notato che la mia pelle è diventata molto più pulita.</div>
                <p>Tutti hanno notato che la mia pelle è diventata molto più pulita. I punti neri sono svaniti, i
                    pori si sono ristretti e la pelle è diventata più liscia e uniforme. Uso LINA 2 due volte
                    al giorno come è raccomandato nell’istruzione e dopo l’applicazione dei cosmetici giorno o notte
                    per la pulizia del viso. Il processo di pulizia è semplice e piacevole. Consigliatissimo!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="left">
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/brush/star.png" alt="img" loading="lazy">
                </div>
                <div>Alessia</div>
                <p class="date-10 rew__date" data-format="monthMin dd, yyyy">mar 02, 2021</p>
            </div>
            <div class="right">
                <div>LINA 2 è ideale per la pelle sensibile</div>
                <p>Ho tanti problemi con la pelle, spesso soffro di eczema. Per mesi ho letto le recensioni online e
                    ho studiato le offerte sul mercato, alla fine ho optato per LINA 2. LINA 2 bordo è
                    stata creata appositamente per la pelle sensibile e le sue setole in silicone sono
                    straordinariamente morbidi, ciò distingue LINA 2 da altre spazzole più rigide che solo graffiano
                    la mia pelle sensibile.
                </p>
            </div>
        </div>
    </div>
</section>
<article class="block inL_636555" id="art11">
    <div class="mw">
        <div class="r">
            <div class="g3 fac">
                <h2>Come ordinarla?</h2>
            </div>
            <div class="g9">
                <ul class="r">
                    <li class="g3">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/how__img-1.png" alt="img" loading="lazy">
                        <p><strong>Lascia una richiesta </strong> sul nostro sito</p>
                    </li>
                    <li class="g3">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/how__img-2.png" alt="img" loading="lazy">
                        <p><strong>Ti richiameremo </strong>e specifichiamo l'indirizzo di spedizione</p>
                    </li>
                    <li class="g3">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/how__img-3.png" alt="img" loading="lazy">
                        <p><strong>Consegneremo la spazzola у</strong> in qualsiasi angolo del paese</p>
                    </li>
                    <li class="g3">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/how__img-4.png" alt="img" loading="lazy">
                        <p><strong>Paghi l'ordine </strong> al ricevimento nell'ufficio postale</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</article>
<section class="header block">
    <div class="wrapper">
        <h1 class="header-title">UNA SPAZZOLA RIVOLUZIONARIA PER LA PULIZIA E LE CURE ANTI-INVECCHIAMENTO DELLA
            PELLE
        </h1>
        <div class="row">
            <div class="left-text">
                <p class="left-text-title">UNA SPAZZOLA PER LA PULIZIA DEL VISO CREATA PER IL TUO TIPO DI PELLE</p>
                <ul class="left-text-list">
                    <li class="left-text-item">Viso pulito</li>
                    <li class="left-text-item">Pelle liscia</li>
                    <li class="left-text-item">Addio ai cosmetologi</li>
                    <li class="left-text-item">Vero trattamento SPA a casa tua</li>
                </ul>
            </div>
            <div class="header__LINA">
                <span>LINA</span><sup>TM</sup> <span>2</span>
            </div>
            <div class="prod">
                <img src="{{ asset('/') }}purplerelaxFiles/brush/products-top.png" alt="img" loading="lazy">
            </div>
            <div class="sale-form">
                <div class="sale-position">
                    <span class="sale-descr">SPECIJALNA<br>PONUDA</span>
                    <span class="one-price">
                        <b class="x_price_current">
                           {{ $prices[1]['amount'] }}
                        </b>
                        <span class="x_currency">
                           RSD
                        </span>
                     </span>
                    <span>Stara cena:</span>
                    <div class="old-price">
                        <b class="x_price_previous">
                            {{ $prices[1]['originalPrice'] }}
                        </b>
                        <span class="x_currency">
                           RSD
                        </span>
                    </div>
                    <span>Cena za 2 komada:</span>
                    <span class="two-price">
                        <b class="">{{ $prices[2]['amount'] }}</b>
                        <span class="x_currency">
                           RSD
                        </span>
                     </span>
                    <span></span>
                </div>
                <div class="sale-timer">
                    <div class="ribbon">
                        <div class="old-priceR">
                            <b class="x_price_previous">
                                {{ $prices[1]['originalPrice'] }}
                            </b>
                            <i class="x_currency">
                                RSD
                            </i>
                        </div>
                        Popust<br><span>70%</span>
                    </div>
                    {{--<div class="main-timer">--}}
                        {{--<div class="left">L'offerta speciale scade tra:</div>--}}
                        {{--<div class="time">--}}
                            {{--<span class="days">00</span>--}}
                            {{--<span class="dots">:</span>--}}
                            {{--<span class="hours">00</span>--}}
                            {{--<span class="dots">:</span>--}}
                            {{--<span class="minutes">00</span>--}}
                            {{--<span class="dots">:</span>--}}
                            {{--<span class="seconds">00</span>--}}
                        {{--</div>--}}
                        {{--<div class="time-name">--}}
                            {{--<span>giorni</span>--}}
                            {{--<span>ore</span>--}}
                            {{--<span>minuti</span>--}}
                            {{--<span>secondi</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                <div class="sale-form-wrap">
                    <span class="qua-title">Izaberite količinu:</span>
                    <div class="qua">
                        <div class="one active">1 komad</div>
                        <div class="two">2 komada</div>
                    </div>
                    <div class="prices ">
                        <span class="one-price">
                           <b class="x_price_current">
                              {{ $prices[1]['amount'] }}
                           </b>
                           <span class="x_currency">
                              RSD
                           </span>
                        </span>
                        <span class="two-price">
                           <b class="">{{ $prices[2]['amount'] }}</b>
                           <span class="x_currency">
                              RSD
                           </span>
                           <br><span></span>
                        </span>
                    </div>
                    <form class="x_order_form" action="{{$orderRoute}}" method="post">
                        {{ csrf_field() }}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <input class="name" name="name" placeholder="Ime i prezime" type="text" required>
                        <input class="phone" name="phone" placeholder="Telefon" type="tel" required>
                        <input class="name" name="shipping_address" placeholder="Adresa" type="text" required>
                        <input class="name" name="shipping_city" placeholder="Grad" type="text" required>
                        <br>
                        <button type="submit">Poručite sada</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="create_rom_footer"></div>
<script src="{{ asset('/') }}purplerelaxFiles/brush/script.js"></script>
@include('components.pixel_footer')
</body>
</html>