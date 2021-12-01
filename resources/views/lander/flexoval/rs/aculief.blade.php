<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/x-icon" href="{{ asset('/') }}flexovalFiles/aculief/aculief-favicon-01-1.png"/>

    {{--<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('/') }}flexovalFiles/aculief/aculief-favicon-01-1.png">--}}
    {{--<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('/') }}flexovalFiles/aculief/aculief-favicon-01-1.png">--}}
    {{--<link rel="apple-touch-icon-precomposed" href="{{ asset('/') }}flexovalFiles/aculief/aculief-favicon-01-1.png">--}}

    {{--
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    --}}
    {{--
    <link rel="pingback" href="https://getaculief.io/xmlrpc.php" />
    --}}
    {{--
    <link rel="stylesheet" type="text/css" href="../wp-content/themes/giddyupio-prototype/style.css" />
    --}}
    {{--<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>--}}
    {{--<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>--}}
    {{--
    <meta name='robots' content='max-image-preview:large' />
    --}}
    {{--
    <link rel='dns-prefetch' href='http://ajax.googleapis.com/' />
    --}}
    {{--
    <link rel='dns-prefetch' href='http://cdn.giddyup.io/' />
    --}}
    {{--
    <link rel='dns-prefetch' href='http://www.gu-ecom.com/' />
    --}}
    {{--
    <link rel='dns-prefetch' href='http://fast.wistia.com/' />
    --}}
    {{--
    <link rel='dns-prefetch' href='http://c.sproutvideo.com/' />
    --}}
    {{--
    <link rel='dns-prefetch' href='http://js.giddyup.io/' />
    --}}
    {{--
    <link rel='dns-prefetch' href='http://cdn.jsdelivr.net/' />
    --}}
    {{--
    <link rel='dns-prefetch' href='http://cdn.polyfill.io/' />
    --}}
    {{--
    <link rel='dns-prefetch' href='http://www.paypal.com/' />
    --}}
    {{--
    <link rel='dns-prefetch' href='http://js.stripe.com/' />
    --}}
    {{--
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    --}}
    {{--
    <link rel='dns-prefetch' href='http://s.w.org/' />
    --}}
    {{--<link rel="alternate" type="application/rss+xml" title="Aculief | Naturally Relieve Headaches &amp; Migraines in Minutes! &raquo; Feed" href="https://getaculief.io/feed/" />--}}
    {{--<link rel="alternate" type="application/rss+xml" title="Aculief | Naturally Relieve Headaches &amp; Migraines in Minutes! &raquo; Comments Feed" href="https://getaculief.io/comments/feed/" />--}}

    {{--<link rel='stylesheet' id='editor_plus-plugin-frontend-style-css' href='../wp-content/plugins/editorplus/dist/gutenberg-frontend84ee.css?ver=61a752d974f97' type='text/css' media='' />--}}

    {{--<style id='editor_plus-plugin-frontend-style-inline-css' type='text/css'>--}}
        {{--@font-face {--}}
            {{--font-family: 'eplus-icon';--}}
            {{--src: url('https://getaculief.io/wp-content/plugins/editorplus/extensions/icon_inserter/fonts/eplus-icon.eot?xs1351');--}}
            {{--src: url('https://getaculief.io/wp-content/plugins/editorplus/extensions/icon_inserter/fonts/eplus-icon.eot?xs1351#iefix')--}}
            {{--format('embedded-opentype'),--}}
            {{--url('https://getaculief.io/wp-content/plugins/editorplus/extensions/icon_inserter/fonts/eplus-icon.ttf?xs1351') format('truetype'),--}}
            {{--url('https://getaculief.io/wp-content/plugins/editorplus/extensions/icon_inserter/fonts/eplus-icon.woff?xs1351') format('woff'),--}}
            {{--url('https://getaculief.io/wp-content/plugins/editorplus/extensions/icon_inserter/fonts/eplus-icon.svg?xs1351#eplus-icon') format('svg');--}}
            {{--font-weight: normal;--}}
            {{--font-style: normal;--}}
            {{--font-display: block;--}}
        {{--}--}}
    {{--</style>--}}

    {{--<link rel='stylesheet' id='wp-block-library-css' href='{{ asset('/') }}flexovalFiles/aculief/style.css' type='text/css' media='all' />--}}
    {{--<link rel='stylesheet' id='main-css' href='{{ asset('/') }}flexovalFiles/aculief/main.css' type='text/css' media='all' />--}}
    {{--<link rel='stylesheet' id='offers-css' href='{{ asset('/') }}flexovalFiles/aculief/offer.css' type='text/css' media='all' />--}}

    <link rel='stylesheet' id='noto-serif-css' href='https://fonts.googleapis.com/css2?family=Noto+Serif%3Awght%40300%3B400%3B600%3B700%3B800&amp;ver=5.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='google-open-sans-css' href='https://fonts.googleapis.com/css2?family=Open+Sans%3Aital%2Cwght%400%2C300%3B0%2C400%3B0%2C600%3B0%2C700%3B0%2C800%3B1%2C400&amp;display=swap&amp;ver=5.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='rubik-css' href='https://fonts.googleapis.com/css2?family=Rubik%3Awght%40300%3B400%3B600%3B700%3B800&amp;ver=5.8.2' type='text/css' media='all' />

    {{--<script type='text/javascript' src='../wp-content/themes/giddyupio-prototype/js/header_scripts/sitevars_options5152.js?ver=1.0' id='sitevar_options-js'></script>--}}
    {{--<script type='text/javascript' src='../../cdn.giddyup.io/unified-frontend-v2prod/scripts/logging/logger.min5152.js?ver=1.0' id='gu_logging-js'></script>--}}
    {{--<script type='text/javascript' src='../../www.gu-ecom.com/scripts/sdk/everflow5152.js?ver=1.0' id='everflow-js'></script>--}}
    {{--<script type='text/javascript' src='../../cdn.giddyup.io/unified-frontend-v2prod/scripts/guCommonTracking.min5152.js?ver=1.0' id='guCommonTracking-js'></script>--}}
    {{--<script type='text/javascript' src='../../fast.wistia.com/assets/external/E-v15152.js?ver=1.0' id='wistia_scripts-js'></script>--}}
    {{--<script type='text/javascript' src='../../c.sproutvideo.com/player_api5152.js?ver=1.0' id='sprout_scripts-js'></script>--}}
    {{--<script type='text/javascript' src='../../cdn.giddyup.io/unified-frontend-v2prod/scripts/experimentation/experimentation.min080f.js?ver=5.8.2' id='giddyp-experimentation-js'></script>--}}
    {{--<script type='text/javascript' src='../wp-content/themes/giddyupio-prototype/dist/assets/js/header_scripts.min5152.js?ver=1.0' id='header_scripts-js'></script>--}}
    {{--<script src="../wp-content/themes/giddyupio-prototype/js/header_scripts/componen t-checkout-big080f.js?ver=5.8.2" defer="defer" type="text/javascript"></script>--}}

    {{--<link rel="canonical" href="index.html" />--}}
    {{--<link rel='shortlink' href='https://getaculief.io/?p=1385' />--}}
    {{--<link rel="alternate" type="application/json+oembed" href="https://getaculief.io/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgetaculief.io%2Fsite_vars%2Faculief-site-vars%2F" />--}}
    {{--<link rel="alternate" type="text/xml+oembed" href="https://getaculief.io/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgetaculief.io%2Fsite_vars%2Faculief-site-vars%2F&amp;format=xml" />--}}

    {{--<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>--}}
    <style>
        #content .headline-container h2.body-subheadline {
            color: #000000!important;
        }
    </style>
    {{--<style id="ep-stylesheet">.ep-temp-container{margin-left:auto;margin-right:auto;min-width:1280px}.ep-temp-container .alignfull{min-width:1280px!important}</style>--}}

    <style>
        body.single-offer {
            background-color: #333;
            background-image: url("data:image/svg+xml,%3Csvg width='6' height='6' viewBox='0 0 6 6' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%233e3e3e' fill-opacity='0.4' fill-rule='evenodd'%3E%3Cpath d='M5 0h1L0 6V5zM6 5v1H5z'/%3E%3C/g%3E%3C/svg%3E");
        }
        body.single-offer .wp-block-column ul {
            margin: 10px 0 20px;
        }
        @media only screen and (min-width: 768px) {
            body.single-offer #logo {
                border-bottom: 2px solid #f1f1f1;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer #logo {
                border-bottom: 1px solid #e5e5e5;
            }
        }
        @media only screen and (min-width: 768px) {
            body.single-offer #logo .site-logo {
                margin: 15px auto;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer #logo .site-logo {
                margin: 5px auto;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer #logo .site-logo {
                max-width: 240px !important;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer #logo .site-logo {
                max-height: 47px !important;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer #logo .site-logo {
                padding: 0 5px;
            }
        }
        body.single-offer #logo .site-logo img {
            width: auto;
            margin: 0 auto;
            display: block;
        }
        @media only screen and (min-width: 768px) {
            body.single-offer #logo .site-logo img {
                height: 45px;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer #logo .site-logo img {
                height: 35px;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer #logo .site-logo img {
                max-height: 35px !important;
            }
        }
        body.single-offer #logo .presented-by {
            padding-bottom: 5px;
        }
        @media only screen and (max-width: 767px) {
            body.single-offer #logo .presented-by {
                max-width: 150px;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer #logo .presented-by {
                margin: 0 auto;
            }
        }
        body.single-offer .videosection .description ul {
            margin-left: 20px;
        }
        body.single-offer .videosection .button {
            background: #d292a0;
            color: #fff;
            text-decoration: none;
            padding: 15px 10px;
            border-radius: 10px;
            text-align: center;
            width: 100%;
            border: none;
            font-size: 31px;
            box-shadow: 0 3px 0 #3f4759;
            text-shadow: 0 1px 1px #1d252f;
            font-weight: 600;
        }
        body.single-offer .whats-included-modal .modal-dialog {
            max-width: 500px;
        }
        body.single-offer .whats-included-modal .modal-header {
            padding: 0;
        }
        body.single-offer .whats-included-modal .modal-body {
            padding: 25px 30px;
        }
        body.single-offer .whats-included-modal .modal-body .whats-included-title {
            font-weight: 700;
            font-size: 18px;
            font-size: 1.125rem;
        }
        body.single-offer .whats-included-modal .modal-body ul {
            margin: 10px 0 0 20px;
            padding: 0;
        }
        body.single-offer .whats-included-modal .modal-body ul li {
            margin-bottom: 5px;
        }
        body.single-offer .headline-container {
            padding: 0 10px;
        }
        @media only screen and (min-width: 768px) {
            body.single-offer .headline-container {
                margin-bottom: 44px;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer .headline-container {
                margin-bottom: 0;
            }
        }
        body.single-offer .headline-container h1 {
            text-align: center;
            font-weight: 700;
        }
        @media only screen and (min-width: 992px) {
            body.single-offer .headline-container h1 {
                font-size: 36px;
                font-size: 2.25rem;
            }
        }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            body.single-offer .headline-container h1 {
                font-size: 40px;
                font-size: 2.5rem;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer .headline-container h1 {
                font-size: 22px;
                font-size: 1.375rem;
            }
        }
        @media only screen and (max-width: 360px) {
            body.single-offer .headline-container h1 {
                font-size: 21px;
                font-size: 1.3125rem;
            }
        }
        @media only screen and (min-width: 768px) {
            body.single-offer .headline-container h1 {
                padding-top: 23px;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer .headline-container h1 {
                padding-top: 28px;
            }
        }
        @media only screen and (min-width: 768px) {
            body.single-offer .headline-container h1 {
                margin-bottom: 6px;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer .headline-container h1 {
                margin-bottom: 19px;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer .headline-container h1 {
                line-height: 1.15;
            }
        }
        body.single-offer .headline-container h2 {
            text-align: center;
            font-weight: 500;
        }
        @media only screen and (min-width: 992px) {
            body.single-offer .headline-container h2 {
                font-size: 24px;
                font-size: 1.5rem;
            }
        }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            body.single-offer .headline-container h2 {
                font-size: 20px;
                font-size: 1.25rem;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer .headline-container h2 {
                font-size: 16px;
                font-size: 1rem;
            }
        }
        @media only screen and (max-width: 360px) {
            body.single-offer .headline-container h2 {
                font-size: 15px;
                font-size: 0.9375rem;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer .headline-container h2 {
                padding: 0 10px;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer .headline-container h2 {
                margin-bottom: 3px;
            }
        }
        body.single-offer .headline-container h2:empty {
            margin: 0;
            padding: 0;
        }
        body.single-offer .gallery-container {
            position: relative;
            overflow: hidden;
            max-width: 100%;
            margin-top: 5px;
        }
        @media only screen and (min-width: 992px) {
            body.single-offer .gallery-container {
                padding: 0 0 0 30px;
            }
        }
        @media only screen and (max-width: 991px) {
            body.single-offer .gallery-container {
                padding: 0;
            }
        }
        body.single-offer .gallery-container .gallery-image-container {
            max-height: 315px;
            overflow: hidden;
        }
        body.single-offer .gallery-container .gallery-image-container.single {
            max-height: 450px;
        }
        @media only screen and (max-width: 767px) {
            body.single-offer .gallery-container .gallery-image-container.single {
                padding-bottom: 40px;
            }
        }
        body.single-offer .gallery-container .gallery-image-container img {
            max-height: 100%;
            display: block;
            text-align: center;
            margin: 0 auto;
        }
        body.single-offer .gallery-container .gallery-video-container {
            height: 315px;
            overflow: hidden;
        }
        body.single-offer .gallery-container .gallery-video-container .videoWrapper iframe {
            max-width: 100%;
            max-height: 300px;
        }
        body.single-offer .gallery-container .gallery-video-container .sproutVideoWrapper {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
        }
        body.single-offer .gallery-container .gallery-video-container .sproutVideoWrapper .sproutvideo-player.main {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
        }
        @media only screen and (min-width: 992px) {
            body.single-offer .gallery-container .gallery-video-container .sproutVideoWrapper .sproutvideo-player.main {
                max-width: 534px;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer .gallery-container .gallery-video-container .sproutVideoWrapper .sproutvideo-player.main {
                max-width: 340px;
            }
        }
        @media only screen and (min-width: 992px) {
            body.single-offer .gallery-container .gallery-video-container .sproutVideoWrapper .sproutvideo-player.preroll {
                max-width: 534px;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer .gallery-container .gallery-video-container .sproutVideoWrapper .sproutvideo-player.preroll {
                max-width: 340px;
            }
        }
        body.single-offer .gallery-container ul.gallery-thumbnails {
            margin: 3px auto 20px auto;
            padding: 0;
            list-style: none;
            text-align: center;
        }
        body.single-offer .gallery-container ul.gallery-thumbnails li {
            display: inline-block;
            max-width: 75px;
            margin: 7px 3px 0 3px;
            cursor: pointer;
            position: relative;
        }
        body.single-offer .gallery-container ul.gallery-thumbnails li .video-thumb-overlay {
            position: absolute;
            top: 20%;
            text-align: center;
            width: 100%;
            color: #8a8a8a;
        }
        body.single-offer .gallery-container ul.gallery-thumbnails li .video-thumb-overlay .fa-play:before {
            margin-left: 5px;
        }
        body.single-offer .gallery-container ul.gallery-thumbnails li img.active {
            border: 2px solid #777;
        }
        @media only screen and (min-width: 768px) {
            body.single-offer .product-info {
                margin: 0;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer .product-info {
                margin: 0 25px;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer .product-info .gallery-container {
                width: calc(100% + 80px);
                max-width: none;
                margin-left: -40px;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer.lang-ar .product-info .gallery-container,
            body.single-offer.lang-he .product-info .gallery-container {
                margin-right: -40px;
            }
        }
        body.single-offer .offer-heading {
            font-size: 36px;
            font-weight: 700;
            padding-top: 20px;
        }
        body.single-offer .offer-sub-heading {
            font-size: 24px;
            margin-bottom: 40px;
        }
        @media only screen and (min-width: 768px) {
            body.single-offer .modal-dialog {
                margin: 1.75rem auto !important;
            }
        }
        @media only screen and (min-width: 992px) {
            body.single-offer .product-info-container {
                padding: 0 35px 0 24px;
            }
        }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            body.single-offer .product-info-container {
                padding: 0 20px 0 0;
            }
        }
        @media only screen and (min-width: 768px) {
            body.single-offer .product-info-container {
                line-height: 1.4;
            }
        }
        body.single-offer .product-info-container p {
            margin-bottom: 20px;
        }
        body.single-offer .product-info-container ul {
            margin: 10px 0 0 15px;
        }
        body.single-offer .product-info-container li {
            margin-bottom: 25px;
        }
        body.single-offer .product-info-container li:last-child {
            margin-bottom: 10px;
        }
        body.single-offer .product-info-container .button {
            background: #25ae4e;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            font-size: 31px;
            font-weight: 400;
            padding: 15px;
            display: inline-block;
            cursor: pointer;
        }
        @media only screen and (min-width: 768px) {
            body.single-offer .product-info-container .button {
                margin: 20px 0;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer .product-info-container .button {
                margin: 10px 0 20px 0;
            }
        }
        @media only screen and (min-width: 768px) {
            body.single-offer .product-info-container .button {
                background: #d292a0;
                color: #fff;
                text-decoration: none;
                border-radius: 10px;
                text-align: center;
                width: 90%;
                max-width: 456px;
                border: none;
                font-size: 31px;
                box-shadow: 0 3px 0 #3f4759;
                text-shadow: 0 1px 1px #1d252f;
                font-weight: 600;
                margin: 10px 0 60px 5px;
                display: inline-block;
                padding: 15px 20px;
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.1));
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.1));
                background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.1));
                background-repeat: repeat-x;
                background-size: 200%;
                background-position: 0 -100%;
            }
        }
        body.single-offer .product-info-container .button:hover {
            background: #abd082;
            box-shadow: 0 3px 0 #0e0a15;
            transition: 0.9s;
        }
        body.single-offer .product-info-container .button a {
            color: #fff;
            display: block;
        }
        body.single-offer .product-info-container .info {
            text-align: left;
        }
        body.single-offer .product-detail {
            padding: 40px 0;
        }
        @media only screen and (min-width: 768px) {
            body.single-offer .product-detail {
                margin: 0 25px;
            }
        }
        body.single-offer .product-detail .product-info-container ul.basic-list li {
            clear: left;
        }
        body.single-offer .product-detail .product-info-container ul.basic-list li:before {
            margin-bottom: 2.5em;
        }
        body.single-offer .product-detail .product-info-container .button {
            font-size: 22px;
        }
        body.single-offer .pro-quote-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 30px 0;
        }
        body.single-offer .pro-quote-container .pro-quote-img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid #ccc;
            text-align: center;
            object-fit: contain;
            display: flex;
            justify-content: center;
            margin: auto;
        }
        body.single-offer .pro-quote-container .pro-quote-img img {
            align-self: center;
            flex: 0 0 auto;
            width: 180px;
            height: 180px;
        }
        body.single-offer .pro-quote-container .pro-quote-text {
            padding-top: 30px;
            color: #fff;
            font-size: 22px;
        }
        body.single-offer #mobile-faq .modal-header h2 {
            font-weight: 700;
            width: 100%;
            text-align: center;
            margin: 0;
        }
        @media only screen and (min-width: 992px) {
            body.single-offer #mobile-faq .modal-header h2 {
                font-size: 21px;
                font-size: 1.3125rem;
            }
        }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            body.single-offer #mobile-faq .modal-header h2 {
                font-size: 21px;
                font-size: 1.3125rem;
            }
        }
        @media only screen and (max-width: 767px) {
            body.single-offer #mobile-faq .modal-header h2 {
                font-size: 21px;
                font-size: 1.3125rem;
            }
        }
        @media only screen and (max-width: 360px) {
            body.single-offer #mobile-faq .modal-header h2 {
                font-size: 20px;
                font-size: 1.25rem;
            }
        }
        body.single-offer #mobile-faq .modal-body {
            padding-top: 0;
        }
        body.single-offer #mobile-faq .modal-body .faq-wrapper {
            padding: 0;
        }
        body.single-offer .faq-wrapper {
            padding: 20px 0;
        }
        body.single-offer .faq-wrapper .hidden {
            display: none;
        }
        body.single-offer .faq-wrapper.desktop-only {
            background: #007fc4;
        }
        body.single-offer .faq-wrapper h3 {
            text-align: center;
            font-weight: 700;
            font-size: 22px;
        }
        body.single-offer .faq-wrapper h3 span.faq {
            color: #fff;
            text-decoration: underline;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.8);
            cursor: pointer;
            margin-left: 8px;
        }
        body.single-offer .faq-wrapper .faq-container {
            margin-top: 20px;
        }
        body.single-offer .faq-wrapper .faq-content {
            margin-bottom: 5px;
            padding: 0 10px;
            color: #70818b;
        }
        body.single-offer .faq-wrapper .faq-content h4 {
            background: #f1f1f1;
            border-radius: 5px;
            padding: 20px;
            position: relative;
            font-size: 16px;
            cursor: pointer;
            border: 1px solid #e7e7e7;
            z-index: 10;
            margin-bottom: 0;
        }
        body.single-offer .faq-wrapper .faq-content h4:before {
            content: "Q: ";
            font-weight: 700;
            font-size: 24px;
            padding-right: 20px;
        }
        body.single-offer .faq-wrapper .faq-content h4:after {
            content: "\f0d9";
            font-family: FontAwesome;
            font-size: 24px;
            float: right;
            line-height: 1.5;
            -moz-transition: all 0.2s linear;
            -webkit-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        body.single-offer .faq-wrapper .faq-content h4 span.question-heading {
            padding-left: 20px;
        }
        body.single-offer .faq-wrapper .faq-content h4.open:after {
            content: "\f0d9";
            font-family: FontAwesome;
            font-size: 24px;
            float: right;
            line-height: 1.5;
            -moz-transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }
        body.single-offer .faq-wrapper .faq-content .answer {
            background: #fff;
            padding: 20px 20px 15px 20px;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
            position: relative;
            z-index: 1;
            margin-top: -10px;
        }
        body.single-offer .faq-wrapper .faq-content .answer .content {
            margin-left: 50px;
        }
        body.single-offer .faq-wrapper .faq-content .answer:before {
            content: "A: ";
            font-weight: 700;
            float: left;
            font-size: 24px;
            line-height: 1;
            color: #585858;
        }
        body.single-offer .faq-wrapper.mobile-only {
            text-align: center;
        }
        body.single-offer .faq-wrapper.mobile-only .faq-content {
            text-align: left;
        }
        body.single-offer .faq-wrapper.mobile-only .faq-content h4 {
            margin-bottom: 10px;
        }
        body.single-offer .faq-wrapper.mobile-only .faq-content h4 span {
            margin-left: 20px;
            display: block;
            font-size: 18px;
            color: #000;
        }
        body.single-offer .faq-wrapper.mobile-only .faq-content h4 span.question {
            border: 1px solid #dedede;
        }
        body.single-offer .faq-wrapper.mobile-only .faq-content h4:before {
            content: "\f0da";
            font-family: FontAwesome;
            font-size: 24px;
            float: left;
            padding: 0;
            -moz-transition: all 0.2s linear;
            -webkit-transition: all 0.2s linear;
            transition: all 0.2s linear;
            position: absolute;
            top: 33%;
        }
        body.single-offer .faq-wrapper.mobile-only .faq-content h4:after {
            content: unset;
        }
        body.single-offer .faq-wrapper.mobile-only .faq-content h4.open:before {
            content: "\f0da";
            font-family: FontAwesome;
            font-size: 24px;
            -moz-transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
            color: #758c99;
        }
        body.single-offer .faq-wrapper.mobile-only .faq-content .answer {
            margin-top: 10px;
            margin-bottom: 10px;
            border: 1px solid #e7e7e7;
            border-radius: 5px;
        }
        body.single-offer .faq-wrapper.mobile-only .faq-content .answer .content {
            margin-left: initial;
        }
        body.single-offer .faq-wrapper.mobile-only .faq-content .answer:before {
            content: unset;
        }
        body.single-offer .faq-wrapper.mobile-only .faq-content:last-child {
            margin-bottom: 0 !important;
        }
        body.single-offer .faq-wrapper ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        body.single-offer .faq-wrapper ul li {
            list-style: disc;
            margin-left: 30px;
        }
        body.single-offer .modal-content .faq-wrapper .faq-container {
            margin: 0;
        }
        body.single-offer .product-description-list {
            margin-left: 5px;
        }
        body.single-offer #modal-gallery img {
            height: auto;
            max-width: 100%;
            width: 100%;
        }
        body.single-offer .offer-included {
            padding-bottom: 20px;
        }
        body.single-offer .offer-included h2 {
            text-align: center;
            font-weight: 700;
            font-size: 36px;
            padding: 30px 40px;
        }
        body.single-offer .offer-included ul li {
            margin-bottom: 20px;
        }
        body.single-offer .offer-included .image-container {
            float: right;
        }
        @media only screen and (max-width: 991px) {
            body.single-offer .videosection {
                padding: 0 10px;
            }
            body.single-offer .videosection .description ul {
                margin: 0 25px;
            }
            body.single-offer .videosection .button {
                font-size: 20px;
            }
            body.single-offer .gallery-container .gallery-image-container img {
                max-height: 100%;
            }
            body.single-offer .gallery-container ul.gallery-thumbnails {
                margin: 10px auto;
                text-align: center;
            }
            body.single-offer .gallery-container ul.gallery-thumbnails li {
                max-width: 58px;
                margin: 5px 2px 0 2px;
            }
            body.single-offer .gallery-container .gallery-video-container {
                height: 192px;
                overflow: hidden;
                max-width: 340px;
                margin: 0 auto;
            }
            body.single-offer .gallery-container .gallery-video-container .videoWrapper iframe {
                max-height: 192px;
            }
        }
        @media only screen and (max-width: 991px) and (min-width: 768px) {
            body.single-offer .gallery-container .gallery-video-container .videoWrapper iframe {
                max-width: 340px;
            }
        }
        @media only screen and (max-width: 991px) and (max-width: 767px) {
            body.single-offer .gallery-container .gallery-video-container .videoWrapper iframe {
                max-width: 100%;
            }
        }
        @media only screen and (max-width: 991px) {
            body.single-offer .product-info-container {
                text-align: center;
            }
            body.single-offer .product-info-container li {
                margin-bottom: 10px;
            }
            body.single-offer .product-info-container .gallery-container {
                margin: 0 10px;
            }
            body.single-offer .product-info-container .gallery-container .gallery-image-container {
                height: 214px;
            }
            body.single-offer .product-info-container .gallery-container .gallery-image-container img {
                height: 100%;
            }
            body.single-offer .product-info-container .gallery-container .gallery-video-container {
                height: 214px;
                overflow: hidden;
            }
            body.single-offer .product-info-container .gallery-container .gallery-video-container .videoWrapper iframe {
                max-width: 100%;
                max-height: 214px;
            }
            body.single-offer .product-info-container .product-description-list {
                text-align: left;
                margin-bottom: 0;
                margin-right: 11px;
            }
            body.single-offer .product-info-container ul.offer-list {
                margin: 10px 0 0 35px !important;
            }
            body.single-offer .product-info-container p.offer-text {
                padding: 15px;
            }
            body.single-offer .product-info-container .button-container {
                margin: 0 auto;
                text-align: center;
            }
            body.single-offer .product-info-container .button {
                font-size: 20px !important;
                margin-left: 0;
                margin-bottom: 25px;
            }
            body.single-offer .pro-quote-container .pro-quote-text {
                text-align: center;
            }
            body.single-offer .pro-quote-container .pro-quote-text h1 {
                font-size: 2rem;
            }
            body.single-offer #footer-badges {
                border-top: none;
                padding: 0 10px 0;
                background: 0 0;
            }
            body.single-offer #footer-badges .footer-badge-container {
                border-top: 1px solid #ccc;
                padding: 10px;
            }
            body.single-offer #footer-badges .mobile-only {
                margin: 0 auto !important;
            }
            body.single-offer .additional-footer-message {
                font-size: 12px;
                background: 0 0;
                padding-top: 0;
            }
            body.single-offer .additional-footer-message .footnote-content {
                max-width: none;
                margin: 0 auto;
            }
            body.single-offer .faq-wrapper {
                padding: 10px 0;
            }
            body.single-offer .faq-wrapper span {
                font-size: 14px;
            }
            body.single-offer .faq-wrapper span.faq {
                font-size: 22px;
            }
            body.single-offer .upsell-popup .headline {
                font-size: 20px;
                margin: 10px 0 5px 0;
            }
            body.single-offer .upsell-popup .popup-special-container {
                margin: -20px auto 0 auto;
                max-width: 180px;
            }
            body.single-offer .upsell-popup .popup-special-container .number {
                font-size: 80px;
                text-align: center;
            }
            body.single-offer .upsell-popup .popup-special-container .percentoff {
                font-size: 40px;
                text-align: left;
            }
            body.single-offer .upsell-popup .popup-special-container .percentoff .percent {
                top: 20px;
                font-size: 35px;
                padding: 0 0 10px 10px;
            }
            body.single-offer .upsell-popup .popup-special-container .percentoff .off {
                font-size: 26px;
            }
            body.single-offer .upsell-popup .popup-content {
                margin-top: 10px;
            }
            body.single-offer .upsell-popup .popup-content .title {
                font-size: 16px;
            }
            body.single-offer .upsell-popup .popup-content .subtitle {
                font-size: 26px;
            }
            body.single-offer .upsell-popup .popup-content .pricing {
                font-size: 16px;
            }
            body.single-offer .upsell-popup .popup-content .button {
                width: 100%;
                font-size: 26px;
            }
            body.single-offer .upsell-popup .popup-image {
                margin: 0 auto;
            }
            body.single-offer .offer-included h2 {
                font-size: 22px;
                padding: 20px 20px 15px;
            }
            body.single-offer .offer-included ul {
                margin-left: 40px;
            }
            body.single-offer .offer-included ul li {
                margin-bottom: 10px;
                line-height: 1.2;
            }
            body.single-offer .offer-included .image-container {
                float: none;
                text-align: center;
            }
            body.single-offer .offer-included-wlogo {
                border-bottom: 1px solid #ebebeb;
                text-align: center;
            }
            body.single-offer .offer-included-wlogo img {
                max-width: 150px;
            }
            body.single-offer #paypal-button-container {
                width: 100%;
            }
            body.single-offer #checkout h1 {
                font-size: 22px;
                text-align: center;
                font-weight: 700;
            }
        }
        @media only screen and (max-width: 991px) and (min-width: 768px) {
            body.single-offer #checkout h1 {
                margin-top: 25px;
            }
        }
        @media only screen and (max-width: 991px) and (max-width: 767px) {
            body.single-offer #checkout h1 {
                margin-top: 20px;
            }
        }
        @media only screen and (max-width: 991px) {
            body.single-offer .guarantee {
                text-align: center;
            }
            body.single-offer .guarantee h4 {
                font-size: 15px;
                font-weight: 700;
                padding: 10px 0;
            }
        }
        body.single-offer #checkout .product-wrapper {
            width: 100%;
        }
        body.single-offer #footer {
            background: #333;
        }
        body.single-offer #footer-disclaimer {
            max-width: 710px;
            margin: 0 auto;
            line-height: 1.3;
            padding: 10px 5px;
        }
        body.single-offer .headlineBarHeadline {
            margin: 0;
        }
        body.single-offer .headlineBarHeadline h1 {
            font-size: 36px;
            font-weight: 700;
            padding: 30px 0;
        }
        body.single-offer .wp-block-giddyup-section-block {
            padding: 0;
        }
        body.single-offer .wp-block-giddyup-section-block h1,
        body.single-offer .wp-block-giddyup-section-block h2,
        body.single-offer .wp-block-giddyup-section-block h3,
        body.single-offer .wp-block-giddyup-section-block h4,
        body.single-offer .wp-block-giddyup-section-block h5.h6 {
            margin-bottom: 45px;
            font-weight: 700;
        }
        body.single-offer .wp-block-giddyup-section-block .wp-block-column {
            padding: 0 70px;
        }
        body.single-offer .wp-block-giddyup-section-block .wp-block-button a {
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            text-align: center;
            border: none;
            font-size: 31px;
            box-shadow: 0 3px 0 #3f4759;
            text-shadow: 0 1px 1px #1d252f;
            font-weight: 700;
            margin: 15px;
            display: inline-block;
            padding: 15px 30px;
            background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.1));
            background-image: -o-linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.1));
            background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.1));
            background-repeat: repeat-x;
            background-size: 200%;
            background-position: 0 -100%;
        }
    </style>
