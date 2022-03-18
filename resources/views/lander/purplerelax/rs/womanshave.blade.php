<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="icon" href="{{ asset('/') }}purplerelaxFiles/womanshave/favicon.ico">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/womanshave/bootstrap-grid.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/womanshave/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/womanshave/main.css">
</head>
<body>
<menu class="header__menu header__menu--mob">
    <a href="#prof" class="header__link">Mišljenje struke</a>
    <a href="#review" class="header__link">Recenzije</a>
    <a href="#offer" class="header__link">Poručite sada</a>
</menu>
<header class="header">
    <div class="container">
        <div class="row align-items-center header__content">
            <div class="header__mob-menu"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/gumb.svg" alt></div>
            <div class="header__logo">
                <img src="{{ asset('/') }}purplerelaxFiles/womanshave/logo.svg" alt>
            </div>
            <menu class="header__menu row align-items-center ">
                <a href="#prof" class="header__link">Mišljenje struke</a>
                <a href="#review" class="header__link">Recenzije</a>
                <a href="#offer" class="header__link">Poručite sada</a>
            </menu>
        </div>
    </div>
</header>
<main class="main">
    @include('components.display_errors')
    <section class="block1 container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl1.jpg" alt></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl2.jpg" alt></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl3.jpg" alt></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl4.jpg" alt></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl5.jpg" alt></div>
                    </div>
                    <!-- Add Arrows -->
                </div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m1.jpg" alt></div>
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m2.jpg" alt></div>
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m3.jpg" alt></div>
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m4.jpg" alt></div>
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m5.jpg" alt></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="heading">
                    <h1>WOMAN SHAVE <br><span>ŽENSKI BRIJAČ </span></h1>
                </div>
                <div class="price">
                     <span class="price__new">
                        {{ $prices[1]['amount'] }} RSD
                     </span>
                    <span class="price__before">
                        <s>
                           {{ $prices[1]['originalPrice'] }} RSD
                        </s>
                        <sup>-50%</sup>
                     </span>
                </div>
                <div class="block1__list">
                    <p>100% garancija kvaliteta</p>
                    <p>Isporuka u roku od 1-2 dana</p>
                    <p>Plaća se po prijemu pošiljke</p>
                </div>
                <div class="btn-wrap">
                    <a href="#offer" class="btn left">PORUČI ODMAH</a>
                </div>
            </div>
        </div>
    </section>
    <section class="block2">
        <div class="container">
            <div class="blick2-prod"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/product.jpg" alt></div>
            <div class="row block2__grid">
                <div class="col-md-6 col-12 block2__item"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/icon1.svg" alt>
                    <span>Ima masažni efekat</span>
                </div>
                <div class="col-md-6 col-12 block2__item"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/icon2.svg" alt>
                    <span>Prilagođava se svima područjima i tipovima kože</span>
                </div>
                <div class="col-md-6 col-12 block2__item"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/icon3.svg" alt>
                    <span>Uklanja sve dlačice bez bola i iritacija</span>
                </div>
                <div class="col-md-6 col-12 block2__item"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/icon4.svg" alt>
                    <span>Brzo se puni i ima dugovečnu bateriju</span>
                </div>
            </div>
        </div>
    </section>
    <section class="block3">
        <div class="container">
            <div class="title">
                <h2><span class="accent">WOMAN SHAVE —</span> <br>BEZBOLNO <br> UKLANJANJE DLAČICA</h2>
            </div>
            <div class="row block3-content">
                <div class="col-lg-6 col-12">
                    <div class="slider-wrap">
                        <div class="swiper-container block3-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/beforeafter1.jpg" alt></div>
                                <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/beforeafter2.jpg" alt></div>
                                <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/beforeafter3.jpg" alt></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="block3-slider__next block3-slider__control"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/right.svg" alt></div>
                        <div class="block3-slider__prev block3-slider__control"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/left.svg" alt></div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <p><b>Jedinstveni dizajn sečiva čini uklanjanje dlačica sa <span class="accent">Woman Shave</span> brijačem prijatnim i bezbolnim.</b></p>
                    <p>Posebna vlakna nežno masiraju kožu i uklanjaju sve dlačice, čak i one najmanje.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="block4">
        <div class="container">
            <div class="title">
                <h2>UVEK ĆEŠ BITI <br> NEODOLJIVA</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl3.jpg" width="100%">
                </div>
                <div class="col-md-6 col-12">
                    <p>
                        <b><span class="accent">Woman Shave</span> je vaš mali pomoćnik za uklanjanje neželjenih dlačica.</b>
                    </p>
                    <p>Profesionalni uređaj se koristi u kozmetičkim salonima i kod kuće. Milioni žena ga vole jer <b>uklanja dlake sa svih područja.</b></p>
                </div>
            </div>
        </div>
    </section>
    <div class="blue-line">
        <div class="container">
            <p>Zbog velike potražnje, zalihe su ograničene.<br>
                <b>Poručite dok traje specijalni popust od 40%!</b>
            </p>
        </div>
    </div>
    <section class="block5">
        <div class="container">
            <div class="title">
                <h2>NEŽNA DEPILACIJA</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 block5__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/photo1.jpg" alt></div>
                    <p><span>BEZ BOLA</span>Poseban dizajn sečiva vam omogućava da uklonite dlake bez izazivanja neprijatnog osećaja čak i na najdelikatnijim delovima tela.</p>
                </div>
                <div class="col-lg-4 col-md-6 block5__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/photo2.jpg" alt></div>
                    <p><span>ZA SVE OBLASTI</span>Savremeni sistem noževa vam omogućava da uklonite dlačice sa svih područja (noge, pazuh, bikini zona, ruke, itd).</p>
                </div>
                <div class="col-lg-4 col-md-6 block5__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/photo3.jpg" alt></div>
                    <p><span>EFEKTNO</span>Zahvaljujući ugrađenom pozadinskom osvetljenju, čak ni jedva vidljiva dlaka neće ostati na vašem telu.</p>
                </div>
                <div class="col-lg-4 col-md-6 block5__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/photo4.jpg" alt></div>
                    <p><span>KOMPAKTAN</span>Bilo kod kuće, na odmoru ili na putu, ovaj uređaj će uvek biti sa vama.</p>
                </div>
                <div class="col-lg-4 col-md-6 block5__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/photo5.jpg" alt></div>
                    <p><span>ELEGANTAN</span>Elegantan dizajn, ženstvene boje, ergonomski oblik - sve ovo čini savršenim Woman Shave uređaj.</p>
                </div>
                <div class="col-lg-4 col-md-6 block5__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/photo6.jpg" alt></div>
                    <p><span>DUGOTRAJAN</span>Brzo punjenje, dug životni vek i pouzdana baterija za više od 1000 punjenja.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="trigger__form" id="offer">
        <h3>Unesite podatke za dostavu</h3>
        <form action="{{$orderRoute}}" method="post">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <center>
                <h3 class="title">&nbsp;</h3>
            </center>
            <div class="form-group">
                <label>Ime i prezime</label>
                <input type="text" name="name" class="form-control" placeholder="Ime i prezime" required="required">
            </div>
            <div class="form-group">
                <label>Telefon</label>
                <input type="tel" name="phone" class="form-control" placeholder="Telefon" required="required">
            </div>
            <div class="form-group">
                <label>Adresa</label>
                <input type="text" name="shipping_address" class="form-control" placeholder="Ulica i broj">
            </div>
            <div class="form-group">
                <label>Grad</label>
                <input type="text" name="shipping_city" class="form-control" placeholder="Grad">
            </div>
            <center>
                <button id="submit-button" class="btn btn-lg btn-warning new-sbm-btn" type="submit">Poručite sada</button>
            </center>
        </form>
    </div>
    <section class="block6" id="prof">
        <div class="container">
            <div class="title">
                <h2>PROFESIONALCI BIRAJU <br> WOMAN SHAVE</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-12 block6__doc">
                    <div class="img-wrap">
                        <img src="{{ asset('/') }}purplerelaxFiles/womanshave/doctor1.jpg" alt>
                    </div>
                </div>
                <div class="col-md-6 col-12 block6__content">
                    <div class="block6__sub-head">
                        <b><span class="accent">WOMAN SHAVE</span> je odličan za rad u salonu i kućnu upotrebu.</b>
                    </div>
                    <p>Volim ga jer nežno uklanja i najtanje dlake na teško dostupnim mestima, i to radi bezbolno. Zahvaljujući posebnom dizajnu sečiva, ne oštećuje kožu prilikom brijanja i ne iritira je.
                        Koža je uvek glatka i meka.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="block7">
        <div class="container">
            <div class="block7-content">
                <div class="mob-bg">
                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/bg_mob.jpg" alt>
                </div>
                <div class="logo"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/logo2.svg" alt></div>
                <h2 class="block7__title">NEŽNA DEPILACIJA</h2>
                <div class="block7__list">
                    <div class="block7__item">
                        <span>1</span>
                        <p>Pazuha</p>
                    </div>
                    <div class="block7__item">
                        <span>2</span>
                        <p>Bikini zone</p>
                    </div>
                    <div class="block7__item">
                        <span>3</span>
                        <p>Nogu</p>
                    </div>
                    <div class="block7__item">
                        <span>4</span>
                        <p>Ruku</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="block8" id="review">
        <div class="container">
            <div class="title">
                <h2>UTISCI NAŠIH KUPACA</h2>
            </div>
            <div class="row block8-reviews">
                <div class="col-md-8">
                    <div class="block8-reviews__item">
                        <span class="num">5</span>
                        <div class="line full"></div>
                        <span class="comments">(342)</span>
                    </div>
                    <div class="block8-reviews__item">
                        <span class="num">4</span>
                        <div class="line full quarte"></div>
                        <span class="comments">(37)</span>
                    </div>
                    <div class="block8-reviews__item">
                        <span class="num">3</span>
                        <div class="line"></div>
                        <span class="comments">(0)</span>
                    </div>
                    <div class="block8-reviews__item">
                        <span class="num">2</span>
                        <div class="line"></div>
                        <span class="comments">(0)</span>
                    </div>
                    <div class="block8-reviews__item">
                        <span class="num">1</span>
                        <div class="line"></div>
                        <span class="comments">(0)</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block8-reviews__heading">
                        <span>4.7</span>
                        <p>Prosečna ocena proizvoda</p>
                    </div>
                </div>
            </div>
            <div class="slider-wrap slider-wrap--block8">
                <div class="swiper-container block8-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide block8__slide">
                            <div class="block8-slide__wrapper">
                                <div class="block8__slide-header">
                                    <div class="name">
                                        <h3>Katarina Mitrović</h3>
                                    </div>
                                </div>
                                <p>Lepa stvar, sviđa mi se. Radi savršeno, ne znam kako sam do sada živela bez ovoga. :)</p>
                                <div class="img-wrap">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/rev1.jpg" alt class="block8__slide-main">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block8__slide">
                            <div class="block8-slide__wrapper">
                                <div class="block8__slide-header">
                                    <div class="name">
                                        <h3>Mirjana Ristić</h3>
                                    </div>
                                </div>
                                <p>Ovaj brijač je odličan, koristim ga već 3 meseca i oštrice u i dalje izuzetno oštre. Ima snažnu bateriju koja dugo traje!</p>
                                <div class="img-wrap">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/rev2.jpg" alt class="block8__slide-main">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block8__slide">
                            <div class="block8-slide__wrapper">
                                <div class="block8__slide-header">
                                    <div class="name">
                                        <h3>Lara Mišić</h3>
                                    </div>
                                </div>
                                <p>Super je ovaj brijač. Ja sam fotograf i često idem na putovanja. Toliko je praktičan i mali da stane u neseser i ne zauzima mi prostor.
                                    Ranije sam koristila neke brijače koji su me dosta čupali i izazivali neprijatan osećaj. Woman Shave je odličan!</p>
                                <div class="img-wrap">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/rev3.jpg" alt class="block8__slide-main">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block8__slide">
                            <div class="block8-slide__wrapper">
                                <div class="block8__slide-header">
                                    <div class="name">
                                        <h3>Ana Poletan</h3>
                                    </div>
                                </div>
                                <p>Divan brijač, uvek je pri ruci, naročito kada mi iznenada zatreba. :)))</p>
                                <div class="img-wrap">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/rev4.jpg" alt class="block8__slide-main">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide block8__slide">
                            <div class="block8-slide__wrapper">
                                <div class="block8__slide-header">
                                    <div class="name">
                                        <h3>Daliborka Simenunović</h3>
                                    </div>
                                </div>
                                <p>Woman Shave je čudo! Uvek ga nosim sa sobom, na odmoru i na poslu. Nema iritacija nakon brijanja, koža ostane glatka.</p>
                                <div class="img-wrap">
                                    <img src="{{ asset('/') }}purplerelaxFiles/womanshave/rev5.jpg" alt class="block8__slide-main">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="block3-slider__next block3-slider__control"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/right.svg" alt></div>
                <div class="block3-slider__prev block3-slider__control"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/left.svg" alt></div>
            </div>
        </div>
    </section>
    <section class="block9">
        <div class="container">
            <div class="title">
                <h2>PORUČITE <span class="accent">WOMAN SHAVE</span> <br> ODMAH</h2>
            </div>
            <div class="block9__builets">
                <div class="block9__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/builet1.svg" alt></div>
                    <p>Ostavite svoje podatke na našem sajtu</p>
                </div>
                <div class="block9__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/builet2.svg" alt></div>
                    <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
                </div>
                <div class="block9__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/builet3.svg" alt></div>
                    <p>Isporuka u roku od 1-2 radna dana</p>
                </div>
                <div class="block9__item">
                    <div class="img-wrap"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/builet4.svg" alt></div>
                    <p>Plaćanje po pouzeću</p>
                </div>
            </div>
        </div>
    </section>
    <section class="block1 container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="swiper-container gallery-top2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl1.jpg" alt></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl2.jpg" alt></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl3.jpg" alt></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl4.jpg" alt></div>
                        <div class="swiper-slide"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl5.jpg" alt></div>
                    </div>
                    <!-- Add Arrows -->
                </div>
                <div class="swiper-container gallery-thumbs2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m1.jpg" alt></div>
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m2.jpg" alt></div>
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m3.jpg" alt></div>
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m4.jpg" alt></div>
                        <div class="swiper-slide slide__preview"><img src="{{ asset('/') }}purplerelaxFiles/womanshave/sl_m5.jpg" alt></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="heading">
                    <h1>WOMAN SHAVE <br><span>ŽENSKI BRIJAČ </span></h1>
                </div>
                <div class="price">
                     <span class="price__new">
                        {{ $prices[1]['amount'] }} RSD
                     </span>
                    <span class="price__before">
                        <s>
                           {{ $prices[1]['originalPrice'] }} RSD
                        </s>
                        <sup>-50%</sup>
                     </span>
                </div>
                <div class="block1__list">
                    <p>100% garancija kvaliteta</p>
                    <p>Isporuka u roku od 1-2 dana</p>
                    <p>Plaća se po prijemu pošiljke</p>
                </div>
                <div class="btn-wrap">
                    <a href="#offer" class="btn left">PORUČI ODMAH</a>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="{{ asset('/') }}purplerelaxFiles/womanshave/swiper.min.js"></script>
<script src="{{ asset('/') }}purplerelaxFiles/womanshave/common.js"></script>
@include('components.pixel_footer')
</body>
</html>