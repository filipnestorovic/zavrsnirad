<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        @font-face {
            font-family: "PT Sans Caption Bold";
            src: url('{{ asset('/') }}fonts/pt-sans-caption-bold.ttf');
        }
        @font-face {
            font-family: "PT Sans Caption";
            src: url('{{ asset('/') }}fonts/pt-sans-caption.ttf');
        }
        @font-face {
            font-family: "Lobster";
            src: url('{{ asset('/') }}fonts/lobster-regular.ttf');
        }
        @font-face {
            font-family: "Roboto Medium";
            src: url('{{ asset('/') }}fonts/robotomedium.ttf');
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/waisttrainer/index.css" media="all">
</head>
<body>
<div id="block1">
    <div class="center-wrapper">
        <div class="content clearfix">
            <div class="column left">
                <h1>WAIST TRAINER</h1>
                <p>Тренировочные Латексные корсеты<br> для уменьшения талии.</p>
                <div class="info left">
                    <ul class="effects">
                        <li>Подтягивает фигуру</li>
                        <li>Делает талию осиной</li>
                    </ul>
                    <div class="prices">
                        <span class="old">
                           <span class="js_old_price price_land_s4">
                              {{ $prices[1]['originalPrice'] }}
                           </span>
                           <span class="js_curs price_land_curr">RSD</span>
                        </span>
                        <span class="new">
                           <span class="js_new_price price_land_s1">
                              {{ $prices[1]['amount'] }}
                           </span>
                           <span class="js_curs price_land_curr">RSD</span>
                        </span>
                    </div>
                    {{--<p class="rest">Спешите! Осталось 5 штук!</p>--}}
                </div>
                <div class="product right">
                    <img src="{{ asset('/') }}flexonikFiles/waisttrainer/product-320.png" alt="Товар">
                </div>
            </div>
            <div class="column right">
                {{--<div class="clearfix">--}}
                    {{--<div class="timer">--}}
                        {{--<div class="block">--}}
                            {{--<div class="rect hours">09</div>--}}
                            {{--<div class="label">Часы</div>--}}
                        {{--</div>--}}
                        {{--<div class="points">:</div>--}}
                        {{--<div class="block">--}}
                            {{--<div class="rect mins">27</div>--}}
                            {{--<div class="label">Минуты</div>--}}
                        {{--</div>--}}
                        {{--<div class="points">:</div>--}}
                        {{--<div class="block">--}}
                            {{--<div class="rect secs">59</div>--}}
                            {{--<div class="label">Секунды</div>--}}
                        {{--</div>--}}
                        {{--<div class="clear"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <form method="post" class="right" action="#">
                    <input value="" class="inp" placeholder="ФИО" name="name" type="text">
                    <input value="" class="inp only_number" placeholder="Телефон" name="phone" type="text">
                    <input class="inp js_submit" value="Заказать" type="submit">
                </form>
            </div>
            <img class="arrow" src="{{ asset('/') }}flexonikFiles/waisttrainer/arrow-pic.png" alt="Стрелка">
        </div>
    </div>
</div>
<div id="block2">
    <div class="center-wrapper">
        <div class="content">
            <h2 id="value">Ваша талия будет ИДЕАЛЬНАЯ</h2>
            <p class="description">
                Waist Training – это процесс постепенного уменьшения объема талии с помощью специального корсета.
            </p>
            <div class="clearfix">
                <div class="value left">
                    <img class="for990" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img3.jpg" alt="">
                    <img class="for640" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img3.jpg" alt="">
                    <img class="for320" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img3-320.jpg" alt="">
                    <h3>Три ряда крючков</h3>
                    <p>Черный классический латексный корсет также производится в разновидности с тремя рядами крючков. Три ряда крючков
                        позволят Вашему корсету пробыть с Вами дольше на пути похудения – когда корсет на двух рядах крючков станет велик,
                        корсет на трех рядах крючков все еще сможет послужить Вам самым маленьким, третьим рядом крючков.
                    </p>
                </div>
                <div class="value right">
                    <img class="for990" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img4.jpg" alt="">
                    <img class="for640" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img4.jpg" alt="">
                    <img class="for320" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img4-320.jpg" alt="">
                    <h3>Разные цвета и размеры</h3>
                    <p>Спортивный латексный корсет изготовлен из эластичного латекса, что позволяет двигаться в повседневной жизни и в
                        спортзале без ограничений. Максимальная степень утяжки. Трехрядная застежка. Девять металлических ребер жесткости.
                        Внутренняя хлопковая прослойка делает ношение латексного корсета комфортным. Размер подбирается по туго
                        замеренному объему талии и вашему росту.
                    </p>
                </div>
                <div id="expert" class="value left">
                    <img class="for990" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img5.jpg" alt="">
                    <img class="for640" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img5.jpg" alt="">
                    <img class="for320" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img5-320.jpg" alt="">
                    <h3>Какой у него принцип действия?</h3>
                    <p>Waist training – это процесс постепенного уменьшения объема талии с помощью специального корсета. Подобная
                        практика была известна и широко распространена еще много веков назад. Одно использование специального корсета
                        мгновенно одаряет Вас красивым, сексуальным силуэтом. Длительное же использование корсета совместно с занятиями
                        спортом и правильной, здоровой диетой способны навсегда убрать лишние сантиметры с Вашей талии.
                    </p>
                </div>
                <div class="value product right">
                    <img class="for990" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img6.jpg" alt="">
                    <img class="for640" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img6.jpg" alt="">
                    <img class="for320" src="{{ asset('/') }}flexonikFiles/waisttrainer/block2-img6-320.jpg" alt="">
                    <h3>Только 100% качество!</h3>
                    <p>Наши высококачественные корсеты – это совершенно не те корсеты, которые продаются в магазинах нижнего белья,
                        будьте бдительны! Обычные корсеты сделаны с использованием стальных прутьев внутри, что создает сильнейший
                        дискомфорт, а также может быть крайне травмоопасным для внутренних органов человека.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="block3">
    <div class="center-wrapper">
        <div class="content clearfix">
            <div class="column left">
                <h2>WAIST TRAINER</h2>
                {{--<div class="clearfix">--}}
                    {{--<div class="timer">--}}
                        {{--<div class="block">--}}
                            {{--<div class="rect hours">09</div>--}}
                            {{--<div class="label">Часы</div>--}}
                        {{--</div>--}}
                        {{--<div class="points">:</div>--}}
                        {{--<div class="block">--}}
                            {{--<div class="rect mins">27</div>--}}
                            {{--<div class="label">Минуты</div>--}}
                        {{--</div>--}}
                        {{--<div class="points">:</div>--}}
                        {{--<div class="block">--}}
                            {{--<div class="rect secs">59</div>--}}
                            {{--<div class="label">Секунды</div>--}}
                        {{--</div>--}}
                        {{--<div class="clear"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="prices">
                     <span class="old">
                        <span class="js_old_price price_land_s4">
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <span class="js_curs price_land_curr">RSD</span>
                     </span>
                    <span class="new">
                        <span class="js_new_price price_land_s1">
                           {{ $prices[1]['amount'] }}
                        </span>
                        <span class="js_curs price_land_curr">RSD</span>
                     </span>
                </div>
                {{--<p class="rest">Спешите! Осталось 5 штук!</p>--}}
            </div>
            <div class="column right">
                <form method="post" class="right" action="#">
                    <input value="" class="inp" placeholder="ФИО" name="name" type="text">
                    <input value="" class="inp only_number" placeholder="Телефон" name="phone" type="text">
                    <input class="inp js_submit" value="Заказать" type="submit">
                </form>
            </div>
            <div class="product">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainer/product.png" alt="Товар">
            </div>
        </div>
    </div>
</div>
<div id="block4">
    <div class="center-wrapper">
        <div class="content">
            <div class="section">
                <div class="text right">
                    <h2 id="composition">КРАСОТА</h2>
                    <ul>
                        <li>Уменьшает объем талии
                            До -17 см.
                        </li>
                        <li>Не ограничивает движения
                            Создавайте идеальную фигуру без каких-либо ограничений
                        </li>
                    </ul>
                </div>
                <img class="left for990" src="{{ asset('/') }}flexonikFiles/waisttrainer/block4-img1.jpg" alt="">
                <img class="left for640" src="{{ asset('/') }}flexonikFiles/waisttrainer/block4-img1.jpg" alt="">
                <img class="left for320" src="{{ asset('/') }}flexonikFiles/waisttrainer/block4-img1-320.jpg" alt="">
            </div>
            <div class="section">
                <div class="text left">
                    <h2>ЗДОРОВЬЕ</h2>
                    <ul>
                        <li>Незаменим после родов.
                            Ваша фигура не просто вернется в форму, а станет идеальной
                        </li>
                        <li>Создает "королевскую" осанку.
                            Постоянно держит Вашу спину ровной, делая Вас еще изящнее
                        </li>
                    </ul>
                </div>
                <img class="right for990" src="{{ asset('/') }}flexonikFiles/waisttrainer/block4-img2.jpg" alt="">
                <img class="right for640" src="{{ asset('/') }}flexonikFiles/waisttrainer/block4-img2.jpg" alt="">
                <img class="right for320" src="{{ asset('/') }}flexonikFiles/waisttrainer/block4-img2-320.jpg" alt="">
            </div>
            <div class="section">
                <div class="text right">
                    <h2>ЗАЧЕМ НОСИТЬ КОРСЕТ НА ТРЕНИРОВКАХ?</h2>
                    <img class="left inside" src="{{ asset('/') }}flexonikFiles/waisttrainer/block4-img4.jpg" alt="">
                    <ul>
                        <li>Держит Вашу спину ровной, исключая травму спины при упражнениях</li>
                        <li>Максимальный эффект от упражнений, корсет позволит тщательнее проработать проблемные зоны</li>
                        <li>Подавление аппетита, корсет поможет максимально сосредоточиться на тренировке</li>
                    </ul>
                </div>
                <img class="right outside" src="{{ asset('/') }}flexonikFiles/waisttrainer/block4-img4.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<div id="block5">
    <div class="center-wrapper">
        <div class="content clearfix">
            <div class="column left">
                <h2>WAIST TRAINER</h2>
                {{--<div class="clearfix">--}}
                    {{--<div class="timer">--}}
                        {{--<div class="block">--}}
                            {{--<div class="rect hours">09</div>--}}
                            {{--<div class="label">Часы</div>--}}
                        {{--</div>--}}
                        {{--<div class="points">:</div>--}}
                        {{--<div class="block">--}}
                            {{--<div class="rect mins">27</div>--}}
                            {{--<div class="label">Минуты</div>--}}
                        {{--</div>--}}
                        {{--<div class="points">:</div>--}}
                        {{--<div class="block">--}}
                            {{--<div class="rect secs">59</div>--}}
                            {{--<div class="label">Секунды</div>--}}
                        {{--</div>--}}
                        {{--<div class="clear"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="prices">
                     <span class="old">
                        <span class="js_old_price price_land_s4">
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <span class="js_curs price_land_curr">RSD</span>
                     </span>
                    <span class="new">
                        <span class="js_new_price price_land_s1">
                           {{ $prices[1]['amount'] }}
                        </span>
                        <span class="js_curs price_land_curr">RSD</span>
                     </span>
                </div>
                {{--<p class="rest">Спешите! Осталось 5 штук!</p>--}}
            </div>
            <div class="column right">
                <form method="post" class="right" action="#">
                    <input value="" class="inp" placeholder="ФИО" name="name" type="text">
                    <input value="" class="inp only_number" placeholder="Телефон" name="phone" type="text">
                    <input class="inp js_submit" value="Заказать" type="submit">
                </form>
            </div>
            <div class="product">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainer/product-with-shadow.png" alt="Товар">
            </div>
        </div>
    </div>
</div>
<div id="block6">
    <div class="center-wrapper">
        <div class="content">
            <h2 id="reviews">Отзывы</h2>
            <div class="review">
                <figure>
                    <figcaption class="person for640"></figcaption>
                    <img src="{{ asset('/') }}flexonikFiles/waisttrainer/block6-img1.jpg" alt="">
                    <figcaption class="person for990"></figcaption>
                </figure>
                <p class="weight">Алина/21 год</p>
                <p class="labels">
                </p>
                <p class="text">"Ко мне пришел мой долгожданный корсетик) Ну все, начался путь к талии моей мечты! Спасибо за
                    оперативную доставку!" *
                </p>
            </div>
            <div class="review">
                <figure>
                    <figcaption class="person for640"></figcaption>
                    <img src="{{ asset('/') }}flexonikFiles/waisttrainer/block6-img2.jpg" alt="">
                    <figcaption class="person for990"></figcaption>
                </figure>
                <p class="weight">Ирина/29 лет</p>
                <p class="labels">
                </p>
                <p class="text">"Двое детей, талия сейчас меньше чем до беременностей! 58см - спасибо корсету! Рекоменую."</p>
            </div>
        </div>
    </div>
</div>
<div id="block7">
    <div class="center-wrapper">
        <div class="content clearfix">
            <div class="column left">
                <h2>WAIST TRAINER</h2>
                {{--<div class="clearfix">--}}
                    {{--<div class="timer">--}}
                        {{--<div class="block">--}}
                            {{--<div class="rect hours">09</div>--}}
                            {{--<div class="label">Часы</div>--}}
                        {{--</div>--}}
                        {{--<div class="points">:</div>--}}
                        {{--<div class="block">--}}
                            {{--<div class="rect mins">27</div>--}}
                            {{--<div class="label">Минуты</div>--}}
                        {{--</div>--}}
                        {{--<div class="points">:</div>--}}
                        {{--<div class="block">--}}
                            {{--<div class="rect secs">59</div>--}}
                            {{--<div class="label">Секунды</div>--}}
                        {{--</div>--}}
                        {{--<div class="clear"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="prices">
                     <span class="new">
                        <span class="js_new_price price_land_s1">
                           {{ $prices[1]['amount'] }}
                        </span>
                        <span class="js_curs price_land_curr">RSD</span>
                     </span>
                    <span class="old">
                        <span class="js_old_price price_land_s4">
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <span class="js_curs price_land_curr">RSD</span>
                     </span>
                </div>
                {{--<p class="rest">Спешите! Осталось 5 штук!</p>--}}
            </div>
            <div class="column right">
                <form method="post" class="right" action="#">
                    <input value="" class="inp" placeholder="ФИО" name="name" type="text">
                    <input value="" class="inp only_number" placeholder="Телефон" name="phone" type="text">
                    <input class="inp js_submit" value="Заказать" type="submit">
                </form>
            </div>
            <div class="product">
                <img class="for2890" src="{{ asset('/') }}flexonikFiles/waisttrainer/product-with-shadow.png" alt="Товар">
                <img class="for640" src="{{ asset('/') }}flexonikFiles/waisttrainer/product-with-shadow.png" alt="Товар">
                <img class="for320" src="{{ asset('/') }}flexonikFiles/waisttrainer/product.png" alt="Товар">
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('a[href].menu').click(function (e) {
            e.preventDefault();
            $("html, body").animate({scrollTop: $($(this).attr('href')).offset().top - 80}, 1000);
            return false;
        });
    });
</script>
</body>
</html>