<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/eyebrowremover2/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/eyebrowremover2/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/eyebrowremover2/style.min.css">
    <style>@font-face{font-family:Roboto;src:local("{{ asset('/') }}fonts/Roboto-Regular"),url({{asset('/')}}fonts/roboto.woff2) format("woff2"),url({{asset('/')}}fonts/Roboto-Regular.woff) format("woff"),url({{asset('/')}}fonts/Roboto-Regular.ttf) format("truetype"),url({{asset('/')}}fonts/Roboto-Regular.eot),url({{asset('/')}}fonts/Roboto-Regular.eot@iefix) format("embedded-opentype"),url({{asset('/')}}fonts/Roboto-Regular.svg#Roboto) format("svg");font-weight:400;font-style:normal;font-display:swap}@font-face{font-family:Roboto;src:local("{{ asset('/') }}fonts/Roboto-Bold"),url({{asset('/')}}fonts/robotobold.woff2) format("woff2"),url({{asset('/')}}fonts/roboto-bold.woff) format("woff"),url({{asset('/')}}fonts/roboto-bold.ttf) format("truetype"),url({{asset('/')}}fonts/roboto-bold.eot),url({{asset('/')}}fonts/roboto-bold.eot@iefix) format("embedded-opentype"),url({{asset('/')}}fonts/RobotoBold.svg#Roboto) format("svg");font-weight:700;font-style:normal;font-display:swap}@font-face{font-family:Montserrat;src:local("{{ asset('/') }}fonts/Montserrat-Regular"),url({{asset('/')}}fonts/Montserrat-Regular.woff2) format("woff2"),url({{asset('/')}}fonts/Montserrat-Regular.woff) format("woff"),url({{asset('/')}}fonts/Montserrat-Regular.ttf) format("truetype"),url({{asset('/')}}fonts/Montserrat-Regular.eot),url({{asset('/')}}fonts/Montserrat-Regular.eot@iefix) format("embedded-opentype"),url({{asset('/')}}fonts/Montserrat-Regular.svg#Montserrat) format("svg");font-weight:400;font-style:normal;font-display:swap}@font-face{font-family:Montserrat;src:local("{{ asset('/') }}fonts/Montserrat-SemiBold"),url({{asset('/')}}fonts/Montserrat-SemiBold.woff2) format("woff2"),url({{asset('/')}}fonts/Montserrat-SemiBold.woff) format("woff"),url({{asset('/')}}fonts/Montserrat-SemiBold.ttf) format("truetype"),url({{asset('/')}}fonts/Montserrat-SemiBold.eot),url({{asset('/')}}fonts/Montserrat-SemiBold.eot@iefix) format("embedded-opentype"),url({{asset('/')}}fonts/Montserrat-SemiBold.svg#Montserrat) format("svg");font-weight:600;font-style:normal;font-display:swap}@font-face{font-family:Montserrat;src:local("{{ asset('/') }}fonts/Montserrat-Bold"),url({{asset('/')}}fonts/Montserrat-Bold.woff2) format("woff2"),url({{asset('/')}}fonts/Montserrat-Bold.woff) format("woff"),url({{asset('/')}}fonts/Montserrat-Bold.ttf) format("truetype"),url({{asset('/')}}fonts/Montserrat-Bold.eot),url({{asset('/')}}fonts/Montserrat-Bold.eot@iefix) format("embedded-opentype"),url({{asset('/')}}fonts/Montserrat-Bold.svg#Montserrat) format("svg");font-weight:700;font-style:normal;font-display:swap}@font-face{font-family:Montserrat;src:local("{{ asset('/') }}fonts/Montserrat-ExtraBold"),url({{asset('/')}}fonts/Montserrat-ExtraBold.woff2) format("woff2"),url({{asset('/')}}fonts/Montserrat-ExtraBold.woff) format("woff"),url({{asset('/')}}fonts/Montserrat-ExtraBold.ttf) format("truetype"),url({{asset('/')}}fonts/Montserrat-ExtraBold.eot),url({{asset('/')}}fonts/Montserrat-ExtraBold.eot@iefix) format("embedded-opentype"),url({{asset('/')}}fonts/Montserrat-ExtraBold.svg#Montserrat) format("svg");font-weight:800;font-style:normal;font-display:swap}@font-face{font-family:Montserrat;src:local("{{ asset('/') }}fonts/Montserrat-ExtraBold"),url({{asset('/')}}fonts/Montserrat-ExtraBold.woff2) format("woff2"),url({{asset('/')}}fonts/Montserrat-ExtraBold.woff) format("woff"),url({{asset('/')}}fonts/Montserrat-ExtraBold.ttf) format("truetype"),url({{asset('/')}}fonts/Montserrat-ExtraBold.eot),url({{asset('/')}}fonts/Montserrat-ExtraBold.eot@iefix) format("embedded-opentype"),url({{asset('/')}}fonts/Montserrat-ExtraBold.svg#Montserrat) format("svg");font-weight:900;font-style:normal;font-display:swap}</style>
</head>
<body>
<div class="wrapper">
    @include('components.display_errors')
    <section class="hero">
        <div class="hero-top">
            <div class="hero-top__box tac">
                <h1 class="hero__title">
                    Sve što vam treba za savršene obrve!
                </h1>
                <p class="hero__subtitle">
                    Perfect Eyebrow
                </p>
            </div>
            <div class="hero-top__info"></div>
        </div>
        <div class="hero-bottom">
            <div class="price df al-c ju-b">
                <p class="price__old">
                    {{ $prices[1]['originalPrice'] }} <span class="price__val">RSD</span>
                </p>
                <div class="discount">
                    <p class="discount-text">-40%</p>
                </div>
                <p class="price__new">
                    {{ $prices[1]['amount'] }} <span class="price__val price__new-val">RSD</span>
                </p>
            </div>
            <a href="#form" class="link db mr-a tac hero-link">Poručite sada</a>
            <ul class="hero-bottom__list">
                <li class="hero-bottom__list-item df al-c">
                     <span class="hero-bottom__list-icon">
                        <svg width="47" height="48" viewBox="0 0 47 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                                   d="M23.5 0C10.575 0 0 10.8 0 24V48H47V24C47 10.8 36.425 0 23.5 0ZM23.5 4.8C30.315 4.8 36.284 8.544 39.574 14.112C38.5635 14.28 37.506 14.4 36.425 14.4C29.61 14.4 23.641 10.656 20.351 5.088C21.3615 4.92 22.419 4.8 23.5 4.8ZM14.288 7.272C12.8075 11.808 9.7055 15.6 5.687 17.928C7.1675 13.392 10.2695 9.6 14.288 7.272ZM4.7 23.664C10.81 21.312 15.7215 16.488 18.189 10.344C22.513 15.744 29.0695 19.2 36.425 19.2C38.1875 19.2 39.8795 18.984 41.5245 18.624C42.018 20.328 42.3 22.128 42.3 24C42.3 34.584 33.8635 43.2 23.5 43.2C13.1365 43.2 4.7 34.584 4.7 24V23.664ZM4.7 43.2V38.4C6.0395 40.2 7.6375 41.832 9.4 43.2H4.7ZM42.3 43.2H37.6C39.3625 41.832 40.9605 40.2 42.3 38.4V43.2ZM27.6125 26.4C27.6125 24.744 28.9285 23.4 30.55 23.4C32.1715 23.4 33.4875 24.744 33.4875 26.4C33.4875 28.056 32.1715 29.4 30.55 29.4C28.9285 29.4 27.6125 28.056 27.6125 26.4ZM13.5125 26.4C13.5125 24.744 14.8285 23.4 16.45 23.4C18.0715 23.4 19.3875 24.744 19.3875 26.4C19.3875 28.056 18.0715 29.4 16.45 29.4C14.8285 29.4 13.5125 28.056 13.5125 26.4Z"
                                   fill="white" />
                        </svg>
                     </span>
                    <p class="hero-bottom__list-text">
                        Pogodno za svaku ženu
                    </p>
                </li>
                <li class="hero-bottom__list-item df al-c">
                     <span class="hero-bottom__list-icon">
                        <svg width="35" height="32" viewBox="0 0 35 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                                   d="M35 14.4C35 12.624 33.5682 11.2 31.8182 11.2H21.7636L23.2909 3.888C23.3227 3.728 23.3386 3.552 23.3386 3.376C23.3386 2.72 23.0682 2.112 22.6386 1.68L20.9523 0L10.4841 10.528C9.89546 11.12 9.54545 11.92 9.54545 12.8V28.8C9.54545 29.6487 9.88068 30.4626 10.4774 31.0627C11.0741 31.6629 11.8834 32 12.7273 32H27.0455C28.3659 32 29.4955 31.2 29.9727 30.048L34.7773 18.768C34.9205 18.4 35 18.016 35 17.6V14.4ZM0 32H6.36364V12.8H0V32Z"
                                   fill="white" />
                        </svg>
                     </span>
                    <p class="hero-bottom__list-text">
                        Uklanja i najsitnije dlačice
                    </p>
                </li>
                <li class="hero-bottom__list-item df al-c">
                     <span class="hero-bottom__list-icon">
                        <svg width="39" height="41" viewBox="0 0 39 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                                   d="M39 0.0051386C39 0.0051386 24.102 -0.753267 12.363 16.1571C3.354 29.132 0 41 0 41L3.783 38.9503C6.591 33.8259 8.0535 31.7147 10.803 28.7015C15.7365 30.2184 20.8845 30.0339 25.35 24.6021C21.45 23.4542 18.33 23.7207 13.728 24.2126C18.8955 20.5026 22.425 19.6827 27.3 20.5026L29.25 16.4031C25.74 15.7062 23.4 15.6447 19.929 16.4851C23.7705 13.6359 26.442 12.0371 31.2 12.3036L33.5595 8.34759C30.5175 8.12212 28.6845 8.47058 25.194 9.37247C28.3335 6.37984 31.2 5.02701 35.373 4.76054C35.373 4.76054 37.4205 0.886528 39 0.0051386Z"
                                   fill="white" />
                        </svg>
                     </span>
                    <p class="hero-bottom__list-text">
                        Ne izaziva alergije i iritacije
                    </p>
                </li>
            </ul>
        </div>
    </section>
    <section class="granules section">
        <h3 class="title granules__title">
            6 prednosti Perfect Eyebrow uređaja
        </h3>
        <img src="{{ asset('/') }}purplerelaxFiles/eyebrowremover2/granules-present.jpg" alt="" class="granules__img db">
        <ul class="granules-list">
            <li class="granules-list__item df">
                <p class="granules-list__text">
                    Savršeno precizan i za par trenutaka <span class="tt-a"> dovodi obrve do savršenstva</span>
                </p>
            </li>
            <li class="granules-list__item df">
                <p class="granules-list__text">
                    Perfect Eyebrow ima <span class="tt-a">18-karatnu pozlaćenu glavu</span> koja ne izativa <span class="tt-a">alergije, crvenilo i osip kože</span>
                </p>
            </li>
            <li class="granules-list__item df">
                <p class="granules-list__text">
                    Više ne morate da idete kod kozmetičara da biste sređivali obrve - <span class="tt-a"> uradite to sami</span>
                </p>
            </li>
            <li class="granules-list__item df">
                <p class="granules-list__text">
                    Ne morate da trpite bol koji stvara pinceta ili vosak. <span class="tt-a">Iritacija i crvenilo </span> nestaće zauvek
                </p>
            </li>
            <li class="granules-list__item df">
                <p class="granules-list__text">
                    <span class="tt-a">Profesionalci u svetu </span> ovaj uređaj sve više koriste i napuštaju zastarele tehnike kao što su pinceta, konac i vosak
                </p>
            </li>
            <li class="granules-list__item df">
                <p class="granules-list__text">
                    Ima pozadinsko led osvetljenje, radi na baterije i <span class="tt-a">lako je prenosiv</span>
                </p>
            </li>
        </ul>
        <a href="#form" class="link db mr-a tac">Poručite sada</a>
    </section>
    <section class="trimmer section">
        <h3 class="title trimmer__title">
            Prenosivi depilator za obrve Perfect Eyebrow
        </h3>
        <img src="{{ asset('/') }}purplerelaxFiles/eyebrowremover2/product.gif" alt="" class="trimmer__present">
        <div class="trimmer-info">
            <h4 class="trimmer-info__title">
                Nežna i profesionalna nega obrva
            </h4>
            <p class="trimmer-info__text">
                Bezbolno i precizno uklanjanje dlaka, bez iritacija i alergija. Prestanite da se mučite tako što
                ćete oštrim pokretima čupati dlačice i stvarati bol. Sa Perfect Eyebrow depilatorom, tretiranje
                obrva će biti zadovoljstvo!
            </p>
            <p class="trimmer-info__text">
                Kada ga koristite, nisu potrebni gel, voda ili drugi aditivi. Samo isperite šminku i glatko uklonite
                neželjene dlačice. Jako je kompaktan i lako staje i u najmanju torbu.
            </p>
        </div>
    </section>
    <section class="benefits section section--accent">
        <h3 class="title benefits__title">
            Prednosti trimera
        </h3>
        <img src="{{ asset('/') }}purplerelaxFiles/eyebrowremover2/benefits-present.jpg" alt="" class="benefits__present db">
        <ul class="benefits-list">
            <li class="benefits-list__item df">
                <p class="benefits-list__text">
                    Lakoća korišćenja
                </p>
            </li>
            <li class="benefits-list__item df">
                <p class="benefits-list__text">
                    Mala veličina i prenosivost
                </p>
            </li>
            <li class="benefits-list__item df">
                <p class="benefits-list__text">
                    Elegantan dizajn
                </p>
            </li>
            <li class="benefits-list__item df">
                <p class="benefits-list__text">
                    Mogućnost upotrebe na osetljivoj koži, bez straha od iritacije
                </p>
            </li>
        </ul>
    </section>
    <section class="reviews section">
        <h3 class="reviews__title title">
            Utisci naših kupaca
        </h3>
        <div class="container reviews__container pos-rel">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">
                        <div class="slide-top">
                            <div class="slide-avatar">
                                <img src="{{ asset('/') }}purplerelaxFiles/eyebrowremover2/user.jpg" alt="" class="slide-avatar__img">
                            </div>
                            <div class="slide-info">
                                <h4 class="slide-info__title">
                                    Milica
                                </h4>
                                <p class="slide-info__date">
                                    29 godina
                                </p>
                                <div class="slide-info__stars">
                                    <img src="{{ asset('/') }}purplerelaxFiles/eyebrowremover2/stars.png" alt="" class="slide-info__stars-img">
                                </div>
                            </div>
                        </div>
                        <p class="slide__text">
                            Sigurno najbolje otkriće ove godine! Trošim dosta vremena i truda na sređivanje obrva, ali sada je to stvar prošlosti.
                            Epilator uklanja dlačice veoma nežno, ne oštećuje kožu i uopste nije neprijatan, što me je iznenadilo.
                            Ovo je jedan od mojih omiljenih proizvoda za negu. Naravno, veliku zahvalnost dugujem Mariji, devojci koja radi u korisničkoj podršci i koja mi je pomogla oko izbora.
                        </p>
                        <div class="slide-grade grade">
                            <div class="grade-quality dg">
                                <p class="grade-quality__text gr-a">Kvalitet</p>
                                <p class="grade-quality__count gr-a mr-a">9/10</p>
                            </div>
                            <div class="grade-delivery dg">
                                <p class="grade-delivery__text gr-a">Dostava</p>
                                <p class="grade-delivery__count gr-a mr-a">10/10</p>
                            </div>
                        </div>
                    </div>
                    <div class=" swiper-slide slide">
                        <div class="slide-top">
                            <div class="slide-avatar">
                                <img src="{{ asset('/') }}purplerelaxFiles/eyebrowremover2/user.jpg" alt="" class="slide-avatar__img">
                            </div>
                            <div class="slide-info">
                                <h4 class="slide-info__title">
                                    Kristina
                                </h4>
                                <p class="slide-info__date">
                                    32 godine
                                </p>
                                <div class="slide-info__stars">
                                    <img src="{{ asset('/') }}purplerelaxFiles/eyebrowremover2/stars.png" alt="" class="slide-info__stars-img">
                                </div>
                            </div>
                        </div>
                        <p class="slide__text">
                            Prijatno sam iznenađena svime što sam pročitala na sajtu pa sam odlučila i ja da naručim. Dugo mi je trebalo ovako nešto i kada sam videla reklamu na Facebook-u znala sam da je ovo stvar za mene.
                            Naručila sam dva komada, jedan za mene, jedan za poklon. Veoma sam zadovoljna kvalitetom izrade. Hvala PurpleRelax timu za savršen proizvod, popravili ste mi raspoloženje.
                        </p>
                        <div class="slide-grade grade">
                            <div class="grade-quality grade-quality-full dg">
                                <p class="grade-quality__text gr-a">Kvalitet</p>
                                <p class="grade-quality__count gr-a mr-a">10/10</p>
                            </div>
                            <div class="grade-delivery dg">
                                <p class="grade-delivery__text gr-a">Dostava</p>
                                <p class="grade-delivery__count gr-a mr-a">10/10</p>
                            </div>
                        </div>
                    </div>
                    <div class=" swiper-slide slide">
                        <div class="slide-top">
                            <div class="slide-avatar">
                                <img src="{{ asset('/') }}purplerelaxFiles/eyebrowremover2/user.jpg" alt="" class="slide-avatar__img">
                            </div>
                            <div class="slide-info">
                                <h4 class="slide-info__title">
                                    Ana
                                </h4>
                                <p class="slide-info__date">
                                    23 godine
                                </p>
                                <div class="slide-info__stars">
                                    <img src="{{ asset('/') }}purplerelaxFiles/eyebrowremover2/stars.png" alt="" class="slide-info__stars-img">
                                </div>
                            </div>
                        </div>
                        <p class="slide__text">
                            Htela bih da izdvojim 3 razloga zbog kojih sam najzadovoljnija: sjajna korisnička služba, brza dostava (24h) i naravno vrhunski kvalitet uređaja. Sve je kao što je opisano. Hvala puno!
                        </p>
                        <div class="slide-grade grade">
                            <div class="grade-quality dg">
                                <p class="grade-quality__text gr-a">Kvalitet</p>
                                <p class="grade-quality__count gr-a mr-a">9/10</p>
                            </div>
                            <div class="grade-delivery dg">
                                <p class="grade-delivery__text gr-a">Dostava</p>
                                <p class="grade-delivery__count gr-a mr-a">10/10</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" slider-navig mr-a df al-c">
                <div class="swiper-pagination pos-rel db"></div>
            </div>
        </div>
    </section>
    <section class="order section">
        <h3 class="title order__title">
            Kako poručiti?
        </h3>
        <div class="order-steps mr-a">
            <div class="order-step">
                <div class="order-step__title">
                    <img src="{{ asset('/') }}purplerelaxFiles/eyebrowremover2/resume.svg" alt="" class="order-step__title-icon">
                    <p class="order-step__title-text">
                        KORAK
                    </p>
                </div>
                <p class="order-step__text">
                    Ostavite svoje podatke na našem sajtu
                </p>
            </div>
            <div class="order-step">
                <div class="order-step__title">
                    <img src="{{ asset('/') }}purplerelaxFiles/eyebrowremover2/operator.svg" alt="" class="order-step__title-icon">
                    <p class="order-step__title-text">
                        KORAK
                    </p>
                </div>
                <p class="order-step__text">
                    Kontaktiraćemo vas da potvrdimo porudžbinu
                </p>
            </div>
            <div class="order-step">
                <div class="order-step__title">
                    <img src="{{ asset('/') }}purplerelaxFiles/eyebrowremover2/donation.svg" alt="" class="order-step__title-icon">
                    <p class="order-step__title-text">
                        KORAK
                    </p>
                </div>
                <p class="order-step__text">
                    Paket šaljemo brzom poštom u roku od 1-2 radna dana
                </p>
            </div>
            <div class="order-step">
                <div class="order-step__title">
                    <img src="{{ asset('/') }}purplerelaxFiles/eyebrowremover2/payment.svg" alt="" class="order-step__title-icon">
                    <p class="order-step__title-text">
                        KORAK
                    </p>
                </div>
                <p class="order-step__text">
                    Plaćate kuriru brze pošte po prijemu paketa
                </p>
            </div>
        </div>
    </section>
    <section class="hero">
        <div class="hero-top">
            <div class="hero-top__box tac">
                <h1 class="hero__title">
                    Sve što vam treba za savršene obrve!
                </h1>
                <p class="hero__subtitle">
                    Perfect Eyebrow
                </p>
            </div>
            <div class="hero-top__info">

            </div>
        </div>
        <div class="hero-bottom">
            <div class="price df al-c ju-b">
                <p class="price__old">
                    {{ $prices[1]['originalPrice'] }} <span class="price__val">RSD</span>
                </p>
                <div class="discount">
                    <p class="discount-text">-40%</p>
                </div>
                <p class="price__new">
                    {{ $prices[1]['amount'] }} <span class="price__val price__new-val">RSD</span>
                </p>
            </div>
            <form id="form" class="form" method="post" action="{{$orderRoute}}">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <label>
                    <span class="form-text db">Ime i prezime</span>
                    <input class="form__input db" type="text" name="name" placeholder="Ime i prezime" required="">
                </label>
                <label>
                    <span class="form-text db">Telefon</span>
                    <input class="form__input db" type="tel" id="phone" name="phone" placeholder="Telefon" required="">
                </label>
                <button class="button btn-reset link form__btn db ttu" type="submit">Završite porudžbinu</button>
            </form>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}purplerelaxFiles/eyebrowremover2/swiper.min.js"></script>
<script src="{{ asset('/') }}purplerelaxFiles/eyebrowremover2/main.min.js"></script>
@include('components.pixel_footer')
</body>
</html>
