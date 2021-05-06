<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, minimal-ui, user-scalable=no">
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('/') }}purplerelaxFiles/shared_files/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/shared_files/site.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/shared_files/index.min.css">
    @include('lander.purplerelax.components.header_fonts')
    <style>
        .common-block ul li {
            position: relative;
            padding: 0 0 15px 25px;
            background: url({{ asset('/') }}purplerelaxFiles/shared_files/sec1-icon.png) top 5px left/15px no-repeat
        }
        .section-6 {
            background: url({{ asset('/') }}purplerelaxFiles/shared_files/bg_customer_mb.jpg) right top/contain no-repeat #edf3f7
        }
        @media (min-width:992px) {
            .section-6 {
                background: url({{ asset('/') }}purplerelaxFiles/shared_files/bg_customer.jpg) center bottom/cover no-repeat #edf3f7
            }
        }
    </style>
</head>
<body class="indextemplate index ">
<div class="wrapper">
@include('components.display_errors')
<header>
    <div class="container">
        <div class="header-inner">
            <div class="logo">
                <img src="{{ asset('/') }}purplerelaxFiles/shared_files/logo.png" alt="Logo" class="no-lazy">
            </div>
            @if($product->country_code === "rs")
                <div class="right-hd">Nabavi <b>{{ $product->product_name }}</b> već danas!<a class="btn" href="{{$checkoutView}}">KUPI ODMAH</a></div>
            @elseif($product->country_code === "bg")
                <div class="right-hd">Получи твоя <b>{{ $product->product_name }}</b> днес!<a class="btn" href="{{$checkoutView}}">КУПИ СЕГА</a></div>
            @endif
        </div>
    </div>
</header>