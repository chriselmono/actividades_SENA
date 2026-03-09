<?php
        
function palindromo($palabra)
{
    $palabra = strtolower($palabra);

    $palabra = str_replace(" ", "", $palabra);

    if($palabra == strrev($palabra))
    {

        return "La palabra es palindromo.";

    }
    else {

        return "La palabra no es palindromo.";

    }
}

$palabra=readline("Digite una palabra o frase para saber si es o no palindromo: ");

echo palindromo($palabra);

?>