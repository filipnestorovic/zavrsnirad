<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/kidstablet/favicon.ico">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/kidstablet/style.css">
    <style>
        @font-face {
            font-family: 'DINRoundPro';
            src: url('{{ asset('/') }}fonts/subset-DINRoundPro-Light.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-DINRoundPro-Light.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-DINRoundPro-Light.ttf') format('truetype');
            font-weight: 300;
            font-style: normal;
        }
        @font-face {
            font-family: 'DINRoundPro';
            src: url('{{ asset('/') }}fonts/subset-DINRoundPro.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-DINRoundPro.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-DINRoundPro.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'DINRoundPro';
            src: url('{{ asset('/') }}fonts/subset-DINRoundPro-Medi.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-DINRoundPro-Medi.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-DINRoundPro-Medi.ttf') format('truetype');
            font-weight: 500;
            font-style: normal;
        }
        @font-face {
            font-family: 'DINRoundPro';
            src: url('{{ asset('/') }}fonts/subset-DINRoundPro-Bold.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/subset-DINRoundPro-Bold.woff') format('woff'),
            url('{{ asset('/') }}fonts/subset-DINRoundPro-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
<div class="main_wrapper">
    @include('components.display_errors')
    <section class="offer">
        <h1 class="main_title" style="color:#013162;">TABLET ZA RAZVIJANJE KREATIVNOSTI KOD DECE</h1>
        <div class="box">
            <img src="{{ asset('/') }}dailysharkFiles/kidstablet/bgg.jpg" alt="">
            <div class="sale">
                <p>popust <span>40%</span></p>
            </div>
        </div>
        <div class="bottom">
            <ul class="list1">
                <li>Crtanje i pisanje</li>
                <li>Učenje slova i brojeva</li>
                <li>Deca više neće pistati po zidovima</li>
            </ul>
            <div class="price clearfix">
                <div class="old">
                     <span>
                        {{ $prices[1]['originalPrice'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </div>
                <div class="new">
                     <span>
                        {{ $prices[1]['amount'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </div>
            </div>
            <a href="#order_form" class="button-m">Poručite sada</a>
            <p class="products_count">Preostalo <span>18</span> komada na akciji</p>
        </div>
    </section>
    <section class="sect2 spisok3">
        <h2 class="title"><span>KARAKTERISTIKE TABLETA</span></h2>
        <ul>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/s2_img3.jpg">
                <h3>BRISANJE ZAPISA JEDNIM DUGMETOM</h3>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/s2_img2.jpg">
                <h3>OLOVKA JE PRIČVRŠĆENA DIREKTNO NA KUĆIŠTE</h3>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/s2_img1.jpg">
                <h3>NE ŠTETI I NE NAPREŽE OČI</h3>
            </li>
            <li>
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/s2_img4.jpg">
                <h3>VEOMA JE LAGAN I TANAK</h3>
            </li>
        </ul>
        <a href="#order_form" class="button-m">Poručite sada</a>
    </section>
    <section class="sect3 color_theme">
        <h2 class="title">NAJBOLJA IGRAČKA ZA SMIRIVANJE MALIŠANA</h2>
        <img src="{{ asset('/') }}dailysharkFiles/kidstablet/s3_img.jpg" alt="">
        <p>
            Tablet za decu je izvor beskrajne inspiracije. Dete može da crta nešto novo iznova i iznova, a vi ne morate
            da trošite novac na kupovinu novih bojanki i papira. Takođe, deca neće šarati po vašim zidovima.
        </p>
        <ul class="list1">
            <li>Poboljšava kreativnost</li>
            <li>Povećava mentalnu aktivnost</li>
            <li>Razvija motoričke sposobnosti</li>
            <li>Potpuno bezbedna i zdrava zanimacija za dete</li>
        </ul>
        <br>
    </section>
    <section class="sect4">
        <img src="{{ asset('/') }}dailysharkFiles/kidstablet/colors.jpg" alt="">
        <h4>KARAKTERISTIKE:</h4>
        <ul class="comlect">
            <li>
                <span>1</span>
                <p>Materijal: Monohromatski LCD sa filmom <br>Materijal kućišta: ABS plastika</p>
            </li>
            <li>
                <span>2</span>
                <p>Sadržaj pakovanja: tablet, olovka</p>
            </li>
            <li>
                <span>3</span>
                <p>Dijgonala ekrana: 12 inča</p>
            </li>
            <li>
                <span>4</span>
                <p>Težina: 260 grama</p>
            </li>
            <li>
                <span>5</span>
                <p>Veličina pakovanja: 280,8 x 185 x 4,8 mm</p>
            </li>
        </ul>
        <a href="#order_form" class="button-m">Poručite sada</a>
    </section>
    <section class="rev1 color_theme">
        <h2 class="title">UTISCI KUPACA</h2>
        <div class="reviews_slider_rev1">
            <div class="rev1-inner">
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/rev3.jpg" alt="">
                <p>Moja deca vole da crtaju. Pored crtanja na papiru, ponekad crtamo i na štafelaju. Video sam moderan tablet
                    i odmah sam odlučio da ga kupim. Cena je bila vrlo prihvatljiva. Uzgred, video sam slične tablete u dečijim
                    prodavnicama ali su bili mnogo skuplji.</p>
                <b class="info">Ivan, 28 godina</b>
            </div>
            <div class="rev1-inner">
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/rev2.jpg" alt="">
                <p>Moja kćerka je počela da kupuje bojanke ali ih je brzo prevazišla i postale su joj dosadne. Kupila sam jojž
                    ovaj tablet i moram da vam priznam da ju je to fasciniralo. Potpuno je oduševljena poklonom.
                    Preporučujem ga svima koji imaju decu, neverovatna zabava za jako malo novca.</p>
                <b class="info">Anastasija, 34 godine</b>
            </div>
            <div class="rev1-inner">
                <img src="{{ asset('/') }}dailysharkFiles/kidstablet/rev1.jpg" alt="">
                <p>Kupili smo ovaj tablet za pisanje deci. Veoma je pogodan za poneti na put i deca se uglavnom mirna dok se voze.
                    Što je najvažnije, ne boje mi više sedišta u automobilu, to me je ranije izluđivalo. Super stvar, neka svaki
                    roditelj kupi svome detetu.</p>
                <b class="info">Jovan, 31 godina</b>
            </div>
        </div>
        <a href="#order_form" class="button-m">Poručite sada</a>
    </section>
    <section class="vote color_theme">
        <h2 class="title">DA LI SE VAŠEM DETETU DOPAO TABLET?</h2>
        <div class="addreview">
            <div class="width">
                <div class="coll-50 reviews_test">
                    <div class="test">
                        <div class="review_result">
                            <p>Da, dete je oduševljeno</p>
                            <div class="widthpoll">
                                <div class="line green_result" style="width: 76%;"></div>
                                <div class="result_item">76%</div>
                            </div>
                        </div>
                        <div class="review_radio green_radio">
                            <input type="radio"> <span>Da, dete je oduševljeno</span>
                        </div>
                        <div class="review_result">
                            <p>Ne, nije ono što sam očekivao</p>
                            <div class="widthpoll">
                                <div class="line red_result" style="width: 2%;"></div>
                                <div class="result_item">2%</div>
                            </div>
                        </div>
                        <div class="review_radio red_radio">
                            <input type="radio"> <span>Ne, nije ono što sam očekivao</span>
                        </div>
                        <div class="review_result">
                            <p>Nisam još kupio ali bih pogledao rezultat</p>
                            <div class="widthpoll">
                                <div class="line blue_result" style="width: 22%;"></div>
                                <div class="result_item">22%</div>
                            </div>
                            <p class="votenum">Broj glasova: <span>874</span></p>
                        </div>
                        <div class="review_radio blue_radio">
                            <input type="radio"> <span>Nisam još kupio ali bih pogledao rezultat</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="deliv1">
        <h2 class="title">KAKO RADIMO</h2>
        <div class="deliv1_inner">
            <div class="blue1 di1">
                <h3>ISPORUKA</h3>
                <p>Dostava poštom u roku od 3-10 radnih dana</p>
            </div>
        </div>
        <div class="deliv1_inner">
            <div class="purple di2">
                <h3>GARANCIJA</h3>
                <p>Uvek proveravamo robu pre isporuke i garantujemo 100% kvalitet</p>
            </div>
        </div>
        <div class="deliv1_inner">
            <div class="green di3">
                <h3>PLAĆANJE</h3>
                <p>Plaćanje se vrši kuriru pri preuzimanju pošiljke</p>
            </div>
        </div>
        <div class="deliv1_inner">
            <img class="center_img" src="{{ asset('/') }}dailysharkFiles/kidstablet/tov-4.jpg">
        </div>
    </section>
    <section class="offer">
        <h1 class="main_title" style="color:#013162;">TABLET ZA RAZVIJANJE KREATIVNOSTI KOD DECE</h1>
        <div class="box">
            <img src="{{ asset('/') }}dailysharkFiles/kidstablet/bgg.jpg" alt="">
            <div class="sale">
                <p>popust <span>40%</span></p>
            </div>
        </div>
        <div class="bottom">
            <ul class="list1">
                <li>Crtanje i pisanje</li>
                <li>Učenje slova i brojeva</li>
                <li>Deca više neće pistati po zidovima</li>
            </ul>
            <div class="price clearfix">
                <div class="old">
                     <span>
                        {{ $prices[1]['originalPrice'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </div>
                <div class="new">
                     <span>
                        {{ $prices[1]['amount'] }}
                     </span>
                    <small>
                        {{ $prices[1]['currency'] }}
                    </small>
                </div>
            </div>
            <h4>UNESITE PODATKE ZA DOSTAVU</h4>
            <p>i nabavite tablet za decu <span>sa 40% popusta</span></p>
            <form id="order_form" class="main-order-form m1-form" action="{{$orderRoute}}" method="post">
                {{csrf_field()}}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input name="name" type="text" placeholder="Ime i prezime" required="">
                <input name="phone" type="tel" placeholder="Telefon" required="">
                <input name="name" type="text" placeholder="Adresa" required="">
                <input name="name" type="text" placeholder="Grad" required="">
                <button class="button-m">Poručite sada</button>
            </form>
            <p class="products_count">Preostalo <span>18</span> komada na akciji</p>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/kidstablet/init.js"></script>
@include('components.pixel_footer')
</body>
</html>
