<?php
require_once 'model/conexion.php';
class usuario
{

    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
    }

    public function listar_usuarios(){
        $stmt=$this->conexion->conectar()->prepare("SELECT * FROM cli_pro where rol='usuario'");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }

}
?>