<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="{{ asset('/') }}dailysharkFiles/chopper/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/chopper/style.min.css">
    <style>
        @font-face {
            font-family: "Open Sans";
            font-display: swap;
            font-style: normal;
            font-weight: 400;
            src: url({{ asset('/') }}fonts/opensans-regular-webfont.woff2) format("woff2"), url({{ asset('/') }}fonts/opensans-regular-webfont.html) format("woff")
        }

        @font-face {
            font-family: "Open Sans";
            font-display: swap;
            font-style: normal;
            font-weight: 700;
            src: url({{ asset('/') }}fonts/opensans-bold-webfont.woff2) format("woff2"), url({{ asset('/') }}fonts/opensans-bold-webfont.html) format("woff")
        }

        @font-face {
            font-family: "Open Sans";
            font-display: swap;
            font-style: normal;
            font-weight: 800;
            src: url({{ asset('/') }}fonts/opensans-extrabold-webfont.woff2) format("woff2"), url({{ asset('/') }}fonts/opensans-extrabold-webfont.html) format("woff")
        }
    </style>
</head>
<body class="timer-different">
<section class="header block">
    <div class="container">
        <div class="header__content">
            <div class="header__left">
                <h1 class="header__title title">Multi Jack</h1>
                <p class="header__desc">SIEKACZ ELEKTRYCZNY</p>
                <div class="header__wrap-video">
                    <video autoplay loop muted playsinline="" poster="{{ asset('/') }}dailysharkFiles/chopper/header_video.jpg">
                        <source src="{{ asset('/') }}dailysharkFiles/chopper/header_video.webm" type="video/webm">
                        <source src="{{ asset('/') }}dailysharkFiles/chopper/header_video.mp4" type="video/mp4">
                    </video>
                    <ul class="header__list list-pr">
                        <li class="list-pr__item">KROI I MIAŻDŻY</li>
                        <li class="list-pr__item">MIELE</li>
                        <li class="list-pr__item">ROBI PUREE</li>
                    </ul>
                </div>
                <div class="header__wrap-photo">
                    <div class="header__sale sale">
                        <p class="sale__text">ZNIŻKA</p>
                        <p class="sale__percent">70%</p>
                    </div>
                    <picture>
                        <source media="(max-width: 1023px)" srcset="{{ asset('/') }}dailysharkFiles/chopper/prod_mob.png" type="image/webp">
                        <source media="(max-width: 1023px)" srcset="{{ asset('/') }}dailysharkFiles/chopper/prod_mob.png">
                        <source srcset="{{ asset('/') }}dailysharkFiles/chopper/header_prod.png" type="image/webp">
                        <img src="{{ asset('/') }}dailysharkFiles/chopper/header_prod.png" alt="Multi Jack">
                    </picture>
                </div>
            </div>
            <div class="header__right">
                <div class="header__price price">
                    <div class="price__content price__content--old">
                        <p class="price__text">Zwykła cena:</p>
                        <div class="price__wrap">
                            <p class="price__num x_price_previous">650</p>
                            <p class="price__currency x_currency">zł</p>
                        </div>
                    </div>
                    <div class="price__content price__content--new">
                        <p class="price__text">Cena dzisiaj:</p>
                        <div class="price__wrap">
                            <p class="price__num x_price_current">195</p>
                            <p class="price__currency x_currency">zł</p>
                        </div>
                    </div>
                </div>
                <div class="header__form">
                    <form class="form x_order_form" action="#" method="post">
                        <p class="form__ttl">Wybierz ilość</p>
                        <div class="form__tabs">
                            <div class="tab">
                                <p class="tab__btn active js-tab">1 szt.</p>
                                <div class="tab__wrap">
                                    <p class="tab__price x_price_current">195</p>
                                    <p class="tab__currency x_currency">zł</p>
                                </div>
                            </div>
                            <div class="tab">
                                <p class="tab__btn js-tab">2 szt.</p>
                                <div class="tab__wrap">
                                    <p class="tab__price">155</p>
                                    <p class="tab__currency">zł</p>
                                    <p class="tab__text">za każdy</p>
                                </div>
                            </div>
                        </div>
                        <div class="form__inputs">
                            <input class="form__input" type="text" name="name" placeholder="Moje imię" required
                                   autocomplete="name">
                            <input class="form__input" autocomplete="tel" name="phone" placeholder="Mój telefon"
                                   required type="tel">
                        </div>
                        <button class="form__btn btn" type="submit">Wyślij wniosek</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="advantages block">
    <div class="container">
        <h2 class="advantages__title title">ZASTĘPUJE 6 URZĄDZEŃ KUCHENNYCH</h2>
        <div class="advantages__list">
            <div class="item">
                <p class="item__text">Mikser</p>
            </div>
            <div class="item">
                <p class="item__text">Maszynka do mięsa</p>
            </div>
            <div class="item">
                <p class="item__text">Siekacz do warzyw</p>
            </div>
            <div class="item">
                <p class="item__text">Blender</p>
            </div>
            <div class="item">
                <p class="item__text">Młynek do kawy</p>
            </div>
            <div class="item">
                <p class="item__text">Shaker</p>
            </div>
        </div>
        <div class="advantages__bottom">
            <div class="advantages__col">
                <div class="advantage">
                    <picture>
                        <source srcset="{{ asset('/') }}dailysharkFiles/chopper/advantage_1.png" type="image/webp">
                        <img loading="lazy" src="{{ asset('/') }}dailysharkFiles/chopper/advantage_1.html" alt="advantage">
                    </picture>
                    <div class="advantage__ttl">
                        <p class="advantage__text">Uniwersalne urządzenie kuchenne</p>
                    </div>
                </div>
                <div class="advantage">
                    <picture>
                        <source srcset="{{ asset('/') }}dailysharkFiles/chopper/advantage_2.png" type="image/webp">
                        <img loading="lazy" src="{{ asset('/') }}dailysharkFiles/chopper/advantage_2.html" alt="advantage">
                    </picture>
                    <div class="advantage__ttl">
                        <p class="advantage__text">Ostre noże + mocny silnik</p>
                    </div>
                </div>
            </div>
            <div class="advantages__center">
                <video autoplay loop muted playsinline="" poster="{{ asset('/') }}dailysharkFiles/chopper/advantage_poster.jpg">
                    <source src="{{ asset('/') }}dailysharkFiles/chopper/advantage.webm" type="video/webm">
                    <source src="{{ asset('/') }}dailysharkFiles/chopper/advantage.html" type="video/mp4">
                </video>
            </div>
            <div class="advantages__col">
                <div class="advantage">
                    <picture>
                        <source srcset="{{ asset('/') }}dailysharkFiles/chopper/advantage_3.png" type="image/webp">
                        <img loading="lazy" src="{{ asset('/') }}dailysharkFiles/chopper/advantage_3.html" alt="advantage">
                    </picture>
                    <div class="advantage__ttl">
                        <p class="advantage__text">Obsługiwanie jednym przyciskiem</p>
                    </div>
                </div>
                <div class="advantage">
                    <picture>
                        <source srcset="{{ asset('/') }}dailysharkFiles/chopper/advantage_4.png" type="image/webp">
                        <img loading="lazy" src="{{ asset('/') }}dailysharkFiles/chopper/advantage_4.html" alt="advantage">
                    </picture>
                    <div class="advantage__ttl">
                        <p class="advantage__text">Łatwy do demontażu i czyszczenia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="information block">
    <div class="container">
        <h2 class="information__title title">POSIEKA W 5 SEKUND!</h2>
        <picture>
            <source media="(max-width: 479px)" srcset="{{ asset('/') }}dailysharkFiles/chopper/information__result-mob.png" type="image/webp">
            <source media="(max-width: 479px)" srcset="{{ asset('/') }}dailysharkFiles/chopper/information__result-mob.png">
            <source srcset="{{ asset('/') }}dailysharkFiles/chopper/information__result.png" type="image/webp">
            <img loading="lazy" class="information__image" src="{{ asset('/') }}dailysharkFiles/chopper/information__result.png" alt="result">
        </picture>
        <div class="information__list">
            <div class="product">
                <div class="product__content">
                    <img loading="lazy" class="product__img" src="{{ asset('/') }}dailysharkFiles/chopper/product_1.png"
                         alt="product">
                    <p class="product__text">Mięso</p>
                </div>
            </div>
            <div class="product">
                <div class="product__content">
                    <img loading="lazy" class="product__img" src="{{ asset('/') }}dailysharkFiles/chopper/product_2.png"
                         alt="product">
                    <p class="product__text">Warzywa </p>
                </div>
            </div>
            <div class="product">
                <div class="product__content">
                    <img loading="lazy" class="product__img" src="{{ asset('/') }}dailysharkFiles/chopper/product_3.png"
                         alt="product">
                    <p class="product__text">Owoce</p>
                </div>
            </div>
            <div class="product">
                <div class="product__content">
                    <img loading="lazy" class="product__img" src="{{ asset('/') }}dailysharkFiles/chopper/product_4.png"
                         alt="product">
                    <p class="product__text">Orzechi</p>
                </div>
            </div>
            <div class="product">
                <div class="product__content">
                    <img loading="lazy" class="product__img" src="{{ asset('/') }}dailysharkFiles/chopper/product_5.png"
                         alt="product">
                    <p class="product__text">Kawę</p>
                </div>
            </div>
            <div class="product">
                <div class="product__content">
                    <img loading="lazy" class="product__img" src="{{ asset('/') }}dailysharkFiles/chopper/product_6.png"
                         alt="product">
                    <p class="product__text">Lód</p>
                </div>
            </div>
        </div>
        <h3 class="information__ttl">SPRAWNIE I SZYBKO PRACUJE ZAMIAST CIEBIE:</h3>
        <div class="information__work">
            <div class="work-item">
                <video autoplay loop muted playsinline="" poster="{{ asset('/') }}dailysharkFiles/chopper/work_1_poster.jpg">
                    <source src="{{ asset('/') }}dailysharkFiles/chopper/work_1.webm" type="video/webm">
                    <source src="{{ asset('/') }}dailysharkFiles/chopper/work_1.html" type="video/mp4">
                </video>
                <div class="work-item__ttl">
                    <p class="work-item__text">KROI I MIAŻDŻY</p>
                </div>
            </div>
            <div class="work-item">
                <video autoplay loop muted playsinline="" poster="{{ asset('/') }}dailysharkFiles/chopper/work_2_poster.jpg">
                    <source src="{{ asset('/') }}dailysharkFiles/chopper/work_2.webm" type="video/webm">
                    <source src="{{ asset('/') }}dailysharkFiles/chopper/work_2.html" type="video/mp4">
                </video>
                <div class="work-item__ttl">
                    <p class="work-item__text">MIELE</p>
                </div>
            </div>
            <div class="work-item">
                <video autoplay loop muted playsinline="" poster="{{ asset('/') }}dailysharkFiles/chopper/work_3_poster.jpg">
                    <source src="{{ asset('/') }}dailysharkFiles/chopper/work_3.webm" type="video/webm">
                    <source src="{{ asset('/') }}dailysharkFiles/chopper/work_3.html" type="video/mp4">
                </video>
                <div class="work-item__ttl">
                    <p class="work-item__text">ROBI PUREE</p>
                </div>
            </div>
        </div>
        <a class="information__btn btn btn--red" href="#form">Wyślij wniosek</a>
        <p class="information__text">W cenie promocyjnej pozostało <span class="lastpack">21</span> sztuk</p>
    </div>
