œ@extends('layouts.admin.main')

@section('activeContract', 'active')
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
                                <i class="ti-pin-alt"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $sports->total() }}</span></div>
                                    <div class="stat-heading">
                                        {{ $sports->total() > 1 ? 'Diária'  : 'Diárias'}}
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
                        <strong class="card-title">Lista de todas as diárias</strong>
                        <span class="float-right">
                            <a href="{{ route('users.create') }}" class="btn btn-outline-primary btn-sm">
                                Nova diária
                            </a>
                        </span>
                    </div>
                    <div class="card-body text-center">

                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Tipo</th>
                                <th scope="col">E-mail</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($sports as $sport)
                                <tr>
                                    <td>{{ $sport->name }}</td>
                                    <td>{{ $sport->email }}</td>
                                    <td>
                                        @component('components.drop-acoes', ['ver' => route('users.show', $sport->getKey()), 'apagar' => route('users.destroy', $sport->getKey())])
                                        @endcomponent
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>

                        {{ $sports->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
