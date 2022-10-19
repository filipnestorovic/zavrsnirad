<!DOCTYPE html>
<html lang="ru-RU">
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/png" href="{{ asset('/') }}dailysharkFiles/winclean/favicon.ico">
{{--    <link rel="stylesheet" href="assets_pages/land/fonts/Intro/Intro.css">--}}
{{--    <link rel="stylesheet" href="assets_pages/land/fonts/GothamPro/GothamPro.css">--}}
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/winclean/styles.css">
</head>
<body>
<header class="offer_section">
    <div class="wrapper">
        <div class="container clearfix">
            <div class="title">
                <h1 class="main_title">WinClean</h1>
                <h2 class="main_subtitle">ЧИСТЫЕ ОКНА СРАЗУ С ОБЕИХ СТОРОН!</h2>
            </div>
            <ul class="top_bull">
                <li>Уменьшение расхода моющего средства</li>
                <li>Экономия на клининговых услугах</li>
            </ul>
        </div>
        <div class="sale">скидка <span>-50%</span></div>
        <ul class="ofr_bull">
            <li>Моет окна в 2 раза быстрее</li>
            <li>Не оставляет следов и&nbsp;разводов</li>
            <li>Экономит силы и моющие средства</li>
        </ul>
        <div class="price clearfix">
            <div class="old">
                Старая цена:
                <p>
                     <span>
                        {{ $prices[1]['originalPrice'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </p>
            </div>
            <div class="new">
                Цена сегодня:
                <p>
                     <span>
                        {{ $prices[1]['amount'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </p>
            </div>
        </div>
        <div class="action_block clearfix">
            <div class="left">
                <div class="prod_count">* Успейте заказать по акции! <span>Осталось 16 щеток</span></div>
            </div>
            <a href="#order_form" class="button-m">Заказать со скидкой</a>
        </div>
    </div>
</header>
<section class="sect2">
    <div class="wrapper">
        <h2 class="title">Почему магнитная щетка Winclean <span>так популярна среди домохозяек</span></h2>
        <ul class="benef1">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/winclean/s2_img1.png" alt="">
                <span>Качественное мытье окон</span>
                <p>Одновременно моет, вытирает и полирует стеклянную поверхность окна. Все сделает одна щетка!</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/winclean/s2_img2.png" alt="">
                <span>Безопасность мойки на верхних этажах</span>
                <p> Вы моете окно изнутри, а снаружи — щетка.</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/winclean/s2_img3.png" alt="">
                <span>Экономия на клининговых услугах</span>
                <p>Вы теперь сами сможете помыть любые окна, даже на последнем этаже многоэтажного дома.</p>
            </li>
        </ul>
    </div>
</section>
<section class="sect4">
    <div class="wrapper">
        <div class="gif_block">
            <h3>
                <small>Посмотрите</small>
                <span>как легко и просто</span>
                мыть стекла магнитной щёткой
            </h3>
            <img src="{{ asset('/') }}dailysharkFiles/winclean/gif.gif" alt="">
            <ul>
                <li>Магнитные пластины фиксируют щетки с двух сторон окна</li>
                <li>Удобная ручка из качественного пластика</li>
                <li>Шнур и кольцо на руку для контроля за щеткой</li>
                <li>Специальные полимерные вставки вытирают и полируют стекло</li>
            </ul>
            <a href="#order_form" class="button-m">Заказать сейчас</a>
        </div>
        <h2 class="title"><span>Как устроена</span> магнитная щетка для мытья окон</h2>
        <div class="product_list">
            <div class="plus clearfix">
                <div class="strength">25 <small>кг</small></div>
                <p>Сила сцепления магнита</p>
            </div>
            <img src="{{ asset('/') }}dailysharkFiles/winclean/product.jpg" alt="">
            <img src="{{ asset('/') }}dailysharkFiles/winclean/product2.jpg" alt="" class="tab_v">
            <ul>
                <li>
                    <span>01</span>
                    <p>Удобная ручка из качественного пластика</p>
                </li>
                <li>
                    <span>02</span>
                    <p>Магнитные пластины внутри фиксируют щетки с двух сторон окна</p>
                </li>
                <li>
                    <span>03</span>
                    <p>Мягкие тканевые поверхности равномерно распределяют пену по окну</p>
                </li>
                <li>
                    <span>04</span>
                    <p>Шнур на руку для контроля за щеткой</p>
                </li>
                <li>
                    <span>05</span>
                    <p>Специальные полимерные вставки вытирают и полируют стекло</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="sect5">
    <div class="wrapper">
        <h2 class="title"><span>Чистые окна</span> всего за 4 шага</h2>
        <p class="subtitle">Быстрое, но в то же время и качественное мытьё окон теперь реальность!</p>
        <ul class="benef3 clearfix">
            <li>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/winclean/s5_img1.jpg" alt=""></div>
                <span>01</span>
                <div class="text">
                    <span>Шаг №1</span>
                    <p>Нанесите на окно чистую воду или специальный раствор, используя распылитель.</p>
                </div>
            </li>
            <li>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/winclean/s5_img2.jpg" alt=""></div>
                <span>02</span>
                <div class="text">
                    <span>Шаг №2</span>
                    <p>Смочите щетки в моющем средстве и установите их на обе стороны стекла (предварительно зафиксировав шнур на руке)</p>
                </div>
            </li>
            <li>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/winclean/s5_img3.jpg" alt=""></div>
                <span>03</span>
                <div class="text">
                    <span>Шаг №3</span>
                    <p>Аккуратно и плавно распределите средство по всей поверхности окон с помощью магнитной щетки.</p>
                </div>
            </li>
            <li>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/winclean/s5_img4.jpg" alt=""></div>
                <span>04</span>
                <div class="text">
                    <span>Шаг №4</span>
                    <p>После того как вы помоете <br>окна, снимите щетку со стекла, промойте губки щетки простой водой</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="sect7 color_theme">
    <div class="wrapper">
        <h2 class="title"><span>Довольные покупатели,</span> которые оценили WinClean</h2>
        <div class="reviews">
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/winclean/rev1.jpg" alt="">
                <div class="text">
                    <div class="name clearfix">
                        <img src="{{ asset('/') }}dailysharkFiles/winclean/ava1.jpg" alt="">
                        <p><span>Валерий Куликов</span> 34 года</p>
                    </div>
                    <span>“Практичный инструмент для уборки!”</span>
                    <p>Вчера забрал свою магнитную щетку с почты и уже успел опробовать её в полной мере. Сегодня делали с женой генеральную уборку. Я мыл окна и скажу вам, что щетка действительно стоит своих денег. На все окна в нашей трешке у меня ушло минут 20, не больше. Окна кристально чистые, как с внешней стороны, так и с внутренней. Однозначно рекомендую, такой инструмент в быту всем пригодится.</p>
                </div>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/winclean/rev2.jpg" alt="">
                <div class="text">
                    <div class="name clearfix">
                        <img src="{{ asset('/') }}dailysharkFiles/winclean/ava2.jpg" alt="">
                        <p><span>Оксана Федорова</span> 29 лет</p>
                    </div>
                    <span>“Больше не боюсь самостоятельно мыть окна)”</span>
                    <p>Я страшно боюсь высоты и поэтому никогда не мою окна, всегда прошу мужа. Увидела магнитную щетку на вашем сайте и решила заказать. Доставили, кстати, всего за 4 дня. Уже попробовала попользоваться. Отличное решение для людей, которые боятся вылезать за пределы окна, чтобы помыть внешнюю сторону. Теперь я спокойно могу делать всю уборку самостоятельно) Муж покупку тоже одобрил)</p>
                </div>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/winclean/rev3.jpg" alt="">
                <div class="text">
                    <div class="name clearfix">
                        <img src="{{ asset('/') }}dailysharkFiles/winclean/ava3.jpg" alt="">
                        <p><span>Екатерина Золотова</span> 40 лет</p>
                    </div>
                    <span>“Проблема с грязными окнами решена!”</span>
                    <p>У меня в доме очень высокие окна, которые просто невозможно вымыть с обеих сторон самостоятельно. Увидев такую магнитную щетку, очень обрадовалась. Ведь ей можно находясь внутри помыть и наружную сторону. У нас сейчас весь дом скидывается на промышленных альпинистов, чтобы нам помыли окна. Очень рада, что у меня получилось на них сэкономить)</p>
                </div>
            </div>
        </div>
        <a href="#order_form" class="button-m">Заказать со скидкой</a>
    </div>
</section>
<section class="sect8">
    <div class="wrapper">
        <h2 class="title"><span>Как заказать</span> winclean</h2>
        <ul class="order_list">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/winclean/order1.png" alt="">
                <span>1</span>
                <p><b>Заявка</b> Оставляете заявку на&nbsp;сайте</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/winclean/order2.png" alt="">
                <span>2</span>
                <p><b>Звонок</b> Наш менеджер уточняет детали заказа</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/winclean/order3.png" alt="">
                <span>3</span>
                <p><b>Отправка</b> Доставляем ваш товар в течение 3-10 дней</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/winclean/order4.png" alt="">
                <span>4</span>
                <p><b>Получение</b> Оплачиваете при получении на почте</p>
            </li>
        </ul>
    </div>
</section>
<section class="offer_section bottom">
    <div class="wrapper">
        <div class="container clearfix">
            <div class="title">
                <h3 class="main_subtitle"><span>Чистые окна</span> СРАЗУ С ОБЕИХ СТОРОН! </h3>
            </div>
            <ul class="top_bull">
                <li>Уменьшение расхода моющего средства</b></li>
                <li>Экономия на клининговых услугах</b></li>
            </ul>
        </div>
        <div class="sale">скидка <span>-50%</span></div>
        <div class="price clearfix">
            <div class="old">
                Старая цена:
                <p>
                     <span>
                        {{ $prices[1]['originalPrice'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </p>
            </div>
            <div class="new">
                Цена сегодня:
                <p>
                     <span>
                        {{ $prices[1]['amount'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </p>
            </div>
        </div>
        <div class="formbox" id="order_form">
            <h4>Оставьте заявку сейчас</h4>
            <p>и успейте сэкономить! <span></span></p>
            <form class="main-order-form m1-form" action="#" method="post" >
                <input type="text" name="name" placeholder="Введите ваше имя" required="" autocomplete="off">
                <input type="tel" name="phone" placeholder="Введите ваш телефон" required="" autocomplete="off">
                <button class="button-m" type="submit">Заказать со скидкой</button>
            </form>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        /* scroll */
        $("a[href^='#']").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
            return false;
        });
    });
</script>
<style>
    input {
        height: 50px !important;
    }
</style>
</body>
</html>
