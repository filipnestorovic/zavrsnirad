<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}shared_files/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/massagegun/styles.css">
    <link rel="icon" type="image/png" href="{{ asset('/') }}flexonikFiles/massagegun/use__use1_image.jpg">
    <style>
        .offer_section {
            height: 618px;
            background: #eee url({{ asset('/') }}naturapharmFiles/massagegun2/desctop__offer_bg.jpg) center top no-repeat;
        }

        .order_section .content_block {
            padding: 0px 0 0;
            height: 700px;
            background: #eee url({{ asset('/') }}naturapharmFiles/massagegun2/desctop__order_bg.jpg) center top no-repeat;
        }

        @media screen and (max-width: 639px) {
            .offer_section {
                padding: 20px 0 25px;
                height: auto;
                background-image: url({{ asset('/') }}naturapharmFiles/massagegun2/mobile__offer_bg.png);
            }

            .order_section .content_block {
                padding: 20px 0 25px;
                height: auto;
                background-image: url({{ asset('/') }}naturapharmFiles/massagegun2/mobile__offer_bg.png);
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header class="offer_section">
    <div class="triggers_block">
    </div>
    <div class="content_block" id="content_block">
        <div class="wrapper">
            <div class="title_block">
                <h3 class="main_title">TERAPIJSKI I OPUŠTAJUĆI<br> MASAŽNI PIŠTOLJ</h3>
            </div>
            <div>
                <img src="{{ asset('/') }}naturapharmFiles/massagegun2/masager.jpg" alt=""/>
            </div>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">Stara cena:</div>
                    <div class="value">{{ $prices[1]['originalPrice'] }} RSD</div>
                </div>
                <div class="price_item new">
                    <div class="text">Nova cena:</div>
                    <div class="value">{{ $prices[1]['amount'] }} RSD</div>
                </div>
            </div>
            <a href="#order_form" class="button">PORUČITE SADA</a>

        </div>
    </div>
</header>
<section class="results_section">
    <div class="wrapper">
        <h2>ŠTA JE <span style="color:#ff8a00">MASAŽNI PIŠTOLJ</span> I ZAŠTO JE POTREBAN?</h2>
        <div class="box-osob" id="os">
            <div class="img-toptop"> <!--left-img-->
                <img src="{{ asset('/') }}naturapharmFiles/massagegun2/2e43918a516d7d1b6e3ef36318d74b52.4.jpg"
                     class="top">
            </div>
            <div class="img-toptop">
                <div class="main-text" style="margin: 10px 20px 20px 20px;"><h3 class="box__body-title"></h3>
                    <div class="box__body-text" style="font-size: 19px">Pištolj masažeri su jedinstveni uređaji koji
                        koriste ne samo sportisti, već i oni koji aktivno prate svoje zdravlje i žele da razviju
                        mišićnu masu. Dakle, takav masažer ima tačkasto delovanje na problematična područja, uklanja
                        bolove u mišićima, što je posebno važno nakon treninga,
                        kao i za ljude koji preferiraju Crossfit i druge naporne vežbe.
                    </div>
                </div>
            </div>
        </div>
        <div class="box-osob-2">
            <div class="img-toptop">
                <div class="main-text"><h3 class="box__body-title"></h3>
                    <div class="box__body-text">
                        <p>Efekat masažera na mišićnu muskulaturu uporediv je sa efektom uređaja za terapiju udarnim
                            talasima. Ublažava bolove u mišićima i umor nakon posla,
                            vežbe ili vremena provedenog za računarom.</p>
                        <br>
                        <ul>
                            <li>&#x2705; <b>Ublažava bolove u vratu</b></li>
                            <li>&#x2705; <b>Područja ruku, ramena, leđa i nogu</b></li>
                            <li>&#x2705; <b>Oporavak mišića nakon fizičkog napora</b></li>
                            <li>&#x2705; <b>Opuštanje i istezanje</b></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="img-toptop flex-left">
                <img src="{{ asset('/') }}naturapharmFiles/massagegun2/box-2_ver1.jpg" class="img-my-top">
            </div>
        </div>
    </div>
</section>
<section class="use_section" id="use_section">
    <div class="wrapper">
        <h2><span style="color: #02bf02;">4 NASTAVKA</span> ZA MASAŽNI PIŠTOLJ</h2>
        <div class="use_list">
            <div class="use_item">
                <img src="{{ asset('/') }}flexonikFiles/massagegun/use__use1_image.jpg" alt="Kelvin Safety Tool">
                <h4>OKRUGLI NASTAVAK</h4>
                <p>Savršeno za tretiranje velikih mišića (grudni koš, biceps, gluteus, kao i mišiće nogu)</p>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}flexonikFiles/massagegun/use__use2_image.jpg" alt="Kelvin Safety Tool">
                <h4>VILJUŠKA NASTAVAK</h4>
                <p>Odlično za uklanjanje bola i pritiska u vratu i kičmenom stubu</p>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}flexonikFiles/massagegun/use__use3_image.jpg" alt="Kelvin Safety Tool">
                <h4>RAVNI NASTAVAK</h4>
                <p>Dizajniran za rad na svim delovima tela, za zatezanje kože i razbijanje potkožnih masnih ćelija</p>
            </div>
            <div class="use_item">
                <img src="{{ asset('/') }}flexonikFiles/massagegun/use__use4_image.jpg" alt="Kelvin Safety Tool">
                <h4>METAK NASTAVAK</h4>
                <p>Odličan za tretiranje ciljaniih tačaka i lokalno delovanje na određenim i malim mišićnim
                    površinama</p>
            </div>
            <a href="#order_form" class="button">PORUČITE SADA</a>
        </div>
    </div>
