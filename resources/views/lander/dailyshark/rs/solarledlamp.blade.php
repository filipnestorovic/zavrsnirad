<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/solarledlamp/favicon.ico" type="image/x-icon">
    <link href="{{ asset('/') }}shared_files/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}dailysharkFiles/solarledlamp/slick.css" rel="stylesheet">
    <link href="{{ asset('/') }}dailysharkFiles/solarledlamp/app.css" rel="stylesheet">
    <style type="text/css">
        * {
            font-family: Zawgyi-One;
        }

        @font-face {
            font-family: 'Zawgyi-One';
            src: url('{{ asset('/') }}fonts/zawgyi.eot');
            src: url('{{ asset('/') }}fonts/zawgyi.eot@iefix') format('eot'),
            url('{{ asset('/') }}fonts/zawgyi.woff') format('woff'),
            url('{{ asset('/') }}fonts/zawgyi.ttf') format('truetype'),
            url('{{ asset('/') }}fonts/zawgyi.svg#webfont') format('svg');
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>
<body class="zawgyi">
@include('components.display_errors')
<section class="sec-1">
    <div class="row-2">
        <div class="pageTitle">
            <br>
            <p>Veoma jak LED solarni reflektor sa senzorom pokreta</p>
            <h2>Osvetlite i povećajte bezbednost</h2>
            <p class="sub">Bilo gde u mraku</p>
            <br>
        </div>
    </div>
    <div class="row-3">
        <div class="mainProduct">
            <img class="label" src="{{ asset('/') }}dailysharkFiles/solarledlamp/hit.svg"> <img
                src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-1-product.png">
            <div class="daybuy"><span>Danas<span> 92 kupca </div>
        </div>
        <div class="mainForm">
            <div class="formWrap">
                <div class="form-box">
                    <div class="price">
                        <div class="price-title"><span>40%</span> Popusta </div>
                        <div class="price-box">
                            <p class="price-old">
                              <span class="al-cost-promo">
                                 {{ $prices[1]['originalPrice'] }}
                                  {{ $prices[1]['currency'] }}
                              </span>
                            </p>
                            <p class="price-new al-cost">
                                {{ $prices[1]['amount'] }}
                                {{ $prices[1]['currency'] }}
                            </p>
                        </div>
                    </div>
                    <form method="POST" action="{{$orderRoute}}" class="al-form">
                        {{csrf_field()}}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <div class="form-group"><input type="text" class="form-control" name="name" placeholder="Ime i prezime"                                            required="" value=""></div>
                        <div class="form-group"><input type="tel" class="form-control" name="phone"
                                                       placeholder="Telefon" required="" value=""></div>
                        <div class="formFoot">
                            <button class="button" type="submit">Naruči</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="mainInfo">
            <div class="infoBox">
                <!--<div id="main-2">-->
                <!--    <h2 style="color: #fff;">အေသးစိတ္ေဖာ္ျပခ်က္မ်ား</h2>-->
                <!--</div>-->
                <ul>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/check.svg">
                        <p>Može se instalirati bez žica</b></p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/check.svg">
                        <p>Napaja se solarnom energijom</b></p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/check.svg">
                        <p>Detektuje kretanje i automatski se pali</b></p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/check.svg">
                        <p>Može se brzo i lako pričvrstiti na bilo koju površinu</b></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bg-img-2"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-1-bg-2.svg"></div>
    <div class="bg-img"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-1-bg.jpg"></div>
</section>
<section class="sec-2">
    <div class="container">
        <div class="block-1">
            <h2>LED SOLARNI REFLEKTOR za svako dvorište</h2>
            <p class="font-m">Ovaj led reflektor poseduje 104 led sijalice koje su veoma jake a u isto vreme vrlo ekonomične.
            </p>
            <p>Nema potrebe da koristite strujne žice za ugradnju LED lampe, dolazi sa solarnim panelom koji prikupi sasvim dovoljno energije
za njen nesmetan rad.</p>

        </div>
    </div>
</section>
<section class="sec-3">
    <div class="sec-t-cont">
        <div class="sec-t-wrap">
            <h2>Iznenadna svetlost kao najveće sredstvo u borbi protiv lopova</h2>
            <div class="divided"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/divided.svg"></div>
        </div>
    </div>
    <div class="container">
        <div class="block-1"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-3-product.png"></div>
        <div class="block-2">
            <p>Led lampa ima senzor koji se aktivira na najmanji pokret ispred ili sa bočne strane lampe. Momentalno se pali jako svetlo bilo da naiđe neko od ukućana, kućni ljubimac ili nezvani gost.
            </p>
            <ul class="itemList">
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-3-img-1.jpg">
                    <p>Ne koristi baterije i radi na solarnu energiju
                    </p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-3-img-2.jpg">
                    <p><b>Noću ne morate da tražite prekidače za svetla u mraku.</b> Čim se pojavite ispred reflektora on se aktivira.
                    </p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-3-img-3.jpg">
                    <p>
Zaštitite svoj dom i dvorište od lopova. Upaliće se svetlo i oni će pobeći.
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="sec-4">
    <div class="sec-t-cont">
        <div class="sec-t-wrap">
            <h2>Gde postaviti LED SOLARNI REFLEKTOR?</h2>

            <div class="divided"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/divided-l.svg"></div>
        </div>
    </div>
    <div class="container">
        <div class="icons">
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-1.svg">
                <p>IZNAD ULAZNIH VRATA</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-2.svg">
                <p>NA KAPIJI</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-3.svg">
                <p>U GARAŽI</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-4.svg">
                <p>ISPOD KROVA</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-5.svg">
                <p>ISPOD STEPENICA/p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-6.svg">
                <p>NA POMOĆNI OBJEKAT</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-7.svg">
                <p>NA ŠTALU</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-8.svg">
                <p>ISPRED RADIONICE</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-9.svg">
                <p>U BAŠTU KAFIĆA</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-4-icon-10.svg">
                <p>NA TERASU</p>
            </div>
        </div>
        <div id="button-cont"><a class="button" href="#buy" data-attach="scrollTo">Naručite odmah</a></div>
    </div>
</section>
<section class="sec-5">
    <div class="sec-t-cont">
        <div class="sec-t-wrap">
            <h2>Prednosti Led Solarnog Reflektora</h2>
            <div class="divided"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/divided.svg"></div>
        </div>
    </div>
    <div class="container">
        <div class="block">
            <div class="item">
                <div class="item-img"
                     style="background-image: url('{{ asset('/') }}dailysharkFiles/solarledlamp/sec-5-img.jpg')"><img
                        class="icon" src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-5-icon-1.svg"></div>
                <div class="item-text">
                    <h4>Dugotrajne led sijalice</h4>
                    <p>Led Solarni Reflektor baca jako i lepo led svetlo. Led sijalice nisu samo ekonomične jer ne troše energiju, nego se mogu i trajati jako dugo (radni vek oko 100 000 svetlećih sati). Uzevši u obzir da se reflektor pali samo kada detektuje pokret,
onda je prosečan radni vek oko 10 godina.</p>
                </div>
            </div>
            <div class="shadow"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/shadow.svg"></div>
        </div>
        <div class="block">
            <div class="item">
                <div class="item-img"
                     style="background-image: url('{{ asset('/') }}dailysharkFiles/solarledlamp/sec-5-img-2.jpg')"><img
                        class="icon" src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-5-icon-2.svg"></div>
                <div class="item-text">
                    <h4>Puni se solarnom energijom</h4>
                    <p>Led reflektor ima solarni sistem, pa radi besplatno bez ikakvog dodatnog napajanja.
Osvetljava do 15 metara ispred, a ima nastavke koji osvetljavaju i sa bočne strane tako da ovde imate praktično 3 reflektora u jednom.
                    </p>
                </div>
            </div>
            <div class="shadow"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/shadow.svg"></div>
        </div>
    </div>
</section>
<section class="sec-6">
    <div class="sec-t-cont">
        <div class="sec-t-wrap">
            <h2>Solarni Led Reflektor je otporan na sve svetlosne uslove</h2>

            <div class="divided"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/divided-l.svg"></div>
        </div>
    </div>
    <div class="container">
        <div class="icons">
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-6-icon-1.svg">
                <p>NA KIŠI</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-6-icon-2.svg">
                <p>NA SNEGU</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-6-icon-3.svg">
                <p>NA MRAZU</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-6-icon-4.svg">
                <p>NA VISOKOJ TEMPERATURI</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-6-icon-5.svg">
                <p>U MAGLI</p>
            </div>
            <div class="iconItem">
                <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-6-icon-6.svg">
                <p>PO VETRU</p>
            </div>
        </div>
    </div>
</section>
<section class="sec-7">
    <div class="sec-t-cont">
        <div class="sec-t-wrap">
            <h2>Lako se postavlja za 5 sekundi.</h2>
            <div class="subtitle">Može se pričvrstiti na bilo koju površinu.</div>
            <div class="divided"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/divided.svg"></div>
        </div>
    </div>
    <div class="container">
        <div class="block">
            <h3>Ovo je proizvod koji svako domaćinstvo mora da ima!</h3>
            <ul class="stepList">
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-7-img-2.jpg">
                </li>
            </ul>
        </div>
        <div class="block">
            <div class="content">
                <ul class="materialList">
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-7-m-1.jpg">
                        <p>METAL</p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-7-m-2.jpg">
                        <p>BETON</p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-7-m-3.jpg">
                        <p>CIGLA</p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-7-m-4.jpg">
                        <p>DRVO </p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-7-m-5.jpg">
                        <p>KERAMIKA</p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-7-m-6.jpg">
                        <p>PLASTIKA </p>
                    </li>
                </ul>
                <div class="content-foot">
                    <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-7-icon.svg">
                    <p>Solarni Led Reflektor se može montirati na sve navedene materijale, a u kompletu dolazi i set tiplova i šrafova potrebnih za postavljanje.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-8">
    <div class="container">
        <div class="block-1"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-8-product.png"></div>
        <div class="block-2">
            <h2>Karakteristike Solarnog Led Reflektora<h2>
            <ul class="mainList" အေသးစိတ္နည္းပညာ="" အခ်က္အလက္မ်ား="">
                <li>
                    <div class="cont">
                        <img class="icon" src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-8-icon-1.svg">
                        <p class="title">Bezbednosni standardi IP 55</p>
                    </div>
                </li>
                <li>
                    <div class="cont">
                        <img class="icon" src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-8-icon-2.svg">
                        <p class="title">Ugrađena solarna baterija</p>
                    </div>
                </li>
                <li>
                    <div class="cont">
                        <img class="icon" src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-8-icon-3.svg">
                        <p class="title">Solarno napajanje</p>
                    </div>
                </li>
            </ul>
            <a class="button" href="#buy" data-attach="scrollTo" style="margin-top:15px !important;width:100% !important;">Naručite odmah </a>
        </div>
    </div>
</section>
<section class="sec-9">
    <div class="sec-t-cont">
        <div class="sec-t-wrap">
            <h2>Utisci kupaca</h2>
            <div class="divided"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/divided.svg"></div>
        </div>
    </div>
    <div class="container2">
        <div class="reviews">
            <div>
                <div class="reviewItem">
                    <div class="reviewBox">
                        <div class="userInfo">
                            <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/avarev1.png">
                            <h3>“"Odličan proizvod"။”</h3>
                            <p class="name">Jelena Komnenović, 40 godina, Ivanjica</p>
                        </div>
                        <div class="userText">
                            <p>Nedavno smo završili izgradnju male vikendice, ali smo odmah postali meta lopova koji su odneli mešalicu i još neki alat.
Razmišljali smo kako da osvetlimo jer još nismo uveli struju i komšinica nam je predložila da uzmemo ovaj reflektor pošto ga i ona koristi.
Moram da priznam da je ovo fenomenalan proizvod, jako osvetli dvorište čim neko ili nešto prođe pored. BRAVO!!!                        </p>
                            <img class="image"
                                 src="{{ asset('/') }}dailysharkFiles/solarledlamp/rev1.png">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="reviewItem">
                    <div class="reviewBox">
                        <div class="userInfo">
                            <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/avarev2.png">
                            <h3>"Brza isporuka i sve je kako piše"</h3>
                            <p class="name">Dejan Milošević, 50 godina, Mladenovac</p>
                        </div>
                        <div class="userText">
                            <p>Supruga i ja živimo u predgrađu i kada uveče dođemo kući prvo moramo da osvetlimo telefonom, da bismo videli prići vratima i otključati ih. Nemamo izveden strujni kabal ispred kuće i zbog toga nismo imali svetlo.
Od kada smo stavili ovaj reflektor, on se upali čim uđemo u dvorište i osvetli sa svih strana. Ovo je prava stvar, dugo nismo ništa bolje kupili.
                            </p>
                            <img class="image"
                                 src="{{ asset('/') }}dailysharkFiles/solarledlamp/rev1.jpg">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="reviewItem">
                    <div class="reviewBox">
                        <div class="userInfo">
                            <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/avarev3.png">
                            <h3>"Idealna je za sve koji se plaše mraka"</h3>
                            <p class="name">Jovana Jezdimirović, 30 godina, Beograd</p>
                        </div>
                        <div class="userText">
                            <p>Veoma je pogodna za ulaze u mračno dvorište. Kuća nam je malo zabačena i uvek me je bilo strah kada ulazim u dvorište. Sada nemam tih problema, lampa osvetli kao da je dan. :))
                            </p>
                            <img class="image" src="{{ asset('/') }}dailysharkFiles/solarledlamp/rev2.jpg">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="reviewItem">
                    <div class="reviewBox">
                        <div class="userInfo">
                            <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/avarev4.png">
                            <h3>"Zaista mi je žao što ranije nisam kupio ove reflektore"</h3>
                            <p class="name">Cvetko Petrović, 45 godina, Leskovac</p>
                        </div>
                        <div class="userText">
                            <p>Naručio sam 4 ova reflektora. Imam veliko dvorište i deo imanja na kom su mi radne mašine. Sada više ne moram noću da palim svetla i ujutru da ih gasim. Samo se pali noću čak i kada kuće naiđe. Odlično je, mislim da će
