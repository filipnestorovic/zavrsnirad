<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/wificamera/settings.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/wificamera/slick.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/wificamera/style.css"/>
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/wificamera/150.png" type="image/x-icon">
    <style>
        .char li:last-child {
            height: auto;
        }
        .block1 {
            background: #010003 url({{ asset('/') }}dailysharkFiles/miniwifikeyboard/bg1.jpg) no-repeat center top;
            padding: 40px 0 0;
        }
        .block2 {
            padding: 70px 0 50px;
            background: #010003;
        }
        .block5 {
            padding: 60px 0 0;
            height: 480px;
            background: #010003 url({{ asset('/') }}dailysharkFiles/miniwifikeyboard/b4.jpg) no-repeat center top;
        }
        .sale {
             top: 360px;
             left: 80px;
         }
        @media screen and (max-width: 659px) {
            .block1 {
                background-image: url({{ asset('/') }}dailysharkFiles/miniwifikeyboard/b1s.jpg);
                background-position: center 60px;
                background-color: #0d0b0c;
            }
            .sale {
                left: 220px;
                top: 120px;
            }
        }
        .rev-item {
            height: 540px;
        }
        .block4 .aboutimg {
            flex-wrap: wrap;
        }
    </style>
</head>
<body class>
@include('components.display_errors')
<section class="block1">
    <div class="wrap topline">
        <div class="logo">
            <h1>
            <span class="gr-wrap"
            ><span class="gr-text">
                    <span class="gr-letter" style="color: rgb(255, 55, 15)">M</span
                    ><span class="gr-letter" style="color: rgb(255, 63, 14)">I</span
                    ><span class="gr-letter" style="color: rgb(255, 72, 13)">N</span
                    ><span class="gr-letter" style="color: rgb(255, 82, 12)">I</span
                    ><span class="gr-letter" style="color: rgb(255, 133, 5)"
                    ><span style="display: none">​</span> </span
                    ><span class="gr-letter" style="color: rgb(255, 94, 10)">K</span
                    ><span class="gr-letter" style="color: rgb(255, 103, 9)">E</span
                    ><span class="gr-letter" style="color: rgb(255, 114, 8)">Y</span
                    ><span class="gr-letter" style="color: rgb(255, 124, 6)">B</span
                    ><span class="gr-letter" style="color: rgb(255, 137, 5)">O</span
                    ><span class="gr-letter" style="color: rgb(255, 146, 4)">A</span
                    ><span class="gr-letter" style="color: rgb(255, 146, 4)">R</span
                    ><span class="gr-letter" style="color: rgb(255, 146, 4)">D</span
                    ></span
                ></span>
            </h1>
        </div>
        <ul class="toppromise">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/top1.png" alt/>
                <p>Kvalitet zagarantovan</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/top2.png" alt/>
                <p><a href="#ship">Brza dostava</a></p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/top3.png" alt/>
                <p>Plaćanje pouzećem</p>
            </li>
        </ul>
    </div>
    <div class="wrap">
        <h2>
            MINI WI-FI TASTATURA <span>sa ugradjenim touchpad-om i funkcionalnostima računarske tastature</span>
        </h2>
        <div class="sale">POPUST<span> 40%</span></div>
        <ul class="bullites">
            <li>
                <b>Laka za korišćenje</b>
                Malih je dimenzija i veoma praktična
            </li>
            <li>
                <b>Zamenjuje daljinski upravljač</b>
                Možete menjati TV kanale i jačinu zvuka
            </li>
            <li>
                <b>Široka kompatibilnost</b>
                Može se koristiti na televizorima i računarima<br>
                (i svim ostalim uređajima koji podržavaju USB vezu)
            </li>
        </ul>
        <div class="formbox">
            <div class="formbox__wink">
                <div class="formbox__price">
                    <div class="formbox__old-cost">{{ $prices[1]['originalPrice'] }} <small> RSD</small></div>
                    <div class="formbox__new-cost">{{ $prices[1]['amount'] }} <small> RSD</small></div>
                </div>
            </div>
            <form class="main-order-form main-form" method="post" action="{{$orderRoute}}">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <fieldset>
                    <input class="field" name="name" type="text" placeholder="Ime i prezime" required/>
                </fieldset>
                <fieldset>
                    <input class="field" name="phone" type="tel" placeholder="Broj telefona" required/>
                </fieldset>
                <fieldset>
                    <input class="field" name="shipping_address" type="text" placeholder="Adresa" required/>
                </fieldset>
                <fieldset>
                    <input class="field" name="shipping_city" type="text" placeholder="Grad" required/>
                </fieldset>
                <button class="btn autoink" type="submit">
                    PORUČI ODMAH
                    <div class="ink animate" style="height: 200px; width: 250px; top: -20px; left: -140px"></div>
                </button>
            </form>
        </div>
    </div>
