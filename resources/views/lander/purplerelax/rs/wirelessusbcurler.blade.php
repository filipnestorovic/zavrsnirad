<!DOCTYPE html>
<html lang=en>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    @include('components.pixel_init')
    <meta charset=UTF-8 />
    <meta content="IE=edge" http-equiv=X-UA-Compatible />
    <meta content="width=device-width, initial-scale=1" name=viewport />
    <meta content="telephone=no" name=format-detection />
    <style>@font-face{font-family:'Conv_calibri';src:url({{asset('/')}}fonts/calibri.eot);src:local('?'),url({{asset('/')}}fonts/calibri.woff) format('woff'),url({{asset('/')}}fonts/calibri.ttf) format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Conv_cambria';src:url({{asset('/')}}fonts/Cambria.eot);src:local('?'),url({{asset('/')}}fonts/Cambria.woff) format('woff'),url({{asset('/')}}fonts/Cambria.ttf) format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Conv_cambriab';src:url({{asset('/')}}fonts/Cambria-Bold.eot);src:local('?'),url({{asset('/')}}fonts/Cambria-Bold.woff) format('woff'),url({{asset('/')}}fonts/Cambria-Bold.ttf) format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Conv_cambriai';src:url({{asset('/')}}fonts/Cambria-Italic.eot);src:local('?'),url({{asset('/')}}fonts/Cambria-Italic.woff) format('woff'),url({{asset('/')}}fonts/Cambria-Italic.ttf) format('truetype');font-weight:400;font-style:normal}</style>
    <link rel=stylesheet href="{{asset('/')}}purplerelaxFiles/haircurler/getCSS.css">
    <style>
        .b-order .order-img img {
            position: relative;
            top: 20px;
            left: -100px;
            z-index: 999
        }

        @media (max-width:62em) {
            .b-order .order-img img {
                left: 0;
                bottom: 0;
                top: 0;
                position: relative;
                max-width: 100%
            }

            .b-order .order-form #formContainer2 {
                margin-left: 0;
                max-width: 300px;
            }
        }
</style>
</head>
<body>
<header class=l-header>
    @include('components.display_errors')
    <div class=container>
        <div class=top>
            <div class=info>
                <div class=info-right>
                    <h3 class=info-tel>
                        <p class=phone___>
                        <p class=highlight2>
                            Primamo porudžbine 24/7
                        </p>
                        </p>
                    </h3>
                </div>
            </div>
        </div>
        <div class=banner>
            <div class=b-left>
                <div class=banner-title>
                    <h2>
                        UREĐAJ ZA BRZO UVIJANJE KOSE - WIRELESS USB CURLER
                    </h2>
                    <p>
                        Savršeno talasasta kosa za par minuta, bez specijalne pripreme sa Wireless USB Curler-om
                    </p>
                    <p>
                        Napravite savršenu frizuru sopstvenim rukama, bez gorenja kose
                    </p>
                </div>
                <img alt="" class=banner-img src="{{asset('/')}}purplerelaxFiles/wirelessusbcurler/pic1.png"/>
            </div>
            <div class=b-right>
                <div class=banner-price>
                    <div class=old>
                        <span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> <span class=price_land_curr>{{ $prices[1]['currency'] }}</span>
                    </div>
                    <div class=new>
                        <span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr>{{ $prices[1]['currency'] }}</span>
                    </div>
                </div>
                <div class=banner-form>
                    <div class=form-title>
                        <h3>
                            Poručite po
                            <br/>
                            specijalnoj ceni!
                        </h3>
                    </div>
                    <div id=formContainer1>
                        <form action="{{$orderRoute}}" method=post>
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name=name placeholder="Ime i prezime" type=text required>
                            <input name=phone placeholder="Broj telefona" type=text required>
                            <input name=shipping_address placeholder="Adresa" type=text required>
                            <input name=shipping_city placeholder="Grad" type=text required>
                            <button class="btn-color2 large" type=submit>
                                Poruči sada
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class=info1>
    <div class=container>
        <div class=title>
            <h2>
                Wireless USB Curler
            </h2>
            <p>
                Nova stvar u svetu nege kose
            </p>
        </div>
        <div class=img-b>
            <img alt="" src="{{asset('/')}}purplerelaxFiles/haircurler/info1-img.jpg"   />
        </div>
        <div class=descr>
            <p>
                Jedan od najboljih proizvoda za negu kose u 2022!
            </p>
            <p>
                Uređaj za brzo uvijanje kose sa jonizirajućim efektom, napravljen je specijalno za žene koje ne žele da gube vreme po salonima.
                Sa ovim uređajem, za samo 5-10 minuta kosa postaje sjajna, glatka, mekana i talasasta bez gubljenja vremena i novca.
            </p>
            <p>
                Uređaj ima poseban premaz od turmalina. Kada se zagreje stvaraju se negativni joni koji imaju pozitivan efekat na kosu i čine da ona izgleda lepše i bujnije.
                Takođe zahvaljujući specijalnom materijalu, uređaj se zagreva jednako celom površinom, tako da se kosa ne oštećuje i ne gori.
            </p>
            <a href="#order-form"><label class="btn border modalButton" for=forms>
                    Poručite za <span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr>{{ $prices[1]['currency'] }}</span>
                </label></a>
        </div>
    </div>
