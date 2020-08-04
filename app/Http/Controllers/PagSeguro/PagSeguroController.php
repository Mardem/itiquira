<?php

namespace App\Http\Controllers\PagSeguro;

use App\Http\Controllers\Controller;
use App\Http\Traits\PagSeguroTrait;
use App\Models\Checkout\PagseguroTransaction;
use Exception;
use Illuminate\Http\Request;

class PagSeguroController extends Controller
{
    use PagSeguroTrait;

    public function index()
    {
        $session = generateSessionPagSeguro()->id;
        return view('external.checkout.index', compact('session'));
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
            // Atualiza o status da notificação
            $transaction = PagseguroTransaction::where('code', '=', $response->getCode())->first();
            $transaction->status = $response->getStatus();
            $transaction->save();

            print_r($response);
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }
}
