<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/skleker/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/skleker/style.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <style>@font-face{font-family:'Geometria';src:url('{{ asset('/') }}fonts/Geometria-Light.eot_');src:local('Geometria Light'),local('Geometria-Light'),url('{{ asset('/') }}fonts/Geometria-Light.eot_') format('embedded-opentype'),url('{{ asset('/') }}fonts/Geometria-Light.woff') format('woff'),url('{{ asset('/') }}fonts/Geometria-Light.ttf') format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'Geometria';src:url('{{ asset('/') }}fonts/Geometria.eot');src:local('Geometria'),url('{{ asset('/') }}fonts/Geometria.eot_') format('embedded-opentype'),url('{{ asset('/') }}fonts/Geometria.woff') format('woff'),url('{{ asset('/') }}fonts/Geometria.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Geometria';src:url('{{ asset('/') }}fonts/Geometria-Bold.eot');src:local('Geometria Bold'),local('Geometria-Bold'),url('{{ asset('/') }}fonts/Geometria-Bold.eot_') format('embedded-opentype'),url('{{ asset('/') }}fonts/Geometria-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/Geometria-Bold.ttf') format('truetype');font-weight:700;font-style:normal}</style>
    <script src="{{ asset('/') }}shared_files/slick.min.js"></script>
</head>
<body>
@include('components.display_errors')
<header>
    <div class="container">
        <h1 class="heading">Портативный тренажер для отжиманий</h1>
        <h2 class="subtitle">Отличная замена тренажерному залу</h2>
        <div class="sale">
            <p>-50%</p>
        </div>
        <ul class="head-list">
            <li>9 в 1</li>
            <li>Максимальные нагрузки</li>
            <li>Портативный. Удобно брать с собой и заниматься, где угодно</li>
            <li> прочный материал</li>
            <li> стильный дизайн</li>
        </ul>
        <div class="price-block">
            <div class="price-block__item">
                <p>Обычная цена:</p>
                <div class="old-price">{{ $prices[1]['originalPrice'] }} RSD</div>
            </div>
            <div class="price-block__item">
                <p>Цена сегодня:</p>
                <div class="new-price">{{ $prices[1]['amount'] }} RSD</div>
            </div>
        </div>
        <a href="#forma" class="btn btn-order">Заказать</a>
    </div>
</header>
<!-- advantage  -->
<section class="feature grey-section">
    <div class="container">
        <h2 class="title">Особенности портативного тренажера</h2>
        <div class="feature__wrap">
            <div class="feature__item">
                <img src="{{ asset('/') }}flexonikFiles/skleker/feat1.png" alt="Skleker">
                <h3>• Удобно тренироваться где угодно
                </h3>
            </div>
            <div class="feature__item">
                <img src="{{ asset('/') }}flexonikFiles/skleker/feat2.png" alt="Skleker">
                <h3>• Тренажер просто собрать и разобрать
                </h3>
            </div>
            <div class="feature__item">
                <img src="{{ asset('/') }}flexonikFiles/skleker/feat3.jpg" alt="Skleker">
                <h3>• Каждый цвет соответствует группе мышц </h3>
            </div>
            <div class="feature__item">
                <img src="{{ asset('/') }}flexonikFiles/skleker/feat4.jpg" alt="Skleker">
                <h3>• При помощи специальных ручек выбираете над чем будете работать</h3>
            </div>
        </div>
    </div>
</section>
<!-- /.advantage -->
<!-- info-block -->
<section class="info-block">
    <div class="container">
        <h2>С этим тренажером вы точно обретете красивое тело! </h2>
        <div class="text">
            <p>
                При отжиманиях даже небольшое изменение положения руки вызывает совершенно другую нагрузку на целевую мышцу .
                С тренажером вы получаете идеальную мышечную массу, можете выполнять упражнения с комфортом и достигать потрясающих, заметных результатов!

            </p>
            <div class="info">
                Просто поместите ручки в нужное положение и получите руки, грудь, плечи и спину, о которых вы всегда мечтали.

            </div>
        </div>
        <div class="media">
            <div class="media-container">
                <img src="{{ asset('/') }}flexonikFiles/skleker/info-img.jpg" alt="Skleker">
            </div>
        </div>
    </div>
</section>
<!-- /.how-use -->
<section class="color">
    <div class="container">
        <div class="gallery2 ">
            <h2>Для чего нужно разделение по цветам?</h2>
            <div class="slider-chars">
                <div class="color-block">
                    <img src="{{ asset('/') }}flexonikFiles/skleker/color1.jpg" alt="Skleker">
                    <p> Красный. Тренировка плеч</p>
                </div>
                <div class="color-block">
                    <img src="{{ asset('/') }}flexonikFiles/skleker/color2.jpg" alt="Skleker">
                    <p>Синий. Тренировка груди</p>
                </div>
                <div class="color-block">
                    <img src="{{ asset('/') }}flexonikFiles/skleker/color3.png" alt="Skleker">
                    <p>Желтый. Тренировка спины</p>
                </div>
                <div class="color-block">
                    <img src="{{ asset('/') }}flexonikFiles/skleker/color4.jpg" alt="Skleker">
                    <p> Зеленый. Тренировка трицепса</p>
                </div>
            </div>
        </div>
    </div>
</section>
<h2 class="title">Технические характеристики</h2>
<div class="block4-cont">
    <div class="container">
        <div class="media-char">
            <img src="{{ asset('/') }}flexonikFiles/skleker/char.jpg" alt="">
        </div>

        <div class="char-box clearfix">
            <ul class="char char1">
                <li>
                    <p><span>Размер 595мм* 180мм* 20 мм</span></p>
                </li>
            </ul>
            <ul class="char char2">
                <li>
                    <p><span>Материал: АБС-пластик </span></p>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /.char -->
<section class="post">
    <h2 class="title"><span>Отзывы</span></h2>
    <div class="">
        <div class="rev-block clearfix">
            <div class="post-inst">
                <div class="info">
                    <img src="{{ asset('/') }}flexonikFiles/skleker/rev1.jpg" alt="">
                    <div class="login" style="filter: blur(3px);">oleg_ismailov71</div>
                    <a href="#forma" class="button-m">Сделать заказ</a>
                </div>
                <img class="im img-responsive" src="{{ asset('/') }}flexonikFiles/skleker/prod1.jpg" alt="">
                <div class="desc">
                    <div class="like">Нравится: 157</div>
                    <p>
                        <b style="filter: blur(3px);">oleg_ismailov71</b> Наконец я нашла тренажер, на котором действительно занимаюсь. Дома уже стоят 2 агрегата - пылятся. Этот компактный, удобный, легко настроить свой уровень. Очень рада, что приобрела его.
                    </p>
                    <div class="date">3 дн.</div>
                </div>
            </div>

            <div class="post-inst">
                <div class="info">
                    <img src="{{ asset('/') }}flexonikFiles/skleker/rev2.jpg" alt="">
                    <div class="login" style="filter: blur(3px);">marimari_murr</div>
                    <a href="#forma" class="button-m">Сделать заказ</a>
                </div>
                <img class="im img-responsive" src="{{ asset('/') }}flexonikFiles/skleker/prod2.jpg" alt="">
                <div class="desc">
                    <div class="like">Нравится: 483</div>
                    <p>
                        <b style="filter: blur(3px);">marimari_murr</b> Подарила мужу на день рождения. Для дома-идеально, он доволен и занимается каждый день. Сказал, что летом будет брать с собой в парк

                    </p>
                    <div class="date">1 нед.</div>
                </div>
            </div>

            <div class="post-inst">
                <div class="info">
                    <img src="{{ asset('/') }}flexonikFiles/skleker/rev3.jpg" alt="">
                    <div class="login" style="filter: blur(3px);">oleg_kuzovlev41</div>
                    <a href="#forma" class="button-m">Сделать заказ</a>
                </div>
                <img class="im img-responsive" src="{{ asset('/') }}flexonikFiles/skleker/prod3.jpg" alt="">
                <div class="desc">
                    <div class="like">Нравится: 41</div>
                    <p>
                        <b style="filter: blur(3px);">oleg_kuzovlev41</b> Я редко пишу отзывы, но это правда отличное устройство, стоит своих денег.
                    </p>
                    <div class="date">4 дн.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.review -->
<section class="how-order">
    <h2 class="title">КАК СДЕЛАТЬ ЗАКАЗ</h2>
    <div class="container">
        <div class="how-block">
            <img src="{{ asset('/') }}flexonikFiles/skleker/how-icon1.png" alt="Skleker" class="how-block__icon">
            <p>Оформите заявку <br> на сайте</p>
        </div>
        <div class="how-block">
            <img src="{{ asset('/') }}flexonikFiles/skleker/how-icon2.png" alt="Skleker" class="how-block__icon">
            <p>С вами связывается <br>наш менеджер</p>
        </div>
        <div class="how-block">
            <img src="{{ asset('/') }}flexonikFiles/skleker/how-icon3.png" alt="Skleker" class="how-block__icon">
            <p>Отправляем товар<br> <br>по всей         Украине
                !</p>
        </div>
        <div class="how-block">
            <img src="{{ asset('/') }}flexonikFiles/skleker/how-icon4.png" alt="Skleker" class="how-block__icon">
            <p>Платите<br>при получении<br>заказа</p>
        </div>
    </div>
</section>
<section class="guarantee">
    <h2 class="title">ГАРАНТИИ </h2>
    <div class="container">
        <div class="gar-block">
            <img height="700" width="700" src="{{ asset('/') }}flexonikFiles/skleker/gar1.jpg" alt="Skleker" class="gar-block__img">
            <p>Мы тщательно проверяем <br>товар перед отправкой.</p>
        </div>
        <div class="gar-block">
            <img height="700" width="700" src="{{ asset('/') }}flexonikFiles/skleker/gar2.jpg" alt="Skleker" class="gar-block__img">
            <p>Товар Вы осматриваете на почте перед получением. <br> </p>
        </div>
        <div class="gar-block">
            <img height="700" width="700" src="{{ asset('/') }}flexonikFiles/skleker/gar3.jpg" alt="Skleker" class="gar-block__img">
            <p>Оплата заказов осуществляется непосредственно по факту получения заказа.</p>
        </div>
    </div>
</section>
<section class="preim">
    <div class="container">
        <h2 class="title">ПРЕИМУЩЕСТВА РАБОТЫ С НАМИ</h2>
        <div class="block1">
            <div class="number">
                <p>1</p>
            </div>
            <div class="title">
                <p>Гарантия качества</p>
            </div>
            <div class="img">
                <img src="{{ asset('/') }}flexonikFiles/skleker/img1.png" alt="Skleker">
            </div>
        </div>
        <div class="polosa">
            <img src="{{ asset('/') }}flexonikFiles/skleker/1.png" alt="Skleker">
        </div>
        <div class=" block2 reverse">
            <div class="img">
                <img src="{{ asset('/') }}flexonikFiles/skleker/img2.png" alt="Skleker">
            </div>
            <div class="title">
                <p>Вся наша продукция прошла проверку качества</p>
            </div>
            <div class="number">
                <p>2</p>
            </div>
        </div>
        <div class="polosa2">
            <img src="{{ asset('/') }}flexonikFiles/skleker/2.png" alt="Skleker">
        </div>
        <div class=" block2">

            <div class="number">
                <p>3</p>
            </div>
            <div class="title">
                <p>Оплата производится только при получении заказа на руки</p>
            </div>
            <div class="img">
                <img src="{{ asset('/') }}flexonikFiles/skleker/img3.png" alt="Skleker">
            </div>
        </div>
        <div class="polosa3">
            <img src="{{ asset('/') }}flexonikFiles/skleker/1.png" alt="Skleker">
        </div>
        <div class=" block2 block3 reverse">


            <div class="img">
                <img src="{{ asset('/') }}flexonikFiles/skleker/img4.png" alt="Skleker">
            </div>
            <div class="title">
                <p>Доставка почтой в течение         1-3
                    дней</p>
            </div>
            <div class="number">
                <p>4</p>
            </div>

        </div>

    </div>
</section>
<section class="title">
    <h2>ЗАКАЖИТЕ Портативный тренажер для отжиманий<br><span>СО СКИДКОЙ 50%</span></h2>
</section>
<section class="bottom">
    <div class="container">
        <div class="bottom-block" id="forma">
            {{--<div class="timer-block s-w clearfix">--}}
                {{--<div>--}}
                    {{--<p>До конца акции осталось:</p>--}}
                {{--</div>--}}
                {{--<div class="div-timer ">--}}
                    {{--<div id="timer">--}}
                        {{--<div class="block">--}}
                            {{--<div class="rect date">1</div>--}}
                            {{--<div class="label">дней</div>--}}
                        {{--</div>--}}
                        {{--<div class="block">--}}
                            {{--<div class="rect hours">23</div>--}}
                            {{--<div class="label">часов</div>--}}
                        {{--</div>--}}
                        {{--<div class="block">--}}
                            {{--<div class="rect mins">37</div>--}}
                            {{--<div class="label">минут</div>--}}
                        {{--</div>--}}
                        {{--<div class="block">--}}
                            {{--<div class="rect secs">08</div>--}}
                            {{--<div class="label">секунд</div>--}}
                        {{--</div>--}}
                        {{--<div class="clear"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="price-block">
                <div class="price-block__item">
                    <p>Stara cena:</p>
                    <div class="old-price">{{ $prices[1]['originalPrice'] }} RSD</div>
                </div>
                <div class="price-block__item">
                    <p>Nova cena:</p>
                    <div class="new-price">{{ $prices[1]['amount'] }} RSD</div>
                </div>
            </div>

            <form class="form" action="{{$orderRoute}}" method="post">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" placeholder="Ime i prezime">
                <input type="tel" name="phone" placeholder="Broj telefona">
                <input type="text" name="shipping_address" placeholder="Adresa">
                <input type="text" name="shipping_city" placeholder="Grad">
                <input type="submit" value="PORUČI ODMAH" class="btn btn-order">
            </form>
        </div>
    </div>
</section>
{{--<script type="text/javascript" src="http://pushuprackboard.xcartpro.com/r1/site/doskathreeinone/js/libs.min.js"></script>--}}
{{--<script src="http://pushuprackboard.xcartpro.com/r1/site/doskathreeinone/js/script.js"></script>--}}
<script>
    $('.slider-chars').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 200,
        fade: false,
        cssEase: 'linear',
        adaptiveHeight: true
    });
</script>
@include('components.pixel_footer')
</body>
</html>