<?php

class Calculadora{

    public function sumarArray($array){

        $resultado = 0;
        for ($i=0; $i < count($array); $i++){

            $resultado = $array[$i] + $resultado;

        }
        echo "El resultado es: " . $resultado;
    }
}

?>