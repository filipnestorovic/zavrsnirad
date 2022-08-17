<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width" name="viewport"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/trigger-icon-medallion.png" type="image/png" rel="icon">
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/style.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/') }}naturapharmFiles/kneepatch/order_me.min.css" rel="stylesheet" media="all"
          type="text/css">
    <style>img[height="1"], img[width="1"] {
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

        .manual__icon-inner--1.manual__icon {
            width: 152px;
            height: 185px;
            background-image: url({{asset('/')}}naturapharmFiles/kneepatch/kinoki3.png)
        }

        .manual__icon-inner--2 {
            padding-top: 24px
        }

        .manual__icon-inner--2.manual__icon {
            margin-left: 0;
            width: 166px;
            height: 169px;
            background-image: url({{asset('/')}}naturapharmFiles/kneepatch/kinoki4.png)
        }

        .manual__icon-inner--3.manual__icon {
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
                <h1>Bylinné detoxikační náplasti</h1>
                <h2>DETOX</h2>
                <span>"Čínská moudrost, moderní technologie"</span>
            </div>
        </div>
        <div class="row">
            <div class="labelmain firstCircle">
                <div condensed="" roboto=""
                     style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red">AKCE!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;">nová cena</div>
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
                        <h3>POZOR, AKCE!</h3>
                        <span>40% SLEVA</span>
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
                            <input name="name" placeholder="Jméno a Příjmení" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefon" type="text" required/>
                            <input name="shipping_address" placeholder="Adresa" type="text" required/>
                            <input name="shipping_city" placeholder="Město" type="text" required/>
                            <input name="shipping_zip" placeholder="PSČ" type="text" required/>
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
                            <div class="freeShippingDiv">* DOPRAVA ZDARMA</div>
                            <input class="form__submit js_submit button__text" type="submit" value="OBJEDNAT TEĎ"/>
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
                <div class="triggers__desc">Století starý recept</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--gate">
                <div class="triggers__desc">Aktivace mikrocirkulace v kůži</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--medallion">
                <div class="triggers__desc">Vylučování přebytečné vody z těla</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--beep2">
                <div class="triggers__desc">Široká škála efektů</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--flower">
                <div class="triggers__desc">Kompletní detoxikace organismu</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--ying-yang">
                <div class="triggers__desc">100% účinný a bezpečný</div>
            </div>
        </div>
    </div>
</div>
<section class="section section--1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section__title">DNES JE ŽÁDOUCÍ ASPOŇ JEDNOU MĚSÍČNĚ DETOXIKOVAT ORGANISMUS A REGENEROVAT
                    TĚLO.</h2>
            </div>
        </div>
        <div class="row pair">
            <div class="col-md-12 col-lg-7 text-center">
                <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki2.png"/>
            </div>
            <div class="col-md-12 col-lg-5 section__content section__content--pair">
                <p>Dnes všichni žijeme částečně nezdravým životním stylem a je velmi důležité tělo <span>pravidelně detoxikovat.</span>
                    Detoxikační náplasti jsou vyrobeno z rostlinných výtažků podle tradiční čínské receptury a mají za
                    úkol vypudit přebytečné tekutiny a toxiny z těla prostřednictvím <span>akupunkturních bodů.</span>
                </p>
                <p>Náplasti Kinoki <span>zmírňují napětí a únavu, zlepšují spánek, čistí pokožku a zlepšují celkový zdravotní
                        stav.</span> Pomocí těchto náplastí se z těla a krevního oběhu rychle vylučují toxiny, které se v něm
                    hromadí.</p>
            </div>
        </div>
        <div class="row scope">
            <div class="col-xs-12">
                <h2 class="section__title scope__title">OBLASTI POUŽITÍ NÁPLASTÍ "KINOKI"</h2>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp">
                    <div class="scope__icon-inner scope__icon-inner--pediatrics">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Revmatologie</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp scope__icon-wrapp--rotate-90">
                    <div class="scope__icon-inner scope__icon-inner--lymphology">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Lymfologie</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center scope__item">
                <div class="scope__icon-wrapp scope__icon-wrapp--rotate-180">
                    <div class="scope__icon-inner scope__icon-inner--neuroscience">
                        <div class="scope__icon"></div>
                    </div>
                </div>
                <div class="scope__desc">Neurologie</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="section__title">VYČISTÍ VAŠE TĚLO OD TOXINŮ ZA POUZE 5 DNÍ POMOCÍ NÁPLASTÍ "KINOKI"</h2>
            </div>
            <div class="col-xs-12 section__content">
                <p>Již první taoisté tvrdili, že hlavní příčinou poklesu energie v těle jsou <span>toxiny.</span></p>
                <p>Nadměrné množství toxinů se nutně podepisuje na zdraví nebo orgánu <span>a způsobuje nemoci, jako je
                        impotence, mastopatie, hypertenze, bolesti hlavy, chronická únava</span> a mnoho dalších. </p>
                <p>Podle představ taoistických mnichů a tradiční čínské medicíny je možné negativní energii, která se
                    šíří po celém těle, <span>zastavit detoxikací</span> a přerušit jí pohyb po těle.</p>
            </div>
            <div class="col-xs-12 text-right quote">
                <div class="quote__text"> "Zdravé tělo - zdravý duch"</div>
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
                    <p class="scroll__text">Léčebný účinek náplasti je založen na následujících účincích:</p>
                    <ul class="scroll__list">
                        <li class="scroll__list-item">Detoxikace organismu</li>
                        <li class="scroll__list-item">Zmírnění bolestí hlavy a stresu</li>
                        <li class="scroll__list-item">Omlazení těla</li>
                        <li class="scroll__list-item">Zvyšování kvality spánku</li>
                        <li class="scroll__list-item">Pozitivní vliv na vnitřní orgány</li>
                        <li class="scroll__list-item">Prevence nepříjemných pachů</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row composition">
            <div class="col-xs-12 composition__caption">
                <h2 class="section__title">SLOŽENÍ DETOXIKAČNÍCH NÁPLASTÍ "KINOKI":</h2>
                <p>Recept na náplasti obsahuje více jako 9 léčivých bylin a byl získaný na základě stoletého výzkumu
                    lidových léčitelů.</p>
                <p>Detoxikační náplasti jsou vyráběno podle moderních technologií a nejvyšších mezinárodních standardů
                    kvality. Náplasti Kinoki neobsahují chemické přísady, jsou pro tělo neškodné.</p>
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
                <div class="composition__desc">heracleum</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 text-center composition__item">
                <div class="composition__icon-wrapp composition__icon-wrapp--rotate-90">
                    <div class="composition__icon-inner composition__icon-inner--cibotium">
                        <div class="composition__icon"></div>
                    </div>
                </div>
                <div class="composition__desc">Šafrán</div>
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
                <div class="composition__desc">divoký zázvor</div>
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
                <div class="composition__desc">kořen lebedy lékařské</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">"KINOKI" VYČISTÍ VAŠE TĚLO OD TOXINŮ <br> V CO NEJKRATŠÍ DOBE!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2">
                <div condensed="" roboto=""
                     style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> AKCE!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;"> nová cena</div>
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
                        <div>Léčivý, přírodní a silný detoxikační prostředek.</div>
                        <div>Pomáhá zmírnit bolesti hlavy, stres, uvolňuje tekutiny z těla, zlepšuje kvalitu spánku a
                            obnovuje energii.
                        </div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Speciální kombinace léčivých čínských bylin</li>
                        <li class="list-checked__item">Staletí staré recepty čínské medicíny</li>
                        <li class="list-checked__item">Moderní výrobní technologie</li>
                        <li class="list-checked__item">Vyzvedne všechny toxiny z těla na jednom místě</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>POZOR, AKCE!</h3>
                        <span>40% SLEVA</span>
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
                            <input name="name" placeholder="Jméno a Příjmení" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefon" type="text" required/>
                            <input name="shipping_address" placeholder="Adresa" type="text" required/>
                            <input name="shipping_city" placeholder="Město" type="text" required/>
                            <input name="shipping_zip" placeholder="PSČ" type="text" required/>
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
                            <div class="freeShippingDiv">* DOPRAVA ZDARMA</div>
                            <input class="form__submit js_submit button__text" type="submit" value="OBJEDNAT TEĎ"/>
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
                <h2 class="section__title">CO ŘÍKAJÍ LÉKAŘI O BYLINNÝCH NÁPLASTÍCH "KINOKI" PRO DETOXIKACI</h2>
            </div>
        </div>
        <div class="row comment doctorSection">
            <div class="col-xs-12 col-lg-8">
                <img alt="" class="comment__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/doctor.png"/>
            </div>
            <div class="col-xs-12 col-lg-4">
                <div class="comment__text">
                    <p>Nejdůležitější v procesu léčby jakéhokoli onemocnění je očistit tělo od toxinů, které se v něm
                        hromadí v důsledku nezdravého životního stylu. Dříve bylo jediným řešením předepisování
                        detoxikačních přípravků, které negativní ovlivňují játra a trávicí trakt.</p>
                    <p>Měl jsem pacientů, kteří se stěžovali na bolesti hlavy, chronickou únavu, bolesti krční páteře, a
                        to vše v důsledku nahromadění toxinů v těle, které narušovaly normálně tělesné funkce.</p>
                    <p>Když jsem začal svým pacientem doporučovat KINOKI, po nějaké době se u velké části z nich výrazně
                        snížili problémy a většina z nich úplně zmizela. Náplasti KINOKI jsou skvělé pro přirozené
                        vylučování toxinů z těla a detoxikaci doporučuji každému alespoň jednou měsíčně.</p>
                </div>
                <div class="comment__author"></div>
                <div class="comment__job">Revmatolog</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--6">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">HODNOCENÍ NAŠICH KLIENTŮ</h2>
            </div>
        </div>
        <div class="row comments">
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Silvie, 21 let</div>
                <div class="comments__text">
                    <p>Dobrý den, pracuji hodně v kanceláři a měla jsem problém s bolestmi svalů, měla jsem pocit
                        těžkých nohou, neměla jsem dostatek energie a byla jsem velmi nevrlá. Na internetu jsem našla
                        náplasti KINOKI a snažila se detoxikovat své tělo. Po dvou krabičkách příznaky, které mě
                        trápily, úplně zmizely a již 3 měsíce se cítím skvěle. Nyní preventivní každý měsíc utratím
                        jednu krabičku, protože ani nechci, aby se to obtížné období opakovalo.</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Růžena , 65 let</div>
                <div class="comments__text">
                    <p>Dlouhé roky jsem měla problém s nadbytkem tekutin v těle a otoky nohou. Vyzkoušela jsem všechno
                        možné, ale léky mi často způsobovaly další problémy. Dcera mi koupila Kinoki a je to jediný
                        přípravek, který mi pomohl. Mám ho ve své lékárničce ve větších zásobách. Děkuji vám!</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Leoš, 32 let</div>
                <div class="comments__text">
                    <p>Často jím jídlo z fast foodu a sladkosti, piji hodně sycených džusů a jsem kuřák. Postupem času
                        jsem začal pociťovat problémy, jako je vyčerpanost a bolesti hlavy. Moje matka používala kinoki
                        a doporučila mi ho také. Zpočátku jsem nevěřila, že mi pomůže, ale maminka trvala na svém,
                        nevzdala jsem to a už ve druhém týdnu užívání jsem se cítila mnohem lepší. Probouzela jsem se
                        odpočatější, měla jsem více energie a bolest hlavy zmizela. Můžu bez obav říct, že tento produkt
                        doporučuji všem, protože je opravdu dobrý!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--7">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">JAK SPRÁVNĚ POUŽÍVAT NÁPLAST "KINOKI"</h2>
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
                <div class="manual__title">OTEVŘETE OBAL <br> A ODSTRANTE NÁPLAST</div>
                <div class="manual__desc">Umyjte si nohy vodou a osušte je.</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp">
                    <div class="manual__icon-inner manual__icon-inner--2">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">2</div>
                <div class="manual__title">NÁPL AST PŘIPLEPTE <br> NA NOHU</div>
                <div class="manual__desc">Nechte působit přes noc.</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp manual__icon-wrapp--rotate-270">
                    <div class="manual__icon-inner manual__icon-inner--3">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">3</div>
                <div class="manual__title">RÁNO SI DEJTE <br> DOLU NÁPLAST</div>
                <div class="manual__desc">A omyjte si nohy vodou!</div>
            </div>
        </div>
        <div class="col-xs-12 manual__notice"> * Mějte jednu náplast na obou nohou po celou noc</div>
        <center>
            <br/><br/>
            <h3><strong>Výsledky viditelné po 1 krabičce</strong></h3></center>
        <center>
            <div class="col-xs-12 manual__notice">K dosažení nejlepších výsledků se doporučuje použít 2-3 krabičky bez
                přerušení.
            </div>
        </center>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">"DETOXIKAČNÍ NÁPLAST" NENÍ DOČASNÉ, ALE TRVALÉ UVOLNĚNÍ OD ŠKODLIVÝCH TOXINŮ
                    V TĚLE!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2 ThirdCircle">
                <div condensed="" roboto=""
                     style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> AKCE!</div>
                    <div style="color: black;margin-top: 5px;font-size: 24px;"> nová cena</div>
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
                        <div>Léčivý, přírodní a silný detoxikační prostředek.</div>
                        <div>Pomáhá zmírnit bolesti hlavy, stres, uvolňuje tekutiny z těla, zlepšuje kvalitu spánku a
                            obnovuje energii.
                        </div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Speciální kombinace léčivých čínských bylin</li>
                        <li class="list-checked__item">Staletí staré recepty čínské medicíny</li>
                        <li class="list-checked__item">Moderní výrobní technologie</li>
                        <li class="list-checked__item">Vyzvedne všechny toxiny z těla na jednom místě</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>POZOR, AKCE!</h3>
                        <span>40% SLEVA</span>
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
                            <input name="name" placeholder="Jméno a Příjmení" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefon" type="text" required/>
                            <input name="shipping_address" placeholder="Adresa" type="text" required/>
                            <input name="shipping_city" placeholder="Město" type="text" required/>
                            <input name="shipping_zip" placeholder="PSČ" type="text" required/>
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
                            <div class="freeShippingDiv">* DOPRAVA ZDARMA</div>
                            <input class="form__submit js_submit button__text" type="submit" value="OBJEDNAT TEĎ"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer copyright">
    <div class="container">
        <span>&copy; {{ now()->year }} {{ $product->brand_name }} | Všechna práva vyhrazena</span>
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
