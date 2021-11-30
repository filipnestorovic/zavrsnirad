<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/prowax/style.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>
@include('components.display_errors')
<section class="topline">
    <div class="wrap">
        <ul>
            <li><a href="#1">Преимущества</a></li>
            <li><a href="#2">Характеристики</a></li>
            <li><a href="#3">Описание</a></li>
            <li><a href="#4">Отзывы</a></li>
            <li><a href="#5">Доставка</a></li>
        </ul>
    </div>
</section>
<section class="block1">
    <div class="wrap">
        <h1><span>Воскоплав баночный Pro-Wax 100</span></h1>
        <span class="sale">со скидкой 50%</span>
        <div class="produkt"></div>
        <div class="conversion" style="text-align: center;">
            <div class="prices">
                  <span class="old-cost price_old">
                     {{ $prices[1]['originalPrice'] }} RSD
                  </span>
                <span class="new-cost price_main">
                     {{ $prices[1]['amount'] }} RSD
                  </span>
            </div>
            <a href="#buy" class="button">Заказать со скидкой</a>
        </div>
    </div>
</section>
<section class="block2" id="1">
    <div class="wrap">
        <ul class="clrfx">
            <li>
                <i class="fas fa-star"></i>
                <h3>100% оригинал</h3>
                Мы ориентируемся на широкий оборот, поэтому можем позволить себе доступные цены.
            </li>
            <li>
                <i class="fas fa-truck"></i>
                <h3>Быстрая доставка</h3>
                Доставка до 3 дней в любую точку Узбекистана.
            </li>
            <li>
                <i class="far fa-credit-card"></i>
                <h3>Оплата при получении</h3>
                Вам не нужно оплачивать сразу, вы сможете оплатить товар при получении.
            </li>
            <li>
                <i class="fas fa-shield-alt"></i>
                <h3>Гарантированное качество</h3>
                Мы проверяем все товары, прежде чем их отправить. Вы можете быть уверены в качестве и сохранности вашего товара.
            </li>
        </ul>
    </div>
</section>
<section class="block3" id="2">
    <div class="wrap">
        <h2 class="btitle">Характеристики</h2>
        <div class="gallery">
            <div class="my-gallery">
                <div><img src="{{ asset('/') }}purplerelaxFiles/prowax/main-1.jpeg" alt="ProVax" title="ProVax"></div>
                <div><img src="{{ asset('/') }}purplerelaxFiles/prowax/main-2.jpeg" alt="ProVax" title="ProVax"></div>
                <div><img src="{{ asset('/') }}purplerelaxFiles/prowax/main-3.jpeg" alt="ProVax" title="ProVax"></div>
            </div>
        </div>
        <div class="char clrfx">
            <ul class="left-char">
                <li>
                    <h3>Мощность:</h3>
                    100 Вт;
                </li>
                <li>
                    <h3>Объем емкости:</h3>
                    450 мл;
                </li>
                <li>
                    <h3>Напряжение:</h3>
                    110/220/240В;
                </li>
                <li>
                    <h3>Цвет:</h3>
                    черный;
                </li>
            </ul>
            <ul class="right-char">
                <li>
                    <h3>Количество температурных режимов:</h3>
                    3;
                </li>
                <li>
                    <h3>Длина сетевого шнура:</h3>
                    1.5 м
                </li>
                <li>
                    <h3>Вес:</h3>
                    0,39 кг;
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="block4" id="3">
    <div class="wrap">
        <div class="leftside">
            <h2 class="btitle"><span>Описание</span></h2>
            <article>
                <b><span>Воскоплав баночный Pro-Wax 100 white - нагреватель для воска в банках или в стаканчике. Небольшой объем банки (450 мл) позволяет успешно использовать его не только профессионалами в салоне, но и применять в домашних условиях. Баночный воскоплав Pro Wax 100 оснащен удобной ручкой терморегулятором для выбора температуры плавления воска от 45 до 105 градусов. При этом аппарат работает как термопот, поддерживая комфортную температуру парафина или воска в течение всей процедуры.</span></b>
            </article>
        </div>
        <div class="rightside">
            <div class="produkt"></div>
            <a href="#buy" class="button">Заказать со скидкой</a>
        </div>
    </div>
