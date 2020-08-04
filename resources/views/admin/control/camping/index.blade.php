@extends('layouts.admin.main')

@section('activeCamping', 'active')
@section('content')
    @include('components.notifications')
    <div class="animated fadeIn">
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
                                        Mudança de valor do camping
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('camping.store') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="adult">Valor por adulto</label>
                                                <input type="number" class="form-control" name="adult" placeholder="Ex:  129.90" value="{{ setting('adult') ?? 0 }}" step="any">
                                            </div>
                                            <div class="form-group">
                                                <label for="children">Valor por criança</label>
                                                <input type="number" class="form-control" name="children" placeholder="Ex:  129.90" value="{{ setting('children') ?? 0 }}" step="any">
                                            </div>

                                            <button class="btn btn-success btn-sm">Salvar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
