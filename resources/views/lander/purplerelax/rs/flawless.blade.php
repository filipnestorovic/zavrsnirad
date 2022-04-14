<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset=utf-8>
    <meta content='user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0' name=viewport>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel=stylesheet href="{{ asset('/') }}purplerelaxFiles/flawless/styles.css">
    <link rel=icon type="image/png" href="{{ asset('/') }}purplerelaxFiles/flawless/2.png">
    <style>
        .newprice {
            margin-bottom: 10px;
        }
        @media (min-width:720px){
            .form_left {
                width: 30%;
            }
            .form_right {
                width: 70%;
            }
            .orderBtnCustom {
                width: 40%;
                margin-left: 30%;
            }
            .orderBtnCustom1 {
                width: 40%;
            }
        }
    </style>
</head>
<body>
<header>
    @include('components.display_errors')
    <div class=mw>
        <div class=r>
            <div class='s m g6 form_left' ></div>
            <div class='s m g6 ch form_right'>
                <img class=logo src='{{ asset('/') }}purplerelaxFiles/flawless/logo.svg'>
                <p class=ch>NABAVITE NAJMODERNIJI UREĐAJ ZA UKLANJANJE DLAČICA IKADA NAPRAVLJEN</p>
                <div class=r>
                    <div class='s m6 g6'>
                        <ul class=ul>
                            <li> <span>Dizajniran i proizveden prema najvišim svetskim standardima</span> </li>
                            <li> <span>4 plutajuće glave sa 18 karatnom pozlatom</span> </li>
                            <li> <span>Bezbolno, ne povređuje kožu, ne izaziva iritaciju</span> </li>
                            <li> <span>Pogodno za sve tipove kože</span> </li>
                        </ul>
                        <img class=slogan2 src='{{ asset('/') }}purplerelaxFiles/flawless/1.svg'>
                    </div>
                    <div class='s m6 g6'>
                        <form action="{{$orderRoute}}" method=post>
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <p style="margin-bottom: 25px;">FORMA ZA PORUČIVANJE</p>
                            <div class=timer>
                            </div>
                            <div class=price>
                                <span style='text-decoration: line-through'> <b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr> RSD</b> </span>
                                <div class=price> <b class='price_land_s4 newprice'>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr> RSD</b> </div>
                            </div>
                            <input placeholder='Ime i prezime' type=text name=name value="" required>
                            <input placeholder='Broj telefona' type=text name=phone value="" required>
                            <input placeholder='Adresa' type=text name=shipping_address value="" required>
                            <input placeholder='Grad' type=text name=shipping_city value="" required>
                            <div class=reolader>
                                <input type=submit class="mm_button js_submit" value='PORUČI ODMAH'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<article id=art1>
    <div class=mw>
        <div class=r>
            <div class=s>
                <h2 class=bg> LAKO UKLANJANJE DLAČICA <strong>uz izuzetnu mekoću kože!</strong> </h2>
            </div>
        </div>
        <div class=r>
            <div class='s m6 g6 ch'>
                <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/3.png'> </figure>
            </div>
            <div class='s m6 g6'>
                <p class=ch>Depiliranje voskom je vrlo bolno, nije higijenski i oduzima dosta vremena.</p>
                <p> Depilator "Flawless Legs" poseduje <strong style=color:black>4 plutajuće - rotirajuće glave koje tačno prate konture tela i prilagođavaju mu se.</strong> Tokom glatkog kretanja uklanjaju se sve dlačice, čak i one najkraće. Za apsolutno savršeno uklanjanje dlaka dovoljno je
                    napraviti samo jednom preći određenu površinu i dlačice nestaju. </p>
                <p class=chh> <img class=num src='{{ asset('/') }}purplerelaxFiles/flawless/num1.svg'> <span>Besprekorne oštrice pružaju suvo depiliranje bez sapuna i vode, tako da se mogu koristiti bilo kada i bilo gde.</span> </p>
                <p class=chh> <img class=num src='{{ asset('/') }}purplerelaxFiles/flawless/num2.svg'> <span>Zbog svoje male veličine idealan je za brzo uklanjanje dlaka, na primer u pauzi između posla ili pre važnog sastanka. Uklanjanje dlaka bez iritacija i povreda.</span> </p>
            </div>
        </div>
    </div>
