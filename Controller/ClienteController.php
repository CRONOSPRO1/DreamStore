<?php
require_once'model/usuarios.php';
class ClienteController{

    public $model_usuario;

    public function __construct(){
        $this->model_usuario= new usuario;
    }

    public function ver_articulo(){
        require_once'view/cliente/ver_articulos.php';
        echo "hola";
    
    }

  

}





?>