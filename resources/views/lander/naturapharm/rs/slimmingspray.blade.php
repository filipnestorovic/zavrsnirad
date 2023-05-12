<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="ie=edge" http-equiv="X-UA-Compatible"/>
    <link href="{{ asset('/') }}naturapharmFiles/slimmingspray/bootstrap.min.css" rel="stylesheet"/>
    <link href="{{ asset('/') }}naturapharmFiles/slimmingspray/normalize.css" rel="stylesheet"/>
    <link href="{{ asset('/') }}naturapharmFiles/slimmingspray/style.css" rel="stylesheet"/>
</head>
<body>
<div class="wrapper">
    @include('components.display_errors')
    <div class="block1">
        <div class="container pr">
            <img alt="" class="block1__woman" src="{{ asset('/') }}naturapharmFiles/slimmingspray/block1__woman.png"/>
            <div class="row">
                <div class="col-md-6 col-md-offset-6">
                    <div class="title">
                        <span> Slimming spray </span>
                    </div>
                    <div class="subtitle"></div>
                    <div class="block1__minus pr"></div>
                    <div class="block1__days">Brzo i lako gubljenje težine uz pomoć spreja za mršavljenje!</div>

                    <div class="price">
                        <div class="price__old">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</div>
                        <div class="price__new">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}*</div>
                    </div>
                    <button class="button toform" type="button">PORUČITE SADA</button>
                    <div class="product">

                    </div>
                </div>
            </div>
        </div>
        <div class="block1__bottom-bg"></div>
    </div>
    <div class="block2">
        <div class="container pr">
            <div class="image-hidden-container">
                <img alt="" class="block2__woman"
                     src="{{ asset('/') }}naturapharmFiles/slimmingspray/block2__woman.png"/>
            </div>
            <ul class="block2__list">
                <li>
                    <div>sagoreva</div>
                    telesnu masnoću
                </li>
                <li>
                    <div>poboljšava</div>
                    tonus kože
                </li>
                <li>
                    <div>izbacuje</div>
                    višak vode iz tela
                </li>
                <li>
                    <div>gubitak težine</div>
                    i izbacivanje toksina
                </li>
            </ul>
        </div>
    </div>

    <div class="block4 pr">
        <div class="container">
            <div class="title-big">KAKO SE KORISTI?</div>
            <div class="block4__promo">
                <div class="hide-on-wap">
                    <div class="block4__promo-title">
                        <span> Slimming spray</span>
                    </div>
                    <p class="block4__top">
                        Naprskajte ujutru i uveče sprej na željeno područje, masirajte u pravcu kazaljke na satu dok se sadržaj skroz ne apsorbuje u kožu.
                    </p>
                    <p class="block4__bottom"></p>
                </div>
                <div class="block4__bottom hide-on-web">
                    Naprskajte ujutru i uveče sprej na željeno područje, masirajte u pravcu kazaljke na satu dok se sadržaj skroz ne apsorbuje u kožu.
                </div>
            </div>
        </div>
        <img alt="" class="block4__light" src="{{ asset('/') }}naturapharmFiles/slimmingspray/block4__light.png"/>
    </div>
    <div class="block5">
        <div class="container pr">
            <img alt="" class="block5__skin" src="{{ asset('/') }}naturapharmFiles/slimmingspray/block5__skin.png"/>
            <div class="block5__logo">
                <div class="block5__logo-wrap">
                    <div></div>
                </div>
            </div>
            <div class="block5__center">
                <div class="block5__fats">
                    <span> Slimming spray </span>
                </div>
                <div class="block5__effect clearfix">
                    <div class="block5__before">
                        PRE
                    </div>
                    <div class="block5__after">
                        POSLE
                    </div>
                </div>
            </div>
{{--            <div class="title">--}}
{{--                أحماض الفاكهة--}}
{{--            </div>--}}
{{--            <p class="block5__text">--}}
{{--                تسحتوي Slimming spray على تركيز عالي من القهوة الخضراء التي تكسر الروابط الجزيئية للخلايا الدهنية--}}
{{--                ويتسارع انقسامها. تعمل هذه الأداة على تحفيز عملية الهضم وتسريع عملية التمثيل الغذائي.--}}
{{--            </p>--}}
        </div>
    </div>
    <div class="block6">
        <div class="container">
            <div class="block6__left">
                <div class="title green-bg">
                    <div>Slimming spray</div>
                </div>
                <div class="subtitle">

                    <div></div>
                </div>
                <div class="block6__descr hide-on-wap">
                    <div class="block6__descr-logo">
                        <span> <div></div> </span>
                    </div>
                    Amino kiseline zelene kafe biće najaktivnije na mestima sa najvećom koncentracijom masnih ćelija: na rukama, butinama, zadnjici, donjem delu leđa
                </div>
            </div>
            <div class="pr block6__right">
                <div class="block5__item">
                    <img alt="" src="{{ asset('/') }}naturapharmFiles/slimmingspray/block6__i1.png"/>
                    <div>ruke</div>
                </div>
                <div class="block5__item">
                    <img alt="" src="{{ asset('/') }}naturapharmFiles/slimmingspray/block6__i2.png"/>
                    <div>butine i stomak</div>
                </div>
                <div class="block5__item">
                    <img alt="" src="{{ asset('/') }}naturapharmFiles/slimmingspray/block6__i3.png"/>
                    <div>noge</div>
                </div>
                <img alt="" class="block6__woman"
                     src="{{ asset('/') }}naturapharmFiles/slimmingspray/block6__woman.png"/>
                <div class="mobile-in__text">
                    Amino kiseline zelene kafe biće najaktivnije na mestima sa najvećom koncentracijom masnih ćelija: na rukama, butinama, zadnjici, donjem delu leđa
                </div>
            </div>
        </div>
    </div>
    <div class="block7 pr">
        <div class="block7__header"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="title green-bg">
                        <div>Slimming spray</div>
                    </div>
                    <img alt="" class="block7__prod" src="{{ asset('/') }}naturapharmFiles/slimmingspray/product.png"/>
                </div>
                <div class="col-md-4">
                    <div class="block7__title">
                        Budite spremni
                    </div>
                    <div class="block7__subtitle">
                        za bikini i more
                    </div>
                    <button class="button toform" type="button">PORUČITE SADA</button>
                    <ul class="block7__list">
                        <li>
                            POUZDAN EFEKAT
                        </li>
                        <li>
                            ELIMINIŠE MASNOĆU
                        </li>
                        <li>
                            SKIDA STOMAK
                        </li>
                        <li>
                            SKIDA BUTINE
                        </li>
                    </ul>
                </div>
                <img alt="" class="block7__woman"
                     src="{{ asset('/') }}naturapharmFiles/slimmingspray/block7__woman.png"/>
            </div>
        </div>
    </div>
{{--    <div class="block8">--}}
{{--        <div class="container">--}}
{{--            <div class="title green-bg">--}}
{{--                <div>Slimming spray</div>--}}
{{--            </div>--}}
{{--            <div class="subtitle">نتائج باهرة مند الشهر الأول بفضل المكونات الطبيعية 100%</div>--}}

