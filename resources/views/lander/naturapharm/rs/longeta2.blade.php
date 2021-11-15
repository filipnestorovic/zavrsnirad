<!doctype html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta http-equiv=X-UA-Compatible content="ie=edge">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel=stylesheet>
    <link rel=stylesheet href="{{ asset('/') }}naturapharmFiles/longeta2/slick.css">
    <link rel=stylesheet href="{{ asset('/') }}naturapharmFiles/longeta2/slick-theme.css">
    <link rel=stylesheet href="{{ asset('/') }}naturapharmFiles/longeta2/style.css">
    <link rel=icon type="image/png" href=""/>
    <style>
        @font-face {
            font-family: "GothamPro-Bold";
            src: url({{ asset('/') }}fonts/GothamPro-Bold.eot?#iefix) format("embedded-opentype"), url({{ asset('/') }}fonts/GothamPro-Bold.otf) format("opentype"), url({{ asset('/') }}fonts/GothamPro-Bold.woff) format("woff"), url({{ asset('/') }}fonts/GothamPro-Bold.ttf) format("truetype"),
            url({{ asset('/') }}fonts/GothamPro-Bold.svg#GothamPro-Bold) format("svg");
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: "GothamPro";
            src: url({{ asset('/') }}fonts/GothamPro.eot?#iefix) format("embedded-opentype"), url({{ asset('/') }}fonts/GothamPro.otf) format("opentype"), url({{ asset('/') }}fonts/GothamPro.woff) format("woff"), url({{ asset('/') }}fonts/GothamPro.ttf) format("truetype"),
            url({{ asset('/') }}fonts/GothamPro.svg#GothamPro) format("svg");
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: "MuseoSansCyrl";
            src: url({{ asset('/') }}fonts/MuseoSansCyrl_2.eot?#iefix) format("embedded-opentype"), url({{ asset('/') }}fonts/MuseoSansCyrl_2.woff) format("woff"), url({{ asset('/') }}fonts/MuseoSansCyrl_2.ttf) format("truetype"),
            url({{ asset('/') }}fonts/MuseoSansCyrl_2.svg#MuseoSansCyrl_2) format("svg");
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>
<body>
<div class=info>
    <div class=info__body>
        <div class=info__top>
            <div class=info__top-logo>
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/logo.png" alt=""/>
            </div>
            <div class=info__top-title>
                <h2>Комплекс двойного действия от вальгуса стопы</h2>
            </div>
        </div>
        <div class=info__title>
            <h3>Здоровая стопа без "косточки"</h3>
        </div>
        <div class=info__content>
            <div class="info__pack dec">
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/info-pack-1.png" alt=""/>
            </div>
            <div class=info__list>
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/gif.gif" alt=""/>
                <ul>
                    <li>
                        Растворяет солевую
                        шишку и мягко
                        выводит её из организма
                    </li>
                    <li>
                        Возвращает
                        палец в нормальное
                        положение
                    </li>
                    <li>
                        Укрепляет мышцы
                        стопы и предотвращает
                        повторное появление
                        вальгуса
                    </li>
                </ul>
            </div>
            <div class="info__pack mob">
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/info-pack.png" alt=""/>
            </div>
        </div>
        <div class=info__action>
            <div class=info__action-top>
                <div class=info__action-title>
                    <p>Успейте оформить
                        заказ <span>ПО АКЦИИ!</span>
                    </p>
                </div>
                <div class=info__action-price>
                    <p class=info__action-price__old>Stara cena <span><s><b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr>RSD</b></s></span></p>
                    <p class=info__action-price__new><span><b class=price_land_s1>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr>RSD</b>*</span></p>
                </div>
            </div>
            <div class=info__action-form>
                <form action="{{$orderRoute}}" method=post class=landing__form>
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input type=text name=name placeholder="Ime i prezime">
                    <input type=tel name=phone placeholder="Telefon">
                    <input type=text name=shipping_address placeholder="Adresa">
                    <input type=text name=shipping_city placeholder="Grad">
                    <button type=submit>Poručite sada</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class=problem>
    <div class=problem__body>
        <div class=problem__title>
            <h2>Знакомы эти проблемы?</h2>
        </div>
        <div class=problem__list>
            <ul>
                <li>
                    <div class=problem__img>
                        <img src="{{ asset('/') }}naturapharmFiles/longeta2/problem-img1.jpg" alt=""/>
                    </div>
                    <div class=problem__desc>
                        <h4>ДИСКОМФОРТ</h4>
                        <p>Вы не можете подобрать себе обувь из-за выехавшего пальца </p>
                    </div>
                </li>
                <li>
                    <div class=problem__img>
                        <img src="{{ asset('/') }}naturapharmFiles/longeta2/problem-img2.jpg" alt=""/>
                    </div>
                    <div class=problem__desc>
                        <h4>ИСКРИВЛЕНИЕ</h4>
                        <p>Шишка уродует Вашу
                            стопу до неузнаваемости
                        </p>
                    </div>
                </li>
                <li>
                    <div class=problem__img>
                        <img src="{{ asset('/') }}naturapharmFiles/longeta2/problem-img3.jpg" alt=""/>
                    </div>
                    <div class=problem__desc>
                        <h4>БОЛЬ</h4>
                        <p>Вы испытываете невыносимую боль в стопе при ходьбе</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class=come>
    <div class=come__title>
        <h2>Что приводит к вальгусу стопы?</h2>
    </div>
    <div class=come__list>
        <ul>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/come-img1.jpg" alt=""/>
                <p>Неудобная обувь
                    и высокие каблуки
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/come-img2.jpg" alt=""/>
                <p>Лишний вес</p>
            </li>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/come-img3.jpg" alt=""/>
                <p>Болезни опорно-
                    двигательного аппарата
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/come-img4.jpg" alt=""/>
                <p>Слабый связочно-
                    мышечный аппарат
                </p>
            </li>
        </ul>
    </div>
</div>
<div class=bg>
    <div class=time>
        <div class=time__body>
            <div class=time__title>
                <h2>Настало время лечиться</h2>
            </div>
            <div class=time__content>
                <div class=time__pack>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/time-pack.png" alt=""/>
                </div>
                <div class=time__desc>
                    <p>По статистике каждая вторая женщина старше 45 лет имеет вальгус стопы - видимое <span>искривление
                        большого пальца и нарост в виде шишки.</span> Исправить
                        это нелегко, гораздо проще предотвратить болезнь.
                        До недавнего времени пациентов с вальгусом стопы
                        приходилось оперировать.
                    </p>
                    <p>Сегодня можно <span>избавиться от вальгуса за полтора-два
                        месяца с помощью препарата OrthoFix.</span> В его составе
                        комплекс редких компонентов, действие которых
                        направлено на борьбу с солевыми отложениями
                        в суставной сумке и укрепление мышц.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class=work>
        <div class=work__body>
            <div class=work__title>
                <h2>Как работает OrthoFix?</h2>
            </div>
            <div class=work__content>
                <div class=work__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/work-img.png" alt=""/>
                </div>
                <div class=work__list>
                    <ul>
                        <li>
                            Растворяет и выводит солевые
                            отложения, избавляя тем самым
                            от шишки на пальце
                        </li>
                        <li>
                            Ставит палец в нормальное
                            положение и крепко фиксирует
                        </li>
                        <li>
                            Укрепляет мышцы, препятствуя
                            повторному появлению болезни
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=expert>
        <div class=expert__body>
            <div class="expert__img dec">
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/expert-img.png" alt=""/>
                <button data-toggle=scroll data-id="#footerForm">Заказать </button>
            </div>
            <div class=expert__desc>
                <div class=expert__desc-title>
                    <h2>Эксперты говорят</h2>
                </div>
                <div class=expert__desc-text>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/expert-img.png" alt="" class=mob   />
                    <p>Вальгусная деформация стопы возникает при большой
                        или неправильной нагрузке на стопу и при слабом
                        связочно-мышечном аппарате. Поэтому <span>для лечения
                        вальгуса стопы очень важно не только устранить
                        искривление</span> путем растворения солей, которые
                        образуют уплотнение в суставной сумке и неестественно
                        искривляют палец.
                    </p>
                    <p>Но и укрепить мышцы и связки, чтобы лечение было эффективным,
                        и проблема не вернулась снова. <span>OrthoFix действует сразу в
                        двух направлениях.</span> Он растворяет солевые отложения, мягко выводя
                        их из организма, и укрепляет мышцы. В этом его основное отличие
                        от большинства других препаратов.
                    </p>
                    <p><span>Врач-ортопед, к.м.н., стаж 20 лет</span></p>
                    <button data-toggle=scroll data-id="#footerForm" class=mob>Заказать </button>
                </div>
            </div>
        </div>
    </div>
    <div class=consist>
        <div class=consist__body>
            <div class=consist__title>
                <h2>Уникальный комплекс активных компонентов</h2>
            </div>
            <div class=consist__content>
                <div class=consist__pack>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/consist-pack.png" alt="" style="max-width: 100%"/>
                </div>
                <div class=consist__list>
                    <ul>
                        <li>
                            <div class=consist__list-top>
                                <img src="{{ asset('/') }}naturapharmFiles/longeta2/consist-img1.png" alt=""/>
                                <h4><span>Вулканическая
                                 соль</span>
                                </h4>
                            </div>
                            <div class=consist__list-text>
                                <p>Быстро снимает воспаление и боль, регенерирует больные клетки,
                                    благодаря высокой концентрации аллантоина
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=consist__list-top>
                                <img src="{{ asset('/') }}naturapharmFiles/longeta2/consist-img2.png" alt=""/>
                                <h4><span>Куркума</span></h4>
                            </div>
                            <div class=consist__list-text>
                                <p>Выпрямляет сдавленные и искривленные мягкие части
                                    основного сустава большого пальца, а также исправляет развивающееся искривление
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=consist__list-top>
                                <img src="{{ asset('/') }}naturapharmFiles/longeta2/consist-img3.png" alt=""/>
                                <h4><span>Муравьиная
                                 кислота</span>
                                </h4>
                            </div>
                            <div class=consist__list-text>
                                <p>Снимает воспаления в суставах и хрящевых тканях
                                    стопы, предотвращает мозолистые образования
                                    и размягчает хрящевые наросты
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=consist__list-top>
                                <img src="{{ asset('/') }}naturapharmFiles/longeta2/consist-img4.png" alt=""/>
                                <h4><span>Филлантус
                                 нирури</span>
                                </h4>
                            </div>
                            <div class=consist__list-text>
                                <p>Возвращает стопе природную форму, предохраняет
                                    и снимает болезненную опухоль, укрепляет мышцы
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=why>
    <div class=why__title>
        <h2>Почему OrthoFix лучше других методов?</h2>
    </div>
    <div class=why__list>
        <ul>
            <li>
                <div class=why__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/why-img1.png" alt=""/>
                </div>
                <div class=why__desc>
                    <h4>Медицинские препараты</h4>
                    <ul>
                        <li>
                            Химический состав
                        </li>
                        <li>
                            Временный эффект
                        </li>
                        <li>
                            Устраняют симптомы,
                            а не причину
                        </li>
                        <li>
                            Имеют противопоказания
                        </li>
                        <li>
                            Портят обмен веществ
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <div class=why__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/why-img2.png" alt=""/>
                </div>
                <div class=why__desc>
                    <h4>Операция</h4>
                    <ul>
                        <li>
                            Полное избавление
                            от проблемы
                        </li>
                        <li>
                            Проблема может скоро вернуться
                        </li>
                        <li>
                            Имеет противопоказания
                        </li>
                        <li>
                            Тяжелая реабилитация
                        </li>
                        <li>
                            Высокая стоимость
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <div class=why__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/why-img3.png" alt=""/>
                </div>
                <div class=why__desc>
                    <h4> OrthoFix </h4>
                    <ul>
                        <li>
                            Абсолютно натуральный состав
                        </li>
                        <li>
                            Полное избавление от
                            проблемы навсегда
                        </li>
                        <li>
                            Устрание как симптомов,
                            так и причины
                        </li>
                        <li>
                            Не имеет противопоказаний
                        </li>
                        <li>
                            Абсолютно безопасно
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class=use>
    <div class=use__title>
        <h2>Как использовать?</h2>
    </div>
    <div class=use__list>
        <ul>
            <li>
                <div class=use__number>
                    <p>01</p>
                </div>
                <div class=use__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/use-img1.jpg" alt=""/>
                </div>
                <div class=use__text>
                    <p>Растворите саше в 3-4 литрах
                        теплой воды
                    </p>
                </div>
            </li>
            <li>
                <div class=use__number>
                    <p>02</p>
                </div>
                <div class=use__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/use-img2.jpg" alt=""/>
                </div>
                <div class=use__text>
                    <p>Опустите в раствор ноги на 10-15 минут</p>
                </div>
            </li>
            <li>
                <div class=use__number>
                    <p>03</p>
                </div>
                <div class=use__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/use-img3.jpg" alt=""/>
                </div>
                <div class=use__text>
                    <p>После процедуры нанесите препарат на 15 минут на чистую сухую кожу проблемной зоны</p>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class=feed>
    <div class=feed__title>
        <h2>Отзывы наших клиентов</h2>
    </div>
    <div class=feed__list>
        <ul>
            <li>
                <div class=feed__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/feed-img1.png" alt=""/>
                </div>
                <div class=feed__desc>
                    <h4>Ольга</h4>
                    <p>Думала, что у меня впереди только операция, и никакие
                        ортопедические повязки или кольца мне не помогут.
                        Но Ортофикс меня спас. Посоветовала мне его новая
                        соседка по даче. Я бы в жизни не нашла его. Месяц
                        использовала - палец на место встал!
                    </p>
                </div>
            </li>
            <li>
                <div class=feed__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/feed-img2.png" alt=""/>
                </div>
                <div class=feed__desc>
                    <h4>Диана</h4>
                    <p>OrthoFix единственный препарат, который мне помог избавиться
                        от вальгуса. Косточка на большом пальце выпирала очень сильно.
                        Пробовала ну абсолютно все, помог только OrthoFix. И боли ушли,
                        и косточка встала на место, и палец теперь смотрит куда надо.
                    </p>
                </div>
            </li>
            <li>
                <div class=feed__img>
                    <img src="{{ asset('/') }}naturapharmFiles/longeta2/feed-img3.png" alt=""/>
                </div>
                <div class=feed__desc>
                    <h4>Николай</h4>
                    <p>Вальгус стопы поставили несколько лет назад. Я носил специальные повязки, чтобы болезнь не прогрессировала, но в итоге палец все
                        равно сдвинулся неправильно. Повезло, что попала к другому врачу.
                        Он мне выписал Ортофикс, и пальчик мой встал на место за месяц с небольшим.
                    </p>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="hr dec">
    <hr/>
</div>
<div class=info>
    <div class=info__body>
        <div class=info__top>
            <div class=info__top-logo>
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/logo.png" alt=""/>
            </div>
            <div class=info__top-title>
                <h2>Комплекс двойного действия от вальгуса стопы</h2>
            </div>
        </div>
        <div class=info__title>
            <h3>Здоровая стопа без "косточки"</h3>
        </div>
        <div class=info__content>
            <div class="info__pack dec">
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/info-pack-1.png" alt=""/>
            </div>
            <div class=info__list>
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/gif.gif" alt=""/>
                <ul>
                    <li>
                        Растворяет солевую
                        шишку и мягко
                        выводит её из организма
                    </li>
                    <li>
                        Возвращает
                        палец в нормальное
                        положение
                    </li>
                    <li>
                        Укрепляет мышцы
                        стопы и предотвращает
                        повторное появление
                        вальгуса
                    </li>
                </ul>
            </div>
            <div class="info__pack mob">
                <img src="{{ asset('/') }}naturapharmFiles/longeta2/info-pack.png" alt=""/>
            </div>
        </div>
        <div class=info__action>
            <div class=info__action-top>
                <div class=info__action-title>
                    <p>Успейте оформить
                        заказ <span>ПО АКЦИИ!</span>
                    </p>
                </div>
                <div class=info__action-price>
                    <p class=info__action-price__old>Старая цена <span><s><b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr>RSD</b></s></span></p>
                    <p class=info__action-price__new><span><b class=price_land_s1>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr>RSD</b>*</span></p>
                </div>
            </div>
            <div class=info__action-form id="footerForm">
                <form action="{{$orderRoute}}" method=post class=landing__form>
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input type=text name=name placeholder="Ime i prezime">
                    <input type=tel name=phone placeholder="Telefon">
                    <input type=text name=shipping_address placeholder="Adresa">
                    <input type=text name=shipping_city placeholder="Grad">
                    <button type=submit>Poručite sada</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}naturapharmFiles/longeta2/scripts.js"></script>
<script>eval(mod_pagespeed_s1mKdTeuWx);</script>
<script>eval(mod_pagespeed_XYXCDI$GL5);</script>
</body>
</html>