</section>
<section class="block4">
    <div class="wrap">
        <h2 class="title">
            <span>WI-FI TASTATURA SA TOUCHPAD-OM </span>I RGB OSVETLJENJEM
        </h2>
        <p>Uz ovu <b>mini tastaturu</b> konačno se možete zavaliti i uživati u udobnosti svog doma.
            Možete <span>pretraživati na internetu i imati kompletnu kontrolu nad svojim TV uređajem</span>, bez potrebe
            za drugim daljinskim upravljačima. Veoma je kompaktna i laka za korišćenje. Potrebno je samo USB prijemnik
            (koji se nalazi ispod poklopca na zadnjoj strani tastature) ubacite u TV uređaj.</p>
        <ul class="aboutimg">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/miniwifikeyboard/about1.jpg" alt/>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/miniwifikeyboard/about2.jpg" alt/>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/miniwifikeyboard/about3.jpg" alt/>
            </li>
        </ul>
    </div>
</section>
<section class="block3">
    <div class="wrap">
        <div class="container">
            <img src="{{ asset('/') }}dailysharkFiles/miniwifikeyboard/product1.jpg" alt/>
            <div class="info">
                <h2 class="title">SVE FUNKCIONALNOSTI <span>NA JEDNOM MESTU</span></h2>
                <ul class="rec">
                    <li class="clearfix">
                        <img src="{{ asset('/') }}dailysharkFiles/wificamera/rec1.png" alt/>
                        <p>Ima posebne tastere za kontrolisanje multimedijalnih sadržaja (YouTube, Netflix, itd.)</p>
                    </li>
                    <li class="clearfix">
                        <img src="{{ asset('/') }}dailysharkFiles/wificamera/rec2.png" alt/>
                        <p>Multitouch koji možete koristiti sa više prstiju za sve funkcionalnosti.<br>
                            Prečice za otvaranje mail-a, internet pretraživača i pretragu.</p>
                    </li>
                    <li class="clearfix">
                        <img src="{{ asset('/') }}dailysharkFiles/wificamera/rec3.png" alt/>
                        <p>7 RGB boja - crvena, narandžasta, žuta, zelena, plava, tirkizna, ljubičasta.<br>
                            Šemu boja možete menjati pritiskom na Fn+F2. </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="formbox">
            <div class="formbox__wink">
                <div class="formbox__price">
                    <div class="formbox__old-cost">{{ $prices[1]['originalPrice'] }} <small> RSD</small></div>
                    <div class="formbox__new-cost">{{ $prices[1]['amount'] }} <small> RSD</small></div>
                </div>
            </div>
            <form class="main-order-form main-form" method="post" action="{{$orderRoute}}">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <fieldset>
                    <input class="field" name="name" type="text" placeholder="Ime i prezime" required/>
                </fieldset>
                <fieldset>
                    <input class="field" name="phone" type="tel" placeholder="Broj telefona" required/>
                </fieldset>
                <fieldset>
                    <input class="field" name="shipping_address" type="text" placeholder="Adresa" required/>
                </fieldset>
                <fieldset>
                    <input class="field" name="shipping_city" type="text" placeholder="Grad" required/>
                </fieldset>
                <button class="btn autoink" type="submit">
                    PORUČI ODMAH
                    <div class="ink animate" style="height: 200px; width: 250px; top: -20px; left: -140px"></div>
                </button>
            </form>
        </div>
    </div>
