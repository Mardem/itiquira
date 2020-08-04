(function ($) {
    let form = $("#signup-form");

    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            senderName: {
                required: true,
            },
            senderCPF: {
                required: true,
                digits: true,
                minlength: 11
            },
            senderEmail: {
                required: true,
                email: true
            },
            senderAreaCode: {
                required: true,
                digits: true,
                minlength: 2,
            },
            senderPhone: {
                required: true,
                digits: true,
                min: 8
            },
            creditCardHolderName: {
                required: true
            },
            creditCardHolderCPF: {
                required: true
            },
            creditCardHolderBirthDate: {
                required: true
            },
            cardNumber: {
                required: true,
                digits: true,
                minlength: 11
            },
            cvv: {
                required: true,
                digits: true,
                minlength: 2
            },
        },
        onfocusout: function (element) {
            $(element).valid();
        },
        highlight: function (element, errorClass, validClass) {
            $(element.form).find('.actions').addClass('form-error');
            $(element).removeClass('valid');
            $(element).addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element.form).find('.actions').removeClass('form-error');
            $(element).removeClass('error');
            $(element).addClass('valid');
        }
    });

    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        labels: {
            previous: 'Anterior',
            next: 'Próximo',
            finish: 'Finalizar',
            current: ''
        },
        titleTemplate: '<span class="title">#title#</span>',
        onStepChanging: function (event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex) {

            $("a[href='#finish']").on('click',function() {
                $(this).remove();
                $('#message').text('Carregando...');
            });

            // let params = {
            //     cardNumber: $('#cardNumber').val(),
            //     cvv: $('#cvv').val(),
            //     expirationMonth: $('#expirationMonth').val(),
            //     expirationYear: $('#expirationYear').val(),
            //     brand: paymentData.brand
            // }
            // pagSeguro.createCardToken(params).then(function (token) {
            //     let inpHash = $('#senderHash').val();
            //     let quantity = $('#installmentQuantity').val();
            //     let installmentValue = $('#installmentValue').val();
            //     let totalValue = $('#totalValue').val();
            //     let title = getQueryString('itemDescription');
            //     let itemRef = getQueryString('itemId');
            //
            //     let email = $('#senderEmail').val();
            //     let name = $('#senderName').val();
            //     let ddd = $('#senderAreaCode').val();
            //     let phone = $('#senderPhone').val();
            //     let cpf = $('#senderCPF').val();
            //
            //     // Holder Name
            //     let hName = $('#creditCardHolderName').val();
            //     let hCpf = $('#creditCardHolderCPF').val();
            //     let hBirth = $('#creditCardHolderBirthDate').val();
            //
            //     let itemsCart = $('#itemsCart').val();
            //
            //     axios.blog(paymentData.url, {
            //         senderHash: inpHash,
            //         creditCardToken: token,
            //         // Informações do cliente
            //         senderEmail: email,
            //         senderName: name,
            //         senderAreaCode: ddd,
            //         senderPhone: phone,
            //         senderCPF: cpf,
            //
            //         // Informações do cartão
            //         holderName: hName,
            //         holderCPF: hCpf,
            //         holderBirth: hBirth,
            //
            //         // Informações sobre o produto
            //         itemTitle: title,
            //         itemRef: itemRef,
            //
            //         // Parcelas e total
            //         quantityInstallments: quantity,
            //         installmentValue: installmentValue,
            //         totalValue: totalValue,
            //         itemsCart: itemsCart
            //     }).then((res) => {
            //         window.location.href = window.location.origin + '/payment-success?successfully=true'
            //     }).catch((err) => {
            //         console.log(err);
            //     });
            // });
        }
    });

    function getQueryString(item) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(item);
    }

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });

    $('#gender').parent().append('<ul class="list-item" id="newgender" name="gender"></ul>');
    $('#gender option').each(function () {
        $('#newgender').append('<li value="' + $(this).val() + '">' + $(this).text() + '</li>');
    });
    $('#gender').remove();
    $('#newgender').attr('id', 'gender');
    $('#gender li').first().addClass('init');
    $("#gender").on("click", ".init", function () {
        $(this).closest("#gender").children('li:not(.init)').toggle();
    });

    let allOptions = $("#gender").children('li:not(.init)');
    $("#gender").on("click", "li:not(.init)", function () {
        allOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#gender").children('.init').html($(this).html());
        allOptions.toggle();
    });

    $('#country').parent().append('<ul class="list-item" id="newcountry" name="country"></ul>');
    $('#country option').each(function () {
        $('#newcountry').append('<li value="' + $(this).val() + '">' + $(this).text() + '</li>');
    });
    $('#country').remove();
    $('#newcountry').attr('id', 'country');
    $('#country li').first().addClass('init');
    $("#country").on("click", ".init", function () {
        $(this).closest("#country").children('li:not(.init)').toggle();
    });

    let CountryOptions = $("#country").children('li:not(.init)');
    $("#country").on("click", "li:not(.init)", function () {
        CountryOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#country").children('.init').html($(this).html());
        CountryOptions.toggle();
    });

    $('#payment_type').parent().append('<ul  class="list-item" id="newpayment_type" name="payment_type"></ul>');
    $('#payment_type option').each(function () {
        $('#newpayment_type').append('<li value="' + $(this).val() + '">' + $(this).text() + '</li>');
    });
    $('#payment_type').remove();
    $('#newpayment_type').attr('id', 'payment_type');
    $('#payment_type li').first().addClass('init');
    $("#payment_type").on("click", ".init", function () {
        $(this).closest("#payment_type").children('li:not(.init)').toggle();
    });

    let PaymentsOptions = $("#payment_type").children('li:not(.init)');
    $("#payment_type").on("click", "li:not(.init)", function () {
        PaymentsOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#payment_type").children('.init').html($(this).html());
        PaymentsOptions.toggle();
    });

    $.dobPicker({
        daySelector: '#birth_date',
        monthSelector: '#birth_month',
        yearSelector: '#birth_year',
        dayDefault: 'Dia',
        monthDefault: 'Mês',
        yearDefault: 'Ano',
        minimumAge: 0,
        maximumAge: 120
    });

    $.dobPicker({
        daySelector: null,
        monthSelector: '#expirationMonth',
        yearSelector: null,
        dayDefault: 'Dia',
        monthDefault: 'Mês',
        yearDefault: 'Ano',
        minimumAge: 0,
        maximumAge: 100
    });

})(jQuery);
