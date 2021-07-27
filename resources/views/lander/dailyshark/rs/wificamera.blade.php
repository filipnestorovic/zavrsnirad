<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/wificamera/settings.css" />
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/wificamera/slick.css" />
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/wificamera/style.css" />
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/wificamera/150.png" type="image/x-icon">
    {{--<style>@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(../fonts/montserrat-v15-latin-ext_latin-regular.eot);src:local(''),url('../fonts/montserrat-v15-latin-ext_latin-regular.eot@#iefix') format('embedded-opentype'),url(../fonts/montserrat-v15-latin-ext_latin-regular.woff2) format('woff2'),url(../fonts/montserrat-v15-latin-ext_latin-regular.woff) format('woff'),url(../fonts/montserrat-v15-latin-ext_latin-regular.ttf) format('truetype'),url('../fonts/montserrat-v15-latin-ext_latin-regular.svg#Montserrat') format('svg')}@font-face{font-family:'Montserrat';font-style:italic;font-weight:400;src:url(../fonts/montserrat-v15-latin-ext_latin-italic.eot);src:local(''),url('../fonts/montserrat-v15-latin-ext_latin-italic.eot@#iefix') format('embedded-opentype'),url(../fonts/montserrat-v15-latin-ext_latin-italic.woff2) format('woff2'),url(../fonts/montserrat-v15-latin-ext_latin-italic.woff) format('woff'),url(../fonts/montserrat-v15-latin-ext_latin-italic.ttf) format('truetype'),url('../fonts/montserrat-v15-latin-ext_latin-italic.svg#Montserrat') format('svg')}@font-face{font-family:'Montserrat';font-style:normal;font-weight:500;src:url(../fonts/montserrat-v15-latin-ext_latin-500.eot);src:local(''),url('../fonts/montserrat-v15-latin-ext_latin-500.eot@#iefix') format('embedded-opentype'),url(../fonts/montserrat-v15-latin-ext_latin-500.woff2) format('woff2'),url(../fonts/montserrat-v15-latin-ext_latin-500.woff) format('woff'),url(../fonts/montserrat-v15-latin-ext_latin-500.ttf) format('truetype'),url('../fonts/montserrat-v15-latin-ext_latin-500.svg#Montserrat') format('svg')}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(../fonts/montserrat-v15-latin-ext_latin-700.eot);src:local(''),url('../fonts/montserrat-v15-latin-ext_latin-700.eot@#iefix') format('embedded-opentype'),url(../fonts/montserrat-v15-latin-ext_latin-700.woff2) format('woff2'),url(../fonts/montserrat-v15-latin-ext_latin-700.woff) format('woff'),url(../fonts/montserrat-v15-latin-ext_latin-700.ttf) format('truetype'),url('../fonts/montserrat-v15-latin-ext_latin-700.svg#Montserrat') format('svg')}@font-face{font-family:'Montserrat';font-style:normal;font-weight:900;src:url(../fonts/montserrat-v15-latin-ext_latin-900.eot);src:local(''),url('../fonts/montserrat-v15-latin-ext_latin-900.eot@#iefix') format('embedded-opentype'),url(../fonts/montserrat-v15-latin-ext_latin-900.woff2) format('woff2'),url(../fonts/montserrat-v15-latin-ext_latin-900.woff) format('woff'),url(../fonts/montserrat-v15-latin-ext_latin-900.ttf) format('truetype'),url('../fonts/montserrat-v15-latin-ext_latin-900.svg#Montserrat') format('svg')}@font-face{font-family:'AvenirNextCyr';src:url(../fonts/subset-AvenirNextCyr-Light.woff2) format('woff2'),url(../fonts/subset-AvenirNextCyr-Light.woff) format('woff'),url(../fonts/subset-AvenirNextCyr-Light.ttf) format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'AvenirNextCyr';src:url(../fonts/subset-AvenirNextCyr-Regular.woff2) format('woff2'),url(../fonts/subset-AvenirNextCyr-Regular.woff) format('woff'),url(../fonts/subset-AvenirNextCyr-Regular.ttf) format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'AvenirNextCyr';src:url(../fonts/subset-AvenirNextCyr-Medium.woff2) format('woff2'),url(../fonts/subset-AvenirNextCyr-Medium.woff) format('woff'),url(../fonts/subset-AvenirNextCyr-Medium.ttf) format('truetype');font-weight:500;font-style:normal}@font-face{font-family:'AvenirNextCyr';src:url(../fonts/subset-AvenirNextCyr-Bold.woff2) format('woff2'),url(../fonts/subset-AvenirNextCyr-Bold.woff) format('woff'),url(../fonts/subset-AvenirNextCyr-Bold.ttf) format('truetype');font-weight:700;font-style:normal}</style>--}}