</article>
<article id=art2>
    <div class=mw>
        <div class=r>
            <div class='s m g'>
                <h2 class=bg2> Depilacija <strong>bez iritacija i posekotina!</strong> </h2>
            </div>
        </div>
        <div class=r>
            <div class='s m6 g6'>
                <p class=ch>"Flawless Legs" - prvi uređaj za uklanjanje dlaka čije su glave prekrivene pravim medicinskim zlatom od 18 karata.</p>
                <p>Ovo vam omugućava da u potpunosti izbegnete iritaciju kože i osigurate 100% ugodnu depilaciju. Besprekorne oštrice ne izazivaju iritaciju ni na najosetljivijoj koži.</p>
                <p>Depilator poseduje laserski precizna i oštra sečiva koja su izrađena od hirurškog čelika. Takve oštrice omogućavaju bezbolno uklanjanje čak i finih dlačica. Da bi se
                    u potpunosti eliminisale posekotine i mikro povrede kože, oštrice su zatvorene u posebna kućišta.</p>
                <a class='btn chhh orderBtnCustom' href="#buy_form">PORUČITE SADA</a>
            </div>
            <div class='s m6 g6'>
                <video width="100%" controls>
                    <source src="{{ asset('/') }}purplerelaxFiles/flawless/video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class=chh>
                    <img src='{{ asset('/') }}purplerelaxFiles/flawless/logo-min.svg'>
                    <p>Zaista, najspecijalizovaniji proizvod za uklanjanje dlačica ikada!</p>
                </div>
            </div>
        </div>
    </div>
</article>
{{--<article id=art3>--}}
    {{--<div class=mw>--}}
        {{--<div class=r>--}}
            {{--<div class=s>--}}
                {{--<h2> ΚΑΤΑΛΛΗΛΟ ΓΙΑ ΑΠΟΤΡΙΧΩΣΗ <strong>οποιουδήποτε μέρους του σώματος</strong> </h2>--}}
                {{--<figure class=chh> <img src='{{ asset('/') }}purplerelaxFiles/flawless/3.jpg'> </figure>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</article>--}}
{{--<article id=art33>--}}
    {{--<div class=mw>--}}
        {{--<div class=r>--}}
            {{--<div class=s>--}}
                {{--<ul class=ul>--}}
                    {{--<li>Πρόσωπο</li>--}}
                    {{--<li>Ντεκολτέ</li>--}}
                    {{--<li>Στήθος</li>--}}
                    {{--<li>Μασχάλες</li>--}}
                    {{--<li>Χέρια + δάχτυλα</li>--}}
                    {{--<li>Πλευρά</li>--}}
                    {{--<li>Ηβική περιοχή</li>--}}
                    {{--<li>Κοιλιά</li>--}}
                    {{--<li>Μπικίνι εξωτερικά</li>--}}
                    {{--<li>Μπικίνι εσωτερικά</li>--}}
                    {{--<li>Μηροί</li>--}}
                    {{--<li>Γόνατα</li>--}}
                    {{--<li>Γάμπες</li>--}}
                    {{--<li>Αστράγαλοι</li>--}}
                    {{--<li>Δάχτυλα ποδιών</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</article>--}}
<article id=art4>
    <div class=mw>
        <div class=r>
            <div class='s m g'>
                <h2>REZULTATI UPOTREBE</h2>
                <p class=ch>Redovna upotreba "Flawless Legs" uređaja pomaže proređivanju i usporavanju rasta dlačica.</p>
                <br/>
            </div>
        </div>
        <ul class='crds r'>
            <li class='s m4 g4'>
                <div class=i>
                    <span>100%</span>
                    <p>uklanjanje dlaka bilo koje dužine, debljine i strukture</p>
                </div>
            </li>
            <li class='s m4 g4'>
                <div class=i>
                    <span>70%</span>
                    <p>mekša i baršunastija koža</p>
                </div>
            </li>
            <li class='s m4 g4'>
                <div class=i>
                    <span>2 puta</span>
                    <p>manje vemena za uklanjanje dlaka</p>
                </div>
            </li>
        </ul>
    </div>