</section>
<section class="block5" id="4">
    <div class="wrap">
        <h2 class="btitle">Отзывы <span>покупателей</span></h2>
        <ul class="reviews">
            <li class="r1">
                <h3>София Анисимова</h3>
                <p>Здравствуйте! Впервые делаю заказ в этой компании. Очень здорово! Я очень довольна! Оператор связался со мной в считанные минуты, было очень приятно. Буду советовать всем своим друзьям! Желаю удачи и процветания!</p>
            </li>
            <li class="r2">
                <h3>Любовь Пономарёва</h3>
                <p>Не представляю, как я раньше жила без этого воскоплава. Выбирала долго и мучительно, просматривала много предложений других магазинов и нашла самый качественный и выгодный именно у вас. Он очень полезный и эффективный! Очень довольна. Буду заказывать еще!</p>
            </li>
            <li class="r3">
                <h3>Татьяна Борисова</h3>
                <p>Воскоплав купили в косметологический кабинет и очень довольны покупкой. Быстро греется, легко регулируется, работает бесшумно. Подходит под все виды воска и пасты для шугаринга. Помещаются все банки, благо у всех диаметр одинаков. Работает и работает, повторю очень довольны!</p>
            </li>
        </ul>
    </div>
</section>
<section class="block6" id="5">
    <div class="wrap">
        <h2 class="btitle">Как получить <span>товар</span></h2>
        <ul class="as clrfx">
            <li>
                <i class="fas fa-clipboard-list"></i>
                <h3>Оставьте заявку</h3>
                <p>Заполните форму ниже, указав свое имя, фамилию и номер телефона</p>
            </li>
            <li>
                <i class="fas fa-clipboard-check"></i>
                <h3>Получите консультацию</h3>
                <p>Наши сотрудники свяжутся с вами для уточнения деталей заказа</p>
            </li>
            <li>
                <i class="fas fa-truck"></i>
                <h3>Заберите свой заказ</h3>
                <p>Мы отправим ваш заказ курьером</p>
            </li>
            <li>
                <i class="fas fa-credit-card"></i>
                <h3>Оплатите при получении</h3>
                <p>Никаких предоплат! Оплата осуществляется при получении заказа</p>
            </li>
        </ul>
        <p class="note">Доставка почтой <b>от 7 рабочих дней в зависимости от региона,</b><br> Вы вправе отказаться от покупки <b>в течение 14 дней</b> с момента получения заказа</p>
    </div>
</section>
<section class="topline">
    <div class="wrap">
        <ul>
            <li><a href="#1">Преимущества</a></li>
            <li><a href="#2">Характеристики</a></li>
            <li><a href="#3">Описание</a></li>
            <li><a href="#4">Отзывы</a></li>
            <li><a href="#5">Доставка</a></li>
        </ul>
    </div>
</section>
<section class="block7">
    <div class="wrap">
        <h2 class="show-medium">Воскоплав баночный Pro-Wax 100</h2>
        <span class="fsale"><span class="show-large">скидка</span><span class="show-medium">Со скидкой</span> 50%</span>
        <div class="produkt"></div>
        <div class="formbox">
            <div class="prices">
                  <span class="old-cost price_old">
                     {{ $prices[1]['originalPrice'] }}
                     RSD
                  </span>
                <span class="new-cost price_main">
                     {{ $prices[1]['amount'] }}
                     RSD
                  </span>
            </div>
            <form action="{{$orderRoute}}" method="post" id="buy">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" placeholder="Ime i prezime" required="">
                <input type="tel" name="phone" placeholder="Telefon" required="" >
                <button class="button" type="submit">Poručite sada</button>
            </form>
        </div>
    </div>
</section>
<link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/prowax/slick.css">
<script src="{{ asset('/') }}purplerelaxFiles/prowax/slick.min.js"></script>
<script>
    $(document).ready(function () {
        $('a[href^="#buy"], .topline a[href^="#"]').click(function () {
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({ scrollTop: destination }, 800);
            return false;
        });
        $(".my-gallery").slick({ dots: false, infinite: true, speed: 200, fade: true, cssEase: "linear" });
        $(".reviews").slick({ dots: false, infinite: true, speed: 800, fade: false, cssEase: "linear" });
    });
</script>
@include('components.pixel_footer')
</body>
</html>