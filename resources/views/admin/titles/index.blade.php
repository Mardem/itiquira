@extends('layouts.admin.main')

@section('activeTitle', 'active')
@section('content')
    @include('components.notifications')
    <div class="animated fadeIn">
        <!-- Widgets  -->
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
                                    <div class="stat-text"><span class="count">{{ $plans->total() }}</span></div>
                                    <div class="stat-heading">
                                        {{ $plans->total() > 1 ? 'Adesões' : 'Adesão'}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Widgets -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Lista de todos adesões</strong>
                    </div>
                    <div class="card-body text-center">

                        <div class="row">
                            <div class="col-sm-6 offset-3">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        Ferramenta de busca
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('search.title') }}" class="form" method="GET">
                                            <input type="text" name="search" class="form-control" value="{{ request()->get('search') ?? '' }}" placeholder="Digite sua busca">
                                            <small class="text-muted mb-3">Realize a busca pelo nome</small>
                                            <div class="float-right mt-2">
                                                <button class="btn btn-outline-primary">
                                                    <i class="ti-search"></i> Pesquisar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Plano selecionado</th>
                                <th scope="col">Total de dependentes</th>
                                <th scope="col">Dependentes restantes</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($plans as $plan)
                                <tr>
                                    <td>{{ $plan->name }}</td>
                                    <td>{{ $plan->plan }}</td>
                                    <td>{{ $plan->dependents()->count() }}</td>
                                    <td>{{ \App\Support\Titles\PlansTitle::restDependent($plan->dependents(), $plan->plan) }}</td>
                                    <td>
                                        @component('components.drop-acoes', ['ver' => route('titles.show', $plan->getKey()), 'apagar' => route('titles.destroy', $plan->getKey())])
                                        @endcomponent
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>

                        {{ $plans->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
