<?php

namespace App\Http\Controllers;

use App\Models\Quarto;

use Illuminate\Http\Request;
use App\Http\Requests\StoreQuartoRequest;

class QuartoController extends Controller
{
    public function index()
    {
        return view('quartos',
            [
                "quartos" => Quarto::all(),
            ]
        );
    }

    public function show(int $id)
    {
        return view('quarto',
            [
                "quarto" => Quarto::findOrFail($id),
                "id" => $id
            ]
        );
    }

    public function create()
    {
        // regra de negócio
        return view('create');
    }

    public function store(StoreQuartoRequest $request)
    {
        Quarto::create($request->validated());

        return redirect()->route('quartos.list')->with('success','Quarto cadastrado com sucesso!!');
    }
}
