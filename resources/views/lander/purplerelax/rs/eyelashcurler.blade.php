<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta description="Eyelash Curler">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="format-detection" content="telephone=no">
    <link href="{{ asset('/') }}purplerelaxFiles/eyelashcurler/main.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/eyelashcurler/product.png" type="image/x-icon">
    <style>
        @font-face {
            font-family: slick;
            font-weight: 400;
            font-style: normal;
            src: url({{ asset('/') }}fonts/slick.eot);
            src: url({{ asset('/') }}fonts/slick.eot@#iefix) format("embedded-opentype"), url({{ asset('/') }}fonts/slick.woff) format("woff"),
            url({{ asset('/') }}fonts/slick.ttf) format("truetype"), url({{ asset('/') }}fonts/slick.svg#slick) format("svg");
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header class="header">
    <h1>EYELASH CURLER <br> ELEKTRIČNI UVIJAČ ZA TREPAVICE</h1>
    <h2>Za zavodljiv pogled!</h2>
    <ul class="list-reset header__list">
        <li> Uvijenije</li>
        <li> Izduženije</li>
        <li> Gušće</li>
    </ul>
    <img src="{{ asset('/') }}purplerelaxFiles/eyelashcurler/product.png" alt class="header__product">
    <div class="header__sale">
        <div class="header__sale_content">
            <p> popust</p>
            <p><span> 40%</span></p>
        </div>
    </div>
    <div class="header__price">
        <div class="header__price_old">
            <p>regularna cena</p>
            <p>
                  <span>
                     {{ $prices[1]['originalPrice'] }}
                     {{ $prices[1]['currency'] }}
                  </span>
            </p>
        </div>
        <div class="header__price_new">
            <p>cena sa popustom</p>
            <p>
                  <span>
                     {{ $prices[1]['amount'] }}
                     {{ $prices[1]['currency'] }}
                  </span>
            </p>
        </div>
    </div>
    <img src="{{ asset('/') }}purplerelaxFiles/eyelashcurler/arrows.svg" alt class="header__arrows">
    <button class="button show-form animatedBtn"> PORUČI</button>
</header>
<main>
    <section class="block1">
        <h3 class="standardTitle">
            Želite prelepe trepavice?
            Nikada lakše uz
            <p class="textWithSubstrate"><span> Eyelash Curler!</span>
            </p>
        </h3>
        <div class="video__wrapper">
            <video preload="auto" autoplay loop muted webkit-playsinline playsinline class="video video_autoPlay">
                <source src="{{ asset('/') }}purplerelaxFiles/eyelashcurler/video_1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <p class="standardParagraph">Grejani električni uvijač za trepavice savršeno ih uvija, čineći da izgledaju <span>1,5 puta duže i 2 puta gušće.</span></p>
    </section>
    <section class="block2">
        <h3 class="standardTitle alternativeTitle">
            Jednostavno. Praktično.
            <p class="textWithSubstrate"><span> Idealno.</span></p>
        </h3>
        <ul class="block2__list list-reset">
            <li>
                <p> Zagrevanje</p>
                <span>Aparat zagreva trepavice i na taj način olakšava uvijanje</span>
            </li>
            <li>
                <p> Pametno</p>
                <span>Inteligentna kontrola temperature garantuje sigurnost trepavica</span>
            </li>
            <li>
                <p>Zaštita od opekotina</p>
                <span>Termoizolacioni valjci štite nežnu kožu oko očiju od neugodnosti i opekotina</span>
            </li>
            <li>
                <p> Baterije</p>
                <span>Uvijač radi na samo jednu običnu bateriju koja dugo traje, i koju možete da kupite na svakom kiosku</span>
            </li>
            <li>
                <p> Efekat</p>
                <span>Daje efekat lepših, gušćih i izduženijih obrva</span>
            </li>
        </ul>
    </section>
    <section class="block3">
        <h3 class="block3__title standardTitle">
            <p class="textWithSubstrate"><span> Eyelash Curler</span></p>
            - najbolji izbor
        </h3>
        <ul class="block3__list list-reset">
            <li> </li>
            <li>
                <p>🞄 Najtraženiji na tržištu</p>
            </li>
            <li>
                <p>🞄 Povoljna cena</p>
            </li>
        </ul>
        <div class="block3__product">
            <img src="{{ asset('/') }}purplerelaxFiles/eyelashcurler/product_2.png" alt class="block3__productImg">
            <img src="{{ asset('/') }}purplerelaxFiles/eyelashcurler/arrow.svg" alt class="block3__arrow">
            <div class="block3__oldPrice">
                <p>regularna cena</p>
                <p>
                     <span>
                        {{ $prices[1]['originalPrice'] }}
                        {{ $prices[1]['currency'] }}
                     </span>
                </p>
            </div>
            <div class="block3__newPrice">
                <p>cena sa popustom</p>
                <p>
                     <span>
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                     </span>
                </p>
            </div>
            <div class="block3__sale">
                <div class="header__sale_content">
                    <p> popust</p>
                    <p><span> 40%</span></p>
                </div>
            </div>
        </div>
        <button class="button show-form animatedBtn"> PORUČI</button>
    </section>
    <section class="block4">
        <h3 class="standardTitle">
            <p class="textWithSubstrate"><span> Eyelash Curler</span></p>
            - Baš ono što ti treba!
        </h3>
        <div class="video__wrapper">
            <video preload="auto" autoplay loop muted webkit-playsinline playsinline class="video video_autoPlay">
                <source src="{{ asset('/') }}purplerelaxFiles/eyelashcurler/video_2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>
    <section class="block5">
        <h3 class="standardTitle alternativeTitle">
            Kako koristiti
            <p class="textWithSubstrate"><span>uvijač za trepavice?</span>
            </p>
        </h3>
        <div class="using__item">
            <img src="{{ asset('/') }}purplerelaxFiles/eyelashcurler/using_1.jpg" alt>
            <div class="using__text">Uključite uvijač i ostavite da se zagreje nekoliko sekundi</div>
        </div>
        <div class="using__item">
            <img src="{{ asset('/') }}purplerelaxFiles/eyelashcurler/using_2.jpg" alt>
            <div class="using__text">Uvijte trepavice u roku od 8-10 sekndi</div>
        </div>
        <div class="using__item">
            <img src="{{ asset('/') }}purplerelaxFiles/eyelashcurler/using_3.jpg" alt>
            <div class="using__text">Uživajte sa prelepim trepavicama 24 sata na dan!</div>
        </div>
    </section>
    <section class="block6">
        <h3 class="block6__title standardTitle">Utisci zadovoljnih kupaca</h3>
        <div class="reviews-wrapper block6__sliderWrapper">
            <div class="reviews__count"><span class="current-slide">1</span>/<span class="all-slides">5</span></div>
            <div class="block6__reviews">
                <div class="reviews-item">
                    <div class="reviews-card">
                        <img src="{{ asset('/') }}purplerelaxFiles/eyelashcurler/foto_1.jpg" alt>
                        <div class="reviews-content">
                            <div class="reviews-text">Zaljubljena sam u ovaj proizvod! Pored veoma cool efekta, takođe je i veoma elegantan!</div>
                        </div>
                    </div>
                </div>
                <div class="reviews-item">
                    <div class="reviews-card">
                        <img src="{{ asset('/') }}purplerelaxFiles/eyelashcurler/foto_4.jpg" alt>
                        <div class="reviews-content">
                            <div class="reviews-text">Ko je pitao za uvijač trepavica? Dobila sam ga juče. Vrlo je jednostavan za korišćenje, čak je i moja mala kćerka uvijala trepavice.</div>
                        </div>
                    </div>
                </div>
                <div class="reviews-item">
                    <div class="reviews-card">
                        <img src="{{ asset('/') }}purplerelaxFiles/eyelashcurler/foto_5.jpg" alt>
                        <div class="reviews-content">
                            <div class="reviews-text">Trepavice ne samo da se uvijaju, nego i postaju paperjaste. Prestala sam da koristim maskaru. Super proizvod!</div>
                        </div>
                    </div>
                </div>
                <div class="reviews-item">
                    <div class="reviews-card">
                        <img src="{{ asset('/') }}purplerelaxFiles/eyelashcurler/foto_6.jpg" alt>
                        <div class="reviews-content">
                            <div class="reviews-text">To je musthave u torbi svake devojke! Maskaru više ne koristim, jer Eyelash Curler čini moje trepavice savršenim!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="block7">
        <h3 class="block7__title standardTitle">Kako poručiti?</h3>
        <ul class="list-reset block7__list">
            <li>Ostavite podatke za dostavu na našem sajtu</li>
            <li>Potvrdićemo vašu porudžbinu</li>
            <li>Praćanje kuriru brze pošte po prijemu paketa</li>
        </ul>
        <div class="block7__delivery">Šaljemo brzom poštom u roku od 1-2 radna dana!</div>
    </section>
    <section class="header block8">
        <h1>EYELASH CURLER <br> ELEKTRIČNI UVIJAČ ZA TREPAVICE</h1>
        <h2>Za zavodljiv pogled!</h2>
        <ul class="list-reset header__list">
            <li> Uvijenije</li>
            <li> Izduženije</li>
            <li> Gušće</li>
        </ul>
        <img src="{{ asset('/') }}purplerelaxFiles/eyelashcurler/product.png" alt class="header__product">
        <div class="header__sale">
            <div class="header__sale_content">
                <p> popust</p>
                <p><span> 40%</span></p>
            </div>
        </div>
        <div class="header__price">
            <div class="header__price_old">
                <p>regularna cena</p>
                <p>
                     <span>
                        {{ $prices[1]['originalPrice'] }}
                        {{ $prices[1]['currency'] }}
                     </span>
                </p>
            </div>
            <div class="header__price_new">
                <p>cena sa popustom</p>
                <p>
                     <span>
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                     </span>
                </p>
            </div>
        </div>
        <img src="{{ asset('/') }}purplerelaxFiles/eyelashcurler/arrows.svg" alt class="header__arrows">
        <form id="orderForm" action="{{$orderRoute}}" method="POST" class="form">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input type="text" name="name" required="required" placeholder="Ime i prezime">
            <input type="tel" name="phone" required="required" placeholder="Telefon">
            <button type="submit" class="button animatedBtn"> PORUČI SADA</button>
        </form>
    </section>
</main>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script>
    $(document).ready(function () {
        $(".show-form").click(function () {
            $("html, body").animate({
                scrollTop: $("#orderForm").offset().top
            }, 500)
        }), $("a").click(function () {
            return $("html, body").animate({
                scrollTop: $($(this).attr("href")).offset().top
            }, 700), !1
        }), $(".block6__reviews").slick({
            arrows: !0,
            dots: !0,
            adaptiveHeight: !0
        });
        var e;
        e = ".block6__reviews", $(".block6__sliderWrapper").find(".all-slides").text($(".block6 .slick-dots li").length), $(e).on("afterChange", function () {
            var e = $(this).parent(),
                t = e.find(".current-slide"),
                n = e.find(".slick-dots .slick-active").text();
            t.text(n)
        })
    })
</script>
@include('components.pixel_footer')
</body>
</html>
