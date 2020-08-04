œ@extends('layouts.admin.main')

@section('activeBlog', 'active')
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
                                <i class="fa fa-file"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $posts->total() }}</span></div>
                                    <div class="stat-heading">
                                        {{ $posts->total() > 1 ? 'Publicações'  : 'Publicação'}}
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Lista de publicações</strong>
                        <span class="float-right">
                            <a href="{{ route('posts.create') }}" class="btn btn-outline-primary btn-sm">
                                Nova publicação
                            </a>
                        </span>
                    </div>
                    <div class="card-body text-center">

                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Título</th>
                                <th scope="col">Criado em</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->created_at_formatted }}</td>
                                    <td>
                                        @component('components.drop-acoes', ['ver' => route('posts.edit', $post->getKey()), 'apagar' => route('posts.destroy', $post->getKey())])
                                        @endcomponent
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>

                        {{ $posts->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
