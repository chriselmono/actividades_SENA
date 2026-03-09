<?php

class Rectangulo {
    private $lado1;
    private $lado2;

    public function __construct() {
        $this->lado1 = readline("Digita la longitud del rectángulo: \n");
        $this->lado2 = readline("Digita la anchura del rectángulo: \n");
    }

    public function Area() {

       $total = $this->lado1 * $this->lado2;

        echo "El área del retángulo es igual a: ". $total;

    }
}

$rectangulo = new Rectangulo();
$rectangulo-> Area();


?>