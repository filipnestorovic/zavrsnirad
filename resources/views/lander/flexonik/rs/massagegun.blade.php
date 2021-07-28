<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}shared_files/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/massagegun/styles.css">
    <link rel="icon" type="image/png" href="">

</head>
<body>
@include('components.display_errors')
<header class="offer_section">
    <div class="triggers_block">
    </div>
    <div class="content_block" id="content_block">
        <div class="wrapper">
            <div class="title_block">
                <h3 class="main_title">Терапевтический<br> массажный пистолет</h3>
            </div>
            <div>
                <img src="{{ asset('/') }}flexonikFiles/massagegun/masager.gif" alt=""/>
            </div>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">Stara cena:</div>
                    <div class="value">{{ $prices[1]['originalPrice'] }}  RSD </div>
                </div>
                <div class="price_item new">
                    <div class="text">Nova cena:</div>
                    <div class="value">{{ $prices[1]['amount'] }}  RSD </div>
                </div>
            </div>
            <a href="#order_form" class="button">PORUČITE SADA</a>

        </div>
    </div>
</header>

<section class="results_section">
    <div class="wrapper">
        <h2><span style="color:#ff8a00">Массажный пистолет</span> что это и зачем нужен?</h2>
        <div class="box-osob" id="os">
            <div class="img-toptop"> <!--left-img-->
                <img src="{{ asset('/') }}flexonikFiles/massagegun/2e43918a516d7d1b6e3ef36318d74b52.4.gif" class="top">
            </div>
            <div class="img-toptop">
                <div class="main-text" style="margin: 10px 20px 20px 20px;"><h3 class="box__body-title">  </h3>
                    <div class="box__body-text" style="font-size: 19px">Ручные массажеры, они же так называемые пистолеты, представляют собой уникальный девайс, которым пользуются не только спортсмены, но и те, кто активно следит за здоровьем и хочет развивать свои мышцы. Так, подобный ручной массажер оказывает точечное воздействие на проблемные зоны, устраняет боль в мышцах, что особенно актуально после силовых тренировок, а также для людей, которые предпочитают кроссфит и воркаут.</div>
                </div>
            </div>
        </div>
        <div class="box-osob-2">
            <div class="img-toptop">
                <div class="main-text">  <h3 class="box__body-title"></h3>
                    <div class="box__body-text">
                        <p>Воздействие массажера на мышечные фасции сопоставимо с действием устройства ударно-волновой терапии. Снимает боль и усталость в мышцах после работы, тренировки или проведенного за компьютером времени.</p>
                        <ul>
                            <li>- <b>Снимает боль в области шеи</b></li>
                            <li>- <b>Области рук, плеча, лопатки,ног</b></li>
                            <li>- <b>Восстановление мышц рук и ног после физической работы</b></li>
                            <li>- <b>Растяжения</b></li>
                        </ul>
                    </div> </div>
            </div>
            <div class="img-toptop flex-left">
                <img src="{{ asset('/') }}flexonikFiles/massagegun/box-2_ver1.jpg" class="img-my-top">
            </div>
        </div>
    </div>
</section>

<section class="use_section" id="use_section">
    <div class="wrapper">
        <h2><span style="color: #02bf02;">4 НАСАДКИ</span> ДЛЯ МАССАЖНОГО ПИСТОЛЕТА</h2>
        <div class="use_list">
            <div class="use_item">
                <img src="{{ asset('/') }}flexonikFiles/massagegun/use__use1_image.jpg" alt="Kelvin Safety Tool">
                <h4>Круглая насадка</h4>
                <p>Отлично подойдет для обработки крупных мышечных массивов
                    (грудная, широчайшая, ягодичные мышцы, а так же мышцы ног)</p>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}flexonikFiles/massagegun/use__use2_image.jpg" alt="Kelvin Safety Tool">
                <h4>Насадка Вилка</h4>
                <p>Вид насадки,который с легкостью устранит болезненные ощущения и мышечные зажимы в области шеи и позвоночного столба</p>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}flexonikFiles/massagegun/use__use3_image.jpg" alt="Kelvin Safety Tool">
                <h4>Плоская насадка</h4>
                <p>Насадка,предназначенная для работы со всеми частями тела,а так же для коррекции контуров тела,путем проработки подкожно-жировой клетчаки</p>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}flexonikFiles/massagegun/use__use4_image.jpg" alt="Kelvin Safety Tool">
                <h4>Насадка пуля</h4>
                <p>Вид насадки для отличной проработки триггерных точек.
                    Триггерная точка - местное уплотнение мышечной ткани,вызывающее систематическую боль в состояние покоя или при надавливании.</p>
            </div>
            <a href="#order_form" class="button">PORUČITE SADA</a>
        </div>
