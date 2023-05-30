<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="{{ asset('/') }}naturapharmFiles/snailcream/4647.png" type="image/png">
    <link rel="shortcut icon" href="{{ asset('/') }}naturapharmFiles/snailcream/4647.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/snailcream/style.css"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/snailcream/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/snailcream/owl.carousel.min.css"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/snailcream/owl.theme.default.css"/>
    <style>
        @font-face {
            font-family: 'BebasNeueBold';
            src: url('{{ asset('/') }}fonts/BebasNeueBold.eot'),
            url('{{ asset('/') }}fonts/BebasNeueBold.woff') format('woff'),
            url('{{ asset('/') }}fonts/BebasNeueBold.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        @media (max-width: 1005px) {
            .strong-block-text img {
                width: 280px;
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header>
    <div class="header-body">
        <div class="header-pack">
            <div class="header-pack-body"><img src="{{ asset('/') }}naturapharmFiles/acnetreatmentserum/header-pack.png"
                                               alt=""/></div>
            <div class="header-pack-sale">
                <p>
                     <span class="price_land_s1">
                     {{ $prices[1]['amount'] }}
                     </span>
                    <span class="price_land_curr">
                     {{ $prices[1]['currency'] }}
                     </span>
                </p>
            </div>
        </div>
        <div class="header-info">
            <div class="header-head">
                <div class="header-name">
                    <h2>PODMLADI SE <span>ZA SAMO 5 DANA</span></h2>
                </div>
                <div class="header-text">
                    <p><span>ACNE TREATMENT <br>ZA VEČNU MLADOST </span>
                        <br>
                        I DO 4 PUTA EFIKASNIJE OD OSTALIH SREDSTAVA ZA PODMLAĐIVANJE!
                    </p>
                </div>
            </div>
            <div class="header-girl"><img src="{{ asset('/') }}naturapharmFiles/snailcream/girl.png" alt=""/></div>
            <div class="header-pack-mobile">
                <div class="header-pack-body"><img src="{{ asset('/') }}naturapharmFiles/acnetreatmentserum/header-pack.png"
                                                   alt=""/></div>
                <div class="header-pack-sale">
                    <p>
                        <span class="price_land_s1">
                        {{ $prices[1]['amount'] }}
                        </span>
                        <span class="price_land_curr">
                        {{ $prices[1]['currency'] }}
                        </span>
                    </p>
                </div>
            </div>
            <div class="header-list">
                <ul>
                    <li> Izgleđuje bore <br><span>za 83%</span></li>
                    <li><span>Pospešuje proces</span> obnavljanja ćelija</li>
                    <li> Eliminiše <span>flekice i pege</span></li>
                    <li> Potpuno transformiše kožu <span>za 5 dana</span></li>
                </ul>
            </div>
            <div class="header-content">
                <div class="header-content-info">
                    <div class="header-price" style="width: 100%;">
                        <div class="header-price-new">
                            <p>
                                Cena na akciji:
                                <span class="new_price_val price_land_s1">
                              {{ $prices[1]['amount'] }}
                              </span>
                                <span class="price_land_curr">
                              {{ $prices[1]['currency'] }}
                              </span>
                            </p>
                        </div>
                        <div class="header-price-old">
                            <p>
                                Redovna cena:
                                <span class="price_land_s2">
                              {{ $prices[1]['originalPrice'] }}
                              </span>
                                <span class="price_land_curr">
                              {{ $prices[1]['currency'] }}
                              </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="header-form">
                    <form action="{{$orderRoute}}" method="post" class="orderformcdn landing__form">
                        {{ csrf_field() }}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <div class="hf-pole-input"><input type="text" name="name" placeholder="Ime i prezime" required>
                        </div>
                        <div class="hf-pole-input"><input type="tel" name="phone" placeholder="Telefon" required></div>
                        <div class="hf-pole-btn">
                            <button type="submit"><span>Poručite sada</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="main">
    <div class="strong-block">
        <div class="strong-block-note">
            <div class="sbn-name">
                <h2><span>U ČEMU JE TAJNA</span> ACNE TREATMENT SERUMA?</h2>
            </div>
            <div class="sbn-img">
                <img src="{{ asset('/') }}naturapharmFiles/snailcream/strong1.jpg" alt=""/>
                <p>Oslobodite se bora u potpunosti</p>
            </div>
            <div class="sbn-img">
                <img src="{{ asset('/') }}naturapharmFiles/snailcream/strong2.jpg" alt=""/>
                <p>Bez operacija i injekcija</p>
            </div>
        </div>
        <div class="strong-block-text">
            <img src="{{ asset('/') }}naturapharmFiles/acnetreatmentserum/header-pack.png" alt=""/>
            <p>Inovativna formula i jedinstveni sastojci ispravljaju bore iznutra, opuštajući mišićna vlakna bez promene izraza lica.
                Hijaluronska kiselina niske molekularne težine i morski
                kolagen stimulišu ćelije kože da proizvode sopstveni kolagen i elastin!</p>
            <p>ACNE TREATMENT ne samo da će momentalno izgladiti mimičke bore, već će i sprečiti pojavu novih zbog kumulativnog
                efekta.
                Nanesite ACNE TREATMENT na problematična područja i ostvarite vidljive rezultate za samo 5 dana!</p>
        </div>
    </div>
    <div class="pay-block">
        <div class="pay-block-name">
            <h2>
                <span>FILERI I INJEKCIJE SU PROŠLOST!</span>
                <p>Instant ACNE TREATMENT brzo i bezbolno uklanja bore sa lica!</p>
            </h2>
        </div>
        <div class="pay-block-info">
            <div class="pay-block-video"><img style="max-width: 100%"
                                              src="{{ asset('/') }}naturapharmFiles/acnetreatmentserum/header-pack.png" alt=""/>
            </div>
            <div class="pay-block-text">
                <div class="pay-block__item1">
                    <div class="pay-block__img1"><img src="{{ asset('/') }}naturapharmFiles/snailcream/left.gif" alt="">
                    </div>
                    <div class="pay-block__text1">
                        <p>Regeneriše ćelije kože</p>
                        <span>Pospešuje stvaranje novih ćelija</span>
                        <span>Stimuliše proizvodnju kolagena</span>
                        <span>Čini kožu vlažnom</span>
                    </div>
                </div>
                <div class="pay-block__item2">
                    <div class="pay-block__img2"><img src="{{ asset('/') }}naturapharmFiles/snailcream/right.gif"
                                                      alt=""></div>
                    <div class="pay-block__text2">
                        <p>Poboljšava izgled</p>
                        <span>Smanjuje naduvenost</span>
                        <span>Neutrališe podočnjake</span>
                        <span>Čini kožu finom i glatkom</span>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <div class="contrast-block">
        <div class="contrast-block-body">
            <div class="contrast-block-name">
                <h2>PO ČEMU SE <span>RAZLIKUJE</span> ACNE TREATMENT OD DRUGIH PROIZVODA?</h2>
            </div>
            <div class="contrast-block-info">
                <div class="contrast-block-text">
                    <p>
                        Formula inovativnog ACNE TREATMENT SERUMA zasnovana je na <span>potpuno prirodnim sastojcima i vitaminima.</span>
                        Zahvaljujući tome ACNE TREATMENT <span>zaglađuje bore i trajno eliminiše uzrok starenja kože preokretom autoimunih procesa.</span>
                    </p>
                    <p>
                        Naučnici već nekoliko godina testiraju različite prirodne sastojke, kombinuju i proveravaju
                        dejstvo. Kao rezultat toga, <span>uspeli su da izmisle novu inovativnu
                            super-formulu, jedinu u celom svetu.</span>
                    </p>
                </div>
                <div class="contrast-block-img"><img src="{{ asset('/') }}naturapharmFiles/acnetreatmentserum/header-pack.png"
                                                     alt=""/></div>
            </div>
            <div class="contrast-btn">
                <button data-toggle="scroll" data-id="#form">Poručite sada</button>
            </div>
        </div>
    </div>
    <div class="feedback">
        <div class="feedback-name">
            <h2><span>Utisci žena</span> koje su već koristile ACNE TREATMENT</h2>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="feed-img"><img src="{{ asset('/') }}innodermFiles/innoderm4/slide-1.jpg" alt=""></div>
                <div class="feed-text">
                    <p><span>Prosto sam zadivljena!</span></p>
                    <p>ACNE TREATMENT je fenomenalan, prosto sam zadivljena!
                        Nikada nisam probala ovako nešto. Serum hidrira i zateže kožu. Ujutru sam se probudila i nanela
                        ga, pa mi je lice bilo sveže celi dan. Koristim ga već dve nedelje
                        i bore oko očiju mi polako nestaju. Srećna sam kada se gledam u ogledalo, popravilo mi se i
                        raspoloženje! Hvala vam za ovaj divni serum, preporučila sam ga svim
                        svojim prijateljicama.</p>
                    <p><b>Suzana, 50 godina</b></p>
                </div>
            </div>
            <div class="item">
                <div class="feed-img"><img src="{{ asset('/') }}innodermFiles/innoderm4/slide-2.jpg" alt=""></div>
                <div class="feed-text">
                    <p><span>Nema više injekcija!</span></p>
                    <p>Volim kada kozmetika ne samo obećava, već i radi! ACNE TREATMENT vidno zaglađuje bore, eliminiše tamne
                        kolutove oko očiju i osvežava ten za 5 minuta!
                        Čudesan serum, ovo je čista magija! Koža je elastična, glatka i svilenkasta! Nanosim ga po celom licu,
                        prezadovoljna sam! Čista petica! Mnogo vam hvala!</p>
                    <p><b>Katarina, 52 godine</b></p>
                </div>
            </div>
            <div class="item">
                <div class="feed-img"><img src="{{ asset('/') }}innodermFiles/innoderm4/slide-3.jpg" alt=""></div>
                <div class="feed-text">
                    <p><span>Najbolje što sam ikada probala!</span></p>
                    <p>Idealna stvar, nanesite tanak sloj i lice se menja pred vašim očima! Koža postaje zategnuta a
                        bore izglađene. Konačno sam našla savršen proizvod za negu mog lica!
                        Svaki dan dobijam komplimente od kolega na poslu, a prijatelji su me pitali da li sam radila
                        filere. Svi su u šoku kada kažem da je to rezultat ovog seruma!
                        Zaista je super, ja sam kupila 4 komada putem njihovog call centra!</p>
                    <p><b>Natalija, 46 godina</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="take-block">
        <div class="take-block-name">
            <h2><span>Kako naneti</span> ACNE TREATMENT?</h2>
        </div>
        <div class="take-block-list">
            <ul>
                <li class="active" id="t1">
                    <div class="tbl-img"><img src="{{ asset('/') }}naturapharmFiles/snailcream/take1.png" alt=" "/>
                    </div>
                    <div class="tbl-info">
                        <h3>OČISTITI LICE</h3>
                        <p>Bolje je oprati toplom vodom tako da se pore prošire kako bi komponente duboko prodirale</p>
                    </div>
                </li>
                <li id="t2">
                    <div class="tbl-img"><img src="{{ asset('/') }}naturapharmFiles/snailcream/take2.png" alt=" "/>
                    </div>
                    <div class="tbl-info">
                        <h3>NANETI SERUM</h3>
                        <p>Nanesite ACNE TREATMENT po celom licu</p>
                    </div>
                </li>
                <li id="t3">
                    <div class="tbl-img"><img src="{{ asset('/') }}naturapharmFiles/snailcream/take3.png" alt=" "/>
                    </div>
                    <div class="tbl-info">
                        <h3>UŽIVAJTE U REZULTATU</h3>
                        <p>Koristite serum 28 dana dok se koža potpuno ne obnovi</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="owl-carousel owl-theme owl__hidden">
            <div class="item">
                <div class="tbl-img"><img src="{{ asset('/') }}naturapharmFiles/snailcream/take1.png" alt=" "/></div>
                <div class="tbl-info">
                    <h3>OČISTITI LICE</h3>
                    <p>Bolje je oprati toplom vodom tako da se pore prošire kako bi komponente duboko prodirale</p>
                </div>
            </div>
            <div class="item">
                <div class="tbl-img"><img src="{{ asset('/') }}naturapharmFiles/snailcream/take2.png" alt=" "/></div>
                <div class="tbl-info">
                    <h3>NANETI SERUM</h3>
                    <p>Nanesite ACNE TREATMENT po celom licu</p>
                </div>
            </div>
            <div class="item">
                <div class="tbl-img"><img src="{{ asset('/') }}naturapharmFiles/snailcream/take3.png" alt=" "/></div>
                <div class="tbl-info">
                    <h3>UŽIVAJTE U REZULTATU</h3>
                    <p>Koristite serum 28 dana dok se koža potpuno ne obnovi</p>
                </div>
            </div>
        </div>
    </div>
    <div class="order-block">
        <div class="order-block-name">
            <h2><span>Kako poručiti</span> ACNE TREATMENT?</h2>
        </div>
        <div class="order-block-list">
            <ul>
                <li>
                    <div class="obl-img"><img src="{{ asset('/') }}naturapharmFiles/snailcream/order1.png" alt=" "/>
                    </div>
                    <div class="obl-info">
                        <h3>PORUDŽBINA</h3>
                        <p>Ostavite podatke za dostavu na našem sajtu</p>
                    </div>
                </li>
                <li>
                    <div class="obl-img"><img src="{{ asset('/') }}naturapharmFiles/snailcream/order2.png" alt=" "/>
                    </div>
                    <div class="obl-info">
                        <h3>POTVRDA</h3>
                        <p>Konktiraćemo vas da potvrdimo vašu porudžbinu</p>
                    </div>
                </li>
                <li>
                    <div class="obl-img"><img src="{{ asset('/') }}naturapharmFiles/snailcream/order3.png" alt=" "/>
                    </div>
                    <div class="obl-info">
                        <h3>ISPORUKA</h3>
                        <p>Šaljemo brzom poštom u roku od 1-2 radna dana</p>
                    </div>
                </li>
                <li>
                    <div class="obl-img"><img src="{{ asset('/') }}naturapharmFiles/snailcream/order4.png" alt=" "/>
                    </div>
                    <div class="obl-info">
                        <h3>PLAĆANJE</h3>
                        <p>Plaćate kuriru po preuzimanju paketa, nema plaćanja unapred</p>
                    </div>
                </li>
                <li>
                    <div class="obl-img"><img src="{{ asset('/') }}naturapharmFiles/snailcream/order5.png" alt=" "/>
                    </div>
                    <div class="obl-info">
                        <h3>PODMLAĐIVANJE</h3>
                        <p>Počnite da uživate u vidljivom efektu!</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<footer>
    <div class="header-body">
        <div class="header-pack">
            <div class="header-pack-body"><img src="{{ asset('/') }}naturapharmFiles/acnetreatmentserum/header-pack.png"
                                               alt=""/></div>
            <div class="header-pack-sale">
                <p>
                     <span class="price_land_s1">
                     {{ $prices[1]['amount'] }}
                     </span>
                    <span class="price_land_curr">
                     {{ $prices[1]['currency'] }}
                     </span>
                </p>
            </div>
        </div>
        <div class="header-info">
            <div class="header-head">
                <div class="header-name">
                    <h2>PODMLADI SE <span>ZA SAMO 5 DANA</span></h2>
                </div>
                <div class="header-text">
                    <p><span>ACNE TREATMENT ZA VEČNU MLADOST</span>
                        <br>
                        I DO 4 PUTA EFIKASNIJE OD OSTALIH SREDSTAVA ZA PODMLAĐIVANJE!</p>
                </div>
            </div>
            <div class="header-girl"><img src="{{ asset('/') }}naturapharmFiles/snailcream/girl.png" alt=""/></div>
            <div class="header-pack-mobile">
                <div class="header-pack-body"><img src="{{ asset('/') }}naturapharmFiles/acnetreatmentserum/header-pack.png"
                                                   alt=""/></div>
                <div class="header-pack-sale">
                    <p>
                        <span class="price_land_s1">
                        {{ $prices[1]['amount'] }}
                        </span>
                        <span class="price_land_curr">
                        {{ $prices[1]['currency'] }}
                        </span>
                    </p>
                </div>
            </div>
            <div class="header-list">
                <ul>
                    <li> Izgleđuje bore <br><span>za 83%</span></li>
                    <li><span>Pospešuje proces</span> obnavljanja ćelija</li>
                    <li> Eliminiše <span>flekice i pege</span></li>
                    <li> Potpuno transformiše kožu <span>za 5 dana</span></li>
                </ul>
            </div>
            <div class="header-content">
                <div class="header-content-info">
                    <div class="header-price" style="width: 100%;">
                        <div class="header-price-new">
                            <p>
                                Cena na akciji:
                                <span class="new_price_val price_land_s1">
                              {{ $prices[1]['amount'] }}
                              </span>
                                <span class="price_land_curr">
                              {{ $prices[1]['currency'] }}
                              </span>
                            </p>
                        </div>
                        <div class="header-price-old">
                            <p>
                                Redovna cena:
                                <span class="price_land_s2">
                              {{ $prices[1]['originalPrice'] }}
                              </span>
                                <span class="price_land_curr">
                              {{ $prices[1]['currency'] }}
                              </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="header-form">
                    <form action="{{$orderRoute}}" method="post" class="orderformcdn landing__form" id="form">
                        {{ csrf_field() }}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <div class="hf-pole-input"><input type="text" name="name" placeholder="Ime i prezime" required>
                        </div>
                        <div class="hf-pole-input"><input type="tel" name="phone" placeholder="Telefon" required></div>
                        <div class="hf-pole-btn">
                            <button type="submit"><span>Poručite sada</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="{{ asset('/') }}naturapharmFiles/snailcream/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}naturapharmFiles/snailcream/script.js"></script>
@include('components.pixel_footer')
</body>
</html>
