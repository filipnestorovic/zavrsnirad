<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=480">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/ostracnozeva/quality.jpg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/ostracnozeva/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/ostracnozeva/styles.css">
    <style>
        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/subset-OpenSans-Light.woff2') format('woff2'), url('{{ asset('/') }}fonts/subset-OpenSans-Light.woff') format('woff'), url('{{ asset('/') }}fonts/subset-OpenSans-Light.ttf') format('truetype');
            font-weight: 300;
            font-style: normal
        }

        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/subset-OpenSans.woff2') format('woff2'), url('{{ asset('/') }}fonts/subset-OpenSans.woff') format('woff'), url('{{ asset('/') }}fonts/subset-OpenSans.ttf') format('truetype');
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/subset-OpenSans-Italic.woff2') format('woff2'), url('{{ asset('/') }}fonts/subset-OpenSans-Italic.woff') format('woff'), url('{{ asset('/') }}fonts/subset-OpenSans-Italic.ttf') format('truetype');
            font-weight: 400;
            font-style: italic
        }

        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.woff2') format('woff2'), url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.woff') format('woff'), url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.ttf') format('truetype');
            font-weight: 600;
            font-style: normal
        }

        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/subset-OpenSans-SemiboldItalic.woff2') format('woff2'), url('{{ asset('/') }}fonts/subset-OpenSans-SemiboldItalic.woff') format('woff'), url('{{ asset('/') }}fonts/subset-OpenSans-SemiboldItalic.ttf') format('truetype');
            font-weight: 600;
            font-style: italic
        }

        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/subset-OpenSans-Bold.woff2') format('woff2'), url('{{ asset('/') }}fonts/subset-OpenSans-Bold.woff') format('woff'), url('{{ asset('/') }}fonts/subset-OpenSans-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal
        }

        @font-face {
            font-family: 'Open Sans';
            src: url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.woff2') format('woff2'), url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.woff') format('woff'), url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.ttf') format('truetype');
            font-weight: 800;
            font-style: normal
        }
    </style>
