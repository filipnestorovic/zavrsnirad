<!doctype html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="HandheldFriendly" content="true"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}dailysharkFiles/supersleepmask/favicon.png">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/supersleepmask/style-1.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/supersleepmask/media.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dailysharkFiles/supersleepmask/slick.css">
    <style>@font-face{font-family:'Sailec';src:url('{{ asset('/') }}fonts/Sailec-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/Sailec-Bold.woff.html') format('woff');font-weight:bold;font-style:normal;font-display:swap}@font-face{font-family:'Sailec';src:url('{{ asset('/') }}fonts/Sailec.woff2') format('woff2'),url('{{ asset('/') }}fonts/Sailec.woff') format('woff');font-weight:normal;font-style:normal;font-display:swap}@font-face{font-family:'Sailec';src:url('{{ asset('/') }}fonts/Sailec-Light.woff2') format('woff2'),url('{{ asset('/') }}fonts/Sailec-Light.woff.html') format('woff');font-weight:300;font-style:normal;font-display:swap}@font-face{font-family:'Sailec';src:url('{{ asset('/') }}fonts/Sailec-Medium.woff2') format('woff2'),url('{{ asset('/') }}fonts/Sailec-Medium.woff.html') format('woff');font-weight:500;font-style:normal;font-display:swap}@font-face{font-family:'Sailec';src:url('{{ asset('/') }}fonts/Sailec-LightItalic.woff2') format('woff2'),url('{{ asset('/') }}fonts/Sailec-LightItalic.woff') format('woff');font-weight:300;font-style:italic;font-display:swap}</style>
</head>
<body>
@include('components.display_errors')
<div class="banner">
    <div class="top-fix-bar">
        <div class="header">
            <div class="container">
                <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/logo_new.png" class="logo" />
                <a href="{{$checkoutView}}" class="header-btn hide-mob" rel="keep-params">PORUČITE</a>
                <ul class="mainMenu hide-mob">
                    <li><a href="#home" class="ignore-scroll">Početak</a></li>
                    <li><a href="#overview">O masci</a></li>
                    <li><a href="#features">Prednosti</a></li>
                    <li><a href="#testimnl">Utisci</a></li>
                </ul>
                <div class="mob-mnu-ic forMob">
                    <button class="dl-trigger" id="mobMenuBtn">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="forMob">
        <ul class="mobilemenu">
            <li><a href="javascript:bookmarkscroll.scrollTo('home')">Početak</a></li>
            <li><a href="javascript:bookmarkscroll.scrollTo('overview')">O masci</a></li>
            <li><a href="javascript:bookmarkscroll.scrollTo('features')">Prednosti</a></li>
            <li><a href="javascript:bookmarkscroll.scrollTo('testimnl')">Utisci</a></li>
        </ul>
    </div>
    <div class="clearall"></div>
    <div class="container">
        <div class="bnr-box" id="home">
            <div class="bnr-left">
                <p class="bnr-txt1">Nagrađivana tehnologija</p>
                <p class="bnr-rvw"><img src="{{ asset('/') }}dailysharkFiles/supersleepmask/star.png"> 2104 recenzije</p>
                <h1 class="bnrHdng">Eliminišite stres i popravite san <br class="forMob">uz pomoć Supersleep maske</h1>
                <p class="bnr-para">
                    Za lep san, opušteno telo i um
                </p>
                <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/bnr-prod.png" class="bnr-mob-prod forMob">
                <div class="clearall"></div>
                <div class="btn-box">
                    <a href="{{$checkoutView}}" class="packageBtn pulse" rel="keep-params">
                        <p>Iskoristite 40% popusta</p>
                    </a>
                    <div class="btn-ofr-txt">Ostalo još samo <span>9 SuperSleep maski</span></div>
                </div>
            </div>
            <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/bnr-prod.png" class="bnr-prod hide-mob">
        </div>
    </div>
