<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/magneticbelt/all.css">
    <script data-polyfil="webp">!function (e, n, A) { function o(e, n) { return typeof e === n } function t() { var e, n, A, t, a, i, l; for (var f in r) if (r.hasOwnProperty(f)) { if (e = [], n = r[f], n.name && (e.push(n.name.toLowerCase()), n.options && n.options.aliases && n.options.aliases.length)) for (A = 0; A < n.options.aliases.length; A++)e.push(n.options.aliases[A].toLowerCase()); for (t = o(n.fn, "function") ? n.fn() : n.fn, a = 0; a < e.length; a++)i = e[a], l = i.split("."), 1 === l.length ? Modernizr[l[0]] = t : (!Modernizr[l[0]] || Modernizr[l[0]] instanceof Boolean || (Modernizr[l[0]] = new Boolean(Modernizr[l[0]])), Modernizr[l[0]][l[1]] = t), s.push((t ? "" : "no-") + l.join("-")) } } function a(e) { var n = u.className, A = Modernizr._config.classPrefix || ""; if (c && (n = n.baseVal), Modernizr._config.enableJSClass) { var o = new RegExp("(^|\s)" + A + "no-js(\s|$)"); n = n.replace(o, "$1" + A + "js$2") } Modernizr._config.enableClasses && (n += " " + A + e.join(" " + A), c ? u.className.baseVal = n : u.className = n) } function i(e, n) { if ("object" == typeof e) for (var A in e) f(e, A) && i(A, e[A]); else { e = e.toLowerCase(); var o = e.split("."), t = Modernizr[o[0]]; if (2 == o.length && (t = t[o[1]]), "undefined" != typeof t) return Modernizr; n = "function" == typeof n ? n() : n, 1 == o.length ? Modernizr[o[0]] = n : (!Modernizr[o[0]] || Modernizr[o[0]] instanceof Boolean || (Modernizr[o[0]] = new Boolean(Modernizr[o[0]])), Modernizr[o[0]][o[1]] = n), a([(n && 0 != n ? "" : "no-") + o.join("-")]), Modernizr._trigger(e, n) } return Modernizr } var s = [], r = [], l = { _version: "3.6.0", _config: { classPrefix: "", enableClasses: !0, enableJSClass: !0, usePrefixes: !0 }, _q: [], on: function (e, n) { var A = this; setTimeout(function () { n(A[e]) }, 0) }, addTest: function (e, n, A) { r.push({ name: e, fn: n, options: A }) }, addAsyncTest: function (e) { r.push({ name: null, fn: e }) } }, Modernizr = function () { }; Modernizr.prototype = l, Modernizr = new Modernizr; var f, u = n.documentElement, c = "svg" === u.nodeName.toLowerCase(); !function () { var e = {}.hasOwnProperty; f = o(e, "undefined") || o(e.call, "undefined") ? function (e, n) { return n in e && o(e.constructor.prototype[n], "undefined") } : function (n, A) { return e.call(n, A) } }(), l._l = {}, l.on = function (e, n) { this._l[e] || (this._l[e] = []), this._l[e].push(n), Modernizr.hasOwnProperty(e) && setTimeout(function () { Modernizr._trigger(e, Modernizr[e]) }, 0) }, l._trigger = function (e, n) { if (this._l[e]) { var A = this._l[e]; setTimeout(function () { var e, o; for (e = 0; e < A.length; e++)(o = A[e])(n) }, 0), delete this._l[e] } }, Modernizr._q.push(function () { l.addTest = i }), Modernizr.addAsyncTest(function () { function e(e, n, A) { function o(n) { var o = n && "load" === n.type ? 1 == t.width : !1, a = "webp" === e; i(e, a && o ? new Boolean(o) : o), A && A(n) } var t = new Image; t.onerror = o, t.onload = o, t.src = n } var n = [{ uri: "data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=", name: "webp" }, { uri: "data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==", name: "webp.alpha" }, { uri: "data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA", name: "webp.animation" }, { uri: "data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=", name: "webp.lossless" }], A = n.shift(); e(A.name, A.uri, function (A) { if (A && "load" === A.type) for (var o = 0; o < n.length; o++)e(n[o].name, n[o].uri) }) }), t(), a(s), delete l.addTest, delete l.addAsyncTest; for (var p = 0; p < Modernizr._q.length; p++)Modernizr._q[p](); e.Modernizr = Modernizr }(window, document)</script>
    <style>
        @font-face {
            font-family: 'Open Sans';
            font-display: swap;
            font-style: normal;
            font-weight: 400;
            src: local(''), url({{ asset('/') }}fonts/subset-OpenSans.woff2) format('woff2'), url({{ asset('/') }}fonts/OpenSans.woff) format('woff')
        }
        @font-face {
            font-family: 'Open Sans';
            font-display: swap;
            font-style: normal;
            font-weight: 700;
            src: local(''), url({{ asset('/') }}fonts/subset-OpenSans-Bold.woff2) format('woff2'), url({{ asset('/') }}fonts/OpenSans-Bold.woff) format('woff')
        }
    </style>
