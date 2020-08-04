$(document).ready(function () {

    // Máscaras
    Inputmask({"mask": "99999-999"}).mask('#zipcode');
    Inputmask({"mask": "999.999.999-99"}).mask('#cpf_cnpj');
    Inputmask({"mask": "(99) 9 9999-9999"}).mask('#cellphone');

        // Configuração do switcher
    $("#switcher").mSwitch({
        onTurnOn: function () {
            var input = document.getElementById('cpf_cnpj');
            if (input.inputmask)
                input.inputmask.remove();
        },
        onTurnOff: function () {
            Inputmask({"mask": "999.999.999-99"}).mask('#cpf_cnpj');
        }
    });

    // CEP automático
    $('input[name="zipcode"]').blur(function (e) {
        let cep = $('input[name="zipcode"]').val() || '';

        if (!cep) {
            iziToast.show({
                title: 'Ops',
                message: "Não foi possivel carregar o CEP;",
                theme: 'dark',
                backgroundColor: '#f72a07',
                color: '#fff',
                icon: 'ti-close',
                position: 'bottomCenter',
            });
            return;
        }

        let url = 'http://viacep.com.br/ws/' + cep + '/json';
        $.getJSON(url, function (data) {
            if ("error" in data) {
                return;
            }

            iziToast.show({
                title: 'OK',
                message: "Endereço carregado!",
                theme: 'dark',
                backgroundColor: '#15aa60',
                color: '#fff',
                icon: 'ti-check',
                position: 'topCenter'
            });

            let address = $('input[name="address"]');
            address.val(data.logradouro);
            address.addClass('text-success');

            let neighborhood = $('input[name="neighborhood"]');
            neighborhood.val(data.bairro);
            neighborhood.addClass('text-success');

            let city = $('input[name="city"]');
            city.val(data.localidade);
            city.addClass('text-success');

            let uf = $('input[name="uf"]');
            uf.val(data.uf);
            uf.addClass('text-success');

            let complement = $('input[name="complement"]');
            complement.val(data.complemento);
            complement.addClass('text-success');
        });
    });
});