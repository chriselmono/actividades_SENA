<?php 

$num1 = 40;
$num2 = 35;
$num3 = 20;

$resultado = $num1 * $num2 * $num3;

echo "El resultado es: ". $resultado;


?>

<?php 

$num1 = readline("ingresa el primer número");
$num2 = readline("Ingresa el segundo número");
$num3 = readline("Ingresa el tercer número");

$resultado = $num1 * $num2 * $num3;

echo "El resultado es: ". $resultado;
echo "El resultado es: {$resultado}"; //otra forma de imprimir el comando

?>