@extends('layouts.checkout-template.main')

@section('content')
    <div class="container" id="container">
        <h2>Finalização de hospedagem de chalé</h2>
        <form method="POST" id="signup-form" class="signup-form">
            <input type="hidden" id="itemsCart">
            <input type="hidden" id="senderHash">
            @csrf
            <h3>
                <span class="icon"><i class="ti-user"></i></span>
                <span class="title_text">Pessoal</span>
            </h3>
            <fieldset>
                <legend>
                    <span class="step-heading">Informanções pessoais: </span>
                    <span class="step-number">Passo 1 / 2</span>
                </legend>
                <div class="form-group">
                    <label for="senderName" class="form-label required">Nome Completo</label>
                    <input type="text" name="senderName" id="senderName" data-msg="Preencha seu nome corretamente" />
                </div>

                <div class="form-group">
                    <label for="senderCPF" class="form-label required">CPF <small>somente números</small></label>
                    <input type="number" name="senderCPF" id="senderCPF" data-mask="00000000000" data-msg-minlength="Digite no mínimo 11 números"/>
                </div>

                <div class="form-group">
                    <label for="senderEmail" class="form-label required">Email</label>
                    <input type="text" name="senderEmail" id="senderEmail" />
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="senderAreaCode" class="form-label required">Código de área (DDD)</label>
                        <input type="number" maxlength="2" data-mask="00" name="senderAreaCode" id="senderAreaCode" aria-invalid="true">
                        <label id="card_number-error" for="senderAreaCode"></label>
                    </div>
                    <div class="form-group">
                        <label for="senderPhone" class="form-label required">Telefone</label>
                        <label id="cvc-error" for="senderPhone"></label>
                        <input type="number" data-mask="000000000" name="senderPhone" id="senderPhone" aria-invalid="true">
                    </div>
                </div>
                </fieldset>

            <h3>
                <span class="icon"><i class="ti-credit-card"></i></span>
                <span class="title_text">Pagamento</span>
            </h3>
            <fieldset>
                <legend>
                    <span class="step-heading">Informação de Pagamento: </span>
                    <span class="step-number">Passo 2 / 2</span>
                </legend>

                <input type="hidden" name="creditCardToken" id="creditCardToken">
                <input type="hidden" name="installmentValue" id="installmentValue">
                <input type="hidden" name="totalValue" id="totalValue" value="{{ request()->get('itemAmount') }}">

                <div class="form-group">
                    <label for="creditCardHolderName" class="form-label required">
                        Nome no cartão
                    </label>
                    <input type="text" name="creditCardHolderName" id="creditCardHolderName" />
                </div>
                <div class="form-group">
                    <label for="creditCardHolderCPF" class="form-label required">
                        CPF
                    </label>
                    <input type="text" name="creditCardHolderCPF" data-mask="00000000000" id="creditCardHolderCPF" />
                </div>
                <div class="form-group">
                    <label for="creditCardHolderBirthDate" class="form-label required">
                        Data de nascimento
                    </label>
                    <input type="text" name="creditCardHolderBirthDate" data-mask="00/00/0000" id="creditCardHolderBirthDate" />
                </div>

                {{--    Informações de pagamento do cartão    --}}

                <div class="form-group">
                    <label for="cardNumber" class="form-label required">Número do cartão</label>
                    <input type="number" name="cardNumber" id="cardNumber" minlength="11"/>
                </div>
                <div class="form-group" style="margin-top: -36px;margin-bottom: 6px;">
                    <div id="card_brand"></div>
                </div>

                <div class="form-group">
                    <label for="cvv" class="form-label required">
                        Código de segurança (CVV)
                    </label>
                    <input type="number" name="cvv" data-mask="000" id="cvv" />
                </div>

                <div class="form-row">
                    <div class="form-date">
                        <label for="expiry_date" class="form-label">Expiração</label>
                        <div class="form-date-group">
                            <div class="form-date-item">
                                <select id="expirationMonth" name="expirationMonth" required></select>
                                <span class="select-icon"><i class="ti-angle-down"></i></span>
                            </div>
                            <div class="form-date-item">
                                <select id="expirationYear" name="expirationYear" required>
                                    <option disabled selected>Ano</option>
                                    @for($i = now()->format('y'); $i <= 40; $i++)
                                        <option value="20{{ $i }}">20{{ $i }}</option>
                                    @endfor
                                </select>
                                <span class="select-icon"><i class="ti-angle-down"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-select">
                        <label for="payment_type" class="form-label">Parcelamento</label>
                        <div class="select-list">
                            <select name="installmentQuantity" id="installmentQuantity" required>
                                <option disabled selected>Parcelamento</option>
                            </select>
                        </div>
                    </div>
                </div>

            </fieldset>
            <div id="payment_methods" class="center-align"></div>
            <div id="message" style="font-size: 16px;color: #657cac;"></div>
        </form>

    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('assets/checkout/js/main.js') }}"></script>
    <script src="{{ asset('js/pagseguro/payment.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.mask.min.js') }}"></script>
    <script>
        const paymentData = {
            brand: '',
            amount: {{ request()->get('itemAmount') }},
            url: '{{ route('pagseguro.pay') }}',
            title: '{{ request()->get('itemDescription') }}'
        };
        PagSeguroDirectPayment.setSessionId('{!! $session !!}');
        pagSeguro.getPaymentMethods(paymentData.amount)
            .then(function (urls) {
                let html = '';
                urls.forEach(function (url) {
                    html += '<img src="' + url + '" class="credit_card">'
                });
                $('#payment_methods').html(html);
            });

        $('#senderName').on('change', function () {
            pagSeguro.getSenderHash().then(function(data) {
                $('#senderHash').val(data);
            });
            $("#itemsCart").val(sessionStorage.cartDay);
        });
        $('#cardNumber').on('keyup', function() {
            if ($(this).val().length >= 6) {
                let bin = $(this).val();
                pagSeguro.getBrand(bin)
                    .then(function (res) {
                        paymentData.brand = res.result.brand.name;
                        $('#card_brand').html('<img src="' + res.url + '" class="credit_card">')
                        return pagSeguro.getInstallments(paymentData.amount, paymentData.brand);
                    }).then(function(res) {
                        let html = '';
                        res.forEach(function (item) {
                            html += '<option value="' + item.quantity + '">' + item.quantity + 'x R$' + item.installmentAmount + '</option>'
                        });
                        $('#installmentQuantity').html(html);

                        $('#installmentValue').val(res[0].installmentAmount);

                        $('#installmentQuantity').on('change', function () {
                            let value = res[$('#installmentQuantity').val() - 1].installmentAmount;
                            let total = res[$('#installmentQuantity').val() - 1].totalAmount;
                            $('#installmentValue').val(value);
                            $('#totalValue').val(total);
                        });
                    })
            }
        });
    </script>
@endpush

