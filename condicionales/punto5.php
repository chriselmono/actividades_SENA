<?php

echo "Digite las 5 notas dadas por el profesor: ";
echo "Nota 1: ";
$not1 = readline();
echo "Nota 2: ";
$not2 = readline();
echo "Nota 3: ";
$not3 = readline();
echo "Nota 4: ";
$not4 = readline();
echo "Nota 5: ";
$not5 = readline();

$promedio = ($not1 + $not2 + $not3 + $not4 + $not5)/5;

if($promedio >= 3.0){
    echo "Felicitaciones, has aprobado, tu promedio es de {$promedio}";
}else{
    echo "Has repobrado, sigue esforzandote, tu promedio es de {$promedio}";
}

?>