</section>
<section class="use_steps_section" id="haracter">
    <div class="wrapper clearfix">
        <div class="comp">
            <h2 style="color:#da1c4d">Tehničke karakteristike</h2>
            <div class="comp-left"><img src="{{ asset('/') }}naturapharmFiles/massagegun2/ver3.jpg"
                                        alt="Kelvin Safety Tool"></div>
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
        <div class="img-toptop"> <!--left-img-->
            <img src="{{ asset('/') }}naturapharmFiles/massagegun2/box-1_ver1.jpg">
        </div>
        <div class="img-toptop">
            <div class="main-text">
                <div class="box__body-text"><p><span class="top-number">1</span> - može se koristiti za masažu bilo kog
                        dela tela, čime se stimuliše protok krvi</p>
                    <p><span class="top-number">2</span> - masažer, zahvaljujući vibracijama oslobađa napetost u telu,
                        otklanja umor i omogućava eliminisanje napetosti mišića nakon treninga</p>
                    <p><span class="top-number">3</span> - odličan je za sportiste koji osećaju bol, grčeve ili se
                        oporavljaju od povreda</p>
                </div>
            </div>
        </div>
    </div>
    <div class="box-osob-2">
        <div class="img-toptop">
            <div class="main-text">
                <div class="box__body-text">
                    <p><span class="top-number">4</span> - uz pomoć masažera poboljšava se stanje kože, mišića i mekih
                        tkiva</p>
                    <p><span class="top-number">5</span> - tehnologija masaže uz pomoć takvog uređaja takođe ima efekat
                        na izgled kože, dajući joj mladalačku elastičnost i sjaj</p>
                    <p><span class="top-number">6</span> - Kontinuirane sesite sa pištoljem za masažu garantuju da će se
                        performanse mišića značajno povećati</p>
                </div>
            </div>
        </div>
        <div class="img-toptop flex-left">
            <img src="{{ asset('/') }}flexonikFiles/massagegun/box-3_ver1.png" class="img-my-top">
        </div>
    </div>
