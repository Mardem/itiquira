<?php

namespace App\Http\Controllers\Hotpark;

use App\Models\Hotpark\Day;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotparkController extends Controller
{
    public function index()
    {
        $days = Day::all();
        return view('hotpark.ingressos', compact('days'));
    }
}