</head>
<body>
<div class="main_wrapper">
    <header class="offer_section">
        <div class="title_block">
            <p style="font-size: 21px; font-weight: 700;">
                Ручная точилка для разнообразных кухонных ножей
            </p>
            <p class="subtitle"><b><i>Удобный и нужный атрибут для вашей кухни</i></b></p>
        </div>
        <div class="image_block">
            <img class="image" src="{{ asset('/') }}dailysharkFiles/ostracnozeva/offer_top.jpg">
            <div class="discount">Скидка <b>-40%</b></div>
        </div>
        <div class="benefits_list1 clearfix">
            <div class="benefit_item1">100% гарантия качества</div>
            <div class="benefit_item1">Оплата при получении</div>
            <div class="benefit_item1">В наличии <br>2 цвета</div>
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">Обычная цена:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="price_item new">
                <div class="text"><span>Вы экономите 40%</span></div>
                <div class="value">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <ul class="benefits_list">
            <li>Эргономичная и удобная ручка</li>
            <li>Резинополимерное покрытие снизу инструмента препятсвует скольжению</li>
            <li>Многоэтапный цикл заточки с тремя видами камней</li>
            <li>Точит, выпрямляет и полирует лезвие</li>
            <li>Простота и удобство в использовании</li>
        </ul>
        <div class="order_block">
            <br>
            <form class="order_form" action="#" method="post" >
                <input class="input" name="name" type="text" placeholder="Введите ваше имя" required="">
                <input class="input" name="phone" type="tel" placeholder="Введите ваш телефон" required="">
                <div class="button_block">
                    <button class="button" type="submit">Заказать сейчас</button>
                </div>
            </form>
            <div class="products_count">Количество наборов по акции <span>ограниченно!</span></div>
        </div>
    </header>
    <section class="description_section brd">
        <h2 style="margin: 30px 0 30px;">
            <small style="font-size: 24px;">Отличный помощник для эффективной и </small>
            <b style="font-size: 24px;">незатруднительной заточки разнообразных кухонных ножей</b>
        </h2>
        <div class="text_block">
            <p style="text-align:left;">
                С ручной точилкой проблема острых ножей не то что совсем сходит на нет, но становится менее актуальной явно. Поскольку данное приспособление – <b>отличный помощник для эффективной и незатруднительной заточки</b> разнообразных кухонных ножей.
                Конструкция точилки позволяет проводить полный цикл заточки даже совсем тупого ножа. Потому что в ней имеется три отделения с разными абразивами:<br>
                Алмазными.
                Из твердосплавной стали.<br>
                Керамическими. <br><br>
                <b>Такой перечень позволяет работать с клинками различной степени затупления, пусть даже и поврежденных:</b><br>
                • Абразив из твердосплавной стали применяется для первичных работ с затупившимся кухонным клинком. Также его можно использовать для ремонта и выпрямления поврежденной сколами и выкрашиванием.<br>
                • Для следующего этапа обработки используется алмазный абразив. Им уже можно даже точить подтачивать клинки. Подходит и для конкретно заточки высокотвердых сталей.<br>
                • Для финальных работ – керамический абразив. Он и дотачивает и шлифует клинок. Или подходит для регулярной подточки, содержания кухонного ножа всегда готовым к работе.<br><br>
                Механическая точилка проста в использовании и не требует специальных навыков для работы. Ее можно устанавливать на различные поверхности, а резинополимерное покрытие снизу инструмента препятсвует скольжению.<br><br>
                Размер точилки: 20х7см<br>
                Два цвета: чёрный и красный
            </p>
        </div>
    </section>
    <section class="description_section brd">
        <h2 style="margin: 30px 0 30px;">
            <small style="font-size: 24px;">
                С помощью компактной и легкой механической точилки </small>
            <b style="font-size: 24px;"> вы быстро и легко заточите ножи</b>
            <br>
        </h2>
        <div class="image_block">
            <img class="image" src="{{ asset('/') }}dailysharkFiles/ostracnozeva/item-2.png">
        </div>
        <div class="text_block">
            <p style="text-align:left;">
                С помощью компактной и легкой механической точилки вы быстро и легко заточите ножи. Это портативная точилка вернет вашим ножам былую остроту которая так важна для работы на кухне. <br>
                <b>1 этап</b> - для первичной заточки используется грубый абразив с алмазным напылением. <br>
                <b>2 этап</b> - для доводки режущей кромки в V-образную форму используется абразив средней зернистости из карбида вольфрама. <br>
                <b>3 этап</b> - для полировки и ежедневной правки используется керамический камень белого цвета.
            </p>
        </div>
    </section>
    <section class="description_section2" style="background: url({{ asset('/') }}dailysharkFiles/ostracnozeva/bg-lightl-894.jpg)">
        <h2><b>Преимущества точилки</b></h2>
        <img class="image" src="{{ asset('/') }}dailysharkFiles/ostracnozeva/item-3.png">
        <header class="offer_section">
            <ul class="benefits_list">
                <li>Удобная эргономичная ручка;</li>
                <li>Три вида камней поэтапной заточки; </li>
                <li>Съёмная часть отдела камней для удобства очистки от стружки;</li>
                <li>Точилка не требует специальных навыков для использования ;</li>
                <li>Точит! выравнивает! полирует!;</li>
            </ul>
        </header>
        <div class="button_block1">
            <a href="#order_form" class="button">заказать сейчас</a>
        </div>
    </section>
    <section class="order_info1_section">
        <h2><b style="color: #ffffff;">Преимущества набора</b></h2>
        <div class="order_info1_list">
            <div class="info_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/ostracnozeva/perfectlook.jpg">
                </div>
                <div class="text_block">
                    <h4 style="color: #ffd800;">Гарантии от производителя</h4>
                    <p style="color: #ffffff;">Наш магазин является официальным представителем данной продукции в Украине.</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/ostracnozeva/quality.jpg">
                </div>
                <div class="text_block">
                    <h4 style="color: #ffd800;">Улучшенный дизайн</h4>
                    <p style="color: #ffffff;">С помощью компактной и легкой механической точилки вы быстро и легко заточите ножи. Это портативная точилка вернет вашим ножам былую остроту которая так важна для работы на кухне. .</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/ostracnozeva/lowprice.jpg">
                </div>
                <div class="text_block">
                    <h4 style="color: #ffd800;">Высокая эффективность</h4>
                    <p style="color: #ffffff;">Корейская механическая точилка проста в использовании и не требует специальных навыков для работы. Ее можно устанавливать на различные поверхности, а резинополимерное покрытие снизу инструмента препятсвует скольжению.</p>
                </div>
            </div>
        </div>
        <div class="button_block1">
            <a href="#order_form" class="button">заказать сейчас</a>
        </div>
    </section>
    <section class="reviews_section">
        <h2><b style="color: #44036F;">Отзывы покупателей</b></h2>
        <p style="color:#000; text-align: center;">Мы очень любим и ценим наших покупателей. Мы внимательно осматриваем товар перед отправкой.</p>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}dailysharkFiles/ostracnozeva/otziv1.jpg">
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}dailysharkFiles/ostracnozeva/otziv2.png">
            </div>
        </div>
    </section>
    <section class="order_info1_section" style="background: url({{ asset('/') }}dailysharkFiles/ostracnozeva/bg-lightl-894.jpg)">
        <h2><b>Как заказать набор?</b></h2>
        <div class="order_info1_list">
            <div class="info_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/ostracnozeva/delivery1_image1.jpg">
                </div>
                <div class="text_block">
                    <h4>Заявка</h4>
                    <p>Оставьте заявку на нашем сайте, заполнив форму заказа ниже.</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/ostracnozeva/delivery1_image2.jpg">
                </div>
                <div class="text_block">
                    <h4>Отправка</h4>
                    <p>Доставим заказ в течение 2-5 дней курьером до двери</p>
                </div>
            </div>
            <div class="info_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/ostracnozeva/delivery1_image3.jpg">
                </div>
                <div class="text_block">
                    <h4>Получение</h4>
                    <p>Оплачивайте после проверки товара</p>
                </div>
            </div>
        </div>
    </section>
    <section class="offer_section">
        <div class="title_block">
            <p style="font-size: 21px; font-weight: 700;">
                Ручная точилка для разнообразных кухонных ножей
            </p>
            <p class="subtitle"><b><i>Удобный и нужный атрибут для вашей кухни</i></b></p>
        </div>
        <div class="image_block">
            <img class="image" src="{{ asset('/') }}dailysharkFiles/ostracnozeva/offer_top1.jpg">
            <div class="discount">Скидка <b>-40%</b></div>
        </div>
        <div class="benefits_list1 clearfix">
            <div class="benefit_item1">100% гарантия качества</div>
            <div class="benefit_item1">Оплата при получении</div>
            <div class="benefit_item1">В наличии <br>2 цвета</div>
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">Обычная цена:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
            <div class="price_item new">
                <div class="text"><span>Вы экономите 40%</span></div>
                <div class="value">
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                </div>
            </div>
        </div>
        <div class="order_block">
            <br>
            <form class="order_form" id="order_form" action="#" method="post" >
                <input class="input" name="name" type="text" placeholder="Введите ваше имя" required="">
                <input class="input" name="phone" type="tel" placeholder="Введите ваш телефон" required="">
                <div class="button_block">
                    <button class="button" type="submit">Заказать сейчас</button>
                </div>
            </form>
            <div class="products_count">Количество наборов по акции <span>ограниченно!</span></div>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/ostracnozeva/scripts.js"></script>
</body>
</html>