</article>
<article id=art5>
    <div class=mw>
        <div class=r>
            <div class=s>
                <h2 class=bg2> Flawless Legs <strong>Zašto ga koristiti?</strong> </h2>
            </div>
        </div>
        <ul class='crds r'>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/4.jpg'> </figure>
                    <p>Ergonomski, inovativan i moderan dizajn</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/5.jpg'> </figure>
                    <p>Izuzetno efikasne oštrice</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/6.jpg'> </figure>
                    <p>Bez posekotina, iritacija i bolova</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/7.jpg'> </figure>
                    <p>Male veličine, lako stane u žensku torbu</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/8.jpg'> </figure>
                    <p>4 plutajuće glave osiguravaju potpuno uklanjanje dlaka</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/9.jpg'> </figure>
                    <p>Baterija traje do 4 sata pri jednom punjenju</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/10.jpg'> </figure>
                    <p>Ugrađene led lampice koje vas vode tokom uklanjanja dlaka</p>
                </div>
            </li>
            <li class='s m4 g3'>
                <div class=i>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/11.jpg'> </figure>
                    <p>Pogodno za sve tipove kože, uključujući i izuzetno osetljivu</p>
                </div>
            </li>
        </ul>
        <ul class='r chhh'>
            <li class='s m4 g55'>
                <img src='{{ asset('/') }}purplerelaxFiles/flawless/3.svg'>
                <p>Može se koristiti u kupatilu</p>
            </li>
            <li class='s m4 g55'>
                <img src='{{ asset('/') }}purplerelaxFiles/flawless/4.svg'>
                <p>Za žene svih starosnih grupa</p>
            </li>
            <li class='s m4 g55'>
                <img src='{{ asset('/') }}purplerelaxFiles/flawless/5.svg'>
                <p>Apsolutno nežan</p>
            </li>
            <li class='s m4 g55'>
                <img src='{{ asset('/') }}purplerelaxFiles/flawless/6.svg'>
                <p>Dizajniran i proizveden prema najvišim standardima</p>
            </li>
            <li class='s m4 g55'>
                <img src='{{ asset('/') }}purplerelaxFiles/flawless/7.svg'>
                <p>Usb punjenje</p>
            </li>
        </ul>
    </div>
</article>
<article id=art6>
    <div class=mw>
        <div class=r>
            <div class='s m g'>
                <h2 class=bg2> DOPADLJIVE I DAMSKE NOGE UZ "FLAWLESS LEGS" <strong>Uz druge metode uklanjanja dlačica to nije moguće!</strong> </h2>
                <a class='btn chhh' href="#buy_form" src='{{ asset('/') }}purplerelaxFiles/flawless/unknown-12'>PORUČITE SA POPUSTOM</a>
            </div>
        </div>
        <div class='r r1'>
            <div class='s m6 g6 ctr'>
                <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/4.png'> </figure>
            </div>
            <div class='s m6 g6 ctr'>
                <div>
                    <h3>Obični brijači</h3>
                    <p>Teško i dugotrajno, potrebno je koristiti kreme i pene. Često nakon brijanja dolazi do iritacije, uraslih dlaka i suve kože.</p>
                    <p>Moguće je poseći se. Nakon brijanja, dlačice se ponovo pojavlju za 2 dana.
                        Što se češće brijete, dlaka postaje gušća, tvrđa i tamnija.</p>
                    <a class=link href="#buy_form"> <img src='{{ asset('/') }}purplerelaxFiles/flawless/check.svg'> <span>Najbolje rešenje je poručiti "Flawless Legs"</span> </a>
                </div>
            </div>
        </div>
        <div class='r r2'>
            <div class='s m6 g6 ctr'>
                <div>
                    <h3>Kreme za depilaciju</h3>
                    <p>Dlačice brzo rastu i postaju još tvrđe. Mogu izazvati iritaciju i alergiju i neprijatnog su mirisa.</p>
                    <a class=link href="#buy_form"> <img src='{{ asset('/') }}purplerelaxFiles/flawless/check.svg'> <span>Najbolje rešenje je poručiti "Flawless Legs"</span> </a>
                </div>
            </div>
            <div class='s m6 g6 ctr'>
                <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/5.png'> </figure>
            </div>
        </div>
        <div class='r r3'>
            <div class='s m6 g6 ctr'>
                <div>
                    <h3>Depilacija voskom</h3>
                    <p>Veoma traumatični postupci na koži.</p>
                    <p>Često uklanjanje dlačica na ovaj način može da izazove opasne kožne bolesti.</p>
                    <a class=link href="#buy_form"> <img src='{{ asset('/') }}purplerelaxFiles/flawless/check.svg'> <span>Najbolje rešenje je poručiti "Flawless Legs"</span> </a>
                </div>
            </div>
            <div class='s m6 g6 ctr'>
                <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/6.png'> </figure>
            </div>
        </div>
        <div class='r r4'>
            <div class='s m6 g6 ctr'>
                <div>
                    <h3>Laser ili fotoliza</h3>
                    <p>Bez hemijske anestezije lidokainom (ili drugim agensima) ovi tretmani se ne izvode.
                        Mnogo kontraindikacija, jak otok i iritacija kože.</p>
                    <p class=ch>Veoma skupi tretmani. Rast dlačica se može ponovo pojaviti.</p>
                    <a class=link href="#buy_form"> <img src='{{ asset('/') }}purplerelaxFiles/flawless/check.svg'> <span>Najbolje rešenje je poručiti "Flawless Legs"</span> </a>
                </div>
            </div>
            <div class='s m6 g6'>
                <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/7.png'> </figure>
            </div>
        </div>
    </div>
