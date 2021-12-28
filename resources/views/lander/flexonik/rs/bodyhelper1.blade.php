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
                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/f1.png" class="section-1__img">--}}
                </div>
                <div class="section-1__item">
                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/f2.png" class="section-1__img">--}}
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
                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/f3.png" class="section-1__img">--}}
                </div>
            </div>
        </div>
    </section>
    <section class="section section-2">
        <div class="container">
            <h2 class="common-title">Rezultati nakon 30 dana</h2>
            <div class="row">
                <div class="section-2__before">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/crest.svg" class="section-2__before-img">
                    {{--<span class="section-2__before-text"> Înainte</span>--}}
                </div>
                <div class="section-2__after">
                    {{--<span class="section-2__after-text"> După</span>--}}
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/galka.svg" class="section-2__after-img">
                </div>
            </div>
        </div>
        <div class="section-2__box">
            <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/b1.jpg" class="section-2__main-img">
            <div class="section-2__img-with-animation">
                <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/header_prod.png" class="section-2__prod-img" width="120px">
                <!-- <div class="animation-box section-2__animation-box">
                    <div class="animation-box__point"></div>
                </div> -->
                <div class="anim-hint anim-hint_15">
                    <div class="anim-hint__point_15"></div>
                    <div class="third"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-3">
        <h2 class="common-title">Kako funkcioniše?</h2>
        <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/1.png" class="section-3__gif">
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
        <div class="slider section-4__slider" id="slider1">
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
            <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/header_prod.png" class="section-4__prod-img" width="150px">
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
    <section class="section section-12">
        <div class="container">
            <h2 class="common-title">UTISCI NAŠIH KUPACA</h2>
            <div class="slider" id="slider2">
                <div class="section-12__item">
                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev1.jpg" class="section-12__item-img">--}}
                    <p class="section-12__item-caption"> Vlasto Madžgalj</p>
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/stars.svg" class="section-12__stars">
                    <p class="section-12__text">Zdravo momci! Naručio sam Body Helper pre tri nedelje i veoma sam zadovoljan. Moje stanje se znatno poboljšalo, glava je prestala da me boli. Drago mi je što
                        imam ovaj opuštajući masažer! Sve dobro radi, hvala!</p>
                </div>
                <div class="section-12__item">
                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev2.jpg" class="section-12__item-img">--}}
                    <p class="section-12__item-caption">Dejan Kostić</p>
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/stars.svg" class="section-12__stars">
                    <p class="section-12__text">Želim da vam kažem hvala za ovaj proizvod, to je sjajna stvar! Radim na kompjuteru, leđa su mi kriva kao gudalo. Nedavno su počeli bolovi u mišićima i donjem delu leđa.
                        Koristim Body Helper već 3 nedelje i osećam se sasvim dobro, sada ponovo mogu da ispravim ramena, hvala!
                    </p>
                </div>
                <div class="section-12__item">
                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev3.jpg" class="section-12__item-img">--}}
                    <p class="section-12__item-caption"> Danica Trpković Šehenberger</p>
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/stars.svg" class="section-12__stars">
                    <p class="section-12__text">Zdravo! Kada sam bila na ferijama u Srbiji, poručila sam ovaj proizvod i odnela ga sa sobom u Nemačku. Body Helper vredi svakog evra. Leđa su mi kao nova, i ne bole
                        me dok radim u fabrici papuča na traci. Masažer je potpuno ublažio bolove i oslobodio me napetosti. Nije mi žao ni jednog evra krvavo zarađenog. </p>
                </div>
                {{--<div class="section-12__item">--}}
                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/rev4.jpg" class="section-12__item-img">--}}
                    {{--<p class="section-12__item-caption"> Spatele a devenit drept</p>--}}
                    {{--<img src="{{ asset('/') }}flexonikFiles/bodyhelper1/stars.svg" class="section-12__stars">--}}
                    {{--<p class="section-12__text"> L-am cumpărat pentru tată, el este deja bătrân, dar încă activ!--}}
                        {{--Recent, se plângea de dureri de spate. Datorită carantinei, cursul de masaj s-a anulat, așa--}}
                        {{--că am decis să încercăm Body Helper. Sincer - nu credeam că va ajuta. Dar tatăl este foarte--}}
                        {{--fericit, spune că elimină durerea. Așa că vă dau 5 stele!</p>--}}
                {{--</div>--}}
            </div>
            <div class="counter"><span id="cp2">1</span> /3</div>
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
            <img src="{{ asset('/') }}flexonikFiles/bodyhelper1/header_prod.png">
            <!-- <div class="animation-box bottom__animation-box">
                <div class="animation-box__point"></div>
            </div> -->
            <div class="anim-hint anim-hint_15">
                <div class="anim-hint__point_15"></div>
                <div class="third"></div>
            </div>
        </div>
    </section>
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
    $('#slider1').on('afterChange', function(event, slick, currentSlide){
        $("#cp").text(currentSlide + 1);
    });
    $('#slider2').on('afterChange', function(event, slick, currentSlide){
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