<?php 

echo "¿Cuántas llantas quisiera comprar?

Recuerde que si compra menos de 6 el valor unitario es de $240000.
Si compra 6 o 7 el valor unitario es de $221000.
Si compra más de 7 el valor unitario es igual a $180000";

$llantas = readline();

if($llantas < 6){
    $unidad = 240000;
    $valor = $llantas * $unidad;

    echo "El precio total de su compra por la cantidad de {$llantas} llantas, es igual a $ {$valor}";

}else if($llantas == 6 && $llantas == 7){
    $unidad = 221000;
    $valor = $llantas * $unidad;

    echo "El precio total de su compra por la cantidad de {$llantas} llantas, es igual a $ {$valor}";

}else if($llantas > 7){
    $unidad = 180000;
    $valor = $llantas * $unidad;

    echo "El precio total de su compra por la cantidad de {$llantas} llantas, es igual a $ {$valor}";

}else{
    echo "¡Cantidad no valida!, intente de nuevo.";
}

?>