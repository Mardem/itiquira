@extends('layouts.admin.main')

@section('activeTitle', 'active')
@section('content')
    @include('components.notifications')

    <div class="animated fadeIn">
        <div class="row">
            @csrf
            @method('PUT')
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header bg-primary">
                        <strong class="card-title text-white">Adesão de plano - {{ $plan->plan }}</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nome completo:</label>
                            <p class="lead">{{ $plan->name }}</p>
                        </div>
                        <div class="form-group">
                            <label for="email">CPF:</label>
                            <p class="lead">{{ $plan->cpf_decrypted }}</p>
                        </div>
                        <div class="form-group">
                            <label for="password">Plano selecionado:</label>
                            <p class="lead">{{ $plan->plan }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="offset-sm-4 col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="ti ti-write"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $plan->dependents()->count() }}</span></div>
                                    <div class="stat-heading">
                                        {{ $plan->dependents()->count() > 1 ? 'Dependentes'  : 'Dependente'}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 offset-1">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        Dependentes do plano
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <div id="accordionDependent" role="tablist" aria-multiselectable="true">
                                    <div class="card">
                                        <div class="card-header bg-secondary" role="tab" id="section1HeaderId">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" class="text-white" data-parent="#accordionDependent" href="#sectionDependent"
                                                   aria-expanded="true" aria-controls="sectionDependent">
                                                    Novo dependente
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="sectionDependent" class="collapse in" role="tabpanel"
                                             aria-labelledby="section1HeaderId">
                                            <div class="card-body">
                                                <form action="{{ route('title.storeDependent') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="plan_titles_id" value="{{ $plan->id }}">
                                                    <div class="form-group">
                                                        <label for="name">Nome do dependente*</label>
                                                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cpf">CPF*</label>
                                                        <input type="text" name="cpf" id="cpf" class="form-control" data-mask="000.000.000-00" value="{{ old('cpf') }}" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <button class="btn btn-primary">Salvar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">Nome</th>
                                <th class="text-center">CPF</th>
                                <th class="text-center">Dia registrado</th>
                                <th class="text-center">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($dependents as $dependent)
                                    <tr>
                                        <td class="text-center">{{ $dependent->name }}</td>
                                        <td class="text-center">{{ $dependent->cpf_decrypted }}</td>
                                        <td class="text-center">{{ $dependent->created_at_formatted }}</td>
                                        <td class="text-center">
                                            <form action="{{ route('titles.deleteDependent', $dependent->getKey()) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button tabindex="0" class="text-white bg-danger dropdown-item">
                                                    <i class="ti-trash"></i> Apagar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $dependents->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="{{ asset('js/plugins/jquery.mask.min.js') }}"></script>
@endsection
