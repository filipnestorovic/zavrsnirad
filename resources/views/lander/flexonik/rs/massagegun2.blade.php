<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/png" href="{{ asset('/') }}flexonikFiles/massagegun2/use__use1_image.jpg">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/massagegun2/reset.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}shared_files/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/massagegun2/styles_1.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/massagegun2/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <style>
        @media (min-width: 640px) and (max-width: 659px) {
            .order_section .discount {
                display: none;
            }
            .offer_section .triggers_block {
                display: none;
            }
            .use_steps_section ul {
                width: 300px;
            }
            .order_section .main_title {
                font-size: 16px;
                line-height: 32px;
            }
            .offer_section .main_title {
                font-size: 16px;
                line-height: 32px;
            }
            .order_section .subtitle {
                font-size: 20px;
                line-height: 23px;
            }
        }
        @media (min-width: 1000px) {
            .top {
                margin-top: 25px;
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header class="header__new">
    <div class="header__main">
        <h1>TERAPIJSKI I OPUŠTAJUĆI <br/> MASAŽNI PIŠTOLJ</h1>
        <img src="{{ asset('/') }}flexonikFiles/massagegun2/header_girl.png" alt class="header__girl">
        <div class="header__price">
            <div class="header__price_old">
                <p> Stara cena:</p>
                <span> {{$prices[1]['originalPrice']}} RSD</span>
            </div>
            <div class="header__price_new">
                <p> Nova cena:</p>
                <span> {{$prices[1]['amount']}} RSD</span>
            </div>
        </div>
        <a href="#order_form" class="button"> Poruči sada</a>
        <img src="{{ asset('/') }}flexonikFiles/massagegun2/header_product.png" alt class="header_product">
    </div>
    <div class="header__sale">40% popusta</div>
    <div class="header__nozzles"><span>4</span>nastavka</div>
</header>
<!-- /offer -->
<!-- results -->
<section class="results_section">
    <div class="wrapper">
        <h2>ŠTA JE <span style="color:#ff8a00">MASAŽNI PIŠTOLJ</span> I ZAŠTO JE POTREBAN?</h2>
        <div class="box-osob" id="os">
            <div class="img-toptop">
                <!--left-img-->
                <img src="{{ asset('/') }}flexonikFiles/massagegun2/2e43918a516d7d1b6e3ef36318d74b52.4.jpg" class="top">
            </div>
            <div class="img-toptop">
                <div class="main-text" style="margin: 10px 20px 20px 20px;">
                    <h3 class="box__body-title"> </h3>
                    <div class="box__body-text" style="font-size: 19px">Pištolj masažeri su jedinstveni uređaji koji koriste ne samo sportisti, već i oni koji aktivno prate svoje zdravlje i žele da razviju
                        mišićnu masu. Dakle, takav masažer ima tačkasto delovanje na problematična područja, uklanja bolove u mišićima, što je posebno važno nakon treninga,
                        kao i za ljude koji preferiraju Crossfit i druge naporne vežbe.</div>
                </div>
            </div>
        </div>
        <div class="box-osob-2">
            <div class="img-toptop">
                <div class="main-text">
                    <h3 class="box__body-title"></h3>
                    <div class="box__body-text">
                        <p>Efekat masažera na mišićnu muskulaturu uporediv je sa efektom uređaja za terapiju udarnim talasima. Ublažava bolove u mišićima i umor nakon posla,
                            vežbe ili vremena provedenog za računarom.</p>
                        <ul>
                            <li> - <b> Ublažava bolove u vratu</b></li>
                            <li> - <b> Područja ruku, ramena, leđa i nogu</b></li>
                            <li> - <b> Oporavak mišića nakon fizičkog napora</b></li>
                            <li> - <b> Opuštanje i istezanje</b></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="img-toptop flex-left">
                <img src="{{ asset('/') }}flexonikFiles/massagegun2/box-2_ver1.jpg" class="img-my-top">
            </div>
        </div>
        <div class="new__block">
            <h2><span style="color:#ff8a00">MASAŽA KLJUČNIH TAČAKA</span></h2>
            <div class="new__block_textWrapper">
                <p>Kada se „čvor“ stvori, iako manji od 1cm može da bude jako neprijatan.
                    Pravovremeni tretman i masaža sprečavaju pojavu „čvorova“ i poboljšavaju opšte
                    stanje korisnika. Uz širok dijapazon nastavaka, pogađajte i najsitnije tačke i ublažite
                    napetost mišića u najkraćem roku, bez skupih masaža i medicinksih tretmana.</p>
                <div class="new__block_list">
                    <p><span>Ključne tačke</span></p>
                    <ul>
                        <li>Područje bola</li>
                        <li>Područje masaže</li>
                        <li>Tretman mekim mlaznicama</li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('/') }}flexonikFiles/massagegun2/points.jpg" alt>
        </div>
    </div>
