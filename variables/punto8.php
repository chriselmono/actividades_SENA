<!-- calcular el promedio de 5 digitos -->

<?php 

$num1 = readline("Digite el primer número: ");
$num2 = readline("Digite el segundo número: ");
$num3 = readline("Digite el tercer número: ");
$num4 = readline("Digite el cuarto número: ");
$num5 = readline("Digite el quinto número: ");

$suma = $num1 + $num2 + $num3 + $num4 + $num5;
$promedio = $suma / 5;

echo "El promedio de los anteriores 5 digitos es {$promedio}";

?>