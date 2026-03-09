<!-- calcular el 30%, 60% y 90% -->

<?php 

$digito = readline("Ingrese cualquier digito: ");

$resultado1 = $digito * 30 / 100;
$resultado2 = $digito * 60 / 100;
$resultado3 = $digito * 90 / 100;

echo "Tu digito ha sido {$digito}, el 30% de eso es {$resultado1}.
El 60% de ese digito es {$resultado2}.
El 90% de ese digito es {$resultado3}";

?>