</section>
<section class="block6" style="padding-top: 80px;">
    <div class="wrap">
        <div class="container">
            <div class="char-left">
                <h2>Sadržaj paketa</h2>
                <img src="{{ asset('/') }}dailysharkFiles/miniwifikeyboard/kit.jpg" alt/>
            </div>
            <div class="char-right">
                <h2>Karakteristike</h2>
                <ul class="char">
                    <li>Povezivanje: <span>USB bežična veza (USB konektor se ubacuje u TV uređaj)</span></li>
                    <li>Udaljenost: <span> Do 10 metara</span></li>
                    <li>Punjenje: <span> USB kabl (dolazi uz uređaj)</span></li>
                    <li>Vreme punjenja: <span> 2-2.5 sata</span></li>
                    <li>Vreme rada: <span> Do 5 dana</span></li>
                    <li>Dimenzije tastature: <span> 14cm x 10 cm</span></li>
                    <li>Dimenzije touchpad-a: <span> 4.5cm x 3.5 cm</span></li>
                </ul>
                <a href="#order_form" class="btn alone autoink" style="margin-top: 30px;">
                    PORUČI SADA
                    <div
                        class="ink animate"
                        style="height: 200px; width: 250px; top: -20px; left: -140px"
                    ></div
                    >
                </a>
            </div>
        </div>
    </div>
</section>
<section class="block7">
    <div class="wrap">
        <h2 class="title"><span> KOMENTARI</span> KUPACA</h2>
        <p>
            Više od <span> 750 ljudi </span> je već kupilo ovaj proizvod
        </p>
        <div class="reviews">
            <div>
                <div class="rev-item">
                    <img src="{{ asset('/') }}dailysharkFiles/miniwifikeyboard/rev1.jpg" alt/>
                    <p>Jako praktična tastatura, bez problema se može koristiti na više uređaja različitog tipa. Za ovu
                        cenu sam dobio više nego što sam očekivao!</p>
                    <div class="person">
                        <img src="{{ asset('/') }}dailysharkFiles/wificamera/ava1.jpg" alt/>
                        <p><b>Branislav </b> Zaječar</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="rev-item">
                    <img src="{{ asset('/') }}dailysharkFiles/miniwifikeyboard/rev2.jpg" alt/>
                    <p>Jako je laka za korišćenje, a ima sve potrebne funkcije kao da radim na računaru. Tastatura i miš
                        u jednom proizvodu, a koristim ih na svom Smart TV-u, gde ćeš bolje od toga? Sve preporuke! </p>
                    <div class="person">
                        <img src="{{ asset('/') }}dailysharkFiles/wificamera/ava2.jpg" alt/>
                        <p><b> Jovica</b> Arandjelovac</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="rev-item">
                    <img src="{{ asset('/') }}dailysharkFiles/miniwifikeyboard/rev3.jpg" alt/>
                    <p>U radnji gde sam kupio TV su mi nudili ovakvu tastaturu, ali je zaista bila preskupa. Kada sam
                        video reklamu za ovo, odmah sam poručio i utisci su odlični. Od tehničke podrške koja me je
                        kontaktirala, sve do dostave i samog kvaliteta proizvoda. Zaista je sve kako je navedeno, nemam
                        zamerki. Hvala Vam!</p>
                    <div class="person">
                        <img src="{{ asset('/') }}dailysharkFiles/wificamera/ava3.jpg" alt/>
                        <p><b> Vladimir</b> Novi Banovci</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block8" id="ship">
    <div class="wrap">
        <h2 class="title"><span> Kako naručiti</span> tastaturu?</h2>
        <ul class="ship">
            <li>
                <span><img src="{{ asset('/') }}dailysharkFiles/wificamera/1.png" alt/></span>
                <p>
                    Popunite <a href="#order_form">formu</a><br/> na našem sajtu
                </p>
            </li>
            <li>
                <span><img src="{{ asset('/') }}dailysharkFiles/wificamera/2.png" alt/></span>
                <p>
                    Potvrdićemo porudžbinu<br/>
                    u najkraćem roku
                </p>
            </li>
            <li>
                <span><img src="{{ asset('/') }}dailysharkFiles/wificamera/3.png" alt/></span>
                <p>
                    Poslaćemo paket u roku<br/>
                    od 1-2 radna dana
                </p>
            </li>
            <li>
                <span><img src="{{ asset('/') }}dailysharkFiles/wificamera/4.png" alt/></span>
                <p>
                    Plaćanje kuriru<br/>
                    prilikom preuzimanja <br/>
                    pošiljke
                </p>
            </li>
        </ul>
    </div>
