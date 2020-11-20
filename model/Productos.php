<?php
require_once 'model/conexion.php';
class productos{

    public $conexion;

    public function __construct()
    {
        $this->conexion=new conexion();
    }

    public function listar_productos(){
        $stmt=$this->conexion->conectar()->prepare("SELECT * FROM productos INNER JOIN categorias ON productos.categoria = categorias.id_categoria WHERE categoria=id_categoria");
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
}




?>