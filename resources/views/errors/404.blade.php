<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Processando pagamento</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('assets/checkout/payed/images/icons/favicon.ico') }}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/checkout/payed/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/checkout/payed/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/checkout/payed/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/checkout/payed/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/checkout/payed/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/checkout/payed/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/checkout/payed/css/main.css') }}">
    <!--===============================================================================================-->
    <style>
        .bg-g1 {
            background: #87e0fd;
            background: -moz-linear-gradient(top, #67cff1 0%, #00dcff 86%);
            background: -webkit-linear-gradient(top, #67cff1 0%,#00dcff 86%);
            background: linear-gradient(to bottom, #67cff1 0%,#00dcff 86%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#67cff1', endColorstr='#00dcff',GradientType=0 );
        }
    </style>
</head>
<body>


<div class="bg-g1 size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-t-55 p-b-35 respon1">
    <span></span>
    <div class="flex-col-c p-t-50 p-b-50">
        <div class="l1-txt1 txt-center p-b-10">
            <img src="{{ asset('images/front/logo.png') }}" alt="">
        </div>
        <h3 class="l1-txt1 txt-center p-b-10 text-capitalize">
            Oops...
        </h3>

        <p class="txt-center l1-txt2 p-b-60">
            Não foi encontrado nada para a sua pesquisa!
            <br>
            <small style="font-size: 65%">Você será redirecionado em <span id="countdown">10</span> segundos</small>
        </p>

        <button class="flex-c-m s1-txt2 size3 how-btn" id="backHome">
            Voltar para o início
        </button>
    </div>

    <span class="s1-txt3 txt-center">
			&copy; {{ env('APP_NAME') }}. Todos os direitos reservados.
    </span>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    (function ($) {
        "use strict";
        let back = $('#backHome');
        back.on("click", function() {
            window.location.href = window.origin;
        });
        let time = 10;
        setTimeout(function() {
            window.location.href = window.origin;
        }, 10000);

        let seconds = 10, $seconds = document.querySelector('#countdown');
        (function countdown() {
            $seconds.textContent = seconds + ' segundo' + (seconds == 1 ?  '' :  's');
            if(seconds --> 0) setTimeout(countdown, 1000)
        })();

    })(jQuery);
</script>
</body>
</html>
