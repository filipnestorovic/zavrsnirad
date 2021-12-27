<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <link rel="shortcut icon" href="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('/') }}flexovalFiles/copper/normalize.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexovalFiles/copper/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexovalFiles/copper/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexovalFiles/copper/index.css">
</head>
<body>
@include('components.display_errors')
<section class="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo"><img src="{{ asset('/') }}flexovalFiles/copper/logo.png"></div>
                <div class="section-title">Работа в саду и на даче без боли и растяжений!</div>
                <div class="main__items">
                    <ul class="main__list">
                        <li class="main__list_white"><img src="{{ asset('/') }}flexovalFiles/copper/list.png"><span>Поддерживает суставы</span></li>
                        <li><img src="{{ asset('/') }}flexovalFiles/copper/list.png"><span>Снижает риск возникновения боли</span></li>
                        <li class="main__list_white"><img src="{{ asset('/') }}flexovalFiles/copper/list.png"><span>Сохраняет тепло</span></li>
                        <li><img src="{{ asset('/') }}flexovalFiles/copper/list.png"><span>Предотвращает вывихи</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-1 col-lg-2"></div>
            <div class="col-sm-6 col-md-5 col-lg-4">
                <div class="forma">
                    <div class="forma__top">
                        <div class="price__text">только сегодня!</div>
                        <div class="prices">
                            Copper Joint Protection по акции <br> ВСЕГО ЗА
                            <div class="price__new">
                              <span class="new_price_val">
                                 {{ $prices[1]['amount'] }}
                              </span>
                                <span class="new_price_cur">
                                 RSD
                              </span>
                            </div>
                        </div>
                    </div>
                    {{--<div class="timer">--}}
                        {{--<div class="timer__text">Успей до конца акции</div>--}}
                        {{--<div class="countdown"></div>--}}
                    {{--</div>--}}
                    <form class="form" action="{{$orderRoute}}" method="POST">
                        {{csrf_field()}}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <div class="form__list">
                            <input placeholder="Ime i prezime" type="text" name="name" required>
                            <input placeholder="Telefon" type="tel" name="phone" required>
                            <input placeholder="Adresa" type="text" name="shipping_address" required>
                            <input placeholder="Grad" type="text" name="shipping_city" required>
                            <button class="zak__btn" type="submit">
                                Poručite za
                                <span class="price__new">
                                 <span class="new_price_val">
                                    {{ $prices[1]['amount'] }}
                                 </span>
                                 <span class="new_price_cur">
                                    RSD
                                 </span>
                              </span>
                            </button>
                        </div>
                        {{--<div class="pri">* при заказе курса</div>--}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="znakomo">
    <div class="container">
        <div class="section-title">Вам это знакомо?</div>
        <div class="row">
            <div class="col-sm-3">
                <div class="znakomo__item">
                    <img src="{{ asset('/') }}flexovalFiles/copper/znakomo1.jpg">
                    <p>Боль в коленях и локтях, после работы в саду</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="znakomo__item">
                    <img src="{{ asset('/') }}flexovalFiles/copper/znakomo2.jpg">
                    <p>Постоянно напряженные мышцы</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="znakomo__item">
                    <img src="{{ asset('/') }}flexovalFiles/copper/znakomo3.jpg">
                    <p>Судороги кистей и стоп</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="znakomo__item">
                    <img src="{{ asset('/') }}flexovalFiles/copper/znakomo4.jpg">
                    <p>Суставы хрустят и щёлкают</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="rabota">
    <img class="hidden-xs trava" src="{{ asset('/') }}flexovalFiles/copper/rabota.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-sm-12 col-lg-9">
                <div class="rabota__wrapper">
                    <div class="row">
                        <div class="col-sm-6 col-lg-7">
                            <div class="section-title">Работа в саду: последствия</div>
                            <p>Лето наступило и впереди вас ждут садовые работы: прополка, посадка, полив, сбор урожая. Все это
                                тяжелый труд! И конечно, у вас ноют суставы - постоянное стояние на коленях или на корточках, активная
                                работа руками, а из-за перенапряжения вы вынуждены дополнительно напрягать шею и спину. <span>COPPER
                              joint protection</span> готов помочь вам справиться с тяжелой работой в саду!
                            </p>
                        </div>
                        <div class="col-sm-6 col-lg-5"><img class="hidden-xs rabota__img" src="{{ asset('/') }}flexovalFiles/copper/rabota__img.png"></div>
                    </div>
                    <img class="visible-xs rabota__img" src="{{ asset('/') }}flexovalFiles/copper/rabota__img_mob.png">
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<section class="sad">
    <div class="container">
        <div class="section-title">Работа в саду без COPPER joint protection</div>
        <div class="row">
            <div class="col-lg-11">
                <div class="sad__item">
                    <img class="sad1" src="{{ asset('/') }}flexovalFiles/copper/sad1.png">
                    <p>Напряжение шеи из-за напряжения локтей и коленей</p>
                </div>
                <div class="sad__item">
                    <img class="sad2" src="{{ asset('/') }}flexovalFiles/copper/sad2.png">
                    <p>Дополнительная нагрузка на поясницу</p>
                </div>
                <div class="sad__item">
                    <img class="sad3" src="{{ asset('/') }}flexovalFiles/copper/sad3.png">
                    <p>Огромное количество ручного труда провоцирует боль в суставах, судороги и защемления нервов</p>
                </div>
                <div class="sad__item">
                    <img class="sad4" src="{{ asset('/') }}flexovalFiles/copper/sad4.png">
                    <p>Постоянное напряжение коленных суставов и связок из-за тяжелой работы в саду</p>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<section class="how">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-sm-6">
                <div class="section-title">Как работает<span> COPPER joint protection?</span></div>
                <div class="how__item">
                    <p>COPPER joint protection не передавливает руку или ногу, благодаря эластичным краям</p>
                    <img class="how1"
                         src="{{ asset('/') }}flexovalFiles/copper/how1.png">
                </div>
                <div class="how__item">
                    <p>Усиленная фиксация сустава за счет особой структуры ткани позволяет уменьшить нагрузку на суставы</p>
                    <img
                            class="how2" src="{{ asset('/') }}flexovalFiles/copper/how2.png">
                </div>
                <div class="how__item">
                    <p>Уникальная технология производства ткани с вплетением медных нитей, позволяет плотно прилегать к ноге или
                        руке, прогревая и поддерживая суставы
                    </p>
                    <img class="how3" src="{{ asset('/') }}flexovalFiles/copper/how3.png">
                </div>
            </div>
            <div class="col-sm-5"></div>
        </div>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="how__wrapper">
                    <p><span>COPPER joint protection</span> - это уникальная разработка в области поддержки суставов и здоровья
                        опорно-двигательного аппарата. За счет армирования ткани медными нитями достигается поддержка суставов и
                        мышц, помимо этого материал COPPER joint protection обладает легким согревающим эффектом, который снижает
                        боль и воспаление.
                    </p>
                </div>
            </div>
            <div class="col-lg01"></div>
        </div>
    </div>
</section>
<section class="job">
    <div class="container">
        <div class="section-title">Работа в саду с COPPER joint protection</div>
        <div class="job__wrapper">
            <div class="row">
                <div class="col-sm-8"><img class="ded visible-xs" src="{{ asset('/') }}flexovalFiles/copper/ded_mob.jpg"><img class="ded hidden-xs"
                                                                                                                           src="{{ asset('/') }}flexovalFiles/copper/ded.jpg"></div>
                <div class="col-sm-4">
                    <div class="job__items">
                        <div class="job__item job__item1">
                            <img class="hidden-xs" src="{{ asset('/') }}flexovalFiles/copper/job1.png">
                            <p>Легкость в коленях без боли и судорог. Поддержка сустава снижает риск вывиха</p>
                        </div>
                        <div class="job__item job__item2">
                            <img class="hidden-xs" src="{{ asset('/') }}flexovalFiles/copper/job2.png">
                            <p>Правильный кровоток обеспечивает снижения риска возникновения болевого синдрома</p>
                        </div>
                        <a class="hidden-xs zak__btn my_btn" href="#form">
                            Poručite za
                            <span class="price__new">
                              <span
                                      class="new_price_val">
                                 {{ $prices[1]['amount'] }}
                              </span>
                              <span class="new_price_cur">
                                 RSD
                              </span>
                           </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="expert">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-md-6">
                <div class="section-title">Мнение специалиста</div>
                <div class="expert__wrapper">
                    <div class="expert__text">
                        <img class="visible-xs" src="{{ asset('/') }}flexovalFiles/copper/expert_mob.jpg">
                        <p><span>COPPER joint protection</span> созданы специально правильного положения суставов при каких-либо
                            физических нагрузках.
                        </p>
                        <p>Проблема большинства людей, особенно пожилого возраста, заключается в том, что мышцы не справляются со
                            своей работой и позволяют суставам смещаться.
                        </p>
                        <p>Накладки же берут на себя роль фиксатора, надежно удерживая суставы в правильном положении.</p>
                        <p><span>Панкратов С. Р.</span><i>Специалист по оздоровительной гимнастике</i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="reviews">
    <div class="container">
        <div class="section-title">Отзывы наших покупателей</div>
        <div class="row hidden-xs">
            <div class="col-sm-4">
                <div class="reviews__item">
                    <img src="{{ asset('/') }}flexovalFiles/copper/rev1.png"><span>Наталья Кириленко 63 года</span>
                    <p>Пока высаживала рассаду, думала что останусь без рук и без ног - боли были такие, боялась и не встану уже
                        больше. Хорошо, что дочка привезла мне в подарок COPPER joint protection, да не один, а сразу два. Сначала
                        надела на колени и сразу так тепло стало, да и поддержка почувствовалась сильная, словно у молодой ноги.
                        После того как полегче стало, стала носить на руках. Теперь в огород только в COPPER joint protection
                        выхожу, иначе никак!
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="reviews__item">
                    <img src="{{ asset('/') }}flexovalFiles/copper/rev2.png"><span>Игорь Дубровский 47 лет</span>
                    <p>Давно мечтал об огороде, чтобы всей семьей потом зимой есть натуральные овощи и фрукты. Но прежде чем все
                        это кушать, надо все посадить. Тут то я и столкнулся с ужасной болью в суставах после посадки. Решил
                        поискать в интернете, что с этим делать и наткнулся на COPPER joint protection. Заказал сразу две пары,
                        чтобы и на локти, и на коленки. Теперь работа в саду только в радость, будто второе дыхание открылось!
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="reviews__item">
                    <img src="{{ asset('/') }}flexovalFiles/copper/rev3.png"><span>Ольга Шаевская 35 лет</span>
                    <p>Приехала маме помочь в огороде и защемило нерв в локте, боли были просто ужасные. Решила срочно спасаться
                        и пошла к хирургу - он-то и посоветовал мне купить COPPER joint protection. Как только надела его, считай
                        через час боль и прошла! Не верится, теперь взяла еще маме COPPER joint protection, чтобы и ей легче
                        работалось!
                    </p>
                </div>
            </div>
        </div>
        <div class="owl-carousel visible-xs">
            <div class="reviews__item">
                <img src="{{ asset('/') }}flexovalFiles/copper/rev1.png"><span>Наталья Кириленко 63 года</span>
                <p>Пока высаживала рассаду, думала что останусь без рук и без ног - боли были такие, боялась и не встану уже
                    больше. Хорошо, что дочка привезла мне в подарок COPPER joint protection, да не один, а сразу два. Сначала
                    надела на колени и сразу так тепло стало, да и поддержка почувствовалась сильная, словно у молодой ноги.
                    После того как полегче стало, стала носить на руках. Теперь в огород только в COPPER joint protection
                    выхожу, иначе никак!
                </p>
            </div>
            <div class="reviews__item">
                <img src="{{ asset('/') }}flexovalFiles/copper/rev2.png"><span>Игорь Дубровский 47 лет</span>
                <p>Давно мечтал об огороде, чтобы всей семьей потом зимой есть натуральные овощи и фрукты. Но прежде чем все
                    это кушать, надо все посадить. Тут то я и столкнулся с ужасной болью в суставах после посадки. Решил
                    поискать в интернете, что с этим делать и наткнулся на COPPER joint protection. Заказал сразу две пары,
                    чтобы и на локти, и на коленки. Теперь работа в саду только в радость, будто второе дыхание открылось!
                </p>
            </div>
            <div class="reviews__item">
                <img src="{{ asset('/') }}flexovalFiles/copper/rev3.png"><span>Ольга Шаевская 35 лет</span>
                <p>Приехала маме помочь в огороде и защемило нерв в локте, боли были просто ужасные. Решила срочно спасаться и
                    пошла к хирургу - он-то и посоветовал мне купить COPPER joint protection. Как только надела его, считай
                    через час боль и прошла! Не верится, теперь взяла еще маме COPPER joint protection, чтобы и ей легче
                    работалось!
                </p>
            </div>
        </div>
    </div>
</section>
<div id="footer">
    <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo"><img src="{{ asset('/') }}flexovalFiles/copper/logo.png"></div>
                    <div class="section-title">Работа в саду и на даче без боли и растяжений!</div>
                    <div class="main__items">
                        <ul class="main__list">
                            <li class="main__list_white"><img src="{{ asset('/') }}flexovalFiles/copper/list.png"><span>Поддерживает суставы</span></li>
                            <li><img src="{{ asset('/') }}flexovalFiles/copper/list.png"><span>Снижает риск возникновения боли</span></li>
                            <li class="main__list_white"><img src="{{ asset('/') }}flexovalFiles/copper/list.png"><span>Сохраняет тепло</span></li>
                            <li><img src="{{ asset('/') }}flexovalFiles/copper/list.png"><span>Предотвращает вывихи</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1 col-lg-2"></div>
                <div class="col-sm-6 col-md-5 col-lg-4">
                    <div class="forma">
                        <div class="forma__top">
                            <div class="price__text">только сегодня!</div>
                            <div class="prices">
                                Copper Joint Protection по акции <br> ВСЕГО ЗА
                                <div class="price__new">
                                 <span class="new_price_val">
                                    {{ $prices[1]['amount'] }}
                                 </span>
                                    <span class="new_price_cur">
                                    RSD
                                 </span>
                                </div>
                            </div>
                        </div>
                        {{--<div class="timer">--}}
                            {{--<div class="timer__text">Успей до конца акции</div>--}}
                            {{--<div class="countdown"></div>--}}
                        {{--</div>--}}
                        <form class="form" id="form" action="{{$orderRoute}}" method="POST">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class="form__list">
                                <input placeholder="Ime i prezime" type="text" name="name" required>
                                <input placeholder="Telefon" type="tel" name="phone" required>
                                <input placeholder="Adresa" type="text" name="shipping_address" required>
                                <input placeholder="Grad" type="text" name="shipping_city" required>
                                <button class="zak__btn" type="submit">
                                    Poručite za
                                    <span class="price__new">
                                     <span class="new_price_val">
                                        {{ $prices[1]['amount'] }}
                                     </span>
                                     <span class="new_price_cur">
                                        RSD
                                     </span>
                                    </span>
                                </button>
                            </div>
                            {{--<div class="pri">* при заказе курса</div>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="{{ asset('/') }}flexovalFiles/copper/owl.carousel.min.js"></script>
{{--<script src="../../cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>--}}
{{--<script src="http://copper.xcartpro.com/r1/main.js"></script>--}}
{{--<script src="../../cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>--}}
{{--<script src="../../cdnjs.cloudflare.com/ajax/libs/jquery-url-parser/2.3.1/purl.min.js"></script>--}}
{{--<script src="../../click.lucky.online/js/leadprofit.js"></script>--}}
{{--<script src="../../cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>--}}
<script>
    $(document).ready(function () {
        $('.my_btn').click(function () {
            var t = $(this).attr("href"),
                e = $(t).offset().top;
            return jQuery("html:not(:animated),body:not(:animated)").animate({ scrollTop: e }, 1e3), !1;
        });

        $(".owl-carousel").owlCarousel({ items: 1, loop: !0, nav: !0 }), $(".owl-prev").empty(), $(".owl-next").empty();
    });
</script>
<style>
    @media (max-width: 767px){
        section {
            background-position: 56%;
        }
        .main {
            height: 1380px;
            background-image: url({{ asset('/') }}flexovalFiles/copper/bg-m2.jpg);
        }
    }
</style>
@include('components.pixel_footer')
</body>
</html>