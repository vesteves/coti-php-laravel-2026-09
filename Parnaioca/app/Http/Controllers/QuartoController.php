<?php

namespace App\Http\Controllers;

use App\Models\Quarto;

use Illuminate\Http\Request;
use App\Http\Requests\StoreQuartoRequest;
use App\Http\Requests\UpdateQuartoRequest;

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

    public function show(Quarto $quarto)
    {
        return view('quarto',
            [
                "quarto" => $quarto
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
        // SEM FILLABLE NO QUARTO MODEL
        // $quarto = new Quarto();
        // $quarto->nome = $request->validated()->nome;
        // $quarto->tipo = $request->validated()->tipo;
        // $quarto->valorDiaria = $request->validated()->valorDiaria;
        // $quarto->disponivel = $request->validated()->disponivel;
        // $quarto->save();

        // COM FILLABLE NO QUARTO MODEL
        Quarto::create($request->validated());

        return redirect()->route('quartos.index')->with('success','Quarto cadastrado com sucesso!!');
    }

    public function edit(Quarto $quarto)
    {
        return view('edit', [
            'quarto' => $quarto
        ]);
    }

    public function update(Quarto $quarto, UpdateQuartoRequest $request)
    {
        $quarto->update($request->all());

        return redirect()->route('quartos.index')->with('success','Quarto atualizado com sucesso!!');
    }

    public function destroy(Quarto $quarto)
    {
        $quarto->delete();

        return redirect()->route('quartos.index')->with('success','Quarto removido com sucesso!!');
    }
}
