<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Traits\PagSeguroTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagSeguroController extends Controller
{
    use PagSeguroTrait;

    public function pay(Request $request)
    {
        \Log::info($request->all());
        $this->initializePagSeguro();

        //Instantiate a new direct payment request, using Credit Card
        $creditCard = new \PagSeguro\Domains\Requests\DirectPayment\CreditCard();
        $creditCard->setNotificationUrl('https://vendas.itiquira.com.br/checkout-notifications');

        /**
         * @todo Change the receiver Email
         */
        $creditCard->setReceiverEmail(config('pagseguro.production.receiverEmail'));

        // Set a reference code for this payment request. It is useful to identify this payment
        // in future notifications.
        $reference = $request->itemRef . 'REF000' . Str::random(6);
        $creditCard->setReference($reference);

        // Set the currency
        $creditCard->setCurrency("BRL");

        // Add an item for this payment request
        $creditCard->addItems()->withParameters(
            '0001',
            $request->itemTitle,
            1,
            number_format($request->totalValue, 2, '.', '') // Deve atualizar esse valor com juros
        );

        // Set your customer information.
        // If you using SANDBOX you must use an email @sandbox.pagseguro.com.br
        $senderName = $request->senderName;
        $senderEmail = $request->senderEmail; // se mudar o valor, automaticamente os dados do comprador mudam na Sandbox
        $creditCard->setSender()->setName($senderName);
        $creditCard->setSender()->setEmail($senderEmail);

        $creditCard->setSender()->setPhone()->withParameters(
            $request->senderAreaCode,
            $request->senderPhone
        );

        $creditCard->setSender()->setDocument()->withParameters(
            'CPF',
            $request->senderCPF
        );

        $creditCard->setSender()->setHash($request->senderHash);


        // Set shipping information for this payment request
        $creditCard->setShipping()->setAddress()->withParameters(
            'Av. Brig. Faria Lima',
            '1384',
            'Jardim Paulistano',
            '01452002',
            'São Paulo',
            'SP',
            'BRA',
            'apto. 114'
        );

        //Set billing information for credit card
        $creditCard->setBilling()->setAddress()->withParameters(
            'Av. Brig. Faria Lima',
            '1384',
            'Jardim Paulistano',
            '01452002',
            'São Paulo',
            'SP',
            'BRA',
            'apto. 114'
        );

        // Set credit card token
        $creditCard->setToken($request->creditCardToken);

        // Set the installment quantity and value (could be obtained using the Installments
        // service, that have an example here in \public\getInstallments.php)

        if ((int)$request->quantityInstallments > 1) {
            $creditCard->setInstallment()->withParameters((int)$request->quantityInstallments, $request->installmentValue, (int)$request->quantityInstallments);
        } else {
            $creditCard->setInstallment()->withParameters((int)$request->quantityInstallments, $request->installmentValue);
        }


        // Set the credit card holder information
        $creditCard->setHolder()->setBirthdate($request->holderBirth);
        $creditCard->setHolder()->setName($request->holderName); // Equals in Credit Card

        $creditCard->setHolder()->setPhone()->withParameters(
            $request->senderAreaCode,
            $request->senderPhone
        );

        $creditCard->setHolder()->setDocument()->withParameters(
            'CPF',
            $request->holderCPF
        );

        // Set the Payment Mode for this payment request
        $creditCard->setMode('DEFAULT');

        // Set a reference code for this payment request. It is useful to identify this payment
        // in future notifications.

        try {
            //Get the crendentials and register the boleto payment
            $result = $creditCard->register(
                \PagSeguro\Configuration\Configure::getAccountCredentials()
            );
            echo "<pre>";
            print_r($result);

            $this->saveTransaction(
                $result->getCode(), $reference, $result->getStatus(),
                $result->getInstallmentCount(), $senderName, $senderEmail,
                $request->itemTitle, $request->senderPhone, $request->senderAreaCode,
                $request->totalValue,
                $request->itemsCart
            );

        } catch (Exception $e) {
            echo "</br> <strong>";
            die($e->getMessage());
        }
    }

    public function notifications(Request $request)
    {
        $this->initializePagSeguro();
        try {
            if (\PagSeguro\Helpers\Xhr::hasPost()) {
                $response = \PagSeguro\Services\Transactions\Notification::check(
                    \PagSeguro\Configuration\Configure::getAccountCredentials()
                );
            } else {
                throw new \InvalidArgumentException($_POST);
            }

            echo "<pre>";
            print_r($response);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
