<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href=""type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/uvlampa/main.css">
    <link href="http://fonts.googleapis.com/css?family=Alice|Russo+One&amp;display=swap" rel="stylesheet">
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
            <div class="menu__logo col-3 col-lg-4">
                <div class="logo__text">Лампа-сушка для ногтей SUN Х LED/UV</div>
            </div>
            <div class="menu__list-wrapper col-9 col-lg-8">
                <div class="menu__mobile hide-l"></div>
                <ul id="menu" class="menu__list hide-m hide-s">
                    <li><a href="#scroll-des2" class="menu__item">ХАРАКТЕРИСТИКИ</a></li>
                    <li class="hide-s hide-m">
                        <div class="menu__item--dot"></div>
                    </li>
                    <li><a href="#scroll-des3" class="menu__item">ОПИСАНИЕ</a></li>
                    <li class="hide-s hide-m">
                        <div class="menu__item--dot"></div>
                    </li>
                    <li><a href="#scroll-des4" class="menu__item">ДОСТАВКА</a></li>
                    <li class="hide-s hide-m">
                        <div class="menu__item--dot"></div>
                    </li>
                    <li><a href="#scroll-des5" class="menu__item">ОТЗЫВЫ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="header__preview preview container">
        <div class="preview__photo col-6">
            <img alt="" title="" src="{{ asset('/') }}purplerelaxFiles/uvlampa/sdd1.jpg">
        </div>
        <div class="preview__info info col-6">
            <div class="info__headline">SUN Х LED/UV</div>
            <h1 class="info__title">Лампа-сушка для ногтей</h1>
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
            <a href="#scroll-des6" class="preview__button button" >Poručite sada</a>
        </div>
    </div>
</section>
<div class="clear"></div>
<section id="scroll-des1" class="triggers-wrapper">
    <div class="triggers container">
        <div class="trigger col-6">
            <div class="trigger__icon"><img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/icon1.png"></div>
            <div class="trigger__descr">МЫ ЗАБОТИМСЯ О ВАС И ПРЕДЛАГАЕМ ТОЛЬКО КАЧЕСТВЕННЫЙ ТОВАР</div>
        </div>
        <div class="trigger col-5">
            <div class="trigger__icon"><img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/icon2.png"></div>
            <div class="trigger__descr">НЕ БЫЛО НИ ОДНОГО ВОЗВРАТА ТОВАРА</div>
        </div>
        <div class="trigger col-6">
            <div class="trigger__icon"><img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/icon3.png"></div>
            <div class="trigger__descr">ЦЕНЫ НИЖЕ РЫНОЧНЫХ ЗА СЧЕТ ПРЯМЫХ ПОСТАВОК ОТ ПРОИЗВОДИТЕЛЯ</div>
        </div>
        <div class="trigger col-6">
            <div class="trigger__icon"><img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/icon4.png"></div>
            <div class="trigger__descr">ДОСТАВКА В ЛЮБУЮ ТОЧКУ СНГ ОТ 7 РАБОЧИХ ДНЕЙ</div>
        </div>
    </div>
</section>
<div class="clear"></div>
<section id="scroll-des2" class="specs container">
    <h1 class="heading">ХАРАКТЕРИСТИКИ </h1>
    <div class="specs__gallery col-6">
        <div class="product-gallery owl-carousel">
            <div data-hash="photo-one" class="product-gallery__item">
                <img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/sdd2.jpg">
            </div>
        </div>
    </div>
    <div class="specs__param-list param-list col-6">
        <div class="container">
            <div class="param-list__row col-3">
                <div class="param-list__item">
                    <div class="param-list__name">Мощность:</div>
                    <div class="param-list__value">54 Вт</div>
                </div>
                <div class="param-list__item">
                    <div class="param-list__name">Цвет:</div>
                    <div class="param-list__value">Белый</div>
                </div>
                <div class="param-list__item">
                    <div class="param-list__name">Частота (Гц):</div>
                    <div class="param-list__value">50-60</div>
                </div>
                <div class="param-list__item">
                    <div class="param-list__name">Размеры:</div>
                    <div class="param-list__value"> (В*Ш*Г,мм): 103*230*208</div>
                </div>
            </div>
            <div class="param-list__row col-3">
                <div class="param-list__item">
                    <div class="param-list__name">Выдвижное дно:</div>
                    <div class="param-list__value">да</div>
                </div>
                <div class="param-list__item">
                    <div class="param-list__name">Сенсор датчика движения:</div>
                    <div class="param-list__value">да</div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clear"></div>
