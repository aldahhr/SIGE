<?php

class clsconexion{

    private $servidor='localhost';
    private $Base='bdSIGE';
    private $usuario='root';
    private $passw='';    
    private           

    public $conectar=null;

    function __construct(){
        $this->conectar = new mysqli($this->servidor, $this->usuario, $this->passw, $this->Base);

        if (mysqli_connect_errno()) {
            printf("Imposible conectarse: %s\n", mysqli_connect_error());
            exit();
        }
    }
}

?>
