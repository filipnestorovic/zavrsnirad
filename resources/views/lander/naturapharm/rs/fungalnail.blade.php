<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/fungalnail/style.css">
    <link rel="shortcut icon" href="{{ asset('/') }}naturapharmFiles/fungalnail/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
</head>
<body>
<div class="body-wrap">
    <!--header-->
    <header>
        <div class="wrapper">
            <div class="header__logo"></div>
            <div class="header__call headerCallJs ever-popup-btn">Заказать бесплатный звонок</div>
            <div class="header__blocks">
                <a class="scrollTo" href="#action1">Действие крема</a>
                <a class="scrollTo" href="#effect">Эффективность</a>
                <a class="scrollTo" href="#reviews">Отзывы</a>
            </div>
        </div>
    </header>
    <!--section1-->
    <div class="section1">
        <div class="wrapper">
            <p class="main-title">Простой способ победить грибок, зуд и трещины!</p>
            <div class="section-wrap">
                <div class="section1-left">
                    <div class="do-blocks">
                        <div class="do do--1">Лечит грибок стоп и ногтей</div>
                        <div class="do do--2">Снимает зуд и шелушение</div>
                        <div class="do do--3">Устраняет потливость и запах</div>
                        <div class="do do--4">Заживляет трещины на пятках</div>
                    </div>
                </div>
                <div class="section1-center">
                    <div class="sale-wrap">
                        <p class="sale-title">СКИДКА</p>
                        <p class="sale-text">-50%</p>
                    </div>
                    <div class="sale-product-img"></div>
                </div>
                <div class="section1-right">
                    <div class="sale-wrapper--mob">
                        <div class="sale-wrap--mob">
                            <p class="sale-title">СКИДКА</p>
                            <p class="sale-text">-50%</p>
                        </div>
                        <div class="product-sh--mob">
                            Ограниченная серия!
                            <br>Спешите!
                            <br> Только <span class="product-how-much"><span class="lastpack">60</span> упаковок</span>
                            <br>по специальной цене!
                        </div>
                    </div>
                    <div class="product-sh">
                        Ограниченная серия! Спешите!
                        <br> Только <span class="product-how-much"><span class="lastpack">60</span> упаковок</span> по специальной цене!
                    </div>
                    <div class="form-bg_top">
                        <div class="wrap-price--top">
                            <div class="price-old-wrap--top">
                                <p class="price-old-text--top">Полная цена:</p>
                                <p class="price-old-x--top">
                                 <span class="price-x--top x_price_previous">
                                    {{ $prices[1]['originalPrice'] }}
                                 </span>
                                    <span class="price-currency--top x_currency">
                                    {{ $prices[1]['currency'] }}
                                 </span>
                                </p>
                            </div>
                            <div class="price-new-wrap--top">
                                <p class="price-new-text--top">Цена со скидкой</p>
                                <p class="price-new-x--top">
                                 <span class="price-x--top x_price_current">
                                    {{ $prices[1]['amount'] }}
                                 </span>
                                    <span class="price-currency--top x_currency">
                                    {{ $prices[1]['currency'] }}
                                 </span>
                                </p>
                            </div>
                        </div>
                        <div class="form-main">
                            <form method="post" action="#" class="x_order_form">
                                <input class="input-form" type="text" name="name" placeholder="Введите ваше имя" required>
                                <input class="input-form" type="text" name="phone" placeholder="Введите номер телефона" required>
                                <button class="submit-form" type="submit">Заказать</button>
                            </form>
                        </div>
                        <div class="protection--mob">Ваши данные под защитой</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--section2-->
    <div class="section2">
        <div class="wrapper">
            <p class="title"><span class="title2-span1">Считаете, что грибок обошел вас стороной?</span> Если вы заметили хотя бы один симптом у себя,
                <br> то начните лечение уже сегодня
            </p>
            <div class="symptoms">
                <div class="symptoms__block">
                    <p class="symptoms__text">Неприятный запах</p>
                    <p class="symptoms__text">Трещины и шелушение</p>
                    <p class="symptoms__text">Неправильная форма ногтя</p>
                    <p class="symptoms__text">Ноготь становится
                        <br>коричневым или желтым
                    </p>
                    <p class="symptoms__text">Бороздки и белые
                        <br>пятна на ногте
                    </p>
                </div>
                <div class="symptoms__block">
                    <p class="symptoms__text">Зуд и жжение</p>
                    <p class="symptoms__text">Волдыри на стопах</p>
                    <p class="symptoms__text">Онемение и покалывание</p>
                    <p class="symptoms__text">Местные уплотнения
                        <br>кожи в области стопы
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--section3-->
    <div class="section3">
        <div class="wrapper">
            <p class="title">Что будет, если не лечить грибок стопы</p>
            <p class="stage__main-text">По статистике каждый пятый житель страны страдает грибковым заболеванием.
                <br> Тесная закрытая обувь, синтетические носки, сауны, бани, бассейны.
                <br> <span class="stage__span1">В летний сезон добавляются пляжи, парки, где многие ходят босиком.<br> Все это приводит к страшным болезням!</span> Стоп!
            </p>
            <div class="stage">
                <div class="stage__block stage__block--1">
                    <p class="stage__title">1-я стадия:</p>
                    <p class="stage__text"><i></i>Шелушение</p>
                    <p class="stage__text"><i></i>Зуд</p>
                    <p class="stage__text"><i></i>Потливость</p>
                    <p class="stage__text"><i></i>Неприятный запах</p>
                    <p class="stage__text"><i></i>Дискомфорт</p>
                </div>
                <div class="stage__block stage__block--2">
                    <p class="stage__title">2-я стадия:</p>
                    <p class="stage__text"><i></i>Грибок ногтей</p>
                    <p class="stage__text"><i></i>Глубокие трещины</p>
                    <p class="stage__text"><i></i>Усиленная потливость и зуд</p>
                    <p class="stage__text"><i></i>Стойкое зловоние</p>
                    <p class="stage__text"><i></i>Желтые, хрупкие ногти</p>
                    <p class="stage__text"><i></i>“Мертвая”, огрубевшая кожа</p>
                    <p class="stage__text"><i></i>Сильный дискомфорт
                        <br>во время ходьбы
                    </p>
                </div>
                <div class="stage__block stage__block--3">
                    <p class="stage__title">3-я стадия:</p>
                    <p class="stage__text"><i></i>Шелушение и зуд
                        <br>между пальцами
                    </p>
                    <p class="stage__text"><i></i>Язвы и глубокие
                        <br>трещины
                    </p>
                    <p class="stage__text"><i></i>Боль</p>
                    <p class="stage__text"><i></i>Гнойники</p>
                    <p class="stage__text"><i></i>Потеря ногтей</p>
                </div>
            </div>
            <div class="stage__main-block-bg"><span class="stage__main-block-span">Если не лечить стопы, можно быстро запустить опасную болезнь!</span>
                <br> Представьте, что это ваши ноги! Хотите иметь такие ступни?
                <br> Скажите нет!
            </div>
        </div>
    </div>
    <div class="section__wrap-bg">
        <!--section4-->
        <a id="action1"></a>
        <div class="section4">
            <div class="wrapper">
                <p class="title">Как действует <span class="title4-span1">крем «Микозор»?</span></p>
                <p class="work__text-top"><span class="work__span1">При регулярном применении, «Микозор» избавляет сразу от нескольких проблем.</span> Входящие в состав активные компоненты климбазол и фарнезол устраняют:</p>
                <div class="work__wrap">
                    <div class="work__block work__block--1">Грибок</div>
                    <div class="work__block work__block--2">Запах</div>
                    <div class="work__block work__block--3">Потливость</div>
                    <div class="work__block work__block--4">Трещины</div>
                </div>
                <div class="consist">
                    <p class="consist__text consist__text--1"><span class="consist__text--b">Маточное молочко</span> — останавливает развитие дрожжей и грибков. Избавляет от зуда. Оказывает разрушительное действие на грибок.</p>
                    <p class="consist__text consist__text--2"><span class="consist__text--b">Экстракт окопника</span> — “выключает” потовые железы. Дезинфицирует, подсушивает, дарит приятный аромат надолго.</p>
                    <p class="consist__text consist__text--2"><span class="consist__text--b">Масло грецкого ореха</span> — великолепно увлажняет и питает кожу ног, убирает огрубелости, отшелушивает, заживляет трещины.</p>
                    <p class="consist__text consist__text--4">В отличие от мазей, крем «Микозор» равномерно распределяется по всей поверхности стопы. Быстро впитывается и не оставляет следов на постельном белье и одежде. <span class="consist__span2">В лимитированную серию мы добавили каменное масло. Оно эффективно борется с мозолями и натоптышами. Дарит коже нежную прохладу и комфорт после тяжелого дня.</span></p>
                </div>
            </div>
        </div>
        <!--section5-->
        <div class="section5">
            <div class="sale-wrapper--mob sale-wrapper--mob-all">
                <div class="sale-wrap--mob">
                    <p class="sale-title">СКИДКА</p>
                    <p class="sale-text">-50%</p>
                </div>
                <div class="product-sh--mob">
                    Ограниченная серия!
                    <br>Спешите!
                    <br> Только <span class="product-how-much"><span class="lastpack">60</span> упаковок</span>
                    <br>по специальной цене!
                </div>
            </div>
            <div class="section-form">
                <div class="wrapper">
                    <div class="form-wrapper">
                        <div class="form-left">
                            <p class="form-left__title">Простой способ победить
                                <br>грибок, зуд и трещины!
                            </p>
                            <div class="wrap-sale-price">
                                <div class="form-left__sale-wrap">
                                    <p class="sale-title">СКИДКА</p>
                                    <p class="sale-text">-50%</p>
                                </div>
                                <div class="wrap-price--all">
                                    <div class="price-old-wrap--all">
                                        <p class="price-old-text--top">Полная цена:</p>
                                        <p class="price-old-x--top">
                                       <span class="price-x--top x_price_previous">
                                          {{ $prices[1]['originalPrice'] }}
                                       </span>
                                            <span class="price-currency--top x_currency">
                                          {{ $prices[1]['currency'] }}
                                       </span>
                                        </p>
                                    </div>
                                    <div class="price-new-wrap--all">
                                        <p class="price-new-text--top">Цена со скидкой</p>
                                        <p class="price-new-x--top">
                                       <span class="price-x--top x_price_current">
                                          {{ $prices[1]['amount'] }}
                                       </span>
                                            <span class="price-currency--top x_currency">
                                          {{ $prices[1]['currency'] }}
                                       </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-sh--all">
                                Ограниченная серия! Спешите!
                                <br> Только <span class="product-how-much--all"><span class="lastpack">60</span> упаковок</span> по специальной цене!
                            </div>
                        </div>
                        <div class="form-center"></div>
                        <div class="form-right">
                            <p class="form__title">Введите ваши данные в форму ниже</p>
                            <div class="form-bg--all">
                                <div class="wrap-price--top wrap-price--mob">
                                    <div class="price-old-wrap--top">
                                        <p class="price-old-text--top">Полная цена:</p>
                                        <p class="price-old-x--top">
                                       <span class="price-x--top x_price_previous">
                                          {{ $prices[1]['originalPrice'] }}
                                       </span>
                                            <span class="price-currency--top x_currency">
                                          {{ $prices[1]['currency'] }}
                                       </span>
                                        </p>
                                    </div>
                                    <div class="price-new-wrap--top">
                                        <p class="price-new-text--top">Цена со скидкой</p>
                                        <p class="price-new-x--top">
                                       <span class="price-x--top x_price_current">
                                          {{ $prices[1]['amount'] }}
                                       </span>
                                            <span class="price-currency--top x_currency">
                                          {{ $prices[1]['currency'] }}
                                       </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-main">
                                    <form method="post" action="#" class="x_order_form">
                                        <input class="input-form input-form--all" type="text" name="name" placeholder="Введите ваше имя" required>
                                        <input class="input-form input-form--all" type="text" name="phone" placeholder="Введите номер телефона" required>
                                        <button class="submit-form submit-form--all" type="submit">Заказать</button>
                                    </form>
                                </div>
                                <p class="protection">Ваши данные под защитой</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end section__wrap-bg-->
    <!--section6-->
    <a id="effect"></a>
    <div class="section6">
        <div class="wrapper">
            <p class="title">Эффект после 30 дней <span class="title6-span1">применения крема</span> «Микозор»</p>
            <div class="effect">
                <div class="effect__block effect__block--1">Исчезает грибок
                    <br>стоп и ногтей
                </div>
                <div class="effect__block effect__block--2">Проходит зуд и
                    <br>шелушение
                </div>
                <div class="effect__block effect__block--3">Приятный запах</div>
                <div class="effect__block effect__block--4">Ноги не потеют</div>
                <div class="effect__hr"></div>
                <div class="effect__block effect__block--5">Заживают
                    <br>трещины
                </div>
                <div class="effect__block effect__block--6">Бодрость и комфорт
                    <br>движения
                </div>
                <div class="effect__block effect__block--7">Красивые,
                    <br>ухоженные стопы
                </div>
            </div>
        </div>
    </div>
    <div class="section__wrap-bg-2">
        <!--section7-->
        <div class="section7">
            <div class="wrapper">
                <p class="title">Как применять <span class="title7-span1"> «Микозор»?</span></p>
                <p class="how-use">Крем нанести точечно на область поражения кожи или ногтя, распределить по поражённой области и вокруг лёгкими массажными движениями. Рекомендуемый курс 30 дней.
                </p>
            </div>
        </div>
        <!--section8-->
        <div class="section8">
            <div class="sale-wrapper--mob sale-wrapper--mob-all">
                <div class="sale-wrap--mob">
                    <p class="sale-title">СКИДКА</p>
                    <p class="sale-text">-50%</p>
                </div>
                <div class="product-sh--mob">
                    Ограниченная серия!
                    <br>Спешите!
                    <br> Только <span class="product-how-much"><span class="lastpack">60</span> упаковок</span>
                    <br>по специальной цене!
                </div>
            </div>
            <div class="section-form">
                <div class="wrapper">
                    <div class="form-wrapper">
                        <div class="form-left">
                            <p class="form-left__title">Простой способ победить
                                <br>грибок, зуд и трещины!
                            </p>
                            <div class="wrap-sale-price">
                                <div class="form-left__sale-wrap">
                                    <p class="sale-title">СКИДКА</p>
                                    <p class="sale-text">-50%</p>
                                </div>
                                <div class="wrap-price--all">
                                    <div class="price-old-wrap--all">
                                        <p class="price-old-text--top">Полная цена:</p>
                                        <p class="price-old-x--top">
                                       <span class="price-x--top x_price_previous">
                                          {{ $prices[1]['originalPrice'] }}
                                       </span>
                                            <span class="price-currency--top x_currency">
                                          {{ $prices[1]['currency'] }}
                                       </span>
                                        </p>
                                    </div>
                                    <div class="price-new-wrap--all">
                                        <p class="price-new-text--top">Цена со скидкой</p>
                                        <p class="price-new-x--top">
                                       <span class="price-x--top x_price_current">
                                          {{ $prices[1]['amount'] }}
                                       </span>
                                            <span class="price-currency--top x_currency">
                                          {{ $prices[1]['currency'] }}
                                       </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-sh--all">
                                Ограниченная серия! Спешите!
                                <br> Только <span class="product-how-much--all"><span class="lastpack">60</span> упаковок</span> по специальной цене!
                            </div>
                        </div>
                        <div class="form-center"></div>
                        <div class="form-right">
                            <p class="form__title">Введите ваши данные в форму ниже</p>
                            <div class="form-bg--all">
                                <div class="wrap-price--top wrap-price--mob">
                                    <div class="price-old-wrap--top">
                                        <p class="price-old-text--top">Полная цена:</p>
                                        <p class="price-old-x--top">
                                       <span class="price-x--top x_price_previous">
                                          {{ $prices[1]['originalPrice'] }}
                                       </span>
                                            <span class="price-currency--top x_currency">
                                          {{ $prices[1]['currency'] }}
                                       </span>
                                        </p>
                                    </div>
                                    <div class="price-new-wrap--top">
                                        <p class="price-new-text--top">Цена со скидкой</p>
                                        <p class="price-new-x--top">
                                       <span class="price-x--top x_price_current">
                                          {{ $prices[1]['amount'] }}
                                       </span>
                                            <span class="price-currency--top x_currency">
                                          {{ $prices[1]['currency'] }}
                                       </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-main">
                                    <form method="post" action="#" class="x_order_form">
                                        <input class="input-form input-form--all" type="text" name="name" placeholder="Введите ваше имя" required>
                                        <input class="input-form input-form--all" type="text" name="phone" placeholder="Введите номер телефона" required>
                                        <button class="submit-form submit-form--all" type="submit">Заказать</button>
                                    </form>
                                </div>
                                <p class="protection">Ваши данные под защитой</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end section__wrap-bg-2-->
    <!--section9-->
    <div class="section9">
        <div class="wrapper">
            <div class="better__wrap">
                <p class="title">Чем крем «Микозор» лучше других антигрибковых препаратов?</p>
                <div class="better">
                    <p class="better__text better__text--1">Антигрибковые средства делятся на два вида: первые не помогают, вторые работают только во время применения. Людям, страдающим от грибка ног, приходится постоянно пользоваться мазями.</p>
                    <p class="better__text">«Микозор» меняет ситуацию коренным образом. Массовые клинические исследования показали, что средство эффективно справляется с грибком стоп и ногтей. Уже после 1 курса грибок проходит и не возвращается. Такой мощный эффект достигается благодаря натуральным и природным ингредиентам.</p>
                </div>
            </div>
        </div>
    </div>
    <!--section10-->
    <!--section11-->
    <a id="reviews"></a>
    <div class="section11">
        <div class="wrapper">
            <p class="title">Отзывы</p>
            <div class="slider-wrapper" id="slider-wrap">
                <div id="slider">
                    <div class="slide">
                        <div class="text-wrap-slide text-wrap-slide--2">
                            <p class="text-slide">Пяточки, как у младенца! Я постоянно в бассейн хожу. Когда узнала, что у меня грибок, не сильно удивилась, душевые общие, раздевалки общие, хлор от грибка не спасет. А что делать. У нас там все девочки в раздевалке знают, что лучше микозора средства нет! Все мажем, из нас никто не болеет!</p>
                            <p class="name-slide">Александра, 47 лет</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="text-wrap-slide text-wrap-slide--1">
                            <p class="text-slide">До Микозора я думала, что грибок - как грибы, на время исчезают, а потом снова появляются... Перепробовала кучу других средств. Уходили симптомы, а грибок, видать, оставался в ноге. Пришлось к врачу отправляться, он и прописал «Микозор». Уже полгода меня ничего не беспокоит.
                                <br>Спасибо!
                            </p>
                            <p class="name-slide">Марина, 45 лет</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="text-wrap-slide text-wrap-slide--3">
                            <p class="text-slide">Грибок привыкает к тем средствам, которыми вы его лечите. У мужа страшно потели ноги, и грибок не проходил из-за этого. Из-за двух качеств выбрали «Микозор». Потому что от пота и от грибка. 3 месяца мазал. Все прошло!</p>
                            <p class="name-slide">Катерина, 31 год</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--section12-->
    <div class="section12">
        <div class="sale-wrapper--mob sale-wrapper--mob-all">
            <div class="sale-wrap--mob">
                <p class="sale-title">СКИДКА</p>
                <p class="sale-text">-50%</p>
            </div>
            <div class="product-sh--mob">
                Ограниченная серия!
                <br>Спешите!
                <br> Только <span class="product-how-much"><span class="lastpack">60</span> упаковок</span>
                <br>по специальной цене!
            </div>
        </div>
        <div class="section-form">
            <div class="wrapper">
                <div class="form-wrapper">
                    <div class="form-left">
                        <p class="form-left__title">Простой способ победить
                            <br>грибок, зуд и трещины!
                        </p>
                        <div class="wrap-sale-price">
                            <div class="form-left__sale-wrap">
                                <p class="sale-title">СКИДКА</p>
                                <p class="sale-text">-50%</p>
                            </div>
                            <div class="wrap-price--all">
                                <div class="price-old-wrap--all">
                                    <p class="price-old-text--top">Полная цена:</p>
                                    <p class="price-old-x--top">
                                    <span class="price-x--top x_price_previous">
                                       {{ $prices[1]['originalPrice'] }}
                                    </span>
                                        <span class="price-currency--top x_currency">
                                       {{ $prices[1]['currency'] }}
                                    </span>
                                    </p>
                                </div>
                                <div class="price-new-wrap--all">
                                    <p class="price-new-text--top">Цена со скидкой</p>
                                    <p class="price-new-x--top">
                                    <span class="price-x--top x_price_current">
                                       {{ $prices[1]['amount'] }}
                                    </span>
                                        <span class="price-currency--top x_currency">
                                       {{ $prices[1]['currency'] }}
                                    </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="product-sh--all">
                            Ограниченная серия! Спешите!
                            <br> Только <span class="product-how-much--all"><span class="lastpack">60</span> упаковок</span> по специальной цене!
                        </div>
                    </div>
                    <div class="form-center"></div>
                    <div class="form-right">
                        <p class="form__title">Введите ваши данные в форму ниже</p>
                        <div class="form-bg--all">
                            <div class="wrap-price--top wrap-price--mob">
                                <div class="price-old-wrap--top">
                                    <p class="price-old-text--top">Полная цена:</p>
                                    <p class="price-old-x--top">
                                    <span class="price-x--top x_price_previous">
                                       {{ $prices[1]['originalPrice'] }}
                                    </span>
                                        <span class="price-currency--top x_currency">
                                       {{ $prices[1]['currency'] }}
                                    </span>
                                    </p>
                                </div>
                                <div class="price-new-wrap--top">
                                    <p class="price-new-text--top">Цена со скидкой</p>
                                    <p class="price-new-x--top">
                                    <span class="price-x--top x_price_current">
                                       {{ $prices[1]['amount'] }}
                                    </span>
                                        <span class="price-currency--top x_currency">
                                       {{ $prices[1]['currency'] }}
                                    </span>
                                    </p>
                                </div>
                            </div>
                            <div class="form-main">
                                <form method="post" action="#" class="x_order_form">
                                    <input class="input-form input-form--all" type="text" name="name" placeholder="Введите ваше имя" required>
                                    <input class="input-form input-form--all" type="text" name="phone" placeholder="Введите номер телефона" required>
                                    <button class="submit-form submit-form--all" type="submit">Заказать</button>
                                </form>
                            </div>
                            <p class="protection">Ваши данные под защитой</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
    </div>
</div>
<!--body-wrap-->
</body>
</html>
