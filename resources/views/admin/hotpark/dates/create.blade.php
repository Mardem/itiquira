@extends('layouts.admin.main')

@section('activeContract', 'active')
@section('content')
    @include('components.notifications')

    <div class="animated fadeIn">
        <form action="{{ route('days.store') }}" class="form mt-4" method="post">
            <div class="row">
                @csrf
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Nova data de temporada</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="date">Data</label>
                                <input type="date" name="day" id="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="type">Tipo de temporada</label>
                                <select name="type" id="type" class="form-control" required>
                                    <option value="0">Baixa temporada</option>
                                    <option value="1">Média temporada</option>
                                    <option value="2">Alta temporada</option>
                                </select>
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
