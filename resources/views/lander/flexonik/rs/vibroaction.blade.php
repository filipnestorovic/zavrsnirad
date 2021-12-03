<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/png" href="">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/vibroaction/styles.css">
    <script>
        var ww = window.innerWidth;
        if(ww <= 500){
            viewport = document.querySelector("meta[name=viewport]");
            viewport.setAttribute('content', 'width=440, user-scalable=no');
        }
    </script>
    <style>
        .form-control{
            text-align-last: center;
            display: block;
            margin: 0 auto 15px;
            padding: 0 20px;
            width: 114%;
            height: 64px;
            border: 1px solid #fff;
            -webkit-border-radius: 32px;
            -moz-border-radius: 32px;
            border-radius: 32px;
            background: #fff;
            -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.4);
            -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.4);
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.4);
            font-family: 'Akrobat', sans-serif;
            font-weight: 400;
            font-size: 18px;
            color: #111;
            text-align: center;
        }

        .promoBlock {
            display: none;
        }

        .promo {
            background-image: linear-gradient(45deg, #9dc66b 5%, #4fa49a 30%, #87a0ef);
            position: fixed;
            height: 56px;
            width: 710px;
            margin: 0 auto;
            bottom: 0;
            z-index: 999;
            left: 0;
            right: 0;
            border-radius: 10px 10px 0 0;
            font-family: 'Roboto';
        }

        .promo:before {
            content: "";
            position: absolute;
            width: 86px;
            background: url() no-repeat;
            height: 68px;
            top: -11px;
            left: 20px;
        }

        .close {
            position: absolute;
            background: #5d687a;
            width: 20px;
            height: 20px;
            text-align: center;
            border-radius: 50%;
            line-height: 19px;
            cursor: pointer;
            font-weight: bold;
            color: #fff;
            right: -5px;
            top: -7px;
            font-family: 'Roboto';
            font-size: 18px;
        }

        .promo p {
            display: inline-block;
            color: #fff;
            font-size: 16px;
            padding: 16px 0 0 130px;
            font-family: 'Roboto';
            margin: 0;
        }

        .promo p span {
            font-size: 24px;
        }

        .promo p span:after {
            content: "";
            background: url() no-repeat;
            width: 20px;
            height: 23px;
            position: absolute;
        }
        a.btnPromo {
            color: #fff;
            text-decoration: none;
            width: 170px;
            height: 35px;
            text-align: center;
            line-height: 35px;
            border-radius: 20px;
            background: #0b5889;
            font-size: 17px;
            margin: 11px 30px 0 0;
            display: block;
            float: right;
            font-family: 'Roboto';
        }

        .bgPromo {
            background: url() no-repeat;
            width: 960px;
            height: 311px;
            padding: 25px;
            margin-bottom: 40px;
            clear: both;
            overflow: hidden;
            color: #222;
        }

        .bgPromo .video-container {
            width: 480px;
            height: 260px;
        }
        .bgPromo .left {
            width: 420px;
            float: left;

        }

        .bgPromo .right {
            float: right;
        }
        .bgPromo h2 {
            color: #222;
            margin-bottom: 10px;
            padding-bottom: 0;
            font-family: 'Roboto';
            line-height: 1.2;
            font-size: 24px;
        }
        .bgPromo h2 span {
            color: #a44598;
        }
        .bgPromo .infoGift {
            clear: both;
            overflow: hidden;
        }
        .infoGift img {
            float: left;
            margin-right: 20px;
        }

        .infoGift h3 {
            margin: 10px;
            font-size: 30px;
            font-family: 'Roboto';
            padding: 0;
        }

        .infoGift p {
            font-family: 'Roboto';
        }


        .bgPromo p {
            padding: 0;
        }

        .bgPromo p.info {
            margin-top: 20px;
            color: #1d73ca;
        }

        @media (max-width: 976px) {
            .bgPromo {
                background: url() no-repeat;
                margin: 0 auto 40px;
                width: 510px;
                height: auto;
                background-size: cover;
            }
            .bgPromo .left, .bgPromo .right {
                float: none;
                margin: 0 auto;
                width: 420px;
            }

            .bgPromo .video-container {
                width: 420px;
                height: 240px;
                margin: 0 auto;
            }
            .bgPromo h2 {
                margin-bottom: 30px;
            }

        }
        @media (max-width: 730px) {

            .promo {
                width: 300px;
                height: 112px;
            }

            .bgPromo {
                width: 320px;
                height: auto;
                padding: 20px;
            }

            .bgPromo .left, .bgPromo .right {
                width: 280px;
            }
            .infoGift h3 {
                display: none;
            }
            .promoBlock .wrap {
                padding: 0;
            }
            .infoGift img {
                max-width: 80px;
            }
            .infoGift p {
                width: 288px;
                font-size: 13px;
                text-align: left;
            }
            p.info {
                margin-top: 10px;
            }
            .bgPromo .video-container {
                width: 280px;
                height: 138px;
                margin: 0px auto;
            }
            .promo:before {
                background: url() no-repeat;
                height: 121px;
                left: 5px;
            }
            .promo p {
                padding-left: 100px;
                padding-top: 10px;
                font-weight: normal;
            }
            a.btnPromo {
                float: none;
                margin-left: 110px;
            }
            .bgPromo h2 {
                text-align: center;
            }
        }
    </style>
</head>
<body>
<!-- offer -->
@include('components.display_errors')
<header class="offer_section offer_top">
    <div class="wrapper clearfix">
        <div class="title_block">
            <h1 class="main_title">Вибромассажный пояс Vibroaction</h1>
            <p class="subtitle">Вибромассажный пояс для коррекции фигуры</p>
        </div>
        <img class="mobile_product" src="{{ asset('/') }}flexonikFiles/vibroaction/mobile__offer_product.png" alt="Vibroaction">
        <ul class="benefits_list">
            <li>Уменьшает <span>объем талии</span></li>
            <li>Избавляет <span>от лишнего веса</span></li>
            <li>Избавляет <span>от боли в спине</span></li>
        </ul>
        <div class="form_block">
            <div class="action_block clearfix">
                <div class="discount_block">
                    <div class="text">Акция</div>
                    <div class="value">-50%</div>
                </div>
                <div class="price_block">
                    <div class="price_wrapper">
                        <div class="price_old al-cost-promo"><b class="price_old13599">{{ $prices[1]['originalPrice'] }}</b><b class="price_currency">RSD</b></div>
                        <div class="price_new al-cost"><b class="price_only13599">{{ $prices[1]['amount'] }} </b><b class="price_currency">RSD</b></div>
                    </div>
                </div>
            </div>
            <form class="order_form al-form" action="#" method="post">

                <input class="input" type="text" name="name" placeholder="Введите Ваше имя" required>
                <input class="input" type="tel" name="phone" id="phone" placeholder="Введите Ваш телефон" required>
                <button class="button">Заказать сейчас</button>
            </form>
        </div>
    </div>
</header>
<section class="about_section">
    <div class="wrapper clearfix">
        <img src="{{ asset('/') }}flexonikFiles/vibroaction/about__image.jpg" alt="Vibroaction">
        <div class="content_block">
            <h2>Уникальный вибромассажный пояс <span>Vibroaction</span></h2>
            <p><b>Вибромассажный пояс Vibroaction является незаменимым аксессуаром, который способствует уменьшению вашей талии.</b></p>
            <p>Используя его, вы сможете сжигать жир даже без интенсивных тренировок. Пояс заставит ваши мышцы сокращаться больше, чем любой тренажёр в спортзале.</p>
            <p>Производители снабдили его двумя типами вибраций, автоматической и ручной:</p>
            <ul>
                <li>1-й режим автоматической режим оказывает эффект расслабляющего массажа, <b>устраняет целлюлит</b></li>
                <li>2-й режим имеет пять <b>5 режимов интенсивности</b>. С их помощью корректировать <b>сокращение мышц</b>.</li>
            </ul>
            <p>Благодаря такой двойной структуре пояса его легко надевать и удобно носить. Надевается он в считанные секунды и готов к использованию, в любом месте:</p>
            <ul>
                <li>На работе</li>
                <li>На прогулке</li>
                <li>Дома</li>
                <li>В тренажерном зале и т. д.</li>
            </ul>
        </div>
    </div>
</section>
<!-- /about -->
<!-- video -->
{{--<section class="video_section">--}}
    {{--<div class="wrapper">--}}
        {{--<h2>ПОЛУЧИТЕ ИДЕАЛЬНУЮ ФИГУРУ ВМЕСТЕ С Vibroaction</h2>--}}
        {{--<div class="video_block" id="video1">--}}
            {{--<iframe width="560" height="315" src="https://www.youtube.com/embed/KNOxZN54Q8k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!-- /video -->
<!-- benefits -->
<section class="benefits_section">
    <div class="wrapper">
        <h2><span>В чем секрет</span> эффективности пояса?</h2>
        <div class="benefits_block">
            <img src="{{ asset('/') }}flexonikFiles/vibroaction/benefits__image.jpg" alt="Vibroaction">
            <ul>
                <li>Технология двойного сжатия – плотно охватывает спину, пояс и живот</li>
                <li>Не сдавливает мышцы благодаря высокотехнологичному материалу</li>
                <li>Можно использовать лежа, сидя, за компьютером, можно использовать на различных частях тела</li>
                <li>Сетчатый материал обеспечивает хорошую вентиляцию</li>
                <li>Степень сжатия регулируется, и Вы сами выбираете нужный эффект</li>
                <li>Бережно поддерживает мышцы спины, обеспечивая отличную осанку</li>
            </ul>
        </div>
        <a href="#order_form" class="button">Заказать сейчас</a>
    </div>
</section>
<!-- /benefits -->
<!-- use -->
<section class="use_section">
    <div class="wrapper">
        <h2>Для чего люди по всему миру используют <span>пояс Vibroaction?</span></h2>
        <div class="use_list clearfix">
            <div class="use_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/vibroaction/use__use1_image.jpg" alt="Vibroaction">
                    <p>После беременности</p>
                </div>
                <div class="text_block">
                    <ul>
                        <li>Восстанавливает тонус ослабших мышц живота и спины</li>
                        <li>Предотвращает грыжу при ежедневном ношении ребенка</li>
                    </ul>
                </div>
            </div>
            <div class="use_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/vibroaction/use__use2_image.jpg" alt="Vibroaction">
                    <p>При сидячей работе</p>
                </div>
                <div class="text_block">
                    <ul>
                        <li>Устраняет напряжение и усталость спины — причины головной боли!</li>
                        <li>Безопасное и комфортное использование целый день</li>
                    </ul>
                </div>
            </div>
            <div class="use_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/vibroaction/use__use3_image.jpg" alt="Vibroaction">
                    <p>При лишнем весе</p>
                </div>
                <div class="text_block">
                    <ul>
                        <li>Уменьшение талии на несколько размеров</li>
                        <li>Естественное формирование стройной талии.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /use -->
<!-- order steps -->
<section class="order_steps_section">
    <div class="wrapper">
        <h2>Доставка и оплата</h2>
        <div class="steps_list clearfix">
            <div class="step_item">
                <div class="number">1</div>
                <img src="{{ asset('/') }}flexonikFiles/vibroaction/order_steps__step1_image.jpg" alt="Vibroaction">
                <h4>Заявка</h4>
                <p>Оставьте заявку на нашем сайте, заполнив форму заказа</p>
            </div>
            <div class="step_item">
                <div class="number">2</div>
                <img src="{{ asset('/') }}flexonikFiles/vibroaction/order_steps__step2_image.jpg" alt="Vibroaction">
                <h4>Отправка</h4>
                <p>Оператор уточнит у вас детали и мы отправим ваш заказ</p>
            </div>
            <div class="step_item">
                <div class="number">3</div>
                <img src="{{ asset('/') }}flexonikFiles/vibroaction/order_steps__step3_image.jpg" alt="Vibroaction">
                <h4>Получение</h4>
                <p>Доставим заказ в любую точку Узбекистана в течении 4 дней. Оплата после получения товара.</p>
            </div>
        </div>
    </div>
</section>
<!-- order steps -->
<!-- reviews -->
<section class="reviews_section">
    <div class="wrapper">
        <h2>Они стали <span>стройными и привлекательными</span></h2>
        <div class="reviews_list">
            <div class="review_item clearfix">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/vibroaction/reviews__review1_photo.jpg" alt="Vibroaction">
                </div>
                <div class="text_block">
                    <h4>Татьяна Шевчук, 31 год</h4>
                    <p>Когда в 29 лет я родила второго ребенка, то уже не надеялась вернуть свою прежнюю фигуру. Пару месяцев назад подруга из США приехала и рассказала, что там все девушки ходят в таком поясе. Я решила посмотреть и зашла на этот сайт. Тогда была огромная скидка и я заказала такой пояс. Спустя всего пару дней пояс был у меня и, что удобно, оплата была при получении. Меньше чем за месяц моя фигура стала прежней! Всем рекомендую!</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/vibroaction/reviews__review2_photo.jpg" alt="Vibroaction">
                </div>
                <div class="text_block">
                    <h4>Валерия Фотина, 19 лет</h4>
                    <p>Я давно мечтала о тонкой талии, как у девочек в Инстаграм. Думала откуда у них такие фигуры? Сама не ела неделями, а теперь поняла что к чему)) Увидела у одной из блогерш обзор на такой пояс и сразу решила заказать себе тоже. Купила пояс Вибромассажный пояс Vibroaction и теперь любимое занятие делать селфи в платьях перед зеркалом и выкладывать в соцсети.</p>
                </div>
            </div>
            <div class="review_item clearfix">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/vibroaction/reviews__review3_photo.jpg" alt="Vibroaction">
                </div>
                <div class="text_block">
                    <h4>Дарья Большакова, 27 лет</h4>
                    <p>Пояс просто находка. Надеваешь и фигура моментально преображается. Ношу второй месяц и уже заметен результат. Талия стала уже и животик уменьшился. Посоветовала всем моим подругам, они тоже оценили пояс. Утягивающий пояс Вибромассажный пояс Vibroaction верный путь к идеальной талии!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /reviews -->
<!-- offer -->
<section class="offer_section offer_bottom">
    <div class="wrapper clearfix">
        <div class="title_block">
            <h3 class="main_title">Вибромассажный пояс Vibroaction</h3>
            <p class="subtitle">Вибромассажный пояс для коррекции фигуры</p>
        </div>
        <img class="mobile_product" src="{{ asset('/') }}flexonikFiles/vibroaction/mobile__offer_product.png" alt="Vibroaction">
        <div class="form_block">
            <div class="action_block clearfix">
                <div class="discount_block">
                    <div class="text">Акция</div>
                    <div class="value">-50%</div>
                </div>
                <div class="price_block">
                    <div class="price_wrapper">
                        <div class="price_old al-cost-promo"><b class="price_old13599">{{ $prices[1]['originalPrice'] }}</b><b class="price_currency">RSD</b></div>
                        <div class="price_new al-cost"><b class="price_only13599">{{ $prices[1]['amount'] }} </b><b class="price_currency">RSD</b></div>
                    </div>
                </div>
            </div>
            <form class="order_form al-form" action="#" method="post" id="order_form">

                <input class="input" type="text" name="name" placeholder="Введите Ваше имя" required>
                <input class="input" type="tel" name="phone" id="phone" placeholder="Введите Ваш телефон" required>

                <button class="button">Заказать сейчас</button>
            </form>
        </div>
    </div>
</section>

<div style="text-align: center; padding: 20px; font-size: 18px;">

</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('a[href^="#"]').click(function () {
            var target = $(this).attr('href');
            $('html, body').animate({scrollTop: $(target).offset().top - 0 }, 800);
            return false;
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>