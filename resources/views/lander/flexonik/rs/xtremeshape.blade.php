<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/xtremeshape/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/xtremeshape/style.css">
    <style>
        @font-face {
            font-family: "TTDrugs";
            src: url("{{ asset('/') }}fonts/TTDrugs-Regular.woff2") format("woff2"), url("{{ asset('/') }}fonts/TTDrugs-Regular.woff") format("woff"), url("{{ asset('/') }}fonts/TTDrugs-Regular.ttf") format("truetype");
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0491;
        }
        @font-face {
            font-family: "TTDrugs";
            src: url("{{ asset('/') }}fonts/TTDrugs-Bold.woff2") format("woff2"), url("{{ asset('/') }}fonts/TTDrugs-Bold.woff") format("woff"), url("{{ asset('/') }}fonts/TTDrugs-Bold.ttf") format("truetype");
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0491;
        }
        @font-face {
            font-family: "TTDrugs";
            src: url("{{ asset('/') }}fonts/TTDrugs-Black.woff2") format("woff2"), url("{{ asset('/') }}fonts/TTDrugs-Black.woff") format("woff"), url("{{ asset('/') }}fonts/TTDrugs-Black.ttf") format("truetype");
            font-weight: 900;
            font-style: normal;
            font-stretch: normal;
            unicode-range: U+0020-0491;
        }
    </style>
</head>
<body>
<section class="fix_menu">
    <div class="wrapper">
        <div class="container">
            <img class="logo" src="{{ asset('/') }}flexonikFiles/xtremeshape/logo.png" alt="">
            <ul class="benef1">
                <li><b>До <span>-7 см</span> в талии</b> за 1 месяц<br> без вреда для здоровья</li>
                <li><b>Более <span>50 тысяч</span> довольных</b><br> фигурой после пояса</li>
                <li><b>Доставка <span>от 3 рабочих</span> <br>дней</b> в любой регион</li>
            </ul>
            <a href="#order_form" class="button1">Быстрый заказ</a>
        </div>
    </div>
</section>
<section class="offer">
    <div class="wrapper">
        <div class="content">
            <p class="main_title">Xtreme Power Belt <span></span></p>
            <h2 class="main_subtitle"><span>Мгновенное корректирование</span> фигуры за пару движений</h2>
            <div class="main_product">
                <div class="product_name"><b>Пояс для похудения</b> и тонкой талии</div>
                <img class="prod" src="{{ asset('/') }}flexonikFiles/xtremeshape/product.png" alt="">
                <img class="bef_after" src="{{ asset('/') }}flexonikFiles/xtremeshape/bef_after.png" alt="">
            </div>
            <div class="action_box">
                <p>Специальная цена <span>только 1 день</span></p>
                <div class="price">
                    <div class="old"><span>{{ $prices[1]['originalPrice'] }}</span><small>RSD</small></div>
                    <div class="new"><span>{{ $prices[1]['amount'] }}</span><small>RSD</small></div>
                </div>
                <a href="#order_form" class="button">Заказать со скидкой</a>
                {{--<div class="timer">--}}
                    {{--Повышение цены через: <span class="hours"></span> : <span class="minutes"></span> : <span class="seconds"></span>--}}
                {{--</div>--}}
            </div>
        </div>
        <a href="#video" class="video_btn">Смотреть<br> отзыв</a>
        <img class="figure" src="{{ asset('/') }}flexonikFiles/xtremeshape/figure_product.png" alt="">
        <a href="#id2" class="sect_btn"></a>
    </div>
</section>
<section class="sect2" id="id2">
    <div class="wrapper">
        <ul class="benef2">
            <li>
                <div class="top">Эффект тонкой осиной талии</div>
                <div class="bottom">Пояс подарит талию мечты <br>всего за пару движений без боли и дискомфорта</div>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/benef2_img1.png" alt="">
            </li>
            <li>
                <div class="top">Безопасное похудение в области живота</div>
                <div class="bottom">При регулярном <br>использовании убирает <br>лишний жир с живота и боков</div>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/benef2_img2.png" alt="">
            </li>
            <li>
                <div class="top">Послеродовое восстановление</div>
                <div class="bottom">Идеален для <br>восстановления <br>фигуры после родов</div>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/benef2_img3.png" alt="">
            </li>
        </ul>
    </div>
    <div class="bg_text">Xtreme Power Belt</div>
