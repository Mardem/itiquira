<?php

namespace App\Http\Controllers\PagSeguro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentCompleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if($request->has('successfully')) {
            return view('external.checkout.working-on-payment');
        }
        return redirect()->back();
    }
}
