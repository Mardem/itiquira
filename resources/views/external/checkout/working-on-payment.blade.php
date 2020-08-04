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
</head>
<body>


<div class="bg-g1 size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-t-55 p-b-35 respon1">
    <span></span>
    <div class="flex-col-c p-t-50 p-b-50">
        <div class="l1-txt1 txt-center p-b-10">
            <img src="{{ asset('images/front/logo.png') }}" alt="">
        </div>
        <h3 class="l1-txt1 txt-center p-b-10">
            Pagamento realizado!
        </h3>

        <p class="txt-center l1-txt2 p-b-60">
            Estamos processando o seu pagamento...
            <br>
            <small style="font-size: 65%">Você será redirecionado em <span id="countdown">5</span> segundos</small>
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
<script src="{{ asset('assets/checkout/payed/js/main.js') }}"></script>
</body>
</html>
