<?php
require_once 'model/conexion.php';
class productos{

    public $conexion;

    public function __construct()
    {
        $this->conexion=new conexion();
    }

    //Lista los productos pero solo de los usuarios que no se han eliminado 
    public function listar_productos(){
        $stmt=$this->conexion->conectar()->prepare("
        SELECT * FROM cli_pro INNER JOIN productos ON cli_pro.id_cli_pro=productos.id_vendedor INNER JOIN categorias ON productos.categoria=categorias.id_categoria WHERE categoria=id_categoria AND condicion=1");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }

    //Metodo para ver los productos publicados por un usuario
    public function productos_usuario($id_usuario){
        $stmt=$this->conexion->conectar()->prepare("SELECT count(*) AS resultado FROM productos where id_vendedor=:id_usuario");
        $stmt->bindParam(":id_usuario",$id_usuario,PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
    
    public function eliminar_producto($id_producto){
        $stmt=$this->conexion->conectar()->prepare("");
        $stmt->bindParam(":id_producto",$id_producto,PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function productos_agregados(){
        $stmt=$this->conexion->conectar()->prepare("SELECT COUNT(*) as resultado  FROM productos 
        INNER JOIN cli_pro ON productos.id_vendedor=cli_pro.id_cli_pro WHERE MONTH(fecha) = MONTH(CURRENT_DATE()) and condicion=1");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}




?>