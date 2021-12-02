<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href=""type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/uvlampa/main.css">
    <link href="http://fonts.googleapis.com/css?family=Alice|Russo+One&amp;display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Gotham Pro';
            src: url("{{ asset('/') }}fonts/GothamPro.eot");
            src: url("{{ asset('/') }}fonts/GothamPro.eot") format("embedded-opentype"), url("{{ asset('/') }}fonts/GothamPro.woff") format("woff"), url("{{ asset('/') }}fonts/GothamPro.ttf") format("truetype"), url("{{ asset('/') }}fonts/GothamPro.svg") format("svg");
            font-weight: normal;
            font-style: normal
        }
        @font-face {
            font-family: 'Gotham Pro Bold';
            src: url("{{ asset('/') }}fonts/GothamPro-Bold.eot");
            src: url("{{ asset('/') }}fonts/GothamPro-Bold.eot") format("embedded-opentype"), url("{{ asset('/') }}fonts/GothamPro-Bold.woff") format("woff"), url("{{ asset('/') }}fonts/GothamPro-Bold.ttf") format("truetype"), url("{{ asset('/') }}fonts/GothamPro-Bold.svg") format("svg");
            font-weight: bold;
            font-style: normal
        }
    </style>
</head>
<body>
@include('components.display_errors')
<section class="header">
    <div class="header__menu menu">
        <div class="container">
            <div class="menu__logo col-3 col-lg-4">
                <div class="logo__text">LAMPA ZA SUŠENJE NOKTIJU SUN X LED / UV</div>
            </div>
            <div class="menu__list-wrapper col-9 col-lg-8">
                <div class="menu__mobile hide-l"></div>
                <ul id="menu" class="menu__list hide-m hide-s">
                    <li><a href="#scroll-des2" class="menu__item">SPECIFIKACIJE</a></li>
                    <li class="hide-s hide-m">
                        <div class="menu__item--dot"></div>
                    </li>
                    <li><a href="#scroll-des3" class="menu__item">OPIS</a></li>
                    <li class="hide-s hide-m">
                        <div class="menu__item--dot"></div>
                    </li>
                    <li><a href="#scroll-des4" class="menu__item">DOSTAVA</a></li>
                    <li class="hide-s hide-m">
                        <div class="menu__item--dot"></div>
                    </li>
                    <li><a href="#scroll-des5" class="menu__item">RECENZIJE</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="header__preview preview container">
        <div class="preview__photo col-6">
            <img alt="" title="" src="{{ asset('/') }}purplerelaxFiles/uvlampa/sdd1.jpg">
        </div>
        <div class="preview__info info col-6">
            <div class="info__headline">SUN Х LED/UV</div>
            <h1 class="info__title">Lampa za sušenje noktiju</h1>
            <div class="info__price price">
                <div class="price__list">
                    <div class="price__wrong">
                        {{ $prices[1]['originalPrice'] }} RSD
                    </div>
                    <div class="price__new">
                        {{ $prices[1]['amount'] }} RSD
                    </div>
                </div>
                <div class="price__discount">-40%</div>
            </div>
            <a href="#scroll-des6" class="preview__button button" >Poručite sada</a>
        </div>
    </div>
</section>
<div class="clear"></div>
<section id="scroll-des1" class="triggers-wrapper">
    <div class="triggers container">
        <div class="trigger col-6">
            <div class="trigger__icon"><img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/icon1.png"></div>
            <div class="trigger__descr">MI BRINEMO O VAMA I NUDIMO SAMO KVALITETNE PROIZVODE</div>
        </div>
        <div class="trigger col-5">
            <div class="trigger__icon"><img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/icon2.png"></div>
            <div class="trigger__descr">CENE ISPOD TRŽIŠNIH ZBOG DIREKTNE NABAVKE OD PROIZVOĐAČA</div>
        </div>
        <div class="trigger col-6">
            <div class="trigger__icon"><img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/icon3.png"></div>
            <div class="trigger__descr">DO SADA NIJE BILO POVRATA ROBE I REKLAMACIJA</div>
        </div>
        <div class="trigger col-6">
            <div class="trigger__icon"><img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/icon4.png"></div>
            <div class="trigger__descr">ISPORUKA BILO GDE U SRBIJI U ROKU OD 1-2 RADNA DANA</div>
        </div>
    </div>
