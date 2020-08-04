œ@extends('layouts.admin.main')

@section('activeContract', 'active')
@section('content')
    @include('components.notifications')
    <div class="animated fadeIn">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Cálculo de chalé</strong>
                    </div>
                    <div class="card-body text-center">
                        <h3>Total de dias: {{ $days }}</h3>
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Valor total adulto</th>
                                <th scope="col">Valor total criança - 6 a 9 anos</th>
                                <th scope="col">Valor total criança - 10 anos</th>
                                <th scope="col">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($chalets as $chalet)

                                @php
                                    $res =
                                    calculateChildrenAdult(request()->get('adults'), $chalet->val_adult) +
                                    calculateChildrenAdult(request()->get('childrens_9'), $chalet->val_child_9) +
                                    calculateChildrenAdult(request()->get('childrens_10'), $chalet->val_child_10);

                                    $total = $res * $days;
                                @endphp

                                <tr>
                                    <td>{{ $chalet->name }}</td>
                                    <td>
                                        R$ {{  number_format(calculateChildrenAdult(request()->get('adults'), $chalet->val_adult), 2, ',', '.') }}
                                    </td>
                                    <td>
                                        R$ {{ number_format(calculateChildrenAdult(request()->get('childrens_9'), $chalet->val_child_9), 2, ',', '.') }}
                                    </td>
                                    <td>
                                        R$ {{ number_format(calculateChildrenAdult(request()->get('childrens_10'), $chalet->val_child_10), 2, ',', '.') }}</td>
                                    <td>
                                        R$ {{ number_format($total, 2, ',', '.') }}
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
