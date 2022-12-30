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
            <div class="logo font-mons"><b>KIYESKI TAPASZOK</b></div>
            <div class="h1 font-mons" data-xd="t3"><b>A lapos és vonzó hasért!</b></div>
        </div>
    </div>
    <section class="sec1">
        <div class="sec1__container">
            <div class="sec1__h1 only-web sec1__text__gr font-mons" data-xd="t2">Fogyjon gyorsan és könnyen, teljesen természetes módon!</div>
            <div class="h1 only-mob sec1__text__gr font-mons" data-xd="t2">Fogyjon gyorsan és könnyen</div>
            <div class="h2 only-mob font-mons" data-xd="t2">teljesen természetes módon!</div>
            <img alt class="sec1__prod only-web" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png"><img alt class="sec1__prod only-mob" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png"><button class="btn for_scroll"> MEGRENDELNI </button>
            <div class="last__block">
                <div class="h2 blue font-mons" data-xd="t2">Fogyjon egész nap!</div>
                <div class="h1 blue font-mons" data-xd="t2">24 órás rendszer</div>
                <div class="h2 green font-mons" data-xd="t2"><b>Szabaduljon meg a zsírlerakódásoktól</b> és öblítse ki a méreganyagokat izomtömeg elvesztése nélkül</div>
                <ul class="font-PT">
                    <li><b>Javítja</b> az emésztést</li>
                    <li>100%-ban <b>természetes</b></li>
                    <li><b>Felgyorsítja</b> az anyagcserét még pihenés közben is</li>
                </ul>
                <div class="kletki font-mons"><span>zsírsejtek (előtte)</span><span>zsírsejtek (utána)</span><img alt src="{{ asset('/') }}natureteaFiles/slimonex1/photo3.png"></div>
                <img alt class="prod only-web" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png" width="300px">
            </div>
        </div>
    </section>
    <section class="sec2">
        <div class="sec2__container">
            <div class="clearfix"></div>
            <div class="sec2__grid">
                <div class="sec2__part">
                    <div class="h1 blue font-mons" data-xd="t2"> A laboratóriumi </div>
                    <div class="h2 blue font-mons" data-xd="t2">elemzés eredményei</div>
                    <p class="font-PT">
                        A laboratóriumi elemzés megállapította, hogy a termék teljesen természetes anyagokat tartalmaz,
                        <b class="green">amelyek pozitív hatással vannak az egész szervezetre.</b>
                    </p>
                    <p class="font-PT"><b class="green">Felgyorsítják a vérkeringést, fokozzák az anyagcserét és kiűzik a méreganyagokat és a folyadékot a szervezetből. </b>
                        Gyorsan elolvasztja a zsírlerakódásokat, és tónusossá és lapossá teszi a hasat.</p>
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
            <div class="h1 blue font-mons" data-xd="t2">KIYESKI TAPASZOK</div>
            <div class="h2 pink font-mons" data-xd="t2">Néhány nap alatt a teste <b>megtisztul, tele lesz energiával, és a súlya <br>láthatóan csökkenni fog.</b></div>
            <div class="sec3__grid" dir="rtl">
                <div class="sec3__part" dir="ltr">
                    <div class="only-web"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                    <div class="only-mob"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                    <div class="girl"></div>
                    <p class="white_block pink font-mons only-web">A KIYESKI BODY SHAPING TAPASZOK EGÉSZ NAPRA ENERGIÁT ADNAK</p>
                    <button class="btn for_scroll only-web"> MEGRENDELNI </button>
                </div>
                <div class="sec3__part" dir="ltr">
                    <p class="font-PT">
                        Az összetevők egyedülálló kombinációja serkenti a szervezet egészséges működését. Ez a formula nem okoz negatív hatásokat és energiacsökkenést a nap folyamán. A zsírok gyorsan megolvadnak és a felszínre dobódnak, a felgyorsult anyagcsere pedig a folyadékok kiürülését váltja ki.
                        <b class="pink">Így csökken a puffadás, könnyebbé válik a mobilitás, és a legfontosabb tényező a fogyás és a tónusos test.</b></p>
                    <ul class="font-PT">
                        <li>Javítja a szervezet állapotát</li>
                        <li>Fokozza a zsírégetést</li>
                        <li>Csökkenti a vér koleszterinszintjét</li>
                        <li>Csökkenti az étvágyat</li>
                    </ul>
                    <p class="white_block pink font-mons only-mob">A KIYESKI TESTALAKÍTÁS EGÉSZ NAP ALATT ENERGIÁT AD</p>
                    <button class="btn for_scroll only-mob"> MEGRENDELNI </button>
                </div>
            </div>
        </div>
    </section>
    <section class="sec5">
        <div class="sec5__container">
            <div class="h1 blue font-mons" data-xd="t2">KIYESKI TAPASZOK</div>
            <div class="h2 blue font-mons" data-xd="t2">Mitől olyan egyedi az összetétele?</div>
            <p class="font-PT"> Teste átalakul a természetes összetevők különleges kombinációjának köszönhetően,
                <b class="blue"> amelyek energiát biztosítanak és felgyorsítják a zsírégetést</b></p>
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
                            <p class="font-mons"> Hónap </p>
                            <ul class="font-PT">
                                <li> 1 </li>
                                <li> 2 </li>
                                <li> 3 </li>
                                <li> 4 </li>
                                <li> 5 </li>
                            </ul>
                        </div>
                        <div class="variant">
                            <div class="h1 font-mons"> Súlycsökkenés </div>
                            <ul class="font-PT">
                                <li class="red">Rendszeres diéta</li>
                                <li class="gr">KIYESKI TAPASZOK</li>
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
                            <p class="font-mons"> Hónap </p>
                            <ul class="font-PT">
                                <li> 1 </li>
                                <li> 2 </li>
                                <li> 3 </li>
                                <li> 4 </li>
                                <li> 5 </li>
                            </ul>
                        </div>
                        <div class="variant">
                            <div class="h1 font-mons">Súly fenntartása </div>
                            <ul class="font-PT">
                                <li class="red">Rendszeres diéta</li>
                                <li class="gr">KIYESKI TAPASZOK</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec7">
        <div class="sec7__container">
            <div class="h1 blue font-mons" data-xd="t2"> A felhasználók </div>
            <div class="h2 blue font-mons" data-xd="t2"> eredményei </div>
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
                            <p class="font-mons"><b class="pink"> 50 kg </b> három hónap után </p>
                        </div>
                    </div>
                </div>
                <div class="sec7__part last_block" dir="ltr">
                    <div class="sec7__girl"></div>
                    <div class="after"></div>
                    <div class="girl-name blue font-mons" data-xd="t46">Diana, 28 éves</div>
                    <p class="last-p font-PT">A szülés után híztam meg. Azt hittem, hogy könnyen lefogyok, de a sok diéta után is híztam. Állandóan éhes voltam és rossz volt a kedvem. A Kiyeski tapaszok használata után azonnal elkezdtem jobban érezni magam. Több energiám volt napközben, kevésbé voltam fáradt esténként, kevesebb stresszel éltem. Ennek eredményeként 2,5 hónap alatt elértem az ideális súlyomat. Egyébként az ideális súlyt még egy év diéta után sem értem el!</p>
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
                <div class="only-web"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                <div class="only-mob"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                <div class="girl"></div>
            </div>
            <p class="font-PT margin-left"><b class="pink">A méreganyagok már a kezelés első heteiben távoznak a szervezetből.</b><br> Ezért az eredmények azonnal láthatóak. </p>
            <p class="font-PT"><b class="pink">A 2 hét alatt a mély zsírlerakódások elkezdenek lebomlani, a lúgossági szint visszatér, és a vér összetétele javul. </b>
                A fogyás az általános egészség helyreállításának folyamata miatt lassú lehet. </p>
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
                <p class="font-PT">A Kiyeski Body Shaping egy biológiailag aktív termék, amelynek átfogó egészségjavító hatása még a környezetében élőknek is feltűnik. A pozitív eredmények vérvizsgálattal is kimutathatók. Alacsony koleszterinszint, stabil cukorszint, egészséges mennyiségű fehérje - ezt mutatják pácienseim leletei a Kiyeski tapaszoknak köszönhetően!</p>
                <div class="photo_after"></div>
            </div>
        </div>
    </section>
    <section class="sec10">
        <div class="sec10__container">
            <div class="sec10__grid">
                <div class="sec10__part"><img alt class="prod only-web" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                <div class="sec10__part">
                    <div class="h1 blue font-mons" data-xd="t2">KIYESKI TAPASZOK</div>
                    <div class="h2 pink font-mons" data-xd="t2">Formáld a tested!</div>
                    <img alt class="prod only-mob" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"><button class="btn for_scroll"> MEGRENDELNI </button>
                </div>
            </div>
        </div>
    </section>
    <section class="sec11">
        <div class="sec11__container">
            <div class="h1 blue font-mons" data-xd="t2">Mit mondanak</div>
            <div class="h2 green font-mons" data-xd="t2"> vásárlók </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Hat hónappal ezelőtt hallottam a Kiyeski Body Shaping-ről. Akkor 90 kg voltam. Mindössze két hónap alatt majdnem 20 kg-ot fogytam! Annyira boldog vagyok! Ezután lassan elkezdtem fogyni. Ennek ellenére most 62,5 kg vagyok, és jobban érzem magam, mint valaha.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm1.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Mária
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Egy éve fogytam a Kiyeski tapaszokkal. A legfontosabb, hogy nem csak 20 kg fogyásban segítettek, hanem megtisztították a testemet is. Már nem fáj a hasam, nem vagyok allergiás és tele vagyok energiával.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm2.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Mónika
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star4"></div>
                <p class="font-PT">Nagyszerűek! Már egy ideje használom őket. Jelenleg azt mondhatom, hogy teljesen megváltoztam és a testem másképp néz ki.</p>
                <p class="font-PT">
                    <b class="blue">
                        Anett
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star4"></div>
                <p class="font-PT">Egy hete használom a Kiyeski Body Shaping-et és már látom az eredményeket. A nadrágjaim már nem szűkek.</p>
                <p class="font-PT">
                    <b class="blue">
                        Karolina
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">Keményen edzettem az edzőteremben 2 évig. Ezenkívül folyamatosan diétáztam, mert 45 kg-ot akartam leadni. Nagyon nehéz volt. Úgy döntöttem, hogy kipróbálom a Kiyeski Body Shaping-et, mert már nem tudtam mit kezdeni a kilókkal.</p>
                <p class="font-PT">
                    <b class="blue">
                        Bence
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star4"></div>
                <p class="font-PT">A kollégám minden nap használja a Kiyeskit. Rengeteget fogyott! Az XL méretről S méretre ment át, szóval mondhatom, hogy ez a kiegészítő tényleg működik. Jobban működik, mint a diéta, győztes leszel.</p>
                <p class="font-PT">
                    <b class="blue">
                        Anna
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Imádom azt a könnyed érzést, amit a Kiyeski Body Shaping ad! Rengeteg energiám van a nap folyamán! A túlsúly már a múlté számomra.</p>
                <p class="font-PT">
                    <b class="blue">
                        Krisztina
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Hurrá! A Kiyeski Body Shaping valami csodálatos! Minden erőfeszítés nélkül 7 kg-ot fogytam mindössze egy hónap alatt. Most a hasizmaimon dolgozom.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm3.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Dénes
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Már több mint egy hónapja fogyok a Kiyeski tapaszokkal. Apránként csökkent az étvágyam. Elkezdtem jóllakottnak érezni magam még kis adagok után is. Nem diétáztam, csak korlátoztam a cukor és a tésztafélék fogyasztását. Ennek eredményeként 12 kg-ot fogytam. A mellkasról és a hasról eltűnt a zsír. Nézd meg az alakomat!</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm4.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Sándor
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">Ha csak fogyni akarsz, akkor ez a termék segít, de nem túl sokat. Ha sportos testet szeretne, akkor edzenie kell.</p>
                <p class="font-PT">
                    <b class="blue">
                        Panna
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">A Kiyeski Body Shaping az utolsó reményem! Már 10 éve küzdök a súlyfelesleggel. Mindent kipróbáltam. Ma rendeltem meg ezt a terméket. Majd meglátjuk mikor érkezik meg.</p>
                <p class="font-PT">
                    <b class="blue">
                        Éva
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Nem tudom, hogy mások mit gondolnak, de én nagyon elégedett vagyok ezzel a termékkel. Tényleg segített rajtam! Leadtam 23,5 kg-ot. Most már sportolni akarok! Jelenleg olyan alakom van, amit korábban el sem tudtam képzelni.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm5.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Tünde
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Szeretem használni a Kiyeski Body Shaping-et edzés előtt. Rengeteg energiát ad, ami elég ahhoz, hogy a nap folyamán minden feladatot elvégezzek.</p>
                <p class="font-PT">
                    <b class="blue">
                        Barbara
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">Egész életemben sportoltam, és mindig is problémáim voltak a derekammal és a combommal. Tökéletes testet szeretnék. Eljött az idő, hogy kipróbáljam a Kiyeski Body Shaping-et.</p>
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
                    <div class="h2 blue font-mons" data-xd="t2">KIYESKI BODY SHAPING - A lapos és vonzó hasért!</div>
                    <div class="h1 blue font-mons" data-xd="t2">KIYESKI BODY SHAPING </div>
                    <div class="h2 pink font-mons" data-xd="t2">A tökéletes testért egészségkárosodás nélkül</div>
                    <div class="discount font-PT"> -40% </div>
                    <img alt class="prod only-web" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png"><img alt class="prod only-mob" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png">
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
                            <button class="btn js_submit button__text"> MEGRENDELNI </button>
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
