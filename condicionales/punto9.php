<?php

echo "Digite el valor total a pagar: ";
$valor = readline();



if($valor < 150000){
    echo "Tu opción de pago es efectivo.
    ¿Quiere pagar en efectivo?
    1. Sí.
    2. No.";
    $opcion = readline();

    if($opcion == 1){
        echo "¡Feliz compra!";
    }else{
        echo "Compra cancelada.";
    }
}else if($valor >= 150000 &&  $valor <= 300000){
    echo "Tus opciones de pago son efectivo y pago electrónico (Con el celular).
    ¿Con qué desea pagar?
    1. Efectivo.
    2. Dinero electrónico.
    3. Cancelar compra.";

    $opcion = readline();

    if($opcion == 1){
        echo "¡Feliz compra!";
    }else if($opcion == 2){
        echo "No te retires hasta comprobar la compra.
        ¡Feliz día!";
    }else if($opcion == 3){
        echo "Compra cancelada, ¡Feliz día!";
    }else{
        echo "opción no valida";
    }
}else if($valor > 300000 && $valor <= 600000){
    echo "Tus opciones de pago son efectivo y pago electrónico (Con el celular).
    ¿Con qué desea pagar?
    1. Efectivo.
    2. Dinero electrónico.
    3. Pago con Debito.
    4. Cancelar compra.";

    $opcion = readline();

    if($opcion == 1){
        echo "¡Feliz compra!";
    }else if($opcion == 2){
        echo "No te retires hasta comprobar la compra.
        ¡Feliz día!";
    }else if($opcion == 3){
        echo "¡Feliz compra!";
    }else if($opcion == 4){
        echo "Compra cancelada, ¡Feliz día!";
    }else{
        echo "opción no valida";
    }
}else if($valor > 600000){
    echo "Tus opciones de pago son efectivo y pago electrónico (Con el celular).
    ¿Con qué desea pagar?
    1. Efectivo.
    2. Dinero electrónico.
    3. Pago con débito.
    4. Pago con crédito.
    5. Cancelar compra.";

    $opcion = readline();

    if($opcion == 1){
        echo "¡Feliz compra!";
    }else if($opcion == 2){
        echo "No te retires hasta comprobar la compra.
        ¡Feliz día!";
    }else if($opcion == 3){
        echo "¡Feliz compra!";
    }else if($opcion == 4){
        echo "¡Feliz compra!";
}else if($opcion == 5){
        echo "Compra cancelada, ¡Feliz día!";
    }else{
        echo "opción no valida";
    }

}


?>