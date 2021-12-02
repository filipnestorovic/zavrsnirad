<!DOCTYPE html>
<html >
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/prowax2/main.css">
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
            <div class="menu__logo col-3">
                <div class="logo__text">Pro-Wax 100</div>
            </div>
            <div class="menu__list-wrapper col-9">
                <div class="menu__mobile hide-l"></div>
                <ul id="menu" class="menu__list hide-m hide-s">
                    <li><a href="#scroll-descr" class="menu__item">OPIS</a></li>
                    <li class="hide-s hide-m">
                        <div class="menu__item--dot"></div>
                    </li>
                    <li><a href="#scroll-specs" class="menu__item">SPECIFIKACIJA</a></li>
                    <li class="hide-s hide-m">
                        <div class="menu__item--dot"></div>
                    </li>
                    <li><a href="#scroll-benefits" class="menu__item">PREDNOSTI</a></li>
                    <li class="hide-s hide-m">
                        <div class="menu__item--dot"></div>
                    </li>
                    <li><a href="#scroll-reviews" class="menu__item">DOSTAVKA</a></li>
                    <li class="hide-s hide-m">
                        <div class="menu__item--dot"></div>
                    </li>
                    <li><a href="#scroll-buy" class="menu__item">RECENZIJE</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="header__preview preview container">
        <div class="preview__photo col-6"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd.jpeg"></div>
        <div class="preview__info info col-6">
            <div class="info__headline">Grejač za vosak</div>
            <h1 class="info__title">Pro-Wax 100</h1>
            <div class="info__subline">za one koji cene praktične stvari</div>
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
            <a href="#scroll-buyer" class="preview__button button">Poručite sada</a>
        </div>
    </div>
</section>
<div class="clear"></div>
<section id="scroll-descr" class="triggers-wrapper">
    <div class="triggers container">
        <div class="trigger col-6">
            <div class="trigger__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon1.png"></div>
            <div class="trigger__descr">MI BRINEMO O VAMA I NUDIMO SAMO KVALITETNE PROIZVODE</div>
        </div>
        <div class="trigger col-5">
            <div class="trigger__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon2.png"></div>
            <div class="trigger__descr">CENE ISPOD TRŽIŠNIH ZBOG DIREKTNE NABAVKE OD PROIZVOĐAČA</div>
        </div>
        <div class="trigger col-6">
            <div class="trigger__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon3.png"></div>
            <div class="trigger__descr">DO SADA NIJE BILO POVRATA ROBE I REKLAMACIJA</div>
        </div>
        <div class="trigger col-6">
            <div class="trigger__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon4.png"></div>
            <div class="trigger__descr">ISPORUKA BILO GDE U SRBIJI U ROKU OD 1-2 RADNA DANA</div>
        </div>
    </div>
