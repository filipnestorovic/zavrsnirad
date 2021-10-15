<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
    <link href="{{ asset('/') }}natureteaFiles/diabetea/order_me.min.css" media="all" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,700i&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Itim&display=swap" rel="stylesheet">
    <link href="{{ asset('/') }}natureteaFiles/diabetea/slick.css" rel="stylesheet">
    <link href="{{ asset('/') }}natureteaFiles/diabetea/animate.css" rel="stylesheet">
    <link href="{{ asset('/') }}natureteaFiles/diabetea/style.css" rel="stylesheet">
    <link href="{{ asset('/') }}natureteaFiles/diabetea/media.css" rel="stylesheet">
    <link href="{{ asset('/') }}natureteaFiles/shared_files/logo.png" rel="icon" type="image/png">
    <style>
        .post-title {
            text-align: center;
            color: #d51004;
            font-size: 36px;
            font-weight: 700;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<div class="s__main">
    <div class="overflow">
        <header class="header">
            <div class="wrapper">
                <div class="logo"> DiabeTea </div>
                <div class="logo__text wow slideInLeft" data-wow-duration="2s"></div>
            </div>
        </header>
        <section class="sec1">
            <div class="wrapper">
                <h4 class="main-title title"> DiabeTea - MAGIJA ZA STABILIZOVANJE ŠEĆERA U KRVI </h4>
                <p class="post-title">Specijalni popust od 40%</p>
                <div class="sec1__content">
                    <div class="sec1__list sec1__cell">
                        <ul>
                            <li class="sec1__item"> Povećana proizvodnja insulina je uzrok dijabetesa </li>
                            <li class="sec1__item"> Štiti telo od visokog nivoa glukoze </li>
                            <li class="sec1__item"> Obnavlja jetru i pankreas </li>
                            <li class="sec1__item"> Normalizuje metabolizam ugljenih hidrata </li>
                            <li class="sec1__item"> Stabilizuje nivo šećera u krvi </li>
                            <li class="sec1__item"> Normalizuje sve metaboličke procese </li>
                        </ul>
                    </div>
                    <div class="sec1__prod sec1__cell">
                        <img alt class="sec1__prod-tube" src="{{ asset('/') }}natureteaFiles/diabetea/prod.png">
                    </div>
                    <div class="sec1__form form sec1__cell">
                        <div class="price"> Prvobitna cena <span class="old"><span class="js_old_price">{{ $prices[1]['originalPrice'] }}</span> RSD</span><br> Sada samo za <span class="price__new"><span class="js_new_price"> {{ $prices[1]['amount'] }} </span> RSD </span></div>
                        <p class="form__text" style="text-align: center">Unesite podatke za dostavu</p>
                        <form action="{{$orderRoute}}" method="post">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Ime i prezime" type="text">
                            <input class="only_number" name="phone" placeholder="Broj telefona" type="tel">
                            <input name="shipping_address" placeholder="Adresa" type="text">
                            <input name="shipping_city" placeholder="Grad" type="text">
                            <select class="form-content__element form-content__select change-package-selector form_control" id="product" name="quantity">
                                @foreach($prices as $singlePrice)
                                    <option value="{{ $singlePrice['quantity'] }}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                            @if($singlePrice['is_default']) selected @endif
                                    >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} RSD)
                                        @if($singlePrice['is_free_shipping']) * @endif
                                    </option>
                                @endforeach
                            </select>
                            <div class="freeShippingDiv">* BESPLATNA DOSTAVA</div>
                            <button class="btn button__text js_submit"> NARUČI ODMAH </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec2">
            <div class="wrapper">
                <div class="sec2__title"> Prema statistikama, u svetu postoji 371 milion ljudi sa dijabetesom.</div>
                <p></p>
                <ul class="sec2__list">
                    <li class="sec2__item wow slideInLeft" data-wow-duration="2s">
                        <div class="sec2__item-img"><img alt src="{{ asset('/') }}natureteaFiles/diabetea/icon-baby.png"></div>
                        <ul>
                            <li> Ispitanici uzrasta od 30 godina i više </li>
                            <li> Nasleđen od roditelja [30-60%] </li>
                        </ul>
                    </li>
                    <li class="sec2__item wow slideInLeft" data-wow-delay=".5s" data-wow-duration="2s">
                        <div class="sec2__item-img"><img alt src="{{ asset('/') }}natureteaFiles/diabetea/icon-brain.png"></div>
                        <ul>
                            <li> Pod stalnim stresom </li>
                            <li> Sa prekomernom težinom </li>
                        </ul>
                    </li>
                    <li class="sec2__item wow slideInLeft" data-wow-delay="1s" data-wow-duration="2s">
                        <div class="sec2__item-img"><img alt src="{{ asset('/') }}natureteaFiles/diabetea/icon-med.png"></div>
                        <ul>
                            <li> Komplikacije zbog bolesti pankreasa </li>
                            <li> Zbog bakterijske infekcije </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
        <section class="sec3">
            <div class="wrapper">
                <div class="sec3__title title"> DIJABETES NIJE TAKO STRAŠAN... ALI JESU NJEGOVE KOMPLIKACIJE </div>
                <ul class="sec3__list">
                    <li class="sec3__item wow slideInLeft" data-wow-duration="2s">
                        <div class="sec3__img"><img alt src="{{ asset('/') }}natureteaFiles/diabetea/sec3-1.jpg"></div>
                        <div class="sec3__text">
                            <div class="sec3__caption"> KARDIOVASKULARNE BOLESTI </div>
                            <p> KARDIOVASKULARNE BOLESTI </p>
                        </div>
                    </li>
                    <li class="sec3__item wow slideInLeft" data-wow-delay=".5s" data-wow-duration="2s">
                        <div class="sec3__img"><img alt src="{{ asset('/') }}natureteaFiles/diabetea/sec3-2.jpg"></div>
                        <div class="sec3__text">
                            <div class="sec3__caption"> UTIČE NA NERVNI SISTEM </div>
                            <p> UTRNULOST UDOVA, PARESTEZIJA... </p>
                        </div>
                    </li>
                    <li class="sec3__item wow slideInLeft" data-wow-delay="1s" data-wow-duration="2s">
                        <div class="sec3__img"><img alt src="{{ asset('/') }}natureteaFiles/diabetea/sec3-3.jpg"></div>
                        <div class="sec3__text">
                            <div class="sec3__caption"> INFEKTIVNE BOLESTI </div>
                            <p> URINARNE INFEKCIJE, TUBERKULOZA, INFEKCIJE STOPALA, KOŽE, MEKOG TKIVA... </p>
                        </div>
                    </li>
                    <li class="sec3__item wow slideInLeft" data-wow-delay="1.5s" data-wow-duration="2s">
                        <div class="sec3__img"><img alt src="{{ asset('/') }}natureteaFiles/diabetea/sec3-4.jpg"></div>
                        <div class="sec3__text">
                            <div class="sec3__caption"> BOLESTI OČIJU </div>
                            <p> UZROK OPASNIH SIMPTOMA ZA OČNE BOLESTI KAO ŠTO JE KATARAKTA, DOVODI ČAK I DO SLEPOĆE. </p>
                        </div>
                    </li>
                    <li class="sec3__item wow slideInLeft" data-wow-delay="2s" data-wow-duration="2s">
                        <div class="sec3__img"><img alt src="{{ asset('/') }}natureteaFiles/diabetea/sec3-5.jpg"></div>
                        <div class="sec3__text">
                            <div class="sec3__caption"> BOLESTI BUBREGA... </div>
                            <p><b> UTIČE NA BUBREGE: </b> LAKO PODLOŽNI BOLESTIMA BUBREGA KAO ŠTO JE OTKAZIVANJE BUBREGA... </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="green-line">
            <div class="wrapper">
                <p>DIABETEA JE NAJBOLJI NAČIN ZA PREVENCIJU I KONTROLU NIVOA ŠEĆERA U KRVI</p>
            </div>
        </section>
        <section class="sec5">
            <div class="wrapper">
                <p>Analizom nadležne Laboratorije u Republici Srbiji potvrđena je bezbednost i efikasnost DiabeTea preparata. Proizvod je 100% prirodan, bez nuspojava i bez ograničenja u korišćenju. Mogu ga koristiti sve starosne grupe. </p>
            </div>
        </section>
        <section class="sec7"> Prejednostavno! Uz 2 šolje dnevno, zdravu ishranu i vežbanje kontrolišite nivo šećera u krvi. </section>
        <section class="sec8">
            <div class="wrapper">
                <div class="sec8__title title"> 2 šolje dnevno / 1 DAN I NEMA VIŠE BRIGE ZBOG DIJABETESA </div>
                <ul class="sec8__list sec8__list--left">
                    <li class="sec8__item wow slideInLeft" data-wow-duration="2s">
                        <div class="sec8__count"> 1 </div>
                        <div class="sec8__text"> Povećana proizvodnja insulina u pankreasu. </div>
                    </li>
                    <li class="sec8__item wow slideInLeft" data-wow-delay=".5s" data-wow-duration="2s">
                        <div class="sec8__count"> 2 </div>
                        <div class="sec8__text"> Povećana aktivnost insulina. </div>
                    </li>
                </ul>
                <ul class="sec8__list sec8__list--right">
                    <li class="sec8__item wow slideInLeft" data-wow-delay="1s" data-wow-duration="2s">
                        <div class="sec8__count"> 3 </div>
                        <div class="sec8__text"> Smanjena apsorpcija glukoze u crevima. </div>
                    </li>
                    <li class="sec8__item wow slideInLeft" data-wow-delay="1.5s" data-wow-duration="2s">
                        <div class="sec8__count"> 4 </div>
                        <div class="sec8__text"> Smanjena masnoća u krvi, snižen krvni pritisak. </div>
                    </li>
                    <li class="sec8__item wow slideInLeft" data-wow-delay="2s" data-wow-duration="2s">
                        <div class="sec8__count"> 5 </div>
                        <div class="sec8__text"> Stabilizuje sadržaj šećera u krvi. </div>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </section>
        <section class="sec9">
            <div class="wrapper">
                <div class="sec9__title title"> POBOLJŠAVA ZDRAVLJE </div>
                <ul class="sec9__list">
                    <li class="sec9__item"> UKLANJA TOKSINE I UMANJUJE ENZIME IZ JETRE </li>
                    <li class="sec9__item"> UMANJUJE UPALU, SPREČAVA KOMPLIKACIJE </li>
                    <li class="sec9__item"> JAČA KRVNE SUDOVE </li>
                    <li class="sec9__item"> HORMONSKA UJEDNAČENOST </li>
                    <li class="sec9__item"> JAČA IMUNI SISTEM </li>
                </ul>
            </div>
        </section>
        <section class="sec10">
            <div class="wrapper">
                <div class="sec10__title title"> DiabeTea - KAKO DOVESTI NIVO ŠEĆERA POD KONTROLU </div>
                <button class="btn btn--bigger pre_toform"> NARUČI ODMAH </button>
                <div class="sec10__price"> SAMO ZA <b> {{ $prices[1]['amount'] }} </b> RSD </div>
            </div>
        </section>
        <section class="sec11">
            <div class="wrapper">
                <div class="sec11__content">
                    <div class="sec11__left">
                        <img alt src="{{ asset('/') }}natureteaFiles/diabetea/prod.png">
                        <div class="sec11__title"> ZLATNI SASTOJCI JAČAJU ZDRAVLJE UPOTREBOM ČAJA <b> DiabeTea </b></div>
                    </div>
                    <div class="sec11__right">
                        <ul class="sec11__list">
                            <li class="sec11__item wow slideInLeft" data-wow-duration="2s">
                                <div class="sec11__item-img"><img alt src="{{ asset('/') }}natureteaFiles/diabetea/sec11-1.png"></div>
                                <div class="sec11__item-text"> Betula folium: Snižava nivo šećera u krvi, sprečava rizik od razvoja komplikacija bolesti bubrega. </div>
                            </li>
                            <li class="sec11__item wow slideInLeft" data-wow-delay=".5s" data-wow-duration="2s">
                                <div class="sec11__item-img"><img alt src="{{ asset('/') }}natureteaFiles/diabetea/sec11-2.png"></div>
                                <div class="sec11__item-text"> Juniperi fructus: Stabilizuje rad bubrega, podstiče izmokravanje, uklanja otok. </div>
                            </li>
                            <li class="sec11__item wow slideInLeft" data-wow-delay="1s" data-wow-duration="2s">
                                <div class="sec11__item-img"><img alt src="{{ asset('/') }}natureteaFiles/diabetea/sec11-3.png"></div>
                                <div class="sec11__item-text"> Myrtilli folium: Izvor neomirtilina koji stabilizuje nivo šećera u krvi. </div>
                            </li>
                            <li class="sec11__item wow slideInLeft" data-wow-delay="1.5s" data-wow-duration="2s">
                                <div class="sec11__item-img"><img alt src="{{ asset('/') }}natureteaFiles/diabetea/sec11-4.png"></div>
                                <div class="sec11__item-text"> Phaseoli fructus sine semen: Podržava imunitet, uklanja osećaj žeđi, uklanja razdražljivost. </div>
                            </li>
                            <li class="sec11__item wow slideInLeft" data-wow-delay="2s" data-wow-duration="2s">
                                <div class="sec11__item-img"><img alt src="{{ asset('/') }}natureteaFiles/diabetea/sec11-5.png"></div>
                                <div class="sec11__item-text"> Petroselin radix: Snižava sadržaj glukoze u krvi, bezbedna prirodna zamena za šećer za dijabetičare. </div>
                            </li>
                        </ul>
                        <li class="sec11__item wow slideInLeft" data-wow-delay="2.5s" data-wow-duration="2s">
                            <div class="sec11__item-img"><img alt src="{{ asset('/') }}natureteaFiles/diabetea/sec11-6.png"></div>
                            <div class="sec11__item-text"> Mali fructus: Normalizuje zdravlje, jača imunitet, izbacuje suvišnu tečnost iz organizma. </div>
                        </li>
                        <li class="sec11__item wow slideInLeft" data-wow-delay="3s" data-wow-duration="2s">
                            <div class="sec11__item-img"><img alt src="{{ asset('/') }}natureteaFiles/diabetea/sec11-7.png"></div>
                            <div class="sec11__item-text"> Cinnomami cortex: Normalizuje razmenu ugljenih hidrata, poboljšava rad jetre i pankreasa. </div>
                        </li>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec12">
            <div class="wrapper">
                <div class="sec12__title title"> Pored toga, gore navedeni sastojci takođe pomažu: </div>
                <ul class="sec12__list">
                    <li class="sec12__item wow fadeInDown" data-wow-duration="2s"> Ograničavanju apsorpcije glukoze u krvi. </li>
                    <li class="sec12__item wow fadeInDown" data-wow-delay=".5s" data-wow-duration="2s"> Smanjenju nivoa masti u krvi, ublažavaju visok krvni pritisak. </li>
                    <li class="sec12__item wow fadeInDown" data-wow-delay="1s" data-wow-duration="2s"> Povećavanju osetljivosti ćelija na insulin </li>
                    <li class="sec12__item wow fadeInDown" data-wow-delay="1.5s" data-wow-duration="2s"> Povećavanju sposobnosti ćelija da koriste glukozu </li>
                    <li class="sec12__item wow fadeInDown" data-wow-delay="2s" data-wow-duration="2s"> Stabiliziranju sadržaja šećera u krvi </li>
                    <li class="sec12__item wow fadeInDown" data-wow-delay="2.5s" data-wow-duration="2s"> Smanjenju oksidativnog stresa, smanjuju upalu, bore se protiv fibroze bubrega </li>
                    <li class="sec12__item wow fadeInDown" data-wow-delay="3s" data-wow-duration="2s"> Regulisanju imunog sistema, sprečavaju komplikacije kod dijabetesa </li>
                    <li class="sec12__item wow fadeInDown" data-wow-delay="3.5s" data-wow-duration="2s"> Smanjenju nivoa glukoze u krvi </li>
                </ul>
            </div>
        </section>
        <section class="sec13">
            <div class="wrapper">
                <div class="sec13__left">
                    <div class="sec13__doc"></div>
                </div>
                <div class="sec13__right">
                    <div class="sec13__title title"> MIŠLJENJA STRUKE O čaju DiabeTea </div>
                    <p> "Najdostupniji lekovi protiv dijabetesa samo uklanjaju simptome, a ne njegov uzrok. DiabeTea obezbeđuje izvrstan, održiv efekat za kontrolu dijabetesa. Nakon mesec dana korišćenja, nivo šećera u krvi se normalizuje, sve funkcije tela se obnavljaju, a poremećaji metabolizma se potpuno rešavaju. </p>
                    <p> Rezultati upotrebljavanja čaja DiabeTea su potvrđeni od strane korisnika, potpuno bezbedni i bez nuspojava. </p>
                    <p> Nedavno predstavljen DiabeTea je dobio veoma dobre recenzije o njegovoj efikasnosti." </p>
                    <p></p>
                </div>
            </div>
        </section>
        <section class="sec14">
            <div class="wrapper">
                <div class="sec14__title title"> ŠTA KORISNICI KAŽU O ČAJU DiabeTea? </div>
                <ul class="sec14__list">
                    <li class="sec14__item wow fadeInLeft" data-wow-duration="2s">
                        <div class="sec14__item-container">
                            <div class="sec14__item-ava"><img alt src="{{ asset('/') }}natureteaFiles/diabetea/ava1.jpg"></div>
                            <div class="sec14__name"> Miroslav (49 godina) </div>
                            <div class="clear"></div>
                            <div class="sec14__text">
                                <p> "Supruga i ja imamo 49 godina i imali smo dijabetes tipa 2 u trajanju od 5 godina. Koristili smo razne lekove, ali bez rezultata. Mnogo puta smo osetili frustraciju i depresiju. Srećom, otkrili smo DiabeTea i odlučili da probamo. Supruga je strogo pratila uputstva. Ona je trenutno na dijeti i održava redovno stanje. </p>
                                <p> Rezultat: odmah nakon večere, nivo šećera spustio se na 6!" </p>
                            </div>
                        </div>
                    </li>
                    <li class="sec14__item wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="2s">
                        <div class="sec14__item-container">
                            <div class="sec14__item-ava"><img alt src="{{ asset('/') }}natureteaFiles/diabetea/ava2.jpg"></div>
                            <div class="sec14__name"> Radmila (55 godina) </div>
                            <div class="clear"></div>
                            <div class="sec14__text">
                                <p> "Zahvalna sam za ovaj proizvod. U prošlosti sam imala problema sa uzimanjem lekova, a ponekad sam preskakala da ih uzimam. Ali nakon što sam probala DiabeTea, umor i pospanost su nestali, nivo šećera u krvi se vratio u normalu, čak sam zaboravila da ga merim. Osećam se snažnije i ponovo sam ona stara." </p>
                            </div>
                        </div>
                    </li>
                    <li class="sec14__item wow fadeInLeft" data-wow-delay="1s" data-wow-duration="2s">
                        <div class="sec14__item-container">
                            <div class="sec14__item-ava"><img alt src="{{ asset('/') }}natureteaFiles/diabetea/ava3.jpg"></div>
                            <div class="sec14__name"> Radojka, 63 godine </div>
                            <div class="clear"></div>
                            <div class="sec14__text">
                                <p> "Dugo godina sam imala dijabetes tipa 2. Šećer u krvi je stalno skakao. Bila sam jako zabrinuta i držala sam dijetu, išla redovno kod doktora, ali ništa se nije menjalo. Na primer: u jednom danu merenja su varirala od 3,2 do 11. Ali sestra od tetke mi je rekla za DiabeTea i preporučila mi da ga uzimam dvaput dnevno. Da znate da sam brzo osetila promene: nivo šećera u krvi je počeo da se kreće u omeru od 5-8, a telo mi je funkcionisalo normalno. Ovaj proizvod mi je vratio radost života." </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="sec15">
            <div class="wrapper">
                <div class="sec15__title title">NARUČITE JOŠ DANAS</div>
                <p class="sec15__price-text"> "OBEZBEDITE ZLATNI PROIZVOD ZA KONTROLU ŠEĆERA U KRVI" </p>
                <span> SAMO ZA {{ $prices[1]['amount'] }} RSD </span>
                <div class="sec15__container">
                    <div class="sec15__prod wow fadeInDown" data-wow-duration="2s">
                        <img alt src="{{ asset('/') }}natureteaFiles/diabetea/prod.png">
                    </div>
                    <div class="sec15__form form">
                        <div class="price"> Prvobitna cena <span class="old"><span class="js_old_price"> {{ $prices[1]['originalPrice'] }} </span> RSD </span><br> samo za <span class="price__new"><span class="js_new_price"> {{ $prices[1]['amount'] }} </span> RSD </span></div>
                        <p class="form__text" style="text-align: center">Unesite podatke za dostavu!</p>
                        <form action="{{$orderRoute}}" id="order_form" method="post">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Ime i prezime" type="text" required="">
                            <input class="only_number" name="phone" placeholder="Broj telefona" type="tel" required="">
                            <input name="shipping_address" placeholder="Adresa" type="text">
                            <input name="shipping_city" placeholder="Grad" type="text">
                            <select class="form-content__element form-content__select change-package-selector form_control" id="product" name="quantity">
                                @foreach($prices as $singlePrice)
                                    <option value="{{ $singlePrice['quantity'] }}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                            @if($singlePrice['is_default']) selected @endif
                                    >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} RSD)
                                        @if($singlePrice['is_free_shipping']) * @endif
                                    </option>
                                @endforeach
                            </select>
                            <div class="freeShippingDiv">* BESPLATNA DOSTAVA</div>
                            <button class="btn button__text js_submit"> NARUČI ODMAH </button>
                            <div class></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
<style>
    .freeShippingDiv {
        color: rgb(174, 8, 8);
        text-align: center;
        margin-bottom: 10px;
        display: none;
        font-weight: bold;
    }
</style>
<script>
    $('.change-package-selector').click(function () {
        let fsh = $('option:selected', this).attr('placeholder');
        if(fsh == 1) {
            $(this).next('.freeShippingDiv').slideDown();
        } else {
            $(this).next('.freeShippingDiv').slideUp();
        }
    })
</script>
<script src="{{ asset('/') }}natureteaFiles/diabetea/slick.min.js"></script>
<script src="{{ asset('/') }}natureteaFiles/diabetea/wow.js"></script>
<script src="{{ asset('/') }}natureteaFiles/diabetea/common.js"></script>
@include('components.pixel_footer')
</body>
</html>