<?php

namespace App\Http\Controllers;

class CalculadoraController extends Controller
{
    /**
     * Calcula la potencia de una base por un exponente.
     *
     * @param  int|float  $base
     * @param  int  $exponente
     * @return int|float
     */
    public function potencia($base, $exponente)
    {
        return pow($base, $exponente);
    }
}
