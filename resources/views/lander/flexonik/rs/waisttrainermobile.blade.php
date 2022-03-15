<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}flexonikFiles/waisttrainermobile/favicon.ico" />
    <style> @font-face {font-family: 'Montserrat';src: url('{{asset('/') }}fonts/subsetMontserrat Light.woff2') format('woff2'), url('{{asset('/') }}fonts/subsetMontserrat Light.woff') format('woff'), url('{{asset('/') }}fonts/subsetMontserrat Light.ttf') format('truetype');font-weight: 300;font-style: normal;}@font-face {font-family: 'Montserrat';src: url('{{asset('/') }}fonts/Montserrat-Regular.woff2') format('woff2'), url('{{asset('/') }}fonts/Montserrat-Regular.woff') format('woff'), url('{{asset('/') }}fonts/Montserrat-Regular.ttf') format('truetype');font-weight: 400;font-style: normal;}@font-face {font-family: 'Montserrat';src: url('{{asset('/') }}fonts/subsetMontserrat Italic.woff2') format('woff2'), url('{{asset('/') }}fonts/subsetMontserrat Italic.woff') format('woff'), url('{{asset('/') }}fonts/subsetMontserrat Italic.ttf') format('truetype');font-weight: 400;font-style: italic;}@font-face {font-family: 'Montserrat';src: url('{{asset('/') }}fonts/subsetMontserrat Medium.woff2') format('woff2'), url('{{asset('/') }}fonts/subsetMontserrat Medium.woff') format('woff'), url('{{asset('/') }}fonts/subsetMontserrat Medium.ttf') format('truetype');font-weight: 500;font-style: normal;}@font-face {font-family: 'Montserrat';src: url('{{asset('/') }}fonts/Montserrat-Bold.woff2') format('woff2'), url('{{asset('/') }}fonts/Montserrat-Bold.woff') format('woff'), url('{{asset('/') }}fonts/Montserrat-Bold.ttf') format('truetype');font-weight: 700;font-style: normal;}@font-face {font-family: 'Montserrat';src: url('{{asset('/') }}fonts/Montserrat-Black.woff2') format('woff2'), url('{{asset('/') }}fonts/Montserrat-Black.woff') format('woff'), url('{{asset('/') }}fonts/Montserrat-Black.ttf') format('truetype');font-weight: 900;font-style: normal;}</style>
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/waisttrainermobile/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/waisttrainermobile/styles.css">
</head>
<body>
<div class="main_wrapper">
    <!-- header 3 -->
    <header class="offer_section offer3">
        <h1 class="main_title">Waist Trainer</h1>
        <div class="info_block">
            <p class="subtitle">утягивающие корсеты для великолепной талии</p>
            <div class="discount"><b>50% скидка</b></div>
            <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/b1.jpg" alt="">
            <!-- <img class="gif" src="images/gf.png"> -->
        </div>
        <div class="price_block">
            <div class="price_item old">
                <div class="text">Обычная цена:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }} RSD
                </div>
            </div>
            <div class="price_item new">
                <div class="text">Цена сегодня:</div>
                <div class="value">
                    {{ $prices[1]['amount'] }} RSD
                </div>
            </div>
        </div>
        <div class="benefits_block clearfix">
            <div class="benefit_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/1.jpg" alt="">
                <p>Сжигает и выводит жир</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/2.jpg" alt="">
                <p>Подтягивает фигуру</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/3.jpg" alt="">
                <p>Эффект осиной талии</p>
            </div>
        </div>
        {{--<div class="timer_block clearfix">--}}
            {{--<p>Предложение действует:</p>--}}
            {{--<div class="timer clearfix">--}}
                {{--<div class="timer_item">--}}
                    {{--<div class="count hours"></div>--}}
                    {{--<div class="text">часов</div>--}}
                {{--</div>--}}
                {{--<div class="timer_item">--}}
                    {{--<div class="count minutes"></div>--}}
                    {{--<div class="text">минут</div>--}}
                {{--</div>--}}
                {{--<div class="timer_item">--}}
                    {{--<div class="count seconds"></div>--}}
                    {{--<div class="text">секунд</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <a href="#order_form" class="button">Оформить заказ</a>
        <div class="products_count">Осталось <b>16</b> корсетов по акции</div>
    </header>
    <!-- /header 3 -->
    <!-- video -->
    <img class="image" src="{{ asset('/') }}flexonikFiles/waisttrainermobile/photo1.jpg" alt="">
    <!-- /video -->
    <!-- description -->
    <section class="description_section">
        <h2 class="title"><span>ваша талия станет</span> идеальной</h2>
        <img class="image" src="{{ asset('/') }}flexonikFiles/waisttrainermobile/photo2.jpg" alt="">
        <p>Корректирующий корсет Waist Trainer - это новый прорыв в области диетологии. Это удивительное и
            уникальное в своём роде изделие для эффективного и быстрого похудения. Корсет быстро поможет избавиться
            от обвисшего животика и лишних сантиметров талии. Причём достигаемый эффект носит стойкий характер, что
            очень важно.
        </p>
        <img class="image" src="{{ asset('/') }}flexonikFiles/waisttrainermobile/photo3.jpg" alt="">
        <p>Waist Trainer не имеет жесткого каркаса, поэтому он не стесняет работу внутренних органов, он очень
            комфортен и приятен при ношении в повседневной жизни и при занятии спортом, что помогает обрести
            желанные формы за кратчайшее время.
        </p>
        <img class="image" src="{{ asset('/') }}flexonikFiles/waisttrainermobile/photo4.jpg" alt="">
        <p>Корсет эффективно помогает уменьшить размер талии. Он застегивается на три ряда крючков, благодаря
            которым можно уменьшать размер корсета при похудении, не покупая новый корсет меньшего размера. Корсет
            не только корректирует талию, но и улучшает кровообращение, исправляет осанку и уменьшает размеры
            желудка.
        </p>
        <div class="benefits_list1">
            <div class="benefit_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/4.jpg" alt="">
                <p>Уменьшает объем талии до -17 см. Видимый результат уже через 10 дней</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/5.jpg" alt="">
                <p>Незаменим после родов, фигура быстро вернет былую форму</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/6.jpg" alt="">
                <p>Создавайте идеальную фигуру без каких-либо ограничений в движениях</p>
            </div>
        </div>
        <a href="#order_form" class="button">Оформить заказ</a>
        <img class="image" src="{{ asset('/') }}flexonikFiles/waisttrainermobile/photo5.jpg" alt="">
    </section>
    <!-- /description -->
    <section class="peobrazit">
        <h2 class="title"><span>корсет waist trainer преобразит вас</span><br> за несколько минут</h2>
        <ul class="preo">
            <li>
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/m1.png" alt="">
                <b>Мгновенный эффект<br> преображения</b>
                <p>Утонченная талия, высокая грудь и выразительные бедра</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/m2.png" alt="">
                <b>Безупречная<br> фигура</b>
                <p>Ваша талия сохраняет очертания даже когда Вы не носите корсет</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/m3.png" alt="">
                <b>Невидимость<br> для окружающих</b>
                <p>Корсет можно незаметно носить под одеждой</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/m4.png" alt="">
                <b>Идеальная<br> осанка</b>
                <p>Остается с Вами даже после снятия корсета</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/m5.png" alt="">
                <b>Сексуальность<br> и женственность</b>
                <p>Формы, о которых можно только мечтать будут Ваши</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/m6.png" alt="">
                <b>Уникальный<br> латексный материал</b>
                <p>Вы удивитесь насколько комфортны и удобны наши корсеты</p>
            </li>
        </ul>
        <img class="image" src="{{ asset('/') }}flexonikFiles/waisttrainermobile/photo6.jpg" alt="">
        <a href="#order_form" class="button">Оформить заказ</a>
    </section>
    <!-- reviews 2 -->
    <section class="reviews2_section gray_theme">
        <h2 class="title">Отзывы <span>покупателей</span></h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}flexonikFiles/waisttrainermobile/rev2.jpg" alt="">
                <p>Спасибо за такую потрясающую вещь! Вы заставляете верить в волшебство! Не перестаю удивлять
                    окружающих своей талией. Очень здорово, что корсет можно надеть, как под одежду, так и сверху. В
                    обычное время ношу под одеждой, а в фитнес-центре сверху, так и разницы нет и хорошо, что
                    движения не сковывает совсем. Спасибо огромное!
                </p>
                <div class="author_block clearfix">
                    <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/ava2.jpg" alt="">
                    <div class="author_info">
                        <div class="name">Инесса Сушкова</div>
                        <div class="text">29 лет</div>
                    </div>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}flexonikFiles/waisttrainermobile/rev1.jpg" alt="">
                <p>А вот и мой результат. Корсет заказывала с целью "скорректировать фигуру". Оказалось, что он
                    создает не только талию, но еще и "поднимает" грудь и выпрямляет спину. Просто магия! Носить его
                    довольно удобно, под одеждой не заметен. Так что я очень довольна и благодарю вас за
                    качественный товар. Жаль только фотография не передает полного эффекта.
                </p>
                <div class="author_block clearfix">
                    <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/ava1.jpg" alt="">
                    <div class="author_info">
                        <div class="name">Татьяна Иванова</div>
                        <div class="text">36 лет</div>
                    </div>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}flexonikFiles/waisttrainermobile/rev3.jpg" alt="">
                <p>Наконец получила свой корсетик, он нереальный!!! Когда взяла в руки, то не поверила, что такой
                    тонкий корсетик вообще в силах что-либо утянуть... Но когда надела, то поняла что это любовь с
                    первого взгляда. Сел идеально! Муж ещё сомневался, что мне нужен корсет в принципе, но теперь
                    поменял мнение)) Спасибо вам!)
                </p>
                <div class="author_block clearfix">
                    <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/ava3.jpg" alt="">
                    <div class="author_info">
                        <div class="name">Дарья Богомазова</div>
                        <div class="text">41 год</div>
                    </div>
                </div>
            </div>
        </div>
        {{--<h2 class="title">Видеоотзывы</h2>--}}
        {{--<div class="video-container shadow">--}}
            {{--<!-- <div class="youtube" id="zjzAT3J6KtM"></div> -->--}}
            {{--<iframe width="100%" height="100%" src="https://www.youtube.com/embed/zjzAT3J6KtM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
        {{--</div>--}}
        {{--<div class="video-container shadow">--}}
            {{--<!-- <div class="youtube" id="f3FDPwNTfdM"></div> -->--}}
            {{--<iframe width="100%" height="100%" src="https://www.youtube.com/embed/f3FDPwNTfdM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
        {{--</div>--}}
        {{--<div class="video-container shadow">--}}
            {{--<!-- <div class="youtube" id="P48WTLhqTd0"></div> -->--}}
            {{--<iframe width="100%" height="100%" src="https://www.youtube.com/embed/P48WTLhqTd0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
        {{--</div>--}}
    </section>
    <!-- /reviews 2 -->
    <section class="zakaz">
        <h2 class="title"><span>Как сделать</span><br> заказ?</h2>
        <div class="order_steps2 clearfix">
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/order_steps__step1_icon.png" alt="">
                <div class="separator"></div>
                <h4>Заявка</h4>
                <p>Оставляете заявку на сайте</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/order_steps__step2_icon.png" alt="">
                <div class="separator"></div>
                <h4>Звонок</h4>
                <p>Наш менеджер уточняет детали заказа</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/order_steps__step3_icon.png" alt="">
                <div class="separator"></div>
                <h4>Отправка</h4>
                <p>Доставляем ваш товар в течение<br>1-10 дней</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/order_steps__step4_icon.png" alt="">
                <div class="separator"></div>
                <h4>Получение</h4>
                <p>Оплачиваете при получении на почте</p>
            </div>
        </div>
    </section>
    <!-- /order steps 2 -->
    <!-- order 3 -->
    <section class="offer_section offer3 order">
        <h1 class="main_title">Waist Trainer</h1>
        <div class="info_block">
            <p class="subtitle">утягивающие корсеты для великолепной талии</p>
            <div class="discount"><b>50% скидка</b></div>
            <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/b1.jpg" alt="">
            <!-- 	<img class="gif" src="images/gf.png"> -->
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">Обычная цена:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }} RSD
                </div>
            </div>
            <div class="price_item new">
                <div class="text">Цена сегодня:</div>
                <div class="value">
                    {{ $prices[1]['amount'] }} RSD
                </div>
            </div>
        </div>
        <div class="benefits_block clearfix">
            <div class="benefit_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/1.jpg" alt="">
                <p>Сжигает и выводит жир</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/2.jpg" alt="">
                <p>Подтягивает фигуру</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/3.jpg" alt="">
                <p>Эффект осиной талии</p>
            </div>
        </div>
        {{--<div class="timer_block clearfix">--}}
            {{--<p>Предложение действует:</p>--}}
            {{--<div class="timer clearfix">--}}
                {{--<div class="timer_item">--}}
                    {{--<div class="count hours"></div>--}}
                    {{--<div class="text">часов</div>--}}
                {{--</div>--}}
                {{--<div class="timer_item">--}}
                    {{--<div class="count minutes"></div>--}}
                    {{--<div class="text">минут</div>--}}
                {{--</div>--}}
                {{--<div class="timer_item">--}}
                    {{--<div class="count seconds"></div>--}}
                    {{--<div class="text">секунд</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <form id="order_form" class="main-order-form order_form" action="#" method="post">
            <input class="field" type="text" name="name" placeholder="Введите Ваше имя" required>
            <input class="field" type="tel" name="phone" placeholder="Введите Ваш телефон" required>
            <button class="button">Оформить заказ</button>
        </form>
        <div class="products_count">Осталось <b>16</b> корсетов по акции</div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $("a[href^='#']").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
            return false;
        });
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            smartSpeed: 300,
            mouseDrag: false,
            pullDrag: false,
            dots: false,
            nav: true,
            navText: ""
        });
    });
</script>
</body>
</html>