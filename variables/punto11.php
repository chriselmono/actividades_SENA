<!-- Raiz cuadrada sin funcion -->

<!-- para no usar una funcion se puede usar el metodo de aproximación de newton -->
<?php 

$numero = readline("Digite el número que quiera calcular: ");

$aproximacion = $numero / 2;

//creamos una tolerancia para convergencia
//la tolerancia no es obligatoria pero es para más presición ya que sin ella nos podriamos quedar en un bucle o tener resultados erroneos
$tolerancia = 1e-6; //0.00000001 1e-6 (micro)

//se itera hasta que la convergencia se dirija a la raiz correcta
while (abs ($aproximacion * $aproximacion - $numero) > $tolerancia) {
    $aproximacion = 0.5 * ($aproximacion + $numero / $aproximacion);
}

echo "la raiz cuadrada de {$numero} es igual a ". number_format($aproximacion);

?>