</head>
<body class>
@include('components.display_errors')
<section class="block1">
    <div class="wrap topline">
        <div class="logo">
            <h1>
            <span class="gr-wrap"
            ><span class="gr-text">
                    <span class="gr-letter" style="color: rgb(255, 55, 15)">W</span
                    ><span class="gr-letter" style="color: rgb(255, 63, 14)">I</span
                    ><span class="gr-letter" style="color: rgb(255, 72, 13)">F</span
                    ><span class="gr-letter" style="color: rgb(255, 82, 12)">I</span
                    ><span class="gr-letter" style="color: rgb(255, 133, 5)"
                    ><span style="display: none">​</span> </span
                    ><span class="gr-letter" style="color: rgb(255, 94, 10)">C</span
                    ><span class="gr-letter" style="color: rgb(255, 103, 9)">A</span
                    ><span class="gr-letter" style="color: rgb(255, 114, 8)">M</span
                    ><span class="gr-letter" style="color: rgb(255, 124, 6)">E</span
                    ><span class="gr-letter" style="color: rgb(255, 137, 5)">R</span
                    ><span class="gr-letter" style="color: rgb(255, 146, 4)">A</span
                    ></span
                ></span>
            </h1>
        </div>
        <ul class="toppromise">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/top1.png" alt />
                <p>Kvalitet zagarantovan</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/top2.png" alt />
                <p><a href="#ship">Brza dostava</a></p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/top3.png" alt />
                <p>Plaćanje pouzećem</p>
            </li>
        </ul>
    </div>
    <div class="wrap">
        <h2>
            SIGURNOSNA WI-FI KAMERA <span>sa rotirajućom glavomi alarmnim sistemom po potrebi</span>
        </h2>
        <div class="sale">POPUST<span> 40%</span></div>
        <ul class="bullites">
            <li>
                <b>Neverovatan ugao gledanja</b>
                350 stepeni vodoravno, 100 stepeni vertikalno
            </li>
            <li>
                <b>Prijem i prenos zvuka</b> Kamera ima mikrofon i zvučnik
            </li>
            <li>
                <b>Kontrolišite sve preko telefona</b> Potpuna kontrola nad kamerom preko aplikacije
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
<section class="block2">
    <div class="wrap">
        <h2 class="title">
            <span>Bežična Wi-Fi kamera sa rotirajućom glavom </span>i alarmom po potrebi
        </h2>
        <p><b>Wi-Fi Camera 360</b> opremljena je <span>vrlo osetljivim senzorom pokreta,</span> koji mu daje sigurnosne funkcije reagujući na kretanje predmeta.
            Možete da podesite da se pri pokretu uključuje alarm i da vas aplikacija momentalno alarmira, bilo gde da ste.
            Jaka infracrvena led rasveta pruža odličan kvalitet slike na rastojanu i do 10 metara, čak i u nedostatku svetlosti.</p>
        <ul class="angles">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/170.png" alt />
                <p>Horizontalni prikaz:<b> 350°</b></p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/150.png" alt />
                <p>Vertikalni prikaz: <b> 110°</b></p>
            </li>
        </ul>
        <ul class="aboutimg">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/about1.jpg" alt />
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/about2.jpg" alt />
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/about3.jpg" alt />
            </li>
        </ul>
    </div>
</section>
<section class="block3">
    <div class="wrap">
        <div class="container">
            <img src="{{ asset('/') }}dailysharkFiles/wificamera/product1.jpg" alt />
            <div class="info">
                <h2 class="title">
                    VAŠI VIDEO SNIMCI<br/>
                    SU UVEK<span> DOSTUPNI</span>
                </h2>
                <ul class="rec">
                    <li class="clearfix">
                        <img src="{{ asset('/') }}dailysharkFiles/wificamera/rec1.png" alt />
                        <p>FULL HD 1080p video snimanje</p>
                    </li>
                    <li class="clearfix">
                        <img src="{{ asset('/') }}dailysharkFiles/wificamera/rec2.png" alt />
                        <p>Kamera može u realnom vremenu da šalje snimke na Cloud ili na memorijsku karticu. Možete uživo da snimate iz aplikacije na memoriju telefona i da delite bilo gde</p>
                    </li>
                    <li class="clearfix">
                        <img src="{{ asset('/') }}dailysharkFiles/wificamera/rec3.png" alt />
                        <p>Napredna X.264 kompresija omogućava prenos video zapisa visokog kvaliteta</p>
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
<section class="block4">
    <div class="wrap">
        <h2 class="title">
            Sigurnosna kamera<br />
            u elegantnom i<span> izdržljivom kućištu</span>
        </h2>
        <p><b>Wi-Fi Camera 360</b> je inovacija bezbednosnih stručnjaka koja ispunjava sve zahteve za sigurnosnu kameru. Sve naše Wi-Fi 360 kamere se proizvode od savrmenih materijala i komponenata
            u modernim svetskim fabrikama. Ukratko - savršena kombinacija kvaliteta i pouzdanosti.</p>
        <img src="{{ asset('/') }}dailysharkFiles/wificamera/product2.jpg" alt />
        <a href="#order_form" class="btn alone autoink">
            PORUČITE SADA
            <div
                    class="ink animate"
                    style="height: 200px; width: 250px; top: -20px; left: -140px"
            ></div
            ></a>
    </div>
