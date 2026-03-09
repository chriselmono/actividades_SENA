<!-- transformar segundos en horas y minutos -->

<?php 

//tenemos en cuenta que 1 minuto son 60 segundos y 1 hora son 3600 segundos

$segundos = readline("Digite la cantidad de segundos que quiera calcular: ");

$horas = $segundos / 3600;
$otrosegundo = $segundos % 3600;
$minutos = $otrosegundo / 60;



echo "Los segundos '{$segundos}' en total en horas y minutos es igual a " . floor($horas) . " horas y " . floor($minutos) . " minutos";

?>