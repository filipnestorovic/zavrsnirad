<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=480">
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/carheater/favicon.ico">
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/carheater/style.css">
</head>
<body>
<div class="wrap">
    @include('components.display_errors')
    <section class="offer">
        <div class="head">
            <div class="logo">
                <img src="{{ asset('/') }}dailysharkFiles/carheater/logo.png" alt="">
            </div>
            <div class="time-work">
                Potvrđujemo i šaljemo istog dana
            </div>
        </div>
        <div class="main-title">NAVLAKA ZA GREJANJE SEDIŠTE</div>
        <div class="box">
            <div class="sale"><span>Popust 40%</span></div>
            <img src="{{ asset('/') }}dailysharkFiles/carheater/offer.jpg" alt="">
        </div>
        <div class="price">
            <div class="old">
                <p>Redovna cena:</p>
                <div class="val">
                     <span>
                        {{ $prices[1]['originalPrice'] }}
                     </span>
                    <i>
                        {{ $prices[1]['currency'] }}
                    </i>
                </div>
            </div>
            <div class="new">
                <p>Cena na akciji:</p>
                <div class="val">
                     <span>
                        {{ $prices[1]['amount'] }}
                     </span>
                    <i>
                        {{ $prices[1]['currency'] }}
                    </i>
                </div>
            </div>
        </div>
        <ul class="bullet">
            <li>
                <p>Udobna i mekana</p>
            </li>
            <li>
                <p>Pruža vrhunski topao užitak</p>
            </li>
            <li>
                <p>Uključuje se u auto upaljač</p>
            </li>
        </ul>
        <div class="form">
            <a href="#order" class="button-m">PORUČITE ODMAH</a>
            <div class="stock">Preostalo još <b>12</b> komada na akciji</div>
        </div>
    </section>
    <section class="s1">
        <div class="dark-bg">
            <h2 class="title"><span>4 PREDNOSTI </span> CAR HEATER NAVLAKE</h2>
            <ul class="list-v1">
                <li>
                    <div class="item">
                        <div class="icon">
                            <img src="{{ asset('/') }}dailysharkFiles/carheater/s1-icon1.png" alt="">
                        </div>
                        <p>Greje sedište istog trenutka kada se uključi</p>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="icon">
                            <img src="{{ asset('/') }}dailysharkFiles/carheater/s1-icon2.png" alt="">
                        </div>
                        <p>Kvalitetan materijal koji sprečava znojenje</p>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="icon">
                            <img src="{{ asset('/') }}dailysharkFiles/carheater/s1-icon3.png" alt="">
                        </div>
                        <p>Štiti sedište od automobila</p>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="icon">
                            <img src="{{ asset('/') }}dailysharkFiles/carheater/s1-icon4.png" alt="">
                        </div>
                        <p>Lako se montira i može da se prenosi</p>
                    </div>
                </li>
            </ul>
            <img class="photo" src="{{ asset('/') }}dailysharkFiles/carheater/s1-im.jpg" alt="">
            <a href="#order" class="button-m">PORUČITE ODMAH</a>
        </div>
    </section>
    <section class="s2">
        <div class="dark-bg">
            <h3 class="title">U PROIZVODNJI OVOG PROIZVODA KORISTE SE ISKLJUČIVO <span>VISOKOKVALITETNA PLATNA</span>
            </h3>
            <img class="photo" src="{{ asset('/') }}dailysharkFiles/carheater/s2-im2.jpg" alt="">
        </div>
    </section>
    <section class="char">
        <div class="dark-bg">
            <h2 class="title"><span>KARAKTERISTIKE</span> NAVLAKE</h2>
            <div class="slider">
                <div class="item">
                    <img src="{{ asset('/') }}dailysharkFiles/carheater/slide1.jpg" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('/') }}dailysharkFiles/carheater/slide2.jpg" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('/') }}dailysharkFiles/carheater/slide3.jpg" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('/') }}dailysharkFiles/carheater/slide4.jpg" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('/') }}dailysharkFiles/carheater/slide5.jpg" alt="">
                </div>
            </div>
            <ul class="char-list">
                <li>
                    <div class="name">Kompatibilnost:</div>
                    <div class="par">pogodna za sve marke automobila</div>
                </li>
                <li>
                    <div class="name">Pričvršćivanje:</div>
                    <div class="par">gumene kopče</div>
                </li>
                <li>
                    <div class="name">Materijal:</div>
                    <div class="par">visokokvalitetni pamuk, elastin i poliester</div>
                </li>
                <li>
                    <div class="name">Dimenzija:</div>
                    <div class="par">veličina standardnog automobilskog sedišta</div>
                </li>
                <li>
                    <div class="name">Količina:</div>
                    <div class="par">1 kom</div>
                </li>
            </ul>
            <a href="#order" class="button-m">PORUČITE ODMAH</a>
        </div>
    </section>
    <section class="s2">
        <div class="dark-bg">
            <h3 class="title">SEDITE U TOPLO SEDIŠTE <span>VEĆ 10 SEKUNDI </span> NAKON PALJENJA AUTOMOBILA</h3>
            <img class="photo" src="{{ asset('/') }}dailysharkFiles/carheater/s2-im1.jpg" alt="">
        </div>
    </section>
    <section class="s3">
        <h2 class="title">POMAŽE U <span>SLEDEĆIM SITUACIJAMA:</span></h2>
        <ul class="list-v2">
            <li>
                <div class="item">
                    <div class="pic">
                        <div class="num">1</div>
                        <img src="{{ asset('/') }}dailysharkFiles/carheater/s3-im1.jpg" alt="">
                    </div>
                    <h4>Pri velikim hladnoćama štiti zdravlje, posebno kod žena</h4>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="pic">
                        <div class="num">2</div>
                        <img src="{{ asset('/') }}dailysharkFiles/carheater/s3-im2.jpg" alt="">
                    </div>
                    <h4>Sprečava neugodan osećaj hladnoće</h4>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="pic">
                        <div class="num">3</div>
                        <img src="{{ asset('/') }}dailysharkFiles/carheater/s3-im3.jpg" alt="">
                    </div>
                    <h4>Odlično za decu</h4>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="pic">
                        <div class="num">4</div>
                        <img src="{{ asset('/') }}dailysharkFiles/carheater/s3-im4.jpg" alt="">
                    </div>
                    <h4>Mnogo jeftinije od kupovine automobila sa grejačima sedišta</h4>
                </div>
            </li>
        </ul>
        <a href="#order" class="button-m">PORUČITE ODMAH</a>
    </section>
    <section class="s4">
        <div class="dark-bg">
            <h3 class="title">ZAŠTO <span>PORUČITI OD NAS?</span></h3>
            <ul class="list-v3">
                <li>
                    <p>Direktna isporuka brzom poštom</p>
                </li>
                <li>
                    <p>Preko 2350 zadovoljnih kupaca</p>
                </li>
                <li>
                    <p>100% garancija kvaliteta proizvoda</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="s5">
        <h2 class="title">
            <span>ČUVAJTE SE </span> LAŽNIH PROIZVODA
            <small>Na tržištu su se pojavile razne kopije ovog proizvoda, pa kupovinom preko raznih stranica rizikujete
                da dobijete jeftin lažnjak.</small>
        </h2>
        <ul class="list-v4 not">
            <li>
                <div class="item">
                    <div class="pic">
                        <img src="{{ asset('/') }}dailysharkFiles/carheater/s5-im1.jpg" alt="">
                    </div>
                    <h4>Tkanina lošeg kvaliteta</h4>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="pic">
                        <img src="{{ asset('/') }}dailysharkFiles/carheater/s5-im2.jpg" alt="">
                    </div>
                    <h4>Navlake ne drže oblik</h4>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="pic">
                        <img src="{{ asset('/') }}dailysharkFiles/carheater/s5-im3.jpg" alt="">
                    </div>
                    <h4>Slabi šavovi</h4>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="pic">
                        <img src="{{ asset('/') }}dailysharkFiles/carheater/s5-im4.jpg" alt="">
                    </div>
                    <h4>Grejači prestaju da rade</h4>
                </div>
            </li>
        </ul>
    </section>
    <section class="reviews">
        <h2 class="title"><span>UTISCI</span> KUPACA
            <small>Već <i>2350</i> kupaca je kupilo proizvode preko našeg sajta</small>
        </h2>
        <div class="rev-list">
            <div class="item">
                <div class="pic">
                    <img src="{{ asset('/') }}dailysharkFiles/carheater/rev1.jpg" alt="">
                </div>
                <div class="txt">
                    <strong>"Sada je mnogo toplije u automobilu!"</strong>
                    <p>
                        Kupio sam ovo čudo i veoma sam zadovoljan kvalitetom. Materijal je prijatan na dodir, a ono što
                        me je fasciniralo je da navlaka postane topla
                        već nakon 10 sekundi od kada upalim automobil. Vožnja automobilom ujutru kada je mraz je čisto
                        uživanje. Preporučujem svim vozačima!
                    </p>
                </div>
                <div class="author">
                    Adam Jovanović, 28 godina <span>Subotica</span>
                </div>
            </div>
            <div class="item">
                <div class="pic">
                    <img src="{{ asset('/') }}dailysharkFiles/carheater/rev2.jpg" alt="">
                </div>
                <div class="txt">
                    <strong>"Prelepa unutrašnjost automobila!"</strong>
                    <p>
                        Ova navlaka izgleda sjajno u mom autu. Da vam ne pominjem topao efekat koji ona pruža. Moja
                        kćerka obožava da sedi i greje se dok je ujutru vozim u školu.
                        Ljudi, ovo je raj za decu u zimskim danima. Lako se uključi u auto upaljač, podesi željena
                        jačina grejanja i to je sve.
                    </p>
                </div>
                <div class="author">
                    Jovan Popović, 35 godina <span>Beograd</span>
                </div>
            </div>
            <div class="item">
                <div class="pic">
                    <img src="{{ asset('/') }}dailysharkFiles/carheater/rev3.jpg" alt="">
                </div>
                <div class="txt">
                    <strong>"Toplo, simpatično i praktično!"</strong>
                    <p>
                        Naručio sam da mi stigne na posao i stiglo je nakon 2 dana. Jedva sam čekao jutarnji mraz da ga
                        isprobam. Potpuno oduševljenje kada sam seo na toplo sedište.
                        Uh, koja lepota kada lepo greje butine, zadnjicu i leđa. Mrzim zimu i oduvek sam želeo automobil
                        sa grejačima sedišta. Sada sam to pružio sebi sa jako malo novca.
                    </p>
                </div>
                <div class="author">
                    Bogdan Panajotović, 40 godina <span>Smederevo</span>
                </div>
            </div>
        </div>
        <a href="#order" class="button-m">PORUČITE ODMAH</a>
    </section>
    <section class="order-steps">
        <div class="dark-bg">
            <h2 class="title"><span>DOSTAVA</span> I PLAĆANJE</h2>
            <div class="order-list">
                <div class="item">
                    <h4>PORUČIVANJE</h4>
                    <p>Ostavite svoje podatke na našem sajtu</p>
                </div>
                <div class="item">
                    <h4>POTVRDA</h4>
                    <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
                </div>
                <div class="item">
                    <h4>SLANJE</h4>
                    <p>Proizvod šaljemo brzom poštom u roku od 1-2 radna dana</p>
                </div>
                <div class="item">
                    <h4>PLAĆANJE</h4>
                    <p>Paket plaćate kuriru brze pošte po preuzimanju</p>
                </div>
            </div>
        </div>
    </section>
    <section class="offer">
        <div class="main-title">NAVLAKA ZA GREJANJE SEDIŠTE</div>
        <div class="box">
            <div class="sale"><span>Popust 40%</span></div>
            <img src="{{ asset('/') }}dailysharkFiles/carheater/offer.jpg" alt="">
        </div>
        <div class="price">
            <div class="old">
                <p>Redovna cena:</p>
                <div class="val">
                     <span>
                        {{ $prices[1]['originalPrice'] }}
                     </span>
                    <i>
                        {{ $prices[1]['currency'] }}
                    </i>
                </div>
            </div>
            <div class="new">
                <p>Cena na akciji:</p>
                <div class="val">
                     <span>
                        {{ $prices[1]['amount'] }}
                     </span>
                    <i>
                        {{ $prices[1]['currency'] }}
                    </i>
                </div>
            </div>
        </div>
        <div class="form">
            <div class="order-txt">
                Unesite podatke za dostavu i kontaktiraćemo Vas u najkraćem roku kako bi potvrdili Vašu porudžbinu.
            </div>
            <form class="main-order-form m1-form" id="order" action="{{$orderRoute}}" method="post">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <input class="field name" type="text" name="name" placeholder="Ime i prezime" autocomplete="off"
                       required>
                <input class="field phone" type="tel" name="phone" placeholder="Telefon" autocomplete="off" required>
                <button class="button-m">PORUČITE ODMAH</button>
            </form>
            <div class="stock">Preostalo još <b>12</b> komada na akciji</div>
        </div>
    </section>
</div>
<script src="{{ asset('/') }}shared_files/slick.min.js"></script>
<script src="{{ asset('/') }}dailysharkFiles/carheater/init.js"></script>
@include('components.pixel_footer')
</body>
</html>
