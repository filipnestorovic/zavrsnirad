<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=480" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}shared_files/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/salonnails/main.css" />
    <style>
        @font-face {
            font-family: 'Rubik';
            font-weight: 400;
            src: url("{{ asset('/') }}fonts/Rubik-Regular.woff2") format("woff2"), url("{{ asset('/') }}fonts/Rubik-Regular.woff") format("woff"), url("{{ asset('/') }}fonts/Rubik-Regular.ttf") format("truetype");
        }
        @font-face {
            font-family: 'Rubik';
            font-weight: 500;
            src: url("{{ asset('/') }}fonts/Rubik-Medium.woff2") format("woff2"), url("{{ asset('/') }}fonts/Rubik-Medium.woff") format("woff"), url("{{ asset('/') }}fonts/Rubik-Medium.ttf") format("truetype");
        }
        @font-face {
            font-family: 'Rubik';
            font-weight: 700;
            src: url("{{ asset('/') }}fonts/Rubik-Bold.woff2") format("woff2"), url("{{ asset('/') }}fonts/Rubik-Bold.woff") format("woff"), url("{{ asset('/') }}fonts/Rubik-Bold.ttf") format("truetype");
        }
        @font-face {
            font-family: 'Billabong';
            src: url("{{ asset('/') }}fonts/billabong.woff2") format("woff2"), url("{{ asset('/') }}fonts/billabong.woff") format("woff"), url("{{ asset('/') }}fonts/billabong.ttf") format("truetype");
        }
        .offer__main-bg {
            height: 480px;
            position: relative;
            background: url("{{ asset('/') }}purplerelaxFiles/nailkit/flawless.png") center center no-repeat !important;
        }
        .offer__desc {
            width: 100%;
        }
        .offer__discount {
            top: 90px;
            right: 20px;
        }
        .main-form button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    @include('components.display_errors')
    <header class="header">
        <h1 class="header__title">NAIL KIT</h1>
        <a class="header__button" href="#main-form">Poruči sada</a>
    </header>
    <section class="offer">
        <div class="offer__main-bg">
            <p class="offer__desc">BESPREKORNI I SAVRŠENI NOKTI BEZ ODLASKA KOD KOZMETIČARA</p>
            <div class="offer__discount">-40%</div>
        </div>
        <ul class="offer__list">
            <li class="offer__item">PRECIZNO</li>
            <li class="offer__item">UNIVERZALNO</li>
            <li class="offer__item">BRZO</li>
            <li class="offer__item">ELEGANTNO</li>
        </ul>
        <div class="offer__price">
            <div class="offer__old old-price">
                <p class="old-price__text">stara cena</p>
                <p class="old-price__num">
                    {{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}
                </p>
            </div>
            <div class="offer__new new-price">
                <p class="new-price__text">nova cena</p>
                <p class="new-price__num">
                    {{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}
                </p>
            </div>
        </div>
        <a class="order-button" href="#main-form">Poručite sa popustom</a>
    </section>
    <section class="about">
        <div class="heading">
            <h2 class="basic-title about__title">
                SREDITE SVOJE NOKTE KAO PROFESIONALAC ZA SAMO 5 MINUTA
            </h2>
        </div>
        <ul class="about__list">
            <li class="about__item">Precizno turpija i pravi oblike</li>
            <li class="about__item">Stvara savršeno glatke ivice</li>
            <li class="about__item">Uklanja zanoktice</li>
            <li class="about__item">Polira nokte</li>
        </ul>
    </section>
    <section class="choice">
        <div class="heading">
            <h2 class="basic-title choice__title">SVE ŠTO STE DO SADA SKUPO PLAĆALI U SALONIMA, SADA MOŽETE KOD KUĆE</h2>
        </div>
        <div class="slider">
            <div class="choice__slide">
                <img class="choice__img" src="{{ asset('/') }}purplerelaxFiles/nailkit/choice-1.jpg" alt="" />
            </div>
            <div class="choice__slide">
                <img class="choice__img" src="{{ asset('/') }}purplerelaxFiles/nailkit/choice-2.jpg" alt="" />
            </div>
            <div class="choice__slide">
                <img class="choice__img" src="{{ asset('/') }}purplerelaxFiles/nailkit/choice-3.jpg" alt="" />
            </div>
        </div>
        <p class="choice__text">Bez obzira koliko se lepo doterate, sigurno vam se nekada dogodilo da ne stignete da sredite
            nokte jer kod kozmetičara nije bilo slobodnih termina, ili su vam tretmani bili preskupi.</p>
        <p class="choice__text">Kada ste pokušavali da sređujete nokte sa običnim turpijama, bilo je jako sporo i dešavalo se da ne postignete
            ono što ste želeli.</p>
        <p class="choice__text">Uz pomoć <span class="flawless">Nail Kit</span> uređaja, sada će vaši nokti uvek biti sređeni, a vi ćete uštedeti mnogo novca jer
            nećete morati da odlazite kod kozmetičara.</p>
    </section>
    <section class="description">
        <div class="heading">
            <h2 class="basic-title description__title">
                NAIL KIT - INOVATIVNI SET ZA SREĐIVANJE NOKTIJU
            </h2>
        </div>
        <div class="description__grid">
            <div class="description__block">
                <img class="description__img" src="{{ asset('/') }}purplerelaxFiles/nailkit/1.jpg" />
                <div class="description__text">Savršeno turpija ivice noktiju</div>
            </div>
            <div class="description__block">
                <img class="description__img" src="{{ asset('/') }}purplerelaxFiles/nailkit/2.jpg" />
                <div class="description__text">12 različitih nastavaka</div>
            </div>
            <div class="description__block">
                <img class="description__img" src="{{ asset('/') }}purplerelaxFiles/nailkit/3.jpg" />
                <div class="description__text">Idealan za skidanje zanoktica</div>
            </div>
            <div class="description__block">
                <img class="description__img" src="{{ asset('/') }}purplerelaxFiles/nailkit/4.jpg" />
                <div class="description__text">Potpuna preciznost</div>
            </div>
            <div class="description__block">
                <img class="description__img" src="{{ asset('/') }}purplerelaxFiles/nailkit/5.jpg" />
                <div class="description__text">Polira nokte do savršenstva</div>
            </div>
            <div class="description__block">
                <img class="description__img" src="{{ asset('/') }}purplerelaxFiles/nailkit/6.jpg" />
                <div class="description__text">Pogodan za skidanje laka</div>
            </div>
        </div>
    </section>
    <section class="prop">
        <div class="heading">
            <h2 class="basic-title prop__title">
                UVEK LEPI I SREĐENI NOKTI
            </h2>
        </div>
        <ul class="prop__list">
            <li class="prop__item">
                <p class="prop__main">Jeftino, brzo i pristupačno</p>
                <p>Više ne morate da se zakazujete skupe salone i čekate na red. Sve možete potpuno lako da obavljate
                    kod svoje kuće.</p>
            </li>
            <li class="prop__item">
                <p class="prop__main">Bez iritacije i crvenila</p>
                <p>Nail Kit ne grebe i ne stvara iritacije pri skidanju zanoktica.</p>
            </li>
            <li class="prop__item">
                <p class="prop__main">Za bilo koji oblik noktiju</p>
                <p>Uz uređaj dolaze nastavci uz pomoć kojih možete da izvedete bilo koji željeni oblik noktiju.</p>
            </li>
            <li class="prop__item">
                <p class="prop__main">Prihvaćeno od strane kozmetičara</p>
                <p>Profesionalci u svetu ovaj uređaj sve više koriste i napuštaju zastarele tehnike kao što su obične
                    stare turpije.</p>
            </li>
        </ul>
    </section>
    <section class="reviews">
        <div class="heading">
            <h2 class="basic-title reviews__title">
                EVO ŠTA KAŽU NAŠI KUPCI
            </h2>
        </div>
        <p class="reviews__stat">
            <span class="stat-num">98%</span> kupaca preporučuje ovaj proizvod
        </p>
        <div class="reviews__graphics">
            <div class="reviews__graphics--inner"></div>
        </div>
        <div class="slider">
            <div class="reviews__slide">
                <img class="reviews__img" src="{{ asset('/') }}purplerelaxFiles/salonnails/review-1.jpg" alt="" />
                <h3 class="reviews__name">Ana, 29 godina</h3>
                <p class="reviews__text">Htela bih da izdvojim 3 razloga zbog kojih sam najzadovoljnija: sjajna korisnička služba, brza dostava (24h) i naravno vrhunski kvalitet uređaja. Sve je kao što je opisano. Hvala puno!</p>
            </div>
            <div class="reviews__slide">
                <img class="reviews__img" src="{{ asset('/') }}purplerelaxFiles/salonnails/review-2.jpg" alt="" />
                <h3 class="reviews__name">Branka, 31 godina</h3>
                <p class="reviews__text">Sigurno najbolje otkriće ove godine! Trošim dosta vremena i truda na sređivanje noktiju, ali sada je to stvar prošlosti.
                    Nail Kit uređaj turpija i polira nokte veoma brzo, ne oštećuje ih i uopste nije neprijatan, što me je iznenadilo.
                    Ovo je jedan od mojih omiljenih proizvoda za negu. Naravno, veliku zahvalnost dugujem Mariji, devojci koja radi u korisničkoj podršci i koja mi je pomogla oko izbora.</p>
            </div>
            <div class="reviews__slide">
                <img class="reviews__img" src="{{ asset('/') }}purplerelaxFiles/salonnails/review-3.jpg" alt="" />
                <h3 class="reviews__name">Kristina, 27 godina</h3>
                <p class="reviews__text">Prijatno sam iznenađena svime što sam pročitala na sajtu pa sam odlučila i ja da naručim. Dugo mi je trebalo ovako nešto i kada sam videla reklamu na Facebook-u znala sam da je ovo stvar za mene.
                    Naručila sam dva komada, jedan za mene, jedan za poklon. Veoma sam zadovoljna kvalitetom izrade. Hvala PurpleRelax timu za savršen proizvod, popravili ste mi raspoloženje.</p>
            </div>
        </div>
    </section>
    <section class="order">
        <div class="heading">
            <h2 class="basic-title order__title">KUPOVINA I PLAĆANJE</h2>
        </div>
        <ul class="order__list">
            <li class="order__item">
                <p class="order__main">Brza isporuka</p>
                <p>Proizvod šaljemo brzom poštom u roku od 1-2 radna dana.</p>
            </li>
            <li class="order__item">
                <p class="order__main">Bez plaćanja unapred</p>
                <p>Plaćanje se vrši kuriru brze pošte po prijemu porudžbine</p>
            </li>
            <li class="order__item">
                <p class="order__main">Garancija kvaliteta</p>
                <p>Svi proizvodi su testirani i potpuno sertifikovani. Ukoliko vam se proizvod ne dopadne, vratićemo vam novac.</p>
            </li>
        </ul>
    </section>
    <section class="offer offer--bottom">
        <div class="offer__main-bg">
            <p class="offer__desc">BESPREKORNI I SAVRŠENI NOKTI BEZ ODLASKA KOD KOZMETIČARA</p>
            <div class="offer__discount">-40%</div>
        </div>
        <ul class="offer__list">
            <li class="offer__item">PRECIZNO</li>
            <li class="offer__item">UNIVERZALNO</li>
            <li class="offer__item">BRZO</li>
            <li class="offer__item">ELEGANTNO</li>
        </ul>
        <div class="offer__price">
            <div class="offer__old old-price">
                <p class="old-price__text">stara cena</p>
                <p class="old-price__num">
                    {{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}
                </p>
            </div>
            <div class="offer__new new-price">
                <p class="new-price__text">nova cena</p>
                <p class="new-price__num">
                    {{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}
                </p>
            </div>
        </div>
        <form class="main-form" id="main-form" method="POST" action="{{$orderRoute}}">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input id="name" type="text" name="name" placeholder="Ime i prezime" required/>
            <input id="phone" type="tel" name="phone" placeholder="Telefon" required/>
            <input id="name" type="text" name="shipping_address" placeholder="Adresa" required/>
            <input id="name" type="text" name="shipping_city" placeholder="Grad" required/>
            <button type="submit">Poručite sa popustom</button>
        </form>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script>
    $(function() {
        $('a[href^="#"]').click(function() {
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        });

        $('.slider').slick({
            infinite: true,
            dots: true
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>
