<!doctype html>
<html>
<head>
    @include('components.pixel_init')
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, minimal-ui, user-scalable=no">
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('/') }}naturapharmFiles/blender/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/blender/site.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/blender/index.min.css">
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
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
            background: url({{ asset('/') }}naturapharmFiles/blender/top-bnr-mob.png) center 90% / cover no-repeat;
            padding: 40px 0 135vw;
        }
        @media (min-width: 768px) {
            .section-2 {
                padding-bottom: 40px;
                background-image: url({{ asset('/') }}naturapharmFiles/blender/top-banner.png);
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
                background-image: url({{ asset('/') }}naturapharmFiles/blender/customer.png);
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
                background-image: url({{ asset('/') }}naturapharmFiles/blender/offer.png);
                background-position-x: 35%;
            }
        }
        .section-13 {
            background: url({{ asset('/') }}naturapharmFiles/blender/bottom-bnr-mob.png) center bottom/cover no-repeat;
            padding: 35px 0 150vw;
        }
        @media (min-width: 768px) {
            .section-13 {
                padding: 40px 0;
                background-image: url({{ asset('/') }}naturapharmFiles/blender/bottom-banner.png);
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
                        <img src="{{ asset('/') }}naturapharmFiles/blender/logo.png" alt="Logo" class="no-lazy">
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
                                    <p><img src="{{ asset('/') }}naturapharmFiles/blender/logo.png" alt="logo"></p>
                                    <p>Nabavi svoj Blender po specijalnoj ceni još danas!</p>
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
                    <h2>ZDRAV OBROK ILI NAPITAK UVEK PRI RUCI, NA BILO KOM MESTU</h2>
                    <h4><span style="color: #fa6400;">Ovaj blender na baterije sa usb punjenjem savršen je uređaj za ljude koji puno putuju i imaju vrlo aktivan životni stil</span></h4>
                    <ul>
                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/icon.png" alt="tick-icon-01">Savršen za putovanje ili nošenje na posao</li>
                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/icon.png" alt="tick-icon-01">Kompaktan, tanak i izuzetno lagan dizajn - tako da ga možete poneti sa sobom gde god krenete</li>
                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/icon.png" alt="tick-icon-01">Blender se aktivira pritiskom jednog tastera i pruža maksimalnu jednostavnost upotrebe</li>
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
                                        <p>USB BLENDER je napravljen isključivo od najboljih materijala i dizajniran je za dugi vek trajanja</p>
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
                                        <p>Ako niste potpuno zadovoljni svojim blenderom, vratićemo vam novac u najkraćem roku.</p>
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
                    <p><img src="{{ asset('/') }}naturapharmFiles/blender/mid-banner.png" alt=""><img src="{{ asset('/') }}naturapharmFiles/blender/mid-bnr-mob.png" alt=""></p>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-6">
            <div class="container">
                <div class="editor functional">
                    <div class="usefull has-width">
                        <h2>Pravite najbolje smutije gde god poželite!</h2>
                        <p>Zaboravite sve tradicionalne kuhinjske blendere kojima je potrebna električna utičnica! USB Blender ima sopstvenu bateriju koja se puni, što znači da ga možete poneti sa sobom gde god idete - kampovanje, teretanu, dugu šetnju ili gde vam god padne na pamet!</p>
                    </div>
                    <div class="grid-layout intro has-width">
                        <div class="wrap-inner layt-50-50">
                            <div class="columns col-left">
                                <div class="wrap-col">
                                    <h2><span style="color: #fa6400;">Važne funkcije koje su vam potrebne</span></h2>
                                    <h3>Baterija koju možete puniti bilo gde</h3>
                                    <p>Punjiva baterija omogućava da USB Blender nosite sa sobom gde god krenete! Možete napraviti i do deset smutija jednim punjenjem!</p>
                                    <h3>Snažan mikser</h3>
                                    <p>Sa svojim četvorokrakim nožem od nerđajućeg čelika, USB BLENDER će se nositi sa svime što u njega ubacite! Poseduje snažan motor koji muti brzo i lako.</p>
                                    <h3>Sigurnosni mehanzmi</h3>
                                    <p>Ugrađeni sigurnostni mehanizmi sprečavaju povrede tako da ga u kući mogu koristiti sve generacije.</p>
                                </div>
                            </div>
                            <div class="columns col-right">
                                <div class="wrap-col">
                                    <p><img src="{{ asset('/') }}naturapharmFiles/blender/img-1.png" alt=""></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-layout has-width">
                        <div class="wrap-inner layt-50-50">
                            <div class="columns col-left">
                                <div class="wrap-col">
                                    <h2>Jednostavna funkcija miksanja pritiskom na jedno dugme</h2>
                                    <p>Napunite posudu sastojcima koje želite pripremiti i izmiksati - poput voća, povrća i proteina u prahu.
                                        Jednim pritiskom na taster za pokretanje imaćete savršen smoothie u roku od nekoliko sekundi!</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="columns col-right">
                                <div class="wrap-col">
                                    <p><img src="{{ asset('/') }}naturapharmFiles/blender/img-2.png" alt=""></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-7">
            <div class="container">
                <div class="special-offer ">
                    <div class="w_outer">
                        <div class="w_inner">
                            <div class="w_item ">
                                <h3 class="w_toptext">Multifunkcionalni blender za sve namene</h3>
                                <div class="w_desc">
                                    <p>Uz ovaj blender možete brzo i jednostavno praviti smutije kakve god želite.
                                        Savršen je za pasiranje dečje hrane, tako da možete napraviti zdrav obrok sa svežim mesom i povrćem, bez dodataka i komercijalnih proizvoda sa konzervansima. Idealno je za sve koji su u pokretu i žele zdrav i svež obrok na poslu, putovanju ili treningu.
                                        Savršen je poklon za studente i one koji žive u prenatrpanim stanovima jer USB blender zauzima jako malo mesta.</p>
                                </div>
                            </div>
                            <div class="w_item grid">
                                <div class="w_desc">
                                    <ul>
                                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/fruit.png" alt=""></li>
                                        <li><span style="color: #fa6400;">Voćni sokovi</span></li>
                                    </ul>
                                    <ul>
                                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/veggie.png" alt=""></li>
                                        <li><span style="color: #fa6400;">Sokovi od povrća</span></li>
                                    </ul>
                                    <ul>
                                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/smoothie.png" alt=""></li>
                                        <li><span style="color: #fa6400;">Smutiji</span></li>
                                    </ul>
                                    <ul>
                                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/baby.png" alt=""></li>
                                        <li><span style="color: #fa6400;">Hrana za bebe</span></li>
                                    </ul>
                                    <ul>
                                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/shake.png" alt=""></li>
                                        <li><span style="color: #fa6400;">Šejkovi</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-8">
            <div class="container">
                <div class="guides ">
                    <h2 class="w_main_title"><span class="text">Kako koristiti USB BLENDER</span></h2>
                    <div class="w_outer">
                        <div class="w_inner">
                            <div class="w_item ">
                                <h3 class="w_toptext">01</h3>
                                <div class="w_desc">
                                    <p>Jednostavno stavite voće, povrće, protein u prahu ili čak i led i zatvorite poklopac</p>
                                    <p><img src="{{ asset('/') }}naturapharmFiles/blender/step-1.jpg" alt=""></p>
                                </div>
                            </div>
                            <div class="w_item ">
                                <h3 class="w_toptext">02</h3>
                                <div class="w_desc">
                                    <p>Pritisnite taster za start i mešajte sastojke dok ne postignete željenu konzistenciju</p>
                                    <p><img src="{{ asset('/') }}naturapharmFiles/blender/step-2.png" alt=""></p>
                                </div>
                            </div>
                            <div class="w_item ">
                                <h3 class="w_toptext">03</h3>
                                <div class="w_desc">
                                    <p>Jednostavno sipajte sadržaj u čašu i uživajte u slasnom smutiju!</p>
                                    <p><img src="{{ asset('/') }}naturapharmFiles/blender/step-3.jpg" alt=""></p>
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
                    <h2><span style="color: #74bd1f;">Šta naši kupci kažu o USB BLENDERU</span></h2>
                    <h3>Najlakše i najslađe pravljenje smutija ikada</h3>
                    <p>Volim da pijem smutije i prirodne sokove, ali pospremanje svega i ponovno čišćenje kuhinjskog velikog blendera jednostavno nije vredno truda.
                        Kod ovog blendera volim što je jednostavan za upotrebu, daje sjajne rezultate, a što je najbolje od svega, lako se čisti.
                        Ranije sam pripremala smuti najviše jednom mesečno, ali sada uživam u ukusnom smutiju skoro svakog dana.</p>
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
                                    <p>Ovaj blender je savršen za pravljenje brzih i ukusnih poslastica i napitaka.
                                        Koristim ga za sve vrste zdravih i hranjivih napitaka, a idealan je za pravljenje svih vrsta koktela.</p>
                                </div>
                            </div>
                            <div class="w_item ">
                                <h3 class="w_toptext"><strong>Aleksandar J. </strong> – Kragujevac</h3>
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}naturapharmFiles/blender/5-stars.png" alt="" class="img-view">
                                </div>
                                <div class="w_desc">
                                    <p>Znam da je ova stvar zapravo namenjena pravljenju zdravih smutija, ali ona može učiniti mnogo više!
                                        Koristim je za pravljenje svih vrsta ukusnih napitaka i poslastica!
                                        Stavim nekoliko kugli sladoleda, malo mleka, nekoliko kockica čokolade i malo borovnica... i uveravam vas:
                                        ono što napravim je hiljadu puta bolje od svega što sam ikad jeo u poslastičarnici.</p>
                                </div>
                            </div>
                            <div class="w_item ">
                                <h3 class="w_toptext"><strong>Andrijana D. </strong> – Vranje</h3>
                                <div class="w_thumb">
                                    <img src="{{ asset('/') }}naturapharmFiles/blender/5-stars.png" alt="" class="img-view">
                                </div>
                                <div class="w_desc">
                                    <p>Moje dete je vrlo izbirljivo u hrani. Ispljune barem polovinu onoga što joj dam da jede.
                                        Od kada sam kupila USB BLENDER, pravim ukusne i zdrave smutije za moju malu devojčicu, koje ona naprosto obožava!
                                        Obožava sve što spremim u blenderu, a ja kao majka konačno mogu malo da se odmorim od spremanja obroka.</p>
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
                    <h2><span>Blender po sniženoj ceni od 40% je dostupan još malo!</span></h2>
                    <h3>Akcija traje do isteka zaliha</h3>
                    <p>USB BLENDER olakšava pripremu najboljih i najukusnijih smutija, koktela, poslastica, pa čak i dečje hrane!
                        Izuzetno se lako čisti i ima dovoljno snage da se nosi sa svime što u njega ubacite! Punjiva baterija traje dovoljno dugo
                        da ćete zaboraviti kada ste ga poslednji put napunili.</p>
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
                    <h2>ZDRAV OBROK ILI NAPITAK UVEK PRI RUCI, NA BILO KOM MESTU</h2>
                    <h4><span style="color: #fa6400;">Ovaj blender na baterije sa usb punjenjem savršen je uređaj za ljude koji puno putuju i imaju vrlo aktivan životni stil</span></h4>
                    <ul>
                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/icon.png" alt="tick-icon-01">Savršen za putovanje ili nošenje na posao</li>
                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/icon.png" alt="tick-icon-01">Kompaktan, tanak i izuzetno lagan dizajn - tako da ga možete poneti sa sobom gde god krenete</li>
                        <li><img src="{{ asset('/') }}naturapharmFiles/blender/icon.png" alt="tick-icon-01">Blender se aktivira pritiskom jednog tastera i pruža maksimalnu jednostavnost upotrebe</li>
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
                                <p><img src="{{ asset('/') }}naturapharmFiles/blender/logo.png" alt="logo" class=""></p>
                                <p><span>Nabavi svoj Blender po specijalnoj ceni još danas!</span></p>
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