</section>
<div class="clear"></div>
<section id="scroll-specs" class="specs container">
    <h1 class="heading">Pro-Wax 100</h1>
    <div class="param-list__item">
        <div class="param-list__name">Grejač za vosak Pro - Wax 100</div>
        <div class="param-list__value">Grejač za vosak Pro - Wax 100 topi vosak u limenkama ili u čaši. Mala zapremina limenke (450ml) omogućava da se uspešno koristi ne samo u salonima
            nego i kod kuće jer može da se radi sa malo voska u opticaju. Pro - Wax 100 grejač voska poseduje termostat za izbor temperature topljenja od 45 do 105 stepeni.
            Uređaj može da radi konstantno, održavajući ugodnu temperaturu parafina ili voska tokom čitave procedure.</div>
    </div>
    <div class="specs__gallery col-6">
        <div class="product-gallery owl-carousel">
            <div data-hash="photo-one" class="product-gallery__item"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd-1.jpeg"></div>
            <div data-hash="photo-two" class="product-gallery__item"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd-2.jpeg"></div>
            <div data-hash="photo-three" class="product-gallery__item"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd-3.jpeg"></div>
            <div data-hash="photo-four" class="product-gallery__item"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd-4.jpeg"></div>
        </div>
        <div class="product-gallery__image-nav">
            <div class="image-nav__item"><a href="#photo-one" class="image-nav__link"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd-11.jpeg" class="image-nav__img"></a></div>
            <div class="image-nav__item"><a href="#photo-two" class="image-nav__link"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd-22.jpeg" class="image-nav__img"></a></div>
            <div class="image-nav__item"><a href="#photo-three" class="image-nav__link"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd-33.jpeg" class="image-nav__img"></a></div>
            <div class="image-nav__item"><a href="#photo-four" class="image-nav__link"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd-44.jpeg" class="image-nav__img"></a></div>
        </div>
    </div>
    <div class="specs__param-list param-list col-6">
        <div class="container">
            <div class="param-list__row col-3">
                <div class="param-list__item">
                    <div class="param-list__name">SNAGA:</div>
                    <div class="param-list__value">100W</div>
                </div>
                <div class="param-list__item">
                    <div class="param-list__name">ZAPREMINA REZERVOARA:</div>
                    <div class="param-list__value">450ml</div>
                </div>
                <div class="param-list__item">
                    <div class="param-list__name">NAPON:</div>
                    <div class="param-list__value">110V/220V/240V</div>
                </div>
                <div class="param-list__item">
                    <div class="param-list__name">BOJA:</div>
                    <div class="param-list__value">bela</div>
                </div>
            </div>
            <div class="param-list__row col-3">
                <div class="param-list__item">
                    <div class="param-list__name">BROJ TEMPERATURNIH REŽIMA:</div>
                    <div class="param-list__value">3</div>
                </div>
                <div class="param-list__item">
                    <div class="param-list__name">DUŽINA KABLA ZA NAPAJANJE:</div>
                    <div class="param-list__value">1.5 M</div>
                </div>
                <div class="param-list__item">
                    <div class="param-list__name">TEŽINA:</div>
                    <div class="param-list__value">0,39 KG</div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clear"></div>
<section id="scroll-benefits" class="benefits-wrapper">
    <div class="benefits container">
        <h1 class="heading heading--primary heading--white">PREDNOSTI</h1>
        <div class="benefits__item col-6">
            <div class="benefits__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-guarantee.png"></div>
            <div class="benefits__descr">100% garancija kvaliteta proizvoda</div>
        </div>
        <div class="benefits__item col-6">
            <div class="benefits__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-postpay.png"></div>
            <div class="benefits__descr">Radimo bez avansa, plaćanje se vrši po prijemu robe poštom</div>
        </div>
        <div class="benefits__item col-6">
            <div class="benefits__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-shipping.png"></div>
            <div class="benefits__descr">Dostava bilo gde u Srbiji</div>
        </div>
        <div class="benefits__item col-6">
            <div class="benefits__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-delivery.png"></div>
            <div class="benefits__descr">Brza ispoiruka poružbine (1-2 radna dana)</div>
        </div>
        <div class="benefits__item col-6">
            <div class="benefits__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-discounts.png"></div>
            <div class="benefits__descr">Najniža cena je kod nas</div>
        </div>
        <div class="benefits__item col-6">
            <div class="benefits__icon"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-moneyback.png"></div>
            <div class="benefits__descr">Imate pravo na povrat novca ukoliko vam se proizvod ne svidi</div>
        </div>
        <div class="benefits__button"><a href="#scroll-buyer" class="button">Poručite sada</a></div>
    </div>
