<section id="events" style="margin-bottom: 50px">
    <div class="container pad80">
        <div class="col-md-12">
            <h2 class="section-title">venha se divertir</h2>
        </div>

        <div class="col-md-4 pad80" style="padding-left: 10px;padding-right: 10px">
            <h2 style="text-transform: none;font-size: 30px;">Selecione a data para comprar seu ingresso</h2>
            <p class="lead-custom" style="font-size: 17px;">Os preços são definidos de acordo com a data selecionada e a temporada.</p>
            <br>
            <h5>Nossas atrações</h5>
            <br>
            <ul class="list-hotpark">
                <li><i class="fa fa-check font-icon"></i>
                    <a href="https://www.itiquira.com.br/park-das-aguas">Park das águas</a>
                    <p>Nosso parque oferece diversas atrações aquáticas para todas as idades, piscinas com chafariz, piscinas adulto, piscinas de água corrente, toboáguas, mega-rampas, mini-rampa infantil, balde maluco. </p>
                </li>
                <li><i class="fa fa-check font-icon"></i> <a href="https://www.itiquira.com.br/chale">Chalés</a>
                    <p>
                        Os Chalés estão em um local privilegiado no Itiquira Park, onde a natureza dá um show a parte. Os Chalés são equipados com ar condicionado, TV e frigobar. Sua área de lazer conta com piscinas, sauna, parquinho infantil, mini tobo-água, rio exclusivo com acesso e local apropriado para banho.
                    </p>
                </li>
                <li><i class="fa fa-check font-icon"></i>
                    <a href="https://www.itiquira.com.br/camping">Camping</a>
                    <p>
                        Nossa área de camping está em um local reservado, destinado a tranquilidade das sombras de nossas árvores, o camping oferece estrutura de portaria com segurança 24 horas, estacionamento exclusivo
                    </p>
                </li>
                <li><i class="fa fa-check font-icon"></i>
                    <a href="https://www.itiquira.com.br/hosp-alimentacao">Área de alimentação</a>
                </li>

            </ul>
        </div>

        <div class="col-md-8 pad80">
            <div class="card text-left">
                <div class="card-body" style="background: #fff;padding: 10px;">
                    <div id="calendar"></div>
                </div>
                <div class="card-footer" style="background: #fff">
                    <div class="row legendas" style="margin: 0;padding: 5px 22px;">
                        <div class="col-sm-4"><span class="legend leg-baixa">Baixa temporada</span></div>
                        <div class="col-sm-4"><span class="legend leg-media">Média temporada</span></div>
                        <div class="col-sm-4"><span class="legend leg-alta">Alta temporada</span></div>
                        <div class="col-sm-4"><span class="legend leg-manu">Em manutenção</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@push('scripts')
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('plugins/fullcalendar/packages/core/main.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/packages/daygrid/main.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/packages/timegrid/main.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/packages/list/main.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/packages/interaction/main.js') }}"></script>
    <script src="{{ asset('calendar/ingressos.js') }}"></script>
    <script>
        startCalendar('{{ route('api.get-day') }}');
    </script>
@endpush

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"/>
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/packages/core/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/packages/daygrid/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/packages/timegrid/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/packages/daygrid/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.13.0/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .fc-past {
            background: #f5f1ee;
        }
        .fc-bgevent {
            opacity: 1;
        }
        .fc-button-primary {
            background: #f6f8f8;
            color: #009bdd;
            border-radius: 54%;
        }
        .disabled {
            background: #f3f3f3 !important;
        }
    </style>
@endpush
