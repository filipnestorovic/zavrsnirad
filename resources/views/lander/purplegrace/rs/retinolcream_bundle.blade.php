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
        label {
            display: none;
        }
        .hf-pole-input{
            width:31%;
        }
        .header-price-new h4 {
            font: 24px/24px "Open Sans", sans-serif;
            font-weight: 700;
            color: #fff;
            display: block;
            width: 330px;
            padding-left: 30px;
            padding-top: 30px;
        }
        @media (max-width:1220px){
            .hf-pole-input{
                width:30%;
            }
        }
        @media (max-width:805px){
            .hf-pole-input{
                width:90.9%;
            }
        }
        @media (max-width:605px){
            .hf-pole-input{
                width:90.9%;
            }
            label {
                color: #fff;
                font: 17px/24px "Open Sans", sans-serif;
                display: block;
                text-align: center;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header>
    <div class="header-body">
        <div class="header-pack">
            <div class="header-pack-body"><img src="{{ asset('/') }}purplerelaxFiles/retinolcream/header-pack.png"
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
                    <p><span>KREMA "RETINOL" <br>ZA VEČNU MLADOST </span>
                        <br>
                        I DO 4 PUTA EFIKASNIJA OD OSTALIH SREDSTAVA ZA PODMLAĐIVANJE!
                    </p>
                </div>
            </div>
            <div class="header-girl"><img src="{{ asset('/') }}naturapharmFiles/snailcream/girl.png" alt=""/></div>
            <div class="header-pack-mobile">
                <div class="header-pack-body"><img src="{{ asset('/') }}purplerelaxFiles/retinolcream/header-pack.png"
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
                    <li> Zateže <span>konture lica</span></li>
                    <li> Potpuno transformiše kožu <span>za 5 dana</span></li>
                </ul>
            </div>
            <div class="header-content">
                <form action="{{$orderRoute}}" method="post" class="orderformcdn landing__form">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <div class="header-content-info">
                        <div class="header-price" style="width: 100%;">
                            <div class="header-price-new">
                                <p class="price_holder" data-quantity="1">
                                    Cena na akciji za 1 komad:
                                    <span class="new_price_val price_land_s1">
                                  {{ $prices[1]['amount'] }}
                                  </span>
                                    <span class="price_land_curr">
                                  {{ $prices[1]['currency'] }}
                                  </span>
                                </p>
                                <p class="price_holder" data-quantity="2">
                                    Cena na akciji za 2 komada:
                                    <span class="new_price_val price_land_s1">
                                  {{ $prices[2]['amount'] }}
                                  </span>
                                    <span class="price_land_curr">
                                  {{ $prices[2]['currency'] }}
                                  </span>
                                </p>
                                <p class="price_holder" data-quantity="3">
                                    Cena na akciji za 3 komada:
                                    <span class="new_price_val price_land_s1">
                                  {{ $prices[3]['amount'] }}
                                  </span>
                                    <span class="price_land_curr">
                                  {{ $prices[3]['currency'] }}
                                  </span>
                                </p>
                            </div>
                            <div class="header-price-old">
                                <p class="price_holder" data-quantity="1">
                                    Redovna cena za 1 komad:
                                    <span class="price_land_s2">
                                  {{ $prices[1]['originalPrice'] }}
                                  </span>
                                    <span class="price_land_curr">
                                  {{ $prices[1]['currency'] }}
                                  </span>
                                </p>
                                <p class="price_holder" data-quantity="2">
                                    Redovna cena za 2 komada:
                                    <span class="price_land_s2">
                                  {{ $prices[2]['originalPrice'] }}
                                  </span>
                                    <span class="price_land_curr">
                                  {{ $prices[2]['currency'] }}
                                  </span>
                                </p>
                                <p class="price_holder" data-quantity="3">
                                    Redovna cena za 3 komada:
                                    <span class="price_land_s2">
                                  {{ $prices[3]['originalPrice'] }}
                                  </span>
                                    <span class="price_land_curr">
                                  {{ $prices[3]['currency'] }}
                                  </span>
                                </p>
                            </div>
                            <div class="header-price-new">
                                <h4 class="price_holder freeShippingHolder"> + BESPLATNA DOSTAVA</h4>
                            </div>
                        </div>
                    </div>
                    <div class="header-form">
                        <div class="hf-pole-input"><input type="text" name="name" placeholder="Ime i prezime" required></div>
                        <div class="hf-pole-input"><input type="tel" name="phone" placeholder="Telefon" required></div>
                        <div class="hf-pole-input">
                            <label for="quantity1">Izaberite količinu:</label>
                            <select name="quantity" id="quantity1" class="quantity" required>
                                @foreach($prices as $singlePrice)
                                    <option value="{{ $singlePrice['quantity'] }}" data-free-shipping="{{ $singlePrice['is_free_shipping'] ? 'true' : 'false' }}"
                                            @if($singlePrice['is_default']) selected @endif
                                            @if(old('quantity') == $singlePrice['quantity']) selected @endif
                                            @if($singlePrice['is_free_shipping']) style="font-weight: bold;" @endif
                                    >
                                        &nbsp;{{ $singlePrice['quantity'] }} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="hf-pole-btn">
                            <button type="submit"><span>Poručite sada</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
<div class="main">
    <div class="strong-block">
        <div class="strong-block-note">
            <div class="sbn-name">
                <h2><span>U ČEMU JE TAJNA</span> RETINOL KREME?</h2>
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
            <img src="{{ asset('/') }}purplerelaxFiles/retinolcream/header-pack.png" alt=""/>
            <p>Inovativna formula i jedinstveni sastojci ispravljaju bore iznutra, opuštajući mišićna vlakna bez promene izraza lica.
                Hijaluronska kiselina niske molekularne težine i morski
                kolagen stimulišu ćelije kože da proizvode sopstveni kolagen i elastin!</p>
            <p>RETINOL KREMA ne samo da će momentalno izgladiti mimičke bore, već će i sprečiti pojavu novih zbog kumulativnog
                efekta.
                Nanesite RETINOL KREMA na problematična područja i ostvarite vidljive rezultate za samo 5 dana!</p>
        </div>
    </div>
    <div class="pay-block">
        <div class="pay-block-name">
            <h2>
                <span>FILERI I INJEKCIJE SU PROŠLOST!</span>
                <p>Instant RETINOL krema brzo i bezbolno uklanja bore sa lica!</p>
            </h2>
        </div>
        <div class="pay-block-info">
            <div class="pay-block-video"><img style="max-width: 100%"
                                              src="{{ asset('/') }}purplerelaxFiles/retinolcream/header-pack.png" alt=""/>
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
                <h2>PO ČEMU SE <span>RAZLIKUJE</span> RETINOL KREMA OD DRUGIH PROIZVODA?</h2>
            </div>
            <div class="contrast-block-info">
                <div class="contrast-block-text">
                    <p>
                        Formula inovativne kreme RETINOL KREMA rezultat je dugogodišnjeg istraživanja. Zasnovana je na <span>potpuno prirodnim sastojcima i vitaminima.</span>
                        Zahvaljujući tome RETINOL KREMA <span>zaglađuje bore i trajno eliminiše uzrok starenja kože preokretom autoimunih procesa.</span>
                    </p>
                    <p>
                        Naučnici već nekoliko godina testiraju različite prirodne sastojke, kombinuju i proveravaju
                        dejstvo. Kao rezultat toga, <span>uspeli su da izmisle novu inovativnu
                            super-formulu, jedinu u celom svetu.</span>
                    </p>
                </div>
                <div class="contrast-block-img"><img src="{{ asset('/') }}purplerelaxFiles/retinolcream/header-pack.png"
                                                     alt=""/></div>
            </div>
            <div class="contrast-btn">
                <button data-toggle="scroll" data-id="#form">Poručite sada</button>
            </div>
        </div>
    </div>
    <div class="feedback">
        <div class="feedback-name">
            <h2><span>Utisci žena</span> koje su već koristile RETINOL kremu</h2>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="feed-img"><img src="{{ asset('/') }}innodermFiles/innoderm4/slide-1.jpg" alt=""></div>
                <div class="feed-text">
                    <p><span>Prosto sam zadivljena!</span></p>
                    <p>Krema RETINOL je fenomenalna, prosto sam zadivljena!
                        Nikada nisam probala ovako nešto. Krema hidrira i zateže kožu. Ujutru sam se probula i nanela
                        je, pa mi je lice bilo sveže celi dan. Koristim je već dve nedelje
                        i bore oko očiju mi polako nestaju. Srećna sam kada se gledam u ogledalo, popravilo mi se i
                        raspoloženje! Hvala vam za ovu divnu kremu, preporučila sam je svim
                        svojim prijateljicama.</p>
                    <p><b>Suzana, 50 godina</b></p>
                </div>
            </div>
            <div class="item">
                <div class="feed-img"><img src="{{ asset('/') }}innodermFiles/innoderm4/slide-2.jpg" alt=""></div>
                <div class="feed-text">
                    <p><span>Nema više injekcija!</span></p>
                    <p>Volim kada kozmetika ne samo obećava već i radi! RETINOL KREMA vidno zaglađuje bore, eliminiše tamne
                        kolutove oko očiju i osvežava ten za 5 minuta!
                        Čudesna krema, ovo je čista magija! Koža je elastična, glatka i svilenkasta! Nanosim je na vrat
                        i dekolte, prezadovoljna sam! Čista petica! Mnogo vam hvala!</p>
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
                        filere. Svi su u šoku kada kažem da je to rezultat kreme!
                        Zaista je super, ja sam kupila 4 komada!</p>
                    <p><b>Natalija, 46 godina</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="take-block">
        <div class="take-block-name">
            <h2><span>Kako naneti</span> RETINOL kremu?</h2>
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
                        <h3>NANETI KREMU</h3>
                        <p>Nanesite RETINOL kremu po celom licu i dekolteu</p>
                    </div>
                </li>
                <li id="t3">
                    <div class="tbl-img"><img src="{{ asset('/') }}naturapharmFiles/snailcream/take3.png" alt=" "/>
                    </div>
                    <div class="tbl-info">
                        <h3>UŽIVAJTE U REZULTATU</h3>
                        <p>Koristite kremu 28 dana dok se koža potpuno ne obnovi</p>
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
                    <h3>NANETI KREMU</h3>
                    <p>Nanesite RETINOL kremu po celom licu i dekolteu</p>
                </div>
            </div>
            <div class="item">
                <div class="tbl-img"><img src="{{ asset('/') }}naturapharmFiles/snailcream/take3.png" alt=" "/></div>
                <div class="tbl-info">
                    <h3>UŽIVAJTE U REZULTATU</h3>
                    <p>Koristite kremu 28 dana dok se koža potpuno ne obnovi</p>
                </div>
            </div>
        </div>
    </div>
    <div class="order-block">
        <div class="order-block-name">
            <h2><span>Kako poručiti</span> RETINOL kremu?</h2>
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
            <div class="header-pack-body"><img src="{{ asset('/') }}purplerelaxFiles/retinolcream/header-pack.png"
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
                    <p><span>KREMA "RETINOL" ZA VEČNU MLADOST</span>
                        <br>
                        I DO 4 PUTA EFIKASNIJA OD OSTALIH SREDSTAVA ZA PODMLAĐIVANJE!</p>
                </div>
            </div>
            <div class="header-girl"><img src="{{ asset('/') }}naturapharmFiles/snailcream/girl.png" alt=""/></div>
            <div class="header-pack-mobile">
                <div class="header-pack-body"><img src="{{ asset('/') }}purplerelaxFiles/retinolcream/header-pack.png"
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
                    <li> Zateže <span>konture lica</span></li>
                    <li> Potpuno transformiše kožu <span>za 5 dana</span></li>
                </ul>
            </div>
            <div class="header-content">
                <form action="{{$orderRoute}}" method="post" class="orderformcdn landing__form" id="form">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <div class="header-content-info">
                        <div class="header-price" style="width: 100%;">
                            <div class="header-price-new">
                                <p class="price_holder" data-quantity="1">
                                    Cena na akciji za 1 komad:
                                    <span class="new_price_val price_land_s1">
                                  {{ $prices[1]['amount'] }}
                                  </span>
                                    <span class="price_land_curr">
                                  {{ $prices[1]['currency'] }}
                                  </span>
                                </p>
                                <p class="price_holder" data-quantity="2">
                                    Cena na akciji za 2 komada:
                                    <span class="new_price_val price_land_s1">
                                  {{ $prices[2]['amount'] }}
                                  </span>
                                    <span class="price_land_curr">
                                  {{ $prices[2]['currency'] }}
                                  </span>
                                </p>
                                <p class="price_holder" data-quantity="3">
                                    Cena na akciji za 3 komada:
                                    <span class="new_price_val price_land_s1">
                                  {{ $prices[3]['amount'] }}
                                  </span>
                                    <span class="price_land_curr">
                                  {{ $prices[3]['currency'] }}
                                  </span>
                                </p>
                            </div>
                            <div class="header-price-old">
                                <p class="price_holder" data-quantity="1">
                                    Redovna cena za 1 komad:
                                    <span class="price_land_s2">
                                  {{ $prices[1]['originalPrice'] }}
                                  </span>
                                    <span class="price_land_curr">
                                  {{ $prices[1]['currency'] }}
                                  </span>
                                </p>
                                <p class="price_holder" data-quantity="2">
                                    Redovna cena za 2 komada:
                                    <span class="price_land_s2">
                                  {{ $prices[2]['originalPrice'] }}
                                  </span>
                                    <span class="price_land_curr">
                                  {{ $prices[2]['currency'] }}
                                  </span>
                                </p>
                                <p class="price_holder" data-quantity="3">
                                    Redovna cena za 3 komada:
                                    <span class="price_land_s2">
                                  {{ $prices[3]['originalPrice'] }}
                                  </span>
                                    <span class="price_land_curr">
                                  {{ $prices[3]['currency'] }}
                                  </span>
                                </p>
                            </div>
                            <div class="header-price-new">
                                <h4 class="price_holder freeShippingHolder"> + BESPLATNA DOSTAVA</h4>
                            </div>
                        </div>
                    </div>
                    <div class="header-form">
                            <div class="hf-pole-input"><input type="text" name="name" placeholder="Ime i prezime" required>
                            </div>
                            <div class="hf-pole-input"><input type="tel" name="phone" placeholder="Telefon" required></div>
                            <div class="hf-pole-input">
                                <label for="quantity2">Izaberite količinu:</label>
                                <select name="quantity" id="quantity2" class="quantity" required>
                                    @foreach($prices as $singlePrice)
                                        <option value="{{ $singlePrice['quantity'] }}" data-free-shipping="{{ $singlePrice['is_free_shipping'] ? 'true' : 'false' }}"
                                                @if($singlePrice['is_default']) selected @endif
                                                @if(old('quantity') == $singlePrice['quantity']) selected @endif
                                                @if($singlePrice['is_free_shipping']) style="font-weight: bold;" @endif
                                        >
                                            &nbsp;{{ $singlePrice['quantity'] }} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="hf-pole-btn">
                                <button type="submit"><span>Poručite sada</span></button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="{{ asset('/') }}naturapharmFiles/snailcream/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}naturapharmFiles/snailcream/script.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('form').each(function() {
            let $form = $(this);
            let $quantitySelect = $form.find('.quantity');
            let $prices = $form.find('.price_holder');
            let $freeShipping = $('.freeShippingHolder');
            let selectedQuantity = $quantitySelect.val();
            let selectedOption = $quantitySelect.find(':selected');

            $prices.hide();
            $prices.filter('[data-quantity="' + selectedQuantity + '"]').show();

            selectedOption.data('free-shipping') ? $freeShipping.show() : $freeShipping.hide();

            $quantitySelect.on('change', function() {
                selectedQuantity = $(this).val();
                selectedOption = $(this).find(':selected');

                $prices.hide();
                $prices.filter('[data-quantity="' + selectedQuantity + '"]').show();

                selectedOption.data('free-shipping') ? $freeShipping.show() : $freeShipping.hide();
            });
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>