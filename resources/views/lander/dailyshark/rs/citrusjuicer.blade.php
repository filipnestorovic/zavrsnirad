<!doctype html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, minimal-ui, user-scalable=no">
    <link rel="icon" href="{{ asset('/') }}naturapharmFiles/blender/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/blender/site.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/blender/index.min.css">
    <style>
        @font-face {
            font-family: icomoon;
            src: url({{ asset('/') }}fonts/icomoon-f.eot);
            src: url({{ asset('/') }}fonts/icomoon-f.eot) format("embedded-opentype"), url({{ asset('/') }}fonts/icomoon-f.ttf) format("truetype"), url({{ asset('/') }}fonts/icomoon-f.woff) format("woff"),
            url({{ asset('/') }}fonts/icomoon-f.svg) format("svg");
            font-weight: 400;
            font-style: normal;
        }
        .section-2 {
            background: url({{ asset('/') }}dailysharkFiles/citrusjuicer/top-bnr-mob.png) center 90% / cover no-repeat;
            padding: 40px 0 135vw;
        }
        @media (min-width: 768px) {
            .section-2 {
                padding-bottom: 40px;
                background-image: url({{ asset('/') }}dailysharkFiles/citrusjuicer/top-banner.png);
                background-position-y: center;
            }
        }
        .section-7 {
            padding: 0;
            background: url({{ asset('/') }}naturapharmFiles/blender/img-3-mb.jpg) center center/cover no-repeat;
        }
        @media (min-width: 768px) {
            .section-7 {
                padding: 50px 0;
                background: url({{ asset('/') }}naturapharmFiles/blender/img-3.jpg) center center/cover no-repeat;
            }
        }
        .section-9 {
            padding: 30px 0;
            background: url({{ asset('/') }}naturapharmFiles/blender/customer-mb.jpg) center center/cover no-repeat;
        }
        @media (min-width: 768px) {
            .section-9 {
                padding: 50px 0;
                background-image: url({{ asset('/') }}dailysharkFiles/citrusjuicer/customer.png);
                background-position-x: 35%;
            }
        }
        .section-11 {
            padding: 30px 0;
            background: url({{ asset('/') }}naturapharmFiles/blender/offer-mb.jpg) top center/cover no-repeat;
        }
        @media (min-width: 768px) {
            .section-11 {
                padding: 50px 0;
                background-image: url({{ asset('/') }}dailysharkFiles/citrusjuicer/offer.png);
                background-position-x: 35%;
            }
        }
        .section-13 {
            background: url({{ asset('/') }}dailysharkFiles/citrusjuicer/bottom-bnr-mob.png) center bottom/cover no-repeat;
            padding: 35px 0 150vw;
        }
        @media (min-width: 768px) {
            .section-13 {
                padding: 40px 0;
                background-image: url({{ asset('/') }}dailysharkFiles/citrusjuicer/bottom-banner.png);
                background-position-x: 47%;
            }
        }
    </style>
