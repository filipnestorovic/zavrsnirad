<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('/') }}flexonikFiles/hotshaper/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/hotshaper/css1.css"/>
    <link href="{{ asset('/') }}flexonikFiles/hotshaper/css2.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/') }}fonts/roboto.html" rel="stylesheet" type="text/css">
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}flexonikFiles/hotshaper/slider.js"></script>
    <style>html{scroll-behavior: smooth;}</style>
</head>
<body>
@include('components.display_errors')
<div class="block-1">
    <div class="container">
        <ul class="menu">
        </ul>
        <div class="block-info">
            <h1>Pojas za oblikovanje<br/>koji sagorijeva masnoću</h1>
            <div class="sale">
                <h2>Vrući pojas za oblikovanje</h2>
                <span class="orange">{{ $discount != null ? "-".(40+$discount)."%" : "-40%" }}</span>
                <p><span>Naručite do kraja dana</span><br/><span>po posebnoj cijeni:</span></p>
                <div class="cost clearfix">
                    <span class="old-cost"><span class="js_old_price"><span class="price_land_s4">{{ $prices[1]['originalPrice'] }}</span></span><small class="js_curs"><span class="price_land_curr"> RSD</span> </small></span>
                    <span class="new-cost"><span class="js_new_price"><span class="price_land_s1">{{ $prices[1]['amount'] }}</span></span><small class="js_curs"><span class="price_land_curr"> RSD</span> </small></span>
                </div>
                <a href="#form-section" class="green-btn toform">
                    KUPITE S POPUSTOM
                </a>
            </div>
        </div>
    </div>
</div>
<div class="block-2" id="about">
    <div class="container clearfix">
        <h2>NEKOLIKO ČINJENICA O <b>VRUĆEM POJASU</b><br/>ZA OBLIKOVANJE!</h2>
        <div class="fact">
            <img src="{{ asset('/') }}flexonikFiles/hotshaper/fact-1.png" alt=""/>
            <p>Ubrzava metabolizam</p>
        </div>
        <div class="fact">
            <img src="{{ asset('/') }}flexonikFiles/hotshaper/roundx4.png" alt=""/>
            <p>4 puta brže uklanja višak vode iz tijela</p>
        </div>
        <div class="fact">
            <img src="{{ asset('/') }}flexonikFiles/hotshaper/fact-3.png" alt=""/>
            <p>Sagorijevajte 72% više masti tokom treninga</p>
        </div>
        <div class="fact">
            <img src="{{ asset('/') }}flexonikFiles/hotshaper/fact-4.png" alt=""/>
            <p>Redovnom upotrebom daje 100% rezultat (i do minus 6 kilograma mjesečno)!</p>
        </div>
        <div class="fact">
            <img src="{{ asset('/') }}flexonikFiles/hotshaper/round2w.png" alt=""/>
            <p>Ima primijetan učinak – nakon 2 nedelje</p>
        </div>
    </div>
</div>
<div class="block-3">
    <div class="container">
        <h2>
            DA LI RAZMIŠLJATE O OVOME?
        </h2>
        <div class="questions clearfix">
            <div class="left">
                <div>
                    <img src="{{ asset('/') }}flexonikFiles/hotshaper/pregnant.png" alt="Hot Shapers" class="icon" />
                    <p>
                        Kako zategnuti stomak nakon porođaja?
                    </p>
                </div>
                <div>
                    <img src="{{ asset('/') }}flexonikFiles/hotshaper/medicine.png" alt="Hot Shapers" class="icon" />
                    <p>
                        Kako brzo smršati bez dijeta i tableta?
                    </p>
                </div>
                <div>
                    <img src="{{ asset('/') }}flexonikFiles/hotshaper/4kg.png" class="icon" />
                    <p>
                        Kako skinuti posljednja, najteža, 2-3-4 kilograma?
                    </p>
                </div>
                <div>
                    <img src="{{ asset('/') }}flexonikFiles/hotshaper/question.png" alt="Hot Shapers" class="icon" />
                    <p>
                        I 1 posljednji kilogram koji je višak? KAKO?
                    </p>
                </div>
            </div>
            <div class="right">
                <div>
                    <img src="{{ asset('/') }}flexonikFiles/hotshaper/health.png" alt="Hot Shapers" class=icon />
                    <p>
                        Zašto sačuvati zdravlje izbacivanjem toksina iz tijela?
                    </p>
                </div>
                <div>
                    <img src="{{ asset('/') }}flexonikFiles/hotshaper/sport.png" alt="Hot Shapers" class=icon />
                    <p>
                        Koliko je vremena potrebno da bi bavljanje sportom imalo efekta?
                    </p>
                </div>
                <div>
                    <img src="{{ asset('/') }}flexonikFiles/hotshaper/jeans.png" alt="Hot Shapers" class=icon />
                    <p>
                        Kako se uvući u farmerice od prošle godine koje su postale tijesne?
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="block-4">
    <div class="container">
        <div class="clearfix">
            <img src="{{ asset('/') }}flexonikFiles/hotshaper/package.png" alt="HOT SHAPERS"/>
            <h2>PRESTANI RAZMIŠLJATI – OSTVARI SVE!</h2>
            <h3><b>HOT SHAPERS</b> - <br/> je realna šansa da budete u sjajnoj formi!</h3>
        </div>
        <a href="#form-section" class="green-btn toform">
            PORUČITE ODMAH
        </a>
        <img src="{{ asset('/') }}flexonikFiles/hotshaper/arrow-red-left.webp" alt="Hot Shapers" class="arrow"/>
    </div>
