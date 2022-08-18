<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width" name="viewport"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/trigger-icon-medallion.png" type="image/png" rel="icon">
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/style.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/order_me.min.css" rel="stylesheet" media="all" type="text/css">
    <style>
        img[height="1"], img[width="1"] {
            display: none !important
        }

        input[type="radio"] {
            width: 15px !important;
            height: 15px !important;
            cursor: pointer;
            box-shadow: none
        }

        label {
            cursor: pointer;
            font-size: 18px
        }

        @media only screen and (max-width: 424px) {
            .firstCircle {
                position: relative;
                top: 30px
            }

            .doctorSection img {
                margin-top: -40px !important
            }

            .productSection {
                margin-top: 50px
            }

            .scroll__list {
                position: relative;
                top: 30px
            }

            .pair img {
                margin-top: 40px
            }
        }

        @media only screen and (min-width: 424px) {
            .scroll__list {
                position: relative;
                top: 60px
            }

            .pair img {
                margin: 50px
            }
        }

        .manual__icon-inner--1 .manual__icon {
            width: 152px;
            height: 185px;
            background-image: url({{asset('/')}}naturapharmFiles/kneepatch/kinoki3.png)
        }

        .manual__icon-inner--2 {
            padding-top: 24px
        }

        .manual__icon-inner--2 .manual__icon {
            margin-left: 0;
            width: 166px;
            height: 169px;
            background-image: url({{asset('/')}}naturapharmFiles/kneepatch/kinoki4.png)
        }

        .manual__icon-inner--3 .manual__icon {
            width: 143px;
            height: 213px;
            background-image: url({{asset('/')}}naturapharmFiles/kneepatch/kinoki5.png)
        }</style>
</head>
<body>
@include('components.display_errors')
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-right header__title">
                <h1>Rastlinski obliži za detokstikacijo</h1>
                <h2>DETOX</h2>
                <span>“Kitajska modrost, sodobna tehnologija”</span>
            </div>
        </div>
        <div class="row">
            <div class="labelmain firstCircle">
                <div condensed="" roboto=""
                     style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red">AKCIJA!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;">Nova cena!</div>
                </div>
                <div class="line4 price_land_s1" style="margin-top:0px;">{{ $prices[1]['amount'] }}</div>
                <div class="line5 price_land_curr">{{ $prices[1]['currency'] }}</div>
            </div>
            <div class="col-xs-12 col-md-3 hidden-xs hidden-sm">
                <div class="monk"><img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/monk.png"/></div>
                <div class="ingredients"><img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/ingredients.png"/>
                </div>
            </div>
            <div class="col-xs-12 col-md-5 product">
                <div class="product__picture">
                    <img alt="" class="product__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki1.png"/>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>POZOR, AKCIJA!</h3>
                        <span>POPUST 40%</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Cena</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">{{ $prices[1]['currency'] }}</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Ime in priimek" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefonska številka" type="text" required/>
                            <input name="shipping_address" placeholder="Naslov naročnika" type="text" required/>
                            <input name="shipping_city" placeholder="Mesto" type="text" required/>
                            <div>
                                @foreach($prices as $singlePrice)
                                    <input type="hidden" id="product{{ $singlePrice['quantity'] }}"
                                           value="{{ $singlePrice['originalPrice'] }}"
                                           placeholder="{{ $singlePrice['amount'] }}"/>
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}"
                                           class="productQuantity{{$singlePrice['quantity']}} quantity"
                                           id="productLabel{{$singlePrice['quantity']}}"
                                           placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="productLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}}
                                        ({{$singlePrice['amount']}} {{ $prices[1]['currency'] }})
                                        @if($singlePrice['is_free_shipping']) * @endif
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <div class="freeShippingDiv">* BRZEPLAČNA DOSTAVA</div>
                            <input class="form__submit js_submit button__text" type="submit" value="Naročite zdaj"/>
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
                <div class="triggers__desc">Recept, ki se uporablja že stoletja</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--gate">
                <div class="triggers__desc">Spodbuja mikroprekrvavitev iz kože</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--medallion">
                <div class="triggers__desc">Izloča odvečno vodo iz organizma</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--beep2">
                <div class="triggers__desc">Širok seznam učinkov</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--flower">
                <div class="triggers__desc">Popolna razstrupitev organizma</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--ying-yang">
                <div class="triggers__desc">100% učinkovito in varno</div>
            </div>
        </div>
    </div>
