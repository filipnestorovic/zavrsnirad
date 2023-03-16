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
            background: url("{{ asset('/') }}purplerelaxFiles/nasalaspirator/flawless.jpg") center center no-repeat !important;
        }
        .offer__desc {
            width: 100%;
        }
        .offer__discount {
            top: 90px;
            right: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    @include('components.display_errors')
    <header class="header">
        <h1 class="header__title">Aspirator za decu</h1>
        <a class="header__button" href="#main-form">Poruči</a>
    </header>
    <section class="offer">
        <div class="offer__main-bg">
            <p class="offer__desc">Rešenje za zapušen nosić vaše bebe</p>
            <div class="offer__discount">-40%</div>
        </div>
        <ul class="offer__list">
            <li class="offer__item">Nežan</li>
            <li class="offer__item">Snažan</li>
            <li class="offer__item">Bezbedan</li>
            <li class="offer__item">Kompaktan</li>
        </ul>
        <div class="offer__price">
            <div class="offer__old old-price">
                <p class="old-price__text">stara cena</p>
                <p class="old-price__num">
                    {{ $prices[1]['originalPrice'] }} RSD
                </p>
            </div>
            <div class="offer__new new-price">
                <p class="new-price__text">nova cena</p>
                <p class="new-price__num">
                    {{ $prices[1]['amount'] }} RSD
                </p>
            </div>
        </div>
        <a class="order-button" href="#main-form">Poručite sa popustom</a>
    </section>
    <section class="about">
        <div class="heading">
            <h2 class="basic-title about__title">
                Otpušen nosić za samo 3 minuta
            </h2>
        </div>
        <ul class="about__list">
            <li class="about__item">Sa svojim mekanim silikonskim vrhom, nosni aspirator je veoma nežan </li>
            <li class="about__item">Jednostavan za čišćenje</li>
            <li class="about__item">Brzo i efikasno uklanjanje viška sluzi iz nosa vaše bebe.</li>
            <li class="about__item">Lako i brzo se puni </li>
        </ul>
    </section>
    <section class="choice">
        <div class="heading">
            <h2 class="basic-title choice__title">Kao roditelj, nema ničeg težeg nego gledati vašeg malog anđela kako se muči sa disanjem.</h2>
        </div>
        <div class="slider">
            <div class="choice__slide">
                <img class="choice__img" src="{{ asset('/') }}purplerelaxFiles/nasalaspirator/choice-1.png" alt="" />
            </div>
            <div class="choice__slide">
                <img class="choice__img" src="{{ asset('/') }}purplerelaxFiles/nasalaspirator/choice-2.jpg" alt="" />
            </div>
            <div class="choice__slide">
                <img class="choice__img" src="{{ asset('/') }}purplerelaxFiles/nasalaspirator/choice-3.jpg" alt="" />
            </div>
        </div>
        <p class="choice__text">Zato smo kreirali nosni aspirator, neophodan alat u svakom setu za negu beba.</p>
        <p class="choice__text">Davna su prošla vremena tradicionalnih gumiranih špricova koji su teški za upotrebu i mogu čak oštetiti osetljive nosne prolaze vaše bebe. Nosni aspirator je siguran i efikasan način da se očisti nosić vaše bebe od sluzi, osiguravajući da mogu lakše i udobnije da dišu. Siguran i nežan za upotrebu, dizajniran je tako da možete biti sigurni da nećete povrediti nosne prolaze vaše bebe</p>
    </section>
    <section class="description">
        <div class="heading">
            <h2 class="basic-title description__title">
                Zaboravite na besane noći i pomozite svom detetu da diše lakše
            </h2>
        </div>
        <div class="description__grid">
            <div class="description__block">
                <img class="description__img" src="{{ asset('/') }}purplerelaxFiles/nasalaspirator/1.png" />
                <div class="description__text">Podesiva usisna snaga</div>
            </div>
            <div class="description__block">
                <img class="description__img" src="{{ asset('/') }}purplerelaxFiles/nasalaspirator/2.jpg" />
                <div class="description__text">Bezbedan i higijenski</div>
            </div>
            <div class="description__block">
                <img class="description__img" src="{{ asset('/') }}purplerelaxFiles/nasalaspirator/3.jpg" />
                <div class="description__text">Nežan</div>
            </div>
            <div class="description__block">
                <img class="description__img" src="{{ asset('/') }}purplerelaxFiles/nasalaspirator/4.png" />
                <div class="description__text">Ergonomski dizajn</div>
            </div>
            <div class="description__block">
                <img class="description__img" src="{{ asset('/') }}purplerelaxFiles/nasalaspirator/5.jpg" />
                <div class="description__text">Dva nastavka</div>
            </div>
            <div class="description__block">
                <img class="description__img" src="{{ asset('/') }}purplerelaxFiles/nasalaspirator/6.jpg" />
                <div class="description__text">Lako prenosiv</div>
            </div>
        </div>
    </section>
    <section class="prop">
        <div class="heading">
            <h2 class="basic-title prop__title">
                Must-have za roditelje
            </h2>
        </div>
        <ul class="prop__list">
            <li class="prop__item">
                <p class="prop__main">Brz i efikasan</p>
                <p>Nosni aspirator omogućava brzo i efikasno uklanjanje viška sluzi iz nosa vaše bebe.</p>
            </li>
            <li class="prop__item">
                <p class="prop__main">Bez iritacija i povreda</p>
                <p>Siguran i nežan za upotrebu na osetljivim nosnim prolazima vaše bebe.</p>
            </li>
            <li class="prop__item">
                <p class="prop__main">Kompaktan i lagan</p>
                <p>Što ga čini savršenim za korišćenje kod kuće ili na putovanju.</p>
            </li>
            <li class="prop__item">
                <p class="prop__main">Prihvaćeno od strane pedijatara</p>
                <p>Profesionalci u svetu ovaj uređaj sve više koriste i napuštaju zastarele tehnike kao što su gumeni špricevi.</p>
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
                <img class="reviews__img" src="{{ asset('/') }}purplerelaxFiles/nasalaspirator/review-1.jpg" alt="" />
                <h3 class="reviews__name">Ana, 29 godina</h3>
                <p class="reviews__text">Nosni aspirator je definitivno promenio našu svakodnevnicu sa bebom. Pre toga, moja beba je često bila zapušena i nije mogla dobro da diše. Sada sa nosnim aspiratorom, uvek možemo brzo i efikasno ukloniti višak sluzi, što joj omogućava da diše lakše i udobnije.</p>
            </div>
            <div class="reviews__slide">
                <img class="reviews__img" src="{{ asset('/') }}purplerelaxFiles/nasalaspirator/review-2.jpg" alt="" />
                <h3 class="reviews__name">Branka, 31 godina</h3>
                <p class="reviews__text">Bilo je teško naći nešto što bi zaista pomoglo mom detetu kada je bio zapušen. Ali onda smo otkrili nosni aspirator i stvari su se promenile. On je nežan i siguran za upotrebu, a moj sin se sada oseća mnogo bolje." - Jovana
                    "Moja beba je bila zapušena i nije mogla dobro da spava. Ali nakon što smo kupili nosni aspirator, situacija se drastično poboljšala. Sada moj mališan može lako da diše, a ja mogu da spavam mirno znajući da je on u redu.</p>
            </div>
            <div class="reviews__slide">
                <img class="reviews__img" src="{{ asset('/') }}purplerelaxFiles/nasalaspirator/review-3.png" alt="" />
                <h3 class="reviews__name">Kristina, 27 godina</h3>
                <p class="reviews__text">Nosni aspirator je bio jedan od najboljih proizvoda koje smo kupili za našu bebu. On je tako jednostavan za upotrebu i efikasno uklanja višak sluzi. Zapravo, naša beba čak i zaspi tokom korišćenja nosnog aspiratora jer oseća olakšanje u disanju." - Milica
                    "Kao nova mama, bila sam zabrinuta za zdravlje mog deteta i želela sam da pronađem proizvod koji bi mi pomogao. Nosni aspirator se pokazao kao savršen izbor. On je siguran i higijenski, a moj sin sada diše lakše i ima manje zapušenja nego pre.</p>
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
                <p>Svi proizvodi su testirani i potpuno sertifikovani.</p>
            </li>
        </ul>
    </section>
    <section class="offer offer--bottom">
        <div class="offer__main-bg">
            <p class="offer__desc">Rešenje za zapušen nosić vaše bebe</p>
            <div class="offer__discount">-40%</div>
        </div>
        <ul class="offer__list">
            <li class="offer__item">Nežan</li>
            <li class="offer__item">Snažan</li>
            <li class="offer__item">Bezbedan</li>
            <li class="offer__item">Kompaktan</li>
        </ul>
        <div class="offer__price">
            <div class="offer__old old-price">
                <p class="old-price__text">stara cena</p>
                <p class="old-price__num">
                    {{ $prices[1]['originalPrice'] }} RSD
                </p>
            </div>
            <div class="offer__new new-price">
                <p class="new-price__text">nova cena</p>
                <p class="new-price__num">
                    {{ $prices[1]['amount'] }} RSD
                </p>
            </div>
        </div>
        <form class="main-form" id="main-form" method="POST" action="{{$orderRoute}}">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <label for="name">Ime i prezime</label>
            <input id="name" type="text" name="name" placeholder="Ime i prezime" required/>
            <label for="phone">Telefon</label>
            <input id="phone" type="tel" name="phone" placeholder="Telefon" required/>
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
