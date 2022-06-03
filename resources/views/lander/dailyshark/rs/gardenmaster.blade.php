<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset='utf-8'>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/gardenmaster/favicon.ico"type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/gardenmaster/style.css">
    <style>
        @font-face {
            font-family: 'Etelka Light Pro';
            src: url({{ asset('/') }}fonts/EtelkaLightPro.eot);
            src: url({{ asset('/') }}fonts/EtelkaLightPro.eot?#iefix) format("embedded-opentype"),
            url({{ asset('/') }}fonts/EtelkaLightPro.woff2) format("woff2"),
            url({{ asset('/') }}fonts/EtelkaLightPro.woff) format("woff"),
            url({{ asset('/') }}fonts/EtelkaLightPro.ttf) format("truetype"),
            url({{ asset('/') }}fonts/EtelkaLightPro.svg#EtelkaLightPro) format("svg");
            font-weight: 300;
            font-style: normal
        }

        @font-face {
            font-family: 'Etelka Medium Pro';
            src: url({{ asset('/') }}fonts/EtelkaMediumPro-Bold.eot);
            src: url({{ asset('/') }}fonts/EtelkaMediumPro-Bold.eot?#iefix) format("embedded-opentype"),
            url({{ asset('/') }}fonts/EtelkaMediumPro-Bold.woff2) format("woff2"),
            url({{ asset('/') }}fonts/EtelkaMediumPro-Bold.woff) format("woff"),
            url({{ asset('/') }}fonts/EtelkaMediumPro-Bold.ttf) format("truetype"),
            url({{ asset('/') }}fonts/EtelkaMediumPro-Bold.svg#EtelkaMediumPro-Bold) format("svg");
            font-weight: 500;
            font-style: normal
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header class='bg_header text__color-inversion'>
    <!-- / HEADER -->
    <div class='mw'>
        <figure class='logo'>
            <img alt='' src='{{ asset('/') }}dailysharkFiles/gardenmaster/logo.png'>
            <div class='stick'>
                <h6>
                    JEDINSTVENE 2 U 1 MAKAZE
                </h6>
            </div>
            <div class='stick-two'>
                <h5>
                    ZA KALEMLJENJE DRVEĆA I ŽBUNJA
                </h5>
            </div>
        </figure>
        <figure class='product large'>
            <img alt='' src='{{ asset('/') }}dailysharkFiles/gardenmaster/product-lg.png'>
            <div class='sticker'>
                <h5>
                    PREPORUKA
                    <br>
                    BAŠTOVANA
                </h5>
            </div>
        </figure>
        <figure class='product small'>
            <img alt='' src='{{ asset('/') }}dailysharkFiles/gardenmaster/product.png'>
            <div class='sticker'>
                <h5>
                    PREPORUKA
                    <br>
                    BAŠTOVANA
                </h5>
            </div>
        </figure>
        <div class='title'>
            <h1>
                Obezbeđuju savršeno kalemljenje
                <br>
                biljaka
            </h1>
        </div>
        <ul class='list marked'>
            <li>
                Povećavaju brzinu i kvalitet kalemljenja do 99,99%
            </li>
            <li>
                Omogućavaju da napravite simetričan rez na granama
            </li>
            <li>
                Brzo i lako korišćenje pogodno za početnike
            </li>
            <li>
                3 vrste rezova za različite vrste drveća i biljaka
            </li>
        </ul>
        <div class='form'>
            <form action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <h5>
                    HIT proizvod 2022
                </h5>
                <p>
                    Iskoristite popust!
                </p>
                <span class='price w_700'>
                     <span class='old'>
                        {{ $prices[1]['originalPrice'] }}
                     </span>
                     <span class='new'>
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                     </span>
                  </span>

                <input placeholder='Ime i prezime' name="name" type='text' required>
                <input placeholder='Telefon' name="phone" type='text' required>
                <input type='submit' value='Poručite sa popustom'>
            </form>
        </div>
    </div>
</header>
<main class='main-content'>
    <!-- / SECTION 1 -->
    <section class='bg_1 section_padding' id='art1'>
        <div class='mw dc'>
            <h6>
                UŠTEDA NOVCA NA SADNICAMA
            </h6>
            <h2 class='section_title'>
                  <span class='color_alt'>
                      Zašto je kalemljenje dobro
                  </span>
                za vašu baštu?
            </h2>
            <h4 class='after__title'>
                Biljke za kalemljenje se mogu uzeti od prijatelja ili komšija
            </h4>
        </div>
        <div class='mw'>
            <ul class='type_1 cards is-grid'>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a1-1.png'>
                        <figcaption>
                            <p>
                                Novi život za nove sorte drveća i žbunja. Ako ste uzgajali biljku i ne sviđa vam se njen plod, samo nakalemite drugu.
                            </p>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a1-2.png'>
                        <figcaption>
                            <p>
                                Brzo dobijanje nove sorte koju želite - već 1-2 godine nakon kalemljenja pojavljuju se plodovi.
                            </p>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a1-3.png'>
                        <figcaption>
                            <p>
                                Nema iznenađenja - tačno znate kakve će plodove imati kalemljena biljka.
                            </p>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a1-4.png'>
                        <figcaption>
                            <p>
                                Mogućnost uzgajanja nekoliko sorti na jednom drvetu odjednom. Ušteda prostora u bašti.
                            </p>
                        </figcaption>
                    </figure>
                </li>
            </ul>
        </div>
    </section>
    <!-- / SECTION 2 -->
    <section class='section_padding bg_2 text__color-inversion' id='art2'>
        <div class='mw is-grid'>
            <div class='col c-12'>
                <div class='content'>
                    <h2 class='block_title'>
                        <strong>
                            Osigurajte najbolji rast
                            <br>
                            sa ovim makazama
                        </strong>
                    </h2>
                    <p>
                        Makaze za kalemljenje "Garden Master" vam omogućavaju da napravite sve vrste zareza na biljkama koje kalemite. Rez je ujednačen i savršeno usklađen.
                        Zbog toga kalem brzo raste i drvo se ne razboli.
                    </p>
                    <p class='other'>
                        Sa makazama "Garden Master" možete mnogo brže dobiti plodove sa kalemljenih grana!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- / SECTION 3 -->
    <section class='bg_3 section_padding' id='art3'>
        <div class='mw dc'>
            <h2 class='section_title'>
                  <span class='color_alt'>
                  Koje drveće i žbunje
                  </span>
                se mogu kalemiti
            </h2>
            <h4 class='after__title'>
                Koristeći jedinstvene "Garden Master" makaze?
            </h4>
        </div>
        <div class='mw'>
            <ul class='cards is-grid type_2'>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a3-1.png'>
                        <figcaption>
                            <h6 class='color_alt'>
                                JABUKE
                            </h6>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a3-2.png'>
                        <figcaption>
                            <h6 class='color_alt'>
                                ŠLJIVE
                            </h6>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a3-3.png'>
                        <figcaption>
                            <h6 class='color_alt'>
                                KAJSIJE
                            </h6>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a3-4.png'>
                        <figcaption>
                            <h6 class='color_alt'>
                                VIŠNJE
                            </h6>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a3-5.png'>
                        <figcaption>
                            <h6 class='color_alt'>
                                TREŠNJE
                            </h6>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a3-6.png'>
                        <figcaption>
                            <h6 class='color_alt'>
                                KUPINE
                            </h6>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a3-7.png'>
                        <figcaption>
                            <h6 class='color_alt'>
                                KRUŠKE
                            </h6>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a3-8.png'>
                        <figcaption>
                            <h6 class='color_alt'>
                                MALINE
                            </h6>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a3-9.png'>
                        <figcaption>
                            <h6 class='color_alt'>
                                GROŽĐE
                            </h6>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a3-10.png'>
                        <figcaption>
                            <h6 class='color_alt'>
                                OGROZD
                            </h6>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a3-11.png'>
                        <figcaption>
                            <h6 class='color_alt'>
                                DUNJA
                            </h6>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a3-12.png'>
                        <figcaption>
                            <h6 class='color_alt'>
                                BRESKVA
                            </h6>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a3-13.png'>
                        <figcaption>
                            <h6 class='color_alt'>
                                PLANINSKI PEPEO
                            </h6>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a3-14.png'>
                        <figcaption>
                            <h6 class='color_alt'>
                                GLOG
                            </h6>
                        </figcaption>
                    </figure>
                </li>
            </ul>
            <p>... i mnoge druge ...</p>
        </div>
    </section>
    <!-- / SECTION 4 -->
    <section class='bg_4 section_padding text__color-inversion' id='art4'>
        <div class='mw is-grid'>
            <div class='col c-6'>
                <div class='content'>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/logo.png'>
                    </figure>
                    <h4 class='after__title'>
                        jedinstveni alat koji je veoma popularan kod vodećih baštovana u svetu.
                    </h4>
                    <p>
                        Višestruki pobednik raznih hortikulturalnih izložbi!
                    </p>
                    <a class='btn type_0 modal' href='#orderForm'>
                        PORUČI ODMAH SA 40% POPUSTA
                    </a>
                </div>
            </div>
            <div class='col c-6'>
                <figure class='solo'>
                    <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a4-1.png'>
                </figure>
            </div>
        </div>
    </section>
    <!-- / SECTION 5 -->
    <section class='section_padding bg_5' id='art5'>
        <div class='mw dc'>
            <h2 class='section_title'>
                  <span class='color_alt_2'>
                 3 vrste noževa
                  </span>
                za različite biljke
            </h2>
        </div>
        <div class='mw'>
            <ul class='type_3 cards is-grid'>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a5-1.png'>
                        <figcaption>
                            <h5>
                                OBLIK SLOVA "U"
                            </h5>
                            <p>
                                Za grane prečnika od 5 do 11 mm. Omogućava savršeno srastanje pri kalemljenju krušaka, jabuka, šljiva i drugog sličnog drveća.
                            </p>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a5-2.png'>
                        <figcaption>
                            <h5>
                                OBLIKA SLOVA "V"
                            </h5>
                            <p>
                                Koristi se za kalemljenje tankih grana od 3 do 6 mm. Idealno za grmlje i mlade grane.
                            </p>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a5-3.png'>
                        <figcaption>
                            <h5>
                                "Ω" OBLIK
                            </h5>
                            <p>
                                Omogućava savršeno srastanje najdebljih grana i bolje prijanjanje kalema.
                            </p>
                        </figcaption>
                    </figure>
                </li>
            </ul>
        </div>
    </section>
    <!-- / SECTION 6 -->
    <section class='section_padding bg_6' id='art6'>
        <div class='mw'>
            <ul class='type_3 cards is-grid'>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a6-1.png'>
                        <figcaption>
                            <h6>
                                NOŽEVI OD NERĐAJUĆEG ČELIKA
                            </h6>
                            <p>
                                Noževi su napravljeni od jakog legiranog čelika. Zaoštreni su sa obe strane. Ako jedna strana postane tupa, nož se može okrenuti na drugu stranu.
                                Noževi se mogu ponovo naoštriti.
                            </p>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a6-2.png'>
                        <figcaption>
                            <h6>
                                POUZDANE I JAKE RUČKE
                            </h6>
                            <p>
                                Izrađene su od metala sa gumenim premazom. Omogućavaju ugodan rad čak i pri sečenju debljih grana.
                            </p>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a6-3.png'>
                        <figcaption>
                            <h6>
                                OPRUGA I BRAVA
                            </h6>
                            <p>
                                Između drški rezača postavljena je posebna opruga. Omogućava lakoću kretanja i vraćanje alata u prvobitno stanje. Takođe, na šarkama postoji blokator koji štiti prste od maksimalnog stiskanja ručki.
                            </p>
                        </figcaption>
                    </figure>
                </li>
            </ul>
        </div>
    </section>
    <!-- / SECTION 7 -->
    <section class='section_padding bg_7' id='art7'>
        <div class='mw dc'>
            <h2 class='section_title'>
                Dodatne pogodnosti
                <span class='color_alt'>
                  "Garden Master"
                  </span>
                makaza za kalemljenje
            </h2>
        </div>
        <div class='mw'>
            <ul class='type_3 cards is-grid'>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a7-1.png'>
                        <figcaption>
                            <h5>
                                Brzo narastanje
                            </h5>
                            <p>
                                Rezač za kalemljenje vam omogućava da napravite precizan rez na mladoj grani i podlozi, čime se obezbeđuje čvrst kontakt i savršeno spajanje.
                                Noževi za orezivanje imaju poseban antimikrobni premaz čime se sprečava infekcija biljaka.
                            </p>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a7-2.png'>
                        <figcaption>
                            <h5>
                                POGODNO ZA POČETNIKE
                            </h5>
                            <p>
                                Ako nikada niste kalemili drveće, velike su šanse da ih nećete moći nakalemiti običnim makazama ili nožem. Sa "Garden Master" makazama ćete to sigurno uspeti jer one prave savršen rez.
                            </p>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a7-3.png'>
                        <figcaption>
                            <h5>
                                MINIMUM VREMENA I TRUDA
                            </h5>
                            <p>
                                Kalemljenje sa "Garden Master" makazama je jednostavno i brzo, jer gotovo sav posao formiranja reza obavlja sam alat. Takođe doprinosti i boljem zarastanju i bržem davanju plodova.
                            </p>
                        </figcaption>
                    </figure>
                </li>
            </ul>
        </div>
    </section>
    <!-- / SECTION 8 Expert -->
    <section class='bg_8 section_padding text__color-inversion' id='art8'>
        <div class='mw is-grid'>
            <div class='col c-6'>
                <figure class='solo'>
                    <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/product.png'>
                </figure>
            </div>
            <div class='col c-6'>
                <div class='content'>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/logo.png'>
                    </figure>
                    <h4 class='after__title'>
                        Makaze za kalemljenje drveća i grmlja
                    </h4>
                    <p>
                        Kalemljenje zahteva poseban alat koji pruža maksimalnu preciznost i funkcionalnost. Ove makaze se mogu koristiti i kao obične baštenske.
                    </p>
                    <a class='btn type_0 modal' href='#orderForm'>
                        PORUČI ODMAH SA 40% POPUSTA
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- / SECTION 9 -->
    <section class='section_padding bg_9' id='art9'>
        <div class='mw is-grid'>
            <div class='col c-6'>
                <div class='content'>
                    <h2 class='block_title'>
                        Šta stručnjaci kažu o
                        <br>
                        "Garden Master" makazama?
                    </h2>
                    <p>
                        Mnogim baštovanima početnicima, kalemljenje izgleda kao komplikovana operacija. Zbog toga preferiraju druge načina razmnožavanja biljaka koji im se čine lakšim, ali ti procesi mogu da budu dosta spori i neretko neuspešni. Kalemljenjem se plodovi mogu dobiti u roku od 1 do 2 godine.
                    </p>
                    <p>
                        Ako želite da naučite kako da kalemite brzo, jednostavno i bezbedno, sve što vam treba je dobar alat. Preporučujem vam "Garden Master" makaze. Bez sumnje,
                        ovo je danas najbolji alat za kalemljenje, koji pravi simetrične rezove zahvaljujući kojima dolazi do jednostavno i brzog kalemljenja biljaka.
                    </p>
                </div>
            </div>
            <div class='col c-6'>
                <figure class='solo'>
                    <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a9.png'>
                    <figcaption>
                        <h5>
                            Marko Petrović
                        </h5>
                        <p>
                            Agronom, 15 godina iskustva
                        </p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    <!-- / SECTION 10 -->
    <section class='bg_10 section_padding' id='art10'>
        <div class='mw dc'>
            <h2 class='section_title'>
                Prednosti
                <span class='color_alt'>
                 "Garden Master"
                  </span>
                makaza
            </h2>
        </div>
        <div class='mw'>
            <ul class='cards is-grid type_3'>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a10-1.png'>
                        <figcaption>
                            <h6>
                                Profesionalni alat za kalemljenje
                            </h6>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a10-2.png'>
                        <figcaption>
                            <h6>
                                Američki
                                <br>
                                kvalitet
                            </h6>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a10-3.png'>
                        <figcaption>
                            <h6>
                                Inovativan
                                <br>
                                dizajn
                            </h6>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a7-3.png'>
                        <figcaption>
                            <h6>
                                Dobitnik brojnih nagrada
                                <br>
                                na sajmovima i izložbama
                            </h6>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a10-5.png'>
                        <figcaption>
                            <h6>
                                Preporuka profesionalaca i baštovana amatera
                            </h6>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a10-6.png'>
                        <figcaption>
                            <h6>
                                Pogodno za sve biljke
                            </h6>
                        </figcaption>
                    </figure>
                </li>
            </ul>
        </div>
    </section>
    <!-- / SECTION 11 -->
    <section class='bg_11 section_padding text__color-inversion' id='art11'>
        <div class='mw dc'>
            <h2 class='section_title'>
                Poređenje sa drugim alatima
            </h2>
        </div>
        <div class='mw'>
            <div class='table type_1'>
                <div class='features'>
                    <div class='empty'></div>
                    <div class='param'>
                        <h6>
                            Lakoća korišćenja
                        </h6>
                    </div>
                    <div class='param other'>
                        <h6>
                            Idealno sečenje na podlozi i potomku
                        </h6>
                    </div>
                    <div class='param'>
                        <h6>
                            Brzo narastanje
                        </h6>
                    </div>
                    <div class='param'>
                        <h6>
                            Bezbedno za ljude i biljke
                        </h6>
                    </div>
                    <div class='param'>
                        <h6>
                            Profesionalni alat
                        </h6>
                    </div>
                    <div class='param other'>
                        <h6>
                            Posebno oblikovani noževi za različite vrste drveća
                        </h6>
                    </div>
                    <div class='param'>
                        <h6>
                            Prihvatljiva cena
                        </h6>
                    </div>
                </div>
                <div class='cols'>
                    <div class='col'>
                        <div>
                            <h5>Baštenski noževi</h5>
                        </div>
                        <div>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/minus.svg'>
                        </div>
                        <div class='other'>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/minus.svg'>
                        </div>
                        <div>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/minus.svg'>
                        </div>
                        <div>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/minus.svg'>
                        </div>
                        <div>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/minus.svg'>
                        </div>
                        <div class='other'>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/minus.svg'>
                        </div>
                        <div>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/plus.svg'>
                        </div>
                    </div>
                    <div class='col'>
                        <div>
                            <h5>Obične makaze</h5>
                        </div>
                        <div>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/minus.svg'>
                        </div>
                        <div class='other'>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/minus.svg'>
                        </div>
                        <div>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/minus.svg'>
                        </div>
                        <div>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/minus.svg'>
                        </div>
                        <div>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/plus.svg'>
                        </div>
                        <div class='other'>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/minus.svg'>
                        </div>
                        <div>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/plus.svg'>
                        </div>
                    </div>
                    <div class='col other'>
                        <div>
                            <h5 class='color_alt'>
                                «GARDEN MASTER»
                            </h5>
                        </div>
                        <div>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/plus.svg'>
                        </div>
                        <div class='other'>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/plus.svg'>
                        </div>
                        <div>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/plus.svg'>
                        </div>
                        <div>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/plus.svg'>
                        </div>
                        <div>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/plus.svg'>
                        </div>
                        <div class='other'>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/plus.svg'>
                        </div>
                        <div>
                            <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/plus.svg'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / SECTION 12 -->
    <section class='bg_12 section_padding' id='art12'>
        <div class='mw dc'>
            <h2 class='section_title'>
                  <span class='color_alt'>
                  Jednostavne za upotrebu
                  </span>
                i daju odlične rezultate
            </h2>
        </div>
        <div class='mw'>
            <ul class='cards is-grid type_4'>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a12-1.png'>
                        <figcaption>
                            <p>
                                Podrežite izdanak makazama za orezivanje
                            </p>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a12-2.png'>
                        <figcaption>
                            <p>
                                Pričvrsite mladicu za podlogu
                            </p>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a12-3.png'>
                        <figcaption>
                            <p>
                                Čvrsto omotajte spoj trakom
                            </p>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/a12-4.png'>
                        <figcaption>
                            <p>
                                Nakon 2-3 nedelje kada se mladica ukoreni, uklonite traku
                            </p>
                        </figcaption>
                    </figure>
                </li>
            </ul>
            <h4>
                SADA IMATE KALEMLJENU BILJKU KOJA ĆE VRLO BRZO DATI PLODOVE!
            </h4>
            <a class='btn type_0 modal' href='#orderForm'>
                PORUČI ODMAH SA 40% POPUSTA
            </a>
        </div>
    </section>
    <!-- / SECTION 13 TABLE -->
    <section class='bg_13 section_padding' id='art13'>
        <div class='mw dc'>
            <h2 class='section_title'>
                Utisci kupaca
            </h2>
        </div>
        <div class='mw dc'>
            <div class='scw rew'>
                <ul id='reviews'>
                    <li>
                        <figure>
                            <img class='photo' src='{{ asset('/') }}dailysharkFiles/gardenmaster/r1.png'>
                        </figure>
                        <article>
                            <p>
                                Odlične makaze, prezadovoljan sam. Pre toga sam koristio običan baštenski nož za kalemljenje i nije bi uvek baš polazilo za rukom. Video sam reklamu  za ove
                                makaze i odlučio sam da ih poručim. U bašti imam 11 različitih sorti jabuka nakalemljenih na jedno drvo. Naravno, "Garden Master" makaze su mi u tome pomogle i ne mogu da se porede ni sa kojim alatom.
                                Onima koji je potreban praktičan i profesionalan alat toplo ih preporučujem.
                            </p>
                            <h5 class='color_alt'>
                                STANISLAV, 44 GODINE, IVANJICA
                            </h5>
                        </article>
                    </li>
                    <li>
                        <figure>
                            <img class='photo' src='{{ asset('/') }}dailysharkFiles/gardenmaster/r2.png'>
                        </figure>
                        <article>
                            <p>
                                Dopadaju mi se ove makaze za kalemljenje jer čim ih uzmem u ruku osetim američki kvalitet. U poređenju sa univerzalnim sekačima su kao nebo i zemlja. Sada imam mogućnost da kalemim brzo i kvalitetno.
                                Noževi su oštri i jaki, a drška je čvrsta i ugodna. Dugo nisam kupio ovako dobar proizvod po tako niskoj ceni. Sve preporuke!
                            </p>
                            <h5 class='color_alt'>
                                MARINKO, 52 GODINE, JAGODINA
                            </h5>
                        </article>
                    </li>
                    <li>
                        <figure>
                            <img class='photo' src='{{ asset('/') }}dailysharkFiles/gardenmaster/r3.png'>
                        </figure>
                        <article>
                            <p>
                                Imamo ove makaze već 2 godine i koristim ih periodično. Nisam zažalio što sam ih kupio. Kalem zaista dobro srasta sa drvetom i kalemljene grane brzo rastu. Dosta su kvalitetne, mislim da ću ih koristiti ceo život.
                                Ovakav alat je neophodan za svakog baštovana.
                            </p>
                            <h5 class='color_alt'>
                                VLADA, 48 GODINA, KOSMAJ
                            </h5>
                        </article>
                    </li>
                </ul>
                <div class='scc'>
                    <button class='prev'></button>
                    <button class='next'></button>
                </div>
            </div>
        </div>
    </section>
    <!-- / SECTION 14 REWIEW's -->
    <section class='bg_14 section_padding' id='art14'>
        <div class='mw dc'>
            <h2 class='section_title'>
                Kako poručiti "Garden Master"?
            </h2>
        </div>
        <div class='mw dc'>
            <ul class='cards is-grid type_4'>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/step-1.svg'>
                        <figcaption>
                            <p>
                                Unesite potrebne podatke u formu za poručivanje
                            </p>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/step-2.svg'>
                        <figcaption>
                            <p>
                                Kontaktiraćemo vas da potvrdimo porudžbinu
                            </p>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/step-3.svg'>
                        <figcaption>
                            <p>
                                Proizvod šaljemo brzom poštom u roku od 1-2 radna dana
                            </p>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src='{{ asset('/') }}dailysharkFiles/gardenmaster/step-4.svg'>
                        <figcaption>
                            <p>
                                Pošiljku plaćate kuriru brze pošte tek po preuzimanju
                            </p>
                        </figcaption>
                    </figure>
                </li>
            </ul>
        </div>
    </section>
</main>
<footer class='bg_header text__color-inversion'>
    <!-- / HEADER -->
    <div class='mw'>
        <figure class='logo'>
            <img alt='' src='{{ asset('/') }}dailysharkFiles/gardenmaster/logo.png'>
            <div class='stick'>
                <h6>
                    JEDINSTVENE 2 U 1 MAKAZE
                </h6>
            </div>
            <div class='stick-two'>
                <h5>
                    ZA KALEMLJENJE DRVEĆA I ŽBUNJA
                </h5>
            </div>
        </figure>
        <figure class='product large'>
            <img alt='' src='{{ asset('/') }}dailysharkFiles/gardenmaster/product-lg.png'>
            <div class='sticker'>
                <h5>
                    PREPORUKA
                    <br>
                    BAŠTOVANA
                </h5>
            </div>
        </figure>
        <figure class='product small'>
            <img alt='' src='{{ asset('/') }}dailysharkFiles/gardenmaster/product.png'>
            <div class='sticker'>
                <h5>
                    PREPORUKA
                    <br>
                    BAŠTOVANA
                </h5>
            </div>
        </figure>
        <div class='title'>
            <h1>
                Obezbeđuju savršeno kalemljenje
                <br>
                biljaka
            </h1>
        </div>
        <ul class='list marked'>
            <li>
                Povećavaju brzinu i kvalitet kalemljenja do 99,99%
            </li>
            <li>
                Omogućavaju da napravite simetričan rez na granama
            </li>
            <li>
                Brzo i lako korišćenje pogodno za početnike
            </li>
            <li>
                3 vrste rezova za različite vrste drveća i biljaka
            </li>
        </ul>
        <div class='form' id="orderForm">
            <form action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <h5>
                    HIT proizvod 2022
                </h5>
                <p>
                    Iskoristite popust!
                </p>
                <span class='price w_700'>
                     <span class='old'>
                        {{ $prices[1]['originalPrice'] }}
                     </span>
                     <span class='new'>
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                     </span>
                  </span>
                <input placeholder='Ime i prezime' name="name" type='text' required>
                <input placeholder='Telefon' name="phone" type='text' required>
                <input type='submit' value='Poručite sa popustom'>
            </form>
        </div>
    </div>
</footer>
<script src='{{ asset('/') }}dailysharkFiles/gardenmaster/siema.min.js'></script>
<script src='{{ asset('/') }}dailysharkFiles/gardenmaster/main.js'></script>
@include('components.pixel_footer')
</body>
</html>
