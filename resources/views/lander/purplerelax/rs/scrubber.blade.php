<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/png" href="">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}purplerelaxFiles/scrubber/styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}purplerelaxFiles/scrubber/owl.carousel.min.css">
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
    <style type="text/css"> .wrp {width: 1000px;margin: 0 auto;}.header {text-align: center;border: 1px dashed #ddd;padding: 50px 0;margin: 20px 0;font-size: 18px;}.block {text-align: center;border: 1px dashed #ddd;padding: 100px 0;margin-bottom: 20px;font-size: 18px;background: #eeeeee;}.header-menu-wrp {height:40px;line-height:40px;width:100%;background: #9F2C99;color: white;}.header-menu-wrp.cloned {position: fixed;top: 0;margin-top: 0;z-index: 9999;display: none;}.header-menu {width: 100%;display: table;border-left: 1px solid #fff;}.header-menu ul {display: table-row;}.header-menu li {display: table-cell;float: none;border-right: 1px solid #fff;}.header-menu li.active {background: #761871;}.header-menu li a {display: block;color: #fff;text-align: center;text-decoration: none;}</style>
    <script>$(document).ready(function(){$('.header-menu-wrp').addClass('original').clone().insertAfter('.header-menu-wrp').addClass('cloned').removeClass('original');function resizeMenu(){var $original=$('.header-menu-wrp.original');var $cloned=$('.header-menu-wrp.cloned');if($(window).scrollTop()>=($original.offset().top)){$cloned.css({'top':0,'width':$original.css('width'),'display':'block','left':$original.offset().left+'px'});$original.css('visibility','hidden')}else{$cloned.css('display','none');$original.css('visibility','visible')}}
            $(window).scroll(function(){resizeMenu()});$(window).resize(function(){resizeMenu()});var last_id;var $top_menu=$('.header-menu-wrp.cloned');var menu_height=$top_menu.outerHeight(!0);var $menu_items=$top_menu.find('a');var $scroll_items=$menu_items.map(function(){var item=$($(this).attr('href'));if(item.length){return item}});$menu_items.click(function(e){var href=$(this).attr('href'),offset_top=href==='#'?0:$(href).offset().top-menu_height;$('html, body').stop().animate({scrollTop:offset_top},300);e.preventDefault()});$(window).scroll(function(){var from_top=$(this).scrollTop()+menu_height;var mar=parseInt($top_menu.css('margin-bottom'));var cur=$scroll_items.map(function(){if($(this).offset().top<from_top+mar){return this}});cur=cur[cur.length-1];var id=cur&&cur.length?cur[0].id:'';if(last_id!==id){last_id=id;$menu_items.parent().removeClass('active').end().filter("[href='#"+id+"']").parent().addClass('active')}})})
    </script>
    <style>@media (min-width:640px) and (max-width:659px){.order_section .discount{display:none}.offer_section .triggers_block{display:none}.use_steps_section ul{width:300px}.order_section .main_title{font-size:16px;line-height:32px}.offer_section .main_title{font-size:16px;line-height:32px}.order_section .subtitle{font-size:20px;line-height:23px}}.form-control{display:block;margin:16px auto 15px;padding:0 20px;width:100%;height:50px;border:none;border-radius:4px;background:#f3f4f6;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.2);box-shadow:inset 0 1px 2px rgba(0,0,0,.2);font-family:'AvenirNextCyr',sans-serif;font-weight:400;font-size:16px;color:#333;text-align:center}</style>
</head>
<body>
<div class="menu-hid">
    <div class="header-menu-wrp">
        <div class="wrp">
            <div class="header-menu">
                <ul>
                    <li><a href="#video_section">Видео обзор</a></li>
                    <li><a href="#instr">Преимущества</a></li>
                    <li><a href="#pochemu">Особенности</a></li>
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
                <h3 class="main_title">Ультразвуковой<br>  скрабер для лица</h3>
                <p class="subtitle">Качественное устройство для профессионального ухода за кожей дома</p>
            </div>
            <div class="discount"></div>
            <ul>
                <li>Удаляет мертвые клетки</li>
                <li>Сглаживание тонкие линии и морщин </li>
                <li>Восстанавливает упругость и эластичность кожи</li>
                <li>Устраняет черные точки</li>
            </ul>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">Stara cena:</div>
                    <div class="value">
                        {{ $prices[1]['originalPrice'] }}
                        RSD
                    </div>
                </div>
                <div class="price_item new">
                    <div class="text">Nova cena:</div>
                    <div class="value">
                        {{ $prices[1]['amount'] }}
                        RSD
                    </div>
                </div>
            </div>
            <a href="#order_form" class="button">Poručite sada</a>
            {{--<div class="deadline_text">Количество товара ограничено</div>--}}
        </div>
    </div>
</header>
<!-- /offer -->
<!-- results -->
<section class="results_section" >
    <div class="wrapper">
        <h2 style="color:#9F2C99">Ультразвуковой скрабер расширит ваши возможности домашнего ухода</h2>
        <div class="box-osob" id="os">
            <div class="img-toptop">
                <!--left-img-->
                <img src="{{ asset('/') }}purplerelaxFiles/scrubber/ver1.jpg">
            </div>
            <div class="img-toptop">
                <div class="main-text" style="margin: 10px 20px 20px 20px;">
                    <h3 class="box__body-title"> </h3>
                    <div class="box__body-text" style="font-size: 18px; margin-top: 45px;">Ультразвуковой скабер представляет собой портативное устройство, которое предназначено для очищения и омоложения кожи. За счет компактных размеров эту модель скрабера чаще выбирают для дома или берут с собой в поездки. Поскольку устройство позволяет выполнять процедуры в любом удобном для вас месте, не занимая много места в чемодане.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="use_section" id="use_section">
    <div class="wrapper">
        <h2 style="color: #9F2C99;"> 3 режима работы</h2>
        <div class="use_list">
            <div class="use_item">
                <img src="{{ asset('/') }}purplerelaxFiles/scrubber/5.png" alt="Kelvin Safety Tool">
                <h4>Пилинг</h4>
                <p>С помощью аппарата осуществляется  ультразвуковая чистка лица (пилинг), удаляются «черные точки», выравнивается цвет кожи, стимуляция и регенерация, повышение эластичности кожи.   </p>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}purplerelaxFiles/scrubber/6.png" alt="Kelvin Safety Tool">
                <h4>Микромассаж</h4>
                <p>Ультразвуковой микромассаж с помощью аппарата стимулирует процессы восстановления тканей, ускоряет обменные процессы в клетках кожи, стимулирует процессы синтеза коллагена и эластина.</p>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}purplerelaxFiles/scrubber/7.png" alt="Kelvin Safety Tool">
                <h4>Фонофорез</h4>
                <p>Ультразвуковой микромассаж с помощью аппарата в сочетании с активными концентратами обеспечивает эффект лифтинга, уменьшает отечность. </p>
            </div>
            <a href="#order_form" class="button">Poručite sada</a>
        </div>
