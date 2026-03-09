<?php

declare(strict_types=1);

//inicio funciones");

function maximo(){

    $num1 = readline("Digite su primer número: ");

    $num2 = readline("Digite su segundo número: ");
    
    $num3 =  readline("Digite su tercer número: ");

    if($num1 >= $num2 && $num2 >= $num3){ 
        echo "Este es el número máximo de los tres: 
        {$num1}";

    }else if($num1 <= $num2 && $num1 >= $num3){ 
        echo "Este es el número máximo de los tres: 
        {$num2}";
    
    }else if($num1 <= $num2 && $num2 <= $num3){ 
        echo "Este es el número máximo de los tres: 
        {$num3}";
    }else if($num1 >= $num2 && $num2 <= $num3 && $num1 >= $num3){ 
        echo "Este es el número máximo de los tres: 
        {$num1}";
    }else if($num1 >= $num2 && $num3 >= $num1){ 
        echo "Este es el número máximo de los tres: 
        {$num3}";
    }else if ($num1 >= $num2 && $num2 <= $num3 && $num1 >= $num3){
        echo "Este es el número máximo de los tres: 
        {$num1}";
    }

}

maximo();

?>