</section>
<section class="use_section" id="use_section">
    <div class="wrapper">
        <h2><span style="color: #02bf02;">4 NASTAVKA</span> ZA MASAŽNI PIŠTOLJ</h2>
        <div class="use_list">
            <div class="use_item">
                <img src="{{ asset('/') }}flexonikFiles/massagegun2/use__use1_image.jpg" alt="Kelvin Safety Tool">
                <h4>OKRUGLI NASTAVAK</h4>
                <p>Savršeno za tretiranje velikih mišića (grudni koš, biceps, gluteus, kao i mišiće nogu)</p>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}flexonikFiles/massagegun2/use__use2_image.jpg" alt="Kelvin Safety Tool">
                <h4>VILJUŠKA NASTAVAK</h4>
                <p>Odlično za uklanjanje bola i pritiska u vratu i kičmenom stubu</p>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}flexonikFiles/massagegun2/use__use3_image.jpg" alt="Kelvin Safety Tool">
                <h4>RAVNI NASTAVAK</h4>
                <p>Dizajniran za rad na svim delovima tela, za zatezanje kože i razbijanje potkožnih masnih ćelija</p>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}flexonikFiles/massagegun2/use__use4_image.jpg" alt="Kelvin Safety Tool">
                <h4>METAK NASTAVAK</h4>
                <p>Odličan za tretiranje ciljaniih tačaka i lokalno delovanje na određenim i malim mišićnim površinama</p>
            </div>
            <a href="#order_form" class="button">ISKORISTI PONUDU</a>
        </div>
    </div>
</section>
<section class="use_steps_section" id="haracter">
    <div class="wrapper clearfix">
        <div class="comp">
            <h2 style="color:#da1c4d">Tehničke karakteristike</h2>
            <div class="comp-left"> <img src="{{ asset('/') }}flexonikFiles/massagegun2/ver3.jpg" alt="Kelvin Safety Tool"></div>
            <div class="comp-right">
                <ul>
                    <li><b>Kapacitet baterije:</b> 2600 Mah;</li>
                    <li><b>Sila pritiska:</b> 0 - 5.1 kg/cm;</li>
                    <li><b>Amplituda:</b> 11 mm;</li>
                    <li><b>Maksimalni nivo buke:</b> 45dB;</li>
                    <li>Pištolj za masažu ima 6 brzina</li>
                    <li>4 nastavka</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section style="margin: 40px auto; background: #f7f7f7;     padding: 40px 0 10px;" id="select">
    <h2 style="color: #ff8a00;">UPOTREBA TERAPEUTSKOG MASAŽERA?</h2>
    <div class="box-osob">
        <div class="img-toptop">
            <!--left-img-->
            <img src="{{ asset('/') }}flexonikFiles/massagegun2/box-1_ver1.jpg">
        </div>
        <div class="img-toptop">
            <div class="main-text">
                <div class="box__body-text">
                    <p> <span class="top-number">1</span> - Može se koristiti za masažu bilo kog dela tela, čime se stimuliše protok krvi</p>
                    <p> <span class="top-number">2</span> - Masažer, zahvaljujući vibracijama oslobađa napetost u telu, otklanja umor i omogućava eliminisanje napetosti mišića nakon treninga</p>
                    <p> <span class="top-number">3</span> - Odličan je za sportiste koji osećaju bol, grčeve ili se oporavljaju od povreda</p>
                </div>
            </div>
        </div>
    </div>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <div class="box__body-text">
                    <p> <span class="top-number">4</span> - Uz pomoć masažera poboljšava se stanje kože, mišića i mekih tkiva</p>
                    <p> <span class="top-number">5</span> - Tehnologija masaže uz pomoć takvog uređaja takođe ima efekat na izgled kože, dajući joj mladalačku elastičnost i sjaj</p>
                    <p> <span class="top-number">6</span> - Kontinuirane sesije pištoljem za masažu garantuju da će se performanse mišića značajno povećati</p>
                </div>
            </div>
        </div>
        <div class="img-toptop flex-left noise_level">
            <img src="{{ asset('/') }}flexonikFiles/massagegun2/box-3_ver1.jpg" class="img-my-top">
            <p><span>< 45DB</span></p>
            <p>emituje nizak nivo zvuka</p>
        </div>
    </div>
