<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
    <title>{{ env('APP_NAME') }}</title>

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="author" content="VTec">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="{{ asset('reservations/assets2/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('reservations/assets2/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('reservations/assets2/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('reservations/assets2/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('reservations/assets2/css/mystyles.css') }}">
    <script src="{{ asset('reservations/assets2/js/modernizr.js') }}"></script>

    <link rel="alternate stylesheet" type="text/css" href="{{ asset('reservations/assets2/css/schemes/bright-turquoise.css') }}" title="bright-turquoise" media="all" />
    @stack('css')
</head>
