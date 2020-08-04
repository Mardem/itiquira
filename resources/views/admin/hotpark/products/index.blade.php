@extends('layouts.admin.main')

@section('activeHotpark', 'active')
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
                                <i class="ti-archive"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $products->total() }}</span></div>
                                    <div class="stat-heading">
                                        {{ $products->total() > 1 ? 'Produtos'  : 'Produto'}}
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
                        <strong class="card-title">Lista de todas os planos</strong>
                        <span class="float-right">
                            <a href="{{ route('products.create') }}" class="btn btn-outline-primary btn-sm">
                                Novo produto
                            </a>
                        </span>
                    </div>
                    <div class="card-body text-center">

                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Etapa</th>
                                <th scope="col">Valor normal</th>
                                <th scope="col">Valor baixa temporada</th>
                                <th scope="col">Valor média temporada</th>
                                <th scope="col">Valor alta temporada</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->step_formatted }}</td>
                                    <td><span class="badge badge-secondary">R$ {{ number_format($product->price, 2, ',', '.') }}</span></td>
                                    <td><span class="badge badge-primary">R$ {{ number_format($product->value_low_percent, 2, ',', '.') }}</span></td>
                                    <td><span class="badge badge-warning">R$ {{ number_format($product->value_medium_percent, 2, ',', '.') }}</span></td>
                                    <td><span class="badge badge-danger">R$ {{ number_format($product->value_high_percent, 2, ',', '.') }}</span></td>
                                    <td>
                                        @component('components.drop-acoes', ['ver' => route('products.show', $product->getKey()), 'apagar' => route('products.destroy', $product->getKey())])
                                        @endcomponent
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>

                        {{ $products->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
