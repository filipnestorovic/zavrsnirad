<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="IN REGALO UN SET JAR ZIPPER BAGS">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/trakazakupatilo/favicon.png" type="image/x-icon">
    <style> @font-face {font-family: 'Gotham Pro';src: url('{{asset('/') }}fonts/GothamPro-Light.woff2') format('woff2'), url('{{asset('/') }}fonts/GothamPro-Light.woff') format('woff'), url('{{asset('/') }}fonts/GothamPro-Light.ttf') format('truetype');font-weight: 300;font-style: normal;}@font-face {font-family: 'Gotham Pro';src: url('{{asset('/') }}fonts/GothamPro.woff2') format('woff2'), url('{{asset('/') }}fonts/GothamPro.woff') format('woff'), url('{{asset('/') }}fonts/GothamPro.ttf') format('truetype');font-weight: 400;font-style: normal;}@font-face {font-family: 'Gotham Pro';src: url('{{asset('/') }}fonts/GothamProMedium.woff2') format('woff2'), url('{{asset('/') }}fonts/GothamProMedium.woff') format('woff'), url('{{asset('/') }}fonts/GothamProMedium.ttf') format('truetype');font-weight: 500;font-style: normal;}@font-face {font-family: 'Gotham Pro';src: url('{{asset('/') }}fonts/GothamPro-Bold.woff2') format('woff2'), url('{{asset('/') }}fonts/GothamPro-Bold.woff') format('woff'), url('{{asset('/') }}fonts/GothamPro-Bold.ttf') format('truetype');font-weight: 700;font-style: normal;}</style>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/trakazakupatilo/lightbox.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/trakazakupatilo/style.css">
