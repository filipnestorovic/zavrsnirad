<!DOCTYPE html>
<html >
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/prowax2/main.css">
    <style>
        @font-face {
            font-family: 'Gotham Pro';
            src: url("{{ asset('/') }}fonts/GothamPro.eot");
            src: url("{{ asset('/') }}fonts/GothamPro.eot") format("embedded-opentype"), url("{{ asset('/') }}fonts/GothamPro.woff") format("woff"), url("{{ asset('/') }}fonts/GothamPro.ttf") format("truetype"), url("{{ asset('/') }}fonts/GothamPro.svg") format("svg");
            font-weight: normal;
            font-style: normal
        }
        @font-face {
            font-family: 'Gotham Pro Bold';
            src: url("{{ asset('/') }}fonts/GothamPro-Bold.eot");
            src: url("{{ asset('/') }}fonts/GothamPro-Bold.eot") format("embedded-opentype"), url("{{ asset('/') }}fonts/GothamPro-Bold.woff") format("woff"), url("{{ asset('/') }}fonts/GothamPro-Bold.ttf") format("truetype"), url("{{ asset('/') }}fonts/GothamPro-Bold.svg") format("svg");
            font-weight: bold;
            font-style: normal
        }
    </style>
</head>
<body>
@include('components.display_errors')
<section class="header">
    <div class="header__menu menu">
        <div class="container">
            <div class="menu__logo col-3">
                <div class="logo__text">Pro-Wax 100</div>
            </div>
            <div class="menu__list-wrapper col-9">
                <div class="menu__mobile hide-l"></div>
                <ul id="menu" class="menu__list hide-m hide-s">
                    <li><a href="#scroll-descr" class="menu__item">ОПИСАНИЕ</a></li>
                    <li class="hide-s hide-m">
                        <div class="menu__item--dot"></div>
                    </li>
                    <li><a href="#scroll-specs" class="menu__item">ХАРАКТЕРИСТИКИ</a></li>
                    <li class="hide-s hide-m">
                        <div class="menu__item--dot"></div>
                    </li>
                    <li><a href="#scroll-benefits" class="menu__item">ПРЕИМУЩЕСТВА</a></li>
                    <li class="hide-s hide-m">
                        <div class="menu__item--dot"></div>
                    </li>
                    <li><a href="#scroll-reviews" class="menu__item">ДОСТАВКА</a></li>
                    <li class="hide-s hide-m">
                        <div class="menu__item--dot"></div>
                    </li>
                    <li><a href="#scroll-buy" class="menu__item">ОТЗЫВЫ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="header__preview preview container">
        <div class="preview__photo col-6"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd.jpeg"></div>
        <div class="preview__info info col-6">
            <div class="info__headline">Воскоплав баночный</div>
            <h1 class="info__title">Pro-Wax 100</h1>
            <div class="info__subline">для тех, кто ценит практичные вещи</div>
            <div class="info__price price">
                <div class="price__list">
                    <div class="price__wrong">
                        {{ $prices[1]['originalPrice'] }} RSD
                    </div>
                    <div class="price__new">
                        {{ $prices[1]['amount'] }} RSD
                    </div>
                </div>
                <div class="price__discount">-40%</div>
            </div>
            <a href="#scroll-buyer" class="preview__button button">Poručite sada</a>
        </div>
    </div>
</section>
<div class="clear"></div>
<section id="scroll-descr" class="triggers-wrapper">
    <div class="triggers container">
        <div class="trigger col-6">
            <div class="trigger__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon1.png"></div>
            <div class="trigger__descr">МЫ ЗАБОТИМСЯ О ВАС И ПРЕДЛАГАЕМ ТОЛЬКО КАЧЕСТВЕННЫЙ ТОВАР</div>
        </div>
        <div class="trigger col-5">
            <div class="trigger__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon2.png"></div>
            <div class="trigger__descr">НЕ БЫЛО НИ ОДНОГО ВОЗВРАТА ТОВАРА</div>
        </div>
        <div class="trigger col-6">
            <div class="trigger__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon3.png"></div>
            <div class="trigger__descr">ЦЕНЫ НИЖЕ РЫНОЧНЫХ ЗА СЧЕТ ПРЯМЫХ ПОСТАВОК ОТ ПРОИЗВОДИТЕЛЯ</div>
        </div>
        <div class="trigger col-6">
            <div class="trigger__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon4.png"></div>
            <div class="trigger__descr">ДОСТАВКА В ЛЮБУЮ ТОЧКУ СНГ ОТ 7 РАБОЧИХ ДНЕЙ</div>
        </div>
    </div>
