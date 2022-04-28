<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/crevozabastu/libs.css">
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/crevozabastu/index.css">
    <style>
        @font-face {
            font-family: 'Calibri';
            src: url("{{ asset('/') }}fonts/Calibri.woff2") format("woff2"), url("{{ asset('/') }}fonts/Calibri.woff") format("woff");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Calibri-Bold';
            src: url("{{ asset('/') }}fonts/Calibri-Bold.woff2") format("woff2"), url("{{ asset('/') }}fonts/Calibri-Bold.woff") format("woff");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Calibri-Italic';
            src: url("{{ asset('/') }}fonts/Calibri-Italic.woff2") format("woff2"), url("{{ asset('/') }}fonts/Calibri-Italic.woff") format("woff");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Calibri-Light';
            src: url("{{ asset('/') }}fonts/Calibri-Light.woff2") format("woff2"), url("{{ asset('/') }}fonts/Calibri-Light.woff") format("woff");
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<section class="header">
    <div class="container">
        <div class="logo"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/logo.png" class="img-fluid" alt=""></div>
        <ul class="menu">
            <li class="page-scroll" data-scroll-id="#advantage"><a href="#">Преимущества</a></li>
            <li class="page-scroll" data-scroll-id="#description"><a href="#">Описание</a></li>
            <li class="page-scroll" data-scroll-id="#instructions"><a href="#">Использование</a></li>
            <li class="page-scroll" data-scroll-id="#how-we-work"><a href="#">Доставка</a></li>
            <li class="page-scroll" data-scroll-id="#reviews"><a href="#">Отзывы</a></li>
        </ul>
    </div>
</section>
<section class="top-section">
    <div class="container">
        <div class="img-mob"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/dark-logo.png" class="img-fluid" alt=""></div>
        <div class="left">
            <div class="product-box">
                <div class="present">
                    Подарок
                    <div>насадка-распылитель</div>
                </div>
                <div class="product"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/plus-product.png" class="img-fluid" alt=""></div>
                <div class="discount">СКИДКА <span>-50%</span></div>
                <div class="bottom-text">Количество товара ограничено!</div>
            </div>
        </div>
        <div class="right">
            <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/dark-logo.png" class="img-fluid" alt=""></div>
            <div class="subtitle">Многофункциональный шланг для полива Hose Max X</div>
            <ul>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/crevozabastu/check-mark.png" alt="">Не образует петлей и заломов
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/crevozabastu/check-mark.png" alt="">Весит около полутора килограммов
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/crevozabastu/check-mark.png" alt="">Увеличивается почти в три раза
                </li>
            </ul>
            <div class="price">
                <div class="old-price">
                    {{ $prices[1]['originalPrice'] }} RSD
                </div>
                <div class="current-price">
                    {{ $prices[1]['amount'] }} RSD
                </div>
            </div>
            <a href="#" class="btn btn_blue page-scroll" data-scroll-id="#order-section__bottom">Заказать</a>
        </div>
    </div>
</section>
<section class="advantage" id="advantage">
    <div class="advantage__top">
        <div class="container">
            <h4>7 режимов полива с помощью подарочной насадки-распылителя</h4>
            <div class="main">
                <div class="imgs"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/imgs.jpg" class="img-fluid" alt=""></div>
                <div class="hose">
                    <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/hose.png" class="img-fluid" alt=""></div>
                    <div class="tooltip tooltip-1">
                        <span>2 - </span>Ливень
                    </div>
                    <div class="tooltip tooltip-2">
                        <span>3 - </span>Аэрозоль
                    </div>
                    <div class="tooltip tooltip-3">
                        <span>4 - </span>Полная струя
                    </div>
                    <div class="tooltip tooltip-4">
                        <span>5- </span>Конус
                    </div>
                    <div class="tooltip tooltip-5">
                        <span>6 - </span>Центральная струя
                    </div>
                    <div class="tooltip tooltip-6">
                        <span>7 - </span>Плоская струя
                    </div>
                    <div class="tooltip tooltip-7">
                        <span>1 - </span>Душ
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="advantage__bottom">
        <div class="container">
            <h4>Легкий и компактный шланг <span>Hose Max X</span><br> Ваш лучший помощник</h4>
            <div class="main">
                <ul>
                    <li>
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/1.png" class="img-fluid" alt=""></div>
                        <div class="text">Для мойки окон или фасада дома</div>
                    </li>
                    <li>
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/2.png" class="img-fluid" alt=""></div>
                        <div class="text">Для мытья машины или автофургона</div>
                    </li>
                    <li>
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/3.png" class="img-fluid" alt=""></div>
                        <div class="text">Для ухода за растениями в саду</div>
                    </li>
                    <li>
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/4.png" class="img-fluid" alt=""></div>
                        <div class="text">Для полива рассады и цветов</div>
                    </li>
                    <li>
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/5.png" class="img-fluid" alt=""></div>
                        <div class="text">Для гаража и дачного участка</div>
                    </li>
                    <li>
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/6.png" class="img-fluid" alt=""></div>
                        <div class="text">Незаменим в ландшафтном дизайне!</div>
                    </li>
                    <li>
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/7.png" class="img-fluid" alt=""></div>
                        <div class="text">Необходим в сельском фозяйстве!</div>
                    </li>
                </ul>
                <div class="img-circle"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/circle.png" class="img-fluid" alt=""></div>
            </div>
        </div>
    </div>
</section>
<section class="order-section">
    <div class="order-section__top">
        <div class="top-panel">
            <div class="container">
                <div class="title">Успейте заказать универсальный шланг по скидке!</div>
                <div class="subtitle">Саморастягивающийся шланг увеличивается до 3-ех раз</div>
            </div>
        </div>
        <div class="container">
            <div class="main">
                <div class="discount">СКИДКА <span>-50%</span></div>
                <div class="hose-hands">
                    <div class="text">
                        Подарок
                        <div>насадка-распылитель</div>
                    </div>
                    <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/hose-hands.png" class="img-fluid" alt=""></div>
                </div>
                <div class="hose">
                    <div class="text">
                        ВСЕГО ЗА
                        <div>
                            {{ $prices[1]['amount'] }} RSD
                        </div>
                    </div>
                    <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/hose5.png" class="img-fluid" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="order-section__bottom" id="order-section__bottom">
        <div class="container">
            <div class="title">Количество шлангов на складе ограничено.<br> Не откладывайте покупку на потом. Экономьте сейчас!</div>
{{--            <div class="meter" id="progressBar1">--}}
{{--                <span style="width: 0%"></span>--}}
{{--                <div class="percent">0%</div>--}}
{{--            </div>--}}
            <!-- <div class="progress-bar"><img src=".//img/order-section/progressbar75.png" class="img-fluid" alt=""></div> -->
            <form class="order-form" name="form1" action="#" method="POST">
                <div class="form-group">
                    <label for="name_first" class="control-label">Имя:</label>
                    <input type="text" class="form-control" name="name" id="name_first" placeholder="Имя" required>
                </div>
                <div class="form-group">
                    <label for="phone" class="control-label">Телефон:</label>
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Телефон" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit">Заказать</button>
                </div>
            </form>
{{--            <div class="bottom-text">Введите ваше имя и номер телефона, кликните по кнопке «Заказать» и мы Вам перезвоним!</div>--}}
        </div>
    </div>
</section>
<div class="desc-inst">
    <section class="description" id="description">
        <div class="container">
            <div class="img-hose">
                <div class="discount">СКИДКА <span>-50%</span></div>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/hose3.png" class="img-fluid" alt=""></div>
            </div>
            <div class="info">
                <h4>Универсальный шланг для полива Hose Max X Ознакомьтесь с его характеристиками</h4>
                <table>
                    <tr>
                        <td>Диаметр</td>
                        <td>20 мм</td>
                    </tr>
                    <tr>
                        <td>Вес</td>
                        <td>менее 1600 г</td>
                    </tr>
                    <tr>
                        <td>Цвет</td>
                        <td>синий</td>
                    </tr>
                    <tr>
                        <td>Материал шланга</td>
                        <td>нейлон, тканое полиэфирное полотно</td>
                    </tr>
                    <tr>
                        <td>Материал арматуры</td>
                        <td>ABS-пластик, латекс</td>
                    </tr>
                    <tr>
                        <td>Температура воды</td>
                        <td>от 0 до 36 градусов Цельсия</td>
                    </tr>
                    <tr>
                        <td>Давление воды</td>
                        <td>от 2 до 16 атмосфер</td>
                    </tr>
                </table>
                <div class="list-box">
                    <div class="list-title">Комплект поставки:</div>
                    <ul>
                        <li>
                            <span>1.</span> Универсальный шланг для полива Hose Max X
                        </li>
                        <li>
                            <span>2.</span> Подарочная насадка-распылитель
                        </li>
                        <li>
                            <span>3.</span> Клапан
                        </li>
                        <li>
                            <span>4.</span> Фирменная коробка
                        </li>
                        <li>
                            <span>5.</span> Инструкция по эксплуатации
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="instructions">
        <div class="scroll-to" id="instructions"></div>
        <div class="container">
            <div class="info">
                <h4>Как работать с шлангом для полива <span>Hose Max X</span>:</h4>
                <ul>
                    <li>
                        <div>01</div>
                        <p>Закройте клапан на шланге.</p>
                    </li>
                    <li>
                        <div>02</div>
                        <p>Подключите шланг к источнику воды (перекрытому)
                            и откройте воду. Через несколько секунд шланг
                            достигнет нужной длины под напором воды.
                        </p>
                    </li>
                    <li>
                        <div>03</div>
                        <p>Присоедините насадку-разбрызгиватель к клапану.</p>
                    </li>
                    <li>
                        <div>04</div>
                        <p>Откройте клапан. Вода польется через насадку,
                            Вы можете выбрать нужный режим полива
                            (всего 7 режимов).
                        </p>
                    </li>
                    <li>
                        <div>05</div>
                        <p>После того, как полив закончен, перекройте воду
                            в источнике. Через несколько секунд вся вода выльется
                            из шланга, и он вернется к первоначальным размерам.
                        </p>
                    </li>
                    <li>
                        <div>06</div>
                        <p>Отсоедините шланг и уберите его в место для хранения.</p>
                    </li>
                </ul>
                <a href="#" class="btn btn_blue page-scroll" data-scroll-id="#order-section__bottom">Заказать</a>
            </div>
            <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/plant.png" class="img-fluid" alt=""></div>
        </div>
    </section>
</div>
<section class="main-advantages">
    <div class="main-advantages__top">
        <div class="container">
            <h3>Ключевые преимущества шланга <span>"Hose Max X"</span>:</h3>
            <div class="items">
                <div class="item">
                    <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/i1.png" class="img-fluid" alt=""></div>
                    <h4>Большая длина</h4>
                    <p>Хотя в "спокойном" состоянии шланг не превышает <span class="yellow">12 метров</span>, стоит подключить его к воде, как он <span class="yellow text-uppercase text-calibri-bold">УВЕЛИЧИТСЯ</span> почти В <span class="yellow text-uppercase text-calibri-bold">ТРИ РАЗА</span>
                        — до 30 метров! Этого вполне достаточно, чтобы полить клумбу
                        или газон перед домом, помыть машину и т.п. Если же такой длины будет недостаточно, Вы всегда можете купить еще один аналогичный шланг
                        и <span class="yellow text-calibri-bold">присоединить его к вашему.</span>
                    </p>
                </div>
                <div class="item">
                    <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/i2.png" class="img-fluid" alt=""></div>
                    <h4>Комфортное использование</h4>
                    <p>"Икс Хоз" не перекручивается и не запутывается, <span class="yellow  text-calibri-bold">не образует петлей и заломов.</span> Вода беспрепятственно льется, даже если шланг перегибается.</p>
                </div>
                <div class="item">
                    <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/i3.png" class="img-fluid" alt=""></div>
                    <h4>Супер компактность и удобное хранение</h4>
                    <p>Сухой шланг <span class="yellow text-calibri-bold">весит около полутора килограммов</span> и не занимает много места (например, без проблем помещается в цветочном горшке).</p>
                </div>
                <div class="bottom-text">Но и это еще не все! В ПОДАРОК Вы получите специальную насадку для шланга с 7 режимами!</div>
            </div>
        </div>
    </div>
    <div class="main-advantages__bottom">
        <div class="container">
            <h4>Двойная конструкция гарантирует максимальное удобство и долговечность</h4>
            <div class="main">
                <div class="img-hose"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/hose-cut.png" class="img-fluid" alt=""></div>
                <div class="text">
                    <div class="item">
                        <h6>Внутренний шланг из ABS-пластика и латекса</h6>
                        <p>Суперпрочный и гибкий материал обеспечивает необходимое расширение под давлением воды. Благодаря этому универсальный шланг для полива «Икс Хоз» способен растягиваться в несколько раз.</p>
                    </div>
                    <div class="item">
                        <h6>Внешний шланг из нейлона и тканого полиэфирного полотна</h6>
                        <p>Жесткая износостойкая материя надежно защищает
                            внутреннюю часть от порезов, трещин, заломов
                            и других повреждений. В "спокойном" виде внешний
                            чехол собран в складки, это сделано для того, чтобы
                            он не мешал растягиваться внутреннему материалу.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="work-reviews">
    <section class="how-we-work" id="how-we-work">
        <div class="container">
            <div class="info">
                <h4>Как мы работаем</h4>
                <p>Доставка осуществляется в течение 3х-7 дней.
                    Оплата товара производится на пункте выдачи посылки.
                </p>
                <div class="items">
                    <div class="item">
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/j1.png" class="img-fluid" alt=""></div>
                        <p>Вы оставляете заявку</p>
                    </div>
                    <div class="item">
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/j2.png" class="img-fluid" alt=""></div>
                        <p>Мы связываемся с Вами</p>
                    </div>
                    <div class="item">
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/j3.png" class="img-fluid" alt=""></div>
                        <p>Отправляем вашу посылку</p>
                    </div>
                    <div class="item">
                        <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/j4.png" class="img-fluid" alt=""></div>
                        <p>Вы оплачиваете ее на почте</p>
                    </div>
                </div>
            </div>
            <div class="img-box"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/hose4.png" class="img-fluid" alt=""></div>
        </div>
    </section>
    <section class="reviews">
        <div class="scroll-to" id="reviews"></div>
        <div class="container">
            <div class="slider">
                <h4>Что о нас говорят наши клиенты</h4>
                <div class="owl-carousel">
                    <div class="slide">
                        <div class="top">
                            <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/8.jpg" class="img-fluid" alt=""></div>
                            <div class="contact">
                                <div class="name">Сергей Рашковский</div>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="comment">
                                <p>Добрый день! Купил шланг для полива Hose Max X и хочу выделить 5 его преимуществ: он удобен, мало весит, не перекручивается, в пассивном состоянии аккуратно лежит под краном и не мешает, низкая цена.</p>
                                <p>Рекомендую всем кто не испытывает затруднений с напором воды. Сейчас заказал еще один своим соседям по их просьбе. </p>
                            </div>
                            <div class="date">
                                <div class="time">16:24</div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="top">
                            <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/6.jpg" class="img-fluid" alt=""></div>
                            <div class="contact">
                                <div class="name">Артем Малышев</div>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="comment">
                                <p>Он и правда очень легкий и почти мгновенно приобретает исходный размер после окончания полива. Насчет увеличения, мне почему-то казалось что он будет потолще. Однако, шланг хорошо управляем и превосходно справляется с мытьем автомобиля и поливом цветов, потому не путается под ногами и сделан из легкого материала.</p>
                            </div>
                            <div class="date">
                                <div class="time">13:21</div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="top">
                            <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/4.jpg" class="img-fluid" alt=""></div>
                            <div class="contact">
                                <div class="name">Виктория Степина</div>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="comment">
                                <p>Поливать стало удовольствием, не приходится таскать за собой резиновый шланг. Что самое приятное - во время полива шланг нигде не пропускает воду, его двойная конструкция придает надежности. Синий цвет не показывает загрязнений.</p>
                                <p>Шланг Hose Max X полезен и отлично помогает по хозяйству!</p>
                            </div>
                            <div class="date">
                                <div class="time">11:02</div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="top">
                            <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/7.jpg" class="img-fluid" alt=""></div>
                            <div class="contact">
                                <div class="name">Вениамин Щербин</div>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="comment">
                                <p>Отличный шланг реально облегчает жизнь не только садоводам, а всем у кого есть участок земли. Легкий и компактный поливочный шланг по низкой стоимости – удача. Каждый режим насадки распылителя проверил – все исправно. Благодарю!</p>
                            </div>
                            <div class="date">
                                <div class="time">12:22</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="bottom-section">
    <div class="container">
        <div class="top">
            <h2>Универсальный шланг Hose Max X Ваш надежный помощник</h2>
            <div class="subtitle">Не перекручивается и не запутывается, не образует петлей и заломов</div>
        </div>
        <div class="bottom">
            <div class="img-hose">
                <div class="discount">СКИДКА <span>-50%</span></div>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/hose3.png" class="img-fluid" alt=""></div>
                <div class="bottom-section-price-mob">
                    SAMO ZA <span>{{ $prices[1]['amount'] }} RSD</span>
                </div>
                <a href="#" class="btn btn_red page-scroll" data-scroll-id="#order-section__bottom">Заказать</a>
            </div>
            <div class="img-hose-2">
                <div class="bottom-section-price">
                    SAMO ZA <span>{{ $prices[1]['amount'] }} RSD</span>
                </div>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/crevozabastu/hose2.png" class="img-fluid" alt=""></div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}dailysharkFiles/crevozabastu/libs.js"></script>
<script src="{{ asset('/') }}shared_files/jquery.fancybox.min.js"></script>
{{--<script src="https://xhoses.xcartpro.com/js/LPFunctions.js"></script>--}}
{{--<script src="https://xhoses.xcartpro.com/js/common.js"></script>--}}
<script>
    var pageScroll = function (userSettings) {
        var defaultSettings = {
            speed : 1250,
            easing : '', // easeInOutExpo
            offset : 0
        }

        var settings = $.extend(defaultSettings, (userSettings || {}));

        $(settings.selector).each(function () {
            $(this).on('click', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: ( $($anchor.attr('data-scroll-id') ).offset().top - settings.offset)
                }, settings.speed, settings.easing, function () {
                    // settings.callback();
                });

                event.preventDefault();
            });
        });
    }

    $(document).ready(function(){
        $('.reviews .slider .owl-carousel').owlCarousel({
            loop:true,
            margin:0,
            navText: ["", ""],
            items:1,
            nav:true,
        });
        pageScroll({
            selector : '.page-scroll',
            speed : 1000,
        });
    });
</script>
</body>
</html>
