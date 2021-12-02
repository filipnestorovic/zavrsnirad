<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/x-icon" href="{{ asset('/') }}flexovalFiles/aculief/aculief-favicon-01-1.png"/>
    <link rel='stylesheet' id='wp-block-library-css' href='{{ asset('/') }}flexovalFiles/aculief/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='main-css' href='{{ asset('/') }}flexovalFiles/aculief/main.css' type='text/css' media='all' />
    <link rel='stylesheet' id='offers-css' href='{{ asset('/') }}flexovalFiles/aculief/offer.css' type='text/css' media='all' />
    <link rel='stylesheet' id='noto-serif-css' href='https://fonts.googleapis.com/css2?family=Noto+Serif%3Awght%40300%3B400%3B600%3B700%3B800&amp;ver=5.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='google-open-sans-css' href='https://fonts.googleapis.com/css2?family=Open+Sans%3Aital%2Cwght%400%2C300%3B0%2C400%3B0%2C600%3B0%2C700%3B0%2C800%3B1%2C400&amp;display=swap&amp;ver=5.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='rubik-css' href='https://fonts.googleapis.com/css2?family=Rubik%3Awght%40300%3B400%3B600%3B700%3B800&amp;ver=5.8.2' type='text/css' media='all' />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                <h1 id="headline" class="body-headline" data-variation='[]'>Say Goodbye To Headaches & Migraines In Minutes!</h1>
                <h2 id="subheadline" class="body-subheadline " data-variation='[]'>The Natural, Drug-Free Solution You’ve Been Waiting For</h2>
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
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-02-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-2"
                                             srcset="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-02-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-02-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-02-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-02-180x180.jpg 180w"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-03-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-3"
                                             srcset="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-03-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-03-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-03-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-03-180x180.jpg 180w"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-05-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-4"
                                             srcset="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-05-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-05-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-05-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-05-180x180.jpg 180w"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-06-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-6"
                                             srcset="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-06-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-06-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-06-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-06-180x180.jpg 180w"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-07-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-7"
                                             srcset="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-07-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-07-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-07-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-07-180x180.jpg 180w"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-08-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             id="guGallery-1-thumbnail-8"
                                             srcset="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-08-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-08-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-08-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-08-180x180.jpg 180w"
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 no-padding">
                            <div class="product-info-container">
                                <div class="d-md-none rtl-text-centered">
                                    <div class="button" style="background: #25ae4e">
                                        <a href="#offer">Get Aculief Now!</a>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="info-padding">
                                        <p>Aculief is a patented, award-winning acupressure device that <strong>provides drug-free headache and migraine relief – FAST!</strong></p>
                                        <p>It works by applying pressure to the LI4 pressure point (located on your hand between the thumb and forefinger), which has been used for thousands of years to treat headaches and provide tension relief.</p>
                                        <p>It’s <strong>doctor-approved and recommended</strong> for effective self-treatment.</p>
                                    </div>
                                </div>
                                <div class="info d-none d-lg-block">
                                </div>
                                <div class="product-description-list">
                                    <ul>
                                        <li><b>Why It Works</b> – Pressure points are scientifically proven to help different parts of our bodies communicate with each other. By putting pressure on one part of the body, it can quickly relieve pain elsewhere. This is exactly how Aculief works and why it’s so effective.</li>
                                        <li><b>Feel Relief In Minutes (Works Out Of The Box)!</b> – Simply place Aculief snugly on your non-dominant hand and start feeling relief in as little as 1- 3 minutes.</li>
                                        <li><b>Say Goodbye To Over-The-Counter Drugs.</b> – With Aculief, there’s nothing to ingest and no harmful side effects. Just proven science that provides natural and fast pain relief.<sup>1</sup></li>
                                        <li><b>Lasts Forever</b> – Once you own Aculief, you’ll enjoy headache-free days/nights for life!</li>
                                        <li><b>Take It Anywhere!</b> – On-the-go design makes it easy to take Aculief wherever life takes you! Easily store in your car, wallet, purse, or pocket! It’s also 100% waterproof and designed for any lifestyle – active or not</li>
                                        <li><b>Fits Any Hand Size</b> – Aculief was purposely designed to be a universal one size fits all and comfortable for everyone.</li>
                                        <li><b>Multiple Colors Available</b> – Aculief comes in a variety of colors depending on your preference and style (available during checkout!)</li>
                                        <li><b>60-Day, 100% Money Back Guarantee</b> – If for any reason you’re not 100% satisfied with your Aculief, you can easily return it, hassle-free!</li>
                                    </ul>
                                </div>
                                <div class="product-description-list d-none d-md-block d-lg-block">
                                </div>
                                <div class="rtl-text-centered">
                                    <div class="button" style="background: #25ae4e;">
                                        <a href="#offer">Get Aculief Now!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="featured-in">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="featured-text"><span>As Featured In</span></h4>
                            <div class="row">
                                <div class="logo-strip" data-item-count="5">
                                    <div class="image" style="background-image: url('{{ asset('/') }}flexovalFiles/aculief/made-in-the-usa.png'); max-height: 75px;max-width: 140px;">
                                    </div>
                                    <div class="image" style="background-image: url('{{ asset('/') }}flexovalFiles/aculief/yahoo.png'); max-height: 75px;max-width: 194px;">
                                        <a target="_blank" href="">&nbsp;</a>
                                    </div>
                                    <div class="image" style="background-image: url('{{ asset('/') }}flexovalFiles/aculief/the-doctors.png'); max-height: 75px;max-width: 172px;">
                                        <a target="_blank" href="">&nbsp;</a>
                                    </div>
                                    <div class="image" style="background-image: url('{{ asset('/') }}flexovalFiles/aculief/hallmark-channel.png'); max-height: 75px;max-width: 194px;">
                                        <a target="_blank" href="">&nbsp;</a>
                                    </div>
                                    <div class="image" style="background-image: url('{{ asset('/') }}flexovalFiles/aculief/the-wall-street-journal.png'); max-height: 75px;max-width: 182px;">
                                        <a target="_blank" href="">&nbsp;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section id="reviews" data-layout="1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 id="reviews_headline" class="" data-alts="[]">Here’s Why Customers Love Aculief…</h2>
                        </div>
                    </div>
                    <div class="testimonials">
                        <div id="testimonial-1" class="testimonial-block">
                            <div class="rating">
                                <div class="stars">
                                    <img src="{{ asset('/') }}flexovalFiles/aculief/five-stars.jpg">
                                    <div class="star-count">
                                        5.0 star rating
                                    </div>
                                </div>
                                <div class="user">
                                    <strong>Matt Besley</strong>
                                    <div class="verified">
                                        Verified Buyer
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <h4>
                                    <a target="_blank" href="">
                                        “Works Great” </a>
                                </h4>
                                <div class="copyblock">
                                    <p>I found this product after my doctor told me I should stop taking so much Advil for my headaches. I was skeptical that this product would work for my level of pain, but gave it a try to see what would happen. I was very impressed with how much relief it provided for my pain. I have used it several times now and have been very happy with the results each time. If you are like me and suffer from chronic pain and headaches, you should give this product a try. You never know how much it could help you!</p>
                                </div>
                            </div>
                        </div>
                        <div id="testimonial-2" class="testimonial-block">
                            <div class="rating">
                                <div class="stars">
                                    <img src="{{ asset('/') }}flexovalFiles/aculief/five-stars.jpg">
                                    <div class="star-count">
                                        5.0 star rating
                                    </div>
                                </div>
                                <div class="user">
                                    <strong>Wendy</strong>
                                    <div class="verified">
                                        Verified Buyer
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <h4>
                                    <a target="_blank" href="">
                                        “You should give this product a try!” </a>
                                </h4>
                                <div class="copyblock">
                                    <p>I waited a bit to give this review, to check a few things. 1. Was it going to stretch out (because I have thick webbing in my hand) and not bounce back? Nope! It does stretch out while keeping good pressure on, then when you take it off, it eases back to it’s original state. CHECK! 2. Would it work? Works FANTASTIC on headaches and pretty good on anxiety and stress as well. It’s not a cure all. It does help. A LOT. 3. Doesn’t feel cheap. Yes, it’s a small piece of simple technology, but I never feel like it’s about to break. It feels solid and built for years of use. Overall, happy with it!</p>
                                </div>
                            </div>
                        </div>
                        <div id="testimonial-3" class="testimonial-block">
                            <div class="rating">
                                <div class="stars">
                                    <img src="{{ asset('/') }}flexovalFiles/aculief/five-stars.jpg">
                                    <div class="star-count">
                                        5.0 star rating
                                    </div>
                                </div>
                                <div class="user">
                                    <strong>Samantha Merrill-Hicks</strong>
                                    <div class="verified">
                                        Verified Buyer
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <h4>
                                    <a target="_blank" href="">
                                        “Seriously... it works!” </a>
                                </h4>
                                <div class="copyblock">
                                    <p>I have suffered from migraines for many years – every day I get at least a headache or migraine. I have prescribed medication that takes the edge off most days, but never fully. I literally laughed out loud when I heard what Aculief’s intent was and thought it was bogus. However, I was up for anything! Just 30 seconds into using this product I became a lifer. I use Aculief anytime I am getting head pain and it will relieve the pain – sometimes if the pain was already dull enough, taking it away completely – if you have read until this point, I haven’t felt that in years. This product is 5 stars+, thank you!</p>
                                </div>
                            </div>
                        </div>
                        <div id="testimonial-4" class="testimonial-block">
                            <div class="rating">
                                <div class="stars">
                                    <img src="{{ asset('/') }}flexovalFiles/aculief/five-stars.jpg">
                                    <div class="star-count">
                                        5.0 star rating
                                    </div>
                                </div>
                                <div class="user">
                                    <strong>Maggie</strong>
                                    <div class="verified">
                                        Verified Buyer
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <h4>
                                    <a target="_blank" href="">
                                        “Aculief has given my life back!” </a>
                                </h4>
                                <div class="copyblock">
                                    <p>I have suffered from chronic migraines for years. I have been out of work for nearly a year because of it. I ordered Aculief because I figured it was worth a try. Let me tell you-Aculief is AMAZING! I am able to wear it at the onset of a headache and I can feel the pain decreasing within minutes! I will be recommending this product to migraine sufferers from now on. I plan to share this Aculief with my neurologist as well. Thank you for helping me begin the journey of getting my life back!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="clearfix"></div>
        <div>
            <form action="{{$orderRoute}}" method="POST">
                {{ csrf_field() }}
                @include('lander.naturapharm.components.form_hidden_fields')
                <div class="col-md-12 allProductsHolder" id="allProductsHolder">
                    <div class="step-title js-customer-title" style="padding-top: 10px;">
                        <h2 class="title">
                            Korak 1: <strong>Izaberite količinu</strong>
                        </h2>
                    </div>
                    @php
                        $columns = number_format(12/count($prices), 0);
                    @endphp
                    @foreach($prices as $singlePrice)
                        <div class="col-md-{{$columns}} productHolder text-center">
                            <input type="radio" id="product{{$singlePrice['quantity']}}" name="quantity" class="quantity" value="{{$singlePrice['quantity']}}" @if(old('quantity') == $singlePrice['quantity']) checked @elseif($singlePrice['is_default']) checked @endif>
                            <label class="productLabel" for="product{{$singlePrice['quantity']}}">
                                @if($singlePrice['is_default'])
                                    <span class="best-option-badge"><img src="{{ asset('/')}}thankyouFiles/thankyouUpSell/best-offer-badge.png"/></span>
                                @endif
                                <div class="img-holder">
                                    <img src="{{asset('/').$product->product_image}}">
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
                                <div class="productOrder">
                                    <div class="productOrderBtn">PORUČI</div>
                                </div>
                            </label>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-12" id="scroll-form">
                    <div class="orderst-form">
                        <div class="step-title js-customer-title">
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
        .orderst-form {
            display: none;
        }
        .allProductsHolder {
            margin-bottom: 20px;
            width: 100%;
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
            background-color: rgb(26, 184, 0);
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
            background-color: rgb(26, 184, 0);
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
<script type='text/javascript' src='{{ asset('/') }}flexovalFiles/aculief/enquire.js' id='enquire-script-js'></script>
<script type='text/javascript' src='{{ asset('/') }}flexovalFiles/aculief/slick.min.js' id='slideshow-script-js'></script>
@include('components.pixel_footer')
</body>
</html>