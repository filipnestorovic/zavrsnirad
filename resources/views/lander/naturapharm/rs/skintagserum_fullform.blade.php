<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="icon" type="image/png" href="">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}naturapharmFiles/acnepatch/styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}naturapharmFiles/acnepatch/owl.carousel.min.css">
    <style type="text/css">.wrp{width:1000px;margin:0 auto}.header{text-align:center;border:1px dashed #ddd;padding:50px 0;margin:20px 0;font-size:18px}.block{text-align:center;border:1px dashed #ddd;padding:100px 0;margin-bottom:20px;font-size:18px;background:#eee}.header-menu-wrp{height:40px;line-height:40px;width:100%;background:#9f2c99;color:white}.header-menu-wrp.cloned{position:fixed;top:0;margin-top:0;z-index:9999;display:none}.header-menu{width:100%;display:table;border-left:1px solid #fff}.header-menu ul{display:table-row}.header-menu li{display:table-cell;float:none;border-right:1px solid #fff}.header-menu li.active{background:#761871}.header-menu li a{display:block;color:#fff;text-align:center;text-decoration:none}@media(min-width:640px) and (max-width:659px){.order_section .discount{display:none}.offer_section .triggers_block{display:none}.use_steps_section ul{width:300px}.order_section .main_title{font-size:16px;line-height:32px}.offer_section .main_title{font-size:16px;line-height:32px}.order_section .subtitle{font-size:20px;line-height:23px}}.form-control{display:block;margin:16px auto 15px;padding:0 20px;width:100%;height:50px;border:0;border-radius:4px;background:#f3f4f6;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.2);box-shadow:inset 0 1px 2px rgba(0,0,0,.2);font-family:'AvenirNextCyr',sans-serif;font-weight:400;font-size:16px;color:#333;text-align:center}@font-face{font-family:'AvenirNextCyr';src:url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff') format('woff'),url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'AvenirNextCyr';src:url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.ttf') format('truetype');font-weight:700;font-style:normal}.offer_section{height:630px;background:#eee url({{asset('/')}}naturapharmFiles/skintagserum/desctop__offer_bg.jpg) center top no-repeat}.order_section .content_block{padding:25px 0 0;height:700px;background:#eee url({{asset('/')}}naturapharmFiles/skintagserum/desctop__order_bg.jpg) center top no-repeat}.wrapper{margin:0 auto;padding:0 10px;width:1100px;position:relative}@media screen and (max-width:959px){.offer_section{background-image:url({{asset('/')}}naturapharmFiles/skintagserum/tablet__offer_bg.jpg)}.order_section .content_block{background-image:url({{asset('/')}}naturapharmFiles/skintagserum/tablet__order_bg.jpg)}.wrapper{width:660px}}@media screen and (max-width:639px){.offer_section{padding:20px 0 25px;height:auto;background-image:url({{asset('/')}}naturapharmFiles/skintagserum/mobile__offer_bg.jpg)}.order_section .content_block{padding:38px 0 25px;height:auto;background-image:url({{asset('/')}}naturapharmFiles/skintagserum/mobile__offer_bg.jpg)}.wrapper{width:320px}}</style>
</head>
<body>
@include('components.display_errors')
<div class="menu-hid">
    <div class="header-menu-wrp">
        <div class="wrp">
            <div class="header-menu">
                <ul>
                    <li><a href="#instr">Prednosti</a></li>
                    <li><a href="#pochemu">Efekti</a></li>
                    <li><a href="#otzv">Utisci kupaca</a></li>
                    <li><a href="#order-form">Poručite sada</a></li>
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
                <h3 class="main_title">ORGANIC SKIN TAG <br> SOLUTION SERUM</h3>
                <p class="subtitle">ODSTRANJUJE <br> FLEKICE I BRADAVICE <br> EFIKASANO I JEDNOSTAVNO</p>
            </div>
            <div class="discount"></div>
            <ul>
                <li>Sasušuje bradavice i ukljanja ih</li>
                <li>Odstranjuje sitne flekice na koži</li>
                <li>Sprečava stvaranje ožiljaka od bradavica</li>
                <li>Jednostavno i praktično za korišćenje</li>
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
        </div>
    </div>
</header>
<!-- /offer -->
<!-- results -->
<section class="results_section">
    <div class="wrapper">
        <h2 style="color:#9F2C99">TRENUTNO NAJBOLJE SREDSTVO ZA FLEKICE I BRADAVICE NA NAŠEM TRŽIŠTU</h2>
        <div class="box-osob" id="os">
            <div class="img-toptop">
                <!--left-img-->
                <img src="{{ asset('/') }}naturapharmFiles/skintagserum/ver1.jpg">
            </div>
            <div class="img-toptop">
                <div class="main-text" style="margin: 10px 20px 20px 20px;">
                    <h3 class="box__body-title"></h3>
                    <div class="box__body-text" style="font-size: 18px; margin-top: 45px;">Ova tečnost je vrlo efikasna,
                        jednostavna i praktična za korišćenje. Napravljena je od prirodnih aktivnih sastojaka koji delju
                        lokalno
                        regenerišući kožu i odstranjujući mrtve ćelije. Na taj način dolazi do ubrzanog odstranjivanja
                        bradavica i fleka.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="padding: 20px" id="instr">
    <h2 style="color: #9F2C99">PREDNOSTI</h2>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#9F2C99">Nepoželjne fleke</h3>
                <div class="box__body-text" style="font-size: 19px">Niste krivi što se fleke pojavljuju u najgorem
                    mogućem trenutku. Na to nemožemo da utičemo i vrlo često nam kvare raspoloženje.
                </div>
            </div>
        </div>
        <div class="img-toptop flex-left">
            <img src="{{ asset('/') }}naturapharmFiles/skintagserum/box-5-ver1.jpg" style="
                  height: 100%;
                  width: 100%;
                  ">
        </div>
    </div>
    <div class="box-osob" id="os">
        <div class="img-toptop">
            <!--left-img-->
            <img src="{{ asset('/') }}naturapharmFiles/skintagserum/box-5_ver2.jpg" style="
                  height: 100%;
                  width: 100%;
                  ">
        </div>
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#9F2C99">Preuzmite kontrolu</h3>
                <div class="box__body-text" style="font-size: 18px">Ne čekajte da bradavice i fleke počnu da se šire po
                    telu jer onda će biti mnogo teže da se uklone. Pažljivo birani sastojci ovog proizvoda učiniće da se
                    brzo oslobodite svih neželjenih fleka na telu.
                </div>
            </div>
        </div>
    </div>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#9F2C99">Efikasno dejstvo</h3>
                <div class="box__body-text" style="font-size: 19px">Nije potrebno da preduzimate nikakve dalje radnje.
                    Mažite željeno područje ovim proizvodom i rešićete se nepoželjnih bradavica.
                </div>
            </div>
        </div>
        <div class="img-toptop flex-left">
            <img src="{{ asset('/') }}naturapharmFiles/skintagserum/box-5-ver3.jpg" style="
                  height: 100%;
                  width: 100%;
                  ">
        </div>
    </div>
    <div class="box-osob" id="os">
        <div class="img-toptop">
            <!--left-img-->
            <img src="{{ asset('/') }}naturapharmFiles/skintagserum/box-5-ver4.jpg" style="
                  height: 100%;
                  width: 100%;
                  ">
        </div>
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#9F2C99">Potpuno prirodan</h3>
                <div class="box__body-text" style="font-size: 18px">Proizvod je napravljen od potpuno prirodnih
                    sastojaka koji nisu štetni po naše telo. Lepog je mirisa i neće vam stvarati neugodnosti.
                </div>
            </div>
        </div>
    </div>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#9F2C99">Jednostavan i praktičan</h3>
                <div class="box__body-text" style="font-size: 19px">Proizvod je vrlo praktičan, možete ga nositi sa
                    sobom u torbi, novčaniku ili u jednostavno u džepu. Uvek uz vas u svako vreme i na svakom mestu.
                </div>
            </div>
        </div>
        <div class="img-toptop flex-left">
            <img src="{{ asset('/') }}naturapharmFiles/skintagserum/box-5-ver5.jpg" style="height: 100%; width: 100%;">
        </div>
    </div>
</section>
<!-- use -->
<section class="benefits_section" id="pochemu">
    <div class="wrapper">
        <h2 style="color: #9F2C99;">ORGANIC SKIN TAG SOLUTION SERUM IMA SLEDEĆE EFEKTE</h2>
        <div class="benefits_list">
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}naturapharmFiles/acnepatch/1.jpg" class="block-img" alt="">
                </div>
                <div class="top-info">
                    <p class="right-2">Uklanja sitne fleke na koži</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}naturapharmFiles/acnepatch/2.jpg" class="block-img" alt="">
                </div>
                <div class="top-info">
                    <p class="right-2">Eliminiše bradavice</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}naturapharmFiles/acnepatch/3.jpg" class="block-img" alt="">
                </div>
                <div class="top-info">
                    <p class="right-2">Čini kožu nežnom</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}naturapharmFiles/acnepatch/4.jpg" class="block-img" alt="">
                </div>
                <div class="top-info">
                    <p class="right-2">Sprečava nastanak ožiljaka</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <a href="#order_form" class="button">Poručite sada</a>
