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
                <h1>Gyógynövényes méregtelenítő tapaszok</h1>
                <h2>DETOX</h2>
                <span>"Kínai bölcsesség, modern technológia"</span>
            </div>
        </div>
        <div class="row">
            <div class="labelmain firstCircle">
                <div condensed="" roboto="" style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red">AKCIÓ!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;">új ár</div>
                </div>
                <div class="line4 price_land_s1" style="margin-top:0px;">{{ $prices[1]['amount'] }}</div>
                <div class="line5 price_land_curr">{{ $prices[1]['currency'] }}</div>
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
                        <h3>FIGYELEM, AKCIÓ!</h3>
                        <span>40% KEDVEZMÉNY</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Ár</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">{{ $prices[1]['currency'] }}</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Név és vezetéknév" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefon" type="text" required/>
                            <input name="shipping_address" placeholder="Lakcim" type="text" required/>
                            <input name="shipping_city" placeholder="Város" type="text" required/>
                            <input name="shipping_zip" placeholder="Postai irányítószám" type="text" required/>
                            <div>
                                @foreach($prices as $singlePrice)
                                    <input type="hidden" id="product{{ $singlePrice['quantity'] }}" value="{{ $singlePrice['originalPrice'] }}" placeholder="{{ $singlePrice['amount'] }}"/>
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}" class="productQuantity{{$singlePrice['quantity']}} quantity" id="productLabel{{$singlePrice['quantity']}}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="productLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} {{ $prices[1]['currency'] }})
                                        @if($singlePrice['is_free_shipping']) * @endif
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <div class="freeShippingDiv">* INGYENES SZÁLLÍTÁS</div>
                            <input class="form__submit js_submit button__text" type="submit" value="Rendeljen most"/>
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
                <div class="triggers__desc">Több száz éves recept</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--gate">
                <div class="triggers__desc">Aktiválja a bőr mikrokeringését</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--medallion">
                <div class="triggers__desc">Kiválasztja a vízfelesleget a testből</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--beep2">
                <div class="triggers__desc">Hatások széles skálája</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--flower">
                <div class="triggers__desc">A szervezet teljes méregtelenítése</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--ying-yang">
                <div class="triggers__desc">100%-os hatékonyság és biztonság</div>
            </div>
        </div>
    </div>
