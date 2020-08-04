<?php

namespace App\Http\Traits;

use App\Models\Checkout\PagseguroTransaction;

trait PagSeguroTrait
{
    public function initializePagSeguro(): void
    {
        \PagSeguro\Library::initialize();
        \PagSeguro\Library::cmsVersion()->setName("Itiquira Park")->setRelease("1.0.0");
        \PagSeguro\Library::moduleVersion()->setName("Itiquira Park")->setRelease("1.0.0");

        /*
         * To do a dynamic configuration of the library credentials you have to use the set methods
         * from the static class \PagSeguro\Configuration\Configure.
         */

        //For example, to configure the library dynamically:
        \PagSeguro\Configuration\Configure::setEnvironment('production');//production or sandbox
        \PagSeguro\Configuration\Configure::setAccountCredentials(
            config('pagseguro.production.email'),
            config('pagseguro.production.token')
        );
        \PagSeguro\Configuration\Configure::setCharset('UTF-8');// UTF-8 or ISO-8859-1
    }

    /*
    |--------------------------------------------------------------------------
    | Códigos de retorno do PagSeguro
    |--------------------------------------------------------------------------
    | 1 => Aguardando pagamento
    | 2 => Em análise
    | 3 => Paga
    | 4 => Disponível
    | 5 => Em disputa
    | 6 => Devolvida
    | 7 => Cancelada
    | 8 => Debitado
    | 9 => Retenção temporária
    */

    public function getStatusCodeFormatted($code): string
    {
        $statusText = '';
        switch ($code) {
            case(1):
                $statusText = 'Aguardando pagamento';
                break;
            case(2):
                $statusText = 'Em análise';
                break;
            case(3):
                $statusText = 'Paga';
                break;
            case(4):
                $statusText = 'Disponível';
                break;
            case(5):
                $statusText = 'Em disputa';
                break;
            case(6):
                $statusText = 'Devolvida';
                break;
            case(7):
                $statusText = 'Cancelada';
                break;
            case(8):
                $statusText = 'Debitado';
                break;
            case(9):
                $statusText = 'Retenção temporária';
                break;
        }
        return $statusText;
    }

    public function saveTransaction($code, $reference, $status, $installmentCount, $name, $email, $item, $phone, $areaCode, $amount, $items): void
    {
        $transaction = new PagseguroTransaction();

        $transaction->code = $code;
        $transaction->reference = $reference;
        $transaction->status = $status;
        $transaction->installmentCount = $installmentCount;
        $transaction->name = $name;
        $transaction->email = $email;
        $transaction->product_desc = $item;
        $transaction->phone = $phone;
        $transaction->areaCode = $areaCode;
        $transaction->totalAmount = $amount;
        $transaction->day_user_product = $items;
        $transaction->save();
    }
}