</div>
<div class="bnr-btm-sec">
    <div class="container">
        <div class="bnr-btm-strpBox">
            <ul>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/bnr-bar-ico1a.jpg">
                    <p>Isceljenje zvukom</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/bnr-bar-ico2.jpg">
                    <p>Ultra mekano</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/bnr-bar-ico3.jpg">
                    <p>Bluetooth <br>povezivanje</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/bnr-bar-ico4.jpg">
                    <p>Dubok san</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/bnr-bar-ico5.jpg">
                    <p>Dug vek <br> trajanja baterije</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/bnr-bar-ico6.jpg">
                    <p>Može se prati</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="sectionOne" id="overview">
    <div class="container">
        <div class="comnHdng">
            <span>Upoznajte Supersleep masku</span>
            <p>Maska za lep san i opuštanje zvukom <br class="forMob">koja je dobila najviše ocene na internetu</p>
        </div>
        <p class="comnPara comn-pdng">"Ova maska za lečenje zvukom promenila mi je život. <strong>Od kada sam je kupio živim potpuno drugačije.</strong> Probudim se jako miran, opušten i potpuno fokusiran. Najbolje od svega je što sam mogao da je držim celu noć.
            Puštao sam opuštajuću muziku, što je u mnogome umanjivalo <strong>moj svakodnevni stres koji se sakupljao u toku radnog dana.</strong> Čak sam i počeo lepe snove da sanjam! :)" - Predrag P.</p>
        <div class="clearall"></div>
        <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/bnr-prod.png" class="s1-prod">
        <div class="btn-box">
            <a href="{{$checkoutView}}" class="packageBtn pulse" rel="keep-params">
                <p>Iskoristite 40% popusta</p>
            </a>
            <div class="btn-ofr-txt btn-lft-txt">Ostalo još samo <span>9 SuperSleep maski</span></div>
        </div>
    </div>
</div>
<div class="prod-banr-slider">
    <div class="s1-col">
        <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/s1-slide-img1.png" class="s1-slide-img">
    </div>
    <div class="s1-col">
        <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/s1-slide-img2.png" class="s1-slide-img">
    </div>
    <div class="s1-col">
        <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/s1-slide-img3.png" class="s1-slide-img">
    </div>
    <div class="s1-col">
        <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/s1-slide-img4.png" class="s1-slide-img">
    </div>
    <div class="s1-col">
        <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/s1-slide-img5.png" class="s1-slide-img">
    </div>
</div>
<div class="sectionTwo" id="features">
    <div class="container">
        <div class="comnHdng comnHdng2">
            <span>Funkcije Supersleep maske</span>
            <p>Potpuno prijatna i praktična</p>
        </div>
        <div class="s2-list">
            <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/s2-prod.png" class="s2-prod forDesk">
            <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/s2-prod-m.png" class="s2-prod-m forTab forMob">
            <ul class="fl">
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/s2-ico1.png" class="s2-ico">
                    <span>Utišavanje zvuka</span>
                    <p>Supersleep maska ima tehnologiju blokiranja spoljašnih zvukova kako bi utišala partnere koji hrču, bučne cimere, komšije i uličnu buku.
                        Njen prijatni materijal za zatamnjenje blokira svu okolnu svetlost, što omugućava potpunu izolaciju.</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/s2-ico2.png" class="s2-ico">
                    <span>Udobne i prijatne</span>
                    <p>Nema više slušalica koje žuljaju uši. Pustite svoju omiljenu audio knjigu, podkast, umirujuću muziku, zvukove prirode, meditaciju, ili čak slušajte neki strani jezik kako biste učili dok spavate.</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/s2-ico3.png" class="s2-ico">
                    <span>Poboljšavaju koncentraciju</span>
                    <p>Slušanje meditativne muzike u toku noći u velikoj meri poboljšava koncentraciju u toku radnog dana.</p>
                </li>
            </ul>
            <ul class="fr">
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/s2-ico4.png" class="s2-ico2">
                    <span>Stimulacija mozga</span>
                    <p>Patentirani audio sistem emiture zvukove na kalibriranoj frekvenciji koja pospešuje proizvodnju alfa i gama talasa u mozgu. Pokazalo se da povećana proizvodnja alfa i gama talasa u mozgu poboljšavaju
                        radnu memoriju i inteligenciju do 95%.</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/s2-ico5.png" class="s2-ico2">
                    <span>Stimulacija dodirom</span>
                    <p>Vrhunski materijal napravljen je od izdržljivih hipoalergenih vlakana koja omogućavaju ulazak zdravog kiseonika, a u isto vreme zadržavaju suv vazduh napolju.</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/s2-ico6.png" class="s2-ico2">
                    <span>Udobnost od 360°</span>
                    <p>Maska je dizajnirana kako za one koji spavaju na leđima, tako i za one koji spavaju na boku. Udobno pristaje na glavi, tako da ćete i zaboraviti da je nosite.</p>
                </li>
            </ul>
        </div>
        <div class="btn-box">
            <a href="{{$checkoutView}}" class="packageBtn pulse" rel="keep-params">
                <p>Iskoristite 40% popusta</p>
            </a>
            <div class="btn-ofr-txt">Ostalo još samo <span>9 SuperSleep maski</span></div>
        </div>
    </div>
