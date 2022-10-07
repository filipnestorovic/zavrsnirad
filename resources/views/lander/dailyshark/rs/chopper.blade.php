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
@include('components.display_errors')
<section class="header block">
    <div class="container">
        <div class="header__content">
            <div class="header__left">
                <h1 class="header__title title">SUPER SECKO</h1>
                <p class="header__desc">Elektro secko</p>
                <div class="header__wrap-video">
                    <video autoplay loop muted playsinline="" poster="{{ asset('/') }}dailysharkFiles/chopper/header_video.jpg">
                        <source src="{{ asset('/') }}dailysharkFiles/chopper/header_video.webm" type="video/webm">
                        <source src="{{ asset('/') }}dailysharkFiles/chopper/header_video.mp4" type="video/mp4">
                    </video>
                    <ul class="header__list list-pr">
                        <li class="list-pr__item">Seče</li>
                        <li class="list-pr__item">Melje</li>
                        <li class="list-pr__item">Pretvara u pire</li>
                    </ul>
                </div>
                <div class="header__wrap-photo">
                    <div class="header__sale sale">
                        <p class="sale__text">POPUST</p>
                        <p class="sale__percent">40%</p>
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
                        <p class="price__text">Regularna cena:</p>
                        <div class="price__wrap">
                            <p class="price__num x_price_previous">{{ $prices[1]['originalPrice'] }}</p>
                            <p class="price__currency x_currency">{{ $prices[1]['currency'] }}</p>
                        </div>
                    </div>
                    <div class="price__content price__content--new">
                        <p class="price__text">Cena sada:</p>
                        <div class="price__wrap">
                            <p class="price__num x_price_current">{{ $prices[1]['amount'] }}</p>
                            <p class="price__currency x_currency">{{ $prices[1]['currency'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="header__form">
                    <form class="form x_order_form" action="{{$orderRoute}}" method="post">
                        {{csrf_field()}}
                        @include('lander.naturapharm.components.form_hidden_fields')
{{--                        <p class="form__ttl">Wybierz ilość</p>--}}
{{--                        <div class="form__tabs">--}}
{{--                            <div class="tab">--}}
{{--                                <p class="tab__btn active js-tab">1 szt.</p>--}}
{{--                                <div class="tab__wrap">--}}
{{--                                    <p class="tab__price x_price_current">{{ $prices[1]['amount'] }}</p>--}}
{{--                                    <p class="tab__currency x_currency">{{ $prices[1]['currency'] }}</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab">--}}
{{--                                <p class="tab__btn js-tab">2 szt.</p>--}}
{{--                                <div class="tab__wrap">--}}
{{--                                    <p class="tab__price">155</p>--}}
{{--                                    <p class="tab__currency">{{ $prices[1]['currency'] }}</p>--}}
{{--                                    <p class="tab__text">za każdy</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="form__inputs">
                            <input class="form__input" type="text" name="name" placeholder="Ime i prezime" required>
                            <input class="form__input" name="phone" placeholder="Telefon" required type="tel">
                            <input class="form__input" type="text" name="shipping_address" placeholder="Adresa" required>
                            <input class="form__input" type="text" name="shipping_city" placeholder="Grad" required>
                        </div>
                        <button class="form__btn btn" type="submit">Poručite sada</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="advantages block">
    <div class="container">
        <h2 class="advantages__title title">ZAMENIĆE 6 KUĆNIH APARATA</h2>
        <div class="advantages__list">
            <div class="item">
                <p class="item__text">Mikser</p>
            </div>
            <div class="item">
                <p class="item__text">Mikser</p>
            </div>
            <div class="item">
                <p class="item__text">Secko za povrće</p>
            </div>
            <div class="item">
                <p class="item__text">Blender</p>
            </div>
            <div class="item">
                <p class="item__text">Mlin za kafu</p>
            </div>
            <div class="item">
                <p class="item__text">Šejker</p>
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
                        <p class="advantage__text">Univerzalni kuhinjski aparat</p>
                    </div>
                </div>
                <div class="advantage">
                    <picture>
                        <source srcset="{{ asset('/') }}dailysharkFiles/chopper/advantage_2.png" type="image/webp">
                        <img loading="lazy" src="{{ asset('/') }}dailysharkFiles/chopper/advantage_2.html" alt="advantage">
                    </picture>
                    <div class="advantage__ttl">
                        <p class="advantage__text">Oštri noževi + moćni motor</p>
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
                        <p class="advantage__text">Samo jedno dugme</p>
                    </div>
                </div>
                <div class="advantage">
                    <picture>
                        <source srcset="{{ asset('/') }}dailysharkFiles/chopper/advantage_4.png" type="image/webp">
                        <img loading="lazy" src="{{ asset('/') }}dailysharkFiles/chopper/advantage_4.html" alt="advantage">
                    </picture>
                    <div class="advantage__ttl">
                        <p class="advantage__text">Lako se rastavlja i čisti</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="information block">
    <div class="container">
        <h2 class="information__title title">ZA SAMO 5 SEKUNDI!</h2>
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
                    <p class="product__text">Meso</p>
                </div>
            </div>
            <div class="product">
                <div class="product__content">
                    <img loading="lazy" class="product__img" src="{{ asset('/') }}dailysharkFiles/chopper/product_2.png"
                         alt="product">
                    <p class="product__text">Povrće</p>
                </div>
            </div>
            <div class="product">
                <div class="product__content">
                    <img loading="lazy" class="product__img" src="{{ asset('/') }}dailysharkFiles/chopper/product_3.png"
                         alt="product">
                    <p class="product__text">Voće</p>
                </div>
            </div>
            <div class="product">
                <div class="product__content">
                    <img loading="lazy" class="product__img" src="{{ asset('/') }}dailysharkFiles/chopper/product_4.png"
                         alt="product">
                    <p class="product__text">Orašasti plodovi</p>
                </div>
            </div>
            <div class="product">
                <div class="product__content">
                    <img loading="lazy" class="product__img" src="{{ asset('/') }}dailysharkFiles/chopper/product_5.png"
                         alt="product">
                    <p class="product__text">Kafa</p>
                </div>
            </div>
            <div class="product">
                <div class="product__content">
                    <img loading="lazy" class="product__img" src="{{ asset('/') }}dailysharkFiles/chopper/product_6.png"
                         alt="product">
                    <p class="product__text">Led</p>
                </div>
            </div>
        </div>
        <h3 class="information__ttl">Sav posao obavlja brzo i efikasno</h3>
        <div class="information__work">
            <div class="work-item">
                <video autoplay loop muted playsinline="" poster="{{ asset('/') }}dailysharkFiles/chopper/work_1_poster.jpg">
                    <source src="{{ asset('/') }}dailysharkFiles/chopper/work_1.webm" type="video/webm">
                    <source src="{{ asset('/') }}dailysharkFiles/chopper/work_1.html" type="video/mp4">
                </video>
                <div class="work-item__ttl">
                    <p class="work-item__text">Seče</p>
                </div>
            </div>
            <div class="work-item">
                <video autoplay loop muted playsinline="" poster="{{ asset('/') }}dailysharkFiles/chopper/work_2_poster.jpg">
                    <source src="{{ asset('/') }}dailysharkFiles/chopper/work_2.webm" type="video/webm">
                    <source src="{{ asset('/') }}dailysharkFiles/chopper/work_2.html" type="video/mp4">
                </video>
                <div class="work-item__ttl">
                    <p class="work-item__text">Melje</p>
                </div>
            </div>
            <div class="work-item">
                <video autoplay loop muted playsinline="" poster="{{ asset('/') }}dailysharkFiles/chopper/work_3_poster.jpg">
                    <source src="{{ asset('/') }}dailysharkFiles/chopper/work_3.webm" type="video/webm">
                    <source src="{{ asset('/') }}dailysharkFiles/chopper/work_3.html" type="video/mp4">
                </video>
                <div class="work-item__ttl">
                    <p class="work-item__text">Pretvara u pire</p>
                </div>
            </div>
        </div>
        <a class="information__btn btn btn--red" href="#form">Poruči odmah</a>
        <p class="information__text">Ostalo je još samo <span class="lastpack">21</span> komada po promotivnoj ceni</p>
    </div>
</section>
<section class="gallery block">
    <div class="container">
        <h2 class="gallery__title title">NAPRAVLJENO DA VAM UŠTEDI VREME</h2>
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
        <h2 class="process__title title">KUVANJE VIŠE NIKAD NEĆE BITI ISTO</h2>
        <div class="process__content">
            <div class="process__col">
                <div class="process__wrap-text">
                    <p class="process__text">PRE</p>
                    <p class="process__text">POSLE</p>
                </div>
                <div class="process__wrap-info">
                    <div class="process-item process-item--bad">
                        <picture>
                            <source srcset="{{ asset('/') }}dailysharkFiles/chopper/process_1.png" type="image/webp">
                            <img loading="lazy" class="process-item__photo" src="{{ asset('/') }}dailysharkFiles/chopper/process_1.html" alt="process">
                        </picture>
                        <div class="process-item__ttl">
                            <p class="process-item__text">Bespotrebno trošenje vremena na seckanje</p>
                        </div>
                    </div>
                    <div class="process-item process-item--good">
                        <picture>
                            <source srcset="{{ asset('/') }}dailysharkFiles/chopper/process_2.png" type="image/webp">
                            <img loading="lazy" class="process-item__photo" src="{{ asset('/') }}dailysharkFiles/chopper/process_2.html" alt="process">
                        </picture>
                        <div class="process-item__ttl">
                            <p class="process-item__text">Od starta do pirea za samo nekoliko sekundi</p>
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
                            <p class="process-item__text">Postoji opasnost od povrede</p>
                        </div>
                    </div>
                    <div class="process-item process-item--good">
                        <picture>
                            <source srcset="{{ asset('/') }}dailysharkFiles/chopper/process_4.png" type="image/webp">
                            <img loading="lazy" class="process-item__photo" src="{{ asset('/') }}dailysharkFiles/chopper/process_4.html" alt="process">
                        </picture>
                        <div class="process-item__ttl">
                            <p class="process-item__text">Ima sigurnosni poklopac</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="process__col">
                <div class="process__wrap-text">
                    <p class="process__text">PRE</p>
                    <p class="process__text">POSLE</p>
                </div>
                <div class="process__wrap-info">
                    <div class="process-item process-item--bad">
                        <picture>
                            <source srcset="{{ asset('/') }}dailysharkFiles/chopper/process_5.png" type="image/webp">
                            <img loading="lazy" class="process-item__photo" src="{{ asset('/') }}dailysharkFiles/chopper/process_5.html" alt="process">
                        </picture>
                        <div class="process-item__ttl">
                            <p class="process-item__text">Bespotrebno komplikovani aparati</p>
                        </div>
                    </div>
                    <div class="process-item process-item--good">
                        <picture>
                            <source srcset="{{ asset('/') }}dailysharkFiles/chopper/process_6.png" type="image/webp">
                            <img loading="lazy" class="process-item__photo" src="{{ asset('/') }}dailysharkFiles/chopper/process_6.html" alt="process">
                        </picture>
                        <div class="process-item__ttl">
                            <p class="process-item__text">Upravljajte sa samo jednim dugmetom</p>
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
                            <p class="process-item__text">Gomila delova koje je nemoguće čistiti</p>
                        </div>
                    </div>
                    <div class="process-item process-item--good">
                        <picture>
                            <source srcset="{{ asset('/') }}dailysharkFiles/chopper/process_8.png" type="image/webp">
                            <img loading="lazy" class="process-item__photo" src="{{ asset('/') }}dailysharkFiles/chopper/process_8.html" alt="process">
                        </picture>
                        <div class="process-item__ttl">
                            <p class="process-item__text">Dovoljno je isprati šolju i noževe</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="process__btn btn btn--red" href="#form">Poruči sada</a>
        <p class="process__label">Ostalo je još samo <span class="lastpack">21</span> komada po promotivnoj ceni</p>
    </div>
</section>
<section class="characteristics block">
    <div class="container">
        <div class="characteristics__top">
            <h2 class="characteristics__title title">KARAKTERISTIKE</h2>
            <ul class="characteristics__list list-c">
                <li class="list-c__item">Materijal aparata: Kvalitetna plastika</li>
                <li class="list-c__item">Materijal noževa: Vrhunski nerđajući čelik klase 420</li>
                <li class="list-c__item">Snaga: 300W</li>
                <li class="list-c__item">Obrtaji: 3600 RPM</li>
                <li class="list-c__item">Zapremina: 1,8L</li>
                <li class="list-c__item">Visina: 23cm</li>
                <li class="list-c__item">Dužina kabla: 0,9m</li>
            </ul>
            <div class="characteristics__wrap">
                <img loading="lazy" src="{{ asset('/') }}dailysharkFiles/chopper/characteristics__icon.png" alt="icon">
                <p class="characteristics__text">Slobodno perite i u mašini za suđe</p>
            </div>
            <picture>
                <source media="(max-width: 479px)" srcset="{{ asset('/') }}dailysharkFiles/chopper/product-mob.png" type="image/webp">
                <source media="(max-width: 479px)" srcset="{{ asset('/') }}dailysharkFiles/chopper/product-mob.png">
                <source srcset="{{ asset('/') }}dailysharkFiles/chopper/product.png" type="image/webp">
                <img loading="lazy" class="characteristics__prod" src="{{ asset('/') }}dailysharkFiles/chopper/product.png" alt="product">
            </picture>
        </div>
        <div class="characteristics__bottom">
            <h2 class="characteristics__title title">Komplet sadrži:</h2>
            <div class="characteristics__set">
                <div class="element">
                    <picture>
                        <source srcset="{{ asset('/') }}dailysharkFiles/chopper/element_1.png" type="image/webp">
                        <img loading="lazy" class="element__img" src="{{ asset('/') }}dailysharkFiles/chopper/element_1.html" alt="element">
                    </picture>
                    <div class="element__ttl">
                        <p class="element__text">Aparat</p>
                    </div>
                </div>
                <div class="element">
                    <picture>
                        <source srcset="{{ asset('/') }}dailysharkFiles/chopper/element_2.png" type="image/webp">
                        <img loading="lazy" class="element__img" src="{{ asset('/') }}dailysharkFiles/chopper/element_2.html" alt="element">
                    </picture>
                    <div class="element__ttl">
                        <p class="element__text">Pojedinačni nož</p>
                    </div>
                </div>
                <div class="element">
                    <picture>
                        <source srcset="{{ asset('/') }}dailysharkFiles/chopper/element_3.png" type="image/webp">
                        <img loading="lazy" class="element__img" src="{{ asset('/') }}dailysharkFiles/chopper/element_3.html" alt="element">
                    </picture>
                    <div class="element__ttl">
                        <p class="element__text">Dupli nož</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="comments block">
    <div class="container">
        <h2 class="comments__title title">Šta su rekli o našem proizvodu:</h2>
        <div class="comments__wrap">
            <div class="comment">
                <img loading="lazy" class="comment__img" src="{{ asset('/') }}dailysharkFiles/chopper/comment_1.png" alt="photo">
                <div class="comment__desc">
                    <div class="comment__content">
                        <p class="comment__text"><span class="comment__name">Milica Mitrović</span>
                            Odličan secko, vrlo brzo melje! Presrećna sam!!!
                        </p>
                    </div>
                </div>
            </div>
            <div class="comment">
                <img loading="lazy" class="comment__img" src="{{ asset('/') }}dailysharkFiles/chopper/comment_2.png" alt="photo">
                <div class="comment__desc">
                    <div class="comment__content">
                        <p class="comment__text"><span class="comment__name">Dušanka Palikuća</span>
                            Kad mi se pokvario blender koji važi za vrlo kvalitetan brend dobila sam savet od prijatelja da kupim SUPER SECKO. Nisam očekivala da ovako dobro radi, brz je kao munja. Melje meso, povrće, čak i led. Sad je ovo jedini način kako pripremam pire za svoje dete!
                        </p>
                    </div>
                </div>
            </div>
            <div class="comment">
                <img loading="lazy" class="comment__img" src="{{ asset('/') }}dailysharkFiles/chopper/comment_3.png" alt="photo">
                <div class="comment__desc">
                    <div class="comment__content">
                        <p class="comment__text"><span class="comment__name">Tamara Žunić</span>
                            Baš mi se sviđa ovaj secko. Svaki dan uštedim mnogo vremena dok spremam. Prezadovoljna sam kupovinom, hvala ekipi!!!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order block">
    <div class="container">
        <div class="order__wrap">
            <h2 class="order__title title">KAKO NARUČITI <span>ELEKTRIČNI BLENDER SUPER SECKO</span></h2>
            <div class="order__list">
                <div class="order-item">
                    <div class="order-item__wrap"><img loading="lazy" class="order-item__img" src="{{ asset('/') }}dailysharkFiles/chopper/order_1.png"
                                                       alt="product">
                    </div>
                    <p class="order-item__text">Ostavite podatke za dostavu</p>
                </div>
                <div class="order-item">
                    <div class="order-item__wrap"><img loading="lazy" class="order-item__img" src="{{ asset('/') }}dailysharkFiles/chopper/order_2.png"
                                                       alt="product">
                    </div>
                    <p class="order-item__text">Čekajte u udobnosti svoga doma</p>
                </div>
                <div class="order-item">
                    <div class="order-item__wrap"><img loading="lazy" class="order-item__img" src="{{ asset('/') }}dailysharkFiles/chopper/order_3.png"
                                                       alt="product">
                    </div>
                    <p class="order-item__text">Platite kuriru prilikom dostave</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="header header--last block">
    <div class="container">
        <div class="header__content">
            <div class="header__left">
                <h1 class="header__title title">SUPER SECKO</h1>
                <p class="header__desc">Elektro secko</p>
                <div class="header__wrap-video">
                    <video autoplay loop muted playsinline="" poster="{{ asset('/') }}dailysharkFiles/chopper/header_video.jpg">
                        <source src="{{ asset('/') }}dailysharkFiles/chopper/header_video.webm" type="video/webm">
                        <source src="{{ asset('/') }}dailysharkFiles/chopper/header_video.mp4" type="video/mp4">
                    </video>
                    <ul class="header__list list-pr">
                        <li class="list-pr__item">Seče</li>
                        <li class="list-pr__item">Melje</li>
                        <li class="list-pr__item">Pretvara u pire</li>
                    </ul>
                </div>
                <div class="header__wrap-photo">
                    <div class="header__sale sale">
                        <p class="sale__text">POPUST</p>
                        <p class="sale__percent">40%</p>
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
                        <p class="price__text">Regularna cena:</p>
                        <div class="price__wrap">
                            <p class="price__num x_price_previous">{{ $prices[1]['originalPrice'] }}</p>
                            <p class="price__currency x_currency">{{ $prices[1]['currency'] }}</p>
                        </div>
                    </div>
                    <div class="price__content price__content--new">
                        <p class="price__text">Cena sada: </p>
                        <div class="price__wrap">
                            <p class="price__num x_price_current">{{ $prices[1]['amount'] }}</p>
                            <p class="price__currency x_currency">{{ $prices[1]['currency'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="header__form" id="form">
                    <form class="form x_order_form" action="{{$orderRoute}}" method="post">
                        {{csrf_field()}}
                        @include('lander.naturapharm.components.form_hidden_fields')
{{--                        <p class="form__ttl">Wybierz ilość</p>--}}
{{--                        <div class="form__tabs">--}}
{{--                            <div class="tab">--}}
{{--                                <p class="tab__btn active js-tab">1 szt.</p>--}}
{{--                                <div class="tab__wrap">--}}
{{--                                    <p class="tab__price x_price_current">{{ $prices[1]['amount'] }}</p>--}}
{{--                                    <p class="tab__currency x_currency">{{ $prices[1]['currency'] }}</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab">--}}
{{--                                <p class="tab__btn js-tab">2 szt.</p>--}}
{{--                                <div class="tab__wrap">--}}
{{--                                    <p class="tab__price">155</p>--}}
{{--                                    <p class="tab__currency">{{ $prices[1]['currency'] }}</p>--}}
{{--                                    <p class="tab__text">za każdy</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="form__inputs">
                            <input class="form__input" type="text" name="name" placeholder="Ime i prezime" required>
                            <input class="form__input" name="phone" placeholder="Telefon" required type="tel">
                            <input class="form__input" type="text" name="shipping_address" placeholder="Adresa" required>
                            <input class="form__input" type="text" name="shipping_city" placeholder="Grad" required>
                        </div>
                        <button class="form__btn btn" type="submit">Poručite sada</button>
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
@include('components.pixel_footer')
</body>
</html>
