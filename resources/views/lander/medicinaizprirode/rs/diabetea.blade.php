<!DOCTYPE html>
<html>
<head>
    @include('lander.medicinaizprirode.components.pixel_header')
    <script type="text/javascript">
        var ccode = "EN";
        var ip_ccode = "EN";
        var package_prices = {
            "1": {
                "old_price": 6380,
                "price": 3190,
                "price_w_vat": 3190,
                "shipment_price": 0
            },
            "2": {
                "old_price": 9900,
                "price": 4950,
                "price_w_vat": 4950,
                "shipment_price": 0
            },
            "3": {
                "old_price": 12400,
                "price": 6200,
                "price_w_vat": 6200,
                "shipment_price": 0
            },
            "4": {
                "old_price": 14700,
                "price": 7350,
                "price_w_vat": 7350,
                "shipment_price": 0
            },
            // "6": {
            //     "old_price": 18700,
            //     "price": 9350,
            //     "price_w_vat": 9350,
            //     "shipment_price": 0
            // }
        };
        var shipment_price = 0;
        var name_hint = "Jelena Skrba";
        var phone_hint = "+381 XXX XXX XXX";
        var iew = true;
        var offer_countries = {};
    </script>
    <script src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/js/jquery-1.12.4.min.js"
            type="text/javascript"></script>
    <style>
        .ac_footer {
            position: relative;
            top: 10px;
            height: 0;
            text-align: center;
            margin-bottom: 70px;
            color: #A12000;
        }
        .ac_footer a {
            color: #A12000;
        }
        .ac_footer p {
            text-align: center;
        }
        img[height="1"],
        img[width="1"] {
            display: none !important;
        }
    </style>
    <!--retarget-->
    <!--retarget-->
    {{--    <script src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/js/9_12.min.js" type="text/javascript"></script>--}}
    <meta data-text-id="156653">
    <meta charset="utf-8">
    <meta data-text-id="156653">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, user-scalable=no" name="viewport">
    <link href="{{ asset('/') }}medicinaizprirodeFiles/diabetea/css/all.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('/') }}medicinaizprirodeFiles/diabetea/css/ruletka.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('/') }}medicinaizprirodeFiles/diabetea/css/spin.css" rel="stylesheet">
    <link href="{{ asset('/') }}medicinaizprirodeFiles/diabetea/css/formStyles.css" rel="stylesheet">
</head>
<body>
<!--retarget-->
<!--retarget-->
<div class="page-wrap">
    @include('components.display_errors')
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">
                <span class="logo cursPointer"> ZDRAVO </span>
                <span class="spec cursPointer"> DRUŠTVO </span>
            </div>
            <div class="nav">
                <ul class="nav__inner">
                    <li class="mobile-show">
                        <span class="cursPointer"> Novosti </span>
                    </li>
                    <li class="mobile-show">
                        <span class="cursPointer"> Video </span>
                    </li>
                    <li class="mobile-show">
                        <span class="cursPointer"> Život </span>
                    </li>
                    <li class>
                        <a href> televizní program (pořad) </a>
                    </li>
                </ul>
            </div>
            <span class="header__menu-link"></span>
            <div class="search"></div>
        </div>
    </header>
    <div class="main-content">
        <div class="content">
            <div class="content__inner content__inner_wide">
                <div class="article">
                    <div class="article__date date-15 time">
                        <script>
                            var now = new Date(),
                                need = new Date(now.getTime() - 1000 * 60 * 60 * 24 * 7).toLocaleString('cs', {
                                    day: 'numeric',
                                    month: 'long',
                                    year: 'numeric'
                                })
                            document.write(need);
                        </script>
                    </div>
                    <h1 class="article__title"> Naučite da razlikujete stvarnost od uobrazilje, a onda se izlečite od
                        dijabetesa!
                    </h1>
                    <h2> Glavna zabluda o dijabetesu u Srbiji koji skraćuje život </h2>
                    <div class="article__text">
                        <div class="js-mediator-article">
                            <div class="article_content">
                                <p> Doktor Jovan Andrić - srpski endokrinolog. Danas se smatra najboljim specijalistom
                                    za lečenje dijabetesa u državi. Sve poznate ličnosti koje boluju od dijabetesa
                                    pokušavaju da se zakažu kod njega na pregled. Dolaze mu pacijenti iz Francuske,
                                    Nemačke, Velike Britanije i drugih država. Jedan je od najuticajnijih endokrinologa
                                    u EU. Napisao je 32 naučne knjige, a u njegovom arsenalu nalazi se 3 puta više
                                    naučnih radova objavljenih u časopisima.
                                </p>
                                <figure class="Figure" style="text-align: center;  margin-top: -10px;">
                                    <img src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/-1.jpg">
                                    <span class="Figure-caption"></span>
                                </figure>
                                <p> Doktor Jovan Andrić retko daje intervjue, ali je pristao da odgovori na pitanja
                                    našeg dopisnika. Ispod ćete naći važne informacije koje će vam pomoći u borbi protiv
                                    dijabetesa.
                                </p>
                                <p> DOKTOR JOVAN ANDRIĆ NAS ČVRSTO UVERAVA DA SE DIJABETES TIPA DVA U VEĆINI SLUČAJEVA
                                    LEČI POMOĆU SAVREMENIH SAZNANJA!
                                </p>
                                <p> Teme pomenute u ovom materijalu: </p>
                                <ul class="ListBlock-root ListBlock-ul">
                                    <li> Šta je najvažnije kod lečenja dijabetesa?</li>
                                    <li> Zbog čega 95% dijabetičara ne može da se izbori sa svojom bolešću?</li>
                                    <li> U kojim slučajevima postoji šansa za potpuno izlečenje od dijabetesa?</li>
                                    <li> KAKVI SU SAVREMENI NAČINI za borbu protiv ove bolesti?</li>
                                </ul>
                                <br>
                                <div align="center">
                                    <b> Lekari su zabrinuti, a apotekarski lanci primaju bolesnike </b>
                                </div>
                                <br>
                                <p>
                                    <b> Doktor Jovan Andrić: </b>
                                </p>
                                <p> Danas preparati na bazi metformina predstavljaju praktično osnovu većine metoda za
                                    lečenje. Isto tako, ovo predstavlja i zabludu neupućenih pacijenata i lekara.
                                    Metformin je put ka bolesti i ranoj smrti. Nije reč o lečenju. Ako dođete kod lekara
                                    zbog dijabetesa tipa 2, a on vam propiše lečenje na osnovu ovih preparata, bežite od
                                    takvog lekara.
                                </p>
                                <p> Svi ovi preparati povećavaju nivo insulina u krvi do kritičnih tačaka. Zbog takvog
                                    nivoa insulina dolazi do zgušnjavanja krvi poput usirenog mleka. U velikim
                                    količinama insulin nanosi ogromnu štetu organizmu. On bukvalno uništava jetru,
                                    bubrege i druge organe za izlučivanje. Po konsistenciji i delovanju, insulin je
                                    sličan želudačnoj kiselini. Zamislite šta će da se desi ako želudačna kiselina
                                    ispuni unutrašnje organe. Sagoreće od kiseline!
                                </p>
                                <p> Povećan nivo insulina, koji uništava ćelije, podstiče njihovu abnormalnu podelu i
                                    dolazi do pojave onkoloških bolesti. Zbog tog razloga, prema statistikama, NASTAJE
                                    RAK kod 28% dijabetičara.
                                </p>
                                <p> Osim toga, visok sadržaj insulina dovodi do brzog začepljenja krvnih sudova
                                    holesterolom zato što, zbog insulina, gusta krv teče jako loše. Zbog toga krvni
                                    sudovi budu ispunjeni holesterolom što, na kraju, dovodi do povišenog arterijskog
                                    pritiska. Povišeni arterijski pritisak ima 98% dijabetičara. Postoji mnogo drugih
                                    problema sa kardiovaskularnim sistemom.
                                </p>
                                <p>
                                    <b> Spisak opasnih posledica terapije metforminom </b>
                                </p>
                                <ul class="ListBlock-root ListBlock-ul">
                                    <li> Želudačno-crevni poremećaji (najčešće dijareja, žgaravica, podrigivanje, čir na
                                        želucu)
                                    </li>
                                    <li> Visok krvni pritisak - visok krvni pritisak, naročito uveče, glavobolje,
                                        zvonjenje u ušima, naleti talasa straha.
                                    </li>
                                    <li> Ciroza jetre - jetra se stapa u vezivno tkivo i više ne prečišćava krv i
                                        toksini ispune celo telo
                                    </li>
                                    <li> Kamenje u bubrezima zbog intenzivnog izlučivanja soli i šećera</li>
                                    <li> Onkološke bolesti</li>
                                    <li> Prerana smrt zbog uništenja organa</li>
                                    <li> Slepilo</li>
                                </ul>
                                <br>
                                <p class="text_color"> Razvoj bolesti, naravno, zavisi od vremena uzimanja i količine
                                    preparata, a isto tako od individualnih karakteristika čoveka. Isto tako, POTPUNO JE
                                    NEMOGUĆE DA IH SE REŠITE!
                                </p>
                                <p>
                                    <b> Ako metformin ubija, zbog čega se koristi? </b>
                                </p>
                                <p>
                                    <b> Doktor Jovan Andrić: </b>
                                </p>
                                <p> Nažalost, danas se malo lekara brine o zdravlju svojih pacijenata. Kažem vam da više
                                    nikog nije briga. Oni prosto rade svoj posao i za nju dobijaju novac. Svejedno im je
                                    da li ćete ozdraviti ili ne. Zato, ne razmišljajući mnogo, propisuju ono što im
                                    preporučuje vlast ili ministarstvo. A to su preparati na osnovi metformina zato što
                                    njihova prodaja donosi dobru zaradu. Da, i deluje bar privremeno.
                                </p>
                                <p> Ravnodušnost ne leči! Pacijenti, u pravilu, ne znaju kakve ih posledice čekaju zbog
                                    stalne upotrebe ovog preparata, a lekari ne misle da je neophodno da ih upoznaju s
                                    tim.
                                </p>
                                <p class="text_color"> Greška je da se dijabetes leči agresivnim hemijskim sredstvima! A
                                    dijabetes tipa 2 je moguće izlečiti! Glavno je da se odabere ispravna terapija.
                                </p>
                                <p> Često su mi se obraćali pacijenti koji se dugo godina leče metforminom. To su
                                    bolesni ljudi koji su prerano ostarili.
                                </p>
                                <p> Kao i obično. Dijagnozu dijabetesa tipa 2 pacijenti najčešće dobiju slučajno
                                    prilikom pregleda. Tada se pacijent obično dobro oseća i nikad ne bi ni pomislio da
                                    ima visok nivo šećera u krvi. A zatim se propisuje metformin u velikim dozama.
                                </p>
                                <p> Zbog toga dolazi do snižavanja šećera, ali s vremenom se stanje pacijenta postepeno
                                    pogoršava. Bolesnik počinje da se žali na hronični umor, gojaznost, povišen
                                    arterijski pritisak, glavobolje. Noge počinju da natiču, a ujutru i lice. U ušima se
                                    čuje zvonjava. Prsti trne, a noge i ruke su hladne. Pogoršava se vid. Pogoršava se
                                    pamćenje.
                                </p>
                                <p> Lekari govore da je to dijabetes. A sve se to događa zbog insulina! Tačnije zbog
                                    metformina koji povećava proizvodnju hormona do abnormalnih tačaka!
                                </p>
                                <p> A VI NE POMIŠLJATE DA NE TREBA DA LEČITE DIJEBETES. Ako ste odlučili da dijabetes
                                    lečite metforminom ili da ga uopšte ne lečite, obavezno treba da odaberete prvu
                                    verziju. Kod izostanka lečenja, dijabetes tipa 2 će još brže da vas ubije. Ali sa
                                    drugačijim simptomima.
                                </p>
                                <figure class="Figure" style="text-align: center; margin-top: -10px;">
                                    <img src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/-2.jpg">
                                    <span class="Figure-caption"> Poput kandirane višnje, pokazuje unutrašnje organe dijabetičara. Jetra, želudac, bubrezi, srce i, što je najvažnije, krvni sudove… </span>
                                </figure>
                                <p>
                                    <b> Sputani krvni sudovi i unutrašnji organi! </b>
                                </p>
                                <p> Zamislite kandiranu višnju i kandiranu malinu. Isto to se događa i sa svim krvnim
                                    sudovima u slučaju dijabetesa. Zidovi sudova se pune šećerom i postaju kruti. Kao
                                    rezultat toga, krvni sudovi gube sposobnost da se sužavaju i šire. Ispočetka
                                    stradaju mali krvni sudovi, a zatim srednji i veliki. Krvni sudovi hrane unutrašnje
                                    organe. Poremećaji snabdevanja krvi dovode do razvoja hroničnih bolesti.
                                </p>
                                <p>
                                    <b> Kako vas dijabetes uništava iznutra: </b>
                                </p>
                                <p>
                                    <b> Gubljenje vida </b>
                                </p>
                                <p> Dijabetes, slep. I zauvek slep. Nije moguće normalizovati vid uništen zbog
                                    dijabetesa čak ni pomoću laserske operacije jer se odvajanje mrežnjače dešava kao
                                    rezultat mnoštva podliva krvi.
                                </p>
                                <p>
                                    <b> Bubrezi su uništeni </b>
                                </p>
                                <p> Šećer prosto začepljava mokraćne puteve. Zbog toga sredina u bubregu postaje veoma
                                    slatka. Šećer je sličan konzervansu. Konzerviše bubrege. I oni postepeno umiru.
                                    Hronično zatajenje bubrega je samo vrh ledenog brega. Bubrezi mogu sasvim da
                                    prestanu da rade.
                                </p>
                                <p>
                                    <b> Zglobovi gube pokretljivost </b>
                                </p>
                                <p> Sinovijalna tečnost obezbeđuje pokretljivost zglobova. Kada krvni sudovi više ne
                                    hrane zglob, sinovijalna tečnost se više ne proizvodi. Zglob se suši i propada.
                                    Čovek se suočava s takvim bolovima koji se ne mogu izdržati. Čak ni lekovi protiv
                                    bolova ne pomažu. Zglob se u potpunosti zatvara. Čovek gubi sposobnost da se
                                    samostalno kreće.
                                </p>
                                <p>
                                    <b> Nervni sistem ne pruža otpor </b>
                                </p>
                                <p> Nervi, kao i mnogi drugi organi, stradaju zbog previše šećera. S vremenom kod
                                    dijabetičara dolazi do psihoza, čovek postaje emotivno neuravnotežen. Često ga muči
                                    depresija, ništa mu se ne dopada. Želi da zaspi i umre.
                                </p>
                                <p>
                                    <b> Koža počinje da trune! </b>
                                </p>
                                <p> Ispočetka je užasno suva, dolazi do pucanja, zatim se javlja ekcem i na kraju
                                    čirevi. Mišići i kosti trunu zbog kože. Dolazi do pojave neprijatnog mirisa. Sve se
                                    završava gangrenom.
                                </p>
                                <p> Dijabetes je veoma opasna bolest. Možda čak i najopasnija od svih. Žao mi je ljudi
                                    kojima je dijagnostikovan dijabetes. Trudim se da im pomognem, ali sve zavisi samo
                                    od njih.
                                </p>
                                <p>
                                    <b> Ako ne metforminom, kako se leči dijabetes? Uzmimo za primer običnog penzionera
                                        koji je s godinama dobio dijabetes. Sad šećer stalno raste. Pretpostavimo da
                                        uzima metformin i da se oseća loše. Šta može da uradi da bi izlečio dijabetes?
                                        Da li može da se izleči? </b>
                                </p>
                                <p>
                                    <b> Doktor Jovan Andrić: </b>
                                </p>
                                <p> Još jednom želim da napomenem da je dijabetes tipa 2 složena, opasna i sistemska
                                    bolest. To nije prehlada i proliv. Ovo je mnogo gore. Bolest se širi po celom
                                    organizmu i zato i lečenje mora da bude sistemsko. NIJE DOVOLJNO I ŠTETNO JE samo
                                    povećati nivo insulina.
                                </p>
                                <p class="text_color"> Lečenje dijabetesa mora da bude kompleksno i da se vrši samo onim
                                    preparatima koji ne samo da snižavaju nivo šećera, nego i obezbeđuju bezbednost za
                                    ceo organizam.
                                </p>
                                <p> Ako je reč o konkretnim preparatima koje ljudi mogu da koriste za samostalno lečenje
                                    dijabetesa, ja bih preporučio preparat kao što je <a href> Diabetea </a> . Srpski
                                    centar za endokrinologiju ga je razvio 2019 godine. Nije u pitanju hemija poput
                                    metformina, nego PRIRODNI KOMPLEKS PROTIV DIJABETESA KOJI SADRŽI VIŠE OD 60 (!)
                                    RAZNIH AKTIVNIH KOMPONENATA.
                                </p>
                                <p> U sastav preparata ulaze svi najneophodniji vitamini , makro i mikroelementi u
                                    slučaju dijabetesa tipa 2. Diabetea sadrži 28 ekstrakata trava ubranih u raznim
                                    delovima sveta.
                                </p>
                                <p class="text_color"> Diabetea je dobar zbog toga što ne šteti organizmu. Štaviše, on
                                    ojačava organizam dijabetičara. Najvažnije je da blagotvorno deluje na bolest sa
                                    svih strana.
                                </p>
                                <p> Efikasnost <a href> Diabetea </a> je neuporediva! Nakon što smo ovaj preparat počeli
                                    da preporučujemo našim pacijentima, procenat ozdravljenja.... A mislim na POTPUNO
                                    IZLEČENJE OD DIJABETESA koje je poraslo d 96%. To znači da 96 od 100 ljudi više nije
                                    bolesno. Više nemaju šećer i savršeno se osećaju.
                                </p>
                                <p>
                                    <b> Najiskrenije pismo o lečenju dijabetesa </b>
                                </p>
                                <p> Želim da vam pokažem pismo Milene Pavić, penzionerke iz Srbije. Nije se lečila na
                                    našoj klinici (nije mogla da dođe do nas jer se osećala loše). Preko telefona sam
                                    joj preporučio Diabetea. Na kraju krajeva, žena je ozdravila.
                                </p>
                                <p> Evo šta je napisala. </p>
                                <div class="blok_etr">
                                    <figure class="Figure" style="text-align: center; margin-top: -10px;">
                                        <img src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/-4.jpg">
                                        <span class="Figure-caption"> Milena Pavić, 67 godina. Penzionerka iz Srbije, boluje od dijabetesa. Živi u Novom Sadu. </span>
                                    </figure>
                                    <p> „Zbog čega drugi lekari kriju od ljudi ovaj čudesni lek Diabetea? Imala sam
                                        užasan oblik dijabetesa. Bolujem od 28. godine. Sa 49 godina sam dobila ozbiljne
                                        komplikacije na očima i bubrezima. Nisu radili, osećala sam miris acetona. Moja
                                        kćer nije mogla da sedi pored mene. A stalno sam imala čireve na nogama i crne
                                        vrhove prstiju. Bukvalno sam umirala. Naši doktori su mi rekli da mi je ostalo
                                        jako malo vremena.
                                    </p>
                                    <p> Počela sam da razmišljam o svojim poslednjim danima. Proživela sam lep život,
                                        ali ipak nisam htela da umrem. Čak i kad sam u histeriji govorila da želim da
                                        umrem, ipak to nisam htela. Vaša klinika mi je bila poslednja nada. Znala sam da
                                        uspešno lečite dijabetes, ali ipak nisam verovala - svi govore da je ovu bolest
                                        nemoguće izlečiti i što ću vam se obratiti uzalud. Zato i nisam došla. A onda
                                        sam vas videla na televiziji i odlučila sam da vas nazovem.
                                    </p>
                                    <p> Mnogo vam hvala za preporuku i Diabetea, koji ste mi poslali. Odmah sam počela
                                        da ga koristim. Od tad su prošla četiri meseca i još uvek sam živa. I živeću još
                                        dugo jer su mi lekari rekli da mi se šećer normalizovao. A to mogu i sama da
                                        osetim. Poslednjih 10 godina se nisam osećala ovako zdravo i slobodno od
                                        dijabetesa kao sad! Počela sam dobro da spavam, nestala je stalna žeđ, prestala
                                        sam da stalno idem u toalet, nije bilo nikakvih znakova umora i stalne slabosti.
                                        Pritisak je takođe prestao da raste. Popravio mi se vid. Još uvek traje moje
                                        lečenje, a uverena sam da ću to preživeti. Mnogo vam hvala za <a href>
                                            Diabetea </a> .
                                    </p>
                                </div>
                                <h3 class="SimpleBlock-h3">
                                    <strong> Recite, koliko traje lečenje pomoću preparata Diabetea. </strong>
                                </h3>
                                <br>
                                <p>
                                    <b> Doktor Jovan Andrić: <br>
                                        <br> Iskreno, proces nije brz, ali je temeljan. Traje nekoliko meseci. Može da
                                        traje i pola godine. </b>
                                </p>
                                <p> Musíte být připraveni na dlouhodobou léčbu. Ale po léčbě se zbavíte příznaků které
                                    vás trápí a budete moci žít normální zdravý život, jak jste žili před
                                    cukrovkou.
                                </p>
                                <p>
                                    <a href> Diabetea </a> pomáhá všem, včetně seniorů s oslabenou imunitou.
                                </p>
                                <p> Opisaću vam faze lečenja </p>
                                <p style="text-align: center;">
                                    <b> Obnavljanje krvnih sudova </b>
                                </p>
                                <p> Osnovno delovanje <a href> Diabetea </a> je u tome što ne samo da uklanja šećer iz
                                    krvi, nego i normalizuje nivo glukoze. On takođe rastvara šećer koji je već prošao
                                    kroz zidove krvnih sudova zbog ginko bilobe u njegovom sastavu. Zidovi krvnih
                                    sudova, koji se bukvalno oslobađaju leda, ponovo dobijaju sposobnost sužavanja i
                                    širenja. Rastvorite trombove, očistite krvne sudove. Dolazi do obnavljanja sitnih
                                    kapilara. Zato više nema povišenog arterijskog pritiska, nestaje slabost i
                                    pospanost, ubrzava se zaceljivanje rana i posekotina. Stvara se više snage. Ljudi
                                    odmah žele da se pozabave kućom i baštom.
                                </p>
                                <p style="text-align: center;">
                                    <b> Normalizacija nivoa glukoze </b>
                                </p>
                                <p> Diabetea ne povećava nivo insulina i zato je bezbedan. Ali ima izuzetno koristan
                                    efekat, a upravo on snižava rezistenciju na insulin. To je veoma dobro svojstvo.
                                    Biološki aktivne komponente preparata prodiru direktno u ćelije mišića, masti i
                                    jetre i stimulišu ih tako da bolje počnu da reaguju na prisustvo hormona u krvi. U
                                    medicini se ovaj proces naziva „sekundarno formiranje ćelija”. Kao posledica ovoga,
                                    s vremenom ćelije počinju da troše aktivnu glukozu što dovodi do snižavanja njene
                                    koncentracije u krvi. Ovo je za organizam najbezbedniji način upotrebe glukoze.
                                </p>
                                <p class="text_color"> Oboleli počinju da se dobro osećaju u bilo koje doba dana, pa čak
                                    i nakon jela. Više ih ne muči žeđ. Nema više ekcema i osipa. Nestaje neprijatan
                                    miris polnih organa. Pacijenti prestaju da često idu u toalet.
                                </p>
                                <p> Ako govorimo o fizičkim pokazateljima, dolazi do snižavanja nivoa glikozilirovanog
                                    hemoglobina, snižavanja koncentracije šećera i acetona u mokraći.
                                </p>
                                <p style="text-align: center;">
                                    <b> Istopite suvišne kilograme! </b>
                                </p>
                                <p> Kod gubljenja 10 kg prekomerne težine, rizik od opasnih posledica dijabetesa se
                                    snižava za skoro 50%.
                                </p>
                                <p style="text-align: center;">
                                    <b> Moguća normalizacija </b>
                                </p>
                                <p> Mnogi dijabetičari nemaju snage. Jedno od fascinantnih dejstava preparata <a href>
                                        Diabetea </a> je normalizovanje nivoa testosterona i obnova zdrave potencije.
                                    Čak i sa 50, 60 godina muškarci mogu da imaju seks.
                                </p>
                                <p style="text-align: center;">
                                    <b> Poboljšava stanje kože, kostiju i mišića </b>
                                </p>
                                <p> Obnavlja se čak i veoma oštećena koža. Čirevi zarastaju, koža prestaje da se gnoji i
                                    suši. Isto se dešava i s kostima jer se obnavlja njihov zdrav sastav i prestaju da
                                    budu krte. Obnova se dešava u svim tkivima, mišići vraćaju elastičnost.
                                </p>
                                <center>
                                    <img src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/-5.jpg">
                                </center>
                                <p style="text-align: center;">
                                    <b> Efekat leptira za svakog dijabetičara! </b>
                                </p>
                                <p> Delovanje preparata <a href> Diabetea </a> slično je na delovanje leptirovih krila
                                    koje izaziva lančanu reakciju izlečenja unutrašnjih organa i poboljšanje
                                    zdravstvenog stanja. Počinje normalizacijom rada krvnih sudova, a završava obnovom
                                    vida i zglobova.
                                </p>
                                <p style="text-align: center;">
                                    <b> Lako buđenje </b>
                                </p>
                                <p> Ujutru se budite lako i ustajete iz postelje - više ne morate da se terate da
                                    ustanete, rastežete i masirate ukočene noge, kičmu i vrat. Ujutru vam je telo puno
                                    energije i snage.
                                </p>
                                <p style="text-align: center;">
                                    <b> Odlično stanje i raspoloženje </b>
                                </p>
                                <p> Ujutru i tokom celog dana. Spavaj spokojno i dovoljno. Osećate se podmlađeno. Ne
                                    morate noću da idete u toalet. Ništa vas ne boli i nemate neprijatan miris.
                                </p>
                                <p style="text-align: center;">
                                    <b> Ukusni doručak </b>
                                </p>
                                <p> Svoj meni ćete ispuniti raznim proizvodima, više ne morate da držite strogu dijetu.
                                    Setićete se ukusa jela o kojima sad sanjate. Nema više dijete siromašne ugljenim
                                    hidratima. Uživajte u ukusu omiljenih jela!
                                </p>
                                <p style="text-align: center;">
                                    <b> Herojska snaga </b>
                                </p>
                                <p> Izlazeći iz kuće, više ne morate da se brinete zbog vaših nogu - hodanje vam neće
                                    biti neprijatan zadatak, moći ćete da hodate po ceo dan, a noge se ne umaraju i ne
                                    natiču. Sandale, cipele, čarape ne ostavljaju tragove na natečenim nogama kao špaga
                                    na kobasici.
                                </p>
                                <p style="text-align: center;">
                                    <b> Potpuna tišina </b>
                                </p>
                                <p> Potpuno ste spokojni i opušteni. Više nema stalnih bolova koji vam ometaju svest i
                                    ne dozvoljavaju da se fokusirate ni na šta drugo. Kad ništa ne boli, obične stvari
                                    su upečatljivije, zvuci, mirisi na koje ste davno zaboravili.
                                </p>
                                <p style="text-align: center;">
                                    <b> Vidiš </b>
                                </p>
                                <p> Čak i jako oštećen vid postepeno počinje da se oporavlja. To što ste ranije videli
                                    kroz maglu, postaje jasno. Ponovo možete da vidite broj autobusa izdaleka i ponovo
                                    možete da uživate u lepoti prirode.
                                </p>
                                <p> A najvažnije je da ćete produžiti život! A čak i u starijoj dobi ćete se osećati
                                    zdravo i bodro. Vaši bližnji neće morati da se brinu o vama, vi ćete se sami
                                    pobrinuti za sebe.
                                </p>
                                <p>
                                    <b> Deficit preparata Diabetea u apotekama u Srbiji! </b>
                                </p>
                                <p>
                                    <b> Koliko je nama poznato, veoma je teško kupiti <a href> Diabetea </a> Ovaj lek je
                                        retko dostupan. Da li je to tačno? I šta biste mogli da posavetujete
                                        dijabetičarima u Srbiji? </b>
                                </p>
                                <p> Da, upravo tako. Diabetea se pušta u prodaju u ograničenim serijama i zato ne dolazi
                                    od apoteka. Veliki deo, nažalost, odlazi u inostranstvo i kupuju ga privatne
                                    klinike.
                                </p>
                                <p> Ali imam lepe vesti za čitaoce vašeg časopisa: posavetovao sam se s kolegama i
                                    odlučio da vašim čitaocima ponudimo deo preparata Diabetea, po minimalnoj ceni. Lek
                                    dostavljamo preko pošte direktno pacijentima u kuću. U bilo koji region u
                                    Srbiji.
                                </p>
                                <p> Evo koji su uslovi za dobijanje preparata <a href> Diabetea </a> . </p>
                                <p> Treba da: </p>
                                <ul class="ListBlock-root" style="list-style-type: decimal;  padding-left: 45px;">
                                    <li> Treba da živite u Srbiji. Nećemo slati u inostranstvo. Diabetea.</li>
                                    <li> Diabetea možete da dobijete SAMO ZA LIČNU UPOTREBU. Molimo preprodavače da ne
                                        preprodaju profitabilni Diabetea Nije čovečno zarađivati na bolesnim ljudima!
                                        Diabetea Diabetea će da se šalje samo jednoj osobi i to u količini koja je
                                        neophodna samo za lečenje JEDNE osobe - ili dve ako u porodici ima nekoliko
                                        dijabetičara).
                                    </li>
                                </ul>
                                <p> Da biste sudjelovali u našem programu, morate kliknuti na gumb „zavrti” na biciklu
                                    sa donjim popustima. Ovisno o tome što točak prikazuje, možete pobijediti <a href>
                                        Diabetea </a> uz određeni popust. Točak možete okrenuti samo jednom.
                                </p>
                                <p>
                                    <b> Iskoristite ovu priliku dok je ne ugrabi neko drugi! </b>
                                </p>
                                <p> Nažalost, kod nas nema ovog leka u dovoljnim količinama za sve dijabetičare u
                                    Srbiji. Zato smo odlučili da ga ponudimo svima ko brže od ostalih ostavi zahtev na
                                    stranici. Ako želite da izlečite dijabetes ovim jedinstvenim kompleksom, savetujem
                                    da ga naručite što je pre moguće dok ga još ima na zalihama.
                                </p>
                                <p id="form" style="text-align: center;">
                                    <b> Pozor! <a href> Diabetea </a> akcija se brzo završava! <br> Broj dostupnih paketa se brzo
                                        smanjuje! </b>
                                </p>
                                <p style="text-align: center; color: red;">
                                    <b>
                                    <span class="date-0">
                                       <script type="text/javascript">
                                          var d = new Date();
                                          var curr_date = d.getDate() + 0;
                                          var curr_month = d.getMonth() + 1;
                                          var curr_year = d.getFullYear();
                                          if (curr_month < 10) curr_month = '0' + curr_month;
                                          if (curr_date < 10) curr_date = '0' + curr_date;
                                          document.write(curr_date + '.' + curr_month + '.' + curr_year);
                                       </script>
                                    </span>
                                        broj paketa sa popustom je:
                                    </b>
                                </p>
                                <h3 class="left_count" style="text-align: center; cursor: pointer">
                                    <b class="prod_left_val"> 19 komada </b>
                                </h3>
                                <h4 style="text-align: center; color:green;">
                                    <span> Ti <u> možeš </u> popuniti obrazac i preuzeti „ <a href> Diabetea </a> ” po sniženoj ceni </span>
                                </h4>
                                <div class="center">
                                    <div class="features-wrapper">
                                        <span class="toform"></span>
                                        <div class="spin-wrapper">
                                            <p>
                                                <b> Pažnja! </b>
                                                <br> Posetioci naše stranice imaju ekskluzivnu mogućnost da naruče
                                                Diabetea s popustom do 50%! Da biste to uradili, zavrtite kolo sreće
                                                tako što ćete kliknuti na taster „ZAVRTI” i zatim sačekajte da se
                                                potpuno zaustavi. Ko zna, možda ste baš Vi taj srećnik koji će danas
                                                uspeti malo da uštedi! Srećno!
                                            </p>
                                            <div class="wheel-wrapper">
                                                <div class="wheel">
                                                    <img alt class="wheel-img"
                                                         src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/prizewheel.png">
                                                    <div class="wheel-cursor">
                                                        <img alt
                                                             src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/wheel-cursor.png">
                                                        <span class="cursor-text" onclick="spin();"> ZAVRTI </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order_block">
                                            <div class="prod_img_wrapper">
                                                <img class="prod_img"
                                                     src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/product.png"
                                                     width="300">
                                                <div class="priceс">
                                                    <span class="discountс"> Povoljno! </span>
                                                    <s>
                                                        <span class="js_old_price price_old"> {{ $prices[1]['amount']*2 }} RSD </span>
                                                    </s>
                                                    <br>
                                                    <b class="new_price js_new_price price_main"> {{ $prices[1]['amount'] }} RSD </b>
                                                </div>
                                            </div>
                                            <center class="mt45 mb35">
                                                <h3 style="text-align: center"> Naručite s popustom dok ponuda ne bude
                                                    prosleđena sledećem čitaocu! <br> Ponuda će biti nevažeća za: <span
                                                        class="time_remains" id="min"></span> : <span
                                                        class="time_remains" id="sec"></span>
                                                </h3>
                                            </center>
                                            <form action="{{$orderRoute}}" class="order_form" method="POST">
                                                {{csrf_field()}}
                                                @include('lander.naturapharm.components.form_hidden_fields')
                                                <label class="data_label" for="name"> Vaše ime: </label>
                                                <input class="wheel_input" id="name" name="name"
                                                       placeholder="Petar Petrović " required type="text">
                                                <label class="data_label" for="phone"> Broj telefona: </label>
                                                <input class="wheel_input only_number" id="phone" name="phone"
                                                       placeholder="+381..." required type="text">
                                                <button class="main-link js_submit" type="submit"> Naručite Diabetea
                                                </button>
                                            </form>
                                        </div>
                                        <div class="spin-result-wrapper" style="display: none;">
                                            <div class="pop-up-window">
                                                <div class="close-popup"></div>
                                                <span class="pop-up-heading"> Čestitamo! </span>
                                                <p class="pop-up-text"> Možete da naručite Diabetea s popustom od
                                                    50%!
                                                </p>
                                                <a class="pop-up-button" href> Ok </a>
                                            </div>
                                        </div>
                                        <center>
                                            <h2 class="time_remains_title"> PONUDA VAŽI DO (ISKLJUČIVO): <span
                                                    class="time_remains"> {{ date('d.m.y.') }} </span>
                                            </h2>
                                            <br>
                                        </center>
                                        <style>
                                            .order_block {
                                                display: none;
                                            }
                                        </style>
                                        <style>
                                            .priceс br {
                                                display: none;
                                            }
                                        </style>
                                    </div>
                                </div>
                                <div id="comments">
                                    <br>
                                    <h2 class="spoint" data="11"> KOMENTARI </h2>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/1.jpg">
                                            </div>
                                            <span class="row-y-name name"> Mila
                                       </span>
                                            <div class="pg"> Hvala vam za vašu dobrotu! Pokušala sam da kupim Diabetea
                                                na drugoj klinici. Rekli su mi da se prodaje po 10 puta većoj ceni.
                                                Odbila sam. A jedan poznanik mi je dao link za ovaj članak. Naručila sam
                                                kod vas i brzo su mi dostavili. Već se lečim i već ima rezultata!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/2.jpg">
                                            </div>
                                            <span class="name"> Nikola
                                       </span>
                                            <div class="pg"> Potvrđujem sve što je lekar rekao! Metformin je loš - njime
                                                dosta truju ljude i zarađuju na njima! Koristim a već sedam godina. I
                                                nisam imao nikakve rezultate. Šećer mi je stalno rastao i nastavljao
                                                rasti. Prosto su stvari krenule naopako. A onda sam našao Diabetea. Kao
                                                nebo i zemlja. Ovaj prirodni lek stvarno poboljšava stanje za razliku od
                                                opasne hemije. Narode, svima preporučujem samo Diabetea.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/3.jpg">
                                            </div>
                                            <span class="name"> Milica
                                       </span>
                                            <div class="pg"> O, i ja sam imala dijabetes dok nisam čula za Diabetea.
                                                Bila sam kao penzionerka. Isto tako sam imala i visok pritisak i još
                                                visok nivo šećera u krvi (200-230) što me je stalno ljuljalo. A o
                                                suvišnim kilogramima da ne govorim - 120 kg a niska sam. Natečenost,
                                                otežano disanje, sve sam to imala. Znojila sam se i imala sam gnojne
                                                upale. Sad to više nemam. Prošla sam tretman lečenja uz Diabetea. Sad se
                                                osećam kao živ čovek. Smršala sam, pritisak je prestao da raste.
                                                Uopšteno, sve mi odgovara.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/4.jpg">
                                            </div>
                                            <span class="name"> Jovan
                                       </span>
                                            <div class="pg"> Ovo je odlično sredstvo za snižavanje šećera. Za mesec mi
                                                je šećer spao sa 14 mmol/l do 7,9!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/5.jpg">
                                            </div>
                                            <span class="name"> Milutin
                                       </span>
                                            <div class="pg"> Hvala, naručio sam. Konsultant me je pozvao i pitao sam
                                                koliko je pakovanja ostalo. Rekao je da ima preko 15, ali sve više ljudi
                                                naručuje i naravno da sve više ljudi zna za ovu mogućnost. Uskoro će ga
                                                nestati.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/6.jpg">
                                            </div>
                                            <span class="name"> Radomir
                                       </span>
                                            <div class="pg"> Bilo koja bolest je jednima - muka, a drugima - biznis.
                                                Apoteke su odavno pokazale svoje pravo lice - sve što hoće od nas su
                                                naše pare i naše zdravlje!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/7.jpg">
                                            </div>
                                            <span class="name"> Živojin
                                       </span>
                                            <div class="pg"> Imam dijabetes. I oporavio sam se. Sad svake godine prođem
                                                tretman preparatom Diabetea, da se ne bi vratio. Preporučujem svima koji
                                                nisu probali ovaj lek!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/8.jpg">
                                            </div>
                                            <span class="name"> Anđela
                                       </span>
                                            <div class="pg"> Diabetea JE RASPRODAT !!!!!!!! Nisam uspela da naručim.
                                                Kažu da je bilo juče, a danas nema... Dijabetes me je već namučio. Ne
                                                znam šta da radim. Nadala sam se da će Diabetea. Gde mogu da ga nađem??
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/9.jpg">
                                            </div>
                                            <span class="name"> Jovana
                                       </span>
                                            <div class="pg"> Ni ja nisam uspela. Šta sad da radim??? Drug mi je rekao za
                                                Diabetea. Mnogo ga je hvalio i ja sam htela da naručim, ali nisam
                                                uspela.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img
                                                    src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/10.jpg">
                                            </div>
                                            <span class="name"> Мarija
                                       </span>
                                            <div class="pg"> Pozdrav svima. Imam 59 godina, početna kilaža mi je bila
                                                124 kg, a sad imam 80 kg, visoka sam 168 cm. Nivo glukoze je od 18 do
                                                12, a bio je 29. Sad je 5,0. Uzimam Diabetea tokom 3 meseca. Drago mi je
                                                zbog rezultata. Nijedan lek mi nije tako pomogao.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img
                                                    src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/11.jpg">
                                            </div>
                                            <span class="name"> Ivo
                                       </span>
                                            <div class="pg"> Hoćete li još prodavati? I kad? I ja hoću da naručim!!!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img
                                                    src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/12.jpg">
                                            </div>
                                            <span class="name"> Katarina
                                       </span>
                                            <div class="pg"> Diabetea se vratio u prodaju! Kako piše na sajtu, klinika
                                                je dala još 1000 pakovanja za dijabetičare u Srbiji! Kako lekari kažu,
                                                to je zadnje što mogu da daju.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img
                                                    src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/13.jpg">
                                            </div>
                                            <span class="name"> Stevan
                                       </span>
                                            <div class="pg"> Hvala! Naručio sam. Obećali su mi da će stići prekosutra.
                                                Odmah počinjem lečenje.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img
                                                    src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/14.jpg">
                                            </div>
                                            <span class="name"> Mladen
                                       </span>
                                            <div class="pg"> Preparat je odličan. Koristim već nedelju dana i već
                                                primećujem pozitivne promene. Šećer merim nekoliko puta dnevno. Raste
                                                puno manje. Ako ovako nastavi, imam šansu da se izlečim.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img
                                                    src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/15.jpg">
                                            </div>
                                            <span class="name"> Мilorad
                                       </span>
                                            <div class="pg"> Dijabetes je strašno podmukla bolest. Imam ga već 4 godine,
                                                nisam imao te spoljašnje simptome, samo mi je grlo suvo. Zato ne verujem
                                                baš u amputacije nogu i slično. Ali desilo mi se da padnem u nesvest.
                                                Odveli su me u bolnicu i uradili nalaze. Rezultati su užasni. Bubrezi su
                                                u stanju pred rakom, krvni sudovi su uništeni, a lekari su bili u šoku.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img
                                                    src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/16.jpg">
                                            </div>
                                            <span class="name"> Marija
                                       </span>
                                            <div class="pg"> Moj otac ima dijabetes i ne želi da pije tablete. Zna li
                                                neko hoće li mu Diabetea pomoći?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img
                                                    src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/17.jpg">
                                            </div>
                                            <span class="name"> Кristina
                                       </span>
                                            <div class="pg"> Naravno da će mu pomoći! U svakom slučaju treba da proba, a
                                                i Diabetea košta puno manje od ovog metformina.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img
                                                    src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/18.jpg">
                                            </div>
                                            <span class="name"> Кatarina
                                       </span>
                                            <div class="pg"> Diabetea je predivan lek. Naša kćer je dobila dijabetes.
                                                Ima samo 7 godina. Nisam htela da joj dajem hemiju jer je previše mala.
                                                Konsultovala sam se s mnogim endokrinolozima. Odlučili smo da odaberemo
                                                Diabetea. Dobro joj je pomogao. Šećer je skoro prestao da raste <a
                                                    href></a> .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img
                                                    src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/19.jpg">
                                            </div>
                                            <span class="name"> Nikolina
                                       </span>
                                            <div class="pg"> Hvala! Uspela sam da naručim dok još ima!</div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img
                                                    src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/20.jpg">
                                            </div>
                                            <span class="name"> Jana
                                       </span>
                                            <div class="pg"> Mnogo vam hvala za ovaj članak, nadam se da će pomoći
                                                ljudima
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava">
                                                <img
                                                    src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/images/21.jpg">
                                            </div>
                                            <span class="name"> Ratko
                                       </span>
                                            <div class="pg"> Hvala. Ostavio sam zahtev.</div>
                                        </div>
                                    </div>
                                    <br>
                                    <a class="button" href> Naručiti Diabetea u Srbiji </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/js/index.js"></script>
<script src="{{ asset('/') }}medicinaizprirodeFiles/diabetea/js/js.cookie.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        try {
            moment.locale("");
            $('.day-before').text(moment().subtract(1, 'day').format('D.MM.YYYY'));
            $('.day-after').text(moment().add(1, 'day').format('D.MM.YYYY'));
        } catch (e) {
            console.log('moment problems!');
        }
    });
</script>
<!--retarget-->
<!--retarget-->
<div class="ac_footer">
    <span> © 2022 Copyright. All rights reserved. </span>
    {{--    <br>--}}
    {{--    <a href="febatigr.com/content/shared/html/policy_en.html" target="_blank"> Privacy policy </a> | <a href="http://ac-feedback.com/report_form/"> Report </a>--}}
    {{--
    <p></p>
    --}}
    {{--    <script>--}}
    {{--        typeof adc_clearFooter !== 'undefined' && adc_clearFooter();--}}
    {{--
 </script>--}}
</div>
@include('lander.medicinaizprirode.components.pixel_footer')
</body>
</html>
