<?php

echo "Digite un número: ";
$num = readline();

if($num > 0){
    echo "El número digitado es positivo";
}else if($num < 0){
    echo "El número digitado es negativo";
}else{
    echo "El número es 0";
}

?>