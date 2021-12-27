<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="description" content>
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/bodyhelper/main.css">
    <style>@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Light.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Light.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Light.ttf') format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Italic.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Italic.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Italic.ttf') format('truetype');font-weight:400;font-style:italic}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.ttf') format('truetype');font-weight:600;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-SemiboldItalic.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-SemiboldItalic.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-SemiboldItalic.ttf') format('truetype');font-weight:600;font-style:italic}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Bold.ttf') format('truetype');font-weight:700;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.ttf') format('truetype');font-weight:800;font-style:normal}</style>
</head>
<body>
<div class="mk-wrapper">
    @include('components.display_errors')
    <header class="header">
        <div class="header__hero hero">
            <div class="hero__logo"><i class="svg-logo"></i></div>
            <h1 class="hero__title">Masažer za leđa</h1>
            <h2 class="hero__subtitle">Opušta mišiće vašeg tela <br>i ublažava napetost.</h2>
            <div class="hero__woman">
                <img src="{{ asset('/') }}flexonikFiles/bodyhelper/demo.png" alt>
                <ul class="pulse__list">
                    <li class="pulse__item"></li>
                    <li class="pulse__item"></li>
                    <li class="pulse__item"></li>
                    <li class="pulse__item"></li>
                </ul>
            </div>
            <img src="{{ asset('/') }}flexonikFiles/bodyhelper/product.png" alt class="hero__product">
        </div>
        <div class="header__action">
            <div class="header__price price">
                <p class="price__title">SAMO DANAS 40% POPUSTA</p>
                <div class="price__wrap">
                    <div class="price__left">
                        <span>Stara cena</span>
                        <p>
                            <s>
                                {{ $prices[1]['originalPrice'] }} RSD
                            </s>
                        </p>
                    </div>
                    <div class="price__right">
                        <span>Nova cena</span>
                        <p>
                            {{ $prices[1]['amount'] }} RSD
                        </p>
                    </div>
                </div>
            </div>
            <div class="header__form">
                <form action class="main-order-form form" method="POST" action="{{$orderRoute}}">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <label for>Ime i prezime</label>
                    <input type="text" name="name" placeholder="Ime i prezime" required>
                    <label for>Telefon</label>
                    <input type="tel" name="phone" placeholder="Telefon" required>
                    <label for>Adresa</label>
                    <input type="text" name="name" placeholder="Adresa" required>
                    <label for>Grad</label>
                    <input type="text" name="name" placeholder="Grad" required>
                    <button class="mk-button form__button">PORUČITE SA POPUSTOM</button>
                </form>
            </div>
            <p class="header__express"><span><i class="svg-delivery"></i></span> Brza dostava bez plaćanja unapred!</p>
        </div>
    </header>
    <section class="section top">
        <ul class="pros__list">
            <li class="pros__item">
                <div class="pros__icon"><i class="svg-body1"></i></div>
                <div class="pros__content">
                    <h3 class="pros__title">JAČA MIŠIĆNU STRUKTURU</h3>
                    <p class="pros__text">Deluje masažom duboko na sve mišićne grupe leđa, ublažava napetost i održba tonus mišića.</p>
                </div>
            </li>
            <li class="pros__item">
                <div class="pros__icon"><i class="svg-body2"></i></div>
                <div class="pros__content">
                    <h3 class="pros__title">ISPRAVLJA DRŽANJE</h3>
                    <p class="pros__text">Nežno deluje na kičmu i ispravlja je, držanje postaje ravnomerno i lepo.</p>
                </div>
            </li>
            <li class="pros__item">
                <div class="pros__icon"><i class="svg-body3"></i></div>
                <div class="pros__content">
                    <h3 class="pros__title">BRZI REZULTATI</h3>
                    <p class="pros__text">Vidljivi rezultati se postižu u roku od 1-2 nedelje upotrebe masažera.</p>
                </div>
            </li>
            <li class="pros__item">
                <div class="pros__icon"><i class="svg-body4"></i></div>
                <div class="pros__content">
                    <h3 class="pros__title">NEVIDLJIV ISPOD ODEĆE</h3>
                    <p class="pros__text">Može se nositi kod kuće, na poslu, u šetnji, u automobilu, pa čak i tokom sporta.</p>
                </div>
            </li>
        </ul>
    </section>
    <section class="section">
        <div class="section__title">
            <h2>ZAKRIVLJENOST DRŽANJA <span> I BOL U LEĐIMA</span></h2>
        </div>
        <p class="section__text">Bol u leđima predstavlja veliki problem većini današnje populacije.</p>
        <p class="section__text">Zakrivljenost kičme, bol u mišićima i donjem delu leđa ne stvaraju samo neprijatan osećaj već su <span>početni simptomi deformiteta kičme.</span> Ako se ne reaguje, postoji rizik
            od stresa na unutrašnje organe.</p>
        <ul class="befaf__slider">
            <li>
                <div class="befaf__image">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper/befaf1.jpg" alt class="befaf">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper/logo-blue.svg" alt class="logo">
                </div>
            </li>
            <li>
                <div class="befaf__image">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper/befaf2.jpg" alt class="befaf">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper/logo-blue.svg" alt class="logo">
                </div>
            </li>
            <li>
                <div class="befaf__image">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper/befaf3.jpg" alt class="befaf">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper/logo-blue.svg" alt class="logo">
                </div>
            </li>
            <li>
                <div class="befaf__image">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper/befaf4.jpg" alt class="befaf">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper/logo-blue.svg" alt class="logo">
                </div>
            </li>
            <li>
                <div class="befaf__image">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper/befaf5.jpg" alt class="befaf">
                    <img src="{{ asset('/') }}flexonikFiles/bodyhelper/logo-blue.svg" alt class="logo">
                </div>
            </li>
        </ul>
    </section>
    <section class="section cause">
        <div class="section__title section__title--center">
            <h2>78% LJUDI IMA PROBLEME SA LEĐIMA KAO I <span>SIMPTOME KOJI ZBOG NJIH NASTAJU</span></h2>
        </div>
        <ul class="cause__list">
            <li class="cause__item">
                <div class="cause__image cause__image--first"><img src="{{ asset('/') }}flexonikFiles/bodyhelper/photo1.jpg" alt></div>
                <p class="cause__text">Pogoršanje izgleda</p>
            </li>
            <li class="cause__item">
                <div class="cause__image cause__image--second"><img src="{{ asset('/') }}flexonikFiles/bodyhelper/photo2.jpg" alt></div>
                <p class="cause__text">Bol u nogama pri hodu</p>
            </li>
            <li class="cause__item">
                <div class="cause__image cause__image--third"><img src="{{ asset('/') }}flexonikFiles/bodyhelper/photo3.jpg" alt></div>
                <p class="cause__text">Česte glavobolje</p>
            </li>
            <li class="cause__item">
                <div class="cause__image cause__image--fourth"><img src="{{ asset('/') }}flexonikFiles/bodyhelper/photo4.jpg" alt></div>
                <p class="cause__text">Bol u donjem delu leđa</p>
            </li>
            <li class="cause__item">
                <div class="cause__image cause__image--fifth"><img src="{{ asset('/') }}flexonikFiles/bodyhelper/photo5.jpg" alt></div>
                <p class="cause__text">Brzo umaranje i loš san</p>
            </li>
            <li class="cause__item">
                <div class="cause__image cause__image--sixth"><img src="{{ asset('/') }}flexonikFiles/bodyhelper/photo6.jpg" alt></div>
                <p class="cause__text">Oštećenja unutrašnjih organa</p>
            </li>
        </ul>
    </section>
    <section class="section cta">
        <div class="cta__block">
            <h3>Kada se prvi put koristi, Body Helper ublažava manifestacije simptoma bola, a uz stalnu upotrebu potpuno eliminiše rizik od njihovog nastanka.</h3>
            <p>Oporavite leđa bez lekara i operacija, lekova i neudobnih krutih korzeta.</p>
            <p class="cta__fancy">Pogodno za sve uzraste!</p>
        </div>
        <a href="#order-form" class="mk-button cta__button">PORUČITE ODMAH SA 40% POPUSTA</a>
    </section>
    <section class="section">
        <p class="section__text section__text--em"><span>SISTEM KOREKCIJE I MASAŽE </span> je novina u oblasti nege leđa i kičme.</p>
        <p class="section__text">Uređaj uz pomoć elektronskih impulsa duboko utiče na mišiće leđa: jača ih i tonira, ujednačava držanje i čini leđa zdravim.</p>
        <ul class="cta__slider">
            <li>
                <div class="cta__image"><img src="{{ asset('/') }}flexonikFiles/bodyhelper/befaf6.jpg" alt></div>
            </li>
            <li>
                <div class="cta__image"><img src="{{ asset('/') }}flexonikFiles/bodyhelper/befaf7.jpg" alt></div>
            </li>
            <li>
                <div class="cta__image"><img src="{{ asset('/') }}flexonikFiles/bodyhelper/befaf8.jpg" alt></div>
            </li>
        </ul>
    </section>
    <section class="section recommend">
        <div class="section__title section__title--center">
            <h2>Body Helper <span>ODGOVARA SVIMA!</span></h2>
        </div>
        <ul class="recommend__list">
            <li class="recommend__item">
                <i class="svg-office"></i>
                <p>Kancelarijski radnici</p>
            </li>
            <li class="recommend__item">
                <i class="svg-sport"></i>
                <p>Sportisti</p>
            </li>
            <li class="recommend__item">
                <i class="svg-student"></i>
                <p>Studenti</p>
            </li>
            <li class="recommend__item">
                <i class="svg-child"></i>
                <p>Deca</p>
            </li>
            <li class="recommend__item">
                <i class="svg-olds"></i>
                <p>Stariji ljudi</p>
            </li>
            <li class="recommend__item">
                <i class="svg-sad"></i>
                <p>Svako ko želi da ima zdrava leđa</p>
            </li>
        </ul>
    </section>
    <section class="section reviews">
        <div class="section__title">
            <h2>UTISCI PRAVIH KUPACA <span>O BODY HELPERU</span></h2>
        </div>
        <ul class="reviews__slider">
            <li class="reviews__item">
                <div class="reviews__message reviews__message--out">
                    <div class="reviews__topbar">
                        <img src="{{ asset('/') }}flexonikFiles/bodyhelper/avatar1.png" alt class="reviews__ava">
                        <span class="reviews__name">Vlasto Madžgalj</span>
                    </div>
                    <div class="reviews__content">
                        <p>Zdravo momci! Naručio sam Body Helper pre tri nedelje i veoma sam zadovoljan. Moje stanje se znatno poboljšalo, glava je prestala da me boli. Drago mi je što
                            imam ovaj opuštajući masažer! Sve dobro radi, hvala!</p>
                        <img src="{{ asset('/') }}flexonikFiles/bodyhelper/review1.png" alt class="reviews__image">
                    </div>
                </div>
            </li>
            <li class="reviews__item">
                <div class="reviews__message reviews__message--out">
                    <div class="reviews__topbar">
                        <img src="{{ asset('/') }}flexonikFiles/bodyhelper/avatar2.png" alt class="reviews__ava">
                        <span class="reviews__name">Dejan Kostić</span>
                    </div>
                    <div class="reviews__content">
                        <p>Želim da vam kažem hvala za ovaj proizvod, to je sjajna stvar! Radim na kompjuteru, leđa su mi kriva kao gudalo. Nedavno su počeli bolovi u mišićima i donjem delu leđa.
                            Koistim Body Helper već 3 nedelje i osećam se sasvim dobro, sada ponovo mogu da ispravim ramena, hvala!</p>
                        <img src="{{ asset('/') }}flexonikFiles/bodyhelper/review2.png" alt class="reviews__image">
                    </div>
                </div>
            </li>
            <li class="reviews__item">
                <div class="reviews__message reviews__message--out">
                    <div class="reviews__topbar">
                        <img src="{{ asset('/') }}flexonikFiles/bodyhelper/avatar3.png" alt class="reviews__ava">
                        <span class="reviews__name">Danica Trpković Šehenberger</span>
                    </div>
                    <div class="reviews__content">
                        <p>Zdravo! Kada sam bila na ferijama u Srbiji, poručila sam ovaj proizvod i odnela ga sa sobom u Nemačku. Body Helper vredi svakog evra. Leđa su mi kao nova, i ne bole
                            me dok radim u fabrici papuča na traci. Masažer je potpuno ublažio bolove i oslobodio me napetosti. Nije mi žao ni jednog evra krvavo zarađenog.</p>
                        <img src="{{ asset('/') }}flexonikFiles/bodyhelper/review3.png" alt class="reviews__image">
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <section class="header">
        <div class="header__hero hero">
            <div class="hero__logo"><i class="svg-logo"></i></div>
            <h1 class="hero__title">Masažer za leđa</h1>
            <h2 class="hero__subtitle">Opušta mišiće vašeg tela <br>i ublažava napetost.</h2>
            <div class="hero__woman">
                <img src="{{ asset('/') }}flexonikFiles/bodyhelper/demo.png" alt>
                <ul class="pulse__list">
                    <li class="pulse__item"></li>
                    <li class="pulse__item"></li>
                    <li class="pulse__item"></li>
                    <li class="pulse__item"></li>
                </ul>
            </div>
            <img src="{{ asset('/') }}flexonikFiles/bodyhelper/product.png" alt class="hero__product">
        </div>
        <div class="header__action">
            <div class="header__price price">
                <p class="price__title">SAMO DANAS 40% POPUSTA</p>
                <div class="price__wrap">
                    <div class="price__left">
                        <span>Stara cena</span>
                        <p>
                            <s>
                                {{ $prices[1]['originalPrice'] }} RSD
                            </s>
                        </p>
                    </div>
                    <div class="price__right">
                        <span>Nova cena</span>
                        <p>
                            {{ $prices[1]['amount'] }} RSD
                        </p>
                    </div>
                </div>
            </div>
            <div class="header__form" id="order-form">
                <form action class="main-order-form form" method="POST" action="{{$orderRoute}}">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <label for>Ime i prezime</label>
                    <input type="text" name="name" placeholder="Ime i prezime" required>
                    <label for>Telefon</label>
                    <input type="tel" name="phone" placeholder="Telefon" required>
                    <label for>Adresa</label>
                    <input type="text" name="name" placeholder="Adresa" required>
                    <label for>Grad</label>
                    <input type="text" name="name" placeholder="Grad" required>
                    <button class="mk-button form__button">PORUČITE SA POPUSTOM</button>
                </form>
            </div>
            <p class="header__express"><span><i class="svg-delivery"></i></span> Brza dostava bez plaćanja unapred!</p>
        </div>
    </section>
</div>
<script>
    $(document).ready(function() {
        $("a[href^='#']").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
            return false;
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>