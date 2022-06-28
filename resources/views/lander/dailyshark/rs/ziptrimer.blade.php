<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/ziptrimer/slick.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/ziptrimer/style.css" type="text/css">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/ziptrimer/pr4.jpg"type="image/x-icon">
    <script type="text/javascript" src="{{ asset('/') }}shared_files/slick.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}dailysharkFiles/ziptrimer/script.js"></script>
    <style>@font-face{font-family:'AvenirNextCyr';src:url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Light.woff2") format('woff2'),url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Light.woff") format('woff'),url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Light.ttf") format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'AvenirNextCyr';src:url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff2") format('woff2'),url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff") format('woff'),url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.ttf") format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'AvenirNextCyr';src:url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Medium.woff2") format('woff2'),url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Medium.woff") format('woff'),url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Medium.ttf") format('truetype');font-weight:500;font-style:normal}@font-face{font-family:'AvenirNextCyr';src:url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff2") format('woff2'),url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff") format('woff'),url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.ttf") format('truetype');font-weight:700;font-style:normal}</style>
</head>
<body>
@include('components.display_errors')
<section class="topline">
    <div class="wrap">
        <ul class="topline__ul">
            <li>100% гарантия качества</li>
            <li>Быстрая доставка почтой</li>
            <li>Более 4210 положительных отзывов</li>
        </ul>
    </div>
</section>
<section class="header-one">
    <div class="wrap">
        <div class="title-cont clearfix">
            <h1>Garden Trimmer</h1>
            <h2>Беспроводной компактный садовый триммер</h2>
        </div>
        <div class="sale2">
            скидка:
            <p>53%</p>
        </div>
        <ul class="header-one_plus">
            <li>
                <p>Срезает даже сухую траву и крупные сорняки</p>
            </li>
            <li>
                <p>Работает автономно без подключения к сети</p>
            </li>
            <li>
                <p>Телескопическая ручка для труднодоступных мест</p>
            </li>
            <li>
                <p>Простой в использовании</p>
            </li>
        </ul>
        <div class="price-button">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Обычная цена:</span>
                    <p>
                        <span class="price_land_s2">
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <small class="price_land_curr">
                            RSD
                        </small>
                    </p>
                </div>
                <div class="new-cost">
                    <span>Цена по акции:</span>
                    <p>
                        <span class="price_land_s1">
                           {{ $prices[1]['amount'] }}
                        </span>
                        <small class="price_land_curr">
                            RSD
                        </small>
                    </p>
                </div>
            </div>
            <a href="#order_form" class="button-m">Заказать сейчас</a>
        </div>
        <ul class="stock">
            <li>12</li>
            <li>штук осталось</li>
        </ul>
        <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/1.gif" alt="" class="top-gif">
        <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/kent.png" alt="" class="kent">
    </div>
</section>
<!--ПРЕИМУЩЕСТВА 3-4 -->
<section class="about">
    <div class="wrap nopad">
        <h2 class="title">
            <span>Надежный инструмент</span>
            в вашем хозяйстве
        </h2>
        <p>Легкий и удобный триммер для удаления травы, да еще без пахучего топлива или назойливого электрического шнура, цепляющегося за всё, за что только можно. Вы сможете без больших усилий и трат времени скосить растительность даже в самых труднодоступных местах, например, возле забора, бордюра или вокруг деревьев.</p>
        <ul class="list col3 ul-gif">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/2.gif" alt="">
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/3.gif" alt="">
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/4.gif" alt="">
            </li>
        </ul>
        <h2 class="title">Преимущества триммера</h2>
        <ul class="list col4 round border3">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/pr1.jpg" alt="">
                <h3>Прочный корпус из АБС-пластика</h3>
                <p>выдержит удары и падения</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/pr2.jpg" alt="">
                <h3>Мощный электродвигатель </h3>
                <p>справится с сухой травой и крупными сорняками</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/pr3.jpg" alt="">
                <h3>Телескопическая ручка</h3>
                <p>позволит дотянуться до самых неудобных мест</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/pr4.jpg" alt="">
                <h3>Защитный щиток</h3>
                <p>обезопасит лицо и глаза от летящего мусора</p>
            </li>
        </ul>
        <a href="#order_form" class="button-m">Заказать со скидкой</a>
    </div>
