<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('/') }}flexovalFiles/smartposture/favicon.ico">
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}flexovalFiles/smartposture/style.css" />
    <script type="text/javascript" src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}flexovalFiles/smartposture/jquery.bxslider.min.js"></script>
    <script>$(document).ready(function() {$('#slider').bxSlider({auto: true, controls: false, speed: 200, pager: false});});</script>
</head>
<body>
@include('components.display_errors')
<div class="wrapsper">
    <div class="slide1">
        <div class="slide1-main">
            <div class="inner">
                <div class="big-title">
                    KOREKTOR DRŽANJA<br>
                    <span>Smart Posture</span>
                </div>
                <ul>
                    <li><strong>Brza korekcija držanja</strong></li>
                    <li>Oslobađanje bolova u leđima</li>
                    <li>Jačanje mišića kičme i leđa</li>
                    <li>Idealno za decu u razvoju</li>
                    <li>Zatezanje ramena</li>
                    <li>Lepo držanje</li>
                    <li>Rasterećeni mišići</li>
                </ul>
            </div>
        </div>
        <div class="slide1-bottom" id="form">
            <div class="inner clearfix">
                <div class="after-before">
                    <img src="{{ asset('/') }}flexovalFiles/smartposture/2ph.jpg" tppabs="img2.jpg" alt="">
                </div>
                <div id="form_zakaz" class="form">
                    <a href="{{$checkoutView}}"><input type="button" id="submit-form" class="send-button" value="PORUČI ODMAH"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="slide2">
        <div class="title2">Akcija</div>
        <div class="inner">
            <img src="{{ asset('/') }}flexovalFiles/smartposture/girl.png" tppabs="girl.png" alt="" class="girl">
            <div class="slide2-text">
                <div class="title3"><span>SAMO DANAS</span><br>Jedinstveni popust <br>od <span>40%</span></div>
                <div class="old">Stara cena - <span class="hotprice noflag"><span class="price_land_s2 int_price_old">{{ $prices[1]['originalPrice'] }}</span> <span class="price_land_curr"> RSD</span></span></div>
                <div class="new">Nova cena<span>-</span><strong class="hotprice noflag pramount"><span class=" int_price_show"><span class="price_land_s1">{{ $prices[1]['amount'] }}</span> <span class="price_land_curr"> RSD</span></span></strong></div>
            </div>
            <a href="{{$checkoutView}}" class="button button3 btn2">
                <span><strong>Poruči odmah</strong><br>sa 40% popusta</span>
            </a>
        </div>
    </div>
    <div class="slide3">
        <div class="inner">
            <ul>
                <li class="li1">Pametni korektor držanja je jednostavan i učinkovit način za zdravo držanje tela, ublažavanje bola u leđima i zdrav životni stil.</li>
                <li class="li2">Smart Posture pogodan je za sve. Poseban dizajn proizvoda ugodan je i za žene i za muškarce. Jedna veličina odgovara svima jer se trake mogu podešavati.</li>
                <li class="li3">Princip rada Smart Posture pojasa je jednostavan. Ako se nagnete više od 25 °, korektor će vibrirati i upozoriti vas da ispravite držanje.</li>
                <li class="li4">Udoban za nošenje, ne zateže i ne steže telo.</li>
                <li class="li6">Nakon 10-14 dana korištenja, leđa će "upamtiti" ispravan položaj i onda se Smart Posture može nositi samo povremeno.</li>
                <li class="li7">Mišići se sporije umaraju i drže leđa uspravna, osiguravajući pravilno držanje tela.</li>
            </ul>
        </div>
    </div>
    <div class="slide4" id="korreсtor">
        <div class="inner">
            <div class="title4">KAKO SE KORISTI</div>
            <div class="images-counts">
                <img src="{{ asset('/') }}flexovalFiles/smartposture/ph1.jpg" alt="" class="spec-img">
                <img src="{{ asset('/') }}flexovalFiles/smartposture/ph2.jpg" alt="" class="spec-img">
                <img src="{{ asset('/') }}flexovalFiles/smartposture/ph3.jpg" alt="" class="spec-img">
                <img src="{{ asset('/') }}flexovalFiles/smartposture/ph4.jpg" alt="" class="spec-img">
            </div>
        </div>
    </div>
    <div class="slide6">
        <div class="inner">
            <ul>
                <li class="icon1">DOBRO ZA ZDRAVLJE</li>
                <li class="icon2">NE OGRANIČAVA KRETANJE</li>
                <li class="icon3">NEVIDLJIV ISPOD ODEĆE</li>
                <li class="icon4">PRAKTIČAN I IZDRŽLJIV</li>
            </ul>
        </div>
    </div>
    <div class="slide7">
        <div class="inner">
            <div class="title5">MIŠLJENJE STRUKE</div>
            <div class="review">
                <p>Obično upozoravamo pacijente da ne kupuju pojaseve za leđa bez prethodnog savetovanja sa specijalistom.
                    Većina korektora držanja bazira se na pritisku rebara i ramena. Fiksiraju figuru i daju telu određenu pozu.
                    Stoga je neophodno odabrati pravi korektor, a bez pomoći doktora to je nemoguće.</p>

                <p>Smart Posture korektor držanja radi drugačije. Ne utiče direktno na kičmu, jača mišiće leđa koji telu sami daju prirodan položaj. Prema tome, on ne može naškoditi.
                    Većina korisnika primetila je ogromno poboljšanje u svom držanju. Nestali su bolovi u leđima, a zapaženo je i vraćanje tela u prirodan položaj.</p>

                <p>Preporučuje se upotrebа Smart Posture korektora uporedo sa vežbanjem. Na ovaj način se vrlo brzo može postići željeni efekat.</p>
                <strong></strong>
            </div>
            <a href="{{$checkoutView}}" class="button button3">
                <span><strong>Poruči odmah</strong><br>sa 40% popusta</span>
            </a>
        </div>
    </div>

    <div class="slide8">
        <div class="inner">
            <div class="title6">KAKO KUPITI SMART POSTURE KOREKTOR DRŽANJA?</div>
            <p></p>
            <ul>
                <li class="ic1"><strong>Unesite podatke za dostavu</strong><br><span>Izaberite količinu</span></li>
                <li class="ic2"><strong>Potvrdićemo vašu porudžbinu</strong><br><span>U najkraćem roku</span></li>
                <li class="ic3"><strong>Dostava brzom poštom</strong><br><span>Plaćate pouzećem</span></li>
            </ul>
        </div>
    </div>

    <div class="slide9" id="reviews">
        <div class="inner">
            <div class="title6">ŠTA NAŠI KUPCI MISLE O SMART POSTURE KORKETORU DRŽANJA?</div>
            <ul id="slider">
                <li style="float: left; list-style: none; display: block; position: relative; margin: 0px;">
                    <img src="{{ asset('/') }}flexovalFiles/smartposture/img111.png" tppabs="img111.png" alt="">
                    <div class="review2">
                        <div class="name">Vera Obranović, 34 godine</div>
                        <div class="slider-cont">
                            <div>
                                <p>Vežbam klavir, tako da mi je jako važno pravilno držanje tela. Nikada nisam imala nekih posebnih problema, ali na koncertima moram stalno sedeti uspravno, ponekad i više od sat vremena.
                                    Stoga, pre nastupa par dana nosim korektor. Ojačava leđa i i bez problema presedim ceo koncert u ispravnom položaju.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="float: left; list-style: none; display: block; position: relative; margin: 0px;">
                    <img src="{{ asset('/') }}flexovalFiles/smartposture/img2.png" tppabs="img2.png" alt="">
                    <div class="review2">
                        <div class="name">Dragan Despotović, 51 godina</div>
                        <div class="slider-cont">
                            <div>
                                <p>20 godina sam za volanom i ramena su mi bila u potpuno nepravilnom položaju. Duga putovanja su ostavila trag na mom držanju.
                                    Bolovi u leđima počeli su pre nekoliko godina. Masaža je povremeno bila od pomoći, ali nije rešavala problem.
                                    Prijatelji su mi predložili Smart Posture korektor držanja i jako sam im zahvalan na tome. Ramena sam vratio u pravilan položaj i bol je potpuno nestao.</p>
                            </div>
                            <img src="{{ asset('/') }}flexovalFiles/smartposture/img222.jpg" tppabs="img222.jpg" alt="">
                        </div>
                    </div>
                </li>
                <li style="float: left; list-style: none; display: block; position: relative; margin: 0px;">
                    <img src="{{ asset('/') }}flexovalFiles/smartposture/img3.png" tppabs="img3.png" alt="">
                    <div class="review2">
                        <div class="name">Darko Stevanović, 37 godina</div>
                        <div class="slider-cont">
                            <div>
                                <p>Nikada nisam imao savršeno držanje, a na fakultetu se potpuno pogoršalo. Nakon što sam diplomirao, odlučio sam da ispravim držanje.
                                    Naručio sam ovaj pojas i u početku mi je bilo neobično da ga nosim, jer je vibrirao i opominjao me na svaki moj nepravilan položaj.
                                    Nakon nedelju dana sam se potpuno navikao, a za mesec dana sam imao prava leđa i bez nošenja Smart Posture korektora. Sve preporuke za ovaj proizvod!</p>
                            </div>
                        </div>
                    </div>
                </li>
        </ul>
    </div>
