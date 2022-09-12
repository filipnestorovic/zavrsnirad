<html lang="en">
<head>
    @include('components.pixel_init')
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('/') }}checkoutFiles/shared_files/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,700|Montserrat:400,500,700|Oswald:400,500,600,700|Lato:300,400,700,900|Open+Sans:300,400,600,700,800|Roboto:300,400,500,700,900|Noto+Serif:700i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}checkoutFiles/shared_files/site.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}checkoutFiles/shared_files/order-cvr.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}checkoutFiles/shared_files/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        @font-face {
            font-family:icomoon;
            font-display:auto;
            src:url({{ asset('/') }}fonts/icomoon.eot);
            src:url({{ asset('/') }}fonts/icomoon.eot)
            format('embedded-opentype'), url({{ asset('/') }}fonts/icomoon.ttf)
            format('truetype'),url({{ asset('/') }}fonts/icomoon.woff)
            format('woff'),url({{ asset('/') }}fonts/icomoon.svg)
            format('svg');
            font-weight:400;
            font-style:normal;
        }
        @font-face {
            font-family:Helvetica;
            font-display:auto;
            src:url({{ asset('/') }}fonts/helvetica.eot);
            src:url({{ asset('/') }}fonts/helvetica.eot)
            format('embedded-opentype'), url({{ asset('/') }}fonts/helvetica.ttf)
            format('truetype'), url({{ asset('/') }}fonts/helvetica.woff)
            format('woff'), url({{ asset('/') }}fonts/helvetica.svg)
            format('svg');
            font-weight:400;
            font-style:normal
        }
        .img-thumb {
            position:relative;
            display:inline-block;
        }
        .quantity-badge {
            position: absolute;
            bottom:2px;
            left:64px;
            background-color:rgba(242,242,242,0.7);
            text-align: center;
            border-radius: 30px 30px 30px 30px;
            border: 1px solid grey;
            padding:10px 15px;
            font-size:20px;
        }
        @media (max-width:767px) {
            .quantity-badge {
                bottom:-10px;
                left:24px;
            }
            .gratisProduct {
                display: none;
            }
        }
        #accordion h3::before {
            content: url('https://api.iconify.design/icomoon-free:arrow-down.svg?height=16');
            vertical-align: -0.125em;
            font-weight: normal;
            margin: 0 10px 0 0;
        }

        .listIcon6 li::before {
            content: "\f00c";
            font-family: "FontAwesome";
            font-weight: normal;
            margin: 0 10px 0 0;
            color: rgb(30, 201, 1) !important;
        }

        #accordion {
            margin: 0 auto;
            width: 80%;
            font-size:16px;
        }

        #accordion h3 {
            text-align: left;
            color: #000000;
            background-color: #F5F5F5;
            font-family: Open Sans;
            font-size: 18px;
            padding: 19.96px;
            border-radius: 2px 2px 0 0;
            font-weight:600;
            cursor: pointer;
        }

        #accordion p {
            margin-bottom:8px;
        }

        #accordion div p {
            padding: 20px;
        }

        html {
            scroll-behavior: smooth;
        }
        #showReviews {
            cursor: pointer;
            text-decoration: underline;
            font-weight: bold;
        }

        #divReviews {
            display: none;
        }

        #showFaq {
            font-weight: bold;
        }

    </style>
