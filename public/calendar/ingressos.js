function startCalendar(url) {
    document.addEventListener('DOMContentLoaded', function () {
        let calendarEl = document.getElementById('calendar');

        let calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['interaction', 'dayGrid'],
            events: url,
            header: {
                right: 'prev,next',
                center: 'title',
                left: null
            },
            selectable: true,
            locale: 'pt-br',
            navLinks: false,
            select: (arg) => {
                let uri = window.location.origin + '/eco-park/comprar?';
                let start = 'start=' + arg.startStr;
                let end = 'end=' + arg.endStr;
                let day = 'day=' + arg.startStr;

                let link = uri + start + '&' + end + '&' + day;
                window.location.href = link;
            },
            dayRender: function(date){
                let date1 = new Date(date.date);
                let date2 = new Date();
                if(date1.getTime() < date2.getTime()) {
                    $(date.el).addClass('disabled');
                }
            }
        });
        calendar.render();
    });

}
