<!DOCTYPE html>
<html >
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/vacuumsealer/favicon.png" type="">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/vacuumsealer/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/vacuumsealer/styles.css">
    <style>@font-face{font-family:'Bebas Neue';src:url('{{ asset('/') }}fonts/BebasNeueRegular.woff2') format('woff2'),url('{{ asset('/') }}fonts/BebasNeueRegular.woff') format('woff'),url('{{ asset('/') }}fonts/BebasNeueRegular.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Bebas Neue';src:url('{{ asset('/') }}fonts/BebasNeueBold.woff2') format('woff2'),url('{{ asset('/') }}fonts/BebasNeueBold.woff') format('woff'),url('{{ asset('/') }}fonts/BebasNeueBold.ttf') format('truetype');font-weight:700;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Light.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Light.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Light.ttf') format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Open Sans';font-weight:400;font-style:italic}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Semibold.ttf') format('truetype');font-weight:600;font-style:normal}@font-face{font-family:'Open Sans';font-weight:600;font-style:italic}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Bold.ttf') format('truetype');font-weight:700;font-style:normal}@font-face{font-family:'Open Sans';src:url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.woff2') format('woff2'),url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.woff') format('woff'),url('{{ asset('/') }}fonts/subset-OpenSans-Extrabold.ttf') format('truetype');font-weight:800;font-style:normal}@font-face{font-family:'fontello';src:url('{{ asset('/') }}fonts/fontello.eot');src:url('{{ asset('/') }}fonts/fontello.eot') format('embedded-opentype'),url('{{ asset('/') }}fonts/fontello.svg_253F') format('svg');font-weight:normal;font-style:normal}[class^="icon-"]:before,[class*=" icon-"]:before{font-family:"fontello";font-style:normal;font-weight:normal;speak:none;display:inline-block;text-decoration:inherit;width:1em;margin-right:.2em;text-align:center;font-variant:normal;text-transform:none;line-height:1em;margin-left:.2em;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}</style>
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section">
        <h1 class="main_title">Ambalator cu vid Freshpack Pro<br> + SET LOVE FOREVER gratis</h1>
        <div class="forget-pain"><span></span>Măriți durata de valabilitate a produselor de 10 ori</div>
        <div class="box">
            <div class="sale">
                <p>Reducere 50%
                </p>
            </div>
        </div>
        <div class="offer_text">
               <span><i class="icon-truck"></i>ESTE VALABILĂ LIVRAREA PRIN CURIER
               </span> <span><i class="icon-cc-visa"></i> PLATA LA LIVRARE</span>
        </div>
        <ul class="list1">
            <li><b>Economisiți banii</b><br>De ce să plătești mai mult pentru produsele ambalate în vacuum, dacă el pot fi ambalate acasă în cinci minute?</li>
            <li><b>Termenul maxim de păstrare</b><br>Produsele, ambalate cu ajutorul acestui apărat, pot fi păstrate de 10 ori mai mult!</li>
            <li><b>Ușor de folosit</b><br>Posibilitatea de a lua produse în călătorie, fără teamă, că ele se vor altera</li>
        </ul>
        <a href="#order_form" class="button-m">Comandă cu reducere</a>
    </header>
    <section class="video_sect">
        <video poster="{{ asset('/') }}dailysharkFiles/vacuumsealer/poster.png" controls="controls" width="480" height="270"  >
            <source src="{{ asset('/') }}dailysharkFiles/vacuumsealer/video.mp4" type="">
        </video>
        <ul class="list1">
            <li>Cea mai bună adâncime a vacuumului</li>
            <li>Lucrează de la orice priză</li>
            <li>Posibilitatea lipirii pachetelor fără crearea vidului</li>
            <li>Lucrează cu pachete de diferită lățime</li>
            <li>Nu necesită întreținere speciale</li>
        </ul>
        {{--
        <h2 class="title">Cu să folosești ambalatorul cu vid?</h2>
        --}}
        {{--
        <div class="video_block">--}}
        {{--            <iframe width="480" height="270" src="https://www.youtube.com/embed/B5uL946nV7Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
        {{--
     </div>
     --}}
    </section>
    <section class="sect2 color_theme">
        <h2 class="title white"><span>Prelungiți durata de valabilitate a produselor cu ambalatorul cu vid Freshpack Pro</span></h2>
        <style>
            table.iksweb{text-decoration: none;border-collapse:collapse;width:100%;text-align:center;}
            table.iksweb th{font-weight:normal;font-size:15px; color:#ffffff;background-color:#354251;}
            table.iksweb td{font-size:15px; background-color: #ffffff; color:black;}
            table.iksweb td,table.iksweb th{white-space:pre-wrap;padding:10px 5px;line-height:15px;vertical-align: middle;border: 1px solid #354251;}    table.iksweb tr:hover{background-color:#f9fafb}
            .mobile-table{width: 100%; max-width: 100%; overflow-x: auto;}
        </style>
        <div style="padding: 0px 20px 40px 20px;">
            <table class="iksweb">
                <tbody>
                <tr>
                    <th>Produs</th>
                    <th>Termenul de păstrare în condiții obișnuite</th>
                    <th>Termen de păstrare în ambalaj cu vid</th>
                </tr>
                <tr>
                    <td>Carne de vită </td>
                    <td>3-4 zile </td>
                    <td>8-9 zile </td>
                </tr>
                <tr>
                    <div>
                        <td>Carne de porc, vițel, ovine, pasăre</td>
                        <td>2-3 zile</td>
                        <td>6-9 zile </td>
                    </div>
                </tr>
                <tr>
                    <td>Pește</td>
                    <td>1-2 zile</td>
                    <td>4-5 zile</td>
                </tr>
                <tr>
                    <td>Fructe </td>
                    <td>5-7 zile </td>
                    <td>14-20 zile</td>
                </tr>
                <tr>
                    <td>Legume </td>
                    <td>1-3 zile</td>
                    <td>7-10 zile</td>
                </tr>
                <tr>
                    <td>Paste, orez, crupe</td>
                    <td>5-6 luni</td>
                    <td>12 luni</td>
                </tr>
                <tr>
                    <td>Lapte praf</td>
                    <td>1-2 luni</td>
                    <td>12 luni</td>
                </tr>
                <tr>
                    <td>Cașcaval (brânză)</td>
                    <td>15-20 zile </td>
                    <td>25-60 zile </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- <ul class="benef2">
           <li>
            <img src="images/pol1.jpg" alt="">
            <p>Срабатывает без прикосновений</p>
           </li>
           <li>
            <img src="images/pol2.jpg" alt="">
            <p>Мыло дозируется в нужных порциях</p>
           </li>
           <li>
            <img src="images/pol3.jpg" alt="">
            <p>Мыла в ёмкости хватит на долго</p>
           </li>
           <li>
            <img src="images/pol4.jpg" alt="">
            <p>Можно налить любое жидкое средство</p>
           </li>
           </ul> -->
        <a href="#order_form" class="button-m">Comandă cu reducere</a>
    </section>
    <section class="sect6">
        <h2 class="title"><span>Caracteristicile </span><br> Freshpack Pro</h2>
        <img src="{{ asset('/') }}dailysharkFiles/vacuumsealer/photo1.jpg" alt="">
        <ul class="list3">
            <li>
                <b>Putere:</b>
                <p>100 Wați</p>
            </li>
            <li>
                <b>Tensiune:</b>
                <p>220 Volți</p>
            </li>
            <li>
                <b>Lungimea etanșantului:</b>
                <p>28 cm</p>
            </li>
            <li>
                <b>Materialul pungilor:</b>
                <p>ABS - plastic</p>
            </li>
            <li>
                <b>Dimensiuni:</b>
                <p>360*54*50mm</p>
            </li>
        </ul>
        <div class="reviews owl-carousel">
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/vacuumsealer/baner4.jpg" alt="">
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/vacuumsealer/baner3.jpg" alt="">
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/vacuumsealer/baner5.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="sect7 color_theme">
        <h2 class="title white">Părerile cumpărătorilor</h2>
        <div class="reviews owl-carousel">
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/vacuumsealer/rev1.jpg" alt="">
                <p>Un lucru minunat, este comod să congelezi legume, pomușoare pentru iarnă, economisesc spațiul în congelator!)</p>
                <p class="name">Maria</p>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/vacuumsealer/rev2.jpg" alt="">
                <p>L-am primit în 3 zile din momentul efectuării comenzii. Un lucru super! Mulțumesc! O achiziționare superbă pentru sezonul pomușoarelor și fructelor, legumelor de vară, pentru a le îngheța în ambalaj cu vid. Îl recomand tuturor gospodinelor, este un ajutor de neînlocuit în bucătărie. Vă mulțumesc de o sută de ori. Un aparat puternic</p>
                <p class="name">Florin</p>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/vacuumsealer/rev3.jpg" alt="">
                <p>O calitate excelentă a tuturor mărfurilor! recomand! Mulțumesc pentru livrarea rapidă și fără probleme! Pungile sunt de calitate superioară! țin bine, economisesc spațiul în congelator, formidabil! Însușii aparatul a depășit toate așteptările. ❤</p>
                <p class="name">Mircea</p>
            </div>
        </div>
        <a href="#order_form" class="button-m">Comandă cu reducere</a>
    </section>
    <section class="sect8">
        <h2 class="title"><span>Cum poți comanda</span></h2>
        <ul class="order_list">
            <li>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/vacuumsealer/order1.png" alt=""></div>
                <div class="text">
                    <span>Pasul 1</span>
                    <p>Lăsați cererea pe site-ul nostru</p>
                </div>
            </li>
            <li>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/vacuumsealer/order2.png" alt=""></div>
                <div class="text">
                    <span>Pasul 2</span>
                    <p>Managerul va lua legătura cu Dumneavoastră pentru confirmarea comenzii</p>
                </div>
            </li>
            <li>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/vacuumsealer/order3.png" alt=""></div>
                <div class="text">
                    <span>Pasul 3</span>
                    <p>Livrăm comanda în termen de 2-5 zile prin curier până la ușă.</p>
                </div>
            </li>
            <li>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/vacuumsealer/order4.png" alt=""></div>
                <div class="text">
                    <span>Pasul 4</span>
                    <p>Achitați după verificarea mărfii</p>
                </div>
            </li>
        </ul>
    </section>
    <section class="offer_section ">
        <h1 class="main_title">Ambalator cu vid Freshpack Pro<br> + SET LOVE FOREVER gratis</h1>
        <div class="forget-pain"><span></span>Măriți durata de valabilitate a produselor de 10 ori</div>
        <div class="box1">
            <div class="sale">
                <p>Reducere
                    50%
                </p>
            </div>
        </div>
        <div class="offer_text">
            <span><i class="icon-truck"></i>ESTE VALABILĂ LIVRAREA PRIN CURIER</span> <span><i class="icon-cc-visa"></i> PLATA LA LIVRARE</span>
        </div>
        <div class="price_block clearfix">
            <div class="price">
                <div class="old">
                    Prețul vechi:
                    <p>
                        <font class="price_old13348">
                            {{ $prices[1]['originalPrice'] }}
                            {{ $prices[1]['currency'] }}
                        </font>
                        <small class="price_currency"></small>
                    </p>
                </div>
                <div class="new">
                    Prețul promoțional:
                    <p>
                        <font class="price_old13348">
                            {{ $prices[1]['amount'] }}
                            {{ $prices[1]['currency'] }}
                        </font>
                        <small class="price_currency"></small>
                    </p>
                </div>
            </div>
            <div class="economy">Economie  <span>
                  50%</span>
            </div>
        </div>
        <div class="formbox" id="order_form">
            <h4>Completați cererea</h4>
            <p>și veți primi Freshpack Pro  <span>cu o reducere de <i>
                  50%</i></span>
            </p>
            <form class="main-order-form m1-form" action="#" method="post">
                <input type="text" name="name" placeholder="Numele dvs." />
                <input type="tel" name="phone" id="phone" placeholder="Nr. de telefon" />
                <button class="button-m js_submit" type="submit">Comandă</button>
            </form>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}dailysharkFiles/vacuumsealer/owl.carousel.min.js"></script>
<script>
    $(window).on("load", function(){
        $(".reviews").owlCarousel({
            items: 1,
            loop: true,
            autoHeight: true,
            smartSpeed: 300,
            mouseDrag: true,
            pullDrag: true,
            dots: true,
            nav: true,
            navText: '',
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>