</section>
<!--ХАРАКТЕРИСТИКИ 2-->
<section class="charbox">
    <div class="wrap nopad">
        <ul class="list col3 ">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/char_1.jpg" alt="">
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/char_2.jpg" alt="">
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/char_3.jpg" alt="">
            </li>
        </ul>
        <h2 class="title">
            <span>Комплектация</span>
            триммера
        </h2>
        <div class="char2 two-col">
            <div class="two-col_left">
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/char.jpg" alt="">
            </div>
            <div class="two-col_right">
                <ul class="char2_ul">
                    <li>
                        <p><b>Триммер:</b> 1 шт.</p>
                    </li>
                    <li>
                        <p><b>Материал:</b> АБС-пластик</p>
                    </li>
                    <li>
                        <p><b>Телескопическая ручка:</b> 1 шт.</p>
                    </li>
                    <li>
                        <p><b>Леска:</b> 20 шт.</p>
                    </li>
                    <li>
                        <p><b>Щиток:</b> 1 шт.</p>
                    </li>
                    <li>
                        <p><b>Питание:</b> 6 батареек АА (в комплект не входят)</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="compare">
    <div class="wrap nopad">
        <h2 class="title">
            <span>Garden Trimmer</span>
            <br> эффективный и экономичный
        </h2>
        <p>Сравните триммер для травы Garden Trimmer <br> с более дорогими и неудобными бензотриммерами</p>
        <div class="compare_col2 two-col">
            <div class="two-col_right">
                <div class="compare__item clearfix">
                    <div class="ci__img"><img src="{{ asset('/') }}dailysharkFiles/ziptrimer/comp2.jpg" alt=""></div>
                    <div class="ci__text">
                        <h3>Garden Trimmer</h3>
                        <ul>
                            <li>
                                Цена:
                                <b>
                                 <span class="price_land_s1">
                                    {{ $prices[1]['amount'] }}
                                    RSD
                                 </span>
                                </b>
                            </li>
                            <li>Компактный и легкий</li>
                            <li>Не требует навыков в обращении</li>
                            <li>Малошумный</li>
                            <li>Безопасный</li>
                            <li>Работает от дешевых батареек АА</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="two-col_left">
                <div class="compare__item clearfix">
                    <div class="ci__img"><img src="{{ asset('/') }}dailysharkFiles/ziptrimer/comp1.jpg" alt=""></div>
                    <div class="ci__text">
                        <h3>Бензотриммер</h3>
                        <ul>
                            <li>
                                Цена: от
                                <b>
                                    8000
                                    RSD
                                </b>
                            </li>
                            <li>Тяжелый и неудобный</li>
                            <li>Требует навыков в обращении</li>
                            <li>Очень шумный</li>
                            <li>Травмоопасный</li>
                            <li>Дополнительные траты на бензин и масло</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="#order_form" class="button-m">Заказать Garden Trimmer</a>
    </div>