</div>
<section class="section section--1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section__title">V DANAŠNJEM ČASU JE PRIPOROČLJIVO, DA VSAJ ENKRAT NA MESEC NAREDIMO
                    DETOKSIKACIJO ORGANIZMA IN PREČISTIMO SVOJE TELO.</h2>
            </div>
        </div>
        <div class="row pair">
            <div class="col-md-12 col-lg-7 text-center">
                <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki2.png"/>
            </div>
            <div class="col-md-12 col-lg-5 section__content section__content--pair">
                <p>Danes vsi živimo dokaj nezdravim načinom življenja in zato je zelo pomembno, da redno naredimo <span>detoksikacijo organizma</span>.
                    Kinoki obliži za detoksikacijo so narejeni iz rastlinskih ekstraktov, po <span>tradicionalnem kitajskem receptu</span>
                    in so namenjeni izločanju odvečne tekočine in toksinov iz telesa skozi
                    <span>akupunkturne točke</span>.</p>
                <p>Kinoki obliži <span>blažijo napetost in utrujenost, nespečnost, čistijo kožo in izboljšujejo splošno zdravstveno stanje</span>.
                    Z uporabo obližev se toksini, ki se nabirajo v telesu in krvožilju zelo hitro izločajo iz organizma.
                </p>
            </div>
        </div>
        <div class="row scope">
            <div class="col-xs-12">
                <h2 class="section__title scope__title">VEJE UPORABE “KINOKI” OBLIŽEV</h2>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp">
                    <div class="scope__icon-inner scope__icon-inner--pediatrics">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Revmatologija</div>
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
                <div class="scope__desc">Nevrologija</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section__title">OČISTITE SVOJ ORGANIZEM OD TOKSINOV V SAMO 5 DNEH S POMOČJO “KINOKI”
                    OBLIŽEV</h2>
            </div>
            <div class="col-xs-12 section__content">
                <p>Že prvi taoisti so govorili, da so <span>toksini</span> glavni povzročitelj pomanjkanja energije v
                    organizmu.</p>
                <p>Čezmejna količina toksinov zagotovo pušča sledi na zdravju ali organih in povzroča bolezni kot so
                    <span>impotenca, mastopatija, hipertonija, glavoboli, kronična utrujenost</span> in druge.</p>
                <p>Taoistični menihi in tradicionalna kitajska medicina pravijo, da se negativna energija, ki se širi po
                    telesu, z <span>detoksikacijo</span> lahko ustavi in prekine širjenje po celem telesu.</p>
            </div>
            <div class="col-xs-12 text-right quote">
                <div class="quote__text"> "Zdravo telo – zdrav duh"</div>
                <div class="quote__author"> Sun Shu-Min</div>
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
                    <p class="scroll__text">V osnovi zdravilnega delovanja obližev se skrivajo naslednji učinki:</p>
                    <ul class="scroll__list">
                        <li class="scroll__list-item">Detoksikacija organizma</li>
                        <li class="scroll__list-item">Lajšanje glavobola in stresa</li>
                        <li class="scroll__list-item">Pomlajevanje telesa</li>
                        <li class="scroll__list-item">Izboljšuje kakovost spanja</li>
                        <li class="scroll__list-item">Pozitivno delovanje na notranje organe</li>
                        <li class="scroll__list-item">Preprečuje neprijeten vonj telesa</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row composition">
            <div class="col-xs-12 composition__caption">
                <h2 class="section__title">SESTAVA “KINOKI” OBLIŽEV ZA DETOKSIKACIJO:</h2>
                <p>Recept za obliže vsebuje več kot 9 zdravilnih rastlin in so rezultat raziskave ljudskih zdravnikov,
                    ki je trajala več stoletij.</p>
                <p>Obliži za detoksikacijo se proizvajajo s pomočjo sodobne tehnologije in po najvišjih mednarodnih
                    kakovostnih standardih. “Kinoki” obliži ne vsebujejo kemičnih dodatkov, so varni in ne škodujejo
                    organizmu.</p>
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
                <div class="composition__desc">Kravji pastinak</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-90">
                    <div class="composition__icon-inner composition__icon-inner--cibotium">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">Žafranika</div>
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
                <div class="composition__desc">Divji ingver</div>
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
                <div class="composition__desc">Koren scutellaria-e</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">“KINOKI” ČISTI TELO OD TOKSINOV <br> V NAJKRAJŠEM ČASU!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2">
                <div condensed="" roboto=""
                     style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> AKCIJA!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;"> Nova cena!</div>
                </div>
                <div class="line4 price_land_s1" style="margin-top:0px;">{{ $prices[1]['amount'] }}</div>
                <div class="line5 price_land_curr">{{ $prices[1]['currency'] }}</div>
            </div>
            <div class="col-xs-12 col-md-8 productSection">
                <div class="product">
                    <div class="product__picture">
                        <img alt="" class="product__image"
                             src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki1.png"/>
                        <div class="product__ingredients hidden-sm hidden-xs">
                            <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/ingredients.png"/>
                        </div>
                    </div>
                    <div class="product__desc product__desc--bold">
                        <div>Zdravilno, naravno in močno sredstvo za detoksikacijo.</div>
                        <div>Pomaga pri glavobolu, stresu izločanju odvečne tekočine iz telesa, izboljšuje spanec in
                            vrača energijo.
                        </div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Posebna kombinacija zdravilnih kitajskih rastlin</li>
                        <li class="list-checked__item">Tradicionalni kitajski recept hranjen stoletja</li>
                        <li class="list-checked__item">Sodobna tehnologija proizvodnje</li>
                        <li class="list-checked__item">Zbira vse toksine hkrati na enem mestu</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>POZOR, AKCIJA!</h3>
                        <span>POPUST 40%</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Cena</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">{{ $prices[1]['currency'] }}</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Ime in priimek" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefonska številka" type="text" required/>
                            <input name="shipping_address" placeholder="Naslov naročnika" type="text" required/>
                            <input name="shipping_city" placeholder="Mesto" type="text" required/>
                            <div>
                                @foreach($prices as $singlePrice)
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}"
                                           class="productQuantity{{$singlePrice['quantity']}} quantity"
                                           id="SecondProductLabel{{$singlePrice['quantity']}}"
                                           placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="SecondProductLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}}
                                        ({{$singlePrice['amount']}} {{ $prices[1]['currency'] }})
                                        @if($singlePrice['is_free_shipping']) * @endif
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <div class="freeShippingDiv">* BRZEPLAČNA DOSTAVA</div>
                            <input class="form__submit js_submit button__text" type="submit" value="Naročite zdaj"/>
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
                <h2 class="section__title">KAJ SO ZDRAVNIKI POVEDALI O “KINOKI” OBLIŽIH ZA DETOKSIKACIJO?</h2>
            </div>
        </div>
        <div class="row comment doctorSection">
            <div class="col-xs-12 col-lg-8">
                <img alt="" class="comment__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/doctor.png"/>
            </div>
            <div class="col-xs-12 col-lg-4">
                <div class="comment__text">
                    <p>Najpomembnejše v procesu zdravljenja katerekoli bolezni je čiščenje telesa od toksinov, ki jih
                        organizem nabira kot posledico nezdravega življenskega sloga. Včasih smo kot edino rešitev imeli
                        izdelke za razstrupljanje telesa, ki so negativno vplivali na jetra in prebavni trakt.</p>
                    <p>Imel sem pacijente, ki so se pritoževali na glavobole, kronično utrujenost, bolečino v vratnem
                        delu hrbtenice, a vse to zaradi nabiranja toksinov v telesu, ki so onemogočali zdravo in
                        nemoteno delovanje organizma.</p>
                    <p>Svojim pacijentom sem začel priporočati KINOKI obliže in v kratkem času je veliko število
                        pacijentov imelo občutno manj težav, pri večini pa so težave popolnoma izvenele. KINOKI obliži
                        so odlični za naravno izločanje toksinov iz organizma in bi vsakomur priporočil detoksikacijo
                        vsaj enkrat na mesec.</p>
                </div>
                <div class="comment__author">Primož Godina</div>
                <div class="comment__job"> Reumatolog</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--6">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">MNENJA NAŠIH UPORABNIKOV</h2>
            </div>
        </div>
        <div class="row comments">
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Katja, 21 let</div>
                <div class="comments__text">
                    <p>Pozdravljeni! Veliko časa preživim v pisarni. Imela sem težave z bolečinami v mišicah, občutek
                        težkih nog, nisem imela dovolj energije, bila sem zelo slabe volje. Na spletu sem najdla KINOKI
                        obliže za razstrupitev telesa in sem jih poskusila. Po dveh škatlicah so izginile vse moje
                        težave in se že 3 mesece počutim zelo dobro. KINOKI obliže jemljem enkrat na mesec preventivno,
                        da bi preprečila, da se tisto težko obdobje ponovi. </p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Alenka, 65 let</div>
                <div class="comments__text">
                    <p>Vrsto let sem imela težavo z odvečno tekočino, ki se je nabirala v telesu. Imela sem težavo z
                        zatekanjem nog. Poskusila sem skoraj vse ampak so mi druga zdravila ponavadi naredila nove
                        težave. Hčerka mi je kupila KINOKI, ki je edini izdelek, ki mi je pomagal. Vedno ga imam na
                        zalogi, nikoli ga ne zmanjka. Hvala vam!</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Miha, 32 let</div>
                <div class="comments__text">
                    <p>Moja prehrana pogosto vsebuje hitro prehrano, sladkarije, gazirane pijače. Sem kadilec. Sčasoma
                        sem začel čutiti težave kot so izčrpanost in glavoboli. Moja mama je že uporabljala KINOKI
                        obliže in mi jih je priporočila. Na začetku nisem verjel, da bo pomagalo ampak me je mama
                        prepričala, da nadaljujem z uporabo. Že v drugem tednu sem se počutil boljše. Zbujal sem se
                        spočit, z več energije, glavoboli so izveneli. Vsem bi priporočil ta izdelek, ker je res
                        dober!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--7">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">KAKO PRAVILNO UPORABLJATI “KINOKI” OBLIŽ</h2>
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
                <div class="manual__title">ODPRITE PAKIRANJE IN <br> IZVLECITE OBLIŽ VEN</div>
                <div class="manual__desc">Stopalo dobro umijte z vodo in posušite</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp">
                    <div class="manual__icon-inner manual__icon-inner--2">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">2</div>
                <div class="manual__title">PRILEPITE OBLIŽ <br> NA STOPALO</div>
                <div class="manual__desc">Pustite preko noči.</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp manual__icon-wrapp--rotate-270">
                    <div class="manual__icon-inner manual__icon-inner--3">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">3</div>
                <div class="manual__title">ZJUTRAJ ODSTRANITE <br> OBLIŽ</div>
                <div class="manual__desc">Umijte stopala z vodo</div>
            </div>
        </div>
        <div class="col-xs-12 manual__notice"> * Prilepiti po eden obliž na vsako stopalo čez noč</div>
        <center>
            <br/><br/>
            <h3><strong> Rezultati bodo vidni že po prvi škatlici. </strong></h3></center>
        <center>
            <div class="col-xs-12 manual__notice">Za najboljši rezultat, je priporočljivo uporabiti 2-3 škatlice
                neprekinjeno.
            </div>
        </center>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">“DETOX OBLIŽ” ni samo začasna ampak trajna rešitev za izločanje škodljivih
                    toksinov iz organizma.</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2 ThirdCircle">
                <div condensed="" roboto=""
                     style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> AKCIJA!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;"> Nova cena!</div>
                </div>
                <div class="line4 price_land_s1" style="margin-top:0px;">{{ $prices[1]['amount'] }}</div>
                <div class="line5 price_land_curr">{{ $prices[1]['currency'] }}</div>
            </div>
            <div class="col-xs-12 col-md-8 productSection">
                <div class="product">
                    <div class="product__picture">
                        <img alt="" class="product__image"
                             src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki1.png"/>
                        <div class="product__ingredients hidden-sm hidden-xs">
                            <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/ingredients.png"/>
                        </div>
                    </div>
                    <div class="product__desc product__desc--bold">
                        <div>Zdravilno, naravno in močno sredstvo za detoksikacijo.</div>
                        <div>Pomaga pri glavobolu, stresu izločanju odvečne tekočine iz telesa, izboljšuje spanec in
                            vrača energijo.
                        </div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Posebna kombinacija zdravilnih kitajskih rastlin</li>
                        <li class="list-checked__item">Tradicionalni kitajski recept hranjen stoletja</li>
                        <li class="list-checked__item">Sodobna tehnologija proizvodnje</li>
                        <li class="list-checked__item">Zbira vse toksine hkrati na enem mestu</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>POZOR, AKCIJA!</h3>
                        <span>POPUST 40%</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Cena</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">{{ $prices[1]['currency'] }}</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Ime in priimek" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefonska številka" type="text" required/>
                            <input name="shipping_address" placeholder="Naslov naročnika" type="text" required/>
                            <input name="shipping_city" placeholder="Mesto" type="text" required/>
                            <div>
                                @foreach($prices as $singlePrice)
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}"
                                           class="productQuantity{{$singlePrice['quantity']}} quantity"
                                           id="ThirdProductLabel{{$singlePrice['quantity']}}"
                                           placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="ThirdProductLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}}
                                        ({{$singlePrice['amount']}} {{ $prices[1]['currency'] }})
                                        @if($singlePrice['is_free_shipping']) * @endif
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <div class="freeShippingDiv">* BRZEPLAČNA DOSTAVA</div>
                            <input class="form__submit js_submit button__text" type="submit" value="Naročite zdaj"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer copyright">
    <div class="container">
        <span>&copy; {{ now()->year }} {{ $product->brand_name }} | Vse pravice zadržane.</span>
    </div>
</footer>
<style>
    .freeShippingDiv {
        color: #d31f07;
        text-align: center;
        margin-bottom: 0;
        display: none;
        font-weight: bold;
        margin-top: 20px;
    }
</style>
<script>
    $('.quantity').click(function () {
        let fsh = $(this).attr('placeholder');
        if (parseInt(fsh) === 1) {
            $(this).closest('.orderformcdn').find('.freeShippingDiv').slideDown();
        } else {
            $(this).closest('.orderformcdn').find('.freeShippingDiv').slideUp();
        }
    })
</script>
@include('components.pixel_footer')
<script type="text/javascript" src="{{ asset('/') }}naturapharmFiles/kneepatch/form.js"></script>
</body>
