<!-- calcular la hipotenusa con teorema de pitagoras -->

<?php 

$catetoAdy = readline("Digita el valor del cateto adyacente del triángulo: ");
$catetoOp = readline("Digita el valor del cateto opuesto del triángulo: ");

$raiz = ($catetoAdy ** 2) + ($catetoOp ** 2);

$hipotenusa = $raiz / 2; 

//creamos una tolerancia para convergencia
//la tolerancia no es obligatoria pero es para más presición ya que sin ella nos podriamos quedar en un bucle o tener resultados erroneos
$tolerancia = 1e-6; //0.00000001 1e-6
 //iteramos hasta que la convergencia se dirija al resutlado correcto
 while (abs ($hipotenusa * $hipotenusa - $raiz) > $tolerancia) {
    $hipotenusa = 0.5 * ($hipotenusa + $raiz / $hipotenusa);

 }

 echo "La hipotenusa tel triágulo es igual a " . number_format($hipotenusa, 6) ;


?>