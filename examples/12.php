<?php

//demastración this

class Calculadora{

    private $numero1;
    private $numero2;

    public function __construct($numero1, $numero2){

        $this->numero1 = $numero1;
        $this->numero2 = $numero2;

    }

    public function suma(){

        $suma = $this->numero1 + $this->numero2;
        echo "La suma es: " . $suma . "<br>";

    }
    
}

?>