</section>
<section class="block1">
    <div class="wrap topline">
        <div class="logo">
            <h1>
            <span class="gr-wrap"
            ><span class="gr-text">
 <span class="gr-letter" style="color: rgb(255, 55, 15)">M</span
 ><span class="gr-letter" style="color: rgb(255, 63, 14)">I</span
                    ><span class="gr-letter" style="color: rgb(255, 72, 13)">N</span
                    ><span class="gr-letter" style="color: rgb(255, 82, 12)">I</span
                    ><span class="gr-letter" style="color: rgb(255, 133, 5)"
                    ><span style="display: none">​</span> </span
                    ><span class="gr-letter" style="color: rgb(255, 94, 10)">K</span
                    ><span class="gr-letter" style="color: rgb(255, 103, 9)">E</span
                    ><span class="gr-letter" style="color: rgb(255, 114, 8)">Y</span
                    ><span class="gr-letter" style="color: rgb(255, 124, 6)">B</span
                    ><span class="gr-letter" style="color: rgb(255, 137, 5)">O</span
                    ><span class="gr-letter" style="color: rgb(255, 146, 4)">A</span
                    ><span class="gr-letter" style="color: rgb(255, 146, 4)">R</span
                    ><span class="gr-letter" style="color: rgb(255, 146, 4)">D</span
                    ></span
                ></span
            >
            </h1>
        </div>
        <ul class="toppromise">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/top1.png" alt/>
                <p>Kvalitet zagarantovan</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/top2.png" alt/>
                <p><a href="#ship">Brza dostava</a></p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/top3.png" alt/>
                <p>Plaćanje pouzećem</p>
            </li>
        </ul>
    </div>
    <div class="wrap">
        <h2>
            MINI WI-FI TASTATURA <span>sa ugradjenim touchpad-om i funkcionalnostima računarske tastature</span>
        </h2>
        <div class="sale">POPUST<span> 40%</span></div>
        <ul class="bullites">
            <li>
                <b>Laka za korišćenje</b>
                Malih je dimenzija i veoma praktična
            </li>
            <li>
                <b>Zamenjuje daljinski upravljač</b>
                Možete menjati TV kanale i jačinu zvuka
            </li>
            <li>
                <b>Široka kompatibilnost</b>
                Može se koristiti na televizorima i računarima<br>
                (i svim ostalim uređajima koji podržavaju USB vezu)
            </li>
        </ul>
        <div class="formbox" id="order_form">
            <div class="formbox__wink">
                <div class="formbox__price">
                    <div class="formbox__old-cost">{{ $prices[1]['originalPrice'] }} <small> RSD</small></div>
                    <div class="formbox__new-cost">{{ $prices[1]['amount'] }} <small> RSD</small></div>
                </div>
            </div>
            <form class="main-order-form main-form" method="post" action="{{$orderRoute}}">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <fieldset>
                    <input class="field" name="name" type="text" placeholder="Ime i prezime" required/>
                </fieldset>
                <fieldset>
                    <input class="field" name="phone" type="tel" placeholder="Broj telefona" required/>
                </fieldset>
                <fieldset>
                    <input class="field" name="shipping_address" type="text" placeholder="Adresa" required/>
                </fieldset>
                <fieldset>
                    <input class="field" name="shipping_city" type="text" placeholder="Grad" required/>
                </fieldset>
                <button class="btn autoink" type="submit">
                    PORUČI ODMAH
                    <div class="ink animate" style="height: 200px; width: 250px; top: -20px; left: -140px"></div>
                </button>
            </form>
        </div>
    </div>
</section>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/wificamera/main.js"></script>
@include('components.pixel_footer')
</body>
</html>
