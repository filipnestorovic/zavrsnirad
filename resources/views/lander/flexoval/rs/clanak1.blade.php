<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta content="width=device-width" name="viewport">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}flexovalFiles/clanak1/favicon.ico" >
    <link rel="icon" type="image/x-icon" href="{{ asset('/') }}flexovalFiles/clanak1/favicon.ico" >
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;display=swap&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexovalFiles/clanak1/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexovalFiles/clanak1/style.css">
    <style>
        @font-face {
            font-family: "Raleway";
            src: url("{{ asset('/') }}fonts/ralewayextrabold.woff");
            font-style: normal;
            font-weight: 700;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header>
    <div class="header">
        <div class="header_item">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/h1.png">
            <span>Европейское <br>качество</span>
        </div>
        <div class="header_item">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/h2.png">
            <span>Более 2730 <br>положительных <br>отзывов</span>
        </div>
        <div class="header_item">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/h3.png">
            <span>100% доказанная <br>эффективность</span>
        </div>
    </div>
</header>
<section class="base banner">
    <div class="container main_title">
        <h1 class="h1">Регулируемый эластичный манжет на лодыжку<br><span>Safe <span>Brace</span></span></h1>
    </div>
    <div class="container smart">
        <ul class="list">
            <li>Стабилизирует голеностопный сустав</li>
            <li>Ускоряет процесс восстановления</li>
            <li>Защищает сустав от перегрузок, травм и растяжений связок</li>
        </ul>
        <div class=smart_inner>
            <div class="stock">
                <p>В наличии<br>осталось</p>
                <p>9<small>шт</small></p>
            </div>
            <div class="sale">
                <p>скидка</p>
                <p>-53<small>%</small></p>
            </div>
        </div>
        <div class="sale_block_wrap">
            <p>ISKORISTITE POPUST OD 40%</p>
            <div class="sale_block">
                <div class="count">
                    {{--<p class="count_title">ДО КОНЦА АКЦИИ ОСТАЛОСЬ:</p>--}}
                    {{--<div class="timer_wrapper">--}}
                        {{--<div class="countdown"></div>--}}
                    {{--</div>--}}
                    <div class="price_list_bg">
                        <div class="price_list">
                            <div class="old_price">
                              <span class="price">
                                 {{ $prices[1]['originalPrice'] }}
                                 <small>
                                    RSD
                                 </small>
                              </span>
                            </div>
                            <div class="new_price">
                              <span class="price">
                                 {{ $prices[1]['amount'] }}
                                 <small>
                                    RSD
                                 </small>
                              </span>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="main-order-form sale_form" action="{{$orderRoute}}" method="POST">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input class="input name" name="name" placeholder="Ime i prezime" required type="text">
                    <input class="input phone" name="phone" placeholder="Telefon" required type="tel">
                    <input class="input" name="shipping_address" placeholder="Adresa" required type="text">
                    <input class="input" name="shipping_city" placeholder="Grad" required type="text">
                    <div class="secure">
                        <img src="{{ asset('/') }}flexovalFiles/clanak1/lock.png">
                        <span>Vaši podaci su zaštićeni</span>
                    </div>
                    <button class="btn">Poručite</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="base show">
    <h2 class="titles"><span class="orange">Safe Brace</span> - регулируемый манжет на лодыжку</h2>
    <p class="container">Используйте его для облегчения ходьбы, профилактики заболеваний и восстановления после травм. Наслаждайтесь любимым делом без боли и с легкостью!</p>
    <div class="container show_slider">
        <div class="slide"><img src="{{ asset('/') }}flexovalFiles/clanak1/s1.jpg"></div>
        <div class="slide"><img src="{{ asset('/') }}flexovalFiles/clanak1/s2.jpg"></div>
        <div class="slide"><img src="{{ asset('/') }}flexovalFiles/clanak1/s3.jpg"></div>
        <div class="slide"><img src="{{ asset('/') }}flexovalFiles/clanak1/s4.jpg"></div>
        <div class="slide"><img src="{{ asset('/') }}flexovalFiles/clanak1/s5.jpg"></div>
        <div class="slide"><img src="{{ asset('/') }}flexovalFiles/clanak1/s6.jpg"></div>
    </div>
</section>
<section class="base problems">
    <h2 class="titles white"><span class="orange">Проблемы с голеностопом</span> - прямой путь к инвалидности! </h2>
    <p>С ними вы навсегда забудете о радостях активной жизни. Проверьте, нет ли у вас подобных симптомов: </p>
    <div class="container problems_inner">
        <div class="problems_item">
            <div><img src="{{ asset('/') }}flexovalFiles/clanak1/p1.jpg"></div>
            <p>Мучает ноющая боль в голеностопе во время движения или в состоянии покоя</p>
        </div>
        <div class="problems_item">
            <div><img src="{{ asset('/') }}flexovalFiles/clanak1/p2.jpg"></div>
            <p>Частые ушибы, травмы и вывихи голеностопа</p>
        </div>
        <div class="problems_item">
            <div><img src="{{ asset('/') }}flexovalFiles/clanak1/p3.jpg"></div>
            <p>Припухлости и покраснения в области голеностопа</p>
        </div>
        <div class="problems_item">
            <div><img src="{{ asset('/') }}flexovalFiles/clanak1/p4.jpg"></div>
            <p>Больно опираться на стопу</p>
        </div>
        <div class="problems_item">
            <div><img src="{{ asset('/') }}flexovalFiles/clanak1/p5.jpg"></div>
            <p>Тяжесть и сильная усталость в ногах</p>
        </div>
    </div>
</section>
<section class="base emergency">
    <div class="container">
        <h2 class="titles"><span class="orange">БЫСТРАЯ ПОМОЩЬ</span> ВАШЕМУ ГОЛЕНОСТОПУ</h2>
        <p>Манжет Safe Brace плотно фиксирует голеностопный сустав, равномерно распределяет нагрузку и стимулирует зону стопы.</p>
        <div class="emergency_inner">
            <div class="emergency_item">
                <div><img src="{{ asset('/') }}flexovalFiles/clanak1/check_for_circle.png"></div>
                <p>Ускоряет заживление после растяжений связок и вывихов</p>
            </div>
            <div class="emergency_item">
                <div><img src="{{ asset('/') }}flexovalFiles/clanak1/check_for_circle.png"></div>
                <p>Уменьшает <br>боли при артрозе <br>и артрите</p>
            </div>
            <div class="emergency_item">
                <div><img src="{{ asset('/') }}flexovalFiles/clanak1/check_for_circle.png"></div>
                <p>Предотвращает <br>отек и воспаление после травм и ушибов</p>
            </div>
        </div>
        <a href="#footer" class="extra btn">ЗАКАЗАТЬ СЕЙЧАС</a>
    </div>
</section>
<section class="base unique">
    <h2 class="titles">Уникальная конструкция <br><span class="blue">для максимальной пользы</span></h2>
    <div class="container unique_gif">
        <p>Манжет оказывает микромассажное действие, ускоряет разогрев связок и улучшает мышечную координацию стопы.</p>
        <p>Встроенный стабилизатор сустава и связок предохраняет от самых распространенных повреждений, распределяет нагрузку и снижает риск развития артрита и артроза.</p>
        <div class="gif_wrap">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/giphy.gif">
        </div>
    </div>
    <div class="container unique_inner">
        <p>Легкий и дышащий материал из неопрена обеспечивает комфорт и сухость ноге, сохраняя при этом терапевтическое тепло</p>
        <p>Компрессионный материал надежно фиксирует вашу лодыжку, снимая боль и напряжение с суставов</p>
        <p>Регулируемые «липучки» позволяют выбрать оптимальную степень сжатия</p>
        <p>Отсутствие грубых швов исключает натирание и сдавливание стопы</p>
    </div>
</section>
<section class="base necessary">
    <h2 class="titles white"><span class="orange">кому необходим</span> манжет для голеностопа</h2>
    <div class="container necessary_inner">
        <div class="necessary_item">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/n1.png">
            <p>Всем, кто занимается спортом с нагрузкой на ноги (бегунам, футболистам и др. спортсменам)</p>
        </div>
        <div class="necessary_item">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/n2.png">
            <p>Людям, испытывающим «тяжесть» и усталость в ногах</p>
        </div>
        <div class="necessary_item">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/n3.png">
            <p>Работникам физического труда и тем, кто много «работает на ногах»</p>
        </div>
        <div class="necessary_item">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/n4.png">
            <p>Восстанавливаю- щимся после травм, а также страдающим артритом и артрозом</p>
        </div>
    </div>
</section>
<section class="base how">
    <div class="container">
        <h2 class="titles"><span class="orange">как надевать</span> манжет</h2>
        <p>Обхватите манжетом стопу как показано на фото и подберите необходимую степень утяжки с помощью регулируемых «липучек».</p>
        <a href="#footer" class="extra btn">Заказать сейчас</a>
        <div class="how_inner">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/m1.jpg">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/m2.jpg">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/m3.jpg">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/m4.jpg">
        </div>
    </div>
</section>
<section class="base why">
    <h2 class="titles">Почему <span class="blue">Safe Brace</span> - лучший </h2>
    <div class="container why_inner">
        <table>
            <thead>
            <tr>
                <th>
                    <p></p>
                </th>
                <th>
                    <p>Safe Brace</p>
                </th>
                <th>
                    <p>Эластичный <br>бинт</p>
                </th>
                <th>
                    <p>Профессио- <br>нальный ортез</p>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Удобство <br>использования</td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/cross.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_g.png"></td>
            </tr>
            <tr>
                <td>Экономия <br>времени</td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/cross.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/cross.png"></td>
            </tr>
            <tr>
                <td>Быстрый <br>результат</td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/cross.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_g.png"></td>
            </tr>
            <tr>
                <td>Безопасно для <br>кожи</td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/cross.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_g.png"></td>
            </tr>
            <tr>
                <td>Надежная фиксация<br>голеностопа</td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/cross.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_g.png"></td>
            </tr>
            <tr>
                <td>Незаметен под <br>одеждой</td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/cross.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/cross.png"></td>
            </tr>
            <tr>
                <td>Доступная цена</td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_w.png"/></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/check_g.png"></td>
                <td><img src="{{ asset('/') }}flexovalFiles/clanak1/cross.png"></td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
<section class="base expert">
    <div class="container expert_inner">
        <h2 class="titles white">Мнение <span class="orange">специалиста</span></h2>
        <div class="caption">
            <p>Александр Воронов</p>
            <p>персональный тренер</p>
        </div>
        <div class="expert_text">
            <p>В спортзал люди приходят с разными целями: набрать идеальную форму, сбросить избыточный вес, для общего оздоровления организма. Как правило всех этих людей объединяет желание получить результат за максимально короткий отрезок времени.</p>
            <p>Результатом этого могут стать микротравмы, полученные из-за избыточных нагрузок. Для эффективных и безопасных тренировок, подразумевающих нагрузки на голеностоп рекомендую всем своим подопечным манжет <b>Safe Brace</b>.</p>
            <p>Он способен не только предотвратить возможные травмы, но и снижает общую нагрузку на голеностоп, что позволяет проводить более эффективные тренировки. Со слов наших посетителей <b>Safe Brace</b> также замечательно подходит для пеших походов на природу, физической работы с большим количеством ходьбы или при возрастной “тяжести” в ногах.</p>
        </div>
    </div>
</section>
<section class="base feedback">
    <h2 class="titles"><span class="orange">Отзывы от тех</span>, кто уже попробовал <span class="orange">safe brace</span></h2>
    <div class="feedback_slider">
        <div class="feedback_slide">
            <div class="img_wrapper"><img src="{{ asset('/') }}flexovalFiles/clanak1/f1.jpg"></div>
            <div class="comment">
                <h4>Андрей, 34 года</h4>
                <p>Играю по выходным в мини-футбол в зале. У нас тут целый «чемпионат» сложился. И как назло сильное растяжение связок голеностопа. Команда на меня рассчитывает, а тут такая фигня… Начал искать в инете надежный фиксатор. Остановил свой выбор на <b>Safe Brace</b>. Покупкой очень доволен – как влитой манжет на ногу сел, не натирает, липучка позволяет быстро поменять силу фиксации, боль в ноге с ним почти не чувствуется – достойная вещь!</p>
            </div>
        </div>
        <div class="feedback_slide">
            <div class="img_wrapper"><img src="{{ asset('/') }}flexovalFiles/clanak1/f2.jpg"></div>
            <div class="comment">
                <h4>Елена, 54 года</h4>
                <p>Мало того, что на работе не один километр в день наматываю, так ещё после нее надо продуктов себе с супругом закупить, так еще и старшенькой с внучками надо завести, чтоб всякую дрянь не ели. Под конец дня ощущаю просто дикую тяжесть в ногах. <b>Сайф брейс</b> стали для меня настоящим спасением. Носить их весь день нельзя, но под вечер, когда ноги сильно отекают нормально ходить только с этими манжетами, могу – не знаю, как я бы без них вообще передвигалась сейчас.</p>
            </div>
        </div>
        <div class="feedback_slide">
            <div class="img_wrapper"><img src="{{ asset('/') }}flexovalFiles/clanak1/f3.jpg"></div>
            <div class="comment">
                <h4>Виталий, 43 года</h4>
                <p>Из-за короновируса лишился работы, подрабатываю курьером. После работы в офисе целый день быть на ногах очень тяжко. <b class="blue">Safe Brace</b> мне один спортсмен знакомый посоветовал. Надеваю его, когда ноги особенно сильно устают. Особенно он спасает, когда на 9-10 этаж доставка, а лифт сломан. Всем рекомендую – манжет стоит своих денег.</p>
            </div>
        </div>
    </div>
</section>
<section class="base simple_steps">
    <h2 class="titles white">3 простых шага для заказа <br><span class="black">safe brace</span></h2>
    <div class="container steps">
        <div class="step">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/step1.png" alt="картинка">
            <p>Заполните форму обратной связи</p>
        </div>
        <div class="step">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/step2.png" alt="картинка">
            <p>Дождитесь звонка оператора</p>
        </div>
        <div class="step">
            <img src="{{ asset('/') }}flexovalFiles/clanak1/step3.png" alt="картинка">
            <p>Оплатите товар после успешного получения</p>
        </div>
    </div>
</section>
<div class="base action">
    <div class="action_item">
        <p>
            <span>товар отправляется<br class="br1"></span>
            <span class="color1">в любую точку страны<br></span>
            <span>в течение 5-10 рабочих дней</span>
        </p>
        <p>
            <span>без предоплаты<br class="br2"></span>
            <span class="color1">вы <br class="br3">оплачиваете товар <br class="br4"></span>
            <span>только </span><span class="color2"><br class="br6">по факту его получения</span>
        </p>
        <p>
            <span>возможность отказаться <br>от покупки </span>
            <span class="color1"><br class="br5">в течение <br class="br2">14 рабочих дней</span>
        </p>
    </div>
</div>
<section class="base banner bottom_block">
    <div class="container main_title">
        <h3 class="h1">Регулируемый эластичный манжет на лодыжку<br><span>Safe <span>Brace</span></span></h3>
    </div>
    <div class="container smart">
        <ul class="list">
            <li>Стабилизирует голеностопный сустав</li>
            <li>Ускоряет процесс восстановления</li>
            <li>Защищает сустав от перегрузок, травм и растяжений связок</li>
        </ul>
        <div class=smart_inner>
            <div class="stock">
                <p>В наличии<br>осталось</p>
                <p>9<small>шт</small></p>
            </div>
            <div class="sale">
                <p>скидка</p>
                <p>-53<small>%</small></p>
            </div>
        </div>
        <div class="sale_block_wrap">
            <p>ISKORISTITE POPUST OD 40%</p>
            <div class="sale_block">
                <div class="count">
                    {{--<p class="count_title">ДО КОНЦА АКЦИИ ОСТАЛОСЬ:</p>--}}
                    {{--<div class="timer_wrapper">--}}
                        {{--<div class="countdown"></div>--}}
                    {{--</div>--}}
                    <div class="price_list_bg">
                        <div class="price_list">
                            <div class="old_price">
                              <span class="price">
                                 {{ $prices[1]['originalPrice'] }}
                                 <small>
                                    RSD
                                 </small>
                              </span>
                            </div>
                            <div class="new_price">
                              <span class="price">
                                 {{ $prices[1]['amount'] }}
                                 <small>
                                    RSD
                                 </small>
                              </span>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="main-order-form sale_form" action="{{$orderRoute}}" method="POST">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input class="input name" name="name" placeholder="Ime i prezime" required type="text">
                    <input class="input phone" name="phone" placeholder="Telefon" required type="tel">
                    <input class="input" name="shipping_address" placeholder="Adresa" required type="text">
                    <input class="input" name="shipping_city" placeholder="Grad" required type="text">
                    <div class="secure">
                        <img src="{{ asset('/') }}flexovalFiles/clanak1/lock.png">
                        <span>Vaši podaci su zaštićeni</span>
                    </div>
                    <button class="btn">Poručite</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}flexovalFiles/clanak1/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}flexovalFiles/clanak1/main.js"></script>
@include('components.pixel_footer')
</body>
</html>