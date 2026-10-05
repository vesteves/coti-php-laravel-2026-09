<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

// nome
// tipo
// valorDiaria
// disponivel

#[Fillable([
    'nome',
    'tipo',
    'valorDiaria',
    'disponivel'
])]
class Quarto extends Model
{
    //
}
