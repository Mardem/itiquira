<?php

namespace App\Http\Controllers\Admin\Control;

use App\Http\Controllers\Controller;
use App\Http\Traits\MessagesTrait;
use App\Models\Agendament\Chalet;
use App\Models\Image\ImageAgendament;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ChaletController extends Controller
{
    use MessagesTrait;

    protected $nameModel = 'Chalé';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chalets = Chalet::paginate();
        return view('admin.control.chalet.index', compact('chalets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.control.chalet.create');
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
            Chalet::create($request->all());
            return redirect()->back()->with('success', $this->successCreatedMessage($this->nameModel));
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $this->errorCreatedMessage($this->nameModel, $exception));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Chalet $chalet)
    {
        return view('admin.control.chalet.show', compact('chalet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chalet $chalet)
    {
        try {
            $chalet->update($request->all());
            return redirect()->back()->with('success', $this->successUpdateMessage($this->nameModel));
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $this->errorUpdateMessage($this->nameModel, $exception));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chalet $chalet)
    {
        try {
            $chalet->delete();
            return redirect()->back()->with('success', $this->successDeleteMessage($this->nameModel));
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $this->errorDeleteMessage($this->nameModel, $exception));
        }
    }

    public function upload(Request $request)
    {
        try {
            \DB::transaction(function () use ($request) {
                $completPath = 'images/chalets/thumbs/' . Str::random(20) . '.jpeg';

                $request['thumb_path'] = $completPath;
                ImageAgendament::create($request->all());

                $img = Image::make($request->file('image'));
                $img->resize('800', '600');
                $img->save($completPath);
            });

            return redirect()->back()->with('success', 'Imagem adicionada com sucesso');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Não foi possível adicionar a imagem: ' . $exception->getMessage());
        }
    }

    public function deleteImage($id)
    {
        try {
            $image = ImageAgendament::findOrFail($id);
            unlink('/home2/itiquiracom/public_html/system/' . $image->thumb_path);
            $image->delete();
            return redirect()->back()->with('success', 'Imagem apagada com sucesso!');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Não foi possível deletar essa imagem:' . $exception->getMessage());
        }
    }
}
