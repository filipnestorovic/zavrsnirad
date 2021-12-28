<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="robots" content="noarchive">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="" type="image/png">
    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/beautybox/style.css">
    <!-- JS -->
    <script type="text/javascript" src="{{ asset('/') }}shared_files/slick.min.js"></script>
</head>
<body>
<div class="wrap">
    @include('components.display_errors')
    <section class="b1">
        <h1>BEAUTY BOX 360</h1>
        <h2>Вращающийся органайзер для косметики </h2>
        <h3></h3>
        <ul class="clearfix">
            <li>больше места<br>для косметики</li>
            <li>компактный и<br>вместительный</li>
            <li>вращение на<br>360 градусов
            </li>
        </ul>
    </section>
    <section class="b2">
        <div class="sale-price clearfix">
            <div class="sale">
                <p>АКЦИЯ</p>
                <span>-50%</span>
            </div>
            <div class="price">
                <span style="font-size: 22px;color: white;">Обычная цена:</span><br>
                <p>
                    <price class="price_land_s2 js_old_price">
                        {{ $prices[1]['originalPrice'] }}
                    </price>
                    <price class="price_land_curr js_curs">
                        RSD
                    </price>
                </p>
                <span style="font-size: 22px;color: #ffe100;">Цена по акции:</span><br>
                <span>
                     <price class="price_land_s1 js_new_price">
                        {{ $prices[1]['amount'] }}
                     </price>
                     <price class="price_land_curr js_curs">
                        RSD
                     </price>
                  </span>
            </div>
        </div>
        <a href="#zakaz" class="button-m">Заказать со скидкой</a><br>
    </section>
    <section class="b3">
        <h2><span>BEAUTY BOX 360</span> незаменимая вещь каждой девушки</h2>
        <img src="{{ asset('/') }}purplerelaxFiles/beautybox/ba.jpeg" alt="" title="">
        <p><b>BEAUTY BOX 360</b> – идеальный вариант для хранения косметики, аксессуаров и прочих мелочей. Компактный, но при этом вместительный, органайзер не займет много места.
            Стильный лаконичный дизайн позволит разместить его на открытом месте – туалетном столике или полочке в ванной.
        </p>
    </section>
    <section class="b5">
        <h2>Характеристики</h2>
        <center><img src="{{ asset('/') }}purplerelaxFiles/beautybox/1.gif" alt="" title=""></center>
        <ul class="use">
            <li>
                <p>Стильный органайзер с возможностью вращения на 360 градусов, позволяет легко вместить ваши косметические, парфюмерные и различные средства для удобства хранения и доступа к ним.</p>
                <p>Полочки органайзера можно легко расположить на необходимой высоте.</p>
            </li>
            <li>
                <p>Материал: ABS пластик</p>
            </li>
            <li>
                <p>Цвет: черный</p>
            </li>
            <li>
                <p>Размер: 31 см x 23 см</p>
            </li>
        </ul>
    </section>
    <section class="b4">
        <h2>у косметики<br> должно быть свое место</h2>
        <div class="makeup"></div>
        <p>У тебя бывает, что по утрам ты не можешь найти тени, подводку или блеск для губ? Перерыла всю косметичку, а подводку так и не нашла ...</p>
        <p><b>BEAUTY BOX 360</b> - решает проблему с поиском косметики!  Он не громоздкий, но и не маленький.
            У него идеальный размер - вся твоя косметика будет находится в одном месте!
        </p>
    </section>
    <section class="b7">
        <h2>Отзывы покупателей</h2>
        <div class="reviews">
            <div class="rev">
                <h3>Елена Аксенова</h3>
                <p>Заказала органайзер для себя.Посылка прибыла быстро и делать мaкияж с этим органайзером одно удовольствие. Рекомендую!</p>
            </div>
            <div class="rev r2">
                <h3>Наталья Салтыкова</h3>
                <p>Я заказала BEAUTY BOX 360, чтобы не искать часами нужную косметику! И виглядит круто! Отличный товар!</p>
            </div>
            <div class="rev r3">
                <h3>Марина Петрова</h3>
                <p>Мне нравится этот органайзер, за его практичность и возможность хранить косметику, и не только косметику но и украшения. </p>
            </div>
        </div>
    </section>
    <section class="b8">
        <ul class="ship clearfix">
            <li>
                <p style="margin-top:31px"><b>Доставка по России</b> от 1 до 10 рабочих дней, в зависимости от региона.</p>
            </li>
            <li>
                <p><b>Никаких предоплат!</b> Оплата осуществляется непосредственно по факту получения заказа на руки</p>
            </li>
            <li>
                <p><b>Гарантия результата!</b> Мы вернем деньги, если не понравится BEAUTY BOX 360</p>
            </li>
        </ul>
    </section>
    <section class="b1">
        <h1>BEAUTY BOX 360</h1>
        <h2>Вращающийся органайзер для косметики </h2>
        <h3></h3>
        <ul class="clearfix">
            <li>больше места<br>для косметики</li>
            <li>компактный и<br>вместительный</li>
            <li>вращение на<br>360 градусов
            </li>
        </ul>
    </section>
    <section class="b10">
        <div class="sale-price clearfix">
            <div class="sale">
                <p>АКЦИЯ</p>
                <span>-50%</span>
            </div>
            <div class="price">
                <span style="font-size: 22px;color: white;">Обычная цена:</span><br>
                <p>
                    <price class="price_land_s2 js_old_price">
                        {{ $prices[1]['originalPrice'] }}
                    </price>
                    <price class="price_land_curr js_curs">
                        RSD
                    </price>
                </p>
                <span style="font-size: 22px;color: #ffe100;">Цена по акции:</span><br>
                <span>
                     <price class="price_land_s1 js_new_price">
                        {{ $prices[1]['amount'] }}
                     </price>
                     <price class="price_land_curr js_curs">
                        RSD
                     </price>
                  </span>
            </div>
        </div>
        <form id="zakaz" class="m1-form orderformcdn" method="post" action="{{$orderRoute}}">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input class="input-phone field" name="name" type="text" placeholder="Ime i prezime" required="">
            <input class="input-phone field only_number" name="phone" type="tel" placeholder="Telefon" required="">
            <input class="input-phone field" name="shipping_address" type="text" placeholder="Adresa" required="">
            <input class="input-phone field" name="shipping_city" type="text" placeholder="Grad" required="">
            <button class="button-m js_submit">Poručite sada</button>
        </form>
    </section>
</div>
<script>
    $(document).ready(function(){
        $('a[href^="#"]').click(function (){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        });
        $('.reviews').slick({
            dots: false,
            infinite: true,
            speed: 500,
            fade: false,
            cssEase: 'linear'
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>