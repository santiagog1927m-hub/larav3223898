<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function sumar($num1,$num2){
        $resultado=$num1+$num2;
        return $resultado;
    }

    public function restar($num1,$num2){
        $resultado=$num1-$num2;
        return $resultado;
    }
    public function ecuacion($a,$b,$c){
        
    }
    public function cuadratica($a,$b,$c){
        $b2 = pow($b, 2);
        $multiplicacion = 4 * $a * $c;
        $resultado = $b2 - $multiplicacion;
        $raiz = sqrt($resultado);

        return $raiz;
        
    }
}

