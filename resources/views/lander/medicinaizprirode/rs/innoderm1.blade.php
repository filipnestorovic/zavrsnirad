<!DOCTYPE html>
<html dir="ltr">
<head>
    @include('lander.medicinaizprirode.components.pixel_header')
    <meta data-text-id="152702">
    <meta charset="utf-8">
    <meta data-text-id="152702">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" name="SKYPE_TOOLBAR">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <style>html{scroll-behavior:smooth}.form-style-6{font:95% Arial,Helvetica,sans-serif;max-width:400px;margin:10px auto;padding:16px;background:#f7f7f7}.form-style-6 h1{background:#704f81;padding:20px 0;font-size:140%;font-weight:300;text-align:center;color:#fff;margin:-16px -16px 16px -16px}.form-style-6 input[type="text"],.form-style-6 input[type="date"],.form-style-6 input[type="datetime"],.form-style-6 input[type="email"],.form-style-6 input[type="number"],.form-style-6 input[type="search"],.form-style-6 input[type="time"],.form-style-6 input[type="url"],.form-style-6 textarea,.form-style-6 select{-webkit-transition:all .30s ease-in-out;-moz-transition:all .30s ease-in-out;-ms-transition:all .30s ease-in-out;-o-transition:all .30s ease-in-out;outline:0;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;width:100%;background:#fff;margin-bottom:4%;border:1px solid #ccc;padding:3%;color:#555;font:95% Arial,Helvetica,sans-serif}.form-style-6 input[type="text"]:focus,.form-style-6 input[type="date"]:focus,.form-style-6 input[type="datetime"]:focus,.form-style-6 input[type="email"]:focus,.form-style-6 input[type="number"]:focus,.form-style-6 input[type="search"]:focus,.form-style-6 input[type="time"]:focus,.form-style-6 input[type="url"]:focus,.form-style-6 textarea:focus,.form-style-6 select:focus{box-shadow:0 0 5px #704f81;padding:3%;border:1px solid #704f81}.form-style-6 input[type="submit"],.form-style-6 input[type="button"]{box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;width:100%;padding:3%;background:#704f81;border-bottom:2px solid #30c29e;border-top-style:none;border-right-style:none;border-left-style:none;color:#fff}.form-style-6 input[type="submit"]:hover,.form-style-6 input[type="button"]:hover{background:#2ebc99}</style>
    <script src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/js/9.min.js" type="text/javascript"></script>
    <link href="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/css/normalize.css" rel="stylesheet">
    <link href="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/css/fonts_ie.css" rel="stylesheet">
    <link href="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/css/main.css" rel="stylesheet">
    <link href="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/css/pc.css" rel="stylesheet">
    <link href="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/css/fonts.css" rel="stylesheet">
