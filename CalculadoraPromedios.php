<?php

class CalculadoraPromedios
{
    public function calcularPromedio($notas)
    {
        $totalNotas = count($notas);
        if ($totalNotas === 0) {
            return 0;
        }

        $suma = array_sum($notas);
        return $suma / $totalNotas;
    }

    public function determinarResultado($promedio)
    {
        return $promedio >= 60 ? 'Aprobado' : 'Reprobado';
    }
}

// Pedir la nota al usuario
echo "Ingrese las notas separadas por coma (,): ";
$notasInput = trim(fgets(STDIN));
$notas = explode(',', $notasInput);

// Convertir las notas a números
$notas = array_map('intval', $notas);

// Instanciar la clase y calcular el promedio
$calculadora = new CalculadoraPromedios();
$promedio = $calculadora->calcularPromedio($notas);

// Mostrar el resultado
echo "Promedio: " . $promedio . "\n";
echo "Resultado: " . $calculadora->determinarResultado($promedio) . "\n";