</section>
<div class="clear"></div>
<section id="scroll-des2" class="specs container">
    <h1 class="heading">SPECIFIKACIJE</h1>
    <div class="specs__gallery col-6">
        <div class="product-gallery owl-carousel">
            <div data-hash="photo-one" class="product-gallery__item">
                <img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/sdd2.jpg">
            </div>
        </div>
    </div>
    <div class="specs__param-list param-list col-6">
        <div class="container">
            <div class="param-list__row col-3">
                <div class="param-list__item">
                    <div class="param-list__name">SNAGA:</div>
                    <div class="param-list__value">54 W</div>
                </div>
                <div class="param-list__item">
                    <div class="param-list__name">BOJA:</div>
                    <div class="param-list__value">Bela</div>
                </div>
                <div class="param-list__item">
                    <div class="param-list__name">FREKVENCIJA:</div>
                    <div class="param-list__value">50-60 Hz</div>
                </div>
                <div class="param-list__item">
                    <div class="param-list__name">DIMENZIJE:</div>
                    <div class="param-list__value">(V*Š*D): 103mm x 230mm x 208mm</div>
                </div>
            </div>
            <div class="param-list__row col-3">
                <div class="param-list__item">
                    <div class="param-list__name">UVLAČIVO DNO:</div>
                    <div class="param-list__value">da</div>
                </div>
                <div class="param-list__item">
                    <div class="param-list__name">SENZOR POKRETA:</div>
                    <div class="param-list__value">da</div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clear"></div>
<section id="scroll-des3" class="benefits-wrapper">
    <h1 class="hero-title">OPIS</h1>
    <div class="hero-content">
        <div class="hero-image">
            <img src="{{ asset('/') }}purplerelaxFiles/uvlampa/tovar.png" alt="" class="hero-img">
        </div>
        <div class="hero-description">
            <p class="description">Nova generacija SUN X lampe sa tajmerom od 10,30,60 i 99 sekundi.
                Led tehnologija dvostrukog UV spektra opremljena je sa 36 visokokvalitetnih led sijalica i pogodna je za sušenje gel lakova i tvrdih gelova.
                Lampa je opremljena displejom, senzorima pokreta, ugrađenim tajmerom i sigurnosnim režimom.</p>
            <p class="description">UV/LED lampe su nova generacija sijalica kreiranih korišćenjem najnovije tehnologije LED dioda koje emituju ultraljubičasto svetlo.
                Glavne prednosti ovih lampi su njihova izdržljivost i sigurnost.</p>
        </div>
    </div>
    <div class="benefits__button"><a href="#scroll-des6" class="button" >Poručite sada</a></div>
</section>
<div class="clear"></div>
<section id="scroll-des4" class="steps container">
    <h1 class="heading heading--secondary">KAKO RADIMO</h1>
    <div class="work-content">
        <div class="work-form">
            <img src="{{ asset('/') }}purplerelaxFiles/uvlampa/form.png" alt="" class="work-img">
            <p class="descriptin-work">Ostavite svoje podatke na našem sajtu</p>
        </div>
        <div class="work-consult">
            <img src="{{ asset('/') }}purplerelaxFiles/uvlampa/consult.png" alt="" class="work-img">
            <p class="descriptin-work">Kontaktiraćemo vas da potvrdimo vašu porudžbinu</p>
        </div>
        <div class="work-delivery">
            <img src="{{ asset('/') }}purplerelaxFiles/uvlampa/box.png" alt="" class="work-img">
            <p class="descriptin-work">Paket šaljemo u roku od 1-2 radna dana</p>
        </div>
        <div class="work-payment">
            <img src="{{ asset('/') }}purplerelaxFiles/uvlampa/money.png" alt="" class="work-img">
            <p class="descriptin-work">Robu plaćate kuriru po prijemu pošiljke</p>
        </div>
    </div>
