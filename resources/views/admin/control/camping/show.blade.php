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
                                    <div class="stat-text mt-3">
                                        Transação {{ $transaction->reference }}
                                        <br>
                                        {!! $transaction->status_formatted !!}
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
                <div class="col-md-5 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Dados pessoais</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nome do cliente</label>
                                <p>
                                    {{ $transaction->name }}
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="name">Email do cliente</label>
                                <p>
                                    {{ $transaction->email }}
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="name">Telefone do cliente</label>
                                <p>
                                    ({{ $transaction->areaCode }}) {{ $transaction->phone }}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Informações da compra</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Código</label>
                                <p>
                                    {{ $transaction->code }}
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="name">Descrição do produto</label>
                                <p>
                                    {{ $transaction->product_desc }}
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="name">Qntd. de parcelas</label>
                                <p>
                                    {{ $transaction->installmentCount }}
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="name">Valor total do produto</label>
                                <p>
                                    R$ {{ number_format($transaction->totalAmount, 2, ',', '.') }}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        @if($transaction->day_user_product != null)
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Produtos selecionados na compra do Day User</h4>
                            @php
                                $decoded = json_decode($transaction->day_user_product, true);
                            @endphp
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Valor</th>
                                    <th>Quantidade</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($decoded as $item)
                                    <tr>
                                        <td scope="row">{{ $item['name'] }}</td>
                                        <td>R$ {{ number_format($item['price'], 2, ',', '.') }}</td>
                                        <td>{{ $item['count'] }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="{{ asset('admin/plugins/jquery.priceformat.min.js') }}"></script>
    <script src="{{ asset('assets/js/validation.pt-br.js') }}"></script>
    <script>
        $("#create-form").validate({
            errorClass: "text-danger"
        });
        $('.format').priceformat({
            defaultValue: 0,
            decimalSeparator: '.',
            thousandsSeparator: ','
        });
    </script>
@endsection
