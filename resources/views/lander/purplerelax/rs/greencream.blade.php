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
            <div class="header-pack-body"><img src="{{ asset('/') }}purplerelaxFiles/greencream/header-pack.png"
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
                    <h2>Besprekorna koža <span>ZA SAMO 5 DANA</span></h2>
                </div>
                <div class="header-text">
                    <p><span>Zaplovite u svet savršenog tena!</span>
                        <br>
                        Najmoćniji sastojci prirode i nauke za veću efikasnost!
                    </p>
                </div>
            </div>
            <div class="header-girl"><img src="{{ asset('/') }}naturapharmFiles/snailcream/girl.png" alt=""/></div>
            <div class="header-pack-mobile">
                <div class="header-pack-body">
                    <img src="{{ asset('/') }}purplerelaxFiles/greencream/header-pack.png" alt=""/>
                </div>
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
                    <li>Ujednačava <br><span>ten kože</span></li>
                    <li>Posvetljuje i <span>revitalizuje</span></li>
                    <li><span>Hidrira</span> i hrani kožu</li>
                    <li>Smanjuje <br><span>znakove starenja</span></li>
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
                <h2><span>Šta čini ovu kremu</span> Specijalnom?</h2>
            </div>
            <div class="sbn-img">
                <img src="{{ asset('/') }}purplerelaxFiles/greencream/strong1.png" alt=""/>
                <p>Oslobodite se pigmentacije u potpunosti</p>
            </div>
            <div class="sbn-img">
                <img src="{{ asset('/') }}naturapharmFiles/snailcream/strong2.jpg" alt=""/>
                <p>Bez operacija i injekcija</p>
            </div>
        </div>
        <div class="strong-block-text">
            <img src="{{ asset('/') }}purplerelaxFiles/greencream/header-pack.png" alt=""/>
            <p>Jedinstvenu kombinaciju sastojaka i patentiran sastav koji je posebno dizajniran da posvetli kožu, smanji pigmentaciju i promoviše ujednačen ten. I ne samo to, već pruža i dodatne prednosti, kao što su hidratacija, ishrana i anti-age efekti.</p>
            <p>Verujemo u snagu naše kreme za posvetljivanje kože i želimo da i vi doživite njene neverovatne rezultate. Ukoliko niste 100% zadovoljni našim proizvodom, jednostavno nam pišite I vratićemo Vam novac. </p>
        </div>
    </div>
    <div class="pay-block">
        <div class="pay-block-name">
            <h2>
                <span>SKUPI KOZMETIČKI TRETMANI SU PROŠLOST</span>
                <p>Green Cream je efikasno rešenje za hiperpigmentaciju I neujednačen ten</p>
            </h2>
        </div>
        <div class="pay-block-info">
            <div class="pay-block-video"><img style="max-width: 100%"
                                              src="{{ asset('/') }}purplerelaxFiles/greencream/header-pack.png" alt=""/>
            </div>
            <div class="pay-block-text">
                <div class="pay-block__item1">
                    <div class="pay-block__img1"><img src="{{ asset('/') }}naturapharmFiles/snailcream/left.gif" alt="">
                    </div>
                    <div class="pay-block__text1">
                        <p>Regeneriše ćelije kože</p>
                        <span>Nežno deluje na izjednačavanje boje kože, omogućavajući vam da se ponosite svetlijim, zdravijim i privlačnijim izgledom.</span>
                    </div>
                </div>
                <div class="pay-block__item2">
                    <div class="pay-block__img2"><img src="{{ asset('/') }}naturapharmFiles/snailcream/right.gif"
                                                      alt=""></div>
                    <div class="pay-block__text2">
                        <p>Poboljšava izgled</p>
                        <span>Formula obogaćena antioksidansima i sastojcima cilja bore, čineći ih manje vidljivim</span>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <div class="contrast-block">
        <div class="contrast-block-body">
            <div class="contrast-block-name">
                <h2><span>GREEN CREAM</span> – rezultati koji oduzimaju dah</h2>
            </div>
            <div class="contrast-block-info">
                <div class="contrast-block-text">
                    <p>
                        Ne dozvolite da tamne fleke i hiperpigmentacija umanje vaše samopouzdanje!
                        Naša krema za posvetljivanje kože sadrži moćne sastojke koji ciljaju ove problematične zone,
                        <span>pružajući vam ujednačeniji i svetliji ten.</span>
                    </p>
                    <p>
                        Bogata hidratantnim sastojcima, ova krema <span>pruža dubinsku hidrataciju i ishranu kože,</span>
                        ostavljajući je mekom, glatkom i revitalizovanom. Unikatan spoj prirode I tehnologije čini čuda za vašu kožu.
                        <br>
                        Budite spremni da se divite vašoj koži koja <span>izgleda preporođeno!</span>
                    </p>
                </div>
                <div class="contrast-block-img"><img src="{{ asset('/') }}purplerelaxFiles/greencream/header-pack.png"
                                                     alt=""/></div>
            </div>
            <div class="contrast-btn">
                <button data-toggle="scroll" data-id="#form">Poručite sada</button>
            </div>
        </div>
    </div>
    <div class="feedback">
        <div class="feedback-name">
            <h2><span>Utisci žena</span> koje su već koristile GREEN CREAM</h2>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="feed-img"><img src="{{ asset('/') }}innodermFiles/innoderm4/slide-1.jpg" alt=""></div>
                <div class="feed-text">
                    <p><span>Prosto sam zadivljena!</span></p>
                    <p>Konačno sam pronašla kremu koja zaista deluje na moje tamne fleke i neujednačen ten! Posle samo nekoliko nedelja korišćenja ove kreme za posvetljivanje, moje lice izgleda svetlije i svežije. Hiperpigmentacija se znatno smanjila. Preporučujem ovu kremu svima koji imaju slične probleme!</p>
                    <p><b>Suzana, 50 godina</b></p>
                </div>
            </div>
            <div class="item">
                <div class="feed-img"><img src="{{ asset('/') }}innodermFiles/innoderm4/slide-2.jpg" alt=""></div>
                <div class="feed-text">
                    <p><span>Neverovatna brzina delovanja!</span></p>
                    <p>Nisam mogla da verujem koliko brzo ova krema za posvetljivanje daje rezultate! Posle samo nekoliko nedelja korišćenja, moja koža je znatno svetlija i ujednačenija, a fine linije i bore su se smanjile. Veoma sam zadovoljna ovim proizvodom i toplo ga preporučujem svima koji žele da poboljšaju izgled svoje kože.</p>
                    <p><b>Katarina, 52 godine</b></p>
                </div>
            </div>
            <div class="item">
                <div class="feed-img"><img src="{{ asset('/') }}innodermFiles/innoderm4/slide-3.jpg" alt=""></div>
                <div class="feed-text">
                    <p><span>Najbolje što sam ikada probala!</span></p>
                    <p>Ova krema za posvetljivanje mi je pomogla da povratim samopouzdanje! Lice mi je bilo puno tamnih fleka i ožiljaka od akni, ali ova krema je čudo! Nakon mesec dana korišćenja, moje lice izgleda mnogo bolje, a tamne fleke su se znatno smanjile. Pored toga, krema je veoma hidratantna i moja koža se oseća mekano i glatko.</p>
                    <p><b>Natalija, 46 godina</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="take-block">
        <div class="take-block-name">
            <h2><span>Kako naneti</span> GREEN CREAM?</h2>
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
                        <p>Nanesite GREEN CREAM po celom licu</p>
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
                    <p>Nanesite GREEN CREAM po celom licu</p>
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
            <h2><span>Kako poručiti</span> GREEN CREAM?</h2>
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
                        <p>Kontaktiraćemo vas da potvrdimo vašu porudžbinu</p>
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
                        <h3>KORIŠĆENJE</h3>
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
            <div class="header-pack-body">
                <img src="{{ asset('/') }}purplerelaxFiles/greencream/header-pack.png" alt=""/>
            </div>
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
                    <h2>Besprekorna koža <span>ZA SAMO 5 DANA</span></h2>
                </div>
                <div class="header-text">
                    <p><span>Zaplovite u svet savršenog tena!</span>
                        <br>
                        Najmoćniji sastojci prirode i nauke za veću efikasnost!
                    </p>
                </div>
            </div>
            <div class="header-girl"><img src="{{ asset('/') }}naturapharmFiles/snailcream/girl.png" alt=""/></div>
            <div class="header-pack-mobile">
                <div class="header-pack-body">
                    <img src="{{ asset('/') }}purplerelaxFiles/greencream/header-pack.png" alt=""/>
                </div>
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
                    <li>Ujednačava <br><span>ten kože</span></li>
                    <li>Posvetljuje i <span>revitalizuje</span></li>
                    <li><span>Hidrira</span> i hrani kožu</li>
                    <li>Smanjuje <br><span>znakove starenja</span></li>
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
