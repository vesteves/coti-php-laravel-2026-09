<?php

namespace App\Http\Controllers;

use App\Models\Quarto;

use Illuminate\Http\Request;

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
}
