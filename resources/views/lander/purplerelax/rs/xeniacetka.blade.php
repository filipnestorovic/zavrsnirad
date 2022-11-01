<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="icon" type="image/png" href="{{ asset('/') }}purplerelaxFiles/xeniacetka/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}purplerelaxFiles/xeniacetka/styles.css">
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
                    <li><a href="#use_section"> PREDNOSTI</a></li>
                    <li><a href="#video_section"> VIDEO</a></li>
                    <li><a href="#instr">ZAŠTO KUPITI</a></li>
                    <li><a href="#haracter">KARAKTERISTIKE</a></li>
                    <li><a href="#otzv">RECENZIJE</a></li>
                    <li><a href="#order-form">PORUČITE</a></li>
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
                <h3 class="main_title">ELEKTRIČNA ČETKA XENIA<br> ZA ISPRAVLJANJE KOSE</h3>
            </div>
            <div class="discount"></div>
            <ul>
                <li>Zagreva se za nekoliko sekundi</li>
                <li>Pojačava volumen i sjaj kose</li>
                <li>Ne isušuje kosu i ne oštećuje je</li>
                <li>Ima ergonomski dizajni malu težinu</li>
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
<section class="results_section">
    <div class="wrapper">
        <h2 style="color:#a30909">ISPRAVLJANJE KOSE BEZ ŠTETNOG EFEKTA!</h2>
        <div class="box-osob" id="os">
            <div class="img-toptop">
                <!--left-img-->
                <img src="{{ asset('/') }}purplerelaxFiles/xeniacetka/ver1.jpg">
            </div>
            <div class="img-toptop">
                <div class="main-text" style="margin: 10px 20px 20px 20px;">
                    <h3 class="box__body-title"></h3>
                    <div class="box__body-text" style="font-size: 19px">
                        Električna četka za ispravljanje kose kombinuje dva korisna uređaja odjednom: peglu i češalj.
                        Pored toga ne samo da ispravlja kosu, već je i jonizuje, tako da kosa dobija prelep prirodni sjaj.
                    </div>
                    <div class="box__body-text" style="font-size: 19px">
                        Četka ima neverovatna svojstva ispravljanja kose nakon prvog prelaska preko pramena. Kosa se lako ispravlja
                        bez sagorevanja kože glave, ne kvari strukturu kose i ne ostavlja ispucale krajeve.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gallery_sect" style="padding-top: 5px;">
    <img src="{{ asset('/') }}purplerelaxFiles/xeniacetka/gallery.jpg" alt="" class="panorama" height="323"
         width="1968">
</section>
<section class="use_section" id="use_section">
    <div class="wrapper">
        <h2 style="color: #a30909;"> PREDNOSTI</h2>
        <div class="use_list">
            <div class="use_item">
                <img src="{{ asset('/') }}purplerelaxFiles/xeniacetka/5.png" alt="Kelvin Safety Tool">
                <p>Kombinuje peglu i češalj</p>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}purplerelaxFiles/xeniacetka/6.png" alt="Kelvin Safety Tool">
                <p>3D grejanje "zuba"</p>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}purplerelaxFiles/xeniacetka/8.png" alt="Kelvin Safety Tool">
                <p>5 režima zagrevanja</p>
            </div>
            <a href="#order_form" class="button">Poručite sada</a>
        </div>
    </div>
</section>
<section class="video_section" id="video_section">
    <div class="wrapper">
        <h2 style="color:#a30909">Pogledajte kako je lako koristiti Xenia četku</h2>
        <div class="video_wrapper">
            <div class="video_block">
                <video src="{{ asset('/') }}purplerelaxFiles/xeniacetka/3.mp4" width="100%" height="auto" preload="auto"
                       playsinline="" webkit-playsinline="" controls="" draggable="true"
                       poster="{{ asset('/') }}purplerelaxFiles/xeniacetka/3.jpg"></video>
            </div>
        </div>
    </div>
</section>
<section style="padding: 20px" id="instr">
    <h2 style="color: #a30909">ZAŠTO KUPITI XENIA ČETKU?</h2>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#a30909">Zdrav sjaj kose</h3>
                <div class="box__body-text" style="font-size: 19px">
                    Brzo oblikovanje kose sa jonizacijom će vašoj kosi dati sjaj, snagu i glatkoću. Takođe, Xenia četka uklanja statički elektricitet.
                    Keramički grejni element obložen turmalinom - zaglađuje svaku vlas, tako da vaša kosa dobija zdrav sjaj.
                </div>
            </div>
        </div>
        <div class="img-toptop flex-left">
            <img src="{{ asset('/') }}purplerelaxFiles/xeniacetka/box-5-ver1.jpg" style="
                  height: 100%;
                  width: 100%;
                  ">
        </div>
    </div>
    <div class="box-osob" id="os">
        <div class="img-toptop">
            <!--left-img-->
            <img src="{{ asset('/') }}purplerelaxFiles/xeniacetka/box-5_ver2.jpg" style="
                  height: 100%;
                  width: 100%;
                  ">
        </div>
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#a30909">Turmalinski premaz</h3>
                <div class="box__body-text" style="font-size: 19px">
                    Kvalitetna i udobna četka-pegla sa turmalinskim premazom, pogodna je za devojke sa talasastom i kovrdžavom kosom, a postaće i nezaobilazan alat
                    za vlasnice ravne kose - na primer, ako želite da sredite kosu za par minuta pre izlaska.
                </div>
            </div>
        </div>
    </div>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#a30909">Savršeno ravna i glatka kosa</h3>
                <div class="box__body-text" style="font-size: 19px">
                    Originalni oblik "zuba" će dati prelep oblik vašoj kosi, elegantno ispravljajući krajeve.
                    Radi na principu kombinacije češlja i pegle. Vaš zadatak je da uključite četku i nežno zagladite kosu u trajanju od 5-10 minuta (u zavisnosti od dužine kose)
                    i dobićete savršeno ujednačenu i ravnu kosu.
                </div>
            </div>
        </div>
        <div class="img-toptop flex-left">
            <img src="{{ asset('/') }}purplerelaxFiles/xeniacetka/box-5-ver3.jpg" style="
                  height: 100%;
                  width: 100%;
                  ">
        </div>
    </div>