</div>
<div class="sectionThree">
    <div class="container">
        <div class="comnHdng">
            <span>Šta čini Supersleep masku #1</span>
            <p>Najbolji proizvod u klasi proizvoda za lečenje tela i uma</p>
        </div>
        <p class="comnPara comn-pdng">Sa inovativnim karakteristikama kao što su Resonant Frequency Therapy Device™ režim za meditaciju i fokus, Supersleep je upravo ono što vam je potrebno da ostanete u najdubljim nivoima zvučne terapije i meditacije.</p>
        <div class="s3-prodBox">
            <div class="s3-prod-col">
                <p class="s3-col-txt1">Duboka meditacija i opuštanje</p>
                <p class="s3-col-txt2">Zahvaljujući visokotehnološkim mogućnostima kao što su kalibrisane zvučne frekvencije i tehnologija za blokiranje spoljašnih zvukova, konačno
                    ćete moći da se <span>opustite i naspavate.</span></p>
                <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/bnr-prod.png" class="s3-prod">
            </div>
            <div class="s3-prod-col">
                <p class="s3-col-txt1">Edukacija za vreme sna</p>
                <p class="s3-col-txt2">Poznato je da se u toku noći dok čovek spava <span>nesvesno mogu učiti strani jezici.</span> Na internetu je pregršt snimaka koji su namenjeni za to, a vi ih lako možete pustiti preko Supersleep maske.</p>
                <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/s3-prod2.png" class="s3-prod">
            </div>
            <div class="s3-prod-col">
                <p class="s3-col-txt1">Povećava mentalni kapacitet</p>
                <p class="s3-col-txt2">Supersleep maska emituje zvukove na frekvenciji koja izuzetno prija moždanim ćelijama i na taj način se <span>poboljšava sposobnost mozga</span> da bolje obrađuje i pamti informacije.</p>
                <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/s3-prod3.png" class="s3-prod">
            </div>
        </div>
        <div class="btn-box">
            <a href="{{$checkoutView}}" class="packageBtn pulse" rel="keep-params">
                <p>Iskoristite 40% popusta</p>
            </a>
            <div class="btn-ofr-txt btn-lft-txt">Ostalo još samo <span>9 SuperSleep maski</span></div>
        </div>
    </div>
