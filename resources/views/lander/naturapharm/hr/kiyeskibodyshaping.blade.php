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
            <div class="h1 font-mons" data-xd="t3"><b>Za ravan i privlačan trbuh!</b></div>
        </div>
    </div>
    <section class="sec1">
        <div class="sec1__container">
            <div class="sec1__h1 only-web sec1__text__gr font-mons" data-xd="t2">Smršajte brzo i jednostavno, na potpuno prirodan način!</div>
            <div class="h1 only-mob sec1__text__gr font-mons" data-xd="t2"> Smršajte brzo i jednostavno </div>
            <div class="h2 only-mob font-mons" data-xd="t2"> na potpuno prirodan način! </div>
            <img alt class="sec1__prod only-web" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png"><img alt class="sec1__prod only-mob" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png"><button class="btn for_scroll"> NAPRAVITE NARUDŽBU </button>
            <div class="last__block">
                <div class="h2 blue font-mons" data-xd="t2">Mršavite cijeli dan!</div>
                <div class="h1 blue font-mons" data-xd="t2">24-satni sustav</div>
                <div class="h2 green font-mons" data-xd="t2"><b>Riješite se masnih naslaga</b> i izbacite toksine bez gubitka mišićne mase</div>
                <ul class="font-PT">
                    <li><b> Poboljšava </b> probavu </li>
                    <li> 100% <b> prirodan </b></li>
                    <li><b> Ubrzava </b> metabolizam čak i kada se odmarate </li>
                </ul>
                <div class="kletki font-mons"><span>masne stanice (prije)</span><span>masne stanice (poslije)</span><img alt src="{{ asset('/') }}natureteaFiles/slimonex1/photo3.png"></div>
                <img alt class="prod only-web" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png" width="300px">
            </div>
        </div>
    </section>
    <section class="sec2">
        <div class="sec2__container">
            <div class="clearfix"></div>
            <div class="sec2__grid">
                <div class="sec2__part">
                    <div class="h1 blue font-mons" data-xd="t2"> Rezultati </div>
                    <div class="h2 blue font-mons" data-xd="t2">laboratorijskih analiza</div>
                    <p class="font-PT">Laboratorijska analiza utvrdila je da proizvod sadrži <b class="green"> potpuno prirodne tvari koje pozitivno djeluju na cijeli organizam.</b></p>
                    <p class="font-PT"><b class="green">Ubrzava cirkulaciju, ubrzava metabolizam i izbacuje toksine i tekućinu iz tijela.</b> Brzo topi masne naslage i čini trbuh zategnutim i ravnim.</p>
                </div>
                <div class="sec2__part"></div>
            </div>
            <div class="ingridients"></div>
            <div class="woman"></div>
        </div>
    </section>
    <section class="sec3">
        <div class="sec3__container">
            <span class="h2 blue font-mons" data-xd="t2">Započnite svoj dan s energijom koju pružaju</span>
            <div class="h1 blue font-mons" data-xd="t2">KIYESKI BODY SHAPING</div>
            <div class="h2 pink font-mons" data-xd="t2">Za samo nekoliko dana vaše tijelo će biti <b>pročišćeno, puno energije, a kilogrami će biti vidno smanjeni.</b></div>
            <div class="sec3__grid" dir="rtl">
                <div class="sec3__part" dir="ltr">
                    <div class="only-web"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                    <div class="only-mob"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                    <div class="girl"></div>
                    <p class="white_block pink font-mons only-web">KIYESKI BODY SHAPING DAJE VAM ENERGIJU TIJEKOM CIJELOG DANA</p>
                    <button class="btn for_scroll only-web"> NAPRAVITE NARUDŽBU </button>
                </div>
                <div class="sec3__part" dir="ltr">
                    <p class="font-PT">
                        Jedinstvena kombinacija sastojaka potiče zdravo funkcioniranje organizma. Ova formula ne uzrokuje negativne učinke ni padove energije tijekom dana. Masti se brzo tope i izbacuju na površinu, a ubrzani metabolizam potiče izbacivanje tekućine.
                        <b class="pink">Na taj način smanjuje se nadutost, olakšava pokretljivost, a najvažniji faktor je mršavljenje i zategnuto tijelo.</b></p>
                    <ul class="font-PT">
                        <li>Poboljšava stanje organizma</li>
                        <li>Povećava sagorijevanje masti</li>
                        <li>Smanjuje razinu kolesterola u krvi</li>
                        <li>Smanjuje apetit</li>
                    </ul>
                    <p class="white_block pink font-mons only-mob">KIYESKI BODY SHAPING DAJE VAM ENERGIJU TIJEKOM CIJELOG DANA</p>
                    <button class="btn for_scroll only-mob"> NAPRAVITE NARUDŽBU </button>
                </div>
            </div>
        </div>
    </section>
    <section class="sec5">
        <div class="sec5__container">
            <div class="h1 blue font-mons" data-xd="t2"> KIYESKI BODY SHAPING </div>
            <div class="h2 blue font-mons" data-xd="t2">Što je tako jedinstveno u njegovom sastavu?</div>
            <p class="font-PT">
                Vaše tijelo se transformira zahvaljujući posebnoj kombinaciji prirodnih sastojaka
                <b class="blue">koji daju energiju i ubrzavaju sagorijevanje masti</b></p>
            <div class="sec5__grid">
                <div class="sec5__part">
                    <div class="grafic grafic1">
                        <div class="vertical">
                            <p class="font-mons">Gubitak težine u kg</p>
                            <ul class="font-PT">
                                <li> -15 </li>
                                <li> -12 </li>
                                <li> -10 </li>
                                <li> -5 </li>
                                <li> -3 </li>
                            </ul>
                        </div>
                        <div class="horisontal">
                            <p class="font-mons"> Mjesec </p>
                            <ul class="font-PT">
                                <li> 1 </li>
                                <li> 2 </li>
                                <li> 3 </li>
                                <li> 4 </li>
                                <li> 5 </li>
                            </ul>
                        </div>
                        <div class="variant">
                            <div class="h1 font-mons"> Gubitak težine </div>
                            <ul class="font-PT">
                                <li class="red"> Obične dijete </li>
                                <li class="gr"> Kiyeski Body Shaping </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sec5__part">
                    <div class="grafic grafic2">
                        <div class="vertical">
                            <p class="font-mons"> Održavanje težine u kg </p>
                            <ul class="font-PT">
                                <li> 80 </li>
                                <li> 70 </li>
                                <li> 60 </li>
                                <li> 50 </li>
                                <li> 45 </li>
                            </ul>
                        </div>
                        <div class="horisontal">
                            <p class="font-mons"> Mjesec </p>
                            <ul class="font-PT">
                                <li> 1 </li>
                                <li> 2 </li>
                                <li> 3 </li>
                                <li> 4 </li>
                                <li> 5 </li>
                            </ul>
                        </div>
                        <div class="variant">
                            <div class="h1 font-mons"> Održavanje težine </div>
                            <ul class="font-PT">
                                <li class="red"> Obične dijete </li>
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
            <div class="h1 blue font-mons" data-xd="t2"> Rezultati </div>
            <div class="h2 blue font-mons" data-xd="t2"> korisnika </div>
            <div class="sec7__grid" dir="rtl">
                <div class="sec7__part" data-xd="t47" dir="ltr">
                    <div class="sec7__grid inner__grid">
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/bf.jpg">
                            <p class="font-mons"><b class="blue"> 67,5 kg </b> Prije </p>
                        </div>
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af1.jpg">
                            <p class="font-mons"><b class="light_blue"> 60 kg </b> nakon jednog mjeseca </p>
                        </div>
                    </div>
                    <div class="sec7__grid inner__grid">
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af3.jpg">
                            <p class="font-mons"><b class="green"> 55 kg </b> nakon dva mjeseca </p>
                        </div>
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af2.jpg">
                            <p class="font-mons"><b class="pink"> 50 kg </b> nakon tri mjeseca </p>
                        </div>
                    </div>
                </div>
                <div class="sec7__part last_block" dir="ltr">
                    <div class="sec7__girl"></div>
                    <div class="after"></div>
                    <div class="girl-name blue font-mons" data-xd="t46"> Diana, 28 godina </div>
                    <p class="last-p font-PT">Udebljala sam se nakon poroda. Mislila sam da ću lako smršaviti, ali nakon brojnih dijeta i dalje sam se debljala. Stalno sam bila gladna i loše volje. Nakon korištenja Kiyeski flastera, odmah sam se počela osjećati bolje. Imala sam više energije tijekom dana, a navečer sam bila manje umorna, živjela sam s manje stresa. Kao rezultat toga, dosegla sam svoju idealnu težinu u roku od 2,5 mjeseca. Inače, ni nakon godinu dana dijete nisam dosegla idealnu težinu!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec8">
        <div class="sec8__container">
            <div class="up_block">
                <div class="h2 blue font-mons" data-xd="t2">Brzo mršavljenje u prva 2 tjedna</div>
                <div class="h1 blue font-mons" data-xd="t2"> 12 kg manje </div>
                <div class="h2 pink font-mons" data-xd="t2">unutar 2 mjeseca</div>
                <p class="font-PT up_p"> Takvi se rezultati postižu zahvaljujući kombinaciji dvaju čimbenika - <b class="blue"> razgradnja masti + eliminacija toksina. </b></p>
                <div class="only-web"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                <div class="only-mob"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                <div class="girl"></div>
            </div>
            <p class="font-PT margin-left"><b class="pink">Toksini napuštaju tijelo već tijekom prvih tjedana liječenja.</b><br> Zato su rezultati vidljivi odmah. </p>
            <p class="font-PT"><b class="pink">Tijekom 2 tjedna, duboke masne naslage počinju se razgrađivati, razina lužnatosti se vraća, a sastav krvi se poboljšava.</b> Gubitak težine može biti spor zbog procesa obnove cjelokupnog zdravlja. </p>
        </div>
    </section>
    <section class="sec9">
        <div class="sec9__container">
            <div class="h2 blue font-mons" data-xd="t2"> Preporuka od </div>
            <div class="h1 green font-mons" data-xd="t2"> specijalista </div>
            <div class="dietolog">
                <div class="photo-name_block">
                    <div class="girl"></div>
                    <p class="blue font-mons"> Julija, <br> dijetetičarka </p>
                </div>
                <p class="font-PT">Kiyeski Body Shaping je biološki aktivan proizvod sa sveobuhvatnim učinkom na poboljšanje zdravlja koji će primijetiti i ljudi oko vas. Pozitivni rezultati također se mogu vidjeti u nalazima krvi. Niska razina kolesterola, stabilna razina šećera, zdrava količina proteina ono su što pokazuju nalazi mojih pacijenata zahvaljujući proizvodu Kiyeski Body Shaping!</p>
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
                    <div class="h2 pink font-mons" data-xd="t2">Oblikujte svoje tijelo!</div>
                    <img alt class="prod only-mob" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"><button class="btn for_scroll"> NAPRAVITE NARUDŽBU </button>
                </div>
            </div>
        </div>
    </section>
    <section class="sec11">
        <div class="sec11__container">
            <div class="h1 blue font-mons" data-xd="t2">Što kupci</div>
            <div class="h2 green font-mons" data-xd="t2"> kažu </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Čula sam za Kiyeski Body Shaping prije 6 mjeseci. Tada sam imala 90 kg. U samo dva mjeseca izgubila sam gotovo 20 kg! Tako sam sretna! Nakon toga sam počela polako gubiti kilograme. Unatoč tome, sada imam 62,5 kg i osjećam se bolje nego ikad.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm1.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Marija
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Smršavila sam uz Kiyeski prije godinu dana. Najvažnije je da su mi ne samo pomogli izgubiti 20 kg, već su mi i očistili tijelo. Trbuh me više ne boli, nemam alergije i osjećam se punom energije.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm2.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Adrijana
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star4"></div>
                <p class="font-PT">Odlični su! Koristim ih već neko vrijeme. Trenutno mogu reći da sam se potpuno promijenila i da moje tijelo izgleda drugačije.</p>
                <p class="font-PT">
                    <b class="blue">
                        Klaudija
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star4"></div>
                <p class="font-PT">Koristim Kiyeski Body Shaping tjedan dana i već vidim rezultate. Hlače mi više nisu tijesne.</p>
                <p class="font-PT">
                    <b class="blue">
                        Miroslava
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">Naporno sam trenirao u teretani 2 godine. Uz to sam stalno bio na dijeti jer sam htio smršaviti 45 kg. Bilo je jako teško. Odlučio sam isprobati Kiyeski Body Shaping jer više ne znam što ću s kilogramima.</p>
                <p class="font-PT">
                    <b class="blue">
                        Bojan
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star4"></div>
                <p class="font-PT">Moj kolega koristi Kiyeski svaki dan. Puno je smršavio! Prešao je s XL veličine na S, tako da mogu reći da ovaj dodatak stvarno djeluje. Djeluje bolje od dijete, rezultati su stvarno vidljivi.</p>
                <p class="font-PT">
                    <b class="blue">
                        Ana
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Sviđa mi se osjećaj lakoće koji daje Kiyeski Body Shaping! Imam puno energije tijekom dana! Višak kilograma za mene je prošlost.</p>
                <p class="font-PT">
                    <b class="blue">
                        Kristina
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Jej! Kiyeski Body Shaping je nešto nevjerojatno! Smršavio sam 7 kg bez imalo truda u samo mjesec dana. Sada radim na trbušnjacima.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm3.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Želimir
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">S Kiyeski flasterima mršavim već više od mjesec dana. Malo po malo, moj apetit se smanjivao. Počela sam se osjećati sita čak i nakon malih porcija. Nisam bila na dijeti, samo sam ograničila unos šećera i tjestenine. Kao rezultat toga, smršavila sam 12 kg. Salo s prsa i trbuha je nestalo. Pogledajte moju figuru.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm4.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Zorica
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">Ako samo želite smršaviti, onda će vam ovaj proizvod pomoći, ali ne previše. Ako želite atletsko tijelo, morat ćete vježbati.</p>
                <p class="font-PT">
                    <b class="blue">
                        Fran
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">Kiyeski Body Shaping je moja posljednja nada! Već 10 godina se borim s viškom kilograma. Sve sam isprobala. Danas sam naručila ovaj proizvod. Vidjet ćemo kad stigne.</p>
                <p class="font-PT">
                    <b class="blue">
                        Anita
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Ne znam što drugi ljudi misle, ali ja sam jako zadovoljna ovim proizvodom. Baš mi je pomogao! Izgubila sam 23,5 kg. Sada se želim baviti sportom! Trenutno imam figuru kakvu prije nisam mogla ni zamisliti.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm5.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Jelica
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Volim koristiti Kiyeski Body Shaping prije treninga. Daju mi puno energije, dovoljno da obavim sve zadatke tijekom dana.</p>
                <p class="font-PT">
                    <b class="blue">
                        Slavica
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">Cijeli život se bavim sportom i uvijek sam imala problema sa strukom i bedrima. Želim imati savršeno tijelo. Došlo je vrijeme da isprobam Kiyeski Body Shaping.</p>
                <p class="font-PT">
                    <b class="blue">
                        Antonela
                    </b>
                </p>
            </div>
        </div>
    </section>
    <section class="sec12 js-scroll-detection">
        <div class="sec12__container">
            <div class="sec12__grid">
                <div class="sec12__part">
                    <div class="h2 blue font-mons" data-xd="t2">KIYESKI BODY SHAPING - Za ravan i privlačan trbuh!</div>
                    <div class="h1 blue font-mons" data-xd="t2"> KIYESKI BODY SHAPING</div>
                    <div class="h2 pink font-mons" data-xd="t2">Za savršeno tijelo bez štete za zdravlje</div>
                    <div class="discount font-PT"> -40% </div>
                    <img alt class="prod only-web" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png"><img alt class="prod only-mob" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png">
                </div>
                <div class="sec12__part">
                    <div class="order">
                        <form action="{{$orderRoute}}" class="form font-mons main_form" data-xd="t76" id="order_form" method="post">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class="zakaz blue"> UNESITE PODATKE ZA DOSTAVU </div>
                            <input class="inp font-mons" name="name" placeholder="Ime" type="text" required>
                            <input class="inp only_number phone-js font-mons" name="phone" placeholder="Broj telefona" type="tel" required>
                            <input class="inp font-mons" name="shipping_address" placeholder="Adresa" type="text" required>
                            <input class="inp font-mons" name="shipping_city" placeholder="Grad" type="text" required>
                            <select class="form-content__element form-content__select change-package-selector2 form_control font-mons" name="quantity" required>
                                @foreach($prices as $singlePrice)
                                    <option value="{{ $singlePrice['quantity'] }}"
                                            @if($singlePrice['is_default']) selected @endif
                                    >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} {{ $singlePrice['currency'] }})</option>
                                @endforeach
                            </select>
                            @foreach($prices as $singlePrice)
                                <div class="{{ $singlePrice['quantity'] }}_pack item-gift" id="{{ $singlePrice['quantity'] }}" @if($singlePrice['quantity'] === 1) style="display: block" @endif> {{ $singlePrice['quantity'] }} x {{ $product->product_name }} <br><strike class="old"> {{ $prices[$singlePrice['quantity']]['originalPrice'] }} {{ $singlePrice['currency'] }} </strike> {{ $prices[$singlePrice['quantity']]['amount'] }} {{ $singlePrice['currency'] }} <br> @if($singlePrice['is_free_shipping']) + BESPLATNA DOSTAVA @endif</div>
                            @endforeach
                            <button class="btn js_submit button__text"> NAPRAVITE NARUDŽBU </button>
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