</section>
<!-- use -->
<section class="benefits_section" id="pochemu">
    <div class="wrapper">
        <h2 style="color: #a30909;">Xenia četka takođe ima:</h2>
        <div class="benefits_list">
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/xeniacetka/6.jpg" class="block-img" alt="">
                </div>
                <div class="top-info">
                    <p class="right-2">Pogodan kabl za napajanje</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/xeniacetka/7.jpg" class="block-img" alt="">
                </div>
                <div class="top-info">
                    <p class="right-2">Brzo zagrevanje za 30 sekundi</p>
                </div>
            </div>
        </div>
        <br>
    </div>
    <br>
    <a href="#order_form" class="button">Poručite sada</a>
</section>
<section class="use_steps_section" id="haracter">
    <div class="wrapper clearfix">
        <div class="comp">
            <h2 style="color:#a30909">KARAKTERISTIKE</h2>
            <div class="comp-left"><img src="{{ asset('/') }}purplerelaxFiles/xeniacetka/use_steps__image.jpg"
                                        alt="Kelvin Safety Tool"></div>
            <div class="comp-right">
                <ul>
                    <li><b>Ulazni napon:</b> 220V</li>
                    <li><b>Dužina kabla:</b> 140cm</li>
                    <li><b>Težina:</b> 400g</li>
                    <li><b>Dimenzije:</b> 316 x 31,5 x 67 mm</li>
                    <li><b>Minimalna temperatura:</b> 130°C</li>
                    <li><b>Maksimalna temperatura:</b> 200°C</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section" id="otzv">
    <div class="wrapper">
        <h2 style="color:#a30909">UTISCI KUPACA</h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/xeniacetka/reviews__review1_photo.jpg" alt="спиннер">
                <div class="author_name">Anastasija, 36 godina</div>
                <p>Pošto je moja kosa čupava i neujednačena, ja ne mogu bez ovog uređaja. Moj utisak: Veoma sam zadovoljna ovom peglom za kosu.
                    Već dve godine radi besprekorno. Svoju funkciju obavlja savršeno, a cena je apsolutno smešna.</p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/xeniacetka/reviews__review3_photo.jpg" alt="спиннер">
                <div class="author_name">Katarina, 42 godine</div>
                <p>Četka je isporučena za samo 2 dana. Veoma mi se dopala komunikacija sa konsultantom koji me je pozvao i objasnio mi sve do detalja.
                    Xenia četka mi se jako dopala moram vam reći da vredi svakog dinara!</p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}purplerelaxFiles/xeniacetka/reviews__review2_photo.jpg" alt="спиннер">
                <div class="author_name">Irena, 38 godina</div>
                <p>Evo mog utiska nakon kupovine.
                    Četka je odlična, ispravlja kosu fenomenalno, i dobro je što mogu da podešavam temperaturu.
                    Primetila sam da kosa nakon ispravljanja sija i nekako je bujna što me prilično raduje. Preporučujem svakoj ženi da kupi ovu četku.</p>
            </div>
        </div>
    </div>
</section>
<!-- /reviews -->
<!-- order steps -->
<section class="order_steps_section">
    <div class="wrapper">
        <h2 style="color:#a30909">KAKO PORUČITI</h2>
        <div class="steps_list">
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/xeniacetka/order_steps__step1_image.jpg"
                         alt="Гамак для отдыха">
                    <div class="number">1</div>
                </div>
                <p>Ostavite svoje podatke na našem web sajtu</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/xeniacetka/order_steps__step2_image.jpg"
                         alt="Гамак для отдыха">
                    <div class="number">2</div>
                </div>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/xeniacetka/order_steps__step3_image.jpg"
                         alt="Гамак для отдыха">
                    <div class="number">3</div>
                </div>
                <p>Isporuka brzom poštom u roku od 1-2 radna dana</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}purplerelaxFiles/xeniacetka/order_steps__step4_image.jpg"
                         alt="Гамак для отдыха">
                    <div class="number">4</div>
                </div>
                <p>Plaćate po prijemu pošiljke</p>
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
                <h3 class="main_title">ELEKTRIČNA ČETKA XENIA<br> ZA ISPRAVLJANJE KOSE</h3>
            </div>
            <div class="discount"></div>
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
                    <input class="field" type="text" name="shipping_address" placeholder="Adresa" required>
                    <input class="field" type="text" name="shipping_city" placeholder="Grad" required>
                    <button class="button" type="submit">Poručite sada</button>
                </form>
                <div class="deadline_text">Količine su ograničene</div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}shared_files/jquery.panorama.js"></script>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}purplerelaxFiles/xeniacetka/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
