<?php

echo "Digite su primer número: ";

$num1 = readline();

echo "Digite su segundo número: ";

$num2 = readline();

echo "Digite su tercer número: ";

$num3 =  readline();

echo "Escoge:
1. Orden ascendente.
2. Orden descendente.";

$opcion = readline();

if($opcion == 1){
if($num1 >= $num2 && $num2 >= $num3){ 
    echo "{$num1}
    {$num2}
    {$num3}";

}else if($num1 <= $num2 && $num1 >= $num3){ 
    echo "{$num2}
    {$num1}
    {$num3}";

}else if($num1 <= $num2 && $num2 <= $num3){ 
    echo "{$num3}
    {$num2}
    {$num1}";
}else if($num1 >= $num2 && $num2 <= $num3 && $num1 >= $num3){ 
    echo "{$num1}
    {$num3}
    {$num2}";
}else if($num1 >= $num2 && $num3 >= $num1){ 
    echo "{$num3}
    {$num1}
    {$num2}";
}else if ($num1 >= $num2 && $num2 <= $num3 && $num1 >= $num3){
    echo "{$num1}
    {$num3}
    {$num2}";
}
}

if($opcion == 2){
    if($num1 >= $num2 && $num2 >= $num3){ 
        echo "{$num3}
        {$num2}
        {$num1}";
    
    }else if($num1 <= $num2 && $num1 >= $num3){ 
        echo "{$num3}
        {$num1}
        {$num2}";
    
    }else if($num1 <= $num2 && $num2 <= $num3){ 
        echo "{$num1}
        {$num2}
        {$num3}";
    }else if($num1 >= $num2 && $num2 <= $num3 && $num1 >= $num3){ 
        echo "{$num2}
        {$num3}
        {$num1}";
    }else if($num1 >= $num2 && $num3 >= $num1){ 
        echo "{$num2}
        {$num1}
        {$num3}";
    }else if ($num1 >= $num2 && $num2 <= $num3 && $num1 >= $num3){
        echo "{$num2}
        {$num3}
        {$num1}";
    }
    }

?>