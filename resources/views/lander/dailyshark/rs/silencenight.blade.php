<!DOCTYPE html>
<html>
<head> @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/silencenight/favicon.ico" />
    <style>
        @font-face {
            font-family: "AvenirNextCyr";
            src: url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Light.woff2") format("woff2"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Light.woff") format("woff"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Light.ttf") format("truetype");
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: "AvenirNextCyr";
            src: url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Regular.woff2") format("woff2"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Regular.woff") format("woff"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Regular.ttf") format("truetype");
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: "AvenirNextCyr";
            src: url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Medium.woff2") format("woff2"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Medium.woff") format("woff"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Medium.ttf") format("truetype");
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: "AvenirNextCyr";
            src: url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Bold.woff2") format("woff2"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Bold.woff") format("woff"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Bold.ttf") format("truetype");
            font-weight: 700;
            font-style: normal;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/silencenight/style.css" />
</head>
<body>
<!-- ШАПКА 1 -->
<!-- after_qbici -->
<section class="topul">
    <div class="wrap">
        <ul class="toplist">
            <li>
                <p>Экологически чистый материал</p>
            </li>
            <li>
                <p>100% гарантия результата</p>
            </li>
            <li>
                <p>6789 человек уже заказали</p>
            </li>
        </ul>
    </div>
</section>
<section class="header-one">
    <div class="wrap">
        <h1>клипса-антихрап</h1>
        <h2>Верное средство для борьбы с храпом!</h2>
        <div class="tovar-sale-cont">
            <div class="tovar-sale">
                <p>53%</p> скидка
            </div>
            <img src="{{ asset('/') }}dailysharkFiles/silencenight/header1_tovar.jpg" alt="" />
        </div>
        <ul class="header-one_plus">
            <li>
                <p>100% избавляет от храпа</p>
            </li>
            <li>
                <p>Не нарушает сон спящего</p>
            </li>
            <li>
                <p>Фильтрует воздух от вредных газов и пыли</p>
            </li>
        </ul>
        <div class="price-button">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Обычная цена:</span>
                    <p><span>{{ $prices[1]['originalPrice'] }}</span><small> RSD</small></p>
                </div>
                <div class="new-cost">
                    <span>Цена сегодня:</span>
                    <p>{{ $prices[1]['amount'] }}<small> RSD</small></p>
                </div>
            </div>
            <a href="#order_form" class="button-m">Заказать сейчас</a>
            <div class="stock">Количество товара ограничено</div>
        </div>
    </div>
</section>
<section class="plus">
    <div class="wrap nopad">
        <ul class="list col4">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/silencenight/pl1.png" alt="" />
                <p>Эффективно уменьшает храп и улучшает качество сна</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/silencenight/pl2.png" alt="" />
                <p>Произведен из экологически чистого материала, не вредит Вашему здоровью</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/silencenight/pl3.png" alt="" />
                <p>Обеспечивает приток чистого воздуха, фильтрует воздух от вредных газов и пыли</p>
            </li>
            <!-- <li><img src="img/pl4.png" alt=""><p>Расширяет дыхательных каналы, повышает содержание кислорода в крови</p></li> -->
        </ul>
    </div>
</section>
<!--ПРЕИМУЩЕСТВА 1-2 -->
<section class="after">
    <div class="wrap nopad">
        <h2 class="title">Страшные последствия храпа</h2>
        <!--ПРЕИМУЩЕСТВА 2-->
        <ul class="plus2 list col3 round border">
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/po1.jpg" alt="" />
                </div>
                <div class="list-right">
                    <h3>Ожирение</h3>
                </div>
            </li>
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/po2.jpg" alt="" />
                </div>
                <div class="list-right">
                    <h3>Гипертония</h3>
                </div>
            </li>
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/po3.jpg" alt="" />
                </div>
                <div class="list-right">
                    <h3>Инсульт</h3>
                </div>
            </li>
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/po4.jpg" alt="" />
                </div>
                <div class="list-right">
                    <h3>Инфаркт миокарда</h3>
                </div>
            </li>
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/po5.jpg" alt="" />
                </div>
                <div class="list-right">
                    <h3>Апноэ</h3>
                </div>
            </li>
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/po6.jpg" alt="" />
                </div>
                <div class="list-right">
                    <h3>Импотенция</h3>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--ХАРАКТЕРИСТИКИ 2-->
<section>
    <div class="wrap nopad">
        <h2 class="h2 title">Вы хотите избавиться от храпа?</h2>
        <p class="subtitle">Храп — это проблема, способная нанести вред здоровью и опасная для жизни. Ночной храп может привести к апноэ — нарушению и даже остановке дыхания. Кроме того, храп мешает спокойно спать вашим близким.</p>
        <div class="char2 two-col">
            <div class="two-col_left border2">
                <img src="{{ asset('/') }}dailysharkFiles/silencenight/photo.jpg" alt="" />
            </div>
            <div class="two-col_right">
                <p>Настало время покончить с этими проблемами раз и навсегда! Инновационная <b>клипса-антихрап Snorest поможет избавиться от храпа</b> меньше, чем за месяц и восстановить свободное дыхание! </p>
                <p>Мягкий силикон, из которого изготовлена клипса, не вызывает аллергических реакций, практически не чувствуется на коже. Поэтому вы без труда заснете с этим девайсом.</p>
                <ul class="char2_ul">
                    <li>
                        <p>
                            <b>Размер:</b> 55 x 30 x 17 мм
                        </p>
                    </li>
                    <li>
                        <p>
                            <b>Вес:</b> 20 г
                        </p>
                    </li>
                    <li>
                        <p>
                            <b>Материал:</b> ABS, силикон
                        </p>
                    </li>
                    <li>
                        <p>
                            <b>Цвет:</b> красный, белый, голубой
                        </p>
                    </li>
                </ul>
                <a href="#order_form" class="button-m">Заказать сейчас</a>
            </div>
        </div>
    </div>
</section>
<!--ВИДЕО-->
{{-- <section class="video">
--}} {{-- <div class="wrap">
                --}} {{-- <h2 class="title">Вы забудете о храпе навсегда!</h2>
                --}} {{-- <div class="video-container shadow">
                    --}} {{-- <div class="youtube" id="WMS41j1kB2k"></div>
                    --}} {{-- </div>
                --}} {{-- </div>
            --}} {{-- </section>
        --}}
<section class="legend">
    <div class="wrap">
        <h2 class="title">Антихрап устройство и очиститель воздуха 2 в 1</h2>
        <h3>Легко снимается, надевается и не доставляет неудобств во время сна</h3>
        <div class="legend-img1"></div>
        <ul class="legend-list hidden">
            <li>Мягкие, удобные силиконовые расширители</li>
            <li>Современный дизайн, высокое качество сборки</li>
            <li>Корпус выполнен из нетоксичного, гипоаллергенного материала</li>
            <li>Очищающие фильтры от мелких частиц пыли</li>
        </ul>
    </div>
</section>
<!--
<section class="expert"><div class="wrap"><h2 class="title">Мнение эксперта</h2><div class="expert-cont"><p>Известно, что каждый пятый человек ведет борьбу с храпом во сне. Как правило, его могут замечать близкие. Храп не только мешает спать вашим родным, он также пагубно влияет на ваше здоровье, уже не говоря о смертельном исходе. Но хирургическое вмешательство является слишком радикальным шагом устранения храпа. Вам поможет инновационная клипса-антихрап Snorest!</p><p>По результатам клинических исследований я могу утверждать, что клипса-антихрап Snorest является самым эффективным средством в борьбе с храпом. В 93% случаев клипса полностью избавила участников исследования от храпа за короткий срок.</p><div class="expert-meta"><b>Юрий Лавров,</b> врач-отоларинголог (стаж работы 28 лет)</div></div></div></section>
-->
<section>
    <div class="wrap nopad">
        <h2 class="title">Отзывы довольных покупателей</h2>
        <p class="subtitle">Мы получаем сотни благодарных отзывов ежедневно. Надеемся, что Вы останетесь довольны заказом и вернетесь к нам снова!</p>
        <div class="reviews-5">
            <div>
                <div class="rev shadow round">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/rev1.jpg" alt="" />
                    <h3>Эфирова Мирослава</h3>
                    <p class="just"> Решила купить Snorest своему папе. Он уже много лет страдает храпом, естественно мешает спать маме. Пробовали какой-то спрей от храпа, но он не помог… Папа уже неделю как пользуется вашей клипсой. Мама не жалуется, говорит что отец спит нормально:)) </p>
                </div>
            </div>
            <div>
                <div class="rev shadow round">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/rev2.jpg" alt="" />
                    <h3>Гайдук Алексей</h3>
                    <p class="just"> Сильно храплю во сне. Дома все привыкли, а вот в гостях неудобно. Купил клипсу и забыл про храп, очень приятная на ощупь. Изначально думал, что она будет выпадать, но держится уверенно. В комплект входит коробка-чехол, очень удобно. Спасибо за отличный девайс! </p>
                </div>
            </div>
            <div>
                <div class="rev shadow round">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/rev3.jpg" alt="" />
                    <h3>Харитонюк Семен</h3>
                    <p class="just"> Много лет страдал храпом, жена стала часто спать в другой комнате. Пошел к врачу, он мне и рассказал про эту чудо-клипсу. Купил ее. Жена говорит, что практически перестал храпеть и теперь спит со мной рядом)). Так что рекомендую! </p>
                </div>
            </div>
        </div>
        <!--end reviews-5  -->
    </div>
