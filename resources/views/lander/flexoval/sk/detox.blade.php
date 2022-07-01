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
                <h1>Bylinné detoxikačné náplasti</h1>
                <h2>DETOX</h2>
                <span>"Čínska múdrosť, moderné technológie"</span>
            </div>
        </div>
        <div class="row">
            <div class="labelmain firstCircle">
                <div condensed="" roboto=""
                     style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red">AKCIA!</div>
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
                        <h3>POZOR, AKCIA!</h3>
                        <span>40% ZĽAVA</span>
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
                            <input name="name" placeholder="Meno a Priezvisko" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefón" type="text" required/>
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
                            <div class="freeShippingDiv">* DOVOZ ZDARMA</div>
                            <input class="form__submit js_submit button__text" type="submit"
                                   value="DOKONČIŤ OBJEDNÁVKU"/>
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
                <div class="triggers__desc">Storočia starý recept</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--gate">
                <div class="triggers__desc">Aktivácia mikrocirkulácie v koži</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--medallion">
                <div class="triggers__desc">Vylučovanie prebytočnej vody z tela</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--beep2">
                <div class="triggers__desc">Široká škála efektov</div>
            </div>
            <div class="col-xs-2 triggers__item triggers__icon--flower">
                <div class="triggers__desc">Kompletná detoxikácia organizmu</div>
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
                <h2 class="section__title">DNES JE ŽIADUCE ASPOŇ RAZ MESAČNE DETOXIKOVAŤ ORGANIZMUS A REGENEROVAŤ
                    TELO.</h2>
            </div>
        </div>
        <div class="row pair">
            <div class="col-md-12 col-lg-7 text-center">
                <img alt="" src="{{ asset('/') }}naturapharmFiles/kneepatch/kinoki2.png"/>
            </div>
            <div class="col-md-12 col-lg-5 section__content section__content--pair">
                <p>Dnes všetci žijeme čiastočne nezdravým životným štýlom a je veľmi dôležité telo pravidelne
                    detoxikovať. Detoxikačné náplasti sú vyrobené z rastlinných výťažkov podľa tradičnej čínskej
                    receptúry a majú za úlohu vypudiť prebytočné tekutiny a toxíny z tela prostredníctvom akupunktúrnych
                    bodov.</p>
                <p>Náplasti Kinoki zmierňujú napätie a únavu, zlepšujú spánok, čistia pokožku a zlepšujú celkový
                    zdravotný stav. Pomocou týchto náplastí sa z tela a krvného obehu rýchlo vylučujú toxíny, ktoré sa v
                    ňom hromadia.</p>
            </div>
        </div>
        <div class="row scope">
            <div class="col-xs-12">
                <h2 class="section__title scope__title">OBLASTI POUŽITIA NÁPLASTÍ "KINOKI"</h2>
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
                <div class="scope__desc">Lymfológia</div>
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
                <h2 class="section__title">VYČISTÍ VAŠE TELO OD TOXÍNOV ZA IBA 5 DNÍ POMOCOU NÁPLASTÍ "KINOKI".</h2>
            </div>
            <div class="col-xs-12 section__content">
                <p>Už prví taoisti tvrdili, že hlavnou príčinou poklesu energie v tele sú <span>toxíny.</span></p>
                <p>Nadmerné množstvo toxínov sa nevyhnutne podpisuje na zdraví alebo orgáne <span>a spôsobuje choroby, ako je impotencia, mastopatia, hypertenzia, bolesti hlavy, chronická únava</span>
                    a mnoho ďalších. </p>
                <p>Podľa predstáv taoistických mníchov a tradičnej čínskej medicíny je možné negatívnu energiu, ktorá sa
                    šíri po celom tele, <span>zastaviť detoxikáciou</span> a prerušiť jej pohyb po tele.</p>
            </div>
            <div class="col-xs-12 text-right quote">
                <div class="quote__text">"Zdravé telo - zdravý duch"</div>
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
                    <p class="scroll__text">Liečebný účinok náplasti je založený na nasledujúcich účinkoch:</p>
                    <ul class="scroll__list">
                        <li class="scroll__list-item">Detoxikácia organizmu</li>
                        <li class="scroll__list-item">Zmiernenie bolestí hlavy a stresu</li>
                        <li class="scroll__list-item">Omladenie tela</li>
                        <li class="scroll__list-item">Zvyšovanie kvality spánku</li>
                        <li class="scroll__list-item">Pozitívny vplyv na vnútorné orgány</li>
                        <li class="scroll__list-item">Prevencia nepríjemných pachov</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row composition">
            <div class="col-xs-12 composition__caption">
                <h2 class="section__title">ZLOŽENIE DETOXIKAČNÝCH NÁPLASTÍ "KINOKI":</h2>
                <p>Recept na náplasti obsahuje viac ako 9 liečivých bylín a bol získaný na základe storočného výskumu
                    ľudových liečiteľov.</p>
                <p>Detoxikačné náplasti sú vyrábané podľa moderných technológií a najvyšších medzinárodných štandardov
                    kvality. Náplasti Kinoki neobsahujú chemické prísady, sú pre telo neškodné.</p>
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
                <div class="composition__desc">koreň lebedy lekárskej</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">"KINOKI" VYČISTÍ VAŠE TELO OD TOXÍNOV <br> V ČO NAJKRATŠEJ DOBE!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2">
                <div condensed="" roboto=""
                     style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> AKCIA!</div>
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
                        <div>Liečivý, prírodný a silný detoxikačný prostriedok.</div>
                        <div>Pomáha zmierniť bolesti hlavy, stres, uvoľňuje tekutiny z tela, zlepšuje kvalitu spánku a
                            obnovuje energiu.
                        </div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Špeciálna kombinácia liečivých čínskych bylín</li>
                        <li class="list-checked__item">Stáročia staré recepty čínskej medicíny</li>
                        <li class="list-checked__item">Moderné výrobné technológie</li>
                        <li class="list-checked__item">Vyzdvihne všetky toxíny z tela na jednom mieste</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>POZOR, AKCIA!</h3>
                        <span>40% ZĽAVA</span>
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
                            <input name="name" placeholder="Meno a Priezvisko" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefón" type="text" required/>
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
                            <div class="freeShippingDiv">* DOVOZ ZDARMA</div>
                            <input class="form__submit js_submit button__text" type="submit"
                                   value="DOKONČIŤ OBJEDNÁVKU"/>
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
                <h2 class="section__title">ČO HOVORIA LEKÁRI O BYLINNÝCH NÁPLASTIACH "KINOKI" PRE DETOXIKÁCIU</h2>
            </div>
        </div>
        <div class="row comment doctorSection">
            <div class="col-xs-12 col-lg-8">
                <img alt="" class="comment__image" src="{{ asset('/') }}naturapharmFiles/kneepatch/doctor.png"/>
            </div>
            <div class="col-xs-12 col-lg-4">
                <div class="comment__text">
                    <p>Najdôležitejšie v procese liečby akéhokoľvek ochorenia je očistiť telo od toxínov, ktoré sa v ňom
                        hromadia v dôsledku nezdravého životného štýlu. Predtým bolo jediným riešením predpisovania
                        detoxikačných prípravkov, ktoré negatívne ovplyvňujú pečeň a tráviaci trakt.</p>
                    <p>Mal som pacientov, ktorí sa sťažovali na bolesti hlavy, chronickú únavu, bolesti krčnej chrbtice,
                        a to všetko v dôsledku nahromadenia toxínov v tele, ktoré narúšali normálne telesné funkcie.</p>
                    <p>Keď som začal svojim pacientom odporúčať KINOKI, po nejakej dobe sa u veľkej časti z nich výrazne
                        znížili problémy a väčšina z nich úplne zmizla. Náplasti KINOKI sú skvelé pre prirodzené
                        vylučovanie toxínov z tela a detoxikáciu odporúčam každému aspoň raz mesačne.</p>
                </div>
                <div class="comment__author"></div>
                <div class="comment__job">Reumatológ</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--6">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">HODNOTENIE NAŠICH KLIENTOV</h2>
            </div>
        </div>
        <div class="row comments">
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Linda, 21 rokov</div>
                <div class="comments__text">
                    <p>Dobrý deň, pracujem veľa v kancelárii a mala som problém s bolesťami svalov, mala som pocit
                        ťažkých nôh, nemala som dostatok energie a bola som veľmi nevrlá. Na internete som našla
                        náplasti KINOKI a snažila sa detoxikovať svoje telo. Po dvoch krabičkách príznaky, ktoré ma
                        trápili, úplne zmizli a už 3 mesiace sa cítim skvele. Teraz preventívne každý mesiac utratím
                        jednu krabičku, pretože ani nechcem, aby sa to ťažké obdobie opakovalo.</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Kvetoslava, 65 rokov</div>
                <div class="comments__text">
                    <p>Dlhé roky som mala problém s nadbytkom tekutín v tele a opuchy nôh. Vyskúšala som všetko možné,
                        ale lieky mi často spôsobovali ďalšie problémy. Dcéra mi kúpila Kinoki a je to jediný prípravok,
                        ktorý mi pomohol. Mám ho vo svojej lekárničke vo väčších zásobách. Ďakujem vám!</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 comments__item">
                <div class="comments__title">Tibor, 32 rokov</div>
                <div class="comments__text">
                    <p>Často jem jedlo z fast foodu a sladkosti, pijem veľa sýtených džúsov a som fajčiar. Postupom času
                        som začal pociťovať problémy, ako je vyčerpanosť a bolesti hlavy. Moja matka používala kinoki a
                        odporučila mi ho tiež. Spočiatku som neverila, že mi pomôže, ale mamička trvala na svojom,
                        nevzdala som to a už v druhom týždni užívania som sa cítila oveľa lepšie. Prebúdzala som sa
                        oddýchnutejšia, mala som viac energie a bolesť hlavy zmizla. Môžem bez obáv povedať, že tento
                        produkt odporúčam všetkým, pretože je naozaj dobrý!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--7">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">AKO SPRÁVNE POUŽÍVAŤ NÁPLAST "KINOKI"</h2>
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
                <div class="manual__title">OTVORTE OBAL <br> A ODSTRÁNITE NÁPLAST</div>
                <div class="manual__desc">Umyte si nohy vodou a osušte ich</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp">
                    <div class="manual__icon-inner manual__icon-inner--2">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">2</div>
                <div class="manual__title">NÁPLAST PRILEPTE <br> NA NOHU</div>
                <div class="manual__desc"> Nechajte pôsobiť cez noc</div>
            </div>
            <div class="col-xs-12 col-md-4 manual__item">
                <div class="manual__icon-wrapp manual__icon-wrapp--rotate-270">
                    <div class="manual__icon-inner manual__icon-inner--3">
                        <div class="manual__icon"></div>
                    </div>
                </div>
                <div class="manual__number">3</div>
                <div class="manual__title">RÁNO SI ZLOŽTE <br> NÁPLASTI</div>
                <div class="manual__desc">a umyte si nohy vodou!</div>
            </div>
        </div>
        <div class="col-xs-12 manual__notice"> * Majte jednu náplasť na oboch nohách po celú noc</div>
        <center>
            <br/><br/>
            <h3><strong>Výsledky viditeľné po 1 krabičke</strong></h3></center>
        <center>
            <div class="col-xs-12 manual__notice">Na dosiahnutie najlepších výsledkov sa odporúča použiť 2-3 krabičky
                bez prerušenia.
            </div>
        </center>
    </div>
