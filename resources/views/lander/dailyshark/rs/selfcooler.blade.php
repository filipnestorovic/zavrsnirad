<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/selfcooler/favicon.ico" type="image/i-con" />
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/selfcooler/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/selfcooler/styles.css" />
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
<section class="offer_section">
    <div class="wrapper clearfix">
        <h1 class="main_title"><span>Беслопастной</span></h1>
        <h2 class="main_subtitle">шейный вентилятор</h2>
        <ul class="ofr_bull">
            <li>Прохлада в одно касание</li>
            <li>Стильный аксессуар</li>
            <li>Легкий и компактный</li>
            <li>Охлаждения на 360°</li>
        </ul>
        <div class="sale">
                    <span>
                        Скидка <b>50<small>%</small></b>
                    </span>
        </div>
        <div class="formbox">
            <div class="prod_count">
                <span>15<small>шт.</small></span> осталось по акции!
            </div>
            <div class="price clearfix">
                <div class="old">
                    Обычная цена:
                    <p>
                        <span>{{ $prices[1]['originalPrice'] }} </span><small> {{ $prices[1]['currency'] }}</small>
                    </p>
                </div>
                <div class="new">
                    Цена по акции:
                    <p>
                        <span>{{ $prices[1]['amount'] }}</span><small> {{ $prices[1]['currency'] }}</small>
                    </p>
                </div>
            </div>

            <a href="#order_form" class="button-m">Заказать со скидкой</a>
        </div>
    </div>
</section>

<section class="sect2">
    <div class="wrapper">
        <h2 class="title">Преимущества<span> вентилятора</span></h2>
        <div class="content">
            <ul class="benef1">
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/ben1_img1.jpg" alt="" />
                    <p>3 режима работы</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/ben1_img2.jpg" alt="" />
                    <p>Тихая работа</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/ben1_img3.jpg" alt="" />
                    <p>Регулируемый угол наклона</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/ben1_img4.jpg" alt="" />
                    <p>Долговечный аккумулятор</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/ben1_img5.jpg" alt="" />
                    <p>48 отверстий для воздуха</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/ben1_img6.jpg" alt="" />
                    <p>Всегда свободные руки</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/ben1_img7.jpg" alt="" />
                    <p>Зарядка от USB</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/ben1_img8.jpg" alt="" />
                    <p>Мощный турбинный двигатель</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="video">
    <div class="wrapper">
        <h2 class="title"><span> Видеообзор</span></h2>

        <video src="{{ asset('/') }}dailysharkFiles/selfcooler/vid.mp4" width="100%" height="auto" preload="auto" playsinline="" webkit-playsinline="" controls="" draggable="true" poster="{{ asset('/') }}dailysharkFiles/selfcooler/poster.jpg" style="border-radius: 40px; margin-bottom: 30px;"></video>
    </div>
</section>
<section class="sect2">
    <div class="wrapper">
        <h2 class="title">
            <span>Надоела жара?</span><br />
            Перестаньте ее терпеть!
        </h2>
        <div class="content2">
            <img src="{{ asset('/') }}dailysharkFiles/selfcooler/sec.jpg" alt="" />
            <p>
                Теперь у вас появится персональная защита против нее - безлопастный портативный вентилятор, предназначен для ношения на шее, он станет настоящей находкой в душном офисе, метро, улице. Воздушный поток, создаваемый
                устройством, позволит с легкостью охладить лицо и затылок.
            </p>
            <p>
                Вы можете использовать вентилятор независимо от того, где вы находитесь, в парке, путешествуя на открытом воздухе, будучи на учебе в школе. Тихая работа портативного вентилятора не будет раздражать, и отвлекать даже
                во время работы.
            </p>
            <p>Его можно безопасно использовать детям и взрослым.</p>
        </div>
    </div>
</section>
<section class="sect3">
    <div class="wrapper">
        <h2 class="title">Особенности</h2>
        <ul class="benef2">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/selfcooler/accept.png" alt="" />
                <span>Дизайн продуман таким образом, что лопасти не захватывают волосы.</span>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/selfcooler/accept.png" alt="" />
                <span>3 скорости вращения вентиляторов – настраивайте охлаждение в зависимости от предпочтений</span>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/selfcooler/accept.png" alt="" />
                <span>Продукт разработан с учетом шумоподавления, поэтому вам не нужно беспокоиться о шуме вентилятора</span>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/selfcooler/accept.png" alt="" />
                <span>Современный стильный уникальный дизайн</span>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/selfcooler/accept.png" alt="" />
                <span>Мягкий силикон гнётся, вы можете отрегулировать угол, как вам удобно</span>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/selfcooler/accept.png" alt="" />
                <span>Легкий и портативный, вы можете носить его с собой </span>
            </li>
        </ul>
        <div class="action_block">
            <div class="timer">
                <p>Успейте заказать со <b>скидкой -50%!</b></p>
            </div>
            <a href="#order_form" class="button-m">Заказать со скидкой</a>
        </div>
    </div>
