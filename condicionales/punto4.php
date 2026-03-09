<?php

echo "Digita el primer número: ";
$num1 = readline();

echo "Digita el segundo número: ";
$num2 = readline();

if($num1 < $num2){
    echo "{$num1} es menor que {$num2}";
}else if($num1 > $num2){
    echo "{$num1} es mayor que {$num2}";
}else{
    echo "Los números son iguales";
}

?>