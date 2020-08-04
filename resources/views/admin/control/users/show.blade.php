@extends('layouts.admin.main')

@section('activeContract', 'active')
@section('content')
    @include('components.notifications')

    <div class="animated fadeIn">
        <form action="{{ route('users.update', $user->getKey()) }}" class="form mt-4" method="post">
            <div class="row">
                @csrf
                @method('PUT')
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">{{ $user->name }}</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nome completo*</label>
                                <input type="text" name="name" id="name" class="form-control"
                                       placeholder="Ex: Danilo Benício Drumond" value="{{ $user->name }}" required>
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail*</label>
                                <input type="email" name="email" id="email" class="form-control"
                                       placeholder="Ex: exemplo@gmail.com" value="{{ $user->email }}" required>
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="profile">Categoria*</label>
                                <select name="profile" id="profile" class="form-control">
                                    <optgroup label="Categoria selecionada">
                                        <option value="{{ $user->profile }}">{{ $user->profile_formatted }}</option>
                                    </optgroup>
                                    <optgroup label="Outras categorias">
                                        <option value="0">Administrador</option>
                                        <option value="1">Monitor</option>
                                    </optgroup>
                                </select>
                                @error('profile')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" name="password" id="password" class="form-control">
                                @error('password')
                                <b class="text-danger">{{ $message }}</b>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirmar senha</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                       class="form-control">
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
    <script src="{{ asset('assets/js/validation.pt-br.js') }}"></script>
    <script>
        $("#create-form").validate({
            errorClass: "text-danger"
        });
    </script>
@endsection
