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
                <h1>Biljni flasteri za detoksikaciju</h1>
                <h2>DETOX</h2>
                <span>" Kineska mudrost, moderna tehnologija "</span>
            </div>
        </div>
        <div class="row">
            <div class="labelmain firstCircle">
                <div condensed="" roboto=""
                     style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red">AKCIJA!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;">nova cijena</div>
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
                            <span>Cijena</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">{{ $prices[1]['currency'] }}</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Ime i prezime" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Broj mobitela" type="text" required/>
                            <input name="shipping_address" placeholder="Adresa" type="text" required/>
                            <input name="shipping_city" placeholder="Grad" type="text" required/>
                            <input name="shipping_zip" placeholder="Poštanski broj" type="text" required/>
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
                            <div class="freeShippingDiv">* BESPLATNA DOSTAVA</div>
                            <input class="form__submit js_submit button__text" type="submit" value="Naručite sada"/>
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
                <div class="triggers__desc">Recept star stoljećima</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--gate">
                <div class="triggers__desc">Aktivacija mikrocirkulacije u koži</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--medallion">
                <div class="triggers__desc">Izlučivanje viška vode iz organizma</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--beep2">
                <div class="triggers__desc">Širok raspon učinaka</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--flower">
                <div class="triggers__desc">Potpuna detoksikacija organizma</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--ying-yang">
                <div class="triggers__desc">100% učinkoviti i sigurni</div>
            </div>
        </div>
    </div>