</section>
<section class="reviews_section" id="otzv">
    <div class="wrapper">
        <h2 style="color:#9F2C99">UTISCI NAŠIH KUPACA</h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img src="{{ asset('/') }}naturapharmFiles/acnepatch/reviews__review1_photo.jpg" alt="спиннер">
                <div class="author_name">Katarina, 26 godina</div>
                <p>Imala sam problema sa bradavicama i konstrantno su me nervirale. Nisam ih imala mnogo, ali kada se po
                    neka pojavi bila je dosta ružna. Poručila sam ovaj proizvod i u dobroj meri mi je smirio kožu.
                    Bradavicu mažem serumom nekoliko dana, i ona se sasuši i otpadne. Sve preporuke za ovaj
                    proizvod.</p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}naturapharmFiles/acnepatch/reviews__review2_photo.jpg" alt="спиннер">
                <div class="author_name">Ines, 34 godine</div>
                <p>Moje lice i vrat su konačno bez sitnih flekica i bradavičica. Koristim ovaj proizvod oko 2 meseca i
                    stavljam ga pred spavanje na čistu kožu. Nemam više bradavice i fleke. Hvala mojoj sestri za
                    preporuku!</p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}naturapharmFiles/acnepatch/reviews__review3_photo.jpg" alt="спиннер">
                <div class="author_name">Natalija, 24 godine</div>
                <p>Najveći stres u mom životu su mi izazivale bradavice. Stalno sam bila nervozna zbog njih i terale su
                    me na suze. Nema koja sredstva nisam probala i na kakve sve tretmane nisam išla, ali ništa nije
                    pomoglo.
                    Kada sam već izgubila sve nade i postala ravnodušna, iskočila mi je reklama za ovo čudo. Pokušala
                    sam da se uhvalim za slamku spasa i upalilo jeeee. :)
                    Po prvi put sam videla napredak nakon 7 dana. Sada je sve pod kontrolom, ne smem na glas ni da se
                    hvalim.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- /reviews -->
