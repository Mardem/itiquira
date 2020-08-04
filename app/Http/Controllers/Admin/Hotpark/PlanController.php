<?php

namespace App\Http\Controllers\Admin\Hotpark;

use App\Http\Controllers\Controller;
use App\Http\Traits\MessagesTrait;
use App\Models\Hotpark\Plan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PlanController extends Controller
{
    use MessagesTrait;
    protected $nameModel = 'Plano';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $plans = Plan::paginate();
        return view('admin.hotpark.plans.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.hotpark.plans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        try {
            Plan::create($request->all());
            return redirect()->back()->with('success', $this->successCreatedMessage($this->nameModel));
        } catch (Exception $exception) {
            return redirect()->back()->with('error', $this->errorCreatedMessage($this->nameModel, $exception));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $plan = Plan::find($id);
        return view('admin.hotpark.plans.show', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        try {
            Plan::find($id)->update($request->all());
            return redirect()->back()->with('success', $this->successUpdateMessage($this->nameModel));
        } catch (Exception $exception) {
            return redirect()->back()->with('error', $this->errorUpdateMessage($this->nameModel, $exception));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            Plan::find($id)->delete();
            return redirect()->back()->with('success', $this->successDeleteMessage($this->nameModel));
        } catch (Exception $exception) {
            return redirect()->back()->with('error', $this->errorDeleteMessage($this->nameModel, $exception));
        }
    }
}
