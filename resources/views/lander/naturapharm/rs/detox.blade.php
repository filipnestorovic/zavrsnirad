<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width" name="viewport"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript" ></script>
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/trigger-icon-medallion.png" type="image/png" rel="icon">
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/style.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/order_me.min.css" rel="stylesheet" media="all" type="text/css">
    <style>img[height="1"],img[width="1"]{display:none!important}input[type="radio"]{width:15px!important;height:15px!important;cursor:pointer;box-shadow:none}label{cursor:pointer;font-size:18px}@media only screen and (max-width:424px){.firstCircle{position:relative;top:30px}.doctorSection img{margin-top:-40px!important}.productSection{margin-top:50px}.scroll__list{position:relative;top:30px}.pair img{margin-top:40px}}@media only screen and (min-width:424px){.scroll__list{position:relative;top:60px}.pair img{margin:50px}}.manual__icon-inner--1 .manual__icon{width:152px;height:185px;background-image:url({{asset('/')}}naturapharmFiles/kneepatch/kinoki3.png)}.manual__icon-inner--2{padding-top:24px}.manual__icon-inner--2 .manual__icon{margin-left:0;width:166px;height:169px;background-image:url({{asset('/')}}naturapharmFiles/kneepatch/kinoki4.png)}.manual__icon-inner--3 .manual__icon{width:143px;height:213px;background-image:url({{asset('/')}}naturapharmFiles/kneepatch/kinoki5.png)}</style>
</head>
<body>
@include('components.display_errors')
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-right header__title">
                <h1>Biljni flasteri za detokscikaciju</h1>
                <h2>DETOX</h2>
                <span>"Kineska mudrost, savremena tehnologija"</span>
            </div>
        </div>
        <div class="row">
            <div class="labelmain firstCircle">
                <div condensed="" roboto="" style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red">AKCIJA!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;">nova cena</div>
                </div>
                <div class="line4 price_land_s1" style="margin-top:0px;">{{ $prices[1]['amount'] }}</div>
                <div class="line5 price_land_curr">RSD</div>
            </div>
            <div class="col-xs-12 col-md-3 hidden-xs hidden-sm">
                <div class="monk"><img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/monk.png"/></div>
                <div class="ingredients"><img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/ingredients.png"/></div>
            </div>
            <div class="col-xs-12 col-md-5 product">
                <div class="product__picture">
                    <img alt="" class="product__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki1.png"/>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>PAŽNJA, AKCIJA!</h3>
                        <span>POPUST 40%</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Cena</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">RSD</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Ime i prezime" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefon" type="text" required/>
                            <div>
                                @foreach($prices as $singlePrice)
                                    <input type="hidden" id="product{{ $singlePrice['quantity'] }}" value="{{ $singlePrice['originalPrice'] }}" placeholder="{{ $singlePrice['amount'] }}"/>
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}" class="productQuantity{{$singlePrice['quantity']}}" id="productLabel{{$singlePrice['quantity']}}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="productLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <input class="form__submit js_submit button__text" type="submit" value="Naručiti odmah"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="triggers hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-2 triggers__item triggers__icon--bowl">
                <div class="triggers__desc">Recept vekovima star</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--gate">
                <div class="triggers__desc">Aktivacija mikrocirkulacije u koži</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--medallion">
                <div class="triggers__desc">Izbacivanje viška vode iz organizma</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--beep2">
                <div class="triggers__desc">Širok spektar efekata</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--flower">
                <div class="triggers__desc">Potpuna detoksikacija organizma</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--ying-yang">
                <div class="triggers__desc">100% učinkoviti i bezbedni</div>
            </div>
        </div>
    </div>
