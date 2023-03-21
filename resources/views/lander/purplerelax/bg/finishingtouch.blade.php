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
</head>
<body>
<header class="header">
    <div class="container">
        <a href="#jsale_form_3" class="logo">
            <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch/logo.png" alt="logo">
        </a>
        <a href="#jsale_form_3" class="logo logo_min">
            <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch/logo.png" alt="logo">
        </a>
        <a href="#jsale_form_3" class="header_order">ПОРЪЧАЙ СЕГА</a>
    </div>
</header>
@include('components.display_errors')
<main class="main">
    <div class="block1">
        <div class="container">
            <div class="left_form_block_title">
                <p class="block1_title">
                    ЕФЕКТИВНА И БЕЗБОЛЕЗНЕНА ЕПИЛАЦИЯ ДОРИ И В НАЙ-ЧУВСТВИТЕЛНИТЕ ЗОНИ
                    <span>БЕЗ РАЗДРАЗНЕНИЕ И ЗАЧЕРВЯВАНЕ</span>
                </p>
            </div>
            <div class="left_form_block_info_first_hiddrn">
                <span>ДА!</span> Възможно е да!
            </div>
            <div class="left_img">
                <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch/block02.png" alt="">
            </div>
            <div class="left_form_block">
                <div class="left_form_block_info">
                    <div class="left_form_block_info_first">
                        <span>ДА!</span> Възможно е да!
                    </div>
                    <div class="left_form_block_info_price">
                        ЦЕНА СЕГА
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
                                        <h2>ВЪВЕДЕТЕ ДАННИ ЗА ДОСТАВКА</h2>
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
                                            <input type="submit" name="order_submit" value="ПОРЪЧАЙ" class="jSaleSubmit jSaleButton jSaleLarge">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#jsale_form_3" class="order_popup">ПОРЪЧАЙ СЕГА</a>
    </div>
    <div class="block2">
        <div class="container">
            <div class="block_title">ЗАБРАВЕТЕ НАПЪЛНО ЗА НЕЖЕЛАНОТО ОКОСМЯВАНЕ</div>
            <ul class="block2_list">
                <li class="hair_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch/hair1.png" alt="">
                    <span class="hair_item_text">ърху листата</span>
                </li>
                <li class="hair_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch/hair2.png" alt="">
                    <span class="hair_item_text">на ръцете</span>
                </li>
                <li class="separator"></li>
                <li class="hair_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch/hair3.png" alt="">
                    <span class="hair_item_text">в бикини зоната</span>
                </li>
                <li class="hair_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch/hair4.png" alt="">
                    <span class="hair_item_text">под мишницата</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="block3">
        <div class="container">
            <div class="block_title">БЪДЕТЕ НЕЖНИ И ИЗЯЩНИ!</div>
            <div class="block3_intro">НИЩО НЕ ПРИДАВА ТОЛКОВА ОЧАР НА ЖЕНАТА КОЛКОТО МЕКАТА И КАДИФЕНА КОЖА. МЪЖЕТЕ ПРОСТО СЕ ВЛЮБВАТ, КОГАТО Я ДОКОСНАТ.</div>
            <div class="red_title">Жените правят всичко, за да имат гладка кожа поне макар и за известно време:</div>
            <ul class="block3_list">
                <li class="block3_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch/item1.png" alt="">
                    <p class="block3_item_info">
                        <span>Бръснене</span> — раздразнение и пъпки след няколко часа, врастнали косми и суха кожа
                    </p>
                </li>
                <li class="block3_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch/item2.png" alt="">
                    <p class="block3_item_info">
                        <span>Депилиращи кремове</span> — неравномерно обезкосмяване, дразнене, възпаление и нагнояване на космените фоликули
                    </p>
                </li>
                <li class="block3_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch/item3.png" alt="">
                    <p class="block3_item_info">
                        <span>Кола маска</span> (на интимни места) — болка, сравнима с мъчение
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <div class="block4">
        <div class="container">
            <div class="block_title">КРАСОТАТА ВЕЧЕ НЕ ИЗИСКВА ЖЕРТВА!</div>
        </div>
    </div>
    <div class="block5">
        <div class="container">
            <div class="big_text">ДА!</div>
        </div>
    </div>
    <div class="block6">
        <div class="container">
            <div class="block_title">ДЕПИЛАТОР FINISHING TOUCH</div>
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
                                        <h2>ВЪВЕДЕТЕ ДАННИ ЗА ДОСТАВКА</h2>
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
                                            <input type="submit" name="order_submit" value="ПОРЪЧАЙ" class="jSaleSubmit jSaleButton jSaleLarge">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block6_right">
                    <ul class="garant_list">
                        <li class="garant_item">Премахва и най-късите косъмчета</li>
                        <li class="garant_item">Ще забравите за всички болезнени методи за обезкосмяване</li>
                        <li class="garant_item">Подходящ за всяко място</li>
                        <li class="garant_item">Няма повече драскотини, порязвания и изгаряния</li>
                        <li class="garant_item">Приятен за използване</li>
                        <li class="garant_item">Безопасен и подходящ за всеки тип кожа, дори и за най-чувствителната</li>
                    </ul>
                </div>
            </div>
            <a href="#jsale_form_3" class="order_popup_two">ПОРЪЧАЙ СЕГА</a>
        </div>
    </div>
</main>
<footer class="footer">
    <div class="container">
        <div class="left_footer">
            <div class="footer_line1">ДЕПИЛАТОР FINISHING TOUCH</div>
            <div class="footer_line2">НЕЖНА И ГЛАДКА КОЖА БЕЗ КОСЪМЧЕТА</div>
            <div class="footer_line3">ЧУВСТВАЙТЕ СЕ ЖЕЛАНИ И НЕУСТОИМИ!</div>
            <div class="footer_line4">Поръчайте депилатор сега с 40% отстъпка</div>
            <div class="footer_line5">
                Цена сега
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
                                    <h2>ВЪВЕДЕТЕ ДАННИ ЗА ДОСТАВКА</h2>
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
                                        <input type="submit" name="order_submit" value="ПОРЪЧАЙ" class="jSaleSubmit jSaleButton jSaleLarge">
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
