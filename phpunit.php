<?php

require_once 'CalculadoraPromedios.php';

use PHPUnit\Framework\TestCase;

class CalculadoraPromediosTest extends TestCase
{
    public function testCalcularPromedio()
    {
        $calculadora = new CalculadoraPromedios();
        $notas = [75, 60, 80, 55, 90];
        $promedio = $calculadora->calcularPromedio($notas);
        $this->assertEquals(72, $promedio);
    }

    public function testDeterminarResultadoAprobado()
    {
        $calculadora = new CalculadoraPromedios();
        $promedio = 75;
        $resultado = $calculadora->determinarResultado($promedio);
        $this->assertEquals('Aprobado', $resultado);
    }

    public function testDeterminarResultadoReprobado()
    {
        $calculadora = new CalculadoraPromedios();
        $promedio = 40;
        $resultado = $calculadora->determinarResultado($promedio);
        $this->assertEquals('Reprobado', $resultado);
    }

    public function testCalcularPromedioVacio()
    {
        $calculadora = new CalculadoraPromedios();
        $notas = [];
        $promedio = $calculadora->calcularPromedio($notas);
        $this->assertEquals(0, $promedio);
    }
}