<!-- Valor que pagará un cliente por compra de varios productos de la misma referencia -->

<?php 

// referencia productos de hardware

$mause = 215000;
$teclado = 300000;
$ram = 120000;
$grafica = 2900000;
$pantalla =90000;

$compra = ($mause * 2) + $teclado + $grafica + $pantalla + ($ram * 3);
$valoriva = $compra * 16 / 100;
$valortotal = $compra + $valoriva;

echo "El valor total de su compra es $ {$valortotal} COP.";

?>
4732800