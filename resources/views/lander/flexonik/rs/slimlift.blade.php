<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <link rel="shortcut icon" href="" type="image/png">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/slimlift/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/slimlift/styles.css">
    <link href="{{ asset('/') }}flexonikFiles/slimlift/custom-styless.min.css" type="text/css" rel="stylesheet">

    <style type="text/css">
        .form-control{
            text-align-last: center;
            display: block;
            margin: 37px auto 20px;
            padding: 0 20px;
            width: 300px;
            height: 60px;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            border-radius: 30px;
            background: #fff;
            font-family: 'PTSans', sans-serif;
            font-weight: 400;
            font-size: 16px;
            color: #333;
            text-align: center;

        }
        /* fonts */
        /*@font-face {*/
            /*font-family: 'PTSans';*/
            /*src: url('PTSans-Regular.woff2')!*tpa=http://mega-hit.org/slim-body/fonts/PTSans-Regular.woff2*!*/
            /*format('woff2'), url('PTSans-Regular.woff')!*tpa=http://mega-hit.org/slim-body/fonts/PTSans-Regular.woff*!*/
            /*format('woff'), url('PTSans-Regular.otf')!*tpa=http://mega-hit.org/slim-body/fonts/PTSans-Regular.otf*!*/
            /*format('opentype');*/
            /*font-weight: 400;*/
            /*font-style: normal;*/
        /*}*/

        /*@font-face {*/
            /*font-family: 'PTSans';*/
            /*src: url('PTSans-Bold.woff2')!*tpa=http://mega-hit.org/slim-body/fonts/PTSans-Bold.woff2*!*/
            /*format('woff2'), url('PTSans-Bold.woff')!*tpa=http://mega-hit.org/slim-body/fonts/PTSans-Bold.woff*!*/
            /*format('woff'), url('PTSans-Bold.otf')!*tpa=http://mega-hit.org/slim-body/fonts/PTSans-Bold.otf*!*/
            /*format('opentype');*/
            /*font-weight: 700;*/
            /*font-style: normal;*/
        /*}*/
    </style>
</head>
<body>
<!-- header -->
<header class="header_section">
    <div class="content_block wrapper">
        <div class="info">
            <div class="title_block">
                <p class="subtitle">корректирующая майка</p>
                <h1 class="main_title">Slim'N Lift</h1>
            </div>
            <ul>
                <li>Материалы высокого качества</li>
                <li>Не вызывает дискомфорта </li>
                <li>Незаметное под одеждой</li>
            </ul>
            <div class="price_block">
                <div class="price_item old" style="color: #fff;">
                    <div class="text">Обычная цена:</div>
                    <div class="value"><span class="price_old15447">{{ $prices[1]['originalPrice'] }}</span>
                        <span class="price_currency">RSD</span></div>
                </div>
                <div class="price_item new"><span class="price_only15447">{{ $prices[1]['amount'] }}</span>
                    <span class="price_currency">RSD</span></div>

            </div>
            <a href="#order_form" class="button">Заказать</a>
        </div>
        <div class="discount"><span>-50%</span>скидка</div>
    </div>
</header>
<!-- /header -->
<!-- info -->
<div class="info_section">
    <div class="wrapper">
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimlift/b2-3.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Этот удивительный жилет сделан из шелковистого нейлона и эластичной лайкры, не будет скользить или сползать.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimlift/b2-1.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>эта майка прекрасно помогает поддерживать привлекательный внешний вид во время процесса похудения</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimlift/b2-4.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>Она эффективно утягивает зону живота и декольте, благодаря своей особенной форме и структуре.</p>
        </div>
        <div class="info_item">
            <img src="{{ asset('/') }}flexonikFiles/slimlift/b2-2.png" alt="Slim'N Lift" title="Slim'N Lift">
            <p>За счет такого плотного контакта поверх этой майки можно надевать свитера, футболки и даже легкие рубашки.</p>
        </div>
    </div>
