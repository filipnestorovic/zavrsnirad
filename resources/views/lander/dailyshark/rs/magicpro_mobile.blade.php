<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <link rel="shortcut icon" type="image/png" href="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/magicpro_mobile/reset.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/magicpro_mobile/styles.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/magicpro_mobile/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/magicpro_mobile/slick-theme.css">
    <style>
        table.size {
            width: 100%;
        }
        tr:nth-child(even) {
            background-color: #e5e5e5;
        }
        .slick-loading .slick-list {
            background: #fff url('{{ asset('/') }}dailysharkFiles/aircalm/ajax-loader.gif') center center no-repeat;
        }
        @font-face {
            font-family: 'slick';
            font-weight: normal;
            font-style: normal;
            src: url('{{ asset('/') }}fonts/slick.eot');
            src: url('{{ asset('/') }}fonts/slick.eot?#iefix') format('embedded-opentype'), url('{{ asset('/') }}fonts/slick.woff') format('woff'), url('{{ asset('/') }}fonts/slick.ttf') format('truetype'), url('{{ asset('/') }}fonts/slick.svg#slick') format('svg');
        }
    </style>
</head>
<body>
<div class="main_wrapper">
    <!-- header 3 -->
    <header class="offer_section offer3">
        <h1 class="main_title">ШВЕЙНАЯ МАШИНКА ZOLAX</h1>
        <div class="info_block">
            <p class="subtitle">КОМПАКТНОСТЬ И НАДЕЖНОСТЬ</p>
            <div class="discount"><b>-40% popusta</b></div>
            <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/1.jpg" alt="">
        </div>
        <div class="price_block">
            <div class="price_item old">
                <div class="text">Stara cena:</div>
                <div class="value">{{ $prices[1]['originalPrice'] }} RSD</div>
            </div>
            <div class="price_item new">
                <div class="text">Nova cena:</div>
                <div class="value">{{ $prices[1]['amount'] }} RSD</div>
            </div>
        </div>
        <div class="benefits_block clearfix">
            <div class="benefit_item">
                <p>Комфортная<br> в использовании </p>
            </div>
            <div class="benefit_item">
                <p>Высочайшее качество</p>
            </div>
            <div class="benefit_item">
                <p>Подходит для всех</p>
            </div>
        </div>
        <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
            {{csrf_field()}}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input class="field" type="text" name="name" placeholder="Ime i prezime" required>
            <input class="field" type="tel" name="phone" placeholder="Telefon" required>
            <input class="field" type="text" name="shipping_address" placeholder="Adresa" required>
            <input class="field" type="text" name="shipping_city" placeholder="Grad" required>
            <button class="button">ZAVRŠI PORUDŽBINU</button>
        </form>
        {{--<div class="products_count">Осталось <b>18</b> швейных машинок по акции</div>--}}
    </header>
    <section class="description_section">
        <ul class="characteristics__list">
            <li><b>Размеры:</b>Машинка помещается в небольшую сумку или портфель, а также маленький вес делает её легко транспортируемой.</li>
            <li><b>Производитель:</b> Made in Germany</li>
            <li><b>Преймущества</b> Компактная, удобная, функциональная машинка с легкостью выполнит даже самые непростые задачи. Идеально выполняет 8 швейных операций. </li>
        </ul>
    </section>
    <section class="cat" id="cat">
        <div class="catitem">
            <div class="item-slider">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/5.jpg" alt="">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/6.jpg" alt="">

            </div>
            <div class="clearfix">
                <h3>ШВЕЙНАЯ МАШИНКА</h3>
                <div class="catprice clearfix">
                    <div class="cp-left">
                        <span>-40%</span>
                        <p>{{ $prices[1]['originalPrice'] }} RSD</p>
                    </div>
                    <div class="cp-right">
                        <span>Nova cena:</span>
                        <p>{{ $prices[1]['amount'] }} RSD</p>
                    </div>
                </div>
            </div>
            <a href="#order_form" class="button">PORUČITE SADA</a>
        </div>
        <section class="reviews3_section">
            <h2 class="title">Отзывы <span>покупателей</span></h2>
            <div class="reviews_list">
                <div class="review_item">
                    <div class="author_block clearfix">

                        <div class="author_info">
                            <div class="name">Екатерина Мельник</div>
                            <div class="text">25 лет</div>
                        </div>
                        <div class="info">
                            <div class="rating"></div>
                            <div class="date">04.02.2020</div>
                        </div>
                    </div>
                    <p> Заказала себе машинку на этом сайте. Давно хотела заняться хэнд мейдом, порукодельничать так сказать). Это маленькое чудо делает мои швы такими ровными, что иногда мне не верится, что это сделала я своими руками! </p>

                </div>
                <div class="review_item">
                    <div class="author_block clearfix">

                        <div class="author_info">
                            <div class="name">Виктор Оноприенко</div>
                            <div class="text">27 лет</div>
                        </div>
                        <div class="info">
                            <div class="rating"></div>
                            <div class="date">13.08.2019</div>
                        </div>
                    </div>
                    <p>Купил жене на годовщину. Отличная штука за эти деньги. Советую брать с улучшеную версию, реально намного быстрее и удобнее. Заказал еще 2 шт по акции на подарок подругам)</p>

                </div>
                <div class="review_item">
                    <div class="author_block clearfix">

                        <div class="author_info">
                            <div class="name">Алла Конейко</div>
                            <div class="text">32 года</div>
                        </div>
                        <div class="info">
                            <div class="rating"></div>
                            <div class="date">11.01.2020</div>
                        </div>
                    </div>
                    <p>Данную машинку приобретала, чтобы выполнять мелкую работу не выходя из дома. Моя маленькая помощница помещается даже в сумочку и её можно комфортно взять с собой на дачу. .</p>

                </div>
            </div>
        </section>
    </section>
    <section class="cat" id="cat">
        <div class="catitem">
            <div class="item-slider">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/3.jpg" alt="">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/4.jpg" alt="">


            </div>
        </div>
    </section>
    <div class="tlt">
        <h2 class="title"><span>Как сделать</span><br> заказ?</h2>
    </div>
    <div class="order_steps1">
        <div class="step_item">
            <div class="step_wrapper">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/order_steps__step1_icon.png" alt="">
                <h4>Заявка</h4>
                <p>Заполните форму на сайте</p>
            </div>
        </div>
        <div class="step_item">
            <div class="step_wrapper">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/order_steps__step2_icon.png" alt="">
                <h4>Звонок</h4>
                <p>Наш менеджер перезвонит для уточнения деталей</p>
            </div>
        </div>
        <div class="step_item">
            <div class="step_wrapper">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/order_steps__step3_icon.png" alt="">
                <h4>Отправка</h4>
                <p>Доставляем ваш товар в течение<br> 1-3 дней
                </p>
            </div>
        </div>
        <div class="step_item">
            <div class="step_wrapper">
                <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/order_steps__step4_icon.png" alt="">
                <h4>Получение</h4>
                <p>Оплачиваете при получении</p>
            </div>
        </div>
    </div>
    <section class="offer_section offer3 order">
        <h1 class="main_title">ШВЕЙНАЯ МАШИНКА ZOLAX</h1>
        <div class="info_block">
            <p class="subtitle">КОМПАКТНОСТЬ И НАДЕЖНОСТЬ</p>
            <div class="discount"><b>-40% popusta</b></div>
            <img src="{{ asset('/') }}dailysharkFiles/magicpro_mobile/2.jpg" alt="">
        </div>
        <div class="price_block">
            <div class="price_item old">
                <div class="text">Stara cena:</div>
                <div class="value">{{ $prices[1]['originalPrice'] }} RSD</div>
            </div>
            <div class="price_item new">
                <div class="text">Nova cena:</div>
                <div class="value">{{ $prices[1]['amount'] }} RSD</div>
            </div>
        </div>
        <div class="benefits_block clearfix">
            <div class="benefit_item">
                <p>Комфортные<br> в использовании </p>
            </div>
            <div class="benefit_item">
                <p>Высочайшее качество</p>
            </div>
            <div class="benefit_item">
                <p>Подходит для всех</p>
            </div>
        </div>
        <a href="#order_form" class="button">PORUČITE SADA</a>
        {{--<div class="products_count">Осталось <b>18</b> швейных машинок по акции</div>--}}
    </section>
    {{--<footer class="footer_section">--}}
        {{--<div style="font-size:13px;">--}}
            {{--<div class="foot_ru_center" style="text-align: center; margin: 0px auto; padding: 30px 0; font-size:15px">--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</footer>--}}
</div>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script>
    $('.item-slider').slick({
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,
    });
</script>
</body>
</html>