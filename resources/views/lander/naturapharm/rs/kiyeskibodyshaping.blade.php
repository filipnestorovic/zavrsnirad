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
            <div class="h1 font-mons" data-xd="t3"><b>Za ravan i privlačan stomak!</b></div>
        </div>
    </div>
    <section class="sec1">
        <div class="sec1__container">
            <div class="sec1__h1 only-web sec1__text__gr font-mons" data-xd="t2">Smršajte brzo i lako, na potpuno prirodan način!</div>
            <div class="h1 only-mob sec1__text__gr font-mons" data-xd="t2"> Smršajte brzo i lako </div>
            <div class="h2 only-mob font-mons" data-xd="t2"> na potpuno prirodan način! </div>
            <img alt class="sec1__prod only-web" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png"><img alt class="sec1__prod only-mob" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod2.png"><button class="btn for_scroll"> Naručite </button>
            <div class="last__block">
                <div class="h2 blue font-mons" data-xd="t2"> Gubite težinu tokom celog dana! </div>
                <div class="h1 blue font-mons" data-xd="t2"> 24-satni sistem </div>
                <div class="h2 green font-mons" data-xd="t2"><b> Rešite se masnih naslaga i </b> izbacite toksine bez gubitka mišićne mase </div>
                <ul class="font-PT">
                    <li><b> Poboljšava </b> probavu </li>
                    <li> 100% <b> prirodan </b></li>
                    <li><b> Ubrzava </b> metabolizam čak i kad se odmarate </li>
                </ul>
                <div class="kletki font-mons"><span> masne ćelije (pre) </span><span> masne ćelije (posle) </span><img alt src="{{ asset('/') }}natureteaFiles/slimonex1/photo3.png"></div>
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
                    <div class="h2 blue font-mons" data-xd="t2"> laboratorijske analize </div>
                    <p class="font-PT">Laboratorijskom analizom utrvđeno je da proizvod u sebi sadrži <b class="green">potpuno prirodne supstance koje pozitivno utiču na ceo organizam.</b></p>
                    <p class="font-PT"><b class="green">Pospešuju cirkulaciju, pojačavaju metabolizam i izbacivanje toksina i tečnosti iz organizma.</b> Brzo topi masne naslage i čini stomak zategnutim i ravnim.</p>
                </div>
                <div class="sec2__part"></div>
            </div>
            <div class="ingridients"></div>
            <div class="woman"></div>
        </div>
    </section>
    <section class="sec3">
        <div class="sec3__container">
            <span class="h2 blue font-mons" data-xd="t2">Započnite dan sa Energijom</span>
            <div class="h1 blue font-mons" data-xd="t2"> KIYESKI FLASTERA</div>
            <div class="h2 pink font-mons" data-xd="t2">Za samo nekoliko dana vaše telo će biti <b>pročišćeno, puno energije a kilaža će biti<br> osetno manja.</b></div>
            <div class="sec3__grid" dir="rtl">
                <div class="sec3__part" dir="ltr">
                    <div class="only-web"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                    <div class="only-mob"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                    <div class="girl"></div>
                    <p class="white_block pink font-mons only-web">KIYESKI BODY SHAPING DAJE ENERGIJU TOKOM CELOG DANA</p>
                    <button class="btn for_scroll only-web"> Naručite </button>
                </div>
                <div class="sec3__part" dir="ltr">
                    <p class="font-PT">Jedinstvena kombinacija sastojana podstiče zdravo funkcionisanje tela. Ova forumla ne uzrokuje negativne efekte i padove energije u toku dana.
                        Masti se brzo tope i izbacuju na površinu, a ubrzani metabolizam pokreće izbacivanje tečnosti. <b class="pink">Na taj način dolazi do smanjena nadutosti, lakše pokretljivosti,
                        a kao najvažniji faktor dolazi gubitak kilograma i zategnuto telo.</b></p>
                    {{--<div class="ingr_name pink font-PT"><b>List breze, cvet lipe, plod šipka, cvet kamilice i list sene</b></div>--}}
                    <ul class="font-PT">
                        <li>Poboljšava stanje organizma</li>
                        <li>Ubzava sagorevanje masti</li>
                        <li>Smanjuje nivo holesterola u krvi</li>
                        <li>Smanjuje apetit</li>
                    </ul>
                    <p class="white_block pink font-mons only-mob">KIYESKI BODY SHAPING DAJE ENERGIJU TOKOM CELOG DANA</p>
                    <button class="btn for_scroll only-mob"> Naručite </button>
                </div>
            </div>
        </div>
    </section>
    <section class="sec5">
        <div class="sec5__container">
            <div class="h1 blue font-mons" data-xd="t2"> KIYESKI BODY SHAPING </div>
            <div class="h2 blue font-mons" data-xd="t2">Šta je tako jedinstveno u njegovom sastavu?</div>
            <p class="font-PT"> Vaše telo se transformiše zahvaljujući posebnoj kombinaciji prirodnih sastojaka <b class="blue">koji daju energiju i ubrzavaju sagorevanje masti</b></p>
            <div class="sec5__grid">
                <div class="sec5__part">
                    <div class="grafic grafic1">
                        <div class="vertical">
                            <p class="font-mons"> Mršavljenje u kg </p>
                            <ul class="font-PT">
                                <li> -15 </li>
                                <li> -12 </li>
                                <li> -10 </li>
                                <li> -5 </li>
                                <li> -3 </li>
                            </ul>
                        </div>
                        <div class="horisontal">
                            <p class="font-mons"> mesec </p>
                            <ul class="font-PT">
                                <li> 1 </li>
                                <li> 2 </li>
                                <li> 3 </li>
                                <li> 4 </li>
                                <li> 5 </li>
                            </ul>
                        </div>
                        <div class="variant">
                            <div class="h1 font-mons"> Mršavljenje </div>
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
                            <p class="font-mons"> održavanje težine u kg </p>
                            <ul class="font-PT">
                                <li> 80 </li>
                                <li> 70 </li>
                                <li> 60 </li>
                                <li> 50 </li>
                                <li> 45 </li>
                            </ul>
                        </div>
                        <div class="horisontal">
                            <p class="font-mons"> mesec </p>
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
                            <p class="font-mons"><b class="blue"> 67,5 kg </b> Pre </p>
                        </div>
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af1.jpg">
                            <p class="font-mons"><b class="light_blue"> 60 kg </b> nakon mesec dana </p>
                        </div>
                    </div>
                    <div class="sec7__grid inner__grid">
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af3.jpg">
                            <p class="font-mons"><b class="green"> 55 kg </b> nakon 2 meseca </p>
                        </div>
                        <div class="sec7__part">
                            <img alt src="{{ asset('/') }}natureteaFiles/slimonex1/af2.jpg">
                            <p class="font-mons"><b class="pink"> 50 kg </b> nakon 3 meseca </p>
                        </div>
                    </div>
                </div>
                <div class="sec7__part last_block" dir="ltr">
                    <div class="sec7__girl"></div>
                    <div class="after"></div>
                    <div class="girl-name blue font-mons" data-xd="t46"> Dijana, 28 godina </div>
                    <p class="last-p font-PT">Udebljala sam se nakon porođaja. Mislila sam da ću lako da smršam, ali nakon mnogih dijeta, i dalje sam se debljala.
                        Bila sam stalno gladna i lošeg raspoloženja. Nakon korišćenja Kiyeski flastera, odmah sam počela da se osećam bolje.
                        Imala sam više energije tokom dana, uveče sam bila manje umorna, živela sam s manje stresa.
                        Kao rezultat, postigla sam idealnu težinu u roku od 2,5 meseca. Inače, nisam dolazila do idealne težine ni za godinu dana držanja dijete!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec8">
        <div class="sec8__container">
            <div class="up_block">
                <div class="h2 blue font-mons" data-xd="t2"> Brzo mršavljenje u prve 2 nedelje </div>
                <div class="h1 blue font-mons" data-xd="t2"> 12 kg manje </div>
                <div class="h2 pink font-mons" data-xd="t2"> u roku od 2 meseca </div>
                <p class="font-PT up_p"> Ovakvi rezultati se postižu zahvaljujući kombinaciji dva faktora - <b class="blue"> razgradnji masti + eliminaciji toksina. </b></p>
                <div class="only-web"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                <div class="only-mob"><img alt class="prod" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"></div>
                <div class="girl"></div>
            </div>
            <p class="font-PT margin-left"><b class="pink"> Toksini napuštaju telo već tokom prvih nedelja tretmana. </b><br> Zato su rezultati vidljivi odmah. </p>
            <p class="font-PT"> Tokom 2 nedelje, <b class="pink"> duboke naslage masti počinju da se razgrađuju, nivo alkaliteta se vraća, a sastav krvi se poboljšava. </b> Mršavljenje može da deluje sporo zbog postupka obnove celokupnog zdravlja. </p>
        </div>
    </section>
    <section class="sec9">
        <div class="sec9__container">
            <div class="h2 blue font-mons" data-xd="t2"> Preporuka </div>
            <div class="h1 green font-mons" data-xd="t2"> struke </div>
            <div class="dietolog">
                <div class="photo-name_block">
                    <div class="girl"></div>
                    <p class="blue font-mons"> Gordana, <br> dijetetičar </p>
                </div>
                <p class="font-PT">Kiyeski Body Shaping je biološki aktivan proizvod s celovitim efektom poboljšanja zdravlja koje će čak i ljudi oko vas da primete.
                    Pozitivni rezultati mogu da se vide i u analizi krvi. Nizak nivo holesterola, stabilan nivo šećera, zdrava količina proteina su ono što nalazi mojih pacijenata pokažu zahvaljujući Kiyeski flasterima!</p>
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
                    <div class="h2 pink font-mons" data-xd="t2"> Oblikujte svoje telo! </div>
                    <img alt class="prod only-mob" src="{{ asset('/') }}naturapharmFiles/kiyeskibodyshaping/prod.png"><button class="btn for_scroll"> Naručite </button>
                </div>
            </div>
        </div>
    </section>
    <section class="sec11">
        <div class="sec11__container">
            <div class="h1 blue font-mons" data-xd="t2"> Šta kažu </div>
            <div class="h2 green font-mons" data-xd="t2"> kupci </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Čula sam za Kiyeski Body Shaping pre 6 meseci. Tada sam imala 90 kg. Za samo dva meseca, smršala sam gotovo 20 kg! Presrećna sam! Nakon toga, počela sam da mršavim sporo. Uprkos tome, sad imam 62,5 kg i osećam se bolje nego ikad.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm1.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Marija
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Smršala sam sa Kiyeski flasterima pre godinu dana. Najvažnije je što nisu samo pomogli da smršam 20 kg, nego su i pročistili moje telo.
                    Stomak me više ne boli, nemam alergije i osećam da sam puna energije.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm2.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Milena
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star4"></div>
                <p class="font-PT">Odlični su! Koristim ih već neko vreme. Trenutno mogu reći da sam se potpuno promenila i da moje telo drugačije izgleda.</p>
                <p class="font-PT">
                    <b class="blue">
                        Anastasija
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star4"></div>
                <p class="font-PT">Koristim Kiyeski Body Shaping nedelju dana i već vidim rezultate. Pantalone me više ne stežu.</p>
                <p class="font-PT">
                    <b class="blue">
                        Miroslava
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">Naporno sam trenirao u teretani 2 godine. Osim toga, bio sam stalno na dijeti jer sam hteo da smršam 45 kg. Bilo je baš teško. Odlučio sam da probam Kiyeski Body Shaping jer ne znam više šta da radim s kilogramima.</p>
                <p class="font-PT">
                    <b class="blue">
                        Bojan
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star4"></div>
                <p class="font-PT">Moj kolega koristi Kiyeski svaki dan. Mnogo je smršao! Sa XL veličine je prešao na S tako da mogu reći da ovaj dodatak stvarno deluje. Bolje deluje od dijete, vi budete pobednici.</p>
                <p class="font-PT">
                    <b class="blue">
                        Ana
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Sviđa mi se osećaj lakoće koji daje Kiyeski Body Shaping! Imam mnogo energije tokom dana! Višak kilograma je za mene stvar prošlosti.</p>
                <p class="font-PT">
                    <b class="blue">
                        Kristina
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Jeeee! Kiyeski Body Shaping je nešto neverovatno! Smršao sam 7 kg bez imalo napora u samo mesec dana. Sada radim na trbušnim mišićima.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm3.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Dalibor
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Više od mesec dana sam gubila težinu sa Kiyeski flasterima. Malo po malo, apetit mi se smanjivao. Počela sam da se osećam sito već nakon malih porcija.
                    Nisam bila na dijeti, samo sam ograničila unos šećera i testenine. Kao rezultat, smršala sam 12 kg. Salo sa grudi i stomaka je nestalo. Pogledajte moju građu.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm4.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Milica
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">Ako želite samo da smršate, onda će vam ovaj proizvod pomoći, ali ne previše. Ako želite atletsko telo, morate da vežbate.</p>
                <p class="font-PT">
                    <b class="blue">
                        Saša
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">Kiyeski Body Shaping je moja zadnja nada! Borim se s viškom kilograma već 10 godina. Probala sam sve. Naručila sam danas ovo sredstvo. Videćemo kad stigne.</p>
                <p class="font-PT">
                    <b class="blue">
                        Jelena
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Ne znam šta misle drugi ljudi, ali ja sam vrlo zadovoljna ovim proizvodom. Zaista mi je pomogao! Smršala sam 23,5 kg. Sad želim da se bavim sportom!
                    Trenutno imam figuru koju pre nisam mogla ni zamisliti.</p>
                <img alt class="comm_img" src="{{ asset('/') }}natureteaFiles/slimonex1/comm5.jpg">
                <p class="font-PT">
                    <b class="blue">
                        Jovana
                    </b>
                </p>
            </div>
            <div class="comment">
                <div class="star5"></div>
                <p class="font-PT">Volim da koristim Kiyeski Body Shaping pre treninga. Daje mi mnogo energije, dovoljno da obavim sve zadatke tokom dana.</p>
                <p class="font-PT">
                    <b class="blue">
                        Aleksandra
                    </b>
                </p>
            </div>
            <div class="comment">
                <p class="font-PT">Bavim se sportom ceo život i uvek sam imala problema sa strukom i bedrima. Želim savršeno telo. Došlo je vreme da probam Kiyeski Body Shaping.</p>
                <p class="font-PT">
                    <b class="blue">
                        Dunja
                    </b>
                </p>
            </div>
        </div>
    </section>
    <section class="sec12 js-scroll-detection">
        <div class="sec12__container">
            <div class="sec12__grid">
                <div class="sec12__part">
                    <div class="h2 blue font-mons" data-xd="t2"> KIYESKI BODY SHAPING - Za ravan i privlačan stomak! </div>
                    <div class="h1 blue font-mons" data-xd="t2"> KIYESKI BODY SHAPING</div>
                    <div class="h2 pink font-mons" data-xd="t2"> Za savršeno telo bez štete po zdravlje </div>
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
                                    >{{ $singlePrice['quantity'] }} x {{ $product->product_name }} ({{ $singlePrice['amount'] }} RSD)</option>
                                @endforeach
                            </select>
                            @foreach($prices as $singlePrice)
                                <div class="{{ $singlePrice['quantity'] }}_pack item-gift" id="{{ $singlePrice['quantity'] }}" @if($singlePrice['quantity'] === 1) style="display: block" @endif> {{ $singlePrice['quantity'] }} x {{ $product->product_name }} <br><strike class="old"> {{ $prices[$singlePrice['quantity']]['originalPrice'] }} RSD </strike> {{ $prices[$singlePrice['quantity']]['amount'] }} RSD <br> @if($singlePrice['is_free_shipping']) + BESPLATNA DOSTAVA @endif</div>
                            @endforeach
                            <button class="btn js_submit button__text"> NARUČITE SADA </button>
                            <div class></div>
                            <div class="iva-wrap"> PDV uključen </div>
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
