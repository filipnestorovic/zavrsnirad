<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/ziptrimer/slick.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/ziptrimer/style.css" type="text/css">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/ziptrimer/pr4.jpg"type="image/x-icon">
    <script type="text/javascript" src="{{ asset('/') }}shared_files/slick.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}dailysharkFiles/ziptrimer/script.js"></script>
    <style>@font-face{font-family:'AvenirNextCyr';src:url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Light.woff2") format('woff2'),url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Light.woff") format('woff'),url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Light.ttf") format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'AvenirNextCyr';src:url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff2") format('woff2'),url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.woff") format('woff'),url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Regular.ttf") format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'AvenirNextCyr';src:url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Medium.woff2") format('woff2'),url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Medium.woff") format('woff'),url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Medium.ttf") format('truetype');font-weight:500;font-style:normal}@font-face{font-family:'AvenirNextCyr';src:url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff2") format('woff2'),url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.woff") format('woff'),url("{{ asset('/') }}fonts/subset-AvenirNextCyr-Bold.ttf") format('truetype');font-weight:700;font-style:normal}</style>
</head>
<body>
@include('components.display_errors')
<section class="topline">
    <div class="wrap">
        <ul class="topline__ul">
            <li>100% garancija kvaliteta</li>
            <li>Dostava brzom poštom</li>
            <li>Preko 4210 pozitivnih kritika</li>
        </ul>
    </div>
</section>
<section class="header-one">
    <div class="wrap">
        <div class="title-cont clearfix">
            <h1>ZIP TRIMMER</h1>
            <h2>NA BATERIJE SA ULTRA JAKIM MOTOROM</h2>
        </div>
        <div class="sale2">
            popust:
            <p>40%</p>
        </div>
        <ul class="header-one_plus">
            <li>
                <p>Sređuje čak i suvu travu i nepoželjno rastinje</p>
            </li>
            <li>
                <p>Radi na 6 AA baterija</p>
            </li>
            <li>
                <p>Teleskopska ručka za teško dostupna mesta</p>
            </li>
            <li>
                <p>Jednostavam i praktičan za korišćenje</p>
            </li>
        </ul>
        <div class="price-button">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Stara cena:</span>
                    <p>
                        <span class="price_land_s2">
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <small class="price_land_curr">
                            RSD
                        </small>
                    </p>
                </div>
                <div class="new-cost">
                    <span>Nova cena:</span>
                    <p>
                        <span class="price_land_s1">
                           {{ $prices[1]['amount'] }}
                        </span>
                        <small class="price_land_curr">
                            RSD
                        </small>
                    </p>
                </div>
            </div>
            <a href="#order_form" class="button-m">Poručite sada</a>
        </div>
        <ul class="stock">
            <li>12</li>
            <li>KOMADA OSTALO</li>
        </ul>
        <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/1.gif" alt="" class="top-gif">
        <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/kent.png" alt="" class="kent">
    </div>
</section>
<!--ПРЕИМУЩЕСТВА 3-4 -->
<section class="about">
    <div class="wrap nopad">
        <h2 class="title">
            <span>POUZDAN ALAT</span>
            U SVAKOM DOMAĆINSTVU
        </h2>
        <p>Lagan i praktičan trimer za travu bez goriva koje stvara neprijatan miris i bez dosadnog električnog kabla. Možete kositi vegetaciju
            čak i na najnepristupačnijim mestima, na primer u blizini ograde, između i pored ivičnjaka ili oko drveća bez mnogo truda i gubljenja vremena.</p>
        <ul class="list col3 ul-gif">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/2.gif" alt="">
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/3.gif" alt="">
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/4.gif" alt="">
            </li>
        </ul>
        <h2 class="title">PREDNOSTI TRIMERA</h2>
        <ul class="list col4 round border3">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/pr1.jpg" alt="">
                <h3>Izdržljivo ABS kućište</h3>
                <p>otporno na udarce i padove</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/pr2.jpg" alt="">
                <h3>Snažan elektromotor</h3>
                <p>koji se bori sa travom i rastinjem</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/pr3.jpg" alt="">
                <h3>Teleskopska ručka</h3>
                <p>omogućava vam da dođete do najnezgodnijih mesta</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/pr4.jpg" alt="">
                <h3>Zaštitna plastika</h3>
                <p>štiti lice i oči od letećih krhotina</p>
            </li>
        </ul>
        <a href="#order_form" class="button-m">Poručite sa popustom</a>
    </div>
