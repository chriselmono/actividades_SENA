<?php

echo "Digite su edad: ";

$edad = readline();

$menu = "Digite su genero siendo:
1. Femenino.
2. Masculino.
";

$genero = readline($menu); 

if ($genero == 1) {

    $pulsaciones = (220 - $edad) / 10;

} else if ($genero == 2) {

    $pulsaciones = (210 - $edad) / 10;

}else{

    echo "Opción no valida.";

}

echo "Número de pulsaciones cada 10 segundos de ejercicio aeróbico: {$pulsaciones}";

?>