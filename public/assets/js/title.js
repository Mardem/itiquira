(function ($) {
    $('#date').mask('00/00/0000');
    let form = $("#signup-form");

    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            senderName : {
                required: true,
            },
            senderCPF : {
                required: true,
                digits: true,
                minlength: 11
            },
            senderEmail : {
                required: true,
                email: true
            },
            senderAreaCode : {
                required: true,
                digits: true,
                minlength: 2,
            },
            senderPhone : {
                required: true,
                digits: true,
                min: 8
            },
            creditCardHolderName : {
                required: true
            },
            creditCardHolderCPF : {
                required: true
            },
            creditCardHolderBirthDate : {
                required: true
            },
            cardNumber : {
                required: true,
                digits: true,
                minlength: 11
            },
            cvv : {
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
            alert('pode ir')
        },
        // onInit : function (event, currentIndex) {
        //     event.append('demo');
        // }
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
})(jQuery);