</section>
<!--ХАРАКТЕРИСТИКИ 2-->
<section class="charbox">
    <div class="wrap nopad">
        <ul class="list col3 ">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/char_1.jpg" alt="">
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/char_2.jpg" alt="">
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/char_3.jpg" alt="">
            </li>
        </ul>
        <h2 class="title">
            <span>SADRŽAJ</span> PAKETA
        </h2>
        <div class="char2 two-col">
            <div class="two-col_left">
                <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/char.jpg" alt="">
            </div>
            <div class="two-col_right">
                <ul class="char2_ul">
                    <li>
                        <p><b>Trimer:</b> 1 komad</p>
                    </li>
                    <li>
                        <p><b>Materijal:</b> ABS plastika, aluminijum</p>
                    </li>
                    <li>
                        <p><b>Teleskopska ručka:</b> 1 komad</p>
                    </li>
                    <li>
                        <p><b>Propeleri:</b> 20 komada</p>
                    </li>
                    <li>
                        <p><b>Štit:</b> 1 komad</p>
                    </li>
                    <li>
                        <p><b>Baterije:</b> 6 x AA (nisu u paketu)</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="compare">
    <div class="wrap nopad">
        <h2 class="title">
            <span>ZIP TRIMMER</span>
            <br> EFIKASAN I EKONOMIČAN
        </h2>
        <p>Uporedite baštenski trimer <br> sa skupljim i većim benzinskim trimerima</p>
        <div class="compare_col2 two-col">
            <div class="two-col_right">
                <div class="compare__item clearfix">
                    <div class="ci__img"><img src="{{ asset('/') }}dailysharkFiles/ziptrimer/comp2.jpg" alt=""></div>
                    <div class="ci__text">
                        <h3>ZIP TRIMMER</h3>
                        <ul>
                            <li>
                                Cena:
                                <b>
                                 <span class="price_land_s1">
                                    {{ $prices[1]['amount'] }}
                                    RSD
                                 </span>
                                </b>
                            </li>
                            <li>Kompaktan i lagan</li>
                            <li>Ne zahteva veštine rukovanja</li>
                            <li>Nizak nivo buke</li>
                            <li>Siguran za korišćenje</li>
                            <li>Radi na jeftine AA baterije</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="two-col_left">
                <div class="compare__item clearfix">
                    <div class="ci__img"><img src="{{ asset('/') }}dailysharkFiles/ziptrimer/comp1.jpg" alt=""></div>
                    <div class="ci__text">
                        <h3>BENZINSKI TRIMER</h3>
                        <ul>
                            <li>
                                Cena od:
                                <b>18000 RSD</b>
                            </li>
                            <li>Teški i neudobni</li>
                            <li>Zahtevaju vešto rukovanje</li>
                            <li>Opasan za korišćenje</li>
                            <li>Stvara jake vibracije</li>
                            <li>Dodatni troškovi za benzin i naftu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="#order_form" class="button-m">PORUČITE ZIP TRIMMER</a>
    </div>
