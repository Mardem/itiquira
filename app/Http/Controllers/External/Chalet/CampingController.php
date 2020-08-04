<?php

namespace App\Http\Controllers\External\Chalet;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Date;

class CampingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request['check_in'] = str_replace("/", "-", $request->check_in);
        $request['check_out'] = str_replace("/", "-", $request->check_out);

        $start = Date::make($request->check_in);
        $end = Date::make($request->check_out);

        $total = $this->calculateTotal($request->check_in, $request->check_out, $request->childrens, $request->adults);
        return view('external.chalet.result-camping', compact('total', 'start', 'end'));
    }

    private function getDays($start, $end)
    {
        try {
            $initial = new Carbon($start);
            $days = $initial->diffInDays($end);
        } catch (\Exception $e) {
            $days = 0;
        }

        return $days;
    }

    private function calculateTotal($checkIn, $checkOut, $qtdChild, $qtdAdult)
    {
        $start = date('Y-m-d', strtotime($checkIn));
        $end = date('Y-m-d', strtotime($checkOut));
        $days = $this->getDays($start, $end);

        $valueAdult = setting('adult');
        $valueChild = setting('children');

        // Total adults
        $totalAdult = $valueAdult * $qtdAdult * $days;
        $totalChild = $valueChild * $qtdChild * $days;
        $total = $totalAdult + $totalChild;
        return $total;
    }
}
