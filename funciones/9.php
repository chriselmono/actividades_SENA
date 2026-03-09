<?php

function unico() {

    $listaOriginal = readline("Digite los números seguidos de una coma y espacio: ");

    $original = explode(",", $listaOriginal);

    $listaUnica = array_unique($original);

    echo "Lista original: " . implode(", ", $original) . "\n";

    echo "Lista con elementos únicos: " . implode(", ", $listaUnica);

}

echo unico();

?>
