<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link href="{{ asset('/') }}natureteaFiles/slimonex1/style-2.css" rel="stylesheet">
    <link href="{{ asset('/') }}natureteaFiles/slimonex1/media-2.css" rel="stylesheet">
    <style>
        .sec10__part img {
            width: 240px;
        }
        @media (max-width: 991px) {
            .header .logo {
                width: 180px;
            }
            .header .logo b {
                font-size: 17px;
            }
            .header .logo:before {
                left: 180px;
            }
        }
        .sec9__container:before {
            background: url({{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png) no-repeat;
            width: 472px;
            height: 584px;
            right: -90px;
            bottom: -100px;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<div class="main__wrapper s__main">
    <div class="header">
        <div class="header__container">
            <div class="logo font-mons"><b> KIYESKI BODY SHAPING </b></div>
            <div class="h1 font-mons" data-xd="t3"><b>Pre ploché a atraktívne brucho!</b></div>
        </div>
    </div>
    <section class="sec1">
        <div class="sec1__container">
            <div class="sec1__h1 only-web sec1__text__gr font-mons" data-xd="t2">Schudnite rýchlo a ľahko, úplne prirodzeným spôsobom!</div>
            <div class="h1 only-mob sec1__text__gr font-mons" data-xd="t2">Schudnite rýchlo a ľahko</div>
            <div class="h2 only-mob font-mons" data-xd="t2">úplne prirodzeným spôsobom!</div>
            <img alt class="sec1__prod only-web" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png"><img alt class="sec1__prod only-mob" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png"><button class="btn for_scroll"> OBJEDNAJTE </button>
            <div class="last__block">
                <div class="h2 blue font-mons" data-xd="t2">Chudnite počas celého dňa!</div>
                <div class="h1 blue font-mons" data-xd="t2">24-hodinový systém</div>
                <div class="h2 green font-mons" data-xd="t2"><b>Zbavte sa tukových zásob</b> a vyplavte toxíny bez straty svalovej hmoty</div>
                <ul class="font-PT">
                    <li><b>Zlepšuje</b> trávenie</li>
                    <li>100% <b>prírodný</b></li>
                    <li><b>Zrýchľuje</b> metabolizmus, aj keď odpočívate</li>
                </ul>
                <div class="kletki font-mons"><span>tukové bunky (pred)</span><span>tukové bunky (po)</span><img alt src="{{ asset('/') }}natureteaFiles/slimonex1/photo3.png"></div>
                <img alt class="prod only-web" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png" width="300px">
            </div>
        </div>
    </section>
    <section class="sec2">
        <div class="sec2__container">
            <div class="clearfix"></div>
            <div class="sec2__grid">
                <div class="sec2__part">
                    <div class="h1 blue font-mons" data-xd="t2"> Výsledky </div>
                    <div class="h2 blue font-mons" data-xd="t2"> laboratórnej analýzy </div>
                    <p class="font-PT">
                        Laboratórnou analýzou bolo zistené,
                        <b class="green">že výrobok obsahuje úplne prírodné látky, ktoré majú pozitívny vplyv na celý organizmus.</b></p>
                    <p class="font-PT">
                        <b class="green">Zrýchľujú krvný obeh, zvyšujú metabolizmus a vylučujú z tela toxíny a tekutiny.</b>
                        Rýchlo rozpúšťa tukové zásoby a robí brucho vypnutým a plochým.</p>
                </div>
                <div class="sec2__part"></div>
            </div>
            <div class="ingridients"></div>
            <div class="woman"></div>
        </div>
    </section>
    <section class="sec3">
        <div class="sec3__container">
            <span class="h2 blue font-mons" data-xd="t2">Začnite svoj deň s energiou</span>
            <div class="h1 blue font-mons" data-xd="t2">NÁPLASTI KIYESKI</div>
            <div class="h2 pink font-mons" data-xd="t2">Už za niekoľko dní bude vaše telo <b>prečistené, plné energie a hmotnosť bude viditeľne znížená.</b></div>
            <div class="sec3__grid" dir="rtl">
                <div class="sec3__part" dir="ltr">
                    <div class="only-web"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                    <div class="only-mob"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                    <div class="girl"></div>
                    <p class="white_block pink font-mons only-web">KIYESKI BODY SHAPING VÁM DODÁ ENERGIU POČAS CELÉHO DŇA</p>
                    <button class="btn for_scroll only-web"> OBJEDNAJTE </button>
                </div>
                <div class="sec3__part" dir="ltr">
                    <p class="font-PT">
                        Jedinečná kombinácia zložiek stimuluje zdravé fungovanie organizmu. Tento prípravok nespôsobuje negatívne účinky a pokles energie počas dňa. Tuky sa rýchlo rozpúšťajú a vyhadzujú na povrch a zrýchlený metabolizmus vyvoláva vylučovanie tekutín.
                        <b class="pink">Týmto spôsobom sa znižuje nadúvanie, uľahčuje sa pohyblivosť a najdôležitejším faktorom je úbytok hmotnosti a spevnené telo.</b></p>
                    <ul class="font-PT">
                        <li>Zlepšuje stav organizmu</li>
                        <li>Zvyšuje spaľovanie tukov</li>
                        <li>Znižuje hladinu cholesterolu v krvi</li>
                        <li>Znižuje chuť do jedla</li>
                    </ul>
                    <p class="white_block pink font-mons only-mob">KIYESKI OBLIKOVANJE TELESA DA ENERGIJO ZA CEL DAN</p>
                    <button class="btn for_scroll only-mob"> OBJEDNAJTE </button>
                </div>
            </div>
        </div>
    </section>
    <section class="sec5">
        <div class="sec5__container">
            <div class="h1 blue font-mons" data-xd="t2"> KIYESKI BODY SHAPING </div>
            <div class="h2 blue font-mons" data-xd="t2">Čo je na jeho zložení také jedinečné?</div>
            <p class="font-PT">
                Vaše telo sa premení vďaka špeciálnej kombinácii prírodných zložiek,
                <b class="blue"> ktoré dodávajú energiu a urýchľujú spaľovanie tukov</b></p>
            <div class="sec5__grid">
                <div class="sec5__part">
                    <div class="grafic grafic1">
                        <div class="vertical">
                            <p class="font-mons">Úbytok hmotnosti v kg</p>
                            <ul class="font-PT">
                                <li> -15 </li>
                                <li> -12 </li>
                                <li> -10 </li>
                                <li> -5 </li>
                                <li> -3 </li>
                            </ul>
                        </div>
                        <div class="horisontal">
                            <p class="font-mons"> Mesiac </p>
                            <ul class="font-PT">
                                <li> 1 </li>
                                <li> 2 </li>
                                <li> 3 </li>
                                <li> 4 </li>
                                <li> 5 </li>
                            </ul>
                        </div>
                        <div class="variant">
                            <div class="h1 font-mons"> Úbytok hmotnosti </div>
                            <ul class="font-PT">
                                <li class="red">Pravidelné diéty</li>
                                <li class="gr"> Kiyeski Body Shaping </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sec5__part">
                    <div class="grafic grafic2">
                        <div class="vertical">
                            <p class="font-mons">Udržiavanie hmotnosti v kg</p>
                            <ul class="font-PT">
                                <li> 80 </li>
                                <li> 70 </li>
                                <li> 60 </li>
                                <li> 50 </li>
                                <li> 45 </li>
                            </ul>
                        </div>
                        <div class="horisontal">
                            <p class="font-mons"> Mesiac </p>
                            <ul class="font-PT">
                                <li> 1 </li>
                                <li> 2 </li>
                                <li> 3 </li>
                                <li> 4 </li>
                                <li> 5 </li>
                            </ul>
                        </div>
                        <div class="variant">
                            <div class="h1 font-mons">Udržiavanie hmotnosti</div>
                            <ul class="font-PT">
                                <li class="red">Pravidelné diéty</li>
                                <li class="gr"> Kiyeski Body Shaping </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec7">
        <div class="sec7__container">
            <div class="h1 blue font-mons" data-xd="t2"> Výsledky  </div>
            <div class="h2 blue font-mons" data-xd="t2"> používateľov </div>
            <div class="sec7__grid" dir="rtl">
                <div class="sec7__part" data-xd="t47" dir="ltr">
                    <div class="sec7__grid inner__grid">
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/bf.jpg">
                            <p class="font-mons"><b class="blue"> 67,5 kg </b> Pred </p>
                        </div>
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af1.jpg">
                            <p class="font-mons"><b class="light_blue"> 60 kg </b> po jednom mesiaci </p>
                        </div>
                    </div>
                    <div class="sec7__grid inner__grid">
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af3.jpg">
                            <p class="font-mons"><b class="green"> 55 kg </b> po dvoch mesiacoch </p>
                        </div>
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af2.jpg">
                            <p class="font-mons"><b class="pink"> 50 kg </b> po troch mesiacoch </p>
                        </div>
                    </div>
                </div>
                <div class="sec7__part last_block" dir="ltr">
                    <div class="sec7__girl"></div>
                    <div class="after"></div>
                    <div class="girl-name blue font-mons" data-xd="t46">Diana, 28 rokov</div>
                    <p class="last-p font-PT">Po pôrode som pribrala. Myslela som si, že ľahko schudnem, ale po mnohých diétach som stále priberala. Bola som neustále hladná a mala som zlú náladu. Po používaní náplastí Kiyeski som sa okamžite začala cítiť lepšie. Počas dňa som mala viac energie, večer som bola menej unavená, žila som s menším stresom. Výsledkom bolo, že som v priebehu 2,5 mesiaca dosiahla svoju ideálnu hmotnosť. Mimochodom, ideálnu hmotnosť som nedosiahla ani po roku diét!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec8">
        <div class="sec8__container">
            <div class="up_block">
                <div class="h2 blue font-mons" data-xd="t2">Rýchly úbytok hmotnosti počas prvých 2 týždňov</div>
                <div class="h1 blue font-mons" data-xd="t2">O 12 KG MENEJ</div>
                <div class="h2 pink font-mons" data-xd="t2">za 2 mesiace</div>
                <p class="font-PT up_p"> Takéto výsledky sa dosahujú vďaka kombinácii dvoch faktorov - <b class="blue">odbúravanie tukov + eliminácia toxínov.</b></p>
                <div class="only-web"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                <div class="only-mob"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                <div class="girl"></div>
            </div>
            <p class="font-PT margin-left"><b class="pink">Toxíny opúšťajú telo už počas prvých týždňov liečby.</b><br> Preto sú výsledky viditeľné okamžite.</p>
            <p class="font-PT"><b class="pink">V priebehu 2 týždňov sa začnú rozkladať hlboké tukové zásoby, vráti sa hladina zásaditosti a zlepší sa zloženie krvi.</b> Úbytok hmotnosti môže byť pomalý vzhľadom na proces obnovy celkového zdravia. </p>
        </div>
    </section>
    <section class="sec9">
        <div class="sec9__container">
            <div class="h2 blue font-mons" data-xd="t2"> Odporúčanie </div>
            <div class="h1 green font-mons" data-xd="t2"> špecialistka </div>
            <div class="dietolog">
                <div class="photo-name_block">
                    <div class="girl"></div>
                    <p class="blue font-mons"> Gabriela, <br> diétna lekárka </p>
                </div>
                <p class="font-PT">Kiyeski Body Shaping je biologicky aktívny výrobok s komplexným účinkom na zlepšenie zdravia, ktorý si všimne aj vaše okolie. Pozitívne výsledky možno pozorovať aj v krvnom teste. Nízka hladina cholesterolu, stabilná hladina cukru, zdravé množstvo bielkovín - to sú nálezy mojich pacientov, ktoré sa ukázali vďaka náplastiam Kiyeski!</p>
                <div class="photo_after"></div>
            </div>
        </div>
    </section>
    <section class="sec10">
        <div class="sec10__container">
            <div class="sec10__grid">
                <div class="sec10__part"><img alt class="prod only-web" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                <div class="sec10__part">
                    <div class="h1 blue font-mons" data-xd="t2"> KIYESKI BODY SHAPING </div>
                    <div class="h2 pink font-mons" data-xd="t2">Vytvarujte si svoje telo!</div>
                    <img alt class="prod only-mob" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"><button class="btn for_scroll"> OBJEDNAJTE </button>
                </div>
            </div>
        </div>
    </section>
    <section class="sec11">
        <div class="sec11__container">
            <div class="h1 blue font-mons" data-xd="t2">Čo hovoria</div>
            <div class="h2 green font-mons" data-xd="t2">zákazníci</div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">O Kiyeski Body Shaping som sa dozvedela pred 6 mesiacmi. Vtedy som vážila 90 kg. Len za dva mesiace som schudla takmer 20 kg! Som taká šťastná! Potom som začala pomaly chudnúť. Napriek tomu mám teraz 62,5 kg a cítim sa lepšie ako kedykoľvek predtým.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm1.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Mária
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">S náplasťami Kiyeski som schudla pred rokom. Najdôležitejšie je, že mi pomohli nielen schudnúť 20 kg, ale aj prečistiť telo. Už ma nebolí žalúdok, nemám alergie a cítim sa plná energie.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm2.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Marianna
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star4"></div>
                <p class="font-PT">Sú skvelé! Používam ich už nejaký čas. Momentálne môžem povedať, že som sa úplne zmenila a moje telo vyzerá inak.</p>
                <p class="font-PT">
                    <b class="blue">
                        Anastázia
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star4"></div>
                <p class="font-PT">Používam Kiyeski Body Shaping týždeň a už vidím výsledky. Moje nohavice už nie sú tesné.</p>
                <p class="font-PT">
                    <b class="blue">
                        Miroslava
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">V posilňovni som tvrdo trénovala 2 roky. Okrem toho som neustále držala diétu, pretože som chcela schudnúť 45 kg. Bolo to naozaj ťažké. Rozhodla som sa vyskúšať Kiyeski Body Shaping, pretože už neviem, čo s kilogramami.</p>
                <p class="font-PT">
                    <b class="blue">
                        Branislav
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star4"></div>
                <p class="font-PT">Môj kolega používa Kiyeski každý deň. Schudol veľa kíl! Z veľkosti XL sa dostal na veľkosť S, takže môžem povedať, že tento doplnok naozaj funguje. Funguje lepšie ako diéta, budete víťaz.</p>
                <p class="font-PT">
                    <b class="blue">
                        Anna
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Milujem ten pocit ľahkosti, ktorý Kiyeski Body Shaping poskytuje! Počas dňa mám veľa energie! Nadváha je pre mňa minulosťou.</p>
                <p class="font-PT">
                    <b class="blue">
                        Kristína
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Hurá! Kiyeski Body Shaping je niečo úžasné! Len za mesiac som schudla 7 kg bez akejkoľvek námahy. Teraz pracujem na brušných svaloch.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm3.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Dalibor
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Už viac ako mesiac chudnem s náplasťami Kiyeski. Postupne sa mi znížila chuť do jedla. Začal som sa cítiť sýty aj po malých porciách. Nedržal som diétu, len som obmedzil príjem cukru a cestovín. Výsledkom bolo, že som schudol 12 kg. Tuk z hrudníka a žalúdka zmizol. Pozrite sa na moju postavu.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm4.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Cyril
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">Ak chcete len schudnúť, tak vám tento produkt pomôže, ale nie príliš. Ak chcete atletické telo, budete musieť cvičiť.</p>
                <p class="font-PT">
                    <b class="blue">
                        Adela
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">Kiyeski Body Shaping je moja posledná nádej! S nadváhou bojujem už 10 rokov. Vyskúšala som všetko. Dnes som si tento výrobok objednala. Uvidíme, kedy príde.</p>
                <p class="font-PT">
                    <b class="blue">
                        Eva
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Neviem, čo si myslia ostatní, ale ja som s týmto produktom veľmi spokojná. Naozaj mi pomohol! Schudla som 23,5 kg. Teraz chcem športovať! Momentálne mám postavu, ktorú som si predtým nevedela ani predstaviť.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm5.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Jana
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Rada používam Kiyeski Body Shaping pred tréningom. Dodáva mi veľa energie, ktorá mi stačí na splnenie všetkých úloh počas dňa.</p>
                <p class="font-PT">
                    <b class="blue">
                        Alexandra
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">Celý život športujem a vždy som mala problémy s pásom a stehnami. Chcem mať dokonalé telo. Nastal čas, aby som vyskúšala Kiyeski Body Shaping.</p>
                <p class="font-PT">
                    <b class="blue">
                        Petra
                    </b>
                </p>
            </div>
        </div>
    </section>
    <section class="sec12 js-scroll-detection">
        <div class="sec12__container">
            <div class="sec12__grid">
                <div class="sec12__part">
                    <div class="h2 blue font-mons" data-xd="t2">KIYESKI BODY SHAPING - Pre ploché a príťažlivé brucho!</div>
                    <div class="h1 blue font-mons" data-xd="t2"> KIYESKI BODY SHAPING</div>
                    <div class="h2 pink font-mons" data-xd="t2">Pre dokonalé telo bez poškodenia zdravia</div>
                    <div class="discount font-PT"> -40% </div>
                    <img alt class="prod only-web" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png"><img alt class="prod only-mob" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png">
                </div>
                <div class="sec12__part">
                    <div class="order">
                        <form action="{{$orderRoute}}" class="form font-mons main_form" data-xd="t76" id="order_form" method="post">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class="zakaz blue">ZADAJTE ÚDAJE O DOPRAVE</div>
                            <input class="inp font-mons" name="name" placeholder="Meno" type="text" required>
                            <input class="inp only_number phone-js font-mons" name="phone" placeholder="Telefónne číslo" type="tel" required>
                            <input class="inp font-mons" name="shipping_address" placeholder="Adresa" type="text" required>
                            <input class="inp font-mons" name="shipping_city" placeholder="Mesto" type="text" required>
                            <select class="form-content__element form-content__select change-package-selector2 form_control font-mons" name="quantity" required>
                                @foreach($prices as $singlePrice)
                                    <option value="{{ $singlePrice['quantity'] }}"
                                            @if($singlePrice['is_default']) selected @endif
                                    >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} {{ $singlePrice['currency'] }})</option>
                                @endforeach
                            </select>
                            @foreach($prices as $singlePrice)
                                <div class="{{ $singlePrice['quantity'] }}_pack item-gift" id="{{ $singlePrice['quantity'] }}" @if($singlePrice['quantity'] === 1) style="display: block" @endif> {{ $singlePrice['quantity'] }} x {{ $product->product_name }} <br><strike class="old"> {{ $prices[$singlePrice['quantity']]['originalPrice'] }} {{ $singlePrice['currency'] }} </strike> {{ $prices[$singlePrice['quantity']]['amount'] }} {{ $singlePrice['currency'] }} <br> @if($singlePrice['is_free_shipping']) + BREZPLAČNA DOSTAVA @endif</div>
                            @endforeach
                            <button class="btn js_submit button__text"> OBJEDNAŤ </button>
                            <div class></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}natureteaFiles/slimonex1/main.js"></script>
@include('components.pixel_footer')
</body>
</html>