</div>
<div class="block-5" id="advise">
    <div class="container">
        <h2>TANAK STRUK ZA SAMO MJESEC DANA!</h2>
        <div class="yellow-line">
            Hot Shapers:
        </div>
        <ul class="list">
            <li>
                <img src="{{ asset('/') }}flexonikFiles/hotshaper/feature-1.png" alt="Hot Shapers" />
                <p><b>Povećava znojenje <span>4 puta</span></b>
                    <br/>Smanjiće masne naslage na nepotrebnim mjestima, a mišići će postati istaknutiji.
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/hotshaper/feature-2.png" alt="Hot Shapers" />
                <p><b>Napravljen je od <span>NEOTEX tkanine</span></b>
                    <br/>čiji unutrašnji sloj pojačava rad znojnih žlijezda, a spoljašnji sloj upija znoj spriječavajući vlaženje tkanine.
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/hotshaper/feature-3.png" alt="Hot Shapers" />
                <p><b><span>Udoban</span> u svakodnevnom životu</b>
                    <br/>Nevidljiv je ispod odjeće, ne propušta znoj i ne ostavlja tragove na tijelu.
                </p>
            </li>
        </ul>
    </div>
</div>
<div class="block-7">
    <div class="container">
        <h2>KADA NOSITI <b>POJAS ZA VRUĆE OBLIKOVANJE:</b></h2>
        <img src="{{ asset('/') }}flexonikFiles/hotshaper/hotshapersDt1.png" alt="Hot Shapers"/>
        <img src="{{ asset('/') }}flexonikFiles/hotshaper/hotshapersDt2.png" alt="Hot Shapers"/>
        <img src="{{ asset('/') }}flexonikFiles/hotshaper/hotshapersDt3.png" alt="Hot Shapers"/>
        <img src="{{ asset('/') }}flexonikFiles/hotshaper/hotshapersDt4.png" alt="Hot Shapers"/>
        <img src="{{ asset('/') }}flexonikFiles/hotshaper/hotshapersDt5.png" alt="Hot Shapers"/>
        <img src="{{ asset('/') }}flexonikFiles/hotshaper/hotshapersDt6.png" alt="Hot Shapers"/>
        <img src="{{ asset('/') }}flexonikFiles/hotshaper/hotshapersDt7.png" alt="Hot Shapers"/>
        <img src="{{ asset('/') }}flexonikFiles/hotshaper/hotshapersDt8.png" alt="Hot Shapers"/>
        <h3>Živite svojim normalnim životom: radite, hodate,<br/>bavite se sportom, spavate – i gubite kilograme!</h3>
    </div>