</section>
<!--ОТЗЫВЫ 4-6 -->
<section class="reviewsbox">
    <div class="wrap nopad">
        <h2 class="title">
            <span>KOMENTARI</span>
            KUPACA
        </h2>
        <!--ОТЗЫВЫ 4-->
        <div class="reviews-4">
            <div>
                <div class="rev shadow">
                    <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/rev1.jpg" alt="">
                    <h3>"Odlično za košenje trave"</h3>
                    <p class="just">Dovoljno je moćan za svoju malu dimenziju i težinu. Ono što mi je važno je da je motor u veoma čvrstom kućištu. Možete raditi na mokroj travi ne plašeći se da će trimer pregoreti.
                        Odličan alat za košenje trave duž ograde i između drveća. Brzo i efikasno kosi suvu travu i maslačak. Sve preporuke za ovaj proizvod! </p>
                    <span>Sretko Avramović, Čačak</span>
                </div>
            </div>
            <div>
                <div class="rev shadow">
                    <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/rev3.jpg" alt="">
                    <h3>"U dve sezone rada nije bilo kvarova"</h3>
                    <p class="just">Snažan trimer. Koristim ga na selu već 2 godine. Tamo gde kosilica ne može da priđe, ovaj trimer uradi odličan posao. Tokom dve sezone rada nije bilo kvarova, odlično služi.</p>
                    <span>Viktor Mitrović, Koraćica</span>
                </div>
            </div>
            <div>
                <div class="rev shadow">
                    <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/rev2.jpg" alt="">
                    <h3>"Dvorište održavam u urednom stanju baš kako treba"</h3>
                    <p class="just">Ovaj trimer nije prvi koji sam kupio. Pre njega sam koristio neki električni posle kog sam se tresao 2 sata od vibracija. Sa Zip Trimmerom nemam tih problema, vrlo je udoban za rad.
                        U kompletu se nalaze vezice koje se koriste kao sekači, ručka i štit. Jako sporo troši baterije, mogu da izrdrže celu sezonu.</p>
                    <span>Srđan Petrović, Topola</span>
                </div>
            </div>
        </div>
        <!--end reviews-4  -->
        <a href="#order_form" class="button-m">Poručite sa popustom</a>
    </div>
</section>
<!--end ОТЗЫВЫ 4-6 --><!--КАК ЗАКАЗАТЬ-->
<section>
    <div class="wrap nopad">
        <h2 class="title">KAKO PORUČITI?</h2>
        <!--КАК ЗАКАЗАТЬ 1-->
        <ul class="order1 list col4">
            <li>
                <span></span>
                <h3>korak 1</h3>
                <p>Ostavite podatke za dostavu na našem sajtu</p>
            </li>
            <li>
                <span></span>
                <h3>korak 2</h3>
                <p>Kontaktiraćemo vas da potvrdimo detalje vaše porudžbine</p>
            </li>
            <li>
                <span></span>
                <h3>korak 3</h3>
                <p>Vašu porudžbinu šaljemo brzom poštom u roku od 1-2 radna dana</p>
            </li>
            <li>
                <span></span>
                <h3>korak 4</h3>
                <p>Plaćate paket po prijemu</p>
            </li>
        </ul>
    </div>
</section>
<section class="footer-one">
    <div class="wrap">
        <div class="title-cont clearfix">
            <h1>ZIP TRIMMER</h1>
            <h2>NA BATERIJE SA ULTRA JAKIM MOTOROM</h2>
        </div>
        <div class="sale2">
            popust:
            <p>40%</p>
        </div>
        <div class="formbox shadow">
            <div class="price clearfix">
                <div class="old-cost">
                    <span>Stara cena:</span>
                    <p>
                        <span class="price_land_s2">
                           {{ $prices[1]['originalPrice'] }}
                        </span>
                        <small class="price_land_curr">
                            RSD
                        </small>
                    </p>
                </div>
                <div class="new-cost">
                    <span>Cena sada:</span>
                    <p>
                        <span class="price_land_s1">
                           {{ $prices[1]['amount'] }}
                        </span>
                        <small class="price_land_curr">
                            RSD
                        </small>
                    </p>
                </div>
            </div>
            <form id="order_form" action="{{$orderRoute}}" class="main-order-form m1-form orderformcdn" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field" name="name" type="text" placeholder="Ime i prezime" value="" required>
                <input class="field" name="phone" type="tel" placeholder="Telefon" value="" required>
                <button class="button-m">Završi porudžbinu</button>
            </form>
        </div>
        <ul class="stock">
            <li>12</li>
            <li>KOMADA OSTALO</li>
        </ul>
        <img src="{{ asset('/') }}dailysharkFiles/ziptrimer/kent.png" alt="" class="kent">
    </div>
</section>
@include('components.pixel_footer')
</body>
</html>
