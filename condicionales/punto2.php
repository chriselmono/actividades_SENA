<?php

echo "ingrese su nombre: ";
$nom = readline();

echo "Ingrese su edad: ";
$edad = readline();

if($edad < 1 || $edad > 100){
    echo "Señor(a) {$nom} ingrese una edad valida";

}else if($edad >= 18){
    echo "Señor(a) {$nom} usted es mayor de edad";

}else{
    echo "Señor(a) {$nom} usted es menor de edad";
}


?>