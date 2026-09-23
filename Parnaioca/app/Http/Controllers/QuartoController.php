<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuartoController extends Controller
{
    public function index()
    {
        $quartos = [
            [
                'nome' => 'Quarto 1',
                'tipo' => 'Solteiro',
                'valorDiaria' => 380,
                'disponivel' => true,
            ],
            [
                'nome' => 'Quarto 2',
                'tipo' => 'Casal',
                'valorDiaria' => 420,
                'disponivel' => true,
            ],
            [
                'nome' => 'Quarto 3',
                'tipo' => 'Casal',
                'valorDiaria' => 600,
                'disponivel' => false,
            ],
        ];

        return view('quartos',
            [
                "quartos" => $quartos
            ]
        );
    }

    public function show(int $id)
    {
        $quarto =
            [
                'nome' => 'Quarto 1',
                'tipo' => 'Solteiro',
                'valorDiaria' => 380,
                'disponivel' => true,
            ];

        return view('quarto',
            [
                "quarto" => $quarto,
                "id" => $id
            ]
        );
    }
}