</section>
<div class="clear"></div>
<section id="scroll-reviews" class="steps container">
    <h1 class="heading heading--secondary">KAKO RADIMO</h1>
    <div class="steps-img__wrapper container hide-l">
        <div class="steps__item steps__item--one col-3"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-howto1.png"><br>Ostavite svoje podatke na našem sajtu</div>
        <div class="steps__item steps__item--two col-3"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-howto2.png"><br>Kontaktiraćemo vas da potvrdimo vašu porudžbinu</div>
        <div class="steps__item steps__item--three col-3"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-howto3.png"><br>Paket šaljemo u roku od 1-2 radna dana</div>
        <div class="steps__item steps__item--four col-3"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/icon-howto4.png"><br>Robu plaćate kuriru po prijemu pošiljke</div>
    </div>
    <div class="steps-img__wrapper steps-img__wrapper--l hide-s hide-m">
        <div class="steps__item steps__item--r steps__item--one">Ostavite svoje podatke na našem sajtu</div>
        <div class="steps__item steps__item--r steps__item--two">Kontaktiraćemo vas da potvrdimo vašu porudžbinu</div>
        <div class="steps__item steps__item--r steps__item--three">Paket šaljemo u roku od 1-2 radna dana</div>
        <div class="steps__item steps__item--r steps__item--four">Robu plaćate kuriru po prijemu pošiljke</div>
    </div>
</section>
<div class="clear"></div>
<section id="scroll-buy" class="reviews-wrapper">
    <div class="reviews container">
        <div class="reviews__slider col-6">
            <div class="heading__icon heading__icon--reviews"></div>
            <h1 class="heading heading--white heading--primary heading--sm">RECENZIJE KUPACA</h1>
            <div class="slider-reviews owl-carousel">
                <div class="review">
                    <div class="review__photo"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/user.jpeg"></div>
                    <div class="review__name">Ivana Krunić</div>
                    <div class="review__text">San svake devojke je da može da se depilira kod kuće. Videla sam ovaj proizvod, nisam mogla da mu odolim i kupila sam ga.
                        Isporučeno mi je vrlo brzo i odmah sam ga probala. Devojke poručite, nećete se pokajati! :)</div>
                </div>
                <div class="review">
                    <div class="review__photo"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/user1.png"></div>
                    <div class="review__name">Elena Maksimović</div>
                    <div class="review__text">Izbegavala sam kozmetičke salone jer su veoma skupi. Poručila sam ovo čudo i sada se depiliram bez problema. Nije ništa lošije nego u salonima! Toplo preporučujem.</div>
                </div>
                <div class="review">
                    <div class="review__photo"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/user2.png"></div>
                    <div class="review__name">Lidija Vučković</div>
                    <div class="review__text">Ova topilica voska je cool! :) Veoma je kvalitetna, odlično radi, a ja sam bez i jedne dlačice na telu! Za taj novac, može se reći da sam džaba prošla. </div>
                </div>
            </div>
        </div>
        <div class="reviews__photo col-6 hide-s"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd-otzyv.png"></div>
    </div>
</section>
<div class="clear"></div>
<section class="buy container">
    <h2 class="heading__headline">Grejač za vosak</h2>
    <h1 class="heading heading--secondary heading--has-headline heading--extra">Pro-Wax 100</h1>
    <div class="buy__photo col-6"><img alt="ProWax" title="ProWax" src="{{ asset('/') }}purplerelaxFiles/prowax2/sd.jpeg"></div>
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
        <form action="{{$orderRoute}}" method="post" class="form-controls" id="scroll-buyer">
            {{ csrf_field() }}
            @include('lander.naturapharm.components.form_hidden_fields')
            <input type="text" placeholder="Ime i prezime" title="Ime i prezime" required="" class="form-control" name="name"><br>
            <input id="tel" type="tel" placeholder="Telefon" title="Telefon" required="" class="form-control" name="phone"><br>
            <input type="text" placeholder="Adresa" title="Adresa" required="" class="form-control" name="shipping_address"><br>
            <input type="text" placeholder="Grad" title="Grad" required="" class="form-control" name="shipping_city">
            <div class="form__submit-wrapper">
                <input type="submit" value="Poručite sada" class="button form__submit">
            </div>
        </form>
    </div>
</section>
<div class="clear"></div>
<script src="{{ asset('/') }}purplerelaxFiles/prowax2/app.js"></script>
@include('components.pixel_footer')
</body>
</html>