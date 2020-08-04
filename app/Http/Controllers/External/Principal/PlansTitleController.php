<?php

namespace App\Http\Controllers\External\Principal;

use App\Http\Requests\CheckDependent;
use App\Http\Requests\CheckTitle;
use App\Models\Title\DependentTitle;
use App\Models\Title\PlanTitle;
use App\Support\Titles\PlansTitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Webpatser\Uuid\Uuid;

class PlansTitleController extends Controller
{
    public function step1()
    {
        if(!request()->has('item-title')) {
            return redirect()->route('/');
        }
        return view('external.principal.plans.index');
    }

    public function step2($id)
    {
        $plan = PlanTitle::where('uuid', $id)->firstOrFail();
        $limit = PlansTitle::isLimitDependent($plan->dependents, $plan->plan);
        $restant = PlansTitle::restDependent($plan->dependents, $plan->plan);
        $amount = PlansTitle::getAmountPlan($plan->plan);
        return view('external.principal.plans.dependents', compact('plan', 'limit', 'restant', 'amount'));
    }

    public function store(CheckTitle $request)
    {
        try {
            $request['uuid'] = Uuid::generate()->string;
            $plan = PlanTitle::create($request->all());
            return redirect()->to(route('title.step2', $plan->uuid));
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Não foi possível realizar seu cadastro:' . $exception->getMessage() . $exception->getMessage());
        }
    }

    public function storeDependents(CheckDependent $request)
    {
        try {
            DependentTitle::create($request->all());
            return redirect()->back()->with('success', 'Dependente registado com sucesso!');
        } catch (\Exception $exception) {
            \Log::error($exception);
            return redirect()->back()->with('error', 'Não foi possível registrar esse dependente');
        }
    }

    public function removeDependent($id)
    {
        try {
            DependentTitle::find($id)->delete();
            return redirect()->back()->with('success', 'Dependente removido com sucesso!');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Não foi possível remover o dependente');
        }
    }
}