</section>
<section class="sect4">
    <div class="wrapper">
        <h2 class="title"><small style="color: #ff8d03;">Ветер никогда ещё не был таким приятным!</small> <span></span></h2>
        <div class="gallery owl-carousel">
            <img src="{{ asset('/') }}dailysharkFiles/selfcooler/gal1.jpg" alt="" />
            <img src="{{ asset('/') }}dailysharkFiles/selfcooler/gal2.jpg" alt="" />
            <img src="{{ asset('/') }}dailysharkFiles/selfcooler/gal3.jpg" alt="" />
            <img src="{{ asset('/') }}dailysharkFiles/selfcooler/gal4.jpg" alt="" />
        </div>
        <p>
            Турбинный двусторонний двигатель позволяет увеличить объем воздушного потока. Он втягивает воздух из окружающей атмосферы вверх, затем вокруг основного корпуса, пока не будет вытеснен через 48 крошечных отверстий вокруг
            шейного обода.
        </p>
        <p>
            <br />
            Еще одним преимуществом вентилятора есть наличие 3-х режимов обдува, что позволить использовать его как ребенку, так и взрослым. А дизайн продуман таким образом, что лопасти не захватывают волосы.
        </p>
        <br />
        <p>
            Вы сможете использовать его даже во время пробежек, и он не доставит вам никакого неудобства. Вы сможете носить его целый день, не снимая. Корпус вентилятора изготовлен из специального приятного на ощупь гипоаллергенного
            пластика, который не способен вызвать раздражений на коже.
        </p>
        <br />
        <p>Дизайн вентилятора в виде наушников, освобождающий ваши руки.</p>
    </div>
</section>

<section class="sect6">
    <div class="wrapper">
        <h2 class="title">Отзывы тех, кто уже заказал <span>Беслопастной шейный вентилятор</span></h2>
        <div class="reviews owl-carousel">
            <div class="rev_item">
                <div class="img">
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/rev1.jpg" alt="" />
                </div>
                <span>
                            <p><b>Виктория Долматова</b></p>
                        </span>
                <p>
                    Полезное устройство, спасает, когда в помещении нет кондиционера или когда на улице и листик с дерева не шелохнётся. Это устройство полезно, когда нет движения воздуха или в закрытом пространстве, или на улице
                    до/после обеда при спокойной ходьбе. Волосы в лопасти не попадают и я боялась, что шею может продуть))), но об этом можно не беспокоиться. Все в порядке!
                </p>
            </div>
            <div class="rev_item">
                <div class="img">
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/rev2.jpg" alt="" />
                </div>
                <p><b>Виктор Осипов</b></p>
                <p>
                    Отличное устройство. Приятно удивлен. Обдув хороший, удобно, работает долго. У меня нет кондиционера дома и иногда днем прямо невыносимо от жары сидеть за компьютером. Купил такой вентилятор, проблема решена.
                    Понравилось в нем все. От дизайна до работы. Стильный аксессуар, который, думаю, понравится многим.
                </p>
            </div>
            <div class="rev_item">
                <div class="img">
                    <img src="{{ asset('/') }}dailysharkFiles/selfcooler/rev3.jpg" alt="" />
                </div>
                <p><b>Снежана Волкова</b></p>
                <p>
                    Часто беру с собой на улицу. Надел на шею, включил и идешь с удовольствием. Меньше потеешь, всегда прохладно. Удобно, что скорости можно регулировать. Одного заряда хватает на целый день. Можно заряжать от
                    повербанка. Перед заказом были опасения, что будет неудобно на шее болтаться. Но нет. Можно очень хорошо закрепить благодаря тому, что душки вентиляторов можно загибать как угодно. В целом, покупкой очень
                    доволен. Вентилятор супер! Советую всем.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="sect7">
    <div class="wrapper">
        <h2 class="title"><b>Доставка</b> и оплата</h2>
        <ul class="order_list">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/selfcooler/order1.png" alt="" />
                <h4>Быстрая доставка</h4>
                <p>Почтой в течение 14 дней. Оставьте заявку и вам перезвонят для оформления заказа.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/selfcooler/order2.png" alt="" />
                <h4>Оплата при получении</h4>
                <p>Мы не принимаем предоплат. Оплата производится только при получении заказа на руки.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/selfcooler/order3.png" alt="" />
                <h4>Гарантии</h4>
                <p>Перед отправкой все товары проходят тщательную проверку на предмет брака.</p>
            </li>
        </ul>
    </div>
</section>
<section class="offer_section ofr_bottom">
    <div class="wrapper clearfix">
        <h1 class="main_title"><span>Беслопастной</span></h1>
        <h2 class="main_subtitle">шейный вентилятор</h2>
        <ul class="ofr_bull">
            <li>Прохлада в одно касание</li>
            <li>Стильный аксессуар</li>
            <li>Легкий и компактный</li>
            <li>Охлаждения на 360°</li>
        </ul>
        <div class="sale">
                    <span>
                        Скидка <b>50<small>%</small></b>
                    </span>
        </div>
        <div class="formbox">
            <div class="prod_count">
                <span>15<small>шт.</small></span> осталось по акции!
            </div>
            <div class="price clearfix">
                <div class="old">
                    Обычная цена:
                    <p>
                        <span>{{ $prices[1]['originalPrice'] }} </span><small> {{ $prices[1]['currency'] }}</small>
                    </p>
                </div>
                <div class="new">
                    Цена по акции:
                    <p>
                        <span>{{ $prices[1]['amount'] }}</span><small> {{ $prices[1]['currency'] }}</small>
                    </p>
                </div>
            </div>

            <form id="order_form" class="m1-form" action="#" method="post">
                <input type="text" name="name" placeholder="Введите ваше имя" required="" />
                <input type="tel" name="phone" placeholder="Введите ваш телефон" required="" />
                <button class="button-m" type="submit">Заказать со скидкой</button>
            </form>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/selfcooler/scripts.js"></script>
</body>
</html>