</section>
<section class="gallery block">
    <div class="container">
        <h2 class="gallery__title title">STWORZONY, ABY OSZCZĘDZAĆ TWÓJ CZAS</h2>
        <div class="gallery__list">
            <div class="photo">
                <picture>
                    <source media="(max-width: 479px)" srcset="{{ asset('/') }}dailysharkFiles/chopper/gallery_1-mob.png" type="image/webp">
                    <source media="(max-width: 479px)" srcset="{{ asset('/') }}dailysharkFiles/chopper/gallery_1-mob.html">
                    <source srcset="{{ asset('/') }}dailysharkFiles/chopper/gallery_1.png" type="image/webp">
                    <img loading="lazy" class="photo__img" src="{{ asset('/') }}dailysharkFiles/chopper/gallery_1.html" alt="photo">
                </picture>
            </div>
            <div class="photo">
                <picture>
                    <source media="(max-width: 479px)" srcset="{{ asset('/') }}dailysharkFiles/chopper/gallery_2-mob.png" type="image/webp">
                    <source media="(max-width: 479px)" srcset="{{ asset('/') }}dailysharkFiles/chopper/gallery_2-mob.html">
                    <source srcset="{{ asset('/') }}dailysharkFiles/chopper/gallery_2.png" type="image/webp">
                    <img loading="lazy" class="photo__img" src="{{ asset('/') }}dailysharkFiles/chopper/gallery_2.html" alt="photo">
                </picture>
            </div>
            <div class="photo">
                <picture>
                    <source srcset="{{ asset('/') }}dailysharkFiles/chopper/gallery_3.png" type="image/webp">
                    <img loading="lazy" class="photo__img" src="{{ asset('/') }}dailysharkFiles/chopper/gallery_3.html" alt="photo">
                </picture>
            </div>
            <div class="photo">
                <picture>
                    <source srcset="{{ asset('/') }}dailysharkFiles/chopper/gallery_4.png" type="image/webp">
                    <img loading="lazy" class="photo__img" src="{{ asset('/') }}dailysharkFiles/chopper/gallery_4.html" alt="photo">
                </picture>
            </div>
            <div class="photo">
                <picture>
                    <source srcset="{{ asset('/') }}dailysharkFiles/chopper/gallery_5.png" type="image/webp">
                    <img loading="lazy" class="photo__img" src="{{ asset('/') }}dailysharkFiles/chopper/gallery_5.html" alt="photo">
                </picture>
            </div>
        </div>
    </div>