</div>
<div class="sectionFour">
    <div class="container">
        <div class="comnHdng">
            <span>Iskoristite mogućnosti ove maske i osetite moć zvuka</span>
            <p>Maksimalno poboljšajte san i povećajte fokus</p>
        </div>
        <div class="s4-mdl">
{{--            <div class="s4-row">--}}
{{--                <div class="s4-col-1 fl"><img src="{{ asset('/') }}dailysharkFiles/supersleepmask/s4-img1.jpg"></div>--}}
{{--                <div class="s4-col-abt fr">--}}
{{--                    <p class="s4-abt-txt1">Stimulate Brain Waves</p>--}}
{{--                    <p class="s4-abt-txt2">Listen to Healing Sounds</p>--}}
{{--                    <p class="s4-abt-txt3">The SureSleep Mask allows you to dramatically improve focus and concentration by feeding the brain the alpha and gamma wave frequency it needs during restorative rest.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="s4-row">--}}
{{--                <div class="s4-col-1 fr"><img src="{{ asset('/') }}dailysharkFiles/supersleepmask/s4-img3.png"></div>--}}
{{--                <div class="s4-col-abt fl">--}}
{{--                    <p class="s4-abt-txt1">Dissolve Inflammation</p>--}}
{{--                    <p class="s4-abt-txt2">Eliminate Stress & Negative Energy</p>--}}
{{--                    <p class="s4-abt-txt3">The SureSleep is rigorously engineered to operate on the 11th harmonic, emitting sounds at a special frequency shown to dissolve stress and inflammation.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="s4-row">
                <div class="s4-col-1 fl"><img src="{{ asset('/') }}dailysharkFiles/supersleepmask/s4-img2.png"></div>
                <div class="s4-col-abt fr">
                    <p class="s4-abt-txt1">Savršeno se uklapa</p>
                    <p class="s4-abt-txt2">Elegantan i moderan dizajn</p>
                    <p class="s4-abt-txt3">Pažljivo dizajnirana Supersleep maska dobro prijanja na kožu i prilagođava se konturama lica. 100% ste zaštićeni od okolne svetlosti i zvukova dok slušate svoju omiljenu muziku za opuštanje, ili audio knjigu.</p>
                </div>
            </div>
        </div>
        <div class="btn-box ">
            <a href="{{$checkoutView}}" class="packageBtn pulse" rel="keep-params">
                <p>Iskoristite 40% popusta</p>
            </a>
            <div class="btn-ofr-txt btn-lft-txt">Ostalo još samo <span>9 SuperSleep maski</span></div>
        </div>
    </div>
</div>
<div class="sectionFive" id="testimnl">
    <div class="container">
        <div class="comnHdng">
            <span>Utisci kupaca</span>
            <p>Saznajte šta naši zadovoljni kupci kažu o Supersleep masci</p>
        </div>
        <div class="testi-sec">
            <div class="testi-box">
                <p class="testi-icon">J</p>
                <h3> </h3>
                <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/star-rvw.png" alt="" class="t-star">
                <p class="testi-abt">Moje iskustvo sa Supersleep maskom je magično. Prvi put kada sam je stavio, bio je to koncert za moju dušu i telo. Efekti su bili jako duboki, osećao sam se opuštenije i radosnije.
                    Nakon prve noći sam se probudio jako lepo naspavan i preporođen. Mogu svakome da preporučim ovaj proizvod!</p>
                <p class="testi-name"><span>Jovan P.</span> | Beograd</p>
            </div>
            <div class="testi-box">
                <p class="testi-icon">B</p>
                <h3> </h3>
                <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/star-rvw.png" alt="" class="t-star">
                <p class="testi-abt">Supersleep mi je omogućio čvrst san. Spavam kao na oblaku, sanjam lepe snove i budim se potpuno odmoran. Stres i anksioznost su mi potpuno nestali. Hvala vam na ovom izumu, moj život se u velikoj meri promenio od kada koristim Supersleep masku.</p>
                <p class="testi-name"><span>Boban J.</span> | Jagodina</p>
            </div>
            <div class="testi-box">
                <p class="testi-icon">J</p>
                <h3> </h3>
                <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/star-rvw.png" alt="" class="t-star">
                <p class="testi-abt">Od kada sam kupio ovu masku, nosim je svuda sa sobom kada putujem. Ultra mekani materijal koji prija koži, a kada je stavim potpuno se izolujem od spoljašnjeg okruženja. Svaki dan nakon posla stavim masku, odmaram i slušam audio knjige.</p>
                <p class="testi-name"><span>Janko K.</span> | Ub</p>
            </div>
            <div class="testi-box">
                <p class="testi-icon">R</p>
                <h3> </h3>
                <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/star-rvw.png" alt="" class="t-star">
                <p class="testi-abt">Nakon što sam isprobao ovu masku, odmah sam kupio još 5 komada za sve ukućane, a i za babu i dedu u drugoj kući. Mogu vam reći da svi hrčemo, ali da sada niko nikoga ne čuje. Konačno se budimo odmorni, naspavani i raspoloženi. Svaka čast onome
                    ko je izumeo ovaj proizvod.</p>
                <p class="testi-name"><span>Ranko R.</span> | Borča</p>
            </div>
            <div class="testi-box">
                <p class="testi-icon">D</p>
                <h3> </h3>
                <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/star-rvw.png" alt="" class="t-star">
                <p class="testi-abt">Kvalitet zvuka je odličan! Mekani materijal je jako prijatan, masku povežem na telefon i slušam po celu noć mp3 fajlove i muziku koja me uspavljuje. Ranije sam bolovao od nesanice, ali sada mi je to strani pojam.</p>
                <p class="testi-name"><span>Darko P.</span> | Niš</p>
            </div>
        </div>
        <div class="btn-box">
            <a href="{{$checkoutView}}" class="packageBtn pulse" rel="keep-params">
                <p>Iskoristite 40% popusta</p>
            </a>
            <div class="btn-ofr-txt btn-lft-txt">Ostalo još samo <span>9 SuperSleep maski</span></div>
        </div>
    </div>
</div>
<div class="sectionSix" id="slct-pkg">
    <div class="container">
        <div class="comnHdng comnHdng2">
            <span>Poruči svoju <br class="forMob">SureSleep masku</span>
            <p>Izaberite količinu <small class="hide-mob">-</small> <br class="forMob">Više komada = Veća ušteda</p>
        </div>
        <div class="pack-sec">
            <div class="package left">
                <div class="pkg-hdng">
                    <span style="background-color: #ff9c00; color: white;">Najpopularnije</span>
                    <p>2 SuperSleep maske</p>
                </div>
                <div class="pack-mdl-bx">
                    <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/pkg3b.png" class="pkg-btl">
                    <div class="pkg-prcBox">
                        <p class="rtlprc">Stara cena: <span class="strikeout">{{ $prices[2]['originalPrice'] }} {{ $prices[2]['currency'] }}</span></p>
                        <p class="prc-txt1">{{ round($prices[2]['amount'] / $prices[2]['quantity']) }}</p>
                        <span>po komadu</span>
                        <p class="yousv">Ukupno: {{ $prices[2]['amount'] }} {{ $prices[2]['currency'] }}</p>
                        <div class="btn-box">
                            <a href="{{$checkoutView}}" class="packageBtn pulse step1Btn" id="pkg2_btn">
                                <p>Poručite sada</p>
                            </a>
                            <div class="btn-ofr-txt">Povratak novca u roku od 30 dana</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="package mid">
                <div class="pkg-hdng">
                    <span>Neverovatna ponuda</span>
                    <p>3 SuperSleep maske</p>
                </div>
                <div class="pack-mdl-bx">
                    <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/pkg5b.png" class="pkg-btl">
                    <div class="pkg-prcBox">
                        <p class="rtlprc">Stara cena: <span class="strikeout">{{ $prices[3]['originalPrice'] }} {{ $prices[3]['currency'] }}</span></p>
                        <p class="prc-txt1">{{ round($prices[3]['amount'] / $prices[3]['quantity']) }}</p>
                        <span>po komadu</span>
                        <p class="yousv">Ukupno: {{ $prices[3]['amount'] }} {{ $prices[3]['currency'] }}</p>
                        <div class="btn-box">
                            <a href="{{$checkoutView}}" class="packageBtn pulse step1Btn" id="pkg3_btn">
                                <p>Poručite sada</p>
                            </a>
                            <div class="btn-ofr-txt">Povratak novca u roku od 30 dana</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="package right">
                <div class="pkg-hdng">
                    <span>Sjajna ponuda</span>
                    <p>1 SuperSleep maska</p>
                </div>
                <div class="pack-mdl-bx">
                    <img src="{{ asset('/') }}dailysharkFiles/supersleepmask/pkg1.png" class="pkg-btl">
                    <div class="pkg-prcBox">
                        <p class="rtlprc">Stara cena: <span class="strikeout">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</span></p>
                        <p class="prc-txt1">{{ $prices[1]['amount'] }}</p>
                        <span>po komadu</span>
                        <p class="yousv">Ukupno: {{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}</p>
                        <div class="btn-box">
                            <a href="{{$checkoutView}}" class="packageBtn pulse step1Btn" id="pkg1_btn">
                                <p>Poručite sada</p>
                            </a>
                            <div class="btn-ofr-txt">Povratak novca u roku od 30 dana</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('/') }}dailysharkFiles/supersleepmask/bookmarkscroll.js"></script>
<script type="text/javascript" src="{{ asset('/') }}dailysharkFiles/supersleepmask/jquery.scroller.js"></script>
<script type="text/javascript" src="{{ asset('/') }}dailysharkFiles/supersleepmask/slick.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.mob-mnu-ic, .mobilemenu li a').click(function(e) {
            $('.mobilemenu').slideToggle();
            $('.dl-trigger').toggleClass('dl-active');
        });

        $('.prod-banr-slider').slick({
            dots: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            adaptiveHeight: false,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1187,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 1021,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        centerMode: true,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.s4-mdl').slick({
            dots: true,
            arrows: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 9999,
                settings: "unslick"
            },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.mainMenu').scroller();

    });

    $(document).scroll(function() {

        if ($(this).scrollTop() > 110) {
            $('.top-fix-bar').addClass('fixed-nav');
        } else {
            $('.top-fix-bar').removeClass('fixed-nav');
        }

        if ($(this).scrollTop() > 10) {
            $('.mobilemenu').addClass('mobimenu-top');
        } else {
            $('.mobilemenu').removeClass('mobimenu-top');
        }
    });

</script>
<script type="text/javascript">
    function scrollToTop() {
        var target = $('.pack-sec');
        if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
</script>
@include('components.pixel_footer')
</body>
</html>
