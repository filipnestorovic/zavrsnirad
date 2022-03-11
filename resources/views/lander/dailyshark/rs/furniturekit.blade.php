<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('/') }}dailysharkFiles/furniturekit/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/') }}dailysharkFiles/furniturekit/apple-touch-icon-180x180.png">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/furniturekit/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&amp;display=swap" rel="stylesheet">
</head>
<body>
@include('components.display_errors')
<header class="intro">
    <div class="intro__top">
        <h2 class="intro__title"> Furniture Kit Pro</h2>
        <p class="intro__subtitle">PODARITE SVOM NAMEŠTAJU <br>NOV ŽIVOT</p>
    </div>
    <div class="price">
        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/1__1.png" alt class="price__img">
        <div class="price__box">
            <p><b>Cena sa popustom</b></p>
            <div class="price__item">
                <b>
                    {{ $prices[1]['amount'] }} RSD
                </b>
                <s>
                    {{ $prices[1]['originalPrice'] }} RSD
                </s>
            </div>
        </div>
    </div>
    <div class="intro__main">
        <img class="no-pad" src="{{ asset('/') }}dailysharkFiles/furniturekit/intro__main.png" alt>
    </div>
    <div class="builets">
        <div class="builets__list">
            <div class="builets__item"><img src="{{ asset('/') }}dailysharkFiles/furniturekit/builets_1.png" alt class="builets__img"> Daje drvetu originalan izgled</div>
            <div class="builets__item"><img src="{{ asset('/') }}dailysharkFiles/furniturekit/builets_2.png" alt class="builets__img"> Uklanja ogrebotine i sakriva oštećenja</div>
            <div class="builets__item"><img src="{{ asset('/') }}dailysharkFiles/furniturekit/builets_3.png" alt class="builets__img"> Čisti prljavštinu i masnoću sa poda</div>
        </div>
    </div>
    <br>
    <a href="#offer" class="btn">PORUČITE SADA</a>
    <br>
