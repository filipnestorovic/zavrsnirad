<!DOCTYPE html>
<html>
<head>
    @include('components.pixel_init')
    <meta charset="utf-8" />
    <meta content="initial-scale=1, maximum-scale=1, width=device-width" name="viewport" />

    <link href="{{ asset('/') }}naturapharmFiles/shared_files/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('/') }}naturapharmFiles/shared_files/app.css">

    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}shared_files/owl.carousel.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}naturapharmFiles/shared_files/jquery.validate.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}naturapharmFiles/shared_files/app.js"></script>

    {{--<script src="{{ asset('/') }}naturapharmFiles/shared_files/jquery.plugin.min.js"></script>--}}
    {{--<script src="{{ asset('/') }}naturapharm/js/jquery.countdown.js"></script>--}}
    <style>
        input[type="radio"] {
            width: 15px !important;
            height: 15px !important;
            cursor: pointer;
        }
        label {
            cursor: pointer;
            font-size: 18px;
        }
        .input-line-item {
            flex-direction: column;
        }

        label.errorValidate {
            text-align: center;
            display: block;
            position: static;
            background: red;
            color: white;
            font-size: 16px;
            margin: 5px auto;
            margin-top: 0px !important;
            padding-left: 10px;
            padding-right: 10px;
            border-radius: 5px;
            width: 50%;
        }

        .errorBorder {
            border: 1px solid red !important;
        }

        .success {
            position: relative;
            padding: .75rem 1.25rem;
            border: 1px solid transparent;
            border-radius: .25rem;
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
            text-align: center;
            font-size: 1.5em;
        }
    </style>
</head>
<body>
@include('components.display_errors')