</section>
<div class="clear"></div>
<section id="scroll-des5" class="reviews-wrapper">
    <div class="reviews container">
        <div class="reviews__slider col-6">
            <div class="heading__icon heading__icon--reviews"></div>
            <h1 class="heading heading--white heading--primary heading--sm">UTISCI KUPACA</h1>
            <div class="slider-reviews owl-carousel">
                <div class="review">
                    <div class="review__photo"><img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/user.jpg"></div>
                    <div class="review__name">Ivana Krunić</div>
                    <div class="review__text">San svake devojke je da ima lampu za nokte kod kuće. Videla sam ovaj proizvod, nisam mogla da mu odolim i kupila sam ga.
                        Isporučeno mi je vrlo brzo i odmah sam je probala. Devojke poručite je, nećete se pokajati! :)</div>
                </div>
                <div class="review">
                    <div class="review__photo"><img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/user1.png"></div>
                    <div class="review__name">Elena Maksimović</div>
                    <div class="review__text">Izbegavala sam kozmetičke salone jer su veoma skupi. Poručila sam ovo čudo, i sada mi nokti nisu ništa lošiji nego što su bili kada sam ih radila u salonima! Toplo preporučujem.</div>
                </div>
                <div class="review">
                    <div class="review__photo"><img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/user2.png"></div>
                    <div class="review__name">Lidija Vučković</div>
                    <div class="review__text">Lampa je cool! :) Veoma je kvalitetna, odlično radi, a moji nokti su vrh! Za taj novac, može se reći da sam džaba prošla.</div>
                </div>
            </div>
        </div>
        <div class="reviews__photo col-6 hide-s"><img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/sddot1.png"></div>
    </div>
</section>
<div class="clear"></div>
<section class="buy container">
    <h2 class="heading__headline">SUN Х LED/UV</h2>
    <h1 class="heading heading--secondary heading--has-headline heading--extra">Lampa za sušenje noktiju</h1>
    <div class="buy__photo col-6"><img alt="UV Lampa" title="UV Lampa" src="{{ asset('/') }}purplerelaxFiles/uvlampa/sdd1.jpg"></div>
    <div class="buy__form form col-6">
        <div class="form__price price price--buynow">
            <div class="price__wrong">
                {{ $prices[1]['originalPrice'] }} RSD
            </div>
            <div class="price__discount">-40%</div>
            <div class="price__new">
                {{ $prices[1]['amount'] }} RSD
            </div>
        </div>
        {{--<div class="form__countdown countdown">--}}
            {{--<div class="countdown-descr">До конца акции осталось:</div>--}}
            {{--<div class="cd">--}}
                {{--<div id="cd__tiles" class="cd__tiles"></div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <form action="{{$orderRoute}}" method="post" class="form__inputs" id="scroll-des6">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input type="text" placeholder="Ime i prezime" title="Ime i prezime" required="" class="form__input" name="name"><br>
            <input id="tel" type="tel" placeholder="Telefon" title="Telefon" required="" class="form__input" name="phone"><br>
            <input type="text" placeholder="Adresa" title="Adresa" required="" class="form__input" name="shipping_address"><br>
            <input type="text" placeholder="Grad" title="Grad" required="" class="form__input" name="shipping_city">
            <div class="form__submit-wrapper">
                <input type="submit" value="Poručite sada" class="button form__submit">
            </div>
        </form>
    </div>
</section>
<div class="clear"></div>
<section class="footer-wrapper">
    <div class="footer container">
        <div class="footer__copy col-12" style="color: black;">
            <div class="copy"></div>
        </div>
    </div>
</section>
<script src="{{ asset('/')}}purplerelaxFiles/uvlampa/app.min.js"></script>
{{--<script src="https://lampasunx.xcartpro.com/r1/js/scroll.js"></script>--}}
@include('components.pixel_footer')
</body>
</html>