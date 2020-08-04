<?php

namespace App\Http\Controllers\External\Chalet;

use App\Http\Controllers\Controller;
use App\Models\Agendament\Chalet;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ResultChaletController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function __invoke(Request $request)
    {

        // Realiza a contagem de crianças
        $totalChildrens = $this->countChildren($request->childrens_10, $request->childrens_9);

        // Realiza a contagem de dias
        $days = $this->getDays($request->check_in, $request->check_out);

        // Realiza a busca no banco de dados baseado no que foi feito atrás
        $chalets = Chalet::where('limit_adult', '>=', $request->adults ?? 0)
            ->where('limit_children', '>=', $totalChildrens ?? 0)
            ->paginate();


        $checkInDate = new Carbon($request->check_in);
        $checkOutDate = new Carbon($request->check_out);
        return view('external.chalet.result', compact('chalets', 'days', 'checkInDate', 'checkOutDate', 'totalChildrens'));
    }

    /**
     * Responsável por pegar a quantidade de dias para realizar o cálculo
     * @param $start
     * @param $end
     * @return int
     */
    private function getDays($start, $end)
    {
        try {
            $initial = new Carbon($start);
            $days = $initial->diffInDays($end);
        } catch (\Exception $e) {
            $days = 0;
        }

        return $days;
    }

    private function countChildren($ch9, $ch10)
    {
        return $ch9 + $ch10;
    }
}
