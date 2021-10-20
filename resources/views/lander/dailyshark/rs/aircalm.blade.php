<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="Prečišćivač vazduha" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/aircalm/4.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/bootstrap.css" />
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/aircalm/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/owl.carousel.min.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/aircalm/owl.theme.default.css" />
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/aircalm/remodal.css" />
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/aircalm/remodal-default-theme.css" />
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/aircalm/app.css" />
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/aircalm/slick-theme.css" />
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/aircalm/slick.css" />
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/aircalm/magnific-popup.css" />
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/aircalm/jquery.validation.css" />
    <style>
        /* Slider */
        .slick-loading .slick-list {
            background: #fff url('{{ asset('/') }}dailysharkFiles/aircalm/ajax-loader.gif') center center no-repeat;
        }
        /* Icons */
        @font-face {
            font-family: 'slick';
            font-weight: normal;
            font-style: normal;

            src: url('{{ asset('/') }}fonts/slick.eot');
            src: url('{{ asset('/') }}fonts/slick.eot?#iefix') format('embedded-opentype'), url('{{ asset('/') }}fonts/slick.woff') format('woff'), url('{{ asset('/') }}fonts/slick.ttf') format('truetype'), url('{{ asset('/') }}fonts/slick.svg#slick') format('svg');
        }
        .old sup {
            margin-left: -6px;
            text-transform: uppercase;
            font-size: 13px;
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-sm-offset-1">
                <a href="#" class="logo"></a>
            </div>
            <div class="col-sm-7 col-xs-6 col-sm-offset-2">
                <div class="navigation">
                    <ul class="menu">
                        <li><a href="#how-its-work">Kako radi? </a>
                        </li>
                        <li><a href="#characteristics">Karakteristike</a>
                        </li>
                        <li><a href="#order">Poručite</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mob-menu-wrapper">
        <div class="navbar-menu-overlay"></div><a href="#" class="mob-menu-icon"><span></span></a>
        <div class="mob-sidebar">
            <div class="mob-menu-container">
                <ul class="menu-mob-wrap menu-mob">
                    <li><a href="#how-its-work" class="url">Kako radi? </a>
                    </li>
                    <li><a href="#characteristics" class="menu-mob-item url">Karakteristike</a>
                    </li>
                    <li><a href="#order" class="menu-mob-item url">Poručite</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="main-container">
    <section class="main-section" id="main-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-5">
                    <div class="description">
                        <h1>Ultrazvučni osveživač <span>i difuzer sa aromom</span></h1>
                        <h3>Umeće opuštanja i zdravog okruženja u vašem domu</h3>
                        <div class="price-wrapper"><span class="old">{{ $prices[1]['originalPrice'] }} <sup>RSD</sup></span><span class="new">{{ $prices[1]['amount'] }} <sup>RSD</sup></span></div>
                        <a href="#order" class="btn-order">Poručite</a>
                    </div>
                </div>
            </div>
        </div><a href="#order" class="btn-order-mobile">Poručite</a>
        <a href="#product-color" class="btn-scroll"></a>
    </section>
    <section class="benefits benefits-mobile">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="benefits-wrapper">
                        <h3>Šta Air Calm radi za vas?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row ben-mb">
                        <div class="col-sm-6 col-md-push-6">
                            <div class="benefits-wrapper tal">
                                <h4>Osvežava i čisti vazduh</h4>
                                <p>• koristan je zimi kada je vazduh zagađeniji i suvlji</p>
                                <p>• koža će biti mekša i hidrirana</p>
                                <p>• poboljšava uticaj na zdravlje</p>
                                <p>• vlažniji vazduh je bolji za vas</p>

                            </div>
                        </div>
                        <div class="col-sm-6 col-md-pull-6">
                            <div class="owl-carousel ovl-2">
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('/') }}dailysharkFiles/aircalm/benefits-img.png" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('/') }}dailysharkFiles/aircalm/benefits-img2.png" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('/') }}dailysharkFiles/aircalm/benefits-img3.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="benefits-wrapper tal">
                                <h4>Aromaterapija</h4>
                                <p>• pomaže u oslobađanju od stresa, i dovodi vas u balansirano psihofizičko stanje</p>
                                <p>• u zavisnosti od eteričnog ulja koje koristite može ojačati imunitet</p>
                                <p>• poboljšava kvalitet sna kreirajući opuštenu & umirujuću atmosferu</p>
                                <p>• rešava neprijatne mirise</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="owl-carousel ovl-2">
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('/') }}dailysharkFiles/aircalm/benefits-img4.png" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('/') }}dailysharkFiles/aircalm/benefits-img5.png" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('/') }}dailysharkFiles/aircalm/benefits-img6.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="main-headline">Šta kupci kažu o nama</h3>
                </div>
            </div>
            <div class="row reviews-mobile">
                <div class="owl-carousel ovl-1">
                    <div class="item">
                        <div class="reviews-wrapper">
                            <div class="img-wrapper">
                                <img src="{{ asset('/') }}dailysharkFiles/aircalm/reviews2.png" />
                            </div>
                            <h4>Omiljena stvar koji sam kupio preko Facebooka</h4>
                            <p>Sjajan humidor. Nisam znao mnogo o eteričnim uljima dok nisam ovo nabavio. Posle toga mislim da sam probao sva koja postoje. Eukaliptus je moja preporuka za savršen san!</p>
                            <span>Dimitrije</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="reviews-wrapper">
                            <div class="img-wrapper">
                                <img src="{{ asset('/') }}dailysharkFiles/aircalm/reviews.png" />
                            </div>
                            <h4>Svi su oduševljeni!</h4>
                            <p>Svidja mi se ova stvarčica, naručila sam je za kancelariju i postala je pravi hit. Ne gasimo je . Uzela sam jednu i za spavaću sobu i mnogo bolje spavam.</p>
                            <span>Aleksandra</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="reviews-wrapper">
                            <div class="img-wrapper">
                                <img src="{{ asset('/') }}dailysharkFiles/aircalm/reviews3.png" />
                            </div>
                            <h4>Obožavam ga!</h4>
                            <p>Ako radi preko 6 sati ugasi se sam, pa ne moram da brinem da ga gasim. Sjajno se slaže uz moje enterijer!</p>
                            <span>Andrea</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-color" id="product-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>7 boja - da kreirate opuštajuću atmosferu u prostoriji</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="img-wrapper">
                        <img src="{{ asset('/') }}dailysharkFiles/aircalm/7colors.png" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Boje se menjaju na pritisak dugmeta ili automatski. Na 100ml vode stavlja se <b>3 kapi ulja</b></p>
                    <a href="#order" class="btn-order2">Poručite</a>
                </div>
            </div>
        </div>
    </section>
    <section class="characteristics" id="characteristics">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="main-headline">Karakteristike</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-push-6">
                    <div class="characteristics-descr">
                        <p>Koliko dugo radi: <span>3-6 sati</span> (u zavisnosti od podešavanja)</p>
                        <p>Koliku prostoriju pokriva: <span>30 m2</span></p>
                        <p>Zapremina: <span>100 ml</span></p>
                        <p style="color: red;">Automatsko gašenje kada se rezervoar isprazni</p>
                    </div>
                    <div class="function"><span class="light">Svetlo</span>
                        <p>Pritisnite dugme da aparat krene da menja boje</p>
                        <p>Pritisnite još jednom za ručni odabir boje</p>
                    </div>
                    <div class="function"><span class="mist">Para</span>
                        <p>Pritisnite mist dugme da uključite osveživač</p>
                        <p>Na još jedan pritisak birate da li hoćete da para izlazi konstantno ili na 30 sekundi</p>
                    </div>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <div class="img-wrapper">
                        <img src="{{ asset('/') }}dailysharkFiles/aircalm/product.png" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="how-its-work" id="how-its-work">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="main-headline">Kako se koristi?</h3>
                </div>
            </div>
            <div class="row">
                <div class="item-wrapper">
                    <div class="col-md-2 col-md-offset-2 col-sm-3 col-xs-6">
                        <div class="item">
                            <img src="{{ asset('/') }}dailysharkFiles/aircalm/1.png" />
                            <p>Skinite poklopac</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <div class="item">
                            <img src="{{ asset('/') }}dailysharkFiles/aircalm/2.png" />
                            <p>Sipajte vodu u rezervoar (100ml)</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <div class="item">
                            <img src="{{ asset('/') }}dailysharkFiles/aircalm/3.png" />
                            <p>Dodajte 3 kapi eteričnog ulja</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <div class="item">
                            <img src="{{ asset('/') }}dailysharkFiles/aircalm/4.png" />
                            <p>Vratite poklopac</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="main-headline">Dostava, plaćanje i garancija</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="item-wrapper">
                    <div class="col-md-3 col-md-offset-1">
                        <div class="item item-car">
                            <img src="{{ asset('/') }}dailysharkFiles/aircalm/why1.png" class="car" />
                            <div class="item-descr">
                                <h4>Dostava</h4>
                                <p>Dostavljamo u roku od 1-2 dana</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item item-center">
                            <img src="{{ asset('/') }}dailysharkFiles/aircalm/why3.png" class="salut" />
                            <div class="item-descr">
                                <h4>100% garantujemo kvalitet</h4>
                                <p class="center">U slučaju nezadovoljstva vraćamo novac</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item item-cash">
                            <img src="{{ asset('/') }}dailysharkFiles/aircalm/why2.png" />
                            <div class="item-descr">
                                <h4>Plaćanje</h4>
                                <p>Plaćate prilikom preuzimanja paketa od kurira brze pošte</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="order" id="order">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="main-headline">AirCalm - osigurava svež vazduh i prijatne mirise</h3>
                    <div class="price-wrapper price-mobile">
                        <div class="price"><span class="old">{{ $prices[1]['originalPrice'] }} <sup>RSD</sup></span><span class="new">{{ $prices[1]['amount'] }} <sup>RSD.</sup></span>
                        </div>

                    </div>
                    <div class="product-wrapper">
                        {{--<div class="bonus">--}}
                            {{--<p>+ подарък: бурканче с етерично масло</p>--}}
                        {{--</div>--}}
                        <div class="img-wrapper">
                            <img src="{{ asset('/') }}dailysharkFiles/aircalm/product-order.png" />
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-wrapper price-desctop">
                        <div class="price"><span class="old">{{ $prices[1]['originalPrice'] }} <sup>RSD</sup></span><span class="new">{{ $prices[1]['amount'] }} <sup>RSD.</sup></span>
                        </div>

                    </div>
                    <div class="form-wrapper">
                        <div class="form">
                            <form method="post" action="{{$orderRoute}}" id="form-signup_v1" name="form-signup_v1" class="validation-form-container main-form">
                                {{csrf_field()}}
                                @include('lander.naturapharm.components.form_hidden_fields')
                                <div class="row">
                                    <div class="wrapper">
                                        <div class="field">
                                            <div class="ui left labeled input">
                                                <input name="name" type="text" placeholder="Ime i prezime" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrapper ">
                                        <div class="field">
                                            <div class="ui left labeled input">
                                                <input placeholder="Telefon" name="phone" type="tel" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrapper">
                                        <div class="field">
                                            <div class="ui left labeled input">
                                                <input name="shipping_address" type="text" placeholder="Adresa" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrapper">
                                        <div class="field">
                                            <div class="ui left labeled input">
                                                <input name="shipping_city" type="text" placeholder="Grad" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrapper">
                                        <div class="field">
                                            <div class="ui left labeled input">
                                                <select name="quantity">
                                                    @foreach($prices as $singlePrice)
                                                        <option class="options" value="{{$singlePrice['quantity']}}"
                                                                @if($singlePrice['is_default']) selected @endif
                                                                @if(old('quantity') == $singlePrice['quantity']) selected @endif
                                                        >
                                                            {{$singlePrice['quantity']}} x {{$product->product_name}} ({{$singlePrice['amount']}} RSD)
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrapper">
                                        <button type="submit" class="ui blue submit button">Poručite sada</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-sm-offset-1">
                <a href="#" class="logo"></a>
            </div>

        </div>
    </div>
    <a href="#main-section" class="btn-scroll"></a>

    <script src="{{ asset('/') }}dailysharkFiles/aircalm/Scroll2id.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}shared_files/owl.carousel.min.js" type="text/javascript"></script>
    {{--<script src="{{ asset('/') }}dailysharkFiles/aircalm/select.js" type="text/javascript"></script>--}}
    <script src="{{ asset('/') }}dailysharkFiles/aircalm/remodal.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}shared_files/slick.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}dailysharkFiles/aircalm/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}dailysharkFiles/aircalm/scripts.min.js" type="text/javascript"></script>
</footer>
@include('components.pixel_footer')
</body>
</html>