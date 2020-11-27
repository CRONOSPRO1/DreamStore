<?php 
require_once'conexion.php';
class categorias{

    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion;
    }
    
    //Muestra la categoria de un producto pasando como parametro un id de la categoria
    public function categoria_producto($id_categoria){
        $stmt=$this->conexion->conectar()->prepare("SELECT nombre_categoria as resultado FROM productos INNER JOIN categorias ON productos.categoria = categorias.id_categoria WHERE categoria=:id_categoria LIMIT 1");
        $stmt->bindParam(":id_categoria",$id_categoria,PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }







}
?>