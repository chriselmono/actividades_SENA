<!-- Salario de un empleado -->

<?php 

//digitar primero el valor de salario por cada hora trabajada, teniendo en cuenta que son 8 horas laborales

$dia = readline("Digite el valor de salario por cada hora laboral: ");
$salariodia = $dia * 8;

$dias = readline("Cantidad de días que el empleado trabajó en el mes: ");

$salariomes = $salariodia * $dias;

//descontar 10% pension y 15% salud

$pension = $salariomes * 10 /100;
$salud = $salariomes * 15 /100;

$salariototal = $salariomes - $pension - $salud;

echo "El salario total del empleado teniendo en cuenta salud y pension es $ {$salariototal} COP";



?>