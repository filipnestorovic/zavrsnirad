<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=320, user-scalable=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="shortcut icon" href="{{ asset('/') }}flexovalFiles/backsupport/moJhto8uVNXI.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}flexovalFiles/backsupport/normalize.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexovalFiles/backsupport/main.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexovalFiles/backsupport/slick.min.css">
    <script type="text/javascript" src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js"></script>
    <style>
        @font-face {
            font-family: 'PF Din Text Cond Pro';
            src: url("{{ asset('/') }}fonts/PFDinTextCondPro-Medium.woff") format('woff');
            font-weight: 500;
            font-style: normal;
        }
        .title, .timer > div, .form {
            background: #a82293; /* Old browsers */
            background: -moz-linear-gradient(left, #a82293 0%, #a82291 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(left, #a82293 0%,#a82291 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to right, #a82293 0%,#a82291 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a82293', endColorstr='#a82291',GradientType=1 ); /* IE6-9 */
        }
        .title h1 {
            color: #fff;
        }

        .title h2 {
            color: #fff;
        }
    </style>
</head>
<body>
<section class="title">
    <h1 class="pf"><p> Magic back support </p> <p> Free Delivery All over UAE </p></h1>
    <h2><p> The Magic Back Support is an affordable, safe way to stretch </p></h2>
</section>
<section class="photo_single">
    <img alt="Image" height="" src="{{ asset('/') }}flexovalFiles/backsupport/b0uehnGRw18l.png">
</section>
<section class="prices">
    <ul>
        <li><div><p>Old price</p></div><strong class="pf"><p>{{ $prices[1]['originalPrice'] }} RSD</p></strong></li>
        <li><div><p>Sale</p></div><strong class="pf"><p>50%</p></strong></li>
        <li><div><p>NEW PRICE</p></div><strong class="pf"><p>{{ $prices[1]['amount'] }} RSD</p></strong></li>
    </ul>
</section>
<section class="timer">
    <div class="container">
        <a href="{{$checkoutView}}"><p class="pf">Poruči odmah</p></a>
    </div>
</section>
{{--<section class="bullets" style="padding-top: 40px">--}}
    {{--<div class="container">--}}
        {{--<ul>--}}
            {{--<li>--}}
                {{--<h3 class="pf"><p> Free Delivery within <br>1-2 days in UAE </p></h3>--}}
                {{--<div><p></p></div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<h3 class="pf"><p> Cash on Delivery Payment </p></h3>--}}
                {{--<div><p></p></div>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</section>--}}
<section class="video">
    <div><img alt="Image" height="" src="{{ asset('/') }}flexovalFiles/backsupport/lHDG6BdjDLOz.gif"></div>
</section>
<section class="slider">
    <div id="slider_ref"  style="display: none" class="md_slide"><p></p></div>
    <div class="wrapper of-list" id="slider">
        <div class="md_slide"><i></i>
            <img alt="Image" height="" src="{{ asset('/') }}flexovalFiles/backsupport/xjqBHBArtv7p.jpg"></div>
        <div class="md_slide"><i></i>
            <img alt="Image" height="" src="{{ asset('/') }}flexovalFiles/backsupport/IGai2jmRFkt5.jpg"></div>
        <div class="md_slide"><i></i>
            <img alt="Image" height="" src="{{ asset('/') }}flexovalFiles/backsupport/ysOGA9n69LC2.jpg">
            <img alt="Image" height="" src="{{ asset('/') }}flexovalFiles/backsupport/XcemdgYMrydI.webp"></div>
        <div class="md_slide"><i></i>
            <img alt="Image" height="" src="{{ asset('/') }}flexovalFiles/backsupport/k5TuYO5xKUvV.png"></div>
        <div class="md_slide"><i></i>
            <img alt="Image" height="" src="{{ asset('/') }}flexovalFiles/backsupport/moJhto8uVNXI.jpg"></div>
        <div class="md_slide"><i></i>
            <img alt="Image" height="" src="{{ asset('/') }}flexovalFiles/backsupport/oLQuDy4J5G9t.png"></div>
    </div>
    <div class="slider_mini" id="slider_nav" style="display: none;">
        <div class="md_slide_mini"><i></i>
            <img alt="Image" height="" src="{{ asset('/') }}flexovalFiles/backsupport/xjqBHBArtv7p.jpg"></div>
        <div class="md_slide_mini"><i></i>
            <img alt="Image" height="" src="{{ asset('/') }}flexovalFiles/backsupport/IGai2jmRFkt5.jpg"></div>
        <div class="md_slide_mini"><i></i>
            <img alt="Image" height="" src="{{ asset('/') }}flexovalFiles/backsupport/ysOGA9n69LC2.jpg">
            <img alt="Image" height="" src="{{ asset('/') }}flexovalFiles/backsupport/XcemdgYMrydI.webp"></div>
        <div class="md_slide_mini"><i></i>
            <img alt="Image" height="" src="{{ asset('/') }}flexovalFiles/backsupport/k5TuYO5xKUvV.png"></div>
        <div class="md_slide_mini"><i></i>
            <img alt="Image" height="" src="{{ asset('/') }}flexovalFiles/backsupport/moJhto8uVNXI.jpg"></div>
        <div class="md_slide_mini"><i></i>
            <img alt="Image" height="" src="{{ asset('/') }}flexovalFiles/backsupport/oLQuDy4J5G9t.png"></div>
    </div>
</section>
<section class="timer">
    <div class="container">
        <a href="{{$checkoutView}}"><p class="pf">Poruči odmah</p></a>
    </div>
</section>
<section class="steps">
    <div class="container">
        <h3 class="pf"><p> Cash on delivery or Pay Online by Card </p></h3>
        <ul>
            <li>
                <i><img height="297" src="{{ asset('/') }}flexovalFiles/backsupport/nvmq2nlmehd25nwyvlrk.svg" width="297"></i>
                <div><p> Place an order in our website </p></div>
            </li>
            <li>
                <i><img height="474" src="{{ asset('/') }}flexovalFiles/backsupport/b1s2lowcacvbkanzqcgf.svg" width="474"></i>
                <div><p>Our manager will contact you</p></div>
            </li>
            <li>
                <i><img height="491" src="{{ asset('/') }}flexovalFiles/backsupport/a5ses94o1r2ufllpqqv0.svg" width="491"></i>
                <div><p> Free delivery in UAE! </p></div>
            </li>
            <li>
                <i><img height="32" src="{{ asset('/') }}flexovalFiles/backsupport/tcglxzvbvvlr8rx4i4vk.svg" width="32"></i>
                <div><p> Pay cash on delivery! </p></div>
            </li>
        </ul>
    </div>
</section>
<section class="reviews">
    <div class="container">
        <h2 class="pf"><p> Testimonials </p></h2>
        <div class='wrapper'>
            <div class='review'>
                <div class="review_img"><img alt="Image" src="{{ asset('/') }}flexovalFiles/backsupport/KdWIxoUqDLTp.png"></div>
                <div style="clear: both"></div>
            </div>
            <div class='review'>
                <div class="review_img"><img alt="Image" src="{{ asset('/') }}flexovalFiles/backsupport/wGLFgjrUXzL4.png"></div>
                <div style="clear: both"></div>
            </div>
            <div class='review'>
                <div class="review_img"><img alt="Image" src="{{ asset('/') }}flexovalFiles/backsupport/NAX1kfXj6jo5.png"></div>
                <div style="clear: both"></div>
            </div>
            <div class='review'>
                <div class="review_img"><img alt="Image" src="{{ asset('/') }}flexovalFiles/backsupport/hkVJT4lvnz1B.png"></div>
                <div style="clear: both"></div>
            </div>
        </div>
    </div>
</section>
<section class="title">
    <h1 class="pf"><p> Place your order and consultant will text you on whatsapp to specify and confirm order </p></h1>
    <h2></h2>
</section>
<section class="photo_single"><img alt="Image" height="" src="{{ asset('/') }}flexovalFiles/backsupport/whCzEEi6Oi2F.png"></section>
<section class="prices">
    <ul>
        <li><div><p>Old price</p></div><strong class="pf"><p>{{ $prices[1]['originalPrice'] }} RSD </p></strong></li>
        <li><div><p>Sale</p></div><strong class="pf"><p>50%</p></strong></li>
        <li><div><p>NEW PRICE</p></div><strong class="pf"><p>{{ $prices[1]['amount'] }} RSD</p></strong></li>
    </ul>
</section>
<section class="timer">
    <div class="container">
        <a href="{{$checkoutView}}"><p class="pf">Poruči odmah</p></a>
    </div>
</section>
<script src="{{ asset('/') }}flexovalFiles/backsupport/slick.min.js"></script>
<script>
    $(document).ready(function () {
        $('.reviews .wrapper').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true,
            dots: true,
            adaptiveHeight: true
        });
    });
</script>
</body>
</html>