<?php

$peso = readline("Digite su peso en kg: "); // Peso en kg

$estatura = readline("Digite su estatura en metros: "); 

$imc = $peso / ($estatura * $estatura);

if ($imc < 18.5) {

    echo "Estado: Desnutrido";

} elseif ($imc >= 18.5 && $imc <= 25) {

    echo "Estado: Normal";

} elseif ($imc > 25 && $imc <= 30) {

    echo "Estado: Sobrepeso";

} else if ($imc > 30 && $imc <= 35){

    echo "Estado: Obesidad grado 1";

} else if ($imc > 35 && $imc <= 40){

    echo "Estado: Obesidad grado 2";

} else if ($imc > 40 && $imc <= 50){

    echo "Estado: Obesidad grado 3";

} else if ($imc > 50){

    echo "Estado: Obesidad grado 4";

}

?>
