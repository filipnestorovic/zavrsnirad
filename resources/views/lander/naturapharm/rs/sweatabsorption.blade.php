<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
    <meta name=viewport content="width=480px">
    <link rel="icon" type="image/png" href="{{ asset('/') }}purplerelaxFiles/buttocksup/favicon.png"/>
    <link rel=stylesheet href="{{ asset('/') }}purplerelaxFiles/buttocksup/style.css">
    <style>
        @font-face {
            font-family: 'Museo Sans';
            src: url({{ asset('/') }}fonts/subset-MuseoSansCyrl-300.woff2) format('woff2'),
            url({{ asset('/') }}fonts/subset-MuseoSansCyrl-300.woff) format('woff'),
            url({{ asset('/') }}fonts/subset-MuseoSansCyrl-300.ttf) format('truetype');
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: 'Museo Sans';
            src: url({{ asset('/') }}fonts/subset-MuseoSansCyrl-500.html) format('woff2'),
            url({{ asset('/') }}fonts/subset-MuseoSansCyrl-501.html) format('woff'),
            url({{ asset('/') }}fonts/subset-MuseoSansCyrl-502.html) format('truetype');
            font-weight: 500;
            font-style: normal
        }

        @font-face {
            font-family: 'Museo Sans';
            src: url({{ asset('/') }}fonts/subset-MuseoSansCyrl-700.woff2) format('woff2'),
            url({{ asset('/') }}fonts/subset-MuseoSansCyrl-700.woff) format('woff'),
            url({{ asset('/') }}fonts/subset-MuseoSansCyrl-700.ttf) format('truetype');
            font-weight: 700;
            font-style: normal
        }

        @font-face {
            font-family: 'Museo Sans';
            src: url({{ asset('/') }}fonts/subset-MuseoSansCyrl-900.woff2) format('woff2'),
            url({{ asset('/') }}fonts/subset-MuseoSansCyrl-900.woff) format('woff'),
            url({{ asset('/') }}fonts/subset-MuseoSansCyrl-900.ttf) format('truetype');
            font-weight: 900;
            font-style: normal
        }
        .header_offer {
            background:url({{ asset('/') }}naturapharmFiles/sweatabsorption/xphoto1.jpg.pagespeed.ic.5voWtocCpw.jpg) center top no-repeat
        }
    </style>
