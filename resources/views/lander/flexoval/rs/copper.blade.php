<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <link rel="shortcut icon" href="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('/') }}flexovalFiles/copper/normalize.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexovalFiles/copper/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexovalFiles/copper/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexovalFiles/copper/index.css">
</head>
<body>
@include('components.display_errors')
<section class="main" id="header_main">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                {{--<div class="logo"><img src="{{ asset('/') }}flexovalFiles/copper/logo.png"></div>--}}
                <div class="logo"><img src="{{ asset('/') }}flexovalFiles/shared_files/flexoval_logo.png"></div>
                <div class="section-title">Rad i sportske aktivnosti bez bolova i uganuća!</div>
                <div class="main__items">
                    <ul class="main__list">
                        <li class="main__list_white"><img src="{{ asset('/') }}flexovalFiles/copper/list.png"><span>Pruža podršku zglobovima</span></li>
                        <li><img src="{{ asset('/') }}flexovalFiles/copper/list.png"><span>Smanjuje bolove</span></li>
                        <li class="main__list_white"><img src="{{ asset('/') }}flexovalFiles/copper/list.png"><span>Sprečava povrede</span></li>
                        <li><img src="{{ asset('/') }}flexovalFiles/copper/list.png"><span>Pospešuje cirkulaciju</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-1 col-lg-2"></div>
            <div class="col-sm-6 col-md-5 col-lg-4">
                <div class="forma">
                    <div class="forma__top">
                        <div class="price__text">SAMO DANAS!</div>
                        <div class="prices">
                            Flexoval 2.0<br> ZA SAMO
                            <div class="price__new">
                              <span class="new_price_val">
                                 {{ $prices[1]['amount'] }}
                              </span>
                                <span class="new_price_cur">
                                 RSD
                              </span>
                            </div>
                        </div>
                    </div>
                    <div class="timer">
                        <div class="timer__text">UNESITE PODATKE ZA DOSTAVU</div>
                    </div>
                    <br>
                    <form class="form" action="{{$orderRoute}}" method="POST">
                        {{csrf_field()}}
                        @include('lander.naturapharm.components.form_hidden_fields')
                        <div class="form__list">
                            <input placeholder="Ime i prezime" type="text" name="name" required>
                            <input placeholder="Telefon" type="tel" name="phone" required>
                            <input placeholder="Adresa" type="text" name="shipping_address" required>
                            <input placeholder="Grad" type="text" name="shipping_city" required>
                            @foreach($prices as $singlePrice)
                                <div style="margin-top: 10px; margin-left: 10px;">
                                    <input type="radio" name="quantity" class="quantity" value="{{ $singlePrice['quantity'] }}" id="productLabel{{ $singlePrice['quantity'] }}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                           @if($singlePrice['is_default']) checked @endif
                                           @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                    <label for="productLabel{{$singlePrice['quantity']}}">
                                        {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                                    </label>
                                </div>
                            @endforeach
                            <div class="freeShippingDiv">* BESPLATNA DOSTAVA</div>
                            <button class="zak__btn" type="submit">Poručite sada</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="znakomo">
    <div class="container">
        <div class="section-title">Ovo nam je svima poznato</div>
        <div class="row">
            <div class="col-sm-3">
                <div class="znakomo__item">
                    <img src="{{ asset('/') }}flexovalFiles/copper/znakomo1.jpg">
                    <p>Bol u kolenima i laktovima</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="znakomo__item">
                    <img src="{{ asset('/') }}flexovalFiles/copper/znakomo2.jpg">
                    <p>Stalno napeti mišići</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="znakomo__item">
                    <img src="{{ asset('/') }}flexovalFiles/copper/znakomo3.jpg">
                    <p>Grčevi ruku i stopala</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="znakomo__item">
                    <img src="{{ asset('/') }}flexovalFiles/copper/znakomo4.jpg">
                    <p>Zglobovi krckaju ili škljocaju</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="rabota">
    <img class="hidden-xs trava" src="{{ asset('/') }}flexovalFiles/copper/rabota.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-sm-12 col-lg-9">
                <div class="rabota__wrapper">
                    <div class="row">
                        <div class="col-sm-6 col-lg-7">
                            <div class="section-title">Fizički poslovi od sada bez povreda</div>
                            <p>Svakodnevno smo izloženi potrebi za raznim fizičkim poslovima. Mi koji imamo osetljivije zglobove vrlo često smo trpimo bol i povrede,
                                a kada nema toga strepimo da se ne desi. Sada će sa ovim <span>steznikom</span> sve biti mnogo lakše.</p>
                        </div>
                        <div class="col-sm-6 col-lg-5"><img class="hidden-xs rabota__img" src="{{ asset('/') }}flexovalFiles/copper/rabota__img.png"></div>
                    </div>
                    <img class="visible-xs rabota__img" src="{{ asset('/') }}flexovalFiles/copper/rabota__img_mob.png">
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<section class="sad">
    <div class="container">
        <div class="section-title">Koje probleme mogu da uzrokuju zglobovi?</div>
        <div class="row">
            <div class="col-lg-11">
                <div class="sad__item">
                    <img class="sad1" src="{{ asset('/') }}flexovalFiles/copper/sad1.png">
                    <p>Naprezanje vrata usled naprezanja lakta i kolena</p>
                </div>
                <div class="sad__item">
                    <img class="sad2" src="{{ asset('/') }}flexovalFiles/copper/sad2.png">
                    <p>Dodatno opterećenje na donjem delu leđa</p>
                </div>
                <div class="sad__item">
                    <img class="sad3" src="{{ asset('/') }}flexovalFiles/copper/sad3.png">
                    <p>Usled bolova u laktovima smanjuje se mogućnost kvalitetnog rada i vežbanja</p>
                </div>
                <div class="sad__item">
                    <img class="sad4" src="{{ asset('/') }}flexovalFiles/copper/sad4.png">
                    <p>Stalno opterećenje zglobova kolena može da dovede do komplikacija</p>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<section class="how">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-sm-6">
                <div class="section-title">Kako funkcioniše zaštita zglobova <span>Flexoval 2.0</span> steznikom?</div>
                <div class="how__item">
                    <p>Steznik ne pritiska zglobove ruku ili nogu zahvaljujući elastičnim ivicama</p>
                    <img class="how1" src="{{ asset('/') }}flexovalFiles/copper/how1.png">
                </div>
                <div class="how__item">
                    <p>Pojačana fiksacija zgloba zahvaljujući ergonomskom dizajnu smanjuje pritisak na mišiće</p>
                    <img class="how2" src="{{ asset('/') }}flexovalFiles/copper/how2.png">
                </div>
                <div class="how__item">
                    <p>Jedinstvena tehnlogija proizvodnje tkanine sa isprepletanim bakarnim nitima omogućava čvrsto prijanjanje na nogu ili ruku, zagrevajući zglobove</p>
                    <img class="how3" src="{{ asset('/') }}flexovalFiles/copper/how3.png">
                </div>
            </div>
            <div class="col-sm-5"></div>
        </div>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="how__wrapper">
                    <p><span>Flexoval 2.0</span> je jedinstveno dostignuće u oblasti steznika za zglobove. Tkanina je ojačana bakarnim nitima za podršku zglobova i mišića i ima efekat zagrebanja
                        koji smanjuje bol i upalu.</p>
                </div>
            </div>
            <div class="col-lg01"></div>
        </div>
    </div>
</section>
<section class="job">
    <div class="container">
        <div class="section-title">
            Fizička aktivnost sa zaštitom zglobova
        </div>
        <div class="job__wrapper">
            <div class="row">
                <div class="col-sm-8">
                    <img class="ded visible-xs" src="{{ asset('/') }}flexovalFiles/copper/ded_mob.jpg">
                    <img class="ded hidden-xs" src="{{ asset('/') }}flexovalFiles/copper/ded.jpg">
                </div>
                <div class="col-sm-4">
                    <div class="job__items">
                        <div class="job__item job__item1">
                            <img class="hidden-xs" src="{{ asset('/') }}flexovalFiles/copper/job1.png">
                            <p>Lakoća u kolenima bez bolova i grčeva. Podrška zgloba smanjuje rizik od dislokacije</p>
                        </div>
                        <div class="job__item job__item2">
                            <img class="hidden-xs" src="{{ asset('/') }}flexovalFiles/copper/job2.png">
                            <p>Pravilan protok krvi smanjuje rizik od bolesti zglobova</p>
                        </div>
                        <a class="hidden-xs zak__btn my_btn" href="#form">
                            Poručite za
                            <span class="price__new">
                              <span
                                      class="new_price_val">
                                 {{ $prices[1]['amount'] }}
                              </span>
                              <span class="new_price_cur">
                                 RSD
                              </span>
                           </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="expert">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-md-6">
                <div class="section-title">Mišljenje struke</div>
                <div class="expert__wrapper">
                    <div class="expert__text">
                        <img class="visible-xs" src="{{ asset('/') }}flexovalFiles/copper/expert_mob.jpg">
                        <p>Zaštita sa <span>Flexoval 2.0</span> steznikom specijalno je kreirana za pravilan položaj zglobova tokom bilo koje fizičke aktivnosti.</p>
                        <p>Problem većine ljudi, posebno starijih, je to što ne ne mogu da rade svoj posao i samim tim ne dozvoljavaju zglobovima da se kreću.</p>
                        <p><span>Flexoval 2.0</span> steznik preuzima glavnu ulogu bezbedno držeći zglobove u ispravnom položaju, a fizički poslovi mogu da se obavljaju nesmetano.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="reviews">
    <div class="container">
        <div class="section-title">Utisci naših kupaca</div>
        <div class="row hidden-xs">
            <div class="col-sm-4">
                <div class="reviews__item">
                    <img src="{{ asset('/') }}flexovalFiles/copper/rev1.png"><span>Mirjana Petrović, 52 godine</span>
                    <p>Dok sam sadila sadnice, mislila sam da ću ostati bez ruku i nogu. Imala sam jake bolove i plašila sam se da više neću moći ustati.
                        Kćerka mi je na poklon donela nekoliko ovih steznika i odmah sam ih stavila. Prvo mi je postalo toplo u zglobovima, a kada sam par puta čučnula osetila sam
                        da imam znatno manji pritisak u kolenima. Počela sam da ga nosim i na rukama. Sada u baštu idem sa punom opremom steznika, a zglobovi me ne bole.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="reviews__item">
                    <img src="{{ asset('/') }}flexovalFiles/copper/rev2.png"><span>Igor Đurović, 55 godina</span>
                    <p>Obožavam mali fudbal ali u poslednjih par godina mi je jako teško išlo. Često sam imao povrede zglobova, išao sam kod kiropraktičara, pokušavao sa raznim kremama,
                        ali nove povrede su se nizale i nizale. Sin mi je kupio ovaj steznik, ja u početku nisam verovato da to ima efekta ali sam odlučio da probam.
                        Konačno sam uspeo da igram mali fudbal 60 minuta bez povrede. Odličan je proizvod i toplo ga preporučujem svakome.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="reviews__item">
                    <img src="{{ asset('/') }}flexovalFiles/copper/rev3.png"><span>Olga Tmušić, 35 godina</span>
                    <p>Rekreativno trčim skoro svako jutro i to me zaista ispunjava. Moram da budem veoma oprezna jer moje koleno ima sklonost da "iskoči" iz ležišta i onda oporavak traje
                        mesecima. Bilo mi je žao da se odreknem trčanja i počela sam da tražim adekvatno rešenje. Nakon nekoliko steznika koji nisu imali nikakvog efekta, preko
                        interneta sam poručila Flexoval 2.0 steznik. Gle čuda, trčim kao antilopa bez ikakvih provreda i straha da će nešto poći po zlu.</p>
                </div>
            </div>
        </div>
        <div class="owl-carousel visible-xs">
            <div class="reviews__item">
                <img src="{{ asset('/') }}flexovalFiles/copper/rev1.png"><span>Mirjana Petrović, 52 godine</span>
                <p>Dok sam sadila sadnice, mislila sam da ću ostati bez ruku i nogu. Imala sam jake bolove i plašila sam se da više neću moći ustati.
                    Kćerka mi je na poklon donela nekoliko ovih steznika i odmah sam ih stavila. Prvo mi je postalo toplo u zglobovima, a kada sam par puta čučnula osetila sam
                    da imam znatno manji pritisak u kolenima. Počela sam da ga nosim i na rukama. Sada u baštu idem sa punom opremom steznika, a zglobovi me ne bole.</p>
            </div>
            <div class="reviews__item">
                <img src="{{ asset('/') }}flexovalFiles/copper/rev2.png"><span>Igor Đurović, 55 godina</span>
                <p>Obožavam mali fudbal ali u poslednjih par godina mi je jako teško išlo. Često sam imao povrede zglobova, išao sam kod kiropraktičara, pokušavao sa raznim kremama,
                    ali nove povrede su se nizale i nizale. Sin mi je kupio ovaj steznik, ja u početku nisam verovato da to ima efekta ali sam odlučio da probam.
                    Konačno sam uspeo da igram mali fudbal 60 minuta bez povrede. Odličan je proizvod i toplo ga preporučujem svakome.</p>
            </div>
            <div class="reviews__item">
                <img src="{{ asset('/') }}flexovalFiles/copper/rev3.png"><span>Olga Tmušić, 35 godina</span>
                <p>Rekreativno trčim skoro svako jutro i to me zaista ispunjava. Moram da budem veoma oprezna jer moje koleno ima sklonost da "iskoči" iz ležišta i onda oporavak traje
                    mesecima. Bilo mi je žao da se odreknem trčanja i počela sam da tražim adekvatno rešenje. Nakon nekoliko steznika koji nisu imali nikakvog efekta, preko
                    interneta sam poručila Flexoval 2.0 steznik. Gle čuda, trčim kao antilopa bez ikakvih provreda i straha da će nešto poći po zlu.</p>
            </div>
        </div>
    </div>
</section>
<div id="footer">
    <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    {{--<div class="logo"><img src="{{ asset('/') }}flexovalFiles/copper/logo.png"></div>--}}
                    <div class="logo"><img src="{{ asset('/') }}flexovalFiles/shared_files/flexoval_logo.png"></div>
                    <div class="section-title">Rad i sportske aktivnosti bez bolova i uganuća!</div>
                    <div class="main__items">
                        <ul class="main__list">
                            <li class="main__list_white"><img src="{{ asset('/') }}flexovalFiles/copper/list.png"><span>Pruža podršku zglobovima</span></li>
                            <li><img src="{{ asset('/') }}flexovalFiles/copper/list.png"><span>Smanjuje bolove</span></li>
                            <li class="main__list_white"><img src="{{ asset('/') }}flexovalFiles/copper/list.png"><span>Sprečava povrede</span></li>
                            <li><img src="{{ asset('/') }}flexovalFiles/copper/list.png"><span>Pospešuje cirkulaciju</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1 col-lg-2"></div>
                <div class="col-sm-6 col-md-5 col-lg-4">
                    <div class="forma">
                        <div class="forma__top">
                            <div class="price__text">SAMO DANAS!</div>
                            <div class="prices">
                                Flexoval 2.0<br> ZA SAMO
                                <div class="price__new">
                              <span class="new_price_val">
                                 {{ $prices[1]['amount'] }}
                              </span>
                                    <span class="new_price_cur">
                                 RSD
                              </span>
                                </div>
                            </div>
                        </div>
                        <div class="timer">
                            <div class="timer__text">UNESITE PODATKE ZA DOSTAVU</div>
                        </div>
                        <br>
                        <form class="form" id="form" action="{{$orderRoute}}" method="POST">
                            {{csrf_field()}}
                            @include('lander.naturapharm.components.form_hidden_fields')
                            <div class="form__list">
                                <input placeholder="Ime i prezime" type="text" name="name" required>
                                <input placeholder="Telefon" type="tel" name="phone" required>
                                <input placeholder="Adresa" type="text" name="shipping_address" required>
                                <input placeholder="Grad" type="text" name="shipping_city" required>
                                @foreach($prices as $singlePrice)
                                    <div style="margin-top: 10px; margin-left: 10px;">
                                        <input type="radio" name="quantity" class="quantity" value="{{ $singlePrice['quantity'] }}" id="product1Label{{ $singlePrice['quantity'] }}" placeholder="{{ $singlePrice['is_free_shipping'] }}"
                                               @if($singlePrice['is_default']) checked @endif
                                               @if(old('quantity') == $singlePrice['quantity']) checked @endif >
                                        <label for="product1Label{{$singlePrice['quantity']}}">
                                            {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                                        </label>
                                    </div>
                                @endforeach
                                <div class="freeShippingDiv">* BESPLATNA DOSTAVA</div>
                                <button class="zak__btn" type="submit">Poručite sada</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="{{ asset('/') }}flexovalFiles/copper/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.my_btn').click(function () {
            var t = $(this).attr("href"),
                e = $(t).offset().top;
            return jQuery("html:not(:animated),body:not(:animated)").animate({ scrollTop: e }, 1e3), !1;
        });

        $(".owl-carousel").owlCarousel({ items: 1, loop: !0, nav: !0 }), $(".owl-prev").empty(), $(".owl-next").empty();
    });
