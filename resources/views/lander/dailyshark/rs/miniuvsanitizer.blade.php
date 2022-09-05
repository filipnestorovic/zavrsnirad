<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/4.png" type="image/x-icon"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/bootstrap.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}shared_files/owl.carousel.min.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/owl.theme.default.css"/>
{{--    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/aircalm/remodal.css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/aircalm/remodal-default-theme.css" />--}}
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/app.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/slick-theme.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/slick.css"/>
{{--    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/aircalm/magnific-popup.css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('/') }}shared_files/font-awesome.min.css"/>--}}
    <link rel="stylesheet" href="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/jquery.validation.css"/>
    <style>
        /* Slider */
        .slick-loading .slick-list {
            background: #fff url('{{ asset('/') }}dailysharkFiles/miniuvsanitizer/ajax-loader.gif') center center no-repeat;
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

        @media only screen and (max-width: 728px) {
            .order .img-wrapper img {
                margin-top: 0;
            }
        }
    </style>
</head>
<body>
@include('components.display_errors')
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-sm-offset-1">
{{--                <a href="#" class="logo"></a>--}}
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
        <div class="navbar-menu-overlay"></div>
        <a href="#" class="mob-menu-icon"><span></span></a>
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
                        <h1>Mini UVC Sanitizer</h1>
                        <h3>Uništava sve bakterije, viruse i gljivice za par sekundi</h3>
                        <div class="price-wrapper"><span
                                class="old">{{ $prices[1]['originalPrice'] }} <sup>{{ $prices[1]['currency'] }}</sup></span><span class="new">{{ $prices[1]['amount'] }} <sup>{{ $prices[1]['currency'] }}</sup></span>
                        </div>
                        <a href="#order" class="btn-order">Poručite</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#order" class="btn-order-mobile">Poručite</a>
        <a href="#product-color" class="btn-scroll"></a>
    </section>
    <section class="benefits benefits-mobile">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="benefits-wrapper">
                        <h3>Šta radi Mini UVC sanitizer?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row ben-mb">
                        <div class="col-sm-6 col-md-push-6">
                            <div class="benefits-wrapper tal">
                                <h4>STERILIZUJE SVE POVRŠINE</h4>
                                <p>• uništava viruse</p>
                                <p>• brzo eliminiše i ubija bakterije</p>
                                <p>• uklanja gljivice</p>
                                <p>• poboljšava uticaj na zdravlje</p>

                            </div>
                        </div>
                        <div class="col-sm-6 col-md-pull-6">
                            <div class="owl-carousel ovl-2">
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/benefits-img.png"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/benefits-img2.png"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/benefits-img3.png"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="benefits-wrapper tal">
                                <h4>POTPUNO EFIKASAN I BEZBEDAN</h4>
                                <p>• Najviše bakterija imamo na telefonu i radnim površinama, koje mini UVC sanitizer momentalno ubija.</p>
                                <p>• Tastature i dečije igračke su leglo bakterija i mikroba. Dezinfikujte je jednim potezom.</p>
                                <p>• Površine u automobilu često su prenosnici gljivica koje u znatnoj meri mogu naručiti naše zdravlje. Ovim proizvodom ćete ih eliminisati.</p>
                                <p>• Dezinfikuje aspolutno sve što se nalazi oko vas i živite bezbedno.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="owl-carousel ovl-2">
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/benefits-img4.png"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/benefits-img5.png"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/benefits-img6.png"/>
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
                                <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/reviews2.png"/>
                            </div>
                            <h4>Omiljena stvar koji sam kupio preko Facebooka</h4>
                            <p>Sjajan uređaj. Često sam imao osipe i alergije koje su mi se pojavljivale na podlakticama od radnog stola koji je uvek sakupljao bakterije.
                                Od kada koristim ovaj uređaj više nemam problema. Sve preporuke!</p>
                            <span>Dimitrije</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="reviews-wrapper">
                            <div class="img-wrapper">
                                <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/reviews.png"/>
                            </div>
                            <h4>Svi su oduševljeni!</h4>
                            <p>Sviđa mi se ova stvarčica. Naručila sam je za kancelariju i postala je pravi hit. Svi drugi su videli od mene i pokupovali su je. Imam jedan i u spavaćoj sobi.</p>
                            <span>Aleksandra</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="reviews-wrapper">
                            <div class="img-wrapper">
                                <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/reviews3.png"/>
                            </div>
                            <h4>Bez njega ne idem nigde!</h4>
                            <p>Često sam nosila sprejeve i alkohol, ali neke stvari prosto nije jednostavno obrisati. Sada sa UVC sanitajzerom, za par sekundi dezinfikujem sve.
                                Vrh stvar, nosim ga svuda sa sobom!</p>
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
                    <h3>Mini UVC Sanitizer - za život bez bakterija i virusa</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="img-wrapper">
                        <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/7colors.png"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Uređaj ne zauzima mnogo prostora i može da se nosi u <b>svakoj torbici.</b> <br>
                        Potpuno je jednostavan za korišćenje.</p>
                    <a href="#order" class="btn-order2">Poručite</a>
                </div>
            </div>
        </div>
    </section>
    <section class="characteristics" id="characteristics">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="main-headline">O proizvodu</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-push-6">
{{--                    <div class="characteristics-descr">--}}

{{--                    </div>--}}
                    <div class="function characteristics-descr"><span class="light">Karakteristike</span>
                        <p>Dimenzije: 4.92(L)x1.37(W)x0.98(H)</p>
                        <p>Težina: 65g</p>
                        <p>Trajanje baterija: <span>do 3 sata</span> aktivnog korišćenja</p>
                        <p>Napajanje: 4xAAA baterije ili USB kabl (baterije ne mogu da se pune preko USB kabla)</p>
                    </div>
                    <div class="function characteristics-descr"><span class="mist">Talasi</span>
                        <p>Trajanje UV lampi: do <span>20000 radnih sati</span></p>
                        <p>Dužina UV talasa: 253.7mm(UVC)</p>
                    </div>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <div class="img-wrapper">
                        <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/product.png"/>
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
                            <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/1.png"/>
                            <p>Raspakujte kutiju i izvadite proizvod</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <div class="item">
                            <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/2.png"/>
                            <p>Stavite odgovarajuće baterije</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <div class="item">
                            <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/3.png"/>
                            <p>Dezinfikujte željene površine</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <div class="item">
                            <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/4.png"/>
                            <p>Živite srećno i zdravo</p>
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
                            <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/why1.png" class="car"/>
                            <div class="item-descr">
                                <h4>Dostava</h4>
                                <p>Dostavljamo u roku od 1-2 dana</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item item-center">
                            <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/why3.png" class="salut"/>
                            <div class="item-descr">
                                <h4>100% garantujemo kvalitet</h4>
                                <p class="center">U slučaju nezadovoljstva vraćamo novac</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item item-cash">
                            <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/why2.png"/>
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
                    <h3 class="main-headline">Mini UVC Sanitizer - uništava sve bakterije, viruse i gljivice za par sekundi</h3>
                    <div class="price-wrapper price-mobile">
                        <div class="price"><span
                                class="old">{{ $prices[1]['originalPrice'] }} <sup>{{ $prices[1]['currency'] }}</sup></span><span class="new">{{ $prices[1]['amount'] }} <sup>{{ $prices[1]['currency'] }}.</sup></span>
                        </div>

                    </div>
                    <div class="product-wrapper">
                        <div class="img-wrapper">
                            <img src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/product-order.png"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-wrapper price-desctop">
                        <div class="price"><span
                                class="old">{{ $prices[1]['originalPrice'] }} <sup>{{ $prices[1]['currency'] }}</sup></span><span class="new">{{ $prices[1]['amount'] }} <sup>{{ $prices[1]['currency'] }}.</sup></span>
                        </div>

                    </div>
                    <div class="form-wrapper">
                        <div class="form">
                            <form method="post" action="{{$orderRoute}}" id="form-signup_v1" name="form-signup_v1"
                                  class="validation-form-container main-form">
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
                                                <input name="shipping_address" type="text" placeholder="Adresa"
                                                       required>
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
                                                            {{$singlePrice['quantity']}} x {{$product->product_name}}
                                                            ({{$singlePrice['amount']}} {{ $prices[1]['currency'] }})
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
{{--                <a href="#" class="logo"></a>--}}
            </div>

        </div>
    </div>
    <a href="#main-section" class="btn-scroll"></a>

    <script src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/Scroll2id.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}shared_files/owl.carousel.min.js" type="text/javascript"></script>
{{--    <script src="{{ asset('/') }}purplerelaxFiles/aircalm/remodal.min.js" type="text/javascript"></script>--}}
    <script src="{{ asset('/') }}shared_files/slick.min.js" type="text/javascript"></script>
{{--    <script src="{{ asset('/') }}purplerelaxFiles/aircalm/jquery.magnific-popup.min.js" type="text/javascript"></script>--}}
    <script src="{{ asset('/') }}dailysharkFiles/miniuvsanitizer/scripts.min.js" type="text/javascript"></script>
</footer>
@include('components.pixel_footer')
</body>
</html>
