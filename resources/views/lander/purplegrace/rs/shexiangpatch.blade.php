<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width" name="viewport"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/trigger-icon-medallion.png" type="image/png" rel="icon">
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/style.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/order_me.min.css" rel="stylesheet" media="all" type="text/css">
    <style>img[height="1"],img[width="1"]{display:none!important}input[type="radio"]{width:15px!important;height:15px!important;cursor:pointer;box-shadow:none}label{cursor:pointer;font-size:18px}@media only screen and (max-width:424px){.firstCircle{position:relative;top:60px}.doctorSection img{margin-top:-40px!important}.scroll__list{position:relative;top:30px}}@media only screen and (min-width:424px){.productSection{margin-top:-150px}.scroll__list{position:relative;top:60px}}.button__text:after{content:'*';display:inline-block;font-size:75%;vertical-align:top}</style>
    <style>
        .manual__icon-inner--2 .manual__icon {
            margin-left: 15px;
            margin-top: -20px;
            width: 166px;
            height: 169px;
            background-image: url({{ asset('/') }}naturapharmFiles/waistpatch/kneepatch2.png);
        }
        @media (min-width:768px) {
            .product__image {
                margin: 100px 0 0 50px;
            }
            #firstProductPic .product__image {
                margin: 40px 0 0 40px;
            }
            .header__title h2 {
                font-size: 68px;
            }
        }
        @media only screen and (max-width: 424px) {
            .firstCircle {
                position: relative;
                top: 20px;
            }
            .header__title h2 {
                font-size: 60px;
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-right header__title">
                <h1>Biljni flasteri protiv bola</h1>
                <h2>SHEXIANG PATCH</h2>
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
            </div>
            <div class="col-xs-12 col-md-5 product">
                <div class="product__picture" id="firstProductPic" >
                    <img alt="" class="product__image" src="{{ asset('/') }}purplegraceFiles/shexiangpatch/painpatchimg.png"/>
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
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}" class="productQuantity{{$singlePrice['quantity']}} quantity" id="productLabel{{$singlePrice['quantity']}}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="productLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <div class="freeShippingDiv">* BESPLATNA DOSTAVA</div>
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
                <div class="triggers__desc">Brzo uklanjanje bola</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--medallion">
                <div class="triggers__desc">Aktivacija mikrocirkulacije u koži</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--beep2">
                <div class="triggers__desc">Direktno lokalno delovanje</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--flower">
                <div class="triggers__desc">Postojanost flastera 12h</div>
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
                <h2 class="section__title">SIGURNO JE DA BOL U MIŠIĆIMA I ZGLOBOVIMA OSEĆA 80% LJUDI U NEKOM RAZDOBLJU ŽIVOTA!</h2>
            </div>
        </div>
        <div class="row pair">
            <div class="col-md-12 col-lg-7 text-center">
                <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/pair.png"/>
            </div>
            <div class="col-md-12 col-lg-5 section__content section__content--pair">
                <p><span>Bolovi</span>  u  <span>mišićima i zglobovima</span>  predstavljaju  <span>problem prvog stepena</span> jer zaista utiču na <span>kvalitet života.</span></p>
                <p><span>Svake godine bolovi u zglobovima napadaju sve više mlade ljude kojima predstavljaju problem i ostavljaju povremene ili trajne posledice!</span></p>
                <p>U  <span>rizičnoj grupi</span>  su ljudi koji se bave <span>teškim fizičkim poslovima, profesionalnim sportom ili provode mnogo vremena za volanom.</span></p>
                <p>Najveću rizičnu grupu čine ljudi koji vode način života koji podrazumeva <span>malo kretanja</span> i oni koji imaju <span>višak kilograma.</span></p>
            </div>
        </div>
        <div class="row scope">
            <div class="col-xs-12">
                <h2 class="section__title scope__title">Oblasti primene flastera SHEXIANG PATCH</h2>
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
                <div class="scope__icon-wrapp">
                    <div class="scope__icon-inner scope__icon-inner--traumatology">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Traumatologija i ortopedija</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp scope__icon-wrapp--rotate-270">
                    <div class="scope__icon-inner scope__icon-inner--shock-wave">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Terapija šok talasima</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section__title">BILJNI FLASTERI PROTIV BOLA "SHEXIANG PATCH"</h2>
            </div>
            <div class="col-xs-12 section__content">
                <p>Još su prvi taoisti govorili da su zdravi zglobovi glavni energetski izvor u telu  i da to obezbjeđuje normalan rad organizma.
                    <br/> Bilo kakvi poremećaji u njihovom funkcionisanju neizbežno ostavljaju tragove po zdravlje izazivajući bolesti kao što su <span>impotencija, mastopatija, hipertonija, glavobolje, hronični umor</span> i mnoge druge.</p>
                <p>Prema idejama taoističkih monaha i tradicionalnoj medicini Kine, negativna energija koja se širi po telu se može zaustaviti i izbaciti iz organizma baš u <span>zglobovima.</span></p>
            </div>
            <div class="col-xs-12 text-right quote">
                <div class="quote__text"> "Zdravi zglobovi - zdrav duh"</div>
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
                        <li class="scroll__list-item">Otklanjanje osećaja bola</li>
                        <li class="scroll__list-item">Aktivacija mikrocirkulacije u koži i potkožnom tkivu</li>
                        <li class="scroll__list-item">Bolji metabolizam ćelija</li>
                        <li class="scroll__list-item">Obnavljanje funkcionalne aktivnosti zglobova</li>
                        <li class="scroll__list-item">Normalizacija funkcionisanja organizma</li>
                        <li class="scroll__list-item">Refleksioni uticaj na unutrašnje organe</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row composition">
            <div class="col-xs-12 composition__caption">
                <h2 class="section__title">SASTAV "SHEXIANG PATCH" FLASTERA PROTIV BOLA: </h2>
                <p>Recept za flastere uključuje preko 9 lekovitih biljaka i dobijen je kao rezultat vekovnih istraživanja narodnih iscelitelja.</p>
                <p>Flasteri protiv bola se proizvode po savremenoj tehnologiji i najvišim međunarodnim normama za kvalitet. Flasteri <b>SHEXIANG PATCH</b> ne sadrže hemijske dodatke, nisu toksični, bezopasni su i nemaju štetne efekte na organizam.</p>
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
                <h2 class="section__title">"SHEXIANG PATCH" UKLANJA BOLOVE U TELU <br/> U NAJKRAĆEM MOGUĆEM ROKU!</h2>
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
                        <img alt="" class="product__image" src="{{ asset('/') }}purplegraceFiles/shexiangpatch/painpatchimg.png"/>
                    </div>
                    <div class="product__desc product__desc--bold">
                        <div>Lekovito sredstvo protiv bolova.</div>
                        <div>Pomaže u otkanjanu bolova, otoka i upala i saniranju povreda.</div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Posebna kombinacija lekovitih kineskih trava</li>
                        <li class="list-checked__item">Tradicionalni recepti kineske medicine</li>
                        <li class="list-checked__item">Savremena tehnologija proizvodnje</li>
                        <li class="list-checked__item">Dozirano i neprestano prodiranje duboko u mišić</li>
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
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}" class="productQuantity{{$singlePrice['quantity']}} quantity" id="SecondProductLabel{{$singlePrice['quantity']}}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="SecondProductLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <div class="freeShippingDiv">* BESPLATNA DOSTAVA</div>
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
                <h2 class="section__title"> ŠTA O "SHEXIANG PATCH" BILJNIM FLASTERIMA <br/> GOVORE DOKTORI?</h2>
            </div>
        </div>
        <div class="row comment doctorSection">
            <div class="col-xs-12 col-lg-8">
                <img alt="" class="comment__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/doctor.png"/>
            </div>
            <div class="col-xs-12 col-lg-4">
                <div class="comment__text">
                    <p>Najvažnije u procesu lečenja bilo kakve bolesti je zaustaviti bol i ukloniti upalni proces. Ranije je jedino rešenje bilo prepisivanje nekoliko preparata. Odvojeno za uklanjanje bola i odvojeno za lečenje bolesti što je nanosilo nepopravljivu štetu probavnom traktu i jetri. Sada tablete nisu neophodne.
                        <br/> <b>SHEXIANG PATCH</b> flasteri se odlični za otklanjanje bola i problema sa mišićima i zglobovima na sasvim prirodan način. Mogu ih koristiti čak i sportisti kojima je neophodan bezbedan način za rešavanje bola. </p>
                    <p>Od kada sam počeo preporučivati <b>SHEXIANG PATCH</b> flastere svojim pacijentima, broj pacijenata sa recidivima i pogoršanjima se značajno umanjio. Praktičnost, kvalitet i visoka delotvornost flastera čini ih sredstvom br.1 u lečenju tegoba u mišićima i zglobovima.</p>
                </div>
                <div class="comment__author"> Radovan Barać</div>
                <div class="comment__job"> Ortoped</div>
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
                <div class="comments__title"> Milena, 55 godina</div>
                <div class="comments__text">
                    <p>Dobar dan. Moja mama ima 79 godina i mučili su je strašni bolovi u mišićima i zglobovima. Od vas sam kupila 3 kutije flastera i bolovi su se umanjili, mama se mnogo bolje oseća. Samo zalepiš i čekaš da dođe do okakšanja. Mogu li da poručim još 6 kutija? Neizmerno vam hvala!</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title"> Nikola, 43 godine</div>
                <div class="comments__text">
                    <p>Od svih prednosti želim izdvojiti široki dijapazon delovanja i pristupačnu cenu. Imam problem sa kolenom koji se povremeno pogoršava, posebno u jesen i proleće i ne da mi živeti normalno. Nakon korišćenja raznih masti, našao sam flastere <b>SHEXIANG PATCH</b>. Nakon prvog tretmana, osetio sam veliko olakšanje. Bolovi ne samo da su prošli, nego se nisu ni vraćali tokom cele godine! Od tada se ovi flasteri nalaze u mojo privatnoj apoteci.</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title"> Lena, 32 godine</div>
                <div class="comments__text">
                    <p>Život bez bola - upravo tako bih nazvala period upotrebe ovih čudotvornih flastera. Povreda na treningu me je terala na stalno korišćenje tableta protiv bolova i zbog toga sam dobila probleme sa želucem. Bol je postao deo mog života, a više nisam mogla piti tablete protiv bolova. Nakon što sam probala mnogo masti, losiona i tableta, shvatila sam da neću naći bolje sredstvo protiv hroničnih bolova od <b>SHEXIANG PATCH</b> flastera. Sada znam da je moguće živeti bez bola i uzimanja tableta!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--7">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">KAKO ISPRAVNO KORISTITI FLASTER "SHEXIANG PATCH"</h2>
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
                    <br/>  IZVADITE FLASTER</div>
                <div class="manual__desc"> Kožu oprati vodom i prosušiti</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp">
                    <div class="manual__icon-inner manual__icon-inner--2">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">2</div>
                <div class="manual__title"> NALEPITI FLASTER NA
                    <br/>  BOLNO MESTO</div>
                <div class="manual__desc"> Ostaviti 12 sati<br/><b>Flasteri su čvrsti i neće spadati!</b></div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp manual__icon-wrapp--rotate-270">
                    <div class="manual__icon-inner manual__icon-inner--3">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">3</div>
                <div class="manual__title"> PAŽLJIVO SKINUTI<br/>FLASTER</div>
                <div class="manual__desc"> Oprati kožu vodom i sapunom!</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title"> "SHEXIANG PATCH" nije privremeno lečenje, nego TRAJNO REŠENJE ZA POTPUNO UKLANJANJE BOLA!</h2>
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
                        <img alt="" class="product__image" src="{{ asset('/') }}purplegraceFiles/shexiangpatch/painpatchimg.png"/>
                    </div>
                    <div class="product__desc product__desc--bold">
                        <div>Lekovito sredstvo protiv bolova.</div>
                        <div>Pomaže u otkanjanu bolova, otoka i upala i saniranju povreda.</div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Posebna kombinacija lekovitih kineskih trava</li>
                        <li class="list-checked__item">Tradicionalni recepti kineske medicine</li>
                        <li class="list-checked__item">Savremena tehnologija proizvodnje</li>
                        <li class="list-checked__item">Dozirano i neprestano prodiranje duboko u mišić</li>
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
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}" class="productQuantity{{$singlePrice['quantity']}} quantity" id="ThirdProductLabel{{$singlePrice['quantity']}}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="ThirdProductLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <div class="freeShippingDiv">* BESPLATNA DOSTAVA</div>
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
        <span>&copy;{{ now()->year }} {{ $product->brand_name }} | Sva prava zadržana.</span>
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
        if(parseInt(fsh) === 1) {
            $(this).closest('.orderformcdn').find('.freeShippingDiv').slideDown();
        } else {
            $(this).closest('.orderformcdn').find('.freeShippingDiv').slideUp();        }
    })
</script>
@include('components.pixel_footer')
<script type="text/javascript" src="{{ asset('/') }}naturapharmFiles/kneepatch/form.js"></script>
</body>
</html>
