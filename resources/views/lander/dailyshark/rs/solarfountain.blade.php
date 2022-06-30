<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/png" href="{{ asset('/') }}dailysharkFiles/solarfountain/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/solarfountain/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/solarfountain/main.css">
    <style>
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<div class="menu-hid">
    <div class="header-menu-wrp">
        <div class="wrp">
            <div class="header-menu">
                <ul>
                    <li><a href="#osss">KAKO RADI</a></li>
                    <li><a href="#instr">ZAŠTO KUPITI</a></li>
                    <li><a href="#pochemu">PREDNOSTI</a></li>
                    <li><a href="#haracter">KARAKTERISTIKE</a></li>
                    <li><a href="#otzv">RECENZIJE</a></li>
                    <li><a href="#order-form">PORUČITI</a></li>
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
                <h3 class="main_title">SOLARNA FONTANA</h3>
                <p class="subtitle">ZA PTIČICE I LJUBIMCE</p>
            </div>
            <div class="discount"></div>
            <ul>
                <li>Ulepšaće vaše dvorište ili terasu</li>
                <li>Ima vodootporno kućište</li>
                <li>Otporna je na sve vremenske uslove</li>
                <li>Radi kada je na suncu</li>
            </ul>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">Redovna cena:</div>
                    <div class="value">
                        {{ $prices[1]['originalPrice'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
                <div class="price_item new">
                    <div class="text">Cena sada:</div>
                    <div class="value">
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
            </div>
            <a href="#order_form" class="button">Poručite sada</a>
            <div class="deadline_text">Količine su ograničene</div>
        </div>
    </div>
</header>
<!-- /offer -->
<!-- results -->
<section class="results_section" >
    <div class="wrapper">
        <h2 style="color:#bf1b1b">DEKORACIJA I HUMANOST U JEDNOM</h2>
        <div class="box-osob" id="os">
            <div class="img-toptop">
                <!--left-img-->
                <img src="{{ asset('/') }}dailysharkFiles/solarfountain/ver1.jpg">
            </div>
            <div class="img-toptop">
                <div class="main-text" style="margin: 10px 20px 20px 20px;">
                    <h3 class="box__body-title"> </h3>
                    <div class="box__body-text" style="font-size: 18px">
                        Omogućite pticama mesto za piće i hlađenje uz ovu solarnu fontanu. Ne samo da vi možete uživati u njenom dekorativnom efektu, već mogu i ptice, kuce i mace.
                    </div>
                    <div class="box__body-text" style="font-size: 18px">
                        Na velikim vrućinama u toku leta, vrlo je humano omogućiti ptičicama malo vode kako ne bi uginule.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gallery_sect" style="padding-top: 5px;">
    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/gallery.jpg" alt="" class="panorama" height="323" width="1968">
</section>
<section class="benefits_section" id="osss">
    <div class="wrapper">
        <h2 style="color: #bf1b1b;">KAKO RADI</h2>
        <div class="benefits_list">
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/1.jpg" class="block-img" alt="">
                </div>
                <div  class="top-info">
                    <p>Radi na solarnu energiju i potrebno je samo da bude na suncu.</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/2.jpg" class="block-img" alt="">
                </div>
                <div  class="top-info">
                    <p>Voda kruži i nema potrebe za stalnim izvorom vode</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/3.jpg" class="block-img" alt="">
                </div>
                <div  class="top-info">
                    <p>Pluta na vodi i ne može da potone</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/4.jpg" class="block-img" alt="">
                </div>
                <div  class="top-info">
                    <p>Više nastavaka za razne oblike vodenih mlazova</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="padding: 20px" id="instr">
    <h2 style="color: #bf1b1b">RAZLOZI DA KUPITE SOLARNU FONTANU</h2>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#bf1b1b">Dekoracija</h3>
                <div class="box__body-text"  style="font-size: 18px">Ova pametna plutajuća solarna fontana može pretvoriti bilo koji bazenčić ili posudu sa stajaćom vodom u fontanu. Jednostavno je stavite u vodu obasjanu suncem i ona će blagim ili jačim mlazom prskati prema gore.
                    Može da se podešava i smanjuje intenzitet mlaza, a to takođe zavisi i od jačine sunca.</div>
            </div>
        </div>
        <div class="img-toptop flex-left">
            <img src="{{ asset('/') }}dailysharkFiles/solarfountain/box-5-ver1.jpg"  >
        </div>
    </div>
    <div class="box-osob" id="os">
        <div class="img-toptop">
            <!--left-img-->
            <img src="{{ asset('/') }}dailysharkFiles/solarfountain/box-5_ver2.jpg"  >
        </div>
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#bf1b1b">Eco Friendly</h3>
                <div class="box__body-text" style="font-size: 18px">Fontana ne koristi baterije i nema nikakvo dodatno napajanje, potpuno je ekološki prihvatljiva i koristi samo sunčevu energiju. Koristite proizvode na solarno napajanje i na taj način doprinesite očuvanju životne sredine.</div>
            </div>
        </div>
    </div>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#bf1b1b">Humanost</h3>
                <div class="box__body-text"  style="font-size: 18px">Svako leto mnogo ptica ugine zbog velike vrućine i nedostatka vode. Budite humani i omogućite ptičicama da se okupaju, rashlade i napiju vode. Možete fontanu da stavite u veći lavor, i ptičice ce imati svoj kutak za rashlađivanje.</div>
            </div>
        </div>
        <div class="img-toptop flex-left">
            <img src="{{ asset('/') }}dailysharkFiles/solarfountain/box-5-ver3.jpg" >
        </div>
    </div>
    <div class="box-osob" id="os">
        <div class="img-toptop">
            <!--left-img-->
            <img src="{{ asset('/') }}dailysharkFiles/solarfountain/box-5-ver4.jpg"  >
        </div>
        <div class="img-toptop">
            <div class="main-text" >
                <h3 class="box__body-title" style="color:#bf1b1b">Razonoda za decu</h3>
                <div class="box__body-text" style="font-size: 18px">Deca uglavnom obožavaju ovu fontanicu i vrlo često se zabavljaju pored nje. Potpuno je bezbedna i mnogo interesantna. Kupovinom fontane unećete radost u vaše dvorište.</div>
            </div>
        </div>
    </div>
</section>
<!-- use -->
<section class="benefits_section" id="pochemu">
    <div class="wrapper">
        <h2 style="color: #bf1b1b;">PREDNOSTI</h2>
        <div class="benefits_list">
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/5.png" class="block-img" alt="" style="width: 150px;">
                </div>
                <div  class="top-info">
                    <p class="right-2">Potpuno autonoman sistem</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/6.png" class="block-img" alt="" style="width: 150px;">
                </div>
                <div  class="top-info">
                    <p class="right-2">Štedi energiju i ekološki je prihvatljiv proizvod</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/7.png" class="block-img" alt="" style="width: 150px;">
                </div>
                <div  class="top-info">
                    <p class="right-2">Otporan je na sve vremenske uslove</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/8.png" class="block-img" alt="" style="width: 150px;">
                </div>
                <div  class="top-info">
                    <p class="right-2">Kućište i vodena pumpa od kvalitetnog materijala</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="use_steps_section" id="haracter">
    <div class="wrapper clearfix">
        <div class="comp">
            <h2 style="color:#bf1b1b">KARAKTERISTIKE</h2>
            <div class="comp-left"> <img src="{{ asset('/') }}dailysharkFiles/solarfountain/use_steps__image.jpg" alt="Kelvin Safety Tool"></div>
            <div class="comp-right">
                <ul>
                    <li><b>Boja:</b> crna</li>
                    <li><b>Materijal:</b> ABS plastika</li>
                    <li><b>Napon:</b> 5V</li>
                    <li><b>Snaga:</b> 3.5W</li>
                    <li><b>Napajanje:</b> Solarno</li>
                    <li><b>Baterija:</b> 1200 mAH</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section" id="otzv">
    <div class="wrapper">
        <h2 style="color:#bf1b1b">RECENZIJE KUPACA</h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img src="{{ asset('/') }}dailysharkFiles/solarfountain/reviews__review2_photo.jpg" alt="спиннер">
                <div class="author_name">Svetlana, 41 godina</div>
                <p>Solarna fontana je odlična, vodootporna je i dosta kvalitetna. Na mojoj terasi stalno žubori voda i to me opušta. Ptičice piju vodu iz nje i to me mnogo raduje jer mogu da im pomognem na vrućini. Odličan proizvod.</p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}dailysharkFiles/solarfountain/reviews__review1_photo.jpg" alt="спиннер">
                <div class="author_name">Miroslava, 32 godine</div>
                <p>Nedavno sam kupila solarnu fontanu i jako mi se svidela. Lepo se uklopila u mom dvorištu,a deca se oduševljena, non stop se igraju oko nje. Kvalitet je odličan, koristim je već 6 meseci. Kada je na suncu ona radi, kada zađe sunce prestaje da radi, što mi savršeno odgovara.</p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}dailysharkFiles/solarfountain/reviews__review3_photo.jpg" alt="спиннер">
                <div class="author_name">Olga, 37 godina</div>
                <p>Naručila sam 4 komada za celo dvorište. Postavljanje je vrlo jednostavno u par koraka. Baš lepo izgleda, a moji pas i mačka su srećni zbog fontana, non stop se ludo zabavljaju. Preporučila bih svakome da ovo stavi u dvorište ili na terasu, ako živi u stanu.</p>
            </div>
        </div>
    </div>
</section>
<!-- /reviews -->
<!-- order steps -->
<section class="order_steps_section" id="order">
    <div class="wrapper">
        <h2 style="color:#bf1b1b">KAKO PORUČITI SOLARNU FONTANU?</h2>
        <div class="steps_list">
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/order_steps__step1_image.jpg" alt="Гамак для отдыха">
                    <div class="number">1</div>
                </div>
                <p>Ostavite podatke za dostavu na našem sajtu</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/order_steps__step2_image.jpg" alt="Гамак для отдыха">
                    <div class="number">2</div>
                </div>
                <p>Kontaktiraćemo Vas da potvrdimo porudžbinu</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/order_steps__step3_image.jpg" alt="Гамак для отдыха">
                    <div class="number">3</div>
                </div>
                <p>Isporuka brzom poštom u roku od 1-2 radna dana</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/solarfountain/order_steps__step4_image.jpg" alt="Гамак для отдыха">
                    <div class="number">4</div>
                </div>
                <p>Paket plaćate po preuzimanju direktno kuriru brze pošte</p>
            </div>
        </div>
    </div>
</section>
<!-- /order steps -->
<!-- order -->
<section class="order_section" id="order-form">
    <div class="top_title_block">
        <div class="wrapper">
            <h3>PORUČITE ODMAH <span>SA 40% POPUSTA</span></h3>
        </div>
    </div>
    <div class="content_block">
        <div class="wrapper">
            <div class="title_block">
                <h3 class="main_title">SOLARNA FONTANA</h3>
                <p class="subtitle">ZA PTIČICE I LJUBIMCE</p>
            </div>
            <div class="discount"> </div>
            <div class="form_block">
                <div class="price_block clearfix">
                    <div class="price_item old">
                        <div class="text">Redovna cena:</div>
                        <div class="value">
                            {{ $prices[1]['originalPrice'] }}
                            {{ $prices[1]['currency'] }}
                        </div>
                    </div>
                    <div class="price_item new">
                        <div class="text">Cena sada:</div>
                        <div class="value">
                            {{ $prices[1]['amount'] }}
                            {{ $prices[1]['currency'] }}
                        </div>
                    </div>
                </div>
                <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input class="field" type="text" name="name" placeholder="Ime i prezime" required>
                    <input class="field" type="tel" name="phone" placeholder="Telefon" required>
                    <input class="field" type="text" name="shipping_address" placeholder="Adresa">
                    <input class="field" type="text" name="shipping_city" placeholder="Grad">
                    <button class="button" type="submit">Poručite sada</button>
                </form>
                <div class="deadline_text">Količine su ograničene</div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}dailysharkFiles/solarfountain/jquery.panorama.js"></script>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/solarfountain/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
