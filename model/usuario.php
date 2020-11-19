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
    public function productos_persona($id_persona){
        $stmt=$this->conexion->conectar()->prepare("SELECT count(*) AS resultado FROM productos where id_vendedor=:id_persona");
        $stmt->bindParam(":id_persona",$id_persona,PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
        
    }

}
?>