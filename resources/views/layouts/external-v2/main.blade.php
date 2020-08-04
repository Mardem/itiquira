<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <link href="{{ asset('layout/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('layout/css/default.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('layout/css/style.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('layout/css/plugin.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('layout/css/pricing.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"/>
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/packages/core/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/packages/daygrid/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/packages/timegrid/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/packages/daygrid/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.13.0/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @stack('styles')

</head>
<body>

<div id="preloader">
    <div id="status"></div>
</div>
@include('layouts.external-v2.partials.menubar')
@yield('content')

<footer>

    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="copyright-content">
                        <p>Copyright {{ now()->year }}. Feito com <span>♥</span>. Todos direitos reservados</p>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="tripadvisor-logo text-center">
                        <img src="{{ asset('images/front/logo.png') }}" width="150" alt="image">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="copyright-links mar-bottom-20">
                        <ul>
                            <li><a href="#">Chalés</a></li>
                            <li><a href="#">Agendar agora</a></li>
                            <li><a href="#">Termos e condições</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<div id="back-to-top">
    <a href="#"></a>
</div>

@stack('scripts')
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="{{ asset('layout/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('layout/js/plugins.js') }}" type="text/javascript"></script>
<script src="{{ asset('layout/js/main.js') }}" type="text/javascript"></script>
<script src="{{ asset('layout/js/custom-nav.js') }}" type="text/javascript"></script>
<script src="{{ asset('layout/js/custom-swiper1.js') }}" type="text/javascript"></script>
<script src="{{ asset('layout/js/custom-singledate.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/front/js/calendar.min.js') }}"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"></script>
<!--[if lt IE 9]>
<script src="{{ asset('assets/front/js/respond.min.js') }}"></script>
<![endif]-->
</body>
</html>
