<?php
require_once 'conexion.php';
class mis_compras{
    
    public function __construct()
    {
        $this->conexion=new conexion();
    
    }
    
    //Metodo para mostrar cuantas compras ha hecho un usuario
    public function Compras_usuario($id_usuario){
        $stmt=$this->conexion->conectar()->prepare("SELECT COUNT(*) as resultado FROM mis_compras WHERE id_comprador=:id_usuario;");
        $stmt->bindParam(":id_usuario",$id_usuario,PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}


?>