</section>
<section class="process block">
    <div class="container">
        <h2 class="process__title title">PROCES GOTOWANIA NIE BĘDZIE TAKI SAM!</h2>
        <div class="process__content">
            <div class="process__col">
                <div class="process__wrap-text">
                    <p class="process__text">PRZED</p>
                    <p class="process__text">PO</p>
                </div>
                <div class="process__wrap-info">
                    <div class="process-item process-item--bad">
                        <picture>
                            <source srcset="{{ asset('/') }}dailysharkFiles/chopper/process_1.png" type="image/webp">
                            <img loading="lazy" class="process-item__photo" src="{{ asset('/') }}dailysharkFiles/chopper/process_1.html" alt="process">
                        </picture>
                        <div class="process-item__ttl">
                            <p class="process-item__text">Krojenie produktów wymaga czasu i wysiłku</p>
                        </div>
                    </div>
                    <div class="process-item process-item--good">
                        <picture>
                            <source srcset="{{ asset('/') }}dailysharkFiles/chopper/process_2.png" type="image/webp">
                            <img loading="lazy" class="process-item__photo" src="{{ asset('/') }}dailysharkFiles/chopper/process_2.html" alt="process">
                        </picture>
                        <div class="process-item__ttl">
                            <p class="process-item__text">Od grubych kawałkówdo puree w kilkasekund</p>
                        </div>
                    </div>
                </div>
                <div class="process__wrap-info">
                    <div class="process-item process-item--bad">
                        <picture>
                            <source srcset="{{ asset('/') }}dailysharkFiles/chopper/process_3.png" type="image/webp">
                            <img loading="lazy" class="process-item__photo" src="{{ asset('/') }}dailysharkFiles/chopper/process_3.html" alt="process">
                        </picture>
                        <div class="process-item__ttl">
                            <p class="process-item__text">Istnieje ryzyko zranienia podczas używania</p>
                        </div>
                    </div>
                    <div class="process-item process-item--good">
                        <picture>
                            <source srcset="{{ asset('/') }}dailysharkFiles/chopper/process_4.png" type="image/webp">
                            <img loading="lazy" class="process-item__photo" src="{{ asset('/') }}dailysharkFiles/chopper/process_4.html" alt="process">
                        </picture>
                        <div class="process-item__ttl">
                            <p class="process-item__text">Nie włączy się, dopóki pokrywa nie zostanie zamknięta
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="process__col">
                <div class="process__wrap-text">
                    <p class="process__text">PRZED</p>
                    <p class="process__text">PO</p>
                </div>
                <div class="process__wrap-info">
                    <div class="process-item process-item--bad">
                        <picture>
                            <source srcset="{{ asset('/') }}dailysharkFiles/chopper/process_5.png" type="image/webp">
                            <img loading="lazy" class="process-item__photo" src="{{ asset('/') }}dailysharkFiles/chopper/process_5.html" alt="process">
                        </picture>
                        <div class="process-item__ttl">
                            <p class="process-item__text">Skomplikowany system sterowania</p>
                        </div>
                    </div>
                    <div class="process-item process-item--good">
                        <picture>
                            <source srcset="{{ asset('/') }}dailysharkFiles/chopper/process_6.png" type="image/webp">
                            <img loading="lazy" class="process-item__photo" src="{{ asset('/') }}dailysharkFiles/chopper/process_6.html" alt="process">
                        </picture>
                        <div class="process-item__ttl">
                            <p class="process-item__text">Włączanie i sterowanie za pomocą jednego przycisku</p>
                        </div>
                    </div>
                </div>
                <div class="process__wrap-info">
                    <div class="process-item process-item--bad">
                        <picture>
                            <source srcset="{{ asset('/') }}dailysharkFiles/chopper/process_7.png" type="image/webp">
                            <img loading="lazy" class="process-item__photo" src="{{ asset('/') }}dailysharkFiles/chopper/process_7.html" alt="process">
                        </picture>
                        <div class="process-item__ttl">
                            <p class="process-item__text">Wiele części, które są trudne do utrzymania w czystości</p>
                        </div>
                    </div>
                    <div class="process-item process-item--good">
                        <picture>
                            <source srcset="{{ asset('/') }}dailysharkFiles/chopper/process_8.png" type="image/webp">
                            <img loading="lazy" class="process-item__photo" src="{{ asset('/') }}dailysharkFiles/chopper/process_8.html" alt="process">
                        </picture>
                        <div class="process-item__ttl">
                            <p class="process-item__text">Wystarczy spłukać kielich i noże</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="process__btn btn btn--red" href="#form">Wyślij wniosek</a>
        <p class="process__label">W cenie promocyjnej pozostało <span class="lastpack">21</span> sztuk</p>
    </div>
