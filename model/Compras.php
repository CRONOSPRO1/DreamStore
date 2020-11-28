<?php
require_once 'conexion.php';
class compras{
    
    public function __construct()
    {
        $this->conexion=new conexion();
    
    }
    
    //Muestra toda la informacion relacionada con una compra
    public function listar_compras($id_compra){
        $stmt = $this->conexion->conectar()->prepare("
        SELECT *  FROM mis_compras 
        INNER JOIN productos ON mis_compras.idProducto=productos.id_producto 
        INNER JOIN cli_pro ON productos.id_vendedor=cli_pro.id_cli_pro WHERE id_compra=:id_compra");
        $stmt->bindParam(":id_compra",$id_compra,PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }



    

}
?>