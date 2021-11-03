<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/settings.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/style.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>
@include('components.display_errors')
<section class="block2">
    <div class="wrap header__wrap">
        <div class="">
            <h1><span>Массажер</span> для спины и шеи </h1>
            <div class="sale">
                скидка
                <p>-50%</p>
            </div>
            <ul class="plus">
                <li>
                    <p>Помогает снять стресс</p>
                </li>
                <li>
                    <p>Снимает боль в мышцах</p>
                </li>
                <li>
                    <p>Помогает расслабиться</p>
                </li>
            </ul>
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Старая цена:</span>
                    <p>
                        {{ $prices[1]['originalPrice'] }}
                        RSD
                    </p>
                </div>
                <div class="new-cost">
                    <span>Новая цена:</span>
                    <p>
                        {{ $prices[1]['amount'] }}
                        RSD
                    </p>
                </div>
            </div>
            <a href="#buy" class="button-m">Заказать со скидкой</a>
        </div>
        <div class="video__wrap" style="width: 300px;">
            <video muted="muted" width="300px" height="auto" loop="loop" preload="auto" playsinline="" webkit-playsinline="" autoplay="autoplay" controls="">
                <source src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/1.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</section>
<section class="block4">
    <div class="wrap">
        <ul class="result">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/res1.png" alt="">
                <p><b>Массаж шеи</b></p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/res2.png" alt="">
                <p><b>Массаж спины</b></p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/res3.png" alt="">
                <p><b>Массаж талии</b></p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/res4.png" alt="">
                <p><b>Массаж ног</b></p>
            </li>
        </ul>
    </div>
</section>
<section class="block5">
    <div class="wrap">
        <h2 class="title t2">Массажер для спины и шеи</h2>
        <ul class="sostav">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/sos1.jpg" alt="">
                <h4>Массажная головка</h4>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/sos2.jpg" alt="">
                <h4>Дышащая нейлоновая сетчатая ткань</h4>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/sos3.jpg" alt="">
                <h4>Высококачественная кожа PU</h4>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/sos4.jpg" alt="">
                <h4>3C сертифицированный источник питания</h4>
            </li>
        </ul>
    </div>
</section>
<section class="block7" style="background:white;">
    <div class="wrap">
        <h2>Массажер для спины и шеи</h2>
        <div class="goods">
            <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/sl1.jpg" alt="">
            <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/sl2.jpg" alt="">
            <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/sl3.jpg" alt="">
        </div>
    </div>
</section>
<section class="block9">
    <div class="wrap">
        <h2 class="title">отзывы покупателей</h2>
        <div class="reviews">
            <div>
                <div class="rev">
                    <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/rev1.jpg" alt="">
                    <h3>Александра Щербакова</h3>
                    <p class="center-justified">Массажер очень классный. Недавно купила у вас на сайте. Теперь пользуюсь с огроменным удовольствием) Покупкой довольна!</p>
                </div>
            </div>
            <div>
                <div class="rev">
                    <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/rev2.jpg" alt="">
                    <h3>Елена Белякова</h3>
                    <p class="center-justified">Купила этот массажер неделю назад. Пользовалась им несколько процедур, эффект стал заметен сразу. Боли в шее прошли! Очень удобно и качественно. Рекомендую.</p>
                </div>
            </div>
            <div>
                <div class="rev">
                    <img src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/rev3.jpg" alt="">
                    <h3>Анна Котова</h3>
                    <p class="center-justified">Массажер у меня уже около месяца. Надеялась, что этот прибор избавит меня от болей на шее. И не зря! Боли прошли как будто их не бывало вообще! Всем советую!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block10">
    <div class="wrap">
        <h2 class="title">Доставка и оплата</h2>
        <ul class="ship">
            <li>
                <div></div>
                <p>Заполните форму для заказа товара</p>
            </li>
            <li>
                <div></div>
                <p>Оператор уточнит у вас детали и мы отправим ваш заказ</p>
            </li>
            <li>
                <div></div>
                <p>Доставка от 7 рабочих дней в зависимости от региона</p>
            </li>
        </ul>
    </div>
</section>
<section class="block11">
    <div class="wrap header__wrap">
        <div class="">
            <h2><span>Массажер </span> <span>для спины и шеи</span></h2>
            <div class="sale">
                скидка
                <p>-50%</p>
            </div>
            <div class="formbox">
                <div class="price clearfix">
                    <div class="old-cost">
                        <span>Старая цена:</span>
                        <p>
                            {{ $prices[1]['originalPrice'] }}
                            RSD
                        </p>
                    </div>
                    <div class="new-cost">
                        <span>Новая цена:</span>
                        <p>
                            {{ $prices[1]['amount'] }}
                            RSD
                        </p>
                    </div>
                </div>
                {{--<div class="countbox"></div>--}}
                <form id="buy" class="forma" action="#" method="post">
                    <input class="field" name="name" type="text" placeholder="Введите ваше имя" required>
                    <input class="input-phone" name="phone" type="tel" placeholder="Введите ваш телефон" required>
                    <button class="button-m" type="submit">Заказать со скидкой</button>
                </form>
            </div>
        </div>
        <div class=" footer__video" style="width: 300px;">
            <video muted="muted" width="300px" height="auto" loop="loop" preload="auto" playsinline="" webkit-playsinline="" autoplay="autoplay" controls="">
                <source src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/1.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</section>
<center>
    <div id="details-wrapper"></div>
</center>
<script src="{{ asset('/') }}purplerelaxFiles/multifunkcionalnimasazer/main.js"></script>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
@include('components.pixel_footer')
</body>
</html>