</article>
<article id=art7>
    <div class=mw>
        <div class=r>
            <div class='s gm g'>
                <h2 class=bg2>MIŠLJENJE KUPACA O "FLAWLESS LEGS" UREĐAJU</h2>
            </div>
        </div>
        <ul class='crds r'>
            <li class='s m4 g4'>
                <div class=i>
                    <div class=iline> <img src='{{ asset('/') }}purplerelaxFiles/flawless/12.jpg'> <span> Marina, 24 godine, Zrenjanin <strong></strong> </span>
                        {{--<img class=dots src='{{ asset('/') }}purplerelaxFiles/flawless/8.svg'>--}}
                    </div>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/13.jpg'> </figure>
                    {{--<img src='{{ asset('/') }}purplerelaxFiles/flawless/9.svg'>--}}
                    <p>Ovo je zaista nešto drugačije. Flawless Legs je sjajan uređaj u svakom smislu.
                        Takođe mi se sviša njegov izgled. Koža mi je veoma mekana i glatka, a i moj dečko je primetio razliku. :)
                        Odličan je dizajn i kvalitet proizvoda i preporučila sam ga svojim prijateljicama.</p>
                </div>
            </li>
            <li class='s m4 g4'>
                <div class=i>
                    <div class=iline> <img src='{{ asset('/') }}purplerelaxFiles/flawless/14.jpg'> <span> Bojana, 31 godina, Beograd <strong></strong> </span>
                        {{--<img class=dots src='{{ asset('/') }}purplerelaxFiles/flawless/8.svg'> --}}
                    </div>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/15.jpg'> </figure>
                    {{--<img src='{{ asset('/') }}purplerelaxFiles/flawless/9.svg'>--}}
                    <p>Već dva meseca koristim "Flawless Legs i potpuno sam zadovoljna. Koža mi je meka, bez iritacija,
                        dlačice nakon depilacije jako sporo rastu. Pored toga, isprobala sam i druge uređaje za uklanjanje dlaka, ali ovaj je najbolji i najviše mi odgovara.
                        Izuzetno mi leži u ruci, vrlo dobro uklanja dlačice i ne zauzima mnogo prostora u torbi. Idealan je za brzinsko uklanjanje dlaka. Preporučujem ga svima.</p>
                </div>
            </li>
            <li class='s m4 g4'>
                <div class=i>
                    <div class=iline> <img src='{{ asset('/') }}purplerelaxFiles/flawless/16.jpg'> <span> Jelica, 28 godina, Niš <strong></strong> </span>
                        {{--<img class=dots src='{{ asset('/') }}purplerelaxFiles/flawless/8.svg'> --}}
                    </div>
                    <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/1.gif'> </figure>
                    {{--<img src='{{ asset('/') }}purplerelaxFiles/flawless/9.svg'>--}}
                    <p>Za moju nežnu i osetljivu kožu, ovaj depilator je pravo osveženje. Ranije, svako uklanjanje dlačica mi je bilo noćna mora. Iritacije na koži nisu nestajale danima.
                        Uz "Flawless Legs uopšte nema iritacija. Drugi uređaji su mi čupali dlačice i bilo je bolno, ali to nije slučaj sa "Flawless Legs" depilatorom.
                        Apsolutno bezbolno uklanja dlačice nez iritacije i bez crvenih tačkica. Konačno sam pronašla uređaj za uklanjanje dlaka koji je potpuno zadovoljio moja očekivanja. Mnogo vam hvala!</p>
                </div>
            </li>
        </ul>
    </div>
