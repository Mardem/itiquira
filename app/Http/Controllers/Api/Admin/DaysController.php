<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\Hotpark\Day;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DaysController extends Controller
{
    public function store(Request $request)
    {
        try {
            \DB::transaction(function() use ($request) {
                Day::create($request->all());
            });
            return response()->json([
                'message' => 'Temporada criada com sucesso!',
                'statusCode' => 201
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => 'Não foi possível criar a temporada.',
                'errorMessage' => $exception->getMessage()
            ]);
        }
    }

    public function days()
    {
        return Day::all();
    }
}
