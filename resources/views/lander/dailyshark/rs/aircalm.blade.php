<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="Prečišćivač vazduha" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <link rel="shortcut icon" href="" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/font-awesome.min.css" />
    <link rel="stylesheet" href="http://aircalm.xcartpro.com/r1/css/libs/bootstrap.min.css" />
    <link rel="stylesheet" href="http://aircalm.xcartpro.com/r1/css/libs/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="http://aircalm.xcartpro.com/r1/css/libs/owl.carousel.min.css" />
    <link rel="stylesheet" href="http://aircalm.xcartpro.com/r1/css/libs/owl.theme.default.css" />
    <link rel="stylesheet" href="http://aircalm.xcartpro.com/r1/css/libs/remodal.css" />
    <link rel="stylesheet" href="http://aircalm.xcartpro.com/r1/css/libs/remodal-default-theme.css" />
    <link rel="stylesheet" href="http://aircalm.xcartpro.com/r1/css/app.css" />
    <link rel="stylesheet" href="http://aircalm.xcartpro.com/r1/css/fonts.css" />
    <link rel="stylesheet" href="http://aircalm.xcartpro.com/r1/css/libs/slick-theme.css" />
    <link rel="stylesheet" href="http://aircalm.xcartpro.com/r1/css/libs/slick.css" />
    <link rel="stylesheet" href="http://aircalm.xcartpro.com/r1/css/libs/magnific-popup.css" />
    <link rel="stylesheet" href="http://aircalm.xcartpro.com/r1/css/libs/jquery.validation.css" />

    {{--<script src="http://aircalm.xcartpro.com/shared/form.validate.js?12"></script>--}}
    {{--<script src="http://aircalm.xcartpro.com/shared/interPhoneCodes.js"></script>--}}
    {{--<script src="http://aircalm.xcartpro.com/shared/showcase.js?v=1"></script>--}}
    {{--<script src="http://aircalm.xcartpro.com/shared/form.incomplete.js?10"></script>--}}
    {{--<script src="http://aircalm.xcartpro.com/shared/main2.js?16"></script>--}}