</section>
<section class=features>
    <div class=container>
        <div class=title>
            <h2>
                Karakteristike
            </h2>
            <p>
                Wireless USB Curlera
            </p>
        </div>
        <div class=descr>
            <ul>
                <li>
                    Za razliku od ostalih uređaja, veoma je lak za upotrebu i ne isušuje kosu pošto radi na nižoj temperaturi
                </li>
                <li>
                    Zagreva se brzo, tako da nema potrebe za čekanjem, može odmah da se koristi
                </li>
                <li>
                    Keramički delovi su odlični provodnici toplote, i održavaju temperaturu konstantnom
                </li>
                <li>
                    Za uvijanje kose je potrebno je jako kratko vreme
                </li>
                <li>
                    Korišćenjem uređaja, kosa se manje cveta na krajevima. To se postiže zahvaljujući izloženosti negativnim jonima koji se emituju prilikom korišćenja
                </li>
            </ul>
        </div>
        <div class=b-img>
            <img class=result data-speed=0.2 src="{{asset('/')}}purplerelaxFiles/wirelessusbcurler/pic2.jpg"   />
        </div>
    </div>
</section>
<section class=benefits>
    <div class=container>
        <div class=title>
            <h2 id=ancorAdvantages>
                Zašto baš
            </h2>
            <p>
                Wireless USB Curler?
            </p>
        </div>
        <div class=benefits-item>
            <div class=b-title>
                  <span>
                  01
                  </span>
                <p>
                    Postojani
                    <br/>
                    rezultati
                </p>
            </div>
            <p>
                Korišćenjem ovog uređaja dobićete talasastu kosu meku kao svila na duge staze
            </p>
        </div>
        <div class=benefits-item>
            <div class=b-title>
                  <span>
                  02
                  </span>
                <p>
                    Pogodna za svaki tip
                    <br/>
                    i dužinu kose
                </p>
            </div>
            <p>
                Stilizovanje bilo koje dužine i tipa kose za samo par minuta
            </p>
        </div>
        <div class=benefits-item>
            <div class=b-title>
                  <span>
                  03
                  </span>
                <p id=ancorTermsofUse>
                    Savršen izgled
                    <br/>
                    u udobnosti svoga doma
                </p>
            </div>
            <p id=ancorTermsofUse>
                Napravite sjajnu frizuru u vašem domu. Uštedite i vreme i novac
            </p>
        </div>
        <div class=benefits-item>
            <div class=b-title>
                  <span>
                  04
                  </span>
                <p>
                    Laka
                    <br/>
                    upotreba
                </p>
            </div>
            <p>
                Mala težina i pogodan dizajn uređaja pomažu vam da ga lako koristite i da lako stilizujete kosu onako kako vi želite. Možete ga nositi sa vama gde god želite
            </p>
        </div>
        <div class=benefits-item style="width: 100%;min-height: 150px;">
            <a href="#order-form" style="text-decoration: none;"><label class="btn border modalButton" for=forms>
                    ISKORISTI CENU OD <span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr>{{ $prices[1]['currency'] }}</span>
                </label>
            </a>
        </div>
    </div>
    <img alt="" class=woman-img src="{{asset('/')}}purplerelaxFiles/wirelessusbcurler/pic3.jpg"   />
</section>
<section class=how-to-use>
    <div class=container>
        <div class=title>
            <h2>
                Način korišćenja:
            </h2>
        </div>
        <div class="row left">
            <div class=b-img>
                <img alt="" src="{{asset('/')}}purplerelaxFiles/wirelessusbcurler/pic4.jpg"   />
            </div>
            <div class=b-descr>
                <ul>
                    <li>
                        <i>
                            01
                        </i>
                        <span>
                            Uključite uređaj
                        </span>
                    </li>
                    <li>
                        <i>
                            02
                        </i>
                        <span>
                            Podesite željenu temperaturu
                        </span>
                    </li>
                    <li>
                        <i>
                            03
                        </i>
                        <span>
                            Podelite kosu na pramenove
                        </span>
                    </li>
                    <li>
                        <i>
                            04
                        </i>
                        <span>
                            Uzmite zagrejan Wireless USB Curler i
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row right">
            <div class=b-descr>
                <ul>
                    <li>
                        <i>
                            05
                        </i>
                        <span>
                            Uvlačite pramenove kose u uređaj
                        </span>
                    </li>
                    <li>
                        <i>
                            06
                        </i>
                        <span>
                            Napravite željeni broj lokni
                        </span>
                    </li>
                    <li>
                    <li>
                        <i>
                            07
                        </i>
                        <span>
                            Kada završite isključite uređaj
                        </span>
                    </li>
                </ul>
            </div>
            <div class=b-img>
                <img alt="" src="{{asset('/')}}purplerelaxFiles/haircurler/how-to-use2.jpg"   />
            </div>
        </div>
        <div class=b-video>
            <div class=video-descr style="width: 100%;">
                <a href="#order-form" style="text-decoration: none;"><label class="btn small modalButton" for=forms>Poručite sada</label></a>
            </div>
        </div>
    </div>