</section>
<section class="block5">
    <div class="wrap">
        <h2>Wi Fi Camera 360 - širok spektar <span>korisnih funkcija:</span></h2>
        <ul class="function">
            <li><span> 1.</span> Detektor pokreta</li>
            <li><span> 2.</span> Full HD kvalitet 1080p</li>
            <li><span> 3.</span> Prijem i reprodukcija zvuka</li>
            <li><span> 4.</span> Video uživo na Vašem pametnom telefonu</li>
        </ul>
        <ul class="function f2">
            <li><span> 5.</span> Wi-Fi veza</li>
            <li><span> 6.</span> Noćni režim</li>
            <li><span> 7.</span> Micro SD do 128 GB</li>
            <li><span> 8.</span> Rotacija i nagib</li>
        </ul>
        <ul class="function f3">
            <li><span> 9.</span> Potpuni daljinski pristup</li>
            <li><span> 10.</span> Pouzdana podrška</li>
            <li><span> 11.</span> Push obaveštenja</li>
            <li><span> 12.</span> Glasan alarm protiv provalnika</li>
        </ul>
        <ul class="gifki">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/3.jpg" class="b-lazy" alt />
                <p>
                    <span>Dnevni / noćni režim</span> Povećana propustljivost svetlosti omogućava snimanje svega što se dešava.
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/2.jpg" class="b-lazy" alt />
                <p>
                    <span>Sistem za detekciju pokreta</span> Kamera je opremljena jedinstvenim inteligentnim sistemom za praćenje pokreta i detektovanje lica.
                </p>
            </li>
        </ul>
    </div>
</section>
<section class="block6">
    <div class="wrap">
        <div class="container">
            <div class="char-left">
                <h2>Sadržaj paketa</h2>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/kit.jpg" alt />
            </div>
            <div class="char-right">
                <h2>Karakteristike</h2>
                <ul class="char">
                    <li>Kompatibilnost<span> Android, IOS</span></li>
                    <li>Veličina sočiva kamere<span> 3,6 mm</span></li>
                    <li>Video rezolucija<span> Full HD 1080P</span></li>
                    <li>Video kompresija<span> Н.264</span></li>
                    <li>Mikrofon<span> da</span></li>
                    <li>Detektor pokreta<span> da</span></li>
                    <li>IC osvetljenje<span> da</span></li>
                    <li>Alarmni sistem<span> da</span></li>
                    <li>Daljinski noćni pogled<span> 10 m</span></li>
                    <li>Ugao gledanja<span> 350° - 110°</span></li>
                    <li>Napajanje<span> 5V / 2.0A / 8W</span></li>
                    <li>Bežično povezivanje<span> Wi-Fi, 2.4 GHz</span></li>
                    <li>Slot za memorijsku karticu<span> do 128 GB</span></li>
                    <li>Materijal<span> Plastika, elektronske komponente</span></li>
                    <li>
                        Dodatno<span>Mini USB port,<br/> antena,<br/> dugme za restart</span>
                    </li>
                </ul>
            </div>
        </div>
        <a href="#order_form" class="btn alone autoink">
            PORUČI SADA
            <div
                    class="ink animate"
                    style="height: 200px; width: 250px; top: -20px; left: -140px"
            ></div
            ></a>
    </div>
