<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/png" href="{{ asset('/') }}dailysharkFiles/gardensolarlamp/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/gardensolarlamp/styles.css">
    <style>
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.html') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular-2.html') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'AvenirNextCyr';
            src: url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.html') format('woff'),
            url('{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold-2.html') format('truetype');
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
                    <li><a href="#osss">KARAKTERISTIKE</a></li>
                    <li><a href="#instr">ZAŠTO KUPITI</a></li>
                    <li><a href="#pochemu">PREDNOSTI</a></li>
                    <li><a href="#haracter">SPECIFIKACIJA</a></li>
                    <li><a href="#otzv">RECENZIJE</a></li>
                    <li><a href="#order-form">PORUČITE ODMAH</a></li>
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
                <h3 class="main_title">BAŠTENSKA SOLARNA LAMPA</h3>
                <p class="subtitle">Osvetlite svoje dvorište<br> koristeći sunčevu energiju</p>
            </div>
            <div class="discount"></div>
            <ul>
                <li>Ima vodootporno kućište</li>
                <li>Otporna na sve vremenske uslove</li>
                <li>Lampa se sama pali sa prvim mrakom</li>
                <li>Solarno punjenje</li>
                <li>Nema kablova i baterija</li>
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
        <h2 style="color:#bf1b1b">MODERAN DIZAJN</h2>
        <div class="box-osob" id="os">
            <div class="img-toptop">
                <!--left-img-->
                <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/ver1.jpg">
            </div>
            <div class="img-toptop">
                <div class="main-text" style="margin: 10px 20px 20px 20px;">
                    <h3 class="box__body-title"> </h3>
                    <div class="box__body-text" style="font-size: 18px">
                        Lampe su neutralnog stila i mogu se korisititi u svakom dvorištu. Rasporedite ih duže staza ili oko bazena.
                        Idealne su za označavanje i osvetljavanje staza u dvorištu. Takođe, osvetljavaju dovoljno da oteraju lopove.
                    </div>
                    <div class="box__body-text" style="font-size: 18px">
                        Napravljene su od kvalitetnog materijala, imaju malu težinu i veliku izdržljivost. Mogu se bezbedno koristiti u svim vremenskim uslovima,
                        ne blede od sunca i ne pucaju.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gallery_sect" style="padding-top: 5px;">
    <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/gallery.jpg" alt="" class="panorama" height="323" width="1968">
