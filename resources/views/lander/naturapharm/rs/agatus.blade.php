<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/x-icon" href="{{ asset('/') }}flexovalFiles/agatus/aculief-favicon-01-1.png"/>
    <link rel='stylesheet' id='wp-block-library-css' href='{{ asset('/') }}flexovalFiles/agatus/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='main-css' href='{{ asset('/') }}flexovalFiles/agatus/main.css' type='text/css' media='all' />
    <link rel='stylesheet' id='offers-css' href='{{ asset('/') }}flexovalFiles/agatus/offer.css' type='text/css' media='all' />
    <link rel='stylesheet' id='noto-serif-css' href='https://fonts.googleapis.com/css2?family=Noto+Serif%3Awght%40300%3B400%3B600%3B700%3B800&amp;ver=5.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='google-open-sans-css' href='https://fonts.googleapis.com/css2?family=Open+Sans%3Aital%2Cwght%400%2C300%3B0%2C400%3B0%2C600%3B0%2C700%3B0%2C800%3B1%2C400&amp;display=swap&amp;ver=5.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='rubik-css' href='https://fonts.googleapis.com/css2?family=Rubik%3Awght%40300%3B400%3B600%3B700%3B800&amp;ver=5.8.2' type='text/css' media='all' />

    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
    {{--<link rel="stylesheet" media="screen" href="{{ asset('/') }}flexovalFiles/shared_files/lander.css">--}}
    <link rel="stylesheet" href="{{ asset('/') }}checkoutFiles/shared_files/order-cvr.min.css">
