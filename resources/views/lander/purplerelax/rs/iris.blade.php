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
            visibility: hidden;
        }
    </style>
    <script data-polyfil="webp">!function(e,n,A){function o(e,n){return typeof e===n}function t(){var e,n,A,t,a,i,l;for(var f in r)if(r.hasOwnProperty(f)){if(e=[],n=r[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(A=0;A<n.options.aliases.length;A++)e.push(n.options.aliases[A].toLowerCase());for(t=o(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)i=e[a],l=i.split("."),1===l.length?Modernizr[l[0]]=t:(!Modernizr[l[0]]||Modernizr[l[0]]instanceof Boolean||(Modernizr[l[0]]=new Boolean(Modernizr[l[0]])),Modernizr[l[0]][l[1]]=t),s.push((t?"":"no-")+l.join("-"))}}function a(e){var n=u.className,A=Modernizr._config.classPrefix||"";if(c&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\s)"+A+"no-js(\s|$)");n=n.replace(o,"$1"+A+"js$2")}Modernizr._config.enableClasses&&(n+=" "+A+e.join(" "+A),c?u.className.baseVal=n:u.className=n)}function i(e,n){if("object"==typeof e)for(var A in e)f(e,A)&&i(A,e[A]);else{e=e.toLowerCase();var o=e.split("."),t=Modernizr[o[0]];if(2==o.length&&(t=t[o[1]]),"undefined"!=typeof t)return Modernizr;n="function"==typeof n?n():n,1==o.length?Modernizr[o[0]]=n:(!Modernizr[o[0]]||Modernizr[o[0]]instanceof Boolean||(Modernizr[o[0]]=new Boolean(Modernizr[o[0]])),Modernizr[o[0]][o[1]]=n),a([(n&&0!=n?"":"no-")+o.join("-")]),Modernizr._trigger(e,n)}return Modernizr}var s=[],r=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var A=this;setTimeout(function(){n(A[e])},0)},addTest:function(e,n,A){r.push({name:e,fn:n,options:A})},addAsyncTest:function(e){r.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr;var f,u=n.documentElement,c="svg"===u.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;f=o(e,"undefined")||o(e.call,"undefined")?function(e,n){return n in e&&o(e.constructor.prototype[n],"undefined")}:function(n,A){return e.call(n,A)}}(),l._l={},l.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},l._trigger=function(e,n){if(this._l[e]){var A=this._l[e];setTimeout(function(){var e,o;for(e=0;e<A.length;e++)(o=A[e])(n)},0),delete this._l[e]}},Modernizr._q.push(function(){l.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,n,A){function o(n){var o=n&&"load"===n.type?1==t.width:!1,a="webp"===e;i(e,a&&o?new Boolean(o):o),A&&A(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],A=n.shift();e(A.name,A.uri,function(A){if(A&&"load"===A.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)})}),t(),a(s),delete l.addTest,delete l.addAsyncTest;for(var p=0;p<Modernizr._q.length;p++)Modernizr._q[p]();e.Modernizr=Modernizr}(window,document)</script> </head>
</head>
<body class="ev-date">
@include('components.display_errors')
<header class="header block first-header">
    <div class="wrapper">
        <h1 class="header-title">REVOLUCIONARNA ČETKA ZA ČIŠĆENJE I NEGU KOŽE PROTIV STARENJA</h1>
        <div class="row">
            <div class="left-text">
                <p class="left-text-title">ČETKA ZA ČIŠĆENJE LICA KREIRANA ZA SVE TIPOVE KOŽE</p>
                <ul class="left-text-list">
                    <li class="left-text-item">Za čisto lice</li>
                    <li class="left-text-item">Za glatku kožu</li>
                    <li class="left-text-item">Bez odlaska kozmetičaru</li>
                    <li class="left-text-item">SPA tretman u vašem domu</li>
                </ul>
            </div>
            <div class="header__luna">
                <span>IRIS </span><sup>TM</sup>
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
                        Popust<br><span>40%</span>
                    </div>
                </div>
                <div class="sale-form-wrap">
                    <span class="qua-title">Izaberite količinu:</span>
                    <form class="x_order_form" action="{{$orderRoute}}" method="post">
                        <div class="qua">
                            <label for="fq-1"><div class="one active" id="fone" onclick="fone();">1 komad</div></label>
                            <label for="fq-2"><div class="two" id="ftwo" onclick="ftwo();">2 komada</div></label>
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
                        {{ csrf_field() }}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        @foreach($prices as $singlePrice)
                        <input type="radio" name="quantity" class="quantity" value="{{ $singlePrice['quantity'] }}" id="fq-{{ $singlePrice['quantity'] }}"
                        @if(old('quantity') == $singlePrice['quantity']) checked @endif
                        @if($singlePrice['quantity'] === 1) checked @endif
                        >
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
    </div>
</section>
<section class="description block">
    <div class="wrapper">
        <h2>ZA KOŽU KOJA ZRAČI <span>MLADOŠĆU I SVEŽINOM</span></h2>
        <p class="descr-p center">IRIS - nije obična četka za čišćenje kože lica, to je nešto više. Rezultat njene upotrebe ne samo da ćete primetiti vi, nego i ljudi oko vas.
            Prepustite se 2-minutnom dnevnom tretmanu koji će vašu kožu učiniti čisto, svežom i svilenkastom.</p>
        <div class="row">
            <div class="descr-left">
                <h3 class="descr-h3"><span>DOKAZANO</span> JE DA</h3>
                <p>IRIS nežno odstranjuje mrtve ćelije, čisti začepljene pore i uklanja do</p>
                <div class="percent">99.5%</div>
                <div class="descr-text">NEČISTOĆA I SEBUMA</div>
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
                <div class="block4-content">zdrava koža</div>
            </li>
            <li class="block4-item">
                <div class="block4-percent">98%</div>
                <div class="block4-content">glatka koža</div>
            </li>
            <li class="block4-item">
                <div class="block4-percent">90%</div>
                <div class="block4-content">elastičnija koža</div>
            </li>
        </ul>
    </div>
</section>
<section class="block5 block">
    <div class="wrapper">
        <img src="{{ asset('/') }}purplerelaxFiles/brush/product.png" alt="img" class="block5__img" loading="lazy">
        <div class="block5-left">
            <h2>NAPREDNI SISTEM ZA ČIŠĆENJE KOŽE LICA <span class="inL_18823">
                  <span class="ts">T-SONIC</span><sub>™</sub></span>
            </h2>
            <p>Zahaljujući intenzivnoj T-Sonic™ tehnologiji, nove IRIS četke za čišćenje kože uklanjaju mrtve ćelije i ostatke šminke dvostruko efikasnije
                i nežnije. Eliminišu 99,5% nečistoća i sebuma ubrzavajući apsorpciju proizvoda za negu kože.</p>
        </div>
        <div class="block5-right">
            <h2>NAPREDNA TEHNOLOGIJA KOJA SPREČAVA <span>STARENJE KOŽE</span> </h2>
            <p>Upotreba niskofrekventnih impulsa za prevenciju starenja pospešuje zatezanje lica i uklanjanje bora. Koža postaje elastičnija i lepša.</p>
        </div>
    </div>
</section>
<section class="block6 block">
    <div class="wrapper center">
        <h2><span>INDIVIDUALNI PRISTUP</span> ZAVISNO OD <span>VAŠEG TIPA KOŽE </span></h2>
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
                    <p class="block7-p">T-SONIC™ DVOSTRUKO ČIŠĆENJE</p>
                </div>
                <div class="v2 v21">
                    <h4>T-SONIC™ DVOSTRUKO ČIŠĆENJE</h4>
                    <p>Postoje 2 motorića koji garantuju duplo veću snagu. Svaki od njih stvara 8.000 T-Sonic™ (transdermalnih zvučnih) impulsa u minuti i obezbeđuje
                        najsnažnije i najnežnije dubinsko čišćenje kože.</p>
                </div>
            </div>
            <div class="col"></div>
            <div class="col">
                <div class="v1 v12">
                    <div class="img">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/6.png" alt="img" loading="lazy">
                    </div>
                    <p class="block7-p">TEHNOLOGIJA TREĆE GENERACIJE</p>
                </div>
                <div class="v2 v22">
                    <h4>TEHNOLOGIJA TREĆE GENERACIJE</h4>
                    <p>Površina je 50% veća što garantuje najefikasniji tretman. Duže silikonske četke pružaju bolje i nežnije čišćenje.
                        Baršunasto silikonsko kućište za veću udobnost i bolju efikasnost.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="v1 v13">
                    <div class="img">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/2.png" alt="img" loading="lazy">
                    </div>
                    <p class="block7-p">JEDINSTVENI DIZAJN SA SILIKONSKIM DELOVIMA</p>
                </div>
                <div class="v2 v23">
                    <h4>JEDINSTVENI DIZAJN SA SILIKONSKIM DELOVIMA</h4>
                    <p>Meke četke nežno deluju na kožu. Higijenska silikonska površina nema pore što pomaže u sprečavanju proliferacije bakterija. Higijena je 35 puta
                        veća od normalnih četkica za čišćenje.</p>
                </div>
            </div>
            <div class="col"></div>
            <div class="col">
                <div class="v1 v14">
                    <div class="img">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/5.png" alt="img" loading="lazy">
                    </div>
                    <p class="block7-p">METODA PREVENCIJE STARENJA</p>
                </div>
                <div class="v2 v24">
                    <h4>METODA PREVENCIJE STARENJA</h4>
                    <p>Usmerava impulse niske frekvencije na delove lica na kojima se najpre pojavljuju bore. Koža postaje lepša i elastičnija.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="v1 v15">
                    <div class="img">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/3.png" alt="img" loading="lazy">
                    </div>
                    <p class="block7-p">ODLIČNA INVESTICIJA</p>
                </div>
                <div class="v2 v25">
                    <h4>ODLIČNA INVESTICIJA</h4>
                    <p>Zamenske glave i četkice nisu potrebne. Dajemo garanciju od 2 godine na proizvod.</p>
                </div>
            </div>
            <div class="col"></div>
            <div class="col">
                <div class="v1 v16">
                    <div class="img">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/4.png" alt="img" loading="lazy">
                    </div>
                    <p class="block7-p">KVALITETNA I VODOOTPORNA</p>
                </div>
                <div class="v2 v26">
                    <h4>KVALITETNA I VODOOTPORNA</h4>
                    <p>Četka je potpuno vodootporna, tako da se može koristiti za vreme kupanja ili tuširanja. 12 režima različitih intenziteta za negu kože.
                        Potpuno napunjena baterija dovoljna je za 45 upotreba.</p>
                </div>
            </div>
        </div>
        <img class="img-bg" src="{{ asset('/') }}purplerelaxFiles/brush/bg-feature.png" alt="img" loading="lazy">
    </div>
</section>
<section class="block8 block">
    <div class="wrapper">
        <h3 class="descr-h3 center">JEDNOSTAVAN TRETMAN ZA NEGU KOŽE</h3>
        <ul>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/brush/w1.jpg" alt="img" loading="lazy">
                <h4><span>01.</span> Primena prizvoda za čišćenje kože</h4>
                <p>Nanesite proizvod za čišćenje kože koji vam odgovara. Navlažite IRIS četku i aktivirajte režim čišćenja.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/brush/w2.jpg" alt="img" loading="lazy">
                <h4><span>02.</span> Čišćenje</h4>
                <p>Jedan minut pomerajte četkicu IRIS po površini kože nežno i kružno.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/brush/w3.jpg" alt="img" loading="lazy">
                <h4><span>03.</span> Ispiranje</h4>
                <p>Isperite lice vodom i osušite ga peškirom. Ako je potrebno, nanesite proizvode za negu kože.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/brush/w4.jpg" alt="img" loading="lazy">
                <h4><span>04.</span> Prevencija starenja</h4>
                <p>Aktivirajte režim prevencije starenja. Na jedan minut stavite četku na područje lica koje je sklono boranju.</p>
            </li>
        </ul>
    </div>
</section>
<section class="block9 block">
    <div class="wrapper">
        <h3 class="descr-h3 center">BEAUTY BLOGERKE KOJE VOLE IRIS?</h3>
        <div class="bloger">
            <div class="bloger-left">
                <img src="{{ asset('/') }}purplerelaxFiles/brush/bloger.jpg" alt="img" loading="lazy">
            </div>
            <div class="bloger-right">
                <div class="bloger-right-wrap">
                    <p>"Zaista mi se sviđa kako moja koža izgleda nakon upotrebe LINA četke za lice, čista je i nije suva!"</p>
                    <div>Marija</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block10 block">
    <div class="wrapper">
        <h3 class="descr-h3 center">KO JE JEDNOM PROBA NE RAZDVAJA SE OD NJE</h3>
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
        <h3 class="descr-h3 center">IRIS OCENE I UTISCI</h3>
        <p class="descr-p center">Evo šta su kupci rekli o našem proizvodu</p>
        <div class="row">
            <div class="left">
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/brush/star.png" alt="img" loading="lazy">
                </div>
                <div>Lara</div>
                <p class="date-20 rew__date" data-format="monthMin dd, yyyy">Jun 20, 2021</p>
            </div>
            <div class="right">
                <div>Konačno sam se rešila mitesera na nosu!</div>
                <p>Konačno sam se rešila mitesera na nosu.
                    Hvala IRIS. Tako mi je drago što sam kupila ovaj proizvod i nisam bacila novac. Svi moji prijatelji su već primetili poboljšanje i veoma sam
                    srećna što dobijam beskrajne komplimente. :)</p>
            </div>
        </div>
        <div class="row">
            <div class="left">
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/brush/star.png" alt="img" loading="lazy">
                </div>
                <div>Jovana</div>
                <p class="date-15 rew__date" data-format="monthMin dd, yyyy">Avgust 25, 2021</p>
            </div>
            <div class="right">
                <div>Svi su primetili da je moja koža postala mnogo čistija!</div>
                <p>Svi su primetili da je moja koža postala mnogo čistija. Miteseri su nestali, pore su se smanjile, a koža je postala glatkija i ujednačenija.
                    LINA2 četku koristim dva puta dnevno prema uputstvu, pre nanošenja dnevne ili noćne kozmetike za čišćenje lica. Proces čišćenja je jednostavan i prijatan.
                    Toplo preporučujem!</p>
            </div>
        </div>
        <div class="row">
            <div class="left">
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/brush/star.png" alt="img" loading="lazy">
                </div>
                <div>Aleksandra</div>
                <p class="date-10 rew__date" data-format="monthMin dd, yyyy">Maj 02, 2021</p>
            </div>
            <div class="right">
                <div>Kreirana je posebno za osetljivu kožu i izuzetno je mekana, što je izdvaja od ostalih četkica!</div>
                <p>Imala sam toliko problema sa kožom, često su mi se pojavljivali ekcemi. Mesecima sam čitala recenzije na internetu, proučavala razne proizvode i na kraju sam se
                    odlučila za IRIS četkicu. Kreirana je posebno za osetljivu kožu i izuzetno je mekana, što je izdvaja od ostalih četkica koje mi za razliku od nje nisu odgovarale.</p>
            </div>
        </div>
    </div>
</section>
<article class="block inL_636555" id="art11">
    <div class="mw">
        <div class="r">
            <div class="g3 fac">
                <h2>KAKO PORUČITI?</h2>
            </div>
            <div class="g9">
                <ul class="r">
                    <li class="g3">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/how__img-1.png" alt="img" loading="lazy">
                        <p><strong>Popunite formu</strong> podacima za dostavu</p>
                    </li>
                    <li class="g3">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/how__img-2.png" alt="img" loading="lazy">
                        <p><strong>Potvrdićemo porudžbinu</strong> ubrzo</p>
                    </li>
                    <li class="g3">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/how__img-3.png" alt="img" loading="lazy">
                        <p><strong>Proizvod šaljemo</strong> u roku od 1-2 radna dana</p>
                    </li>
                    <li class="g3">
                        <img src="{{ asset('/') }}purplerelaxFiles/brush/how__img-4.png" alt="img" loading="lazy">
                        <p><strong>Plaćate </strong> po prijemu pošiljke</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</article>
<section class="header block">
    <div class="wrapper">
        <h1 class="header-title">REVOLUCIONARNA ČETKA ZA ČIŠĆENJE I NEGU KOŽE PROTIV STARENJA</h1>
        <div class="row">
            <div class="left-text">
                <p class="left-text-title">ČETKA ZA ČIŠĆENJE LICA KREIRANA ZA SVE TIPOVE KOŽE</p>
                <ul class="left-text-list">
                    <li class="left-text-item">Za čisto lice</li>
                    <li class="left-text-item">Za glatku kožu</li>
                    <li class="left-text-item">Bez odlaska kozmetičaru</li>
                    <li class="left-text-item">SPA tretman u vašem domu</li>
                </ul>
            </div>
            <div class="header__LINA">
                <span>IRIS</span><sup>TM</sup>
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
                        Popust<br><span>40%</span>
                    </div>
                </div>
                <div class="sale-form-wrap">
                    <span class="qua-title">Izaberite količinu:</span>
                    <form class="x_order_form" action="{{$orderRoute}}" method="post">
                        <div class="qua">
                            <label for="sq-1"><div class="one active" id="sone" onclick="sone();">1 komad</div></label>
                            <label for="sq-2"><div class="two" id="stwo" onclick="stwo();">2 komada</div></label>
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
                        {{ csrf_field() }}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        @foreach($prices as $singlePrice)
                        <input type="radio" name="quantity" class="quantity" value="{{ $singlePrice['quantity'] }}" id="sq-{{ $singlePrice['quantity'] }}"
                        @if(old('quantity') == $singlePrice['quantity']) checked @endif
                        @if($singlePrice['quantity'] === 1) checked @endif
                        >
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
</section>
<div class="create_rom_footer"></div>
<script src="{{ asset('/') }}purplerelaxFiles/brush/script.js"></script>
@include('components.pixel_footer')
</body>
</html>