</div>
<div class="block-10">
    <div class="container">
        <div class="title">
            <h2>
                Poručite <b>Hot shapers</b>
                <br/>
                sa popustom od čak <b>{{ $discount != null ? "-".(40+$discount)."%" : "-40%" }}</b>
            </h2>
            <h3>I riješite se neželjenih kilograma zauvijek!</h3>
        </div>
        <div class="sale">
            <h4>Hot Shapers</h4>
            <p><span>Još samo danas </span><br/><span>Po specijalnoj cijeni:</span></p>
            <div class="cost clearfix">
                <span class="old-cost"><span class="js_old_price"><span class="price_land_s4">{{ $prices[1]['originalPrice'] }}</span></span><small class="js_curs"><span class="price_land_curr"> RSD</span> </small></span>
                <span class="new-cost"><span class="js_new_price"><span class="price_land_s1">{{ $prices[1]['amount'] }}</span></span><small class="js_curs"><span class="price_land_curr"> RSD</span> </small></span>
            </div>
            <a href="#form-section" class="green-btn toform">
                ISKORISTI POPUST
            </a>
        </div>
    </div>
</div>
<div class="block-11" id="feedbacks">
    <div class="container">
        <h2><b>DA VRUĆI POJAS ZA OBLIKOVANJE</b> <br/>
            STVARNO FUNKCIONIŠE
        </h2>
        <h3>Potvrđuju i recenzije naših kupaca:</h3>
        <div class="slider-cont clearfix">
            <div class="slider-item">
                <img src="{{ asset('/') }}flexonikFiles/hotshaper/darya.jpg" alt="Hot Shapers" class=girl />
                <h4><b>"Moj rezultat za mjesec dana – minus 8 kg"</b></h4>
                <p>Vidjela sam oglas i i odlučila sam da pokušam. Rezultati su nevjerovatni! Sviđa mi se što steže bočne strane i nije vidljiv ispod odjeće. Samo nedelju dana kasnije ljudi iz moje okoline su počeli da mi govore da sam smršala! Moj rezultat za mjesec dana je čak minus 8 kilograma! Preporučujem svakome ovaj proizvod!</p>
                <p class="name">Milica Mitrović, 33 godine</p>
            </div>
            <div class="slider-item">
                <img src="{{ asset('/') }}flexonikFiles/hotshaper/sergey.jpg" alt="Hot Shapers" class=girl />
                <h4><b>"Učinak je sjajan. Moja supruga je izgubila 12 kilograma. Srećna je i zadovoljna!"</b></h4>
                <p>
                    Kupio sam pojas za svoju suprugu, jer je dugo pokušavala da izgubi kilograme. Imao sam sreću da sam proizvod kupio sa popustom, a ona je izgubila kilograme i srećna je kao nikada do sada, a i ja sa njom! Hvala Vam!
                </p>
                <p class="name">Boriša Gavrić , 31 godina</p>
            </div>
            <div class="slider-item">
                <img src="{{ asset('/') }}flexonikFiles/hotshaper/tatyana.jpg" alt="Hot Shapers" class=girl />
                <h4><b>"...gledajte moje slike sa oduševljenjem!"</b></h4>
                <p>
                    Pojas je isporučen 2 dana nakon što sam ga poručila. Koristim ga već 9 nedelja. Nosim ga gde god je to moguće – u šetnji sa detetom, kod kuće, na trčanju. Rezultat je kao što i sami vidite. Struk mi je tanji za 14 centimetara, a bokovi za 12. Ne želim da stanem na ovome, nastaviću da ga nosim.
                </p>
                <p class="name">Dragana Marković, 29 godina</p>
            </div>
        </div>
        <div class="arrow arrow-left prev"></div>
        <div class="arrow arrow-right next"></div>
    </div>
    <div class="yellow-lane"></div>
</div>
<div class="block-12">
    <div class="container">
        <h2>ZAŠTO KUPITI KOD NAS?</h2>
        <div class=clearfix>
            <div class="fact">
                <img src="{{ asset('/') }}flexonikFiles/hotshaper/coin.png" alt="Hot Shapers"/>
                <h4>GARANCIJA POVRATA NOVCA</h4>
                <p>Svi naši proizvodi su originalni i provjereni. Ukoliko niste zadovoljni, proizvod ćemo zamijeniti ili ćemo Vam vratiti novac.</p>
            </div>
            <div class="fact">
                <img src="{{ asset('/') }}flexonikFiles/hotshaper/prepayment.png" alt="Hot Shapers"/>
                <h4>NE PLAĆA SE unaprijed</h4>
                <p>Nije potrebno da proizvod plaćate unaprijed. Porudžbinu plaćate po prijemu robe.</p>
            </div>
            <div class="fact">
                <img src="{{ asset('/') }}flexonikFiles/hotshaper/delivery.png" alt="Hot Shapers"/>
                <h4>DOSTAVA U CIJELOJ ZEMLJI</h4>
                <p>Proizvod dostavljamo brzom poštom u roku 2 dana od dana prijema porudžbine.</p>
            </div>
        </div>
    </div>
