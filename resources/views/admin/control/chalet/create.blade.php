@extends('layouts.admin.main')

@section('activeContract', 'active')
@section('content')
    @include('components.notifications')

    <div class="animated fadeIn">
        <form action="{{ route('chalets.store') }}" class="form mt-4" method="post">
            <div class="row">
                @csrf
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Novo chalé</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nome do chalé*</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"
                                       required>
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="rooms">Quantidade de quartos*</label>
                                <input type="number" min="1" name="rooms" id="rooms" class="form-control"
                                       value="{{ old('rooms') ?? '1' }}" required>
                                @error('rooms')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Descrição*</label>
                                <textarea name="description" id="description" rows="4" class="form-control"
                                          required>{{ old('description') }}</textarea>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="val_adult">Valor por adulto*</label>
                                <input type="text" class="form-control format" name="val_adult" id="val_adult"
                                       value="{{ old('val_adult') }}" required>
                                @error('val_adult')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="val_child_10">Valor por criança a partir de 6 a 9 anos*</label>
                                <input type="text" class="form-control format" name="val_child_10" id="val_child_10"
                                       value="{{ old('val_child_10') }}" required>
                                @error('val_child_10')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="val_child_9">Valor por criança de 0 a 5 anos*</label>
                                <input type="text" class="form-control format" name="val_child_9" id="val_child_9"
                                       value="{{ old('val_child_9') }}" required>
                                @error('val_child_9')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="limit_adult">Limite de adultos*</label>
                                <input type="number" min="0" name="limit_adult" value="{{ old('limit_adult') ?? '1' }}"
                                       class="form-control" id="limit_adult" required>
                                @error('limit_adult')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="limit_children">Limite de crianças*</label>
                                <input type="number" min="0" name="limit_children"
                                       value="{{ old('limit_children') ?? '1' }}" class="form-control"
                                       id="limit_children" req>
                                @error('limit_children')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-10 offset-1">
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
