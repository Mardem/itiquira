<!doctype html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic%7CMontserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='{{ asset('reservations/assets/css/flexslider.css') }}'>
    <link rel='stylesheet' href='{{ asset('reservations/assets/css/font-awesome.css') }}'>
    <link rel='stylesheet' href='{{ asset('reservations/assets/css/weather-icons.css') }}'>
    <link rel='stylesheet' href='{{ asset('reservations/assets/css/bootstrap.css') }}'>
    <link rel='stylesheet' href='{{ asset('reservations/assets/css/prettyPhoto.css') }}'>
    <link rel='stylesheet' href='{{ asset('reservations/assets/css/mmenu.css') }}'>
    <link rel='stylesheet' href='{{ asset('reservations/assets/css/jquery-ui-1.10.4.datepicker.min.css') }}'>
    <link rel='stylesheet' href='{{ asset('reservations/assets/style.css') }}'>
    <link rel='stylesheet' href='{{ asset('reservations/assets/css/mediaqueries.css') }}'>
    <link rel='stylesheet' href='{{ asset('reservations/assets/colors/default.css') }}'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/menu-custom.css') }}">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="#">
    <link rel="apple-touch-icon" href="#">
    <link rel="apple-touch-icon" sizes="72x72" href="#">
    <link rel="apple-touch-icon" sizes="114x114" href="#">

    <!--[if lt IE 9]>
    <script src="{{ asset('reservations/assets/js/html5shiv.js') }}"></script>
    <![endif]-->
    @stack('styles')

    <style>
        #header {
            background: url("{{ asset('images/chalets/top-header-chalet-2.jpg') }}") no-repeat center top;
        }
        .fwslider #header { background: none; }
    </style>
</head>
