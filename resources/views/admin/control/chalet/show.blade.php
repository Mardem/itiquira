@extends('layouts.admin.main')

@section('activeContract', 'active')
@section('content')
    @include('components.notifications')

    <div class="animated fadeIn">

        <form action="{{ route('chalets.update', $chalet->getKey()) }}" class="form mt-4" method="post">
            <div class="row">
                @csrf
                @method('PUT')
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Edição de chalé - {{ $chalet->name }}</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nome do chalé*</label>
                                <input type="text" name="name" id="name" class="form-control"
                                       value="{{ $chalet->name }}" required>
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="rooms">Quantidade de quartos*</label>
                                <input type="number" min="1" name="rooms" id="rooms" class="form-control"
                                       value="{{ $chalet->rooms ?? '1' }}" required>
                                @error('rooms')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Descrição*</label>
                                <textarea name="description" id="description" rows="4"
                                          class="form-control">{{ $chalet->description }}</textarea>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="val_adult">Valor por adulto*</label>
                                <input type="number" class="form-control" name="val_adult" id="val_adult"
                                       data-default-value="{{ $chalet->val_adult }}" value="{{ $chalet->val_adult }}"
                                       step="any">
                                @error('val_adult')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="val_child_10">Valor por criança a partir de 10 anos*</label>
                                <input type="number" class="form-control" name="val_child_10" id="val_child_10"
                                       value="{{ $chalet->val_child_10 }}" step="any">
                                @error('val_child_10')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="val_child_9">Valor por criança de 6 a 9 anos*</label>
                                <input type="number" class="form-control" name="val_child_9" id="val_child_9"
                                       value="{{ $chalet->val_child_9 }}" step="any">
                                @error('val_child_9')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="limit_adult">Limite de adultos*</label>
                                <input type="number" min="0" name="limit_adult"
                                       value="{{ $chalet->limit_adult ?? '1' }}" class="form-control" id="limit_adult">
                                @error('limit_adult')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="limit_children">Limite de crianças*</label>
                                <input type="number" min="0" name="limit_children"
                                       value="{{ $chalet->limit_children ?? '1' }}" class="form-control"
                                       id="limit_children">
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

        <div class="row">
            <div class="col-sm-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        Imagens do chalé
                    </div>
                    <div class="card-body">
                        <div class="row">

                            @if($chalet->images()->count() >= 3)
                                <div class="col-sm-4 offset-4">
                                    <div class="card">
                                        <div class="card-header bg-danger text-white">
                                            Limite atingido
                                        </div>
                                        <div class="card-body">
                                            <div class="row ml-1 mr-1">
                                                <p class="text-center text-danger">Você atingiu o limite máximo de imagens, apague uma imagem
                                                    para adicionar uma nova.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-sm-4 offset-4">
                                    <div class="card">
                                        <form action="{{ route('chalet.upload') }}" method="POST"
                                              enctype="multipart/form-data" class="form">
                                            <input type="hidden" name="chalet_id" value="{{ $chalet->id }}">
                                            <div class="card-header bg-primary text-white">
                                                Upload de imagem para o chalé
                                            </div>
                                            <div class="card-body">
                                                <div class="row ml-1 mr-1">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="image_upload">Selecione a imagem</label>
                                                        <input type="file" class="form-control" name="image">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary bg-primary text-white">
                                                    Enviar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endif

                        </div>

                        <div class="row">

                            @forelse($chalet->images as $image)
                                <div class="col-sm-4">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset($image->thumb_path) }}" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="{{ route('chalet.deleteImage', $image->getKey()) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Deletar</a>
                                            </h4>
                                            <p class="text-black">
                                                Enviado em: <b>{{ $image->created_at_formatted }}</b>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="col-sm-4 offset-4">
                                    <div class="card">
                                        <div class="card-header bg-success text-white">
                                            Sem imagens
                                        </div>
                                        <div class="card-body">
                                            <div class="row ml-1 mr-1">
                                                <p class="text-center text-success">
                                                    Você ainda não adicionou nenhuma imagem para o chale {{ $chalet->name }}
                                                    comece adicionando uma agora
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
