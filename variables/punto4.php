<!-- Calculadora de edad -->

<?php 

$añonacio = readline("Digite su año de nacimiento: ");
$añoactual = readline("Digite el año actual: ");

$edad = $añoactual - $añonacio;

echo "Su edad es {$edad}";

?>