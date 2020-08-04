<?php

namespace App\Http\Controllers\Api;

use App\Models\Hotpark\Day;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class DaysController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request)
    {
        return Day::all();
    }
}
