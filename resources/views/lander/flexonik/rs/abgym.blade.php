<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Cache-Control" content="public">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}flexonikFiles/abgym/style.css">
    <style>
        @font-face {
            font-family: 'pf_din_text_cond';
            font-weight: normal;
            font-style: normal;
            src: url('{{ asset('/') }}fonts/PFDinTextCondPro-Medium.eot');
            src: url('{{ asset('/') }}fonts/PFDinTextCondPro-Medium.eot') format('embedded-opentype'),
            url('{{ asset('/') }}fonts/PFDinTextCondPro-Medium.woff') format('woff'),
            url('{{ asset('/') }}fonts/PFDinTextCondPro-Medium.ttf') format('truetype'),
            url('{{ asset('/') }}fonts/PFDinTextCondPro-Medium.svg') format('svg');
        }
        @font-face {
            font-family: 'pf_din_text_cond_bold';
            font-weight: bold;
            font-style: normal;
            src: url('{{ asset('/') }}fonts/PFDinTextCondPro-Bold.eot');
            src: url('{{ asset('/') }}fonts/PFDinTextCondPro-Bold.eot') format('embedded-opentype'),
            url('{{ asset('/') }}fonts/PFDinTextCondPro-Bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/PFDinTextCondPro-Bold.ttf') format('truetype'),
            url('{{ asset('/') }}fonts/PFDinTextCondPro-Bold.svg') format('svg');
        }
    </style>
