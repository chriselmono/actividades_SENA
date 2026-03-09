<!-- conversión de metros a km cm y mm -->

<?php 

//tengamos en cuenta que un kilometro son mil metros, un centimetro son 0.01m y 1 milimetro son 0.001m

$metros = readline("Digite la cantidad de metros que quiera calcular a otra medida: ");

$km = $metros / 1000;
 
$cm = $metros * 100;

$mm = $metros * 1000;

echo "{$metros} m en kilometros es igual a {$km} km.
En centimetros es igual a {$cm} cm.
Y en milimetros esa medida es igual a {$mm} mm."

?>