{{--            <div class="row">--}}
{{--                <div class="block8__item col-md-3">--}}
{{--                    <img alt="" class="block8__item-img"--}}
{{--                         src="{{ asset('/') }}naturapharmFiles/slimmingspray/block8__i1.png"/>--}}
{{--                    <div class="block8__item-txt">--}}
{{--                        <div>الأحماض الطبيعية</div>--}}
{{--                        التي تحارب الرواسب الدهنية المتراكمة في الجسم في البطن والأرداف--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="block8__item col-md-3">--}}
{{--                    <img alt="" class="block8__item-img"--}}
{{--                         src="{{ asset('/') }}naturapharmFiles/slimmingspray/block8__i2.png"/>--}}
{{--                    <div class="block8__item-txt">--}}
{{--                        <div>حمض الكلوروجينيك</div>--}}
{{--                        وهو جزء من عملية تقسيم الغدد التي تحفز الغدة وتكسر الدهون في جميع أنحاء الجسم.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="block8__item col-md-3">--}}
{{--                    <img alt="" class="block8__item-img"--}}
{{--                         src="{{ asset('/') }}naturapharmFiles/slimmingspray/block8__i3.png"/>--}}
{{--                    <div class="block8__item-txt">--}}
{{--                        <div>هلام الصبار المركز</div>--}}
{{--                        هلام الصبار المركز يستعمل لفقدان الوزن الزائد للتخلص من الدهون الزائدة في الجسم--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="block8__item col-md-3">--}}
{{--                    <img alt="" class="block8__item-img"--}}
{{--                         src="{{ asset('/') }}naturapharmFiles/slimmingspray/block8__i4.png"/>--}}
{{--                    <div class="block8__item-txt">--}}
{{--                        <div>القهوة الخضراء</div>--}}
{{--                        يكون لها تأثير مفيد على الجهاز العصبي وتكسر الدهون المتراكمة في الأوعية الدموية والشرايين في--}}
{{--                        القلب.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="block9">
        <div class="container pr">
            <div class="row">
                <div class="col-xs-4 col-md-4">
                    <div class="title green-bg">
                        <div>SLIMMING SPRAY</div>
                    </div>
                    <img alt="" class="block9__prod" src="{{ asset('/') }}naturapharmFiles/slimmingspray/product.png"/>
                </div>
                <div class="block9__center col-xs-8 col-md-5">
                    <div class="block9__title">POČNI ODMAH</div>
                    <div class="block9__subtitle">Sa pripremom tela za leto</div>
                    <button class="button toform">PORUČI SADA</button>
                </div>
            </div>
            <img alt="" class="block9__woman" src="{{ asset('/') }}naturapharmFiles/slimmingspray/block9__woman.png"/>
        </div>
    </div>
{{--    <div class="block10">--}}
{{--        <div class="container">--}}
{{--            <div class="title">--}}
{{--                <div>Slimming spray</div>--}}
{{--                تدخل جزيئات القهوة الخضراء في الجهاز الهضمي--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="block10__item col-md-3">--}}
{{--                    <img alt="" src="{{ asset('/') }}naturapharmFiles/slimmingspray/block10__i1.jpg"/>--}}
{{--                    <div class="block10__item-txt">--}}
{{--                        يدخل الدهون في الجهاز الهضمي بالطعام>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="block10__item col-md-3">--}}
{{--                    <img alt="" src="{{ asset('/') }}naturapharmFiles/slimmingspray/block10__i2.jpg"/>--}}
{{--                    <div class="block10__item-txt">--}}
{{--                        القهوة الخضراء ، مثل المغناطيس الذي يجذب الدهون--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="block10__item col-md-3">--}}
{{--                    <img alt="" src="{{ asset('/') }}naturapharmFiles/slimmingspray/block10__i3.jpg"/>--}}
{{--                    <div class="block10__item-txt"><span> Slimming spray, </span> تتم إزالة الدهون مع الطعام من</div>--}}
{{--                </div>--}}
{{--                <div class="block10__item col-md-3">--}}
{{--                    <img alt="" src="{{ asset('/') }}naturapharmFiles/slimmingspray/block10__i4.jpg"/>--}}
{{--                    <div class="block10__item-txt">--}}
{{--                        تتم إزالة الدهون مع الطعام من--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="block11">
        <div class="container">
            <div class="title">
                <div>REZULTATI </div>
                TESTIRANJA
            </div>
            <div class="chart">
                <div>
                    <div class="chart__line">
                        <div class="chart__y">4</div>
                    </div>
                    <div class="chart__line">
                        <div class="chart__y">2</div>
                    </div>
                    <div class="chart__line">
                        <div class="chart__y">0</div>
                    </div>
                </div>
                <div class="chart__col chart__col--1">
                    <div class="chart__col-text">
                        <div>1300</div>
                        kalorija dnevno
                    </div>
                    <div class="chart__bar chart__bar--first"></div>
                </div>
                <div class="chart__col chart__col--2">
                    <div class="chart__col-text">
                        <div>3700</div>
                        kalorija dnevno
                    </div>
                    <div class="chart__bar chart__bar--second"></div>
                </div>
                <img alt="" class="block11__prod" src="{{ asset('/') }}naturapharmFiles/slimmingspray/product.png"/>
            </div>
            <div class="chart-text clearfix">
                <div class="chart__bottom-txt">
                    drugi proizvodi za mršavljenje
                </div>
                <div class="chart__bottom-txt chart__bottom-txt-2">
                    <span> Slimming spray </span>
                </div>
            </div>
        </div>
    </div>
    <div class="block12">
        <div class="container">
            <div class="title green-bg">
                <div>Slimming spray</div>
            </div>
            <div class="subtitle">
                UTISCI
                <div> NAŠIH KUPACA</div>
            </div>
            <div class="review-slider" style="display: flex; flex-wrap: wrap;">
                <div class="rw-slide-inner">
                    <div class="review-name">
                        <img alt="" class="review-avatar"
                             src="{{ asset('/') }}naturapharmFiles/slimmingspray/ava_1.png"/>
                        <span>
                            Marija
                            <i>Ivanjica</i>
                        </span>
                    </div>
                    <img alt="" class="review-image"
                         src="{{ asset('/') }}naturapharmFiles/slimmingspray/comment_1.jpg"/>
                    <p>
                        Za 3 nedelje 8 kg! Nastaviću da koristim ovaj sprej. Želim da izgubim dodatnih 5 kg!
                    </p>
                </div>
                <div class="rw-slide-inner">
                    <div class="review-name">
                        <img alt="" class="review-avatar"
                             src="{{ asset('/') }}naturapharmFiles/slimmingspray/ava_3.png"/>
                        <span>
                            Lena
                            <i>Beograd</i>
                        </span>
                    </div>
                    <img alt="" class="review-image"
                         src="{{ asset('/') }}naturapharmFiles/slimmingspray/comment_3.jpg"/>
                    <p>
                        Za pola godine 17 kg. Nemam vremena za vežbanje, ne volim dijetu. Moj dečko mi ne veruje da ne treniram i ne pijem nikakve suplemente.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="block13 pr">
        <div class="container pr">
            <img alt="" class="block13__woman hide-on-wap"
                 src="{{ asset('/') }}naturapharmFiles/slimmingspray/block13__woman.png"/>
            <div class="row">
                <div class="col-md-6 col-md-offset-2">
                    <div class="block13__mobile-padding">
                        <div class="title">
                            <span>&nbsp;</span>
                        </div>
                        <div class="subtitle">&nbsp;</div>
                        <div class="title green-bg">
                            <div>Slimming spray</div>
                        </div>
                        <div class="block13__discount">
                            - 40%
                        </div>
                    </div>
                    <div class="block13__price">
                        <div class="price">
                            <div class="price__old">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</div>
                            <div class="price__new">{{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}*</div>
                        </div>
                    </div>
                    <div class="product">
                        <img alt="" class="poroduct__image" style="margin-right: 250px; margin-top: -40px;"
                             src="{{ asset('/') }}naturapharmFiles/slimmingspray/product.png"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- AD_Form -->
                    <form action="{{$orderRoute}}" class="orderForm main_form" method="POST">
                        {{ csrf_field() }}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <input class="main_form__inp" style="margin-top: 20px;" name="name" placeholder="Ime i prezime" type="text" required/>
                        <input class="main_form__inp only_number" name="phone" placeholder="Telefon" type="tel" required/>
                        <button type="submit" class="button order_button">PORUČITE SADA</button>
                    </form>
                    <!-- AD_Form-end -->
                </div>
            </div>
        </div>
        <div class="block13__bottom-wrap">
            <img alt="" class="block13__woman-mobile hide-on-web"
                 src="{{ asset('/') }}naturapharmFiles/slimmingspray/block13__woman.png"/>
            <div class="block13__bottom-bg"></div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}naturapharmFiles/slimmingspray/main.js"></script>
@include('components.pixel_footer')
</body>
</html>
