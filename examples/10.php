<?php

class Correo{

    private $de;
    private  $asunto;
    private $mensaje;
    private  $para;

    public function setDe($de){

        $this->de = $de;

    }

    public function getDe(){

        return $this->de;

    }

    public function setAsunto($asunto){

        $this->asunto = $asunto;

    }

    public function getAsunto(){

        return $this->asunto;

    }

    public function setMensaje($mensaje){

        $this->mensaje = $mensaje;

    }

    public function getMensaje(){

        return $this->mensaje;

    }

    public function setPara($para){

        $this->para = $para;

    }

    public function getPara(){

        return $this->para;

    }
}
?>