</section>
<section class="sect3">
    <div class="wrapper">
        <h2 class="title"><b>Посмотрите, как просто достичь <br> эффекта осиной талии</b> за пару движений</h2>
        <div class="column">
            <div class="left">
                <video loop preload autoplay controls=""><source src="{{ asset('/') }}flexonikFiles/xtremeshape/gif_video.mp4" type="video/mp4">
                </video>
            </div>
            <div class="right">
                <div class="text">
                    <p><span>С поясом вам не нужно постоянно втягивать живот или носить мешковатую одежду. Вы мгновенно обретете сексуальные изгибы, о которых только мечтали. А приятным бонусом станет не только подтянутая талия, но и грациозная осанка с приподнятой грудью!</span></p>
                    <p>При этом поддержка поясом спины <b>снизит нагрузку на позвоночник и избавит от боли в спинном и поясничном отделах.</b> Это особенно актуально после рождения ребенка, которого вы постоянно носите на руках.</p>
                    <p>А еще в нем просто невозможно переедать! Утянутая талия контролирует количество поступающей еды, благодаря чему <b>вы не сможете съесть больше положенного, а значит не наберете лишних килограммов.</b></p>
                </div>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/s3_img.jpg" alt="">
                <a href="#order_form" class="button">Хочу тонкую талию</a>
            </div>
        </div>
    </div>
</section>
<section class="sect4">
    <div class="wrapper">
        <img src="{{ asset('/') }}flexonikFiles/xtremeshape/s4_woman.png" alt="">
        <div class="content">
            <div class="text">
                <h4><b>«Подарите себе эффектную тонкую талию,</b> и ваша фигура не останется незамеченной!»</h4>
                <p>Когда я впервые надела пояс Xtreme Power Belt я и не думала, что получу СТОЛЬКО комплиментов в адрес моей фигуры. Я очень люблю на разных мероприятиях производить яркое впечатление, и такого ПОТРЯСАЮЩЕГО эффекта, как с поясом, ни от одного утягивающего платья не получить!</p>
                <div class="author">
                    <p>Анна Седокова</p>
                    <small>Певица, дизайнер одежды, актриса, теле- и радиоведущая</small>
                </div>
                <a href="#order_form" class="button width">Заказать пояс со&nbsp;скидкой</a>
            </div>
        </div>
    </div>
    <div class="bg_text">Xtreme Power Belt</div>
</section>
<section class="sect5">
    <div class="wrapper">
        <h2 class="title"><b>Как пояс эффективно сжигает лишние см <br>в талии и на боках? </b></h2>
        <div class="column">
            <div class="left">
                <p>Пояс выполнен по <span>специальной двойной технологии воздействия,</span> секрет которой в сочетании внутреннего пояса для создания парникового эффекта и внешнего пояса для регулируемого компрессионного эффекта.</p>
                <p>«Эффект сауны» создается внутренним поясом, выполненным из специальной полимерной ткани Neotex. Она ускоряет естественное потоотделение в 4 раза, создавая эффект сауны и, таким образом, <span>вместе с потом из организма выводятся токсины и интенсивно сжигается лишний жир.</span> Чем больше физические нагрузки, тем сильнее активируется эффект жиросжигания.</p>
                <p>Особенностью пояса является то, что <span>расщепление жировой прослойки в области живота и на боках происходит и без повышенных физических нагрузок,</span> а только при регулярном использовании пояса во время любых повседневных занятий — прогулке, домашних делах, на работе, катании на велосипеде и многих других.</p>
            </div>
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/prod_size.jpg" alt="">
        </div>
        <a href="#order_form" class="button">Заказать сейчас</a>
    </div>
    <div class="bg_text">Xtreme Power Belt</div>
</section>
<section class="sect6">
    <div class="wrapper">
        <h2 class="title"><b>Реальные результаты похудения <br>покупателей пояса</b></h2>
        <p class="subtitle">Чтобы достичь впечатляющих результатов, необходимо регулярно носить пояс по несколько часов в день в течение месяца. Убедитесь сами, каких результатов можно достичь просто используя пояс Xtreme Power Belt ↓↓↓</p>
        <div class="result_carousel owl-carousel">
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/result1.jpg" alt="">
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/result2.jpg" alt="">
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/result3.jpg" alt="">
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/result4.jpg" alt="">
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/result5.jpg" alt="">
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/result6.jpg" alt="">
        </div>
        <p>*Обратите внимание — из-за индивидуальных особенностей организма скорость похудения в области талии, живота и боков может варьироваться</p>
    </div>