</section>
<section class="dark-bg">
    <div class="wrap nopad">
        <h2 class="title">Доставка и оплата</h2>
        <!--ДОСТАВКА 2-->
        <ul class="delivery-2 list col3">
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/delivery2-1.jpg" alt="" />
                </div>
                <div class="list-right">
                    <h3>Заявка</h3>
                    <p>Оставьте заявку на нашем сайте, заполнив форму заказа</p>
                </div>
            </li>
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/delivery2-2.jpg" alt="" />
                </div>
                <div class="list-right">
                    <h3>отправка</h3>
                    <p>Оператор уточнит у вас детали и мы отправим ваш заказ</p>
                </div>
            </li>
            <li>
                <div class="list-left">
                    <img src="{{ asset('/') }}dailysharkFiles/silencenight/delivery2-3.jpg" alt="" />
                </div>
                <div class="list-right">
                    <h3>получение</h3>
                    <p>Через 1-10 дней вы получите товар и оплатите его при получении</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="footer-one">
    <div class="wrap">
        <h1>клипса-антихрап</h1>
        <h2>Верное средство для борьбы с храпом!</h2>
        <div class="tovar-sale-cont">
            <div class="tovar-sale">
                <p>53%</p> скидка
            </div>
            <img src="{{ asset('/') }}dailysharkFiles/silencenight/header1_tovar.jpg" alt="" />
        </div>
        <div class="formbox shadow">
            {{--<div class="timer clearfix">--}}
                {{--<div class="countbox"></div>--}}
            {{--</div>--}}
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Обычная цена:</span>
                    <p><span>{{ $prices[1]['originalPrice'] }}</span><small> RSD</small></p>
                </div>
                <div class="new-cost">
                    <span>Цена сегодня:</span>
                    <p>{{ $prices[1]['amount'] }}<small> RSD</small></p>
                </div>
            </div>
            <form id="order_form" class="m1-form" action="#" method="post">
                <input class="field" name="name" type="text" placeholder="Введите ваше имя" />
                <input class="field" name="phone" type="tel" placeholder="Введите ваш телефон" />
                <button class="button-m">Заказать сейчас</button>
            </form>
            <div class="stock">Количество товара ограничено</div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('a[href^="#"]').click(function (){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        })
        $('.char3, .reviews-4, .reviews-5').slick({
            dots: false,
            infinite: true,
            speed: 200,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 976,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 659,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        adaptiveHeight: true
                    }
                }
            ]
        });
    });
</script>
</body>
</html>