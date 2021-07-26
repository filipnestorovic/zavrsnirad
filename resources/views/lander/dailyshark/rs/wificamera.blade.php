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
                <p>Calitatea garantată</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/top2.png" alt />
                <p><a href="#ship"> Transport rapid</a></p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/top3.png" alt />
                <p>Plata la primire</p>
            </li>
        </ul>
    </div>
    <div class="wrap">
        <h2>
            Security camera<span
            ><span class="sh"> care poate înlocui</span> câteva asemenea
            dispozitive.</span
            >
        </h2>
        <div class="sale">POPUST<span> 40%</span></div>
        <ul class="bullites">
            <li>
                <b> Unghiul de vizualizare fără precedent</b> 350 de grade
                orizontal, 110 grade vertical.
            </li>
            <li>
                <b> Recepția și transmiterea sunetului.</b> Camera microfonul și
                difuzorul
            </li>
            <li>
                <b> Controlația camera cu telefonul </b> Toate funcțiile sunt
                disponibile cu aplicația specială
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
            <span> Camera wireless cu WiFi fiabilă,</span> rotativă
        </h2>
        <p>
            <b> WiFi Camera 360</b> este dotată cu<span>
            senzorul de mișcare foarte sensibil,</span
            >
            care îi oferă funcții de securitate reacționând la mișcările
            obiectelor. Iluminarea puternică infraroșie cu LED oferă calitatea
            excelentă a imaginii la o distanță de până la 10 metri, chiar și în
            absența luminii.
        </p>
        <ul class="angles">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/170.png" alt />
                <p>Vizualizare orizontală:<b> 350°</b></p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/150.png" alt />
                <p>Vizualizare verticală: <b> 110°</b></p>
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
                    Videourile tale<br />
                    sunt întotdeauna<span> disponibile</span>
                </h2>
                <ul class="rec">
                    <li class="clearfix">
                        <img src="{{ asset('/') }}dailysharkFiles/wificamera/rec1.png" alt />
                        <p>Filmare video FULL HD 1080</p>
                    </li>
                    <li class="clearfix">
                        <img src="{{ asset('/') }}dailysharkFiles/wificamera/rec2.png" alt />
                        <p>
                            Camera poate trimite datele de monitorizare către cloud în
                            timp real
                        </p>
                    </li>
                    <li class="clearfix">
                        <img src="{{ asset('/') }}dailysharkFiles/wificamera/rec3.png" alt />
                        <p>
                            Compresia H.264 avansată permite transmiterea videourilor de
                            înaltă calitate
                        </p>
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
            Security camera<br />
            Într-un corp elegant<span> și durabil</span>
        </h2>
        <p>
            WiFi Camera 360 este o inovație a experților în domeniul securității
            care îndeplinește toate cerințele pentru o cameră de securitate.
            Combinația perfectă de calitate și fiabilitate. Toate camerele WiFi
            360 sunt fabricate pe fabrici inovatoare și din materiale și
            componente moderne, ceea ce ne permite să producem camere de încredere
            cu cea mai bogată funcționalitate.
        </p>
        <img src="{{ asset('/') }}dailysharkFiles/wificamera/product2.jpg" alt />
        <a href="#order_form" class="btn alone autoink">
            Comandați acum
            <div
                    class="ink animate"
                    style="height: 200px; width: 250px; top: -20px; left: -140px"
            ></div
            ></a>
    </div>
</section>
<section class="block5">
    <div class="wrap">
        <h2>WiFi Camera 360 — o gamă largă<span> a funcțiilor utile:</span></h2>
        <ul class="function">
            <li><span> 1.</span> Detectorul mișcării</li>
            <li><span> 2.</span> Calitatea Full HD 1080P</li>
            <li><span> 3.</span> Primirea și redarea sunetului</li>
            <li><span> 4.</span> Live video în smartphone</li>
        </ul>
        <ul class="function f2">
            <li><span> 5.</span> Conexiune WiFi</li>
            <li><span> 6.</span> Vedere nocturnă</li>
            <li><span> 7.</span> Micro SD până la 128Gb</li>
            <li><span> 8.</span> Rotire și înclinare</li>
        </ul>
        <ul class="function f3">
            <li><span> 9.</span> Acces complet la distanță</li>
            <li><span> 10.</span> Suportul fiabil</li>
            <li><span> 11.</span> Notificări push pentru mișcare și sunet</li>
            <li><span> 12.</span> Complet în română</li>
        </ul>
        <ul class="gifki">
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/3.jpg" class="b-lazy" alt />
                <p>
                    <span> modul zi/noapte</span> Transmitanța crescută a luminii vă
                    permite să înregistrați tot ce se întâmplă chiar și noaptea.
                </p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/2.jpg" class="b-lazy" alt />
                <p>
                    <span> Sistemul detectării mișcării</span> Camera este dotată cu
                    sistemul inteligent unic de urmărire a obiectelor în mișcare și
                    poate urmări obiectele.
                </p>
            </li>
        </ul>
    </div>
