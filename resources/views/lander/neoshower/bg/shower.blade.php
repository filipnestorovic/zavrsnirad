<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="{{ asset('/') }}neoshowerFiles/shared_files/neoshower_favicon.png" rel="icon" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="{{ asset('/') }}neoshowerFiles/tus/site.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}neoshowerFiles/tus/pre-1-aov.min.css">
    <style>
        @media only screen and (max-width: 600px) {
            #sliderText {
                padding-top: 80px;
            }
        }
    </style>
</head>
<body class="pretemplate pre-1">
<div class="wrapper">
    <main>
        <section class="section-1">
            <div class="container">
                <div class="">
                    <div class="logo">
                        <a href=""><img src="{{ asset('/') }}neoshowerFiles/shared_files/neoshower-logo-white.png" alt="" class="b-loaded"></a>
                    </div>
                    <div class="w_button offer-text">
                        <a href="">
                            <span>НЕ ПРОПУСКАЙ <b>40%</b> НАМАЛЕНИЕ</span>
                        </a>
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-2">
            <div class="container">
                <div class="">
                    <div id="sliderText" class="wysiwyg-content flex-column">
                        <h1><span>NEOSHOWER</span></h1>
                        <h4><span>Спаси се от вредната твърда вода и от високите сметки за вода</span></h4>
                        <div class="cta_order"><a class="tracking-link" href="{{$checkoutView}}">КУПИ СЕГА</a></div>
                    </div>
                    <div class="justify-image" style="margin-top: 0px; padding:50px;">
                        <img src="{{ asset('/') }}neoshowerFiles/tus/header_tus.png" alt="tus" class="b-loaded">
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                    </div> <!--/span-->
                    <div class="col-md-4">
                    </div> <!--/span-->
                </div> <!--/row-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-4">
            <div class="container">
                <div class="">
                    <div class="one-column">
                        <div class="wysiwyg-content section-tagline ">
                            <h4 style="text-align: center;">Neoshower: Освежи своята кожа</h4>
                            <p style="text-align: center;">Когато се къпеш, варовита вода изсушава твоята кожа и коса. Водата от душа често съдържа хлор и други вредни химикали, които могат да доведат до сериозни медицински последици.</p>
                            <p style="text-align: center;">Кожни проблеми като акне, дерматит, екзема и псориазис се свързват с варовитата вода. Изследване от 2006 година показва, че миенето с варовита вода дори може да увеличи риска от рак повече, отколкото, когато се пие същата тази вода!</p>
                            <p style="text-align: center;">Ето защо създадохме този душ...</p>
                            <p style="text-align: center;">Neoshower е лесен и достъпен начин да възвърнеш водата до чисто, натурално състояние. Първо, той филтрира хлора и другите вредни минерали, и след това връща водата към здравословна pH стойност. Твоята кожа ще ти бъде благодарна!</p>
                            <p style="text-align: center;">В допълнение, Neoshower намалява разхода на вода без да намалява налягането, което носи спестявания за сметките за вода. Чудесно и за кожата, и за портфейла!</p>
                        </div>
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-5">
            <div class="container">
                <div class="">
                    <div class="ct_jumbotron feature_item">
                        <picture class="ct_thumb_wrap ct_thumb">
                            <div class="ct_thumb">
                                <img src="{{ asset('/') }}neoshowerFiles/tus/icon-img1.jpg" alt="icon1" class="b-loaded">
                            </div>
                        </picture>
                        <div class="w_title">
                            <h3><img src="{{ asset('/') }}neoshowerFiles/tus/checkmark.jpg" width="25px">Алкална филтрация</h3>
                        </div>
                        <div class="ct_content">
                            <div class="bodyContent">
                                <p>Neoshower премахва хлора и носи на водата перфектно pH ниво, което прави вашата кожа и коса чудесни.</p>
                            </div>
                        </div>
                    </div>
                    <div class="ct_jumbotron feature_item">
                        <picture class="ct_thumb_wrap ct_thumb">
                            <div class="ct_thumb">
                                <img src="{{ asset('/') }}neoshowerFiles/tus/icon-img2.jpg" alt="icon2" class="b-loaded">
                            </div>
                        </picture>
                        <div class="w_title">
                            <h3><img src="{{ asset('/') }}neoshowerFiles/tus/checkmark.jpg" width="25px">SmartPressure<sup>™</sup> система</h3>
                        </div>
                        <div class="ct_content">
                            <div class="bodyContent">
                                <p><span>Спестява пари и запазва планетата!Намалявайки разхода на вода без да се жертва налягането на водата.</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="ct_jumbotron feature_item">
                        <picture class="ct_thumb_wrap ct_thumb">
                            <div class="ct_thumb">
                                <img src="{{ asset('/') }}neoshowerFiles/tus/icon-img3.jpg" alt="icon3" class="b-loaded">
                            </div>
                        </picture>
                        <div class="w_title">
                            <h3><img src="{{ asset('/') }}neoshowerFiles/tus/checkmark.jpg" width="25px">Регулиране струята на водата</h3>
                        </div>
                        <div class="ct_content">
                            <div class="bodyContent">
                                <p><span>3 различни струи (дъжд, масаж и комбинирана) ще се погрижат за вашето приятно чувство и почистваща сила!</span></p>
                            </div>
                        </div>
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-6">
            <div class="container">
                <div class="">
                    <div class="title_h2">
                        <h2 class="title">- Рецензии на нашите клиенти -</h2>
                    </div>
                    <div class="ct_jumbotron testimonial_item">
                        <picture class="ct_thumb_wrap ct_thumb">
                            <div class="ct_thumb">
                                <img src="{{ asset('/') }}neoshowerFiles/tus/p1.jpg" alt="review1" class="b-loaded">
                            </div>
                        </picture>
                        <div class="ct_content">
                            <div class="bodyContent">
                                <p><em><strong>"Имах дерматит години наред. Изпробвах кожни кремове, промених диетата си, и дори източна медицина, но само този душ ми помогна. Сега моята кожа не е толкова суха и не ме сърби, освен ако не е изключително горещо навън. И най-после мога да тичам отново!"</strong></em></p>
                                <p style="text-align: right;"><strong>Мария, Пловдив</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="ct_jumbotron testimonial_item">
                        <picture class="ct_thumb_wrap ct_thumb">
                            <div class="ct_thumb">
                                <img src="{{ asset('/') }}neoshowerFiles/tus/p2.jpg" alt="review2" class="b-loaded">
                            </div>
                        </picture>
                        <div class="ct_content">
                            <div class="bodyContent">
                                <p><em><strong>"Купих този душ, защото някой ми каза, че би ме спасил много от сметките за вода. В началото бях леко скептична, но откакто го използваме, нашата сметка за вода е с почти 10% надолу. Може би е така, защото аз си взимам дълги душове, но този душ определено излезе сполучлив след няколко месеца, така че определено си заслужаваше."</strong></em></p>
                                <p style="text-align: right;"><strong>Васил, Бургас</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="ct_jumbotron testimonial_item">
                        <picture class="ct_thumb_wrap ct_thumb">
                            <div class="ct_thumb">
                                <img src="{{ asset('/') }}neoshowerFiles/tus/p3.jpg" alt="review3" class="b-loaded">
                            </div>
                        </picture>
                        <div class="ct_content">
                            <div class="bodyContent">
                                <p><em><strong>"Никога съм нямала по-добър душ от този! Моят единствен въпрос е как съм могла да живея без него досега?!"</strong></em></p>
                                <p style="text-align: right;"><strong>Олга, София</strong></p>
                            </div>
                        </div>
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-7">
            <div class="container">
                <div class="">
                    <div class="wysiwyg-content box_content ">
                        <h3><span>Възстанови своята кожа с Neoshower, най-добрият самофилтриращ екологичен душ в света!</span></h3>
                        <p><span>Възползвай се от нашето намаление с до 40%, ограничена наличност!</span></p>
                        <div class="cta_order"><a class="btn-order tracking-link" href="{{$checkoutView}}"><span>Искам 40% намаление!</span></a></div>
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-8">
            <div class="container">
                <div class="">
                    <div class="wysiwyg-content">
                        <div class="DMCA_Logo" style="text-align: center;">
                            <a class="no-tracking">
                                <img src="{{ asset('/') }}shared_files/dmca.png" alt="DMCA Protection" class="b-loaded">
                            </a>
                        </div>
                    </div>
                    <div class="wysiwyg-content link-ft">
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-9">
            <div class="container">
                <div class="">
                    <div class="wysiwyg-content floating_bar floating-ft">
                        <p><span>Не пропускайте специалната отстъпка</span></p>
                        <div class="cta_order"><a href="{{$checkoutView}}" class="tracking-link">Искам 40% намаление!<span></span></a></div>
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-10">
            <div class="container">
                <div class="">
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-11">
            <div class="container">
                <div class="">
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
    </main>
</div>
@include('components.pixel_footer')
<script src="{{ asset('/') }}neoshowerFiles/tus/pre-1-aov.min.js.download"></script>
</body>