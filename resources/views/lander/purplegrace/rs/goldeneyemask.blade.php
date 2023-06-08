<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="{{ asset('/') }}purplerelaxFiles/24kgoldskin/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}purplegraceFiles/goldeneyemask/main.css" />
    <style>
        @font-face {
            font-family: "AvenirNextCyr";
            src: url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Light.html") format("woff2"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Light-2.html") format("woff"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Light-3.html") format("truetype");
            font-weight: 300;
            font-style: normal;
        }
        @font-face {
            font-family: "AvenirNextCyr";
            src: url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Regular.woff2") format("woff2"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Regular.html") format("woff"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Regular-2.html") format("truetype");
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: "AvenirNextCyr";
            src: url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Medium.woff2") format("woff2"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Medium.html") format("woff"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Medium-2.html") format("truetype");
            font-weight: 500;
            font-style: normal;
        }
        @font-face {
            font-family: "AvenirNextCyr";
            src: url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Bold.woff2") format("woff2"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Bold.html") format("woff"),
            url("{{ asset("/") }}fonts/subset-AvenirNextCyr-Bold-2.html") format("truetype");
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
<div class="wrapper">
    @include('components.display_errors')
    <!-- home -->
    <section class="home">
        <div class="container">
            <h1 class="home__title">GOLDEN EYE MASK</h1>
            <div class="home__subtitle">Specijalna formula za podmlađivanje lica</div>
{{--            <div class="home__subtitle" style="font-size: 20px;">В подарок HOREC - Роликовый аппликатор для кожи вокруг глаз</div>--}}
            <ul class="home__list">
                <li>Eliminiše bore oko očiju</li>
                <li>Povećava elastičnost i daje energiju</li>
                <li>Hidrira i štiti kožu</li>
            </ul>
            <div class="home__images">
                <img src="{{ asset('/') }}purplegraceFiles/goldeneyemask/product.png" alt="" />
                <div class="discount">Akcija! <span class="discount__item">40%</span> Popusta</div>
            </div>
            <div class="order">
                <div class="price">
                    <div class="price__old">
                        <span class="price__text">Redovna cena:</span>
                        <span class="price__old-item">
                            {{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}
                        </span>
                    </div>
                    <div class="price__new">
                        <span class="price__text">Cena na akciji:</span>
                        {{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}
                    </div>
                </div>
                <a href="#order_form" class="btn">Poručite sada</a>
                <div class="prod-count">
                    <img class="prod-count__item" src="{{ asset('/') }}purplegraceFiles/goldeneyemask/prod-count__icon.png" alt="" />
                    Količine su ograničene
                </div>
            </div>
        </div>
    </section>
    <!-- info-1 -->
    <section class="section info-1">
        <div class="container">
            <h2 class="title title__theme-white">Lako uklanja 3 vrste bora</h2>
            <ul class="column__x3 text-center">
                <li>
                    <div class="info-1__list-images"><img class="circle" src="{{ asset('/') }}purplegraceFiles/goldeneyemask/info__1--list_1.jpg" alt="" /></div>
                    Zateže kožu i usporava starenje
                </li>
                <li>
                    <div class="info-1__list-images"><img class="circle" src="{{ asset('/') }}purplegraceFiles/goldeneyemask/info__1--list_2.jpg" alt="" /></div>
                    Uklanja bore i zaglađuje kožu
                </li>
                <li>
                    <div class="info-1__list-images"><img class="circle" src="{{ asset('/') }}purplegraceFiles/goldeneyemask/info__1--list_3.jpg" alt="" /></div>
                    Peptidna krema-serum obnavlja i eksfolira kožu
                </li>
            </ul>
        </div>
    </section>
    <!-- info-2 -->
    <section class="section info-2">
        <div class="container">
            <div class="info-2__description">
                <h3 class="title"><span class="title__theme-primary">Maska premijum klase </span> GOLDEN EYE MASK</h3>
                <div class="row column--tb">
                    <div class="info-2__text">
                        <p>
                            Otkrijte blistavu tajnu besprekornog tena - naša zlatna maska za regiju ispod očiju!
                            Ova luksuzna maska obogaćena pravim zlatom i moćnim antioksidantima, ciljano se bori protiv tamnih krugova, oteklina i sitnih bora,
                            ostavljajući vašu kožu osvježenom i pomlađenom.
                        </p>
                        <p>
                            Ukoliko sanjate o svježem i blistavom pogledu bez obzira na vremenske uslove i napore svakodnevice,
                            naša zlatna maska je pravi izbor za vas. Pomladite i revitalizujte područje ispod očiju sa zlatnim dodirima luksuza.
                            Počnite da vidite rezultate već nakon prvog tretmana!
                        </p>
                    </div>
                    <div class="video_block">
                        <img src="{{ asset('/') }}purplegraceFiles/goldeneyemask/tovar.jpg" />
                    </div>
                </div>
            </div>
            <div class="info-2__images row column--tb">
                <div class="info-2__images-item"><img src="{{ asset('/') }}purplegraceFiles/goldeneyemask/info__2--images_1.jpg" alt="" /></div>
                <div class="info-2__images-item"><img src="{{ asset('/') }}purplegraceFiles/goldeneyemask/info__2--images_2.jpg" alt="" /></div>
                <div class="info-2__images-item"><img src="{{ asset('/') }}purplegraceFiles/goldeneyemask/info__2--images_3.jpg" alt="" /></div>
            </div>
            <a href="#order_form" class="btn">Poručite sada</a>
        </div>
    </section>
    <!-- info-3 -->
    <section class="section info-3">
        <div class="container">
            <h2 class="title-to">
                Golden Skin Mask je koncentrovani kremasti serum intenzivne formule i niske molekularne težine, što znači da deluje brzo i svrsishodno.
                Serum sprečava pojavu novih bora i bori se protiv postojećih.
            </h2>
            <div class="info-3__product">
                <img class="circle info-3__product-instruction" src="{{ asset('/') }}purplegraceFiles/goldeneyemask/info-3__instruction.jpg" alt="" />
                <img src="{{ asset('/') }}purplegraceFiles/goldeneyemask/info-3__product.png" alt="" />
                <ul class="info-3__list">
                    <li class="info-3__list-item--left"><img class="circle" src="{{ asset('/') }}purplegraceFiles/goldeneyemask/1.jpg" alt="" /></li>
                    <li class="info-3__list-item--right"><img class="circle" src="{{ asset('/') }}purplegraceFiles/goldeneyemask/2.jpg" alt="" /></li>
                    <li class="info-3__list-item--left"><img class="circle" src="{{ asset('/') }}purplegraceFiles/goldeneyemask/3.jpg" alt="" /></li>
                    <li class="info-3__list-item--right"><img class="circle" src="{{ asset('/') }}purplegraceFiles/goldeneyemask/4.jpg" alt="" /></li>
                </ul>
            </div>
            <a href="#order_form" class="btn">Poručite sada</a>
        </div>
    </section>
    <!-- info-4 -->
    <section class="section info-4">
        <div class="container">
            <h2 class="title"><span class="title__theme-primary">Prednosti </span> Golden Eye Mask proizvoda</h2>
            <ul class="column__x3 info-4__list text-center">
                <li>
                    <img src="{{ asset('/') }}purplegraceFiles/goldeneyemask/info-4__icon_1.png" alt="" />
                    <p>Naša zlatna maska za regiju ispod očiju pruža luksuzno spa iskustvo u udobnosti vašeg doma.
                        Ne morate trošiti vreme i novac na skupe tretmane u salonima - sada možete imati luksuzni tretman kad god vam to odgovara.</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}purplegraceFiles/goldeneyemask/info-4__icon_1.png" alt="" />
                    <p>Golden Eye Mask je dizajnirana da pruži vidljive rezultate već nakon prvog tretmana.
                        Redovnom upotrebom, možete postići dugotrajne rezultate i stalno održavati svjež i mladalački izgled.</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}purplegraceFiles/goldeneyemask/info-4__icon_1.png" alt="" />

                    <p>Bez obzira na tip vaše kože, naša zlatna maska je pogodna za sve.
                        Lagana formula je blaga i hidratantna, pogodna čak i za najosjetljiviju kožu.</p>
                </li>
            </ul>
        </div>
    </section>
    <!-- expert -->
    <section class="section expert">
        <div class="container">
            <h2 class="title title__theme-white">Instant efekat</h2>
            <div class="row column--mb">
                <div class="expert__text">
                    <p>
                        Lagani krem-serum sa vitaminima i hijaluronskom kiselinom prodire u duboke slojeve kože i pomaže da se zasiti vlagom,
                        čime se izglađuju fine bore i eliminišu nevidljivi nedostaci koje stvaraju godine.
                    </p>
                </div>
            </div>
            <h2 class="title title__theme-white">Sastav Golden Eye Mask proizvoda</h2>
            <div class="row column--mb">
                <div class="expert__text">
                    <p>
                        Osnova maske je hijaluronska kiselina, koja prodire duboko u kožu.
                        Sastav takođe uključuje vitamin E - snažan prirodni antioksidans koji vezuje polinezasićene masne kiseline u biološkim membranama
                        i bori se protiv starenja smanjujući proizvodnju hormona prostagrandina.
                    </p>
                </div>
            </div>
            <a href="#order_form" class="btn">Poručite sada</a>
        </div>
    </section>
    <section class="section recall">
        <div class="container">
            <h2 class="title">Utisci kupaca</h2>
            <div class="recall__card">
                <div class="recall__card-item">
                    <img src="{{ asset('/') }}purplegraceFiles/goldeneyemask/recall__1.jpg" alt="" />
                    <strong>Julija Jovanović</strong>
                    <p>
                        Ovo je mnogo bolje od bilo koje kreme za lice koju sam koristila.
                        Efekat je fenomenalan, ljudi ja ne mogu ovo da verujem da se desilo.
                        Imama sam bore, sada ih nema. Bez ijednog odlaska u kozmetički salon.
                        Lako se koristi, kutija je zgodna i može da se nosi svuda sa sobom.
                        Sve preporuke za ovaj proizvod!
                    </p>
                </div>
                <div class="recall__card-item">
                    <img src="{{ asset('/') }}purplegraceFiles/goldeneyemask/recall__2.jpg" alt="" />
                    <strong>Svetlana Tomašević</strong>
                    <p>
                        Ja nikada nisam kupila ovako efikasan kozmetički preparat, a nema šta nisam koristila.
                        Radila sam kao konobarica na moru dugo godina i bila sam izložena suncu, što je proizvelo mnogo bora na mom licu.
                        Pokušala sam sa nekim kozmetičkim tretmanima, ali mi je bilo skupo pa sam odustala.
                        Onda sam naletila na ovo čudo na internetu, uzela sam ga i gle čuda počelo je posle nedelju dana da daje rezultate.
                        Kupila sam još 4 kutije da imam u rezervi ako nestane u prodaji. Preporučujem!
                    </p>
                </div>
                <div class="recall__card-item">
                    <img src="{{ asset('/') }}purplegraceFiles/goldeneyemask/recall__3.jpg" alt="" />
                    <strong>Marija Mikić</strong>
                    <p>
                        Maska se lako nanosi, ima nežan miris i daje osećaj luksuza koji se retko nalazi kod proizvoda za kućnu upotrebu.
                        Posle uklanjanja maske, moja koža bude nevjerovatno sveža i hidrirana.
                        Tamni krugovi su znatno smanjeni, a podočnjaci se skoro u potpunosti povukli.
                        Ali ono što me je najviše impresioniralo su dugotrajni rezultati. Redovnom upotrebom, moja koža ispod očiju se dramatično popravila.
                        Izgledam odmornije, svježije i mlađe. Ova zlatna maska je postala nezaobilazan deo moje rutine za njegu kože.
                        Svakome bih preporučila da isproba ovaj proizvod - zaista je vredan svake pare!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- delivery -->
    <section class="section delivery">
        <div class="container">
            <h2 class="title"><span class="title__theme-primary">Kako napraviti porudžbinu</span></h2>
            <ul class="column__x4 delivery__list text-center">
                <li class="delivery__list-item">
                    <div class="circle delivery__list-images">
                        <img src="{{ asset('/') }}purplegraceFiles/goldeneyemask/delivery__1.png" alt="" />
                    </div>
                    <strong class="delivery__list-title">Korak 1</strong>
                    <p>Ostavite podatke za dostavu na našem sajtu</p>
                </li>
                <li class="delivery__list-item">
                    <div class="circle delivery__list-images">
                        <img src="{{ asset('/') }}purplegraceFiles/goldeneyemask/delivery__2.png" alt="" />
                    </div>
                    <strong class="delivery__list-title">Korak 2</strong>
                    <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
                </li>
                <li class="delivery__list-item">
                    <div class="circle delivery__list-images">
                        <img src="{{ asset('/') }}purplegraceFiles/goldeneyemask/delivery__3.png" alt="" />
                    </div>
                    <strong class="delivery__list-title">Korak 3</strong>
                    <p>Proizvod šaljemo brzom poštom u roku od 1-2 radna dana</p>
                </li>
                <li class="delivery__list-item">
                    <div class="circle delivery__list-images">
                        <img src="{{ asset('/') }}purplegraceFiles/goldeneyemask/delivery__4.png" alt="" />
                    </div>
                    <strong class="delivery__list-title">Korak 4</strong>
                    <p>Plaćate kuriru brze pošte po preuzimanju pošiljke</p>
                </li>
            </ul>
        </div>
    </section>
    <!-- home-footer -->
    <div class="home__discount">Ne propustite priliku da iskoristite <span class="home__discount-item">40% popusta</span></div>
    <section class="home">
        <div class="container">
            <h1 class="home__title">GOLDEN EYE MASKEN</h1>
            <div class="home__subtitle">Specijalna formula za podmlađivanje lica</div>
            <div class="home__images">
                <img src="{{ asset('/') }}purplegraceFiles/goldeneyemask/product.png" alt="" />
                <div class="discount">Akcija! <span class="discount__item">40%</span> Popusta</div>
            </div>
            <div class="order order--theme-white">
                <div class="price">
                    <div class="price__old">
                        <span class="price__text">Redovna cena:</span>
                        <span class="price__old-item">
                            {{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}
                        </span>
                    </div>
                    <div class="price__new">
                        <span class="price__text">Cena na akciji:</span>
                        {{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}
                    </div>
                </div>
                <form id="order_form" class="main-order-form m1-form" action="{{$orderRoute}}" method="post">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <input type="text" name="name" placeholder="Ime i prezime" required="" />
                    <input type="tel" name="phone" placeholder="Telefon" required="" />
                    <button class="btn" type="submit">Poručite sada</button>
                </form>
                <div class="prod-count">
                    <img class="prod-count__item" src="{{ asset('/') }}purplegraceFiles/goldeneyemask/prod-count__icon.png" alt="" />
                    Količine su ograničene
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
</div>

<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}purplegraceFiles/goldeneyemask/main.js"></script>
@include('components.pixel_footer')
</body>
</html>