</section>
<!--ОТЗЫВЫ 4-6 -->
<section class="reviewsbox">
    <div class="wrap nopad">
        <h2 class="title">
            <span>Отзывы</span>
            покупателей
        </h2>
        <!--ОТЗЫВЫ 4-->
        <div class="reviews-4">
            <div>
                <div class="rev shadow">
                    <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/rev1.jpg" alt="">
                    <h3>«Отличная вещь для подкашивания травы»</h3>
                    <p class="just">Достаточно мощный при его небольшом весе. Что для меня важно – мотор в очень прочном корпусе; можно работать по мокрой траве и не боятся, что триммер сгорит. Отличная вещь для подкашивания травы вдоль забора на участке и между деревьями. Выкашивает и сухую траву и одуванчики быстро и эффективно. Можно спокойно работать леской в вертикальной плоскости.</p>
                    <span>Иван Кочетов, Москва</span>
                </div>
            </div>
            <div>
                <div class="rev shadow">
                    <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/rev3.jpg" alt="">
                    <h3>«За два сезона эксплуатации поломок не было»</h3>
                    <p class="just">Мощный триммер. Использую его в деревне вот уже 2 года, пока не подвел. Трава бывает и переросшей, но триммер справляется отлично, трава не наматывается на леску. За два сезона эксплуатации поломок не было. Триммер отлично подойдет там, где нужно косить траву не только на даче, небольших участках, но и на прилегающих территориях.</p>
                    <span>Василий Минаев, Казань</span>
                </div>
            </div>
            <div>
                <div class="rev shadow">
                    <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/rev2.jpg" alt="">
                    <h3>«Для содержания в аккуратном состоянии 6-7 соток в самый раз»</h3>
                    <p class="just">Данный триммер не первый, до этого был другого производителя, после работы с которым руки ещё час тряслись от вибрации. С Garden Trimmer проблем с вибрацией нет – работать комфортно. Люфта также пока не наблюдается. В комплекте и леска есть и щиток. Для своего участка пользуюсь леской, расход у неё маленький. Для содержания в аккуратном состоянии 6-7 соток в самый раз.</p>
                    <span>Сергей Ивашов, Омск</span>
                </div>
            </div>
        </div>
        <!--end reviews-4  -->
        <a href="#order_form" class="button-m">Заказать со скидкой</a>
    </div>
</section>
<!--end ОТЗЫВЫ 4-6 --><!--КАК ЗАКАЗАТЬ-->
<section>
    <div class="wrap nopad">
        <h2 class="title">Как сделать заказ?</h2>
        <!--КАК ЗАКАЗАТЬ 1-->
        <ul class="order1 list col4">
            <li>
                <span></span>
                <h3>шаг 1</h3>
                <p>Вы оставляете заявку на нашем сайте</p>
            </li>
            <li>
                <span></span>
                <h3>шаг 2</h3>
                <p>Наш менеджер уточняет детали заказа</p>
            </li>
            <li>
                <span></span>
                <h3>шаг 3</h3>
                <p>Мы отправляем Ваш заказ почтой в любой регион</p>
            </li>
            <li>
                <span></span>
                <h3>шаг 4</h3>
                <p>Вы оплачиваете заказ при получении</p>
            </li>
        </ul>
    </div>
</section>
<section class="footer-one">
    <div class="wrap">
        <div class="title-cont clearfix">
            <h1>Garden Trimmer</h1>
            <h2>Беспроводной компактный садовый триммер</h2>
        </div>
        <div class="sale2">
            скидка:
            <p>53%</p>
        </div>
        <div class="formbox shadow">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Обычная цена:</span>
                    <p>
                        <span class="price_land_s2">
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <small class="price_land_curr">
                            RSD
                        </small>
                    </p>
                </div>
                <div class="new-cost">
                    <span>Цена сегодня:</span>
                    <p>
                        <span class="price_land_s1">
                           {{ $prices[1]['amount'] }}
                        </span>
                        <small class="price_land_curr">
                            RSD
                        </small>
                    </p>
                </div>
            </div>
            <form id="order_form" action="#" class="main-order-form m1-form orderformcdn" method="post">
                <input class="field" name="name" type="text" placeholder="Введите имя" value="">
                <input class="field" name="phone" type="tel" placeholder="Введите телефон" value="">
                <button class="button-m">Оформить заказ</button>
            </form>
        </div>
        <ul class="stock">
            <li>12</li>
            <li>штук осталось</li>
        </ul>
        <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/kent.png" alt="" class="kent">
    </div>
</section>
@include('components.pixel_footer')
</body>
</html>
