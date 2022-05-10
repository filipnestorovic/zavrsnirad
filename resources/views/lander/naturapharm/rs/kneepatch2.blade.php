<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}naturapharmFiles/kneepatch2/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;500&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch2/animation.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch2/woco-accordion.css" rel="stylesheet">
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch2/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch2/style.css" rel="stylesheet" type="text/css" />
    <style>
        html {
            scroll-behavior: smooth;
        }
        .bottombtn a {
            background-color: #f57623;
            color: #FFF;
            font-size: 20px;
        }
        @font-face {
            font-family: 'Avenir Next';
            src: url({{ asset('/') }}fonts/AvenirNext-Regular.eot);
            src: url({{ asset('/') }}fonts/AvenirNext-Regulard41d.eot?#iefix) format('embedded-opentype'), url({{ asset('/') }}fonts/AvenirNext-Regular.woff2) format('woff2'), url({{ asset('/') }}fonts/AvenirNext-Regular.woff) format('woff'), url({{ asset('/') }}fonts/AvenirNext-Regular.ttf) format('truetype');
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: 'Avenir Next';
            src: url({{ asset('/') }}fonts/AvenirNext-Medium.eot);
            src: url({{ asset('/') }}fonts/AvenirNext-Mediumd41d.eot?#iefix) format('embedded-opentype'), url({{ asset('/') }}fonts/AvenirNext-Medium.woff2) format('woff2'), url({{ asset('/') }}fonts/AvenirNext-Medium.woff) format('woff'), url({{ asset('/') }}fonts/AvenirNext-Medium.ttf) format('truetype'), url({{ asset('/') }}fonts/AvenirNext-Medium.svg#AvenirNext-Medium) format('svg');
            font-weight: 500;
            font-style: normal
        }

        @font-face {
            font-family: 'Avenir Next Ultra';
            src: url({{ asset('/') }}fonts/AvenirNext-UltraLight.eot);
            src: url({{ asset('/') }}fonts/AvenirNext-UltraLightd41d.eot?#iefix) format('embedded-opentype'), url({{ asset('/') }}fonts/AvenirNext-UltraLight.woff2) format('woff2'), url({{ asset('/') }}fonts/AvenirNext-UltraLight.woff) format('woff'), url({{ asset('/') }}fonts/AvenirNext-UltraLight.ttf) format('truetype'), url({{ asset('/') }}fonts/AvenirNext-UltraLight.svg#AvenirNext-UltraLight) format('svg');
            font-weight: 200;
            font-style: normal
        }
    </style>
</head>
<body class="theme-default ">
<div class="main_checkout_section" style="">
    @include('components.display_errors')
    <div class="top-outer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand indexUrl"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/Q1Qn2d_6O2c82_logo.jpg" width="177" height="25" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <img src="{{ asset('/') }}naturapharmFiles/kneepatch2/toggle.png" width="40" height="27" alt=""></button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto" id="mainNav">
                                <li> <a class="scroll-menu" href="#sec1">Zašto koristiti</a> </li>
                                <li> <a class="scroll-menu" href="#sec2">Čemu služe</a> </li>
                                <li> <a class="scroll-menu" href="#sec3">Prednosti</a> </li>
                                <li> <a class="scroll-menu" href="#sec4">Utisci</a> </li>
                                <li> <a class="scroll-menu" href="#sec5">Česta pitanja</a> </li>
                            </ul>
                            <div class="buttonouter d-none d-xl-inline-block">
                                <a href="{{$checkoutView}}" class="btn-default wow zoomIn orderNowmove">Poruči odmah</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="banner section">
        <div class="container">
            <div class="bannerprodimg d-none d-sm-block"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/bannerrightimg1-391.png" alt="" width="459" height="579" /></div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h1>Kako se rešiti bola u kolenu?</h1>
                    <h6>Predstavljamo Knee Patch flastere koji su se pokazali
                        kao <br> najbolje sredstvo protiv bola u kolenu!</h6>
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 col-md-8 col-sm-9 col-12">
                            <div class="bannercontent">
                                <ul>
                                    <li>Otklanjaju osećaj bola</li>
                                    <li>Obnavljanje funkcionalne aktivnosti zglobova</li>
                                    <li>Refleksioni uticaj na unutrašnje organe</li>
                                    <li>Aktivacija mikrocirkulacije u koži i potkožnom tkivu</li>
                                </ul>
                                <div class="buttonouter d-none d-xl-block">
                                    <a class="btn-default btn-default-orange wow zoomIn" href="{{$checkoutView}}">PORUČITE ODMAH SA 40% POPUSTA</a>
{{--                                    <div class="reusetext d-none d-xl-inline-block">Reusable for over 72 hours of relief</div>--}}
                                </div>
                                <div class="bannertesti d-none d-xl-block">
                                    <p class="m-0">Život bez bola - upravo tako bih nazvala period upotrebe ovih čudotvornih flastera.
                                        Sada znam da je moguće živeti bez bola i uzimanja tableta!</p>
                                    <div class="authortext">
                                        <div class="authorcontent">
                                            <div class="authorname">Anđela P.</div>
                                            <div class="star"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/star1-360.png" alt="" width="123" height="20" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    <h5 class="d-lg-none">reusable for over 72 hours of relief</h5>--}}
                    <div class="buttonouter d-xl-none">
                        <a class="btn-default btn-default-orange wow zoomIn" href="{{$checkoutView}}">PORUČITE ODMAH SA 40% POPUSTA</a>
{{--                        <div class="reusetext d-none d-lg-inline-block">Reusable for over 72 hours of relief</div>--}}
                    </div>
                    <div class="bannertesti d-xl-none">
                        <p class="m-0">Život bez bola - upravo tako bih nazvala period upotrebe ovih čudotvornih flastera.
                            Sada znam da je moguće živeti bez bola i uzimanja tableta!</p>
                        <div class="authortext">
                            <div class="authorcontent">
                                <div class="authorname">Anđela P.</div>
                                <div class="star"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/star1-360.png" alt="" width="123" height="20" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section logosec">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="text-center"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/C29muW_logos.png" width="700" height="115" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section whysec" id="sec1">
        <div class="container">
            <h3 class="text-center">Bol u kolenu doživi <span class="d-block d-sm-inline">oko 80% ljudi</span> u toku svog života</h3>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="whybox">
                        <div class="number">1</div>
                        <h4>Kvalitet života</h4>
                        <p>Bolovi u kolenu predstavljaju problem prvog stepena jer zaista utiču na kvalitet života.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="whybox">
                        <div class="number">2</div>
                        <h4>Rizična grupa</h4>
                        <p>U rizičnoj grupi su ljudi koji se bave teškim fizičkim poslovima, profesionalnim sportom ili provode mnogo vremena za volanom.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="whybox">
                        <div class="number">3</div>
                        <h4>Posledice</h4>
                        <p>Svake godine bolovi u zglobovima napadaju sve više mlade ljude kojima predstavljaju problem i ostavljaju povremene ili trajne posledice!</p>
                    </div>
                </div>
            </div>
            <div class="buttonouter text-center"><a class="btn-default wow zoomIn" href="{{$checkoutView}}">PORUČI ODMAH SA 40% POPUSTA</a></div>
        </div>
    </div>
    <div class="missionsec" id="sec2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-5 col-md-4 col-sm-12 col-12">
                    <div class="missionimg wow slideInLeft"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/missionimg-369.jpg" alt="" width="716" height="819" /></div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-8 col-sm-12 col-12">
                    <div class="missioncontent">
                        <h6>Prirodni sastojci. Naučno ispitani.</h6>
                        <h3><b>Knee Patch</b> <br> biljni flasteri protiv bola u kolenu</h3>
                        <p>Još su prvi taoisti govorili da su zdravi zglobovi glavni energetski izvor u telu i da to obezbjeđuje normalan rad organizma.
                            Bilo kakvi poremećaji u njihovom funkcionisanju neizbežno ostavljaju tragove po zdravlje izazivajući bolesti kao što su impotencija, mastopatija, hipertonija, glavobolje, hronični umor i mnoge druge.</p>
                        <p>Prema idejama taoističkih monaha i tradicionalnoj medicini Kine, negativna energija koja se širi po telu se može zaustaviti i izbaciti iz organizma baš u zglobovima.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="midsec">
        <div class="midsec-left">
            <div class="midimg wow slideInLeft"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/otbk9t_midimg1.jpg" width="617" height="338" alt=""></div>
            <h3>Prirodna receptura</h3>
            <p>Recept za flastere uključuje preko 9 lekovitih biljaka i dobijen je kao rezultat vekovnih istraživanja narodnih iscelitelja.</p>
        </div>
        <div class="midsec-right">
            <div class="midimg wow slideInRight"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/mcqCfl_midimg2.jpg" width="617" height="338" alt=""></div>
            <h3>Savremena tehnologija</h3>
            <p>Flasteri protiv bola se proizvode po savremenoj tehnologiji i najvišim međunarodnim normama za kvalitet. Flasteri KNEE PATCH ne sadrže hemijske dodatke, nisu toksični, bezopasni su i nemaju štetne efekte na organizam.</p>
        </div>
    </div>
    <div class="benifitsec section" id="sec3">
        <div class="container">
            <h3 class="text-center">Prednosti <span class="d-block d-md-inline">"Knee Patch" flastera</span> protiv bola u kolenu</h3>
            <div class="row benifitrow">
                <div class="col-xl-5 col-lg-4 col-md-12 col-sm-12 col-12 leftbenifit">
                    <div class="row benifitcontentrow">
                        <div class="col-xl-2 col-lg-3 col-md-2 col-sm-2 col-3 order-lg-2">
                            <div class="benifiticon wow rotateIn"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/benifiticon1-705.png" alt="" width="81" height="80" /></div>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-md-10 col-sm-10 col-9 order-lg-1">
                            <div class="benitcontent">
                                <h6>Efikasno sredstvo protiv bola</h6>
                                <p>Pomaže u otkanjanu bolova, otoka i upala i saniranju povreda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row benifitcontentrow">
                        <div class="col-xl-2 col-lg-3 col-md-2 col-sm-2 col-3 order-lg-2">
                            <div class="benifiticon wow rotateIn"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/benifiticon2-415.png" alt="" width="80" height="80" /></div>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-md-10 col-sm-10 col-9 order-lg-1">
                            <div class="benitcontent">
                                <h6>Brz efekat</h6>
                                <p>Nakon što se flaster zalepi, počinje odmah da deluje i brzo oslobađa bola.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row benifitcontentrow">
                        <div class="col-xl-2 col-lg-3 col-md-2 col-sm-2 col-3 order-lg-2">
                            <div class="benifiticon wow rotateIn"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/benifiticon3-284.png" alt="" width="80" height="80" /></div>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-md-10 col-sm-10 col-9 order-lg-1">
                            <div class="benitcontent">
                                <h6>Lekoviti sastojci</h6>
                                <p>Posebna kombinacija 9 lekovitih kineskih trava.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="benifitimg wow zoomIn"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/botimg-198.jpg" alt="" width="359" height="481" /></div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-12 col-sm-12 col-12 rightbenifit">
                    <div class="row benifitcontentrow">
                        <div class="col-xl-2 col-lg-3 col-md-2 col-sm-2 col-3">
                            <div class="benifiticon wow rotateIn"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/benifiticon4-968.png" alt="" width="81" height="80" /></div>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-md-10 col-sm-10 col-9">
                            <div class="benitcontent">
                                <h6>Duboko prodiranje i dejstvo</h6>
                                <p>Dozirano i neprestano prodiranje duboko u mišić otklanjajući bol.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row benifitcontentrow">
                        <div class="col-xl-2 col-lg-3 col-md-2 col-sm-2 col-3">
                            <div class="benifiticon wow rotateIn"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/benifiticon5-299.png" alt="" width="81" height="80" /></div>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-md-10 col-sm-10 col-9">
                            <div class="benitcontent">
                                <h6>Laboratorijski testirano</h6>
                                <p>Proizvod je laboratorijski tastiran i ispitan prema najvećim medicinskim standardima.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row benifitcontentrow">
                        <div class="col-xl-2 col-lg-3 col-md-2 col-sm-2 col-3">
                            <div class="benifiticon wow rotateIn"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/benifiticon6-841.png" alt="" width="81" height="80" /></div>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-md-10 col-sm-10 col-9">
                            <div class="benitcontent">
                                <h6>Prirodni delotvorni sastojci</h6>
                                <p>Svi sastojci su prirodni, bez hemijskih dodataka. Svaki sastojak ima svoje ciljano dejstvo u otklanjanju bola u kolenu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buttonouter text-center"><a href="{{$checkoutView}}" class="btn-default wow zoomIn">PORUČI ODMAH SA 40% POPUSTA</a></div>
        </div>
    </div>
    <div class="moneybacksec section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12 order-2 order-md-1">
                    <h3>Ukoliko ne budete zadovoljni vratićemo vam novac</h3>
                    <p>U slučaju da ne budete zadovoljni Knee Patch flasterima, kontaktirajte nas i vratićemo vam novac bez potrebe za dodatnim objašnjenjima.</p>
                    <div class="buttonouter"><a href="{{$checkoutView}}" class="btn-default wow zoomIn">PORUČI ODMAH SA 40% POPUSTA</a></div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 order-1 order-md-2">
                    <div class="moneybakimg wow slideInRight"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/lK522j_botimg.jpg" width="359" height="481" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="reviewsec section" id="sec4">
        <div class="container">
            <h3 class="text-center">Evo šta o nama kažu naši kupci...</h3>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="reviewbox">
                        <div class="authortext">
                            <div class="authorimg"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/vwBc1Z_reviewimg1.png" width="60" height="60" alt=""></div>
                            <div class="authorcontent">
                                <div class="authorname">Milena</div>
                                <div class="star"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/star.png" width="123" height="20" alt=""></div>
                            </div>
                        </div>
                        <p>Dobar dan. Moja mama ima 79 godina i mučili su je strašni bolovi u kolenina.
                            Od vas sam kupila 3 kutije flastera i bolovi su se umanjili, mama se mnogo bolje oseća.
                            Samo zalepiš i čekaš da dođe do okakšanja. Mogu li da poručim još 6 kutija? Neizmerno vam hvala!</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="reviewbox">
                        <div class="authortext">
                            <div class="authorimg"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/Iy5eeE_reviewimg2.png" width="60" height="60" alt=""></div>
                            <div class="authorcontent">
                                <div class="authorname">Nikola</div>
                                <div class="star"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/star.png" width="123" height="20" alt=""></div>
                            </div>
                        </div>
                        <p>Od svih prednosti želim izdvojiti široki dijapazon delovanja i pristupačnu cenu.
                            Imam problem sa kolenom koji se povremeno pogoršava, posebno u jesen i proleće i ne da mi živeti normalno.
                            Nakon korišćenja raznih masti, našao sam flastere KNEE PATCH.
                            Nakon prvog tretmana, osetio sam veliko olakšanje.
                            Bolovi ne samo da su prošli, nego se nisu ni vraćali tokom cele godine!
                            Od tada se ovi flasteri nalaze u mojoj privatnoj apoteci.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="reviewbox">
                        <div class="authortext">
                            <div class="authorimg"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/DalYn2_reviewimg3.png" width="60" height="60" alt=""></div>
                            <div class="authorcontent">
                                <div class="authorname">Lazar</div>
                                <div class="star"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/star.png" width="123" height="20" alt=""></div>
                            </div>
                        </div>
                        <p>Povreda kolena na treningu me je terala na stalno korišćenje tableta protiv bolova i zbog toga sam dobio probleme sa želucem.
                            Bol je postao deo mog života, a više nisam mogao piti tablete protiv bolova.
                            Nakon mnogo masti, losiona i tableta, probao sam vaš proizvod i shvatio da nisam naišao na bolje sredstvo protiv hroničnih bolova u kolenu od KNEE PATCH flastera.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="faqsec section" id="sec5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="faqcontent">
                        <h3 class="text-center">Često postavljana pitanja</h3>
{{--                        <h6 class="text-center">We’ve got you covered!</h6>--}}
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="accordion">
                        <h6>Mogu li nositi flastere za koleno ceo dan?</h6>
                        <div>
                            <p>Apsolutno, možete nositi flastere tokom celog dana. Bilo da se opuštate kod kuće, vežbate ili ste na poslu. Dizajnirani su da vam pruže udobnost i olakšanje - gde god da se nalazite!</p>
                        </div>
                        <h6>Koje pogodnosti mogu da očekujem od flastera za koleno?</h6>
                        <div>
                            <p>Flasteri za koleno imaju mnogo prednosti! Korisnici osećaju olakšanje i toplotu, kao i lakše pomeranje zglobova.</p>
                            <p>Time sprečavaju povrede, povećavaju stabilnost i pokretljivost. Ovo je od najveće pomoći onima koji imaju ukočena, umorna ili bolna kolena.
                                Takođe su napravljeni za one koji veći deo dana provode stojeći, neprekidno se kreću i/ili su na tvrdoj podlozi.</p>
                        </div>
                        <h6>Kako se koriste Knee Patch flasteri?</h6>
                        <div>
                            <p>1. Kožu oprati vodom i prosušiti. Otvorite pakovanje i izvadite flaster.</p>
                            <p>2. Nalepiti flaster na koleno. Ostaviti da deluje. Flasteri su čvrsti i neće spadati.</p>
                            <p>3. Pažljivo skinuti flaster. Oprati kožu vodom i sapunom kako ne bi ostala lepljiva.</p>
                        </div>
                        <h6>Kakva je vaša politika vraćanja novca?</h6>
                        <div>
                            <p>Vaše zadovoljstvo je naš glavni cilj. Ako iz bilo kog razloga želite da vratite proizvod - samo nas kontaktirajte na info@wombatsbrand.com, a mi ćemo izvršiti povraćaj novca.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="buttonouter text-center bottombtn"><a href="{{$checkoutView}}" class="btn-default wow zoomIn">PORUČI ODMAH SA 40% POPUSTA</a></div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 order-xl-2">
                <div class="footlogo"><a href="{{$checkoutView}}" class="indexUrl"><img src="{{ asset('/') }}naturapharmFiles/kneepatch2/5n3mVl_footlogo.jpg" width="177" height="25" alt=""></a></div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 order-xl-1">
                <div class="copyright">© {{ now()->year }} Natura Pharm. Sva prava zadržana.</div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}naturapharmFiles/kneepatch2/bootstrap.js"></script>
<script src="{{ asset('/') }}naturapharmFiles/kneepatch2/woco.accordion.min.js"></script>
<script src="{{ asset('/') }}naturapharmFiles/kneepatch2/wow.js"></script>
<script>
    new WOW().init();
    $( document ).ready(function() {
        $(".accordion").accordion();
        $(window).scroll(function() {
            $(window).scrollTop() >= 80 ? $(".top-outer").addClass("fixednav") : $(".top-outer").removeClass("fixednav")
        })
        $(".navbar-nav>li>a").on("click", function() {
            $(".navbar-collapse").collapse("hide");
        });
    });
</script>

</script>
@include('components.pixel_footer')
</body>
</html>