<!-- order steps -->
<section class="order_steps_section">
    <div class="wrapper">
        <h2 style="color:#9F2C99">KAKO NAPRAVITI PORUDŽBINU?</h2>
        <div class="steps_list">
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}naturapharmFiles/acnepatch/order_steps__step1_image.jpg"
                         alt="Гамак для отдыха">
                    <div class="number">1</div>
                </div>
                <p>Ostavite podatke za dostavu na našem sajtu</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}naturapharmFiles/acnepatch/order_steps__step2_image.jpg"
                         alt="Гамак для отдыха">
                    <div class="number">2</div>
                </div>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}naturapharmFiles/acnepatch/order_steps__step3_image.jpg"
                         alt="Гамак для отдыха">
                    <div class="number">3</div>
                </div>
                <p>Paket šaljemo brzom poštom u roku od 1-2 radna dana</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}naturapharmFiles/acnepatch/order_steps__step4_image.jpg"
                         alt="Гамак для отдыха">
                    <div class="number">4</div>
                </div>
                <p>Plaćate kuriru po prijemu pošiljke</p>
            </div>
        </div>
    </div>
</section>
<!-- /order steps -->
<!-- order -->
<section class="order_section" id="order-form">
    <div class="top_title_block">
        <div class="wrapper">
            <h3>PORUČITE ODMAH I ISKORISTITE <span>POPUST OD 40%</span></h3>
        </div>
    </div>
    <div class="content_block">
        <div class="wrapper">
            <div class="title_block">
                <h3 class="main_title">ORGANIC SKIN TAG <br> SOLUTION SERUM</h3>
                <p class="subtitle">ODSTRANJUJE <br> FLEKICE I BRADAVICE <br> EFIKASANO I JEDNOSTAVNO</p>
            </div>
            <div class="discount"></div>
            <div class="form_block">
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
            </div>
        </div>
    </div>
