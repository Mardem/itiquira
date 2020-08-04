œ@extends('layouts.admin.main')

@section('activeContract', 'active')
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
                                <i class="ti-home"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $chalets->total() }}</span></div>
                                    <div class="stat-heading">
                                        {{ $chalets->total() > 1 ? 'Chalés'  : 'Chalé'}}
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
                        <strong class="card-title">Lista de todos os chalés</strong>
                        <span class="float-right">
                            <a href="{{ route('chalets.create') }}" class="btn btn-outline-primary btn-sm">
                                Novo chalé
                            </a>
                        </span>
                    </div>
                    <div class="card-body text-center">

                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Max. Adulto</th>
                                <th scope="col">Max. Criança</th>
                                <th scope="col">Total de imagens</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($chalets as $chalet)
                                <tr>
                                    <td>{{ $chalet->name }}</td>
                                    <td>{{ $chalet->limit_adult }}</td>
                                    <td>{{ $chalet->limit_children }}</td>
                                    <td>{{ $chalet->images()->count() }}</td>
                                    <td>
                                        @component('components.drop-acoes', ['ver' => route('chalets.show', $chalet->getKey()), 'apagar' => route('chalets.destroy', $chalet->getKey())])
                                        @endcomponent
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>

                        {{ $chalets->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