</section>
<div class="clear"></div>
<section id="scroll-specs" class="specs container">
    <h1 class="heading">Pro-Wax 100</h1>
    <div class="param-list__item">
        <div class="param-list__name">Воскоплав баночный Pro-Wax 100</div>
        <div class="param-list__value">Воскоплав баночный Pro-Wax 100 white - нагреватель для воска в банках или в стаканчике. Небольшой объем банки (450 мл) позволяет успешно использовать его не только профессионалами в салоне, но и применять в домашних условиях. Баночный воскоплав Pro Wax 100 оснащен удобной ручкой терморегулятором для выбора температуры плавления воска от 45 до 105 градусов. При этом аппарат работает как термопот, поддерживая комфортную температуру парафина или воска в течение всей процедуры.</div>
    </div>
    <div class="specs__gallery col-6">
        <div class="product-gallery owl-carousel">
            <div data-hash="photo-one" class="product-gallery__item"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd-1.jpeg"></div>
            <div data-hash="photo-two" class="product-gallery__item"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd-2.jpeg"></div>
            <div data-hash="photo-three" class="product-gallery__item"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd-3.jpeg"></div>
            <div data-hash="photo-four" class="product-gallery__item"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd-4.jpeg"></div>
        </div>
        <div class="product-gallery__image-nav">
            <div class="image-nav__item"><a href="#photo-one" class="image-nav__link"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd-11.jpeg" class="image-nav__img"></a></div>
            <div class="image-nav__item"><a href="#photo-two" class="image-nav__link"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd-22.jpeg" class="image-nav__img"></a></div>
            <div class="image-nav__item"><a href="#photo-three" class="image-nav__link"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd-33.jpeg" class="image-nav__img"></a></div>
            <div class="image-nav__item"><a href="#photo-four" class="image-nav__link"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd-44.jpeg" class="image-nav__img"></a></div>
        </div>
    </div>
    <div class="specs__param-list param-list col-6">
        <div class="container">
            <div class="param-list__row col-3">
                <div class="param-list__item">
                    <div class="param-list__name">Мощность:</div>
                    <div class="param-list__value">100 Вт;</div>
                </div>
                <div class="param-list__item">
                    <div class="param-list__name">Объем емкости:</div>
                    <div class="param-list__value">450 мл;</div>
                </div>
                <div class="param-list__item">
                    <div class="param-list__name">Напряжение:</div>
                    <div class="param-list__value">110/220/240В;</div>
                </div>
                <div class="param-list__item">
                    <div class="param-list__name">Цвет:</div>
                    <div class="param-list__value">белый;</div>
                </div>
            </div>
            <div class="param-list__row col-3">
                <div class="param-list__item">
                    <div class="param-list__name">Количество температурных режимов:</div>
                    <div class="param-list__value">3;</div>
                </div>
                <div class="param-list__item">
                    <div class="param-list__name">Длина сетевого шнура:</div>
                    <div class="param-list__value">1.5 м</div>
                </div>
                <div class="param-list__item">
                    <div class="param-list__name">Вес:</div>
                    <div class="param-list__value">0,39 кг;</div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clear"></div>
<section id="scroll-benefits" class="benefits-wrapper">
    <div class="benefits container">
        <h1 class="heading heading--primary heading--white">Преимущества</h1>
        <div class="benefits__item col-6">
            <div class="benefits__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-guarantee.png"></div>
            <div class="benefits__descr">100% гарантия качества товара</div>
        </div>
        <div class="benefits__item col-6">
            <div class="benefits__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-postpay.png"></div>
            <div class="benefits__descr">Работаем без предоплаты, оплата производится при получении товара на почте</div>
        </div>
        <div class="benefits__item col-6">
            <div class="benefits__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-shipping.png"></div>
            <div class="benefits__descr">Доставка в любую точку СНГ</div>
        </div>
        <div class="benefits__item col-6">
            <div class="benefits__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-delivery.png"></div>
            <div class="benefits__descr">Быстрая доставка заказа (в зависимости от Вашего региона) от 7 рабочих дней</div>
        </div>
        <div class="benefits__item col-6">
            <div class="benefits__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-discounts.png"></div>
            <div class="benefits__descr">Проведение конкурсов и акций</div>
        </div>
        <div class="benefits__item col-6">
            <div class="benefits__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-moneyback.png"></div>
            <div class="benefits__descr">Вы вправе отказаться от товара в течение 14 дней</div>
        </div>
        <div class="benefits__button"><a href="#scroll-buyer" class="button">Poručite sada</a></div>
    </div>
