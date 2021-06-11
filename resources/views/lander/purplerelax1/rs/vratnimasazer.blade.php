<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/vratnimasazer/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/vratnimasazer/reset.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/vratnimasazer/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/vratnimasazer/styles.css">
    <script src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/jquery.min.js"></script>
    <style>@font-face{font-family:'Proxima Nova';src:url('{{ asset('/') }}fonts/subset-ProximaNova-Light.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-ProximaNova-Light.woff') format('woff'),url('{{ asset('/') }}fonts/subset-ProximaNova-Light.ttf') format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'Proxima Nova';src:url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.woff') format('woff'),url('{{ asset('/') }}fonts/subset-ProximaNova-Regular.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Proxima Nova';src:url('{{ asset('/') }}fonts/subset-ProximaNova-Semibold.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-ProximaNova-Semibold.woff') format('woff'),url('{{ asset('/') }}fonts/subset-ProximaNova-Semibold.ttf') format('truetype');font-weight:600;font-style:normal}@font-face{font-family:'Proxima Nova';src:url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/subset-ProximaNova-Bold.ttf') format('truetype');font-weight:700;font-style:normal}.form-control,.m1-form input{text-align-last:center;border:none;background:#fafafa;width:100%;height:55px;line-height:55px;font-size:18px;font-family:"Proxima Nova",Arial,helvetica,sans-serif;text-align:center;color:#333;border-radius:33px;margin-bottom:10px;box-shadow:0 3px 12px 0 rgba(0,0,0,.1)}.top_line ul{background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/top_ul.png) 100% 50% no-repeat;padding:15px 0}.top_line ul>li:nth-child(1):before{width:24px;height:28px;background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/top_ul1.png) 50% 50% no-repeat}.top_line ul>li:nth-child(2):before{width:32px;height:23px;background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/top_ul2.png) 50% 50% no-repeat}.top_line ul>li:nth-child(3):before{width:31px;height:31px;background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/top_ul3.png) 50% 50% no-repeat}.offer_section{background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/offer.jpg) 50% 0% no-repeat;min-height:705px;padding:25px 0 0}.main_subtitle>span{background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/main_subtitle_border.png) 0% 100% repeat-x}.ofr_bull>li{color:#81b70d;font-size:19px;font-weight:700;margin-bottom:25px;padding-left:32px;background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/check1.png) 0% 5px no-repeat}.sect2{background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/s2_bg.jpg) 50% 0% no-repeat;min-height:595px;padding:50px 0 0}.benef1>li:before{content:"";width:62px;height:62px;border-radius:50%;background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/x_icon.png) 50% 50% no-repeat;display:block;box-shadow:0 4px 8px 0 rgba(0,0,0,.2);display:block;margin:0 auto 15px}.first_use{position:relative;padding:40px 25px 40px 250px;border-radius:12px;background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/warn_block_bg.png) -75px center no-repeat #239be3;background-size:40%;margin-top:80px}.list1>li:before{width:30px;height:30px;border-radius:50%;border:1px solid #b4b4b4;background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/check1.png) 50% 50% no-repeat;line-height:42px;color:#8ebf27;font-weight:700;font-size:36px;text-align:center;margin-top:-2px;float:left;content:""}.sect4{background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/s4_bg.jpg) 50% 0% no-repeat;padding-top:110px;min-height:535px}.magnet_icon:before,.magnet_icon:after{content:"";width:92px;height:28px;background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/magnet_arrow.png) 50% 50% no-repeat;position:absolute;top:80px}.magnet_icon:before{left:50px}.magnet_icon:after{right:50px}.magnet_icon .magnet{width:146px;height:165px;margin:0 auto;position:relative;top:25px}.sect5{background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/s5_bg.jpg) 50% 0% no-repeat;padding-bottom:0}.benef2>li>p:before{content:"";width:62px;height:62px;background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/check2.png) 50% 50% no-repeat;border-radius:50%;display:block;margin:-32px auto 15px;box-shadow:0 0 16px 0 rgba(0,0,0,.2);position:relative}.sect5 .gallery .item .text{display:table;width:108px;height:50px;background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/gallery_arrow.png) 50% 50% no-repeat;position:absolute;top:50%;left:50%;margin:-25px 0 0 -54px}.sect6{background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/s6_bg.jpg) 50% 0% no-repeat;padding-top:180px;min-height:1040px}.how_use .left ul li:before{content:"";position:absolute;left:0;top:7px;width:20px;height:15px;background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/check-icon1.png) center center no-repeat;background-size:90%}.how_use .left .text>p:first-child:before{content:"";width:33px;height:33px;background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/use_icon.png) 50% 50% no-repeat;display:block;margin:0 auto 20px}.size_table>h5:before{content:"";width:24px;height:24px;background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/size_icon.png) 50% 50% no-repeat;display:inline-block;vertical-align:middle;margin:-2px 12px 0 0}.sect7{background:#52afe8 url({{asset('/')}}purplerelaxFiles/vratnimasazer/s7_bg.jpg) 50% 0% no-repeat;padding:1px 0 90px}.spec_block .info .text{padding:22px 150px 22px 22px;background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/pechat.png) 210px 50% no-repeat}.spec_block .info .text>span:before{content:"";width:32px;height:27px;background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/rev_q.png) 50% 50% no-repeat;display:block;margin:0 0 10px}.sect8{background:#e3e6ea url({{asset('/')}}purplerelaxFiles/vratnimasazer/s8_bg.jpg) 50% 0% no-repeat}.rev_item .info:before{content:"";width:32px;height:27px;background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/rev_q.png) 50% 50% no-repeat;display:inline-block;vertical-align:middle;margin:-2px 14px 0 0}.reviews .owl-prev,.reviews .owl-next{width:48px;height:48px;background:#239be3 url({{asset('/')}}purplerelaxFiles/vratnimasazer/rev_arrows.png);border-radius:50%;box-shadow:0 2px 10px 0 rgba(0,0,0,.1);position:absolute;top:100px}.reviews .owl-prev{background-position:0 50%;left:0}.reviews .owl-next{background-position:100% 50%;right:0}.order_list>li:not(:last-child):after{content:"";width:86px;height:20px;background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/order_arrow.png) 50% 50% no-repeat;position:absolute;top:50px;right:-40px}@media screen and (max-width:959px){.offer_section{background:url({{asset('/')}}purplerelaxFiles/vratnimasazer/offer_tab.jpg) 50% 0% no-repeat}.sect2{background:#e3edf7;background:-moz-linear-gradient(-45deg,#e3edf7 0%,#ecf3fb 100%);background:-webkit-linear-gradient(-45deg,#e3edf7 0%,#ecf3fb 100%);background:linear-gradient(135deg,#e3edf7 0%,#ecf3fb 100%);min-height:auto;padding:35px 0}.sect4{padding-top:40px;background:#53b0e7;background:-moz-linear-gradient(-45deg,#53b0e7 0%,#44a5df 100%);background:-webkit-linear-gradient(-45deg,#53b0e7 0%,#44a5df 100%);background:linear-gradient(135deg,#53b0e7 0%,#44a5df 100%);min-height:auto;padding-bottom:0}.sect6{padding-top:140px;background:#e3e5e8;background:-moz-linear-gradient(45deg,#e3e5e8 0%,#f8f9fa 100%);background:-webkit-linear-gradient(45deg,#e3e5e8 0%,#f8f9fa 100%);background:linear-gradient(45deg,#e3e5e8 0%,#f8f9fa 100%)}.sect7{padding:35px 0;background:#53afe7;background:-moz-linear-gradient(-45deg,#53afe7 0%,#3fa1dc 100%);background:-webkit-linear-gradient(-45deg,#53afe7 0%,#3fa1dc 100%);background:linear-gradient(135deg,#53afe7 0%,#3fa1dc 100%)}.sect8{background:#e3e5e8;background:-moz-linear-gradient(45deg,#e3e5e8 0%,#f8f9fa 100%);background:-webkit-linear-gradient(45deg,#e3e5e8 0%,#f8f9fa 100%);background:linear-gradient(45deg,#e3e5e8 0%,#f8f9fa 100%);padding-bottom:50px}}@media screen and (max-width:659px){.wrapper{width:320px}.offer_section{background:#f1f1f1 url({{asset('/')}}purplerelaxFiles/vratnimasazer/offer_mob.jpg) 50% 0% no-repeat;min-height:auto;padding-bottom:25px;overflow:hidden}.offer_section .wrapper{padding:0 10px}.benef1>li{width:50%;margin-bottom:30px}.first_use{margin-top:30px;background-image:none}.first_use{padding:25px 10px 25px;text-align:center}.first_use>img{position:static;display:block;margin:-20px auto 5px}.first_use>p{font-size:18px;line-height:26px}.priceBottom{padding-top:60px!important}}</style>
</head>
<body>
<section class="offer_section">
    <div class="wrapper">
        <h1 class="main_title">
            <span><span class="green">Neck</span>Master</span> <b>-</b> pulsni masažer za leđa i vrat
        </h1>
        <p class="main_subtitle"><span>Trenutno ublažava napetost mišića, pružajući izražen efekat opuštanja</span></p>
        <div class="sale"><p>Akcija! <span>-40% </span> popusta</p></div>
        <ul class="ofr_bull">
            <li>Uklanja glavobolju</li>
            <li>Opušta mišiće leđa i vrata</li>
            <li>Rešava problem nesanice</li>
        </ul>
        <div class="pulse1 pulse">
            <div></div>
            <div></div>
        </div>
        <div class="pulse2 pulse">
            <div></div>
            <div></div>
        </div>
        <div class="pulse3 pulse">
            <div></div>
            <div></div>
        </div>
        <div class="action_block">
            <div class="price clearfix">
                <p>Cena:</p>
                <div class="number">
                    <div class="old"><span>{{ $prices[1]['originalPrice'] }}</span><small> RSD</small>
                    </div>
                    <div class="new"><span>{{ $prices[1]['amount'] }}</span><small> RSD</small>
                    </div>
                </div>
            </div>
            <a href="{{$checkoutView}}" class="button-m">Poruči odmah</a>
        </div>
    </div>
</section>
<section class="sect2">
    <div class="wrapper">
        <h2 class="title">Problemi koji vas sprečavaju da uživate u životu</h2>
        <div class="subtitle">
            <span>78% ljudi</span> ima problema sa vratnom kičmom, kao i simptome koji se javljaju zbog njih:
        </div>
        <ul class="benef1">
            <li><p>Bolovi u vratu</p></li>
            <li><p>Slaba pokretljivost</p></li>
            <li><p>Brzo umaranje</p></li>
            <li><p>Nesanica i nedostatak sna</p></li>
        </ul>
        <div class="first_use">
            <p>Već nakon prvog korišćenja ovog masažera bol u vratu i leđima će prestati, a češćom upotrebnom će doprineti potpunoj eliminaciji samog uzroka bola. </p>
        </div>
    </div>
</section>
<section class="sect3">
    <div class="wrapper">
        <h2 class="title">Zaboravite na nelagodu i <span>osigurajte sebi zdrav san</span></h2>
        <p class="subtitle">Neck Master je jednostavan i učinkovit način za otklanjanje napetosti i bola u vratu i leđima!</p>
        <div class="content clearfix">
            <div class="text">
                <h4>Njegov princip rada je prilično jednostavan:</h4>
                <ul class="list1">
                    <li>
                        <p>Ima terapeutski efekat sličan masaži</p>
                    </li>
                    <li>
                        <p>Smanjuje pritisak na vratu i leđima</p>
                    </li>
                    <li>
                        <p>Otklanja napade glavobolje</p>
                    </li>
                    <li>
                        <p>Poboljšava cirkulaciju krvi u vratnoj kičmi</p>
                    </li>
                    <li>
                        <p>Jača mišiće leđa i ramena</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="sect4">
    <div class="wrapper">
        <div class="magnet_block">
            <div class="magnet_icon">
                <div class="magnet">
                    <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/magnet.png" alt="">
                </div>
            </div>
            <p>Masažer nove generacije, pogodan za rešavanje problema bola i pritiska u vratu i leđima. Ima izražen terapeutski efekat.</p>
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/s4_img.png" alt="">
        </div>
    </div>
</section>
<section class="sect5">
    <div class="wrapper">
        <h2 class="title"><span>100% je efikasan i postiže odlične rezultate!</span></h2>
        <div class="subtitle">Prava leđa i bez bolova u vratu za samo 30 dana!</div>
        <ul class="benef2">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/s5_img1.jpg" alt="">
                <p>Potpuno ublažavanje bolova u glavi i vratu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/s5_img2.jpg" alt="">
                <p>Otklanjanje neuravnoteženog opterećenja na pršljenove i zglobove</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/s5_img3.jpg" alt="">
                <p>Lepo i ujednačeno držanje bez umora i otoka</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/s5_img4.jpg" alt="">
                <p>Snažni mišići leđa i ramena</p>
            </li>
        </ul>
        <a href="{{$checkoutView}}" class="button-m">Poruči odmah</a>
    </div>
    <div class="gallery owl-carousel">
        <div class="item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/gallery3.jpg" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/gallery1.jpg" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/gallery2.jpg" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/gallery4.jpg" alt="">
        </div>
    </div>
</section>
<section class="sect6">
    <div class="wrapper">
        <h2 class="title"><span>3 jednostavna koraka</span> za korišćenje NECK MASTER masažera</h2>
        <div class="how_use clearfix">
            <ul class="benef3">
                <li>
                    <div class="img">
                        <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/use1.jpg" alt="">
                    </div>
                    <div class="text">
                        <span>Korak 1</span>
                        <p>Izaberite željeni tip masaže</p>
                    </div>
                </li>
                <li>
                    <div class="img">
                        <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/use2.jpg" alt="">
                    </div>
                    <div class="text">
                        <span>Korak 2</span>
                        <p>Uključite masažer držeći taster 3 sekunde</p>
                    </div>
                </li>
                <li>
                    <div class="img">
                        <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/use3.jpg" alt="">
                    </div>
                    <div class="text">
                        <span>Korak 3</span>
                        <p>Stavite ga na vrat i uživajte u masaži</p>
                    </div>
                </li>
            </ul>
            <div class="left">
                <div class="text">
                    <p>Najbolji rezultat postići ćete nakon dužeg redovnog korišćenja. Ali čak i uz jednokratnu upotrebu masažera za vrat, osetićete značajno opuštanje i blagostanje.</p>
                    <ul>
                        <li>
                            <p>Napravljen od hipoalergijske ekološke plastike</p>
                        </li>
                        <li>
                            <p>Tih je i može da se koristiti tokom spavanja</p>
                        </li>
                        <li>
                            <p>Pogodno za sve uzraste</p>
                        </li>
                    </ul>
                    <a href="{{$checkoutView}}" class="button-m">Rešite se bola!</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sect7">
    <div class="wrapper">
        <div class="spec_block">
            <h2 class="title">
                <span>U pakovanju dobijate i 2 elektrode</span><br>
                za pulsnu masažu ostalih delova tela
            </h2>
            <div class="images">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/spec_1.jpg" alt="">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/spec_2.png" alt="" class="desk">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/spec_mob.png" alt="" class="mob">
            </div>
        </div>
    </div>
</section>
<section class="characteristics">
    <div class="wrapper">
        <h2 class="title">
            Tehničke karakteristike
        </h2>
        <div class="box">
            <table>
                <tr>
                    <td>Broj načina rada: </td><td>6</td>
                </tr>
                <tr>
                    <td>Vrsta masaže: </td><td>Impulsi</td>
                </tr>
                <tr>
                    <td>Napajanje: </td><td>2 x AAA baterije</td>
                </tr>
                <tr>
                    <td>Podešavanje intenziteta: </td><td>DA</td>
                </tr>
                <tr>
                    <td>Težina: </td><td>0.3KG</td>
                </tr>
                <tr>
                    <td>Garancija: </td><td>12 meseci</td>
                </tr>
            </table>
            <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/ch1.jpg" alt="">
        </div>
    </div>
</section>
<section class="sect8">
    <div class="wrapper">
        <h2 class="title">Utisci kupaca kojima je<br> <span>Neck Master već pomogao</span></h2>
        <div class="reviews owl-carousel">
            <div class="rev_item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/rev1.jpg" alt="">
                <span>"Bol potpuno nestaje i pojavljuje se osećaj lakoće"</span>
                <p>Vrat me je dugo boleo, ponekad bolovi nisu ni prestajali.
                    Umoran od posla, budio sam se noću. Dijagnoza doktora - "Degeneracija diska vratne kičme".
                    Prijateolji su mi preporučili kupovinu Neck Master pulsnog masažera. Koristim ga više od mesec dana, 2-3 puta dnevno po nekoliko minuta.</p>
                <div class="info">Bojan Božović</div>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/rev2.jpg" alt="">
                <span>"Sedam za volan bez bola u vratu, nelagoda je nestala".</span>
                <p>Pola godine sam išao na masaže, nakon čega sam se osećao bolje ali su se bolovi ubrzo vratili.
                    Tada sam odlučio da poručim Neck Master. Inačne, mnogo vremena provodim za volanom, a umor i glavobolja su mi bili dosadašnji pratioci.
                    Sada je sve drugačije, nemam više tegobe i osećam se kao ptica. </p>
                <div class="info">Vladislav Tešić</div>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/rev3.jpg" alt="">
                <span>"Smanjuje nivo stresa tokom dana!"</span>
                <p>U našoj kancelariji svi obožavaju Neck Master masažer, i svi su ga poručili. Čak smo i dobili popust na više komada.
                    Kada stres i gužva dožive vrhunac, napravimo pauzu po nekoliko minuta i masažer nas potpuno opusti.
                    Koristim ga i pre spavanja po 15 minuta, i spavam kao beba.</p>
                <div class="info">Jana Šarenac</div>
            </div>
        </div>
        <a href="{{$checkoutView}}" class="button-m">Poruči odmah</a>
    </div>
</section>
<section class="sect9">
    <div class="wrapper">
        <h2 class="title">Kako do <span>Neck Master masažera?</span></h2>
        <ul class="order_list">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/order1.png" alt="">
                <span><span>01</span> Porudžbina</span>
                <p>Poručite unošenjem podataka za dostavu</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/order2.png" alt="">
                <span><span>02</span> Potvrda</span>
                <p>Potvrdićemo vašu porudžbinu u najkraćem roku</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/order3.png" alt="">
                <span><span>03</span> Dostava</span>
                <p>Poručenu robu plaćate pouzećem</p>
            </li>
        </ul>
    </div>
</section>
<section class="offer_section bottom">
    <div class="wrapper">
        <h1 class="main_title">
            <span><span class="green">NECK</span>MASTER</span> <b>-</b> pulsni masažer za leđa i vrat
        </h1>
        <p class="main_subtitle"><span>Trenutno ublažava napetost mišića, pružajući izražen efekat opuštanja</span></p>
        <div class="sale"><p>Akcija! <span>-40%</span> popusta</p></div>
        <div class="pulse1 pulse">
            <div></div>
            <div></div>
        </div>
        <div class="pulse2 pulse">
            <div></div>
            <div></div>
        </div>
        <div class="pulse3 pulse">
            <div></div>
            <div></div>
        </div>
        <div id="order_form" class="formbox">
            <div class="price clearfix priceBottom">
                <p>Cena:</p>
                <div class="number">
                    <div class="old"><span>{{ $prices[1]['originalPrice'] }}</span>
                        <small> RSD</small>
                    </div>
                    <div class="new"><span>{{ $prices[1]['amount'] }}</span>
                        <small> RSD</small>
                    </div>
                </div>
            </div>
            <a href="{{$checkoutView}}" class="button-m">Poruči odmah</a>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}purplerelaxFiles/vratnimasazer/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>