<?php

namespace App\Lib;

use Exception;

class operaciones
{
    public static function multiplicar($num1, $num2){

        if(!is_int($num1) || !is_int($num2)) throw new Exception("Los valores ingresados no son numeros, por favor verifica su tipo.", 20);
        
        return $num1 * $num2;

    }
}


