<?php

class Pow {

    public $x;
    public $n;

    public function __construct(){

        $this->x = readline("Digite el primer número: \n");
        $this->n = readline("Digite el segundo número: \n");
        
    }
    public function Pow() {

        $total = pow($this->x, $this->n);
        echo "El resultado es igual a: " . $total;

    }
}

$pow = new Pow();
$pow-> Pow();

?>