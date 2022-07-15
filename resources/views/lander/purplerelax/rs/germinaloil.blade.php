<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/hairoil/main.min.css">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/germinaloil/pack_big.png" type="image/x-icon">
    <style>
        .form-pack {
            background: url({{ asset('/') }}purplerelaxFiles/germinaloil/pack.png) no-repeat center;
            width: 168px;
            height: 278px;
            position: absolute;
            left: -10px;
            top: -54px
        }
        .block4-pack {
            position: absolute;
            width: 291px;
            height: 463px;
            background: url({{ asset('/') }}purplerelaxFiles/germinaloil/pack_big.png) no-repeat center;
            left: 50%;
            -webkit-transform: translateX(-49%);
            -ms-transform: translateX(-49%);
            transform: translateX(-49%);
            bottom: 50px
        }
        .block11 .form-pack {
            z-index: 2;
            width: 119px;
            height: 341px;
            left: 30px;
            background: url({{ asset('/') }}purplerelaxFiles/germinaloil/pack_solo.png) no-repeat center
        }
    </style>
</head>
<body>
<div class="overflow">
    @include('components.display_errors')s
    <div class="block1">
        <div class="container">
            <div class="block1-header">
                <a href="#" class="logo">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairoil/logo.png" alt="">
                </a>
                <ul class="block1-header-list">
                    <li class="block1-header-list__item">
                        <div class="block1-header-list__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/ic1.png" alt="">
                        </div>
                        <div class="block1-header-list__text">
                            POTVRĐENA EFIKASNOST
                        </div>
                    </li>
                    <li class="block1-header-list__item">
                        <div class="block1-header-list__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/ic2.png" alt="">
                        </div>
                        <div class="block1-header-list__text">
                            PROIZVOD GODINE 2021
                        </div>
                    </li>
                    <li class="block1-header-list__item">
                        <div class="block1-header-list__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/ic3.png" alt="">
                        </div>
                        <div class="block1-header-list__text">
                            100% PRIRODNI SASTOJCI
                        </div>
                    </li>
                </ul>
            </div>
            <h1 class="block1__heading">KOMPLETNA REGENERACIJA KOSE U <span class="green">28 DANA</span></h1>
            <ul class="block1-list desktop">
                <li class="block1-list__item">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairoil/leaf.png" alt="" class="block1-list__img">
                    <div class="block1-list__text">Ponovni rast kose</div>
                </li>
                <li class="block1-list__item">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairoil/leaf.png" alt="" class="block1-list__img">
                    <div class="block1-list__text">Buđenje uspavanih folikula</div>
                </li>
                <li class="block1-list__item">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairoil/leaf.png" alt="" class="block1-list__img">
                    <div class="block1-list__text">Sprečavanje opadanja</div>
                </li>
            </ul>
            <h2 class="block1__subheading desktop">ZAUSTAVLJANJE GUBITKA KOSE ZAUVEK</h2>
            <div class="block1-girl"></div>
            <div class="block1-decor1"></div>
            <div class="block1-decor2"></div>
        </div>
    </div>
    <div class="block1-2 mobile">
        <div class="container">
            <div class="block1-2__item">
                <div class="timer">
                    <div class="timer__container">
                        <div class="timer__item">
                            <div class="timer__item-label">ISKORISTI</div>
                            <div class="timer__item-tx">POPUST</div>
                        </div>
                    </div>
                </div>
                <button class="button-mobile __js-scroll-form">PORUČITE SADA</button>
            </div>
        </div>
    </div>
    <div class="block1 mobile">
        <div class="container">
            <ul class="block1-list mobile">
                <li class="block1-list__item">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairoil/leaf.png" alt="" class="block1-list__img">
                    <div class="block1-list__text">Ponovni rast kose</div>
                </li>
                <li class="block1-list__item">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairoil/leaf.png" alt="" class="block1-list__img">
                    <div class="block1-list__text">Buđenje uspavanih folikula</div>
                </li>
                <li class="block1-list__item">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairoil/leaf.png" alt="" class="block1-list__img">
                    <div class="block1-list__text">Sprečavanje opadanja</div>
                </li>
            </ul>
            <h2 class="block1__subheading mobile">ZAUSTAVLJANJE GUBITKA KOSE ZAUVEK</h2>
            <img class="mobile block1-girl__mobile" src="{{ asset('/') }}purplerelaxFiles/hairoil/girl1.png" alt="">
        </div>
    </div>
    <div class="block2">
        <div class="container">
            <form class="orderForm form desktop" action="{{$orderRoute}}" method="POST">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div class="form__wrapper">
                    <div class="form-pack">
                        <div class="form-pack__sale">-40%</div>
                    </div>
                    <div class="form__header">Kupite odmah sa popustom!</div>
                    <div class="form__main">
                        <div class="form__element">
                            <div class="input-group tooltip-hide">
                                <input name='name' class="form-input order_data" placeholder="Ime i prezime"
                                       required type="text">
                            </div>
                        </div>
                        <div class="form__element">
                            <div class="input-group tooltip-hide">
                                <input name='phone' class="form-input order_data" placeholder="Telefon" required
                                       type="tel">
                            </div>
                        </div>
                        <div class="form-price">
                            <div class="form-price__old old" style='font-size: 2em; white-space: nowrap'>
                                {{ $prices[1]['originalPrice'] }}
                                {{ $prices[1]['currency'] }}
                            </div>
                            <div class="form-price__new" style='font-size: 2.4em; white-space: nowrap'>
                                {{ $prices[1]['amount'] }}
                                {{ $prices[1]['currency'] }}
                            </div>
                        </div>
                    </div>
                    <div class="form__footer">
                        <div class="timer">
                            <div class="timer__container">
                                <div class="timer__item">
                                    <div class="timer__item-label">ISKORISTI</div>
                                    <div class="timer__item-tx">POPUST</div>
                                </div>
                            </div>
                        </div>
                        <div class="form__arrows">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/arrow_form.png" alt="">
                        </div>
                    </div>
                    <div class="form__button">
                        <input class="form__button-element buynow" type="submit" value="PORUČI">
                    </div>
                </div>
            </form>
            <div class="block2__wrap">
                <div class="block2__heading">UZROCI <span class="red"> GUBITKA </span> KOSE</div>
                <ul class="block2-list">
                    <li class="block2-list__item">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b2_i1.png" alt="" class="block2-list__img">
                        <div class="block2-list__tx">Nasledni faktor</div>
                    </li>
                    <li class="block2-list__item">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b2_i2.png" alt="" class="block2-list__img">
                        <div class="block2-list__tx">Hormonalni <br> disbalans</div>
                    </li>
                    <li class="block2-list__item">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b2_i3.png" alt="" class="block2-list__img">
                        <div class="block2-list__tx">Stres</div>
                    </li>
                    <li class="block2-list__item">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b2_i4.png" alt="" class="block2-list__img">
                        <div class="block2-list__tx">Blokada folikula dlake</div>
                    </li>
                    <li class="block2-list__item">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b2_i5.png" alt="" class="block2-list__img">
                        <div class="block2-list__tx">Uticaj toksičnih faktora</div>
                    </li>
                </ul>
            </div>
            <div class="block2-girl"></div>
            <img class="mobile block2-girl__mobile" src="{{ asset('/') }}purplerelaxFiles/hairoil/girl2.png" alt="">
        </div>
    </div>
    <div class="block3">
        <div class="container">
            <h3 class="block3__heading">KAKO GERMINALNO ULJE ZA KOSU FUNKCIONIŠE I ZAŠTO JE <span class="blue">BOLJE OD OSTALIH?</span>
            </h3>
            <ul class="block3-list">
                <li class="block3-list__item">
                    <div class="block3-list__wrap">
                        <div class="block3-list__tx">Germinalno ulje deluje na ubrzavanje rasta dlake u <span class="blue">područjima sa malom gustoćom</span>
                            i stvara barijeru protiv oštećenja folikula.
                        </div>
                        <div class="block3-list__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b3_i1.png" alt="">
                        </div>
                    </div>
                    <div class="block3-decor3"></div>
                </li>
                <li class="block3-list__item">
                    <div class="block3-list__wrap">
                        <div class="block3-list__tx">Aktivira uspavane folikule dlake na mikroćelijskom nivou, <span
                                class="blue">revitalizujući ih iznutra</span> zahvaljujući setu posebno odabranih
                            hranjivih sastojaka.
                        </div>
                        <div class="block3-list__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b3_i2.png" alt="">
                        </div>
                    </div>
                    <div class="block3-decor2"></div>
                </li>
                <li class="block3-list__item">
                    <div class="block3-list__wrap">
                        <div class="block3-list__tx">Sprečava dalji gubitak kose jačanjem i obnavljanjem folikula dlake.
                            <span class="blue">Stvara zaštitni sloj</span> protiv uticaja negativnih faktora okoline.
                        </div>
                        <div class="block3-list__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b3_i3.png" alt="">
                        </div>
                    </div>
                    <div class="block3-decor4"></div>
                </li>
            </ul>
            <div class="block3-decor1"></div>
            <div class="block3-girl"></div>
            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/girl3.png" alt="" class="mobile block3-girl__mobile">
        </div>
    </div>
    <div class="block4">
        <div class="container">
            <h3 class="block4__heading">GERMINALNO ULJE ZA KOSU SADRŽI <span class="blue">NAJMOĆNIJE SASTOJKE</span> ZA
                JAČANJE KOSE</h3>
            <ul class="block4-list">
                <li class="block4-list__item">
                    <div class="block4-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b4_i1.png" alt="">
                    </div>
                    <div class="block4-list__header">EKSTRAKT <br> PŠENICE</div>
                    <div class="block4-list__tx"><span class="bold">Smanjuje proces starenja folikula,</span> sprečava
                        gubitak kose i aktivira uspavane folikule dlake
                    </div>
                </li>
                <li class="block4-list__item">
                    <div class="block4-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b4_i2.png" alt="">
                    </div>
                    <div class="block4-list__header">EKSTRAKT <br> KVASCA</div>
                    <div class="block4-list__tx">Popunjava praznine u vlasima i čini kosu <span class="bold">elastičnom i lakom za održavanje.</span>
                    </div>
                </li>
                <li class="block4-list__item">
                    <div class="block4-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b4_i3.png" alt="">
                    </div>
                    <div class="block4-list__header">EKSTRAKT <br> ĐUMBIRA</div>
                    <div class="block4-list__tx">Učestvuje u asimilaciji važnih <span class="bold">hranjivih materija za kosu (kalcijum, fosfor, vitamin B6, B1, E)</span>
                        i sprečava pucanje kose.
                    </div>
                </li>
                <li class="block4-list__item">
                    <div class="block4-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b4_i4.png" alt="">
                    </div>
                    <div class="block4-list__header">BREZA</div>
                    <div class="block4-list__tx"><span class="bold">Hrani kožu glave, vlaži i sprečava nastanak suvoće, svraba i peruti.</span>
                        Poboljšava cirkulaciju krvi i ubrzava rast kose.
                    </div>
                </li>
            </ul>
            <div class="block4-pack"></div>
        </div>
    </div>
    <div class="block5">
        <div class="container">
            <div class="block5__header"><span class="green">UNIVERZALNA FORMULA </span> ZA MUŠKARCE <br> I ŽENE<span
                    class="block5__line"></span></div>
            <div class="block5__label mobile">ODLIČNO DELUJE NA FARBANU KOSU</div>
            <div class="block5__man"></div>
            <div class="block5__girl"></div>
            <div class="block5__label desktop">ODLIČNO DELUJE NA FARBANU KOSU</div>
            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/girl4.png" alt="" class="block5-girl__mobile mobile">
        </div>
    </div>
    <div class="block6">
        <div class="container">
            <div class="block6__header">JEDNOSTAVNO I LAKO KORIŠĆENJE <span class="green">ZA POSTIZANJE NAJBOLJIH REZULTATA</span>
            </div>
            <ul class="block6-list">
                <li class="block6-list__item">
                    <div class="block6-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b6_i.png" alt="">
                    </div>
                    <div class="block6-list__tx">GLATKA I SVILENKASTA KOSA</div>
                </li>
                <li class="block6-list__item">
                    <div class="block6-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b6_i2.png" alt="">
                    </div>
                    <div class="block6-list__tx">SMANJUJE PUCANJE KOSE NA MINIMUM</div>
                </li>
                <li class="block6-list__item">
                    <div class="block6-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b6_i3.png" alt="">
                    </div>
                    <div class="block6-list__tx">SMANJUJE OPADANJE KOSE</div>
                </li>
                <li class="block6-list__item">
                    <div class="block6-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b6_i4.png" alt="">
                    </div>
                    <div class="block6-list__tx">DAJE EFEKAT BUJNE I SJAJNE KOSE</div>
                </li>
            </ul>
        </div>
    </div>
    <div class="block8">
        <div class="container">
            <div class="block8__header">
                UTISCI NAŠIH <span class="blue">ZADOVOLJNIH</span> KUPACA
            </div>
            <ul class="review-list">
                <li class="review-list__item">
                    <div class="review-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/rev1.png" alt="">
                    </div>
                    <div class="review-list__tx"><span
                            class="bold">Nakon dve nedelje korišćenja primetila sam rezultat!</span> Na temenu sam imala
                        proređenu kosu i to me je dosta iritiralo.
                        Počela sam da koristim ovaj proizvod i već nakon 7-8 dana videla sam poboljšanje. Nova mlada
                        kosa počela je da raste i
                        postala je gušća. Skroz sam zadovoljna ovim proizvodom i preporučiću ga svima, pozdrav!
                    </div>
                    <div class="review-list__author">Marija, 37 godina</div>
                </li>
                <li class="review-list__item">
                    <div class="review-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/rev2.png" alt="">
                    </div>
                    <div class="review-list__tx">Nakon 35. godine počele su mi se pojavljivati površine na glavi sa
                        proređenom kosom. Igrom slučaja sam dobila ove kapi i odlučila sam da pokušam sa njima.
                        <span class="bold">Nakon 4 meseca korišćenja, moji prijatelji su primetili da mi je kosa bujnija i lepša.</span>
                        Nisam odustala, evo već godinu dana koristim ove kapi i nemam nikakvih problema,
                        potpuno sam zadovoljna.
                    </div>
                    <div class="review-list__author">Anica, 38 godina</div>
                </li>
                <li class="review-list__item">
                    <div class="review-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/rev3.png" alt="">
                    </div>
                    <div class="review-list__tx">Prva stvar koju želim da istaknem je efikasnost. Kosa mi je bila jako
                        retka i to me baš brinulo. Nema šta nisam probala, ali bezuspešno.
                        Počela sam da koristim ovo čudo, kosa mi je počela dodatno rasti, postala je gušća i sjajnija.
                        <span class="bold">Vratilo mi se samopouzdanje!
                            Hvala vam na ovom proizvodu!</span></div>
                    <div class="review-list__author">Sofija, 40 godina</div>
                </li>
            </ul>
        </div>
    </div>
    <div class="block9">
        <div class="container">
            <div class="block9__wrap">
                <div class="block9-left">
                    <div class="block9-warning">
                        <div class="block9-warning__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/vosl.png" alt="">
                        </div>
                        <div class="block-warning__header">ČUVAJTE SE IMITACIJA <br> OVOG PROIZVODA</div>
                    </div>
                    <div class="block9__text">Da biste izbegli kupovinu lažnih proizvoda i loših kopija, kupujte
                        isključivo preko našeg sajta.
                    </div>
                    <div class="block9__text up bold">100% GARANCIJA KVALITETA PROIZVOĐAČA</div>
                </div>
                <div class="block9-right">
                    <div class="block9-pack">
                        <div class="block9-pack__label">PREPORUKA <br> SPECIJALISTA</div>
                        <img src="{{ asset('/') }}purplerelaxFiles/germinaloil/pack_m.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block10">
        <div class="container">
            <div class="block10__header">KAKO PORUČITI?</div>
            <ul class="block10-list">
                <li class="block10-list__item">
                    <div class="block10-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b10_i1.png" alt="">
                    </div>
                    <div class="block10-list__wrapper">
                        <div class="block10-list__header">KORAK 1</div>
                        <div class="block10-list__text">Ostavite podatke za dostavu na našem sajtu</div>
                    </div>
                </li>
                <li class="block10-list__item">
                    <div class="block10-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b10_i2.png" alt="">
                    </div>
                    <div class="block10-list__wrapper">
                        <div class="block10-list__header">KORAK 2</div>
                        <div class="block10-list__text">Kontaktiraćemo vas da potvrdimo porudžbinu</div>
                    </div>
                </li>
                <li class="block10-list__item">
                    <div class="block10-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b10_i3.png" alt="">
                    </div>
                    <div class="block10-list__wrapper">
                        <div class="block10-list__header">KORAK 3</div>
                        <div class="block10-list__text">Pošiljku šaljemo brzom poštom u roku od 1-2 radna dana</div>
                    </div>
                </li>
                <li class="block10-list__item">
                    <div class="block10-list__img">
                        <img src="{{ asset('/') }}purplerelaxFiles/hairoil/b10_i4.png" alt="">
                    </div>
                    <div class="block10-list__wrapper">
                        <div class="block10-list__header">KORAK 4</div>
                        <div class="block10-list__text">Plaćate po pouzeću kuriru brze pošte</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="block1 block11">
        <div class="container">
            <div class="block1-header">
                <a href="#" class="logo">
                    <img src="{{ asset('/') }}purplerelaxFiles/hairoil/logo.png" alt="">
                </a>
                <ul class="block1-header-list">
                    <li class="block1-header-list__item">
                        <div class="block1-header-list__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/ic1.png" alt="">
                        </div>
                        <div class="block1-header-list__text">
                            POTVRĐENA EFIKASNOST
                        </div>
                    </li>
                    <li class="block1-header-list__item">
                        <div class="block1-header-list__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/ic2.png" alt="">
                        </div>
                        <div class="block1-header-list__text">
                            PROIZVOD GODINE 2021
                        </div>
                    </li>
                    <li class="block1-header-list__item">
                        <div class="block1-header-list__img">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/ic3.png" alt="">
                        </div>
                        <div class="block1-header-list__text">
                            100% PRIRODNI SASTOJCI
                        </div>
                    </li>
                </ul>
            </div>
            <h1 class="block1__heading">KOMPLETNA REGENERACIJA KOSE U <span class="green">28 DANA</span></h1>
            <form class="orderForm form desktop" action="{{$orderRoute}}" method="POST">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div class="form__wrapper">
                    <div class="form-pack">
                        <div class="form-pack__sale">-40%</div>
                    </div>
                    <div class="form__header">Kupite odmah sa popustom!</div>
                    <div class="form__main">
                        <div class="form__element">
                            <div class="input-group tooltip-hide">
                                <input name='name' class="form-input order_data" placeholder="Ime i prezime" required
                                       type="text">
                            </div>
                        </div>
                        <div class="form__element">
                            <div class="input-group tooltip-hide">
                                <input name='phone' class="form-input order_data" placeholder="Telefon" required
                                       type="tel">
                            </div>
                        </div>
                        <div class="form-price">
                            <div class="form-price__old old" style='font-size: 2em; white-space: nowrap'>
                                {{ $prices[1]['originalPrice'] }}
                                {{ $prices[1]['currency'] }}
                            </div>
                            <div class="form-price__new" style='font-size: 2.4em; white-space: nowrap'>
                                {{ $prices[1]['amount'] }}
                                {{ $prices[1]['currency'] }}
                            </div>
                        </div>
                    </div>
                    <div class="form__footer">
                        <div class="timer">
                            <div class="timer__container">
                                <div class="timer__item">
                                    <div class="timer__item-label">ISKORISTI</div>
                                    <div class="timer__item-tx">POPUST</div>
                                </div>
                            </div>
                        </div>
                        <div class="form__arrows">
                            <img src="{{ asset('/') }}purplerelaxFiles/hairoil/arrow_form.png" alt="">
                        </div>
                    </div>
                    <div class="form__button">
                        <input class="form__button-element buynow" type="submit" value="PORUČI">
                    </div>
                </div>
            </form>
            <form class="orderForm js-scroll-form form mobile" action="{{$orderRoute}}" method="POST">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div class="form__wrapper">
                    <div class="form__header">Kupite odmah sa popustom!</div>
                    <div class="pack-img">
                        <img src="{{ asset('/') }}purplerelaxFiles/germinaloil/pack.png" alt="">
                    </div>
                    <div class="form-price">
                        <div class="form-price__old old">
                            {{ $prices[1]['originalPrice'] }}
                            {{ $prices[1]['currency'] }}
                        </div>
                        <div class="form-price__new">
                            {{ $prices[1]['amount'] }}
                            {{ $prices[1]['currency'] }}
                        </div>
                    </div>
                    <div class="form__main">
                        <div class="form__element">
                            <div class="input-group tooltip-hide">
                                <input name='name' class="form-input order_data" placeholder="Ime i prezime"
                                       required type="text">
                            </div>
                        </div>
                        <div class="form__element">
                            <div class="input-group tooltip-hide">
                                <input name='phone' class="form-input order_data" placeholder="Telefon" required
                                       type="tel">
                            </div>
                        </div>
                    </div>
                    <div class="form__button">
                        <input class="form__button-element buynow" type="submit" value="PORUČI">
                    </div>
                </div>
            </form>
            <div class="block1-girl"></div>
            <div class="block1-decor1"></div>
            <div class="block1-decor2"></div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(".__js-scroll-form").click(function () {
            var e = $(".js-scroll-form").offset().top;
            $("html, body").animate({
                scrollTop: e
            }, 1e3)
        }), $(window).scroll(function () {
            $(".block11 .form.mobile .form__button .form__button-element").offset().top + 28 <= $(".block1-2.mobile").offset().top ? $(".block1-2.mobile .button-mobile").hide() : $(".block1-2.mobile .button-mobile").show()
        })
    });
</script>
@include('components.pixel_footer')
</body>
</html>
