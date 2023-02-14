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
                    LEPA, NEŽNA STOPALA I PETE
                    <span>BEZ IRITACIJE I CRVENILA</span>
                </p>
            </div>
            <div class="left_form_block_info_first_hiddrn">
                FOOT <span>WIPSTER</span>
                <br/> Za ženstvene i blistave pete
            </div>
            <div class="left_img">
                <img src="{{ asset('/') }}purplerelaxFiles/footwipster/block02.png" alt="">
            </div>
            <div class="left_form_block">
                <div class="left_form_block_info">
                    <div class="left_form_block_info_first">
                        FOOT <br/> <span>WIPSTER</span>
                        <br/> Za ženstvene
                        <br/> i blistave
                        <br/> pete
                    </div>
                    <div class="left_form_block_info_price">
                        Cena na akciji
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
                                        <h2>Unesite podatke za dostavu</h2>
                                        <p class="float">
                                            <input type="text" name="name" value="" placeholder="Ime i prezime" required>
                                        </p>
                                        <p class="float">
                                            <input type="text" name="phone" id="phone" value="" class="jSalePhone" placeholder="Telefon" required>
                                        </p>
                                        <p class="submit">
                                            <input type="submit" name="order_submit" value="Porucite" class="jSaleSubmit jSaleButton jSaleLarge">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#jsale_form_3" class="order_popup">Porucite sada</a>
    </div>
    <div class="block2">
        <div class="container">
            <div class="block_title">ZABORAVITE NEŽELJENA DEJSTVA</div>
            <ul class="block2_list">
                <li class="hair_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/footwipster/hair1.png" alt="">
                    <span class="hair_item_text">Nema <br> grubih peta</span>
                </li>
                <li class="hair_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/footwipster/hair2.png" alt="">
                    <span class="hair_item_text">Nema žutih <br> i ispucalih peta</span>
                </li>
                <li class="separator"></li>
                <li class="hair_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/footwipster/hair3.png" alt="">
                    <span class="hair_item_text">Ženstvena <br> i privlačna stopala</span>
                </li>
                <li class="hair_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/footwipster/hair4.png" alt="">
                    <span class="hair_item_text">Samouvereno <br> u letnjoj obući</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="block3">
        <div class="container">
            <div class="block_title">BUDITE NEŽNE I ZADOVOLJNE</div>
            <div class="block3_intro">NIŠTA NE DAJE ŽENI TOLIKO SAMOPOUZDANJA I ŽENSTVENOSTI KAO NEŽNA I LEPA STOPALA U LETNJOJ OBUĆI.</div>
            <div class="red_title">Kako do lepih i nežnih stopala? </div>
            <ul class="block3_list">
                <li class="block3_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/footwipster/item1.png" alt="">
                    <p class="block3_item_info">
                        Nakvašena stopala nežno trljajte <span>Foot Wipsterom</span>
                    </p>
                </li>
                <li class="block3_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch/item2.png" alt="">
                    <p class="block3_item_info">
                        Istrljajte stopala kupkom i isperite <span>toplom vodom</span>
                    </p>
                </li>
                <li class="block3_item">
                    <img src="{{ asset('/') }}purplerelaxFiles/finishingtouch/item3.png" alt="">
                    <p class="block3_item_info">
                        Namažite svoje nežne noge željenom kremom i <span>uživajte u nežnosti</span>
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
            <div class="block_title">FOOT WIPSTER - ZA ŽENSTVENA I NEŽNA STOPALA</div>
            <div class="oh">
                <div class="block6_left">
                    <div class="order_form_two">
                        <div class="grin_form_title">Iskoristite ponudu</div>
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
                                        <h2>Unesite podatke za dostavu</h2>
                                        <p class="float">
                                            <input type="text" name="name" value="" placeholder="Ime i prezime" required>
                                        </p>
                                        <p class="float">
                                            <input type="text" name="phone" id="phone" value="" class="jSalePhone" placeholder="Telefon" required>
                                        </p>
                                        <p class="submit">
                                            <input type="submit" name="order_submit" value="Porucite" class="jSaleSubmit jSaleButton jSaleLarge">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block6_right">
                    <ul class="garant_list">
                        <li class="garant_item">Uklanja sve mrtve ćelije sa kože</li>
                        <li class="garant_item">Zaboravićete na bolne metode čišćenja stopala i peta</li>
                        <li class="garant_item">Sjajna i menaka stopala za 5 minuta</li>
                        <li class="garant_item">Podarite nekome nežne dodire svojim stopalima</li>
                        <li class="garant_item">Koristi ga većina influenserki</li>
                        <li class="garant_item">Najprodavaniji proizvod za negu stopala u Evropi</li>
                    </ul>
                </div>
            </div>
            <a href="#jsale_form_3" class="order_popup_two">Porucite sada</a>
        </div>
    </div>
</main>
<footer class="footer">
    <div class="container">
        <div class="left_footer">
            <div class="footer_line1">FOOT WIPSTER</div>
            <div class="footer_line2">Nežne, glatke i ženstvene pete i stopala</div>
            <div class="footer_line3">OSECAJTE SE PREFINJENO I ZAVODLJIVO</div>
            <div class="footer_line4">Poručite Foot Wipster odmah <br> sa 40% popusta</div>
            <div class="footer_line5">
                Cena na akciji
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
                                    <h2>Unesite podatke za dostavu</h2>
                                    <p class="float">
                                        <input type="text" name="name" value="" placeholder="Ime i prezime" required>
                                    </p>
                                    <p class="float">
                                        <input type="text" name="phone" id="phone" value="" class="jSalePhone" placeholder="Telefon" required>
                                    </p>
                                    <p class="submit">
                                        <input type="submit" name="order_submit" value="Porucite" class="jSaleSubmit jSaleButton jSaleLarge">
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
