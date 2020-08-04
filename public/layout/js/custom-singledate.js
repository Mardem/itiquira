$('#check-in-date').dateRangePicker({
    autoClose: true,
    singleDate: true,
    showShortcuts: false,
    singleMonth: true,
    showTopbar: false,
    extraClass: 'reserved-form',
    customArrowPrevSymbol: '<span class="fa fa-angle-left"></span>',
    customArrowNextSymbol: '<span class="fa fa-angle-right"></span>',
});

$('#check-out-date').dateRangePicker({
    autoClose: true,
    singleDate: true,
    showShortcuts: false,
    singleMonth: true,
    showTopbar: false,
    extraClass: 'reserved-form',
    customArrowPrevSymbol: '<span class="fa fa-angle-left"></span>',
    customArrowNextSymbol: '<span class="fa fa-angle-right"></span>',
});

$('#check').on('click', () => {
    const checkIn = $('#check-in-date');
    const checkOut = $('#check-out-date');
    const quantityAdults = $('#quantity-adults');
    const quantityChildren9 = $('#quantity-children9');
    const quantityChildren10 = $('#quantity-children10');

    if (checkIn.val() != 'Check In' && checkOut.val() != 'Check Out' && quantityAdults.val() != '' ) {
        window.location.href = `resultados-chale?check_in=${checkIn.val()}&check_out=${checkOut.val()}&adults=${quantityAdults.val()}&childrens_9=${quantityChildren9.val()}&childrens_10=${quantityChildren10.val()}`
    } else {
        alert('Preencha todos os campos');
    }
});