</div>
<div class="slide11" id="questions">
    <div class="inner">
        <div class="title6">Često postavljana pitanja</div>
        <div class="quest">
            <div>
                <div class="author">Koliko je efikasan Smart Posture magnetni pojas?</div>
                <div class="answer">Smart Posture je izuzetno efikasan, ali je potrebno najmanje mesec dana konstantnog nošenja u toku dana kako bi rezultati bili efikasni.
                    Ukoliko ga redovno ne nosite, nećete postići željene rezultate.
                    Ispod odeće je potpuno nevidljiv, tako da ne predstavlja problem da se nosi u bilo kojoj situaciji.</div>
            </div>
            <div>
                <div class="author">Pretpostavljam da vaš uređaj ispravlja držanje tela. Ali kako može pomoći kod bolova u leđima?</div>
                <div class="answer">Bolovi u leđima obično su rezultat nepravilnog držanja i spazama u mišićima koji usled toga nastaju. Smart Posture pomaže pri vraćaju leđa i ramena u pravilan položaj čineći mišiće jačim i zategnutim.
                    Smart Posture na taj način uspešno rešava bola, ukoliko je nastao usled lošeg držanja.</div>
            </div>
            <div>
                <div class="author">Je li korektor zaista pogodan za bilo koga?</div>
                <div class="answer">
                    Smart Posture pogodan je za sve i nema štetna dejstva. Univerzalne je veličine tako da može da ga nosi bilo ko.
                </div>
            </div>
        </div>
    </div>
</div>
<div class="slide12" id="delivery">
    <div class="inner">
        <div class="title6">ZAŠTO NAM VERUJU?</div>
        <ul>
            <li class="icons1">
                <span>PRISTUPAČNE CENE</span>
                <p>Radimo direktno sa proizvođačem,<br> što naš proizvod čini jeftinim!</p>
            </li>
            <li class="icons2">
                <span>GARANCIJA KVALITETA</span>
                <p>Uvereni smo u kvalitet naših proizvoda, <br>stoga na sve proizvode dajemo garanciju 12 meseci, <br>a ukoliko ne budete zadovoljni vratićemo vam novac.</p>
            </li>
            <li class="icons3">
                <span>BEZ RIZIKA</span>
                <p>Plaćanje robe po je po prijemu pošiljke.<br>Brza i pažljiva dostava. Rok isporuke 1-2 radna dana.</p>
            </li>
        </ul>
    </div>
</div>
<div class="slide14">
    <div class="inner">
        <a href="{{$checkoutView}}" class="button button3">
            <span><strong>Poruči odmah</strong><br>sa 40% popusta</span>
        </a>
    </div>
</div>
</div>
@include('components.pixel_footer')
</body>
</html>