<section id="scroll-des3" class="benefits-wrapper">
    <h1 class="hero-title">ОПИСАНИЕ</h1>
    <div class="hero-content">
        <div class="hero-image">
            <img src="{{ asset('/') }}purplerelaxFiles/uvlampa/tovar.png" alt="" class="hero-img">
        </div>
        <div class="hero-description">
            <p class="description">Лампа нового поколения SUN Х с таймером на 10, 30, 60 и 99 секунд. Изготовлена с технологией светодиодов двойного спектра излучения, охватывает более широкий спектр ультрафиолетового диапазона, поэтому подходит для сушки гель-лаков и твердых гелей, оснащена 36 светодиодными лампочками. Лампа оборудована дисплеем показывающим отсчет времени, датчиками движения, встроенным таймером, а также режимом переключения мощности для предотвращения жжения материала.</p>
            <p class="description">UV/LED лампы – это лампы нового поколения, созданные с применением новейшей технологии электронных светодиодов, излучающих ультрафиолет. Основным преимуществом этих ламп является их долговечность и безопасность.</p>
        </div>
    </div>
    <div class="benefits__button"><a href="#scroll-des6" class="button" >Poručite sada</a></div>
</section>
<div class="clear"></div>
<section id="scroll-des4" class="steps container">
    <h1 class="heading heading--secondary">КАК МЫ РАБОТАЕМ</h1>
    <div class="work-content">
        <div class="work-form">
            <img src="{{ asset('/') }}purplerelaxFiles/uvlampa/form.png" alt="" class="work-img">
            <p class="descriptin-work">Вы оставляете заявку через форму заявки на сайте</p>
        </div>
        <div class="work-consult">
            <img src="{{ asset('/') }}purplerelaxFiles/uvlampa/consult.png" alt="" class="work-img">
            <p class="descriptin-work">Мы перезваниваем вам для уточнения деталей</p>
        </div>
        <div class="work-delivery">
            <img src="{{ asset('/') }}purplerelaxFiles/uvlampa/box.png" alt="" class="work-img">
            <p class="descriptin-work">Отправляем ваш заказ в пункт назначения</p>
        </div>
        <div class="work-payment">
            <img src="{{ asset('/') }}purplerelaxFiles/uvlampa/money.png" alt="" class="work-img">
            <p class="descriptin-work">Вы оплачиваете товар при получении</p>
        </div>
    </div>
</section>
<div class="clear"></div>
<section id="scroll-des5" class="reviews-wrapper">
    <div class="reviews container">
        <div class="reviews__slider col-6">
            <div class="heading__icon heading__icon--reviews"></div>
            <h1 class="heading heading--white heading--primary heading--sm">ОТЗЫВЫ ПОКУПАТЕЛЕЙ</h1>
            <div class="slider-reviews owl-carousel">
                <div class="review">
                    <div class="review__photo"><img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/user.jpg"></div>
                    <div class="review__name">Оксана Радченко</div>
                    <div class="review__text">Мечта любой девушки иметь дома лампу для ногтей. Увидила данный товар, неудержалась и купила. Доставили очень быстро, сразу же пошла пробовать. Лампа просто супер. Девчонки заказывайте, не пожалеете!;)</div>
                </div>
                <div class="review">
                    <div class="review__photo"><img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/user1.png"></div>
                    <div class="review__name">Елена Михеева</div>
                    <div class="review__text">Скиптично отношусь к салонам, потому, что там очень дорого. Заказала, теперь сижу дома и у меня ногти не хуже чем делают в салонах. Рекомендую!</div>
                </div>
                <div class="review">
                    <div class="review__photo"><img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/user2.png"></div>
                    <div class="review__name">Лера Васькина</div>
                    <div class="review__text">Лампа просто классная, что самое главное качественная. Работает отлично, ногти получаются просто шикарные. За такие то деньги, можно сказать даром. Покупайте пока не раскупили!;) </div>
                </div>
            </div>
        </div>
        <div class="reviews__photo col-6 hide-s"><img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/sddot1.png"></div>
    </div>
</section>
<div class="clear"></div>
<section class="buy container">
    <h2 class="heading__headline">SUN Х LED/UV</h2>
    <h1 class="heading heading--secondary heading--has-headline heading--extra">Лампа-сушка для ногтей</h1>
    <div class="buy__photo col-6"><img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/sdd1.jpg"></div>
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
        <div class="form__countdown countdown">
            <div class="countdown-descr">До конца акции осталось:</div>
            <div class="cd">
                <div id="cd__tiles" class="cd__tiles"></div>
            </div>
        </div>
        <form action="{{$orderRoute}}" method="post" class="form__inputs" id="scroll-des6">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input type="text" placeholder="Ime i prezime" title="Ime i prezime" required="" class="form__input" name="name"><br>
            <input id="tel" type="tel" placeholder="Telefon" title="Telefon" required="" class="form__input" name="phone">
            <div class="form__submit-wrapper">
                <input type="submit" value="Poručite sada" class="button form__submit">
            </div>
        </form>
    </div>
</section>
<div class="clear"></div>
<section class="footer-wrapper">
    <div class="footer container">
        <div class="footer__copy col-12" style="color: black;">
            <div class="copy"></div>
        </div>
    </div>
</section>
<script src="{{ asset('/')}}purplerelaxFiles/uvlampa/app.js"></script>
{{--<script src="https://lampasunx.xcartpro.com/r1/js/scroll.js"></script>--}}
@include('components.pixel_footer')
</body>
</html>