</head>
<body class="indextemplate index ">
<div class="wrapper">
    @include('components.display_errors')
    <header>
        <div class="container">
            <div class="header-inner">
                <div class="logo">
                    <a href="#" class="tracking-link no-redirect">
                        <img src="{{ asset('/') }}dailysharkFiles/citrusjuicer/logo.png" alt="Logo" class="no-lazy">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="section-1">
            <div class="container">
                <div class="editor top-header">
                    <div class="grid-layout ">
                        <div class="wrap-inner layt-50-50">
                            <div class="columns col-left">
                                <div class="wrap-col">
                                    <p><img src="{{ asset('/') }}dailysharkFiles/citrusjuicer/logo.png" alt="logo"></p>
                                    <p>Nabavi svoj Citrus Juicer po specijalnoj ceni još danas!</p>
                                </div>
                            </div>
                            <div class="columns col-right">
                                <div class="wrap-col">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-2">
            <div class="container">
                <div class="wysiwyg-content product-banner top-banner ">
                    <h2>ZDRAV I UKUSAN NAPITAK UVEK PRI RUCI,<br> NA BILO KOM MESTU</h2>
                    <h4><span style="color: #fa6400;">Ovaj Citrus Juicer na baterije sa usb punjenjem savršen je uređaj za ljude koji puno putuju i imaju vrlo aktivan životni stil.</span></h4>
                    <ul>
                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/icon.png" alt="tick-icon-01">Savršen za putovanje ili nošenje na posao</li>
                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/icon.png" alt="tick-icon-01">Kompaktan, tanak i izuzetno lagan dizajn - tako da ga možete poneti sa sobom gde god krenete</li>
                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/icon.png" alt="tick-icon-01">Citrus Juicer se aktivira pritiskom jednog tastera i pruža maksimalnu jednostavnost upotrebe</li>
                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/icon.png" alt="tick-icon-01">Uređaj je izrađen od kvalitetnih materijala i lako se čisti</li>
                    </ul>
                    <p><strong><span style="color: #fa6400;">Ukoliko poručite odmah, ostvarićete specijalni popust od <span style="color: #74bd1f;">40%</span>!<span>&nbsp;</span><br></span></strong></p>
                    <p class="btn-order"><a class="btn-primary shop-link" href="{{$checkoutView}}">PORUČITE ODMAH</a></p>
                    <ol>
                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/guarantee.png" alt=""></li>
                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/5-stars.png" alt=""> 100% garancija zadovoljstva</li>
                    </ol>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-3">
            <div class="container">
                <div class="wysiwyg-content line-divider ">
                    <p><strong>Količine su ograničene i popust od <span style="color: #feee00;">40%</span>&nbsp;može trajati još <span>SAMO MALO!</span></strong></p>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-4">
            <div class="container">
                <div class="guaranteed ">
                    <div class="w_outer">
                        <div class="w_inner">
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}naturapharmFiles/blender/guaranteed.png" alt="" class="img-view">
                                </div>
                                <div class="w_content_wrap">
                                    <h4 class="w_title">Garantovan <br>kvalitet</h4>
                                    <div class="w_desc">
                                        <p>CITRUS JUICER je napravljen isključivo od najboljih materijala i dizajniran je za dugi vek trajanja</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}naturapharmFiles/blender/return.png" alt="" class="img-view">
                                </div>
                                <div class="w_content_wrap">
                                    <h4 class="w_title">Povrat novca bez pitanja</h4>
                                    <div class="w_desc">
                                        <p>Ako niste potpuno zadovoljni svojim sokovnikom, vratićemo vam novac u najkraćem roku.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w_item ">
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}naturapharmFiles/blender/quick.png" alt="" class="img-view">
                                </div>
                                <div class="w_content_wrap">
                                    <h4 class="w_title">Praktičan i lagan za upotrebu</h4>
                                    <div class="w_desc">
                                        <p>Tako lagan i lak za upotrebu da ga možete poneti sa sobom gde god krenete</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-5">
            <div class="container">
                <div class="wysiwyg-content middle-banner ">
                    <p><img src="{{ asset('/') }}dailysharkFiles/citrusjuicer/mid-banner.png" alt=""><img src="{{ asset('/') }}dailysharkFiles/citrusjuicer/mid-bnr-mob.png" alt=""></p>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-6">
            <div class="container">
                <div class="editor functional">
                    <div class="usefull has-width">
                        <h2>Pravite najbolje sokiće gde god poželite!</h2>
                        <p>Zaboravite sve tradicionalne kuhinjske cediljke kojima je potrebna električna utičnica ili ručni napor!
                            CITRUS JUICER ima sopstvenu bateriju koja se puni, što znači da ga možete poneti sa sobom gde god idete - kampovanje, teretanu, dugu šetnju ili gde vam god padne na pamet!</p>
                    </div>
                    <div class="grid-layout intro has-width">
                        <div class="wrap-inner layt-50-50">
                            <div class="columns col-left">
                                <div class="wrap-col">
                                    <h2><span style="color: #fa6400;">Važne funkcije koje su vam potrebne</span></h2>
                                    <h3>Baterija koju možete puniti bilo gde</h3>
                                    <p>Punjiva baterija omogućava da CITRUS JUICER nosite sa sobom gde god krenete! Možete iscediti i do dvadeset sokića jednim punjenjem!</p>
                                    <h3>Snažan motor</h3>
                                    <p>Sa svojim snažnim motorom CITRUS JUICER će iscediti voće do poslednje kapi.</p>
                                    <h3>Sigurnosni mehanzmi</h3>
                                    <p>Ugrađeni sigurnosni mehanizmi sprečavaju povrede tako da ga u kući mogu koristiti sve generacije.</p>
                                </div>
                            </div>
                            <div class="columns col-right">
                                <div class="wrap-col">
                                    <p><img src="{{ asset('/') }}dailysharkFiles/citrusjuicer/img-1.jpg" alt=""></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-layout has-width">
                        <div class="wrap-inner layt-50-50">
                            <div class="columns col-left">
                                <div class="wrap-col">
                                    <h2>Jednostavna funkcija ceđenja pritiskom na jedno dugme</h2>
                                    <p>Isecite na pola voće koje želite da iscedite, stavite ga na odgovarajuće mesto i pritiskom na jedno dugme imaćete savršen ceđeni sok za nekoliko sekundi.</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="columns col-right">
                                <div class="wrap-col">
                                    <p><img src="{{ asset('/') }}dailysharkFiles/citrusjuicer/img-2.png" alt=""></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--/container-->
        </section>
        <section class="section-8">
            <div class="container">
                <div class="guides ">
                    <h2 class="w_main_title"><span class="text">Kako koristiti CITRUS JUICER?</span></h2>
                    <div class="w_outer">
                        <div class="w_inner">
                            <div class="w_item ">
                                <h3 class="w_toptext">01</h3>
                                <div class="w_desc">
                                    <p>Jednostavno postavite voće na odogovarajuće mesto</p>
                                    <p><img src="{{ asset('/') }}dailysharkFiles/citrusjuicer/step-1.jpg" alt=""></p>
                                </div>
                            </div>
                            <div class="w_item ">
                                <h3 class="w_toptext">02</h3>
                                <div class="w_desc">
                                    <p>Pritisnite taster i Citrus Juicer će se aktivirati i početi da cedi sok</p>
                                    <p><img src="{{ asset('/') }}dailysharkFiles/citrusjuicer/step-2.png" alt=""></p>
                                </div>
                            </div>
                            <div class="w_item ">
                                <h3 class="w_toptext">03</h3>
                                <div class="w_desc">
                                    <p>Podignite pumpicu i ispustite isceđeni sadržaj u čašu</p>
                                    <p><img src="{{ asset('/') }}dailysharkFiles/citrusjuicer/step-3.jpg" alt=""></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-9">
            <div class="container">
                <div class="wysiwyg-content best-reviews shop-link ">
                    <h2><span style="color: #74bd1f;">Šta naši kupci kažu o CITRUS JUICER uređaju?</span></h2>
                    <h3>Najlakše i najslađe pravljenje sokića ikada</h3>
                    <p>Volim da pijem ceđene prirodne sokove, ali raspremanje svega i čišćenje velikih sokovnika jednostavno nije vredno truda.
                        Kod ovog uređaja volim što je jednostavan za upotrebu, daje sjajne rezultate, a što je najbolje od svega, lako se čisti.
                        Ranije sam cedila sok najviše jednom mesečno, ali sada cedim i uživam skoro svakog dana.</p>
                    <p><strong><span>ANJA M. - Beograd</span></strong></p>
                    <p class="btn-order"><a class="shop-link" href="{{$checkoutView}}">PORUČITE ODMAH</a></p>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-10">
            <div class="container">
                <div class="rating-block ">
                    <div class="w_outer">
                        <div class="w_inner">
                            <div class="w_item item-1">
                                <h4 class="w_title">4.8</h4>
                                <div class="w_desc">
                                    <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-half-empty"></i></p>
                                    <p>Prosečna ocena</p>
                                </div>
                            </div>
                            <div class="w_item item-2">
                                <div class="w_desc">
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 89%;"></div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 0%;"></div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 11%;"></div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 0%;"></div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 0%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="w_item item-3">
                                <div class="w_desc">
                                    <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i>89%</p>
                                    <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i>0%</p>
                                    <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i>11%</p>
                                    <p><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i>0%</p>
                                    <p><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i>0%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-block ">
                    <div class="w_outer">
                        <div class="w_inner">
                            <div class="w_item ">
                                <h3 class="w_toptext"><strong>Rade M. </strong> – Novi Sad</h3>
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}naturapharmFiles/blender/5-stars.png" alt="" class="img-view">
                                </div>
                                <div class="w_desc">
                                    <p>Ovaj Juicer je savršen za pravljenje brzih i ukusnih napitaka. Koristim ga za sve vrste zdravih i hranjivih napitaka, a idealan je za ceđenje svih vrsta sokova.</p>
                                </div>
                            </div>
                            <div class="w_item ">
                                <h3 class="w_toptext"><strong>Aleksandar J. </strong> – Kragujevac</h3>
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}naturapharmFiles/blender/5-stars.png" alt="" class="img-view">
                                </div>
                                <div class="w_desc">
                                    <p>
                                        Sportista sam i često putujem. U hotelima su ceđeni sokovi preskupi i ranije sam mnogo novca bacao na to.
                                        Sada sa ovim čudom mogu da iscedim sok sebi gde god da se nalazim. Odem na pijacu, kupim pomorandže, limun, grejp i cedim u hotelskoj sobi.
                                        Vrhunska stvar, sve preporuke!
                                    </p>
                                </div>
                            </div>
                            <div class="w_item ">
                                <h3 class="w_toptext"><strong>Andrijana D. </strong> – Vranje</h3>
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}naturapharmFiles/blender/5-stars.png" alt="" class="img-view">
                                </div>
                                <div class="w_desc">
                                    <p>
                                        Moje dete je vrlo izbirljivo u ishrani, i uopšte neće da jede voće. Od kada sam kupila Citrus Juicer, pravim razne ukusne sokiće koje ona pije bez problema.
                                        Obožava sve što iscedim, i konačno sam odahnula - moje dete ima voće u ishrani.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-11">
            <div class="container">
                <div class="wysiwyg-content special-offer text-large ">
                    <h2><span>Citrus Juicer po sniženoj ceni od 40% je dostupan još malo!</span></h2>
                    <h3>Akcija traje do isteka zaliha</h3>
                    <p>CITRUS JUICER olakšava pripremu ukusnih i zdravih sokića. Izuzetno se lako čisti i ima dovoljno snage da se nosi sa svime što u njega ubacite!
                        Punjiva baterija traje dovoljno dugo da ćete zaboraviti kada ste ga poslednji put napunili.</p>
                    <p class="btn-order"><a class="shop-link" href="{{$checkoutView}}">Poruči odmah</a></p>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-12">
            <div class="container">
                <div class="wysiwyg-content line-divider ">
                    <p><strong>Količine su ograničene i popust od <span style="color: #feee00;">40%</span>&nbsp;može trajati još <span>SAMO MALO!</span></strong></p>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-13">
            <div class="container">
                <div class="wysiwyg-content product-banner top-banner ">
                    <h2>ZDRAV I UKUSAN NAPITAK UVEK PRI RUCI, NA BILO KOM MESTU</h2>
                    <h4><span style="color: #fa6400;">Ovaj Citrus Juicer na baterije sa usb punjenjem savršen je uređaj za ljude koji puno putuju i imaju vrlo aktivan životni stil.</span></h4>
                    <ul>
                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/icon.png" alt="tick-icon-01">Savršen za putovanje ili nošenje na posao</li>
                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/icon.png" alt="tick-icon-01">Kompaktan, tanak i izuzetno lagan dizajn - tako da ga možete poneti sa sobom gde god krenete</li>
                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/icon.png" alt="tick-icon-01">Citrus Juicer se aktivira pritiskom jednog tastera i pruža maksimalnu jednostavnost upotrebe</li>
                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/icon.png" alt="tick-icon-01">Uređaj je izrađen od kvalitetnih materijala i lako se čisti</li>
                    </ul>
                    <p><strong><span style="color: #fa6400;">Ukoliko poručite odmah, ostvarićete specijalni popust od <span style="color: #74bd1f;">40%</span>!<span>&nbsp;</span><br></span></strong></p>
                    <p class="btn-order"><a class="btn-primary shop-link" href="{{$checkoutView}}">PORUČITE ODMAH</a></p>
                    <ol>
                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/guarantee.png" alt=""></li>
                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/5-stars.png" alt=""> 100% garancija zadovoljstva</li>
                    </ol>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-14">
            <div class="container">
                <div class="wy-content  footer" style="">
                    <div class="wy-inner">
                        <p><span>© {{ now()->year }} | Sva prava zadržana</span></p>
                        <div class="DMCA_Logo">
                            <a class="no-tracking" title="DMCA Protection">
                                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/dmca.png" alt="DMCA Protection Status">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="floating-bar floating-bottom" data-class=".shop-link, .shop-link a" data-ticktopelm="" data-tickbottomelm=".section-1">
                    <div class="container">
                        <div class="inner">
                            <div class="floating-desc">
                                <p><img src="{{ asset('/') }}dailysharkFiles/citrusjuicer/logo.png" alt="logo" class=""></p>
                                <p><span>Nabavi svoj Citrus Juicer po specijalnoj ceni još danas!</span></p>
                            </div>
                            <a href="{{$checkoutView}}" class="btn-floating-bar " style="background-color: #00C249">
                                <p>Poruči odmah</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
    </main>
</div>
<script src="{{ asset('/') }}shared_files/floating_bar.js"></script>
@include('components.pixel_footer')
</body>
</html>