</head>
<body>
<div class="wrap">
    <div class="header">
        <h1 class="uppercase center white b green_bg">IZOLACIONA TRAKA</h1>
        <h2 class="uppercase center white">NAJBOLJA NA TRŽIŠTU</h2>
        <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/header_img.jpg">
        <div class="timer_price">
            <div class="price">
                <div class="old">
                    {{ $prices[1]['originalPrice'] }} RSD
                </div>
                <div class="sale"> -40%</div>
                <div class="new b">
                    {{ $prices[1]['amount'] }} RSD
                </div>
            </div>
        </div>
        <a href="#order_form" class="button-m"> Poručite sada </a>
        <div class="guard_all">
            <div class="guard"> Sigurna kupovina</div>
        </div>
    </div>
    <section class="opisanie">
        <h2 class="venzel">
            <b>Vodootporna lepljiva traka</b>
        </h2>
        <img alt="" class="center" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/2.jpg">
        <p class="justify">Izolaciona traka je namenjena za zatvaranje, <b>izolaciju od vlage</b> i maskiranje estetski manje lepih spojeva.</p>
        <p class="justify">Ova novina na tržištu postala je apsolutni hit i na zapadu je <b>široko rasprostranjena u svetu sanitarija.</b>
            Traka se odmah lepi za površinu, a čvrstoća prijanjanja se održava tokom čitavog perioda upotrebe.
            <b>Pouzdano štiti</b> od prljavštine, vode, buđi i eliminiše <b>nakupljanje kamenca.</b></p>
    </section>
    <section>
        <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/6.gif">
        <ul class="spisok ul_black black_ul">
            <li>Trenutno prijanjanje</li>
            <li>Lakoća korišćenja</li>
            <li>Hidroizolacija</li>
            <li>Zaštita od buđi</li>
            <li>Dekorativni efekat</li>
            <li>Konstantna higijena</li>
            <li>Otporna na deterdžente</li>
        </ul>
        <p><a href="#order_form" class="button-m"> Poručite sada </a></p>
    </section>
    <section>
        <h2 class="venzel"> Karakteristike:</h2>
        <ul class="ul_str">
            <li><span> Materijal: </span> PVC </li>
            <li><span> Boja: </span> Bela</li>
            <li><span> Širina: </span> 3.8cm</li>
            <li><span> Debljina: </span> 2mm</li>
            <li><span> Dužina: </span> 3 metra</li>
            <li><span> Pogodno za sledeće površine: </span> Drvo, tapete, staklo, metal i još mnogo toga </li>
        </ul>
    </section>
    <img alt="" class="center" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/tov-2.jpg">
    <p><a href="#order_form" class="button-m"> Poručite sada </a></p>
    <section class="b10 b10-avas">
        <h2 class="venzel"> Utisci kupaca </h2>
        <div class="hit clearfix">
            <div class="hit-left">
                <p>Najprodavaniji proizvod</p>
            </div>
            <div class="hit-right">
                <p> Ocena:<span> 4.9/5</span></p>
            </div>
        </div>
        <div class="reviews">
            <div class="rev">
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/ava-1.png">
                <p>Odlična traka! Brzo se postavlja, ne propušta vodu i ne potamni. Sredio sam kuhinju i kupatilo, sve je cakum pakum i voda ne prolazi na nepoželjna mesta! Topla preporuka za ovaj proizvod!</p>
                <p class="name"><b> Stevan Obrenović</b> 42 godine</p>
            </div>
            <div class="rev">
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/ava-2.png">
                <p>Ovom trakom sam svojoj supruzi zapušio sve rupe u kuhinji! Zalepio sam je između sudopere i šporeta, više nema nakupljene vode i ostale prljavštine. Preporučujem svima da na ovaj način reše slične probleme!</p>
                <p class="name"><b> Slaviša Gajić</b> 34 godine</p>
            </div>
            <div class="rev">
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/ava-3.png">
                <p>Ove trake su jako jednostavne za korišćenje. Od agenta koji me je zvao da potvrdi porudžbinu sam zatražila više komada, verujte mi da sam sve polepila odmah! Cišćenje kupatila mi oduzima dosta manje vremena jer se ove trake jako lako brišu i nema skrivene prljavštine.</p>
                <p class="name"><b> Dragana Lazić</b> 29 godina</p>
            </div>
        </div>
    </section>
    <section>
        <ul class="deliv deliv1">
            <li>
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/deliv1-1.png">
                <h3> Isporuka</h3>
                <p> 1 do 2 radna dana</p>
            </li>
            <li>
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/deliv1-2.png">
                <h3> Plaćanje</h3>
                <p> Ne plaćate unapred, nego po prijemu</p>
            </li>
            <li>
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/deliv1-3.png">
                <h3> Garancija</h3>
                <p> Uvek proveravamo proizvod pre isporuke i garantujemo 100% kvalitet</p>
            </li>
        </ul>
    </section>
    <section>
        <ul class="deliv_v2 deliv_v2_1 border_bottom">
            <li>
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/deliv_v2-1.png">
                <h3> Poručivanje</h3>
                <p> Unesite svoje podatke na našoj web stranici</p>
            </li>
            <li>
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/deliv_v2-2.png">
                <h3> Potvrda </h3>
                <p> Kontaktiraćemo vas kako bismo potvrdili porudžbinu</p>
            </li>
            <li>
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/deliv_v2-3.png">
                <h3> Isporuka</h3>
                <p> Robu šaljemo brzom poštom</p>
            </li>
            <li>
                <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/deliv_v2-4.png">
                <h3> Plaćanje</h3>
                <p> Plaćanje se vrši po pouzeću kuriru brze pošte</p>
            </li>
        </ul>
    </section>
    <div class="header footer">
        <h1 class="uppercase center white b green_bg">IZOLACIONA TRAKA</h1>
        <h2 class="uppercase center white">NAJBOLJA NA TRŽIŠTU</h2>
        <img alt="" src="{{ asset('/') }}dailysharkFiles/trakazakupatilo/header_img.jpg">
        <h3>Unesite kontakt podatke</h3>
        <div class="posttile">U najkraćem roku ćemo potvrditi Vašu porudžbinu pozivom na broj telefona koji unesete</div>
        <div class="timer_price">
            <div class="price">
                <div class="old">
                    {{ $prices[1]['originalPrice'] }} RSD
                </div>
                <div class="sale"> -40%</div>
                <div class="new b">
                    {{ $prices[1]['amount'] }} RSD
                </div>
            </div>
        </div>
        <form id="order_form" method="POST" action="{{$orderRoute}}" class="main-order-form m1-form lv2-form lv2-form1">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <div class="input-wrap">
                <input type="text" class="field" name="name" required placeholder="Ime i prezime">
            </div>
            <div class="input-wrap">
                <input type="tel" class="field" name="phone" required placeholder="Telefon">
            </div>
            <button class="button-m"> Završite porudžbinu</button>
        </form>
        <div class="guard_all">
            <div class="guard">Sigurna kupovina</div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script>
    $(function(){
        $('a[href^="#"]').click(function (){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        });
        $('.gallery').slick({
            dots: false,
            infinite: true,
            speed: 200,
            fade: false,
            cssEase: 'linear'
        });
        $('.reviews').slick({
            dots: false,
            infinite: false,
            speed: 200,
            fade: false,
            cssEase: 'linear'
        });
    });
</script>
</body>
</html>