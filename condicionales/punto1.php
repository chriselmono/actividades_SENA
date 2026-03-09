<?php 

echo "Digita el número que quieras: ";

$num = readline();

if($num %2==0){
    echo "El número {$num} es par";
}else{
    echo "El número {$num} es impar";
}

?>