<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
    <meta name=viewport content="width=480px">
    <link rel="icon" type="image/png" href="{{ asset('/') }}purplerelaxFiles/buttocksup/favicon.png"/>
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
        .price-v2 {
            line-height: 1.5rem;
        }
        .price-v2 div span {
            font-size: 30px !important;
            margin-top: 10px;
        }
        .freeShippingHolder {
            text-align: center;
            color: #ff76ae;
            font-weight: 500;
            margin-bottom: 10px;
        }
    </style>
    <link rel=stylesheet href="{{ asset('/') }}purplerelaxFiles/buttocksup/style.css">
</head>
<body class=lang-it>
<div class=wrap>
    @include('components.display_errors')
    <div class="header-v2 separation">
        <section class=header_offer>
            <p>Popust<br> -<b class=price_land_discount>40</b>% <br> </p>
        </section>
        <h1 class=venzel>Savršena zadnjica brzo i lako? <br> DA, MOGUĆE JE! <span>Predstavljamo vam Buttocks Up</span>
        </h1>
        <section class=ul_topper_all>
            <ul class=ul_topper>
                <li>Oblikuje zadnjicu i podiže je</li>
                <li>Daje vitku figuru i vizuelni efekat dužih nogu</li>
            </ul>
        </section>
        <section class=header_price>
            <div class=price-v2>
                <div class=old>
                    Redovna cena za 1 pakovanje:
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
                    Cena na akciji za 1 pakovanje:
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
                 src="{{ asset('/') }}purplerelaxFiles/buttocksup/xedgii_bg_prod.png.pagespeed.ic.rNU4xN-c_o.png"
                 alt="" >
            <a href="#order_form" class=button-m>Poručite sada</a>
            <p class=products_count>Na akciji ostalo još <span>18</span> komada</p>
        </section>
    </div>
    <section class="reviews separation">
        <div class=reviews_slider>
            <div>
                <img
                    src="{{ asset('/') }}purplerelaxFiles/buttocksup/xprod1.jpg.pagespeed.ic.hxQS4xWNRr.jpg"
                    alt="ButtocksUp">
            </div>
            <div>
                <img
                    src="{{ asset('/') }}purplerelaxFiles/buttocksup/xprod2.jpg.pagespeed.ic.OlFY63_IOa.jpg"
                    alt="ButtocksUp">
            </div>
            <div>
                <img
                    src="{{ asset('/') }}purplerelaxFiles/buttocksup/xprod3.jpg.pagespeed.ic.ypFI8YnAHO.jpg"
                    alt="ButtocksUp">
            </div>
            <div>
                <img
                    src="{{ asset('/') }}purplerelaxFiles/buttocksup/xprod4.jpg.pagespeed.ic.dXs4vqhkI8.jpg"
                    alt="ButtocksUp">
            </div>
            <div>
                <img
                    src="{{ asset('/') }}purplerelaxFiles/buttocksup/xprod5.jpg.pagespeed.ic.8wThyovo3P.jpg"
                    alt="ButtocksUp">
            </div>
            <div>
                <img
                    src="{{ asset('/') }}purplerelaxFiles/buttocksup/xprod6.jpg.pagespeed.ic.bH6IQy31L9.jpg"
                    alt="ButtocksUp">
            </div>
        </div>
    </section>
    <div class=main>
        <h2 class=venzel>Skinite masne naslage sa zadnjice i podignite je uz ovaj revolucionarni proizvod!</h2>
        <section class=main>
            <p>Buttocks Up flasteri su napravljeni od prirodnih sastojaka koji kada se nalepe na zadnjicu deluju tako da pojačavaju cirkulaciju i metabolizam,
                tope masne naslage, zatežu kožu, prodiru duboko u mišiće i oblikuju ih. Nikada nije bilo lakše doći do privlačne i izvajane zadnjice.</p>
            <img style="margin: auto; display: block;"
                 src="{{ asset('/') }}purplerelaxFiles/buttocksup/xinfrared.jpg.pagespeed.ic.-d9tHDjQdS.jpg"
                 alt="ButtocksUp">
        </section>
        <section class="main_preim_tovara-v2 small_padding">
            <h2 class=venzel>
                <span style="color:#ff76ae">UŽIVAJ U SVOM ZGODNOM TELU</span>
            </h2>
            <ul>
                <li>
                    <img src="{{ asset('/') }}purplerelaxFiles/buttocksup/ximg1.jpg.pagespeed.ic.Bcpizbalvh.jpg"
                         alt="ButtocksUp" >
                    <p>Zadnjica se oblikuje bez mukotrpnog treninga</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}purplerelaxFiles/buttocksup/img2.jpg"
                         alt="ButtocksUp" >
                    <p>Inovativna tehnologija</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}purplerelaxFiles/buttocksup/ximg3.jpg.pagespeed.ic.dxPvzwzBWA.jpg"
                         alt="ButtocksUp" >
                    <p>Prvi rezultati već nakon 2 nedelje</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}purplerelaxFiles/buttocksup/img4.jpg"
                         alt="ButtocksUp" >
                    <p>Na hiljade zadovoljnih kupaca</p>
                </li>
            </ul>
            <a href="#order_form" class=button-m>Poručite sada</a>
        </section>
        <h2 class=venzel>UTISCI NAŠIH KUPACA</h2>
        <section class="reviews separation">
            <div class=reviews_slider>
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/buttocksup/xrev1.jpg.pagespeed.ic.Y0h0iq4df-.jpg"
                         alt="ButtocksUp" >
                    <div class="name_rev color3">
                        <h3 class=five>EMA, 27 GODINA</h3>
                    </div>
                    <p class=justify>Od sveg srca preporučujem ovaj proizvod. Počeo je da deluje odmah, prvi efekat sam videla već nakon 10 dana.
                        Zadnjica mi je elastična i utegnuta. Nikada neću prestati da koristim ovo!</p>
                </div>
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/buttocksup/xrev2.jpg.pagespeed.ic.i9K9FAh9Qq.jpg"
                         alt="ButtocksUp" >
                    <div class="name_rev color3">
                        <h3 class=four>ANDREA, 30 GODINA</h3>
                    </div>
                    <p class=justify>Posle mesec dana korišćenja Buttocks Up flastera, rezultati su neverovatno dobri! Dobila sam zadnjicu o kakvoj sam oduvek sanjala!
                        Toplo preporučujem svim ženama od 18 do 68 godina. :)</p>
                </div>
                <div>
                    <img src="{{ asset('/') }}purplerelaxFiles/buttocksup/xrev3.jpg.pagespeed.ic.39GFgUcJpb.jpg"
                         alt="ButtocksUp" >
                    <div class="name_rev color3">
                        <h3 class=four>MARIJANA, 33 GODINE</h3>
                    </div>
                    <p class=justify>Zahvaljujući ovim flasterima zaista se osećam prelepo u svom telu. Moj suprug je poludio za mojom zadnjicom. Mislila sam da ovakav efekat nije moguć,
                        ali izgleda da je ovaj proizvod pravo čudo!</p>
                </div>
            </div>
        </section>
        <section style="position: relative">
            <h3 style="position: absolute; color: white; font-size: 33px; line-height: 45px; width: 100%; top:78px; left: 50%;
            transform: translate(-50%, -50%); text-align: center;">
                SAGOREVA MASTI ČAK I BEZ VEŽBANJA
            </h3>
            <img src="{{ asset('/') }}purplerelaxFiles/buttocksup/xtov.jpg.pagespeed.ic.gyrq_IzFZ8.jpg">
        </section>
        <section class=main>
            <h2 class=venzel>Garancija kvaliteta!</h2>
            <p>Ukoliko proizvod ne ispuni vaša očekivanja, budite slobodni da nas kontaktirate i vratićemo vam novac u roku od 14 dana!</p>
            <img style="margin: auto; display: block;"
                 src="{{ asset('/') }}purplerelaxFiles/buttocksup/xlogo.jpg.pagespeed.ic.P1bTZIYtO8.jpg"
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
                        <h3>EFEKAT</h3>
                        <p>Redovno koristite Buttocks Up flaster i brzo ćete dobiti savršenu zadnjicu</p>
                    </div>
                </li>
            </ul>
        </section>
    </div>
    <div class="header footer separation">
        <section class=header_offer></section>
        <section class=header_price>
{{--            <div class=price>--}}
{{--                <div class=old>--}}
{{--                    Redovna cena:--}}
{{--                    <span>--}}
{{--                     <b class=price_land_s4>--}}
{{--                        {{ $prices[1]['originalPrice'] }}--}}
{{--                     </b>--}}
{{--                     <b class=price_land_curr>--}}
{{--                        {{ $prices[1]['currency'] }}--}}
{{--                     </b>--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--                <div class=sale>--}}
{{--                    Akcija--}}
{{--                    <span>-<b class=price_land_discount>40</b>%</span>--}}
{{--                    Popusta--}}
{{--                </div>--}}
{{--                <div class=new>--}}
{{--                    Cena na akciji:--}}
{{--                    <span>--}}
{{--                     <b class=price_land_s1>--}}
{{--                        {{ $prices[1]['amount'] }}--}}
{{--                     </b>--}}
{{--                     <b class=price_land_curr>--}}
{{--                        {{ $prices[1]['currency'] }}--}}
{{--                     </b>--}}
{{--                  </span>--}}
{{--                </div>--}}
{{--            </div>--}}
            <img style="
                 margin-bottom: 30px;" width="100%"
                 src="{{ asset('/') }}purplerelaxFiles/buttocksup/xedgii_bg_prod.png.pagespeed.ic.rNU4xN-c_o.png"
                 alt="">
            <div class=form-inner id=order_form>
                @foreach($prices as $q => $singlePrice)
                    <div class="price-v2 price_holder" data-quantity="{{$q}}">
                        <div class=old>
                            Redovna cena za {{$q}}:
                            <span>
                             <b class=price_land_s4>
                                {{ $singlePrice['originalPrice'] }}
                             </b>
                             <b class=price_land_curr>
                                {{ $singlePrice['currency'] }}
                             </b>
                          </span>
                        </div>
                        <div class="new color2">
                            Cena na akciji za {{$q}}:
                            <span>
                             <b class=price_land_s1>
                                {{ $singlePrice['amount'] }}
                             </b>
                             <b class=price_land_curr>
                                {{ $singlePrice['currency'] }}
                             </b>
                          </span>
                        </div>
                    </div>
                @endforeach
                    <div class="freeShippingHolder">
                        + BESPLATNA DOSTAVA
                    </div>
                <div class="timer_block clearfix">
                    <form action="{{$orderRoute}}" method="post">
                        {{ csrf_field() }}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <input type="text" placeholder="Ime i prezime" id="name" name="name" required>
                        <input type="tel" name="phone" id="phone" placeholder="Telefon" required>
                        <input type="text" placeholder="Adresa" id="shipping_address" name="shipping_address" required>
                        <input type="text" placeholder="Grad" id="shipping_city" name="shipping_city" required>
                        <select name="quantity" id="quantity" class="quantity" required>
                            @foreach($prices as $singlePrice)
                                <option value="{{ $singlePrice['quantity'] }}"
                                        data-free-shipping="{{ $singlePrice['is_free_shipping'] ? 'true' : 'false' }}"
                                        @if($singlePrice['is_default']) selected @endif
                                        @if(old('quantity') == $singlePrice['quantity']) selected @endif
                                        @if($singlePrice['is_free_shipping']) style="font-weight: bold;" @endif
                                >
                                    &nbsp;{{ $singlePrice['quantity'] }} x {{$product->product_name}}
                                    ({{$singlePrice['amount']}} {{$singlePrice['currency']}})
                                </option>
                            @endforeach
                        </select>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('form').each(function() {
            let $form = $(this);
            let $quantitySelect = $form.find('.quantity');
            let $prices = $('.price_holder');
            let $freeShipping = $('.freeShippingHolder');
            let selectedQuantity = $quantitySelect.val();
            let selectedOption = $quantitySelect.find(':selected');

            if(typeof selectedQuantity !== "undefined") {
                $prices.hide();
                $prices.filter('[data-quantity="' + selectedQuantity + '"]').show();
            }

            selectedOption.data('free-shipping') ? $freeShipping.show() : $freeShipping.hide();

            $quantitySelect.on('change', function() {
                selectedQuantity = $(this).val();
                selectedOption = $(this).find(':selected');

                $prices.hide();
                $prices.filter('[data-quantity="' + selectedQuantity + '"]').show();

                selectedOption.data('free-shipping') ? $freeShipping.show() : $freeShipping.hide();
            });
        });
    });
</script>
@include('components.pixel_footer')
</body>
</html>