</section>
<section class="block6">
    <div class="wrap">
        <div class="container">
            <div class="char-left">
                <h2>Conținut pachet</h2>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/kit.jpg" alt />
            </div>
            <div class="char-right">
                <h2>Caracteristici</h2>
                <ul class="char">
                    <li>OS<span> Android, IOS</span></li>
                    <li>Dimensiunea obiectivului camerei:<span> 3,6 mm</span></li>
                    <li>Rezoluție video:<span> Full HD 1080P</span></li>
                    <li>Compresie video:<span> Н.264</span></li>
                    <li>Microfon:<span> este</span></li>
                    <li>Detectorul mișcării<span> este</span></li>
                    <li>Iluminare IR:<span> este</span></li>
                    <li>Înregistrare după orar:<span> este</span></li>
                    <li>Vedere nocturnă la distanța:<span> 10 m</span></li>
                    <li>Unghi de vizualizare:<span> 360° la 90°</span></li>
                    <li>Alimentație:<span> 5V / 2.0A / 8W</span></li>
                    <li>Interfețe wireless:<span> Wi-Fi 2.4 GHz</span></li>
                    <li>Carduri de memorie:<span> pînă la 128 GB</span></li>
                    <li>Material:<span> plastic, component electronic</span></li>
                    <li>
                        Suplimentar<span>
                  portul mini USB,<br />
                  antena,<br />
                  butonul restart</span
                        >
                    </li>
                </ul>
            </div>
        </div>
        <a href="#order_form" class="btn alone autoink">
            Comandați acum
            <div
                    class="ink animate"
                    style="height: 200px; width: 250px; top: -20px; left: -140px"
            ></div
            ></a>
    </div>
</section>
<section class="block7">
    <div class="wrap">
        <h2 class="title"><span> Recenziile</span> cumpărătorilor</h2>
        <p>
            Mai mult decât<span> 7350 de oameni</span> și-au cumpărat deja WiFi
            Camera 360
        </p>
        <div class="reviews">
            <div>
                <div class="rev-item">
                    <img src="{{ asset('/') }}dailysharkFiles/wificamera/rev1.jpg" alt />
                    <span>
                Se reglează ușor<br />
                pentru tine</span
                    >
                    <p>
                        Camera are multe setări și funcții, o puteți personaliza cu
                        ușurință. Foarte convenabil de utilizat! Datorită unghiului de
                        vizualizare de 360 de grade, imaginea este clară. Are și un
                        senzor de mișcare cu posibilitatea de a trimite notificări către
                        smartphone. Recomand!
                    </p>
                    <div class="person">
                        <img src="{{ asset('/') }}dailysharkFiles/wificamera/ava1.jpg" alt />
                        <p><b> Alex</b> Brașov</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="rev-item">
                    <img src="{{ asset('/') }}dailysharkFiles/wificamera/rev2.jpg" alt />
                    <span>
                Merită<br />
                din plin!</span
                    >
                    <p>
                        E o cameră de înaltă calitate și are o fixare convenabilă, bine
                        făcută. Funcțiile sunt foarte utile, ușor de instalat, se pot
                        regla foarte rapid. Calitatea filmării este, de asemenea,
                        plăcută, sincer să fiu, nu mă așteptam la un asemenea nivel.
                        Mulțumesc, vreau să comand încă una pentru prieten. Merită din
                        plin!
                    </p>
                    <div class="person">
                        <img src="{{ asset('/') }}dailysharkFiles/wificamera/ava2.jpg" alt />
                        <p><b> George</b> Tâtgu-Jiu</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="rev-item">
                    <img src="{{ asset('/') }}dailysharkFiles/wificamera/rev3.jpg" alt />
                    <span>
                Are conecție cu smartphone,<br />
                ceea ce căutam.</span
                    >
                    <p>
                        Camera e bună. Am instalat totul rapid, într-adevăr în 5 minute.
                        Totul funcționează, nu îngheață, imaginea este clară, chiar și
                        noaptea. Are conecție cu telefon, e tocmai ceea ce căutam.
                        Sunetul este bun, cuvintele se aud foarte clar. Vă mulțumesc
                        pentru produs.
                    </p>
                    <div class="person">
                        <img src="{{ asset('/') }}dailysharkFiles/wificamera/ava3.jpg" alt />
                        <p><b> Vlad</b> Iași</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block8" id="ship">
    <div class="wrap">
        <h2 class="title"><span> Cum să comandați</span> WiFi Camera 360?</h2>
        <ul class="ship">
            <li>
                <span><img src="{{ asset('/') }}dailysharkFiles/wificamera/1.png" alt /></span>
                <p>
                    <a href="#order_form"> Plasați comanda</a><br />
                    pe site
                </p>
            </li>
            <li>
                <span><img src="{{ asset('/') }}dailysharkFiles/wificamera/2.png" alt /></span>
                <p>
                    Managerul va preciza<br />
                    detaliile comenzii
                </p>
            </li>
            <li>
                <span><img src="{{ asset('/') }}dailysharkFiles/wificamera/3.png" alt /></span>
                <p>
                    Livrăm comanda<br />
                    În 1-3 zile
                </p>
            </li>
            <li>
                <span><img src="{{ asset('/') }}dailysharkFiles/wificamera/4.png" alt /></span>
                <p>
                    Plătiți curierului<br />
                    la primire
                </p>
            </li>
        </ul>
    </div>
</section>
<section class="block1" id="order_form">
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
                <p>Calitatea este garantată</p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/top2.png" alt />
                <p><a href="#ship"> Transportul rapid</a></p>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/wificamera/top3.png" alt />
                <p>Plata la primire</p>
            </li>
        </ul>
    </div>
    <div class="wrap">
        <h2>
            Security camera<span
            ><span class="sh"> care poate înlocui</span> câteva asemenea
            dispozitive.</span
            >
        </h2>
        <div class="sale">POPUST<span> 40%</span></div>
        <ul class="bullites">
            <li>
                <b> Unghiul de vizualizare fără precedent</b> 350 de grade
                orizontal, 110 grade vertical.
            </li>
            <li>
                <b> Primirea și redarea sunetului</b> Camera este dotată cu
                microfonul și difuzorul
            </li>
            <li>
                <b> Se controlează cu telefonul</b> Toate funcțiile sunt disponibile
                cu aplicația specială
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
<footer class="footer">
    <div class="wrap">

    </div>
</footer>

<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/wificamera/main.js"></script>

</body>
</html>