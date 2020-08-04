@extends('layouts.external.booking.main')
@push('content')
    <div class="top-area show-onload">
        <div class="bg-holder full">
            <div class="bg-mask"></div>
            <div class="bg-parallax"
                 style="background-image:url('{{ asset('reservations/sliders/slider-mail.jpg') }}');"></div>
            <div class="bg-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="search-tabs search-tabs-bg mt50">
                                <h1>Seja Hóspede da Natureza </h1>
                                <div class="tabbable">
                                    <ul class="nav nav-tabs" id="myTab">
                                        <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-home"></i>
                                                <span>Chalés VIP</span></a></li>
                                        <li><a href="#tab-3" data-toggle="tab"><i class="fa maki-golf"></i> <span>Camping</span></a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab-1">
                                            <form method="get" action="{{ route('chalets.result') }}">
                                                <div class="input-daterange">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-lg form-group-icon-left">
                                                                <i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                <label>Check-in &mdash; (16:00)</label>
                                                                <input class="form-control datepicker" autocomplete="off" placeholder="Selecione a data" name="check_in" type="text"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-lg form-group-icon-left">
                                                                <i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                <label>Check-out &mdash; (16:00) <sup>dia seguinte</sup></label>
                                                                <input class="form-control datepicker" autocomplete="off" placeholder="Selecione a data" name="check_out" type="text"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div
                                                            class="form-group form-group-lg form-group-select-plus">
                                                            <label>Adultos</label>
                                                            <select class="form-control custom-form" name="adults" id="select-adults">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                                <option>13</option>
                                                                <option>14</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-group-lg form-group-select-plus">
                                                            <label>Crianças &mdash; 0 a 5 anos</label>
                                                            <select class="form-control custom-form" name="childrens_9" id="select-children9">
                                                                <option>0</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                                <option>13</option>
                                                                <option>14</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-group-lg form-group-select-plus">
                                                            <label>Crianças &mdash; 6 a 9 anos</label>
                                                            <select class="form-control custom-form" name="childrens_10" id="select-childrens_10">
                                                                <option>0</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                                <option>13</option>
                                                                <option>14</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary btn-lg" type="submit">Buscar por chalés
                                                </button>
                                            </form>
                                        </div>

                                        <div class="tab-pane fade" id="tab-3">
                                            <form action="{{ route('camping.reserve') }}" method="get">
                                                <div class="input-daterange">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-lg form-group-icon-left">
                                                                <i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                <label>Check-in &mdash; (09:00)</label>
                                                                <input class="form-control datepicker" autocomplete="off" placeholder="Selecione a data" name="check_in" type="text"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-lg form-group-icon-left">
                                                                <i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                <label>Check-out &mdash; (17:00) <sup>dia seguinte</sup></label>
                                                                <input class="form-control datepicker" autocomplete="off" placeholder="Selecione a data" name="check_out" type="text"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-lg form-group-select-plus">
                                                                <label>Adultos</label>
                                                                <select class="form-control custom-form" name="adults" id="select-adults-camping">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div
                                                                class="form-group form-group-lg form-group-select-plus">
                                                                <label>Crianças &mdash; 6 a 9 anos</label>

                                                                <select class="form-control custom-form" name="childrens" id="select-children-camping">
                                                                    <option>0</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary btn-lg" type="submit">Calcular</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="loc-info text-right hidden-xs hidden-sm">
                                <h3 class="loc-info-title"><img
                                        src="https://image.flaticon.com/icons/svg/301/301704.svg"
                                        style="width: 70px;margin-top: 44px;margin-right: 0;"/>Vantagens do</h3>
                                <p class="loc-info-weather" style="margin-top: -25px"><span
                                        class="loc-info-weather-num">Chalé</span>
                                </p>
                                <ul class="loc-info-list">
                                    <li><a href="#"><i class="fa fa-circle" style="color: #29ea5d;"></i> Piscina adulto
                                            e infantil</a></li>
                                    <li><a href="#"><i class="fa fa-circle" style="color: #29ea5d;"></i> Sauna mista a
                                            vapor</a></li>
                                    <li><a href="#"><i class="fa fa-circle" style="color: #29ea5d;"></i> Piscina
                                            aquecida</a></li>
                                    <li><a href="#"><i class="fa fa-circle" style="color: #29ea5d;"></i> Estacionamento</a>
                                    </li>
                                </ul>
                                <a class="btn btn-white btn-ghost mt10" href="https://www.itiquira.com.br/chales"
                                   target="_blank"><i class="fa fa-angle-right"></i> Saber mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END TOP AREA  -->

    <div class="gap"></div>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row row-wrap" data-gutter="120">
                    <div class="col-md-12">
                        <div class="mb30 thumb"><i
                                class="fa fa-thumbs-o-up box-icon-left round box-icon-big box-icon-border animate-icon-top-to-bottom"></i>
                            <div class="thumb-caption">
                                <h4 class="thumb-title"><b>Aproveite o que há de melhor</b></h4>
                                <p class="lead" style="margin-top: 15px;text-align: justify;">
                                    Os Chalés estão em um local privilegiado no Itiquira Park, onde a natureza dá um
                                    show a parte. São 26 unidades, construídos em arquitetura estilo Suíça, em um
                                    alinhamento perfeito com o Salto do Itiquira. Os Chalés são equipados com TV, Ar
                                    Condicionado e Frigobar. A área de lazer dos Chalés é VIP e está completa com
                                    piscinas, sauna, parquinho infantil, mini tobo-água, piscina aquecida, rio exclusivo
                                    com acesso e local apropriado para banho, alimentação, iluminação temática noturna.
                                    Ambiente familiar e agradável.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row row-wrap" data-gutter="120">
                    <div class="col-md-12">
                        <div class="mb30 thumb"><i
                                class="fa fa-question-circle box-icon-left round box-icon-big box-icon-border animate-icon-top-to-bottom"></i>
                            <div class="thumb-caption">
                                <h4 class="thumb-title mb-3" style="margin-bottom: 15px;">Perguntas frequentes</h4>
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                                       href="#collapse-1" class="">O que há no
                                                    chalé?</a></h4>
                                        </div>
                                        <div class="panel-collapse collapse in" id="collapse-1" style="height: auto;">
                                            <div class="panel-body">
                                                <ul class="check-list about-chalet">
                                                    <li> Piscina aquecida;</li>
                                                    <li> Piscina adulto e infantil</li>
                                                    <li> Mini-toboágua e escorregador
                                                    </li>
                                                    <li>Quiosque de Alimentação ( Café, Almoço e Jantar)</li>
                                                    <li>Sauna mista a vapor</li>
                                                    <li> Gramados e Bosques</li>
                                                    <li> Estacionamento</li>
                                                    <li> Salão de Festas para 250 pessoas</li>
                                                    <li> Salão de Eventos para 80 pessoas</li>
                                                    <li> Parquinho Infantil</li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                                       href="#collapse-2" class="collapsed">Quanto é
                                                    para o casal e o que está incluso?</a></h4>
                                        </div>
                                        <div class="panel-collapse collapse" id="collapse-2" style="height: 0px;">
                                            <div class="panel-body">
                                                R$ 276,00 para duas pessoas, a diária, o check-in as 16:00 e o check-out
                                                às 16:00. Está incluso o acesso a Área Vip e ao Park das Águas.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                                       href="#collapse-3" class="collapsed">Acomoda
                                                    quantas pessoas?</a></h4>
                                        </div>
                                        <div class="panel-collapse collapse" id="collapse-3" style="height: 0px;">
                                            <div class="panel-body">
                                                Até 06 pessoas nos Chalés Grandes e até 03 pessoas no Chalé Pequeno.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                                       href="#collapse-4" class="collapsed">É necessário
                                                    levar roupa de cama, toalha, produtos de higiene?</a></h4>
                                        </div>
                                        <div class="panel-collapse collapse" id="collapse-4" style="height: 0px;">
                                            <div class="panel-body">
                                                Sim, não está incluso na diária. Caso prefira oferecemos um Kit de Roupa
                                                de Cama na portaria. O Kit Casal é R$60,00 e o Kit Solteiro é R$40,00
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                                       href="#collapse-5" class="collapsed">É permitida
                                                    a entrada com alimentos ou bebidas?</a></h4>
                                        </div>
                                        <div class="panel-collapse collapse" id="collapse-5" style="height: 0px;">
                                            <div class="panel-body">
                                                Não é permitido a entrada com alimentos ou bebidas, dispomos de pontos
                                                de venda de alimentação com preços compatíveis da cidade. Caso esta
                                                norma seja violada o usuário será convidado a ser retirar sem o
                                                reembolso do valor pago.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                                       href="#collapse-6" class="collapsed">Tenho um
                                                    animal de estimação, posso levar?</a></h4>
                                        </div>
                                        <div class="panel-collapse collapse" id="collapse-6" style="height: 0px;">
                                            <div class="panel-body">
                                                Não, nenhum tipo de animal é permitido a entrada.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                                       href="#collapse-7" class="collapsed">Criança
                                                    menor de 05 anos paga pela pernoite?</a></h4>
                                        </div>
                                        <div class="panel-collapse collapse" id="collapse-7" style="height: 0px;">
                                            <div class="panel-body">
                                                Somente a segunda criança menor de 05 anos paga a pernoite.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                                       href="#collapse-8" class="collapsed">É permitido
                                                    acampar na aréa dos chalés?</a></h4>
                                        </div>
                                        <div class="panel-collapse collapse" id="collapse-8" style="height: 0px;">
                                            <div class="panel-body">
                                                Até 06 pessoas nos Chalés Grandes e até 03 pessoas no Chalé Pequeno.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                                                       href="#collapse-9" class="collapsed">Não tirou a
                                                    sua dúvida?</a></h4>
                                        </div>
                                        <div class="panel-collapse collapse" id="collapse-9" style="height: 0px;">
                                            <div class="panel-body">
                                                <a href="mailto:contato@itiquira.com.br">Entre em contato conosco.</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap gap-small"></div>
    </div>
    <div class="bg-holder">
        <div class="bg-mask"></div>
        <div class="bg-blur"
             style="background-image:url({{ asset('http://remtsoy.com/tf_templates/traveler/demo_v1_7/img/bridge_1280x848.jpg') }});"></div>
        <div class="bg-content">
            <div class="container">
                <div class="gap gap-big text-center text-white">
                    <h2 class="text-uc mb20">Reservas de Chalés também realizadas por telefone ou e-mail</h2>
                    <p class="last-minute-date">(61) 3718-1502 / (61) 98438-0815 / Whatsapp (61) 98438-0807</p>
                    <p class="last-minute-date"><a href="mailto:contato@itiquira.com.br">contato@itiquira.com.br</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="gap"></div>
        <h2 class="text-center">Imagens do chalé</h2>
        <div class="gap">
            <div class="row row-wrap">
                <div class="col-md-12">
                    <div class="row lightgallery">
                        <a class="col-sm-3" href="{{ asset('images/chalets/gallery/2.jpg') }}">
                            <img src="{{ asset('images/chalets/gallery/thumb/thumb-2.jpg') }}"/>
                        </a>
                        <a class="col-sm-3" href="{{ asset('images/chalets/gallery/img-g-3.jpg') }}">
                            <img src="{{ asset('images/chalets/gallery/thumb/thumb-3.jpg') }}"/>
                        </a>
                        <a class="col-sm-3" href="{{ asset('images/chalets/gallery/img-g-4.jpg') }}">
                            <img src="{{ asset('images/chalets/gallery/thumb/thumb-4.jpg') }}"/>
                        </a>
                        <a class="col-sm-3" href="{{ asset('images/chalets/gallery/img-g-5.jpg') }}">
                            <img src="{{ asset('images/chalets/gallery/thumb/thumb-5.jpg') }}"/>
                        </a>
                        <a class="col-sm-3" href="{{ asset('images/chalets/gallery/6.jpg') }}">
                            <img src="{{ asset('images/chalets/gallery/thumb/thumb-6.jpg') }}"/>
                        </a>
                        <a class="col-sm-3" href="{{ asset('images/chalets/gallery/img-g-7.jpg') }}">
                            <img src="{{ asset('images/chalets/gallery/thumb/thumb-7.jpg') }}"/>
                        </a>
                        <a class="col-sm-3" href="{{ asset('images/chalets/gallery/img-g-8.jpg') }}">
                            <img src="{{ asset('images/chalets/gallery/thumb/thumb-8.jpg') }}"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endpush
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@1.6.12/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />
    <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/chalets-styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
    <style>
        .about-chalet {
            list-style-type: none;
            padding: 0;
        }

        .about-chalet li:before {
            content: '\f00c';
            font-family: FontAwesome;
            font-size: 18px;
            color: #74cc6c;
            padding-right: 10px;
        }
    </style>
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@1.6.12/dist/js/lightgallery-all.min.js"></script>
    <script src="{{ asset('js/gallery.js') }}"></script>
@endpush