</head>
<body class="devicetype_pc">
<div>
    <div class="g-footer-grad">
        <div class="g-container">
            @include('components.display_errors')
            <div class="g-header">
                <div class="g-w1000">
                    <div class="b-head-logo">
                        <a href="#orderForm">
                            <img alt="MyJane" src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/logo.png">
                        </a>
                    </div>
                    <div class="b-header-search">
                        <form accept-charset="UTF-8">
                            <input id="sq_id" name="q" placeholder="Pretraga" type="text">
                            <button title="Search" type="submit"></button>
                        </form>
                    </div>
                    <noindex>
                        <style type="text/css"></style>
                        <div class="login_mediafort_guest">
                            <div class="b-members">
                                <a class="b-std-button m-green" href="#orderForm">
                                    <i></i>
                                    <span> PRIJAVA </span>
                                </a>
                                <a class="b-std-button" href="#orderForm">
                                    <i></i>
                                    <span> REGISTRACIJA </span>
                                </a>
                            </div>
                        </div>
                    </noindex>
                    <div class="b-main-menu">
                        <a class="refresh_button" href="#orderForm"> Najnovije </a>
                        <ul>
                            <li class="active">
                                <div class="hover_helper">
                                    <a href="#orderForm"> ČLANCI </a>
                                    <ul id="mm_articles" style="display: block;">
                                        <li>
                                            <div class="mm_submenu">
                                                <div>
                                                    <a href="#orderForm"> Moda </a>
                                                </div>
                                                <div>
                                                    <a href="#orderForm"> Lepota i stil </a>
                                                </div>
                                                <div>
                                                    <a href="#orderForm"> Parfemi i kozmetika </a>
                                                </div>
                                            </div>
                                            <a href="#orderForm"> MODA I LEPOTA </a>
                                        </li>
                                        <li>
                                            <a href="#orderForm"> PSIHOLOGIJA </a>
                                        </li>
                                        <li>
                                            <a href="#orderForm"> PORODICA I ZDRAVLJE </a>
                                        </li>
                                        <li>
                                            <a href="#orderForm"> FLORA I FAUNA </a>
                                        </li>
                                        <li>
                                            <a href="#orderForm"> SLOBODNO VREME I PUTOVANJE </a>
                                        </li>
                                        <li>
                                            <a href="#orderForm"> ČITANJE </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="hover_helper">
                                    <a href="#orderForm"> VESTI </a>
                                </div>
                            </li>
                            <li>
                                <div class="hover_helper">
                                    <a href="#orderForm"> NOVINE </a>
                                </div>
                            </li>
                            <li>
                                <div class="hover_helper">
                                    <a href="#orderForm"> DIJETE </a>
                                </div>
                            </li>
                            <li>
                                <div class="hover_helper">
                                    <a href="#orderForm"> KUVANJE </a>
                                </div>
                            </li>
                            <li>
                                <div class="hover_helper">
                                    <a href="#orderForm"> UČENJE </a>
                                </div>
                            </li>
                            <li>
                                <div class="hover_helper">
                                    <a href="#orderForm"> ĆASKANJE </a>
                                    <ul class="menu-toright" id="hidden">
                                        <li>
                                            <a href="#orderForm"> Forum </a>
                                        </li>
                                        <li>
                                            <a href="#orderForm"> Korisnici </a>
                                        </li>
                                        <li>
                                            <a href="#orderForm"> Konsultacije sa specijalistima </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="last">
                                <div class="hover_helper">
                                    <a href="#orderForm"> Još </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="g-content" style="padding-top: 0;">
                <div style="background: white; max-width: 1018px; margin: 0 auto;">
                    <div class="g-w1000">
                        <div class="g-wrap group">
                            <div class="g-w80">
                                <br>
                                <div class="article-item">
                                    <table class="vtop">
                                        <tr>
                                            <td>
                                                <h2>
                                                    <a href="#orderForm"> Kako se rešiti bora i izgledati kao da vam je 35 sa 51 godinom? </a>
                                                </h2>
                                                <div style="padding-bottom: 7px;">
                                                    <p> Dragi moji, znam da je ova tema aktuelna za mnoge - znate li vi da se bora možete rešiti za samo dva meseca? Jedno sredstvo bukvalno briše bore s lica i čini ga minimum 17 godina mlađim. </p>
                                                    <img class="content" src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image00.jpg" style="margin: 0 auto; display: block;" width="500">
                                                    <p style="text-align: center;"> Pozdrav, čitaoci! </p>
                                                    <div>
                                                        <p> Nastavimo našu nedeljnu kolumnu "Godine nisu prepreka za lepotu" gde delimo tajne metode za podmlađivanje kože. Danas otkrivamo Dunjinu tajnu koja je izazvala buru na internetu i predstavlja jednu od najkomentarisanijih tema na beauty forumima. <img class="content" src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image05.jpg" style="float: left; padding-top: 15px; padding-right: 15px;"> Ova priča ima tužan početak: nakon 25 godina braka, Dunjin muž ju je ostavio jer je mislio da je prestara. </p>
                                                        <p> "Bila sam u depresiji osam meseci, stalno sam plakala i prestala sam da vodim računa o sebi. Krugovi i vrećice ispod očiju su rasle sve više, a lice mi je bilo prekriveno borama i dubokim naborima. Imala sam 49 godina, a kad sam se gledala u ogledalo videla sam samo usamljenost i starost", priseća se Dunja. </p>
                                                        <p> Uvek se divimo istrajnosti naših heroina. Mislite li da je Dunja odustala? Naravno da nije! Krenula je u borbu za povratak svoje lepote! </p>
                                                    </div>
                                                    <div>
                                                        <img alt class="content" src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image16.jpg" style="float: right; padding-top: 15px; padding-left: 15px;" width="200">
                                                        <p> "Odrasla sam kad nije bilo injekcija botoksa, plastičnih operacija ili drugih procedura. Bila sam sigurna da mogu da povratim svoju mladost bez svih tih skupih i opasnih procedura", kaže Dunja. </p>
                                                        <p> Za 5 meseci je sve isprobala: pilinge, maske, losione, serume, vežbe i masaže, ali ništa nije delovalo ili davalo primetne rezultate. Dunja je otišla na pregled kod dermatologa, ali nije mogla da priušti tretman koji je predložio. </p>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <p> "Bila sam očajna jer ništa nije delovalo. Jednog dana, jedna prodavačica mi je rekla da ima 45 godina, a izgledala je kao da joj je 30! Kako?! Koristila je masku napravljenu od <a href="#orderForm"> ulja semena ricinusa </a> , ulja muskatne žalfije i ulja šipurka. Nakon 14 dana, rezultati su me iznenadili: bore su nestale. </p>
                                                    <img class="content" src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image20.jpg">
                                                    <p> Nakon 2 meseca sam izgledala 10 godina mlađe! Nakon trećeg meseca bore oko očiju i usana su postale skoro nevidljive. Nakon mnogo godina sam se ponovo osetila lepo i počela sam dobijati komplimente. Bila sam srećna! </p>
                                                    <p> Međutim, maska je imala i svoje nedostatke: morali ste je držati na licu previše dugo i bilo ju je teško skinuti. Svakog dana je Dunja provodila 30 minuta pripremajući mešavinu, držala je 5 sati na licu i skidala je još jedan sat, ali lepota, kao što kažu, zahteva žrtve. </p>
                                                    <img class="content" src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image10.jpg" style="display: block; margin: 0 auto;">
                                                    <p> Moja kćer je takođe pokušala da napravi masku, ali nije imala strpljenja da je drži toliko dugo svaki dan. Jednog dana je išla u inostranstvo na neke anti-age tretmane i rekla svom dermatologu o ovoj maski. Potvrdio je da ovi sastojci stvarno imaju anti-age efekat, čak i na oštećenoj koži. <img class="content" src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image17.jpg" style="float: left; padding-top: 15px; padding-right: 15px;" width="300"> Rekao je da krema Inno Derm ima iste sastojke kao i maska, ali je veoma pogodna jer se nanosi samo pre spavanja. </p>
                                                    <p> Bila sam skeptična kad je kupila nekoliko pakovanja kreme <a href="#orderForm"> Inno Derm </a> u Izraelu. Mislila sam da je dermatolog sam hteo da joj uzme pare, ali ubrzo na njenom licu nije bilo bora, a imala je 31 godinu. Pa sam je i ja isprobala. </p>
                                                    <p> Ova krema je bila čak i bolja od moje maske. Nakon 23 dana, sve moje bore su nestale, a moja koža je bila vidljivo zategnuta. Da! </p>
                                                    <p> Sada umesto sedenja u kući s maskom na licu, izlazim i idem na zanimljiva mesta. Imam više udvarača nego kad sam bila mlada! </p>
                                                    <img class="content" src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image12.jpg" style="display: block; margin: 0 auto;" width="600">
                                                    <p> Nažalost, ovo nije bio njen srećan kraj, a problemi su se ponovo pojavili. U blogu koji je imao preko 500.000 pratilaca pisala je o podmlađivanju kože. Kada je napisala objavu o kremi <a href="#orderForm"> Inno Derm </a> , dobila je mnogo pretnji u kojima su tražili da izbriše informacije o proizvodu. Vlasnici klinika za plastične operacije nisu bili oduševljeni time da sad žene znaju jednostavniju i jeftiniju metodu za podmlađivanje kože. Dunja je bila primorana da izbriše objavu zbog svoje sigurnosti. </p>
                                                    <img class="content" src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image02.jpg" style="float: left; padding-right: 15px;" width="200">
                                                    <p> "Očigledno je da novac upravlja svetom jer ima mnogo pohlepnih ljudi koji žele da iskoriste druge. Ja sam samo slaba žena i ne mogu da se borim protiv sistema. Sramota je da sam morala da obrišem objavu, ali u isto vreme znam da nisam imala vremena da se bavim time: a na prvom mestu, zahvaljujući mom blogu, zvanični predstavnici za kremu <a href="#orderForm"> Inno Derm </a> ponudili su mi posao. Na drugom mestu, udala sam se tako da svoje slobodno vreme provodim s najboljim čovekom na svetu. Zahvalna sam svim ženama koje su čitale moj blog, podržavale me i delile moje recepte. Zahvaljujući vama nisam skrenula s puta i sad sam konačno srećna", kaže naša heroina. </p>
                                                    <div class="clearfix"></div>
                                                    <p> Dunja još uvek radi za <a href="#orderForm"> Inno Derm </a> koja je pomogla da 985.967 žena vrati svoju mladost - a ovaj broj nastavlja da raste. <img class="content" src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image04.jpg" style="float: right; padding-left: 15px;" width="300"> Verovatno je svačija misija da poboljša sebe i pomogne drugima da urade to isto. Nakon duge i teške potrage, konačno smo našli najbolji anti-age preparat za kožu. To je <a href="#orderForm"> Inno Derm </a> sajt. Pa vredi li potrošiti ogromne količine novca na bolne injekcije botoksa, opasne operacije i skupe proizvode? Postoji pristupačan i lak način da dobijete isti efekat. Zavisi od vas - isprobajte Inno Derm klikom na link ispod. </p>
                                                    <a href="#orderForm">
                                                        <img class="prod" src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/product.png">
                                                    </a>
                                                    <div id="orderForm" class="form-style-6">
                                                        <h1 style="text-align:center;font-size:24px;">NE PROPUSTITE AKCIJU</h1>
                                                        <span style="text-align:center;font-size:18px;display:block;"><s>Regularna cena: 5390 din</s></span>
                                                        <span style="text-align:center;font-size:24px;display:block;font-weight:800;">AKCIJSKA CENA: <span style="color:#704F81;">3190 din</span></span>
                                                        <form method="POST" action="{{$orderRoute}}" style="margin:20px;">
                                                            {{csrf_field()}}
                                                            @include('lander.naturapharm.components.form_hidden_fields')
                                                            <input type="text" name="name" placeholder="Ime i prezime" style="font-size:24px;" required  />
                                                            <input type="text" name="phone" placeholder="Telefon" style="font-size:24px;" required />
                                                            <button class="ord_button" type="submit">
                                                                NARUČI ODMAH
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <p> Pozdrav do sledeće nedelje. Želimo vam sve najbolje i zapamtite da je prava lepota u vama. </p>
                                                </div>
                                                <div>
                                                    <p>
                                                        <b> SVI KOMENTARI </b> (115)
                                                    </p>
                                                </div>
                                                <div class="e-comments first-comment">
                                                    <div class="ava">
                                                        <img alt src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image08.jpg" width="80">
                                                        <br>
                                                        <a href="#orderForm">
                                                            <span> Daliborka </span>
                                                        </a>
                                                    </div>
                                                    <p> Vaša priča me je mnogo inspirisala! Naručila sam kremu. Jedva čekam da je koristim. </p>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="e-comments">
                                                    <div class="ava">
                                                        <img alt src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image09.jpg" width="80">
                                                        <br>
                                                        <a href="#orderForm">
                                                            <span> Ljilja </span>
                                                        </a>
                                                    </div>
                                                    <p> Konačno sam pronašla <a href="#orderForm"> Inno Derm </a> ! Dobila sam je za rođendan. Počela sam da je koristim i zaljubila se u nju nakon prve upotrebe! Bore su se zagladile nakon nedelju dana, koža mi je postala meka i hidrirana. Tražila sam je u prodavnicama, ali je nisam našla. Sad sam naručila 3 komada. Krema je stvarno dobra. </p>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="e-comments">
                                                    <div class="ava">
                                                        <img alt src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image14.jpg" width="80">
                                                        <br>
                                                        <a href="#orderForm">
                                                            <span> Milica </span>
                                                        </a>
                                                    </div>
                                                    <p> Jeste li znali da možete naručiti <a href="#orderForm"> Inno Derm </a> samo na zvaničnoj stranici? Jednom sam našla ovu kremu u prodavnici u mom gradu i bila je falsifikat. </p>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="e-comments">
                                                    <div class="ava">
                                                        <img alt src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image19.jpg" width="80">
                                                        <br>
                                                        <a href="#orderForm">
                                                            <span> Jelena </span>
                                                        </a>
                                                    </div>
                                                    <p> Dunja, ja sam njena obožavateljka br. 1, mnogo joj se divim. Čitam njen blog od početka. Žao mi je što je morala da ga izbriše. </p>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="e-comments">
                                                    <div class="ava">
                                                        <img alt src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image03.jpg" width="80">
                                                        <br>
                                                        <a href="#orderForm">
                                                            <span> Sanja </span>
                                                        </a>
                                                    </div>
                                                    <p> Slažem se 100%; saloni lepote nam kradu pare na svojim skupim proizvodima. Ima sličnih proizvoda i mnogo jeftinijih. </p>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="e-comments">
                                                    <div class="ava">
                                                        <img alt src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image18.jpg" width="80">
                                                        <br>
                                                        <a href="#orderForm">
                                                            <span> Katarina </span>
                                                        </a>
                                                    </div>
                                                    <p> Moje prijateljice i ja koristimo <a href="#orderForm"> Inno Derm </a> već dugo vremena. Iznenađuje me kako malo ljudi zna za ovaj odlični proizvod. </p>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="e-comments">
                                                    <div class="ava">
                                                        <img alt src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/583459_16099-150x0.jpg" width="80">
                                                        <br>
                                                        <a href="#orderForm">
                                                            <span> Anja </span>
                                                        </a>
                                                    </div>
                                                    <p> Ja baš imam sreće da je moja kozmetičarka poštena :))) Ona mi je preporučila <a href="#orderForm"> Inno Derm </a> . </p>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="e-comments">
                                                    <div class="ava">
                                                        <img alt src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image11.jpg" width="80">
                                                        <br>
                                                        <a href="#orderForm">
                                                            <span> Jovana </span>
                                                        </a>
                                                    </div>
                                                    <p> Šokirala sam se kad su nakon sedam dana krugovi i vrećice ispod očiju nestali. Evo i slike. </p>
                                                    <img class="image-comment" src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image01.jpg" style="width: 590px; float: right;">
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="e-comments">
                                                    <div class="ava">
                                                        <img alt src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image07.jpg" width="80">
                                                        <br>
                                                        <a href="#orderForm">
                                                            <span> Ružica </span>
                                                        </a>
                                                    </div>
                                                    <p> Devojke, ovaj proizvod je pravo čudo! Kad krema još nije bila za prodaju, ja sam bila među onih 100 dobrovoljaca koji su je isprobavali. Rezultati su impresivni! 15 godina mlađa za samo 21 dan... </p>
                                                    <img class="image-comment" src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image15.jpg" style="width: 590px; float: right;">
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="e-comments">
                                                    <div class="ava">
                                                        <img alt src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image06.jpg" width="80">
                                                        <br>
                                                        <a href="#orderForm">
                                                            <span> Andrea </span>
                                                        </a>
                                                    </div>
                                                    <p> Naručujem <a href="#orderForm"> Inno Derm </a> da je isprobam. </p>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="e-comments last-comment">
                                                    <div class="ava">
                                                        <img alt src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image13.jpg" width="80">
                                                        <br>
                                                        <a href="#orderForm">
                                                            <span> Nikolina </span>
                                                        </a>
                                                    </div>
                                                    <p> Ćao, devojke! Radila sam kao kozmetičarka 27 godina i moram priznati da klinike za lepotu ćute kada su u pitanju metode protiv starenja jer su u pitanju pare. <a href="#orderForm"> Inno Derm </a> ima sve neophodne sastojke za stariju kožu: oni podstiču proizvodnju prirodnog kolagena i elastina. Rezultat je primetan već za nekoliko nedelja upotrebe - koža se preobražava, glatka je, bez bora i sija. Mislim da svaka žena treba da ima Inno Derm. </p>
                                                    <p> Preporučujem je! </p>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <p style="text-align: center;">
                                                    <a class="ord_button" href="#orderForm"> NARUČI ODMAH </a>
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="clear"></div>
                                <div class="clear"></div>
                                <div style="padding: 10px 0;"></div>
                            </div>
                            <div class="g-w20">
                                <div class="clear"></div>
                                <div style="padding: 0px 0 10px;">
                                    <div id="delta_9"></div>
                                    <div class="clear"></div>
                                </div>
                                <div id="opros_div_id" style="padding-bottom: 30px;">
                                    <h2 style="margin: 0 0 7px;"> Pitanje: </h2>
                                    <div style="font-size: 16px; font-weight: bold; padding-bottom: 10px;">
                                        <a href="#orderForm" style="color: black;"> Ujutro idete na posao u kancelariju... </a>
                                    </div>
                                    <div class="b-poll" style="font-size: 15px; line-height: 1.3;">
                                        <input id="oprosid_id" name="oprosid" type="hidden" value="190">
                                        <ul style="margin-left: 5px;">
                                            <li>
                                                <label>
                                                    <input class="opros-variant" name="variant" type="radio" value="1000"> Srećna! Obožavam svoj posao! </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="opros-variant" name="variant" type="radio" value="1001"> Malo teško; ima i drugih načina da se zaradi novac. </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="opros-variant" name="variant" type="radio" value="1002"> Grozno; još jedan propao dan. </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="opros-variant" name="variant" type="radio" value="1003"> Koju kancelariju? Ja sam freelancer i veoma sam ponosna na to! </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="opros-variant" name="variant" type="radio" value="1004"> Ne radim i kad bar niko ne bi radio! </label>
                                            </li>
                                        </ul>
                                        <div id="opros_buttons">
                                            <a class="b-std-button graymid" href="#orderForm">
                                                <i></i>
                                                <span> Glasaj </span>
                                            </a>
                                            <div class="e-total-votes" style="line-height: 26px;">
                                                <a href="#orderForm"> 335 glasova </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="last-news" style="margin-top: 20px;">
                                        <h2 style="margin: 0 0 7px;"> Najnovije vesti </h2>
                                        <a href="#orderForm">
                                            <div class="news_">
                                                <img alt src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image0223.jpg" style="float: left; padding-right: 10px;">
                                                <p> "Francuska" salata s pilećim srcima </p>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="last-news">
                                        <a href="#orderForm">
                                            <div class="news_">
                                                <img alt src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image0423.jpg" style="float: left; padding-right: 10px;">
                                                <p> Halapljivost; vrsta ovisnosti o hrani. Kako je prevazići? </p>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="last-news">
                                        <a href="#orderForm">
                                            <div class="news_">
                                                <img alt src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image0123.jpg" style="float: left; padding-right: 10px;">
                                                <p> Sirup od mente </p>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="last-news">
                                        <a href="#orderForm">
                                            <div class="news_">
                                                <img alt src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image0323.jpg" style="float: left; padding-right: 10px;">
                                                <p> Head & Shoulders nagradna igra "Fantastična kosa ovog proleća" </p>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="last-news">
                                        <a href="#orderForm">
                                            <div class="news_">
                                                <img alt src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/img/image0023.jpg" style="float: left; padding-right: 10px;">
                                                <p> Beauty boutique Rasprodaja parfema i kozmetike. </p>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}medicinaizprirodeFiles/innoderm1/js/js.cookie.min.js" type="text/javascript"></script>
@include('lander.medicinaizprirode.components.pixel_footer')
</body>
</html>