</section>
{{--<section class="video_section" id="video_section">--}}
    {{--<div class="wrapper">--}}
        {{--<h2 style="color:#9F2C99">Как правильно пользоваться<br> ультразвуковым скрабером</h2>--}}
        {{--<div class="video_wrapper">--}}
            {{--<div class="video_block">--}}
                {{--<video width="100%" height="100%" controls="controls" controls poster="{{ asset('/') }}purplerelaxFiles/scrubber/poster.jpg" >--}}
                    {{--<source src="" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>--}}
                {{--</video>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<section style="padding: 20px" id="instr">
    <h2 style="color: #9F2C99">Преимущества</h2>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#9F2C99">Бережное воздействие</h3>
                <div class="box__body-text"  style="font-size: 19px">Мягкое вибрационное воздействие ультразвуковых волн проникает внутрь кожи, разрушая соединительные частицы между ороговевшими клетками. Таким образом удаляется мертвый слой клеток кожи и очищаются забитые поры.
                </div>
            </div>
        </div>
        <div class="img-toptop flex-left">
            <img src="{{ asset('/') }}purplerelaxFiles/scrubber/box-5-ver1.jpg" style="
                  height: 100%;
                  width: 100%;
                  ">
        </div>
    </div>
    <div class="box-osob" id="os">
        <div class="img-toptop">
            <!--left-img-->
            <img src="{{ asset('/') }}purplerelaxFiles/scrubber/box-5_ver2.jpg" style="
                  height: 100%;
                  width: 100%;
                  ">
        </div>
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#9F2C99">Всегда под рукой</h3>
                <div class="box__body-text" style="font-size: 18px">Благодаря компактным размерам, вы сможете взять с собой ультразвуковой скрабер в отпуск или командировку, чтобы в любых ситуациях быть на высоте!
                </div>
            </div>
        </div>
    </div>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#9F2C99">Ультразвуковая очистка кожи </h3>
                <div class="box__body-text"  style="font-size: 19px">Благодаря сочетанию активного воздействия очищающего средства и ультразвуковых колебаний отшелушивается верхний ороговевший слой кожи, осветляются пигментные пятна, выравнивается цвет лица. Очищенная кожа имеет лучший доступ кислорода, более глубоко воспринимает питательные, увлажняющие и омолаживающие средства.
                </div>
            </div>
        </div>
        <div class="img-toptop flex-left">
            <img src="{{ asset('/') }}purplerelaxFiles/scrubber/box-5-ver3.jpg" style="
                  height: 100%;
                  width: 100%;
                  ">
        </div>
    </div>
    <div class="box-osob" id="os">
        <div class="img-toptop">
            <!--left-img-->
            <img src="{{ asset('/') }}purplerelaxFiles/scrubber/box-5-ver4.jpg" style="
                  height: 100%;
                  width: 100%;
                  ">
        </div>
        <div class="img-toptop">
            <div class="main-text" >
                <h3 class="box__body-title" style="color:#9F2C99">Микромассаж на клеточном уровне </h3>
                <div class="box__body-text" style="font-size: 18px">Глубоко и мягко воздействуя на кожу и подкожные ткани, ультразвук усиливает обменные процессы, стимулирует регенерацию кожи и запускает процессы естественного омоложения. Работа на клеточном уровне очень деликатна и не травмирует кожу, что очень важно, когда кожа уже имеет признаки увядания.</div>
            </div>
        </div>
    </div>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#9F2C99">Поможет очистить кожу</h3>
                <div class="box__body-text"  style="font-size: 19px">Усиливает проникновение активных косметических средств в глубокие слои кожи, что существенно повышает эффективность от использования привычной косметики. Способствует уменьшению отеков и выравниванию цвета лица, повышает тургор кожи и ее плотность.  Сочетание процедур ультразвукового пилинга и массажа безусловно является отличным вариантом комплексного ухода за кожей лица.
                </div>
            </div>
        </div>
        <div class="img-toptop flex-left">
            <img src="{{ asset('/') }}purplerelaxFiles/scrubber/box-5-ver5.jpg" style="height: 100%; width: 100%;">
        </div>
    </div>
</section>
<!-- use -->
<section class="benefits_section" id="pochemu">
    <div class="wrapper">
        <h2 style="color: #9F2C99;">Особенности ультразвукового скрабера</h2>
        <div class="benefits_list">
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/scrubber/1.jpg" class="block-img" alt="">
                </div>
                <div  class="top-info">
                    <p class="right-2">Устраняет<br> комедоны</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/scrubber/2.jpg" class="block-img" alt="">
                </div>
                <div  class="top-info">
                    <p class="right-2">Уменьшает<br> прыщи</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/scrubber/3.jpg" class="block-img" alt="">
                </div>
                <div  class="top-info">
                    <p class="right-2">Осветляет<br> пигментные пятна</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/scrubber/4.jpg" class="block-img" alt="">
                </div>
                <div  class="top-info">
                    <p class="right-2">Улучшает цвет<br> и текстуру лица</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <a href="#order_form" class="button">Poručite sada</a>
</section>
<section class="reviews_section" id="otzv">
    <div class="wrapper">
        <h2 style="color:#9F2C99">Отзывы покупателей</h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/scrubber/reviews__review1_photo.jpg" alt="спиннер">
                <div class="author_name">Екатерина, 26 лет</div>
                <p>В течение месяца пользовалась этим приборчиком и могу сказать, что он действительно здорово работает, улучшает цвет и состояние кожи, при это пользоваться им удобно и просто. Скрабер компактный, рабочий "язычок" спрятан за защитным колпачком.
                </p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/scrubber/reviews__review2_photo.jpg" alt="спиннер">
                <div class="author_name">Инесса, 34 года</div>
                <p>Ранее я не встречала ничего подобного, но вот когда увидела рекламу в инстаграм, то решила определённо заполучить его себе. Первый результат я начала замечать уже через неделю, во-первых, кожа выглядит здоровой и чистой. Во-вторых, красивой и ухоженной как после салона. В целом результат определённо стоит своих денег!
                </p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/scrubber/reviews__review3_photo.jpg" alt="спиннер">
                <div class="author_name">Наталия, 24 года</div>
                <p>Не имею возможности регулярно посещать косметолога. Этот скрабер для меня находка, и избавляет меня от проблем с кожей лица.  При использовании не имею дискомфорта, ультразвуковой скрабер проходит по коже мягко, не оставляя после ни каких следов и прочее механических повреждений. Советую всем!</p>
            </div>
        </div>
    </div>
</section>
<!-- /reviews -->
<!-- order steps -->
<section class="order_steps_section">
    <div class="wrapper">
        <h2 style="color:#9F2C99">Как сделать заказ?</h2>
        <div class="steps_list">
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/scrubber/order_steps__step1_image.jpg" alt="Гамак для отдыха">
                    <div class="number">1</div>
                </div>
                <p>Вы оставляете заявку на&nbsp;нашем сайте</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/scrubber/order_steps__step2_image.jpg" alt="Гамак для отдыха">
                    <div class="number">2</div>
                </div>
                <p>Оператор свяжется с Вами для уточнения заказа</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/scrubber/order_steps__step3_image.jpg" alt="Гамак для отдыха">
                    <div class="number">3</div>
                </div>
                <p>Быстрая доставка в течение 2-5 дней</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/scrubber/order_steps__step4_image.jpg" alt="Гамак для отдыха">
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
                <h3 class="main_title">Ультразвуковой<br>  скрабер для лица</h3>
                <p class="subtitle">Качественное устройство для профессионального ухода за кожей дома</p>
            </div>
            <div class="discount"> </div>
            <div class="form_block">
                {{--<div class="timer_block clearfix">--}}
                    {{--<p>Конец акции через:</p>--}}
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
                <div class="price_block clearfix">
                    <div class="price_item old">
                        <div class="text">Stara cena:</div>
                        <div class="value">
                            {{ $prices[1]['originalPrice'] }}
                            RSD
                        </div>
                    </div>
                    <div class="price_item new">
                        <div class="text">Nova cena:</div>
                        <div class="value">
                            {{ $prices[1]['amount'] }}
                            RSD
                        </div>
                    </div>
                </div>
                <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input class="field" type="text" name="name" placeholder="Ime i prezime" required>
                    <input class="field" type="tel" name="phone" placeholder="Telefon" required>
                    <input class="field" type="text" name="shipping_address" placeholder="Adresa" required>
                    <input class="field" type="text" name="shipping_city" placeholder="Grad" required>
                    <button class="button" type="submit">Poručite sada</button>
                </form>
                {{--<div class="deadline_text">Количество товара ограничено</div>--}}
            </div>
        </div>
    </div>
</section>
<center></center>
<script src="{{ asset('/') }}purplerelaxFiles/scrubber/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {

        $("a[href^='#']").click(function(){
            var target = $(this).attr("href");
            $("html, body").animate({scrollTop: $(target).offset().top+"px"});
            return false;
        });

        $(".reviews_list").owlCarousel({
            smartSpeed: 300,
            mouseDrag: false,
            pullDrag: false,
            dots: false,
            navText: "",
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                    nav: true,
                    loop: true
                },
                640: {
                    items: 2,
                    margin: 20,
                    nav: true,
                    loop: true
                },
                960: {
                    items: 3,
                    margin: 20,
                    nav: false,
                    loop: false
                }
            }
        });

    });
</script>
</body>
</html>