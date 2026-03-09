<?php

//Set sirve para asignar un valor iniciarl a un tributo de forma explicita y este nunca retorna nada.

public function setNombre($nombre){

    $this-> nombre = $nombre;
}

//this ayuda a diferenciar atributo de clase.

public function setNombre($nombre){
    
    $nombre = $nombre;

}

?>