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
    @include('components.display_errors')
    <section class="offer">
        <h1 class="main_title" style="color:#013162;">ТАБЛЕТ ЗА РАЗВИВАНЕ НА ТВОРЧЕСТВОТО ПРИ ДЕЦАТА</h1>
        <div class="box">
            <img src="{{ asset('/') }}dailysharkFiles/kidstablet/bgg.jpg" alt="">
            <div class="sale">
                <p>отстъпка <span>40%</span></p>
            </div>
        </div>
        <div class="bottom">
            <ul class="list1">
                <li>Рисуване и писане</li>
                <li>Учене на букви и цифри</li>
                <li>Децата вече няма да рисуват върху стените</li>
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
            <a href="#order_form" class="button-m">Поръчай сега</a>
            <p class="products_count">Остават още <span>18</span> броя на намаление</p>
        </div>
    </section>
    <section class="sect2 spisok3">
        <h2 class="title"><span>ХАРАКТЕРИСТИКИ НА ТАБЛЕТКИТЕ</span></h2>
        <ul>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/s2_img3.jpg">
                <h3>ИЗТРИВАНЕ НА ЗАПИСИ С ЕДИН БУТОН</h3>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/s2_img2.jpg">
                <h3>ПИСАЛКАТА СЕ ЗАКАЧВА ДИРЕКТНО НА KOРПУСА</h3>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/s2_img1.jpg">
                <h3>НЕ ВРЕДЯВА И НЕ НАПОРЯВА ОЧИТЕ</h3>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/s2_img4.jpg">
                <h3>МНОГО Е ЛЕК И ТЪНЪК</h3>
            </li>
        </ul>
        <a href="#order_form" class="button-m">Поръчай сега</a>
    </section>
    <section class="sect3 color_theme">
        <h2 class="title">НАЙ-ДОБРАТА ИГРАЧКА ЗА УСПОКОЯВАНЕ НА МАЛКО ДЕТЕ</h2>
        <img src="{{ asset('/') }}dailysharkFiles/kidstablet/s3_img.jpg" alt="">
        <p>
            Таблетът за деца е източник на безкрайно вдъхновение. Детето може да рисува нещо ново отново и отново и не е нужно да харчите пари за закупуване на нови книжки за оцветяване и хартия. Освен това децата няма да драскат по стените ви.
        </p>
        <ul class="list1">
            <li>Подобрява креативността</li>
            <li>Повишава умствената активност</li>
            <li>Развива двигателните умения</li>
            <li>Напълно безопасно и здравословно занимание за едно дете</li>
        </ul>
        <br>
    </section>
    <section class="sect4">
        <img src="{{ asset('/') }}dailysharkFiles/kidstablet/colors.jpg" alt="">
        <h4>ХАРАКТЕРИСТИКА:</h4>
        <ul class="comlect">
            <li>
                <span>1</span>
                <p>Материал: Монохромен LCD с филм <br> Материал на корпуса: ABS пластмаса</p>
            </li>
            <li>
                <span>2</span>
                <p>Съдържание на опаковката: таблет, писалка</p>
            </li>
            <li>
                <span>3</span>
                <p> Диагонал на екрана: 12 инча</p>
            </li>
            <li>
                <span>4</span>
                <p>Тегло: 260 грама</p>
            </li>
            <li>
                <span>5</span>
                <p>Размер на опаковката: 280,8 x 185 x 4,8 мм</p>
            </li>
        </ul>
        <a href="#order_form" class="button-m">Поръчай сега</a>
    </section>
    <section class="rev1 color_theme">
        <h2 class="title">ВПЕЧАТЛЕНИЯ НА КЛИЕНТИ</h2>
        <div class="reviews_slider_rev1">
            <div class="rev1-inner">
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/rev3.jpg" alt="">
                <p>Децата ми обичат да рисуват. Освен на хартия, понякога рисуваме и на статив. Видях стилен таблет и веднага реших да го купя. Цената беше много разумна. Между другото, виждах подобни таблети в детските магазини, но бяха много по-скъпи.</p>
                <b class="info">Иван Тодоров, 32 години</b>
            </div>
            <div class="rev1-inner">
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/rev2.jpg" alt="">
                <p>Дъщеря ми започна да купува книжки за оцветяване, но бързо ги надрасна и се отегчи. Купих  я този таблет и трябва да призная, че беше очарована от него. Тя е абсолютно възхитена от подаръка. Препоръчвам го на всички с деца, страхотно забавление за много малко пари.</p>
                <b class="info">Мария Петрова, 22 години</b>
            </div>
            <div class="rev1-inner">
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/rev1.jpg" alt="">
                <p>Купихме този таблет за писане за децата. Много е удобно да се вземе за път и децата като цяло са спокойни, докато шофират. Най-важното е, че вече не ми цапат седалката на колата, това ме побъркваше. Страхотно нещо, нека всеки родител го купи на детето си.</p>
                <b class="info">Георги Иванов, 28 години</b>
            </div>
        </div>
        <a href="#order_form" class="button-m">Поръчай сега</a>
    </section>
    <section class="vote color_theme">
        <h2 class="title">ХАРЕСА ЛИ ВАШЕТО ДЕТЕ ТАБЛЕТА?</h2>
        <div class="addreview">
            <div class="width">
                <div class="coll-50 reviews_test">
                    <div class="test">
                        <div class="review_result">
                            <p>Да, детето е във възторг</p>
                            <div class="widthpoll">
                                <div class="line green_result" style="width: 76%;"></div>
                                <div class="result_item">76%</div>
                            </div>
                        </div>
                        <div class="review_radio green_radio">
                            <input type="radio"> <span>Да, детето е във възторг</span>
                        </div>
                        <div class="review_result">
                            <p>Не, не е това, което очаквах</p>
                            <div class="widthpoll">
                                <div class="line red_result" style="width: 2%;"></div>
                                <div class="result_item">2%</div>
                            </div>
                        </div>
                        <div class="review_radio red_radio">
                            <input type="radio"> <span>Не, не е това, което очаквах</span>
                        </div>
                        <div class="review_result">
                            <p>Все още не съм купил, но ще видя резултата</p>
                            <div class="widthpoll">
                                <div class="line blue_result" style="width: 22%;"></div>
                                <div class="result_item">22%</div>
                            </div>
                            <p class="votenum">Брой гласове: <span>874</span></p>
                        </div>
                        <div class="review_radio blue_radio">
                            <input type="radio"> <span style="font-size: 15px;">Все още не съм купил, но ще видя резултата</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="deliv1">
        <h2 class="title">КАК РАБОТИМ</h2>
        <div class="deliv1_inner">
            <div class="blue1 di1">
                <h3>ДОСТАВКА</h3>
                <p>Доставка по пощата в рамките на 3-10 работни дни</p>
            </div>
        </div>
        <div class="deliv1_inner">
            <div class="purple di2">
                <h3>ГАРАНЦИЯ</h3>
                <p>Винаги проверяваме стоките преди доставка и гарантираме 100% качество</p>
            </div>
        </div>
        <div class="deliv1_inner">
            <div class="green di3">
                <h3>ПЛАЩАНЕ</h3>
                <p>Плащането се извършва на куриера при получаване на пратката</p>
            </div>
        </div>
        <div class="deliv1_inner">
            <img class="center_img" src="{{ asset('/') }}dailysharkFiles/kidstablet/tov-4.jpg">
        </div>
    </section>
    <section class="offer">
        <h1 class="main_title" style="color:#013162;">ТАБЛЕТ ЗА РАЗВИВАНЕ НА ТВОРЧЕСТВОТО У ДЕЦАТА</h1>
        <div class="box">
            <img src="{{ asset('/') }}dailysharkFiles/kidstablet/bgg.jpg" alt="">
            <div class="sale">
                <p>отстъпка <span>40%</span></p>
            </div>
        </div>
        <div class="bottom">
            <ul class="list1">
                <li>Рисуване и писане</li>
                <li>Учене на букви и цифри</li>
                <li>Децата вече няма да рисуват върху стените</li>
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
            <br>
            <h4 style="line-height: 2.2rem;">ВЪВЕДЕТЕ ДАННИ <br>ЗА ДОСТАВКА</h4>
            <p>и вземете таблет за деца <span>с 40% отстъпка</span></p>
            <form id="order_form" class="main-order-form m1-form" action="{{$orderRoute}}" method="post">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input name="name" type="text" placeholder="Име и фамилия" required="">
                <input name="phone" type="tel" placeholder="Телефон" required="">
                <input name="shipping_address" type="text" placeholder="Адрес" required="">
                <input name="shipping_city" type="text" placeholder="Град" required="">
                <button class="button-m">Поръчай сега</button>
            </form>
            <p class="products_count">Остават още <span>18</span> броя на намаление</p>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/kidstablet/init.js"></script>
@include('components.pixel_footer')
</body>
</html>
