<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/finishingtouch/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/finishingtouch/jsale.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/finishingtouch/jsale13.css">
    <style>@font-face{font-family:'AGLettericaCondensedLight-Roman';src:url('{{ asset('/') }}fonts/AGLettericaCondensed-Bold.ttf');src:url('{{ asset('/') }}fonts/aglettericacondensedlight-roman.woff') format('woff'),url('{{ asset('/') }}fonts/AGLettericaCondensed-Light.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'AGLettericaCondensed-Roman';src:url('{{ asset('/') }}fonts/AGLettericaCondensed-Bold.ttf');src:url('{{ asset('/') }}fonts/aglettericacondensed-roman.woff') format('woff'),url('{{ asset('/') }}fonts/AGLettericaCondensed_Roman.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'AGLettericaCondensed-Bold';src:url('{{ asset('/') }}fonts/AGLettericaCondensed-Bold.ttf');src:url('{{ asset('/') }}fonts/aglettericacondensed-bold.woff') format('woff'),url('{{ asset('/') }}fonts/AGLettericaCondensed-Bold.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'open_sansbold';src:url('{{ asset('/') }}fonts/OpenSans-Boldd41d.eot');src:url('{{ asset('/') }}fonts/OpenSans-Boldd41d.eot')format('embedded-opentype'),url('{{ asset('/') }}fonts/OpenSans-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/OpenSans-Bold.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'open_sansregular';src:url('{{ asset('/') }}fonts/OpenSansd41d.eot');src:url('{{ asset('/') }}fonts/OpenSansd41d.eot') format('embedded-opentype'),url('{{ asset('/') }}fonts/OpenSans.woff') format('woff'),url('{{ asset('/') }}fonts/OpenSans.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'open_sansitalic';src:url('{{ asset('/') }}fonts/OpenSans-Italicd41d.eot');src:url('{{ asset('/') }}fonts/OpenSans-Italicd41d.eot') format('embedded-opentype'),url('{{ asset('/') }}fonts/OpenSans-Italic.woff') format('woff'),url('{{ asset('/') }}fonts/OpenSans-Italic.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:EndurancePro-Cond;src:url({{asset('/')}}fonts/endurancepro-cond.eot@) format("eot"),url({{asset('/')}}fonts/endurancepro-cond.woff) format("woff"),url({{asset('/')}}fonts/endurancepro-cond.ttf) format("truetype"),url({{asset('/')}}fonts/endurancepro-cond.svg.xml#svgFontName) format("svg")}@font-face{font-family:EndurancePro-CondBold;src:url({{asset('/')}}fonts/endurancepro-condbold.eot@) format("eot"),url({{asset('/')}}fonts/endurancepro-condbold.woff) format("woff"),url({{asset('/')}}fonts/endurancepro-condbold.ttf) format("truetype"),url({{asset('/')}}fonts/endurancepro-condbold.svg.xml#svgFontName) format("svg")}@font-face{font-family:cbh-icons;src:url({{asset('/')}}fonts/cbh-icons.eot);src:url({{asset('/')}}fonts/cbh-icons.eot) format('embedded-opentype'),url({{asset('/')}}fonts/cbh-icons.woff) format('woff'),url({{asset('/')}}fonts/cbh-icons.ttf) format('truetype'),url({{asset('/')}}fonts/cbh-icons.svg.xml) format('svg');font-weight:400;font-style:normal}</style>
    <style>
        .left_img{
            float: left;
            width: 40%;
            margin-top: 200px;
            box-sizing: border-box;
        }
        .block1 {
            margin-top: 0;
        }
        .num_price_old {
            font-size: 20px;
        }
        @media all and (max-width: 1280px){
            .left_img {
                margin-top: 123px;
                padding-left: 4px;
                width: 38%;
            }
        }
        @media all and (max-width: 980px){
            .left_img {
                margin-top: 17px;
                padding-left: 35px;
                width: 62%;
            }
        }
        @media all and (max-width: 640px){
            .left_img {
                margin-top: 20px;
                padding-left: 2px;
                width: 64%;
            }
            .block1 {
                margin-top: 0 !important;
            }
            .block1 .order_popup{
                margin-top: 0;
            }
            .num_price span {
                font-size: 27px;
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<main class="main">
    <div class="block1">
        <div class="container">
            <div class="left_form_block_title">
                <p class="block1_title">
                    За гладка и нежна кожа на краката,
                    <span>БЕЗ РАЗДРАЗНЕНИЕ И ЗАЧЕРВЯВАНЕ</span>
                </p>
            </div>
            <div class="left_form_block_info_first_hiddrn">
                FOOT <span>WIPSTER</span>
                <br/> За женствена
                и нежна кожа на стъпалата
            </div>
            <div class="left_img">
                <img src="{{ asset('/') }}purplerelaxFiles/footwipster/block02.png" alt="">
            </div>
            <div class="left_form_block">
                <div class="left_form_block_info">
                    <div class="left_form_block_info_first">
                        FOOT <br/> <span>WIPSTER</span>
                        <br/> За женствена
                        <br/> И нежна кожа
                        <br/> на стъпалата
                    </div>
                    <div class="left_form_block_info_price">
                        ПРОДАЖНА ЦЕНА
                        <span class="num_price">
                           <span class="price_land_s1">
                              {{ $prices[1]['amount'] }}
                           </span>
                           <span class="price_land_curr">
                              {{ $prices[1]['currency'] }}
                           </span>
                        </span>
                        <span class="num_price_old">
                           <span class="price_land_s4">
                              {{ $prices[1]['originalPrice'] }}
                           </span>
                           <span class="price_land_curr">
                              {{ $prices[1]['currency'] }}
                           </span>
                        </span>
                    </div>
                </div>
                <div class="order_form_one_wrap">
                    <div class="order_form_one">
                        <div class="jSale">
                            <div class="jSaleWrapper jSaleWrapper1">
                                <div class="padding-jsale">
                                    <form action="{{$orderRoute}}" method="post" onsubmit="" class="jSaleForm" id="jsale_form_1">
                                        {{ csrf_field() }}
                                        @include('lander.naturapharm.components.form_hidden_fields')
                                        <h2>Информация за доставка</h2>
                                        <p class="float">
                                            <input type="text" name="name" value="" placeholder="Име и фамилия" required>
                                        </p>
                                        <p class="float">
                                            <input type="text" name="phone" id="phone" value="" class="jSalePhone" placeholder="Телефон" required>
                                        </p>
                                        <p class="float">
                                            <input type="text" name="shipping_address" value="" placeholder="Адрес" required>
                                        </p>
                                        <p class="float">
                                            <input type="text" name="shipping_city" value="" placeholder="Град" required>
                                        </p>
                                        <p class="submit">
                                            <input type="submit" name="order_submit" value="Поръчайте го" class="jSaleSubmit jSaleButton jSaleLarge">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#jsale_form_3" class="order_popup">Поръчай сега</a>
    </div>
    <div class="block2">
        <div class="container">
            <div class="block_title">ЗАБРАВЕТЕ СТРАНИЧНИТЕ ЕФЕКТИ</div>
            <ul class="block2_list">
                <li class="hair_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/footwipster/hair1.png" alt="">
                    <span class="hair_item_text">Забравете груба кожа <br>от краката и петите ви</span>
                </li>
                <li class="hair_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/footwipster/hair2.png" alt="">
                    <span class="hair_item_text">няма вече жълти <br>и напукани пети</span>
                </li>
                <li class="separator"></li>
                <li class="hair_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/footwipster/hair3.png" alt="">
                    <span class="hair_item_text">Красиви <br>и привлекателни крака</span>
                </li>
                <li class="hair_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/footwipster/hair4.png" alt="">
                    <span class="hair_item_text">Да скочите с радост<br> в пролетно-летните <br>отворени обувки</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="block3">
        <div class="container">
            <div class="block_title">БЪДЕТЕ НЕЖНИ И ЗАДОВОЛЯВАЩИ</div>
            <div class="block3_intro">НИЩО НЕ ДАВА НА ЖЕНАТА ТОЛКОВА УВЕРЕНОСТ В СЕБЕ СИ, КОЛКОТО НЕЖНИТЕ И КРАСИВИ КРАКА В ЛЕТНИ ОБУВКИ.</div>
            <div class="red_title">Как да сдобием красиви и нежни крака?</div>
            <ul class="block3_list">
                <li class="block3_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/footwipster/item1.png" alt="">
                    <p class="block3_item_info">
                        Внимателно накиснете стъпалата си в топла вода и
                        изтъркайте краката си с <span>Foot Wipster</span>
                    </p>
                </li>
                <li class="block3_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch/item2.png" alt="">
                    <p class="block3_item_info">
                        Намажете краката си с вана и изплакнете с <span>топла вода</span>
                    </p>
                </li>
                <li class="block3_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch/item3.png" alt="">
                    <p class="block3_item_info">
                        Намажете нежните си крака с желания крем и <span>се насладете на нежността</span>
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <div class="block5">
        <div class="container">
            <div class="big_text">WIPSTER</div>
        </div>
    </div>
    <div class="block6">
        <div class="container">
            <div class="block_title">FOOT WIPSTER - ЗА ЖЕНСТВЕНИ И НЕЖНИ КРАКА</div>
            <div class="oh">
                <div class="block6_left">
                    <div class="order_form_two">
                        <div class="grin_form_title">Възползвайте се от офертата</div>
                        <span class="grin_form_subtitle"></span>
                        <span class="grin_form_price">
                           <span class="price_land_s1">
                              {{ $prices[1]['amount'] }}
                           </span>
                           <span class="price_land_curr">
                              {{ $prices[1]['currency'] }}
                           </span>
                        </span>
                        <span class="grin_form_price_old">
                           <span class="price_land_s4">
                              {{ $prices[1]['originalPrice'] }}
                           </span>
                           <span class="price_land_curr">
                              {{ $prices[1]['currency'] }}
                           </span>
                        </span>
                        <div class="jSale">
                            <div class="jSaleWrapper jSaleWrapper2">
                                <div class="padding-jsale">
                                    <form action="{{$orderRoute}}" method="post" class="jSaleForm" id="jsale_form_2">
                                        {{ csrf_field() }}
                                        @include('lander.naturapharm.components.form_hidden_fields')
                                        <h2>Информация за доставка</h2>
                                        <p class="float">
                                            <input type="text" name="name" value="" placeholder="Име и фамилия" required>
                                        </p>
                                        <p class="float">
                                            <input type="text" name="phone" id="phone" value="" class="jSalePhone" placeholder="Телефон" required>
                                        </p>
                                        <p class="float">
                                            <input type="text" name="shipping_address" value="" placeholder="Адрес" required>
                                        </p>
                                        <p class="float">
                                            <input type="text" name="shipping_city" value="" placeholder="Град" required>
                                        </p>
                                        <p class="submit">
                                            <input type="submit" name="order_submit" value="Поръчайте го" class="jSaleSubmit jSaleButton jSaleLarge">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block6_right">
                    <ul class="garant_list">
                        <li class="garant_item">Отстранява всички мъртви клетки от кожата</li>
                        <li class="garant_item">Ще забравите за болезнените методи за почистване на краката и петите</li>
                        <li class="garant_item">Блестящи и меки крака за само 5 минути</li>
                        <li class="garant_item">Подарете нежно докосване на някого с краката си</li>
                        <li class="garant_item">Повечето инфлуенсъри го използват</li>
                        <li class="garant_item">Най-продаваният продукт за грижа за краката в Европа</li>
                    </ul>
                </div>
            </div>
            <a href="#jsale_form_3" class="order_popup_two">Поръчай сега</a>
        </div>
    </div>
</main>
<footer class="footer">
    <div class="container">
        <div class="left_footer">
            <div class="footer_line1">FOOT WIPSTER</div>
            <div class="footer_line2">НЕЖНА И ГЛАДКА КОЖА НА СТЪПАЛАТА</div>
            <div class="footer_line3">ЧУВСТВАЙТЕ СЕ КРАСИВИ И УВЕРЕНИ</div>
            <div class="footer_line4">Поръчайте Foot Wipster сега <br> с 40% отстъпка</div>
            <div class="footer_line5">
                ПРОДАЖНА ЦЕНА
                <span class="footer_line5_1">
                     <span class="price_land_s1">
                        {{ $prices[1]['amount'] }}
                     </span>
                     <span class="price_land_curr">
                        {{ $prices[1]['currency'] }}
                     </span>
                  </span>
                <span class="footer_line5_1_old">
                     <span class="price_land_s4">
                        {{ $prices[1]['originalPrice'] }}
                     </span>
                     <span class="price_land_curr">
                        {{ $prices[1]['currency'] }}
                     </span>
                  </span>
            </div>
        </div>
        <br><br>
        <div class="right_footer">
            <div class="foot_form_one_wrap">
                <div class="order_form_one">
                    <div class="jSale">
                        <div class="jSaleWrapper jSaleWrapper3">
                            <div class="padding-jsale">
                                <form action="{{$orderRoute}}" method="post" class="jSaleForm" id="jsale_form_3">
                                    {{ csrf_field() }}
                                    @include('lander.naturapharm.components.form_hidden_fields')
                                    <h2>Информация за доставка</h2>
                                    <p class="float">
                                        <input type="text" name="name" value="" placeholder="Име и фамилия" required>
                                    </p>
                                    <p class="float">
                                        <input type="text" name="phone" id="phone" value="" class="jSalePhone" placeholder="Телефон" required>
                                    </p>
                                    <p class="float">
                                        <input type="text" name="shipping_address" value="" placeholder="Адрес" required>
                                    </p>
                                    <p class="float">
                                        <input type="text" name="shipping_city" value="" placeholder="Град" required>
                                    </p>
                                    <p class="submit">
                                        <input type="submit" name="order_submit" value="Поръчайте го" class="jSaleSubmit jSaleButton jSaleLarge">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot-info" style="text-align:center;font-size:14px;line-height:18px;font-family:'open_sansregular';">

    </div>
</footer>
@include('components.pixel_footer')
</body>
</html>
