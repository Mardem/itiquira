@extends('layouts.external-v2.main')
@section('content')
    <section class="breadcrumb-outer"
             style="background-image: url({{ asset('images/background-payment.jpeg') }}); background-position: top">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Chalés encontrados</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chalés</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <section class="amenities">
        <div class="container">
            <div class="amenities-content">
                <div class="section-title">
                    <h2>Chalés <span>disponíveis</span></h2>

                </div>
                <div class="row row-wrap">

                    @forelse($chalets as $chalet)
                        @php
                            $res =
                            calculateChildrenAdult(request()->get('adults'), $chalet->val_adult) +
                            calculateChildrenAdult(request()->get('childrens_9'), $chalet->val_child_9) +
                            calculateChildrenAdult(request()->get('childrens_10'), $chalet->val_child_10);

                            $total = $res * $days;
                        @endphp

                        @for($i = 1; $i < 2; $i++)

                            <div class="col-md-4">
                                <div class="room-item">
                                    <div class="room-image">
                                        <img src="{{ asset($chalet->images->first()->thumb_path) }}" alt="image">
                                    </div>
                                    <div class="room-content">
                                        <div class="room-title">
                                            <h4>{{ $chalet->name }}</h4>
                                            <p><i class="fa fa-tag"></i> R$
                                                {{ number_format($total, 2, ',', '.') }} &mdash; <span>para o período selecionado</span>
                                            </p>
                                            <div class="deal-rating">
                                                @for($i = 0; $i < rand(4, 5); $i++)
                                                    <span class="fa fa-star"></span>
                                                @endfor
                                            </div>
                                        </div>
                                        <div class="room-services mar-bottom-15">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <i class="fa fa-bed"></i>
                                                    {{ $chalet->rooms > 1 ? $chalet->rooms . ' quartos' : $chalet->rooms . ' quarto' }}
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <span class="text-success">
                                                        <i class="fa fa-check" aria-hidden="true"></i> Disponível
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <p>{{ $chalet->description }}</p>
                                        <div class="room-btns">
                                            <a href="#" class="btn btn-black mar-right-10" tabindex="0">Detalhes</a>
                                            <a href="{{ route('checkout.index', [
                                        'itemId' => $chalet->id,
                                        'itemDescription' => $chalet->name,
                                        'itemAmount' => $total
                                        ]) }}" class="btn btn-orange" tabindex="0">Agendar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor

                    @empty
                        <div class="col-sm-12">
                            <h1 style="text-align: center;color: #ee465e;">Nenhum chalé encontrado para essa
                                busca...</h1>
                            <h3 style="text-align: center"><a href="{{ route('chalets.search') }}">Tentar
                                    novamente</a></h3>
                        </div>

                    @endforelse

                </div>
            </div>
        </div>
    </section>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/chalets-styles.css') }}">
@endpush

