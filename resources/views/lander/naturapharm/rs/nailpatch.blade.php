<!DOCTYPE>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('/') }}flexovalFiles/antismellsocks/favicon.ico">
    <link rel="stylesheet" href="{{ asset('/') }}flexovalFiles/antismellsocks/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Open+Sans&amp;display=swap" rel="stylesheet">
    <style>
        .intro__main {
            background-image: url({{ asset('/') }}naturapharmFiles/nailpatch/back__intro.png);
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header class="intro">
    <div class="intro__main">
        <div class="intro__top">
            <p class="intro__header">Flasteri protiv urastanja noktiju</p>
            <p class="intro__slogan">NAIL PATCH</p>
            <p class="intro__subtitle">Najbolji u 2022!</p>
        </div>
    </div>
    <div class="intro__bottom">
        <div class="builets">
            <div class="builets__list">
                <div class="builets__item"><img src="{{ asset('/') }}flexovalFiles/antismellsocks/builets__item_1.png" alt>
                    <span>100% prirodni</span>
                </div>
                <div class="builets__item"><img src="{{ asset('/') }}flexovalFiles/antismellsocks/builets__item_2.png" alt>
                    <span>Efikasan tretman</span>
                </div>
                <div class="builets__item"><img src="{{ asset('/') }}flexovalFiles/antismellsocks/builets__item_3.png" alt>
                    <span>Uz redovno korišćenje do lepih noktiju</span>
                </div>
            </div>
        </div>
        <div class="price">
            <div class="price__item price__item--lef">
                <span>Stara cena:</span>
                <s>
                    {{ $prices[1]['originalPrice'] }} RSD
                </s>
            </div>
            <div class="price__center">
                <b> -40%</b>
            </div>
            <div class="price__item price__item--righ">
                <span>Nova cena:</span>
                <b>
                    {{ $prices[1]['amount'] }} RSD
                </b>
            </div>
        </div>
        <br>
        <a href="#offer" class="btn">Poručite sada</a>
        <br>
    </div>
</header>
<main class="main">
    <section class="sect1">
        <img src="{{ asset('/') }}flexovalFiles/antismellsocks/sect1_top.png" alt class="sect1__top">
        <div class="content">
            <h2 class="sect1__title">PREDNOSTI <br> NAIL PATCH FLASTERA</h2>
            <div class="sect1__grid">
                <div class="sect1__item">
                    <img src="{{ asset('/') }}naturapharmFiles/nailpatch/sect1_1.png" alt>
                    <p>Bez štetnih uticaja</p>
                </div>
                <div class="sect1__item">
                    <img src="{{ asset('/') }}naturapharmFiles/nailpatch/sect1_2.png" alt>
                    <p>Nežni i mekani</p>
                </div>
                <div class="sect1__item">
                    <img src="{{ asset('/') }}naturapharmFiles/nailpatch/sect1_3.png" alt>
                    <p>Jednostavni za korišćenje i nošenje</p>
                </div>
                <div class="sect1__item">
                    <img src="{{ asset('/') }}naturapharmFiles/nailpatch/sect1_4.png" alt>
                    <p>Jako efikasni, daju odličan rezultat</p>
                </div>
            </div>
        </div>
        <img src="{{ asset('/') }}flexovalFiles/antismellsocks/sect2__top.png" alt class="sect1__bottom">
    </section>
    <section class="sect2">
        <div class="content">
            <div class="sect2__main">
                <h2 class="sect2__title">ŠTA JE <br> NAIL PATCH?</h2>
                <p class="sect2__text">Flasteri koji sprečavaju urastanje noktiju i vraćaju nokat u normalno stanje.
                    Nail Patch je napravljen od pamučnog materijala, mekan je na dodir, prozračan i ima dobru elastičnost.
                    Uz radovno korišćenje daje primetan i efikasan rezultat.</p>
                <img src="{{ asset('/') }}naturapharmFiles/nailpatch/sect2_img1.png" alt class="no-pad">
                <p class="sect2__text">Očistite nokte na nogama i osušite ih.
                    Zalepite flaster celom širinom nokta i nakon toga možete normalno da nosite čarape i obuću.
                    Dok obavljate svakodnevne aktivnosti, flaster će da deluje a vi ćete zaboraviti na njega.</p>
                <img src="{{ asset('/') }}naturapharmFiles/nailpatch/sect2_img2.png" alt class="no-pad">
            </div>
            <a href="#offer" class="btn">Poručite sada</a>
        </div>
    </section>
    <section class="sect5">
        <img src="{{ asset('/') }}flexovalFiles/antismellsocks/backround_4.png" alt class="sect5__top">
        <h2 class="sect5__title">MIŠLJENJE KUPACA <br> NAŠIH FLASTERA</h2>
        <div class="reviews owl-carousel">
            <div class="reviews__item">
                <div class="reviews__header">
                    <div class="reviews__lef">
                        <img class="ava" src="{{ asset('/') }}flexovalFiles/antismellsocks/ava_1.png" alt>
                        <p class="reviews__name"> Goran</p>
                    </div>
                </div>
                <div class="reviews__main">
                    <p class="reviews__comment reviews__comment--righ">Dobar dan Gorane! Da li vam se dopadaju naši flasteri?</p>
                    <div class="reviews__user">
                        <img src="{{ asset('/') }}flexovalFiles/antismellsocks/user_1.png" alt class="reviews__img">
                        <p class="reviews__comment reviews__comment--left">Zdravo. Da mnogo mi se dopadaju. Bavim se sportom i nakon treninga su me često boleli nokti koji su bili urasli i pravili mi probleme. Nakon mesec dana korišćenja, bol je potpuno nestao. Mnogo vam hvala!</p>
                    </div>
                    <p class="reviews__comment reviews__comment--righ">Odlično, baš nam je drago. Pozdrav!</p>
                </div>
            </div>
            <div class="reviews__item">
                <div class="reviews__header">
                    <div class="reviews__lef">
                        <img class="ava" src="{{ asset('/') }}flexovalFiles/antismellsocks/ava_2.png" alt>
                        <p class="reviews__name"> Jovica</p>
                    </div>
                </div>
                <div class="reviews__main">
                    <p class="reviews__comment reviews__comment--righ">Zdravo, da li ste iskoristili naše flastere i kakvi su?</p>
                    <div class="reviews__user">
                        <img src="{{ asset('/') }}flexovalFiles/antismellsocks/user_2.png" alt class="reviews__img">
                        <p class="reviews__comment reviews__comment--left">Dobar dan! Savršeno mi odgovaraju. Ne osetim ih na nozi, a daju super efekat. Više me neće biti sramota da obuvam papuče. Pošaljite mi još 2 kutije molim vas. Pozdrav!</p>
                    </div>
                    <div class="reviews__user"><img src="{{ asset('/') }}flexovalFiles/antismellsocks/user_2.png" alt class="reviews__img">
                        <img src="{{ asset('/') }}naturapharmFiles/nailpatch/comment_1.png" alt class=" reviews__comment--img">
                    </div>
                    <br>
                    <p class="reviews__comment reviews__comment--righ">Šaljemo vam sutra 2 kutije. Pozdrav!</p>
                </div>
            </div>
            <div class="reviews__item">
                <div class="reviews__header">
                    <div class="reviews__lef">
                        <img class="ava" src="{{ asset('/') }}flexovalFiles/antismellsocks/ava_3.png" alt>
                        <p class="reviews__name">Marko</p>
                    </div>
                </div>
                <div class="reviews__main">
                    <p class="reviews__comment reviews__comment--righ">Dobar dan. Da li ste dobili Nail Patch flastere?</p>
                    <div class="reviews__user">
                        <img src="{{ asset('/') }}flexovalFiles/antismellsocks/user_3.png" alt class="reviews__img">
                        <p class="reviews__comment reviews__comment--left">Ćao. Dobio sam i hvala vam na brzoj isporuci. Odlični su, ovo je izum čovečanstva! Dugo sam imao problem sa uraslim noktima i ništa do sada nije uspelo da ga reši. Sve preporuke!</p>
                    </div>
                    <div class="reviews__user"><img src="{{ asset('/') }}flexovalFiles/antismellsocks/user_3.png" alt class="reviews__img">
                        <img src="{{ asset('/') }}naturapharmFiles/nailpatch/comment_2.png" alt class=" reviews__comment--img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sect6">
        <div class="content">
            <h3 class="sect6__title">Kako do Nail Patch flastera?</h3>
            <div class="sect6__grid">
                <div class="sect6__item">
                    <img src="{{ asset('/') }}flexovalFiles/antismellsocks/sect6_1.png" alt>
                    <p><b> PORUČITE</b> Ostavite podatke za dostavu u formi ispod</p>
                </div>
                <div class="sect6__item">
                    <img src="{{ asset('/') }}flexovalFiles/antismellsocks/sect6_2.png" alt>
                    <p><b> POTVRDA</b> Naš korisnički centar će vas kontaktirati kako bi potvrdili vašu porudžbinu</p>
                </div>
                <div class="sect6__item">
                    <img src="{{ asset('/') }}flexovalFiles/antismellsocks/sect6_3.png" alt>
                    <p><b> DOSTAVA</b> Paket šaljemo brzom poštom u roku od 1-2 radna dana</p>
                </div>
                <div class="sect6__item">
                    <img src="{{ asset('/') }}flexovalFiles/antismellsocks/sect6_4.png" alt>
                    <p><b> PLAĆANJE</b> Pošiljku plaćate po pouzeću kuriru brze pošte</p>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="intro">
    <div class="intro__main">
        <div class="intro__top">
            <p class="intro__header">Flasteri protiv urastanja noktiju</p>
            <p class="intro__slogan">NAIL PATCH</p>
            <p class="intro__subtitle">Najbolji u 2022!</p>
        </div>
    </div>
    <div class="intro__bottom">
        <div class="price">
            <div class="price__item price__item--lef">
                <span>Stara cena:</span>
                <s>
                    {{ $prices[1]['originalPrice'] }} RSD
                </s>
            </div>
            <div class="price__center">
                <b> -40%</b>
            </div>
            <div class="price__item price__item--righ">
                <span>Nova cena:</span>
                <b>
                    {{ $prices[1]['amount'] }} RSD
                </b>
            </div>
        </div>
        <br>
        <form id="offer" method="POST" action="{{$orderRoute}}" class="form">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input type="text" name="name" required placeholder="Ime i prezime">
            <input type="tel" name="phone" required placeholder="Telefon">
            <button class="btn">Završite porudžbinu</button>
        </form>
    </div>
</footer>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $(".reviews").owlCarousel({
            margin: 20,
            items: 1,
            dots: true,
            nav: false,
            autoHeight: true
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>
