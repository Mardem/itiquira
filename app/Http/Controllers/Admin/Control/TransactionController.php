<?php

namespace App\Http\Controllers\Admin\Control;

use App\Http\Traits\MessagesTrait;
use App\Models\Checkout\PagseguroTransaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    use MessagesTrait;

    protected $nameModel = 'Transação';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = PagseguroTransaction::when(request()->get('status'), function($query, $status){
            return $query->where('status', $status);
        })->paginate();

        return view('admin.control.transaction.index', compact('transactions'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = PagseguroTransaction::findOrFail($id);
        return view('admin.control.transaction.show', compact('transaction'));
    }

}
