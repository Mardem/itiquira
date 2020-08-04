@extends('layouts.external-v2.main')
@section('content')
    <section class="breadcrumb-outer"
             style="background-image: url({{ asset('images/background-payment.jpeg') }}); background-position: top">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Camping</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Camping</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <section class="amenities">
        <div class="container">
            <div class="amenities-content">
                <div class="section-title">
                    <h2>Áreas  <span>disponíveis</span></h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5>Entrada: <b>{{ $start->format('d/m/Y') }}</b></h5>
                            </div>
                            <div class="col-sm-6 text-right">
                                <h5>Saída: <b>{{ $end->format('d/m/Y') }}</b></h5>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Quantidade</th>
                                <th>Valor individual</th>
                                <th>Valor parcial</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row">Adulto</td>
                                <td>
                                    <div class="btn-group">
                                        <label class="btn btn-primary" style="padding: 6px 12px;border: none">
                                            {{ request()->get('adults') }}
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    R$ {{ number_format(setting('adult'), 2, ',', '.') }}
                                </td>
                                <td>
                                    R$ {{ number_format(setting('adult') * request()->get('adults'), 2, ',', '.') }}
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Crianças</td>
                                <td>
                                    <div class="btn-group">
                                        <label class="btn btn-primary" style="padding: 6px 12px;border: none">
                                            {{ request()->get('childrens') }}
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    R$ {{ number_format(setting('children'), 2, ',', '.') }}
                                </td>
                                <td>
                                    R$ {{ number_format(setting('adult') * request()->get('childrens'), 2, ',', '.') }}
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <a href="{{ route('checkout.index', [
                                        'itemId' => rand(0, 1000),
                                        'itemDescription' => 'Reserva de camping para o dia ' . request()->get('check_in') . ' e saída ' . request()->get('check_out'),
                                        'itemAmount' => $total
                                        ]) }}"
                           class="btn btn-success btn-sm" style="background:#5cb85b;">Realizar pagamento</a>
                        <h4 style="float: right;">Total: R$ {{ number_format($total, 2, ',', '.') }}</h4>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

