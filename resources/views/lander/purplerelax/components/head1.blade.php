<!doctype html>
<html>
<head>
    @include('components.pixel_init')
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, minimal-ui, user-scalable=no">
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('/') }}purplerelaxFiles/shared_files/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/shared_files/site1.css">
    <link rel="stylesheet" href="{{ asset('/') }}purplerelaxFiles/shared_files/index-cp.css">
    @include('lander.purplerelax.components.header_fonts')
    <style>
        .functional .intro h3:before {
            content: "";
            display: block;
            width: 28px;
            height: 28px;
            position: absolute;
            top: 0;
            left: 0
        }
        @media (max-width:768px) {
            .section-12 .top-banner {
                padding-top: 350px;
            }
        }
        @media (min-width:768px) {
            .section-10 .offer_text {
                padding-left: 100px;
            }
        }
    </style>
</head>
<body class="indextemplate index-cp">
<div class="wrapper">
@include('components.display_errors')