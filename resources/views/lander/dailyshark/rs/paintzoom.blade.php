<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=480">
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/paintzoom/style.css" type="text/css">
    <style>@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Light.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Light.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Light.ttf') format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Medium.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Medium.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Medium.ttf') format('truetype');font-weight:500;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Bold.ttf') format('truetype');font-weight:700;font-style:normal}</style>
</head>
<body>
<div class="wrap">
    @include('components.display_errors')
    <div class="header">
        <h1 class="uppercase center black b green_bg">Paint Zoom</h1>
        <h2 class="uppercase center white">универсальный распылитель краски</h2>
        <img src="{{ asset('/') }}dailysharkFiles/paintzoom/header_imgc1551.jpg">
        <div class="reyt">
            <div class="stars"><b>4.9</b> (голосов: 673)</div>
            заказов: 21058
        </div>
        <div class="timer_price">
            <div class="products_count prod1"><b>12 шт.</b> осталось по акции</div>
            <div class="price" style="float: right;">
                <div class="old">
                    {{ $prices[1]['originalPrice'] }} RSD
                </div>
                <div class="sale">
                    -40%
                </div>
                <div class="new b">
                    {{ $prices[1]['amount'] }} RSD
                </div>
            </div>
        </div>
        <a href="#order_form" class="button-m">Poručite sada</a>
        <div class="guard_all">
            <div class="guard" style="float: none; margin: 0 auto; border: none;">Zaštita kupaca</div>
        </div>
    </div>
    <section class="opisanie">
        <h2 class="venzel"><span class="green">Что такое</span> <b>Paint Zoom</b></h2>
        <img class="center" src="{{ asset('/') }}dailysharkFiles/paintzoom/tov-1502e0.jpg">
        <p class="justify">Краскораспылитель Paint Zoom ― отличный помощник, который быстро покрасит любую
            поверхность!
        </p>
        <p class="justify">Paint Zoom заменит целый ряд инструментов для покраски <strong>любой поверхности</strong>
            из бетона, кирпича, дерева и многих других. Малярные щетки, кисти и валики больше не потребуются!
        </p>
        <p class="justify"><strong>Посмотрите видео:</strong></p>
    </section>
    <section>
        <ul class="spisok ul_black black_ul">
            <li>Помогает с легкостью добиться профессионального результата покраски</li>
            <li>Подходит для окрашивания любой поверхности</li>
            <li>Простой в использовании</li>
            <li>Экономит краску, силы и время</li>
            <li>Равномерное, легкое, быстрое, качественное окрашивание</li>
            <li>Подходит для красок, а также лаков, масел, дезинфекторов и прочих жидкостей любого типа</li>
        </ul>
        <p><a href="#order_form" class="button-m">Poručite sada</a></p>
    </section>
    <section class="opisanie">
        <h2 class="venzel"><span class="green">Преимущества</span> <b>Paint Zoom</b></h2>
        <img class="center" src="{{ asset('/') }}dailysharkFiles/paintzoom/feature2.jpg">
        <p class="justify">Это мощный прибор с <strong>аэрозольной технологией покрытия</strong> для
            профессиональной окраски при выполнении внутренних и наружных работ при ремонте, а также в быту и на
            даче.
        </p>
        <p class="justify">За <strong>10 минут</strong> вы легко покрасите поверхность площадью 15 квардратных
            метров так же качественно, как и опытный профессионал.
        </p>
        <img class="center" src="{{ asset('/') }}dailysharkFiles/paintzoom/feature3.jpg">
        <p class="justify">Вам не придется напрягаться, Paint Zoom выполнит всю сложную работу вместо вас. Если до
            этого покраска с помощью валика или кистей занимала много времени, то с помощью данного продукта вы
            сможете выполнить работу <strong>всего лишь за несколько минут.</strong>
        </p>
        <img class="center" src="{{ asset('/') }}dailysharkFiles/paintzoom/sec-3-imgde24d.jpg">
        <p><a href="#order_form" class="button-m">Poručite sada</a></p>
    </section>
    <section class="b10 b10-avas">
        <h2 class="venzel"><span class="green">Что говорят клиенты</span> о <b>Paint Zoom</b></h2>
        <div class="reviews">
            <div class="rev">
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/b10-avacce58.jpg">
                <p>
                    Впервые пользовался этим устройством. Очень доволен, вещь незаменимая для ремонта. Мощный,
                    работает без перебоев. Легко очищается после использования. Рекомендую всем: разобраться сможет
                    даже ребёнок, а времени экономит много.
                </p>
                <p class="name"><b>Сыченко Геннадий</b> </p>
            </div>
            <div class="rev">
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/b11-avaa04d3.jpg">
                <p>В первый раз использовал его для подкраски отремонтированных элементов кузова на машине своего
                    отца. И всё прошло как в рекламе. Сам по себе краскораспылитель Paint Zoom достаточно легкий и
                    удобно располагается на ремне через плечо. Покраска прошла успешно. Рекомендую! Взял еще один
                    куму на подарок.
                </p>
                <p class="name"><b>Колтаков Петр</b></p>
            </div>
            <div class="rev">
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/b12-avaa20be.jpg">
                <p>
                    Брал этот девайс для дома и для дачи. Скажу вам так: вещь просто незаменимая. Время и силы
                    экономит колоссально! Раньше мне на то, чтоб собраться покрасить забор могло уйти больше месяца)
                    Чтоб собраться с силами)) А сейчас - встал и пошел покрасил. 10-15 минут и всё готово. Через
                    пару часов уже и высохло. К тому же экономит краску. 5 баллов!
                </p>
                <p class="name"><b>Крохмаль Вадим</b></p>
            </div>
        </div>
    </section>
    <section>
        <ul class="deliv deliv1">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/deliv1-139bf7.png">
                <h3>Доставка</h3>
                <p>В течение 1-3 рабочих дней.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/deliv1-2ddd71.png">
                <h3>Оплата</h3>
                <p>Оплата заказов осуществляется по факту получения товара</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/deliv1-3e7528.png">
                <h3>Гарантии</h3>
                <p>Мы всегда проверяем товар перед отправкой и гарантируем 100% качество</p>
            </li>
        </ul>
    </section>
    <section>
        <ul class="deliv_v2 deliv_v2_1 border_bottom">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/deliv_v2-1a5e20.png">
                <h3>Заявка</h3>
                <p>Оставляете заявку
                    на сайте
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/deliv_v2-213f9f.png">
                <h3>Звонок</h3>
                <p>Наш менеджер
                    уточняет детали заказа
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/deliv_v2-34aba0.png">
                <h3>Отправка</h3>
                <p>Доставляем ваш товар
                    в течение 1-3 дней
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/paintzoom/deliv_v2-4efafe.png">
                <h3>Получение</h3>
                <p>Оплачиваете при
                    получении
                </p>
            </li>
        </ul>
    </section>
    <div class="header footer">
        <h1 class="uppercase center black b green_bg">Paint Zoom</h1>
        <h2 class="uppercase center white">универсальный распылитель краски</h2>
        <img src="{{ asset('/') }}dailysharkFiles/paintzoom/header_imgc1551.jpg">
        <div class="reyt">
            <div class="stars"><b>4.9</b> (голосов: 673)</div>
            заказов: 21058
        </div>
        <h3>Оставьте <b>заявку</b></h3>
        <div class="posttile">Наши менеджеры свяжутся с вами для консультации и помогут сделать заказ</div>
        <div class="timer_price">
            <div class="products_count prod1"><b>12 шт.</b> осталось по акции</div>
            <div class="price" style="float: right;">
                <div class="old">
                    {{ $prices[1]['originalPrice'] }} RSD
                </div>
                <div class="sale">
                    -40%
                </div>
                <div class="new b">
                    {{ $prices[1]['amount'] }} RSD
                </div>
            </div>
        </div>
        <form id="order_form" class="m1-form" action="{{$orderRoute}}" method="post">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input class="field" name="name" type="text" placeholder="Ime i prezime" required="">
            <input class="field" name="phone" type="tel" placeholder="Telefon" required="">
            <input class="field" name="shipping_address" type="text" placeholder="Adresa" required="">
            <input class="field" name="shipping_city" type="text" placeholder="Grad" required="">
            <button class="button-m">Poručite sada</button>
        </form>
        <div class="guard_all">
            <div class="guard" style="float: none; margin: 0 auto; border: none;">Zaštita kupaca</div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/paintzoom/lightbox.min.js"></script>
<script>
    $(function(){
        $('a[href^="#"]').click(function (){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        });

        $('.gallery').slick({
            dots: false,
            infinite: true,
            speed: 200,
            fade: false,
            cssEase: 'linear'
        });

        $('.reviews').slick({
            dots: false,
            infinite: false,
            speed: 200,
            fade: false,
            cssEase: 'linear'
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>