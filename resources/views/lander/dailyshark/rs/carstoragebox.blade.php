<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/carstoragebox/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/carstoragebox/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/carstoragebox/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/carstoragebox/style.css">
</head>
<body>
<section class="block1">
    <div class="wrap">
        <div class="magnitola">
            <img src="{{ asset('/') }}dailysharkFiles/carstoragebox/1foto.png" alt="">
        </div>
        <h1><span>Обогреватель</span> салона автомобиля
        </h1>
        <h2>+ Автомобильный компрессор в подарок!</h2>
        <div class="sale">
            Акция!
            <p>-50%</p>
            скидка
        </div>
        <div class="auto-small"></div>
        <ul class="recom" style="box-shadow: 0 0 50px rgb(255 255 255 / 80%);">
            <li>
                <p>Работает от прикуривателя</p>
            </li>
            <li>
                <p>Простой в использовании</p>
            </li>
            <li>
                <p>Обогревает и охлаждает</p>
            </li>
            <li>
                <p>Поршневой компрессор Гладиатор DA 1603 в подарок</p>
            </li>
        </ul>
        <div class="clear"></div>
        <div class="price clearfix">
            <span class="old-cost">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</span>
            <span class="new-cost">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</span>
        </div>
        <div class="clear"></div>
        <a href="#buy" class="button-m">Заказать со скидкой</a>
    </div>
</section>
<section class="block2">
    <div class="wrap">
        <h2 class="title">
            Автомобильный обогреватель<br> <span>в вашем авто всегда будет тепло</span>
        </h2>
        <div class="row">
            <div class="col-md-8 mt-2 mb-2">
                <div class="prtext">
                    Прибор <b>прост в использовании</b> - просто вставьте разъем питания в гнездо прикуривателя и
                    зафиксируйте устройство на передней панели. Для надежного крепления на нижней части корпуса <b>есть
                        клейкие полоски</b>. <br><br> <b>Быстро обогреет
                        салон или разморозит стекла</b>. Также устройство наполняет салон прохладой всего за несколько
                    минут. Такой кондиционер обходится <b>намного дешевле</b> больших стационарных кондиционеров, что
                    несомненно является еще одним плюсом.<br><br>
                    <b>Компактный автомобильный компрессор Гладиатор DA 1603 в подарок</b> - круглая форма исключает
                    передвижение аппарата по поверхности, на которой стоит. Помимо этого в корпусе Гладиатора DA 1603
                    предусмотрены специальные отделения
                    для шланга, адаптеров и кабеля, длина которых достигает 0,53 м и 3,2 м соответственно.
                </div>
            </div>
            <div class="col-md-4 mt-2 mb-2">
                <img src="{{ asset('/') }}dailysharkFiles/carstoragebox/product.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- bizlife_inc -->
<section class="block3">
    <div class="wrap">
        <h2 class="title"><span>Ключевые особенности</span> обогревателя</h2>
        <div class="row mt-3">
            <div class="col-md-3 col-sm-6 mb-3 mt-3">
                <div class="row">
                    <div class="col-12 text-center"><img src="{{ asset('/') }}dailysharkFiles/carstoragebox/foto7.png" alt=""
                                                         class="img-fluid"></div>
                    <div class="col-12 text-center mt-4">
                        <p class="font-weight-bold">Обогреет и охладит салон</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3 mt-3">
                <div class="row">
                    <div class="col-12 text-center"><img src="{{ asset('/') }}dailysharkFiles/carstoragebox/foto8.png" alt=""
                                                         class="img-fluid"></div>
                    <div class="col-12 text-center mt-4">
                        <p class="font-weight-bold">Сделает поездки комфортнее</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3 mt-3">
                <div class="row">
                    <div class="col-12 text-center"><img src="{{ asset('/') }}dailysharkFiles/carstoragebox/foto9.png" alt=""
                                                         class="img-fluid"></div>
                    <div class="col-12 text-center mt-4">
                        <p class="font-weight-bold">Компактный дизайн </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3 mt-3">
                <div class="row">
                    <div class="col-12 text-center"><img src="{{ asset('/') }}dailysharkFiles/carstoragebox/foto10.png" alt=""
                                                         class="img-fluid"></div>
                    <div class="col-12 text-center mt-4">
                        <p class="font-weight-bold">Надежное крепление</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- michael-k90 -->
