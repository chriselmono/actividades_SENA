<?php

$num = readline("Digite un número entero NO negativo: ");

$num = intval($num); //que sea entero

function factorial($n) {

    if($n <= 1){

        return 1;

    }else{

        return $n * factorial($n - 1);

    }

}

$resultado = factorial($num);

echo "El factorial de tu número es igual a: $resultado";

?>