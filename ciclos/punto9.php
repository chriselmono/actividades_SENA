<?php

echo "Digite el número que quiera calcular el facotiral: ";

$numero = readline();

$factorial = 1;

for ($x = $numero; $x >= 2; $x--) {

    $factorial *= $x;

}

echo "El factorial de $numero es $factorial
";

?>