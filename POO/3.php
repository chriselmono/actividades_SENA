<?php

class Circulo {
    private $radio;

    public function __construct() {

        $this->radio = readline("Digite el valor del radio del circulo: \n");

    }

    public function Area() {

        $area = pi() * pow($this->radio, 2);

        echo "El area del círculo es igual a: " . $area . "\n";

    }

    public function Perimetro() {

        $perimetro = 2 * pi() * $this->radio;

        echo "El perimetro del círculo es igual a: " . $perimetro;

    }
}

$circulo = new Circulo();
$circulo-> Area();
$circulo-> Perimetro();

?>