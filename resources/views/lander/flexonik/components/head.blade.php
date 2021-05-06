<!doctype html>
<html>
<head>
    @include('components.pixel_init')
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, minimal-ui, user-scalable=no">
    <meta charset="UTF-8">

    <link rel="icon" href="{{ asset('/') }}flexonikFiles/shared_files/flexonik_favicon.png" type="image/png">

    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/shared_files/site.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/shared_files/index.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/shared_files/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}flexonikFiles/shared_files/floating_bar.css">

    <style>
        .feature-block .w_desc ul li:before {
            position: absolute;
            top: 2px;
            left: 0;
            font-family: "FontAwesome";
            content: "\f105";
            color: #F15F56;
        }
        .feature-block .w_desc ul li {
            list-style: none;
        }
        @font-face {
            font-family:'Montserrat';
            font-display:auto;
            format('embedded-opentype'), url({{ asset('/') }}fonts/Montserrat-Regular.ttf);
            font-weight:400;
            font-style:normal
        }
        @font-face {
            font-family:'Montserrat Bold';
            font-display:auto;
            format('embedded-opentype'), url({{ asset('/') }}fonts/Montserrat-Bold.ttf);
            font-weight:800;
            font-style:normal
        }
        @font-face {
            font-family: MontserratBold;
            src: url({{ asset('/') }}fonts/Montserrat-Bold.ttf);
            font-weight: bold;
        }
        @font-face{
            font-family:icomoon;
            font-display:auto;
            src:url({{ asset('/') }}fonts/icomoon-f.eot);
            src:url({{ asset('/') }}fonts/icomoon-f.eot) format('embedded-opentype'),
            url({{ asset('/') }}fonts/icomoon-f.ttf) format('truetype'),
            url({{ asset('/') }}fonts/icomoon-f.woff) format('woff'),
            url({{ asset('/') }}fonts/icomoon-f.svg) format('svg');
            font-weight:400;
            font-style:normal
        }
        @font-face{
            font-family:'FontAwesome';
            src:url('{{ asset('/') }}fonts/fontawesome-webfont.eot');
            src:url('{{ asset('/') }}fonts/fontawesome-webfont.eot') format('embedded-opentype'),
            url('{{ asset('/') }}fonts/fontawesome-webfont.woff2') format('woff2'),
            url('{{ asset('/') }}fonts/fontawesome-webfont.woff') format('woff'),
            url('{{ asset('/') }}fonts/fontawesome-webfont.ttf') format('truetype'),
            url('{{ asset('/') }}fonts/fontawesome-webfont.svg') format('svg');
            font-weight:normal;
            font-style:normal
        }
        .headerText {
            margin-bottom: 20px;
            font-size: 36px;
            letter-spacing: .48px;
            line-height: 1
        }
        .headerText strong {
            font-size: 44px;
            line-height: 1
        }
        @media (min-width:992px) {
            .headerText {
                margin-bottom: 40px;
                font-size: 56px;
                letter-spacing: .9px
            }
            .headerText strong {
                margin-bottom: 40px;
                font-size: 64px;
                letter-spacing: .9px
            }
        }
    </style>
</head>
<body class="indextemplate index-v1 ">