</head>
<body class="single-offer lang-en layout-default">
<div id="main-wrapper">
    @include('components.display_errors')
    <div class="brand-color-strip desktop-only" style="border-top:7px solid #007fc4"></div>
    <div id="logo">
        <div class="logo-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-logo">
                            <img src="{{ asset('/') }}flexovalFiles/shared_files/Flexoval_logo.png" alt="" style="height: 45px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div id="content-inner">
            <div class="headline-container">
                <h1 id="headline" class="body-headline" data-variation='[]'>Recite zbogom glavoboljama i migrenama za samo par minuta!</h1>
                <h2 id="subheadline" class="body-subheadline " data-variation='[]'>100% prirodno i bez lekova – rešenje koje smo svi čekali</h2>
            </div>
            <div class="product-info essential">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div id="guGallery-1" class="gallery-container">
                                <div class="gallery-video-container gu-hidden">
                                    <div id="guGallery-1-youtubeVideoWrapper" class="galleryVideoWrapper videoWrapper youtubeVideoWrapper"><iframe loading="lazy" width="545" height="301" src="#" frameborder="0" allowfullscreen></iframe></div>
                                    <div id="guGallery-1-wistiaVideoWrapper" class="galleryVideoWrapper videoWrapper wistiaVideoWrapper">
                                        <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                                            <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                                                <div id="guGallery-1-wistiaPlaceholder" class="" style="height:100%;position:relative;width:100%">
                                                    <div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img id="guGallery-1-wistiaThumbnail" src="#" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" onload="this.parentNode.style.opacity=1;" /></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="guGallery-1-sproutVideoWrapper" class="galleryVideoWrapper videoWrapper sproutVideoWrapper"></div>
                                </div>
                                <div class="gallery-image-container ">
                                    <img src="#" alt="">
                                </div>
                                <ul id="guGallery-1-thumbnails" class="gallery-thumbnails">
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/agatus/aculief-s1-02-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-2"
                                             srcset="{{ asset('/') }}flexovalFiles/agatus/aculief-s1-02-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/agatus/aculief-s1-02-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/agatus/aculief-s1-02-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/agatus/aculief-s1-02-180x180.jpg 180w"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/agatus/aculief-s1-03-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-3"
                                             srcset="{{ asset('/') }}flexovalFiles/agatus/aculief-s1-03-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/agatus/aculief-s1-03-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/agatus/aculief-s1-03-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/agatus/aculief-s1-03-180x180.jpg 180w"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/agatus/aculief-s1-05-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-4"
                                             srcset="{{ asset('/') }}flexovalFiles/agatus/aculief-s1-05-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/agatus/aculief-s1-05-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/agatus/aculief-s1-05-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/agatus/aculief-s1-05-180x180.jpg 180w"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/agatus/aculief-s1-06-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-6"
                                             srcset="{{ asset('/') }}flexovalFiles/agatus/aculief-s1-06-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/agatus/aculief-s1-06-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/agatus/aculief-s1-06-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/agatus/aculief-s1-06-180x180.jpg 180w"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/agatus/aculief-s1-07-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-7"
                                             srcset="{{ asset('/') }}flexovalFiles/agatus/aculief-s1-07-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/agatus/aculief-s1-07-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/agatus/aculief-s1-07-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/agatus/aculief-s1-07-180x180.jpg 180w"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/agatus/aculief-s1-08-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-8"
                                             srcset="{{ asset('/') }}flexovalFiles/agatus/aculief-s1-08-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/agatus/aculief-s1-08-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/agatus/aculief-s1-08-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/agatus/aculief-s1-08-180x180.jpg 180w"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 no-padding">
                            <div class="product-info-container">
                                <div class="d-md-none rtl-text-centered">
                                    <div class="button" style="background: #25ae4e">
                                        <a href="#orderForm">Poruči Agatus sada!</a>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="info-padding">
                                        <p>Agatus je sjajan uređaj koji pruža <strong>brzo olakšanje u borbi protiv glavobolje i migrene bez upotrebe lekova.</strong></p>
                                        <p>Radi tako što pritiska <strong>LI4 tačku</strong> (koja se nalazi između palca i kažiprsta), što je jedan <strong>prirodan način za tretiranje glavobolja</strong> koji se koristi preko hiljadu godina.</p>
                                        <p>Ne samo da je <strong>bez neželjenih efekata, nego se i preporučuje od strane stručnjaka.</strong></p>
                                    </div>
                                </div>
                                <div class="info d-none d-lg-block">
                                </div>
                                <div class="product-description-list">
                                    <ul>
                                        <li><b>Kako radi</b> – Naučno je dokazano da su razne tačke na telu povezane sa raznim organima. Pritiskom jedne od tih tačaka, može se otlkoniti tenzija na nekom drugom delu tela. To je princip po kom Agatus radi i zbog čega je tako efikasan.</li>
                                        <li><b>Osetite olakšanje za samo par minuta</b> – Samo postavite Agatus na ruku kojom ne pišete i osetite olakšanje za samo 1-3 minuta.</li>
                                        <li><b>Zbogom lekovima</b> – Uz ovu napravicu, nema neželjenih efekata. Samo dokazan i prirodan način uklanjanja bola</li>
                                        <li><b>Traje zauvek</b> – Jednom kada ga naručite, uživaćete u njemu dan i noć, zauvek. Jednokratna investicija!</li>
                                        <li><b>Nosite ga svuda</b> – Dizajniran je tako da možete svuda da ga nosite! Ostavite ga u kolima, novčaniku, tašni... Vodootporan je, a tako je dizajniran da ne smeta pri obavljanju svakodnevnih aktivnosti.</li>
                                        <li><b>Odgovara za svaku ruku</b> – univerzalna veličina koja odgovara svakome.</li>
                                    </ul>
                                </div>
                                <div class="product-description-list d-none d-md-block d-lg-block">
                                </div>
                                <div class="rtl-text-centered">
                                    <div class="button" style="background: #25ae4e;">
                                        <a href="#orderForm">Poruči Agatus sada!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div id="featured-in">--}}
                {{--<div class="container-fluid">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-lg-12">--}}
                            {{--<h4 class="featured-text"><span>As Featured In</span></h4>--}}
                            {{--<div class="row">--}}
                                {{--<div class="logo-strip" data-item-count="5">--}}
                                    {{--<div class="image" style="background-image: url('{{ asset('/') }}flexovalFiles/agatus/made-in-the-usa.png'); max-height: 75px;max-width: 140px;">--}}
                                    {{--</div>--}}
                                    {{--<div class="image" style="background-image: url('{{ asset('/') }}flexovalFiles/agatus/yahoo.png'); max-height: 75px;max-width: 194px;">--}}
                                        {{--<a target="_blank" href="">&nbsp;</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="image" style="background-image: url('{{ asset('/') }}flexovalFiles/agatus/the-doctors.png'); max-height: 75px;max-width: 172px;">--}}
                                        {{--<a target="_blank" href="">&nbsp;</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="image" style="background-image: url('{{ asset('/') }}flexovalFiles/agatus/hallmark-channel.png'); max-height: 75px;max-width: 194px;">--}}
                                        {{--<a target="_blank" href="">&nbsp;</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="image" style="background-image: url('{{ asset('/') }}flexovalFiles/agatus/the-wall-street-journal.png'); max-height: 75px;max-width: 182px;">--}}
                                        {{--<a target="_blank" href="">&nbsp;</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <section id="reviews" data-layout="1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 id="reviews_headline" class="" data-alts="[]">Evo zašto naši kupci vole Agatus</h2>
                        </div>
                    </div>
                    <div class="testimonials">
                        <div id="testimonial-1" class="testimonial-block">
                            <div class="rating">
                                <div class="stars">
                                    <img src="{{ asset('/') }}flexovalFiles/agatus/five-stars.jpg">
                                    <div class="star-count">
                                        5.0 ocena
                                    </div>
                                </div>
                                <div class="user">
                                    <strong>Marko Barać</strong>
                                    <div class="verified">
                                        Verified Buyer
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <h4>
                                    <a target="_blank" href="">
                                        “Sjajna stvar!” </a>
                                </h4>
                                <div class="copyblock">
                                    <p>Našao sam ovaj proizvod na preporuku lekara jer mu se nije svidelo što uzimam toliko puno stvari za glavobolju. Nisam baš mnogo nade polagao u ovaj proizvod, ali sam ga ipak naručio jer nisam imao šta da izgubim. Impresionirao sam se sa kojom lakoćom je bol prošao. Već par puta sam ga koristio i svaki put sam bio iznenađen koliko brzo me je bol popustimo. Ako ste kao i ja i imate iste muke, morate da probate ovo!</p>
                                </div>
                            </div>
                        </div>
                        <div id="testimonial-2" class="testimonial-block">
                            <div class="rating">
                                <div class="stars">
                                    <img src="{{ asset('/') }}flexovalFiles/agatus/five-stars.jpg">
                                    <div class="star-count">
                                        5.0 ocena
                                    </div>
                                </div>
                                <div class="user">
                                    <strong>Vesna</strong>
                                    <div class="verified">
                                        Verified Buyer
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <h4>
                                    <a target="_blank" href="">
                                        “Morate da probate ovaj proizvod!” </a>
                                </h4>
                                <div class="copyblock">
                                    <p>Čekala sam pravi trenutak da napišem ovu recenziju jer sam htela da proverim par stvari. PRVO da li će da se razlabavi (jer i ja i muž imamo debele palčeve)? Neće! DRUGO Da li će zapravo i da radi? I zapravo radi fantastično i vrlo je dobar i kod stresa i anksioznosti. Nije lek – ali pomaže dosta. Izgleda jako jednostavno, zapravo i jeste, ali radi. Takođe deluje jako kvalitetno. </p>
                                </div>
                            </div>
                        </div>
                        <div id="testimonial-3" class="testimonial-block">
                            <div class="rating">
                                <div class="stars">
                                    <img src="{{ asset('/') }}flexovalFiles/agatus/five-stars.jpg">
                                    <div class="star-count">
                                        5.0 ocena
                                    </div>
                                </div>
                                <div class="user">
                                    <strong>Slađana Marić Hinić</strong>
                                    <div class="verified">
                                        Verified Buyer
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <h4>
                                    <a target="_blank" href="">
                                        “Stvarno radi!” </a>
                                </h4>
                                <div class="copyblock">
                                    <p>Imam strašne migrene već par godina, zaboli me glava bar jednom dnevno. Imam terapiju koju pijem ali mi ni ona ne pomaže u potpunosti. Kada sam videla reklamu za Agatus rešila sam da mu dam šansu. Posle samo 30ak sekundi već sam osetila olakšanje. Koristim Agatus svaki put čim me i malo zaboli glava, nekad ga umanji dosta, nekad me reši bola skroz. Ocena 5+!</p>
                                </div>
                            </div>
                        </div>
                        <div id="testimonial-4" class="testimonial-block">
                            <div class="rating">
                                <div class="stars">
                                    <img src="{{ asset('/') }}flexovalFiles/agatus/five-stars.jpg">
                                    <div class="star-count">
                                        5.0 ocena
                                    </div>
                                </div>
                                <div class="user">
                                    <strong>Maja</strong>
                                    <div class="verified">
                                        Verified Buyer
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <h4>
                                    <a target="_blank" href="">
                                        “Agatus me je vratio u život!” </a>
                                </h4>
                                <div class="copyblock">
                                    <p>Godinama imam ozbiljne migrene. Bila sam skoro godinu dana na bolovnaju zbog toga. Agatus sam naručila kao poslednju šansu, jer nisam više znala šta da radim. Agatus je savršenstvo – verujte mi. Nosim ga često u toku dana i ne mogu dovoljno da ga preporučim svima. Pričam i doktorima o ovome i verujte i oni su zadovoljni. Moja preporuka!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="clearfix"></div>
        <div id="orderForm">
            <form action="{{$orderRoute}}" method="POST">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div class="col-md-12 allProductsHolder" id="allProductsHolder">
                    <div class="step-title js-customer-title" style="padding-top: 10px;text-align: center">
                        <h2 class="title">
                            Korak 1: <strong>Izaberite količinu</strong>
                        </h2>
                        <p>Držite po jedan u autu, na poslu ili pored kreveta. Takođe, može biti odličan poklon!</p>
                    </div>
                    @php
                        $columns = number_format(12/count($prices), 0);
                    @endphp
                    <div class="row" style="padding: 20px;">
                    @foreach($prices as $singlePrice)
                            <div class="col-md-{{$columns}} productHolder text-center">
                                <input type="radio" id="product{{$singlePrice['quantity']}}" name="quantity" class="quantity" value="{{$singlePrice['quantity']}}" @if(old('quantity') == $singlePrice['quantity']) checked @elseif($singlePrice['is_default']) checked @endif>
                                <label class="productLabel" for="product{{$singlePrice['quantity']}}">
                                    @if($singlePrice['is_default'])
                                        <span class="best-option-badge"><img src="{{ asset('/')}}thankyouFiles/thankyouUpSell/best-offer-badge.png"/></span>
                                    @endif
                                    <div class="img-holder">
                                        {{--<img src="{{asset('/').$product->product_image}}">--}}
                                        <img src="{{asset('/')}}flexovalFiles/agatus/aculiefProduct.png">

                                        <span class="quantity-badge">{{ $singlePrice['quantity'] }}x</span>
                                    </div>
                                    <div class="productDetails">
                                        @if($singlePrice['is_free_shipping'])
                                            <span style="color: rgb(26, 184, 0);">* Besplatna dostava</span>
                                        @endif
                                    </div>
                                    <div class="productPrices">
                                        <span class="old-price">{{ $singlePrice['originalPrice'] }} RSD</span>
                                        <span class="new-price">{{ $singlePrice['amount'] }} RSD</span>
                                    </div>
                                    <br>
                                    <div class="productOrder">
                                        <div class="productOrderBtn">PORUČI</div>
                                    </div>
                                </label>
                            </div>
                    @endforeach
                    </div>
                </div>
                <div class="col-md-12" id="scroll-form">
                    <div class="orderst-form">
                        <div class="step-title js-customer-title" style="text-align: center;">
                            <h2 class="title">
                                Korak 2: <strong>Podaci za dostavu</strong>
                            </h2>
                        </div>
                        <div class="widget-customer-form">
                            <div class="full-name">
                                <div class="form-group">
                                    <input id="customer_firstname" value="{{ old('name') }}" name="name" class="shipping-firstname" type="text" maxlength="30" placeholder="Ime i prezime" required="">
                                </div>
                            </div>
                            <div class="form-group form-group--email">
                                <input id="customer_email" value="{{ old('email') }}" name="email" class="customer-email" type="email" maxlength="200" placeholder="Email adresa" required="" type="email">
                            </div>
                            <div class="form-group form-group--phone">
                                <input id="customer_phone" value="{{ old('phone') }}" name="phone" class="customer-phone" type="tel" maxlength="20" placeholder="Broj telefona" required="">
                            </div>
                        </div>
                        <div class="widget-shipping-form ">
                            <div class="form-group">
                                <input id="shipping_address" value="{{ old('shipping_address') }}" name="shipping_address" class="shipping-address" type="text" maxlength="80" placeholder="Ulica i broj" required="">
                            </div>
                            <div class="form-group">
                                <input id="shipping_city" value="{{ old('shipping_city') }}" name="shipping_city" class="shipping-city" type="text" maxlength="30" placeholder="Grad" required="">
                            </div>
                            <div class="form-group">
                                <input id="shipping_zip" value="{{ old('shipping_zip') }}" name="shipping_zip" class="shipping-postal" type="text" placeholder="Postanski broj" required="" pattern="\d*" maxlength="5">
                            </div>
                        </div>
                        <div class="w_button btn-order-now">
                            <button type="submit">
                                <span>ZAVRŠI KUPOVINU</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <style>
        html {
            scroll-behavior: smooth;
        }
        .orderst-form {
            display: none;
        }
        .allProductsHolder {
            margin-bottom: 20px;
        }
        .quantity {
            display: none;
        }
        .productLabel {
            cursor: pointer;
        }
        .img-holder {
            max-width: 280px;
            padding: 10px 0px;
            position: relative;
        }
        .img-holder img {
            max-width: 150px;
        }
        .productHolder {
            border:2px solid rgb(255, 255, 255);
            display: inline-block;
        }
        input {
            width: 100%;
        }
        .btn-order-now button {
            border-radius: 3px;
            color: #fff;
            font-weight: 700;
            font-size: 16px;
            /*background-color: rgb(26, 184, 0);*/
            background-color: #25ae4e;
            padding: 18px 5px 17px;
            display: block;
            width: 100%;
            line-height: 1;
            text-transform: uppercase;
            box-shadow: none;
        }
        .btn-order-now button:hover {
            transform: scale(1)
        }
        .productOrderBtn {
            border-radius: 3px;
            color: #fff;
            font-weight: 700;
            font-size: 16px;
            /*background-color: rgb(26, 184, 0);*/
            background-color: #25ae4e;
            padding: 10px;
            display: block;
            margin-left: 10%;
            width: 80%;
            text-transform: uppercase;
            border: 1px solid rgb(26, 84, 0);
        }
        .productPrices {

        }
        .productPrices > span {
            display: block;
            font-size: 22px;
        }
        .productPrices > .old-price {
            color:red;
            text-decoration:line-through;
        }
        .productPrices > .new-price {

        }
        .productDetails {
            min-height: 20px;
        }
        .best-option-badge img {
            position:absolute;
            top:0px;
            left:0px;
            width:90px!important;
            height:90px!important;
            z-index: 2;
        }
        .quantity-badge {
            background-color: rgba(242, 242, 242, 1);
            text-align: center;
            border-radius: 50%;
            border: 1px solid grey;
            padding: 10px;
            font-size: 20px;
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: 50px !important;
            height: 50px !important;
        }

        @media (max-width:795px) {
            .quantity-badge {
                bottom: 10px;
                right: 10px;
            }
        }
    </style>
    <script>
        $(document).ready(function() {
            $('.productHolder').css('border','3px solid rgb(255, 255, 255)');
            $('input[name=quantity]:checked').parent().css('border','3px solid rgb(26, 184, 0)');
            $('.quantity').click(function () {
                $('.productHolder').css('border','3px solid rgb(255, 255, 255)');
                $(this).parent().css('border','3px solid rgb(26, 184, 0)');
                $('.orderst-form').show(); //slidedown ne skroluje lepo na prvi klik, posle hoce
                function scrollToForm(formHeight) {
                    $('html, body').animate({
                        scrollTop: $("#scroll-form").offset().top-formHeight
                    }, 1);
                }
                if(window.outerWidth < 425) {
                    scrollToForm(260);
                } else {
                    scrollToForm(780);
                }
            })
        })
    </script>
</div>
<script type="text/javascript">
    (function($){
        $(document).ready(function () {

            let curGallery = 'guGallery-1';
            let mainimagecontainer = $('#' + curGallery).find('.gallery-image-container');

            $("#" + curGallery).on('init', function () {
                let firstImg = $("#" + curGallery).find('li').first().find('img');
                if (firstImg.length) {
                    let firstAlt = firstImg.attr('alt');
                    let firstSrc = firstImg.attr('src');
                    let firstId = firstImg.attr('id');
                    LoadImage(firstSrc, firstId);
                }
            });

            function LoadImage(src, thumbID) {
                let cleanlink = src.replace(/-\d+[Xx]\d+\./g, '.');
                mainimagecontainer.find('img').attr('src', cleanlink);
            }

        });

    })(jQuery);
</script>
<script>
    function reviewSlideshow(slideIt, options){
        slideIt = typeof slideIt !== 'undefined' ? slideIt : null;
        options = typeof options !== 'undefined' ? options : null;

        if(slideIt == true){
            if(typeof reviewSlideshow.persistent == 'undefined') {
                reviewSlideshow.persistent = true;
            }
        }

        if(options == null){
            options = {
                arrows: true,
                dots: true,
                draggable: true,
                swipe: true,
                swipeToSlide: true,
                touchMove: true,
                draggable: true,
                accessibility: true,
                adaptiveHeight: true,
                prevArrow:'',
                nextArrow:'<button class="arrow" type="button" role="button" aria-label="Next"></button>',
                rtl: ($('html').attr('dir') === 'rtl' ? true : false)
            };
        }
        if(slideIt == false && reviewSlideshow.persistent != true){
            $('#reviews .testimonials').slick('unslick');
        }else{
            $('#reviews .testimonials').not('.slick-initialized').slick(options);
        }
    }
    jQuery(function(){
        $(document).ready(function(){

            if($('#reviews').data('layout') === 1){
                enquire.register("screen and (max-width: 767.980px)", { //small range
                    match: function(){
                        reviewSlideshow();
                    },
                    unmatch: function(){
                        reviewSlideshow(false);
                    }
                });
            }

            if($('#reviews').data('layout') === 2){
                reviewSlideshow(true, {
                    arrows: false,
                    dots: true,
                    draggable: true,
                    swipe: true,
                    swipeToSlide: true,
                    touchMove: true,
                    draggable: true,
                    accessibility: true,
                    adaptiveHeight: false,
                    prevArrow:'',
                    nextArrow:'',
                    infinite: true,
                    rtl: ($('html').attr('dir') === 'rtl' ? true : false),
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    responsive: [
                        {
                            breakpoint: 767,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            }
        });
    });
</script>
<script>
    $(function () {
        $(".gallery-container").trigger("init");
    });
</script>
<script>
    let curGallery = 'guGallery-1';
    let mainimagecontainer = $('#' + curGallery).find('.gallery-image-container');

    $("#" + curGallery + "-thumbnails li").on('click', function () {
        if (!$(this).hasClass('selectedThumb')) {
            $("#" + curGallery + "-thumbnails li.selectedThumb").removeClass('selectedThumb');
            $(this).addClass('selectedThumb');

            let thumbnail = $(this).find('img');
            let thumbID = $(this).attr('id');

            let thumbSrc = thumbnail.attr('src');
            LoadImage(thumbSrc, thumbID);

            function LoadImage(src, thumbID) {
                let cleanlink = src.replace(/-\d+[Xx]\d+\./g, '.');
                mainimagecontainer.find('img').attr('src', cleanlink);
            }
        }
    });
</script>
<script type='text/javascript' src='{{ asset('/') }}flexovalFiles/agatus/enquire.js' id='enquire-script-js'></script>
<script type='text/javascript' src='{{ asset('/') }}flexovalFiles/agatus/slick.min.js' id='slideshow-script-js'></script>
@include('components.pixel_footer')
</body>
</html>