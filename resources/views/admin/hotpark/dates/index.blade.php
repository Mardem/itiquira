@extends('layouts.admin.main')

@section('activeHotpark', 'active')
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
                                <i class="ti-calendar"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $days->total() }}</span></div>
                                    <div class="stat-heading">
                                        {{ $days->total() > 1 ? 'Datas'  : 'Data'}}
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
                        <strong class="card-title">Lista de todas as datas</strong>
                        <span class="float-right">
                            <a href="{{ route('days.create') }}" class="btn btn-outline-primary btn-sm">
                                Nova data
                            </a>
                        </span>
                    </div>
                    <div class="card-body text-center">

                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Dia</th>
                                <th scope="col">Tipo</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($days as $day)
                                <tr>
                                    <td><b class="text-success">{{ $day->start_formatted }}</b> até <b class="text-danger">{{ $day->end_formatted }}</b> </td>
                                    <td>{{ $day->type_formatted }}</td>
                                    <td>
                                        <form action="{{ route('days.destroy', $day->getKey()) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger text-white">
                                                <i class="ti-trash"></i> Apagar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>

                        {{ $days->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