</head>
<body class="ev-date">
{{--<div class="fixedtop">--}}
    {{--<div class="fixedtop__wrap clearfix">--}}
        {{--<picture>--}}
            {{--<source type="image/webp" srcset="//rcktland-a.akamaihd.net/4163/images/logo.webp">--}}
            {{--<img src="https://belt.xcartpro.com/r1/4163/images/logo.png" class="fixedtop__img" alt="img">--}}
        {{--</picture>--}}
        {{--<p class="fixedtop__cap">În cadrul programului producătorului "Articulații sănătoase",<span class="fixedtop__text"> astăzi dispozitivul pentru articulații "Magnetic Belt" este--}}
               {{--disponibil cu reducere</span>--}}
        {{--</p>--}}
        {{--<p class="fixedtop__cap fixedtop__cap_sm">În programul producătorului "Articulații--}}
            {{--sănătoase",<span class="fixedtop__text"> astăzi dispozitivul pentru articulații "Magnetic Neck--}}
               {{--Choker" este disponibil cu reducere</span>--}}
        {{--</p>--}}
        {{--<button class="fixedtop__btn ever-popup-btn">OBȚINEŢI CU REDUCERE</button>--}}
    {{--</div>--}}
{{--</div>--}}
<main>
    @include('components.display_errors')
    <section class="s1">
        <div class="container">
            <div class="logo">
                <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/logo.png" alt="img">
            </div>
            <h1> VICTORIE ASUPRA OSTEOCONDROZEI <span class="nowrap">ÎN 30 DE ZILE</span> </h1>
            <p class="text"> CORDON UNIC PENTRU GÂT ȘI ARTICULAȚII CARE: </p>
            <div class="list-wrap">
                <ul class="list">
                    <li> <span>Elimină </span>durerile de cap și amețeli </li>
                    <li> <span>Ameliorează </span>tensiunea și durerea din mușchii gâtului </li>
                    <li> <span>Ajută </span>la restabilirea mobilității articulațiilor și la ameliorarea inflamației
                    </li>
                    <li> <span>Elimină </span>și previne ciupirea nervilor </li>
                    <li> <span>Ajută </span>la normalizarea auzului și a vederii </li>
                </ul>
                <div class="form-wrap">
                    <div class="prod-wrap">
                        <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/prod.png" alt="img" class="prod">
                    </div>
                    <div class="form">
                        <form action="{{$orderRoute}}" method="post" class="landing__form x_order_form">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            {{--<div class="prices">--}}
                                {{--<p>Începutul promoției <span class="date-1"></span></p>--}}
                                {{--<p>Promoția se termină <span class="date-0"></span></p>--}}
                                {{--<div class="new">--}}
                                    {{--<span class="minifytext">conform promoţiei</span>--}}
                                    {{--<b class="new_price_val">CU REDUCERE</b>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="price">
                                <div class="price__old price__item">
                                    <p class="price__title">
                                        Stara cena:
                                    </p>
                                    <p class="price__value">
                                    <span class="line-through">
                                       <span class="x_price_previous">
                                          {{ $prices[1]['originalPrice'] }}
                                       </span>
                                       <span class="x_currency">
                                          RSD
                                       </span>
                                    </span>
                                    </p>
                                </div>
                                <div class="price__new price__item">
                                    <p class="price__title">
                                        Nova cena:
                                    </p>
                                    <p class="price__value">
                                    <span class="x_price_current">
                                       {{ $prices[1]['amount'] }}
                                    </span>
                                        <span class="x_currency">
                                       RSD
                                    </span>
                                        <span>*</span>
                                    </p>
                                </div>
                            </div>
                            <input type="text" name="name" placeholder="Ime i prezime" required autocomplete="name">
                            <input type="tel" name="phone" placeholder="Telefon" required autocomplete="phone">
                            <input type="text" name="shipping_address" placeholder="Adresa" required autocomplete="shipping_address">
                            <input type="text" name="shipping_city" placeholder="Grad" required autocomplete="shipping_city">
                            <button type="submit" class="btn">PORUČITE SADA</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="s2">
        <div class="container clearfix">
            <div class="col-2 col-2-offset">
                <h2> CU cE BOLI <span>LUPTĂ Magnetic Belt?</span> </h2>
                <blockquote>
                    <p> <b><span>Magnetic Belt</span> - un cordon unic de osteocondroză pentru gât și
                            articulații, </b>care nu are analogi pe piața română.
                    </p>
                </blockquote>
                <p> Secretul eficienței Magnetic Belt - impact punctat <b>asupra zonei critice a
                        gâtului, încheieturii mâinii și genunchiului, </b>datorită căruia
                    dispozitivul <b>ajută la ameliorarea inflamației la nivelul gâtului și articulațiilor,
                        ameliorează durerea și activează refacerea</b> elementelor articulare.
                </p>
            </div>
            <picture>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s2.png" alt="img" loading="lazy">
            </picture>
        </div>
    </section>
    <section class="s3">
        <div class="container">
            <h3> În cursul complex <span>cu Magnetic Belt puteţi <br>scăpa </span>de boli, cum ar fi:
            </h3>
            <div class="items items-4">
                <div class="col-4">
                    <div class="col-4-img">
                        <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s3_1.jpg" alt="img" loading="lazy">
                    </div>
                    <p> Artrita <br>și osteoartrita </p>
                </div>
                <div class="col-4">
                    <div class="col-4-img">
                        <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s3_2.jpg" alt="img" loading="lazy">
                    </div>
                    <p> Sinovita </p>
                </div>
                <div class="col-4">
                    <div class="col-4-img">
                        <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s3_3.jpg" alt="img" loading="lazy">
                    </div>
                    <p> Osteocondroza <br>și osteoporoza </p>
                </div>
                <div class="col-4">
                    <div class="col-4-img">
                        <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s3_4.jpg" alt="img" loading="lazy">
                    </div>
                    <p> Bursita </p>
                </div>
            </div>
        </div>
    </section>
    <section class="s8">
        <div class="container">
            <h2 class="text-center span-red"> <span>Ce boală </span> vă strică viața? </h2>
            <div class="table-wrap">
                <table>
                    <tbody>
                    <tr>
                        <th> Boala </th>
                        <th> Simptomele </th>
                        <th> Consecințe </th>
                    </tr>
                    <tr>
                        <td>
                            <b>Artrita și osteoartrita</b>
                        </td>
                        <td> Durere în timpul mișcării și în stare de repaus. Ronțăit. Mișcare dificilă.
                        </td>
                        <td> Apariția pintenilor și a structurilor chistice. Deformarea articulației. <b>Imobilitate
                                completă.</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Osteocondroza și osteoporoza</b>
                        </td>
                        <td> Amorțeala periodică a membrelor. Dureri de spate și a coloanei vertebrale. Durere
                            în regiunea inimii și a coastelor.
                        </td>
                        <td> Protruziune și <b>hernie de disc în zona cervicală.</b> Tulburări vasculare. </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Bursita</b>
                        </td>
                        <td> Edem puternic în zona articulației deteriorate. Mobilitate articulară afectată sau
                            imobilitate completă a membrelor. Senzații dureroase la palpare. Roșeața pielii cu
                            limite indistincte în zona tumorii.
                        </td>
                        <td> Înfrângerea puroiului țesuturilor. Infestarea sângelui. Apariția
                            fistulelor. <b>Pierderea totală a capacității motorii a articulației.</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Sinovita</b>
                        </td>
                        <td> Rigiditatea mișcărilor. Durere la palpare. Înfrângerea articulațiilor mari.
                            Senzații intense neplăcute și umflături în zona afectată.
                        </td>
                        <td>
                            <b>Infestarea sângelui. Paralizie.</b>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="s10">
        <div class="container">
            <h2> <span>Magnetic Belt</span> - ESTE: </h2>
            <div class="s10__list-wrap">
                <ul class="list">
                    <li><b>Eliminarea </b>complexă a bolii</li>
                    <li><b>Efectul </b>terapeutic asupra țesuturilor afectate </li>
                    <li><b>Ameliorarea </b>durerii instantanee </li>
                    <li><b>Efectul </b>direct asupra sursei durerii </li>
                    <li><b>Regenerarea </b>țesuturilor deteriorate </li>
                    <li><b>Prevenirea </b>bolilor articulare și osoase </li>
                </ul>
                <div class="s10_prod-wrap">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s10_prod.png" alt="img" class="prod" loading="lazy">
                    <!-- <picture>
                       <source type="image/webp" srcset="//rcktland-a.akamaihd.net/4163/images/s10_plaha.webp">
                       <img src="//rcktland-a.akamaihd.net/4163/images/s10_plaha.png" alt="img" class="plaha" loading="lazy">
                       </picture>                 -->
                </div>
            </div>
            <p class="text"> <span><b>În absența tratamentului adecvat,</b></span>articulațiile bolnave dau
                complicații severe întregului organism. Pentru a evita consecințele ireparabile sub formă de
                <span><b>paralizie parțială sau completă</b></span>, începeți tratamentul cât mai
                curând posibil!
            </p>
        </div>
    </section>
    <section class="s11">
        <div class="container">
            <h2 class="h-big"> STUDII INDEPENDENTE </h2>
            <p class="text"> În <span class="date-1" data-format="year">2020</span>, au fost efectuate studii
                care implică 1.700 de voluntari cu diferite grade de osteocondroză a gâtului și articulațiilor,
                încheieturii și genunchiului. Conform condițiilor, subiecții au folosit Magnetic Belt de
                trei ori pe zi timp de 30 de zile. Apoi urmează odihnă de 30 de zile și, dacă este necesar,
                repetarea cursului. La sfârșitul experimentului, pe baza datelor obținute, au fost compilate
                statisticile.
            </p>
            <div class="clearfix">
                <div class="col-2">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s11_graf.png" alt="img" loading="lazy" class="graph-img">
                </div>
                <div class="col-2">
                    <ul>
                        <li><b>97% dintre participanții</b> au simțit o ușurare instantanee a durerii la nivelul
                            gâtului și articulațiilor
                        </li>
                        <li><b>84% dintre subiecți</b> au scăpat de semnele de osteocondroză într-un singur
                            curs
                        </li>
                        <li><b>66% s-au întors</b> la o viață activă peste o săptămână după terminarea
                            cursului
                        </li>
                        <li><b>81% au remarcat</b> îmbunătățirea mobilității articulațiilor </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="s12">
        <div class="container">
            <div class="wrap">
                <h2 class="h-big"> Comentariile chirurgului: </h2>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/doc_mob.png" alt="img" class="doc_mob" loading="lazy">
                <p>De regulă, mă adresez în stadiul bolii, când<b> sunt necesare măsuri urgente.</b>
                    Înainte ca boala să transforme viața într-un chin nesfârșit, pacienții sunt
                    salvați cu <b>mijloace improvizate de eficacitate îndoielnică.</b>
                </p>
                <p> Este important să înțelegeți două lucruri: <b>1) cu cât începeţi tratamentul mai
                        devreme, cu atât rezultatul va fi mai eficient 2) Bolile articulare trebuie recuperarea
                        într-un curs întreg, </b>deoarece cauza principală a bolii este deteriorarea zonelor
                    interne. Rolul principal în recuperarea articulațiilor joacă medicamentele care penetrează
                    adânc în țesuturi. În timp ce majoritatea medicamentelor sunt create pentru
                    ameliorarea spasmului și ameliorarea durerii.
                </p>
                <p> Pentru recuperarea bolilor articulare, este rațional să alegeți o soluție calitativă. <b>Cel mai
                        eficient în lupta împotriva bolilor articulare în medicina probatorie de
                        astăzi este Magnetic Belt.</b> Din experiență, voi spune că 90% dintre pacienți sunt
                    recuperaţi complet într-un singur curs de aplicare. Pentru mine, în calitate de medic,
                    aceasta este o rată înaltă, așa că recomand pacienților mei doar Magnetic Belt.
                </p>
                <div class="text">
                    <b> Lucian Flaviu Vâlcescu </b>
                    <p>Medic-traumatolog, chirurg al secției de chirurgie articulară și artroscopie</p>
                </div>
            </div>
        </div>
    </section>
    <section class="s16">
        <div class="container">
            <h2 class="h-big text-center"> Unele dintre cele 7.588 comentarii: </h2>
            <div class="items">
                <div class="item">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s16_1.jpg" alt="img" loading="lazy">
                    <div class="item_wrap">
                        <div class="item_head"> <b>Ion Ghicu</b> <span>46 ani</span><i> logist </i> </div>
                        <p> Timp de doi ani m-a durut cotul teribil, nu am avut timp să merg la doctor. Cu pastile
                            când şi cum ieşeam din încurcătură, părea să-mi devină mai ușor și apoi a
                            apărut brusc pe cot o umflătură, ca în cazul bursitei. M-am speriat straşnic!
                            Mulțumesc soției mele, a insistat să-l folosesc așa cum ar trebui, mi-a adus Magnetic Belt. În câteva zile, edemul a scăzut, durerea a dispărut complet.
                            În cele din urmă mă simt ca un om cu drepturi depline!
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s16_2.jpg" alt="img" loading="lazy">
                    <div class="item_wrap">
                        <div class="item_head"> <b>Georgina Vieru</b> <span>39 ani </span><i>antreprenor </i> </div>
                        <p> Mi-au găsit un chist sub genunchi, doctorul a spus că nu poate face nimic, nu o poate
                            scoate. M-am dus la un alt doctor, mi-a prescris Magnetic Belt să-l îmbrac
                            de 3 ori pe zi. Mi-a devenit mai ușor din dată, în patru săptămâni durerea a
                            dispărut cu totul. Peste șase luni, s-a dovedit că chistul s-a dizolvat miraculos!
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s16_3.jpg" alt="img" loading="lazy">
                    <div class="item_wrap">
                        <div class="item_head"> <b>Ana Lucescu</b> <span>54 ani </span><i>gospodină</i> </div>
                        <p> Mi-am rănit gâtul și am stat foarte mult în spital, medicul a spus că voi
                            merge, dar va trebui să mă obișnuiesc cu durerea ocazională. Adevărat, durere era
                            nesuportabilă, fiecare pas era ca o pedeapsă. Pentru recuperarea țesuturilor, am
                            cumpărat Magnetic Belt. Durerea a plecat imediat.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s16_4.jpg" alt="img" loading="lazy">
                    <div class="item_wrap">
                        <div class="item_head"> <b>Vitalie Vulpoiu</b> <span>27 ani</span><i> programator </i>
                        </div>
                        <p> M-a durut gâtul, nu i-am acordat prea multă atenţie, până nu s-a început
                            durere grozavă - atât de puternică, încât nu am putut întoarce
                            capul. Am început cursul urgent cu Magnetic Belt. Într-o săptămână
                            am revenit la normal!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="s1 s17">
        <div class="container">
            <!-- <header>
               <picture>
                   <source type="image/webp" srcset="//rcktland-a.akamaihd.net/4163/images/logo.webp">
                   <img src="//rcktland-a.akamaihd.net/4163/images/logo.png" alt="img" class="logo" loading="lazy">
               </picture>

               </header> -->
            <h1> VICTORIE ASUPRA OSTEOCONDROZEI <span class="nowrap">ÎN 30 DE ZILE</span> </h1>
            <p class="text"> CORDON UNIC PENTRU GÂT ȘI ARTICULAȚII CARE: </p>
            <div class="list-wrap">
                <ul class="list">
                    <li> <span>Restaurează </span>țesutul osos și cartilaginos </li>
                    <li> <span>Instantaneu </span>ameliorează durerea </li>
                    <li> <span>Oprește </span>procesul inflamator </li>
                    <li> <span>Elimină </span>durerea și umflarea articulațiilor </li>
                    <li> <span>Distruge </span> infecția </li>
                </ul>
                <div class="form-wrap">
                    <div class="prod-wrap">
                        <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/prod.png" alt="img" class="prod prodd" loading="lazy">
                    </div>
                    <div class="form form-to">
                        <form action="{{$orderRoute}}" method="post" class="landing__form x_order_form">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            {{--<div class="prices">--}}
                                {{--<p>Începutul promoției <span class="date-1"></span></p>--}}
                                {{--<p>Promoția se termină <span class="date-0"></span></p>--}}
                                {{--<div class="new">--}}
                                    {{--<span class="minifytext">conform promoţiei</span>--}}
                                    {{--<b class="new_price_val">CU REDUCERE</b>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="price">
                                <div class="price__old price__item">
                                    <p class="price__title">
                                        Stara cena:
                                    </p>
                                    <p class="price__value">
                                    <span class="line-through">
                                       <span class="x_price_previous">
                                          {{ $prices[1]['originalPrice'] }}
                                       </span>
                                       <span class="x_currency">
                                          RSD
                                       </span>
                                    </span>
                                    </p>
                                </div>
                                <div class="price__new price__item">
                                    <p class="price__title">
                                        Nova cena:
                                    </p>
                                    <p class="price__value">
                                    <span class="x_price_current">
                                       {{ $prices[1]['amount'] }}
                                    </span>
                                        <span class="x_currency">
                                       RSD
                                    </span>
                                        <span>*</span>
                                    </p>
                                </div>
                            </div>
                            <input type="text" name="name" placeholder="Ime i prezime" required autocomplete="name">
                            <input type="tel" name="phone" placeholder="Telefon" required autocomplete="phone">
                            <input type="text" name="shipping_address" placeholder="Adresa" required autocomplete="shipping_address">
                            <input type="text" name="shipping_city" placeholder="Grad" required autocomplete="shipping_city">
                            <button type="submit" class="btn">PORUČITE SADA</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<div class="container container2">
    <p class="ro__text">
        Consumatorul are dreptul sa notifice in scris comerciantului ca renunta la cumparare, fara penalitati si fara invocarea unui motiv, in termen de 10 zile lucratoare de la primirea produsului sau, in cazul prestarilor de servicii, de la incheierea contractului.
    </p>
</div>
<footer>
    <div class="container">
        <div class="create_rom_footer" data-color_text="#000" data-color_link="#000" data-color_logo="#fff"></div>
    </div>
</footer>
<center></center>
@include('components.pixel_footer')
</body>
</html>