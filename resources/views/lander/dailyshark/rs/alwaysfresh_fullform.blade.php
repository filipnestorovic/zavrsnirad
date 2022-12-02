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
    <style>
        .offer_section .box{
            position: relative;
            background: url({{ asset('/') }}dailysharkFiles/alwaysfresh/offer.jpg) 50% 0% no-repeat;
            min-height: 430px;
            padding-top: 280px;
            margin-bottom: 0;
            background-size: contain;
        }
        .offer_section .box1{
            position: relative;
            background: url({{ asset('/') }}dailysharkFiles/alwaysfresh/offer1.jpg) 50% 0% no-repeat;
            min-height: 340px;
            padding-top: 280px;
            margin-bottom: 0;
            background-size: contain;
        }
    </style>
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section">
        <h1 class="main_title">NAJBOLJA KUĆNA VAKUMERKA<br> + PAKOVANJE KESA GRATIS</h1>
        <div class="forget-pain">POVEĆAJTE ROK TRAJANJA PROIZVODA ZA 10 PUTA</div>
        <div class="box">
            <div class="sale">
                <p>Popust 40%</p>
            </div>
        </div>
        <div class="offer_text">
            <span><i class="icon-truck"></i>DOSTAVA KURIRSKOM SLUŽBOM</span>
            <span><i class="icon-cc-visa"></i>PLAĆANJE PRI ISPORUCI</span>
        </div>
        <ul class="list1">
            <li><b>Uštedite novac</b><br>Zašto plaćati više novca za vakumirane proizvode to možete sami da učinite kod kuće za 5 minuta?</li>
            <li><b>Maksimalan rok čuvanja</b><br>Hrana može da se očuva sveža i do 10 puta duže kada se vakumira!</li>
            <li><b>Jednostavan transport hrane</b><br>Hranu možete da ponesete sa sobom i na letovanje, bez straha da će se pokvariti!</li>
        </ul>
        <a href="#order_form" class="button-m">Poručite sada</a>
    </header>
    <section class="video_sect">
        <img src="{{ asset('/') }}dailysharkFiles/alwaysfresh/poster.png" alt="">
        <ul class="list1">
            <li>Jak i čvrst vakum koji izvlači sav vazduh</li>
            <li>Kese su kvalitetne, mogu da se peru i koriste bezbroj puta</li>
            <li>Kese se lako otvaraju zahvaljujući ZIP mehanizmu</li>
            <li>Nije potrebno posebno održavanje</li>
            <li>Maksimalna svežina hrane</li>
        </ul>
    </section>
    <section class="sect2 color_theme">
        <h2 class="title white"><span>PRODUŽITE ROK TRAJANJA PROIZVODA UZ VACUUM SEALER VAKUMERKU</span></h2>
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
                    <th>Proizvod</th>
                    <th>Rok trajanja u normalnim uslovima</th>
                    <th>Rok trajanja u vakuum pakovanju</th>
                </tr>
                <tr>
                    <td>Govedina</td>
                    <td>3-4 dana </td>
                    <td>8-9 dana </td>
                </tr>
                <tr>
                    <div>
                        <td>Svinjetina, teletina, jagnjetina, piletina</td>
                        <td>2-3 dana</td>
                        <td>6-9 dana </td>
                    </div>
                </tr>
                <tr>
                    <td>Kuvano jelo</td>
                    <td>1-2 dana</td>
                    <td>4-5 dana</td>
                </tr>
                <tr>
                    <td>Voće</td>
                    <td>5-7 dana </td>
                    <td>14-20 dana</td>
                </tr>
                <tr>
                    <td>Mahunarke</td>
                    <td>1-3 dana</td>
                    <td>7-10 dana</td>
                </tr>
                <tr>
                    <td>Testenina, pirinač</td>
                    <td>5-6 meseci</td>
                    <td>12 meseci</td>
                </tr>
                <tr>
                    <td>Mleko u prahu</td>
                    <td>1-2 meseca</td>
                    <td>12 meseci</td>
                </tr>
                <tr>
                    <td>Sir</td>
                    <td>15-20 dana </td>
                    <td>25-60 dana </td>
                </tr>
                </tbody>
            </table>
        </div>
        <a href="#order_form" class="button-m">Poručite sada</a>
    </section>
    <section class="sect6">
        <h2 class="title">VACUUM SEALER<br><span>KARAKTERISTIKE</span></h2>
        <img src="{{ asset('/') }}dailysharkFiles/alwaysfresh/photo1.jpg" alt="">
        <ul class="list3">
            <li>
                <b>Napajanje:</b>
                <p>baterije</p>
            </li>
            <li>
                <b>Tip baterija:</b>
                <p>3 x AAA</p>
            </li>
            <li>
                <b>Sadržaj pakovanja:</b>
                <p>Vakumerka, 6 kesa, zip otvarač, uputstvo</p>
            </li>
            <li>
                <b>Materijal:</b>
                <p>Kvalitetna ABS plastika</p>
            </li>
            <li>
                <b>Dimenzije proizvoda:</b>
                <p>7.2 cm x 3.8 cm</p>
            </li>
        </ul>
        <div class="reviews owl-carousel">
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/alwaysfresh/baner4.jpg" alt="">
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/alwaysfresh/baner3.jpg" alt="">
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/alwaysfresh/baner5.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="sect7 color_theme">
        <h2 class="title white">UTISCI KUPACA</h2>
        <div class="reviews owl-carousel">
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/alwaysfresh/rev1.jpg" alt="">
                <p>Divna stvar, zgodno je za zamrzavanje i održavanje proizvoda svežim. Štedi prostor u frižideru!</p>
                <p class="name">Marija</p>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/alwaysfresh/rev2.jpg" alt="">
                <p>Dobio sam je u roku od 2 dana od kada sam naručio. Sjajna stvar! Hvala vam! Odavno nisam kupio ništa bolje i korisnije. Hrana ostane sveža i po 10 dana.
                    Mnogo moćan uređaj.</p>
                <p class="name">Filip</p>
            </div>
            <div class="rev_item">
                <img src="{{ asset('/') }}dailysharkFiles/alwaysfresh/rev3.jpg" alt="">
                <p>Odličan kvalitet proizvoda, toplo ga preporučujem. Kese su vrhunskog kvaliteta, dobro drže i pouzdane su. Konačno mogu da nosim doručak na posao, a da mi ne iscuri ili zauzima mnogo prostora.
                    Ovaj uređaj je prevazišao sva moja očekivanja.</p>
                <p class="name">Jovan</p>
            </div>
        </div>
        <a href="#order_form" class="button-m">Poručite sada</a>
    </section>
    <section class="sect8">
        <h2 class="title"><span>KAKO MOŽETE NARUČITI</span></h2>
        <ul class="order_list">
            <li>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/vacuumsealer/order1.png" alt=""></div>
                <div class="text">
                    <span>Korak 1</span>
                    <p>Ostavite podake za dostavu na našem sajtu</p>
                </div>
            </li>
            <li>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/vacuumsealer/order2.png" alt=""></div>
                <div class="text">
                    <span>Korak 2</span>
                    <p>Kontaktiraćemo Vas da potvrdimo porudžbinu</p>
                </div>
            </li>
            <li>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/vacuumsealer/order3.png" alt=""></div>
                <div class="text">
                    <span>Korak 3</span>
                    <p>Proizvod šaljemo u roku od 1-2 radna dana</p>
                </div>
            </li>
            <li>
                <div class="img"><img src="{{ asset('/') }}dailysharkFiles/vacuumsealer/order4.png" alt=""></div>
                <div class="text">
                    <span>Korak 4</span>
                    <p>Plaćate kuriru brze pošte prilikom preuzimanja paketa</p>
                </div>
            </li>
        </ul>
    </section>
    <section class="offer_section ">
        <h1 class="main_title">NAJBOLJA KUĆNA VAKUMERKA <br> + PAKOVANJE KESA GRATIS</h1>
        <div class="forget-pain">POVEĆAJTE ROK TRAJANJA PROIZVODA ZA 10 PUTA</div>
        <div class="box1">
            <div class="sale">
                <p>Popust 40%</p>
            </div>
        </div>
        <div class="offer_text">
            <span><i class="icon-truck"></i> DOSTAVA KURIRSKOM SLUŽBOM</span> <span><i class="icon-cc-visa"></i> PLAĆANJE PRI ISPORUCI</span>
        </div>
        <div class="price_block clearfix">
            <div class="price">
                <div class="old">
                    Stara cena:
                    <p>
                        <font class="price_old13348">
                            {{ $prices[1]['originalPrice'] }}
                            {{ $prices[1]['currency'] }}
                        </font>
                        <small class="price_currency"></small>
                    </p>
                </div>
                <div class="new">
                    Nova cena:
                    <p>
                        <font class="price_old13348">
                            {{ $prices[1]['amount'] }}
                            {{ $prices[1]['currency'] }}
                        </font>
                        <small class="price_currency"></small>
                    </p>
                </div>
            </div>
            <div class="economy">UŠTEDA <span>40%</span></div>
        </div>
        <div class="formbox" id="order_form">
            <h4>Podaci za dostavu</h4>
            <p></p>
            <form class="main-order-form m1-form" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input type="text" name="name" placeholder="Ime i prezime" required/>
                <input type="tel" name="phone" id="phone" placeholder="Telefon" required/>
                <input type="text" name="shipping_address" placeholder="Adresa" required/>
                <input type="text" name="shipping_city" placeholder="Grad" required/>
                <button class="button-m js_submit" type="submit">Poruči</button>
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
