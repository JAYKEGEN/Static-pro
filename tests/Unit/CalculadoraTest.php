<?php

namespace Tests\Unit;

use App\Http\Controllers\CalculadoraController;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    public function test_potencia_basica()
    {
        $calc = new CalculadoraController;
        $result = $calc->potencia(2, 3);

        $this->assertEquals(8, $result);
    }
}