</section>
<div class="clear"></div>
<section id="scroll-reviews" class="steps container">
    <h1 class="heading heading--secondary">КАК МЫ РАБОТАЕМ</h1>
    <div class="steps-img__wrapper container hide-l">
        <div class="steps__item steps__item--one col-3"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-howto1.png"><br>Вы оставляете заявку через форму заказа на сайте</div>
        <div class="steps__item steps__item--two col-3"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-howto2.png"><br>Мы перезваниваем вам для уточнения деталей</div>
        <div class="steps__item steps__item--three col-3"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-howto3.png"><br>Отправляем ваш заказ в пункт назначения</div>
        <div class="steps__item steps__item--four col-3"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-howto4.png"><br>Вы оплачиваете при получении на почте</div>
    </div>
    <div class="steps-img__wrapper steps-img__wrapper--l hide-s hide-m">
        <div class="steps__item steps__item--r steps__item--one">Вы оставляете заявку через форму заказа на сайте</div>
        <div class="steps__item steps__item--r steps__item--two">Мы перезваниваем вам для уточнения деталей</div>
        <div class="steps__item steps__item--r steps__item--three">Отправляем ваш заказ в пункт назначения</div>
        <div class="steps__item steps__item--r steps__item--four">Вы оплачиваете при получении на почте</div>
    </div>
</section>
<div class="clear"></div>
<section id="scroll-buy" class="reviews-wrapper">
    <div class="reviews container">
        <div class="reviews__slider col-6">
            <div class="heading__icon heading__icon--reviews"></div>
            <h1 class="heading heading--white heading--primary heading--sm">ОТЗЫВЫ ПОКУПАТЕЛЕЙ</h1>
            <div class="slider-reviews owl-carousel">
                <div class="review">
                    <div class="review__photo"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/user.jpeg"></div>
                    <div class="review__name">Евгения Молчанова</div>
                    <div class="review__text">Купила домой, очень интересная модель воскоплава. Работает на ура, очень красивый и удобный. Довольна покупкой!!!</div>
                </div>
                <div class="review">
                    <div class="review__photo"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/user1.png"></div>
                    <div class="review__name">Галина Журавлёва</div>
                    <div class="review__text">Отличная модель воскоплава для дома. Муж подарил этот воскоплав на день рождения. Быстро разогревает воск и пасту, хорошо держит температуру. Легкий и компактный. Подарком довольна!</div>
                </div>
                <div class="review">
                    <div class="review__photo"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/user2.png"></div>
                    <div class="review__name">Алина Щербакова</div>
                    <div class="review__text">Воскоплав этот приобрела на этом сайте по акции и нисколько не жалею о покупке. Очень много прочитала о этой модели и решила остановиться именно на нем. Цену дешевле чем на этом сайте не нашла, что и послужило совершить покупку.</div>
                </div>
            </div>
        </div>
        <div class="reviews__photo col-6 hide-s"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd-otzyv.png"></div>
    </div>
</section>
<div class="clear"></div>
<section class="buy container">
    <h2 class="heading__headline">Воскоплав баночный</h2>
    <h1 class="heading heading--secondary heading--has-headline heading--extra">Pro-Wax 100</h1>
    <div class="buy__photo col-6"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd.jpeg"></div>
    <div class="buy__form form col-6">
        <div class="form__price price price--buynow">
            <div class="price__wrong">
                {{ $prices[1]['originalPrice'] }} RSD
            </div>
            <div class="price__discount">-40%</div>
            <div class="price__new">
                {{ $prices[1]['amount'] }} RSD
            </div>
        </div>
        {{--<div class="form__countdown countdown">--}}
            {{--<div class="countdown-descr">До конца акции осталось:</div>--}}
            {{--<div class="cd">--}}
                {{--<div id="cd__tiles" class="cd__tiles"></div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <form action="{{$orderRoute}}" method="post" class="form-controls" id="scroll-buyer">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input type="text" placeholder="Ime i prezime" title="Ime i prezime" required="" class="form-control" name="name"><br>
            <input id="tel" type="tel" placeholder="Telefon" title="Telefon" required="" class="form-control" name="phone">
            <div class="form__submit-wrapper">
                <input type="submit" value="Poručite sada" class="button form__submit">
            </div>
        </form>
    </div>
</section>
<div class="clear"></div>
<script src="{{ asset('/') }}purplerelaxFiles/prowax2/app.js"></script>
@include('components.pixel_footer')
</body>
</html>