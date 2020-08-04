<?php

namespace App\Http\Controllers\Admin\Control;

use App\Http\Traits\MessagesTrait;
use App\Models\Title\PlanTitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TitleController extends Controller
{
    use MessagesTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = PlanTitle::paginate();
        return view('admin.titles.index', compact('plans'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plan = PlanTitle::find($id);
        $dependents = $plan->dependents()->paginate();
        return view('admin.titles.show', compact('plan', 'dependents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            return redirect()->back()->with('success', $this->successCreatedMessage($this->nameModel));
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $this->errorCreatedMessage($this->nameModel, $exception));
        }
    }
}