</div>
<section class="section section--1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section__title">U DANAŠNJEM VREMENU POŽELJNO JE BAREM JEDNOM MESEČNO URADITI DETOKSIKACIJU ORGANIZMA I PREPORODITI SVOJE TELO</h2>
            </div>
        </div>
        <div class="row pair">
            <div class="col-md-12 col-lg-7 text-center">
                <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki2.png"/>
            </div>
            <div class="col-md-12 col-lg-5 section__content section__content--pair">
                <p>Danas svi živimo delimično nezdravim načinom života i vrlo je važno redovno raditi <span>detoksikaciju organizma</span>. Kinoki flasteri za detoksikaciju su napravljeni od biljnih ekstrakata prema <span>tradicionalnom kineskom receptu</span> i namenjeni su izbacivanju viška tečnosti i toksina iz tela kroz <span>akupunkturne tačke.</span></p>
                <p>Kinoki flasteri <span>ublažavaju napetost i umor, poboljšavaju san, čiste kožu i poboljšavaju opšte zdravstveno stanje</span>. Koristeći ove flastere, toksini koji se skupljaju u telu i krvotoku bivaju brzo eliminisani iz organizma.</p>
                <p></p>
                <p></p>
            </div>
        </div>
        <div class="row scope">
            <div class="col-xs-12">
                <h2 class="section__title scope__title">OBLASTI PRIMENE “KINOKI” FLASTERA</h2>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp">
                    <div class="scope__icon-inner scope__icon-inner--pediatrics">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Reumatologija</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp scope__icon-wrapp--rotate-90">
                    <div class="scope__icon-inner scope__icon-inner--lymphology">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Limfologija</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp scope__icon-wrapp--rotate-180">
                    <div class="scope__icon-inner scope__icon-inner--neuroscience">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Neurologija</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section__title">OČISTITE SVOJ ORGANIZAM OD TOKSINA ZA SAMO 5 DANA UZ POMOĆ “KINOKI” FLASTERA</h2>
            </div>
            <div class="col-xs-12 section__content">
                <p>Još su prvi taoisti govorili da su <span>toksini</span> glavni uzročnik pada energije u organizmu.</p>
                <p>Prekomerna količina toksina neizbežno ostavlja traga na zdravlju ili nekom organu i izaziva bolesti kao što su <span>impotencija, mastopatija, hipertonija, glavobolje, hronični umor</span> i mnoge druge.</p>
                <p>Prema idejama taoističkih monaha i tradicionalnoj medicini Kine, negativna energija koja se širi po telu može se zaustaviti <span>detoksikacijom</span> i prekinuti svoje kretanje duž celog tela.</p>
            </div>
            <div class="col-xs-12 text-right quote">
                <div class="quote__text"> "Zdravo telo – zdrav duh"</div>
                <div class="quote__author"> Sun Šu-Min</div>
            </div>
        </div>
    </div>
    <div class="scroll">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 text-center">
                    <div class="video">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <p class="scroll__text">U osnovi lekovitog delovanja flastera leže sledeći efekti:</p>
                    <ul class="scroll__list">
                        <li class="scroll__list-item">Detoksikacija organizma</li>
                        <li class="scroll__list-item">Oslobađanje od glavobolje i stresa</li>
                        <li class="scroll__list-item">Podmlađivanje tela</li>
                        <li class="scroll__list-item">Povećavanje kvaliteta sna</li>
                        <li class="scroll__list-item">Pozitivno delovanje na unutrašnje organe</li>
                        <li class="scroll__list-item">Sprečavanje neprijatnih mirisa</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row composition">
            <div class="col-xs-12 composition__caption">
                <h2 class="section__title">SASTAV ”KINOKI” FLASTERA ZA DETOKSIKACIJU: </h2>
                <p>Recept za flastere uključuje preko 9 lekovitih trava i dobijen je kao rezultat vekovnih istraživanja narodnih iscelitelja.</p>
                <p>Flasteri za detoksikaciju se proizvode prema savremenoj tehnologiji i najvišim međunarodnim normama za kvalitet.  Kinoki flasteri ne sadrži hemijske dodatke, bezopasni su I ne štete organizmu.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-180">
                    <div class="composition__icon-inner composition__icon-inner--safflower">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">hamalomena</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--burnaska-camphor">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">notopterygium incisum</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-270">
                    <div class="composition__icon-inner composition__icon-inner--milletia-net">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">šapika</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-90">
                    <div class="composition__icon-inner composition__icon-inner--cibotium">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">Šafranika</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--ginura-peritonita">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">millettia reticulata</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-90">
                    <div class="composition__icon-inner composition__icon-inner--corydalis-questionable">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">divlji đumbir</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-270">
                    <div class="composition__icon-inner composition__icon-inner--angelica-croproperty">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">panax pseudoginseng</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--cistanche-saline">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">cistanche salsa</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp">
                    <div class="composition__icon-inner composition__icon-inner--cistanche-saline2">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">koren skutelarije</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">"KINOKI" ĆE OČISTITI VAŠ ORGANIZAM OD TOKSINA <br/> U NAJKRAĆEM MOGUĆEM ROKU!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2">
                <div condensed="" roboto="" style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> AKCIJA!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;"> nova cena</div>
                </div>
                <div class="line4 price_land_s1" style="margin-top:0px;">{{ $prices[1]['amount'] }}</div>
                <div class="line5 price_land_curr">RSD</div>
            </div>
            <div class="col-xs-12 col-md-8 productSection">
                <div class="product">
                    <div class="product__picture">
                        <img alt="" class="product__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki1.png"/>
                        <div class="product__ingredients hidden-sm hidden-xs">
                            <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/ingredients.png"/>
                        </div>
                    </div>
                    <div class="product__desc product__desc--bold">
                        <div>Lekovito, prirodno i moćno sredstvo za detoksikaciju.</div>
                        <div>Pomaže u otklanjanju glavobolje, stresa, oslobađa telo od tečnosti, popravlja kvalitet sna i vraća energiju.</div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Posebna kombinacija lekovitih kineskih trava</li>
                        <li class="list-checked__item">Vekovima čuvani recepti kineske medicine</li>
                        <li class="list-checked__item">Savremena tehnologija proizvodnje</li>
                        <li class="list-checked__item">Pokupiće sve toksine iz organizma na jednom mestu</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>PAŽNJA, AKCIJA!</h3>
                        <span>POPUST 40%</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Cena</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">RSD</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Ime i prezime" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefon" type="text" required/>
                            <div>
                                @foreach($prices as $singlePrice)
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}" class="productQuantity{{$singlePrice['quantity']}}" id="SecondProductLabel{{$singlePrice['quantity']}}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="SecondProductLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <input class="form__submit js_submit button__text" type="submit" value="Naručiti odmah"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">ŠTA O “KINOKI” BILJNIM FLASTERIMA ZA DETOKSIKACIJU <br/> GOVORE DOKTORI?
                </h2>
            </div>
        </div>
        <div class="row comment doctorSection">
            <div class="col-xs-12 col-lg-8">
                <img alt="" class="comment__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/doctor.png"/>
            </div>
            <div class="col-xs-12 col-lg-4">
                <div class="comment__text">
                    <p>Najvažnije u procesu lečenja bilo kakve bolesti je očistiti organizam od toksina koje organizam sakuplja zbog nezdravog načina života. Ranije je jedino rešenje bilo propisivanje preparata za detoksikaciju koji negativno utiču na jetru i probavni takt.</p>
                    <p>Imao sam pacijene koji su se žalili na glavobolje, hronični umor, bol u vratnom delu kičme, a sve to kao posledicu nakupljanja toksina u organizmu koji su remetili normalne telesne funkcije.</p>
                    <p>Kada sam svojim pacijentima počeo da preporučujem KINOKI, nakon određenog vremena dobar deo njih je imao znatno manje problema, a većini su problemi skroz nestali.
                        KINOKI flasteri su odlični za priorodno izbacivanje toksina iz organizma i svakome prepoučujem detoksikaciju bar jednom mesečno.</p>
                </div>
                <div class="comment__author">Goran Jeftić</div>
                <div class="comment__job"> Reumatolog</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--6">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">RECENZIJE NAŠIH KLIJENATA</h2>
            </div>
        </div>
        <div class="row comments">
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title"> Danica, 21 godina</div>
                <div class="comments__text">
                    <p>Dobar dan. Radim mnogo u kancelariji, i imala sam problem sa bolom u mišićima, udovi su mi bili teški, nisam imala dovoljno energije i bila sam jako mrzovoljna. Na internetu sam pronašla KINOKI flastere i pokušala sam da detoksikujem svoj organizam. Nakon dve kutije, simptomi koji su me mučili su skroz nestali, a ja se evo već 3 meseca osećam odlično. Sada preventivno svaki mesec potrošim jednu kutiju jer ne želim ni da mi se ponovi onaj teški period.</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title"> Ljubica, 65 godina</div>
                <div class="comments__text">
                    <p>Godinama sam imala problem sa viškom tečnosti u organizmu i otokom na nogama. Pokušavala sam sve i svašta, ali su mi lekovi često pravili druge probleme. Kćerka mi je kupila Kinoki, i to je jedini proizvod koji mi je pomogao. Imam ga u svojoj apoteci u većim zalihama. Hvala vam!</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title"> Dragan, 32 godine</div>
                <div class="comments__text">
                    <p>Često jedem brzu hranu i slatkiše, pijem dosta gaziranih sokova i pušač sam. Vremenom sam počeo da osećam poteškoće poput iscrpljenosti i glavobolje. Majka mi je koristila kinoki i preporučila ga i meni. U početku nisam verovao da pomaže ali na nagovor majke nisam odustajao, i već u drugoj nedelji korišćenja dosta sam se lepše osećao. Budio sam se odmorniji, imao sam više energije i glavobolja je nestala. Slobodno mogu da kažem da ovaj proizvod preporučujem svima, jer je zaista dobar!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--7">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">KAKO ISPRAVNO KORISTITI "KINOKI" FLASTER</h2>
            </div>
        </div>
        <div class="row manual">
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp manual__icon-wrapp--rotate-180">
                    <div class="manual__icon-inner manual__icon-inner--1">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">1</div>
                <div class="manual__title"> OTVORITE PAKOVANJE I
                    <br/> IZVADITE FLASTER</div>
                <div class="manual__desc"> Stopalo oprati vodom i prosušiti</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp">
                    <div class="manual__icon-inner manual__icon-inner--2">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">2</div>
                <div class="manual__title"> NALEPITI FLASTER NA
                    <br/> STOPALO</div>
                <div class="manual__desc">Ostaviti preko noći.</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp manual__icon-wrapp--rotate-270">
                    <div class="manual__icon-inner manual__icon-inner--3">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">3</div>
                <div class="manual__title"> UJUTRU SKINUTI <br/> FLASTER</div>
                <div class="manual__desc">Oprati stopala vodom!</div>
            </div>
        </div>
        <div class="col-xs-12 manual__notice"> * Držati po jedan flaster na oba stopala celu noć</div>
        <center>
            <br/><br/>
            <h3><strong> Rezultati vidljivi nakon 1 kutije </strong></h3></center>
        <center>
            <div class="col-xs-12 manual__notice">Za najbolji rezultat preporučuju se da iskoristite 2-3 kutije bez prekida</div>
        </center>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title"> "DETOX FLASTER" nije privremeno, već trajno oslobađanje od ŠTETNIH TOKSINA U ORGANIZMU!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2 ThirdCircle">
                <div condensed="" roboto="" style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> AKCIJA!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;"> nova cena</div>
                </div>
                <div class="line4 price_land_s1" style="margin-top:0px;">{{ $prices[1]['amount'] }}</div>
                <div class="line5 price_land_curr">RSD</div>
            </div>
            <div class="col-xs-12 col-md-8 productSection">
                <div class="product">
                    <div class="product__picture">
                        <img alt="" class="product__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki1.png"/>
                        <div class="product__ingredients hidden-sm hidden-xs">
                            <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/ingredients.png"/>
                        </div>
                    </div>
                    <div class="product__desc product__desc--bold">
                        <div>Lekovito, prirodno i moćno sredstvo za detoksikaciju.</div>
                        <div>Pomaže u otklanjanju glavobolje, stresa, oslobađa telo od tečnosti, popravlja kvalitet sna i vraća energiju.</div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Posebna kombinacija lekovitih kineskih trava</li>
                        <li class="list-checked__item">Vekovima čuvani recepti kineske medicine</li>
                        <li class="list-checked__item">Savremena tehnologija proizvodnje</li>
                        <li class="list-checked__item">Pokupiće sve toksine iz organizma na jednom mestu</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>PAŽNJA, AKCIJA!</h3>
                        <span>POPUST 40%</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Cena</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">RSD</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Ime i prezime" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefon" type="text" required/>
                            <div>
                                @foreach($prices as $singlePrice)
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}" class="productQuantity{{$singlePrice['quantity']}}" id="ThirdProductLabel{{$singlePrice['quantity']}}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="ThirdProductLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <input class="form__submit js_submit button__text" type="submit" value="Naručiti odmah"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer copyright">
    <div class="container">
        <span>&copy; {{ now()->year }} {{ $product->brand_name }} | Sva prava zadržana.</span>
    </div>
</footer>
<input type="hidden" id="currencyHidden" value="{{ $prices[1]['currency']}}"/>
@include('components.pixel_footer')
<script type="text/javascript" src="{{ asset('/') }}naturapharmFiles/kneepatch/form.js"></script>
</body>