</head>
<body class=" single-offer lang-en layout-default">
<div id="main-wrapper">
    <div class="brand-color-strip desktop-only" style="border-top:7px solid #007fc4"></div>
    <div id="logo">
        <div class="logo-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-logo">
                            <img src="{{ asset('/') }}flexovalFiles/aculief/aculief-logo-02.svg" alt="" style="height: 45px;">
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
            {{--<script>--}}
                {{--(function($) {--}}
                    {{--$(document).ready(function(){--}}
                        {{--if(window.location.search.indexOf("gudtc=1") > -1){$('#total-bar').addClass('direct-to-checkout-total');}--}}
                    {{--});--}}
                {{--})(jQuery);--}}
            {{--</script>--}}
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
                                    {{--<li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-01b-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="https://videos.sproutvideo.com/embed/449ddcb1191fe3cbcd/0c2018e4b36c4742?&amp;playerColor=28bbff" loading="lazy" id="guGallery-1-thumbnail-1" srcset="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-01b-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-01b-80x80.jpg 80w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-01b-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-01b-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-01b-180x180.jpg 180w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-01b.jpg 200w" sizes="(max-width: 150px) 100vw, 150px" /></li>--}}
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-02-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             {{--loading="lazy"--}}
                                             id="guGallery-1-thumbnail-2"
                                             {{--srcset="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-02-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-02-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-02-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-02-180x180.jpg 180w"--}}
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-03-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             {{--loading="lazy"--}}
                                             id="guGallery-1-thumbnail-3"
                                             {{--srcset="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-03-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-03-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-03-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-03-180x180.jpg 180w"--}}
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-05-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             {{--loading="lazy"--}}
                                             id="guGallery-1-thumbnail-4"
                                             {{--srcset="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-05-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-05-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-05-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-05-180x180.jpg 180w"--}}
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    {{--<li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-09-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="https://videos.sproutvideo.com/embed/a79ddcb01a19e8cb2e/fe0eae4c6500d9b6?&amp;playerColor=28bbff" loading="lazy" id="guGallery-1-thumbnail-5" srcset="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-09-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-09-80x80.jpg 80w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-09-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-09-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-09-180x180.jpg 180w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-09.jpg 200w" sizes="(max-width: 150px) 100vw, 150px" /></li>--}}
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-06-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             {{--loading="lazy"--}}
                                             id="guGallery-1-thumbnail-6"
                                             {{--srcset="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-06-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-06-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-06-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-06-180x180.jpg 180w"--}}
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-07-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             {{--loading="lazy"--}}
                                             id="guGallery-1-thumbnail-7"
                                             {{--srcset="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-07-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-07-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-07-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-07-180x180.jpg 180w"--}}
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                    <li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-08-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt=""
                                             {{--loading="lazy"--}}
                                             id="guGallery-1-thumbnail-8"
                                             {{--srcset="{{ asset('/') }}flexovalFiles/aculief/aculief-s1-08-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-08-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-08-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/aculief/aculief-s1-08-180x180.jpg 180w"--}}
                                             sizes="(max-width: 150px) 100vw, 150px" /></li>
                                </ul>
                            </div>
                            {{--<script type="text/javascript">--}}
                                {{--(function($){--}}
                                    {{--$(document).ready(function () {--}}
                                        {{----}}
                                        {{--let curGallery = 'guGallery-1';--}}
                                        {{--let mainimagecontainer = $('#' + curGallery).find('.gallery-image-container');--}}
                                        {{----}}
                                        {{--let vidIDscript = document.createElement("script");--}}
                                        {{--vidIDscript.type = "text/javascript";--}}
                                        {{--vidIDscript.id = curGallery + "-wistiaIdScript";--}}
                                        {{--$('#' + curGallery + '-wistiaVideoWrapper').append(vidIDscript);--}}
                                        {{----}}
                                        {{--$("#" + curGallery + "-thumbnails li").each(function (index) {--}}
                                            {{--let thumbAlt = $(this).find('img').attr('alt');--}}

                                            {{--if (thumbAlt.length) {--}}
                                                {{--//make sure that the alt contains a video--}}
                                                {{--if (thumbAlt.indexOf("youtube") >= 0 || thumbAlt.indexOf("wistia") >= 0 || thumbAlt.indexOf("sproutvideo") >= 0) {--}}

                                                    {{--if (thumbAlt.indexOf("noarrow") == -1) {--}}
                                                        {{--$('<div class="video-thumb-overlay"><span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-play fa-stack-1x fa-inverse"></i></span></div>').prependTo($(this));--}}
                                                    {{--}--}}
                                                {{--}--}}
                                            {{--}--}}
                                        {{--});--}}
                                        {{----}}
                                        {{--$("#" + curGallery + "-thumbnails li").on('click', function () {--}}

                                            {{--if (!$(this).hasClass('selectedThumb')) {--}}
                                               {{----}}
                                                {{--$("#" + curGallery + "-thumbnails li.selectedThumb").removeClass('selectedThumb');--}}
                                                {{--$(this).addClass('selectedThumb');--}}
                                                {{----}}
                                                {{--if ($("#" + curGallery + " .gallery-video-container").css('display') != 'none') {--}}
                                                    {{--if ($("#" + curGallery + "-sproutVideoWrapper").css('display') != 'none') {--}}
                                                        {{--$("#" + curGallery + "-sproutVideoWrapper .sproutvideo-player.preroll").remove();--}}
                                                        {{--let src = $("#" + curGallery + "-sproutVideoWrapper .sproutvideo-player.main").attr('src');--}}
                                                        {{--let id = getSproutVidId(src);--}}
                                                        {{--var video = new SV.Player({videoId: id});--}}
                                                        {{--video.pause();--}}
                                                    {{--} else if ($("#" + curGallery + "-wistiaVideoWrapper").css('display') != 'none') {--}}
                                                    {{--} else if ($("#" + curGallery + "-youtubeVideoWrapper").css('display') != 'none') {--}}
                                                        {{--$("#" + curGallery + "-youtubeVideoWrapper iframe")[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');--}}
                                                    {{--}--}}
                                                {{--}--}}

                                                {{--let thumbnail = $(this).find('img');--}}
                                                {{--let thumbID = $(this).attr('id');--}}

                                                {{--let thumbAlt = thumbnail.attr('alt');--}}
                                                {{--let videoString = "";--}}

                                                {{--if (thumbAlt.indexOf("youtube") >= 0 || thumbAlt.indexOf("wistia") >= 0 || thumbAlt.indexOf("sproutvideo") >= 0) {--}}
                                                    {{--videoString = thumbAlt;--}}
                                                {{--}--}}

                                                {{--if (videoString.length) {--}}
                                                    {{--LoadVideo(videoString, true, thumbID);--}}
                                                    {{----}}
                                                    {{--gu_fire_event('GalleryChanged', 'ViewedVideo', thumbID);--}}
                                                {{--} else {--}}
                                                    {{--let thumbSrc = thumbnail.attr('src');--}}
                                                    {{--LoadImage(thumbSrc, thumbID);--}}
                                                    {{----}}
                                                    {{--gu_fire_event('GalleryChanged', 'ViewedImage', thumbID);--}}
                                                {{--}--}}
                                            {{--}--}}
                                        {{--});--}}

                                        {{--$("#" + curGallery).on('init', function () {--}}

                                            {{--let firstImg = $("#" + curGallery).find('li').first().find('img');--}}

                                            {{--//only load if there's a first image--}}
                                            {{--if (firstImg.length) {--}}
                                                {{--let firstAlt = firstImg.attr('alt');--}}
                                                {{--let firstSrc = firstImg.attr('src');--}}
                                                {{--let firstId = firstImg.attr('id');--}}

                                                {{--if (firstAlt.length) {--}}
                                                    {{--//.log(curGallery + ' first img alt' + firstAlt);--}}

                                                    {{--//make sure that the alt contains a video and not just regular alt stuff--}}
                                                    {{--if (firstAlt.indexOf("youtube") >= 0 || firstAlt.indexOf("wistia") >= 0 || firstAlt.indexOf("sproutvideo") >= 0) {--}}
                                                        {{--LoadVideo(firstAlt, false, firstId);--}}
                                                        {{--//console.log(curGallery + ' initialized with a vid');--}}
                                                    {{--}--}}
                                                    {{--//LoadImage(firstSrc, firstId);--}}
                                                {{--} else {--}}
                                                    {{--//console.log(curGallery + ' first img src' + firstSrc);--}}
                                                    {{--LoadImage(firstSrc, firstId);--}}
                                                    {{--//console.log(curGallery + ' initialized with img');--}}
                                                {{--}--}}

                                            {{--}--}}


                                        {{--});--}}

                                        {{--//swap out image in main container and display it--}}
                                        {{--//and make sure that any videos are hidden and stopped/paused--}}
                                        {{--function LoadImage(src, thumbID) {--}}


                                            {{--let cleanlink = src.replace(/-\d+[Xx]\d+\./g, '.');--}}
                                            {{--mainimagecontainer.find('img').attr('src', cleanlink);--}}

                                            {{--//Handle video players--}}

                                            {{--if ($("#" + curGallery + " .gallery-video-container").css('display') != 'none') {--}}
                                                {{--//make sure video is hidden and image is shown--}}
                                                {{--$("#" + curGallery + " .gallery-video-container").fadeOut("fast", function () {--}}
                                                    {{--$("#" + curGallery + " .galleryVideoWrapper").hide();--}}
                                                    {{--//once vid player is faded, fade in image wrapper--}}
                                                    {{--$("#" + curGallery + " .gallery-image-container").fadeIn("fast");--}}
                                                {{--});--}}
                                            {{--}--}}
                                        {{--}--}}

                                        {{--function LoadVideo(videoString, autoplay, thumbID) {--}}

                                            {{--//hide all individual video players--}}
                                            {{--$("#" + curGallery + " .galleryVideoWrapper").hide();--}}

                                            {{--//determine the type of video and show the correct player--}}
                                            {{--//check for youtube alt tag video src--}}
                                            {{--if (videoString.indexOf('youtube') >= 0) {--}}

                                                {{--if (autoplay) {--}}
                                                    {{--videoString += '?autoplay=1&amp;';--}}
                                                {{--} else {--}}
                                                    {{--videoString += '?'--}}
                                                {{--}--}}

                                                {{--let parts = videoString.split('v=');--}}
                                                {{--let id = parts[parts.length - 1];--}}

                                                {{--let newId = "https://www.youtube.com/embed/" + id + "enablejsapi=1&amp;rel=0&amp;controls=1&amp;showinfo=0&amp";--}}

                                                {{--//set vid id--}}
                                                {{--$("#" + curGallery + "-youtubeVideoWrapper iframe").attr('src', newId);--}}

                                                {{--//display YT player--}}
                                                {{--$("#" + curGallery + "-youtubeVideoWrapper").show();--}}

                                            {{--}--}}
                                            {{--//check for wistia alt tag video src--}}
                                            {{--else if (videoString.indexOf('wistia') >= 0) {--}}

                                                {{--//get wistia vid id--}}
                                                {{--let parts = videoString.split('https://getaculief.io/medias/');--}}
                                                {{--//take the last entry that will have the id in it and strip out and possible 'noarrow' text--}}
                                                {{--parts = parts[parts.length - 1].split(' ');--}}
                                                {{--let id = parts[0];--}}


                                                {{--//set vid id--}}
                                                {{--$("#" + curGallery + "-wistiaPlaceholder").removeClass();--}}
                                                {{--$("#" + curGallery + "-wistiaPlaceholder").addClass('wistia_embed wistia_async_' + id + ' videoFoam=true wistia_embed_initialized');--}}
                                                {{--$("#" + curGallery + "-wistiaThumbnail").attr('src', 'https://fast.wistia.com/embed/medias/' + id + '/swatch');--}}

                                                {{--//use the api to check if there was already a video, if not create one and start playing it--}}
                                                {{--if (typeof window[curGallery + "wistiaPlayer"] == 'undefined') {--}}
                                                    {{--window._wq = window._wq || [];--}}
                                                    {{--_wq.push({--}}
                                                        {{--id: id, onReady: function (video) {--}}
                                                            {{--window[curGallery + "wistiaPlayer"] = video;--}}
                                                            {{--if (autoplay) {--}}
                                                                {{--video.play();--}}
                                                            {{--}--}}


                                                        {{--}--}}
                                                    {{--});--}}
                                                {{--} else {--}}

                                                    {{--window[curGallery + "wistiaPlayer"].replaceWith(id);--}}

                                                    {{--if (autoplay) {--}}
                                                        {{--window[curGallery + "wistiaPlayer"].play();--}}
                                                    {{--}--}}

                                                {{--}--}}

                                                {{--//display Wistia player--}}
                                                {{--$("#" + curGallery + "-wistiaVideoWrapper").show();--}}
                                            {{--}--}}

                                            {{--//check for sprout alt tag video src--}}
                                            {{--else if (videoString.indexOf('sproutvideo') >= 0) {--}}

                                                {{--//clear out any old players just in case--}}
                                                {{--$("#" + curGallery + "-sproutVideoWrapper").empty();--}}

                                                {{--//separate the urls by preroll and main--}}
                                                {{--let theUrls = videoString.split(',');--}}

                                                {{--let baseVidUrl = "https://videos.sproutvideo.com/embed/$$$";--}}

                                                {{--//no preroll by default--}}
                                                {{--let hasPreroll = false;--}}

                                                {{--let mainUrl = '';--}}
                                                {{--let prerollUrl = undefined;--}}

                                                {{--//check for an additional preroll vid--}}
                                                {{--if (theUrls.length > 1) {--}}
                                                    {{--prerollUrl = theUrls[0];--}}
                                                    {{--mainUrl = theUrls[1];--}}
                                                {{--} else {--}}
                                                    {{--mainUrl = theUrls[0];--}}
                                                {{--}--}}

                                                {{--if (typeof prerollUrl != "undefined" && !autoplay) {--}}
                                                    {{--//only add in the preroll if we don't want to auto play--}}

                                                    {{--let preID = prerollUrl.split('https://getaculief.io/embed/')[1];--}}

                                                    {{--prerollUrl = baseVidUrl.replace('$$$', preID);--}}

                                                    {{--let separator = (prerollUrl.indexOf('?') >= 0) ? '&' : '?';--}}
                                                    {{--let defaultPrerollParams = 'transparent=true&background=true&autoPlay=true&loop=true&volume=0';--}}

                                                    {{--prerollUrl = prerollUrl + separator + defaultPrerollParams;--}}

                                                    {{--let preVid = '<iframe loading="lazy" class="sproutvideo-player preroll" src="' + prerollUrl + '" width="540" height="300" frameborder="0" allowfullscreen="" style=""  id="sproutPreroll"></iframe>';--}}

                                                    {{--jQuery("#" + curGallery + "-sproutVideoWrapper").append(preVid);--}}

                                                    {{--// if there's preroll we need to make the main vid transparent--}}
                                                    {{--hasPreroll = true;--}}

                                                {{--}--}}

                                                {{--// sep out vid id--}}
                                                {{--let identifier = mainUrl.split('https://getaculief.io/embed/')[1];--}}

                                                {{--//swap id in--}}
                                                {{--mainUrl = baseVidUrl.replace('$$$', identifier);--}}

                                                {{--if (hasPreroll) {--}}
                                                    {{--let separator = (mainUrl.indexOf('?') >= 0) ? '&' : '?';--}}
                                                    {{--let defaultMainParams = 'transparent=true';--}}
                                                    {{--mainUrl = mainUrl + separator + defaultMainParams;--}}
                                                {{--}--}}

                                                {{--if (mainUrl.indexOf("noarrow") != -1) {--}}
                                                    {{--//pull noarrow out so we can then add in the param for removing the unmute button--}}
                                                    {{--var parts = mainUrl.split('noarrow');--}}
                                                    {{--mainUrl = parts[0].split(' ')[0];--}}
                                                    {{--mainUrl += '&volumeControl=0';--}}
                                                {{--}--}}

                                                {{--let vidId = identifier.split('https://getaculief.io/')[0];--}}

                                                {{--//determine if the desired video is the one already in the player--}}
                                                {{--let src = $("#" + curGallery + "-sproutVideoWrapper .sproutvideo-player.main").attr('src');--}}
                                                {{--let curID = '';--}}
                                                {{--if (typeof src != "undefined") {--}}
                                                    {{--curID = getSproutVidId(src);--}}
                                                {{--}--}}

                                                {{--if (vidId === curID) {--}}
                                                    {{--//video we're trying to play is the one that's already in the player, just hit play on it and that's it--}}
                                                    {{--var video = new SV.Player({videoId: vidId});--}}

                                                    {{--if (autoplay) {--}}
                                                        {{--video.play();--}}
                                                    {{--}--}}


                                                {{--} else {--}}
                                                    {{--//there is either no video in there yet, or it's a new one--}}


                                                    {{--let mainVid = '<iframe loading="lazy" class="sproutvideo-player main" src="' + mainUrl + '" width="540" height="300" frameborder="0" allowfullscreen="" id="sproutMainVid"></iframe>';--}}

                                                    {{--//pop vid players in--}}
                                                    {{--$("#" + curGallery + "-sproutVideoWrapper").prepend(mainVid);--}}

                                                    {{--//use api to play video if autoplay enabled--}}

                                                    {{--var video = new SV.Player({videoId: vidId});--}}

                                                    {{--video.bind('ready', function (e) {--}}
                                                        {{--if (autoplay) {--}}
                                                            {{--video.play();--}}
                                                        {{--}--}}

                                                    {{--});--}}

                                                {{--}--}}

                                                {{--//display Sprout player--}}
                                                {{--$("#" + curGallery + "-sproutVideoWrapper").show();--}}
                                            {{--}--}}

                                            {{--if ($("#" + curGallery + " .gallery-image-container").css('display') != 'none') {--}}
                                                {{--//console.log(curGallery + " img container is vis");--}}
                                                {{--//make sure image container is hidden and video container is shown--}}
                                                {{--$("#" + curGallery + " .gallery-image-container").fadeOut("fast", function () {--}}
                                                    {{--//fade in the vid container once the correct player is visible--}}
                                                    {{--$("#" + curGallery + " .gallery-video-container").fadeIn("fast");--}}
                                                {{--});--}}
                                            {{--}--}}

                                        {{--}--}}

                                    {{--});--}}

                                    {{--function getSproutVidId(src) {--}}
                                        {{--let id = src.split('https://videos.sproutvideo.com/embed/')[1].split('https://getaculief.io/')[0];--}}
                                        {{--return id;--}}
                                    {{--}--}}

                                {{--})(jQuery);--}}
                            {{--</script>--}}
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
            {{--<script>--}}
                {{--function reviewSlideshow(slideIt, options){--}}
                    {{--slideIt = typeof slideIt !== 'undefined' ? slideIt : null;--}}
                    {{--options = typeof options !== 'undefined' ? options : null;--}}

                    {{--if(slideIt == true){--}}
                        {{--if(typeof reviewSlideshow.persistent == 'undefined') {--}}
                            {{--reviewSlideshow.persistent = true;--}}
                        {{--}--}}
                    {{--}--}}
                    {{--// slideshow options--}}
                    {{--if(options == null){--}}
                        {{--options = {--}}
                            {{--arrows: true,--}}
                            {{--dots: true,--}}
                            {{--draggable: true,--}}
                            {{--swipe: true,--}}
                            {{--swipeToSlide: true,--}}
                            {{--touchMove: true,--}}
                            {{--draggable: true,--}}
                            {{--accessibility: true,--}}
                            {{--adaptiveHeight: true,--}}
                            {{--prevArrow:'',--}}
                            {{--nextArrow:'<button class="arrow" type="button" role="button" aria-label="Next"></button>',--}}
                            {{--rtl: ($('html').attr('dir') === 'rtl' ? true : false)--}}
                        {{--};--}}
                    {{--}--}}
                    {{--if(slideIt == false && reviewSlideshow.persistent != true){--}}
                        {{--$('#reviews .testimonials').slick('unslick');--}}
                    {{--}else{--}}
                        {{--$('#reviews .testimonials').not('.slick-initialized').slick(options);--}}
                    {{--}--}}
                {{--}--}}
                {{--jQuery(function(){--}}
                    {{--$(document).ready(function(){--}}

                        {{--// layout 01 functionality--}}
                        {{--// if($('#reviews').data('layout') === 1){--}}
                        {{--//     // init slideshow based on screen size--}}
                        {{--//     enquire.register("screen and (max-width: 767.980px)", { //small range--}}
                        {{--//         match: function(){--}}
                        {{--//             reviewSlideshow();--}}
                        {{--//         },--}}
                        {{--//         unmatch: function(){--}}
                        {{--//             reviewSlideshow(false);--}}
                        {{--//         }--}}
                        {{--//     });--}}
                        {{--// }--}}

                        {{--if($('#reviews').data('layout') === 2){--}}
                            {{--reviewSlideshow(true, {--}}
                                {{--arrows: false,--}}
                                {{--dots: true,--}}
                                {{--draggable: true,--}}
                                {{--swipe: true,--}}
                                {{--swipeToSlide: true,--}}
                                {{--touchMove: true,--}}
                                {{--draggable: true,--}}
                                {{--accessibility: true,--}}
                                {{--adaptiveHeight: false,--}}
                                {{--prevArrow:'',--}}
                                {{--nextArrow:'',--}}
                                {{--infinite: true,--}}
                                {{--rtl: ($('html').attr('dir') === 'rtl' ? true : false),--}}
                                {{--slidesToShow: 2,--}}
                                {{--slidesToScroll: 2,--}}
                                {{--responsive: [--}}
                                    {{--{--}}
                                        {{--breakpoint: 767,--}}
                                        {{--settings: {--}}
                                            {{--slidesToShow: 1,--}}
                                            {{--slidesToScroll: 1--}}
                                        {{--}--}}
                                    {{--}--}}
                                {{--]--}}
                            {{--});--}}
                        {{--}--}}

                        {{--// fire swipe event--}}
                        {{--$('#reviews .testimonials').on('swipe', function(event, slick, direction){--}}
                            {{--let swiped = direction.charAt(0).toUpperCase() + direction.slice(1);--}}
                            {{--gu_fire_event('Testimonials', 'Swipe' + swiped, 's4');--}}
                        {{--});--}}

                    {{--});--}}
                {{--});--}}
            {{--</script>--}}
            {{--<div id="29-99-offer-section" class="offer-section">--}}
                {{--<div id="offer" data-title="$29.99 Offer Section" class="main-visible-offer with-variants-color">--}}
                    {{--<div class="offer-brand-logo d-md-none d-lg-none">--}}
                        {{--<img src="{{ asset('/') }}flexovalFiles/aculief/aculief-logo-02.svg" alt="">--}}
                    {{--</div>--}}
                    {{--<h2 id="offer_headline" class="offer-headline" data-variation='[]'>Naturally Relieve Your Pain Today!</h2>--}}
                    {{--<h2 id="offer_subheadline" class="offer-subheadline " data-variation='[]'>Keep one in your car, at work, and by your bed! Makes a great gift!</h2>--}}
                    {{--<style>--}}
                        {{--#offer .cta-button {--}}
                            {{--color            : #fff;--}}
                            {{--background-color : #25ae4e;--}}
                        {{--}--}}
                    {{--</style>--}}
                    {{--<div class="offer-bundles">--}}
                        {{--<div id="29-99-buy-1-full-price" class="bundle bundle-3" data-slug="29-99-buy-1-full-price" data-bundle-qty="fixed" data-cta-button="shown" data-index="1">--}}
                            {{--<div class="bundle-container">--}}
                                {{--<div class="checkbox d-md-none d-lg-none">--}}
                                    {{--<input name="check" type="checkbox">--}}
                                {{--</div>--}}
                                {{--<div id="bundle_title_1" class="bundle-title d-none d-md-block d-lg-block">--}}
                                    {{--<span><strong>1</strong> – Aculief</span>--}}
                                {{--</div>--}}
                                {{--<div class="bundle-subtitle">--}}
                                    {{--<span></span>--}}
                                {{--</div>--}}
                                {{--<div class="bundle-image" style="padding-top: 40px; padding-bottom: 34px;">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/aculief/aculief-b1-01.png" alt="Bundle Image" />--}}
                                {{--</div>--}}
                                {{--<div class="bundle-title mobile  d-md-none d-lg-none">--}}
                                    {{--<span id="bundle_title"><strong>1</strong> – Aculief</span>--}}
                                {{--</div>--}}
                                {{--<div class="bundle-subtitle alternative d-none">--}}
                                    {{--<span></span>--}}
                                {{--</div>--}}
                                {{--<style>--}}
                                    {{--.bundle .promo-text {--}}
                                        {{--color: #333333!important;--}}
                                        {{--font-weight: 700!important;--}}
                                    {{--}--}}
                                {{--</style>--}}
                                {{--<div class="shipping  d-md-none d-lg-none">--}}
                              {{--<span class="paid-shipping">--}}
                              {{--+S&H--}}
                              {{--</span>--}}
                                {{--</div>--}}
                                {{--<div id="bundle_pricing_01" class="bundle-pricing-text rtl-mobile-right-text ">--}}
                                    {{--<div class="retail-price override-pricing-1">$$Retail</div>--}}
                                {{--</div>--}}
                                {{--<div class="shipping d-none d-md-block d-lg-block">--}}
                                    {{--<div class="paid-shipping">+S&H</div>--}}
                                {{--</div>--}}
                                {{--<div class="bundle-benefit d-none d-md-block d-lg-block"></div>--}}
                                {{--<div class="cta-message"></div>--}}
                                {{--<div class="cta-button cta checkout " data-translation-textsizer>ORDER NOW</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<style>--}}
                            {{--#offer .bundle {--}}
                                {{----selected-color : #cee0e5;--}}
                            {{--}--}}
                            {{--/* IE11 Only */--}}
                            {{--@media "only screen" and--}}
                            {{--(-ms-high-contrast: active--}}
                            {{--), (-ms-high-contrast: none--}}
                            {{--) {--}}
                                {{--#offer .bundle.author-selected {--}}
                                    {{--background-color : #cee0e5;--}}
                                {{--}--}}
                                {{--body.layout-2 #offer .bundle.author-selected,--}}
                                {{--body[class^='layout-02'] #offer .bundle.author-selected,--}}
                                {{--body[class*=' layout-02'] #offer .bundle.author-selected {--}}
                                    {{--background-color : #fff !important;--}}
                                {{--}--}}
                                {{--body.layout-2 #offer .bundle.author-selected.selected,--}}
                                {{--body.layout-2 #offer .bundle.selected,--}}
                                {{--body[class^='layout-02'] #offer .bundle.author-selected.selected,--}}
                                {{--body[class^='layout-02'] #offer .bundle.selected,--}}
                                {{--body[class*=' layout-02'] #offer .bundle.author-selected.selected,--}}
                                {{--body[class*=' layout-02'] #offer .bundle.selected {--}}
                                    {{--background : #cee0e5 !important;--}}
                                {{--}--}}
                            {{--}--}}
                            {{--}--}}
                        {{--</style>--}}
                        {{--<div id="29-99-buy-2-get-1-free" class="bundle selected author-selected bundle-3" data-slug="29-99-buy-2-get-1-free" data-bundle-qty="fixed" data-cta-button="shown" data-index="2">--}}
                            {{--<div class="ribbon" data-translation-textsizer style="background-color: #ee4433">--}}
                                {{--<span>Most Popular</span>--}}
                            {{--</div>--}}
                            {{--<div class="bundle-container">--}}
                                {{--<div class="checkbox d-md-none d-lg-none">--}}
                                    {{--<input name="check" type="checkbox">--}}
                                {{--</div>--}}
                                {{--<div id="bundle_title_2" class="bundle-title d-none d-md-block d-lg-block">--}}
                                    {{--<span><strong>3</strong> – Aculief</span>--}}
                                {{--</div>--}}
                                {{--<div class="bundle-subtitle">--}}
                                    {{--<span></span>--}}
                                {{--</div>--}}
                                {{--<div class="bundle-image" style="padding-top: 0px; padding-bottom: 0px;">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/aculief/aculief-b2-01.png" alt="Bundle Image" />--}}
                                {{--</div>--}}
                                {{--<div class="bundle-title mobile d-none d-md-none d-lg-none">--}}
                                    {{--<span id="bundle_title"><strong>3</strong> – Aculief</span>--}}
                                {{--</div>--}}
                                {{--<div class="bundle-subtitle alternative d-none">--}}
                                    {{--<span></span>--}}
                                {{--</div>--}}
                                {{--<style>--}}
                                    {{--.bundle .promo-text {--}}
                                        {{--color: #333333!important;--}}
                                        {{--font-weight: 700!important;--}}
                                    {{--}--}}
                                {{--</style>--}}
                                {{--<div class="promo-text rtl-mobile-right-text">Buy 2, Get 1 FREE</div>--}}
                                {{--<div class="shipping  d-md-none d-lg-none">--}}
                              {{--<span class="usa-shipping">--}}
                              {{--<strong><span class="d-inline-block d-md-none d-lg-block">+</span>&nbsp;FREE USA SHIPPING</strong>--}}
                              {{--<img loading="lazy" src="{{ asset('/') }}flexovalFiles/aculief/free-shipping.png" class="desktop-only d-lg-inline-block" alt="Free Shipping" width="50" height="27">--}}
                              {{--</span>--}}
                                {{--</div>--}}
                                {{--<div id="bundle_pricing_02" class="bundle-pricing-text rtl-mobile-right-text ">--}}
                                    {{--<div class="per-unit-total override-pricing-2">$$PerUnitTotal</div>--}}
                                {{--</div>--}}
                                {{--<div id="bundle_pricing_03" class="bundle-pricing-text rtl-mobile-right-text ">--}}
                                    {{--<div class="you-save override-pricing-3">$$YouSave</div>--}}
                                {{--</div>--}}
                                {{--<div class="shipping d-none d-md-block d-lg-block">--}}
                              {{--<span class="usa-shipping">--}}
                              {{--<strong>FREE USA Shipping</strong>--}}
                              {{--<img loading="lazy" src="{{ asset('/') }}flexovalFiles/aculief/shipping-icon-black.svg" class="desktop-only d-lg-inline-block" alt="Free Shipping" width="50" height="27">--}}
                              {{--</span>--}}
                                {{--</div>--}}
                                {{--<div class="bundle-benefit d-none d-md-block d-lg-block"></div>--}}
                                {{--<div class="cta-message"></div>--}}
                                {{--<div class="cta-button cta checkout " data-translation-textsizer>ORDER NOW</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div id="29-99-buy-3-get-2-free" class="bundle bundle-3" data-slug="29-99-buy-3-get-2-free" data-bundle-qty="fixed" data-cta-button="shown" data-index="3">--}}
                            {{--<div class="ribbon" data-translation-textsizer style="background-color: #2dad57">--}}
                                {{--<span>Best Deal</span>--}}
                            {{--</div>--}}
                            {{--<div class="bundle-container">--}}
                                {{--<div class="checkbox d-md-none d-lg-none">--}}
                                    {{--<input name="check" type="checkbox">--}}
                                {{--</div>--}}
                                {{--<div id="bundle_title_3" class="bundle-title d-none d-md-block d-lg-block">--}}
                                    {{--<span><strong>5</strong> – Aculief</span>--}}
                                {{--</div>--}}
                                {{--<div class="bundle-subtitle">--}}
                                    {{--<span></span>--}}
                                {{--</div>--}}
                                {{--<div class="bundle-image" style="padding-top: 0px; padding-bottom: 0px;">--}}
                                    {{--<img src="{{ asset('/') }}flexovalFiles/aculief/aculief-b3-01.png" alt="Bundle Image" />--}}
                                {{--</div>--}}
                                {{--<div class="bundle-title mobile d-none d-md-none d-lg-none">--}}
                                    {{--<span id="bundle_title"><strong>5</strong> – Aculief</span>--}}
                                {{--</div>--}}
                                {{--<div class="bundle-subtitle alternative d-none">--}}
                                    {{--<span></span>--}}
                                {{--</div>--}}
                                {{--<style>--}}
                                    {{--.bundle .promo-text {--}}
                                        {{--color: #333333!important;--}}
                                        {{--font-weight: 700!important;--}}
                                    {{--}--}}
                                {{--</style>--}}
                                {{--<div class="promo-text rtl-mobile-right-text">Buy 3, Get 2 FREE</div>--}}
                                {{--<div class="shipping  d-md-none d-lg-none">--}}
                              {{--<span class="usa-shipping">--}}
                              {{--<strong><span class="d-inline-block d-md-none d-lg-block">+</span>&nbsp;FREE USA SHIPPING</strong>--}}
                              {{--<img loading="lazy" src="{{ asset('/') }}flexovalFiles/aculief/free-shipping.png" class="desktop-only d-lg-inline-block" alt="Free Shipping" width="50" height="27">--}}
                              {{--</span>--}}
                                {{--</div>--}}
                                {{--<div id="bundle_pricing_04" class="bundle-pricing-text rtl-mobile-right-text ">--}}
                                    {{--<div class="per-unit-total override-pricing-4">$$PerUnitTotal</div>--}}
                                {{--</div>--}}
                                {{--<div id="bundle_pricing_05" class="bundle-pricing-text rtl-mobile-right-text ">--}}
                                    {{--<div class="you-save override-pricing-5">$$YouSave</div>--}}
                                {{--</div>--}}
                                {{--<div class="shipping d-none d-md-block d-lg-block">--}}
                              {{--<span class="usa-shipping">--}}
                              {{--<strong>FREE USA Shipping</strong>--}}
                              {{--<img loading="lazy" src="{{ asset('/') }}flexovalFiles/aculief/shipping-icon-black.svg" class="desktop-only d-lg-inline-block" alt="Free Shipping" width="50" height="27">--}}
                              {{--</span>--}}
                                {{--</div>--}}
                                {{--<div class="bundle-benefit d-none d-md-block d-lg-block"></div>--}}
                                {{--<div class="cta-message"></div>--}}
                                {{--<div class="cta-button cta checkout " data-translation-textsizer>ORDER NOW</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="cta-button cta checkout mobile d-md-none d-lg-none">ORDER NOW</div>--}}
                    {{--<div class="cta-message mobile"></div>--}}
                {{--</div>--}}
                {{--<section id="variant-selector" class="bundle-extra" data-variant-selected="0">--}}
                    {{--<div class="header">--}}
                        {{--<h1>Next Step – Select Your Color:</h1>--}}
                        {{--<h4>Color selection applies to your entire order.</h4>--}}
                    {{--</div>--}}
                    {{--<div class="content">--}}
                        {{--<div id="vsc-colors">--}}
                            {{--<h5 class="title"></h5>--}}
                            {{--<img src="https://getaculief.io/" alt="" class="product-image">--}}
                            {{--<div class="colors options" data-option-count="">--}}
                                {{--<div class="color option" onclick="gu_vs.click(this)">--}}
                                    {{--<div class="color-header">--}}
                                        {{--<h6 class="name">Color</h6>--}}
                                    {{--</div>--}}
                                    {{--<div class="circle selector"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</section>--}}
                {{--<script id="tmpl-product-variants-template" type="text/html">--}}
                    {{--<#--}}
                    {{--let writeSeparatorOnce = true;--}}
                    {{--let writeModalOnce = true;--}}
                    {{--#>--}}
                    {{--<div class="variant-head">--}}
                        {{--<h5 class="title">--}}
                            {{--{{data.headline}}        </h5>--}}
                        {{--<# if(data.product_image){ #>--}}
                        {{--<img class="product-image" src="{{data.product_image}}" alt="">--}}
                        {{--<# } #>--}}
                    {{--</div>--}}

                    {{--<div class="product-variants">--}}
                        {{--<div class="options" data-option-count="<# print(data.variants.length) #>">--}}
                            {{--<# if(data.apply_to_all){ #>--}}
                            {{--<# (data.variants).forEach(function(variant,index){ #>--}}

                            {{--<div class="option <# print(variant.display_active ? 'active' : '') #> <# print(variant.display_visually_hidden ? 'visually-hidden' : '') #>" data-variant-id="{{variant.id}}" data-variant-index="{{index}}" <# print(variant.display_featured_msg ? 'data-featured="'+variant.display_featured_msg+'"' : '') #> >--}}
                            {{--<input type="checkbox" name="checkbox" <# print(index + 1 == 1 ? 'checked' : '') #> >--}}
                            {{--<div class="option-header">--}}
                                {{--<div class="name"><# print(variant.display_title ? variant.display_title : variant.title) #></div>--}}
                            {{--</div>--}}
                            {{--<div class="selector" style="<# print(variant.display_hexcolor ? 'background: ' + variant.display_hexcolor : '') #>" >--}}
                                {{--<# if(variant.display_selector !== ''){ #>--}}
                                {{--<svg width="100px" height="100px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid meet">{{{variant.display_selector}}}</svg>--}}
                                {{--<# } else { #>--}}
                                {{--<img src="{{variant.display_image}}">--}}
                                {{--<# } #>--}}
                            {{--</div>--}}
                            {{--<div class="description">--}}
                                {{--<div class="inner">--}}
                                    {{--<strong class="name"><# print(variant.display_title ? variant.display_title : variant.title) #></strong>--}}
                                    {{--<# if(variant.display_pricing_info){ #>--}}
                                    {{--<div class="pricing-info">{{{variant.display_pricing_info}}}</div>--}}
                                    {{--<# } #>--}}
                                    {{--<# if(variant.display_shipping_info){ #>--}}
                                    {{--<div class="shipping-info">{{{variant.display_shipping_info}}}</div>--}}
                                    {{--<# } #>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<# }) #>--}}
                        {{--<#} else { #>--}}
                        {{--<# (data.variants).forEach(function(variant,index){ #>--}}

                        {{--<# if(!variant.enabled && writeSeparatorOnce){ #>--}}
                        {{--<div class="horizontal-separator">--}}
                          {{--<span>--}}
                              {{--<# print(guSubstituteString(data.discount_percent+'% Off')) #>--}}
                              {{--<a href="#" data-enable-addon="remove"><# print(guSubstituteString('Remove?')) #></a>--}}
                          {{--</span>--}}
                        {{--</div>--}}
                        {{--<# writeSeparatorOnce = false;#>--}}
                        {{--<# } #>--}}

                        {{--<div class="option" data-product-id="{{variant.choices[0].product_id}}" data-variant-choices="<# print(variant.choices.length) #>" data-variant-index="{{index}}" data-variant-enabled="{{variant.enabled}}">--}}

                            {{--<# if(!variant.enabled){ #>--}}
                            {{--<div class="addon-variant-label">--}}
                                {{--<span>{{variant.addon_row_label}}</span>--}}
                                {{--<a href="#" data-enable-addon="remove"><# print(guSubstituteString('Remove?')) #></a>--}}
                            {{--</div>--}}
                            {{--<# } #>--}}

                            {{--<div class="label"><span>{{variant.title}}</span> {{index + 1}}</div>--}}
                            {{--<# (variant.choices).forEach(function(choice,choiceIndex){ #>--}}
                            {{--<label class="selector">--}}
                                {{--<input name="group{{index + 1}}" value="{{choice.id}}" data-product-id="{{choice.product_id}}" data-title="{{variant.title}} {{index + 1}}: {{choice.title}}" type="radio" class="visually-hidden" <# print(choiceIndex + 1 == 1 ? 'checked' : '') #>>--}}
                                {{--<span><# print(guSubstituteString(choice.title)) #></span>--}}
                            {{--</label>--}}
                            {{--<# }) #>--}}
                        {{--</div>--}}

                        {{--<# if(!variant.enabled && writeModalOnce){ #>--}}
                        {{--<div class="modal fade" id="addon-modal" tabindex="-1" role="dialog" aria-hidden="true">--}}
                            {{--<div class="modal-dialog modal-xl modal-dialog-centered" role="document">--}}
                                {{--<div class="modal-content">--}}
                                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                        {{--<span aria-hidden="true">&times;</span>--}}
                                    {{--</button>--}}
                                    {{--<div class="modal-body">--}}


                                        {{--<div class="block">--}}
                                            {{--<div class="inner">--}}
                                                {{--<div class="text-leading">{{{variant.addon_text_lead}}}</div>--}}
                                                {{--<div class="text-discount">{{{variant.addon_text_discount}}}</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        {{--<div class="block">--}}
                                            {{--<div class="inner">--}}
                                                {{--<div class="text-copy">--}}
                                                    {{--{{variant.addon_text_copy}}--}}
                                                {{--</div>--}}
                                                {{--<div class="text-pricing">--}}
                                                    {{--<span>{{{variant.retail_price}}}</span>--}}
                                                    {{--<span>{{{variant.discount_price}}}</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        {{--<div class="block">--}}
                                            {{--<div class="inner">--}}
                                                {{--<div class="option-heading"><# print(guSubstituteString('Select')) #></div>--}}
                                                {{--<div class="option-remote" data-variant-index-remote="{{index}}" data-remote-choices="<# print(variant.choices.length) #>">--}}
                                                    {{--<# (variant.choices).forEach(function(choice,choiceIndex){ #>--}}
                                                    {{--<label class="selector-remote">--}}
                                                        {{--<input name="remote{{index + 1}}" value="{{choice.id}}" data-product-id="{{choice.product_id}}" data-title="{{variant.title}} {{index + 1}}: {{choice.title}}" type="radio" class="visually-hidden" <# print(choiceIndex + 1 == 1 ? 'checked' : '') #>>--}}
                                                        {{--<span><# print(guSubstituteString(choice.title)) #></span>--}}
                                                    {{--</label>--}}
                                                    {{--<# }) #>--}}
                                                {{--</div>--}}

                                                {{--<button class="cta-green" data-enable-addon="{{index}}">Yes, I Want This!</button>--}}
                                                {{--<a href="#" data-dismiss="modal">No Thank You</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}


                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<# writeModalOnce = false;#>--}}
                        {{--<# } #>--}}

                        {{--<# }) #>--}}
                        {{--<# } #>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                {{--</script>--}}
                {{--<div id="offer-02-inline-upsell" class="upsell bundle-extra upsell-container" data-slug="offer-02-inline-upsell">--}}
                    {{--<div>--}}
                        {{--<div id="upsell-inline-headline" class="headline" data-alts='null'>--}}
                            {{--<h3>ONE-TIME BONUS: 50% OFF Extra-Strength Migraine Relief</h3>--}}
                        {{--</div>--}}
                        {{--<div class="container">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-lg-6">--}}
                                    {{--<div id="guGallery-2" class="gallery-container">--}}
                                        {{--<div class="gallery-video-container gu-hidden">--}}
                                            {{--<div id="guGallery-2-youtubeVideoWrapper" class="galleryVideoWrapper videoWrapper youtubeVideoWrapper"><iframe loading="lazy" width="545" height="301" src="#" frameborder="0" allowfullscreen></iframe></div>--}}
                                            {{--<div id="guGallery-2-wistiaVideoWrapper" class="galleryVideoWrapper videoWrapper wistiaVideoWrapper">--}}
                                                {{--<div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">--}}
                                                    {{--<div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">--}}
                                                        {{--<div id="guGallery-2-wistiaPlaceholder" class="" style="height:100%;position:relative;width:100%">--}}
                                                            {{--<div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img id="guGallery-2-wistiaThumbnail" src="#" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" onload="this.parentNode.style.opacity=1;" /></div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div id="guGallery-2-sproutVideoWrapper" class="galleryVideoWrapper videoWrapper sproutVideoWrapper"></div>--}}
                                        {{--</div>--}}
                                        {{--<div class="gallery-image-container single">--}}
                                            {{--<img src="#" alt="">--}}
                                        {{--</div>--}}
                                        {{--<ul id="guGallery-2-thumbnails" class="gallery-thumbnails gu-hidden">--}}
                                            {{--<li><img width="150" height="150" src="{{ asset('/') }}flexovalFiles/aculief/aculief-D306-ip-01-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" id="guGallery-2-thumbnail-1" srcset="{{ asset('/') }}flexovalFiles/aculief/aculief-D306-ip-01-150x150.jpg 150w, {{ asset('/') }}flexovalFiles/aculief/aculief-D306-ip-01-85x85.jpg 85w, {{ asset('/') }}flexovalFiles/aculief/aculief-D306-ip-01-350x347.jpg 350w, {{ asset('/') }}flexovalFiles/aculief/aculief-D306-ip-01-75x75.jpg 75w, {{ asset('/') }}flexovalFiles/aculief/aculief-D306-ip-01-180x180.jpg 180w" sizes="(max-width: 150px) 100vw, 150px" /></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<script type="text/javascript">--}}
                                        {{--(function($){--}}
                                            {{--$(document).ready(function () {--}}

                                                {{--//vars--}}
                                                {{--let curGallery = 'guGallery-2';--}}
                                                {{--let mainimagecontainer = $('#' + curGallery).find('.gallery-image-container');--}}

                                                {{--//add in scripts--}}
                                                {{--let vidIDscript = document.createElement("script");--}}
                                                {{--vidIDscript.type = "text/javascript";--}}
                                                {{--vidIDscript.id = curGallery + "-wistiaIdScript";--}}
                                                {{--$('#' + curGallery + '-wistiaVideoWrapper').append(vidIDscript);--}}


                                                {{--// let defaultScript = document.createElement( "script" );--}}
                                                {{--// defaultScript.type = "text/javascript";--}}
                                                {{--// defaultScript.src = "https://fast.wistia.com/assets/external/E-v1.js";--}}
                                                {{--// $('#' + curGallery +'-wistiaVideoWrapper').append(defaultScript);--}}
                                                {{--//--}}
                                                {{--// //add in Sprout scripts--}}
                                                {{--// let sproutScript = document.createElement( "script" );--}}
                                                {{--// sproutScript.type = "text/javascript";--}}
                                                {{--// sproutScript.src = "https://c.sproutvideo.com/player_api.js";--}}
                                                {{--// $('#' + curGallery +'-sproutVideoWrapper').append(sproutScript);--}}

                                                {{--// main loop around thumbnails--}}
                                                {{--$("#" + curGallery + "-thumbnails li").each(function (index) {--}}
                                                    {{--let thumbAlt = $(this).find('img').attr('alt');--}}

                                                    {{--if (thumbAlt.length) {--}}
                                                        {{--//make sure that the alt contains a video--}}
                                                        {{--if (thumbAlt.indexOf("youtube") >= 0 || thumbAlt.indexOf("wistia") >= 0 || thumbAlt.indexOf("sproutvideo") >= 0) {--}}

                                                            {{--if (thumbAlt.indexOf("noarrow") == -1) {--}}
                                                                {{--$('<div class="video-thumb-overlay"><span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-play fa-stack-1x fa-inverse"></i></span></div>').prependTo($(this));--}}
                                                            {{--}--}}
                                                        {{--}--}}
                                                    {{--}--}}
                                                {{--});--}}

                                                {{--//thumbnail click fn--}}
                                                {{--$("#" + curGallery + "-thumbnails li").on('click', function () {--}}

                                                    {{--if (!$(this).hasClass('selectedThumb')) {--}}
                                                        {{--//remove 'selected' from whatever had it last--}}
                                                        {{--$("#" + curGallery + "-thumbnails li.selectedThumb").removeClass('selectedThumb');--}}
                                                        {{--//add it to current selection--}}
                                                        {{--$(this).addClass('selectedThumb');--}}

                                                        {{--//something is selected, handle video players and pause anything currently visible--}}
                                                        {{--if ($("#" + curGallery + " .gallery-video-container").css('display') != 'none') {--}}
                                                            {{--if ($("#" + curGallery + "-sproutVideoWrapper").css('display') != 'none') {--}}
                                                                {{--//remove the preroll, we won't need it again--}}
                                                                {{--$("#" + curGallery + "-sproutVideoWrapper .sproutvideo-player.preroll").remove();--}}

                                                                {{--//pause the sprout vid and hide it--}}
                                                                {{--//get iframe src--}}
                                                                {{--let src = $("#" + curGallery + "-sproutVideoWrapper .sproutvideo-player.main").attr('src');--}}
                                                                {{--let id = getSproutVidId(src);--}}

                                                                {{--var video = new SV.Player({videoId: id});--}}
                                                                {{--video.pause();--}}
                                                            {{--} else if ($("#" + curGallery + "-wistiaVideoWrapper").css('display') != 'none') {--}}
                                                                {{--//don't think we actually need to do anything. Wistia is smart and pauses when it's not visible--}}
                                                            {{--} else if ($("#" + curGallery + "-youtubeVideoWrapper").css('display') != 'none') {--}}

                                                                {{--//stop video--}}
                                                                {{--//console.log("try to stop YT");--}}
                                                                {{--$("#" + curGallery + "-youtubeVideoWrapper iframe")[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');--}}

                                                            {{--}--}}
                                                        {{--}--}}

                                                        {{--//now that the video players are taken care of, get selected thumbnail info--}}
                                                        {{--let thumbnail = $(this).find('img');--}}
                                                        {{--let thumbID = $(this).attr('id');--}}


                                                        {{--//check to see if loading an image or a vid--}}
                                                        {{--let thumbAlt = thumbnail.attr('alt');--}}
                                                        {{--let videoString = "";--}}

                                                        {{--//make sure that the alt contains a video and not just regular alt stuff--}}
                                                        {{--if (thumbAlt.indexOf("youtube") >= 0 || thumbAlt.indexOf("wistia") >= 0 || thumbAlt.indexOf("sproutvideo") >= 0) {--}}
                                                            {{--videoString = thumbAlt;--}}
                                                        {{--}--}}


                                                        {{--//if there is a--}}
                                                        {{--if (videoString.length) {--}}
                                                            {{--LoadVideo(videoString, true, thumbID);--}}

                                                            {{--//throw event of item clicked--}}
                                                            {{--gu_fire_event('GalleryChanged', 'ViewedVideo', thumbID);--}}
                                                        {{--} else {--}}
                                                            {{--let thumbSrc = thumbnail.attr('src');--}}
                                                            {{--LoadImage(thumbSrc, thumbID);--}}

                                                            {{--//throw event of item clicked--}}
                                                            {{--gu_fire_event('GalleryChanged', 'ViewedImage', thumbID);--}}
                                                        {{--}--}}
                                                    {{--}--}}
                                                {{--});--}}

                                                {{--$("#" + curGallery).on('init', function () {--}}

                                                    {{--let firstImg = $("#" + curGallery).find('li').first().find('img');--}}

                                                    {{--//only load if there's a first image--}}
                                                    {{--if (firstImg.length) {--}}
                                                        {{--let firstAlt = firstImg.attr('alt');--}}
                                                        {{--let firstSrc = firstImg.attr('src');--}}
                                                        {{--let firstId = firstImg.attr('id');--}}

                                                        {{--if (firstAlt.length) {--}}
                                                            {{--//.log(curGallery + ' first img alt' + firstAlt);--}}

                                                            {{--//make sure that the alt contains a video and not just regular alt stuff--}}
                                                            {{--if (firstAlt.indexOf("youtube") >= 0 || firstAlt.indexOf("wistia") >= 0 || firstAlt.indexOf("sproutvideo") >= 0) {--}}
                                                                {{--LoadVideo(firstAlt, false, firstId);--}}
                                                                {{--//console.log(curGallery + ' initialized with a vid');--}}
                                                            {{--}--}}
                                                            {{--//LoadImage(firstSrc, firstId);--}}
                                                        {{--} else {--}}
                                                            {{--//console.log(curGallery + ' first img src' + firstSrc);--}}
                                                            {{--LoadImage(firstSrc, firstId);--}}
                                                            {{--//console.log(curGallery + ' initialized with img');--}}
                                                        {{--}--}}

                                                    {{--}--}}


                                                {{--});--}}

                                                {{--//swap out image in main container and display it--}}
                                                {{--//and make sure that any videos are hidden and stopped/paused--}}
                                                {{--function LoadImage(src, thumbID) {--}}


                                                    {{--let cleanlink = src.replace(/-\d+[Xx]\d+\./g, '.');--}}
                                                    {{--mainimagecontainer.find('img').attr('src', cleanlink);--}}

                                                    {{--//Handle video players--}}

                                                    {{--if ($("#" + curGallery + " .gallery-video-container").css('display') != 'none') {--}}
                                                        {{--//make sure video is hidden and image is shown--}}
                                                        {{--$("#" + curGallery + " .gallery-video-container").fadeOut("fast", function () {--}}
                                                            {{--$("#" + curGallery + " .galleryVideoWrapper").hide();--}}
                                                            {{--//once vid player is faded, fade in image wrapper--}}
                                                            {{--$("#" + curGallery + " .gallery-image-container").fadeIn("fast");--}}
                                                        {{--});--}}
                                                    {{--}--}}
                                                {{--}--}}

                                                {{--function LoadVideo(videoString, autoplay, thumbID) {--}}

                                                    {{--//hide all individual video players--}}
                                                    {{--$("#" + curGallery + " .galleryVideoWrapper").hide();--}}

                                                    {{--//determine the type of video and show the correct player--}}
                                                    {{--//check for youtube alt tag video src--}}
                                                    {{--if (videoString.indexOf('youtube') >= 0) {--}}

                                                        {{--if (autoplay) {--}}
                                                            {{--videoString += '?autoplay=1&amp;';--}}
                                                        {{--} else {--}}
                                                            {{--videoString += '?'--}}
                                                        {{--}--}}

                                                        {{--let parts = videoString.split('v=');--}}
                                                        {{--let id = parts[parts.length - 1];--}}

                                                        {{--let newId = "https://www.youtube.com/embed/" + id + "enablejsapi=1&amp;rel=0&amp;controls=1&amp;showinfo=0&amp";--}}

                                                        {{--//set vid id--}}
                                                        {{--$("#" + curGallery + "-youtubeVideoWrapper iframe").attr('src', newId);--}}

                                                        {{--//display YT player--}}
                                                        {{--$("#" + curGallery + "-youtubeVideoWrapper").show();--}}

                                                    {{--}--}}
                                                    {{--//check for wistia alt tag video src--}}
                                                    {{--else if (videoString.indexOf('wistia') >= 0) {--}}

                                                        {{--//get wistia vid id--}}
                                                        {{--let parts = videoString.split('https://getaculief.io/medias/');--}}
                                                        {{--//take the last entry that will have the id in it and strip out and possible 'noarrow' text--}}
                                                        {{--parts = parts[parts.length - 1].split(' ');--}}
                                                        {{--let id = parts[0];--}}


                                                        {{--//set vid id--}}
                                                        {{--$("#" + curGallery + "-wistiaPlaceholder").removeClass();--}}
                                                        {{--$("#" + curGallery + "-wistiaPlaceholder").addClass('wistia_embed wistia_async_' + id + ' videoFoam=true wistia_embed_initialized');--}}
                                                        {{--$("#" + curGallery + "-wistiaThumbnail").attr('src', 'https://fast.wistia.com/embed/medias/' + id + '/swatch');--}}

                                                        {{--//use the api to check if there was already a video, if not create one and start playing it--}}
                                                        {{--if (typeof window[curGallery + "wistiaPlayer"] == 'undefined') {--}}
                                                            {{--window._wq = window._wq || [];--}}
                                                            {{--_wq.push({--}}
                                                                {{--id: id, onReady: function (video) {--}}
                                                                    {{--window[curGallery + "wistiaPlayer"] = video;--}}
                                                                    {{--if (autoplay) {--}}
                                                                        {{--video.play();--}}
                                                                    {{--}--}}


                                                                {{--}--}}
                                                            {{--});--}}
                                                        {{--} else {--}}

                                                            {{--window[curGallery + "wistiaPlayer"].replaceWith(id);--}}

                                                            {{--if (autoplay) {--}}
                                                                {{--window[curGallery + "wistiaPlayer"].play();--}}
                                                            {{--}--}}

                                                        {{--}--}}

                                                        {{--//display Wistia player--}}
                                                        {{--$("#" + curGallery + "-wistiaVideoWrapper").show();--}}
                                                    {{--}--}}

                                                    {{--//check for sprout alt tag video src--}}
                                                    {{--else if (videoString.indexOf('sproutvideo') >= 0) {--}}

                                                        {{--//clear out any old players just in case--}}
                                                        {{--$("#" + curGallery + "-sproutVideoWrapper").empty();--}}

                                                        {{--//separate the urls by preroll and main--}}
                                                        {{--let theUrls = videoString.split(',');--}}

                                                        {{--let baseVidUrl = "https://videos.sproutvideo.com/embed/$$$";--}}

                                                        {{--//no preroll by default--}}
                                                        {{--let hasPreroll = false;--}}

                                                        {{--let mainUrl = '';--}}
                                                        {{--let prerollUrl = undefined;--}}

                                                        {{--//check for an additional preroll vid--}}
                                                        {{--if (theUrls.length > 1) {--}}
                                                            {{--prerollUrl = theUrls[0];--}}
                                                            {{--mainUrl = theUrls[1];--}}
                                                        {{--} else {--}}
                                                            {{--mainUrl = theUrls[0];--}}
                                                        {{--}--}}

                                                        {{--if (typeof prerollUrl != "undefined" && !autoplay) {--}}
                                                            {{--//only add in the preroll if we don't want to auto play--}}

                                                            {{--let preID = prerollUrl.split('https://getaculief.io/embed/')[1];--}}

                                                            {{--prerollUrl = baseVidUrl.replace('$$$', preID);--}}

                                                            {{--let separator = (prerollUrl.indexOf('?') >= 0) ? '&' : '?';--}}
                                                            {{--let defaultPrerollParams = 'transparent=true&background=true&autoPlay=true&loop=true&volume=0';--}}

                                                            {{--prerollUrl = prerollUrl + separator + defaultPrerollParams;--}}

                                                            {{--let preVid = '<iframe loading="lazy" class="sproutvideo-player preroll" src="' + prerollUrl + '" width="540" height="300" frameborder="0" allowfullscreen="" style=""  id="sproutPreroll"></iframe>';--}}

                                                            {{--jQuery("#" + curGallery + "-sproutVideoWrapper").append(preVid);--}}

                                                            {{--// if there's preroll we need to make the main vid transparent--}}
                                                            {{--hasPreroll = true;--}}

                                                        {{--}--}}

                                                        {{--// sep out vid id--}}
                                                        {{--let identifier = mainUrl.split('https://getaculief.io/embed/')[1];--}}

                                                        {{--//swap id in--}}
                                                        {{--mainUrl = baseVidUrl.replace('$$$', identifier);--}}

                                                        {{--if (hasPreroll) {--}}
                                                            {{--let separator = (mainUrl.indexOf('?') >= 0) ? '&' : '?';--}}
                                                            {{--let defaultMainParams = 'transparent=true';--}}
                                                            {{--mainUrl = mainUrl + separator + defaultMainParams;--}}
                                                        {{--}--}}

                                                        {{--if (mainUrl.indexOf("noarrow") != -1) {--}}
                                                            {{--//pull noarrow out so we can then add in the param for removing the unmute button--}}
                                                            {{--var parts = mainUrl.split('noarrow');--}}
                                                            {{--mainUrl = parts[0].split(' ')[0];--}}
                                                            {{--mainUrl += '&volumeControl=0';--}}
                                                        {{--}--}}

                                                        {{--let vidId = identifier.split('https://getaculief.io/')[0];--}}

                                                        {{--//determine if the desired video is the one already in the player--}}
                                                        {{--let src = $("#" + curGallery + "-sproutVideoWrapper .sproutvideo-player.main").attr('src');--}}
                                                        {{--let curID = '';--}}
                                                        {{--if (typeof src != "undefined") {--}}
                                                            {{--curID = getSproutVidId(src);--}}
                                                        {{--}--}}

                                                        {{--if (vidId === curID) {--}}
                                                            {{--//video we're trying to play is the one that's already in the player, just hit play on it and that's it--}}
                                                            {{--var video = new SV.Player({videoId: vidId});--}}

                                                            {{--if (autoplay) {--}}
                                                                {{--video.play();--}}
                                                            {{--}--}}


                                                        {{--} else {--}}
                                                            {{--//there is either no video in there yet, or it's a new one--}}


                                                            {{--let mainVid = '<iframe loading="lazy" class="sproutvideo-player main" src="' + mainUrl + '" width="540" height="300" frameborder="0" allowfullscreen="" id="sproutMainVid"></iframe>';--}}

                                                            {{--//pop vid players in--}}
                                                            {{--$("#" + curGallery + "-sproutVideoWrapper").prepend(mainVid);--}}

                                                            {{--//use api to play video if autoplay enabled--}}

                                                            {{--var video = new SV.Player({videoId: vidId});--}}

                                                            {{--video.bind('ready', function (e) {--}}
                                                                {{--if (autoplay) {--}}
                                                                    {{--video.play();--}}
                                                                {{--}--}}

                                                            {{--});--}}

                                                        {{--}--}}

                                                        {{--//display Sprout player--}}
                                                        {{--$("#" + curGallery + "-sproutVideoWrapper").show();--}}
                                                    {{--}--}}

                                                    {{--if ($("#" + curGallery + " .gallery-image-container").css('display') != 'none') {--}}
                                                        {{--//console.log(curGallery + " img container is vis");--}}
                                                        {{--//make sure image container is hidden and video container is shown--}}
                                                        {{--$("#" + curGallery + " .gallery-image-container").fadeOut("fast", function () {--}}
                                                            {{--//fade in the vid container once the correct player is visible--}}
                                                            {{--$("#" + curGallery + " .gallery-video-container").fadeIn("fast");--}}
                                                        {{--});--}}
                                                    {{--}--}}

                                                {{--}--}}

                                            {{--});--}}

                                            {{--function getSproutVidId(src) {--}}
                                                {{--let id = src.split('https://videos.sproutvideo.com/embed/')[1].split('https://getaculief.io/')[0];--}}
                                                {{--return id;--}}
                                            {{--}--}}

                                        {{--})(jQuery);--}}
                                    {{--</script>--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-6">--}}
                                    {{--<div class="upsell-info">--}}
                                        {{--<div class="description">--}}
                                            {{--<p id="presell-product-name" class="vc_custom_heading e2 vc_custom_1587499175825" style="text-align: center;">Our roll-on <b>extra-strength</b> topical oil is specifically designed to help ease symptoms from even your most powerful migraines. <b>Combine with Aculief for incredible results.</b></p>--}}
                                            {{--<ul>--}}
                                                {{--<li>Relieves migraines</li>--}}
                                                {{--<li>Relieves tension headaches</li>--}}
                                                {{--<li>Soothes aches &amp; pains</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div id="upsell_pricing_inline_0" class="bundle-pricing-text" style=" color: #98908b; font-weight: 700;text-decoration: line-through;">--}}
                                            {{--<div class="retail-price">$$Retail</div>--}}
                                        {{--</div>--}}
                                        {{--<div id="upsell_pricing_inline_1" class="bundle-pricing-text">--}}
                                            {{--<div class="only-price">$$OnlyPrice</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="button-container">--}}
                                            {{--<div class="button" style="background:#f47300">--}}
                                                {{--<span class="original-button-text d-none">YES, GET IT FOR 50% OFF NOW!</span>--}}
                                                {{--<span class="original-button">YES, GET IT FOR 50% OFF NOW!</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="qtybox qtynew ">--}}
                                            {{--<h6>Quantity</h6>--}}
                                            {{--<a class="plus btn">+</a>--}}
                                            {{--<input name="quantity" type="text" value="1">--}}
                                            {{--<a class="minus btn"><span>–</span></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="remove-upsell">Remove?</div>--}}
                                        {{--<span class="cancel-upsell"><a href="#">No Thank You</a></span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div data-slug="offer-01-popup-upsell" class="modal fade upsell-popup gu-extras bundle-extra" id="offer-01-popup-upsell" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                    {{--<div class="modal-dialog modal-xl modal-dialog-centered" role="document">--}}
                        {{--<div class="modal-content">--}}
                            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                {{--<span aria-hidden="true">&times;</span>--}}
                            {{--</button>--}}
                            {{--<div class="modal-body">--}}
                                {{--<div class="desktop-only">--}}
                                    {{--<div class="container">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-lg-5">--}}
                                                {{--<div class="headline">Special Offer!</div>--}}
                                                {{--<div class="popup-special-container usa-shipping">--}}
                                                    {{--<div class="number">50</div>--}}
                                                    {{--<div class="percentoff"><span class="percent">%</span>--}}
                                                        {{--<span class="off">OFF</span>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="clearfix"></div>--}}
                                                {{--</div>--}}
                                                {{--<div class="popup-intl-container gu-hidden">--}}
                                                    {{--<div class="intl-percentoff">--}}
                                                        {{--<p>50% Off</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="popup-image">--}}
                                                    {{--<img loading="lazy" src="{{ asset('/') }}flexovalFiles/aculief/1-green.png" width="200" height="200" alt="">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-lg-7">--}}
                                                {{--<div class="popup-content">--}}
                                                    {{--<div class="description">--}}
                                                        {{--<div class="wpb_text_column wpb_content_element e1">--}}
                                                            {{--<div class="wpb_wrapper">--}}
                                                                {{--<p style="text-align: center;"><strong>Act Now and Get…</strong></p>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="wpb_text_column wpb_content_element e2">--}}
                                                            {{--<div class="wpb_wrapper">--}}
                                                                {{--<p style="text-align: center;"><span style="color: #ff6b01;"><strong>One More for 50% OFF!</strong></span></p>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div id="upsell_pricing_popup_2" class="bundle-pricing-text" style=" color: #ee4433; font-weight: 700;text-decoration: line-through;">--}}
                                                        {{--<div class="retail-price">$$Retail</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div id="upsell_pricing_popup_3" class="bundle-pricing-text">--}}
                                                        {{--<div class="special-price">$$SpecialPrice</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="button-container">--}}
                                                        {{--<div class="button" style="background: #5cbd64;" onClick="this.classList.add('disabled');">--}}
                                                            {{--<span>Yes, I Want This!</span>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<p class="cancel-upsell">No Thank You</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="mobile-only">--}}
                                    {{--<div class="container">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-lg-6">--}}
                                                {{--<div class="headline">Special Offer!</div>--}}
                                                {{--<div class="popup-special-container usa-shipping">--}}
                                                    {{--<div class="number">50</div>--}}
                                                    {{--<div class="percentoff"><span class="percent">%</span>--}}
                                                        {{--<span class="off">OFF</span>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="clearfix"></div>--}}
                                                {{--</div>--}}
                                                {{--<div class="popup-intl-container gu-hidden">--}}
                                                    {{--<div class="intl-percentoff">--}}
                                                        {{--<p>50% Off</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="popup-image">--}}
                                                    {{--<img src="{{ asset('/') }}flexovalFiles/aculief/1-green.png" alt="">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-lg-6">--}}
                                                {{--<div class="popup-content">--}}
                                                    {{--<div class="description">--}}
                                                        {{--<div class="wpb_text_column wpb_content_element e1">--}}
                                                            {{--<div class="wpb_wrapper">--}}
                                                                {{--<p style="text-align: center;"><strong>Act Now and Get…</strong></p>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="wpb_text_column wpb_content_element e2">--}}
                                                            {{--<div class="wpb_wrapper">--}}
                                                                {{--<p style="text-align: center;"><span style="color: #ff6b01;"><strong>One More for 50% OFF!</strong></span></p>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div id="upsell_pricing_popup_mobile_4" class="bundle-pricing-text" style=" color: #ee4433; font-weight: 700;text-decoration: line-through;">--}}
                                                        {{--<div class="retail-price">$$Retail</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div id="upsell_pricing_popup_mobile_5" class="bundle-pricing-text">--}}
                                                        {{--<div class="special-price">$$SpecialPrice</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="button-container">--}}
                                                        {{--<div class="button" style="background: #5cbd64" onClick="this.classList.add('disabled');">--}}
                                                            {{--<span class="original-button-text d-none">Yes, I Want This!</span>--}}
                                                            {{--<span class="original-button">Yes, I Want This!</span>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<p class="cancel-upsell">No Thank You</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<script>--}}
                {{--// Pass phone requirement to JS script functions--}}
                {{--window.isCheckoutPhoneRequired = false--}}
            {{--</script>--}}
            {{--<div id="total-bar" class="total-bar" data-display-type="" data-display-total="0">--}}
                {{--<div class="cart-total">--}}
                    {{--<div class="total">--}}
                        {{--<span class="price">Total:</span>--}}
                    {{--</div>--}}
                    {{--<a href="#" class="checkout button" role="button"><span>Checkout</span></a>--}}
                {{--</div>--}}
                {{--<div class="next-button">--}}
                    {{--<div class="total">--}}
                        {{--<span class="price">Total:</span>--}}
                    {{--</div>--}}
                    {{--<a href="#" class="next button" role="button"><span>Next</span></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div id="checkout" class="checkout-section">--}}
                {{--<div class="row">--}}
                    {{--<div class="cl col-lg-7  checkout-form">--}}
                        {{--<div class="content">--}}
                            {{--<h1>Complete Your Order</h1>--}}
                            {{--<span id="promo_wrap">--}}
                        {{--<span class="promo">--}}
                        {{--<label class="form-field-label" for="promo">Enter Discount Code Here</label>--}}
                        {{--<input id="form-field-promo" type="promo" name="promo" autocorrect="off" spellcheck="off" autocapitalize="off" placeholder="Enter Discount Code Here" type="text">--}}
                        {{--<label id="form-field-promo-error" class="error" for="form-field-promo">Incorrect promo code</label>--}}
                        {{--<button>Apply</button>--}}
                        {{--</span>--}}
                        {{--</span>--}}
                            {{--<div class="payments">--}}
                                {{--<div id="payment-request-button">--}}
                                {{--</div>--}}
                                {{--<div id="paypal-button-container">--}}
                                    {{--<div data-page="" id="paypal-button">--}}
                                        {{--<img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAyNCAzMiIgcHJlc2VydmVBc3BlY3RSYXRpbz0ieE1pbllNaW4gbWVldCIgeG1sbnM9Imh0dHA6JiN4MkY7JiN4MkY7d3d3LnczLm9yZyYjeDJGOzIwMDAmI3gyRjtzdmciPjxwYXRoIGZpbGw9IiMwMDljZGUiIG9wYWNpdHk9IjEiIGQ9Ik0gMjAuOTI0IDcuMTU3IEMgMjEuMjA0IDUuMDU3IDIwLjkyNCAzLjY1NyAxOS44MDEgMi4zNTcgQyAxOC41ODMgMC45NTcgMTYuNDMgMC4yNTcgMTMuNzE2IDAuMjU3IEwgNS43NTggMC4yNTcgQyA1LjI5IDAuMjU3IDQuNzI5IDAuNzU3IDQuNjM0IDEuMjU3IEwgMS4zNTggMjMuNDU3IEMgMS4zNTggMjMuODU3IDEuNjM5IDI0LjM1NyAyLjEwNyAyNC4zNTcgTCA2Ljk3NSAyNC4zNTcgTCA2LjY5NCAyNi41NTcgQyA2LjYgMjYuOTU3IDYuODgxIDI3LjI1NyA3LjI1NSAyNy4yNTcgTCAxMS4zNzUgMjcuMjU3IEMgMTEuODQ0IDI3LjI1NyAxMi4zMTEgMjYuOTU3IDEyLjQwNSAyNi40NTcgTCAxMi40MDUgMjYuMTU3IEwgMTMuMjQ3IDIwLjk1NyBMIDEzLjI0NyAyMC43NTcgQyAxMy4zNDEgMjAuMjU3IDEzLjgwOSAxOS44NTcgMTQuMjc3IDE5Ljg1NyBMIDE0Ljg0IDE5Ljg1NyBDIDE4Ljg2NCAxOS44NTcgMjEuOTU0IDE4LjE1NyAyMi44OSAxMy4xNTcgQyAyMy4zNTggMTEuMDU3IDIzLjE3MiA5LjM1NyAyMi4wNDggOC4xNTcgQyAyMS43NjcgNy43NTcgMjEuMjk4IDcuNDU3IDIwLjkyNCA3LjE1NyBMIDIwLjkyNCA3LjE1NyI+PC9wYXRoPjxwYXRoIGZpbGw9IiMwMTIxNjkiIG9wYWNpdHk9IjEiIGQ9Ik0gMjAuOTI0IDcuMTU3IEMgMjEuMjA0IDUuMDU3IDIwLjkyNCAzLjY1NyAxOS44MDEgMi4zNTcgQyAxOC41ODMgMC45NTcgMTYuNDMgMC4yNTcgMTMuNzE2IDAuMjU3IEwgNS43NTggMC4yNTcgQyA1LjI5IDAuMjU3IDQuNzI5IDAuNzU3IDQuNjM0IDEuMjU3IEwgMS4zNTggMjMuNDU3IEMgMS4zNTggMjMuODU3IDEuNjM5IDI0LjM1NyAyLjEwNyAyNC4zNTcgTCA2Ljk3NSAyNC4zNTcgTCA4LjI4NiAxNi4wNTcgTCA4LjE5MiAxNi4zNTcgQyA4LjI4NiAxNS43NTcgOC43NTQgMTUuMzU3IDkuMzE1IDE1LjM1NyBMIDExLjY1NSAxNS4zNTcgQyAxNi4yNDMgMTUuMzU3IDE5LjgwMSAxMy4zNTcgMjAuOTI0IDcuNzU3IEMgMjAuODMxIDcuNDU3IDIwLjkyNCA3LjM1NyAyMC45MjQgNy4xNTciPjwvcGF0aD48cGF0aCBmaWxsPSIjMDAzMDg3IiBvcGFjaXR5PSIxIiBkPSJNIDkuNTA0IDcuMTU3IEMgOS41OTYgNi44NTcgOS43ODQgNi41NTcgMTAuMDY1IDYuMzU3IEMgMTAuMjUxIDYuMzU3IDEwLjM0NSA2LjI1NyAxMC41MzIgNi4yNTcgTCAxNi43MTEgNi4yNTcgQyAxNy40NjEgNi4yNTcgMTguMjA4IDYuMzU3IDE4Ljc3MiA2LjQ1NyBDIDE4Ljk1OCA2LjQ1NyAxOS4xNDYgNi40NTcgMTkuMzMzIDYuNTU3IEMgMTkuNTIgNi42NTcgMTkuNzA3IDYuNjU3IDE5LjgwMSA2Ljc1NyBDIDE5Ljg5NCA2Ljc1NyAxOS45ODcgNi43NTcgMjAuMDgyIDYuNzU3IEMgMjAuMzYyIDYuODU3IDIwLjY0MyA3LjA1NyAyMC45MjQgNy4xNTcgQyAyMS4yMDQgNS4wNTcgMjAuOTI0IDMuNjU3IDE5LjgwMSAyLjI1NyBDIDE4LjY3NyAwLjg1NyAxNi41MjUgMC4yNTcgMTMuODA5IDAuMjU3IEwgNS43NTggMC4yNTcgQyA1LjI5IDAuMjU3IDQuNzI5IDAuNjU3IDQuNjM0IDEuMjU3IEwgMS4zNTggMjMuNDU3IEMgMS4zNTggMjMuODU3IDEuNjM5IDI0LjM1NyAyLjEwNyAyNC4zNTcgTCA2Ljk3NSAyNC4zNTcgTCA4LjI4NiAxNi4wNTcgTCA5LjUwNCA3LjE1NyBaIj48L3BhdGg+PC9zdmc+" data-v-3716e015="" alt="" class="paypal-logo paypal-logo-pp paypal-logo-color-blue">--}}
                                        {{--<img loading="lazy" width="70" height="19" src="{{ asset('/') }}flexovalFiles/aculief/checkout-paypal-logo.svg" alt="">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="or-pay-with">--}}
                                {{--<p>Or Pay With Credit Card</p>--}}
                            {{--</div>--}}
                            {{--<div class="form">--}}
                                {{--<div class="section shipping-info">--}}
                                    {{--<div class="title">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="container-fluid no-padding">--}}
                                                {{--<h2>Shipping Information</h2>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<form method="post" id="shipping_info" name="Shipping Info">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-12 py-1 px-0">--}}
                                                {{--<div class="wrapper">--}}
                                                    {{--<label for="form-field-shipping_info_email" class="form-field-label">Email</label>--}}
                                                    {{--<input type="email" placeholder="Email" autocomplete="email" name="form_fields[shipping_info_email]" id="form-field-shipping_info_email">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-6 py-1 pl-0 pr-1">--}}
                                                {{--<div class="wrapper">--}}
                                                    {{--<label for="form-field-shipping_info_fname" class="form-field-label">First--}}
                                                        {{--Name</label>--}}
                                                    {{--<input type="text" placeholder="First Name" autocomplete="given-name" name="form_fields[shipping_info_fname]" id="form-field-shipping_info_fname">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-6 py-1 pl-1 pr-0">--}}
                                                {{--<div class="wrapper">--}}
                                                    {{--<label for="form-field-shipping_info_lname" class="form-field-label">Last--}}
                                                        {{--Name</label>--}}
                                                    {{--<input type="text" placeholder="Last Name" autocomplete="family-name" name="form_fields[shipping_info_lname]" id="form-field-shipping_info_lname">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-6 py-1 pl-0 pr-1">--}}
                                                {{--<div class="wrapper">--}}
                                                    {{--<label for="form-field-shipping_info_address" class="form-field-label">Address</label>--}}
                                                    {{--<input type="text" placeholder="Address" autocomplete="address-line1" name="form_fields[shipping_info_address]" id="form-field-shipping_info_address">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-6 py-1 pl-1 pr-0">--}}
                                                {{--<div class="wrapper">--}}
                                                    {{--<label for="form-field-shipping_info_address2" class="form-field-label">Apt/Suite--}}
                                                        {{--(optional)</label>--}}
                                                    {{--<input type="text" placeholder="Apt/Suite (optional)" autocomplete="address-line2" name="form_fields[shipping_info_address2]" id="form-field-shipping_info_address2">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12 py-1 px-0">--}}
                                                {{--<div class="wrapper">--}}
                                                    {{--<label for="form-field-shipping_info_city" class="form-field-label">City</label>--}}
                                                    {{--<input type="text" placeholder="City" autocomplete="address-level2" name="form_fields[shipping_info_city]" id="form-field-shipping_info_city">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12 col-lg-6 py-1 pl-0 pr-0 pr-lg-1">--}}
                                                {{--<div class="wrapper country valid-field">--}}
                                                    {{--<label for="form-field-shipping_info_country" class="form-field-label success">Country</label>--}}
                                                    {{--<select name="form_fields[shipping_info_country]" class="valid" id="form-field-shipping_info_country" autocomplete="country"></select>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-6 col-lg-3 py-1 pl-0 pl-lg-1 pr-1">--}}
                                                {{--<div class="wrapper">--}}
                                                    {{--<label for="form-field-shipping_info_state" class="form-field-label">State</label>--}}
                                                    {{--<input type="text" placeholder="State" autocomplete="address-level1" name="form_fields[shipping_info_state]" id="form-field-shipping_info_state">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-6 col-lg-3 py-1 pl-1 pr-0">--}}
                                                {{--<div class="wrapper">--}}
                                                    {{--<label for="form-field-shipping_info_zip" class="form-field-label">Zip--}}
                                                        {{--code</label>--}}
                                                    {{--<input type="text" placeholder="Zip code" autocomplete="postal-code" name="form_fields[shipping_info_zip]" id="form-field-shipping_info_zip">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12 py-1 px-0">--}}
                                                {{--<div class="wrapper phone">--}}
                                                    {{--<label for="form-field-shipping_info_phone" class="form-field-label">Phone--}}
                                                        {{--(optional)</label>--}}
                                                    {{--<input type="tel" placeholder="Phone (optional)" name="form_fields[shipping_info_phone]" id="form-field-shipping_info_phone">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                                {{--<div class="section paypal-shipping-address gu-hidden">--}}
                                    {{--<div class="title">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-1 pl-0 pr-2">--}}
                                                {{--<img width="45" src="{{ asset('/') }}flexovalFiles/aculief/shipping-truck-icon.svg" alt="">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-11 px-0">--}}
                                                {{--<h2><span>Shipping Information</span></h2>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<form method="post" id="shipping_address" name="PayPal Shipping Method" novalidate>--}}
                                        {{--<div class="option">--}}
                                            {{--<div class="radio"><input type="radio" value="Same as shipping address" name="form_fields[billing_method_radio]" id="form-field-paypalShippingInfo-0"></div>--}}
                                            {{--<label for="form-field-paypalShippingInfo-0">Same as shipping address</label>--}}
                                        {{--</div>--}}
                                        {{--<div class="option">--}}
                                            {{--<div class="radio"><input type="radio" value="Use a different billing address" name="form_fields[billing_method_radio]" id="form-field-paypalShippingInfo-1"></div>--}}
                                            {{--<label for="form-field-paypalShippingInfo-1">Use a different shipping--}}
                                                {{--address</label>--}}
                                        {{--</div>--}}
                                        {{--<div id="alt-shipping_info" class="section shipping alt-paypal-shipping-address gu-hidden gu-checkout-shipping-info">--}}
                                            {{--<input name="form_fields[paypal_shipping_info_email]" type="hidden" id="form-field-paypal_shipping_info_email">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-6 py-1 pl-0 pr-1">--}}
                                                    {{--<div class="wrapper">--}}
                                                        {{--<label for="form-field-paypal_shipping_info_fname" class="form-field-label">First Name</label>--}}
                                                        {{--<input type="text" placeholder="First Name" autocomplete="given-name" name="form_fields[paypal_shipping_info_fname]" id="form-field-paypal_shipping_info_fname">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-6 py-1 pl-1 pr-0">--}}
                                                    {{--<div class="wrapper">--}}
                                                        {{--<label for="form-field-paypal_shipping_info_lname" class="form-field-label">Last Name</label>--}}
                                                        {{--<input type="text" placeholder="Last Name" autocomplete="family-name" name="form_fields[paypal_shipping_info_lname]" id="form-field-paypal_shipping_info_lname">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-6 py-1 pl-0 pr-1">--}}
                                                    {{--<div class="wrapper">--}}
                                                        {{--<label for="form-field-paypal_shipping_info_address" class="form-field-label">Address</label>--}}
                                                        {{--<input type="text" placeholder="Address" autocomplete="address-line1" name="form_fields[paypal_shipping_info_address]" id="form-field-paypal_shipping_info_address">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-6 py-1 pl-1 pr-0">--}}
                                                    {{--<div class="wrapper">--}}
                                                        {{--<label for="form-field-paypal_shipping_info_address2" class="form-field-label">Apt/Suite (optional)</label>--}}
                                                        {{--<input type="text" placeholder="Apt/Suite (optional)" autocomplete="address-line2" name="form_fields[paypal_shipping_info_address2]" id="form-field-paypal_shipping_info_address2">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-12 py-1 px-0">--}}
                                                    {{--<div class="wrapper">--}}
                                                        {{--<label for="form-field-paypal_shipping_info_city" class="form-field-label">City</label>--}}
                                                        {{--<input type="text" placeholder="City" autocomplete="address-level2" name="form_fields[paypal_shipping_info_city]" id="form-field-paypal_shipping_info_city">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-4 py-1 pl-0 pr-lg-1">--}}
                                                    {{--<div class="wrapper country valid-field">--}}
                                                        {{--<label for="form-field-shipping_info_country" class="form-field-label success">Country</label>--}}
                                                        {{--<select name="form_fields[paypal_shipping_info_country]" class="valid" id="form-field-paypal_shipping_info_country" autocomplete="country"></select>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-4 py-1 pl-0 pr-1">--}}
                                                    {{--<div class="wrapper">--}}
                                                        {{--<label for="form-field-paypal_shipping_info_state" class="form-field-label">State</label>--}}
                                                        {{--<input type="text" placeholder="State" autocomplete="address-level1" name="form_fields[paypal_shipping_info_state]" id="form-field-paypal_shipping_info_state">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-4 py-1 pl-1 pr-0">--}}
                                                    {{--<div class="wrapper">--}}
                                                        {{--<label for="form-field-paypal_shipping_info_zip" class="form-field-label">Zip code</label>--}}
                                                        {{--<input type="text" placeholder="Zip code" autocomplete="postal-code" name="form_fields[paypal_shipping_info_zip]" id="form-field-paypal_shipping_info_zip">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="section phone-number-header">--}}
                                            {{--<div class="divider"></div>--}}
                                            {{--<div class="title">--}}
                                                {{--<div class="row">--}}
                                                    {{--<div class="col-1 pl-0 pr-2">--}}
                                                        {{--<img width="30" src="{{ asset('/') }}flexovalFiles/aculief/phone.png" alt="">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-11 px-0">--}}
                                                        {{--<h2>Phone</h2>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="row pt-2 pb-1">--}}
                                                {{--<div class="wrapper phone">--}}
                                                    {{--<label for="form-field-shipping_info_phone" class="form-field-label">Phone--}}
                                                        {{--(optional)</label>--}}
                                                    {{--<input type="tel" placeholder="Phone (optional)" name="form_fields[shipping_info_phone]" id="form-field-paypal_info_phone">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                                {{--<div class="section shipping-method-header gu-hidden gu-checkout-form-reveal">--}}
                                    {{--<div class="divider"></div>--}}
                                    {{--<div class="title">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="container-fluid no-padding">--}}
                                                {{--<h2>Shipping Method</h2>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="section shipping-method-form pb-2 gu-hidden gu-checkout-form-reveal">--}}
                                    {{--<form method="post" id="shipping_method" name="Shipping Method">--}}
                                        {{--<div id="shipping_method">--}}
                                            {{--<div class="option">--}}
                                                {{--<div class="radio"><input type="radio" name="shipping-method" id="form-field-shipping_method_radio"></div>--}}
                                                {{--<label for="form-field-shipping_method_radio">Free Shipping</label>--}}
                                                {{--<p class="price shipping-rate">$0.00</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</form>--}}
                                    {{--<div class="divider"></div>--}}
                                {{--</div>--}}
                                {{--<div class="section payment-info payment-info-header gu-hidden gu-checkout-form-reveal">--}}
                                    {{--<div class="title">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-11 col-lg-8 pl-sm-2 pl-lg-0 no-padding">--}}
                                                {{--<h2>Payment Information</h2>--}}
                                                {{--<p class="subtitle">All transactions are secure and encrypted.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12 col-lg-4 col-md-4 px-0">--}}
                                                {{--<div class="cc-icons">--}}
                                                    {{--<img width="40" class="cc-visa" src="{{ asset('/') }}flexovalFiles/aculief/checkout-visa-icon.svg" alt="VISA">--}}
                                                    {{--<img width="40" class="cc-mastercard" src="{{ asset('/') }}flexovalFiles/aculief/checkout-mastercard-icon.svg" alt="MasterCard">--}}
                                                    {{--<img width="40" class="cc-discover" src="{{ asset('/') }}flexovalFiles/aculief/checkout-discover-icon.svg" alt="Discover">--}}
                                                    {{--<img width="40" class="cc-amex" src="{{ asset('/') }}flexovalFiles/aculief/checkout-amex-icon.svg" alt="Amex">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="section payment-info gu-checkout-form-reveal gu-hidden">--}}
                                    {{--<form id="payment-form">--}}
                                        {{--<div id="card-element">--}}
                                        {{--</div>--}}
                                        {{--<div style="margin-top: 10px; visibility: hidden;" id="card-errors" role="alert"></div>--}}
                                    {{--</form>--}}
                                    {{--<form method="post" id="payment_info" name="Payment Information">--}}
                                        {{--<div class="row pt-2 pb-1">--}}
                                            {{--<div class="wrapper">--}}
                                                {{--<label for="form-field-payment_info_cc" class="form-field-label">Card--}}
                                                    {{--Number</label>--}}
                                                {{--<input type="text" pattern="[0-9]*" placeholder="Card Number" autocomplete="cc-number" name="form_fields[payment_info_cc]" id="form-field-payment_info_cc">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="row py-1">--}}
                                            {{--<div class="col-6 pl-0 pr-1">--}}
                                                {{--<div class="wrapper">--}}
                                                    {{--<label for="form-field-payment_info_exp" class="form-field-label">MM /--}}
                                                        {{--YY</label>--}}
                                                    {{--<input type="text" pattern="[0-9]*" placeholder="MM / YY" autocomplete="cc-exp" name="form_fields[payment_info_exp]" id="form-field-payment_info_exp">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-6 pl-1 pr-0">--}}
                                                {{--<div class="wrapper">--}}
                                                    {{--<label for="form-field-payment_info_cvc" class="form-field-label">CVC</label>--}}
                                                    {{--<input type="number" pattern="[0-9]*" placeholder="CVC" name="form_fields[payment_info_cvc]" id="form-field-payment_info_cvc">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</form>--}}
                                    {{--<div class="divider"></div>--}}
                                {{--</div>--}}
                                {{--<div class="section billing-address-header gu-checkout-form-reveal gu-checkout-form-reveal gu-hidden gu-checkout-shipping-info">--}}
                                    {{--<div class="title">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="container no-padding">--}}
                                                {{--<h2>Billing Address</h2>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<form method="post" id="billing_address" name="Shipping Method">--}}
                                        {{--<div class="option">--}}
                                            {{--<div class="radio"><input type="radio" value="Same as shipping address" name="form_fields[billing_method_radio]" id="form-field-billing_method_radio-0"></div>--}}
                                            {{--<label for="form-field-billing_method_radio-0">Same as shipping address</label>--}}
                                        {{--</div>--}}
                                        {{--<div class="option">--}}
                                            {{--<div class="radio"><input type="radio" value="Use a different billing address" name="form_fields[billing_method_radio]" id="form-field-billing_method_radio-1"></div>--}}
                                            {{--<label for="form-field-billing_method_radio-1">Use a different billing--}}
                                                {{--address</label>--}}
                                        {{--</div>--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                                {{--<div class="section billing billing-address gu-checkout-form-reveal gu-hidden gu-checkout-shipping-info">--}}
                                    {{--<form method="post" id="billing_info" name="Billing Address">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-6 py-1 pl-0 pr-1">--}}
                                                {{--<div class="wrapper">--}}
                                                    {{--<label for="form-field-billing_info_fname" class="form-field-label">First--}}
                                                        {{--Name</label>--}}
                                                    {{--<input type="text" placeholder="First Name" autocomplete="given-name" name="form_fields[billing_info_fname]" id="form-field-billing_info_fname">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-6 py-1 pl-1 pr-0">--}}
                                                {{--<div class="wrapper">--}}
                                                    {{--<label for="form-field-billing_info_lname" class="form-field-label">Last--}}
                                                        {{--Name</label>--}}
                                                    {{--<input type="text" placeholder="Last Name" autocomplete="family-name" name="form_fields[billing_info_lname]" id="form-field-billing_info_lname">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-6 py-1 pl-0 pr-1">--}}
                                                {{--<div class="wrapper">--}}
                                                    {{--<label for="form-field-billing_info_address" class="form-field-label">Address</label>--}}
                                                    {{--<input type="text" placeholder="Address" autocomplete="address-line1" name="form_fields[billing_info_address]" id="form-field-billing_info_address">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-6 py-1 pl-1 pr-0">--}}
                                                {{--<div class="wrapper">--}}
                                                    {{--<label for="form-field-billing_info_address2" class="form-field-label">Apt/Suite--}}
                                                        {{--(optional)</label>--}}
                                                    {{--<input type="text" placeholder="Apt/Suite (optional)" autocomplete="address-line2" name="form_fields[billing_info_address2]" id="form-field-billing_info_address2">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12 py-1 px-0">--}}
                                                {{--<div class="wrapper">--}}
                                                    {{--<label for="form-field-billing_info_city" class="form-field-label">City</label>--}}
                                                    {{--<input type="text" placeholder="City" autocomplete="address-level2" name="form_fields[billing_info_city]" id="form-field-billing_info_city">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12 col-lg-6 px-0 py-lg-1 pl-lg-0 pr-lg-1">--}}
                                                {{--<div class="wrapper country">--}}
                                                    {{--<label for="form-field-billing_info_country" class="form-field-label success">Country</label>--}}
                                                    {{--<select name="form_fields[billing_info_country]" class="valid" id="form-field-billing_info_country" autocomplete="country"></select>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-6 col-lg-3 pl-0 py-1 pl-lg-1 pr-1">--}}
                                                {{--<div class="wrapper">--}}
                                                    {{--<label for="form-field-billing_info_state" class="form-field-label">State</label>--}}
                                                    {{--<input type="text" placeholder="State" autocomplete="address-level1" name="form_fields[billing_info_state]" id="form-field-billing_info_state">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-6 col-lg-3 py-1 pl-1 pr-0">--}}
                                                {{--<div class="wrapper">--}}
                                                    {{--<label for="form-field-billing_info_zip" class="form-field-label">Zip--}}
                                                        {{--code</label>--}}
                                                    {{--<input type="text" placeholder="Zip code" autocomplete="postal-code" name="form_fields[billing_info_zip]" id="form-field-billing_info_zip">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                                {{--<a class="button" id="shipInfoNext">Next</a>--}}
                                {{--<div class="clear"></div>--}}
                                {{--<div class="complete-order gu-checkout-form-reveal gu-hidden">--}}
                                    {{--<div class="divider paypal-hide pt-3"></div>--}}
                                    {{--<a href="#" class="button complete" id="completeOrder">Complete Order</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="cl col-lg-5 details">--}}
                        {{--<div id="mobile-order-summary" class="mobile-nav order-summary-bar">--}}
                            {{--<div class="title">--}}
                                {{--<img width="22" src="{{ asset('/') }}flexovalFiles/aculief/checkout-cart.svg" alt="">--}}
                                {{--<h4>Order Summary</h4>--}}
                                {{--<img loading="lazy" class="arrow" width="15" height="8" src="{{ asset('/') }}flexovalFiles/aculief/checkout-arrow.svg" alt="Toggle">--}}
                            {{--</div>--}}
                            {{--<div class="price">--}}
                                {{--<p>$0.00</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="content">--}}
                            {{--<div class="products">--}}
                                {{--<div class="container">--}}
                                    {{--<div class="product row">--}}
                                        {{--<div class="col-3 col-sm-2 col-md-2 cold-md-1 col-lg-2 col-xl-2 p-0 img">--}}
                                            {{--<div class="wrapper">--}}
                                                {{--<img src="{{ asset('/') }}flexovalFiles/aculief/missing-image.jpg" alt="">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-sm-8 col-md-8 col-lg-8 pl-4 name">--}}
                                            {{--<h6>Product Name - Mechanic 50% OFF</h6>--}}
                                            {{--<p class="subtitle">Subtitle</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-sm-2 col-md-2 col-lg-2 p-0 price">--}}
                                            {{--<h6>$30.00</h6>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="pricing">--}}
                                {{--<div class="row promo hidden">--}}
                                    {{--<div class="col-lg-8 p-0 name">--}}
                                        {{--<h6>Promo Discount</h6>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-lg-4 p-0 price">--}}
                                        {{--<h6>$0.00</h6>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="row tax">--}}
                                    {{--<div class="col-lg-8 p-0 name">--}}
                                        {{--<h6>Tax</h6>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-lg-4 p-0 price">--}}
                                        {{--<h6>$0.00</h6>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="row shipping">--}}
                                    {{--<div class="col-lg-8 p-0 name">--}}
                                        {{--<h6>Shipping</h6>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-lg-4 p-0 price">--}}
                                        {{--<h6>— —</h6>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="row total">--}}
                                    {{--<div class="col-lg-8 p-0 name">--}}
                                        {{--<h6>Total</h6>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-lg-4 p-0 price">--}}
                                        {{--<h6>$0.00</h6>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="checkout-alert">--}}
                        {{--<div class="overlay">--}}
                            {{--<h2 class="text">Main alert text...</h2>--}}
                            {{--<img width="80" src="{{ asset('/') }}flexovalFiles/aculief/checkout-loading-compressed.gif" alt="" class="loading">--}}
                        {{--</div>--}}
                        {{--<div class="confirmation">--}}
                            {{--<div class="wrapper">--}}
                                {{--<div class="text">--}}
                                    {{--<p>Error text</p>--}}
                                {{--</div>--}}
                                {{--<a id="alertConfirmation" role="button">Ok</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="modal fade" id="checkout-error" tabindex="-1" role="dialog" aria-hidden="true">--}}
                        {{--<div class="modal-dialog modal-sm modal-dialog-centered" role="document">--}}
                            {{--<div class="modal-content">--}}
                                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                    {{--<span aria-hidden="true">&times;</span>--}}
                                {{--</button>--}}
                                {{--<div class="modal-body">--}}
                                    {{--<div class="message"></div>--}}
                                    {{--<button type="button" class="btn cta-green" data-dismiss="modal">Ok</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
        <div class="clearfix"></div>
    </div>
    {{--<div class="additional-footer-message">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-12">--}}
                    {{--<div class="footnote-content"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div id="footer-badges">--}}
        {{--<div class="footer-badge-container">--}}
            {{--<div class="logo-container">--}}
                {{--<img src="{{ asset('/') }}flexovalFiles/aculief/trust-badges-60-days-desktop.png" class="desktop-only">--}}
            {{--</div>--}}
            {{--<img src="{{ asset('/') }}flexovalFiles/aculief/mobile-trust-badges-4.png" class="mobile-only">--}}
            {{--<img src="{{ asset('/') }}flexovalFiles/aculief/intl-trust-badges.png" class="gu-hidden">--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="mobile-only guarantee rtl-text-centered">--}}
        {{--<h4>60 Day Money Back Guarantee!</h4>--}}
    {{--</div>--}}
    <div id="faq">
        <div class="faq-wrapper desktop-only">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3><strong>Have a Question?</strong><span class="faq">See Our FAQs</span></h3>
                        <div class="faq-container hidden">
                            <div class="faq-content">
                                <h4 class="question"><strong>How effective is accupressure to the LI4 accupressure point?</strong></h4>
                                <div class="answer hidden">
                                    <div class="content">
                                        <p>Johns Hopkins University published a study 8/2011: Magnetic acupressure was applied to the LI-4 (Hegu) meridian to patients suffering from bone marrow pain. Severe pain decreased dramatically for those receiving magnetic acupressure at the LI-4 acupuncture point. Johns Hopkins stated that proper stimulation of LI4 is effective in relieving headaches, pain of the eyes, toothaches, jaw pain, and pain of the limbs and bones.</p>
                                        <p>NCCAM Study 11/2010 National Center for Complementary and Alternative Medicine: Over 500 clinical trials of acupuncture have been conducted in the past three decades from credible institutions, such as the Mayo Clinic, resulting in substantial evidence that acupuncture is very effective in treating chronic pain, fatigue, anxiety, arthritis, headaches, chemotherapy sickness, and infertility, among other ailments.</p>
                                        <p>Published Men's Health 12/2009: Short-Circuit a Headache in 30 seconds Instead of hitting back with Tylenol or Advil, try pinching the webbed area between your thumb and index finger (either hand) for 30 seconds. It's called acupressure, and while Ivy League researchers haven't carried out a randomized, placebo-controlled study on the strategy, Marc Sharfman, M.D., director of the Headache Institute in Winter Park, Florida, swears by it.</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="faq-content">
                                <h4 class="question"><strong>How long will Aculief take to provide pain relief?</strong></h4>
                                <div class="answer hidden">
                                    <div class="content">
                                        <p>Most of our customers notice relief in as little as 1- 3 minutes and up to 30 minutes.</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="faq-content">
                                <h4 class="question"><strong>How long can I wear Aculief for?</strong></h4>
                                <div class="answer hidden">
                                    <div class="content">
                                        <p>It’s up to you! Aculief may be worn for as little as 5 minutes or up to several hours depending on how bad your pain is and/or how often you need relief provided.</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="faq-content">
                                <h4 class="question"><strong>Is it ok to wear Aculief during physical activities?</strong></h4>
                                <div class="answer hidden">
                                    <div class="content">
                                        <p>Absolutely! Aculief has been purposely designed for active lifestyles and is 100% waterproof. As long as you feel comfortable during the activities or exercise – you can wear it the entire time.</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="faq-content">
                                <h4 class="question"><strong>Are there different colors available?</strong></h4>
                                <div class="answer hidden">
                                    <div class="content">
                                        <p>Yes! Aculief comes in teal, green, black and a variety pack (if you buy more than one). Once you select your bundle above, it will give you the option to choose your favorite color.</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="faq-content">
                                <h4 class="question"><strong>Can I get a discount if I order more than 1?</strong></h4>
                                <div class="answer hidden">
                                    <div class="content">
                                        <p>Yes! We even created exclusive bundles to make ordering multiple Aculiefs more affordable than ever. All of the bundles are available above – the more you buy the more you save!</p>
                                        <p>Many of our customers like to keep an Aculief in their car, one at work, and another by their bed. They also make great gifts for family and friends!</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="faq-content">
                                <h4 class="question"><strong>Are there any side effects?</strong></h4>
                                <div class="answer hidden">
                                    <div class="content">
                                        <p>There are no known side effects other than for pregnant women. The LI-4 acupressure point has been known to induce contractions, therefore, Aculief should not be used by pregnant women.</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="faq-content">
                                <h4 class="question"><strong>Does Aculief come in different sizes?</strong></h4>
                                <div class="answer hidden">
                                    <div class="content">
                                        <p>No. We purposely designed Aculief to fit any size hand. It’s a universal one size fits all.</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="faq-content">
                                <h4 class="question"><strong>Is there a money back guarantee and/or warranty?</strong></h4>
                                <div class="answer hidden">
                                    <div class="content">
                                        <p>Yes. We offer a no hassle, 60-Day Money Back Guarantee. If you’re not 100% satisfied with Aculief, we are happy to help you with a return. We want you to be happy!</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="faq-content">
                                <h4 class="question"><strong>Will I have to pay any additional customs, duties or VAT fees when I receive my order?</strong></h4>
                                <div class="answer hidden">
                                    <div class="content">
                                        <p>Depending on your country, it is possible that you will be charged one or more of these fees when you receive your order.</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq-wrapper mobile-only">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <span data-toggle="modal" data-target="#mobile-faq">Click HERE to View FAQs &gt;&gt;</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<div id="footer">--}}
    {{--<div class="giddy-footer-container">--}}
        {{--<div class="disclaimer">--}}
            {{--<div class="disclaimer">--}}
                {{--<p>Representations regarding the efficacy and safety of Aculief have not been evaluated by the Food and Drug Administration. The FDA only evaluates foods and drugs, not supplements like these products. These products are not intended to diagnose, prevent, treat, or cure any disease. This information does not constitute medical advice and it should not be relied upon as such. Consult with your doctor before modifying your regular medical regime. Aculief is not to be used if you are pregnant.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="references">--}}
            {{--<ul class="giddy-links">--}}
                {{--<li id="footer-source-1-cta"><a href="https://www.healthcmi.com/Acupuncture-Continuing-Education-News/443-acupressurebonepainjohnshopkinsmaryland?br=Aculief&amp;imor=1&amp;gucurrency=usd&amp;gucountry=us&amp;gulanguage=en&amp;guu=64b63e8b-14ac-4a53-adb1-d8546e17f18f" target="_blank" rel="noopener"><sup>1.</sup>Johns Hopkins/Univ. Maryland Study</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
        {{--<ul class="giddy-links">--}}
            {{--<li id="footer-support-cta"><span data-toggle="modal" data-target="#support">Support</span></li>--}}
            {{--<li id="footer-support-cta"><span data-toggle="modal" data-target="#shipping">Shipping</span></li>--}}
            {{--<li id="footer-returns-cta"><span data-toggle="modal" data-target="#returns">Returns</span></li>--}}
            {{--<li id="footer-impressum-cta" class="hidden"><span data-toggle="modal" data-target="#impressum">Impressum</span></li>--}}
            {{--<li id="footer-privacy-cta"><span data-toggle="modal" data-target="#privacy">Privacy</span></li>--}}
            {{--<li id="footer-terms-cta"><span data-toggle="modal" data-target="#terms">Terms</span></li>--}}
        {{--</ul>--}}
        {{--<div id="footer-disclaimer">--}}
            {{--<em><strong>About This Site</strong></em>--}}
            {{--<div class="disclaimer-text">--}}
                {{--<p>Purchasing here is buying directly from __brand, the inventors of this innovative solution. __brand has partnered with GiddyUp, a curator of innovative products, to present a special offer that you won’t find anywhere else. To support these inventors, please consider buying your __brand on this site, rather than 3rd-Party retailers.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<span class="copyright">Copyright &copy; 2021 GiddyUp. All Rights Reserved.</span>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="modal fade iframe-modal" id="privacy" tabindex="-1" role="dialog" aria-labelledby="privacy" aria-hidden="true">--}}
    {{--<div class="modal-dialog modal-dialog-centered" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                {{--<span aria-hidden="true">&times;</span>--}}
            {{--</button>--}}
            {{--<div class="modal-body">--}}
                {{--<iframe title="GiddyUp Privacy" src="https://js.giddyup.io/v01/gu-privacy.htm" allowfullscreen="allowfullscreen"></iframe>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="modal fade iframe-modal" id="terms" tabindex="-1" role="dialog" aria-labelledby="terms" aria-hidden="true">--}}
    {{--<div class="modal-dialog modal-dialog-centered" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                {{--<span aria-hidden="true">&times;</span>--}}
            {{--</button>--}}
            {{--<div class="modal-body">--}}
                {{--<iframe title="GiddyUp Terms" src="https://js.giddyup.io/v01/gu-terms.htm" allowfullscreen="allowfullscreen"></iframe>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="modal fade" id="support" tabindex="-1" role="dialog" aria-labelledby="support" aria-hidden="true">--}}
    {{--<div class="modal-dialog modal-dialog-centered" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}
                {{--<div class="support-container">--}}
                    {{--<div class="support-content">--}}
                        {{--<h2 style="color: #52c8f6; font-size: 2em;">Have a question about Aculief?</h2>--}}
                        {{--<ul>--}}
                            {{--<li>Questions About Your Order</li>--}}
                            {{--<li>Product Questions</li>--}}
                            {{--<li>Technical Support</li>--}}
                            {{--<li>Returns</li>--}}
                            {{--<li>Anything else product or order related</li>--}}
                        {{--</ul>--}}
                        {{--<h3>Please contact GiddyUp's Aculief support at:</h3>--}}
                        {{--<ul>--}}
                            {{--<li>support@giddyup.io</li>--}}
                        {{--</ul>--}}
                        {{--<h3>Estimated Shipping Times:</h3>--}}
                        {{--<ul>--}}
                            {{--<li>USA Only: 2-7 business days</li>--}}
                            {{--<li>International:  1-4 weeks</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="modal fade" id="returns" tabindex="-1" role="dialog" aria-labelledby="returns" aria-hidden="true">--}}
    {{--<div class="modal-dialog modal-dialog-centered" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}
                {{--<div class="support-container">--}}
                    {{--<div class="support-content">--}}
                        {{--<h2 style="text-align: center; color: #52c8f6; font-size: 2em;">Return Policy</h2>--}}
                        {{--<p>Aculief stands behind every item we sell and want you to be 100% satisfied with your purchase. If you are not 100% satisfied with your purchase, you may return it within 60 days for a full refund or exchange – no questions asked.<br />--}}
                            {{--Simply send your order # return your items to the address on our site and reason for return to help@aculief.com and it will be processed in 5 business days or less.<br />--}}
                            {{--Customer Service is open from 9:00 am to 5:00 pm PST, M-F.<br />--}}
                            {{--Customers can track orders by searching the tracking number provided in the shipping confirmation email at <a href="https://www.ups.com/?gulang=fr-fr&amp;preview=true&amp;_thumbnail_id=-1&amp;preview_nonce=a8a8ac3778&amp;preview_id=1516&amp;country_name=%7Bgeo_country_name%7D&amp;device_type=%7Bdevice_type%7D&amp;oid=%7Boffer_id%7D&amp;contract_id=%7Bcampaign_id%7D&amp;camp_id=%7Bcampaign_id%7D&amp;utm_campaign=%7Bcampaign_id%7D&amp;utm_content=%7Bcreative_id%7D&amp;utm_term=%7Boffer_id%7D&amp;utm_medium=%7Bsub1%7D&amp;utm_source=%7Baffiliate_id%7D&amp;lpid=554&amp;br=Kailo&amp;imor=1&amp;gucurrency=usd&amp;gucountry=us&amp;gulanguage=en&amp;guu=9ca7b1be-1d41-468a-a9cf-f688c8c3c933&amp;req_id=%7Btransaction_id%7D&amp;sub_id=%7Bsub1%7D&amp;aff_id=%7Baffiliate_id%7D" target="_blank" rel="noopener">www.ups.com</a>.--}}
                        {{--</p>--}}
                        {{--<p>Damaged Products: If you receive an item that is damaged, please contact our Guest Service Representatives at <a href="mailto:help@aculief.com">help@aculief.com</a>. We will accept the damaged item and send you a replacement promptly.</p>--}}
                        {{--<p>International Shipments: Some countries will halt packages in transit and require a customs charge be paid on imported goods. If your package does not arrive, it’s likely being held at your local mail service.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="modal fade" id="impressum" tabindex="-1" role="dialog" aria-labelledby="impressum" aria-hidden="true">--}}
    {{--<div class="modal-dialog modal-dialog-centered" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}
                {{--<div class="impressum-container">--}}
                    {{--<div class="impressum-content">--}}
                        {{--<h2 style="color: #52c8f6; font-size: 2em;">Impressum</h2>--}}
                        {{--<p style="text-align: center;"><b>Company Name:<br />--}}
                            {{--</b>The GiddyUp Group--}}
                        {{--</p>--}}
                        {{--<p><b>Address:<br />--}}
                            {{--</b>20 N. Oak St.<br />--}}
                            {{--Ventura, CA 93001<br />--}}
                            {{--USA--}}
                        {{--</p>--}}
                        {{--<p><b>Contact:</b><br />--}}
                            {{--support@giddyup.io--}}
                        {{--</p>--}}
                        {{--<p><strong>CEO Team:<br />--}}
                            {{--</strong>Todd Armstrong, Justin Grant, Topher Grant, Steven Isaac, Alan Reinhart, Eric Schechter--}}
                        {{--</p>--}}
                        {{--<p><strong>Form of Company:<br />--}}
                            {{--</strong>LLC--}}
                        {{--</p>--}}
                        {{--<p><strong>Registration Number:<br />--}}
                            {{--</strong>46-3920047<strong><br />--}}
                            {{--</strong>--}}
                        {{--</p>--}}
                        {{--<p><b>VAT Number<br />--}}
                            {{--</b>Not Applicable--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="modal fade iframe-modal" id="about" tabindex="-1" role="dialog" aria-labelledby="about" aria-hidden="true">--}}
    {{--<div class="modal-dialog modal-dialog-centered" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                {{--<span aria-hidden="true">&times;</span>--}}
            {{--</button>--}}
            {{--<div class="modal-body">--}}
                {{--<iframe title="GiddyUp About" src="https://js.giddyup.io/v01/gu-about.htm" allowfullscreen="allowfullscreen"></iframe>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="modal fade" id="shipping" tabindex="-1" role="dialog" aria-labelledby="returns" aria-hidden="true">--}}
    {{--<div class="modal-dialog modal-dialog-centered" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}
                {{--<div class="support-container">--}}
                    {{--<div class="support-content">--}}
                        {{--<h1 style="color: #52c8f6; font-size: 2em; text-align: center;"><strong>Shipping Policy</strong></h1>--}}
                        {{--<h3><span style="text-decoration: underline;"><br />--}}
                        {{--Domestic Shipping Policy</span>--}}
                        {{--</h3>--}}
                        {{--<p><strong>Shipment processing time</strong><br />--}}
                            {{--Unless stated otherwise on the website, all orders are processed within 1-2 business days.--}}
                        {{--</p>--}}
                        {{--<p><strong>Shipping rate and delivery estimates</strong><br />--}}
                            {{--All domestic orders are shipped for FREE via UPS Ground.--}}
                        {{--</p>--}}
                        {{--<p><strong>Shipment confirmation and order tracking</strong><br />--}}
                            {{--Customers will receive an email confirming their order and a second email once their order has shipped with a UPS tracking number included.--}}
                        {{--</p>--}}
                        {{--<p><strong>Customs, duties, and taxes</strong><br />--}}
                            {{--Aculief is not responsible for any customs and taxes applied to your order. All fees imposed during or after shipping are the responsibility of the customer (tariffs, taxes, etc.).--}}
                        {{--</p>--}}
                        {{--<p><strong>Damages</strong><br />--}}
                            {{--Aculief is not liable for any products damaged or lost during shipping. If you received your order damaged, please contact the shipment carrier or our support team directly to file a claim. Please save all packaging material and damaged goods before filing a claim.--}}
                        {{--</p>--}}
                        {{--<h3><span style="text-decoration: underline;">International Shipping Policy</span></h3>--}}
                        {{--<p>Shipment costs vary by country. Please enter your country during checkout for the current rate.</p>--}}
                        {{--<p>Some countries will halt packages in transit and require a customs charge be paid on imported goods. If your package does not arrive, it's likely being held at your local mail service.</p>--}}
                        {{--<p>---</p>--}}
                        {{--<p>For more information or support, please email help@aculief.com</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="modal fade" id="modal-gallery" tabindex="-1" role="dialog" aria-labelledby="modal-gallery" aria-hidden="true">--}}
    {{--<div class="modal-dialog modal-dialog-centered" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-body">--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
                {{--<img src="#" alt="">--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="modal fade" id="mobile-faq" tabindex="-1" role="dialog" aria-labelledby="mobile-faq" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Frequently Asked Questions</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="faq-wrapper mobile-only">
                    <div class="faq-container">
                        <div class="faq-content">
                            <h4 class="question"><span class="rtl-margin-right-20">How effective is accupressure to the LI4 accupressure point?</span></h4>
                            <div class="answer hidden">
                                <div class="content">
                                    <p>Johns Hopkins University published a study 8/2011: Magnetic acupressure was applied to the LI-4 (Hegu) meridian to patients suffering from bone marrow pain. Severe pain decreased dramatically for those receiving magnetic acupressure at the LI-4 acupuncture point. Johns Hopkins stated that proper stimulation of LI4 is effective in relieving headaches, pain of the eyes, toothaches, jaw pain, and pain of the limbs and bones.</p>
                                    <p>NCCAM Study 11/2010 National Center for Complementary and Alternative Medicine: Over 500 clinical trials of acupuncture have been conducted in the past three decades from credible institutions, such as the Mayo Clinic, resulting in substantial evidence that acupuncture is very effective in treating chronic pain, fatigue, anxiety, arthritis, headaches, chemotherapy sickness, and infertility, among other ailments.</p>
                                    <p>Published Men's Health 12/2009: Short-Circuit a Headache in 30 seconds Instead of hitting back with Tylenol or Advil, try pinching the webbed area between your thumb and index finger (either hand) for 30 seconds. It's called acupressure, and while Ivy League researchers haven't carried out a randomized, placebo-controlled study on the strategy, Marc Sharfman, M.D., director of the Headache Institute in Winter Park, Florida, swears by it.</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="faq-content">
                            <h4 class="question"><span class="rtl-margin-right-20">How long will Aculief take to provide pain relief?</span></h4>
                            <div class="answer hidden">
                                <div class="content">
                                    <p>Most of our customers notice relief in as little as 1- 3 minutes and up to 30 minutes.</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="faq-content">
                            <h4 class="question"><span class="rtl-margin-right-20">How long can I wear Aculief for?</span></h4>
                            <div class="answer hidden">
                                <div class="content">
                                    <p>It’s up to you! Aculief may be worn for as little as 5 minutes or up to several hours depending on how bad your pain is and/or how often you need relief provided.</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="faq-content">
                            <h4 class="question"><span class="rtl-margin-right-20">Is it ok to wear Aculief during physical activities?</span></h4>
                            <div class="answer hidden">
                                <div class="content">
                                    <p>Absolutely! Aculief has been purposely designed for active lifestyles and is 100% waterproof. As long as you feel comfortable during the activities or exercise – you can wear it the entire time.</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="faq-content">
                            <h4 class="question"><span class="rtl-margin-right-20">Are there different colors available?</span></h4>
                            <div class="answer hidden">
                                <div class="content">
                                    <p>Yes! Aculief comes in teal, green, black and a variety pack (if you buy more than one). Once you select your bundle above, it will give you the option to choose your favorite color.</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="faq-content">
                            <h4 class="question"><span class="rtl-margin-right-20">Can I get a discount if I order more than 1?</span></h4>
                            <div class="answer hidden">
                                <div class="content">
                                    <p>Yes! We even created exclusive bundles to make ordering multiple Aculiefs more affordable than ever. All of the bundles are available above – the more you buy the more you save!</p>
                                    <p>Many of our customers like to keep an Aculief in their car, one at work, and another by their bed. They also make great gifts for family and friends!</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="faq-content">
                            <h4 class="question"><span class="rtl-margin-right-20">Are there any side effects?</span></h4>
                            <div class="answer hidden">
                                <div class="content">
                                    <p>There are no known side effects other than for pregnant women. The LI-4 acupressure point has been known to induce contractions, therefore, Aculief should not be used by pregnant women.</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="faq-content">
                            <h4 class="question"><span class="rtl-margin-right-20">Does Aculief come in different sizes?</span></h4>
                            <div class="answer hidden">
                                <div class="content">
                                    <p>No. We purposely designed Aculief to fit any size hand. It’s a universal one size fits all.</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="faq-content">
                            <h4 class="question"><span class="rtl-margin-right-20">Is there a money back guarantee and/or warranty?</span></h4>
                            <div class="answer hidden">
                                <div class="content">
                                    <p>Yes. We offer a no hassle, 60-Day Money Back Guarantee. If you’re not 100% satisfied with Aculief, we are happy to help you with a return. We want you to be happy!</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="faq-content">
                            <h4 class="question"><span class="rtl-margin-right-20">Will I have to pay any additional customs, duties or VAT fees when I receive my order?</span></h4>
                            <div class="answer hidden">
                                <div class="content">
                                    <p>Depending on your country, it is possible that you will be charged one or more of these fees when you receive your order.</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<script type='text/javascript' src='../wp-content/themes/giddyupio-prototype/js/components/component-custom-blocks080f.js?ver=5.8.2' id='custom-block-scripts-js'></script>--}}
{{--<script type='text/javascript' src='../wp-content/themes/giddyupio-prototype/js/components/component-custom-shortcodes080f.js?ver=5.8.2' id='custom-shortcode-scripts-js'></script>--}}
{{--<script type='text/javascript' src='../wp-content/plugins/editorplus/assets/scripts/frontend84ee.js?ver=61a752d974f97' id='editor_plus-plugin-frontend-script-js'></script>--}}
{{--<script type='text/javascript' src='../wp-includes/js/underscore.min0028.js?ver=1.13.1' id='underscore-js'></script>--}}

{{--<script type='text/javascript' id='wp-util-js-extra'>--}}
    {{--/* <![CDATA[ */--}}
    {{--var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};--}}
    {{--/* ]]> */--}}
{{--</script>--}}

{{--<script type='text/javascript' src='../wp-includes/js/wp-util.min080f.js?ver=5.8.2' id='wp-util-js'></script>--}}
{{--<script type='text/javascript' src='../../js.giddyup.io/v01/gu-intl-common-content5152.js?ver=1.0' id='guInternationalCommonData-js'></script>--}}

{{--<script type='text/javascript' src='../wp-content/themes/giddyupio-prototype/dist/assets/js/appb493.js?ver=1.4.8' id='appjs-js'></script>--}}
{{--<script type='text/javascript' src='../wp-content/themes/giddyupio-prototype/js/guLibs5152.js?ver=1.0' id='guLibs-js'></script>--}}
{{--<script src="../../cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.mincc1a.js?ver=1.5.1" defer="defer" type="text/javascript"></script>--}}
{{--<script type='text/javascript' src='../wp-content/themes/giddyupio-prototype/dist/assets/js/unified_frontend.min5152.js?ver=1.0' id='unified-frontend-js'></script>--}}
{{--<script src="../../cdn.polyfill.io/v2/polyfill.min7202.js?features=Intl.~locale.fr,Intl.~locale.pt,Intl.~locale.de,Intl.~locale.es,Intl.~locale.ja,Intl.~locale.ko,Intl.~locale.sv,Intl.~locale.it,Intl.~locale.nl" defer="defer" type="text/javascript"></script>--}}
{{--<script type='text/javascript' src='https://www.paypal.com/sdk/js?client-id=Ac92EEZ3yirVWwuh9rihvHoCyXXl3G7zxLuBCW9jcw2QP-_FJ6l3nRvcUbfgbmnd2n8Ks0XRY_pdyUG3&amp;currency=USD&amp;disable-funding=credit,card&amp;commit=false&amp;intent=authorize' id='paypal-js'></script>--}}
{{--<script type='text/javascript' src='https://js.stripe.com/v3/' id='stripe-js'></script>--}}
{{--<script type='text/javascript' src='../wp-includes/js/wp-embed.min080f.js?ver=5.8.2' id='wp-embed-js'></script>--}}
{{--<script type='text/javascript' src='../wp-content/themes/giddyupio-prototype/js/universal5152.js?ver=1.0' id='gu_universal-js'></script>--}}
{{--<script type='text/javascript' id='offers-scripts-js-extra'>--}}
    {{--/* <![CDATA[ */--}}
    {{--var templateUrl = {"theme_directory":"https:\/\/getaculief.io\/wp-content\/uploads\/sites\/20"};--}}
    {{--var upsellData = {"upsell_inline_info":[[{"id":4744792309844,"title":"Aculief-MyRelief Roll-On - 50% Off","body_html":"","vendor":"Aculief","product_type":"V2.0","created_at":"2020-09-17T08:43:37-07:00","handle":"aculief-myrelief-roll-on-50-off","updated_at":"2021-11-17T15:55:29-08:00","published_at":"2020-09-17T08:43:37-07:00","template_suffix":"","status":"active","published_scope":"web","tags":["bu: 2.60","dt: 50","pid: 4717290520660","rp: 24.99","wp: 4.50","wt: 0.05"],"admin_graphql_api_id":"gid:\/\/shopify\/Product\/4744792309844","variants":[{"id":32767787368532,"product_id":4744792309844,"title":"Default Title","price":"12.50","sku":"ACLF-GEL","position":1,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Default Title","option2":null,"option3":null,"created_at":"2020-09-17T08:43:37-07:00","updated_at":"2021-11-17T15:40:45-08:00","taxable":true,"barcode":"272890364","grams":0,"image_id":null,"weight":0,"weight_unit":"lb","inventory_item_id":34398618943572,"inventory_quantity":-1942,"old_inventory_quantity":-1942,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32767787368532"}],"options":[{"id":6157790249044,"product_id":4744792309844,"name":"Title","position":1,"values":["Default Title"]}],"images":[{"id":15660176212052,"product_id":4744792309844,"position":1,"created_at":"2020-09-17T08:43:37-07:00","updated_at":"2020-09-17T08:43:37-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-D306-ct-04_0a24cbdd-08db-4b68-a549-5043c9dda862.jpg?v=1600357417","variant_ids":[],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/15660176212052"}],"image":{"id":15660176212052,"product_id":4744792309844,"position":1,"created_at":"2020-09-17T08:43:37-07:00","updated_at":"2020-09-17T08:43:37-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-D306-ct-04_0a24cbdd-08db-4b68-a549-5043c9dda862.jpg?v=1600357417","variant_ids":[],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/15660176212052"},"upsell_slug":"offer-02-inline-upsell","free_domestic_shipping":false,"free_international_shipping":false}]],"product_info_inline":[[false]],"product_info_popup":[false],"upsell_popup_info":[[{"id":4800614563924,"title":"Aculief - 50% Off","body_html":"","vendor":"getaculief","product_type":"V2.0 $29.99","created_at":"2020-11-20T13:21:53-08:00","handle":"aculief-50-off-3","updated_at":"2021-11-17T08:20:39-08:00","published_at":"2020-11-20T13:21:53-08:00","template_suffix":"","status":"active","published_scope":"web","tags":["adv3: 29.99","bu: 1.55","colors:Green-6aab0f;Teal-036d71;Black-101010","dt: 50","pid: 4800613351508","rp: 29.99","vp: 3-green;teal;black","vp: 5-green;teal;black;green;teal","wp: 2.65","wt: 0.08"],"admin_graphql_api_id":"gid:\/\/shopify\/Product\/4800614563924","variants":[{"product_id":4800614563924,"id":32953002426452,"title":"Green","price":"15.00","sku":"ACLFGRN50%","position":1,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Green","option2":null,"option3":null,"created_at":"2020-11-20T13:21:54-08:00","updated_at":"2021-11-17T06:51:40-08:00","taxable":true,"barcode":"850748004002","grams":0,"image_id":16031322275924,"weight":0,"weight_unit":"lb","inventory_item_id":34583989616724,"inventory_quantity":-116,"old_inventory_quantity":-116,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32953002426452"},{"product_id":4800614563924,"id":32953002459220,"title":"Teal","price":"15.00","sku":"ACLFTEA50%","position":2,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Teal","option2":null,"option3":null,"created_at":"2020-11-20T13:21:54-08:00","updated_at":"2021-11-12T07:25:50-08:00","taxable":true,"barcode":"X002GQFQGP","grams":0,"image_id":16031322308692,"weight":0,"weight_unit":"lb","inventory_item_id":34583989649492,"inventory_quantity":-42,"old_inventory_quantity":-42,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32953002459220"},{"product_id":4800614563924,"id":32953002491988,"title":"Black","price":"15.00","sku":"ACLFBLK50%","position":3,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Black","option2":null,"option3":null,"created_at":"2020-11-20T13:21:54-08:00","updated_at":"2021-11-11T06:39:25-08:00","taxable":true,"barcode":"X001NHILBZ","grams":0,"image_id":16031322243156,"weight":0,"weight_unit":"lb","inventory_item_id":34583989682260,"inventory_quantity":-31,"old_inventory_quantity":-31,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32953002491988"}],"options":[{"product_id":4800614563924,"id":6231021846612,"name":"Color","position":1,"values":["Green","Teal","Black"]}],"images":[{"product_id":4800614563924,"id":16031322275924,"position":1,"created_at":"2020-11-20T13:21:54-08:00","updated_at":"2021-07-21T07:30:08-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-01_001d6ac0-2a0e-4e21-a1b9-dc5531f5548d.jpg?v=1626877808","variant_ids":[32953002426452],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031322275924"},{"product_id":4800614563924,"id":16031322308692,"position":2,"created_at":"2020-11-20T13:21:54-08:00","updated_at":"2021-07-21T07:30:08-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-02_b5a55015-81ea-4acd-a459-6a339cfb4854.jpg?v=1626877808","variant_ids":[32953002459220],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031322308692"},{"product_id":4800614563924,"id":16031322243156,"position":3,"created_at":"2020-11-20T13:21:54-08:00","updated_at":"2021-07-21T07:30:08-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-03_a6becaf1-d472-46bd-9835-a817a97bffae.jpg?v=1626877808","variant_ids":[32953002491988],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031322243156"}],"image":{"product_id":4800614563924,"id":16031322275924,"position":1,"created_at":"2020-11-20T13:21:54-08:00","updated_at":"2021-07-21T07:30:08-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-01_001d6ac0-2a0e-4e21-a1b9-dc5531f5548d.jpg?v=1626877808","variant_ids":[32953002426452],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031322275924"},"upsell_slug":"offer-01-popup-upsell","free_domestic_shipping":false,"free_international_shipping":false}]],"offer_event_data":[{"upsell_name":"offer-02-inline-upsell","trigger_event":"bundleSelected","previous_upsell_taken":"---","bundle_to_trigger_upsell":null,"upsell_type":"inline","upsell_seen":false},{"upsell_name":"offer-01-popup-upsell","trigger_event":"Offer-02 Inline Upsell","previous_upsell_taken":"---","bundle_to_trigger_upsell":null,"upsell_type":"popup","upsell_seen":false}],"offer_event_status":{"checkout_status":null}};--}}
    {{--var componentOffer = {"bundle_info":[{"bundle_object":[{"bundles_product_name":{"value":"4800612728916","label":"Aculief&nbsp;&nbsp;price:$29.99&nbsp;&nbsp;sku: ACLFGRN1 rp: 29.99 adv3: 29.99&nbsp;&nbsp;id:4800612728916"},"qty":"1","discount":"0","bundle_variant_info":{"id":4800612728916,"title":"Aculief","body_html":"","vendor":"getaculief","product_type":"V2.0 Shipping $29.99","created_at":"2020-11-20T13:12:29-08:00","handle":"aculief-3","updated_at":"2021-11-17T08:20:39-08:00","published_at":"2020-11-20T13:13:52-08:00","template_suffix":"","status":"active","published_scope":"web","tags":["adv3: 29.99","bu: 1.55","colors:Green-6aab0f;Teal-036d71;Black-101010","rp: 29.99","vp: 3-green;teal;black","vp: 5-green;teal;black;green;teal","wp: 2.65","wt: 0.08"],"admin_graphql_api_id":"gid:\/\/shopify\/Product\/4800612728916","variants":[{"product_id":4800612728916,"id":32952997707860,"title":"Green","price":"29.99","sku":"ACLFGRN1","position":1,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Green","option2":null,"option3":null,"created_at":"2020-11-20T13:12:29-08:00","updated_at":"2021-11-16T18:14:20-08:00","taxable":true,"barcode":"850748004002","grams":45813,"image_id":16031297536084,"weight":101,"weight_unit":"lb","inventory_item_id":34583984898132,"inventory_quantity":-228,"old_inventory_quantity":-228,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32952997707860"},{"product_id":4800612728916,"id":32952997740628,"title":"Teal","price":"29.99","sku":"ACLFTEA1","position":2,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Teal","option2":null,"option3":null,"created_at":"2020-11-20T13:12:29-08:00","updated_at":"2021-11-14T18:42:50-08:00","taxable":true,"barcode":"X002GQFQGP","grams":45813,"image_id":16031297568852,"weight":101,"weight_unit":"lb","inventory_item_id":34583984930900,"inventory_quantity":-249,"old_inventory_quantity":-249,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32952997740628"},{"product_id":4800612728916,"id":32952997773396,"title":"Black","price":"29.99","sku":"ACLFBLK1","position":3,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Black","option2":null,"option3":null,"created_at":"2020-11-20T13:12:29-08:00","updated_at":"2021-11-15T21:53:16-08:00","taxable":true,"barcode":"X001NHILBZ","grams":45813,"image_id":16031297601620,"weight":101,"weight_unit":"lb","inventory_item_id":34583984963668,"inventory_quantity":-134,"old_inventory_quantity":-134,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32952997773396"}],"options":[{"product_id":4800612728916,"id":6231019094100,"name":"Color","position":1,"values":["Green","Teal","Black"]}],"images":[{"product_id":4800612728916,"id":16031297536084,"position":1,"created_at":"2020-11-20T13:12:31-08:00","updated_at":"2020-11-20T13:12:32-08:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-01_35d7b837-6304-497c-abcd-45ef0f769d89.jpg?v=1605906752","variant_ids":[32952997707860],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031297536084"},{"product_id":4800612728916,"id":16031297568852,"position":2,"created_at":"2020-11-20T13:12:31-08:00","updated_at":"2020-11-20T13:12:32-08:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-02_e9662d1a-142e-48d1-9498-c104f3e889a0.jpg?v=1605906752","variant_ids":[32952997740628],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031297568852"},{"product_id":4800612728916,"id":16031297601620,"position":3,"created_at":"2020-11-20T13:12:32-08:00","updated_at":"2020-11-20T13:12:32-08:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-03_ca25bd91-fcf0-4d22-ac38-1b4f50d94a15.jpg?v=1605906752","variant_ids":[32952997773396],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031297601620"}],"image":{"product_id":4800612728916,"id":16031297536084,"position":1,"created_at":"2020-11-20T13:12:31-08:00","updated_at":"2020-11-20T13:12:32-08:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-01_35d7b837-6304-497c-abcd-45ef0f769d89.jpg?v=1605906752","variant_ids":[32952997707860],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031297536084"}}}],"bundle_slug":"29-99-buy-1-full-price","bundle_shipping":{"domestic_shipping":{"default_domestic_shipping_rate":"4.99","custom_default_rate_name_toggle":[],"custom_default_rate_name":"Standard Shipping!","domestic_rate_exceptions":false,"expedited_domestic_shipping":[],"default_expedited_rate":"0.00","custom_expedited_rate_name_toggle":[],"custom_expedited_rate_name":"","dom_exp_rate_overrides":false},"international_shipping":{"default_intl_shipping_rate":"4.99","custom_default_intl_rate_name_toggle":[],"custom_default_intl_rate_name":"Standard Shipping!","intl_rate_exceptions":false,"expedited_intl_shipping":[],"default_international_expedited_rate":"0.00","custom_expedited_intl_rate_name_toggle":[],"custom_expedited_intl_rate_name":"","intl_exp_rate_overrides":false}}},{"bundle_object":[{"bundles_product_name":{"value":"4800613351508","label":"Aculief&nbsp;&nbsp;price:$29.99&nbsp;&nbsp;sku: ACLFGRN1 rp: 29.99 adv3: 29.99&nbsp;&nbsp;id:4800613351508"},"qty":"2","discount":"0","bundle_variant_info":{"id":4800613351508,"title":"Aculief","body_html":"","vendor":"getaculief","product_type":"V2.0 $29.99","created_at":"2020-11-20T13:15:02-08:00","handle":"aculief-4","updated_at":"2021-11-17T14:30:25-08:00","published_at":"2020-11-20T13:16:34-08:00","template_suffix":"","status":"active","published_scope":"web","tags":["adv3: 29.99","bu: 1.55","colors:Green-6aab0f;Teal-036d71;Black-101010","rel_ids:4800614367316;4800614563924;6588318744660;6591153897556","rp: 29.99","vp: 3-green;teal;black","vp: 5-green;teal;black;green;teal","wp: 2.65","wt: 0.08"],"admin_graphql_api_id":"gid:\/\/shopify\/Product\/4800613351508","variants":[{"id":32952999182420,"product_id":4800613351508,"title":"Green","price":"29.99","sku":"ACLFGRN1","position":1,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Green","option2":null,"option3":null,"created_at":"2020-11-20T13:15:02-08:00","updated_at":"2021-11-17T09:59:00-08:00","taxable":true,"barcode":"850748004002","grams":0,"image_id":16031303958612,"weight":0,"weight_unit":"lb","inventory_item_id":34583986372692,"inventory_quantity":-580,"old_inventory_quantity":-580,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32952999182420"},{"id":32952999215188,"product_id":4800613351508,"title":"Teal","price":"29.99","sku":"ACLFTEA1","position":2,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Teal","option2":null,"option3":null,"created_at":"2020-11-20T13:15:02-08:00","updated_at":"2021-11-17T09:59:00-08:00","taxable":true,"barcode":"X002GQFQGP","grams":0,"image_id":16031303991380,"weight":0,"weight_unit":"lb","inventory_item_id":34583986405460,"inventory_quantity":-649,"old_inventory_quantity":-649,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32952999215188"},{"id":32952999247956,"product_id":4800613351508,"title":"Black","price":"29.99","sku":"ACLFBLK1","position":3,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Black","option2":null,"option3":null,"created_at":"2020-11-20T13:15:02-08:00","updated_at":"2021-11-17T09:59:00-08:00","taxable":true,"barcode":"X001NHILBZ","grams":0,"image_id":16031303925844,"weight":0,"weight_unit":"lb","inventory_item_id":34583986438228,"inventory_quantity":-182,"old_inventory_quantity":-182,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32952999247956"}],"options":[{"id":6231019913300,"product_id":4800613351508,"name":"Color","position":1,"values":["Green","Teal","Black"]}],"images":[{"id":16031303958612,"product_id":4800613351508,"position":1,"created_at":"2020-11-20T13:15:04-08:00","updated_at":"2021-07-21T07:29:36-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-01_412d3fb6-0fd2-4d26-9260-7e912dc20264.jpg?v=1626877776","variant_ids":[32952999182420],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031303958612"},{"id":16031303991380,"product_id":4800613351508,"position":2,"created_at":"2020-11-20T13:15:04-08:00","updated_at":"2021-07-21T07:29:36-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-02_17238ff8-78af-4279-8b65-92a924c78478.jpg?v=1626877776","variant_ids":[32952999215188],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031303991380"},{"id":16031303925844,"product_id":4800613351508,"position":3,"created_at":"2020-11-20T13:15:04-08:00","updated_at":"2021-07-21T07:29:36-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-03_35228880-4988-41f0-bd0e-900e8f025459.jpg?v=1626877776","variant_ids":[32952999247956],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031303925844"}],"image":{"id":16031303958612,"product_id":4800613351508,"position":1,"created_at":"2020-11-20T13:15:04-08:00","updated_at":"2021-07-21T07:29:36-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-01_412d3fb6-0fd2-4d26-9260-7e912dc20264.jpg?v=1626877776","variant_ids":[32952999182420],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031303958612"}}},{"bundles_product_name":{"value":"4800613351508","label":"Aculief&nbsp;&nbsp;price:$29.99&nbsp;&nbsp;sku: ACLFGRN1 rp: 29.99 adv3: 29.99&nbsp;&nbsp;id:4800613351508"},"qty":"1","discount":"100","bundle_variant_info":{"id":4800614367316,"title":"Aculief - FREE!","body_html":"","vendor":"getaculief","product_type":"V2.0 $29.99","created_at":"2020-11-20T13:20:25-08:00","handle":"aculief-free-3","updated_at":"2021-11-17T14:30:25-08:00","published_at":"2020-11-20T13:20:25-08:00","template_suffix":"","status":"active","published_scope":"web","tags":["adv3: 29.99","bu: 1.55","colors:Green-6aab0f;Teal-036d71;Black-101010","dt: 100","pid: 4800613351508","rp: 29.99","vp: 3-green;teal;black","vp: 5-green;teal;black;green;teal","wp: 2.65","wt: 0.08"],"admin_graphql_api_id":"gid:\/\/shopify\/Product\/4800614367316","variants":[{"id":32953002197076,"product_id":4800614367316,"title":"Green","price":"0.00","sku":"ACLFGRN1FREE","position":1,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Green","option2":null,"option3":null,"created_at":"2020-11-20T13:20:25-08:00","updated_at":"2021-11-17T09:59:00-08:00","taxable":true,"barcode":"850748004002","grams":0,"image_id":16031318310996,"weight":0,"weight_unit":"lb","inventory_item_id":34583989387348,"inventory_quantity":-98,"old_inventory_quantity":-98,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32953002197076"},{"id":32953002229844,"product_id":4800614367316,"title":"Teal","price":"0.00","sku":"ACLFTEA1FREE","position":2,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Teal","option2":null,"option3":null,"created_at":"2020-11-20T13:20:25-08:00","updated_at":"2021-11-17T09:59:00-08:00","taxable":true,"barcode":"X002GQFQGP","grams":0,"image_id":16031318343764,"weight":0,"weight_unit":"lb","inventory_item_id":34583989420116,"inventory_quantity":-135,"old_inventory_quantity":-135,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32953002229844"},{"id":32953002262612,"product_id":4800614367316,"title":"Black","price":"0.00","sku":"ACLFBLK1FREE","position":3,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Black","option2":null,"option3":null,"created_at":"2020-11-20T13:20:25-08:00","updated_at":"2021-11-17T06:51:40-08:00","taxable":true,"barcode":"X001NHILBZ","grams":0,"image_id":16031318376532,"weight":0,"weight_unit":"lb","inventory_item_id":34583989452884,"inventory_quantity":-512,"old_inventory_quantity":-512,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32953002262612"}],"options":[{"id":6231021518932,"product_id":4800614367316,"name":"Color","position":1,"values":["Green","Teal","Black"]}],"images":[{"id":16031318310996,"product_id":4800614367316,"position":1,"created_at":"2020-11-20T13:20:25-08:00","updated_at":"2021-07-21T07:29:49-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-01_4070c00d-13bb-49d8-ac7f-5a9ac692f16a.jpg?v=1626877789","variant_ids":[32953002197076],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031318310996"},{"id":16031318343764,"product_id":4800614367316,"position":2,"created_at":"2020-11-20T13:20:25-08:00","updated_at":"2021-07-21T07:29:49-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-02_ed88ae7c-d521-4a5e-aaab-848715b63c5b.jpg?v=1626877789","variant_ids":[32953002229844],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031318343764"},{"id":16031318376532,"product_id":4800614367316,"position":3,"created_at":"2020-11-20T13:20:25-08:00","updated_at":"2021-07-21T07:29:49-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-03_562f9a2a-3614-4ad0-af80-8692d82b89f1.jpg?v=1626877789","variant_ids":[32953002262612],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031318376532"}],"image":{"id":16031318310996,"product_id":4800614367316,"position":1,"created_at":"2020-11-20T13:20:25-08:00","updated_at":"2021-07-21T07:29:49-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-01_4070c00d-13bb-49d8-ac7f-5a9ac692f16a.jpg?v=1626877789","variant_ids":[32953002197076],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031318310996"}}}],"bundle_slug":"29-99-buy-2-get-1-free","bundle_shipping":{"domestic_shipping":{"default_domestic_shipping_rate":"0.00","custom_default_rate_name_toggle":[],"custom_default_rate_name":"Free USA Shipping!","domestic_rate_exceptions":false,"expedited_domestic_shipping":[],"default_expedited_rate":"0.00","custom_expedited_rate_name_toggle":[],"custom_expedited_rate_name":"","dom_exp_rate_overrides":false},"international_shipping":{"default_intl_shipping_rate":"4.99","custom_default_intl_rate_name_toggle":[],"custom_default_intl_rate_name":"Standard Shipping!","intl_rate_exceptions":false,"expedited_intl_shipping":[],"default_international_expedited_rate":"0.00","custom_expedited_intl_rate_name_toggle":[],"custom_expedited_intl_rate_name":"","intl_exp_rate_overrides":false}}},{"bundle_object":[{"bundles_product_name":{"value":"4800613351508","label":"Aculief&nbsp;&nbsp;price:$29.99&nbsp;&nbsp;sku: ACLFGRN1 rp: 29.99 adv3: 29.99&nbsp;&nbsp;id:4800613351508"},"qty":"3","discount":"0","bundle_variant_info":{"id":4800613351508,"title":"Aculief","body_html":"","vendor":"getaculief","product_type":"V2.0 $29.99","created_at":"2020-11-20T13:15:02-08:00","handle":"aculief-4","updated_at":"2021-11-17T14:30:25-08:00","published_at":"2020-11-20T13:16:34-08:00","template_suffix":"","status":"active","published_scope":"web","tags":["adv3: 29.99","bu: 1.55","colors:Green-6aab0f;Teal-036d71;Black-101010","rel_ids:4800614367316;4800614563924;6588318744660;6591153897556","rp: 29.99","vp: 3-green;teal;black","vp: 5-green;teal;black;green;teal","wp: 2.65","wt: 0.08"],"admin_graphql_api_id":"gid:\/\/shopify\/Product\/4800613351508","variants":[{"id":32952999182420,"product_id":4800613351508,"title":"Green","price":"29.99","sku":"ACLFGRN1","position":1,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Green","option2":null,"option3":null,"created_at":"2020-11-20T13:15:02-08:00","updated_at":"2021-11-17T09:59:00-08:00","taxable":true,"barcode":"850748004002","grams":0,"image_id":16031303958612,"weight":0,"weight_unit":"lb","inventory_item_id":34583986372692,"inventory_quantity":-580,"old_inventory_quantity":-580,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32952999182420"},{"id":32952999215188,"product_id":4800613351508,"title":"Teal","price":"29.99","sku":"ACLFTEA1","position":2,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Teal","option2":null,"option3":null,"created_at":"2020-11-20T13:15:02-08:00","updated_at":"2021-11-17T09:59:00-08:00","taxable":true,"barcode":"X002GQFQGP","grams":0,"image_id":16031303991380,"weight":0,"weight_unit":"lb","inventory_item_id":34583986405460,"inventory_quantity":-649,"old_inventory_quantity":-649,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32952999215188"},{"id":32952999247956,"product_id":4800613351508,"title":"Black","price":"29.99","sku":"ACLFBLK1","position":3,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Black","option2":null,"option3":null,"created_at":"2020-11-20T13:15:02-08:00","updated_at":"2021-11-17T09:59:00-08:00","taxable":true,"barcode":"X001NHILBZ","grams":0,"image_id":16031303925844,"weight":0,"weight_unit":"lb","inventory_item_id":34583986438228,"inventory_quantity":-182,"old_inventory_quantity":-182,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32952999247956"}],"options":[{"id":6231019913300,"product_id":4800613351508,"name":"Color","position":1,"values":["Green","Teal","Black"]}],"images":[{"id":16031303958612,"product_id":4800613351508,"position":1,"created_at":"2020-11-20T13:15:04-08:00","updated_at":"2021-07-21T07:29:36-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-01_412d3fb6-0fd2-4d26-9260-7e912dc20264.jpg?v=1626877776","variant_ids":[32952999182420],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031303958612"},{"id":16031303991380,"product_id":4800613351508,"position":2,"created_at":"2020-11-20T13:15:04-08:00","updated_at":"2021-07-21T07:29:36-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-02_17238ff8-78af-4279-8b65-92a924c78478.jpg?v=1626877776","variant_ids":[32952999215188],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031303991380"},{"id":16031303925844,"product_id":4800613351508,"position":3,"created_at":"2020-11-20T13:15:04-08:00","updated_at":"2021-07-21T07:29:36-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-03_35228880-4988-41f0-bd0e-900e8f025459.jpg?v=1626877776","variant_ids":[32952999247956],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031303925844"}],"image":{"id":16031303958612,"product_id":4800613351508,"position":1,"created_at":"2020-11-20T13:15:04-08:00","updated_at":"2021-07-21T07:29:36-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-01_412d3fb6-0fd2-4d26-9260-7e912dc20264.jpg?v=1626877776","variant_ids":[32952999182420],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031303958612"}}},{"bundles_product_name":{"value":"4800613351508","label":"Aculief&nbsp;&nbsp;price:$29.99&nbsp;&nbsp;sku: ACLFGRN1 rp: 29.99 adv3: 29.99&nbsp;&nbsp;id:4800613351508"},"qty":"2","discount":"100","bundle_variant_info":{"id":4800614367316,"title":"Aculief - FREE!","body_html":"","vendor":"getaculief","product_type":"V2.0 $29.99","created_at":"2020-11-20T13:20:25-08:00","handle":"aculief-free-3","updated_at":"2021-11-17T14:30:25-08:00","published_at":"2020-11-20T13:20:25-08:00","template_suffix":"","status":"active","published_scope":"web","tags":["adv3: 29.99","bu: 1.55","colors:Green-6aab0f;Teal-036d71;Black-101010","dt: 100","pid: 4800613351508","rp: 29.99","vp: 3-green;teal;black","vp: 5-green;teal;black;green;teal","wp: 2.65","wt: 0.08"],"admin_graphql_api_id":"gid:\/\/shopify\/Product\/4800614367316","variants":[{"id":32953002197076,"product_id":4800614367316,"title":"Green","price":"0.00","sku":"ACLFGRN1FREE","position":1,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Green","option2":null,"option3":null,"created_at":"2020-11-20T13:20:25-08:00","updated_at":"2021-11-17T09:59:00-08:00","taxable":true,"barcode":"850748004002","grams":0,"image_id":16031318310996,"weight":0,"weight_unit":"lb","inventory_item_id":34583989387348,"inventory_quantity":-98,"old_inventory_quantity":-98,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32953002197076"},{"id":32953002229844,"product_id":4800614367316,"title":"Teal","price":"0.00","sku":"ACLFTEA1FREE","position":2,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Teal","option2":null,"option3":null,"created_at":"2020-11-20T13:20:25-08:00","updated_at":"2021-11-17T09:59:00-08:00","taxable":true,"barcode":"X002GQFQGP","grams":0,"image_id":16031318343764,"weight":0,"weight_unit":"lb","inventory_item_id":34583989420116,"inventory_quantity":-135,"old_inventory_quantity":-135,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32953002229844"},{"id":32953002262612,"product_id":4800614367316,"title":"Black","price":"0.00","sku":"ACLFBLK1FREE","position":3,"inventory_policy":"deny","compare_at_price":null,"fulfillment_service":"manual","inventory_management":null,"option1":"Black","option2":null,"option3":null,"created_at":"2020-11-20T13:20:25-08:00","updated_at":"2021-11-17T06:51:40-08:00","taxable":true,"barcode":"X001NHILBZ","grams":0,"image_id":16031318376532,"weight":0,"weight_unit":"lb","inventory_item_id":34583989452884,"inventory_quantity":-512,"old_inventory_quantity":-512,"requires_shipping":true,"admin_graphql_api_id":"gid:\/\/shopify\/ProductVariant\/32953002262612"}],"options":[{"id":6231021518932,"product_id":4800614367316,"name":"Color","position":1,"values":["Green","Teal","Black"]}],"images":[{"id":16031318310996,"product_id":4800614367316,"position":1,"created_at":"2020-11-20T13:20:25-08:00","updated_at":"2021-07-21T07:29:49-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-01_4070c00d-13bb-49d8-ac7f-5a9ac692f16a.jpg?v=1626877789","variant_ids":[32953002197076],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031318310996"},{"id":16031318343764,"product_id":4800614367316,"position":2,"created_at":"2020-11-20T13:20:25-08:00","updated_at":"2021-07-21T07:29:49-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-02_ed88ae7c-d521-4a5e-aaab-848715b63c5b.jpg?v=1626877789","variant_ids":[32953002229844],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031318343764"},{"id":16031318376532,"product_id":4800614367316,"position":3,"created_at":"2020-11-20T13:20:25-08:00","updated_at":"2021-07-21T07:29:49-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-03_562f9a2a-3614-4ad0-af80-8692d82b89f1.jpg?v=1626877789","variant_ids":[32953002262612],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031318376532"}],"image":{"id":16031318310996,"product_id":4800614367316,"position":1,"created_at":"2020-11-20T13:20:25-08:00","updated_at":"2021-07-21T07:29:49-07:00","alt":null,"width":100,"height":100,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0277\/4129\/0580\/products\/aculief-ct-01_4070c00d-13bb-49d8-ac7f-5a9ac692f16a.jpg?v=1626877789","variant_ids":[32953002197076],"admin_graphql_api_id":"gid:\/\/shopify\/ProductImage\/16031318310996"}}}],"bundle_slug":"29-99-buy-3-get-2-free","bundle_shipping":{"domestic_shipping":{"default_domestic_shipping_rate":"0.00","custom_default_rate_name_toggle":[],"custom_default_rate_name":"Free USA Shipping!","domestic_rate_exceptions":false,"expedited_domestic_shipping":[],"default_expedited_rate":"0.00","custom_expedited_rate_name_toggle":[],"custom_expedited_rate_name":"","dom_exp_rate_overrides":false},"international_shipping":{"default_intl_shipping_rate":"4.99","custom_default_intl_rate_name_toggle":[],"custom_default_intl_rate_name":"Standard Shipping!","intl_rate_exceptions":false,"expedited_intl_shipping":[],"default_international_expedited_rate":"0.00","custom_expedited_intl_rate_name_toggle":[],"custom_expedited_intl_rate_name":"","intl_exp_rate_overrides":false}}}]};--}}
    {{--var upsellCheckoutData = {"upsell_inline_info":[],"product_info_inline":[],"product_info_popup":[],"upsell_popup_info":[],"upsell_inline_name":"offer-01-popup-upsell","upsell_popup_name":""};--}}
    {{--var checkoutScript = {"theme_directory":"https:\/\/getaculief.io\/wp-content\/themes\/giddyupio-prototype"};--}}
    {{--/* ]]> */--}}
{{--</script>--}}

{{--<script type='text/javascript' src='{{ asset('/') }}flexovalFiles/aculief/offer_scripts.js' id='offers-scripts-js'></script>--}}
{{--<script type='text/javascript' src='{{ asset('/') }}flexovalFiles/aculief/enquire.js' id='enquire-script-js'></script>--}}
{{--<script type='text/javascript' src='{{ asset('/') }}flexovalFiles/aculief/slick.min.js' id='slideshow-script-js'></script>--}}

{{--<script type='text/javascript' src='../wp-content/themes/giddyupio-prototype/js/stripe.payments.min080f.js?ver=5.8.2' id='stripe-payments-js'></script>--}}

</body>
</html>