</section>
<section class="reviews_section" id="otzv">
    <div class="wrapper">
        <h2 style="color:#3d268e">UTISCI KUPACA</h2>
        <h3 class="otz-my"><span style="color: #fb723f">97.5% kupaca </span> poslalo nam je da su zadovoljni pištolj masažerom!</h3>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <p>Svi sa mog posla su kupili ovaj masažer i obožavaju ga. Ja ga često koristim, a koriste ga i moje kćerke. Odlično opušta mišiće. Hvala vam!</p>
                <div class="author_name">Irena, 24 godine <br>Bankar za poslove sa stanovništvom</div>
            </div>
            <div class="review_item">
                <p>Vrat me je često boleo, ponekad je to trajalo i po nekoliko dana. Budio sam se noću i imao sam loš san. Prijatelji su me nagovorili da kupim ovaj masažer,
                    ja sam u početku bio skeptičan ali sam kasnije odlučio da pokušam. Koristim ga više od 6 meseci, bol je već posle par korišćenja bio manji, a sada je potpuno
                    nestao. Masažer je savršen, odlično radi! Sve preporuke!</p>
                <div class="author_name">Elena, 42 godine <br>Knjigovođa</div>
            </div>
            <div class="review_item">
                <p>Provodim mnogo vremena za volanom. Do nedavno su mi bol i umor bili stalni saputnici. Sada se zaista sve promenilo. Sa zadovoljstvom putujem i sedam za
                    volan bez straha od bolova koje sam ranije imao.</p>
                <div class="author_name">Mihajlo, 55 godina <br>Profesionalni vozač autobusa</div>
            </div>
        </div>
    </div>
</section>
<!-- /reviews -->
<!-- order steps -->
<section class="order_steps_section">
    <div class="wrapper">
        <h2 style="color:#3d268e">DOSTAVA I GARANCIJA</h2>
        <div class="steps_list">
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/massagegun2/order_steps__step2_image.jpg" alt="Гамак для отдыха">
                </div>
                <p><b>Garancija</b></p>
                <p>Sve proizvode temeljno proveravamo pre slanja i dajemo garanciju na iste.</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/massagegun2/order_steps__step3_image.jpg" alt="Гамак для отдыха">
                </div>
                <p><b>Isporuka</b></p>
                <p>Dostava brzom poštom u roku od 1-2 radna dana.</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/massagegun2/order_steps__step4_image.jpg" alt="Гамак для отдыха">
                </div>
                <p><b>Nema plaćanja unapred!</b></p>
                <p>Plaćanje porudžbine vrši se po prijemu paketa.</p>
            </div>
        </div>
    </div>
</section>
<!-- /order steps -->
<!-- order -->
<section class="order_section" id="order-form">
    <div class="top_title_block">
        <div class="wrapper">
            <h3>PORUČITE SADA <span>SA POPUSTOM OD 40%</span></h3>
        </div>
    </div>
    <header class="header__new header__bottom">
        <div class="header__main">
            <h1>TERAPIJSKI I OPUŠTAJUĆI <br> MASAŽNI PIŠTOLJ</h1>
            <img src="{{ asset('/') }}flexonikFiles/massagegun2/header_girl.png" alt class="header__girl footer__girl">
            <div class="header__price">
                <div class="header__price_old">
                    <p> Stara cena:</p>
                    <span> {{$prices[1]['originalPrice']}} RSD</span>
                </div>
                <div class="header__price_new">
                    <p> Nova cena:</p>
                    <span> {{$prices[1]['amount']}} RSD</span>
                </div>
            </div>
            <div class="header__form">
                <form action="#" method="POST" id="order_form">
                    <input name="csrf_token" type="hidden" value="0ee4c1a7c14f0d21446b11ea18b7337b:1631717389" />
                    <label for></label>
                    <input type="text" placeholder="Ime i prezime" name="name" required>
                    <label for></label>
                    <input type="tel" placeholder="Telefon" name="phone" required>
                    <button class="button orderButton" type="submit">ZAVRŠI PORUDŽBINU</button>
                </form>
            </div>
        </div>
        <div class="header__sale">40% popusta</div>
        <div class="header__nozzles"><span>4</span>nastavka</div>
    </header>
</section>
<script src="{{asset('/')}}shared_files/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
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