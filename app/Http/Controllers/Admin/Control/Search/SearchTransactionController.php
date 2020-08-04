<?php

namespace App\Http\Controllers\Admin\Control\Search;

use App\Models\Checkout\PagseguroTransaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchTransactionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $transactions = PagseguroTransaction::where('name', 'like', '%' . $request->search . '%')->paginate();
        return view('admin.control.transaction.index', compact('transactions'));
    }
}
