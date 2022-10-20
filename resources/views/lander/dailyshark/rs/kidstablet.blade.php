<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/kidstablet/favicon.ico">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/kidstablet/style.css">
    <style>
        @font-face {
            font-family: 'DINRoundPro';
            src: url('{{ asset('/') }}fonts/subset-DINRoundPro-Light.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-DINRoundPro-Light.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-DINRoundPro-Light.ttf') format('truetype');
            font-weight: 300;
            font-style: normal;
        }
        @font-face {
            font-family: 'DINRoundPro';
            src: url('{{ asset('/') }}fonts/subset-DINRoundPro.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-DINRoundPro.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-DINRoundPro.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'DINRoundPro';
            src: url('{{ asset('/') }}fonts/subset-DINRoundPro-Medi.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-DINRoundPro-Medi.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-DINRoundPro-Medi.ttf') format('truetype');
            font-weight: 500;
            font-style: normal;
        }
        @font-face {
            font-family: 'DINRoundPro';
            src: url('{{ asset('/') }}fonts/subset-DINRoundPro-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-DINRoundPro-Bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-DINRoundPro-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
<div class="main_wrapper">
    <section class="offer">
        <h1 class="main_title" style="color:#013162;">Графический планшет для творчества</h1>
        <div class="box">
            <img src="{{ asset('/') }}dailysharkFiles/kidstablet/bgg.jpg" alt="">
            <div class="sale">
                <p>скидка <span>50%</span></p>
            </div>
        </div>
        <div class="bottom">
            <ul class="list1">
                <li>Вы можете создавать рисунки</li>
                <li>Чертить все, что вам нужно</li>
                <li>Писать или делать подсчеты</li>
            </ul>
            <div class="price clearfix">
                <div class="old">
                     <span>
                        {{ $prices[1]['originalPrice'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </div>
                <div class="new">
                     <span>
                        {{ $prices[1]['amount'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </div>
            </div>
            <a href="#order_form" class="button-m">Заказать со скидкой</a>
            <p class="products_count">Осталось <span>18</span> планшетов по акции</p>
        </div>
    </section>
    <section class="sect2 spisok3">
        <h2 class="title">  <span>Особенности планшета</span>
        </h2>
        <ul>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/s2_img3.jpg">
                <h3>Удаление записей одной кнопкой</h3>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/s2_img2.jpg">
                <h3>Стилус крепится прямо на корпус</h3>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/s2_img1.jpg">
                <h3>Безвреден для глаз</h3>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/s2_img4.jpg">
                <h3>Очень легкий и тонкий</h3>
            </li>
        </ul>
        <a href="#order_form" class="button-m">Заказать со скидкой</a>
    </section>
    <section class="sect3 color_theme">
        <h2 class="title">Лучшая игрушка для маленьких непосед</h2>
        <img src="{{ asset('/') }}dailysharkFiles/kidstablet/s3_img.jpg" alt="">
        <p>Планшет для рисования Writing Tablet Planshet это источник нескончаемого вдохновения. Ребенок может рисовать что-то новое
            снова и снова, при этом вам не придется тратить деньги на покупку новых альбомов или бумаги.
        </p>
        <ul class="list1">
            <li>Улучшает творческие способности</li>
            <li>Повышает умственную активность</li>
            <li>Развивает моторику</li>
            <li>Формирует ребенка как личность</li>
        </ul>
        <br>
    </section>
    <section class="sect4">
        <img src="{{ asset('/') }}dailysharkFiles/kidstablet/colors.jpg" alt="">
        <h4>Характеристики:</h4>
        <ul class="comlect">
            <li>
                <span>1</span>
                <p>Материал: монохромный LCD с пленкой, материал корпуса: ABS пластик</p>
            </li>
            <li>
                <span>2</span>
                <p>Комплектация: планшет, перо</p>
            </li>
            <li>
                <span>3</span>
                <p>Диагональ экрана: 12 дюймов</p>
            </li>
            <li>
                <span>4</span>
                <p>Вес: 260 грамм</p>
            </li>
            <li>
                <span>5</span>
                <p>Размер в упаковке: 280.8 х 185 х 4.8 мм</p>
            </li>
        </ul>
        <a href="#order_form" class="button-m">Заказать со скидкой</a>
    </section>
    <section class="rev1 color_theme">
        <h2 class="title">Отзывы покупателей</h2>
        <div class="reviews_slider_rev1">
            <div class="rev1-inner">
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/rev3.jpg" alt="">
                <p>
                    Мои дети очень любят рисовать. Помимо рисования на бумаге, мы ещё иногда рисуем на мольберте. Поэтому, когда я увидела современный LCD планшет, то сразу же решила его купить. Цена составила всего
                    {{ $prices[1]['amount'] }}
                    {{ $prices[1]['currency'] }}
                    . Кстати, подобные планшеты я ещё видела в магазине Светофор, но в разы дороже.
                </p>
                <b class="info">Ольга, 28 лет</b>
            </div>
            <div class="rev1-inner">
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/rev2.jpg" alt="">
                <p>У дочки в классе стали появляться планшеты для рисования Writing Tablet Planshet и она захотела себе такой. Поэтому и заказали у вас на сайте. Хотя подобные игрушки у нее были и ранее, но данный планшет сделан как настоящий: стильный и тонкий, а также качество очень хорошое. </p>
                <b class="info">Анастасия, 34 года</b>
            </div>
            <div class="rev1-inner">
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/rev1.jpg" alt="">
                <p>Тоже купили детям этот Writing Tablet Planshet. Этот планшет удобно брать в дорогу, мало места занимает и писать на нем можно очень долго (заявлено, что выдержит более 500 000 рисунков), а если взять предмет похожий на стилус, то можно и вдвоем рисовать/играть (в крестики-нолики, к примеру). </p>
                <b class="info">Олег, 31 год</b>
            </div>
        </div>
        <a href="#order_form" class="button-m">Заказать со скидкой</a>
    </section>
    <section class="vote color_theme">
        <h2 class="title">Понравилась ли вашему ребенку игрушка?</h2>
        <div class="addreview">
            <div class="width">
                <div class="coll-50 reviews_test">
                    <div class="test">
                        <div class="review_result">
                            <p>Да, ребенок просто в восторге!</p>
                            <div class="widthpoll">
                                <div class="line green_result" style="width: 76%;"></div>
                                <div class="result_item">76%</div>
                            </div>
                        </div>
                        <div class="review_radio green_radio">
                            <input type="radio"> <span>Да, ребенок просто в восторге!</span>
                        </div>
                        <div class="review_result">
                            <p>Нет, не то, что я ожидал(а)</p>
                            <div class="widthpoll">
                                <div class="line red_result" style="width: 2%;"></div>
                                <div class="result_item">2%</div>
                            </div>
                        </div>
                        <div class="review_radio red_radio">
                            <input type="radio"> <span>Нет, не то, что я ожидал(а)</span>
                        </div>
                        <div class="review_result">
                            <p>Не покупал(а), узнать результаты</p>
                            <div class="widthpoll">
                                <div class="line blue_result" style="width: 22%;"></div>
                                <div class="result_item">22%</div>
                            </div>
                            <p class="votenum">Проголосовало пользователей: <span>874</span></p>
                        </div>
                        <div class="review_radio blue_radio">
                            <input type="radio"> <span>Не покупал(а), узнать результаты</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="deliv1">
        <h2 class="title">Как мы работаем</h2>
        <div class="deliv1_inner">
            <div class="blue1 di1">
                <h3>Доставка</h3>
                <p>Доставка почтой в течение 3-10 рабочих дней.
                </p>
            </div>
        </div>
        <div class="deliv1_inner">
            <div class="purple di2">
                <h3>Гарантии</h3>
                <p>Мы всегда проверяем товар перед отправкой и гарантируем 100% качество.</p>
            </div>
        </div>
        <div class="deliv1_inner">
            <div class="green di3">
                <h3>ОПЛАТА</h3>
                <p>Оплата заказов осуществляется непосредственно по факту получения заказа.</p>
            </div>
        </div>
        <div class="deliv1_inner">
            <img class="center_img" src="{{ asset('/') }}dailysharkFiles/kidstablet/tov-4.jpg">
        </div>
    </section>
    <section class="offer">
        <h1 class="main_title" style="color:#013162;">Графический планшет для творчества</h1>
        <div class="box">
            <img src="{{ asset('/') }}dailysharkFiles/kidstablet/bgg.jpg" alt="">
            <div class="sale">
                <p>скидка <span>50%</span></p>
            </div>
        </div>
        <div class="bottom">
            <ul class="list1">
                <li>Вы можете создавать рисунки</li>
                <li>Чертить все, что вам нужно</li>
                <li>Писать или делать подсчеты</li>
            </ul>
            <div class="price clearfix">
                <div class="old">
                     <span>
                        {{ $prices[1]['originalPrice'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </div>
                <div class="new">
                     <span>
                        {{ $prices[1]['amount'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </div>
            </div>
            <h4>Оставьте заявку</h4>
            <p>и получите планшет для рисования Writing Tablet Planshet <span>по скидке 50%</span>
            </p>
            <form id="order_form" class="main-order-form m1-form"
                  action="#" method="post">
                <input name="name" type="text" placeholder="Введите ваше имя" required="">
                <input name="phone" type="tel" placeholder="Введите ваш телефон" required="">
                <button class="button-m">Заказать со скидкой</button>
            </form>
            <p class="products_count">Осталось <span>18</span> планшетов по акции</p>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/kidstablet/init.js"></script>
</body>
</html>
