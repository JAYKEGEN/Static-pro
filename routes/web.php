<?php

use App\Http\Controllers\CalculadoraController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ruta para calcular potencia: /potencia/{base}/{exponente}
Route::get('/potencia/{base}/{exponente}', [CalculadoraController::class, 'potencia']);