</head>
<body class="ordersttemplate order-gs-new ">
<div class="wrapper">
    <main>
        <section class="section-1">
            <div class="container">
                <div class="">
                    @include('components.display_errors')
                    <div id="widget-loader" class="loader-wrapper ">
                        <div class="loader-content">
                            <div class="text"></div>
                            <div class="progress-bar-wrapper">
                                <span class="progress-bar" style="width: 0%"></span>
                            </div>
                        </div>
                    </div>
                    <div class="wysiwyg-content top-header ">
                        <div class="wrap-logo">
                            <p><a href="#"><img src="{{ asset('/').$product->logo_url }}" data-src=""></a></p>
                        </div>
                    </div>
                    <div class="wysiwyg-content steps timeline ">
                        <div class="secure-checkout">
                            <p class="top-img"><img src="{{ asset('/') }}checkoutFiles/shared_files/paypal-v2.png" class="no-lazy"></p>
                            <p><img src="{{ asset('/') }}checkoutFiles/shared_files/creditcard_images.png" class="no-lazy"></p>
                        </div>
                        <ul>
                            <li>
                                <strong>Korak 1<span class="hidden-md-up"> : </span></strong>
                                <span>Izaberite količinu</span>
                            </li>
                            <li>
                                <strong>Korak 2<span class="hidden-md-up"> : </span></strong>
                                <span>Podaci za dostavu</span>
                            </li>
                            <li>
                                <strong>Korak 3<span class="hidden-md-up"> : </span></strong>
                                <span>Potvrda porudžbine</span>
                            </li>
                        </ul>
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->

        {{--<section>--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-12">--}}
                        {{--@if($errors->list->any())--}}
                            {{--<div class="alert alert-danger" role="alert" >--}}
                                {{--{{ $errors->list->first('name') }}<br/>--}}
                                {{--{{ $errors->list->first('email') }}<br/>--}}
                                {{--{{ $errors->list->first('phone') }}<br/>--}}
                                {{--{{ $errors->list->first('shipping_address') }}<br/>--}}
                                {{--{{ $errors->list->first('shipping_city') }}<br/>--}}
                                {{--{{ $errors->list->first('shipping_zip') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        {{--@if($errors->any())--}}
                            {{--<div class="alert alert-danger" role="alert" >--}}
                                {{--<b>{{$errors->first()}}</b>--}}
                            {{--</div>--}}
                        {{--@endif--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}

        <form action="{{$orderRoute}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="discount" value="{{$discount}}"/>
            <input type="hidden" name="variation_id" value="{{$variation_id}}">
            <input type="hidden" name="session_id" value="{{$session_id}}">

            <section class="section-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="step-title">
                                <h2 class="title">
                                    Step 1: <strong>Izaberite količinu</strong>
                                </h2>
                            </div>
                            <div id="js-widget-products" class="product-list products-widget golden-border" data-options="{ }" data-activeclass="">
                                <div class="product-heading">
                                    <div>Proizvod</div>
                                    <div>Cene</div>
                                </div>
                                @foreach($prices as $singlePrice)
                                    @php
                                        $savings = ($singlePrice['originalPrice'] - $singlePrice['amount']) + ($singlePrice['amount'] - $singlePrice['amount']);
                                    @endphp
                                    <div class="productRadioListItem item-{{$singlePrice['quantity']}} @if($singlePrice['is_default']) checked-item @endif ">
                                        <div class="w_radio">
                                            <input type="radio" id="product{{$singlePrice['quantity']}}" name="quantity" class="quantity" value="{{$singlePrice['quantity']}}" data-product-name="{{$singlePrice['quantity']}} x {{ $product->product_name }}" data-product-amount="{{ $singlePrice['amount'] }}" is-free-shipping="{{$singlePrice['is_free_shipping']}}" data-product-quantity="{{$singlePrice['quantity']}}" data-product-currency-code="{{ $singlePrice['currency'] }}" @if($singlePrice['is_default']) checked @endif @if(old('quantity') == $singlePrice['quantity']) checked @endif>
                                            <i class="icon-check"></i>
                                            <label class="js-unitDiscountRate" for="product{{$singlePrice['quantity']}}">
                                                <div class="product-name">
                                                    <p>{{$singlePrice['quantity']}} x {{ $product->product_name }} <strong> @if($singlePrice['is_default']) Ušteda 40% @endif&nbsp;<br></strong>
                                                        <span class="img-thumb"><img src="{{asset('/').$product->product_image}}" data-src=""><span class="quantity-badge">{{$singlePrice['quantity']}}</span></span>
                                                    </p>
                                                    <p>
                                                        @if($singlePrice['is_default'])
                                                            <span class="best-seller-text">Najpopularnije</span>
                                                        @endif
                                                        @if($singlePrice['is_free_shipping'])
                                                            <span class="best-seller-text">Besplatna dostava</span>
                                                        @endif
                                                        <del style="color: #d0021b;">Stara cena:
                                                            <del class="fullPrice">{{$singlePrice['originalPrice']}} {{ $singlePrice['currency'] }}</del>
                                                        </del>
                                                        <strong>Nova cena:
                                                            @if($discount)
                                                            <span style='color:red;text-decoration:line-through'>
                                                              <span style='color:black'>{{$singlePrice['amountBeforeDiscount']}} {{ $singlePrice['currency'] }}</span><br>
                                                            </span>
                                                                {{$singlePrice['amount']}} {{ $singlePrice['currency'] }}
                                                            @else
                                                                <span class="discountedPrice">{{$singlePrice['amount']}} {{ $singlePrice['currency'] }}</span>
                                                            @endif
                                                        </strong>
                                                            Ušteda: <span class="savePrice">{{ $savings }} </span>{{ $singlePrice['currency'] }}
                                                    </p>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <input type="hidden" id="shippingJS" value="{{ $product->shipping_cost }}"/>
                            <div class="wysiwyg-content statistical gs-july-layout ">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Proizvod</th>
                                        <th>Cena</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="tr-name">
                                        <td class="td-name" id="productName"></td>
                                        <td class="td-price" id="productPrice"></td>
                                    </tr>
                                    <tr>
                                        <td class="td-shipping-text">Dostava:</td>
                                        <td class="td-shipping" >
                                            <span id="noFreeShippingDisplay">+ {{ $product->shipping_cost }} {{ $singlePrice['currency'] }}</span>
                                            <span id="freeShippingDisplay" style='color:#29AF5C;'>BESPLATNA DOSTAVA</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table>
                                    <tbody>
                                    <tr height="20px"></tr>
                                    </tbody>
                                    <tfoot style="background-color: rgba(248,231,28,0.2); border: 1px dashed #EA0013; border-radius: 3px;">
                                    <tr style="margin-top: 9px">
                                        <td style="">
                                            <p class="your-save">popust</p>
                                        </td>
                                        <td style="padding-bottom: 20px;">
                                            <p style="color: red; font-size: 18px; line-height: 22px; margin-right: 10px">Ušteda: <span class="discount-total" id="youSaveDownDisplay"></span></p>
                                            <p style="font-size: 18px; line-height: 22px; margin-right: 10px">UKUPNO: <span class="grand-total" id="totalDownDisplay"></span></p>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div> <!--/span-->

                        <input type="hidden" id="totalPriceHidden" name="totalPrice" value=""/>

                        <div class="col-md-6">
                            <div class="w_button btn-order-now btn-next">
                                <button id="showForm">
                                    <span>UNESI PODATKE</span>
                                </button>
                            </div>
                            <div class="orderst-form hidden">

                                <div class="step-title js-customer-title">
                                    <h2 class="title">
                                        Korak 2: <strong>Podaci za dostavu</strong>
                                    </h2>
                                </div>
                                <div class="widget-customer-form">

                                    <div class="full-name">
                                        <div class="form-group">
                                            <input id="customer_firstname" value="{{ old('name') }}" name="name" class="shipping-firstname" type="text" maxlength="30" placeholder="Ime i prezime" required="">
                                            <span class="error-message hidden">Ovo polje je obavezno.</span>
                                        </div>
                                    </div>

                                    <div class="form-group form-group--email">
                                        <input id="customer_email" value="{{ old('email') }}" name="email" class="customer-email" type="email" maxlength="200" placeholder="Email adresa" required="" type="email">
                                        <span class="error-message hidden">Molimo unesite validnu email adresu.</span>
                                    </div>

                                    <!-- End -->
                                    <div class="form-group form-group--phone">
                                        <input id="customer_phone" value="{{ old('phone') }}" name="phone" class="customer-phone" type="tel" maxlength="20" placeholder="Broj telefona" required="">
                                        <span class="error-message hidden">Molimo unesite validan broj telefona.</span>
                                    </div>

                                </div>
                                <div class="widget-shipping-form hidden">

                                    <div class="form-group">
                                        <!-- <label for="shipping_address1">Address Line 1</label> -->
                                        <input id="shipping_address" value="{{ old('shipping_address') }}" name="shipping_address" class="shipping-address" type="text" maxlength="80" placeholder="Ulica i broj" required="">
                                        <span class="error-message hidden">Ovo polje je obavezno.</span>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="shipping_city">City</label> -->
                                        <input id="shipping_city" value="{{ old('shipping_city') }}" name="shipping_city" class="shipping-city" type="text" maxlength="30" placeholder="Grad" required="">
                                        <span class="error-message hidden">Ovo polje je obavezno.</span>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="shipping_postal">Zip/Postcode</label> -->
                                        <input id="shipping_zip" value="{{ old('shipping_zip') }}" name="shipping_zip" class="shipping-postal" type="text" placeholder="Postanski broj" required="" pattern="\d*" maxlength="5">
                                        {{--<span class="error-message hidden">Ovo polje je obavezno.</span>--}}
                                    </div>

                                </div>

                                <div id="" class="w_button btn-order-now">
                                    <button type="submit">
                                        <span>ZAVRŠI KUPOVINU</span>
                                    </button>
                                </div>
                            </div>

                            <input type="hidden" name="id_product" value="{{ $product->id_product }}"/>
                            <input type="hidden" name="country_id" value="{{ $product->country_id }}"/>

                            <script>
                                $('#showForm').click(function() {
                                    $('.orderst-form').removeClass('hidden');
                                    $('#showForm').hide();
                                })
                            </script>

                            <div class="js-currency-usd currency">
                                <p class="title">
                                    Sve cene su izrazene u <strong>dinarima</strong>
                                </p>
                            </div>
                            <div class="guarantee-block ">
                                <div class="w_outer">
                                    <div class="w_inner">
                                        <div class="w_item ">
                                            <div class="w_thumb">
                                                <img src="{{ asset('/') }}checkoutFiles/shared_files/thegadgetreview_guarantee.png" data-src="" alt="" class="img-view">
                                            </div>
                                            <div class="w_desc">
                                                <p>{{ $product->brand_name }} daje rok od 14 dana za vraćanje neiskorišćenih paketa. Samo nam pošaljite proizvod nazad i dobićete zamenu ili potpuni povraćaj novca.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!--/span-->
                    </div> <!--/row-->
                </div> <!--/container-->
            </section> <!-- /row-wrapper-->

        </form>

        <section class="section-3">
            <div class="container">
                <div class="">
                    <div class="comments ">
                        <h2 class="w_main_title"><span class="text">Želite da znate šta drugi kažu o nama? <br> <span id="showReviews">Pogledaj utiske kupaca</span></span></h2>
                        <div class="w_outer" id="divReviews">
                            <div class="w_inner">
                                @isset($productReviews)
                                    @foreach($productReviews as $review)
                                    <div class="w_item ">
                                        <div class="w_thumb">
                                            <img src="{{asset('/').$review->review_image}}" data-src="" alt="customer1" class="img-view">
                                        </div>
                                        <div class="w_content_wrap">
                                            <div class="w_desc">
                                                <p><span class="star" style="color: #993300;">Star</span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></p>
                                                <p><strong>Verifikovana kupovina</strong></p>
                                                <p style="color: #5b5b5b;">{{$review->review_text}}</p>
                                                <p style="text-align: right;"><strong>{{$review->review_name}}</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @endisset
                            </div>
                        </div>
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
        <section class="section-4">
            <div class="container">
                <div class="">
                    <div class="faq ">
                        <h2 class="w_main_title"><span class="text">Imate pitanje?  <span id="showFaq">Pogledaj Najčešće postavljena pitanja<span></span></span></span></h2>
                        <div id="accordion">
                            <h3>Da li mogu da otkažem narudžbinu nakon kupovine sa sajta? - Možete.</h3>
                            <div>
                                <p>Nudimo otkazivanje narudžbina u roku od 24 sata nakon kupovine. Ukoliko se predomislite u tom roku - pošaljite nam poruku i mi ćemo otkazati porudžbinu.</p>
                            </div>
                            <h3>Kako da vratim ili zamenim proizvod? - Naša garancija.</h3>
                            <div>
                                <p>Naša politika vraćanja traje <strong>30 dana</strong>&nbsp;počevši od dana kada se naš paket isporuči na Vašu adresu.<br><br>
                                    Prihvatamo povrate svih neoštećenih predmeta u roku od 30 dana kako bismo ispunili očekivanja kupaca i osigurali Vaše zadovoljstvo kupovinom.<br><br>
                                    Uvereni smo da će naša ponuda proizvoda ispuniti ili premašiti Vaša očekivanja, ali ukoliko ipak želite da vratite proizvod - obratite se našem timu za podršku na <strong>info@wombatsbrand.com</strong> i mi ćemo odgovoriti na Vaš zahtev u roku od 24h.<br><br></p>
                            </div>
                            <h3>Koje su mogućnosti isporuke?</h3>
                            <div>
                                <p>Sve porudžbine koje primimo u toku jednog dana, šaljemo narednog radnog dana. Nakon toga, kurirska služba u najvećem brojem slučaja dostavlja Vam paket narednog dana. Vikendom ne šaljemo pošiljke.</p>
                            </div>
                            <h3>Šta ako predmet koji sam naručio stigne slomljen ili oštećen?</h3>
                            <div>
                                <p>Ukoliko je proizvod pokvaren ili vam ne odgovara, možemo ga zameniti i u tom slučaju ne snosite troškove poštarine.</p>
                            </div>
                        </div>
                    </div>
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->

        <script type="text/javascript">

            $( function() {
                $( "#accordion" ).accordion();
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();
                        document.querySelector(this.getAttribute('href')).scrollIntoView({
                            behavior: 'smooth'
                        });
                    });
                });
            });

            $('#showFaq').click(function() {
                $('#accordion').toggle("slow");
            });

            $('#showReviews').click(function() {
                $('#divReviews').toggle("slow");
            });

            $( function() {
                $( "#divFaq" ).accordion();
            } );

            $('.quantity').click(function () {
                $('.productRadioListItem').removeClass('checked-item');
                $(this).closest(".productRadioListItem").addClass('checked-item');
            })

        </script>
        <section class="section-5">
            <div class="container">
                <div class="">
                </div> <!--/span-->
            </div> <!--/container-->
        </section> <!-- /row-wrapper-->
    </main>
    <footer>
        <div class="container">
            <div class="footer-inner">
                <p class="copyright"> ©{{ now()->year }} - {{ isset($product->brand_name) ? $product->brand_name : ''}}</p><br>
                <div class="nav-footer">

                    <div class="nav clearfix">
                        <ul>

                        </ul>
                    </div>
                </div>
                <div class="DMCA_Logo">
                    <a class="no-tracking" href="" title="DMCA Protection Status" target="_blank">
                        <img src="{{ asset('/') }}checkoutFiles/shared_files/dmcaBadge.png" data-src="" alt="DMCA Protection Status">
                    </a>
                </div>

            </div>
        </div>
    </footer>
    @if($product->brand_name === "Flexonik")
{{--        @include('components.company_footer')--}}
    @endif
</div>

@include('components.change_quantity_script')

{{--@include('components.includeAbandonedCart')--}}

</body>

</html>
