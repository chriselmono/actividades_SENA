<?php

function letras($palabra) {

    return [
        'mayusculas' => preg_match_all('/[A-Z]/', $palabra),

        'minusculas' => preg_match_all('/[a-z]/', $palabra)
    ];
}

$frase = readline("Digite una frase para calcular mayusculas y minusculas: ");

$total = letras($frase);

echo "El número total de mayusculas es igual a: ". $total['mayusculas']. "\n";

echo "El número total de minusculas es igual a: ". $total['minusculas'];

?>
