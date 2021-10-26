<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=480">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/opinion__guarantee_icon.jpg" type="image/x-icon">
    <link rel="icon" href="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/opinion__guarantee_icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/settings.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/slick.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/main.css" type="text/css" />
    <style>
        @font-face {
            font-family: 'Proxima Nova';
            src: url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Proxima Nova';
            src: url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
<div class="main-wrap">
@include('components.display_errors')
    <section class="title-block">
        <div class="sub-main-title">Эффективное избавление от волос</div>
        <h1 class="main-title">Yes Finishing Touch</h1>
    </section>
    <section class="top-block-v1">
        <div class="sale-cont">
            Акция!
            <strong>53%</strong>
            Скидка
        </div>
        <div class="cost-cont clearfix">
            <div class="cost old-cost">
                Обычная цена:
                <strong>
                    {{ $prices[1]['originalPrice'] }}
                    RSD
                </strong>
            </div>
            <div class="cost new-cost">
                Цена по акции:
                <strong>
                    {{ $prices[1]['amount'] }}
                    RSD
                </strong>
            </div>
        </div>
        <div class="describe-cont">
            <ul class="list-1">
                <li>Действует на волосы любой жесткости</li>
                <li>Подходит для любых областей тела</li>
                <li>Работает от прикосновения к телу</li>
            </ul>
            <div class="timer-cont">
                <h3>До конца акции осталось:</h3>
                <div class="timer-action"></div>
            </div>
            <a class="button-m" href="#zakaz">Poručite sada</a>
        </div>
    </section>
    <section class="detail-block">
        <h2 class="lvl-title">Нежен с кожей, беспощаден к волоскам</h2>
        <div class="slider-block">
            <div class="slider-cont clearfix">
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/about__image1.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                </div>
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/about__image2.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                </div>
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/about__image3.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                </div>
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/about__image4.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                </div>
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/about__image5.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                </div>
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/about__image6.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                </div>
            </div>
        </div>
        <div class="text-cont">
            <p>Эпилятор Finishing Touch избавляет от волос на 82% эффективнее, чем другие средства. В один прекрасный день, не удивляйтесь, когда Вы не сможете пользоваться другими средствами!</p>
            <p>Регулярное применение бритвы способствует тому, что волоски становятся тонкими и слабыми, а их количество постепенно уменьшается. Специальные лезвия не оказывают агрессивное воздействие на кожу, так что средство подходит для любого типа кожи и волос и его можно использовать на любом участке тела.</p>
            <p>С ним Вы можете носить самую открытую одежду, не опасаясь быстро отрастающих волосков, неловких красных точек после бритья или прилипшего воска после эпиляции.</p>
        </div>
        <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/result1_image.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
        <div class="list">
            <div class="list_item">
                <div class="icon_block">
                    <div class="icon"></div>
                </div>
                <p>Структура волос становится тоньше</p>
            </div>
            <div class="list_item">
                <div class="icon_block">
                    <div class="icon"></div>
                </div>
                <p>Эффективно снижает скорость роста волос</p>
            </div>
            <div class="list_item">
                <div class="icon_block">
                    <div class="icon"></div>
                </div>
                <p>Можно использовать абсолютно везде</p>
            </div>
            <div class="list_item">
                <div class="icon_block">
                    <div class="icon"></div>
                </div>
                <p>Видимый результат за 5 минут</p>
            </div>
        </div>
    </section>
    <section class="compound-block-v2">
        <h2 class="lvl-title">Подойдет для любого участка тела!</h2>
        <ul class="compound-cont clearfix">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/benefits__benefit1_image.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                <strong>Для лица</strong>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/benefits__benefit2_image.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                <strong>Для рук</strong>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/benefits__benefit3_image.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                <strong>Для зоны бикини</strong>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/benefits__benefit4_image.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                <strong>Для ног</strong>
            </li>
        </ul>
    </section>
    <section class="expert-block-v2">
        <h2 class="lvl-title">Мнение специалиста</h2>
        <div class="expert-cont">
            <div class="expert-title clearfix">
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/opinion__photo.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                <h3>Ефремова Диана Степановна</h3>
                <span>мастер депиляции, стаж работы 17 лет</span>
            </div>
            <p>Клиническим исследованием, проведённым европейскими учеными установлено:</p>
            <ul>
                <li>- Снижение частоты депиляции в области подмышек на 50%, в области бикини на 70%, области ног на 82%</li>
                <li>- Структура волос становится тоньше</li>
                <li>- Длина волос уменьшается</li>
                <li>- Рост волос замедляется</li>
            </ul>
        </div>
    </section>
    <section class="rev-block-v4 color_bg">
        <h2 class="lvl-title">Отзывы покупателей</h2>
        <div class="rev-cont clearfix">
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/reviews__review1_photo.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                <h4>Берлунова Ирина, 27 лет</h4>
                <p>Пользуюсь уже второй месяц, это просто нечто! Кожа гладенькая, никакого раздражения, волосы со временем редеют и становятся мягче! До этого перепробовала множество средств, но это самое эффективное) Рекомендую всем! По соотношению качества удаления волос и безболезненности – это лучшее, что может быть!</p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/reviews__review2_photo.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                <h4>Кошелева Инна, 20 лет</h4>
                <p>Никогда бы не поверила, что Finishing Touch способен мне помочь! Но моя подруга, прибывавшая в восторге от него убедила и меня заказать. Ну что же, курьер принес заказ, я оплатила и стала пробовать. После первого применения результат заметен сразу. После месяца, моё лицо полностью изменилось.</p>
            </div>
            <div class="rev-item">
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/reviews__review3_photo.jpg" alt="Yes Finishing Touch" title="Yes Finishing Touch">
                <h4>Цветкова Татьяна, 25 лет</h4>
                <p>Купила подруге на подарок, но не удержалась и опробовать на себе) От такой работы я была в восторге, пришлось срочно заказывать второй)) Очень нравится то, что для него нет недоступных мест, а качество работы вообще на высоте! Также заметила, что волосы стали расти медленнее и теперь менее густые)</p>
            </div>
        </div>
    </section>
    <section class="delivery-block-v3">
        <h2 class="lvl-title">Доставка и оплата</h2>
        <ul class="delivery-cont">
            <li>
                <h3>Доставка почтой</h3>
                <p>Товар отправляется бандеролью, доставка в течение 1-10 рабочих дней.</p>
            </li>
            <li>
                <h3>Отсутствие предоплаты</h3>
                <p>Вы оплачиваете товар только по факту его получения в почтовом отделении.</p>
            </li>
            <li>
                <h3>Гарантия качества</h3>
                <p>Вся продукция прошла контроль качества и полностью сертифицирована!</p>
            </li>
            <li>
                <h3>Анонимность доставки</h3>
                <p>Товар скрывается от любопытных глаз с помощью плотной упаковки, а его описание при отправлении не указывается.</p>
            </li>
        </ul>
    </section>
    <section class="title-block">
        <div class="sub-main-title">Эффективное избавление от волос</div>
        <h1 class="main-title">Yes Finishing Touch</h1>
    </section>
    <section class="top-block-v1 offer_bottom">
        <div class="sale-cont">
            Акция!
            <strong>53%</strong>
            Скидка
        </div>
        <div class="cost-cont clearfix" id="zakaz">
            <div class="cost old-cost">
                Обычная цена:
                <strong>
                    {{ $prices[1]['originalPrice'] }}
                    RSD
                </strong>
            </div>
            <div class="cost new-cost">
                Цена по акции:
                <strong>
                    {{ $prices[1]['amount'] }}
                    RSD
                </strong>
            </div>
        </div>
        <div class="describe-cont">
            <div class="timer-cont">
                <h3>До конца акции осталось:</h3>
                <div class="timer-action"></div>
            </div>
            <form class="m1-form" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div><input type="text" name="name" placeholder="Ime i prezime" ></div>
                <div><input type="tel" name="phone" placeholder="Telefon" ></div>
                <div><input type="text" name="shipping_address" placeholder="Adresa" ></div>
                <div><input type="text" name="shipping_city" placeholder="Grad" ></div>
                <div><button class="button-m">Završi porudžbinu</button></div>
            </form>
        </div>
    </section>
</div>
<script type="text/javascript" src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}purplerelaxFiles/finishingtouch_mobile/init.js"></script>
@include('components.pixel_footer')
</body>
</html>