</header>
<main class="main">
    <section class="sect1">
        <div class="content">
            <h2 class="sect1__title"> Furniture Kit Pro</h2>
            <p class="sect1__subtitle">To je univerzalni alat koji može da obnovi bilo koju drvenu površinu i očisti je čak i od najtvrđe prljavštine.</p>
            <div class="sect1__list">
                <div class="sect1__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect1_1.png" alt class="sect1__img">
                    <p>Daje drvetu originalan izgled</p>
                </div>
                <div class="sect1__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect1_2.png" alt class="sect1__img">
                    <p>Održava baršunasti efekat na nameštaju</p>
                </div>
                <div class="sect1__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect1_3.png" alt class="sect1__img">
                    <p>Čisti od najupornije prljavštine</p>
                </div>
                <div class="sect1__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect1_4.png" alt class="sect1__img">
                    <p>Uklanja ogrebotine i sakriva strugotine</p>
                </div>
                <div class="sect1__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect1_5.png" alt class="sect1__img">
                    <p>Poboljšava prirodan izgled bilo kod proizvoda od drveta</p>
                </div>
            </div>
        </div>
        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect1_bottom.png" alt class="sect1__bottom">
    </section>
    <section class="sect2">
        <div class="content">
            <h2 class="sect2__title"> Furniture Kit Pro</h2>
            <div class="sect2__inner">
                <p>Prirodan i istovremeno moćan restorativni proizvod. Ovaj proizvod je kreiran na bazi formule starih francuskih lakova za
                    nameštaj i usavršen je uz pomoć savremenih tehnologija.</p>
                <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect2.png" alt class="sect2__img">
                <p>Jednostavan za upotebu i pogodan za sve drvene površine, Furniture Kit Pro vraća drvenim predmetima njihov prvobitni izgled bez potrebe
                    za rastvaračima, abrazivima ili silikonima.</p>
            </div>
            <a href="#offer" class="btn">PORUČITE SADA</a>
        </div>
        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect2__bottom.png" alt class="sect2__bottom">
    </section>
    <section class="sect3">
        <div class="content">
            <div class="sect3__inner">
                <div class="sect3__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect3_1.png" alt class="sect3__img">
                    <div class="sect3__box">
                        <h3>Za kuhinju</h3>
                        <p>Idealan je za drvene kuhinjske elemente, ukloniće svu masnoću i prljavštinu sa ormarića i vratiće stari sjaj uz pomoć organskih ulja od kojih je načinjen.</p>
                    </div>
                </div>
                <div class="sect3__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect3_2.png" alt class="sect3__img">
                    <div class="sect3__box">
                        <h3>Za antikvitete <br>i stari nameštaj</h3>
                        <p>Furniture Kit PRo je idealan za upotrebu na antikvitetima. Sadrži mešavinu prirodnih voskova i ulja i idealan je za
                            restauraciju starog nameštaja. Sa Furniture Kit Pro možete ukloniti slojeve prljavštine i stare premaze koji čine površinu ružnom i lepljivom.</p>
                    </div>
                </div>
                <div class="sect3__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect3_3.png" alt class="sect3__img">
                    <div class="sect3__box">
                        <h3>Za podove</h3>
                        <p>Furniture Kit Pro je idealan za restauraciju starih podova i parketa. Zbog svog jedinstvenog sastava, očistiće pod od starih i
                            tvrdokornih mrlja, ukloniti ogrebotine i dati drvenom podu originalan izgled.</p>
                    </div>
                </div>
                <div class="sect3__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect3_4.png" alt class="sect3__img">
                    <div class="sect3__box">
                        <h3>Za PVC i druge plastične površine</h3>
                        <p>Takođe je pogodan za upotrebu na PVC i drugim plastičnim površinama. Furniture Kit Pro ne sadrži abrazivne čestice.
                            Zbog toga se može koristiti i kao sredstvo za poliranje plastike, bez straha od grebanja površine.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sect4">
        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect4__top.png" alt class="sect4__top">
        <div class="content">
            <h2 class="sect4__title">EFIKASNO REŠENJE ZA SVAKU PRILIKU</h2>
            <div class="sect4__main">
                <div class="sect4__inner">
                    <div class="sect4__item">
                        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect4_1.png" alt class="sect4__img">
                        <p>Stolovi i stolice</p>
                    </div>
                    <div class="sect4__item">
                        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect4_2.png" alt class="sect4__img">
                        <p>Kuhinjski nameštaj</p>
                    </div>
                </div>
                <div class="sect4__inner">
                    <div class="sect4__item">
                        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect4_3.png" alt class="sect4__img">
                        <p>Stilski nameštaj</p>
                    </div>
                    <div class="sect4__item">
                        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect4_4.png" alt class="sect4__img">
                        <p>Parket</p>
                    </div>
                </div>
            </div>
            <a href="#offer" class="btn">PORUČITE SADA</a>
        </div>
        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect5__top.png" alt class="sect4__bottom">
    </section>
    <section class="sect5">
        <div class="content">
            <h2 class="sect5__title">DAJE DRVETU ORIGINALAN IZGLED</h2>
            <video class="video" style="display: block;" autoplay="" loop="" muted="" playsinline="">
                <source src="{{ asset('/') }}dailysharkFiles/furniturekit/gif.mp4">
            </video>
        </div>
        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect5__bottom.png" alt class="sect5__bottom">
    </section>
    <section class="sect6">
        <div class="content">
            <h2 class="sect6__title">KAKO KORISTITI <br>FURNITURE KIT PRO</h2>
            <div class="sect6__main">
                <div class="sect6__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect6_1.png" alt class="sect6__img">
                    <h3 class="sect6__step">Korak 1</h3>
                    <p>Zagrejte proizvod dok ne omekša i protrljajte površinu krpom</p>
                </div>
                <div class="sect6__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect6_2.png" alt class="sect6__img">
                    <h3 class="sect6__step">Korak 2</h3>
                    <p>Ostavite da deluje 6 sati</p>
                </div>
                <div class="sect6__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect6_3.png" alt class="sect6__img">
                    <h3 class="sect6__step">Korak 3</h3>
                    <p>Uklonite višak proizvoda čistom krpom</p>
                </div>
                <div class="sect6__inner">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect6_4.png" alt>
                    <p>Da biste poboljšali efekat, <br> možete ponoviti postupak <br> u više navrata!</p>
                </div>
            </div>
        </div>
        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect6_bottom.png" alt class="sect6__bottom">
    </section>
    <section class="sect7">
        <div class="content">
            <h2 class="sect7__title">UTISCI <br> NAŠIH KUPACA</h2>
            <div class="reviews owl-carousel">
                <div class="reviews__item">
                    <div class="reviews__header">
                        <img class="ava" src="{{ asset('/') }}dailysharkFiles/furniturekit/ava_1.png" alt>
                        <p class="reviews__name"><b> Srđan</b> Aleksinac</p>
                    </div>
                    <p class="reviews__comment">Komplet za nameštaj Kit Pro me je impresionirao svojom efikasnošću! Sto i dve stare stolice
                        učinio sam da budu kao novi. Lagan i prijatan miris proizvoda ispunio je moju dnevnu sobu.
                        Čak se ispostavilo da sam uklonio staru mrlju sa stola.</p>
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/reviews_img_1.png" alt class="reviews__img">
                </div>
                <div class="reviews__item">
                    <div class="reviews__header">
                        <img class="ava" src="{{ asset('/') }}dailysharkFiles/furniturekit/ava_3.png" alt>
                        <p class="reviews__name"><b> Aleksandra</b> Bečej</p>
                    </div>
                    <p class="reviews__comment">Apsolutno sam oduševljena! Imam stari parket i njegovo održavanje zahtevalo je mnogo truda.
                        Sa ovim proizvodom to je postalo neverovatno lako!
                        Furniture Pro Kit je odlično uradio svoj posao i uklonio stare ogrebotine i mrlje koje ništa nije moglo da ukloni.
                        Veoma sam zadovoljna, čak se i kuća na neki načim promenila, a najvažnije je što mi je trebalo minimalno truda.</p>
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/reviews_img_3.png" alt class="reviews__img">
                </div>
                <div class="reviews__item">
                    <div class="reviews__header">
                        <img class="ava" src="{{ asset('/') }}dailysharkFiles/furniturekit/ava_2.png" alt>
                        <p class="reviews__name"><b> Damjan</b> Beograd</p>
                    </div>
                    <p class="reviews__comment">Kada sam poručiio Furniture Pro nisam očekivao mnogo, čak sam i pomislio posle da je neka glupost sa interneta.
                        Ali, naprotiv - OVAJ PROIZVOD ME JE ODUŠEVIO! Kuda god sam prošao krpom ostajao je sjajan trag, prosto neverovatno.
                        Preporučujem svima!</p>
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/reviews_img_2.png" alt class="reviews__img">
                </div>
            </div>
        </div>
        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect7__bottom.png" alt class="sect7__bottom">
    </section>
    <section class="sect8">
        <div class="content">
            <h2 class="sect8__title">KAKO PORUČITI?</h2>
            <div class="sect8__grid">
                <div class="sect8__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect8_1.png" alt>
                    <p><b> Unesi podatke</b> Ostavite svoje podatke na našoj web stranici</p>
                </div>
                <div class="sect8__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect8_2.png" alt>
                    <p><b> Potvdićemo porudžbinu</b> U najkraćem roku ćemo potvrditi vašu porudžbinu</p>
                </div>
                <div class="sect8__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect8_3.png" alt>
                    <p><b> Isporuka</b> Pošiljku šaljemo brzom poštom u roku od 1-2 radna dana</p>
                </div>
                <div class="sect8__item">
                    <img src="{{ asset('/') }}dailysharkFiles/furniturekit/sect8_4.png" alt style="width: 1.05rem;">
                    <p><b> Plaćanje</b> Plaćate kuriru tek po prijemu pošiljke</p>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="intro">
    <div class="intro__top">
        <h2 class="intro__title"> Furniture Kit Pro</h2>
        <p class="intro__subtitle">PODARITE SVOM NAMEŠTAJU <br>NOV ŽIVOT</p>
    </div>
    <div class="price">
        <img src="{{ asset('/') }}dailysharkFiles/furniturekit/1__1.png" alt class="price__img">
        <div class="price__box">
            <p><b>Cena sa popustom</b></p>
            <div class="price__item">
                <b>
                    {{ $prices[1]['amount'] }} RSD
                </b>
                <s>
                    {{ $prices[1]['originalPrice'] }} RSD
                </s>
            </div>
        </div>
    </div>
    <form id="offer" method="POST" class="main-order-form form" action="{{$orderRoute}}">
        {{csrf_field()}}
        @include('lander.naturapharm.components.form_hidden_fields')
        <input type="text" name="name" required placeholder="Ime i prezime">
        <input type="tel" name="phone" required placeholder="Telefon">
        <input type="text" name="shipping_address" placeholder="Adresa">
        <input type="text" name="shipping_city" placeholder="Grad">
        <button class="btn btn--footer" type="submit">Poručite</button>
    </form>
</footer>
<script src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
<script>
    $("body").on('click', '[href*="#"]', function (e) {
        var fixed_offset = 100;
        $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
        e.preventDefault();
    });

    $(document).ready(function () {
        $(".reviews").owlCarousel({
            margin: 20,
            items: 1,
            dots: true,
            nav: false,
            autoHeight: true,
            loop: true,
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>