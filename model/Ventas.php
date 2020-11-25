<?php
require_once 'conexion.php';
class ventas{
    
    public function __construct()
    {
        $this->conexion=new conexion();
    
    }
    public function ventas_usuario($id_usuario){
        $stmt=$this->conexion->conectar()->prepare("
        SELECT count(*) as resultado FROM mis_compras 
        INNER JOIN productos On mis_compras.idProducto=productos.id_producto 
        INNER JOIN cli_pro On productos.id_vendedor=cli_pro.id_cli_pro WHERE id_cli_pro=:id_usuario");
        $stmt->bindParam(":id_usuario",$id_usuario,PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
