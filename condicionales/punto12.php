<?php

$cantidad = readline("Ingresa La Cantidad de articulos Comprados: ");

$precio = readline("Ingresa el precio Unitario: ");

if ($cantidad <= "5") {

    echo "No obtienes un descuento en tu compra. \n";

    $total = $cantidad * $precio;

    echo "El Precio total Fue:  {$total}";

}elseif ($cantidad > 5 || $precio < 10) {

    echo "Tu tienes un Descuento del 5% por cada unidad \n";

    $descuento = $precio - (0.5 * $precio) ;

    $multiplicacion = $descuento * $precio;

    $total = $cantidad * $multiplicacion;

    echo "El Precio total Fue:  {$total}";

}elseif($cantidad >= 10){

    echo "Tu tienes un Descuento del 8% por cada unidad \n";

    $descuento = $precio - (0.8 * $precio);

    $total = $cantidad * $descuento;

    echo "El Precio total Fue:  {$total}";
    
}

?>