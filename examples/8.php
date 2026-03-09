<?php

require_once('correo.php');

$CorreoGmail = new Correo();

$CorreoGmail-> setDe("diego@gmail.com");

echo $CorreoGmail-> getDe();

?>