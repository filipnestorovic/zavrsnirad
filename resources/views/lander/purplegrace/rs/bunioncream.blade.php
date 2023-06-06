<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width"/>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/') }}purplegraceFiles/bunioncream/4347.png" type="image/png"/>
    <link rel="shortcut icon" href="{{ asset('/') }}purplegraceFiles/bunioncream/4347.png" type="image/png"/>
    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}purplegraceFiles/bunioncream/style.css"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}purplegraceFiles/bunioncream/ever.css"/>
    <!-- JS -->
    <script type="text/javascript" src="{{ asset('/') }}shared_files/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}purplegraceFiles/bunioncream/script.js"></script>
</head>
<body>
<div class="first-block">
    @include('components.display_errors')
    <header>
        <div class="container">
            <div class="logo">
                <img src="{{ asset('/') }}purplegraceFiles/bunioncream/logo.png"/>
            </div>
            <ul class="header-list">
                <li>100% prirodno</li>
                <li>Bez lekova</li>
                <li>Bez operacija</li>
            </ul>
            <div class="btn_wrap">
                <a href="#feedback" class="btn_a scrolling scroll-to-audio">Utisci kupaca</a>
                <a href="#order_form" class="button">Poručite odmah</a>
            </div>
        </div>
    </header>
    <section class="repeat-block clearfix">
        <div class="container">
            <div class="rb-title">LEČENJE ČUKLJEVA <span class="no__wrap">I BOLNIH STOPALA</span></div>
            <div class="rb-descr inL_422543">bez operacije</div>
            <div class="product">
                <img src="{{ asset('/') }}purplegraceFiles/bunioncream/pack.png"/>
                <div class="price">
                    <span class="wow__sale">AKCIJA</span>
                </div>
            </div>
            <div class="form-wrap header_form-wrap">
                <div class="quantity-wrap">
                    <h3 class="free__title">Pažnja! POPUST 40%!</h3>
                </div>
                <form method="post" action="{{$orderRoute}}" class="order_form orderformcdn">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <div class="free__wrap">
                        <div class="free__date">
                            <span class="free__day">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</span>
                            <p class="free__when">
                                {{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}
                            </p>
                        </div>
                    </div>
                    <div class="form-name">
                        <input required type="text" name="name" placeholder="Ime i prezime"/>
                    </div>
                    <div class="form-phone">
                        <input required type="tel" name="phone" placeholder="Telefon"/>
                    </div>
                    <button>Poručite sada <i class="sprite sprite-button-arrow"></i></button>
                </form>
                <div class="secure">
                    <div class="hff_text">*При заказе курсовой программы</div>
                </div>
            </div>
            <ul class="form-list">
                <li>Smanjuje čukljeve</li>
                <li>Ublažava bol i upalu</li>
                <li>Čini stopalo lepim</li>
            </ul>
        </div>
    </section>
</div>
<section class="bad-causes">
    <div class="container">
        <div class="title">RAZLOZI ZA RAZVOJ ČUKLJEVA</div>
        <ul>
            <li>
                <div><img src="{{ asset('/') }}purplegraceFiles/bunioncream/bad-cause-1.jpg"/></div>

                <p>Uske cipele sa visokom potpeticom</p>
            </li>
            <li>
                <div><img src="{{ asset('/') }}purplegraceFiles/bunioncream/bad-cause-2.jpg"/></div>

                <p>Nasledni faktor</p>
            </li>
            <li>
                <div><img src="{{ asset('/') }}purplegraceFiles/bunioncream/bad-cause-4.jpg"/></div>

                <p>Bolesti mišićno-skeletnog sistema</p>
            </li>
            <li>
                <div><img src="{{ asset('/') }}purplegraceFiles/bunioncream/bad-cause-5.jpg"/></div>

                <p>Ravna stopala</p>
            </li>
            <li>
                <div><img src="{{ asset('/') }}purplegraceFiles/bunioncream/bad-cause-3.jpg"/></div>

                <p>Osteoporoza</p>
            </li>
            <li>
                <div><img src="{{ asset('/') }}purplegraceFiles/bunioncream/bad-cause-6.jpg"/></div>

                <p>Povrede</p>
            </li>
        </ul>
    </div>
</section>
<!-- end 2nd block -->
<!-- 3rd block -->
<section class="check-your-self">
    <div class="container">
        <div class="check-your-self-wrap">
            <div class="title">PROVERITE SAMI DA LI SE BER JEDAN SIMPTOM PODUDARA?</div>
            <ul>
                <li>Palac je skrenuo u stranu</li>
                <li>Povećanje veličine i broja obuće</li>
                <li>Nelagodnost i bol u stopalima</li>
                <li>Čest razvoj žuljeva i bradavica</li>
                <li>Promena u hodu, stopala ne izgledaju pravo</li>
                <li>Cipela klizi na jednu stranu</li>
            </ul>
            <div>Ako se bar jedan simptom podudara, odmah započnite sa upotrebom Bunion Cream proizvoda!</div>
            <a href="#order_form" class="form-order-anchor button text-white">PORUČITE ODMAH</a>
        </div>
    </div>
</section>
<section class="effects">
    <div class="container">
        <div class="title">DO ČEGA DOVODE ČUKLJEVI?</div>
        <ul>
            <li>
                <span class="number">1</span>
                <div>Artritis, artroza</div>
                <p>(oštećenje zglobova)</p>
            </li>
            <li>
                <span class="number">2</span>
                <div>Urasli nokti</div>
                <p>(upala koja izaziva jak bol)</p>
            </li>
            <li>
                <span class="number">3</span>
                <div>Utrnulost udova</div>
                <p>(gubitak osećaja i fleksibilnosti udova)</p>
            </li>
            <li>
                <span class="number">4</span>
                <div>Hronični burzitis</div>
                <p>(akumulacija tečnosti)</p>
            </li>
            <li>
                <span class="number">5</span>
                <div>Deichlanderova bolest</div>
                <p>(upala tetiva)</p>
            </li>
        </ul>
    </div>
</section>
<section class="recommend clearfix">
    <div class="container">
        <div class="recommend-wrap">
            <div class="title">KAKO VAS AKTIVNE KOMPONENTE BUNION CREAM PROIZVODA OSLOBAĐAJU OD ČUKLJEVA?</div>
            <ul class="inL_186145">
                <li>
                    <span class="inL_93153">- Jorgovan</span> <br/>
                    smanjuje čukljeve
                </li>
                <li>
                    <span class="inL_104382">- Divlji kesten</span> <br/>
                    ublažava osećaj umora i težine u nogama
                </li>
                <li>
                    <span class="inL_290585">- Kantarion</span> <br/>
                    poboljšava cirkulaciju krvi i pojačava desjtvo svih komponenti kreme
                </li>
                <li>
                    <span class="inL_2989">- Nana</span> <br/>
                    ublažava bol i upalu
                </li>
            </ul>
        </div>
        <div class="product-wrap-r">
            <img src="{{ asset('/') }}purplegraceFiles/bunioncream/pack.png"/>
            <a href="#order_form" class="button ever-popup-btn">PORUČITE ODMAH</a>
        </div>
    </div>
</section>
<section class="good-causes">
    <div class="container">
        <div class="title">5 RAZLOGA ZAŠTO JE BUNION CREAM BOLJI OD <span class="inb">OSTALIH PROIZVODA</span></div>
        <ul>
            <li>
                <i class="sprite sprite-cause-1"></i>
                <p>Niska cena</p>
            </li>
            <li>
                <i class="sprite sprite-cause-2"></i>
                <p>Prirodni sastav koji ne izaziva neželjene efekte</p>
            </li>
            <li>
                <i class="sprite sprite-cause-3"></i>
                <p>Uklanja soli i smanjuje njihovo taloženje u zglobovima</p>
            </li>
            <li>
                <i class="sprite sprite-cause-4"></i>
                <p>Brzo ublažava bol različite jačine</p>
            </li>
            <li>
                <i class="sprite sprite-cause-5"></i>
                <p>Sprečava deformaciju stopala</p>
            </li>
        </ul>
    </div>
</section>
<section class="reviews" id="feedback">
    <div class="container">
        <div class="title"><span class="block-desktop">UTISCI LJUDI </span>KOJI SU ISKUSILI EFEKAT "BUNION CREAM" PROIZVODA</div>
        <div class="owl-carousel_1">
            <div class="reviews-item">
                <i class="review-photo-1"></i>
                <p>
                    Ja sam veoma mlada devojka i radim kao konobarica. Politika restorana: cipele, bela bluza i suknja.
                    Na nogama sam po ceo dan i imam ogromno opterećenje na stopala.
                    Pojavile su mi se izbočine, a noge su počele da me bole i poručila sam Bunion Cream.
                    Neverovatno, ali posle nedelju dana noge su prestale da me bole. Nastaviću da ga koristim, hvala vam mnogo!
                </p>
                <div><span>Svetlana</span></div>
            </div>
            <div class="reviews-item">
                <i class="review-photo-2"></i>
                <p>
                    Kosti su mi narasle u predelu palčeva i veoma su bolne. Cipele nisam mogla normalno da nosim,
                    morala sam da kupujem veći broj ali ni to mi nije pomoglo.
                    Poručila sam "Bunion Cream" i potpuno sam zaboravila šta je bol u stopalima i nelagodnosti pri obuvanju obuće.
                    Savetujem svima koji imaju ovaj problem da kupe bunion kremu.
                </p>
                <div><span>Ljubica</span></div>
            </div>
            <div class="reviews-item">
                <i class="review-photo-3"></i>
                <p>
                    Imama ravna stopala i posle sat vremena u cipelama noge su počinjale da me bole, pojavili su mi se čukljevi i žuljevi.
                    Doktor mi je savetovao da kupim "Bunion Cream" i poslušala sam ga.
                    Posle mesec dana upotrebe sve je nestalo, sada mogu bezbedno da nosim cipele bez straha od povreda i bolova.
                </p>
                <div><span>Katarina</span></div>
            </div>
        </div>
    </div>
</section>
<section class="how-use">
    <div class="container">
        <div class="title">KAKO KORISTITI "BUNION CREAM"</div>
        <ul>
            <li><span class="number">1</span> Nanesite kremu na izbačene kosti na stopalu<span style="display: inline-block;"></span>
            </li>
            <li><span class="number">2</span> Utrljajte laganim masažnim pokretima</li>
            <li><span class="number">3</span> Koristite kremu dva puta dnevno</li>
        </ul>
    </div>
</section>
<div class="repeat-block-bottom">
    <section class="repeat-block clearfix">
        <div class="container">
            <div class="rb-title">LEČENJE ČUKLJEVA I BOLNIH STOPALA</div>
            <div class="rb-descr inL_73507">bez operacije</div>
            <div class="product">
                <img src="{{ asset('/') }}purplegraceFiles/bunioncream/pack.png"/>
                <div class="price">
                    <span class="wow__sale">AKCIJA</span>
                </div>
            </div>
            <div class="form-wrap repeat_form-wrap">
                <div class="quantity-wrap">
                    <h3 class="free__title">Pažnja! POPUST 40%!</h3>
                </div>
                <form method="post" action="{{$orderRoute}}" class="order_form orderformcdn" id="order_form">
                    {{csrf_field()}}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <div class="free__wrap">
                        <div class="free__date">
                            <span class="free__day">{{ $prices[1]['originalPrice'] }} {{ $prices[1]['currency'] }}</span>
                            <p class="free__when">
                                {{ $prices[1]['amount'] }} {{ $prices[1]['currency'] }}
                            </p>
                        </div>
                    </div>
                    <div class="form-name">
                        <input required type="text" name="name" placeholder="Ime i prezime"/>
                    </div>
                    <div class="form-phone">
                        <input required type="tel" name="phone" placeholder="Telefon"/>
                    </div>
                    <button>Poručite sada <i class="sprite sprite-button-arrow"></i></button>
                </form>
            </div>
            <ul class="form-list">
                <li>Smanjuje čukljeve</li>
                <li>Ublažava bol i upalu</li>
                <li>Čini stopalo lepim</li>
            </ul>
        </div>
    </section>
</div>
@include('components.pixel_footer')
</body>
</html>
