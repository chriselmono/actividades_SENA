<?php

class Carro{


    public $digito;
    public $placa;
    public $marca;
    public $modelo;
    public $dia;

    public function __construct(){

        $this->marca = readline("¿Cuál es la marca de su automovil? \n");

        $this->modelo = readline("¿Cuál es el modelo de su automovil? \n");

        $this->placa = readline("Digite los digitos (números) de la placa de su automovil \n");

    }

    public function Placa(){

        $ultimo = str_split($this->placa);
        $this->digito = end($ultimo);

    }

    public function Fecha(){

        $fecha = Date('Y-M-D');
        $date = strtotime($fecha);
        $this->dia = Date("D", $date);

        echo "La fecha es: " . $fecha;

    }

    public function Picoplaca(){

        if($this->dia %2==0 and $this->digito >=6){

            echo "Es día par, no puedes salir, tienes pico y placa";

        }else if($this->digito < 6){

            echo "Es día impar, tienes pico y placa, no puedes salir";

        }

    }

}

$carro = new Carro();
$carro->Placa();
$carro->Fecha();
$carro->Picoplaca();

?>