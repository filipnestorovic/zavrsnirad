<html>
<head>
    @include('components.pixel_init')
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <link rel="shortcut icon" href="{{ asset('/') }}naturapharmFiles/zglobovi1/mark_2.png" type="image/x-icon">
    <link rel=icon href="{{ asset('/') }}naturapharmFiles/zglobovi1/mark_2.png" type="image/x-icon">
    <style>
        @font-face {
            font-family: "Glyphicons Halflings";
            src: url({{ asset('/') }}fonts/glyphicons-halflings-regular.eot);
            src: url({{ asset('/') }}fonts/glyphicons-halflings-regular.eot?#iefix) format("embedded-opentype"),
            url({{ asset('/') }}fonts/glyphicons-halflings-regular.woff2) format("woff2"),
            url({{ asset('/') }}fonts/glyphicons-halflings-regular.woff) format("woff"),
            url({{ asset('/') }}fonts/glyphicons-halflings-regular.ttf) format("truetype"),
            url({{ asset('/') }}fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format("svg");
        }
        @font-face {
            font-family: Roboto-Regular;
            src: url({{ asset('/') }}fonts/roboto-regular.ttf);
            font-weight: normal
        }
        @font-face {
            font-family: Roboto-Light;
            src: url({{ asset('/') }}fonts/robotolight.ttf);
            font-weight: normal
        }
        @font-face {
            font-family: Roboto-Medium;
            src: url({{ asset('/') }}fonts/robotomedium.ttf);
            font-weight: normal
        }
        @font-face {
            font-family: Oswald;
            src: url({{ asset('/') }}fonts/Oswald-Medium.ttf);
            font-weight: normal
        }
        @font-face {
            font-family: "slick";
            font-weight: normal;
            font-style: normal;
            src: url({{ asset('/') }}fonts/slick.eot);
            src: url({{ asset('/') }}fonts/slickd41d.eot?#iefix) format("embedded-opentype"),
            url({{ asset('/') }}fonts/slick.woff) format("woff"),
            url({{ asset('/') }}fonts/slick.ttf) format("truetype"),
            url({{ asset('/') }}fonts/slick.svg#slick) format("svg");
        }
    </style>
    <link href="{{ asset('/') }}naturapharmFiles/zglobovi1/bootstrap.css" rel=stylesheet>
    <link href="{{ asset('/') }}naturapharmFiles/zglobovi1/style.css" rel=stylesheet>
    <link rel=stylesheet href="{{ asset('/') }}naturapharmFiles/zglobovi1/media.css" media="all and (max-width:1200px)">

    <style>.slick-slider{position:relative;display:block;box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent}.slick-list{position:relative;display:block;overflow:hidden;margin:0;padding:0}.slick-list:focus{outline:none}.slick-list.dragging{cursor:pointer;cursor:hand}.slick-slider .slick-track,.slick-slider .slick-list{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.slick-track{position:relative;top:0;left:0;display:block;margin-left:auto;margin-right:auto}.slick-track:before,.slick-track:after{display:table;content:''}.slick-track:after{clear:both}.slick-loading .slick-track{visibility:hidden}.slick-slide{display:none;float:left;height:100%;min-height:1px}[dir="rtl"] .slick-slide{float:right}.slick-slide img{display:block}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-initialized .slick-slide{display:flex}.slick-loading .slick-slide{visibility:hidden}.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}.slick-arrow.slick-hidden{display:none}</style>
    <link rel=stylesheet href="{{ asset('/') }}naturapharmFiles/zglobovi1/slick-theme.css">
</head>
<body>
@include('components.display_errors')
<header>
    <div class=container>
        <div class=row>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" id=logo>
                <img src="{{ asset('/') }}naturapharmFiles/zglobovi1/logo.png" alt="Vitamix">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-10">
                <menu>
                    <ul>
                        <li><a href="#1_b">Главная</a></li>
                        <li><a href="#5_b">Врачи рекомендуют</a></li>
                        <li><a href="#6_b">Как действует</a></li>
                        <li><a href="#7_b">Отзывы</a></li>
                        <li><a href="#11_b">Как заказать</a></li>
                    </ul>
                </menu>
                <a href="#" class=btnMenu>
                    <span></span>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2">
                <a href="#order_form"><button class=btnCallback>Заказать звонок</button></a>
            </div>
        </div>
    </div>
</header>
<section id=1_b class=main>
    <div class=container>
        <div class="row contant">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <h2>ХОТИТЕ ЗАЩИТИТЬ СВОИ <span class=red>СУСТАВЫ?</span></h2>
                <h4>Хондрактин восстанавливает поврежденные суставы за 1 курс приема</h4>
                <div class=product>
                    <div class=effects>
                        <ul>
                            <li>Защищает суставы<br> от разрушительного воздействия излучения</li>
                            <li>Восстанавливает<br> хрящевые ткани изнутри </li>
                            <li>Снимает боль с <br>первого дня приема </li>
                            <li>Натуральный и <br>безопасный состав</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class=orderForm>
                    <h3>АКЦИЯ<br>
                        <span>“ЗДОРОВЫЕ СУСТАВЫ НАЦИИ”</span>
                    </h3>
                    <h5><span class=price_land_s4>5290</span><span class=price_land_curr>руб.</span> <br><span class=red><span class=price_land_s1>0</span> <span class=price_land_curr>руб.</span>*</span></h5>
                    <form action="">
                        <input name=name type=text placeholder='Ваше имя'>
                        <input name=phone type=text placeholder='Ваш номер телефона'>
                        <button class=btnOrder type=submit>ХОЧУ ЗАЩИТИТЬ СВОИ СУСТАВЫ</button>
                    </form>
                    <span class=for_>*При заказе курса</span>
                </div>
                <div class=protection><img src="{{ asset('/') }}naturapharmFiles/zglobovi1/protect.png" alt="Vitamix"><span>Ваши данные под защитой</span></div>
                <div class=clear></div>
                <div class=starper></div>
            </div>
        </div>
    </div>
</section>
<section id=2_b class=video_block>
    <div class=container>
        <div class="row distance">
            <div class=circle></div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <div class=white>
                    <h2>ПОЧЕМУ БОЛЯТ СУСТАВЫ?</h2>
                    <p>Мало кто знает, что радиационное облучение сильно губит <br>наши суставы. А электромагнитное излучение <br>от микроволновых печей, смартфонов и интернет—роутеров критически усугубляет ситуацию. Авария на чернобыльской <br>АЭС оставила след не только в истории, но и в картах больных ревматизмом, артритом и прочими заболеваниями суставов. <br>А окружающее нас излучение добивает больные суставы, вызывая фатальные разрушения и истощение хрящевой ткани.</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 movie">
                <div>
                    <video src="{{ asset('/') }}naturapharmFiles/zglobovi1/video.mp4" controls></video>
                </div>
            </div>
        </div>
    </div>
</section>
<section id=3_b class=risks_block>
    <div class=container>
        <div class="row distance">
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class=koleno></div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12">
                <h2>Кто находится в <span class=red>ОСОБОЙ</span> группе риска: </h2>
            </div>
            <div class="col-lg-offset-2 col-md-offset-0 col-lg-10 col-md-12 col-sm-12 col-xs-12 risks_inner">
                <ul>
                    <li>Жители России</li>
                    <li>Люди с сидячей работой</li>
                    <li>Спортсмены</li>
                </ul>
            </div>
            <div class="col-lg-offset-2 col-md-offset-0 col-lg-10 col-md-12 col-sm-12 col-xs-12 risks_inner">
                <ul>
                    <li>Перенесшие вывихи и растяжения </li>
                    <li>Люди, страдающие лишним весом</li>
                    <li>Соблюдающие медицинские диеты</li>
                </ul>
            </div>
            <div class="col-lg-offset-2 col-md-offset-0 col-lg-10 col-md-12 col-sm-12 col-xs-12 risks_inner">
                <ul>
                    <li>Пожилые люди</li>
                    <li>Перенесшие любые травмы суставов</li>
                    <li>Вегетарианцы</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id=4_b>
    <div class=reasons_grey>
        <div class="container reasons_inner">
            <div class="row distance">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <h2>Когда необходимо <span class=red>СРОЧНО</span> задуматься <br>о здоровье суставов? </h2>
                    <ul>
                        <li>
                            <p>Если у вас появился <b>хруст в суставах</b></p>
                        </li>
                        <li>
                            <p>Если быстро <b>немеют конечности</b> в одном положении</p>
                        </li>
                        <li>
                            <p>Если у вас <b>болят колени</b> после долгого сидения на стуле </p>
                        </li>
                        <li>
                            <p>Если при долгой ходьбе у вас начинают <b>ныть суставы</b> </p>
                        </li>
                        <li>
                            <p>Если появилась <b>в суставах боль и дискомфорт</b> </p>
                        </li>
                        <li>
                            <p>Если утром вам <b>требуется размяться</b>, прежде чем пойти </p>
                        </li>
                    </ul>
                    <button class=careful>ПОЗАБОТЬТЕСЬ О СВОИХ СУСТАВАХ, ВЫ В ЗОНЕ РИСКА!</button>
                </div>
            </div>
        </div>
    </div>
    <div class=reasons_white>
        <div class=container>
            <div class=circle></div>
            <div class=row>
                <h3 class=red>Если у вас один из этих симптомов, советуем немедленно начать принимать Хондрактин!</h3>
                <p>Чтобы защитить суставы, в институте ревматологии РАМН был разработан совершенно новый подход к восстановлению суставов. В основе метода - прямое питание суставов <br>и хрящевых тканей, а также наполнение суставов и костной ткани гиалуроновой кислотой, витаминами и минералами.</p>
            </div>
        </div>
    </div>
</section>
<section id=5_b class=doctors>
    <div class=container>
        <div class=sl>
            <div class="row distance sl__slide">
                <h2 class=white>СПЕЦИАЛИСТЫ РЕКОМЕНДУЮТ <span class=red>ХОНДРАКТИН!</span></h2>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-5">
                    <div class=slide_image>
                        <img class="doctors_images showing" src="{{ asset('/') }}naturapharmFiles/zglobovi1/doctor_1.jpg" alt="Vitamix">
                        <img class=doctors_images src="{{ asset('/') }}naturapharmFiles/zglobovi1/doctor_2.png" alt="Vitamix">
                        <img class=doctors_images src="{{ asset('/') }}naturapharmFiles/zglobovi1/doctor_3.jpg" alt="Vitamix">
                        <button id=showNext class=arrow>
                            <img src="{{ asset('/') }}naturapharmFiles/zglobovi1/right-arrow_red.png" alt="Vitamix">
                        </button>
                    </div>
                </div>
                <div class="col-lg-6  col-md-6 col-sm-6 col-xs-7 white">
                    <div class="slide_text showing">
                        <div class=fix_height>
                            <h4>Почему врачи рекомендуют Хондрактин при первых симптомах заболеваний суставов?</h4>
                            <p>&nbsp;<b>Владимир Евтушенко, спортивный врач, кандидат медицинских наук, зав. кафедры спортивной медицины.</b></p>
                            <p>« За все годы работы со спортсменами я сам видел, насколько их суставы изнашиваются. Поэтому воспаления - чуть ли не спутник каждого спортсмена, особенно после 30 лет. И удивительно, что за все время <br>я ни разу не встречал более эффективного средства для восстановления, защиты и питания суставов, чем Хондрактин. </p>
                            <p>&nbsp;Он “ставит на ноги” после любой из травм в несколько раз быстрее, снимает воспаление и помогает во время реабилитации.»</p>
                        </div>
                        <div class=points>
                            <div class="points_inner activePoint"></div>
                            <div class=points_inner></div>
                            <div class=points_inner></div>
                        </div>
                    </div>
                    <div class=slide_text>
                        <div class=fix_height>
                            <h4>Почему врачи рекомендуют Хондрактин при <br>первых симптомах заболеваний суставов? </h4>
                            <p>&nbsp;<b>Васильев Андрей Николаевич, хирург-травматолог, врач высшей категории, стаж работы — 18 лет. </b></p>
                            <p>« Я каждый день своей активной практики принимаю людей с болезнями суставов. Мы постоянно проводим профилактические мероприятия <br>и стараемся донести нашим жителям, что они всегда в зоне риска, учитывая экологию наших широт. </p>
                            <p>&nbsp;Но к сожалению, многие сильно затягивают с походом к врачам! И у них развиваются такие болезни, которые можно было бы быстро и безопасно предотвратить приемом Хондрактина. Это средство помогает избавиться от боли и осложнений даже критически больных суставов. »</p>
                        </div>
                        <div class=points>
                            <div class=points_inner></div>
                            <div class="points_inner activePoint"></div>
                            <div class=points_inner></div>
                        </div>
                    </div>
                    <div class=slide_text>
                        <div class=fix_height>
                            <h4>Почему врачи рекомендуют Хондрактин при <br>первых симптомах заболеваний суставов? </h4>
                            <p>&nbsp;<b>Анна Михайловна Забелина, врач-ревматолог высшей категории, стаж работы - 17 лет.</b></p>
                            <p>« Большинство больных с проблемами суставов приходят к ревматологу только в тот момент, когда боль становится уже невыносимой. Даже в таких случаях теперь можно помогать больным достаточно быстро и эффективно. </p>
                            <p>&nbsp; Но я рекомендую Хондрактин не только <br>в период острой боли, но и в качестве профилактики, чтобы предотвратить возрастное разрушение или воспаление хрящевых тканей.»</p>
                        </div>
                        <div class=points>
                            <div class=points_inner></div>
                            <div class=points_inner></div>
                            <div class="points_inner activePoint"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id=6_b class=effects_block>
    <div class=container>
        <div class=distance>
            <div class=row>
                <div class=effects_title>
                    <h2>Как действует на поврежденные суставы <span class=red>ХОНДРАКТИН?</span> </h2>
                    <p>Средство защищает от метаболических разрушений, действует как противовоспалительное средство и стимулирует выработку гиалуроновой кислоты организмом. Витаминно минеральный комплекс в составе, в сочетании с гиалуроновой кислотой быстро восстанавливает поврежденные суставы. </p>
                </div>
            </div>
            <div class=row>
                <div class=effects_product><img src="{{ asset('/') }}naturapharmFiles/zglobovi1/product.png" alt="Vitamix"></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="circleItem circleBottom">
                        <div class=bg_img>
                            <img src="{{ asset('/') }}naturapharmFiles/zglobovi1/smola.png" alt="Vitamix">
                            <div class=circleUp></div>
                        </div>
                        <div class=circleText>
                            <h4>Экстракт смолы Босвеллии</h4>
                            <p>Природный антисептик и источник пектинов. Обладает мощным противоартритным действием.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="circleItem SecondChild">
                        <div class=bg_img>
                            <img src="{{ asset('/') }}naturapharmFiles/zglobovi1/circle_2.png" alt="Vitamix">
                            <div class=circleUp></div>
                        </div>
                        <div class=circleText>
                            <h4>Минеральный комплекс</h4>
                            <p>Обладает противовоспалительными свойствами, ускоряет регенерацию хрящевых тканей.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="circleItem circleBottom LastChild">
                        <div class=bg_img>
                            <img src="{{ asset('/') }}naturapharmFiles/zglobovi1/circle_3.png" alt="Vitamix">
                            <div class=circleUp></div>
                        </div>
                        <div class=circleText>
                            <h4>Экстракт листьев Крапивы</h4>
                            <p>Выводит радиацию из организма, устраняет воспаление, снимает болевой синдром.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=row>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class=circleItem>
                        <div class=bg_img>
                            <img src="{{ asset('/') }}naturapharmFiles/zglobovi1/circle_4.png" alt="Vitamix">
                            <div class=circleUp></div>
                        </div>
                        <div class=circleText>
                            <h4>Экстракт Гарпагофитума</h4>
                            <p>Очищает от токсинов и свободных радикалов, укрепляет стенки сосудов и клетки тканей.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="circleItem circleBottom SecondChild">
                        <div class=bg_img>
                            <img src="{{ asset('/') }}naturapharmFiles/zglobovi1/circle_5.png" alt="Vitamix">
                            <div class=circleUp></div>
                        </div>
                        <div class=circleText>
                            <h4>Экстракт травы Сабельника </h4>
                            <p>Улучшает подвижность суставов и эластичность хрящевых тканей.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="circleItem LastChild">
                        <div class=bg_img>
                            <img src="{{ asset('/') }}naturapharmFiles/zglobovi1/circle_6.png" alt="Vitamix">
                            <div class=circleUp></div>
                        </div>
                        <div class=circleText>
                            <h4>Гиалуроновая кислота</h4>
                            <p>Наполняет ткани и клетки суставов необходимыми минералами и микроэлементами.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id=7_b class=comments>
    <div class=container>
        <div class="row distance">
            <h2><span class=blue>Истории тех, кто уже спас <br>свои суставы от болезней! </span></h2>
            <div class="col-lg-offset-1 col-md-offset-0 col-sm-offset-0 col-lg-10 col-md-12 col-sm-12 col-xs-12">
                <button id=dotPrev class=arrow_left><img src="{{ asset('/') }}naturapharmFiles/zglobovi1/left-arrow.png" alt="Vitamix"></button>
                <button id=dotNext class=arrow_right><img src="{{ asset('/') }}naturapharmFiles/zglobovi1/right-arrow.png" alt="Vitamix"></button>
                <div class=sl_2>
                    <div class=slider_item>
                        <div class=slider_img><img src="{{ asset('/') }}naturapharmFiles/zglobovi1/prod_3.jpg" alt="Vitamix"></div>
                        <div class=slider_content>
                            <img src="{{ asset('/') }}naturapharmFiles/zglobovi1/kov.png" alt="Vitamix">
                            <p>Начала увлекаться бегом, но в какой-то момент сильно заболели колени. Мой тренер сказал, что бег больше <br>не для меня, но это единственное, что помогает мне отвлечься и снять стресс после работы. Услышала <br>от знакомой, что та спасается Хондрактином, дала <br>мне ссылку на ваш сайт и я заказала себе. Через месяц <br>я уже в новых кроссовках снова на своей любимой трассе для пробежек! Хондрактин - большое спасение для всех, кто увлекается спортом и заботится <br>о своих суставах! </p>
                            <p><span>Виктория Ломова, <br>37 лет. </span></p>
                        </div>
                    </div>
                    <div class=slider_item>
                        <div class=slider_img><img src="{{ asset('/') }}naturapharmFiles/zglobovi1/prod_2.jpg" alt="Vitamix"></div>
                        <div class=slider_content>
                            <img src="{{ asset('/') }}naturapharmFiles/zglobovi1/kov.png" alt="Vitamix">
                            <p>С 30 лет болели суставы, но я никогда не ходила <br>по врачам с этой проблемой. К 56 годам заболел тазобедренный сустав, стало сложно ходить, а у меня еще и лишний вес, так я один день вообще еле встала с кровати. Решила попробовать пить Хондрактин и удивилась, как быстро боль ушла. Сперва перестали болеть колени и лодыжки, а потом и бедро отпустило. Очень эффективное средство, спасибо большое за его создание! </p>
                            <p><span>Елена Антонова, <br>56 лет. </span></p>
                        </div>
                    </div>
                    <div class=slider_item>
                        <div class=slider_img><img src="{{ asset('/') }}naturapharmFiles/zglobovi1/prod_1.jpg" alt="Vitamix"></div>
                        <div class=slider_content>
                            <img src="{{ asset('/') }}naturapharmFiles/zglobovi1/kov.png" alt="Vitamix">
                            <p>Работаю программистом, очень много сижу. <br>И помимо болей в коленях в какой-то момент добавились боли в локте на одной руке и в пальцах, <br>в каждом суставе. Знакомый врач посоветовал Хондрактин, после приема все боли ушли и еще ушел хруст шеи, который постоянно меня беспокоил. </p>
                            <p><span>Сергей Максимков, <br>29 лет.</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=dot>
                <div class=black_box></div>
                <div class=black_box></div>
            </div>
        </div>
    </div>
</section>
<section id=8_b class=HowTo>
    <div class=container>
        <div class="row distance">
            <h2><span class=blue>ПРИНИМАТЬ ХОНДРАКТИН - ПРОСТО!</span></h2>
            <div class="col-lg-offset-2 col-md-offset-1 col-lg-3 col-md-4 col-sm-5 col-xs-5">
                <div class=hImg><img src="{{ asset('/') }}naturapharmFiles/zglobovi1/stakan.png" alt="Vitamix"></div>
                <p>Растворите <b>одну шипучую таблетку</b> в 150 мл. чистой воды </p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <img class=arrow_blue src="{{ asset('/') }}naturapharmFiles/zglobovi1/blue_arrow.png" alt="Vitamix">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-5 col-xs-5">
                <div class=hImg><img src="{{ asset('/') }}naturapharmFiles/zglobovi1/clocks.png" alt="Vitamix"></div>
                <p>Принимайте <b>2 раза в день</b>, утром <br>и вечером после или во время еды. </p>
            </div>
        </div>
    </div>
</section>
<section id=9_b class=Code>
    <div class=container>
        <div class="row distance">
            <h2><span class=blue>ЭТО ВАЖНО!</span></h2>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 product_bg">
                <div class=grey_content>
                    <div id=animated class=circleUp></div>
                    <p><b>Хондрактин</b> — популярное и эффективное средство для суставов. Поэтому лже-фармкомпании производят подделки средства, чтобы наживаться на имени бренда. <br>Чтобы проверить вашу упаковку Хондрактина, проверьте <b>уникальный штрих-код</b> на упаковке.</p>
                </div>
                <div class=clear></div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class=codeForm>
                    <img src="{{ asset('/') }}naturapharmFiles/zglobovi1/shtrih.png" alt="Vitamix">
                    <input type=text placeholder="Введите код">
                    <button class=btnOrder>ПРОВЕРИТЬ КОД</button>
                </div>
                <div class=clear></div>
            </div>
        </div>
    </div>
</section>
<section id=10_b class=trust>
    <div class=container>
        <div class="row distance">
            <h2><span class=white>Нам можно доверять</span></h2>
            <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 trust_inner">
                <div class=trust_element><img src="{{ asset('/') }}naturapharmFiles/zglobovi1/srt_1.jpg" alt="Vitamix"></div>
                <div class=trust_element><img src="{{ asset('/') }}naturapharmFiles/zglobovi1/ser_2.jpg" alt="Vitamix"></div>
                <div class=trust_element><img src="{{ asset('/') }}naturapharmFiles/zglobovi1/sert_3.jpg" alt="Vitamix"></div>
            </div>
        </div>
    </div>
</section>
<section id=11_b class=delivery>
    <div class=container>
        <div class="row distance">
            <h2><span class=blue>КАК ЗАКАЗАТЬ ХОНДРАКТИН?</span></h2>
            <div class=delivery_inner>
                <div class=delivery_element>
                    <div class=delivery_img>
                        <div class=circleUp></div>
                        <img src="{{ asset('/') }}naturapharmFiles/zglobovi1/call-center-worker.png" alt="Vitamix">
                    </div>
                    <p><b>Оставьте ваш номер телефона</b> <br>и контактные данные на сайте. <br><b>Мы свяжемся</b> с Вами через пару минут после поступления заявки;</p>
                </div>
                <div class=arrow_blue><img src="{{ asset('/') }}naturapharmFiles/zglobovi1/blue_arrow.png" alt="Vitamix"></div>
                <div class=delivery_element>
                    <div class=delivery_img>
                        <div class=circleUp></div>
                        <img src="{{ asset('/') }}naturapharmFiles/zglobovi1/location-on-map.png" alt="Vitamix">
                    </div>
                    <p><b>Доставка</b> осуществляется курьером или почтой - <b>в любую точку России или СНГ</b>;</p>
                </div>
                <div class=arrow_blue><img src="{{ asset('/') }}naturapharmFiles/zglobovi1/blue_arrow.png" alt="Vitamix"></div>
                <div class=delivery_element>
                    <div class=delivery_img>
                        <div class=circleUp></div>
                        <img src="{{ asset('/') }}naturapharmFiles/zglobovi1/verification-of-delivery.png" alt="Vitamix">
                    </div>
                    <p><b>Оплата</b> производится <br>наложенным платежом после <b>получения вашего средства <br>в ваши руки</b>.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id=end class=main>
    <div class=container>
        <div class="row contant">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <h2><span class=red>ХОНДРАКТИН</span> - СУСТАВЫ ЗАЩИТИТ!</h2>
                <h4>Хондрактин восстанавливает поврежденные суставы за 1 курс приема</h4>
                <div class=product>
                    <div class=effects>
                        <ul>
                            <li>Защищает суставы<br> от разрушительного воздействия излучения</li>
                            <li>Восстанавливает<br> хрящевые ткани изнутри </li>
                            <li>Снимает боль <br>с первого дня приема </li>
                            <li>Натуральный и <br>безопасный состав</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class=orderForm>
                    <h3>АКЦИЯ<br>
                        <span>“ЗДОРОВЫЕ СУСТАВЫ НАЦИИ”</span>
                    </h3>
                    <h5><span class=price_land_s4>5290</span> <span class=price_land_curr>руб.</span> <br><span class=red><span class=price_land_s1>0</span> <span class=price_land_curr>руб.</span>*</span></h5>
                    <form action="" id="order_form">
                        <input name=name type=text placeholder='Ваше имя'>
                        <input name=phone type=text placeholder='Ваш номер телефона'>
                        <button class=btnOrder type=submit>ХОЧУ ЗАЩИТИТЬ СВОИ СУСТАВЫ</button>
                    </form>
                    <span class=for_>*При заказе курса</span>
                </div>
                <div class=protection><img src="{{ asset('/') }}naturapharmFiles/zglobovi1/protect.png" alt="Vitamix"><span>Ваши данные под защитой</span></div>
                <div class=clear></div>
                <div class=starper></div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}naturapharmFiles/zglobovi1/scripts.js"></script>
<script>eval(mod_pagespeed_feQp$dkoGl);</script>
<script>eval(mod_pagespeed_QljS_Y6_8n);</script>
<script>$('.sl_2').slick({dots:true});</script>
@include('components.pixel_footer')
</body>
</html>