</div>
<section class="section section--1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section__title">DANAS JE POŽELJNO BAREM JEDNOM MJESEČNO PROVODITI DETOKSIKACIJU ORGANIZMA I REGENERIRATI SVOJE TIJELO</h2>
            </div>
        </div>
        <div class="row pair">
            <div class="col-md-12 col-lg-7 text-center">
                <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki2.png"/>
            </div>
            <div class="col-md-12 col-lg-5 section__content section__content--pair">
                <p>Danas svi živimo djelomično nezdravim načinom života i vrlo je važno redovito <span>detoksicirati tijelo.</span>
                    Detoks flasteri su napravljeni od biljnih ekstrakata po tradicionalnoj kineskoj recepturi i
                    namijenjeni su izbacivanju viška tekućine i toksina iz tijela kroz akupunkturne točke.</p>
                <p>Kinoki flasteri <span>otklanjaju napetost i umor, poboljšavaju san, čiste kožu i poboljšavaju opće
                        zdravstveno stanje.</span> Pomoću ovih flastera iz tijela se brzo eliminiraju toksini koji se nakupljaju u
                    tijelu i krvotoku.</p>
            </div>
        </div>
        <div class="row scope">
            <div class="col-xs-12">
                <h2 class="section__title scope__title">PODRUČJA PRIMJENE “KINOKI” FLASTERA</h2>
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
                <h2 class="section__title">OČISTITE VAŠE TIJELO OD OTROVA ZA SAMO 5 DANA UZ POMOĆ “KINOKI” FLASTERA</h2>
            </div>
            <div class="col-xs-12 section__content">
                <p>Već su prvi taoisti govorili da su toksini glavni <span>uzrok pada energije u tijelu.</span></p>
                <p>Prevelike količine toksina neizbježno ostavljaju traga na zdravlju ili organima te uzrokuju bolesti
                    poput <span>impotencije, mastopatije, hipertenzije, glavobolje, kroničnog umora</span> i mnogih drugih.</p>
                <p>Prema idejama taoističkih redovnika i tradicionalne kineske medicine, negativna energija koja se širi
                    tijelom <span>može se detoksikacijom zaustaviti i prekinuti njeno kretanje tijelom.</span></p>
            </div>
            <div class="col-xs-12 text-right quote">
                <div class="quote__text"> "Zdravo tijelo – zdrav duh"</div>
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
                    <p class="scroll__text">Ljekovito djelovanje flastera temelji se na sljedećim učincima:</p>
                    <ul class="scroll__list">
                        <li class="scroll__list-item">Detoksikacija organizma</li>
                        <li class="scroll__list-item">Ublažavanje glavobolje i stresa</li>
                        <li class="scroll__list-item">Pomlađivanje tijela</li>
                        <li class="scroll__list-item">Povećanje kvalitete sna</li>
                        <li class="scroll__list-item">Pozitivan učinak na unutarnje organe</li>
                        <li class="scroll__list-item">Sprječavanje neugodnih mirisa</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row composition">
            <div class="col-xs-12 composition__caption">
                <h2 class="section__title">SASTAV "KINOKI" DETOKS FLASTERA:</h2>
                <p>Recept za flastere uključuje preko 9 ljekovitih biljaka, a dobiven je kao rezultat stoljetnih istraživanja narodnih iscjelitelja.</p>
                <p>Detoks flasteri proizvedeni su prema suvremenoj tehnologiji i najvišim svjetskim standardima kvalitete. Kinoki flasteri ne sadrže kemijske dodatke, bezopasni su za tijelo.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-180">
                    <div class="composition__icon-inner composition__icon-inner--safflower">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">homalomena</div>
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
                <div class="composition__desc">heracleum</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-90">
                    <div class="composition__icon-inner composition__icon-inner--cibotium">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">Šafran</div>
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
                <div class="composition__desc">korijen mente</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">"KINOKI" ĆE OČISTITI VAŠE TIJELO OD TOKSINA <br> U NAJKRAĆEM MOGUĆEM VREMENU!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2">
                <div condensed="" roboto=""
                     style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> AKCIJA!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;"> nova cijena</div>
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
                        <div>Ljekovito, prirodno i snažno sredstvo za detoksikaciju.</div>
                        <div>Pomaže u ublažavanju glavobolje, stresa, oslobađa tijelo od tekućine, poboljšava kvalitetu sna i vraća energiju.</div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Posebna kombinacija ljekovitog kineskog bilja</li>
                        <li class="list-checked__item">Stoljećima stari recepti kineske medicine</li>
                        <li class="list-checked__item">Moderna tehnologija proizvodnje</li>
                        <li class="list-checked__item">Pokupit će sve toksine iz tijela na jedno mjesto</li>
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
                            <span>Cijena</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">{{ $prices[1]['currency'] }}</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Ime i prezime" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Broj mobitela" type="text" required/>
                            <input name="shipping_address" placeholder="Adresa" type="text" required/>
                            <input name="shipping_city" placeholder="Grad" type="text" required/>
                            <input name="shipping_zip" placeholder="Poštanski broj" type="text" required/>
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
                            <div class="freeShippingDiv">* BESPLATNA DOSTAVA</div>
                            <input class="form__submit js_submit button__text" type="submit" value="Naručite sada"/>
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
                <h2 class="section__title">ŠTO LIJEČNICI KAŽU O “KINOKI” BILJNIM FLASTERIMA ZA DETOKSIKACIJU?</h2>
            </div>
        </div>
        <div class="row comment doctorSection">
            <div class="col-xs-12 col-lg-8">
                <img alt="" class="comment__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/doctor.png"/>
            </div>
            <div class="col-xs-12 col-lg-4">
                <div class="comment__text">
                    <p>Najvažnija stvar u procesu liječenja svake bolesti je očistiti organizam od toksina koje tijelo
                        nakuplja nezdravim načinom života. Prije je jedino rješenje bilo prepisivanje proizvoda za
                        detoksikaciju koji negativno utječu na jetru i probavni trakt.</p>
                    <p>Imao sam pacijente koji su se žalili na glavobolje, kronični umor, bolove u vratnoj kralježnici,
                        a sve kao posljedica nakupljanja toksina u tijelu koji su poremetili normalne tjelesne
                        funkcije.</p>
                    <p>Kada sam svojim pacijentima počeo preporučivati KINOKI, nakon nekog vremena dobar dio njih je
                        imao znatno manje tegoba, a većina tegoba je potpuno nestala. KINOKI flasteri su odlični za
                        prirodnu eliminaciju otrova iz organizma i svima preporučam detoksikaciju barem jednom
                        mjesečno.</p>
                </div>
                <div class="comment__author"> Mateo Gotovina</div>
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
                <div class="comments__title">Lea, 21 godina</div>
                <div class="comments__text">
                    <p>Bok. Puno radim u uredu i imala sam problema s bolovima u mišićima, noge su mi bile teške, nisam imala dovoljno energije i bila sam jako mrzovoljna. Našla sam KINOKI flastere na internetu i pokušala detoksicirati tijelo. Nakon dvije kutije potpuno su nestali svi moji simptomi koji su me mučili i već 3 mjeseca se osjećam odlično. Sada preventivno svaki mjesec potrošim jednu kutiju jer ne želim ni da mi se ponovi to teško razdoblje.</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Smiljana, 65 godina</div>
                <div class="comments__text">
                    <p>Godinama sam imala problem s viškom tekućine u tijelu i oticanjem nogu. Probala sam sve i svašta, ali lijekovi su mi često stvarali druge probleme. Kći mi je kupila Kinoki i to je jedini proizvod koji mi je pomogao. Imam ga u kutiji za lijekove u većim zalihama. Hvala vam!</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Drago, 32 godine</div>
                <div class="comments__text">
                    <p>Često jedem brzu hranu i slatkiše, pijem puno gaziranih sokova i pušač sam. S vremenom su mi se počele javljati poteškoće poput iscrpljenosti i glavobolja. Moja majka je koristila kinoki i preporučila ga je i meni. U početku nisam vjerovao da će pomoći, ali majka je inzistirala, nisam odustajao i već u drugom tjednu korištenja bilo mi je puno bolje. Probudio sam se odmorniji, imao sam više energije i glavobolja je nestala. Iskreno mogu reći da ovaj proizvod preporučam svima, jer je stvarno dobar!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--7">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">KAKO PRAVILNO KORISTITI "KINOKI" FLASTERE</h2>
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
                <div class="manual__title">OTVORITE PAKIRANJE <br> I UZMITE FLASTER</div>
                <div class="manual__desc">Stopala operite vodom i osušite</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp">
                    <div class="manual__icon-inner manual__icon-inner--2">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">2</div>
                <div class="manual__title">ZALJEPITE FLASTER <br> NA STOPALO</div>
                <div class="manual__desc">Ostavite preko noći</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp manual__icon-wrapp--rotate-270">
                    <div class="manual__icon-inner manual__icon-inner--3">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">3</div>
                <div class="manual__title">SKINITE FLASTERE <br> >UJUTRO</div>
                <div class="manual__desc">Noge operite vodom</div>
            </div>
        </div>
        <div class="col-xs-12 manual__notice"> * Stavite po jedan flaster na obje noge cijelu noć</div>
        <center>
            <br/><br/>
            <h3><strong>Rezultati vidljivi nakon 1 kutije!</strong></h3></center>
        <center>
            <div class="col-xs-12 manual__notice">Za najbolje rezultate preporuča se koristiti 2-3 kutije bez prekida</div>
        </center>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">"DETOX PLASTER" NIJE PRIVREMENO RJEŠENJE, VEĆ TRAJNO OSLOBAĐANJE OD ŠTETNIH OTROVA U TIJELU!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2 ThirdCircle">
                <div condensed="" roboto=""
                     style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> AKCIJA!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;"> nova cijena</div>
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
                        <div>Ljekovito, prirodno i snažno sredstvo za detoksikaciju.</div>
                        <div>Pomaže u ublažavanju glavobolje, stresa, oslobađa tijelo od tekućine, poboljšava kvalitetu sna i vraća energiju.</div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Posebna kombinacija ljekovitog kineskog bilja</li>
                        <li class="list-checked__item">Stoljećima stari recepti kineske medicine</li>
                        <li class="list-checked__item">Moderna tehnologija proizvodnje</li>
                        <li class="list-checked__item">Pokupit će sve toksine iz tijela na jedno mjesto</li>
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
                            <span>Cijena</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">{{ $prices[1]['currency'] }}</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Ime i prezime" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Broj mobitela" type="text" required/>
                            <input name="shipping_address" placeholder="Adresa" type="text" required/>
                            <input name="shipping_city" placeholder="Grad" type="text" required/>
                            <input name="shipping_zip" placeholder="Poštanski broj" type="text" required/>
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
                            <div class="freeShippingDiv">* BESPLATNA DOSTAVA</div>
                            <input class="form__submit js_submit button__text" type="submit" value="Naručite sada"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer copyright">
    <div class="container">
        <span>&copy; {{ now()->year }} {{ $product->brand_name }} | Sva prava pridržana.</span>
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
