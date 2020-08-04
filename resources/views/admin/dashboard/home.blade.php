@extends('layouts.admin.main')

@section('activeDash', 'active')
@section('content')
    <div class="animated fadeIn">
    @can('admin')
        <!-- Widgets  -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <i class="ti-user"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">{{ $users }}</span></div>
                                        <div class="stat-heading">Usuários</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-2">
                                    <i class="fa fa-flag"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">{{ $teams }}</span></div>
                                        <div class="stat-heading">Equipes</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-3">
                                    <i class="ti-archive"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">{{ $contracts }}</span></div>
                                        <div class="stat-heading">Contratos</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-4">
                                    <i class="pe-7s-users"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">{{ $clients }}</span></div>
                                        <div class="stat-heading">Clientes</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Widgets -->
        @endcan

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body p-5 text-center">
                        <h3>
                            Olá <b>{{ Auth::user()->name }}</b>, seja bem vindo ao {{ env('APP_NAME') }}
                        </h3>
                        <p>
                            Comece selecionando alguma ferramenta
                        </p>

                        <div class="row mt-4">
                            <div class="col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-five">
                                            <div class="stat-icon dib flat-color-2">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <div class="stat-content">
                                                <div class="text-left dib">
                                                    <div class="stat-text">Dias de temporada</div>
                                                    <div class="stat-heading">
                                                        <a href="{{ route('days.index') }}"
                                                           class="btn btn-outline-success btn-sm btn-block">Ir</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-five">
                                            <div class="stat-icon dib flat-color-3">
                                                <i class="ti-archive"></i>
                                            </div>
                                            <div class="stat-content">
                                                <div class="text-left dib">
                                                    <div class="stat-text">Planos</div>
                                                    <div class="stat-heading">
                                                        <a href="{{ route('plans.index') }}"
                                                           class="btn btn-outline-primary btn-sm btn-block">Ir</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!-- /.card -->
            </div>
        </div>

    </div>
@endsection
@section('styles')
    <style>
        html {
            background: #eff0f5 !important;
        }
    </style>
@endsection