</section>
<section class="block7">
    <div class="wrap">
        <h2 class="title"><span> KOMENTARI</span> KUPACA</h2>
        <p>
            Više od <span> 7350 ljudi </span> je već kupilo ovaj proizvod
        </p>
        <div class="reviews">
            <div>
                <div class="rev-item">
                    <img src="{{ asset('/') }}dailysharkFiles/wificamera/rev1.jpg" alt />
                    <span>Najbolja kamera <br>koju sam ikada kupio</span>
                    <p>Kamera ima mnoga podešavanja i funkcije koje je vrlo lako prilagoditi.
                        Veoma je zgodna za upotrebu i daje kristalno jasnu sliku.
                        Takođe, ima senzor pokreta sa mogućnošću slanja obaveštenja na vaš pametni telefon.
                        Preporučujem!</p>
                    <div class="person">
                        <img src="{{ asset('/') }}dailysharkFiles/wificamera/ava1.jpg" alt />
                        <p><b> Branko</b> Zrenjanin</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="rev-item">
                    <img src="{{ asset('/') }}dailysharkFiles/wificamera/rev2.jpg" alt />
                    <span>Vredi!</span>
                    <p>Wi Fi kamera visokog kvaliteta sa odličnom aplikacijom i korisnim funkcijama.
                        Vrlo jednostavna za povezivanje i korišćenje.
                        Koristim je na vikendici i već 5. dan korišćenja uplašila je lopove koji su pokušali da naprave provalu, a ja sam uspeo da ih prepoznam i prijavim.
                        Preporučujem je svima koji imaju potrebu za takvom opremom!</p>
                    <div class="person">
                        <img src="{{ asset('/') }}dailysharkFiles/wificamera/ava2.jpg" alt />
                        <p><b> Jovan</b> Avala</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="rev-item">
                    <img src="{{ asset('/') }}dailysharkFiles/wificamera/rev3.jpg" alt />
                    <span>Ima vezu sa pametnim telefonom, to sam i tražio!</span>
                    <p>Odlična kamera! Povezao sam je i instalirao aplikaciju za 5 minuta. Sve funkcioniše, slika je veoma jasna i ne zamrzava se.
                        Zvuk prenosi dobro, reči su vrlo jasne. Hvala vam na ovom proizvodu.</p>
                    <div class="person">
                        <img src="{{ asset('/') }}dailysharkFiles/wificamera/ava3.jpg" alt />
                        <p><b> Vlada</b> Novi Sad</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block8" id="ship">
    <div class="wrap">
        <h2 class="title"><span> Kako naručiti</span> kameru?</h2>
        <ul class="ship">
            <li>
                <span><img src="{{ asset('/') }}dailysharkFiles/wificamera/1.png" alt /></span>
                <p>
                    Popunite <a href="#order_form">formu</a><br/> ispod
                </p>
            </li>
            <li>
                <span><img src="{{ asset('/') }}dailysharkFiles/wificamera/2.png" alt /></span>
                <p>
                    Potvrdićemo porudžbinu<br />
                    u najkraćem roku
                </p>
            </li>
            <li>
                <span><img src="{{ asset('/') }}dailysharkFiles/wificamera/3.png" alt /></span>
                <p>
                    Poslaćemo paket u roku<br />
                    od 1-2 radna dana
                </p>
            </li>
            <li>
                <span><img src="{{ asset('/') }}dailysharkFiles/wificamera/4.png" alt /></span>
                <p>
                    Plaćanje kuriru<br />
                    prilikom preuzimanja <br />
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
                    <span class="gr-letter" style="color: rgb(255, 55, 15)">W</span
                    ><span class="gr-letter" style="color: rgb(255, 63, 14)">I</span
                    ><span class="gr-letter" style="color: rgb(255, 72, 13)">F</span
                    ><span class="gr-letter" style="color: rgb(255, 82, 12)">I</span
                    ><span class="gr-letter" style="color: rgb(255, 133, 5)"
                    ><span style="display: none">​</span> </span
                    ><span class="gr-letter" style="color: rgb(255, 94, 10)">C</span
                    ><span class="gr-letter" style="color: rgb(255, 103, 9)">A</span
                    ><span class="gr-letter" style="color: rgb(255, 114, 8)">M</span
                    ><span class="gr-letter" style="color: rgb(255, 124, 6)">E</span
                    ><span class="gr-letter" style="color: rgb(255, 137, 5)">R</span
                    ><span class="gr-letter" style="color: rgb(255, 146, 4)">A</span
                    ></span
                ></span
            >
            </h1>
        </div>
        <ul class="toppromise">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/top1.png" alt />
                <p>Kvalitet zagarantovan</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/top2.png" alt />
                <p><a href="#ship">Brza dostava</a></p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/top3.png" alt />
                <p>Plaćanje pouzećem</p>
            </li>
        </ul>
    </div>
    <div class="wrap">
        <h2>
            SIGURNOSNA WI-FI KAMERA <span>sa rotirajućom glavomi alarmnim sistemom po potrebi</span>
        </h2>
        <div class="sale">POPUST<span> 40%</span></div>
        <ul class="bullites">
            <li>
                <b>Neverovatan ugao gledanja</b>
                350 stepeni vodoravno, 100 stepeni vertikalno
            </li>
            <li>
                <b>Prijem i prenos zvuka</b> Kamera ima mikrofon i zvučnik
            </li>
            <li>
                <b>Kontrolišite sve preko telefona</b> Potpuna kontrola nad kamerom preko aplikacije
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
{{--<footer class="footer">--}}
    {{--<div class="wrap">--}}
    {{--</div>--}}
{{--</footer>--}}

<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/wificamera/main.js"></script>
@include('components.pixel_footer')
</body>
</html>