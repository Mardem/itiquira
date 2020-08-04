<?php

namespace App\Http\Controllers\Admin\Control;

use App\Http\Controllers\Controller;
use App\Http\Traits\MessagesTrait;
use App\Models\Title\DependentTitle;

class DeleteDependentController extends Controller
{
    use MessagesTrait;
    protected $nameModel = 'Dependente';
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        try {
            DependentTitle::find($id)->delete();
            return redirect()->back()->with('success', $this->successDeleteMessage($this->nameModel));
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $this->errorDeleteMessage($this->nameModel, $exception));
        }
    }
}
