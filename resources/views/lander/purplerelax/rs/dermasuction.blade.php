<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=480">
    <link rel="shortcut icon" href="{{ asset('/') }}purplerelaxFiles/dermasuction/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}purplerelaxFiles/dermasuction/styles.css">
    <style>@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Light.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Light.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Light.ttf') format('truetype');font-weight:300;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro.ttf') format('truetype');font-weight:400;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Medium.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Medium.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Medium.ttf') format('truetype');font-weight:500;font-style:normal}@font-face{font-family:'Gotham Pro';src:url('{{ asset('/') }}fonts/GothamPro-Bold.woff2') format('woff2'),url('{{ asset('/') }}fonts/GothamPro-Bold.woff') format('woff'),url('{{ asset('/') }}fonts/GothamPro-Bold.ttf') format('truetype');font-weight:700;font-style:normal}</style>
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <header class="offer_section">
        <div class="top_line">
            <ul class="clearfix">
                <li><span>Tehnologija</span> 2021</li>
                <li><span>Garancija</span> najbolja cena</li>
                <li><span>Brza</span> isporuka</li>
            </ul>
        </div>
        <h1 class="main_title">Derma Suction <br> najbolji uređaj za čišćenje pora lica</h1>
        <div class="header_image">
            <p class="offer_desc">Za kožu bez mitisera</p>
            <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/offer.jpg" alt="">
            <div class="sale">
                <p>popust <span>-40%</span></p>
            </div>
        </div>
        <ul class="offer_bulets clearfix">
            <li>Bezbedan i veoma efikasan</li>
            <li>Izvlači sebum i nečistoće iz pora</li>
            <li>Potpuno efikasan i bezbedan</li>
        </ul>
        <div class="price clearfix">
            <div class="old">
                Stara cena:
                <p>
                     <span>
                        {{ $prices[1]['originalPrice'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </p>
            </div>
            <div class="new">
                Nova cena:
                <p>
                     <span>
                        {{ $prices[1]['amount'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </p>
            </div>
        </div>
        <a href="#order_form" class="button-m">Poručite sa popustom</a>
    </header>
    <section class="sect2">
        <h2 class="title">DERMA SUCTION DAJE DOBRE REZULTATE VEĆ <span>NAKON PRVOG KORIŠĆENJA!</span>
        </h2>
        <p>Proces čišćenja usisivačem pora zasniva se na stvaranju <span>negativnog pritiska između površine kože i dna zapušene pore.</span>
            Na taj način se uklanjaju <span>masni čepovi i prljavština,</span> te se ovaj metod može deklarisati kao <span>higijenski tretman.</span></p>
        <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/product.png" alt="" class="gifka">
        <ul class="list1">
            <li>Normalizacija metaboličkih procesa u ćelijama</li>
            <li>Aktivacija proizvodnje kolagena i elastina</li>
            <li>Uklanjanje toksina iz ćelija kože</li>
            <li>Uređaj radi nežno i veoma efikasno</li>
        </ul>
        <a href="#order_form" class="button-m">Poručite sa popustom</a>
    </section>
    <section class="sect5">
        <h2 class="title">PRINCIP RADA <span>DERMA SUCTION</span> UREĐAJA</h2>
        <ul class="list3">
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/s5_img1.png" alt="">
                <p>Uklanja mitisere, komedone, lojne čepove i akne</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/s5_img2.png" alt="">
                <p>Vrši vakumsku masažu površine kože lica</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/s5_img3.png" alt="">
                <p>Stimuliše cirkulaciju krvi u ćelijama kože, obnavljajući ih</p>
            </li>
            <li>
                <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/s5_img4.png" alt="">
                <p>Izvlači toksine, štetne mikroorganizme i mrtve ćelije iz pora</p>
            </li>
        </ul>
    </section>
    <section class="step">
        <h2 class="title">KAKO SE KORISTI <span>DERMA SUCTION?</span></h2>
        <ul class="steps">
            <li>
                <div class="step__item">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/steps1.png" alt="" class="step__img">
                    <div class="step__text">
                        <h3>Korak 1</h3>
                        <p>Očistite kožu bilo kojim sredstvom za čišćenje koje odgovara vašoj koži.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="arrow">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/arrow.png" alt="">
                </div>
            </li>
            <li>
                <div class="step__item">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/steps2.png" alt="" class="step__img">
                    <div class="step__text">
                        <h3>Korak 2</h3>
                        <p>15 minuta tretirajte problematična područja kože Derma Suction usisivačem pora.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="arrow">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/arrow.png" alt="">
                </div>
            </li>
            <li>
                <div class="step__item">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/steps3.png" alt="" class="step__img">
                    <div class="step__text">
                        <h3>Korak 3</h3>
                        <p>Na kraju postupka dobro isperite lice hladnom vodom.</p>
                    </div>
                </div>
            </li>
        </ul>
        <div class="text">
            <p class="step__subtitle">Posle 2-3 ponavljanja, efekat traje do 2 meseca!</p>
        </div>
        <div class="creo">
            <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/creo.jpg" alt="">
        </div>
    </section>
    <section class="sect6">
        <h2 class="title">DOKAZ O KVALITETU <span>I NISKA CENA</span></h2>
        <ul class="list4">
            <li>
                <div class="img">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/s6_icon1.png" alt="">
                </div>
                <div class="txt">
                    <span>Siguran</span>
                    <p>Ne izaziva upale na licu i pogodan je za osetljivu kožu.</p>
                </div>
            </li>
            <li>
                <div class="txt">
                    <span>Efikasan</span>
                    <p>Derma Suction za negu kože je u potpunosti istražen i odobren od strane vodećih dermatologa u zemlji.</p>
                </div>
                <div class="img">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/s6_icon2.png" alt="">
                </div>
            </li>
            <li>
                <div class="img">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/s6_icon3.png" alt="">
                </div>
                <div class="txt">
                    <span>Najpovoljnija cena</span>
                    <p>Proizvod kupujte samo na našem zvaničnom sajtu. Garantujemo 100% originalnost robe i najnižu cenu na tržištu.</p>
                </div>
            </li>
        </ul>
    </section>
    <section class="sect7">
        <h2 class="title">UTISCI NAŠIH <span>ZADOVOLJNIH KUPACA</span></h2>
        <div class="reviews">
            <div class="rev_item">
                <div class="info ">
                    <div class="txt">
                        <span>Valerija Perić</span>
                        Novi Sad
                    </div>
                </div>
                <div class="bg__white">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/rev1.png" alt="">
                </div>
                <p>Problemi sa aknama na licu i leđima su me mučili kada sam još bila tinejdžer. Probala sam mnoge proizvode, ali
                    sam uspela da postignem rezultat uz pomoć Derma Suction uređaja. Veoma sam zadovoljna ovom spravicom i preporučujem je svima kojima je potrebna.</p>
            </div>
            <div class="rev_item">
                <div class="info ">
                    <div class="txt">
                        <span>Ana Marković</span>
                        Ivanjica
                    </div>
                </div>
                <div class="bg__white">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/rev2.png" alt="">
                </div>
                <p>Probala sam mnoga sredstva i posećivala razne kozmetičke salone, ali problem sa licem nisam uspela da rešim u potpunosti.
                    Nakon što sam poručila i počela da koristim Derma Suction, moje akne i mitiseri na licu su nestali u prvih 10 dana upotrebe.
                    Veoma mi je drago što sam pronašla efikasan način da rešim svim problem. Mnogo vam hvala!</p>
            </div>
            <div class="rev_item">
                <div class="info ">
                    <div class="txt">
                        <span>Irena Pantović</span>
                        Beograd
                    </div>
                </div>
                <div class="bg__white">
                    <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/rev3.png" alt="">
                </div>
                <p>Videla sam pozitivne ocene na internetu za ovaj proizvod i odlučila sam da ga poručim. Isporučen mi je veoma brzo i koristim ga već treću nedelju.
                    Rezultatom sam veoma zadovoljna! Koža je postala mnogo čistija i svežija! Derma Suction je odličan u borbi protiv mitisera i nastaviću da ga koristim.
                    Definitivno ga preporučujem svima.</p>
            </div>
        </div>
    </section>
    <section class="vote_section gray_theme">
        <h2>DA LI STE ZADOVOLJNI REZULTATOM KORIŠĆENJA DERMA SUCTION UREĐAJA?</h2>
        <div class="vote_block">
            <div class="questions_list">
                <div class="question_item">
                    <div class="line"></div>
                    <div class="question_text">Da, impresioniran sam</div>
                    <div class="percents">82%</div>
                </div>
                <div class="question_item">
                    <div class="line"></div>
                    <div class="question_text">Nije ono što sam očekivao</div>
                    <div class="percents">4%</div>
                </div>
                <div class="question_item">
                    <div class="line"></div>
                    <div class="question_text">Još nisam poručio ali bih da vidim rezultate</div>
                    <div class="percents">14%</div>
                </div>
            </div>
            <div class="voice_count">Ukupno je glasalo <b>2 637</b> <span>ljudi</span></div>
        </div>
    </section>
    <section class="sect9">
        <h2 class="title">KAKO PORUČITI <span>DOSTAVA I PLAĆANJE</span></h2>
        <ul class="list5">
            <li>
                <div class="img"><img src="{{ asset('/') }}purplerelaxFiles/dermasuction/order_1.jpg" alt=""></div>
                <div class="txt">
                    <span>Poručite</span>
                    <p>Unesite svoje podatke na našem sajtu. Kontaktiraćemo vas da potvrdimo porudžbinu.</p>
                </div>
            </li>
            <li>
                <div class="txt">
                    <span>Isporuka</span>
                    <p>Vašu porudžbinu šaljemo poštom u roku od 1-2 radna dana. Plaćate po pouzeću.</p>
                </div>
                <div class="img"><img src="{{ asset('/') }}purplerelaxFiles/dermasuction/order_2.jpg" alt=""></div>
            </li>
            <li>
                <div class="img"><img src="{{ asset('/') }}purplerelaxFiles/dermasuction/order_3.jpg" alt=""></div>
                <div class="txt">
                    <span>Garancija</span>
                    <p>Na sve naše proizvode dajemo garanciju.</p>
                </div>
            </li>
        </ul>
    </section>
    <section class="offer_section">
        <h1 class="main_title">Derma Suction <br> najbolji uređaj za čišćenje pora lica</h1>
        <div class="header_image">
            <p class="offer_desc">Za kožu bez mitisera</p>
            <img src="{{ asset('/') }}purplerelaxFiles/dermasuction/offer.jpg" alt="">
            <div class="sale">
                <p>popust <span>-40%</span></p>
            </div>
        </div>
        <div class="price clearfix">
            <div class="old">
                Stara cena:
                <p>
                     <span>
                        {{ $prices[1]['originalPrice'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </p>
            </div>
            <div class="new">
                Nova cena:
                <p>
                     <span>
                        {{ $prices[1]['amount'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </p>
            </div>
        </div>
        <h5><span>Unesite kontakt podatke</span> i kontaktiraćemo Vas u najkraćem roku</h5>
        <form id="order_form" class="main-order-form m1-form" action="{{$orderRoute}}" method="post">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input type="text" name="name" placeholder="Ime i prezime" required="">
            <input type="tel" name="phone" placeholder="Telefon" required="">
            <button class="button-m">Poručite sa popustom</button>
        </form>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}purplerelaxFiles/dermasuction/main.js"></script>
@include('components.pixel_footer')
</body>
</html>