</head>
<body>
@include('components.display_errors')
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-sm-offset-1">
                <a href="#" class="logo"></a>
            </div>
            <div class="col-sm-7 col-xs-6 col-sm-offset-2">
                <div class="navigation">
                    <ul class="menu">
                        <li><a href="#how-its-work">Как работи това?</a>
                        </li>
                        <li><a href="#characteristics">Характеристики</a>
                        </li>
                        <li><a href="#order">Поръчка</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mob-menu-wrapper">
        <div class="navbar-menu-overlay"></div><a href="#" class="mob-menu-icon"><span></span></a>
        <div class="mob-sidebar">
            <div class="mob-menu-container">
                <ul class="menu-mob-wrap menu-mob">
                    <li><a href="#how-its-work" class="url">Как работи това?</a>
                    </li>
                    <li><a href="#characteristics" class="menu-mob-item url">Характеристики</a>
                    </li>
                    <li><a href="#order" class="menu-mob-item url">Поръчка</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="main-container">
    <section class="main-section" id="main-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-5">
                    <div class="description">
                        <h1>Ултразвуковият овлажнител <span>и дифузьор с ароматизатор</span></h1>
                        <h3>Изкуството на релаксация и здраве във вашия дом</h3>
                        <div class="price-wrapper"><span class="old">{{ $prices[1]['originalPrice'] }}</span><span class="new">{{ $prices[1]['amount'] }} <sup>RSD</sup></span><b class="gift">+ подарък</b>
                        </div><a href="#order" class="btn-order">Поръчайте</a>
                    </div>
                </div>
            </div>
        </div><a href="#order" class="btn-order-mobile">Поръчайте</a>
        <a href="#product-color" class="btn-scroll"></a>
    </section>
    <section class="benefits benefits-mobile">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="benefits-wrapper">
                        <h3>Какви са предимствата?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row ben-mb">
                        <div class="col-sm-6 col-md-push-6">
                            <div class="benefits-wrapper tal">
                                <h4>УВЛАЖНЯВАЩ И ПОЧИСТВАЩ ВЪЗДУХА</h4>
                                <p>• Полезен е през зимата, когато въздухът в стаята е сух</p>
                                <p>• Вашата кожа ще бъде по-гладка и овлажнена</p>
                                <p>• Помага ви да оздравявате по-бързо</p>
                                <p>• Многото изследвания показват, че влажният въздух е полезен за здравето</b></p>

                            </div>
                        </div>
                        <div class="col-sm-6 col-md-pull-6">
                            <div class="owl-carousel ovl-2">
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="http://aircalm.xcartpro.com/r1/images/benefits-img.png" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="http://aircalm.xcartpro.com/r1/images/benefits-img2.png" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="http://aircalm.xcartpro.com/r1/images/benefits-img3.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="benefits-wrapper tal">
                                <h4>АРОМАТЕРАПИЯ</h4>
                                <p>• Спомага за <b>премахване на стреса</b> и насърчава балансираното, умственото и физическото състояние</p>
                                <p>• В зависимост от маслата, които използвате, той може да спомогне за укрепване на имунната ви система</p>
                                <p>• Подобрява съня</p>
                                <p>• Премахва неприятните миризми</p>
                                <p>• Създайте успокояваща атмосфера</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="owl-carousel ovl-2">
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="http://aircalm.xcartpro.com/r1/images/benefits-img4.png" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="http://aircalm.xcartpro.com/r1/images/benefits-img5.png" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="http://aircalm.xcartpro.com/r1/images/benefits-img6.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="main-headline">КАКВО КАЗВАТ КУПУВАЧИТЕ</h3>
                </div>
            </div>
            <div class="row reviews-mobile">
                <div class="owl-carousel ovl-1">
                    <div class="item">
                        <div class="reviews-wrapper">
                            <div class="img-wrapper">
                                <a href="#koktejl" class="play">
                                    <img src="http://aircalm.xcartpro.com/r1/images/reviews1.png" />
                                </a>
                            </div>
                            <h4>Очарователен, стилен и елегантен дизайн</h4>
                            <p>Страхотен продукт. По-малък, отколкото очаквах, примерно с размера на книга. Цветовете се променят през няколко секунди, това е добре. Отне ми по-малко от 2 минути, за да го настроя първия път. Аз използвам етерични масла. Много е просто! Парите се поемат на вълни. Това е важно и необходимо нещо за дома, или офиса. Вероятно ще купя още един.</p><span>Дана</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="reviews-wrapper">
                            <div class="img-wrapper">
                                <img src="http://aircalm.xcartpro.com/r1/images/reviews2.png" />
                            </div>
                            <h4>Едно от любимите неща, купени онлайн</h4>
                            <p>Това е страхотен овлажнител. Не знаех много за етеричните масла, но тъй като ги имах като подарък, искам да опитам всичко. Харесва ми как работи цяла нощ с релаксиращ аромат, особено добри са евкалипт и бор. Много успокоява, дори когато просто го гледате. Работи непрекъснато до 4 часа, все още не съм го използвал по-дълго.</p><span>Димитър</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="reviews-wrapper">
                            <div class="img-wrapper">
                                <img src="http://aircalm.xcartpro.com/r1/images/reviews.png" />
                            </div>
                            <h4>Всички казват едно и също.</h4>
                            <p>Харесва ми този малък продукт. Поръчах един за офиса и това е ХИТ! Поръчах още един и за спалнята! Препоръчвам го с увереност.</p><span>Александра</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="reviews-wrapper">
                            <div class="img-wrapper">
                                <img src="http://aircalm.xcartpro.com/r1/images/reviews3.png" />
                            </div>
                            <h4>Обожавам го</h4>
                            <p>Той работи повече от 6 часа и автоматично спира, така че е безопасно да го оставите, докато водата се изпари напълно. Цветовете са много красиви и привлекателни, съчетаващи се с всеки интериор.</p><span>Андреа</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-color" id="product-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>7 (LED) цвята, за създаване на подходяща атмосфера в стаята или офиса</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="img-wrapper">
                        <img src="http://aircalm.xcartpro.com/r1/images/7colors.png" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Цветовете се променят автоматично или ръчно, при натискане. Добавете 100 ml вода и <b>2-3 капки етерично масло</b>
                    </p>
                    <a href="#order" class="btn-order2">Поръчайте</a>
                </div>
            </div>
        </div>
    </section>
    <section class="characteristics" id="characteristics">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="main-headline">ХАРАКТЕРИСТИКИ</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-push-6">
                    <div class="characteristics-descr">
                        <p>Работно време: <span>3-6 часа</span> (в зависимост от настройката)</p>
                        <p>Покритие: <span>15-30 m2</span>
                        </p>
                        <p>Капацитет на резервоара: <span>100 ml</span>
                        </p>
                        <p style="color: red;">Автоматично изключване, когато резервоарът за вода е празен</p>
                    </div>
                    <div class="function"><span class="light">Light</span>
                        <p>Натиснете бутона, за да включите светодиодите, цветовете се менят автоматично.</p>
                        <p>Натиснете отново, за да промените ръчно фоновото осветление </p>
                    </div>
                    <div class="function"><span class="mist">Mist</span>
                        <p>Натиснете бутона, за да стартирате овлажнителя</p>
                        <p>Натиснете отново, за да промените настройката (непрекъснато или на интервал от 30 секунди)</p>
                    </div>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <div class="img-wrapper">
                        <img src="http://aircalm.xcartpro.com/r1/images/product.png" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="how-its-work" id="how-its-work">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="main-headline">КАК ДА СЕ ИЗПОЛЗВА?</h3>
                </div>
            </div>
            <div class="row">
                <div class="item-wrapper">
                    <div class="col-md-2 col-md-offset-2 col-sm-3 col-xs-6">
                        <div class="item">
                            <img src="http://aircalm.xcartpro.com/r1/images/1.png" />
                            <p>Извадете капака</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <div class="item">
                            <img src="http://aircalm.xcartpro.com/r1/images/2.png" />
                            <p>Изсипете вода с мерителна чашка</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <div class="item">
                            <img src="http://aircalm.xcartpro.com/r1/images/3.png" />
                            <p>Добавете 2-3 капки етерично масло</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <div class="item">
                            <img src="http://aircalm.xcartpro.com/r1/images/4.png" />
                            <p>Поставете капака и го закрепете</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="main-headline">ДОСТАВКА, ЗАПЛАЩАНЕ И ГАРАНЦИЯ</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="item-wrapper">
                    <div class="col-md-3 col-md-offset-1">
                        <div class="item item-car">
                            <img src="http://aircalm.xcartpro.com/r1/images/why1.png" class="car" />
                            <div class="item-descr">
                                <h4>Доставка</h4>
                                <p>Доставка с куриер в рамките на 2-4 дни</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item item-center">
                            <img src="http://aircalm.xcartpro.com/r1/images/why3.png" class="salut" />
                            <div class="item-descr">
                                <h4>100% гаранция</h4>
                                <p class="center">Имате право да анулирате покупката си в рамките на 14 дни</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item item-cash">
                            <img src="http://aircalm.xcartpro.com/r1/images/why2.png" />
                            <div class="item-descr">
                                <h4>Плащане</h4>
                                <p>Плащане на стоката - в брой, в момента на доставката.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="order" id="order">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="main-headline">AirCalm - осигурява свеж въздух и приятни аромати</h3>
                    <div class="price-wrapper price-mobile">
                        <div class="price"><span class="old">{{ $prices[1]['originalPrice'] }}</span><span class="new">{{ $prices[1]['amount'] }} <sup>RSD.</sup></span>
                        </div>

                    </div>
                    <div class="product-wrapper">
                        <div class="bonus">
                            <p>+ подарък: бурканче с етерично масло</p>
                        </div>
                        <div class="img-wrapper">
                            <img src="http://aircalm.xcartpro.com/r1/images/product-order.png" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-wrapper price-desctop">
                        <div class="price"><span class="old">{{ $prices[1]['originalPrice'] }}</span><span class="new">{{ $prices[1]['amount'] }} <sup>RSD.</sup></span>
                        </div>

                    </div>
                    <div class="form-wrapper">
                        <div class="form">
                            <form method="post" action="#" id="form-signup_v1" name="form-signup_v1" class="validation-form-container main-form">
                                <div class="row">
                                    <div class="wrapper">
                                        <div class="field">
                                            <div class="ui left labeled input">
                                                <input id="signup_v1-username" name="name" type="text" placeholder="Име">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrapper ">
                                        <div class="field">
                                            <div class="ui left labeled input">
                                                <input id="signup_v1-password" data-orderphone placeholder="Телефон" name="phone" type="tel" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrapper">
                                        <button type="submit" class="ui blue submit button" data-ordersubmit>Поръчайте</button>
                                    </div>
                                    <div class="wrapper">
                                        <p>* Операторите ще се свържат с вас възможно най-скоро, за да уточнят подробностите и да отговорят на Вашите въпроси.</p>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="remodal-wrapper">
        <div class="modal-wrapper">
            <div class="remodal-wrapper">
                <div data-remodal-id="koktejl" class="remodal">
                    <button data-remodal-action="close" class="remodal-close"></button>
                    <div class="video-container">
                        <video class="center video" loop="" controls="controls" poster="#" controlsList="nodownload" autoplay>
                            <source src="http://aircalm.xcartpro.com/r1/video/aircalm.mp4" type="video/mp4">Your browser does not support the video tag.</video>
                        <div class="playpause"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-sm-offset-1">
                <a href="#" class="logo"></a>
            </div>

        </div>
    </div>
    <a href="#main-section" class="btn-scroll"></a>

    <script src="http://aircalm.xcartpro.com/r1/js/libs/Scroll2id.min.js" type="text/javascript"></script>
    <script src="http://aircalm.xcartpro.com/r1/js/libs/owl.carousel.min.js" type="text/javascript"></script>
    <script src="http://aircalm.xcartpro.com/r1/js/libs/select.js" type="text/javascript"></script>
    <script src="http://aircalm.xcartpro.com/r1/js/libs/remodal.min.js" type="text/javascript"></script>
    <script src="http://aircalm.xcartpro.com/r1/js/libs/slick.min.js" type="text/javascript"></script>
    <script src="http://aircalm.xcartpro.com/r1/js/libs/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="http://aircalm.xcartpro.com/r1/js/scripts.min.js" type="text/javascript"></script>
</footer>
@include('components.pixel_footer')
</body>
</html>