</section>
<section class="sect7">
    <div class="bg_text top">Xtreme Power Belt</div>
    <div class="wrapper">
        <h2 class="title"><b>Преимущества пояса</b></h2>
        <ul class="benef3">
            <li>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/benef3_img1.jpg" alt="">
                <p><b>Материал Neotex — полностью гипоаллергенен.</b> Благодаря наличию сетчатых вставок на спине, происходит циркуляция воздуха для исключения перепотевания и появления раздражений на коже</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/benef3_img2.jpg" alt="">
                <p><b>Регулирование степени сжатия</b> с помощью удобных «липучек» можно подбирать комфортную степень утяжки по мере похудения, без передавливания</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/benef3_img3.jpg" alt="">
                <p><b>Эластичный материал не растягивается и не сползает в течение дня,</b> а также при занятиях спортом и во время любых активностей</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/benef3_img4.jpg" alt="">
                <p><b>Незаметен под одеждой и не стесняет движений</b> благодаря тонким швам и комфортному облеганию. Он приятен на ощупь и подходит для долговременного использования</p>
            </li>
            <li class="order_li">
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/product1.png" alt="">
                <a href="#order_form" class="button">Заказать со скидкой</a>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/benef3_img5.jpg" alt="">
                <p><b>Не требует особенного ухода,</b> легко стирается, не теряет форму и свойства на протяжении длительного времени</p>
            </li>
        </ul>
    </div>
</section>
<section class="sect8">
    <div class="bg_text top">Xtreme Power Belt</div>
    <div class="wrapper">
        <h2 class="title"><b>Почему пояс незаменим в послеродовой период?</b></h2>
        <div class="column">
            <div class="left">
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/mom.jpg" alt="">
            </div>
            <div class="right">
                <ul class="list1">
                    <li>Возвращает тонус мышцам живота, укрепляет и сужает талию, помогая ей быстро прийти в дородовое состояние</li>
                    <li>Надежно фиксирует и защищает послеродовые швы</li>
                    <li>Помогает поддерживать мышцы передней брюшной стенки</li>
                    <li>Предотвращает появление «послеродового фартука» из обвисшей кожи живота</li>
                    <li>Снимает нагрузку с позвоночника, позволяя носить малыша на руках с большим комфортом для спины</li>
                </ul>
            </div>
        </div>
        <div class="alert">
            Пока все свое внимание и любовь вы отдаете малышу, пояс Xtreme Power Belt позаботится о вашей талии!
        </div>
    </div>
</section>
<section class="sect9">
    <div class="bg_text top">Xtreme Power Belt</div>
    <div class="wrapper">
        <h2 class="title"><b>Рекомендуют профессионалы</b></h2>
        <div class="expert_block">
            <div class="left">
                <div class="author">
                    <img src="{{ asset('/') }}flexonikFiles/xtremeshape/expert_ava.png" alt="">
                    <p><b>Natali Kostova</b> фитнес-эксперт, тренер</p>
                </div>
                <p>«Отвечаю на один из самых популярных вопросов, который мне постоянно присылают в директ! Какой корсет или пояс более эффективен для коррекции фигуры и тренировок?</p>
                <p>• Я предпочитаю пояса, а именно Xtreme Power Belt, потому что он лучше держит талию и спину.</p>
                <p>• Ношу на тренировке и днем около 3-5 часов.</p>
                <p>• Помогает не переедать, чувствовать насыщение едой в меньших количествах, снимает нагрузку с косых мышц пресса, позволяет предотвратить естественное расширение в талии от тяжелых нагрузок.»</p>
            </div>
            <div class="right">
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/expert.jpg" alt="">
            </div>
        </div>
        <a href="#order_form" class="button">Заказать в 1 клик</a>
    </div>
</section>
<section class="sect10">
    <div class="wrapper">
        <h2 class="title"><b>Отзывы покупателей пояса</b></h2>
        <p>Ежедневно мы получаем десятки отзывов о поясе и эффекте от его использования. Хотим поблагодарить наших покупателей за такую активную обратную связь! Она позволяет нам учитывать каждое мнение. Спасибо! Предлагаем подборку свежих отзывов.</p>
        <div class="reviews owl-carousel">
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/rev2.jpg" alt="">
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/rev1.jpg" alt="">
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/rev3.jpg" alt="">
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/rev4.jpg" alt="">
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/rev5.jpg" alt="">
            <img src="{{ asset('/') }}flexonikFiles/xtremeshape/rev6.jpg" alt="">
        </div>
    </div>