</head>
<body class=lang-it>
<div class=wrap>
    @include('components.display_errors')
    <div class="header-v2 separation">
        <section class=header_offer>
            <p>Popust<br> -<b class=price_land_discount>40</b>% <br> </p>
        </section>
        <h1 class=venzel>
            Novo na svetskom tržištu
            <span>SWEAT ABSORPTION</span>
            Ulošci protiv znojenja ispod pazuha
        </h1>
        <section class=ul_topper_all>
            <ul class=ul_topper>
                <li>Upijaju i daju prijatan osećaj</li>
                <li>Nema mokrih fleka na majicama i košuljama</li>
            </ul>
        </section>
        <section class=header_price>
            <div class=price-v2>
                <div class=old>
                    Redovna cena:
                    <span>
                     <b class=price_land_s4>
                        {{ $prices[1]['originalPrice'] }}
                     </b>
                     <b class=price_land_curr>
                        {{ $prices[1]['currency'] }}
                     </b>
                  </span>
                </div>
                <div class="new color2">
                    Cena na akciji:
                    <span>
                     <b class=price_land_s1>
                        {{ $prices[1]['amount'] }}
                     </b>
                     <b class=price_land_curr>
                        {{ $prices[1]['currency'] }}
                     </b>
                  </span>
                </div>
            </div>
            <img width="100%"
                 src="{{ asset('/') }}naturapharmFiles/sweatabsorption/xedgii_bg_prod.png.pagespeed.ic.rNU4xN-c_o.png"
                 alt="" >
            <a href="#order_form" class=button-m>Poručite sada</a>
            <p class=products_count>Na akciji ostalo još <span>18</span> komada</p>
        </section>
    </div>
    <section class="reviews separation">
        <div class=reviews_slider>
            <div>
                <img
                    src="{{ asset('/') }}naturapharmFiles/sweatabsorption/xprod1.jpg.pagespeed.ic.hxQS4xWNRr.jpg"
                    alt="ButtocksUp">
            </div>
            <div>
                <img
                    src="{{ asset('/') }}naturapharmFiles/sweatabsorption/xprod2.jpg.pagespeed.ic.OlFY63_IOa.jpg"
                    alt="ButtocksUp">
            </div>
            <div>
                <img
                    src="{{ asset('/') }}naturapharmFiles/sweatabsorption/xprod3.jpg.pagespeed.ic.ypFI8YnAHO.jpg"
                    alt="ButtocksUp">
            </div>
            <div>
                <img
                    src="{{ asset('/') }}naturapharmFiles/sweatabsorption/xprod4.jpg.pagespeed.ic.dXs4vqhkI8.jpg"
                    alt="ButtocksUp">
            </div>
            <div>
                <img
                    src="{{ asset('/') }}naturapharmFiles/sweatabsorption/xprod5.jpg.pagespeed.ic.8wThyovo3P.jpg"
                    alt="ButtocksUp">
            </div>
            <div>
                <img
                    src="{{ asset('/') }}naturapharmFiles/sweatabsorption/xprod6.jpg.pagespeed.ic.bH6IQy31L9.jpg"
                    alt="ButtocksUp">
            </div>
        </div>
    </section>
    <div class=main>
        <h2 class=venzel>Eliminišite tragove znojenja sa ovim inovativnim proizvodom koji je trenutno najprodavaniji u svetu!</h2>
        <section class=main>
            <p>Uložak je ekstremno tanak i ima veliku moć upijanja. Lepi se na košulju ili majicu i nežno naleže
                na područje pazuha. Sav znoj upija, ne stvara neprijatan miris i vrlo lako može da se zameni.</p>
            <img style="margin: auto; display: block;"
                 src="{{ asset('/') }}naturapharmFiles/sweatabsorption/xinfrared.jpg.pagespeed.ic.-d9tHDjQdS.jpg"
                 alt="ButtocksUp">
        </section>
        <section class="main_preim_tovara-v2 small_padding">
            <h2 class=venzel>
                <span style="color:#ff76ae">KARAKTERISTIKE</span>
            </h2>
            <ul>
                <li>
                    <img src="{{ asset('/') }}naturapharmFiles/sweatabsorption/ximg1.jpg.pagespeed.ic.Bcpizbalvh.jpg"
                         alt="ButtocksUp" >
                    <p>Napravljeno je od prirodnog materijala</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}naturapharmFiles/sweatabsorption/img2.jpg"
                         alt="ButtocksUp" >
                    <p>Eliminiše neprijatan miris</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}naturapharmFiles/sweatabsorption/ximg3.jpg.pagespeed.ic.dxPvzwzBWA.jpg"
                         alt="ButtocksUp" >
                    <p>Udobni su za nošenje i nećete ih osetiti</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}naturapharmFiles/sweatabsorption/img4.jpg"
                         alt="ButtocksUp" >
                    <p>Preko 3000 prodatih pakovanja</p>
                </li>
            </ul>
            <a href="#order_form" class=button-m>Poručite sada</a>
        </section>
        <h2 class=venzel>UTISCI NAŠIH KUPACA</h2>
        <section class="reviews separation">
            <div class=reviews_slider>
                <div>
                    <img src="{{ asset('/') }}naturapharmFiles/sweatabsorption/xrev1.jpg.pagespeed.ic.Y0h0iq4df-.jpg"
                         alt="ButtocksUp" >
                    <div class="name_rev color3">
                        <h3 class=five>EMA, 27 GODINA</h3>
                    </div>
                    <p class=justify>Nakon prvog korišćenja, oduševljenje je bilo neminovno. Suvo područje ispod pazuha bez neprijatnog znojenja.
                        Ovo je odlično za svaku priliku. Sve preporuke!</p>
                </div>
                <div>
                    <img src="{{ asset('/') }}naturapharmFiles/sweatabsorption/xrev2.jpg.pagespeed.ic.i9K9FAh9Qq.jpg"
                         alt="ButtocksUp" >
                    <div class="name_rev color3">
                        <h3 class=four>ANDREA, 30 GODINA</h3>
                    </div>
                    <p class=justify>Svim srcem preporučujem ovaj proizvod. Konačno mi topli dani više nisu noćna mora zbog mog
                        učestalog znojenja. Hvala onome ko je izumio ove uloške. Kupovala sam ranije neke, ali ovi su
                        jedini koji mi ne smetaju i koji ne stvaraju nelagodu.</p>
                </div>
                <div>
                    <img src="{{ asset('/') }}naturapharmFiles/sweatabsorption/xrev3.jpg.pagespeed.ic.39GFgUcJpb.jpg"
                         alt="ButtocksUp" >
                    <div class="name_rev color3">
                        <h3 class=four>MARIJANA, 33 GODINE</h3>
                    </div>
                    <p class=justify>Konačno više nemam muku da na poslovnim sastancima budem mokar ispod pazuha. Često mi je bilo
                        jako neprijatno i gubio sam samopouzdanje. Sada fino ujutru stavim Sweat Absorbtion uloške i miran sam celi dan.
                        Nema čak ni neprijatnih mirisa.</p>
                </div>
            </div>
        </section>
        <section style="position: relative">
            <h3 style="position: absolute; color: white; font-size: 33px; line-height: 45px; width: 100%; top:140px; left: 50%;
            transform: translate(-50%, -50%); text-align: center;">
                REŠITE SE ZNOJENJA I PRIDRUŽITE SE HILJADAMA ZADOVOLJNIH KUPACA
            </h3>
            <img src="{{ asset('/') }}naturapharmFiles/sweatabsorption/xtov.jpg.pagespeed.ic.gyrq_IzFZ8.jpg">
        </section>
        <section class=main>
            <h2 class=venzel>Ne nasedajte na kopije!</h2>
            <p>Original možete kupiti samo preko našeg sajta. Na tržištu postoje razne kopije, ali se ograđujemo
                od svake povezanosti sa njima.</p>
            <img style="margin: auto; display: block;"
                 src="{{ asset('/') }}naturapharmFiles/sweatabsorption/xlogo.jpg.pagespeed.ic.P1bTZIYtO8.jpg"
                 alt="Logo On Off" >
        </section>
        <h2 class=venzel>Dostava i plaćanje</h2>
        <section class="dostavka separation">
            <ul class=dostavka_inner>
                <li>
                    <div class=v-middle>
                        <h3>PORUČIVANJE</h3>
                        <p>Ostavite podatke za dostavu na našem sajtu</p>
                    </div>
                </li>
                <li>
                    <div class=v-middle>
                        <h3>POTVRDA PORUDŽBINE</h3>
                        <p>Kontaktiraćemo vas da potvrdimo porudžbinu</p>
                    </div>
                </li>
                <li>
                    <div class=v-middle>
                        <h3>ISPORUKA</h3>
                        <p>Šaljemo brzom poštom u roku od 1-2 radna dana</p>
                    </div>
                </li>
                <li>
                    <div class=v-middle>
                        <h3>GARANCIJA</h3>
                        <p>Ukoliko ne budete zadovoljni proizvodom kontaktirajte nas i vratićemo vam novac.</p>
                    </div>
                </li>
            </ul>
        </section>
    </div>
    <div class="header footer separation">
        <section class=header_offer></section>
        <section class=header_price>
            <div class=price>
                <div class=old>
                    Redovna cena:
                    <span>
                     <b class=price_land_s4>
                        {{ $prices[1]['originalPrice'] }}
                     </b>
                     <b class=price_land_curr>
                        {{ $prices[1]['currency'] }}
                     </b>
                  </span>
                </div>
                <div class=sale>
                    Akcija
                    <span>-<b class=price_land_discount>40</b>%</span>
                    Popusta
                </div>
                <div class=new>
                    Cena na akciji:
                    <span>
                     <b class=price_land_s1>
                        {{ $prices[1]['amount'] }}
                     </b>
                     <b class=price_land_curr>
                        {{ $prices[1]['currency'] }}
                     </b>
                  </span>
                </div>
            </div>
            <img style="margin-top: -45px;
                 margin-bottom: 30px;" width="100%"
                 src="{{ asset('/') }}naturapharmFiles/sweatabsorption/xedgii_bg_prod.png.pagespeed.ic.rNU4xN-c_o.png"
                 alt="">
            <div class=form-inner id=order_form>
                <div class="timer_block clearfix">
                    <form action="{{$orderRoute}}" method="post">
                        {{ csrf_field() }}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <input type="text" placeholder="Ime i prezime" id="name" name="name" required>
                        <input type="tel" name="phone" id="phone" placeholder="Telefon" required>
                        <input type="text" placeholder="Adresa" id="shipping_address" name="shipping_address" required>
                        <input type="text" placeholder="Grad" id="shipping_city" name="shipping_city" required>
                        <button type=submit data-ordersubmit>Poručite sada</button>
                    </form>
                    <p class=products_count>Na akciji ostalo još <span>18</span> komada</p>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="{{ asset('/') }}purplerelaxFiles/buttocksup/slick.min.js%2bscripts.js.pagespeed.jc.xx6G3nDJga.js"></script>
<script>eval(mod_pagespeed_s1mKdTeuWx);</script>
<script>eval(mod_pagespeed_MDncI5HA2W);</script>
@include('components.pixel_footer')
</body>
</html>
