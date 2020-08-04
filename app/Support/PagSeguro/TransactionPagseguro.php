<?php


namespace App\Support\PagSeguro;


use App\Http\Traits\PagSeguroTrait;
use Exception;

class TransactionPagseguro
{
    use PagSeguroTrait;

    public static function getStatus($reference)
    {
        \PagSeguro\Library::initialize();
        \PagSeguro\Library::cmsVersion()->setName("Itiquira Park")->setRelease("1.0.0");
        \PagSeguro\Library::moduleVersion()->setName("Itiquira Park")->setRelease("1.0.0");

        /*
         * To do a dynamic configuration of the library credentials you have to use the set methods
         * from the static class \PagSeguro\Configuration\Configure.
         */

        //For example, to configure the library dynamically:
        \PagSeguro\Configuration\Configure::setEnvironment('sandbox');//production or sandbox
        \PagSeguro\Configuration\Configure::setAccountCredentials(
            config('pagseguro.sandbox.email'),
            config('pagseguro.sandbox.token')
        );
        \PagSeguro\Configuration\Configure::setCharset('UTF-8');// UTF-8 or ISO-8859-1

        try {
            $response = \PagSeguro\Services\Transactions\Search\Code::search(
                \PagSeguro\Configuration\Configure::getAccountCredentials(),
                $reference
            );
            return $response->getStatus();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
