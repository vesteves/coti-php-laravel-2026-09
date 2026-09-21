<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vitor', function () {
    return 'Olá mundo!!!!!';
});
