<?php

namespace App\Http\Controllers\Admin\Hotpark;

use App\Http\Traits\MessagesTrait;
use App\Models\Hotpark\Day;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class DayController extends Controller
{
    use MessagesTrait;
    private $nameModel = 'Dia';
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $days = Day::paginate();
        return view('admin.hotpark.dates.index', compact('days'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.hotpark.dates.create2');
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
            Day::create($request->all());
            return redirect()->back()->with('success', $this->successCreatedMessage($this->nameModel));
        } catch (Exception $exception) {
            return redirect()->back()->with('error', $this->errorCreatedMessage($this->nameModel, $exception));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $day = Day::find($id);
        return view('admin.hotpark.dates.show', compact('day'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        try {
            Day::find($id)->update($request->all());
            return redirect()->back()->with('success', $this->successUpdateMessage($this->nameModel));
        } catch (Exception $exception) {
            return redirect()->back()->with('error', $this->errorUpdateMessage($this->nameModel, $exception));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            Day::find($id)->delete();
            return redirect()->back()->with('success', $this->successDeleteMessage($this->nameModel));
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $this->errorDeleteMessage($this->nameModel, $exception));
        }
    }
}