</head>
<body>
<div id="body">
    @include('components.display_errors')
    <div id="header">
        <div class="el1">
            <div class="el1_1">
                <div class="mobile_logo">
                    <img src="{{ asset('/') }}flexonikFiles/abgym/logo_min.png" alt="alt">
                </div>
                <h1>Savršeni trbušnjaci za 15 minuta dnevno</h1>
                <p> AB Gymnic pojas je jedinstveni pojas za treniranje trbušnih i leđnih mišića.
                    <br>
                    <br>
                    <span class="blue">Muškarcima </span> će pomoći da brzo izgrade i da imaju željene pločice na stomaku koje će se pojaviti nakon samo nekoliko nedelja korišćenja.
                    <br>
                    <br>
                    <span class="red">Ženama </span> će pomoći da se otarase viška na struku i bokovima, kao i da eliminišu celulit. Stomak će postati ravan i zavodljiv,
                    zadnjica čvrsta, noge vitke, a koža glatka i privlačna.
                </p>
                <div class="price">
                    Popust 40%
                    <br>
                    <span class="hotprice noflag">
                        <span class="newprice">
                           <span class="al-cost price_main">
                              {{ $prices[1]['amount'] }} RSD
                           </span>
                        </span>
                     </span>
                </div>
                <div class="el1_2 up">VIŠE OD 1.500.000 PRODATO ŠIROM SVETA</div>
                <div class="top_price_mob">
                     <span class="hotprice noflag">
                        <span class="newprice">
                            Cena proizvoda:
                           <span class="al-cost price_main">
                              {{ $prices[1]['amount'] }} RSD
                           </span>
                        </span>
                     </span>
                </div>
            </div>
        </div>
        <div class="el2">
            <div class="el2_1">
                <h1>AB GYMNIC IMA 6 PROGRAMA I 10 NIVOA VEŽBANJA</h1>
                <ul>
                    <li><span>KARATE UDARAC</span>
                        Brzi trening mišićne grupe brzinom od 5 impulsa u sekundi. Program je idealan za zagrevanje i pripremu za osnovne vežbe.</li>
                    <li><span>IMPULSNA MASAŽA</span>
                        Stimulacija rada mišića brzinom od jednog impulsa u sekundi. Program je dizajniran za osnove treninga - izgradnju mišića i smanjenje obima tela.</li>
                    <li><span>TESTIRANJE</span>
                        Opšte vežbe dizajnirane za 10 minuta aktivnog rada. Idealan za duboku masažu tkiva i drenažu tečnosti.</li>
                    <li><span>ŠOK TRENING</span>
                        Kompletan program treninga, sa elementima brzog i sporog vežbanja. Duboko stimuliše unutrašnja tkiva i deluje na sve mišićne grupe.</li>
                    <li><span>ČELIČNI ČOVEK</span>
                        Profesionalni set vežbi sa velikim brojem dovoljno brzih elemenata za postizanje maksimalnih rezultata.</li>
                    <li><span>SAGOREVAČ MASTI</span>
                        Stabilne niske frekvencije rade za duboku masažu mišića i susednih tkiva. Program je efikasan u borbi protiv masti i celulita.</li>
                </ul>
            </div>
        </div>
        <div class="el3">
            <div class="el3_1">
                <div class="el3_3">
                    <h2>KAKO FUNKCIONIŠE AB GYMNIC</h2>
                    <p>AB Gymnic šalje signale koji stimulišu nerve koji su odgovorni za rad trbušnih mišića. Kao rezultat toga, osećate snažne, duboke ali i udobne kontrakcije koje
                        postepeno treniraju vaše trbušne mišiće bez potrebe za bilo kakvih drugim treningom.
                        <br><br>
                        Kao i kod bilo koje metode treninga mišića, redovna vežba je neophodna za postizanje rezultata. Koristite pojas svaki dan i videćete da će do kraja prve
                        nedelje mišići na kojima ste radili primetno ojačati. Nemojte prestati da vežbate, a rezultati će biti brzo uočljivi.
                        Nakon toga, da biste održbali formu, koristite pojas 2-3 puta nedeljno.
                        <br><br>
                        Ovo je najbolji, najlakši i najbrži način za vraćanje trbušnih mišića nakon porođaja.
                    </p>
                </div>
                <div class="el3_2"> <a href="#container_form">PORUČITE SADA</a> </div>
            </div>
        </div>
        <div class="el4">
            <div class="el4_1">
                <h1>8 PREDNOSTI AB GYMNIC-A</h1>
                <table class="up first-child">
                    <tbody>
                    <tr>
                        <td>&nbsp;</td>
                        <td>10 REŽIMA TRENINGA: OD MASAŽE I ANTICELULIT PROGRAMA DO IZGRADNJE MIŠIĆA</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>POSPEŠUJE AKTIVNO SAGOREVANJE MASTI I GUBITAK TEŽINE</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>POMAŽE DA SE BRŽE IZGRADI MIŠIĆ I DA SE TELO OPORAVI</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>ELIMINIŠE CELULIT I ČINI KOŽU GLATKOM I ZATEGNUTOM</td>
                    </tr>
                    </tbody>
                </table>
                <table class="up">
                    <tbody>
                    <tr>
                        <td>&nbsp;</td>
                        <td>POBOLJŠAVA CIRKULACIJU KRVI I TONUS MIŠIĆA</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>DOVOLJNO JE POSVETITI SAMO 15-30 MINUTA TRENINGU DNEVNO</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>AB GYMNIC SE SMATRA PROFESIONALNIM STIMULATOROM MIŠIĆA I GARANTUJE BRZE I EFIKASNE REZULTATE</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>VIDLJIVI REZULTATI NAKON 5-6 DANA REDOVNOG TRENINGA</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="el5">
            <div class="el5_1">
                <h1>NEKOLIKO UTISAKA NAŠIH KUPACA</h1>
                <div class="el5_2 default">
                    <div class="el5_2_sex el5_2_sex_men"></div>
                    <p class="title up"><span>SERGEJ,</span> 34 godine </p>
                    <p class="text">Hteo sam da se otarasim sala na bokovima i stomaku. Ranije sam se bavio dizanjem tegova, ali sada nemam vremena. Žena mi sve više zamerala zbog stomaka
                        koji se pojavio. Odlučio sam da naručim pojas, i ispostavilo se da je jako efikasan.</p>
                    <p class="img"><img src="{{ asset('/') }}flexonikFiles/abgym/3.jpg"></p>
                </div>
                <div class="el5_2 fem-block target-block">
                    <div class="el5_2_sex el5_2_sex_women"></div>
                    <p class="title up"><span>VIOLETA,</span> 27 godina </p>
                    <p class="text">Verenik mi je naručio pojas specijalno za mene da bih mogla malo da smršam. Koristila sam ga 2 nedelje i jako mi se dopao jer su već bili vidljivi neki rezultati.
                        Nakon mesec dana uspela sam da formiran trbušne mišiće, smršala sam 9 kilograma i što je najvažnije moj verenik je srećan. :)</p>
                    <p class="img"><img src="{{ asset('/') }}flexonikFiles/abgym/3fem.jpg"></p>
                </div>
                <div class="el5_2 r fem-block target-block">
                    <div class="el5_2_sex el5_2_sex_women"></div>
                    <p class="title up"><span>SVETLANA, </span> 28 godina</p>
                    <p class="text">Imala sam višak kilograma i to mi je mnogo smetalo. Prosto se nisam osećala lepo u svojoj koži. Moj suprug je na internetu video reklamu za AB GYMNIC i
                        prosledio mi je. Pomislila sam zašto da ne poručim, nije visoka cena i nemam šta mnogo da izgubim. Nakon mesec dana korišćenja, shvatila sam da je ovo najbolji
                        proizvod koji sam ikada kupila. Sve preporuke!</p>
                    <p class="img"><img src="{{ asset('/') }}flexonikFiles/abgym/4.jpg"></p>
                </div>
                <div class="el5_2 r man-block target-block">
                    <div class="el5_2_sex el5_2_sex_men"></div>
                    <p class="title up"><span>IVAN, </span> 38 GODINA</p>
                    <p class="text">Imam 14 godina mlađu suprugu i nije baš bilo ok da pored nje izgledam kao starac. Kolega sa posla mi je rekao da koristi neki AB Gymnic i da daje rezulate.
                        Iskreno, nisam imao neko poverenje u te sprave za mršavljenje, ali ovaj proizvod je dao rezultat veći nego što sam očekivao. Moja supruga se ponovo zaljubila
                        u mene i po malo je ljubomorna kada dobijem komplimente od poznanica.</p>
                    <p class="img"><img src="{{ asset('/') }}flexonikFiles/abgym/man4.jpg"></p>
                </div>
                <div class="el5_2">
                    <div class="el5_2_sex el5_2_sex_women"></div>
                    <p class="title up"><span>ALEKSANDRA,</span> 24 godine</p>
                    <p class="text">Već treću nedekju koristim Ab Gymnic pojas i veoma sam zadovoljna rezultatima, struk je postao mnogo tanji i osećam se zgodno kako sam oduvel želela. Hvala vam!</p>
                    <p class="img"><img src="{{ asset('/') }}flexonikFiles/abgym/5.jpg"></p>
                </div>
                <div class="el5_2 r">
                    <div class="el5_2_sex el5_2_sex_men"></div>
                    <p class="title up"><span>FILIP,</span> 25 godina</p>
                    <p class="text">Vrlo kul stvar, rezultat je očigledan. Skoro 2 godine idem u teretanu, tamo sam dobijao mišićnu masu ali nikako nisam uspevao da definišem mišiće.
                        Sada imam figuru kao sa reklame. Ab Gymnic je vrhunska stvar!</p>
                    <p class="img"><img src="{{ asset('/') }}flexonikFiles/abgym/1.jpg"></p>
                </div>
                <div class="clear_both"></div>
                <div class="form" id="container_form">
                    <h1>UNESITE PODATKE ZA DOSTAVU</h1>
                    <form id="order_form" action="{{$orderRoute}}" method="post" class="hotorder-form formorder al-form order_form">
                        {{csrf_field()}}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <div class="name-inp">Ime i prezime</div>
                        <input name="name" class="text" value="" placeholder="Ime i prezime" required>
                        <div class="name-inp">Telefon</div>
                        <input name="phone" class="text" value="" type="tel" placeholder="Telefon" required>
                        <div class="name-inp">Adresa</div>
                        <input name="shipping_address" class="text" value="" placeholder="Adresa" required>
                        <div class="name-inp">Grad</div>
                        <input name="shipping_city" class="text" value="" placeholder="Grad" required>
                        <div class="with_delivery" style="font-size:20px;line-height:20px;">
                            Nova cena proizvoda:
                            <span class="price_with_delivery">
                              <span class="hotprice noflag">
                                 <span class="newprice">
                                    <span class="al-cost price_main">
                                       {{ $prices[1]['amount'] }} RSD
                                    </span>
                                 </span>
                              </span>
                           </span>
                        </div>
                        <input type="submit" value="PORUČITE" class="ordr_btn">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="delivery-section">
        <div class="max-wrap">
            <div class="delivery-post">
                <div class="deliver-holder">
                    <span class="post-country icon-post"></span>
                    <span class="post-country-alt icon-post"></span>
                    <strong class="delivery-label">Dostava</strong>
                </div>
                <div class="delivery-note"><span>Garantujemo kvalitet. <em>Plaćanje pouzećem.</em></span></div>
            </div>
        </div>
    </div>
    <div class="work-section">
        <div class="max-wrap">
            <div class="work-steps">
                <div class="steps">
                    <span class="steps-label">Kako radimo:</span>
                    <div class="steps-wrap">
                        <ul class="steps-list">
                            <li>
                                <div class="step-item">
                                    <div class="step-img"><span class="icon-step-01"></span></div>
                                    <span class="step-description">Unesite podatke za dostavu na našem sajtu</span>
                                </div>
                            </li>
                            <li>
                                <div class="step-item">
                                    <div class="step-img"><span class="icon-step-02"></span></div>
                                    <span class="step-description">Potvrdićemo porudžbinu u najkraćem roku</span>
                                </div>
                            </li>
                            <li>
                                <div class="step-item">
                                    <div class="step-img"><span class="icon-step-03"></span></div>
                                    <span class="step-description">Robu šaljemo u roku od 1-2 radna dana</span>
                                </div>
                            </li>
                            <li>
                                <div class="step-item">
                                    <div class="step-img"><span class="icon-step-04"></span></div>
                                    <span class="step-description">Pošiljku plaćate kuriru prilikom preuzimanja</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="call"><span><strong class="call-title">Naši operateri</strong> <span class="call-sub-title">su spremni da Vam pomognu ukoliko je potrebno - poručite!</span></span>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.pixel_footer')
</body>
</html>