<?php

function invertirCadena() {

    $cadena = readline("Digite los valores que quiera invertir: ");

    return strrev($cadena);

}

echo invertirCadena(); 

?>