<section class="block4">
    <div class="wrap">
        <h2 class="title"><span>Технические характеристики</span> обогревателя</h2>
        <table class="table table-striped">
            <tbody>
            <tr>
                <th scope="row">Мощность прибора</th>
                <td>150 Вт</td>
            </tr>
            <tr>
                <th scope="row">
                    Рабочее напряжение
                </th>
                <td>
                    12 В
                </td>
            </tr>
            <tr>
                <th scope="row">
                    Режим работы:
                </th>
                <td>
                    вентилятор/обогрев
                </td>
            </tr>
            <tr>
                <th scope="row">
                    Длина шнура
                </th>
                <td>
                    2 метра
                </td>
            </tr>
            <tr>
                <th scope="row">
                    Питается
                </th>
                <td>
                    от прикуривателя
                </td>
            </tr>
            <tr>
                <th scope="row">
                    Крепится
                </th>
                <td>
                    на любые поверхности
                </td>
            </tr>
            <tr>
                <th scope="row">
                    Вес:
                </th>
                <td>
                    408г
                </td>
            </tr>
            <tr>
                <th scope="row">
                    Дополнительно:
                </th>
                <td>
                    Предназначен для использования в автомобилях, грузовиках, автобусах с напряжением бортовой сети 12В.
                </td>
            </tr>
            </tbody>
        </table>
        <a href="#buy" class="button-m">Заказать со скидкой</a>
    </div>
</section>
<!-- owmen17 -->
<section class="block5">
    <div class="wrap">
        <h2 class="title">Отзывы покупателей</h2>
        <div class="reviews1" role="toolbar">
            <div class="rewiew-desktop slick-slider">
                <div class="revcont">
                    <div class="rev clearfix">
                        <span><b>Александр Надуда, 30 лет</b></span>
                        <p>Большим плюсом был бонус от магазина. Хороший обогреватель за эти деньги. В салоне тепло,
                            лобовое не запотевает. Компактный, лёгкая установка.
                        </p>
                    </div>
                </div>
                <div class="revcont">
                    <div class="rev clearfix r2">
                        <span><b>Валентин Макаров, 48 лет</b></span>
                        <p>Хороший обогреватель за свои деньги. Работает, гонит тёплый воздух. Зимой для машины с
                            дизельным двигателем будет очень полезен. С запотевшим стеклом хоть и медленно, но
                            справляется. Шумит умеренно. Насос качественный,
                            спасибо. Я доволен
                        </p>
                    </div>
                </div>
                <div class="revcont">
                    <div class="rev clearfix r3">
                        <span><b>Евгений Понасенков, 27 лет</b></span>
                        <p>Отличная дуйка! То что надо в зимний сезон, неплохо обогревает. Очень экономный и при этом
                            эффективный.
                        </p>
                    </div>
                </div>
            </div>
            <div class="rewiew-tablet slick-initialized slick-slider" style="">
                <div class="revcont">
                    <div class="rev clearfix r3">
                        <span><b>Сергій Кощук, 24 роки</b></span>
                        <p>Підключив сьогодні ці динаміки - шикарні динаміки! Звук чистий, сочний бас, голосно грають -
                            всім рекомендую, варті своїх грошей. Якість звуку на висоті! Магазину дякую!
                        </p>
                    </div>
                </div>
                <div class="revcont">
                    <div class="rev clearfix">
                        <span><b>Алексей Липский, 27 лет</b></span>
                        <p>Качественный звук, приятный и стильный дизайн, приемлемая цена, хорошее качество сборки, и
                            отправили посылку в день заказа) Все отлично, я доволен.
                        </p>
                    </div>
                </div>
                <div class="revcont">
                    <div class="rev clearfix r2">
                        <span><b>Андрей Макаров, 32 года</b></span>
                        <p>Хорошо слышны как высокие, так и низкие частоты. Неплохая модель. 3амечательно работают даже
                            под штатным ресивером. Буду заказывать еще одну пару.
                        </p>
                    </div>
                </div>
            </div>
            <div class="rewiew-mobile slick-slider" style="">
                <div aria-live="polite" class="slick-list draggable">
                    <div class="revcont">
                        <div class="rev clearfix r3">
                            <span><b>Сергій Кощук, 24 роки</b></span>
                            <p>Підключив сьогодні ці динаміки - шикарні динаміки! Звук чистий, сочний бас, голосно
                                грають - всім рекомендую, варті своїх грошей. Якість звуку на висоті! Магазину
                                дякую!
                            </p>
                        </div>
                    </div>
                    <div class="revcont">
                        <div class="rev clearfix">
                            <span><b>Алексей Липский, 27 лет</b></span>
                            <p>Качественный звук, приятный и стильный дизайн, приемлемая цена, хорошее качество сборки,
                                и отправили посылку в день заказа) Все отлично, я доволен.
                            </p>
                        </div>
                    </div>
                    <div class="revcont">
                        <div class="rev clearfix r2">
                            <span><b>Андрей Макаров, 32 года</b></span>
                            <p>Хорошо слышны как высокие, так и низкие частоты. Неплохая модель. 3амечательно работают
                                даже под штатным ресивером. Буду заказывать еще одну пару.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- bizlife_inc -->