</div>
<!-- /info -->
<!-- about -->
<section class="about_section">
    <div class="wrapper clearfix">
        <h2>О женской корректирующей майке Slim'N Lift</h2>
        <div class="video_block">
        </div>
        <div class="text_block">
            <p>
                Корректирующее бельё Slim'N'Lift поможет вам обрести стройную, привлекательную фигуру. Ваше тело мгновенно станет более подтянутым и привлекательным — без диет и утомительных упражнений. Благодаря уникальному расположению упругих утягивающих пластин,
                Slim'N'Lift правильно распределяет ваш лишний вес. Особые ребристые вставки расправляют и разглаживают каждую складку. "Пивной" животик, рыхлая грудь, жировые отложения — все эти недостатки исчезают на глазах! Также бельё Slim'N'Lift
                помогает расправить спину и заметно улучшает осанку. Больше уверенности в себе, больше успехов в работе, в общении, в личной жизни!</p>
        </div>
    </div>
</section>
<!-- /about -->
<!-- catalog -->
<section id="catalog" class="catalog_section">
    <div class="wrapper">
        <div class="product_item male clearfix">
            <div class="gallery_block">
                <img class="image one" src="{{ asset('/') }}flexonikFiles/slimlift/b4-1.jpg" alt="Slim'N Lift" title="Slim'N Lift">
            </div>
            <div class="info">
                <h3>КОРРЕКТИРУЮЩЕЕ (УТЯГИВАЮЩЕЕ) ЖЕНСКОЕ БЕЛЬЕ SLIM'N LIFT</h3>
                <ul>
                    <li><b>Состав:</b> шелковистый нейлон и эластичная лайкра </li>
                    <li><b>Цвет:</b> черный, бежевый</li>
                    <li><b>Температурные условия:</b> в любое время года</li>
                    <li><b>Физическая активность:</b> любая</li>
                    <li><b>Размер:</b> S, M, L, XL</li>
                    <li><b>Описание:</b>Изготовлена из очень удобной ткани, она является наиболее эффективным решением для быстрого разглаживания складок и поможет вернуть Вашу фигуру обратно.</li>
                </ul>
                <div class="price_block">
                    <div class="price_item old">
                        <div class="text">Обычная цена:</div>
                        <div class="value"><span class="price_old15447"></span>
                            <span class="price_currency"></span></div>

                    </div>
                    <div class="discount">-50%</div>
                    <div class="price_item new"><span class="price_only15447"></span>
                        <span class="price_currency"></span></div>
                </div>
                <a href="#order_form" class="button" data-comment="Для мальчиков">Сделать заказ</a>
            </div>
        </div>

    </div>
</section>
<!-- benefits -->
<section class="benefits_section">
    <div class="wrapper">
        <h2>Преимущества SLIM'N LIFT</h2>
        <div class="benefits_list">
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>Прочность и износостойкость</h4>
                    <p>- сделана из качественных, безопасных материалов, потому не вызывает раздражений, высыпаний</p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>Эластичность</h4>
                    <p> эластичная, плавно и постепенно обтягивает кожу и может справиться даже с самой сложной ситуацией</p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>Эффективность</h4>
                    <p> отлично утягивает складки на животе и спине, делая силуэт плавным, привлекательным</p>
                </div>
            </div>
            <div class="benefit_item clearfix">
                <div class="icon"></div>
                <div class="text_block">
                    <h4>Легкость</h4>
                    <p>не требует особого ухода. Стирать можно как вручную, так и в стиральной машине в режиме деликатной стирки</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /benefits -->
<!-- order steps -->
<section class="order_steps_section">
    <div class="wrapper">
        <h2>Как заказать женскую корректирующую майку <span>Slim'N Lift?</span></h2>
        <div class="steps_list">
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimlift/order_steps__step1_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Вы оставляете заявку на нашем сайте</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimlift/order_steps__step2_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Наш менеджер связывается с Вами</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimlift/order_steps__step3_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Мы отправляем Ваш заказ по почте</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/slimlift/order_steps__step4_image.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <p>Оплачиваете заказ при получении</p>
            </div>
        </div>
    </div>