</article>
<article id=art8>
    <div class=mw>
        <div class=r>
            <div class='s m g'>
                <h2 class=bg> SADRŽAJ <strong>Šta sadrži paket?</strong> </h2>
            </div>
        </div>
        <div class=r>
            <div class='s m6 g6'>
                <figure> <img src='{{ asset('/') }}purplerelaxFiles/flawless/3.png'> </figure>
            </div>
            <div class='s m6 g6'>
                <ol>
                    <li>"Flawless Legs" depilator</li>
                    <li>Uputstvo za upotrebu</li>
                    <li>Kabl za punjenje</li>
                </ol>
                <div class=price>
                    <span style='text-decoration: line-through'> <span class="js_old_price oldproductsum"></span> </span>
                    <div class=price> <span class="js_new_price productsum"></span> <strong> <span class=js_curs></span> </strong> </div>
                </div>
                <a class='btn chhh orderBtnCustom1' href="#buy_form">ISKORISTITE POPUST</a>
            </div>
        </div>
    </div>
</article>
<article id=art12>
    <div class=mw>
        <div class=r>
            <div class='s m g'>
                <h2>KAKO RADIMO</h2>
            </div>
        </div>
        <ul class=r>
            <li class='s m6 g3'>
                <div class=i>
                    <img src='{{ asset('/') }}purplerelaxFiles/flawless/10.svg'>
                    <p>Popunite formu ispod podacima za dostavu</p>
                </div>
            </li>
            <li class='s m6 g3'>
                <div class=i>
                    <img src='{{ asset('/') }}purplerelaxFiles/flawless/11.svg'>
                    <p>Kontaktiraćemo Vas da potvrdimo Vašu porudžbinu</p>
                </div>
            </li>
            <li class='s m6 g3'>
                <div class=i>
                    <img src='{{ asset('/') }}purplerelaxFiles/flawless/12.svg'>
                    <p>Poslaćemo Vam paket brzom poštom bilo gde u Srbiji</p>
                </div>
            </li>
            <li class='s m6 g3'>
                <div class=i>
                    <img src='{{ asset('/') }}purplerelaxFiles/flawless/13.svg'>
                    <p>Pošiljku plaćate tek po prijemu</p>
                </div>
            </li>
        </ul>
    </div>
</article>
<footer>
    <div class=mw>
        <div class=r>
            <div class='s m g6 form_left'>
            </div>
            <div class='s m g6 ch form_right'>
                <img class=logo src='{{ asset('/') }}purplerelaxFiles/flawless/logo.svg'>
                <p class=ch>NABAVITE NAJMODERNIJI UREĐAJ ZA UKLANJANJE DLAČICA IKADA NAPRAVLJEN</p>
                <div class=r>
                    <div class='s m6 g6'>
                        <ul class=ul>
                            <li> <span>Dizajniran i proizveden prema najvišim svetskim standardima</span> </li>
                            <li> <span>4 plutajuće glave sa 18 karatnom pozlatom</span> </li>
                            <li> <span>Bezbolno, ne povređuje kožu, ne izaziva iritaciju</span> </li>
                            <li> <span>Pogodno za sve tipove kože</span> </li>
                        </ul>
                    </div>
                    <div class='s m6 g6'>
                        <form action="{{$orderRoute}}" method=post id="buy_form">
                            {{ csrf_field() }}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <p style="margin-bottom: 25px;">FORMA ZA PORUČIVANJE</p>
                            <div class=timer>
                            </div>
                            <div class=price>
                                <span style='text-decoration: line-through'> <b class=price_land_s4>{{ $prices[1]['originalPrice'] }}</b> <b class=price_land_curr> RSD</b> </span>
                                <div class=price> <b class='price_land_s4 newprice'>{{ $prices[1]['amount'] }}</b> <b class=price_land_curr> RSD</b> </div>
                            </div>
                            <input placeholder='Ime i prezime' type=text name=name value="" required>
                            <input placeholder='Broj telefona' type=text name=phone value="" required>
                            <input placeholder='Adresa' type=text name=shipping_address value="" required>
                            <input placeholder='Grad' type=text name=shipping_city value="" required>
                            <div class=reolader>
                                <input type=submit class="mm_button js_submit" value='PORUČI ODMAH'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
{{--<div class=footer style="text-align: center; font-size: 14px;">--}}
    {{--<footer style="padding: 20px 0">--}}
    {{--</footer>--}}
{{--</div>--}}
@include('components.pixel_footer')
</body>
</html>