</div>
<div class=block-13 id=delivery>
    <div class="container">
        <h2>KAKO DO POJASA?</h2>
        <div class="offer">
            <div class="steps">
                <div class="step step-1 clearfix">
                    <img src="{{ asset('/') }}flexonikFiles/hotshaper/step-1.png" alt="Hot Shapers"/>
                    <div>
                        <h4>Unesite podatke</h4>
                        <p>Poručite peko naše web stranice popunjavanjem forme</p>
                    </div>
                </div>
                <div class="step step-2 clearfix">
                    <img src="{{ asset('/') }}flexonikFiles/hotshaper/step-2.png" alt="Hot Shapers"/>
                    <div>
                        <h4>Potvrdite porudžbinu</h4>
                        <p>Pozvaćemo Vas da potvrdimo porudžbinu</p>
                    </div>
                </div>
                <div class="step step-3 clearfix">
                    <img src="{{ asset('/') }}flexonikFiles/hotshaper/step-3.png" alt="Hot Shapers"/>
                    <div>
                        <h4>Dostava</h4>
                        <p>Porudžbinu ćete primiti brzom poštom u roku od 2 dana</p>
                    </div>
                </div>
                <div class="step step-4 clearfix">
                    <img src="{{ asset('/') }}flexonikFiles/hotshaper/step-4.png" alt="Hot Shapers" />
                    <div>
                        <h4>KORISTITE POJAS</h4>
                        <p>Počnite da koristite pojas i gubite kilograme</p>
                    </div>
                </div>
            </div>
            <img src="{{ asset('/') }}flexonikFiles/hotshaper/arrow-dashed-down.png" alt="Hot Shapers" class="dashed-arrow-1" />
            <img src="{{ asset('/') }}flexonikFiles/hotshaper/arrow-dashed-up.png" alt="Hot Shapers" class="dashed-arrow-2" />
            <img src="{{ asset('/') }}flexonikFiles/hotshaper/arrow-dashed-down.png" alt="Hot Shapers" class="dashed-arrow-3" />
        </div>
    </div>
</div>
<div class="block-14">
    <div class="container">
        <h2>
            Poručite <b>HOT SHAPERS</b>
        </h2>
        <div class="sale clearfix">
            <span class="orange">{{ $discount != null ? "-".(40+$discount)."%" : "-40%" }}</span>
            <div class="left">
                <h3>Vrući pojas za oblikovanje i sagorijevanje masnoće</h3>
                <img src="{{ asset('/') }}flexonikFiles/hotshaper/arrow-dark-left.png" class="arrow" alt="Hot Shapers" >
                <p><span>Samo danas po posebnoj cijeni!</span></p>
                <div class="cost clearfix">
                    <span class="old-cost"><span class="js_old_price"><span class="price_land_s4">{{ $prices[1]['originalPrice'] }}</span></span><small class="js_curs"><span class="price_land_curr"> RSD</span> </small></span>
                    <span class="new-cost"><span class="js_new_price"><span class="price_land_s1">{{ $prices[1]['amount'] }}</span></span><small class="js_curs"><span class="price_land_curr"> RSD</span> </small></span>
                </div>
            </div>
            <div class="right" id="form-section">
                <div class="timer-title">Podaci za dostavu</div>
                <form action="{{$orderRoute}}" method="post">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <div><input type="text" name="name" placeholder="Ime i prezime" required></div>
                    <div><input type="text" name="phone" class="only_number" placeholder="Telefon" required></div>
                    <div><input type="text" name="shipping_address" placeholder="Adresa" required></div>
                    <div><input type="text" name="shipping_city" placeholder="Grad" required></div>
                    <div><button type="submit" class="js_submit">Kupi odmah</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
    </div>
</div>
@include('components.pixel_footer')
</body>
</html>
