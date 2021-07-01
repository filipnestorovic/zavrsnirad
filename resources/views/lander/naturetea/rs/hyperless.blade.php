<!DOCTYPE html>
<html class="no-js">
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content name="description">
    <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&subset=cyrillic,greek,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('/') }}natureteaFiles/hyperless/materialize.css" rel="stylesheet">
    <link href="{{ asset('/') }}natureteaFiles/hyperless/animate.css" rel="stylesheet">
    <link href="{{ asset('/') }}natureteaFiles/hyperless/css.css" rel="stylesheet">
    <link href="{{ asset('/') }}natureteaFiles/shared_files/logo.png" rel="icon" type="image/png">
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
</head>
<body>
@include('components.display_errors')
<div class="s__main">
    <main>
        {{--<header>--}}
            {{--<div class="container">--}}
                {{--<div class="row m-0">--}}
                    {{--<div class="col xl12 l12 m12 s12">--}}
                        {{--<div class="headerContent">--}}
                            {{--<div class="logoBox img_box" style="width: 80px;"><img src="{{ asset('/') }}natureteaFiles/shared_files/logo_invert.png"></div>--}}
                            {{--<div class="headerContent-items">--}}
                                {{--<div class="headerItem">--}}
                                    {{--<div class="headerItem-icon"><img src="{{ asset('/') }}natureteaFiles/hyperless/headerIcon_01.png"></div>--}}
                                    {{--<div class="headerItem-text"> 100% organski </div>--}}
                                {{--</div>--}}
                                {{--<div class="headerItem">--}}
                                    {{--<div class="headerItem-icon"><img src="{{ asset('/') }}natureteaFiles/hyperless/headerIcon_02.png"></div>--}}
                                    {{--<div class="headerItem-text"> 3567 ljudi je naručilo danas </div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="headerButton" data-goto=".block_12"> Zakaži poziv </div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</header>--}}
        <section class="block_01">
            <div class="container">
                <div class="row">
                    <div class="col xl10 offset-xl1 l12 m12 s12">
                        <div class="block_01-title"> Hyperless © - normalan pritisak već od prve upotrebe. Trajni rezultat. </div>
                        <div class="block_01-subtitle"> Utiče na uzrok bolesti smanjujući rizik od moždanog udara i infarkta! </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col xl4 l4 m12 s12">
                        <div class="plusesItem dflex">
                            <div class="img_box plusesItem-icon"><img src="{{ asset('/') }}natureteaFiles/hyperless/plusIco_01.png"></div>
                            <div class="plusesItem-text"> Normalizuje krvni pritisak za 6 sati zbog bioflavonoida </div>
                        </div>
                        <div class="plusesItem dflex">
                            <div class="img_box plusesItem-icon"><img src="{{ asset('/') }}natureteaFiles/hyperless/plusIco_02.png"></div>
                            <div class="plusesItem-text"> Obnavlja tonus i elastičnost krvnih sudova za 1 tretman </div>
                        </div>
                        <div class="plusesItem dflex">
                            <div class="img_box plusesItem-icon"><img src="{{ asset('/') }}natureteaFiles/hyperless/plusIco_03.png"></div>
                            <div class="plusesItem-text"> Bezbedan za svaku dob, efikasan u 1., 2. i 3. fazi hipertenzije </div>
                        </div>
                    </div>
                    <div class="col xl4 l4 m6 s12">
                        <div class="img_box productBox">
                            <img src="{{ asset('/') }}natureteaFiles/hyperless/product.png">
                            <div class="obj saleBox"> Rasprodaja <span> -40% </span></div>
                        </div>
                    </div>
                    <div class="col xl4 l4 m6 s12">
                        <div class="formBox">
                            <div class="formBox-content">
                                <div class="dflex priceBox">
                                    <div class="priceBox-item">
                                        <div class="oldPrice">
                                            <div class="priceBox-title"> Puna cena: </div>
                                            <div class="priceBox-info"><font class="js_old_price"> {{ $prices[1]['originalPrice'] }} </font> RSD </div>
                                        </div>
                                    </div>
                                    <div class="priceBox-item">
                                        <div class="newPrice">
                                            <div class="priceBox-title"> Snižena cena: </div>
                                            <div class="priceBox-info"><font class="js_new_price"> {{ $prices[1]['amount'] }} </font> RSD </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="orderForm">
                                    <form action="{{$orderRoute}}" id="order_form" method="post">
                                        {{ csrf_field() }}
                                        @include('lander.naturapharm.components.form_hidden_fields')
                                        <div class="input-field"><input id="name" name="name" placeholder="Unesite vaše ime" type="text"><label for="name"></label></div>
                                        <div class="input-field"><input class="only_number" id="phone" name="phone" placeholder="Unesite vaš broj telefona" type="text"><label for="phone"></label></div>
                                        <select class="browser-default customSelect change-package-selector" name="quantity">
                                            @foreach($prices as $singlePrice)
                                                <option value="{{ $singlePrice['quantity'] }}"
                                                        @if($singlePrice['is_default']) selected @endif
                                                >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} RSD)</option>
                                            @endforeach
                                        </select>
                                        <div class="buttonBox"><button class="waves-effect btn red button__text customBtn js_submit" type="submit"> Naruči </button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="block_02">
            <div class="container">
                <div class="obj objBox1"><img class="lazy" src="{{ asset('/') }}natureteaFiles/hyperless/men.png"></div>
                <div class="row m-0">
                    <div class="col xl8 l8 m12 s12">
                        <div class="block_02-title"><span></span> Hipertenzija se javlja sa nekim od sledećih simptoma </div>
                        <div class="dflex symptomBox">
                            <div class="dflex symptomBox-item">
                                <div class="symptomItem-icon"><img src="{{ asset('/') }}natureteaFiles/hyperless/attantion.png"></div>
                                <div class="symptomItem-text"> Glavobolja </div>
                            </div>
                            <div class="dflex symptomBox-item">
                                <div class="symptomItem-icon"><img src="{{ asset('/') }}natureteaFiles/hyperless/attantion.png"></div>
                                <div class="symptomItem-text"> Pojačan srčani ritam </div>
                            </div>
                            <div class="dflex symptomBox-item">
                                <div class="symptomItem-icon"><img src="{{ asset('/') }}natureteaFiles/hyperless/attantion.png"></div>
                                <div class="symptomItem-text"> Crne tačke pred očima (koje lebde) </div>
                            </div>
                            <div class="dflex symptomBox-item">
                                <div class="symptomItem-icon"><img src="{{ asset('/') }}natureteaFiles/hyperless/attantion.png"></div>
                                <div class="symptomItem-text"> Hronični umor </div>
                            </div>
                            <div class="dflex symptomBox-item">
                                <div class="symptomItem-icon"><img src="{{ asset('/') }}natureteaFiles/hyperless/attantion.png"></div>
                                <div class="symptomItem-text"> Apatija, iritacija, pospanost </div>
                            </div>
                            <div class="dflex symptomBox-item">
                                <div class="symptomItem-icon"><img src="{{ asset('/') }}natureteaFiles/hyperless/attantion.png"></div>
                                <div class="symptomItem-text"> Edem na licu </div>
                            </div>
                            <div class="dflex symptomBox-item">
                                <div class="symptomItem-icon"><img src="{{ asset('/') }}natureteaFiles/hyperless/attantion.png"></div>
                                <div class="symptomItem-text"> Zamagljen vid </div>
                            </div>
                            <div class="dflex symptomBox-item">
                                <div class="symptomItem-icon"><img src="{{ asset('/') }}natureteaFiles/hyperless/attantion.png"></div>
                                <div class="symptomItem-text"> Utrnuli i hladni prsti </div>
                            </div>
                            <div class="dflex symptomBox-item">
                                <div class="symptomItem-icon"><img src="{{ asset('/') }}natureteaFiles/hyperless/attantion.png"></div>
                                <div class="symptomItem-text"> Prekomerno znojenje </div>
                            </div>
                            <div class="dflex symptomBox-item">
                                <div class="symptomItem-icon"><img src="{{ asset('/') }}natureteaFiles/hyperless/attantion.png"></div>
                                <div class="symptomItem-text"> Nagle promene pritiska </div>
                            </div>
                        </div>
                        <div class="bannerBox">
                            <div class="bannerBox-title"></div>
                            <div class="bannerBox-text"><span> Važno! </span> Većina pacijenata s hipertenzijom u Srbiji uopšte nisu svesni da su bolesni. </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="block_03">
            <div class="container">
                <div class="row">
                    <div class="col xl10 offset-xl1 l12 m12 s12">
                        <div class="block_03-title"> Zbog čega je hipertenzija opasna? </div>
                        <div class="block_03-subtitle center-align"><i> Posledice visokog krvnog pritiska su opasnije nego što se misli. Većina slučajeva hipertenzije završi infarktom. Dolazi do pojave tromboze u krvnim sudovima. Rizik od izlivanja krvi u mozak i pojave moždanog udara je veliki. </i></div>
                        <div class="block_03-subtitle"> Pušenje, alkohol, neuhranjenost, sedilački način života, stresovi i visok nivo holesterola čine posledice naročito opasnim. Ljudi sa viškom kilograma pate od hipertenzije 3-4 puta češće od ljudi sa normalnom težinom. </div>
                        <div class="bannerBox">
                            <div class="bannerBox-title"> VAŽNO! </div>
                            <div class="bannerBox-text"> Hipertenzija brzo napreduje. Blagovremeno lečenje znatno smanjuje rizik od posledica. </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="block_05">
            <div class="container">
                <div class="row">
                    <div class="col xl12 l12 m12 s12">
                        <div class="block_05-title"> Hyperless uklanja 5 osnovnih uzroka hipertenzije </div>
                        <div class="dflex causesBox">
                            <div class="causesBox-item">
                                <div class="causesBox-icon img_box"><img src="{{ asset('/') }}natureteaFiles/hyperless/cause_01.png"></div>
                                <div class="causesBox-title"> Preopterećen živčani sistem (stres, nesanica itd.) </div>
                                <div class="causesBox-text"> Hyperless ublažava osećaj anksioznosti jer sadrži koren valerijane i srčenicu. </div>
                            </div>
                            <div class="causesBox-item">
                                <div class="causesBox-icon img_box"><img src="{{ asset('/') }}natureteaFiles/hyperless/cause_02.png"></div>
                                <div class="causesBox-title"> Toksine u krvnim sudovima </div>
                                <div class="causesBox-text"> Hyperless poboljšava funkciju srca, čisti krvne sudove od nakupljenog otpada zahvaljujući bioflavonoidima dobijenim iz zelene kafe i gloga. </div>
                            </div>
                            <div class="causesBox-item">
                                <div class="causesBox-icon img_box"><img src="{{ asset('/') }}natureteaFiles/hyperless/cause_03.png"></div>
                                <div class="causesBox-title"> Varikozitet i trombozu </div>
                                <div class="causesBox-text"> Hyperless poboljšava vensku cirkulaciju, razgrađuje ugruške i ojačava zidove krvnih sudova jer sadrži koncentrirane tučkove cveta poznatog kao hmelj (Humulus lupulus). </div>
                            </div>
                            <div class="causesBox-item">
                                <div class="causesBox-icon img_box"><img src="{{ asset('/') }}natureteaFiles/hyperless/cause_04.png"></div>
                                <div class="causesBox-title"> Povećan nivo šećera u krvi </div>
                                <div class="causesBox-text"> Hyperless smanjuje količinu šećera u krvi, sprečava dijabetes zahvaljujući ekstraktima origana i preslice. </div>
                            </div>
                            <div class="causesBox-item">
                                <div class="causesBox-icon img_box"><img src="{{ asset('/') }}natureteaFiles/hyperless/cause_05.png"></div>
                                <div class="causesBox-title"> Prekomernu težinu </div>
                                <div class="causesBox-text"> Hyperless podstiče mršavljenje, pojačava metabolizam i funkciju bubrega zahvaljujući ekstraktu matičnjaka. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="block_06">
            <div class="container">
                <div class="obj objBox2"><img class="lazy" src="{{ asset('/') }}natureteaFiles/hyperless/expert.png"></div>
                <div class="row m-0">
                    <div class="col xl8 offset-xl4 l10 offset-l2 m12 s12">
                        <div class="block_06-title"> Mišljenje struke </div>
                        <div class="block_06-text">  </div>
                        <div class="block_06-text"> Glavni borac protiv hipertenzije su flavonoidi. Mogu se dobiti samo iz zelenog čaja i gloga. Nalaze se u skoro svim lekovima protiv hipertenzije. </div>
                        <div class="block_06-text"> Ali! Njihova koncentracija u većini proizvoda je zanemariva! </div>
                        <div class="block_06-text"> Zato se delovanje može čekati i nekoliko godina. Zasigurno znam da je jedini lek koji obiluje bioflavonoidima Hyperless. Video sam njegovu formulu i zaključke nezavisnih stručnjaka i uglednih ljudi. Ovaj dodatak ishrani preporučujem pacijentima i prekorim ih ako počnu samolečenje i uzimaju nešto što "im je prijatelj savetovao", ili "su pročitali na internetu", "čuli na TV-u". </div>
                        <div class="block_06-text"> To je pogrešno! Protiv hipertenzije se treba boriti samo sigurnim metodama! Onima u koje veruju doktori i koje će učiniti da vaša bolest zauvek nestane. </div>
                        <div class="expertName"><span></span></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="block_07">
            <div class="container">
                <div class="row">
                    <div class="col xl10 offset-xl1 l12 m6 offset-m4 s12">
                        <div class="dflex customForm">
                            <div class="customForm-item">
                                <div class="saleBox"> Rasprodaja <span> -40% </span></div>
                                <div class="dflex priceBox">
                                    <div class="priceBox-item">
                                        <div class="oldPrice">
                                            <div class="priceBox-title"> Puna cena: </div>
                                            <div class="priceBox-info"><font class="js_old_price"> {{ $prices[1]['originalPrice'] }} </font> RSD </div>
                                        </div>
                                    </div>
                                    <div class="priceBox-item">
                                        <div class="newPrice">
                                            <div class="priceBox-title"> Snižena cena: </div>
                                            <div class="priceBox-info"><font class="js_new_price"> {{ $prices[1]['amount'] }} </font> RSD </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customForm-item">
                                <div class="img_box productBox"><img src="{{ asset('/') }}natureteaFiles/hyperless/product_form.png"><img class="obj objArrow" src="{{ asset('/') }}natureteaFiles/hyperless/arrow.png"></div>
                            </div>
                            <div class="customForm-item">
                                <form action="{{$orderRoute}}" id="order_form" method="post">
                                    {{ csrf_field() }}
                                    @include('lander.naturapharm.components.form_hidden_fields')
                                    <div class="input-field"><input id="name" name="name" placeholder="Unesite vaše ime" type="text"><label for="name"></label></div>
                                    <div class="input-field"><input class="only_number" id="phone" name="phone" placeholder="Unesite vaš broj telefona" type="text"><label for="phone"></label></div>
                                    <select class="browser-default customSelect change-package-selector" name="quantity">
                                        @foreach($prices as $singlePrice)
                                            <option value="{{ $singlePrice['quantity'] }}"
                                                    @if($singlePrice['is_default']) selected @endif
                                            >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} RSD)</option>
                                        @endforeach
                                    </select>
                                    <div class="buttonBox"><button class="waves-effect btn red button__text customBtn js_submit" type="submit"> Naruči </button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="block_08">
            <div class="container">
                <div class="row">
                    <div class="col xl10 offset-xl1 l12 m12 s12">
                        <div class="block_08-title"> Delotvornost i bezbednost preparata Hyperless © dokazana je kroz laboratorijska ispitivanja </div>
                        <div class="bannerBox-text">
                            <div>Analize su sprovedene u nadležnoj laboratoriji u Beogradu.</div>
                            <div>Proizvod je bezbedan za upotrebu u svim životnim dobima.</div>
                            <div>Koristi se 3 puta dnevno za najbolje rezultate.</div>
                            <div>100% prirodan.</div>
                        </div>
                        {{--<div class="block_08-title"> Rezultati istraživanja </div>--}}
                    </div>
                </div>
                {{--<div class="row">--}}
                    {{--<div class="col xl12 l12 m12 s12">--}}
                        {{--<div class="dflex resultBox">--}}
                            {{--<div class="resultBox-item">--}}
                                {{--<div class="resultBox-title"> PLACEBO </div>--}}
                                {{--<div class="resultBox-image img_box"><img src="{{ asset('/') }}natureteaFiles/hyperless/peaple_left.png"></div>--}}
                                {{--<div class="dflex resultBox-info">--}}
                                    {{--<div class="resultBox-text"> Normaliziranje arterijskog pritiska </div>--}}
                                    {{--<div class="resultBox-percent"> 1% </div>--}}
                                {{--</div>--}}
                                {{--<div class="dflex resultBox-info">--}}
                                    {{--<div class="resultBox-text"> Uklanjanje venske tromboze </div>--}}
                                    {{--<div class="resultBox-percent"> 0% </div>--}}
                                {{--</div>--}}
                                {{--<div class="dflex resultBox-info">--}}
                                    {{--<div class="resultBox-text"> Uklanjanje aritmije </div>--}}
                                    {{--<div class="resultBox-percent"> 2% </div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="resultBox-item">--}}
                                {{--<div class="resultBox-title"> Hyperless © </div>--}}
                                {{--<div class="resultBox-image img_box"><img src="{{ asset('/') }}natureteaFiles/hyperless/people_right.png"></div>--}}
                                {{--<div class="dflex resultBox-info">--}}
                                    {{--<div class="resultBox-text"> Normaliziranje arterijskog pritiska </div>--}}
                                    {{--<div class="resultBox-percent"> 100% </div>--}}
                                {{--</div>--}}
                                {{--<div class="dflex resultBox-info">--}}
                                    {{--<div class="resultBox-text"> Uklanjanje venske tromboze </div>--}}
                                    {{--<div class="resultBox-percent"> 90% </div>--}}
                                {{--</div>--}}
                                {{--<div class="dflex resultBox-info">--}}
                                    {{--<div class="resultBox-text"> Uklanjanje aritmije </div>--}}
                                    {{--<div class="resultBox-percent"> 99% </div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </section>
        <section class="block_09">
            <div class="container">
                <div class="row">
                    <div class="col xl12 l12 m12 s12">
                        <div class="block_09-title"> Komentari ljudi koji su zadovoljni delovanjem proizvoda Hyperless © </div>
                        <div class="reviewsBox">
                            <div class="dflex reviewItem">
                                <div class="reviewItem-avatar img_box"><img src="{{ asset('/') }}natureteaFiles/hyperless/review_01.png"></div>
                                <div class="reviewItem-text"> Shvatila sam da povišen pritisak dovodi do ishemijskog moždanog udara - infarkta mozga - pošto sam videla kako se to dogodilo mojoj sestri. Doktori su joj spasli život, ali nije se u potpunosti oporavila. Kada sam se ja po prvi put suočila sa ovom bolešću, već sam bila svesna nekih trikova i znala sam da treba tražiti biljne preparate. Moja doktorica, mudra žena, propisala mi je Hyperless. Zahvalna sam joj. Prošle su 4 godine i više nemam hipertenziju. Sad sam potpuno zdrava osoba koja se ne boji infarkta ili moždanog udara. Brinite se o vašem zdravlju! <span class="authorName"> Radmila Marić, 61 godina, Novi Sad </span></div>
                            </div>
                            <div class="dflex reviewItem">
                                <div class="reviewItem-avatar img_box"><img src="{{ asset('/') }}natureteaFiles/hyperless/review_02.png"></div>
                                <div class="reviewItem-text"> Pre nekoliko godina išla sam na lečenje u Beograd. Tamo su sprovodili istraživanje o novom preparatu protiv hipertenzije. Naravno da sam se bojala. Ali šta sam drugo mogla uraditi? Nijedan drugi lek mi nije pomagao, pa sam odlučila probati. Srećom, bila sam u grupi koja je dobijala Hyperless, a ne placebo. Nakon dva sata, pritisak mi se normalizirao. Postepeno sam se počela osećati mnogo bolje! Mnogo mi je drago što sam učestvovala u istraživanju ovog leka. Moj pritisak je sad u redu. <span class="authorName"> Marina Stevelić, 47 godina, Niš </span></div>
                            </div>
                            <div class="dflex reviewItem">
                                <div class="reviewItem-avatar img_box"><img src="{{ asset('/') }}natureteaFiles/hyperless/review_03.png"></div>
                                <div class="reviewItem-text"> Imam 51 godinu. Pre tri godine sam dobio dijagnozu hipertenzije u našoj bolnici. Šum na srcu i tako dalje. Patio sam, ali ništa nisam uradio povodom toga. Pre šest mjeseci, sudeći po svim znacima, imao sam mikro moždani udar. Onda sam se uspaničio, ali sam odbio da pijem pilule koje su mi propisali. Na sreću, naišao sam na starog prijatelja koji mi je predložio Hyperless. Sada, kao što možete da pogodite, NIŠTA me ne muči. Pritisak mi je normalan, zdrav sam kao dren! <span class="authorName"> Branimir Dobrečević, 51 godina, Beograd </span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="block_10">
            <div class="container">
                <div class="row">
                    <div class="col xl10 offset-xl1 l12 m12 s12">
                        <div class="block_10-title"> Pogodnosti preparata Hyperless © </div>
                        <div class="dflex productBonus">
                            <div class="bonusItem center-align">
                                <div class="bonusItem-icon img_box"><img src="{{ asset('/') }}natureteaFiles/hyperless/bonus_01.png"></div>
                                <div class="bonusItem-title"> Brza pomoć </div>
                                <div class="bonusItem-text"> Već u prvih 6 sati nakon uzimanja, pritisak će se normalizovati! </div>
                            </div>
                            <div class="bonusItem center-align">
                                <div class="bonusItem-icon img_box"><img src="{{ asset('/') }}natureteaFiles/hyperless/bonus_02.png"></div>
                                <div class="bonusItem-title"> Ne uzrokuje nagle skokove i padove pritiska. </div>
                                <div class="bonusItem-text"> Reguliše ispravno funkcionisanje srca. </div>
                            </div>
                            <div class="bonusItem center-align">
                                <div class="bonusItem-icon img_box"><img src="{{ asset('/') }}natureteaFiles/hyperless/bonus_03.png"></div>
                                <div class="bonusItem-title"> Sveobuhvatno poboljšanje zdravstvenog stanja. </div>
                                <div class="bonusItem-text"> Uklanjanje angine pectoris, aritmije, neuroze, poboljšanje pamćenja, vraćanje sposobnosti govora i kretanja nakon moždanog udara. </div>
                            </div>
                            <div class="bonusItem center-align">
                                <div class="bonusItem-icon img_box"><img src="{{ asset('/') }}natureteaFiles/hyperless/bonus_04.png"></div>
                                <div class="bonusItem-title"> Delotvorni rezultat bez neželjenih posledica. </div>
                                <div class="bonusItem-text"> Žive biljne ćelije se potpuno slažu s ćelijama ljudskog tela </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="block_11">
            <div class="container">
                <div class="row">
                    <div class="col xl12 l12 m12 s12">
                        <div class="howToUse valign-wrapper">
                            <div class="obj objBox3 img_box"><img class="lazy" src="{{ asset('/') }}natureteaFiles/hyperless/women.png"></div>
                            <div class="howToUse-content">
                                <div class="howToUse-title"> Način upotrebe: </div>
                                <div class="howToUse-text">Supenu kašiku čajne mešavine preliti sa 200ml hladne vode, sud poklopiti, zagrejati do ključanja, ostaviti da stoji jedan sat, procediti. Piti tri puta dnevno po 200ml nezaslađenog čaja posle jela.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="block_12">
            <div class="container">
                <div class="row">
                    <div class="col xl10 offset-xl1 l12 m7 offset-m4 s12">
                        <div class="dflex customForm">
                            <div class="customForm-item">
                                <div class="saleBox"> Rasprodaja <span> -40% </span></div>
                                <div class="dflex priceBox">
                                    <div class="priceBox-item">
                                        <div class="oldPrice">
                                            <div class="priceBox-title"> Puna cena: </div>
                                            <div class="priceBox-info"><font class="js_old_price"> {{ $prices[1]['originalPrice'] }} </font> RSD </div>
                                        </div>
                                    </div>
                                    <div class="priceBox-item">
                                        <div class="newPrice">
                                            <div class="priceBox-title"> Snižena cena: </div>
                                            <div class="priceBox-info"><font class="js_new_price"> {{ $prices[1]['amount'] }} </font> RSD </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customForm-item">
                                <div class="img_box productBox"><img src="{{ asset('/') }}natureteaFiles/hyperless/product_form.png"><img class="obj objArrow" src="{{ asset('/') }}natureteaFiles/hyperless/arrow.png"></div>
                            </div>
                            <div class="customForm-item">
                                <div class="customForm-title"> Unesite vaše podatke u obrazac ispod: </div>
                                <form action="{{$orderRoute}}" id="order_form" method="post">
                                    {{ csrf_field() }}
                                    @include('lander.naturapharm.components.form_hidden_fields')
                                    <div class="input-field"><input id="name" name="name" placeholder="Unesite vaše ime" type="text"><label for="name"></label></div>
                                    <div class="input-field"><input class="only_number" id="phone" name="phone" placeholder="Unesite vaš broj telefona" type="text"><label for="phone"></label></div>
                                    <select class="browser-default customSelect change-package-selector" name="quantity">
                                        @foreach($prices as $singlePrice)
                                            <option value="{{ $singlePrice['quantity'] }}"
                                                    @if($singlePrice['is_default']) selected @endif
                                            >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} RSD)</option>
                                        @endforeach
                                    </select>
                                    <div class="buttonBox"><button class="waves-effect btn red button__text customBtn js_submit" type="submit"> Naruči </button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
@include('components.pixel_footer')
</body>
</html>