</script>
<style>
    @media (max-width: 767px){
        section {
            background-position: 56%;
        }
        .main {
            /*height: 1260px;*/
            background-image: url({{ asset('/') }}flexovalFiles/copper/bg-m2.jpg);
        }
        #header_main {
            background-color: #484445;
        }
        #footer .main {
            height: 1260px;
            background-color: none;
        }
    }
    .freeShippingDiv {
        color: #d31f07;
        text-align: center;
        margin-bottom: 0;
        display: none;
        font-weight: bold;
        margin-top: 20px;
    }
    input[type="radio"] {
        width: 15px !important;
        height: 15px !important;
        cursor: pointer;
        display: inline;
    }
    label {
        height: 15px !important;
        cursor: pointer;
        font-size: 16px;
        margin-left: 3px;
        font-weight: 600;
        font-family: Gilroy, Arial, system-ui, sans-serif;
        display: inline;
    }
</style>
<script>
    $('.quantity').click(function () {
        let fsh = $(this).attr('placeholder');
        if(parseInt(fsh) === 1) {
            $(this).closest('.form').find('.freeShippingDiv').slideDown();
        } else {
            $(this).closest('.form').find('.freeShippingDiv').slideUp();        }
    })
</script>
@include('components.pixel_footer')
</body>
</html>