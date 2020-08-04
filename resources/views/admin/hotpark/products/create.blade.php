@extends('layouts.admin.main')

@section('activeHotpark', 'active')
@section('content')
    @include('components.notifications')

    <div class="animated fadeIn">
        <form action="{{ route('products.store') }}" class="form mt-4" method="post">
            <div class="row">
                @csrf
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Novo produto </strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nome do produto<small>*</small></label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Ex:  Sunset" required>
                            </div>
                            <div class="form-group">
                                <label for="step">Etapa<small>*</small></label>
                                <select name="step" id="step" class="form-control">
                                    <option value="0">Ingressos</option>
                                    <option value="1">Refeição</option>
                                    <option value="2">Lazeres</option>
                                    <option value="3">Extras</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="available">Quantidade disponível<small>*</small></label>
                                <input type="number" name="available" id="available" class="form-control" value="{{ old('available') }}" placeholder="Ex: 10"required>
                            </div>
                            <div class="form-group">
                                <label for="description">Descrição</label>
                                <textarea name="description" id="description" rows="4" class="form-control">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="rule">Regras</label>
                                <textarea name="rule" id="rule" rows="4" class="form-control">{{ old('rule') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Registro de valores</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="price">Preço<small>*</small></label>
                                <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" placeholder="Ex:  129.90" step="any" required>
                            </div>
                            <div class="form-group">
                                <label for="p_low">Porcentagem para baixa temporada<small>*</small></label>
                                <input type="number" name="p_low" id="p_low" class="form-control" value="{{ old('p_low') }}" placeholder="Ex: 10" required>
                            </div>
                            <div class="form-group">
                                <label for="p_medium">Porcentagem para média temporada<small>*</small></label>
                                <input type="number" name="p_medium" id="p_medium" class="form-control" value="{{ old('p_medium') }}" placeholder="Ex: 15" required>
                            </div>
                            <div class="form-group">
                                <label for="p_high">Porcentagem para alta temporada<small>*</small></label>
                                <input type="number" name="p_high" id="p_high" class="form-control" value="{{ old('p_high') }}" placeholder="Ex: 18" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-success">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="{{ asset('assets/js/validation.pt-br.js') }}"></script>
    <script>
        $("#create-form").validate({
            errorClass: "text-danger"
        });
    </script>
@endsection
