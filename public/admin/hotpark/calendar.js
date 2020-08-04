let events = [];

document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    let getDayURL = window.location.origin + '/api/get-day';
    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['interaction', 'dayGrid', 'timeGrid', 'list'],
        header: {
            left: 'prev,next',
            center: 'title',
            right: ''
        },
        navLinks: true, // can click day/week names to navigate views
        selectable: true,
        selectMirror: true,
        locale: 'pt-br',
        select: function (arg) {

            const seasonSelect = Swal.fire({
                title: 'Selecione uma temporada',
                input: 'select',
                cancelButtonText: 'Cancelar',
                inputOptions: {
                    '0': 'Baixa temporada',
                    '1': 'Média temporada',
                    '2': 'Alta temporada',
                    '3': 'Em manutenção',
                },
                inputPlaceholder: 'Temporadas disponíveis',
                showCancelButton: true,
                inputValidator: (value) => {
                    return new Promise((resolve) => {
                        if (value === '') {
                            resolve('Selecione uma temporada antes de continuar')
                        } else {
                            let title = '';
                            if (value == 0) {
                                title = 'Baixa temporada';
                            } else if (value == 1) {
                                title = 'Média temporada'
                            } else if(value == 2) {
                                title = 'Alta temporada'
                            } else {
                                title = 'Em manutenção'
                            }
                            calendar.addEvent({
                                title: title,
                                start: arg.start,
                                end: arg.end,
                                allDay: arg.allDay
                            });

                            let linkSave = window.location.origin + '/api/save-day';
                            $.post(linkSave, {
                                title: title,
                                start: arg.startStr,
                                end: arg.endStr,
                                type: value,
                                allDay: arg.allDay
                            }).done(function (data) {
                                iziToast.show({
                                    title: 'OK',
                                    message: data.message,
                                    theme: 'dark',
                                    backgroundColor: '#15aa60',
                                    color: '#fff',
                                    icon: 'ti-check',
                                    position: 'topCenter'
                                });
                            });
                            resolve();
                        }
                    })
                }
            });
        },
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: getDayURL
    });

    calendar.render();
});
