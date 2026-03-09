<?php

require_once('Correo.php');

$CorreoGmail = new Correo();

$CorreoGmail-> setDe("diego@gmail.com");

//recupera o accede a un valor ya asignado a un tributo

public function getDe(){

    return $this->de;
}

?>