</section>
<section class="section section--4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section__caption">
                <h2 class="section__title">"DETOXIKAČNÁ NÁPLAST" NIE JE DOČASNÉ, ALE TRVALÉ UVOĽNENIE OD ŠKODLIVÝCH
                    TOXÍNOV V TELE!</h2>
            </div>
        </div>
        <div class="row">
            <div class="labelmain2 ThirdCircle">
                <div condensed="" roboto=""
                     style="margin-top: 40px;font-size: 33px;padding-left: 10px;padding-right: 10px;font-size:2em;color: #029648;font-weight:bold;">
                    <div style="color:red"> AKCIA!</div>
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
                        <div>Liečivý, prírodný a silný detoxikačný prostriedok.</div>
                        <div>Pomáha zmierniť bolesti hlavy, stres, uvoľňuje tekutiny z tela, zlepšuje kvalitu spánku a
                            obnovuje energiu.
                        </div>
                    </div>
                    <ul class="product__list list-checked">
                        <li class="list-checked__item">Špeciálna kombinácia liečivých čínskych bylín</li>
                        <li class="list-checked__item">Stáročia staré recepty čínskej medicíny</li>
                        <li class="list-checked__item">Moderné výrobné technológie</li>
                        <li class="list-checked__item">Vyzdvihne všetky toxíny z tela na jednom mieste</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form">
                    <div class="form__title">
                        <h3>POZOR, AKCIA!</h3>
                        <span>40% ZĽAVA</span>
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
                            <input name="name" placeholder="Meno a Priezvisko" type="text" required/>
                            <input class="only_number" name="phone" placeholder="Telefón" type="text" required/>
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
                            <div class="freeShippingDiv">* DOVOZ ZDARMA</div>
                            <input class="form__submit js_submit button__text" type="submit"
                                   value="DOKONČIŤ OBJEDNÁVKU"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer copyright">
    <div class="container">
        <span>&copy; {{ now()->year }} {{ $product->brand_name }} | Všetky práva vyhradené</span>
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
