<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&amp;subset=cyrillic-ext,latin-ext" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('/') }}naturapharmFiles/shoulderjoinpainrelief/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/shoulderjoinpainrelief/jquery.bxslider.css">
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/shoulderjoinpainrelief/style.css">
</head>
<body>
<div class="overflow">
    @include('components.display_errors')
    <header class="header">
        <div class="wrapper">
            <div class="logo">
                <picture>
                    <img src="{{ asset('/') }}naturapharmFiles/shoulderjoinpainrelief/logo.png">
                </picture>
            </div>
            <h4 class="header__title title">Zaustavlja bol u ramenima i zglobovima</h4>
            <p>Shoulder Join Pain Relief je efikasan proizvod protiv bolova u zglobovima!</p>
        </div>
    </header>
    <section class="sec2">
        <div class="wrapper">
            <div class="sec2__prod">
                <div class="sale">
                    <div> POPUST <span> 40% </span></div>
                </div>
            </div>
            <ul class="sec2__list">
                <li class="sec2__item">Ublažava bol</li>
                <li class="sec2__item">Pokreće proces regeneracije hrskavice</li>
                <li class="sec2__item">Uklanja hipertonus mišića</li>
                <li class="sec2__item">Bori se protiv otoka</li>
                <li class="sec2__item">Eliminiše upale</li>
            </ul>
            <div class="sec2__prices prices">
                <div class="prices__container">
                    <p><span>CENA NA POPUSTU</span></p>
                    <div class="prices__new prices__item al-cost">
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                    <div class="prices__old prices__item al-cost-promo">
                        {{ $prices[1]['originalPrice'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
                <button class="button button--orange pre_toform">PORUČITE SADA</button>
            </div>
        </div>
    </section>
    <section class="sec3">
        <div class="wrapper">
            <div class="sec3__text">
                <p><i>Shoulder Join Pain Relief</i> je proizvod koji može brzo eliminisati bol prouzrokovan artrozom i osteohondrozom.
                    Olakšava tegobe izazvane spazmom i upalom mišića. Usporava proces degeneracije tkiva i hrskavice, poboljšava
                    njihov metabolizam i podstiče regeneraciju zglobova.</p>
                <p>Pozitivan efekat se može videti već nakon nekoliko primena. Ako se redovno koristi, zaustavlja napredovanje tegoba vezanih za zglobove.</p>
                <button class="button button--purple pre_toform">Shoulder Join Pain Relief je napravljen isključivo od prirodnih sastojaka</button>
            </div>
        </div>
    </section>
    <section class="sec5">
        <div class="wrapper">Prednosti Shoulder Join Pain Relief kreme</div>
    </section>
    <section class="sec6">
        <div class="wrapper">
            <ul class="sec6__list">
                <li class="sec6__item">
                    <div class="sec6__item-img"></div>
                    <div class="sec6__item-title">ŠIROK SPEKTAR DELOVANJA</div>
                    <p>leči tegobe i bolove zglobova i kičme</p>
                </li>
                <li class="sec6__item">
                    <div class="sec6__item-img"></div>
                    <div class="sec6__item-title">NEMA NEŽELJENIH EFEKATA</div>
                    <p>potpuno je bezbedan za upotrebu</p>
                </li>
                <li class="sec6__item">
                    <div class="sec6__item-img"></div>
                    <div class="sec6__item-title">100% PRIRODAN SASTAV</div>
                    <p>sadrži aktivne komponente biljnih sastojaka</p>
                </li>
                <li class="sec6__item">
                    <div class="sec6__item-img"></div>
                    <div class="sec6__item-title">VISOKA EFIKASNOST</div>
                    <p>poboljšava zdravstveno stanje i smanjuje bol nakon prve primene</p>
                </li>
                <li class="sec6__item">
                    <div class="sec6__item-img"></div>
                    <div class="sec6__item-title">TESTIRANO OD STRANE STRUČNJAKA</div>
                    <p>Proizvod je sertifikovan i ispunjava sve standarde</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="sec7">
        <div class="wrapper">
            <div class="sec7__title">Kako koristiti Shoulder Join Pain Relief?</div>
            <ul class="sec7__list">
                <li class="sec7__item">
                    <div class="sec7__img"></div>
                    <p>Nanesite na suvu kožu i utrljajte dok se potpuno ne upije</p>
                </li>
                <li class="sec7__item">
                    <div class="sec7__img"></div>
                    <p>Koristite 2-3 puta dnevno</p>
                </li>
                <li class="sec7__item">
                    <div class="sec7__img"></div>
                    <p>Ne ispirati vodom tokom prvog sata primene</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="sec8">
        <div class="wrapper">
            <div class="sec8__block">Čuvajte se kopija ovog proizvoda!</div>
            <div class="sec8__title">Kako poručiti Shoulder Join Pain Relief?</div>
            <ul class="sec8__list">
                <li class="sec8__item">
                    <div class="sec8__item-img"></div>
                    <p>Ostavite podatke na našem sajtu</p>
                </li>
                <li class="sec8__item">
                    <div class="sec8__item-img"></div>
                    <p>Kontaktiraćemo vas da potvrdimo porudžbinu i šaljemo brzom poštom u roku od 1-2 radna dana</p>
                </li>
                <li class="sec8__item">
                    <div class="sec8__item-img"></div>
                    <p>Platite proizvod pouzećem kuriru brzom pošte</p>
                </li>
            </ul>
        </div>
    </section>
    <footer class="footer1">
        <div class="wrapper">
            <div class="footer__prod"></div>
            <div class="footer__right">
                <div class="sale sale--footer">
                    <div> POPUST <span> 40% </span></div>
                </div>
                <div class="prices prices--footer">
                    <p>BROJ PROIZVODA NA POPUSTU JE OGRANIČEN</p>
                    <div class="prices__new prices__item al-cost">
                        {{ $prices[1]['amount'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                    <div class="prices__old prices__item al-cost-promo">
                        {{ $prices[1]['originalPrice'] }}
                        {{ $prices[1]['currency'] }}
                    </div>
                </div>
                <form action="{{$orderRoute}}" class="al-form" method="post">
                    {{ csrf_field() }}
                    @include('lander.naturapharm.components.form_hidden_fields')
                    <div class="form__row">
                        <div class="label">Ime i prezime</div>
                        <div class="input-wrapper">
                            <input name="name" id="name" placeholder="Ime i prezime" type="text">
                            <label for="name"></label>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="label">Telefon</div>
                        <div class="input-wrapper">
                            <input name="phone" id="phone" placeholder="Telefon" type="tel">
                            <label for="phone"></label>
                        </div>
                    </div>
                    <button type="submit" class="button button--orange js_submit button__text">PORUČI SADA</button>
                </form>
            </div>
        </div>
    </footer>
    <section class="sec10"></section>
</div>
<script src="{{ asset('/') }}naturapharmFiles/shoulderjoinpainrelief/jquery.bxslider.min.js"></script>
<script src="{{ asset('/') }}naturapharmFiles/shoulderjoinpainrelief/common.js"></script>
@include('components.pixel_footer')
</body>
</html>
