<?php

function multiplicacion() {

    $resultado = 1;

    $lista = readline("Digita los números seguidos de una coma y espacio: ");

    $list = explode(",", $lista);

    foreach ($list as $numero) {

        $resultado *= $numero;

    }

    echo "El resultado es igual a: $resultado";

}

multiplicacion();

?>