lopovi zaobilaziti moju kuću. Konačno mirno spavam ha ha.
                            </p>
                            <img class="image"
                                 src="{{ asset('/') }}dailysharkFiles/solarledlamp/rev4.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-10">
    <div class="sec-t-cont">
        <div class="sec-t-wrap">
            <h2>Kako poručiti Solarni Led Reflektor?</h2>
            <div class="divided"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/divided.svg"></div>
        </div>
    </div>
    <div class="container">
        <div class="item">
            <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/step-1.svg">
            <p><b></b>Ostavite svoje podatke na našem sajtu</p>
        </div>
        <div class="item">
            <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/step-2.svg">
            <p><b> </b>Kontaktiraćemo vas da potvrdimo vašu porudžbinu</p>
        </div>
        <div class="item">
            <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/step-3.svg">
            <p><b></b>Paket šaljemo brzom poštom u roku od 1-2 radna dana</p>
        </div>
        <div class="item">
            <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/step-4.svg">
            <p><b> </b>Plaćate kuriru brze pošte po preuzimanju pošiljke</p>
        </div>
    </div>
    <div class="bg-1"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/spte-bg-1.svg"></div>
    <div class="bg-2"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/spte-bg-2.svg"></div>
</section>
<section class="sec-1">
    <div class="row-2">
        <div class="pageTitle">
            <br>
            <p style="font-size: 20px">Veoma jak LED solarni reflektor sa senzorom pokreta</p>
            <h2>Osvetlite i povećajte bezbednost</h2>
            <p class="sub">Bilo gde u mraku </p>
            <br>
        </div>
    </div>
    <div class="row-3">
        <div class="mainProduct">
            <img class="label" src="{{ asset('/') }}dailysharkFiles/solarledlamp/hit.svg"> <img
                src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-1-product.png">
            <div class="daybuy"><span>Danas</span> 92 kupca</div>
        </div>
        <div class="mainForm" id="buy">
            <div class="formWrap">
                <div class="form-box">
                    <div class="price">
                        <div class="price-title"><span>40% </span> POPUSTA</div>
                        <div class="price-box">
                            <p class="price-old">
                              <span class="al-cost-promo">
                                 {{ $prices[1]['originalPrice'] }}
                                  {{ $prices[1]['currency'] }}
                              </span>
                            </p>
                            <p class="price-new al-cost">
                                {{ $prices[1]['amount'] }}
                                {{ $prices[1]['currency'] }}
                            </p>
                        </div>
                    </div>
                    <form method="POST" action="{{$orderRoute}}" class="al-form">
                        {{csrf_field()}}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <div class="form-group"><input type="text" class="form-control" name="name" placeholder="Ime i prezime"
                                                       required="" value=""></div>
                        <div class="form-group"><input type="tel" class="form-control" name="phone"
                                                       placeholder="Telefon" required="" value=""></div>
                        <div class="formFoot">
                            <button class="button" type="submit">Naruči odmah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="mainInfo">
            <div class="infoBox">

                <ul>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/check.svg">
                        <p><b>Može se instalirati bez žica</b></p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/check.svg">
                        <p>Napaja se solarnom energijom</p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/check.svg">
                        <p>Detektuje kretanje i automatski se pali</p>
                    </li>
                    <li>
                        <img src="{{ asset('/') }}dailysharkFiles/solarledlamp/check.svg">
                        <p>Može se brzo i lako pričvrstiti na bilo koju površinu</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bg-img-2"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-1-bg-2.svg"></div>
    <div class="bg-img"><img src="{{ asset('/') }}dailysharkFiles/solarledlamp/sec-1-bg.jpg"></div>
</section>

{{--<script src="http://ecolightled.xcartpro.com/r1/js/jquery.min.js"></script>--}}
<script src="{{ asset('/') }}shared_files/bootstrap.min.js"></script>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
{{--<script src="{{ asset('/') }}dailysharkFiles/solarledlamp/app.js"></script>--}}
<script>
    $(document).ready(function () {
        $("a").on("click", function (event) {
            event.preventDefault();
            var id = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 1000);
        });
        $(".reviews").slick({
            dots: !1,
            infinite: !0,
            speed: 300,
            autoplay: !0,
            autoplaySpeed: 7e3,
            adaptiveHeight: !0,
            slidesToShow: 2,
            slidesToScroll: 2,
            responsive: [{
                breakpoint: 960,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        })
    });
</script>
@include('components.pixel_footer')
</body>
</html>
