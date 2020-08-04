@extends('layouts.admin.main')

@section('activeHotpark', 'active')
@section('content')

    <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Nova data de temporada</strong>
                        </div>
                        <div class="card-body">
                            <p>
                                | <i class="fa fa-circle leg-baixa"></i> Baixa temporada |
                                <i class="fa fa-circle leg-media"></i> Média temporada |
                                <i class="fa fa-circle leg-alta"></i> Média temporada |
                                <i class="fa fa-circle leg-manu"></i> Em manutenção |
                            </p>
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
@section("styles")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"/>
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/packages/core/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/packages/daygrid/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/packages/timegrid/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/packages/daygrid/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.13.0/dist/sweetalert2.min.css">
    <style>
        .leg-baixa {
            color: #B0C800
        }
        .fc-bgevent {
            opacity: 1;
        }
        .leg-media {
            color: #009bdd
        }
        .leg-alta {
            color: #ec8600
        }
        .leg-manu {
            color: #82f2fe
        }
    </style>
@endsection
@section("scripts")
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

    <script src="{{ asset('plugins/fullcalendar/packages/core/main.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/packages/daygrid/main.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/packages/timegrid/main.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/packages/list/main.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/packages/interaction/main.js') }}"></script>

    <script src="{{ asset('admin/hotpark/calendar.js') }}"></script>
@endsection
