<?php

namespace App\Http\Controllers\External\Chalet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchChaletController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('external.chalet.index');
    }
}