</section>
<section class="characteristics block">
    <div class="container">
        <div class="characteristics__top">
            <h2 class="characteristics__title title">CHARAKTERYSTYKA</h2>
            <ul class="characteristics__list list-c">
                <li class="list-c__item">Materiał urządzenia: tworzywo sztuczne</li>
                <li class="list-c__item">Materiał ostrza: stal nierdzewna klasy 420</li>
                <li class="list-c__item">Moc: 300 W</li>
                <li class="list-c__item">Prędkość: 3600 rpm</li>
                <li class="list-c__item">Pojemność kielicha: 1,8 l</li>
                <li class="list-c__item">Wysokość: 23 cm</li>
                <li class="list-c__item">Długość przewodu zasilającego: 0,9 m</li>
            </ul>
            <div class="characteristics__wrap">
                <img loading="lazy" src="{{ asset('/') }}dailysharkFiles/chopper/characteristics__icon.png" alt="icon">
                <p class="characteristics__text">Można myć w zmywarce</p>
            </div>
            <picture>
                <source media="(max-width: 479px)" srcset="{{ asset('/') }}dailysharkFiles/chopper/product-mob.png" type="image/webp">
                <source media="(max-width: 479px)" srcset="{{ asset('/') }}dailysharkFiles/chopper/product-mob.png">
                <source srcset="{{ asset('/') }}dailysharkFiles/chopper/product.png" type="image/webp">
                <img loading="lazy" class="characteristics__prod" src="{{ asset('/') }}dailysharkFiles/chopper/product.png" alt="product">
            </picture>
        </div>
        <div class="characteristics__bottom">
            <h2 class="characteristics__title title">KOMPLETOWANIE</h2>
            <div class="characteristics__set">
                <div class="element">
                    <picture>
                        <source srcset="{{ asset('/') }}dailysharkFiles/chopper/element_1.png" type="image/webp">
                        <img loading="lazy" class="element__img" src="{{ asset('/') }}dailysharkFiles/chopper/element_1.html" alt="element">
                    </picture>
                    <div class="element__ttl">
                        <p class="element__text">SIEKACZ</p>
                    </div>
                </div>
                <div class="element">
                    <picture>
                        <source srcset="{{ asset('/') }}dailysharkFiles/chopper/element_2.png" type="image/webp">
                        <img loading="lazy" class="element__img" src="{{ asset('/') }}dailysharkFiles/chopper/element_2.html" alt="element">
                    </picture>
                    <div class="element__ttl">
                        <p class="element__text">POJEDYNCZY NÓŻ</p>
                    </div>
                </div>
                <div class="element">
                    <picture>
                        <source srcset="{{ asset('/') }}dailysharkFiles/chopper/element_3.png" type="image/webp">
                        <img loading="lazy" class="element__img" src="{{ asset('/') }}dailysharkFiles/chopper/element_3.html" alt="element">
                    </picture>
                    <div class="element__ttl">
                        <p class="element__text">PODWÓJNY NÓŻ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="comments block">
    <div class="container">
        <h2 class="comments__title title">O NASZYM PRODUKCIE W SIECIACH SPOŁECZNOŚCIOWYCH</h2>
        <div class="comments__wrap">
            <div class="comment">
                <img loading="lazy" class="comment__img" src="{{ asset('/') }}dailysharkFiles/chopper/comment_1.png" alt="photo">
                <div class="comment__desc">
                    <div class="comment__content">
                        <p class="comment__text"><span class="comment__name">Anna Potapiuk</span> Dobry siekacz. Szybko
                            miele. Jestem zadowolona!
                        </p>
                        <div class="comment__likes likes">
                            <div class="likes__wrap"><img loading="lazy" class="likes__img" src="{{ asset('/') }}dailysharkFiles/chopper/like1.png"
                                                          alt="like"><img loading="lazy" class="likes__img"
                                                                          src="{{ asset('/') }}dailysharkFiles/chopper/like2.png" alt="like"></div>
                            <span class="likes__count">7</span>
                        </div>
                    </div>
                    <div class="comment__bottom"><span class="comment__label">Lubi to</span><span
                            class="comment__label">Odpowiedź</span><span class="comment__day">4 dni</span></div>
                </div>
            </div>
            <div class="comment">
                <img loading="lazy" class="comment__img" src="{{ asset('/') }}dailysharkFiles/chopper/comment_2.png" alt="photo">
                <div class="comment__desc">
                    <div class="comment__content">
                        <p class="comment__text"><span class="comment__name">Mariola Duńska</span> Zepsuł się blender.
                            Przyjaciółka doradziła mi kupić Multi Jack. Naprawdę działa jak błyskawica. Miele wszystko,
                            mięso, warzywa, a nawet lód. Teraz tylko tak gotuję puree dla
                            swego dzieciaka!
                        </p>
                        <div class="comment__likes likes">
                            <div class="likes__wrap"><img loading="lazy" class="likes__img" src="{{ asset('/') }}dailysharkFiles/chopper/like1.png"
                                                          alt="like"><img loading="lazy" class="likes__img"
                                                                          src="{{ asset('/') }}dailysharkFiles/chopper/like2.png" alt="like"></div>
                            <span class="likes__count">3</span>
                        </div>
                    </div>
                    <div class="comment__bottom"><span class="comment__label">Lubi to</span><span
                            class="comment__label">Odpowiedź</span><span class="comment__day">2 dni</span></div>
                </div>
            </div>
            <div class="comment">
                <img loading="lazy" class="comment__img" src="{{ asset('/') }}dailysharkFiles/chopper/comment_3.png" alt="photo">
                <div class="comment__desc">
                    <div class="comment__content">
                        <p class="comment__text"><span class="comment__name">Lucyna Czerwińska</span> Spodobał mi się
                            ten siekacz. Jest uniwersalny. Jestem bardzo zadowolona z zakupu i obsługi. Dziękuję!
                        </p>
                        <div class="comment__likes likes">
                            <div class="likes__wrap"><img loading="lazy" class="likes__img" src="{{ asset('/') }}dailysharkFiles/chopper/like1.png"
                                                          alt="like"><img loading="lazy" class="likes__img"
                                                                          src="{{ asset('/') }}dailysharkFiles/chopper/like2.png" alt="like"></div>
                            <span class="likes__count">10</span>
                        </div>
                    </div>
                    <div class="comment__bottom"><span class="comment__label">Lubi to</span><span
                            class="comment__label">Odpowiedź</span><span class="comment__day">2 dni</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order block">
    <div class="container">
        <div class="order__wrap">
            <h2 class="order__title title">JAK ZAMÓWIĆ <span>SIEKACZ ELEKTRYCZNY MULTI JACK</span></h2>
            <div class="order__list">
                <div class="order-item">
                    <div class="order-item__wrap"><img loading="lazy" class="order-item__img" src="{{ asset('/') }}dailysharkFiles/chopper/order_1.png"
                                                       alt="product">
                    </div>
                    <p class="order-item__text">Złóż wniosek na stronie</p>
                </div>
                <div class="order-item">
                    <div class="order-item__wrap"><img loading="lazy" class="order-item__img" src="{{ asset('/') }}dailysharkFiles/chopper/order_2.png"
                                                       alt="product">
                    </div>
                    <p class="order-item__text">Poczekaj na dostawę</p>
                </div>
                <div class="order-item">
                    <div class="order-item__wrap"><img loading="lazy" class="order-item__img" src="{{ asset('/') }}dailysharkFiles/chopper/order_3.png"
                                                       alt="product">
                    </div>
                    <p class="order-item__text">Zapłać na poczcie lub kurierowi</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="header header--last block">
    <div class="container">
        <div class="header__content">
            <div class="header__left">
                <h1 class="header__title title">Multi Jack</h1>
                <p class="header__desc">SIEKACZ ELEKTRYCZNY</p>
                <div class="header__wrap-video">
                    <video autoplay loop muted playsinline="" poster="{{ asset('/') }}dailysharkFiles/chopper/header_video.jpg">
                        <source src="{{ asset('/') }}dailysharkFiles/chopper/header_video.webm" type="video/webm">
                        <source src="{{ asset('/') }}dailysharkFiles/chopper/header_video.mp4" type="video/mp4">
                    </video>
                    <ul class="header__list list-pr">
                        <li class="list-pr__item">KROI I MIAŻDŻY</li>
                        <li class="list-pr__item">MIELE</li>
                        <li class="list-pr__item">ROBI PUREE</li>
                    </ul>
                </div>
                <div class="header__wrap-photo">
                    <div class="header__sale sale">
                        <p class="sale__text">ZNIŻKA</p>
                        <p class="sale__percent">70%</p>
                    </div>
                    <picture>
                        <source media="(max-width: 1023px)" srcset="{{ asset('/') }}dailysharkFiles/chopper/prod_mob.png" type="image/webp">
                        <source media="(max-width: 1023px)" srcset="{{ asset('/') }}dailysharkFiles/chopper/prod_mob.png">
                        <source srcset="{{ asset('/') }}dailysharkFiles/chopper/header_prod.png" type="image/webp">
                        <img loading="lazy" src="{{ asset('/') }}dailysharkFiles/chopper/header_prod.png" alt="Multi Jack">
                    </picture>
                </div>
            </div>
            <div class="header__right">
                <div class="header__price price">
                    <div class="price__content price__content--old">
                        <p class="price__text">Zwykła cena:</p>
                        <div class="price__wrap">
                            <p class="price__num x_price_previous">650</p>
                            <p class="price__currency x_currency">zł</p>
                        </div>
                    </div>
                    <div class="price__content price__content--new">
                        <p class="price__text">Cena dzisiaj: </p>
                        <div class="price__wrap">
                            <p class="price__num x_price_current">195</p>
                            <p class="price__currency x_currency">zł</p>
                        </div>
                    </div>
                </div>
                <div class="header__form" id="form">
                    <form class="form x_order_form" action="#" method="post">
                        <p class="form__ttl">Wybierz ilość</p>
                        <div class="form__tabs">
                            <div class="tab">
                                <p class="tab__btn active js-tab">1 szt.</p>
                                <div class="tab__wrap">
                                    <p class="tab__price x_price_current">195</p>
                                    <p class="tab__currency x_currency">zł</p>
                                </div>
                            </div>
                            <div class="tab">
                                <p class="tab__btn js-tab">2 szt.</p>
                                <div class="tab__wrap">
                                    <p class="tab__price">155</p>
                                    <p class="tab__currency">zł</p>
                                    <p class="tab__text">za każdy</p>
                                </div>
                            </div>
                        </div>
                        <div class="form__inputs">
                            <input class="form__input" type="text" name="name" placeholder="Moje imię" required
                                   autocomplete="name">
                            <input class="form__input" autocomplete="tel" name="phone" placeholder="Mój telefon"
                                   required type="tel">
                        </div>
                        <button class="form__btn btn" type="submit">Wyślij wniosek</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $(document).on("click", "a[href^=\"#\"]", function(event) {
            event.preventDefault();
            $("html, body").animate({
                scrollTop: $($.attr(this, "href")).offset().top
            }, 500);
        });
    });
</script>
</body>
</html>