</section>
<!-- /order steps -->
<!-- reviews -->
<section class="reviews_section">
    <div class="wrapper">
        <h2>Отзывы довольных <span>покупателей</span></h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item clearfix">
                <img src="{{ asset('/') }}flexonikFiles/slimlift/rew-1.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <div class="text_block">
                    <div class="author_info">Елена, 42 года</div>
                    <p>Признаться честно — не верила, что возможно носить одежду на 2-3 размера меньше. Но когда примерила — поняла, что это мое!!! Теперь на работе коллеги спрашивают рецепт диеты ) </p>
                </div>
            </div>
            <div class="review_item clearfix">
                <img src="{{ asset('/') }}flexonikFiles/slimlift/rew-2.jpg" alt="Slim'N Lift" title="Slim'N Lift">
                <div class="text_block">
                    <div class="author_info">Ольга, 49 лет</div>
                    <p>У меня 52 размер. Slim And Lift и правда утягивает живот, складки по бокам и бедрам. Появилось даже очертание талии, что вдвойне приятно. Теперь самой на себя приятнее взглянуть.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /reviews -->
<!-- order -->
<section class="order_section">
    <div class="wrapper clearfix">
        <div class="info">
            <div class="title_block">
                <p class="subtitle">корректирующая майка</p>
                <h1 class="main_title">Slim'N Lift</h1>
            </div>
            <ul>
                <li>Материалы высокого качества</li>
                <li>Не вызывает дискомфорта </li>
                <li>Незаметное под одеждой</li>
            </ul>
            {{--<div class="timer_block">--}}
                {{--<p style="    color: #fff;">До конца акции осталось:</p>--}}
                {{--<div class="timer clearfix">--}}
                    {{--<div class="timer_item">--}}
                        {{--<div class="count hours">00</div>--}}
                        {{--<div class="text">часов</div>--}}
                    {{--</div>--}}
                    {{--<div class="timer_item">--}}
                        {{--<div class="count minutes">00</div>--}}
                        {{--<div class="text">минут</div>--}}
                    {{--</div>--}}
                    {{--<div class="timer_item">--}}
                        {{--<div class="count seconds">00</div>--}}
                        {{--<div class="text">секунд</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
        <div class="form_block">
            <p>Закажите прямо сейчас и получите скидку 50%</p>
            <div class="price_block">
                <div class="price_item old">
                    <div class="text">Обычная цена:</div>
                    <div class="value"><span class="price_old15447">{{ $prices[1]['originalPrice'] }}</span>
                        <span class="price_currency">RSD</span></div>
                </div>
                <div class="price_item new"><span class="price_only15447">{{ $prices[1]['amount'] }}</span>
                    <span class="price_currency">RSD</span></div>
            </div>
            <form action="#" method="post" id="order_form" class="order_form">

                <input class="input" type="text" name="name" placeholder="Ваше Имя" required="">
                <input class="input-phone input" type="tel" name="phone" placeholder="Ваш Телефон" required="" id="phone">

                <button type="submit" class="button">Сделать заказ</button>
            </form>
        </div>
    </div>
</section>
<!-- /order -->
<!-- footer -->
{{--<footer class="footer_section">--}}
    {{--<div class="footer_text" style="text-align: center; color: #000 !important;display: block;font-weight: bold;">--}}
        {{--<div class="foot_ru_center" style="text-align: center; margin: 0px auto; padding: 30px;">--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</footer>--}}
<!-- /footer -->
<!-- scripts -->
<script src="{{ asset('/') }}flexonikFiles/slimlift/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}flexonikFiles/slimlift/scripts.js"></script>


</body>
</html>