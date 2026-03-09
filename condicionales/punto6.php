<?php

$menu = "Escoge una opción :
1. Área de un rectángulo.
2. Área de un cuadrado.
3. Área de un paralelogramo.
4. Área de un rombo.
5. Área de un trapecio.
6. Área de un triángulo.
7. Área de un triángulo equilatero.
8. Área de un triángulo rectángulo.
9. Área de un polígono regular.
Opción: ";

echo "";

$opcion = readline($menu);
    
if($opcion==1){ 
        echo "Digita un lado A de su rectángulo: ";
        $a = readline();

        echo "Digite el lado B de su rectángulo: ";
        $b = readline();

        $area = $a * $b;
        echo "El área de su rectángulo es igual a {$area}";
    }else if($opcion==2){
            echo "Digite el valor del lado de su cuadrado: ";
            $lado = readline();

            $area = $lado * $lado;
            echo "El área de su cuadrado es igual a {$area}";
        }else if($opcion == 3){
                echo "Digite el valor de la base del paralelogramo: ";
                $b = readline();

                echo "Digite el valor de la altura del paralelogramo: ";
                $h = readline();

                $area = $b * $h;
                echo "El valor del área del paralelogramo es igual a: {$area}";
            }else if ($opcion==4){
                    echo "Digita el valor de la primera diagonal: ";
                    $ac = readline();

                    echo "Digite el valor de la segunda diagonal: ";
                    $bd = readline();

                    $area = ($ac * $bd) /2;
                    echo "El valor del área del rombo es igual a: 
                    {$area}";
                }else if($opcion == 5){
                    echo "Digite el primer lado del trapecio: ";
                    $a = readline();

                    echo "Digite el segundo lado del trapecio: ";
                    $b = readline();

                    echo "Digite la altura del trapecio: ";
                    $h = readline();

                    $area = (($a + $b)/2) * $h;
                    echo "El área del trapecio es igual a: 
                    {$area}";
                }else if($opcion == 6){
                    echo "Digite el valor de la base del triángulo: ";
                    $b = readline();

                    echo "Digite el valor de la altura del triángulo: ";
                    $h = readline();

                    $area = ($b * $h) /2;
                    echo "El área del triángulo es igual a: 
                    {$area}";
                }else if($opcion == 7){
                    echo "Digite el valor del lado del triángulo: ";
                    $a = readline();

                    $area = (($a ** 2)* sqrt(3))/4;
                    echo "El área del triángulo es igual a: 
                    {$area}";
                }else if($opcion == 8){
                    echo "Digite el valor del primer cateto: ";
                    $ca = readline();

                    echo "Digite el valor del segundo cateto: ";
                    $co = readline();

                    $area = ($ca * $co) /2;

                    echo "El área del triángulo rectángulo es igual a:
                    {$area}";
                }else if($opcion == 9){
                    echo "Digite el valor del perimetro del poligono regular: ";
                    $p = readline();

                    echo "Digite el valor de la apotema: ";
                    $ap = readline();

                    $area = ($p * $ap)  / 2;
                    echo "El valor del área del poligono regular es igual a: 
                    {$area}";
                }else{
                    echo "Opción no valida";
                }


?>