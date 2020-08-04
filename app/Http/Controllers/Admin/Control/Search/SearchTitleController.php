<?php

namespace App\Http\Controllers\Admin\Control\Search;

use App\Models\Title\PlanTitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchTitleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $plans = PlanTitle::where('name', 'like', '%' . $request->search . '%')->paginate();
        return view('admin.titles.index', compact('plans'));
    }
}