</section>
{{--<section class="sect11" id="video">--}}
    {{--<div class="wrapper">--}}
        {{--<h2 class="title"><b>Видеоотзыв</b></h2>--}}
        {{--<div class="video_block">--}}
            {{--<div class="youtube" id="S281qt0PgUI"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<section class="sect12">
    <div class="bg_text top">Xtreme Power Belt</div>
    <div class="wrapper">
        <h2 class="title"><b>Как мы работаем?</b></h2>
        <ul class="order_list">
            <li>
                <span>Заявка</span>
                <p>Оставьте заявку на нашем сайте</p>
                <a href="#order_form" class="button cursor">Заказать</a>
            </li>
            <li>
                <span>Звонок</span>
                <p>Вам перезвонит наш менеджер, ответит на все вопросы и поможет оформить заказ</p>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/order_phone.png" alt="">
            </li>
            <li>
                <span>Доставка и оплата</span>
                <p>Доставим через 3-10 дней без предоплаты. Оплачиваете заказ при получении на почте</p>
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/product2.png" alt="">
            </li>
        </ul>
        <div class="warn_block">
            <h4><span>Внимание!</span> Остерегайтесь подделок!</h4>
            <img class="img" src="{{ asset('/') }}flexonikFiles/xtremeshape/fake_orig.png" alt="">
            <p>Из-за растущей популярности утягивающего пояса, участились случаи его подделок. Мы являемся официальными дилерами Xtreme Power Belt и поставляем только оригинальные пояса от производителя.</p>
            <p>Поэтому берегите свое здоровье, деньги и нервы — <b>заказывайте у нас и можете быть уверены в качестве купленного пояса!</b></p>
            <div class="label">
                <img src="{{ asset('/') }}flexonikFiles/xtremeshape/orig_label.png" alt="">
                <p>100% гарантия качества от производителя</p>
            </div>
        </div>
    </div>
</section>
<section class="offer offer_bottom">
    <div class="wrapper">
        <div class="content">
            <p class="main_title">Xtreme Power Belt <span></span></p>
            <h2 class="main_subtitle"><span>Пояс для похудения</span> и тонкой талии</h2>
            <div class="column">
                <div class="action_box">
                    <p>Специальная цена <span>только 1 день</span></p>
                    <div class="price">
                        <div class="old"><span>{{ $prices[1]['originalPrice'] }}</span><small>RSD</small></div>
                        <div class="new"><span>{{ $prices[1]['amount'] }}</span><small>RSD</small></div>
                    </div>
                    <div class="img">
                        <img src="{{ asset('/') }}flexonikFiles/xtremeshape/product2.png" alt="">
                        <img src="{{ asset('/') }}flexonikFiles/xtremeshape/product.png" alt="">
                    </div>
                </div>
                <div class="formbox">
                    <div class="action_text">
                        <span>Оставьте заявку</span>
                        <p>наш менеджер перезвонит вам в течение 10 минут и поможет оформить заказ</p>
                        <small>Звонок абсолютно бесплатный!</small>
                    </div>
                    <form id="order_form" class="main-order-form main_form" action="#" method="post">

                        <input type="text" name="name" placeholder="Введите ваше имя" required="">
                        <input type="tel" name="phone" placeholder="Введите ваш телефон" required="">
                        <button class="button">Заказать со скидкой</button>

                    </form>
                    <div class="timer">Повышение цены через: <span class="hours"></span> : <span class="minutes"></span> : <span class="seconds"></span></div>
                </div>
            </div>
        </div>
        <a href="#video" class="video_btn">Смотреть<br> отзыв</a>
        <img class="figure" src="{{ asset('/') }}flexonikFiles/xtremeshape/figure_product.png" alt="">
    </div>
</section>
<!-- copyright -->
{{--<footer class="cpu">--}}
    {{--<div class="wrap">--}}
        {{--<div class="foot_ru_center" style="text-align: center; margin: 0px auto; padding: 30px 0; font-size:15px">--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</footer>--}}
<!-- /copyright -->


{{--<script src="https://xtremepowerbel.xcartpro.com/r1/assets_pages/land/js/youtube/previewYouTube.js"></script>--}}
<script src="{{ asset('/') }}flexonikFiles/xtremeshape/owl.carousel.min.js"></script>
{{--<script src="https://xtremepowerbel.xcartpro.com/r1/js/main.js"></script>--}}
<script>
    $(document).ready(function() {

        /* scroll */
        $("a[href^='#']").click(function () {
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top - $(".fix_menu").height() + 1 + "px"});
            return false;
        });

        $(window).on("load", function () {

            var rev_owl = function () {
                $('.reviews').owlCarousel({
                    loop: true,
                    center: true,
                    autoWidth: true,
                    autoHeight: true,
                    navText: "",
                    dots: false,
                    nav: true
                });
            };

            if ($(window).width() < 1200) {
                rev_owl();
            }

            $(window).resize(function () {
                if ($(window).width() < 1200) {
                    rev_owl();
                }
            });

            $('.result_carousel').owlCarousel({
                loop: true,
                autoHeight: true,
                center: true,
                autoWidth: true,
                navText: "",
                dots: false,
                nav: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true
            });

        });
    });
</script>

</body>
</html>