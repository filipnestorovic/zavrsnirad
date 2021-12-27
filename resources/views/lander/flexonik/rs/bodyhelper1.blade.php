<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/bodyhelper1/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/bodyhelper1/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/bodyhelper1/styles.css">
</head>
<body>
<div class="wrapper">
    @include('components.display_errors')
    <header class="header">
        <div class="pink-line header__pink-line">
            <div class="pink-line__left">
                <span class="pink-line__big-text"> 40%</span>
                <span class="pink-line__little-text"> popusta</span>
            </div>
            <div class="pink-line__right">ZA LEPO DRŽANJE I ZDRAVU KIČMU</div>
        </div>
        <div class="container header__container">
            <h1 class="header__main-title"> Body Helper</h1>
            <p class="header__subtitle">Uređaj №1 za zdrava i ravna leđa!</p>
            <ul class="header__list">
                <li class="header__item">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/tick.svg" class="header__tick">
                    <span>Zdrava kičma</span></li>
                <li class="header__item">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/tick.svg" class="header__tick">
                    <span>Pravo držanje</span></li>
                <li class="header__item">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/tick.svg" class="header__tick">
                    <span>Brzi rezultati</span></li>
            </ul>
        </div>
        <div class="header__prod-with-animation">
            <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/header_prod.png">
            <!-- <div class="animation-box header__animation-box">
                <div class="animation-box__point"></div>
            </div> -->
            <div class="anim-hint anim-hint_15">
                <div class="anim-hint__point_15"></div>
                <div class="third"></div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="row">
                <div class="header-bottom__left">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/tovar.png" class="header-bottom__tovar-img">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/e1.png" class="header-bottom__garanty-img">
                </div>
                <div class="header-bottom__right">
                    <div class="price">
                        <div class="price__old">
                            <span class="price__caption">Stara cena</span>
                            <span class="price__old-num"> {{ $prices[1]['originalPrice'] }} <span class="price__currency_old"> RSD</span>
                                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/old_price.svg" class="price__line-through">
                                </span>
                        </div>
                        <div class="price__new price-new">
                            <span class="price__caption">Nova cena</span>
                            <span class="price__new-num"> {{ $prices[1]['amount'] }}<span class="price__currency_new"> RSD</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#order_form" class="scroll-btn animated">PORUČI ODMAH</a>
        </div>
    </header>
    <section class="section section-1">
        <div class="container section-1__container">
            <div class="row">
                <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/e2.png" alt class="section-1__medal">
                <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/e3.png" alt class="section-1__medal">
                <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/e4.png" alt class="section-1__medal">
            </div>
            <h2 class="common-title">Masažer za leđa rešava navedene probleme jednom zauvek</h2>
            <div class="section-1__list">
                <div class="section-1__item">
                    <div class="section-1__text-box">
                        <p class="section-1__caption">Loše držanje</p>
                        <p class="section-1__text">Loše držanje, asimetrična leđa, pogrbljena ramena</p>
                    </div>
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/f1.png" class="section-1__img">
                </div>
                <div class="section-1__item">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/f2.png" class="section-1__img">
                    <div class="section-1__text-box">
                        <p class="section-1__caption"> Bol</p>
                        <p class="section-1__text">Umor mišića oko kičmenog stuba i bol u leđima</p>
                    </div>
                </div>
                <div class="section-1__item">
                    <div class="section-1__text-box">
                        <p class="section-1__caption"> Skolioza</p>
                        <p class="section-1__text">Zakrivljenost kičme, deformacija tela i unutrašnjih organa</p>
                    </div>
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/f3.png" class="section-1__img">
                </div>
            </div>
        </div>
    </section>
    {{--<section class="section section-2">--}}
        {{--<div class="container">--}}
            {{--<h2 class="common-title"> Rezultatul garantat în 30 de zile</h2>--}}
            {{--<div class="row">--}}
                {{--<div class="section-2__before">--}}
                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/crest.svg" class="section-2__before-img">--}}
                    {{--<span class="section-2__before-text"> Înainte</span>--}}
                {{--</div>--}}
                {{--<div class="section-2__after">--}}
                    {{--<span class="section-2__after-text"> După</span>--}}
                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/galka.svg" class="section-2__after-img">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="section-2__box">--}}
            {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/b1.jpg" class="section-2__main-img">--}}
            {{--<div class="section-2__img-with-animation">--}}
                {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/b2_prod.png" class="section-2__prod-img">--}}
                {{--<!-- <div class="animation-box section-2__animation-box">--}}
                    {{--<div class="animation-box__point"></div>--}}
                {{--</div> -->--}}
                {{--<div class="anim-hint anim-hint_15">--}}
                    {{--<div class="anim-hint__point_15"></div>--}}
                    {{--<div class="third"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <section class="section section-3">
        <h2 class="common-title">Kako funkcioniše?</h2>
        <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/1.gif" class="section-3__gif">
        <div class="section-3__list">
            <div class="section-3__item">
                <div class="section-3__caption">Elektrostimulacija</div>
                <div class="section-3__text">Mikrostruje prodiru u kožu i snažno deluju na mišiće i intervertebralne diskove</div>
            </div>
            <div class="section-3__item">
                <div class="section-3__caption">Oporavak</div>
                <div class="section-3__text">Mišićno - skeletni sistem će biti obnovljen i regenerisan</div>
            </div>
            <div class="section-3__item">
                <div class="section-3__caption">Relaksacija</div>
                <div class="section-3__text">Mišići će se opustiti a držanje će postati pravilno i lepo.</div>
            </div>
            <div class="section-3__img-with-animation">
                <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/recovery_tovar.png" class="section-3__prod-img">
                <!-- <div class="animation-box section-3__animation-box">
                    <div class="animation-box__point"></div>
                </div> -->
                <div class="anim-hint anim-hint_15">
                    <div class="anim-hint__point_15"></div>
                    <div class="third"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-4">
        <h2 class="common-title">Prava leđa su osnov za dobro zdravlje!</h2>
        <div class="slider section-4__slider">
            <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/ex1.jpg" alt>
            <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/ex2.jpg" alt>
            <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/ex3.jpg" alt>
            <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/ex4.jpg" alt>
            <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/ex5.jpg" alt>
            <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/ex6.jpg" alt>
            <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/ex7.jpg" alt>
        </div>
        <div class="counter"><span id="cp">1</span> /7</div>
        <div class="section-4__img-with-animation">
            <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/ex_prod.png" class="section-4__prod-img">
            <!-- <div class="animation-box section-4__animation-box">
                <div class="animation-box__point"></div>
            </div> -->
            <div class="anim-hint anim-hint_15">
                <div class="anim-hint__point_15"></div>
                <div class="third"></div>
            </div>
        </div>
    </section>
    <section class="section section-5">
        <h2 class="common-title">Karakteristike masažera za leđa</h2>
        <div class="container">
            <div class="section-5__item">
                <div class="section-5__caption">15 brzina</div>
                <div class="section-5__text">Možete da izaberete 15 brzina udarnih impulsa</div>
            </div>
            <div class="section-5__item">
                <div class="section-5__caption">9 načina rada</div>
                <div class="section-5__text">Shodno potrebi, mogu se birati načini rada</div>
            </div>
            <div class="section-5__item">
                <div class="section-5__caption">Skin-friendly materijal</div>
                <div class="section-5__text">Materijal je potpuno prijatan za kožu i ne izaziva iritacije</div>
            </div>
            <div class="section-5__item">
                <div class="section-5__caption">Set uključuje</div>
                <div class="section-5__text">Masažer za leđa i uputstvo za upotrebu</div>
            </div>
        </div>
        <a href="#order_form" class="scroll-btn animated">PORUČI ODMAH</a>
        <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/charact_prod.png" class="section-5__right-img">
        <div class="absolute-price">
            <div class="absolute-price__content">
                <div class="price__old">
                        <span class="price__old-num"> {{ $prices[1]['originalPrice'] }} <span class="price__currency_old"> RSD</span>
                            <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/old_price.svg" class="price__line-through">
                        </span>
                </div>
                <div class="price__new price-new">
                    <span class="price__new-num"> {{ $prices[1]['amount'] }}<span class="price__currency_new"> RSD</span></span>
                </div>
            </div>
        </div>
    </section>
    {{--<section class="section section-6">--}}
        {{--<div class="container">--}}
            {{--<h2 class="common-title"> Vreți să măriți efectul Body Helper <span> de 2 ori?</span>--}}
            {{--</h2>--}}
            {{--<h3 class="section-6__subtitle"> Încercați-l cu Arthromed! </h3>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/s6.png" class="section-6__main-img">--}}
            {{--<span class="section-6__x2-effect">--}}
                    {{--<span class="section-6__big-span"> x2 </span>--}}
                    {{--<span class="section-6__little-span"> Efect</span>--}}
                {{--</span>--}}
            {{--<div class="section-6__price">--}}
                {{--<span> {{ $prices[1]['amount'] }} RSD</span>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="container">--}}
            {{--<p class="common-text section-6__common-text">--}}
                {{--<span class="common-text_bold"> Crema Arthromed</span> este ambulanță pentru articulații.--}}
                {{--Ameliorează durerea, umflarea și spasmele, are un efect lubrifiant asupra articulațiilor și a--}}
                {{--discurilor intervertebrale.</p>--}}
            {{--<p class="common-text gold-border"> Dacă utilizați crema și a aparatul Body Helper în același timp,--}}
                {{--componentele vindecătoare se absoarbă de 2 ori mai bine, iar efectul durează de 2 ori mai mult.</p>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<section class="section section-7">--}}
        {{--<div class="container">--}}
            {{--<h2 class="common-title"> Beneficiile Body Helper + Arthromed sunt dovedite clinic </h2>--}}
            {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/s7_main.png" class="section-7__main-img">--}}
            {{--<div class="section-7__item">--}}
                {{--<div class="section-7__square section-7__square_blue"></div>--}}
                {{--<div class="section-7__item-content">--}}
                    {{--<div class="section-7__caption"> Grupul 1 (Body Helper) </div>--}}
                    {{--<div class="section-7__text"> 711 persoane, 5-65 ani, scolioza, postura slabă, dureri de spate--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="section-7__item">--}}
                {{--<div class="section-7__square section-7__square_yellow"></div>--}}
                {{--<div class="section-7__item-content">--}}
                    {{--<div class="section-7__caption"> Grupul 2 (Body Helper + Athromed*) </div>--}}
                    {{--<div class="section-7__text"> 738 persoane, 5-65 ani, scolioza, postura slabă, dureri de spate--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<section class="section-8">--}}
        {{--<h2 class="common-title"> Atenție la ofertă</h2>--}}
    {{--</section>--}}
    {{--<section class="section section-9">--}}
        {{--<div class="container">--}}
            {{--<h2 class="common-title"> Doar astăzi!<br> Comandați 2 seturi de Body Helper și primiți Arthromed cadou!</h2>--}}
        {{--</div>--}}
        {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/s9_main.png" class="section-9__main-img">--}}
        {{--<div class="row">--}}
            {{--<div class="section-9__left-column">--}}
                {{--<div class="price__old">--}}
                        {{--<span class="price__old-num"> 956 <span class="price__currency_old"> RSD</span>--}}
                            {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/old_price.svg" class="price__line-through">--}}
                        {{--</span>--}}
                {{--</div>--}}
                {{--<div class="price__new price-new">--}}
                    {{--<span class="price__new-num"> 478<span class="price__currency_new"> RSD</span></span>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="section-9__right-column">--}}
                {{--<div class="price__old">--}}
                        {{--<span class="price__old-num"> {{ $prices[1]['amount'] }} <span class="price__currency_old">RSD</span>--}}
                            {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/old_price.svg" class="price__line-through">--}}
                        {{--</span>--}}
                {{--</div>--}}
                {{--<p class="section-9__free"> Arthromed cadou</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<section class="section-10">--}}
        {{--<div class="header__timer timer">--}}
            {{--<p class="timer__remain"> Oferta se termină peste</p>--}}
            {{--<div class="timer-wrap">--}}
                {{--<div class="timer-block"><span class="t-hour num"></span> <span class="name"> ore</span></div>--}}
                {{--<div class="timer-block"><span class="t-min num"></span> <span class="name"> minute</span></div>--}}
                {{--<div class="timer-block"><span class="t-sec num"></span> <span class="name"> secunde</span></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<section class="section section-11">--}}
        {{--<a href="#order_form" class="scroll-btn animated">PORUČI ODMAH</a>--}}
    {{--</section>--}}
    <section class="section section-12">
        <div class="container">
            <h2 class="common-title">UTISCI NAŠIH KUPACA</h2>
            <div class="slider">
                <div class="section-12__item">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev1.jpg" class="section-12__item-img">
                    <p class="section-12__item-caption"> Perfect</p>
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/stars.svg" class="section-12__stars">
                    <p class="section-12__text"> Un aparat excelent! Mic, comod, eficient. Îl combin cu sportul,
                        mușchii se încălzesc rapid și lucrează mai bine. Senzația de microcurenți te face să ții
                        spatele drept. În general - recomand!</p>
                </div>
                {{--<div class="section-12__item2">--}}
                    {{--<div class="section-12__item2-top">--}}
                        {{--<div class="section-12__item2-top-left">--}}
                            {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/ava2.png" class="section-12__item2-ava">--}}
                            {{--<div class="section-12__item2-name"> sofiaa_i77</div>--}}
                        {{--</div>--}}
                        {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/dots.svg" alt class="section-12__item2-top-right">--}}
                    {{--</div>--}}
                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev6.jpg" class="section-12__item2-main-img">--}}
                    {{--<div class="section-12__item2-icon-box">--}}
                        {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev_icons1.svg">--}}
                        {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev_icons2.svg">--}}
                    {{--</div>--}}
                    {{--<div class="section-12__likes"> Like: 13 340 </div>--}}
                    {{--<div class="section-12__item2-bottom">--}}
                        {{--<span> sofiaa_i77</span> Minunata mea maseuză m-a sfătuit să încerc acest aparat pentru--}}
                        {{--prevenirea scoliozei, precum și pentru întărirea spatelui și corectarea posturii (am avut--}}
                        {{--probleme cu asta). Dispozitivul este foarte bun!</div>--}}
                {{--</div>--}}
                <div class="section-12__item">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev2.jpg" class="section-12__item-img">
                    <p class="section-12__item-caption"> Sunt 100% mulțumită! </p>
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/stars.svg" class="section-12__stars">
                    <p class="section-12__text"> Lucrez la computer 8-10 ore pe zi (sunt designer grafic). Seara, de
                        obicei, umerii și gâtul mă dor, și eu mă înclin, desigur. Am decis să am grijă de spatele
                        meu și mi-am cumpărat Body Helper. După o lună de utilizare, cu siguranță pot spune - acesta
                        este un dispozitiv must-have!</p>
                </div>
                {{--<div class="swiper-slide section-12__item3">--}}
                    {{--<div class="slide-content">--}}
                        {{--<div class="slide__header ">--}}
                            {{--<img class="avatar" src="{{ asset('/') }}flexonikFiles/bodyhelper1/ava6.png" alt>--}}
                            {{--<p class="name"><b> Clare K</b><span> Messenger</span></p>--}}
                            {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/slide__right.svg" alt class="right">--}}
                        {{--</div>--}}
                        {{--<div class="slide__main">--}}
                            {{--<div class="right"> Bună! Acum o lună ați cumpărat Body Helper de la noi. Dacă vreți,--}}
                                {{--puteți lăsa o recenzie.<div class="check r">--}}
                                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/check.svg" alt>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="left">--}}
                                {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/h2.png">--}}
                                {{--<span> Bună! Cu plăcere. Marfa a fost livrată foarte repede, non-contact, după cum--}}
                                        {{--s-a menționat. Produsul e ambalat bine. M-am îndrăgostit de acest „fluture”, îl--}}
                                        {{--port acasă, în mașină. Obișnuiam să mă înclin, acum am spatele perfect drept.--}}
                                        {{--Apropo, vreau să comand același aparat pentru mama ca cadou, plasăm o comandă--}}
                                        {{--acum?</span>--}}
                                {{--<div class="check l">--}}
                                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/check.svg" alt>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="slide__footer">--}}
                                {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/slide__footer.svg" alt>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="section-12__item2">--}}
                    {{--<div class="section-12__item2-top">--}}
                        {{--<div class="section-12__item2-top-left">--}}
                            {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/ava4.png" class="section-12__item2-ava">--}}
                            {{--<div class="section-12__item2-name"> Anastasia_istr444</div>--}}
                        {{--</div>--}}
                        {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/dots.svg" alt class="section-12__item2-top-right">--}}
                    {{--</div>--}}
                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev8.jpg" class="section-12__item2-main-img">--}}
                    {{--<div class="section-12__item2-icon-box">--}}
                        {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev_icons1.svg">--}}
                        {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev_icons2.svg">--}}
                    {{--</div>--}}
                    {{--<div class="section-12__likes"> Like: 14 632 </div>--}}
                    {{--<div class="section-12__item2-bottom">--}}
                        {{--<span> Anastasia_istr444</span> Mulțumesc Body Helper pentru spatele meu drept. De fapt,--}}
                        {{--rezultatul este vizibil în fotografie. Dacă vă interesează de unde l-am comandat, scrieți în--}}
                        {{--privat.</div>--}}
                {{--</div>--}}
                <div class="section-12__item">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev3.jpg" class="section-12__item-img">
                    <p class="section-12__item-caption"> Recomand</p>
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/stars.svg" class="section-12__stars">
                    <p class="section-12__text"> Am cumpărat aparatul pentru fiică, are scolioza din cauza creșterii
                        rapide. Îl folosim deja de aproximativ 2 luni. Primele rezultate au apărut peste 3
                        săptămâni, dar am decis să îl folosim în continuare. Spatele a devenit mai drept. Sunt
                        mulțumit de achiziție și îl recomand tuturor!</p>
                </div>
                {{--<div class="swiper-slide section-12__item3">--}}
                    {{--<div class="slide-content">--}}
                        {{--<div class="slide__header ">--}}
                            {{--<img class="avatar" src="{{ asset('/') }}flexonikFiles/bodyhelper1/ava7.png" alt>--}}
                            {{--<p class="name"><b> DanielDD</b><span> Messenger</span></p>--}}
                            {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/slide__right.svg" alt class="right">--}}
                        {{--</div>--}}
                        {{--<div class="slide__main">--}}
                            {{--<div class="right"> Bună ziua, ați achiziționat Body Helper de la noi, v-ați primit deja--}}
                                {{--comanda?<div class="check r">--}}
                                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/check.svg" alt>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="left">--}}
                                {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/h3.png">--}}
                                {{--<span> Bună, da. A fost livrat foarte repede, în câteva zile. Îl folosesc de mai--}}
                                        {{--puțin de o săptămână, dar acesta este un lucru extraordinar, simt cum mi se--}}
                                        {{--îndreaptă spatele. Și mușchii lucrează foarte bine, gâtul nu mă mai doare,--}}
                                        {{--mulțumesc mult!</span>--}}
                                {{--<div class="check l">--}}
                                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/check.svg" alt>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="slide__footer">--}}
                                {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/slide__footer.svg" alt>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="section-12__item">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev4.jpg" class="section-12__item-img">
                    <p class="section-12__item-caption"> Spatele a devenit drept</p>
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/stars.svg" class="section-12__stars">
                    <p class="section-12__text"> L-am cumpărat pentru tată, el este deja bătrân, dar încă activ!
                        Recent, se plângea de dureri de spate. Datorită carantinei, cursul de masaj s-a anulat, așa
                        că am decis să încercăm Body Helper. Sincer - nu credeam că va ajuta. Dar tatăl este foarte
                        fericit, spune că elimină durerea. Așa că vă dau 5 stele!</p>
                </div>

                {{--<div class="section-12__item2">--}}
                    {{--<div class="section-12__item2-top">--}}
                        {{--<div class="section-12__item2-top-left">--}}
                            {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/ava1.png" class="section-12__item2-ava">--}}
                            {{--<div class="section-12__item2-name"> Andri_i77</div>--}}
                        {{--</div>--}}
                        {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/dots.svg" alt class="section-12__item2-top-right">--}}
                    {{--</div>--}}
                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev5.jpg" class="section-12__item2-main-img">--}}
                    {{--<div class="section-12__item2-icon-box">--}}
                        {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev_icons1.svg">--}}
                        {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev_icons2.svg">--}}
                    {{--</div>--}}
                    {{--<div class="section-12__likes"> Like: 10 253 </div>--}}
                    {{--<div class="section-12__item2-bottom">--}}
                        {{--<span> Andri_i77</span> Salut tuturor! Mi-am rupt spatele la sală, antrenorul a sfătuit--}}
                        {{--acest aparat numit Body Helper. Toate senzațiile neplăcute au dispărut în câteva zile. În--}}
                        {{--plus, relaxează bine. Cine are nevoie de un link către magazin - scrieți în privat.</div>--}}
                {{--</div>--}}
                {{--<div class="swiper-slide section-12__item3">--}}
                    {{--<div class="slide-content">--}}
                        {{--<div class="slide__header ">--}}
                            {{--<img class="avatar" src="{{ asset('/') }}flexonikFiles/bodyhelper1/ava5.png" alt>--}}
                            {{--<p class="name"><b> Alex Gim</b><span> Messenger</span></p>--}}
                            {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/slide__right.svg" alt class="right">--}}
                        {{--</div>--}}
                        {{--<div class="slide__main">--}}
                            {{--<div class="right"> Bună ziua, ați comandat Body Helper de la noi, vă place calitatea--}}
                                {{--produsului?<div class="check r">--}}
                                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/check.svg" alt>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="left">--}}
                                {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/h1.png">--}}
                                {{--<span> Bună! Îl folosesc de câteva săptămâni. Pe scurt, totul este super. La început--}}
                                        {{--senzațiile erau neobișnuite, dar acum starea spatelui este mult mai bună.</span>--}}
                                {{--<div class="check l">--}}
                                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/check.svg" alt>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="right"> Mulțumim, suntem foarte bucuroși că v-a plăcut!<div class="check r">--}}
                                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/check.svg" alt>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="slide__footer">--}}
                                {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/slide__footer.svg" alt>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="section-12__item2">--}}
                    {{--<div class="section-12__item2-top">--}}
                        {{--<div class="section-12__item2-top-left">--}}
                            {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/ava3.png" class="section-12__item2-ava">--}}
                            {{--<div class="section-12__item2-name"> Dan_ip988</div>--}}
                        {{--</div>--}}
                        {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/dots.svg" alt class="section-12__item2-top-right">--}}
                    {{--</div>--}}
                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev7.jpg" class="section-12__item2-main-img">--}}
                    {{--<div class="section-12__item2-icon-box">--}}
                        {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev_icons1.svg">--}}
                        {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev_icons2.svg">--}}
                    {{--</div>--}}
                    {{--<div class="section-12__likes"> Like: 10 013 </div>--}}
                    {{--<div class="section-12__item2-bottom">--}}
                        {{--<span> Dan_ip948</span> Împărtășesc un life hack - Body Helper întărește spatele. E un--}}
                        {{--aparat foarte mișto, cu siguranță merită banii!</div>--}}
                {{--</div>--}}
            </div>
            <div class="counter"><span id="cp2">1</span> /4</div>
        </div>
    </section>
    <section class="section section-13">
        <div class="container">
            <h2 class="common-title">Kako poručiti?</h2>
            <div class="section-13__steps">
                <div class="section-13__step">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/z1.svg">
                    <div class="section-13__step-text">Ostavite podatke na našem sajtu</div>
                </div>
                <div class="section-13__step">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/z2.svg">
                    <div class="section-13__step-text">Kontaktiraćemo vas da potvrdimo porudžbinu</div>
                </div>
                <div class="section-13__step">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/z3.svg">
                    <div class="section-13__step-text">Robu šaljemo brzom poštom u roku od 1-2 radna dana</div>
                </div>
                <div class="section-13__step">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/z4.svg">
                    <div class="section-13__step-text">Pošiljku plaćate kuriru brze pošte na vašoj adresi!</div>
                </div>
            </div>
        </div>
        <div class="section-13__features">
            <div class="section-13__item">Brza i sigurna dostava</div>
            <div class="section-13__item">Testirani proizvodi</div>
            <div class="section-13__item">Sigurna kupovina</div>
        </div>
        <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/s_13.png" class="section-13__main-img">
    </section>

    <section class="header bottom">
        <div class="pink-line header__pink-line bottom__pink-line">
            <div class="pink-line__left">
                <span class="pink-line__big-text"> 40%</span>
                <span class="pink-line__little-text"> popusta</span>
            </div>
            <div class="pink-line__right">ZA LEPO DRŽANJE I ZDRAVU KIČMU</div>
        </div>
        <div class="container header__container">
            <h1 class="header__main-title bottom__main-title"> Body Helper</h1>
            <p class="header__subtitle bottom__subtitle">Uređaj №1 za zdrava i ravna leđa!</p>
        </div>
        <div class="header__prod-with-animation bottom__prod-with-animation">
            <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/footer_prod.png">
            <!-- <div class="animation-box bottom__animation-box">
                <div class="animation-box__point"></div>
            </div> -->
            <div class="anim-hint anim-hint_15">
                <div class="anim-hint__point_15"></div>
                <div class="third"></div>
            </div>
        </div>
    </section>
    {{--<section class="section section-9">--}}
        {{--<div class="container">--}}
            {{--<h2 class="common-title"> Doar astăzi!<br> Comandați 2 seturi de Body Helper și primiți Arthromed cadou!</h2>--}}
        {{--</div>--}}
        {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/s9_main.png" class="section-9__main-img">--}}
        {{--<div class="row">--}}
            {{--<div class="section-9__left-column">--}}
                {{--<div class="price__old">--}}
                        {{--<span class="price__old-num"> 956 <span class="price__currency_old"> RSD</span>--}}
                            {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/old_price.svg" class="price__line-through">--}}
                        {{--</span>--}}
                {{--</div>--}}
                {{--<div class="price__new price-new">--}}
                    {{--<span class="price__new-num"> {{ $prices[1]['originalPrice'] }}<span class="price__currency_new"> RSD</span></span>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="section-9__right-column">--}}
                {{--<div class="price__old">--}}
                        {{--<span class="price__old-num"> {{ $prices[1]['amount'] }} <span class="price__currency_old">RSD</span>--}}
                            {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/old_price.svg" class="price__line-through">--}}
                        {{--</span>--}}
                {{--</div>--}}
                {{--<p class="section-9__free"> Arthromed cadou</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<section class="section-10">--}}
        {{--<div class="header__timer timer">--}}
            {{--<p class="timer__remain"> Oferta se termină peste</p>--}}
            {{--<div class="timer-wrap">--}}
                {{--<div class="timer-block"><span class="t-hour num"></span> <span class="name"> ore</span></div>--}}
                {{--<div class="timer-block"><span class="t-min num"></span> <span class="name"> minute</span></div>--}}
                {{--<div class="timer-block"><span class="t-sec num"></span> <span class="name"> secunde</span></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <section class="section section-14">
        <div class="container">
            <h2 class="common-title">Iskoristite ponudu i poručite Body Helper po sniženoj ceni!</h2>
            <form method="post" action="{{$orderRoute}}" id="order_form" class="section-14__form">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" placeholder="Ime i prezime" required class="section-14__form-input">
                <input type="tel" name="phone" placeholder="Telefon" required class="section-14__form-input">
                <input type="text" name="shipping_address" placeholder="Adresa" required class="section-14__form-input">
                <input type="text" name="shipping_city" placeholder="Grad" required class="section-14__form-input">
                <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/labels.png" class="section-14__labels">
                <button class="scroll-btn animated" type="submit">ZAVRŠITE PORUDŽBINU</button>
            </form>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}flexonikFiles/bodyhelper1/slick.min.js"></script>
<script>
    $('.slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: true,
        autoplay: false,
        autoplaySpeed: 3000,
    });
    $('.slider').on('afterChange', function(event, slick, currentSlide){
        $("#cp").text(currentSlide + 1);
    });
    $('.slider').on('afterChange', function(event, slick, currentSlide){
        $("#cp2").text(currentSlide + 1);
    });
    $('a[href^="#"]').click(function (){
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
        return false;
    });
</script>
@include('components.pixel_footer')
</body>
</html>