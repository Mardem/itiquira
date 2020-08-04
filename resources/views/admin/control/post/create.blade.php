@extends('layouts.admin.main')

@section('activeBlog', 'active')
@section('content')
    @include('components.notifications')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalCategory">
        Nova categoria
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modalCategory" tabindex="-1" role="dialog" aria-labelledby="modalCategory" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nova categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Nome da categoria</label>
                            <input type="text"  name="name" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="animated fadeIn">
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" class="form mt-4">
            @csrf
            <div class="card">
                <div class="card-header">
                    Nova publicação
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Título da publicação<sup class="text-danger">*</sup></label>
                                <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control" required>
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Categoria da publicação<sup class="text-danger">*</sup></label>
                                <select id="category_id" name="category_id" class="form-control" required>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    {{ $errors->first('category_id') }}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image">Imagem <small>(opcional)</small></label>
                                <input type="file" name="image_path" class="form-control" id="image">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="editor">Conteúdo da publicação<sup class="text-danger">*</sup></label>
                                <textarea name="content" id="editor" required>{{ old('content') }}</textarea>
                                <div class="invalid-feedback">
                                    {{ $errors->first('content') }}
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary float-right">Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>s
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
    <script>
        $('#editor').summernote({
            placeholder: 'Escreva sua publicação aqui',
            tabsize: 2,
            height: 100
        });
    </script>
@endsection