</div>
<section class="section section--1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section__title">A MAI VILÁGBAN AJÁNLATOS HAVONTA LEGALÁBB EGYSZER MÉREGTELENÍTENI A SZERVEZETET, HOGY A TEST REGENERÁLÓDJON</h2>
            </div>
        </div>
        <div class="row pair">
            <div class="col-md-12 col-lg-7 text-center">
                <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki2.png"/>
            </div>
            <div class="col-md-12 col-lg-5 section__content section__content--pair">
                <p>Ma szinte mindannyian egészségtelen életmódot élünk, és nagyon fontos, hogy rendszeresen méregtelenítsük a testünket. A méregtelenítő tapaszok növényi kivonatokból készülnek egy hagyományos kínai recept alapján, és kiválasztják a felesleges folyadékot és toxinokat a szervezetből az akupunktúrás pontokon keresztül.</p>
                <p>A <span>Kinoki tapaszok</span> enyhítik a feszültséget és a fáradtságot, javítják az alvás minőségét, tisztítják a bőrt és jótékony hatással vannak az általános egészségre. Ezekkel a tapaszokkal a szervezetben és a véráramban felhalmozódó toxinok gyorsan kiürülnek a szervezetből.</p>
                <p></p>
                <p></p>
            </div>
        </div>
        <div class="row scope">
            <div class="col-xs-12">
                <h2 class="section__title scope__title">A "KINOKI" TAPASZOK ALKALMAZÁSI TERÜLETEI</h2>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp">
                    <div class="scope__icon-inner scope__icon-inner--pediatrics">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Reumatológia</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp scope__icon-wrapp--rotate-90">
                    <div class="scope__icon-inner scope__icon-inner--lymphology">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Limfológia</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp scope__icon-wrapp--rotate-180">
                    <div class="scope__icon-inner scope__icon-inner--neuroscience">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Neurológia</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section__title">A "KINOKI" TAPASZOK SEGÍTSÉGÉVEL MINDÖSSZE 5 NAP ALATT MEGSZABADULHAT A TESTÉBEN FELHALMOZÓDOTT TOXINOKTÓL</h2>
            </div>
            <div class="col-xs-12 section__content">
                <p>Még az első taoisták is azt mondták, hogy <span>a toxinok a test energiahiányának fő okozói.</span></p>
                <p>A toxinok túlzott mennyiségben elkerülhetetlenül rossz befolyással vannak <span>az egészségünkre vagy egy adott szervre, és olyan betegségeket okoznak, mint az impotencia, az emlődaganat, a magas vérnyomás, a fejfájás, a krónikus fáradtság stb.</span></p>
                <p>A taoista szerzetesek és a hagyományos kínai orvoslás elképzelései szerint <span>a testben terjedő negatív energia megállítható</span> méregtelenítés segítségével, és megszakítható annak mozgása az egész testben.</p>
            </div>
            <div class="col-xs-12 text-right quote">
                <div class="quote__text">"Ép lélek ép testben"</div>
                <div class="quote__author">Sun Shu-Min</div>
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
                    <p class="scroll__text">A tapasz gyógyító hatása a következő hatásokon alapul:</p>
                    <ul class="scroll__list">
                        <li class="scroll__list-item">A szervezet méregtelenítése</li>
                        <li class="scroll__list-item">A fejfájás és a stressz enyhítése</li>
                        <li class="scroll__list-item">A test fiatalítása</li>
                        <li class="scroll__list-item">Az alvásminőség javítása</li>
                        <li class="scroll__list-item">Pozitív hatás a belső szervekre</li>
                        <li class="scroll__list-item">Kellemetlen szagok megelőzése</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row composition">
            <div class="col-xs-12 composition__caption">
                <h2 class="section__title">A "KINOKI" MÉREGTELENÍTŐ TAPASZOK ÖSSZETÉTELE:</h2>
                <p>A tapasz receptje több mint 9 gyógynövényt tartalmaz, és a kínai hagyományos gyógyítók több évszázadokon át felhalmozódott tudásának és tapasztalatának eredménye.</p>
                <p>A méregtelenítő tapaszokat a modern technológia és a legszigorúbb nemzetközi minőségi szabványok szerint gyártják. A Kinoki tapaszok nem tartalmaznak vegyi adalékanyagokat, ártalmatlanok az emberi szervezet számára.</p>
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
                <div class="composition__desc">kaukázusi medvetalp</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-90">
                    <div class="composition__icon-inner composition__icon-inner--cibotium">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">sáfrány</div>
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
                <div class="composition__desc">vadgyömbér</div>
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
                <div class="composition__desc">koponyasapkák gyökere </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">A "KINOKI" KIVÁLASZTJA A TESTEDBŐL A TOXINOKAT <br> A LEHETŐ LEGRÖVIDEBB IDŐ ALATT!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2">
                <div condensed="" roboto="" style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> AKCIÓ!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;"> új ár</div>
                </div>
                <div class="line4 price_land_s1" style="margin-top:0px;">{{ $prices[1]['amount'] }}</div>
                <div class="line5 price_land_curr">{{ $prices[1]['currency'] }}</div>
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
                        <div>Gyógyító, természetes és erős méregtelenítő szer.</div>
                        <div>Segít enyhíteni a fejfájást és a stresszt, megszabadítja a testet a felesleges folyadékoktól, javítja az alvás minőségét és helyreállítja az energia keringését a testben.</div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Kínai gyógynövények speciális kombinációja</li>
                        <li class="list-checked__item">A kínai orvoslás több száz éves receptjei</li>
                        <li class="list-checked__item">Modern gyártási technológia</li>
                        <li class="list-checked__item">Egy helyről kiszívja az összes mérget a testből</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>FIGYELEM, AKCIÓ!</h3>
                        <span>40% KEDVEZMÉNY</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Ár</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">{{ $prices[1]['currency'] }}</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Név és vezetéknév" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefon" type="text" required/>
                            <input name="shipping_address" placeholder="Lakcim" type="text" required/>
                            <input name="shipping_city" placeholder="Város" type="text" required/>
                            <input name="shipping_zip" placeholder="Postai irányítószám" type="text" required/>
                            <div>
                                @foreach($prices as $singlePrice)
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}" class="productQuantity{{$singlePrice['quantity']}} quantity" id="SecondProductLabel{{$singlePrice['quantity']}}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="SecondProductLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} {{ $prices[1]['currency'] }})
                                        @if($singlePrice['is_free_shipping']) * @endif
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <div class="freeShippingDiv">* INGYENES SZÁLLÍTÁS</div>
                            <input class="form__submit js_submit button__text" type="submit" value="Rendeljen most"/>
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
                <h2 class="section__title">MIT MONDANAK AZ ORVOSOK A "KINOKI" GYÓGYNÖVÉNYES MÉREGTELENÍTŐ TAPASZOKRÓL</h2>
            </div>
        </div>
        <div class="row comment doctorSection">
            <div class="col-xs-12 col-lg-8">
                <img alt="" class="comment__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/doctor.png"/>
            </div>
            <div class="col-xs-12 col-lg-4">
                <div class="comment__text">
                    <p>Bármilyen betegség kezeléséről van szó, a legfontosabb mindig az, hogy megszabaduljunk a testünkben lévő toxinoktól, amelyeket a szervezet az egészségtelen életmód miatt halmoz fel. Korábban az egyetlen megoldás a méregtelenítő készítmények felírása volt, amelyek negatívan hatnak a májra és az emésztőrendszerre.</p>
                    <p>Voltak olyan pácienseim, akik fejfájásra, krónikus fáradtságra, gerincfájdalmakra panaszkodtak, mindez a szervezetben felhalmozódott toxinok miatt, amelyek megzavarták a normál testi funkciókat.</p>
                    <p>Amikor elkezdtem ajánlani pácienseimnek a KINOKI tapaszokat, egy idő után nagy részüknek lényegesen kevesebb problémája volt, és a legtöbb probléma teljesen megszűnt. A KINOKI tapaszok kiválóan alkalmasak a méreganyagok természetes eltávolítására a szervezetből, és mindenkinek ajánlom a méregtelenítést legalább havonta egyszer.</p>
                </div>
                <div class="comment__author"></div>
                <div class="comment__job"> Reumatológus</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--6">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">VÁSÁRLÓINK VÉLEMÉNYEI</h2>
            </div>
        </div>
        <div class="row comments">
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Eliza, 21 éves</div>
                <div class="comments__text">
                    <p>Sziasztok. Sokat dolgozom az irodában, és problémáim voltak az izomfájdalommal, nehéznek éreztem a lábaimat, nem volt elég energiám és nagyon morcos voltam egész nap. Az interneten rátaláltam a KINOKI tapaszokra és megpróbáltam méregteleníteni a testemet. Két doboz után a zavaró tünetek teljesen eltűntek, és már 3 hónapja remekül érzem magam. Most havi egy dobozzal elfogyasztok megelőzésként, mert nem akarom, hogy újra megtörténjen ez a nehéz időszak.</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Márta, 65 éves</div>
                <div class="comments__text">
                    <p>Éveken át problémám volt a felesleges folyadékkal a szervezetemben, és folyamatosan be voltak dagadva a lábaim. Mindent kipróbáltam, de a gyógyszerek gyakran más problémákat is okoztak. A lányom vett nekem Kinokit, és ez az egyetlen termék, ami segített. A gyógyszeres dobozomban tartom, nagyobb mennyiségben. Köszönöm!</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Zoltán, 32 éves</div>
                <div class="comments__text">
                    <p>Gyakran eszem gyorskaját és édességet, sok szénsavas szörpöt iszom és cigizek is. Idővel olyan nehézségeket kezdtem tapasztalni, mint a kimerültség és a fejfájás. Anyám kinokit használt és nekem is ajánlotta. Először nem hittem, hogy segíteni fog, de anyám ragaszkodott hozzá, hogy ne adjam fel, és már a használat második hetében sokkal jobban éreztem magam. Kipihentebben ébredtem, több energiám volt, és a fejfájás is elmúlt. Nyugodtan mondhatom, hogy mindenkinek ajánlom ezt a terméket, mert nagyon jó!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--7">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">A "KINOKI" TAPASZOK HELYES HASZNÁLATA</h2>
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
                <div class="manual__title">NYISSA KI A CSOMAGOLÁST, <br> ÉS VEGYE KI A TAPASZT </div>
                <div class="manual__desc">Mossa meg a lábát vízzel, és törölje szárazra</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp">
                    <div class="manual__icon-inner manual__icon-inner--2">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">2</div>
                <div class="manual__title">HELYEZZE A TAPASZT <br> A LÁBÁRA </div>
                <div class="manual__desc">Hagyja a lábán egész éjszaka</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp manual__icon-wrapp--rotate-270">
                    <div class="manual__icon-inner manual__icon-inner--3">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">3</div>
                <div class="manual__title">REGGEL VEGYE LE <br> A TAPASZT</div>
                <div class="manual__desc">Mossa meg a lábát vízzel!</div>
            </div>
        </div>
        <div class="col-xs-12 manual__notice"> * indkét lábán legyen egy tapasz egész éjjel</div>
        <center>
            <br/><br/>
            <h3><strong>Az eredmények 1 csomag elfogyasztása után észlelhetők</strong></h3></center>
        <center>
            <div class="col-xs-12 manual__notice">A legjobb eredmény elérése érdekében ajánlatos 2-3 dobozt elhasználni megszakítás nélkül</div>
        </center>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">A "MÉREGTELENÍTŐ TAPASZ" NEM IDEIGLENESEN, HANEM MARADANDÓAN MEGSZABADÍTJA A TESTET A KÁROS TOXINOKTÓL!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2 ThirdCircle">
                <div condensed="" roboto="" style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> AKCIÓ!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;"> új ár</div>
                </div>
                <div class="line4 price_land_s1" style="margin-top:0px;">{{ $prices[1]['amount'] }}</div>
                <div class="line5 price_land_curr">{{ $prices[1]['currency'] }}</div>
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
                        <div>Gyógyító, természetes és erős méregtelenítő szer.</div>
                        <div>Segít enyhíteni a fejfájást és a stresszt, megszabadítja a testet a felesleges folyadékoktól, javítja az alvás minőségét és helyreállítja az energia keringését a testben.</div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Kínai gyógynövények speciális kombinációja</li>
                        <li class="list-checked__item">A kínai orvoslás több száz éves receptjei</li>
                        <li class="list-checked__item">Modern gyártási technológia</li>
                        <li class="list-checked__item">Egy helyről kiszívja az összes mérget a testből</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>FIGYELEM, AKCIÓ!</h3>
                        <span>40% KEDVEZMÉNY</span>
                    </div>
                    <div class="form__content">
                        <p></p>
                        <span class="form__product-name">{{ $product->product_name }}</span>
                        <div class="price">
                            <div class="old_price"></div>
                            <span>Ár</span>
                            <span class="displayCurrentPriceNoCyr price_land_s1 new_price"></span>
                            <span class="displayCurrentCurrency price_land_curr">{{ $prices[1]['currency'] }}</span>
                        </div>
                        <form action="{{$orderRoute}}" class="orderFormWrapper orderformcdn" method="post">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <input name="name" placeholder="Név és vezetéknév" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefon" type="text" required/>
                            <input name="shipping_address" placeholder="Lakcim" type="text" required/>
                            <input name="shipping_city" placeholder="Város" type="text" required/>
                            <input name="shipping_zip" placeholder="Postai irányítószám" type="text" required/>
                            <div>
                                @foreach($prices as $singlePrice)
                                    <input type="radio" name="quantity" value="{{$singlePrice['quantity']}}" class="productQuantity{{$singlePrice['quantity']}} quantity" id="ThirdProductLabel{{$singlePrice['quantity']}}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="ThirdProductLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} {{ $prices[1]['currency'] }})
                                        @if($singlePrice['is_free_shipping']) * @endif
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                            <div class="freeShippingDiv">* INGYENES SZÁLLÍTÁS</div>
                            <input class="form__submit js_submit button__text" type="submit" value="Rendeljen most"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer copyright">
    <div class="container">
        <span>&copy; {{ now()->year }} {{ $product->brand_name }} | Minden jog fenntartva</span>
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