<section class="block7">
    <div class="wrap">
        <div class="prim slick-slider">
            <img src="{{ asset('/') }}dailysharkFiles/carstoragebox/3foto.png" alt="" class="slick-slide">
            <img src="{{ asset('/') }}dailysharkFiles/carstoragebox/4foto.jpg" alt="" class="slick-slide">
            <img src="{{ asset('/') }}dailysharkFiles/carstoragebox/5foto.jpg" alt="" class="slick-slide">
            <img src="{{ asset('/') }}dailysharkFiles/carstoragebox/6foto.jpg" alt="" class="slick-slide">
            <img src="{{ asset('/') }}dailysharkFiles/carstoragebox/7foto.jpg" alt="" class="slick-slide">
        </div>
        <a href="#buy" class="button-m">Заказать со скидкой</a>
    </div>
</section>
<!-- owmen17 -->
<section class="block8">
    <div class="wrap">
        <h2 class="title">Как заказать?</h2>
        <ul class="ship">
            <li>
                <p>Заполните форму заказа <br>на нашем сайте</p>
            </li>
            <li>
                <p>Дождитесь звонка оператора <br>для подтверждения заказа</p>
            </li>
            <li>
                <p>Оплатите заказ после <br>получения на почте</p>
            </li>
        </ul>
    </div>
</section>
<section class="block9">
    <div class="wrap">
        <h1><span>Обогреватель</span> салона автомобиля</h1>
        <h2>закажите сейчас <span>со скидкой50%</span></h2>
        <h3>+ Автомобильный компрессор в подарок!</h3>
        <div class="auto-small"></div>
        <div class="sale">
            Акция!
            <p>-50%</p>
            скидка
        </div>
        <div class="row recom">
            <div class="col-md-6">Работает от прикуривателя</div>
            <div class="col-md-6">Простой в использовании</div>
            <div class="col-md-6">Обогревает и охлаждает</div>
            <div class="col-md-6">Поршневой компрессор Гладиатор DA 1603 в подарок</div>
            <div class="magnitola-block9">
                <img src="{{ asset('/') }}dailysharkFiles/carstoragebox/1foto.png" alt="">
            </div>
        </div>
        <div class="magnitola-block9-mobile">
            <img src="{{ asset('/') }}dailysharkFiles/carstoragebox/1foto.png" alt="">
        </div>
        <div class="formbox">
            <div class="timer_block clearfix">
                <p>До конца акции осталось:</p>
                <div class="timer clearfix">
                    <div class="timer_item">
                        <div class="count hours"><span>1</span><span>4</span></div>
                        <div class="text">часов</div>
                    </div>
                    <div class="timer_item">
                        <div class="count minutes"><span>3</span><span>4</span></div>
                        <div class="text">минут</div>
                    </div>
                    <div class="timer_item">
                        <div class="count seconds"><span>2</span><span>2</span></div>
                        <div class="text">секунд</div>
                    </div>
                </div>
            </div>
            <div class="price clearfix">
                <span class="old-cost">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</span>
                <span class="new-cost">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</span>
            </div>
            <form id="buy" class="m1-form" action="#" method="post">
                <input class="field" name="name" type="text" placeholder="Введите ваше имя" required="">
                <input class="field" name="phone" type="tel" placeholder="Введите ваш телефон" required="">
                <button class="button-m" type="submit">Заказать со скидкой</button>
            </form>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}dailysharkFiles/carstoragebox/jquery.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/carstoragebox/slick.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/carstoragebox/scripts.js"></script>
</body>
</html>
