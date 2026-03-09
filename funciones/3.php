<?php

function suma() {

    $lista = readline("Digita los números seguidos de una coma y espacio: ");

    $list = explode(", ", $lista);

    $suma = array_sum($list);

    echo "La suma total es igual a: $suma";

}

suma();

?>