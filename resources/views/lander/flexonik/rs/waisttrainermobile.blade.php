<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}flexonikFiles/waisttrainermobile/favicon.ico" />
    <style> @font-face {font-family: 'Montserrat';src: url('{{asset('/') }}fonts/subsetMontserrat Light.woff2') format('woff2'), url('{{asset('/') }}fonts/subsetMontserrat Light.woff') format('woff'), url('{{asset('/') }}fonts/subsetMontserrat Light.ttf') format('truetype');font-weight: 300;font-style: normal;}@font-face {font-family: 'Montserrat';src: url('{{asset('/') }}fonts/Montserrat-Regular.woff2') format('woff2'), url('{{asset('/') }}fonts/Montserrat-Regular.woff') format('woff'), url('{{asset('/') }}fonts/Montserrat-Regular.ttf') format('truetype');font-weight: 400;font-style: normal;}@font-face {font-family: 'Montserrat';src: url('{{asset('/') }}fonts/subsetMontserrat Italic.woff2') format('woff2'), url('{{asset('/') }}fonts/subsetMontserrat Italic.woff') format('woff'), url('{{asset('/') }}fonts/subsetMontserrat Italic.ttf') format('truetype');font-weight: 400;font-style: italic;}@font-face {font-family: 'Montserrat';src: url('{{asset('/') }}fonts/subsetMontserrat Medium.woff2') format('woff2'), url('{{asset('/') }}fonts/subsetMontserrat Medium.woff') format('woff'), url('{{asset('/') }}fonts/subsetMontserrat Medium.ttf') format('truetype');font-weight: 500;font-style: normal;}@font-face {font-family: 'Montserrat';src: url('{{asset('/') }}fonts/Montserrat-Bold.woff2') format('woff2'), url('{{asset('/') }}fonts/Montserrat-Bold.woff') format('woff'), url('{{asset('/') }}fonts/Montserrat-Bold.ttf') format('truetype');font-weight: 700;font-style: normal;}@font-face {font-family: 'Montserrat';src: url('{{asset('/') }}fonts/Montserrat-Black.woff2') format('woff2'), url('{{asset('/') }}fonts/Montserrat-Black.woff') format('woff'), url('{{asset('/') }}fonts/Montserrat-Black.ttf') format('truetype');font-weight: 900;font-style: normal;}</style>
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/waisttrainermobile/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/waisttrainermobile/styles.css">
</head>
<body>
<div class="main_wrapper">
    <!-- header 3 -->
    <header class="offer_section offer3">
        <h1 class="main_title">Waist Trainer</h1>
        <div class="info_block">
            <p class="subtitle">KORSET ZA MRŠAVLJENJE I ZA SJAJAN STRUK</p>
            <div class="discount"><b>40% popusta</b></div>
            <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/b1.jpg" alt="">
        </div>
        <div class="price_block">
            <div class="price_item old">
                <div class="text">Stara cena:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }} RSD
                </div>
            </div>
            <div class="price_item new">
                <div class="text">Nova cena:</div>
                <div class="value">
                    {{ $prices[1]['amount'] }} RSD
                </div>
            </div>
        </div>
        <div class="benefits_block clearfix">
            <div class="benefit_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/1.jpg" alt="">
                <p><b>Sagoreva i uklanja</b> masti</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/2.jpg" alt="">
                <p><b>Zateže</b> figuru</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/3.jpg" alt="">
                <p>Efekat <b>zatezanja</b></p>
            </div>
        </div>
        <a href="#order_form" class="button">Poručite sada</a>
        <div class="products_count"></div>
    </header>
    <!-- /header 3 -->
    <img class="image" src="{{ asset('/') }}flexonikFiles/waisttrainermobile/photo1.jpg" alt="">
    <!-- description -->
    <section class="description_section">
        <h2 class="title"><span>VAŠ STRUK ĆE BITI </span> SAVRŠEN</h2>
        <img class="image" src="{{ asset('/') }}flexonikFiles/waisttrainermobile/photo2.jpg" alt="">
        <p>Korektivni korset Waist Trainer je <b>inovacija u oblasti estetike</b> i opreme za vežbanje. Ovo je neverovatan i jedinstven
            proizvod za <b>efikasan i brz gubitak težine.</b> Korset pomaže brzom oslobađanju od opuštenog stomaka i viška kilograma.
            Štaviše, postignuti efekat je <b>prirodan i trajan,</b> što je veoma važno.</p>
        <img class="image" src="{{ asset('/') }}flexonikFiles/waisttrainermobile/photo3.jpg" alt="">
        <p>Waist Trainer nema čvrst okvir tako da <b>ne stvara nikakav pritisak</b> i ne ometa rad unutrašnjih organa, veoma je udoban
            i prijatan za nošenje u svakodnevnom životu i pri bavljenju sportom, što pomaže da se dobije željeni oblik u najkraćem mogućem roku.</p>
        <img class="image" src="{{ asset('/') }}flexonikFiles/waisttrainermobile/photo4.jpg" alt="">
        <p>Korset efikasno pomaže da se smanji obim struka. Pričvršćuje se za tri reda kukica, zahvaljujući kojima možete <b>smanjiti
                veličinu korseta prilikom mršavljenja</b> bez kupovine novog korseta manje veličine. Korset ne samo da koriguje struk, već i poboljšava
            cirkulaciju krvi, <b>ispravlja držanje i smanjuje veličinu stomaka.</b></p>
        <div class="benefits_list1">
            <div class="benefit_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/4.jpg" alt="">
                <p>Smanjuje obim struka do -17cm. Vidljiv rezultat <b>već nakon 10 dana.</b></p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/5.jpg" alt="">
                <p><b>Neophodan je nakon porođaja,</b> figura će se brzo vratiti u svoj raniji oblik.</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/6.jpg" alt="">
                <p>Napravite savršenu figuru <b>bez ograničenja kretanja.</b></p>
            </div>
        </div>
        <a href="#order_form" class="button">Poručite sada</a>
        <img class="image" src="{{ asset('/') }}flexonikFiles/waisttrainermobile/photo5.jpg" alt="">
    </section>
    <!-- /description -->
    <section class="peobrazit">
        <h2 class="title"><span>KORSET ZA STRUK ĆE VAS TRANSFORMISATI</span><br> ZA NEKOLIKO MINUTA</h2>
        <ul class="preo">
            <li>
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/m1.png" alt="">
                <b>Trenutni efekat <br>transformacije</b>
                <p>Prefinjeni struk, visoke grudi i izraženi bokovi</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/m2.png" alt="">
                <b>Besprekorna figura</b>
                <p>Vaš struk ostaje definisan čak i kada ne nosite korset</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/m3.png" alt="">
                <b>Nevidljiv za druge</b>
                <p>Korset se može nositi diskretno ispod odeće</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/m4.png" alt="">
                <b>Savršeno držanje</b>
                <p>Ostajete u ispravnom položaju i nakon skidanja korseta</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/m5.png" alt="">
                <b>Privlačnost i ženstvenost</b>
                <p>Oblici o kojima ste sanjali biće samo vaši</p>
            </li>
            <li>
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/m6.png" alt="">
                <b>Jedinstveni lateks materijal</b>
                <p>Iznenadićete se koliko su naši korseti udobni i prijatni</p>
            </li>
        </ul>
        <img class="image" src="{{ asset('/') }}flexonikFiles/waisttrainermobile/photo6.jpg" alt="">
        <a href="#order_form" class="button">Poručite sada</a>
    </section>
    <!-- reviews 2 -->
    <section class="reviews2_section gray_theme">
        <h2 class="title">UTISCI <span>NAŠIH KUPACA</span></h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}flexonikFiles/waisttrainermobile/rev2.jpg" alt="">
                <p>
                    Hvala vam na tako neverovatnoj stvari! Poverovala sam u magiju. :)
                    Ne prestajem da oduševljavam druge svojim strukom. Odlično je što se korset može nositi i ispod odeće.
                    Nekada ga nosim tako, kako bih lepše izgledala, a često ga nosim i u teretani kako bih pospešila napredak u efektima vežbanja.
                    Prijatan je i ne ometa kretanje. Mnogo vam hvala!
                </p>
                <div class="author_block clearfix">
                    <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/ava2.jpg" alt="">
                    <div class="author_info">
                        <div class="name">Ines Keranović</div>
                        <div class="text">29 godina</div>
                    </div>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}flexonikFiles/waisttrainermobile/rev1.jpg" alt="">
                <p>
                    I evo mog rezultata. Poručila sam korset da "ispravim figuru", ispostavilo se da on osim što pravi idealan struk, podiže grudi i ispravlja leđa.
                    Jednostavno magija! Prilično je udoban za nošenje, nije primetan ispod odeće. Veoma sam zadovoljna i hvala vam na kvalitetnom proizvodu. Šteta
                    što fotografija ne prenosi pun efekat.
                </p>
                <div class="author_block clearfix">
                    <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/ava1.jpg" alt="">
                    <div class="author_info">
                        <div class="name">Tatjana Ivanović</div>
                        <div class="text">36 godina</div>
                    </div>
                </div>
            </div>
            <div class="review_item">
                <img class="photo" src="{{ asset('/') }}flexonikFiles/waisttrainermobile/rev3.jpg" alt="">
                <p>
                    Konačno sam dobila svoj korset, nestvarno je!!! Uzela sam ga u ruke i nisam verovala da tako tanak korset može da napravi dobar efekat.
                    Ali, kada sam ga obukla, shvatila sam da je to ljubav na prvi pogled. VRHUNSKI!!! Moj dečko je očaran mojim izgledom! Hvala!
                </p>
                <div class="author_block clearfix">
                    <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/ava3.jpg" alt="">
                    <div class="author_info">
                        <div class="name">Darija Bogdanović</div>
                        <div class="text">41 godina</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /reviews 2 -->
    <section class="zakaz">
        <h2 class="title"><span>KAKO </span><br> PORUČITI?</h2>
        <div class="order_steps2 clearfix">
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/order_steps__step1_icon.png" alt="">
                <div class="separator"></div>
                <h4>Popunite podatke</h4>
                <p>Ostavite svoje podatke na našem sajtu</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/order_steps__step2_icon.png" alt="">
                <div class="separator"></div>
                <h4>Kontaktiraćemo vas</h4>
                <p>Potvrdićemo porudžbinu u najkraćem roku</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/order_steps__step3_icon.png" alt="">
                <div class="separator"></div>
                <h4>Slanje</h4>
                <p>Proizvod šaljemo brzom poštom u roku od 1-2 radna dana</p>
            </div>
            <div class="step_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/order_steps__step4_icon.png" alt="">
                <div class="separator"></div>
                <h4>Plaćanje</h4>
                <p>Plaćanje vršite po prijemu pošiljke</p>
            </div>
        </div>
    </section>
    <!-- /order steps 2 -->
    <!-- order 3 -->
    <section class="offer_section offer3 order">
        <h1 class="main_title">Waist Trainer</h1>
        <div class="info_block">
            <p class="subtitle">KORSET ZA MRŠAVLJENJE I ZA SJAJAN STRUK</p>
            <div class="discount"><b>40% popusta</b></div>
            <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/b1.jpg" alt="">
        </div>
        <div class="price_block clearfix">
            <div class="price_item old">
                <div class="text">Stara cena:</div>
                <div class="value">
                    {{ $prices[1]['originalPrice'] }} RSD
                </div>
            </div>
            <div class="price_item new">
                <div class="text">Nova cena:</div>
                <div class="value">
                    {{ $prices[1]['amount'] }} RSD
                </div>
            </div>
        </div>
        <div class="benefits_block clearfix">
            <div class="benefit_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/1.jpg" alt="">
                <p><b>Sagoreva i uklanja</b> masti</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/2.jpg" alt="">
                <p><b>Zateže</b> figuru</p>
            </div>
            <div class="benefit_item">
                <img src="{{ asset('/') }}flexonikFiles/waisttrainermobile/3.jpg" alt="">
                <p>Efekat <b>zatezanja</b></p>
            </div>
        </div>
        <form id="order_form" class="main-order-form order_form" action="{{$orderRoute}}" method="post">
            {{csrf_field()}}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input class="field" type="text" name="name" placeholder="Ime i prezime" required>
            <input class="field" type="tel" name="phone" placeholder="Telefon" required>
            <button class="button">Završi porudžbinu</button>
        </form>
        <div class="products_count"></div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $("a[href^='#']").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
            return false;
        });
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            smartSpeed: 300,
            mouseDrag: false,
            pullDrag: false,
            dots: false,
            nav: true,
            navText: ""
        });
    });
</script>
</body>
</html>