</section>
<center></center>
<script src="{{ asset('/') }}naturapharmFiles/acnepatch/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.header-menu-wrp').addClass('original').clone().insertAfter('.header-menu-wrp').addClass('cloned').removeClass('original');

        function resizeMenu() {
            var $original = $('.header-menu-wrp.original');
            var $cloned = $('.header-menu-wrp.cloned');
            if ($(window).scrollTop() >= ($original.offset().top)) {
                $cloned.css({
                    'top': 0,
                    'width': $original.css('width'),
                    'display': 'block',
                    'left': $original.offset().left + 'px'
                });
                $original.css('visibility', 'hidden')
            } else {
                $cloned.css('display', 'none');
                $original.css('visibility', 'visible')
            }
        }

        $(window).scroll(function () {
            resizeMenu()
        });
        $(window).resize(function () {
            resizeMenu()
        });
        var last_id;
        var $top_menu = $('.header-menu-wrp.cloned');
        var menu_height = $top_menu.outerHeight(!0);
        var $menu_items = $top_menu.find('a');
        var $scroll_items = $menu_items.map(function () {
            var item = $($(this).attr('href'));
            if (item.length) {
                return item
            }
        });
        $menu_items.click(function (e) {
            var href = $(this).attr('href'), offset_top = href === '#' ? 0 : $(href).offset().top - menu_height;
            $('html, body').stop().animate({scrollTop: offset_top}, 300);
            e.preventDefault()
        });
        $(window).scroll(function () {
            var from_top = $(this).scrollTop() + menu_height;
            var mar = parseInt($top_menu.css('margin-bottom'));
            var cur = $scroll_items.map(function () {
                if ($(this).offset().top < from_top + mar) {
                    return this
                }
            });
            cur = cur[cur.length - 1];
            var id = cur && cur.length ? cur[0].id : '';
            if (last_id !== id) {
                last_id = id;
                $menu_items.parent().removeClass('active').end().filter("[href='#" + id + "']").parent().addClass('active')
            }
        })
    })
</script>
<script>
    $(document).ready(function () {

        $("a[href^='#']").click(function () {
            var target = $(this).attr("href");
            $("html, body").animate({scrollTop: $(target).offset().top + "px"});
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
@include('components.pixel_footer')
</body>
</html>