</section>
<section class="benefits_section" id="osss">
    <div class="wrapper">
        <h2 style="color: #bf1b1b;">KARAKTERISTIKE</h2>
        <div class="benefits_list">
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/1.jpg" class="block-img" alt="">
                </div>
                <div  class="top-info">
                    <p>Bezbedne, štedljive i ekološki prihvatljive</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/2.jpg" class="block-img" alt="">
                </div>
                <div  class="top-info">
                    <p>Jednostavne za korišćenje</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/3.jpg" class="block-img" alt="">
                </div>
                <div  class="top-info">
                    <p>Pogodno za spoljnu dekoraciju</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/4.jpg" class="block-img" alt="">
                </div>
                <div  class="top-info">
                    <p>Izrađene od visokokvalitetnih materijala</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="padding: 20px" id="instr">
    <h2 style="color: #bf1b1b">RAZLOZI ZA ODABIR SOLARNE LED LAMPE</h2>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#bf1b1b">Osvetli noć</h3>
                <div class="box__body-text"  style="font-size: 18px">
                    Neka vaše dvorište sija i nikada ne bude mračno. Hajde da zajedno napravimo ugodan i moderan prostor.
                </div>
            </div>
        </div>
        <div class="img-toptop flex-left">
            <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/box-5-ver1.jpg"  >
        </div>
    </div>
    <div class="box-osob" id="os">
        <div class="img-toptop">
            <!--left-img-->
            <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/box-5_ver2.jpg"  >
        </div>
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#bf1b1b">Offline rad</h3>
                <div class="box__body-text" style="font-size: 18px">
                    Solarna led lampa se automatski uljučuje i isključuje.
                    Potrebno je 6-8 sati dnevne svetlosti da se potpuno napuni. Uređaj ima ugrađen fotoosetljivi senzor koji reaguje na zrake.
                    Jedan ciklus solarnog punjenja je dovoljan za 8-10 sati rada.
                </div>
            </div>
        </div>
    </div>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <h3 class="box__body-title" style="color:#bf1b1b">Zaštita od spoljašnih faktora</h3>
                <div class="box__body-text"  style="font-size: 18px">
                    Treba napomenuti da lampa ima zaštitu od prašine i vlage. To znači da male čestice neće ući u uređaj, a kiša i sneg neće napraviti nikakvu štetu.
                </div>
            </div>
        </div>
        <div class="img-toptop flex-left">
            <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/box-5-ver3.jpg" >
        </div>
    </div>
    <div class="box-osob" id="os">
        <div class="img-toptop">
            <!--left-img-->
            <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/box-5-ver4.jpg"  >
        </div>
        <div class="img-toptop">
            <div class="main-text" >
                <h3 class="box__body-title" style="color:#bf1b1b">Dekorativno osvetljenje</h3>
                <div class="box__body-text" style="font-size: 18px">
                    Lampa zabodena u zemlju noću daje prelep efekat. Možete dekoristati vaše dvorište kako god želite.
                    Svi koji su ovo probali, potpuno su oduševljeni.
                </div>
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
                    <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/5.png" class="block-img" alt="" style="width: 150px;">
                </div>
                <div  class="top-info">
                    <p class="right-2">Potpuno autonoman sistem</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/6.png" class="block-img" alt="" style="width: 150px;">
                </div>
                <div  class="top-info">
                    <p class="right-2">Štedi energiju i ekološki je prihvatljiva</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/7.png" class="block-img" alt="" style="width: 150px;">
                </div>
                <div  class="top-info">
                    <p class="right-2">Otporna na vodu i vremenske uslove</p>
                </div>
            </div>
            <div class="benefit_item">
                <div class="icon_block">
                    <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/8.png" class="block-img" alt="" style="width: 150px;">
                </div>
                <div  class="top-info">
                    <p class="right-2">Kućište od izdržljivog materijala</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="use_steps_section" id="haracter">
    <div class="wrapper clearfix">
        <div class="comp">
            <h2 style="color:#bf1b1b">SPECIFIKACIJA</h2>
            <div class="comp-left"> <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/use_steps__image.jpg" alt="Kelvin Safety Tool"></div>
            <div class="comp-right">
                <ul>
                    <li><b>Materijal:</b> ABS PLASTIKA / ALUMINIJUM</li>
                    <li><b>Snaga:</b> 5V</li>
                    <li><b>Svetlosni tok:</b> 300 LM</li>
                    <li><b>Način punjenja:</b> solarna baterija</li>
                    <li><b>Vreme osvetljenja:</b> 8-10 sati</li>
                    <li><b>Vreme punjenja:</b> 6-8 sati</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="reviews_section" id="otzv">
    <div class="wrapper">
        <h2 style="color:#bf1b1b">UTISCI KUPACA</h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/reviews__review2_photo.jpg" alt="спиннер">
                <div class="author_name">Mihajlo, 41 godina</div>
                <p>
                    Izgleda zanimljivo, savršeno sija i lako se postavlja. Žena je sama izabrala lampu, a svidela joj se jednostavnost i cena.
                    Odmah smo kupili još 8 komada za osvetljavanje prostora ispred kuće. Sve sam ih uspeo da postavim za nekoliko minuta.
                </p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/reviews__review3_photo.jpg" alt="спиннер">
                <div class="author_name">Olga, 37 godina</div>
                <p>
                    Kupili smo solarne lampe za dvorište  i postavili ih duž staze i oko zimzelenog grmlja. Svetla su noću uvek upaljena, a ne moramo da
                    razmišljamo kada se pale i kada se gase - lampa to radi sama. Odlična stvar protiv lopova kojih u zimskom periodu ima više nego leti.
                </p>
            </div>
            <div class="review_item">
                <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/reviews__review1_photo.jpg" alt="спиннер">
                <div class="author_name">Stefan, 32 godine</div>
                <p>
                    Moje dvorište je kao dvorište neke vile od kada sam stavio ove lampe. Nemam reči, stvarno su vrhunske. Zabo sam ih u zemlju i više ne
                    razmišljam o njima. Daju dosta svetlosti noću, a ujutru se same ugase i tako u krug. Sve preporuke!
                </p>
            </div>
        </div>
    </div>
</section>
<!-- /reviews -->
<!-- order steps -->
<section class="order_steps_section" id="order">
    <div class="wrapper">
        <h2 style="color:#bf1b1b">KAKO DO BAŠTENSKIH SOLARNIH LAMPI?</h2>
        <div class="steps_list">
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/order_steps__step1_image.jpg" alt="Гамак для отдыха">
                    <div class="number">1</div>
                </div>
                <p>Ostavite podatke za dostavu na našem sajtu</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/order_steps__step2_image.jpg" alt="Гамак для отдыха">
                    <div class="number">2</div>
                </div>
                <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/order_steps__step3_image.jpg" alt="Гамак для отдыха">
                    <div class="number">3</div>
                </div>
                <p>Šaljemo brzom poštom u roku od 1-2 radna dana</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/order_steps__step4_image.jpg" alt="Гамак для отдыха">
                    <div class="number">4</div>
                </div>
                <p>Plaćate porudžbinu po prijemu</p>
            </div>
        </div>
    </div>
</section>
<!-- /order steps -->
<!-- order -->
<section class="order_section" id="order-form">
    <div class="top_title_block">
        <div class="wrapper">
            <h3>Poručite sada <span>i iskoristite 40% popusta</span></h3>
        </div>
    </div>
    <div class="content_block">
        <div class="wrapper">
            <div class="title_block">
                <h3 class="main_title">BAŠTENSKA SOLARNA LAMPA</h3>
                <p class="subtitle">Osvetlite svoje dvorište<br> koristeći sunčevu energiju</p>
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
                    <input class="field rumask" type="tel" name="phone" placeholder="Telefon" required>
                    <input class="field" type="text" name="shipping_address" placeholder="Adresa" required>
                    <input class="field" type="text" name="shipping_city" placeholder="Grad" required>
                    <button class="button" type="submit">Poručite sada</button>
                </form>
                <div class="deadline_text">Količine su ograničene</div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/jquery.panorama.js"></script>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/gardensolarlamp/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
