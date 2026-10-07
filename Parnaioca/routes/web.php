<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuartoController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/quartos', [
//     QuartoController::class,
//     'index'
// ])->name('quartos.list');

// Route::get('/quartos/create', [
//     QuartoController::class,
//     'create'
// ]);

// Route::post('/quartos', [
//     QuartoController::class,
//     'store'
// ]);

// Route::get('/quartos/{id}/edit', [
//     QuartoController::class,
//     'edit'
// ]);

// Route::get('/quartos/{id}', [
//     QuartoController::class,
//     'show'
// ]);

// Route::put('/quartos/{id}', [
//     QuartoController::class,
//     'update'
// ]);

// Route::delete('/quartos/{id}', [
//     QuartoController::class,
//     'destroy'
// ]);

Route::middleware('auth')->group(function () {
    Route::resource('/quartos', QuartoController::class);
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/logout', function () {
    return view('logout');
});

Route::post('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
});

Route::post('/login', function (Request $request) {
    // administrador@parnaioca.com.br
    // @administrador@parnaioca.com.br
    // @@parnaioca.com.br
    // administrador@parnaioca

    $credenciais = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if(Auth::attempt($credenciais)) {
        $request->session()->regenerate();

        return redirect('/quartos');
    }

    return back()->withErrors([
        'email' => 'Credenciais inválidas.'
    ]);
});

Route::get('/quem-sou-eu', function () {
    return Auth::user();
});

// put - atualizar

// patch - atualizar uma única informação do meu dado

// delete - remover
