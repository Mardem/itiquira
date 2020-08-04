@extends('layouts.external.plans.main')
@section('content')
    @include('components.notifications-stack')
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="https://www.itiquira.com.br/images/logo.png" alt="" width="250">
            <h2>
                Contratação de título
                <br> {{ $plan->plan }}
            </h2>
            <p class="lead">
                Preencha os campos com os dados dos dependentes
            </p>
            <span class="badge badge-info">Dependentes restantes: {{ $restant }}</span>
            @include('components.errors')
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Dependentes</span>
                    <span class="badge badge-secondary badge-pill">{{ $plan->dependents()->count() }}</span>
                </h4>
                <ul class="list-group mb-3">
                    @foreach($plan->dependents as $dependent)
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">{{ $dependent->name }} &nbsp;
                                    <a href="{{ route('title.removeDependent', $dependent->id) }}"
                                       style="text-decoration: none" class="text-danger">
                                        <i class="lni-trash"></i>
                                    </a>
                                </h6>
                                <small class="text-muted">CPF: {{ $dependent->cpf_decrypted }}</small>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-8 order-md-1">
                <h4 class="mb-3"></h4>
                @if($limit != true)
                    <form class="needs-validation" method="post" action="{{ route('title.storeDependent') }}"
                          novalidate>
                        @csrf
                        <input type="hidden" name="plan_titles_id" value="{{ $plan->id }}">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="firstName">Nome completo</label>
                                <input type="text" name="name" class="form-control" id="firstName" placeholder=""
                                       value="{{ old('name') }}"
                                       required>
                                <div class="invalid-feedback">
                                    Digite seu nome completo
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="cpf">CPF</label>
                                <input type="text" name="cpf" class="form-control" id="cpf" data-mask="000.000.000-00"
                                       value="{{ old('cpf') }}" required>
                                <div class="invalid-feedback">
                                    Preencha o campo de CPF
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Adicionar dependente</button>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{
                                route('checkout.index', [
                                        'itemId' => $plan->id,
                                        'itemDescription' => 'Adesão de título - ' . $plan->plan,
                                        'itemAmount' => $amount
                                        ])
                                }}" class="btn btn-primary btn-lg btn-block text-white" type="">Finalizar pagamento</a>
                            </div>
                        </div>
                    </form>
                @else
                    <div class="card text-white bg-danger">
                        <div class="card-body">
                            <h4 class="card-title">Limite atingido</h4>
                            <p class="card-text">
                                O limite de dependentes foi atingido finalize a compra.
                            </p>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block mt-2" type="submit">Finalizar pagamento</button>
                @endif
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/iziToast.min.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('js/plugins/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('assets/js/iziToast.min.js') }}"></script>
@endpush
