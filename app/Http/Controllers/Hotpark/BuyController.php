<?php

namespace App\Http\Controllers\Hotpark;

use App\Models\Hotpark\Day;
use App\Models\Hotpark\Plan;
use App\Models\Hotpark\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuyController extends Controller
{
    public function index(Request $request)
    {
        if($request->start < now()->format('Y-m-d')) {
            return redirect()->back();
        }
        $day = Day::where('start', $request->start)->where('end', $request->end)->firstOrFail();
        $date = new Carbon($request->day);
        $products = Product::all();
        return view('hotpark.buy.index', compact('date', 'products', 'day'));
    }
}
