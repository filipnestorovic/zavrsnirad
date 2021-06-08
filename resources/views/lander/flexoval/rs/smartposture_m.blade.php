<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('/') }}flexovalFiles/smartposture/favicon.ico">
    <link rel="stylesheet" href="{{ asset('/') }}flexovalFiles/smartposture/mob/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexovalFiles/smartposture/mob/style.css">
    <script type="text/javascript" src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}flexovalFiles/smartposture/mob/slick.min.js"></script>
    <script>$(document).ready(function(){$(".gallery").slick({dots:!1,infinite:!0,speed:200,fade:!1,cssEase:"linear"}),$(".reviews").slick({dots:!1,infinite:!1,speed:200,fade:!1,adaptiveHeight:!0,cssEase:"linear"})});</script>
</head>
<body>
@include('components.display_errors')
<div class="wrap">
    <div class="header">
        <h1 class="uppercase center white b green_bg">SMART POSTURE</h1>
        <h2 class="uppercase center white">PAMETNI KOREKTOR DRŽANJA</h2>
        <img alt="Smart Posture Corrector Smart Posture corrector" title="Smart Posture Corrector Smart Posture corrector" src="{{ asset('/') }}flexovalFiles/smartposture/mob/banner.jpg">
        <div class="timer_price">
            <div class="price">
                <div class="old">
                    <span class="price_land_s2">{{ $prices[1]['originalPrice'] }}</span><span class="price_land_curr"> RSD</span> </div>
                <div class="sale">
                    40%
                </div>
                <div class="new b">
                    <span class="price_land_s1">{{ $prices[1]['amount'] }}</span><span class="price_land_curr"> RSD</span> </div>
            </div>
        </div>
        <a href="{{$checkoutView}}" class="button-m">Poruči odmah</a>
    </div>
    <section class="opisanie">
        <h2 class="venzel">
            <span class="green"></span>
            <b></b>
        </h2>
        <img alt="Smart Posture Corrector Smart Posture corrector" title="Smart Posture Corrector Smart Posture corrector" class="center" src="{{ asset('/') }}flexovalFiles/smartposture/mob/2.jpg">
        <p class="justify">
            Smart Posture korektor držanja je <strong>jednostavan i učinkovit način za zdravo držanje tela</strong>, ublažavanje bola u leđima i zdrav životni stil.
        </p>
        <p class="justify">
            Princip rada Smart Posture pojasa je jednostavan. <strong>Ako se nagnete više od 25°</strong>, korektor će vibrirati i upozoriti vas da <strong>ispravite držanje</strong>.
        </p>
    </section>
    <section>
        <div class="gallery slick-slider">
            <div class="slick-slide">
                <img alt="Smart Posture Corrector Smart Posture corrector" title="Smart Posture Corrector Smart Posture corrector" src="{{ asset('/') }}flexovalFiles/smartposture/mob/3.jpg">
            </div>
            <div class="slick-slide">
                <img alt="Smart Posture Corrector Smart Posture corrector" title="Smart Posture Corrector Smart Posture corrector" src="{{ asset('/') }}flexovalFiles/smartposture/mob/4.jpg">
            </div>
            <div class="slick-slide">
                <img alt="Smart Posture Corrector Smart Posture corrector" title="Smart Posture Corrector Smart Posture corrector" src="{{ asset('/') }}flexovalFiles/smartposture/mob/1.jpg">
            </div>
        </div>
    </section>
    <section>
        <ul class="spisok ul_black black_ul">
            <li>Brza korekcija držanja</li>
            <li>Oslobađanje od bolova u leđima</li>
            <li>Jačanje mišića kičme i leđa</li>
            <li>Idealno za decu u razvoju</li>
            <li>Zatezanje ramena</li>
            <li>Rasterećeni mišići</li>
        </ul>
        <img src="{{ asset('/') }}flexovalFiles/smartposture/mob/tov-2.jpg">
        <p>
            <a href="{{$checkoutView}}" class="button-m">Poruči odmah</a>
        </p>
    </section>
    <section>
        <h2 class="venzel">
            <span class="green"></span>
            <b>Kako se koristi</b>
        </h2>
        <ul class="ul_str">
            <li>
                <span>Podesite kaiš</span>
                <img src="{{ asset('/') }}flexovalFiles/smartposture/mob/manual-1.jpg">
            </li>
            <li>
                <span>Kliknite na dugme</span>
                <img src="{{ asset('/') }}flexovalFiles/smartposture/mob/manual-2.jpg">
            </li>
            <li>
                <span>Držite se ravno u položaju 3 sekunde (korektor će napraviti 3 vibracije)</span>
                <img src="{{ asset('/') }}flexovalFiles/smartposture/mob/manual-3.jpg">
            </li>
            <li>
                <span>Ako se savijete više od 25 °, korektor će vibrirati kako bi ispravio vaše držanje.</span>
                <img src="{{ asset('/') }}flexovalFiles/smartposture/mob/manual-4.jpg">
            </li>
        </ul>
    </section>
    <p>
        <a href="{{$checkoutView}}" class="button-m">Poruči odmah</a>
    </p>
    <section class="b10 b10-avas">
        <h2 class="venzel">
            <span class="green"></span>
            <b>UTISCI KUPACA</b>
        </h2>
        <div class="hit clearfix">
            <div class="hit-left">
                <p>Najprodavanije</p>
            </div>
            <div class="hit-right">
                <p>
                   Prosečna ocena:
                    <span>4.91 od 5</span>
                </p>
            </div>
        </div>
        <div class="reviews slick-slider">
            <div class="rev slick-slide">
                <img alt="Smart Posture Corrector Smart Posture corrector" title="Smart Posture Corrector Smart Posture corrector" src="{{ asset('/') }}flexovalFiles/smartposture/mob/review-1.jpg">
                <p>Vežbam klavir, tako da mi je jako važno pravilno držanje tela. Nikada nisam imala nekih posebnih problema, ali na koncertima moram stalno sedeti uspravno, ponekad i više od sat vremena.
                    Stoga, pre nastupa par dana nosim korektor. Ojačava leđa i bez problema presedim ceo koncert u ispravnom položaju.</p>
                <p class="name">
                    <b>Vera Obranović</b> 34 godine
                </p>
            </div>
            <div class="rev slick-slide">
                <img alt="Smart Posture Corrector Smart Posture corrector" title="Smart Posture Corrector Smart Posture corrector" src="{{ asset('/') }}flexovalFiles/smartposture/mob/review-2.jpg">
                <p>Većinu svog dana provedem sedeći. Na poslu sam sve vreme za računarom, a kod kuće uglavnom ispred tv-a.
                    Nedavno sam počela da osećam bolove u predelu ramena i vrata, a sve to jer sam sedela nepravilno.
                    Pronašla sam ovaj korektor kao dosta jeftiniju alternativu masaže i kiropraktičara, a i mogu da ga nosim tokom celog dana.
                    Brzo sam se navikla na njega, iako me je u početku često upozoravao da mi leđa nisu ispravljena.</p>
                <p class="name">
                    <b>Jovana Topalović</b> 29 godina
                </p>
            </div>
            <div class="rev slick-slide">
                <img alt="Smart Posture Corrector Smart Posture corrector" title="Smart Posture Corrector Smart Posture corrector" src="{{ asset('/') }}flexovalFiles/smartposture/mob/review-3.jpg">
                <p>Nikada nisam imao savršeno držanje, a na fakultetu se potpuno pogoršalo. Nakon što sam diplomirao, odlučio sam da ispravim držanje.
                    Naručio sam ovaj pojas i u početku mi je bilo neobično da ga nosim, jer je vibrirao i opominjao me na svaki moj nepravilan položaj.
                    Nakon nedelju dana sam se potpuno navikao, a za mesec dana sam imao prava leđa i bez nošenja Smart Posture korektora. Sve preporuke za ovaj proizvod!</p>
                <p class="name">
                    <b>Darko Stevanović</b> 37 godina
                </p>
            </div>
        </div>
    </section>

    <section>
        <ul class="deliv deliv1">
            <li>
                <img alt="Smart Posture Corrector Smart Posture corrector" title="Smart Posture Corrector Smart Posture corrector" src="{{ asset('/') }}flexovalFiles/smartposture/mob/deliv1-1.png">
                <h3>Dostava</h3>
                <p>Brzom poštom od 1 do 2 radna dana</p>
            </li>
            <li>
                <img alt="Smart Posture Corrector Smart Posture corrector" title="Smart Posture Corrector Smart Posture corrector" src="{{ asset('/') }}flexovalFiles/smartposture/mob/deliv1-2.png">
                <h3>Plaćanje</h3>
                <p>Plaćanje se vrši po isporuci paketa</p>
            </li>
            <li>
                <img alt="Smart Posture Corrector Smart Posture corrector" title="Smart Posture Corrector Smart Posture corrector" src="{{ asset('/') }}flexovalFiles/smartposture/mob/deliv1-3.png">
                <h3>Garancija kvaliteta</h3>
                <p>Uvereni smo u kvalitet naših proizvoda, stoga na sve proizvode dajemo garanciju 12 meseci, a ukoliko ne budete zadovoljni vratićemo vam novac.</p>
            </li>
        </ul>
    </section>

    <section>
        <ul class="deliv_v2 deliv_v2_1 border_bottom">
            <li>
                <img alt="Smart Posture Corrector Smart Posture corrector" title="Smart Posture Corrector Smart Posture corrector" src="{{ asset('/') }}flexovalFiles/smartposture/mob/deliv_v2-1.png">
                <p>Unesite podatke za dostavu</p>
            </li>
            <li>
                <img alt="Smart Posture Corrector Smart Posture corrector" title="Smart Posture Corrector Smart Posture corrector" src="{{ asset('/') }}flexovalFiles/smartposture/mob/deliv_v2-2.png">
                <p>Potvrdićemo vašu porudžbinu</p>
            </li>
            <li>
                <img alt="Smart Posture Corrector Smart Posture corrector" title="Smart Posture Corrector Smart Posture corrector" src="{{ asset('/') }}flexovalFiles/smartposture/mob/deliv_v2-3.png">

                <p>Poslaćemo vam proizvod narednog radnog dana</p>
            </li>
            <li>
                <img alt="Smart Posture Corrector Smart Posture corrector" title="Smart Posture Corrector Smart Posture corrector" src="{{ asset('/') }}flexovalFiles/smartposture/mob/deliv_v2-4.png">
                <p>Plaćate po prijemu pošiljke</p>
            </li>
        </ul>
    </section>

    <div class="header footer">
        <h1 class="uppercase center white b green_bg">Smart posture</h1>
        <h2 class="uppercase center white">PAMETNI KOREKTOR DRŽANJA</h2>
        <img alt="Smart Posture Corrector Smart Posture corrector" title="Smart Posture Corrector Smart Posture corrector" src="{{ asset('/') }}flexovalFiles/smartposture/mob/banner.jpg">
        <div class="posttile"></div>
        <div class="timer_price">
            <div class="price">
                <div class="old">
                    <span class="price_land_s2">{{ $prices[1]['originalPrice'] }}</span><span class="price_land_curr"> RSD</span> </div>
                <div class="sale">
                    40%
                </div>
                <div class="new b">
                    <span class="price_land_s1">{{ $prices[1]['amount'] }}</span><span class="price_land_curr"> RSD</span> </div>
            </div>
        </div>
        <a href="{{$checkoutView}}" class="button-m">Poruči odmah</a>
        <div class="guard_all">
        </div>
    </div>
</div>
@include('components.pixel_footer')
</body>
</html>