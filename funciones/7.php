<?php

function rango($inicio, $final, $num) {

    return $num >= $inicio && $num <= $final;

}

$inicio = readline("Digite un número para iniciar el rango: ");
$final = readline("Digite un número para final del rango: ");
$num = readline("Digite el número para saber si está dentro o fuera del rango: ");

$resultado = rango($inicio, $final, $num);

if ($resultado) {
    echo "Tu número está dentro del rango [$inicio, $final].";
} else {
    echo "Tu número está fuera del rango [$inicio, $final].";
}

?>
