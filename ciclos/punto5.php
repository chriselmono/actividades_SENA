<?php

echo "Ingrese un número entero: ";

$numero = readline();

echo "Tabla de multiplicar del número {$numero} - ";

for ($i = 1; $i <= 10; $i++) {

    $producto = $numero * $i;

    echo " $numero x $i = $producto - ";

}

?>