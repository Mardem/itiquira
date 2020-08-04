new Vue({
    el: '#el',
    data: {
        payments: [],
        senderHash: '',
        brand: '',
        card: '',
        amountPayment: 0
    },
    methods: {
        getSession() {
            axios.get('http://127.0.0.1:8000/api/start-session')
                .then((res) => {
                    let sessionId = res.data.session_id[0];

                    // Inicia a sessão
                    PagSeguroDirectPayment.setSessionId(sessionId);

                    // Procura as formas de pagamento
                    PagSeguroDirectPayment.getPaymentMethods({
                        amount: this.amountPayment,
                        success: function (response) {
                            // Retorna os meios de pagamento disponíveis.
                            this.payments = response.paymentMethods;
                            console.log(this.payments);
                        },
                        error: function (response) {
                            // Callback para chamadas que falharam.
                            console.error(response)
                        }
                    });
                    // Pega o hash
                    PagSeguroDirectPayment.onSenderHashReady(function (response) {
                        if (response.status == 'error') {
                            console.log(response.message);
                            return false;
                        }
                        this.senderHash = response.senderHash; //Hash estará disponível nesta variável.
                    });

                    PagSeguroDirectPayment.getBrand({
                        cardBin: 411111, // trocar pelo que é digitado
                        success: function (response) {
                            //bandeira encontrada
                            this.brand = response.brand.name;
                        },
                        error: function (response) {
                            //tratamento do erro
                            console.error(response)
                        }
                    });

                    PagSeguroDirectPayment.getInstallments({
                        amount: 118.80,
                        maxInstallmentNoInterest: 2,
                        brand: 'visa',
                        success: function(response){
                            // Retorna as opções de parcelamento disponíveis
                            console.log(response);
                        },
                        error: function(response) {
                            // callback para chamadas que falharam.
                            console.log(response);
                        },
                        complete: function(response){
                            // Callback para todas chamadas.
                            console.log(response);
                        }
                    });
                }).catch((error) => {
                alert('Não foi possível iniciar a sessão');
            });
        },

    }
});
