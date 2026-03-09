<!-- Calculadora para el movimiento rectilineo x= v*t 
V= velocidad 
t= tiempo-->

<?php

$velocidad = readline("Digite la velocidad en km/h: ");
$tiempo = readline("Digite el tiempo en horas: ");

$distancia = $velocidad * $tiempo;

echo "el resultado es: X = {$distancia} km";

?>