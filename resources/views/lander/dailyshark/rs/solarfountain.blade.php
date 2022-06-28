<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/png" href="{{ asset('/') }}dailysharkFiles/solarfountain/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/solarfountain/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/solarfountain/main.css">
    <style>
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<div class="menu-hid">
    <div class="header-menu-wrp">
        <div class="wrp">
            <div class="header-menu">
                <ul>
                    <li><a href="#osss">Особенности</a></li>
                    <li><a href="#instr">Причины выбрать</a></li>
                    <li><a href="#pochemu">Преимущества</a></li>
                    <li><a href="#haracter">Характеристики</a></li>
                    <li><a href="#otzv">Отзывы</a></li>
                    <li><a href="#order-form">Заказать</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<header class="offer_section">
    <div class="triggers_block">
    </div>
    <div class="content_block" id="content_block">
        <div class="wrapper">
            <div class="title_block">
                <h3 class="main_title">Garden moon</h3>
                <p class="subtitle">Садовый фонарь <br>на солнечных батареях</p>
            </div>
            <div class="discount"></div>
            <ul>
                <li>Имеет влагозащищенный корпус</li>
                <li>Устойчив к любой непогоде</li>
                <li>Фонарики включаются с наступлением темноты</li>
                <li>Зарядка от солнца</li>
            </ul>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">Обычная цена:</div>
                    <div class="value">
                        {{ $prices[1]['originalPrice'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
                <div class="price_item new">
                    <div class="text">Цена сегодня:</div>
                    <div class="value">
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
            </div>
            <a href="#order_form" class="button">Заказать сейчас</a>
            <div class="deadline_text">Количество товара ограничено</div>
        </div>
    </div>
</header>
<!-- /offer -->
<!-- results -->
<section class="results_section" >
    <div class="wrapper">
        <h2 style="color:#bf1b1b">модный тренд ландшафтного дизайна</h2>
        <div class="box-osob" id="os">
            <div class="img-toptop">
                <!--left-img-->
                <img src="{{ asset('/') }}dailysharkFiles/solarfountain/ver1.jpg">
            </div>
            <div class="img-toptop">
                <div class="main-text" style="margin: 10px 20px 20px 20px;">
                    <h3 class="box__body-title"> </h3>
                    <div class="box__body-text" style="font-size: 18px">Они нейтральны по стилю, их можно использовать практически в любом оформлении. Расставьте светящиеся хрустальные шары вдоль дорожек, вокруг бассейна или просто на террасе, ступеньках. Они позволяют красиво акцентировать границы дома и участка.
                    </div>
                    <div class="box__body-text" style="font-size: 18px">
                        Садовый фонарь выполнен в виде хрустального шара. Он изготовлен из АБС-пластика и стекла, прочный и водонепроницаемый. Такой фонарь можно смело использовать для всесезонного освещения.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gallery_sect" style="padding-top: 5px;">
    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/gallery.jpg" alt="" class="panorama" height="323" width="1968">
</section>
<section class="benefits_section" id="osss">
    <div class="wrapper">
        <h2 style="color: #bf1b1b;">ОСОБЕННОСТИ</h2>
        <div class="benefits_list">
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/1.jpg" class="block-img" alt="">
                </div>
                <div  class="top-info">
                    <p>Безопасный, энергосберегающий и экологически чистый</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/2.jpg" class="block-img" alt="">
                </div>
                <div  class="top-info">
                    <p>Простой в использовании</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/3.jpg" class="block-img" alt="">
                </div>
                <div  class="top-info">
                    <p>Подходит для украшения на открытом воздухе</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/4.jpg" class="block-img" alt="">
                </div>
                <div  class="top-info">
                    <p>Изготовлен из высококачественных материалов</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="padding: 20px" id="instr">
    <h2 style="color: #bf1b1b">Причины выбрать хрустальный фонарь</h2>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#bf1b1b">Зажгите летнюю ночь</h3>
                <div class="box__body-text"  style="font-size: 18px">Для многих людей балкон или патио - это просто еще одна комната в их доме - только и разница, что на открытом воздухе. В теплое время года все мы проводим много времени на свежем воздухе. Давайте вместе создадим уютное и стильное пространство для отдыха под открытым небом.
                </div>
            </div>
        </div>
        <div class="img-toptop flex-left">
            <img src="{{ asset('/') }}dailysharkFiles/solarfountain/box-5-ver1.jpg"  >
        </div>
    </div>
    <div class="box-osob" id="os">
        <div class="img-toptop">
            <!--left-img-->
            <img src="{{ asset('/') }}dailysharkFiles/solarfountain/box-5_ver2.jpg"  >
        </div>
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#bf1b1b">Автономная работа</h3>
                <div class="box__body-text" style="font-size: 18px">Garden moon включается и выключается автоматично. Для его полной зарядки требуется 6-8 часов солнечных лучей. В устройство встроен светочувствительный элемент – фотосенсор, реагирующий на лучи. Все, что нужно фонарику, – это немного солнца. Заряда хватает на 8-10 часов работы.
                </div>
            </div>
        </div>
    </div>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#bf1b1b">Защита от внешних факторов</h3>
                <div class="box__body-text"  style="font-size: 18px">Следует заметить, что светильник имеет защиту от пыли и влаги. Это значит, что в устройство не попадут мелкие частицы, и не причинят вреда брызги, падающие с любого направления. Защита от влаги обязательна для таких изделий: ведь они устанавливаются, как правило, не только на верандах и в беседках, но и на улице, а лето не всегда бывает сухим и жарким.
                </div>
            </div>
        </div>
        <div class="img-toptop flex-left">
            <img src="{{ asset('/') }}dailysharkFiles/solarfountain/box-5-ver3.jpg" >
        </div>
    </div>
    <div class="box-osob" id="os">
        <div class="img-toptop">
            <!--left-img-->
            <img src="{{ asset('/') }}dailysharkFiles/solarfountain/box-5-ver4.jpg"  >
        </div>
        <div class="img-toptop">
            <div class="main-text" >
                <h3 class="box__body-title" style="color:#bf1b1b">Широкое приминение</h3>
                <div class="box__body-text" style="font-size: 18px">Хрустальные шары оснащены широким плоским основанием (подошвой), за счет чего фонарь можно поставить на газон, садовую дорожку, бордюр, бортики бассейна или садовую мебель.</div>
            </div>
        </div>
    </div>
</section>
<!-- use -->
<section class="benefits_section" id="pochemu">
    <div class="wrapper">
        <h2 style="color: #bf1b1b;">Преимущества</h2>
        <div class="benefits_list">
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/5.png" class="block-img" alt="" style="width: 150px;">
                </div>
                <div  class="top-info">
                    <p class="right-2">Полностью автономная система</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/6.png" class="block-img" alt="" style="width: 150px;">
                </div>
                <div  class="top-info">
                    <p class="right-2">Экономит энергию и является экологически чистым</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/7.png" class="block-img" alt="" style="width: 150px;">
                </div>
                <div  class="top-info">
                    <p class="right-2">Устойчивый к воде и погодным условиям</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/8.png" class="block-img" alt="" style="width: 150px;">
                </div>
                <div  class="top-info">
                    <p class="right-2">Корпус из прочного материала</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="use_steps_section" id="haracter">
    <div class="wrapper clearfix">
        <div class="comp">
            <h2 style="color:#bf1b1b">Характеристики</h2>
            <div class="comp-left"> <img src="{{ asset('/') }}dailysharkFiles/solarfountain/use_steps__image.jpg" alt="Kelvin Safety Tool"></div>
            <div class="comp-right">
                <ul>
                    <li><b>Цвет свечения:</b> теплый белый</li>
                    <li><b>Материал:</b> ABS пластик/стекло</li>
                    <li><b>Мощность:</b> 5 Вт</li>
                    <li><b>Световой поток:</b> 300 лм</li>
                    <li><b>Метод зарядки:</b> солнечная батарея</li>
                    <li><b>Количество светодиодов:</b> 30led</li>
                    <li><b>Время освещения:</b> 8-10 часов</li>
                    <li><b>Время зарядки:</b> 6-8 часов</li>
                    <li><b>Водонепроницаемость:</b> IP45</li>
                    <li><b>Вес:</b> 580 гр</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section" id="otzv">
    <div class="wrapper">
        <h2 style="color:#bf1b1b">Отзывы покупателей</h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img src="{{ asset('/') }}dailysharkFiles/solarfountain/reviews__review2_photo.jpg" alt="спиннер">
                <div class="author_name">Света, 41 год</div>
                <p>
                    Корпус ночного фонарика прочный, не пропускает пыль и влагу. Нравится что Garden moon не боится воды, а значит не нужно прятать их от дождя. Шар светиться очень красиво, внутри светодиоды создают красивое свечение, выглядит сказочно.
                </p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}dailysharkFiles/solarfountain/reviews__review1_photo.jpg" alt="спиннер">
                <div class="author_name">Мирослава, 32 года</div>
                <p>Недавно приобрела садовый фонарь "Garden moon". Очень понравился внешний вид, который красиво впишется в любой дизайн. Красиво смотрится ночью, ярко и красиво, главное поставить на солнечной стороне, что бы он зарядился.
                </p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}dailysharkFiles/solarfountain/reviews__review3_photo.jpg" alt="спиннер">
                <div class="author_name">Ольга, 27 лет</div>
                <p>Заказала сразу на весь двор, обставила все дорожки. Установка очень простая. Ну прям очень красиво смотрится ночью, а самое главное это экологично чисто, а сам фонарь питается солнечной энергией. </p>
            </div>
        </div>
    </div>
</section>
<!-- /reviews -->
<!-- order steps -->
<section class="order_steps_section" id="order">
    <div class="wrapper">
        <h2 style="color:#bf1b1b">Как сделать заказ?</h2>
        <div class="steps_list">
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/order_steps__step1_image.jpg" alt="Гамак для отдыха">
                    <div class="number">1</div>
                </div>
                <p>Вы оставляете заявку на&nbsp;нашем сайте</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/order_steps__step2_image.jpg" alt="Гамак для отдыха">
                    <div class="number">2</div>
                </div>
                <p>Оператор свяжется с Вами для уточнения заказа</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/order_steps__step3_image.jpg" alt="Гамак для отдыха">
                    <div class="number">3</div>
                </div>
                <p>Быстрая доставка в течение 2-5 дней</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/order_steps__step4_image.jpg" alt="Гамак для отдыха">
                    <div class="number">4</div>
                </div>
                <p>Вы оплачиваете заказ при&nbsp;получении</p>
            </div>
        </div>
    </div>
</section>
<!-- /order steps -->
<!-- order -->
<section class="order_section" id="order-form">
    <div class="top_title_block">
        <div class="wrapper">
            <h3>Закажите сейчас <span>со скидкой 50%</span></h3>
        </div>
    </div>
    <div class="content_block">
        <div class="wrapper">
            <div class="title_block">
                <h3 class="main_title">Garden moon</h3>
                <p class="subtitle">Садовый фонарь <br>на солнечных батареях</p>
            </div>
            <div class="discount"> </div>
            <div class="form_block">
                <div class="price_block clearfix">
                    <div class="price_item old">
                        <div class="text">Обычная цена:</div>
                        <div class="value">
                            {{ $prices[1]['originalPrice'] }}
                            {{ $prices[1]['currency'] }}
                        </div>
                    </div>
                    <div class="price_item new">
                        <div class="text">Цена сегодня:</div>
                        <div class="value">
                            {{ $prices[1]['amount'] }}
                            {{ $prices[1]['currency'] }}
                        </div>
                    </div>
                </div>
                <form id="order_form" class="order_form" action="#" method="post">
                    <input class="field" type="text" name="name" placeholder="Введите Ваше имя" required>
                    <input class="field" type="tel" name="phone" placeholder="Введите Ваш телефон" required>
                    <button class="button" type="submit">Заказать сейчас</button>
                </form>
                <div class="deadline_text">Количество товара ограничено</div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}dailysharkFiles/solarfountain/jquery.panorama.js"></script>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/solarfountain/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