</section>
<section class=work-steps>
    <div class=container>
        <div class=title>
            <h2 id=ancorHowWeWork>
                Kako naručiti?
            </h2>
        </div>
        <div class=work-steps-items>
            <div class=work-steps-item>
                <div class=img>
                    <i>
                        1
                    </i>
                    <img alt="" src="{{asset('/')}}purplerelaxFiles/haircurler/how-we-work1.png"   />
                </div>
                <p>
                    Popunite formu
                    <br/>
                    za naručivanje
                </p>
            </div>
            <div class=work-steps-item>
                <div class=img>
                    <i>
                        2
                    </i>
                    <img alt="" src="{{asset('/')}}purplerelaxFiles/haircurler/how-we-work2.png"   />
                </div>
                <p>
                    Potvrdićemo narudžbinu
                    <br/>
                    i zakazati dostavu u najkraćem roku
                </p>
            </div>
            <div class=work-steps-item>
                <div class=img>
                    <i>
                        3
                    </i>
                    <img alt="" src="{{asset('/')}}purplerelaxFiles/haircurler/how-we-work3.png"   />
                </div>
                <p>
                    Paket će stići u roku od
                    <br/>
                    1-2 radna dana brzom poštom
                </p>
            </div>
            <div class=work-steps-item>
                <div class=img>
                    <i>
                        4
                    </i>
                    <img alt="" src="{{asset('/')}}purplerelaxFiles/haircurler/how-we-work4.png"   />
                </div>
                <p>
                    Plaćate tek
                    <br/>
                    po preuzimanju
                </p>
            </div>
        </div>
    </div>
</section>
<section class=reviews>
    <div class=container>
        <div class=title>
            <h2 id=ancorComments>
                Utisci kupaca
            </h2>
        </div>
        <div class=reviews-row>
            <div class=reviews-box>
                <div class=reviews-box-header>
                    <div class=img>
                        <img alt="" height="" src="{{asset('/')}}purplerelaxFiles/haircurler/avatar.png" width=70   />
                    </div>
                    <h4>
                        Anastasija
                    </h4>
                </div>
                <div class=reviews-box-descr>
                    <p>
                        Imam prirodno ravnu kosu kosu i oduvek sam želela talasastu. Slučajno sam videla reklamu za ovaj uređaj, naručila sam i sad mi treba 4-5 minuta da napravim frizuru onakvu kakvu želim.
                    </p>
                </div>
            </div>
            <div class=reviews-box>
                <div class=reviews-box-header>
                    <div class=img>
                        <img alt="" height="" src="{{asset('/')}}purplerelaxFiles/haircurler/avatar.png" width=70   />
                    </div>
                    <h4>
                        Julija
                    </h4>
                </div>
                <div class=reviews-box-descr>
                    <p>
                        Dakle, uređajem sam oduševljena, željenu frizuru dobijam za bukvalno 4-5 minuta, zaista imam utisak da manje šteti kosi od ostalih proizvoda i definitivno je lakše korišćenje ovog uređaja nego fena.
                        Čak ga nekada koristim isključivo radi sjaja i tek da kosi dam malo lepšu formu. Wireless USB Curlerom sam prezadovoljna i toplo ga preporučujem svim devojkama!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=b-order>
    <div class=container>
        <div class=order-img>
            <img alt="" src="{{asset('/')}}purplerelaxFiles/wirelessusbcurler/pic1.png"/>
        </div>
        <div class=order-descr>
            <h3 class=title>
                Naručite Wireless USB Curler
                <br/>
                još danas
            </h3>
            <div class=order-price id=ancorFooterForm>
                <div class=old>
                    <span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> <span class=price_land_curr>{{ $prices[1]['currency'] }}</span>
                </div>
                <div class=new>
                    <span class=price_land_s1>{{ $prices[1]['amount'] }}</span> <span class=price_land_curr>{{ $prices[1]['currency'] }}</span>
                </div>
            </div>
            <div class=order-form>
                <div class=b-info>
                    <div class=form-title>
                        <h3>
                            Iskoristite
                            <br/>
                            40% popusta
                        </h3>
                    </div>
                </div>
                <div id=formContainer2>
                    <form id=order-form action="{{$orderRoute}}" method=post>
                        {{ csrf_field() }}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <input name=name placeholder="Ime i prezime" type=text required>
                        <input name=phone placeholder="Broj telefona" type=text required>
                        <input name=shipping_address placeholder="Adresa" type=text required>
                        <input name=shipping_city placeholder="Grad" type=text required>
                        <button class="btn-color2 large" type=submit>
                            PORUČI SADA
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@include('components.pixel_footer')
</body>
</html>