</section>
<section class="use_steps_section" id="haracter">
    <div class="wrapper clearfix">
        <div class="comp">
            <h2 style="color:#da1c4d">Технические характеристики</h2>
            <div class="comp-left"> <img src="{{ asset('/') }}flexonikFiles/massagegun/ver3.jpg" alt="Kelvin Safety Tool"></div>
            <div class="comp-right"> <ul>
                    <li><b>Емкость батареи:</b> 2600 Mah;</li>
                    <li><b>Сила нажатия:</b> 0 - 5.1 kg/cm;</li>
                    <li><b>Амплитуда:</b> 11 mm;</li>
                    <li><b>Максимальный уровень шума:</b> 45dB;</li>
                    <li>Массажный пистолет имеет 6 скоростей;</li>
                    <li>4 насадки;</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section  style="margin: 40px auto; background: #f7f7f7;     padding: 40px 0 10px;" id="select">
    <h2 style="color: #ff8a00;">В ЧЁМ ПОЛЬЗА ТЕРАПЕВТИЧЕСКОГО МАССАЖЕРА?</h2>
    <div class="box-osob">
        <div class="img-toptop"> <!--left-img-->
            <img src="{{ asset('/') }}flexonikFiles/massagegun/box-1_ver1.jpg" >
        </div>
        <div class="img-toptop">
            <div class="main-text">
                <div class="box__body-text"><p> <span class="top-number">1</span> - c его помощью можно проводить массаж любых областей тела, тем самым стимулируя кровоток;</p>
                    <p> <span class="top-number">2</span> - массажер благодаря вибрации снимает напряжение тела, ликвидирует усталость и позволяет устранить крепатуру после тренировок;</p>
                    <p> <span class="top-number">3</span> - также он прекрасно подходит для спортсменов, которые испытывают боль от спазмов или восстанавливаются от травм;</p>
                </div></div>
        </div>
    </div>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <div class="box__body-text">
                    <p> <span class="top-number">4</span> - с помощью массажера улучшается состояние не только кожи, но и мышц, а также мягких тканей;</p>
                    <p> <span class="top-number">5</span> - технология массажа с помощью такого девайса также отлично влияет на внешний вид кожи, омолаживая её;</p>
                    <p> <span class="top-number">6</span> - постоянные сеансы с массажным пистолетом гарантируют, что работоспособность мышц будет значительно повышена.</p>
                </div> </div>
        </div>
        <div class="img-toptop flex-left">
            <img src="{{ asset('/') }}flexonikFiles/massagegun/box-3_ver1.jpg" class="img-my-top">
        </div>
    </div>
</section>

<section class="reviews_section" id="otzv">
    <div class="wrapper">
        <h2 style="color:#3d268e">Отзывы покупателей</h2>
        <h3 class="otz-my"><span style="color: #fb723f">97,5% ПОКУПАТЕЛЕЙ </span>ОТМЕТИЛИ ЭФФЕКТИВНОСТЬ МАССАЖЕРА!</h3>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <!--					<img src="images/reviews__review1_photo.jpg" alt="спиннер">-->
                <p>«У нас на работе целое сообщество ее почитателей. Довольно часто пользуюсь массажером, советую всем своим девочкам.Хорошая штука,расслабляет ! Спасибо.»</p>
                <div class="author_name">Ирина, 24 лет<br>(фитнес треннер из г. Москва)</div>
            </div>
            <div class="review_item">
                <p>«Шея начала болеть давно, порой боли не давали мне покоя на протяжении долгого времени. Отвлекали от работы, будили ночью. Знакомые порекомендовали приобрести массажер. Пользуюсь им уже больше полгода.Боль полностью проходит, появляется ощущение легкости. Массажер замечательно приводит тело в тонус.»</p>
                <div class="author_name">Елена, 42 года <br>(бухгалтер из г. Воронеж) </div>
            </div>
            <div class="review_item">
                <!--					<img src="images/reviews__review3_photo.jpg" alt="спиннер">-->
                <p>«Приходится много времени проводить за рулем. Усталость и боли в спине до недавнего времени были моими постоянными попутчиками. Теперь реально все изменилось. Беру аксессуар в дорогу. За руль сажусь без опасений, дискомфорт прошел.»</p>
                <div class="author_name">Михаил, 35 лет <br>(водитель из г. Екатеринбург)</div>
            </div>
        </div>
    </div>
</section>
<!-- /reviews -->

<!-- order steps -->
<section class="order_steps_section">
    <div class="wrapper">
        <h2 style="color:#3d268e">ДОСТАВКА И ГАРАНТИЯ</h2>
        <div class="steps_list">
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/massagegun/order_steps__step2_image.jpg" alt="Гамак для отдыха">
                </div>
                <p><b>Гарантия</b></p>
                <p>Перед отправкой все товары проходят тщательную проверку на предмет брака.</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/massagegun/order_steps__step3_image.jpg" alt="Гамак для отдыха">
                </div>
                <p><b>Доставка</b></p>
                <p>Доставка почтой в течение 3 рабочих дней.</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/massagegun/order_steps__step4_image.jpg" alt="Гамак для отдыха">
                </div>
                <p><b>Никаких предоплат!</b></p>
                <p>Оплата заказов осуществляется по факту получения товара.</p>
            </div>
        </div>
    </div>
</section>
<!-- /order steps -->

<!-- order -->
<section class="order_section" id="order-form">
    <div class="top_title_block">
        <div class="wrapper">
            <h3>Закажите сейчас <span>со скидкой 55%</span></h3>
        </div>
    </div>
    <div class="content_block">
        <div class="wrapper">
            <div class="title_block">
                <h3 class="main_title">Терапевтический<br> массажный пистолет</h3>
            </div>
            <div class="form_block">
                <div class="price_block clearfix">
                    <div class="price_item old">
                        <div class="text">Stara cena:</div>
                        <div class="value">{{ $prices[1]['originalPrice'] }}  RSD </div>
                    </div>
                    <div class="price_item new">
                        <div class="text">Nova cena:</div>
                        <div class="value">{{ $prices[1]['amount'] }}  RSD </div>
                    </div>
                </div>
                <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input class="field" type="text" name="name" placeholder="Ime i prezime" required>
                    <input class="field" type="tel" name="phone" placeholder="Broj telefona" required>
                    <input class="field" type="text" name="shipping_address" placeholder="Adresa" required>
                    <input class="field" type="text" name="shipping_city" placeholder="Grad" required>
                    <button class="button" type="submit">PORUČITE SADA</button>
                </form>
            </div>
        </div>
    </div>
</section>

<center></center>

{{--<script src="http://pistmass.xcartpro.com/r2/js/previewYouTube.js"></script>--}}
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}flexonikFiles/massagegun/scripts.js"></script>

</body>
</html>