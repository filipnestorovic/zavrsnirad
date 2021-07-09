<!DOCTYPE html>
<html>
<head>
    <meta charset=UTF-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <style>@font-face{font-family:PTSansBold;src:url({{asset('/')}}fonts/PTSansBold.eot);src:url({{asset('/')}}fonts/PTSansBoldd41d.eot?#iefix) format("embedded-opentype"),url({{asset('/')}}fonts/PTSansBold.woff2) format("woff2"),url({{asset('/')}}fonts/PTSansBold.woff) format("woff"),url({{asset('/')}}fonts/PTSansBold.ttf) format("truetype"),url({{asset('/')}}fonts/PTSansBoldd41d.svg?#PTSansBold) format("svg");font-weight:400;font-style:normal}@font-face{font-family:PTSansBoldItalic;src:url({{asset('/')}}fonts/PTSansBoldItalic.eot);src:url({{asset('/')}}fonts/PTSansBoldItalicd41d.eot?#iefix) format("embedded-opentype"),url({{asset('/')}}fonts/PTSansBoldItalic.woff2) format("woff2"),url({{asset('/')}}fonts/PTSansBoldItalic.woff) format("woff"),url({{asset('/')}}fonts/PTSansBoldItalic.ttf) format("truetype"),url({{asset('/')}}fonts/PTSansBoldItalicd41d.svg?#PTSansBoldItalic) format("svg");font-weight:400;font-style:normal}@font-face{font-family:PTSansRegular;src:url({{asset('/')}}fonts/PTSansRegular.eot);src:url({{asset('/')}}fonts/PTSansRegulard41d.eot?#iefix) format("embedded-opentype"),url({{asset('/')}}fonts/PTSansRegular.woff2) format("woff2"),url({{asset('/')}}fonts/PTSansRegular.woff) format("woff"),url({{asset('/')}}fonts/PTSansRegular.ttf) format("truetype"),url({{asset('/')}}fonts/PTSansRegulard41d.svg?#PTSansRegular) format("svg");font-weight:400;font-style:normal}@font-face{font-family:PTSansItalic;src:url({{asset('/')}}fonts/PTSansItalic.eot);src:url({{asset('/')}}fonts/PTSansItalicd41d.eot?#iefix) format("embedded-opentype"),url({{asset('/')}}fonts/PTSansItalic.woff2) format("woff2"),url({{asset('/')}}fonts/PTSansItalic.woff) format("woff"),url({{asset('/')}}fonts/PTSansItalic.ttf) format("truetype"),url({{asset('/')}}fonts/PTSansItalicd41d.svg?#PTSansItalic) format("svg");font-weight:400;font-style:normal}</style>
    <link rel=icon type="image/png" href="{{ asset('/') }}natureteaFiles/arterotea/logo.png">
    <link rel=stylesheet href="{{ asset('/') }}natureteaFiles/arterotea/bootstrap.min.css">
    <link rel=stylesheet href="{{ asset('/') }}natureteaFiles/arterotea/header.min.css">
    <link rel=stylesheet href="{{ asset('/') }}natureteaFiles/arterotea/libs.min.css">
    <link rel=stylesheet href="{{ asset('/') }}natureteaFiles/arterotea/styles.min.css">
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
</head>
<body>
<header>
    <div class=header-body>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>ARTEROTEA® — čisti krvne sudove i <br class="hidden-xs hidden-sm"> normalizuje nivo holesterola u krvi</h1>
                    <div class=subh>Arterotea će na potpuno prirodan način sniziti nivo holesterola bez hemije i štetnih dejstava.</div>
                </div>
            </div>
        </div>
        <div class="container first-screen">
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class=bulet-block>
                        <ul class=bulet-list>
                            <li>Normalizuje <span class=bold>krvni pritisak</span></li>
                            <li>Eliminiše efekte <span class=bold>ateroskleroze</span> i rizik od <span class=bold>srčanog udara</span></li>
                            <li>Vraća telu <span class=bold>energiju i pokretljivost</span></li>
                        </ul>
                    </div>
                </div><img src="{{ asset('/') }}natureteaFiles/arterotea/pack-bg.png" alt="Arterotea" class="pack hidden-xs hidden-sm"><img src="{{ asset('/') }}natureteaFiles/arterotea/pack-sm.png" alt="Arterotea" class="pack hidden-md hidden-lg"   >
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-block clearfix">
                        <form action="{{$orderRoute}}" method=POST class=form-sale>
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class=sale-circs>
                                <div class=sale-price>
                                    <div class="price old">
                                        <div class=descr>Stara cena:</div>
                                        <div class=digit> <span class=big><span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> </span><span class=price_land_curr> RSD</span></div>
                                    </div>
                                    <div class="price new or">
                                        <div class=descr>Nova cena:</div>
                                        <div class=digit><span class="big bold"><span class=price_land_s1>{{ $prices[1]['amount'] }}</span> </span><span class=price_land_curr> RSD</span><span class="big bold">*</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="sale-input clearfix">
                                <div class=input-block>
                                    <label for=n01>Ime i prezime</label>
                                    <input id=n01 name=name type=text required placeholder="">
                                    <div class=clear></div>
                                </div>
                                <div class=input-block>
                                    <label for=p01>Telefon</label>
                                    <input id=p01 name=phone type=tel required placeholder="">
                                    <div class=clear></div>
                                </div>
                                <div class=input-block>
                                    <label for=q01>Količina</label>
                                    <select id="q01" name="quantity" required>
                                        @foreach($prices as $singlePrice)
                                            <option value="{{ $singlePrice['quantity'] }}"
                                                    @if($singlePrice['is_default']) selected @endif
                                            >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} RSD)</option>
                                        @endforeach
                                    </select>
                                    <div class=clear></div>
                                </div>
                            </div>
                            <div class=sale-btn><img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-red.png" alt="Arterotea" class="arrow hidden-xs">
                                <div class=sale-btn-block>
                                    <button type=submit class="btn bold">PORUČI ODMAH</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class=medal-block>
                        <div class="medal item1"></div>
                        <div class="medal item2"></div>
                        <div class="medal item3"></div>
                        <div class="medal item4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class=stat>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Visok nivo holesterola u krvi može da izazove razna oboljenja <br class="hidden-xs hidden-sm">a ključni faktor je blagovremena prirodna prevencija</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class=stat-items>
                        <div class="stat-item item01">
                            <div class="stat-item-img hidden-md hidden-lg"><img src="{{ asset('/') }}natureteaFiles/arterotea/st01-sm.png" alt="Arterotea"></div>
                            <div class="stat-item-title bold">Moždani udar</div>
                            <div class=stat-item-text>Oštećenja <br class="hidden-xs hidden-sm">moždanih ćelija</div>
                        </div>
                        <div class="stat-item item02">
                            <div class="stat-item-img hidden-md hidden-lg"><img src="{{ asset('/') }}natureteaFiles/arterotea/st02-sm.png" alt="Arterotea"></div>
                            <div class="stat-item-title bold">Ishemija</div>
                            <div class=stat-item-text>Oslabljen <br class="hidden-xs hidden-sm">protok <br class="hidden-xs hidden-sm">krvi do srca</div>
                        </div>
                        <div class="stat-item item03">
                            <div class="stat-item-img hidden-md hidden-lg"><img src="{{ asset('/') }}natureteaFiles/arterotea/st03-sm.png" alt="Arterotea"></div>
                            <div class="stat-item-title bold">Srčani udar</div>
                            <div class=stat-item-text>Oštećenja <br class="hidden-xs hidden-sm">srčanih ćelija</div>
                        </div>
                        <div class="stat-item item04">
                            <div class="stat-item-img hidden-md hidden-lg"><img src="{{ asset('/') }}natureteaFiles/arterotea/st04-sm.png" alt="Arterotea"></div>
                            <div class="stat-item-title bold">Hipertenzija</div>
                            <div class=stat-item-text>"Zamaranje" <br class="hidden-xs hidden-sm">srca i krvnih sudova</div>
                        </div>
                        <div class="stat-item item05">
                            <div class="stat-item-img hidden-md hidden-lg"><img src="{{ asset('/') }}natureteaFiles/arterotea/st05-sm.png" alt="Arterotea"></div>
                            <div class="stat-item-title bold">Ateroskleroza</div>
                            <div class=stat-item-text>Oštećenje i <br class="hidden-xs hidden-sm">začepljenje krvnih sudova</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=waswird id=use>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Šta se događa ako se ne počne snižavati nivo holesterola?</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=waswird-item>
                        <div class=waswird-img><img src="{{ asset('/') }}natureteaFiles/arterotea/ww01.png" alt="Arterotea"></div>
                        <div class="waswird-title bold">Taloženje <br>holesterola</div>
                        <div class=waswird-text>Gojaznost, glavobolja, depresija, odsutnost</div>
                        <img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-dotted.png" alt="Arterotea" class=arrd>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=waswird-item>
                        <div class=waswird-img><img src="{{ asset('/') }}natureteaFiles/arterotea/ww02.png" alt="Arterotea"></div>
                        <div class="waswird-title bold">Visok <br>krvni pritisak</div>
                        <div class=waswird-text>Ateroskleroza, pucanje kapilara, umor, bolovi u nogama, srčani problemi</div>
                        <img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-dotted.png" alt="Arterotea" class=arrd>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=waswird-item>
                        <div class=waswird-img><img src="{{ asset('/') }}natureteaFiles/arterotea/ww03.png" alt="Arterotea"></div>
                        <div class="waswird-title bold">Zakrčenje <br>krvnih sudova</div>
                        <div class=waswird-text>Blokada krvnih sudova usled nataložene masnoće koju uzrokuje holesterol, srčani i moždani udar</div>
                    </div>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class=waswird-footer>
                        <p>Svako ko ima predispozicije za povišen <span class=bold>holesterol</span> trebalo bi da deluje preventivno kako bi se <span class=bold>izbegle veće posledice.</span></p>
                        <p>Za to već postoji <span class=bold>efikasan i vrlo pristupačno</span> sredstvo - <span class=bold>Arterotea</span> čaj</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=doc>
        <div class=container>
            <div class=doc-wrapp>
                <div class=row>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2>Mišljenje struke: Arterotea najefikasnije <br class="hidden-xs hidden-sm">eliminiše holesterol u krvi!</h2>
                    </div>
                </div>
                <div class=row>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class=text>
                            <span class=bold></span>
                            <p><span class=bold>Arterotea</span> preporučujemo svima koji imaju <span class=bold>povišen holesterol</span>, jer deluje vrlo efikasno i na <span class=bold>sasvim prirodan način.</span></p>
                            <p>Lekovi mogu da izazovu <span class=bold>kontraindikacije i druge tegobe</span>, tako da ih izbegavamo ukoliko nisu neophodni.</p>
                            <p>Izuzetno nam je drago da smo u prilici da preporučimo <span class=bold>Arterotea</span> čaj, i da se čuveni recept konačno pojavio na srpskom tržištu.</p>
                            <p class="bold autor"></p>
                            <p class=doc-subscr></p>
                            {{--<img src="{{ asset('/') }}natureteaFiles/arterotea/stamp.png" alt="Arterotea" class=docstamp   >--}}
                        </div>
                    </div>
                </div>
                <img src="{{ asset('/') }}natureteaFiles/arterotea/doc.png" alt="Arterotea" class=imgdoc>
            </div>
        </div>
    </section>
    <section class=why-select>
        <div class="container why-select-wrap"><img src="{{ asset('/') }}natureteaFiles/arterotea/pack.png" alt="Arterotea" class="pack hidden-xs hidden-sm"   >
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Zašto je preko <nobr>15 000</nobr> ljudi već odabralo Arterotea?</h2>
                </div>
            </div>

            <span class=bold></span>

            <div class="row first-row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="why-select-item left">
                        <div class="why-select-item-img item01"></div>
                        <div class="why-select-item-title bold">100% prirodno</div>
                        <div class=why-select-item-text><span class=bold>Jaka prirodna kompozicija</span> od samoniklog bilja sakupljenog u <span class=bold>ekološki čistim</span> delovima sveta.
                            Ne sadrži <span class=bold>GMO, konzervanse i boje.</span></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="why-select-item rigth">
                        <div class="why-select-item-img item02"></div>
                        <div class="why-select-item-title bold">Recept najvećih stručnjaka</div>
                        <div class=why-select-item-text>Čaj su patentirali <span class=bold>najveći svetski stručnjaci</span>, pažljivo birajući svaki sastojak. Na našem tržištu ovo je potpuno novi proizvod!</div>
                    </div>
                </div>
            </div>
            <div class="row second-row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="why-select-item left">
                        <div class="why-select-item-img item03"></div>
                        <div class="why-select-item-title bold">Netoksičan</div>
                        <div class=why-select-item-text>Apsolutno je <span class=bold>bezopasan po zdravlje</span>, za razliku od toksičnih lekova.
                            Nema <span class=bold>kontraindikacije i nije potreban lekarski recept.</span></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="why-select-item rigth">
                        <div class="why-select-item-img item04"></div>
                        <div class="why-select-item-title bold">Nije potrebna dijeta</div>
                        <div class=why-select-item-text>Nema potrebe za <span class=bold>strogom dijetom</span> ili bilo kakvim <span class=bold>ograničenjima</span> uobičajenog načina života.</div>
                    </div>
                </div>
            </div>
            <div class="row thrid-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="why-select-item center">
                        <div class="why-select-item-img item05"></div>
                        <div class="why-select-item-title bold">Pouzdan rezultat</div>
                        <div class=why-select-item-text><span class=bold>Arteorotea</span> ne samo da čisti <span class=bold>krvne sudove</span>, već stvara i uslove koji sprečavaju <span class=bold>povećanje i
                            taloženje holesterola</span> u budućnosti.</div>
                    </div>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="why-select-footer bold">15 000 ljudi ne može pogrešiti - Arterotea zaista deluje!</div>
                </div>
            </div>
        </div>
    </section>
    <section class=clinical-test>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Arterotea pomaže u prevenciji holesterola na <br class="hidden-xs hidden-sm">sledeća 3 načina</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=action-item>
                        <div class=action-img><img src="{{ asset('/') }}natureteaFiles/arterotea/ok.png" alt="Arterotea"></div>
                        <div class="action-title bold">1. Razgrađuje holesterol</div>
                        <div class=action-text> na zidovima krvnih sudova</div>
                        <img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-dotted-white.png" alt="Arterotea" class=arrd>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=action-item>
                        <div class=action-img><img src="{{ asset('/') }}natureteaFiles/arterotea/ok.png" alt="Arterotea"></div>
                        <div class="action-title bold">2. Čisti i uklanja</div>
                        <div class=action-text> višak holesterola iz tela</div>
                        <img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-dotted-white.png" alt="Arterotea" class=arrd>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=action-item>
                        <div class=action-img><img src="{{ asset('/') }}natureteaFiles/arterotea/ok.png" alt="Arterotea"></div>
                        <div class="action-title bold">3. Obnavlja elastičnost</div>
                        <div class=action-text> arterija i krvnih sudova</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=sform>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Hipertenzija, ateroskleroza i rizik od srčanog udara <br class="hidden-xs hidden-sm">nestaće ukoliko se uzima Arterotea čaj na vreme!</h2>
                    <div class="form-block clearfix">
                        <form action="{{$orderRoute}}" method=POST class="form-sale form2">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class=clear></div>
                            <div class=sale-price>
                                <div class="price old" style="margin-top: 25px;">
                                    <div class=descr>Stara cena:</div>
                                    <div class=digit> <span class=big><span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> </span><span class=price_land_curr> RSD</span></div>
                                </div>
                            </div>
                            <div class="img-absolute">
                                <img src="{{ asset('/') }}natureteaFiles/arterotea/pack2.png"/>
                            </div>
                            <div class=sale-input>
                                <div class=input-block>
                                    <label for=n03>Ime i prezime</label>
                                    <input id=n03 name=name type=text required placeholder="">
                                    <div class=clear></div>
                                </div>
                                <div class=input-block>
                                    <label for=p03>Telefon</label>
                                    <input id=p03 name=phone type=tel required placeholder="">
                                    <div class=clear></div>
                                </div>
                                <div class=input-block>
                                    <label for=q01>Količina</label>
                                    <select id="q01" name="quantity" required>
                                        @foreach($prices as $singlePrice)
                                            <option value="{{ $singlePrice['quantity'] }}"
                                                    @if($singlePrice['is_default']) selected @endif
                                            >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} RSD)</option>
                                        @endforeach
                                    </select>
                                    <div class=clear></div>
                                </div>
                            </div>
                            <div class=clear></div>
                            <div class=sale-btn><img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-red.png" alt="Arterotea" class="arrow hidden-xs">
                                <div class=attention-block>
                                    <div class=sale-price>
                                        <div class="price new or">
                                            <div class=descr>Nova cena:</div>
                                            <div class=digit><span class="big bold"><span class=price_land_s1>{{ $prices[1]['amount'] }}</span> </span><span class=price_land_curr> RSD</span><span class="big bold">*</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=sale-btn-block>
                                    <button type=submit class="btn ttu bold">PORUČI ODMAH</button>
                                    <br>
                                </div>
                                <div class=clear></div>
                            </div>
                        </form>
                    </div>
                    <div class="form-block clearfix">
                        <form action="{{$orderRoute}}" method=POST class="form-sale form3">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class=sale-circs>
                                <div class=sale-price>
                                    <div class="price old">
                                        <div class=descr>Stara cena:</div>
                                        <div class=digit> <span class=big><span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> </span><span class=price_land_curr> RSD</span></div>
                                    </div>
                                    <div class="price new or">
                                        <div class=descr>Nova cena:</div>
                                        <div class=digit><span class="big bold"><span class=price_land_s1>{{ $prices[1]['amount'] }}</span> </span><span class=price_land_curr> RSD</span><span class="big bold">*</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="sale-input clearfix">
                                <div class=input-block>
                                    <label for=n01>Ime i prezime</label>
                                    <input id=n01 name=name type=text required placeholder="">
                                    <div class=clear></div>
                                </div>
                                <div class=input-block>
                                    <label for=p01>Telefon</label>
                                    <input id=p01 name=phone type=tel required placeholder="">
                                    <div class=clear></div>
                                </div>
                                <div class=input-block>
                                    <label for=q01>Količina</label>
                                    <select id="q01" name="quantity" required>
                                        @foreach($prices as $singlePrice)
                                            <option value="{{ $singlePrice['quantity'] }}"
                                                    @if($singlePrice['is_default']) selected @endif
                                            >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} RSD)</option>
                                        @endforeach
                                    </select>
                                    <div class=clear></div>
                                </div>
                            </div>
                            <div class=sale-btn><img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-red.png" alt="Arterotea" class="arrow hidden-xs">
                                <div class=sale-btn-block>
                                    <button type=submit class="btn bold">PORUČI ODMAH</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=formula id=sost>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Arterotea formula bazirana je <br class="hidden-xs hidden-sm hidden-md">na sledećim sastojcima:</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="f-item left">
                        <div class=f-item-text>
                            <div class="f-item-header bold">Артишок <br>Cynara cardunculus</div>
                            <div class=f-item-body>Нормализует триглицериды, приводящие к атеросклерозу, слабоумию и потере памяти.</div>
                        </div>
                        <div class=f-item-img><img src="{{ asset('/') }}natureteaFiles/arterotea/s01.png" alt="Arterotea"></div>
                        <div class=clear></div>
                        {{--<img src="{{ asset('/') }}natureteaFiles/arterotea/arr-black.jpg" alt="Arterotea" class="arrd arrd01">--}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="f-item right">
                        <div class=f-item-text>
                            <div class="f-item-header bold">Диоскорея кавказская <br>Dioscorea caucasica</div>
                            <div class=f-item-body>Снижает уровень холестерина, предотвращает отложение липидов в артериях.</div>
                        </div>
                        <div class=f-item-img><img src="{{ asset('/') }}natureteaFiles/arterotea/s02.png" alt="Arterotea"></div>
                        <div class=clear></div>
                        {{--<img src="{{ asset('/') }}natureteaFiles/arterotea/arr-black.jpg" alt="Arterotea" class="arrd arrd02">--}}
                    </div>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="f-item left">
                        <div class=f-item-text>
                            <div class="f-item-header bold">Софора японская <br>Callisia fragrans</div>
                            <div class=f-item-body>Восстанавливает эластичность кровеносных сосудов, предотвращает инсульт и атеросклероз</div>
                        </div>
                        <div class=f-item-img><img src="{{ asset('/') }}natureteaFiles/arterotea/s03.png" alt="Arterotea"></div>
                        <div class=clear></div>
                        {{--<img src="{{ asset('/') }}natureteaFiles/arterotea/arr-black.jpg" alt="Arterotea" class="arrd arrd03">--}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="f-item right">
                        <div class=f-item-text>
                            <div class="f-item-header bold">Масло Амаранта <br>Amaranthus cruentus</div>
                            <div class=f-item-body>Популярное на Западе, но почти неизвестное в России средство регуляции холестерина и давления.</div>
                        </div>
                        <div class=f-item-img><img src="{{ asset('/') }}natureteaFiles/arterotea/s04.png" alt="Arterotea"></div>
                        <div class=clear></div>
                        {{--<img src="{{ asset('/') }}natureteaFiles/arterotea/arr-black.jpg" alt="Arterotea" class="arrd arrd04">--}}
                    </div>
                </div>
                <div class="n100">
                    <img src="{{ asset('/') }}natureteaFiles/arterotea/100natur.png" alt="Arterotea">
                </div>
            </div>

            {{--<div class=row>--}}
                {{--<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">--}}
                    {{--<div class="f-item left">--}}
                        {{--<div class=f-item-text>--}}
                            {{--<div class="f-item-header bold">Чертополох святой <br>Carduus nutans</div>--}}
                            {{--<div class=f-item-body>Удаляет из организма лишний холестерин и нормализует его уровень</div>--}}
                        {{--</div>--}}
                        {{--<div class=f-item-img><img src="{{ asset('/') }}natureteaFiles/arterotea/f05.png" alt="Arterotea"></div>--}}
                        {{--<div class=clear></div><img src="{{ asset('/') }}natureteaFiles/arterotea/arr-black.jpg" alt="Arterotea" class="arrd arrd05">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">--}}
                    {{--<div class="n100">--}}
                        {{--<img src="{{ asset('/') }}natureteaFiles/arterotea/100natur.png" alt="Arterotea">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </section>
    <section class=action>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Lako i pogodno za uzimanje</h2>
                </div>
            </div>
            <span class=bold></span>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=easy-item>
                        <div class=easy-img><img src="{{ asset('/') }}natureteaFiles/arterotea/e01.png" alt="Arterotea"></div>
                        <div class="easy-title bold">Ежедневно</div>
                        <div class=easy-text>Supenu kašiku čajne mešavine preliti sa 2dcl vrele vode i promešati.</div>
                        <img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-dotted-white.png" alt="Arterotea" class=arrd>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=easy-item>
                        <div class=easy-img><img src="{{ asset('/') }}natureteaFiles/arterotea/e02.png" alt="Arterotea"></div>
                        <div class="easy-title bold">Курсом</div>
                        <div class=easy-text>Piti po jedan čaj ujutru i uveče.</div>
                        <img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-dotted-white.png" alt="Arterotea" class=arrd>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class=easy-item>
                        <div class=easy-img><img src="{{ asset('/') }}natureteaFiles/arterotea/e03.png" alt="Arterotea"></div>
                        <div class="easy-title bold">Без ограничений</div>
                        <div class=easy-text>Jako je važno popiti i talog sa dna šoljice i ispiti do kraja.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sform sform2">
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Hipertenzija, ateroskleroza i rizik od srčanog udara <br class="hidden-xs hidden-sm">nestaće ukoliko se uzima Arterotea čaj na vreme!</h2>
                    <div class="form-block clearfix">
                        <form action="{{$orderRoute}}" method=POST class="form-sale form2">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class=clear></div>
                            <div class=sale-price>
                                <div class="price old" style="margin-top: 25px;">
                                    <div class=descr>Stara cena:</div>
                                    <div class=digit> <span class=big><span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> </span><span class=price_land_curr> RSD</span></div>
                                </div>
                            </div>
                            <div class="img-absolute">
                                <img src="{{ asset('/') }}natureteaFiles/arterotea/pack2.png"/>
                            </div>
                            <div class=sale-input>
                                <div class=input-block>
                                    <label for=n03>Ime i prezime</label>
                                    <input id=n03 name=name type=text required placeholder="">
                                    <div class=clear></div>
                                </div>
                                <div class=input-block>
                                    <label for=p03>Telefon</label>
                                    <input id=p03 name=phone type=tel required placeholder="">
                                    <div class=clear></div>
                                </div>
                                <div class=input-block>
                                    <label for=q01>Količina</label>
                                    <select id="q01" name="quantity" required>
                                        @foreach($prices as $singlePrice)
                                            <option value="{{ $singlePrice['quantity'] }}"
                                                    @if($singlePrice['is_default']) selected @endif
                                            >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} RSD)</option>
                                        @endforeach
                                    </select>
                                    <div class=clear></div>
                                </div>
                            </div>
                            <div class=clear></div>
                            <div class=sale-btn><img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-red.png" alt="Arterotea" class="arrow hidden-xs">
                                <div class=attention-block>
                                    <div class=sale-price>
                                        <div class="price new or">
                                            <div class=descr>Nova cena:</div>
                                            <div class=digit><span class="big bold"><span class=price_land_s1>{{ $prices[1]['amount'] }}</span> </span><span class=price_land_curr> RSD</span><span class="big bold">*</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=sale-btn-block>
                                    <button type=submit class="btn ttu bold">PORUČI ODMAH</button>
                                    <br>
                                </div>
                                <div class=clear></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=faq>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Često postavljana pitanja</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class=faq-list>
                        <li>
                            <div class="faq-q bold"><span>1. Imam 36 godina. Da li je tačno da možda ne znam da imam visok holesterol?</span></div>
                            <div class=faq-a>Da. Ali to možete pretpostaviti po brojnim simptomima - poput smanjenog nivoa energije, visokog krvnog pritiska,
                                prekomerne težine, vrtoglavice itd. Najbolje i najekonomičnije rješenje je Arterotea čaj jer gotovo 90% ljudi bez obzira na dob,
                                ima povišen holesterol.</div>
                        </li>
                        <li>
                            <div class="faq-q bold"><span>2. Kako se Arterotea razlikuje od ostalih lekova za holesterol?</span></div>
                            <div class=faq-a>Korištenje raznih lekova može uzrokovati ogroman broj zdravstvenih problema - poremećaje nadbubrežne žlezde, jetre,
                                katarakte. Za razliku od sintetičkih sredstava, Arterotea je neškodljiv za zdravlje.
                                Reguliše nivo holesterola sasvim prirodno - pomažući telu da to učini samostalno.</div>
                        </li>
                        <li>
                            <div class="faq-q bold"><span>3. Zašto bi se Arterotea trebao koristiti kao terapija?</span></div>
                            <div class=faq-a>Preporučeno je da se Arterotea koristiti kao terapija, bez pauza,
                                radi akumuliranja potrebne koncentracije aktivnih sastojaka u krvi kako bi rezultat bio 100% efikasan.</div>
                        </li>
                        <li>
                            <div class="faq-q bold"><span>4. Je li istina da Arterotea pomaže kod ateroskleroze i hipertenzije?</span></div>
                            <div class=faq-a>Zaista, Arterotea ima ove učinke zbog činjenice da svi biljni sastojci imaju svojstvo da uklanjaju i
                                sprečavaju taloženje masnoće u krvnim sudovima. To sprečava razvoj ateroskleroze, i normalizuje krvni pritisak.</div>
                        </li>
                        <li>
                            <div class="faq-q bold"><span>5. Zašto je tako niska cena?</span></div>
                            <div class=faq-a>Cena Arterotea čaja mnogo je niža od cena raznih terapija, poseta lekaru i kupovine skupih lekova.
                                Takva pristupačna cena formirana je samo za prodaju proizvoda u Srbiji i Rusiji i smatra se socijalnim
                                a ne komercijalnim projektom.</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=reviews id=rev>
        <div class=text-reviews>
            <div class=container>
                <div class=row>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="text-reviews-items owl-carousel">
                            <div class=text-reviews-item>
                                <div class=text-reviews-photo><img src="{{ asset('/') }}natureteaFiles/arterotea/tr01.png" alt="Arterotea"></div>
                                <div class=text-reviews-text>
                                    <div class="text-reviews-title bold">Ana, 36 godina, <span class=kma-e-test>Mrčajevci</span></div>
                                    <div class=text-reviews-body>Dijagnostifikovan mi je visok holesterol, glava me je često bolela, puls mi je bio povišen. Dobro sam se hranila i nije mi bilo jasno odakle dolazi holesterol.
                                        Pomogao mi je prirodni čaj Arterotea. Pročitao sam recenzije o njemu na forumu - i odmah sam odlučio da ga kupim. Prilično brzo normalizirane krvni pritisak.
                                        Nema lekova, nema iscrpljujućih dijeta. Jako sam zadovoljna ovim proizvodom.</div>
                                </div>
                            </div>
                            <div class=text-reviews-item>
                                <div class=text-reviews-photo><img src="{{ asset('/') }}natureteaFiles/arterotea/tr02.png" alt="Arterotea"></div>
                                <div class=text-reviews-text>
                                    <div class="text-reviews-title bold">Tatjana, 44 godine, Topola</div>
                                    <div class=text-reviews-body>Doktor mi je propisao lekove za snižavanje holesterola, ali sam znala da je to opasna stvar. Zahvaljujući prijateljima, čula sam za Arterotea.
                                        Potpuno je prirodan i bez ikakvih kontraindikacija. Pila sam ga oko 1 mesec. Testovi su dobri, holesterol se normalizovao. Sad se uopšte ne žalim na zdravlje.</div>
                                </div>
                            </div>
                            <div class=text-reviews-item>
                                <div class=text-reviews-photo><img src="{{ asset('/') }}natureteaFiles/arterotea/tr03.png" alt="Arterotea"></div>
                                <div class=text-reviews-text>
                                    <div class="text-reviews-title bold">Ivan Savić, 52, Nova Varoš</div>
                                    <div class=text-reviews-body>Kad mi je prošle godine dijagnostifikovan povišen holesterol, moj terapeut mi je predložio dijetu i lekove. Pokušala sam, ali sam se osjećala jako loše zbog slabe hrane u kombinaciji sa lekovima.
                                        Hvala kćeri, što si mu kupila Arterotea. Nakon nekoliko nedelja, holesterol je značajno opao i sada je u normalnim vrednostima.
                                        Moja supruga takođe je uzela Arterotea čaj. Zadovoljni smo rezultatom i preporučujemo ga svima koji se ne žele unositi hemiju u svoj organizam.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=future>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Zamislite koliko je bolji život <br class="hidden-xs hidden-sm">kada je holesterol normalan!</h2>
                </div>
            </div>
            <span class=bold></span>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class=futule-list>
                        <li>Nema više straha da povišeni holesterol svakodnevno tiho i potmulo uništava krvne sudove i srce</li>
                        <li>Očekivani životni vek sa normalnim nivoom holesterola je statistički duži za 15 - 20 godina</li>
                        <li>U odraslom dobu ćete voditi aktivan i energičan način života, a ne ležati i biti tromi.</li>
                        <li>Sačuvaćete bistar um i pamet do duboke starosti.</li>
                        <li>Osećaćete se mlado i energično, jer sav negativni holesterol nestaje iz organizma.
                            Krvni sudovi su ponovo zdravi i elastični, a pritisak normalan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=how id=dost>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Kako poručiti Arterotea čaj?</h2>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class=how-item>
                        <div class="how-img first"></div>
                        <div class="how-title bold">Poručivanje</div>
                        <div class=how-text>Popunite formu kontakt podacima i izaberite željenu količinu</div>
                        <div class=arrdw></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class=how-item>
                        <div class="how-img second"></div>
                        <div class="how-title bold">Dostava</div>
                        <div class=how-text>Poslaćemo proizvod brzom poštom u roku od 1-2 radna dana</div>
                        <div class=arrdw></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class=how-item>
                        <div class="how-img thrid"></div>
                        <div class="how-title bold">Plaćanje</div>
                        <div class=how-text>Proizvod plaćate tek po preuzimanju od kurira</div>
                        <div class=arrdw></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class=how-item>
                        <div class="how-img fourth"></div>
                        <div class="how-title bold">Korišćenje</div>
                        <div class=how-text>Možete početi sa korišćenjem našeg čaja!</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=s-end>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>ARTEROTEA® — čisti krvne sudove i <br class="hidden-xs hidden-sm">normalizuje nivo holesterola u krvi</h2>
                    <div class=subh>Arterotea će na potpuno prirodan način sniziti nivo holesterola bez hemije i štetnih dejstava.</div>
                </div>
            </div>
        </div>
        <div class="container first-screen">
            <div class=row>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class=bulet-block>
                        <ul class=bulet-list>
                            <li>Normalizuje <span class=bold>krvni pritisak</span></li>
                            <li>Eliminiše efekte <span class=bold>ateroskleroze</span> i rizik od <span class=bold>srčanog udara</span></li>
                            <li>Vraća telu <span class=bold>energiju i pokretljivost</span></li>
                        </ul>
                    </div>
                </div><img src="{{ asset('/') }}natureteaFiles/arterotea/pack-bg.png" alt="Arterotea" class="pack hidden-xs hidden-sm">
                <img src="{{ asset('/') }}natureteaFiles/arterotea/pack-sm.png" alt="Arterotea" class="pack hidden-md hidden-lg">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-block clearfix">
                        <form action="{{$orderRoute}}" method=POST class=form-sale>
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class=sale-circs>
                                <div class=sale-price>
                                    <div class="price old">
                                        <div class=descr>Stara cena:</div>
                                        <div class=digit> <span class=big><span class=price_land_s4>{{ $prices[1]['originalPrice'] }}</span> </span><span class=price_land_curr> RSD</span></div>
                                    </div>
                                    <div class="price new or">
                                        <div class=descr>Nova cena:</div>
                                        <div class=digit><span class="big bold"><span class=price_land_s1>{{ $prices[1]['amount'] }}</span> </span><span class=price_land_curr> RSD</span><span class="big bold">*</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="sale-input clearfix">
                                <div class=input-block>
                                    <label for=n01>Ime i prezime</label>
                                    <input id=n01 name=name type=text required placeholder="">
                                    <div class=clear></div>
                                </div>
                                <div class=input-block>
                                    <label for=p01>Telefon</label>
                                    <input id=p01 name=phone type=tel required placeholder="">
                                    <div class=clear></div>
                                </div>
                                <div class=input-block>
                                    <label for=q01>Količina</label>
                                    <select id="q01" name="quantity" required>
                                        @foreach($prices as $singlePrice)
                                            <option value="{{ $singlePrice['quantity'] }}"
                                                    @if($singlePrice['is_default']) selected @endif
                                            >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} RSD)</option>
                                        @endforeach
                                    </select>
                                    <div class=clear></div>
                                </div>
                            </div>
                            <div class=sale-btn><img src="{{ asset('/') }}natureteaFiles/arterotea/arrow-red.png" alt="Arterotea" class="arrow hidden-xs">
                                <div class=sale-btn-block>
                                    <button type=submit class="btn bold">PORUČI ODMAH</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class=medal-block>
                        <div class="medal item1"></div>
                        <div class="medal item2"></div>
                        <div class="medal item3"></div>
                        <div class="medal item4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
{{--<footer>--}}
    {{--<div class=container style="text-align: center;">--}}
    {{--</div>--}}
{{--</footer>--}}
<script>
        $(document).ready(function(){
            $(".faq-q").on("click", function() {
                $(".faq-a").stop().animate({
                    paddingTop: 0,
                    height: 0
                }, 500);
                let t = $(this).siblings(".faq-a");
                0 == t.height() ? (h = t.css("height", "auto").height(), t.height(0), t.stop().animate({
                    paddingTop: "24px",
                    height: h + 24
                }, 500)) : t.stop().animate({
                    paddingTop: 0,
                    height: 0
                }, 500)
            });

            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: !0,
                nav: !0,
                navText: [, ]
            });
        });
</script>
<script src="{{ asset('/') }}natureteaFiles/arterotea/libs.min.js"></script>
</body>
</html>
