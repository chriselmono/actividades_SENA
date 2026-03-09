<?php

$numero = readline("Digite un número para saber si es o no primo: ");

if(Primo($numero)){

    echo 'Es primo';

}else{

    echo 'No es primo';

}

function Primo($numero){
    if(!is_numeric($numero))
        
        return false;
    
    for ($i = 2; $i < $numero; $i++) {
        
        if (($numero % $i) == 0) {
            
            // No es primo :(
            return false;

        }

    }

    // Es primo :)
    return true;
}

?>