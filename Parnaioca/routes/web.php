<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuartoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vitor', function () {
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

    return '
        <html>
            <head>
                <title>Coti Informática</title>
            </head>
            <body>
                <h1>Pousada Parnaioca</h1>
                <p>Bem vindo!</p>
                Quarto: ' . $quartos[0]['nome'] .'
                Diária: ' . $quartos[0]['valorDiaria'] .'
            </body>
        </html>
    ';
});

Route::get('/quartos', [
    QuartoController::class,
    'index'
])->name('quartos.list');

Route::get('/quartos/create', [
    QuartoController::class,
    'create'
]);

Route::post('/quartos', [
    QuartoController::class,
    'store'
]);

Route::get('/quartos/{id}', [
    QuartoController::class,
    'show'
]);

// put - atualizar

// patch - atualizar uma única informação do meu dado

// delete - remover
