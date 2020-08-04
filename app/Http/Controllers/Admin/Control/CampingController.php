<?php

namespace App\Http\Controllers\Admin\Control;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CampingController extends Controller
{
    public function index()
    {
        return view('admin.control.camping.index');
    }

    public function store(Request $request)
    {
        try {
            setting([
                'adult' => $request->adult,
                'children' => $request->children
            ])->save();
            return redirect()->back()->with('success', 'Dados configurados com sucesso!');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Não foi possível salvar esses dados, tente novamente.');
        }
    }
}
