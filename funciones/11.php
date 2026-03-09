<?php

function par($num){

        if($num %2==0){
            
            echo "El número es par.";

        }else{

            echo "El número es impar.";

        }


}

$num = readline("Digite un número: ");

echo par($num);

?>