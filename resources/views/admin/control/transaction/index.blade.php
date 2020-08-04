@extends('layouts.admin.main')

@section('activeTransaction', 'active')
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
                                <i class="ti-receipt"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $transactions->total() }}</span></div>
                                    <div class="stat-heading">
                                        {{ $transactions->total() > 1 ? 'Transações'  : 'Transação'}}
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
                        <strong class="card-title">Lista de todas as transações</strong>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-6 offset-3">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        Ferramenta de busca
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('search.transaction') }}" class="form" method="GET">
                                            <input type="text" name="search" class="form-control" value="{{ request()->get('search') ?? '' }}" placeholder="Digite sua busca">
                                            <small class="text-muted mb-3">Realize a busca pelo nome</small>
                                            <div class="float-right mt-2">
                                                <button class="btn btn-outline-primary">
                                                    <i class="ti-search"></i> Pesquisar
                                                </button>
                                            </div>
                                        </form>
                                        <hr class="mt-4">
                                        <a href="{{ route('transactions.index', ['status' => 3]) }}" class="btn btn-outline-success">Pagos</a>
                                        <a href="{{ route('transactions.index', ['status' => 1]) }}" class="btn btn-outline-primary">Aguardando pagamento</a>
                                        <a href="{{ route('transactions.index', ['status' => 7]) }}" class="btn btn-outline-danger">Cancelada</a>
                                        <a href="{{ route('transactions.index') }}" class="btn btn-outline-danger float-right"><i class="ti-trash"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Código de referência</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Produto</th>
                                <th scope="col">Status</th>
                                <th scope="col">Realizado em</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->reference }}</td>
                                    <td>{{ $transaction->name }}</td>
                                    <td>{{ $transaction->product_desc }}</td>
                                    <td>{!! $transaction->status_formatted !!}</td>
                                    <td>{{ $transaction->created_at_formatted }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" class="dropdown-toggle btn btn-primary">
                                                Ações
                                            </button>
                                            <div tabindex="-1" aria-hidden="true" role="menu" class="dropdown-menu"
                                                 x-placement="bottom-start"
                                                 style="position: absolute; will-change: transform; top: 0; left: 0; transform: translate3d(0, 38px, 0px);">
                                                <a href="{{route('transactions.show', $transaction->getKey()) }}"
                                                   tabindex="0" class="dropdown-item text-success"> <i
                                                        class="ti-eye"></i> Ver</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>

                        {{ $transactions->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
