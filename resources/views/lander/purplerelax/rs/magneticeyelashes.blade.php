<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/style.css">
    <style>
        @font-face {
            font-family: 'Proxima Nova';
            src: url('{{ asset('/') }}fonts/subset-ProximaNova-Light.html') format('woff2'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Light-2.html') format('woff'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Light-3.html') format('truetype');
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: 'Proxima Nova';
            src: url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.html') format('woff'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Regular-2.html') format('truetype');
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Proxima Nova';
            src: url('{{ asset('/') }}fonts/subset-ProximaNova-Semibold.html') format('woff2'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Semibold-2.html') format('woff'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Semibold-3.html') format('truetype');
            font-weight: 600;
            font-style: normal;
        }

        @font-face {
            font-family: 'Proxima Nova';
            src: url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.html') format('woff'),
            url('{{ asset('/') }}fonts/subset-ProximaNova-Bold-2.html') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<!--offer-->
<section class="offer">
    <div class="wrap">
        <div class="main-title">Cамоклеящиеся <span>накладные ресницы</span></div>
        <div class="sub-title">Завораживающий взгляд за 1 минуту!</div>
        <div class="sale">Скидка <b>-50%</b></div>
        <!--order-box-->
        <div class="order-box">
            <!--bullet-->
            <ul class="bullet">
                <li>Эффект нарощенных ресниц</li>
                <li>Подходят для любого типа ресниц</li>
                <li>Не портят ресницы и не вызывают раздражения</li>
            </ul>
            <!--/bullet-->
            <!--price-->
            <div class="price">
                <div class="old">
                    <p>Цена:</p>
                    <div class="val"><span>{{ $prices[1]['originalPrice'] }}</span><i>{{ $prices[1]['currency'] }}</i>
                    </div>
                </div>
                <div class="new">{{ $prices[1]['amount'] }}<i>{{ $prices[1]['currency'] }}</i></div>
            </div>
            <!--/price-->
            <a href="#order" class="button-m">Заказать со скидкой</a>
            <div class="stock"><b>17 шт</b> осталось по акции!</div>
        </div>
        <!--/order-box-->
    </div>
</section>
<!--/offer-->
<!--s1-->
<section class="s1">
    <div class="wrap">
        <h2 class="title">Головокружительный объем <span>до самых кончиков!</span></h2>
        <!--box-->
        <div class="box">
            <div class="title-question">Хотите достичь эффекта кукольных накладных ресниц без посещения салона красоты?
            </div>
            <div class="txt">
                Сделать это очень просто! Вам помогут самоклеящиеся накладные ресницы. Буквально за несколько движений
                вы получите яркие и выразительные ресницы такого объема, которого можно добиться только в салонах
                красоты!
            </div>
            <div class="prd">
                <p>Одной пары хватает на 8-9 месяцев</p>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/product-im1.png" alt="">
            </div>
            <div class="alert">
                Они отлично фиксируются на всех ресницах, создавая эффектный и привлекательный взгляд. Прекрасно
                держатся и идеально подходят для активного образа жизни!
            </div>
        </div>
        <!--/box-->
        <!--photo-list-->
        <ul class="photo-list">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s1-im1.jpg" alt="">
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s1-gif.gif" alt="">
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s1-im3.jpg" alt="">
            </li>
        </ul>
        <!--/photo-list-->
    </div>
</section>
<!--/s1-->
<!--s2-->
<section class="s2">
    <div class="wrap">
        <h2 class="title">Эффект <span>натуральных <br>ресниц</span></h2>
        <!--list-v1-->
        <ul class="list-v1">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s2-icon1.png" alt="">
                <h4>4D объем</h4>
                <p>Длина ресниц увеличивается от внутреннего уголка глаза к внешнему – создает эффект «распахнутых
                    глаз».</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s2-icon2.png" alt="">
                <h4>Стойкость</h4>
                <p>
                    Длительная фиксация до 15 часов, яркий взгляд и комфорт в носке обеспечены
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s2-icon3.png" alt="">
                <h4>Гипоаллергенные</h4>
                <p>
                    Без клея и без зажимов.
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s2-icon4.png" alt="">
                <h4>Простота</h4>
                <p>
                    Их легко наносить, они не ощущаются на глазах, отлично держатся и легко снимаются.
                </p>
            </li>
        </ul>
        <!--/list-v1-->
        <a href="#order" class="button-m">Заказать со скидкой</a>
    </div>
</section>
<!--/s2-->
<!--s3-->
<section class="s3">
    <div class="wrap">
        <h2 class="title">Чем накладные ресницы <span>лучше нарощенных ресниц?</span></h2>
        <!--list-v2-->
        <ul class="list-v2">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s3-im1.jpg" alt="">
                <h4>Классическое наращивание ресниц:</h4>
                <div class="not">
                    <div class="item">Способствуют ослаблению натуральных волосков</div>
                    <div class="item">Свои ресницы начинают быстрее выпадать</div>
                    <div class="item">Аллергические реакции из-за наличия клея</div>
                    <div class="item">Качественное наращивание стоит больших денег</div>
                </div>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s3-im2.jpg" alt="">
                <h4>Наращивание при помощи накладных ресниц:</h4>
                <div class="yes">
                    <div class="item">Не травмирует собственные реснички</div>
                    <div class="item">Дает отдых ночью для натуральных волосков</div>
                    <div class="item">Полное отсутствие аллергических реакций</div>
                    <div class="item">Экономит бюджет на работе Лешмейкера</div>
                </div>
            </li>
        </ul>
        <!--/list-v2-->
    </div>
    <!--slider-result-->
    <div class="slider-result">
        <div class="item">
            <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/result-im1.jpg" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/result-im2.jpg" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/result-im3.jpg" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/result-im4.jpg" alt="">
        </div>
    </div>
    <!--/slider-result-->
</section>
<!--/s3-->
<!--spec-->
<section class="spec">
    <div class="wrap">
        <div class="inner">
            <h2 class="title">Мнение <span>лешмейкера</span></h2>
            <img class="ava" src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/spec-ava.jpg" alt="">
            <div class="name"><b>Валерия Невская</b></div>
            <div class="desc">
                Наращивание ресниц классическим способом - это уже прошлый век. Все чаще и чаще приходят клиентки с
                просьбой, что-то сделать с их напрочь испорченными ресницами от таких процедур.
            </div>
            <div class="alert">
                Самоклеящиеся накладные ресницы выдержат даже самый насыщенный день. Они создают натуральный эффект
                выразительного взгляда и качественно наращённых ресниц без единого вреда для натуральных волосков.
                <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/product-im2.png" alt="">
            </div>
            <a href="#order" class="button-m">Заказать со скидкой</a>
        </div>
    </div>
</section>
<!--/spec-->
<!--s4-->
<section class="s4">
    <div class="wrap">
        <h2 class="title">Использовать накладные ресницы <span>невероятно просто!</span></h2>
        <!--list-v3-->
        <ul class="list-v3">
            <li>
                <div class="pic">
                    <div class="num">1</div>
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s4-im1.jpg" alt="">
                </div>
                <p>Ресницы наклеивают только после того, как вы полностью нанесли на глаза макияж.</p>
            </li>
            <li>
                <div class="pic">
                    <div class="num">2</div>
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s4-im2.jpg" alt="">
                </div>
                <p>Возьмите полоску ресниц в руки, держите за кончики двумя руками.</p>
            </li>
            <li>
                <div class="pic">
                    <div class="num">3</div>
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/s4-im3.jpg" alt="">
                </div>
                <p>Прижмите полоску к веку, размещая её как можно ближе к корням собственных ресничек.</p>
            </li>
            <li>
                <div class="txt">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/product-im3.png" alt=""> Каждая
                    маленькая ресничка имеет правильный естественный изгиб и заостренный кончик, поэтому смотрится очень
                    естественно.
                </div>
            </li>
        </ul>
        <!--/list-v3-->
    </div>
</section>
<!--/s4-->
<!--reviews-->
<section class="reviews">
    <div class="wrap">
        <h2 class="title">Отзывы девушек, которые уже опробовали <span>самоклеящиеся ресницы</span></h2>
        <!--slider-rev-->
        <div class="slider-rev">
            <!--item-->
            <div class="item">
                <!--photo-->
                <div class="photo">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/rev1.jpg" alt="">
                    <div class="info">
                        <h4>Мария Короткова</h4>
                        <p>24 года, Санкт-Петербург</p>
                    </div>
                </div>
                <!--/photo-->
                <!--desc-->
                <div class="desc">
                    <!-- <p>Без этой туши я теперь никуда!</p> -->
                    Самоклеющиеся накладные ресницы очень меня порадовали, хорошего качества, быстро одеваются. Так что
                    однозначно советую, заказывайте без раздумий!
                </div>
                <!--/desc-->
            </div>
            <!--/item-->
            <!--item-->
            <div class="item">
                <!--photo-->
                <div class="photo">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/rev2.jpg" alt="">
                    <div class="info">
                        <h4>Кристина Новикова</h4>
                        <p>29 лет, Москва</p>
                    </div>
                </div>
                <!--/photo-->
                <!--desc-->
                <div class="desc">
                    <!-- <p>Увеличивает объем без ограничений!</p> -->
                    Работаю с накладными магнитными ресницами уже 2 месяца и абсолютно ни о чем не жалею. Переход от
                    одного образа, ко второму – занимает всего несколько минут. Важнее всего (для меня), данная
                    технология не требует специальных навыков, любой новичок научится
                    с ними работать всего за пару минут, даже без посторонней помощи!
                </div>
                <!--/desc-->
            </div>
            <!--/item-->
            <!--item-->
            <div class="item">
                <!--photo-->
                <div class="photo">
                    <img src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/rev3.jpg" alt="">
                    <div class="info">
                        <h4>Вероника Волкова</h4>
                        <p>35 лет, Киров</p>
                    </div>
                </div>
                <!--/photo-->
                <!--desc-->
                <div class="desc">
                    <!-- <p>Первый раз вижу такой эффект!</p> -->
                    Узнав о накладных магнитных ресницах я вздохнула с облегчением, это очень полезное изобретение мира
                    косметологии. Самое важное - они не раздражают нежную кожу века и не контактируют со слизистой.
                    Рекомендую!
                </div>
                <!--/desc-->
            </div>
            <!--/item-->
        </div>
        <!--/slider-rev-->
        <a href="#order" class="button-m">Заказать со скидкой</a>
    </div>
</section>
<!--/reviews-->
<!--order-info-->
<section class="order-info">
    <div class="wrap">
        <h2 class="title"><span>Доставка</span> и оплата</h2>
        <!--order-list-->
        <ul class="order-list">
            <li>
                <div class="txt">
                    <h4>Быстрая доставка</h4>
                    <p>
                        Почтой в течение 3-10 рабочих дней. Стоимость доставки от 550р. Оставьте заявку и вам перезвонят
                        для оформления заказа.
                    </p>
                </div>
            </li>
            <li>
                <div class="txt">
                    <h4>Оплата при получении</h4>
                    <p>
                        Мы не принимаем предоплат. Оплата производится только при получении заказа на руки.
                    </p>
                </div>
            </li>
            <li>
                <div class="txt">
                    <h4>Гарантии</h4>
                    <p>
                        Перед отправкой все товары проходят тщательную проверку на предмет брака.
                    </p>
                </div>
            </li>
        </ul>
        <!--/order-list-->
    </div>
</section>
<!--/order-info-->
<!--offer-->
<section class="offer bottom">
    <div class="wrap">
        <div class="main-title">Cамоклеящиеся <span>накладные ресницы</span></div>
        <div class="sub-title">Завораживающий взгляд за 1 минуту!</div>
        <div class="sale">Скидка <b>-50%</b></div>
        <!--order-box-->
        <div class="order-box">
            <!--price-->
            <div class="price">
                <div class="old">
                    <p>Цена:</p>
                    <div class="val"><span>{{ $prices[1]['originalPrice'] }}</span><i>{{ $prices[1]['currency'] }}</i>
                    </div>
                </div>
                <div class="new">{{ $prices[1]['amount'] }}<i>{{ $prices[1]['currency'] }}</i></div>
            </div>
            <!--/price-->
            <!--m1-form-->
            <form class="main-order-form m1-form" id="order" method="post" action="#">
                <input class="field" type="text" name="name" placeholder="Введите ваше имя" required>
                <input class="field" type="tel" name="phone" placeholder="Введите ваш телефон" required>
                <button class="button-m">Заказать со скидкой</button>
            </form>
            <!--/m1-form-->
            <div class="stock"><b>17 шт</b> осталось по акции!</div>
        </div>
        <!--/order-box-->
    </div>
</section>
<!--/offer-->
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}purplerelaxFiles/magneticeyelashes/init.js"></script>
@include('components.pixel_footer')
</body>
</html>