</section>
<section class="reviews_section" id="otzv">
    <div class="wrapper">
        <h2 style="color:#3d268e">UTISCI KUPACA</h2>
        <h3 class="otz-my"><span style="color: #fb723f">97.5% kupaca </span>poslalo nam je da su zadovoljni pištolj
            masažerom!</h3>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <p>Svi sa mog posla su kupili ovaj masažer i obožavaju ga. Ja ga često koristim, a koriste ga i moje
                    kćerke. Odlično opušta mišiće. Hvala vam!</p>
                <div class="author_name">Irena, 24 godine <br>Bankar za poslove sa stanovništvom</div>
            </div>
            <div class="review_item">
                <p>Vrat me je često boleo, ponekad je to trajalo i po nekoliko dana. Budio sam se noću i imao sam loš
                    san. Prijatelji su me nagovorili da kupim ovaj masažer,
                    ja sam u početku bio skeptičan ali sam kasnije odlučio da pokušam. Koristim ga više od 6 meseci, bol
                    je već posle par korišćenja bio manji, a sada je potpuno
                    nestao. Masažer je savršen, odlično radi! Sve preporuke!</p>
                <div class="author_name">Elena, 42 godine <br>Knjigovođa</div>
            </div>
            <div class="review_item">
                <p>Provodim mnogo vremena za volanom. Do nedavno su mi bol i umor bili stalni saputnici. Sada se zaista
                    sve promenilo. Sa zadovoljstvom putujem i sedam za
                    volan bez straha od bolova koje sam ranije imao.</p>
                <div class="author_name">Mihajlo, 55 godina <br>Profesionalni vozač autobusa</div>
            </div>
        </div>
    </div>
</section>
<section class="order_steps_section">
    <div class="wrapper">
        <h2 style="color:#3d268e">DOSTAVA I GARANCIJA</h2>
        <div class="steps_list">
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/massagegun/order_steps__step2_image.jpg"
                         alt="Гамак для отдыха">
                </div>
                <p><b>Garancija</b></p>
                <p>Sve proizvode temeljno proveravamo pre slanja i dajemo garanciju na iste.</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/massagegun/order_steps__step3_image.jpg"
                         alt="Гамак для отдыха">
                </div>
                <p><b>Isporuka</b></p>
                <p>Dostava brzom poštom u roku od 1-2 radna dana.</p>
            </div>
            <div class="step_item">
                <div class="image_block">
                    <img src="{{ asset('/') }}flexonikFiles/massagegun/order_steps__step4_image.jpg"
                         alt="Гамак для отдыха">
                </div>
                <p><b>Nema plaćanja unapred!</b></p>
                <p>Plaćanje porudžbine vrši se po prijemu paketa.</p>
            </div>
        </div>
    </div>
</section>
<section class="order_section" id="order-form">
    <div class="top_title_block">
        <div class="wrapper">
            <h3>PORUČITE SADA <span>SA POPUSTOM OD 40%</span></h3>
        </div>
    </div>
    <div class="content_block">
        <div class="wrapper">
            <div class="title_block">
                <h3 class="main_title">TERAPIJSKI I OPUŠTAJUĆI <br> MASAŽNI PIŠTOLJ</h3>
            </div>
            <div class="form_block">
                <div class="price_block clearfix">
                    <div class="price_item old">
                        <div class="text">Stara cena:</div>
                        <div class="value">{{ $prices[1]['originalPrice'] }} RSD</div>
                    </div>
                    <div class="price_item new">
                        <div class="text">Nova cena:</div>
                        <div class="value">{{ $prices[1]['amount'] }} RSD</div>
                    </div>
                </div>
                <form id="order_form" class="order_form" action="{{$orderRoute}}" method="post">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input class="field" type="text" name="name" placeholder="Ime i prezime" required>
                    <input class="field" type="tel" name="phone" placeholder="Broj telefona" required>
                    <input class="field" type="text" name="shipping_address" placeholder="Adresa" required>
                    <input class="field" type="text" name="shipping_city" placeholder="Grad" required>
                    <button class="button" type="submit">PORUČITE SADA</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}flexonikFiles/massagegun/scripts.js"></script>
@include('components.pixel_footer')
</body>
</html>
