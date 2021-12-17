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
        html {
            scroll-behavior: smooth;
        }
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
<div class="fixedtop">
    <div class="fixedtop__wrap clearfix">
        <picture>
            <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/logo.png" class="fixedtop__img" alt="img">
        </picture>
        <p class="fixedtop__cap">Samo danas proizvod je dostupan sa popustom od 40%</p>

        <a href="#orderForm"><button class="fixedtop__btn ever-popup-btn">KUPI ODMAH</button></a>
    </div>
</div>
<main>
    @include('components.display_errors')
    <section class="s1">
        <div class="container">
            <div class="logo">
                <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/logo.png" alt="img">
            </div>
            <h1> OSLOBAĐA GLAVOBOLJE I BOLA U VRATU <span class="nowrap">ZA KRATAK PERIOD</span> </h1>
            <p class="text">GLAVNE PREDNOSTI OVOG POJASA:</p>
            <div class="list-wrap">
                <ul class="list">
                    <li><span>Eliminiše</span> glavobolju i vrtoglavicu</li>
                    <li><span>Ublažava</span> napetost u vratu</li>
                    <li><span>Pomaže</span> vraćanju pokretljivosti zglobova i oblažavanju upale</li>
                    <li><span>Eliminiše i sprečava</span> uklještenje nerava</li>
                    <li><span>Pomaže</span> u normalizaciji sluha i vida</li>
                </ul>
                <div class="form-wrap">
                    <div class="prod-wrap">
                        <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/prod.png" alt="img" class="prod">
                    </div>
                    <div class="form">
                        <form action="{{$orderRoute}}" method="post" class="landing__form x_order_form">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
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
                <h2>PROTIV <span>KAKVIH TEGOBA</span> SE BORI MAGNETNI POJAS?</h2>
                <blockquote>
                    <p><b><span>Magnetni pojas</span> - jedinstveni proizvod za bol u vratu i zglobovima, </b> koji nema alternativu na srpskom tržištu.</p>
                </blockquote>
                <p>Trajna efikasnost magnetnog pojasa - <b>ciljano delovanje na kritično područje vrata, zglobova i kolena,</b>
                    zahvaljujući čemu dolazi do oslobađanja od bola i napetosti.</p>
            </div>
            <picture>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s2.png" alt="img" loading="lazy">
            </picture>
        </div>
    </section>
    <section class="s3">
        <div class="container">
            <h3>EVO <span>KOD KOJIH TEGOBA</span> MOŽE DA POMOGNE <br> MAGNETNI POJAS:</h3>
            <div class="items items-4">
                <div class="col-4">
                    <div class="col-4-img">
                        <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s3_1.jpg" alt="img" loading="lazy">
                    </div>
                    <p>Bolovi u zglobovima</p>
                </div>
                <div class="col-4">
                    <div class="col-4-img">
                        <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s3_2.jpg" alt="img" loading="lazy">
                    </div>
                    <p>Oticanje nogu</p>
                </div>
                <div class="col-4">
                    <div class="col-4-img">
                        <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s3_3.jpg" alt="img" loading="lazy">
                    </div>
                    <p>Bol u leđima i vratu</p>
                </div>
                <div class="col-4">
                    <div class="col-4-img">
                        <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s3_4.jpg" alt="img" loading="lazy">
                    </div>
                    <p>Otok kolena</p>
                </div>
            </div>
        </div>
    </section>
    <section class="s10">
        <div class="container">
            <h2><span>DELOVANJE</span> MAGNETNOG POJASA:</h2>
            <div class="s10__list-wrap">
                <ul class="list">
                    <li>Potpuno <b>eliminisanje bola</b></li>
                    <li><b>Terapeutski efekat</b> ne bolna tkiva</li>
                    <li>Trenutno <b>opuštanje</b></li>
                    <li>Direktan uticaj na <b>izvor bola</b></li>
                    <li><b>Regeneriše</b> oštećena tkiva</li>
                    <li><b>Prevencija bolesti</b> zglobova i kostiju</li>
                </ul>
                <div class="s10_prod-wrap">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s10_prod.png" alt="img" class="prod" loading="lazy">
                </div>
            </div>
            <p class="text">U nedostatku pravilnog lečenja, <span><b>bolesni zglobovi mogu da naprave komplikacije po celom telu.</b></span>
                Da bi se izbegle nepopravljive posledice, potrebno je <span><b>preventivno delovati što je pre moguće.</b></span></p>
        </div>
    </section>
    <section class="s12">
        <div class="container">
            <div class="wrap">
                <h2 class="h-big">MIŠLJENJE STRUKE:</h2>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/doc_mob.png" alt="img" class="doc_mob" loading="lazy">
                <p>Obično mi pacijenti dođu <b>kada su u stadijumu da je potrebna hitna intervencija.</b> Preko nego što se bolest pretvori u beskrajnu muku,
                    pacijenti <b>pokušavaju da reše problem improvizovanim sredstvima</b> sumnjive efikasnosti.</p>
                <p>Važno je razumeti dve stvari:
                    <br><br><b>1) Što se ranije počne sa lečenjem rezultat će biti efikasniji,</b>
                    <br><br><b>2) Bolesti zglobova se moraju u korenu rešavati jer je glavni uzrok oštećenje u unutrašnjim delovima.</b>
                    <br><br>Glavnu ulogu ima <b>dejstvo koje duboko prodire u tkivo</b>, a ne lekovi koji samo trenutno ublažavaju grč i bol.</p>
                <p>Za oporavak od bolesti zglobova potrebno je izabrati kvalitetno rešenje.
                    <b>Najefikasniju u toj borbi je magnetni pojas.</b> Iz iskustva, reći ću da se gotovo <b>90% pacijenata potpuno oporavi.</b>
                    Za mene kao lekara ovo je visoka stopa, tako da svojim pacijentima preporučujem samo magnetni pojas.</p>
            </div>
        </div>
    </section>
    <section class="s16">
        <div class="container">
            <h2 class="h-big text-center">NEKI OD 7.588 UTISAKA KUPACA</h2>
            <div class="items">
                <div class="item">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s16_1.jpg" alt="img" loading="lazy">
                    <div class="item_wrap">
                        <div class="item_head"> <b>Igor Gogić</b> <span>46 godina</span> </div>
                        <p>Dve godine me je užasno boleo lakat, nisam imao vremena da odem kod doktora. Sa pilulama sam nekako uspevao da smanjim bol, ali nisam uspeo da rešim problem do kraja.
                            Pojavio mi se otok i bio sam jako uplašen. Moja supruga je videla ovaj proizvod na internetu i poručila mi. Nakon nekoliko nedelja, bol je potpuno nestao. Konačno živim bez muke i bola.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s16_2.jpg" alt="img" loading="lazy">
                    <div class="item_wrap">
                        <div class="item_head"> <b>Gorica Popović</b> <span>39 godina</span> </div>
                        <p>Našli su mi cistu ispod kolena, a doktor je rekao da ne može ništa da se uradi bez operacije. Otišla sam kod drugog doktora i on mi je prepisao da nosim magnetni pojas. Postalo mi je mnogo lakše,
                            a nakon 4 nedelje bol je nestao, a posle pola godine nije više bilo ciste.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s16_3.jpg" alt="img" loading="lazy">
                    <div class="item_wrap">
                        <div class="item_head"> <b>Ana Lučić</b> <span>54 godine</span> </div>
                        <p>Povredila sam vrat i provela dosta vremena u bolnici. Doktor mi je rekao da ću morati da se naviknem na povremene bolove. Bol je često bio nepodnošljiv i na kraju sam se navikla na njega. Suprug mi je kupio magnetni pojas koji mi zaista puno pomaže u smanjenju bola.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/s16_4.jpg" alt="img" loading="lazy">
                    <div class="item_wrap">
                        <div class="item_head"> <b>Vitomir Kapuran</b> <span>27 godina</span>
                        </div>
                        <p>Boleo me je vrat ali nisam mnogo obraćao pažnju na to sve dok nisam došao u fazu da ne mogu da okrenem glavu. Počeo sam da koristim magnetni pojas i za nedelju dana sam se skroz vratio u normalu.
                            Sve preporuke za ovaj proizvod.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="s1 s17">
        <div class="container">
            <h1> OSLOBAĐA GLAVOBOLJE I BOLA U VRATU <span class="nowrap">ZA KRATAK PERIOD</span> </h1>
            <p class="text">GLAVNE PREDNOSTI OVOG POJASA:</p>
            <div class="list-wrap">
                <ul class="list">
                    <li><span>Eliminiše</span> glavobolju i vrtoglavicu</li>
                    <li><span>Ublažava</span> napetost u vratu</li>
                    <li><span>Pomaže</span> vraćanju pokretljivosti zglobova i oblažavanju upale</li>
                    <li><span>Eliminiše i sprečava</span> uklještenje nerava</li>
                    <li><span>Pomaže</span> u normalizaciji sluha i vida</li>
                </ul>
                <div class="form-wrap">
                    <div class="prod-wrap">
                        <img src="{{ asset('/') }}purplerelaxFiles/magneticbelt/prod.png" alt="img" class="prod prodd" loading="lazy">
                    </div>
                    <div class="form form-to">
                        <form action="{{$orderRoute}}" method="post" class="landing__form x_order_form" id="orderForm">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
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
@include('components.pixel_footer')
</body>
</html>