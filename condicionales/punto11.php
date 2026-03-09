<?php 

echo "¿De que tamaño quisiera su pizza?
Tamaño 1.
Tamaño 2.
Tamaño 3.";

$tamaño = readline();

echo "¿Cuantas ingredientes adicionales quiere?";

$adicion = readline();

$valorad = 4000;

if($tamaño == 1 ){
    $valor = $adicion * $valorad;

    $pizza = 15000;

    $total = $pizza + $valor;

    echo "El valor total de la pizza es $ {$total}.
    ¡Gracias por su compra!";
}else if ($tamaño == 2){
    $valor = $adicion * $valorad;

    $pizza = 24000;

    $total = $pizza + $valor;

    echo "El valor total de la pizza es $ {$total}.
    ¡Gracias por su compra!";
}else if ($tamaño == 3){
    $valor = $adicion * $valorad;

    $pizza = 36000;

    $total = $pizza + $valor;

    echo "El valor total de la pizza es $ {$total}.
    ¡Gracias por su compra!";
}else {
    echo "Tamaño no valido, intente de nuevo.";
}



?>