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
            background: url({{ asset('/') }}naturapharmFiles/slimmingpatch/prod.png) no-repeat;
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
            <div class="logo font-mons"><b>KARCSÚSÍTÓ TAPASZ</b></div>
            <div class="h1 font-mons" data-xd="t3"><b>A lapos és vonzó hasért!</b></div>
        </div>
    </div>
    <section class="sec1">
        <div class="sec1__container">
            <div class="sec1__h1 only-web sec1__text__gr font-mons" data-xd="t2">Fogyjon gyorsan és könnyen, jojó-effektus nélkül!</div>
            <div class="h1 only-mob sec1__text__gr font-mons" data-xd="t2">Fogyjon gyorsan és könnyen</div>
            <div class="h2 only-mob font-mons" data-xd="t2">jojó-effektus nélkül!</div>
            <img alt class="sec1__prod only-web" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod2.png"><img alt class="sec1__prod only-mob" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod2.png"><button class="btn for_scroll"> MEGRENDELNI </button>
            <div class="last__block">
                <div class="h2 blue font-mons" data-xd="t2">Fogyjon egész nap!</div>
                <div class="h1 blue font-mons" data-xd="t2">24 órás rendszer</div>
                <div class="h2 green font-mons" data-xd="t2"><b>Szabaduljon meg a zsírlerakódásoktól</b> és öblítse ki a méreganyagokat izomtömeg elvesztése nélkül</div>
                <ul class="font-PT">
                    <li><b>Javítja</b> az emésztést</li>
                    <li>100%-ban <b>természetes</b></li>
                    <li><b>Felgyorsítja</b> az anyagcserét még pihenés közben is</li>
                </ul>
                <div class="kletki font-mons"><span>zsírsejtek (előtte)</span><span> zsírsejtek (utána)</span><img alt src="{{ asset('/') }}natureteaFiles/slimonex1/photo3.png"></div>
                <img alt class="prod only-web" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod.png" width="300px">
            </div>
        </div>
    </section>
    <section class="sec2">
        <div class="sec2__container">
            <div class="clearfix"></div>
            <div class="sec2__grid">
                <div class="sec2__part">
                    <div class="h1 blue font-mons" data-xd="t2">A laboratóriumi</div>
                    <div class="h2 blue font-mons" data-xd="t2"> elemzés eredményei </div>
                    <p class="font-PT">
                        A laboratóriumi elemzés megállapította, hogy a termék teljesen természetes anyagokat tartalmaz,
                        <b class="green">amelyek pozitív hatással vannak az egész szervezetre.</b></p>
                    <p class="font-PT">
                        <b class="green">Felgyorsítják a vérkeringést, fokozzák az anyagcserét és kiűzik a méreganyagokat és a folyadékot a szervezetből.</b>
                        Gyorsan elolvasztja a zsírlerakódásokat, és feszessé és lapossá teszi a hasat.</p>
                </div>
                <div class="sec2__part"></div>
            </div>
            <div class="ingridients"></div>
            <div class="woman"></div>
        </div>
    </section>
    <section class="sec3">
        <div class="sec3__container">
            <span class="h2 blue font-mons" data-xd="t2">Kezdje a napot energiával</span>
            <div class="h1 blue font-mons" data-xd="t2">KARCSÚSÍTÓ TAPASZ</div>
            <div class="h2 pink font-mons" data-xd="t2">Za samo nekoliko dana vaše telo će biti <b>pročišćeno, puno energije a kilaža će biti<br> osetno manja.</b></div>
            <div class="sec3__grid" dir="rtl">
                <div class="sec3__part" dir="ltr">
                    <div class="only-web"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod.png"></div>
                    <div class="only-mob"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod.png"></div>
                    <div class="girl"></div>
                    <p class="white_block pink font-mons only-web">A KARCSÚSÍTÓ TAPASZ EGÉSZ NAPRA ENERGIÁT AD ÖNNEK</p>
                    <button class="btn for_scroll only-web"> MEGRENDELHETŐ </button>
                </div>
                <div class="sec3__part" dir="ltr">
                    <p class="font-PT">
                        Az összetevők egyedülálló kombinációja elősegíti a szervezet egészséges működését. Ez a formula nem okoz negatív hatásokat és energiacsökkenést a nap folyamán. A zsírok gyorsan megolvadnak és a felszínre dobódnak, a felgyorsult anyagcsere pedig a folyadékok kiürülését váltja ki.
                        <b class="pink">Így csökken a puffadás, könnyebbé válik a mobilitás, és a legfontosabb tényező a fogyás és a tónusos test.</b></p>
                    <ul class="font-PT">
                        <li>Javítja a test kondícióját</li>
                        <li>Felgyorsítja a zsírégetést </li>
                        <li>Csökkenti a vér koleszterinszintjét</li>
                        <li>Csökkenti az étvágyat</li>
                    </ul>
                    <p class="white_block pink font-mons only-mob">SLIMMING PATCH DAJE ENERGIJU TOKOM CELOG DANA</p>
                    <button class="btn for_scroll only-mob"> MEGRENDELNI </button>
                </div>
            </div>
        </div>
    </section>
    <section class="sec5">
        <div class="sec5__container">
            <div class="h1 blue font-mons" data-xd="t2">KARCSÚSÍTÓ TAPASZ</div>
            <div class="h2 blue font-mons" data-xd="t2">Mitől olyan egyedi az összetétele?</div>
            <p class="font-PT">
                Testét átalakítja a természetes összetevők különleges kombinációjának köszönhetően,
                <b class="blue">amelyek energiát biztosítanak és felgyorsítják a zsírégetést</b></p>
            <div class="sec5__grid">
                <div class="sec5__part">
                    <div class="grafic grafic1">
                        <div class="vertical">
                            <p class="font-mons">Fogyás kg-ban</p>
                            <ul class="font-PT">
                                <li> -15 </li>
                                <li> -12 </li>
                                <li> -10 </li>
                                <li> -5 </li>
                                <li> -3 </li>
                            </ul>
                        </div>
                        <div class="horisontal">
                            <p class="font-mons"> hónap </p>
                            <ul class="font-PT">
                                <li> 1 </li>
                                <li> 2 </li>
                                <li> 3 </li>
                                <li> 4 </li>
                                <li> 5 </li>
                            </ul>
                        </div>
                        <div class="variant">
                            <div class="h1 font-mons"> Fogyás </div>
                            <ul class="font-PT">
                                <li class="red">Rendszeres diéta</li>
                                <li class="gr">Karcsúsító tapasz</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sec5__part">
                    <div class="grafic grafic2">
                        <div class="vertical">
                            <p class="font-mons">súlytartás kg-ban</p>
                            <ul class="font-PT">
                                <li> 80 </li>
                                <li> 70 </li>
                                <li> 60 </li>
                                <li> 50 </li>
                                <li> 45 </li>
                            </ul>
                        </div>
                        <div class="horisontal">
                            <p class="font-mons"> hónap </p>
                            <ul class="font-PT">
                                <li> 1 </li>
                                <li> 2 </li>
                                <li> 3 </li>
                                <li> 4 </li>
                                <li> 5 </li>
                            </ul>
                        </div>
                        <div class="variant">
                            <div class="h1 font-mons">Súlyfenntartás</div>
                            <ul class="font-PT">
                                <li class="red">Szokásos diéta</li>
                                <li class="gr">Karcsúsító tapasz</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec7">
        <div class="sec7__container">
            <div class="h1 blue font-mons" data-xd="t2"> Az eredmények a </div>
            <div class="h2 blue font-mons" data-xd="t2"> felhasználó </div>
            <div class="sec7__grid" dir="rtl">
                <div class="sec7__part" data-xd="t47" dir="ltr">
                    <div class="sec7__grid inner__grid">
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/bf.jpg">
                            <p class="font-mons"><b class="blue"> 67,5 kg </b> Előtte </p>
                        </div>
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af1.jpg">
                            <p class="font-mons"><b class="light_blue"> 60 kg </b> egy hónap után </p>
                        </div>
                    </div>
                    <div class="sec7__grid inner__grid">
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af3.jpg">
                            <p class="font-mons"><b class="green"> 55 kg </b> két hónap után </p>
                        </div>
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af2.jpg">
                            <p class="font-mons"><b class="pink"> 50 kg </b> három hónap után
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sec7__part last_block" dir="ltr">
                    <div class="sec7__girl"></div>
                    <div class="after"></div>
                    <div class="girl-name blue font-mons" data-xd="t46">Diana, 28 éves</div>
                    <p class="last-p font-PT">A szülés után híztam. Azt hittem, hogy könnyen lefogyok, de sok diéta után még mindig hízni kezdtem. Állandóan éhes és rosszkedvű voltam. A karcsúsító tapasz használata után azonnal elkezdtem jobban érezni magam. Több energiám volt napközben, kevésbé voltam fáradt esténként, kevesebb stresszel éltem. Ennek eredményeként 2,5 hónap alatt elértem az ideális súlyomat. Egyébként az ideális súlyt még egy év diéta után sem értem el!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec8">
        <div class="sec8__container">
            <div class="up_block">
                <div class="h2 blue font-mons" data-xd="t2">Gyors fogyás az első 2 hétben</div>
                <div class="h1 blue font-mons" data-xd="t2">12 KG-MAL KEVESEBB</div>
                <div class="h2 pink font-mons" data-xd="t2">2 hónapon belül</div>
                <p class="font-PT up_p"> Az ilyen eredmények két tényező kombinációjának - <b class="blue"> zsírbontás + méreganyagok eltávolítása - köszönhetőek. </b></p>
                <div class="only-web"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod.png"></div>
                <div class="only-mob"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod.png"></div>
                <div class="girl"></div>
            </div>
            <p class="font-PT margin-left"><b class="pink">A méreganyagok már a kezelés első heteiben távoznak a szervezetből.</b><br> Ezért az eredmények azonnal láthatóak. </p>
            <p class="font-PT"> <b class="pink">A 2 hét alatt a mély zsírlerakódások elkezdenek lebomlani, a lúgossági szint visszatér, és a vér összetétele javul.</b> A fogyás az általános egészség helyreállításának folyamata miatt lassú lehet. </p>
        </div>
    </section>
    <section class="sec9">
        <div class="sec9__container">
            <div class="h2 blue font-mons" data-xd="t2"> Ajánlás a </div>
            <div class="h1 green font-mons" data-xd="t2"> szakembertől </div>
            <div class="dietolog">
                <div class="photo-name_block">
                    <div class="girl"></div>
                    <p class="blue font-mons"> Nikolett, <br> dietetikus </p>
                </div>
                <p class="font-PT">A karcsúsító tapasz egy biológiailag aktív termék, amelynek átfogó egészségjavító hatása még a környezetében élőknek is feltűnik. A pozitív eredmények vérvizsgálattal is kimutathatók. Alacsony koleszterinszint, stabil cukorszint, egészséges mennyiségű fehérje - ezt mutatják pácienseim eredményei a Karcsúsító tapasznak köszönhetően!</p>
                <div class="photo_after"></div>
            </div>
        </div>
    </section>
    <section class="sec10">
        <div class="sec10__container">
            <div class="sec10__grid">
                <div class="sec10__part"><img alt class="prod only-web" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod.png"></div>
                <div class="sec10__part">
                    <div class="h1 blue font-mons" data-xd="t2">KARCSÚSÍTÓ TAPASZ</div>
                    <div class="h2 pink font-mons" data-xd="t2">Alakítsa a testét!</div>
                    <img alt class="prod only-mob" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod.png"><button class="btn for_scroll"> MEGRENDELNI </button>
                </div>
            </div>
        </div>
    </section>
    <section class="sec11">
        <div class="sec11__container">
            <div class="h1 blue font-mons" data-xd="t2">Mit mondanak</div>
            <div class="h2 green font-mons" data-xd="t2"> a vásárlók </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">6 hónappal ezelőtt hallottam a karcsúsító tapaszról. Akkor 90 kg-ot nyomtam. Mindössze két hónap alatt majdnem 20 kg-ot fogytam! Annyira boldog vagyok! Ezután lassan elkezdtem fogyni. Ennek ellenére most 62,5 kg vagyok, és jobban érzem magam, mint valaha.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm1.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Mária
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Egy évvel ezelőtt fogytam a fogyókúrás tapasszal. A legfontosabb, hogy nem csak 20 kg fogyásban segítettek, hanem megtisztították a szervezetemet is. Már nem fáj a hasam, nem vagyok allergiás és tele vagyok energiával.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm2.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Mónika
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star4"></div>
                <p class="font-PT">Nagyszerűek! Már egy ideje használom őket. Jelenleg azt mondhatom, hogy teljesen megváltoztam és a testem is másképp néz ki.</p>
                <p class="font-PT">
                    <b class="blue">
                        Anett
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star4"></div>
                <p class="font-PT">Egy hete használom a karcsúsító tapaszokat és már látom az eredményeket. A nadrágjaim már nem szorítanak.</p>
                <p class="font-PT">
                    <b class="blue">
                        Karolina
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">Keményen edzettem az edzőteremben 2 évig. Ezen kívül folyamatosan diétáztam, mert 45 kg-ot akartam leadni. Nagyon nehéz volt. Úgy döntöttem, hogy kipróbálom a karcsúsító tapaszokat, mert már nem tudtam mit kezdeni a kilókkal.</p>
                <p class="font-PT">
                    <b class="blue">
                        Bence
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star4"></div>
                <p class="font-PT">A kolléganőm minden nap használja a Karcsúsítót. Nagyon sokat fogyott! Az XL méretről S méretre ment át, szóval mondhatom, hogy ez a kiegészítő tényleg működik. Jobban működik, mint a diéta, győztes leszel.</p>
                <p class="font-PT">
                    <b class="blue">
                        Anna
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Imádom azt a könnyed érzést, amit a karcsúsító tapasz ad! Rengeteg energiám van napközben! A súlyfelesleg számomra a múlté.</p>
                <p class="font-PT">
                    <b class="blue">
                        Krisztina
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Hurrá! A karcsúsító tapaszok valami csodálatosak! Egy hónap alatt 7 kg-ot fogytam minden erőfeszítés nélkül. Most a hasizmaimon dolgozom.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm3.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Dénes
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Már több mint egy hónapja fogyok a karcsúsító tapaszok segítségével. Apránként csökkent az étvágyam. Elkezdtem jóllakottnak érezni magam még kis adagok után is. Nem diétáztam, csak korlátoztam a cukor és a tésztafélék fogyasztását. Ennek eredményeként 12 kg-ot fogytam. A mellkasról és a hasról eltűnt a zsír. Nézd meg az alakomat!</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm4.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Sándor
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">Ha csak fogyni szeretnél, akkor ez a termék segít, de nem túl sokat. Ha sportos testet szeretne, akkor edzenie kell.</p>
                <p class="font-PT">
                    <b class="blue">
                        Panna
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">A fogyókúrás tapasz az utolsó reményem! Már 10 éve küzdök súlyfelesleggel. Mindent kipróbáltam. Ma rendeltem meg ezt a terméket. Majd meglátjuk mikor érkezik meg.</p>
                <p class="font-PT">
                    <b class="blue">
                        Éva
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Nem tudom mit gondolnak mások, de én nagyon elégedett vagyok ezzel a termékkel. Nekem tényleg segített! Leadtam 23,5 kg-ot. Most már szeretnék sportolni! Jelenleg olyan alakom van, amit korábban el sem tudtam képzelni.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm5.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Tünde
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Szeretem használni a karcsúsító tapaszokat edzés előtt. Rengeteg energiát ad, ami elég ahhoz, hogy a nap folyamán minden feladatot elvégezzek.</p>
                <p class="font-PT">
                    <b class="blue">
                        Barbara
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">Egész életemben sportoltam, és mindig is problémáim voltak a derekammal és a combommal. Tökéletes testet szeretnék. Eljött az idő, hogy kipróbáljam a karcsúsító tapaszokat.</p>
                <p class="font-PT">
                    <b class="blue">
                        Dorottya
                    </b>
                </p>
            </div>
        </div>
    </section>
    <section class="sec12 js-scroll-detection">
        <div class="sec12__container">
            <div class="sec12__grid">
                <div class="sec12__part">
                    <div class="h2 blue font-mons" data-xd="t2">KARCSÚSÍTÓ TAPASZ - A lapos és vonzó hasért!</div>
                    <div class="h1 blue font-mons" data-xd="t2">KARCSÚSÍTÓ TAPASZ</div>
                    <div class="h2 pink font-mons" data-xd="t2">A tökéletes testért egészségkárosodás nélkül</div>
                    <div class="discount font-PT"> -40% </div>
                    <img alt class="prod only-web" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod2.png"><img alt class="prod only-mob" src="{{ asset('/') }}naturapharmFiles/slimmingpatch/prod2.png">
                </div>
                <div class="sec12__part">
                    <div class="order">
                        <form action="{{$orderRoute}}" class="form font-mons main_form" data-xd="t76" id="order_form" method="post">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class="zakaz blue">ADJA MEG A SZÁLLÍTÁSI ADATOKAT</div>
                            <input class="inp font-mons" name="name" placeholder="Név" type="text" required>
                            <input class="inp only_number phone-js font-mons" name="phone" placeholder="Telefonszám" type="tel" required>
                            <input class="inp font-mons" name="shipping_address" placeholder="Cím" type="text" required>
                            <input class="inp font-mons" name="shipping_city" placeholder="Város" type="text" required>
                            <select class="form-content__element form-content__select change-package-selector2 form_control font-mons" name="quantity" required>
                                @foreach($prices as $singlePrice)
                                    <option value="{{ $singlePrice['quantity'] }}"
                                            @if($singlePrice['is_default']) selected @endif
                                    >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} {{ $singlePrice['currency'] }})</option>
                                @endforeach
                            </select>
                            @foreach($prices as $singlePrice)
                                <div class="{{ $singlePrice['quantity'] }}_pack item-gift" id="{{ $singlePrice['quantity'] }}" @if($singlePrice['quantity'] === 1) style="display: block" @endif> {{ $singlePrice['quantity'] }} x {{ $product->product_name }} <br><strike class="old"> {{ $prices[$singlePrice['quantity']]['originalPrice'] }} {{ $singlePrice['currency'] }} </strike> {{ $prices[$singlePrice['quantity']]['amount'] }} {{ $singlePrice['currency'] }} <br> @if($singlePrice['is_free_shipping']) + INGYENES SZÁLLÍTÁS @endif</div>
                            @endforeach
                            <button class="btn js_submit button__text">RENDELJE MEG MOST</button>
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
