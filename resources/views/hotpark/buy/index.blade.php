<!doctype html>
<html lang="pt-br">
<head>
    <title>Day User - {{ env('APP_NAME') }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/wizard/css/smart_wizard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/wizard/css/smart_wizard_theme_circles.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('css/card-custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"/>
    <style>
        body {
            overflow: hidden;
        }

        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #F27620; /* cor do background que vai ocupar o body */
            z-index: 999; /* z-index para jogar para frente e sobrepor tudo */
        }

        #preloader .inner {
            position: absolute;
            top: 50%; /* centralizar a parte interna do preload (onde fica a animação)*/
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .bolas > div {
            display: inline-block;
            background-color: #fff;
            width: 25px;
            height: 25px;
            border-radius: 100%;
            margin: 3px;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            animation-name: animarBola;
            animation-timing-function: linear;
            animation-iteration-count: infinite;

        }

        .bolas > div:nth-child(1) {
            animation-duration: 0.75s;
            animation-delay: 0;
        }

        .bolas > div:nth-child(2) {
            animation-duration: 0.75s;
            animation-delay: 0.12s;
        }

        .bolas > div:nth-child(3) {
            animation-duration: 0.75s;
            animation-delay: 0.24s;
        }

        @keyframes animarBola {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
            16% {
                -webkit-transform: scale(0.1);
                transform: scale(0.1);
                opacity: 0.7;
            }
            33% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        /* end: Preloader */
        .btn-secondary {
            color: #fff;
            border-color: #e07304;
            background: #ff8100;
        }

        .btn-secondary:hover {
            color: #fff;
            background-color: #fb9a38;
            border-color: #ff8100;
        }

        .sw-theme-circles .sw-toolbar {
            background: #f8f9fa !important;
        }
    </style>
</head>
<body class="bg-light">
<!-- início do preloader -->
<div id="preloader">
    <div class="inner">
        <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
        <div class="bolas">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!-- fim do preloader -->

<div class="container" id="app">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://www.itiquira.com.br/images/logo.png" alt="" width="250">
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div id="accordianId" role="tablist" aria-multiselectable="true">
                <div class="card card-custom">
                    <div class="card-header" role="tab" id="section1HeaderId">
                        <h5 class="mb-0">

                            <ul class="top-info">
                                <li style="display: inline-block">
                                    <a data-toggle="collapse" data-parent="#accordianId" href="#section1ContentId"
                                       aria-expanded="true" aria-controls="section1ContentId">
                                        <i class="lni-calendar"></i>
                                        <ul class="data-info">
                                            <li>Data</li>
                                            <li>
                                                <span id="date-selected">{{ $date->format('d/m/Y') }}</span>
                                            </li>
                                        </ul>
                                    </a>
                                </li>
                                <li>
                                    <span class="cart">
                                        <i class="lni-cart"></i>
                                    </span>
                                    <span class="total-title">
                                        Total
                                    </span>
                                    <br>
                                    <span class="total-price">
                                        R$ 0,00
                                    </span>
                                </li>
                            </ul>
                        </h5>
                    </div>
                    <div id="section1ContentId" class="collapse in" role="tabpanel" aria-labelledby="section1HeaderId">
                        <div class="card-body c-body-custom">
                            <table class="show-cart table text-white">
                            </table>
                        </div>
                        <div class="card-footer">
                            <button class="clear-cart btn btn-danger">Limpar carrinho</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div id="smartwizard" class="mt-3">
                <ul class="bg-light">
                    <li style="margin-left: 120px;"><a href="#step-1">Passo 1<br/>
                            <small>Day User</small>
                        </a></li>
                    <li style="margin-left: 120px;"><a href="#step-2">Passo 2<br/>
                            <small>Refeição</small>
                        </a></li>
                    <li style="margin-left: 120px;"><a href="#step-3">Passo 3<br/>
                            <small>Lazeres</small>
                        </a></li>
                    <li style="margin-left: 120px;"><a href="#step-4">Passo 4<br/>
                            <small>Extras</small>
                        </a></li>
                    <li style="margin-left: 120px;"><a href="#step-5">Passo 5<br/>
                            <small>Checkout</small>
                        </a></li>
                </ul>

                <div>
                    <div id="step-1" class="bg-light">

                        <div class="row mt-4 mb-4">

                            @foreach($products->where('step', 0) as $product)
                                <div class="col-sm-4">
                                    <div class="sale-item">
                                        <div class="columns data clickable" role="button" title="Ver regras e condições"
                                             data-toggle="modal"
                                             data-target="#productIndex{{ $product->id }}">
                                            <div class="equalizer-caption">
                                                <div class="name">{{ $product->name }}</div>
                                            </div>
                                            <div class="equalizer-price">
                                                <div class="price">
                                                    @if($day->className == 'altaTemporada')
                                                            R$ {{ number_format($product->value_high_percent, 2, ',', '.') }}
                                                        @elseif($day->className == 'mediaTemporada')
                                                            R$ {{ number_format($product->value_medium_percent, 2, ',', '.') }}
                                                        @elseif($day->className == 'baixaTemporada')
                                                            R$ {{ number_format($product->value_low_percent, 2, ',', '.') }}
                                                        @else
                                                            R$ {{ number_format($product->price, 2, ',', '.') }}
                                                    @endif
                                                </div>
                                                @if($product->description != null)
                                                    <div class="rules">Regras e condições</div>
                                                @endif
                                            </div>
                                        </div>

                                    @component('hotpark.buy.component.card', ['product' => $product, 'day' => $day])@endcomponent

                                    @if($product->description != null)
                                        <!-- Modal -->
                                            <div class="modal fade" id="productIndex{{ $product->id }}" tabindex="-1"
                                                 role="dialog" aria-labelledby="modelTitleId"
                                                 aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-black-50">Regras e
                                                                condições</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" style="color: #000">
                                                            {{ $product->description }}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Fechar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div id="step-2" class="bg-light">
                        <div class="row mt-4 mb-4">
                            @forelse($products->where('step', 1) as $product)
                                <div class="col-sm-4">
                                    <div class="sale-item">
                                        <div class="columns data clickable" role="button" title="Ver regras e condições"
                                             data-toggle="modal"
                                             data-target="#productIndex{{ $product->id }}">
                                            <div class="equalizer-caption">
                                                <div class="name">{{ $product->name }}</div>
                                            </div>
                                            <div class="equalizer-price">
                                                <div class="price">
                                                    @if($day->className == 'altaTemporada')
                                                        R$ {{ number_format($product->value_high_percent, 2, ',', '.') }}
                                                    @elseif($day->className == 'mediaTemporada')
                                                        R$ {{ number_format($product->value_medium_percent, 2, ',', '.') }}
                                                    @elseif($day->className == 'baixaTemporada')
                                                        R$ {{ number_format($product->value_low_percent, 2, ',', '.') }}
                                                    @else
                                                        R$ {{ number_format($product->price, 2, ',', '.') }}
                                                    @endif
                                                </div>
                                                @if($product->description != null)
                                                    <div class="rules">Regras e condições</div>
                                                @endif
                                            </div>
                                        </div>

                                    @component('hotpark.buy.component.card', ['product' => $product, 'day' => $day])@endcomponent

                                    @if($product->description != null)
                                        <!-- Modal -->
                                            <div class="modal fade" id="productIndex{{ $product->id }}" tabindex="-1"
                                                 role="dialog" aria-labelledby="modelTitleId"
                                                 aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-black-50">Regras e
                                                                condições</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" style="color: #000">
                                                            {{ $product->description }}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Fechar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @empty
                                <h2 class="text-center text-muted w-100">Nenhum produto cadastrado nesta sessão</h2>
                            @endforelse
                        </div>
                    </div>
                    <div id="step-3" class="bg-light">
                        <div class="row mt-4 mb-4">
                            @forelse($products->where('step', 2) as $product)
                                <div class="col-sm-4">
                                    <div class="sale-item">
                                        <div class="columns data clickable" role="button" title="Ver regras e condições"
                                             data-toggle="modal"
                                             data-target="#productIndex{{ $product->id }}">
                                            <div class="equalizer-caption">
                                                <div class="name">{{ $product->name }}</div>
                                            </div>
                                            <div class="equalizer-price">
                                                <div class="price">
                                                    @if($day->className == 'altaTemporada')
                                                        R$ {{ number_format($product->value_high_percent, 2, ',', '.') }}
                                                    @elseif($day->className == 'mediaTemporada')
                                                        R$ {{ number_format($product->value_medium_percent, 2, ',', '.') }}
                                                    @elseif($day->className == 'baixaTemporada')
                                                        R$ {{ number_format($product->value_low_percent, 2, ',', '.') }}
                                                    @else
                                                        R$ {{ number_format($product->price, 2, ',', '.') }}
                                                    @endif
                                                </div>
                                                @if($product->description != null)
                                                    <div class="rules">Regras e condições</div>
                                                @endif
                                            </div>
                                        </div>

                                    @component('hotpark.buy.component.card', ['product' => $product, 'day' => $day])@endcomponent

                                    @if($product->description != null)
                                        <!-- Modal -->
                                            <div class="modal fade" id="productIndex{{ $product->id }}" tabindex="-1"
                                                 role="dialog" aria-labelledby="modelTitleId"
                                                 aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-black-50">Regras e
                                                                condições</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" style="color: #000">
                                                            {{ $product->description }}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Fechar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @empty
                                <h2 class="text-center text-muted w-100">Nenhum produto cadastrado nesta sessão</h2>
                            @endforelse
                        </div>
                    </div>
                    <div id="step-4" class="bg-light">
                        <div class="row mt-4 mb-4">
                            @forelse($products->where('step', 3) as $product)
                                <div class="col-sm-4">
                                    <div class="sale-item">
                                        <div class="columns data clickable" role="button" title="Ver regras e condições"
                                             data-toggle="modal"
                                             data-target="#productIndex{{ $product->id }}">
                                            <div class="equalizer-caption">
                                                <div class="name">{{ $product->name }}</div>
                                            </div>
                                            <div class="equalizer-price">
                                                <div class="price">
                                                    @if($day->className == 'altaTemporada')
                                                        R$ {{ number_format($product->value_high_percent, 2, ',', '.') }}
                                                    @elseif($day->className == 'mediaTemporada')
                                                        R$ {{ number_format($product->value_medium_percent, 2, ',', '.') }}
                                                    @elseif($day->className == 'baixaTemporada')
                                                        R$ {{ number_format($product->value_low_percent, 2, ',', '.') }}
                                                    @else
                                                        R$ {{ number_format($product->price, 2, ',', '.') }}
                                                    @endif
                                                </div>
                                                @if($product->description != null)
                                                    <div class="rules">Regras e condições</div>
                                                @endif
                                            </div>
                                        </div>

                                    @component('hotpark.buy.component.card', ['product' => $product, 'day' => $day])@endcomponent

                                    @if($product->description != null)
                                        <!-- Modal -->
                                            <div class="modal fade" id="productIndex{{ $product->id }}" tabindex="-1"
                                                 role="dialog" aria-labelledby="modelTitleId"
                                                 aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-black-50">Regras e
                                                                condições</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" style="color: #000">
                                                            {{ $product->description }}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Fechar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @empty
                                <h2 class="text-center text-muted w-100">Nenhum produto cadastrado nesta sessão</h2>
                            @endforelse
                        </div>
                    </div>
                    <div id="step-5" class="bg-light">
                        <div class="card text-white" style="background-color: #426b98">
                            <div class="card-body">
                                <table class="show-cart table text-white">
                                </table>
                            </div>
                            <div class="card-footer text-white">
                                Total: <strong class="total-cart"></strong>
                                <a role="button" onclick="makePayment()"
                                   class="btn btn-primary button-custom float-right" href="#">Fazer pagamento</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2019 {{ env('APP_NAME') }}</p>

</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/wizard/js/jquery.smartWizard.min.js') }}"></script>
<script src="{{ asset('js/cart.js') }}"></script>

<script type="text/javascript">
    $(window).on('load', function () {
        $('#preloader .inner').fadeOut();
        $('#preloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({'overflow': 'visible'});
    });
    $(document).ready(function () {
        $('#smartwizard').smartWizard({
            theme: 'circles',
            selected: 0,
            transitionEffect: 'fade',
            lang: {  // Language variables
                next: 'Próximo',
                previous: 'Voltar'
            },
            toolbarSettings: {
                toolbarPosition: 'bottom', // none, top, bottom, both
                toolbarButtonPosition: 'right', // left, right
                showNextButton: true, // show/hide a Next button
                showPreviousButton: true, // show/hide a Previous button
            },
            anchorSettings: {
                anchorClickable: false, // Enable/Disable anchor navigation
                enableAllAnchors: false, // Activates all anchors clickable all times
                markDoneStep: false, // add done css
                enableAnchorOnDoneStep: false // Enable/Disable the done steps navigation
            },
        });
    });
</script>
</body>
</html>
