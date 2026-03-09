<?php

$suma = 0;

for ($i = 0; $i < 10; $i++) {

    echo "Ingrese el número " . ($i + 1) . ": ";

    $numero = readline();
    $suma += $numero;

}

echo "La suma es igual a: {$suma} ";

$promedio = $suma / 10;

echo " El promedio de la suma es: {$promedio}";

?>