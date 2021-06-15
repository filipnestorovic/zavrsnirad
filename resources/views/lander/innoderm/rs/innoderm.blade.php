<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
    <link type="text/css" href="{{ asset('/') }}innodermFiles/innoderm/order_me.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('/') }}innodermFiles/innoderm/styles.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300italic,300,500,500italic,700,700italic&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}innodermFiles/innoderm/s3_leaf.png" type="image/png" rel="icon">
    <style type="text/css">.s1-print{top: 63px;}.s1-icons .icon-2{padding-left: 50px;padding-right: 50px;}.custom_select select{height: 85%;}</style>
</head>
<body>
<div class="page">
    @include('components.display_errors')
    <div class="slide-1-bg">
        <div class="slide-1">
            <div class="content-block">
                <div class="s1-content-block"><img alt="Inno Derm" class="s1-product" src="{{ asset('/') }}innodermFiles/innoderm/kremaKutija.png" />
                    <h1> Inno Derm </h1>
                    <div class="s1-print"> Intenzivno
                        <p> podmlađivanje </p>
                    </div>
                    <div class="h2-wr">
                        <h2 class="s1-h2"> Savršena koža za <span class="size">12</span> <span class="color">  dana  </span></h2></div>
                    <ul class="s1-icons">
                        <li class="icon-1">
                            <p class="text-1"> Smanjuje </p>
                            <p class="text-2"> bore </p>
                        </li>
                        <li class="icon-2">
                            <p class="text-1"> Vraća </p>
                            <p class="text-2"> elastičnost </p>
                        </li>
                        <li class="icon-3">
                            <p class="text-1"> Zateže </p>
                            <p class="text-2"> lice </p>
                        </li>
                    </ul>
                    <div class="float-content s1-discount-wr">
                        <div class="float-left s1-discount-block">
                            <p class="s1-discount-text"> Popust </p>
                            <p class="s1-discount-value"> -40% </p>
                            <p class="s1-discount-atext"> za prvu narudžbu </p>
                        </div>
                        <div class="float-left s1-prices-block">
                            <div class="old-price"> {{ $prices[1]['originalPrice'] }} RSD</div>
                            <div class="new-price"> {{ $prices[1]['amount'] }} RSD</div>
                        </div>
                    </div>
                    <div class="s1-button-wr">
                        <div class="s1-button pre_toform" data-scroll=""> Naručite <span>  ODMAH  </span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-2">
            <div class="content-block">
                <div class="s2-content-block">
                    <ul class="s2-icons">
                        <li class="icon-1">
                            <p class="text-1"> Moćna doza </p>
                            <p class="text-2"> vitamina </p>
                            <p class="text-1"> za vašu kožu </p>
                        </li>
                        <li class="icon-2">
                            <p class="text-1"> Hidrira </p>
                            <p class="text-2"> tokom 48 sati </p>
                        </li>
                        <li class="icon-3">
                            <p class="text-1"> Ujednačava </p>
                            <p class="text-2"> ten </p>
                        </li>
                        <li class="icon-4">
                            <p class="text-2"> Zateže </p>
                            <p class="text-1"> mimičke i </p>
                            <p class="text-1"> dubinske bore </p>
                        </li>
                        <li class="icon-5">
                            <p class="text-1"> Potiče </p>
                            <p class="text-2"> regeneraciju </p>
                            <p class="text-1"> kože </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="slide-3">
            <div class="content-block">
                <div class="s3-content-block">
                    <div class="s3-h2-wr">
                        <h2 class="s3-h2"> Glavni problemi sa kožom <span>  nakon  </span> <span class="background">30</span></h2></div>
                    <ul class="s3-icons float-content">
                        <li class="icon-1">
                            <div class="text-1"> Gubitak oblika, opuštanje kože</div>
                            <div class="s3-icons-border"></div>
                            <div class="text-2"> kod <span> 88% </span> žena</div>
                        </li>
                        <li class="icon-2">
                            <div class="text-1"> Velike pore i
                                <p> iritirana koža </p>
                            </div>
                            <div class="s3-icons-border"></div>
                            <div class="text-2"> kod 83% žena</div>
                        </li>
                        <li class="icon-3">
                            <div class="text-1"> Prve dubinske bore</div>
                            <div class="s3-icons-border"></div>
                            <div class="text-2"> kod 71% žena</div>
                        </li>
                        <li class="icon-4">
                            <div class="text-1"> Neujednačen
                                <p> ten </p>
                            </div>
                            <div class="s3-icons-border"></div>
                            <div class="text-2"> kod 44% žena</div>
                        </li>
                    </ul>
                    <div class="s3-bottom-text"> *prema istraživanjima sprovedenim nad <span>1590</span> žena iz <span>38</span> zemalja starosti od 30-60 godina </div>
                </div>
            </div>
        </div>
    </div>
    <!--/slide-1-bg-->
    <div class="slide-4-bg">
        <div class="slide-4">
            <div class="content-block">
                <div class="s4-content-block">
                    <div class="s4-sticker">
                        <p class="text-1"> Efekat </p>
                        <p class="text-2"> za nekoliko </p>
                        <p class="text-2"> dana! </p> <img alt="s7_banka_2.png" class="s4-product" src="{{ asset('/') }}innodermFiles/innoderm/kremaKutija.png" /> </div>
                    <div class="s4-button-wr">
                        <div class="s1-button pre_toform" data-scroll=""> Naručite <span>  ODMAH  </span></div>
                    </div>
                    <div class="s4-h2-wr">
                        <h2 class="s4-h2"> Inno Derm </h2></div>
                    <div class="s4-content-right">
                        <h3 class="s4-h3"> Revolucija u <span>  podmlađivanju  </span></h3>
                        <div class="s4-text"> Čista izvorska voda, temeljno izbalansiran sastav i desetine proaktivnih biljnih sastojaka omogućavaju <span>  intenzivnu negu protiv starenja  </span> i čine vašu kožu ponovo mladom. </div>
                        <div class="s4-text"><span>  Inovativna rešenja  </span> u kozmetologiji</div>
                        <div class="s4-text"> daju vidljiv rezultat za nekoliko dana.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-5">
            <div class="content-block">
                <div class="s5-content-block">
                    <div class="s5-list-block">
                        <ul class="s5-list">
                            <li class="s5-li-1">
                                <p class="s5-li-text"><span>  Inno Derm ima laganu teksturu  </span> koja čini da se ističe među drugim proizvodima. Poklonite sebi - luksuz delikatne nege koja nežno obnavlja vašu kožu! </p>
                            </li>
                            <li class="s5-li-2">
                                <p class="s5-li-text"> <span>  Zahvaljujući blagom cvetnom mirisu  </span> svakodnevna nega lica postaje ugodan ritual. </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-6">
            <div class="content-block">
                <h2 class="s6-h2"><span>  Uzroci  </span> starenja kože </h2>
                <ul class="s6-list float-content">
                    <li class="s6-li">
                        <div class="s6-li-image"><img alt="s6_pic_1.png" src="{{ asset('/') }}innodermFiles/innoderm/s6_pic_1.png" /></div>
                        <div class="title"> Manjak estrogena</div>
                        <p class="text"> Estrogen našu kožu čini glatkom, zategnutom i ujednačenom. Nivo ovog hormona se smanjuje sa godinama. </p>
                    </li>
                    <li class="s6-li">
                        <div class="s6-li-image"><img alt="s6_pic_2.png" src="{{ asset('/') }}innodermFiles/innoderm/s6_pic_2.png" /></div>
                        <div class="title"> Stres i nervoza</div>
                        <p class="text"> Dobre i loše emocije ostavljaju svoje male tragove na licu i s vremenom se pretvaraju u bore. </p>
                    </li>
                    <li class="s6-li">
                        <div class="s6-li-image"><img alt="s6_pic_3.png" src="{{ asset('/') }}innodermFiles/innoderm/s6_pic_3.png" /></div>
                        <div class="title"> Nedostatak kolagena</div>
                        <p class="text"> Kolagen daje našoj koži sposobnost obnavljanja. Njegov nedostatak ima za rezultat gubitak zategnutosti lica i oblika slova V. </p>
                    </li>
                    <li class="s6-li">
                        <div class="s6-li-image"><img alt="s6_pic_4.png" src="{{ asset('/') }}innodermFiles/innoderm/s6_pic_4.png" /></div>
                        <div class="title"> Uticaj okoline</div>
                        <p class="text"> Štetne supstance u vazduhu i vodi začepe pore na koži i izazivaju upalu. </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/slide-4-bg-->
    <div class="slide-7">
        <div class="content-block">
            <div class="s7-content-block">
                <div class="s7-h2"> <span class="text-1">4</span> <span class="text-2">  koraka ka  </span> <span class="text-3">  mladosti kože  </span> </div>
                <div class="s7-steps-block"><img alt="s7_circle_2.png" class="s7-circle" src="{{ asset('/') }}innodermFiles/innoderm/s7_circle_2.png" /> <img alt="s7_banka_2.png" class="s7-product" src="{{ asset('/') }}innodermFiles/innoderm/kremaM.png" />
                    <div class="s7-row">
                        <div class="s7-column">
                            <div class="title"> 1. Čišćenje</div>
                            <div class="text"> Pažljivo skinite šminku koristeći omiljeno sredstvo za umivanje. Zapamtite da voda ne sme biti previše vruća. Posušite kožu peškirom bez trljanja. </div>
                        </div>
                        <div class="s7-column s7-column-right">
                            <div class="title"> 2. Toniziranje</div>
                            <div class="text"> Nanesite tonik za lice na kozmetički jastučić i obrišite kožu. Ako je potrebno, učinite to dva puta da biste pripremili lice za nanošenje sredstava za negu. </div>
                        </div>
                    </div>
                    <div class="s7-row">
                        <div class="s7-column">
                            <div class="title"> 3. Hidratacija</div>
                            <div class="text"> Ovo je najvažnija faza nege lica. Izbor hidratantnog mleka predstavlja osnovu vaše nege i garanciju dugotrajne mladosti kože. Koristite inovativno mleko InnoDerm da biste se rešili već postojećih bora i sprečili pojavu novih.</div>
                        </div>
                        <div class="s7-column s7-column-right">
                            <div class="title"> 4. Nega</div>
                            <div class="text"> Nakon što ste naneli mleko, možete upotrebiti kremu- InnoDerm se upija vrlo brzo i ne ometa delovanje drugih sredstava za negu. Osim ovoga, mleko se može koristiti i kao samostalno sredstvo za prevenciju dehidratacije i starenja kože.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-8-bg">
        <div class="slide-8">
            <div class="content-block">
                <div class="s8-content-block">
                    <h2 class="s8-h2"> Tajna <p> delotvornosti </p></h2>
                    <div class="s8-row float-content">
                        <div class="s8-center-column"><img alt="s7_banka_2.png" class="s8-product" src="{{ asset('/') }}innodermFiles/innoderm/kremaM.png" />
                            <div class="s8-leaf-bg"></div>
                            <div class="s8-cream-bg"></div>
                        </div>
                        <div class="float-left s8-column">
                            <div class="s8-column-title icon-1"> Hijaluronska, folna kiselina i ekstrakt alge fukus </div>
                            <div class="s8-column-text text-right"> Hijaluronska kiselina koži daje elastičnost, čvrstoću i hidrataciju, folna kiselina <span>  pojačava efekat podmlađivanja seruma,  </span> a ekstrakt alge fukus potiče proizvodnju kolagena <span>  i povećava regeneraciju.  </span> </div>
                        </div>
                        <div class="float-right s8-column">
                            <div class="s8-column-title icon-2"> Ekstrakt čaja i alge laminaria</div>
                            <div class="s8-column-text"> Ekstrakt čaja neutrališe negativni uticaj <span>  UV zraka  </span> a ekstrakt alge laminaria <span>  umiruje i štiti  </span> osetljivu kožu. </div>
                        </div>
                    </div>
                    <div class="s8-bottom-text"> Revitalizirajući ekstrakti su proizvedeni bez upotrebe alkohola, alkalnih supstanci i glicerina. </div>
                    <div class="s8-bottom-text"> Serum ima najveći mogući sadržaj komponenata koje pogoduju zdravlju zbog prirodnog načina obrade. Sama priroda je podarila <span>  energiju Inno Derm-u.  </span></div>
                </div>
            </div>
        </div>
        <div class="slide-9">
            <div class="content-block">
                <div class="s9-content-block">
                    <h2 class="s9-h2"> Efekat <span>  kompleksa  </span></h2>
                    <h3 class="s9-h3"> Inno Derm vašu kožu čini zdravom i čvrstom, uklanja bore i
                        nesavršenosti. </h3>
                    <div class="s9-row">
                        <ul class="s9-list">
                            <li class="s9-li">
                                <div class="title"> Hidratacija i nega</div>
                                <div class="text"> Vitamini i minerali koži vraćaju njen prirodni sjaj. Blistav, zdrav ten zahvaljujući redovnoj hidrataciji. </div>
                            </li>
                            <li class="s9-li">
                                <div class="title"> Zatezanje</div>
                                <div class="text"> Proaktivni sastojci uklanjaju bore na licu i oko očiju. Koža postaje glatka, lice ponovo dobija svoj prirodni oblik slova V. </div>
                            </li>
                            <li class="s9-li">
                                <div class="title"> Zaštita</div>
                                <div class="text"> Proaktivni sastojci i snažni filteri za zaštitu od sunčevog zračenja štite kožu od nezdravog uticaja okoline. Bore i ten bez sjaja nemaju nikakve šanse. </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/slide-8-bg-->
    <div class="slide-11-bg">
        <div class="slide-11">
            <div class="content-block"><img alt="s11_banka.png" class="s11-product" src="{{ asset('/') }}innodermFiles/innoderm/kremaKutija.png" />
                <div class="s11-content-block">
                    <div class="s11-title">
                        <h2 class="s11-h2"> Inno Derm </h2>
                        <h3 class="s11-h3"> №1 <span>  proizvod  </span> za podmlađivanje </h3></div>
                    <div class="s11-text-1"> Kompleksan oporavak</div>
                    <div class="s11-text-2"> kože lica</div>
                    <div class="s11-button-wr">
                        <div class="s1-button pre_toform" data-scroll=""> Naručite <span>  ODMAH  </span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-12">
            <div class="content-block">
                <div class="s12-content-block">
                    <h2 class="s12-h2"></h2>
                    <p> Mišljenja </p> stvarnih žena
                    <ul class="s12-list">
                        <li class="s12-li">
                            <div class="s12-li-img"><img alt="s12_review_1.png" src="{{ asset('/') }}innodermFiles/innoderm/s12_review_1.png" />
                                <ul class="s12-list-2">
                                    <li class="s12-li-2"><span class="text-before">  pre  </span></li>
                                    <li class="s12-li-2"><span class="text-after">  posle  </span></li>
                                </ul>
                            </div>
                            <div class="text-1"> Ana, 37</div>
                            <div class="s12-text-2"> Postignuti rezultati za <span>  10 dana  </span></div>
                            <div class="text-3"> Nisam imala dubinske bore, nego male mimičke bore, a i boju kože je trebalo poboljšati. Uz serum Inno Derm, bore su nestale a koža lica je postala tako sveža da izgledam mlađe od 30. </div>
                        </li>
                        <li class="s12-li margin">
                            <div class="s12-li-img"><img alt="s12_review_2.png" src="{{ asset('/') }}innodermFiles/innoderm/s12_review_2.png" />
                                <ul class="s12-list-2">
                                    <li class="s12-li-2"><span class="text-before">  pre  </span></li>
                                    <li class="s12-li-2"><span class="text-after">  posle  </span></li>
                                </ul>
                            </div>
                            <div class="text-1"> Snežana, 39</div>
                            <div class="s12-text-2"> Postignuti rezultati za <span>  14 dana  </span></div>
                            <div class="text-3"> Kupila sam Inno Derm serum pre nekog vremena i već sam zadovoljna rezultatima - lice se zateglo, bore su se smanjile. Pored toga, pore su se suzile. Sada se uvek sebi divim ispred ogledala. A najvažnija stvar je da rezultati postaju vidljivi za dva dana. </div>
                        </li>
                        <li class="s12-li">
                            <div class="s12-li-img"><img alt="s12_review_3.png" src="{{ asset('/') }}innodermFiles/innoderm/s12_review_3.png" />
                                <ul class="s12-list-2">
                                    <li class="s12-li-2"><span class="text-before">  pre  </span></li>
                                    <li class="s12-li-2"><span class="text-after">  posle  </span></li>
                                </ul>
                            </div>
                            <div class="text-1"> Marija, 44</div>
                            <div class="s12-text-2"> Postignuti rezultati za <span>  13 dana  </span></div>
                            <div class="text-3"> Posle 40. godine, koža nije ista, a nisam verovala da će ovaj serum da pomogne. Ali Inno Derm je stvarno efikasan - lice izgleda svežije, boja nije tako tamna, bore nestaju. Veoma mi je drago. </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-8a">
        <div class="content-block">
            <div class="s8a-content-block">
                <div class="float-content">
                    <div class="s8-text"> Potpuna <span>  hidratacija  </span> najdubljih slojeva kože se postiže nakon nekoliko primena. </div>
                    <div class="s8-img margin-1"><img alt="s8a_pic_1.png" src="{{ asset('/') }}innodermFiles/innoderm/s8a_pic_1.png" />
                        <div class="text-before"> pre</div>
                    </div>
                    <div class="s8-img margin-2"><img alt="s8a_pic_2.png" src="{{ asset('/') }}innodermFiles/innoderm/s8a_pic_2.png" />
                        <div class="text-after"> posle</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-12-specialisty">
        <div class="content-block">
            <!--<img class="s12-bg" src="img/s12_document_bg_3.png" alt="s12_document_bg_2.png">--><img alt="s12_doctor.png" class="s12s-doctor" src="{{ asset('/') }}innodermFiles/innoderm/s12_doctor.png" />
            <div class="s12s-content-block"><img alt="s12_document_bg_2.png" class="s12-bg" src="{{ asset('/') }}innodermFiles/innoderm/s12_document_bg_2.png" />
                <div class="float-content s12s-content-top">
                    <div class="s12s-text-1 less float-left">
                        <div> Kozmetička
                            <br/> farmacija</div> podmlađivanje </div>
                    <div class="s12s-text-1 float-left"> Univerzitet
                        <p> za kozmetologiju </p> i podmlađivanje kože </div>
                    <div class="s12s-text-1 float-left"> Odsek
                        <p> za inovativna </p> rešenja</div>
                    <div class="s12-content-top-border"></div>
                </div>
                <div class="s12s-text-block">
                    <h2 class="s12s-h2"> Eksperti preporučuju </h2>
                    <div class="s12s-text-2"><img alt="s12_print.png" class="s12-print" src="{{ asset('/') }}innodermFiles/innoderm/s12_print.png" /> <img alt="s12_doctor_sign.png" class="s12-doctor-sign" src="{{ asset('/') }}innodermFiles/innoderm/s12_doctor_sign.png" /> Inno Derm je dokazao svoju efikasnost. Njegova glavna prednost je složena nega. Serum može da se koristi i za kompleksan, <span>  potpun program podmlađivanja kože lica  </span> i za preventivne mere. Bore su savršeno zaglađene, ten postaje ujednačen. Preporučujem ovaj serum svima onima koji žele da poboljšaju kvalitet kože i onima koji trebaju da zaštite kožu od bilo kakvih nedostataka. Ipak, suva koža koja se peruta može da se pobora za samo nekoliko dana i veoma je teško posle izravnati ove fine linije.
                        <div class="s12s-doctor-name">
                            <p> Andrijana Savić, </p> kozmetolog</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-14-bg">
        <div class="slide-13">
            <div class="content-block">
                <div class="s13-wave-bg"></div>
                <!--<img class="s13-wave-2" src="img/bg_13_3.png" alt="bg_13_3.png"/>-->
                <div class="float-content s13-content-top">
                    <div class="float-left s13-column">
                        <div class="s13-text"> Vrhunski
                            <div> časopisi za žene</div>
                            <p> preporučuju </p>
                        </div>
                    </div>
                    <div class="s13-product-bg"><img alt="s7_banka_2.png" class="s13-product" src="{{ asset('/') }}innodermFiles/innoderm/kremaM.png" /></div>
                    <div class="float-right s13-column">
                        <h2 class="s13-h2"> Inno Derm </h2></div>
                </div>
                <div style="display:none;" class="s13-journals-block"><img alt="s13_journals.png" src="{{ asset('/') }}innodermFiles/innoderm/s13_journals.png" /></div>
            </div>
        </div>
        <div class="slide-14">
            <div class="content-block">
                <div class="s14-content-block">
                    <div class="s14-girl-bg"></div>
                    <div class="s14-product-bg"><img alt="s7_banka_2.png" class="s14-product" src="{{ asset('/') }}innodermFiles/innoderm/kremaKutija.png" /></div>
                    <a id="hiddenClick" href="#form-order" style="display:none;"></a>
                    <form id="form-order" action="{{$orderRoute}}" method="POST">
                        {{ csrf_field() }}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <div class="form-top">
                            <h2 class="s14-h2"> Inno Derm </h2>
                            <h3 class="s14-h3"></h3>
                            <p> Efikasan način </p> <span>  da pobedite  </span> starenje i bore </div>
                        <div class="form-bottom">
                            <div class="float-content">
                                <div class="float-left s1-discount-block style2">
                                    <p class="s14-discount-value"> -40% </p>
                                    <p class="s14-discount-text"> Dajemo <span>  popust  </span></p>
                                    <p class="s14-discount-atext"> za prvu narudžbu </p>
                                </div>
                                <div class="float-left">
                                    <div class="s1-prices-block">
                                        <div class="old-price style2"> {{ $prices[1]['originalPrice'] }} RSD</div>
                                        <div class="new-price style2"> {{ $prices[1]['amount'] }} RSD</div>
                                    </div>
                                </div>
                            </div>
                            <div></div>
                            <label class="text-field" for="user_name">
                                <input id="user_name" name="name" placeholder="Ime i prezime" type="text" required /> </label>
                            <label class="text-field" for="user_phone">
                                <input class="only_number" id="user_phone" name="phone" placeholder="Telefon" type="tel" required /> </label>
                            <div class="s14-button-wr">
                                <div class="s1-button js_submit">Naruči</div>
                                <button type="submit" id="hiddenSubmit" style="display:none;"></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.pre_toform').click(function() {
            var orderForm = $('#form-order').last().offset().top;
            $('html,body').animate({
                scrollTop: orderForm
            }, 700);
            $('#hiddenClick').click();
            return false;
        });
        $('.js_submit').click(function() {
            $('#hiddenSubmit').click();
        })
    });
</script>
@include('components.pixel_footer')
</body>
</html>