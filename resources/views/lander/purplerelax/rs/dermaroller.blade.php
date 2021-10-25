<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap&amp;subset=latin-ext" rel="stylesheet">
    <link rel="icon" type="image/png" href=""/>
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/dermaroller/main.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}purplerelaxFiles/dermaroller/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/dermaroller/slick.css">
</head>
<body>
<main>
    @include('components.display_errors')
    <section class="main-screen">
        <div class="container">
            <p class="main-screen__hit">BEST SELLER U 2021</p>
            <div class="main-screen-content">
                <div class="main-screen-girl">
                    <picture>
                        <source media="(min-width: 1071px)" srcset="{{ asset('/') }}purplerelaxFiles/dermaroller/girl-main.png">
                        <source media="(max-width: 1070px)" srcset="{{ asset('/') }}purplerelaxFiles/dermaroller/girl-main.png">
                        <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/girl-main.png">
                    </picture>
                </div>
                <div class="main-screen-heading">
                    <h1 class="title-1">DERMA ROLLER 4 U 1</h1>
                    <p class="text-accent">UKLONIĆE NEPRAVILNOSTI KOŽE<br> ZA SAMO 7 MINUTA KORIŠĆENJA DNEVNO</p>
                    <div class="main-screen-heading-specials">
                        <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/check.png" alt="" class="main-screen-heading-specials__icon">
                        <p class="main-screen-heading-specials__item">ELIMINIŠE BORE I ZATEŽE LICE</p>
                        <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/check.png" alt="" class="main-screen-heading-specials__icon">
                        <p class="main-screen-heading-specials__item">POPRAVLJA TONUS I STRUKTURU KOŽE</p>
                        <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/check.png" alt="" class="main-screen-heading-specials__icon">
                        <p class="main-screen-heading-specials__item">BORI SE PROTIV CELULITA </p>
                        <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/check.png" alt="" class="main-screen-heading-specials__icon">
                        <p class="main-screen-heading-specials__item">SPREČAVA OPADANJE KOSE</p>
                    </div>
                    <div class="main-screen-pricebox">
                        <div class="pricebox-item">
                            <p class="pricebox-item__txt">Stara<br> cena </p>
                            <p class="pricebox-item__price price-before">
                                {{ $prices[1]['originalPrice'] }}
                                RSD
                            </p>
                        </div>
                        <div class="pricebox-item pricebox-item--accent">
                            <p class="pricebox-item__txt">Nova<br> cena</p>
                            <p class="pricebox-item__price price-after">
                                {{ $prices[1]['amount'] }}
                                RSD
                            </p>
                        </div>
                        <div class="main-screen-sale">
                            <p class="main-screen-sale__txt">Ponuda</p>
                            <p class="main-screen-sale__percent">-40%</p>
                            <p class="main-screen-sale__txt">Popusta</p>
                        </div>
                    </div>
                    <div class="main-screen-iconbox">
                        <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/bullit1.png" alt="">
                        <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/bullit2.png" alt="">
                        <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/bullit3.png" alt="">
                    </div>
                    <a href="#offer__form" id="firstBtn" class="button show-form button--accent">PORUČITE ODMAH</a>
                </div>
            </div>
        </div>
    </section>
    <section class="comparison">
        <div class="container">
            <h2 class="title-2 t-center">NEPRAVILNOSTI KOŽE KOJE DERMA ROLLER MOŽE ISPRAVITI</h2>
            <div class="comparison-wrap">
                <div class="comparison-item">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/before-after1.png" alt="">
                    <p class="comparison-item__txt">UKLANJA CELULIT</p>
                </div>
                <div class="comparison-item">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/before-after2.png" alt="">
                    <p class="comparison-item__txt">ZAGLAĐUJE BORE</p>
                </div>
                <div class="comparison-item">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/before-after3.png" alt="">
                    <p class="comparison-item__txt">ELIMINIŠE VIŠAK KILOGRAMA</p>
                </div>
            </div>
            <a href="#offer__form" class="button show-form button--accent">PORUČITE ODMAH</a>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="about-content">
                <div class="text-content">
                    <h3 class="title-2">INOVACIJA KOJA JE PREOKRENULA SVET KOZMETOLOGIJE</h3>
                    <p class="accent-about">DERMA ROLLER uspešno se bori protiv nesavršenosti kože. Čini kožu 10 ili čak 15 godina mlađom.</p>
                    <hr class="hr--left">
                    <p>Derma Roller stimuliše proizvodnju kolagena i elastina, pokreće procese regeneracije i cirkulaciju krvi.</p>
                    <p>Kao rezultat toga, <span>povećava se volumen kože, nestaju fleke, ožiljci, celulit i strije.</span> Ton postaje ujednačen, a bore nestaju i jasno je vidljiv napredak.</p>
                </div>
                <div class="about-img">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/woman_before_After.png" alt="">
                    <p class="about-img__txt">Primetna razlika u ogledalu u tokom upotrebe</p>
                </div>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <h3 class="title-2 t-white t-center">EVO KAKO DELUJE DERMA ROLLER</h3>
            <p class="preloader preloader--features">3 NASTAVKA POGODNA ZA KOMPLETNU NEGU</p>
            <p>DERMA ROLLER ima 3 nastavka različitih veličina: za telo i lice. Mogu se tretirati čak i mali delovi lica na kojima postoje bore i tragovi akni. Nastavci se lako menjaju, a zgodna ručka ne klizi u ruci.</p>
            <div class="features-imgbox">
                <div class="features-imgbox-pic">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/Roller_01.png" alt="">
                </div>
                <div class="features-imgbox-pic">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/Roller_02.png" alt="">
                </div>
                <div class="features-imgbox-pic">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/Roller_03.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="advantages">
        <div class="container">
            <h3 class="title-2">Avantajele DERMA PREDNOSTI DERMA ROLLERA</h3>
            <hr>
            <div class="advantages-iconbox">
                <div class="advantages-item">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/icon1.png" alt="" class="advantages-item__img">
                    <p>3 valjka za različite oblasti</p>
                </div>
                <div class="advantages-item">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/icon2.png" alt="" class="advantages-item__img">
                    <p>Efekat masaže tokom upotrebe</p>
                </div>
                <div class="advantages-item">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/icon3.png" alt="" class="advantages-item__img">
                    <p>Postupak traje samo nekoliko minuta</p>
                </div>
                <div class="advantages-item">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/icon4.png" alt="" class="advantages-item__img">
                    <p>Efekat je vidljiv nakon prve upotrebe</p>
                </div>
                <div class="advantages-item">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/icon5.png" alt="" class="advantages-item__img">
                    <p>Pojačava efekat drugih kozmetičkih proizvoda</p>
                </div>
                <div class="advantages-item">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/icon6.png" alt="" class="advantages-item__img">
                    <p>Zamenjuje injekcije i estetsku hirurgiju</p>
                </div>
            </div>
        </div>
    </section>
    <section class="instruction">
        <div class="container">
            <h3 class="title-2">KORISTITI DERMA ROLLER 4 U 1 JE VEOMA LAKO!</h3>
            <p class="preloader preloader--instruction">POSTOJE SAMO 3 KORAKA KOJA ĆE KOŽU UČINITI LEPŠOM</p>
            <div class="instruction-wrap">
                <div class="instruction-item">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/girl1.png" alt="">
                    <p class="instruction-item__txt">Očistite kožu od kozmetike i nečistoća</p>
                </div>
                <div class="instruction-item">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/Girl2.png" alt="">
                    <p class="instruction-item__txt">Masirajte uz pomoć dermarolera, koristite potrebne nastavke</p>
                </div>
                <div class="instruction-item">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/Girl3.png" alt="">
                    <p class="instruction-item__txt">Posmatrajte kako se koža regeneriše i podmlađuje</p>
                </div>
            </div>
            <a href="#offer__form" class="button show-form button--accent">PORUČITE ODMAH</a>
        </div>
    </section>
    <section class="opinion">
        <div class="container">
            <div class="opinion-wrap">
                <div class="text-content">
                    <h3 class="title-2">MIŠLJENJE STRUKE OD DERMA ROLLERU</h3>
                    <p>Obični kućni tretmani i kreme ne pružaju potpunu negu kože, pa sa godinama koža postaje suva i pojavljuju se bore.</p>
                    <p>Dolaze mi žene koje su razočarane kućnim tretmanima, misleći da su jedino rešenje skupi tretmani u kozmetičkim salonima.</p>
                    <p>Nemaju sve žene dovoljno novca za takve tretmane. Na sreću, nedavno se na našem tržištu pojavio novi inovativno proizvod - DERMA ROLLER, i toplo preporučujem da ga koristite.
                        Rešava sve probleme sa kožom: regeneriše, podmlađuje, zateže.</p>
                    <p>Osim toga, čula sam da su saloni počeli da rade Derma Roller tretmane koje naplaćuju mnogo novca, a vi ga možete vrlo lako i bezbedno koristiti kod kuće.</p>
                </div>
                <div class="opinion-img">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/Cosmetolog.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            <h3 class="title-2 title-2--reviews">UTISCI NAŠIH KUPACA</h3>
            <div class="reviews-slider reviews-wrap">
                <div class="reviews-item">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/review1.png" alt="">
                    <p class="reviews-item__name">Ana, 32 godine</p>
                    <p>Ovaj valjak me je spasao od celulita! Čitav život sam pokušavala da ga se rešim, bavila se sportom, ali nisam uspevala koliko god da sam se trudila.<br><br>
                        Nakon nekoliko kućnih tretmana sa Derma Roller-om, koža mi se zategla i postala je lepša, a celulit je počeo da nestaje.<br><br>
                        Sada me nije sramota da nosim kupaće kostime.</p>
                    <hr>
                </div>
                <div class="reviews-item">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/review2.png" alt="">
                    <p class="reviews-item__name">Jovana, 35 godina</p>
                    <p>Do prošle godine sam pokušavala da usporim starenje mnogim krenemama i losionima, ali ništa davalo poseban efekat. Koža mi je bila suva i bore su počele da mi se pojavljuju ispod očiju.<br><br>
                        Počela sam da tražim neko drugo rešenje, i naišla sam na internetu na Derma Roller. Zaista je efikasan!!! <br><br>
                        Valjak fizički stimuliše kožu, koja se regeneriše i postaje elastična. Konačno mi se vratila mladost! :)</p>
                    <hr>
                </div>
                <div class="reviews-item">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/review3.png" alt="">
                    <p class="reviews-item__name">Ksenija, 36 godina</p>
                    <p>Tetka mi je otkrila na koji je način zategla lice i skinula celulit. Po njenim uputstvima, posetila sam zvanični sajt na kome se prodaje Derma Roller, i poručila svoj proizvod.<br><br>
                        Nakon 3 meseca upotrebe, koža je postala glatka, hidrirana i blistava.<br><br>
                        Telo je postalo negovanije: celulit, strije i ožiljci su nestali. Sjajan proizvod, sve preporuke!</p>
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <section class="bottomform">
        <div class="container">
            <div class="bottomform-wrap">
                <div class="bottomform-img">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermaroller/girl-main.png" alt="">
                </div>
                <form id="offer__form" class="offer__form" action="{{$orderRoute}}" method="post">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <h3 class="title-2">Unesite podatke</h3>
                    <input id="name" class="input" type="text" name="name" placeholder="Ime i prezime" required>
                    <input id="phone" class="input" type="tel" name="phone" placeholder="Telefon" required>
                    <input id="shipping_address" class="input" type="text" name="shipping_address" placeholder="Adresa" required>
                    <input id="shipping_city" class="input" type="text" name="shipping_city" placeholder="Grad" required>
                    <button type="submit" class="button button-footer">ZAVRŠI PORUDŽBINU</button>
                    <footer class="main-footer"></footer>
                </form>
            </div>
        </div>
    </section>
</main>
@include('components.pixel_footer')
</body>
</html>